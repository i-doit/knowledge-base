---
title: cmdb.categories
description: cmdb.categories
icon: material/api
#status: updated
lang: en
---

# Espace de noms cmdb.categories {/examples}

!!! example "Travail en cours"

## cmdb.categories.read {/examples}

Récupérer plusieurs catégories en une seule requête.<br>
Avant de commencer, vous devez utiliser [cmdb.object_type_categories](cmdb.object_type_categories.md#cmdbobject_type_categories) pour obtenir les catégories disponibles et les identifiants cats/catg.

### Paramètres de la requête

| Clé | Type de données JSON | Requis | Description |
| --- | --- | --- | --- |
| **objID** | Entier | Oui | ID de l'objet |
| **catgID** | Entier | Non | catgid d'une catégorie, peut être récupéré via [cmdb.object_type_categories](cmdb.object_type_categories.md#cmdbobject_type_categories) |
| **catsID** | Entier | Non | catsid d'une catégorie, peut être récupéré via [cmdb.object_type_categories](cmdb.object_type_categories.md#cmdbobject_type_categories) |

!!! example "Travail en cours"

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
      "method": "cmdb.categories.read",
      "params": {
        "objID": 62,
        "catgID": 1,
        "catsID": 48,
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
        "catgID": {
          "C__CATG__GLOBAL": {
            "id": "62",
            "objID": "62",
            "title": "Michael Overkamp",
            "status": {
              "id": "2",
              "title": "Normal",
              "const": "",
              "title_lang": "LC__CMDB__RECORD_STATUS__NORMAL"
            },
            "created": "2023-08-15 08:28",
            "created_by": "admin",
            "changed": "2023-08-15 09:03",
            "changed_by": "admin",
            "purpose": null,
            "category": null,
            "sysid": "SYSID_1692080956",
            "cmdb_status": {
              "id": "6",
              "title": "in operation",
              "const": "C__CMDB_STATUS__IN_OPERATION",
              "title_lang": "LC__CMDB_STATUS__IN_OPERATION"
            },
            "type": {
              "id": "53",
              "title": "Persons",
              "const": "C__OBJTYPE__PERSON",
              "title_lang": "LC__CONTACT__TREE__PERSON"
            },
            "tag": null,
            "description": ""
          }
        },
        "catsID": {
          "C__CATS__PERSON": {
            "id": "8",
            "title": "",
            "salutation": null,
            "first_name": "Michael",
            "last_name": "Overkamp",
            "academic_degree": "",
            "function": "",
            "service_designation": "",
            "street": "",
            "city": "",
            "zip_code": "",
            "mail": "moverkamp@i-doit.com",
            "phone_company": "",
            "phone_home": "",
            "phone_mobile": "",
            "fax": "",
            "pager": "",
            "personnel_number": "",
            "department": "",
            "organization": [],
            "ldap_id": null,
            "ldap_dn": "",
            "description": "",
            "custom_1": "",
            "custom_2": "",
            "custom_3": "",
            "custom_4": "",
            "custom_5": "",
            "custom_6": "",
            "custom_7": "",
            "custom_8": ""
          }
        }
      }
    }
    ```
