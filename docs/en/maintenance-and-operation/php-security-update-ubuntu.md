---
title: Install the PHP security update (Ubuntu 24.04)
description: Close the PHP vulnerabilities CVE-2026-109618 and CVE-2026-109619 on Ubuntu 24.04 LTS with on-board tools and check i-doit afterwards
icon:
status:
lang: en
---

# Install the PHP security update (Ubuntu 24.04)

On 2026-10-21, the PHP project published two critical vulnerabilities (**CVE-2026-109618** and **CVE-2026-109619**,
both remote code execution, CVSS 9.2). All modes in which PHP handles requests in long-running processes are affected,
i.e. PHP-FPM and Apache with mod_php, and therefore every i-doit installation. The PHP project considers the risk
highest for mod_php. Apart from the update, there is no complete mitigation.

This guide describes the update on **Ubuntu 24.04 LTS (Noble Numbat)** with the standard **PHP 8.3** package from the
Ubuntu repositories, as set up by the [installation guide for Ubuntu](../installation/manual-installation/ubuntu/index.md).
Third-party repositories (such as the PPA ppa:ondrej/php) are not covered here. For **Ubuntu 22.04 LTS** with PHP 8.1,
the procedure is the same with `php8.1` instead of `php8.3`; USN-8948-1 provides package revision `8.1.2-1ubuntu2.28` there.

!!! note "Tested on 2026-10-21 with i-doit 39.1 on Ubuntu 24.04.4, PHP-FPM 8.3"
    Ubuntu released the fixed packages about one hour after the publication on php.net
    (security notice USN-8948-1). All output in this guide comes from this run.

## Summary

<div class="steps" markdown>
1. Create a backup or snapshot
2. Update the packages:
    ```shell
    sudo apt update && sudo apt upgrade
    ```
3. Restart PHP-FPM and Apache:
    ```shell
    sudo systemctl restart php8.3-fpm apache2
    ```
4. Verify in the package changelog (not with `php -v`):
    ```shell
    zcat /usr/share/doc/php8.3-cli/changelog.Debian.gz | grep -m2 CVE-2026-1096
    ```
5. Check i-doit: log in, save an object, open the Admin Center
</div>

## Requirements

- Ubuntu 24.04 with PHP from the Ubuntu repositories. Check:
    ```shell
    lsb_release -d
    apt-cache policy php8.3-cli
    ```
    Under `Version table`, `security.ubuntu.com … noble-security` must be listed as a source. If the line is missing,
    the security repository is not configured in `/etc/apt/sources.list.d/ubuntu.sources` and the update cannot arrive.
- Root privileges or `sudo`.
- A maintenance window of a few minutes. i-doit is briefly unavailable while PHP-FPM restarts.

## 1. Back up

Before the update, create a snapshot of the virtual machine, or at least back up the i-doit directory, the databases
and the configuration under `/etc/php/` and `/etc/apache2/`, see [Backup and restore](backup-and-restore/index.md).
For a VM, the cleanest way is: shut down, create a snapshot, start again.

## 2. Record the initial state

```shell
php -v
dpkg -l 'php8.3*' | awk '/^ii/{print $2, $3}'
```

Example before the update:

```text
PHP 8.3.6 (cli) (built: Oct  7 2026 18:06:38) (NTS)
php8.3-cli 8.3.6-0ubuntu0.24.04.12
php8.3-fpm 8.3.6-0ubuntu0.24.04.12
```

Within an LTS release, Ubuntu stays on one PHP version (here 8.3.6) and builds security fixes into the package. The
number after `ubuntu0.24.04.` is the package revision; it counts for verification, not the PHP number in front of it.

## 3. Install the update

```shell
sudo apt update
apt list --upgradable 2>/dev/null | grep php
sudo apt upgrade
```

`apt list --upgradable` shows in advance whether the fixed packages are already in the repositories:

```text
php8.3-cli/noble-security 8.3.6-0ubuntu0.24.04.13 amd64 [upgradable from: 8.3.6-0ubuntu0.24.04.12]
php8.3-fpm/noble-security 8.3.6-0ubuntu0.24.04.13 amd64 [upgradable from: 8.3.6-0ubuntu0.24.04.12]
```

`apt upgrade` updates all PHP packages together:

```text
15 upgraded, 0 newly installed, 0 to remove and 1 not upgraded.
Get: http://security.ubuntu.com/ubuntu noble-security/main amd64 php8.3-cli amd64 8.3.6-0ubuntu0.24.04.13
Unpacking php8.3-fpm (8.3.6-0ubuntu0.24.04.13) over (8.3.6-0ubuntu0.24.04.12) ...
```

!!! warning "Nothing there yet? Check again a few minutes later"
    `security.ubuntu.com` consists of several servers that are not updated at the same time. In the test, `apt update`
    still reported "Hit" with an old index while another server already had the new packages. If
    `apt list --upgradable` shows nothing, wait a few minutes and repeat `sudo apt update`; do not switch to
    third-party repositories.

