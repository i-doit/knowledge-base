---
title: Back Up and Restore Data
description: Backup and restore for i-doit — databases, files, and the new console.php method
icon:
status:
lang: en
---

# Back Up and Restore Data

The [IT documentation](../../glossar.md) contains business-critical data -- network diagrams, contract information, credentials, and configurations. Data loss due to hardware failure, human error, or an attack can have serious consequences. That is why i-doit belongs in every backup strategy.

Three areas need to be backed up:

1. **Databases** -- system and tenant database(s)
2. **Files** -- the i-doit installation directory including uploaded documents
3. **System configuration** -- Apache, PHP, MariaDB

!!! tip "Easiest way: `system:tenant-export`"
    Since i-doit v38, the console command [`system:tenant-export`](#backup-via-the-console-recommended) is available, which exports the database and files in a single step as a ZIP. For regular automated backups, this is the recommended method.

---

## Backup via the Console (Recommended)

Since version 38, the i-doit console offers the commands `system:tenant-export` and `system:tenant-import`. They export or import a complete tenant -- database and uploaded files -- in a ZIP package. This is the simplest and safest way for a complete backup.

### Export (Create Backup)

```shell
sudo -u www-data php /var/www/html/console.php system:tenant-export \
    --user admin --password admin --tenantId 1
```

This creates a ZIP archive in the i-doit directory containing both the database dump and all uploaded files.

### Import (Restore Backup)

```shell
sudo -u www-data php /var/www/html/console.php system:tenant-import \
    --file /path/to/backup.zip \
    --tenant-database-name idoit_data \
    --tenant-title "My Tenant" \
    --db-root-user root \
    --db-root-pass secret \
    --db-host localhost
```

**Options:**

| parameter | Description |
|-----------|-------------|
| `--file` | Path to the ZIP file from the export |
| `--tenant-database-name` | Name of the tenant database |
| `--tenant-title` | Display name of the tenant |
| `--with-system-settings` | Also import system-wide settings |
| `--with-tenant-settings` | Import tenant-specific settings |
| `--db-root-user` / `--db-root-pass` | Database root credentials (needed to create the database) |
| `--db-host` / `--db-port` | Database host and port (default: `localhost:3306`) |

### Set Up as Cronjob

For daily automatic backups:

```shell
# Export tenant daily at 02:00
0 2 * * *  php /var/www/html/console.php system:tenant-export --user admin --password admin --tenantId 1 > /var/www/html/log/tenant-export.log 2>&1
```

!!! warning "Store backups externally"
    A backup that only exists on the same server does not protect against hardware failures. Copy the ZIP files regularly to an external system -- via `rsync`, `scp`, or to a network share.

---

## Manual Backup

If you are running an older i-doit version or need more control over the backup process, you can also back up the database and files manually.

### Back Up Databases

Use `mysqldump` for the database export. During the backup, no one should be working with i-doit -- it is best to stop the web server:

```shell
# Stop web server
sudo systemctl stop apache2

# Back up all i-doit databases
mysqldump -hlocalhost -uroot -p --all-databases | gzip -9 > /backup/idoit_$(date +%F).sql.gz

# Start web server again
sudo systemctl start apache2
```

Also disable [cronjobs](../cronjobs-einrichten.md) during the backup.

**Restore:**

```shell
gunzip < /backup/idoit_2026-04-07.sql.gz | mysql -hlocalhost -uroot -p
```

!!! attention "Foreign Key Constraints"
    During restoration, MariaDB may abort with `errno: 150 "Foreign key constraint is incorrectly formed"`. This happens because tables are restored individually and references to tables that do not yet exist are encountered.

    **Solution:** Drop the databases before restoration:

    ```sql
    DROP DATABASE idoit_system;
    DROP DATABASE idoit_data;
    ```

### Back Up Files

Back up the entire i-doit directory:

```shell
tar -czf /backup/idoit_files_$(date +%F).tar.gz /var/www/html/
```

**Restore:**

```shell
tar -xzf /backup/idoit_files_2026-04-07.tar.gz -C /
```

Then check the file permissions:

```shell
sudo chown -R www-data:www-data /var/www/html/
```

### Back Up System Configuration

Back up the configuration files for Apache, PHP, and MariaDB:

```shell
tar -czf /backup/idoit_config_$(date +%F).tar.gz \
    /etc/apache2/ \
    /etc/php/ \
    /etc/mysql/
```

Ideally, you have already documented and securely stored the customizations during [installation](../../installation/index.md).

---

## Backup Script

For a simple, automated backup you can use a bash script. An example can be found at [Backup script for data and files](backup-script-fuer-daten-und-dateien.md).

!!! tip "Recommendation"
    For new installations (from v38 onwards), `system:tenant-export` as a cronjob is the simpler and more reliable solution because the database and files are backed up in a consistent package.

---

## VM Snapshots

i-doit often runs on a virtual machine. However, a snapshot during live operation is **not a reliable backup** -- the database holds data in memory that may not have been written to disk at the time of the snapshot.

If you want to use snapshots, stop the database first:

```shell
# Before the snapshot:
sudo systemctl stop mysql

# After the snapshot:
sudo systemctl start mysql
```

VM snapshots are a good **supplement** but not a substitute for a regular backup.

---

## Best Practices

- **Regularity** -- back up daily, at minimum before every [update](../update-einspielen.md)
- **Test restores** -- a backup is only as good as the last successful restore test. Regularly restore on a test system
- **Store externally** -- backups do not belong on the same server. Copy them to a network share, a backup server, or encrypted to the cloud
- **Encrypt** -- when backups leave the premises, encrypt them (e.g., with `gpg`). Your CMDB contains sensitive infrastructure data
- **Retention period** -- keep multiple generations (e.g., 7 daily backups + 4 weekly backups) so you can restore older states as well
- **Document** -- record the restore process in writing so that colleagues can also perform a recovery in an emergency

For a complete migration to another server, read the article [Migrating an installation on Linux](../../upgrades-und-umzuege/umzug-einer-installation-unter-linux.md).
