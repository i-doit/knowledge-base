---
title: System requirements
description: i-doit system requirements
icon:
status:
lang: de
---

# System requirements

In order to guarantee the operation of all functionalities of i-doit, some requirements must be met by the underlying system.

!!! info "Current version"
    The requirements shown below apply to the current version of i-doit, in this case **36**. These requirements are adjusted for each major release of i-doit. If the requirements of older versions are needed, the change history of this page can be used.

## Minimum Requirements

The following system parameters are the minimum requirements to guarantee i-doit to work with up to around 10,000 objects and up to 10 users working simultaneously.

### Virtual Hardware (GNU/Linux)

-   2 vCPUs
-   2 GB RAM
-   10 GB free disc space

We recommend the use of a dedicated virtual machine. The actual demand for hardware is based on the scope of the [IT documentation](../glossary.md) and the amount of simultaneous users.

### Virtual Hardware (Windows)

For Windows, the [general Windows system requirements](https://learn.microsoft.com/windows-server/get-started/hardware-requirements) must be observed.

### LAMP / WAMP Stack

-   GNU/Linux in the 64bit variant (amd64) or Windows Server 2022 in the 64bit variant (amd64)
-   Apache Webserver **2.4**
-   MariaDB 10.5 (deprecated), **10.6** (recommended), 10.11, 11.4 or MySQL 5.7 or 8.0 (recommended)
-   PHP 8.2, **8.3** (recommended) and 8.4.
-   PHP extensions: bcmath, ctype, curl, fileinfo, gd, imagick, json, ldap, mbstring, memcached, mysqli, mysqlnd, pgsql, session, soap, xml, xmlwriter, zip

We recommend the usage of **Apache Webserver 2.4, PHP 8.3 and MariaDB 10.6**.

!!! success "Reference configuration (GNU/Linux)"
    The following system parameters comprise a configuration reference that is tested and recommended by us and guarantees high performance when used with up to 500,000 objects and a high number of simultaneously working users.

    ### Virtual Hardware

    -   2 vCPUs
    -   8 GB RAM
    -   50 GB free disc space

    ### Operating System

    We recommend an operating system based on GNU/Linux

    ### LAMP Stack

    -   Apache 2.4.x (default package)
    -   MariaDB 10.6.x (default package)
    -   PHP 8.3.x (default package)

    !!! note Note
        Because i-doit is a database application, it intensively uses the hard drive. Since the I/O throughput strongly determines the performance, a fast hard drive is recommended.<br>
        The need for disc space can increase with intense usage of file or image storage in i-doit.<br>
        The value of 50 GB is solely geared to the maximal size of the database, which can be achieved by full usage, updates and similar operations.

## Client

A Web browser is needed on the client side in order to access the Web GUI of i-doit. For each Web browser the current version as well as the version prior to this are supported:

-   Mozilla Firefox (including the last ESR version)
-   Google Chrome/Chromium
-   Microsoft Edge (disabled compatibility mode)
-   Apple Safari

## Compatibility matrix

=== "1.12"

    | **i-doit Version**     | 1.12                                                   |
    | ---------------------- | ------------------------------------------------------ |
    | **Release**            | 2018-12                                                |
    | **Apache Webserver**   | 2.4                                                    |
    | **PHP**                | 5.6 (deprecated)<br> 7.0<br> 7.1 <br>7.2 (recommended) |
    | **MySQL**              | 5.6<br> 5.7                                            |
    | **MariaDB**            | 10.0 <br>10.1                                          |
    | **Debian GNU/Linux**   | 9<br> 8                                                |
    | **Ubuntu**             | 16.04<br> 18.04                                        |
    | **RHEL**               | 7.3¹<br> 7.4¹<br> 7.5¹<br> 7.6¹                        |
    | **SLES**               | 12 SP3<br> 15                                          |
    | **XAMPP for Windows²** | 2008 R2<br> 2012 R2<br> 2016<br> 2019                  |

=== "1.11"

    | **i-doit Version**     | 1.11                         |
    | ---------------------- | ---------------------------- |
    | **Release**            | 2018-06                      |
    | **Apache Webserver**   | 2.4                          |
    | **PHP**                | 5.6 <br> 7.0<br> 7.1         |
    | **MySQL**              | 5.6<br> 5.7                  |
    | **MariaDB**            | 10.0 <br>10.1                |
    | **Debian GNU/Linux**   | 9<br> 8                      |
    | **Ubuntu**             | 16.04                        |
    | **RHEL**               | 7.3¹<br> 7.4¹<br> 7.5¹       |
    | **SLES**               | 12 SP3                       |
    | **XAMPP for Windows²** | 2008 R2<br> 2012 R2<br> 2016 |

=== "1.10"

    | **i-doit Version**     | 1.10                         |
    | ---------------------- | ---------------------------- |
    | **Release**            | 2017-12                      |
    | **Apache Webserver**   | 2.4                          |
    | **PHP**                | 5.6 <br> 7.0                 |
    | **MySQL**              | 5.6<br> 5.7                  |
    | **MariaDB**            | 10.0 <br>10.1                |
    | **Debian GNU/Linux**   | 9<br> 8                      |
    | **Ubuntu**             | 16.04<br> 17.04              |
    | **RHEL**               | 7.3¹<br> 7.4¹                |
    | **SLES**               | 12 SP2 <br> 12 SP3           |
    | **XAMPP for Windows²** | 2008 R2<br> 2012 R2<br> 2016 |

=== "1.9"

    | **i-doit Version**     | 1.9                           |
    | ---------------------- | ----------------------------- |
    | **Release**            | 2017-05                       |
    | **Apache Webserver**   | 2.4                           |
    | **PHP**                | 5.4<br> 5.5<br> 5.6<br> 7.0   |
    | **MySQL**              | 5.6<br> 5.7                   |
    | **MariaDB**            | 10.0 <br>10.1                 |
    | **Debian GNU/Linux**   | 9<br> 8                       |
    | **Ubuntu**             | 16.04 LTS<br> 16.10<br> 17.04 |
    | **RHEL**               | 7.3¹                          |
    | **SLES**               | 12<br> 12 SP2                 |
    | **XAMPP for Windows²** | 2008<br> 2012                 |

=== "1.8"

    | **i-doit Version**     | 1.8                 |
    | ---------------------- | ------------------- |
    | **Release**            | 2016-10             |
    | **Apache Webserver**   | 2.4                 |
    | **PHP**                | 5.4<br> 5.5<br> 5.6 |
    | **MySQL**              | 5.6<br> 5.7         |
    | **MariaDB**            | 10.0 <br>10.1       |
    | **Debian GNU/Linux**   | 9<br> 8             |
    | **Ubuntu**             | 14.04               |
    | **RHEL**               | 7.3¹                |
    | **SLES**               | 12<br> 12 SP2       |
    | **XAMPP for Windows²** | 2008<br> 2012       |

=== "1.7"

    | **i-doit Version**     | 1.7                 |
    | ---------------------- | ------------------- |
    | **Release**            | 2016-03             |
    | **Apache Webserver**   | 2.2<br> 2.4         |
    | **PHP**                | 5.4<br> 5.5<br> 5.6 |
    | **MySQL**              | 5.6<br> 5.7         |
    | **MariaDB**            | 10.0 <br>10.1       |
    | **Debian GNU/Linux**   | 8                   |
    | **Ubuntu**             | 15.10 LTS<br> 14.04 |
    | **RHEL**               | 7.2¹                |
    | **SLES**               | 12                  |
    | **XAMPP for Windows²** | 2008<br> 2012       |

| Legend                                      |
| ------------------------------------------- |
| ¹ With the help of third-party repositories |
| ² Not recommended for productive use        |
