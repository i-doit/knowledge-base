---
title: Docker auf Ubuntu GNU/Linux
description: i-doit als Docker-Container auf Ubuntu GNU/Linux installieren
icon: material/ubuntu
status:
lang: de
---

!!! note "Getestet mit i-doit **38** und **Ubuntu 24.04 LTS (Noble Numbat)**"

Diese Anleitung beschreibt die manuelle Installation von i-doit als Docker-Container auf Ubuntu GNU/Linux.

## Systemvoraussetzungen

Es gelten die allgemeinen [Systemvoraussetzungen](../systemvoraussetzungen.md). Zusätzlich werden benötigt:

- **Docker** ≥ 24 mit Compose-Plugin
- Root-Rechte oder `sudo`-Zugang
- Internetverbindung

## Docker installieren

Zunächst werden die benötigten Basispakete installiert:
<!-- cSpell:disable -->
```sh
sudo apt-get update
sudo apt-get install -y ca-certificates curl gnupg unzip wget jq default-mysql-client
```
<!-- cSpell:enable -->
Docker wird über das offizielle Installationsscript eingerichtet:
<!-- cSpell:disable -->
```sh
curl -fsSL https://get.docker.com -o get-docker.sh
sudo sh get-docker.sh
sudo apt-get install -y docker-compose-plugin
```
<!-- cSpell:enable -->

## Projektstruktur anlegen

Ein Verzeichnis für den i-doit Docker-Setup wird erstellt:
<!-- cSpell:disable -->
```sh
sudo mkdir -p /opt/idoit-docker/{config,html,mysql_data}
cd /opt/idoit-docker
```
<!-- cSpell:enable -->

## Dockerfile erstellen

Das Dockerfile baut ein PHP-Apache-Image mit allen für i-doit benötigten PHP-Extensions:
<!-- cSpell:disable -->
```sh
sudo nano /opt/idoit-docker/Dockerfile
```
<!-- cSpell:enable -->
<!-- cSpell:disable -->
```dockerfile
FROM php:8.2-apache
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libldap2-dev libpq-dev libzip-dev \
    libmemcached-dev zlib1g-dev libxml2-dev default-mysql-client cron \
    && rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-configure gd --with-jpeg \
    && docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu/ \
    && docker-php-ext-install -j$(nproc) bcmath gd pdo pdo_mysql pdo_pgsql ldap soap xml zip mysqli opcache sockets
RUN pecl install memcached && docker-php-ext-enable memcached
RUN a2enmod rewrite headers
WORKDIR /var/www/html
```
<!-- cSpell:enable -->

## Konfigurationsdateien erstellen

### PHP-Konfiguration
<!-- cSpell:disable -->
```sh
sudo nano /opt/idoit-docker/config/php.ini
```
<!-- cSpell:enable -->
<!-- cSpell:disable -->
```ini
allow_url_fopen = Yes
file_uploads = On
max_execution_time = 300
max_input_vars = 10000
memory_limit = 256M
post_max_size = 128M
short_open_tag = On
upload_max_filesize = 128M
date.timezone = Europe/Berlin
session.gc_maxlifetime = 604800
```
<!-- cSpell:enable -->

!!! tip "Das `memory_limit` kann bei Bedarf auf `512M` erhöht werden, z.B. bei größeren Reports oder vielen Objekten."

### MariaDB-Konfiguration
<!-- cSpell:disable -->
```sh
sudo nano /opt/idoit-docker/config/mariadb.cnf
```
<!-- cSpell:enable -->
<!-- cSpell:disable -->
```ini
[mysqld]
innodb_buffer_pool_size = 1G
innodb_log_file_size = 512M
max_allowed_packet = 128M
max_connections = 200
innodb_file_per_table = 1
innodb_flush_log_at_trx_commit = 1
innodb_flush_method = O_DIRECT
tmp_table_size = 32M
max_heap_table_size = 32M
sort_buffer_size = 262144
join_buffer_size = 262144
innodb_sort_buffer_size = 64M
innodb_stats_on_metadata = 0
sql-mode = ""
```
<!-- cSpell:enable -->

!!! info "Der Query Cache wurde in MariaDB 10.6 entfernt. Die entsprechenden `query_cache_*`-Einstellungen aus älteren Anleitungen sind nicht mehr relevant und können weggelassen werden."

### Cron-Konfiguration

Der Cron-Container führt die i-doit-Hintergrundaufgaben aus:
<!-- cSpell:disable -->
```sh
sudo nano /opt/idoit-docker/config/idoit-cron
```
<!-- cSpell:enable -->
<!-- cSpell:disable -->
```
* * * * * www-data php /var/www/html/console.php controller-worker -v >> /var/log/apache2/cron.log 2>&1
```
<!-- cSpell:enable -->

## docker-compose.yml erstellen
<!-- cSpell:disable -->
```sh
sudo nano /opt/idoit-docker/docker-compose.yml
```
<!-- cSpell:enable -->
<!-- cSpell:disable -->
```yaml
services:
  idoit-db:
    image: mariadb:10.6
    restart: always
    environment:
      MARIADB_ROOT_PASSWORD: idoit_secure_password
      MARIADB_ROOT_HOST: "%"
    volumes:
      - ./mysql_data:/var/lib/mysql
      - ./config/mariadb.cnf:/etc/mysql/conf.d/idoit.cnf:ro

  idoit-memcached:
    image: memcached:alpine
    restart: always

  idoit-web:
    build: .
    restart: always
    ports:
      - "80:80"
    volumes:
      - ./html:/var/www/html
      - ./config/php.ini:/usr/local/etc/php/conf.d/idoit.ini:ro
    environment:
      - DB_HOST=idoit-db
    depends_on:
      - idoit-db
      - idoit-memcached

  idoit-cron:
    build: .
    restart: always
    command: ["cron", "-f"]
    volumes:
      - ./html:/var/www/html
      - ./config/php.ini:/usr/local/etc/php/conf.d/idoit.ini:ro
      - ./config/idoit-cron:/etc/cron.d/idoit:ro
    depends_on:
      - idoit-db
      - idoit-memcached
```
<!-- cSpell:enable -->

