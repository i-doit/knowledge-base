# Utilisation de fichiers de configuration pour les commandes de console {#using-configuration-files-for-console-commands}

Si vous utilisez un fichier de configuration, vous pouvez spécifier les options pour la commande de console directement.<br>
Vous pouvez ensuite enregistrer ces fichiers nouvellement créés sous /i-doit/src/handler/config/ par exemple.

!!! warning "Accès aux fichiers .ini"
    Si le fichier de configuration est placé dans le répertoire i-doit, le fichier .htaccess doit être modifié.
    Ce code doit être ajouté :

    ```shell
    ## Deny access to all ini files…
    <Files "*.ini">
        Require all denied
    </Files>
    ```

Cela vous évite de taper le mot de passe en texte clair dans la console.<br>
La [Commande de Console](./options-and-parameters-cli.md) utilise des fichiers .ini.<br>
La [Commande de Contrôleur](../../../automation-and-integration/cli/console/index.md) utilise des fichiers .inc.php. Cependant, cette méthode est obsolète et ne doit pas être utilisée.

Le fichier de configuration est utilisé avec `--config /chemin/vers/config.ini ou avec -c /chemin/vers/config.ini`

La structure du .ini
-------------------------

    [argumentsDeCommande]

Actuellement aucun disponible.

    [optionsDeCommande]
    utilisateur=admin
    mot_de_passe=pass
    idLocataire=1

Ici, vous pouvez ajouter les options de la Commande de Console. Ces options doivent être écrites sous forme "longue".<br>
Pour plus d'options, consultez [Options et Paramètres de la Console](./options-and-parameters-cli.md).

    [supplémentaire]

