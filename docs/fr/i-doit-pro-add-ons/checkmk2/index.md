# Checkmk2

## Quoi de neuf (v1.8.5)

### Filtrage dynamique à l'aide d'une liste blanche et d'une liste noire

Avec la dernière mise à jour du logiciel, les utilisateurs ont désormais la possibilité de contrôler précisément le processus d'importation et de synchronisation des applications logicielles. En utilisant des expressions régulières, les utilisateurs peuvent définir exactement quelles applications doivent être incluses ou exclues lors du processus. Une liste blanche permet aux utilisateurs de choisir sélectivement des applications logicielles spécifiques pour le traitement. Par exemple, l'expression régulière `^Mise à jour Windows.*$` garantit que toutes les mises à jour de Windows sont incluses dans le processus, tandis que `^python[0-9.]+$` capture toutes les versions de Python.
Complémentaire à la liste blanche, la liste noire fournit une fonction pour exclure explicitement des applications du processus d'importation et de synchronisation.

De plus, un changement important a été apporté à la structure de configuration dans cette version : Le paramètre `createUnknownSoftwareApplications,` qui était précédemment situé dans la section principale "pull", a été déplacé vers la sous-section nouvellement créée `softwareApplications`. Cette restructuration améliore la clarté et la modularité des paramètres de configuration.
Pour les utilisateurs qui souhaitent se familiariser avec la nouvelle structure de configuration, la commande `./idoitcmk print-example-config` offre un moyen pratique de visualiser un exemple du nouvel agencement des paramètres.

## Quoi de neuf (v1.8.2) 

- Avec la version 1.8.2, CMK2 prend désormais en charge la version 2.2 de Checkmk.
- Si le paramètre de configuration check_mk.version est défini sur "2.2", l'API REST est automatiquement utilisée à la place de l'API Web.
- Si le paramètre de configuration check_mk.version est défini sur "2.1", l'API Web est utilisée sauf s'il existe une section de configuration "check_mk.rest" qui peut être utilisée en parallèle avec la configuration de l'API Web. Dans ce cas, l'API REST est également utilisée pour la version 2.1.
- Cela n'affecte pas les appels à l'API d'inventaire!

<Notes>
    En tant que partenaire Gold de Tribe29, SHD - System-Haus-Dresden GmbH est considéré comme un spécialiste éprouvé en matière de surveillance avec Checkmk. Avec la reprise et le développement ultérieur de l'add-on i-doit pro Checkmk 2, SHD met désormais cette expertise à la disposition des utilisateurs d'i-doit.
</Notes>

