# Références Uniques 

Les références sont importantes pour prévenir un manque de clarté et d'ambiguïté au sein de la [documentation informatique](../glossary.md). Si vous souhaitez référencer des [objets](structure-of-the-it-documentation.md) pour des systèmes tiers, par exemple, divers [attributs](../glossary.md) peuvent être utilisés pour cette tâche.

!!! info "Importations de données"

    Afin de détecter les données déjà existantes, il existe des stratégies pertinentes pour les [importations de données](../consolidate-data/index.md). Pour la plupart, elles se réfèrent aux attributs mentionnés ci-dessous. Les détails peuvent être trouvés dans les articles correspondants.

## Identifiant d'Objet 

Chaque objet dans i-doit reçoit un identifiant (ID). Cet identifiant est toujours unique pour chaque locataire i-doit. L'ID est un nombre positif supérieur à 0 et peut avoir une longueur allant jusqu'à 11 chiffres. Il est automatiquement attribué par MySQL/MariaDB en incrémentant le nombre de 1. Un changement rétroactif de l'ID par l'utilisateur n'est pas possible afin de prévenir les incohérences. Lorsque vous [supprimez des objets (**Purge**)](./life-and-documentation-cycle.md), les IDs sont à nouveau disponibles mais ils ne sont pas réutilisables.

L'identifiant d'objet est représenté par l'attribut **Identifiant d'objet** dans la **catégorie** **Général**.

