#!/bin/bash
##
## i-doit automatisches Installations-Script für openSUSE Leap 15.6
##
## Verwendung:
##   ./idoit-install-opensuse156.sh
##
## Konfiguration per Umgebungsvariablen (alle optional):
##   MARIADB_ROOT_PW=...        MariaDB root-Passwort        (Standard: idoit)
##   MARIADB_IDOIT_PW=...       Passwort für idoit DB-User   (Standard: idoit)
##   IDOIT_ADMIN_PW=...         Admin Center Passwort        (Standard: admin)
##   IDOIT_LICENSE_TOKEN=...    Lizenz-Token (optional)
##   IDOIT_TENANT=...           Mandant-Name                 (Standard: CMDB)
##

set -euo pipefail

## ---------------------------------------------------------------------------
## Konfiguration
## ---------------------------------------------------------------------------

MARIADB_ROOT_PW="${MARIADB_ROOT_PW:-idoit}"
MARIADB_IDOIT_USER="idoit"
MARIADB_IDOIT_PW="${MARIADB_IDOIT_PW:-idoit}"
IDOIT_ADMIN_PW="${IDOIT_ADMIN_PW:-admin}"
IDOIT_LICENSE_TOKEN="${IDOIT_LICENSE_TOKEN:-}"
IDOIT_TENANT="${IDOIT_TENANT:-CMDB}"

INSTALL_DIR="/srv/www/htdocs"
APACHE_USER="wwwrun"
APACHE_GROUP="www"
PHP_FPM_SOCKET="/var/run/php-fpm.sock"
APACHE_VHOST="/etc/apache2/vhosts.d/i-doit.conf"
MARIADB_CONFIG="/etc/my.cnf.d/99-i-doit.cnf"
UPDATES_URL="https://i-doit.com/updates.xml"

## ---------------------------------------------------------------------------
## Hilfsfunktionen
## ---------------------------------------------------------------------------

log() { echo -e "\n\033[1;32m>>> $*\033[0m"; }
err() { echo -e "\033[1;31mFEHLER: $*\033[0m" >&2; exit 1; }

check_root() {
    [[ "$(id -u)" -eq 0 ]] || err "Script muss als root ausgeführt werden."
}

check_os() {
    source /etc/os-release 2>/dev/null || err "/etc/os-release nicht gefunden"
    [[ "$NAME" == "openSUSE Leap" && "$VERSION_ID" == "15.6" ]] \
        || err "Dieses Script läuft nur auf openSUSE Leap 15.6 (gefunden: ${PRETTY_NAME})"
    log "Betriebssystem: ${PRETTY_NAME} ✓"
}

fix_network() {
    # openSUSE-Templates haben oft ifcfg-eth0, aber die geklonte VM bekommt eth1.
    # Falls eth1 existiert und keine IP hat, ifcfg-eth0 → ifcfg-eth1 kopieren.
    local net_dir="/etc/sysconfig/network"
    if ip link show eth1 &>/dev/null && [[ ! -f "${net_dir}/ifcfg-eth1" ]]; then
        [[ -f "${net_dir}/ifcfg-eth0" ]] && cp "${net_dir}/ifcfg-eth0" "${net_dir}/ifcfg-eth1"
        wicked ifup eth1 2>/dev/null || true
        log "Netzwerk eth1 konfiguriert ✓"
    fi
}

## ---------------------------------------------------------------------------
## 1. Pakete installieren
## ---------------------------------------------------------------------------

install_packages() {
    log "Pakete aktualisieren und installieren"

    zypper --non-interactive --quiet refresh
    zypper --non-interactive --quiet update

    # PHP 8.2 aus den Standard-Leap-15.6-Repos (kein externes PHP-Repo nötig)
    zypper --non-interactive --quiet install --no-recommends \
        apache2 \
        apache2-mod_fcgid \
        mariadb mariadb-client \
        memcached \
        sudo unzip wget \
        php8 php8-cli php8-fpm php8-fpm-apache \
        php8-bcmath php8-curl php8-dom php8-gd \
        php8-ldap php8-mbstring php8-mysql php8-opcache php8-openssl \
        php8-pdo php8-pgsql php8-soap \
        php8-xmlreader php8-xmlwriter php8-xsl php8-zip php8-zlib \
        moreutils

    # Optionale Pakete (können fehlen – kein Fehler)
    zypper --non-interactive --quiet install --no-recommends \
        php8-imagick php8-memcached 2>/dev/null || true

    log "Pakete installiert ✓"
}

