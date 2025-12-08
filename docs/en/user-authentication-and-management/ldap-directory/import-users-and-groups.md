# How To import users and groups from AD/LDAP (advanced configuration)

Importing users and groups from Active Directory into i-doit always takes place via the [i-doit console utility](../../automation-and-integration/cli/index.md) command. For this we use the [ldap-sync](./index.md) command.<br>
At the end of the article there is a complete example of the created advanced configuration.

The article about configuration of [LDAP directory/Active Directory](../index.md) should be known to everyone before.<br>
Here we will go through different LDAP filters and a complete [ldap.ini configuration](../../automation-and-integration/cli/configuration-files.md).<br>
The goal is to synchronize all users and groups from AD/LDAP with i-doit, as well as their memberships.

I assume a basic knowledge of AD/LDAP.<br>
In these examples for persons the objectClass = user is used.<br>
For groups the `objectClass = group` is used.<br>
If you do not want to synchronize all users or groups of the domain, you have to enter the DN/CN of an OU or container under `Search for users in (OU) *`.

[![Access](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/1-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/1-htiuag.png)

## Filter configuration

* * *

### Import from all users

Here only users are synchronized, which also means that no groups are created. So that only users are synchronized the filter must look like this:

[![Import users](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/2-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/2-htiuag.png)

```ini
(objectClass=user)
```

* * *

### Import of users with specific attributes

We want to filter on an attribute and synchronize only this user.<br>
Only the user who has the value MichaelO in the attribute sAMAccountName should be synchronized.

[![Import users with specific attributes](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/3-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/3-htiuag.png)

```ini
(&(objectClass=user)(sAMAccountName=MichaelO))
```

* * *

### Import from all users and all groups

Here users and groups are created and the users are assigned to the respective groups.<br>
So that users and groups are synchronized the filter must look like this:

[![Import of users and groups](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/4-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/4-htiuag.png)

```ini
(|(objectClass=user)(objectClass=group))
```

* * *

### Import of users who are members of the idoit-read group

To synchronize only users who are members of the idoit-read group, the filter must look like this:

[![Import of users who are members of the idoit group](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/5-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/5-htiuag.png)

```ini
(&(objectClass=user)(memberOf=CN=idoit-read,CN=Users,DC=synetics,DC=test))
```

* * *

### Import of users who are members of the group idoit-read and idoit-write

To synchronize only users who are members of the idoit-read group, the filter must look like this:

[![Import von Benutzer die Mitglied der Gruppe idoit-read and idoit-write sind](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/6-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/6-htiuag.png)

```ini
(&(objectClass=user)(&(memberOf=CN=idoit-read,CN=Users,DC=synetics,DC=test)(memberOf=CN=idoit-write,CN=Users,DC=synetics,DC=test)))
```

* * *

### Import of users and groups that are below a nested group

I have a group idoit in which the i-doit groups idoit-read and idoit-write are members. I want to synchronize these two groups. With this filter I can directly create the groups and the users.<br>
This will not create the idoit group, it will only create the groups below it. Also, the groups will not be linked, because groups cannot have a group as a member.

[![Import of users who are members below the group idoit](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/7-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/7-htiuag.png)

```ini
(memberOf:1.2.840.113556.1.4.1941:=CN=idoit,CN=Users,DC=synetics,DC=test)
```

* * *

### How to filter users with more than one objectClass

For example, if the users differ by having two objectClass attributes (e.g. person and user), I would build the filter this way:

[![People and users](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/8-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/8-htiuag.png)

```ini
(&(objectClass=person)(objectClass=user))
```

* * *

## Which other attributes can be imported via ldap.ini

-   The post [ldap.ini Configuration](../../automation-and-integration/cli/index.md#ldap-sync) should be known.
-   An .ini file can be created for the import, with this additional attributes can be imported.
-   The [Category Extension](../../system-administration/administration/import-and-interfaces/ldap/attribute-extension.md) should already be configured.
-   We use the .ini section

### The configuration of the category extension

[![ldap.ini configuration](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/9-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/9-htiuag.png)

Here again as a table

| Field title   | Attribut   | Mapping with  |
| ------------- | ---------- | ------------- |
| Field title 1 | objectSid  | Key: custom_1 |
| Field title 2 | objectGUID | Key: custom_2 |
| Field title 3 | -          | Key: custom_3 |
| Field title 4 | -          | Key: custom_4 |
| Field title 5 | -          | Key: custom_5 |
| Field title 6 | -          | Key: custom_6 |
| Field title 7 | -          | Key: custom_7 |
| Field title 8 | -          | Key: custom_8 |

* * *

### Attach users to Rooms statically

Fixed assignments of users to rooms can be entered in the ldap.ini.<br>
The users are then assigned to the assigned room as a contact.<br>
(The rooms must exist in i-doit before!).

```ini
;Attach users to Rooms statically
rooms["Room"]=["Username1","Username2"]
```

* * *

### Assign user as contact to rooms

It is possible to assign persons as contact to rooms via the `import_rooms` function.
Therefore you need to set the option to `true`.
Rooms are created automatically, but without a location.

```ini
;Import rooms from ldap
import_rooms=true
attributes[office]=physicalDeliveryOfficeName
```

!!! note "Bug"
    Actually you will need to write this AD Attribute in lowercase `physicaldeliveryofficename`

* * *

### How to import attributes from LDAP

I want to import more LDAP attributes to users and I have already configured the [category extension](../../system-administration/administration/import-and-interfaces/ldap/attribute-extension.md).<br>
Now I have to configure the LDAP sync configuration file (ldap.ini).

Available attributes can be found in your AD configuration.
From this I can search for the attributes that I want to synchronize additionally.<br>
Which attributes belong to which field can be found via Google.

As an example I take the following attributes and add them to ldap.ini:

```ini
;LDAP Attributes are individual. This default configuration is prepared for Active Directory:
attributes[department]=department
attributes[phone_company]=telephonenumber
attributes[phone_home]=homephone
attributes[phone_mobile]=mobile
attributes[fax]=facsimileTelephoneNumber
attributes[description]=info
attributes[personnel_number]=employeeid
attributes[organization]=company
attributes[street]=streetAddress
attributes[city]=l
attributes[zip_code]=postalCode
attributes[function]=title
attributes[service_designation]=title
attributes[pager]=pager

;Category extension for persons. Only has a effect when activated
attributes[custom_1]=objectSid
attributes[custom_2]=objectGUID
;attributes[custom_3]=
;attributes[custom_4]=
;attributes[custom_5]=
;attributes[custom_6]=
;attributes[custom_7]=
;attributes[custom_8]=
```

As you can see here I mapped the master data attribute department with the LDAP attribute department.<br>
Additionally I used the category extension.<br>
The structure for e.g.<br>

```ini
attributes[custom_1]=objectSid
```

would be as follows, attributes tells the handler to synchronize the i-doit attribute [custom_1] with the LDAP attribute `objectSid`.

After synchronizing the users I find the following master data:

[![Master data after sync](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/10-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/10-htiuag.png)

* * *

### More options

#### autoReactivateUsers

This option will set all synchronized persons to `Status = Normal`.
It will overwrite any other settings like, `deletedUsersBehaviour` or `disabledUsersBehaviour`.

This is helpful in case users were accidentally archived or deleted before.

!!! info
    We should be aware that with NDS or OpenLDAP it is currently not possible to identify deleted users to archive them later. Users are then always activated! Manually performed changes will be overwritten.

```ini
autoReactivateUsers=false
```

* * *

#### ignoreUsersWithAttributes

Disable synchronization for users with attributes checked against ignoreFunction.

This function helps to prevent synchronization of unwanted directory objects.<br>
The user will not be synchronized if ignoreFunction fails for ALL selected attributes.

By default it says `ignoreUsersWithAttributes=[]` so nothing will be ignored.

We only want to import users where the attributes `samaccountname`, `sn`, `givenname` and mail are not empty.<br>
So the configuration for `ignoreUsersWithAttributes` should look like this:

```ini
ignoreUsersWithAttributes[] = "samaccountname"
ignoreUsersWithAttributes[] = "sn"
ignoreUsersWithAttributes[] = "givenname"
ignoreUsersWithAttributes[] = "mail"
```

* * *

#### ignoreFunction

Is the check function to ignore users (see `ignoreUsersWithAttributes`)

This can be any function name callable via `call_user_func` or the defined functions.

```ini
definierte functions:
empty
!empty
isset
!isset
```

Example: empty would be executed as empty($value)

We check for empty attributes with

```ini
ignoreFunction=empty
```

#### Synchronize empty attributes

This option decides whether empty or emptied attributes from AD should be synchronized with i-doit or not.

```ini
syncEmptyAttributes=true
```

* * *

### The complete ldap.ini

Here is a finished ini. file which can of course be edited.
The first part of the ldap.ini is obtained from [Using Configuration Files for Console Commands](../../automation-and-integration/cli/configuration-files.md).

```ini
[commandArguments]
[commandOptions]
user=admin
password=admin
tenantId=1
[additional]
;Import rooms from ldap
import_rooms=false
attributes[office]=physicalDeliveryOfficeName

;Automatically assign this company to every ldap user
defaultCompany=''

;What to do with deleted users - archive, delete, purge
deletedUsersBehaviour=archive

;What to do with disabled users - archive, delete, disable_login
disabledUsersBehaviour=disable_login

;Attach users to Rooms statically
;rooms["Room"]=["Username1","Username2"]

;LDAP Attributes are individual. This default configuration is prepared for Active Directory:
attributes[department]=department
attributes[phone_company]=telephonenumber
attributes[phone_home]=homephone
attributes[phone_mobile]=mobile
attributes[fax]=facsimileTelephoneNumber
attributes[description]=info
attributes[personnel_number]=employeeid
attributes[organization]=company
attributes[street]=streetAddress
attributes[city]=l
attributes[zip_code]=postalCode
attributes[function]=title
attributes[service_designation]=title
attributes[pager]=pager

;Category extension for persons. Only has a effect when activated
attributes[custom_1]=objectSid
attributes[custom_2]=objectGUID
;attributes[custom_3]=
;attributes[custom_4]=
;attributes[custom_5]=
;attributes[custom_6]=
;attributes[custom_7]=
;attributes[custom_8]=

;Automatically sets all users to status normal NDS and OpenLDAP
autoReactivateUsers=false

;Disable sync for users with Attributes checked against 'ignoreFunction'
ignoreUsersWithAttributes=[]

;The check function used for ignoring users (see 'ignoreUsersWithAttributes') empty - !empty - isset - !isset
ignoreFunction=empty

;This option decides whether empty or emptied attributes from AD should be synchronized with i-doit or not.
syncEmptyAttributes=true
```

On the console the command would look like this:

```shell
sudo -u www-data php console.php ldap-sync -c /var/www/html/src/handler/config/ldap-sync.ini
```

[example-ldap.ini :material-file-download:](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/example-ldap.ini){ .md-button .md-button--primary }
