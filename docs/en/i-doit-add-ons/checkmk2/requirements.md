# checkmk 2: Requirements

idoitcmk is a command-line tool which uses the APIs of both i-doit and Check\_MK. Please, meet the following requirements:

For i-doit you need:

*   One working copy of i-doit, version 1.12.2 or higher
*   Enabled API add-on, version 1.10.2 or higher

For Check\_MK you need:

*   One or more sites of Check\_MK, version 1.5 or higher
*   Enabled Web API
*   Enabled Livestatus

idoitcmk may run on any POSIX operating system. These operating systems are currently supported:

*   Debian GNU/Linux 10 “buster” and 11 “bullseye”
*   Ubuntu Linux 18.04 LTS “bionic” and 20.04 LTS “focal fossa”
*   Red Hat Enterprise Linux (RHEL) 7 and 8
*   Suse Linux Enterprise Server (SLES) 15, 15 SP1 and SP2

Other OSs should work, for example macOS, CentOS and many more. MS Windows may work but is completely untested.

Before installing idoitcmk make sure you have installed:

*   PHP, version 5.6 or higher (7.2 is recommended) and
*   PHP modules bz2, calendar, curl, date, filter json and Phar

To make it clear, you are not forced to run this application on the same systems for i-doit or Check\_MK.

OS-specific requirements
------------------------

Based on the requirements specified above use these instructions for your operating system. For all commands you need superuser rights (root). You may gain them with sudo.

Debian GNU/Linux 10 “buster” und 11 “bullseye”
----------------------------------------------

    sudo apt update
    sudo apt install php7.4-cli php7.4-common php7.4-curl php7.4-json

Ubuntu Linux 18.04 LTS “Bionic Beaver” and 20.04 LTS “focal fossa”
------------------------------------------------------------------

    sudo apt update
    sudo apt install  php7.4-cli php7.4-common php7.4-curl php7.4-jso

Red Hat Enterprise Linux (RHEL) 7
---------------------------------

For RHEL you need the 3rd-party repository [Webtatic](https://webtatic.com/packages/php72/).

    rpm --import https://dl.fedoraproject.org/pub/epel/RPM-GPG-KEY-EPEL-7
    rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
    rpm --import https://mirror.webtatic.com/yum/RPM-GPG-KEY-webtatic-el7
    rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm
    yum update
    yum install php74w php74w-cli php74w-common

Suse Linux Enterprise Server (SLES) 15 SP2
------------------------------------------

Make sure you have enabled the “Web and Scripting Module 12”. Then:

    zypper refresh
    zypper update
    zypper install php7 php7-bz2 php7-curl php7-json php7-phar