## ---------------------------------------------------------------------------
## 2. PHP-FPM konfigurieren
## ---------------------------------------------------------------------------

configure_php() {
    log "PHP konfigurieren"

    # PHP-INI Pfad für openSUSE
    local php_ini_dir
    php_ini_dir=$(php -r 'echo PHP_SYSCONFDIR;' 2>/dev/null || echo "/etc/php8")
    local php_ini="${php_ini_dir}/conf.d/i-doit.ini"

    mkdir -p "$(dirname "$php_ini")"

    cat > "$php_ini" << 'EOF'
allow_url_fopen = Yes
file_uploads = On
max_execution_time = 300
max_file_uploads = 42
max_input_time = 60
max_input_vars = 10000
memory_limit = 256M
post_max_size = 128M
register_argc_argv = On
short_open_tag = On
upload_max_filesize = 128M
display_errors = Off
display_startup_errors = Off
error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT
log_errors = On
default_charset = "UTF-8"
default_socket_timeout = 60
date.timezone = Europe/Berlin
session.gc_maxlifetime = 604800
session.cookie_lifetime = 0
mysqli.default_socket = /var/run/mysql/mysql.sock
EOF

    # PHP-FPM Konfiguration für Apache-User
    local fpm_conf="/etc/php8/fpm/php-fpm.d/i-doit.conf"
    mkdir -p "$(dirname "$fpm_conf")"

    # Standard www.conf anpassen
    if [[ -f /etc/php8/fpm/php-fpm.d/www.conf ]]; then
        sed -i "s|^listen = .*|listen = ${PHP_FPM_SOCKET}|" /etc/php8/fpm/php-fpm.d/www.conf
        sed -i "s|^;*listen.owner = .*|listen.owner = ${APACHE_USER}|" /etc/php8/fpm/php-fpm.d/www.conf
        sed -i "s|^;*listen.group = .*|listen.group = ${APACHE_GROUP}|" /etc/php8/fpm/php-fpm.d/www.conf
        sed -i "s|^user = .*|user = ${APACHE_USER}|" /etc/php8/fpm/php-fpm.d/www.conf
        sed -i "s|^group = .*|group = ${APACHE_GROUP}|" /etc/php8/fpm/php-fpm.d/www.conf
    fi

    log "PHP konfiguriert ✓"
}

## ---------------------------------------------------------------------------
## 3. Apache konfigurieren
## ---------------------------------------------------------------------------

