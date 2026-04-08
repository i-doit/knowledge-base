---
title: Security and Protection
description: Secure your i-doit installation — from system hardening and TLS to API security
icon: material/security
status:
lang: en
---

# Security and Protection

Your IT documentation is the memory of your organization -- it contains network diagrams, credentials, contract details, and infrastructure knowledge. An attacker who gains access to your CMDB effectively has a blueprint of your entire IT. That is why i-doit deserves the same level of protection as any other critical system.

This article follows the classic protection goals: **confidentiality**, **integrity**, **availability**, **authenticity**, and **authorization**. The measures are organized by timing -- before installation, after installation, and during ongoing operation.

!!! info "Collection of ideas, not a mandatory checklist"
    Not every measure fits every environment. An internal test system needs less hardening than a production CMDB with 50,000 objects. Evaluate each recommendation with common sense -- and document deliberate exceptions.

---

## Before installation

Before you [install](../installation/index.md) i-doit, you should harden the underlying system. The examples refer to **Debian GNU/Linux** or **Ubuntu** but can be adapted to other distributions.

### Minimal Operating System

Install only what is necessary for operation: Apache, PHP, and MariaDB. The less software running, the smaller the attack surface.

```shell
# Show running services:
systemctl list-units --type=service --state=running

# Check open ports:
sudo ss -tulpen
```

Disable and remove unnecessary services:

```shell
# Example: remove printer service
sudo systemctl disable --now cups.service
sudo apt purge cups
```

The principle of minimalism also applies to Apache and PHP -- disable unnecessary modules:

```shell
sudo a2dismod proxy status
sudo phpdismod xdebug
```

!!! warning "phpMyAdmin"
    Do **not** install phpMyAdmin on production systems. It makes the database accessible via the browser and has repeatedly been affected by security vulnerabilities in the past. Use the command line (`mysql`) or a local tool like DBeaver via an SSH tunnel instead.

### Less Privileges Is More

