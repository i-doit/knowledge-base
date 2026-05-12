---
title: Frequently Asked Questions (FAQ)
description: Answers to the most common questions about i-doit — licensing, updates, data import, performance, and more
icon:
status:
lang: en
---

# Frequently Asked Questions (FAQ)

Here you will find answers to the questions most frequently asked in support. For detailed guides, we link to the corresponding KB articles.

---

## Licensing

### Where do I find my license token?

Upon purchase, you receive a **license token**. You use this token to log in to the [customer portal](administration/customer-portal.md) — and the same token is also used for license activation in i-doit.

### How do I activate my license?

There are two ways:

- **Online activation (recommended):** Enter the license token in the [Admin Center](administration/admin-center.md). i-doit activates the license automatically via `lizenzen.i-doit.com`.
- **Offline license:** For systems without internet access, there is an offline license — a long license key that you generate in the customer portal and enter in the Admin Center.

Details: [Licensing](maintenance-and-operation/licensing.md)

### The license is valid, but i-doit shows "not licensed"?

Common causes:

- **Firewall blocks license verification** — i-doit must be able to reach `lizenzen.i-doit.com` and `center.i-doit.com` on port 443. See [Firewall rules](maintenance-and-operation/security-and-protection.md#firewall-freigaben-fur-i-doit).
- **Object limit reached** — check in the Admin Center under **Licenses** how many objects are licensed.
- **Outdated cache** — clear the cache under **Administration → System repair and cleanup**.

### How many objects can I create?

That depends on your license. You can see the number in the [Admin Center](administration/admin-center.md) under **Licenses**. Objects with the status "archived" or "deleted" do not count.

---

## installation and Updates

### What are the system requirements for i-doit?

Current requirements for operating system, PHP, MariaDB, and Apache can be found under [System requirements](installation/system-requirements.md).

### How do I update i-doit?

Two ways: Via the **web interface** (with internet access) or manually via the **console** (upload update package). The complete guide: [Applying updates](maintenance-and-operation/i-doit-update.md)

### Can I skip versions?

Partially. From version 20 onwards, you can skip versions, but there are defined **intermediate steps** — for example, you cannot jump directly from version 20 to 38. Which version jumps are possible is described in the [update guide](upgrades-and-migrations/update-guide.md). If in doubt: Download the latest update package from the [customer portal](administration/customer-portal.md) — the update wizard will show you the next possible step.

### Something doesn't work after the update — what should I do?

1. **Clear cache** — Administration → System repair and cleanup
2. **Clear browser cache** — Ctrl+Shift+Delete
3. **Rebuild search index** — `php console.php search-index`
4. **Check known issues** — [Known update issues](administration/troubleshooting/known-update-issues.md)

### Which PHP version do I need?

See [System requirements](installation/system-requirements.md). If you need to update PHP: [Updating PHP](maintenance-and-operation/php-update.md)

---

## Data Import

### How do I import data from an Excel spreadsheet?

Export the Excel spreadsheet as CSV and use the [CSV data import](consolidate-data/csv-data-import/index.md). First create an import profile that maps the columns of your CSV file to the i-doit categories.

### The CSV import reports errors — what should I do?

Common causes:

- **Encoding:** The CSV file must be encoded in **UTF-8**. Excel often saves in ANSI — open the file in a text editor and save as UTF-8.
- **Delimiter:** i-doit expects a semicolon (`;`) as the default delimiter, not a comma.
- **Empty rows:** Remove empty rows at the end of the file.
- **Required fields:** At least the object title and the object type must be mapped.

### How do I set up the JDisc import?

JDisc Discovery scans your network and delivers hardware and software data to i-doit. The setup: [JDisc Discovery](consolidate-data/jdisc/index.md)

### Can I automate the import?

Yes, via [cronjobs](maintenance-and-operation/set-up-cron-jobs.md). Both CSV and JDisc imports can be scheduled via `console.php`. For complex commands, [configuration files](automation-and-integration/cli/configuration-files.md) are recommended.

---

## LDAP and User Management

### How do I synchronize users from Active Directory?

Via the [LDAP synchronization](user-authentication-and-management/ldap-directory/index.md). You configure an LDAP server in the Administration and set up a cronjob for regular synchronization. A complete configuration example can be found under [Configuration files — ldap-sync](automation-and-integration/cli/configuration-files.md#beispiel-fur-den-befehl-ldap-sync).

### The LDAP sync doesn't find any users — what should I do?

- **Check connection:** Can the i-doit server reach the LDAP server on port 389 (LDAP) or 636 (LDAPS)?
- **Check Base DN:** Is the search path correct (e.g., `OU=Users,DC=company,DC=com`)?
- **Check filter:** Is the LDAP filter correct? Test with `ldapsearch` on the command line.
- **Check log:** The sync writes a log — check it for error messages.

### Can I set up SSO (Single Sign-On)?

i-doit itself does not include a built-in SSO function, but you can implement SSO via the **Apache web server**. There are several proven approaches — from SAML and OpenID Connect to GSSAPI (Kerberos). Example configurations can be found under [SSO comparison](user-authentication-and-management/sso-comparison/index.md).

---

## Performance and Database

### i-doit is slow — what can I do?

1. **Check system:** Enough RAM? CPU utilization? Disk full? See [System requirements](installation/system-requirements.md).
2. **Optimize MariaDB:** Check configuration — especially `innodb_buffer_pool_size` (should be approximately 70% of available RAM).
3. **Rebuild search index:** `php console.php search-index`
4. **Clear cache:** Administration → System repair and cleanup
5. **Clean up incomplete objects:** `php console.php system-objectcleanup --objectStatus 1`
6. **Set up cronjobs:** Regular [maintenance cronjobs](maintenance-and-operation/set-up-cron-jobs.md) keep the system clean.

### "MySQL server has gone away" — what does that mean?

The connection between i-doit and the database was interrupted — usually due to a timeout during long operations. Solution: [MySQL server has gone away](administration/troubleshooting/mysql-server-has-gone-away.md)

### MariaDB doesn't start after an update

See [MySQL/MariaDB doesn't start](administration/troubleshooting/mysql-mariadb-startet-nicht.md) — this is often caused by changed configuration directives or a corrupt database.

### "Can't create table" or "Row size too large"

Both errors are related to the InnoDB storage format. Solutions:

- [Can't create table (errno: 140)](administration/troubleshooting/cant-create-table.md)
- [Row size too large](administration/troubleshooting/row-size-too-large.md)

---

## Backup and Recovery

### How do I back up i-doit?

Three areas need to be backed up: databases, files, and system configuration. Starting with version 35, the easiest way is with `system:tenant-export`. The complete guide: [Backing up and restoring data](maintenance-and-operation/backup-and-restore/index.md)

### How do I restore a backup?

With `system:tenant-import` (from v38) or manually via `mysql` import and copying files back. Important: Test the restore regularly on a test system. Details: [Backing up and restoring data](maintenance-and-operation/backup-and-restore/index.md)

### Can I copy the production database to a test system?

Yes — via shell script with `mysqldump` + `rsync` or via `system:tenant-export` / `system:tenant-import`. A step-by-step guide can be found under [Prod→Test database synchronization](use-cases/prod-test-datenbank-synchronisation.md).

!!! info "Test instance requires its own license"
    A test system also needs to be licensed. Exception: Customers with **Advanced Support** — a test license of equal size is included.

---

## API

### Does i-doit have an API?

Yes, i-doit offers a [JSON-RPC API](i-doit-add-ons/api/index.md). With it, you can create, read, update, and delete objects — all programmatically. The API is available as an add-on and must be activated in the Administration.

### Where can I find API examples?

- [API v1 methods](i-doit-add-ons/api/methods/v1/index.md) — Complete reference
- [API v2 methods](i-doit-add-ons/api/methods/v2/index.md) — New API version
- [Examples for using the API](i-doit-add-ons/api/api-usage-examples.md) — Practical examples

### How do I secure the API?

Keep the API key secret, restrict access by IP, create a dedicated API user with minimal permissions. Details: [Securing the API](maintenance-and-operation/security-and-protection.md#api-absichern)

---

## Miscellaneous

### Can I create custom object types and categories?

Yes. Custom object types: [Custom object types](basics/custom-object-types.md). Custom categories: [Custom categories](basics/custom-categories.md). Configuring existing object types: [Object type configuration](basics/object-type-configuration.md).

### How do I create a report?

With the [Report Manager](evaluation/report-manager.md). You can create reports using the visual query editor or write SQL directly. Reports can also be [exported via cronjob](maintenance-and-operation/set-up-cron-jobs.md#report-export).

### Where do I find the changelogs?

Under [Changelogs](version-history/changelogs/index.md) — all changes per version are documented there. The most important new features per major version can be found in the [Release Notes](version-history/release-notes/index.md).

### I can't find what I'm looking for — where can I get help?

- [i-doit Community Forum](https://community.i-doit.com/) — Exchange with other users
- [i-doit Help Center](https://help.i-doit.com/) — Known issues and solutions
- [help@i-doit.com](mailto:help@i-doit.com) — Our support team is happy to help
