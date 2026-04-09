---
title: Creating a Local User
description: "With a local user, you can log in directly to i-doit without depending on an external directory service."
icon:
status:
lang: en
---
# Creating a Local User

!!! warning "Please create a complete backup before making any changes to an interface/import. If the result is not satisfactory, the backup can then be restored"

With a local user, you can log in directly to i-doit without depending on an external directory service. i-doit already comes with several local users in the standard installation that you can use for the [initial login](../../basics/initial-login.md). This article shows you step by step how to create an additional local user.

!!! check "LDAP/AD"
    Most of the options presented here are not limited to local users. You can also use them in combination with the [LDAP/AD interface](../ldap-directory/index.md).

!!! check "Emergency"
    Local users work even when external authentication systems such as LDAP/AD or [SSO](../sso-comparison/index.md) are unavailable. This way, you always have access to the IT documentation in case of an outage.

## Create a New Object (Person)

In i-doit, users are part of the IT documentation. Each user is an [object](../../basics/it-documentation-structure.md) of type **Persons**. First, create a new **Person** object:

1. Navigate to the **Persons** object type.
2. Click **New** to create a new person object.

[![Create person object](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/1-lba.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/1-lba.png)

## Fill in Basic Data

In the **Persons → Master Data** category, enter the relevant data such as first name, last name, email address, and organization. At least first name and last name are required.

[![Master data](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/2-lba.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/2-lba.png)

## Configure Login

In the **Persons → Login** category, set the credentials:

1. **Username**: The name the user will use for login.
2. **Password**: A secure password. The user can change this later.

[![Login data](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/3-lba.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/3-lba.png)

## Assign to Person Groups (Optional)

To grant the user specific permissions, assign the person to one or more **Person Groups** via the **Person Group Memberships** category. Permissions are typically managed at the group level.

[![Person group assignment](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/4-lba.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/4-lba.png)

## Test Login

Open i-doit in a new browser or incognito window and test the login with the new credentials. If the login is successful, the user has been correctly set up.

## See also

- [Initial Login](../../basics/initial-login.md) — Default credentials and first steps
- [Permission Management](../../efficient-documentation/permission-management/index.md) — Configuring user permissions
- [LDAP Directory](../ldap-directory/index.md) — Connecting to a central directory service
