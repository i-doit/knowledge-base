# Câbles de raccordement et chemins

Avec une [documentation informatique](../glossary.md) étendue, tôt ou tard, vous devrez vous occuper de la question de comment cartographier le câblage. Cet article offre une introduction et décrit comment connecter les [objets matériels](../basics/structure-of-the-it-documentation.md) les uns aux autres.

Concept
-------

La cartographie des câblages dans i-doit est aussi polyvalente que dans la réalité : Ethernet, fibre optique, alimentation électrique, connexion d'équipements périphériques - tout ce qui a un connecteur et peut être connecté avec un câble trouve sa place dans la documentation informatique.

i-doit fournit **une stricte séparation entre la documentation des connexions et le câblage physique**. Un bon exemple est le câblage réseau via Ethernet. D'une part, les connexions entre les composants réseau actifs (commutateurs, routeurs, pare-feu) peuvent être enregistrées dans la [catégorie](../basics/structure-of-the-it-documentation.md) **Réseau → Port**. De cette manière, vous pouvez reconnaître quel commutateur est connecté à quel serveur. Les routes de connexion entre plusieurs composants deviennent visibles. D'autre part, les composants passifs jouent souvent un rôle important : les panneaux de brassage et les prises réseau aident à mettre de l'ordre pour éviter les câbles emmêlés. Cependant, lorsque les connexions entre les composants actifs répondent à vos besoins, vous pouvez ignorer les composants passifs et leurs câbles correspondants. i-doit est capable d'effectuer la documentation du câblage en arrière-plan ; l'utilisateur n'a pas à effectuer des étapes supplémentaires. Si une connaissance détaillée du câblage devient nécessaire ultérieurement, la documentation actuelle peut simplement être complétée et l'utilisateur n'a pas à recommencer à zéro.

Comme d'habitude dans i-doit, la documentation du câblage est réalisée à l'aide d'objets et d'[attributs](../basics/structure-of-the-it-documentation.md). En plus de nombreux formulaires, i-doit fournit des fonctions de visualisation, d'évaluation et d'importation. Le texte suivant décrit ces fonctions.

Dossier de catégorie pour **Câblage**
---------------------------------

