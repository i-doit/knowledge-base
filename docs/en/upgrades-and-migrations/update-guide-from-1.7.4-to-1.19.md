---
title: Update Guide from i-doit 1.7.4 to 31
description: i-doit update guide
icon: 
status: new
lang: en
---

Here we you will find short instruction to Update your i-doit up to i-doit 1.19.<br>
You may need to Upgrade your Operating System.<br>
This instructions are valid for **Debian** and the commands used differ in other OS.Before you start, Download all updates you need to do and copy them in the i-doit root Folder.

!!! danger "**Important things to note before hand**"

    This Guide do not come with any warranty and may not work in your specific use case.<br>
    This depends on the configuration and installation type of your instance.

    Also needed **Add-on** updates are not mentioned.

!!! attention "Backup"

    Do a Backup or Snapshot **before each Update** step!

!!! attention "Release Notes"

    Read the [Release Notes](../version-history/index.md) before you Update to a new Version

!!! attention "Hotfix note"

    Please use Hotfixes exclusively with the specified version. Hotfixes will be included in newer versions so that a renewed installation is not necessary.

    Should you use an older i-doit version it is essential to make an update to the latest version first.

    If a Hotfix is required to update an older version, it can be found in the Hotfix subchapters here in the Knowledge Base.

    As these are Hotfixes we recommend installing them only when the adjustments are necessary for a flawless operation of your installation or you are requested by the support team to use them. Please ensure that you made a [backup of i-doit](../maintenance-and-operation/backup-and-recovery/index.md) before you use any Hotfix.

    Please inform us about the use of Hotfixes, should you contact our support team afterwards.

| <!-- --> | <!-- --> | <!-- --> | <!-- --> | <!-- --> | <!-- --> | <!-- --> | <!-- --> | <!-- --> | <!-- --> | <!-- --> | <!-- --> | <!-- --> | <!-- --> |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| i-doit Version | 1.19 | 1.18 | 1.17 | 1.16 | 1.15 | 1.14 | 1.13 | 1.12 | 1.11 | 1.10 | 1.9 | 1.8 | 1.7 |
| Release | 2022-09 | 2022-01 | 2021-07 | 2021-01 | 2020-07 | 2020-01 | 2019-06 | 2018-12 | 2018-06 | 2017-12 | 2017-05 | 2016-10 | 2016-03 |
| Apache Webserver | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.2, 2.4 |
| PHP | 7.4 (deprecated)  <br>8.0 (recommended) | 7.3 (deprecated)  <br>7.4 (recommended) | 7.3  <br>7.4 (recommended) | 7.2.5 (deprecated)  <br>7.3  <br>7.4 (recommended) | 7.1.8 (deprecated)  <br>7.2  <br>7.3 (recommended)  <br>7.4 | 7.1.8 (deprecated)  <br>7.2  <br>7.3 (recommended)  <br>7.4 | 7.0.8 (deprecated)  <br>7.1  <br>7.2  <br>7.3 (recommended) | 5.6 (deprecated)  <br>7.0  <br>7.1  <br>7.2 (recommended) | 5.6  <br>7.0  <br>7.1 | 5.6  <br>7.0 | 5.4  <br>5.5  <br>5.6  <br>7.0 | 5.4  <br>5.5  <br>5.6 | 5.4  <br>5.5  <br>5.6 |
| MySQL | 5.7 | 5.7 | 5.7 | 5.6 (deprecated)  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 |
| MariaDB | 10.2  <br>10.3  <br>10.4  <br>10.5 (recommended) | 10.2  <br>10.3  <br>10.4  <br>10.5 (recommended) | 10.2  <br>10.3  <br>10.4  <br>10.5 (recommended) | 10.1 (deprecated)  <br>10.2  <br>10.3  <br>10.4 (recommended)  <br>10.5 | 10.1  <br>10.2  <br>10.3  <br>10.4 (recommended) | 10.1  <br>10.2  <br>10.3  <br>10.4 (recommended) | 10.0 (deprecated)  <br>10.1  <br>10.2  <br>10.3 (recommended) | 10.0  <br>10.1 | 10.0  <br>10.1 | 10.0  <br>10.1 | 10.0  <br>10.1 | 10.0  <br>10.1 | 10.0  <br>10.1 |
| Debian GNU/Linux | 11  | 10, 11 | 10  | 10  | 10  | 10  | 8, 9, 10 | 8, 9 | 8, 9 | 8, 9 | 8, 9 | 8   | 8   |
| Ubuntu | 18.04, 20.04 | 18.04, 20.04 | 18.04, 20.04 | 18.04, 20.04 | 18.04, 20.04 | 18.04 | 16.04, 18.04 | 16.04, 18.04 | 16.04 | 16.04, 17.04 | 16.04 LTS, 16.10, 17.04 | 14.04¹ | 15.10, 14.04¹ |
| Red Hat Enterprise Linux (RHEL) | 7¹, 8 | 7¹, 8 | 7¹, 8 | 7¹, 8 | 7¹, 8 | 7¹, 8 | 7¹, 8 | 7.3¹, 7.4¹, 7.5¹, 7.6¹ | 7.3¹, 7.4¹, 7.5¹ | 7.3¹, 7.4¹ | 7.3¹ | 7.3¹ | 7.2¹ |
| SUSE Linux Enterprise Server (SLES) | 15 SP1, 15 SP 2, SP 3 | 15 SP1, 15 SP 2, SP 3 | 15, 15 SP1 | 15, 15 SP1 | 15, 15 SP1 | 15, 15 SP1 | 12 SP3, 12 SP4, 15, 15 SP1 | 12 SP3, 15 | 12 SP3 | 12 SP2, SP3 | 12, 12 SP2 | 12, 12 SP2 | 12  |
| XAMPP for Windows² | 2016, 2019 | 2016, 2019 | 2016, 2019 | 2016, 2019 | 2016, 2019 | 2016, 2019 | 2008 R2, 2012 R2, 2016, 2019 | 2008 R2, 2012 R2, 2016, 2019 | 2008 R2, 2012 R2, 2016 | 2008 R2, 2012 R2, 2016 | 2008, 2012 | 2008, 2012 | 2008, 2012 |
| Legend |     |     |     |     |     |     |     |     |     |     |     |     |     |
| ¹ With the help of third-party repositories |     |     |     |     |     |     |     |     |     |     |     |     |     |
| ² Not recommended for productive use |     |     |     |     |     |     |     |     |     |     |     |     |     |

