# Install i-doit for Windows Server

How to install i-doit on Windows operating system is described in this article.<br>
The i-doit installation package for Windows is provided in the [Customer Portal](../../../system-administration/customer-portal.md).

The contents of the package are as follows:

- i-doit Windows Installer.exe
- idoit-XX.zip
- src.zip
- windowsdesktop-runtime-6.0.14-win-x64.exe

The installation package will always include the latest [i-doit version](../../../version-history/index.md). Also the `src.zip` folder allows for an installation without internet connection.<br>
Since the i-doit Windows installer requires ==windowsdesktop-runtime-6.0.14==, this is also provided in case there is no internet connection available.

## Installation

After running the `i-doit Windows Installer.exe` you will see the following GUI:

[![GUI](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/1-idw.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/1-idw.png)

After clicking Install, all the required items will be installed in the background.

The following will be installed:

- ==Apache 2.4==
- ==PHP 8.0==
- ==MariaDB 10.5==
- ==i-doit-24==

!!! info "If the Windows Firewall is activated, you will be asked if want to trust the application"

If the installation was successful, a small window with the message "==i-doit has been installed successfully.==" will display.<br>
After clicking ==OK== a new browser tab with the `localhost` URL will be opened automatically and you can use i-doit to the full extent.

!!! info "If an error occurred during the installation, a log file is automatically created in the i-doit folder"

## Configuration

To configure PHP, MariaDB or Apache, you can find the respective config files in the following directories:

- ==PHP:==<br>
    `C:\ProgramData\i-doit\php\php.ini`

- ==MariaDB:==<br>
    `C:\ProgramData\MariaDB\data\my.ini`

- ==Apache:==<br>
    `C:\ProgramData\i-doit\apache-2.4\conf\httpd.conf`

## Credentials

The following credentials are set by the installer.

| What | Username | Password |
|-|-|-|
| MariaDB root | root | idoit |
| MariaDB i-doit | idoit | idoit |
| i-doit Admin Center | - | admin |

For i-doit Login credentials see [here](../../../basics/initial-login.md).

## Uninstallation

To uninstall i-doit, the Apache2 service must be stopped first.<br>
For this we enter the following command in the command prompt:

```
C:\ProgramData\i-doit\apache-2.4\bin\httpd.exe -k stop
```

Once the Apache2 service is stopped, Apache2 can be uninstalled:

```
C:\ProgramData\i-doit\apache-2.4\bin\httpd.exe -k uninstall
```

Afterwards MariaDB is uninstalled by removing MariaDB under ==Add or Remove Programs==.

[![Uninstall MariaDB](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/2-idw.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/2-idw.png)

Now the i-doit folder must be deleted and the PHP `PATH` must be removed from the environment variables:

[![Uninstall PHP](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/3-idw.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/3-idw.png)
