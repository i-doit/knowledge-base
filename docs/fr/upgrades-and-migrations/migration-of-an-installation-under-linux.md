# Migration of an Installation under GNU/Linux

This article focuses on the general procedure to migrate an i-doit installation from one GNU/Linux to another one. The migration includes databases as well as files and directories.

## Preparation and Assumptions

!!! warning "Both systems have to be on the same i-doit version"

You have to observe a few things to guarantee a smooth migration:

1. i-doit and optional [add-ons](../i-doit-pro-add-ons/index.md) should be [up to date](../maintenance-and-operation/update.md).
2. No changes should be made to the old system, so that we are able to return quickly to the original status when trouble strikes.
3. The commands shown here apply to a current Debian GNU/Linux and should be modified in correspondence with the environment. Avoid a blind approach regarding the execution of commands.

## Preparation of the New System

First of all, it is necessary to prepare the new systems as far as possible by observing the following:

1. The new operating system meets the [system requirements](../installation/system-requirements.md) and is up to date.
2. The [system settings](../installation/manual-installation/system-settings.md) have been configured on the new operating system.
3. The usual [security measures](../maintenance-and-operation/security-and-protection.md) have been carried out.

## Closing Down the Old System

The old system should not be used productively during the migration process anymore:

1. Of course, down times are annoying, especially when users do not expect it. Therefore you should inform i-doit users about the upcoming migration of the installation and about the approximate length of downtime.
2. You should deactivate [automated access of third-party systems](../automation-and-integration/index.md).
3. Also [cronjobs](../automation-and-integration/cli/index.md) should be deactivated. In most cases, it is sufficient to comment out the command lines.
4. After the above mentioned points have been completed, you should stop the Apache Webserver:

        sudo systemctl stop apache2.service

## Migration of Files and Directories

1. We copy the complete i-doit installation directory from the old system to the new system. In many cases, the directory is located under /var/www/html/. Here is an example with SSH, where i-doit can be found in the directory /var/www/html/i-doit/.

        scp -r user@oldsystem:/var/www/html/i-doit/ /tmp/
        scp -r /tmp/i-doit/ user@newsystem:/tmp/
        ssh user@newsystem
        sudo -u www-data cp -r /tmp/i-doit/ /var/www/html/

2. After the copying process you should ensure that the file system permissions are set correctly. The Apache webserver requires read and write permissions for the complete installation directory. In the "[Setup](../installation/manual-installation/setup.md)" article you can find additional tips. Example:

        cd /var/www/html/i-doit/
        sudo chown www-data:www-data -R .
        sudo find . -type d -name \* -exec chmod 775 {} \;
        sudo find . -type f -exec chmod 664 {} \;

3. i-doit stores internal caches under the temp/ directory. The contents should be removed completely. The caches are created automatically with the first use of i-doit:

        sudo rm -r temp/*

4. You should check if the .htaccess file was copied:

        ls -lha /var/www/html/i-doit/.htaccess

## Migration of Databases

1. i-doit requires at least two [databases](../software-development/database-model/index.md). You should create a dump of each database on the old system:

        mysqldump -uroot -p idoit_system > /tmp/idoit_system.sql
        mysqldump -uroot -p idoit_data > /tmp/idoit_data.sql

    \*If the database exists for a long time this error message might appear: "Can't create table \idoit\_data\.\table\_name\ (errno: 140 "Wrong create options")". You can find the solution [HERE](../system-administration/troubleshooting/cant-create-table.md)

2. We copy these dumps to the new system:

        scp user@oldsystem:/tmp/idoit_system.sql /tmp/
        scp user@oldsystem:/tmp/idoit_data.sql /tmp/
        scp /tmp/idoit_system.sql user@newsystem:/tmp/
        scp /tmp/idoit_data.sql user@newsystem:/tmp/

3. Then the dumps are imported to the new system:

        mysql -uroot -p
        CREATE DATABASE idoit_system;
        CREATE DATABASE idoit_data;
        exit
        mysql -uroot -p idoit_system < /tmp/idoit_system.sql
        mysql -uroot -p idoit_data < /tmp/idoit_data.sql

4. A MySQL user was created during the initial i-doit [setup](../installation/manual-installation/setup.md) (location: idoit). This user has to be available on the new system with identical permissions and identical password. For this purpose, we log in with the superuser of MySQL:

        mysql -uroot -p

    Now we execute the required SQL commands:

        GRANT ALL PRIVILEGES ON idoit_system.* TO 'idoit'@'localhost' IDENTIFIED BY 'mypasswd';
        GRANT ALL PRIVILEGES ON idoit_data.* TO 'idoit'@'localhost' IDENTIFIED BY 'mypasswd';
        exit;

    We log in with this user for a test:

        mysql -uidoit -p

    In this context, we can also check the credentials of the tenant databases:

        SELECT * FROM idoit_system.isys_mandator;
        exit;

    The above password for the idoit user should be identical with the details in the file /var/www/html/i-doit/src/config.inc.php.

## Follow-up Work

1. Afterwards, you should adapt DNS entries, IP addresses, host names etc., so that i-doit can be accessed as usual.
2. Now interfaces to third-party systems can be reactivated. The functions should be checked.
3. Reactivate cronjobs and test them.
4. Set up [backups](../maintenance-and-operation/backup-and-recovery/index.md) and test them.
5. When the Web GUI reacts as usual and all data are available in i-doit, the migration was successful.