configure_apache() {
    log "Apache konfigurieren"

    local hostname
    hostname="$(hostname -f 2>/dev/null || hostname)"

    # Apache Module aktivieren
    a2enmod rewrite proxy proxy_fcgi 2>/dev/null || true

    mkdir -p "${INSTALL_DIR}"

    cat > "$APACHE_VHOST" << EOF
ServerName ${hostname}

<VirtualHost *:80>
    ServerAdmin i-doit@example.net
    DocumentRoot ${INSTALL_DIR}
    DirectoryIndex index.php

    <Directory ${INSTALL_DIR}>
        AllowOverride None
        Options -Indexes +SymLinksIfOwnerMatch

        <IfModule mod_authz_core.c>
            RewriteCond %{REQUEST_METHOD} =GET
            RewriteRule "^\$" "/index.php"

            <Files "*.yml">
                Require all denied
            </Files>
            <FilesMatch "^\\.">
                Require all denied
            </FilesMatch>
            <Files "*.php">
                Require all denied
            </Files>
            <FilesMatch "\\.php\\.\\d+\$">
                Require all denied
            </FilesMatch>
            <FilesMatch "^(index\\.php|controller\\.php|proxy\\.php)\$">
                Require all granted
            </FilesMatch>
            <Files "jsonrpc.php">
                Require all granted
            </Files>
            <FilesMatch "^(rt\\.php|barcode_window\\.php|barcode\\.php)\$">
                Require all granted
            </FilesMatch>
            <FilesMatch "^(qr\\.php|qr_img\\.php)\$">
                Require all granted
            </FilesMatch>
            <FilesMatch "^js\\.php\$">
                Require all granted
            </FilesMatch>
        </IfModule>

        <IfModule mod_alias.c>
            RedirectMatch 403 /imports/.*\$
            RedirectMatch 403 /log/.*\$
            RedirectMatch 403 /temp/.*(?<!\.(css|xsl))\$
            RedirectMatch 403 /upload/files/.*\$
            RedirectMatch 403 /upload/images/.*\$
            RedirectMatch 403 /vendor/.*\$
        </IfModule>

        <IfModule mod_rewrite.c>
            RewriteEngine On
            RewriteRule favicon\\.ico\$ images/favicon.ico [L]
            RewriteCond %{REQUEST_FILENAME} !-l
            RewriteCond %{REQUEST_FILENAME} !-f
            RewriteCond %{REQUEST_FILENAME} !-d
            RewriteRule .* index.php [L,QSA]
        </IfModule>

        <Files "*.ini">
            Require all denied
        </Files>
    </Directory>

    TimeOut 600
    ProxyTimeout 600

    <FilesMatch "\\.php\$">
        <If "-f %{REQUEST_FILENAME}">
            SetHandler "proxy:unix:${PHP_FPM_SOCKET}|fcgi://localhost"
        </If>
    </FilesMatch>

    LogLevel warn
    ErrorLog /var/log/apache2/i-doit-error.log
    CustomLog /var/log/apache2/i-doit-access.log combined
</VirtualHost>
EOF

    chown "${APACHE_USER}:${APACHE_GROUP}" -R "${INSTALL_DIR}/"

    for unit in apache2 php-fpm mariadb memcached; do
        systemctl enable "$unit" 2>/dev/null || true
        systemctl restart "$unit" 2>/dev/null || true
    done

    # Firewall HTTP öffnen falls aktiv
    if systemctl is-active firewalld &>/dev/null; then
        firewall-cmd --permanent --add-service=http
        firewall-cmd --reload
    fi

    log "Apache konfiguriert ✓"
}

## ---------------------------------------------------------------------------
## 4. MariaDB konfigurieren
## ---------------------------------------------------------------------------

configure_mariadb() {
    log "MariaDB konfigurieren"

    mysql -u root -e "SET GLOBAL innodb_fast_shutdown = 0" 2>/dev/null || true
    systemctl stop mariadb

    mkdir -p "$(dirname "$MARIADB_CONFIG")"
    cat > "$MARIADB_CONFIG" << 'EOF'
[mysqld]
innodb_buffer_pool_size = 1G
innodb_log_file_size = 512M
innodb_sort_buffer_size = 64M
sort_buffer_size = 262144
join_buffer_size = 262144
max_allowed_packet = 128M
max_heap_table_size = 32M
query_cache_min_res_unit = 4096
query_cache_type = 1
query_cache_limit = 5M
query_cache_size = 80M
tmp_table_size = 32M
max_connections = 200
innodb_file_per_table = 1
innodb_flush_log_at_trx_commit = 1
innodb_flush_method = O_DIRECT
innodb_lru_scan_depth = 2048
table_definition_cache = 1024
table_open_cache = 2048
table_open_cache_instances = 8
innodb_stats_on_metadata = 0
sql-mode = ""
EOF

    systemctl start mariadb

    # Passwort setzen (idempotent: SET PASSWORD funktioniert mit und ohne vorherigem Passwort)
    mysql -u root -e "SET PASSWORD FOR 'root'@'localhost' = PASSWORD('${MARIADB_ROOT_PW}'); FLUSH PRIVILEGES;" \
        || err "MariaDB root-Passwort konnte nicht gesetzt werden"

    log "MariaDB konfiguriert ✓"
}

## ---------------------------------------------------------------------------
## 5. i-doit herunterladen und installieren
## ---------------------------------------------------------------------------

