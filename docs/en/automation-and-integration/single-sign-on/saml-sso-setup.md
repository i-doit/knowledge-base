# Einrichtung von SAML-SSO

In this tutorial, we describe how to set up single sign-on (SSO) for i-doit using SAML. In this example, we use Mellon as authenticator against LDAP-AD-FS.

## Vorbereitungen

We use two servers for the sample configuration, a Windows server with domain/AD and FS and a Debian 11 server with Apache and Melon:

| FQDN | IP  | Rolle | OS  |
| --- | --- | --- | --- |
| tu2-dc2.tu-synetics.test | 10.10.60.22 | AD, FS | Windows |
| tu2-samlsso.synetics.test | 10.10.60.108 | Apache+Mellon | Debian11 |

### Basis Konfiguration:

✔ Both servers must be able to resolve each other via FQDN.

✔ The Windows server must have a configured AD that includes the AD-FS role.

✔ I-doit is already pre-installed and usable.

### Pakete Installieren

```shell
sudo apt -y install openssl libapache2-mod-auth-mellon ntpdate
```

Als Systemarchitektur sollte ein x86 in 64bit zum Einsatz kommen

## Mellon Konfiguration

We are creating a directory for this under `/etc/apache2` and store our configuration data here.

```shell
sudo mkdir -p /etc/apache2/mellon
cd /etc/apache2/mellon
```

With the following command we create our Mellon metadata “Please adjust URLs”

```shell
/usr/sbin/mellon_create_metadata https://tu2-samlsso.synetics.test/ "https://tu2-samlsso.synetics.test/mellon"
```
This now creates the following files

`https\_tu2\_samlsso.synetics.test\_.cert`

`https\_tu2\_samlsso.synetics.test\_.key`

`https\_tu2\_samlsso.synetics.test\_.xml`

Now we need to fetch the AD-FS metadata from our AD “Please adjust URLs”

```shell
wget  https://tu2-dc2.tu-synetics.test/FederationMetadata/2007-06/FederationMetadata.xml%20-O%20/etc/apache2/mellon/FederationMetadata.xml -O /etc/apache2/mellon/FederationMetadata.xml --no-check-certificate
```

Now we need to create our Mellon configuration.

```shell
sudo nano /etc/apache2/conf-available/mellon.conf
```

Insert the following configuration directives based on the example:

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

## Apache2 Konfiguration

First we create a self signed certificate "name can be individual".

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

Create VHost:

```shell
sudo nano /etc/apache2/sites-available/mywebserver.con
```

Example:

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

In this example only the directory protected via Mellon is protected under `/var/www/html`. So we can create another VHost config later to install e.g. i-doit pro.

Creating the directory:

```shell
sudo mkdir -p /var/www/html/protected
```

Create an example html to test the call later on:

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

Config testen:

```shell
sudo apache2ctl configtest
```

Activate Mods and Configs:

```shell
sudo a2enmod ssl
sudo a2enconf mellon.conf
sudo a2ensite mywebserver.conf
sudo systemctl restart apache2
```

Synchronize time:

```shell
sudo ntpdate -u tu2-dc2.tu-synetics.test
```

At this point, we are done with the configuration of the Linux server for the time being and can now turn our attention to our AD.

## Konfiguration AD-FS:

First download the file `mellon_metadata.xml` from the Linux server e.g. via WinSCP and save it.

[![Add Relying Party Trust](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-1.png)](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-1.png)

Claims aware remains active and then on Start

[![Welcome](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-2.png)](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-2.png)

In the next step we select "import data ...." and navigate to our previously saved XML

[![Select data source](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-3.png)](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-3.png)

The following note can be ignored if it appears.

[![AD FS Management](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-4.png)](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-4.png)

Now we enter the FQDN from our Linux server.

[![Specify display name](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-5.png)](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-5.png)

In the next step we can control accesses, for the sake of simplicity we leave it at Permit everyone for now.

[![Choose access control policy](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-6.png)](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-6.png)

We can also disregard the next window and just click next.

[![Ready to add trust](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-7.png)](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-7.png)

Finally only Close and the Party Trust is created

[![Finish](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-8.png)](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-8.png)

Now we need to define Claim Issuance Policies so that our user can also log in via mail.

[![AD FS edit claim](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-9.png)](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-9.png)

Now a window opens and we click on Add Rule.

[![Add rule](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-10.png)](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-10.png)

Now we select Send LDAP Attributes as Claim and click Next

[![Choose rule type](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-11.png)](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-11.png)

We give the rule a unique name and add the mapping as shown.

[![Configure claim rule](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-12.png)](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-12.png)

Then we create another rule and select Transform an Incoming Claim

[![Select rule template](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-13.png)](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-13.png)

Please configure as follows:

[![Configure rule](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-14.png)](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-14.png)

Now we have a fully configured Relying Party Trust and can test the authentication once.

[![Login page](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-15.png)](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-15.png)

## Test SAML-SSO

Open the URL from the server once in the browser
Example:
[https://mywebserver.example.com/protected](https://mywebserver.example.com/protected)

After successful registration, we should receive the following output.

[![Auth users only](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-16.png)](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-16.png)

## Installation i-doit pro:

The installation can be installed as described in the KB article for [Debian](../../installation/manual-installation/debian.md).

## SSO login for i-doit pro

For this we have to go to the Administration -> System settings and adjust the configuration as follows.
Important information about contacts: **It is mandatory that the e-mail address of the respective user is stored as login in i-doit!**

[![i-doit SSO setting](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-17.png)](../../assets/images/en/automation-and-integration/single-sign-on/saml-sso/saml-17.png)

Since we currently followed our instructions or KB, we need to adjust the VHost configuration so that we can now log in via SSO

Disable i-doit Vhost

```shell
sudo a2dissite i-doit
```

Customize Mellon Vhost created at the beginning

```shell
nano /etc/apache2/sites-enabled/tu2-samlsso.conf 
```

Example:
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

Finally restart Apache once

```shell
sudo systemctl restart apache2.service
```

**Finished!**

If we now open the URL again in our browser and log in, we will be taken directly to the i-doit