!!! warning "Deferred and held packages"
    Ubuntu rolls out some updates in stages ("phasing"). `apt upgrade` then reports something like
    `The following upgrades have been deferred due to phasing` and `1 not upgraded`. Security updates like this one are
    not phased; in the test, only an unrelated package was affected. If a PHP package is in this list,
    `sudo apt-get -o APT::Get::Always-Include-Phased-Updates=true upgrade` includes it. Use `apt-mark showhold` to
    check whether PHP packages are on *hold*; a held package remains vulnerable.

## 4. Restart the services

The package restarts PHP-FPM during the update, but Apache does not reload its modules by itself. Restart both
services explicitly and check their state:

```shell
sudo systemctl restart php8.3-fpm apache2
systemctl is-active php8.3-fpm apache2
```

Both lines must read `active`. `apache2ctl -M | grep -E 'php|proxy_fcgi'` shows which mode is running:
`proxy_fcgi_module` means PHP-FPM, `php_module` means mod_php. The installation guide sets up PHP-FPM; mod_php is
more likely found on older installations. With mod_php, `sudo systemctl restart apache2` is enough, but the update is
particularly urgent there. `needrestart` (preinstalled on Ubuntu Server) reports further services that are still
running with old libraries.

## 5. Verify: is the vulnerability closed?

**`php -v` still shows 8.3.6 after the update.** This is normal on Ubuntu: the fix is in the package revision, not in
a new PHP version. Only the build date has changed:

```text
PHP 8.3.6 (cli) (built: Oct 19 2026 15:16:58) (NTS)
```

The changelog of the installed package, which names the CVE numbers, is reliable:

```shell
zcat /usr/share/doc/php8.3-cli/changelog.Debian.gz | grep -m6 -E 'CVE-2026-1096|^php8.3 \(|SECURITY UPDATE'
```

Expected output:

```text
php8.3 (8.3.6-0ubuntu0.24.04.13) noble-security; urgency=medium
  * SECURITY UPDATE: Remote RCE via state corruption issue
    - CVE-2026-109618
    - CVE-2026-109619
```

If the CVE number appears in the top changelog entry, the installed package is fixed. In addition, the installed
package revision must match the one in the Ubuntu tracker:

```shell
dpkg -l php8.3-cli | awk '/^ii/{print $3}'
```

[Ubuntu tracker for CVE-2026-109618](https://ubuntu.com/security/CVE-2026-109618): the line `php8.3 / 24.04 LTS noble`
must read `Fixed in 8.3.6-0ubuntu0.24.04.13`. The corresponding security notice is
[USN-8948-1](https://ubuntu.com/security/notices/USN-8948-1). As long as it says "Needs evaluation" or "Pending",
there is no package yet.

!!! note "Online changelog returns 404"
    `apt-get changelog php8.3-cli` downloads the changelog from changelogs.ubuntu.com. In the test, the server answered
    "Changelog unavailable (404)" for the new version. The local changelog under `/usr/share/doc/` is available
    immediately after the update and is sufficient as proof.

## 6. Check i-doit

1. Open `http://<i-doit-host>/` in the browser and log in.
2. Open any object, change a field, save.
3. Open `http://<i-doit-host>/admin/` and log in. The pages must load without error messages.

If the page stays blank or Apache reports an error 500: check `journalctl -u php8.3-fpm -n 50` and
`/var/log/apache2/error.log`, and use `php -m` to check that all required extensions are loaded.

## Pitfalls

- **Security repository missing.** Without `noble-security` in the APT sources, no security update arrives.
- **`php8.3-fpm` is in `universe`.** In the test, the package still received the update via `noble-security/universe`.
  Ubuntu Pro is not required, but `universe` must be enabled in the sources.
- **PHP-FPM keeps running with the old binary.** `unattended-upgrades` is active by default on Ubuntu Server and may
  install the package overnight; the restart of PHP-FPM and Apache is still pending then.
  `systemctl show -p ActiveEnterTimestamp php8.3-fpm` shows when the service was last started.
- **Phasing and held packages:** see step 3.
- **Interim measure until the package arrives.** `session.upload_progress.enabled = 0` in `/etc/php/8.3/fpm/php.ini`
  mitigates one of the two vulnerabilities; the other cannot be mitigated without side effects on i-doit. Until the
  update, make the web server reachable only from the internal network.

## Rollback

Revert the snapshot or restore the backed-up directories. A downgrade of the PHP packages via APT is not intended and
makes no sense because of the open vulnerability.

## Further links

- [Critical PHP security update (October 2026)](php-security-update.md): overview for all distributions
- [PHP security advisory of 2026-10-21](https://www.php.net/archive/2026.php#2026-10-21-5)
- [USN-8948-1](https://ubuntu.com/security/notices/USN-8948-1), [Ubuntu tracker CVE-2026-109618](https://ubuntu.com/security/CVE-2026-109618),
  [CVE-2026-109619](https://ubuntu.com/security/CVE-2026-109619)
- [Update PHP (Debian/Ubuntu)](php-update.md), if an unsupported PHP version is running
- [System requirements](../installation/system-requirements.md)
