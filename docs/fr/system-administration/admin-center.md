# Centre d'administration

Le centre d'administration est une interface d'administration distincte intégrée dans i-doit. Ici, les paramètres partagés par tous les locataires sont configurés.

## Identifiants

!!! attention "Attention!"

    Veuillez ne pas modifier le mot de passe s'il en existe déjà un. Cela ne peut être modifié que via la [CLI!](../automation-and-integration/cli/index.md)

Pour le centre d'administration, il existe des **identifiants distincts**. Ceux-ci peuvent être spécifiés lors de l'[installation de i-doit](../installation/manual-installation/setup.md). Si cette étape a été sautée, alors il n'y a pas d'accès possible au centre d'administration au départ.

## Connexion

Le centre d'administration peut être accédé via l'[écran de connexion de i-doit](../basics/initial-login.md). Le lien **Admin-Center** est situé sous l'écran de connexion.

[![Connexion](../assets/images/en/system-administration/admin-center/1-ac.png)](../assets/images/en/system-administration/admin-center/1-ac.png)

!!! info "Attribuer des identifiants"

    Ce lien n'est disponible que si les identifiants pour le centre d'administration ont été configurés (voir ci-dessus).

En alternative, l'URL vers le centre d'administration peut être entrée dans le navigateur. À cette fin, /admin/ est ajouté au lien vers i-doit :

    https://i-doit.example.net/i-doit/admin/

[![Attribuer des identifiants](../assets/images/en/system-administration/admin-center/2-ac.png)](../assets/images/en/system-administration/admin-center/2-ac.png)

## Aperçu

Dans la section **Accueil**, la version actuellement installée de _i-doit_ est affichée. Dans l'élément **Actions**, le fichier d'informations sur l'environnement de _i-doit_ peut être téléchargé. Il s'agit d'un fichier XML avec des paramètres système importants qui peuvent être très utiles pour le [dépannage](./troubleshooting/index.md).

[![Aperçu](../assets/images/en/system-administration/admin-center/3-ac.png)](../assets/images/en/system-administration/admin-center/3-ac.png)

## Locataires

Les locataires sont administrés dans la section **Locataires**. Cependant, cela n'est pertinent que pour une licence multi-locataire de _i-doit_. De nouveaux locataires peuvent être générés en utilisant le bouton **Ajouter un nouveau locataire**. Les locataires existants peuvent également être édités, (dés)activés ou supprimés complètement. Un locataire supprimé ne peut être restauré que via une [sauvegarde](../maintenance-and-operation/backup-and-recovery/index.md).

[![Locataires](../assets/images/en/system-administration/admin-center/4-ac.png)](../assets/images/en/system-administration/admin-center/4-ac.png)

## Licences

[Les licences pour i-doit peuvent être installées](../maintenance-and-operation/activate-license.md) via la **section Licences**.

[![Licences](../assets/images/en/system-administration/admin-center/5-ac.png)](../assets/images/en/system-administration/admin-center/5-ac.png)

## Modules complémentaires

Dans la **section Modules complémentaires**, les [Modules complémentaires](../i-doit-pro-add-ons/index.md) sont gérés. Chaque fonctionnalité d'_i-doit_ est encapsulée dans un module complémentaire.

[![Modules complémentaires](../assets/images/en/system-administration/admin-center/6-ac.png)](../assets/images/en/system-administration/admin-center/6-ac.png)

## Support

Le [portail client](../system-administration/customer-portal.md) est intégré dans la **section Support**. Vous pouvez y télécharger des packages et des licences, entre autres.

[![Support](../assets/images/en/system-administration/admin-center/7-ac.png)](../assets/images/en/system-administration/admin-center/7-ac.png)

