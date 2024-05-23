# i-doit 1.12.2: Update Button does not work

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

[1.12.2-update-button-037c2ff396.zip :material-file-download:](../../assets/downloads/hotfixes/1.12.2-update-button-037c2ff396.zip){ .md-button .md-button--primary }

After applying the hotfix it is necessary to empty the i-doit cache (via the [administration](../administration/index.md)) as well as the browser cache (via the key combination **Ctrl + F5**). Afterwards, the update process can be called and executed as usual.
