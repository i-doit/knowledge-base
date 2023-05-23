# How To import users and groups from AD/LDAP (advanced configuration)

Importing users and groups from Active Directory into i-doit always takes place via the [console.php](../../automation-and-integration/cli/console/index.md) command. For this we use the [ldap-sync](./index.md) command.<br>
At the end of the article there is a complete example of the created advanced configuration.

The article about configuration of [LDAP directory/Active Directory](../index.md) should be known to everyone before.<br>
Here we will go through different LDAP filters and a complete [ldap.ini configuration](../../automation-and-integration/cli/console/using-configuration-files-for-console-cli.md).<br>
The goal is to synchronize all users and groups from AD/LDAP with i-doit, as well as their memberships.

I assume a basic knowledge of AD/LDAP.<br>
In these examples for persons the objectClass = user is used.<br>
For groups the objectClass = group is used.<br>
If you do not want to synchronize all users or groups of the domain, you have to enter the DN/CN of an OU or container under “Search for users in (OU)\*”.

[![Access](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/1-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/1-htiuag.png)

Filter configuration
--------------------

* * *

### Import from all users

Here only users are synchronized, which also means that no groups are created. So that only users are synchronized the filter must look like this:


[![Import users](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/2-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/2-htiuag.png)

    (objectClass=user)

* * *

### Import of users with specific attributes

We want to filter on an attribute and synchronize only this user.<br>
Only the user who has the value MichaelO in the attribute sAMAccountName should be synchronized.

[![Import users with specific attributes](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/3-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/3-htiuag.png)

    (&(objectClass=user)(sAMAccountName=MichaelO))

* * *

### Import from all users and all groups

Here users and groups are created and the users are assigned to the respective groups.<br>
So that users and groups are synchronized the filter must look like this:

[![Import of users and groups](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/4-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/4-htiuag.png)

    (|(objectClass=user)(objectClass=group))

* * *

### Import of users who are members of the idoit-read group

To synchronize only users who are members of the idoit-read group, the filter must look like this:

[![Import of users who are members of the idoit group](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/5-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/5-htiuag.png)

    (&(objectClass=user)(memberOf=CN=idoit-read,CN=Users,DC=synetics,DC=test))

* * *

### Import of users who are members of the group idoit-read and idoit-write

To synchronize only users who are members of the idoit-read group, the filter must look like this:

[![Import von Benutzer die Mitglied der Gruppe idoit-read and idoit-write sind](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/6-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/6-htiuag.png)

    (&(objectClass=user)(&(memberOf=CN=idoit-read,CN=Users,DC=synetics,DC=test)(memberOf=CN=idoit-write,CN=Users,DC=synetics,DC=test)))

* * *

### Import of users and groups that are below a nested group

I have a group idoit in which the i-doit groups idoit-read and idoit-write are members. I want to synchronize these two groups. With this filter I can directly create the groups and the users.<br>
This will not create the idoit group, it will only create the groups below it. Also, the groups will not be linked, because groups cannot have a group as a member.

[![Import of users who are members below the group idoit](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/7-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/7-htiuag.png)

    (memberOf:1.2.840.113556.1.4.1941:=CN=idoit,CN=Users,DC=synetics,DC=test)

* * *

### How to filter users with more than one objectClass

For example, if the users differ by having two objectClass attributes (e.g. person and user), I would build the filter this way:

[![People and users](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/8-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/8-htiuag.png)

    (&(objectClass=person)(objectClass=user))

* * *

Which other attributes can be imported via ldap.ini
---------------------------------------------------

*   The post [ldap.ini Configuration](../../automation-and-integration/cli/console/options-and-parameters-cli.md#ldap-sync) should be known.
*   An .ini file can be created for the import, with this additional attributes can be imported.
*   The [Category Extension](../../system-administration/administration/cmdb-settings.md#category-extension) should already be configured.
*   We use the .ini section

### The configuration of the category extension

[![ldap.ini configuration](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/9-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/9-htiuag.png)

Here again as a table

| Field title | Attribut | Mapping with |
| --- | --- | --- |
| Field title 1 | objectGUID | Key: custom\_1 |
| Field title 2 | objectSid | Key: custom\_2 |
| Field title 3 | initials | Key: custom\_3 |
| Field title 4 | telephonenumber | Key: custom\_4 |
| Field title 5 | title | Key: custom\_5 |
| Field title 6 | pager | Key: custom\_6 |
| Field title 7 | manager | Key: custom\_7 |
| Field title 8 | info | Key: custom\_8 |

* * *

### Import assignments to rooms from AD/LDAP

Fixed assignments of users to rooms can be entered in the ldap.ini.<br>
The users are then assigned to the assigned room as a contact.<br>
(The rooms must exist in i-doit before!).

    rooms["Room A"]=["MichaelO","migel"]

* * *

### How to import attributes from LDAP

I want to import more LDAP attributes to users and I have already configured the [category extension](../../system-administration/administration/cmdb-settings.md#category-extension).<br>
Now I have to configure the LDAP sync configuration file (ldap.ini).

If you have done an LDAP sync for users before, you will find an entry like this in the ldap log

    Available attributes for this user:
    objectclass,
    cn,
    sn,
    c,
    l,
    st,
    title,
    description,
    postalcode,
    postofficebox,
    physicaldeliveryofficename,
    telephonenumber,
    facsimiletelephonenumber,
    givenname,
    initials,
    distinguishedname,
    instancetype,
    whencreated,
    whenchanged,
    displayname,
    usncreated,
    info,
    memberof,
    usnchanged,
    co,
    department,
    company,
    streetaddress,
    directreports,
    wwwhomepage,
    name,
    objectguid,
    useraccountcontrol,
    badpwdcount,
    codepage,
    countrycode,
    badpasswordtime,
    lastlogoff,
    lastlogon,
    pwdlastset,
    primarygroupid,
    userparameters,
    objectsid,
    admincount,
    accountexpires,
    logoncount,
    samaccountname,
    samaccounttype,
    userprincipalname,
    lockouttime,
    ipphone,
    objectcategory,
    dscorepropagationdata,
    lastlogontimestamp,
    mail,
    homephone,
    mobile,
    pager,
    dn

From this I can search for the attributes that I want to synchronize additionally.<br>
Which attributes belong to which field can be found via Google.

As an example I take the following attributes and add them to ldap.ini:

    ;LDAP Attributes are individual. This default configuration is prepared for Active Directory:
    attributes[department]=department
    attributes[phone_company]=telephonenumber
    attributes[phone_home]=homephone
    attributes[phone_mobile]=mobile
    attributes[fax]=facsimileTelephoneNumber
    attributes[description]=info
    attributes[personnel_number]=initials
    attributes[organization]=company
    attributes[location]=physicalDeliveryOfficeName
    attributes[street]=streetAddress
    attributes[city]=l
    attributes[zip_code]=postalCode
    attributes[function]=title
    attributes[service_designation]=title
    attributes[pager]=pager
    ;Category extension for persons
    attributes[custom_1]=objectSid
    attributes[custom_2]=sn
    attributes[custom_3]=homePhone
    attributes[custom_4]=mobile
    attributes[custom_5]=info
    attributes[custom_6]=manager
    attributes[custom_7]=company
    attributes[custom_8]=objectGUID

As you can see here I mapped the master data attribute department with the LDAP attribute department.<br>
Additionally I used the category extension.<br>
The structure for e.g.<br>

    attributes[custom_1]=objectSid

would be as follows, attributes tells the handler to synchronize the i-doit attribute [custom_1] with the LDAP attribute `objectSid`.

After synchronizing the users I find the following master data:

[![Master data after sync](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/10-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/10-htiuag.png)

* * *

### More options

#### autoReactivateUsers

To have a clean start, this setting automatically sets all users to the status normal before synchronization.

This is helpful in case users were accidentally archived or deleted before.<br>
Note that this only works with NDS & OpenLDAP, as it is always enabled in Active Directory!

We should be aware that with NDS or OpenLDAP it is currently not possible to identify deleted users to archive them later. Users are then always activated!

    autoReactivateUsers=false

* * *

#### ignoreUsersWithAttributes

Disable synchronization for users with attributes checked against ignoreFunction.

This function helps to prevent synchronization of unwanted directory objects.<br>
The user will not be synchronized if ignoreFunction fails for ALL selected attributes.

By default it says ignoreUsersWithAttributes=[] so nothing will be ignored.

We only want to import users where the attributes samaccountname, sn, givenname and mail are not empty.<br>
So the configuration for ignoreUsersWithAttributes should look like this:

    ignoreUsersWithAttributes[] = "samaccountname"
    ignoreUsersWithAttributes[] = "sn"
    ignoreUsersWithAttributes[] = "givenname"
    ignoreUsersWithAttributes[] = "mail"

* * *

#### ignoreFunction

Is the check function to ignore users (see ’ignoreUsersWithAttributes’)

This can be any function name callable via call_user_func or the defined functions.

    definierte functions:
    empty
    !empty
    isset
    !isset

Example: empty would be executed as empty($value)

We check for empty attributes with

    ignoreFunction=empty

#### Synchronize empty attributes

This option decides whether empty or emptied attributes from AD should be synchronized with i-doit or not.

    syncEmptyAttributes=true

* * *

### The complete ldap.ini

Now we put all the parts together and create our ldap.ini<br>
The first part of the ldap.ini is obtained from [Using Configuration Files for Console Commands](../../automation-and-integration/cli/console/using-configuration-files-for-console-cli.md).

!!! warning "Access to .ini files"
    If the configuration file is placed in the i-doit directory, the .htaccess must be modified.
    This code should be added:

    ```shell
    ## Deny access to all ini files…
    <Files "*.ini">
        Require all denied
    </Files>
    ```

    [commandArguments]
    [commandOptions]
    user=admin
    password=pass
    tenantId=1
    [additional]mobile
    ;Import rooms from ldap
    import_rooms=true
    ;Automatically assign this company to every ldap user
    defaultCompany='i-doit'
    ;What to do with deleted users - archive, delete, purge
    deletedUsersBehaviour=archive
    ;What to do with disabled users - archive, delete, disable_login
    disabledUsersBehaviour=disable_login
    ;Attach users to Rooms statically
    rooms["Room A"]=["MichaelO","migel"]
    ;LDAP Attributes are individual. This default configuration is prepared for Active Directory:
    attributes[department]=department
    attributes[phone_company]=telephonenumber
    attributes[phone_home]=homephone
    attributes[phone_mobile]=mobile
    attributes[fax]=facsimileTelephoneNumber
    attributes[description]=info
    attributes[personnel_number]=initials
    attributes[organization]=company
    attributes[location]=physicalDeliveryOfficeName
    attributes[street]=streetAddress
    attributes[city]=l
    attributes[zip_code]=postalCode
    attributes[function]=title
    attributes[service_designation]=title
    attributes[pager]=pager
    ;Category extension for persons
    attributes[custom_1]=objectSid
    attributes[custom_2]=sn
    attributes[custom_3]=homePhone
    attributes[custom_4]=mobile
    attributes[custom_5]=info
    attributes[custom_6]=manager
    attributes[custom_7]=company
    attributes[custom_8]=objectGUID
    ;Automatically sets all users to status normal NDS and OpenLDAP
    autoReactivateUsers=false
    ;Disable sync for users with Attributes checked against 'ignoreFunction'
    ignoreUsersWithAttributes=[]
    ;The check function used for ignoring users (see 'ignoreUsersWithAttributes') empty - !empty - isset - !isset
    ignoreFunction=empty
    syncEmptyAttributes=true

On the console the command would look like this:

    sudo -u www-data php console.php ldap-sync -c /var/www/html/i-doit/src/handler/config/ldap-sync.ini

[example-ldap.ini :material-file-download:](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/example-ldap.ini){ .md-button .md-button--primary }
