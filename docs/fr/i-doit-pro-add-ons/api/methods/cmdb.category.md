---
title: Espace de noms cmdb.category
description: Lire, créer ou mettre à jour une ou plusieurs entrées de catégorie pour un objet.
icon: material/api
#status: updated
lang: fr
---

# Espace de noms cmdb.category

!!! example "Travail en cours"

## cmdb.category.create

!!! warning "Cette méthode est obsolète et sera supprimée dans une prochaine version. Utilisez [cmdb.category.save](#cmdbcategorysave) à la place."

Créer une nouvelle entrée de [catégorie](../../../basics/structure-of-the-it-documentation.md)

### Paramètres de la requête

| Clé          | Type de données JSON | Requis   | Description                                                                                                                                                        |
| ------------ | -------------------- | -------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **objID**    | Entier               | Oui      | Identifiant de l'objet, par exemple : **42**                                                                                                                        |
| **catégorie**| Chaîne               | Oui      | [Constante de catégorie](../category-fields-for-data-arrays.md), par exemple : **C__CATG__MODEL**                                                                  |
| **données**  | Objet                | Oui      | [Attributs](../category-fields-for-data-arrays.md) avec leurs valeurs, par exemple : <br>```{ "fabricant": "Nom du fabricant", "titre": "Nom du modèle" }``` |

### Paramètres de réponse 

La clé JSON **result** contient un objet JSON.

| Clé         | Type de données JSON | Description                          |
| ----------- | ------------------- | ------------------------------------ |
| **id**      | Chaîne de caractères | Identifiant de l'entrée (sous forme de chaîne numérique) |
| **message** | Chaîne de caractères | Quelques informations                |
| **success** | Booléen             | Doit toujours être **true**          |

### Exemple

=== "Corps de la requête"

    ```json
    {
    "version": "2.0",
    "method": "cmdb.category.create",
    "params": {
        "objID": 42,
        "data": {
            "manufacturer": "Name of manufacturer",
            "title": "Name of model"
        },
        "category": "C__CATG__MODEL",
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
        "id": "123",
        "message": "Category entry successfully created. [This method is deprecated and will be removed in a feature release. Use 'cmdb.category.save' instead.]",
        "success": true
      }
    }
    ```

## cmdb.category.read

Lire une ou plusieurs entrées de [catégorie](../../../basics/structure-of-the-it-documentation.md) pour un objet

### Paramètres de requête 

| Clé          | Type de données JSON | Requis   | Description                                          |
| ------------ | ------------------- | -------- | ---------------------------------------------------- |
| **objID**    | Entier              | Oui      | Identifiant de l'objet, par exemple : **42**         |
| **category** | Chaîne de caractères | Oui      | Constante de catégorie, par exemple : **"C__CATG__MODEL"** |
| **status**   | Entier              | Oui      | ID du statut, par exemple **2** pour **normal** <br> Si le paramètre de statut n'est pas spécifié, le statut doit être défini sur **2** (normal). Cela correspond au comportement précédent. |

### Paramètres de réponse 

La clé JSON **result** contient un tableau d'objets JSON. Chaque objet contient [tous les attributs disponibles](../category-fields-for-data-arrays.md) pour la catégorie demandée.

!!! note ""

    Même s'il s'agit d'une [catégorie à valeur unique](../../../basics/structure-of-the-it-documentation.md) ou d'une [catégorie à valeurs multiples](../../../basics/structure-of-the-it-documentation.md) avec seulement 1 entrée, la clé JSON **result** contient toujours un tableau d'objets JSON.

| Clé       | Type de données JSON | Description                                                     |
| --------- | ------------------- | --------------------------------------------------------------- |
| **id**    | Chaîne de caractères | Identifiant de l'entrée (sous forme de chaîne numérique)         |
| **objID** | Chaîne de caractères | Identifiant de l'objet (sous forme de chaîne numérique)          |
| …         | Mixte               | Attributs facultatifs avec des valeurs dépendant de la catégorie demandée |

### Exemple 

=== "Corps de la requête"

    ```json
    {
    "version": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "objID": 1000,
        "category": "C__CATG__MODEL",
        "apikey": "xxx",
        "language": "en"
    },
    "id": 1
    }
    ```

