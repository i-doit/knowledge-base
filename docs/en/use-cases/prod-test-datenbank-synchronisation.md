---
title: Prod to Test Database Synchronization
description: Regularly synchronize the productive i-doit database to a test system -- via shell script or console.php
icon:
status:
lang: en
---

# Prod to Test Database Synchronization

In many organizations, a test system runs alongside the productive i-doit instance, where updates are tested, new configurations are tried out, or training sessions are conducted. To ensure the test system contains realistic data, the production database is regularly synchronized -- typically once a week.

This article describes two approaches: a classic **shell script** with `mysqldump` and the method recommended since i-doit v35 using **console.php** with `system:tenant-export` / `system:tenant-import`.

!!! warning "Backup before sync"
    The synchronization completely overwrites the database on the test system. Make sure no important test data is lost. Only read operations are performed on the production system -- nothing changes there.

## Prerequisites

| Requirement | Details |
|-------------|---------|
| **Network** | The test server must be able to reach the production database on port 3306 |
| **MySQL access** | DB user on production with read permissions for `idoit_system` and `idoit_data` |
| **SSH access** | Root access on the test server, **SSH key auth to the production server** (for `rsync` and `mysqldump`) |
| **Disk space** | Sufficient space for DB dumps (approx. 2x database size) |
| **Same i-doit version** | Production and test should be running the same i-doit version |

---

## Option A: Shell Script (mysqldump)

This option works with any i-doit version. The script runs on the **test server**, fetches the databases via `mysqldump` from the production server, imports them locally, and then synchronizes the files (uploads, documents, images) via `rsync`.

!!! info "The database alone is not enough"
    i-doit stores uploaded files, documents, and object images in the file system -- not in the database. Without file synchronization, all uploads added on production after the last sync will be missing on the test system.

### The Sync Script

Create the script on the test server:

```bash
sudo nano /usr/local/sbin/idoit-sync
```

Content:

