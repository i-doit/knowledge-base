---
title: Upgrade to MySQL 5.6 or MariaDB 10.0
description: "Starting with i-doit version 1.7, you need at least MySQL 5.6 or MariaDB 10.0 (previously: MySQL 5.5 / MariaDB 5.5)."
icon: fontawesome/brands/linux
status:
lang: en
---

Starting with i-doit version 1.7, you need at least **MySQL 5.6** or **MariaDB 10.0** (previously: MySQL 5.5 / MariaDB 5.5). This article describes the upgrade steps for the various [supported operating systems](../installation/manual-installation/index.md).

Check your current version:

    mysql --version

The following table shows the recommended upgrade paths per operating system:

| Operating System                    | Version   | Old Database Backend              | New Database Backend    |
| ----------------------------------- | --------- | --------------------------------- | ----------------------- |
| Debian GNU/Linux                    | 8         | MySQL 5.5, MariaDB 10.0           | MariaDB 10.0            |
|                                     | 7.8       | MySQL 5.5                         | MariaDB 10.0            |
| Ubuntu                              | 14.04 LTS | MySQL 5.5, MySQL 5.6, MariaDB 5.5 | MySQL 5.6               |
|                                     | 12.04 LTS | MySQL 5.5                         | MariaDB 10.0            |
| Red Hat Enterprise Linux (RHEL)     | 7.1       | MariaDB 5.5                       | MariaDB 10.0            |
|                                     | 6.7       | MySQL 5.1                         | MariaDB 10.0            |
| SUSE Linux Enterprise Server (SLES) | 12        | MariaDB 10.0                      | MariaDB 10.0            |
| Windows Server                      | 2008/2012 | Depending on XAMPP version             | MariaDB 10.0            |

!!! attention "It is absolutely essential that the [data is backed up](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) before changes are made to the system. Since the upgrade procedure can take varying amounts of time depending on the operating system, users of _i-doit_ should be informed in advance."

Debian GNU/Linux 8
------------------

Version 8 of Debian GNU/Linux contains MySQL 5.5 and MariaDB 10.0 in its standard packages. If MySQL is installed, it is sufficient to install the MariaDB package. This will replace MySQL with MariaDB:

    sudo apt-get update
    sudo apt-get install mariadb-server php5-mysqlnd

Debian GNU/Linux 7.8
--------------------

