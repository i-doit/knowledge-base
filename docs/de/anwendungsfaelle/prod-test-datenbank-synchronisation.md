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

| Anforderung | Details |
|-------------|---------|
| **Netzwerk** | Test-Server muss die Prod-Datenbank über Port 3306 erreichen können |
| **MySQL-Zugriff** | DB-User auf Prod mit Leserechten für `idoit_system` und `idoit_data` |
| **SSH-Zugriff** | Root-Zugang auf dem Test-Server, SSH-Key-Auth zum Prod-Server (für `rsync` und `mysqldump`) |
| **Speicherplatz** | Ausreichend Platz für DB-Dumps (ca. 2× Datenbankgröße) |
| **Gleiche i-doit-Version** | Prod und Test sollten auf derselben i-doit-Version laufen |

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
# i-doit Prod-Test DB-Sync
# Kopiert die i-doit Datenbanken vom Produktivsystem auf den Testserver
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

IDOIT_DIR="/var/www/html/i-doit"
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
# Schritt 3: Lokale Datenbanken droppen und importieren
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
rsync -az --delete "$PROD_DB_USER@$PROD_HOST:$IDOIT_DIR/upload/" "$IDOIT_DIR/upload/"

echo "[7/8] Synchronisiere Imports und Dokumente..."
rsync -az --delete "$PROD_DB_USER@$PROD_HOST:$IDOIT_DIR/imports/" "$IDOIT_DIR/imports/"

# ---------------------------------------------------
# Schritt 5: Dateiberechtigungen, Cache leeren, Apache starten
# ---------------------------------------------------
echo "[8/8] Berechtigungen setzen, Cache leeren, Apache starten..."
chown -R www-data:www-data "$IDOIT_DIR/upload/" "$IDOIT_DIR/imports/"
rm -rf "$IDOIT_DIR/temp/*"
systemctl start apache2

# ---------------------------------------------------
# Aufräumen: Dumps älter als 30 Tage löschen
# ---------------------------------------------------
find "$BACKUP_DIR" -name "*.sql.gz" -mtime +30 -delete

echo "=========================================="
echo " Sync abgeschlossen: $(date '+%Y-%m-%d %H:%M:%S')"
echo "=========================================="
```

### Script einrichten

```bash
# Ausführbar machen
chmod +x /var/www/html/i-doit/skripte/copy_database_from_production

# Einmal manuell testen
/var/www/html/i-doit/skripte/copy_database_from_production

# Log prüfen
tail -f /var/log/idoit-sync.log
```

### Cronjob einrichten (wöchentlich)

Erstelle die Datei `/etc/cron.d/idoit-sync`:

```bash
# i-doit Prod-Test Sync: Jeden Sonntag um 01:00 Uhr
0 1 * * 0  root  /var/www/html/i-doit/skripte/copy_database_from_production
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

| Problem | Lösung |
|---------|--------|
| `Access denied` beim Dump | DB-Credentials prüfen, User braucht SELECT + LOCK TABLES + SHOW VIEW |
| `Can't connect to MySQL` | Firewall prüfen, MySQL `bind-address` prüfen, Netzwerk testen |
| `Foreign key constraint` beim Import | Datenbanken vorher droppen (im Script bereits enthalten) |
| Apache startet nicht nach Import | `temp/`-Verzeichnis leeren, PHP-FPM neustarten |
| Sync läuft, aber i-doit zeigt alte Daten | Browser-Cache leeren, i-doit Cache leeren (`temp/*`) |

## Siehe auch

- [Daten sichern und wiederherstellen](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) — Backup-Strategie und `system:tenant-export`
- [Cronjobs einrichten](../wartung-und-betrieb/cronjobs-einrichten.md) — Automatisierung mit Cron
- [Umzug einer Installation unter Linux](../upgrades-und-umzuege/umzug-einer-installation-unter-linux.md) — Komplette Migration
- [i-doit console — Befehle und Optionen](../automatisierung-und-integration/cli/befehle-und-optionen.md) — Alle Console-Befehle
