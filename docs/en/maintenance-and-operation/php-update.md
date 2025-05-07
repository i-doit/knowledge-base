---
title: Updating PHP Debian/Ubuntu
description: Things to keep in mind when updating PHP
icon:
status:
lang: en
---

## Introduction

Updating the PHP version on a web server is an important step to ensure security, performance and compatibility of modern web applications. This article focuses on using the PHP versions provided directly by your current Ubuntu or Debian distribution.

### Why update PHP?

- **Security**: Older PHP versions often no longer receive active security support from the PHP developers. The distributions (Ubuntu, Debian) can provide security updates for the versions they provide for longer, but switching to a newer, actively supported version is generally safer.
- **Performance**: Newer versions of PHP often come with significant performance improvements.
- **New features**: Each new major PHP version introduces new language features and improvements.

### What this article covers

This help article guides you step-by-step through the process of upgrading PHP (or installing the latest version supported by the distribution) on servers running Ubuntu or Debian. One focus is on the subsequent configuration of the Apache web server. The two most common integration methods are explained in detail:

- **mod_php**: PHP is embedded as a direct module in the Apache process.
- **PHP-FPM**: PHP runs as a separate service, and Apache forwards PHP requests to this service.

!!!warning "Important note: **Backups**!"
    Before starting any update work, it is essential to create a complete backup of the system or at least all relevant configuration files (`/etc/apache2/`, `/etc/php/`) and website data.

## Important preliminary remark: PHP versions in official repositories

This article describes how to update PHP using only the official package sources of your current Ubuntu/Debian distribution. This means:

- You can only upgrade to (or install) the PHP version that your specific distribution version (e.g. Ubuntu 22.04 LTS, Debian 12 "Bookworm") officially supports and offers in its standard repositories.
- To get a version of PHP that is newer than the one available in your current distribution, you would usually need to upgrade the entire distribution to a newer version (e.g. from Ubuntu 22.04 to Ubuntu 24.04). A distribution upgrade is a more extensive process and is not covered in this article.

Examples of PHP versions in official repositories (status may change):

- Ubuntu 22.04 LTS ("Jammy Jellyfish"): Typically offers PHP **8.1**.
- Ubuntu 24.04 LTS ("Noble Numbat"): Typically offers PHP **8.3**.
- Debian 11 ("Bullseye"): Typically provides PHP **7.4** (no longer supported).
- Debian 12 ("Bookworm"): Typically offers PHP **8.2**.

You must determine the PHP version available for your specific system version.

