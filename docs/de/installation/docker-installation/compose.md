---
title: Docker-Installation mit i-doit-Images
description: i-doit Pro als Container-Stack mit den offiziellen synetics-Images installieren
icon: material/docker
status:
lang: de
---

!!! note "Getestet mit i-doit **38** und **Debian 13 Trixie**"

Diese Anleitung beschreibt die Installation von i-doit Pro mit den offiziellen synetics-Container-Images über Docker Compose. Der Stack besteht aus zwei Services — `app` (Apache + PHP + i-doit) und `db` (MariaDB) — und ist auf einem Linux-Server in wenigen Minuten einsatzbereit.

Für TLS-Termination wird optional ein dritter Service mit nginx ergänzt.

## Systemvoraussetzungen

Es gelten die allgemeinen [Systemvoraussetzungen](../systemvoraussetzungen.md). Zusätzlich werden benötigt:

- **Docker** ≥ 24 mit Compose-Plugin
- Root-Rechte oder `sudo`-Zugang
- Internetverbindung zur Registry `registry.on.ops.docupike.net` (Images sind öffentlich, kein Login)

## Docker installieren

Zunächst die benötigten Basispakete installieren:
<!-- cSpell:disable -->
```sh
sudo apt-get update
sudo apt-get install -y ca-certificates curl gnupg openssl
```
<!-- cSpell:enable -->

Docker wird über das offizielle Repository eingerichtet:
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

Versionscheck:
<!-- cSpell:disable -->
```sh
docker --version
docker compose version
```
<!-- cSpell:enable -->

## Projektstruktur anlegen

Ein Verzeichnis für den i-doit-Stack wird erstellt. Die Unterordner `nginx/`, `tls/` und `apache/` werden für die TLS-Variante benötigt — wer i-doit zunächst nur über HTTP betreibt, kann sie weglassen:
<!-- cSpell:disable -->
```sh
sudo mkdir -p /opt/idoit/{nginx,tls,apache}
cd /opt/idoit
```
<!-- cSpell:enable -->

## Konfigurationsdateien erstellen

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

!!! info "Reiner HTTP-Betrieb"
    Wer ohne TLS startet, ersetzt im `app`-Service den `expose:`-Block durch `ports: ["8080:8080"]` und lässt den ganzen `nginx`-Service weg. Die Anleitung geht im Folgenden vom kompletten TLS-Stack aus.

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

# i-doit System
IDOIT_VERSION=38
IDOIT_SYSTEM_DATABASE=idoit_system
IDOIT_TENANT_DATABASE=idoit_data
IDOIT_ADMIN_CENTER_PASSWORD=admin
IDOIT_DEFAULT_TENANT=CMDB
IDOIT_SYSTEM_SETTINGS=

# Initialer Anwender-Account
IDOIT_USER_USERNAME=admin
IDOIT_USER_PASSWORD=admin

# Anwendung & Lizenz
IDOIT_APP_URL=https://idoit.example.com
IDOIT_LICENSE_TOKEN=changeme
# IDOIT_LICENSE_FILE=changeme
```
<!-- cSpell:enable -->

!!! warning "Passwörter ersetzen"
    Die Werte `root`, `idoit`, `admin` sind nur für die Erstinbetriebnahme gedacht. Vor produktivem Einsatz durch sichere, individuelle Passwörter ersetzen.

!!! tip "Wichtig: `IDOIT_APP_URL`"
    `IDOIT_APP_URL` muss auf die **extern erreichbare** URL der Anwendung zeigen — inklusive Schema (`https://`) und Hostname. Der Wert wird nur beim *allerersten* Containerstart in die i-doit-Settings übernommen; spätere Änderungen in der `.env` allein reichen nicht (siehe Abschnitt **Fehlerbehebung**).

### Apache-Override für Reverse-Proxy-Header
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

Diese Datei signalisiert dem Apache im `app`-Container, dass extern HTTPS terminiert wird. Ohne sie generiert i-doit interne Links als HTTP.