Chaque [type d'objet](../basics/structure-of-the-it-documentation.md) peut être [configuré](../basics/assignment-of-categories-to-object-types.md) avec le dossier de catégorie **Câblage**. De cette manière, les objets de ces types sélectionnés reçoivent les catégories **Connecteurs** et **Interface**.

Le dossier de catégorie ne sert pas seulement de niveau supérieur pour les sous-catégories spécifiées, mais offre également quelques options de visualisation intéressantes pour le câblage :

| Onglet | Description |
| --- | --- |
| **Trajet de câble : Liste** | Chaque connexion (voir la catégorie **Connecteurs**) avec un itinéraire de câble complet est répertoriée. |
| **Trajet de câble : Vue graphique** | Contrairement à la vue en liste mentionnée ci-dessus, tous les objets sont également affichés avec des images. |
| **Trajet de câble : Vue arborescente (Imbrication)** | L'itinéraire du câble est affiché sous forme de structure arborescente pour chaque connecteur. |

Le dossier de catégorie convient à tous les objets qui contribuent de manière active ou passive au câblage.

[![cable-patches](../assets/images/en/use-cases/cable-patches-and-paths/1-cpap.png)](../assets/images/en/use-cases/cable-patches-and-paths/1-cpap.png)

[![cable-patches](../assets/images/en/use-cases/cable-patches-and-paths/2-cpap.png)](../assets/images/en/use-cases/cable-patches-and-paths/2-cpap.png)

[![cable-patches](../assets/images/en/use-cases/cable-patches-and-paths/3-cpap.png)](../assets/images/en/use-cases/cable-patches-and-paths/3-cpap.png)

Dossier de catégorie pour les **Connecteurs**
------------------------------------

Si l'objet sélectionné possède un connecteur physique de quelque nature que ce soit, il peut être documenté dans la catégorie **Connecteurs**.

Chaque connexion est définie soit comme une **Entrée** soit comme une **Sortie**. Vous pouvez établir une relation n à n entre les entrées et les sorties :

*   Connexion entre une entrée et une sortie
*   Connexion entre une entrée et plusieurs sorties

Cette connexion entre l'entrée et la sortie est facultative et n'a de sens que dans certaines conditions. Un exemple est un panneau de brassage avec la possibilité de placer des câbles qui mènent aux ports. C'est l'origine d'une relation 1 à 1 entre l'entrée et la sortie.

La catégorie **Connecteurs** est automatiquement remplie d'entrées par d'autres catégories :

*   **Réseau → Port** : Si un nouveau port est créé, il est automatiquement défini comme une nouvelle **sortie**.
*   **Consommateur d'énergie** : Si une nouvelle alimentation est créée, sa connexion électrique est automatiquement définie comme une nouvelle **entrée**.
*   **Câblage → Interface** : Si une nouvelle interface est créée, elle est automatiquement définie comme une nouvelle **sortie**.
*   **Réseau de stockage → Port FC** : Si un nouveau port de canal de fibre est créé, il est automatiquement défini comme une nouvelle **sortie**.

[![câbles-connecteurs](../assets/images/en/use-cases/cable-patches-and-paths/4-cpap.png)](../assets/images/en/use-cases/cable-patches-and-paths/4-cpap.png)

### Catégorie pour **Interface**

La catégorie **Interface** est destinée à la création de connexions supplémentaires qui ne concernent pas le câblage du réseau ou de l'alimentation. Il peut s'agir de connexions de périphériques, tels que des moniteurs via HDMI ou des imprimantes via USB.

Type d'objet **Câble**
-----------------------

Le type d'objet **Câble** contient tous les objets représentant un câble. Dans i-doit, il est obligatoire qu'un câble ait un début et une fin. Les câbles en Y ou des câbles similaires ne sont pas pris en charge. Ici, l'utilisateur doit se contenter d'un objet auxiliaire dans **Câblage → Connecteurs** qui contient une entrée avec deux sorties connectées entre elles (relation 1 à 2).

Les caractéristiques d'un câble sont définies dans plusieurs catégories qui sont expliquées comme suit.

[![câbles-câblage](../assets/images/en/use-cases/cable-patches-and-paths/5-cpap.png)](../assets/images/en/use-cases/cable-patches-and-paths/5-cpap.png)

### Dossier de catégorie pour **Connexion de câble**

Le dossier de catégorie pour la **Connexion de câble** contient la catégorie **Câble** et est donc généralement attribué au type d'objet **Câble**. Le dossier montre à quel appareil le câble est connecté.

[![câbles-connexion](../assets/images/en/use-cases/cable-patches-and-paths/6-cpap.png)](../assets/images/en/use-cases/cable-patches-and-paths/6-cpap.png)

### Catégorie pour **Câble**

Les propriétés essentielles d'un câble sont enregistrées dans la catégorie **Connexion de câble → Câble**:

| Attribut | Description |
| --- | --- |
| **Type de câble  <br>** | Spécification du câble, par exemple, "CAT7" ou "LWL" |
| **Longueur du câble  <br>** | Longueur du câble - pas seulement en centimètres |
| **Couleur** | Couleur de la gaine extérieure |
| **Occupation** | Combien de fibres/conducteurs le câble contient-il? |
| **Quantité maximale de fibres/conducteurs** | Combien de fibres/conducteurs doivent être utilisés au maximum? |

[![câbles-attributs](../assets/images/en/use-cases/cable-patches-and-paths/7-cpap.png)](../assets/images/en/use-cases/cable-patches-and-paths/7-cpap.png)

### Catégorie pour **Fibre/Plomb**

Si vous voulez/doit documenter même le moindre détail, vous allez adorer la catégorie **Fibre/Plomb**. Vous pouvez spécifier des propriétés supplémentaires pour chaque fibre d'un câble à fibre optique ou pour chaque plomb d'un câble en cuivre :

| ### Attribut | ### Description |
| --- | --- |
| **Étiquette** | Description |
| **Catégorie** | Pertinent pour LWL (OM1-4, OS1-2) |
| **Couleur** | Longueur d'onde |
| **Amortissement** | en dB |
| **RX** | Connexion pour recevoir des données |
| **TX** | Connexion pour envoyer des données |

[![cable-patches-fiberlead](../assets/images/en/use-cases/cable-patches-and-paths/8-cpap.png)](../assets/images/en/use-cases/cable-patches-and-paths/8-cpap.png)

Type d'objet **Panneau de brassage**
-----------------------------

Les panneaux de brassage sont documentés dans i-doit en tant qu'objets de type **Panneau de brassage**. Généralement, le dossier de catégorie **Câblage** est attribué à ce composant passif. Dans la catégorie **Câblage → Connecteurs**, vous pouvez définir les ports : Une **Entrée** représente le port réseau ; une **Sortie** représente le câble. L'entrée et la sortie sont connectées entre elles.

[![cable-patches-panel](../assets/images/en/use-cases/cable-patches-and-paths/9-cpap.png)](../assets/images/en/use-cases/cable-patches-and-paths/9-cpap.png)

Le **Navigateur de connexion** (voir ci-dessous) est utile si vous avez besoin d'une connexion rapide des panneaux de brassage.

Type d'objet **Chemin de câbles**
----------------------------

Les chemins de câbles sont une norme dans les salles serveurs et les centres informatiques. Ils regroupent plusieurs câbles et offrent des voies ordonnées. Ainsi, le type d'objet **Chemin de câbles** contient les catégories **Emplacement** et **objets localement assignés** pour accueillir les câbles. À son tour, les objets de type **Câble** sont assignés à la catégorie **Emplacement**.

[![cable-patches-tray](../assets/images/en/use-cases/cable-patches-and-paths/10-cpap.png)](../assets/images/en/use-cases/cable-patches-and-paths/10-cpap.png)

Type d'objet **Conduit**
-------------------------

Dans la même lignée que le type d'objet **Chemin de câbles** (voir ci-dessus) se trouve le type d'objet **Conduit**.

[![cable-patches-tray2](../assets/images/en/use-cases/cable-patches-and-paths/11-cpap.png)](../assets/images/en/use-cases/cable-patches-and-paths/11-cpap.png)

### Câblage Simple {/examples}

Le dossier de la catégorie **Câblage** contient déjà plusieurs options de visualisation. De plus, il existe une autre vue sous **Extras → CMDB → Câblage → Câblages simples** avec des fonctions supplémentaires. Après avoir sélectionné un objet câblé, tous les itinéraires de câbles entrants et sortants sont affichés. De plus, les noms des connexions et des câbles peuvent être affichés ou masqués. En utilisant le filtrage, vous pouvez afficher uniquement les itinéraires sélectionnés.

Avec des cases à cocher, vous pouvez modifier le type de plusieurs connexions simultanément.

Les itinéraires de câbles peuvent être exportés au format CSV.

[![câblage-simple](../assets/images/en/use-cases/cable-patches-and-paths/12-cpap.png)](../assets/images/en/use-cases/cable-patches-and-paths/12-cpap.png)

Navigateur de Connexions {/examples}

Cette fonction permet une connexion rapide et plus facile de deux objets. Cet élément se trouve dans la catégorie **Câblage → Connecteurs** via le bouton **Navigateur de connexions**. Une condition préalable est l'existence de connexions déjà documentées des deux objets.

[![navigateur-connexions](../assets/images/en/use-cases/cable-patches-and-paths/13-cpap.png)](../assets/images/en/use-cases/cable-patches-and-paths/13-cpap.png)

Le **Navigateur de connexions** ouvert offre une vue en deux parties : L'objet sélectionné par l'utilisateur est indiqué du côté gauche avec toutes les connexions disponibles. Les entrées et les sorties sont affichées séparément. Un deuxième objet est chargé avec toutes ses connexions du côté droit, de sorte que les deux objets peuvent être connectés l'un à l'autre.

Vous pouvez relier les connexions du premier objet affiché à droite aux connexions du deuxième objet affiché à gauche. La vue des entrées et sorties peut être inversée, de sorte que vous pouvez afficher les entrées ainsi que les sorties soit du côté gauche soit du côté droit.

Avec le bouton **Charger l'objet suivant**, vous pouvez suivre les itinéraires de connexion existants d'un objet.

Sélectionnez les cases à cocher des connecteurs pour connecter les connecteurs entre les deux objets. Avec la case à cocher en haut, vous choisissez tous les connecteurs disponibles. Vous pouvez sélectionner une plage de connecteurs en utilisant la touche **Maj**. Il est important que le nombre de connecteurs du premier objet corresponde au nombre de connecteurs du deuxième objet.

Avec le bouton correspondant (**Connecter les connecteurs**), vous connectez les connecteurs sélectionnés des deux objets entre eux. L'approche logique est de connecter les connexions sélectionnées de haut en bas, une après l'autre, jusqu'à ce que vous atteigniez la fin de la liste.

Pour chaque nouvelle connexion, i-doit planifie un objet **Câble**. Avec la case à cocher **Câblage automatique**, de nouveaux objets **Câble** sont créés sans poser d'autres questions. Sinon, vous devez sélectionner un objet **Câble** existant pour chaque connexion dans une nouvelle fenêtre.

Avec le bouton **Changer le câble sélectionné**, vous pouvez choisir un objet câble alternatif pour les connexions sélectionnées.

Le bouton **Déconnecter les connecteurs** a pour effet de supprimer de manière irrévocable les connexions des connecteurs sélectionnés.

[![cable-patches-disconnect](../assets/images/en/use-cases/cable-patches-and-paths/14-cpap.png)](../assets/images/en/use-cases/cable-patches-and-paths/14-cpap.png)

Importation de Câblage
--------------

Vous pouvez créer des itinéraires de câblage dans i-doit via l'importation d'un fichier au format CSV. Les étapes requises se trouvent dans **Extras → CMDB → Importation → Câblage**.

Les options suivantes sont disponibles :

| Option | Description |
| --- | --- |
| **Type de câblage  <br>** | Dans quelle catégorie souhaitez-vous créer des entrées ? Vous pouvez choisir entre :<br><br>*   **Connecteurs** (voir la catégorie **Câblage → Connecteurs**)<br>*   **Ports FC** (voir la catégorie **Réseau de Zone de Stockage → Port FC**)<br>*   **Ports** (voir la catégorie **Réseau → Port**)<br>*   **Interface** (voir la catégorie **Câblage → Interface**)<br><br>La catégorie est prise en compte uniquement avec le premier et le dernier objet du parcours de câblage respectif. Avec tous les autres objets intermédiaires, les entrées sont importées dans la catégorie **Câblage → Connecteurs**. |
| **Type de connexion  <br>** | Quelle connexion est impliquée ? Vous pouvez sélectionner toutes les entrées de l'attribut **Type de connexion** dans la catégorie **Câblage → Connecteurs**. La liste peut être adaptée dans **Administration → Paramètres CMDB → Administration des dialogues → Connecteurs :** **Type de connexion**. |
| **Créer des objets non existants entre l'objet de départ et l'objet de fin automatiquement** | Si cette option est activée, vous pouvez créer automatiquement des objets documentés non existants entre l'objet de départ et l'objet de fin lors de l'importation. |
| **Type d'objet pour tous les objets générés automatiquement** | Si l'option mentionnée ci-dessus est active, vous devez également définir à quel type d'objet les objets nouvellement créés doivent être attribués. |

Avec le bouton **Charger le fichier CSV**, vous pouvez charger un fichier sélectionné et l'analyser. Le résultat peut être trouvé dans l'onglet **Contenu**.

Les lignes et colonnes du fichier CSV sont affichées dans l'onglet **Contenu**. Vous pouvez définir de nouvelles lignes et colonnes avec les boutons respectifs. Chaque ligne représente un itinéraire de câblage avec un objet de départ et un objet d'arrivée ainsi qu'un certain nombre d'objets intermédiaires.

L'objet de départ se compose d'un titre d'objet et d'une sortie, l'objet d'arrivée d'un titre d'objet et d'une entrée. Les objets intermédiaires ont chacun une entrée et une sortie. Entre les connecteurs se trouvent des objets de type **Câble** et ils reçoivent également un titre d'objet. Les entrées et sorties des objets intermédiaires peuvent être échangées ultérieurement. Lorsque les connecteurs et les câbles ne reçoivent pas de noms, ils seront numérotés consécutivement.

L'attribution des titres d'objet et des connecteurs est effectuée soit avec le fichier CSV, soit avec les champs de texte. Une attribution automatique des noms pour chaque colonne individuellement est possible.

Également utilisable sans fichier CSV

Vous n'avez pas nécessairement besoin d'un fichier CSV pour l'importation. Au lieu de cela, vous pouvez utiliser l onglet **Contenu** pour créer manuellement des itinéraires de câblage.

Les objets inexistants sont affichés en rouge, les objets à créer automatiquement sont affichés en jaune et les objets déjà existants sont mis en surbrillance en vert. Ils sont identifiés à l'aide du titre de l'objet et du type d'objet.

Vous pouvez importer les itinéraires de câblage avec le bouton **Démarrer le câblage**.

[![cable-patches-start](../assets/images/en/use-cases/cable-patches-and-paths/15-cpap.png)](../assets/images/en/use-cases/cable-patches-and-paths/15-cpap.png)
