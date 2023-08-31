# System requirements

In order to guarantee the operation of all functionalities of i-doit, some requirements must be met by the underlying system.

!!! info "Current version"

    The requirements shown below apply to the current version of i-doit, in this case ==26==. These requirements are adjusted for each major release of i-doit. If the requirements of older versions are needed, the change history of this page can be used.

## Minimum Requirements

The following system parameters are the minimum requirements to guarantee i-doit to work with up to around 10,000 objects and up to 10 users working simultaneously.

### Virtual Hardware

-   2 vCPUs
-   2 GB RAM
-   10 GB free disc space

We recommend the use of a dedicated virtual machine. The actual demand for hardware is based on the scope of the [IT documentation](../glossary.md) and the amount of simultaneous users.

### Installation guides for operating systems

-   [Debian GNU/Linux](manual-installation/debian.md) 11 "bullseye"
-   [Ubuntu](manual-installation/ubuntu-linux/index.md) 18.04 LTS "bionic", 20.04 LTS "focal fossa"
-   [SUSE Linux Enterprise Server (SLES)](manual-installation/suse-linux-enterprise-server.md) 15, 15 SP1, 15 SP2, 15 SP3
-   [Red Hat Enterprise Linux (RHEL)](manual-installation/red-hat-enterprise-linux/index.md) 7, 8
-   [Microsoft Windows Server](manual-installation/microsoft-windows-server/index.md) 2022

We recommend an operating system based on GNU/Linux in the 64bit architecture (amd64).

### LAMP / WAMP Stack

-   Apache Webserver ==2.4==
-   MariaDB 10.2, 10.3, 10.4, 10.5, ==10.6== (recommended) or MySQL 5.7 or 8.0.
-   PHP 7.4, ==8.0== (recommended), {++8.1++}. _At the moment, PHP version >= 8.2 is not supported. We plan the support of PHP 8.2 in a later release._
-   PHP extensions: bcmath, ctype, curl, fileinfo, gd, imagick, json, ldap, mbstring, memcached, mysqli, mysqlnd, pgsql, session, soap, xml, zip

We recommend the usage of ==Apache Webserver 2.4, PHP 8.0 and MariaDB 10.6==.

!!! success Reference configuration

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
    -   PHP 8.0.x (default package)

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

=== "26"

    | **i-doit Version** | 26 |
    | --- | --- |
    | **Release** | 2023-08 |
    | **Apache Webserver** | 2.4 |
    | **PHP** | 7.4 <br>==8.0== (recommended)<br>{++8.1++} |
    | **MySQL** | 5.7 <br>8.0 |
    | **MariaDB** |  10.2 <br>10.3  <br>10.4  <br>10.5 <br>==10.6== (recommended) |

=== "25"

    | **i-doit Version** | 25 |
    | --- | --- |
    | **Release** | 2023-06 |
    | **Apache Webserver** | 2.4 |
    | **PHP** | 7.4 <br>8.0 (recommended) |
    | **MySQL** | 5.7 <br>8.0 |
    | **MariaDB** |  10.2 <br>10.3  <br>10.4  <br>10.5 <br>10.6 (recommended) |
    | **Debian GNU/Linux** | 11 |
    | **Ubuntu** | 18.04¹<br> 20.04 |
    | **RHEL** | 7¹<br> 8 |
    | **SLES** | 15 SP1<br> 15 SP 2<br> SP 3 |
    | **XAMPP for Windows²** | 2022 |

=== "24"

    | **i-doit Version** | 24 |
    | --- | --- |
    | **Release** | 2023-05 |
    | **Apache Webserver** | 2.4 |
    | **PHP** | 7.4 <br>8.0 (recommended) |
    | **MySQL** | 5.7 |
    | **MariaDB** |  10.2  <br>10.3  <br>10.4  <br>10.5 (recommended) |
    | **Debian GNU/Linux** | 11 |
    | **Ubuntu** | 18.04¹<br> 20.04 |
    | **RHEL** | 7¹<br> 8 |
    | **SLES** | 15 SP1<br> 15 SP 2<br> SP 3 |
    | **XAMPP for Windows²** | 2016<br> 2019 |

=== "23, 22, 21, 20, 1.19"

    | **i-doit Version** | 23, 22, 21, 20, 1.19 |
    | --- | --- |
    | **Release** | 2023-03 - 2022-09 |
    | **Apache Webserver** | 2.4 |
    | **PHP** | 7.4 <br>8.0 (recommended) |
    | **MySQL** | 5.7 |
    | **MariaDB** |  10.2  <br>10.3  <br>10.4  <br>10.5 (recommended) |
    | **Debian GNU/Linux** | 11 |
    | **Ubuntu** | 18.04<br> 20.04 |
    | **RHEL** | 7¹<br> 8 |
    | **SLES** | 15 SP1<br> 15 SP 2<br> SP 3 |
    | **XAMPP for Windows²** | 2016<br> 2019 |