### nginx-Konfiguration
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

        # Apache im Container hört auf 8080/HTTP. Bei automatischen
        # DirectorySlash-Redirects (z.B. /admin -> /admin/) baut Apache
        # einen absoluten Location-Header mit http://...:8080/. nginx
        # biegt das auf die externe HTTPS-URL um.
        proxy_redirect     http://$host:8080/ https://$host/;
    }
}
```
<!-- cSpell:enable -->

### TLS-Zertifikat

Für Test- und Inhouse-Umgebungen reicht ein selbst-signiertes Zertifikat. `CN` und `subjectAltName` an die echte Adresse anpassen — Hostname und/oder IP, unter der i-doit erreichbar sein soll:
<!-- cSpell:disable -->
```sh
cd /opt/idoit
sudo openssl req -x509 -newkey rsa:2048 -nodes \
    -keyout tls/idoit.key -out tls/idoit.crt -days 365 \
    -subj "/CN=idoit.example.com" \
    -addext "subjectAltName=DNS:idoit.example.com,IP:192.0.2.10"
```
<!-- cSpell:enable -->

!!! tip "Produktiv-Zertifikat"
    Im produktiven Einsatz das Zertifikat aus der hauseigenen PKI oder von Let's Encrypt verwenden und unter `tls/idoit.crt` (Public-Cert + Zwischenzertifikate) sowie `tls/idoit.key` (Private Key) ablegen — der nginx-Service lädt beide automatisch.

## Container starten
<!-- cSpell:disable -->
```sh
cd /opt/idoit
sudo docker compose pull
sudo docker compose up -d
```
<!-- cSpell:enable -->

Beim ersten Start lädt i-doit die Datenbankschemata, legt den Default-Mandanten an und führt das initiale Setup aus. Das dauert je nach Maschine 30–90 Sekunden. Status verfolgen:
<!-- cSpell:disable -->
```sh
sudo docker compose ps
sudo docker compose logs -f app
```
<!-- cSpell:enable -->

Sobald `app` und `db` im Status `healthy` stehen, ist die Anwendung über die in `IDOIT_APP_URL` angegebene URL erreichbar. Schnellcheck:
<!-- cSpell:disable -->
```sh
curl -k https://idoit.example.com/health
```
<!-- cSpell:enable -->

Erwartete Antwort:
<!-- cSpell:disable -->
```json
{"status":"ready","version":"38"}
```
<!-- cSpell:enable -->

## Erster Login

1. Browser öffnen: `https://idoit.example.com/`
2. Auf der Login-Seite den Mandanten `CMDB` wählen (entspricht `IDOIT_DEFAULT_TENANT`).
3. Mit den in der `.env` definierten Werten einloggen (Default: `admin` / `admin`).
4. Über das Benutzermenü oben rechts das Passwort sofort ändern.
5. Admin-Center mit dem Passwort aus `IDOIT_ADMIN_CENTER_PASSWORD` öffnen (Link in der Login-Maske) und dort ebenfalls das Passwort ändern.

!!! success "Standardzugänge nach der Installation"
    - **i-doit**: Benutzer `admin`, Passwort `admin`
    - **Admin Center**: Benutzer `admin`, Passwort `admin`

## Pro-Modus aktivieren

Das Standard-Image initialisiert i-doit im **Cloud-Modus**. Für den klassischen Pro-Betrieb (alle Add-ons im Subscription Center installierbar, kein Cloud-Indikator in der UI) ist ein einmaliger Umbau nötig — direkt nach dem ersten erfolgreichen Setup, vor dem produktiven Einsatz:
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

Was die drei Befehle tun:

| Befehl | Wirkung |
|---|---|
| `--unset-cloud` | Setzt das Cloud-Flag in der i-doit-Datenbank zurück. |
| `--noncloudable --enable all` | Aktiviert alle Funktionen, die im Cloud-Modus standardmäßig deaktiviert sind (LDAP, JDisc-Integration, Logbook-Archiv etc.). |
| `sed`-Befehl | Setzt `$g_is_cloud` in der persistenten `config.inc.php` auf `0`. |

!!! info "Add-on-Install und Pro-Features"
    Ohne diesen Schritt scheitert der Add-on-Install aus dem Subscription Center bzw. einzelne Module sind nicht sichtbar. Der Schritt ist einmalig pro Installation.

## Lizenz einspielen

i-doit Pro benötigt zur Aktivierung einen gültigen Lizenz-Token oder eine Lizenz-Datei. Im Auslieferungszustand der `.env` steht `IDOIT_LICENSE_TOKEN=changeme` — die initiale Lizenzaktivierung schlägt in den Logs erwartet fehl, der Stack startet aber trotzdem.

### Variante A — Web-Lizenz-Token

