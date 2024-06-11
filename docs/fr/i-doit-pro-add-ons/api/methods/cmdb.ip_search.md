---
title: cmdb.ip_search
description: cmdb.ip_search
icon: material/api
#status: updated
lang: fr
---

# cmdb.ip_search

!!! example "Travail en cours"

## cmdb.ip_search.read

Obtenez tous les objets de la couche 3 (sauf Global v4/v6, où l'IP se trouve dans la plage d'adresses du réseau de la couche 3)

### Paramètres de la requête

| Clé             | Type de données JSON | Requis | Description |
| --------------- | -------------------- | ------ | ----------- |
| **ip** | Chaîne    | Oui      | Une adresse IP |

!!! example "Travail en cours"

    ### Paramètres de réponse

    La clé JSON **result** contient un tableau d'objets JSON. Chaque objet contient un résultat de recherche.

    | Clé             | Type de données JSON | Description |
    | --------------- | -------------------- | ----------- |
    | **Placeholder** | Placeholder    | Placeholder |
    | **Placeholder** | Placeholder    | Placeholder |

### Exemple

=== "Corps de la requête"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.ip_search.read",
      "params": {
        "ip": "10.10.0.1",
        "apikey": "h3md6u3y",
        "language": "en"
      },
      "id": 1
    }
    ```

=== "Corps de la réponse"

    ```json
    Placeholder
    ```