### Corps de la réponse

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": [
        {
          "id": "74",
          "objID": "1000",
          "manufacturer": {
            "id": "19",
            "title": "Lenovo",
            "const": null,
            "title_lang": "Lenovo"
          },
          "title": {
            "id": "38",
            "title": "ThinkPad R61",
            "const": null,
            "title_lang": "ThinkPad R61"
          },
          "productid": "",
          "service_tag": "WRT231",
          "serial": "123000999888",
          "firmware": "",
          "description": ""
        }
      ]
    }
    ```

## cmdb.category.update 

!!! warning "Cette méthode est obsolète et sera supprimée dans une prochaine version. Utilisez [cmdb.category.save](#cmdbcategorysave) à la place."

### Paramètres de la requête

| Clé                  | Type de données JSON | Requis   | Description                                                                                                         |
| -------------------- | -------------------- | -------- | ------------------------------------------------------------------------------------------------------------------- |
| **objID**            | Entier               | Oui      | Identifiant de l'objet, par exemple : **42**                                                                         |
| **category**         | Chaîne               | Oui      | [Constante de catégorie](../category-fields-for-data-arrays.md), par exemple : **"C__CATG__MODEL"**                 |
| **data**             | Objet                | Oui      | [Attributs](../category-fields-for-data-arrays.md) qui seront mis à jour                                           |
| **data.category_id** | Entier               | Non      | Identifiant de l'entrée (uniquement requis pour les [catégories à valeurs multiples](../../../basics/structure-of-the-it-documentation.md)) |

### Paramètres de réponse 

La clé JSON **result** contient un objet JSON.

| Clé         | Type de données JSON | Description                                       |
| ----------- | ------------------- | ------------------------------------------------- |
| **success** | Booléen             | Doit être **true**                                |
| **message** | Chaîne de caractères| Doit être **"Entrée de catégorie enregistrée avec succès"** |

### Exemple 

=== "Corps de la requête"

    ```json
    {
    "version": "2.0",
    "method": "cmdb.category.update",
    "params": {
        "objID": 42,
        "category": "C__CATG__MODEL",
        "data": {
            "serial": "123abc"
        },
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
        "message": "Category entry successfully saved. [This method is deprecated and will be removed in a feature release. Use 'cmdb.category.save' instead.]"
      }
    }
    ```

## cmdb.category.delete 

[Archiver une entrée de catégorie pour un objet, la marquer comme supprimée ou la purger de la base de données](../../../basics/life-and-documentation-cycle.md)

**Limitations:**

-   Cela fonctionne uniquement avec les ==catégories à valeurs multiples== pour le moment.
-   Vous ne pouvez ==archiver== que les entrées de catégorie qui ont un statut normal.
-   Vous ne pouvez ==marquer== que les entrées de catégorie ==comme supprimées== qui sont archivées.
-   Vous ne pouvez ==purger== que les entrées de catégorie de la base de données qui sont marquées comme supprimées.

### Paramètres de la requête 

| Clé                  | Type de données JSON | Requis | Description                                                                                |
| -------------------- | -------------------- | ------ | ------------------------------------------------------------------------------------------ |
| **objID**            | Entier               | Oui    | Identifiant de l'objet, par exemple : **42**                                                |
| **category**         | Chaîne de caractères | Oui    | [Constante de catégorie](../category-fields-for-data-arrays.md), par exemple : **"C__CATG__IP"** |
| **cateID** ou **id** | Entier               | Oui    | Identifiant de l'entrée, par exemple : **3**                                                |

### Réponse 

La clé JSON **result** contient un objet JSON.

| Clé         | Type de données JSON | Description        |
| ----------- | -------------------- | ------------------ |
| **success** | Booléen              | Doit être **true** |
| **message** | Chaîne de caractères | Quelques informations   |

### Exemple 

=== "Corps de la requête de suppression"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.category.delete",
      "params": {
        "objID": 42,
        "category": "C__CATG__IP",
        "cateID": 3,
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
        "message": "Category entry '3' successfully deleted"
      }
    }
    ```

