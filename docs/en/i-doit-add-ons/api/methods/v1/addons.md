---
title: addons
description: Here you find API methods from Add-ons
icon: material/api
#status: updated
lang: en
---

# addons

Here you will find known methods for add-ons.

## analysis

### analysis.dataquality.read

#### Request parameters

| Key           | JSON data typ | Required | Description                        |
| ------------- | ------------- | -------- | ---------------------------------- |
| **profileId** | Integer       | Yes      | Profile identifier, for example: 1 |

!!! example "WIP"

    ### Response parameters

    JSON key **result** contains an array of JSON objects. Each object contains a search result.

    | Key             | JSON data type | Description |
    | --------------- | -------------- | ----------- |
    | **Placeholder** | Placeholder    | Placeholder |
    | **Placeholder** | Placeholder    | Placeholder |

#### Example

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "analysis.dataquality.read",
      "params": {
        "profileId": 1,
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
        "objects": [],
        "averagePercent": 0
      }
    }
    ```

## Documents

### Documents category

From Documents 1.12, [cmdb.category.read](cmdb.category.md#cmdbcategoryread) for the category `C__CATG__DOCUMENT` also returns the key `document_id`. It holds the ID of the assigned document, which you can pass as `docID` to `document.documents.read`.

The following example reads the documents category of the object with the ID 373:

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

## See also

- [API v1 Methods](index.md) — Overview of all API v1 methods
- [API Add-on](../../index.md) — Getting started with the API Add-on
- [i-doit Add-ons](../../../index.md) — All available add-ons