<Notes>
    Avec [Checkmk version 2.1.0b1](https://checkmk.com/werk/12389), la structure des données d'inventaire a été modifiée. Il n'est actuellement pas possible de transférer l'inventaire vers i-doit avec l'add-on CheckMK 2 <=1.8<br>
    Avec la version 1.8.1, la [configuration](./configuration.md) doit être ajustée.
</Notes>

Partager des informations entre i-doit et checkmk

## À propos

[i-doit](https://i-doit.com) est une application Web pour la documentation informatique et une CMDB (Base de données de gestion de configuration). Cette application est très utile pour recueillir toutes vos connaissances sur l'infrastructure informatique avec laquelle vous travaillez.

[checkmk](https://mathias-kettner.de/checkmk.html) est une application logicielle de surveillance réseau.

Ensemble, ces deux applications font très bien un travail : collecter et partager des connaissances sur l'état actuel de tous vos hôtes et services en temps réel et dans quel état chaque hôte et service devrait être. Cela est souvent essentiel pour une gestion de services informatiques (ITSM) professionnelle et efficace.

L'application idoitcmk connecte étroitement i-doit avec checkmk. Beaucoup d'informations seront partagées entre eux pour atteindre les objectifs suivants :

- Écrire une fois, lire plusieurs fois : Gardez votre documentation et votre configuration au même endroit.
- Comparez facilement l'état actuel avec l'état cible de tous vos hôtes et services dans votre documentation.
- Configurez votre surveillance réseau en fonction de votre documentation.
- Permettez à votre surveillance réseau de collecter des informations essentielles sur les hôtes et de les réutiliser dans votre documentation.
- Automatisez toutes les tâches ennuyeuses qu'un administrateur système n'aime pas.

Nous savons que chaque organisation informatique a des exigences différentes et des processus variés. C'est pourquoi il est important d'avoir une [application hautement personnalisable](./configuration.md).

## Documentation

-   [Premiers pas](./first-steps.md)
-   [Exigences](./requirements.md)
-   [Installation](./installation.md)
-   [Utilisation](./usage.md)
-   [Configuration](./configuration.md)
-   [Générer une configuration WATO basée sur les données de la CMDB](./generate-wato-configuration-base-on-cmdb-data.md)
-   [Importer des données d'inventaire dans la CMDB](./import-inventory-data-into-cmdb.md)
-   [Faire correspondre des objets de i-doit avec des hôtes de checkmk](./match-objects-from-i-doit-with-hosts-from-checkmk.md)
-   [Lire des informations de i-doit et checkmk](./read-information-from-i-doit-and-checkmk.md)
-   [Importer les types d'agents de checkmk dans i-doit](./sync-checkmk-agents.md)
-   [Synchroniser les groupes de contacts entre checkmk et i-doit](./sync-contact-groups.md)
-   [Synchroniser les dossiers WATO entre checkmk et i-doit](./sync-wato-folder.md)
-   [Importer des sites de surveillance de checkmk dans i-doit](./sync-checkmk-sites.md)
-   [Synchroniser les tags d'hôtes entre checkmk et i-doit](./sync-host-tags.md)
-   [Interface Web i-doit](./i-doit-web-gui.md)
-   [Foire aux questions (FAQ)](./faq.md)

## Journal des modifications 

Tous les changements notables apportés à ce projet seront documentés dans ce fichier.

Le format est basé sur [Keep a Changelog](https://keepachangelog.com/fr/1.0.0/)
et ce projet adhère à [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

### [1.8.5] - 16 avril 2024

### Ajouté

-   Ajout de la liste blanche et noire des applications logicielles
-   Déplacement du paramètre de configuration pull.createUnknownSoftwareApplications vers pull.softwareApplications.createUnknownSoftwareApplications
-   Compatibilité PHP 8.1
-   Amélioration des messages de journalisation
-   Suppression de Checkmk 1.5 de la liste des versions prises en charge
-   Étendre la commande de statut pour afficher les fichiers de configuration utilisés

### Corrections

-   CMK2-99 correction de la création d'hôtes dans un dossier autre que le principal
-   CMK2-88 correction du crash avec l'API d'inventaire et du paramètre de configuration i-doit.limitBatchRequests
-   CMK2-68 correction de l'erreur lors de la synchronisation des balises statiques
-   CMK2-67 correction du crash lors de l'importation de disques

### [1.8.4] - 17 novembre 2023

### Corrections

-   CMK2-49 erreur lors de l'appel à cmdb.category.save
-   CMK2-50 unifier les réponses de dossiers et d'hôtes
-   CMK2-51 correction de l'inventaire pour checkmk <2.1
-   CMK2-53 correction de l'inclusion des balises
-   CMK2-53 suppression des attributs dynamiques obsolètes
-   CMK2-55 gestion correcte des attributs vides dans l'inventaire HW/SW
-   CMK2-56 correction des erreurs lors de la synchronisation des sites
-   CMK2-57 correction des erreurs lors de la synchronisation des balises
-   CMK2-61 correction des erreurs lors de l'enregistrement des groupes de contacts
-   CMK2-62 erreur de validation lors du pull
-   CMK2-63 correction de l'index mac non défini

### [1.8.3] - 2023-09-07 

### Corrections

-   CMK2-41 REST-API: le pull plante lorsque certains attributs d'hôte ou de dossier sont définis
-   CMK2-42 REST-API: le match plante
-   CMK2-44 REST-API: lire correctement les dossiers imbriqués
-   CMK2-45 REST-API: sync-folders plante lors de la création de dossiers imbriqués
-   CMK2-46 CONFIG: nécessiter une configuration rest uniquement si la version de Checkmk est >= 2.2

### [1.8.2] - 2023-08-18 

### Corrections

-   CMK2-41 REST-API: le pull plante lorsque certains attributs d'hôte ou de dossier sont définis
-   CMK2-42 REST-API: le match plante
-   CMK2-44 REST-API: lire correctement les dossiers imbriqués
-   CMK2-45 REST-API: sync-folders plante lors de la création de dossiers imbriqués
-   CMK2-46 CONFIG: nécessiter une configuration rest uniquement si la version de Checkmk est >= 2.2

### [1.8.2] - 2023-08-18 

### Ajouté

-   Ajout de la compatibilité avec checkmk 2.1

### Corrections

-   CMK2-38 empêcher l'exécution de code arbitraire sur l'hôte idoit via une injection de commande dans le champ de nom d'hôte de l'appel ajax

### [1.8.1] - 2022-11-21 

### Corrections

-   Ajout de la compatibilité avec checkmk 2.1

### [1.8.0] - 2022-09-05 

### Ajouté

-   Compatibilité PHP 8.0
-   Compatibilité de conception


### Corrections

-   Message d'erreur lors de la synchronisation des balises
-   La synchronisation des adresses IPv6 et des réseaux génère un message d'erreur


### [1.7.1] - 2021-10-18

### Ajouté

-   Extraire les adresses IPv6 de checkmk vers i-doit


### Corrigé

-   Ajouter/corriger les attributs du processeur de checkmk à i-doit
-   Ajouter/corriger les attributs du système d'exploitation de checkmk à i-doit


### [1.7.0] - 2021-08-09

### Ajouté

-   Implémenter une stratégie de fusion lors de l'extraction de checkmk vers i-doit


### Corrigé

-   Les attributs du groupe de balises statiques 'Tag group' ne peuvent pas être supprimés
-   CheckMK 2 : Les balises ne sont pas affichées avec le groupe de balises dans les rapports


### [1.6.1] – 2021-06-15

### Corrigé

-   Le mot de passe et le nom d'utilisateur doivent être spécifiés (configuration i-doit)
-   Le filtrage sur les attributs de la catégorie Check\_MK (hôte) génère une erreur SQL et la vue en liste ne fonctionne plus
-   L'étiquette d'hôte dynamique "Emplacement" ne peut pas être définie globalement
-   Plugin Pull CheckMK 2 : Erreurs de validation dans les propriétés liées à la boîte de dialogue
-   La configuration de l'état en direct n'est pas facultative
-   Checkmk a répondu avec un message d'erreur : Exception Check\_MK : Clé(s) non valide(s) : nom d'hôte
-   Check\_MK 2 : Message d'erreur strlen() attend un paramètre de type chaîne, null donné
-   Erreur dans les vues en liste lorsque l'add-on Check\_MK 2 a été désinstallé
-   Le système d'exploitation n'est pas attribué
-   Aucun attribut n'est importé pour les applications
-   L'extraction avec le même hôte que le parent se termine en boucle


### [1.6.0] – 2019-12-06 

### Ajouté

-   pull: Importer des applications logicielles
-   pull: Nouveau paramètre de configuration pull.createUnknownSoftwareApplications
-   pull: Nouveau paramètre de configuration pull.attributes.C__CATG__APPLICATION
-   pull: Nouveau paramètre de configuration objectTypes.softwareApplication
-   pull/match: Faire correspondre des objets et des hôtes par numéro de série configuré par le nouvel élément de série dans pull.attributes
-   fetch-hosts: Ajouter la nouvelle option --select pour sélectionner un ou plusieurs attributs, ignorer tout le reste (fonctionne uniquement en mode verbeux)
-   push: Afficher la dernière requête à l'API Checkmk en cas d'échec en tant que message de débogage

### Changé

-   Abandonner le support de la version PHP 5.6
-   Marquer la version PHP 7.0 comme obsolète
-   Recommander PHP 7.3
-   Renommer Check_MK en Checkmk
-   Exiger les modules PHP hash, sockets et SPL
-   pull: Ne pas avertir des identifiants de balises d'hôte vides car ils sont autorisés dans Checkmk
-   pull: Ignorer les adresses et interfaces réseau locales
-   pull: Ne pas ignorer une adresse réseau qui ne peut pas être attribuée à un port réseau
-   push: Créer un site s'il est défini dans i-doit (catégorie Checkmk Host) mais non défini dans Checkmk
-   push: Mettre à jour le site s'il est défini à la fois dans i-doit et dans Checkmk mais qu'il est différent
-   push: Supprimer le site s'il n'est pas défini dans i-doit mais défini dans Checkmk
-   match: Avertir des objets ignorés ou des objets sans identifiants uniques

### Corrigé 

-   fetch-hosts/pull: Récupérer les données d'inventaire HW/SW pour tous les hôtes si le paramètre de configuration i-doit.limitBatchRequests est inférieur au nombre d'hôtes.
-   match/pull/push: Utiliser l'entrée de catégorie principale de la catégorie hostadress pour déterminer le nom d'hôte utilisé par Checkmk
-   pull: Ne pas importer les adresses MAC vides
-   pull: Empêcher l'erreur de validation causée par une entrée de propriété inconnue
-   pull: Afficher le lien vers Checkmk si l'attribut "site" est disponible
-   pull: Valider le type de données de chaque identifiant de balise
-   pull: Ne laisser aucun hôte sans stratégie d'importation (créer, écraser, fusionner ou ignorer)
-   pull: Décider de la stratégie d'importation pour chaque hôte en fonction de la correspondance et des paramètres de configuration
-   pull: Ne pas créer d'objets qui devraient être ignorés
-   push: Utiliser l'adresse IPv4 qui est explicitement marquée comme principale
-   Interface Web: Ajouter les traductions manquantes en anglais

### [1.5.1] – 2019-05-08

Il s'agit d'une version de correction de bugs après avoir reçu des tonnes de retours utiles de nos utilisateurs.

**Avis importants:**

-   Avant d'installer/mettre à jour ce module complémentaire, veuillez mettre à jour vers la dernière version de i-doit (au moins 1.12.2) et le module complémentaire API (au moins 1.10.2).
-   Avant d'utiliser d'autres commandes, exécutez d'abord sync-agents et vérifiez vos objets i-doit pour les valeurs manquantes dans la catégorie Check_MK Host, attribut Agent.

### Ajouté

-   status: Vérifier les versions installées de Check\_MK 2 et de l'extension API
-   sync-agents: Nettoyer les types d'agents dans i-doit qui ne sont pas disponibles dans Check\_MK
-   sync-tags: Valider les tags dans i-doit avant de les pousser vers Check\_MK
-   pull/push: Ajouter de nouveaux paramètres de configuration pour identifier les types d'objets requis par leurs constantes et les objets par leurs titres
-   pull: Afficher les liens vers i-doit et Check\_MK pour chaque objet (uniquement en mode débogage)

### Modifié

-   Nécessite i-doit >=1.12.2
-   Nécessite l'extension API >=1.10.2
-   pull/push/sync-tags/Extras > Check_MK 2 > Tags (statique): Marquer l'attribut Tag ID comme optionnel
-   pull: Ignorer les identifiants de tag vides
-   pull: Si le modèle est donné mais que le vendeur est inconnu, définir le vendeur sur n/a (et vice versa)
-   pull: Prendre en charge plus d'options de bande passante
-   sync-agents: Récupérer les types d'agents directement depuis Check\_MK et ne pas se fier à une liste prédéfinie de types d'agents
-   sync-tags: Ne pas autoriser la synchronisation des identifiants de tag en double, des titres de groupe vides ou des identifiants de tag modifiés
-   sync-tags/sync-agents: Inclure les groupes de tags d'hôtes intégrés, par exemple : type d'agent, SNMP, famille d'adresses IP
-   init: Ne pas forcer à configurer la plupart des paramètres qui ont des valeurs par défaut correctes ; demander gentiment
-   Ajouter un boost de performance lors de la récupération d'objets depuis i-doit en ajustant les appels API
-   Remplacer les méthodes API obsolètes d'i-doit
-   help/--help/-h: Améliorer la documentation incluse
-   Arrêter l'exécution de l'application sur toute erreur PHP
-   Catégorie Check_MK Host: Afficher un message si l'hôte/objet n'est pas trouvé
-   Catégorie Check_MK Host: Supprimer le lien vers le journal des commandes (évite le message d'erreur 403 forbidden)
-   fetch-hosts/fetch-objects/delete-hosts: Sortir avec le code d'état 2 si l'hôte/objet n'est pas trouvé
-   Construire un binaire: Remplacer la compression BZip2 par la compression GZip après un échec de chargement automatique en raison de mauvais checksums


### Corrigé

-   pull: Corriger les appels API pour éviter les erreurs de validation dans les attributs actif, primaire et export_ip
-   pull: Éviter les erreurs lors de l'archivage des données en mode écrasement
-   pull: Ne pas créer de nouveaux objets dans i-doit si le paramètre de configuration pull.createObjects est désactivé
-   pull: Ne pas avertir des balises d'hôte manquantes car elles sont créées dynamiquement par i-doit
-   pull: Ne pas essayer d'ajouter un port réseau avec une bande passante nulle
-   pull: Sélectionner les attributs appropriés pour importer les processeurs
-   pull: Ne pas écraser la sélection du nom d'hôte dans les catégories Check_MK Host et Livestatus si l'objet est mis à jour
-   pull/fetch-hosts: Corriger le filtrage par site Check\_MK avec l'option --include-site
-   pull/match: Ne pas essayer de faire correspondre des objets par une sélection de nom d'hôte non spécifiée dans la catégorie Check_MK Host
-   pull/push/match: Ne pas essayer de créer un objet déjà existant qui correspond à un hôte
-   push: Ne pas oublier de prendre en compte tous les groupes de contacts liés à un hôte si plusieurs groupes sont assignés à un objet
-   push: Ne pas transmettre les identifiants de balise en minuscules
-   push: Valider les identifiants possibles avant d'en utiliser un
-   push: Ne pas transmettre d'objet avec l'option --include-ids qui est désactivée pour l'export
-   push: Ajouter des parents à un hôte existant ou écraser les parents actuels ou les supprimer correctement
-   push: Ajouter ou supprimer un alias à/de l'hôte correctement
-   push/fetch-objects: Éviter l'erreur “Résultat invalide trouvé pour la requête en lot” si --include-ids filtre par des objets inconnus
-   sync-tags: Ne pas oublier de supprimer les balises HTML du titre du groupe de balises avant la synchronisation avec Check\_MK
-   Installation/mise à jour: Accorder l'accès au groupe “Admin” à Extras > Check_MK 2 dans l'interface Web
-   Extras > Check_MK 2 > Balises (statiques): Modifier/supprimer/trier les balises d'hôte statiques dans i-doit
-   Administration > Interfaces / données externes > Surveillance > Check_MK 2: Corriger la mise à jour des paramètres de configuration
-   Administration > Paramètres CMDB > Dialog-Admin: Rendre les attributs dialog+ agent, site et dossier WATO disponibles
-   Catégorie Check_MK Host/Check_MK Tags: Ne pas créer de doublons d'assignations aux types d'objets après la mise à jour
-   Catégorie Check_MK Host: Écrire la sortie complète de la commande incluant STDERR dans le fichier journal
-   Catégorie Check_MK Tags: Rendre les “balises dynamiques” et les “balises CMDB” disponibles dans les rapports


### [1.5.0] – 2018-12-18 

Première publication publique 🎉

**Notes importantes:**

- En raison de plusieurs changements majeurs dans i-doit, nous avons dû augmenter les versions minimales d'i-doit pro et de l'extension API.
- Veuillez exécuter à nouveau idoitcmk init pour mettre à jour le paramètre de configuration pull.attributes.
- Désormais, vous avez besoin d'une licence valide pour cette extension. Téléchargez votre fichier de licence depuis [https://portal.i-doit.com/](https://portal.i-doit.com/).

### Ajouté

- push/pull/match: Valider le nom d'hôte spécifié dans i-doit
- Ajouter plus de pré-vérifications: Veuillez ne pas utiliser de version PHP inférieure à 7.0.0 ni l'utilisateur super "root"

### Changé

- Exiger i-doit pro, au moins en version 1.12
- Exiger l'extension API i-doit, au moins en version 1.10
- Appliquer la vérification de licence
- Supprimer la dépendance de l'ancienne extension Check_MK
- Migrer la configuration des tags de Extras > Check_MK à Extras > Check_MK 2
- Migrer la catégorie Check_MK (Host) > Paramètre d'exportation vers Check_MK Host
- Migrer la catégorie Check_MK (Host) > Tags d'hôte vers Tags Check_MK
- Renommer la constante de catégorie C__CATG__CMK_DEF en C__CATG__CMK2
- Renommer la constante de catégorie C__CATG__CMK_TAG en C__CATG__CMK2_TAG
- Renommer la constante de catégorie C__CMDB__SUBCAT__NETWORK_PORT en C__CATG__NETWORK_PORT dans le paramètre de configuration pull.attributes
- Renommer la constante de catégorie C__CMDB__SUBCAT__NETWORK_INTERFACE_L en C__CATG__NETWORK_LOG_PORT dans le paramètre de configuration pull.attributes

### Corrigé 

-   push: Corrigez l'erreur lors de l'archivage des entrées de catégorie
-   sync-folders: Corrigez les fautes de frappe
-   pull: Acceptez uniquement les adresses MAC EUI-48 (48 bits)

### [1.4.0] - 2018-11-05

Souviens-toi, souviens-toi, du cinquième de novembre… 🎃

### Ajouté 

-   push: Ajoutez l'adresse du tableau de gestion à l'hôte en fonction d'un contrôleur de gestion à distance lié à un objet
-   sync-tags: Importez les balises d'hôte et les groupes de balises d'hôte de i-doit dans Check\_MK
-   sync-tags: Filtrer les objets pour synchroniser leurs balises CMDB dynamiques avec Check\_MK
-   sync-tags: Ne réimportez pas les balises CMDB dynamiques de Check\_MK dans i-doit
-   sync-tags: Activer les modifications (étrangères) après avoir ajouté de nouvelles balises d'hôte à Check\_MK

### Corrigé 

-   Corrigez l'erreur lors de l'installation de l'extension dans le centre d'administration i-doit sans connexion parallèle au locataire i-doit
-   fetch-objects: Imprimez l'URL sans avis PHP

### [1.3.0] - 2018-09-10

**Note importante:** Il y a des changements dans les paramètres de configuration. Reconfigurez votre application avec idoitcmk init.

### Ajouté 

-   push: Validez les expressions régulières dans le paramètre de configuration push.autoTagging
-   status: Testez les extensions PHP chargées
-   Rendre facultatif le fait de récupérer les attributs "effectifs" des hôtes dans Check\_MK, mais l'activer par défaut
-   Ajouter un nouveau paramètre de configuration check_mk.webAPI.effectiveAttributes (défini sur true par défaut)
-   fetch-objects: Imprimez l'URL de chaque objet i-doit
-   fetch-hosts: Imprimez l'URL de chaque hôte Check\_MK
-   push/fetch-objects: Augmenter considérablement les performances si la seule option de filtre est --include-ids

### Modifié 

-   pull: Ignorer les balises d'hôte vides
-   pull: Ignorer les balises d'hôte des groupes address_family et snmp (elles ne sont pas disponibles via l'appel à l'API Web Check\_MK)

### Corrigé 

-   push: Ne pas ignorer l'adresse IP
-   push/pull/match: Vérifier pour chaque attribut d'objet s'il existe avant de le faire correspondre avec les attributs d'hôte
-   Configurer des hôtes proxy individuels pour l'API JSON-RPC i-doit et l'API Web Check\_MK
-   Mode verbeux: Ne pas afficher que aucun objet n'a été trouvé par les types d'objet sur liste noire

### [1.2.0] – 2018-07-09

**Avis important :** Avant d'installer/mettre à jour ce module complémentaire, veuillez mettre à jour votre instance i-doit vers la dernière version (actuellement 1.11).

### Ajouté 

-   Déclencher des commandes idoitcmk dans la catégorie i-doit Check_MK (Hôte)
-   delete-hosts: Supprimer les hôtes dans Check\_MK
-   push: Activer tous les changements, y compris les changements étrangers, en définissant la configuration push.activateForeignChanges

### Modifié 

-   Nécessite i-doit pro, version 1.11 ou supérieure

### Corrigé 

-   push, fetch-objects: Augmenter les performances lors de l'utilisation de l'option --include-type
-   push, fetch-objects: Inclure les balises d'hôte dynamiques

### [1.1.0] – 2018-05-24 

**Avis important :** La configuration par défaut a été modifiée. La définition de pull.identifier a une nouvelle valeur définie par l'utilisateur.

### Ajouté

-   pull : Importer les adresses IPv4 et les ports réseau à partir de GNU/Linux et d'autres systèmes non-Windows
-   pull : Ajouter la vitesse aux ports réseau
-   -v|--verbeux : Imprimer le nombre de requêtes API
-   match : Faire correspondre les objets de i-doit avec les hôtes de Check_MK
-   pull : Faire correspondre un objet avec un hôte par une valeur définie par l'utilisateur pour l'attribut Nom d'hôte dans la catégorie Check_MK (Hôte) > Paramètre d'export

### Corrigé

-   pull : Importer le bon nombre de cœurs de CPU

### [1.0.0] – 2018-04-30 

### Ajouté

-   pull : Importer le modèle de CPU, le fabricant et la fréquence maximale

### Changé

-   pull : Ne pas activer la surveillance via Livestatus si l'attribut "site" n'est pas disponible pour l'hôte Check_MK

### Corrigé

-   pull : Empêcher les avertissements PHP lors de l'accès à des informations inconnues

### [0.10] – 2018-04-27 

**Note importante :** Il y a des changements dans les paramètres de configuration. Reconfigurez votre application avec idoitcmk init.

### Ajouté

-   pull : Autoriser plus d'une adresse IPv4 par adaptateur réseau
-   pull : Assigner des adresses IPv4 aux ports réseau physiques/logiques
-   pull : Importer des informations sur les cartes/chips vidéo (virtuelles)
-   Nouveau paramètre de configuration pull.attributes.C__CATG__GRAPHIC ; par défaut à vrai

### Corrigé 

-   pull: Parfois, l'hôte est manquant dans la file d'attente d'importation lorsqu'il y a une correspondance avec un objet
-   pull: N'oubliez pas d'ajouter l'adresse IPv4 principale à la catégorie "Check\_MK (Hôte) > Exporter les paramètres"
-   push: N'oubliez pas d'ajouter des balises d'hôte en fonction du paramètre de configuration push.autoTagging
-   sync-tags: Des balises de groupe d'hôtes incomplètes peuvent provoquer des erreurs
-   Paramètre de configuration push.autoTagging: Barres obliques manquantes dans les expressions régulières

### [0.9] – 2018-04-25

**Note importante :** Il y a des changements dans les paramètres de configuration. Reconfigurez votre application avec idoitcmk init.

### Ajouté 

-   pull: Recherchez la configuration de l'adresse IP dans l'inventaire matériel/logiciel de Check\_MK
-   pull: Attribuez des adresses IP aux sous-réseaux appropriés dans i-doit
-   pull: Utilisez l'attribut ipaddress comme solution de secours s'il n'y a pas d'adresses trouvées dans l'inventaire hw/sw
-   pull: Créez ou mettez à jour le lien dans l'objet i-doit vers l'hôte dans Check\_MK
-   Nouveau paramètre de configuration pull.attributes.C__CATG__ACCESS; par défaut à vrai

### Changé 

-   pull: Convertir la capacité du lecteur en unité appropriée

### Corrigé 

-   Autoriser à l'utilisateur de remplacer (et non fusionner) les paramètres de configuration pull.identifier et blacklistedObjectTypes
-   pull: Ne pas ignorer la RAM, les sockets CPU et les cœurs

### [0.8] – 2018-04-19

### Ajouté

-   pull: Ajouter des balises d'hôte statiques aux objets i-doit
-   push: Afficher plus de détails si un identifiant d'hôte est utilisé par plus d'un objet i-doit

### Corrigé

-   pull: Éviter les incohérences entre les objets i-doit et les hôtes Check\_MK
-   pull: Gérer correctement les objets i-doit avec des attributs manquants

### [0.7] – 2018-04-19

**Notes importantes:**

1. Activer MK\_Livestatus dans Check\_MK
2. Il y a des changements dans les paramètres de configuration. Reconfigurez votre application avec idoitcmk init.

### Ajouté

-   push: Rechercher des identifiants en double (titre d'objet, nom d'hôte, FQDN, défini par l'utilisateur) utilisés par des objets dans i-doit
-   status: Vérifier la connexion à MK\_Livestatus et vérifier la version de Check\_MK
-   Nouveau paramètre de configuration roles.monitoring pour définir le rôle i-doit pour les groupes de contacts assignés aux objets

### Changé

-   pull: Supprimer le mode de fusion car il n'a pas de sens pour toutes les catégories pouvant être mises à jour

### Corrigé 

-   pull: Archiver les entrées pour les catégories activées uniquement
-   pull: Respecter le mode d'ignorance
-   init: Demander le paramètre de configuration pull.updateObjects

### [0.6] - 2018-04-13

### Ajouté 

-   status: Afficher un avertissement si le paramètre de configuration i-doit.url semble insuffisant
-   push: Afficher un avertissement si l'objet n'est pas activé par l'attribut actif dans la catégorie Check_MK (Host) > Paramètre d'export

### Corrigé 

-   push: Avertissement PHP est lancé lors de la récupération d'un contact sans rôle spécifié
-   pull/fetch-hosts: Empêcher le code d'erreur HTTP 414 URI Too Long lors de la récupération des données d'inventaire hw/sw de Check\_MK

### [0.5] - 2018-04-12

Cette version corrige plusieurs problèmes dans les packages requis.

### Changé 

-   Ajouter des exigences pour les modules PHP bzip2 et phar
-   Ne pas rechercher les paramètres de configuration dans /root/.idoitcmk/config.json

### Corrigé 

-   Éviter les doublons dans les paramètres de configuration
-   Supprimer les barres obliques inverses des paramètres de configuration
-   Corriger plusieurs problèmes lors de l'analyse des réponses de l'API Web Check\_MK

### [0.4] - 2018-04-05

### Ajouté

-   fetch-objects: Lire les informations sur les objets depuis i-doit
-   fetch-hosts: Lire les informations sur les hôtes depuis Check\_MK

### Modifié

-   Taille du fichier binaire réduite

### [0.3] – 2018-03-09

### Corrigé

-   help/init/configtest/print-example-config/print-config/list: Erreur de validation pour les paramètres de configuration manquants/invalides

### [0.2] – 2018-03-08

Cette version est dédiée à toutes les femmes.

### Ajouté

-   push: Utiliser l'adresse IP principale si aucune autre n'est donnée
-   push/pull: Afficher plus d'informations sur ce qui se passe lorsqu'il y a un grand nombre d'objets à récupérer depuis i-doit
-   Afficher les paramètres de configuration actuels avec la commande print-config
-   Valider les paramètres de configuration avant l'exécution de toute commande

### Modifié

-   push: Continuer même si la découverte de services a échoué

### Corrigé

-   pull: Ne pas essayer de récupérer des objets par type depuis i-doit s'il n'y a pas d'objets disponibles
-   sync-folders: Garder à l'esprit que les dossiers WATO "/" et "" (chaîne vide) sont les mêmes
-   sync-folders: Erreur PHP lorsqu'un dossier WATO est copié de i-doit à Check\_MK

### [0.1] – 2018-03-05 

Première version!

### Ajouté

-   push: Générer une configuration WATO basée sur les données de la CMDB
-   pull: Importer les données d'inventaire dans la CMDB
-   sync-agents: Importer les types d'agents de Check\_MK vers i-doit
-   sync-contact-groups: Synchroniser les groupes de contacts entre Check\_MK et i-doit
-   sync-folders: Synchroniser les dossiers WATO entre Check\_MK et i-doit
-   sync-sites: Importer les sites de surveillance de Check\_MK vers i-doit
-   sync-tags: Importer des groupes de tags de Check\_MK en tant que tags d'hôte statiques vers i-doit
-   print-example-config: Imprimer tous les paramètres de configuration comme exemple
-   Plus de commandes: help, list, init, status, configtest, print-example-config, build-test-environment
