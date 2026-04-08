---
title: Release Notes 36
description: "We are happy to announce the release of i-doit 36."
icon:
status:
lang: en
---
# Release Notes 36
<!-- cSpell:disable -->

We are happy to announce the release of i-doit 36. This update includes major changes to the **JDisc interface** and the **Flows add-on**. Additionally, we now support **PHP 8.4** for i-doit and our add-ons. A detailed list of all changes and improvements is available in the [Changelog](../changelogs/index.md).

## New "JDisc Connector Add-on"

With i-doit 36, we introduce the JDisc add-on. This will replace the JDisc functionality currently integrated into the core product. Through this change, we will be able to implement more features and a better user experience in the future.

### What does this mean for users of the JDisc interface?

- **If you are updating from i-doit 35 to i-doit 36:** You will keep the JDisc interface from version 35 and below. This remains the case until you install the new add-on. This completely replaces the legacy interface and migrates your data. This process cannot be undone. However, you can keep the legacy interface for the next two i-doit versions. After that, switching to the new add-on is mandatory.
- **If you are performing a fresh installation of i-doit version 36 (or higher):** To use the JDisc interface features, you must install the JDisc add-on.

The first feature developed for the new add-on is the device list. With this feature, you have quick access to your devices and can perform an import for new devices from a single location.

## Flows Add-on

With version 1.2.0, our i-doit Flows add-on receives its first major feature update. A new action for ranking objects between the states "Normal", "Archived", and "Deleted" is added. In addition to this action, many improvements have been made to the trigger buttons. These can now include icons for quick identification and can be grouped to trigger multiple related flows with a single click or sequentially. Furthermore, buttons can be defined to be visible in specific categories. Along with these features, we have improved the user experience when creating logical conditions.

## QR Code Printer & i-diary Add-ons

Both the "QR code printer" add-on and the "i-diary" add-on are Windows applications. These add-ons can now also be used in your i-doit installation. After installation, they appear in the add-on list. Users can receive permissions for this area. In this area, you will find an introduction to the corresponding add-on as well as a download link for the application. This allows users to quickly access the file when it is needed directly via the i-doit user interface and connect the Microsoft Windows application to your i-doit server.

## Highlights in This Release

- The **JDisc** interface is now an **add-on**
- Several new features for the **Flows** add-on
- Users of [i-doit cloud](../../idoit-cloud/index.md) can now change more expert settings
- Configuration for the use of **self-signed certificates** for **LDAP** via the interface
- Add-ons with Microsoft Windows-based applications can now be installed

### i-doit Add-ons

Alongside the release of i-doit 36, the following versions of our add-ons will also be available:

- [API 2.4](../../i-doit-add-ons/api/index.md)
- [Check_MK 1.1.1](../../i-doit-add-ons/checkmk.md)
- [Documents 1.11](../../i-doit-add-ons/documents/index.md)
- [Floorplan 1.10](../../i-doit-add-ons/floorplan.md)
- [Flows 1.2.0](../../i-doit-add-ons/flows/index.md)
- [JDisc Connector 1.0](../../i-doit-add-ons/jdisc-connector/index.md)
- [Maintenance 1.7](../../i-doit-add-ons/maintenance.md)
- [Packager 1.4](../../i-doit-add-ons/add-on-packager.md)
- [Workflow 1.6](../../i-doit-add-ons/workflow.md)

Make sure to **update the add-ons and i-doit accordingly** to meet the [requirements](../../installation/systemvoraussetzungen.md) for i-doit 36.
