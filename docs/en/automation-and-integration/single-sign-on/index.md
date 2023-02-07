The authentication via Single Sign On (SSO) is well suited for an automated sign on to i-doit within an intranet.

This article was last checked for i-doit version 1.17.2

This tutorial does not work anymore with Debian 11 because the Apache2 module `mod_auth_kerb` is not available anymore.

You should use [GSSAPI](https://kb.i-doit.com/display/en/Single+Sign+on+%28SSO%29+via+GSSAPI) instead.

**Contents**

*   1[Configure Active Directory (AD)](#SingleSignOn(SSO)-ConfigureActiveDirectory(AD))
*   2[Configure Apache Webserver](#SingleSignOn(SSO)-ConfigureApacheWebserver)
*   3[Configure i-doit](#SingleSignOn(SSO)-Configurei-doit)
*   4[Browser Client-side Configuration](#SingleSignOn(SSO)-BrowserClient-sideConfiguration)
    *   4.1[Microsoft Internet Explorer (IE)](#SingleSignOn(SSO)-MicrosoftInternetExplorer(IE))
    *   4.2[Mozilla Firefox and Google Chrome](#SingleSignOn(SSO)-MozillaFirefoxandGoogleChrome)
*   5[Troubleshooting](#SingleSignOn(SSO)-Troubleshooting)

Requirements and Assumptions

The following conditions are the basis of this article:

*   i-doit is [installed](/display/en/Setup) on a GNU/Linux system
*   An [Active Directory (AD)](/pages/viewpage.action?pageId=37355601) on Windows Server 2008/2012 is used for the authentication.

This article describes how Single Sign On (SSO) is set up in an Apache web server with `auth_kerb`.

  

Case sensitivity

Special attention needs to be paid to upper and lower case letters in the configuration.

Configure Active Directory (AD)
-------------------------------

In AD a user is generated for the SSO access. Example:

*   Server name of i-doit: **`idoit.mydomain.local`**
*   AD domain: **`addomain.local`**
*   SSO user: **`ssouser`**
*   Password: **`password`**

A keytab file is generated on an AD domain controller using the admin user with help of the ktpass utilities.

[?](#)

`ktpass -princ HTTP``/idoit``.mydomain.``local``@ADDOMAIN.LOCAL -mapuser ssouser@ADDOMAIN.LOCAL -crypto RC4-HMAC-NT -ptype KRB5_NT_PRINCIPAL -pass passwort -out c:\krb5.keytab`

The generated `krb5.keytab` file is then copied to the _i-doit_ server at `/etc/krb5.keytab`.

Afterwards, **`Active Directory Users and Computers`** is opened (`adsiedit.msc`). At **`View`** the **`Advanced Features`** option is activated. Now the SSO user object is opened. Search for the values **`userPrincipalName`** and servicePrincipalName in the **`Attribute Editor`** tab. In both cases **exactly one entry** with the value **`HTTP/idoit.mydomain.local`** needs to be set.

Configure Apache Webserver
--------------------------

The module `auth_kerb` is required for the Apache web server.

[?](#)

`# Debian GNU/Linux or Ubuntu Linux:`

`sudo` `apt` `install` `libapache2-mod-auth-kerb`

`# Suse Linux Enterprise Server (SLES):`

`sudo` `zypper` `in` `apache2-mod_auth_kerb`

`# Activate the module:`

`sudo` `a2enmod auth_kerb`

Now the configuration for Kerberos will be written (replace `dc.mydomain.local` by the domain controller):

[?](#)

`# cat /etc/krb5.conf`

`[libdefaults]`

`default_realm = ADDOMAIN.LOCAL`

`[realms]`

`ADDOMAIN.LOCAL = {`

`admin_server =` `dc``.mydomain.``local`

`kdc          =` `dc``.mydomain.``local`

`}`

`[domain_realm]`

`idoit.mydomain.``local` `= ADDOMAIN.LOCAL`

`.mydomain.``local` `= ADDOMAIN.LOCAL`

`mydomain.``local` `= ADDOMAIN.LOCAL`

Execute the following command to test the configuration:

[?](#)

`kinit ssouser@ADDOMAIN.LOCAL`

The password of the SSO user is requested. With the command

[?](#)

`klist`

you can check whether or not a valid ticket exists.

Subsequently, the Apache configuration for the VHost at which _i-doit_ is accessible is supplemented within the `Directory` directive:

[?](#)

`<Directory` `"/path/to/i-doit/"``>`

`AuthType Kerberos`

`KrbAuthRealms ADDOMAIN.LOCAL`

`KrbServiceName HTTP``/idoit``.mydomain.``local``@ADDOMAIN.LOCAL`

`Krb5Keytab` `/etc/krb5``.keytab`

`KrbMethodNegotiate on`

`KrbMethodK5Passwd off`

`require valid-user`

`<``/Directory``>`

In order to apply the changes the Apache web server needs to be restarted:

  

  

`# Debian GNU/Linux or Ubuntu or Suse Linux Enterprise Server (SLES):`

`sudo` `systemctl restart apache2.service`

  

Configure i-doit
----------------

From version 1.5 on SSO can be configured via the web GUI of i-doit. The corresponding settings can be found at **`Administration → System settings`**. There **`SSO`** needs to be activated.

Browser Client-side Configuration
---------------------------------

Lastly, each browser needs to be configured to automatically use SSO.

### Microsoft Internet Explorer (IE)

The _i-doit_ server needs to be added to the local intranet sites in the IE settings. After this, the item **`Automatic logon with current username and password`** has to be enabled under `**User Authentication**` within the **`Custom level`** option. Furthermore, make sure that you activate the option **`Integrated Windowa authentication`** in the **`Advanced`** tab of the **`Internet options`**.

### Mozilla Firefox and Google Chrome

SSO is also possible for these browsers. Extensive information about the configuration can be found on the internet. You can find an example for Firefox [here](https://superuser.com/questions/664656/how-to-configure-firefox-for-ntlm-sso-single-sign-on).

Troubleshooting
---------------

Should you have problems regarding the authentication the following questions and hints may be of help:

*   Compare the time settings in Linux and Windows DC. Are they the same?
*   In most cases the server is only accessible via the full FQDN `i-doit.mydomain.local.`
*   Does the _i-doit_ server have access to the domain controller? Is there a firewall between these two?
*   Is the SSO domain user unlocked?
*   Can the DC be resolved per DNS from the _i-doit_ server?
*   Does the web server have read permission for the `krb5.keytab` file?