---
title: Microsoft Windows Server
description: "This article describes how to install i-doit on the Windows operating system."
icon: material/microsoft-windows
status:
lang: en
---

# Microsoft Windows Server

This article describes how to install i-doit on the Windows operating system. The i-doit installation package for Windows is provided in the [customer portal](../../../administration/kundenportal.md).

The contents of the package are as follows:

-   i-doit Windows Installer.exe
-   idoit-XX.zip
-   src.zip
-   windowsdesktop-runtime-6.0.14-win-x64.exe

The installation package always includes the current [i-doit version](../../../versionshistorie/index.md). The `src.zip` folder also enables installation without an internet connection. Since the i-doit Windows installer requires `windowsdesktop-runtime-6.0.14`, it is also provided in case no internet connection is available during installation.

## installation

After running the `i-doit Windows Installer.exe`, the following GUI is displayed:

[![GUI](../../../assets/images/de/installation/microsoft-windows/i-doit-windows/2-idw.png)](../../../assets/images/de/installation/microsoft-windows/i-doit-windows/2-idw.png)

After clicking **Install**, all required components are installed in the background.

The following are installed:

-   **Apache 2.4**
-   **PHP 8.2**
-   **MariaDB 10.6**
-   **i-doit**

!!! info "If the Windows Firewall is enabled, you will be asked whether to allow the application"

On successful installation, a small window displays **"i-doit has been installed successfully."**. After clicking **OK**, a new browser tab with the `localhost` URL opens automatically and you can use i-doit to its full extent.

!!! info "If an error occurs during installation, a log file is automatically created in the i-doit folder"

## Configuration

The storage location of the PHP, MariaDB, or Apache configuration:

-   **PHP:**
    `C:\ProgramData\i-doit\php\php.ini`

-   **MariaDB:**
    `C:\ProgramData\MariaDB\data\my.ini`

-   **Apache:**
    `C:\ProgramData\i-doit\apache-2.4\conf\httpd.conf`

## Credentials

Here you can find the login data for the i-doit Windows Installer:

| Platform                  | Username              | Password |
| ------------------------- | --------------------- | -------- |
| MariaDB root              | root                  | idoit    |
| MariaDB i-doit            | idoit                 | idoit    |
| i-doit Admin-Center       | admin                 | admin    |
| installation directory    | C:\ProgramData\i-doit | -        |

The i-doit login credentials can be found [here](../../../grundlagen/erstanmeldung.md).

## Set Up HTTPS (Optional)

The following guide shows how to set up SSL for Windows with i-doit. Only the necessary steps to configure HTTPS are described. This section can be skipped.

### Prerequisites

