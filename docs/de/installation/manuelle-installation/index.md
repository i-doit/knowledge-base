---
title: Manuelle Installation
description: "Bei der manuellen Installation konfigurierst du alle Komponenten (Apache, PHP, MariaDB) selbst."
icon:
status:
lang: de
---
# Manuelle Installation

Bei der manuellen Installation konfigurierst du alle Komponenten (Apache, PHP, MariaDB) selbst. Das gibt dir volle Kontrolle über das Setup und ist die richtige Wahl für individuelle Anforderungen oder Windows-Server-Umgebungen.

## Voraussetzungen

-   Die [Systemvoraussetzungen](../systemvoraussetzungen.md) **müssen** erfüllt sein. Ausgenommen davon ist der genannte LAMP Stack (Apache Web Server, MariaDB/MySQL, PHP).<br>
-   Eines der [unterstützten](../systemvoraussetzungen.md) GNU/Linux-Betriebssysteme ist installiert und mit Updates versorgt.<br>
-   Das System kann über eine **Internetanbindung** auf Paket-Repositories zugreifen.<br>
-   Es wird das Apache-Modul (**mod_php**) verwendet. Alternative Methoden (Fast CGI, HHVM) werden nicht betrachtet.<br>
-   Zudem handelt es sich um ein vereinfachtes Setup: **i-doit ist die Hauptapplikation** auf dem System und Apache Webserver, PHP sowie MariaDB/MySQL sind lokal installiert.<br>
-   **Firewall-Regeln und offene Ports:** Bei i-doit handelt es sich um eine typische Web-Applikation. Das heißt, für die Grundfunktionalität wird mittels Web Browser auf i-doit zugegriffen. Dies geschieht in der Regel über Port 80 (unverschlüsselt) bzw. 443 (verschlüsselt). Kommt eine Firewall zum Einsatz, sind diese Ports für eingehende TCP-Verbindungen zu öffnen. Werden zusätzliche Funktionen genutzt ([Benachrichtigungen](../../auswertungen/benachrichtigungen.md), [Schnittstellen zu Dritt-Applikationen](../../automatisierung-und-integration/index.md)), werden ggf. weitere Regeln benötigt. Die Kommunikation zwischen i-doit und MySQL/MariaDB findet lokal statt (Port 3306 TCP), wofür normalerweise keine gesonderten Firewall-Regeln nötig sind.<br>
-   **Sicherheits-Frameworks:** Sollte ein Sicherheits-Framework wie **AppAmor** oder **SELinux** installiert sein, ist darauf zu achten, dieses entsprechend zu konfigurieren.

## Nächste Schritte

Die genauen Schritte sind abhängig vom gewählten Betriebssystem:

-   [Debian GNU/Linux](debian/index.md)
-   [Red Hat Enterprise Linux (RHEL) und kompatible](red-hat-enterprise-linux/index.md)
-   [Rocky Linux](rocky-linux/index.md)
-   [SUSE Linux Enterprise Server (SLES)](suse/index.md)
-   [Ubuntu GNU/Linux](ubuntu/index.md)
-   [Microsoft Windows Server](microsoft-windows-server/index.md)