Token aus dem synetics Kundenportal kopieren, in die `.env` eintragen und den `app`-Container neu starten:
<!-- cSpell:disable -->
```sh
sudo sed -i 's/^IDOIT_LICENSE_TOKEN=.*/IDOIT_LICENSE_TOKEN=<token>/' /opt/idoit/.env
sudo docker compose restart app
```
<!-- cSpell:enable -->

### Variante B — Lizenz-Datei

Lizenz-Datei (`license.key`) in das Daten-Volume legen und die Token-Zeile durch die File-Variante ersetzen:
<!-- cSpell:disable -->
```sh
sudo docker compose cp ./license.key app:/data/data/license.key
sudo sed -i 's/^IDOIT_LICENSE_TOKEN=.*/IDOIT_LICENSE_TOKEN=/' /opt/idoit/.env
sudo sed -i 's/^# IDOIT_LICENSE_FILE=.*/IDOIT_LICENSE_FILE=\/data\/data\/license.key/' /opt/idoit/.env
sudo docker compose restart app
```
<!-- cSpell:enable -->

Nach dem Restart lässt sich der Lizenzstatus im Admin-Center (Tab **Lizenz**) prüfen.

## Update

Auf eine neuere Image-Version aktualisieren:

1. `compose.yaml` öffnen und den Image-Tag (`:38`) in beiden Services auf die Ziel-Version setzen.
2. `IDOIT_VERSION` in der `.env` auf denselben Wert anheben.
3. Update durchführen:
<!-- cSpell:disable -->
```sh
cd /opt/idoit
sudo docker compose pull
sudo docker compose up -d
```
<!-- cSpell:enable -->

`docker compose up -d` erkennt geänderte Tags, zieht das neue Image und ersetzt den Container in-place. Beim Start führt das Entrypoint-Skript automatisch die Datenbank-Migration aus. Die Anwendungsdaten in den Volumes `app` und `db` bleiben erhalten.

!!! warning "Vor dem Update sichern"
    Volumes sichern, bevor die Major-Version geändert wird. Siehe Abschnitt **Backup**.

## Backup

Beide Persistenz-Volumes sichern: `app` (Konfigurationen, Uploads, Logs, Lizenz) und `db` (Datenbank-Dateien). Das folgende Script legt täglich ein Backup unter `/opt/idoit-backup/` ab:
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

# Datenbank-Dump (konsistent, ohne Tabelle zu sperren)
docker compose -f "${INSTALL_DIR}/compose.yaml" exec -T db sh -c \
    'exec mysqldump -uroot -p"$MYSQL_ROOT_PASSWORD" \
        --all-databases --single-transaction --quick' \
    > "${BACKUP_DIR}/db_${DATE}.sql"

# App-Volume sichern
docker run --rm \
    -v idoit_app:/data \
    -v "${BACKUP_DIR}":/backup \
    alpine tar czf "/backup/app_${DATE}.tgz" -C /data .

# Backups älter als 14 Tage löschen
find "${BACKUP_DIR}" -name "*.sql" -o -name "*.tgz" \
    | xargs ls -t | tail -n +29 | xargs rm -f 2>/dev/null

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

## Deinstallation
<!-- cSpell:disable -->
```sh
cd /opt/idoit
sudo docker compose down --volumes --rmi all
```
<!-- cSpell:enable -->

!!! danger "Datenverlust"
    `--volumes` löscht die Volumes `app` und `db` unwiderruflich. Vorher sichern, falls die Daten weiter benötigt werden.

## Fehlerbehebung

### `app` startet in Crashloop, Log endet mit `unbound variable`

Die `.env` ist unvollständig. Das Entrypoint-Skript läuft mit `set -u` und bricht ab, sobald eine erwartete Variable nicht gesetzt ist. Häufige Lücken in eigenen `.env`-Vorlagen:

- `IDOIT_VERSION` — muss zum Image-Tag passen (Tag `:38` ⇒ `IDOIT_VERSION=38`).
- `IDOIT_SYSTEM_SETTINGS` — darf leer bleiben, muss aber **gesetzt** sein.

### Lizenz-Fehler `Authentication failed, please check your weblicense token`

Token ist falsch oder noch der Vorlagewert `changeme`. Korrekten Token aus dem Kundenportal in der `.env` ablegen, dann `sudo docker compose restart app`.

### Add-on aus dem Subscription Center: `rmdir: Device or resource busy`

