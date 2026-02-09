---
title: Installation and setup
description: This section bundles system requirements, installation, and setup on one page. Use the buttons for quick navigation.
icon:
status:
lang: en
---

# Installation and setup

This section bundles **system requirements**, **installation**, and **setup** on one page. Use the buttons for quick navigation.

## System requirements

For stable imports and reporting, the following settings are recommended:

### PHP and server

For an existing i-doit installation, these requirements should already be met.

- upload_max_filesize ≥ 10 MB
- post_max_size ≥ 10 MB
- max_execution_time ≥ 300 s
- max_input_time ≥ 300 s
- PHP Zip module enabled; system library libzip ≥ 1.2.0

### Database

- MariaDB ≥ 10.1 or MySQL ≥ 8.0

## Installation

1. Download the add-on from the [Customer Portal](../../system-administration/admin-center.md) or install it within i-doit via the [Add-on & Subscription Center](../../system-administration/customer-portal.md)
2. Log in to the [Admin Center](../../system-administration/admin-center.md)
3. Open the **Add-ons** tab
4. Choose Install/update add-on and select the **VIVA2 ZIP** file
5. Run Upload and install

### Update from 2.x to 3.0

!!! warning "Backup"
    Before updating, create complete backups of the system and tenant databases as well as the i-doit directory.

Automatic adjustments during the update:
- Requirement implementations move from the module to target objects, target object groups, or information scopes
- Contact roles on modules are standardized
- Obsolete reports are cleaned up

### Known Issues

- MySQL 5.6/5.7 does not provide the required functions for variable reports. Recommendation: MariaDB ≥ 10.1 or MySQL ≥ 8.0

## Setup

After installation, import the IT-Grundschutz Compendium. The download is available in the [Customer Portal](../../system-administration/customer-portal.md).

1. Open Add-ons → IT-Grundschutz → Compendium
2. Choose Import and upload the Compendium ZIP file
3. Wait for completion; this can take several minutes

!!! warning "Versions"
    Compendium editions from 2022 onward require VIVA2 3.2 or later.

!!! warning "The VIVA2 add-on consumes license-relevant objects"
    Importing the IT-Grundschutz Compendium creates about **2927** license-relevant objects; after excluding obsolete requirements, **2637** remain. Make sure your i-doit license includes enough license-relevant objects to use the add-on.
    The import also includes obsolete requirements. The BSI labels these requirements as "ENTFALLEN". For backward compatibility, they are all imported but can be deleted afterward without issues.

## Update the Compendium

### Procedure

1. Open Add-ons → IT-Grundschutz → Compendium
2. Choose Update and upload the ZIP
3. Review new, changed, and custom elements
4. Run the import and verify the result

### Behavior of non-adopted elements

- Deselected existing elements are automatically archived

### Notes

- Import duration depends on the edition and system performance. After the update, perform spot checks in the check and in reports

[<- Back](index.md){ .md-button } · [IT-Grundschutz profiles ->](it-grundschutz-profiles.md){ .md-button .md-button--primary }
