---
title: Install the PHP security update (Debian 13)
description: Close the PHP vulnerabilities CVE-2026-109618 and CVE-2026-109619 on Debian 13 with on-board tools and check i-doit afterwards
icon:
status:
lang: en
---

# Install the PHP security update (Debian 13)

On 2026-10-21, the PHP project published two critical vulnerabilities (**CVE-2026-109618** and **CVE-2026-109619**,
both remote code execution, CVSS 9.2). All modes in which PHP handles requests in long-running processes are affected,
i.e. PHP-FPM and Apache with mod_php, and therefore every i-doit installation. The PHP project considers the risk
highest for mod_php. Apart from the update, there is no complete mitigation.

This guide describes the update on **Debian 13 (trixie)** with the standard **PHP 8.4** package from the Debian
repositories, as set up by the [installation guide for Debian](../installation/manual-installation/debian/index.md).
Third-party repositories (such as deb.sury.org) are not covered here.

!!! note "Tested on 2026-10-21 with i-doit 39.1 on Debian 13.4, PHP-FPM 8.4"
    Debian released the fixed packages at 13:45 UTC, about five minutes after the publication on php.net.
    All output in this guide comes from this run.

## Summary

<div class="steps" markdown>
1. Create a backup or snapshot
2. Update the packages:
    ```shell
    sudo apt update && sudo apt upgrade
    ```
3. Restart PHP-FPM and Apache:
    ```shell
    sudo systemctl restart php8.4-fpm apache2
    ```
4. Verify in the package changelog:
    ```shell
    zcat /usr/share/doc/php8.4-cli/changelog.Debian.gz | grep -m2 CVE-2026-1096
    ```
5. Check i-doit: log in, save an object, open the Admin Center
</div>

## Requirements

- Debian 13 with PHP from the Debian repositories. Check:
    ```shell
    cat /etc/debian_version
    apt-cache policy php8.4-cli
    ```
    Under `Version table`, `security.debian.org … trixie-security` must be listed as a source. If the line is missing,
    the security repository is not configured in `/etc/apt/sources.list` and the update cannot arrive.
- Root privileges or `sudo`.
- A maintenance window of a few minutes. i-doit is briefly unavailable while PHP-FPM restarts.

## 1. Back up

Before the update, create a snapshot of the virtual machine, or at least back up the i-doit directory, the databases
and the configuration under `/etc/php/` and `/etc/apache2/`, see [Backup and restore](backup-and-restore/index.md).
For a VM, the cleanest way is: shut down, create a snapshot, start again.

## 2. Record the initial state

```shell
php -v
dpkg -l 'php8.4*' | awk '/^ii/{print $2, $3}'
```

Example before the update:

```text
PHP 8.4.26 (cli) (built: Sep 24 2026 17:16:18) (NTS)
php8.4-cli 8.4.26-1~deb13u1
php8.4-fpm 8.4.26-1~deb13u1
```

The part after the hyphen (`1~deb13u1`) is the Debian package revision. For verification it matters more than the
PHP number in front of it.

## 3. Install the update

```shell
sudo apt update
apt list --upgradable 2>/dev/null | grep php
sudo apt upgrade
```

`apt list --upgradable` shows in advance whether the fixed packages are already in the repositories:

```text
php8.4-cli/stable-security 8.4.27-1~deb13u1 amd64 [upgradable from: 8.4.26-1~deb13u1]
php8.4-fpm/stable-security 8.4.27-1~deb13u1 amd64 [upgradable from: 8.4.26-1~deb13u1]
```

If nothing appears here, Debian has not yet published the packages. Check again later, do not switch to third-party
repositories. `apt upgrade` updates all PHP packages together:

```text
15 upgraded, 0 newly installed, 0 to remove and 0 not upgraded.
Get: http://security.debian.org/debian-security trixie-security/main amd64 php8.4-fpm amd64 8.4.27-1~deb13u1
Unpacking php8.4-fpm (8.4.27-1~deb13u1) over (8.4.26-1~deb13u1) ...
```

!!! warning "Held packages"
    If the output shows `not upgraded` with a number greater than 0, use `apt-mark showhold` to check whether PHP
    packages are on *hold*. A held package remains vulnerable.

## 4. Restart the services

