# Options et paramètres pour la console

!!! attention "Notes"
    Tous les exemples sur cette page se réfèrent à l'utilisation de l'utilisateur i-doit avec la combinaison nom d'utilisateur/mot de passe : **admin**/**admin**.<br>
    Tous les paramètres sont sensibles à la casse, ce qui signifie que la casse doit être suivie exactement selon les exemples et les spécifications.

## Les gestionnaires suivants sont disponibles pour la Console i-doit

| Commande                                                                   | Description interne du système                                                                                                     |
| ------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- |
| [CompileDocuments](#compiledocuments)                                     | Compiler des documents                                                                                                             |
| [addon-activate](#addon-activate)                                         | Activation des modules complémentaires                                                                                             |
| [addon-deactivate](#addon-deactivate)                                     | Désactivation des modules complémentaires                                                                                          |
| [addon-install](#addon-install)                                           | Installation des modules complémentaires                                                                                          |
| [addon-list](#addon-list)                                                 | Affiche une liste de tous les modules complémentaires installés                                                                    |
| [admin-center-password-reset](#admin-center-password-reset)               | Réinitialiser le mot de passe pour le Centre d'administration                                                                       |
| [auth-cleanup](#auth-cleanup)                                             | Nettoyer le système de droits                                                                                                      |
| [check_mk-export](#check_mk-export)                                       | Exporter les données de configuration pour Check_MK                                                                                |
| [check_mk-livestatus](#check_mk-livestatus)                               | Écrire l'état actuel de Check_MK dans le journal                                                                                  |
| [clear-credentials](#clear-credentials)                                   | Supprimer les informations d'identification de l'utilisateur                                                                       |
| [completion](#completion)                                                 | Générer le script de complétion de shell                                                                                            |
| [contracts-outdated](#contracts-outdated)                                 | Mettre à jour le statut des contrats obsolètes                                                                                     |
| [documents](#documents)                                                   | Créer et exporter des documents                                                                                                   |
| [extend-contracts](#extend-contracts)                                     | Prolonger les contrats avec la dernière date d'annulation dans le passé                                                            |
| [help](#help)                                                             | Afficher l'aide pour une commande                                                                                                 |
| [import-csv](#import-csv)                                                 | Importer des données à partir d'un fichier CSV (utilise un profil d'importation défini dans l'interface graphique)                |
| [import-csvprofiles](#import-csvprofiles)                                 | Liste de tous les profils d'importation CSV                                                                                        |
| [import-hinventory](#import-hinventory)                                   | Importer des données de l'inventaire matériel depuis l'inventaire matériel                                                         |
| [import-jdisc](#import-jdisc)                                             | Importer des données de la découverte JDisc (l'accès au serveur SQL est configuré via l'interface graphique)                      |
| [import-jdiscdiscovery](#import-jdiscdiscovery)                           | Démarrer un scan dans la découverte JDisc (l'accès API est configuré via l'interface graphique)                                    |
| [import-syslog](#import-ocs)                                              | Importer des données d'un syslog dans le journal i-doit                                                                           |
| [import-xml](#import-ocs)                                                 | Importer des données à partir de XML                                                                                              |
| [install](#install)                                                       | Installer l'application i-doit                                                                                                     |
| [jdisc-create-server](#jdisc-create-server)                               | Crée un serveur JDisc, basé sur les entrées fournies                                                                               |
| [ldap-sync](#ldap-sync)                                                   | Importer des personnes et des groupes de personnes depuis un annuaire LDAP ou Active Directory (AD)                             |
| [ldap-syncdn](#ldap-sync)                                                 | Synchroniser à partir d'un LDAP/AD le nom distinct (DN) des utilisateurs (voir la catégorie LDAP)                                |
| [license-add](#license-add)                                               | Ajoute une licence pour i-doit (en cours)                                                                                         |
| [license-assign](#license-assign)                                         | Affecte une licence d'hébergement à un client (en cours)                                                                           |
| [license-import](#license-import)                                         | Importe des licences depuis le serveur i-doit (en cours)                                                                           |
| [license-key](#license-key)                                               | Définit une clé de licence pour i-doit (en cours)                                                                                 |
| [license-list](#license-list)                                             | Liste toutes les licences avec toutes les informations (ID ; produit ; type ; date de début ; date de fin ; objets sous licence ; clients sous licence ; environnement) |
| [license-remove](#license-remove)                                         | Supprime des licences de i-doit                                                                                                   |
| [list](#list)                                                             | Liste toutes les commandes                                                                                                        |
| [logbook-archive](#logbook-archive)                                       | Archiver les entrées du journal                                                                                                   |
| [maintenance](#maintenance)                                               | Envoie des notifications de maintenance planifiée depuis le module d'entretien                                                     |
| [migrate-uploaded-files](#migrate-uploaded-files)                         | Migre les fichiers téléchargés dans i-doit <v1.13 à v.1.14>                                                                        |
| [nagios-export](#nagios-export)                                           | Exporter la configuration Nagios                                                                                                  |
| [nagios-ndoutils](#nagios-ndoutils)                                       | Écrire l'état actuel de Nagios dans le journal                                                                                    |
| [notifications-list](#notifications-list)                                 | Liste tous les types de notification et les notifications pour une utilisation ultérieure                                         |
| [notifications-send](#notifications-send)                                 | Envoyer des notifications par e-mail (les notifications sont configurées dans l'interface graphique)                             |
| [report-export](#report-export)                                           | Exporter un rapport sous forme de fichier                                                                                         |
| [search](#search)                                                         | Rechercher dans i-doit                                                                                                            |
| [search-index](#search-index)                                             | Créer/renouveler l'index de recherche                                                                                             |
| [strip-description-html](#strip-description-html)                         | Avec cette commande, vous pouvez supprimer les balises html dans le champ de description de toutes les catégories et objets      |
| [sync-dynamic-groups](#sync-dynamic-groups)                               | Resynchroniser les membres du groupe dynamique                                                                                   |
| [system-autoincrement](#system-autoincrement)                             | définir l'auto-incrément des tables MariaDB/MySQL sur une valeur entière positive (concerne la structure des données ! À utiliser avec prudence !) |
| [system-categorycleanup](#system-categorycleanup)                         | Purge éventuellement les entrées de catégorie qui sont dans l'état inachevé, archivé ou supprimé                                 |
| [system-checkforupdates](#system-checkforupdates)                         | Rechercher des mises à jour pour i-doit                                                                                           |
| [system-convert-non-innodb-tables](#system-convert-non-innodb-tables)     | Convertit toutes les tables qui ne sont pas en INNODB en INNODB (concerne le codage de la base de données. À utiliser avec prudence !) |
| [system-convert-non-utf8-tables](#system-convert-non-utf8-tables)         | Convertit toutes les tables non-UTF8 en tables UTF8 (concerne le codage de la base de données. À utiliser avec prudence !)          |
| [system-location-fix](#system-location-fix)                               | Exécute la correction de l'emplacement depuis l'interface graphique sur la console                                                |
| [system-maintenancecontract](#system-maintenancecontract)                 | Envoyer un e-mail pour les contrats de maintenance (Fonction obsolète. Veuillez utiliser [notifications-send](#notifications-send)) |
| [system-objectcleanup](#system-objectcleanup)                             | Nettoyer les objets (les objets avec le statut "inachevé", "archivé" ou "supprimé" sont définitivement supprimés)                 |
| [system-objectrelations](#system-objectrelations)                         | Recréer les relations d'objets                                                                                                    |
| [system-refresh-table-configuration](#system-refresh-table-configuration) | Rafraîchit toutes les configurations de liste disponibles (types d'objets et catégories)                                         |
| [system-set-settings](#system-set-settings)                               | Permet de définir les paramètres du Centre d'administration via l'interface en ligne de commande                                  |
| [tenant-create](#tenant-create)                                           | Ajouter un nouveau locataire                                                                                                      |
| [tenant-disable](#tenant-disable)                                         | Désactiver un locataire existant                                                                                                   |
| [tenant-enable](#tenant-enable)                                           | Activer un locataire existant                                                                                                     |
| [tenant-list](#tenant-list)                                               | Liste tous les locataires disponibles                                                                                             |
| [tenant-remove](#tenant-remove)                                           | Supprimer un locataire existant                                                                                                   |
| [uninstall](#uninstall)                                                   | Désinstalle i-doit                                                                                                                |
| [update](#update)                                                         | Installe une mise à jour pour i-doit                                                                                              |
| [workflows-process](#workflows-process)                                   | Traite tous les workflows, envoie des e-mails et crée de nouvelles tâches à partir des listes de contrôle                        |


!!! attention "Fichier de configuration et paramètres --config"
    Il est possible de transmettre du contenu supplémentaire à l'appel via un fichier de configuration. Ce fichier doit être stocké dans le répertoire i-doit src/handler/config/. Un exemple sous la forme du fichier "isys_handler_ldap.ini" peut être trouvé dans le répertoire src/handler/config/examples/.<br>
    Si ce fichier doit être inclus dans le processus, il doit être inclus en utilisant le paramètre --config ou -c.

### CompileDocuments

Compiler des documents

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -t                        | --documentId=DOCUMENTID  | Plusieurs identifiants de document (valeurs multiples autorisées)                             |
| -u                        | --user=USERNAME          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                        |
| -p                        | --password=PASSWORD      | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                   |
| -t                        | --tenant=TENANT-ID       | ID du locataire à utiliser (par défaut : 1)                                                  |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                | Sortie de la version de la console i-doit                                                   |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                             |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                           |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php CompileDocuments --user admin --password admin --tenant 1 --documentId 123 --documentId 321
```

### addon-activate

Active les modules complémentaires installés pour le locataire souhaité

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Nom d'utilisateur de l'administrateur i-doit                                                 |
| -p                        | --password[=PASSWORD]    | Mot de passe de l'administrateur i-doit                                                      |
| -a                        | --addon[=ADDON]          | Identifiant du module complémentaire (valeurs multiples autorisées)                         |
| -t                        | --tenant[=TENANT]        | ID du locataire (valeurs multiples autorisées)                                               |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                | Affichage de la version de la console i-doit                                                 |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                              |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

### addon-deactivate

Désactive les modules complémentaires installés pour le locataire souhaité

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Nom d'utilisateur de l'administrateur i-doit                                                 |
| -p                        | --password[=PASSWORD]    | Mot de passe de l'administrateur i-doit                                                      |
| -a                        | --addon[=ADDON]          | Identifiant du module complémentaire (valeurs multiples autorisées)                         |
| -t                        | --tenant[=TENANT]        | ID du locataire (valeurs multiples autorisées)                                               |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                 |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                | Affichage de la version de la console i-doit                                                 |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                             |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php addon-deactivate --user admin --password admin --tenant 1 --addon api
```

### addon-install

Installe des modules complémentaires pour le locataire souhaité

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Nom d'utilisateur de l'administrateur i-doit                                                 |
| -p                        | --password[=PASSWORD]    | Mot de passe de l'administrateur i-doit                                                      |
| -z                        | --zip=ZIP                | Chemin vers le fichier ZIP du module complémentaire                                          |
| -a                        | --addon[=ADDON]          | Identifiant du module complémentaire (plusieurs valeurs autorisées)                          |
| -t                        | --tenant[=TENANT]        | ID du locataire (plusieurs valeurs autorisées)                                               |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                | Affichage de la version de la console i-doit                                                |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                             |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                           |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

### Exemple d'utilisation

```shell
sudo -u www-data php console.php addon-install --user admin --password admin --tenant 1 --addon api --zip /chemin/vers/le/fichier.zip
```

### addon-list

Affiche une liste de tous les modules complémentaires installés pour le locataire sélectionné

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -a                        | --addon=ADDON            | Identification du module complémentaire                                                     |
| -t                        | --tenant=TENANT-ID       | ID du locataire à utiliser (par défaut : 1)                                                  |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                | Affichage de la version de la console i-doit                                                |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                             |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php addon-list --tenant 1
```

### admin-center-password-reset

Avec cette commande, vous pouvez réinitialiser le mot de passe du Centre d'administration

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                       |
| -p                        | --password=PASSWORD      | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                 |
| -i                        | --tenantId=TENANT-ID     | ID du locataire à utiliser (par défaut : 1)                                                  |
| -c                        | --config=CONFIG-FILE     | Spécification du chemin vers le fichier de configuration                                      |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                | Affichage de la version de la console i-doit                                                |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                             |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

### Exemple d'utilisation

```shell
sudo -u www-data php console.php admin-center-password-reset --user admin --password admin
```

### auth-cleanup

Nettoyer tous les chemins d'authentification

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                        |
| -p                        | --password=MOT DE PASSE  | Mot de passe pour l'authentification de l'utilisateur précédemment spécifié                   |
| -i                        | --tenantId=ID-TENANT     | ID du locataire à utiliser (par défaut : 1)                                                  |
| -c                        | --config=FICHIER-CONFIG  | Spécifie le chemin vers le fichier de configuration                                           |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                | Affiche la version de la console i-doit                                                     |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                              |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                             |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php auth-cleanup --user admin --password admin --tenantId 1
```

### check_mk-export

Effectue une exportation Check_MK

**Options:**

| Paramètre (version courte) | Paramètre (version longue)        | Description                                                                                  |
| ------------------------- | --------------------------------- | -------------------------------------------------------------------------------------------- |
| -l                        | --exportLanguage=EXPORTLANGUAGE   | Définition de la langue utilisée pour l'exportation (par défaut = 0)                         |
| -x                        | --exportStructure=EXPORTSTRUCTURE | Définition de la structure utilisée pour l'exportation (par défaut = 0)                     |
| -u                        | --user=USERNAME                   | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                       |
| -p                        | --password=PASSWORD               | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                  |
| -i                        | --tenantId=TENANT-ID              | ID du locataire du locataire à utiliser (par défaut : 1)                                    |
| -c                        | --config=CONFIG-FILE              | Spécification du chemin d'accès au fichier de configuration                                   |
| -h                        | --help                            | Message d'aide pour afficher des informations supplémentaires                                |
| -q                        | --quiet                           | Mode silencieux pour désactiver la sortie                                                   |
| -V                        | --version                         | Sortie de la version de la console i-doit                                                   |
|                           | --ansi<br>--no-ansi               | Forcer (ou désactiver --no-ansi) la sortie ANSI                                             |
| -n                        | --no-interaction                  | Désactive toutes les questions d'interaction de la console i-doit                           |
| -v / -vv / -vvv           | --verbose                         | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php check_mk-export --user admin --password admin --tenantId 1
```

### check_mk-livestatus

Importe les changements d'état de surveillance de Livestatus vers i-doit

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                         |
| -p                        | --password=PASSWORD      | Mot de passe pour l'authentification de l'utilisateur précédemment spécifié                   |
| -i                        | --tenantId=TENANT-ID     | ID du locataire à utiliser (par défaut : 1)                                                  |
| -c                        | --config=CONFIG-FILE     | Spécifie le chemin du fichier de configuration                                                |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                 |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                | Sortie de la version de la console i-doit                                                    |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                              |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

### Exemple d'utilisation

```shell
sudo -u www-data php console.php check_mk-livestatus --user admin --password admin --tenantId 1
```

### clear-credentials

Il supprime à la fois les attributs `username` et `password` de la catégorie "login" des utilisateurs

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
|                           | --object=OBJECT          | ID de l'objet de l'utilisateur à désactiver                                                  |
| -u                        | --user=USERNAME          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                       |
| -p                        | --password=PASSWORD      | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                 |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                | Sortie de la version de la console i-doit                                                   |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                             |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                           |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php clear-credentials --user admin --password admin --object ObjectID
```

### achèvement {/ * exemples * /}

La commande d'achèvement génère le script d'achèvement de shell requis pour utiliser l'auto-complétion du shell (actuellement seule l'achèvement bash est pris en charge).

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
|                           | --debug                  | Suivre le journal de débogage de l'achèvement                                                  |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                  |
| -q                        | --quit                   | Mode silencieux pour désactiver la sortie                                                     |
| -v                        | --version                | Sortie de la version de la console i-doit                                                   |
|                           | --ansi<br>--no-ansi      | Force la sortie au format ANSI / Désactive la sortie au format ANSI                          |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php achèvement
```

### contrats-obsolètes {/ * exemples * /}

Met à jour le statut des contrats obsolètes

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USER              | Nom d'utilisateur                                                                             |
| -p                        | --password=PASSWORD      | Mot de passe                                                                                 |
| -i                        | --tenantID=TENANTID      | ID du locataire par défaut: 1                                                                |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                  |
| -q                        | --quit                   | Mode silencieux pour désactiver la sortie                                                     |
| -v                        | --version                | Sortie de la version de la console i-doit                                                   |
|                           | --ansi<br>--no-ansi      | Force la sortie au format ANSI / Désactive la sortie au format ANSI                          |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

### documents

Permet de créer des révisions ou d'exporter un ou plusieurs documents

**Options:**

| Paramètre (version courte) | Paramètre (version longue)    | Description                                                                                  |
| ------------------------- | ----------------------------- | -------------------------------------------------------------------------------------------- |
|                           | --create_revision             | Crée une ou plusieurs révisions pour les documents donnés                                    |
|                           | --export                      | Exporte un ou plusieurs documents vers un fichier                                            |
|                           | --id=ID                       | Sélectionne un ou plusieurs documents par ID (valeurs multiples autorisées)                  |
|                           | --all_documents               | Sélectionne tous les documents                                                               |
|                           | --all_category=ALL_CATEGORY   | Sélectionne tous les documents dans la catégorie                                             |
|                           | --all_template=ALL_TEMPLATE   | Sélectionne tous les documents avec un modèle                                               |
|                           | --all_object=ALL_OBJECT       | Sélectionne tous les documents avec un objet                                                |
|                           | --export_format=EXPORT_FORMAT | Format d'export : pdf ou html                                                               |
|                           | --export_folder=EXPORT_FOLDER | Où le document doit-il être exporté ? Le dossier doit exister et être accessible en écriture |
| -u                        | --user=USER                   | Nom d'utilisateur                                                                            |
| -p                        | --password=PASSWORD           | Mot de passe                                                                                |
| -i                        | --tenantID=TENANTID           | ID du locataire par défaut : 1                                                               |
| -h                        | --help                        | Message d'aide pour afficher des informations supplémentaires                                |
| -c                        | --config=CONFIG               | Fichier de configuration                                                                     |
| -q                        | --quit                        | Mode silencieux pour désactiver la sortie                                                   |
| -v                        | --version                     | Affiche la version de la console i-doit                                                    |
|                           | --ansi<br>--no-ansi           | Force la sortie au format ANSI / Désactive la sortie au format ANSI                         |
| -n                        | --no-interaction              | Désactive toutes les questions d'interaction de la console i-doit                           |
| -v / -vv / -vvv           | --verbose                     | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

{ /* examples */ }

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php documents --user admin --password admin
```

### extend-contracts

Étend automatiquement la durée d'exécution des contrats non annulés

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
|                           | --simulate               | Simule l'extension du contrat                                                               |
| -u                        | --user=USER              | Nom d'utilisateur                                                                            |
| -p                        | --password=PASSWORD      | Mot de passe                                                                                 |
| -i                        | --tenantID=TENANTID      | ID du locataire par défaut : 1                                                               |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                |
| -c                        | --config=CONFIG          | Fichier de configuration                                                                     |
| -q                        | --quit                   | Mode silencieux pour désactiver la sortie                                                   |
| -v                        | --version                | Sortie de la version de la console i-doit                                                   |
|                           | --ansi<br>--no-ansi      | Force la sortie au format ANSI / Désactive la sortie au format ANSI                         |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php extend-contracts --user admin --password admin
```

### aide {/examples/}

Utilisé en conjonction avec une autre commande pour afficher son utilisation, ses arguments et ses options

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
|                           | --format=FORMAT          | Définit le format de sortie (txt, xml, json ou md) Par défaut : txt                          |
|                           | --raw                    | Sortie de l'aide de la commande                                                              |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                |
| -q                        | --silencieux             | Mode silencieux pour désactiver la sortie                                                   |
| -V                        | --version                | Sortie de la version de la console i-doit                                                   |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                             |
| -n                        | --sans-interaction       | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbeux                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php aide --format=txt <commande>
```

### importation-csv {/examples/}

Effectue l'importation d'un fichier CSV avec les paramètres d'importation souhaités

**Options:**

| Paramètre (version courte) | Paramètre (version longue)          | Description                                                                                  |
| ------------------------- | --------------------------------- | -------------------------------------------------------------------------------------------- |
|                           | --fichierImport=IMPORTFILE         | Spécifie le fichier et son chemin à utiliser pour l'importation                              |
|                           | --idProfilImport=IMPORTPROFILEID    | Définit le profil avec lequel l'importation doit être effectuée                              |
|                           | --separateurCSV=CSVSEPARATOR       | Définit les séparateurs pour l'importation                                                  |
|                           | --modeValeurMultiple=MULTIVALUEMODE | Définit le mode pour les catégories à valeurs multiples (valeurs possibles : "ligne", "colonne" ou "virgule") |
| -u                        | --utilisateur=USERNAME              | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                      |
| -p                        | --motDePasse=PASSWORD               | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                 |
| -i                        | --idLocataire=ID-LOCATAIRE          | ID du locataire à utiliser (par défaut : 1)                                                |
| -h                        | --aide                            | Message d'aide pour afficher des informations supplémentaires                                |
| -q                        | --silencieux                       | Mode silencieux pour désactiver la sortie                                                   |
| -V                        | --version                         | Sortie de la version de la console i-doit                                                   |
|                           | --ansi<br>--no-ansi               | Forcer (ou désactiver --no-ansi) la sortie ANSI                                             |
| -n                        | --sans-interaction                | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbeux                         | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

### import-csvprofiles {#examples}

Renvoie une liste des profils d'importation pour l'importation CSV

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                         |
| -p                        | --password=MOT DE PASSE  | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                   |
| -i                        | --tenantId=ID_LOCATAIRE  | ID du locataire à utiliser (par défaut : 1)                                                   |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                 |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                     |
| -V                        | --version                | Sortie de la version de la Console i-doit                                                   |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                              |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la Console i-doit                            |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php import-csvprofiles --user admin --password admin --tenantId 1
```

### import-hinventory

Effectue une importation d'inventaire h à partir d'un fichier XML compatible

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
|                           | --importFile=IMPORTFILE  | Spécifie le fichier et son chemin à utiliser pour l'importation                               |
|                           | --usage                  | Informations détaillées sur l'utilisation de la commande                                      |
|                           | --objectType=OBJECTTYPE  | Importe le type d'objet spécifié                                                             |
|                           | --objectId=OBJECTID      | Importe uniquement l'objet spécifié                                                          |
| -f                        | --force                  | Force la mise à jour des objets existants mais écrase les catégories importées                |
| -u                        | --user=USERNAME          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                        |
| -p                        | --password=PASSWORD      | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                  |
| -i                        | --tenantId=TENANT-ID     | ID du locataire à utiliser (par défaut : 1)                                                 |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                   |
| -V                        | --version                | Affichage de la version de la console i-doit                                                |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                             |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                           |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

### import-jdisc

Effectue une importation JDisc vers i-doit.

**Options:**

| Paramètre (version courte) | Paramètre (version longue)         | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| ------------------------- | ----------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| -r                        | --profile=PROFILE                   | Spécifie/sélectionne le profil JDisc à utiliser pour l'importation                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| -g                        | --group=GROUP                       | Spécifie/sélectionne l'ID du groupe à utiliser pour l'importation                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| -x                        | --mode=MODE                         | Sélectionne le mode d'importation.<br>**1**: "Ajouter": L'importation ne créera que de nouveaux objets.<br>**2**: "Mettre à jour": L'importation tentera de mettre à jour les objets déjà existants.<br>**3**: "Écraser": Les objets existants sont mis à jour, de nouveaux objets sont créés en plus. Les contenus des catégories à valeurs multiples sont d'abord complètement supprimés puis recréés dans la base de données.<br>**4**: "Mettre à jour (nouveaux découverts)": Le mode correspond à "Mettre à jour", mais tous les liens connus entre les objets i-doit et JDisc sont supprimés et reconnectés après une vérification.<br>**5**: "Écraser (nouveaux découverts)": L'importation efface toutes les clés d'identification existantes avant que le mode Écraser ne soit déclenché.<br>**6**: "Créer uniquement les appareils nouvellement scannés": L'importation crée uniquement les appareils jdisc nouvellement scannés, les existants sont ignorés.<br>**7**: "Mettre à jour (seuls les objets existants)": Seuls les objets existants sont mis à jour. Aucun nouvel objet n'est créé. |
| -s                        | --server=SERVER                     | Entrez l'ID du serveur pour le sélectionner                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
| -o                        | --overwriteHost                     | Spécifie si les adresses IP d'hôte se chevauchent doivent être écrasées                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| -l                        | --detailedLogging[=DETAILEDLOGGING] | Augmente le niveau de journalisation:<br>**1**: faible niveau de journalisation, seuls les avis et les avertissements sont enregistrés<br>**2**: en plus du faible niveau de journalisation, les erreurs sont enregistrées<br>**3**: en plus du niveau de journalisation normal, les messages de débogage sont enregistrés. (Intensif en mémoire)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| -b                        | --regenerateSearchIndex             | Renouvelle automatiquement l'index de recherche                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
|                           | --listProfiles                      | Crée une liste des profils disponibles                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
| -u                        | --user=USERNAME                     | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| -p                        | --password=PASSWORD                 | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| -i                        | --tenantId=TENANT-ID                | ID du locataire à utiliser (par défaut : 1)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| -c                        | --config=CONFIG-FILE                | Spécifie le chemin vers le fichier de configuration                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
| -h                        | --help                              | Message d'aide pour afficher des informations supplémentaires                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| -q                        | --quiet                             | Mode silencieux pour désactiver la sortie                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| -V                        | --version                           | Sortie de la version de la console i-doit                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
|                           | --ansi<br>--no-ansi                 | Forcer (ou désactiver --no-ansi) la sortie ANSI                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
| -n                        | --no-interaction                    | Désactive toutes les questions d'interaction de la console i-doit                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
| -v / -vv / -vvv           | --verbose                           | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                

### import-jdiscdiscovery {#import-jdiscdiscovery}

Déclenche une tâche de découverte JDisc.

**Options:**

| Paramètre (version courte) | Paramètre (version longue)          | Description                                                                                  |
| ------------------------- | ------------------------------------- | -------------------------------------------------------------------------------------------- |
| -s                        | --server=SERVEUR                     | Sélection du serveur JDisc                                                                   |
| -j                        | --discoveryJob=TÂCHEDÉCOUVERTE       | Sélection de la tâche de découverte (Standard : "Découvrir tout")                           |
| -d                        | --deviceHostname=NOMHÔTEAPPAREIL     | Sélection de l'appareil par nom d'hôte                                                      |
| -a                        | --deviceHostAddress=ADRESSEHÔTEAPPAREIL | Sélection de l'appareil en utilisant l'adresse IP de l'hôte                                 |
| -l                        | --showLog                             | Affiche le journal pendant les découvertes                                                  |
| -u                        | --user=UTILISATEUR                   | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                      |
| -p                        | --password=MOTDEPASSE                | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                 |
| -i                        | --tenantId=IDLOCATAIRE               | ID du locataire à utiliser (par défaut : 1)                                                |
| -c                        | --config=FICHIERCONFIGURATION        | Spécification du chemin d'accès au fichier de configuration                                  |
| -h                        | --help                                | Message d'aide pour afficher des informations supplémentaires                               |
| -q                        | --quiet                               | Mode silencieux pour désactiver la sortie                                                  |
| -V                        | --version                             | Affichage de la version de la console i-doit                                               |
|                           | --ansi<br>--no-ansi                   | Forcer (ou désactiver --no-ansi) la sortie ANSI                                            |
| -n                        | --no-interaction                      | Désactive toutes les questions d'interaction de la console i-doit                           |
| -v / -vv / -vvv           | --verbose                             | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

### import-syslog

Importe le contenu d'un fichier texte du serveur Syslog dans le journal i-doit.

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=UTILISATEUR          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                              |
| -p                        | --password=MOT DE PASSE      | Mot de passe pour l'authentification de l'utilisateur précédemment spécifié                                 |
| -i                        | --tenantId=ID-LOCATAIRE     | ID du locataire à utiliser (par défaut : 1)                                              |
| -c                        | --config=FICHIER-CONFIG     | Spécifie le chemin vers le fichier de configuration                                                |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                              |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                              |
| -V                        | --version                | Sortie de la version de la console i-doit                                                         |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                                     |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                                     |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

{/*examples*/}

### import-xml

Effectue l'importation d'un fichier XML dans i-doit

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
|                           | --importFile=IMPORTFILE  | Spécification du fichier d'importation et de son chemin                                       |
|                           | --usage                  | Informations détaillées sur l'utilisation de la commande                                      |
| -u                        | --user=USERNAME          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                         |
| -p                        | --password=PASSWORD      | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                   |
| -i                        | --tenantId=TENANT-ID     | ID du locataire à utiliser (par défaut : 1)                                                  |
| -c                        | --config=CONFIG-FILE     | Spécification du chemin vers le fichier de configuration                                      |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                 |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                | Affichage de la version de la console i-doit                                                |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                              |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

{/*examples*/}

### Installer

Installer l'application i-doit

**Options:**

| Paramètre (version courte) | Paramètre (version longue)       | Description                                                                                  |
| ------------------------- | --------------------------------- | -------------------------------------------------------------------------------------------- |
| -u                        | --root-user=ROOT-USER             | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                        |
| -p                        | --root-password[=ROOT-PASSWORD]   | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                   |
|                           | --host=HOST                       | Nom d'utilisateur de l'utilisateur DB privilégié [par défaut: "root"]                          |
|                           | --port=PORT                       | Port de connexion DB [par défaut: 3306]                                                      |
| -d                        | --database=DATABASE               | Nom de la base de données du système i-doit [par défaut: "idoit_system_temp"]                |
| -U                        | --user=USER                       | Nom d'utilisateur de la base de données système i-doit [par défaut: "idoit"]                 |
| -P                        | --password[=PASSWORD]             | Mot de passe de la base de données système i-doit                                            |
|                           | --admin-password[=ADMIN-PASSWORD] | Mot de passe pour le centre d'administration i-doit                                          |
| -l                        | --license-server=LICENSE-SERVER   | Chemin du serveur de licences i-doit [par défaut: "https://lizenzen.i-doit.com"]             |
| -k                        | --key[=KEY]                       | Clé de licence pour i-doit                                                                   |
| -h                        | --help                            | Message d'aide pour afficher des informations supplémentaires                                 |
| -q                        | --quiet                           | Mode silencieux pour désactiver la sortie                                                   |
| -V                        | --version                         | Sortie de la version de la console i-doit                                                   |
|                           | --ansi<br>--no-ansi               | Forcer (ou désactiver --no-ansi) la sortie ANSI                                             |
| -n                        | --no-interaction                  | Désactive toutes les questions d'interaction de la console i-doit                           |
| -v / -vv / -vvv           | --verbose                         | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

### Exemple d'utilisation

```shell
sudo -u www-data php console.php install
```

### jdisc-create-server

Crée un serveur JDisc, basé sur les entrées fournies.

**Options:**

| Paramètre (Forme courte) | Paramètre (Forme longue)         | Description                                                                                  |
| ------------------------ | -------------------------------- | --------------------------------------------------------------------------------------------- |
|                          | --default                        | Définir comme serveur par défaut                                                              |
|                          | --title=[TITRE]                  | Nom de la configuration du serveur JDisc [par défaut: "Serveur JDisc"]                        |
|                          | --jdisc-host=[HÔTE-JDISC]        | Hôte JDisc [par défaut: "localhost"]                                                         |
|                          | --jdisc-port=[PORT-JDISC]        | Port JDisc [par défaut: 25321]                                                               |
|                          | --jdisc-database=[BASE-JDISC]    | Base de données JDisc [par défaut: "inventaire"]                                             |
|                          | --jdisc-username=[UTILISATEUR-JDISC] | Nom d'utilisateur de la base de données JDisc [par défaut: "postgresro"]                   |
|                          | --jdisc-password=[MOT-DE-PASSE-JDISC] | Mot de passe de la base de données JDisc                                                 |
|                          | --allow-older-imports            | Autoriser l'importation d'une version plus ancienne de JDisc [par défaut: non]               |
| -i                       | --tenantId=ID-LOCATAIRE          | ID du locataire à utiliser (par défaut: 1)                                                  |
| -c                       | --config=FICHIER-CONFIGURATION   | Spécifier le chemin vers le fichier de configuration                                          |
| -h                       | --help                           | Message d'aide pour afficher des informations supplémentaires                                 |
| -q                       | --quiet                          | Mode silencieux pour désactiver la sortie                                                   |
| -V                       | --version                        | Affichage de la version de la console i-doit                                                |
|                          | --ansi<br>--no-ansi              | Forcer (ou désactiver --no-ansi) la sortie ANSI                                              |
| -n                       | --no-interaction                 | Désactive toutes les questions d'interaction de la console i-doit                             |
| -v / -vv / -vvv          | --verbose                        | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

### ldap-sync

Synchronise les utilisateurs de LDAP vers i-doit et les crée en tant qu'objets de personne.

**Options:**

| Paramètre (version courte) | Paramètre (version longue)                          | Description                                                                                                                                                                             |
| ------------------------- | ------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| -l                        | --ldapServerId=LDAPSERVERID                       | Spécifie l'ID du serveur LDAP à partir duquel les utilisateurs doivent être synchronisés  <br>Si aucun ldapServerId n'est spécifié, tous les serveurs actifs sont synchronisés               |
|                           | --dumpConfig                                      | Affiche la configuration actuelle à partir du fichier de configuration                                                                                                                   |
|                           | --connectionRankingActive=CONNECTIONRANKINGACTIVE | Configuration qui réactive toutes les connexions de tous les utilisateurs réactivés.  <br>La configuration par défaut est le paramètre expert 'ldap.connection-ranking-active' (Tenant-wide) avec la valeur '1'. |
|                           | --dropExistingRelations=DROPEXISTINGRELATIONS     | Si un groupe ldap existant a des utilisateurs membres du groupe en dehors de ces utilisateurs synchronisés, ceux-ci seront purgés.  <br>1 = supprimer les relations existantes, 0 = ignorer les relations existantes par défaut : 0       |
|                           | --archiveDeletedGroups=ARCHIVEDELETEDGROUPS       | Si un groupe ldap supprimé reste dans i-doit, l'archiver ou le supprimer. par défaut : false                                                                                                         |
|                           | --useDefaultTemplates                             | Utiliser des modèles par défaut, chaque fois qu'un objet est créé par cette commande (v1.18)                                                                                                              |
| -u                        | --user=USERNAME                                   | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                                                                                                                         |
| -p                        | --password=PASSWORD                               | Mot de passe pour l'authentification de l'utilisateur précédemment spécifié                                                                                                                            |
| -i                        | --tenantId=TENANT-ID                              | ID du locataire à utiliser (par défaut : 1)                                                                                                                                         |
| -c                        | --config=CONFIG-FILE                              | Spécifie le chemin vers le fichier de configuration                                                                                                                                           |
| -h                        | --help                                            | Message d'aide pour afficher des informations supplémentaires                                                                                                                                         |
| -q                        | --quiet                                           | Mode silencieux pour désactiver la sortie                                                                                                                                                         |
| -V                        | --version                                         | Sortie de la version de la console i-doit                                                                                                                                                    |
|                           | --ansi<br>--no-ansi                               | Forcer (ou désactiver --no-ansi) la sortie ANSI                                                                                                                                                |
| -n                        | --no-interaction                                  | Désactive toutes les questions d'interaction de la console i-doit                                                                                                                                |
| -v / -vv / -vvv           | --verbose                                         | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage)                                                                                            |

### ldap-syncdn

Synchronise les DNs LDAP avec les utilisateurs i-doit

**Options:**

| Paramètre (version courte) | Paramètre (version longue)  | Description                                                                                  |
| ------------------------- | --------------------------- | -------------------------------------------------------------------------------------------- |
|                           | --ldapServerId=LDAPSERVERID | Spécifie le serveur LDAP via l'ID                                                           |
| -o                        | --objectType=OBJECTTYPE     | Spécifie le type d'objet en tant que constante (par exemple C__OBJTYPE__SERVER)             |
| -u                        | --user=USERNAME             | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                       |
| -p                        | --password=PASSWORD         | Mot de passe pour l'authentification de l'utilisateur précédemment spécifié                  |
| -i                        | --tenantId=TENANT-ID        | ID du locataire à utiliser (par défaut : 1)                                                 |
| -h                        | --help                      | Message d'aide pour afficher des informations supplémentaires                                |
| -q                        | --quiet                     | Mode silencieux pour désactiver la sortie                                                   |
| -V                        | --version                   | Affichage de la version de la console i-doit                                                |
|                           | --ansi<br>--no-ansi         | Forcer (ou désactiver --no-ansi) la sortie ANSI                                             |
| -n                        | --no-interaction            | Désactive toutes les questions d'interaction de la console i-doit                           |
| -v / -vv / -vvv           | --verbose                   | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

### Exemple d'utilisation

```shell
sudo -u www-data php console.php ldap-syncdn --user admin --password admin --tenantId 1 --ldapServerId 1
```

### liste

Liste toutes les commandes. Le format de la sortie peut être modifié.

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                   |
| ------------------------- | ------------------------ | ------------------------------------------------------------- |
|                           | --format=FORMAT          | Définit le format de sortie (txt, xml, json ou md) Par défaut : txt |
|                           | --raw                    | Affiche l'aide de la commande                                  |
| Paramètre (version courte) | Paramètre (version longue) | Description                                                   |
| ------------------------- | ------------------------ | ------------------------------------------------------------- |
|                           | --format=FORMAT          | Définit le format de sortie (txt, xml, json ou md) Par défaut : txt |
|                           | --raw                    | Affiche l'aide de la commande                                  |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php list --format=txt
```

### license-add

Ajoute une licence pour i-doit

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                       |
| -p                        | --password=PASSWORD      | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                  |
| -l                        | --license=LICENSE        | Chemin vers le fichier de licence (/chemin/vers/fichier/license.key)                         |
| -t                        | --tenant=TENANT-ID       | ID du locataire à utiliser (par défaut : 1)                                                 |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                   |
| -V                        | --version                | Affiche la version de la console i-doit                                                    |
|                           | --ansi<br>--no-ansi      | Force (ou désactive --no-ansi) la sortie ANSI                                               |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                           |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

### Attribution de licence {/ * Exemple d'utilisation * /}

```shell
sudo -u www-data php console.php license-add --user admin --password admin --tenantId 1 --license /chemin/vers/fichier/license.key
```

### license-assign

Attribue une licence d'hébergement à un locataire

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                       |
| -p                        | --password=PASSWORD      | Mot de passe pour l'authentification de l'utilisateur précédemment spécifié                  |
| -i                        | --tenantId=TENANT-ID     | ID du locataire à utiliser (par défaut : 1)                                                 |
| -c                        | --count=COUNT            | Nombre d'objets à licencier. Par défaut : 0                                                  |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                   |
| -V                        | --version                | Sortie de la version de la console i-doit                                                   |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                             |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                           |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

### Exemple d'utilisation

```shell
sudo -u www-data php console.php license-assign --user admin --password admin --tenantId 1 --count 1000
```

### license-import

Importe des licences depuis le serveur de licences i-doit

**Options:**

| Paramètre (version courte) | Paramètre (version longue)     | Description                                                                                  |
| ------------------------- | ------------------------------- | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME                 | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                        |
| -p                        | --password=PASSWORD             | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                   |
| -l                        | --license-server=LICENSE-SERVER | Chemin d'accès au serveur de licences i-doit Par défaut : "<https://lizenzen.i-doit.com>"    |
| -h                        | --help                          | Message d'aide pour afficher des informations supplémentaires                                 |
| -q                        | --quiet                         | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                       | Sortie de la version de la console i-doit                                                   |
|                           | --ansi<br>--no-ansi             | Forcer (ou désactiver --no-ansi) la sortie ANSI                                              |
| -n                        | --no-interaction                | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbose                       | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php license-import --user admin --password admin --license-server https://lizenzen.i-doit.com
```

### clé-de-licence

Définit une clé de licence pour i-doit

**Options:**

| Paramètre (version courte) | Paramètre (version longue)     | Description                                                                                             |
| ------------------------- | ------------------------------- | ------------------------------------------------------------------------------------------------------- |
| -u                        | --utilisateur=UTILISATEUR       | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                                   |
| -p                        | --mot-de-passe=MOT-DE-PASSE     | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                             |
| -l                        | --serveur-de-licence=SERVEUR-DE-LICENCE | Chemin vers le serveur de licence i-doit Par défaut : "<https://lizenzen.i-doit.com(https://lizenzen.i-doit.com)>" |
| -k                        | --clé=CLÉ                       | Clé de licence pour i-doit                                                                             |
| -h                        | --aide                          | Message d'aide pour afficher des informations supplémentaires                                           |
| -q                        | --silencieux                    | Mode silencieux pour désactiver la sortie                                                              |
| -V                        | --version                       | Sortie de la version de la console i-doit                                                              |
|                           | --ansi<br>--no-ansi             | Forcer (ou désactiver --no-ansi) la sortie ANSI                                                        |
| -n                        | --sans-interaction              | Désactive toutes les questions d'interaction de la console i-doit                                      |
| -v / -vv / -vvv           | --verbeux                       | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage)         |

### Exemple d'utilisation

```shell
sudo -u www-data php console.php license-key --user admin --password admin --license-server https://lizenzen.i-doit.com --key license
```

### license-list

Liste toutes les licences installées

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -t                        | --tenant=TENANT          | ID du locataire assigné pour filtrer (valeurs multiples autorisées)                          |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                 |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                | Sortie de la version de la console i-doit                                                   |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                             |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php license-list --tenant 1
```

### license-remove

Supprime une licence de i-doit

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                        |
| -p                        | --password=PASSWORD      | Mot de passe pour l'authentification de l'utilisateur précédemment spécifié                   |
| -l                        | --license=LICENSE        | ID de licence de la licence à supprimer                                                      |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                 |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                | Sortie de la version de la console i-doit                                                   |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                             |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php license-remove --user admin --password admin --license LicenseID
```

### logbook-archive

Archive les entrées du journal avec un âge défini, selon les paramètres sur l'interface i-doit.

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                         |
| -p                        | --password=PASSWORD      | Mot de passe pour l'authentification de l'utilisateur précédemment spécifié                   |
| -i                        | --tenantId=TENANT-ID     | ID du locataire à utiliser (par défaut : 1)                                                   |
| -c                        | --config=CONFIG-FILE     | Spécifie le chemin vers le fichier de configuration                                           |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                 |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                | Affichage de la version de la console i-doit                                                 |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                              |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

### Exemple d'utilisation

```shell
sudo -u www-data php console.php logbook-archive --user admin --password admin --tenantId 1
```

### maintenance

Envoie des e-mails pour la maintenance planifiée selon les périodes spécifiées dans l'[add-on Maintenance](../../../i-doit-pro-add-ons/maintenance.md).

**Options :**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                       |
| -p                        | --password=PASSWORD      | Mot de passe pour l'authentification de l'utilisateur précédemment spécifié                  |
| -i                        | --tenantId=TENANT-ID     | ID du locataire à utiliser (par défaut : 1)                                                 |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                   |
| -V                        | --version                | Affichage de la version de la Console i-doit                                               |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                             |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la Console i-doit                            |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php maintenance --user admin --password admin --tenantId 1
```

### migrer-fichiers-uploadés

Migre les fichiers téléchargés dans i-doit <v1.13 à v.1.14>

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -h                        | --aide                   | Message d'aide pour afficher des informations supplémentaires                                  |
| -q                        | --silencieux             | Mode silencieux pour désactiver la sortie                                                   |
| -V                        | --version                | Affichage de la version de la console i-doit                                                |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                             |
| -n                        | --pas-d-interaction      | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbeux                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php migrer-fichiers-uploadés
```

### exportation-nagios

!!!info
    Cette commande n'est disponible que si le module complémentaire Nagios est installé

Exporte les paramètres Nagios et les objets i-doit vers les fichiers de configuration Nagios

**Options:**

| Paramètre (version courte) | Paramètre (version longue)    | Description                                                                                  |
| ------------------------- | --------------------------- | -------------------------------------------------------------------------------------------- |
|                           | --idHoteNagios=IDHOTENAGIOS | Spécifie l'hôte Nagios à utiliser pour l'exportation                                          |
|                           | --valider                  | Valide les fichiers d'exportation                                                            |
| -u                        | --utilisateur=UTILISATEUR  | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                       |
| -p                        | --motDePasse=MOTDEPASSE    | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                  |
| -i                        | --idLocataire=IDLOCATAIRE  | ID du locataire à utiliser (par défaut : 1)                                                 |
| -c                        | --config=FICHIER-CONFIG    | Spécifie le chemin du fichier de configuration                                               |
| -h                        | --aide                     | Message d'aide pour afficher des informations supplémentaires                                  |
| -q                        | --silencieux               | Mode silencieux pour désactiver la sortie                                                   |
| -V                        | --version                  | Affichage de la version de la console i-doit                                                |
|                           | --ansi<br>--no-ansi        | Forcer (ou désactiver --no-ansi) la sortie ANSI                                             |
| -n                        | --pas-d-interaction        | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbeux                  | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

### nagios-ndoutils

!!!info
    Cette commande n'est disponible que si l'extension Nagios est installée

Importe les changements d'état de surveillance depuis les NDOUtils dans le journal i-doit.

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                         |
| -p                        | --password=PASSWORD      | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                    |
| -i                        | --tenantId=TENANT-ID     | ID du locataire à utiliser (par défaut : 1)                                                  |
| -c                        | --config=CONFIG-FILE     | Spécifie le chemin vers le fichier de configuration                                           |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                 |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                | Affichage de la version de la console i-doit                                                 |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                              |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

### Liste des notifications {/ * exemples *}

Liste tous les types de notifications et les notifications pour une utilisation ultérieure

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                         |
| -p                        | --password=PASSWORD      | Mot de passe pour l'authentification de l'utilisateur précédemment spécifié                    |
| -i                        | --tenantId=TENANT-ID     | ID du locataire à utiliser (par défaut : 1)                                                   |
| -c                        | --config=CONFIG-FILE     | Spécifie le chemin vers le fichier de configuration                                           |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                 |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                     |
| -V                        | --version                | Sortie de la version de la console i-doit                                                    |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                               |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                             |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

### notifications-send {#notifications-send}

Envoie les notifications configurées sur l'interface i-doit

**Options:**

| Paramètre (version courte) | Paramètre (version longue)                   | Description                                                                                  |
| ------------------------- | --------------------------------------------- | -------------------------------------------------------------------------------------------- |
|                           | --notification-ids=NOTIFICATION-IDS           | Transmettre des IDs de notification spécifiques à envoyer 1,2,3                               |
|                           | --notification-type-ids=NOTIFICATION-TYPE-IDS | Transmettre des IDs de type de notification spécifiques à envoyer 1,2,3                       |
| -u                        | --user=USERNAME                               | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                        |
| -p                        | --password=MOT DE PASSE                      | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                   |
| -i                        | --tenantId=ID_LOCATAIRE                      | ID du locataire à utiliser (par défaut : 1)                                                  |
| -c                        | --config=FICHIER_CONFIG                      | Spécifier le chemin vers le fichier de configuration                                          |
| -h                        | --help                                        | Message d'aide pour afficher des informations supplémentaires                                 |
| -q                        | --quiet                                       | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                                     | Affichage de la version de la console i-doit                                                |
|                           | --ansi<br>--no-ansi                           | Forcer (ou désactiver --no-ansi) la sortie ANSI                                              |
| -n                        | --no-interaction                              | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbose                                     | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php notifications-send --user admin --password admin --tenantId 1
```

### export-rapport

Exporte un rapport dans le format de fichier souhaité.

**Options:**

| Paramètre (version courte) | Paramètre (version longue)     | Description                                                                                  |
| ------------------------- | ------------------------------- | -------------------------------------------------------------------------------------------- |
| -r                        | --reportId=REPORTID             | ID du rapport à exporter                                                                     |
| -d                        | --exportPath=EXPORTPATH         | Chemin vers lequel l'exportation doit avoir lieu                                             |
| -f                        | --exportFilename=EXPORTFILENAME | Nom du fichier d'exportation sans extension de fichier                                       |
| -t                        | --exportFileType=EXPORTFILETYPE | Type de fichier d'exportation. Valeurs possibles : csv, txt, pdf, xml (Par défaut : "csv")   |
| -u                        | --user=USERNAME                 | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                        |
| -p                        | --password=PASSWORD             | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                   |
| -i                        | --tenantId=TENANT-ID            | ID du locataire à utiliser (par défaut : 1)                                                  |
| -c                        | --config=CONFIG-FILE            | Spécifie le chemin vers le fichier de configuration                                           |
| -h                        | --help                          | Message d'aide pour afficher des informations supplémentaires                                 |
| -q                        | --quiet                         | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                       | Sortie de la version de la console i-doit                                                   |
|                           | --ansi<br>--no-ansi             | Forcer (ou désactiver --no-ansi) la sortie ANSI                                              |
| -n                        | --no-interaction                | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbose                       | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php report-export --user admin --password admin --tenantId 1 --reportId 27 --exportPath /var/www/exported-reports/ --exportFilename Report-Buchhaltung-November-2019 --exportFileType csv
```

### recherche

Recherche du contenu dans la documentation

**Options:**

| Paramètre (version courte) | Paramètre (version longue)  | Description                                                                                  |
| ------------------------- | --------------------------- | -------------------------------------------------------------------------------------------- |
|                           | --searchString=SEARCHSTRING | Contenu à rechercher                                                                         |
| -u                        | --user=USERNAME             | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                        |
| -p                        | --password=MOT DE PASSE     | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                  |
| -i                        | --tenantId=ID-TENANT        | ID du locataire à utiliser (par défaut : 1)                                                  |
| -c                        | --config=FICHIER-CONFIG     | Spécification du chemin d'accès au fichier de configuration                                   |
| -h                        | --help                      | Message d'aide pour afficher des informations supplémentaires                                 |
| -q                        | --quiet                     | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                   | Affichage de la version de la console i-doit                                                |
|                           | --ansi<br>--no-ansi         | Forcer (ou désactiver --no-ansi) la sortie ANSI                                              |
| -n                        | --no-interaction            | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbose                   | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php search --user admin --password admin --tenantId 1 --searchString "Server001"
```

### index-de-recherche

Restaure l'index de recherche en le supprimant et en le réécrivant.

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
|                           | --update                 | Au lieu de simplement créer un nouvel index, les documents de l'index actuel sont écrasés     |
|                           | --category=CATEGORIE     | Liste blanche des catégories                                                                 |
|                           | --dry-run                | Exécute Reindex sans enregistrer                                                             |
| -u                        | --user=UTILISATEUR       | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                       |
| -p                        | --password=MOT DE PASSE  | Mot de passe pour l'authentification de l'utilisateur précédemment spécifié                  |
| -i                        | --tenantId=ID-LOCATAIRE  | ID du locataire à utiliser (par défaut : 1)                                                 |
| -c                        | --config=FICHIER-CONFIG  | Spécifie le chemin du fichier de configuration                                               |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                   |
| -V                        | --version                | Sortie de la version de la Console i-doit                                                  |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                             |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la Console i-doit                           |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

### Exemple d'utilisation

```shell
sudo -u www-data php console.php search-index --user admin --password admin --tenantId 1
```

### strip-description-html

Avec cette commande, vous pouvez supprimer les balises HTML dans le champ de description de toutes les catégories et objets.

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                        |
| -p                        | --password=PASSWORD      | Mot de passe pour l'authentification de l'utilisateur précédemment spécifié                   |
| -i                        | --tenantId=TENANT-ID     | ID du locataire à utiliser (par défaut : 1)                                                  |
| -c                        | --config=CONFIG-FILE     | Spécifie le chemin vers le fichier de configuration                                           |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                 |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                | Affiche la version de la console i-doit                                                     |
|                           | --ansi<br>--no-ansi      | Force (ou désactive --no-ansi) la sortie ANSI                                               |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php strip-description-html --user admin --password admin --tenantId 1
```

### sync-dynamic-groups

Resynchronise les membres des groupes dynamiques.

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -g                        | --groups=GROUPES          | Liste de IDs des groupes dynamiques séparés par des virgules                                  |
| -u                        | --user=UTILISATEUR          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                              |
| -p                        | --password=MOT DE PASSE      | Mot de passe pour l'authentification de l'utilisateur précédemment spécifié                                 |
| -i                        | --tenantId=ID-TENANT     | ID du locataire à utiliser (par défaut : 1)                                              |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                              |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                              |
| -V                        | --version                | Sortie de la version de la console i-doit                                                         |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                                     |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                                     |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php sync-dynamic-groups --user admin --password admin --tenantId --groups 173,188,219
```

### system-autoincrement

Détermine la valeur de l'auto-incrémentation du système. Cela affecte les identifiants d'objet, les entrées de catégorie, etc. Lors de la réinitialisation de l'auto-incrémentation, certains contenus peuvent ne plus être accessibles.

**Options:**

| Paramètre (version courte) | Paramètre (version longue)   | Description                                                                                  |
| ------------------------- | ----------------------------- | -------------------------------------------------------------------------------------------- |
|                           | --autoIncrement=AUTOINCREMENT | Nombre auquel l'auto-incrémentation doit être définie                                        |
| -u                        | --user=USERNAME               | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                        |
| -p                        | --password=PASSWORD           | Mot de passe pour l'authentification de l'utilisateur précédemment spécifié                   |
| -i                        | --tenantId=TENANT-ID          | ID du locataire à utiliser (par défaut : 1)                                                  |
| -h                        | --help                        | Message d'aide pour afficher des informations supplémentaires                                |
| -q                        | --quiet                       | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                     | Sortie de la version de la console i-doit                                                   |
|                           | --ansi<br>--no-ansi           | Forcer (ou désactiver --no-ansi) la sortie ANSI                                             |
| -n                        | --no-interaction              | Désactive toutes les questions d'interaction de la console i-doit                           |
| -v / -vv / -vvv           | --verbose                     | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

### Exemple d'utilisation

```shell
sudo -u www-data php console.php system-autoincrement --user admin --password admin --tenantId 1 --autoIncrement 20
```

### system-categorycleanup

Purge éventuellement les entrées de catégorie qui sont dans l'état inachevé, archivé ou supprimé

**Options:**

| Paramètre (version courte) | Paramètre (version longue)     | Description                                                                                                                                                                 |
| ------------------------- | ------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
|                           | --categoryStatus=CATEGORYSTATUS | Utilisé pour commencer le nettoyage de l'état spécifié : <br>**1** pour les entrées de catégorie 'inachevées'<br>**3** pour les entrées de catégorie 'archivées'<br>**4** pour les entrées de catégorie 'supprimées' |
| -u                        | --user=USERNAME                 | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                                                                                                        |
| -p                        | --password=PASSWORD             | Mot de passe pour l'authentification de l'utilisateur précédemment spécifié                                                                                                  |
| -i                        | --tenantId=TENANT-ID            | ID du locataire à utiliser (par défaut : 1)                                                                                                                                  |
| -h                        | --help                          | Message d'aide pour afficher des informations supplémentaires                                                                                                                |
| -q                        | --quiet                         | Mode silencieux pour désactiver la sortie                                                                                                                                    |
| -V                        | --version                       | Sortie de la version de la console i-doit                                                                                                                                    |
|                           | --ansi<br>--no-ansi             | Forcer (ou désactiver --no-ansi) la sortie ANSI                                                                                                                              |
| -n                        | --no-interaction                | Désactive toutes les questions d'interaction de la console i-doit                                                                                                           |
| -v / -vv / -vvv           | --verbose                       | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage)                                                                             |

### Exemple d'utilisation

```shell
sudo -u www-data php console.php system-categorycleanup --user admin --password admin --tenantId 1 --categoryStatus 3
```

### system-checkforupdates

Vérifie si une nouvelle version d'i-doit est disponible.

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                 |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                | Affichage de la version de la console i-doit                                                |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                             |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                           |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php system-checkforupdates
```

### system-convert-non-innodb-tables

Convertit toutes les tables non INNODB en INNODB

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
|                           | --convert                | Lance le processus de conversion de toutes les tables non UTF-8                              |
|                           | --table=TABLE            | Table à vérifier et à convertir                                                              |
| -u                        | --user=USERNAME          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                       |
| -p                        | --password=PASSWORD      | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                 |
| -i                        | --tenantId=TENANT-ID     | ID du locataire à utiliser (par défaut : 1)                                                 |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                 |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                | Affichage de la version de la console i-doit                                                |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                             |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                           |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

### system-convert-non-utf8-tables {#examples}

Convertit tous les types de données non-UTF-8 en UTF-8.

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
|                           | --convert                | Démarre le processus de conversion de toutes les tables non-UTF-8                            |
| -u                        | --user=USERNAME          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                       |
| -p                        | --password=PASSWORD      | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                  |
| -i                        | --tenantId=TENANT-ID     | ID du locataire à utiliser (par défaut : 1)                                                 |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                   |
| -V                        | --version                | Sortie de la version de la console i-doit                                                   |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                             |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php system-convert-non-utf8-tables --convert
```

### system-location-fix

Exécute la correction de l'emplacement à partir de l'interface graphique dans la console

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                         |
| -p                        | --password=PASSWORD      | Mot de passe pour l'authentification de l'utilisateur précédemment spécifié                    |
| -i                        | --tenantId=TENANT-ID     | ID du locataire à utiliser (par défaut : 1)                                                   |
| -c                        | --config=CONFIG-FILE     | Spécification du chemin vers le fichier de configuration                                       |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                  |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                     |
| -V                        | --version                | Sortie de la version de la console i-doit                                                    |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                               |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                              |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php system-location-fix --user admin --password admin --tenantId 1 --config /chemin/vers/fichier/config
```

### contrat-de-maintenance-système {/examples}

Envoie une notification par e-mail pour les contrats de maintenance.

**Options :**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                        |
| -p                        | --password=PASSWORD      | Mot de passe pour l'authentification de l'utilisateur précédemment spécifié                   |
| -i                        | --tenantId=TENANT-ID     | ID du locataire à utiliser (par défaut : 1)                                                  |
| -c                        | --config=CONFIG-FILE     | Spécifie le chemin vers le fichier de configuration                                           |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                 |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                | Affichage de la version de la console i-doit                                                 |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                              |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php system-maintenancecontract --user admin --password admin --tenantId 1
```

### nettoyage-objet-systeme

Nettoie tous les objets avec un statut défini par l'utilisateur.

**Options:**

| Paramètre (version courte) | Paramètre (version longue)  | Description                                                                                  |
| ------------------------- | --------------------------- | -------------------------------------------------------------------------------------------- |
|                           | --objectStatus=OBJECTSTATUS | Détermine quel statut doit être nettoyé : 1 : "non terminé"; 3 : "archivé"; 4 : "supprimé"     |
| -u                        | --user=USERNAME             | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                        |
| -p                        | --password=MOT DE PASSE     | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                  |
| -i                        | --tenantId=ID-TENANT        | ID du locataire du locataire à utiliser (par défaut : 1)                                     |
| -c                        | --config=FICHIER-CONFIG     | Spécifie le chemin vers le fichier de configuration                                           |
| -h                        | --help                      | Message d'aide pour afficher des informations supplémentaires                                 |
| -q                        | --quiet                     | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                   | Affichage de la version de la console i-doit                                                 |
|                           | --ansi<br>--no-ansi         | Forcer (ou désactiver --no-ansi) la sortie ANSI                                              |
| -n                        | --no-interaction            | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbose                   | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php system-objectcleanup --user admin --password admin --tenantId 1 --objectStatus 1
```

### system-objectrelations

Renouvelle les noms de toutes les relations d'objets.

**Options:**

| Paramètre (version courte) | Paramètre (version longue)         | Description                                                                                  |
| ------------------------- | ----------------------------------- | -------------------------------------------------------------------------------------------- |
|                           | --categoryConstant=CATEGORYCONSTANT | constante de la catégorie pour laquelle l'opération doit être effectuée (par exemple C__CATG__IP) |
| -u                        | --user=USERNAME                     | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                       |
| -p                        | --password=MOT DE PASSE             | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                  |
| -i                        | --tenantId=ID-TENANT                | ID du locataire à utiliser (par défaut : 1)                                                 |
| -c                        | --config=FICHIER-CONFIGURATION      | Spécifie le chemin vers le fichier de configuration                                           |
| -h                        | --help                              | Message d'aide pour afficher des informations supplémentaires                                 |
| -q                        | --quiet                             | Mode silencieux pour désactiver la sortie                                                   |
| -V                        | --version                           | Affichage de la version de la console i-doit                                                |
|                           | --ansi<br>--no-ansi                 | Forcer (ou désactiver --no-ansi) la sortie ANSI                                              |
| -n                        | --no-interaction                    | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbose                           | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

### Exemple d'utilisation

```shell
sudo -u www-data php console.php system-objectrelations --user admin --password admin --tenantId 1 --categoryConstant C__CATG__IP
```

### system-refresh-table-configuration

Actualise toutes les configurations de liste disponibles (types d'objets et catégories)

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                                                            |
| --------------------------- | -------------------------- | -------------------------------------------------------------------------------------------------------------------------------------- |
| -a                          | --all                      | Traitera toutes les configurations de table de type d'objet                                                                             |
| -o                          | --object-types=OBJECT-TYPES | Traiter uniquement des configurations de table de type d'objet spécifiques via leur constante (il est possible de passer une liste de constantes séparées par des virgules) |
| -u                          | --user=USERNAME            | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                                                                 |
| -p                          | --password=MOT DE PASSE    | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                                                             |
| -i                          | --tenantId=ID_LOCATAIRE    | ID du locataire à utiliser (par défaut : 1)                                                                                           |
| -c                          | --config=FICHIER_CONFIG    | Spécifie le chemin vers le fichier de configuration                                                                                   |
| -h                          | --help                     | Message d'aide pour afficher des informations supplémentaires                                                                         |
| -q                          | --quiet                    | Mode silencieux pour désactiver la sortie                                                                                             |
| -V                          | --version                  | Sortie de la version de la console i-doit                                                                                             |
|                             | --ansi<br>--no-ansi        | Forcer (ou désactiver --no-ansi) la sortie ANSI                                                                                       |
| -n                          | --no-interaction           | Désactive toutes les questions d'interaction de la console i-doit                                                                      |
| -v / -vv / -vvv             | --verbose                  | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage)                                        |

{ /* examples */ }

### system-set-settings

Permet de définir les paramètres du Centre d'administration via l'interface de ligne de commande.

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                      |
| ------------------------- | ------------------------ | ------------------------------------------------------------------------------------------------ |
| -u                        | --user=[NOM_UTILISATEUR]        | Nom d'utilisateur Admin i-doit [par défaut : "admin"]                                                         |
| -p                        | --password=[MOT_DE_PASSE]    | Mot de passe de l'administrateur i-doit                                                                            |
| -s                        | --settings=[PARAMÈTRES]    | Carte des paramètres à définir au format json comme {"proxy.active": 1, [...]}                                |
| -i                        | --tenantId=ID_LOCATAIRE        | ID du locataire à utiliser (par défaut : 1)                                                                                        |
| -c                        | --config=FICHIER_CONFIG        | Spécification du chemin vers le fichier de configuration                                                                                          |
| -h                        | --help                      | Message d'aide pour afficher des informations supplémentaires                                                                                        |
| -q                        | --quiet                     | Mode silencieux pour désactiver la sortie                                                                                                        |
| -V                        | --version                   | Affichage de la version de la console i-doit                                                                                                   |
|                           | --ansi<br>--no-ansi         | Forcer (ou désactiver --no-ansi) la sortie ANSI                                                                                               |
| -n                        | --no-interaction            | Désactive toutes les questions d'interaction de la console i-doit                                                                               |
| -v / -vv / -vvv           | --verbose                   | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage)                                           |

**Exemple d'utilisation**

```shell
sudo -u www-data php system-set-settings -u admin -p admin --settings="{\"proxy.active\":1,\"proxy.host\":\"http://myproxy.net\",\"unknown-setting\": 4}" -n
```


### tenant-create

Crée un nouveau locataire

**Options:**

| Paramètre (version courte) | Paramètre (version longue)   | Description                                                                                  |
| ------------------------- | ----------------------------- | -------------------------------------------------------------------------------------------- |
| -u                        | --root-user=ROOT-USER         | Mot de passe de la base de données du nouveau locataire                                       |
| -p                        | --root-password=ROOT-PASSWORD | Nom d'utilisateur du super utilisateur de la base de données par défaut : "root"              |
| -U                        | --user=USER                   | Nom d'utilisateur de la base de données pour le nouveau locataire par défaut : "idoit"        |
| -P                        | --password=PASSWORD           | Mot de passe de la base de données pour le nouveau locataire                                   |
| -d                        | --database=DATABASE           | Nom de la base de données pour le nouveau locataire par défaut : "idoit_data"                 |
| -t                        | --title=TITLE                 | Nom du nouveau locataire par défaut : "Nom de votre entreprise"                               |
| -h                        | --help                        | Message d'aide pour afficher des informations supplémentaires                                 |
| -q                        | --quiet                       | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                     | Affichage de la version de la console i-doit                                                |
|                           | --ansi<br>--no-ansi           | Forcer (ou désactiver --no-ansi) la sortie ANSI                                              |
| -n                        | --no-interaction              | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbose                     | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

### Exemple d'utilisation

```shell
sudo -u www-data php console.php tenant-create --title my-org --user idoit --password idoitpassword -- enable --tenantId 3
```

### tenant-disable

Désactive un locataire existant.

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                         |
| -p                        | --password=PASSWORD      | Mot de passe pour l'authentification de l'utilisateur précédemment spécifié                   |
| -i                        | --tenantId=TENANT-ID     | ID du locataire à utiliser (par défaut : 1)                                                  |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                 |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                | Affichage de la version de la console i-doit                                                |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                             |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php tenant-disable --tenantId 3
```

### tenant-enable

Active un locataire existant.

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=UTILISATEUR       | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                        |
| -p                        | --password=MOT DE PASSE  | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                   |
| -i                        | --tenantId=ID-TENANT     | ID du locataire à utiliser (par défaut : 1)                                                  |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                | Sortie de la version de la console i-doit                                                   |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                              |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php tenant-enable --tenantId 3
```

### tenant-liste

Liste tous les locataires existants.

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                      |
| ------------------------- | ------------------------ | ------------------------------------------------------------------------------------------------ |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                     |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                        |
| -V                        | --version                | Sortie de la version de la console i-doit                                                        |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                                  |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                                 |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

### Exemple d'utilisation

```shell
sudo -u www-data php console.php tenant-list
```

### tenant-remove

Supprime un client existant

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                       |
| -p                        | --password=MOT DE PASSE  | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                  |
| -i                        | --tenantId=ID-TENANT     | ID du locataire à utiliser (par défaut : 1)                                                 |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                   |
| -V                        | --version                | Sortie de la version de la console i-doit                                                   |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                             |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                           |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php tenant-remove --user admin --password admin --tenant 1
```

### désinstaller

Désinstalle l'installation i-doit utilisée

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                       |
| -p                        | --password=MOT DE PASSE  | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                  |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                   |
| -V                        | --version                | Sortie de la version de la console i-doit                                                   |
|                           | --ansi<br>--no-ansi      | Forcer (ou désactiver --no-ansi) la sortie ANSI                                             |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                           |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

### mise à jour {/examples}

Met à jour l'installation d'i-doit

**Options:**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                        |
| -p                        | --password=PASSWORD      | Mot de passe pour l'authentification de l'utilisateur précédemment spécifié                   |
| -z                        | --zip=ZIP                | Spécifie le chemin vers le paquet de mise à jour                                              |
|                           | --v=V                    | Version à laquelle effectuer la mise à jour                                                   |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                 |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                    |
| -V                        | --version                | Affiche la version de la console i-doit                                                     |
|                           | --ansi<br>--no-ansi      | Force (ou désactive --no-ansi) la sortie ANSI                                                |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php update --user admin --password admin --zip /chemin/vers/fichier.zip --v 1.14
```

### processus-de-flux

Envoie des e-mails concernant les processus de flux et crée des tâches à partir de listes de contrôle.

**Options :**

| Paramètre (version courte) | Paramètre (version longue) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -t                        | --types=TYPES            | Types de processus de flux (valeurs multiples autorisées)                                    |
| -u                        | --user=USERNAME          | Nom d'utilisateur d'un utilisateur autorisé à exécuter                                       |
| -p                        | --password=PASSWORD      | Mot de passe pour l'authentification de l'utilisateur spécifié précédemment                  |
| -i                        | --tenantId=TENANT-ID     | ID du locataire à utiliser (par défaut : 1)                                                 |
| -c                        | --config=CONFIG-FILE     | Spécifie le chemin vers le fichier de configuration                                          |
| -h                        | --help                   | Message d'aide pour afficher des informations supplémentaires                                |
| -q                        | --quiet                  | Mode silencieux pour désactiver la sortie                                                   |
| -V                        | --version                | Affiche la version de la console i-doit                                                    |
|                           | --ansi<br>--no-ansi      | Force (ou désactive --no-ansi) la sortie ANSI                                              |
| -n                        | --no-interaction         | Désactive toutes les questions d'interaction de la console i-doit                            |
| -v / -vv / -vvv           | --verbose                | Augmente la portée du retour. (1 = sortie normale, 2 = sortie détaillée, 3 = niveau de débogage) |

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php workflows-process --user admin --password admin --tenantId 1 --types task --types checklist
```
