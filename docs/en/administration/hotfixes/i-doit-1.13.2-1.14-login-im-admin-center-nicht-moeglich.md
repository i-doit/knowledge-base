---
title: "i-doit 1.13.2 & 1.14: Login to Admin Center Not Possible"
description: "This hotfix fixes a bug that prevents logging into the Admin Center in versions 1.13.2 and 1.14."
icon:
status:
lang: en
---
# i-doit 1.13.2 & 1.14: Login to Admin Center Not Possible

This hotfix fixes a bug that prevents logging into the Admin Center in versions 1.13.2 and 1.14.

## Applying the Hotfix

Extract the ZIP file in the i-doit installation directory and confirm overwriting (press **Y** or **A**):

    sudo cp i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip /var/www/html/
    cd /var/www/html/
    sudo -u www-data unzip i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
    sudo rm i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip

!!! attention "Please note"

    Use this hotfix exclusively with version 1.13.2 or 1.14.
    Create a [backup of i-doit](../../wartung-und-betrieb/daten-sichern-und-wiederhfirstllen/index.md) beforehand.
    If you contact support afterwards, mention that you have applied the hotfix.

### Login to Admin Center no longer works (versions 1.13.2 and 1.14 only)

!!! attention "Consent"

    By downloading a hotfix, you confirm that you have fully read and understood the above notices.

[i-doit_1.13.2_hotfix_ID-7224_Admin-Center-Login.zip :material-file-download:](../../assets/downloads/hotfixes/i-doit_1.13.2_hotfix_ID-7224_Admin-Center-Login.zip){ .md-button .md-button--primary }

This hotfix provides a new command for the [console.php](../../automatisierung-und-integration/cli/index.md) that allows you to set a new encrypted password for the Admin Center:

    sudo -u www-data php console.php admin-center-password-reset --user User --password Password

!!! note "Notes"
    -   `www-data` is the Apache user on Debian systems. Adjust it for your operating system.
    -   The parameters `--user` and `--password` require an i-doit user with console permissions.
