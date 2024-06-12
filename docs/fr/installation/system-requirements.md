# Configuration système 

Afin de garantir le fonctionnement de toutes les fonctionnalités d'i-doit, certains prérequis doivent être respectés par le système sous-jacent.

!!! info "Version actuelle"
    Les exigences ci-dessous s'appliquent à la version actuelle d'i-doit, dans ce cas **31**. Ces exigences sont ajustées pour chaque version majeure d'i-doit. Si les exigences des anciennes versions sont nécessaires, l'historique des modifications de cette page peut être utilisé.

## Exigences minimales 

Les paramètres système suivants sont les exigences minimales pour garantir le bon fonctionnement d'i-doit avec jusqu'à environ 10 000 objets et jusqu'à 10 utilisateurs travaillant simultanément.

### Matériel virtuel (GNU/Linux)

-   2 vCPU
-   2 Go de RAM
-   10 Go d'espace disque libre

Nous recommandons l'utilisation d'une machine virtuelle dédiée. La demande réelle en matériel est basée sur l'étendue de la [documentation informatique](../glossary.md) et le nombre d'utilisateurs simultanés.

### Matériel virtuel (Windows)

Pour Windows, les [exigences système générales de Windows](https://learn.microsoft.com/en-us/windows-server/get-started/hardware-requirements) doivent être respectées.

### Pile LAMP / WAMP

-   GNU/Linux en variante 64 bits (amd64) ou Windows Server 2022 en variante 64 bits (amd64)
-   Serveur Web Apache **2.4**
-   MariaDB 10.4 (obsolète), 10.5 (obsolète), **10.6** (recommandé), 10.11 ou MySQL 5.7 ou 8.0.
-   PHP 8.0, **8.1** (recommandé) et 8.2.
-   Extensions PHP : bcmath, ctype, curl, fileinfo, gd, imagick, json, ldap, mbstring, memcached, mysqli, mysqlnd, pgsql, session, soap, xml, zip

Nous recommandons l'utilisation d'**Apache Webserver 2.4, PHP 8.1 et MariaDB 10.6**.

!!! success "Configuration de référence (GNU/Linux)"
    Les paramètres système suivants constituent une configuration de référence testée et recommandée par nous et garantissent des performances élevées lorsqu'ils sont utilisés avec jusqu'à 500 000 objets et un grand nombre d'utilisateurs travaillant simultanément.

    ### Matériel virtuel

    -   2 vCPU
    -   8 Go de RAM
    -   50 Go d'espace disque libre

    ### Système d'exploitation

    Nous recommandons un système d'exploitation basé sur GNU/Linux

### Pile LAMP

-   Apache 2.4.x (paquet par défaut)
-   MariaDB 10.6.x (paquet par défaut)
-   PHP 8.1.x (paquet par défaut)

!!! note Note

    Comme i-doit est une application de base de données, elle utilise intensivement le disque dur. Comme le débit d'E/S détermine fortement les performances, il est recommandé d'utiliser un disque dur rapide.<br>
    Le besoin d'espace disque peut augmenter avec une utilisation intensive du stockage de fichiers ou d'images dans i-doit.<br>
    La valeur de 50 Go est uniquement destinée à la taille maximale de la base de données, qui peut être atteinte par une utilisation complète, des mises à jour et des opérations similaires.

## Client

Un navigateur Web est nécessaire du côté client pour accéder à l'interface Web de i-doit. Pour chaque navigateur Web, la version actuelle ainsi que la version précédente sont prises en charge :

-   Mozilla Firefox (y compris la dernière version ESR)
-   Google Chrome/Chromium
-   Microsoft Edge (mode de compatibilité désactivé)
-   Apple Safari

## Matrice de compatibilité

**= "31"

    | **Version i-doit** | 31 |
    | --- | --- |
    | **Publication** | 2024-05 |
    | **Serveur Web Apache** | 2.4 |
    | **PHP** | 8.0<br>**8.1** (recommandé)<br>8.2 |
    | **MySQL** | 5.7 <br>8.0 |
    | **MariaDB** | 10.4 (obsolète)<br>10.5 (obsolète)<br>**10.6** (recommandé)<br>10.11 |

**= "30"

    | **Version i-doit** | 30 |
    | --- | --- |
    | **Publication** | 2024-04 |
    | **Serveur Web Apache** | 2.4 |
    | **PHP** | 7.4 (obsolète) <br>8.0<br>**8.1** (recommandé)<br>8.2 |
    | **MySQL** | 5.7 <br>8.0 |
    | **MariaDB** | 10.4 (obsolète)<br>10.5 (obsolète)<br>**10.6** (recommandé)<br>{++10.11++} |

**= "29"

    | **Version i-doit** | 29 |
    | --- | --- |
    | **Publication** | 2024-02 |
    | **Serveur Web Apache** | 2.4 |
    | **PHP** | 7.4 (obsolète) <br>**8.0** (recommandé)<br>8.1<br>{++8.2++} |
    | **MySQL** | 5.7 <br>8.0 |
    | **MariaDB** |  10.2 <br>10.3  <br>10.4  <br>10.5 <br>**10.6** (recommandé) |

**= "28"

    | **Version i-doit** | 28 |
    | --- | --- |
    | **Publication** | 2023-12 |
    | **Serveur Web Apache** | 2.4 |
    | **PHP** | 7.4 (obsolète) <br>**8.0** (recommandé)<br>8.1 |
    | **MySQL** | 5.7 <br>8.0 |
    | **MariaDB** |  10.2 <br>10.3  <br>10.4  <br>10.5 <br>**10.6** (recommandé) |

**= "27"

    | **Version i-doit** | 27 |
    | --- | --- |
    | **Publication** | 2023-08 |
    | **Serveur Web Apache** | 2.4 |
    | **PHP** | 7.4 (obsolète) <br>**8.0** (recommandé)<br>8.1 |
    | **MySQL** | 5.7 <br>8.0 |
    | **MariaDB** |  10.2 <br>10.3  <br>10.4  <br>10.5 <br>**10.6** (recommandé) |

**= "26"

    | **Version i-doit** | 26 |
    | --- | --- |
    | **Publication** | 2023-08 |
    | **Serveur Web Apache** | 2.4 |
    | **PHP** | 7.4 <br>**8.0** (recommandé)<br>{++8.1++} |
    | **MySQL** | 5.7 <br>8.0 |
    | **MariaDB** |  10.2 <br>10.3  <br>10.4  <br>10.5 <br>**10.6** (recommandé) |

**= "25"

    | **Version i-doit** | 25 |
    | --- | --- |
    | **Publication** | 2023-06 |
    | **Serveur Web Apache** | 2.4 |
    | **PHP** | 7.4 <br>8.0 (recommandé) |
    | **MySQL** | 5.7 <br>8.0 |
    | **MariaDB** |  10.2 <br>10.3  <br>10.4  <br>10.5 <br>10.6 (recommandé) |
    | **Debian GNU/Linux** | 11 |
    | **Ubuntu** | 18.04¹<br> 20.04 |
    | **RHEL** | 7¹<br> 8 |
    | **SLES** | 15 SP1<br> 15 SP 2<br> SP 3 |
    | **XAMPP pour Windows²** | 2022 |

**= "24"

    | **Version i-doit** | 24 |
    | --- | --- |
    | **Publication** | 2023-05 |
    | **Serveur Web Apache** | 2.4 |
    | **PHP** | 7.4 <br>8.0 (recommandé) |
    | **MySQL** | 5.7 |
    | **MariaDB** |  10.2  <br>10.3  <br>10.4  <br>10.5 (recommandé) |
    | **Debian GNU/Linux** | 11 |
    | **Ubuntu** | 18.04¹<br> 20.04 |
    | **RHEL** | 7¹<br> 8 |
    | **SLES** | 15 SP1<br> 15 SP 2<br> SP 3 |
    | **XAMPP pour Windows²** | 2016<br> 2019 |

**= "23, 22, 21, 20, 1.19"

    | **Version i-doit** | 1.18 |
    | --- | --- |
    | **Publication** | 2022-02 |
    | **Serveur Web Apache** | 2.4 |
    | **PHP** | 7.3 (obsolète) <br>7.4 (recommandé) |
    | **MySQL** | 5.7 |
    | **MariaDB** |  10.2  <br>10.3  <br>10.4  <br>10.5 (recommandé) |
    | **Debian GNU/Linux** | 10, 11 |
    | **Ubuntu** | 18.04<br> 20.04 |
    | **RHEL** | 7¹<br> 8 |
    | **SLES** | 15 SP1<br> 15 SP 2 |
    | **XAMPP pour Windows²** | 2016<br> 2019 |

**= "1.17"

    | **Version i-doit** | 1.17 |
    | --- | --- |
    | **Publication** | 2021-07 |
    | **Serveur Web Apache** | 2.4 |
    | **PHP** | 7.3 <br>7.4 (recommandé) |
    | **MySQL** | 5.7 |
    | **MariaDB** |  10.2  <br>10.3  <br>10.4  <br>10.5 (recommandé) |
    | **Debian GNU/Linux** | 10 |
    | **Ubuntu** | 18.04<br> 20.04 |
    | **RHEL** | 7¹<br> 8 |
    | **SLES** | 15<br> 15 SP1 |
    | **XAMPP pour Windows²** | 2016<br> 2019 |

**= "1.16"

    | **Version i-doit** | 1.16 |
    | --- | --- |
    | **Publication** | 2021-01 |
    | **Serveur Web Apache** | 2.4 |
    | **PHP** | 7.2.5 (obsolète)<br> 7.3 <br> 7.4 (recommandé) |
    | **MySQL** | 5.6 (obsolète) <br>5.7 |
    | **MariaDB** |  10.1 (obsolète)  <br>10.2  <br>10.3  <br>10.4 (recommandé) <br>10.5 |
    | **Debian GNU/Linux** | 10 |
    | **Ubuntu** | 18.04<br> 20.04 |
    | **RHEL** | 7¹<br> 8 |
    | **SLES** | 15<br> 15 SP1 |
    | **XAMPP pour Windows²** | 2016<br> 2019 |

**= "1.15"

    | **Version i-doit** | 1.15 |
    | --- | --- |
    | **Publication** | 2020-07 |
    | **Serveur Web Apache** | 2.4 |
    | **PHP** | 7.1.8 (obsolète)<br> 7.2<br> 7.3 (recommandé)<br>7.4 |
    | **MySQL** | 5.6<br> 5.7 |
    | **MariaDB** |  10.1 (obsolète)  <br>10.2  <br>10.3  <br>10.4 (recommandé) |
    | **Debian GNU/Linux** | 10 |
    | **Ubuntu** | 18.04<br> 20.04 |
    | **RHEL** | 7¹<br> 8 |
    | **SLES** | 15<br> 15 SP1 |
    | **XAMPP pour Windows²** | 2016<br> 2019 |

**= "1.14"

    | **Version i-doit** | 1.14 |
    | --- | --- |
    | **Publication** | 2020-01 |
    | **Serveur Web Apache** | 2.4 |
    | **PHP** | 7.1.8 (obsolète)<br> 7.2<br> 7.3 (recommandé)<br>7.4 |
    | **MySQL** | 5.6<br> 5.7 |
    | **MariaDB** |  10.1 (obsolète)  <br>10.2  <br>10.3  <br>10.4 (recommandé) |
    | **Debian GNU/Linux** | 10 |
    | **Ubuntu** | 18.04 |
    | **RHEL** | 7¹<br> 8 |
    | **SLES** | 15<br> 15 SP1 |
    | **XAMPP pour Windows²** | 2016<br> 2019 |

**= "1.13"

    | **Version i-doit** | 1.13 |
    | --- | --- |
    | **Publication** | 2019-06 |
    | **Serveur Web Apache** | 2.4 |
    | **PHP** | 7.0.8 (obsolète)<br> 7.1<br> 7.2 <br>7.3 (recommandé) |
    | **MySQL** | 5.6<br> 5.7 |
    | **MariaDB** |  10.0 (obsolète)  <br>10.1  <br>10.2  <br>10.3 (recommandé) |
    | **Debian GNU/Linux** | 10<br> 9<br> 8 |
    | **Ubuntu** | 16.04<br> 18.04 |
    | **RHEL** | 7¹<br> 8 |
    | **SLES** | 12 SP3<br> 15 |
    | **XAMPP pour Windows²** | 2008 R2<br> 2012 R2<br> 2016<br> 2019 |

**= "1.12"

    | **Version i-doit** | 1.12 |
    | --- | --- |
    | **Publication** | 2018-12 |
    | **Serveur Web Apache** | 2.4 |
    | **PHP** | 5.6 (obsolète)<br> 7.0<br> 7.1 <br>7.2 (recommandé) |
    | **MySQL** | 5.6<br> 5.7 |
    | **MariaDB** |  10.0 <br>10.1 |
    | **Debian GNU/Linux** | 9<br> 8 |
    | **Ubuntu** | 16.04<br> 18.04 |
    | **RHEL** | 7.3¹<br> 7.4¹<br> 7.5¹<br> 7.6¹ |
    | **SLES** | 12 SP3<br> 15 |
    | **XAMPP pour Windows²** | 2008 R2<br> 2012 R2<br> 2016<br> 2019 |

**= "1.11"

    | **Version i-doit** | 1.11 |
    | --- | --- |
    | **Publication** | 2018-06 |
    | **Serveur Web Apache** | 2.4 |
    | **PHP** | 5.6 <br> 7.0<br> 7.1 |
    | **MySQL** | 5.6<br> 5.7 |
    | **MariaDB** |  10.0 <br>10.1 |
    | **Debian GNU/Linux** | 9<br> 8 |
    | **Ubuntu** | 16.04 |
    | **RHEL** | 7.3¹<br> 7.4¹<br> 7.5¹ |
    | **SLES** | 12 SP3 |
    | **XAMPP pour Windows²** | 2008 R2<br> 2012 R2<br> 2016 |

**= "1.10"

    | **Version i-doit** | 1.10 |
    | --- | --- |
    | **Publication** | 2017-12 |
    | **Serveur Web Apache** | 2.4 |
    | **PHP** | 5.6 <br> 7.0 |
    | **MySQL** | 5.6<br> 5.7 |
    | **MariaDB** |  10.0 <br>10.1 |
    | **Debian GNU/Linux** | 9<br> 8 |
    | **Ubuntu** | 16.04<br> 17.04 |
    | **RHEL** | 7.3¹<br> 7.4¹ |
    | **SLES** | 12 SP2 <br> 12 SP3 |
    | **XAMPP pour Windows²** | 2008 R2<br> 2012 R2<br> 2016 |

**= "1.9"

    | **Version i-doit** | 1.9 |
    | --- | --- |
    | **Publication** | 2017-05 |
    | **Serveur Web Apache** | 2.4 |
    | **PHP** | 5.4<br> 5.5<br> 5.6<br> 7.0 |
    | **MySQL** | 5.6<br> 5.7 |
    | **MariaDB** |  10.0 <br>10.1 |
    | **Debian GNU/Linux** | 9<br> 8 |
    | **Ubuntu** | 16.04 LTS<br> 16.10<br> 17.04 |
    | **RHEL** | 7.3¹ |
    | **SLES** | 12<br> 12 SP2 |
    | **XAMPP pour Windows²** | 2008<br> 2012 |

**= "1.8"

    | **Version i-doit** | 1.8 |
    | --- | --- |
    | **Publication** | 2016-10 |
    | **Serveur Web Apache** | 2.4 |
    | **PHP** | 5.4<br> 5.5<br> 5.6 |
    | **MySQL** | 5.6<br> 5.7 |
    | **MariaDB** |  10.0 <br>10.1 |
    | **Debian GNU/Linux** | 9<br> 8 |
    | **Ubuntu** | 14.04 |
    | **RHEL** | 7.3¹ |
    | **SLES** | 12<br> 12 SP2 |
    | **XAMPP pour Windows²** | 2008<br> 2012 |

**= "1.7"

    | **Version i-doit** | 1.7 |
    | --- | --- |
    | **Publication** | 2016-03 |
    | **Serveur Web Apache** | 2.2<br> 2.4 |
    | **PHP** | 5.4<br> 5.5<br> 5.6 |
    | **MySQL** | 5.6<br> 5.7 |
    | **MariaDB** |  10.0 <br>10.1 |
    | **Debian GNU/Linux** | 8 |
    | **Ubuntu** | 15.10 LTS<br> 14.04 |
    | **RHEL** | 7.2¹ |
    | **SLES** | 12 |
    | **XAMPP pour Windows²** | 2008<br> 2012 |

| Légende |
| --- |
| ¹ Avec l'aide de dépôts tiers |
| ² Non recommandé pour une utilisation en production |
