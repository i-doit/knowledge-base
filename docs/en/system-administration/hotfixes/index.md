# Hotfixes

About
-----

Hotfixes fix a certain error and are usually provided as a ZIP file. The ZIP file is unpacked in the i-doit installation directory. Confirm the question whether you want to overwrite files during unpacking (**Y** key for "yes" or **A** key for "all"). Here you can find an example:

    sudo cp i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip /var/www/html/i-doit/
    cd /var/www/html/i-doit/
    sudo -u www-data unzip i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
    sudo rm i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip

!!! attention "Please note"

    Please use hotfixes exclusively with the specified version. Hotfixes will be included in newer versions so that a renewed installation is not necessary.
    Should you use an older i-doit version it is essential to make an update to the latest version first.
    If a hotfix is required to update an older version, it can be found in the hotfix subchapters here in the Knowledge Base.
    As these are hotfixes we recommend installing them only when the adjustments are necessary for a flawless operation of your installation or you are requested by the support team to use them. Please ensure that you made a [backup of i-doit](../../maintenance-and-operation/backup-and-recovery/index.md) before you use any hotfix.
    Please inform us about the use of hotfixes should you contact our support team afterwards.

!!! info "Current version"

    The requirements shown below apply to the current version of i-doit, in this case **21\.** These requirements are adjusted for each release of i-doit. If the requirements of older versions are needed, the change history of this page can be used.

!!! attention "Declaration of consent"

    By downloading a hotfix you declare that you have read and understood the above mentioned notes completely.

i-doit Core
-----------

### Notifications do not only notificate groups if the stategy Groups if available, otherwise assigned persons is selected  
Operator LIKE %...% is not working in reports for operating system>variant  
ldap-sync caching prevents user from login  
HTTP 500 Error with SSO login  
Fatal error when displaying a specific category on the overview as standard page  
settings.cache should always contain a array  
All version numbers are displayed in list edit  
JDisc Import logical Ports with a single IP Address  
JDisc Import with PHP8.0 ends in error when Use simple database modelling is activated

[![](/s/-rg4ht/8803/xi7l17/5.0.0/_/download/resources/com.atlassian.confluence.plugins.confluence-view-file-macro:view-file-macro-resources/images/placeholder-small-zip.png)i-doit\_21\_hotfix\_package.zip](/download/attachments/127140823/i-doit_21_hotfix_package.zip?version=1&modificationDate=1670941575713&api=v2)

API Add-on 1.13
---------------

### Object creation fails, if inventory number of accounting category has specific validation

[![](/s/-rg4ht/8803/xi7l17/5.0.0/_/download/resources/com.atlassian.confluence.plugins.confluence-view-file-macro:view-file-macro-resources/images/placeholder-small-zip.png)api\_1.13\_hotfix\_API-336\_0e10655.zip](/download/attachments/127140823/api_1.13_hotfix_API-336_0e10655.zip?version=1&modificationDate=1668089159405&api=v2)

### Error "f\_popup\_": "(unknown) Property 'f\_popup\_' is unknown."

[![](/s/-rg4ht/8803/xi7l17/5.0.0/_/download/resources/com.atlassian.confluence.plugins.confluence-view-file-macro:view-file-macro-resources/images/placeholder-small-zip.png)api\_1.13\_hotfix\_API-332.zip](/download/attachments/127140823/api_1.13_hotfix_API-332.zip?version=1&modificationDate=1669219021265&api=v2)

Forms Add-on 1.1.0
------------------

### Object Data is not saved or Categories are not loaded

It is necessary to re-index the category attributes via [Systemtools](/display/en/System+Tools), after applying the hotfix

[![](/s/-rg4ht/8803/xi7l17/5.0.0/_/download/resources/com.atlassian.confluence.plugins.confluence-view-file-macro:view-file-macro-resources/images/placeholder-small-zip.png)aof-17-incompatible-function-declaration.zip](/download/attachments/127140823/aof-17-incompatible-function-declaration.zip?version=3&modificationDate=1671123399589&api=v2)