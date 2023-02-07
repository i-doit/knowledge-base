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

### Login to the Admin Center no longer possible (Version 1.13.2 and 1.14 only!)

Declaration of consent

By downloading a hotfix you declare that you have read and understood the above mentioned notes completely.

### [![](/s/-rg4ht/8803/xi7l17/5.0.0/_/download/resources/com.atlassian.confluence.plugins.confluence-view-file-macro:view-file-macro-resources/images/placeholder-small-zip.png)i-doit\_1.13.2\_hotfix\_ID-7224\_Admin-Center-Login.zip](/download/attachments/82576119/i-doit_1.13.2_hotfix_ID-7224_Admin-Center-Login.zip?version=2&modificationDate=1582120247846&api=v2)

  

After implementation, this hotfix provides a new command for [console.php](/display/en/Console) to issue a new encrypted password for the Admin Center.  
The following command must be executed to reset the password:

[?](#)

`sudo` `-u www-data php console.php admin-center-password-reset --user User --password Password`

The user www-data is the Apache user of a Debian system. This user has to be adapted to other systems. Furthermore in the sections --user and --password a user from i-doit is needed who has the permissions to use the console.