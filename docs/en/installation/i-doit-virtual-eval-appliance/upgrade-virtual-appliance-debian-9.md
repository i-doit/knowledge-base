Besides the maintenance of i-doit you also have to keep the regular maintenance of the operating system in mind. This article explains the upgrade of [Debian GNU/Linux](/pages/viewpage.action?pageId=36864037) in version 8 "Jessie" to version 9 "Stretch". It takes just a few steps and the [i-doit Eval Virtual Appliance](/display/en/i-doit+Virtual+Eval+Appliance) will be up to date.

Why should I upgrade?

Why should you upgrade your operating system to the latest version? There are good reasons for this:

1.  The IT documentation contains [sensitiva data which need to be protected](/display/en/Security+and+Protection). This can only be guaranteed when all system compontents are up to date.
2.  The change from PHP 5.6 to 7.0 results in a measurable improvement in performance.

**Contents**

*   1[Requirements](#UpgradeofidoitVirtualEvalAppliancetoDebianGNU/Linux9"Stretch"-Requirements)
*   2[Tips](#UpgradeofidoitVirtualEvalAppliancetoDebianGNU/Linux9"Stretch"-Tips)
*   3[Preparing the Upgrade](#UpgradeofidoitVirtualEvalAppliancetoDebianGNU/Linux9"Stretch"-PreparingtheUpgrade)
*   4[Performing the Upgrade](#UpgradeofidoitVirtualEvalAppliancetoDebianGNU/Linux9"Stretch"-PerformingtheUpgrade)
*   5[Follow-up](#UpgradeofidoitVirtualEvalAppliancetoDebianGNU/Linux9"Stretch"-Follow-up)

Requirements
------------

Before upgrading, you have to consider the following:

*   The upgrade only describes the i-doit Virtual Eval Appliance in Version 1.2.x.
*   We assume that no changes of the system were carried out (except updates). We are not responsible for subsequent changes.
*   There has to be enough available memory. The update requires approximately 1 GByte free memory.

Tips
----

You also should pay attention to the following issues before an upgrade:

*   Do you have [backups](/display/en/Backup+and+Recovery)?
*   You shoud inform i-doit users before downtime.
*   Automatisms, cronjobs and external access should be stopped during the upgrade.

You can read many additional [hints regarding the upgrade of the operating system](https://www.debian.org/releases/stretch/amd64/release-notes/index.en.html) provided by the Debian Community.

Preparing the Upgrade
---------------------

We connect via SSH and activate item `**0 Launch Shell**` in the menu.

Then we carry out updates:

[?](#)

`sudo` `apt update`

`sudo` `apt upgrade`

`sudo` `apt-get autoremove`

`sudo` `apt clean`

Afterwards, the system needs to be rebooted. Because of an error the Linux kernel has to be up to date:

[?](#)

`sudo` `systemctl reboot`

After the restart, we connect again via SSH and activate the shell in the menu to ensure that version **8.8** is used:

[?](#)

`cat` `/etc/debian_release`

If this is not the case, the upgrade will fail.

As a precautionary measure you should stop the webserver so that i-doit is not activated in the meantime:

[?](#)

`sudo` `systemctl stop apache2.service`

Now everything is prepared for the upgrade.

Performing the Upgrade
----------------------

Now the sources for the distribution packages are adapted:

[?](#)

`sudo` `nano` `/etc/apt/sources``.list`

The following line is supplemented at the end:

[?](#)

`deb http:``//mirrors``.kernel.org``/debian` `stretch main contrib`

All previous lines are commented out; a `**#**` is used as a prefix for each line.

Then all package sources are updated and a package upgrade is carried out:

[?](#)

`sudo` `apt update`

`sudo` `apt upgrade`

For the last command some user interactions are required:

1.  Answer the question **`Restart services during package upgrades without asking?`** with "`**Yes**`".
2.  Answer the question regarding the overwriting of `**Configuration file '/etc/issue'**` with `**N**`.
3.  Answer the question regarding the overwriting of  `**Configuration file '/etc/[issue.net](http://issue.net)'**` with `**N**` as well.

Now the actual upgrade of the packages to new versions is carried out:

[?](#)

`sudo` `apt dist-upgrade`

In order to activate the new Linux kernel the system is restarted:

[?](#)

`sudo` `systemctl reboot`

Thus the upgrade to version 9 is completed.

Follow-up
---------

After the restart we connect to the system again vai SSH and activate the shell in the menu.

Now we clear up the distribution packages:

[?](#)

`sudo` `apt autoremove`

`sudo` `apt clean`

Then Apache Webserver and PHP have to be adapted as PHP 7.0 instead of PHP 5.6 is provided:

[?](#)

`sudo` `cp` `/etc/php5/mods-available/i-doit``.ini` `/etc/php/7``.0``/mods-available/`

`sudo` `phpenmod -``v` `7.0 i-doit`

`sudo` `apt-get purge libapache2-mod-php5 php5`

`sudo` `apt` `install` `libapache2-mod-php php php-bcmath php-cli php-common php-curl php-gd php-imagick php-json php-ldap php-mcrypt php-memcached php-mysql php-pgsql php-xml php-zip`

`sudo` `a2enmod php7.0`

`sudo` `systemctl restart apache2.service`

Changes to the configuration files are not necessary.

Also the DBMS MariaDB has to be adapted:

[?](#)

`sudo` `mv` `/etc/mysql/conf``.d``/i-doit``.cnf` `/etc/mysql/mariadb``.conf.d``/99-i-doit``.cnf`

`sudo` `systemctl restart mysql.service`

To guarantee the correct function of the welcome screen and the menu you have to modify some lines:

[?](#)

`sudo` `nano` `/usr/local/bin/appliance_getip``.sh`

The contents is replaced by the following:

[?](#)

`#!/bin/bash`

`/bin/hostname` `-I |` `awk` `-F:` `'{ print "                                "$1 }'`

Also:

[?](#)

`sudo` `nano` `/usr/local/bin/get-ip-address`

Contents:

[?](#)

`#!/bin/bash`

`echo` ``"                                         `/bin/hostname -I`"``

And finally the version number of the appliance:

[?](#)

`sudo` `nano` `/etc/i-doit/appliance``.conf`

Contents:

[?](#)

`APPLIANCE_VERSION=``"1.3.0"`

Now also the follow-up works are completed. You can now restart all automatisms. The downtime is over and users can work with i-doit as usual.