## Updating 1.7.4 to 1.8

First, we prepare the update via CLI by open the i-doit Folder at `/var/www/html/` and unzip the idoit update package with

```sh
sudo -u www-data unzip idoit-1.8-update.zip
```

If you are asked, overwrite everything by typing A.
Now we open the Web Interface Updater and the Update to v1.8 is displayed and selected, do the update.

[![Updating 1.7.4 to 1.8](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/1-u18-119.png)](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/1-u18-119.png)

!!! attention "**Possible error**"

    PHP Fatal error: Call to undefined method idoit\Component\ContainerFacade::has() in /var/www/html/src/idoit/Model/Summary/SystemSummary.php on line 185

    Solution is to reload the page and go on.

!!! success "**Check the update Logs**"

    Please take the time to Scroll down the logs and check if a error occurred

    Login and check your installation.

## Updating 1.8 to 1.9

First, we prepare the update via CLI by open the i-doit Folder at `/var/www/html/` and unzip the idoit update package with

```sh
sudo -u www-data unzip idoit-1.9-update.zip
```

If you are asked, overwrite everything by typing A.
Now we open the Web Interface Updater and the Update to v1.9 is displayed and selected, do the update.

[![Updating 1.8 to 1.9](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/2-u18-119.png)](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/2-u18-119.png)

!!! success "**Check the update Logs**"
    Please take the time to Scroll down the logs and check if a error occurred
    Login and check your installation.

## Updating 1.9 to 1.10

First, we prepare the update via CLI by open the i-doit Folder at `/var/www/html/` and unzip the idoit update package with

```sh
sudo -u www-data unzip idoit-1.10-update.zip
```

