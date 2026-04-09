---
title: Installation and Setup
description: This section bundles system requirements, installation, and setup on a single page. Use the buttons for quick navigation.
icon:
status:
lang: en
---

# Installation and Setup

This section bundles **system requirements**, **installation**, and **setup** on a single page. Use the buttons for quick navigation.

## System Requirements

To ensure that import and reporting run reliably, the following settings have proven effective:

### PHP and Server

With an existing i-doit installation, the prerequisites mentioned here should already be met.

- upload_max_filesize >= 10 MB
- post_max_size >= 10 MB
- max_execution_time >= 300 s
- max_input_time >= 300 s
- PHP Zip module active, system library libzip >= 1.2.0

### Database

- MariaDB >= 10.1 or MySQL >= 8.0

## Installation

1. Download the add-on from the [customer portal](../../administration/admin-center.md) or install it within i-doit via the [Add-on & Subscription Center](../../administration/customer-portal.md)
2. Log in to the [Admin Center](../../administration/admin-center.md)
3. Open the **Add-ons** tab
4. Select Install/update add-on and choose the **VIVA2 ZIP** file
5. Run upload and install

### Updating from 2.x to 3.0

!!! warning "Backup"
    Before the update, create complete backups of the system and tenant databases as well as the i-doit directory.

Automatic adjustments during the update:
- Requirement implementations are moved from the module to target objects, target object groups, or information domains
- Contact roles on modules are unified
- Outdated reports are cleaned up

### Known Issues

- MySQL 5.6/5.7 does not provide the required functions for variable reports. Recommendation: MariaDB >= 10.1 or MySQL >= 8.0

## Setup

After installation, you import the IT-Grundschutz Compendium. The download is available in the [customer portal](../../administration/customer-portal.md).

1. Open menu Add-ons → IT-Grundschutz → Compendium
2. Select Import and upload the ZIP file of the compendium
3. Wait for the process to complete; this may take several minutes

!!! warning "Versions"
    Compendium editions from 2022 onward require VIVA2 version 3.2 or higher.

!!! warning "The VIVA2 add-on consumes licensed objects"
    Importing the IT-Grundschutz Compendium generates approximately **2927** licensed objects. After subtracting discontinued requirements, approximately **2637** remain. Make sure your i-doit license includes enough licensed objects to use the add-on.
    The import of the IT-Grundschutz Compendium also imports requirements that have since become obsolete. The BSI has marked these requirements with the title "DISCONTINUED". For backward compatibility reasons, all of these requirements are imported, but they can be deleted without issue afterward.

## Updating the Compendium

### Procedure

1. Open Add-ons → IT-Grundschutz → Compendium
2. Select Update and upload the ZIP file
3. Review new, changed, and custom elements
4. Perform the import and check the results

### Behavior of Non-Adopted Elements

- Deselected existing elements are automatically archived

### Notes

- Import duration depends on the edition and system performance. After the update, perform spot checks in the check and in reports.

[<- Back](index.md){ .md-button } · [IT-Grundschutz Profiles ->](it-grundschutz-profiles.md){ .md-button .md-button--primary }
