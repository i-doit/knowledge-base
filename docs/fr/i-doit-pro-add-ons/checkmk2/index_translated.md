<!-- TRANSLATED by md-translate -->
# Checkmk2

# Checkmk2

## Checkmk 2 v1.8.2

## Checkmk 2 v1.8.2

### Was ist neu

### Quoi de neuf

* Mit Version 1.8.2 unterstützt CMK2 jetzt auch die Version Checkmk 2.2<br>
* Wenn der Config-Parameter check_mk.version auf "2.2" gesetzt ist, wird automatisch anstatt der Web-API die REST-API angesprochen.<br>
* Wenn der Config-Parameter check_mk.version auf "2.1" gesetzt ist, wird die WebAPI genutzt, es sein denn, es gibt einen Konfigurationsabschnitt. "check_mk.rest" der parallel zum WebAPI-Konfiguration genutzt werden kann. Dann wird auch für 2.1 die REST-API genutzt.
* Die betrifft nicht die Aufrufe der Inventory-API!

* Avec la version 1.8.2, CMK2 supporte maintenant aussi la version Checkmk 2.2<br>.
* Si le paramètre de configuration check_mk.version est fixé à "2.2", l'API REST est automatiquement sollicitée au lieu de l'API Web.<br>
* Si le paramètre de configuration check_mk.version est fixé à "2.1", l'API Web est utilisée, sauf s'il existe une section de configuration. "check_mk.rest" qui peut être utilisée parallèlement à la configuration WebAPI. Dans ce cas, l'API REST est également utilisée pour la version 2.1.
* Cela ne concerne pas les appels à l'API d'inventaire !

!!! info ""
    Als Gold-Partner von Tribe29 gilt das SHD - System-Haus-Dresden GmbH als ausgewiesener Spezialist für das Monitoring mit Checkmk. Mit der Übernahme und Weiterentwicklung des i-doit pro Add-Ons Checkmk 2 stellt SHD diese Expertise nun auch den i-doit Anwendern zur Verfügung.

! !! info ""
    En tant que partenaire Gold de Tribe29, SHD - System-Haus-Dresden GmbH est considéré comme un spécialiste confirmé de la surveillance avec Checkmk. En reprenant et en développant l'add-on Checkmk 2 d'i-doit pro, SHD met désormais cette expertise à la disposition des utilisateurs d'i-doit.

