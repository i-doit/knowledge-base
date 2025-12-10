# Release Notes 36
<!-- cSpell:disable -->

We happily announce the release of i-doit 36. This update will introduce major changes to the **JDisc** interface and the add-on **Flows**. Furthermore, we introduce the compatibility of **PHP 8.4** for i-doit and our add-ons. A detailed list of all changes and improvements is available in the [changelog](https://kb.i-doit.com/en/version-history/changelogs/index.html).

## New "JDisc Connector Add-on"

With i-doit 36, we will be introducing the JDisc Add-on. This Add-on will replace the JDisc feature, that is currently integrated into the core product. With this change, we will be able to implement more features and a better user experience in the future.

### What does this mean for users of the JDisc interface?

- **If you update from i-doit 35 to i-doit 36:** You will keep the JDisc interface from version 35 and below. This will be the case until you install the new add-on which will fully replace the legacy interface and fully migrate your data. This cannot be reversed. You will be able to keep the legacy interface for the next two i-doit versions. After this, it is mandatory to switch to the new add-on.
- **If you install i-doit version 36 (or higher):** You will need to install the JDisc add-on to be able to use the JDisc interface features.

The first feature developed for the new add-on is the device list. With this feature, you will have quick access to your devices and perform an import for new devices from one place.

## Add-on Flows

Our i-doit Add-on Flows receives its first major feature update with version 1.2. A new action to rank objects between the states "Normal", "Archived" and "Deleted" is added. Besides this action, a lot of improvements were made towards trigger buttons. These buttons can now have icons for quick identification and can be grouped to trigger multiple related flows with one click or one by one. Furthermore, buttons can be defined to be visible on categories. Along with these features, we improved the user experience for creating logical conditions.

## Add-ons QR code printer & i-diary

Both add-ons (QR code printer & i-diary) are using windows applications. These add-ons can now also be installed in your i-doit. After the installation, these add-ons will appear in the add-on list and users can get permission to this area. This area will include an introduction for the corresponding add-on and the download link for the application. This will allow users to quickly access the file, if it is needed directly through the i-doit user interface and connect the Microsoft Windows application to your i-doit server.

## Highlights in this release

- The **JDisc** interface is now an **add-on**
- Multiple new features for the add-on **Flows**
- Users of [i-doit cloud](https://www.i-doit.com/en/products/i-doit-cloud) are now able to change more expert settings
- Configure usage of **self-signed certificates** for **LDAP** via interface
- Add-ons with Microsoft Windows based applications can now be installed

### i-doit Add-ons

Alongside the release of i-doit 36, the following versions of our Add-ons will also be available:

- [API 2.4](https://kb.i-doit.com/en/i-doit-pro-add-ons/api/index.html)
- [Check_MK 1.1.1](https://kb.i-doit.com/en/i-doit-add-ons/checkmk.html)
- [Documents 1.11](https://kb.i-doit.com/en/i-doit-pro-add-ons/documents/index.html)
- [Floorplan 1.10](https://kb.i-doit.com/en/i-doit-pro-add-ons/floorplan.html)
- [Flows 1.2](https://kb.i-doit.com/en/i-doit-add-ons/flows.html)
- [JDisc Connector 1.0](https://kb.i-doit.com/en/i-doit-add-ons/jdisc-connector/index.html)
- [Maintenance 1.7](https://kb.i-doit.com/en/i-doit-pro-add-ons/maintenance.html)
- [Packager 1.4](https://kb.i-doit.com/en/i-doit-pro-add-ons/add-on-packager.html)
- [Workflow 1.6](https://kb.i-doit.com/en/i-doit-pro-add-ons/workflow.html)

Make sure to **update the Add-ons and i-doit accordingly**, so you are meeting the [requirements](../../installation/system-requirements.md) for i-doit 36.
