---
title: cmdb.groupes_de_types_d_objets
description: cmdb.groupes_de_types_d_objets
icon: material/api
#status: updated
lang: fr
---

# cmdb.groupes_de_types_d_objets

!!! example "Travail en cours"

## cmdb.groupes_de_types_d_objets

Lire les groupes de types d'objets.

### Paramètres de la requête

| Clé          | Type de données JSON | Requis   | Description                                                                                                                                                                                                                                       |
| ------------ | -------------------- | -------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **filter**   | Tableau              | Non      | Filtrer la liste des objets; voir ci-dessous pour une liste complète des options                                                                                                                                                                  |
| **limit**    | Mixte                | Non      | Quantité maximale d'objets (en tant qu'entier), par exemple, récupérer les premiers mille objets: **1000**<br><br>Combiner cette limite avec un décalage (en tant que chaîne), par exemple, récupérer les mille objets suivants: **"1000,1000"** |
| **sort**     | Chaîne               | Non      | Utile uniquement en combinaison avec la clé **order_by**; les valeurs autorisées sont soit **"ASC"** (ascendant) ou **"DESC"** (descendant)                                                                                                        |
| **order_by** | Chaîne               | Non      | Trier l'ensemble de résultats par (voir le filtre pour plus de détails sur la signification de chaque valeur):<br>-   **"email"**,<br>-   **"first_name"**,<br>-   **"id"**,<br>-   **"last_name"**,<br>-   **"sysid"**,<br>-   **"type"**,<br>-   **"title"**,<br>-   **"type_title"** |
| **raw**      | Booléen              | Non      | Afficher le format brut, voir exemple.                                                                                                                                                                                                            |

### Filtre 

| Clé        | Type de données JSON | Requis | Description                                                                                                                                  |
| ---------- | --------------------- | ------- | -------------------------------------------------------------------------------------------------------------------------------------------- |
| **id**     | Entier               | Non     | ID du groupe de type d'objet                                                                                                                |
| **ids**    | Tableau              | Non     | Liste des identifiants de groupe de type d'objet (en tant qu'entiers), par exemple: **[1, 2, 3]**                                           |
| **title**  | Chaîne de caractères | Non     | Constante de langue du groupe de type d'objet, par exemple: `LC__CMDB__OBJTYPE_GROUP__INFRASTRUCTURE` pour Serveur                           |
| **titles** | Tableau              | Non     | Liste de constantes de langue du groupe de type d'objet, par exemple: `["LC__CMDB__OBJTYPE_GROUP__INFRASTRUCTURE","LC__CMDB__OBJTYPE_GROUP__SOFTWARE"]` |


Vous pouvez utiliser n'importe quelle combinaison de filtres. Les filtres sont logiquement associés avec AND. Une combinaison valide pourrait être : "Donnez-moi tous les serveurs qui ont le même nom d'hôte."

!!! example "WIP"

    ### Paramètres de réponse

    La clé JSON **result** contient un tableau d'objets JSON. Chaque objet contient un résultat de recherche.

    | Clé             | Type de données JSON | Description |
    | --------------- | ------------------- | ----------- |
    | **Placeholder** | Placeholder          | Placeholder |
    | **Placeholder** | Placeholder          | Placeholder |

### Exemple

=== "Corps de la requête"
    ```json
    {
      "version": "2.0",
      "method": "cmdb.object_type_groups",
      "params": {
        "filter": {
          "ids": [1,2,3,4,1000]
        },
        "raw": false,
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
          "title": "Software",
          "const": "C__OBJTYPE_GROUP__SOFTWARE",
          "status": "2"
        },
        {
          "id": "2",
          "title": "Infrastructure",
          "const": "C__OBJTYPE_GROUP__INFRASTRUCTURE",
          "status": "2"
        },
        {
          "id": "3",
          "title": "Other",
          "const": "C__OBJTYPE_GROUP__OTHER",
          "status": "2"
        },
        {
          "id": "4",
          "title": "Orphaned object types",
          "const": "C__OBJTYPE_GROUP__ORPHANED",
          "status": "2"
        },
        {
          "id": "1000",
          "title": "Contact",
          "const": "C__OBJTYPE_GROUP__CONTACT",
          "status": "2"
        }
      ]
    }
    ```
