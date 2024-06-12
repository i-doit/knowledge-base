# Configuration de la vue en liste

Vous pouvez configurer la vue des [listes d'objets](./index.md) individuellement par liste et par utilisateur.

## Accès à la configuration

Vous pouvez accéder à la configuration de la liste d'objets correspondante avec le bouton [![Gear](../../assets/images/en/basics/object-list/configuration-of-the-list-view/1-cotlv.svg)](../../assets/images/en/basics/object-list/configuration-of-the-list-view/1-cotlv.svg) dans la [barre de navigation et de filtre](./navigation-and-filtering.md). Une autre possibilité est l'activation via **Administration → Paramètres utilisateur → Listes d'objets → [Type d'objet]**.

[![Accès à la configuration](../../assets/images/en/basics/object-list/configuration-of-the-list-view/2-cotlv.png)](../../assets/images/en/basics/object-list/configuration-of-the-list-view/2-cotlv.png)

## Sélection des attributs

Tout comme le [gestionnaire de rapports](../../evaluation/report-manager.md), vous pouvez définir les colonnes via la sélection de la catégorie et de l'attribut inclus.

Tout d'abord, vous sélectionnez une catégorie [globale, spécifique](../../basics/structure-of-the-it-documentation.md) ou [personnalisée](../custom-categories.md) dans le menu déroulant. Vous pouvez filtrer la liste des catégories avec un champ de texte.

Lorsque vous sélectionnez une catégorie, les attributs pouvant être définis comme une colonne sont affichés. Ajoutez un attribut aux attributs sélectionnés en cliquant sur le [![button-add](../../assets/images/en/basics/object-list/configuration-of-the-list-view/3-cotlv.svg)](../../assets/images/en/basics/object-list/configuration-of-the-list-view/3-cotlv.svg) bouton.

Vous pouvez manipuler la liste des attributs sélectionnés et changer leur ordre par glisser-déposer. Plus l'objet est haut dans la sélection, plus il est affiché à gauche de la liste d'objets. Supprimez un attribut avec le [![button-cancel](../../assets/images/en/basics/object-list/configuration-of-the-list-view/4-cotlv.svg)](../../assets/images/en/basics/object-list/configuration-of-the-list-view/4-cotlv.svg) bouton.

!!! info "Restrictions"

    Les restrictions suivantes s'appliquent à la sélection des attributs :

    -   Tous les attributs de toutes les catégories ne sont pas disponibles.
    -   Le nombre d'attributs est limité à **10**.

Les attributs provenant des [catégories de listes (à valeurs multiples)](../../basics/structure-of-the-it-documentation.md) peuvent être présentés de différentes manières. Avec le menu déroulant pour la présentation des données groupées, vous pouvez afficher les attributs soit séparés par des virgules en parallèle, soit sous forme de liste les uns en dessous des autres. Un exemple est l'attribut `Adresses hôtes` de la catégorie `Adresse hôte`.

!!! success "Conseil"

    Dans l'installation par défaut de i-doit, l'[ID](../unique-references.md) est affiché dans chaque liste d'objets. Comme il n'est pas pertinent pour une utilisation conventionnelle, vous pouvez supprimer la colonne correspondante des listes. Cela a également du sens pour des raisons de clarté.

!!! info "Performance"

    Les listes d'objets avec un grand nombre d'attributs peuvent entraîner une réduction des performances. Si vous observez une perte de performances, réduisez le nombre d'attributs sélectionnés ou augmentez vos [ressources système](../../installation/system-requirements.md).

