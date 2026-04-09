---
title: "i-doit via XAMPP"
description: "This article describes how to install i-doit on the Windows operating system."
icon:
status:
lang: en
---
# i-doit via XAMPP

This article describes how to install i-doit on the Windows operating system.

!!! info "This article was last verified for i-doit version **31**"

!!! attention "Firewall"
    For our installation, we disable the Windows Firewall so that RDP and the connection to the web server work. Of course, the applications and ports should be specifically configured in the firewall, but we do not want to focus on this in this guide.

## Step 1: installation

![type:video](../../../assets/images/de/installation/microsoft-windows/xampp/xampp-installation-unter-windows.mp4)

First, download the XAMPP package from [https://www.apachefriends.org/de/index.html](https://www.apachefriends.org/de/index.html) .<br>
Other packages also work. For example, the compressed package (.zip) can also simply be extracted to C:\\.<br>
It is important when installing XAMPP that the installation path is "C:\\xampp", because the directory "C:\\Program Files (x86)" does not have sufficient permissions and therefore the installation will most likely not work correctly.

The [system requirements](../../system-requirements.md) of the respective i-doit version must be observed. Therefore, in this example, the installation package → xampp-windows-x64-8.2.12-0-VS16-installer.exe with PHP 8.2, which has been supported since i-doit 30, is used.

At least the components **Apache**, **MySQL**, and **PHP** must be installed.<br>
[![installation](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation.png)](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation.png)

The default folder is kept → **C:\xampp**

[![installationspfad](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-pfad.png)](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-pfad.png)

Then we select the language; we keep it at **English**.

[![installationssprache](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-sprache.png)](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-sprache.png)

The next **Next >** buttons should be self-explanatory.

[![installations abschließen](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-fertig.png)](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-fertig.png)

The installation is now complete and we start the XAMPP Control Panel by clicking Finish.

[![installation-control-panel](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-control-panel.png)](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-1-installation-control-panel.png)

## Step 2: Environment Configuration

### PHP

Now we configure PHP. Click the Config button → PHP (php.ini) to open php.ini.

[![Configuration-PHP](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-2-php.png)](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-2-php.png)

Normally, the file should open automatically in the editor. We add the following settings at the end of the file and save:

```ìni
allow_url_fopen = Yes
file_uploads = On
magic_quotes_gpc = Off
max_execution_time = 300
max_file_uploads = 42
max_input_time = 60
max_input_vars = 10000
memory_limit = 256M
post_max_size = 128M
register_argc_argv = On
register_globals = Off
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

_Additionally, it may be necessary for the LDAP extension to copy the file **libsasl.dll** from **C:\xampp\php** to **C:\xampp\apache\bin**.<br>
Additionally, in the php.ini under Dynamic Extensions, the leading semicolons must be removed from ;extension=ldap and ;extension=gd._

### Apache Web Server

No separate settings for the Apache web server are necessary here.

### MySQL/MariaDB

Now we configure MySQL/MariaDB. Click the Config button → my.ini.

[![Configuration-MySQL](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-2-mysql.png)](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-2-mysql.png)

Normally, this file should also open automatically in the editor. We also add the following settings at the end of the file and save:

```ìni
[mysqld]

# This is the number 1 setting to look at for any performance optimization
# It is where the data and indexes are cached: having it as large as possible will
# ensure MySQL uses memory and not disks for most read operations.
#
# Typical values are 1G (1-2GB RAM), 5-6G (8GB RAM), 20-25G (32GB RAM), 100-120G (128GB RAM).
innodb_buffer_pool_size = 1G

# Use multiple instances if you have innodb_buffer_pool_size > 10G, 1 every 4GB
innodb_buffer_pool_instances = 1

# Redo log file size, the higher the better.
# MySQL/MariaDB writes two of these log files in a default installation.
innodb_log_file_size = 512M

innodb_sort_buffer_size = 64M
sort_buffer_size = 262144 # default
join_buffer_size = 262144 # default

max_allowed_packet = 128M
max_heap_table_size = 32M
query_cache_min_res_unit = 4096
query_cache_type = 1
query_cache_limit = 5M
query_cache_size = 80M

tmp_table_size = 32M
max_connections = 200
innodb_file_per_table = 1

# Disable this (= 0) if you have only one to two CPU cores, change it to 4 for a quad core.
innodb_thread_concurrency = 0

# Disable this (= 0) if you have slow harddisks
innodb_flush_log_at_trx_commit = 1
innodb_flush_method = O_DIRECT

innodb_lru_scan_depth = 2048
table_definition_cache = 1024
table_open_cache = 2048
# Only if your have MySQL 5.6 or higher, do not use with MariaDB!
#table_open_cache_instances = 4

innodb_stats_on_metadata = 0

sql-mode = ""
```

## Step 3: Starting Apache and MySQL

We click the![start-button](../../../assets/images/de/installation/microsoft-windows/xampp/start.png) Start button for Apache and MySQL. A firewall popup may appear.<br>
Both modules should now be highlighted in green.

[![Service-start](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-3-start.png)](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-3-start.png)

### Password for MySQL root

Now we should set a password for the MySQL root user.<br>
To do this, we click the ![shell-button](../../../assets/images/de/installation/microsoft-windows/xampp/shell.png) Shell button.

[![shell-control-panel](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-3-passwort-root.png)](../../../assets/images/de/installation/microsoft-windows/xampp/schritt-3-passwort-root.png)

First, we log in:

```sql
    mysql -u root
```

Now we change the password; '_thisistotallysecure!!11_' should be replaced with your own password:

```sql
    ALTER USER 'root'@'localhost' IDENTIFIED BY 'thisistotallysecure!!11';
```

## Step 4: Download and Extract i-doit

### Download and Extract i-doit

Now we download i-doit in the latest version from the [customer portal](../../../administration/customer-portal.md).<br>
Extract the idoit-xx.x.zip to C:\\xampp\\htdocs and rename the idoit-xx.x folder to idoit.

## Step 5: Verify the installation

With the previous configuration, we have prepared the web server. Now, when we open the IP of the system or localhost in a browser, the Apache welcome page should be displayed.<br>
Under PHPInfo in the menu, you can verify whether the values set in php.ini have been correctly applied.

## Next Step

The operating system is now prepared so that i-doit can be installed:

[Continue to **Setup**](../../manual-installation/setup.md)

## FAQ

With XAMPP "xampp-windows-x64-8.0.23-0-VS16-installer" a new version of the PHP gd extension was added.<br>
Therefore, the php.ini should not be replaced with the PHP7.4 version.

In PHP 7.4, this was called extension=gd2, and in PHP 8.0 it is called extension=gd.