## cmdb.category.save

Créez ou mettez à jour l'entrée de [catégorie](../../../basics/structure-of-the-it-documentation.md) d'un objet.<br>
Cela fonctionne pour les [catégories à valeurs multiples](../../../basics/structure-of-the-it-documentation.md) et les [catégories à valeur unique](../../../basics/structure-of-the-it-documentation.md).

### Paramètres de la requête

| **Clé**      | **Type de données JSON** | **Requis** | **Description**                                                                                |
| ------------ | ------------------------ | ---------- | ---------------------------------------------------------------------------------------------- |
| **objet**    | Entier                   | Oui        | Identifiant de l'objet, par exemple : **456**                                                   |
| **catégorie** | Chaîne                  | Oui        | [Constante de catégorie](../category-fields-for-data-arrays.md), par exemple : **"C__CATG__ACCESS"** |
| **données**  | Objet                    | Oui        | ```{ "titre":"Nom de l'accès", "description": "description de l'accès" }```                    |

### Corps de la réponse 

La clé JSON **result** contient un objet JSON.

| **Clé**     | **Type de données JSON** | **Description**                       |
| ----------- | ------------------------ | ------------------------------------- |
| **succès**  | Booléen                  | Doit être **true**                    |
| **message** | Chaîne de caractères     | Quelques informations                 |
| **entrée**  | Entier                   | Identifiant de l'entrée, par exemple : **35** |

### Exemple

=== "Corps de la requête de création"

    ```json
    {
        "version": "2.0",
        "method": "cmdb.category.save",
        "params": {
            "object": 456,
            "data": {
                "title":"Name of the access",
                "description":"description of the access"
            },
            "category": "C__CATG__ACCESS",
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
            "message": "Category entry successfully saved",
            "entry": 35
        }
    }
    ```

=== "ou corps de la requête de mise à jour"

    ```json
    {
    "version": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "object": 456,
        "data": {
            "manufacturer": "Name of manufacturer",
            "title": "Name of model"
        },
        "category": "C__CATG__MODEL",
        "entry": 24,
        "apikey": "xxx",
        "language": "en"
    },
    "id": 1
    }
    ```

## cmdb.category.quickpurge

Si **Quickpurge** est [activé](../../../basics/life-and-documentation-cycle.md), purger une entrée de catégorie d'un objet directement de la base de données.

### Paramètres de la requête

| Clé                  | Type de données JSON | Requis   | Description                                                                                   |
| -------------------- | -------------------- | -------- | --------------------------------------------------------------------------------------------- |
| **objID**            | Entier               | Oui      | Identifiant de l'objet, par exemple : **42**                                                  |
| **catégorie**        | Chaîne de caractères | Oui      | [Constante de catégorie](../category-fields-for-data-arrays.md), par exemple : **"C__CATG__IP"** |
| **cateID** ou **id** | Entier               | Oui      | Identifiant de l'entrée, par exemple : **3**                                                  |

### Corps de la réponse

La clé JSON **result** contient un objet JSON.

| Clé         | Type de données JSON | Description        |
| ----------- | --------------------- | ------------------ |
| **success** | Booléen              | Doit être **true** |
| **message** | Chaîne de caractères | Quelques informations |

### Exemple

=== "Corps de la requête de création"

    ```json
    {
        "version": "2.0",
        "method": "cmdb.category.quickpurge",
        "params": {
            "objID": 42,
            "category": "C__CATG__IP",
            "cateID": 3,
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
        "message": "Category entry '3' successfully purged"
      }
    }
    ```

## cmdb.category.purge

Purger une entrée de [catégorie](../../../basics/structure-of-the-it-documentation.md) d'un objet. Cela fonctionne pour les [catégories à valeurs multiples](../../../basics/structure-of-the-it-documentation.md#multi-value-category) et les [catégories à valeur unique](../../../basics/structure-of-the-it-documentation.md#single-value-category).

### Paramètres de la requête

