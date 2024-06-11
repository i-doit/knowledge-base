---
title: Espace de noms cmdb.dialog
description: cmdb.dialog
icon: material/api
#status: updated
lang: fr
---

# Espace de noms cmdb.dialog

!!! example "Travail en cours"

## cmdb.dialog.read

Lire les informations de la boîte de dialogue.

### Paramètres de la requête

| **Clé**      | **Type de données JSON** | **Requis** | **Description**                                                                                    |
| ------------ | ------------------------ | ---------- | -------------------------------------------------------------------------------------------------- |
| **catégorie** | Chaîne                 | Oui        | [Constante de catégorie](../../api/category-fields-for-data-arrays.md), par exemple: **"C__CATG__CPU"** |
| **propriété** | Chaîne                 | Oui        | Attribut dans la catégorie, par exemple: "fabricant"                                             |

### Paramètres de la réponse

La clé JSON **résultat** contient un tableau d'objets JSON.

| **Clé**   | **Type de données JSON** | **Description**                  |
| --------- | ------------------------ | -------------------------------- |
| **id**    | Entier                   | Identifiant                       |
| **const** | Chaîne                   | **Constante de l'attribut de la boîte de dialogue** |
| **titre** | Chaîne                   | Titre de l'attribut           |

### Exemple

=== "Corps de la requête"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.dialog.read",
      "params": {
        "category": "C__CATG__CPU",
        "property": "manufacturer",
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
                "const": "",
                "title": "AMD"
            },
            {
                "id": "2",
                "const": "",
                "title": "Intel"
            }
        ]
    }
    ```

### cmdb.dialog.create

Dialogues créés.

## Paramètres de la requête

| **Clé**      | **Type de données JSON** | **Requis** | **Description**                                                                                    |
| ------------ | ------------------------ | ---------- | -------------------------------------------------------------------------------------------------- |
| **catégorie** | Chaîne                 | Oui        | [Constante de catégorie](../../api/category-fields-for-data-arrays.md), par exemple : **"C__CATG__CPU"** |
| **propriété** | Chaîne                 | Oui        | Attribut dans la catégorie, par exemple : "fabricant"                                             |
| **valeur**    | Chaîne                 | Oui        | Valeur de l'attribut                                                                             |

### Paramètres de la réponse

La clé JSON **résultat** contient un objet JSON.

| **Clé**      | **Type de données JSON** | **Description**                  |
| ------------ | ------------------------ | -------------------------------- |
| **succès**  | Booléen                  | Doit être **true**               |
| **entry_id** | Entier                   | Identifiant de l'entrée, par exemple : 3 |

### Exemple

=== "Corps de la requête"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.dialog.create",
      "params": {
        "category": "C__CATG__CPU",
        "property": "manufacturer",
        "value": "IBM",
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
        "entry_id": 3
      }
    }
    ```

## cmdb.dialog.update

Mettre à jour une entrée de [dialogue](../../../basics/dialog-admin.md#dialog-admin).

## Paramètres de la requête

| **Clé**      | **Type de données JSON** | **Requis** | **Description**                                                                                    |
| ------------ | ------------------------ | ---------- | -------------------------------------------------------------------------------------------------- |
| **catégorie** | Chaîne                  | Oui        | [Constante de catégorie](../../api/category-fields-for-data-arrays.md), par exemple : **"C__CATG__CPU"** |
| **propriété** | Chaîne                  | Oui        | Attribut dans la catégorie, par exemple : "fabricant"                                             |
| **valeur**    | Chaîne                  | Oui        | Valeur de l'attribut                                                                             |
| **entry_id** | Entier                   | Oui        | Identifiant de l'entrée, par exemple : 3                                                                   |

### Paramètres de réponse {/examples}

La clé JSON **result** contient un objet JSON.

| **Clé**       | **Type de données JSON** | **Description**                  |
| ------------- | ------------------------ | -------------------------------- |
| **succès**   | Booléen                 | Doit être **true**               |
| **entry_id**  | Entier/Chaîne de caractères | Identifiant de l'entrée, par exemple : 3 |

### Exemple

=== "Corps de la requête"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.dialog.update",
      "params": {
        "category": "C__CATG__CPU",
        "property": "manufacturer",
        "entry_id": 3,
        "value": "IBM",
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
        "entry_id": "3"
      }
    }
    ```

## cmdb.dialog.delete {/examples}

Supprime les dialogues.

### Paramètres de la requête {/examples}

| **Clé**       | **Type de données JSON** | **Requis** | **Description**                                                                                    |
| ------------- | ------------------------ | ---------- | -------------------------------------------------------------------------------------------------- |
| **catégorie** | Chaîne de caractères    | Oui        | [Constante de catégorie](../../api/category-fields-for-data-arrays.md), par exemple : **"C__CATG__CPU"** |
| **propriété** | Chaîne de caractères    | Oui        | Attribut dans la catégorie, par exemple : "fabricant"                                             |
| **entry_id**  | Entier                 | Oui        | Identifiant de l'entrée, par exemple : 3                                                                   |

### Paramètres de réponse {/examples}

La clé JSON **result** contient un objet JSON.

| **Clé**      | **Type de données JSON** | **Description**                  |
| ------------ | ------------------------ | -------------------------------- |
| **success**  | Booléen                  | Doit être **true**                |
| **entry_id** | Entier/Chaîne de caractères | Identifiant de l'entrée, par exemple : 3 |

### Exemple {/examples}

=== "Corps de la requête"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.dialog.delete",
      "params": {
        "category": "C__CATG__CPU",
        "property": "manufacturer",
        "entry_id": 3,
        "value": "IBM",
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
        "success": true,
        "entry_id": 3
      }
    }
    ```
