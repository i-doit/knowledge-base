---
title: Getting Started
description: "Do you want to integrate Checkmk and i-doit?"
icon:
status:
lang: en
---
# Getting Started

Do you want to integrate Checkmk and i-doit? Follow these steps:

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

1. [Meet the requirements](./requirements.md)
2. [Download and install](./installation.md) the add-on with the CLI tool `idoitcmk`
3. Ensure that Checkmk and i-doit are reachable via their APIs
4. Create your own configuration: `idoitcmk init` ([more details](./konfiguration.md))
5. [Set rights for users or groups](../../efficient-documentation/permission-management/index.md)
6. Assign the categories **Checkmk Host** and **Checkmk Tag** to the desired [object type](../../basics/assigning-categories-to-object-types.md)
7. [Try out the basic commands](./usage.md)
8. Synchronize basic information:
    - `idoitcmk sync-agents` ([Agents](./synchronize-checkmk-agents.md))
    - `idoitcmk sync-contact-groups` ([Contact groups](./kontaktgruppen-synchronisieren.md))
    - `idoitcmk sync-folders` ([WATO folders](./wato-ordner-synchronisieren.md))
    - `idoitcmk sync-sites` ([Sites](./checkmk-sites-synchronisieren.md))
    - `idoitcmk sync-tags` ([Host tags](./host-tags-synchronisieren.md))
9. Configure Checkmk based on i-doit: `idoitcmk push` ([more details](./generate-wato-configuration.md))
10. Transfer inventory data from Checkmk to i-doit: `idoitcmk pull` ([more details](./import-inventory-data.md))
11. Automate all steps!

Do you have questions? Read the [FAQ](./faq.md).
