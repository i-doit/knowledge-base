---
title: Azure AD (SAML) authentication
description: "This guide describes the setup of Single Sign-On (SSO) for i-doit with SAML."
icon:
status:
lang: en
---
# Azure AD (SAML) authentication

!!! warning "Please create a complete backup before making any changes to an interface/import. If the result is not satisfactory, the backup can then be restored"

This guide describes the setup of Single Sign-On (SSO) for i-doit with SAML. Mellon is used as the authenticator against Azure AD.

## Preparations

The example configuration uses a Debian 11 server with Apache, Mellon, and i-doit already installed.

### Basic configuration

✔ This guide assumes that your Azure Active Directory has already been properly configured.<br>
✔ i-doit is already pre-installed and usable.

### Install packages

```shell
sudo apt -y install openssl libapache2-mod-auth-mellon ntpdate
```

An x86 64-bit system architecture should be used

## Mellon Configuration

Create a directory under `/etc/apache2` for the configuration data.

```shell
sudo mkdir -p /etc/apache2/mellon
cd /etc/apache2/mellon
```

Create the Mellon metadata with the following command (adjust the URLs to your environment):

```shell
/usr/sbin/mellon_create_metadata https://tu2-samlsso.synetics.test/ "https://tu2-samlsso.synetics.test/mellon"
```

This command creates the following files:

    https_tu2_samlsso.synetics.test_.cert
    https_tu2_samlsso.synetics.test_.key
    https_tu2_samlsso.synetics.test_.xml

Create the Mellon configuration:

```shell
sudo nano /etc/apache2/conf-available/mellon.conf
```

Insert the following directives:

```shell
<Location / >
    MellonSPPrivateKeyFile /etc/apache2/mellon/https_tu2_samlsso.synetics.test_.key
    MellonSPCertFile /etc/apache2/mellon/https_tu2_samlsso.synetics.test_.cert
    MellonSPMetadataFile /etc/apache2/mellon/https_tu2_samlsso.synetics.test_.xml
    MellonIdPMetadataFile /etc/apache2/mellon/AzureAD_metadata.xml
    MellonEndpointPath /mellon
    MellonEnable "info"
</Location>
```

## Apache2 Configuration

First create a self-signed certificate (the name can be chosen freely):

```shell
openssl req -newkey rsa:3072 -new -x509 -days 3652 -nodes -out /etc/ssl/certs/mywebserver.pem -keyout /etc/ssl/private/mywebserver.key
```

Example:

```shell
Country Name (2 letter code) [AU]:Your_Country
State or Province Name (full name) [Some-State]:Your_Province
Locality Name (eg, city) []:Your_City
Organization Name (eg, company) [Internet Widgits Pty Ltd]:Your_Organization
Organizational Unit Name (eg, section) []:Your Department
Common Name (e.g. server FQDN or YOUR name) []:mywebserver.example.com
Email Address []:your_email_address
```

Create a VHost:

```shell
sudo nano /etc/apache2/sites-available/mywebserver.conf
```

Example configuration:

```shell
<IfModule mod_ssl.c>
    <VirtualHost _default_:443>
        DocumentRoot /var/www/html/i-doit
        <Directory /var/www/html/i-doit/>
                AllowOverride All
        </Directory>
        ServerSignature Off
        ErrorLog /var/log/apache2/error.log
        CustomLog /var/log/apache2/access.log combined
        LogLevel info ssl:warn
        SSLEngine on
        SSLCertificateFile /etc/ssl/certs/mywebserver.pem
        SSLCertificateKeyFile /etc/ssl/private/mywebserver.key
    </VirtualHost>
    <Location />
        Require valid-user
        AuthType "Mellon"
        MellonEnable "auth"
        MellonDecoder "none"
        MellonVariable "cookie"
        MellonSecureCookie On
        MellonUser "http://schemas.xmlsoap.org/ws/2005/05/identity/claims/name"
    </Location>
</IfModule>
```

!!! info ""
    In this example, the directory `/var/www/html/i-doit` where our i-doit is located is protected via Mellon.

## Enable SSO login for i-doit

Open the **System settings** tab in the [Admin Center](../../../administration/admin-center.md) and adjust the configuration as follows:

!!! attention "Important information about contacts"

    The email address of the respective user must be stored as the login in i-doit!

[![i-doit SSO setting](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-17.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-17.png)

As long as the configurations on the Linux server have not been enabled yet, users can still log in with the i-doit login form and a local user.

## Azure AD (SAML)

To obtain the required XML for the Mellon configuration, perform the following steps:

### Creating a custom enterprise application

Log in to Azure AD and navigate to **Enterprise applications**.

[![Azure-AD-Unternehmensanwendung](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen.png)

Create your own custom application.

[![Azure-AD-Unternehmensanwendung-2](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-2.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-2.png)

Set up SSO.

[![Azure-AD-Unternehmensanwendung-3](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-3.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-3.png)

Select the method **SAML** and in the next step provide the file `https_tu2_samlsso.synetics.test_.xml` by clicking **Upload metadata file**.

!!! info "https_tu2_samlsso.synetics.test_.xml"

    The file must first be downloaded from our server via e.g. SFTP.

[![Azure-AD-Unternehmensanwendung-4](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-4.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-4.png)

Save the configuration.

!!! attention "Test"

    If a message appears asking whether the configuration should be tested, please confirm with the button `No, I will test later`

[![Azure-AD-Unternehmensanwendung-5](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-5.jpg)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-5.jpg)

Then download the metadata XML -- you will need it in the further process.

[![Azure-AD-Unternehmensanwendung-6](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-6.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-6.png)

Adjust the assignment so that users have access to the enterprise application.

[![Azure-AD-Unternehmensanwendung-7](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-7.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-7.png)

Finally, adjust the unique user identifier so that Mellon can forward the user's email address to i-doit.

To do this, open the **Single sign-on** section in the enterprise application administration. In the main area you will find **Attributes and Claims** -- edit these.

[![Azure-AD-Unternehmensanwendung-8](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-8.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-8.png)

Under **Required claim**, edit the first displayed claim.

[![Azure-AD-Unternehmensanwendung-9](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-9.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-9.png)

Change the **name identifier format** to `Email address` and the **source attribute** to `user.mail`. Then save the configuration.

[![Azure-AD-Unternehmensanwendung-10](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-10.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/azure-ad/azure-ad-unternehmensanwendungen-erstellen-10.png)

The configuration of the enterprise application in Azure AD is now complete.

## Enabling the configurations on the Linux server

### Provide the metadata XML

Place the previously created metadata XML on your Linux server in the directory `/etc/apache2/mellon` so that Mellon can use it.

!!!attention "Filename"

    Please adjust the filename according to the `mellon.conf` to `AzureAD_metadata.xml`.
    Alternatively, adjust the filename in the `mellon.conf`.

Now test the configuration and enable all required modules.

### Test the configuration

```shell
sudo apache2ctl configtest
```

### Enable modules and configs

```shell
sudo a2enmod ssl
sudo a2enconf mellon.conf
sudo a2ensite mywebserver.conf
sudo systemctl restart apache2
```

The configuration of the Linux server is now complete.

If you now open the URL `https://tu2-samlsso.synetics.test` in your browser, you will be redirected to the Azure AD login. After successful login, you will be taken directly to your i-doit.

!!! info "Fallback to login form"
    If a user logs in who does not yet exist in i-doit, they will automatically be redirected to the i-doit login form and can log in with a local user.
