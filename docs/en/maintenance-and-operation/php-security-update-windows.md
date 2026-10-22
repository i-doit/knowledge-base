---
title: Installing the PHP security update (Windows)
description: Close the PHP vulnerabilities CVE-2026-109618 and CVE-2026-109619 for i-doit on Windows by replacing PHP with the fixed build from php.net, and check i-doit afterwards
icon: material/microsoft-windows
status:
lang: en
---

# Installing the PHP security update (Windows)

On October 21, 2026, the PHP project published two critical vulnerabilities (**CVE-2026-109618** and **CVE-2026-109619**,
both remote code execution without authentication, CVSS 9.2). They are fixed in **PHP 8.4.27, 8.3.36 and 8.2.35**. The
PHP project sees the highest risk with mod_php, and that is exactly how the
[i-doit Windows Installer](../installation/manual-installation/microsoft-windows-server/index.md) runs PHP: as a module in
the Apache service `Apache2.4`. Every installation with this installer is therefore affected.

On Windows, there is no package manager that updates PHP. The update consists of replacing the PHP files with the fixed
build from php.net. The `php.ini` is kept. Steps 1–8 describe this for the **i-doit Windows Installer**. For
installations [on IIS](#iis-installation-script) and [with XAMPP](#xampp), there are separate sections at the end.

!!! note "Tested on 2026-10-22 with i-doit 38 on Windows Server 2022, Apache 2.4.55 (Thread Safe, mod_php)"
    -   i-doit Windows Installer from the customer portal: PHP 8.2.23 → **8.2.35**
    -   Installation with PHP 8.4 in the same directory structure: PHP 8.4.26 → **8.4.27**

    Each freshly installed with default values, then updated with the commands from this guide. Apache was stopped for
    about 5 seconds in each case. The sample output comes from the run with PHP 8.2.

## Summary

<div class="steps" markdown>
1. Create a backup or snapshot
2. Determine the installed version: `C:\ProgramData\i-doit\php\php.exe -v`
3. Download the matching "x64 Thread Safe" build as a ZIP from php.net and compare the checksum
4. Stop the `Apache2.4` service, back up the `C:\ProgramData\i-doit\php` folder
5. Extract the ZIP over the `C:\ProgramData\i-doit\php` folder (overwrite)
6. Start the `Apache2.4` service
7. Verification: `php -v` and the line `PHP/8.x.y configured` in the Apache log
8. Check i-doit: log in, save an object, open the Admin Center
</div>

## Prerequisites

-   i-doit, installed with the i-doit Windows Installer. Check: The folder `C:\ProgramData\i-doit\php` exists and the
    `Apache2.4` service is running.
-   An account with administrator rights and a **PowerShell as administrator**.
-   Internet access from the server to `downloads.php.net`. Without internet access, download the ZIP file on another
    computer and copy it to the server.
-   A maintenance window of a few minutes. While Apache is stopped, i-doit is unavailable.

## 1. Back up

Before the update, create a snapshot of the virtual machine, or at least back up the databases and the folder
`C:\ProgramData\i-doit`, see [Backup and restore](backup-and-restore/index.md).
Step 4 additionally backs up the `php` folder.

## 2. Record the initial state

```powershell
C:\ProgramData\i-doit\php\php.exe -v
Select-String C:\ProgramData\i-doit\apache-2.4\conf\httpd.conf -Pattern 'php_module|PHPIniDir'
```

Example before the update:

```text
PHP 8.2.23 (cli) (built: Aug 27 2024 16:28:43) (ZTS Visual C++ 2019 x64)
LoadModule php_module "C:/ProgramData/i-doit/php/php8apache2_4.dll"
PHPIniDir "C:/ProgramData/i-doit/php"
```

The first line gives you the two details for the download:

-   **Version branch** (here 8.2): Stay in the same branch. Switching, for example, from 8.2 to 8.4 is a separate project,
    see [Compatibility matrix](../installation/system-requirements.md#compatibility-matrix).
-   **ZTS** means Thread Safe. For Apache with mod_php, this is correct and **mandatory**. A Non Thread Safe build (NTS)
    contains neither `php8apache2_4.dll` nor `php8ts.dll`: Apache then keeps loading the old, vulnerable files without
    any error message.

## 3. Download and verify the fixed build

The builds are available at [php.net/downloads (Windows)](https://www.php.net/downloads.php?os=windows) or in the
archive `https://downloads.php.net/~windows/releases/archives/`. You need the **"x64 Thread Safe" ZIP file**, not the
debug pack and not "Non Thread Safe":

| Installed | Target | File | SHA256 |
|---|---|---|---|
| 8.4.x | 8.4.27 | `php-8.4.27-Win32-vs17-x64.zip` | `7902fe891ff4b035d431fd429a2ec1df193ba1f6fedba425d861790465c64e6b` |
| 8.3.x | 8.3.36 | `php-8.3.36-Win32-vs16-x64.zip` | `0606810ff8fc232406aaab677b760e06af93a63a366d33ff738d4ce90501dfa5` |
| 8.2.x | 8.2.35 | `php-8.2.35-Win32-vs16-x64.zip` | `cfa6000be835931961e40740bd3b51111700061d6655ddbfe5a2125807947457` |

Download and compare the checksum (example 8.2.35; for 8.3 or 8.4, take the two variables from the table):

```powershell
$zip  = 'php-8.2.35-Win32-vs16-x64.zip'
$hash = 'cfa6000be835931961e40740bd3b51111700061d6655ddbfe5a2125807947457'
[Net.ServicePointManager]::SecurityProtocol = [Net.SecurityProtocolType]::Tls12
Invoke-WebRequest "https://downloads.php.net/~windows/releases/archives/$zip" -OutFile "$env:TEMP\$zip" -UseBasicParsing
(Get-FileHash "$env:TEMP\$zip" -Algorithm SHA256).Hash -eq $hash
```

The last line must output `True`. If it outputs `False`, do not use the file.

!!! note "Visual C++ Runtime"
    The builds require the Visual C++ Redistributable 2015–2022 (x64). The installer sets it up (version 14.44 in the
    test). It applies to vs16 and vs17 builds alike; reinstalling was not necessary. PHP 8.2.35 also ran without errors
    in the test with the older version 14.28 that ships with XAMPP.

## 4. Stop Apache and back up the PHP folder

```powershell
Stop-Service Apache2.4
$bak = "C:\ProgramData\i-doit\php-backup-$(Get-Date -Format yyyyMMdd-HHmm)"
Copy-Item C:\ProgramData\i-doit\php $bak -Recurse
$bak
```

Apache must be stopped; otherwise `php8ts.dll` and the extensions are locked and cannot be overwritten.

## 5. Extract the new PHP files

```powershell
Expand-Archive "$env:TEMP\$zip" -DestinationPath C:\ProgramData\i-doit\php -Force
```

The ZIP from php.net does **not** contain a `php.ini`, only the templates `php.ini-development` and
`php.ini-production`. The existing `php.ini` therefore remains unchanged, with all extensions, OPcache settings and
paths. To check:

```powershell
(Get-FileHash C:\ProgramData\i-doit\php\php.ini).Hash -eq (Get-FileHash "$bak\php.ini").Hash
```

If this returns `False`, copy the backed-up file back:
`Copy-Item "$bak\php.ini" C:\ProgramData\i-doit\php\php.ini -Force`.

## 6. Start Apache

```powershell
Start-Service Apache2.4
Get-Service Apache2.4
```

The status must be `Running`. If the service does not start,
`C:\ProgramData\i-doit\apache-2.4\bin\httpd.exe -t` shows the reason.

## 7. Verification: Is the vulnerability closed?

The command line and the web server must both show the new version:

```powershell
C:\ProgramData\i-doit\php\php.exe -v
Select-String C:\ProgramData\i-doit\apache-2.4\logs\error.log -Pattern 'configured' | Select-Object -Last 1
Get-Process httpd | ForEach-Object { $_.Modules } | Where-Object ModuleName -eq 'php8ts.dll' | Select-Object -First 1 FileVersion, FileName
```

Expected output:

```text
PHP 8.2.35 (cli) (built: Oct 20 2026 04:17:59) (ZTS Visual C++ 2019 x64)
... AH00455: Apache/2.4.55 (Win64) PHP/8.2.35 configured -- resuming normal operations
FileVersion FileName
----------- --------
8.2.35      C:\ProgramData\i-doit\php\php8ts.dll
```

The third line is the strongest proof: It shows the PHP library that the running Apache has actually loaded. The
version number must be at least **8.2.35**, **8.3.36** or **8.4.27**. Unlike Linux distributions, there are no
backported fixes with an old version number on Windows: The upstream version number is the proof.

In i-doit, the administration under **System Config Check** also shows the PHP version.

## 8. Check i-doit

1. Open `http://<i-doit-host>/` in the browser and log in.
2. Open any object, change a field, save.
3. Open `http://<i-doit-host>/admin/` and log in. The pages must load without error messages.

In the test, login, dashboard, object lists, export and Admin Center ran without errors after the update; load times
were the same before and after the update. Without an installed license token, i-doit first asks for the token after
login; an object can only be edited after entering it. This is independent of the update.

If the page stays white or Apache reports an error 500: check `C:\ProgramData\i-doit\apache-2.4\logs\error.log` and use
`C:\ProgramData\i-doit\php\php.exe -m` to verify that all extensions are loaded. In the test, all extensions enabled in
the `php.ini` (including `ldap`, `gd`, `intl`, `soap`) were loaded identically before and after the update.

If everything works, you can delete the ZIP file in `%TEMP%` and, after a few days, the backup `php-backup-…`.

## Pitfalls

-   **Thread Safe, not NTS.** Apache with mod_php needs the Thread Safe build. An NTS ZIP does not replace the Apache
    module files: `php.exe -v` then shows the new version, but the web server keeps running with the old one. Step 7
    reveals this.
-   **Do not switch the version branch.** From 8.2.x to 8.2.35, from 8.3.x to 8.3.36, from 8.4.x to 8.4.27. Jumping to
    another branch can change extensions and i-doit compatibility.
-   **Stop Apache first.** Otherwise extraction fails with "Access denied" or replaces only some of the files, and
    Apache then loads mixed versions.
-   **`php -v` alone is not enough.** It only checks the file on disk. Only the line in the Apache log or the loaded
    `php8ts.dll` shows that the web server uses the new version (step 7).
-   **`PHPIniDir` in the HTTPS guide.** If you set up HTTPS according to the installation guide, check that `PHPIniDir`
    in the `httpd.conf` points to `C:/ProgramData/i-doit/php`. If another path is set there, PHP may load a different
    `php.ini` or none at all. `php.exe -r "echo php_ini_loaded_file();"` shows the file in use.
-   **Warning `Failed loading C:/ProgramData/i-doit/php/ext`.** The i-doit Windows Installer from the customer portal
    writes a faulty OPcache line (`zend_extension` without a file name) into the `php.ini`. The message therefore
    appears with every `php.exe` call, identically before and after the update, and is not a consequence of the update.
    Fix: in the `php.ini`, change the line to `zend_extension=opcache`, set `opcache.enable=1` and restart Apache.
-   **Roll back only with the whole folder.** The backed-up old `php.exe` cannot be started alongside the new extensions
    (`Unable to load dynamic library …`). To roll back, always copy back the complete folder from the backup, see
    Rollback.
-   **Interim solution until the update.** `session.upload_progress.enabled = 0` in the `php.ini` mitigates one of the
    two vulnerabilities; restart Apache afterwards. The other vulnerability remains open. Until the update, make the
    server reachable only from the internal network.

## IIS (installation script)

Applies to installations according to [i-doit on IIS](../installation/manual-installation/microsoft-windows-server/iis.md).
There, PHP is located under `C:\PHP` and runs via **FastCGI** (`php-cgi.exe`), not as an Apache module. Therefore, the
**Non Thread Safe build** (NTS) is required here.

!!! note "Tested on 2026-10-22 with i-doit 39.1, Windows Server 2022, IIS 10, PHP 8.2.30 → 8.2.35 (NTS, FastCGI)"
    Installation with the corrected installation script (see warning below), initial state 8.2.30 as with the original
    script, then updated with the following commands. IIS was stopped for about 10 seconds.

```powershell
$zip  = 'php-8.2.35-nts-Win32-vs16-x64.zip'
$hash = '798ffa4b9ce22a820d57048e9695df7245bf917ed067917f256942a10918a8cc'
[Net.ServicePointManager]::SecurityProtocol = [Net.SecurityProtocolType]::Tls12
Invoke-WebRequest "https://downloads.php.net/~windows/releases/archives/$zip" -OutFile "$env:TEMP\$zip" -UseBasicParsing
(Get-FileHash "$env:TEMP\$zip" -Algorithm SHA256).Hash -eq $hash

iisreset /stop
$bak = "C:\PHP-backup-$(Get-Date -Format yyyyMMdd-HHmm)"
Copy-Item C:\PHP $bak -Recurse
Expand-Archive "$env:TEMP\$zip" -DestinationPath C:\PHP -Force
iisreset /start
```

`iisreset /stop` also ends all `php-cgi.exe` processes; otherwise the files are locked. The `php.ini` and the
`C:\PHP\cacert.pem` downloaded by the script are not in the ZIP and are kept.

**Verification:** IIS only starts `php-cgi.exe` with the first request. Therefore, call a page first, then check:

```powershell
Invoke-WebRequest http://localhost/ -UseBasicParsing | Out-Null
C:\PHP\php.exe -v
Get-Process php-cgi | ForEach-Object { $_.Modules } | Where-Object ModuleName -eq 'php8.dll' | Select-Object -First 1 FileVersion, FileName
```

Expected output:

```text
PHP 8.2.35 (cli) (built: Oct 20 2026 04:20:16) (NTS Visual C++ 2019 x64)
FileVersion FileName
----------- --------
8.2.35      C:\PHP\php8.dll
```

The second output shows the PHP library that the running FastCGI process has actually loaded. In the test, login,
saving an object and the Admin Center ran without errors afterwards.

!!! warning "Installation script no longer downloads PHP 8.2.30 (as of 2026-10-22)"
    `install.ps1` fetched PHP from `https://windows.php.net/downloads/releases/php-8.2.30-…`. Since 8.2.35 was
    released, 8.2.30 is only available in the archive; the old path returns 404, and a new installation aborts in
    step 1. The corrected script sets `$PHP_VERSION = "8.2.35"` (which also closes the vulnerabilities) and downloads
    from the archive path `https://downloads.php.net/~windows/releases/archives/php-$PHP_VERSION-nts-Win32-vs16-x64.zip`,
    where future versions also remain permanently available. With this correction, a complete new installation ran
    without errors in the test (about 10.5 minutes, i-doit 39.1).

## XAMPP

Applies to installations according to [i-doit via XAMPP](../installation/manual-installation/microsoft-windows-server/idoit-via-XAMPP.md).
PHP is located under `C:\xampp\php` and, as with the installer, runs as an **Apache module**, so the **Thread Safe
build** is required. There is no fixed XAMPP package: The newest Windows package on apachefriends.org is still
`xampp-windows-x64-8.2.12-0-VS16` with PHP 8.2.12 from November 2023. Replacing the PHP folder works, however.

!!! note "Tested on 2026-10-22 with i-doit 39.1, Windows Server 2022, XAMPP 8.2.12 (Apache 2.4.58, MariaDB 10.4.32), PHP 8.2.12 → 8.2.35 (Thread Safe)"
    XAMPP installed and configured according to the KB article (components Apache, MySQL, PHP, phpMyAdmin), Apache and
    MySQL set up as services, then updated with the following commands. Apache was stopped for about one minute
    because backing up the PHP folder with PEAR takes longer.

Stop Apache first: in the **XAMPP Control Panel**, click **Stop** for Apache or, if Apache runs as a service,
`Stop-Service Apache2.4`. Then:

```powershell
$zip  = 'php-8.2.35-Win32-vs16-x64.zip'
$hash = 'cfa6000be835931961e40740bd3b51111700061d6655ddbfe5a2125807947457'
[Net.ServicePointManager]::SecurityProtocol = [Net.SecurityProtocolType]::Tls12
Invoke-WebRequest "https://downloads.php.net/~windows/releases/archives/$zip" -OutFile "$env:TEMP\$zip" -UseBasicParsing
(Get-FileHash "$env:TEMP\$zip" -Algorithm SHA256).Hash -eq $hash

$bak = "C:\xampp\php-backup-$(Get-Date -Format yyyyMMdd-HHmm)"
Copy-Item C:\xampp\php $bak -Recurse
Expand-Archive "$env:TEMP\$zip" -DestinationPath C:\xampp\php -Force
```

Then start Apache again (Control Panel **Start** or `Start-Service Apache2.4`). The XAMPP `php.ini` is not in the ZIP
and is kept, as are the paths to `C:\xampp\apache\bin\curl-ca-bundle.crt`. The `httpd-xampp.conf` loads `php8ts.dll`,
`libpq.dll` and `libsqlite3.dll` via `LoadFile` directly from `C:\xampp\php`; all three files are in the ZIP and are
replaced as well.

**Verification** as in step 7, only with the XAMPP paths:

```powershell
C:\xampp\php\php.exe -v
Select-String C:\xampp\apache\logs\error.log -Pattern 'configured' | Select-Object -Last 1
Get-Process httpd | ForEach-Object { $_.Modules } | Where-Object ModuleName -eq 'php8ts.dll' | Select-Object -First 1 FileVersion
```

Expected: `PHP 8.2.35`, `Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.2.35 configured` and `8.2.35`. In the test, login,
saving an object and the Admin Center ran without errors afterwards; all extensions enabled in the `php.ini`
(including `ldap`, `gd`, `openssl`, `pdo_mysql`) were loaded on the command line, and under Apache all except `curl`
(see notes).

!!! note "Notes on XAMPP"
    -   The XAMPP package remains old even after the replacement (Apache 2.4.58, MariaDB 10.4.32). The PHP update only
        closes the two PHP vulnerabilities. The article [i-doit via XAMPP](../installation/manual-installation/microsoft-windows-server/idoit-via-XAMPP.md)
        therefore only uses XAMPP for Apache and PHP and installs MariaDB 10.11 separately.
    -   If Apache does not load the `curl` extension (`Unable to load dynamic library 'curl'` in the Apache log), the
        `LoadFile` lines for `brotlicommon.dll`, `brotlidec.dll`, `libssh2.dll` and `nghttp2.dll` are missing in
        `httpd-xampp.conf`. They are listed in step 3 of the article [i-doit via XAMPP](../installation/manual-installation/microsoft-windows-server/idoit-via-XAMPP.md).
        On the command line, `curl` loads even without these lines.
    -   XAMPP ships the `libsasl.dll` for LDAP in `C:\xampp\apache\bin`. In the test, `ldap` worked with PHP 8.2.35
        without replacing the file.

## i-doit Discovery (not tested)

The i-doit Discovery package (installer with JDisc) sets up PHP like the i-doit Windows Installer, but under
`C:\ProgramData\i-doit-discovery\php` and with the `httpd.conf` under `C:\ProgramData\i-doit-discovery\apache-2.4\conf`.
The procedure from steps 1–8 applies accordingly with these paths. Lacking the package, we have not tested it.

## Rollback

Stop the web server, delete the PHP folder and replace it with the backup, start the web server:

| Installation | Stop / start web server | PHP folder | Backup |
|---|---|---|---|
| i-doit Windows Installer | `Stop-Service Apache2.4` / `Start-Service Apache2.4` | `C:\ProgramData\i-doit\php` | `C:\ProgramData\i-doit\php-backup-…` |
| IIS | `iisreset /stop` / `iisreset /start` | `C:\PHP` | `C:\PHP-backup-…` |
| XAMPP | Control Panel or `Stop-Service Apache2.4` | `C:\xampp\php` | `C:\xampp\php-backup-…` |

We have not tested the rollback separately. Because of the open vulnerability, it only makes sense as an emergency
measure anyway. Better: reset the snapshot and clarify the cause.

## Further links

-   [PHP security advisory of 2026-10-21](https://www.php.net/archive/2026.php#2026-10-21-5)
-   [PHP 8 ChangeLog](https://www.php.net/ChangeLog-8.php) (8.4.27: GHSA-w8hw-w9fx-j79w, GHSA-6wmf-4rv5-p3rp)
-   [Download PHP for Windows](https://www.php.net/downloads.php?os=windows)
-   [Update PHP and MariaDB on Windows](../upgrades-and-migrations/update-php-and-mariadb-for-windows.md)
-   [Critical PHP security update (October 2026)](php-security-update.md): overview for all platforms
-   [System requirements](../installation/system-requirements.md)
