Über
----

Hotfixes beseitigen einen bestimmten Fehler und werden in der Regel als ZIP-Datei zur Verfügung gestellt. Die ZIP-Datei wird im Installationsverzeichnis von i-doit entpackt. Die Abfrage, ob Dateien beim Entpacken überschrieben werden sollen, kann bestätigt werden (Taste `**Y**` für "yes" oder `**A**` für "all"). Hier ein Beispiel:

[?](#)

`sudo` `cp` `i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip` `/var/www/html/i-doit/`

`cd` `/var/www/html/i-doit/`

`sudo` `-u www-data unzip i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip`

`sudo` `rm` `i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip`

Bitte beachten

Bitte nutzen Sie Hotfixes ausschließlich mit der genannten Version. In neueren Versionen werden diese bereits enthalten sein, sodass eine erneute Installation nicht notwendig ist.

Sollten Sie eine ältere Version von i-doit nutzen, ist es notwendig, zuerst auf die aktuelle Version zu aktualisieren.

Falls ein Hotfix zur Ausführung des Updates einer älteren Version notwendig ist, ist dieser in den Unterkapiteln zu den Hotfixes hier in der Knowledge Base zu finden.

Da es sich hierbei um Hotfixes handelt, empfehlen wir, diese nur einzuspielen, wenn diese für den sauberen Betrieb Ihrer Installation notwendig sind oder Sie durch den Support zur Verwendung aufgefordert werden. Bitte stellen Sie sicher, dass vor der Verwendung dieser Hotfixes ein [Backup von i-doit](/display/de/Daten+sichern+und+wiederherstellen) erstellt wurde.

Sollten Sie nach der Verwendung der Hotfixes mit dem Support in Kontakt treten, ergänzen Sie bitte den Hinweis auf dessen Verwendung.

Aktualität

Die unten genannten Systemvoraussetzungen beziehen sich auf die aktuelle Version von i-doit, in diesem Fall **21\.** Zu jedem Release von i-doit werden diese Angaben angepasst. Wer die Angaben für ältere Versionen von i-doit benötigt, kann die Änderungshistorie dieser Seite verfolgen.

Einverständniserklärung

Mit dem Herunterladen eines Hotfixes erklären Sie, dass Sie die oben genannten Hinweise vollständig gelesen und verstanden haben

**Inhaltsverzeichnis**

*   1[Über](#Hotfixes-Über)
*   2[i-doit Core](#Hotfixes-i-doitCore)
    *   2.1[Notifications do not only notificate groups if the stategy Groups if available, otherwise assigned persons is selectedOperator LIKE %...% is not working in reports for operating system>variantldap-sync caching prevents user from loginHTTP 500 Error with SSO loginFatal error when displaying a specific category on the overview as standard pagesettings.cache should always contain a arrayAll version numbers are displayed in list editJDisc Import logical Ports with a single IP AddressJDisc Import with PHP8.0 ends in error when Use simple database modelling is activated](#Hotfixes-NotificationsdonotonlynotificategroupsifthestategyGroupsifavailable,otherwiseassignedpersonsisselectedOperatorLIKE%...%isnotworkinginreportsforoperatingsystem>variantldap-synccachingpreventsuserfromloginHTTP500ErrorwithSSOloginFatalerrorwhendispl)
*   3[API Add-on 1.13](#Hotfixes-APIAdd-on1.13)
    *   3.1[Object creation fails, if inventory number of accounting category has specific validation](#Hotfixes-Objectcreationfails,ifinventorynumberofaccountingcategoryhasspecificvalidation)
    *   3.2[Error "f\_popup\_": "(unknown) Property 'f\_popup\_' is unknown."](#Hotfixes-Error"f_popup_":"(unknown)Property'f_popup_'isunknown.")
*   4[Forms Add-on 1.1.0](#Hotfixes-FormsAdd-on1.1.0)
    *   4.1[Object Data is not saved or Categories are not loaded](#Hotfixes-ObjectDataisnotsavedorCategoriesarenotloaded)

  

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