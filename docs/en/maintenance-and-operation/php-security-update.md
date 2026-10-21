---
title: Critical PHP security update (October 2026)
description: Two critical RCE vulnerabilities in PHP (CVE-2026-109618/-109619) — who is affected and what i-doit operators must do now
icon:
status:
lang: en
---

# Critical PHP security update (October 2026)

The PHP project has announced an unscheduled security update for **October 21, 2026 at 14:00 UTC** (16:00 CEST). It is to fix two critical vulnerabilities in PHP (**CVE-2026-109618** and **CVE-2026-109619**, both CVSS v4.0 9.2) that allow attackers to execute code remotely.

!!! info "More information from 14:00 UTC"
    The PHP project will only publish technical details, the affected PHP versions and the fixed versions with the release. We will update this page as soon as the information is available.

!!! warning "Prepare now"
    Since i-doit runs on PHP, i-doit installations are affected. The vulnerability is in **PHP, not in i-doit** — no i-doit update is required. Prepare the PHP update now and install it as soon as it is available.

## Who is affected?

According to current information, practically all PHP versions are affected. The PHP project will announce with the release which branches receive a fix. **PHP 8.1 and older** are already end-of-life and, as a rule, no longer receive patches.

Supported i-doit installations run on PHP 8.2–8.4. Update all installations as soon as the update is available.

## What you need to do

### On-premises

As soon as your distribution provides the patched packages:

1. Install the PHP update via your package manager:
    - Debian/Ubuntu: `sudo apt update && sudo apt upgrade`
    - RHEL/Rocky/Alma: `sudo dnf update`
    - SUSE: `sudo zypper update`
2. Restart the web server or PHP-FPM, e.g. `sudo systemctl restart php8.3-fpm apache2`
3. For details on switching versions, see [PHP update](php-update.md) and [System requirements](../installation/system-requirements.md).

!!! note "PHP 8.1 or older?"
    No fix is to be expected for these versions. Upgrade your installation to a supported version (8.2–8.4) as soon as possible. Until then, do not expose the server directly to the internet.

### i-doit appliance and Docker images

We provide updated versions of both with the patched PHP version. If you use the appliance, you can install the update via the package manager as described above. For Docker, pull the updated image as soon as it is published.

### i-doit Cloud

If you use our cloud, you do not need to do anything — we update your environment ourselves.

## Sources

- Official PHP announcement: [Upcoming Critical PHP Security Release (php.net, 2026-10-20)](https://www.php.net/archive/2026.php#2026-10-20-1)
- [CERT-EU Security Advisory 2026-018: Critical Vulnerabilities in PHP](https://cert.europa.eu/publications/security-advisories/2026-018/)
- CVE-2026-109618, CVE-2026-109619
