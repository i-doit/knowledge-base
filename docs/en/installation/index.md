---
title: installation
description: "Before you get started with IT documentation, i-doit needs to be installed."
icon:
status:
lang: en
---
# installation

Before you get started with IT documentation, i-doit needs to be installed. Choose the installation method that best suits your environment:

## Which installation Method Suits You?

| | [Automatische installation](automatic-installation.md) | [Manuelle installation](manual-installation/index.md) | [Eval Appliance](i-doit-virtual-eval-appliance/index.md) |
|---|---|---|---|
| **Description** | A script installs and configures everything on a fresh Linux system — including cron jobs, backups, and CLI tools. | You install and configure all components yourself. Full control over every step. | Ready-made VM with pre-installed i-doit for testing and evaluation. |
| **Suitable for** | Production use, standard setup | Production use, custom requirements, Windows Server | Evaluation and testing |
| **Prerequisites** | Basic Linux knowledge | Good Linux or Windows Server knowledge | None — simply import the VM |
| **Scope** | Complete: installation, configuration, cron jobs, backup | Everything manually configurable | Fully pre-installed |

!!! tip "Recommendation"
    For most users, the **automatic installation** is the fastest and easiest way. You only need a fresh [Debian or Ubuntu](system-requirements.md) and the installation script takes care of the rest.

## Prerequisites

Regardless of the installation method, you should check the [system requirements](system-requirements.md) beforehand. There you will find the supported operating systems, PHP and database versions, as well as hardware recommendations.

## Next Steps After installation

1.  Apply license in the [Admin Center](../administration/admin-center.md)
2.  Perform [first login](../basics/initial-login.md)
3.  [Set up cron jobs](../automation-and-integration/cli/index.md) (if not done automatically)
4.  [Configure backup](../maintenance-and-operation/backup-and-restore/index.md)
