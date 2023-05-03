# System requirements

In order to guarantee the operation of all functionalities of i-doit, some requirements must be met by the underlying system.

!!! info "Current version"

    The requirements shown below apply to the current version of i-doit, in this case **24**. These requirements are adjusted for each major release of i-doit. If the requirements of older versions are needed, the change history of this page can be used.

## Minimum Requirements

The following system parameters are the minimum requirements to guarantee i-doit to work with up to around 10,000 objects and up to 10 users working simultaneously.

### Virtual Hardware

*   2 vCPUs
*   2 GB RAM
*   10 GB free disc space

We recommend the use of a dedicated virtual machine. The actual demand for hardware is based on the scope of the [IT documentation](../glossary.md) and the amount of simultaneous users.

### Operating System

*   [Debian GNU/Linux](manual-installation/debian.md) 10 "buster", 11 "bullseye"
*   [Ubuntu](manual-installation/ubuntu-linux/index.md) 18.04 LTS "bionic", 20.04 LTS "focal fossa"
*   [SUSE Linux Enterprise Server (SLES)](manual-installation/suse-linux-enterprise-server.md) 15, 15 SP1, 15 SP2, 15 SP3
*   [Red Hat Enterprise Linux (RHEL)](manual-installation/red-hat-enterprise-linux/index.md) 7, 8
*   [Microsoft Windows Server](manual-installation/microsoft-windows-server/index.md) 2016, 2019


We recommend the usage of [Debian GNU/Linux](manual-installation/debian.md) in 64bit architecture (amd64) in version 11 "bullseye".

### LAMP Stack

*   Apache Web server 2.4
*   MariaDB 10.2, 10.3, 10.4, 10.5 (recommended), 10.6 or MySQL 5.7.
*   PHP >= 7.4, 8.0 (recommended) _At the moment, PHP version 8.1 is not supported. We plan the support of PHP 8.1 in a later release._
*   PHP extensions: bcmath, ctype, curl, fileinfo, gd, imagick, json, ldap, mbstring, memcached, mysqli, mysqlnd, pgsql, session, soap, xml, zip


We recommend the usage of **Apache Webserver 2.4, PHP 8.0 and MariaDB 10.5**.

!!! success Reference configuration

    The following system parameters comprise a configuration reference that is tested and recommended by us and guarantees high performance when used with up to 500,000 objects and a high number of simultaneously working users.

    ### Virtual Hardware

    *   2 vCPUs
    *   8 GB RAM
    *   50 GB free disc space

    ### Operating System

    [Debian GNU/Linux](../installation/manual-installation/debian.md) 10 "buster" (64bit)

    ### LAMP Stack

    *   Apache 2.4.x (default package)
    *   MariaDB 10.5.x (default package)
    *   PHP 8.0.x (default package)

    !!! note Note

        Because i-doit is a database application, it intensively uses the hard drive. Since the I/O throughput strongly determines the performance, a fast hard drive is recommended.

        The need for disc space can increase with intense usage of file or image storage in i-doit.

        The value of 50 GB is solely geared to the maximal size of the database, which can be achieved by full usage, updates and similar operations.

## Client

A Web browser is needed on the client side in order to access the Web GUI of i-doit. For each Web browser the current version as well as the version prior to this are supported:

*   Mozilla Firefox (including the last ESR version)
*   Google Chrome/Chromium
*   Microsoft Internet Explorer/Edge (disabled compatibility mode)
*   Apple Safari

## Compatibility matrix

