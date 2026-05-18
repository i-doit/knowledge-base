---
title: Docker installation with official i-doit images
description: Install i-doit Pro as a container stack using the official synetics images
icon: material/docker
status:
lang: en
---

!!! note "Tested with i-doit **38** and **Debian 13 Trixie**"

This guide describes how to install i-doit Pro using the official synetics container images via Docker Compose. The stack consists of two services — `app` (Apache + PHP + i-doit) and `db` (MariaDB) — and is ready to use on a Linux server within a few minutes.

For TLS termination, an optional third service running nginx is added.

## System Requirements

The general [system requirements](../system-requirements.md) apply. Additionally required:

- **Docker** ≥ 24 with the Compose plugin
- Root privileges or `sudo` access
- Internet access to the registry `registry.on.ops.docupike.net` (images are public, no login required)

## Install Docker

First, install the required base packages:
<!-- cSpell:disable -->
```sh
sudo apt-get update
sudo apt-get install -y ca-certificates curl gnupg openssl
```
<!-- cSpell:enable -->

Docker is set up via the official repository:
<!-- cSpell:disable -->
```sh
sudo install -m 0755 -d /etc/apt/keyrings
sudo curl -fsSL https://download.docker.com/linux/debian/gpg \
    -o /etc/apt/keyrings/docker.asc
sudo chmod a+r /etc/apt/keyrings/docker.asc

echo "deb [arch=amd64 signed-by=/etc/apt/keyrings/docker.asc] \
https://download.docker.com/linux/debian trixie stable" \
    | sudo tee /etc/apt/sources.list.d/docker.list

sudo apt-get update
sudo apt-get install -y \
    docker-ce docker-ce-cli containerd.io \
    docker-buildx-plugin docker-compose-plugin
```
<!-- cSpell:enable -->

Verify the versions:
<!-- cSpell:disable -->
```sh
docker --version
docker compose version
```
<!-- cSpell:enable -->

## Create the project structure

Create a directory for the i-doit stack. The subdirectories `nginx/`, `tls/` and `apache/` are only needed for the TLS variant — if you start with plain HTTP, you can omit them:
<!-- cSpell:disable -->
```sh
sudo mkdir -p /opt/idoit/{nginx,tls,apache}
cd /opt/idoit
```
<!-- cSpell:enable -->

## Create the configuration files

### `compose.yaml`
<!-- cSpell:disable -->
```sh
sudo nano /opt/idoit/compose.yaml
```
<!-- cSpell:enable -->
<!-- cSpell:disable -->
```yaml
services:

  db:
    image: registry.on.ops.docupike.net/i-doit/db:38
    restart: unless-stopped
    volumes:
      - db:/var/lib/mysql
      - type: tmpfs
        target: /tmp/
        tmpfs:
          size: 1073741824
    env_file:
      - .env
    healthcheck:
      test: mysql -uroot -p${MYSQL_ROOT_PASSWORD:-root} --silent --execute 'SELECT 1;' mysql
      start_period: 60s
      interval: 10s
      timeout: 5s
      retries: 3
    user: 999:999
    privileged: false
    read_only: true
    cap_drop:
      - ALL

  app:
    image: registry.on.ops.docupike.net/i-doit/app:38
    restart: unless-stopped
    volumes:
      - app:/data/data
      - ./apache/forwarded.conf:/etc/apache2/conf-enabled/zz-forwarded.conf:ro
    expose:
      - 8080
    depends_on:
      - db
    env_file:
      - .env
    cap_drop:
      - ALL
    user: 33:33
    privileged: false
    read_only: false
    healthcheck:
      test: curl --fail http://localhost:8080/health
      start_period: 30s
      interval: 10s
      timeout: 5s
      retries: 3

  nginx:
    image: nginx:1.27-alpine
    restart: unless-stopped
    ports:
      - 80:80
      - 443:443
    volumes:
      - ./nginx/idoit.conf:/etc/nginx/conf.d/default.conf:ro
      - ./tls:/etc/nginx/tls:ro
    depends_on:
      app:
        condition: service_healthy

volumes:
  app:
  db:
```
<!-- cSpell:enable -->

