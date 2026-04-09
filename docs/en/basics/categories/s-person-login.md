---
title: "Category: Login"
description: Documentation of the Login for Person objects category in i-doit
icon:
status:
lang: en
---

# Category: Login

The **Login** category manages the credentials of a person for access to the i-doit interface and the API. It is a **single-value category** -- exactly one login record exists per person.

!!! warning "Security-relevant category"
    The Login category controls whether and how a person can log in to i-doit. A disabled login completely locks the user out -- from both the web interface and the API. Changes to this category should be made carefully and in coordination with the i-doit administrator. Passwords are stored as hashes in i-doit and cannot be read back in plain text after being set.

## Usage

Typical use cases:

- **Creating local users**: For persons who do not authenticate through LDAP/AD, the username and password are maintained directly in this category. The username must be unique within the i-doit installation.
- **LDAP synchronization**: When connected to Active Directory or OpenLDAP, the username is automatically imported from the directory service. The password is not stored locally in this case; instead, it is verified against the directory service at every login. The LDAP configuration is done in the i-doit administration under **LDAP > Directories**.
- **User lockout**: Through the **Login disabled** field, a person's access can be temporarily or permanently locked without archiving the person object. Useful during parental leave, sabbaticals, or security incidents.
- **Password reset**: The stored e-mail address for password reset allows users to reset their password independently, provided this function is enabled in i-doit.
- **Audit and traceability**: The **Last login** field shows when the person last logged in to i-doit. Helpful for license evaluations and identifying inactive users.

[![Login](../../assets/images/de/grundlagen/kategorien/s-person-login.png)](../../assets/images/de/grundlagen/kategorien/s-person-login.png)

## Fields

### Login disabled

Controls whether the person can log in to i-doit. When set to `Yes`, the login is completely locked -- neither web interface nor API access is possible. The default value is `No` (login active).

### Username

The login name for i-doit. Must be unique within the installation. During LDAP synchronization, this value is automatically imported from the directory service (typically `sAMAccountName` or `uid`). The username is accessed via the API key `title`.

!!! note "API key is `title`, not `username`"
    In the API, the field for the username is called `title` -- not `username` or `login`. This is a common pitfall during API integration.

### Password

The password for local authentication. It is hashed upon saving and cannot be read back in plain text afterward. For LDAP-authenticated users, this field is irrelevant -- authentication occurs directly against the directory service.

### E-mail address for password reset

The e-mail address to which a password reset link is sent. May differ from the primary e-mail address in the [Master Data](s-person-master.md) -- for example, when the reset link should go to a personal address.

### Last login

The date and time of the last successful login. This field is automatically updated by i-doit and is read-only. Useful for evaluations of user activity and license optimization.

### Description

Free text for additional details: notes on the authentication method, lockout reasons, deputy arrangements, or other administrative notes.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__PERSON_LOGIN` |
| **Type** | Specific category |
| **Multi-Value** | No |
| **Assigned to** | Person |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Login disabled** | `disabled_login` | Dialog (selection) |
| **Username** | `title` | Text |
| **Password** | `user_pass` | Text |
| **E-mail address for password reset** | `email_address` | Text |
| **Last login** | `last_login` | Date/Time (read-only) |
| **Description** | `description` | Text field (multi-line) |

### API Examples

#### Create Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 1234,
        "category": "C__CATS__PERSON_LOGIN",
        "data": {
            "title": "mmustermann",
            "user_pass": "ein-sicheres-passwort",
            "disabled_login": 0,
            "email_address": "m.mustermann@example.com",
            "description": "Lokaler user, kein LDAP"
        }
    },
    "id": 1
}
```

#### Read Entries

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "your-api-key",
        "objID": 1234,
        "category": "C__CATS__PERSON_LOGIN"
    },
    "id": 2
}
```

#### Update Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 1234,
        "category": "C__CATS__PERSON_LOGIN",
        "entry": 1,
        "data": {
            "disabled_login": 1,
            "description": "Login gesperrt 2026-04-05: Mitarbeiter ausgeschieden."
        }
    },
    "id": 3
}
```
