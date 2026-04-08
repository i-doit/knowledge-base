---
title: Automatic installation
description: "The fastest way to a running i-doit: A script installs and configures everything needed on a fresh Linux system — Apache, PHP,..."
icon:
status:
lang: en
---
# Automatic installation

The fastest way to a running i-doit: A script installs and configures everything needed on a fresh Linux system — Apache, PHP, MariaDB, i-doit itself, as well as cron jobs and backups.

## Prerequisites

-   The [system requirements](systemvoraussetzungen.md) **must** be met. The LAMP stack (Apache Web Server, MariaDB/MySQL, PHP) mentioned there is excluded from this.
-   One of the [supported](systemvoraussetzungen.md) GNU/Linux operating systems is freshly installed.
-   The system can access package repositories and i-doit web services via an internet connection.

## Usage

The installation is handled by a [script](https://github.com/i-doit/scripts#install-i-doit-on-a-gnulinux-operating-system) that is executed on the operating system. <br>
The following steps take place on the command line. You can connect via **SSH**, for example. Then download the script and make it executable:

```shell
wget https://raw.githubusercontent.com/i-doit/scripts/main/idoit-install
chmod 755 idoit-install
```

The script must be executed with **root** privileges. If **sudo** is available:

```shell
sudo ./idoit-install
```

Alternatively, log in as **root**:

```shell
su
./idoit-install
```

The script asks several configuration questions. All questions have predefined answers that can be accepted by pressing **ENTER**.

## Next Steps

-   [Apply a valid license (i-doit only)](../wartung-und-betrieb/lizenzierung.md)
-   [Follow security and protection tips](../wartung-und-betrieb/sicherheit-und-schutz.md)
-   [First steps with i-doit](../grundlagen/index.md)
