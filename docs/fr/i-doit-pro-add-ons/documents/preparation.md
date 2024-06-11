# Préparation (Documents complémentaires)

## Installation/Mise à jour

Le package d'installation actuel pour le complément est disponible dans le portail client i-doit à l'adresse [https://portal.i-doit.com/](https://portal.i-doit.com/) après l'achat d'une licence valide et peut y être téléchargé. L'installation elle-même se fait dans le [Centre d'administration](../../system-administration/admin-center.md) i-doit dans l'onglet "Compléments". Ici, le package est sélectionné depuis le système local via le bouton "Parcourir". Après avoir spécifié pour quel(s) [locataire(s)](../../system-administration/multi-tenant.md) le complément doit être rendu disponible, l'installation peut être complétée via le bouton "Télécharger et installer".<br
Après la sortie d'une nouvelle version, le package mis à jour, qui sera également disponible dans le portail client i-doit, peut être téléchargé et installé dans le Centre d'administration en utilisant le même chemin.

## Attribution des droits

Pour qu'un utilisateur puisse créer des modèles et générer des documents, il est nécessaire d'attribuer les droits appropriés. Cela est possible dans l'administration i-doit sous Système de droits > Attribution des droits > Documents, si le complément est installé.

[![Affectation des droits](../../assets/images/en/i-doit-pro-add-ons/documents/preperation/1-dp.png)](../../assets/images/en/i-doit-pro-add-ons/documents/preperation/1-dp.png)

Les autorisations suivantes sont disponibles ici :

-   **Document**<br>
La condition "Document" peut être utilisée pour permettre l'accès à un ou plusieurs documents. Les utilisateurs ayant cette autorisation peuvent modifier les documents sélectionnés.

-   **Documents dans des catégories**<br>
Les "Documents dans des catégories" peuvent être utilisés pour accorder l'accès aux documents en fonction des catégories de documents.

-   **Modèles**<br>
L'autorisation "Modèle" accorde la permission de modifier les modèles de documents.

-   **Modèles dans des catégories**<br>
L'accès aux modèles peut être accordé aux modèles de catégories définies en utilisant "Modèles dans des catégories".

-   **Dépôt en ligne**<br>
Pour télécharger des modèles depuis le dépôt en ligne, l'autorisation "Dépôt en ligne" est requise.

!!! attention "Vider le cache pour le système de droits"
    Après avoir attribué les droits, il est conseillé de vider le cache dans l'administration de i-doit [administration](../../system-administration/administration/index.md) sous [Réparation et nettoyage](../../system-administration/administration/tenant-management/repair-and-clean-up.md) > Cache / Base de données afin que les modifications soient prises en compte par le système.

## Configuration supplémentaire {/examples}

L'extension rend également la catégorie "Documents" [disponible](../../basics/categories-and-attributes.md) pour tous les types d'objets. La catégorie peut être liée aux types d'objets souhaités via la [configuration des types d'objets](../../basics/custom-object-types.md) et [Modifier la structure des données](../../basics/assignment-of-categories-to-object-types.md). De cette manière, seuls les types d'objets spécifiés par l'utilisateur apparaissent lors de la création d'objets afin de maintenir la liste de sélection claire.

!!! attention "Catégorie Documents"
    Pour créer un document pour un objet, il est nécessaire que la catégorie "Documents" soit liée au type d'objet. Si le type d'objet n'a pas cette catégorie, aucun document ne peut être créé pour les objets qu'il contient, car ils n'apparaissent pas dans la sélection.

## Appel de l'extension {/examples}

Une fois que toutes les préparations sont terminées, l'extension peut être accédée via **Extras > Documents**.

[![Appel de l'extension](../../assets/images/en/i-doit-pro-add-ons/documents/preperation/2-dp.png)](../../assets/images/en/i-doit-pro-add-ons/documents/preperation/2-dp.png)

La vue du menu "Extras" peut différer en raison de droits différents et/ou d'add-ons supplémentaires installés.


