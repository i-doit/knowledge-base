---
title: Set Up Cronjobs
description: Automate recurring tasks in i-doit using cron and the i-doit console
icon:
status:
lang: en
---

# Set Up Cronjobs

Many tasks in i-doit can be automated via the [i-doit console](../automatisierung-und-integration/cli/index.md) -- from rebuilding the search index to LDAP synchronization and JDisc imports. To ensure this happens reliably and without manual intervention, you set up cronjobs.

!!! info "Recommendation"
    Setting up cronjobs is optionally but **strongly recommended** -- ideally right after [installation](../installation/index.md). Without cronjobs, notifications are not sent, the search index becomes outdated, and incomplete objects accumulate.

## How Does Cron Work?

Cron is the standard scheduler on Linux. You define **when** a command should be executed -- and cron takes care of making it happen. Each line in the crontab has five time fields followed by the command:

```
┌───────────── Minute (0–59)
│ ┌───────────── Hour (0–23)
│ │ ┌───────────── Day of month (1–31)
│ │ │ ┌───────────── Month (1–12)
│ │ │ │ ┌───────────── Day of week (0–7, 0 and 7 = Sunday)
│ │ │ │ │
* * * * *  Command
```

**Common patterns:**

| Cron expression | Meaning |
|-----------------|---------|
| `0 5 * * *` | Daily at 05:00 |
| `*/15 * * * *` | Every 15 minutes |
| `0 */2 * * *` | Every 2 hours (on the hour) |
| `30 2 * * 1` | Every Monday at 02:30 |
| `0 3 1 * *` | On the 1st of every month at 03:00 |
| `0 1 * * 1-5` | Monday through Friday at 01:00 |

