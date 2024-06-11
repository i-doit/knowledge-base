# Visibilité des attributs {/examples}

La visibilité des [attributs](./attribute-fields.md) peut être configurée dans les [paramètres de la CMDB](../system-administration/administration/data-view/hide-attributes.md) à partir de la [version 1.19 d'i-doit](../version-history/release-notes/release-notes-1.19.md).<br>
Il est possible de masquer certains attributs dans les [catégories](./categories-and-attributes.md) et/ou sur la [page d'aperçu des types d'objets](./object-types.md).

La visibilité configurée s'applique à tous les utilisateurs.

[![Visibilité des attributs](../assets/images/en/basics/attribute-visibility/1-av.png)](../assets/images/en/basics/attribute-visibility/1-av.png)

## Définir des droits {/examples}

[Les droits](../efficient-documentation/rights-management/index.md) pour visualiser et modifier la visibilité des attributs peuvent être attribués par utilisateur (groupe). Par exemple, il est possible et souvent conseillé que seuls certains groupes d'utilisateurs puissent masquer des attributs.

[![Définir des droits](../assets/images/en/basics/attribute-visibility/2-av.png)](../assets/images/en/basics/attribute-visibility/2-av.png)

## Utilisation

Lorsque la visibilité de l'attribut est ouverte en mode édition, toutes les catégories (globales, spécifiques et personnalisées) peuvent être sélectionnées via un champ de liste déroulante en haut. À côté de ce champ de liste déroulante, il y a un bouton "Ajouter une configuration".

Si ce bouton est utilisé, la catégorie est chargée comme un bloc dans l'interface actuelle.

Ce bloc contient une liste de tous les attributs utilisés dans la catégorie. Dans l'en-tête de ce bloc, il y a des noms de colonnes : "Catégorie", "Visibilité" et "Page d'aperçu".

À côté du nom de la catégorie, il y a un triangle pointant vers le bas lorsqu'il est ouvert et vers la droite lorsqu'il est fermé pour réduire/minimiser le bloc afin que seul l'en-tête reste visible.

À l'extrême droite de chaque bloc, il y a une icône X rouge qui permet de supprimer la configuration pour cette catégorie. Lorsqu'elle est utilisée, le bloc est supprimé.

Par défaut, la visibilité est activée pour tous les attributs. "Visible" [![visible](../assets/images/en/basics/attribute-visibility/3-av.png)](../assets/images/en/basics/attribute-visibility/3-av.png). Dans cet état, le bouton est vert et étiqueté "Visible". Lorsqu'il est cliqué, le bouton passe au gris et est étiqueté "Masqué" [![hidden](../assets/images/en/basics/attribute-visibility/4-av.png)](../assets/images/en/basics/attribute-visibility/4-av.png).

**Titre de l'objet**, **Condition** et **Statut CMDB** ne peuvent pas être masqués. Une note indique "Ne peut pas être masqué dans les colonnes correspondantes.

Si un attribut est masqué, il n'est plus affiché dans la catégorie pour tous les objets (de tous les types d'objets). De plus, la deuxième option est automatiquement désactivée.

Si un attribut est défini comme masqué mais qu'il a été défini comme obligatoire via les paramètres de validation, l'utilisateur reçoit une information (popup) lorsqu'il appuie sur le bouton de sauvegarde :

!!! info "Popup"

    _Les attributs suivants sont définis comme obligatoires :_
    _\[LISTE DE TOUS LES ATTRIBUTS CONCERNÉS\]_
    _Si vous les masquez de votre interface, leur statut obligatoire sera supprimé. Voulez-vous continuer ?"_

Une sélection oui/non permet de confirmer/d'annuler ces changements.

La dernière colonne permet de masquer uniquement les attributs sélectionnés des pages d'aperçu, mais dans les catégories régulières, ces attributs sont toujours affichés. Si un attribut est déjà masqué dans la catégorie, la sélection ici est désactivée.

[![Visibilité des attributs](../assets/images/en/basics/attribute-visibility/5-av.png)](../assets/images/en/basics/attribute-visibility/5-av.png)

Please provide the Markdown content you would like me to translate into French.
