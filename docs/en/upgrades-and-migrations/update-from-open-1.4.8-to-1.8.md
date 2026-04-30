---
title: Update from i-doit open 1.4.8 to 1.8
description: "This article describes the specifics of updating the open variant from version 1.4.8 to 1.8."
icon: fontawesome/brands/linux
status:
lang: en
---

This article describes the specifics of updating the open variant from version 1.4.8 to 1.8.

## Preparation

The update from 1.4.8 to 1.8 brings extensive changes: revised Web GUI, modified database model, and an extended API (as a separate, free module).

## Download

Download the update package here:

[![](../assets/downloads/idoit-open-1.8-update.zip)idoit-open-1.8-update.zip](../assets/downloads/idoit-open-1.8-update.zip)

Note:

*   Your installation must be on version **1.4.8**. Update older versions to 1.4.8 first.
*   The update is performed step by step up to version 1.8 -- newer versions are only possible after that.

## Execution

Copy the update package to the i-doit directory and extract it. Example for Debian:


    sudo -u www-data cp idoit-open-1.8-update.zip /var/www/html/
    cd /var/www/html/
    sudo -u www-data unzip idoit-open-1.8-update.zip

Adjust the path to your installation. Use the Apache user so that the permissions are correct.

The subsequent update procedure corresponds to the normal [update via the Web GUI](../maintenance-and-operation/i-doit-update.md). Since major updates cannot be skipped, you apply the versions one after another:

1. Version 1.4.8 → 1.5
2. Version 1.5 → 1.6
3. Version 1.6 → 1.7
4. Version 1.7 → 1.8

After each step, you are prompted for the next one. If all are successful, the Web GUI displays version 1.8.

## Post-Processing

After the update, perform the following steps:

*   [Configure backup](../maintenance-and-operation/backup-and-restore/index.md)
*   [Set up cron jobs](../automation-and-integration/cli/index.md)

## Troubleshooting

At each step, i-doit creates a log file in the `log/` directory. If a step fails with an error, you will find the details in the log. In this case, do **not perform any further update steps** to avoid follow-up errors.

You can find help in the [open forum](https://forum.i-doit.org/) and in the [troubleshooting tips](../administration/troubleshooting/index.md).
