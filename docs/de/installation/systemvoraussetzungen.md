# Systemvoraussetzungen

Um den Betrieb aller Funktionalitäten von i-doit zu gewährleisten, existieren für das darunter liegende System Voraussetzungen, die erfüllt sein müssen.

!!! info "Aktualität"
    Die unten genannten Systemvoraussetzungen beziehen sich auf die aktuelle Version von i-doit, in diesem Fall **22**. Zu jedem Major Release von i-doit werden diese Angaben angepasst. Wer die Angaben für ältere Versionen von i-doit benötigt, kann die Änderungshistorie dieser Seite verfolgen.
    
Mindestanforderungen an das System
----------------------------------

Folgende Systemparameter sind Mindestanforderungen, um einen Betrieb von i-doit mit bis zu ca. 10.000 Objekten und bis zu 10 gleichzeitig arbeitenden Benutzern zu gewährleisten.

### Virtuelle Hardware

*   2 vCPUs
    
*   2 GB RAM
    
*   10 GB freier Festplattenspeicher
    

Wir empfehlen den Einsatz einer dedizierten, virtuellen Maschine. Der tatsächlich Hardware-Bedarf richtet sich nach Umfang der [IT-Dokumentation](../glossar.md) und Anzahl gleichzeitiger Benutzer.

### Betriebssystem

*   [Debian GNU/Linux](manuelle-installation/debian.md) 10 "buster", 11 "bullseye"  
    
*   [Ubuntu](manuelle-installation/ubuntu-linux/index.md) 18.04 LTS "bionic", 20.04 LTS "focal fossa"  
    
*   [SUSE Linux Enterprise Server (SLES)](manuelle-installation/suse-linux-enterprise-server.md) 15, 15 SP1, 15 SP2, 15 SP3  
    
*   [Red Hat Enterprise Linux (RHEL)](manuelle-installation/red-hat-enterprise-linux/index.md) 7, 8  
    
*   [Microsoft Windows Server](manuelle-installation/microsoft-windows-server.md) 2016, 2019  
    

Wir empfehlen den Einsatz von [Debian GNU/Linux](manuelle-installation/debian.md) in der 64bit-Architektur (amd64) in Version 11 "bullseye".

### LAMP Stack

*   Apache Webserver 2.4
    
*   MariaDB 10.2, 10.3, 10.4  10.5 (empfohlen) oder MySQL 5.7. _Wir empfehlen jedoch, MariaDB anstelle von MySQL zu verwenden._ _Wenn die Version 10.6 als stabil eingestuft wird planen wir sie in einer späteren Version zu unterstützen._  
    
*   PHP 7.4 und 8.0 (empfohlen). _Im Moment wird PHP Version >= 8.1 nicht unterstützt. Wir planen die Unterstützung in einer späteren Version._  
    
*   PHP Extensions: bcmath, ctype, curl, fileinfo, gd, imagick, json, ldap, mbstring, memcached, mysqli, mysqlnd, pgsql, session, soap, xml, zip  
    

Wir empfehlen den Einsatz von **Apache Webserver 2.4, PHP 8.0 und MariaDB 10.5**.

!!! Success "Referenzkonfiguration"
    
    Folgende Systemparameter bilden eine von uns getestete und empfohlene Referenzkonfiguration, welche eine hohe Performance bei bis zu 500.000 Objekten und einer hohen Anzahl von gleichzeitig arbeitenden Benutzern gewährleistet.
    
    ### Virtuelle Hardware
    
    *   2 vCPUs
    *   8 GB RAM
    *   50 GB freier Festplattenplatz
    
    ### Betriebssystem
    
    [Debian GNU/Linux](manuelle-installation/debian.md) 10 "buster" (64bit)
    
    ### LAMP Stack
    
    *   Apache 2.4.x (Standardpaket)
    *   MariaDB 10.3.x (Standardpaket)
    *   PHP 8.0 (Standardpaket)
            
    
    !!! info "Hinweis"
        
        i-doit ist eine Datenbankanwendung und daher intensiver Festplattennutzer. Ein schneller Festplattenspeicher wird empfohlen, da I/O-Verkehr maßgeblich die Performance bestimmt.
        Die Festplattenbedarf kann sich bei intensiver Nutzung der Datei- oder Bildablage in i-doit erhöhen.
        Der Wert von 50 GB orientiert sich nur an der maximalen Datenbankgröße, die bei voller Nutzung und bei Updates oder ähnlichen Operationen erreicht werden kann.
        
  

Client
------

Auf dem Client wird ein Webbrowser benötigt, um auf die Web GUI von i-doit zugreifen zu können. Es wird die jeweils aktuelle Version und die Vorversion des Webbrowsers unterstützt:

*   Mozilla Firefox (inkl. letzte ESR-Version)
*   Google Chrome/Chromium
*   Microsoft Internet Explorer/Edge (abgeschalteter Kompatibilitätsmodus)
*   Apple Safari

  

Kompatibilitätsmatrix
---------------------

| **i-doit Version** | 1.19, 20, 21 | 1.18 | 1.17 | 1.16 | 1.15 | 1.14 | 1.13 | 1.12 | 1.11 | 1.10 | 1.9 | 1.8 | 1.7 |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| **Release** | 2022-09 | 2022-01 | 2021-07 | 2021-01 | 2020-07 | 2020-01 | 2019-06 | 2018-12 | 2018-06 | 2017-12 | 2017-05 | 2016-10 | 2016-03 |
| **Apache Webserver** | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.2, 2.4 |
| **PHP** | 7.4 (deprecated)  <br>8.0 (recommended) | 7.3 (deprecated)  <br>7.4 (recommended) | 7.3  <br>7.4 (recommended) | 7.2.5 (deprecated)  <br>7.3  <br>7.4 (recommended) | 7.1.8 (deprecated)  <br>7.2  <br>7.3 (recommended)  <br>7.4 | 7.1.8 (deprecated)  <br>7.2  <br>7.3 (recommended)  <br>7.4 | 7.0.8 (deprecated)  <br>7.1  <br>7.2  <br>7.3 (recommended) | 5.6 (deprecated)  <br>7.0  <br>7.1  <br>7.2 (recommended) | 5.6  <br>7.0  <br>7.1 | 5.6  <br>7.0 | 5.4  <br>5.5  <br>5.6  <br>7.0 | 5.4  <br>5.5  <br>5.6 | 5.4  <br>5.5  <br>5.6 |
| **MySQL** | 5.7 | 5.7 | 5.7 | 5.6 (deprecated)  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 |
| **MariaDB** | 10.2  <br>10.3  <br>10.4  <br>10.5 (recommended) | 10.2  <br>10.3  <br>10.4  <br>10.5 (recommended) | 10.2  <br>10.3  <br>10.4  <br>10.5 (recommended) | 10.1 (deprecated)  <br>10.2  <br>10.3  <br>10.4 (recommended)  <br>10.5 | 10.1  <br>10.2  <br>10.3  <br>10.4 (recommended) | 10.1  <br>10.2  <br>10.3  <br>10.4 (recommended) | 10.0 (deprecated)  <br>10.1  <br>10.2  <br>10.3 (recommended) | 10.0  <br>10.1 | 10.0  <br>10.1 | 10.0  <br>10.1 | 10.0  <br>10.1 | 10.0  <br>10.1 | 10.0  <br>10.1 |
| **Debian GNU/Linux** | 11  | 10, 11 | 10  | 10  | 10  | 10  | 8, 9, 10 | 8, 9 | 8, 9 | 8, 9 | 8, 9 | 8   | 8   |
| **Ubuntu** | 18.04, 20.04 | 18.04, 20.04 | 18.04, 20.04 | 18.04, 20.04 | 18.04, 20.04 | 18.04 | 16.04, 18.04 | 16.04, 18.04 | 16.04 | 16.04, 17.04 | 16.04 LTS, 16.10, 17.04 | 14.04¹ | 15.10, 14.04¹ |
| **RHEL** | 7¹, 8 | 7¹, 8 | 7¹, 8 | 7¹, 8 | 7¹, 8 | 7¹, 8 | 7¹, 8 | 7.3¹, 7.4¹, 7.5¹, 7.6¹ | 7.3¹, 7.4¹, 7.5¹ | 7.3¹, 7.4¹ | 7.3¹ | 7.3¹ | 7.2¹ |
| **SLES** | 15 SP1, 15 SP 2, SP 3, SP4? | 15 SP1, 15 SP 2, SP 3 | 15, 15 SP1 | 15, 15 SP1 | 15, 15 SP1 | 15, 15 SP1 | 12 SP3, 12 SP4, 15, 15 SP1 | 12 SP3, 15 | 12 SP3 | 12 SP2, SP3 | 12, 12 SP2 | 12, 12 SP2 | 12  |
| **XAMPP for Windows²** | 2016, 2019 | 2016, 2019 | 2016, 2019 | 2016, 2019 | 2016, 2019 | 2016, 2019 | 2008 R2, 2012 R2, 2016, 2019 | 2008 R2, 2012 R2, 2016, 2019 | 2008 R2, 2012 R2, 2016 | 2008 R2, 2012 R2, 2016 | 2008, 2012 | 2008, 2012 | 2008, 2012 |

| Legend |
| --- |
| ¹ With the help of third-party repositories |
| ² Not recommended for productive use |