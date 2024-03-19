<!-- TRANSLATED by md-translate -->
# Manuelle Installation

# Installation manuelle

Dieser Artikel behandelt die manuelle [Installation](../index.md) von i-doit. Die nötigen Software-Pakete werden selbstständig installiert und konfiguriert. Danach wird i-doit heruntergeladen und installiert. Die nötigen Schritte für Cronjobs und Backups obliegen ebenfalls dem Benutzer.

Cet article traite de l'[installation](../index.md) manuelle d'i-doit. Les paquets logiciels nécessaires sont installés et configurés de manière autonome. Ensuite, i-doit est téléchargé et installé. Les étapes nécessaires pour les cronjobs et les sauvegardes incombent également à l'utilisateur.

## Umfang

## portée

✔ Software-Pakete installieren<br>
✔ Software-Pakete konfigurieren<br>
✔ i-doit installieren<br>
✔ Cronjobs einrichten<br>
✔ Backups einrichten<br>
✔ Restore einrichten

✔ Installer les progiciels<br>.
✔ Configurer les paquets logiciels<br>
✔ Installer i-doit<br>
✔ Configurer les cronjobs<br>
✔ Configurer les sauvegardes<br>
✔ Configurer la restauration

## Voraussetzungen

## conditions préalables

* Die [Systemvoraussetzungen](../systemvoraussetzungen.md) **müssen** erfüllt sein. Ausgenommen davon ist der genannte LAMP Stack (Apache Web Server, MariaDB/MySQL, PHP).<br>
* Eines der [unterstützten](../systemvoraussetzungen.md) GNU/Linux-Betriebssysteme ist installiert und mit Updates versorgt.<br>
* Das System kann über eine **Internetanbindung** auf Paket-Repositories zugreifen.<br>
* Es wird das Apache-Modul (**mod_php**) verwendet. Alternative Methoden (Fast CGI, HHVM) werden nicht betrachtet.<br>
* Zudem handelt es sich um ein vereinfachtes Setup: **i-doit ist die Hauptapplikation** auf dem System und Apache Webserver, PHP sowie MariaDB/MySQL sind lokal installiert.<br>
* **Firewall-Regeln und offene Ports:** Bei i-doit handelt es sich um eine typische Web-Applikation. Das heißt, für die Grundfunktionalität wird mittels Web Browser auf i-doit zugegriffen. Dies geschieht in der Regel über Port 80 (unverschlüsselt) bzw. 443 (verschlüsselt). Kommt eine Firewall zum Einsatz, sind diese Ports für eingehende TCP-Verbindungen zu öffnen. Werden zusätzliche Funktionen genutzt ([Benachrichtigungen](../../auswertungen/benachrichtigungen.md), [Schnittstellen zu Dritt-Applikationen](../../automatisierung-und-integration/index.md)), werden ggf. weitere Regeln benötigt. Die Kommunikation zwischen i-doit und MySQL/MariaDB findet lokal statt (Port 3306 TCP), wofür normalerweise keine gesonderten Firewall-Regeln nötig sind.<br>
* **Sicherheits-Frameworks:** Sollte ein Sicherheits-Framework wie **AppAmor** oder **SELinux** installiert sein, ist darauf zu achten, dieses entsprechend zu konfigurieren.

* La [configuration requise](../systemvoraussetzung.md) **doit être remplie**. La pile LAMP mentionnée (Apache Web Server, MariaDB/MySQL, PHP) en est exclue.<br>
* Un des systèmes d'exploitation GNU/Linux [supportés](../systemrequis.md) est installé et mis à jour.<br>
* Le système peut accéder aux dépôts de paquets via une **connexion Internet**.<br>
* Le module Apache (**mod_php**) est utilisé. Les méthodes alternatives (Fast CGI, HHVM) ne sont pas considérées.<br>
* En outre, il s'agit d'une configuration simplifiée : **i-doit est l'application principale** sur le système et le serveur web Apache, PHP ainsi que MariaDB/MySQL sont installés localement.<br>
* **Règles de pare-feu et ports ouverts:** i-doit est une application web typique. Cela signifie que pour les fonctionnalités de base, on accède à i-doit au moyen d'un navigateur Web. En règle générale, cela se fait via le port 80 (non crypté) ou 443 (crypté). Si un pare-feu est utilisé, ces ports doivent être ouverts pour les connexions TCP entrantes. Si des fonctions supplémentaires sont utilisées ([notifications](../../évaluations/notifications.md), [interfaces vers des applications tierces](../../automatisation-et-intégration/index.md)), d'autres règles peuvent être nécessaires. La communication entre i-doit et MySQL/MariaDB se fait localement (port 3306 TCP), ce qui ne nécessite normalement pas de règles de pare-feu particulières.<br>
* **Frameworks de sécurité:** Si un framework de sécurité comme **AppAmor** ou **SELinux** est installé, il faut veiller à le configurer en conséquence.

## Nächste Schritte

## Prochaines étapes

Die genauen Schritte sind abhängig vom gewählten Betriebssystem:

Les étapes exactes dépendent du système d'exploitation choisi :

* [Debian GNU/Linux](../manuelle-installation/debian.md)
* [Red Hat Enterprise Linux (RHEL) oder CentOS](../manuelle-installation/red-hat-enterprise-linux/index.md)
* [Suse Linux Enterprise Server (SLES)](../manuelle-installation/suse-linux-enterprise-server.md)
* [Ubuntu Linux](../manuelle-installation/ubuntu-linux/index.md)
* [Microsoft Windows Server](../manuelle-installation/microsoft-windows-server/index.md)

* [Debian GNU/Linux](../installation-manuelle/debian.md)
* [Red Hat Enterprise Linux (RHEL) ou CentOS](../installation-manuelle/red-hat-enterprise-linux/index.md)
* [Suse Linux Enterprise Server (SLES)](../installation-manuelle/suse-linux-enterprise-server.md)
* [Ubuntu Linux](../installation-manuelle/ubuntu-linux/index.md)
* [Microsoft Windows Server](../installation-manuelle/microsoft-windows-server/index.md)
