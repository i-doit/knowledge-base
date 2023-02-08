Hotfixes fix a certain error and are usually provided as a ZIP file. The ZIP file is unpacked in the i-doit installation directory. Confirm the question whether you want to overwrite files during unpacking (`**Y**` key for "yes" or `**A**` key for "all"). Here you can find an example:

[?](#)

`sudo` `cp` `i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip` `/var/www/html/i-doit/`

`cd` `/var/www/html/i-doit/`

`sudo` `-u www-data unzip i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip`

`sudo` `rm` `i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip`

Please note

Please use hotfixes exclusively with the specified version.

Please ensure that you made a [backup of i-doit](/display/en/Backup+and+Recovery) before you use any hotfix.

Please inform us about the use of hotfixes should you contact our support team afterwards.

### Updateing from i-doit 1.12.2 to 1.12.3 is not possible (Version 1.12.2 only!)

This hotfix corrects an error that prevents the update from continuing via the download function when version 1.12.2 is used.

Declaration of consent

By downloading a hotfix you declare that you have read and understood the above mentioned notes completely.

[![](/s/-rg4ht/8803/xi7l17/5.0.0/_/download/resources/com.atlassian.confluence.plugins.confluence-view-file-macro:view-file-macro-resources/images/placeholder-small-zip.png)1.12.2-update-button-037c2ff396.zip](/download/attachments/82576122/1.12.2-update-button-037c2ff396.zip?version=1&modificationDate=1582120565136&api=v2)

After applying the hotfix it is necessary to empty the i-doit cache (via the [administration](/display/en/Administration)) as well as the browser cache (via the key combination **`Ctrl + F5`**). Afterwards, the update process can be called and executed as usual.