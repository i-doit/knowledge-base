---
title: extensions
description: Ici, vous trouverez les méthodes API des extensions
icon: material/api
#status: updated
lang: fr
---

# extensions

!!! example "Travail en cours"

## analysis.dataquality.read

### Paramètres de la requête

| Clé | Type de données JSON | Requis | Description |
| --- | --- | --- | --- |
| **profileId** | Entier | Oui | Identifiant du profil, par exemple : 1 |

!!! example "Travail en cours"

    ### Paramètres de la réponse

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
      "method": "analysis.dataquality.read",
      "params": {
        "profileId": 1,
        "apikey": "h3md6u3y",
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
        "objects": [],
        "averagePercent": 0
      }
    }
    ```
