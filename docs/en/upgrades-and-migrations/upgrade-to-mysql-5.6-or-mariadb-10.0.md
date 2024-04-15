# Upgrade to MySQL 5.6 or MariaDB 10.0

Beginning with version 1.7 of i-doit the [system requirements](../installation/system-requirements.md) for the database back end change. While version 1.6 required at least MySQL 5.5 or MariaDB 5.5, version 1.7 requires MySQL 5.6 or MariaDB 10.0. This may also entail changes to the [operating systems](../installation/manual-installation/index.md) which are supported by synetics. This article describes the most important details to ensure that i-doit continues to function completely.

In order to determine which version is in use, the following command can be executed in the command line (this works with both MySQL and MariaDB):

    mysql --version

For each operating system there may be multiple upgrade paths. We recommend the use of those, which, from our point of view, have the least impact on the system:

| **Operating System** | **Version** | **Old Database Back End** | **New Database Back End** |
| --- | --- | --- | --- |
| Debian GNU/Linux | 8   | MySQL 5.5, MariaDB 10.0 | MariaDB 10.0 |
|     | 7.8 | MySQL 5.5 | MariaDB 10.0 |
| Ubuntu | 14.04 LTS | MySQL 5.5, MySQL 5.6, MariaDB 5.5 | MySQL 5.6 |
|     | 12.04 LTS | MySQL 5.5 | MariaDB 10.0 |
| Red Hat Enterprise Linux (RHEL) | 7.1 | MariaDB 5.5 | MariaDB 10.0 |
|     | 6.7 | MySQL 5.1 | MariaDB 10.0 |
| SUSE Linux Enterprise Server (SLES) | 12  | MariaDB 10.0 | MariaDB 10.0 |
| Windows Server | 2008/2012 | depending on XAMPP version | MariaDB 10.0 |

!!! attention "Before you carry out changes to the system it is absolutely vital to [secure the data](../maintenance-and-operation/backup-and-recovery/index.md). Since the duration of the upgrade process varies depending on the operating system, all users of _i-doit_ should be informed in advance."

Debian GNU/Linux 8
------------------

Version 8 of Debian GNU/Linux contains MySQL 5.5 and MariaDB 10.0 in the standard packages. If MySQL is installed, it is sufficient to install the MariaDB package. In doing so, MySQL is replaced with MariaDB:

    sudo apt-get update
    sudo apt-get install mariadb-server php5-mysqlnd

Debian GNU/Linux 7.8
--------------------

