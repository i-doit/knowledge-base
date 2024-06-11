---
title: Espace de noms cmdb.category
description: cmdb.location_tree
icon: material/api
#status: mis à jour
lang: fr
---

# Espace de noms cmdb.location_tree

!!! example "Travail en cours"

## cmdb.location_tree

Cette méthode peut être utilisée pour construire l'arborescence des emplacements. Toujours exactement un niveau est chargé vers le bas.

### Paramètres de la requête

| Clé    | Type de données JSON | Requis | Description                                  |
| ------ | --------------------- | ------- | -------------------------------------------- |
| **id** | Entier               | Oui     | Un objet d'emplacement, par exemple une ville **31** |

!!! example "Travail en cours"

    ### Paramètres de réponse

    La clé JSON **result** contient un tableau d'objets JSON. Chaque objet contient un résultat de recherche.

    | Clé             | Type de données JSON | Description |
    | --------------- | --------------------- | ----------- |
    | **Placeholder** | Placeholder           | Placeholder |
    | **Placeholder** | Placeholder           | Placeholder |

### Exemple

=== "Corps de la requête"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.location_tree",
      "params": {
        "id": 31,
        "apikey": "h3md6u3y",
        "language": "en"
      },
      "id": 1
    }
    ```

=== "Corps de la réponse"

```json
((((c8895ea13a69f31f))))
```
