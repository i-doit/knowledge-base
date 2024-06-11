# Modifier la structure des données {/examples/}

Ici, vous pouvez trouver des configurations pour modifier la structure des données de votre locataire.

La configuration des affectations est effectuée via une séparation en trois colonnes. Ces colonnes représentent vos ==Groupes de types d'objets==, ==Types d'objets dans== et ==Catégories dans==. Dans chaque colonne, il y a une ==zone en pointillés== par ligne vous permettant de changer l'ordre par glisser-déposer.

[![Mise en page](../../../assets/images/en/system-administration/administration/data-structure/1-ds.png)](../../../assets/images/en/system-administration/administration/data-structure/1-ds.png)

## Ajuster les Groupes de types d'objets, les Types d'objets et les Catégories {/examples/}

Dans les trois champs principaux, vous pouvez passer en mode édition en appuyant sur le ==bouton Ajuster==.
Ici, vous pouvez ==modifier les affectations== du groupe d'objets respectif, mais vous pouvez également créer et développer de nouveaux groupes, types d'objets ou catégories.

[![Ajuster](../../../assets/images/en/system-administration/administration/data-structure/2-ds.png)](../../../assets/images/en/system-administration/administration/data-structure/2-ds.png)

## Modifier les Affectations {/examples/}

Vous commencez à éditer dans la colonne ==Groupes de types d'objets==. Ici, vous pouvez ==sélectionner le groupe de types d'objets== pour lequel vous souhaitez ajuster les affectations de types d'objets.<br>
==Cliquez sur le Groupe de types d'objets== que vous souhaitez modifier, afin qu'une sélection soit disponible dans la colonne du milieu. Si vous n'avez pas besoin des groupes, ==vous pouvez les masquer== en utilisant les cases à cocher ou le ==bouton Ajuster==.

Lorsqu'un groupe est sélectionné et que la colonne du milieu est active, vous pouvez déterminer ==quels types d'objets== sont assignés au groupe correspondant. Les ==Types d'objets== qui sont grisés sont déjà assignés à d'autres groupes, mais peuvent toujours être réaffectés.

Vous pouvez ==ajouter des groupes personnalisés== en bas de la colonne des groupes d'objets. Ils ont une icône de crayon sur leur ligne afin que vous puissiez les éditer ou les supprimer à tout moment.

Il en va de même pour la colonne des types d'objets. Ici, vous pouvez créer des [types d'objets personnalisés](../../../basics/custom-object-types.md). Pour une configuration approfondie d'un type d'objet, cependant, nous recommandons l'utilisation de la [configuration des types d'objets](../../../basics/custom-object-types.md).

Lorsque vous cliquez sur un type d'objet dans la colonne du milieu, la colonne de droite est activée. Ici, vous pouvez voir les catégories attribuées au type d'objet sélectionné et vous pouvez modifier ou supprimer les attributions via les cases à cocher.

Le bouton ==Créer des catégories personnalisées== vous dirigera directement vers la fonction de création de [catégories personnalisées](../../../basics/custom-categories.md).

## Modifier les profils de structure de données

Vous pouvez enregistrer votre configuration actuelle sous forme de profil. Pour ce faire, saisissez un nom pour le profil dans ==Enregistrer le profil actuel==. Le profil apparaîtra alors dans les profils disponibles dans la colonne de droite. Ici, il est possible d'activer le profil, de le supprimer ou de le télécharger. Activez la case à cocher du profil souhaité et cliquez sur ==Charger le(s) profil(s) sélectionné(s)== pour restaurer l'attribution à partir du profil sélectionné. En utilisant le bouton de téléchargement, vous pouvez enregistrer le profil sous forme de fichier XML et le télécharger à nouveau en utilisant le bouton ==Choisir un fichier==, si nécessaire. Avec l'icône X rouge, vous pouvez supprimer le profil sélectionné.

Cette fonction est adaptée pour échanger des données de configuration entre plusieurs installations _i-doit_. Un profil contient les paramètres suivants :

- Groupes de types d'objets avec des noms, un ordre et d'autres attributs
- Types d'objets avec des noms, des attributions à des groupes de types d'objets et d'autres attributs de la configuration des types d'objets
- Catégories globales, spécifiques et personnalisées attribuées à chaque type d'objet
- Configuration de chaque catégorie personnalisée qui est attribuée à au moins un type d'objet

En conséquence, un profil contient la configuration de la documentation IT mais pas de contenu. Ni les objets, ni les entrées de catégories, ni les champs de dialogue remplis ne sont enregistrés.

Si vous souhaitez avoir un état clair pour effectuer les attributions à partir de zéro, vous pouvez réinitialiser toutes les attributions via le bouton ==Réinitialiser==.