```bash
#!/bin/bash
# i-doit Prod-to-Test DB sync
# Fetches databases and files from the production server and imports them locally.
# Must be run as root.
set -e

# ====================================================
# Configuration -- please adjust
# ====================================================
PROD_HOST="<PROD-SERVER-IP>"
PROD_DB_USER="root"
PROD_DB_PASS="<PROD-DB-PASSWORD>"

SYSTEM_DB="idoit_system"
DATA_DB="idoit_data"

LOCAL_DB_USER="root"
LOCAL_DB_PASS="<TEST-DB-PASSWORD>"

IDOIT_DIR="/var/www/html"
BACKUP_DIR="/var/backup/idoit"
LOG="/var/log/idoit-sync.log"

# ====================================================
mkdir -p "$BACKUP_DIR"
exec >> "$LOG" 2>&1
echo ""
echo "=========================================="
echo " Sync started: $(date '+%Y-%m-%d %H:%M:%S')"
echo "=========================================="

# ---------------------------------------------------
# Step 1: Stop Apache
# ---------------------------------------------------
echo "[1/8] Stopping Apache..."
systemctl stop apache2

# ---------------------------------------------------
# Step 2: Export databases from production server
# ---------------------------------------------------
echo "[2/8] Exporting $SYSTEM_DB from $PROD_HOST..."
mysqldump -h"$PROD_HOST" -u"$PROD_DB_USER" -p"$PROD_DB_PASS" \
    --single-transaction --routines --triggers \
    "$SYSTEM_DB" | gzip > "$BACKUP_DIR/${SYSTEM_DB}.sql.gz"

echo "[3/8] Exporting $DATA_DB from $PROD_HOST..."
mysqldump -h"$PROD_HOST" -u"$PROD_DB_USER" -p"$PROD_DB_PASS" \
    --single-transaction --routines --triggers \
    "$DATA_DB" | gzip > "$BACKUP_DIR/${DATA_DB}.sql.gz"

# ---------------------------------------------------
# Step 3: Drop and import local databases
# ---------------------------------------------------
echo "[4/8] Importing $SYSTEM_DB..."
mysql -u"$LOCAL_DB_USER" -p"$LOCAL_DB_PASS" \
    -e "DROP DATABASE IF EXISTS $SYSTEM_DB; CREATE DATABASE $SYSTEM_DB;"
gunzip < "$BACKUP_DIR/${SYSTEM_DB}.sql.gz" \
    | mysql -u"$LOCAL_DB_USER" -p"$LOCAL_DB_PASS" "$SYSTEM_DB"

echo "[5/8] Importing $DATA_DB..."
mysql -u"$LOCAL_DB_USER" -p"$LOCAL_DB_PASS" \
    -e "DROP DATABASE IF EXISTS $DATA_DB; CREATE DATABASE $DATA_DB;"
gunzip < "$BACKUP_DIR/${DATA_DB}.sql.gz" \
    | mysql -u"$LOCAL_DB_USER" -p"$LOCAL_DB_PASS" "$DATA_DB"

# ---------------------------------------------------
# Step 4: Synchronize files from production server
# ---------------------------------------------------
echo "[6/8] Synchronizing uploads..."
rsync -az --delete "root@$PROD_HOST:$IDOIT_DIR/upload/" "$IDOIT_DIR/upload/"

echo "[7/8] Synchronizing import files..."
rsync -az --delete "root@$PROD_HOST:$IDOIT_DIR/imports/" "$IDOIT_DIR/imports/"

# ---------------------------------------------------
# Step 5: Set permissions, clear cache, start Apache
# ---------------------------------------------------
echo "[8/8] Setting permissions, clearing cache, starting Apache..."
chown -R www-data:www-data "$IDOIT_DIR/upload/" "$IDOIT_DIR/imports/"
rm -rf "$IDOIT_DIR/temp/"*
systemctl start apache2

# ---------------------------------------------------
# Cleanup: Delete dumps older than 30 days
# ---------------------------------------------------
find "$BACKUP_DIR" -name "*.sql.gz" -mtime +30 -delete

echo "=========================================="
echo " Sync completed: $(date '+%Y-%m-%d %H:%M:%S')"
echo "=========================================="
```

### Setting Up the Script

```bash
# Make executable
chmod +x /usr/local/sbin/idoit-sync

# Test manually once
/usr/local/sbin/idoit-sync

# Check the log
tail -f /var/log/idoit-sync.log
```

### Setting Up a Cronjob (Weekly)

Create the file `/etc/cron.d/idoit-sync`:

```bash
# i-doit Prod-to-Test Sync: Every Sunday at 01:00
0 1 * * 0  root  /usr/local/sbin/idoit-sync
```

---

## Option B: console.php (from v35, recommended)

Starting with i-doit version 35, the console commands `system:tenant-export` and `system:tenant-import` are available. These export a complete tenant -- database **and** uploaded files -- as a ZIP package. This is the cleaner method because the database and files are kept consistent together.

### Export on the Production Server

```bash
sudo -u www-data php /var/www/html/console.php system:tenant-export \
    --user admin --password admin --tenantId 1
```

This creates a ZIP archive in the i-doit `temp/` directory.

### Transfer to the Test Server

```bash
scp /var/www/html/temp/idoit-tenant-export-*.zip testserver:/var/backup/
```

### Import on the Test Server

```bash
sudo -u www-data php /var/www/html/console.php system:tenant-import \
    --file /var/backup/idoit-tenant-export-DATE.zip \
    --tenant-database-name idoit_data \
    --tenant-title "Test" \
    --with-system-settings \
    --with-tenant-settings \
    --db-root-user root \
    --db-root-pass <PASSWORD> \
    --db-host <HOST>
```

### Automated Script (Export + Transfer + Import)

This script runs on the **production server**, exports the tenant, transfers the package via SSH to the test server, and triggers the import there.

Create the script on the production server:

```bash
sudo nano /usr/local/sbin/idoit-tenant-sync
```

Content:

