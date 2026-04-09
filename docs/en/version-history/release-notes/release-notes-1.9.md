---
title: Release Notes 1.9
description: "> System requirements"
icon:
status:
lang: en
---
# Release Notes 1.9

> System Requirements
> ---------------------
>
> Starting with version 1.9, i-doit is compatible with PHP version 7.0.
>
> PHP 5.4 and above can still be used.
>
> Before the Update
> --------------
>
> Before the update, all installed add-ons should be updated to the latest version. In parallel with the release of i-doit 1.9, all add-ons are published in newer versions.
>
> When switching from PHP 5.4 or 5.6 to PHP 7.0, the prior update of the add-ons is mandatory.
>
> Attention! Users of the RFC add-on will need to be a little patient. The current version is not yet supported by the i-doit 1.9 update. You will be informed as soon as a corresponding version of the RFC add-on is available.
>
> Migrations
> -----------
>
> *   A "Default Filter" is set for each object type list.
> *   In the Host Address category, the "DNS Domain" field is renamed to "Search Domains". A hostname/domain pair is created for each specified DNS domain.
> *   Fonts are copied from the vendor directory to "uploads/fonts".
> *   All interface passwords stored in the database (LDAP, OCS-Inventory, JDisc, etc.) are re-hashed. Instead of mcrypt, which is deprecated with PHP 7, phpseclib is now used, which determines whether OpenSSL for PHP is available; otherwise, native encryption methods are used. When switching systems after the update from 1.8.3.1 to 1.9, the encryption method is set and the same method must be available on the new system.