=== "1.18"

    | **i-doit Version** | 1.18 |
    | --- | --- |
    | **Release** | 2022-02 |
    | **Apache Webserver** | 2.4 |
    | **PHP** | 7.3 (deprecated) <br>7.4 (recommended) |
    | **MySQL** | 5.7 |
    | **MariaDB** |  10.2  <br>10.3  <br>10.4  <br>10.5 (recommended) |
    | **Debian GNU/Linux** | 10, 11 |
    | **Ubuntu** | 18.04<br> 20.04 |
    | **RHEL** | 7¹<br> 8 |
    | **SLES** | 15 SP1<br> 15 SP 2 |
    | **XAMPP for Windows²** | 2016<br> 2019 |

=== "1.17"

    | **i-doit Version** | 1.17 |
    | --- | --- |
    | **Release** | 2021-07 |
    | **Apache Webserver** | 2.4 |
    | **PHP** | 7.3 <br>7.4 (recommended) |
    | **MySQL** | 5.7 |
    | **MariaDB** |  10.2  <br>10.3  <br>10.4  <br>10.5 (recommended) |
    | **Debian GNU/Linux** | 10 |
    | **Ubuntu** | 18.04<br> 20.04 |
    | **RHEL** | 7¹<br> 8 |
    | **SLES** | 15<br> 15 SP1 |
    | **XAMPP for Windows²** | 2016<br> 2019 |

=== "1.16"

    | **i-doit Version** | 1.16 |
    | --- | --- |
    | **Release** | 2021-01 |
    | **Apache Webserver** | 2.4 |
    | **PHP** | 7.2.5 (deprecated)<br> 7.3 <br> 7.4 (recommended) |
    | **MySQL** | 5.6 (deprecated) <br>5.7 |
    | **MariaDB** |  10.1 (deprecated)  <br>10.2  <br>10.3  <br>10.4 (recommended) <br>10.5 |
    | **Debian GNU/Linux** | 10 |
    | **Ubuntu** | 18.04<br> 20.04 |
    | **RHEL** | 7¹<br> 8 |
    | **SLES** | 15<br> 15 SP1 |
    | **XAMPP for Windows²** | 2016<br> 2019 |

=== "1.15"

    | **i-doit Version** | 1.15 |
    | --- | --- |
    | **Release** | 2020-07 |
    | **Apache Webserver** | 2.4 |
    | **PHP** | 7.1.8 (deprecated)<br> 7.2<br> 7.3 (recommended)<br>7.4 |
    | **MySQL** | 5.6<br> 5.7 |
    | **MariaDB** |  10.1 (deprecated)  <br>10.2  <br>10.3  <br>10.4 (recommended) |
    | **Debian GNU/Linux** | 10 |
    | **Ubuntu** | 18.04<br> 20.04 |
    | **RHEL** | 7¹<br> 8 |
    | **SLES** | 15<br> 15 SP1 |
    | **XAMPP for Windows²** | 2016<br> 2019 |

=== "1.14"

    | **i-doit Version** | 1.14 |
    | --- | --- |
    | **Release** | 2020-01 |
    | **Apache Webserver** | 2.4 |
    | **PHP** | 7.1.8 (deprecated)<br> 7.2<br> 7.3 (recommended)<br>7.4 |
    | **MySQL** | 5.6<br> 5.7 |
    | **MariaDB** |  10.1 (deprecated)  <br>10.2  <br>10.3  <br>10.4 (recommended) |
    | **Debian GNU/Linux** | 10 |
    | **Ubuntu** | 18.04 |
    | **RHEL** | 7¹<br> 8 |
    | **SLES** | 15<br> 15 SP1 |
    | **XAMPP for Windows²** | 2016<br> 2019 |

=== "1.13"

    | **i-doit Version** | 1.13 |
    | --- | --- |
    | **Release** | 2019-06 |
    | **Apache Webserver** | 2.4 |
    | **PHP** | 7.0.8 (deprecated)<br> 7.1<br> 7.2 <br>7.3 (recommended) |
    | **MySQL** | 5.6<br> 5.7 |
    | **MariaDB** |  10.0 (deprecated)  <br>10.1  <br>10.2  <br>10.3 (recommended) |
    | **Debian GNU/Linux** | 10<br> 9<br> 8 |
    | **Ubuntu** | 16.04<br> 18.04 |
    | **RHEL** | 7¹<br> 8 |
    | **SLES** | 12 SP3<br> 15 |
    | **XAMPP for Windows²** | 2008 R2<br> 2012 R2<br> 2016<br> 2019 |

