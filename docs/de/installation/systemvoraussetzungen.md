# Systemvoraussetzungen

Um den Betrieb aller Funktionalitäten von i-doit zu gewährleisten, existieren für das darunter liegende System Voraussetzungen, die erfüllt sein müssen.

!!! info "Aktualität"
    Die unten genannten Systemvoraussetzungen beziehen sich auf die aktuelle Version von i-doit, in diesem Fall **33**. Zu jedem Major Release von i-doit werden diese Angaben angepasst. Wer die Angaben für ältere Versionen von i-doit benötigt, kann die Änderungshistorie dieser Seite verfolgen.

## Mindestanforderungen an das System

Folgende Systemparameter sind Mindestanforderungen, um einen Betrieb von i-doit mit bis zu ca. 10.000 Objekten und bis zu 10 gleichzeitig arbeitenden Benutzern zu gewährleisten.

### Virtuelle Hardware (GNU/Linux)

-   2 vCPUs
-   2 GB RAM
-   10 GB freier Festplattenspeicher

Wir empfehlen den Einsatz einer dedizierten, virtuellen Maschine. Der tatsächlich Hardware-Bedarf richtet sich nach Umfang der [IT-Dokumentation](../glossar.md) und Anzahl gleichzeitiger Benutzer.

### Virtuelle Hardware (Windows)

