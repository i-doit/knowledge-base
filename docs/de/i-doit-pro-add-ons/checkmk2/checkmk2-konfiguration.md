# checkmk 2: Konfiguration

Diese Anwendung ist über Konfigurationsdateien und Laufzeiteinstellungen in hohem Maße anpassbar.

Konfigurationsdateien
---------------------

Beim Start wird versucht, die folgenden Dateien zu laden:

*   /etc/idoitcmk/config.json (system-wide) und
*   ~/.idoitcmk/config.json (user-defined)

Die Konfigurationsdateien sind als JSON (JavaScript Object Notation) formatiert, ein für Menschen und Roboter leicht lesbares Format.

Konfigurationsdatei automatisch erstellen
-----------------------------------------

Verwenden Sie den Befehl init, um Ihre eigene Konfigurationsdatei zu erstellen:

    idoitcmk init

Dieser Befehl stellt Ihnen mehrere Fragen zu allen Einstellungen, die unten aufgeführt sind. Danach wird eine Konfigurationsdatei nach ~/.idoitcmk/config.json geschrieben.

Wenn Sie diesen Befehl mit Super-User-Rechten (root) ausführen, wird stattdessen eine Konfigurationsdatei in /etc/idoitcmk/config.json geschrieben.

Mit diesem Befehl können Sie sogar Ihre Konfigurationseinstellungen aktualisieren. Vorher wird im Hintergrund ein Backup erstellt.

Konfigurationsdateien manuell erstellen
---------------------------------------

Für einen guten Start geben Sie die Beispielkonfiguration aus und bearbeiten sie sie lokal:

    mkdir ~/.idoitcmk
    idoitcmk print-example-config > ~/.idoitcmk/config.json
    editor ~/.idoitcmk/config.json

Verfügbare Einstellungen
------------------------

Die Konfigurationseinstellungen sind nach Themen getrennt:

| Thema | Beschreibung |
| --- | --- |
| i-doit | Konfigurieren Sie den Zugriff auf die JSON-RPC-API von i-doit |
| check_mk | Konfigurieren Sie den Zugriff auf die Web-API von Check\_MK |
| push | Konfigurieren, wie [Daten von i-doit an checkmk übertragen](./checkmk2-wato-konfiguration-auf-basis-von-cmdb-daten-generieren.md) werden sollen |
| pull | Konfigurieren Sie, wie [Daten von checkmk zu i-doit ziehen](./checkmk2-bestandsdaten-in-die-cmdb-importieren.md) |
| objectTypes | Verwendete Objekttypen, identifiziert durch ihre Konstanten |
| objectTitles | Verwendete Objekte, die durch ihren Titel gekennzeichnet sind |
| roles | i-doit-Rollen für Kontaktgruppen, die bei Kontaktzuweisungen verwendet werden |
| blacklistedObjectTypes | Objekttypen, die von allen Befehlen vollständig ignoriert werden |
| log | Protokollstufen und farbige Ausgabe |

Erforderliche Themen sind i-doit und check_mk, andernfalls wird der Informationsaustausch zwischen ihnen nicht funktionieren. Alle anderen Themen können optional geändert werden.

Für fast jede Einstellung gibt es einen vordefinierten Standardwert. Sie können unveränderte Einstellungen aus Ihren lokalen Konfigurationsdateien entfernen.

### Zugriff auf die JSON-RPC-API von i-doit

Konfigurieren Sie den Zugriff auf die JSON-RPC-API von i-doit:

| Key | Type | Erforderlich | Erforderlich | Beschreibung |
| --- | --- | --- | --- | --- |
| i-doit.url | String | ja  | -   | Einstiegspunkt zur JSON-RPC-API von i-doit (Beispiel: http://demo.i-doit.com/src/jsonrpc.php) |
| i-doit.key | String | ja  | -   | API key |
| i-doit.username | String | nein | -   | Benutzername |
| i-doit.password | String | nein | -   | Passwort |
| i-doit.language | String | nein | en | Unterstützte Sprache en oder de |
| i-doit.limitBatchRequests | String | nein | 500 | Wenn Sie Leistungs- oder Speicherprobleme in i-doit haben, verringern Sie diese Einstellung. Der Wert 100 ist ein guter Ausgangspunkt. 0 deaktiviert jede Einschränkung. |
| i-doit.proxy.type | String | nein | -   | HTTP oder SOCKS5 |
| i-doit.proxy.host | String | nein | -   | FQDN oder IP Adresse vom Proxy |
| i-doit.proxy.port | Integer | nein | -   | TCP/IP port |
| i-doit.proxy.username | String | nein | -   | Proxy Benutzername |
| i-doit.proxy.password | String | nein | -   | Proxy Passwort |

### Zugriff zu checkmk's Web API und Livestatus

Konfigurieren Sie den Zugriff auf die Web-API von checkmk:

| Key | Type | Erforderlich | Standard | Beschreibung |
| --- | --- | --- | --- | --- |
| check_mk.webAPI.url | String | ja  | -   | Einstiegspunkt zur Web-API von Check\_MK (Beispiel: http://CheckMK-Server/site-name/check_mk/) |
| check_mk.webAPI.username | String | ja  | automation | Automation Benutzer |
| check_mk.webAPI.secret | String | ja  | -   | Automation secret |
| check_mk.webAPI.effectiveAttributes | Boolean | ja  | true | Abrufen von geerbten Einstellungen aus Regelsätzen, Ordnern usw. |
| check_mk.webAPI.proxy.type | String | nein | -   | HTTP oder SOCKS5 |
| check_mk.webAPI.proxy.host | String | nein | -   | FQDN oder IP Adress vom Proxy |
| check_mk.webAPI.proxy.port | String | nein | -   | TCP/IP port |
| check_mk.webAPI.proxy.username | String | nein | -   | Benutzername |
| check_mk.webAPI.proxy.password | String | nein | -   | Passwort |
| check_mk.livestatus.type | String | nein | tcp | tcp oder socket |
| check_mk.livestatus.title | String | nein | Check_MK | Eindeutiger Name für diese Livestatus-Instanz |
| check_mk.livestatus.host | String | nein | -   | Hostname (type tcp only) |
| check_mk.livestatus.port | Integer | nein | 6557 | TCP/IP port (type tcp only) |
| check_mk.livestatus.path | String | nein | -   | Pfad zum UNIX socket (type socket only) |

Livestatus kann derzeit nicht über TLS verbunden werden.

### Konfiguration der verwendeten Checkmk Version

| Key | Type | Erforderlich | Standard | Beschreibung |
| --- | --- | --- | --- | --- |
| check_mk.version | String | No  | -   | Verwendete Checkmk-Version wird für das Inventory import benötigt Beispiel "2.1" |

### Konfiguration command push

Konfigurieren Sie, wie [Daten von i-doit an checkmk übertragen werden sollen](./checkmk2-wato-konfiguration-auf-basis-von-cmdb-daten-generieren.md):

| Key | Type | Erforderlich | Standard | Beschreibung |
| --- | --- | --- | --- | --- |
| push.activateChanges | Boolean | nein | false | Aktivieren Sie alle Änderungen mit Ausnahme der ausländischen Änderungen |
| push.activateForeignChanges | Boolean | nein | false | Aktivieren Sie alle Änderungen, einschließlich fremder Änderungen; push.activateChanges muss true sein |
| push.autoMatching | String | nein | all | Deaktiviere autoTagging (none), Suchen Sie einfach nach dem ersten Treffer (first) oder versuchen, alle Ausdrücke zu finden (all) |
| push.autoSite | Boolean | nein | false | In einer Umgebung mit mehreren Standorten wird jeder Host von einem Standort überwacht. Mit dem Wert "location" kann ein Standort automatisch über den Pfad des Objekts location identifiziert werden. |
| push.autoTagging | Object | nein | -   | Fügen Sie Host-Tags dynamisch auf der Grundlage von Objektinformationen hinzu, die regulären Ausdrücken entsprechen; siehe Abschnitt "Auto tagging" |
| push.bakeAgents | Boolean | nein | false | Automatisches Backen von Agenten; keine Verteilung von Agenten |
| push.contactGroupIdentifier | String | nein | title | Sammeln von Kontaktgruppen nach ihren Objekttiteln (title) oder nach ihren LDAP-DNs (ldap) |
| push.defaultWATOFolder | String | nein | -   | Hosts in diesen Ordner verschieben, falls nicht festgelegt; leerer Wert bedeutet Hauptordner |
| push.discoverServices | Boolean | nein | false | Suchen Sie nach Diensten auf neuen/geänderten Hosts |
| push.location | Boolean | nein  | true |     |

#### Auto tagging

Beispiel:

    {
        "push": {
            "autoTagging": {
                "title": {
                    "/^00/": {
                        "tag_agent": "cmk-agent",
                        "tag_criticality": "prod"
                    },
                    "/mail/": {
                        "tag_system": "mail"
                    }
                },
                "hostname": {
                    "/^vm/": {
                        "tag_networking": "dmz"
                    }
                },
                "fqdn": {
                    "/test\\.local$/": {
                        "tag_criticality": "test"
                    }
                }
            },
            "autoMatching": "all"
        }
    }

Versucht, alle Ausdrücke zu finden:
*   Objekte, deren Titel (title) mit 00 beginnt, werden von einem Agenten geprüft und als produktiv eingestuft.
*   Objekte, deren Titel (title) mit mail in der Mitte beginnt, werden als Mail-Hosts gekennzeichnet.
*   Objekte, deren Hostnamen ( hostname) mit vm beginnen, werden der DMZ zugewiesen.
*   Objekte, deren voll qualifizierte Domänennamen (fqdn) mit test.local enden, werden als test gekennzeichnet.

### Konfigurieration command pull

Konfigurieren Sie, wie [Daten von Check\_MK zu i-doit ziehen](./checkmk2-bestandsdaten-in-die-cmdb-importieren.md):

| Key | Type | Erforderlich | Standard | Beschreibung |
| --- | --- | --- | --- | --- |
| pull.createObjects | Boolean | nein | true | Unbekannte Hosts werden als neue Objekte erstellt |
| pull.createUnknownSoftwareApplications | Boolean | nein | true | Unbekannte Anwendungen werden als neue Objekte erstellt |
| pull.objectType | String | nein | C__OBJTYPE__SERVER | Setzen der Objekttypkonstante für neue Objekte |
| pull.updateObjects | String | nein | overwrite or merge | Wenn der Host in i-doit gefunden wird, werden bestehende Kategorieeinträge "überschrieben", "zusammengelegt" oder "ignoriert" (nur Listenkategorien) |
| pull.idenfifier | Array | nein | ["title", "hostname", "fqdn", "hostaddress", "alias", "user-defined", "serial"] | Suchen Sie nach diesen Identifiers, um Hosts mit Objekten abzugleichen; siehe Abschnitt "Identifiers". |
| pull.minMatch | Integer | nein | 2 | Objekt und Host müssen sich eine Mindestmenge an identifiers |
| pull.attributes | Array | nein | _See section "Attributes"_ | Liste der Kategorie Konstanten, die geändert werden sollen; siehe Abschnitt "Attribute". |
| pull.enableExport | Boolean | nein | true | Host-Konfiguration in Kategorie schreiben Check_MK Host |
| pull.enableLivestatus | Boolean | nein | true | Host-Konfiguration in Kategorie schreiben Monitoring |
| pull.ports | String | nein | physical | Hinzufügen/Aktualisieren physical oder logical Netzwerk ports |

#### Identifiers

In i-doit gibt es mehrere Attribute, die sich als eindeutige Bezeichner eignen, um sie mit Hosts in checkmk abzugleichen:

| Identifier | Category | Beschreibung |
| --- | --- | --- |
| title | General | Objekt Bezeichnung |
| hostname | Host address | Hostname |
| fqdn | Host address | Fully qualified domain name |
| hostaddress | Host address | Primäre IPv4 oder IPv6 adresse |
| alias | Check_MK Host | Host alias |
| user-defined | Check_MK Host | Benutzerdefinierter Wert für das Attribut hostname |
| serial | Modell | Seriennummer in der Modell Kategorie |

Beispiel:

    {
        "pull": {
            "identifier": [
                "title",
                "hostname",
                "fqdn",
                "hostaddress",
                "alias",
                "user-defined"
            ],
            "minMatch": 2
        }
    }

#### Attribute

In i-doit ist jedes Objektattribut an eine sogenannte Kategorie gebunden. Diese Kategorien können geändert werden:

| Category | Konstante | Standard | Beschreibung |
| --- | --- | --- | --- |
| Access | C__CATG__ACCESS | true | Link zum host in checkmk |
| Application | C__CATG__APPLICATION | false | Softwarezuweisungen |
| Contact assignment | C__CATG__CONTACT | true | Kontaktgruppen mit Rolle roles.monitoring |
| CPU | C__CATG__CPU | true | CPU Kerne |
| Drive | C__CATG__DRIVE | true | Mount points |
| Graphic card | C__CATG__GRAPHIC | true | (Virtual) Grafikarte |
| Host address | C__CATG__IP | true | IP Adressen und hostname |
| Memory | C__CATG__MEMORY | true | Gesamter Speicher |
| Model | C__CATG__MODEL | true | Hersteller, Modellbezeichnung und Seriennummer |
| Operating system | C__CATG__OPERATING_SYSTEM | true | Betriebssystem |
| Network > logical Ports | C__CATG__NETWORK_LOG_PORT | true | Aktive logische Ports mit MAC-Adresse |
| Network > Port | C__CATG__NETWORK_PORT | true | Aktive physische Ports mit MAC-Adresse |

Beispiel:

    {
        "pull": {
            "attributes": {
                "C__CATG__ACCESS": true,
                "C__CATG__APPLICATION": true,
                "C__CATG__CONTACT": true,
                "C__CATG__CPU": true,
                "C__CATG__DRIVE": true,
                "C__CATG__GRAPHIC": true,
                "C__CATG__IP": true,
                "C__CATG__MEMORY": true,
                "C__CATG__MODEL": true,
                "C__CATG__OPERATING_SYSTEM": true,
                "C__CATG__NETWORK_LOG_PORT": true,
                "C__CATG__NETWORK_PORT": true
            }
        }
    }

### Objekt-typen

Verwendete Objekt-typen gekennzeichnet durch ihre Konstanten:

| Key | Type | Erforderlich | Standard | Beschreibung |
| --- | --- | --- | --- | --- |
| Key | Type | Erforderlich | Standard | Beschreibung |
| --- | --- | --- | --- | --- |
| objectTypes.contactGroup | String | nein | C__OBJTYPE__PERSON_GROUP | Kontakt Gruppen |
| objectTypes.operatingSystem | String | nein | C__OBJTYPE__OPERATING_SYSTEM | Betriebssysteme |
| objectTypes.subnetwork | String | nein | C__OBJTYPE__LAYER3_NET | Teilnetze |
| objectTypes.remoteManagementController | String | nein | C__OBJTYPE__RM_CONTROLLER | Controller für die Fernverwaltung |

### Object titles

Used objects identified by their titles:

| Key | Type | Erforderlich | Standard | Beschreibung |
| --- | --- | --- | --- | --- |
| IPv4 subnetwork | String | nein | Global v4 | Standard Teilnetz für IPv4-Adressen |
| IPv6 subnetwork | String | nein | Global v6 | Standard Teilnetz für IPv6-Adressen |

### Roles

This is a list of i-doit roles for contact groups used in contact assignments:

| Key | Type | Erforderlich | Standard | Beschreibung |
| --- | --- | --- | --- | --- |
| roles.monitoring | String | nein | Monitoring | i-doit Rolle für Kontaktgruppen, die bei Kontaktzuweisungen verwendet werden |

### Ignorierte Objekt-typen

Diese Liste von Objekt-typen wird von Standard vollständig ignoriert:

| Objekt-Typ | Konstante |
| --- | --- |
| Kabeltrasse | C__CMDB__OBJTYPE__CABLE_TRAY |
| Leerrohr | C__CMDB__OBJTYPE__CONDUIT |
| Objekt Gruppe | C__OBJECT_TYPE__GROUP |
| Flugzeug | C__OBJTYPE__AIRCRAFT |
| Anwendung | C__OBJTYPE__APPLICATION |
| Gebäude | C__OBJTYPE__BUILDING |
| Kabel | C__OBJTYPE__CABLE |
| Mobilfunkverträge | C__OBJTYPE__CELL_PHONE_CONTRACT |
| Stadt | C__OBJTYPE__CITY |
| Land | C__OBJTYPE__COUNTRY |
| Datenbankinstanz | C__OBJTYPE__DATABASE_INSTANCE |
| Datenbankschema | C__OBJTYPE__DATABASE_SCHEMA |
| DBMS | C__OBJTYPE__DBMS |
| Notfallplan | C__OBJTYPE__EMERGENCY_PLAN |
| Schrank | C__OBJTYPE__ENCLOSURE |
| Datei | C__OBJTYPE__FILE |
| Generische Vorlage | C__OBJTYPE__GENERIC_TEMPLATE |
| Informationsverbünde | C__OBJTYPE__INFORMATION_DOMAIN |
| Service | C__OBJTYPE__IT_SERVICE |
| Kryptokarte | C__OBJTYPE__KRYPTO_CARD |
| Layer 2 Net | C__OBJTYPE__LAYER2_NET |
| Layer 3-Net | C__OBJTYPE__LAYER3_NET |
| Lizenzen | C__OBJTYPE__LICENCE |
| Generischer Standort | C__OBJTYPE__LOCATION_GENERIC |
| Vertrag | C__OBJTYPE__MAINTENANCE |
| Middleware | C__OBJTYPE__MIDDLEWARE |
| Migrationsobjekte | C__OBJTYPE__MIGRATION_OBJECT |
| Nagios Host-Template | C__OBJTYPE__NAGIOS_HOST_TPL |
| Nagios Service | C__OBJTYPE__NAGIOS_SERVICE |
| Nagios Service-Template | C__OBJTYPE__NAGIOS_SERVICE_TPL |
| Netzbereich | C__OBJTYPE__NET_ZONE |
| Betriebssystem | C__OBJTYPE__OPERATING_SYSTEM |
| Organisation | C__OBJTYPE__ORGANIZATION |
| Parallel relation | C__OBJTYPE__PARALLEL_RELATION |
| Patch Panel | C__OBJTYPE__PATCH_PANEL |
| Personen | C__OBJTYPE__PERSON |
| Personengruppen | C__OBJTYPE__PERSON_GROUP |
| Schrank Segment | C__OBJTYPE__RACK_SEGMENT |
| Beziehung | C__OBJTYPE__RELATION |
| Replikationsobjekt | C__OBJTYPE__REPLICATION |
| Raum | C__OBJTYPE__ROOM |
| SAN Zoning | C__OBJTYPE__SAN_ZONING |
| Systemdienst | C__OBJTYPE__SERVICE |
| SIM-Karte | C__OBJTYPE__SIM_CARD |
| SOA stack | C__OBJTYPE__SOA_STACK |
| Supernetz | C__OBJTYPE__SUPERNET |
| Fahrzeug | C__OBJTYPE__VEHICLE |
| VRRP | C__OBJTYPE__VRRP |
| WAN | C__OBJTYPE__WAN |
| Leitungsnetz | C__OBJTYPE__WIRING_SYSTEM |
| Arbeitsplatz | C__OBJTYPE__WORKSTATION |

Es ist nicht möglich, Objekt-Typen aus dieser Liste zu entfernen (bitte erstellen Sie Ticket, wenn Sie dies trotzdem tun wollen). Aber Sie können diese Liste um andere Objekt-Typen erweitern.

Im nächsten Beispiel werden auch alle Objekte vom Typ Client ignoriert. Um diesen Objekt-Typ zu identifizieren, verwenden Sie seine Konstante anstelle seiner (englischen oder deutschen) Bezeichnung:

    {
        "blacklistedObjectTypes": [
            "C__OBJTYPE__CLIENT"
        ]
    }

### LogLevel

Das CLI-Tool idoitcmk hat verschiedene Log-Ebenen:

| Level | Wert |
| --- | --- |
| Level | Wert |
| --- | --- |
| Fatal | 1 |
| Error | 2 |
| Warning | 4 |
| Notice | 8 |
| Info | 16 |
| Debug | 32 |

Es gibt eine Konfigurationseinstellung log.verbosity, um die Standard-Protokollstufe anzupassen. Dieser Wert wird verwendet, wenn weder die Laufzeitoption -v|--verbose noch -q|--quiet verwendet werden. Der aktuelle Standardwert ist 31. Das bedeutet, dass alle Log-Meldungen außer Debug-Meldungen enthalten sind.

Auf der einen Seite setzt die Laufzeitoption -v|--verbose diese Konfigurationseinstellung temporär auf 63, was alle Loglevel einschließt. Auf der anderen Seite setzt die Laufzeitoption -q|--quiet diese Einstellung temporär auf 3 (nur Fatals und Fehler).

Zusätzliche Konfigurationsdateien
---------------------------------

Optional können Sie eine oder mehrere zusätzliche JSON-formatierte Konfigurationsdateien mit der Option -c oder --config übergeben. Wiederholen Sie die Option für mehr als eine Datei. Zum Beispiel:

    idoitcmk push --config i-doit-testing.json --config check_mk-testing.json

Laufzeit-Einstellungen
----------------------

Sie möchten einige Einstellungen während der Laufzeit ändern? Das können Sie mit den Optionen -s und --setting tun. Trennen Sie verschachtelte Schlüssel mit ., zum Beispiel:

    idoitcmk push --setting "push.activateChanges=true"
    idoitcmk pull -s ['pull.attributes={"C__CATG__ACCESS": true,"C__CATG__APPLICATION": true,"C__CATG__CONTACT": true,"C__CATG__CPU": true,"C__CATG__DRIVE": true,"C__CATG__GRAPHIC": true,"C__CATG__IP": true,"C__CATG__MEMORY": true,"C__CATG__MODEL": true,"C__CATG__OPERATING_SYSTEM": true,"C__CATG__NETWORK_LOG_PORT": true,"C__CATG__NETWORK_PORT": true}']

Option "Wiederholen" für mehr als eine Einstellung.

Reihenfolge der Konfigurationseinstellungen ist wichtig
-------------------------------------------------------

Wie Sie bereits gelesen haben, haben Sie verschiedene Möglichkeiten, Ihre bevorzugten Einstellungen an diese Anwendung zu übergeben. Diese Anwendung folgt dieser Reihenfolge:

1.  Die Standardeinstellungen werden überschrieben durch
2.  Systemweite Einstellungen (/etc/idoitcmk/config.json) werden überschrieben mit
3.  Benutzerdefinierte Einstellungen (~/.idoitcmk/config.json) werden überschrieben mit
4.  Zusätzliche Konfigurationsdateien (Optionen -c FILE oder --config FILE) werden überschrieben mit
5.  Laufzeiteinstellungen (Optionen -s KEY=VALUE oder --setting KEY=VALUE)

Testen Sie Ihre Konfiguration
-----------------------------

Mit dem Befehl configtest können Sie eine detaillierte Überprüfung Ihrer Konfigurationseinstellungen durchführen. Dies ist sehr nützlich, nachdem Sie Ihre Einstellungen erstellt oder geändert haben:

    idoitcmk configtest

Geben Sie Ihre Konfiguration aus
--------------------------------

Wenn Sie eine Reihe von Konfigurationsdateien und Laufzeiteinstellungen haben, ist es manchmal gut zu wissen, was Ihre kompilierten Einstellungen sind:

    idoitcmk print-config

Damit werden Ihre aktuellen Konfigurationseinstellungen JSON-formatiert auf STDOUT ausgegeben.
