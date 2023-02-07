How to install i-doit under the Windows operating system, we describe in this article.

  

**Content**

*   1[Step 1: Installation of XAMPP](#MicrosoftWindowsServer-Step1:InstallationofXAMPP)
*   2[Step 2: Configuration of XAMPP](#MicrosoftWindowsServer-Step2:ConfigurationofXAMPP)
    *   2.1[PHP](#MicrosoftWindowsServer-PHP)
    *   2.2[MySQL/MariaDB](#MicrosoftWindowsServer-MySQL/MariaDB)
*   3[Step 3: Start Apache and MySQL](#MicrosoftWindowsServer-Step3:StartApacheandMySQL)
    *   3.1[Password for the MySQL root](#MicrosoftWindowsServer-PasswordfortheMySQLroot)
*   4[Step 4: Download and unzip i-doit](#MicrosoftWindowsServer-Step4:Downloadandunzipi-doit)
    *   4.1[Download and unzip i-doit](#MicrosoftWindowsServer-Downloadandunzipi-doit)
*   5[Step 5: Checking the installation](#MicrosoftWindowsServer-Step5:Checkingtheinstallation)
    *   5.1[FAQ](#MicrosoftWindowsServer-FAQ)

This article was last checked for i-doit version **1.16.3**

Firewall

We deactivate the Windows Firewall for our installation so that RDP and the connection to the Webserver will function. The applications and ports should be configured precisely in the Firewall, however, we don't want to focus on that in this article.

Step 1: Installation of XAMPP
-----------------------------

First of all, download the XAMPP package at [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html). Here we use the installer (xampp-win32-XXX-installer.exe). Other packages are fine too. The compressed package (.zip), for example, can simply be extracted to C:\\. It is important to note that the installation path for XAMPP has to be "C:\\xampp" as "C:\\Program Files (x86)" has not enough permission rights, which most likely will result in a faulty installation. Bitnami is not needed and can be unchecked in the installation process.

Here the [System Requirements](/display/en/System+Requirements) of the respective i-doit version must be considered. Therefore, in this example the installation package → `xampp-windows-x64-7.4.20-0-VC15-installer.exe`

At least the components **Apache**, **MySQL** and **PHP** must be installed.

![](/download/attachments/36864040/Schritt-1%20Installation.png?version=1&modificationDate=1631697373044&api=v2&effects=drop-shadow)

The default folder is left as → **`C:\xampp`**

**![](/download/attachments/36864040/Schritt-1%20Installation-Pfad.png?version=1&modificationDate=1631697672042&api=v2&effects=drop-shadow)**

Then we select the language, I leave it at **English**.

![](/download/attachments/36864040/Schritt-1%20Installation-Sprache.png?version=2&modificationDate=1631697733325&api=v2&effects=drop-shadow)

The next few **Next** \> buttons should be self-explanatory.

![](/download/attachments/36864040/Schritt-1%20Installation-Fertig.png?version=1&modificationDate=1631697786363&api=v2&effects=drop-shadow)

Now the installation is finished and we start the control panel of XAMPP by clicking Finish.

![](/download/attachments/36864040/Schritt-1%20Installation-Control-Panel.png?version=1&modificationDate=1631697857485&api=v2&effects=drop-shadow)

Step 2: Configuration of XAMPP
------------------------------

### PHP

Now we configure PHP. For this we click on the button Config → PHP (php.ini) to open the php.ini.

![](/download/attachments/36864040/Schritt-2-PHP.png?version=1&modificationDate=1631698181000&api=v2&effects=drop-shadow)

Normally, the file should open automatically with the editor. We add the following settings at the end of the file and save:

[?](#)

`allow_url_fopen = Yes`

`file_uploads = On`

`magic_quotes_gpc = Off`

`max_execution_time = 300`

`max_file_uploads = 42`

`max_input_time = 60`

`max_input_vars = 10000`

`memory_limit = 256M`

`post_max_size = 128M`

`register_argc_argv = On`

`register_globals = Off`

`short_open_tag = On`

`upload_max_filesize = 128M`

`display_errors = Off`

`display_startup_errors = Off`

`error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT`

`log_errors = On`

`default_charset =` `"UTF-8"`

`default_socket_timeout = 60`

`date``.timezone = Europe``/Berlin`

`session.gc_maxlifetime = 604800`

`session.cookie_lifetime = 0`

_Additionally, for the LDAP extension, it may be necessary to copy the libsasl.dll file from C:\\xampp\\php\\ to C:\\xampp\\apache\\bin._  
_Also, under Dynamic Extensions, the ;extension=ldap must be freed from the leading semicolon._

Apache Webserver

Separate settings for the Apache web server are not necessary here.

### MySQL/MariaDB

Now we configure MySQL/MariaDB. For this we click on the button Config → my.ini.

![](/download/attachments/36864040/Schritt-2-MySQL.png?version=1&modificationDate=1631698335987&api=v2&effects=drop-shadow)

Normally, this file should also be opened automatically with the editor. We also add the following settings here at the end of the file and save:

[?](#)

`[mysqld]`

`# This is the number 1 setting to look at for any performance optimization`

`# It is where the data and indexes are cached: having it as large as possible will`

`# ensure MySQL uses memory and not disks for most read operations.`

`#`

`# Typical values are 1G (1-2GB RAM), 5-6G (8GB RAM), 20-25G (32GB RAM), 100-120G (128GB RAM).`

`innodb_buffer_pool_size = 1G`

`# Use multiple instances if you have innodb_buffer_pool_size > 10G, 1 every 4GB`

`innodb_buffer_pool_instances = 1`

`# Redo log file size, the higher the better.`

`# MySQL/MariaDB writes two of these log files in a default installation.`

`innodb_log_file_size = 512M`

`innodb_sort_buffer_size = 64M`

`sort_buffer_size = 262144` `# default`

`join_buffer_size = 262144` `# default`

`max_allowed_packet = 128M`

`max_heap_table_size = 32M`

`query_cache_min_res_unit = 4096`

`query_cache_type = 1`

`query_cache_limit = 5M`

`query_cache_size = 80M`

`tmp_table_size = 32M`

`max_connections = 200`

`innodb_file_per_table = 1`

`# Disable this (= 0) if you have only one to two CPU cores, change it to 4 for a quad core.`

`innodb_thread_concurrency = 0`

`# Disable this (= 0) if you have slow harddisks`

`innodb_flush_log_at_trx_commit = 1`

`innodb_flush_method = O_DIRECT`

`innodb_lru_scan_depth = 2048`

`table_definition_cache = 1024`

`table_open_cache = 2048`

`# Only if your have MySQL 5.6 or higher, do not use with MariaDB!`

`#table_open_cache_instances = 4`

`innodb_stats_on_metadata = 0`

`sql-mode =` `""`

Step 3: Start Apache and MySQL
------------------------------

We click on the Start![](/download/thumbnails/36864040/start.png?version=1&modificationDate=1631698445241&api=v2) button for Apache and MySQL. If necessary, a firewall popup will appear.  
Now both modules should be highlighted in green.

![](/download/attachments/36864040/Schritt-3%20Start.png?version=1&modificationDate=1631698456521&api=v2&effects=drop-shadow)

### Password for the MySQL root

Now we should set a password for the MySQL root user.  
For this we click on the shell![](/download/thumbnails/36864040/Shell.png?version=1&modificationDate=1631698565261&api=v2) button.

![](/download/attachments/36864040/Schritt-3%20Passwort%20root.png?version=1&modificationDate=1631698523956&api=v2&effects=drop-shadow)

First, we log in:

[?](#)

`mysql -u root`

Now we change the password, '_thisistotallysecure!!11_' should be replaced with your own password:

[?](#)

`ALTER` `USER` `'root'``@``'localhost'` `IDENTIFIED` `BY` `'thisistotallysecure!!11'``;`

Step 4: Download and unzip i-doit
---------------------------------

### Download and unzip i-doit

Now we download i-doit in the latest version from the customer portal.  
We unpack the idoit-1.xx.x.zip under C:\\xampp\\htdocs and rename the folder to idoit.

Step 5: Checking the installation
---------------------------------

With the previous configuration we have prepared the web server. Now, when we call the IP of the system or localhost in a browser, we should get the welcome page of Apache displayed.  
Under **PHPInfo** in the menu you can check if the values set in php.ini were taken over correctly.

Next Step

Now the operating system is prepared and i-doit can be installed.

Proceed to [**Setup** …](/display/en/Setup)

  

### FAQ

  

With XAMPP "xampp-windows-x64-8.0.23-0-VS16-installer" a new version of the PHP extension gd was added.  
Therefore the php.ini should not be replaced by the one of the PHP7.4 version.

For PHP 7.4 it was called "extension=gd2" and in PHP8.0 it is called "extension=gd".