```bash
#!/bin/bash
# i-doit Prod-to-Test tenant sync via console.php
# Must be run as root on the production server.
# Prerequisite: SSH key auth from the production server to the test server must be set up.
set -e

# ====================================================
# Configuration -- please adjust
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
TEST_DB_PASS="<TEST-DB-PASSWORD>"
# ====================================================

echo "--- Step 1: Export on production ---"
rm -f "$PROD_TEMP"/idoit-tenant-export-*.zip

sudo -u www-data php "$PROD_CONSOLE" system:tenant-export \
    --user "$IDOIT_USER" --password "$IDOIT_PASS" --tenantId "$TENANT_ID"

EXPORT_FILE=$(ls -t "$PROD_TEMP"/idoit-tenant-export-*.zip 2>/dev/null | head -1)

if [ -z "$EXPORT_FILE" ]; then
    echo "ERROR: Export file not found!"
    exit 1
fi

FILENAME=$(basename "$EXPORT_FILE")

echo "--- Step 2: Transfer to $TEST_HOST ---"
ssh "$TEST_USER@$TEST_HOST" "mkdir -p $TEST_BACKUP_DIR"
scp "$EXPORT_FILE" "$TEST_USER@$TEST_HOST:$TEST_BACKUP_DIR/$FILENAME"

echo "--- Step 3: Import on $TEST_HOST ---"
ssh "$TEST_USER@$TEST_HOST" \
    "sudo -u www-data php $TEST_CONSOLE system:tenant-import \
        --file $TEST_BACKUP_DIR/$FILENAME \
        --tenant-database-name $TEST_DB_NAME \
        --tenant-title 'Test System' \
        --with-system-settings \
        --with-tenant-settings \
        --db-root-user root \
        --db-root-pass '$TEST_DB_PASS' \
        --db-host localhost \
    && rm -f $TEST_BACKUP_DIR/$FILENAME"

echo "--- Step 4: Clean up on production ---"
rm -f "$EXPORT_FILE"

echo "DONE! The test system was successfully updated."
```

```bash
chmod +x /usr/local/sbin/idoit-tenant-sync
```

### As a Cronjob (Weekly)

```bash
# /etc/cron.d/idoit-tenant-sync
# Every Sunday at 01:00 -- on the production server
0 1 * * 0  root  /usr/local/sbin/idoit-tenant-sync
```

### Advantages over the Manual Method

- **Files are included in the export** -- uploads, documents, everything in one package
- **Consistent package** -- database and files belong together
- **Officially supported** and tested

---

## Setup Checklist

- [ ] SSH key auth set up from test to production server (Option A) or from production to test server (Option B)
- [ ] Test MySQL connection from test to production server: `mysql -h<Prod-IP> -uroot -p`
- [ ] Firewall: Port 3306 open between the servers (Option A)
- [ ] Script adjusted with correct credentials
- [ ] Script run manually once and log checked
- [ ] Cronjob set up (weekly Sunday 01:00)
- [ ] Check log after first automated run

## Troubleshooting

| Problem | Solution |
|---------|----------|
| `Access denied` during dump | Check DB credentials -- user needs SELECT + LOCK TABLES + SHOW VIEW |
| `Can't connect to MySQL` | Check firewall, check MySQL `bind-address`, test network |
| `Foreign key constraint` during import | Drop databases first (already included in the script) |
| Apache does not start after import | Clear `temp/` directory, restart PHP-FPM |
| Sync runs but i-doit shows old data | Clear browser cache, clear i-doit cache (`temp/*`) |
| Export file not found (Option B) | Check path to `temp/`, ensure `www-data` has write permissions |

## See also

- [Backup and Restore Data](../maintenance-and-operation/backup-and-restore/index.md) -- Backup strategy and `system:tenant-export`
- [Setting Up Cronjobs](../maintenance-and-operation/set-up-cron-jobs.md) -- Automation with cron
- [Migrating an installation on Linux](../upgrades-and-migrations/migration-on-linux.md) -- Complete migration
- [i-doit Console -- Commands and Options](../automation-and-integration/cli/commands-and-options.md) -- All console commands