Le support i-doit est disponible ici [help.i-doit.com](https://help.i-doit.com).

## Paramètres système

Vous trouverez ici les paramètres liés au système. Vous trouverez également le lien vers les [Paramètres experts](#expert-settings-system-related) sur le côté droit.

### Connexion

| Option                        | Valeur  |
| ----------------------------- | ------- |
| Message de bienvenue pour la connexion | Chaîne |

### Proxy

| Option          | Valeur              |
| --------------- | ------------------ |
| Actif          | Oui ou Non          |
| Hôte/Adresse IP | Hôte ou adresse IP |
| Port            | Port               |
| Nom d'utilisateur        | Nom d'utilisateur           |
| Mot de passe        | Mot de passe           |

### Sécurité

| Option     | Valeur     |
| ---------- | --------- |
| Jeton CSRF | Oui ou Non |

### Session

| Option          | Valeur            |
| --------------- | ---------------- |
| Délai de session | Valeur en secondes |

### Authentification unique

| Option          | Valeur                             |
| --------------- | --------------------------------- |
| Actif          | Oui ou Non                         |
| Locataire par défaut  | Sélectionnez le nom du locataire via le menu déroulant  (l'ordre peut être modifié dans les [paramètres experts](#expert-settings-system-related)) |
| Utiliser la partie de domaine | Oui ou Non                         |

### Paramètres du système 

| Option                 | Valeur              |
| ---------------------- | ------------------ |
| Fuseau horaire PHP     | Fuseau horaire      |
| Répertoire de téléchargement de fichiers | Chemin sur le système de fichiers |
| Répertoire de téléchargement d'images | Chemin sur le système de fichiers |

### Interface utilisateur 

| Option                            | Valeur                                          |
| --------------------------------- | ---------------------------------------------- |
| URL du Wiki                          | URL                                            |
| Fonction de tri pour la liste des locataires connectés | Titre<br>Personnalisé (configurable dans le Centre d'administration) |

## Configuration

Dans l'onglet **Configuration**, trois éléments peuvent être configurés :

-   Via **Identifiants du Centre d'administration**, les identifiants du centre d'administration peuvent être modifiés.
-   Via **Configuration de sécurité**, la méthode de chiffrement peut être modifiée.
-   Via **Connexion à la base de données du système i-doit**, l'accès à la base de données du système peut être modifié.

[![Configuration](../assets/images/en/system-administration/admin-center/8-ac.png)](../assets/images/en/system-administration/admin-center/8-ac.png)

Les paramètres seront enregistrés dans le fichier `i-doit/src/config.inc.php`. Ce fichier est créé lors du [processus d'installation de i-doit](../installation/manual-installation/setup.md). Si une [mise à jour de i-doit](../maintenance-and-operation/update.md) est installée, une sauvegarde du fichier est créée automatiquement. La date de la mise à jour est indiquée dans le nom du fichier.

## Paramètres experts (liés au système)

Les paramètres experts pour le système se trouvent dans le Centre d'administration. Vous pouvez y accéder via les [Paramètres système](#system-settings)

| Clé                                             | Valeur                                                                                                                                               | Description       |
| ----------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------- |
| system.email.password                           | -                                                                                                                                                    | system.email.port |
| admin.active_license_distribution               | 1                                                                                                                                                    |                   |
| api.authenticated-users-only                    | 1                                                                                                                                                    |                   |
| api.status                                      | 1                                                                                                                                                   |                   |
| api.validation                                  | 1                                                                                                                                                   |                   |
| auth.active                                     | 1                                                                                                                                                   |                   |
| barcode.type                                    | qr                                                                                                                                                  |                   |
| cmdb.connector.suffix-schema                    | -                                                                                                                                                    |                   |
| cmdb.limits.connector-lists-assigned_connectors | 5                                                                                                                                                   |                   |
| cmdb.limits.obj-browser.objects-in-viewmode     | 8                                                                                                                                                   |                   |
| cmdb.limits.port-lists-layer2                   | 5                                                                                                                                                   |                   |
| cmdb.limits.port-lists-vlans                    | 5                                                                                                                                                   |                   |
| cmdb.limits.port-overview-default-vlan-only     | 0                                                                                                                                                   |                   |
| cmdb.limits.port-overview-vlans                 | -                                                                                                                                                    |                   |
| cmdb.object-browser.max-objects                 | -                                                                                                                                                    |                   |
| cmdb.object.title.cable-prefix                  | KABEL_DEFAULT_                                                                                                                                      |                   |
| cmdb.objtype.X.auto-inventory-no                | -                                                                                                                                                    |                   |
| cmdb.quickpurge                                 | 0                                                                                                                                                   |                   |
| cmdb.renew-properties                           | 1                                                                                                                                                   |                   |
| cmdb.unique.hostname                            | 0                                                                                                                                                   |                   |
| cmdb.unique.ip-address                          | 0                                                                                                                                                   |                   |
| cmdb.unique.layer-2-net                         | 0                                                                                                                                                   |                   |
| cmdb.unique.object-title                        | 0                                                                                                                                                   |                   |
| debug_bar.storeDirectory                        | /tmp/idoit_debugbar                                                                                                                                 |                   |
| debug-bar.enabled                               | 1                                                                                                                                                   |                   |
| email.template.maintenance                      | Votre contrat de maintenance : %s a expiré.\n<strong>Informations sur le contrat</strong>:\nDébut : %s\nFin : %s\nURL de support : %s\nNuméro de contrat : %s\nNuméro de client : %s |                   |
| email.template.password                         | Votre mot de passe est :                                                                                                                                |                   |
| gui.empty_value                                 | -                                                                                                                                                   |                   |
| gui.empty_values                                | -                                                                                                                                                   |                   |
| gui.forum-link                                  | 0                                                                                                                                                   |                   |
| gui.leftcontent.width                           |                                                                                                                                                     |                   |
| gui.wiki-url                                    |                                                                                                                                                     |                   |
| gui.wysiwyg                                     | 1                                                                                                                                                   |                   |
| gui.wysiwyg-all-controls                        | 1                                                                                                                                                   |                   |
| import.object.keep-status                       | 0                                                                                                                                                   |                   |
| ldap.debug                                      | 1                                                                                                                                                   |                   |
| ldap.default-group                              |                                                                                                                                                     |                   |
| logbook.changes                                 | 1                                                                                                                                                   |                   |
| logging.cmdb.import                             | 1                                                                                                                                                   |                   |
| login.tenantlist.sortby                         | isys_mandator__sort                                                                                                                                 |                   |
| maxlength.dialog_plus                           | 110                                                                                                                                                 |                   |
| mysql.unbuffered-queries                        | 0                                                                                                                                                   |                   |
| proxy.active                                    | 0                                                                                                                                                   |                   |
| proxy.host                                      | -                                                                                                                                                    |                   |
| proxy.password                                  | -                                                                                                                                                    |                   |
| proxy.port                                      | -                                                                                                                                                    |                   |
| proxy.username                                  | -                                                                                                                                                    |                   |
| qrcode.config                                   | -                                                                                                                                                    |                   |
| reports.browser-url                             | -                                                                                                                                                    |                   |
| security.passwort.minlength                     | -                                                                                                                                                    |                   |
| session.sso.active                              | 0                                                                                                                                                   |                   |
| session.sso.mandator-id                         | 1,2                                                                                                                                                   | Ordre de connexion via sso                  |
| session.time                                    | 3600                                                                                                                                                |                   |
| system.devmode                                  | -                                                                                                                                                    |                   |
| system.email.connection-timeout                 | -                                                                                                                                                    |                   |
| system.email.from                               | <i-doit@example-domain.int>                                                                                                                           |                   |
| system.email.name                               | -                                                                                                                                                    |                   |
| system.email.smtp-auto-tls                      | 0                                                                                                                                                   |                   |
| system.email.smtp-host                          | -                                                                                                                                                    |                   |
| system.email.smtpdebug                          | 0                                                                                                                                                   |                   |
| system.email.subject-prefix                     | [i-doit]                                                                                                                                            |                   |
| system.email.username                           | -                                                                                                                                                    |                   |
| system.last-change                              | 1689077222                                                                                                                                          |                   |
| system.login.welcome-message                    | -                                                                                                                                                    |                   |
| system.security.csrf                            | 1                                                                                                                                                   |                   |
| system.show-proc-time                           | 0                                                                                                                                                   |                   |


