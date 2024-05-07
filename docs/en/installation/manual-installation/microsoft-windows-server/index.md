# Install i-doit for Windows Server

How to install i-doit on Windows operating system is described in this article.<br>
The i-doit installation package for Windows is provided in the [Customer Portal](../../../system-administration/customer-portal.md).

The contents of the package are as follows:

-   i-doit Windows Installer.exe
-   idoit-XX.zip
-   src.zip
-   windowsdesktop-runtime-6.0.14-win-x64.exe

The installation package will always include the latest [i-doit version](../../../version-history/index.md). Also the `src.zip` folder allows for an installation without internet connection.<br>
Since the i-doit Windows installer requires ==windowsdesktop-runtime-6.0.14==, this is also provided in case there is no internet connection available.

## Installation

After running the `i-doit Windows Installer.exe` you will see the following GUI:

[![GUI](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/1-idw.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/1-idw.png)

After clicking Install, all the required items will be installed in the background.

The following will be installed:

-   ==Apache 2.4==
-   ==PHP 8.X==
-   ==MariaDB 10.X==
-   ==i-doit==

!!! info "If the Windows Firewall is activated, you will be asked if want to trust the application"

If the installation was successful, a small window with the message "==i-doit has been installed successfully.==" will display.<br>
After clicking ==OK== a new browser tab with the `localhost` URL will be opened automatically and you can use i-doit to the full extent.

!!! info "If an error occurred during the installation, a log file is automatically created in the i-doit folder"

## Configuration

To configure PHP, MariaDB or Apache, you can find the respective config files in the following directories:

-   ==PHP:==<br>
    `C:\ProgramData\i-doit\php\php.ini`

-   ==MariaDB:==<br>
    `C:\ProgramData\MariaDB\data\my.ini`

-   ==Apache:==<br>
    `C:\ProgramData\i-doit\apache-2.4\conf\httpd.conf`

## Credentials

The following credentials are set by the installer.

| What | Username | Password |
|-|-|-|
| MariaDB root | root | idoit |
| MariaDB i-doit | idoit | idoit |
| i-doit Admin Center | - | admin |

For i-doit Login credentials see [here](../../../basics/initial-login.md).

## Setting up HTTPS (optional)

The following instructions show you how to set up SSL for Windows with i-doit.<br>
Only the steps required to configure HTTPS are described.<br>
This section can be skipped.

### Prerequisites

First you need a valid certificate in `.crt` and `.key` format. You can create this with OpenSSL.<br>
You can download and install OpenSSL here: [OpenSSL](https://slproweb.com/products/Win32OpenSSL.html)<br>
Once OpenSSL is installed, you can open Win64 OpenSSL Command Prompt via the Windows search bar by searching for "OpenSSL".
Now enter the following command to create the certificate:

```winbatch
OpenSSL req -x509 -sha256 -nodes -days 365 -newkey rsa:4096 -keyout private.key -out certificate.crt
```
The certificate and the private key have now been created in the folder in which the command was executed. Copy these, for example, to the folder `ProgramData\i-doit\apache-2.4\conf\extra\`.

### Configuration steps

1. **Creating the ssl.conf file**<br>

Navigate to your i-doit folder under `ProgramData\i-doit\apache-2.4\conf\extra\` and create the file `ssl.conf`. The file should have the following content:

```apacheconf
<VirtualHost *:443>
   DocumentRoot "${SRVROOT}/htdocs"
   ServerName localhost

   SSLEngine on
   SSLCertificateFile "path/to/certificate.crt"
   SSLCertificateKeyFile "path/to/privatekey.key"

   <Directory "${SRVROOT}/htdocs">
       Options Indexes FollowSymLinks MultiViews
       AllowOverride all
       Require all granted
       AddHandler application/x-httpd-php .php
   </Directory>

   ErrorLog "logs/ssl_error.log"
   LogLevel warn

   <IfModule log_config_module>
       LogFormat "%h %l %u %t \"%r\" %>s %b \"%{Referer}i\" \"%{User-Agent}i\"" combined
       LogFormat "%h %l %u %t \"%r\" %>s %b" common
       <IfModule logio_module>
           LogFormat "%h %l %u %t \"%r\" %>s %b \"%{Referer}i\" \"%{User-Agent}i\" %I %O" combinedio
       </IfModule>
       CustomLog "logs/ssl_access.log" common
   </IfModule>
</VirtualHost>
```

**Note:** Customize the paths and configuration settings according to your own environment and make sure that your certificate and private key are located in the specified paths.

2. **Adjustments in the httpd.conf**<br>

Edit the `httpd.conf` file located under `i-doit\apache-2.4\conf\` and add the following:

-   Add `lists 443` and comment out `lists 80`. As a result, i-doit will no longer be accessible via http.
-   Also add the following lines: `LoadModule ssl_module modules/mod_ssl.so` and `Include conf/extra/ssl.conf`

The file should then look like this if nothing has been changed beforehand:

```apacheconf
Define SRVROOT "C:/ProgramData/i-doit/apache-2.4"

ServerRoot "${SRVROOT}"
#Listen 80
Listen 443

LoadModule actions_module modules/mod_actions.so
LoadModule alias_module modules/mod_alias.so
LoadModule allowmethods_module modules/mod_allowmethods.so
LoadModule asis_module modules/mod_asis.so
LoadModule auth_basic_module modules/mod_auth_basic.so
LoadModule authn_core_module modules/mod_authn_core.so
LoadModule authn_file_module modules/mod_authn_file.so
LoadModule authz_core_module modules/mod_authz_core.so
LoadModule authz_groupfile_module modules/mod_authz_groupfile.so
LoadModule authz_host_module modules/mod_authz_host.so
LoadModule authz_user_module modules/mod_authz_user.so
LoadModule autoindex_module modules/mod_autoindex.so
LoadModule cgi_module modules/mod_cgi.so
LoadModule dir_module modules/mod_dir.so
LoadModule env_module modules/mod_env.so
LoadModule headers_module modules/mod_headers.so
LoadModule include_module modules/mod_include.so
LoadModule isapi_module modules/mod_isapi.so
LoadModule ldap_module modules/mod_ldap.so
LoadModule log_config_module modules/mod_log_config.so
LoadModule mime_module modules/mod_mime.so
LoadModule mime_magic_module modules/mod_mime_magic.so
LoadModule negotiation_module modules/mod_negotiation.so
LoadModule rewrite_module modules/mod_rewrite.so
LoadModule setenvif_module modules/mod_setenvif.so
LoadModule php_module "C:/ProgramData/i-doit/php/php8apache2_4.dll"
LoadModule ssl_module modules/mod_ssl.so
Include conf/extra/ssl.conf

PHPIniDir "C:/i-doit/php"

<IfModule unixd_module>
    User daemon
    Group daemon
</IfModule>

ServerAdmin admin@example.com

ServerName localhost:80
<Directory />
    AllowOverride all
    Require all granted
</Directory>


DocumentRoot "${SRVROOT}/htdocs"
<Directory "${SRVROOT}/htdocs">
    Options Indexes FollowSymLinks MultiViews
    AllowOverride all
    Require all granted
    AddHandler application/x-httpd-php .php
</Directory>

<IfModule dir_module>
    DirectoryIndex index.html index.php
</IfModule>

<Files ".ht*">
    Require all granted
</Files>

ErrorLog "logs/error.log"

LogLevel warn

<IfModule log_config_module>
    LogFormat "%h %l %u %t \"%r\" %>s %b \"%{Referer}i\" \"%{User-Agent}i\"" combined
    LogFormat "%h %l %u %t \"%r\" %>s %b" common
    <IfModule logio_module>
      LogFormat "%h %l %u %t \"%r\" %>s %b \"%{Referer}i\" \"%{User-Agent}i\" %I %O" combinedio
    </IfModule>
    CustomLog "logs/access.log" common
<IfModule alias_module>
    ScriptAlias /cgi-bin/ "${SRVROOT}/cgi-bin/"
</IfModule>

<IfModule cgid_module>
</IfModule>

<Directory "${SRVROOT}/cgi-bin">
    AllowOverride all
    Options None
    Require all granted
</Directory>

<IfModule headers_module>
    RequestHeader unset Proxy early
</IfModule>

<IfModule mime_module>
    TypesConfig conf/mime.types
    AddType application/x-compress .Z
    AddType application/x-gzip .gz .tgz
</IfModule>

<IfModule proxy_html_module>
    Include conf/extra/proxy-html.conf
</IfModule>

<IfModule ssl_module>
    SSLRandomSeed startup builtin
    SSLRandomSeed connect builtin
</IfModule>
```

3. **Restart Apache-Webserver**:

\- Press ++windows+r++ , type `cmd` and press Enter.<br>
\- Or type `cmd` in the Windows search bar to open the command prompt

Enter the following command to restart the Apache web server:

```winbatch
C:\ProgramData\i-doit\apache-2.4\bin\httpd.exe -k restart
```

The Apache web server has now been restarted. Check the installation and whether i-doit is accessible via HTTPS.

That's it! Your i-doit installation is now configured for SSL on Windows.

## Uninstallation

To uninstall i-doit, the Apache2 service must be stopped first.<br>
For this we enter the following command in the command prompt:

```
C:\ProgramData\i-doit\apache-2.4\bin\httpd.exe -k stop
```

Once the Apache2 service is stopped, Apache2 can be uninstalled:

```
C:\ProgramData\i-doit\apache-2.4\bin\httpd.exe -k uninstall
```

Afterwards MariaDB is uninstalled by removing MariaDB under ==Add or Remove Programs==.

[![Uninstall MariaDB](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/2-idw.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/2-idw.png)

Now the i-doit folder must be deleted and the PHP `PATH` must be removed from the environment variables:

[![Uninstall PHP](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/3-idw.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/3-idw.png)

## install i-doit Discovery for Windows server

In this section we describe how to install idoit Discovery.<br >
The i-doit Discovery Package can be found on our [website](https://www.i-doit.com/en/i-doit-discovery/).

The contents of the package are as follows:

-   i-doit Discovery Installer.exe
-   idoit-XX.zip
-   src.zip
-   windowsdesktop-runtime-6.0.14-win-x64.exe

The installation package will always include the latest [i-doit version](../../../version-history/index.md) as well as JDisc 5.0 and multiple JDisc add-ons. Also the `src.zip` folder allows for an installation without internet connection.<br>
Since the i-doit Windows installer requires ==windowsdesktop-runtime-6.0.14==, this is also provided in case there is no internet connection available.

### installation

After running the `i-doit Discovery Installer.exe` you will see the following GUI:

[![GUI Discovery](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/4-idw.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/4-idw.png)

After clicking Install, all the required items will be installed in the background.

The following will be installed:

-   ==Apache 2.4==
-   ==PHP 8.X==
-   ==MariaDB 10.X==
-   ==i-doit==
-   ==JDisc 5.X==
-   ==JDisc JDisc Discovery Dependency Mapping 5.X(Add-on)==
-   ==JDisc Discovery Device History 5.X(Add-on)==
-   ==JDisc Discovery Measurement 5.X(Add-on)==
-   ==JDisc Discovery Measurement 5.X(Add-on)==
-   ==JDisc Discovery Security 5.X(Add-on)==
-   ==JDisc Discovery WEB UI 5.X(Add-on)==

!!! info "If the Windows Firewall is activated, you will be asked if want to trust the application"

If the installation was successful, a small window with the message "==i-doit Discovery has been installed successfully.==" will display.<br>
After clicking ==OK== a new browser tab with the `localhost` URL will be opened automatically and you can use i-doit to the full extent.

!!! info "If an error occurred during the installation, a log file is automatically created in the i-doit folder"

### Configuration

To configure PHP, MariaDB or Apache, you can find the respective config files in the following directories:

-   ==PHP:==<br>
    `C:\ProgramData\i-doit-discovery\php\php.ini`

-   ==MariaDB:==<br>
    `C:\ProgramData\MariaDB\data\my.ini`

-   ==Apache:==<br>
    `C:\ProgramData\i-doit-discovery\apache-2.4\conf\httpd.conf`

## Credentials

The following credentials are set by the installer.

| What | Username | Password |
|-|-|-|
| MariaDB root | root | idoit |
| MariaDB i-doit | idoit | idoit |
| i-doit Admin Center | - | admin |

For i-doit Login credentials see [here](../../../basics/initial-login.md).

### Uninstallation

To uninstall i-doit-discovery, the Apache2 service must be stopped first.<br>
For this we enter the following command in the command prompt:

```
C:\ProgramData\i-doit-discovery\apache-2.4\bin\httpd.exe -k stop
```

Once the Apache2 service is stopped, Apache2 can be uninstalled:

```
C:\ProgramData\i-doit-discovery\apache-2.4\bin\httpd.exe -k uninstall
```

Afterwards MariaDB is uninstalled by removing MariaDB under ==Add or Remove Programs==.

[![Uninstall MariaDB](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/2-idw.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/2-idw.png)

Additionally JDisc and it's respective add-ons need to be removed under ==Add or Remove Programs==.

!!! warning "The JDisc add-ons need to be removed before removing JDisc itself!"

[![Uninstall JDisc](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/5-idw.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/5-idw.png)

Now the i-doit-discovery folder must be deleted and the PHP `PATH` must be removed from the environment variables:

[![Uninstall PHP](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/3-idw.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/3-idw.png)