Les paramètres spéciaux sont saisis ci-dessous.<br>
Pour le moment, ils sont disponibles pour [ldapServerId](../../../user-authentication-and-management/ldap-directory/index.md) et pour [import-syslog](./options-and-parameters-cli.md#import-ocs).

* * *

Exemple pour la commande [search-index](./options-and-parameters-cli.md#search-index)
--------------------------------------------------------------------------------------------------------------------------------------------------------------

Tout d'abord, le fichier .ini doit être créé.<br>
Nous utilisons ici également [update](./options-and-parameters-cli.md#search-index) pour écraser et créer l'index de recherche.<br>
De plus, nous utilisons [quiet](./options-and-parameters-cli.md#search-index) pour raccourcir la sortie et économiser de la mémoire, qui peut être utilisée pour l'indexation.

    [argumentsDeCommande]
    [optionsDeCommande]
    utilisateur=admin
    mot_de_passe=pass
    idLocataire=1
    update
    quiet
    [supplémentaire]

Pour utiliser la configuration, nous exécutons la commande de console et spécifions le chemin vers le fichier de configuration avec --config ou -c.


    sudo -u www-data php console.php search-index -c /var/www/html/i-doit/src/handler/config/examples/search-index.ini

[fichier-exemple-search_index.ini :téléchargement-du-fichier-matériel:](../../../assets/images/en/automation-and-integration/cli/console/example-seach_index.ini){ .md-button .md-button--primary }

* * *

\## Exemple pour la commande [notifications-send](./options-and-parameters-cli.md#notifications-send)

Il n'y a pas d'autres options pour cette commande, donc nous avons seulement besoin des options suivantes [utilisateur](./options-and-parameters-cli.md#notifications-send), [mot_de_passe](./options-and-parameters-cli.md#-notifications-send).

    [argumentsDeCommande]
    [optionsDeCommande]
    utilisateur=admin
    mot_de_passe=pass
    idLocataire=1
    [supplémentaire]

Pour utiliser le fichier de configuration, nous exécutons la commande de console et spécifions le chemin vers le fichier de configuration avec --config ou abrégé avec \-c.


    sudo -u www-data php console.php notifications-send -c /var/www/html/i-doit/src/handler/config/examples/notifications-send.ini

[fichier-exemple-notifications-send.ini :téléchargement-du-fichier-matériel:](../../../assets/images/en/automation-and-integration/cli/console/example-notifications-send.ini){ .md-button .md-button--primary }

* * *

Exemple pour la commande [ldap-sync](./options-and-parameters-cli.md#ldap-sync)
--------------------------------------------------------------------------------------------------------------------------------------------------------

Cette commande offre les options supplémentaires suivantes : [ldapServerId](./options-and-parameters-cli.md#ldap-sync) et [dumpConfig](./options-and-parameters-cli.md#ldap-sync).<br>
L'option [ldapServerId](./options-and-parameters-cli.md#ldap-sync) spécifie le serveur ldap à utiliser. Ici, l'ID de l'entrée doit être spécifié.<br>
Avec [dumpConfig](./options-and-parameters-cli.md#ldap-sync), aucune synchronisation n'est exécutée ! Seule la configuration est affichée. Devrait donc être utilisé uniquement pour le débogage.

    [argumentsDeCommande]
    [optionsDeCommande]
    utilisateur=admin
    mot_de_passe=pass
    idLocataire=1
    [supplémentaire]
    import_rooms=false
    defaultCompany=``
    deletedUsersBehaviour=disable_login
    disabledUsersBehaviour=disable_login
    ; Les attributs LDAP sont individuels. Cette configuration par défaut est préparée pour Active Directory :
    attributes[department]=department
    attributes[phone_company]=telephoneNumber
    attributes[phone_home]=homephone
    attributes[phone_mobile]=mobile
    attributes[fax]=facsimileTelephoneNumber
    attributes[description]=info
    attributes[personnel_number]=initials
    attributes[organization]=company
    attributes[location]=physicalDeliveryOfficeName
    attributes[salutation]=title
    attributes[street]=streetAddress
    attributes[city]=l
    attributes[zip_code]=postalCode
    attributes[function]=title
    attributes[service_designation]=title
    attributes[pager]=pager
    ; Extension de catégorie Personnes
    attributes[custom_1]=objectSid
    attributes[custom_2]=sn
    attributes[custom_3]=homePhone
    attributes[custom_4]=mobile
    attributes[custom_5]=info
    attributes[custom_6]=manager
    attributes[custom_7]=company
    attributes[custom_8]=department
    autoReactivateUsers=false
    ignoreUsersWithAttributes[]="sn"
    ignoreUsersWithAttributes[]="givenName"
    ignoreFunction=empty
    syncEmptyAttributes=true

[fichier-exemple-ldap.ini :téléchargement-du-fichier-matériel:](../../../assets/images/en/automation-and-integration/cli/console/example-ldap.ini){ .md-button .md-button--primary }

Pour utiliser le fichier de configuration, nous exécutons la commande de console et spécifions le chemin vers le fichier de configuration avec --config ou abrégé avec \-c.

    sudo -u www-data php console.php ldap-sync -c /var/www/html/i-doit/src/handler/config/examples/ldap-sync.ini

Liste des options de commande et une brève explication

| Clé | Valeur | Description |
| --- | --- | --- |
| import\_rooms= | true ou false | Importe l'attribut LDAP physicalDeliveryOfficeName et le crée en tant que salle, sans emplacement, s'il n'est pas disponible |
| defaultCompany=\\ | Nom de l'Organisation | Organisation par défaut à saisir, laisser vide si rien ne doit être modifié |
| deletedUsersBehaviour= | archive, delete ou disable\_login | Comportement pour les utilisateurs LDAP supprimés. Doivent-ils être archivés, supprimés ou la connexion désactivée |
| disabledUsersBehaviour= | archive, delete ou disable\_login | Comportement pour les utilisateurs LDAP désactivés. Doivent-ils être archivés, supprimés ou la connexion désactivée |
| rooms\[\]="" | \[“Salle 01”\]=“userPrincipalName” | Ici, votre salle est assignée statiquement à un utilisateur LDAP |
| attributes\[\]= | attributes\[champ i-doit\]=Attribut AD | Champs i-doit possibles : academic\_degree, function, service\_designation, street, city, zip\_code, phone\_company, phone\_home, phone\_mobile, fax, pager, personnel\_number, department, company, office, ldap\_id, ldap\_dn, description. Si des informations définies par l'utilisateur doivent être stockées ici, l'[extension de catégorie](../../../system-administration/administration/import-and-interfaces/ldap/attribute-extension.md) peut être activée. Ensuite, les champs : custom\_1 - custom\_8 sont disponibles |
| autoReactivateUsers= | true ou false | Tous les utilisateurs sont automatiquement définis sur l'état normal avant d'être synchronisés. Cette fonction n'est nécessaire que pour OpenLDAP et NDS, car elle est toujours activée dans Active Directory |
| ignoreUsersWithAttributes\[\]= | ignoreUsersWithAttributes\[\]=“sn” | Désactive la synchronisation des utilisateurs où par exemple le sn (Nom de Famille) dans AD est vide. Plusieurs attributs AD peuvent être utilisés ici, voir exemple |
| ignoreFunction= | empty\*, !empty, isset\*, !isset | La fonction de vérification pour "ignoreUsersWithAttributes". Si la valeur est définie sur "empty", la fonction vérifie si la valeur spécifiée de "ignoreUsersWithAttributes" est vide. Si c'est le cas, l'utilisateur ne sera pas synchronisé. |

\*empty - Vérifie si une variable contient une valeur<br>
\*isset - Vérifie si une variable existe et si elle n'est pas NULL

* * *

Exemple pour la commande [import-syslog](./options-and-parameters-cli.md#import-syslog)
---------------------------------------------------------------------------------------------------------------------------------------------------------

Il n'y a pas d'autres options pour cette commande, donc nous avons seulement besoin des options suivantes [utilisateur](./options-and-parameters-cli.md#import-syslog), [mot_de_passe](./options-and-parameters-cli.md#import-syslog) et [idLocataire](./options-and-parameters-cli.md#import-syslog).

    [argumentsDeCommande]
    [optionsDeCommande]
    utilisateur=admin
    mot_de_passe=admin
    idLocataire=1
    [supplémentaire]
    ; divise la ligne syslog en plusieurs parties
    ; "/(^[a-zA-Z]{3}[ ]+[\d]+ [\d\:\d]+) " .  /* date / heure */
    ; "(([.\-0-9a-zA-Z]+)*" .                  /* nom d'hôte */
    ; "(\b(?:\d{1,3}\.){3}\d{1,3}\b)*)+ " .    /* Adresse IP */
    ; "([a-zA-Z0-9-_\/\[\]:]+) " .             /* Nom du Processus */
    ; "(.*)/";                                 /* Message Syslog */
    regexSplitSyslogLine="/(^[a-zA-Z]{3}[ ]+[\d]+ [\d\:\d]+) (([.\-0-9a-zA-Z]+)*(\b(?:\d{1,3}\.){3}\d{1,3}\b)*)+ ([a-zA-Z0-9-_\/\[\]:]+) (.*)/";
    
    priorités[]=Urgence
    priorités[]=Alerte
    priorités[]=Critique
    priorités[]=Erreur
    priorités[]=Avertissement
    priorités[]=Notification
    priorités[]=Info
    priorités[]=Débogage
    
    fichiers_journal[]="/var/log/system.log"
    
    niveaux_alerte[] = 4
    niveaux_alerte[] = 4
    niveaux_alerte[] = 3
    niveaux_alerte[] = 3
    niveaux_alerte[] = 2
    niveaux_alerte[] = 2
    niveaux_alerte[] = 1
    niveaux_alerte[] = 1
