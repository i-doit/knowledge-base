# Expert settings

TODO needs rework to make sure which settings in the tenant are available

The expert settings are a kind of "registry" of i-doit. Here you can set a lot of options which you normally can't reach via the normal GUI.

!!! attention "Caution"

    Usually it is not necessary to add or edit values in the expert settings. For normal use the Web GUI provides functions to control i-doit in all relevant cases.<br>
    Should you plan to carry out changes in the expert settings, we **strongly recommend** to make a **[backup](../../../maintenance-and-operation/backup-and-recovery/index.md)** beforehand. Some of the listed settings have a serious effect on the application. In case of doubt do not hesitate to ask for [support](../../customer-portal.md).

## Configuration

[![Configuration](../../../assets/images/en/system-administration/administration/tenant-mangement/expert-settings/1-es.png)](../../../assets/images/en/system-administration/administration/tenant-mangement/expert-settings/1-es.png)

Each setting consists of three parts:

| Key | Value | Type |
| --- | --- | --- |
| The **Key** assigns a unique name to the setting. If a key shouldn't exist yet, it can be added later. | The **Value** is usually a string or a longer text or an integer value. | With the **Type** you define the scope of the setting. A setting with the type **Tenant-wide** only affects the tenant with which the user is currently logged in. **System-wide** means that the setting affects the complete i-doit independent of the available tenants. |

List of Settings
----------------

