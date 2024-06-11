# Vue de Rack {/%%/}

i-doit fournit une visualisation pour les racks 19" avec lesquels vous pouvez afficher tous les composants intégrés clairement. Les statistiques sur les unités de hauteur libres, les besoins énergétiques maximum et les ports réseau libres dans les commutateurs et les panneaux de brassage fournissent un support pour la planification de la capacité.

Catégorie de Rack
-----------------

La **Catégorie de Rack** [category](../basics/structure-of-the-it-documentation.md) est déjà assignée au [type d'objet](../basics/structure-of-the-it-documentation.md) **Rack** dans l'[installation](../installation/index.md) par défaut d'i-doit. La catégorie montre l'avant et l'arrière modélisés du rack.

[![Catégorie de Rack](../assets/images/en/evaluation/rack-view/1-rv.png)](../assets/images/en/evaluation/rack-view/1-rv.png)

!!! success "Rack"

    Les captures d'écran montrent une installation de démonstration d'i-doit dans laquelle le type d'objet original et la catégorie du même nom ont été renommés en **Rack**. Lorsque vous souhaitez [appliquer votre propre vocabulaire pour la documentation IT](../system-administration/localization.md), vous pouvez le faire sans aucun problème.


Modification des Attributs du Rack
----------------------------------

Les unités de hauteur du rack sont définies dans la catégorie **Facteur de forme**. Cette catégorie est déjà attribuée à l'objet de type **Rack** lors de l'installation d'i-doit. En plus de l'attribut **Unités de rack**, vous devriez également définir le **Facteur de forme** de **19"**.

[![Modification des Attributs du Rack](../assets/images/en/evaluation/rack-view/2-rv.png)](../assets/images/en/evaluation/rack-view/2-rv.png)

Dans l'exemple, le rack peut occuper un maximum de 42 unités avec un facteur de forme de 19".

Le tri des **Unités de hauteur** par ordre croissant ou décroissant est effectué dans la catégorie **Rack**. Avec le bouton **Modifier**, vous pouvez accéder au menu déroulant correspondant qui se trouve dans la boîte à droite pour faire votre choix.

Dans cette boîte, vous pouvez également définir combien de **logements verticaux** sont disponibles à l'**avant** et à l'**arrière**. Avec ces définitions, vous pouvez documenter les PDU qui sont montés sur le côté, par exemple. Sur la capture d'écran, vous pouvez voir **2 logements verticaux** pour l'**avant** et l'**arrière** qui sont placés à gauche et à droite alternativement.

[![Édition des Attributs du Rack](../assets/images/en/evaluation/rack-view/3-rv.png)](../assets/images/en/evaluation/rack-view/3-rv.png)

Positionnement des Objets dans le Rack
---------------------------------------

Deux conditions s'appliquent pour remplir les racks avec des [objets](../basics/structure-of-the-it-documentation.md) : D'une part, vous devez définir pour chaque objet dans la catégorie **Facteur de forme** combien d'**unités de rack** il nécessite et qu'il a le **Facteur de forme 19"**. D'autre part, vous devez cocher la case dans la [configuration du type d'objet](../basics/assignment-of-categories-to-object-types.md) confirmant que les objets de ce type peuvent être positionnés dans le rack. Si l'entrée dans la catégorie **Facteur de forme** est manquante, i-doit suppose qu'un composant 19" avec 1 U est impliqué.

L'assignation de l'objet au rack est effectuée dans la catégorie **Emplacement** dans laquelle des emplacements physiques sont mis en [relation](../basics/object-relations.md) les uns avec les autres. Tout d'abord, vous choisissez le rack dans l'attribut **Emplacement** ; ensuite, d'autres attributs à remplir sont affichés :

*   **Assemblage**: Comment l'objet sera-t-il assemblé - de manière **horizontale** (assemblage "normal") ou de manière **verticale** (par exemple, les PDU qui sont installés sur le côté)?
*   **Insertion**: L'objet nécessite-t-il la profondeur complète du rack (**avant** et **arrière**) ou est-il seulement monté à l'avant ou à l'arrière? Dans le cas d'objets qui sont assemblés d'un seul côté, la même unité peut être attribuée deux fois, c'est-à-dire à l'avant et à l'arrière.
*   **Position dans le rack**: Avec un assemblage **horizontal**, vous sélectionnez les unités de hauteur. Selon le nombre d'unités RU qu'un objet nécessite, les spécifications dans le menu déroulant changent. Avec un assemblage **vertical**, les **emplacements** sont affichés (en haut à droite = 1, en haut à gauche = 2, en bas à droite = 3, en bas à gauche = 4, etc.). Les unités de rack ou les emplacements déjà utilisés seront masqués.

[![Positionnement des objets dans le rack](../assets/images/en/evaluation/rack-view/4-rv.png)](../assets/images/en/evaluation/rack-view/4-rv.png)

Les objets déjà assignés sont affichés dans la **vue d'emplacement** et dans la catégorie **objets assignés localement**.

[![Positionnement des objets dans le rack](../assets/images/en/evaluation/rack-view/5-rv.png)](../assets/images/en/evaluation/rack-view/5-rv.png)

Édition des objets assignés
---------------------------

Dans la catégorie **Rack**, il existe plusieurs façons d'éditer les objets assignés. Pour chaque objet, il y a un petit bouton avec une flèche pointant vers le bas du côté droit. Lorsque vous cliquez sur ce bouton, vous pouvez choisir parmi les options suivantes :

*   **Lien d'objet** : La page de vue d'ensemble de l'objet est ouverte.
*   **Réassigner l'objet** : Une boîte de dialogue s'ouvre sur le côté droit avec laquelle vous pouvez choisir une nouvelle position pour un objet (voir ci-dessous).
*   **Détacher l'objet** : Les informations indiquant à quelle position l'objet est monté dans le rack sont supprimées. L'objet reste assigné au rack via l'assignation de l'emplacement.

[![Édition des objets assignés](../assets/images/en/evaluation/rack-view/6-rv.png)](../assets/images/en/evaluation/rack-view/6-rv.png)

Les objets qui sont déjà assignés au rack localement mais qui n'ont pas encore de position sont répertoriés du côté droit dans la boîte appelée **Objets non positionnés**. Via le bouton avec le symbole de la roue dentée, vous pouvez modifier les unités de rack (RU) requises pour l'objet. Avec le bouton X, vous supprimez l'assignation de l'emplacement de manière irrévocable (**purge**).


[![Édition des objets assignés](../assets/images/en/evaluation/rack-view/7-rv.png)](../assets/images/en/evaluation/rack-view/7-rv.png)

Lorsque vous cliquez sur l'objet dans la liste, une autre boîte s'ouvre en dessous. Avec ce dialogue, vous pouvez positionner l'objet dans le rack.

[![Édition des objets assignés](../assets/images/en/evaluation/rack-view/8-rv.png)](../assets/images/en/evaluation/rack-view/8-rv.png)

Statistiques
------------

La catégorie **Rack** fournit une large gamme d'évaluations concernant les objets assignés. Au-dessus de la représentation visuelle du rack, vous pouvez voir la boîte de statistiques. Vous pouvez l'ouvrir ou la fermer en cliquant sur la flèche du côté gauche.

[![Statistiques](../assets/images/en/evaluation/rack-view/9-rv.png)](../assets/images/en/evaluation/rack-view/9-rv.png)

Les statistiques comprennent plusieurs attributs de rack et d'objets assignés :

| Statistiques | Objets | Catégories | Attributs |
| --- | --- | --- | --- |
| **Emplacements libres** | **Rack**<br><br>objets assignés localement | **Facteur de forme**<br><br>**Emplacement** | **Unités de rack**<br><br>**Assemblage**, **Insertion**, **Position dans le rack** |
| **Emplacements utilisés** | voir ci-dessus | voir ci-dessus | voir ci-dessus |
| **Emplacements verticaux libres** | voir ci-dessus | voir ci-dessus | voir ci-dessus |
| **Emplacements verticaux utilisés** | voir ci-dessus | voir ci-dessus | voir ci-dessus |
| **Connecteurs PDU (Entrée)** | objets assignés localement du type **Unité de distribution d'énergie** | **Système de câblage → Connecteurs** | **Entrée/Sortie**, **Type de connexion**, **Assigné à** |
| **Connecteurs PDU (Sortie)** | objets assignés localement du type **Unité de distribution d'énergie** | **Système de câblage → Connecteurs** | **Entrée/Sortie**, **Type de connexion**, **Assigné à** |
| **Ports de commutateur** | objets assignés localement du type **Commutateur** | **Réseau → Port** | **Brancher**, **Connecté avec** |
| **Ports de commutateur FC** | objets assignés localement du type **Commutateur FC** | **Réseau → Port** | **Brancher**, **Connecté avec** |
| **Ports de panneau de brassage (Entrées)** | objets assignés localement du type **Panneau de brassage** | **Système de câblage → Connecteurs** | **Entrée/Sortie**, **Type de connexion**, **Assigné à** |
| **Ports de panneau de brassage (Sorties)** | objets assignés localement du type **Panneau de brassage** | **Système de câblage → Connecteurs** | **Entrée/Sortie**, **Type de connexion**, **Assigné à** |
| **Consommation d'électricité** | objets assignés localement | **Consommateur d'énergie** | **Watt** |
| **Consommation d'énergie thermique** | objets assignés localement | **Consommateur d'énergie** | **BTU** |

Catégorie des Racks
--------------

Lorsqu'un rack est assigné à une salle via la catégorie **Emplacement**, une autre représentation visuelle est disponible. Dans l'installation par défaut de i-doit, la catégorie **Racks** est déjà assignée au type d'objet **Salle**. Via cette catégorie, tous les objets de type **Rack**, qui sont assignés à une certaine salle, sont affichés visuellement.

[![Catégorie des Racks](../assets/images/en/evaluation/rack-view/10-rv.png)](../assets/images/en/evaluation/rack-view/10-rv.png)

Au-dessus de la représentation visuelle, plusieurs options sont disponibles :

*   **Réorganiser les racks** : Avec cette fonction, vous pouvez ajuster l'ordre des racks.
*   **Charger tous les racks de tous les emplacements enfants !** Les racks qui sont assignés à un niveau plus profond de la hiérarchie des emplacements sont également chargés. En standard, les objets directement assignés de type **Rack** sont affichés. Par exemple, la catégorie **Racks** peut ensuite être assignée à des objets de type **Bâtiment**, dans lesquels il y a d'abord des **Salles** et à un niveau inférieur des **Racks**.
*   **Charger les statistiques pour tous les racks** : Les statistiques (voir ci-dessus) pour tous les racks sont affichées successivement.
