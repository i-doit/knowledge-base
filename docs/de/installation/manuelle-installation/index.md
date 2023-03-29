# Manuelle Installation
Dieser Artikel behandelt die manuelle [Installation](../index.md) von i-doit. Die nötigen Software-Pakete werden selbstständig installiert und konfiguriert. Danach wird i-doit heruntergeladen und installiert. Die nötigen Schritte für Cronjobs und Backups obliegen ebenfalls dem Benutzer.

Umfang
------

✔ Software-Pakete installieren
✔ Software-Pakete konfigurieren
✔ i-doit installieren
✔ Cronjobs einrichten
✔ Backups einrichten
✔ Restore einrichten

Voraussetzungen
---------------

*   Die [Systemvoraussetzungen](../systemvoraussetzungen.md) **müssen** erfüllt sein. Ausgenommen davon ist der genannte LAMP Stack (Apache Web Server, MariaDB/MySQL, PHP).
*   Eines der [unterstützten](../systemvoraussetzungen.md) GNU/Linux-Betriebssysteme ist installiert und mit Updates versorgt.
*   Das System kann über eine **Internetanbindung** auf Paket-Repositories zugreifen.
*   Es wird das Apache-Modul (**mod_php**) verwendet. Alternative Methoden (Fast CGI, HHVM) werden nicht betrachtet.
*   Zudem handelt es sich um ein vereinfachtes Setup: **i-doit ist die Hauptapplikation** auf dem System und Apache Webserver, PHP sowie MariaDB/MySQL sind lokal installiert.
*   **Firewall-Regeln und offene Ports:** Bei i-doit handelt es sich um eine typische Web-Applikation. Das heißt, für die Grundfunktionalität wird mittels Web Browser auf i-doit zugegriffen. Dies geschieht in der Regel über Port 80 (unverschlüsselt) bzw. 443 (verschlüsselt). Kommt eine Firewall zum Einsatz, sind diese Ports für eingehende TCP-Verbindungen zu öffnen. Werden zusätzliche Funktionen genutzt ([Benachrichtigungen](../../auswertungen/benachrichtigungen.md), [Schnittstellen zu Dritt-Applikationen](../../automatisierung-und-integration/index.md)), werden ggf. weitere Regeln benötigt. Die Kommunikation zwischen i-doit und MySQL/MariaDB findet lokal statt (Port 3306 TCP), wofür normalerweise keine gesonderten Firewall-Regeln nötig sind.
*   **Sicherheits-Frameworks:** Sollte ein Sicherheits-Framework wie **AppAmor** oder **SELinux** installiert sein, ist darauf zu achten, dieses entsprechend zu konfigurieren.

Nächste Schritte
----------------

Die genauen Schritte sind abhängig vom gewählten Betriebssystem:

*   [Debian GNU/Linux](../manuelle-installation/debian.md) (**empfohlen**)
*   [Red Hat Enterprise Linux (RHEL) oder CentOS](../manuelle-installation/red-hat-enterprise-linux/index.md)
*   [Suse Linux Enterprise Server (SLES)](../manuelle-installation/suse-linux-enterprise-server.md)
*   [Ubuntu Linux](../manuelle-installation/ubuntu-linux/index.md)
*   [Microsoft Windows Server](../manuelle-installation/microsoft-windows-server/index.md)