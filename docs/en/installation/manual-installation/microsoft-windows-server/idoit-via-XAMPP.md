---
title: "i-doit via XAMPP"
description: "This article describes how to install i-doit on the Windows operating system."
icon:
status:
lang: en
---
# i-doit via XAMPP

This article describes how to install i-doit on the Windows operating system with XAMPP.

!!! info "This article was last verified for i-doit version **39.1**"

!!! note "Tested on 22.10.2026 with Windows Server 2022, XAMPP 8.2.12 (Apache 2.4.58), PHP 8.2.35 (Thread Safe) and MariaDB 10.11.19"

!!! warning "XAMPP is only used for Apache and PHP"
    The latest XAMPP package for Windows is `xampp-windows-x64-8.2.12-0-VS16` from November 2023. It contains PHP 8.2.12 and MariaDB 10.4.32. Since version 30, i-doit requires at least **MariaDB 10.6**, and PHP 8.2.12 has known security vulnerabilities. Therefore, we only install **Apache** and **PHP** from XAMPP, update PHP to the current version and install MariaDB separately.<br>
    PHP 8.2 is deprecated for i-doit, PHP 8.4 is recommended. There is no XAMPP package with PHP 8.4. Observe the [system requirements](../../system-requirements.md).

!!! attention "Firewall"
    For our installation, we disable the Windows Firewall so that RDP and the connection to the web server work. Of course, the applications and ports should be specifically configured in the firewall, but we do not want to focus on this in this guide.

All commands in this guide are run in **PowerShell as administrator**.

## Step 1: Install XAMPP

Download the installation package `xampp-windows-x64-8.2.12-0-VS16-installer.exe` from [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html) and start it.
Confirm the warning about User Account Control (UAC) with **OK**.

Select only **Apache** and **PHP** as components. Clear all other components, in particular **MySQL** and **phpMyAdmin**.

[![Components](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-komponenten.png)](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-komponenten.png)

The default folder is kept → **C:\xampp**. Do not install XAMPP under `C:\Program Files`, because write permissions are missing there.

[![Installation path](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-pfad.png)](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-pfad.png)

We keep the language at **English**.

[![Installation language](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-sprache.png)](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-sprache.png)

**Next >** starts the installation. On the last page, you can clear the check box for the Control Panel, because we run Apache as a Windows service. **Finish** completes the installation.

## Step 2: Update PHP

XAMPP ships PHP 8.2.12. Replace PHP right after the installation with the current 8.2.x version (**Thread Safe**), as described in the **XAMPP** section of the guide [PHP security update on Windows](../../../maintenance-and-operation/php-security-update-windows.md). Since Apache is not running yet, nothing needs to be stopped beforehand.

Then check the version:

```powershell
C:\xampp\php\php.exe -v
```

## Step 3: Configure PHP and Apache

### PHP

Open the file `C:\xampp\php\php.ini` in an editor.

Under **Dynamic Extensions**, enable the following extensions by removing the semicolon at the beginning of the line:

```ini
extension=gd
extension=intl
extension=ldap
extension=soap
extension=sockets
extension=zip
```

The line `;extension=openssl` stays commented out. XAMPP already loads OpenSSL at the end of the file via `extension=php_openssl.dll`.

Then add the following settings at the end of the file and save:

```ini
allow_url_fopen = On
file_uploads = On
max_execution_time = 300
max_file_uploads = 42
max_input_time = 60
max_input_vars = 10000
memory_limit = 256M
post_max_size = 128M
register_argc_argv = On
short_open_tag = On
upload_max_filesize = 128M
display_errors = Off
display_startup_errors = Off
error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT
log_errors = On
default_charset = "UTF-8"
default_socket_timeout = 60
date.timezone = Europe/Berlin
session.gc_maxlifetime = 604800
session.cookie_lifetime = 0
```

`date.timezone` must match the Windows time zone. Otherwise i-doit reports a time difference between PHP and MariaDB in the system overview under **System Config Check**.

The file `libsasl.dll` for LDAP does not need to be copied. XAMPP already ships it in `C:\xampp\apache\bin`.

### Apache

For Apache to load the PHP extension `curl`, it needs some libraries from the PHP folder. Open the file `C:\xampp\apache\conf\extra\httpd-xampp.conf` and add these four lines directly below the line `LoadFile "C:/xampp/php/libsqlite3.dll"`:

```apache
LoadFile "C:/xampp/php/brotlicommon.dll"
LoadFile "C:/xampp/php/brotlidec.dll"
LoadFile "C:/xampp/php/libssh2.dll"
LoadFile "C:/xampp/php/nghttp2.dll"
```

Without these lines, the Apache log `logs\error.log` shows the message `Unable to load dynamic library 'curl'`, and i-doit cannot establish connections over HTTPS, for example for the update check.

Set up Apache as a Windows service and start it:

```powershell
C:\xampp\apache\bin\httpd.exe -k install
Start-Service Apache2.4
```

The service `Apache2.4` then starts automatically with Windows. A Windows Firewall prompt may appear.

## Step 4: Install MariaDB

Download MariaDB **10.11** as an MSI package for Windows (`mariadb-10.11.x-winx64.msi`) from [https://mariadb.org/download/](https://mariadb.org/download/) and install it. In the wizard, set a password for the user `root` and let MariaDB install as a service named **MariaDB** on port **3306**.

Alternatively, the package can be installed without the wizard. Replace `<password>` with your own password and the file name with the downloaded version:

```powershell
msiexec /i mariadb-10.11.19-winx64.msi /qn SERVICENAME=MariaDB PASSWORD=<password> PORT=3306
```

Then open the file `C:\Program Files\MariaDB 10.11\data\my.ini`. The `[mysqld]` section already contains `datadir`, `port` and `innodb_buffer_pool_size`. The setup sets `innodb_buffer_pool_size` according to the available memory; keep it. Add the following settings below it, before the `[client]` section, and save:

```ini
innodb_log_file_size = 512M
innodb_sort_buffer_size = 64M
sort_buffer_size = 262144
join_buffer_size = 262144
max_allowed_packet = 128M
max_heap_table_size = 32M
query_cache_min_res_unit = 4096
query_cache_type = 1
query_cache_limit = 5M
query_cache_size = 80M
tmp_table_size = 32M
max_connections = 200
innodb_file_per_table = 1
innodb_flush_log_at_trx_commit = 1
innodb_flush_method = O_DIRECT
innodb_lru_scan_depth = 2048
table_definition_cache = 1024
table_open_cache = 2048
innodb_stats_on_metadata = 0
table_open_cache_instances = 8
sql-mode = ""
```

Restart MariaDB:

```powershell
Restart-Service MariaDB
```

## Step 5: Download and extract i-doit

Download the latest version of i-doit from the [customer portal](../../../administration/customer-portal.md).
Extract `idoit-xx.zip` into the new folder `C:\xampp\htdocs\idoit`. The folder then directly contains the subfolders `admin`, `src`, `setup` and so on.

## Step 6: Check the installation

Open `http://<i-doit-host>/idoit/` in a browser. The i-doit installation page with the check of the system requirements appears.
During setup, enter `127.0.0.1` with port `3306` as the database server and the MariaDB user `root` with the password from step 4.

## Next Step

The operating system is now prepared so that i-doit can be installed:

[Continue to **Setup**](../../manual-installation/setup.md)

For later PHP updates, use the guide [PHP security update on Windows](../../../maintenance-and-operation/php-security-update-windows.md). The lines in `httpd-xampp.conf` from step 3 remain valid, because the libraries are replaced together with the PHP folder.
