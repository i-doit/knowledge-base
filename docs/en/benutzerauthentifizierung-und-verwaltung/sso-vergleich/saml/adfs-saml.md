---
title: ADFS (Active Directory) (SAML)
description: "This guide describes the setup of Single Sign-On (SSO) for i-doit with SAML."
icon:
status:
lang: en
---
# ADFS (Active Directory) (SAML)

!!! warning "Please create a complete backup before making any changes to an interface/import. If the result is not satisfactory, the backup can then be restored"

This guide describes the setup of Single Sign-On (SSO) for i-doit with SAML. Mellon is used as the authenticator against AD FS (Active Directory Federation Services).

## Preparations

The example configuration uses two servers -- a Windows Server with domain/AD and FS, and a Debian 11 server with Apache and Mellon:

| FQDN                      | IP           | Role          | OS       |
| ------------------------- | ------------ | ------------- | -------- |
| tu2-dc2.tu-synetics.test  | 10.10.60.22  | AD, FS        | Windows  |
| tu2-samlsso.synetics.test | 10.10.60.108 | Apache+Mellon | Debian11 |

### Basic configuration

✔ The Windows server must have a configured AD that includes the AD-FS role.<br>
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

`https\_tu2\_samlsso.synetics.test\_.cert` <br>
`https\_tu2\_samlsso.synetics.test\_.key` <br>
`https\_tu2\_samlsso.synetics.test\_.xml`

Retrieve the AD FS metadata from your AD (adjust the URL):

```shell
wget https://tu2-dc2.tu-synetics.test/FederationMetadata/2007-06/FederationMetadata.xml%20-O%20/etc/apache2/mellon/FederationMetadata.xml -O /etc/apache2/mellon/FederationMetadata.xml --no-check-certificate
```

Now create the Mellon configuration:

```shell
sudo nano /etc/apache2/conf-available/mellon.conf
```

Insert the following directives:

```shell
<Location / >
    MellonSPPrivateKeyFile /etc/apache2/mellon/https_tu2_samlsso.synetics.test_.key
    MellonSPCertFile /etc/apache2/mellon/https_tu2_samlsso.synetics.test_.cert
    MellonSPMetadataFile /etc/apache2/mellon/https_tu2_samlsso.synetics.test_.xml
    MellonIdPMetadataFile /etc/apache2/mellon/FederationMetadata.xml
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
        DocumentRoot /var/www/html
        ServerSignature Off
        ErrorLog /var/log/apache2/error.log
        CustomLog /var/log/apache2/access.log combined
        LogLevel info ssl:warn
        SSLEngine on
        SSLCertificateFile /etc/ssl/certs/mywebserver.pem
        SSLCertificateKeyFile /etc/ssl/private/mywebserver.key
    </VirtualHost>
    <Location /protected>
        Require valid-user
        AuthType "Mellon"
        MellonEnable "auth"
        MellonDecoder "none"
        MellonVariable "cookie"
        MellonSecureCookie On
    </Location>
</IfModule>
```

In this example, only the subdirectory `/protected` under `/var/www/html` is protected via Mellon. You can later create an additional VHost configuration to include e.g. i-doit.

Create the directory:

```shell
sudo mkdir -p /var/www/html/protected
```

Create an example HTML file to test the access later:

```shell
sudo nano /var/www/html/protected/index.html
```

Example:

```shell
<html>
    <head>
        <title>Index Page</title>
    </head>
    <body>
        <h2>This simple index page will only be accessible once your users successfully sign-in via Azure AD with their valid credentials!</h2>
    </body>
</html>
```

Test the configuration:

```shell
sudo apache2ctl configtest
```

Enable the required modules and configs:

```shell
sudo a2enmod ssl
sudo a2enconf mellon.conf
sudo a2ensite mywebserver.conf
sudo systemctl restart apache2
```

Synchronize the system time:

```shell
sudo ntpdate -u tu2-dc2.tu-synetics.test
```

The configuration of the Linux server is now complete for the time being. In the next step you will set up AD FS.

## AD FS Configuration

First download the `mellon_metadata.xml` from the Linux server (e.g. via WinSCP). Then open the AD FS Management and create a new Relying Party Trust:

[![Add Relying Party Trust](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-1.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-1.png)

Leave **Claims aware** active and click **Start**.

[![Welcome](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-2.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-2.png)

In the next step, select **Import data from a file** and navigate to the previously saved XML file.

[![Select data source](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-3.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-3.png)

The following notice can be ignored if it appears.

[![AD FS Management](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-4.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-4.png)

Enter the FQDN of your Linux server.

[![Specify display name](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-5.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-5.png)

In the next step you can configure access control. To start, leave the setting at **Permit everyone**.

[![Choose access control policy](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-6.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-6.png)

You can skip the next window -- click **Next**.

[![Ready to add trust](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-7.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-7.png)

Click **Close** -- the Relying Party Trust is now created.

[![Finish](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-8.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-8.png)

Now define the **Claim Issuance Policies** so that users can log in via email.

[![AD FS edit claim](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-9.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-9.png)

A window opens -- click **Add Rule**.

[![Add rule](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-10.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-10.png)

Select **Send LDAP Attributes as Claim** and click **Next**.

[![Choose rule type](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-11.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-11.png)

Give the rule a unique name and add the mapping as shown.

[![Configure claim rule](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-12.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-12.png)

Create an additional rule and select **Transform an Incoming Claim**.

[![Select rule template](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-13.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-13.png)

Apply the configuration as follows:

[![Configure rule](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-14.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-14.png)

The Relying Party Trust is now fully configured. Test the authentication:

[![Login page](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-15.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-15.png)

## Test SAML-SSO

Open the URL of the server in your browser:
[https://mywebserver.example.com/protected](https://mywebserver.example.com/protected)

After successful login you should see the following output:

[![Auth users only](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-16.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-16.png)

## Install i-doit

The installation can be performed as described in the KB article for [Debian](../../../installation/manuelle-installation/debian/index.md).

## Enable SSO login for i-doit

Open the **System settings** tab in the [Admin Center](../../../administration/admin-center.md) and adjust the configuration as follows:

!!! attention "Important information about contacts"

    The email address of the respective user must be stored as the login in i-doit!

[![i-doit SSO setting](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-17.png)](../../../assets/images/de/benutzerauthentifizierung-und-verwaltung/sso-vergleich/saml/adfs-saml/saml-17.png)

Adjust the VHost configuration so that SSO login works.

Disable the i-doit VHost configuration:

```shell
sudo a2dissite i-doit
```

Adjust the Mellon VHost configuration created at the beginning:

```shell
nano /etc/apache2/sites-enabled/tu2-samlsso.conf
```

Example

```shell
<IfModule mod_ssl.c>
    <VirtualHost _default_:443>
    ServerAdmin admin@example.com
    DocumentRoot /var/www/html
            <Directory /var/www/html/>
                    AllowOverride All
            </Directory>
    ServerName  fqdn.example.com
    ServerSignature Off
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
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
    </Location>
</IfModule>
```

Restart Apache:

```shell
sudo systemctl restart apache2.service
```

The setup is complete. If you now open the URL in your browser and log in, you will be taken directly to i-doit.

!!! info "Fallback to login form"

    If a user logs in who does not yet exist in i-doit, they will automatically be redirected to the i-doit login form and can log in with a local user.