## TL;DR aka. too long; didn't read
<div class="steps" markdown>
1. Create a backup
2. Install new packages `sudo apt install libapache2-mod-fcgid php8.3-{bcmath,cli,common,curl,fpm,gd,imagick,ldap,mbstring,memcached,mysql,pgsql,soap,xml,zip}`
3. Start PHP-FPM etc. `sudo systemctl start php8.3-fpm && sudo systemctl enable php8.3-fpm`
4. Copy or recreate PHP configuration `sudo nano /etc/php/8.3/mods-available/i-doit.ini`
    ```ini title="i-doit.ini"
    allow_url_fopen = Yes
    file_uploads = On
    magic_quotes_gpc = Off
    max_execution_time = 300
    max_file_uploads = 42
    max_input_time = 60
    max_input_vars = 10000
    memory_limit = 256M
    post_max_size = 128M
    register_argc_argv = On
    register_globals = Off
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
5. Change the handler in the VirtualHost configuration `nano /etc/apache2/sites-available/i-doit.conf` and change `SetHandler "proxy:unix:/var/run/php/php8.3-fpm.sock|fcgi://localhost/"`.
6. Activate the required Apache modules `sudo a2enmod proxy_fcgi setenvif rewrite`.
7. Restart PHP-FPM and Apache2 `sudo systemctl restart php8.3-fpm apache2`
</div>

## Preparations

:material-numeric-1-circle-outline: Update system

Make sure that your system is up to date:

```shell
sudo apt update
sudo apt upgrade
```

:material-numeric-2-circle-outline: Determine current PHP environment

Command line version (CLI):

```shell
php -v
```

Web server PHP version (using `phpinfo()`): Create a file (e.g. info.php) in the document root of your website (often `/var/www/html/`) with the following content:

```PHP title="info.php"
<?php
phpinfo();
?>
```

:material-numeric-3-circle-outline: Create backups

Save at least:

-   Apache configuration: `/etc/apache2/`
-   PHP configuration: `/etc/php/` (if available)
-   Your website data (e.g. `/var/www/html/`)


## Update PHP

:material-numeric-1-circle-outline: Check available PHP version in the official repositories

To find the main PHP version offered by your distribution, you can search the package lists. The generic package name php often installs the default version. For more specific searches (e.g. for modules for a specific version):

```shell
sudo apt-cache search php
# Or more specific, e.g. for Debian 12 (Bookworm), which contains PHP 8.2:
sudo apt-cache search php8.2
# For Ubuntu 22.04 (Jammy), which contains PHP 8.1:
sudo apt-cache search php8.1
```

Make a note of the available main version (e.g. 8.2, 8.3). In the following, this is referred to as X.Y.

:material-numeric-2-circle-outline: Installation of the PHP core packages and extensions

Install the PHP core packages for the determined version X.Y. This typically includes the CLI, the Apache module (for mod_php) or FPM.

Basic packages:

```shell
sudo apt install phpX.Y-cli
```

(Replace X.Y with the actual version, e.g. php8.2-cli or php8.3-cli). For mod_php integration:

```shell
sudo apt install libapache2-mod-phpX.Y
```

(e.g. libapache2-mod-php8.2). For PHP-FPM integration:

```shell
sudo apt install phpX.Y-fpm
```

(e.g. php8.1-fpm). Install the extensions required for your applications. The package names follow the pattern phpX.Y-<extension name>.

```shell
sudo apt install phpX.Y-{bcmath,cli,common,curl,fpm,gd,imagick,ldap,mbstring,memcached,mysql,pgsql,soap,xml,zip}
```

Adjust the list and X.Y to the available version.

## Configure Apache for the new PHP version

### Apache with mod_php

:material-numeric-1-circle-outline: Deactivate old mod_php version (if available): If you are updating from an older PHP version (e.g. A.B) with mod_php, deactivate the old module first:

```shell
sudo a2dismod phpA.B
```

:material-numeric-2-circle-outline: Activate new mod_php version: Activate the module for the new PHP version X.Y:

```shell
sudo a2enmod phpX.Y
```

Check whether the module configuration files (e.g. `/etc/apache2/mods-enabled/phpX.Y.conf` and `phpX.Y.load`) exist.

:material-numeric-3-circle-outline: Ensure Apache MPM (Multi-Processing Module): `mod_php` is typically not thread-safe and requires the mpm_prefork module. If another MPM (such as mpm_event or mpm_worker) is active, switch:

```shell
sudo a2dismod mpm_event # or mpm_worker
sudo a2enmod mpm_prefork
```

:material-numeric-4-circle-outline: Restart Apache:

```shell
sudo systemctl restart apache2
```

### Apache with php-fpm

:material-numeric-1-circle-outline: Make sure that mod_php is deactivated:

Deactivate all active mod_php versions:

```shell
sudo a2dismod phpX.Y # For each mod_php version (old and new)
```

:material-numeric-2-circle-outline: Activate the required Apache modules for PHP-FPM:

```shell
sudo a2enmod proxy_fcgi setenvif
```

The actions module can also be useful, but is not always essential.

:material-numeric-3-circle-outline: Change Apache MPM (recommended):

mpm_event is recommended for PHP-FPM:

```shell
sudo a2dismod mpm_prefork
sudo a2enmod mpm_event
```

:material-numeric-4-circle-outline: Activate PHP-FPM configuration for Apache (global method):

Many distributions include a configuration file that sets up PHP-FPM globally for Apache. Activate this for your PHP version X.Y:

```shell
sudo a2enconf phpX.Y-fpm
```

This configuration (e.g. in `/etc/apache2/conf-available/phpX.Y-fpm.conf`) forwards .php requests to the PHP-FPM Unix socket (e.g. `/run/php/phpX.Y-fpm.sock`).

:material-numeric-5-circle-outline: Customize Apache VirtualHost for PHP-FPM (per-side method, if global method is not sufficient or specific pools are used):

If you do not use the global configuration or need finer control (e.g. for different PHP versions or FPM pools per site), customize your VirtualHost. Make sure that the global configuration (if active) does not conflict with your VHost-specific configuration.

Example for a VirtualHost with Unix socket (e.g. `/run/php/phpX.Y-fpm.sock`):

```Apache title="/etc/apache2/sites-available/i-doit.conf"
<VirtualHost *:80>
    ServerName your-domain.com
    DocumentRoot /var/www/html/

    <FilesMatch \.php$>
        # Ensures that Apache forwards the request to the FPM process
        # The socket path must match the one in the FPM pool configuration
        SetHandler "proxy:unix:/run/php/phpX.Y-fpm.sock|fcgi://localhost/"
    </FilesMatch>

    <Directory /var/www/html>
        AllowOverride None
        # Add the content of the i-doit .htaccess file here (i-doit folder) see i-doit installation
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

