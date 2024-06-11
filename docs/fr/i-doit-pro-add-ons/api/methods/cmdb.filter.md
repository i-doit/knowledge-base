---
title: Espace de noms cmdb.filter
description: cmdb.filter
icon: material/api
#status: updated
lang: fr
---

# Espace de noms cmdb.filter

!!! example "Travail en cours. **État alpha**"

## cmdb.filter.read

Par exemple, obtenir tous les objets avec {Attribut} et {Attribut} qui ont été mis à jour dans une plage de temps spécifique.

### Paramètres de la requête

| Clé     | Type de données JSON | Requis   | Description                                |
| ------- | -------------------- | -------- | ------------------------------------------ |
| **Clé** | Chaîne               | Oui      | Requête, par exemple : **"Mon petit serveur"** |

### Paramètres de la réponse

La clé JSON **résultat** contient un tableau d'objets JSON. Chaque objet contient un résultat de recherche.

| Clé       | Type de données JSON | Description                            |
| --------- | -------------------- | -------------------------------------- |
| **clé**   | Chaîne               | Attribut lié à la requête               |
| **valeur** | Chaîne               | Valeur liée à la requête               |

### Exemple

=== "Corps de la requête"

    ```json
    {
        "version": "2.0",
        "method": "cmdb.filter.read",
        "params": {
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```

=== "Corps de la réponse"

```json
{
        "jsonrpc": "2.0",
        "result": [],
        "id": 1
    }
```