Version 7.8 of Debian GNU/Linux contains MySQL 5.5 in the standard packages, but not MariaDB. To use MariaDB the [official repository for MariaDB can be downloaded and installed](https://downloads.mariadb.org/mariadb/repositories/#mirror=23Media&distro=Debian&distro_release=wheezy--wheezy&version=10.0). Caution: Third-party repositories may impair the system. MySQL is replaced by MariaDB when installing the latter:

    sudo apt-get update
    sudo apt-get install python-software-properties
    sudo apt-key adv --recv-keys --keyserver keyserver.ubuntu.com 0xcbcb082a1bb943db
    sudo add-apt-repository 'deb [arch=amd64,i386] [http://mirror.23media.de/mariadb/repo/10.0/debian](http://mirror.23media.de/mariadb/repo/10.0/debian) wheezy main'
    sudo apt-get update
    sudo apt-get install mariadb-server php5-mysqlnd

Ubuntu 14.04 LTS
----------------

Version 14.04 LTS of [Ubuntu](../installation/manual-installation/ubuntu-linux/index.md) contains MySQL 5.5, 5.6 and MariaDB 5.5 in the standard packages. Because of this we recommend using MySQL 5.6. Should MySQL 5.5 or MariaDB 5.5 be already installed, then these are replaced by MySQL 5.6:

    sudo apt-get update
    sudo apt-get install mysql-server-5.6 php5-mysqlnd mysql-client-core-5.6 mysql-client-5.6

Ubuntu 12.04 LTS
----------------

Version 12.04 LTS of [Ubuntu](../installation/manual-installation/ubuntu-linux/index.md) contains MySQL 5.5 in the standard packages but no MariaDB. Since this version of the operating system contains very old packages for MySQL, PHP and Apache Webserver, we do not recommend its usage and instead advise to upgrade to version 14.04 LTS. If this is not feasible, a change to MariaDB 10.0 can be made by [downloading and installing the official repository for MariaDB](https://downloads.mariadb.org/mariadb/repositories/#mirror=23Media&distro=Ubuntu&distro_release=precise--ubuntu_precise&version=10.0). Caution: Third-party repositories may impair the system. MySQL is replaced with the installation of MariaDB:

    sudo apt-get update
    sudo apt-get install python-software-properties
    sudo apt-key adv --recv-keys --keyserver hkp://keyserver.ubuntu.com:80 0xcbcb082a1bb943db
    sudo add-apt-repository 'deb [arch=amd64,i386] [http://mirror.23media.de/mariadb/repo/10.0/ubuntu](http://mirror.23media.de/mariadb/repo/10.0/ubuntu) precise main'
    sudo apt-get update
    sudo apt-get install mariadb-server php5-mysqlnd

Red Hat Enterprise Linux 7.1
----------------------------

Version 7.1 of [Red Hat Enterprise Linux (RHEL)](../installation/manual-installation/red-hat-enterprise-linux/index.md) contains MariaDB 5.5 in the standard packages but no MySQL. To change to MariaDB 10.0, only a few steps are needed [according to a blog entry from MariaDB](https://mariadb.com/blog/installing-mariadb-10-centos-7-rhel-7). In this way, MariaDB 5.5 is replaced by 10.0. Caution: Third-party repositories may impair the system.

!!! attention "This upgrade path refers to the 64bit variant of the operating system."

First of all, the current version is uninstalled:

    sudo yum remove mariadb-server mariadb-libs

After this, the file /etc/yum.repos.d/MariaDB.repo has to be created and edited:

    # MariaDB 10.0 RedHat repository list
    # [http://mariadb.org/mariadb/repositories/](http://mariadb.org/mariadb/repositories/)
    [mariadb]
    name = MariaDB
    baseurl = http://yum.mariadb.org/10.0/rhel7-amd64
    gpgkey=https://yum.mariadb.org/RPM-GPG-KEY-MariaDB
    gpgcheck=1

Finally, the packages are installed, the MariaDB server is started and the databases are updated:

    sudo yum install MariaDB-server MariaDB-client
    sudo /etc/init.d/mysql start
    sudo mysql_upgrade -uroot -p

When uninstalling the packages as mentioned earlier, the related PHP extension may be uninstalled as well. To install it again we need the following commands:

    sudo yum install php-mysqlnd.x86_64
    sudo service httpd restart

Red Hat Enterprise Linux 6.7
----------------------------

Version 6.7 of [Red Hat Enterprise Linux (RHEL)](../installation/manual-installation/red-hat-enterprise-linux/index.md) contains MySQL 5.1 in the standard packages but no MariaDB. Since this operating system version contains very old packages for MySQL, PHP and Apache webserver, we generally advise not to use it and instead recommend upgrading to version 7.1. If this is not feasible, a change to MariaDB 10.0 can be made by [downloading and installing the official repository for MariaDB](https://downloads.mariadb.org/mariadb/repositories/#mirror=23Media&distro=Ubuntu&distro_release=precise--ubuntu_precise&version=10.0) wird, as described in a [MariaDB blog entry](https://mariadb.com/kb/en/mariadb/yum/). Caution: Third-party repositories may impair the system.

!!! attention "This upgrade path refers to the 64bit variant of the operating system."

First of all, the current version is uninstalled:

    sudo yum remove mysql-server mysql-libs

After this, the file /etc/yum.repos.d/MariaDB.repo has to be created and edited:

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

Version 12 of [SUSE Linux Enterprise Server (SLES)](../installation/manual-installation/suse-linux-enterprise-server.md) already contains MariaDB 10.0 in the standard packages but not MySQL. Therefore no upgrade is needed.

Windows Server 2008/2012
------------------------

XAMPP is recommended if [Windows Server 2008/2012](../installation/manual-installation/microsoft-windows-server/index.md) is in usage. The XAMPP distribution made available by [Apache Friends](https://www.apachefriends.org/) includes Apache Webserver, PHP and MariaDB. Care should be taken to always use the latest version.

!!! attention "Since there is neither an official documentation nor an update mechanism for XAMPP, the upgrade path for it may be complicated and prone to error. Therefore a **current [backup](../maintenance-and-operation/backup-and-recovery/index.md) and extensive testing** following the upgrade are mandatory."

The following steps are needed if a version of XAMPP without MariaDB 10.0 is applied:

1. Copy the XAMPP folder, in most cases in C:\xampp\
2. Download the latest version of XAMPP from the [official website](https://www.apachefriends.org/index.html)
3. Uninstall the present XAMPP version
4. Delete the XAMPP folder
5. Install the new XAMPP version in the same folder
6. Restore the folders htdocs and mysql\data from the copy of the XAMPP folder, do no overwrite existing files
7. Adjust the configuration files, so that they meet the required [system settings](../installation/manual-installation/system-settings.md)
8. Start Apache Webserver and MariaDB5
9. Perform tests

Troubleshooting
---------------

!!! attention "Headers and client library minor version mismatch"

    It is possible that i-doit cannot build a connection to the MySQL-/MariaDB server after upgrading. The following error message is displayed:

        mysqli_connect(): Headers and client library minor version mismatch. Headers:50544 Library:100024 (/var/www/html/i-doit/src/classes/components/isys_component_database_mysqli.class.php:16)

    The reason for this error lies in the still running Apache processes. The PHP bindings for MySQL/MariaDB (mysqli) should access the new interface of MySQL/MariaDB, but the old interface is still in the memory. By restarting Apache you can solve this problem. Example for Debian/Ubuntu:

        sudo service apache2 restart
