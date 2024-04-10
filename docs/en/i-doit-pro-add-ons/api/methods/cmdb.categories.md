---
title: cmdb.categories
description: cmdb.categories
icon: material/api
#status: updated
lang: en
---

# Namespace cmdb.categories

!!! example "Work in Progress"

## cmdb.categories.read

Retrieve multiple categories by one request.<br>
Before you start, you should use [cmdb.object_type_categories](cmdb.object_type_categories.md#cmdbobject_type_categories) to get available categories and the cats/catg id.

### Request parameters

| Key | JSON data type | Required | Description |
| --- | --- | --- | --- |
| **objID** | Integer | Yes | ID of the object |
| **catgID** | Integer | No | catgid of a category, can be retrieved via [cmdb.object_type_categories](cmdb.object_type_categories.md#cmdbobject_type_categories) |
| **catsID** | Integer | No | catsid of a category, can be retrieved via [cmdb.object_type_categories](cmdb.object_type_categories.md#cmdbobject_type_categories) |

!!! example "WIP"

    ### Response parameters

    JSON key **result** contains an array of JSON objects. Each object contains a search result.

    | Key | JSON data type | Description |
    | --- | --- | --- |
    | **Placeholder** | Placeholder | Placeholder |
    | **Placeholder** | Placeholder | Placeholder |

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
