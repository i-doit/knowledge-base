# Admin Center

The admin center is a separate administration interface integrated in i-doit. Here the settings shared by all tenants are configured.

## Credentials

!!! attention "Attention!"

    Please do not edit the password if one is already assigned. This can only be changed via the [CLI!](../automation-and-integration/cli/index.md)

For the admin center there are **separate credentials**. These can be specified during the [installation of i-doit](../installation/manual-installation/setup.md). If this step was skipped, then there is no access to the admin center possible at first.

Signing In
----------

The admin center can be accessed via the [login screen of i-doit](../basics/initial-login.md). The **Admin-Center** link is located beneath the login screen.

[![Signing In](../assets/images/en/system-administration/admin-center/1-ac.png)](../assets/images/en/system-administration/admin-center/1-ac.png)

!!! info "Assign credentials"

    This link is only available if the credentials for the admin center have been configured (see above).

As an alternative, the URL to the admin center can be entered in the browser. For this purpose, /admin/ is added to the link to i-doit :

    https://i-doit.example.net/i-doit/admin/

[![Assign credentials](../assets/images/en/system-administration/admin-center/2-ac.png)](../assets/images/en/system-administration/admin-center/2-ac.png)

Overview
--------

In the **Home** section the currently installed version of _i-doit_ is displayed. In the **Actions** item the **i-doit environment info file** can be downloaded. This is a XML file with important system settings which can be very helpful for [troubleshooting](./troubleshooting/index.md).

[![Overview](../assets/images/en/system-administration/admin-center/3-ac.png)](../assets/images/en/system-administration/admin-center/3-ac.png)

Tenants
-------

Tenants are administrated in the **Tenants** section. This, however, is only relevant for a multi-tenant license of _i-doit_. New tenants can be generated using the **Add new tenant** button. Existing tenants can also be edited, (de)activated or deleted completely. A deleted tenant can only be restored via a [back up](../maintenance-and-operation/backup-and-recovery/index.md).

[![Tenants](../assets/images/en/system-administration/admin-center/4-ac.png)](../assets/images/en/system-administration/admin-center/4-ac.png)

Licenses
--------

[Licenses for i-doit can be installed](../maintenance-and-operation/activate-license.md) via the **Licenses** section.

[![Licenses](../assets/images/en/system-administration/admin-center/5-ac.png)](../assets/images/en/system-administration/admin-center/5-ac.png)

In the first step, the license file is uploaded by using the **Install new license** button. The respective option in the newly opened section has to be selected depending on whether it is a subscription-based license, a buyers license or a multi-tenant buyers license. For a subscription-based license or a buyers license it is sufficient to choose the associated tenant.

If a tenant or a multi-tenant buyers license is used, additional options are available in the "Multi-Tenant" section. In the "Multi-tenant options" column the tenants to be licensed can be selected. After licensing a tenant, he receives a row in the upper section. Here the object limit for each tenant can be determined. Save your limit specifications using the "Save changes" button.

Add-ons
-------

In the **Add-ons** section the [Add-ons](../i-doit-pro-add-ons/index.md) are managed. Each feature of _i-doit_ is encapsulated in a Add-on.

[![Add-ons](../assets/images/en/system-administration/admin-center/6-ac.png)](../assets/images/en/system-administration/admin-center/6-ac.png)

Support
-------

The [customer portal](../system-administration/customer-portal.md) is embedded in the **Support** section. Download packages and licenses can be downloaded here among other things.

[![Support](../assets/images/en/system-administration/admin-center/7-ac.png)](../assets/images/en/system-administration/admin-center/7-ac.png)

Configuration
-------------

In the **Config** tab two items can be configured:

*   Via **Admin-Center Credentials** the credentials to the admin center can be changed (see above).
*   Via **Connection to i-doit System Database** the access to the system database can be changed.

[![Configuration](../assets/images/en/system-administration/admin-center/8-ac.png)](../assets/images/en/system-administration/admin-center/8-ac.png)

The settings can alternatively be changed in the src/config.inc.php file in the installation path of i-doit. This file is created during the [installation process of i-doit](../installation/manual-installation/setup.md). If an [update of i-doit](../maintenance-and-operation/update.md) is installed, a [backup](../maintenance-and-operation/backup-and-recovery/index.md) of the file is shown automatically. The date of the update is stated in the file name.


## Expert settings (System related)


