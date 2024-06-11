---
title: cmdb.reports
description: cmdb.reports
icon: material/api
#status: updated
lang: fr
---

# cmdb.reports

!!! example "Travail en cours"

## cmdb.reports.read

Affiche le résultat d'un rapport.

### Paramètres de la requête

| Clé        | Type de données JSON | Requis   | Description                                  |
| ---------- | -------------------- | -------- | -------------------------------------------- |
| **id**     | Chaîne               | Non      | Identifiant du rapport                       |
| **limit**  | Entier               | Non      | Limite des résultats affichés                |
| **offset** | Entier               | Non      | Commencer à afficher les résultats à partir du décalage défini |

### Paramètres de la réponse

La clé JSON **result** contient le résultat du rapport.

### Exemple

=== "Corps de la requête"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.reports",
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
      "result": [
        {
          "id": "1",
          "category": "Global",
          "title": "My first Report",
          "description": "",
          "created": "2023-08-14 13:02:48"
        }
      ]
    }
    ```

=== "Corps de la requête avec Identifiant"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.reports",
      "params": {
        "id": 1,
        "apikey": "xxx",
        "language": "en"
      },
      "id": 1
    }
    ```

=== "Corps de la réponse avec Identifiant"

```json
({
      "id": 1,
      "jsonrpc": "2.0",
      "result": [
        {
          "Title": "admin "
        },
        {
          "Title": "Admin"
        },
        ....
      ]
    }
```

=== "Demande garçon avec limite et décalage"
```json
({
      "version": "2.0",
      "method": "cmdb.reports",
      "params": {
        "id": 1,
        "limit": 2,
        "offset": 2,
        "apikey": "xxx",
        "language": "en"
      },
      "id": 1
    }        {
          "Title": "admin "
        },
        {
          "Title": "Admin"
        },
```

=== "Corps de réponse avec limite et décalage"
```json
({
      "id": 1,
      "jsonrpc": "2.0",
      "result": [
        {
          "Title": "admin "
        },
        {
          "Title": "Admin"
        },
      ]
    }
```
