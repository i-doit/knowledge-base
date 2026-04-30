---
title: "i-doit 1.12.2: Update Button Not Working"
description: "This hotfix fixes a bug that prevents the update from i-doit 1.12.2 to 1.12.3."
icon:
status:
lang: en
---
# i-doit 1.12.2: Update Button Not Working

This hotfix fixes a bug that prevents the update from i-doit 1.12.2 to 1.12.3.

## Applying the Hotfix

Extract the ZIP file in the i-doit installation directory and confirm overwriting (press **Y** or **A**):

    sudo cp i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip /var/www/html/
    cd /var/www/html/
    sudo -u www-data unzip i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
    sudo rm i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip

!!! attention "Please note"

    Use this hotfix exclusively with version 1.12.2.
    Create a [backup of i-doit](../../maintenance-and-operation/backup-and-restore/index.md) beforehand.
    If you contact support afterwards, mention that you have applied the hotfix.

### The update from i-doit 1.12.2 to 1.12.3 is not possible (version 1.12.2 only)

This hotfix fixes a bug that prevents continuing the update via the download function in version 1.12.2.

!!! attention "Consent"

    By downloading a hotfix, you confirm that you have fully read and understood the above notices.

[1.12.2-update-button-037c2ff396.zip :material-file-download:](../../assets/downloads/hotfixes/1.12.2-update-button-037c2ff396.zip){ .md-button .md-button--primary }

After applying the hotfix:

1. Clear the i-doit cache via the [Administration](../../administration/management/index.md).
2. Clear the browser cache with **Ctrl + F5**.
3. Proceed with the update process as usual.
