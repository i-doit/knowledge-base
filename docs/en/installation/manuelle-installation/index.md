---
title: Manual installation
description: "With manual installation, you configure all components (Apache, PHP, MariaDB) yourself."
icon:
status:
lang: en
---
# Manual installation

With manual installation, you configure all components (Apache, PHP, MariaDB) yourself. This gives you full control over the setup and is the right choice for custom requirements or Windows Server environments.

## Prerequisites

-   The [system requirements](../systemvoraussetzungen.md) **must** be met. The LAMP stack (Apache Web Server, MariaDB/MySQL, PHP) mentioned there is excluded.<br>
-   One of the [supported](../systemvoraussetzungen.md) GNU/Linux operating systems is installed and updated.<br>
-   The system can access package repositories via an **internet connection**.<br>
-   The Apache module (**mod_php**) is used. Alternative methods (Fast CGI, HHVM) are not covered.<br>
-   Furthermore, this is a simplified setup: **i-doit is the main application** on the system, and Apache Web Server, PHP, and MariaDB/MySQL are installed locally.<br>
-   **Firewall rules and open ports:** i-doit is a typical web application. This means that the basic functionality is accessed via a web browser. This typically happens over port 80 (unencrypted) or 443 (encrypted). If a firewall is in use, these ports must be opened for incoming TCP connections. If additional functions are used ([notifications](../../auswertungen/benachrichtigungen.md), [interfaces to third-party applications](../../automatisierung-und-integration/index.md)), additional rules may be required. Communication between i-doit and MySQL/MariaDB takes place locally (port 3306 TCP), for which no separate firewall rules are usually needed.<br>
-   **Security frameworks:** If a security framework such as **AppArmor** or **SELinux** is installed, it must be configured accordingly.

## Next Steps

The exact steps depend on the chosen operating system:

-   [Debian GNU/Linux](debian/index.md)
-   [Red Hat Enterprise Linux (RHEL) and compatible](red-hat-enterprise-linux/index.md)
-   [SUSE Linux Enterprise Server (SLES)](suse/index.md)
-   [Ubuntu GNU/Linux](ubuntu/index.md)
-   [Microsoft Windows Server](microsoft-windows-server/index.md)
