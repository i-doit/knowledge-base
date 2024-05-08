# LDAP / Active Directory (AD)

i-doit offers an interface for the authentication/ authorization and synchronization of data from a LDAP folder or an active directory (AD).

## Requirements

i-doit supports the following directory services:

-   [OpenLDAP](https://en.wikipedia.org/wiki/OpenLDAP)
-   [Microsoft Active Directory (AD)](https://en.wikipedia.org/wiki/Active_Directory)
-   [Novel eDirectory](https://en.wikipedia.org/wiki/NetIQ_eDirectory) (previously Directory Services)

The [PHP-Extension php_ldap](http://de.php.net/manual/en/ldap.setup.php) has to be installed and activated for the communication with an active directory (AD) / LDAP folder. If you have installed _i-doit pro_ according to our installation guide, then the module will already be available.

Don't forget to allow LDAP connection if you are using **SELinux** with `setsebool -P httpd_can_connect_ldap on`. The -P is for Permanent
Verify it via `getsebool -a | grep httpd`

### Subsequent Installation under [Debian GNU/Linux](../../installation/manual-installation/debian12.md)

```shell
sudo apt install php7-ldap
sudo service apache2 restart
```

### Subsequent Installation under [Windows](../../installation/manual-installation/microsoft-windows-server/index.md)

The file php.ini (usually at C:\xampp\php\php.ini) has to be modified. Activate loading of the php_ldap extension in a text editor.

From the line

```shell
;extension=php_ldap.dll
```

the ";" is deleted, resulting in

```shell
extension=php_ldap.dll
```

Sometimes it may also be necessary to copy the files ssleay32.dll and libeay32.dll (in most cases they are located at `C:\xampp\apache\bin\`, however, this varies from version to version) to the php\ folder. The Apache web server has to be restarted afterwards.

Configuration
-------------

In i-doit the configuration is located at **Administration → Interfaces / external Data → LDAP**. Under **Server** you can both configure one or more instances and also assign fields to attributes.

### Server

Under **Administration → Interfaces / external Data → LDAP → Server** you can configure one or more instances. All servers are queried during the login process until a login has been found. In case there are multiple [tenants](../../system-administration/multi-tenant.md), they are all queried one after another. The databases that produced a positive result in the query are offered for the login.

### LDAP Connection for Look ups (Reading)

| Field name | Content |
| --- | --- |
| **Active** | Do you want to query the server during login? |
| **Directory*** | Mandatory field: Which type of directory is queried? |
| **LDAP Version** | In which version does the directory exist? (Default: **3**) |
| **Enable LDAP Paging** | Should the maximum number of search results be activated/overridden?  <br>Then the results will be transmitted "in packets".<br><br>In an LDAP search process, it must always be taken into account that the LDAP server has an upper limit on the number of results returned per search query. For example, you search for all user objects in an entire OU structure, but only 500 users are returned as results, even though there must be well over 2000 users on the server. |
| **LDAP Page Limit** | How many results should be returned per "packet"? |
| **IP / Host name*** | Mandatory field: The IP or the host name of the server. |
| **Port*** | Mandatory field: Via which port is the query carried out? (Default: **389**) |
| **TLS** | Do you want to encrypt the login query? Attention: The authentication will fail in case of self-signed certificates or certificates whose root CA are not known to the operating system on which _i-doit_ is installed. The respective manual of the oprating system explains how the certificate can be accepted. In [Debian](../../installation/manual-installation/debian12.md)\-based operating systems the certificate of the root CA is copied to the /usr/local/share/ca-certificates/ folder and then activated with sudo update-ca-certificates. |
| **Admin username (DN)*** | Mandatory field: The path to the user object which has reading permissions for the directory.<br><br>(Example: **CN=idoit,OU=tree,DC=synetics,DC=int**) |
| **Password*** | Mandatory field: The password of the user stated above. |
| **Use admin user for all read operations** | If the option "Use admin user for all read requests" is activated, each LDAP server query is checked with the administrator account from the LDAP server configuration |
| **Time limit** | Limit for the maximum duration of the query. (Default: **30**) |

### LDAP Parameters for the _i-doit_ Login

The parameters stated here determine where users are to be searched in the directory.

| Field name | Content |
| --- | --- |
| **Unique identifier** | AD synchronization often results in changed records not being synchronized due to a changed name (marriage or similar).  <br>The "old" record is archived here and a new one is imported.  <br>Therefore a different attribute can be selected as unique identifier. See [category extension](../../system-administration/administration/import-and-interfaces/ldap/attribute-extension.md) |
| **Filter** | The filter is filled automatically with the values defined in the lower area and cannot be changed directly via the user interface. |
| **Search for users in (OU)*** | Mandatory field: The path to the organizational unit in which the users are stored in the directory.<br><br>(Example: **OU=tree,DC=synetics,DC=int**) |
| **Recursive search** | When activating the recursive search, also the folders beneath the stated organizational units are searched. This is not recommended for large directories and should be bypassed by the creation of multiple servers. |

In addition to this the filter can be further defined. The options behind this have no effect yet for a single filter line. Once the query is extended using "Add filter", the additional options come into effect.

Append to last filter:

    (&(objectClass=user)(test=test))

Append as new filter:

    (&(objectClass=user)(&(test=test)))

Create new term:

    (&(&(objectClass=user))(test=test))

You can then test the configuration specified above in the bottom section. Optimally, the following notification is displayed:

    Connection OK!
    XX object(s) found in OU=tree,OU=synetics,DC=synetics,DC=int.

If the error message is not clear enough in the event of a failure, the debug level can be increased so that further outputs are written into the Apache error log. In Debian-based operating systems the error log can be found at /var/log/apache2/error.log.

### Object identification

Without any further setting, e.g. Unique identifier, is identified using the login attribute from the category Persons → Login.

### Directories

Afterwards you can set up the mapping via **Administration → Interfaces / external Data → LDAP → Directories**. It is used to query basic information during the login process about the user who is logging in and to save it for the user that is going to be created in _i-doit_. After choosing the applicable  directory the assignment can be carried out. However, the fields are filled by default and generally do not need any changes.

### Import of Custom LDAP Attributes

It is also possible to save custom attributes from the LDAP in the master data via the import of persons. At **Administration → CMDB Settings → Category extensions** further fields can be configured for this category. A field with the corresponding name is shown once the name has been set. The filling is carried out through the corresponding key.

Periodic Synchronization
------------------------

The required configuration for this has already been made in the previous steps. Now you only have to set up an appropriate [command line interface](../../automation-and-integration/cli/index.md)for the synchronization. Additional fields can also be configured for synchronization.

### Advanced Configuration

The configuration must be done in the [handler configuration](../../automation-and-integration/cli/index.md). An example can be found [here](../../automation-and-integration/cli/console/using-configuration-files-for-console-cli.md) (i-doit < 1.15. This file can be extended and customized with login data, tenant and attributes. The configuration file is then moved to `/src/handler/config/`.<br>
So that this file is considered e.g. with the ldap-sync Command, this must be indicated with the sync over a further parameter (-c /path/) also (further information to the [Console](../../automation-and-integration/cli/index.md)).

!!! warning "Access to .ini files"
    If the configuration file is placed in the i-doit directory, the .htaccess must be modified.
    This code should be added:

    ```shell
    ## Deny access to all ini files…
    <Files "*.ini">
        Require all denied
    </Files>
    ```

| Parameter | Purpose |
| --- | --- |
| **import_rooms** | When set to "true", also rooms are created with the synchronization.(Default: **false**) |
| **defaultCompany** | Through this the users added by the LDAP synchronization are assigned automatically to the configured organization. (Default: **empty**)<br><br>e.g .<br><br>defaultCompany='i-doit' |
| **deletedUsersBehaviour** | Can be set to **archive**, **delete** or **disable_login** to set users to the status [archived or deleted](../../basics/life-and-documentation-cycle.md) when they cannot be found anymore via the synchronization. A user that is archived or deleted cannot log in to _i-doit_ anymore!<br><br>Or you just deactivate the login for the users.<br><br>(Default: **archive**)<br><br>e.g.<br><br>deletedUsersBehaviour=archive |
| **disabledUsersBehaviour** | Can be set to **archive**, **delete** or **disable_login** to set users to the status [archived or deleted](../../basics/life-and-documentation-cycle.md) when they cannot be found anymore via the synchronization. A user that is archived or deleted cannot log in to _i-doit_ anymore!<br><br>Or you just deactivate the login for the users.<br><br>e.g.<br><br>disabledUsersBehaviour=archive |
| **rooms** | As seen in the example, an assignment of an user to a **room** can be predefined here. The assignment is carried out via the contact assignment without a role.<br><br>e.g. <br><br>rooms["Raum B"] = ["Person A", "Person C", "Person D"] |
| **attributes** | The respective fields from the directory are linked with attributes in _i-doit_ using the "Attributes". These complement the assigned attributes described in the above mentioned part of the guide.<br><br>e.g.<br><br>attributes[department]=department |
| **autoReactivateUsers** | This is only relevant for Novel Directory Services (NDS) and OpenLDAP. During synchronization all users are activated again with this and deactivated according to the common principle, if applicable.<br><br>e.g.<br><br>autoReactivateUsers=false |
| **ignoreUsersWithAttributes** | This function helps to prevent synchronization of unwanted directory objects.<br><br>The user will not be synchronized if the **ignoreFunction** fails for all selected attributes.<br><br>e.g.<br><br>ignoreUsersWithAttributes\[\]\="samaccountname" |
| **ignoreFunction** | This can be any function name which can be called through call\_user\_func or the defined functions.<br><br>Defined functions:<br><br>empty  <br>!empty  <br>isset  <br>!isset<br><br>e.g,<br><br>ignoreFunction\=empty |
| syncEmptyAttributes | If values were deleted/emptied from fields in AD, they are transferred to i-doit.<br><br>syncEmptyAttributes=true |

### Console

In order to use the console correctly, the [article](../../automation-and-integration/cli/index.md) should be familiar with it. A simple synchronization without the advanced configuration is provided by the option ldap-sync. A description of the parameters as well as a corresponding example can be found in the corresponding [chapter](../../automation-and-integration/cli/console/options-and-parameters-cli.md#ldap-sync).

### Automated Assignment of Persons to Person Groups

The automated assignment makes sure that the specified permissions of the person group are assigned automatically upon log in. The attribute **LDAP group (Mapping)** in the **master data** of a **person group** has to be filled with a valid group from your directory in order for the assignment to happen. The groups assigned to the user object in the directory are queried and compared to the attribute **LDAP group (Mapping)** of the _i-doit_ person groups once a user is logging in or the synchronization is initiated. If there is a match, the group is assigned and the other groups are queried.

[![Automated Assignment of Persons to Person Groups](../../assets/images/en/automation-and-integration/ldap/1-ldap.png)](../../assets/images/en/automation-and-integration/ldap/1-ldap.png)

!!! info "memberOf with OpenLDAP"

    The automatical assignment is based on LDAP querying in which groups there is a user. The memberOf attribute plays an important role in this connection. This attribute has to be available as an overlay. However, in many default installations of OpenLDAP this is not the case. Useful information about the required configurations can be found in [this](http://www.adimian.com/blog/2014/10/how-to-enable-memberof-using-openldap/) and [this article](https://technicalnotes.wordpress.com/2014/04/19/openldap-setup-with-memberof-overlay/).

Synchronize persons and groups of persons
-----------------------------------------

Since version 1.15 persons and groups of persons can be synchronized from LDAP/AD. Thereby the persons become members of the group assigned to them in Directory. As long as the group is also found with the configured filter.<br>
Prerequisite is that the user with whom the command is executed also has supervisor rights on the categories ("Group memberships" and "Person groups > Members") and supervisor rights on the object types ("Persons" and "Person groups").

[![Synchronize persons and groups of persons](../../assets/images/en/automation-and-integration/ldap/2-ldap.png)](../../assets/images/en/automation-and-integration/ldap/2-ldap.png)

Logging
-------

A logfile named ldap_debug.txt can be found within log/ in the i-doit installation folder. The logging can be activated or deactivated under **Administration → System Settings → Logging → LDAP Debug**.

Running the ldap-sync
---------------------

The ldap-sync can only be executed via the console of the server. To be able to use the console properly, you should know the [article](../../automation-and-integration/cli/console/index.md) about it. A simple synchronization without the advanced configuration serves the option ldap-sync. A description of the parameters can be found in the [corresponding chapter](../../automation-and-integration/cli/console/options-and-parameters-cli.md).

**Example**

    sudo -u www-data php console.php ldap-sync --user admin --password admin --tenantId 1 --verbose --ldapServerId 1
