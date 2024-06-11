# checkmk 2: Configuration

Cette application est hautement personnalisable via des fichiers de configuration et des paramètres d'exécution.

Fichiers de configuration
-------------------------

Au démarrage, il essaie de charger les fichiers suivants :

*   /etc/idoitcmk/config.json (au niveau du système) et
*   ~/.idoitcmk/config.json (défini par l'utilisateur)

Les fichiers de configuration sont formatés en JSON (JavaScript Object Notation), un format facilement lisible pour les humains et les robots.

Créer automatiquement un fichier de configuration
------------------------------------------------

Utilisez la commande init pour créer votre propre fichier de configuration :

    idoitcmk init

Cette commande vous posera plusieurs questions sur tous les paramètres qui sont mentionnés ci-dessous. Ensuite, un fichier de configuration sera écrit dans `~/.idoitcmk/config.json`.

Si vous exécutez cette commande avec des droits de super-utilisateur (root), un fichier de configuration sera écrit dans `/etc/idoitcmk/config.json` à la place.

Avec cette commande, vous pouvez même mettre à jour vos paramètres de configuration. Avant cela, une sauvegarde sera créée en arrière-plan.

Créer des fichiers de configuration manuellement

{/*examples*/}

Pour bien commencer, imprimez la configuration d'exemple et éditez-la localement :

```bash
mkdir ~/.idoitcmk
idoitcmk print-example-config > ~/.idoitcmk/config.json
editor ~/.idoitcmk/config.json
```

Paramètres disponibles
------------------

Les paramètres de configuration sont séparés par thèmes :

| Thème | Description |
| --- | --- |
| i-doit | Configurez comment accéder à l'API JSON-RPC de i-doit |
| check_mk | Configurez comment accéder à l'API Web de checkmk |
| push | Configurez comment [envoyer des données de i-doit à checkmk](./generate-wato-configuration-base-on-cmdb-data.md) |
| pull | Configurez comment [récupérer des données de checkmk vers i-doit](./import-inventory-data-into-cmdb.md) |
| objectTypes | Types d'objets utilisés identifiés par leurs constantes |
| objectTitles | Objets utilisés identifiés par leurs titres |
| rôles | Rôles i-doit pour les groupes de contacts utilisés dans les affectations de contacts |
| blacklistedObjectTypes | Types d'objets qui seront complètement ignorés par toutes les commandes |
| log | Niveaux de journalisation et sortie colorée |

Les thèmes requis sont i-doit et check_mk, sinon le partage d'informations entre eux ne fonctionnera pas. Tous les autres thèmes peuvent être modifiés facultativement. 

{ /* examples */ }

Pour presque chaque paramètre, il existe une valeur par défaut prédéfinie. Vous pouvez supprimer les paramètres inchangés de vos fichiers de configuration locaux.

### Accéder à l'API JSON-RPC d'i-doit

Configurer comment accéder à l'API JSON-RPC d'i-doit :

| Clé | Type | Requis | Par défaut | Description |
| --- | --- | --- | --- | --- |
| i-doit.url | Chaîne | Oui | -   | Point d'entrée de l'API JSON-RPC d'i-doit (Exemple : http://demo.i-doit.com/src/jsonrpc.php) |
| i-doit.key | Chaîne | Oui | -   | Clé API |
| i-doit.username | Chaîne | Non  | -   | Nom d'utilisateur |
| i-doit.password | Chaîne | Non  | -   | Mot de passe |
| i-doit.language | Chaîne | Non  | en | Les langues supportées sont en ou de |
| i-doit.limitBatchRequests | Chaîne | Non  | 500 | Si vous rencontrez des problèmes de performances ou de mémoire dans i-doit, diminuez ce paramètre. La valeur 100 est un bon point de départ. 0 désactive toute limitation. |
| i-doit.proxy.type | Chaîne | Non  | -   | HTTP ou SOCKS5 |
| i-doit.proxy.host | Chaîne | Non  | -   | Nom de domaine complet ou adresse IP du proxy |
| i-doit.proxy.port | Entier | Non  | -   | Port TCP/IP |
| i-doit.proxy.username | Chaîne | Non  | -   | Nom d'utilisateur |
| i-doit.proxy.password | Chaîne | Non  | -   | Mot de passe |

### Accéder à l'API Web de checkmk et à Livestatus

Configurer comment accéder à l'API Web de checkmk :

| Clé | Type | Requis | Par défaut | Description |
| --- | --- | --- | --- | --- |
| check_mk.webAPI.url | Chaîne | Oui | -   | Point d'entrée de l'API Web de checkmk (Exemple : http://ServeurCheckMK/nom-du-site/check_mk/) |
| check_mk.webAPI.username | Chaîne | Oui | automation | Utilisateur d'automatisation |
| check_mk.webAPI.secret | Chaîne | Oui | -   | Secret d'automatisation |
| check_mk.webAPI.effectiveAttributes | Booléen | Oui | true | Récupérer les paramètres hérités des ensembles de règles, des dossiers, etc. |
| check_mk.webAPI.proxy.type | Chaîne | Non  | -   | HTTP ou SOCKS5 |
| check_mk.webAPI.proxy.host | Chaîne | Non  | -   | Nom de domaine complet ou adresse IP du proxy |
| check_mk.webAPI.proxy.port | Chaîne | Non  | -   | Port TCP/IP |
| check_mk.webAPI.proxy.username | Chaîne | Non  | -   | Nom d'utilisateur |
| check_mk.webAPI.proxy.password | Chaîne | Non  | -   | Mot de passe |
| check_mk.livestatus.type | Chaîne | Non  | tcp | tcp ou socket |
| check_mk.livestatus.title | Chaîne | Non  | Check_MK | Nom unique pour cette instance Livestatus |
| check_mk.livestatus.host | Chaîne | Non  | -   | Nom d'hôte (type tcp uniquement) |
| check_mk.livestatus.port | Entier | Non  | 6557 | Port TCP/IP (type tcp uniquement) |
| check_mk.livestatus.path | Chaîne | Non  | -   | Chemin vers le socket UNIX (type socket uniquement) |

Livestatus ne peut actuellement pas être connecté via TLS.

### Configurer la version de Checkmk utilisée

| Clé | Type | Requis | Par défaut | Description |
| --- | --- | --- | --- | --- |
| check_mk.version | Chaîne | Non  | -   | Version de Checkmk utilisée nécessaire pour l'importation de l'inventaire, par exemple "2.1" |

### Configurer la commande de push

Configurer comment [envoyer des données de i-doit à checkmk](./generate-wato-configuration-base-on-cmdb-data.md) :

| Clé | Type | Requis | Par défaut | Description |
| --- | --- | --- | --- | --- |
| push.activateChanges | Booléen | Non  | false | Activer tous les changements sauf les changements étrangers |
| push.activateForeignChanges | Booléen | Non  | false | Activer tous les changements y compris les changements étrangers ; push.activateChanges doit être vrai |
| push.autoMatching | Chaîne | Non  | all | Désactiver l'auto-étiquetage (none), rechercher simplement la première correspondance (first) ou essayer de faire correspondre toutes les expressions (all) |
| push.autoSite | Booléen | Non  | false | Dans un environnement multi-site, chaque hôte est surveillé par un site. Avec la valeur location, le site peut être identifié automatiquement par le chemin d'emplacement de l'objet. |
| push.autoTagging | Objet | Non  | -   | Ajouter des balises d'hôte dynamiquement en fonction des informations d'objet qui correspondent à des expressions régulières ; voir la section "Auto-étiquetage" |
| push.bakeAgents | Booléen | Non  | false | Cuire automatiquement les agents ; ne déploie pas les agents |
| push.contactGroupIdentifier | Chaîne | Non  | title | Collecter les groupes de contacts par leurs titres d'objet (title) ou par leurs DNs LDAP (ldap) |
| push.defaultWATOFolder | Chaîne | Non  | -   | Envoyer les hôtes vers ce dossier s'il n'est pas défini ; une valeur vide signifie le dossier principal |
| push.discoverServices | Booléen | Non  | false | Rechercher des services sur les hôtes nouveaux/modifiés |
| push.location | Booléen | Non  | true |     |

#### Balisage automatique {/ * exemples * /}

Exemple :

```json
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

Essayez de faire correspondre toutes les expressions :

- Les objets dont les titres (title) commencent par 00 seront vérifiés par un agent et seront balisés comme productifs.
- Les objets dont les titres (title) contiennent mail au milieu seront balisés comme hôtes de messagerie.
- Les objets dont les noms d'hôtes (hostname) commencent par vm seront assignés à la DMZ.
- Les objets dont les noms de domaine complets (fqdn) se terminent par test.local seront balisés comme test.

### Configurer la commande pull {/examples}

Configurer comment [extraire des données de checkmk vers i-doit](./import-inventory-data-into-cmdb.md) :

| Clé | Type | Requis | Par défaut | Description |
| --- | --- | --- | --- | --- |
| pull.createObjects | Booléen | Non  | true | Les hôtes inconnus seront créés en tant que nouveaux objets |
| pull.createUnknownSoftwareApplications | Booléen | Non  | true | Les applications inconnues seront créées en tant que nouveaux objets |
| pull.objectType | Chaîne | Non  | C__OBJTYPE__SERVEUR | Définir la constante de type d'objet pour les nouveaux objets |
| pull.updateObjects | Chaîne | Non  | écraser | Si l'hôte est trouvé dans i-doit, écraser les entrées de catégorie existantes, les fusionner ou les ignorer (liste des catégories uniquement) |
| pull.idenfifier | Tableau | Non  | ["titre", "nom d'hôte", "fqdn", "adresse de l'hôte", "alias", "défini par l'utilisateur", "numéro de série"] | Rechercher ces identifiants pour faire correspondre les hôtes avec des objets ; voir la section "Identifiants" |
| pull.minMatch | Entier | Non  | 2 | L'objet et l'hôte doivent partager un nombre minimum d'identifiants |
| pull.attributes | Tableau | Non  | _Voir la section "Attributs"_ | Liste des constantes de catégorie qui seront modifiées ; voir la section "Attributs" |
| pull.enableExport | Booléen | Non  | true | Écrire la configuration de l'hôte dans la catégorie Check_MK Host |
| pull.enableLivestatus | Booléen | Non  | true | Écrire la configuration de l'hôte dans la catégorie Monitoring |
| pull.ports | Chaîne | Non  | physique | Ajouter/mettre à jour des ports réseau physiques ou logiques |

#### Identifiants {/ * exemples * /}

Dans i-doit, il existe plusieurs attributs qui conviennent en tant qu'identifiants uniques pour les associer à des hôtes dans checkmk:

| Identifiant | Catégorie | Description |
| --- | --- | --- |
| titre | Général | Titre de l'objet |
| nom d'hôte | Adresse de l'hôte | Nom d'hôte |
| fqdn | Adresse de l'hôte | Nom de domaine pleinement qualifié |
| adresse de l'hôte | Adresse de l'hôte | Adresse IPv4 ou IPv6 principale |
| alias | Hôte Check_MK | Alias de l'hôte |
| défini par l'utilisateur | Hôte Check_MK | Valeur définie par l'utilisateur pour l'attribut nom d'hôte |
| numéro de série | Modèle | Numéro de série dans la catégorie du modèle |

Exemple:

    {
        "pull": {
            "identifier": [
                "titre",
                "nom d'hôte",
                "fqdn",
                "adresse de l'hôte",
                "alias",
                "défini par l'utilisateur"
            ],
            "minMatch": 2
        }
    }

#### Attributs {/ * exemples * /}

Dans i-doit, chaque attribut d'objet est lié à une catégorie appelée catégorie. Ces catégories peuvent être modifiées:

| Catégorie | Constante | Par défaut | Description |
| --- | --- | --- | --- |
| Accès | C__CATG__ACCESS | vrai | Lien vers l'hôte dans checkmk |
| Application | C__CATG__APPLICATION | faux | Affectations logicielles |
| Attribution de contact | C__CATG__CONTACT | vrai | Groupes de contacts avec rôles.roles.monitoring |
| CPU | C__CATG__CPU | vrai | Cœurs de CPU |
| Disque | C__CATG__DRIVE | vrai | Points de montage |
| Carte graphique | C__CATG__GRAPHIC | vrai | Cartes graphiques (virtuelles) |
| Adresse de l'hôte | C__CATG__IP | vrai | Adresses IP et nom d'hôte |
| Mémoire | C__CATG__MEMORY | vrai | Mémoire totale |
| Modèle | C__CATG__MODEL | vrai | Fabricant, nom du modèle et numéro de série |
| Système d'exploitation | C__CATG__OPERATING_SYSTEM | vrai | Système d'exploitation |
| Réseau > Ports logiques | C__CATG__NETWORK_LOG_PORT | vrai | Ports logiques actifs avec adresse MAC |
| Réseau > Port | C__CATG__NETWORK_PORT | vrai | Ports physiques actifs avec adresse MAC |

```markdown
### Types d'objet

Types d'objet utilisés identifiés par leurs constantes :

| Clé | Type | Requis | Par défaut | Description |
| --- | --- | --- | --- | --- |
| objectTypes.contactGroup | Chaîne de caractères | Non | C__OBJTYPE__PERSON_GROUP | Groupes de contact |
| objectTypes.operatingSystem | Chaîne de caractères | Non | C__OBJTYPE__OPERATING_SYSTEM | Systèmes d'exploitation |
| objectTypes.subnetwork | Chaîne de caractères | Non | C__OBJTYPE__LAYER3_NET | Sous-réseaux |
| objectTypes.remoteManagementController | Chaîne de caractères | Non | C__OBJTYPE__RM_CONTROLLER | Contrôleurs de gestion à distance |
```

### Titres d'objet

Les objets utilisés sont identifiés par leurs titres :

| Clé | Type | Requis | Par défaut | Description |
| --- | --- | --- | --- | --- |
| Sous-réseau IPv4 | Chaîne de caractères | Non | v4 global | Sous-réseau par défaut pour les adresses IPv4 |
| Sous-réseau IPv6 | Chaîne de caractères | Non | v6 global | Sous-réseau par défaut pour les adresses IPv6 |

### Rôles

Il s'agit d'une liste des rôles i-doit pour les groupes de contacts utilisés dans les affectations de contact :

| Clé | Type | Requis | Par défaut | Description |
| --- | --- | --- | --- | --- |
| roles.monitoring | Chaîne de caractères | Non | Monitoring | Rôle i-doit pour les groupes de contacts utilisés dans les affectations de contact |

### Types d'objets en liste noire

Cette liste de types d'objets sera complètement ignorée par défaut :

| Type d'objet | Constante |
| --- | --- |
| Chemin de câbles | C__CMDB__OBJTYPE__CABLE_TRAY |
| Conduit | C__CMDB__OBJTYPE__CONDUIT |
| Groupe d'objets | C__OBJECT_TYPE__GROUP |
| Avion | C__OBJTYPE__AIRCRAFT |
| Application | C__OBJTYPE__APPLICATION |
| Bâtiment | C__OBJTYPE__BUILDING |
| Câble | C__OBJTYPE__CABLE |
| Contrat de téléphone portable | C__OBJTYPE__CELL_PHONE_CONTRACT |
| Ville | C__OBJTYPE__CITY |
| Pays | C__OBJTYPE__COUNTRY |
| Instance de base de données | C__OBJTYPE__DATABASE_INSTANCE |
| Schéma de base de données | C__OBJTYPE__DATABASE_SCHEMA |
| SGBD | C__OBJTYPE__DBMS |
| Plan d'urgence | C__OBJTYPE__EMERGENCY_PLAN |
| Baie | C__OBJTYPE__ENCLOSURE |
| Fichier | C__OBJTYPE__FILE |
| Modèle générique | C__OBJTYPE__GENERIC_TEMPLATE |
| Domaine d'information | C__OBJTYPE__INFORMATION_DOMAIN |
| Service IT | C__OBJTYPE__IT_SERVICE |
| Carte cryptographique | C__OBJTYPE__KRYPTO_CARD |
| Réseau de couche 2 | C__OBJTYPE__LAYER2_NET |
| Réseau de couche 3 | C__OBJTYPE__LAYER3_NET |
| Licences | C__OBJTYPE__LICENCE |
| Emplacement générique | C__OBJTYPE__LOCATION_GENERIC |
| Contrat | C__OBJTYPE__MAINTENANCE |
| Middleware | C__OBJTYPE__MIDDLEWARE |
| Objets de migration | C__OBJTYPE__MIGRATION_OBJECT |
| Modèle d'hôte Nagios | C__OBJTYPE__NAGIOS_HOST_TPL |
| Service Nagios | C__OBJTYPE__NAGIOS_SERVICE |
| Modèle de service Nagios | C__OBJTYPE__NAGIOS_SERVICE_TPL |
| Zone réseau | C__OBJTYPE__NET_ZONE |
| Système d'exploitation | C__OBJTYPE__OPERATING_SYSTEM |
| Organisation | C__OBJTYPE__ORGANIZATION |
| Relation parallèle | C__OBJTYPE__PARALLEL_RELATION |
| Panneau de brassage | C__OBJTYPE__PATCH_PANEL |
| Personnes | C__OBJTYPE__PERSON |
| Groupes de personnes | C__OBJTYPE__PERSON_GROUP |
| Segment de baie | C__OBJTYPE__RACK_SEGMENT |
| Relation | C__OBJTYPE__RELATION |
| Objet de réplication | C__OBJTYPE__REPLICATION |
| Salle | C__OBJTYPE__ROOM |
| Zonage SAN | C__OBJTYPE__SAN_ZONING |
| Service système | C__OBJTYPE__SERVICE |
| Carte SIM | C__OBJTYPE__SIM_CARD |
| Pile SOA | C__OBJTYPE__SOA_STACK |
| Super-réseau | C__OBJTYPE__SUPERNET |
| Véhicule | C__OBJTYPE__VEHICLE |
| VRRP | C__OBJTYPE__VRRP |
| WAN | C__OBJTYPE__WAN |
| Système de câblage | C__OBJTYPE__WIRING_SYSTEM |
| Poste de travail | C__OBJTYPE__WORKSTATION |

Vous ne pouvez pas supprimer les types d'objets de cette liste (veuillez signaler un problème si vous le souhaitez quand même). Mais vous pouvez étendre cette liste avec d'autres types d'objets.

Dans l'exemple suivant, tous les objets de type Client seront également ignorés. Pour identifier ce type d'objet, utilisez sa constante au lieu de son titre (anglais ou allemand) :

    {
        "blacklistedObjectTypes": [
            "C__OBJTYPE__CLIENT"
        ]
    }

### Niveaux de journalisation

L'outil CLI idoitcmk dispose de différents niveaux de journalisation :

| Niveau | Valeur |
| --- | --- |
| Fatal | 1 |
| Erreur | 2 |
| Avertissement | 4 |
| Notification | 8 |
| Info | 16 |
| Débogage | 32 |

Il existe un paramètre de configuration log.verbosity pour ajuster le niveau de journalisation par défaut. Cette valeur sera utilisée lorsque ni l'option d'exécution `-v|--verbose` ni `-q|--quiet` ne sont utilisées. La valeur par défaut actuelle est 31. Cela signifie que tous les messages de journal sauf les messages de débogage sont inclus.

D'un côté, l'option d'exécution `-v|--verbose` définit temporairement ce paramètre de configuration à 63, ce qui inclut tous les niveaux de journalisation. D'un autre côté, l'option d'exécution `-q|--quiet` le définit temporairement à 3 (uniquement les erreurs fatales et les erreurs).

Fichiers de configuration supplémentaires
------------------------------

Optionnellement, vous pouvez passer un ou plusieurs fichiers de configuration au format JSON en utilisant l'option -c ou --config. Répétez l'option pour plus d'un fichier. Par exemple:


    idoitcmk push --config i-doit-testing.json --config check_mk-testing.json

Paramètres d'exécution
----------------

Vous souhaitez modifier certains paramètres pendant l'exécution ? Vous pouvez le faire avec les options `-s` et `--setting`. Séparez les clés imbriquées avec ., par exemple:

    idoitcmk push --setting "push.activateChanges=true"

    idoitcmk pull -s ['pull.attributes={"C__CATG__ACCESS": true,"C__CATG__APPLICATION": true,"C__CATG__CONTACT": true,"C__CATG__CPU": true,"C__CATG__DRIVE": true,"C__CATG__GRAPHIC": true,"C__CATG__IP": true,"C__CATG__MEMORY": true,"C__CATG__MODEL": true,"C__CATG__OPERATING_SYSTEM": true,"C__CATG__NETWORK_LOG_PORT": true,"C__CATG__NETWORK_PORT": true}']

Répétez l'option pour plus d'un paramètre.

L'ordre des paramètres de configuration est important
---------------------------------------

Comme vous l'avez déjà lu, vous avez plusieurs options pour transmettre vos paramètres préférés à cette application. Cette application suit cet ordre :

1. Les paramètres par défaut seront écrasés par
2. Les paramètres système (situés dans /etc/idoitcmk/config.json) seront écrasés par
3. Les paramètres définis par l'utilisateur (situés dans ~/.idoitcmk/config.json) seront écrasés par
4. Les fichiers de configuration supplémentaires (options -c FICHIER ou --config FICHIER) seront écrasés par
5. Les paramètres d'exécution (options -s CLÉ=VALEUR ou --setting CLÉ=VALEUR)

Tester votre configuration
--------------------------

Avec la commande configtest, vous pouvez effectuer une validation détaillée de vos paramètres de configuration. C'est très utile après avoir créé ou modifié vos paramètres :

    idoitcmk configtest

Afficher votre configuration
----------------------------

Si vous avez plusieurs fichiers de configuration et des paramètres d'exécution, il est parfois utile de savoir quels sont vos paramètres compilés :

    idoitcmk print-config

Cela affichera vos paramètres de configuration actuels au format JSON sur STDOUT.
