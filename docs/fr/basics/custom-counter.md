# Compteur Personnalisé

Tous les compteurs configurés sont affichés ici dans une liste.<br>
Les compteurs peuvent être ajoutés via le bouton **Ajouter un compteur**.

Vous pouvez également réinitialiser un compteur à 1 avec le bouton **Réinitialiser**.<br>
Vous pouvez également supprimer un compteur avec le bouton **Supprimer**.

Tous les compteurs sont également disponibles/utilisables dans [l'édition de liste](../efficient-documentation/list-editing.md), [changement en masse](../efficient-documentation/mass-change.md), [modèles](../efficient-documentation/templates.md) et [numéro d'inventaire généré automatiquement](../basics/unique-references.md#inventory-number) à partir de la configuration du type d'objet. De plus, les compteurs peuvent également être utilisés avec les champs de texte des [catégories personnalisées](../basics/custom-categories.md).<br>
Par exemple pour l'attribut "Titre" dans la catégorie "Général". Il est saisi manuellement dans le champ correspondant. Chaque fois que le compteur est utilisé, il est incrémenté de 1.

## Création d'un compteur personnalisé

Après qu'un compteur a été ajouté, il doit recevoir son propre titre. Le texte **%COUNTER_** n'est pas modifiable.<br>
Un compteur complet ressemble par exemple à ceci **%COUNTER_CUSTOMTEXT%**. Un compteur enregistré n'est plus modifiable.

## Définir des zéros de tête

Si vous avez besoin de zéros de tête, utilisez-les dans un [modèle](../efficient-documentation/templates.md#) ou lors de la création d'un nouvel [Objet](../basics/structure-of-the-it-documentation.md#object).
Pour utiliser des zéros de tête, vous devez ajouter **#N** au compteur lors de la création d'un objet.

Si vous créez un Client dont le titre doit être **Client_00001**, vous devez insérer **Client_%COUNTER_CLIENTS#5%** comme titre.

## Définir le numéro de départ

Cependant, si le compteur doit commencer à 125 au lieu de 1, vous devez modifier le compteur créé dans les [paramètres experts du locataire](../system-administration/administration/tenant-management/expert-settings.md).<br>
Ouvrez les paramètres experts et recherchez `cmdb.counter`, vous trouverez votre compteur également par nom si votre compteur s'appelle `%COUNTER_CLIENT%`, alors le nom est `cmdb.counter.counter_client`.<br>
Modifiez maintenant la valeur pour le numéro de départ souhaité et appuyez sur le bouton de sauvegarde.
