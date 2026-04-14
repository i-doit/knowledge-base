---
title: Prod→Test Datenbank-Synchronisation
description: Produktive i-doit Datenbank regelmäßig auf ein Testsystem synchronisieren — per Shell-Script oder console.php
icon:
status:
lang: de
---

# Prod→Test Datenbank-Synchronisation

In vielen Unternehmen läuft neben der produktiven i-doit-Instanz ein Testsystem, auf dem Updates getestet, neue Konfigurationen ausprobiert oder Schulungen durchgeführt werden. Damit das Testsystem realistische Daten enthält, wird die Produktionsdatenbank regelmäßig synchronisiert — typischerweise einmal pro Woche.

Dieser Artikel zeigt zwei Varianten: ein klassisches **Shell-Script** mit `mysqldump` und die seit i-doit v38 empfohlene Methode über die **console.php** mit `system:tenant-export` / `system:tenant-import`.

!!! warning "Backup vor dem Sync"
    Die Synchronisation überschreibt die Datenbank auf dem Testsystem vollständig. Stelle sicher, dass keine wichtigen Testdaten verloren gehen. Auf dem Produktivsystem wird nur gelesen — dort ändert sich nichts.

## Voraussetzungen

| Anforderung                | Details                                                              |
| -------------------------- | -------------------------------------------------------------------- |
| **Netzwerk**               | Test-Server muss die Prod-Datenbank über Port 3306 erreichen können  |
| **MySQL-Zugriff**          | DB-User auf Prod mit Leserechten für `idoit_system` und `idoit_data` |
| **SSH-Zugriff**            | Root-Zugang auf dem Test-Server, **SSH-Key-Auth zum Prod-Server**    |
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
sudo nano /var/www/html/i-doit/skripte/copy_database_from_production
```

Inhalt:

```bash
#!/bin/bash
# i-doit Prod→Test DB-Sync mit erweitertem Error-Handling

# Konfiguration
PROD_HOST="HOST"
PROD_DB_USER="root"
PROD_DB_PASS="idoit"
SYSTEM_DB="idoit_system"
DATA_DB="idoit_data"
IDOIT_PATH="/var/www/html"
LOCAL_DB_USER="root"
LOCAL_DB_PASS="idoit"
BACKUP_DIR="/var/backup/idoit"
LOG="/var/log/idoit-sync.log"

# =====================================================
# Error-Handling Funktion
failure() {
  local lineno=$1
  local msg=$2
  echo "--------------------------------------------------"
  echo " FEHLER in Zeile $lineno: $msg"
  echo " Sync wurde vorzeitig abgebrochen."
  echo " Versuche Apache wieder zu starten..."
  sudo systemctl start apache2
  echo "--------------------------------------------------"
  exit 1
}

# Trap: Ruft die failure-Funktion auf, wenn ein Befehl fehlschlägt
trap 'failure ${LINENO} "$BASH_COMMAND"' ERR

# =====================================================
# Start
sudo mkdir -p "$BACKUP_DIR"
exec > >(tee -a "$LOG") 2>&1

echo "=========================================="
echo " Sync gestartet: $(date '+%Y-%m-%d %H:%M:%S')"
echo "=========================================="

# =====================================================
# 1. Apache stoppen
echo "[1/6] Apache stoppen..."
sudo systemctl stop apache2

# =====================================================
# 2. Export
echo "[2/6] Exportiere $SYSTEM_DB von $PROD_HOST..."
mysqldump -h"$PROD_HOST" -u"$PROD_DB_USER" -p"$PROD_DB_PASS" \
  --single-transaction \
  --routines \
  --triggers \
  --max_allowed_packet=512M \
  --quick \
  "$SYSTEM_DB" | gzip > "$BACKUP_DIR/${SYSTEM_DB}.sql.gz"
if [ ${PIPESTATUS[0]} -ne 0 ]; then false; fi

echo "[3/6] Exportiere $DATA_DB von $PROD_HOST..."
mysqldump -h"$PROD_HOST" -u"$PROD_DB_USER" -p"$PROD_DB_PASS" \
  --single-transaction \
  --routines \
  --triggers \
  --max_allowed_packet=512M \
  --quick \
  "$DATA_DB" | gzip > "$BACKUP_DIR/${DATA_DB}.sql.gz"
if [ ${PIPESTATUS[0]} -ne 0 ]; then false; fi