[![Sélection d'attributs](../../assets/images/en/basics/object-list/configuration-of-the-list-view/7-cotlv.png)](../../assets/images/en/basics/object-list/configuration-of-the-list-view/7-cotlv.png)

## Présélection des colonnes

Vous pouvez également spécifier avec quel tri la liste d'objets doit être chargée. En plus de certains attributs, vous pouvez également cliquer sur un bouton de sélection. Déterminez si l'attribut sélectionné doit être trié par ordre croissant ou décroissant dans le menu déroulant **Tri**.

Sans définir de tri, les objets sont triés par leur [ID](../unique-references.md).

<Notes>

!!! info "Restrictions"

    Les restrictions suivantes s'appliquent au tri des attributs :

    -   Tous les attributs ne peuvent pas être triés.
    -   Un tri ultérieur avec les en-têtes de colonnes n'est pas possible avec une liste d'objets de plus de **10 000** objets. Vous pouvez modifier cette [restriction](./advanced-settings.md).

## Affectation de Filtres

Vous pouvez préfiltrer une liste d'objets déjà pendant le chargement. Sélectionnez l'attribut dans le menu déroulant pour le **Filtre par défaut** et saisissez la valeur de filtrage dans le champ de texte à droite.<br>
Si vous ne souhaitez pas sélectionner un attribut à filtrer à chaque fois dans la vue de liste, le filtre peut être défini pour tous les champs.

## Différentes Manières d'Ouvrir un Objet

Souvent, un simple regard sur la liste d'objets ne suffit pas pour récupérer tous les attributs requis. Vous pouvez donc ouvrir un objet via la liste. Vous avez deux options :

-   Ouvrir l'objet en cliquant sur la ligne respective dans la liste d'objets. À cette fin, sélectionnez la case à cocher **Activer, si vous souhaitez cliquer sur la ligne, au lieu du "lien d'objet", pour ouvrir l'objet**.
-   Ouvrir (et éditer) l'objet en sélectionnant la case à cocher d'un objet et le bouton **Éditer**.

Vous pouvez activer la première option pour tous les utilisateurs et toutes les listes d'objets simultanément. Le bouton **Activer le clic sur la ligne pour les listes d'objets** se trouve sous **Administration → Outils système → Cache / Base de données → Base de données.**

## Réinitialiser la Configuration

Chaque liste d'objets a une configuration par défaut. Si vous souhaitez réinitialiser la liste d'objets à ses paramètres par défaut, cliquez sur le bouton **Restaurer la configuration par défaut de la liste**.

## Définir la Configuration comme Standard

Lorsque vous souhaitez qu'une liste d'objets devienne la liste par défaut, cliquez sur le bouton **Définir comme standard** dans le champ **Définir la configuration comme standard.** Les listes d'objets qui ont déjà été modifiées par les utilisateurs ne sont pas affectées. Par conséquent, ce changement concerne les nouveaux utilisateurs et les utilisateurs qui n'ont pas encore modifié une liste d'objets.

[![Définir la Configuration comme Standard](../../assets/images/en/basics/object-list/configuration-of-the-list-view/5-cotlv.png)](../../assets/images/en/basics/object-list/configuration-of-the-list-view/5-cotlv.png)

## Assigner la Configuration à d'Autres Utilisateurs

Si vous souhaitez prédéfinir une liste d'objets spécifique pour d'autres utilisateurs, sélectionnez-la dans le champ **Définir la configuration pour d'autres utilisateurs** via un navigateur d'objets. Ensuite, la sélection est confirmée avec le bouton **Définir la configuration**.


[![Attribuer la Configuration à d'Autres Utilisateurs](../../assets/images/en/basics/object-list/configuration-of-the-list-view/6-cotlv.png)](../../assets/images/en/basics/object-list/configuration-of-the-list-view/6-cotlv.png)

## Sauvegarde de la Configuration 

Toutes les modifications de la configuration sont acceptées avec le bouton **Enregistrer**.

!!! info "Cache du Navigateur"

    Si la vue de liste ne correspond pas à la configuration lors de l'activation de la liste d'objets, il est utile de vider le cache du navigateur web.

## Autorisation de Modifier la Vue de Liste 

Avec la [gestion des droits des utilisateurs](../../efficient-documentation/rights-management/index.md), vous pouvez attribuer des droits et déterminer quelles personnes ou groupes de personnes seront autorisés à configurer la vue de liste et la préconfigurer pour d'autres utilisateurs.