=== "1.12"

    | **i-doit Version** | 1.12 |
    | --- | --- |
    | **Release** | 2018-12 |
    | **Apache Webserver** | 2.4 |
    | **PHP** | 5.6 (deprecated)<br> 7.0<br> 7.1 <br>7.2 (recommended) |
    | **MySQL** | 5.6<br> 5.7 |
    | **MariaDB** |  10.0 <br>10.1 |
    | **Debian GNU/Linux** | 9<br> 8 |
    | **Ubuntu** | 16.04<br> 18.04 |
    | **RHEL** | 7.3¹<br> 7.4¹<br> 7.5¹<br> 7.6¹ |
    | **SLES** | 12 SP3<br> 15 |
    | **XAMPP for Windows²** | 2008 R2<br> 2012 R2<br> 2016<br> 2019 |

=== "1.11"

    | **i-doit Version** | 1.11 |
    | --- | --- |
    | **Release** | 2018-06 |
    | **Apache Webserver** | 2.4 |
    | **PHP** | 5.6 <br> 7.0<br> 7.1 |
    | **MySQL** | 5.6<br> 5.7 |
    | **MariaDB** |  10.0 <br>10.1 |
    | **Debian GNU/Linux** | 9<br> 8 |
    | **Ubuntu** | 16.04 |
    | **RHEL** | 7.3¹<br> 7.4¹<br> 7.5¹ |
    | **SLES** | 12 SP3 |
    | **XAMPP for Windows²** | 2008 R2<br> 2012 R2<br> 2016 |

=== "1.10"

    | **i-doit Version** | 1.10 |
    | --- | --- |
    | **Release** | 2017-12 |
    | **Apache Webserver** | 2.4 |
    | **PHP** | 5.6 <br> 7.0 |
    | **MySQL** | 5.6<br> 5.7 |
    | **MariaDB** |  10.0 <br>10.1 |
    | **Debian GNU/Linux** | 9<br> 8 |
    | **Ubuntu** | 16.04<br> 17.04 |
    | **RHEL** | 7.3¹<br> 7.4¹ |
    | **SLES** | 12 SP2 <br> 12 SP3 |
    | **XAMPP for Windows²** | 2008 R2<br> 2012 R2<br> 2016 |

=== "1.9"

    | **i-doit Version** | 1.9 |
    | --- | --- |
    | **Release** | 2017-05 |
    | **Apache Webserver** | 2.4 |
    | **PHP** | 5.4<br> 5.5<br> 5.6<br> 7.0 |
    | **MySQL** | 5.6<br> 5.7 |
    | **MariaDB** |  10.0 <br>10.1 |
    | **Debian GNU/Linux** | 9<br> 8 |
    | **Ubuntu** | 16.04 LTS<br> 16.10<br> 17.04 |
    | **RHEL** | 7.3¹ |
    | **SLES** | 12<br> 12 SP2 |
    | **XAMPP for Windows²** | 2008<br> 2012 |

=== "1.8"

    | **i-doit Version** | 1.8 |
    | --- | --- |
    | **Release** | 2016-10 |
    | **Apache Webserver** | 2.4 |
    | **PHP** | 5.4<br> 5.5<br> 5.6 |
    | **MySQL** | 5.6<br> 5.7 |
    | **MariaDB** |  10.0 <br>10.1 |
    | **Debian GNU/Linux** | 9<br> 8 |
    | **Ubuntu** | 14.04 |
    | **RHEL** | 7.3¹ |
    | **SLES** | 12<br> 12 SP2 |
    | **XAMPP for Windows²** | 2008<br> 2012 |

=== "1.7"

    | **i-doit Version** | 1.7 |
    | --- | --- |
    | **Release** | 2016-03 |
    | **Apache Webserver** | 2.2<br> 2.4 |
    | **PHP** | 5.4<br> 5.5<br> 5.6 |
    | **MySQL** | 5.6<br> 5.7 |
    | **MariaDB** |  10.0 <br>10.1 |
    | **Debian GNU/Linux** | 8 |
    | **Ubuntu** | 15.10 LTS<br> 14.04 |
    | **RHEL** | 7.2¹ |
    | **SLES** | 12 |
    | **XAMPP for Windows²** | 2008<br> 2012 |

| Legend |
| --- |
| ¹ With the help of third-party repositories |
| ² Not recommended for productive use |
