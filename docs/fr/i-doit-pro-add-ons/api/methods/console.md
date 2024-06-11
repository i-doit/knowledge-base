---
title: console
description: cobject
icon: material/api
#status: updated
lang: en
---

# console

!!! example "Travail en cours"

## console.tenant.list

Obtenez une liste des locataires.

### Paramètres de la requête

| Clé | Type de données JSON | Requis | Description |
| --- | --- | --- | --- |
| - | - | - | - |

!!! example "WIP"

    ### Paramètres de réponse

    La clé JSON **result** contient un tableau d'objets JSON. Chaque objet contient un résultat de recherche.

    | Clé | Type de données JSON | Description |
    | --- | --- | --- |
    | **Placeholder** | Placeholder | Placeholder |
    | **Placeholder** | Placeholder | Placeholder |

### Exemple

=== "Corps de la requête"

    ```json
    {
        "version": "2.0",
        "method": "console.tenant.list",
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
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "success": true,
        "output": [
          "Available tenants:",
          "+----+---------------+------------------+--------------------------+----------+",
          "| ID | Title         | (host:port)      | database                 | [status] |",
          "+----+---------------+------------------+--------------------------+----------+",
          "| 1  | KnowledgeBase | (localhost:3306) | idoit_data_KnowledgeBase | active   |",
          "+----+---------------+------------------+--------------------------+----------+",
          ""
        ]
      }
    }
    ```

