# Changement de Masse 

Le changement de masse est une fonctionnalité dans i-doit qui permet de modifier plusieurs [objets](../glossary.md) en une seule étape sur la base de modèles de changement. Avec ces modifications, les objets sélectionnés prennent les [attributs](../glossary.md) du modèle de changement.

Accès
------

Vous pouvez trouver la fonction de changement de masse dans **Extras → CMDB → Changement de masse**. Ici, il est possible de visualiser les modèles de changement existants, de les éditer, de créer de nouveaux modèles de changement et d'ajuster les objets conformément aux modèles.

[![Accès](../assets/images/en/efficient-documentation/mass-change/1-mc.png)](../assets/images/en/efficient-documentation/mass-change/1-mc.png)

Création d'un Modèle de Changement
--------------------------

Vous pouvez créer un modèle de changement en cliquant sur **Créer un nouveau modèle** sur le côté gauche du menu arborescent dès que vous accédez au changement de masse. Dans la première étape, vous êtes invité à définir le [type d'objet](../basics/structure-of-the-it-documentation.md) avec lequel le modèle sera associé. Choisissez le type dans le menu déroulant et confirmez avec le bouton **Créer un nouveau modèle**. La configuration suivante pour un modèle est identique à la création d'un objet régulier. Laissez tout le contenu que vous souhaitez transférer aux objets plus tard et enregistrez vos saisies.

[![Création d'un modèle de changement](../assets/images/en/efficient-documentation/mass-change/2-mc.png)](../assets/images/en/efficient-documentation/mass-change/2-mc.png)

!!! info "Modèles génériques"

    Vous pouvez également utiliser le **modèle générique** en tant que type d'objet pour vos modèles de changement. De cette manière, vous pouvez appliquer le modèle à n'importe quel type d'objet. Mais si ce modèle contient du contenu dans des catégories qui ne sont pas attribuées aux objets, vous ne pourrez voir ce contenu que si ces [catégories](../basics/structure-of-the-it-documentation.md) respectives sont attribuées.

Afficher, Modifier et Supprimer les Modèles de Changement Existants
-----------------------------------------------

En cliquant sur **Modèles existants** situés dans le menu arborescent (sur le côté gauche de la modification en masse), vous pouvez voir tous les modèles de changement créés. Cliquez sur un modèle de changement pour le modifier. En cochant la case d'un ou de plusieurs modèles de changement, vous pouvez les supprimer via le bouton **Purger**. Assurez-vous bien que vous voulez purger les modèles de changement sélectionnés, car les modèles de changement purgés ne peuvent pas être restaurés.

[![Voir, Éditer et Supprimer les Modèles de Changement Existants](../assets/images/en/efficient-documentation/mass-change/3-mc.png)](../assets/images/en/efficient-documentation/mass-change/3-mc.png)

Changement des Informations d'Objet avec un Modèle de Changement
--------------------------------------------------------------

Pour modifier des objets conformément à vos modèles de changement, utilisez l'option **Changement de masse** qui se trouve sur le côté gauche du changement de masse dans le menu arborescent.

En tant que première étape, choisissez les objets que vous souhaitez ajuster. Vous pouvez sélectionner autant d'objets que vous le souhaitez. À l'étape suivante, vous pouvez sélectionner le modèle de changement approprié dans le menu déroulant. Sur la base du modèle de changement sélectionné, les objets seront ajustés.

Les options à la troisième étape déterminent comment les champs vides du modèle et les catégories à valeurs multiples doivent être gérés. Il existe deux possibilités parmi lesquelles choisir :

*   **Ignorer les champs vides dans le modèle et laisser ces champs intacts dans les objets cibles**
    
*   **Effacer explicitement les champs lorsque le modèle n'a pas de contenu pour eux** 


De cette manière, vous pouvez configurer si vos objets seront exactement alignés sur le modèle de changement ou si seules les valeurs documentées dans le modèle de changement seront transférées à vos objets existants.

Les catégories à valeurs multiples peuvent être gérées de trois manières :

*   **Laisser les catégories intactes**
    
*   **Ajouter des entrées de catégorie à partir du modèle aux entrées existantes et laisser les entrées existantes intactes**
    
*   **Supprimer les entrées de catégorie existantes et prendre les entrées des modèles**
    

En laissant les catégories intactes, le contenu ne sera pas transféré aux catégories à valeurs multiples dans tous les cas, indépendamment du fait qu'elles aient déjà un contenu ou non. L'option d'ajout d'entrées de catégorie ne supprime pas votre contenu déjà documenté et complète toutes les entrées de votre modèle. En supprimant les entrées existantes, tous les contenus à valeurs multiples existants seront supprimés et remplacés par le contenu du modèle de changement.

Dès que tous les paramètres correspondent à vos besoins, vous pouvez appliquer les changements aux objets via le bouton **Appliquer les changements en masse**.

[![Appliquer des modifications en masse](../assets/images/en/efficient-documentation/mass-change/4-mc.png)](../assets/images/en/efficient-documentation/mass-change/4-mc.png)
