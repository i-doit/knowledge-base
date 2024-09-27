# Azure AD (SAML) authentication

In this guide, we describe how to set up single sign-on (SSO) for i-doit using SAML. We will be using Mellon as an authenticator versus Azure AD via SAML ..

## Preparations

We use for the example configuration a Debian 11 server with Apache, Mellon and installed i-doit.

### Basic configuration

✔ This guide assumes that your Azure Active Directory has already been configured properly.<br>
✔ i-doit is already pre-installed and usable.

### Install packages

```shell
sudo apt -y install openssl libapache2-mod-auth-mellon ntpdate
```

The system architecture should be x86 in 64bit.

## Mellon configuration

For this we create a directory under `/etc/apache2` and put our configuration file here.

```shell
sudo mkdir -p /etc/apache2/mellon
cd /etc/apache2/mellon
```

With the following command we create our Mellon metadata "Customize URLs to your needs".

```shell
/usr/sbin/mellon_create_metadata https://tu2-samlsso.synetics.test/ "https://tu2-samlsso.synetics.test/mellon"
```

The command now the following files:

    https_tu2_samlsso.synetics.test_.cert
    https_tu2_samlsso.synetics.test_.key
    https_tu2_samlsso.synetics.test_.xml

Now we have to create our Mellon configuration.

```shell
sudo nano /etc/apache2/conf-available/mellon.conf
```

The following directives are inserted based on the example:

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

## Apache2 configuration

First we create a self signed certificate "name can be individual".

```shell
openssl req -newkey rsa:3072 -new -x509 -days 3652 -nodes -out /etc/ssl/certs/mywebserver.pem -keyout /etc/ssl/private/mywebserver.key
```

Beispiel:

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
sudo nano /etc/apache2/sites-available/mywebserver.conf
```

Example:

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
    In this example, the directory `/var/www/html/i-doit` where our i-doit is located is protected by using Mellon.

## Activate i-doit SSO

Now we have to go to administration -> system settings and adjust the configuration as follows.

!!! attention "Important information about contacts"

    It is mandatory that the e-mail address of the respective user is stored as login in i-doit!

[![i-doit SSO setting](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-17.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/adfs-saml/saml-17.png)

As long as the configurations on the Linux server have not been activated yet, users can still log in with the i-doit login mask and a local user.

## Azure AD (SAML)

In order to get the required XML for the Mellon configuration we have to do the following steps (example):

### Create a enterprise application

We log into Azure AD and then go to enterprise applications.

[![Azure-AD-enterprise-application](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-1.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-1.png)

Create your own enterprise application.

[![Azure-AD-enterprise-application-2](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-2.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-2.png)

Set up SSO.

[![Azure-AD-enterprise-application-3](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-3.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-3.png)

Now we select the SAML method and in the next step we provide our `https_tu2_samlsso.synetics.test_.xml` by clicking the button `upload metadata file`.

!!! info "https_tu2_samlsso.synetics.test_.xml"

    The file must be downloaded beforehand from our server via e.g. SFTP.

[![Azure-AD-enterprise-application-4](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-4.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-4.png)

Now we save the configuration.

!!! attention "Test"

    If a message appears asking to test the configuration, please confirm with the button `No, I will test it later`.

[![Azure-AD-enterprise-application-5](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-5.jpg)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-5.jpg)

Afterwards we download the metadata XML because it will be needed later on.

[![Azure-AD-enterprise-application-6](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-6.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-6.png)

In order for the users to gain access to the enterprise application, the assignment must be adjusted.

[![Azure-AD-enterprise-application-7](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-7.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-7.png)

Lastly, we need to customize the unique user identifier so that Mellon can forward the user's email address to i-doit.

To do this, we open the `Single sign-on` item in the administration of the enterprise application.
Then we see in the main area 'Attributes and claims' and we edit them.

[![Azure-AD-enterprise-application-8](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-8.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-8.png)

Now we edit under `Successful claim` the first claim that is displayed.

[![Azure-AD-enterprise-application-9](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-9.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-9.png)

The name identifier format must be changed to `email address` mandatory.
The source attribute must be changed to `user.mail`..
Then we save the configuration.

[![Azure-AD-enterprise-application-10](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-10.png)](../../../assets/images/en/user-authentication-and-management/sso-comparison/saml/azure-ad/azure-ad-enterprise-application-10.png)

At this point, we are done configuring our enterprise application in Azure AD.

## Activation of the configurations on the Linux server

### Provide metadata XML

The previously created metadata XML must now be made available on our Linux server in the directory `/etc/apache2/mellon` so that Mellon can use it..

!!!attention "Filename"

    Please adjust the name of the file to `AzureAD_metadata.xml` in `mellon.conf`.
    Alternatively, adjust the filename in `mellon.conf`.

Now that we have created all the configurations so far, we can test them and activate all the necessary mods.

### Test config

```shell
sudo apache2ctl configtest
```

### Activate mods and configs

```shell
sudo a2enmod ssl
sudo a2enconf mellon.conf
sudo a2ensite mywebserver.conf
sudo systemctl restart apache2
```

At this point we are done with the configuration of our Linux server.

If we now open the URL again in our browser `https://tu2-samlsso.synetics.test` we will be redirected to the Azure AD login.
After successful login we are redirected back to our i-doit and are successfully logged in.

!!! info "Fallback to login screen"

    If a user logs in who does not yet exist in i-doit, then this user is automatically redirected to the i-doit login screen and can log in with a local user.
