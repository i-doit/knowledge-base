**Contents**

*   1[System Requirements](#SuseLinuxEnterpriseServer(SLES)-SystemRequirements)
*   2[Installation of the Packages](#SuseLinuxEnterpriseServer(SLES)-InstallationofthePackages)
*   3[Configuration](#SuseLinuxEnterpriseServer(SLES)-Configuration)
    *   3.1[PHP](#SuseLinuxEnterpriseServer(SLES)-PHP)
    *   3.2[Apache Webserver](#SuseLinuxEnterpriseServer(SLES)-ApacheWebserver)
    *   3.3[MariaDB](#SuseLinuxEnterpriseServer(SLES)-MariaDB)
*   4[Next Step](#SuseLinuxEnterpriseServer(SLES)-NextStep)

In this article we explain in just a few steps which packages need to be installed and configured.  

System Requirements  

----------------------

The general [system requirements](https://kb.i-doit.com/display/en/System+Requirements) apply.

This article refers to [**Suse Linux Enterprise Server 15**](https://www.suse.com/solutions/enterprise-linux/). In order to find out which version is used you can carry out the following command:

[?](#)

`cat` `/etc/os-release`

As system architecture you should use a x86 in 64bit:  

[?](#)

`uname` `-m`

**`x86_64`** means 64bit, **`i386`** or **`i686`** only 32bit.

Installation of the Packages
----------------------------

The default package repositories of Suse Linux Enterprise Server (SLES) already supply the necessary packages to install:

*   the **Apache** web server 2.4
*   the script language **PHP** 7.2 (as of SLES 15 SP 2: **PHP** 7.4)
*   the database management system **MariaDB** 10.2 (as of SLES 15 SP 2: **MariaDB** 10.4) and
*   the caching server **memcached**

First of all, you have to activate additional add-ons in **Yast**:

*   **Web and Scripting Module**

You can check with the following command if both add-ons are activated:

[?](#)

`sudo` `zypper repos -E`

Afterwards the required packages are installed with `zypper`:

[?](#)

`sudo` `zypper refresh`

`sudo` `zypper update`

`sudo` `zypper` `install` `\`

`apache2 apache2-mod_php7 \`

`mariadb mariadb-client \`

`memcached \`

`php7 php7-bcmath php7-bz2 php7-ctype php7-curl php7-gd php7-gettext php7-fileinfo \`

`php7-json php7-ldap php7-mbstring php7-mcrypt php7-memcached php7-mysql php7-opcache \`

`php7-openssl php7-pdo php7-pgsql php7-phar php7-posix php7-soap php7-sockets php7-sqlite \`

`php7-xsl php7-zip php7-zlib`

In order to start Apache Webserver and MariaDB during the boot process, the following commands are necessary:

[?](#)

`sudo` `systemctl` `enable` `apache2.service`

`sudo` `systemctl` `enable` `mysql.service`

`sudo` `systemctl` `enable` `memcached.service`

Then both services are started:

[?](#)

`sudo` `systemctl start apache2.service`

`sudo` `systemctl start mysql.service`

`sudo` `systemctl start memcached.service`

The HTTP default port 80 is authorized via the firewall. The firewall has to be restarted after the adjustments have been carried out:

[?](#)

`sudo` `firewall-cmd –zone=public –add-port=80``/tcp` `--permanent`

Configuration
-------------

The installed packages for Apache web server, PHP and MariaDB already supply configuration files. It is recommended to save changed settings in separate files instead of adjusting the already existing configuration files. Otherwise, any differences to the existing files would be pointed out or even overwritten during each package upgrade. The settings of the default configuration are supplemented or overwritten by user-defined settings.

### PHP

First of all, a new file is created and filled with the required settings:

[?](#)

`sudo` `nano` `/etc/php7/conf``.d``/i-doit``.ini`

This file has the following contents:

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

`mysqli.default_socket =` `/var/run/mysql/mysql``.sock`

The value (in seconds) of `**session.gc_maxlifetime**` should be the same or greater than the `**Session Timeout**` in the [system settings](https://kb.i-doit.com/display/en/System+Settings+-+Administration) of i-doit.

The **`date.timezone`** parameter should be adjusted to the local time zone (see [List of supported time zones](http://php.net/manual/en/timezones.php)).

Afterwards, the Apache web server is restarted:

[?](#)

`sudo` `systemctl restart apache2.service`

### Apache Webserver

A new VHost configuration is created from the existing template **vhost.template**:

[?](#)

`sudo` `nano` `/etc/apache2/vhosts``.d``/i-doit``.conf`

In this file the VHost configuration is modified and saved:

[?](#)

`<VirtualHost *:80>`

`ServerAdmin i-doit@example.net`

`DocumentRoot` `/srv/www/htdocs/`

`<Directory` `/srv/www/htdocs/``>`

`AllowOverride All`

`Require all granted`

`<``/Directory``>`

`LogLevel warn`

`ErrorLog ${APACHE_LOG_DIR}``/error``.log`

`CustomLog ${APACHE_LOG_DIR}``/access``.log combined`

`<``/VirtualHost``>`

i-doit includes differing Apache settings in files with the name `**.htaccess**`. The setting `**AllowOverride All**` is required so that these settings are taken into account.

With the next step you activate the necessary Apache modules `**php7**`, `**rewrite**` and `**mod_access_compat**` and the Apache web server is restarted:

[?](#)

`sudo` `a2enmod php7`

`sudo` `a2enmod rewrite`

`sudo` `a2enmod mod_access_compat`

`sudo` `systemctl restart apache2.service`

### MariaDB

Only a few steps are necessary to guarantee that MariaDB provides a good performance and safe operation. However, you should pay meticulous attention to details and carry out these steps precisely. This starts with a secure installation and you should follow the recommendations accordingly. The `**root**`  user should receive a secure password:

[?](#)

`mysql_secure_installation`

Activate the MariaDB shell so that i-doit is enabled to apply the `**root**`  user during setup:

[?](#)

`sudo` `mysql -uroot`

The following SQL statements are now carried out in the MariaDB shell:

[?](#)

`UPDATE` `mysql.``user` `SET` `plugin =` `'mysql_native_password'` `WHERE` `User` `=` `'root'``;`

`FLUSH` `PRIVILEGES``;`

`EXIT;`

Afterwards, MariaDB is stopped. Now it is important to move files which are not required, otherwise the result would be a significant loss of performance:

[?](#)

`mysql -uroot -p -e``"SET GLOBAL innodb_fast_shutdown = 0"`

`sudo` `systemctl stop mysql.service`

`sudo` `mv` `/var/lib/mysql/ib_logfile``[01]` `/tmp`

A new file is created for the deviating configuration settings:

[?](#)

`sudo` `nano` `/etc/my``.cnf.d``/99-i-doit``.cnf`

This file contains the new configuration settings. For an optimal performance you should adapt these settings to the (virtual) hardware:

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

Finally, MariaDB is started:

[?](#)

`sudo` `systemctl start mysql.service`

Next Step
---------

Now the operating system is prepared and i-doit can be installed.

Proceed with [**Setup** …](https://kb.i-doit.com/display/en/Setup)