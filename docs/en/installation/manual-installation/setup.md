# Manual installation

Once the necessary preparations are made - for example the configuration of the underlying operation system - you can begin the setup of i-doit.

## Quickstart

Extract the install package of i-doit in a folder the Apache Webserver can access. After that, open this folder in the browser and follow the setup instructions.

## Download and Extract the Install Package

The install package of the pro version is accessible for all customers in the [customer portal](../../system-administration/customer-portal.md); the installation package of the open version can be found at [i-doit.org](https://i-doit.org/). This package will be copied and extracted to the prepared server and the files and directories get the appropriate authorizations. The instructions vary according to the operating system.

### Debian GNU/Linux or Ubuntu Linux

The Apache Webserver runs with rights of the **www-data** user and the group of the same name **www-data**. The main directory of the Apache Webserver is **/var/www/html/**:

```shell
sudo mkdir /var/www/html/i-doit
sudo cp i-doit.zip /var/www/html/i-doit/
cd /var/www/html/i-doit/
sudo unzip i-doit.zip
sudo rm i-doit.zip
sudo chown www-data:www-data -R .
sudo find . -type d -name \* -exec chmod 775 {} \;
sudo find . -type f -exec chmod 664 {} \;
sudo chmod 774 controller *.sh setup/*.sh
```

### Red Hat Enterprise Linux (RHEL)

The Apache Webserver runs with rights of the **apache** user and the group of the same name **apache**. The main directory of the Apache Webserver is **/var/www/html/**:

```shell
sudo mkdir /var/www/html/i-doit
sudo cp i-doit.zip /var/www/html/i-doit/
cd /var/www/html/i-doit/
sudo unzip i-doit.zip
sudo rm i-doit.zip
sudo chown apache:apache -R .
sudo find . -type d -name \* -exec chmod 775 {} \;
sudo find . -type f -exec chmod 664 {} \;
sudo chmod 774 controller *.sh setup/*.sh
```

### Suse Linux Enterprise Server (SLES)

The Apache Webserver runs with rights of the **wwwrun** user and the group **www**. The main directory of the Apache Webserver is **/srv/www/htdocs/**:

Der Apache Webserver läuft mit den Rechten des Users **wwwrun** und der Gruppe **www**. Das Hauptverzeichnis vom Apache Webserver lautet **/srv/www/htdocs/**:

```shell
sudo mkdir /srv/www/htdocs/i-doit
sudo cp i-doit.zip /srv/www/htdocs/i-doit/
cd /srv/www/htdocs/i-doit/
sudo unzip i-doit.zip
sudo rm i-doit.zip
sudo chown wwwrun:www -R .
sudo find . -type d -name \* -exec chmod 775 {} \;
sudo find . -type f -exec chmod 664 {} \;
sudo chmod 774 controller *.sh setup/*.sh
```

### Microsoft Windows Server

The i-doit installation package is extracted in **C:\xampp\htdocs**. Generally it is not necessary to set specific file and folder permissions if the Apache Webserver that has been installed along with XAMPP uses the same user permissions.

## Run the Setup

_i-doit_ can be installed in two ways: Using the web GUI in a comfortable way (recommended for beginners) or via the console (to automate the installation for example).

### Web GUI

The setup is launched automatically as soon as i-doit is opened (example http://i-doit-host/i-doit/).

#### System check

Important system settings are prompted in the first step. The user will be notified if something is not okay.

[![System check](../../assets/images/en/installation/manual-installation/setup/1-setup.png)](../../assets/images/en/installation/manual-installation/setup/1-setup.png)

#### Directory Configuration

Here the paths are requested where the installation files or user specific files are going to be stored. You can accept the suggested options.

[![Directory configuration](../../assets/images/en/installation/manual-installation/setup/2-setup.png)](../../assets/images/en/installation/manual-installation/setup/2-setup.png)
#### Database Configuration

Important credentials and settings need to be entered for the database connection. At least two databases and one special user are created for i-doit.

[![Database configuration](../../assets/images/en/installation/manual-installation/setup/3-setup.png)](../../assets/images/en/installation/manual-installation/setup/3-setup.png)

- **Connection settings**
    - **Host:** Generally the host itself, so localhost or 127.0.0.1
    - **Port:** Generally the default port of MySQL/MariaDB, so 3306
    - **Username:** User name of the database system user, usually root
    - **Password:** Password of the user
- **MySQL user settings**
    - **Username:** User name of the i-doit databases owner, usually idoit
    - **Password:** Password of the user
- **Database settings**
    - **System Database Name:** Name of the system database, usually idoit_system
    - **Mandator Database Name:** Name of the database for the first tenant, usually idoit_data
    - **Mandator title:** Title of the tenant, usually the name of the organization that is focused on
    - **Start value for object/configuration item IDs:** Normally 1

!!! tip "Unix Socket vs. Network Port"

    PHP is able to connect to MariaDB/MySQL in two ways: For one thing, per Unix Socket, and secondly via TCP/IP. For performance reasons we recommend using the Unix Socket. The use of the Unix Socket is enforced by entering the **localhost** value in the above mentioned host configuration. Other specifications (**127.0.0.1**, FQDN or the like) result in the use of TCP/IP.

    Usually, MariaDB/MySQL opens a Unix Socket when a service is started. In the **socket** settings you specify the path, an example under [Debian GNU/Linux](/pages/viewpage.action?pageId=36864037) is **/var/run/mysqld/mysqld.sock**.  This value has to be known to PHP so that i-doit can establish a connection to MariaDB/MySQL.

    The corresponding PHP setting is **mysqli.default_socket**. When you have followed the installation instructions, you can supplement the created PHP configuration file by this setting, for example, **mysqli.default_socket = /var/run/mysqld/mysqld.sock**.

    Subsequent changes to the PHP settings will only become effective when the Apache Webserver service is restarted. Example for Debian GNU/Linux: `sudo systemctl reload apache2.service`

    This tip refers to Unix-like operating systems; it does not apply to Windows.

#### Framework Configuration

There are separate credentials in i-doit to access the i-doit [**Admin Center**](../../system-administration/admin-center.md). They can be specified here and we recommend using this option.

[![Framework configuration](../../assets/images/en/installation/manual-installation/setup/4-setup.png)](../../assets/images/en/installation/manual-installation/setup/4-setup.png)

#### Config Check

In this step all prior steps are reviewed and checked to see if the setup can take place.

#### Installation

The installtion of i-doit on the system is carried out in this step. To shorten the waiting time, a small game is offered. If you spend a lot of time with it, something in the background went wrong or your system is too slow. After the installation was competed successfully, a summary is displayed. Then i-doit can be launched and used.

### Console

!!! example "In Arbeit"

## Further steps

- [Download and Install a License](../../maintenance-and-operation/activate-license.md)
- [Set up backup](../../maintenance-and-operation/backup-and-recovery/index.md)
- [Set up Cronjobs](../../maintenance-and-operation/cronjob-setup.md)
- [Initial Login](../../basics/initial-login.md)
