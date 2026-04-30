#!/bin/bash
##
## i-doit automatisches Installations-Script für Ubuntu 24.04 LTS "Noble Numbat"
##
## Verwendung:
##   ./idoit-install-ubuntu2404.sh
##
## Konfiguration per Umgebungsvariablen (alle optional):
##   MARIADB_ROOT_PW=...        MariaDB root-Passwort        (Standard: idoit)
##   MARIADB_IDOIT_PW=...       Passwort für idoit DB-User   (Standard: idoit)
##   IDOIT_ADMIN_PW=...         Admin Center Passwort        (Standard: admin)
##   IDOIT_LICENSE_TOKEN=...    Lizenz-Token (optional)
##   IDOIT_TENANT=...           Mandant-Name                 (Standard: CMDB)
##
## Beispiel mit Lizenz-Token:
##   IDOIT_LICENSE_TOKEN=889bdc3c6a119da5f0a5d9c0db8747c6 ./idoit-install-ubuntu2404.sh
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

INSTALL_DIR="/var/www/html"
APACHE_USER="www-data"
APACHE_GROUP="www-data"
PHP_VERSION="8.3"
PHP_FPM_UNIT="php${PHP_VERSION}-fpm"
PHP_FPM_SOCKET="/var/run/php/php${PHP_VERSION}-fpm.sock"
PHP_INI="/etc/php/${PHP_VERSION}/mods-available/i-doit.ini"
APACHE_VHOST="/etc/apache2/sites-available/i-doit.conf"
MARIADB_CONFIG="/etc/mysql/mariadb.conf.d/99-i-doit.cnf"
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
    [[ "$NAME" == "Ubuntu" && "$VERSION_ID" == "24.04" ]] \
        || err "Dieses Script läuft nur auf Ubuntu 24.04 LTS (gefunden: ${PRETTY_NAME})"
    log "Betriebssystem: ${PRETTY_NAME} ✓"
}

## ---------------------------------------------------------------------------
## 1. Pakete installieren
## ---------------------------------------------------------------------------

install_packages() {
    log "Pakete aktualisieren und installieren"
    export DEBIAN_FRONTEND=noninteractive

    # Unterbrochene dpkg-Konfiguration abschließen falls nötig
    dpkg --configure -a 2>/dev/null || true

    apt-get -qq -y update
    # ca-certificates zuerst für HTTPS-Downloads
    apt-get -qq -y install ca-certificates wget

    apt-get -qq -y full-upgrade
    apt-get -qq -y install --no-install-recommends \
        apache2 \
        "php${PHP_VERSION}-fpm" \
        mariadb-client mariadb-server \
        memcached \
        unzip sudo moreutils \
        "php${PHP_VERSION}-bcmath" \
        "php${PHP_VERSION}-cli" \
        "php${PHP_VERSION}-common" \
        "php${PHP_VERSION}-curl" \
        "php${PHP_VERSION}-gd" \
        "php${PHP_VERSION}-imagick" \
        "php${PHP_VERSION}-ldap" \
        "php${PHP_VERSION}-mbstring" \
        "php${PHP_VERSION}-memcached" \
        "php${PHP_VERSION}-mysql" \
        "php${PHP_VERSION}-pgsql" \
        "php${PHP_VERSION}-soap" \
        "php${PHP_VERSION}-xml" \
        "php${PHP_VERSION}-zip"
    log "Pakete installiert ✓"
}

## ---------------------------------------------------------------------------
## 2. PHP konfigurieren
## ---------------------------------------------------------------------------

configure_php() {
    log "PHP konfigurieren"
    cat > "$PHP_INI" << 'EOF'
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
mysqli.default_socket = /var/run/mysqld/mysqld.sock
EOF
    phpenmod i-doit memcached
    log "PHP konfiguriert ✓"
}

## ---------------------------------------------------------------------------
## 3. Apache konfigurieren
## ---------------------------------------------------------------------------

configure_apache() {
    log "Apache konfigurieren"

    a2dismod "php${PHP_VERSION}" 2>/dev/null || true
    a2dismod mpm_prefork 2>/dev/null || true
    a2enmod mpm_event proxy proxy_fcgi setenvif rewrite alias

    local hostname
    hostname="$(hostname -f 2>/dev/null || hostname)"

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
            <FilesMatch "^(controller|\\.*.sh)\$">
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

        <IfModule mod_expires.c>
            ExpiresActive On
            ExpiresByType image/svg+xml A2592000
            ExpiresByType image/gif A2592000
            ExpiresByType image/png A2592000
            ExpiresByType image/jpeg A2592000
            ExpiresByType image/ico A2592000
            ExpiresByType text/css A2592000
            ExpiresByType text/javascript A2592000
            ExpiresByType image/x-icon "access 1 year"
            ExpiresDefault "access 2 week"
            <IfModule mod_headers.c>
                Header append Cache-Control "public"
            </IfModule>
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
    ErrorLog \${APACHE_LOG_DIR}/error.log
    CustomLog \${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
EOF

    a2dissite 000-default 2>/dev/null || true
    chown "${APACHE_USER}:${APACHE_GROUP}" -R "${INSTALL_DIR}/"
    a2ensite i-doit
    systemctl restart apache2 "${PHP_FPM_UNIT}"
    log "Apache konfiguriert ✓"
}

## ---------------------------------------------------------------------------
## 4. MariaDB konfigurieren
## ---------------------------------------------------------------------------

configure_mariadb() {
    log "MariaDB konfigurieren"

    mysql -u root -e "SET GLOBAL innodb_fast_shutdown = 0" 2>/dev/null || true
    systemctl stop mariadb

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

    # Root-Passwort setzen (Ubuntu 24.04: MariaDB 10.11)
    mysql -u root -e "ALTER USER 'root'@'localhost' IDENTIFIED VIA mysql_native_password USING PASSWORD('${MARIADB_ROOT_PW}');" \
        || err "MariaDB root-Passwort konnte nicht gesetzt werden"
    mysql -u root -p"${MARIADB_ROOT_PW}" -e "FLUSH PRIVILEGES;"

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
        || err "updates.xml konnte nicht geladen werden (Internetverbindung prüfen)"

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

    log "Lizenz-Token setzen und vom Lizenzserver abrufen"

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
