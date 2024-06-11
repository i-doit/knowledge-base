---
title: Espace de noms cmdb.status
description: cmdb.status
icon: material/api
#status: updated
lang: fr
---

# Espace de noms cmdb.status

!!! example "Travail en cours"

## cmdb.status.read

Lire tous les états disponibles.

### Paramètres de la requête

| Clé | Type de données JSON | Requis | Description |
| --- | -------------------- | ------ | ----------- |
| -   | -                    | -      | -           |

!!! example "Travail en cours"

    ### Paramètres de la réponse

    La clé JSON **result** contient un tableau d'objets JSON. Chaque objet contient un résultat de recherche.

    | Clé             | Type de données JSON | Description |
    | --------------- | -------------------- | ----------- |
    | **Placeholder** | Placeholder          | Placeholder |
    | **Placeholder** | Placeholder          | Placeholder |

### Exemple

=== "Corps de la requête"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.status.read",
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
          "id": 1,
          "title": "planned",
          "constant": "C__CMDB_STATUS__PLANNED",
          "color": "EFAA43",
          "editable": true
        },
        {
          "id": 2,
          "title": "ordered",
          "constant": "C__CMDB_STATUS__ORDERED",
          "color": "838683",
          "editable": true
        },
        {
          "id": 3,
          "title": "delivered",
          "constant": "C__CMDB_STATUS__DELIVERED",
          "color": "DDECD5",
          "editable": true
        },
        {
          "id": 4,
          "title": "assembled",
          "constant": "C__CMDB_STATUS__ASSEMBLED",
          "color": "C6DFB9",
          "editable": true
        },
        {
          "id": 5,
          "title": "tested",
          "constant": "C__CMDB_STATUS__TESTED",
          "color": "95C47C",
          "editable": true
        },
        {
          "id": 6,
          "title": "in operation",
          "constant": "C__CMDB_STATUS__IN_OPERATION",
          "color": "33C20A",
          "editable": false
        },
        {
          "id": 7,
          "title": "defect",
          "constant": "C__CMDB_STATUS__DEFECT",
          "color": "BC0A19",
          "editable": true
        },
        {
          "id": 8,
          "title": "under repair",
          "constant": "C__CMDB_STATUS__UNDER_REPAIR",
          "color": "F990BE",
          "editable": true
        },
        {
          "id": 9,
          "title": "delivered from repair",
          "constant": "C__CMDB_STATUS__DELIVERED_FROM_REPAIR",
          "color": "F3EF15",
          "editable": true
        },
        {
          "id": 10,
          "title": "inoperative",
          "constant": "C__CMDB_STATUS__INOPERATIVE",
          "color": "FF0000",
          "editable": false
        },
        {
          "id": 11,
          "title": "stored",
          "constant": "C__CMDB_STATUS__STORED",
          "color": "A2BCFA",
          "editable": true
        },
        {
          "id": 12,
          "title": "scrapped",
          "constant": "C__CMDB_STATUS__SCRAPPED",
          "color": "082B9A",
          "editable": true
        },
        {
          "id": 13,
          "title": "i-doit Status",
          "constant": "C__CMDB_STATUS__IDOIT_STATUS",
          "color": "AAAAAA",
          "editable": false
        },
        {
          "id": 14,
          "title": "Template",
          "constant": "C__CMDB_STATUS__IDOIT_STATUS_TEMPLATE",
          "color": "CCCCCC",
          "editable": false
        }
      ]
    }
    ```

## cmdb.status.save

Créer un nouvel état ou enregistrer un état existant.

### Paramètres de la requête

| Clé          | Type de données JSON | Requis | Description                                            |
| ------------ | -------------------- | ------ | ------------------------------------------------------ |
| **title**    | Chaîne de caractères | Oui    | Titre de l'état                                        |
| **constant** | Chaîne de caractères | Oui    | Constante de l'état                                    |
| **color**    | Chaîne de caractères | Oui    | Couleur en hexadécimal sans le `#` initial, par exemple `FF0000` |

### Paramètres de réponse

La clé JSON **result** contient un tableau d'objets JSON. Chaque objet contient un résultat de recherche.

| Clé            | Type de données JSON | Description |
| -------------- | --------------------- | ----------- |
| **Placeholder** | Placeholder           | Placeholder |
| **Placeholder** | Placeholder           | Placeholder |

### Exemple

=== "Corps de la requête"

```json
{
      "version": "2.0",
      "method": "cmdb.status.save",
      "params": {
        "title": "MyOwn",
        "constant": "C__CMDB__STATUS__MYOWN",
        "color": "FF0000",
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
        "message": "Status created",
        "id": 15
      }
    }
```

=== "ou mettre à jour le corps de la requête"

```json
{
      "version": "2.0",
      "method": "cmdb.status.save",
      "params": {
        "id": 15,
        "title": "MyOwn",
        "constant": "C__CMDB__STATUS__MYOWN",
        "color": "0000ff",
        "apikey": "xxx",
        "language": "en"
      },
      "id": 1
    }
```

## cmdb.status.delete

Purge un état.

### Paramètres de requête

| Clé   | Type de données JSON | Requis   | Description           |
| ----- | -------------------- | -------- | --------------------- |
| **id** | Entier               | Oui      | ID du statut CMDB     |

### Paramètres de réponse

La clé JSON **result** contient un tableau d'objets JSON. Chaque objet contient un résultat de recherche.

| Clé            | Type de données JSON | Description |
| -------------- | --------------------- | ----------- |
| **Placeholder** | Placeholder           | Placeholder |
| **Placeholder** | Placeholder           | Placeholder |

### Exemple

=== "Corps de la requête"

```json
({
      "version": "2.0",
      "method": "cmdb.status.delete",
      "params": {
        "id": 15,
        "apikey": "xxx",
        "language": "en"
      },
      "id": 1
    }
```

=== "Corps de la réponse"

```json
({
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "success": true,
        "message": "Status purged"
      }
    }
```
