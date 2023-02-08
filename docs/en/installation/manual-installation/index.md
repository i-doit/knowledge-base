**Contents**

*   1[Scope](#ManualInstallation-Scope)
*   2[Requirements](#ManualInstallation-Requirements)
*   3[Next Steps](#ManualInstallation-NextSteps)

This article describes the manual [installation](/display/en/Installation) of i-doit. The required software packages are installed and configured independently. Afterwards, i-doit is downloaded and installed. The necessary steps for Cronjobs and backups also have to be carried out by the user.

Scope
-----

✔ Installation of software packages

✔ Configuration of software packages

✔ Installation of i-doit

✔ Set-up of Cronjobs

✔ Set-up of backups

✔ Set-up of Restore

Requirements
------------

*   The [system requirements](/display/en/System+Requirements) **have to be fulfilled**. An exception is the LAMP Stack (Apache Web Server, MariaDB/MySQL, PHP).
*   One of the [supported](/display/en/System+Requirements) GNU/Linux operating systems is installed with its current updates.
*   The system is able to access package repositories via an **internet connection**.
*   The Apache module (**`mod_php`**) is applied. Alternative methods (Fast CGI, HHVM) are not taken into consideration.
*   Furthermore a simplified setup is required: **i-doit is the main application** of the system and Apache Web Server, PHP as well as MariaDB/MySQL are installed locally.
*   **Firewall rules and open ports:** i-doit is a typical web application, which means that i-doit is accessed via web browser for basic functionality. This usually happens via port 80 (unencrypted) or port 443 (encrypted). If a firewall is used, these ports have to be opened for incoming TCP connections. It is possible that you need further rules when you use additional functions ([notifications](/display/en/Notifications), [interfaces to third-party applications](/display/en/Automation+and+Integration)). The communication between i-doit and MySQL/MariaDB is carried out locally (port 3306 TCP) and normally no extra firewall rules are necessary for this.
*   **Security frameworks:** Please carry out the necessary configurations if a security framework, such as **AppAmor** or **SELinux**, is installed.

Next Steps
----------

The specific steps depend on the selected operating system:

*   [Debian GNU/Linux](/pages/viewpage.action?pageId=36864037) (**recommended**)
*   [Red Hat Enterprise Linux (RHEL) or CentOS](/pages/viewpage.action?pageId=37355543)
*   [Suse Linux Enterprise Server (SLES)](/pages/viewpage.action?pageId=37355545)
*   [Ubuntu Linux](/display/en/Ubuntu+Linux)
*   [Microsoft Windows Server](/display/en/Microsoft+Windows+Server)