| Key | Default Value | Recommended Value | Type | Module<br>(Scope/[Add-on](../../../i-doit-pro-add-ons/index.md) in i-doit) | Description |
| --- | --- | --- | --- | --- | --- |
| api.authenticated-users-only | 0   |     | System-wide setting | PRO/CMDB | Enforces authentication for use of the API |
| auth.active | 1   |     | System-wide setting | PRO/CMDB | Activation/ deactivation of the authorization system |
| auth.logging | 1   | 1   | Tenant-wide setting | PRO/CMDB | Activates/ deactivates logging of authorization system notifications |
| auth.use-in-cmdb-explorer | 0   | 0   | Tenant-wide setting | PRO/CMDB | Activates considering of permissions in the CMDB explorer. Objects which don't have any rights assignments aren't displayed/ iterated. |
| auth.use-in-cmdb-explorer-service-browser | 0   | 0   | Tenant-wide setting | PRO/CMDB | Activates considering of permissions in the CMDB explorer Service Popup. The user only sees services for which he has permissions. |
| auth.use-in-object-browser | 0   | 0   | Tenant-wide setting | PRO/CMDB | Activates considering of permissions in the object browser. Objects which don't have any rights assignments aren't displayed. Already selected objects are displayed as "hidden". |
| auth.use-in-file-browser | 0   | 0   | Tenant-wide setting | PRO/CMDB | Activates considering of permissions in the object browser. Objects which don't have any rights assignments aren't displayed. Already selected objects are displayed as "hidden". |
| auth.use-in-location-tree | 0   | 0   | Tenant-wide setting | PRO/CMDB | Activates considering of permissions in the location tree. Objects which don't have any rights assignments aren't displayed/ opened. |
| barcode.type | qr  |     | Tenant-wide setting | PRO/CMDB | Type of the barcode |
| check\_mk.controller.last\_log\_check | 0   |     | Tenant-wide setting | PRO/CMDB | Time of the latest run of the check\_mk controller |
| ckeditor.font\_names | Arial;Courier New;Times New Roman;Helvetica |     | Tenant-wide setting | PRO/CMDB | Usable fonts in the WYSIWYG editor |
| cmdb.connector.suffix-schema | `isys\_format\_json::encode(array( "##INPUT## - OUT" , "- ##INPUT##" , "(\*) ##INPUT##", )` |     | System-wide setting | PRO/CMDB | Formatting scheme for the generation of TODO |
| cmdb.limits.order-threshhold | 10000 | 1000 | Tenant-wide setting | PRO/CMDB | Limitation of lines for the TableComponent, threshold from where only indexed fields can be sorted and filtered |
| cmdb.limits.obj-browser.objects-in-viewmode | 8   |     | Tenant-wide setting | PRO/CMDB | Maximum number of objects to be presented in view mode in the object browser |
| cmdb.limits.port-lists-layer2 | 5   |     | Tenant-wide setting | PRO/CMDB | Limitation of the specified Layer2 nets in the port list |
| cmdb.limits.port-lists-vlans | 10  |     | Tenant-wide setting | PRO/CMDB | Limitation of the specified VLANs in the port list |
| cmdb.limits.port-overview-default-vlan-only | 0   |     | Tenant-wide setting | PRO/CMDB | Only the default VLAN is to be displayed in the port overview |
| cmdb.multiedit.text-size-in-px | 120 |     | Tenant-wide setting | PRO/CMDB | Size of the text in list editing |
| cmdb.object-browser.max-objects | 1500 |     | System-wide setting | PRO/CMDB | Maximum number of objects to be displayed in the object browser |
| cmdb.objtype.OBJECT\_TYPE\_ID.auto-inventory-no |     |     | Tenant-wide setting | PRO/CMDB | Pattern for the generation of automatic inventory numbers in the accounting category |
| cmdb.only-show-ranked-entries-as-such | 0   | 0   | Tenant-wide setting | PRO/CMDB | Option to specify whether relationships to an archived object should be displayed as archived or normal |
| cmdb.quickpurge |     |     | System-wide setting | PRO/CMDB | Activation/ deactivation of the quickpurge function |
| cmdb.skip-unidirectional-connection-ranking | 0   | 0   | System-wide setting | PRO/CMDB | Option to specify whether links to an archived object should be displayed as archived or normal |
| cmdb.unique.hostname |     |     | Tenant-wide setting | PRO/CMDB | Activation/ deactivation of unique host names |
| cmdb.unique.ip-address |     |     | System-wide setting | PRO/CMDB | Activation/ deactivation of unique IPs |
| cmdb.unique.layer-2-net |     |     | Tenant-wide setting | PRO/CMDB | Activation/ deactivation of unique Layer-2 IDs |
| cmdb.unique.object-title |     |     | Tenant-wide setting | PRO/CMDB | Activation/ deactivation of unique object titles |
| email.template.maintenance | "Your maintenance contract: %s timed out.\\n\\n" .  <br>"<strong>Contract information</strong>:\\n" .  <br>"Start: %s\\n" .  <br>"End: %s\\n" .  <br>"Support-Url: %s\\n" .  <br>"Contract-Number: %s\\n" .  <br>"Customer-Number: %s" |     | System-wide setting | PRO/CMDB |     |
| email.template.password | "Hello %FIRSTNAME% %LASTNAME%, \\n\\n" .  <br>"Your password has been changed to: %PASSWORD%\\n" .  <br>"\\n\\n" .  <br>"Regards,\\n" .  <br>"i-doit system" |     | System-wide setting | PRO/CMDB | Applied e-mail template for password changes |
| gui.empty\_value | \-  | \-  | Tenant-wide setting | Core | Specifies the presentation of an empty value in the GUI |
| gui.forum-link | 0   |     | System-wide setting | Core | Link to forum |
| gui.leftcontent.width | 235 | 350 | User setting | Core | Defines the width of the left tree area in pixels |
| gui.mandator-switch.keep-url | 0   |     | System-wide setting | Core | Specifies whether the import process changes the object status or not. |
| gui.quickinfo.active | 1   |     | System-wide setting | PRO/CMDB | Activation/ deactivation of tooltip pop-ups |
| gui.quickinfo.delay | 0   |     | System-wide setting | PRO/CMDB | Delay time for showing/ hiding tooltip pop-ups |
| gui.wiki-url |     |     | System-wide setting | PRO/CMDB | Link to Wiki |
| gui.wysiwyg | 1   |     | System-wide setting | PRO/CMDB | Activation/ deactivation of WYSIWYG editors. |
| import.object.keep-status | FALSE |     | System-wide setting | PRO/CMDB | Specifies whether the import process changes the object status or not. |
| jdisc.import-unidentified-devices | false |     | Tenant-wide setting | PRO/CMDB | Activation/ deactivation of imports of unidentified JDISC objects |
| jdisc.prevent-duplicates | 1   | 1   | System-wide setting | PRO/CMDB | Searches for JDISC devices using their names and uses them instead of creating duplicates (#1, #2, ..) |
| ldap.debug | true |     | System-wide setting | LDAP | Activates the generation of a debug log for the synchronization process |
| ldap.default-group | 14  |     | System-wide setting | LDAP | Default group for imported contacts which can't be assigned to any group |
| logbook.changes | 1   |     | Tenant-wide setting | Logbook | Activate/Deactivate logging of changes in the logbook |
| logging.cmdb.import | false |     | System-wide setting | Import | Activation/ deactivation of the logging for i-doit import processes |
| logging.system.api | false |     | System-wide setting | Api | Activation/ deactivation of the logging of API calls |
| login.tenantlist.sortby |     |     | System-wide setting | Core | Sorting of the tenant list on the login page |
| maxlength.dialog\_plus | 110 |     | Tenant-wide setting | PRO/CMDB | Maximum length of characters for entries in dialog lists |
| maxlength.location.objects | 16  |     | Tenant-wide setting | PRO/CMDB | Maximum number of objects to be displayed |
| maxlength.location.path | 40  |     | Tenant-wide setting | PRO/CMDB | Maximum length of location paths |
| maxlength.object.lists | 55  |     | Tenant-wide setting | PRO/CMDB | Maximum number of objects to be displayed in object lists |
| memcache.host | 127.0.0.1 | System-dependent | Tenant-wide setting | PRO/CMDB | Host name or IP address for Memcache caching service (memcached) |
| memcache.port | 11211 | System-dependent | Tenant-wide setting | PRO/CMDB | Port for Memcache caching service (memcached) |
| proxy.active |     |     | System-wide setting | Core | Activation/ deactivation of the proxy |
| proxy.host |     |     | System-wide setting | Core | Proxy: Host |
| proxy.password |     |     | System-wide setting | Core | Proxy: Password |
| proxy.port |     |     | System-wide setting | Core | Proxy: Port |
| proxy.username | false |     | System-wide setting | Core | Proxy: User name |
| qrcode.config |     |     | Tenant-wide setting | PRO/CMDB | QR code configuration |
| reports.browser-url | [http://reports-ng.i-doit.org/](http://reports-ng.i-doit.org/) |     | System-wide setting | PRO/CMDB | URL to i-doit online report repository |
| search.global.autostart-deep-search | 0   |     | Tenant-wide setting | PRO/CMDB | Automatic deep search |
| security.passwort.minlength | 4   |     | Tenant-wide setting | Core | Minimum length for user passwords |
| session.sso.active | false |     | System-wide setting | Core | Activation/ deactivation of SingleSign-On |
| session.sso.language | en  |     | System-wide setting | Core | Default language for SingleSign-On |
| session.sso.mandator-id | 1   |     | System-wide setting | Core | The tenant used for SingleSign-On |
| session.time | 300 |     | System-wide setting | Core | Duration of the login session |
| system.devmode |     |     | System-wide setting | Core | Activation/ deactivation of the i-doit Devmode |
| system.dir.file-upload | upload/files/ |     | System-wide setting | Core | Path to the directory for file uploads |
| system.dir.image-upload | upload/images/ |     | System-wide setting | Core | Path to the directory for image uploads |
| system.email.connection-timeout | 60  |     | System-wide setting | Core | E-mail: Connection timeout for connection establishment to mail server |
| system.email.from | [i-doit@i-doit.com](mailto:i-doit@i-doit.com) |     | System-wide setting | Core | E-mail: Originator address |
| [system.email.name](http://system.email.name) | I-doit |     | System-wide setting | Core | E-mail: Name of originator |
| system.email.port | 25  |     | System-wide setting | Core | E-mail: Port |
| system.email.smtp-host |     |     | System-wide setting | Core | E-mail: Host of the server |
| system.email.smtpdebug | 0   |     | System-wide setting | Core | E-mail: SMTP debug |
| system.email.subject-prefix |     |     | System-wide setting | Core | E-mail: Subject prefix for e-mails sent by i-doit |
| system.memory-limit.jdisc | 2G  | 2G  | System-wide setting | JDisc | RAM limit for Jdisc import |
| system.memory-limit.object-lists | 768M | 768M | System-wide setting | CMDB | RAM limit for object lists |
| system.memory-limit.relation-object-list | 1024M | 1024M | System-wide setting | CMDB | RAM limit for relation lists (increased memory requirements possible with larger environments) |
| system.memory-limit.search | 1G  | 1500M | System-wide setting | Search | RAM limit for global full-text search |
| system.show-proc-time | 0   |     | System-wide setting | Core | Indication of the required runtime as HTML comment |
| system.timezone | Europe/Berlin |     | System-wide setting | Core | Time zone to be used, available values can be found here:  <br>[http://php.net/manual/de/timezones.php](http://php.net/manual/de/timezones.php) |
| tts.rt.queues | General |     | System-wide setting | Core | Used queues during the creation of a new ticket in the RT. Should there be more queues, they are indicated in a comma-separated way. |
| workflows.max-checklist-entries | 7   |     | User setting | Workflows | Maximum entries in check lists |
| css.caching.cache-to-temp | 1   | 1   | System-wide setting | Core | Determines if the CSS files are pooled into one file in the Temp directory (this results in faster loading times). |
| system.last-change |     |     | System-wide setting | Core | Marks the date of the latest system update in form of a UNIX timestamp. This value is also changed with an update or the installation of a module. |
| system.dev.assert.active | 0   | 0   | System-wide setting | Core | Display developer error (see also assert\_options(ASSERT\_ACTIVE)) |
| system.dev.assert.warning | 0   | 0   | System-wide setting | Core | Display developer error (see also assert\_options(ASSERT\_WARNING)) |
| system.dev.assert.bail | 0   | 0   | System-wide setting | Core | Display developer error (see also assert\_options(ASSERT\_BAIL)) |
| error-tracker.enabled | 1   | 1   | System-wide setting | Error Tracker | Activates automatic exception/ error tracking and transmission of the error via HTTPS to Synetics |
| error-tracker.type | rollbar | rollbar | System-wide setting | Error Tracker | Error tracking mechanisms, currently only Rollbar is available |
| error-tracker.environment | Production | Production | System-wide setting | Error Tracker | In which environment did the error occur? (Production, Test, Development) |
| error-tracker.anonymize | 1   | 1   | System-wide setting | Error Tracker | Send only anonymized data (non-anonymized data: user name, e-mail address, host name, IP address) |
| gui.nat-sort.port-list | 1   | 1   | Tenant-wide setting | PRO/CMDB | Lexicographical sorting of the port list |
| workflows.mail.ip-address |     |     | System-wide setting | Workflows | IP address for use in Workflow e-mails |
| workflows.mail.hostname |     |     | System-wide setting | Workflows | Host name for use in Workflow e-mails |
| cache.default-expiration-time | 86400 | 86400 | Tenant-wide setting | Caching | Determines the time (in seconds) for how long you want to preserve data in specific system-internal caches (for example, authorization system, analysis results) |
| system.memory-limit.searchindex | 4096M | 4096M | System-wide setting | Search | Reserved memory for search indexes; indexation of 50,000 objects requires approximately 1.5GB RAM. |
| gui.login.display | user-name |     | User setting | PRO/CMDB | Presentation of the name in the "logged in as" area:<br><br>*   user-name: lfischer<br>*   full-name: Dr. Leonard Fischer<br>*   full-name-plus: Dr. Leonard Fischer (lfischer)<br>*   first-last-name-abbreviation: L. Fischer |
| system.security.csrf | 0   | 0   | System-wide setting | Core | Decides if a CSRF-Token is used during login, during saving of categories and XML export. |
| cmdb.limits.object-table-columns | 10  | 10  | Tenant-wide setting | PRO/CMDB | Decides how many columns are allowed to be shown in the object lists. |
