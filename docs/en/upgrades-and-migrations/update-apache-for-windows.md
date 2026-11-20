---
title: Update Apache (i-doit Windows Installer)
description: Update the Apache web server of an installation made with the i-doit Windows Installer to a newer 2.4.x version without touching i-doit or its configuration
icon: material/microsoft-windows
status:
lang: en
---

# Update Apache (i-doit Windows Installer)

The [i-doit Windows Installer](../installation/manual-installation/microsoft-windows-server/index.md) ships its own
Apache web server and sets it up as the service `Apache2.4`. Windows has no package manager that updates Apache. The
update consists of replacing the Apache program files with a newer build from
[Apache Lounge](https://www.apachelounge.com/download/). The configuration and i-doit itself stay unchanged.

!!! note "Tested on 2026-11-20 with i-doit 39.2 on Windows Server 2022"
    -   i-doit Windows Installer 1.1.1 (PHP 8.4.27 Thread Safe), fresh installation with default values
    -   Apache 2.4.55 (Apache Lounge VS17) → **2.4.71** (Apache Lounge VS18, `httpd-2.4.71-261112-Win64-VS18.zip`)
    -   Checked afterwards: login, creating and saving an object, Admin Center. Rolling back to 2.4.55 was tested as well.

    The swap itself took about 3 seconds, about 2 minutes including the backup of the Apache folder. We have not tested
    other Windows versions.

## Summary

<div class="steps" markdown>
1. Create a backup or snapshot
2. Check the installed version: `C:\ProgramData\i-doit\apache-2.4\bin\httpd.exe -v`
3. Download the current "Win64" ZIP from Apache Lounge and compare the checksum
4. Bring the Visual C++ Redistributable to the version Apache Lounge requires
5. Stop the service `Apache2.4`, back up the folder `apache-2.4`
6. Replace only the folders `bin` and `modules`, `conf` and `htdocs` stay
7. Check the configuration and start the service `Apache2.4`
8. Verify in the Apache log, check i-doit
</div>

## Requirements

-   i-doit installed with the i-doit Windows Installer. Check: the folder `C:\ProgramData\i-doit\apache-2.4` exists and
    the service `Apache2.4` is running.
-   An account with administrator rights and a **PowerShell run as administrator**.
-   Internet access from the server to `www.apachelounge.com` and `aka.ms`. Without internet access, download the files
    on another computer and copy them to the server.
-   A maintenance window of a few minutes.

!!! warning "i-doit lives inside the Apache folder"
    The installer puts i-doit into `C:\ProgramData\i-doit\apache-2.4\htdocs` and the adjusted configuration into
    `C:\ProgramData\i-doit\apache-2.4\conf`. Therefore **never replace the whole `apache-2.4` folder** and never copy
    `htdocs` back from a backup when rolling back. Only `bin` and `modules` are replaced.

## 1. Back up

Before the update, create a snapshot of the virtual machine or at least back up the databases and the folder
`C:\ProgramData\i-doit`, see [Backup and restore data](../maintenance-and-operation/backup-and-restore/index.md).
Step 5 additionally backs up the Apache folder.

## 2. Record the current state

```powershell
$A = "C:\ProgramData\i-doit\apache-2.4"
& "$A\bin\httpd.exe" -v
Get-ItemProperty HKLM:\SOFTWARE\Microsoft\VisualStudio\14.0\VC\Runtimes\x64 | Select-Object Version
```

Example before the update:

```text
Server version: Apache/2.4.55 (Win64)
Apache Lounge VS17 Server built:   Feb  9 2023 09:58:39
```

The second query shows the installed Visual C++ Redistributable version, for example `v14.52.37029.00` after
step 4.

## 3. Download and verify the new build

On [apachelounge.com/download](https://www.apachelounge.com/download/), download the **"Win64"** ZIP file of the
current Apache 2.4. For every file Apache Lounge publishes a `.zip.txt` file with the SHA256 checksum. Example with the
tested build:

```powershell
$zip  = 'httpd-2.4.71-261112-Win64-VS18.zip'
$hash = '44961A929DFF16B767B3ADBCEA55760A942A00239B2891DC55806BE34029E1FC'
$dl   = 'C:\apache-update'
New-Item $dl -ItemType Directory -Force | Out-Null
curl.exe -sSL -o "$dl\$zip" "https://www.apachelounge.com/download/VS18/binaries/$zip"
(Get-FileHash "$dl\$zip" -Algorithm SHA256).Hash -eq $hash
Expand-Archive "$dl\$zip" -DestinationPath "$dl\x" -Force
```

The second to last line must print `True`. On `False`, do not use the file. File name and checksum are an example.
Apache Lounge usually only offers the current build, so always take file name, path and checksum from the download
page.

!!! tip "curl.exe instead of Invoke-WebRequest"
    `Invoke-WebRequest` from Windows PowerShell 5.1 fails on apachelounge.com with "308 Permanent Redirect".
    `curl.exe` ships with Windows and follows the redirect.

## 4. Update the Visual C++ Redistributable

Apache Lounge names the Visual C++ Redistributable version the build needs on its download page. For the VS18 build
that was 14.52.37029. The installer ships an older version (14.44 in the test). The redistributable comes directly from
Microsoft:

```powershell
curl.exe -sSL -o "$dl\vc_redist.x64.exe" https://aka.ms/vc14/vc_redist.x64.exe
(Get-AuthenticodeSignature "$dl\vc_redist.x64.exe").Status
Start-Process "$dl\vc_redist.x64.exe" -ArgumentList '/install','/quiet','/norestart' -Wait
```

The second line must print `Valid`. No reboot was needed in the test.

## 5. Stop and back up Apache

```powershell
Stop-Service Apache2.4
$bak = "C:\ProgramData\i-doit\apache-2.4-backup-$(Get-Date -Format yyyyMMdd-HHmm)"
Copy-Item $A $bak -Recurse
$bak
```

The backup also contains `htdocs` with i-doit and took about two minutes in the test. Rolling back only needs `bin` and
`modules` from it.

## 6. Replace bin and modules

```powershell
$N = "$dl\x\Apache24"
Remove-Item "$A\bin","$A\modules" -Recurse -Force
Copy-Item "$N\bin","$N\modules" $A -Recurse
```

Both folders are **replaced completely, not merged**. Older builds contain files that newer ones no longer have, and
vice versa. All other folders from the ZIP (`conf`, `htdocs`, `logs` and so on) are not copied. The service does not
need to be registered again because path and name of `httpd.exe` stay the same.

## 7. Check the configuration and start Apache

```powershell
& "$A\bin\httpd.exe" -t
Start-Service Apache2.4
Get-Service Apache2.4
```

`httpd.exe -t` must report `Syntax OK`. Apache writes `Syntax OK` to the error stream. PowerShell may
therefore display the line as an error, which it is not.

## 8. Verify and check i-doit

```powershell
& "$A\bin\httpd.exe" -v
Get-Content "$A\logs\error.log" -Tail 6
```

Result in the test:

```text
Server version: Apache/2.4.71 (Win64)
Apache Lounge VS18 Server built:   Nov 11 2026 08:56:23
... AH00455: Apache/2.4.71 (Win64) PHP/8.4.27 configured -- resuming normal operations
```

The `AH00455` line shows that the running service uses the new Apache version and has loaded PHP. Then log in to
i-doit, open and save an object and open the Admin Center.

If everything works, the folder `C:\apache-update` and, after a few days, the backup `apache-2.4-backup-...` can be
deleted.

## Pitfalls

-   **Replace only `bin` and `modules`.** Replacing the whole `apache-2.4` folder deletes i-doit (`htdocs`) and the
    `httpd.conf` adjusted by the installer.
-   **Stop Apache first.** Otherwise `httpd.exe` and the modules are locked and cannot be replaced.
-   **Visual C++ Redistributable.** Apache Lounge requires the version named on the download page. In the test the new
    build also started with the older version, but according to Apache Lounge this is not supported.

## Rollback

Tested: stop the service, copy `bin` and `modules` back from the backup, start the service. `htdocs`, `conf` and
`logs` stay untouched.

```powershell
Stop-Service Apache2.4
Remove-Item "$A\bin","$A\modules" -Recurse -Force
Copy-Item "$bak\bin","$bak\modules" $A -Recurse
& "$A\bin\httpd.exe" -t
Start-Service Apache2.4
& "$A\bin\httpd.exe" -v
```

## Further links

-   [Apache Lounge downloads](https://www.apachelounge.com/download/)
-   [Apache HTTP Server: security vulnerabilities 2.4](https://httpd.apache.org/security/vulnerabilities_24.html)
-   [System requirements](../installation/system-requirements.md)
