# Configurer les listes d'objets

Chaque utilisateur peut configurer ses propres vues de liste.

## Configuration de la vue de liste personnalisée

Vous pouvez accéder à la configuration des [listes d'objets](./index.md) respectives via l'icône à côté du filtre de la liste d'objets. Alternativement, vous pouvez ouvrir **Administration → Paramètres utilisateur → Listes d'objets → [Type d'objet]**, où **[Type d'objet]** doit être remplacé par le type d'objet dont vous souhaitez personnaliser la vue de liste.

La configuration d'une vue de liste est spécifique à l'utilisateur. Cela signifie que ces paramètres s'appliquent uniquement à l'utilisateur lui-même. Les vues des autres utilisateurs ne sont pas modifiées, à moins que l'un d'eux ne transfère ces vues à d'autres. Cet utilisateur particulier aura besoin des autorisations correspondantes qui peuvent être définies dans l'administration des autorisations. De cette manière, la nécessité d'ajustements réguliers des utilisateurs avec des priorités différentes (par exemple, parce qu'ils sont dans des départements différents) peut être évitée.

[![Configuration de la vue de liste personnalisée](../../assets/images/en/basics/object-list/configure-object-lists/1-col.png)](../../assets/images/en/basics/object-list/configure-object-lists/1-col.png)

## Définition de la manière d'ouvrir un objet

En haut à gauche, une case à cocher marque l'option permettant d'ouvrir un objet en cliquant sur sa ligne. En désactivant cette option, un objet peut être ouvert exclusivement via le lien de l'objet dans la colonne correspondante.



## Sélection des attributs affichés

Les [attributs](../../glossary.md) affichés dans la liste peuvent être définis via les deux colonnes. Sélectionnez la [catégorie](../../glossary.md) dont vous souhaitez voir le contenu dans la liste dans la zone de gauche. Assurez-vous de sélectionner d'abord s'il s'agit d'une catégorie globale, [spécifique](../../glossary.md) ou [catégorie personnalisée](../custom-categories.md). La catégorie elle-même est choisie via le menu déroulant. Maintenant, tous les attributs appartenant à cette catégorie sont affichés. Vous pouvez ajouter les attributs aux attributs sélectionnés via le symbole plus vert, afin qu'ils apparaissent également dans la colonne de droite. Le symbole moins rouge vous permet de supprimer les attributs déjà sélectionnés de la vue de la liste. Vous pouvez ajuster la hiérarchie des attributs dans la colonne de droite via un glisser-déposer. L'attribut le plus en haut dans cette vue se trouve en premier dans votre liste.



## Définir le Tri Standard

Vous pouvez trouver des boutons radio dans la zone des attributs sélectionnés pour cette liste, qui sont utilisés pour déterminer par quel attribut la liste sera triée. L'option **Trier** est disponible au-dessus de la sélection des attributs. De cette manière, il est possible d'ajuster le tri à l'ordre croissant ou décroissant.


## Enregistrer et Restaurer les Listes

Dès que votre configuration répond à vos spécifications, utilisez le bouton **Enregistrer** pour sauvegarder les modifications. Si vous avez déjà effectué une configuration mais souhaitez la rétablir à la vue par défaut, vous pouvez utiliser le bouton **Réinitialiser la liste par défaut**. N'oubliez pas de sauvegarder ce processus en cliquant sur le bouton **Enregistrer**. Pour voir les résultats de la configuration, vous pouvez accéder à la vue de la liste via le bouton **Aller à la liste**.

<Notes>

    Si vous configurez une vue de liste et que vous remarquez que l'affichage ne correspond pas à la configuration lors du chargement de la liste la prochaine fois, veuillez vider le cache de votre navigateur pour vous assurer que l'affichage de la liste est à jour.

## Appliquer la Configuration à d'Autres Utilisateurs

Tant que vous avez les autorisations nécessaires, il est possible d'attribuer la configuration actuelle d'une liste à d'autres utilisateurs de votre installation i-doit, dans la section **Attribuer la configuration à d'autres utilisateurs**. Pour ce faire, sélectionnez l'utilisateur souhaité via le navigateur d'objets. Veuillez noter que votre propre configuration peut être écrasée en procédant ainsi.

## Définir la Configuration comme Standard

Vous pouvez ajuster la vue standard des listes de ce type d'objet via **Définir la configuration comme standard**, tant que vous possédez les autorisations nécessaires pour le faire. Tous les utilisateurs sans configuration personnalisée pour cette liste verront la vue standard que vous avez définie la prochaine fois qu'ils ouvriront la liste. Les utilisateurs ayant une vue personnalisée conserveront leur liste. Bien sûr, tous les utilisateurs peuvent toujours configurer des vues de liste personnalisées.

!!! info "Note"

    Les listes d'objets avec un grand nombre d'attributs peuvent entraîner une diminution des performances. Si vous constatez une baisse de performance, veuillez réduire le nombre d'attributs sélectionnés ou augmenter vos [ressources système](../../installation/system-requirements.md).

!!! succès "Conseil"

    L'identifiant de l'objet est affiché dans chaque liste d'objets dans l'installation standard d'_i-doit_. Comme cela n'est pas pertinent pour une utilisation régulière, vous pouvez supprimer cette colonne des listes. Cela améliore également la transparence.

