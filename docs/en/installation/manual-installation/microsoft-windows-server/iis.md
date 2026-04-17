---
title: i-doit on IIS on Windows Server
description: Installing i-doit manually on Internet Information Services (IIS) on Windows Server 2022
icon: material/microsoft-windows
status:
lang: en
---

!!! note "Tested with i-doit **38**, **Windows Server 2022**, **PHP 8.2**, **MariaDB 10.6**"

This guide describes the installation of i-doit on **Internet Information Services (IIS)** on Windows Server 2022. The installation runs fully automated via a PowerShell script.

## Prerequisites

- Windows Server 2022 (Standard or Datacenter)
- Administrator access
- Internet connection (approx. 150 MB download)
- At least 4 GB RAM, 2 CPU cores, 40 GB free disk space

## Download the Installation Package

The installation package contains all required scripts:

[:material-download: Download idoit-iis-installer.zip](../../../assets/downloads/idoit-iis-installer.zip)

Extract the package, for example to `C:\install\`. The folder structure afterwards:
<!-- cSpell:disable -->
```
C:\install\
├── install.cmd      ← Launcher (double-click)
├── install.ps1      ← Main installation script
├── downloads\       ← Filled automatically
└── logs\            ← Installation log
```
<!-- cSpell:enable -->

## Start the Installation

Double-click `install.cmd`. If no administrator privileges are present, a UAC prompt for elevation will appear automatically.

The script runs through 12 steps and displays the progress in the console:

<!-- cSpell:disable -->
```
>>> Step 1/12 -- Download prerequisites <<<
    [OK]   Visual C++ 2019 Redistributable downloaded (24.2 MB).
    [OK]   PHP 8.2.30 NTS x64 downloaded (30.4 MB).
    [OK]   IIS URL Rewrite Module downloaded (5.8 MB).
    [OK]   MariaDB 10.6.25 downloaded (72.2 MB).
    [OK]   i-doit (latest) downloaded (17 MB).

>>> Step 2/12 -- Enable IIS with CGI and management features <<<
>>> Step 3/12 -- Install Visual C++ 2019 Redistributable <<<
>>> Step 4/12 -- Install PHP 8.2.30 NTS <<<
>>> Step 5/12 -- Install IIS URL Rewrite Module <<<
>>> Step 6/12 -- Install MariaDB 10.6.25 <<<
>>> Step 7/12 -- Configure MariaDB <<<
>>> Step 8/12 -- Register PHP with IIS (FastCGI handler) <<<
>>> Step 9/12 -- Extract i-doit to C:\inetpub\wwwroot <<<
>>> Step 10/12 -- Create web.config (URL rewrite rules) <<<
>>> Step 11/12 -- Initialize i-doit database <<<
>>> Step 12/12 -- Restart IIS <<<
```
<!-- cSpell:enable -->

The installation takes **10 to 20 minutes** depending on internet speed. At the end, all credentials are displayed.

## What Gets Installed

| Component                       | Version              | Location                         |
| ------------------------------- | -------------------- | -------------------------------- |
| IIS                             | 10 (Windows Feature) | Operating system                 |
| Visual C++ 2019 Redistributable | current              | System                           |
| PHP                             | 8.2 NTS              | `C:\PHP\`                        |
| MariaDB                         | 10.6                 | `C:\Program Files\MariaDB 10.6\` |
| i-doit                          | latest version       | `C:\inetpub\wwwroot\`            |

## Credentials After Installation

!!! success "Default credentials after installation"
    | Access                       | User    | Password                |
    | ---------------------------- | ------- | ----------------------- |
    | **i-doit**                   | `admin` | `admin`                 |
    | **Admin Center** (`/admin/`) | `admin` | `admin123`              |
    | **MariaDB root**             | `root`  | `idoit_secure_password` |
    | **MariaDB i-doit**           | `idoit` | `idoit_secure_password` |

!!! warning "Change passwords"
    The default passwords should be changed after installation. For production systems, adjust the parameters `$DbRootPassword`, `$DbIdoitPassword`, and `$AdminCenterPassword` at the beginning of `install.ps1` and run the installation again.

## First Steps After Installation

After completion, i-doit is accessible at `http://<server-IP>/`.

**Recommended order:**

1. **Open Admin Center** (`http://<server-IP>/admin/`) and log in with `admin` / `admin123`
2. **Import license** under **Licenses** → enter license key and click **Save & Check**
3. **Open i-doit** (`http://<server-IP>/`) and log in with `admin` / `admin`
4. Perform initial configuration (language, time zone, first objects)

## PHP Configuration

The PHP configuration is located at `C:\PHP\php.ini`. The following settings are applied by the script:
<!-- cSpell:disable -->
```ini
max_execution_time    = 300
max_input_vars        = 10000
memory_limit          = 256M
post_max_size         = 128M
upload_max_filesize   = 128M
allow_url_fopen       = On
short_open_tag        = On
date.timezone         = Europe/Berlin
session.gc_maxlifetime = 604800
curl.cainfo           = C:\PHP\cacert.pem
openssl.cafile        = C:\PHP\cacert.pem
```
<!-- cSpell:enable -->

