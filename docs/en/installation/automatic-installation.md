This article describes the automatic [installation](/display/en/Installation) of i-doit. All the required configuration steps are executed on a newly installed GNU/Linux operating system and i-doit is installed. Additionally, Cronjobs, backups and other useful CLI tools are included. Only the execution of a script is required for this purpose.

Scope
-----

✔ Installation of software packages

✔ Configuration of software packages

✔ Installation of i-doit

✔ Set-up of Cronjobs

✔ Set-up of backups

✔ Set-up of Restore

Requirements
------------

*   The [system requirements](/display/en/System+Requirements) **have to be fulfilled**. An exception is the LAMP stack (Apache Web Server, MariaDB/MySQL, PHP).
*   One of the [supported](/display/en/System+Requirements) GNU/Linux operating systems is installed freshly. We recommend Debian GNU/Linux 10 "Buster".
*   The system can access i-doit packet repositories and web services via an internet connection.

Use
---

The installation is carried out by a [script](https://github.com/bheisig/i-doit-scripts#install-i-doit-on-a-gnulinux-operating-system) which is executed on the operating system.

The following steps are carried out via the command line. For this purpose, you can connect, for example, via **SSH**. Afterwards, you download the script and enable its execution:

  

[?](#)

`wget https:``//raw``.githubusercontent.com``/i-doit/scripts/main/idoit-install`

`chmod` `755 idoit-``install`

The scipt has to be executed with `**root**` rights. If `**sudo**`  is available:

[?](#)

`sudo` `.``/idoit-install`

Alternatively, you log in as `**root**`:

[?](#)

`su`

`.``/idoit-install`

The script asks several questions regarding the configuration. For all questions there are predefined answers which you can accept by pressing `**ENTER**`.

Next Steps
----------

*   [Installation of a valid license (only i-doit pro)](/display/en/Activate+License)
*   [Follow the tips regarding security and protection](/display/en/Security+and+Protection)
*   [First steps with i-doit](/display/en/Basics)