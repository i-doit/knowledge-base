# Télécharger et Lier des Fichiers

Une documentation informatique complète comprend souvent des documents sous forme de fichiers. Que vous ayez des manuels d'utilisation, des plans d'urgence, des contrats, des protocoles d'installation ou des pilotes - les fichiers importants doivent être liés aux [objets](../basics/structure-of-the-it-documentation.md) dans i-doit.

Les Fichiers sont des Objets
----------------------------

Chaque fichier téléchargé dans i-doit est automatiquement un objet. L'avantage de cela est que vous pouvez attribuer n'importe quelles [catégories et attributs](../basics/structure-of-the-it-documentation.md) à ces fichiers et vous pouvez les [lier](../basics/object-relations.md) à n'importe quel autre objet. La configuration standard d'i-doit fournit déjà les types d'objets correspondants [object types](../basics/structure-of-the-it-documentation.md) :

*   **Fichiers** et
*   **Plan d'urgence**.

Ces derniers peuvent être étendus par d'autres [types d'objets personnalisés](../basics/custom-object-types.md), par exemple pour les manuels d'utilisation.

Vous pouvez trouver la fonction actuelle (téléchargement, liaison, etc.) dans le dossier de la catégorie **Fichiers** [category folder](../basics/structure-of-the-it-documentation.md). Le dossier comporte les sous-catégories suivantes :

*   **Fichier actuel** : Informations sur le fichier téléchargé, option de téléchargement et catégorisation du fichier
*   **Versions du fichier** : Chaque fichier peut avoir un nombre quelconque de versions. Chaque nouveau téléchargement du fichier génère une nouvelle version.
*   **Objets assignés** : Quels objets sont assignés à ce fichier ? (uniquement vue, pas de fonction)

Le dossier de la catégorie **Fichiers** appartient aux [catégories spécifiques](../basics/structure-of-the-it-documentation.md), qui peuvent être assignées à n'importe quels types d'objets désirés à l'aide de la [configuration des types d'objets](../basics/custom-object-types.md).

[![upload-and-link-files](../assets/images/en/use-cases/upload-and-link-of-files/1-ualof.png)](../assets/images/en/use-cases/upload-and-link-of-files/1-ualof.png)

[![upload-and-link-files](../assets/images/en/use-cases/upload-and-link-of-files/2-ualof.png)](../assets/images/en/use-cases/upload-and-link-of-files/2-ualof.png)

[![upload-and-link-files](../assets/images/en/use-cases/upload-and-link-of-files/3-ualof.png)](../assets/images/en/use-cases/upload-and-link-of-files/3-ualof.png)

Dans diverses [catégories miroir](../basics/structure-of-the-it-documentation.md) vous pouvez lier des objets de fichiers et d'autres objets :

*   Attribution de fichier
*   Attribution de manuel utilisateur
*   Attribution de plan d'urgence

Vous pouvez attribuer ces [catégories globales](../basics/structure-of-the-it-documentation.md) à [tous les types d'objets](../glossary.md) et ils ont des fonctions similaires, à savoir l'attribution de fichiers.

[![téléchargement-et-lien-de-fichiers](../assets/images/en/use-cases/upload-and-link-of-files/4-ualof.png)](../assets/images/en/use-cases/upload-and-link-of-files/4-ualof.png)

Téléchargement de fichiers et lien avec des objets
--------------------------------------------------

Il existe deux façons de télécharger un fichier : Soit vous créez un nouvel objet du type **Fichiers** et ensuite téléchargez le fichier dans la catégorie **Versions de fichiers** ou vous utilisez la catégorie **Attribution de fichier** et prenez l'objet auquel le fichier doit être lié.

Pour les fichiers téléchargés avec la catégorie d'attribution de fichier, i-doit crée automatiquement un objet. Ainsi, vous pouvez économiser quelques clics.

L'attribut pour **Attribution de fichier (objet)** est plutôt flexible :

*   Avec le glisser-déposer, vous pouvez déplacer un fichier du bureau, etc. dans le champ d'attribut.
*   Par auto-complétion, vous pouvez attribuer des fichiers déjà téléchargés.
*   En cliquant sur l'icône loupe, le **Navigateur de fichiers** s'ouvre avec lequel vous pouvez sélectionner et télécharger le fichier.

[![téléchargement-et-lien-de-fichiers](../assets/images/en/use-cases/upload-and-link-of-files/5-ualof.png)](../assets/images/en/use-cases/upload-and-link-of-files/5-ualof.png)

Le **Navigateur de fichiers** répertorie tous les fichiers disponibles. Vous pouvez trier les fichiers avec l'attribut **Catégorie** pour avoir une vue d'ensemble plus claire.

[![téléchargement-et-lien-de-fichiers](../assets/images/en/use-cases/upload-and-link-of-files/6-ualof.png)](../assets/images/en/use-cases/upload-and-link-of-files/6-ualof.png)

Lier des fichiers dans des catégories personnalisées
---------------------------------------------------

Pour lier un fichier à un objet, vous n'êtes pas limité aux catégories par défaut d'i-doit. Vous pouvez ajouter des attributs de type champ **Navigateur de fichiers** aux [catégories personnalisées](#).

    Si vous souhaitez générer des manuels d'utilisation, des plans d'urgence, etc. directement à partir de votre documentation informatique, vous devriez envisager d'utiliser le [module Documents](../i-doit-pro-add-ons/documents/index.md) pour i-doit. Avec ce module, vous pouvez ajouter des [attributs](../basics/structure-of-the-it-documentation.md), des images et des [rapports](../evaluation/report-manager.md) de i-doit à des documents textuels complets. {/examples}
