---
title: Installing the PHP security update (Rocky Linux 10)
description: Close the PHP vulnerabilities CVE-2026-109618 and CVE-2026-109619 on Rocky Linux 10 with on-board tools and check i-doit afterwards
icon:
status:
lang: en
---

# Installing the PHP security update (Rocky Linux 10)

On October 21, 2026, the PHP project published two critical vulnerabilities (**CVE-2026-109618** and **CVE-2026-109619**,
both remote code execution, CVSS 9.2). All modes in which PHP processes requests in long-running processes are affected,
that is PHP-FPM and Apache with mod_php, and therefore every i-doit installation. The PHP project sees the highest risk
with mod_php. Apart from the update, there is no complete mitigation.

This guide describes the update on **Rocky Linux 10** with the standard package **PHP 8.3** from the AppStream
repository, as set up by the [installation guide for Rocky Linux](../installation/manual-installation/rocky-linux/index.md).
Third-party sources (such as Remi's RPM repository) are not covered here. The procedure is the same for **Red Hat
Enterprise Linux 10** and AlmaLinux 10; only the security advisory is called RHSA or ALSA there instead of RLSA.

!!! note "Tested on 2026-10-22 with i-doit 39.1 on Rocky Linux 10.2, PHP-FPM 8.3"
    Rocky Linux provided the fixed packages during the night to October 22, about nine hours after the publication on
    php.net. The security advisory [RLSA-2026:87070](https://errata.rockylinux.org/RLSA-2026:87070) followed a good
    hour later. All output in this guide comes from this run.

## Summary

<div class="steps" markdown>
1. Create a backup or snapshot
2. Update the packages:
    ```shell
    sudo dnf --refresh update 'php*'
    ```
3. Restart PHP-FPM and Apache:
    ```shell
    sudo systemctl restart php-fpm httpd
    ```
4. Verify via the package version and the security advisory:
    ```shell
    rpm -q php php-fpm
    sudo dnf updateinfo info --cve CVE-2026-109618
    ```
5. Check i-doit: log in, save an object, open the Admin Center
</div>

## Prerequisites

- Rocky Linux 10 with PHP from the AppStream repository. Check:
    ```shell
    cat /etc/os-release | head -3
    dnf repolist
    rpm -q php-fpm
    ```
    `dnf repolist` must include `appstream` and `baseos`. The package version ends in `.el10_2` (or `.el10_1`,
    depending on the minor release). If it ends in `.remi` or similar, PHP comes from a third-party source and this
    guide does not apply.
- Root privileges or `sudo`.
- A maintenance window of a few minutes. i-doit is briefly unavailable while PHP-FPM restarts.

## 1. Back up

Before the update, create a snapshot of the virtual machine, or at least back up the i-doit directory, the databases
and the configuration under `/etc/php.ini`, `/etc/php.d/`, `/etc/php-fpm.d/` and `/etc/httpd/`, see
[Backup and restore](backup-and-restore/index.md).
For a VM, the cleanest way is: shut down, create a snapshot, start again.

## 2. Record the initial state

```shell
php -v
rpm -qa 'php*' --qf '%{NAME} %{VERSION}-%{RELEASE}\n' | sort
```

Example before the update:

```text
PHP 8.3.33 (cli) (built: Jul 28 2026 17:56:10) (NTS gcc x86_64)
php 8.3.33-1.el10_2
php-cli 8.3.33-1.el10_2
php-common 8.3.33-1.el10_2
php-fpm 8.3.33-1.el10_2
```

Unlike Ubuntu or SUSE, Red Hat adopts the new PHP patch version completely in Enterprise Linux 10 ("rebase").
After the update, `php -v` therefore shows a higher version number, here 8.3.36.

## 3. Install the update

```shell
sudo dnf --refresh check-update 'php*'
sudo dnf update 'php*'
```

`check-update` shows in advance whether the fixed packages are already in the repository (exit code 100 means
"updates available", 0 means "nothing pending"):

```text
php.x86_64                           8.3.36-1.el10_2                   appstream
php-cli.x86_64                       8.3.36-1.el10_2                   appstream
php-fpm.x86_64                       8.3.36-1.el10_2                   appstream
```

`dnf update 'php*'` updates all PHP packages together:

```text
Upgrading:
 php                x86_64       8.3.36-1.el10_2          appstream       7.8 k
 php-cli            x86_64       8.3.36-1.el10_2          appstream       3.6 M
 php-fpm            x86_64       8.3.36-1.el10_2          appstream       1.9 M
Transaction Summary
Upgrade  14 Packages
Complete!
```

!!! warning "Nothing there yet? Force metadata refresh and wait for the mirrors"
    `dnf` keeps the package lists in its cache for up to 48 hours. In the test, `dnf check-update` still reported
    "nothing pending" although the packages had been on dl.rockylinux.org for six hours. Only `--refresh` (or
    `sudo dnf clean metadata`) fetched the new list. In addition, the mirrors receive the packages with a delay: during
    the download, lines such as `[MIRROR] php-8.3.36-1.el10_2.x86_64.rpm: Status code: 404` appeared. This is not an
    error; `dnf` switches to the next mirror by itself. If the transaction aborts completely, wait a few minutes and
    repeat the command; do not switch to third-party sources.

!!! note "Package group php8.4"
    Rocky Linux 10 additionally provides the package group `php8.4` (packages `php8.4`, `php8.4-fpm`, …). If you
    installed from it, update with `sudo dnf update 'php8.4*'`; the corresponding security advisory is
    [RLSA-2026:87071](https://errata.rockylinux.org/RLSA-2026:87071). Module streams (`dnf module enable php:8.3`) no
    longer exist in Enterprise Linux 10; `dnf module list php` reports "No matching Modules to list".

## 4. Restart the services

The package does not restart PHP-FPM during the update; the old processes keep running with the vulnerable binary.
Restart both services explicitly and check their state:

```shell
sudo systemctl restart php-fpm httpd
systemctl is-active php-fpm httpd
```

Both lines must read `active`. Which mode is running is shown by `httpd -M | grep -E 'php|proxy_fcgi'`:
`proxy_fcgi_module` means PHP-FPM, `php_module` means mod_php. The installation guide sets up PHP-FPM.
With mod_php, `sudo systemctl restart httpd` is enough, but the update is particularly urgent there.

Whether processes with old libraries are still running is shown by `sudo dnf needs-restarting` (plugin
`dnf-plugins-core`, preinstalled on Rocky Linux 10). After restarting both services, the output stays empty.

## 5. Verification: Is the vulnerability closed?

First check the installed version:

```shell
php -v
rpm -q php php-fpm
```

Expected output:

```text
PHP 8.3.36 (cli) (built: Oct 19 2026 14:00:34) (NTS gcc x86_64)
php-8.3.36-1.el10_2.x86_64
php-fpm-8.3.36-1.el10_2.x86_64
```

The version `8.3.36-1.el10_2` (or higher) is exactly the one from the security advisory
[RLSA-2026:87070](https://errata.rockylinux.org/RLSA-2026:87070) ("Important: php security update", published on
2026-10-22). It lists CVE-2026-109618, CVE-2026-109619 and additionally CVE-2026-91765 (denial of service in the SOAP
parser).

`dnf` can also show the security advisory locally as soon as the mirrors deliver the advisory metadata:

```shell
sudo dnf updateinfo info --cve CVE-2026-109618
sudo dnf updateinfo list --all --with-cve | grep 'php-8.3.36'
```

Expected is a line such as `CVE-2026-109618  Important/Sec. php-8.3.36-1.el10_2.x86_64` and the entry
`RLSA-2026:87070` with the status "Installed".

!!! warning "The RPM changelog does not list CVE numbers"
    `rpm -q --changelog php` only shows `rebase to 8.3.36` for this update. Unlike on Debian and Ubuntu, the changelog
    is no proof here. Reliable are the package version compared with the security advisory and the output of
    `dnf updateinfo`.

!!! note "Advisory metadata arrives later than the packages"
    In the test, the packages were on the servers from 00:58 (CEST), the security advisory RLSA-2026:87070 was visible
    on errata.rockylinux.org from 02:08, but at 07:00 `dnf updateinfo` did not know it yet. If `dnf updateinfo` shows
    nothing although `rpm -q php` already reports `8.3.36-1.el10_2`, the update is installed nonetheless.

For Red Hat Enterprise Linux 10, refer to the [Red Hat CVE page for CVE-2026-109618](https://access.redhat.com/security/cve/CVE-2026-109618)
(rating "Important", CVSS 8.1 according to Red Hat's assessment) with the corresponding RHSA.

## 6. Check i-doit

1. Open `http://<i-doit-host>/` in the browser and log in.
2. Open any object, change a field, save.
3. Open `http://<i-doit-host>/admin/` and log in. The pages must load without error messages.

If the page stays white or Apache reports an error 500: check `journalctl -u php-fpm -n 50`, `/var/log/php-fpm/error.log`
and `/var/log/httpd/idoit_error.log`, and use `php -m` to verify that all required extensions are loaded.

## Pitfalls

- **Outdated package lists.** Without `--refresh` or `dnf clean metadata`, `dnf` may not see the update for up to two days.
- **Mirrors lag behind.** `[MIRROR] … 404` lines during download are normal; `dnf` switches mirrors by itself.
- **PHP-FPM keeps running with the old binary.** The package does not restart the service. `dnf-automatic`, if
  configured, also only installs the package. `systemctl show -p ActiveEnterTimestamp php-fpm` shows when the service
  was last started.
- **`rpm -q --changelog` without CVE.** Verify via package version and `dnf updateinfo`, see step 5.
- **Package group php8.4** has its own security advisory, see step 3.
- **Interim solution until the package arrives.** `session.upload_progress.enabled = 0` in `/etc/php.d/i-doit.ini`
  mitigates one of the two vulnerabilities; the other cannot be mitigated without side effects on i-doit. Until the
  update, make the web server reachable only from the internal network.

## Rollback

Reset the snapshot or restore the backed-up directories. `dnf history undo` could roll back the transaction, but this
is not advisable because of the open vulnerability.

## Further links

- [PHP security advisory of 2026-10-21](https://www.php.net/archive/2026.php#2026-10-21-5)
- [RLSA-2026:87070](https://errata.rockylinux.org/RLSA-2026:87070) (php), [RLSA-2026:87071](https://errata.rockylinux.org/RLSA-2026:87071) (php8.4)
- [Red Hat CVE-2026-109618](https://access.redhat.com/security/cve/CVE-2026-109618), [CVE-2026-109619](https://access.redhat.com/security/cve/CVE-2026-109619)
- [Critical PHP security update (October 2026)](php-security-update.md): overview for all distributions
- [System requirements](../installation/system-requirements.md)
