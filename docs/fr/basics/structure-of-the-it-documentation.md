# Structure de la documentation informatique

Le sujet de cet article est la façon dont i-doit structure la [documentation informatique](../glossary.md). Ici, nous nous concentrons particulièrement sur le vocabulaire utilisé dans i-doit, sur la manière dont ces termes sont liés les uns aux autres et sur la façon dont cela est représenté dans l'interface Web.


## Navigation

Après vous être [connecté,](./initial-login.md) le [tableau de bord et les widgets](./dashboard-and-widgets.md) s'affichent. À partir de là, vous pouvez commencer à explorer la documentation informatique. Presque toutes les fonctionnalités de i-doit peuvent être accessibles à partir de la barre de navigation principale (la barre noire en haut).

[![Navigation](../assets/images/en/basics/structure-of-the-it-documentation/1-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/1-sotitd.png)

Pour une meilleure orientation, vous pouvez jeter un œil à la navigation par fil d'Ariane. À partir de là, vous pouvez accéder aux pages qui se trouvent plus haut dans la hiérarchie.

[![Navigation](../assets/images/en/basics/structure-of-the-it-documentation/2-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/2-sotitd.png)

## Groupes, Types et Catégorisations 

Les groupes de types d'objets comprennent des types d'objets qui instancient des objets, qui à leur tour héritent de catégories, qui incluent ensuite des attributs. Vous avez compris ? Reprenons depuis le début :

[![Groupes, Types et Catégorisations](../assets/images/en/basics/structure-of-the-it-documentation/3-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/3-sotitd.png)

### Groupe de Type d'Objet

Il n'est pas rare qu'une multitude de types d'objets soient utilisés dans une documentation informatique vivante et bien entretenue. Les types d'objets du même genre peuvent être regroupés afin d'avoir une vue d'ensemble claire de cette abondance de données. Ces groupes de types d'objets apparaissent dans la barre de navigation principale (section supérieure) de i-doit.

[![Groupe de Type d'Objet](../assets/images/en/basics/structure-of-the-it-documentation/4-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/4-sotitd.png)

Dans notre exemple, nous examinons de plus près le groupe de type d'objet **Matériel**.

[![Groupe de Type d'Objet](../assets/images/en/basics/structure-of-the-it-documentation/5-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/5-sotitd.png)

### Type d'objet 

Nous désignons la combinaison de tous les objets du même type comme type d'objet. Les exemples sont **Routeur**, **Serveur** ou **Applications**. Habituellement, cette combinaison est également appelée une "Classe". En ITIL©, le terme "Type CI" est utilisé.

i-doit contient déjà de nombreux types d'objets préconfigurés dans l'installation par défaut. Si ceux-ci ne sont pas suffisants, vous pouvez créer vos propres [types d'objets personnalisés](./custom-object-types.md).

Une [liste d'objets](./object-list/index.md) existe pour chaque type d'objet. Tous les objets associés au type d'objet sélectionné sont répertoriés ici, y compris certains attributs. À titre d'exemple, nous examinons la liste d'objets pour le type d'objet **Hôte virtuel**.

[![Type d'objet](../assets/images/en/basics/structure-of-the-it-documentation/6-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/6-sotitd.png)

### Objet

Vous devez décider pour chaque artefact à documenter en quoi vous souhaitez le sauvegarder. Par exemple, souvent un seul serveur est considéré comme un produit composé de plusieurs parties. Dans ce cas, un serveur est créé en tant qu'objet dans i-doit. Dans i-doit, toutes les choses que nous documentons dans une documentation informatique sont des objets. Peu importe s'il s'agit d'un appareil physique, comme un serveur ou un client, ou s'il s'agit d'une construction logique, comme un réseau ou un service. Un objet est défini par son type d'objet, qui détermine à son tour quels attributs peuvent être remplis de valeurs pour l'objet. En ITIL©, le terme "Élément de configuration (CI)" est utilisé, tandis que le terme "Valeur d'actif" est courant dans la gestion des actifs. Nous voulons établir une définition plus abstraite, plus générale et plus flexible en utilisant le terme "Objet".

Certains objets existent dans l'installation par défaut d'i-doit et sont essentiels pour un bon fonctionnement. Cela inclut les objets utilisateur du type d'objet "Personnes" et aussi les "Groupes de personnes" pour les autorisations et les "[réseaux de couche 3](../use-cases/ip-adress-management.md)". De plus, des objets invisibles existent, par exemple la "Localisation racine" pour les emplacements. Ceux-ci ne peuvent pas être supprimés.

Chaque objet dans i-doit reçoit un titre. Le titre est documenté en tant qu'attribut dans la catégorie "Général". Cet attribut est également appelé de manière synonyme "Nom" ou "Lien d'objet".

[![Objet](../assets/images/en/basics/structure-of-the-it-documentation/7-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/7-sotitd.png)

Dans cet exemple, nous nous concentrons sur l'objet avec le titre d'objet **ESX1**. Vous pouvez y accéder en cliquant sur le lien d'objet dans la liste des objets (comme mentionné ci-dessus).

### Catégorie

Les attributs cohérents sur le plan thématique sont regroupés par objet dans des catégories. Trois types de catégories existent : les catégories globales, spécifiques et [catégories personnalisées](./custom-categories.md). Elles sont en outre divisées en catégories à valeur unique et à valeurs multiples (catégories de liste). Certaines catégories sont en miroir et montrent la même relation d'un autre point de vue. D'autres servent de point de vue en lecture seule. Certaines catégories sont attribuées à tous les types d'objets de manière fixe et donc à chaque objet. D'autres peuvent être ajoutées ou supprimées de manière flexible par type d'objet. Enfin, des catégories spéciales telles que **Général** ou **Page d'aperçu** existent.

Les catégories sont affichées dans l'arborescence de navigation de gauche dans la vue objet.

[![Catégorie](../assets/images/en/basics/structure-of-the-it-documentation/8-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/8-sotitd.png)

Les catégories statiques sont répertoriées sous forme d'icônes au-dessus de l'arborescence de navigation de gauche.

[![Catégorie](../assets/images/en/basics/structure-of-the-it-documentation/9-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/9-sotitd.png)

Généralement, une catégorie a deux vues : une pour la lecture et une pour l'édition. Pour éditer les attributs dans une catégorie, vous pouvez cliquer sur le bouton **Éditer** dans la barre d'actions.

[![Catégorie](../assets/images/en/basics/structure-of-the-it-documentation/10-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/10-sotitd.png)

Pour notre exemple, nous examinons de plus près la catégorie Modèle.

[![Catégorie](../assets/images/en/basics/structure-of-the-it-documentation/11-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/11-sotitd.png)

[Les catégories sont attribuées aux types d'objets](./assignment-of-categories-to-object-types.md), et non aux objets. Au sein d'un type d'objet, tous les objets ont les mêmes catégories qui leur sont attribuées.

#### Page d'aperçu

La page d'aperçu s'affiche lors de la sélection d'un objet dans l'interface web de i-doit. Elle se compose de la catégorie **Général** et d'autres catégories facultatives qui sont attribuées au type d'objet. Celles-ci peuvent être sélectionnées ou désélectionnées et également être triées dans la configuration du type d'objet.

[![Aperçu](../assets/images/en/basics/structure-of-the-it-documentation/12-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/12-sotitd.png)

#### Catégorie Général

La catégorie **Général** fait partie de ces catégories qui sont des composants fixes de chaque objet. Par conséquent, vous ne pouvez pas la désélectionner par type d'objet. Des attributs importants, tels que le titre de l'objet, l'ID SYS et l'[état et la condition de la CMDB](./life-and-documentation-cycle.md), s'y trouvent.

[![Général](../assets/images/en/basics/structure-of-the-it-documentation/13-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/13-sotitd.png)

#### Catégorie Globale 

Une catégorie globale peut généralement être attribuée à tous les types d'objets, de sorte que leurs attributs soient disponibles pour les objets correspondants. Exemple : catégorie **Modèle**.

#### Catégorie Spécifique 

Une catégorie spécifique est différente d'une catégorie globale par son focus très spécifique, qui convient uniquement à un ou quelques types d'objets. Un exemple est la catégorie **Rack**, qui est attribuée au type d'objet du même nom et offre à l'utilisateur une vue en rack.

#### Catégorie à Valeur Unique 

Chaque attribut d'une catégorie à valeur unique peut être documenté une seule fois par objet. Un exemple est la catégorie **Comptabilité** : Les informations du numéro d'inventaire, de l'unité de coût, etc., ne sont nécessaires qu'une seule fois. Le contrepartie de cela est la catégorie à valeurs multiples.

#### Catégorie à Valeurs Multiples 

Si les attributs d'une catégorie peuvent être documentés plus d'une fois par objet, alors cela sera appelé une catégorie à valeurs multiples ou une catégorie de liste. Un exemple est la catégorie **CPU**. S'il s'agit d'un système multi-socket, chaque CPU peut être documenté séparément avec la fréquence, le nombre de cœurs, etc. La contrepartie de cela est la catégorie à valeur unique.

#### Catégorie personnalisée 

Une catégorie qui a été créée et configurée avec un ou plusieurs champs d'attributs par un utilisateur est marquée comme [personnalisée](./custom-categories.md) dans i-doit.

#### Catégorie miroir 

Si deux objets ou plus sont en relation les uns avec les autres, cela est documenté dans la catégorie définie à cet effet. Par exemple, vous pouvez stocker n'importe quel nombre de personnes, groupes de personnes, etc. en tant que contact pour un objet dans la catégorie **Affectation de contact**. Il existe une autre catégorie appelée **Objets assignés** afin que vous puissiez également voir pour les personnes et les groupes de personnes à quels objets ils sont assignés en tant que contacts. Comme les mêmes informations sont disponibles dans cette catégorie supplémentaire, mais ne sont enregistrées qu'une seule fois et simplement affichées dans un contexte différent, cela s'appelle une catégorie miroir.

#### Catégorie de vue 

Dans certaines catégories, il n'est pas possible de stocker des attributs par objet. Ces catégories servent à l'évaluation des données qui sont stockées d'une autre manière. Les données traitées ne peuvent pas être modifiées. Un exemple est la catégorie **Vitalité de l'objet**, une évaluation des catégories **CPU**, **Mémoire**, **Port** et **Affectation de logiciel**.

### Attribut 

Un attribut est une valeur documentée appartenant à un objet. Les attributs du même type sont combinés dans i-doit. Exemple : L'attribut **Numéro de série** dans la catégorie **Modèle**.

[![Attribut](../assets/images/en/basics/structure-of-the-it-documentation/14-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/14-sotitd.png)

Les attributs importants de différentes catégories sont combinés en une vue, qui est affichée au-dessus de chaque catégorie. Ces attributs principaux sont **SYS-ID**, **Objectif** (tous deux dans la catégorie **Général**), **Relation**, **Emplacement**, **Affectation de contact** et **URL d'accès principal** (catégorie **Accès**). De plus, un code QR contenant le lien vers la page de vue d'ensemble est affiché à côté d'eux. En appuyant sur la flèche, cette vue s'ouvre.

[![Accès](../assets/images/en/basics/structure-of-the-it-documentation/15-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/15-sotitd.png)

### Champ d'Attribut 

Les attributs des objets sont enregistrés et édités via des champs de formulaire dans l'interface web de i-doit. C'est pourquoi ces champs sont appelés champs d'attribut. Ils peuvent varier : il existe des champs de texte à une ligne et à plusieurs lignes, des champs de date, des éditeurs HTML, des navigateurs d'objets, des [champs de dialogue-plus](./dialog-admin.md) et bien d'autres.

[![Champ d'attribut](../assets/images/en/basics/structure-of-the-it-documentation/16-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/16-sotitd.png)

## Relations

Les composants IT ne peuvent pas seulement être documentés individuellement, mais ils peuvent également être mis en relation les uns avec les autres. Il existe déjà divers types de relations préconfigurés qui peuvent être ajustés et modifiés. Chaque relation est un objet distinct (sans nécessité de licence) qui est automatiquement créé, édité ou supprimé. 