| Key | Default Value | Recommended Value | Type | Module<br>(Scope/[Add-on](../i-doit-pro-add-ons/index.md) in i-doit) | Description |
| --- | --- | --- | --- | --- | --- |
| api.authenticated-users-only | 0   |     | System-wide setting | PRO/CMDB | Enforces authentication for use of the API |
| auth.active | 1   |     | System-wide setting | PRO/CMDB | Activation/ deactivation of the authorization system |
| cmdb.connector.suffix-schema | `isys\_format\_json::encode(array( "##INPUT## - OUT" , "- ##INPUT##" , "(\*) ##INPUT##", )` |     | System-wide setting | PRO/CMDB | Formatting scheme for the generation of TODO |
| cmdb.object-browser.max-objects | 1500 |     | System-wide setting | PRO/CMDB | Maximum number of objects to be displayed in the object browser |
| css.caching.cache-to-temp | 1   | 1   | System-wide setting | Core | Determines if the CSS files are pooled into one file in the Temp directory (this results in faster loading times). |
| email.template.maintenance | "Your maintenance contract: %s timed out.\\n\\n" .  <br>"<strong>Contract information</strong>:\\n" .  <br>"Start: %s\\n" .  <br>"End: %s\\n" .  <br>"Support-Url: %s\\n" .  <br>"Contract-Number: %s\\n" .  <br>"Customer-Number: %s" |     | System-wide setting | PRO/CMDB |     |
| email.template.password | "Hello %FIRSTNAME% %LASTNAME%, \\n\\n" .  <br>"Your password has been changed to: %PASSWORD%\\n" .  <br>"\\n\\n" .  <br>"Regards,\\n" .  <br>"i-doit system" |     | System-wide setting | PRO/CMDB | Applied e-mail template for password changes |
| gui.forum-link | 0   |     | System-wide setting | Core | Link to forum |
| gui.mandator-switch.keep-url | 0   |     | System-wide setting | Core | Specifies whether the import process changes the object status or not. |
| gui.quickinfo.active | 1   |     | System-wide setting | PRO/CMDB | Activation/ deactivation of tooltip pop-ups |
| gui.quickinfo.delay | 0   |     | System-wide setting | PRO/CMDB | Delay time for showing/ hiding tooltip pop-ups |
| gui.wiki-url |     |     | System-wide setting | PRO/CMDB | Link to Wiki |
| gui.wysiwyg | 1   |     | System-wide setting | PRO/CMDB | Activation/ deactivation of WYSIWYG editors. |
| import.object.keep-status | FALSE |     | System-wide setting | PRO/CMDB | Specifies whether the import process changes the object status or not. |
| jdisc.prevent-duplicates | 1   | 1   | System-wide setting | PRO/CMDB | Searches for JDISC devices using their names and uses them instead of creating duplicates (#1, #2, ..) |
| ldap.debug | true |     | System-wide setting | LDAP | Activates the generation of a debug log for the synchronization process |
| ldap.default-group | 14  |     | System-wide setting | LDAP | Default group for imported contacts which can't be assigned to any group |
| logbook.changes | 1   |     | Tenant-wide setting | Logbook | Activate/Deactivate logging of changes in the logbook |
| logging.cmdb.import | false |     | System-wide setting | Import | Activation/ deactivation of the logging for i-doit import processes |
| logging.system.api | false |     | System-wide setting | Api | Activation/ deactivation of the logging of API calls |
| login.tenantlist.sortby |     |     | System-wide setting | Core | Sorting of the tenant list on the login page |
| memcache.host | 127.0.0.1 | System-dependent | Tenant-wide setting | PRO/CMDB | Host name or IP address for Memcache caching service (memcached) |
| memcache.port | 11211 | System-dependent | Tenant-wide setting | PRO/CMDB | Port for Memcache caching service (memcached) |
| proxy.active |     |     | System-wide setting | Core | Activation/ deactivation of the proxy |
| proxy.host |     |     | System-wide setting | Core | Proxy: Host |
| proxy.password |     |     | System-wide setting | Core | Proxy: Password |
| proxy.port |     |     | System-wide setting | Core | Proxy: Port |
| proxy.username | false |     | System-wide setting | Core | Proxy: User name |
| reports.browser-url | [http://reports-ng.i-doit.org/](http://reports-ng.i-doit.org/) |     | System-wide setting | PRO/CMDB | URL to i-doit online report repository |
| session.sso.active | false |     | System-wide setting | Core | Activation/ deactivation of SingleSign-On |
| session.sso.language | en  |     | System-wide setting | Core | Default language for SingleSign-On |
| session.sso.mandator-id | 1   |     | System-wide setting | Core | The tenant used for SingleSign-On |
| session.time | 300 |     | System-wide setting | Core | Duration of the login session |
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
| system.last-change |     |     | System-wide setting | Core | Marks the date of the latest system update in form of a UNIX timestamp. This value is also changed with an update or the installation of a module. |
| workflows.mail.ip-address |     |     | System-wide setting | Workflows | IP address for use in Workflow e-mails |
| workflows.mail.hostname |     |     | System-wide setting | Workflows | Host name for use in Workflow e-mails |
| system.memory-limit.searchindex | 4096M | 4096M | System-wide setting | Search | Reserved memory for search indexes; indexation of 50,000 objects requires approximately 1.5GB RAM. |
| system.security.csrf | 0   | 0   | System-wide setting | Core | Decides if a CSRF-Token is used during login, during saving of categories and XML export. |

| system.devmode |     |     | System-wide setting | Core | Activation/ deactivation of the i-doit Devmode |
| system.dev.assert.active | 0   | 0   | System-wide setting | Core | Display developer error (see also assert\_options(ASSERT\_ACTIVE)) |
| system.dev.assert.warning | 0   | 0   | System-wide setting | Core | Display developer error (see also assert\_options(ASSERT\_WARNING)) |
| system.dev.assert.bail | 0   | 0   | System-wide setting | Core | Display developer error (see also assert\_options(ASSERT\_BAIL)) |

