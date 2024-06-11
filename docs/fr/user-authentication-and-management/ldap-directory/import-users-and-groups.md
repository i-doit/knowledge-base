# Comment importer des utilisateurs et des groupes depuis AD/LDAP (configuration avancée) {/examples/}

L'importation des utilisateurs et des groupes depuis Active Directory dans i-doit se fait toujours via la commande [console.php](../../automation-and-integration/cli/console/index.md). Pour cela, nous utilisons la commande [ldap-sync](./index.md).<br>
À la fin de l'article, vous trouverez un exemple complet de la configuration avancée créée.

L'article sur la configuration du [répertoire LDAP/Active Directory](../index.md) doit être connu de tous au préalable.<br>
Ici, nous passerons en revue différents filtres LDAP et une configuration complète [ldap.ini](../../automation-and-integration/cli/console/using-configuration-files-for-console-cli.md).<br>
L'objectif est de synchroniser tous les utilisateurs et groupes depuis AD/LDAP avec i-doit, ainsi que leurs appartenances.

Je suppose une connaissance de base de AD/LDAP.<br>
Dans ces exemples pour les personnes, l'objectClass = user est utilisé.<br>
Pour les groupes, l'`objectClass = group` est utilisé.<br>
Si vous ne souhaitez pas synchroniser tous les utilisateurs ou groupes du domaine, vous devez entrer le DN/CN d'une OU ou d'un conteneur sous `Rechercher des utilisateurs dans (OU) *`.

