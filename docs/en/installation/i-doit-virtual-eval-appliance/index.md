synetics provides a fully functional appliance of i-doit pro. It can be downloaded as a virtual machine.

Thanks to the virtual appliance the features of i-doit pro can be evaluated as fast as possible. You neither need knowledge of the [LAMP Stack](/display/en/Manual+Installation) nor do you have to install the software. Instead you can start immediately with a basic framework.

For testing only

The appliance is intended for testing only and should not be used in production.

**Contents**

*   1[Download](#idoitVirtualEvalAppliance-Download)
*   2[Start](#idoitVirtualEvalAppliance-Start)
*   3[Start of i-doit](#idoitVirtualEvalAppliance-Startofi-doit)
*   4[Credentials](#idoitVirtualEvalAppliance-Credentials)
*   5[Configuration](#idoitVirtualEvalAppliance-Configuration)
*   6[Scripts and Cronjobs](#idoitVirtualEvalAppliance-ScriptsandCronjobs)
*   7[Directories](#idoitVirtualEvalAppliance-Directories)
*   8[Follow-up](#idoitVirtualEvalAppliance-Follow-up)
*   9[Troubleshooting](#idoitVirtualEvalAppliance-Troubleshooting)

Download
--------

The appliance is available for download free of charge during the evaluation process. In order to request a valid trial license the form [“On Premise” on the i-doit website](https://www.i-doit.com/en/trial-version/) needs to be used.

Start
-----

The download comes as a normal ZIP file which has to be extracted after downloading. It contains an OVF file, which can be imported into popular virtualization environments.

When importing, settings may be requested (name, CPU cores, memory). The presets can be taken over without problems. If they are changed, however, it is also probable that the [settings](/display/en/System+Settings) of MariaDB and PHP have to be adjusted too. It's also important to meet the [system requirements](/display/en/System+Requirements).

![](/download/attachments/37355596/vm_import.png?version=1&modificationDate=1481037325444&api=v2)

Operating System

The installed operating system is **[Debian GNU/Linux](../manual-installation/debian.md) 10 "buster"** as 64-bit version**. If the virtualizer doesn't recognize this automatically, it is essential to enter this information manually. Otherwise it is possible that problems arise when starting and executing the VM.

Start of i-doit
---------------

During the first start, the VM tries to obtain an IP address via DHCP and shows it on the console. When you activate the IP address in the browser, the i-doit Web GUI starts to load.

You can configure the IP address via the console (see below).

Credentials
-----------

  
| Tool | Username | Password |
| --- | --- | --- |
| Tool | Username | Password |
| --- | --- | --- |
| i-doit Web GUI | **`admin`** | **`admin`** |
| i-doit Web GUI | **controller** | **controller** |
| [i-doit Admin-Center](/display/en/Admin+Center) | **`admin`** | **`idoit`** |
| SSH | **`idoitadm`** | **`idoit`** |
| MySQL (i-doit) | **`idoit`** | **`idoit`** |
| MySQL (Systemuser) | **`root`** | **`idoit`** |

Additionally, there are some [pre-defined persons and person groups](/display/en/Initial+Login) in i-doit.

Configuration
-------------

The configuration of the appliance can be carried out via the console. After logging in via SSH a menu appears:

 ![](https://ci6.googleusercontent.com/proxy/Kz5RzjVNPwOD1mllJio8W155rYrpJVvd6jHNP0Hddze3DOioJB2EB3j8AU6k813pQe78BUPTiHtk3AaIMtZmniVWzQLgGSHNCn1Fe5dhDTLgYjhzEtOtTytsHHrLJfDzcofkpASftBH4kAaUcDYvlTTZCJOrHYWFf6SjoR0TydEl3XMoWWigX1AZNinEvog3oC6udHv4DYFEzZ1nmz3-dzQ=s0-d-e1-ft#https://kb.i-doit.com/download/attachments/25591812/appliance_menu.png?version=1&modificationDate=1456160608236&api=v2&effects=drop-shadow)

  
| Shortcut | Menu item | Function |
| --- | --- | --- |
| Shortcut | Menu item | Function |
| --- | --- | --- |
| `1` | **`Configure networking`** | Set network connection; the network configuration is set to DHCP by default. |
| `2` | **`Proxy configuration`** | Set HTTP proxy for the system |
| `3` | **`E-Mail configuration`** | E-mail settings |
| `4` | **`Timezone`** | Set the time zone |
| `5` | **`Keyboard layout`** | Keyboard layout; `de` is set as default |
| `6` | **`Change idoitadm user password`** | Change the password of the User `idoitadm` |
| `7` | **``**`i-doit scripting configuration`**``** | Change settings for CLI, [cronjobs](/display/en/Cronjobs+Setup), [backup and restore](/display/en/Backup+and+Recovery) |
| `8` | **`Reboot system`** | Reboot system |
| `9` | **`Shutdown system`** | System shutdown |
| `0` | **`Launch shell`** | Open the shell for further action |
| `A` | **`Logout`** | Log out the user `idoitadm` off the system |

Scripts and Cronjobs
--------------------

The appliance is equipped with various scripts and cronjobs.

  
| Script | Purpose |
| --- | --- |
| Script | Purpose |
| --- | --- |
| **`idoit`** | i-doit CLI |
| `**idoit-backup**` | Run backup manually |
| `**idoit-restore**` | Restore |
| `**idoit-jobs**` | Run cronjobs manually |

The scripts are located at `**/usr/local/bin/**`.

Pre-configured [cronjobs](/display/en/CLI), which optimize the system regularly, exist at **`/etc/cron.d/i-doit`**.

Every night the files of i-doit are saved locally. The storage period is one week.

Directories
-----------

The following overview shows you the purpose of the directories:

| Directory | Purpose |
| --- | --- |
| Directory | Purpose |
| --- | --- |
| **`/var/www/html/`** | Installation directory of i-doit |
| **`/etc/apache2/`** | Configuration of the Apache web server |
| **``**`/etc/php/7.0/`**``** | Configuration of PHP |
| **`/etc/mysql/`** | Configuration of MariaDB |
| **`/var/log/apache2/`** | Logs of the Apache web server |
| `**/var/backups/i-doit**` | Backups |

Follow-up
---------

The appliance provides a “naked” installation of i-doit pro. This means that neither demo files nor additional [add-ons](/display/en/i-doit+pro+Add-ons) are included.

When logging in the first time, i-doit requests a valid [license](/display/en/Activate+License) which needs to be activated in order to have all features available.

Further information for first steps with i-doit are also described in the knowledge base under [Basics](/display/en/Basics).

Troubleshooting
---------------

Connection refused

If the following error message is shown when running i-doit

[?](#)

`mysqli_connect(): (HY000``/2002``): Connection refused (``/var/www/html/src/classes/components/isys_component_database_mysqli``.class.php:16)`

then the MySQL service probably didn't start. In most cases this is related to changes in the virtual hardware of the appliance without adjusting the configurations. The settings need to be either reset to the default values following a restart of the machine or the configuration at `**/etc/mysql/mariadb.conf.d/99-i-doit.cnf**` needs to be adjusted so that the hardware suffices and the MySQL service can be started again using `**systemctl start mysql**.`

VM doesn't start

If the VM doesn't start, insufficient or incompatible settings of the virtualizer could be the reason. Common virtualizers often supply helpful hints. For example, it is important to specify the correct operating system in the correct version: Debian GNU/Linux 64-bit.

Unsupported hardware family

If the applied VMware environment is not up to date, the error message `**line 25 unsupported hardware family 'vmx-10'**`is displayed during import. To enable the import you have to edit the file `**i-doit Eval Appliance 1.2.x i-doit 1.x.x.ovf**` . In the line

[?](#)

`<vssd:VirtualSystemType>vmx-10<``/vssd``:VirtualSystemType>`

you have to select a lower version. The value `**vmx-9**` is suitable for  ESXi 5.1:

[?](#)

`<vssd:VirtualSystemType>vmx-9<``/vssd``:VirtualSystemType>`

After saving, you have to update the hash value (SHA1) of the modified file in the file `**i-doit Eval Appliance 1.x.x i-doit 1.x.x.mf**` You can use the  **`sha1sum`** command under GNU/Linux:

[?](#)

`sha1sum i-doit Eval Appliance 1.2.x i-doit 1.x.x.ovf`

VSphere < 6.5.0

Our virtual appliance is encrypted with a SHA265 hash for security reasons.  
Unfortunately, vSphere only supports this at version 6.5.0.  
[Here](https://kb.vmware.com/s/article/2151537) you can find the official entry from VMware.  
It also describes how you can work with virtual machines that use a SHA265 hash in versions prior to vSphere version 6.5.0.