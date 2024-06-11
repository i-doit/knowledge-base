# Attribution des Catégories aux Types d'Objets

La modification de la structure de données vous permet de gérer confortablement les attributions des [groupes de types d'objets](../glossary.md), des [types d'objets](../glossary.md) et des [catégories](../glossary.md) et de les adapter à vos besoins.

## Accès à la modification de la structure de données

Vous pouvez modifier la structure de données à **Administration → Structure de données → Modifier la structure de données**. Aucune donnée n'est supprimée lors des modifications. La structure de données est uniquement pertinente pour la présentation des données.

[![Modifier la structure de données](../assets/images/en/basics/assignment-of-categories-to-object-types/1-aoctot.png)](../assets/images/en/basics/assignment-of-categories-to-object-types/1-aoctot.png)

## Mise en page de la structure de données

La configuration des attributions se fait via une séparation en trois colonnes. Ces colonnes représentent vos ==Groupes de Types d'Objets==, ==Types d'Objets== et ==Catégories==. Dans chaque colonne, il y a une zone en pointillés par ligne vous permettant de changer l'ordre par glisser-déposer.

[![Mise en page de la structure de données](../assets/images/en/basics/assignment-of-categories-to-object-types/2-aoctot.png)](../assets/images/en/basics/assignment-of-categories-to-object-types/2-aoctot.png)

## Ajustement des groupes de types d'objets, des types d'objets et des catégories

Dans les trois principaux champs, vous pouvez passer en mode édition en appuyant sur le bouton :octicons-pencil-24: Ajuster pour effectuer des ajustements.<br>
Ici, vous pouvez modifier les affectations du groupe d'objets respectif, mais vous pouvez également créer et développer de nouveaux groupes, types d'objets ou catégories.

[![Ajustement des groupes de types d'objets, des types d'objets et des catégories](../assets/images/en/basics/assignment-of-categories-to-object-types/4-aoctot.png)](../assets/images/en/basics/assignment-of-categories-to-object-types/4-aoctot.png)

## Édition des affectations

Vous commencez l'édition dans la colonne de gauche, qui est la colonne des groupes de types d'objets. Ici, vous pouvez sélectionner les groupes de types d'objets pour lesquels vous souhaitez ajuster l'affectation des types d'objets. Cliquez sur le groupe correspondant pour activer la colonne du milieu. Si vous n'avez pas besoin des groupes, vous pouvez les masquer en utilisant les cases à cocher.<br>
Lorsqu'un groupe est sélectionné et que la colonne du milieu est active, vous pouvez déterminer quels types d'objets sont assignés au groupe correspondant. Les types d'objets qui sont grisés sont déjà assignés à d'autres groupes, mais peuvent toujours être réaffectés.<br>
Vous pouvez ajouter des groupes personnalisés en bas de la colonne des groupes d'objets. Ils ont une icône de crayon sur leur ligne afin que vous puissiez les éditer ou les supprimer à tout moment.<br>
Il en va de même pour la colonne des types d'objets. Ici, vous pouvez créer [des types d'objets personnalisés](./custom-object-types.md). Pour une configuration approfondie d'un type d'objet, cependant, nous recommandons l'utilisation de la configuration du type d'objet.<br>
En cliquant sur un type d'objet dans la colonne du milieu, la colonne de droite est activée. Ici, vous pouvez voir les catégories assignées au type d'objet sélectionné et vous pouvez modifier ou supprimer les affectations via les cases à cocher.<br>
Le bouton **Créer des catégories personnalisées** vous dirigera directement vers la fonction de création de [catégories personnalisées](./custom-categories.md). 

{ /* examples */ }

## Modifier la structure de données Profils {/ * exemples * /}

Vous pouvez enregistrer votre configuration actuelle sous forme de profil. À cette fin, saisissez un nom pour le profil dans **Enregistrer le profil actuel**. Le profil apparaîtra alors dans les profils disponibles. Il est possible d'activer un profil, de le supprimer ou de le télécharger. Activez la case à cocher du profil souhaité et cliquez sur **Charger le profil sélectionné** pour restaurer l'attribution à partir du profil sélectionné. En utilisant le bouton de téléchargement, vous pouvez enregistrer le profil sous forme de fichier XML et le télécharger à nouveau en utilisant le bouton **Choisir un fichier**, si nécessaire.

Cette fonctionnalité est adaptée pour échanger des données de configuration entre plusieurs installations _i-doit_. Un profil contient les paramètres suivants :

- Groupes de types d'objets avec des noms, un ordre et d'autres attributs
- Types d'objets avec des noms, des affectations à des groupes de types d'objets et d'autres attributs de la configuration des types d'objets
- Catégories globales, spécifiques et personnalisées attribuées à chaque type d'objet
- Configuration de chaque catégorie personnalisée qui est attribuée à au moins un type d'objet

En conséquence, un profil contient la configuration de la documentation informatique mais aucun contenu. Ni les objets, ni les entrées de catégorie, ni les champs de dialogue remplis ne sont enregistrés.

## Configuration Claire

Si vous souhaitez avoir un état clair pour effectuer les affectations à partir de zéro, vous pouvez réinitialiser toutes les affectations via le bouton **Effacer**.