[![Identifiant d'objet](../assets/images/en/basics/unique-references/1-ur.png)](../assets/images/en/basics/unique-references/1-ur.png)

Le nombre à partir duquel démarre le compteur des identifiants d'objet est déterminé lors de la [configuration de i-doit](../installation/manual-installation/setup.md). Le nombre de départ par défaut est 1.

L'identifiant d'objet est très important pour la génération des URI. Grâce à l'identifiant, vous pouvez accéder de manière univoque aux objets via un lien. Le nom de la variable est objID. La structure de nommage est la suivante :

    http://i-doit.example.net/i-doit/?objID=1000

Les identifiants d'objet sont principalement utilisés à des fins internes, mais ils peuvent également être utiles pour l'utilisateur ou pour des systèmes tiers. Les identifiants sont essentiels pour l'[accès à l'API,](../i-doit-pro-add-ons/api/index.md) par exemple.

## SYS-ID

L'attribut **SYS-ID** ne fournit pas de références uniques lors de l'utilisation d'importations automatisées. Lorsqu'un nouvel objet est créé, un nombre positif d'au moins 10 chiffres est généré pour le **SYS-ID**, qui est dérivé du [timestamp UNIX](https://de.wikipedia.org/wiki/Unixzeit). Il est affiché dans la catégorie **Général**. De manière synonyme, **SYSID** est également utilisé sans trait d'union.


[![SYS-ID](../assets/images/en/basics/unique-references/2-ur.png)](../assets/images/en/basics/unique-references/2-ur.png)

Vous pouvez spécifier un préfixe pour chaque [type d'objet](structure-of-the-it-documentation.md), qui précède le numéro généré automatiquement. Vous pouvez définir le préfixe à **Administration → Structure des données → Types d'objets → [Groupe de types d'objets] → [Type d'objet] → Préfixe SYSID**. Si vous ne spécifiez pas votre propre préfixe, le SYSID commencera par le préfixe SYSID_. Lorsque vous définissez un préfixe alternatif, la génération du numéro change : l'ID de l'objet est utilisé à la place du timestamp UNIX.

[![Préfixe SYSID](../assets/images/en/basics/unique-references/3-ur.png)](../assets/images/en/basics/unique-references/3-ur.png)

Par défaut, le SYSID ne peut pas être modifié rétroactivement par l'utilisateur. Cependant, vous pouvez autoriser les modifications en activant la fonction correspondante à **Administration → Gestion des locataires → Paramètres du locataire → CMDB → SYS-ID en lecture seule**.

## Titre de l'objet

Il est absolument essentiel que chaque objet reçoive un titre. Ce titre est documenté en tant qu'attribut dans la catégorie **Général**. De manière synonyme, cet attribut est également appelé **Nom** ou **Lien d'objet**. 



[![Titre de l'objet](../assets/images/en/basics/unique-references/4-ur.png)](../assets/images/en/basics/unique-references/4-ur.png)

!!! success "Allouer automatiquement les titres d'objet"

    Les titres d'objet peuvent également être attribués automatiquement. Cela est particulièrement utile pour les [modèles](../efficient-documentation/templates.md) :

    1.  Créer un modèle
    2.  Utiliser les espaces réservés disponibles comme titre d'objet et enregistrer
    3.  Attribuer le modèle en tant que modèle par défaut pour le type d'objet
    4.  Créer un nouvel objet, le titre de l'objet est déjà défini

## Adresse IP

Vous pouvez attribuer autant d'adresses IP à chaque objet que vous le souhaitez. Cela se fait dans la catégorie **Adresse hôte** en créant une entrée de catégorie pour chaque adresse IP.

Les adresses IP ne sont pas uniques en soi. Par exemple, dans les réseaux privés, les mêmes adresses (192.168.1.1, etc.) se répètent encore et encore. Lorsque les **[réseaux de couche 3](../use-cases/ip-adress-management.md)** avec des zones réseau superposées sont documentés dans i-doit, il y aura souvent des objets avec des adresses IP ambiguës. En raison de technologies comme le DHCP, il devient encore plus difficile d'identifier les objets en utilisant des adresses IP attribuées dynamiquement. Par conséquent, cet attribut n'est **pas adapté** pour un référencement non ambigu dans la plupart des cas.

## Nom d'hôte et FQDN

Le **Nom d'hôte** est attribué dans la catégorie **Adresse de l'hôte**. Pour chaque objet, un nombre quelconque de noms d'hôte peut être documenté, même s'il est souvent attribué de manière univoque à chaque appareil (par exemple, serveurs). Comme pour l'adresse IP (voir ci-dessus), une entrée de catégorie est générée pour chaque nom d'hôte.

Lorsque vous spécifiez également l'attribut **domaine DNS** par entrée de catégorie, cela entraîne automatiquement le Nom de Domaine Complet (**FQDN**).

Tout comme les adresses IP, le nom doit être univoque mais en raison de diverses raisons, il peut également s'agir d'un nom récurrent. Souvent, le FQDN est assimilé au titre de l'objet. L'utilisation du nom d'hôte ou du FQDN pour la référence doit être soigneusement considérée.

[![Nom d'hôte et FQDN](../assets/images/en/basics/unique-references/5-ur.png)](../assets/images/en/basics/unique-references/5-ur.png)

## Adresse MAC

En règle générale, les adresses MAC sont uniques dans le monde entier car elles sont définies par les fabricants des composants réseau. Le faible risque de récurrence des adresses MAC n'est cependant correct qu'en théorie. En raison de la virtualisation croissante et du changement résultant des adresses MAC par les utilisateurs, cet attribut n'est pas toujours le premier choix pour une référence univoque. Autant d'adresses MAC que souhaité peuvent être définies en entrant une adresse MAC pour chaque port dans la catégorie **Port (Réseau)**. Lors de l'utilisation de technologies telles que le bonding ou le trunking, l'adresse MAC est documentée dans la catégorie **Port logique (Réseau)**.

[![Adresse MAC](../assets/images/en/basics/unique-references/6-ur.png)](../assets/images/en/basics/unique-references/6-ur.png)

## Numéro d'Inventaire

Dans la plupart des cas, l'inventaire des biens est réalisé dans l'ensemble de l'organisation et n'est donc pas seulement un sujet lié aux technologies de l'information (Gestion des actifs). Chaque bien matériel à inventorier reçoit un numéro unique. Dans i-doit, ce numéro peut être documenté pour chaque objet dans l'attribut **Numéro d'inventaire** dans la catégorie **Comptabilité**.

À **Administration → Structure des données → Types d'objets → [Groupe de types d'objets] → [Type d'objet]**, la génération automatisée des numéros d'inventaire peut être configurée, si désiré. Ici, divers espaces réservés sont disponibles pour créer une structure de dénomination par type d'objet.

[![Numéro d'Inventaire](../assets/images/en/basics/unique-references/7-ur.png)](../assets/images/en/basics/unique-references/7-ur.png)

!!! success "Étiquettes"

    Les numéros d'inventaire et les codes QR offrent une combinaison idéale et peuvent être associés à des étiquettes. Les codes QR sont générés pour chaque objet par i-doit. De telles étiquettes peuvent être imprimées à l'aide de l'imprimante de codes QR i-doit, par exemple.

## Identifiant des systèmes tiers 

Les données provenant de systèmes tiers, par exemple de la zone d'inventaire/découverte, peuvent être [importées](../consolidate-data/index.md) dans i-doit. Dans la plupart des cas, ces systèmes possèdent également des identifiants uniques ou quelque chose de similaire. Lorsque ces identifiants sont importés, la catégorie **Source de données** peut être utilisée. De cette manière, plusieurs systèmes utilisés peuvent être synchronisés afin de référencer de manière univoque des objets sur tous les systèmes.

[![Identifiant des systèmes tiers](../assets/images/en/basics/unique-references/8-ur.png)](../assets/images/en/basics/unique-references/8-ur.png)

## Constantes 

En interne, i-doit utilise des constantes qui référencent de manière univoque toutes sortes de données. Une constante se compose de lettres majuscules (A-Z) et de tirets bas (\_). De telles constantes sont utilisées pour certains objets qui existent déjà dans l'installation par défaut de i-doit. Par exemple, l'objet **Personne** "admin" a la constante C_OBJ_PERSON_ADMIN.

Ces constantes ne peuvent pas être consultées ou modifiées dans l'interface web. Pour cette raison, cela se fait en SQL dans la base de données. Chaque locataire dispose d'une base de données distincte dans laquelle se trouve la table isys_obj. Tous les objets y sont enregistrés. La colonne pour la constante s'appelle isys_obj_const.

!!! attention "Manipulation de la base de données"

    Les manipulations de la base de données mettent en danger la fonctionnalité de _i-doit_. Pour cette raison, nous ne pouvons pas garantir les problèmes résultant des manipulations. Ainsi, toute activité doit être bien considérée et acceptée par nous au préalable, si nécessaire.

## Autres Attributs Uniques

-   Les attributs peuvent être [définis comme uniques](../efficient-documentation/validation-and-mandatory-fields.md) globalement, par type d'objet ou (pour les catégories de liste) par objet. En cas de multiples occurrences, une fenêtre de notification par i-doit s'affiche lorsque vous essayez de sauvegarder vos entrées.
-   Si les attributs mentionnés ci-dessus ne suffisent pas, des attributs supplémentaires peuvent être [créés](./custom-categories.md).
