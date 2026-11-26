---
title: addons
description: Here you find API methods from Add-ons
icon: material/api
#status: updated
lang: de
---

# addons

Hier werden bekannte Methoden zu Add-ons aufgelistet.

## analysis

### analysis.dataquality.read

Calculates the data quality of objects based on a data quality profile of the Analysis add-on.

#### Request parameters

| Key           | JSON data typ    | Required | Description                                                         |
| ------------- | ---------------- | -------- | ------------------------------------------------------------------- |
| **profileId** | Integer          | Yes      | Identifier of the data quality profile, for example: 1             |
| **objects**   | Array of Integers | No      | Object identifiers, for example: [227, 112]. A single integer is also accepted. |

Duplicate identifiers and `0` are ignored. If **objects** is missing, empty or contains no existing object, the method returns no error, but an empty **objects** array and an **averagePercent** of `0`. You can find the profile identifiers with [analysis.dataquality.profiles](#analysisdataqualityprofiles).

#### Response parameters

JSON key **result** contains a JSON object.

| Key                      | JSON data type   | Description                                                               |
| ------------------------ | ---------------- | ------------------------------------------------------------------------- |
| **objects**              | Array            | One JSON object per object                                                |
| **objects.object.id**    | Integer          | Object identifier                                                         |
| **objects.object.title** | String           | Object title                                                              |
| **objects.object.typeId**| Integer          | Object type identifier                                                    |
| **objects.object.type**  | String           | Object type, translated into the requested language                       |
| **objects.percent**      | Float            | Data quality of the object in percent, rounded to two decimal places      |
| **averagePercent**       | Float or Integer | Average data quality of all objects in percent, rounded to two decimal places, `0` if no object matches |

#### Example

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "analysis.dataquality.read",
      "params": {
        "profileId": 1,
        "objects": [
          227,
          112
        ],
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
        "objects": [
          {
            "object": {
              "id": 112,
              "title": "nb-bauer-01",
              "typeId": 10,
              "type": "Client"
            },
            "percent": 80.77
          },
          {
            "object": {
              "id": 227,
              "title": "srv-erp-01",
              "typeId": 5,
              "type": "Server"
            },
            "percent": 80.33
          }
        ],
        "averagePercent": 80.55
      }
    }
    ```

=== "Error: profileId missing"

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "error": {
        "code": -32099,
        "message": "i-doit system error: You have to pass a profile ID via 'profileId'.",
        "data": null
      }
    }
    ```

=== "Error: unknown profileId"

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "error": {
        "code": -32099,
        "message": "i-doit system error: The given profile ID does not exist.",
        "data": null
      }
    }
    ```

### analysis.dataquality.profiles

Lists the data quality profiles of the Analysis add-on.

#### Request parameters

This method has no specific parameters.

#### Response parameters

JSON key **result** contains an array of JSON objects. Each object contains one profile.

| Key       | JSON data type | Description        |
| --------- | -------------- | ------------------ |
| **id**    | String         | Profile identifier |
| **title** | String         | Profile title      |

#### Example

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "analysis.dataquality.profiles",
      "params": {
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
      "result": [
        {
          "id": "1",
          "title": "Data quality servers"
        }
      ]
    }
    ```

## Documents

### Kategorie Dokumente

Ab Documents 1.12 liefert [cmdb.category.read](cmdb.category.md#cmdbcategoryread) für die Kategorie `C__CATG__DOCUMENT` zusätzlich den Schlüssel `document_id`. Er enthält die ID des zugewiesenen Dokuments, die du als `docID` an `document.documents.read` übergeben kannst.

Das folgende Beispiel liest die Kategorie Dokumente des Objekts mit der ID 373:

#### Example

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.category.read",
      "params": {
        "objID": 373,
        "category": "C__CATG__DOCUMENT",
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
      "result": [
        {
          "id": "1",
          "objID": "373",
          "title": "Server documentation",
          "template_title": "Server documentation template",
          "type": "LC__MODULE__DOCUMENT__DOCUMENT_TYPE__GLOBAL",
          "creation_date": "2026-11-26 08:24:32",
          "document_id": "1"
        }
      ]
    }
    ```

### document.documents.read

#### Request parameters

| Key       | JSON data typ | Required     | Description                           |
| --------- | ------------- | ------------ | ------------------------------------- |
| **docID** | Integer       | Yes or objID | Document identifier, for example: 1   |
| **objID** | Integer       | Yes or docID | Object identifier, for example: 373   |

If you pass both keys, `docID` takes precedence and `objID` is ignored. With `objID`, the result contains all documents assigned to the object.

#### Response parameters

JSON key **result** contains an array of JSON objects. Each object contains one document. If no document matches, the array is empty.

| Key                | JSON data type | Description                                                                          |
| ------------------ | -------------- | ------------------------------------------------------------------------------------ |
| **id**             | String         | Document identifier                                                                  |
| **title**          | String         | Document title                                                                       |
| **object_id**      | String         | Identifier of the assigned object                                                    |
| **type**           | String         | Document type as language constant, for example `LC__MODULE__DOCUMENT__DOCUMENT_TYPE__GLOBAL` |
| **template_id**    | String         | Identifier of the document template                                                  |
| **template_title** | String         | Title of the document template                                                       |

#### Example

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "document.documents.read",
      "params": {
        "docID": 1,
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
      "result": [
        {
          "id": "1",
          "title": "Server documentation",
          "object_id": "373",
          "type": "LC__MODULE__DOCUMENT__DOCUMENT_TYPE__GLOBAL",
          "template_id": "1",
          "template_title": "Server documentation template"
        }
      ]
    }
    ```

=== "Error: no docID or objID"

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "error": {
        "code": -32099,
        "message": "i-doit system error: Please define a valid value for key 'docID' or 'objID'.",
        "data": null
      }
    }
    ```

### document.documents.delete

#### Request parameters

| Key       | JSON data typ | Required | Description                         |
| --------- | ------------- | -------- | ----------------------------------- |
| **docID** | Integer       | Yes      | Document identifier, for example: 1 |

#### Response parameters

JSON key **result** contains a JSON object.

| Key         | JSON data type | Description                         |
| ----------- | -------------- | ----------------------------------- |
| **message** | String         | Message, for example: "Document successfully deleted." |
| **success** | Boolean        | Always `true`                       |

!!! note "Check the result"
    The method returns `"success": true` even if the document does not exist or was already deleted. To make sure the document is gone, call `document.documents.read` with the same `docID` afterwards. The result is then an empty array.

#### Example

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "document.documents.delete",
      "params": {
        "docID": 1,
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
        "message": "Document successfully deleted.",
        "success": true
      }
    }
    ```

## Siehe auch

- [API v1 Methoden](index.md) — Übersicht aller API v1 Methoden
- [API Add-on](../../index.md) — Einstieg in das API Add-on
- [i-doit Add-ons](../../../index.md) — Alle verfügbaren Add-ons