| **Clé**      | **Type de données JSON** | **Requis** | **Description**                                                                                |
| ------------ | ------------------------- | ---------- | ---------------------------------------------------------------------------------------------- |
| **objet**    | Entier                   | Oui        | Identifiant de l'objet, par exemple : **456**                                                  |
| **catégorie**| Chaîne de caractères     | Oui        | [Constante de catégorie](../category-fields-for-data-arrays.md), par exemple : **"C__CATG__ACCESS"** |
| **entrée**   | Entier                   | Oui        | Identifiant de l'entrée, par exemple : **33**                                                  |

### Corps de la réponse 

La clé JSON **result** contient un objet JSON.

| **Clé**     | **Type de données JSON** | **Description**    |
| ----------- | ------------------------ | ------------------ |
| **success** | Booléen                  | Doit être **true** |
| **message** | Chaîne de caractères     | Quelques informations |

### Exemple

=== "Corps de la requête"

    ```json
    {
        "version": "2.0",
        "method": "cmdb.category.purge",
        "params": {
            "object": 456,
            "category": "C__CATG__ACCESS",
            "entry": 33,
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
        "message": "Entry 33 has been successfully purged from 2 to 5."
      }
    }
    ```

## cmdb.category.recycle

**Limitations:**

-   Cela fonctionne uniquement avec les [catégories à valeurs multiples](../../../basics/structure-of-the-it-documentation.md).
-   Vous pouvez recycler les entrées de catégorie qui ont le statut archivé ou supprimé.

### Paramètres de la requête

| **Clé**      | **Type de données JSON** | **Requis** | **Description**                                                                                       |
| ------------ | ------------------------ | ---------- | ----------------------------------------------------------------------------------------------------- |
| **objet**    | Entier                   | Oui        | Identifiant de l'objet, par exemple : **456**                                                          |
| **catégorie** | Chaîne de caractères     | Oui        | [Constante de catégorie](../../../basics/categories-and-attributes.md), par exemple : **"C__CATG__ACCESS"** |
| **entrée**   | Entier                   | Oui        | Identifiant de l'entrée, par exemple : **32**                                                         |

### Corps de la réponse 

La clé JSON **result** contient un objet JSON.

| **Clé**     | **Type de données JSON** | **Description**    |
| ----------- | ------------------------ | ------------------ |
| **succès** | Booléen                 | Doit être **true** |
| **message** | Chaîne de caractères    | Quelques informations   |

### Exemple

=== "Corps de la requête"

    ```json
    {
        "version": "2.0",
        "method": "cmdb.category.recycle",
        "params": {
            "object": 456,
            "category": "C__CATG__ACCESS",
            "entry": 32,
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
        "message": "Entry 32 has been successfully recycled from 3 to 2."
      }
    }
    ```

## cmdb.category.archive

**Limitations**

-   Cela fonctionne uniquement avec les [catégories à valeurs multiples](../../../basics/structure-of-the-it-documentation.md) pour le moment.
-   Vous ne pouvez archiver que des entrées de catégorie qui ont un statut normal.

### Paramètres de la requête

| **Clé**      | **Type de données JSON** | **Requis** | **Description**                                                                                |
| ------------ | ------------------------ | ------------ | ---------------------------------------------------------------------------------------------- |
| **objet**   | Entier                 | Oui          | Identifiant de l'objet, par exemple : **456**                                                        |
| **catégorie** | Chaîne de caractères    | Oui          | [Constante de catégorie](../category-fields-for-data-arrays.md), par exemple : **"C__CATG__ACCESS"** |
| **entrée**    | Entier                 | Oui          | Identifiant de l'entrée, par exemple : **32**                                                          |

### Corps de la réponse 

La clé JSON **result** contient un objet JSON.

| **Clé**     | **Type de données JSON** | **Description**    |
| ----------- | ------------------------ | ------------------ |
| **success** | Booléen                  | Doit être **true** |
| **message** | Chaîne de caractères     | Quelques informations |

### Exemple 

=== "Corps de la requête"

    ```json
    {
        "version": "2.0",
        "method": "cmdb.category.archive",
        "params": {
            "object": 456,
            "category": "C__CATG__ACCESS",
            "entry": 32,
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
        "message": "Entry 32 has been successfully archived from 2 to 3."
      }
    }
    ```