# =====================================================
# 3. Import
echo "[4/6] Importiere $SYSTEM_DB..."
mysql -u"$LOCAL_DB_USER" -p"$LOCAL_DB_PASS" -e "DROP DATABASE IF EXISTS $SYSTEM_DB; CREATE DATABASE $SYSTEM_DB;"
gunzip < "$BACKUP_DIR/${SYSTEM_DB}.sql.gz" | mysql -u"$LOCAL_DB_USER" -p"$LOCAL_DB_PASS" "$SYSTEM_DB"

echo "[5/6] Importiere $DATA_DB..."
mysql -u"$LOCAL_DB_USER" -p"$LOCAL_DB_PASS" -e "DROP DATABASE IF EXISTS $DATA_DB; CREATE DATABASE $DATA_DB;"
gunzip < "$BACKUP_DIR/${DATA_DB}.sql.gz" | mysql -u"$LOCAL_DB_USER" -p"$LOCAL_DB_PASS" "$DATA_DB"

# =====================================================
# 4. Cache leeren & Apache starten
echo "[6/6] Cache leeren und Apache starten..."
sudo rm -rf "$IDOIT_PATH"/temp/*
sudo systemctl start apache2

# =====================================================
# Aufräumen
find "$BACKUP_DIR" -name "*.sql.gz" -mtime +30 -delete

echo "=========================================="
echo " Sync erfolgreich abgeschlossen: $(date '+%Y-%m-%d %H:%M:%S')"
echo "=========================================="

```

---

## Variante B: console.php (ab v38, empfohlen)

Ab i-doit Version 38 gibt es die console-Befehle `system:tenant-export` und `system:tenant-import`. Diese exportieren einen kompletten Mandanten — Datenbank **und** hochgeladene Dateien — als ZIP-Paket. Das ist die sauberere Methode, weil Datenbank und Dateien konsistent zusammengehören.

### Export auf dem Prod-Server

```bash
sudo -u www-data php /var/www/html/console.php system:tenant-export \
    --user admin --password admin --tenantId 1
```

Das erzeugt ein ZIP-Archiv im i-doit-Verzeichnis.

### Transfer auf den Test-Server

```bash
scp /var/www/html/tenant-export-*.zip testserver:/var/backup/
```

### Import auf dem Test-Server

```bash
sudo -u www-data php /var/www/html/console.php system:tenant-import \
    --file /var/backup/tenant-export-DATUM.zip \
    --tenant-database-name idoit_data \
    --tenant-title "Test" \
    --db-root-user root \
    --db-root-pass <PASSWORT> \
    --db-host localhost
```

### Automatisiertes Skript

```bash
#!/bin/bash

# Stoppt das Skript sofort, wenn ein Befehl fehlschlägt
set -e

# --- KONFIGURATION ---
PROD_TEMP_PATH="/var/www/html/main/temp"
PROD_CONSOLE="/var/www/html/main/console.php"

# SSH / Remote Daten
# WICHTIG: Nutze hier den User, für den du den SSH-Key hinterlegst
REMOTE_USER="moverkamp"
REMOTE_HOST="mhuhn.synetics.test"
TEST_SSH_HOST="$REMOTE_USER@$REMOTE_HOST"
TEST_BACKUP_PATH="/tmp/idoit-transfer"
TEST_CONSOLE="/var/www/html/i-doit/console.php"

# i-doit & DB
IDOIT_USER="admin"
IDOIT_PASS="admin"
TENANT_ID="1"
TEST_DB_NAME="idoit_data"

# --- 1. EXPORT ---
echo "--- Schritt 1: Export auf Prod ---"

sudo rm -f $PROD_TEMP_PATH/idoit-tenant-export-*.zip

sudo -u www-data php $PROD_CONSOLE system:tenant-export \
  --user "$IDOIT_USER" --password "$IDOIT_PASS" --tenantId "$TENANT_ID"

LATEST_EXPORT=$(ls -t $PROD_TEMP_PATH/idoit-tenant-export-*.zip 2>/dev/null | head -1)

if [ -z "$LATEST_EXPORT" ]; then
    echo "FEHLER: Export-Datei nicht gefunden!"
    exit 1
fi

FILENAME=$(basename "$LATEST_EXPORT")

# --- 2. TRANSFER ---
echo "--- Schritt 2: Transfer zu $TEST_SSH_HOST ---"
# Wir stellen sicher, dass das Zielverzeichnis existiert
ssh "$TEST_SSH_HOST" "mkdir -p $TEST_BACKUP_PATH"
scp "$LATEST_EXPORT" "$TEST_SSH_HOST:$TEST_BACKUP_PATH/"

# --- 3. REMOTE IMPORT ---
echo "--- Schritt 3: Import auf $TEST_SSH_HOST ---"
# Wir führen den Befehl direkt in einer Zeile aus.
# Das -n im sudo steht für 'non-interactive' (kein Passwort nötig dank deiner sudoers-Anpassung)
ssh "$TEST_SSH_HOST" "sudo -n -u www-data php $TEST_CONSOLE system:tenant-import --file $TEST_BACKUP_PATH/$FILENAME --tenant-database-name $TEST_DB_NAME --tenant-title 'Test-System' --with-system-settings --with-tenant-settings --db-root-user root --db-root-pass 'idoit' --db-host localhost && rm $TEST_BACKUP_PATH/$FILENAME"

# --- 4. AUFRÄUMEN ---
echo "--- Schritt 4: Aufräumen auf Prod ---"
rm "$LATEST_EXPORT"

echo "FERTIG! Das Test-System wurde erfolgreich aktualisiert."

```

### Als Cronjob (wöchentlich)

Auf dem **Prod-Server** (Export + Transfer):

```bash
# /etc/cron.d/idoit-backup
0 1 * * 0  www-data  php /var/www/html/console.php system:tenant-export \
    --user admin --password admin --tenantId 1 \
    && scp /var/www/html/tenant-export-*.zip testserver:/var/backup/
```

Auf dem **Test-Server** (Import, 30 Min. nach Export):

```bash
# /etc/cron.d/idoit-import
30 1 * * 0  www-data  php /var/www/html/console.php system:tenant-import \
    --file /var/backup/tenant-export-*.zip \
    --tenant-database-name idoit_data \
    --tenant-title "Test" \
    --db-root-user root --db-root-pass <PASSWORT>
```

### Vorteile gegenüber der manuellen Methode

- **Dateien werden mit exportiert** — Uploads, Dokumente, alles in einem Paket
- **Konsistentes Paket** — Datenbank und Dateien gehören zusammen
- **Offiziell unterstützt** und getestet

---

## Checkliste für die Einrichtung

- [ ] SSH-Zugang auf beide Server (Prod + Test)
- [ ] MySQL-Verbindung vom Test- zum Prod-Server testen: `mysql -h<Prod-IP> -uroot -p`
- [ ] Firewall: Port 3306 zwischen den Servern offen
- [ ] Altes Script prüfen: `cat /var/www/html/i-doit/skripte/copy_database_from_production`
- [ ] Alte Crontab prüfen: `crontab -l` und `ls /etc/cron.d/`
- [ ] Script mit korrekten Zugangsdaten anpassen
- [ ] Script einmal manuell ausführen und Log prüfen
- [ ] Cronjob anlegen (wöchentlich Sonntag 01:00)
- [ ] Nach erstem automatischen Lauf Log kontrollieren

## Fehlerbehebung

| Problem                                  | Lösung                                                               |
| ---------------------------------------- | -------------------------------------------------------------------- |
| `Access denied` beim Dump                | DB-Credentials prüfen, User braucht SELECT + LOCK TABLES + SHOW VIEW |
| `Can't connect to MySQL`                 | Firewall prüfen, MySQL `bind-address` prüfen, Netzwerk testen        |
| `Foreign key constraint` beim Import     | Datenbanken vorher droppen (im Script bereits enthalten)             |
| Apache startet nicht nach Import         | `temp/`-Verzeichnis leeren, PHP-FPM neustarten                       |
| Sync läuft, aber i-doit zeigt alte Daten | Browser-Cache leeren, i-doit Cache leeren (`temp/*`)                 |

## Siehe auch

- [Daten sichern und wiederherstellen](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) — Backup-Strategie und `system:tenant-export`
- [Cronjobs einrichten](../wartung-und-betrieb/cronjobs-einrichten.md) — Automatisierung mit Cron
- [Umzug einer Installation unter Linux](../upgrades-und-umzuege/umzug-einer-installation-unter-linux.md) — Komplette Migration
- [i-doit console — Befehle und Optionen](../automatisierung-und-integration/cli/befehle-und-optionen.md) — Alle Console-Befehle