| **i-doit Version** | 24 | 1.19, 20, 21, 22, 23 | 1.18 | 1.17 | 1.16 | 1.15 | 1.14 | 1.13 | 1.12 | 1.11 | 1.10 | 1.9 | 1.8 | 1.7 |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| **Release** | 2023-05 | 2022-09 -<br> 2023-04 | 2022-01 | 2021-07 | 2021-01 | 2020-07 | 2020-01 | 2019-06 | 2018-12 | 2018-06 | 2017-12 | 2017-05 | 2016-10 | 2016-03 |
| **Apache Webserver** | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.2, 2.4 |
| **PHP** | 7.4 (deprecated)  <br>8.0 (recommended) | 7.4 (deprecated)  <br>8.0 (recommended) | 7.3 (deprecated)  <br>7.4 (recommended) | 7.3  <br>7.4 (recommended) | 7.2.5 (deprecated)  <br>7.3  <br>7.4 (recommended) | 7.1.8 (deprecated)  <br>7.2  <br>7.3 (recommended)  <br>7.4 | 7.1.8 (deprecated)  <br>7.2  <br>7.3 (recommended)  <br>7.4 | 7.0.8 (deprecated)  <br>7.1  <br>7.2  <br>7.3 (recommended) | 5.6 (deprecated)  <br>7.0  <br>7.1  <br>7.2 (recommended) | 5.6  <br>7.0  <br>7.1 | 5.6  <br>7.0 | 5.4  <br>5.5  <br>5.6  <br>7.0 | 5.4  <br>5.5  <br>5.6 | 5.4  <br>5.5  <br>5.6 |
| **MySQL** | 5.7 | 5.7 | 5.7 | 5.7 | 5.6 (deprecated)  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 |
| **MariaDB** |  10.2  <br>10.3  <br>10.4  <br>10.5 (recommended)<br> 10.6 | 10.2  <br>10.3  <br>10.4  <br>10.5 (recommended) | 10.2  <br>10.3  <br>10.4  <br>10.5 (recommended) | 10.2  <br>10.3  <br>10.4  <br>10.5 (recommended) | 10.1 (deprecated)  <br>10.2  <br>10.3  <br>10.4 (recommended)  <br>10.5 | 10.1  <br>10.2  <br>10.3  <br>10.4 (recommended) | 10.1  <br>10.2  <br>10.3  <br>10.4 (recommended) | 10.0 (deprecated)  <br>10.1  <br>10.2  <br>10.3 (recommended) | 10.0  <br>10.1 | 10.0  <br>10.1 | 10.0  <br>10.1 | 10.0  <br>10.1 | 10.0  <br>10.1 | 10.0  <br>10.1 |
| **Debian GNU/Linux** | 11 | 11  | 10, 11 | 10  | 10  | 10  | 10  | 8, 9, 10 | 8, 9 | 8, 9 | 8, 9 | 8, 9 | 8   | 8   |
| **Ubuntu** | 18.04, 20.04 | 18.04, 20.04 | 18.04, 20.04 | 18.04, 20.04 | 18.04, 20.04 | 18.04, 20.04 | 18.04 | 16.04, 18.04 | 16.04, 18.04 | 16.04 | 16.04, 17.04 | 16.04 LTS, 16.10, 17.04 | 14.04¹ | 15.10, 14.04¹ |
| **RHEL** | 7¹, 8 | 7¹, 8 | 7¹, 8 | 7¹, 8 | 7¹, 8 | 7¹, 8 | 7¹, 8 | 7¹, 8 | 7.3¹, 7.4¹, 7.5¹, 7.6¹ | 7.3¹, 7.4¹, 7.5¹ | 7.3¹, 7.4¹ | 7.3¹ | 7.3¹ | 7.2¹ |
| **SLES** | 15 SP1, 15 SP 2, SP 3 | 15 SP1, 15 SP 2, SP 3 | 15 SP1, 15 SP 2, SP 3 | 15, 15 SP1 | 15, 15 SP1 | 15, 15 SP1 | 15, 15 SP1 | 12 SP3, 12 SP4, 15, 15 SP1 | 12 SP3, 15 | 12 SP3 | 12 SP2, SP3 | 12, 12 SP2 | 12, 12 SP2 | 12  |
| **XAMPP for Windows²** | 2016, 2019 | 2016, 2019 | 2016, 2019 | 2016, 2019 | 2016, 2019 | 2016, 2019 | 2016, 2019 | 2008 R2, 2012 R2, 2016, 2019 | 2008 R2, 2012 R2, 2016, 2019 | 2008 R2, 2012 R2, 2016 | 2008 R2, 2012 R2, 2016 | 2008, 2012 | 2008, 2012 | 2008, 2012 |

| Legend |
| --- |
| ¹ With the help of third-party repositories |
| ² Not recommended for productive use |
