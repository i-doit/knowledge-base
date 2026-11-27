---
title: cmdb.categories
description: "Um mehrere Kategorien mit einer Anfrage abzurufen, solltest du die Methode cmdb.categories.read verwenden."
icon: material/api
#status: updated
lang: de
---

# Namespace cmdb.categories

!!! example "Work in Progress"

## cmdb.categories.read

Um mehrere Kategorien mit einer Anfrage abzurufen, solltest du die Methode `cmdb.categories.read` verwenden. Wie in der Aufgabenstellung erwähnt, ist es hilfreich, `cmdb.object_type_categories` im Voraus zu verwenden, um die verfügbaren catgID (globale Kategorien) und catsID (spezifische Kategorien) zu erhalten.

### Request parameters

| Key        | JSON data type | Required | Description                                                                                                                         |
| ---------- | -------------- | -------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| **objID**  | Integer        | Yes      | ID of the object                                                                                                                    |
| **catgID** | Integer        | No       | catgid of a category, can be retrieved via [cmdb.object_type_categories](cmdb.object_type_categories.md#cmdbobject_type_categories) |
| **catsID** | Integer        | No       | catsid of a category, can be retrieved via [cmdb.object_type_categories](cmdb.object_type_categories.md#cmdbobject_type_categories) |

### Response parameters

JSON key **result** contains a JSON object with the keys **catgID** and **catsID**, depending on the request. If neither **catgID** nor **catsID** is given, **result** is an empty array.

| Key        | JSON data type | Description                                                                                                                                                                                                                             |
| ---------- | -------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **catgID** | Object         | Requested global category<br><br>Key: category constant, for example **C__CATG__GLOBAL**<br><br>Value: a JSON object with the entry for a single-value category, or an array of JSON objects (one per entry) for a multi-value category |
| **catsID** | Object         | Requested specific category<br><br>Key: category constant, for example **C__CATS__PERSON_MASTER**<br><br>Value: same structure as for **catgID**                                                                                        |

The keys of an entry are the attributes of the category, see [cmdb.category_info](cmdb.category_info.md). Identifiers are returned as numeric strings. Dialog attributes are JSON objects with the keys **id**, **title**, **const** and **title_lang**.

### Example

=== "Request body"

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

=== "Response body"

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "catgID": {
          "C__CATG__GLOBAL": {
            "id": "62",
            "objID": "62",
            "title": "Michael Huhn",
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
            "last_name": "Huhn",
            "academic_degree": "",
            "function": "",
            "service_designation": "",
            "street": "",
            "city": "",
            "zip_code": "",
            "mail": "mHuhn@i-doit.com",
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