Replace X.Y and paths accordingly. The `fcgi://localhost/` part is often a placeholder in Unix sockets, but is important for the correct transfer of SCRIPT_FILENAME.

:material-numeric-6-circle-outline: Restart PHP-FPM and Apache services:

```shell
sudo systemctl restart phpX.Y-fpm # Replace X.Y with the new PHP version
sudo systemctl restart apache2
```

## Migrate and check configuration

:material-numeric-1-circle-outline: Migration of the php.ini settings

!!! note "Important: Do not simply copy the old php.ini! Every PHP version can have changed directives."

-   **Find the new php.ini files**:
    *   CLI: `/etc/php/X.Y/cli/php.ini`
    *   Apache (mod_php): `/etc/php/X.Y/apache2/php.ini`
    *   PHP-FPM: `/etc/php/X.Y/fpm/php.ini`
-   **Compare the files**: Use diff or manually compare the new php.ini with your old one.
-   **Transfer custom settings carefully**. Typical customizations: memory_limit, upload_max_filesize, post_max_size, max_execution_time, error_reporting, date.timezone.

:material-numeric-2-circle-outline: Checking the installation

-   **Command line:**
    *   `php -v`
    *   `php -m` (shows loaded modules)
    *   `php --ini` (shows loaded php.ini for CLI)
-   **Webserver:**
    *   Use the info.php script.
    *   Check PHP version, server API and loaded php.ini.
    *   **Delete info.php** afterwards!

## Remove old PHP versions

If you have updated from an older version A.B and this is no longer required:

```shell
sudo apt purge phpA.B*
sudo apt autoremove
```

Be careful not to accidentally remove the version you have just installed.

## Common problems and their causes/solutions

*   **HTTP 500 Internal Server Error:** This is a generic error that indicates a server-side problem.
    *   **Check logs:** Examine the Apache error logs (usually `/var/log/apache2/error.log`) and the PHP FPM logs (e.g. `/var/log/php/8.2/fpm.log`, customize version) for more detailed error messages.
    *   **File permissions:** Incorrect permissions for PHP script files or the PHP-FPM Unix socket can cause this error. The Apache user (`www-data`) must have read access to the scripts and read/write access to the socket (if so configured).
    *   **Configuration errors:** Syntax errors in `.htaccess` files or Apache configuration files (`httpd.conf`, VirtualHost files) are a common cause.[30] Use `apache2ctl configtest` to check.
    *   **Missing PHP modules:** If i-doit uses a function whose PHP extension is not installed or activated.
    *   **PHP limits exceeded:** Too low values for `memory_limit` or `max_execution_time` in `php.ini` can cause scripts to crash.
    *   **Socket path mismatch:** A very common error with PHP FPM configurations is a mismatch between the socket path defined in the FPM pool configuration (`listen` directive) and the path used in the Apache VirtualHost configuration (`SetHandler` or `ProxyPassMatch`). Both must match exactly.
*   **PHP code is displayed as text / PHP file download:** This indicates that Apache is not forwarding the `.php` files to the PHP interpreter.
    *   **Missing handler:** The Apache configuration (VirtualHost) does not contain a correct handler for PHP files (e.g. the `<FilesMatch \.php$>` block is missing or incorrect).
    *   **PHP-FPM service:** The PHP-FPM service for the configured version is not running or cannot be reached by Apache (socket problem).
    *   **Competing modules:** `mod_php` may still be active and interfering with FPM processing. Make sure that `mod_php` is deactivated if FPM is used.
*   **Error messages regarding missing extensions:**
    *   Check with `php -m` or the `phpinfo()` page if all PHP extensions required for i-doit (see table 2) are installed and loaded.
    *   Make sure that the extensions are activated in the correct `php.ini` file or have been activated via `phpenmod` for the corresponding SAPI (FPM) and version.
*   **Problems after `php.ini` changes:**
    *   **Wrong file edited:** Make sure that you have edited the `php.ini` file for the correct SAPI (FPM or CLI) and PHP version.
    *   **Forgotten service restart:** Changes to the `php.ini` for FPM require a restart of the PHP-FPM service (e.g. `sudo systemctl restart php8.2-fpm`). Changes to `mod_php` require an Apache restart.
