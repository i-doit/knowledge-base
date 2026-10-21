---
title: Critical PHP security update (October 2026)
description: Two critical RCE vulnerabilities in PHP (CVE-2026-109618/-109619) — who is affected and what i-doit operators must do now
icon:
status:
lang: en
---

# Critical PHP security update (October 2026)

On October 21, 2026, the PHP project released **PHP 8.5.12, 8.4.27, 8.3.36 and 8.2.35**. These versions fix two critical vulnerabilities (**CVE-2026-109618** and **CVE-2026-109619**, both CVSS v4.0 9.2) that allow unauthenticated attackers to execute code remotely.

!!! warning "Act now"
    Since i-doit runs on PHP, all i-doit installations are affected. The vulnerability is in **PHP, not in i-doit** — no i-doit update is required. Update PHP as soon as your distribution provides the packages.

## What is affected?

| Vulnerability | Cause | Details |
| --- | --- | --- |
| CVE-2026-109618 | Remote code execution via out-of-memory handling | [GHSA-w8hw-w9fx-j79w](https://github.com/php/php-src/security/advisories/GHSA-w8hw-w9fx-j79w) |
| CVE-2026-109619 | Remote code execution via stale state in the PHP worker | [GHSA-6wmf-4rv5-p3rp](https://github.com/php/php-src/security/advisories/GHSA-6wmf-4rv5-p3rp) |

Every PHP installation that serves web requests is affected: PHP-FPM, Apache with mod_php, php-cgi, FrankenPHP and LiteSpeed. The PHP project considers the risk highest for **mod_php**, where an attack has been demonstrated that works before any application code runs.

Supported i-doit installations run on PHP 8.2–8.4. All of these branches receive a fix.

## What you need to do

### On-premises (Linux)

The Linux distributions received the patches in advance and ship their own packages. Use your distribution's packages:

1. Back up first: snapshot of the VM, or a backup of the i-doit directory, the database and the PHP configuration.
2. Install the PHP update via the package manager and restart the services. PHP-FPM and Apache only load the new packages after a restart.

    | Distribution | Update | Restart services |
    | --- | --- | --- |
    | Debian 13 (packages since 2026-10-21, 13:45 UTC) | `sudo apt update && sudo apt upgrade` | `sudo systemctl restart apache2 php8.4-fpm` |
    | Ubuntu 24.04 | `sudo apt update && sudo apt upgrade` | `sudo systemctl restart apache2 php8.3-fpm` |
    | RHEL 10 / Rocky / Alma | `sudo dnf update 'php*'` | `sudo systemctl restart httpd php-fpm` |
    | SLES 15 SP6 | `sudo zypper refresh && sudo zypper patch` | `sudo systemctl restart apache2 php-fpm` |

    With mod_php instead of PHP-FPM, restarting the web server is enough.

3. Check that the fix is installed (see below).
4. Test i-doit: log in, open and save an object, open the Admin Center.

!!! info "The version number does not always show the fix"
    Debian ships the new PHP version, so `php -v` shows `8.4.27` afterwards. Ubuntu, Red Hat and SUSE instead build the fix into their existing PHP version (backport). There, `php -v` still shows e.g. `8.3.6`, not `8.3.36`. You can tell whether the fix is installed by the CVE number in the package changelog or in your distribution's security tracker:

    - Debian: `zgrep CVE-2026-10961 /usr/share/doc/php8.4-cli/changelog.Debian.gz` or [Debian Security Tracker](https://security-tracker.debian.org/tracker/CVE-2026-109618)
    - Ubuntu: `zgrep CVE-2026-10961 /usr/share/doc/php8.3-cli/changelog.Debian.gz` or [Ubuntu CVE page](https://ubuntu.com/security/CVE-2026-109618)
    - RHEL/Rocky/Alma: `dnf updateinfo info --cve CVE-2026-109618`
    - SLES/openSUSE: `zypper lp --cve=CVE-2026-109618` or [SUSE CVE page](https://www.suse.com/security/cve/CVE-2026-109618.html)

!!! danger "PHP from the Remi repository"
    If you installed PHP from `rpms.remirepo.net`: according to the PHP project, this repository will not receive updates on October 21. Switch to your distribution's packages.

For details on switching to a different PHP version, see [PHP update](php-update.md) and [System requirements](../installation/system-requirements.md).

### On-premises (Windows)

The PHP project also provides the new versions as [Windows binaries](https://www.php.net/downloads.php?os=windows). Replace PHP as described in [Update PHP and MariaDB on Windows](../upgrades-and-migrations/update-php-and-mariadb-for-windows.md).

### PHP 8.1 or older

The PHP project no longer provides updates for these versions. Some distributions and LTS vendors provide backported fixes. Ask your vendor, or upgrade your installation to a supported version (8.2–8.4). PHP 8.2 receives security updates until December 31, 2026.

### If you cannot update immediately

According to the PHP project, there is **no complete mitigation**; only the update closes the vulnerabilities. Until then, these steps reduce the risk:

- Set `session.upload_progress.enabled = 0` in `php.ini` or in the FPM pool and restart all PHP workers. This blocks the confirmed attack paths for CVE-2026-109619. `ini_set()` or `.user.ini` are not sufficient.
- Make the i-doit server reachable only from the internal network or via VPN.

The other measures from the PHP announcement, such as `memory_limit=-1` or a very small `post_max_size`, are not practical for i-doit.

### i-doit appliance and Docker images

We provide updated versions of both with the patched PHP version. If you use the appliance, you can install the update via the package manager as described above. For Docker, pull the updated image as soon as it is published.

### i-doit Cloud

If you use our cloud, you do not need to do anything — we update your environment ourselves.

## Sources

- [Security advisory: Critical remote code execution vulnerabilities (php.net, 2026-10-21)](https://www.php.net/archive/2026.php#2026-10-21-5)
- [GHSA-w8hw-w9fx-j79w (CVE-2026-109618)](https://github.com/php/php-src/security/advisories/GHSA-w8hw-w9fx-j79w)
- [GHSA-6wmf-4rv5-p3rp (CVE-2026-109619)](https://github.com/php/php-src/security/advisories/GHSA-6wmf-4rv5-p3rp)
- [CERT-EU Security Advisory 2026-018: Critical Vulnerabilities in PHP](https://cert.europa.eu/publications/security-advisories/2026-018/)