!!! info "Plain HTTP setup"
    If you start without TLS, replace the `expose:` block in the `app` service with `ports: ["8080:8080"]` and remove the entire `nginx` service. The rest of this guide assumes the full TLS stack.

### `.env`
<!-- cSpell:disable -->
```sh
sudo nano /opt/idoit/.env
```
<!-- cSpell:enable -->
<!-- cSpell:disable -->
```ini
# MariaDB
MYSQL_ROOT_USER=root
MYSQL_ROOT_PASSWORD=root
MYSQL_USER=idoit
MYSQL_PASSWORD=idoit
MYSQL_HOSTNAME=db

# i-doit system
IDOIT_VERSION=38
IDOIT_SYSTEM_DATABASE=idoit_system
IDOIT_TENANT_DATABASE=idoit_data
IDOIT_ADMIN_CENTER_PASSWORD=admin
IDOIT_DEFAULT_TENANT=CMDB
IDOIT_SYSTEM_SETTINGS=

# Initial user account
IDOIT_USER_USERNAME=admin
IDOIT_USER_PASSWORD=admin

# Application & license
IDOIT_APP_URL=https://idoit.example.com
IDOIT_LICENSE_TOKEN=changeme
# IDOIT_LICENSE_FILE=changeme
```
<!-- cSpell:enable -->

!!! warning "Replace the passwords"
    The values `root`, `idoit`, `admin` are only intended for the initial setup. Replace them with strong, individual passwords before going into production.

!!! tip "Important: `IDOIT_APP_URL`"
    `IDOIT_APP_URL` must point to the **externally reachable** URL of the application — including scheme (`https://`) and hostname. The value is only written to the i-doit settings on the *very first* container start; later changes to the `.env` alone are not enough (see the **Troubleshooting** section).

### Apache override for reverse proxy headers
<!-- cSpell:disable -->
```sh
sudo nano /opt/idoit/apache/forwarded.conf
```
<!-- cSpell:enable -->
<!-- cSpell:disable -->
```apache
<IfModule mod_setenvif.c>
    SetEnvIf X-Forwarded-Proto "^https$" HTTPS=on
    SetEnvIf X-Forwarded-Proto "^https$" REQUEST_SCHEME=https
</IfModule>
```
<!-- cSpell:enable -->

This file tells the Apache inside the `app` container that TLS is terminated externally. Without it, i-doit will generate internal links as plain HTTP.

### nginx configuration
<!-- cSpell:disable -->
```sh
sudo nano /opt/idoit/nginx/idoit.conf
```
<!-- cSpell:enable -->
<!-- cSpell:disable -->
```nginx
server {
    listen 80;
    server_name _;
    return 301 https://$host$request_uri;
}

server {
    listen 443 ssl;
    http2 on;
    server_name _;

    ssl_certificate     /etc/nginx/tls/idoit.crt;
    ssl_certificate_key /etc/nginx/tls/idoit.key;
    ssl_protocols       TLSv1.2 TLSv1.3;
    ssl_ciphers         HIGH:!aNULL:!MD5;

    client_max_body_size 256m;

    location / {
        proxy_pass         http://app:8080;
        proxy_http_version 1.1;
        proxy_set_header   Host              $host;
        proxy_set_header   X-Real-IP         $remote_addr;
        proxy_set_header   X-Forwarded-For   $proxy_add_x_forwarded_for;
        proxy_set_header   X-Forwarded-Proto https;
        proxy_set_header   X-Forwarded-Host  $host;
        proxy_read_timeout 300;

        # Apache inside the container listens on 8080/HTTP. On automatic
        # directory-slash redirects (e.g. /admin -> /admin/), Apache builds
        # an absolute Location header pointing to http://...:8080/. nginx
        # rewrites those to the external HTTPS URL here.
        proxy_redirect     http://$host:8080/ https://$host/;
    }
}
```
<!-- cSpell:enable -->

