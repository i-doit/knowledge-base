# Manual installation

This article describes the manual [IT documentation](../../glossary.md) of i-doit. The required software packages are installed and configured independently. Afterwards, i-doit is downloaded and installed. The necessary steps for Cronjobs and backups also have to be carried out by the user.

## Scope

✔ Installation of software packages <br>
✔ Configuration of software packages<br>
✔ Installation of i-doit<br>
✔ Set-up of Cronjobs<br>
✔ Set-up of backups<br>
✔ Set-up of Restore

## Requirements

- The [system requirements](../system-requirements.md) **have to be fulfilled**. An exception is the LAMP Stack (Apache Web Server, MariaDB/MySQL, PHP).
- One of the [supported](../system-requirements.md) GNU/Linux operating systems is installed with its current updates.
- The system is able to access package repositories via an **internet connection**.
- The Apache module (**mod_php**) is applied. Alternative methods (Fast CGI, HHVM) are not taken into consideration.
- Furthermore a simplified setup is required: **i-doit is the main application** of the system and Apache Web Server, PHP as well as MariaDB/MySQL are installed locally.
- **Firewall rules and open ports:** i-doit is a typical web application, which means that i-doit is accessed via web browser for basic functionality. This usually happens via port 80 (unencrypted) or port 443 (encrypted). If a firewall is used, these ports have to be opened for incoming TCP connections. It is possible that you need further rules when you use additional functions ([notifications](../../evaluation/notifications.md), [interfaces to third-party applications](../../automation-and-integration/index.md)). The communication between i-doit and MySQL/MariaDB is carried out locally (port 3306 TCP) and normally no extra firewall rules are necessary for this.
- **Security frameworks:** Please carry out the necessary configurations if a security framework, such as **AppAmor** or **SELinux**, is installed.

## Next Steps

The specific steps depend on the selected operating system:

- [Debian GNU/Linux](debian.md) (**recommended**)
- [Red Hat Enterprise Linux (RHEL) or CentOS](red-hat-enterprise-linux/index.md)
- [Suse Linux Enterprise Server (SLES)](suse-linux-enterprise-server.md)
- [Ubuntu Linux](ubuntu-linux/index.md)
- [Microsoft Windows Server](microsoft-windows-server/index.md)
