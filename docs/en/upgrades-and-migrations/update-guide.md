---
title: Update Guide from i-doit 1.7.4 to 34
description: i-doit update guide
icon: fontawesome/brands/linux
status:
lang: en
---

## Important information before you begin

Here you will find a short guide for updating your i-doit to i-doit 31.<br>
You may need to update your operating system.<br>
These instructions apply to **Debian**; the commands used may differ on other operating systems. Before you begin, download all the updates you need to perform and copy them to the i-doit root folder.

!!! danger "**Important notes in advance**"

    This guide is provided without warranty and may not work in your specific use case.<br>
    This depends on the configuration and installation type of your instance.
    Required **add-on** updates are also not mentioned.

!!! attention "Backup"
    Create a backup or snapshot before each update step!

!!! attention "Release notes"
    Read the [release notes](../version-history/index.md) before updating to a new version.

!!! attention "Hotfix note"
    Use hotfixes exclusively with the specified version. Hotfixes will be included in newer versions, so reinstallation is not required.
    If you are using an older i-doit version, it is indispensable to first perform an update to the newest version.
    If a hotfix is required to update an older version, you will find it in the hotfix subchapters here in the Knowledge Base.
    Since these are hotfixes, we recommend installing them only if the adjustments are required for smooth operation of your installation or if you are requested to do so by the support team. Make sure you have created a [backup of i-doit](../maintenance-and-operation/backup-and-restore/index.md) before using a hotfix.
    Please inform us about the use of hotfixes if you subsequently contact our support team.

## Update from 1.7.4 to 1.8

First, we prepare the update via the CLI by opening the i-doit folder at `/var/www/html/` and extracting the i-doit update package with the following command:

```sh
sudo -u www-data unzip idoit-1.8-update.zip
```

If prompted, overwrite everything by entering **A**.

Now open the web interface updater, select the update to v1.8 and perform the update.

