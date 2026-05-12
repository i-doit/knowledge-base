---
title: Prod→Test Datenbank-Synchronisation
description: Produktive i-doit Datenbank regelmäßig auf ein Testsystem synchronisieren — per Shell-Script oder console.php
icon:
status:
lang: de
---

# Prod→Test Datenbank-Synchronisation

In vielen Unternehmen läuft neben der produktiven i-doit-Instanz ein Testsystem, auf dem Updates getestet, neue Konfigurationen ausprobiert oder Schulungen durchgeführt werden. Damit das Testsystem realistische Daten enthält, wird die Produktionsdatenbank regelmäßig synchronisiert — typischerweise einmal pro Woche.

Dieser Artikel zeigt zwei Varianten: ein klassisches **Shell-Script** mit `mysqldump` und die seit i-doit v35 empfohlene Methode über die **console.php** mit `system:tenant-export` / `system:tenant-import`.

!!! warning "Backup vor dem Sync"
    Die Synchronisation überschreibt die Datenbank auf dem Testsystem vollständig. Stelle sicher, dass keine wichtigen Testdaten verloren gehen. Auf dem Produktivsystem wird nur gelesen — dort ändert sich nichts.

## Voraussetzungen

| Anforderung                | Details                                                              |
| -------------------------- | -------------------------------------------------------------------- |
| **Netzwerk**               | Test-Server muss die Prod-Datenbank über Port 3306 erreichen können  |
| **MySQL-Zugriff**          | DB-User auf Prod mit Leserechten für `idoit_system` und `idoit_data` |
| **SSH-Zugriff**            | Root-Zugang auf dem Test-Server, **SSH-Key-Auth zum Prod-Server** (für `rsync` und `mysqldump`)   |
| **Speicherplatz**          | Ausreichend Platz für DB-Dumps (ca. 2× Datenbankgröße)               |
| **Gleiche i-doit-Version** | Prod und Test sollten auf derselben i-doit-Version laufen            |

---

## Variante A: Shell-Script (mysqldump)

Diese Variante funktioniert mit jeder i-doit-Version. Das Script läuft auf dem **Test-Server**, holt sich die Datenbanken per `mysqldump` vom Prod-Server, importiert sie lokal und synchronisiert anschließend die Dateien (Uploads, Dokumente, Bilder) per `rsync`.

!!! info "Nur Datenbank reicht nicht"
    i-doit speichert hochgeladene Dateien, Dokumente und Objektbilder im Dateisystem — nicht in der Datenbank. Ohne Dateisync fehlen auf dem Testsystem alle Uploads, die nach dem letzten Sync auf Prod hinzugekommen sind.

### Das Sync-Script

Erstelle das Script auf dem Test-Server:

```bash
sudo nano /usr/local/sbin/idoit-sync
```

Inhalt:

```bash
#!/bin/bash
# i-doit Prod→Test DB-Sync
# Holt Datenbanken und Dateien vom Prod-Server und importiert sie lokal.
# Muss als root ausgeführt werden.
set -e

# ====================================================
# Konfiguration — bitte anpassen
# ====================================================
PROD_HOST="<PROD-SERVER-IP>"
PROD_DB_USER="root"
PROD_DB_PASS="<PROD-DB-PASSWORT>"

SYSTEM_DB="idoit_system"
DATA_DB="idoit_data"

LOCAL_DB_USER="root"
LOCAL_DB_PASS="<TEST-DB-PASSWORT>"

IDOIT_DIR="/var/www/html"
BACKUP_DIR="/var/backup/idoit"
LOG="/var/log/idoit-sync.log"

# ====================================================
mkdir -p "$BACKUP_DIR"
exec >> "$LOG" 2>&1
echo ""
echo "=========================================="
echo " Sync gestartet: $(date '+%Y-%m-%d %H:%M:%S')"
echo "=========================================="

# ---------------------------------------------------
# Schritt 1: Apache stoppen
# ---------------------------------------------------
echo "[1/8] Apache stoppen..."
systemctl stop apache2

# ---------------------------------------------------
# Schritt 2: Datenbanken vom Prod-Server exportieren
# ---------------------------------------------------
echo "[2/8] Exportiere $SYSTEM_DB von $PROD_HOST..."
mysqldump -h"$PROD_HOST" -u"$PROD_DB_USER" -p"$PROD_DB_PASS" \
    --single-transaction --routines --triggers \
    "$SYSTEM_DB" | gzip > "$BACKUP_DIR/${SYSTEM_DB}.sql.gz"

echo "[3/8] Exportiere $DATA_DB von $PROD_HOST..."
mysqldump -h"$PROD_HOST" -u"$PROD_DB_USER" -p"$PROD_DB_PASS" \
    --single-transaction --routines --triggers \
    "$DATA_DB" | gzip > "$BACKUP_DIR/${DATA_DB}.sql.gz"

# ---------------------------------------------------
# Schritt 3: Lokale Datenbanken ersetzen
# ---------------------------------------------------
echo "[4/8] Importiere $SYSTEM_DB..."
mysql -u"$LOCAL_DB_USER" -p"$LOCAL_DB_PASS" \
    -e "DROP DATABASE IF EXISTS $SYSTEM_DB; CREATE DATABASE $SYSTEM_DB;"
gunzip < "$BACKUP_DIR/${SYSTEM_DB}.sql.gz" \
    | mysql -u"$LOCAL_DB_USER" -p"$LOCAL_DB_PASS" "$SYSTEM_DB"

echo "[5/8] Importiere $DATA_DB..."
mysql -u"$LOCAL_DB_USER" -p"$LOCAL_DB_PASS" \
    -e "DROP DATABASE IF EXISTS $DATA_DB; CREATE DATABASE $DATA_DB;"
gunzip < "$BACKUP_DIR/${DATA_DB}.sql.gz" \
    | mysql -u"$LOCAL_DB_USER" -p"$LOCAL_DB_PASS" "$DATA_DB"

# ---------------------------------------------------
# Schritt 4: Dateien vom Prod-Server synchronisieren
# ---------------------------------------------------
echo "[6/8] Synchronisiere Uploads..."
rsync -az --delete "root@$PROD_HOST:$IDOIT_DIR/upload/" "$IDOIT_DIR/upload/"

echo "[7/8] Synchronisiere Import-Dateien..."
rsync -az --delete "root@$PROD_HOST:$IDOIT_DIR/imports/" "$IDOIT_DIR/imports/"

# ---------------------------------------------------
# Schritt 5: Rechte setzen, Cache leeren, Apache starten
# ---------------------------------------------------
echo "[8/8] Rechte setzen, Cache leeren, Apache starten..."
chown -R www-data:www-data "$IDOIT_DIR/upload/" "$IDOIT_DIR/imports/"
rm -rf "$IDOIT_DIR/temp/"*
systemctl start apache2

# ---------------------------------------------------
# Aufräumen: Dumps älter als 30 Tage löschen
# ---------------------------------------------------
find "$BACKUP_DIR" -name "*.sql.gz" -mtime +30 -delete

echo "=========================================="
echo " Sync erfolgreich: $(date '+%Y-%m-%d %H:%M:%S')"
echo "=========================================="
```

### Script einrichten

```bash
# Ausführbar machen
chmod +x /usr/local/sbin/idoit-sync

# Einmal manuell testen
/usr/local/sbin/idoit-sync

# Log prüfen
tail -f /var/log/idoit-sync.log
```

### Cronjob anlegen (wöchentlich)

Erstelle die Datei `/etc/cron.d/idoit-sync`:

```bash
# i-doit Prod→Test Sync: Jeden Sonntag um 01:00 Uhr
0 1 * * 0  root  /usr/local/sbin/idoit-sync
```

---

## Variante B: console.php (ab v35, empfohlen)

Ab i-doit Version 35 gibt es die console-Befehle `system:tenant-export` und `system:tenant-import`. Diese exportieren einen kompletten Mandanten — Datenbank **und** hochgeladene Dateien — als ZIP-Paket. Das ist die sauberere Methode, weil Datenbank und Dateien konsistent zusammengehören.

### Export auf dem Prod-Server

```bash
sudo -u www-data php /var/www/html/console.php system:tenant-export \
    --user admin --password admin --tenantId 1
```

Das erzeugt ein ZIP-Archiv im i-doit `temp/`-Verzeichnis.

### Transfer auf den Test-Server

```bash
scp /var/www/html/temp/idoit-tenant-export-*.zip testserver:/var/backup/
```

### Import auf dem Test-Server

```bash
sudo -u www-data php /var/www/html/console.php system:tenant-import \
    --file /var/backup/idoit-tenant-export-DATUM.zip \
    --tenant-database-name idoit_data \
    --tenant-title "Test" \
    --with-system-settings \
    --with-tenant-settings \
    --db-root-user root \
    --db-root-pass <PASSWORT> \
    --db-host <HOST>
```

### Automatisiertes Script (Export + Transfer + Import)

Dieses Script läuft auf dem **Prod-Server**, exportiert den Mandanten, überträgt das Paket per SSH auf den Test-Server und löst dort den Import aus.

Erstelle das Script auf dem Prod-Server:

```bash
sudo nano /usr/local/sbin/idoit-tenant-sync
```

Inhalt:

```bash
#!/bin/bash
# i-doit Prod→Test Tenant-Sync via console.php
# Muss als root auf dem Prod-Server ausgeführt werden.
# Voraussetzung: SSH-Key-Auth vom Prod-Server zum Test-Server ist eingerichtet.
set -e

# ====================================================
# Konfiguration — bitte anpassen
# ====================================================
PROD_CONSOLE="/var/www/html/console.php"
PROD_TEMP="/var/www/html/temp"

TEST_USER="root"
TEST_HOST="<TEST-SERVER-IP>"
TEST_BACKUP_DIR="/var/backup/idoit-transfer"
TEST_CONSOLE="/var/www/html/console.php"

IDOIT_USER="admin"
IDOIT_PASS="admin"
TENANT_ID="1"
TEST_DB_NAME="idoit_data"
TEST_DB_PASS="<TEST-DB-PASSWORT>"
# ====================================================

echo "--- Schritt 1: Export auf Prod ---"
rm -f "$PROD_TEMP"/idoit-tenant-export-*.zip

sudo -u www-data php "$PROD_CONSOLE" system:tenant-export \
    --user "$IDOIT_USER" --password "$IDOIT_PASS" --tenantId "$TENANT_ID"

EXPORT_FILE=$(ls -t "$PROD_TEMP"/idoit-tenant-export-*.zip 2>/dev/null | head -1)

if [ -z "$EXPORT_FILE" ]; then
    echo "FEHLER: Export-Datei nicht gefunden!"
    exit 1
fi

FILENAME=$(basename "$EXPORT_FILE")

echo "--- Schritt 2: Transfer zu $TEST_HOST ---"
ssh "$TEST_USER@$TEST_HOST" "mkdir -p $TEST_BACKUP_DIR"
scp "$EXPORT_FILE" "$TEST_USER@$TEST_HOST:$TEST_BACKUP_DIR/$FILENAME"

echo "--- Schritt 3: Import auf $TEST_HOST ---"
ssh "$TEST_USER@$TEST_HOST" \
    "sudo -u www-data php $TEST_CONSOLE system:tenant-import \
        --file $TEST_BACKUP_DIR/$FILENAME \
        --tenant-database-name $TEST_DB_NAME \
        --tenant-title 'Test-System' \
        --with-system-settings \
        --with-tenant-settings \
        --db-root-user root \
        --db-root-pass '$TEST_DB_PASS' \
        --db-host localhost \
    && rm -f $TEST_BACKUP_DIR/$FILENAME"

echo "--- Schritt 4: Aufräumen auf Prod ---"
rm -f "$EXPORT_FILE"

echo "FERTIG! Das Test-System wurde erfolgreich aktualisiert."
```

```bash
chmod +x /usr/local/sbin/idoit-tenant-sync
```

### Als Cronjob (wöchentlich)

```bash
# /etc/cron.d/idoit-tenant-sync
# Jeden Sonntag um 01:00 Uhr — auf dem Prod-Server
0 1 * * 0  root  /usr/local/sbin/idoit-tenant-sync
```

### Vorteile gegenüber der manuellen Methode

- **Dateien werden mit exportiert** — Uploads, Dokumente, alles in einem Paket
- **Konsistentes Paket** — Datenbank und Dateien gehören zusammen
- **Offiziell unterstützt** und getestet

---

## Checkliste für die Einrichtung

- [ ] SSH-Key-Auth vom Test- zum Prod-Server eingerichtet (Variante A) bzw. vom Prod- zum Test-Server (Variante B)
- [ ] MySQL-Verbindung vom Test- zum Prod-Server testen: `mysql -h<Prod-IP> -uroot -p`
- [ ] Firewall: Port 3306 zwischen den Servern geöffnet (Variante A)
- [ ] Script mit korrekten Zugangsdaten angepasst
- [ ] Script einmal manuell ausgeführt und Log geprüft
- [ ] Cronjob angelegt (wöchentlich Sonntag 01:00)
- [ ] Nach dem ersten automatischen Lauf das Log kontrollieren

## Fehlerbehebung

| Problem                                  | Lösung                                                               |
| ---------------------------------------- | -------------------------------------------------------------------- |
| `Access denied` beim Dump                | DB-Credentials prüfen — User braucht SELECT + LOCK TABLES + SHOW VIEW |
| `Can't connect to MySQL`                 | Firewall prüfen, MySQL `bind-address` prüfen, Netzwerk testen        |
| `Foreign key constraint` beim Import     | Datenbanken vorher droppen (im Script bereits enthalten)             |
| Apache startet nicht nach Import         | `temp/`-Verzeichnis leeren, PHP-FPM neustarten                       |
| Sync läuft, aber i-doit zeigt alte Daten | Browser-Cache leeren, i-doit Cache leeren (`temp/*`)                 |
| Export-Datei nicht gefunden (Variante B) | Pfad zu `temp/` prüfen, Schreibrechte für `www-data` sicherstellen   |

## Siehe auch

- [Daten sichern und wiederherstellen](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) — Backup-Strategie und `system:tenant-export`
- [Cronjobs einrichten](../wartung-und-betrieb/cronjobs-einrichten.md) — Automatisierung mit Cron
- [Umzug einer Installation unter Linux](../upgrades-und-umzuege/umzug-einer-installation-unter-linux.md) — Komplette Migration
- [i-doit console — Befehle und Optionen](../automatisierung-und-integration/cli/befehle-und-optionen.md) — Alle Console-Befehle