Never work permanently as superuser (root). Use [sudo](https://wiki.debian.org/sudo) for commands that require root privileges. Services like Apache run under their own users (e.g., `www-data`) -- this limits the damage if a service is compromised.

### Secure SSH

SSH, alongside Apache, is often the only externally accessible service. The configuration is located at `/etc/ssh/sshd_config`.

**Disable root login:**

```shell
PermitRootLogin no
```

**Set up public key authentication:**

```shell
ssh-keygen -t ed25519 -f ~/.ssh/idoit-server -C "admin@company.com"
ssh-copy-id -i ~/.ssh/idoit-server.pub idoitadm@i-doit.example.org
```

**Disable password login** (only after key-based login is working!):

```shell
PubkeyAuthentication yes
PasswordAuthentication no
```

Then restart the SSH service:

```shell
sudo systemctl restart ssh.service
```

### Updates, Updates, Updates

Keep the entire system up to date -- this includes i-doit itself, the operating system, and all connected third-party systems. Security vulnerabilities in outdated software are one of the most common attack vectors.

For automatic security updates on Debian/Ubuntu, [Unattended Upgrades](https://wiki.debian.org/UnattendedUpgrades) is a good choice:

```shell
sudo apt install unattended-upgrades
sudo dpkg-reconfigure unattended-upgrades
```

### Secure MariaDB

First, run `mysql_secure_installation` -- this removes test databases, anonymous users, and sets a root password.

Then check the configured users:

```sql
SELECT user, host FROM mysql.user;
```

Delete unwanted entries (e.g., wildcards `%` or external addresses). Only `localhost`, `127.0.0.1`, and `::1` should be allowed. Make sure the default port **3306 is not accessible from the outside**.

### Secure PHP

Always keep PHP on the latest patch level. The settings required for i-doit can be found in the [system settings](../installation/manual-installation/systemeinstellungen.md). Additional hardening can be achieved via a dedicated configuration file:

```shell
sudo nano /etc/php/8.2/mods-available/zz_security.ini
```

```ini
;; Restrict file access to i-doit and temp:
open_basedir = "/var/www/html/:/tmp/"

;; Disable unnecessary functions:
disable_functions = pcntl_alarm,pcntl_fork,pcntl_waitpid,pcntl_wait,pcntl_wifexited,pcntl_wifstopped,pcntl_wifsignaled,pcntl_wifcontinued,pcntl_wexitstatus,pcntl_wtermsig,pcntl_wstopsig,pcntl_signal,pcntl_signal_dispatch,pcntl_get_last_error,pcntl_strerror,pcntl_sigprocmask,pcntl_sigwaitinfo,pcntl_sigtimedwait,pcntl_exec,pcntl_getpriority,pcntl_setpriority

;; Do not expose PHP version in HTTP headers:
expose_php = Off
```

Enable:

```shell
sudo phpenmod zz_security
sudo systemctl restart apache2.service
```

!!! tip "Adjust PHP version"
    Replace `8.2` with the PHP version you are using. Which versions i-doit supports can be found in the [system requirements](../installation/systemvoraussetzungen.md).

### Backup and Restore

Backups are your last line of defense -- against attacks, human error, and hardware failures. Read the article on [backing up and restoring data](daten-sichern-und-wiederhfirstllen/index.md).

Equally important: **Test restores regularly.** A backup that cannot be restored is worthless.

**Encrypt backups:** When backups are stored on external media or in the cloud, encrypt them -- e.g., with `gpg`:

```shell
mysqldump -u idoit -p idoit_data | gzip | gpg --symmetric --cipher-algo AES256 -o backup_$(date +%F).sql.gz.gpg
```

For emergencies, a **second, independent instance** is recommended -- e.g., an exported VM in OVF format on a USB drive in a fireproof safe.

---

## Transport Encryption (TLS)

Secure the communication between browser and server with TLS so that credentials and CMDB data are not transmitted in plain text over the network.

### Let's Encrypt (Recommended)

The easiest way to obtain a trusted certificate is [Let's Encrypt](https://letsencrypt.org/) with the ACME client [Certbot](https://certbot.eff.org/):

```shell
sudo apt install certbot python3-certbot-apache
sudo certbot --apache -d cmdb.company.com
```

Certbot automatically configures Apache and sets up certificate renewal via cronjob. Test the renewal:

```shell
sudo certbot renew --dry-run
```

### Apache TLS Configuration

If you use your own certificates, use a modern TLS configuration. Use the [Mozilla SSL Configuration Generator](https://ssl-config.mozilla.org/) for a current configuration tailored to your Apache version.

Example for Apache with security headers:

```apache
<IfModule mod_headers.c>
    # Redirect HTTP to HTTPS
    Header always set Strict-Transport-Security "max-age=63072000; includeSubDomains"
    # Prevent clickjacking
    Header always set X-Frame-Options "SAMEORIGIN"
    # Prevent MIME sniffing
    Header always set X-Content-Type-Options "nosniff"
    # Restrict referrer
    Header always set Referrer-Policy "strict-origin-when-cross-origin"
    # Hide server version
    Header unset Server
</IfModule>

ServerSignature Off
ServerTokens    Prod

<IfModule mod_ssl.c>
    SSLProtocol             all -SSLv3 -TLSv1 -TLSv1.1
    SSLCipherSuite          ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-CHACHA20-POLY1305:ECDHE-RSA-CHACHA20-POLY1305
    SSLHonorCipherOrder     off
    SSLCompression          off
    SSLSessionTickets       off

    SSLUseStapling          on
    SSLStaplingCache        shmcb:/var/run/ocsp(128000)
    SSLStaplingResponderTimeout 5
</IfModule>

<VirtualHost *:443>
    ServerName cmdb.company.com
    DocumentRoot /var/www/html/

    <Directory /var/www/html/>
        Options FollowSymLinks
        AllowOverride All
    </Directory>

    SSLEngine on
    SSLCertificateFile      /etc/letsencrypt/live/cmdb.company.com/fullchain.pem
    SSLCertificateKeyFile   /etc/letsencrypt/live/cmdb.company.com/privkey.pem

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>

# HTTP → HTTPS Redirect
<VirtualHost *:80>
    ServerName cmdb.company.com
    Redirect permanent / https://cmdb.company.com/
</VirtualHost>
```

Check your configuration with:

- [SSL Labs by Qualys](https://www.ssllabs.com/ssltest/) -- Evaluate TLS configuration
- [securityheaders.io](https://securityheaders.io/) -- Check security headers

### Client Certificates

A step further is securing access via client certificates: not only does the browser verify the server certificate, but the web server also verifies the client. This is a strong additional authentication layer but requires distributing and managing client certificates.

### Data Encryption

**Full disk encryption protects against theft.** On GNU/Linux, **dm-crypt/LUKS** is widely used -- many distributions offer this during installation. On Windows, BitLocker and VeraCrypt are available.

This is especially relevant when the hardware is not located in your own data center or when i-doit runs on a laptop.

---

## After installation

### File System Permissions

Set restrictive file permissions:

```shell
cd /var/www/html/

# Give Apache ownership:
sudo chown www-data:www-data -R .

# Restrict to read and execute:
sudo find . -type d -exec chmod 550 {} \;
sudo find . -type f -exec chmod 440 {} \;

# Write permissions only for directories that need them:
for dir in log/ imports/ temp/ upload/; do
    sudo find "$dir" -type d -exec chmod 770 {} \;
done
```

Before an [update](update-einspielen.md), temporarily relax the restrictions:

```shell
cd /var/www/html/
sudo find . -type d -exec chmod 775 {} \;
sudo find . -type f -exec chmod 664 {} \;
```

### Secure Passwords

Set secure passwords for all accounts from the start. The default passwords after installation are publicly known -- change them immediately.

#### Default Users in i-doit

The users **admin**, **reader**, **author**, and **editor** have the password set to the same as the username by default. This is the most important point after installation:

- Change all default passwords
- Create a dedicated [person object](../grundlagen/struktur-it-dokumentation.md) for each real user
- [Archive](../grundlagen/lebens-und-dokumentationszyklus.md) the default users after setup

#### Admin Center Password

You can change the password in the [Admin Center](../administration/admin-center.md) under **Config** or directly in the file `src/config.inc.php`.

#### MySQL Users

```sql
ALTER USER 'idoit'@'localhost' IDENTIFIED BY 'ASecurePassword!2026';
```

Also store the new password in the system database:

```sql
UPDATE idoit_system.isys_mandator
SET isys_mandator__db_pass = 'ASecurePassword!2026'
WHERE isys_mandator__db_user = 'idoit';
```

Additionally, update it in `src/config.inc.php` or in the Admin Center under **Config**.

#### Linux Users

```shell
passwd
```

### Enable CSRF Protection

Cross-Site Request Forgery (CSRF) is an attack where a user unknowingly performs actions in i-doit because they clicked a manipulated link. Enable protection in the [Admin Center](../administration/admin-center.md) under:

**System Settings > Security > CSRF Token > Yes**

### Two-Factor Authentication

i-doit offers built-in [two-factor authentication (2FA)](../benutzerauthentifizierung-und-verwaltung/2fa/index.md). This requires users to provide an additional code from an authenticator app in addition to their password. Especially recommended for admin accounts and users with write access.

Additional authentication mechanisms can be set up via the Apache web server, e.g., via [Single Sign-On (SSO)](../benutzerauthentifizierung-und-verwaltung/sso-vergleich/index.md).

### Configure Session Timeout

By default, sessions in i-doit remain active for a very long time. For security-critical environments, you should shorten the session timeout so that forgotten browser windows do not remain open indefinitely.

The setting can be found in the [expert settings](../administration/verwaltung/mandanten-name-verwaltung/experteneinstellungen.md) under `session.time` -- the value is specified in seconds. A sensible value for production environments is **3600** (1 hour).

### Secure the API

The [JSON-RPC API](../i-doit-add-ons/api/index.md) is a powerful tool -- and an attractive attack target. If you use the API, you should secure it specifically:

- **Keep the API key secret** -- the key grants full access. Treat it like a password.
- **Restrict access by IP** -- allow API access only from known systems. You can do this via the Apache configuration or a firewall rule:

```apache
<Location "/src/jsonrpc.php">
    Require ip 192.168.1.0/24
    Require ip 10.0.0.50
</Location>
```

- **Create a dedicated API user** -- do not use the admin account for API access. Create a dedicated user with minimal permissions.
- **Disable the API** if it is not needed -- the add-on can be deactivated in [Administration](../administration/verwaltung/import-und-schnittstellen/index.md).

---

## Firewall and Network

### Minimize Open Ports

Every closed port reduces the attack surface. For i-doit, the following ports are typically sufficient:

| Port | Service | Note |
|------|---------|------|
| **443** | HTTPS | i-doit web interface |
| **22** | SSH | Administration (ideally only from the admin network) |

MariaDB (3306) should **never** be accessible from the outside.

A simple firewall with **ufw**:

```shell
sudo apt install ufw
sudo ufw default deny incoming
sudo ufw default allow outgoing
sudo ufw allow 443/tcp
sudo ufw allow 22/tcp
sudo ufw enable
```

!!! warning "Security by Obscurity"
    Non-standard ports (e.g., 8080, 8022) do not provide real protection. Port scanners like nmap find open ports in seconds.

For Apache, there is also the web application firewall [mod_security](https://www.digitalocean.com/community/tutorials/how-to-set-up-mod_security-with-apache-on-debian-ubuntu), which detects and blocks attack patterns in HTTP requests.

### Firewall Rules for i-doit

For i-doit to download updates, verify licenses, and use online repositories, the following destinations must be reachable:

| Host | Protocol | Port | Purpose |
|------|----------|------|---------|
| [login.i-doit.com](https://login.i-doit.com) | HTTPS | 443 | Updates for i-doit and add-ons |
| [center.i-doit.com](https://center.i-doit.com) | HTTPS | 443 | Add-on & Subscription Center<br>IPs: `159.69.103.121`, `78.46.236.49`, `35.158.127.51`, `35.158.127.52`, `35.158.127.53`<br>IPv6: `2a01:4f8:c01f:289a::`, `2a01:4f8:1c17:a07c::` |
| [crm-gateway.i-doit.com](https://crm-gateway.i-doit.com) | HTTPS | 443 | Downloads via license token |
| [lizenzen.i-doit.com](https://lizenzen.i-doit.com) | HTTPS | 443 | Retrieve licenses via token |
| [reports-ng.i-doit.org](https://reports-ng.i-doit.org) | HTTPS | 443 | Online repository for [reports](../auswertungen/report-manager.md) |
| [r.i-doit.com](https://r.i-doit.com) | HTTPS | 443 | Online repository for [templates](../i-doit-add-ons/documents/index.md) |
| [i-doit.com](https://www.i-doit.com) | HTTPS | 443 | Update check |

### Interfaces to Third-Party Applications

| Interface | Protocol | Default Port |
|-----------|----------|--------------|
| [Send emails](../auswertungen/benachrichtigungen.md) | SMTP | 25 / 465 / 587 |
| [LDAP/AD](../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md) | LDAP / LDAPS | 389 / 636 |
| [JDisc Discovery](../daten-konsolidieren/jdisc/index.md) | PostgreSQL | 25321 |
| [JDisc Discovery](../daten-konsolidieren/jdisc/index.md) | HTTP | 9000 |
| [JDisc Discovery GraphQL](../daten-konsolidieren/jdisc/index.md) | HTTPS | 443 |
| [Livestatus](../automatisierung-und-integration/network-monitoring/daten-abfragen-mit-livestatus.md) | Livestatus | 6557 |
| [Znuny Help Desk](../automatisierung-und-integration/service-desk/otrscommunity-help-desk.md), [Request Tracker](../automatisierung-und-integration/service-desk/request-tracker.md) | HTTP/HTTPS | 80 / 443 |

### Trusted Network

- **No direct internet access** -- place i-doit behind a reverse proxy or in an internal network. Use an HTTP proxy for updates.
- **Dedicated admin network** -- allow SSH only from the management network so that only the core function (HTTPS) is accessible from the office network.

### IPv4 vs. IPv6

If IPv6 is not used in your network, disable it on the server. If it is used, firewall rules and service configurations must cover **both protocols** -- a firewall with only IPv4 rules does not protect against IPv6 access.

---

## Security Frameworks

On GNU/Linux, [SELinux](https://en.wikipedia.org/wiki/SELinux) and [AppArmor](https://en.wikipedia.org/wiki/AppArmor) provide additional protection against unauthorized actions. They allow you to confine Apache so that it can only access specific directories -- even if an attacker exploits a vulnerability in PHP.

### Automatically Block Attacks

[fail2ban](http://www.fail2ban.org/) analyzes log files and automatically blocks IP addresses after repeated failed login attempts:

```shell
sudo apt install fail2ban
```

Pre-configured rules exist for SSH, Apache, and MariaDB. For i-doit itself, you can create a custom rule that detects failed logins in the Apache logs.

---

## Monitoring and Logs

### Monitor the System

Monitor the system with a [network monitoring](../automatisierung-und-integration/network-monitoring/index.md) solution like Checkmk or Nagios. Important metrics:

- CPU and memory utilization
- Available disk space
- Apache and MariaDB processes
- Certificate validity (TLS)
- Backup success

### Evaluate Logs

The i-doit log files are located in the `log/` directory of the installation. Evaluate them regularly -- especially after updates and when unexpected behavior occurs.

For automatic log monitoring, [Logwatch](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-logwatch-log-analyzer-and-reporter-on-a-vps) is suitable:

```shell
sudo apt install logwatch
```

Logwatch analyzes logs from Apache, SSH, and other services and sends a daily report via email.

If the system needs to send emails, set up an SMTP relay -- e.g., with [msmtp](https://marlam.de/msmtp/).

---

## Regular Security Audits

Security is not a one-time project but an ongoing process. Conduct regular audits (e.g., quarterly):

| Checkpoint | How |
|------------|-----|
| Operating system up to date? | `apt update && apt list --upgradable` |
| PHP version still supported? | Check [system requirements](../installation/systemvoraussetzungen.md) |
| i-doit up to date? | Check [release notes](../versionshistorie/release-notes/index.md) |
| Default passwords changed? | Test login with admin/admin |
| Backup functional? | Perform restore on test system |
| TLS configuration current? | [SSL Labs](https://www.ssllabs.com/ssltest/) |
| Unused users present? | Check user list in i-doit |
| Open ports minimal? | `sudo ss -tulpen` |
| API access restricted? | Check Apache logs for unknown IPs |
| File permissions correct? | `find /var/www/html -perm -o+w` |

---

## High Availability

!!! info "Really necessary?"
    In most cases, a single, well-maintained system is sufficient. The system requirements for i-doit are moderate. Before planning a redundant setup, invest in a well-thought-out backup concept and fast recoverability instead.

For increased availability, you can run the services on dedicated systems: Apache behind a load balancer, MariaDB in a cluster (e.g., with [MaxScale](https://mariadb.com/products/mariadb-maxscale)), files in distributed storage.

On a smaller scale, RAID, ECC RAM, and redundant power supplies on different power phases (ideally with a UPS) help.

## Further Reading

- [BSI IT-Grundschutz](https://www.bsi.bund.de/grundschutz/) -- Systematic IT security
- [Mozilla SSL Configuration Generator](https://ssl-config.mozilla.org/) -- Generate TLS configurations
- [CIS Benchmarks](https://www.cisecurity.org/cis-benchmarks) -- Hardening guidelines for operating systems and services
