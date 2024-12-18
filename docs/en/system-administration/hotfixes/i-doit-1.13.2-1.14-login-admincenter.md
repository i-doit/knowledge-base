# i-doit 1.13.2 & 1.14: Login to Admin-Center no longer possible

Hotfixes fix a certain error and are usually provided as a ZIP file. The ZIP file is unpacked in the i-doit installation directory. Confirm the question whether you want to overwrite files during unpacking (**Y** key for "yes" or **A** key for "all"). Here you can find an example:

    sudo cp i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip /var/www/html/i-doit/
    cd /var/www/html/i-doit/
    sudo -u www-data unzip i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
    sudo rm i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip

!!! attention "Please note"

    Please use hotfixes exclusively with the specified version.
    Please ensure that you made a [backup of i-doit](../../maintenance-and-operation/backup-and-recovery/index.md) before you use any hotfix.
    Please inform us about the use of hotfixes should you contact our support team afterwards.

!!! danger "Updating from i-doit 1.12.2 to 1.12.3 is not possible (Version 1.12.2 only!)"

This hotfix corrects an error that prevents the update from continuing via the download function when version 1.12.2 is used.

!!! attention "Declaration of consent"

    By downloading a hotfix you declare that you have read and understood the above mentioned notes completely.

[i-doit_1.13.2_hotfix_ID-7224_Admin-Center-Login.zip :material-file-download:](../../assets/downloads/hotfixes/i-doit_1.13.2_hotfix_ID-7224_Admin-Center-Login.zip){ .md-button .md-button--primary }

After implementation, this hotfix provides a new command for [console.php](../../automation-and-integration/cli/index.md) to issue a new encrypted password for the Admin-Center.  
The following command must be executed to reset the password:

    sudo -u www-data php console.php admin-center-password-reset --user User --password Password

The user www-data is the Apache user of a Debian system. This user has to be adapted to other systems. Furthermore in the sections --user and --password a user from i-doit is needed who has the permissions to use the console.