Volltext-Fehler:

```
Failed to remove directory "/var/www/idoit/updates/versions/38/files/temp/":
rmdir(...): Device or resource busy
```

Ursache: In manchen Compose-Vorlagen ist beim `app`-Service ein `tmpfs`-Mount auf `/var/www/html/temp` gesetzt. `/var/www/html` ist innerhalb des Containers ein Symlink auf `/var/www/idoit/updates/versions/<version>/files`, der Mount liegt also genau auf dem Verzeichnis, das der Add-on-Installer per `rmdir` neu erzeugen will. Das schlägt fehl, solange ein `tmpfs`-Mount aktiv ist.

Fix: Den `tmpfs`-Block beim `app`-Service aus `compose.yaml` entfernen (siehe Beispiel-Compose oben — dort ist er bewusst nicht enthalten) und Stack neu starten:
<!-- cSpell:disable -->
```sh
sudo docker compose up -d
```
<!-- cSpell:enable -->

### Add-ons fehlen, UI zeigt Cloud-Hinweise

Das Image initialisiert i-doit als Cloud-Instanz. Pro-spezifische Funktionen und einige Add-on-Installationen sind dann deaktiviert. Den Schritt **Pro-Modus aktivieren** durchführen.

### Nach dem Logout landet der Browser auf `localhost:8080` mit `ERR_CONNECTION_REFUSED`

`IDOIT_APP_URL` steht noch auf `http://localhost:8080`, der Zugriff erfolgt aber von einem anderen Rechner.

!!! warning "Wichtig"
    Der Wert aus der `.env` wird nur beim *allerersten* Containerstart in die i-doit-Settings übernommen. Bei nachträglicher Korrektur reicht ein Container-Restart **nicht** — der Wert muss zusätzlich per Console-Befehl in der Anwendung gesetzt werden.

<!-- cSpell:disable -->
```sh
# 1. .env korrigieren (für künftige Re-Installs)
sudo sed -i 's|^IDOIT_APP_URL=.*|IDOIT_APP_URL=https://idoit.example.com|' /opt/idoit/.env

# 2. Wert in i-doit-Settings nachziehen
sudo docker compose exec app bash -c \
    'cd /var/www/html && php console.php idoit:set-env-var \
        -u admin -p "$IDOIT_ADMIN_CENTER_PASSWORD" \
        -k "IDOIT_APP_URL=https://idoit.example.com"'

# 3. App-Container neu starten
sudo docker compose restart app
```
<!-- cSpell:enable -->

Der `idoit:set-env-var`-Befehl ist auch der saubere Weg, später z. B. von HTTP auf HTTPS oder auf einen anderen Hostnamen zu wechseln.

### Links wie `/admin` springen auf `http://...:8080/...`

Apache im `app`-Container hört nativ auf Port `8080`/HTTP. Bei automatischen DirectorySlash-Redirects (z. B. `/admin` ohne Trailing-Slash → `/admin/`) baut Apache einen absoluten `Location`-Header mit dem internen Port. Da Apache nichts vom vorgeschalteten TLS-Proxy weiß, erscheint im Browser eine nicht erreichbare `http://<host>:8080/...`-URL.

Fix: Im nginx-Reverse-Proxy die `proxy_redirect`-Direktive setzen, die diese Location-Header umbiegt. Im Beispiel `nginx/idoit.conf` dieser Anleitung ist die Zeile bereits enthalten:
<!-- cSpell:disable -->
```nginx
proxy_redirect http://$host:8080/ https://$host/;
```
<!-- cSpell:enable -->

Anschließend `sudo docker compose restart nginx`.

### Healthcheck schlägt fehl, obwohl die UI erreichbar ist

Der Healthcheck verwendet `curl --fail http://localhost:8080/health`. Tritt der Fehler nur kurz beim Start auf, ist es das `start_period` von 30 s — das Setup ist einfach noch nicht durch. Bleibt der Status dauerhaft `unhealthy`, in den Logs nach Fehlern im Setup-Schritt suchen:
<!-- cSpell:disable -->
```sh
sudo docker compose logs --tail 100 app
```
<!-- cSpell:enable -->

## Nächster Schritt

Die Installation ist abgeschlossen. Im nächsten Schritt eine Lizenz einspielen und die ersten Einstellungen vornehmen:

[Weiter zu **Setup**](../manuelle-installation/setup.md)