!!! tip "The `memory_limit` can be increased to `512M` if needed, e.g. for large reports or many objects."

Enabled PHP extensions: `curl`, `fileinfo`, `gd`, `ldap`, `mbstring`, `mysqli`, `openssl`, `pdo_mysql`, `soap`, `sockets`, `zip`, `intl`

## MariaDB Configuration

The MariaDB configuration is located at `C:\Program Files\MariaDB 10.6\data\my.ini`:
<!-- cSpell:disable -->
```ini
[mysqld]
port                           = 3306
skip-networking                = OFF
innodb_buffer_pool_size        = 1G
innodb_log_file_size           = 512M
max_allowed_packet             = 128M
max_connections                = 200
innodb_file_per_table          = 1
innodb_flush_log_at_trx_commit = 1
innodb_flush_method            = O_DIRECT
innodb_stats_on_metadata       = 0
tmp_table_size                 = 32M
max_heap_table_size            = 32M
sql_mode                       =
```
<!-- cSpell:enable -->

!!! info "The query cache was removed in MariaDB 10.6. The `query_cache_*` settings from older guides are no longer relevant."

## IIS Configuration (web.config)

i-doit requires a `web.config` in `C:\inetpub\wwwroot\` for URL rewriting and Admin Center routing:
<!-- cSpell:disable -->
```xml
<?xml version="1.0" encoding="UTF-8"?>
<configuration>
    <system.webServer>
        <defaultDocument enabled="false" />
        <rewrite>
            <rules>
                <rule name="idoit_root" stopProcessing="true">
                    <match url="^$" />
                    <action type="Rewrite" url="index.php" />
                </rule>
                <rule name="idoit_admin_slash" stopProcessing="true">
                    <match url="^admin$" />
                    <action type="Redirect" url="/admin/" redirectType="Permanent" />
                </rule>
                <rule name="idoit_admin" stopProcessing="true">
                    <match url="^admin(/.*)?$" />
                    <conditions logicalGrouping="MatchAll">
                        <add input="{REQUEST_FILENAME}" matchType="IsFile" negate="true" />
                    </conditions>
                    <action type="Rewrite" url="admin/index.php" />
                </rule>
                <rule name="idoit" stopProcessing="true">
                    <match url=".*" />
                    <conditions logicalGrouping="MatchAll">
                        <add input="{REQUEST_FILENAME}" matchType="IsFile" negate="true" />
                        <add input="{REQUEST_FILENAME}" matchType="IsDirectory" negate="true" />
                    </conditions>
                    <action type="Rewrite" url="index.php" />
                </rule>
            </rules>
        </rewrite>
    </system.webServer>
</configuration>
```
<!-- cSpell:enable -->

!!! warning "The Admin Center must always be accessed with a trailing slash: `http://<server-IP>/admin/`. Without the slash, CSS files are not loaded correctly."

## Managing Services

After installation, two Windows services are running:

| Service         | Management                               |
| --------------- | ---------------------------------------- |
| **W3SVC** (IIS) | `iisreset` or Services Manager           |
| **MariaDB**     | `net start MariaDB` / `net stop MariaDB` |

Restart IIS:
<!-- cSpell:disable -->
```batch
iisreset /noforce
```
<!-- cSpell:enable -->

## Troubleshooting

### Check Installation Log

If errors occur, a detailed log is available at `C:\install\logs\install_<date>.log`.

### Known Issues

**cURL SSL error during license check**

```
cURL error 60: SSL certificate problem: unable to get local issuer certificate
```

PHP on Windows does not have access to the Windows certificate store. The script automatically installs the Mozilla CA bundle file (`cacert.pem`) and adds it to `php.ini`. If the error still occurs, check manually:
<!-- cSpell:disable -->
```batch
type C:\PHP\php.ini | findstr cainfo
```
<!-- cSpell:enable -->
The line `curl.cainfo = C:\PHP\cacert.pem` must be present.

---

**Admin Center shows no CSS (unstyled page)**

The Admin Center was accessed without a trailing slash (`/admin` instead of `/admin/`). The browser then loads CSS relative to the wrong base. The correct URL is: `http://<server-IP>/admin/`

---

**MariaDB does not start**

Port 3306 might already be in use. Check:
<!-- cSpell:disable -->
```batch
netstat -ano | findstr 3306
```
<!-- cSpell:enable -->
Further details in the Windows Event Log: **Event Viewer** -> **Windows Logs** -> **Application** -> Source `MariaDB`.

---

**PHP pages are offered as download instead of being executed**

The FastCGI handler was not registered correctly. Check:
<!-- cSpell:disable -->
```batch
%windir%\system32\inetsrv\appcmd list config /section:system.webServer/handlers | findstr PHP
```
<!-- cSpell:enable -->

## Next Step

The installation is complete. Next, import the license and configure settings:

[Continue to **Setup**](../setup.md)