!!! tip "Tip"
    Use [crontab.guru](https://crontab.guru/) to test cron expressions before deploying them.

## The i-doit Console

All automatable tasks run via `console.php` in the i-doit installation directory. The basic call looks like this:

```bash
sudo -u www-data php /var/www/html/console.php COMMAND \
    --user admin --password admin --tenantId 1
```

- `sudo -u www-data` -- Execute as the web server user (important for file permissions)
- `/var/www/html/` -- Path to your i-doit installation (adjust as needed!)
- `--user` / `--password` -- An i-doit user with sufficient permissions
- `--tenantId 1` -- The tenant ID (always `1` for single-tenant setups)

!!! tip "Configuration files instead of long command lines"
    Instead of writing all parameters on the command line for every call, you can store them in an `.ini` file and reference it with `--config` or `-c`. This is more secure (no password in shell history) and cleaner -- especially for complex commands like `ldap-sync` or `import-jdisc` with many parameters.

    ```bash
    php console.php search-index -c /var/www/html/search-index.ini
    ```

    A detailed guide with examples for each command can be found at [Configuration files for the i-doit console](../automatisierung-und-integration/cli/configuration-files.md#beispiel-fur-den-befehl-search-index).

A complete list of all commands can be found at [Commands and options](../automatisierung-und-integration/cli/befehle-und-optionen.md).

## Edit the Crontab

Open the crontab of the web server user:

```bash
sudo crontab -e -u www-data
```

Enter the desired jobs here. After saving, they become active immediately -- no restart required.

## Recommended Cronjobs

### Essential Jobs (Daily)

You should set up these jobs in every i-doit installation:

```bash
## i-doit Cronjobs
## Adjust path: /var/www/html/ = your i-doit installation directory

# Rebuild search index — so that search returns current results
5 1 * * *   php /var/www/html/console.php search-index --user admin --password admin --tenantId 1 > /dev/null 2>&1

# Send notifications — e.g., expiring contracts, certificates
10 1 * * *  php /var/www/html/console.php notifications-send --user admin --password admin --tenantId 1 > /dev/null 2>&1

# Archive logbook — compress older entries
15 1 * * *  php /var/www/html/console.php logbook:archive --user admin --password admin --tenantId 1 > /dev/null 2>&1

# Clean up authorization cache — remove orphaned entries
20 1 * * *  php /var/www/html/console.php auth-cleanup --user admin --password admin --tenantId 1 > /dev/null 2>&1

# Delete incomplete objects — clean up objects with "incomplete" status
25 1 * * *  php /var/www/html/console.php system-objectcleanup --objectStatus 1 --user admin --password admin --tenantId 1 > /dev/null 2>&1

# Clear caches
30 1 * * *  rm -rf /var/www/html/temp/* > /dev/null 2>&1
```

!!! tip "No passwords in the crontab"
    Instead of repeating `--user` and `--password` in every line, store the credentials in a [configuration file](../automatisierung-und-integration/cli/configuration-files.md#beispiel-fur-den-befehl-search-index) and reference it with `-c`.

!!! warning "Mind the time window"
    Run jobs **at night** when no users are working. During execution, no other access to i-doit should occur -- neither via the web GUI nor via the API.

### LDAP Synchronization

If you synchronize users from an [LDAP directory](../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md):

```bash
# LDAP sync — synchronize users and groups from AD every 2 hours
0 */2 * * *  php /var/www/html/console.php ldap-sync --ldapServerId 1 --user admin --password admin --tenantId 1 > /var/www/html/log/ldap-sync.log 2>&1
```

- `--ldapServerId 1` -- The ID of your LDAP server (found under Administration > LDAP)
- The log is written to `/var/www/html/log/ldap-sync.log` -- helpful for troubleshooting

The LDAP sync has many parameters (filters, mapping, groups). Instead of writing them all in the crontab, use a [configuration file](../automatisierung-und-integration/cli/configuration-files.md#beispiel-fur-den-befehl-ldap-sync) -- there you will find a complete example with attribute mapping and all options.

### JDisc Import

If you use [JDisc Discovery](../daten-konsolidieren/jdisc/index.md) for automatic inventory:

```bash
# JDisc import — import network scan daily at 04:00
0 4 * * *  php /var/www/html/console.php import-jdisc --profile 1 --group 2 --mode 4 --user admin --password admin --tenantId 1 > /var/www/html/log/jdisc-import.log 2>&1
```

- `--profile 1` -- JDisc profile ID (found under Administration > Import > JDisc)
- `--group 2` -- JDisc server group
- `--mode 4` -- Import mode (4 = Update + Create)

### CSV Import

For recurring [CSV imports](../daten-konsolidieren/csv-datenimport/index.md):

```bash
# CSV import — import new assets every Monday at 03:00
0 3 * * 1  php /var/www/html/console.php import-csv --importFile /data/import/assets.csv --importProfileId 1 --user admin --password admin --tenantId 1 > /var/www/html/log/csv-import.log 2>&1
```

### Report Export

```bash
# Export "Expiring Contracts" report every Friday at 08:00
0 8 * * 5  php /var/www/html/console.php report-export --reportId 42 --exportPath /var/www/html/exports/ --user admin --password admin --tenantId 1 > /dev/null 2>&1
```

## Bundle All Jobs in a Script

Instead of writing each command individually in the crontab, you can bundle all essential jobs in a bash script. This makes maintenance easier.

### Script: idoit-jobs

Create the script:

```bash
sudo nano /usr/local/bin/idoit-jobs
```

Content:

```bash
#!/bin/bash
set -euo pipefail

## Configuration — adjust to your installation
INSTALL_PATH="/var/www/html"
CONSOLE="php ${INSTALL_PATH}/console.php"
USER="admin"
PASS="admin"
TENANT="1"
AUTH="--user $USER --password $PASS --tenantId $TENANT"

## Run jobs
echo "$(date): Starting i-doit jobs..."

$CONSOLE logbook:archive $AUTH
$CONSOLE auth-cleanup $AUTH
$CONSOLE system-objectcleanup --objectStatus 1 $AUTH
$CONSOLE search-index $AUTH
$CONSOLE notifications-send $AUTH

# Clear caches
rm -rf ${INSTALL_PATH}/temp/*

echo "$(date): Jobs completed."
```

Make it executable:

```bash
sudo chmod +x /usr/local/bin/idoit-jobs
```

Then only one line in the crontab:

```bash
5 1 * * *  www-data  /usr/local/bin/idoit-jobs > /var/www/html/log/cronjobs.log 2>&1
```

### Script: idoit (Console Wrapper)

If you frequently call console.php manually, a wrapper script helps:

```bash
sudo nano /usr/local/bin/idoit
```

Content:

```bash
#!/bin/bash
set -euo pipefail

INSTALL_PATH="/var/www/html"
APACHE_USER="www-data"

if [ "$(whoami)" != "$APACHE_USER" ]; then
    sudo -u "$APACHE_USER" php "${INSTALL_PATH}/console.php" "$@"
else
    php "${INSTALL_PATH}/console.php" "$@"
fi
```

```bash
sudo chmod +x /usr/local/bin/idoit
```

After that, you can call the console like this:

```bash
idoit search-index --user admin --password admin --tenantId 1
```

## Error Handling

### Errors Only via Email

Set up an SMTP relay (e.g., with [msmtp](https://marlam.de/msmtp/)), then cronjobs will automatically report errors via email. Using the tool **chronic** from the **moreutils** package, only errors are reported -- successful runs remain silent:

```bash
sudo apt install moreutils

# In the crontab:
MAILTO="admin@company.com"
5 1 * * *  www-data  chronic /usr/local/bin/idoit-jobs
```

### Check Log Files

If a job fails, check the logs:

```bash
# Cronjob log
cat /var/www/html/log/cronjobs.log

# i-doit system log
tail -50 /var/www/html/log/system_*.log

# PHP error log
tail -50 /var/log/php/error.log
```

## Windows

The bash scripts described here do not work on Windows. Create equivalent batch or PowerShell scripts and use the Windows Task Scheduler for automation. The `console.php` commands remain identical -- only the invocation differs:

```powershell
php C:\i-doit\console.php search-index --user admin --password admin --tenantId 1
```

See also [Automation and cronjobs on Windows](../automatisierung-und-integration/automatisierung-und-cronjobs.md).
