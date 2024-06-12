# Contrôleur

i-doit possède un outil en ligne de commande appelé contrôleur.

!!! attention "Obsolète"

    Depuis la version 1.10, le contrôleur est marqué comme obsolète et sera supprimé dans l'une des prochaines versions. La [console](../cli/index.md) est le choix alternatif.

Premiers Pas
-----------

Le contrôleur est situé dans le dossier principal de _i-doit_. Si vous avez suivi le [guide d'installation,](../../installation/manual-installation/setup.md) alors le dossier principal sera situé à /var/www/html/i-doit/ pour les systèmes d'exploitation basés sur Debian :

    $ ll /var/www/html/i-doit/controller
    -rwxrwxr-- 1 www-data www-data 314 Jul  7 14:23 /var/www/html/i-doit/controller

Pour éviter les erreurs, il est important d'exécuter le contrôleur avec le même utilisateur qui utilise le serveur web. Dans l'exemple, il s'agit de **www-data**. Il est également important de changer vers le dossier principal de i-doit avant d'exécuter le contrôleur :

    $ cd /var/www/html/i-doit/
    $ sudo -u www-data ./controller
    
    Utilisation : controller.php [OPTION] [PARAMÈTRES]
    par exemple :  controller.php -v -m workflow
    Options :
    -m HANDLER   Charger le module HANDLER.
    -u nom_utilisateur  nom d'utilisateur i-doit
    -p mot_de_passe  mot de passe i-doit
    -i locataire    ID du locataire auquel se connecter (utilisez './tenants ls' pour obtenir une liste)
    -h           Ce texte d'aide
    -v           Mode verbeux
    -d           Affiche TOUS les messages de débogage
    
    HANDLER peut être l'un des gestionnaires disponibles suivants :
    addldapdn, archivelog, cleanup_auth, cleanup_objects, csv_import, import, isc_dhcpd, jdisc, jdisc_discovery, ldap, maintenance, nagios, nagios_export, notifications, ocs, regenerate_relations, report, syslog, tenants, updatecheck, workflow

Ce script doit être exécuté d'une manière légèrement différente dans les systèmes d'exploitation [Windows](../../installation/manual-installation/microsoft-windows-server/index.md) car ils ne peuvent pas gérer le script bash du contrôleur :

```markdown
    php.exe controller.php

Client et Informations d'identification
----------------------

Pour utiliser le contrôleur, une authentification pour i-doit est nécessaire. Pour cela, un nom d'utilisateur (-u), un mot de passe (-p) et l'ID unique du client à utiliser (-i) sont requis.

!!! success "L'utilisateur "contrôleur""

    Il est recommandé de créer un utilisateur dédié pour le contrôleur dans i-doit. Si l'utilisateur doit être configuré en tant qu'utilisateur local, créez un objet de type **Personnes** avec les informations souhaitées dans la catégorie **Personnes → Connexion**. Cet utilisateur devrait recevoir des droits d'administrateur. Cela peut être réalisé en l'assignant au groupe prédéfini **Groupe de personnes** Admin.

Pour savoir à quel client spécifique appartient un ID unique, la commande suivante peut être utilisée :

    $ sudo -u www-data ./tenants ls
    Gestionnaire de locataires initialisé (2015-07-22 10:32:42)
    Locataires disponibles :
    ID: Titre (Langue) (hôte:port) [statut]
    1 : Solutions ACME IT (localhost:3306) [actif]
    2 : Schulz GmbH (localhost:3306) [actif]

L'ID est généralement 1 pour les installations i-doit avec un seul client.

Gestionnaire
-------

Le contrôleur est capable d'effectuer diverses actions. Celles-ci sont représentées par le gestionnaire. Pour appeler un gestionnaire spécifique, le paramètre -m est requis.

### Liste des Gestionnaires

[**Documents**](../../i-doit-pro-add-ons/documents/index.md)

| Gestionnaire | version pro | version open | Add-on | Description |
| --- | --- | --- | --- | --- |
| **[addldapdn](../../user-authentication-and-management/ldap-directory/index.md)** | oui | oui | –   | Synchroniser le nom distinctif (DN) des utilisateurs à partir d'un LDAP/AD (voir la catégorie **LDAP**) |
| **[archivelog](../../basics/logbook.md)** | oui | oui | –   | Archiver les entrées du journal |
| **[check_mk](../../i-doit-pro-add-ons/checkmk.md)** | oui | oui | –   | Écrire le statut actuel de la surveillance réseau dans le journal |
| **[cleanup_auth](../../efficient-documentation/rights-management/index.md)** | oui | oui | –   | Nettoyer le système d'autorisation |
| **[cleanup_objects](../../basics/life-and-documentation-cycle.md)** | oui | oui | –   | Nettoyer les objets |
| **[csv_import](../../consolidate-data/csv-data-import/index.md)** | oui | –   | –   | Importer des données à partir d'un fichier CSV |
| [**document**](../../i-doit-pro-add-ons/documents/index.md) | –   | –   | **[Documents](../../i-doit-pro-add-ons/documents/index.md)** | Créer une nouvelle révision d'un document |
| **import** | oui | oui | –   | Importer un XML i-doit ou [XML h-inventory](../../consolidate-data/h-inventory.md) |
| **increment_config** | oui | oui | –   | Définir l'auto-incrément des tables MariaDB / MySQL sur une valeur entière positive |
| **isc_dhcpd** | oui | oui | –   | Exporter la configuration pour ISC DHCPD |
| **[jdisc](../../consolidate-data/jdisc-discovery.md)** | oui | oui | –   | Importer des fichiers de JDisc |
| **[jdisc_discovery](../../consolidate-data/jdisc-discovery.md)** | oui | oui | –   | Activer une tâche de découverte chez JDisc |
| **[ldap](../../user-authentication-and-management/ldap-directory/index.md)** | oui | oui | –   | Importer des données à partir d'un annuaire LDAP ou Active Directory (AD) |
| **[maintenance](../../i-doit-pro-add-ons/maintenance.md)** | –   | –   | **[Maintenance](../../i-doit-pro-add-ons/maintenance.md)** | Envoyer des e-mails avec des travaux de maintenance planifiés |
| **[nagios](../network-monitoring/nagios.md)**** | oui | oui | –   | Écrire le statut actuel de la surveillance réseau dans le journal |
| **[nagios_export](../network-monitoring/nagios.md)** | oui | oui | –   | Exporter la configuration Nagios |
| **[notifications](../../evaluation/notifications.md)** | oui | oui | –   | Envoyer des notifications par e-mail |
| **[ocs](../../i-doit-pro-add-ons/ocs-inventory-ng.md)** | oui | oui | –   | Importer des données depuis OCS Inventory NG |
| **[regenerate_relations](../../basics/object-relations.md)** | oui | oui | –   | Recréer les relations d'objets |
| **[report](../../evaluation/report-manager.md)** | oui | –   | –   | Exporter un rapport sous forme de fichier |
| **[search_index](../../efficient-documentation/search.md)** | oui | oui | –   | Rechercher dans i-doit ou créer / renouveler l'index de recherche |
| **syslog** | oui | oui | –   | Importer des données de Syslog dans le journal i-doit |
| **[tenants](#mandantund-credentials)** | oui | oui | –   | Liste, activer et désactiver les locataires |
| **[updatecheck](../../maintenance-and-operation/update.md)** | oui | oui | –   | Rechercher des mises à jour dans i-doit |
| **workflow** | oui | oui | –   | Envoyer des notifications de workflow par e-mail |
```

### Configuration des Gestionnaires {/ * exemples * /}

#### Définir des Paramètres Additionnels

Certains gestionnaires nécessitent d'autres options qui peuvent être données directement au contrôleur via des paramètres spécifiques. Pour voir quels sont ces paramètres, cliquez sur les liens dans la liste des gestionnaires.

#### Ajuster le Fichier de Configuration

Pour certains gestionnaires, un fichier de configuration respectif existe. Des exemples peuvent être trouvés sous le dossier principal de i-doit dans **src/handler/config/examples/**. Pour qu'un fichier de configuration soit effectif, il doit être disponible dans le dossier **src/handler/config/**.
