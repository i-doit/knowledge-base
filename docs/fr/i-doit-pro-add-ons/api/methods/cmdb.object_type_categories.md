---
title: Espace de noms cmdb.object_type_categories
description: cmdb.object_type_categories
icon: material/api
#status: updated
lang: fr
---

# Espace de noms cmdb.object_type_categories

!!! example "Travail en cours"

## cmdb.object_type_categories

Lire les catégories assignées à un type d'objet.

### Paramètres de la requête

| Clé      | Type de données JSON | Requis   | Description                            |
| -------- | --------------------- | -------- | -------------------------------------- |
| **type** | Entier ou Chaîne     | Oui      | ID du type d'objet ou Constante        |
| **raw**  | Booléen              | Non      | Affichage du format brut, voir exemple. |

!!! example "Travail en cours"

    ### Paramètres de la réponse

    La clé JSON **result** contient un tableau d'objets JSON. Chaque objet contient un résultat de recherche.

    | Clé             | Type de données JSON | Description |
    | --------------- | --------------------- | ----------- |
    | **Placeholder** | Placeholder           | Placeholder |
    | **Placeholder** | Placeholder           | Placeholder |

### Exemple

=== "Corps de la requête"

```json
((((313a03d8beddab46))))
```

=== "Corps de la réponse"

```json
((((e5a550fd186a5480))))
```
