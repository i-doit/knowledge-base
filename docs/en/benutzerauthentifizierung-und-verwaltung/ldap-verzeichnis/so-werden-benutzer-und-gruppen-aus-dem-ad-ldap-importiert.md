---
title: Advanced LDAP sync configuration
description: Guide for configuring an LDAPS connection with i-doit for Debian
icon: octicons/person-add-24
lang: en
---

!!! warning "Please create a complete backup before making any changes to an interface/import. If the result is not satisfactory, the backup can then be restored"

This article shows you how to import users and groups from Active Directory into i-doit in a targeted manner. The import is always performed via the [console.php](../../automatisierung-und-integration/cli/index.md) command `ldap-sync`. At the end of this article you will find a complete example of an extended configuration.

**Prerequisites:**

- You have already set up the basic [LDAP/AD configuration](../ldap-verzeichnis/index.md).
- You have basic knowledge in the area of AD/LDAP.

In the following examples, `objectClass = user` is used for persons and `objectClass = group` for groups. If you do not want to synchronize all users or groups of the domain, enter the DN/CN of an OU or container under **Search for users in (OU)**.

[![ldap_personen-suchen](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/1-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/1-ldap-bg.png)

## Configuring the filters

* * *

### Import of all users

With this filter you synchronize exclusively users -- groups are not created in this process:

[![ldap_personen-importb](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/2-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/2-ldap-bg.png)

```ini
(objectClass=user)
```

* * *

### Import of users with specific attributes

You can filter for a specific attribute. In the following example, only the user whose `sAMAccountName` has the value `MichaelO` is synchronized:

[![ldap_personen-importba](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/3-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/3-ldap-bg.png)

```ini
(&(objectClass=user)(sAMAccountName=MichaelO))
```

* * *

### Import of all users and all groups

This filter creates both users and groups and assigns the users to the respective groups:

[![ldap_personen-importbg](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/4-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/4-ldap-bg.png)

```ini
(|(objectClass=user)(objectClass=group))
```

* * *

### Import of users who are members of the group idoit-read

With this filter you synchronize only users who are members of the group `idoit-read`:

[![ldap_personen-importbmg](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/5-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/5-ldap-bg.png)

```ini
(&(objectClass=user)(memberOf=CN=idoit-read,CN=Users,DC=synetics,DC=test))
```

* * *

### Import of users who are members of both idoit-read and idoit-write

This filter synchronizes only users who are simultaneously members of the groups `idoit-read` and `idoit-write`:

[![ldap_personen-importbmgrw](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/6-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/6-ldap-bg.png)

```ini
(&(objectClass=user)(&(memberOf=CN=idoit-read,CN=Users,DC=synetics,DC=test)(memberOf=CN=idoit-write,CN=Users,DC=synetics,DC=test)))
```

* * *

### Import of users and groups that are below a nested group

Assume you have a group `idoit` in which the groups `idoit-read` and `idoit-write` are members. With this filter, the subordinate groups and their users are automatically created.

The parent group `idoit` itself is not created in this process. Note that groups in i-doit cannot have other groups as members.

[![ldap_personen-importbgng](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/7-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/7-ldap-bg.png)

```ini
(memberOf:1.2.840.113556.1.4.1941:=CN=idoit,CN=Users,DC=synetics,DC=test)
```

* * *

### How to filter users with more than one objectClass

If users are distinguished by having two `objectClass` attributes (e.g. `person` and `user`), build the filter as follows:

[![ldap_personen-filter](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/8-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/8-ldap-bg.png)

```ini
(&(objectClass=person)(objectClass=user))
```

* * *

## Which additional attributes can be imported via the ldap.ini

Make sure you are familiar with the [ldap.ini configuration](../../automatisierung-und-integration/cli/configuration-files.md) and have already configured the [attribute extensions](../../administration/verwaltung/import-und-schnittstellen/ldap/attributerweiterung.md). The following settings use the `[additional]` section of the .ini file.

### Configuring the attribute extensions

[![ldap_personen-config](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/9-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/9-ldap-bg.png)

The configuration as a table:

| Field name   | Attribute   | Mapping with   |
| ---------- | ---------- | ------------- |
| Field name 1 | objectSid  | Key: custom_1 |
| Field name 2 | objectGUID | Key: custom_2 |
| Field name 3 | -          | Key: custom_3 |
| Field name 4 | -          | Key: custom_4 |
| Field name 5 | -          | Key: custom_5 |
| Field name 6 | -          | Key: custom_6 |
| Field name 7 | -          | Key: custom_7 |
| Field name 8 | -          | Key: custom_8 |

* * *

### Statically assign users to rooms

In the `ldap.ini` you can enter fixed assignments of users to rooms. The users are then assigned to the respective room as a contact. The rooms must already exist in i-doit.

```ini
;Attach users to Rooms statically
rooms["Room"]=["Username1","Username2"]
```

* * *

### Assign users as contacts to rooms

It is possible to assign persons as contacts to rooms via the `import_rooms` function.
To do so, the option must be set to `true`.
Rooms are automatically created, however without a location.

```ini
;Import rooms from ldap
import_rooms=true
attributes[office]=physicalDeliveryOfficeName
```

* * *

### Setting the salutation

To automatically set the salutation during import, configure the option `attributes[salutation]=` in the .ini file. In the following example, the AD attribute `displayNamePrintable` is used. You can also use other attributes, as long as they are present in the AD.

The value of the attribute `displaynamePrintable` could be e.g. "Herr", "Mr", "Mr." or "Frau", "Mrs.", "Mrs", "Ms.", "Ms", "Miss". These values can be configured in the [Administration](../../administration/verwaltung/mandanten-name-verwaltung/einstellungen-mandanten-name.md#ldap) under [tenant-name] Administration > Settings for [tenant-name] > LDAP.

``` ini
attributes[salutation]=displayNamePrintable
```

This setting has been included in the example of the complete .ini file at the end of this article.

* * *

### How to import attributes from LDAP

If you have already configured the [attribute extensions](../../administration/verwaltung/import-und-schnittstellen/ldap/attributerweiterung.md), you must next adjust the configuration file of the LDAP sync (`ldap.ini`).

The available attributes can be found in your AD configuration. An overview of which attributes belong to which field can be found e.g. at [SelfADSI](http://www.selfadsi.de/user-attributes.htm).

The following example shows a typical attribute mapping:

```ini
;defaultfelder die bereits in den Stammdaten von Personen present sind
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

;Attributerweiterung nur für Personen
attributes[custom_1]=objectSid
attributes[custom_2]=objectGUID
;attributes[custom_3]=
;attributes[custom_4]=
;attributes[custom_5]=
;attributes[custom_6]=
;attributes[custom_7]=
;attributes[custom_8]=
```

In this example, the master data attribute `department` is mapped to the LDAP attribute of the same name. Additionally, the attribute extension is used. The structure for e.g.

```ini
attributes[custom_1]=objectSid
```

works as follows:

`attributes` instructs the handler to synchronize the i-doit attribute `[custom_1]` with the LDAP attribute `objectSid`. After synchronization you will find the following master data:

[![ldap_personen-sync](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/10-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/10-ldap-bg.png)

* * *

### Additional options

#### autoReactivateUsers

This setting automatically sets all users to "normal" status before synchronization. This is helpful if users have been accidentally archived or deleted.

!!! info
    Be aware that with NDS or OpenLDAP it is currently not possible to identify deleted users in order to archive them later. Users are then always enabled!

```ini
autoReactivateUsers=false
```

* * *

#### ignoreUsersWithAttributes

With this option you prevent the synchronization of unwanted directory objects. A user is not synchronized when `ignoreFunction` fails for ALL selected attributes.

By default `ignoreUsersWithAttributes=[]` is set, so nothing is ignored.

In the following example, only users are imported whose attributes `samaccountname`, `sn`, `givenname`, and `mail` are not empty:

```ini
ignoreUsersWithAttributes[] = "samaccountname"
ignoreUsersWithAttributes[] = "sn"
ignoreUsersWithAttributes[] = "givenname"
ignoreUsersWithAttributes[] = "mail"
```

* * *

#### ignoreFunction

The check function for ignoring users (see `ignoreUsersWithAttributes`). This can be any function name callable via `call_user_func` or the following defined functions:

```ini
empty
!empty
isset
!isset
```

Example: `empty` would be executed as empty($value)

To check for empty attributes:

```ini
ignoreFunction=empty
```

#### Synchronize empty attributes

This option decides whether emptied attributes from AD should be synchronized with i-doit or not.

```ini
syncEmptyAttributes=true
```

* * *

### The complete ldap.ini

Here you will find a complete, customizable .ini file. The first part is based on the [configuration file for console commands](../../automatisierung-und-integration/cli/configuration-files.md).

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
attributes[salutation]=displayNamePrintable

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
ignoreUsersWithAttributes[]="sn"

;The check function used for ignoring users (see 'ignoreUsersWithAttributes') empty - !empty - isset - !isset
ignoreFunction=empty

;This option decides whether empty or emptied attributes from AD should be synchronized with i-doit or not.
syncEmptyAttributes=true
```

For the .ini file to be used, it must be specified with the `-c` parameter.

```shell
sudo -u www-data php console.php ldap-sync -c /var/www/html/src/handler/config/ldap-sync.ini
```

[ldap.ini :material-file-download:](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/example-ldap.ini){ .md-button .md-button--primary }
