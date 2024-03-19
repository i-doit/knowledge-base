<!-- TRANSLATED by md-translate -->
# checkmk 2: Konfiguration

# checkmk 2 : Configuration

Diese Anwendung ist über Konfigurationsdateien und Laufzeiteinstellungen in hohem Maße anpassbar.

Cette application est hautement personnalisable via des fichiers de configuration et des paramètres d'exécution.

## Konfigurationsdateien

## Fichiers de configuration

Beim Start wird versucht, die folgenden Dateien zu laden:

Au démarrage, le système tente de charger les fichiers suivants :

* /etc/idoitcmk/config.json (system-wide) und
* ~/.idoitcmk/config.json (user-defined)

* /etc/idoitcmk/config.json (système-wide) et
* ~/.idoitcmk/config.json (défini par l'utilisateur)

Die Konfigurationsdateien sind als JSON (JavaScript Object Notation) formatiert, ein für Menschen und Roboter leicht lesbares Format.

Les fichiers de configuration sont formatés en JSON (JavaScript Object Notation), un format facilement lisible par les humains et les robots.

## Konfigurationsdatei automatisch erstellen

## Créer automatiquement un fichier de configuration

Verwenden Sie den Befehl init, um Ihre eigene Konfigurationsdatei zu erstellen:

Utilisez la commande init pour créer votre propre fichier de configuration :

```
idoitcmk init
```

Dieser Befehl stellt Ihnen mehrere Fragen zu allen Einstellungen, die unten aufgeführt sind. Danach wird eine Konfigurationsdatei nach ~/.idoitcmk/config.json geschrieben.

Cette commande pose plusieurs questions sur tous les paramètres énumérés ci-dessous. Ensuite, un fichier de configuration est écrit dans ~/.idoitcmk/config.json.

Wenn Sie diesen Befehl mit Super-User-Rechten (root) ausführen, wird stattdessen eine Konfigurationsdatei in /etc/idoitcmk/config.json geschrieben.

Si vous exécutez cette commande avec les droits de super-utilisateur (root), un fichier de configuration sera écrit à la place dans /etc/idoitcmk/config.json.

Mit diesem Befehl können Sie sogar Ihre Konfigurationseinstellungen aktualisieren. Vorher wird im Hintergrund ein Backup erstellt.

Cette commande permet même de mettre à jour les paramètres de configuration. Auparavant, une sauvegarde est effectuée en arrière-plan.

## Konfigurationsdateien manuell erstellen

## Créer manuellement des fichiers de configuration

Für einen guten Start geben Sie die Beispielkonfiguration aus und bearbeiten sie sie lokal:

Pour bien démarrer, sortez l'exemple de configuration et modifiez-le en local :

```
mkdir ~/.idoitcmk
idoitcmk print-example-config > ~/.idoitcmk/config.json
editor ~/.idoitcmk/config.json
```

## Verfügbare Einstellungen

## Paramètres disponibles

Die Konfigurationseinstellungen sind nach Themen getrennt:

Les paramètres de configuration sont séparés par thème :

| Thema | Beschreibung |
| --- | --- |
| i-doit | Konfigurieren Sie den Zugriff auf die JSON-RPC-API von i-doit |
| check_mk | Konfigurieren Sie den Zugriff auf die Web-API von Check_MK |
| push | Konfigurieren, wie [Daten von i-doit an checkmk übertragen](./checkmk2-wato-konfiguration-auf-basis-von-cmdb-daten-generieren.md) werden sollen |
| pull | Konfigurieren Sie, wie [Daten von checkmk zu i-doit ziehen](./checkmk2-bestandsdaten-in-die-cmdb-importieren.md) |
| objectTypes | Verwendete Objekttypen, identifiziert durch ihre Konstanten |
| objectTitles | Verwendete Objekte, die durch ihren Titel gekennzeichnet sind |
| roles | i-doit-Rollen für Kontaktgruppen, die bei Kontaktzuweisungen verwendet werden |
| blacklistedObjectTypes | Objekttypen, die von allen Befehlen vollständig ignoriert werden |
| log | Protokollstufen und farbige Ausgabe |

| thème | description |
| --- | --- |
| i-doit | Configurer l'accès à l'API JSON-RPC d'i-doit |
| check_mk | Configurer l'accès à l'API Web de Check_MK |
| push | Configurer comment [transférer les données d'i-doit vers checkmk](./checkmk2-wato-configuration-sur-base-de-cmdb-génération-de-données.md) |
| pull | Configurer comment [tirer des données de checkmk vers i-doit](./checkmk2-données-stock-importées-dans-le-cmdb.md) |
| objectTypes | Types d'objets utilisés, identifiés par leurs constantes |
| objectTitles | Objets utilisés, identifiés par leur titre |
| roles | Rôles i-doit pour les groupes de contacts, utilisés lors des attributions de contacts |
| blacklistedObjectTypes | Types d'objets complètement ignorés par toutes les commandes |
| log | niveaux de protocole et sortie en couleur |

Erforderliche Themen sind i-doit und check_mk, andernfalls wird der Informationsaustausch zwischen ihnen nicht funktionieren. Alle anderen Themen können optional geändert werden.

Les thèmes obligatoires sont i-doit et check_mk, sinon l'échange d'informations entre eux ne fonctionnera pas. Tous les autres thèmes peuvent être modifiés de manière optionnelle.

Für fast jede Einstellung gibt es einen vordefinierten Standardwert. Sie können unveränderte Einstellungen aus Ihren lokalen Konfigurationsdateien entfernen.

Il existe une valeur par défaut prédéfinie pour presque chaque paramètre. Vous pouvez supprimer les paramètres non modifiés de vos fichiers de configuration locaux.

### Zugriff auf die JSON-RPC-API von i-doit

### Accès à l'API JSON-RPC d'i-doit

Konfigurieren Sie den Zugriff auf die JSON-RPC-API von i-doit:

Configurer l'accès à l'API JSON-RPC d'i-doit :

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

| Key | Type | Requis | Requis | Description |
| --- | --- | --- | --- | --- |
| i-doit.url | Chaîne | oui | - | Point d'entrée vers l'API JSON-RPC d'i-doit (exemple : http://demo.i-doit.com/src/jsonrpc.php) |
| i-doit.key | Chaîne | oui | - | API key |
| i-doit.username | Chaîne | non | - | Nom d'utilisateur |
| i-doit.password | Chaîne | non | - | Mot de passe |
| i-doit.language | Chaîne | non | en | Langue supportée en ou de |
| i-doit.limitBatchRequests | String | non | 500 | Si vous avez des problèmes de performance ou de mémoire dans i-doit, réduisez ce paramètre. La valeur 100 est un bon point de départ. 0 désactive toute limitation. |
| i-doit.proxy.type | Chaîne | non | - | HTTP ou SOCKS5 |
| i-doit.proxy.host | Chaîne | non | - | FQDN ou adresse IP du proxy |
| i-doit.proxy.port | Entier | non | - | TCP/IP port |
| i-doit.proxy.username | Chaîne | non | - | Nom d'utilisateur du proxy |
| i-doit.proxy.password | Chaîne | non | - | Mot de passe proxy |

### Zugriff zu checkmk's Web API und Livestatus

### Accès à l'API web de checkmk et au statut en direct

Konfigurieren Sie den Zugriff auf die Web-API von checkmk:

Configurer l'accès à l'API Web de checkmk :

| Key | Type | Erforderlich | Standard | Beschreibung |
| --- | --- | --- | --- | --- |
| check_mk.webAPI.url | String | ja  | -   | Einstiegspunkt zur Web-API von Check_MK (Beispiel: http://CheckMK-Server/site-name/check_mk/) |
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

| Key | Type | Requis | Standard | Description |
| --- | --- | --- | --- | --- |
| check_mk.webAPI.url | Chaîne | oui | - | Point d'accès à l'API Web de Check_MK (exemple : http://CheckMK-Server/site-name/check_mk/) |
| check_mk.webAPI.username | Chaîne | oui | automation | Automation Utilisateur |
| check_mk.webAPI.secret | Chaîne | oui | - | Automation secret |
| check_mk.webAPI.effectiveAttributes | Booléen | oui | true | Récupération de paramètres hérités de jeux de règles, de dossiers, etc. |
| check_mk.webAPI.proxy.type | Chaîne | non | - | HTTP ou SOCKS5 |
| check_mk.webAPI.proxy.host | Chaîne | non | - | FQDN ou adresse IP du proxy |
| check_mk.webAPI.proxy.port | Chaîne | non | - | Port TCP/IP |
| check_mk.webAPI.proxy.username | Chaîne | non | - | Nom d'utilisateur |
| check_mk.webAPI.proxy.password | Chaîne | non | - | Mot de passe |
| check_mk.livestatus.type | Chaîne | non | tcp | tcp ou socket |
| check_mk.livestatus.title | Chaîne | non | Check_MK | Nom unique pour cette instance de livestatus |
| check_mk.livestatus.host | Chaîne | non | - | Nom d'hôte (type tcp seulement) |
| check_mk.livestatus.port | Entier | non | 6557 | Port TCP/IP (type tcp seulement) |
| check_mk.livestatus.path | Chaîne | non | - | Chemin d'accès au socket UNIX (type socket only) |

Livestatus kann derzeit nicht über TLS verbunden werden.

Livestatus ne peut actuellement pas être connecté via TLS.

### Konfiguration der verwendeten Checkmk Version

### Configuration de la version du Checkmk utilisée

| Key | Type | Erforderlich | Standard | Beschreibung |
| --- | --- | --- | --- | --- |
| check_mk.version | String | No  | -   | Verwendete Checkmk-Version wird für das Inventory import benötigt Beispiel "2.1" |

| Key | Type | Requis | Standard | Description |
| --- | --- | --- | --- | --- |
| check_mk.version | Chaîne | No | - | La version du Checkmk utilisée est nécessaire pour l'importation de l'inventaire Exemple "2.1" |

### Konfiguration command push

### Configuration commande push

Konfigurieren Sie, wie [Daten von i-doit an checkmk übertragen werden sollen](./checkmk2-wato-konfiguration-auf-basis-von-cmdb-daten-generieren.md):

Configurer comment [transférer les données d'i-doit vers checkmk](./checkmk2-wato-configuration-sur-base-de-cmdb-générer-données.md) :

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

| Key | Type | Requis | Standard | Description |
| --- | --- | --- | --- | --- |
| push.activateChanges | Booléen | non | false | Activer tous les changements sauf les changements étrangers |
| push.activateForeignChanges | Booléen | non | false | Activer toutes les modifications, y compris les modifications étrangères ; push.activateChanges doit être true |
| push.autoMatching | String | non | all | Désactiver l'autoTagging (none), rechercher simplement la première occurrence (first) ou essayer de trouver toutes les expressions (all) |
| push.autoSite | Boolean | non | false | Dans un environnement multi-sites, chaque hôte est surveillé par un site. Avec la valeur "location", un site peut être identifié automatiquement par le chemin de l'objet location. |
| push.autoTagging | Object | non | - | Ajoutez dynamiquement des balises d'hôte en fonction d'informations sur l'objet qui correspondent à des expressions régulières ; voir la section "Auto tagging" |
| push.bakeAgents | Booléen | non | false | Backing automatique des agents ; pas de distribution d'agents |
| push.contactGroupIdentifier | Chaîne | non | title | Collecte des groupes de contacts en fonction de leurs titres d'objets (title) ou de leurs DN LDAP (ldap) |
| push.defaultWATOFolder | Chaîne | non | - | Déplacer les hôtes vers ce dossier s'il n'est pas défini ; une valeur vide signifie dossier principal |
| push.discoverServices | Booléen | non | false | Rechercher des services sur des hôtes nouveaux/modifiés |
| push.location | Booléen | non | true | |

#### Auto tagging

#### Auto tagging

Beispiel:

exemple :

```
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
```

Versucht, alle Ausdrücke zu finden:

Essayez de trouver toutes les expressions :

* Objekte, deren Titel (title) mit 00 beginnt, werden von einem Agenten geprüft und als produktiv eingestuft.
* Objekte, deren Titel (title) mit mail in der Mitte beginnt, werden als Mail-Hosts gekennzeichnet.
* Objekte, deren Hostnamen ( hostname) mit vm beginnen, werden der DMZ zugewiesen.
* Objekte, deren voll qualifizierte Domänennamen (fqdn) mit test.local enden, werden als test gekennzeichnet.

* Les objets dont le titre (title) commence par 00 sont vérifiés par un agent et classés comme productifs.
* Les objets dont le titre (title) commence par mail au milieu sont marqués comme hôtes mail.
* Les objets dont le nom d'hôte ( hostname) commence par vm sont attribués à la DMZ.
* Les objets dont le nom de domaine pleinement qualifié (fqdn) se termine par test.local sont marqués comme test.

### Konfigurieration command pull

### Configuration de la commande pull

Konfigurieren Sie, wie [Daten von Check_MK zu i-doit ziehen](./checkmk2-bestandsdaten-in-die-cmdb-importieren.md):

Configurer comment [tirer les données de Check_MK vers i-doit](./checkmk2-bestandsdaten-in-die-cmdb-importtieren.md) :

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

| Key | Type | Requis | Standard | Description |
| --- | --- | --- | --- | --- |
| pull.createObjects | Booléen | non | true | Les hôtes inconnus sont créés en tant que nouveaux objets |
| pull.createUnknownSoftwareApplications | Booléen | non | true | Les applications inconnues sont créées comme nouveaux objets |
| pull.objectType | Chaîne | non | C__OBJTYPE__SERVER | Définition de la constante de type d'objet pour les nouveaux objets |
| pull.updateObjects | Chaîne | non | overwrite or merge | Lorsque l'hôte est trouvé dans i-doit, les entrées de catégories existantes sont "écrasées", "fusionnées" ou "ignorées" (catégories de listes uniquement) |
| pull.idenfifier | tableau | non | ["title", "hostname", "fqdn", "hostaddress", "alias", "user-defined", "serial"] | Rechercher ces identifiants pour faire correspondre des hôtes à des objets ; voir la section "Identifiants". |
| pull.minMatch | Entier | non | 2 | L'objet et l'hôte doivent correspondre à un minimum d'identifiants |
| pull.attributs | tableau | non | _See section "Attributs"_ | Liste des constantes de catégorie à modifier ; voir section "Attributs". |
| pull.enableExport | Booléen | non | true | Écrire la configuration de l'hôte dans la catégorie Check_MK Host |
| pull.enableLivestatus | Booléen | non | true | écrire la configuration de l'hôte dans la catégorie Monitoring |
| pull.ports | Chaîne | non | physique | Ajouter/Mettre à jour les ports réseau physiques ou logiques |

#### Identifiers

#### Identifiants

In i-doit gibt es mehrere Attribute, die sich als eindeutige Bezeichner eignen, um sie mit Hosts in checkmk abzugleichen:

Dans i-doit, il existe plusieurs attributs qui peuvent être utilisés comme identificateurs uniques afin de les faire correspondre aux hôtes dans checkmk :

| Identifier | Category | Beschreibung |
| --- | --- | --- |
| title | General | Objekt Bezeichnung |
| hostname | Host address | Hostname |
| fqdn | Host address | Fully qualified domain name |
| hostaddress | Host address | Primäre IPv4 oder IPv6 adresse |
| alias | Check_MK Host | Host alias |
| user-defined | Check_MK Host | Benutzerdefinierter Wert für das Attribut hostname |
| serial | Modell | Seriennummer in der Modell Kategorie |

| Identifiant | Catégorie | Description |
| --- | --- | --- |
| title | General | Désignation de l'objet |
| hostname | Host address | nom d'hôte |
| fqdn | Host address | Nom de domaine pleinement qualifié |
| hostaddress | Host address | Adresse IPv4 ou IPv6 primaire |
| alias | Check_MK hôte | alias hôte |
| user-defined | Check_MK Host | Valeur définie par l'utilisateur pour l'attribut hostname |
| serial | modèle | numéro de série dans la catégorie modèle |

Beispiel:

exemple :

```
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
```

#### Attribute

#### Attributs

In i-doit ist jedes Objektattribut an eine sogenannte Kategorie gebunden. Diese Kategorien können geändert werden:

Dans i-doit, chaque attribut d'objet est lié à ce que l'on appelle une catégorie. Ces catégories peuvent être modifiées :

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

| Catégorie | Constante | Standard | Description |
| --- | --- | --- | --- |
| Access | C__CATG__ACCESS | true | Lien vers l'hôte dans checkmk |
| Application | C__CATG__APPLICATION | false | Affectations logicielles |
| Contact assignment | C__CATG__CONTACT | true | Groupes de contacts avec rôle roles.monitoring |
| CPU | C__CATG__CPU | true | Noyaux CPU |
| Drive | C__CATG__DRIVE | true | Mount points |
| Graphic card | C__CATG__GRAPHIC | true | (Virtual) Graphic card |
| Host address | C__CATG__IP | true | Adresses IP et hostname |
| Memory | C__CATG__MEMORY | true | Mémoire totale |
| Model | C__CATG__MODEL | true | Fabricant, nom du modèle et numéro de série |
| Operating system | C__CATG__OPERATING_SYSTEM | true | Système d'exploitation |
| Network > logical Ports | C__CATG__NETWORK_LOG_PORT | true | Ports logiques actifs avec adresse MAC |
| Network > Port | C__CATG__NETWORK_PORT | true | Ports physiques actifs avec adresse MAC |

Beispiel:

exemple :

```
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
```

### Objekt-typen

### Types d'objets

Verwendete Objekt-typen gekennzeichnet durch ihre Konstanten:

Les types d'objets utilisés sont identifiés par leurs constantes :

| Key | Type | Erforderlich | Standard | Beschreibung |
| --- | --- | --- | --- | --- |
| Key | Type | Erforderlich | Standard | Beschreibung |
| --- | --- | --- | --- | --- |
| objectTypes.contactGroup | String | nein | C__OBJTYPE__PERSON_GROUP | Kontakt Gruppen |
| objectTypes.operatingSystem | String | nein | C__OBJTYPE__OPERATING_SYSTEM | Betriebssysteme |
| objectTypes.subnetwork | String | nein | C__OBJTYPE__LAYER3_NET | Teilnetze |
| objectTypes.remoteManagementController | String | nein | C__OBJTYPE__RM_CONTROLLER | Controller für die Fernverwaltung |

| Key | Type | Requis | Standard | Description |
| --- | --- | --- | --- | --- |
| Key | Type | Requis | Standard | Description |
| --- | --- | --- | --- | --- |
| objectTypes.contactGroup | Chaîne | non | C__OBJTYPE__PERSON_GROUP | Groupes de contact |
| objectTypes.operatingSystem | Chaîne | non | C__OBJTYPE__OPERATING_SYSTEM | Systèmes d'exploitation |
| objectTypes.subnetwork | Chaîne | non | C__OBJTYPE__LAYER3_NET | Sous-réseaux |
| objectTypes.remoteManagementController | Chaîne | non | C__OBJTYPE__RM_CONTROLLER | Contrôleur de gestion à distance |

### Object titles

### Titres d'objets

Used objects identified by their titles:

Objets utilisés identifiés par leur titre :

| Key | Type | Erforderlich | Standard | Beschreibung |
| --- | --- | --- | --- | --- |
| IPv4 subnetwork | String | nein | Global v4 | Standard Teilnetz für IPv4-Adressen |
| IPv6 subnetwork | String | nein | Global v6 | Standard Teilnetz für IPv6-Adressen |

| Key | Type | Requis | Standard | Description |
| --- | --- | --- | --- | --- |
| IPv4 subnetwork | Chaîne | non | Global v4 | Sous-réseau par défaut pour les adresses IPv4 |
| sous-réseau IPv6 | Chaîne | non | Global v6 | Sous-réseau par défaut pour les adresses IPv6 |

### Roles

### Rôles

This is a list of i-doit roles for contact groups used in contact assignments:

Voici une liste des rôles i-doit pour les groupes de contacts utilisés dans les affectations de contacts :

| Key | Type | Erforderlich | Standard | Beschreibung |
| --- | --- | --- | --- | --- |
| roles.monitoring | String | nein | Monitoring | i-doit Rolle für Kontaktgruppen, die bei Kontaktzuweisungen verwendet werden |

| Key | Type | Requis | Standard | Description |
| --- | --- | --- | --- | --- |
| roles.monitoring | Chaîne | non | Monitoring | Rôle i-doit pour les groupes de contacts utilisés lors des assignations de contacts |

### Ignorierte Objekt-typen

### Types d'objets ignorés

Diese Liste von Objekt-typen wird von Standard vollständig ignoriert:

Cette liste de types d'objets est totalement ignorée par Standard :

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

| Type d'objet | Constante |
| --- | --- |
| chemin de câbles | C__CMDB__OBJTYPE__CABLE_TRAY |
| gaine | C__CMDB__OBJTYPE__CONDUIT |
| groupe d'objets | C__OBJECT_TYPE__GROUP |
| avion | C__OBJTYPE__AIRCRAFT |
| application | C__OBJTYPE__APPLICATION |
| bâtiment | C__OBJTYPE__BUILDING |
| Câble | C__OBJTYPE__CABLE |
| contrats de téléphonie mobile | C__OBJTYPE__CELL_PHONE_CONTRACT |
| ville | C__OBJTYPE__CITY |
| pays | C__OBJTYPE__COUNTRY |
| instance de base de données | C__OBJTYPE__DATABASE_INSTANCE |
| schéma de base de données | C__OBJTYPE__DATABASE_SCHEMA |
| DBMS | C__OBJTYPE__DBMS |
| plan d'urgence | C__OBJTYPE__EMERGENCY_PLAN |
| armoire | C__OBJTYPE__ENCLOSURE |
| fichier | C__OBJTYPE__FILE |
| Modèle générique | C__OBJTYPE__GENERIC_TEMPLATE |
| Réseaux d'information | C__OBJTYPE__INFORMATION_DOMAIN |
| service | C__OBJTYPE__IT_SERVICE |
| carte cryptographique | C__OBJTYPE__KRYPTO_CARD |
| Layer 2 Net | C__OBJTYPE__LAYER2_NET |
| Layer 3 Net | C__OBJTYPE__LAYER3_NET |
| Licences | C__OBJTYPE__LICENCE |
| Site générique | C__OBJTYPE__LOCATION_GENERIC |
| contrat | C__OBJTYPE__MAINTENANCE |
| middleware | C__OBJTYPE__MIDDLEWARE |
| Objets de migration | C__OBJTYPE__MIGRATION_OBJECT |
| Modèle d'hôte Nagios | C__OBJTYPE__NAGIOS_HOST_TPL |
| C__OBJTYPE__NAGIOS_SERVICE | Service Nagios
| Modèle de service Nagios | C__OBJTYPE__NAGIOS_SERVICE_TPL |
| zone de réseau | C__OBJTYPE__NET_ZONE |
| système d'exploitation | C__OBJTYPE__OPERATING_SYSTEM |
| organisation | C__OBJTYPE__ORGANIZATION |
| relation parallèle | C__OBJTYPE__PARALLEL_RELATION |
| Panneau de brassage | C__OBJTYPE__PATCH_PANEL |
| personnes | C__OBJTYPE__PERSON |
| groupes de personnes | C__OBJTYPE__PERSON_GROUP |
| segment d'armoire | C__OBJTYPE__RACK_SEGMENT |
| relation | C__OBJTYPE__RELATION |
| objet de réplication | COBJTYPE__REPLICATION |
| espace | C__OBJTYPE__ROOM |
| SAN Zoning | C__OBJTYPE__SAN_ZONING |
| service système | C__OBJTYPE__SERVICE |
| carte SIM | C__OBJTYPE__SIM_CARD |
| pile SOA | C__OBJTYPE__SOA_STACK |
| super réseau | C__OBJTYPE__SUPERNET |
| véhicule | C__OBJTYPE__VEHICLE |
| VRRP | C__OBJTYPE__VRRP |
| WAN | C__OBJTYPE__WAN |
| réseau de lignes | C__OBJTYPE__WIRING_SYSTEM |
| poste de travail | C__OBJTYPE__WORKSTATION |

Es ist nicht möglich, Objekt-Typen aus dieser Liste zu entfernen (bitte erstellen Sie Ticket, wenn Sie dies trotzdem tun wollen). Aber Sie können diese Liste um andere Objekt-Typen erweitern.

Il n'est pas possible de supprimer des types d'objets de cette liste (veuillez créer des tickets si vous voulez quand même le faire). Mais vous pouvez ajouter d'autres types d'objets à cette liste.

Im nächsten Beispiel werden auch alle Objekte vom Typ Client ignoriert. Um diesen Objekt-Typ zu identifizieren, verwenden Sie seine Konstante anstelle seiner (englischen oder deutschen) Bezeichnung:

Dans l'exemple suivant, tous les objets de type client sont également ignorés. Pour identifier ce type d'objet, utilisez sa constante au lieu de son nom (anglais ou allemand) :

```
{
    "blacklistedObjectTypes": [
        "C__OBJTYPE__CLIENT"
    ]
}
```

### LogLevel

### LogLevel

Das CLI-Tool idoitcmk hat verschiedene Log-Ebenen:

L'outil CLI idoitcmk dispose de différents niveaux de log :

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

| niveau | valeur |
| --- | --- |
| niveau | valeur |
| --- | --- |
| Fatal | 1 |
| Erreur | 2 |
| Warning | 4 |
| Notice | 8 |
| Info | 16 |
| Debug | 32 |

Es gibt eine Konfigurationseinstellung log.verbosity, um die Standard-Protokollstufe anzupassen. Dieser Wert wird verwendet, wenn weder die Laufzeitoption -v|--verbose noch -q|--quiet verwendet werden. Der aktuelle Standardwert ist 31. Das bedeutet, dass alle Log-Meldungen außer Debug-Meldungen enthalten sind.

Il existe un paramètre de configuration log.verbosity permettant d'adapter le niveau de protocole par défaut. Cette valeur est utilisée lorsque ni l'option d'exécution -v|--verbose ni -q|--quiet ne sont utilisées. La valeur par défaut actuelle est 31, ce qui signifie que tous les messages de logs sont inclus, sauf les messages de débogage.

Auf der einen Seite setzt die Laufzeitoption -v|--verbose diese Konfigurationseinstellung temporär auf 63, was alle Loglevel einschließt. Auf der anderen Seite setzt die Laufzeitoption -q|--quiet diese Einstellung temporär auf 3 (nur Fatals und Fehler).

D'une part, l'option d'exécution -v|--verbose fixe temporairement ce paramètre de configuration à 63, ce qui inclut tous les niveaux de log. D'autre part, l'option d'exécution -q|--quiet fixe temporairement ce paramètre à 3 (fatals et erreurs uniquement).

## Zusätzliche Konfigurationsdateien

## Fichiers de configuration supplémentaires

Optional können Sie eine oder mehrere zusätzliche JSON-formatierte Konfigurationsdateien mit der Option -c oder --config übergeben. Wiederholen Sie die Option für mehr als eine Datei. Zum Beispiel:

En option, vous pouvez transmettre un ou plusieurs fichiers de configuration supplémentaires formatés en JSON avec l'option -c ou --config. Répétez l'option pour plus d'un fichier. Par exemple

```
idoitcmk push --config i-doit-testing.json --config check_mk-testing.json
```

## Laufzeit-Einstellungen

## Paramètres de durée

Sie möchten einige Einstellungen während der Laufzeit ändern? Das können Sie mit den Optionen -s und --setting tun. Trennen Sie verschachtelte Schlüssel mit ., zum Beispiel:

Vous souhaitez modifier certains paramètres pendant l'exécution ? Vous pouvez le faire avec les options -s et --setting. Séparez les clés imbriquées par ., par exemple :

```
idoitcmk push --setting "push.activateChanges=true"
idoitcmk pull -s ['pull.attributes={"C__CATG__ACCESS": true,"C__CATG__APPLICATION": true,"C__CATG__CONTACT": true,"C__CATG__CPU": true,"C__CATG__DRIVE": true,"C__CATG__GRAPHIC": true,"C__CATG__IP": true,"C__CATG__MEMORY": true,"C__CATG__MODEL": true,"C__CATG__OPERATING_SYSTEM": true,"C__CATG__NETWORK_LOG_PORT": true,"C__CATG__NETWORK_PORT": true}']
```

Option "Wiederholen" für mehr als eine Einstellung.

Option "Répéter" pour plus d'un réglage.

## Reihenfolge der Konfigurationseinstellungen ist wichtig

## L'ordre des paramètres de configuration est important

Wie Sie bereits gelesen haben, haben Sie verschiedene Möglichkeiten, Ihre bevorzugten Einstellungen an diese Anwendung zu übergeben. Diese Anwendung folgt dieser Reihenfolge:

Comme vous l'avez déjà lu, vous avez plusieurs possibilités pour transmettre vos paramètres préférés à cette application. Cette application suit cet ordre :

1. Die Standardeinstellungen werden überschrieben durch
2. Systemweite Einstellungen (/etc/idoitcmk/config.json) werden überschrieben mit
3. Benutzerdefinierte Einstellungen (~/.idoitcmk/config.json) werden überschrieben mit
4. Zusätzliche Konfigurationsdateien (Optionen -c FILE oder --config FILE) werden überschrieben mit
5. Laufzeiteinstellungen (Optionen -s KEY=VALUE oder --setting KEY=VALUE)

1. les paramètres par défaut sont remplacés par
2. les paramètres à l'échelle du système (/etc/idoitcmk/config.json) sont remplacés par
3. les paramètres définis par l'utilisateur (~/.idoitcmk/config.json) sont remplacés par
4. les fichiers de configuration supplémentaires (options -c FILE ou --config FILE) sont écrasés par
5. paramètres d'exécution (options -s KEY=VALUE ou --setting KEY=VALUE)

## Testen Sie Ihre Konfiguration

## Testez votre configuration

Mit dem Befehl configtest können Sie eine detaillierte Überprüfung Ihrer Konfigurationseinstellungen durchführen. Dies ist sehr nützlich, nachdem Sie Ihre Einstellungen erstellt oder geändert haben:

La commande configtest vous permet d'effectuer un contrôle détaillé de vos paramètres de configuration. Cela est très utile après avoir créé ou modifié vos paramètres :

```
idoitcmk configtest
```

## Geben Sie Ihre Konfiguration aus

## Entrez votre configuration

Wenn Sie eine Reihe von Konfigurationsdateien und Laufzeiteinstellungen haben, ist es manchmal gut zu wissen, was Ihre kompilierten Einstellungen sind:

Si vous avez un certain nombre de fichiers de configuration et de paramètres d'exécution, il est parfois bon de savoir quels sont vos paramètres compilés :

```
idoitcmk print-config
```

Damit werden Ihre aktuellen Konfigurationseinstellungen JSON-formatiert auf STDOUT ausgegeben.

Ainsi, vos paramètres de configuration actuels sont envoyés à STDOUT au format JSON.