!!! warning "Das Datenbankpasswort `idoit_secure_password` sollte durch ein sicheres, individuelles Passwort ersetzt werden."

Nach der Installation muss Memcached in i-doit unter **Verwaltung → Systemeinstellungen → Memcache** aktiviert werden:

- **Memcache Host**: `idoit-memcached`
- **Memcache Port**: `11211`

## i-doit herunterladen

i-doit wird vom offiziellen Update-Feed heruntergeladen und in das HTML-Verzeichnis entpackt:
<!-- cSpell:disable -->
```sh
cd /opt/idoit-docker
wget -q -O updates.xml https://i-doit.com/updates.xml
DOWNLOAD_URL=$(grep -oP "(?<=<filename>)[^<]+" updates.xml | tail -n 1)
DOWNLOAD_URL=${DOWNLOAD_URL/-update.zip/.zip}
wget -O idoit.zip "$DOWNLOAD_URL"
sudo unzip -q -o idoit.zip -d html/
rm idoit.zip updates.xml
sudo chown -R 33:33 html/
sudo find html/ -type d -exec chmod 775 {} \;
sudo find html/ -type f -exec chmod 664 {} \;
```
<!-- cSpell:enable -->

## Container starten
<!-- cSpell:disable -->
```sh
cd /opt/idoit-docker
sudo docker compose build --no-cache
sudo docker compose up -d
```
<!-- cSpell:enable -->

Der erste Start dauert einige Minuten, da das PHP-Image gebaut und alle Extensions kompiliert werden.

## i-doit einrichten

Sobald die Datenbank bereit ist, wird i-doit über die Kommandozeile eingerichtet:
<!-- cSpell:disable -->
```sh
# Warten bis die Datenbank bereit ist
until sudo docker compose exec -T idoit-web php -r "try { new PDO('mysql:host=idoit-db', 'root', 'idoit_secure_password'); exit(0); } catch (PDOException \$e) { exit(1); }" 2>/dev/null; do
    echo "Warte auf Datenbank..."
    sleep 3
done

# i-doit System installieren
sudo docker compose exec -T --user 33 idoit-web php console.php install \
    -u root -p "idoit_secure_password" --host="idoit-db" -d idoit_system \
    -U idoit -P "idoit_secure_password" --admin-password "admin123" -n

# Mandant anlegen
sudo docker compose exec -T --user 33 idoit-web php console.php tenant-create \
    -u root -p "idoit_secure_password" -U idoit -P "idoit_secure_password" \
    -d idoit_data -t "My Company" -n
```
<!-- cSpell:enable -->

Nach der Installation ist i-doit unter `http://<IP-Adresse>/` erreichbar.

!!! success "Standardzugänge nach der Installation"
    - **i-doit**: Benutzer `admin`, Passwort `admin`
    - **Admin Center**: Benutzer `admin`, Passwort `admin123`

## Datensicherung

Für regelmäßige Backups werden die Datenbank und das i-doit-Verzeichnis gesichert. Das folgende Script legt täglich ein Backup unter `/opt/idoit-backup/` ab:
<!-- cSpell:disable -->
```sh
sudo mkdir -p /opt/idoit-backup
sudo nano /opt/idoit-backup/backup.sh
```
<!-- cSpell:enable -->
<!-- cSpell:disable -->
```sh
#!/bin/bash
DATE=$(date +%Y-%m-%d)
BACKUP_DIR="/opt/idoit-backup"
INSTALL_DIR="/opt/idoit-docker"

# Datenbank sichern
docker compose -f "${INSTALL_DIR}/docker-compose.yml" exec -T idoit-db \
    mysqldump -u root -pidoit_secure_password --all-databases \
    > "${BACKUP_DIR}/db_${DATE}.sql"

# i-doit-Verzeichnis sichern (ohne Cache und Temp)
tar czf "${BACKUP_DIR}/html_${DATE}.tar.gz" \
    --exclude="${INSTALL_DIR}/html/temp" \
    --exclude="${INSTALL_DIR}/html/log" \
    "${INSTALL_DIR}/html/"

# Backups älter als 14 Tage löschen
find "${BACKUP_DIR}" -name "*.sql" -o -name "*.tar.gz" | xargs ls -t | tail -n +29 | xargs rm -f 2>/dev/null

echo "Backup ${DATE} abgeschlossen."
```
<!-- cSpell:enable -->
<!-- cSpell:disable -->
```sh
sudo chmod +x /opt/idoit-backup/backup.sh
```
<!-- cSpell:enable -->
Damit das Script täglich automatisch ausgeführt wird:
<!-- cSpell:disable -->
```sh
echo "0 2 * * * root /opt/idoit-backup/backup.sh >> /opt/idoit-backup/backup.log 2>&1" \
    | sudo tee /etc/cron.d/idoit-backup
```
<!-- cSpell:enable -->

## Nächster Schritt

Die Installation ist abgeschlossen. Im nächsten Schritt eine Lizenz einspielen und die ersten Einstellungen vornehmen:

[Weiter zu **Setup**](../manuelle-installation/setup.md)