!!! attention ""
    Mit der [Checkmk Version 2.1.0b1](https://checkmk.com/werk/12389) wurde die Struktur der Inventory Daten verändert. Es ist aktuell mit der CheckMK 2 Add-on Version <=1.8 nicht möglich Inventory in i-doit zu übertragen.<br>
    Mit Version 1.8.1 muss die [Konfiguration](./checkmk2-konfiguration.md) angepasst werden.

! !! attention ""
    Avec la [Checkmk Version 2.1.0b1](https://checkmk.com/werk/12389), la structure des données d'inventaire a été modifiée. Il n'est actuellement pas possible de transférer Inventory dans i-doit avec la version <=1.8 du CheckMK 2 Add-on.<br>
    Avec la version 1.8.1, la [configuration](./checkmk2-konfiguration.md) doit être adaptée.

Austausch von Informationen zwischen i-doit und checkmk

Échange d'informations entre i-doit et checkmk

## Über

## À propos de

[i-doit](https://i-doit.com) ist eine Webanwendung für die IT-Dokumentation und eine CMDB (Konfigurationsmanagement-Datenbank). Diese Anwendung ist sehr nützlich, um um Ihr gesamtes Wissen über die IT-Infrastruktur, mit der Sie arbeiten, zu sammeln.

[i-doit](https://i-doit.com) est une application web pour la documentation informatique et une CMDB (base de données de gestion de configuration). Cette application est très utile pour rassembler toutes vos connaissances sur l'infrastructure informatique avec laquelle vous travaillez.

[checkmk](https://checkmk.com/de) ist eine Softwareanwendung für die Netzwerküberwachung.

[checkmk](https://checkmk.com/de) est une application logicielle pour la surveillance du réseau.

Beide Anwendungen zusammen erfüllen eine Aufgabe sehr gut: Sie sammeln und teilen Wissen darüber zu sammeln und weiterzugeben, was _der_ aktuelle Zustand aller Ihrer Hosts und Dienste in Echtzeit _und_ in welchem Zustand sich jeder Host und Service befinden _sollte_. Dies ist oft für ein professionelles und effizientes IT-Service-Management (ITSM) unerlässlich.

Ensemble, ces deux applications remplissent très bien une tâche : rassembler et partager les connaissances sur ce que _l'état actuel de tous vos hôtes et services en temps réel _et_ dans quel état chaque hôte et service _devrait être_. Cela est souvent indispensable pour une gestion professionnelle et efficace des services informatiques (ITSM).

Die Anwendung idoitcmk stellt eine enge Verbindung zwischen i-doit und checkmk her. Eine Menge Informationen werden zwischen ihnen ausgetauscht, um die folgenden Ziele zu erreichen:

L'application idoitcmk établit un lien étroit entre i-doit et checkmk. Beaucoup d'informations sont échangées entre eux pour atteindre les objectifs suivants :

* Einmaliges Schreiben, viele Lesezugriffe: Bewahren Sie Ihre Dokumentation und Konfiguration an einem Ort auf.
* Vergleichen Sie den aktuellen Zustand mit dem Zielzustand all Ihrer Hosts und Services innerhalb Ihrer Dokumentation.
* Konfigurieren Sie Ihre Netzwerküberwachung auf der Grundlage Ihrer Dokumentation
* Lassen Sie Ihre Netzwerküberwachung wichtige Informationen über Hosts sammeln und diese in Ihrer Dokumentation wiederverwenden.
* Automatisieren Sie alle langweiligen Aufgaben, die ein Systemadministrator nicht mag.

* Une seule écriture, de nombreux accès en lecture : Conservez votre documentation et votre configuration au même endroit.
* Comparez l'état actuel avec l'état cible de tous vos hôtes et services dans votre documentation.
* Configurez votre surveillance réseau sur la base de votre documentation.
* Laissez votre surveillance réseau collecter des informations importantes sur les hôtes et les réutiliser dans votre documentation.
* Automatisez toutes les tâches ennuyeuses qu'un administrateur système n'aime pas.

Wir wissen, dass jede (IT-)Organisation unterschiedliche Anforderungen und verschiedene Prozesse hat. Aus diesem Grund ist es wichtig, eine [highly customizable](checkmk2-konfiguration.md) Anwendung zu haben.

Nous savons que chaque organisation (informatique) a des besoins différents et des processus différents. C'est pourquoi il est important d'avoir une application [highly customizable](checkmk2-konfiguration.md).

## Dokumentation

## Documentation

* [Erste Schritte](./checkmk2-erste-schritte.md)
* [Anforderungen](./checkmk2-anforderungen.md)
* [Installation](./checkmk2-installation.md)
* [Konfiguration](./checkmk2-konfiguration.md)
* [Verwendung](./checkmk2-verwendung.md)
* [Erstelle WATO Konfiguration basierend auf CMDB Daten](./checkmk2-wato-konfiguration-auf-basis-von-cmdb-daten-generieren.md)
* [Importieren von Bestandsdaten in die CMDB](./checkmk2-bestandsdaten-in-die-cmdb-importieren.md)
* [Abgleich von Objekten aus i-doit mit Hosts aus checkmk](./checkmk2-abgleich-von-objekten-aus-i-doit-mit-hosts-aus-checkmk.md)
* [Informationen von i-doit und checkmk lesen](./checkmk2-informationen-aus-i-doit-und-checkmk-lesen.md)
* [Agentenarten von checkmk nach i-doit importieren](./checkmk2-synchronisierung-der-checkmk-agenten.md)
* [Kontaktgruppen zwischen checkmk und i-doit synchronisieren](./checkmk2-kontaktgruppen-synchronisieren.md)
* [WATO-Ordner zwischen checkmk und i-doit synchronisieren](./checkmk2-wato-ordner-synchronisieren.md)
* [Importieren von Sites aus checkmk in i-doit](./checkmk2-checkmk-sites-synchronisieren.md)
* [Synchronisierung von Host-Tags zwischen checkmk und i-doit](./checkmk2-host-tags-synchronisieren.md)
* [i-doit Web GUI](./checkmk2-i-doit-web-gui.md)
* [Häufig gestellte Fragen (FAQ)](./checkmk2-faq.md)

* [Premiers pas](./checkmk2-erste-schritte.md)
* [Exigences](./checkmk2-exigences.md)
* [Installation](./checkmk2-installation.md)
* [Configuration](./checkmk2-konfiguration.md)
* [Utilisation](./checkmk2-utilisation.md)
* [Créer une configuration WATO basée sur des données CMDB](./checkmk2-wato-configuration-basee-sur-des-données-cmdb-genere.md)
* [Importer des données d'inventaire dans la CMDB](./checkmk2-données-d'inventaire-dans-la-cmdb-import.md)
* [Comparaison des objets d'i-doit avec les hôtes de checkmk](./checkmk2-comparaison-des-objets-d'i-doit-avec-les-hôtes-de-checkmk.md)
* [Lire les informations de i-doit et checkmk](./checkmk2-informations-de-i-doit-et-checkmk-lire.md)
* [Importer des types d'agents de checkmk vers i-doit](./checkmk2-synchronisation-des-agents-checkmk.md)
* [Synchroniser les groupes de contacts entre checkmk et i-doit](./checkmk2-synchroniser-groupes-de-contacts.md)
* [Synchroniser les dossiers WATO entre checkmk et i-doit](./checkmk2-wato-dossier-synchroniser.md)
* [Importer des sites de checkmk vers i-doit](./checkmk2-checkmk-sites-synchroniser.md)
* [Synchronisation des tags d'hôte entre checkmk et i-doit](./checkmk2-host-tags-synchroniser.md)
* [i-doit Web GUI](./checkmk2-i-doit-web-gui.md)
* [Foire aux questions (FAQ)](./checkmk2-faq.md)

## Changelog

## Changelog

All notable changes to this project will be documented in this file.

Toutes les modifications notables apportées à ce projet seront documentées dans ce fichier.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

Le format est basé sur [Keep a Changelog](https://keepachangelog.com/en/1.0.0/)
et ce projet adhère à [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.8.2] - 2023-08-18

## [1.8.2] - 2023-08-18

### Fixes

### Corrections

* CMK2-41 REST-API: pull crashes when certain host or folder attributes are sets
* CMK2-42 REST-API: match crashes
* CMK2-44 REST-API: read nested folders correct
* CMK2-45 REST-API: sync-folders crashes when creating nested folders
* CMK2-46 CONFIG: only require a rest configuration if Checkmk Version >= 2.2

* CMK2-41 REST-API : pull crashes when certain host or folder attributes are sets
* CMK2-42 REST-API : match crashes
* CMK2-44 REST-API : read nested folders correct
* CMK2-45 REST-API : sync-folders crash lors de la création de dossiers imbriqués
* CMK2-46 CONFIG : requiert seulement une configuration de repos si Checkmk Version >= 2.2

## [1.8.2] - 2023-08-18

## [1.8.2] - 2023-08-18

### Added

### Ajouté

* Adding compatibility to checkmk 2.1

* Adding compatibility to checkmk 2.1

### Fixes

### Corrections

* CMK2-38 prevent arbitrary code execution on the idoit host via command injection in the hostname field of the ajax call

* CMK2-38 empêcher l'exécution de code arbitraire sur l'hôte idoit via l'injection de commandes dans le champ du nom d'hôte de l'appel ajax

## [1.8.1] - 2022-11-21

## [1.8.1] - 2022-11-21

### Fixes

### Corrections

* Adding compatibility to checkmk 2.1

* Adding compatibility to checkmk 2.1

## [1.8.0] - 2022-09-05

## [1.8.0] - 2022-09-05

### Added

### Ajouté

* PHP 8.0 Compatibility
* Design Compatibility

* Compatibilité PHP 8.0
* Compatibilité de conception

### Fixes

### Corrections

* Error message when synchronizing tags
* Synchronizing IPv6 IPs and networks generates an error message

* Message d'erreur lors de la synchronisation des tags
* La synchronisation des IP et des réseaux IPv6 génère un message d'erreur

## [1.7.1] - 2021-10-18

## [1.7.1] - 2021-10-18

### Added

### Ajouté

* Pull IPv6 addresses from checkmk to i-doit

* Pull IPv6 addresses from checkmk to i-doit

### Fixed

### Fixe

* Add/fix CPU attributes from checkmk to i-doit
* Add/fix operating system attributes from checkmk to i-doit

* Add/fix CPU attributes from checkmk to i-doit
* Add/fix operating system attributes from checkmk to i-doit

## [1.7.0] - 2021-08-09

## [1.7.0] - 2021-08-09

### Added

### Ajouté

* Implement merge strategy while pulling from checkmk to i-doit

* Implement merge strategy while pulling from checkmk to i-doit

### Fixed

### Fixe

* Tags (static) Dropdown 'Tag group' attributes cannot be deleted
* CheckMK 2: Tags are not displayed with the tag group in reports

* Tags (static) Dropdown 'Tag group' attributes cannot be deleted
* CheckMK 2 : Les tags ne sont pas affichés avec le groupe de tags dans les rapports

## [1.6.1] - 2021-06-15

## [1.6.1] - 2021-06-15

### Fixed

### Fixe

* Password and username must be specified (i-doit config)
* Filtering on attributes of category Check_MK (host) generates SQL error and list view does not work anymore
* Dynamic host tag "Location" cannot be set globally
* CheckMK 2 Plugin Pull: Validation errors in dialog related properties
* The live status configuration is not optional
* Checkmk responded with an error message: Check_MK exception: Invalid key(s): hostname
* Check_MK 2: Error Message strlen() expects parameter 1 to be string, null given
* Error in list views when add-on Check_MK 2 was deinstalled
* Operating system is not assigned
* No attributes are imported for applications
* Pull with the same Host as parent ends in a loop

* Le mot de passe et le nom d'utilisateur doivent être spécifiés (i-doit config)
* Le filtrage sur les attributs de la catégorie Check_MK (hôte) génère une erreur SQL et l'affichage de la liste ne fonctionne plus.
* La balise d'hôte dynamique "Location" ne peut pas être définie globalement
* CheckMK 2 Plugin Pull : Erreurs de validation dans les propriétés liées au dialogue
* La configuration de l'état en direct n'est pas optionnelle
* Checkmk a répondu avec un message d'erreur : Check_MK exception : Invalid key(s) : hostname
* Check_MK 2 : Error Message strlen() expects parameter 1 to be string, null given
* Erreur dans les vues de la liste lorsque l'add-on Check_MK 2 a été désinstallé
* Le système d'exploitation n'est pas attribué
* Aucun attribut n'est importé pour les applications
* Pull with the same host as parent ends in a loop

## [1.6.0] - 2019-12-06

## [1.6.0] - 2019-12-06

### Added

### Ajouté

* pull: Import software applications
* pull: New configuration setting pull.createUnknownSoftwareApplications
* pull: New configuration setting pull.attributes.C__CATG__APPLICATION
* pull: New configuration setting objectTypes.softwareApplication
* pull/match: Match objects and hosts by serial number configured by new item serial in pull.attributes
* fetch-hosts: Add new option --select to select one or multiple attributes, ignore everything else (works only in verbose mode)
* push: Print last request to Checkmk API on failure as debug message

* pull : Importer des applications logicielles
* pull : Nouveau paramètre de configuration pull.createUnknownSoftwareApplications
* pull : Nouveau paramètre de configuration pull.attributes.C__CATG__APPLICATION
* pull : Nouveau paramètre de configuration objectTypes.softwareApplication
* pull/match : Faire correspondre les objets et les hôtes par numéro de série configure par le nouvel item serial dans pull.attributes
* fetch-hosts : Add new option --select to select one or multiple attributes, ignore everything else (works only in verbose mode)
* push : Print last request to Checkmk API on failure as debug message

### Changed

### Changed

* Drop support for PHP version 5.6
* Mark PHP version 7.0 as deprecated
* Recommend PHP 7.3
* Re-name Check_MK to Checkmk
* Require PHP modules hash, sockets and SPL
* pull: Do not warn about empty host tag IDs because they are allowed in Checkmk
* pull: Ignore link local networking addresses and interfaces
* pull: Do not ignore a networking address which can't be assigned to a networking port
* push: Create site if it's set in i-doit (category Checkmk Host) but not set in Checkmk
* push: Update site if it's set in both i-doit and Checkmk but differs
* push: Remove site if it isn't set in i-doit but set in Checkmk
* match: Warn about ignored objects or objects without unique identifiers

* Drop support for PHP version 5.6
* Mark PHP version 7.0 as deprecated
* Recommend PHP 7.3
* Re-name Check_MK to Checkmk
* Require PHP modules hash, sockets and SPL
* pull : Do not warn about empty host tag IDs because they are allowed in Checkmk
* pull : Ignore link local networking addresses and interfaces
* pull : Ne pas ignorer une adresse de réseau qui ne peut pas être assignée à un port de réseau
* push : Create site if it's set in i-doit (category Checkmk Host) but not set in Checkmk
* push : Update site if it's set in both i-doit and Checkmk but differs
* push : Remove site if it isn't set in i-doit but set in Checkmk
* match : Warn about ignored objects or objects without unique identifiers

### Fixed

### Fixe

* fetch-hosts/pull: Fetch HW/SW inventory data for all hosts if configuration setting i-doit.limitBatchRequests is smaller than the number of hosts.
* match/pull/push: Use primary category entry from category hostadress to determine hostname used by Checkmk
* pull: Do not import empty MAC addresses
* pull: Prevent validation error caused by unknown property entry
* pull: Print link to Checkmk if attribute "site" is available
* pull: Validate data type of each tag identifier
* pull: Do not leave any host without an import strategy (create, overwrite, merge or ignore)
* pull: Decide import strategy for each host based on matching and configuration settings
* pull: Do not create objects which should be ignored
* push: Use IPv4 address which is explicitly marked as primary
* Web GUI: Add missing translations in English

* fetch-hosts/pull : Fetch HW/SW inventory data for all hosts if configuration setting i-doit.limitBatchRequests is smaller than the number of hosts.
* match/pull/push : Utiliser l'entrée de la catégorie primaire à partir de l'adresse hôte de la catégorie pour déterminer le nom d'hôte utilisé par le checkmk.
* pull : Ne pas importer d'adresses MAC vides
* pull : Prevent validation error caused by unknown property entry
* pull : Imprimer un lien vers le Checkmk si l'attribut "site" est disponible
* pull : Valider le type de données de chaque identifiant de balise
* pull : Ne pas laisser un hôte sans stratégie d'import (créer, écraser, fusionner ou ignorer)
* pull : Décider de la stratégie d'importation pour chaque hôte en fonction de la correspondance et des paramètres de configuration.
* pull : Ne pas créer d'objets qui devraient être ignorés
* push : Utiliser l'adresse IPv4 qui est explicitement marquée comme primaire
* Web GUI : Ajouter les traductions manquantes en anglais

## [1.5.1] - 2019-05-08

## [1.5.1] - 2019-05-08

This is a bug fix release after we received tons of useful feedback from our users.

Il s'agit d'une version de correction de bug après avoir reçu de nombreux commentaires utiles de nos utilisateurs.

**Important notices:**

**Notes de l'importateur:**

* Before installing/updating this add-on, please update to the latest version of i-doit (at least 1.12.2) and the API add-on (at least 1.10.2).
* Before using any other commands, run sync-agents first and check your i-doit objects for missing values in category Check_MK Host, attribute Agent.

* Avant d'installer/de mettre à jour cet add-on, veuillez mettre à jour la dernière version d'i-doit (au moins 1.12.2) et l'add-on API (au moins 1.10.2).
* Avant d'utiliser toute autre commande, exécutez d'abord sync-agents et vérifiez vos objets i-doit pour les valeurs manquantes dans la catégorie Check_MK Host, attribute Agent.

### Added

### Ajouté

* status: Check installed versions of Check_MK 2 and API add-on
* sync-agents: Cleanup agent types in i-doit which aren't available in Check_MK
* sync-tags: Validate tags in i-doit before pushing them to Check_MK
* pull/push: Add new configuration settings to identify required object types by their constants and objects by their titles
* pull: Print links to i-doit and Check_MK for each object (only in debug mode)

* statut : vérifier les versions installées de Check_MK 2 et de l'add-on API
* sync-agents : Nettoyer les types d'agents dans i-doit qui ne sont pas disponibles dans Check_MK
* sync-tags : Valider les tags dans i-doit avant de les pousser dans Check_MK
* pull/push : Ajouter de nouveaux paramètres de configuration pour identifier les types d'objets requis par leurs constantes et les objets par leurs titres.
* pull : Imprimer les liens vers i-doit et Check_MK pour chaque objet (seulement en mode debug)

### Changed

### Changed

* Require i-doit >=1.12.2
* Require API add-on >=1.10.2
* pull/push/sync-tags/Extras > Check_MK 2 > Tags (static): Mark attribute Tag ID as optional
* pull: Skip empty tag identifiers
* pull: If model is given but vendor is unknown set vendor to n/a (and vice versa)
* pull: Support more bandwidth options
* sync-agents: Fetch agent types directly from Check_MK and do not rely on a pre-defined list of agent types
* sync-tags: Do not allow to sync duplicate tag IDs, empty group titles or changed tag IDs
* sync-tags/sync-agents: Include built-in host tag groups, for example: agent type, SNMP, IP address family
* init: Do not force to configure most settings which have proper defaults; just ask nicely
* Add performance boost while fetching objects from i-doit by tweaking API calls
* Replaced deprecated i-doit API methods
* help/--help/-h: Improve included documentation
* Abort application run on any PHP error
* Category Check_MK Host: Print message if host/object not found
* Category Check_MK Host: Remove link to command log (prevents 403 forbidden error message)
* fetch-hosts/fetch-objects/delete-hosts: Exit with status code 2 if host/object not found
* Build binary: Replace BZip2 with GZip compression after autoloading failed because of wrong checksums

* Require i-doit >=1.12.2
* Require API add-on >=1.10.2
* pull/push/sync-tags/Extras > Check_MK 2 > Tags (static) : Mark attribute tag ID as optional
* pull : Sauter les identifiants de tags vides
* pull : Si le modèle est donné mais le fournisseur est inconnu, définir le fournisseur à n/a (et vice versa)
* pull : Support de plus d'options de bande passante
* sync-agents : Fetch agent types directly from Check_MK and do not rely on a pre-defined list of agent types
* sync-tags : Ne pas autoriser la synchronisation des ID de tags dupliqués, des titres de groupes vides ou des ID de tags modifiés.
* sync-tags/sync-agents : Include built-in host tag groups, for example : agent type, SNMP, IP address family
* init : Ne forcez pas la configuration de la plupart des paramètres qui ont des valeurs par défaut correctes ; demandez juste gentiment
* Add performance boost while fetching objects from i-doit by tweaking API calls
* Replaced deprecated API methods i-doit
* help/--help/-h : Améliorer la documentation incluse
* Abort application run on any PHP error
* Category Check_MK Host : Imprimer un message si l'hôte/objet n'est pas trouvé
* Category Check_MK Host : Remove link to command log (prevents 403 forbidden error message)
* fetch-hosts/fetch-objects/delete-hosts : Quitter avec le code d'état 2 si l'hôte/l'objet n'est pas trouvé
* Build binary : Replace BZip2 with GZip compression after autoloading failed because of incorrect checksums

### Fixed

### Fixe

* pull: Fix API calls to prevent validation errors in attributes active, primary and export_ip
* pull: Avoid errors when archiving data in overwrite mode
* pull: Do not create new objects in i-doit if configuration setting pull.createObjects is disabled
* pull: Do not warn about missing host tags because they are dynamically created by i-doit
* pull: Do not try to add network port with zero bandwidth
* pull: Select proper attributes to import CPUs
* pull: Do not overwrite hostname selection in categories Check_MK Host and Livestatus if object is updated
* pull/fetch-hosts: Fix filtering by Check_MK site with option --include-site
* pull/match: Do not try to match objects by unspecified hostname selection in category Check_MK Host
* pull/push/match: Do not try to create already existing object which has a match with a host
* push: Do not miss any host-related contact group if more than one group is assigned to an object
* push: Do not push tag IDs in lower-case
* push: Validate possible identifiers before using one of them
* push: Do not push any object with option --include-ids which is disabled for export
* push: Add parents to existing host or overwrite current parents or remove them properly
* push: Add or remove alias to/from host properly
* push/fetch-objects: Prevent error "Found invalid result for request in batch" if --include-ids filters by unknown objects
* sync-tags: Do not forget to strip HTML tags from tag group title before syncing to Check_MK
* Installation/update: Grant "Admin" group access to Extras > Check_MK 2 in Web GUI
* Extras > Check_MK 2 > Tags (static): Edit/delete/sort static host tags in i-doit
* Administration > Interfaces / external data > Monitoring > Check_MK 2: Fix updating configuration settings
* Administration > CMDB settings > Dialog-Admin: Make dialog+ attributes agent, site and WATO folder available
* Category Check_MK Host/Check_MK Tags: Do not create duplicate assignments to object types after update
* Category Check_MK Host: Write full command output incl. STDERR to log file
* Category Check_MK Tags: Make "dynamic tags" and "CMDB tags" available in reports

* pull : Correction des appels API pour éviter les erreurs de validation dans les attributs active, primary et export_ip
* pull : éviter les erreurs lors de l'archivage des données en mode écrasement
* pull : Ne pas créer de nouveaux objets dans i-doit si le paramètre de configuration pull.createObjects est désactivé
* pull : Ne pas avertir de l'absence de tags d'hôte car ils sont créés dynamiquement par i-doit
* pull : Ne pas essayer d'ajouter un port réseau avec une bande passante nulle
* pull : Sélectionner les attributs appropriés pour importer les CPUs
* pull : Ne pas écraser la sélection du nom d'hôte dans les catégories Check_MK Host et Livestatus si l'objet est mis à jour
* pull/fetch-hosts : Fix filtering by Check_MK site with option --include-site
* pull/match : Ne pas essayer de faire correspondre des objets par sélection de nom d'hôte non spécifié dans la catégorie Check_MK Host
* pull/push/match : Ne pas essayer de créer un objet déjà existant qui a une correspondance avec un hôte
* push : Ne manquez pas un groupe de contact lié à l'hôte si plus d'un groupe est attribué à un objet.
* push : Do not push tag IDs in lower-case
* push : Validate possible identifiers before using one of them
* push : Do not push any object with option --include-ids which is disabled for export
* push : Add parents to existing host or overwrite current parents or remove them properly
* push : Add or remove alias to/from host properly
* push/fetch-objects : Prevent error "Found invalid result for request in batch" if --include-ids filters by unknown objects
* sync-tags : N'oubliez pas d'enlever les tags HTML du titre du groupe de tags avant la synchronisation avec Check_MK.
* Installation/update : Grant "Admin" group access to Extras > Check_MK 2 in Web GUI
* Extras > Check_MK 2 > Tags (statiques) : Edit/delete/sort static host tags in i-doit
* Administration > Interfaces / données externes > Monitoring > Check_MK 2 : Fixer les paramètres de configuration de mise à jour
* Administration > CMDB settings > Dialog-Admin : Make dialog+ attributs agent, site and WATO folder available
* Category Check_MK Host/Check_MK Tags : Do not create duplicate assignments to object types after update
* Category Check_MK Host : Write full command output incl. STDERR to log file
* Category Check_MK Tags : Rendre les "tags dynamiques" et les "tags CMDB" disponibles dans les rapports

## [1.5.0] - 2018-12-18

## [1.5.0] - 2018-12-18

First public release 🎉

Premier communiqué public 🎉

**Important notes:**

**Important notes:**

* Because of several major changes in i-doit we had to increase minimum versions of i-doit pro and API add-on.
* Please re-run idoitcmk init to update configuration setting pull.attributes.
* From now on, you need a valid license for this add-on. Download your license file from [https://login.i-doit.com/](https://login.i-doit.com/).

* En raison de plusieurs changements majeurs dans i-doit, nous avons dû augmenter les versions minimales de i-doit pro et de l'add-on API.
* Please re-run idoitcmk init to update configuration setting pull.attributes.
* A partir de maintenant, vous avez besoin d'une licence valide pour cet add-on. Téléchargez votre fichier de licence à partir de [https://login.i-doit.com/](https://login.i-doit.com/).

### Added

### Ajouté

* push/pull/match: Validate hostname specified in i-doit
* Add more pre-checks: Please do not use neither PHP version < 7.0.0 nor super-user "root"

* push/pull/match : Validez le nom d'hôte spécifié dans i-doit
* Add more pre-checks : Please do not use neither PHP version < 7.0.0 nor super-user "root".

### Changed

### Changed

* Require i-doit pro, at least version 1.12
* Require i-doit API add-on, at least version 1.10
* Enforce license check
* Remove dependency from legacy Check_MK add-on
* Migrate tag configuration from Extras > Check_MK to Extras > Check_MK 2
* Migrate category Check_MK (Host) > Export parameter to Check_MK Host
* Migrate category Check_MK (Host) > Host tags to Check_MK Tags
* Re-name category constant C__CATG__CMK_DEF to C__CATG__CMK2
* Re-name category constant C__CATG__CMK_TAG to C__CATG__CMK2_TAG
* Re-name category constant C__CMDB__SUBCAT__NETWORK_PORT to C__CATG__NETWORK_PORT in configuration setting pull.attributes
* Re-name category constant C__CMDB__SUBCAT__NETWORK_INTERFACE_L to C__CATG__NETWORK_LOG_PORT in configuration setting pull.attributes

* Requiert i-doit pro, au moins la version 1.12
* Require i-doit API add-on, at least version 1.10
* Enforce license check
* Remove dependency from legacy Check_MK add-on
* Migrate tag configuration from Extras > Check_MK to Extras > Check_MK 2
* Migrate category Check_MK (Host) > Export parameter to Check_MK Host
* Migrate category Check_MK (Host) > Host tags to Check_MK tags
* Re-name category constant C__CATG__CMK_DEF to C__CATG__CMK2
* Re-name category constant C__CATG__CMK_TAG to C__CATG__CMK2_TAG
* Re-name category constant C__CMDB__SUBCAT__NETWORK_PORT to C__CATG__NETWORK_PORT in configuration setting pull.attributes
* Re-name category constant C__CMDB__SUBCAT__NETWORK_INTERFACE_L to C__CATG__NETWORK_LOG_PORT in configuration setting pull.attributes

### Fixed

### Fixe

* push: Fix error while archiving category entries
* sync-folders: Fix typos
* pull: Accept only EUI-48 MAC addresses (48-bit)

* push : Fix error while archiving category entries
* sync-folders : Correction des typos
* pull : Accept only EUI-48 MAC addresses (48-bit)

## [1.4.0] - 2018-11-05

## [1.4.0] - 2018-11-05

Remember, remember, the fifth of November… 🎃

Remember, remember, the fifth of November... 🎃

### Added

### Ajouté

* push: Add management board address to host based on a object-related remote management controller
* sync-tags: Import host tags and host tag groups from i-doit into Check_MK
* sync-tags: Filter objects to sync their dynamic CMDB tags with Check_MK
* sync-tags: Do not re-import dynamic CMDB tags from Check_MK into i-doit
* sync-tags: Activate (foreign) changes after adding new host tags to Check_MK

* push : Add management board address to host based on a object-related remote management controller
* sync-tags : Importer les tags d'hôtes et les groupes de tags d'hôtes d'i-doit dans le Check_MK
* sync-tags : Filtrer les objets pour synchroniser leurs tags CMDB dynamiques avec Check_MK
* sync-tags : Ne pas ré-importer les tags CMDB dynamiques de Check_MK dans i-doit
* sync-tags : Activer les modifications (étrangères) après l'ajout de nouvelles balises d'hôte à Check_MK

### Fixed

### Fixe

* Fix error when installing add-on in i-doit admin center without parallel login to i-doit tenant
* fetch-objects: Print URL without PHP notice

* Fix error when installing add-on in i-doit admin center without parallel login to i-doit tenant
* fetch-objects : Print URL without PHP notice

## [1.3.0] - 2018-09-10

## [1.3.0] - 2018-09-10

**Important note:** There are changes in the configuration settings. Re-configure your application with idoitcmk init.

**Important note:** Il y a des changements dans les paramètres de configuration. Re-configurez votre application avec idoitcmk init.

### Added

### Ajouté

* push: Validate regular expressions in configuration setting push.autoTagging
* status: Test loaded PHP extensions
* Make it optional to fetch "effective" attributes from hosts in Check_MK, but enable it by default
* Add new configuration setting check_mk.webAPI.effectiveAttributes (set to true by default)
* fetch-objects: Print URL to each i-doit object
* fetch-hosts: Print URL to each Check_MK host
* push/fetch-objects: Increase performance dramatically if the only filter option is --include-ids

* push : Validate regular expressions in configuration setting push.autoTagging
* status : Test loaded PHP extensions
* Rendre facultatif le fetch des attributs "effectifs" des hôtes dans Check_MK, mais l'activer par défaut
* Add new configuration setting check_mk.webAPI.effectiveAttributes (set to true by default)
* fetch-objects : Imprimer URL à chaque objet i-doit
* fetch-hosts : Print URL to each Check_MK host
* push/fetch-objects : Increase performance dramatically if the only filter option is --include-ids

### Changed

### Changed

* pull: Ignore empty host tags
* pull: Ignore host tag groups address_family and snmp (they are not available via Check_MK Web API call)

* pull : ignorer les tags d'hôte vides
* pull : Ignore host tag groups address_family and snmp (they are not available via Check_MK Web API call)

### Fixed

### Fixe

* push: Do not ignore IP address
* push/pull/match: Check for every object attribute whether it exists before matching it against host attributes
* Configure individual proxy hosts for both i-doit JSON-RPC API and Check_MK Web API
* Verbose mode: Do not print that no objects have been found by blacklisted object types

* push : Ne pas ignorer l'adresse IP
* push/pull/match : Vérifier pour chaque attribut d'objet s'il existe avant de le mettre en correspondance avec les attributs de l'hôte
* Configurez des hôtes proxy individuels pour l'API JSON-RPC i-doit et l'API Web Check_MK.
* Verbose mode : Do not print that no objects have been found by blacklisted object types

## [1.2.0] - 2018-07-09

## [1.2.0] - 2018-07-09

**Important notice:** Before installing/updating this add-on, please update your i-doit instance to the latest version (  
currently 1.11).

**Important notice:** Avant d'installer/de mettre à jour cet add-on, veuillez mettre à jour votre instance i-doit à la dernière version (
actuellement 1.11).

### Added

### Ajouté

* Trigger idoitcmk commands within i-doit category Check_MK (Host)
* delete-hosts: Delete hosts in Check_MK
* push: Activate all changes including foreign changes by configuration setting push.activateForeignChanges

* Trigger idoitcmk commands within i-doit category Check_MK (Host)
* delete-hosts : Delete hosts in Check_MK
* push : Activer tous les changements, y compris les changements étrangers par le paramètre de configuration push.activateForeignChanges

### Changed

### Changed

* Require i-doit pro, version 1.11 or higher

* Requiert i-doit pro, version 1.11 ou supérieure

### Fixed

### Fixe

* push, fetch-objects: Increase performance when using option --include-type
* push, fetch-objects: Include dynamic host tags

* push, fetch-objects : Augmenter les performances lors de l'utilisation de l'option --include-type
* push, fetch-objects : Inclure des balises d'hôte dynamiques

## [1.1.0] - 2018-05-24

## [1.1.0] - 2018-05-24

**Important notice:** Default configuration has changed. Setting pull.identifier has new value user-defined.
See (docs/configuration.md) for details.

**Important notice:** La configuration par défaut a changé. Setting pull.identifier has new value user-defined.
Voir (docs/configuration.md) pour plus de détails.

### Added

### Ajouté

* pull: Import IPv4 addresses and network ports from GNU/Linux and other non-windows systems
* pull: Add speed to network ports
* -v|--verbose: Print number of API requests
* match: Match objects from i-doit with hosts from Check_MK
* pull: Match object with host by user-defined value for attribute Hostname in category Check_MK (Host) > Export parameter

* pull : Importer des adresses IPv4 et des ports réseau depuis GNU/Linux et d'autres systèmes non-Windows
* pull : Ajouter de la vitesse aux ports réseau
* -v|--verbose : Imprimer le nombre de requêtes API
* match : Match objects from i-doit with hosts from Check_MK
* pull : Match object with host by user-defined value for attribute Hostname in category Check_MK (Host) > Export parameter

### Fixed

### Fixe

* pull: Import right amount of CPU cores

* pull : importer le bon nombre de cœurs de CPU

## [1.0.0] - 2018-04-30

## [1.0.0] - 2018-04-30

### Added

### Ajouté

* pull: Import CPU model, manufacturer and max. frequency

* pull : importer le modèle de CPU, le fabricant et la fréquence max.

### Changed

### Changed

* pull: Do not enable monitoring via Livestatus if attribute "site" is not available for Check_MK host

* pull : Do not enable monitoring via Livestatus if attribute "site" is not available for Check_MK host

### Fixed

### Fixe

* pull: Prevent PHP warnings while accessing unknown information

* pull : Prevent PHP warnings while accessing unknown information

## [0.10] - 2018-04-27

## [0.10] - 2018-04-27

**Important note:** There are changes in the configuration settings. Re-configure your application with idoitcmk init.

**Important note:** Il y a des changements dans les paramètres de configuration. Re-configurez votre application avec idoitcmk init.

### Added

### Ajouté

* pull: Allow more than one IPv4 address per network adapter
* pull: Assign IPv4 addresses to physical/logical network ports
* pull: Import information about (virtual) video cards/chips
* New configuration setting pull.attributes.C__CATG__GRAPHIC; defaults to true

* pull : Autoriser plus d'une adresse IPv4 par adaptateur réseau
* pull : Attribuer des adresses IPv4 aux ports réseau physiques/logiques
* pull : Importer des informations sur les cartes/puces vidéo (virtuelles)
* Nouveau paramètre de configuration pull.attributes.C__CATG__GRAPHIC ; defaults to true

### Fixed

### Fixe

* pull: Sometimes host is missing in import cue when there is a match with an object
* pull: Do not forget to add primary IPv4 address to category "Check_MK (Host) > Export parameter"
* push: Do not forget to add host tags based on configuration setting push.autoTagging
* sync-tags: Incomplete host group tags may cause errors
* Configuration setting push.autoTagging: Missing slashes in regular expressions

* pull : parfois l'hôte est manquant dans le cue d'import quand il y a une correspondance avec un objet
* pull : Ne pas oublier d'ajouter l'adresse IPv4 primaire dans la catégorie "Check_MK (Host) > Export parameter".
* push : N'oubliez pas d'ajouter des tags d'hôte en fonction du réglage de configuration push.autoTagging
* sync-tags : Incomplete host group tags may cause errors
* Configuration setting push.autoTagging : Missing slashes in regular expressions

## [0.9] - 2018-04-25

## [0.9] - 2018-04-25

**Important note:** There are changes in the configuration settings. Re-configure your application with idoitcmk init.

**Important note:** Il y a des changements dans les paramètres de configuration. Re-configurez votre application avec idoitcmk init.

### Added

### Ajouté

* pull: Look for IP address configuration in hardware/software inventory from Check_MK
* pull: Assign IP addresses to proper subnets in i-doit
* pull: Use ipaddress attribute as fallback if there are no addresses found in hw/sw inventory
* pull: Create or update link in i-doit object to host in Check_MK
* New configuration setting pull.attributes.C__CATG__ACCESS; defaults to true

* pull : Look for IP address configuration in hardware/software inventory from Check_MK
* pull : Assign IP addresses to proper subnets in i-doit
* pull : Use ipaddress attribute as fallback if there are no addresses found in hw/sw inventory
* pull : Create or update link in i-doit object to host in Check_MK
* Nouveau paramètre de configuration pull.attributes.C__CATG__ACCESS ; defaults to true

### Changed

### Changed

* pull: Convert drive capacity to proper unit

* pull : Convertir la capacité de l'entraînement en unité correcte

### Fixed

### Fixe

* Let user overwrite (not merge) configuration settings pull.identifier and blacklistedObjectTypes
* pull: Do not ignore RAM, CPU sockets and cores

* Permettre à l'utilisateur d'écraser (et non de fusionner) les paramètres de configuration pull.identifier et blacklistedObjectTypes
* pull : Ne pas ignorer la RAM, les sockets CPU et les cœurs

## [0.8] - 2018-04-19

## [0.8] - 2018-04-19

### Added

### Ajouté

* pull: Add static host tags to i-doit objects
* push: Show more details if a host identifier is used by more than one i-doit object

* pull : Ajouter des tags d'hôte statiques aux objets i-doit
* push : Afficher plus de détails si un identifiant d'hôte est utilisé par plus d'un objet i-doit

### Fixed

### Fixe

* pull: Prevent mismatches for i-doit objects and Check_MK hosts
* pull: Handle i-doit objects with missing attributes properly

* pull : Prevent mismatches for i-doit objects and Check_MK hosts
* pull : Gérer correctement les objets i-doit avec des attributs manquants

## [0.7] - 2018-04-19

## [0.7] - 2018-04-19

**Important notes:**

**Important notes:**

1. Activate MK_Livestatus in Check_MK
2. There are changes in the configuration settings. Re-configure your application with idoitcmk init.

1. activer MK_Livestatus dans Check_MK
2. il y a des changements dans les paramètres de configuration. Re-configurez votre application avec idoitcmk init.

### Added

### Ajouté

* push: Look for duplicate identifiers (object title, hostname, FQDN, user-defined) used by objects in i-doit
* status: Check connection to MK_Livestatus and check Check_MK version
* New configuration setting roles.monitoring to define i-doit role for contact groups assigned to objects

* push : Rechercher les identifiants en double (titre de l'objet, nom d'hôte, FQDN, défini par l'utilisateur) utilisés par les objets dans i-doit
* status : Check connection to MK_Livestatus and check Check_MK version
* Nouveau paramètre de configuration roles.monitoring pour définir le rôle i-doit pour les groupes de contact attribués aux objets

### Changed

### Changed

* pull: Remove merge mode because it does not make sense for all categories which can be updated

* pull : Supprimer le mode fusion car il n'a pas de sens pour toutes les catégories qui peuvent être mises à jour

### Fixed

### Fixe

* pull: Archive entries for enabled categories only
* pull: Respect ignore mode
* init: Ask for configuration setting pull.updateObjects

* pull : Archive entries for enabled categories only
* pull : Respect ignore mode
* init : Demander le réglage de la configuration pull.updateObjects

## [0.6] - 2018-04-13

## [0.6] - 2018-04-13

### Added

### Ajouté

* status: Print warning if configuration setting i-doit.url looks insufficient
* push: Print warning if object is not enabled by attribute active in category Check_MK (Host) > Export parameter

* status : Print warning if configuration setting i-doit.url looks insufficient
* push : Print warning if object is not enabled by attribute active in category Check_MK (Host) > Export parameter

### Fixed

### Fixe

* push: PHP warning is thrown while fetching a contact without specified role
* pull/fetch-hosts: Prevent HTTP error code 414 URI Too Long while fetching hw/sw inventory data from Check_MK

* push : PHP warning is thrown while fetching a contact without specified role
* pull/fetch-hosts : Prevent HTTP error code 414 URI Too Long while fetching hw/sw inventory data from Check_MK

## [0.5] - 2018-04-12

## [0.5] - 2018-04-12

This release fixes several issues in required packages.

Cette version corrige plusieurs problèmes dans les paquets requis.

### Changed

### Changed

* Add requirements for PHP modules bzip2 and phar
* Do not look for configuration settings in /root/.idoitcmk/config.json

* Add requirements for PHP modules bzip2 and phar
* Ne pas regarder les paramètres de configuration dans /root/.idoitcmk/config.json

### Fixed

### Fixe

* Avoid duplicates in configuration settings
* Remove backslashes from configuration settings
* Fix several problems while parsing responses from Check_MK Web API

* Eviter les doublons dans les paramètres de configuration
* Supprimer les backslashs des paramètres de configuration
* Correction de plusieurs problèmes lors de l'analyse des réponses de Check_MK Web API

## [0.4] - 2018-04-05

## [0.4] - 2018-04-05

### Added

### Ajouté

* fetch-objects: Read information about objects from i-doit
* fetch-hosts: Read information about hosts from Check_MK

* fetch-objects : Lire des informations sur les objets de i-doit
* fetch-hosts : Lire les informations sur les hôtes de Check_MK

### Changed

### Changed

* Decreased binary file size

* Diminution de la taille des fichiers binaires

## [0.3] - 2018-03-09

## [0.3] - 2018-03-09

### Fixed

### Fixe

* help/init/configtest/print-example-config/print-config/list: Validation error for missing/invalid configuration settings

* help/init/configtest/print-example-config/print-config/list : Erreur de validation pour les paramètres de configuration manquants/invalidés

## [0.2] - 2018-03-08

## [0.2] - 2018-03-08

This release is dedicated to all women.

Cette publication est dédiée à toutes les femmes.

### Added

### Ajouté

* push: Use primary IP address if no other is given
* push/pull: Print more information what is going on when there is a huge amount of objects to be fetched from i-doit
* Print current configuration settings with command print-config
* Validate configuration settings before any command is executed

* push : Utiliser l'adresse IP primaire si aucune autre n'est donnée
* push/pull : Imprimer plus d'informations sur ce qui se passe lorsqu'il y a un grand nombre d'objets à récupérer de i-doit
* Print current configuration settings with command print-config
* Validate configuration settings before any command is executed

### Changed

### Changed

* push: Continue even if any discovery of services failed

* push : continuer même si aucune découverte de services n'a échoué

### Fixed

### Fixe

* pull: Do not try to fetch objects by type from i-doit if there are no objects available
* sync-folders: Keep in mind WATO folders "/" and "" (empty string) are the same
* sync-folders: PHP error when WATO folder is copied from i-doit to Check_MK

* pull : Ne tentez pas de récupérer des objets par type depuis i-doit s'il n'y a pas d'objets disponibles.
* sync-folders : Gardez à l'esprit les dossiers WATO "/" et "" (chaîne vide) sont les mêmes
* sync-folders : PHP error when WATO folder is copied from i-doit to Check_MK

## 0.1 - 2018-03-05

## 0.1 - 2018-03-05

First release!

Première sortie !

### Added

### Ajouté

* push: Generate WATO configuration based on CMDB data
* pull: Import inventory data into CMDB
* sync-agents: Import agents types from Check_MK to i-doit
* sync-contact-groups: Sync contact groups between Check_MK and i-doit
* sync-folders: Sync WATO folders between Check_MK and i-doit
* sync-sites: Import monitoring sites from Check_MK to i-doit
* sync-tags: Import tag groups from Check_MK as static host tags to i-doit
* print-example-config: Print all configuration settings as an example
* More commands: help, list, init, status, configtest, print-example-config, build-test-environment

* push : Générer la configuration WATO basée sur les données CMDB
* pull : Importer les données d'inventaire dans la CMDB
* sync-agents : Importer des types d'agents de Check_MK vers i-doit.
* sync-contact-groups : Synchronisation des groupes de contacts entre Check_MK et i-doit
* sync-folders : Sync WATO folders entre Check_MK et i-doit
* sync-sites : Importation de sites de surveillance de Check_MK vers i-doit.
* sync-tags : Importer des groupes de tags de Check_MK comme tags d'hôte statiques vers i-doit
* print-example-config : Print all configuration settings as an example.
* More commands : help, list, init, status, configtest, print-example-config, build-test-environment
