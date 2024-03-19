<!-- TRANSLATED by md-translate -->
# Controller

# Contrôleur

i-doit verfügt über ein Kommandozeilen-Werkzeug namens Controller.

i-doit dispose d'un outil en ligne de commande appelé Controller.

!!! warning "Deprecated"

! !! avertissement "Deprecated

```
Der Controller ist seit Version 1.10 als veraltet markiert und wird in einer der nächsten Versionen entfernt werden. Als Alternative gilt die [Console](../cli/console/index.md).
```

## Erste Schritte

## Premiers pas

Der Controller befindet sich im Hauptverzeichnis von i-doit. Wenn Du laut [Installationsanleitung](../../installation/manuelle-installation/setup.md) vorgegangen bist, befindet sich das Hauptverzeichnis bei [Debian](../../installation/manuelle-installation/debian.md)-basierten Betriebssystemen unter **/var/www/html/i-doit/**:

Le contrôleur se trouve dans le répertoire principal d'i-doit. Si tu as suivi les [instructions d'installation](../../installation/manuelle-installation/setup.md), le répertoire principal se trouve sous **/var/www/html/i-doit/** pour les systèmes d'exploitation basés sur [Debian](../../installation/manuelle-installation/debian.md) :

```
$ ll /var/www/html/i-doit/controller
-rwxrwxr-- 1 www-data www-data 314 Jul 7 14:23 /var/www/html/i-doit/controller
```

Um Fehler zu vermeiden, ist es wichtig, den Controller mit dem selben Benutzer aufzurufen, den der Webserver benutzt. Im Beispiel ist es **www-data**. Zudem ist es wichtig, erst in das Hauptverzeichnis von i-doit zu wechseln, bevor man den den Controller aufruft:

Pour éviter les erreurs, il est important d'appeler le contrôleur avec le même utilisateur que celui utilisé par le serveur web. Dans l'exemple, il s'agit de **www-data**. De plus, il est important de passer dans le répertoire principal d'i-doit avant d'appeler le contrôleur :

```shell
$ cd /var/www/html/i-doit/
    $ sudo -u www-data ./controller

    Usage: controller.php [OPTION] [PARAMETERS]
    e.g.: controller.php -v -m workflow
    Options:
        -m HANDLER Load handler HANDLER module.
        -u username i-doit username
        -p password i-doit password
        -i tenant ID of tenant to connect to (use './tenants ls' for a list)
        -h This help text
        -v Verbose mode
        -d Displays ALL debug messages
```

```
HANDLER can be one of the following availlable handlers:
addldapdn, archivelog, cleanup_auth, cleanup_objects, csv_import, import, isc_dhcpd, jdisc, jdisc_discovery, ldap, maintenance, nagios, nagios_export, notifications, ocs, regenerate_relations, report, syslog, tenants, updatecheck, workflow
```

Da [Windows](../../installation/manuelle-installation/microsoft-windows-server/index.md)-Betriebsysteme nicht mit dem Bash-Skript vom Controller umgehen können, ist dieser leicht abgewandelt in der Eingabeaufforderung aufzurufen:

Comme les systèmes d'exploitation [Windows](../../installation/installation manuelle/microsoft-windows-server/index.md) ne peuvent pas gérer le script bash du contrôleur, il faut l'appeler dans l'invite de commande en le modifiant légèrement :

```
php.exe controller.php
```

## Mandant und Credentials

## Mandant et Credentials

Um den Controller verwenden zu können, ist eine Authentifizierung gegenüber i-doit notwendig. Hierfür benötigt man Benutzername (**-u**), Passwort (**-p**) und die eindeutige ID des zu verwendenen Mandanten (**-i**).

Pour pouvoir utiliser le contrôleur, il est nécessaire de s'authentifier auprès d'i-doit. Pour cela, il faut un nom d'utilisateur (**-u**), un mot de passe (**-p**) et l'ID unique du mandant à utiliser (**-i**).

!!! check "Der Benutzer "controller""

! !! check "L'utilisateur "controller""

```
Es wird empfohlen, für den Controller einen dedizierten Benutzer in i-doit anzulegen. Soll dieser als lokaler Benutzer konfiguriert werden, erstellt man ihn als Objekt vom Typ **Personen** mit den gewünschten Credentials in der Kategorie **Personen → Login**. Dieser Benutzer sollte Admin-Rechte erhalten. Dies kann durch die Zuordnung zur vordefinierten **Personengruppe** Admin geschehen.
```

Um herauszufinden, welche eindeutige ID ein bestimmter Mandant hat, kann man folgendes Kommando benutzen:

Pour savoir quel est l'identifiant unique d'un mandant donné, on peut utiliser la commande suivante :

```shell
$ sudo -u www-data ./tenants ls
    Mandator-Handler initialized (2015-07-22 10:32:42)
    Availlable Mandators:
    ID: Title (Language) (host:port) [status]
    1 : ACME IT Solutions (localhost:3306) [active]
    2 : Schulz GmbH (localhost:3306) [active]
```

Bei i-doit-Installationen mit nur einem Mandanten lautet die ID in der Regel **1**.

Pour les installations i-doit avec un seul client, l'ID est généralement **1**.

## Handler

## gestionnaire

Der Controller ist in der Lage, verschiedene Aktionen auszuführen. Diese werden wiederum durch Handler repräsentiert. Um einen bestimmten Handler aufzurufen, wird der Parameter **-m** benötigt.

Le contrôleur est en mesure d'exécuter différentes actions. Celles-ci sont à leur tour représentées par des gestionnaires. Pour appeler un gestionnaire spécifique, le paramètre **-m** est nécessaire.

### Liste von Handlern

### Liste de gestionnaires

| Handler | pro-Variante | open-Variante | Add-on | Beschreibung |
| --- | --- | --- | --- | --- |
| **[addldapdn](../../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md)** | ja  | ja  | -   | Synchronisiere aus einem LDAP/AD den Distinguished Name (DN) der Benutzer (siehe Kategorie **LDAP**) |
| **[archivelog](../../grundlagen/logbuch.md)** | ja  | ja  | -   | Logbuch-Einträge archivieren |
| **[check_mk](../network-monitoring/daten-abfragen-mit-livestatus.md)** | ja  | ja  | -   | Ist-Zustand aus dem Network Monitoring ins Logbuch schreiben |
| **[cleanup_auth](../../effizientes-dokumentieren/rechteverwaltung/index.md)** | ja  | ja  | -   | Rechtesystem bereinigen |
| **[cleanup_objects](../../grundlagen/lebens-und-dokumentationszyklus.md)** | ja  | ja  | -   | Objekte bereinigen |
| **[csv_import](../../daten-konsolidieren/csv-datenimport/index.md)** | ja  | -   | -   | Daten aus einer CSV-Datei importieren |
| **[document](../../i-doit-pro-add-ons/documents/index.md)** | -   | -   | **[Documents](../../i-doit-pro-add-ons/documents/index.md)** | Neue Revision eines Dokuments erstellen |
| **import** | ja  | ja  | -   | i-doit XML oder [h-inventory XML](../../daten-konsolidieren/h-inventory.md) importieren |
| **increment_config** | ja  | ja  | -   | auto_increment von MariaDB-/MySQL-Tabellen auf einen positiven Integer-Wert setzen |
| **isc_dhcpd** | ja  | ja  | -   | Konfiguration für ISC DHCPD exportieren |
| **[jdisc](../../daten-konsolidieren/jdisc-discovery.md)** | ja  | ja  | -   | Daten aus JDisc importieren |
| **[jdisc_discovery](../../daten-konsolidieren/jdisc-discovery.md)** | ja  | ja  | -   | Einen Discovery Job bei JDisc auslösen |
| **[ldap](../../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md)** | ja  | ja  | -   | Daten aus einem LDAP-Verzeichnis oder Active Directory (AD) importieren |
| **[maintenance](../../i-doit-pro-add-ons/maintenance.md)** | -   | -   | **[Maintenance](../../i-doit-pro-add-ons/maintenance.md)** | E-Mails bei geplanten Wartungen versenden |
| **[nagios](../network-monitoring/daten-abfragen-mit-livestatus.md)** | ja  | ja  | -   | Ist-Zustand aus dem Network Monitoring ins Logbuch schreiben |
| **[nagios_export](../network-monitoring/nagios.md)** | ja  | ja  | -   | Nagios-Konfiguration exportieren |
| **[notifications](../e-mail.md)** | ja  | ja  | -   | Benachrichtigungen per E-Mail versenden |
| **[ocs](../../i-doit-pro-add-ons/ocs-inventory-ng.md)** | ja  | ja  | -   | Daten aus OCS Inventory NG importieren |
| **[regenerate_relations](../../grundlagen/objekt-beziehungen.md)** | ja  | ja  | -   | Objekt-Beziehungen neu aufbauen |
| **[report](../../auswertungen/report-manager.md)** | ja  | -   | -   | Einen Report als Datei exportieren |
| **[search_index](../../effizientes-dokumentieren/suche.md)** | ja  | ja  | -   | In i-doit suchen oder Suchindex erstellen/erneuern |
| **syslog** | ja  | ja  | -   | Daten aus dem Syslog in das Logbuch von i-doit importieren |
| **[tenants](../cli/controller.md#mandant-und-credentials)** | ja  | ja  | -   | Mandanten auflisten, aktivieren und deaktivieren |
| **[updatecheck](../../wartung-und-betrieb/update-einspielen.md)** | ja  | ja  | -   | Nach Aktualisierungen für i-doit suchen |
| **workflow** | ja  | ja  | -   | Workflow-Benachrichtigungen per E-Mail versenden |

| gestionnaire | variante pro | variante open | add-on | description |
| --- | --- | --- | --- | --- |
| **[addldapdn](../../authentification-et-gestion-des-utilisateurs/index.md)** | oui | oui | - | Synchronise depuis un LDAP/AD le Distinguished Name (DN) des utilisateurs (voir catégorie **LDAP**) |
| **[archivelog](../../bases/logbook.md)** | oui | oui | - | Archiver les entrées du logbook |
| **[check_mk](../network-monitoring/data-request-mit-livestatus.md)** | oui | oui | - | Écrire l'état réel de la surveillance du réseau dans le journal |
| **[cleanup_auth](../../documenter-efficacement/gestion-des-droits/index.md)** | oui | oui | - | Nettoyer le système de droits |
| **[cleanup_objects](../../bases/cycledevieetdocumentation.md)** | oui | oui | - | Nettoyer les objets |
| **[csv_import](../../consolider-données/csv-data-import/index.md)** | oui | - | Importer des données depuis un fichier CSV |
| **[document](../../i-doit-pro-add-ons/documents/index.md)** | - | - | **[Documents](../../i-doit-pro-add-ons/documents/index.md)** | Créer une nouvelle révision d'un document |
| **import** | oui | oui | - | Importer i-doit XML ou [h-inventory XML](../../consolider-données/h-inventory.md) |
| **increment_config** | oui | oui | - | définir l'auto_increment des tables MariaDB/MySQL sur un entier positif |
| **isc_dhcpd** | oui | oui | - | Exporter la configuration pour ISC DHCPD |
| **[jdisc](../../consolidation-données/jdisc-discovery.md)** | oui | oui | - | Importer des données de JDisc |
| **[jdisc_discovery](../../consolidation-données/jdisc-discovery.md)** | oui | oui | - | Déclencher une tâche de découverte sur JDisc |
| **[ldap](../../authentification-et-gestion-des-utilisateurs/répertoire-ldap/index.md)** | oui | oui | - | Importer des données depuis un répertoire LDAP ou Active Directory (AD) |
| **[maintenance](../../i-doit-pro-add-ons/maintenance.md)** | - | - | **[Maintenance](../../i-doit-pro-add-ons/maintenance.md)** | Envoyer des e-mails pour les maintenances programmées |
| **[nagios](../network-monitoring/daten-abfragen-mit-livestatus.md)** | oui | oui | - | écrire l'état réel de la surveillance du réseau dans le journal |
| **[nagios_export](../network-monitoring/nagios.md)** | oui | oui | - | Exporter la configuration de Nagios |
| **[notifications](../e-mail.md)** | oui | oui | - | Envoyer des notifications par e-mail |
| **[ocs](../../i-doit-pro-add-ons/ocs-inventory-ng.md)** | oui | oui | - | Importer des données d'OCS Inventory NG |
| **[regenerate_relations](../../bases/relations-objets.md)** | oui | oui | - | Reconstruire les relations entre les objets |
| **[report](../../exploitations/report-manager.md)** | oui | - | - | Exporter un rapport sous forme de fichier |
| **[search_index](../../documenter-efficacement/recherche.md)** | oui | oui | - | Rechercher dans i-doit ou créer/renouveler un index de recherche |
| **syslog** | oui | oui | - | Importer des données du syslog dans le journal de bord d'i-doit |
| **[tenants](../cli/controller.md#mandant-et-credentials)** | oui | oui | - | Lister, activer et désactiver les mandants |
| **[updatecheck](../../maintenance-et-exploitation/update-einspielen.md)** | oui | oui | - | Rechercher des mises à jour pour i-doit |
| **workflow** | oui | oui | - | Envoyer des notifications de workflow par e-mail |

### Konfiguration von Handlern

### Configuration des gestionnaires

#### Zusätzliche Parameter angeben

#### Indiquer des paramètres supplémentaires

Manche Handler erfordern weitere Optionen, die direkt dem Controller über bestimmte Parameter mitgegeben werden können. Welche dies sind, kannst du den Links bei der Liste von Handlern entnehmen.

Certains gestionnaires nécessitent d'autres options qui peuvent être transmises directement au contrôleur via certains paramètres. Tu trouveras ces options dans les liens de la liste des gestionnaires.

#### Konfigurations-Datei anpassen

#### Adapter le fichier de configuration

Zu manchen Handlern gibt es jeweils eine spezielle Konfigurationsdatei. Beispiele befinden sich unterhalb des Hauptverzeichnis von i-doit in **src/handler/config/examples/**. Damit eine Konfigurationsdatei berücksichtigt wird, muss diese im Verzeichnis **src/handler/config/** verfügbar sein.

Pour certains gestionnaires, il existe un fichier de configuration spécial. Des exemples se trouvent sous le répertoire principal d'i-doit dans **src/handler/config/examples/**. Pour qu'un fichier de configuration soit pris en compte, il doit être disponible dans le répertoire **src/handler/config/**.