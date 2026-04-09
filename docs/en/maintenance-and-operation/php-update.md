---
title: Update PHP (Debian/Ubuntu)
description: Update the PHP version for i-doit — step by step with mod_php or PHP-FPM
icon:
status:
lang: en
---

# Update PHP (Debian/Ubuntu)

New PHP versions bring security fixes, better performance, and new features. At the same time, i-doit requires specific PHP versions -- always check the [system requirements](../installation/system-requirements.md) before updating to see which versions are currently supported.

This article describes switching from one PHP version to a newer one on **Debian** and **Ubuntu** -- using official package sources without third-party repositories.

!!! warning "Backup first"
    Before the PHP update, create a complete [backup](backup-and-restore/index.md) -- at minimum of the Apache configuration (`/etc/apache2/`), the PHP configuration (`/etc/php/`), and your i-doit installation.

## Quick Guide (TL;DR)

Using the example of switching from PHP 8.2 to PHP 8.3 with PHP-FPM:

<div class="steps" markdown>
1. Create a backup
2. Install new packages:
    ```shell
    sudo apt install libapache2-mod-fcgid php8.3-{bcmath,cli,common,curl,fpm,gd,imagick,ldap,mbstring,memcached,mysql,pgsql,soap,xml,zip}
    ```
3. Start and enable PHP-FPM:
    ```shell
    sudo systemctl enable --now php8.3-fpm
    ```
4. Create the i-doit PHP configuration for the new version:
    ```shell
    sudo nano /etc/php/8.3/mods-available/i-doit.ini
    ```
    ```ini title="i-doit.ini"
    allow_url_fopen = Yes
    file_uploads = On
    max_execution_time = 300
    max_file_uploads = 42
    max_input_time = 60
    max_input_vars = 10000
    memory_limit = 256M
    post_max_size = 128M
    register_argc_argv = On
    short_open_tag = On
    upload_max_filesize = 128M
    display_errors = Off
    display_startup_errors = Off
    error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT
    log_errors = On
    default_charset = "UTF-8"
    default_socket_timeout = 60
    date.timezone = Europe/Berlin
    session.gc_maxlifetime = 604800
    session.cookie_lifetime = 0
    mysqli.default_socket = /var/lib/mysql/mysql.sock
    ```
    ```shell
    sudo phpenmod -v 8.3 i-doit
    ```
5. Switch the Apache VirtualHost to the new PHP version -- adjust the socket path in `/etc/apache2/sites-available/i-doit.conf`:
    ```apache
    SetHandler "proxy:unix:/run/php/php8.3-fpm.sock|fcgi://localhost/"
    ```
6. Enable Apache modules and restart services:
    ```shell
    sudo a2enmod proxy_fcgi setenvif rewrite
    sudo systemctl restart php8.3-fpm apache2
    ```
7. Clear the i-doit cache under **Administration > System Repair and Cleanup**
</div>

---

## Which PHP Version Does My Distribution Provide?

You can only install the PHP version that your distribution offers in its official repositories. For a newer version, you would need to upgrade the distribution itself.

| Distribution | PHP Version |
|-------------|-------------|
| Debian 12 "Bookworm" | PHP **8.2** |
| Ubuntu 22.04 LTS "Jammy" | PHP **8.1** |
| Ubuntu 24.04 LTS "Noble" | PHP **8.3** |

Check which version is available:

```shell
apt-cache search php8
```

---

## Preparations

### 1. Update the System

```shell
sudo apt update && sudo apt upgrade
```

### 2. Determine the Current PHP Version

```shell
# Command line:
php -v

# Loaded modules:
php -m

# Active configuration files:
php --ini
```

### 3. Check the Apache Integration Method

There are two ways Apache processes PHP files:

| Method | Description | Recommendation |
|--------|-------------|----------------|
| **mod_php** | PHP runs directly in the Apache process. Simple but less performant. Requires `mpm_prefork`. | For small installations |
| **PHP-FPM** | PHP runs as a separate service. Apache forwards requests via a socket. Allows `mpm_event`. | **Recommended** for production |

Check which method is currently active:

```shell
# mod_php active?
apache2ctl -M | grep php

# PHP-FPM active?
systemctl status php*-fpm
```

---

## Install PHP Packages

Install the packages for the new version. In the following example, PHP 8.2 is replaced by PHP 8.3 -- adjust the version numbers to your situation.

```shell
sudo apt install php8.3-{bcmath,cli,common,curl,fpm,gd,imagick,ldap,mbstring,memcached,mysql,pgsql,soap,xml,zip}
```

If you use mod_php instead of PHP-FPM, also install:

```shell
sudo apt install libapache2-mod-php8.3
```

---

## Migrate PHP Configuration

!!! warning "Do not copy the old php.ini"
    Each PHP version may have changed or removed directives. Transfer your customizations manually to the new configuration.

### Create the i-doit Configuration

The cleanest approach: create a dedicated `.ini` file with the i-doit-specific settings:

