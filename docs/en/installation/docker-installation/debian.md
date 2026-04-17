---
title: Docker on Debian GNU/Linux
description: Install i-doit as Docker containers on Debian GNU/Linux
icon: material/debian
status:
lang: en
---

!!! note "Tested with i-doit **38** and **Debian 13 Trixie**"

This guide describes the manual installation of i-doit as Docker containers on Debian GNU/Linux.

## System Requirements

The general [system requirements](../system-requirements.md) apply. Additionally required:

- **Docker** ≥ 24 with Compose plugin
- Root privileges or `sudo` access
- Internet connection

## Install Docker

First, install the required base packages:
<!-- cSpell:disable -->
```sh
sudo apt-get update
sudo apt-get install -y ca-certificates curl gnupg unzip wget jq default-mysql-client
```
<!-- cSpell:enable -->
Docker is set up using the official install script:
<!-- cSpell:disable -->
```sh
curl -fsSL https://get.docker.com -o get-docker.sh
sudo sh get-docker.sh
sudo apt-get install -y docker-compose-plugin
```
<!-- cSpell:enable -->

## Create Project Structure

Create a directory for the i-doit Docker setup:
<!-- cSpell:disable -->
```sh
sudo mkdir -p /opt/idoit-docker/{config,html,mysql_data}
cd /opt/idoit-docker
```
<!-- cSpell:enable -->

## Create Dockerfile

The Dockerfile builds a PHP Apache image with all PHP extensions required by i-doit:
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

## Create Configuration Files

### PHP Configuration
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

!!! tip "The `memory_limit` can be increased to `512M` if needed, e.g. for large reports or many objects."

### MariaDB Configuration
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

!!! info "The query cache was removed in MariaDB 10.6. The `query_cache_*` settings found in older guides are no longer relevant and can be omitted."

### Cron Configuration

The cron container handles i-doit background tasks:
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

## Create docker-compose.yml
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

!!! warning "Replace `idoit_secure_password` with a strong, unique password."

After installation, enable Memcached in i-doit under **Administration → System Settings → Memcache**:

- **Memcache Host**: `idoit-memcached`
- **Memcache Port**: `11211`

## Download i-doit

i-doit is downloaded from the official update feed and extracted into the HTML directory:
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

## Start Containers
<!-- cSpell:disable -->
```sh
cd /opt/idoit-docker
sudo docker compose build --no-cache
sudo docker compose up -d
```
<!-- cSpell:enable -->

The first start takes a few minutes as the PHP image is built and all extensions are compiled.

## Set Up i-doit

Once the database is ready, i-doit is configured via the command line:
<!-- cSpell:disable -->
```sh
# Wait for the database to be ready
until sudo docker compose exec -T idoit-web php -r "try { new PDO('mysql:host=idoit-db', 'root', 'idoit_secure_password'); exit(0); } catch (PDOException \$e) { exit(1); }" 2>/dev/null; do
    echo "Waiting for database..."
    sleep 3
done

# Install i-doit system
sudo docker compose exec -T --user 33 idoit-web php console.php install \
    -u root -p "idoit_secure_password" --host="idoit-db" -d idoit_system \
    -U idoit -P "idoit_secure_password" --admin-password "admin123" -n

# Create tenant
sudo docker compose exec -T --user 33 idoit-web php console.php tenant-create \
    -u root -p "idoit_secure_password" -U idoit -P "idoit_secure_password" \
    -d idoit_data -t "My Company" -n
```
<!-- cSpell:enable -->

After installation, i-doit is accessible at `http://<IP-address>/`.

!!! success "Default credentials after installation"
    - **i-doit**: User `admin`, password `admin`
    - **Admin Center**: User `admin`, password `admin123`

## Backup

The following script creates daily backups of the database and i-doit directory under `/opt/idoit-backup/`:
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

# Backup database
docker compose -f "${INSTALL_DIR}/docker-compose.yml" exec -T idoit-db \
    mysqldump -u root -pidoit_secure_password --all-databases \
    > "${BACKUP_DIR}/db_${DATE}.sql"

# Backup i-doit directory (excluding cache and temp)
tar czf "${BACKUP_DIR}/html_${DATE}.tar.gz" \
    --exclude="${INSTALL_DIR}/html/temp" \
    --exclude="${INSTALL_DIR}/html/log" \
    "${INSTALL_DIR}/html/"

# Delete backups older than 14 days
find "${BACKUP_DIR}" -name "*.sql" -o -name "*.tar.gz" | xargs ls -t | tail -n +29 | xargs rm -f 2>/dev/null

echo "Backup ${DATE} complete."
```
<!-- cSpell:enable -->
<!-- cSpell:disable -->
```sh
sudo chmod +x /opt/idoit-backup/backup.sh
```
<!-- cSpell:enable -->
To run the script automatically every day:
<!-- cSpell:disable -->
```sh
echo "0 2 * * * root /opt/idoit-backup/backup.sh >> /opt/idoit-backup/backup.log 2>&1" \
    | sudo tee /etc/cron.d/idoit-backup
```
<!-- cSpell:enable -->

## Next Step

The installation is complete. Next, activate a license and configure initial settings:

[Continue to **Setup**](../manual-installation/setup.md)