If you are asked, overwrite everything by typing A.<br>
Now we open the Web Interface Updater and the Update to v1.10 is displayed and selected, do the update.

[![Updating 1.9 to 1.10](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/3-u18-119.png)](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/3-u18-119.png)

!!! success "**Check the update Logs**"
    Please take the time to Scroll down the logs and check if a error occurred
    Login and check your installation.

## Updating 1.10 to 1.11

First, we prepare the update via CLI by open the i-doit Folder at `/var/www/html/` and unzip the idoit update package with

```sh
sudo -u www-data unzip idoit-1.11-update.zip
```

If you are asked, overwrite everything by typing A.<br>
Now we open the Web Interface Updater and the Update to v1.11 is displayed and selected, do the update.<br>

!!! attention "**Possible error**"

    Call of unknown method '_realpath'.

Solutions:

*   Reload the page and go on.
*   or use the following Hotfix if reloading do not work<br>

!!! attention "Declaration of consent"

    By downloading a Hotfix you declare that you have read and understood the [above mentioned note](#update-guide-from-i-doit-174-to-119) completely.<br>

    [Click here for the Hotfix](../assets/downloads/upgrades-and-migrations/ID-5843_b4159eb.zip)

Continue with the update

!!! success "**Check the update Logs**"

    Please take the time to Scroll down the logs and check if a error occurred

Login and check your installation.

## Updating 1.11 to 1.12

First, we prepare the update via CLI by open the i-doit Folder at `/var/www/html/` and unzip the idoit update package with

```sh
sudo -u www-data unzip idoit-1.12-update.zip
```

If you are asked, overwrite everything by typing A.<br>
Now we open the Web Interface Updater and the Update to v1.12 is displayed and selected, do the update.

[![Updating 1.11 to 1.12](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/4-u18-119.png)](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/4-u18-119.png)

!!! success "**Check the update Logs**"

    Please take the time to Scroll down the logs and check if a error occurred

    Login and check your installation.

## Upgrade Debian 8 to 9

!!! attention "**Warning**"

    Before you start, please ensure that you have a full Backup which you have tested restoring on a clean server in case something goes wrong, because there is no going back!<br>
    Read the Update Instructions for Debian 8 to 9 [here](https://www.debian.org/releases/stretch)

??? example "I have a working full Backup"

    Free up some space with<br>
        ```sh
        sudo apt-get autoremove
        sudo apt-get clean
        ```
    Alter the sources.list with your favorite editor<br>
        ```sh
        sudo nano /etc/apt/sources.list
        ```
    Alter all entries to 'stretch' or delete all entries and insert<br>
        ```sh
        deb http://deb.debian.org/debian stretch main
        deb http://deb.debian.org/debian stretch contrib
        ```
    Now update the packages again<br>
        ```sh
        sudo apt-get update
        ```
    If you get a message like this, you can ignore it or read [here](https://stackoverflow.com/a/70795162).<br>
        ```sh
        There is no public key available for the following key IDs:
        112695A0E562B32A
        ```
    Now stop mysql and cron<br>
        ```sh
        sudo systemctl stop mysql cron<br>
        ```
    Do the update to Debian 9<br>
        ```sh
        sudo apt-get upgrade
        sudo apt-get full-upgrade
        ```
    If you are asked 'Restart services during package upgrades without asking?' select 'Yes' and hit enter<br>
    Start the Services we stopped
        ```sh
        sudo systemctl start mysql cron
        ```
    Errors? [Read here](https://www.debian.org/releases/stretch/)<br>
    !!! success "**Check the System and i-doit**"

        Check your system. Check i-doit!

    Free up some space again<br>
        ```sh
        sudo apt-get autoremove
        sudo apt-get clean
        ```
    Check your sources.list, for more Info see [here](https://wiki.debian.org/SourcesList)<br>
    You are now at Debian 9 with PHP 5.6 and MariaDB 10.

## Upgrade Debian 9 to 10

!!! attention "**Warning**"

    Before you start, please ensure that you have a full Backup which you have tested restoring on a clean server in case something goes wrong, because there is no going back!<br>
    Read the Update Instructions for Debian 9 to 10 [here](https://www.debian.org/releases/buster/amd64/release-notes/ch-upgrading.en.html)

??? example "I have a working full Backup"

    Free up some space with<br>
        ```sh
        sudo apt-get autoremove
        sudo apt-get clean
        ```
    Alter the sources.list with your favorite editor<br>
        ```sh
        sudo nano /etc/apt/sources.list
        ```
    Alter all entries to 'buster' or delete all entries and insert<br>
        ```sh
        deb http://deb.debian.org/debian buster main
        deb http://deb.debian.org/debian buster contrib
        ```
    Now stop mysql and cron<br>
        ```sh
        sudo systemctl stop mysql cron
        ```
    Do the update to Debian 10<br>
        ```sh
        sudo apt-get update
        sudo apt-get upgrade
        sudo apt-get full-upgrade
        ```
    Start the Services we stopped<br>
        ```sh
        sudo systemctl start mysql cron<br>
        ```
    Errors? [Read here](https://www.debian.org/releases/buster/amd64/release-notes/ch-upgrading.en.html#trouble)<br>

    !!! success "**Check the System and i-doit**"

        Check your system. Check i-doit!<br>

    Free up some space again<br>
        ```sh
        sudo apt-get autoremove
        sudo apt-get clean
        ```
    Check your sources.list, for more Info see [here](https://wiki.debian.org/SourcesList)<br>
    You are now at Debian 10 with PHP 5.6 and MariaDB 10.3.

## Update PHP 5.6 to PHP 7.3

!!! attention "Backup"

    Create a Backup or Snapshot!

Update packages and install all needed packages

```sh
sudo apt update
sudo apt install apache2 libapache2-mod-php mariadb-client mariadb-server php php-bcmath php-cli php-common php-curl php-gd php-imagick php-json php-ldap php-mbstring php-memcached php-mysql php-pgsql php-soap php-xml php-zip memcached unzip sudo moreutils
```

Create PHP config file

```sh
sudo nano /etc/php/7.3/mods-available/i-doit.ini
```

insert

```ini
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
mysqli.default_socket = /var/run/mysqld/mysqld.sock
```

Activate changes

```sh
sudo a2dismod php5
sudo a2enmod php7.3
sudo phpenmod i-doit
sudo phpenmod memcached
sudo systemctl restart apache2.service
```

i-doit should now display via Administration > System tools > System overview the new PHP Version 7.3.31-1~deb10u1

## Create MariaDB config file if not exist

Create or update a MariaDB config file

```sh
sudo nano /etc/mysql/mariadb.conf.d/99-i-doit.cnf
```

insert or update your MariaDB configuration

```ini
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

# Disable this (= 0) if you have slow hard disks
innodb_flush_log_at_trx_commit = 1
innodb_flush_method = O_DIRECT

innodb_lru_scan_depth = 2048
table_definition_cache = 1024
table_open_cache = 2048
#Only if your have MySQL 5.6 or higher, do not use with MariaDB!
#table_open_cache_instances = 4

innodb_stats_on_metadata = 0

sql-mode = ""
```

Restart MariaDB afterwards

```sh
sudo systemctl start mysql.service
```

## Updating 1.12 to 1.13

First, we prepare the update via CLI by open the i-doit Folder at `/var/www/html/` and unzip the idoit update package with

```sh
sudo -u www-data unzip idoit-1.13-update.zip
```

If you are asked, overwrite everything by typingA.

Now we open the Web Interface Updater and the Update to v1.13 is displayed and selected, do the update.

[![Updating 1.12 to 1.13](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/5-u18-119.png)](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/5-u18-119.png)

Probably you will get this error:

!!! attention "**Possible error**"

    Fatal error: Uncaught Error: Class 'idoit\\Module\\License\\LicenseServiceFactory' not found in /var/www/html/updates/versions/v1.13/migration/license\_migration.php:50 Stack trace: #0 /var/www/html/updates/classes/isys\_update\_migration.class.php(98): include() #1 /var/www/html/updates/update.inc.php(911): isys\_update\_migration->migrate('/var/www/html/u...') #2 /var/www/html/src/hypergate.inc.php(152): include\_once('/var/www/html/u...') #3 /var/www/html/index.php(231): include\_once('/var/www/html/s...') #4 {main} thrown in /var/www/html/updates/versions/v1.13/migration/license\_migration.php on line 50

Then you need to restart the update again.<br>
If you now get a HTTP 500, do the update again.

!!! success "**Check the System and i-doit**"

    Check your system. Check i-doit!

## Updating 1.13 to 1.14

First, we prepare the update via CLI by open the i-doit Folder at `/var/www/html/` and unzip the idoit update package with

```sh
sudo -u www-data unzip idoit-1.14-update.zip
```

If you are asked, overwrite everything by typingA.

Now we open the Web Interface Updater and the Update to v1.14 is displayed and selected, do the update.

[![Updating 1.13 to 1.14](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/6-u18-119.png)](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/6-u18-119.png)

!!! success "**Check the update Logs**"

    Please take the time to Scroll down the logs and check if a error occurred

If you see this error:

!!! attention "**Possible error**"

    Database error : Query error: 'ALTER TABLE isys\_cats\_person\_list ADD isys\_cats\_person\_list\_\_disabled\_login TINYINT(1) UNSIGNED DEFAULT 0':Row size too large. The maximum row size for the used table type, not counting BLOBs, is 8126. This includes storage overhead, check the manual. You have to change some columns to TEXT or BLOBs

The Solution is documented [here](../system-administration/troubleshooting/row-size-too-large.md)

!!! success "**Check the System and i-doit**"

    Check your system. Check i-doit!

## Updating 1.14 to 1.15

First, we prepare the update via CLI by open the i-doit Folder at `/var/www/html/` and unzip the idoit update package with

```sh
sudo -u www-data unzip idoit-1.15-update.zip
```

If you are asked, overwrite everything by typingA.

Now we open the Web Interface Updater and the Update to v1.15 is displayed and selected, do the update.

[![Updating 1.14 to 1.15](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/7-u18-119.png)](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/7-u18-119.png)

!!! success "**Check the System and i-doit**"

    Check your system. Check i-doit!

## Updating 1.15 to 1.16

First, we prepare the update via CLI by open the i-doit Folder at `/var/www/html/` and unzip the idoit update package with

```sh
sudo -u www-data unzip idoit-1.16-update.zip
```

If you are asked, overwrite everything by typingA.

Now we open the Web Interface Updater and the Update to v1.16 is displayed and selected, do the update.

[![Updating 1.15 to 1.16](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/8-u18-119.png)](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/8-u18-119.png)

!!! success "**Check the System and i-doit**"

    Check your system. Check i-doit!

## Updating 1.16 to 1.17

First, we prepare the update via CLI by open the i-doit Folder at /var/www/html/and unzip the idoit update package with

```sh
sudo -u www-data unzip idoit-1.17-update.zip
```

If you are asked, overwrite everything by typingA.

Now we open the Web Interface Updater and the Update to v1.17 is displayed and selected, do the update.

[![Updating 1.16 to 1.17](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/9-u18-119.png)](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/9-u18-119.png)

!!! success "**Check the System and i-doit**"

    Check your system. Check i-doit!

## Updating 1.17 to 1.18

First, we prepare the update via CLI by open the i-doit Folder at `/var/www/html/` and unzip the idoit update package with

```sh
sudo -u www-data unzip idoit-1.18-update.zip
```

If you are asked, overwrite everything by typing A.

Now we open the Web Interface Updater and the Update to v1.18 is displayed and selected, do the update.

[![Updating 1.17 to 1.18](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/10-u18-119.png)](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/10-u18-119.png)

!!! success "**Check the System and i-doit**"

    Check your system. Check i-doit!

## Upgrade Debian 10 to 11

!!! attention "**Warning**"

    Before you start, please ensure that you have a full Backup which you have tested restoring on a clean server in case something goes wrong, because there is no going back!<br>
    Read the Update Instructions for Debian 10 to 11 [here](https://www.debian.org/releases/bullseye/amd64/release-notes/ch-upgrading.en.html)

??? example "I have a working full Backup"

    Free up some space with<br>
        ```sh
        sudo apt-get autoremove
        sudo apt-get clean
        ```
    Alter the sources.list with your favorite editor<br>
        ```sh
        sudo nano /etc/apt/sources.list
        ```
    Alter all entries to 'buster' or delete all entries and insert<br>
        ```sh
    deb http://deb.debian.org/debian bullseye main
    deb http://deb.debian.org/debian bullseye contrib
        ```
    Now stop mysql and cron<br>
        ```sh
        sudo systemctl stop mysql cron
        ```
    Do the update to Debian 11<br>
        ```sh
        sudo apt-get update
        sudo apt-get upgrade
        sudo apt-get full-upgrade
        ```
    Start the Services we stopped<br>
        ```sh
        sudo systemctl start mysql cron
        ```
    Errors? [Read here](https://www.debian.org/releases/bullseye/amd64/release-notes/ch-upgrading.en.html#trouble)<br>

    !!! success "**Check the System and i-doit**"

        Check your system. Check i-doit!

    Free up some space again<br>
        ```sh
        sudo apt-get autoremove
        sudo apt-get clean
        ```
    Check your sources.list, for more Info see [here](https://wiki.debian.org/SourcesList)<br>

    You are now at Debian 11 with PHP 7.4.30 and MariaDB 10.5.

## Configure PHP 7.4

Create PHP config file

```sh
sudo nano /etc/php/7.4/mods-available/i-doit.ini
```

insert

```ini
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
mysqli.default_socket = /var/run/mysqld/mysqld.sock
```

Activate changes

```sh
sudo a2dismod php7.3
sudo a2enmod php7.4
sudo phpenmod i-doit
sudo phpenmod memcached
sudo systemctl restart apache2.service
```

!!! attention "**Possible error**"

    (38)Function not implemented: AH00141: Could not initialize random number generator

If the apache2 is not restarting and you get the above error, restart the server.

i-doit should now display via Administration > System tools > System overview the new PHP Version 7.4.30

## Updating 1.18 to 1.19

First, we prepare the update via CLI by open the i-doit Folder at /var/www/html/and unzip the idoit update package with

```sh
sudo -u www-data unzip idoit-1.19-update.zip
```

If you are asked, overwrite everything by typing A.

If you try the update without PHP 7.3 you will see this message:

!!! attention "**Possible error**"

    You have PHP 7.3.31. For updating i-doit to the next version you need at least PHP 7.4!

Now we open the Web Interface Updater and the Update to v1.19 is displayed and selected, do the update.

[![Updating 1.18 to 1.19](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/11-u18-119.png)](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/11-u18-119.png)

!!! success "**Check the System and i-doit**"

## Updating 1.19 to 20

By clicking **Check for a new version** you can check whether a newer package is available. For this purpose, you require an internet connection.<br>
If a new version is available the update package can be downloaded and extracted with a click on **Download**

If you're not connected to the internet, you can prepare the update via CLI by open the i-doit Folder at `/var/www/html/` and unzip the idoit update package with

```sh
sudo -u www-data unzip idoit-20-update.zip
```

If you are asked, overwrite everything by typing A.

Now we open the Web Interface Updater and the Update to v20 is displayed and selected, do the update.

[![Updating 1.19 to 20](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/12-u18-119.png)](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/12-u18-119.png)

!!! success "**Check the update Logs**"
    Please take the time to Scroll down the logs and check if a error occurred

!!! success "**Check the System and i-doit**"

## Sources

*   MariaDB upgrade Information [https://mariadb.com/kb/en/upgrading/](https://mariadb.com/kb/en/upgrading/)
*   Debian 9 upgrade [https://www.debian.org/releases/stretch/](https://www.debian.org/releases/stretch/)
*   Debian 10 upgrade [https://www.debian.org/releases/buster/](https://www.debian.org/releases/buster/)
*   Debian 11 upgrade [https://www.debian.org/releases/bullseye/](https://www.debian.org/releases/bullseye/)
