---
title: cmdb.object_type_categories
description: cmdb.object_type_categories
icon: material/api
#status: updated
lang: de
---

!!! example "Work in Progress"

## cmdb.object_type_categories

Read categories assigned to a object type.

### Request parameters

| Key      | JSON data type    | Required | Description                            |
| -------- | ----------------- | -------- | -------------------------------------- |
| **type** | Integer or String | Yes      | Object type ID or Constant             |
| **raw**  | Boolean           | No       | Displayed raw formatting, see example. |

!!! example "WIP"

    ### Response parameters

    JSON key **result** contains an array of JSON objects. Each object contains a search result.

    | Key             | JSON data type | Description |
    | --------------- | -------------- | ----------- |
    | **Placeholder** | Placeholder    | Placeholder |
    | **Placeholder** | Placeholder    | Placeholder |

### Example

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.object_type_categories",
      "params": {
        "type":  14,
        "apikey": "h3md6u3y",
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
        "catg": [
          {
            "id": "31",
            "title": "Overview page",
            "const": "C__CATG__OVERVIEW",
            "multi_value": "0",
            "source_table": "isys_catg_overview"
          },
          {
            "id": "80",
            "title": "Service assignment",
            "const": "C__CATG__IT_SERVICE",
            "multi_value": "1",
            "source_table": "isys_catg_its_components"
          },
          {
            "id": "82",
            "title": "Relationship",
            "const": "C__CATG__RELATION",
            "multi_value": "1",
            "source_table": "isys_catg_relation"
          },
          {
            "id": "89",
            "title": "Status-Planning",
            "const": "C__CATG__PLANNING",
            "multi_value": "1",
            "source_table": "isys_catg_planning"
          },
          {
            "id": "38",
            "title": "Accounting",
            "const": "C__CATG__ACCOUNTING",
            "multi_value": "0",
            "source_table": "isys_catg_accounting"
          },
          {
            "id": "114",
            "title": "Access permissions",
            "const": "C__CATG__VIRTUAL_AUTH",
            "multi_value": "0",
            "source_table": "isys_catg_virtual"
          },
          {
            "id": "1",
            "title": "General",
            "const": "C__CATG__GLOBAL",
            "multi_value": "0",
            "source_table": "isys_catg_global"
          },
          {
            "id": "21",
            "title": "Contact assignment",
            "const": "C__CATG__CONTACT",
            "multi_value": "1",
            "source_table": "isys_catg_contact"
          },
          {
            "id": "20",
            "title": "Files",
            "const": "C__CATG__FILE",
            "multi_value": "1",
            "source_table": "isys_catg_file"
          },
          {
            "id": "22",
            "title": "Logbook",
            "const": "C__CATG__LOGBOOK",
            "multi_value": "1",
            "source_table": "isys_catg_logb"
          },
          {
            "id": "27",
            "title": "Object picture",
            "const": "C__CATG__IMAGE",
            "multi_value": "0",
            "source_table": "isys_catg_image"
          }
        ],
        "cats": [
          {
            "id": "8",
            "title": "Emergency plan",
            "const": "C__CATS__EMERGENCY_PLAN",
            "multi_value": "0",
            "source_table": "isys_cats_emergency_plan_list"
          },
          {
            "id": "32",
            "title": "Emergency plan properties",
            "const": "C__CATS__EMERGENCY_PLAN_ATTRIBUTE",
            "parent": "8",
            "multi_value": "0",
            "source_table": "isys_cats_emergency_plan_list"
          },
          {
            "id": "33",
            "title": "assigned objects",
            "const": "C__CATS__EMERGENCY_PLAN_LINKED_OBJECTS",
            "parent": "8",
            "multi_value": "1",
            "source_table": "isys_catg_emergency_plan_list"
          }
        ]
      }
    }
    ```
