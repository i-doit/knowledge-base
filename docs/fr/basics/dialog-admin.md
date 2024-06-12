# Dialog-Admin

Le [champ d'attribut](./attribute-fields.md) **Dialog+**, qui est un champ déroulant où vous pouvez modifier les valeurs, est souvent utilisé dans i-doit. Ces champs d'attribut peuvent être trouvés dans de nombreuses [catégories](../glossary.md) de la [documentation IT](../glossary.md) ou dans d'autres fonctionnalités fournies par i-doit. L'administration centrale des valeurs est effectuée via le **Dialog-Admin** dans l'**Administration**.

## Aperçu

Vous pouvez trouver un aperçu de tous les [attributs](../glossary.md) du type de champ **Dialog+** sous **Administration → Contenu prédéfini → Dialog-Admin**. Ils sont triés alphabétiquement selon les catégories associées dans l'arborescence de navigation de gauche. Lorsque vous avez créé une [catégorie personnalisée](././custom-categories.md) avec un attribut du type de champ **Dialog+**, cet attribut et sa catégorie associée sont également affichés dans l'arborescence de navigation sous **Dialog+ personnalisé**.

[![Aperçu](../assets/images/en/basics/dialog-admin/1-da.png)](../assets/images/en/basics/dialog-admin/1-da.png)

## Afficher les valeurs

Une vue d'ensemble des valeurs qui ont été documentées jusqu'à présent (si elles existent) sera chargée dans la zone principale lorsque vous cliquez sur un attribut dans l'arborescence de navigation de gauche dans la zone **Dialog-Admin**.

[![Afficher les valeurs](../assets/images/en/basics/dialog-admin/2-da.png)](../assets/images/en/basics/dialog-admin/2-da.png)

## Créer des Valeurs

Cliquez sur le bouton **Nouveau** au-dessus de l'aperçu lorsque vous souhaitez créer une nouvelle valeur. Un champ de formulaire s'ouvre et vous pouvez remplir les détails suivants :

- **ID**:<br>
    Chaque valeur dans un attribut **Dialog+** reçoit un identifiant unique par i-doit. Cela est très utile, par exemple, lors de travaux avec l'[API](../i-doit-pro-add-ons/api/index.md).
- **Titre**:<br>
    Ici, vous pouvez saisir la valeur que vous souhaitez afficher dans l'interface Web i-doit lorsque vous consultez ou modifiez l'attribut **Dialog+**.
- **Constante**:<br>
    En plus d'un identifiant unique, une valeur peut recevoir une constante unique. Contrairement à l'identifiant, elle se compose généralement d'une chaîne descriptive qui peut être utile lors de l'application de l'API.
- **Statut**:<br>
    Chaque valeur peut avoir un statut. Vous devriez sélectionner le statut Normal (2) pour l'appliquer dans la documentation. 



Vous pouvez enregistrer la valeur avec le bouton **Enregistrer**.

[![Créer des valeurs](../assets/images/en/basics/dialog-admin/3-da.png)](../assets/images/en/basics/dialog-admin/3-da.png)

## Modifier les valeurs

Cliquez sur la valeur respective dans l'aperçu lorsque vous souhaitez modifier l'attribut. Le formulaire qui s'ouvre correspond au champ de formulaire qui a été décrit ci-dessus concernant la création d'une nouvelle valeur.

### Impact

Le changement et la suppression des valeurs ont un effet immédiat sur la documentation informatique : lorsque vous modifiez une valeur dans le **Dialog-Admin**, elle change automatiquement partout ailleurs. Lorsque vous supprimez une valeur, elle sera supprimée partout ailleurs où elle a été utilisée. Nous vous recommandons de rechercher les objets qui utilisent la valeur respective via un [rapport](../evaluation/report-manager.md) avant de la supprimer. À l'aide de ce rapport, vous pouvez choisir une valeur alternative pour tous les objets répertoriés, par exemple via [édition de liste](../efficient-documentation/list-editing.md).

!!! warning "Supprimer des valeurs"

    Lorsque vous souhaitez supprimer une valeur, cochez la case de cette valeur dans l'aperçu. Ensuite, cliquez sur le bouton **Purger** et la valeur sera supprimée de manière irrévocable.<br>
    Pour chaque valeur, l'aperçu tabulaire montre si la valeur peut être supprimée ou non. La raison en est que certaines valeurs sont nécessaires par nécessité par i-doit pour garantir certaines fonctionnalités.

## Définir les autorisations

Pour chaque attribut **Dialog+**, vous pouvez attribuer des droits à chaque personne ou groupe de personnes. Par exemple, il est possible et souvent également conseillé que seuls certains groupes de personnes puissent créer, modifier ou supprimer des valeurs, tandis que d'autres groupes de personnes ne sont autorisés qu'à les utiliser. 