[![Accès](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/1-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/1-htiuag.png)

## Configuration du filtre

* * *

### Importation de tous les utilisateurs

Ici, seuls les utilisateurs sont synchronisés, ce qui signifie également qu'aucun groupe n'est créé. Afin de synchroniser uniquement les utilisateurs, le filtre doit ressembler à ceci :

[![Importer les utilisateurs](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/2-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/2-htiuag.png)

```ini
(objectClass=user)
```

* * *

### Importation des utilisateurs avec des attributs spécifiques

Nous voulons filtrer sur un attribut et synchroniser uniquement cet utilisateur.<br>
Seul l'utilisateur ayant la valeur MichaelO dans l'attribut sAMAccountName doit être synchronisé.

[![Importer les utilisateurs avec des attributs spécifiques](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/3-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/3-htiuag.png)

```ini
(&(objectClass=user)(sAMAccountName=MichaelO))
```

* * *

### Importation de tous les utilisateurs et tous les groupes

Ici, les utilisateurs et les groupes sont créés et les utilisateurs sont assignés aux groupes respectifs.<br>
Afin que les utilisateurs et les groupes soient synchronisés, le filtre doit ressembler à ceci :

[![Importation des utilisateurs et des groupes](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/4-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/4-htiuag.png)

```ini
(|(objectClass=user)(objectClass=group))
```

* * *

### Importation des utilisateurs qui sont membres du groupe idoit-read

Pour synchroniser uniquement les utilisateurs qui sont membres du groupe idoit-read, le filtre doit ressembler à ceci :

[![Importation des utilisateurs qui sont membres du groupe idoit](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/5-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/5-htiuag.png)

```ini
(&(objectClass=user)(memberOf=CN=idoit-read,CN=Users,DC=synetics,DC=test))
```

* * *

### Import des utilisateurs qui sont membres du groupe idoit-read et idoit-write

Pour synchroniser uniquement les utilisateurs qui sont membres du groupe idoit-read, le filtre doit ressembler à ceci :

[![Import des utilisateurs qui sont membres du groupe idoit-read et idoit-write](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/6-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/6-htiuag.png)

```ini
(&(objectClass=user)(&(memberOf=CN=idoit-read,CN=Users,DC=synetics,DC=test)(memberOf=CN=idoit-write,CN=Users,DC=synetics,DC=test)))
```

* * *

### Import des utilisateurs et des groupes qui se trouvent sous un groupe imbriqué

J'ai un groupe idoit dans lequel les groupes i-doit idoit-read et idoit-write sont membres. Je veux synchroniser ces deux groupes. Avec ce filtre, je peux directement créer les groupes et les utilisateurs.<br>
Cela ne créera pas le groupe idoit, cela créera uniquement les groupes en dessous. De plus, les groupes ne seront pas liés, car les groupes ne peuvent pas avoir un groupe comme membre.

[![Importation des utilisateurs qui sont membres en dessous du groupe idoit](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/7-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/7-htiuag.png)

```ini
(memberOf:1.2.840.113556.1.4.1941:=CN=idoit,CN=Utilisateurs,DC=synetics,DC=test)
```

* * *

### Comment filtrer les utilisateurs avec plus d'un objectClass

Par exemple, si les utilisateurs diffèrent en ayant deux attributs objectClass (par exemple, personne et utilisateur), je construirais le filtre de cette manière :

[![Personnes et utilisateurs](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/8-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/8-htiuag.png)

```ini
(&(objectClass=person)(objectClass=user))
```

* * *

## Quels autres attributs peuvent être importés via ldap.ini

-   Le post [Configuration ldap.ini](../../automation-and-integration/cli/console/options-and-parameters-cli.md#ldap-sync) devrait être connu.
-   Un fichier .ini peut être créé pour l'importation, avec cela des attributs supplémentaires peuvent être importés.
-   L'[Extension de Catégorie](../../system-administration/administration/import-and-interfaces/ldap/attribute-extension.md) devrait déjà être configurée.
-   Nous utilisons la section .ini

### La configuration de l'extension de catégorie

[![Configuration ldap.ini](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/9-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/9-htiuag.png){/*examples*/}

Ici encore sous forme de tableau

| Titre du champ | Attribut | Mappage avec |
| --- | --- | --- |
| Titre du champ 1 | objectSid | Clé : custom_1 |
| Titre du champ 2 | objectGUID | Clé : custom_2 |
| Titre du champ 3 | - | Clé : custom_3 |
| Titre du champ 4 | - | Clé : custom_4 |
| Titre du champ 5 | - | Clé : custom_5 |
| Titre du champ 6 | - | Clé : custom_6 |
| Titre du champ 7 | - | Clé : custom_7 |
| Titre du champ 8 | - | Clé : custom_8 |

* * *

### Attacher des utilisateurs aux salles de manière statique

Les affectations fixes d'utilisateurs aux salles peuvent être saisies dans le ldap.ini.<br>
Les utilisateurs sont ensuite assignés à la salle assignée en tant que contact.<br>
(Les salles doivent exister dans i-doit avant !).

```ini
;Attacher des utilisateurs aux salles de manière statique
rooms["Salle"]=["NomUtilisateur1","NomUtilisateur2"]
```

* * *

### Assigner un utilisateur en tant que contact aux salles

Il est possible d'assigner des personnes en tant que contacts aux salles via la fonction `import_rooms`.
Pour cela, vous devez définir l'option sur `true`.
Les salles sont créées automatiquement, mais sans emplacement.

```ini
;Importer les salles depuis LDAP
import_rooms=true
attributes[bureau]=physicalDeliveryOfficeName
```

!!! note "Bug"
    En réalité, vous devrez écrire cet attribut AD en minuscules `physicaldeliveryofficename`

* * *

### Comment importer des attributs depuis LDAP

Je souhaite importer plus d'attributs LDAP pour les utilisateurs et j'ai déjà configuré l'[extension de catégorie](../../system-administration/administration/import-and-interfaces/ldap/attribute-extension.md).<br>
Maintenant, je dois configurer le fichier de configuration de synchronisation LDAP (ldap.ini).

Les attributs disponibles peuvent être trouvés dans votre configuration AD.
À partir de là, je peux rechercher les attributs que je souhaite synchroniser en plus.<br>
Les attributs qui appartiennent à quel champ peuvent être trouvés via Google.

À titre d'exemple, je prends les attributs suivants et les ajoute à ldap.ini:

```ini
;LDAP Attributes are individual. This default configuration is prepared for Active Directory:
attributes[department]=department
attributes[phone_company]=telephonenumber
attributes[phone_home]=homephone
attributes[phone_mobile]=mobile
attributes[fax]=facsimileTelephoneNumber
attributes[description]=info
attributes[personnel_number]=employeeid
attributes[organization]=company
attributes[street]=streetAddress
attributes[city]=l
attributes[zip_code]=postalCode
attributes[function]=title
attributes[service_designation]=title
attributes[pager]=pager

;Category extension for persons. Only has a effect when activated
attributes[custom_1]=objectSid
attributes[custom_2]=objectGUID
;attributes[custom_3]=
;attributes[custom_4]=
;attributes[custom_5]=
;attributes[custom_6]=
;attributes[custom_7]=
;attributes[custom_8]=
```

Comme vous pouvez le voir ici, j'ai associé l'attribut de données maître département avec l'attribut LDAP département.<br>
De plus, j'ai utilisé l'extension de catégorie.<br>
La structure par exemple<br>

```ini
attributes[custom_1]=objectSid
```

serait la suivante, les attributs indiquent au gestionnaire de synchroniser l'attribut i-doit [custom_1] avec l'attribut LDAP `objectSid`.

Après la synchronisation des utilisateurs, je trouve les données maîtres suivantes :

[![Données maîtres après synchronisation](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/10-htiuag.png)](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/10-htiuag.png)

* * *

### Plus d'options

#### autoReactivateUsers

Cette option définira toutes les personnes synchronisées sur `Statut = Normal`.
Elle écrasera toutes les autres configurations telles que `deletedUsersBehaviour` ou `disabledUsersBehaviour`.

Cela est utile dans le cas où des utilisateurs ont été accidentellement archivés ou supprimés auparavant.

!!! info
    Nous devons être conscients qu'avec NDS ou OpenLDAP, il n'est actuellement pas possible d'identifier les utilisateurs supprimés pour les archiver ultérieurement. Les utilisateurs sont alors toujours activés ! Les modifications effectuées manuellement seront écrasées.

```ini
autoReactivateUsers=false
```

* * *

#### ignoreUsersWithAttributes

Désactive la synchronisation pour les utilisateurs dont les attributs sont vérifiés par rapport à la fonction d'ignorance.

Cette fonction aide à empêcher la synchronisation des objets de répertoire indésirables.<br>
L'utilisateur ne sera pas synchronisé si la fonction d'ignorance échoue pour TOUS les attributs sélectionnés.

Par défaut, il est dit `ignoreUsersWithAttributes=[]` donc rien ne sera ignoré.

Nous voulons uniquement importer les utilisateurs dont les attributs `samaccountname`, `sn`, `givenname` et mail ne sont pas vides.<br>
Ainsi, la configuration pour `ignoreUsersWithAttributes` devrait ressembler à ceci :

```ini
ignoreUsersWithAttributes[] = "samaccountname"
ignoreUsersWithAttributes[] = "sn"
ignoreUsersWithAttributes[] = "givenname"
ignoreUsersWithAttributes[] = "mail"
```

* * *

#### ignoreFunction

Est la fonction de vérification pour ignorer les utilisateurs (voir `ignoreUsersWithAttributes`)

Cela peut être n'importe quel nom de fonction appelable via `call_user_func` ou les fonctions définies.

```ini
definierte functions:
empty
!empty
isset
!isset
```

Exemple : empty serait exécuté comme empty($value)

Nous vérifions les attributs vides avec

```ini
ignoreFunction=empty
```

#### Synchroniser les attributs vides

Cette option décide si les attributs vides ou vidés de l'AD doivent être synchronisés avec i-doit ou non.

```ini
syncEmptyAttributes=true
```

* * *

### Le fichier ldap.ini complet

Voici un fichier ini terminé qui peut bien sûr être édité.
La première partie du ldap.ini est obtenue à partir de [Utilisation des fichiers de configuration pour les commandes de console](../../automation-and-integration/cli/console/using-configuration-files-for-console-cli.md).

```ini
[commandArguments]
[commandOptions]
user=admin
password=admin
tenantId=1
[additional]
;Import rooms from ldap
import_rooms=false
attributes[office]=physicalDeliveryOfficeName

;Automatically assign this company to every ldap user
defaultCompany=''

;What to do with deleted users - archive, delete, purge
deletedUsersBehaviour=archive

;What to do with disabled users - archive, delete, disable_login
disabledUsersBehaviour=disable_login

;Attach users to Rooms statically
;rooms["Room"]=["Username1","Username2"]

;LDAP Attributes are individual. This default configuration is prepared for Active Directory:
attributes[department]=department
attributes[phone_company]=telephonenumber
attributes[phone_home]=homephone
attributes[phone_mobile]=mobile
attributes[fax]=facsimileTelephoneNumber
attributes[description]=info
attributes[personnel_number]=employeeid
attributes[organization]=company
attributes[street]=streetAddress
attributes[city]=l
attributes[zip_code]=postalCode
attributes[function]=title
attributes[service_designation]=title
attributes[pager]=pager

;Category extension for persons. Only has a effect when activated
attributes[custom_1]=objectSid
attributes[custom_2]=objectGUID
;attributes[custom_3]=
;attributes[custom_4]=
;attributes[custom_5]=
;attributes[custom_6]=
;attributes[custom_7]=
;attributes[custom_8]=

;Automatically sets all users to status normal NDS and OpenLDAP
autoReactivateUsers=false

;Disable sync for users with Attributes checked against 'ignoreFunction'
ignoreUsersWithAttributes=[]

;The check function used for ignoring users (see 'ignoreUsersWithAttributes') empty - !empty - isset - !isset
ignoreFunction=empty

;This option decides whether empty or emptied attributes from AD should be synchronized with i-doit or not.
syncEmptyAttributes=true
```

Sur la console, la commande ressemblerait à ceci :

```shell
sudo -u www-data php console.php ldap-sync -c /var/www/html/i-doit/src/handler/config/ldap-sync.ini
```

[Télécharger exemple-ldap.ini :material-file-download:](../../assets/images/en/automation-and-integration/ldap/import-users-and-groups/example-ldap.ini){ .md-button .md-button--primary }
```
