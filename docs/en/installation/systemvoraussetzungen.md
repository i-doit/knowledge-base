---
title: System Requirements
description: i-doit system requirements
icon:
status:
lang: en
---

# System Requirements

To ensure the operation of all i-doit functionalities, there are prerequisites for the underlying system that must be met.

!!! info Currency
    The system requirements listed below refer to the current version of i-doit, in this case **38**. These specifications are updated with each major release of i-doit. If you need the specifications for older versions of i-doit, you can follow the change history of this page.

## Minimum System Requirements

The following system parameters are minimum requirements to ensure operation of i-doit with up to approximately 10,000 objects and up to 10 concurrent users.

### Virtual Hardware (GNU/Linux)

-   2 vCPUs
-   2 GB RAM
-   10 GB free disk space

We recommend using a dedicated virtual machine. The actual hardware requirements depend on the scope of the [IT documentation](../glossar.md) and the number of concurrent users.

### Virtual Hardware (Windows)

For Windows, the [general Windows system requirements](https://learn.microsoft.com/windows-server/get-started/hardware-requirements) must be observed.

### LAMP / WAMP Stack

-   GNU/Linux in the 64-bit variant (amd64) or Windows Server 2022 in the 64-bit variant (amd64)
-   Apache web server **2.4**
-   MariaDB 10.6, **10.11** (recommended), 11.4, 11.8 or MySQL 5.7 (deprecated), 8.0, **8.4** (recommended)
-   PHP 8.2 (deprecated), PHP 8.3, or **PHP 8.4** (recommended)
-   PHP Extensions bcmath, ctype, curl, fileinfo, gd, imagick, json, ldap, mbstring, memcached, mysqli, mysqlnd, pgsql, session, soap, xml, xmlwriter, zip

We recommend using **Apache Web Server 2.4, PHP 8.4, and MariaDB 10.11**.

!!! Success "Reference Configuration (GNU/Linux)"
    The following system parameters form a reference configuration tested and recommended by us, which ensures high performance with up to 500,000 objects and a high number of concurrent users.

    ### Virtual Hardware

    - 2 vCPUs
    - 8 GB RAM
    - 50 GB free disk space

    ### Operating System

    We recommend a GNU/Linux-based operating system

    ### LAMP Stack

    - Apache 2.4.x (default package)
    - MariaDB 10.11.x (default package)
    - PHP 8.4.x (default package)

    !!! info "Note"
        i-doit is a database application and therefore an intensive disk user. Fast disk storage is recommended, as I/O traffic significantly determines performance.<br>
        Disk space requirements may increase with intensive use of file or image storage in i-doit.<br>
        The value of 50 GB is based only on the maximum database size that can be reached with full usage and during updates or similar operations.

## Client

A web browser is required on the client to access the i-doit Web GUI. The current version and the previous version of the web browser are supported

-   Mozilla Firefox (incl. latest ESR version)
-   Google Chrome/Chromium
-   Microsoft Edge (with compatibility mode disabled)
-   Apple Safari

## Compatibility Matrix

### Versions 30 to 38

=== "38"

    | **i-doit Version**                   | 38                                                        |
    | ------------------------------------ | --------------------------------------------------------- |
    | **Release**                          | 2026-03                                                   |
    | **Apache web server**                 | 2.4                                                       |
    | **PHP**                              | {++8.2 (deprecated)++}<br>8.3<br>{++==8.4== (recommended)++}  |
    | **MySQL**                            | {++5.7 (deprecated)++}<br>8.0<br>{++==8.4== (recommended)++}  |
    | **MariaDB**                          | 10.6<br>{++==10.11== (recommended)++}<br>11.4<br>{++11.8++} |
    | **Can update be skipped?** |                                                           |
    | **Requires i-doit version**      | v35                                                       |

    | Add-on                  | Incompatible below version |
    | ----------------------- | -------------------------- |
    | **analytics**           | 1.5                        |
    | **api**                 | 2.3                        |
    | **cabling**             | 1.5                        |
    | **document**            | 1.10                       |
    | **donamic_disposal**    | 1.2.9                      |
    | **donamic_inheritance** | 1.3.7                      |
    | **events**              | 1.3                        |
    | **floorplan**           | 1.9                        |
    | **iso27001**            | 1.6.3                      |
    | **isms**                | 1.5.2                      |
    | **maintenance**         | 1.2.2                      |
    | **nagios**              | 1.3                        |
    | **packager**            | 1.2.1                      |
    | **privacy**             | 2.1.1                      |
    | **relocate_ci**         | 1.5                        |
    | **scanit**              | 2.0.1                      |
    | **swapci**              | 1.6                        |
    | **viva2**               | 3.2.5                      |
    | **workflow**            | 1.5                        |
    | **sectornord_snagview** | 1.2.5                      |
    | **shd_smview_connect**  | 2025.1.1.2751              |
    | **synetics_flows**      | 1.2.0                      |

=== "37"

    | **i-doit Version**                   | 37                                                       |
    | ------------------------------------ | -------------------------------------------------------- |
    | **Release**                          | 2025-12                                                  |
    | **Apache web server**                 | 2.4                                                      |
    | **PHP**                              | 8.2<br>==8.3== (recommended)<br>8.4                        |
    | **MySQL**                            | 5.7<br>==8.0== (recommended)<br>{++8.4++}                  |
    | **MariaDB**                          | 10.5 (deprecated)<br>==10.6== (recommended)<br>10.11<br>11.4 |
    | **Can update be skipped?** |                                                          |
    | **Requires i-doit version**      | v35                                                      |

    | Add-on                  | Incompatible below version |
    | ----------------------- | -------------------------- |
    | **analytics**           | 1.5                        |
    | **api**                 | 2.3                        |
    | **cabling**             | 1.5                        |
    | **document**            | 1.10                       |
    | **donamic_disposal**    | 1.2.9                      |
    | **donamic_inheritance** | 1.3.7                      |
    | **events**              | 1.3                        |
    | **floorplan**           | 1.9                        |
    | **iso27001**            | 1.6.3                      |
    | **isms**                | 1.5.2                      |
    | **maintenance**         | 1.2.2                      |
    | **nagios**              | 1.3                        |
    | **packager**            | 1.2.1                      |
    | **privacy**             | 2.1.1                      |
    | **relocate_ci**         | 1.5                        |
    | **scanit**              | 2.0.1                      |
    | **swapci**              | 1.6                        |
    | **viva2**               | 3.2.5                      |
    | **workflow**            | 1.5                        |
    | **sectornord_snagview** | 1.2.5                      |
    | **shd_smview_connect**  | 2025.1.1.2751              |
    | **synetics_flows**      | 1.2.0                      |

=== "36"

    | **i-doit Version**                   | 36                                                              |
    | ------------------------------------ | --------------------------------------------------------------- |
    | **Release**                          | 2025-09                                                         |
    | **Apache web server**                 | 2.4                                                             |
    | **PHP**                              | {--8.1 (deprecated)--}<br>8.2<br>==8.3== (recommended)<br>{++8.4++} |
    | **MySQL**                            | 5.7<br>==8.0== (recommended)                                      |
    | **MariaDB**                          | 10.5 (deprecated)<br>==10.6== (recommended)<br>10.11<br>11.4        |
    | **Can update be skipped?** | Yes                                                              |
    | **Requires i-doit version**      | v35                                                             |

    | Add-on              | Incompatible below version |
    | ------------------- | -------------------------- |
    | analytics           | 1.5                        |
    | api                 | 2.3                        |
    | cabling             | 1.5                        |
    | document            | 1.10                       |
    | donamic_disposal    | 1.2.9                      |
    | donamic_inheritance | 1.3.7                      |
    | events              | 1.3                        |
    | floorplan           | 1.9                        |
    | iso27001            | 1.6.1                      |
    | isms                | 1.5.2                      |
    | maintenance         | 1.2.2                      |
    | nagios              | 1.3                        |
    | packager            | 1.2.1                      |
    | privacy             | 2.1.1                      |
    | relocate_ci         | 1.5                        |
    | scanit              | 2.0.1                      |
    | swapci              | 1.6                        |
    | viva2               | 3.2.5                      |
    | workflow            | 1.5                        |
    | sectornord_snagview | 1.2.5                      |
    | shd_smview_connect  | 2025.1.1.2751              |
    | synetics_flows      | 1.2.0                      |

=== "35"

    | **i-doit Version**                   | 35                                                                                      |
    | ------------------------------------ | --------------------------------------------------------------------------------------- |
    | **Release**                          | 2025-06                                                                                 |
    | **Apache web server**                 | 2.4                                                                                     |
    | **PHP**                              | 8.1 {++(deprecated)++}<br>8.2 {--(recommended)--}<br>==8.3== {++(recommended)++}              |
    | **MySQL**                            | 5.7<br>8.0                                                                              |
    | **MariaDB**                          | {--10.4 (deprecated)--}<br>10.5 (deprecated)<br>==10.6== (recommended)<br>10.11<br>{++11.4++} |
    | **Can update be skipped?** | ==No==                                                                                |
    | **Requires i-doit version**      | v31                                                                 |

    | Add-on              | Incompatible below version |
    | ------------------- | -------------------------- |
    | analytics           | 1.5                        |
    | api                 | 2.3                        |
    | cabling             | 1.5                        |
    | document            | 1.10                       |
    | donamic_disposal    | 1.2.9                      |
    | donamic_inheritance | 1.3.7                      |
    | events              | 1.3                        |
    | floorplan           | 1.9                        |
    | iso27001            | 1.6.1                      |
    | isms                | 1.5.2                      |
    | maintenance         | 1.2.2                      |
    | nagios              | 1.3                        |
    | packager            | 1.2.1                      |
    | privacy             | 2.1.1                      |
    | relocate_ci         | 1.5                        |
    | scanit              | 2.0.1                      |
    | swapci              | 1.6                        |
    | viva2               | 3.2.5                      |
    | workflow            | 1.5                        |
    | sectornord_snagview | 1.2.5                      |
    | shd_smview_connect  | 2025.1.1.2751              |

=== "34"

    | **i-doit Version**                   | 34                                                                  |
    | ------------------------------------ | ------------------------------------------------------------------- |
    | **Release**                          | 2025-02                                                             |
    | **Apache web server**                 | 2.4                                                                 |
    | **PHP**                              | 8.1<br>==8.2== (recommended)<br>8.3                                   |
    | **MySQL**                            | 5.7<br>8.0                                                          |
    | **MariaDB**                          | 10.4 (deprecated)<br>10.5 (deprecated)<br>==10.6== (recommended)<br>10.11 |
    | **Can update be skipped?** | Yes                                                                  |
    | **Requires i-doit version**      | v31                                                |

    | Add-on              | Incompatible below version |
    | ------------------- | -------------------------- |
    | analytics           | 1.3.1                      |
    | api                 | 2.3                        |
    | donamic_disposal    | 1.1.2                      |
    | donamic_inheritance | 1.3.7                      |
    | iso27001            | 1.5.2                      |
    | isms                | 1.5.2                      |
    | maintenance         | 1.2.2                      |
    | nagios              | 1.3                        |
    | packager            | 1.2.1                      |
    | privacy             | 1.0.1                      |
    | swapci              | 1.3                        |
    | viva2               | 3.2.4                      |
    | workflow            | 1.1.1                      |

=== "33"

    | **i-doit Version**                   | 33                                                                  |
    | ------------------------------------ | ------------------------------------------------------------------- |
    | **Release**                          | 2024-10                                                             |
    | **Apache web server**                 | 2.4                                                                 |
    | **PHP**                              | 8.1<br>==8.2== (recommended)<br>8.3                                   |
    | **MySQL**                            | 5.7<br>8.0                                                          |
    | **MariaDB**                          | 10.4 (deprecated)<br>10.5 (deprecated)<br>==10.6== (recommended)<br>10.11 |
    | **Can update be skipped?** | Yes                                                                  |
    | **Requires i-doit version**      | v31                                                  |

=== "32"

    | **i-doit Version**                   | 32                                                                  |
    | ------------------------------------ | ------------------------------------------------------------------- |
    | **Release**                          | 2024-07                                                             |
    | **Apache web server**                 | 2.4                                                                 |
    | **PHP**                              | 8.0<br>==8.1== (recommended)<br>8.2                                   |
    | **MySQL**                            | 5.7<br>8.0                                                          |
    | **MariaDB**                          | 10.4 (deprecated)<br>10.5 (deprecated)<br>==10.6== (recommended)<br>10.11 |
    | **Can update be skipped?** | Yes                                                                  |
    | **Requires i-doit version**      | v31                                                      |

=== "31"

    | **i-doit Version**                   | 31                                                                  |
    | ------------------------------------ | ------------------------------------------------------------------- |
    | **Release**                          | 2024-05                                                             |
    | **Apache web server**                 | 2.4                                                                 |
    | **PHP**                              | 8.0<br>==8.1== (recommended)<br>8.2                                   |
    | **MySQL**                            | 5.7<br>8.0                                                          |
    | **MariaDB**                          | 10.4 (deprecated)<br>10.5 (deprecated)<br>==10.6== (recommended)<br>10.11 |
    | **Can update be skipped?** | Yes                                                                  |
    | **Requires i-doit version**      | v29                                                         |

=== "30"

    | **i-doit Version**                   | 30                                                                        |
    | ------------------------------------ | ------------------------------------------------------------------------- |
    | **Release**                          | 2024-04                                                                   |
    | **Apache web server**                 | 2.4                                                                       |
    | **PHP**                              | 7.4 (deprecated) <br>8.0<br>==8.1== (recommended)<br>8.2                      |
    | **MySQL**                            | 5.7<br>8.0                                                                |
    | **MariaDB**                          | 10.4 (deprecated)<br>10.5 (deprecated)<br>==10.6== (recommended)<br>{++10.11++} |
    | **Can update be skipped?** | Yes                                                                        |
    | **Requires i-doit version**      | v29                                                                       |


### Versions 20 - 29

=== "29"

    | **i-doit Version**                   | 29                                                         |
    | ------------------------------------ | ---------------------------------------------------------- |
    | **Release**                          | 2024-02                                                    |
    | **Apache web server**                 | 2.4                                                        |
    | **PHP**                              | 7.4 (deprecated) <br>==8.0== (recommended)<br>8.1<br>{++8.2++} |
    | **MySQL**                            | 5.7<br>8.0                                                 |
    | **MariaDB**                          | 10.2 <br>10.3  <br>10.4  <br>10.5 <br>==10.6== (recommended) |
    | **Can update be skipped?** | ==No==                                                   |
    | **Requires i-doit version**      | v20                           |

=== "28"

    | **i-doit Version**                   | 28                                                         |
    | ------------------------------------ | ---------------------------------------------------------- |
    | **Release**                          | 2023-12                                                    |
    | **Apache web server**                 | 2.4                                                        |
    | **PHP**                              | 7.4 (deprecated) <br>==8.0== (recommended)<br>8.1              |
    | **MySQL**                            | 5.7<br>8.0                                                 |
    | **MariaDB**                          | 10.2 <br>10.3  <br>10.4  <br>10.5 <br>==10.6== (recommended) |
    | **Can update be skipped?** | Yes                                                         |
    | **Requires i-doit version**      | v20                           |

=== "27"

    | **i-doit Version**                   | 27                                                         |
    | ------------------------------------ | ---------------------------------------------------------- |
    | **Release**                          | 2023-08                                                    |
    | **Apache web server**                 | 2.4                                                        |
    | **PHP**                              | 7.4 (deprecated) <br>==8.0== (recommended)<br>8.1              |
    | **MySQL**                            | 5.7 <br>8.0                                                |
    | **MariaDB**                          | 10.2 <br>10.3  <br>10.4  <br>10.5 <br>==10.6== (recommended) |
    | **Can update be skipped?** | Yes                                                         |
    | **Requires i-doit version**      | v20                                 |

=== "26"

    | **i-doit Version**                   | 26                                                         |
    | ------------------------------------ | ---------------------------------------------------------- |
    | **Release**                          | 2023-08                                                    |
    | **Apache web server**                 | 2.4                                                        |
    | **PHP**                              | 7.4<br>==8.0== (recommended) <br>{++8.1++}                   |
    | **MySQL**                            | 5.7<br>8.0                                                 |
    | **MariaDB**                          | 10.2 <br>10.3  <br>10.4  <br>10.5 <br>==10.6== (recommended) |
    | **Can update be skipped?** | Yes                                                         |
    | **Requires i-doit version**      | v20                                    |

=== "25"

    | **i-doit Version**     | 25                                                      |
    | ---------------------- | ------------------------------------------------------- |
    | **Release**            | 2023-06                                                 |
    | **Apache web server**   | 2.4                                                     |
    | **PHP**                | 7.4 <br>8.0 (recommended)                                 |
    | **MySQL**              | 5.7 <br>8.0                                             |
    | **MariaDB**            | 10.2  <br>10.3  <br>10.4  <br>10.5 <br>10.6 (recommended) |
    | **Debian GNU/Linux**   | 11                                                      |
    | **Ubuntu**             | 18.04¹<br> 20.04                                        |
    | **RHEL**               | 7¹<br> 8                                                |
    | **SLES**               | 15 SP1<br> 15 SP 2<br> SP 3                             |
    | **XAMPP for Windows²** | 2022                                                    |

=== "24"

    | **i-doit Version**     | 24                                             |
    | ---------------------- | ---------------------------------------------- |
    | **Release**            | 2023-05                                        |
    | **Apache web server**   | 2.4                                            |
    | **PHP**                | 7.4 <br>8.0 (recommended)                        |
    | **MySQL**              | 5.7                                            |
    | **MariaDB**            | 10.2  <br>10.3  <br>10.4  <br>10.5 (recommended) |
    | **Debian GNU/Linux**   | 11                                             |
    | **Ubuntu**             | 18.04¹<br> 20.04                               |
    | **RHEL**               | 7¹<br> 8                                       |
    | **SLES**               | 15 SP1<br> 15 SP 2<br> SP 3                    |
    | **XAMPP for Windows²** | 2016<br> 2019                                  |

=== "23, 22, 21, 20"

    | **i-doit Version**     | 23, 22, 21, 20, 1.19                           |
    | ---------------------- | ---------------------------------------------- |
    | **Release**            | 2023-06                                        |
    | **Apache web server**   | 2.4                                            |
    | **PHP**                | 7.4 <br>8.0 (recommended)                        |
    | **MySQL**              | 5.7                                            |
    | **MariaDB**            | 10.2  <br>10.3  <br>10.4  <br>10.5 (recommended) |
    | **Debian GNU/Linux**   | 11                                             |
    | **Ubuntu**             | 18.04<br> 20.04                                |
    | **RHEL**               | 7¹<br> 8                                       |
    | **SLES**               | 15 SP1<br> 15 SP 2<br> SP 3                    |
    | **XAMPP for Windows²** | 2016<br> 2019                                  |

## Versions 1.7 - 1.19

=== "1.19"

    | **i-doit Version**     | 1.19                                           |
    | ---------------------- | ---------------------------------------------- |
    | **Release**            | 2022-09                                        |
    | **Apache web server**   | 2.4                                            |
    | **PHP**                | 7.4 <br>8.0 (recommended)                        |
    | **MySQL**              | 5.7                                            |
    | **MariaDB**            | 10.2  <br>10.3  <br>10.4  <br>10.5 (recommended) |
    | **Debian GNU/Linux**   | 11                                             |
    | **Ubuntu**             | 18.04<br> 20.04                                |
    | **RHEL**               | 7¹<br> 8                                       |
    | **SLES**               | 15 SP1<br> 15 SP 2<br> SP 3                    |
    | **XAMPP for Windows²** | 2016<br> 2019                                  |

=== "1.18"

    | **i-doit Version**     | 1.18                                           |
    | ---------------------- | ---------------------------------------------- |
    | **Release**            | 2022-01                                        |
    | **Apache web server**   | 2.4                                            |
    | **PHP**                | 7.3 (deprecated) <br>7.4 (recommended)             |
    | **MySQL**              | 5.7                                            |
    | **MariaDB**            | 10.2  <br>10.3  <br>10.4  <br>10.5 (recommended) |
    | **Debian GNU/Linux**   | 10, 11                                         |
    | **Ubuntu**             | 18.04<br> 20.04                                |
    | **RHEL**               | 7¹<br> 8                                       |
    | **SLES**               | 15 SP1<br> 15 SP 2                             |
    | **XAMPP for Windows²** | 2016<br> 2019                                  |

=== "1.17"

    | **i-doit Version**     | 1.17                                           |
    | ---------------------- | ---------------------------------------------- |
    | **Release**            | 2021-07                                        |
    | **Apache web server**   | 2.4                                            |
    | **PHP**                | 7.3 <br>7.4 (recommended)                        |
    | **MySQL**              | 5.7                                            |
    | **MariaDB**            | 10.2  <br>10.3  <br>10.4  <br>10.5 (recommended) |
    | **Debian GNU/Linux**   | 10                                             |
    | **Ubuntu**             | 18.04<br> 20.04                                |
    | **RHEL**               | 7¹<br> 8                                       |
    | **SLES**               | 15<br> 15 SP1                                  |
    | **XAMPP for Windows²** | 2016<br> 2019                                  |

=== "1.16"

    | **i-doit Version**     | 1.16                                                               |
    | ---------------------- | ------------------------------------------------------------------ |
    | **Release**            | 2021-01                                                            |
    | **Apache web server**   | 2.4                                                                |
    | **PHP**                | 7.2.5 (deprecated)<br> 7.3 <br> 7.4 (recommended)                      |
    | **MySQL**              | 5.6 (deprecated) <br>5.7                                             |
    | **MariaDB**            | 10.1 (deprecated)  <br>10.2  <br>10.3  <br>10.4 (recommended) <br>10.5 |
    | **Debian GNU/Linux**   | 10                                                                 |
    | **Ubuntu**             | 18.04<br> 20.04                                                    |
    | **RHEL**               | 7¹<br> 8                                                           |
    | **SLES**               | 15<br> 15 SP1                                                      |
    | **XAMPP for Windows²** | 2016<br> 2019                                                      |

=== "1.15"

    | **i-doit Version**     | 1.15                                                      |
    | ---------------------- | --------------------------------------------------------- |
    | **Release**            | 2020-07                                                   |
    | **Apache web server**   | 2.4                                                       |
    | **PHP**                | 7.1.8 (deprecated)<br> 7.2<br> 7.3 (recommended)<br>7.4       |
    | **MySQL**              | 5.6<br> 5.7                                               |
    | **MariaDB**            | 10.1 (deprecated)  <br>10.2  <br>10.3  <br>10.4 (recommended) |
    | **Debian GNU/Linux**   | 10                                                        |
    | **Ubuntu**             | 18.04<br> 20.04                                           |
    | **RHEL**               | 7¹<br> 8                                                  |
    | **SLES**               | 15<br> 15 SP1                                             |
    | **XAMPP for Windows²** | 2016<br> 2019                                             |

=== "1.14"

    | **i-doit Version**     | 1.14                                                      |
    | ---------------------- | --------------------------------------------------------- |
    | **Release**            | 2020-01                                                   |
    | **Apache web server**   | 2.4                                                       |
    | **PHP**                | 7.1.8 (deprecated)<br> 7.2<br> 7.3 (recommended)<br>7.4       |
    | **MySQL**              | 5.6<br> 5.7                                               |
    | **MariaDB**            | 10.1 (deprecated)  <br>10.2  <br>10.3  <br>10.4 (recommended) |
    | **Debian GNU/Linux**   | 10                                                        |
    | **Ubuntu**             | 18.04                                                     |
    | **RHEL**               | 7¹<br> 8                                                  |
    | **SLES**               | 15<br> 15 SP1                                             |
    | **XAMPP for Windows²** | 2016<br> 2019                                             |

=== "1.13"

    | **i-doit Version**     | 1.13                                                      |
    | ---------------------- | --------------------------------------------------------- |
    | **Release**            | 2019-06                                                   |
    | **Apache web server**   | 2.4                                                       |
    | **PHP**                | 7.0.8 (deprecated)<br> 7.1<br> 7.2 <br>7.3 (recommended)      |
    | **MySQL**              | 5.6<br> 5.7                                               |
    | **MariaDB**            | 10.0 (deprecated)  <br>10.1  <br>10.2  <br>10.3 (recommended) |
    | **Debian GNU/Linux**   | 10<br> 9<br> 8                                            |
    | **Ubuntu**             | 16.04<br> 18.04                                           |
    | **RHEL**               | 7¹<br> 8                                                  |
    | **SLES**               | 12 SP3<br> 15                                             |
    | **XAMPP for Windows²** | 2008 R2<br> 2012 R2<br> 2016<br> 2019                     |

=== "1.12"

    | **i-doit Version**     | 1.12                                               |
    | ---------------------- | -------------------------------------------------- |
    | **Release**            | 2018-12                                            |
    | **Apache web server**   | 2.4                                                |
    | **PHP**                | 5.6 (deprecated)<br> 7.0<br> 7.1 <br>7.2 (recommended) |
    | **MySQL**              | 5.6<br> 5.7                                        |
    | **MariaDB**            | 10.0 <br>10.1                                      |
    | **Debian GNU/Linux**   | 9<br> 8                                            |
    | **Ubuntu**             | 16.04<br> 18.04                                    |
    | **RHEL**               | 7.3¹<br> 7.4¹<br> 7.5¹<br> 7.6¹                    |
    | **SLES**               | 12 SP3<br> 15                                      |
    | **XAMPP for Windows²** | 2008 R2<br> 2012 R2<br> 2016<br> 2019              |

=== "1.11"

    | **i-doit Version**     | 1.11                         |
    | ---------------------- | ---------------------------- |
    | **Release**            | 2018-06                      |
    | **Apache web server**   | 2.4                          |
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
    | **Apache web server**   | 2.4                          |
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
    | **Apache web server**   | 2.4                           |
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
    | **Apache web server**   | 2.4                 |
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
    | **Apache web server**   | 2.2<br> 2.4         |
    | **PHP**                | 5.4<br> 5.5<br> 5.6 |
    | **MySQL**              | 5.6<br> 5.7         |
    | **MariaDB**            | 10.0 <br>10.1       |
    | **Debian GNU/Linux**   | 8                   |
    | **Ubuntu**             | 15.10 LTS<br> 14.04 |
    | **RHEL**               | 7.2¹                |
    | **SLES**               | 12                  |
    | **XAMPP for Windows²** | 2008<br> 2012       |

| Legend                                      |
| --------------------------------------------- |
| ¹ With the help of third-party repositories |
| ² Not recommended for productive use          |