You first need a valid certificate in `.crt` and `.key` format. You can create this with OpenSSL. You can download and install OpenSSL, for example, here: [OpenSSL](https://slproweb.com/products/Win32OpenSSL.html). Once OpenSSL is installed, you can open the Win64 OpenSSL Command Prompt via the Windows search bar by searching for "OpenSSL".
Enter the following command to create the certificate:

```batch
OpenSSL req -x509 -sha256 -nodes -days 365 -newkey rsa:4096 -keyout private.key -out certificate.crt
```

The certificate and private key have now been created in the folder where the command was executed. Copy them, for example, to the folder `ProgramData\i-doit\apache-2.4\conf\extra\`.

### Configuration Steps

#### 1. **Create the ssl.conf File**

Navigate to your i-doit folder at `ProgramData\i-doit\apache-2.4\conf\extra\` and create the file `ssl.conf`. The file should have the following content:
<!-- cSpell:disable -->
```conf
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
<!-- cSpell:enable -->
**Note:** Adjust the paths and configuration settings according to your own environment and make sure your certificate and private key are present in the specified paths.

#### 2. **Modifications in httpd.conf**

Edit the `httpd.conf` file located at `i-doit\apache-2.4\conf\` 

-   Add `Listen 443` and comment out `Listen 80`. This will make i-doit no longer accessible via HTTP.
-   Also add the following lines: `LoadModule ssl_module modules/mod_ssl.so` and `Include conf/extra/ssl.conf`

The file should then look like this if nothing was changed before:
<!-- cSpell:disable -->
```conf
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
<!-- cSpell:enable -->
#### 3. **Restart Apache Web Server**

-   Press ++windows+r++, type `cmd`, and press Enter.
-   Or type `cmd` in the Windows search bar to open the command prompt

Enter the following command to restart the Apache web server:

```batch
C:\ProgramData\i-doit\apache-2.4\bin\httpd.exe -k restart
```

The Apache web server has now been restarted. Check the installation and whether i-doit is accessible via HTTPS.

That's it! Your i-doit installation is now configured for SSL on Windows.

### Uninstallation

To uninstall i-doit, the Apache2 service must first be stopped. Enter the following command in the command prompt:

```batch
C:\ProgramData\i-doit\apache-2.4\bin\httpd.exe -k stop
```

Once the Apache2 service is stopped, Apache2 can be uninstalled:

```batch
C:\ProgramData\i-doit\apache-2.4\bin\httpd.exe -k uninstall
```

Then uninstall MariaDB by removing it under **Add or remove programs**.

[![Uninstall MariaDB](../../../assets/images/de/installation/microsoft-windows/i-doit-windows/3-idw.png)](../../../assets/images/de/installation/microsoft-windows/i-doit-windows/3-idw.png)

Now the i-doit folder must be deleted and the PHP `PATH` must be removed from the environment variables:

[![Uninstall PHP](../../../assets/images/de/installation/microsoft-windows/i-doit-windows/4-idw.png)](../../../assets/images/de/installation/microsoft-windows/i-doit-windows/4-idw.png)

## Install i-doit Discovery for Windows Server

This section describes how to install i-doit Discovery. The i-doit Discovery package can be found on our [website](https://www.i-doit.com/en/i-doit-discovery/).

The contents of the package are as follows:

-   i-doit Discovery Installer.exe
-   idoit-XX.zip
-   src.zip
-   windowsdesktop-runtime-6.0.14-win-x64.exe

The installation package always contains the latest [i-doit version](../../../versionshistorie/index.md) as well as JDisc 5.0 and several JDisc add-ons. The `src.zip` folder also enables installation without an internet connection. Since the i-doit Windows installer requires **windowsdesktop-runtime-6.0.14**, it is also included in case no internet connection is available.

### installation

After running the `i-doit Discovery Installer.exe`, you will see the following GUI:

[![GUI Discovery](../../../assets/images/de/installation/microsoft-windows/i-doit-windows/5-idw.png)](../../../assets/images/de/installation/microsoft-windows/i-doit-windows/5-idw.png)

After clicking Install, all required components are installed in the background.

The following components are installed:

-   **Apache 2.4**
-   **PHP 8.2**
-   **MariaDB 10.6**
-   **i-doit**
-   **JDisc 5.X**
-   **JDisc JDisc Discovery Dependency Mapping 5.X(Add-on)**
-   **JDisc Discovery Device History 5.X(Add-on)**
-   **JDisc Discovery Measurement 5.X(Add-on)**
-   **JDisc Discovery Security 5.X(Add-on)**
-   **JDisc Discovery WEB UI 5.X(Add-on)**

!!! info "If the firewall is enabled, you will be asked whether you trust the software"

After the installation is successful, a small window appears with the following message: **"i-doit Discovery has been successfully installed."**. After clicking **OK**, a new window opens in your browser where the `localhost` URL is automatically opened. You can now use i-doit Discovery to its full extent.

!!! info "If an error occurs during installation, a log file is created in the i-doit Discovery folder."

### Configuration

The configuration files for PHP, MariaDB, or Apache can be found in the following directories:

-   **PHP:**
    `C:\ProgramData\i-doit-discovery\php\php.ini`

-   **MariaDB:**
    `C:\ProgramData\MariaDB\data\my.ini`

-   **Apache:**
    `C:\ProgramData\i-doit-discovery\apache-2.4\conf\httpd.conf`

## Credentials

Here you can find the login data for the i-doit Windows Installer:
<!-- cSpell:disable -->
| Platform                   | Username                        | Password       |
| -------------------------- | ------------------------------- | -------------- |
| MariaDB root               | root                            | idoit          |
| MariaDB i-doit             | idoit                           | idoit          |
| i-doit Admin-Center        | admin                           | admin          |
| JDisc Database            | postgres                        | idoitdiscovery |
| JDisc Database (ReadOnly) | postgresro                      | idoit          |
| installation directory     | C:\ProgramData\i-doit-discovery | -              |
<!-- cSpell:enable -->
The i-doit login credentials can be found [here](../../../grundlagen/erstanmeldung.md).

### Uninstallation

To uninstall i-doit, the Apache2 service must first be stopped. Enter the following command in the command prompt:

```batch
C:\ProgramData\i-doit-Discovery\apache-2.4\bin\httpd.exe -k stop
```

Once the Apache2 service is stopped, Apache2 can be uninstalled:

```batch
C:\ProgramData\i-doit-Discovery\apache-2.4\bin\httpd.exe -k uninstall
```

Then uninstall MariaDB by removing it under **Add or remove programs**.

[![Uninstall MariaDB](../../../assets/images/de/installation/microsoft-windows/i-doit-windows/3-idw.png)](../../../assets/images/de/installation/microsoft-windows/i-doit-windows/3-idw.png)

Additionally, JDisc and its add-ons must be removed under **Add or remove programs**.

!!! warning "The JDisc add-ons must be uninstalled before JDisc!"

[![Uninstall JDisc](../../../assets/images/de/installation/microsoft-windows/i-doit-windows/6-idw.png)](../../../assets/images/de/installation/microsoft-windows/i-doit-windows/6-idw.png)

Now the i-doit folder must be deleted and the PHP `PATH` must be removed from the environment variables:

[![Uninstall PHP](../../../assets/images/de/installation/microsoft-windows/i-doit-windows/4-idw.png)](../../../assets/images/de/installation/microsoft-windows/i-doit-windows/4-idw.png)

## FAQ

### Improved Website Loading

On Windows, i-doit takes longer to load in the browser. This is usually due to the antivirus scanner configuration under Windows. You should create an exception for the following i-doit directories:

-   [path](#konfiguration)`\htdocs\admin`
-   [path](#konfiguration)`\htdocs\images`
-   [path](#konfiguration)`\htdocs\log`
-   [path](#konfiguration)`\htdocs\src`