[![Update from 1.7.4 to 1.8](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/1-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/1-u18-119.png)

!!! warning "**Possible error**"
    PHP Fatal error: Call to an undefined method idoit\Component\ContainerFacade::has() in /var/www/html/src/idoit/Model/Summary/SystemSummary.php on line 185
    The solution is to reload the page and continue.

!!! success "**Check the update logs**"
    Please take the time to review the logs and check whether an error has occurred.
    Log in and verify your installation.

## Update from 1.8 to 1.9

First, we prepare the update via the CLI by opening the i-doit folder at `/var/www/html/` and extracting the i-doit update package with the following command:

```sh
sudo -u www-data unzip idoit-1.9-update.zip
```

If prompted, overwrite everything by entering **A**.
Now open the web interface updater, select the update to v1.9 and perform the update.

[![Update from 1.8 to 1.9](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/2-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/2-u18-119.png)

!!! success "**Check the update logs**"
    Please take the time to review the logs and check whether an error has occurred.
    Log in and verify your installation.

## Update from 1.9 to 1.10

First, we prepare the update via the CLI by opening the i-doit folder at `/var/www/html/` and extracting the i-doit update package with the following command:

```sh
sudo -u www-data unzip idoit-1.10-update.zip
```

If prompted, overwrite everything by entering **A**.
Now open the web interface updater, select the update to v1.10 and perform the update.

[![Update from 1.9 to 1.10](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/3-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/3-u18-119.png)

!!! success "**Check the update logs**"
    Please take the time to review the logs and check whether an error has occurred.
    Log in and verify your installation.

## Update from 1.10 to 1.11

First, we prepare the update via the CLI by opening the i-doit folder at `/var/www/html/` and extracting the i-doit update package with the following command:

```sh
sudo -u www-data unzip idoit-1.11-update.zip
```

If prompted, overwrite everything by entering **A**.
Now open the web interface updater, select the update to v1.11, and perform the update.

!!! attention "**Possible error**"
    Call to an unknown method '_realpath'.

Solutions:

*   Reload the page and continue.
*   or use the following hotfix if reloading does not work

!!! attention "Consent declaration"
    By downloading a hotfix, you declare that you have completely read and understood the [above note](#important-information-before-you-begin).
    [Click here for the hotfix](../assets/downloads/upgrades-and-migrations/ID-5843_b4159eb.zip)

Continue with the update

!!! success "**Check the update logs**"
    Please take the time to review the logs and check whether an error has occurred.
    Log in and verify your installation.

## Update from 1.11 to 1.12

First, we prepare the update via the CLI by opening the i-doit folder at `/var/www/html/` and extracting the i-doit update package with the following command:

```sh
sudo -u www-data unzip idoit-1.12-update.zip
```

If prompted, overwrite everything by entering **A**.
Now open the web interface updater and the update to v1.12 is displayed and selected; perform the update.

[![Update from 1.11 to 1.12](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/4-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/4-u18-119.png)

!!! success "**Check the update logs**"
    Please take the time to review the logs and check whether an error has occurred.
    Log in and verify your installation.

## Upgrade Debian 8 to 9

!!! warning "**Warning**"
    Before you begin, please make sure you have a complete backup that you have tested on a clean server, in case something goes wrong -- there is no going back!
    Read the update instructions from Debian 8 to 9 [here](https://www.debian.org/releases/stretch)

??? example "I have a working complete backup"

    Free up some space with

    ```sh
    sudo apt-get autoremove
    sudo apt-get clean
    ```

    Edit the sources.list with your preferred editor

    ```sh
    sudo nano /etc/apt/sources.list
    ```

    Change all entries to 'stretch' or delete all entries and add the following:

    ```sh
    deb http://deb.debian.org/debian stretch main
    deb http://deb.debian.org/debian stretch contrib
    ```

    Now update the packages again

    ```sh
    sudo apt-get update
    ```

    If you receive a message like this, you can ignore it or read more [here](https://stackoverflow.com/a/70795162).

    ```sh
    There are no public keys available for the following key IDs:
    112695A0E562B32A
    ```

    Now stop mysql and cron

    ```sh
    sudo systemctl stop mysql cron
    ```

    Perform the update to Debian 9

    ```sh
    sudo apt-get upgrade
    sudo apt-get full-upgrade
    ```

    If asked 'Restart services during package upgrades without asking?', select 'Yes' and press Enter

    Start the services we stopped:

    ```sh
    sudo systemctl start mysql cron
    ```

    Errors? [Read here](https://www.debian.org/releases/stretch/)

    !!! success "**Check the system and i-doit**"
        Check your system and i-doit!

    Free up some space again

    ```sh
    sudo apt-get autoremove
    sudo apt-get clean
    ```

    Check your sources.list; for additional information see [here](https://wiki.debian.org/SourcesList)<br>
    You are now on Debian 9 with PHP 5.6 and MariaDB 10.

## Upgrade Debian 9 to 10

!!! warning "**Warning**"
    Before you begin, please make sure you have a complete backup that you have tested on a clean server, in case something goes wrong -- there is no going back!
    Read the update instructions from Debian 9 to 10 [here](https://wiki.debian.org/DebianUpgrade)

??? example "I have a working complete backup"

    Free up some space with

    ```sh
    sudo apt-get autoremove
    sudo apt-get clean
    ```

    Edit the sources.list with your preferred editor

    ```sh
    sudo nano /etc/apt/sources.list
    ```

    Change all entries to 'buster' or delete all entries and add the following

    ```sh
    deb http://deb.debian.org/debian buster main
    deb http://deb.debian.org/debian buster contrib
    ```

    Now stop mysql and cron

    ```sh
    sudo systemctl stop mysql cron
    ```

    Perform the update to Debian 10

    ```sh
    sudo apt-get update
    sudo apt-get upgrade
    sudo apt-get full-upgrade
    ```

    Start the services we stopped

    ```sh
    sudo systemctl start mysql cron
    ```

    Errors? [Check the Debian website](https://www.debian.org/releases/buster/)

    !!! success "**Check the system and i-doit**"
        Check your system and i-doit!

    Free up some space again

    ```sh
    sudo apt-get autoremove
    sudo apt-get clean
    ```

    Check your sources.list; for additional information see [here](https://wiki.debian.org/SourcesList)<br>
    You are now on Debian 10 with PHP 5.6 and MariaDB 10.3.

## Update from PHP 5.6 to PHP 7.3

!!! warning "Backup"
    Create a backup or snapshot!

Update and install all required packages

```sh
sudo apt update
sudo apt install apache2 libapache2-mod-php mariadb-client mariadb-server php php-bcmath php-cli php-common php-curl php-gd php-imagick php-json php-ldap php-mbstring php-memcached php-mysql php-pgsql php-soap php-xml php-zip memcached unzip sudo moreutils
```

Create the PHP configuration file

```sh
sudo nano /etc/php/7.3/mods-available/i-doit.ini
```

Insert the following:

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

Enable the changes

```sh
sudo a2dismod php5
sudo a2enmod php7.3
sudo phpenmod i-doit
sudo phpenmod memcached
sudo systemctl restart apache2.service
```

i-doit should now display the new PHP version 7.3.31-1~deb10u1 under Administration > [Tenant Name] Administration > System Config Check.

## Create the MariaDB Configuration File if Not Present

Create or update a MariaDB configuration file

```sh
sudo nano /etc/mysql/mariadb.conf.d/99-i-doit.cnf
```

Insert or update your MariaDB configuration

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

Then restart MariaDB

```sh
sudo systemctl start mysql.service
```

## Update from 1.12 to 1.13

First, we prepare the update via the CLI by opening the i-doit folder at `/var/www/html/` and extracting the i-doit update package with

```sh
sudo -u www-data unzip idoit-1.13-update.zip
```



If prompted, overwrite everything by entering **A**.

Now open the web interface updater. The update to v1.13 is displayed and selected; perform the update.

[![Update from 1.12 to 1.13](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/5-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/5-u18-119.png)

You may receive this error:

!!! attention "**Possible error**"
    Schwerwiegender Fehler: Uncaught Error: Class 'idoit\\Module\\License\\LicenseServiceFactory' nicht gefunden in /var/www/html/updates/versions/v1.13/migration/license\_migration.php:50 Stacktrace: #0 /var/www/html/updates/classes/isys\_update\_migration.class.php(98): include() #1 /var/www/html/updates/update.inc.php(911): isys\_update\_migration->migrate('/var/www/html/u...') #2 /var/www/html/src/hypergate.inc.php(152): include\_once('/var/www/html/u...') #3 /var/www/html/index.php(231): include\_once('/var/www/html/s...') #4 {main} thrown in /var/www/html/updates/versions/v1.13/migration/license\_migration.php on line 50

Then you need to start the update again.<br> If you now receive an HTTP 500 error, perform the update again.

!!! success "**Check the system and i-doit**"
    Check your system and i-doit!

## Update from 1.13 to 1.14

First, we prepare the update via the CLI by opening the i-doit folder at `/var/www/html/` and extracting the i-doit update package with

```sh
sudo -u www-data unzip idoit-1.14-update.zip
```



If prompted, overwrite everything by entering **A**.

Now open the web interface updater. The update to v1.14 is displayed and selected; perform the update.

[![Update from 1.13 to 1.14](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/6-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/6-u18-119.png)

!!! success "**Check the update logs**"
    Please take the time to review the logs and check whether an error has occurred.

If you see this error:

!!! attention "**Possible error**"
    Database error: Query error: 'ALTER TABLE isys\_cats\_person\_list ADD isys\_cats\_person\_list\_\_disabled\_login TINYINT(1) UNSIGNED DEFAULT 0': Row size too large. The maximum row size for the used table type, not counting BLOBs, is 8126. This includes storage overhead, check the manual. You have to change some columns to TEXT or BLOBs.

The solution is [documented here](../administration/troubleshooting/row-size-too-large.md)

!!! success "**Check the system and i-doit**"
    Check your system and i-doit!

## Update from 1.14 to 1.15

First, we prepare the update via the CLI by opening the i-doit folder at `/var/www/html/` and extracting the i-doit update package with

```sh
sudo -u www-data unzip idoit-1.15-update.zip
```



If prompted, overwrite everything by entering **A**.

Now open the web interface updater. The update to v1.15 is displayed and selected; perform the update.

[![Update from 1.14 to 1.15](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/7-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/7-u18-119.png)

!!! success "**Check the system and i-doit**"
    Check your system and i-doit!

## Update from 1.15 to 1.16

First, we prepare the update via the CLI by opening the i-doit folder at `/var/www/html/` and extracting the i-doit update package with

```sh
sudo -u www-data unzip idoit-1.16-update.zip
```



If prompted, overwrite everything by entering **A**.

Now open the web interface updater. The update to v1.16 is displayed and selected; perform the update.

[![Update from 1.15 to 1.16](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/8-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/8-u18-119.png)

!!! success "**Check the system and i-doit**"
    Check your system and i-doit!

## Update from 1.16 to 1.17

First, we prepare the update via the CLI by opening the i-doit folder at `/var/www/html/` and extracting the i-doit update package with

```sh
sudo -u www-data unzip idoit-1.17-update.zip
```



If prompted, overwrite everything by entering **A**.

Now open the web interface updater. The update to v1.17 is displayed and selected; perform the update.

[![Update from 1.16 to 1.17](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/9-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/9-u18-119.png)

!!! success "**Check the system and i-doit**"
    Check your system and i-doit!

## Update from 1.17 to 1.18

First, we prepare the update via the CLI by opening the i-doit folder at `/var/www/html/` and extracting the i-doit update package with the following command:

```sh
sudo -u www-data unzip idoit-1.18-update.zip
```

If prompted, overwrite everything by entering **A**.

Now open the web interface updater. The update to v1.18 is displayed and selected; perform the update.

[![Update from 1.17 to 1.18](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/10-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/10-u18-119.png)

!!! success "**Check the system and i-doit**"
    Check your system and i-doit!

## Upgrade Debian 10 to 11

!!! attention "**Warning**"
    Before you begin, please make sure you have a complete backup that you have tested on a clean server, in case something goes wrong -- there is no going back!<br>
    Read the update instructions for Debian 10 to 11 [here](https://www.debian.org/releases/bullseye/amd64/release-notes/ch-upgrading.en.html)

??? example "I have a working complete backup"

    Free up some space with

    ```sh
    sudo apt-get autoremove
    sudo apt-get clean
    ```

    Edit the sources.list with your preferred editor

    ```sh
    sudo nano /etc/apt/sources.list
    ```

    Change all entries to 'buster' or delete all entries and add the following

    ```sh
    deb http://deb.debian.org/debian bullseye main
    deb http://deb.debian.org/debian bullseye contrib
    ```

    Now stop mysql and cron

    ```sh
    sudo systemctl stop mysql cron
    ```

    Perform the update to Debian 11

    ```sh
    sudo apt-get update
    sudo apt-get upgrade
    sudo apt-get full-upgrade
    ```

    Start the services we stopped

    ```sh
    sudo systemctl start mysql cron
    ```

    Errors? [Check the Debian website](https://www.debian.org/releases/bullseye/)

    !!! success "**Check the system and i-doit**"
        Check your system and i-doit!

    Free up some space again

    ```sh
    sudo apt-get autoremove
    sudo apt-get clean
    ```

    Check your sources.list; for additional information see [here](https://wiki.debian.org/SourcesList)

    You are now on Debian 11 with PHP 7.4.30 and MariaDB 10.5.

## Configure PHP 7.4

Create the PHP configuration file

```sh
sudo nano /etc/php/7.4/mods-available/i-doit.ini
```

Insert the following:

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

Enable the changes

```sh
sudo a2dismod php7.3
sudo a2enmod php7.4
sudo phpenmod i-doit
sudo phpenmod memcached
sudo systemctl restart apache2.service
```

!!! attention "**Possible error**"
    (38)Function not implemented: AH00141: Could not initialize random number generator

If apache2 does not restart and you receive the above error, restart the server.

i-doit should now display the new PHP version 7.4.30 under Administration > [Tenant Name] Administration > System Config Check.

## Update from 1.18 to 1.19

First, we prepare the update via the CLI by opening the i-doit folder at `/var/www/html/` and extracting the i-doit update package with

```sh
sudo -u www-data unzip idoit-1.19-update.zip
```



If prompted, overwrite everything by entering **A**.

If you attempt the update without PHP 7.4, you will see this message:

!!! attention "**Possible error**"
    You have PHP 7.3.31. To update i-doit to the next version, you need at least PHP 7.4!

Now open the web interface updater. The update to v1.19 is displayed and selected; perform the update.

[![Update from 1.18 to 1.19](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/11-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/11-u18-119.png)

!!! success "**Check the system and i-doit**"

## Update from 1.19 to 20

First, open the web interface updater.<br>
By clicking **Check for a new version**, you can verify whether a newer package is available. This requires an internet connection.<br>
If a new version is available, the update package can be downloaded and extracted with a single click on **Download**.

If you are not connected to the internet, you can prepare the update via the command line by opening the i-doit folder at `/var/www/html/` and extracting the i-doit update package with the following command:

```sh
sudo -u www-data unzip idoit-20-update.zip
```

If prompted, overwrite everything by entering **A**.

In the web interface, verify that the update to version 20 is displayed and selected, then perform the update.

[![Update from 1.19 to 20](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/12-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/12-u18-119.png)

!!! success "**Check the update logs**"
    Please take the time to review the logs and check whether an error has occurred.

!!! success "**Check the system and i-doit**"

## Update from 20 to 29

First, you need to prepare the update via the command line by opening the i-doit folder at `/var/www/html/` and extracting the i-doit update package with the following command:

```sh
sudo -u www-data unzip idoit-29-update.zip
```

If prompted, overwrite everything by entering **A**.

In the web interface of the updater, verify that the update to version 29 is displayed and selected, then perform the update.

[![Update from 20 to 29](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/13-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/13-u18-119.png)

!!! success "**Check the update logs**"
    Please take the time to review the logs and check whether an error has occurred.

!!! success "**Check the system and i-doit**"

## Upgrade Debian 11 to 12

!!! attention "**Warning**"
    Before you begin, please make sure you have a complete backup that you have tested on a clean server, in case something goes wrong -- there is no going back!
    Read the update instructions for Debian 11 to 12 [here](https://www.debian.org/releases/bookworm/amd64/release-notes/ch-upgrading.en.html)

??? example "I have a working complete backup"

    Free up some space with

    ```sh
    sudo apt-get autoremove
    sudo apt-get clean
    ```

    Edit the sources.list with your preferred editor.

```sh
sudo nano /etc/apt/sources.list
```

Change all entries to 'bookworm' or delete all entries and add the following

```sh
deb http://deb.debian.org/debian bookworm main
deb http://deb.debian.org/debian bookworm contrib
```

Now stop mysql and cron

```sh
sudo systemctl stop mysql cron
```

Perform the update to Debian 12

```sh
sudo apt-get update
sudo apt-get upgrade
sudo apt-get full-upgrade
```

Start the services we stopped

```sh
sudo systemctl start mysql cron
```

Errors? [Read here](https://www.debian.org/releases/bookworm/amd64/release-notes/ch-upgrading.en.html#trouble)<br>

!!! success "**Check the system and i-doit**"
    Check your system and i-doit!

Free up some space again

```sh
sudo apt-get autoremove
sudo apt-get clean
```

Check your sources.list; for additional information see [here](https://wiki.debian.org/SourcesList)

You are now on Debian 12 with PHP 8.2.18 and MariaDB 10.11.

## Configure PHP 8.2

Create the PHP configuration file

```sh
sudo nano /etc/php/8.2/mods-available/i-doit.ini
```

Add the following:

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

Enable the changes

```sh
sudo a2dismod php7.4
sudo a2enmod php8.2
sudo phpenmod i-doit
sudo phpenmod memcached
sudo systemctl restart apache2.service
```

If apache2 does not restart, restart the server.

i-doit should now display the new PHP version 8.2.18 under Administration > [Tenant Name] Administration > System Config Check.

## MariaDB 10.11 Upgrade

Now we need to check the tables and update to the latest version with

```sh
sudo mariadb-upgrade -p
```

Enter your password and check whether everything went well

Then restart MariaDB

```sh
sudo systemctl start mysql.service
```

## Update from 29 to 34

First, prepare the update via the CLI by opening the i-doit folder at `/var/www/html/` and extracting the i-doit update package with

```sh
sudo -u www-data unzip idoit-34-update.zip
```



If prompted, overwrite everything by entering **A**.

In the web interface updater, verify that the update to version 34 is displayed and selected, then perform the update.

[![Update from 29 to 34](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/14-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/14-u18-119.png)

!!! success "**Check the update logs**"
    Please take the time to review the logs and check whether an error has occurred.

!!! success "**Check the system and i-doit**"

## Sources

*   MariaDB upgrade information [https://mariadb.com/kb/en/upgrading/](https://mariadb.com/kb/en/upgrading/)
*   Debian 9-Upgrade [https://www.debian.org/releases/stretch/](https://www.debian.org/releases/stretch/)
*   Debian 10-Upgrade [https://www.debian.org/releases/buster/](https://www.debian.org/releases/buster/)
*   Debian 11-Upgrade [https://www.debian.org/releases/bullseye/](https://www.debian.org/releases/bullseye/)
*   Debian 12-Upgrade [https://www.debian.org/releases/bookworm/](https://www.debian.org/releases/bookworm/)