### TLS certificate

For test and inhouse environments, a self-signed certificate is sufficient. Adjust `CN` and `subjectAltName` to the real address — hostname and/or IP under which i-doit will be reachable:
<!-- cSpell:disable -->
```sh
cd /opt/idoit
sudo openssl req -x509 -newkey rsa:2048 -nodes \
    -keyout tls/idoit.key -out tls/idoit.crt -days 365 \
    -subj "/CN=idoit.example.com" \
    -addext "subjectAltName=DNS:idoit.example.com,IP:192.0.2.10"
```
<!-- cSpell:enable -->

!!! tip "Production certificate"
    In production, use a certificate from your internal PKI or from Let's Encrypt and store it as `tls/idoit.crt` (public cert plus any intermediates) and `tls/idoit.key` (private key) — the nginx service picks them up automatically.

## Start the containers
<!-- cSpell:disable -->
```sh
cd /opt/idoit
sudo docker compose pull
sudo docker compose up -d
```
<!-- cSpell:enable -->

On the first start, i-doit loads the database schemas, creates the default tenant, and runs the initial setup. Depending on the machine this takes 30–90 seconds. Follow the progress:
<!-- cSpell:disable -->
```sh
sudo docker compose ps
sudo docker compose logs -f app
```
<!-- cSpell:enable -->

As soon as `app` and `db` are `healthy`, the application is reachable at the URL set in `IDOIT_APP_URL`. Quick check:
<!-- cSpell:disable -->
```sh
curl -k https://idoit.example.com/health
```
<!-- cSpell:enable -->

Expected response:
<!-- cSpell:disable -->
```json
{"status":"ready","version":"38"}
```
<!-- cSpell:enable -->

## First login

1. Open the browser: `https://idoit.example.com/`
2. On the login page, choose the tenant `CMDB` (matches `IDOIT_DEFAULT_TENANT`).
3. Log in with the values defined in the `.env` (default: `admin` / `admin`).
4. Open the user menu in the top right and change the password immediately.
5. Open the Admin Center with the password from `IDOIT_ADMIN_CENTER_PASSWORD` (link on the login page) and change the password there as well.

!!! success "Default credentials after installation"
    - **i-doit**: user `admin`, password `admin`
    - **Admin Center**: user `admin`, password `admin`

## Activate Pro mode

The default image initialises i-doit in **cloud mode**. For classic Pro operation (all add-ons installable from the Subscription Center, no cloud indicator in the UI) a one-time switch is required — right after the first successful setup, before production use:
<!-- cSpell:disable -->
```sh
sudo docker compose exec app bash -c '
    cd /var/www/html
    php console.php idoit:feature-manager --unset-cloud \
        -u admin -p "$IDOIT_ADMIN_CENTER_PASSWORD" -i 1
    php console.php idoit:feature-manager --noncloudable --enable all \
        -u admin -p "$IDOIT_ADMIN_CENTER_PASSWORD" -i 1
    sed -i "s/\$g_is_cloud = .1./\$g_is_cloud = '\''0'\''/" \
        /data/data/config.inc.php
'

sudo docker compose restart app
```
<!-- cSpell:enable -->

What the three commands do:

| Command | Effect |
|---|---|
| `--unset-cloud` | Resets the cloud flag in the i-doit database. |
| `--noncloudable --enable all` | Enables all features that are disabled by default in cloud mode (LDAP, JDisc integration, logbook archive, etc.). |
| `sed` command | Sets `$g_is_cloud` in the persistent `config.inc.php` to `0`. |

!!! info "Add-on install and Pro features"
    Without this step, installing add-ons from the Subscription Center fails and certain modules are not visible. The switch is a one-time operation per installation.

## Install the license

