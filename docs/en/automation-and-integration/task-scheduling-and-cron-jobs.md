---
title: "Task Scheduling & Cron Jobs"
description: "Via Windows Task Scheduling, you automate recurring i-doit tasks such as logbook archiving, search index updates, or notification delivery."
icon:
status:
lang: en
---
# Task Scheduling & Cron Jobs

## Task Scheduling on Windows

Via Windows Task Scheduling, you automate recurring i-doit tasks such as logbook archiving, search index updates, or notification delivery.

### Prerequisites

This example assumes an i-doit instance that was set up with the [i-doit Windows Installer](../installation/manual-installation/microsoft-windows-server/index.md).

!!! warning "If you installed i-doit via XAMPP, adjust the paths for `console.php` and `php.exe` in the batch file."

### Creating a Batch File

1. Open a text editor and create a new file.
2. Save it as **"i-doit-jobs.bat"**.

[![create-batch](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/1-auc.png)](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/1-auc.png)

Fill the file with commands from the [i-doit console utility](../automation-and-integration/cli/index.md). Example content:

```batch
@echo off

set IDOIT_USERNAME="admin"
set IDOIT_PASSWORD="admin"
set TENANT_ID="1"

:: Commands to execute
:: Logbook:Archive: Archives logbook entries with a defined age, according to the settings on the i-doit interface.
C:\ProgramData\i-doit\php\php.exe C:\ProgramData\i-doit\apache-2.4\htdocs\console.php logbook:archive --user %IDOIT_USERNAME% --password %IDOIT_PASSWORD% --tenantId %TENANT_ID%

:: Search-Index: Renews the search index by deleting and rewriting it.
C:\ProgramData\i-doit\php\php.exe C:\ProgramData\i-doit\apache-2.4\htdocs\console.php search-index --user %IDOIT_USERNAME% --password %IDOIT_PASSWORD% --tenantId %TENANT_ID%

:: Notifications-Send: Sends the notifications configured on the i-doit interface
C:\ProgramData\i-doit\php\php.exe C:\ProgramData\i-doit\apache-2.4\htdocs\console.php notifications-send --user %IDOIT_USERNAME% --password %IDOIT_PASSWORD% --tenantId %TENANT_ID%
```

!!! info "The username, password, and TenantID may need to be adjusted"

### Automating JDisc Import and LDAP Sync

If you also want to automate the [JDisc import](../automation-and-integration/cli/index.md) or [LDAP sync](../automation-and-integration/cli/index.md), add the corresponding commands in the same format to the batch file.

### Setting Up Task Scheduling

For the batch file to run automatically, create a **scheduled task**:

1. Open **Task Scheduler** via the Windows search.
2. Create a "Basic Task" under the Actions tab:

[![Create basic task](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/2-auc.png)](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/2-auc.png)

3. Assign a name and optionally a description.
4. Set the trigger -- it determines when the task runs. In this example: **Daily at 4:00 AM**.

[![Set trigger](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/3-auc.png)](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/3-auc.png)

5. Select **"Start a program"** as the action and specify the batch file.

[![Run program](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/4-auc.png)](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/4-auc.png)

6. Review your settings and complete the configuration.
7. Open the properties of the created task and select the option **"Run whether user is logged on or not"** on the General page.

[![Adjust properties](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/5-auc.png)](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/5-auc.png)

Task scheduling is now complete. The task will execute the batch file with all specified commands daily at 4:00 AM.
