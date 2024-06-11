# LDAP / Annuaire Active (AD)

i-doit propose une interface pour l'authentification/l'autorisation et la synchronisation des données à partir d'un dossier LDAP ou d'un annuaire actif (AD).

## Exigences

i-doit prend en charge les services d'annuaire suivants :

-   [OpenLDAP](https://fr.wikipedia.org/wiki/OpenLDAP)
-   [Microsoft Active Directory (AD)](https://fr.wikipedia.org/wiki/Active_Directory)
-   [Novell eDirectory](https://fr.wikipedia.org/wiki/NetIQ_eDirectory) (précédemment Directory Services)

L'extension PHP php_ldap doit être installée et activée pour la communication avec un annuaire actif (AD) / dossier LDAP. Si vous avez installé _i-doit pro_ selon notre guide d'installation, le module sera déjà disponible.

N'oubliez pas d'autoriser la connexion LDAP si vous utilisez **SELinux** avec `setsebool -P httpd_can_connect_ldap on`. Le -P est pour Permanent
Vérifiez-le via `getsebool -a | grep httpd`

### Installation ultérieure sous [Debian GNU/Linux](../../installation/manual-installation/debian12.md) { /*examples*/ }

```shell
sudo apt install php7-ldap
sudo service apache2 restart
```

### Installation ultérieure sous [Windows](../../installation/manual-installation/microsoft-windows-server/index.md)

Le fichier php.ini (généralement situé à C:\xampp\php\php.ini) doit être modifié. Activez le chargement de l'extension php_ldap dans un éditeur de texte.

À partir de la ligne

```shell
;extension=php_ldap.dll
```

le ";" est supprimé, ce qui donne

```shell
extension=php_ldap.dll
```

Il peut parfois être nécessaire de copier les fichiers ssleay32.dll et libeay32.dll (dans la plupart des cas, ils se trouvent à `C:\xampp\apache\bin\`, cependant, cela varie d'une version à l'autre) dans le dossier php\. Le serveur web Apache doit être redémarré par la suite.

Configuration
-------------

Dans i-doit, la configuration se trouve à **Administration → Interfaces / Données externes → LDAP**. Sous **Serveur**, vous pouvez configurer une ou plusieurs instances et également attribuer des champs à des attributs.

### Serveur

Sous **Administration → Interfaces / Données externes → LDAP → Serveur**, vous pouvez configurer une ou plusieurs instances. Tous les serveurs sont interrogés lors du processus de connexion jusqu'à ce qu'une connexion soit trouvée. En cas de plusieurs [locataires](../../system-administration/multi-tenant.md), ils sont tous interrogés les uns après les autres. Les bases de données qui ont donné un résultat positif dans la requête sont proposées pour la connexion.

### Connexion LDAP pour les recherches (Lecture)

| Nom du champ | Contenu |
| --- | --- |
| **Actif** | Souhaitez-vous interroger le serveur lors de la connexion? |
| **Répertoire*** | Champ obligatoire : Quel type de répertoire est interrogé? |
| **Version LDAP** | Dans quelle version le répertoire existe-t-il? (Par défaut : **3**) |
| **Activer la pagination LDAP** | Doit-on activer/remplacer le nombre maximal de résultats de recherche? <br>Ensuite, les résultats seront transmis "par paquets".<br><br>Lors d'un processus de recherche LDAP, il faut toujours tenir compte du fait que le serveur LDAP a une limite supérieure sur le nombre de résultats renvoyés par requête de recherche. Par exemple, vous recherchez tous les objets utilisateur dans une structure OU entière, mais seuls 500 utilisateurs sont renvoyés en tant que résultats, même s'il doit y avoir bien plus de 2000 utilisateurs sur le serveur. |
| **Limite de page LDAP** | Combien de résultats doivent être renvoyés par "paquet"? |
| **IP / Nom d'hôte*** | Champ obligatoire : L'IP ou le nom d'hôte du serveur. |
| **Port*** | Champ obligatoire : Via quel port la requête est-elle effectuée? (Par défaut : **389**) |
| **TLS** | Souhaitez-vous chiffrer la requête de connexion? Attention : L'authentification échouera en cas de certificats auto-signés ou de certificats dont l'AC racine n'est pas connue du système d'exploitation sur lequel _i-doit_ est installé. Le manuel respectif du système d'exploitation explique comment le certificat peut être accepté. Dans les systèmes d'exploitation basés sur [Debian](../../installation/manual-installation/debian12.md), le certificat de l'AC racine est copié dans le dossier /usr/local/share/ca-certificates/ puis activé avec sudo update-ca-certificates. |
| **Nom d'utilisateur administrateur (DN)*** | Champ obligatoire : Le chemin vers l'objet utilisateur qui a des autorisations de lecture pour le répertoire.<br><br>(Exemple : **CN=idoit,OU=tree,DC=synetics,DC=int**) |
| **Mot de passe*** | Champ obligatoire : Le mot de passe de l'utilisateur mentionné ci-dessus. |
| **Utiliser l'utilisateur administrateur pour toutes les opérations de lecture** | Si l'option "Utiliser l'utilisateur administrateur pour toutes les demandes de lecture" est activée, chaque requête de serveur LDAP est vérifiée avec le compte administrateur de la configuration du serveur LDAP |
| **Limite de temps** | Limite de la durée maximale de la requête. (Par défaut : **30**) |

### Paramètres LDAP pour la connexion à _i-doit_

Les paramètres indiqués ici déterminent où les utilisateurs doivent être recherchés dans l'annuaire.

| Nom du champ | Contenu |
| --- | --- |
| **Identifiant unique** | La synchronisation AD entraîne souvent des enregistrements modifiés qui ne sont pas synchronisés en raison d'un changement de nom (mariage ou similaire). <br>L'enregistrement "ancien" est archivé ici et un nouveau est importé. <br>Par conséquent, un attribut différent peut être sélectionné comme identifiant unique. Voir [extension de catégorie](../../system-administration/administration/import-and-interfaces/ldap/attribute-extension.md) |
| **Filtre** | Le filtre est automatiquement rempli par les valeurs définies dans la zone inférieure. Il est également possible d'insérer le filtre **manuellement**. Pour ce faire, cliquez sur le bouton **Modifier manuellement**. |
| **Rechercher des utilisateurs dans (OU)*** | Champ obligatoire : Le chemin de l'unité organisationnelle dans laquelle les utilisateurs sont stockés dans l'annuaire.<br><br>(Exemple : **OU=arbre,DC=synetics,DC=int**) |
| **Recherche récursive** | Lors de l'activation de la recherche récursive, les dossiers situés sous les unités organisationnelles indiquées sont également recherchés. Ceci n'est pas recommandé pour les grands annuaires et devrait être contourné par la création de plusieurs serveurs. |

{/*examples*/}

En plus de cela, le filtre peut être davantage défini. Les options derrière cela n'ont pas encore d'effet pour une seule ligne de filtre. Une fois que la requête est étendue en utilisant "Ajouter un filtre", les options supplémentaires entrent en vigueur.

Ajouter au dernier filtre :

    (&(objectClass=user)(test=test))

Ajouter en tant que nouveau filtre :

    (&(objectClass=user)(&(test=test)))

Créer un nouveau terme :

    (&(&(objectClass=user))(test=test))

Vous pouvez ensuite tester la configuration spécifiée ci-dessus dans la section inférieure. Idéalement, la notification suivante est affichée :

    Connexion OK !
    XX objet(s) trouvé(s) dans OU=tree,OU=synetics,DC=synetics,DC=int.

Si le message d'erreur n'est pas assez clair en cas d'échec, le niveau de débogage peut être augmenté afin que d'autres sorties soient écrites dans le journal d'erreurs Apache. Dans les systèmes d'exploitation basés sur Debian, le journal d'erreurs peut être trouvé à /var/log/apache2/error.log.

### Identification des objets

Sans aucun réglage supplémentaire, par exemple un identifiant unique, est identifié en utilisant l'attribut de connexion de la catégorie Personnes → Connexion.

### Répertoires

Ensuite, vous pouvez configurer la correspondance via **Administration → Interfaces / Données externes → LDAP → Répertoires**. Il est utilisé pour interroger des informations de base lors du processus de connexion sur l'utilisateur qui se connecte et pour les enregistrer pour l'utilisateur qui va être créé dans _i-doit_. Après avoir choisi le répertoire applicable, l'attribution peut être effectuée. Cependant, les champs sont remplis par défaut et n'ont généralement pas besoin de modifications.

### Importation d'Attributs LDAP Personnalisés

Il est également possible d'enregistrer des attributs personnalisés de l'LDAP dans les données principales via l'importation de personnes. À **Administration → Paramètres CMDB → Extensions de catégorie**, d'autres champs peuvent être configurés pour cette catégorie. Un champ avec le nom correspondant est affiché une fois que le nom a été défini. Le remplissage est effectué via la clé correspondante.

Synchronisation Périodique
------------------------

La configuration requise pour cela a déjà été effectuée lors des étapes précédentes. Maintenant, vous devez simplement configurer une [interface en ligne de commande](../../automation-and-integration/cli/index.md) appropriée pour la synchronisation. Des champs supplémentaires peuvent également être configurés pour la synchronisation.

### Configuration Avancée {/ * exemples * /}

La configuration doit être effectuée dans la [configuration du gestionnaire](../../automation-and-integration/cli/index.md). Un exemple peut être trouvé [ici](../../automation-and-integration/cli/console/using-configuration-files-for-console-cli.md) (i-doit < 1.15). Ce fichier peut être étendu et personnalisé avec des données de connexion, un locataire et des attributs. Le fichier de configuration est ensuite déplacé vers `/src/handler/config/`. <br>
Afin que ce fichier soit pris en compte par exemple avec la commande ldap-sync, cela doit être indiqué avec la synchronisation via un autre paramètre (-c /chemin/) également (plus d'informations sur la [Console](../../automation-and-integration/cli/index.md)).

| Paramètre | Objectif |
| --- | --- |
| **import_rooms** | Lorsqu'il est défini sur "true", les salles sont également créées avec la synchronisation. (Par défaut: **false**) |
| **defaultCompany** | Grâce à cela, les utilisateurs ajoutés par la synchronisation LDAP sont automatiquement assignés à l'organisation configurée. (Par défaut: **vide**)<br><br>par exemple<br><br>defaultCompany='i-doit' |
| **deletedUsersBehaviour** | Peut être défini sur **archive**, **delete** ou **disable_login** pour définir les utilisateurs sur l'état [archivé ou supprimé](../../basics/life-and-documentation-cycle.md) lorsqu'ils ne peuvent plus être trouvés via la synchronisation. Un utilisateur archivé ou supprimé ne peut plus se connecter à _i-doit_ !<br><br>Ou vous pouvez simplement désactiver la connexion pour les utilisateurs.<br><br>(Par défaut: **archive**)<br><br>par exemple<br><br>deletedUsersBehaviour=archive |
| **disabledUsersBehaviour** | Peut être défini sur **archive**, **delete** ou **disable_login** pour définir les utilisateurs sur l'état [archivé ou supprimé](../../basics/life-and-documentation-cycle.md) lorsqu'ils ne peuvent plus être trouvés via la synchronisation. Un utilisateur archivé ou supprimé ne peut plus se connecter à _i-doit_ !<br><br>Ou vous pouvez simplement désactiver la connexion pour les utilisateurs.<br><br>par exemple<br><br>disabledUsersBehaviour=archive |
| **rooms** | Comme vu dans l'exemple, une affectation d'un utilisateur à une **salle** peut être prédéfinie ici. L'affectation est effectuée via l'affectation de contact sans rôle.<br><br>par exemple<br><br>rooms["Salle B"] = ["Personne A", "Personne C", "Personne D"] |
| **attributes** | Les champs respectifs du répertoire sont liés aux attributs dans _i-doit_ en utilisant les "Attributs". Ceux-ci complètent les attributs assignés décrits dans la partie susmentionnée du guide.<br><br>par exemple<br><br>attributes[department]=department |
| **autoReactivateUsers** | Ceci est uniquement pertinent pour les services d'annuaire Novel (NDS) et OpenLDAP. Pendant la synchronisation, tous les utilisateurs sont réactivés avec ceci et désactivés selon le principe commun, le cas échéant.<br><br>par exemple<br><br>autoReactivateUsers=false |
| **ignoreUsersWithAttributes** | Cette fonction aide à empêcher la synchronisation d'objets de répertoire indésirables.<br><br>L'utilisateur ne sera pas synchronisé si la **ignoreFunction** échoue pour tous les attributs sélectionnés.<br><br>par exemple<br><br>ignoreUsersWithAttributes\[\]\="samaccountname" |
| **ignoreFunction** | Il peut s'agir de n'importe quel nom de fonction qui peut être appelé via call\_user\_func ou les fonctions définies.<br><br>Fonctions définies:<br><br>empty  <br>!empty  <br>isset  <br>!isset<br><br>par exemple<br><br>ignoreFunction\=empty |
| syncEmptyAttributes | Si des valeurs ont été supprimées/vidées des champs dans AD, elles sont transférées à i-doit.<br><br>par exemple<br><br>syncEmptyAttributes=true |

### Console {/examples}

Pour utiliser correctement la console, l'[article](../../automation-and-integration/cli/index.md) doit être familier avec celle-ci. Une synchronisation simple sans configuration avancée est fournie par l'option ldap-sync. Une description des paramètres ainsi qu'un exemple correspondant peuvent être trouvés dans le [chapitre](../../automation-and-integration/cli/console/options-and-parameters-cli.md#ldap-sync).

### Attribution Automatisée des Personnes aux Groupes de Personnes {/examples}

L'attribution automatisée garantit que les autorisations spécifiées du groupe de personnes sont attribuées automatiquement lors de la connexion. L'attribut **Groupe LDAP (Mapping)** dans les **données maîtres** d'un **groupe de personnes** doit être rempli avec un groupe valide de votre répertoire pour que l'attribution se fasse. Les groupes attribués à l'objet utilisateur dans le répertoire sont interrogés et comparés à l'attribut **Groupe LDAP (Mapping)** des groupes de personnes _i-doit_ une fois qu'un utilisateur se connecte ou que la synchronisation est lancée. S'il y a correspondance, le groupe est attribué et les autres groupes sont interrogés.

[![Automatisation de l'attribution des personnes aux groupes de personnes](../../assets/images/en/automation-and-integration/ldap/1-ldap.png)](../../assets/images/en/automation-and-integration/ldap/1-ldap.png)

!!! info "memberOf avec OpenLDAP"

    L'attribution automatique est basée sur la requête LDAP dans les groupes auxquels un utilisateur appartient. L'attribut memberOf joue un rôle important dans cette connexion. Cet attribut doit être disponible en tant que superposition. Cependant, dans de nombreuses installations par défaut d'OpenLDAP, ce n'est pas le cas. Des informations utiles sur les configurations requises peuvent être trouvées dans [cet article](http://www.adimian.com/blog/2014/10/how-to-enable-memberof-using-openldap/) et [cet article](https://technicalnotes.wordpress.com/2014/04/19/openldap-setup-with-memberof-overlay/).

Synchroniser les personnes et les groupes de personnes
-----------------------------------------------------

Depuis la version 1.15, les personnes et les groupes de personnes peuvent être synchronisés à partir de LDAP/AD. Ainsi, les personnes deviennent membres du groupe qui leur est assigné dans l'annuaire. Tant que le groupe est également trouvé avec le filtre configuré.<br>
La condition préalable est que l'utilisateur avec lequel la commande est exécutée ait également des droits de superviseur sur les catégories ("Appartenances aux groupes" et "Groupes de personnes > Membres") et des droits de superviseur sur les types d'objets ("Personnes" et "Groupes de personnes").

[![Synchroniser les personnes et les groupes de personnes](../../assets/images/en/automation-and-integration/ldap/2-ldap.png)](../../assets/images/en/automation-and-integration/ldap/2-ldap.png)

Journalisation
-------------

Un fichier journal nommé ldap_debug.txt peut être trouvé dans log/ dans le dossier d'installation de i-doit. La journalisation peut être activée ou désactivée sous **Administration → Paramètres système → Journalisation → Débogage LDAP**.

Exécution de la synchronisation LDAP
------------------------------------

La synchronisation LDAP ne peut être exécutée que via la console du serveur. Pour pouvoir utiliser correctement la console, vous devriez connaître l'[article](../../automation-and-integration/cli/console/index.md) à ce sujet. Une simple synchronisation sans configuration avancée utilise l'option ldap-sync. Une description des paramètres peut être trouvée dans le [chapitre correspondant](../../automation-and-integration/cli/console/options-and-parameters-cli.md).

**Exemple**

    sudo -u www-data php console.php ldap-sync --user admin --password admin --tenantId 1 --verbose --ldapServerId 1

