---
title: Requirements
description: "idoitcmk is a command-line tool that uses the APIs of i-doit and Checkmk."
icon:
status:
lang: en
---
# Requirements

idoitcmk is a command-line tool that uses the APIs of i-doit and Checkmk. Please make sure that you meet the following requirements.

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

## i-doit

*   A copy of i-doit, version 1.12.2 or higher
*   Activated API add-on, version 1.10.2 or higher

## Checkmk

*   One or more Checkmk sites, version 1.5 or higher
*   Activated Web API
*   Activated Livestatus

## Supported Operating Systems

idoitcmk can run on any POSIX operating system. The following operating systems are currently supported:

*   Debian GNU/Linux 10 "buster" and 11 "bullseye"
*   Ubuntu Linux 18.04 LTS "bionic" and 20.04 LTS "focal fossa"
*   Red Hat Enterprise Linux (RHEL) 7 and 8
*   SUSE Linux Enterprise Server (SLES) 15, 15 SP1, and 15 SP2

Other operating systems should work, for example macOS, CentOS, and many others. MS Windows may work but is completely untested.

## PHP Prerequisites

Before you install idoitcmk, make sure you have the following installed:

*   PHP, version 7.3 or 7.4 (7.4 is recommended), and
*   PHP modules bz2, calendar, curl, date, filter, json, and Phar

To clarify: you are not required to run this application on the same systems as i-doit or Checkmk 2.

## Operating System-Specific Requirements

Based on the requirements listed above, use these instructions for your operating system. For all commands, you need superuser rights (root). You can obtain them with sudo.

### Debian GNU/Linux 10 "buster" and 11 "bullseye"

```shell
sudo apt update
sudo apt install php7.4-cli php7.4-common php7.4-curl php7.4-json
```

### Ubuntu Linux 18.04 LTS "Bionic Beaver" and 20.04 LTS "focal fossa"

```shell
sudo apt update
sudo apt install php7.4-cli php7.4-common php7.4-curl php7.4-json
```

### Red Hat Enterprise Linux (RHEL) 7 and 8

For RHEL, a 3rd-party repository is needed: [EPEL](https://www.redhat.com/en/blog/whats-epel-and-how-do-i-use-it).

```shell
rpm --import https://dl.fedoraproject.org/pub/epel/RPM-GPG-KEY-EPEL-7
rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
rpm --import https://mirror.webtatic.com/yum/RPM-GPG-KEY-webtatic-el7
rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm
yum update
yum install php74w php74w-cli php74w-common
```

### SUSE Linux Enterprise Server (SLES) 15 SP2

Make sure you have the "Web and Scripting Module" enabled. Then:

```shell
zypper refresh
zypper update
zypper install php7 php7-bz2 php7-curl php7-json php7-phar
```
