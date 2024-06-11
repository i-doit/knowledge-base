# Modèles

i-doit vous permet de créer des objets pouvant servir de modèles pour la création de nouveaux [objets](../glossary.md). Vous pouvez créer un grand nombre d'objets avec des [attributs](../glossary.md) identiques, par exemple des serveurs utilisant le même matériel, selon une procédure simplifiée.

Utilisation
----------

Vous trouverez la fonction de modèle dans i-doit à **Extras → CMDB → Modèles**. Ici, il est possible de visualiser et modifier les modèles existants, ainsi que de créer de nouveaux modèles et de générer des objets via des modèles.

[![Utilisation](../assets/images/en/efficient-documentation/templates/1-te.png)](../assets/images/en/efficient-documentation/templates/1-te.png)

Configuration
-------------

Les paramètres des modèles peuvent être configurés à **Administration → Paramètres généraux → Configuration du modèle**. Il est possible d'afficher les modèles dans les [listes d'objets](../basics/object-list/index.md) en activant le filtre de modèle. Lorsque vous définissez le filtre d'état dans une liste d'objets sur "Modèle", tous les modèles associés à ce [type d'objet](../basics/structure-of-the-it-documentation.md) seront affichés.

[![Configuration](../assets/images/en/efficient-documentation/templates/2-te.png)](../assets/images/en/efficient-documentation/templates/2-te.png)

Création d'un modèle
-------------------

Une fois la fonction de modèle ouverte, un nouveau modèle peut être créé via **Générer un nouveau modèle** sur le côté gauche du menu arborescent. Tout d'abord, vous serez invité à définir le type d'objet associé au modèle. Choisissez le type d'objet dans le menu déroulant et confirmez en cliquant sur **Créer un nouveau modèle**. La configuration suivante pour un modèle est identique à la création d'un objet régulier. Saisissez tout le contenu que vous souhaitez transférer aux objets ultérieurement et enregistrez vos saisies.

Alternativement, vous pouvez ouvrir la configuration pour créer un modèle via l'icône de flèche à côté du bouton **Nouveau** dans une liste d'objets.

[![Création d'un modèle](../assets/images/en/efficient-documentation/templates/3-te.png)](../assets/images/en/efficient-documentation/templates/3-te.png)

Afficher, Modifier et Supprimer les Modèles Existants
-----------------------------------------------------

Tous les modèles précédemment créés peuvent être affichés via **Présentation des modèles** dans le menu arborescent sur le côté gauche de la fonction de modèle. Cliquez sur l'un des modèles pour le modifier. En activant la case à cocher d'un ou de plusieurs modèles et en utilisant le bouton **Purger**, vous supprimerez ces modèles du système. Assurez-vous de vouloir purger les modèles sélectionnés car les modèles purgés ne peuvent pas être restaurés.

[![Voir, Modifier et Supprimer les Modèles Existants](../assets/images/en/efficient-documentation/templates/4-te.png)](../assets/images/en/efficient-documentation/templates/4-te.png)

Génération d'Objets à partir de Modèles
----------------------------------------

Utilisez **Créer des objets** dans le menu arborescent sur le côté gauche de la fonction de modèle pour créer des objets sur la base de vos modèles.

Ici, vous serez invité à saisir des informations de base sur vos nouveaux objets. Dans la première étape, le titre de l'objet ainsi que le type d'objet de vos objets doivent être définis. Comme la fonction de modèle vous permet de créer plusieurs objets en même temps, vous pouvez également définir le nombre d'objets (identiques) qui seront créés. Vous pouvez choisir d'utiliser un suffixe de compteur dans une zone supplémentaire qui s'ouvre si vous décidez de générer plus d'un objet. Il est également possible de définir les zéros de tête et la valeur à partir de laquelle vous souhaitez que le compteur démarre. De plus, les attributs **But de l'application** et **Catégorie** peuvent déjà être définis à l'avance.

Vous pouvez maintenant déterminer quel(s) modèle(s) utiliser pour la création d'objets dans la section **Choisir le(s) modèle(s)**. Sélectionnez les modèles souhaités dans le menu déroulant et ajoutez-les un par un via le bouton **Utiliser le modèle sélectionné**. Les informations de plusieurs modèles seront combinées dans chaque objet.

[![Générer des objets à partir de modèles](../assets/images/en/efficient-documentation/templates/5-te.png)](../assets/images/en/efficient-documentation/templates/5-te.png)

Ouvrir la fonction de modèle à partir d'une liste d'objets
-----------------------------------------------------------

Les fonctions pour la création de nouveaux modèles ou la création d'objets via des modèles sont également disponibles à travers les listes d'objets. Utilisez la flèche pointant vers le bas à côté du bouton **Nouveau** pour ouvrir le menu contextuel. Celui-ci contient les éléments pertinents pour accéder directement au processus souhaité.

[![Ouvrir la fonction de modèle à partir d'une liste d'objets](../assets/images/en/efficient-documentation/templates/6-te.png)](../assets/images/en/efficient-documentation/templates/6-te.png)

Modèle par défaut dans la Configuration du Type d'Objet
-------------------------------------------------

Vous pouvez choisir un modèle par défaut dans la [configuration du type d'objet](../basics/custom-object-types.md). Chaque modèle que vous avez créé peut être utilisé ici. Si vous définissez un modèle par défaut, tous les nouveaux objets créés seront remplis selon ce modèle. Bien sûr, vous pouvez ajuster les objets que vous avez créés de cette manière à tout moment et modifier leurs valeurs préremplies.

[![Modèle par défaut dans la Configuration du Type d'Objet](../assets/images/en/efficient-documentation/templates/7-te.png)](../assets/images/en/efficient-documentation/templates/7-te.png)
