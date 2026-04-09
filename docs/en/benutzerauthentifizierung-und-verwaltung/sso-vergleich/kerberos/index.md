---
title: Single Sign On (SSO)
description: "For automatic login to i-doit within an intranet, Single Sign-On (SSO) is the recommended approach."
icon:
status:
lang: en
---
# Single Sign On (SSO)

!!! warning "Please create a complete backup before making any changes to an interface/import. If the result is not satisfactory, the backup can then be restored"

For automatic login to i-doit within an intranet, Single Sign-On (SSO) is the recommended approach. This article describes the setup using the Apache module **auth_kerb**.

!!! info
    This article was last verified for i-doit version 1.17.2

!!! info
    This guide no longer works with Debian 11, as the Apache2 module **mod_auth_kerb** is no longer available there.
    Use [GSSAPI](../gssapi/index.md) instead.

## Prerequisites

*   i-doit is [installed](../../../installation/manuelle-installation/setup.md) on GNU/Linux.
*   An Active Directory (AD) running on Windows Server 2008/2012 is used for authentication.

!!! warning "Case sensitivity"

    Pay close attention to upper and lower case in the configuration.

## Configure Active Directory (AD)

Create a user in the AD for SSO access. Example:

*   Server name of i-doit: **idoit.mydomain.local**
*   AD domain: **addomain.local**
*   SSO user: **ssouser**
*   Password: **passwort**

Generate a keytab file on an AD Domain Controller using the admin user via the ktpass utility:

```shell
ktpass -princ HTTP/idoit.mydomain.local@ADDOMAIN.LOCAL -mapuser ssouser@ADDOMAIN.LOCAL -crypto RC4-HMAC-NT -ptype KRB5_NT_PRINCIPAL -pass passwort -out c:\krb5.keytab
```

Copy the generated file `krb5.keytab` to the i-doit server at `/etc/krb5.keytab`.

Then open **Active Directory Users and Computers** (`adsiedit.msc`). Enable the **Advanced Features** option under **View**. Open the SSO user object and check in the **Attribute Editor** tab the values **userPrincipalname** and **servicePrincipalname** -- both must contain **exactly one entry** with the value `HTTP/idoit.mydomain.local`.

## Configure Apache web server

For the Apache web server you need the `auth_kerb` module.

Debian GNU/Linux or Ubuntu Linux:

```shell
sudo apt install libapache2-mod-auth-kerb
```

SUSE Linux Enterprise Server (SLES):

```shell
sudo zypper in apache2-mod_auth_kerb
```

Enable the module:

```shell
sudo a2enmod auth_kerb
```

Create the Kerberos configuration (replace `dc.mydomain.local` with your Domain Controller):

```conf
    # cat /etc/krb5.conf
    [libdefaults]

    default_realm = ADDOMAIN.LOCAL

    [realms]
    ADDOMAIN.LOCAL = {
    admin_server = dc.mydomain.local
    kdc          = dc.mydomain.local

    }

    [domain_realm]
    idoit.mydomain.local = ADDOMAIN.LOCAL
    .mydomain.local = ADDOMAIN.LOCAL
    mydomain.local = ADDOMAIN.LOCAL
```

Test the configuration with the following command:

```shell
kinit ssouser@ADDOMAIN.LOCAL
```

You will be asked for the SSO user's password. Check with `klist` whether a valid ticket exists:

```shell
klist
```

Then add the Apache configuration for the VHost under which i-doit is accessible, within the Directory directive:

```conf
    <Directory "/path/to/i-doit/">
        AuthType Kerberos
        KrbAuthRealms ADDOMAIN.LOCAL
        KrbServiceName HTTP/idoit.mydomain.local@ADDOMAIN.LOCAL
        Krb5Keytab /etc/krb5.keytab
        KrbMethodNegotiate on
        KrbMethodK5Passwd off
        require valid-user
    </Directory>
```

Restart the Apache web server for the changes to take effect:

```shell
sudo systemctl restart apache2.service
```

## Configure i-doit

You can find the SSO setting in the Admin Center under **System settings > Single Sign on**. Enable **SSO** there.

## Configure browser on the client side

For SSO to be used automatically, each browser must be configured accordingly.

### Microsoft Internet Explorer (IE)

Add the i-doit server to the local intranet sites in the IE settings. Under **Custom Level > User Authentication**, enable the option **Automatic logon with current username and password**. Also ensure that under **Advanced > Internet Options** the checkbox **Integrated Windows Authentication** is set.

### Mozilla Firefox and Google Chrome

SSO is also possible for these browsers. Details on the configuration can be found widely on the internet; for Firefox, for example, [here](https://superuser.com/questions/664656/how-to-configure-firefox-for-ntlm-sso-single-sign-on).

## Troubleshooting

If problems occur during authentication, check the following points:

*   Compare time settings on Linux and Windows DC: Are they the same?
*   The server is in most cases only reachable via the full FQDN idoit.mydomain.local
*   Does the _i-doit_ server have access to the Domain Controller? Is there a firewall in between?
*   Is the SSO domain user unlocked?
*   Can the DC be resolved via DNS from the _i-doit_ server?
*   Does the web server have read permissions on the file krb5.keytab?
