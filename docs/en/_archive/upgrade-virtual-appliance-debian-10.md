# Upgrade of the i-doit Virtual Eval Appliance to Debian GNU/Linux 10 "Buster"

In addition to the maintenance of i-doit, the maintenance of the underlying operating system should not be ignored. We describe the upgrade from Debian GNU/Linux in version 9 "Stretch" to 10 "Buster". In some steps the [i-doit Eval Virtual Appliance] is up to date.

!!! note ""
     Why is it worth the effort to upgrade the operating system to the latest version? There are very good reasons:

1. The IT documentation contains sensitive data that must be protected. This can only be guaranteed if all system components are up to date.
2. The switch from PHP 7.0 to 7.3 brings a measurable performance boost.

## Prerequisites

Some things need to be considered before upgrading:

-   The upgrade only describes the i-doit Virtual Eval Appliance version 1.3.x.
-   It is assumed that no changes (except updates) have been made to the system. Subsequent changes are not our responsibility.
-   Sufficient free memory is available. In the meantime, the update requires approx. 1 GByte of memory.

!!! note "To note when using VirtualBox"

    Select the appropriate virtual machine and open the machine configuration.
    Under the ==System== tab, the checkbox for ==Hardware Clock in UTC== must be activated. Otherwise the SQL server has a problem with the time setting.

## Tips

Furthermore the following should be considered before an upgrade:

-   [Backups] should be available.
-   Users of i-doit should be informed before the downtime.
-   Automatism, cronjobs and external access should be stopped for the duration of the upgrade.

The [Debian Community](https://www.debian.org/releases/buster/amd64/release-notes/index.en.html) provides many more hints for upgrading the operating system.

## Prepare Upgrade

We connect via SSH and call the menu item ==0 Launch Shell==.

Afterwards we carry out updates:

```shell
sudo apt update
sudo apt upgrade
sudo apt-get autoremove
sudo apt clean
```

The system must then be restarted. Due to a bug, the Linux kernel must be up to date:

```shell
sudo systemctl reboot
```

After the restart we connect again via SSH and call the shell in the menu. Now we make sure that version ==9.x== is in use:

```shell
cat /etc/debian_release
```

If this is not the case, the upgrade will fail.

As a precaution, the web server should be stopped so that i-doit is not called in the meantime:

```shell
sudo systemctl stop apache2.service
```

Thus everything is prepared for the upgrade.

## Upgrade

The sources for the distribution packages are now adjusted:

```shell
sudo nano /etc/apt/sources.list
```

The following line is added at the end:

```shell
deb http://deb.debian.org/debian/ buster main
deb-src http://deb.debian.org/debian/ buster main

deb http://security.debian.org/debian-security buster/updates main
deb-src http://security.debian.org/debian-security buster/updates main

deb http://deb.debian.org/debian/ buster-updates main
deb-src http://deb.debian.org/debian/ buster-updates main

deb http://mirrors.kernel.org/debian buster main contrib

deb http://mirrors.kernel.org/debian buster main contrib
```

All previous lines are commented out. Each line is preceded by a ==#==.

Then the package sources are updated and the packages are updated:

```shell
sudo apt update
sudo apt upgrade
```

The last command requires multiple user interactions:

1. The question ==Restart services during package upgrades without asking?== have to be answered =="Yes"==.
2. Overwriting ==Configuration file '/etc/issue'== have to be answered with ==N==.
3. Overwriting ==Configuration file '/etc/issue.net'== have to be answered with ==N==.

Now follows the actual upgrade of the packages to new versions:

```shell
sudo apt dist-upgrade
```

So that the new Linux kernel becomes active, we restart the system:

```shell
sudo systemctl reboot
```

The upgrade to version 10 "Buster" is now complete.

## Follow-up

After the reboot we connect to the system via SSH again and call the shell in the menu.

First we clean up the distribution packages:

```shell
sudo apt autoremove
sudo apt clean
```

Now we have to adapt the Apache webserver and PHP, because instead of PHP 7.0 now 7.3 is included:

```shell
sudo cp /etc/php/7.0/mods-available/i-doit.ini /etc/php/7.3/mods-available
sudo phpenmod -v 7.3 i-doit
sudo apt install php7.3-bcmath php7.3-cli php7.3-common php7.3-curl php7.3-gd php7.3-imagick php7.3-json php7.3-ldap php7.3-memcached php7.3-mysql php7.3-pgsql php7.3-xml php7.3-zip
sudo a2dismod php7.0
sudo a2enmod php7.3
sudo systemctl restart apache2.service
```

And last but not least the version number of the appliance:

```shell
sudo nano /etc/i-doit/appliance.conf
```

Content:

```shell
APPLIANCE_VERSION="1.3.1"
```

This also concludes the postprocessing. Now all automatism can be started again. The downtime is finished and i-doit can be called again by the users as usual.