Version 7.8 of Debian GNU/Linux contains MySQL 5.5 and no MariaDB in its standard packages. To use MariaDB, the [official MariaDB repository must be added](https://downloads.mariadb.org/mariadb/repositories/#mirror=23Media&distro=Debian&distro_release=wheezy--wheezy&version=10.0). Caution: Third-party repositories can affect the system. Installing MariaDB replaces MySQL:

    sudo apt-get update
    sudo apt-get install python-software-properties
    sudo apt-key adv --recv-keys --keyserver keyserver.ubuntu.com 0xcbcb082a1bb943db
    sudo add-apt-repository 'deb [arch=amd64,i386] [http://mirror.23media.de/mariadb/repo/10.0/debian](http://mirror.23media.de/mariadb/repo/10.0/debian) wheezy main'
    sudo apt-get update
    sudo apt-get install mariadb-server php5-mysqlnd

Ubuntu 14.04 LTS
----------------

Version 14.04 LTS of Ubuntu contains MySQL 5.5, 5.6, and MariaDB 5.5 in its standard packages. It is therefore recommended to use MySQL 5.6. If MySQL 5.5 or MariaDB 5.5 were previously installed, they will be replaced by MySQL 5.6:

    sudo apt-get update
    sudo apt-get install mysql-server-5.6 php5-mysqlnd mysql-client-core-5.6 mysql-client-5.6

Ubuntu 12.04 LTS
----------------

Version 12.04 LTS of Ubuntu contains MySQL 5.5 and no MariaDB in its standard packages. Since this operating system version contains very old packages for MySQL, PHP, and Apache web server, we generally advise against using it and recommend upgrading to version 14.04 LTS. If this is not possible, you can switch to MariaDB 10.0 by adding the [official MariaDB repository](https://downloads.mariadb.org/mariadb/repositories/#mirror=23Media&distro=Ubuntu&distro_release=precise--ubuntu_precise&version=10.0). Caution: Third-party repositories can affect the system. Installing MariaDB replaces MySQL:

    sudo apt-get update
    sudo apt-get install python-software-properties
    sudo apt-key adv --recv-keys --keyserver hkp://keyserver.ubuntu.com:80 0xcbcb082a1bb943db
    sudo add-apt-repository 'deb [arch=amd64,i386] [http://mirror.23media.de/mariadb/repo/10.0/ubuntu](http://mirror.23media.de/mariadb/repo/10.0/ubuntu) precise main'
    sudo apt-get update
    sudo apt-get install mariadb-server php5-mysqlnd

Red Hat Enterprise Linux 7.1
----------------------------

Version 7.1 of Red Hat Enterprise Linux (RHEL) contains MariaDB 5.5 and no MySQL in its standard packages. To switch to MariaDB 10.0, only a few steps are needed [according to a MariaDB blog post](https://mariadb.com/blog/installing-mariadb-10-centos-7-rhel-7). This replaces MariaDB 5.5 with 10.0. Caution: Third-party repositories can affect the system.

!!! attention "This upgrade path refers to the 64-bit variant of the operating system."

First, the existing version is uninstalled:

    sudo yum remove mariadb-server mariadb-libs

Then the file /etc/yum.repos.d/MariaDB.repo must be created and edited:

    # MariaDB 10.0 RedHat repository list
    # http://mariadb.org/mariadb/repositories/
    [mariadb]
    name = MariaDB
    baseurl = http://yum.mariadb.org/10.0/rhel7-amd64
    gpgkey=https://yum.mariadb.org/RPM-GPG-KEY-MariaDB
    gpgcheck=1

Finally, the packages are installed, the MariaDB server is started, and the databases are brought up to date:

    sudo yum install MariaDB-server MariaDB-client
    sudo /etc/init.d/mysql start
    sudo mysql_upgrade -uroot -p

In some cases, removing the packages mentioned earlier also uninstalls the associated PHP extension. The following commands are needed to reinstall it:

    sudo yum install php-mysqlnd.x86_64
    sudo service httpd restart

Red Hat Enterprise Linux 6.7
----------------------------

Version 6.7 of Red Hat Enterprise Linux (RHEL) contains MySQL 5.1 and no MariaDB in its standard packages. Since this operating system version contains very old packages for MySQL, PHP, and Apache web server, we generally advise against using it and recommend upgrading to version 7.1. If this is not possible, you can switch to MariaDB 10.0 by adding the [official MariaDB repository](https://downloads.mariadb.org/mariadb/repositories/#mirror=23Media&distro=RedHat&distro_release=rhel6-amd64--rhel6&version=10.0), as [described in a MariaDB blog post](https://mariadb.com/kb/en/mariadb/yum/). Caution: Third-party repositories can affect the system.

!!! attention "This upgrade path refers to the 64-bit variant of the operating system."

First, the existing version is uninstalled:

    sudo yum remove mysql-server mysql-libs

Then the file **/etc/yum.repos.d/MariaDB**.repo must be created and edited:

    # MariaDB 10.0 RedHat repository list
    # [http://mariadb.org/mariadb/repositories/](http://mariadb.org/mariadb/repositories/)
    [mariadb]
    name = MariaDB
    baseurl = http://yum.mariadb.org/10.0/rhel6-amd64
    gpgkey=https://yum.mariadb.org/RPM-GPG-KEY-MariaDB
    gpgcheck=1

Finally, the package is installed:

    sudo yum install MariaDB-server MariaDB-client

SUSE Linux Enterprise Server 12
-------------------------------

Version 12 of SUSE Linux Enterprise Server (SLES) already contains MariaDB 10.0 in its standard packages but no MySQL. Therefore, no upgrade is necessary.

Windows Server 2008/2012
------------------------

If Windows Server 2008/2012 is used, XAMPP is recommended. This distribution provided by [Apache Friends](https://www.apachefriends.org/) includes, among other things, the Apache web server, PHP, and MariaDB. Care should be taken to always use the current version.

!!!attention "Since XAMPP has neither official documentation nor an update mechanism, the upgrade path may be very complicated and error-prone. A **current [backup](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md)** **and thorough testing** after the upgrade are therefore indispensable."

If a XAMPP version with MariaDB 10.0 is not already in use, the following steps are necessary:

1. Copy the XAMPP directory, usually at C:\xampp\
2. Download the current version of XAMPP from the [official website](https://www.apachefriends.org/) 
3. Uninstall the previous XAMPP version
4. Delete the XAMPP directory
5. Install the new XAMPP version in the same directory
6. Restore the htdocs and mysql\data directories from the copy of the XAMPP directory without overwriting existing files
7. Adjust configuration files to meet the [system settings](../installation/manual-installation/systemeinstellungen.md) requirements
8. Start Apache web server and MariaDB
9. Perform tests

Troubleshooting
---------------

!!! attention "Headers and client library minor version mismatch"

    After the upgrade, it may happen that _i-doit_ cannot establish a connection to the MySQL/MariaDB server. The following error message appears:

        mysqli_connect(): Headers and client library minor version mismatch. Headers:50544 Library:100024 (/var/www/html/i-doit/src/classes/components/isys_component_database_mysqli.class.php:16)

    The reason for this error lies in still-running Apache processes. The PHP bindings for MySQL/MariaDB (mysqli) are supposed to access the new MySQL/MariaDB interface, but the old interface is still in memory. Restarting Apache resolves this. Example on Debian/Ubuntu:

    sudo service apache2 restart