```shell
sudo nano /etc/php/8.3/mods-available/i-doit.ini
```

```ini title="i-doit.ini"
allow_url_fopen = Yes
file_uploads = On
max_execution_time = 300
max_file_uploads = 42
max_input_time = 60
max_input_vars = 10000
memory_limit = 256M
post_max_size = 128M
register_argc_argv = On
short_open_tag = On
upload_max_filesize = 128M
display_errors = Off
display_startup_errors = Off
error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT
log_errors = On
default_charset = "UTF-8"
default_socket_timeout = 60
date.timezone = Europe/Berlin
session.gc_maxlifetime = 604800
session.cookie_lifetime = 0
mysqli.default_socket = /var/lib/mysql/mysql.sock
```

Enable the configuration for all SAPIs (CLI and FPM):

```shell
sudo phpenmod -v 8.3 i-doit
```

The complete settings can be found at [System settings](../installation/manual-installation/system-settings.md).

### Where Are the php.ini Files Located?

| SAPI | Path |
|------|------|
| CLI | `/etc/php/8.3/cli/php.ini` |
| Apache (mod_php) | `/etc/php/8.3/apache2/php.ini` |
| PHP-FPM | `/etc/php/8.3/fpm/php.ini` |

---

## Configure Apache

### Option A: PHP-FPM (Recommended)

**1. Ensure mod_php is disabled:**

```shell
sudo a2dismod php8.2   # old version
sudo a2dismod php8.3   # the new one too — FPM does not need mod_php
```

**2. Enable Apache modules for FPM:**

```shell
sudo a2enmod proxy_fcgi setenvif rewrite
```

**3. Switch MPM to event** (better performance than prefork):

```shell
sudo a2dismod mpm_prefork
sudo a2enmod mpm_event
```

**4. Adjust VirtualHost:**

Change the socket path in `/etc/apache2/sites-available/i-doit.conf`:

```apache title="/etc/apache2/sites-available/i-doit.conf"
<VirtualHost *:80>
    ServerName cmdb.company.com
    DocumentRoot /var/www/html/

    <FilesMatch \.php$>
        SetHandler "proxy:unix:/run/php/php8.3-fpm.sock|fcgi://localhost/"
    </FilesMatch>

    <Directory /var/www/html/>
        AllowOverride All
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

!!! tip "Check the socket path"
    The path `/run/php/php8.3-fpm.sock` must match the `listen` directive in `/etc/php/8.3/fpm/pool.d/www.conf`. A mismatch is the most common cause of errors.

**5. Restart PHP-FPM and Apache:**

```shell
sudo systemctl restart php8.3-fpm apache2
```

### Option B: mod_php

**1. Disable old version, enable new one:**

```shell
sudo a2dismod php8.2
sudo a2enmod php8.3
```

**2. MPM to prefork** (mod_php requires this):

```shell
sudo a2dismod mpm_event
sudo a2enmod mpm_prefork
```

**3. Restart Apache:**

```shell
sudo systemctl restart apache2
```

---

## Verify the installation

### Verify PHP Version

```shell
# Command line:
php -v

# Web server — which version Apache uses:
php -r 'echo php_sapi_name();'
```

### Check i-doit

1. Open i-doit in the browser and verify that everything works
2. Go to **Administration > System Repair and Cleanup** and clear the cache
3. Check the system overview under **Administration > System Overview** -- there you can see the active PHP version

### Remove the Old PHP Version

If everything works, remove the old version:

```shell
sudo apt purge php8.2*
sudo apt autoremove
```

!!! warning "Caution"
    Before removing, verify that no other service on the server requires the old PHP version.

---

## Common Problems

### HTTP 500 Internal Server Error

- **Check logs**: `tail -50 /var/log/apache2/error.log` and `journalctl -u php8.3-fpm`
- **Socket mismatch**: The most common error -- the path in the VirtualHost does not match the FPM configuration
- **Missing modules**: `php -m` shows which modules are loaded. Compare with the [system requirements](../installation/system-requirements.md)
- **File permissions**: `www-data` needs read access to the PHP files
- **Configuration errors**: `apache2ctl configtest` checks the Apache syntax

### PHP Code Is Displayed as Text

Apache is not forwarding `.php` files to the PHP interpreter:

- With PHP-FPM: Is the `<FilesMatch>` block missing in the VirtualHost?
- Is the FPM service running? `systemctl status php8.3-fpm`
- Are mod_php and FPM active at the same time? This causes conflicts -- disable mod_php.

### Error Messages About Missing Extensions

Check the loaded modules and compare with the required ones:

```shell
php -m | sort
```

Install missing modules:

```shell
sudo apt install php8.3-<modulename>
```

### Changes to php.ini Have No Effect

- **Edited the wrong file?** CLI, FPM, and mod_php each have their own php.ini files
- **Service not restarted?** After changes to the FPM configuration: `sudo systemctl restart php8.3-fpm`
- **Custom .ini overridden?** Check with `php --ini` which files are loaded and in what order