Für Windows sind die [generellen Windows Systemvoraussetzungen](https://learn.microsoft.com/en-us/windows-server/get-started/hardware-requirements) zu beachten.

### LAMP / WAMP Stack

-   GNU/Linux in der 64bit Variante(amd64) oder Windows Server 2022 in der 64bit Variante(amd64)
-   Apache Webserver **2.4**
-   MariaDB 10.4 (veraltet), 10.5 (veraltet), **10.6** (empfohlen), 10.11 oder MySQL 5.7 oder 8.0 _Wir empfehlen jedoch, MariaDB anstelle von MySQL zu verwenden._
-   PHP 8.1 , **8.2** (empfohlen) oder PHP 8.3
-   PHP Extensions: bcmath, ctype, curl, fileinfo, gd, imagick, json, ldap, mbstring, memcached, mysqli, mysqlnd, pgsql, session, soap, xml, zip

Wir empfehlen den Einsatz von **Apache Webserver 2.4, PHP 8.2 und MariaDB 10.6**.

!!! Success "Referenzkonfiguration (GNU/Linux)"
    Folgende Systemparameter bilden eine von uns getestete und empfohlene Referenzkonfiguration, welche eine hohe Performance bei bis zu 500.000 Objekten und einer hohen Anzahl von gleichzeitig arbeitenden Benutzern gewährleistet.

    ### Virtuelle Hardware

    - 2 vCPUs
    - 8 GB RAM
    - 50 GB freier Festplattenplatz

    ### Betriebssystem

    Wir empfehlen ein auf GNU/Linux basiertes Betriebssystem

    ### LAMP Stack

    - Apache 2.4.x(Standardpaket)
    - MariaDB 10.6.x (Standardpaket)
    - PHP 8.2.x (Standardpaket)

    !!! info "Hinweis"

        i-doit ist eine Datenbankanwendung und daher intensiver Festplattennutzer. Ein schneller Festplattenspeicher wird empfohlen, da I/O-Verkehr maßgeblich die Performance bestimmt.<br>
        Die Festplattenbedarf kann sich bei intensiver Nutzung der Datei- oder Bildablage in i-doit erhöhen.<br>
        Der Wert von 50 GB orientiert sich nur an der maximalen Datenbankgröße, die bei voller Nutzung und bei Updates oder ähnlichen Operationen erreicht werden kann.

## Client

Auf dem Client wird ein Webbrowser benötigt, um auf die Web GUI von i-doit zugreifen zu können. Es wird die jeweils aktuelle Version und die Vorversion des Webbrowsers unterstützt:

-   Mozilla Firefox (inkl. letzte ESR-Version)
-   Google Chrome/Chromium
-   Microsoft Edge (abgeschalteter Kompatibilitätsmodus)
-   Apple Safari

## Kompatibilitätsmatrix

=== "33"

    | **i-doit Version**   | 33                                                                  |
    | -------------------- | ------------------------------------------------------------------- |
    | **Release**          | 2024-10                                                             |
    | **Apache Webserver** | 2.4                                                                 |
    | **PHP**              | 8.1<br>==8.2== (empfohlen)<br>8.3                                   |
    | **MySQL**            | 5.7 <br>8.0                                                         |
    | **MariaDB**          | 10.4 (veraltet)<br>10.5 (veraltet)<br>==10.6== (empfohlen)<br>10.11 |

=== "32"

    | **i-doit Version**   | 32                                                                  |
    | -------------------- | ------------------------------------------------------------------- |
    | **Release**          | 2024-07                                                             |
    | **Apache Webserver** | 2.4                                                                 |
    | **PHP**              | 8.0<br>==8.1== (empfohlen)<br>8.2                                   |
    | **MySQL**            | 5.7 <br>8.0                                                         |
    | **MariaDB**          | 10.4 (veraltet)<br>10.5 (veraltet)<br>==10.6== (empfohlen)<br>10.11 |

=== "31"

    | **i-doit Version**   | 31                                                                  |
    | -------------------- | ------------------------------------------------------------------- |
    | **Release**          | 2024-05                                                             |
    | **Apache Webserver** | 2.4                                                                 |
    | **PHP**              | 8.0<br>==8.1== (empfohlen)<br>8.2                                   |
    | **MySQL**            | 5.7 <br>8.0                                                         |
    | **MariaDB**          | 10.4 (veraltet)<br>10.5 (veraltet)<br>==10.6== (empfohlen)<br>10.11 |

=== "30"

    | **i-doit Version**   | 30                                                                        |
    | -------------------- | ------------------------------------------------------------------------- |
    | **Release**          | 2024-04                                                                   |
    | **Apache Webserver** | 2.4                                                                       |
    | **PHP**              | 7.4 (veraltet) <br>8.0<br>==8.1== (empfohlen)<br>8.2                      |
    | **MySQL**            | 5.7 <br>8.0                                                               |
    | **MariaDB**          | 10.4 (veraltet)<br>10.5 (veraltet)<br>==10.6== (empfohlen)<br>{++10.11++} |

=== "29"

    | **i-doit Version**   | 29                                                         |
    | -------------------- | ---------------------------------------------------------- |
    | **Release**          | 2024-02                                                    |
    | **Apache Webserver** | 2.4                                                        |
    | **PHP**              | 7.4 (veraltet) <br>==8.0== (empfohlen)<br>8.1<br>{++8.2++} |
    | **MySQL**            | 5.7 <br>8.0                                                |
    | **MariaDB**          | 10.2 <br>10.3  <br>10.4  <br>10.5 <br>==10.6== (empfohlen) |

=== "28"

    | **i-doit Version**   | 28                                                         |
    | -------------------- | ---------------------------------------------------------- |
    | **Release**          | 2023-12                                                    |
    | **Apache Webserver** | 2.4                                                        |
    | **PHP**              | 7.4 (veraltet) <br>==8.0== (empfohlen)<br>8.1              |
    | **MySQL**            | 5.7 <br>8.0                                                |
    | **MariaDB**          | 10.2 <br>10.3  <br>10.4  <br>10.5 <br>==10.6== (empfohlen) |

=== "27"

    | **i-doit Version**   | 27                                                         |
    | -------------------- | ---------------------------------------------------------- |
    | **Release**          | 2023-08                                                    |
    | **Apache Webserver** | 2.4                                                        |
    | **PHP**              | 7.4 (veraltet) <br>==8.0== (empfohlen)<br>8.1              |
    | **MySQL**            | 5.7 <br>8.0                                                |
    | **MariaDB**          | 10.2 <br>10.3  <br>10.4  <br>10.5 <br>==10.6== (empfohlen) |

=== "26"

    | **i-doit Version**   | 26                                                         |
    | -------------------- | ---------------------------------------------------------- |
    | **Release**          | 2023-08                                                    |
    | **Apache Webserver** | 2.4                                                        |
    | **PHP**              | 7.4 <br>==8.0== (empfohlen) <br>{++8.1++}                  |
    | **MySQL**            | 5.7 <br>8.0                                                |
    | **MariaDB**          | 10.2 <br>10.3  <br>10.4  <br>10.5 <br>==10.6== (empfohlen) |

=== "25"

    | **i-doit Version**     | 25                                                      |
    | ---------------------- | ------------------------------------------------------- |
    | **Release**            | 2023-06                                                 |
    | **Apache Webserver**   | 2.4                                                     |
    | **PHP**                | 7.4 <br>8.0 (empfohlen)                                 |
    | **MySQL**              | 5.7 <br>8.0                                             |
    | **MariaDB**            | 10.2  <br>10.3  <br>10.4  <br>10.5 <br>10.6 (empfohlen) |
    | **Debian GNU/Linux**   | 11                                                      |
    | **Ubuntu**             | 18.04¹<br> 20.04                                        |
    | **RHEL**               | 7¹<br> 8                                                |
    | **SLES**               | 15 SP1<br> 15 SP 2<br> SP 3                             |
    | **XAMPP for Windows²** | 2022                                                    |

=== "24"

    | **i-doit Version**     | 24                                             |
    | ---------------------- | ---------------------------------------------- |
    | **Release**            | 2023-05                                        |
    | **Apache Webserver**   | 2.4                                            |
    | **PHP**                | 7.4 <br>8.0 (empfohlen)                        |
    | **MySQL**              | 5.7                                            |
    | **MariaDB**            | 10.2  <br>10.3  <br>10.4  <br>10.5 (empfohlen) |
    | **Debian GNU/Linux**   | 11                                             |
    | **Ubuntu**             | 18.04¹<br> 20.04                               |
    | **RHEL**               | 7¹<br> 8                                       |
    | **SLES**               | 15 SP1<br> 15 SP 2<br> SP 3                    |
    | **XAMPP for Windows²** | 2016<br> 2019                                  |

=== "23, 22, 21, 20, 1.19"

    | **i-doit Version**     | 23, 22, 21, 20, 1.19                           |
    | ---------------------- | ---------------------------------------------- |
    | **Release**            | 2023-06                                        |
    | **Apache Webserver**   | 2.4                                            |
    | **PHP**                | 7.4 <br>8.0 (empfohlen)                        |
    | **MySQL**              | 5.7                                            |
    | **MariaDB**            | 10.2  <br>10.3  <br>10.4  <br>10.5 (empfohlen) |
    | **Debian GNU/Linux**   | 11                                             |
    | **Ubuntu**             | 18.04<br> 20.04                                |
    | **RHEL**               | 7¹<br> 8                                       |
    | **SLES**               | 15 SP1<br> 15 SP 2<br> SP 3                    |
    | **XAMPP for Windows²** | 2016<br> 2019                                  |

=== "1.18"

    | **i-doit Version**     | 1.18                                           |
    | ---------------------- | ---------------------------------------------- |
    | **Release**            | 2022-01                                        |
    | **Apache Webserver**   | 2.4                                            |
    | **PHP**                | 7.3 (veraltet) <br>7.4 (empfohlen)             |
    | **MySQL**              | 5.7                                            |
    | **MariaDB**            | 10.2  <br>10.3  <br>10.4  <br>10.5 (empfohlen) |
    | **Debian GNU/Linux**   | 10, 11                                         |
    | **Ubuntu**             | 18.04<br> 20.04                                |
    | **RHEL**               | 7¹<br> 8                                       |
    | **SLES**               | 15 SP1<br> 15 SP 2                             |
    | **XAMPP for Windows²** | 2016<br> 2019                                  |

=== "1.17"

    | **i-doit Version**     | 1.17                                           |
    | ---------------------- | ---------------------------------------------- |
    | **Release**            | 2021-07                                        |
    | **Apache Webserver**   | 2.4                                            |
    | **PHP**                | 7.3 <br>7.4 (empfohlen)                        |
    | **MySQL**              | 5.7                                            |
    | **MariaDB**            | 10.2  <br>10.3  <br>10.4  <br>10.5 (empfohlen) |
    | **Debian GNU/Linux**   | 10                                             |
    | **Ubuntu**             | 18.04<br> 20.04                                |
    | **RHEL**               | 7¹<br> 8                                       |
    | **SLES**               | 15<br> 15 SP1                                  |
    | **XAMPP for Windows²** | 2016<br> 2019                                  |

=== "1.16"

    | **i-doit Version**     | 1.16                                                               |
    | ---------------------- | ------------------------------------------------------------------ |
    | **Release**            | 2021-01                                                            |
    | **Apache Webserver**   | 2.4                                                                |
    | **PHP**                | 7.2.5 (veraltet)<br> 7.3 <br> 7.4 (empfohlen)                      |
    | **MySQL**              | 5.6 (veraltet) <br>5.7                                             |
    | **MariaDB**            | 10.1 (veraltet)  <br>10.2  <br>10.3  <br>10.4 (empfohlen) <br>10.5 |
    | **Debian GNU/Linux**   | 10                                                                 |
    | **Ubuntu**             | 18.04<br> 20.04                                                    |
    | **RHEL**               | 7¹<br> 8                                                           |
    | **SLES**               | 15<br> 15 SP1                                                      |
    | **XAMPP for Windows²** | 2016<br> 2019                                                      |

=== "1.15"

    | **i-doit Version**     | 1.15                                                      |
    | ---------------------- | --------------------------------------------------------- |
    | **Release**            | 2020-07                                                   |
    | **Apache Webserver**   | 2.4                                                       |
    | **PHP**                | 7.1.8 (veraltet)<br> 7.2<br> 7.3 (empfohlen)<br>7.4       |
    | **MySQL**              | 5.6<br> 5.7                                               |
    | **MariaDB**            | 10.1 (veraltet)  <br>10.2  <br>10.3  <br>10.4 (empfohlen) |
    | **Debian GNU/Linux**   | 10                                                        |
    | **Ubuntu**             | 18.04<br> 20.04                                           |
    | **RHEL**               | 7¹<br> 8                                                  |
    | **SLES**               | 15<br> 15 SP1                                             |
    | **XAMPP for Windows²** | 2016<br> 2019                                             |

=== "1.14"

    | **i-doit Version**     | 1.14                                                      |
    | ---------------------- | --------------------------------------------------------- |
    | **Release**            | 2020-01                                                   |
    | **Apache Webserver**   | 2.4                                                       |
    | **PHP**                | 7.1.8 (veraltet)<br> 7.2<br> 7.3 (empfohlen)<br>7.4       |
    | **MySQL**              | 5.6<br> 5.7                                               |
    | **MariaDB**            | 10.1 (veraltet)  <br>10.2  <br>10.3  <br>10.4 (empfohlen) |
    | **Debian GNU/Linux**   | 10                                                        |
    | **Ubuntu**             | 18.04                                                     |
    | **RHEL**               | 7¹<br> 8                                                  |
    | **SLES**               | 15<br> 15 SP1                                             |
    | **XAMPP for Windows²** | 2016<br> 2019                                             |

=== "1.13"

    | **i-doit Version**     | 1.13                                                      |
    | ---------------------- | --------------------------------------------------------- |
    | **Release**            | 2019-06                                                   |
    | **Apache Webserver**   | 2.4                                                       |
    | **PHP**                | 7.0.8 (veraltet)<br> 7.1<br> 7.2 <br>7.3 (empfohlen)      |
    | **MySQL**              | 5.6<br> 5.7                                               |
    | **MariaDB**            | 10.0 (veraltet)  <br>10.1  <br>10.2  <br>10.3 (empfohlen) |
    | **Debian GNU/Linux**   | 10<br> 9<br> 8                                            |
    | **Ubuntu**             | 16.04<br> 18.04                                           |
    | **RHEL**               | 7¹<br> 8                                                  |
    | **SLES**               | 12 SP3<br> 15                                             |
    | **XAMPP for Windows²** | 2008 R2<br> 2012 R2<br> 2016<br> 2019                     |

=== "1.12"

    | **i-doit Version**     | 1.12                                               |
    | ---------------------- | -------------------------------------------------- |
    | **Release**            | 2018-12                                            |
    | **Apache Webserver**   | 2.4                                                |
    | **PHP**                | 5.6 (veraltet)<br> 7.0<br> 7.1 <br>7.2 (empfohlen) |
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
| ² Not empfohlen for productive use          |