install_idoit() {
    log "Aktuelle i-doit Version ermitteln"

    local tmp_dir
    tmp_dir=$(mktemp -d)

    wget -q -O "${tmp_dir}/updates.xml" "$UPDATES_URL" \
        || err "updates.xml konnte nicht geladen werden"

    local url version
    url=$(php -r "
        \$xml = new SimpleXMLElement(file_get_contents('${tmp_dir}/updates.xml'));
        \$last = \$xml->updates->update[count(\$xml->updates->update)-1];
        echo str_replace('-update.zip', '.zip', (string)\$last->filename);
    ")
    version=$(php -r "
        \$xml = new SimpleXMLElement(file_get_contents('${tmp_dir}/updates.xml'));
        \$last = \$xml->updates->update[count(\$xml->updates->update)-1];
        echo (string)\$last->version;
    ")

    [[ -n "$url" ]] || err "Download-URL nicht gefunden"
    log "Lade i-doit ${version} herunter"

    wget -q -O "${tmp_dir}/i-doit.zip" "$url" \
        || err "i-doit Download fehlgeschlagen"

    log "i-doit entpacken"
    rm -rf "${INSTALL_DIR:?}/"* "${INSTALL_DIR}"/.[!.]* 2>/dev/null || true
    cd "$INSTALL_DIR"
    unzip -q "${tmp_dir}/i-doit.zip"

    chown "${APACHE_USER}:${APACHE_GROUP}" -R .
    find . -type d -exec chmod 775 {} \;
    find . -type f -exec chmod 664 {} \;
    rm -rf "$tmp_dir"

    log "i-doit ${version} entpackt ✓"
}

## ---------------------------------------------------------------------------
## 6. i-doit Setup via console.php
## ---------------------------------------------------------------------------

setup_idoit() {
    log "i-doit installieren (console.php)"

    sudo -u "${APACHE_USER}" php "${INSTALL_DIR}/console.php" install \
        -u root \
        -p "${MARIADB_ROOT_PW}" \
        --host localhost \
        -d idoit_system \
        -U "${MARIADB_IDOIT_USER}" \
        -P "${MARIADB_IDOIT_PW}" \
        --admin-password "${IDOIT_ADMIN_PW}" \
        -n \
        || err "i-doit Installation fehlgeschlagen"

    chown "${APACHE_USER}:${APACHE_GROUP}" "${INSTALL_DIR}/src/config.inc.php" 2>/dev/null || true

    log "Mandant '${IDOIT_TENANT}' anlegen"
    sudo -u "${APACHE_USER}" php "${INSTALL_DIR}/console.php" tenant-create \
        -u root \
        -p "${MARIADB_ROOT_PW}" \
        -U "${MARIADB_IDOIT_USER}" \
        -P "${MARIADB_IDOIT_PW}" \
        -d idoit_data \
        -t "${IDOIT_TENANT}" \
        -n \
        || err "Mandant konnte nicht angelegt werden"

    log "i-doit Setup abgeschlossen ✓"
}

## ---------------------------------------------------------------------------
## 7. Lizenz setzen (optional)
## ---------------------------------------------------------------------------

set_license() {
    [[ -n "$IDOIT_LICENSE_TOKEN" ]] || return 0

    log "Lizenz-Token setzen"

    local config="${INSTALL_DIR}/src/config.inc.php"
    sed -i "s/\\\$g_license_token[[:space:]]*=[[:space:]]*'[^']*'/\$g_license_token = '${IDOIT_LICENSE_TOKEN}'/" "$config" \
        || { echo "WARNUNG: Lizenz-Token konnte nicht in config.inc.php geschrieben werden"; return 0; }

    local import_out
    import_out=$(sudo -u "${APACHE_USER}" php "${INSTALL_DIR}/console.php" license-import \
        -u admin -p "${IDOIT_ADMIN_PW}" -n 2>&1) || true

    if echo "$import_out" | grep -q "OK" && ! echo "$import_out" | grep -q "FAIL"; then
        log "Lizenz importiert ✓"
    else
        echo "WARNUNG: Lizenz-Import fehlgeschlagen (Lizenzserver nicht erreichbar?)."
        echo "         Token ist gesetzt — bitte im Admin Center unter Lizenzen manuell importieren."
    fi
}

## ---------------------------------------------------------------------------
## Hauptprogramm
## ---------------------------------------------------------------------------

main() {
    check_root
    check_os
    fix_network

    install_packages
    configure_php
    configure_apache
    configure_mariadb
    install_idoit
    setup_idoit
    set_license

    local ip
    ip=$(ip route get 1 2>/dev/null | sed -n 's/.*src \([0-9.]*\).*/\1/p' | head -1)

    log "Installation abgeschlossen!"
    echo ""
    echo "  i-doit:       http://${ip}/"
    echo "  Admin Center: http://${ip}/?adminCenter"
    echo ""
    echo "  Admin Center Passwort: ${IDOIT_ADMIN_PW}"
    echo "  Standard Login:        admin / admin"
    echo ""
}

main "$@"