The package restarts PHP-FPM during the update, but Apache does not reload its modules by itself. Restart both
services explicitly and check their state:

```shell
sudo systemctl restart php8.4-fpm apache2
systemctl is-active php8.4-fpm apache2
```

Both lines must read `active`.

`apache2ctl -M | grep -E 'php|proxy_fcgi'` shows which mode is running: `proxy_fcgi_module` means PHP-FPM, `php_module` means mod_php. The [installation guide for Debian](../installation/manual-installation/debian/index.md) sets up PHP-FPM; mod_php is more likely found on older installations. With mod_php, `sudo systemctl restart apache2` is enough, but the update is particularly urgent there: the PHP project considers the risk highest for mod_php, with a demonstrated attack via an unauthenticated request before any application code runs.

## 5. Verify: is the vulnerability closed?

Debian, Ubuntu, Red Hat and SUSE often build security fixes into the existing PHP version (backport). The version
number from `php -v` is therefore not reliable proof. The changelog of the installed package, which names the CVE
numbers, is reliable:

```shell
zcat /usr/share/doc/php8.4-cli/changelog.Debian.gz | grep -m3 -E 'CVE-2026-1096|^php8.4 \('
```

Expected output:

```text
php8.4 (8.4.27-1~deb13u1) trixie-security; urgency=high
   + (CVE-2026-109618, CVE-2026-109619): Avoid state corruption via
```

If the CVE number appears in the top changelog entry, the installed package is fixed. In this case `php -v` also
shows `PHP 8.4.27`, because Debian adopted the complete new upstream version here. This is common for Debian but not
for other distributions; there, the number stays the same and only the package revision increases.

Alternatively online: [Debian Security Tracker for CVE-2026-109618](https://security-tracker.debian.org/tracker/CVE-2026-109618).
The `trixie` column shows the fixed package version; it must match `dpkg -l php8.4-cli`.

!!! note "Online changelog lags behind"
    `apt-get changelog php8.4-cli` downloads the changelog from the Debian server. Shortly after publication, the new
    version was not yet available there. The local changelog under `/usr/share/doc/` is available immediately after
    the update.

## 6. Check i-doit

1. Open `http://<i-doit-host>/` in the browser and log in.
2. Open any object, change a field, save.
3. Open `http://<i-doit-host>/admin/` and log in. The pages must load without error messages.

If the page stays blank or Apache reports an error 500: check `journalctl -u php8.4-fpm -n 50` and
`/var/log/apache2/error.log`, and use `php -m` to check that all required extensions are loaded.

## Pitfalls

- **Security repository missing.** Without `deb http://security.debian.org/debian-security trixie-security main` in
  the APT sources, no security update arrives. The installation guide for Debian sets it up; it may be missing on
  minimal installations from installation media.
- **PHP-FPM keeps running with the old binary.** If you install updates automatically (`unattended-upgrades`), you
  may already have the packages, but a restart of PHP-FPM may still be pending. `needrestart` is not preinstalled on
  Debian; `systemctl show -p ActiveEnterTimestamp php8.4-fpm` shows when the service was last started.
- **Held packages** (`apt-mark showhold`) are skipped by `apt upgrade`.
- **Interim measure until the package arrives.** Until the package is available, `session.upload_progress.enabled = 0`
  in `/etc/php/8.4/fpm/php.ini` mitigates one of the two vulnerabilities; the other cannot be mitigated without side
  effects on i-doit. Until the update, make the web server reachable only from the internal network.

## Rollback

Revert the snapshot or restore the backed-up directories. A downgrade of the PHP packages via APT is not intended and
makes no sense because of the open vulnerability.

## Further links

- [Critical PHP security update (October 2026)](php-security-update.md): overview for all distributions
- [PHP security advisory of 2026-10-21](https://www.php.net/archive/2026.php#2026-10-21-5)
- [Debian Security Tracker: CVE-2026-109618](https://security-tracker.debian.org/tracker/CVE-2026-109618),
  [CVE-2026-109619](https://security-tracker.debian.org/tracker/CVE-2026-109619)
- [Update PHP (Debian/Ubuntu)](php-update.md), if an unsupported PHP version is running
- [System requirements](../installation/system-requirements.md)
