---
title: SSO via Active Directory with GSSAPI
description: "For automatic login to i-doit within an intranet, Single Sign-On (SSO) is ideal."
icon:
status:
lang: en
---
# SSO via Active Directory with GSSAPI

!!! warning "Please create a complete backup before making any changes to an interface/import. If the result is not satisfactory, the backup can then be restored"

For automatic login to i-doit within an intranet, Single Sign-On (SSO) is ideal. This article shows you how to set up SSO with the Apache module `mod-auth-gssapi`.

## Prerequisites

*   i-doit is [installed](../../../installation/index.md) on GNU/Linux.
*   An Active Directory (AD) on Windows Server 2008/2012 is used for authentication.

!!! warning "Case sensitivity"

    Pay close attention to upper and lower case during configuration.

## Configure Active Directory (AD)

Create a user in AD for the SSO access. Example:

*   Server name of i-doit: **idoit.mydomain.local**
*   AD domain: **addomain.local**
*   SSO user: **ssouser**
*   Password: **password**

## Configuration of the i-doit Server

Install all required packages.

**Debian GNU/Linux:**

```shell
sudo apt install msktutil libapache2-mod-auth-gssapi krb5-user
```

**Ubuntu Linux:**

```shell
sudo apt install msktutil libapache2-mod-auth-gssapi krb5-user
```

Provide the following values during installation:

*   Domain/REALM: `addomain.local`
*   Hostname/password server: `mydomaincontroller`

Restart Apache:

```shell
sudo systemctl restart apache2.service
```

## Initial Login and Create Keytab

Authenticate the server:

```shell
kinit <AD Administrator Account>
```

Create the keytab:

```shell
msktutil --server <AD Domain-Controller> --user-creds-only --update --use-service-account --service HTTP/idoit.mydomain.local --keytab /etc/apache2/apache_krb5.keytab --password <SERVICE ACCOUNT PASSWORD> --account-name ssouser
```

Set the permissions for Apache:

```shell
chmod 644 /etc/apache2/apache_krb5.keytab
```

## Configure the Apache Web Server

Adjust the VHost configuration:

```shell
sudo nano /etc/apache2/sites-available/i-doit.conf

<Directory /var/www/html/>

        AuthType GSSAPI
        AuthName "i-doit Kerberos auth"
        GssapiBasicAuth On
        GssapiCredStore keytab:/etc/apache2/apache_krb5.keytab
        GssapiLocalName On

        Require valid-user

</Directory>
```

Only adjust the part within `<Directory>` ... `</Directory>`.

Restart Apache for the changes to take effect:

```shell
sudo systemctl restart apache2.service
```

Test the configuration with the following command:

```shell
kinit ssouser@ADDOMAIN.LOCAL
```

You will be prompted for the password of the SSO user. Check with `klist` whether a valid ticket exists:

```shell
klist
```

## Configure i-doit

You can find the SSO setting in the Admin Center under **System settings > Single Sign on**. Enable **SSO** there.

## Configure Browsers on the Client Side

For SSO to be used automatically, each browser must be configured accordingly.

### Microsoft Internet Explorer (IE)

Add the i-doit server to the local intranet sites in the IE settings. Under **Custom Level > User Authentication**, enable the option **Automatic logon with current username and password**. Also ensure that the checkbox **Integrated Windows Authentication** is set under **Advanced > Internet Options**.

### Mozilla Firefox and Google Chrome

SSO is also possible for these browsers. Details on configuration can be found abundantly on the internet; for Firefox, for example, [here](https://superuser.com/questions/664656/how-to-configure-firefox-for-ntlm-sso-single-sign-on).

## Troubleshooting

If authentication problems occur, check the following points:

*   Are the time settings on Linux and Windows DC synchronized? Are they identical?
*   The server is in most cases only reachable via the full FQDN idoit.mydomain.local
*   Does the i-doit server have access to the Domain Controller? Is there a firewall in between?
*   Is the SSO domain user unlocked?
*   Can the DC be resolved via DNS from the i-doit server?
*   Does the web server have read permission on the file apache\_krb5.keytab?