i-doit Pro requires a valid license token or license file to activate. The shipped `.env` contains `IDOIT_LICENSE_TOKEN=changeme` — the initial license activation will, as expected, fail in the logs, but the stack still starts.

### Variant A — web license token

Copy the token from the synetics customer portal, write it to the `.env`, and restart the `app` container:
<!-- cSpell:disable -->
```sh
sudo sed -i 's/^IDOIT_LICENSE_TOKEN=.*/IDOIT_LICENSE_TOKEN=<token>/' /opt/idoit/.env
sudo docker compose restart app
```
<!-- cSpell:enable -->

### Variant B — license file

Place the license file (`license.key`) into the data volume and replace the token line with the file variant:
<!-- cSpell:disable -->
```sh
sudo docker compose cp ./license.key app:/data/data/license.key
sudo sed -i 's/^IDOIT_LICENSE_TOKEN=.*/IDOIT_LICENSE_TOKEN=/' /opt/idoit/.env
sudo sed -i 's/^# IDOIT_LICENSE_FILE=.*/IDOIT_LICENSE_FILE=\/data\/data\/license.key/' /opt/idoit/.env
sudo docker compose restart app
```
<!-- cSpell:enable -->

After the restart, the license status can be verified in the Admin Center on the **License** tab.

## Update

Upgrade to a newer image version:

1. Open `compose.yaml` and set the image tag (`:38`) to the target version in both services.
2. Set `IDOIT_VERSION` in the `.env` to the same value.
3. Run the update:
<!-- cSpell:disable -->
```sh
cd /opt/idoit
sudo docker compose pull
sudo docker compose up -d
```
<!-- cSpell:enable -->

`docker compose up -d` detects the changed tag, pulls the new image, and replaces the container in place. On startup, the entrypoint runs the database migration automatically. The application data in the `app` and `db` volumes is preserved.

!!! warning "Back up before updating"
    Back up the volumes before changing the major version. See the **Backup** section.

## Backup

Back up both persistent volumes: `app` (configurations, uploads, logs, license) and `db` (database files). The following script writes a daily backup to `/opt/idoit-backup/`:
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
INSTALL_DIR="/opt/idoit"

# Database dump (consistent, without locking tables)
docker compose -f "${INSTALL_DIR}/compose.yaml" exec -T db sh -c \
    'exec mysqldump -uroot -p"$MYSQL_ROOT_PASSWORD" \
        --all-databases --single-transaction --quick' \
    > "${BACKUP_DIR}/db_${DATE}.sql"

# Back up app volume
docker run --rm \
    -v idoit_app:/data \
    -v "${BACKUP_DIR}":/backup \
    alpine tar czf "/backup/app_${DATE}.tgz" -C /data .

# Remove backups older than 14 days
find "${BACKUP_DIR}" -name "*.sql" -o -name "*.tgz" \
    | xargs ls -t | tail -n +29 | xargs rm -f 2>/dev/null

echo "Backup ${DATE} done."
```
<!-- cSpell:enable -->
<!-- cSpell:disable -->
```sh
sudo chmod +x /opt/idoit-backup/backup.sh
```
<!-- cSpell:enable -->

To run the script daily:
<!-- cSpell:disable -->
```sh
echo "0 2 * * * root /opt/idoit-backup/backup.sh >> /opt/idoit-backup/backup.log 2>&1" \
    | sudo tee /etc/cron.d/idoit-backup
