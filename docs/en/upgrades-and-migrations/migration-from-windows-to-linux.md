**Inhaltsverzeichnis**

*   1[Preparation and Assumptions](#MigrationfromWindowstoLinux-PreparationandAssumptions)
*   2[Export Data from Windows](#MigrationfromWindowstoLinux-ExportDatafromWindows)
*   3[Migrate Data to GNU/Linux](#MigrationfromWindowstoLinux-MigrateDatatoGNU/Linux)
    *   3.1[Database](#MigrationfromWindowstoLinux-Database)
        *   3.1.1[\*If the database exists for a long time this error message might appear: "Can't create table \`idoit\_data\`.\`table\_name\` (errno: 140 "Wrong create options")". You can find the solution HERE](#MigrationfromWindowstoLinux-*Ifthedatabaseexistsforalongtimethiserrormessagemightappear:"Can'tcreatetable`idoit_data`.`table_name`(errno:140"Wrongcreateoptions")".YoucanfindthesolutionHERE)
*   4[Files](#MigrationfromWindowstoLinux-Files)
    *   4.1[Cronjobs](#MigrationfromWindowstoLinux-Cronjobs)
*   5[Follow-up Work](#MigrationfromWindowstoLinux-Follow-upWork)

  

There may be good reasons to operate i-doit in [Windows](/display/en/Microsoft+Windows+Server). However, due to various reasons we recommend the use of [Linux](/pages/viewpage.action?pageId=36864037). But how do we transfer the well-established [IT-documentation](/display/en/Glossary) in an ongoing operation from one system to another as smooth as possible?

Preparation and Assumptions
---------------------------

Before starting, a few things should be kept in mind. The objective is to migrate without a long downtime and especially without data loss.

Everyone involved in working with data of i-doit should be informed about the migration in due time. Nothing is worse than angry colleagues whose work flow has been interrupted.

Additionally, all ports that will be used in accordance with i-doit should be identified. Specifically: Which third-party systems, such as [Nagios](https://kb.i-doit.com/display/de/Nagios), [OTRS](/display/en/OTRS+Help+Desk) & [Co.](/display/en/Consolidate+Data), access i-doit? During the migration, the data access should be disabled. The same applies to running [tasks](https://i-doit.atlassian.net/wiki/pages/viewpage.action?pageId=9666667), [backups](https://i-doit.atlassian.net/wiki/display/KB/Daten+sichern+und+wiederherstellen) and the monitoring, which ensures that a running Webserver answers HTTP requests through port 80/443 on the Windows system.

We assume that an instance of XAMP is used in Windows and is not or just minimally adjusted. For example, a newer version of the [Apache Friends](https://www.apachefriends.org/). The Apache Webserver, the DBMS MySQL or MariaDB and the script language PHP are installed via this distribution. In the following, we only mention MySQL, even if MariaDB is used. When you made changes to the configuration, these should be kept in mind for the new system.

Finally, we assume the new home system of i-doit is already prepared, all [system requirements](/display/en/System+Requirements) are met and [settings](/display/en/System+Settings) have been carried out. All services i-doit expects should be available on the new system: DNS, SMTP, LDAP/AD. Does everything work? Okay, let's get started.

One more thing: You should have all system accounts and passwords ready, which are used on the old as well as on the new system. These include MySQL system users (`root`) and the i-doit user for MySQL (by default `i-doit`).

Export Data from Windows
------------------------

First and foremost we take care of securing the data of the old system in order to transfer them to the new system:

1.  The Apache Webserver should be disabled so no external requests can come in. We keep the database backend MySQL running, otherwise we cannot get hold of the data.
    
2.  We compress the folder in which i-doit is installed (typically found in `C:\xampp\htdocs\`) to a ZIP file `i-doit.zip``.`
    
3.  We export the databases of i-doit (by default installations with a client are `idoit_system` and `idoit_data`) with the software `mysqldump.exe`. For this, we open the command prompt and move to the path in which the software is found (for example, at `C:\xampp\mysql\bin\`). We continue by executing the following command:
    
    [?](#)
    
    `mysqldump.exe -uidoit -p --databases idoit_system idoit_data > i-doit.sql`
    
    Upon entering the password, all data is written in the `i-doit.sql` file.
    
4.  Now we stop the MySQL process and hope that neither MySQL nor the Apache Webserver are needed ever again in Windows. ![(Zwinkern)](/s/-rg4ht/8803/xi7l17/_/images/icons/emoticons/wink.svg)
    

Migrate Data to GNU/Linux
-------------------------

After copying both the ZIP file, including the i-doit folder, and the SQL file, including the database contents, onto the new server ([WinSCP](http://winscp.net/eng/index.php) serves this purpose well), we connect via SSH (for example via [Putty](http://www.putty.org/)) and operate in the command line from now on. The Apache Webserver, MySQL and PHP are fully configured and all needed packages are properly [installed](/display/en/Installation). The only thing missing is i-doit:

### Database

1.  We import the database. For this we use the MySQL client:
    
    [?](#)
    
    `mysql -uroot -p < i-doit.sql`
    
    ###### \*If the database exists for a long time this error message might appear: "Can't create table \`idoit\_data\`.\`table\_name\` (errno: 140 "Wrong create options")". You can find the solution[HERE](https://kb.i-doit.com/pages/viewpage.action?pageId=97288433)
    
2.  After that, we connect to MySQL to set up the user needed for i-doit:
    
    [?](#)
    
    `mysql -uroot -p`
    
    The following SQL commands set up the user `idoit`, who has access to the two databases:
    
    [?](#)
    
    `grant all privileges on idoit_system.* to idoit@localhost identified by` `'mypasswd'``;`
    
    `grant all privileges on idoit_data.* to idoit@localhost identified by` `'mypasswd'``;`
    
    Then we should test this by logging in with these credentials to see if the databases can be read out correctly:
    
    [?](#)
    
    `mysql -uidoit -p,`
    
    `use idoit_system;`
    
3.  Since we are already at it, we should load the table `isys_mandator` to check the credentials:
    
    [?](#)
    
    `select``* from isys_mandator;`
    
4.  It may be the case that absolute paths are stored in the database. Affected datasets include `system.dir.file-upload` and `system.dir.image-upload` in the table `isys_settings`:
    
    [?](#)
    
    `select``* from isys_settings`
    
    Relative paths, like `upload/files/` and `upload/images/,` are legitimate.
    
5.  We close the MySQL client with the `exit;` command or by pressing `CTRL+D` .
    

Files
-----

1.  We extract the ZIP file in the desired location. In [Debian GNU/Linux](/pages/viewpage.action?pageId=36864037) this would be in `/var/www/html/`:
    
    [?](#)
    
    `sudo` `unzip i-doit.zip`
    
2.  After this, we set the permissions correctly and clear up:
    
    [?](#)
    
    `sudo` `chown` `www-data:www-data -R .`
    
    `sudo` `find` `. -``type` `d -name \* -``exec` `chmod` `775 {} \;`
    
    `sudo` `find` `. -``type` `f -``exec` `chmod` `664 {} \;`
    
    `sudo` `chmod` `774 controller tenants` `import` `updatecheck *.sh`
    
    `sudo` `rm` `-r temp/*`
    
    If needed, we delete files which may be left over from the XAMP installation.
    

Now it is time for a first big test: Can the new home of i-doit be opened via the browser? If not, something went wrong in the previous steps. A precise error analysis is important for this.

### Cronjobs

What is left is the transfer of the Windows tasks to Cronjobs. Most of the time the [i-doit controller (CLI)](/display/en/CLI) has to do recurring tasks. If you didn't set up any Tasks/Cronjobs for i-doit yet, then you should do it now.

Follow-up Work
--------------

Following this migration, you should run various tests and reactivate the interfaces between i-doit and third-party tools. It is also important to have the [backups](/display/en/Backup+and+Recovery) running. If all tests are successful (which can hopefully be presumed), the maintenance mode can be concluded and all colleagues be informed that the IT-documentation is available again.

How long does such a migration take? If the preparation and the subsequent work is ignored, such a migration takes not longer than two hours, so it's worth it. Good luck!