```
<!-- cSpell:enable -->

## Uninstall
<!-- cSpell:disable -->
```sh
cd /opt/idoit
sudo docker compose down --volumes --rmi all
```
<!-- cSpell:enable -->

!!! danger "Data loss"
    `--volumes` deletes the `app` and `db` volumes irrevocably. Back up first if the data is still needed.

## Troubleshooting

### `app` enters a crash loop, log ends with `unbound variable`

The `.env` is incomplete. The entrypoint runs with `set -u` and aborts as soon as an expected variable is unset. Common gaps in self-made `.env` files:

- `IDOIT_VERSION` — must match the image tag (tag `:38` ⇒ `IDOIT_VERSION=38`).
- `IDOIT_SYSTEM_SETTINGS` — may be empty, but must be **set**.

### License error `Authentication failed, please check your weblicense token`

The token is wrong or still the placeholder `changeme`. Put the correct token from the customer portal into the `.env`, then `sudo docker compose restart app`.

### Add-on from the Subscription Center fails with `rmdir: Device or resource busy`

Full error:

```
Failed to remove directory "/var/www/idoit/updates/versions/38/files/temp/":
rmdir(...): Device or resource busy
```

Cause: Some compose templates ship a `tmpfs` mount on `/var/www/html/temp` in the `app` service. Inside the container, `/var/www/html` is a symlink to `/var/www/idoit/updates/versions/<version>/files`, so the mount sits on exactly the directory the add-on installer tries to recreate via `rmdir`. That fails as long as a `tmpfs` mount is active.

Fix: Remove the `tmpfs` block in the `app` service of `compose.yaml` (the example compose in this guide does not contain it on purpose) and restart the stack:
<!-- cSpell:disable -->
```sh
sudo docker compose up -d
```
<!-- cSpell:enable -->

### Add-ons are missing, UI shows cloud hints

The image initialises i-doit as a cloud instance. Pro-specific features and certain add-on installations are disabled in that mode. Run the **Activate Pro mode** step.

### After logout, the browser lands on `localhost:8080` with `ERR_CONNECTION_REFUSED`

`IDOIT_APP_URL` is still set to `http://localhost:8080`, but the access happens from another host.

!!! warning "Important"
    The value from the `.env` is written to the i-doit settings only on the *very first* container start. When fixed afterwards, a container restart is **not** enough — the value also has to be set inside the application via the console command.

<!-- cSpell:disable -->
```sh
# 1. Fix the .env (for future re-installs)
sudo sed -i 's|^IDOIT_APP_URL=.*|IDOIT_APP_URL=https://idoit.example.com|' /opt/idoit/.env

# 2. Update the value in the i-doit settings
sudo docker compose exec app bash -c \
    'cd /var/www/html && php console.php idoit:set-env-var \
        -u admin -p "$IDOIT_ADMIN_CENTER_PASSWORD" \
        -k "IDOIT_APP_URL=https://idoit.example.com"'

# 3. Restart the app container
sudo docker compose restart app
```
<!-- cSpell:enable -->

The `idoit:set-env-var` command is also the clean way to switch later from HTTP to HTTPS or to a different hostname.

### Links such as `/admin` redirect to `http://...:8080/...`

Apache inside the `app` container listens on port `8080`/HTTP. On automatic directory-slash redirects (e.g. `/admin` without trailing slash → `/admin/`), Apache builds an absolute `Location` header with that internal port. Since Apache doesn't know about the upstream TLS proxy, the browser ends up on an unreachable `http://<host>:8080/...` URL.

Fix: Set the `proxy_redirect` directive in the nginx reverse proxy to rewrite exactly those `Location` headers. The example `nginx/idoit.conf` in this guide already contains the line:
<!-- cSpell:disable -->
```nginx
proxy_redirect http://$host:8080/ https://$host/;
```
<!-- cSpell:enable -->

After that, `sudo docker compose restart nginx`.

### Healthcheck fails although the UI is reachable

The healthcheck runs `curl --fail http://localhost:8080/health`. If it fails only briefly on startup, that is the `start_period` of 30 s — the setup just isn't done yet. If the status stays `unhealthy`, look for errors in the setup step:
<!-- cSpell:disable -->
```sh
sudo docker compose logs --tail 100 app
```
<!-- cSpell:enable -->

## Next step

The installation is complete. Next, install a license and apply the initial settings:

[Continue to **Setup**](../manual-installation/setup.md)
