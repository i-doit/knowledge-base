---
title: cmdb.contact
description: "Retrieves all assigned objects by contact."
icon: material/api
#status: updated
lang: de
---

!!! example "Work in Progress"

## cmdb.contact.read

Retrieves all assigned objects by contact.

### Request parameters

| Key        | JSON data type | Required                                     | Description                       |
| ---------- | -------------- | -------------------------------------------- | --------------------------------- |
| **method** | String         | only "assigned_objects_by_contact" available |                                   |
| **filter** | Object         | Yes                                          | By `email` String or `id` Integer |

### Response parameters

JSON key **result** contains a JSON object. Keys are the identifiers of the assigned objects, values are JSON objects:

| Key            | JSON data type | Description                                                                        |
| -------------- | -------------- | ---------------------------------------------------------------------------------- |
| **id**         | String         | Object identifier (as numeric string)                                              |
| **title**      | String         | Object title                                                                       |
| **sysid**      | String         | SYSID (see category **Global**)                                                    |
| **type**       | String         | Object type identifier (as numeric string)                                         |
| **type_title** | String         | Translated name of object type                                                     |
| **primary**    | String         | Translated **"Yes"** or **"No"**: the contact is the primary contact of the object |
| **role**       | String         | Translated role of the contact, for example **"Administrator"**                    |

### Example

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.contact.read",
      "params": {
        "method": "assigned_objects_by_contact",
        "filter": {
          "id": 37
        },
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
        "39": {
          "id": "39",
          "title": "Contoso GmbH",
          "sysid": "SYSID_1794918100",
          "type": "52",
          "type_title": "Organization",
          "primary": "Yes",
          "role": "Administrator"
        },
        "44": {
          "id": "44",
          "title": "Zone Rechenzentrum",
          "sysid": "SYSID_1794918121",
          "type": "91",
          "type_title": "Net zone",
          "primary": "Yes",
          "role": "Administrator"
        }
      }
    }
    ```

## Siehe auch

- [API v1 Methoden](index.md) — Übersicht aller API v1 Methoden
- [API Add-on](../../index.md) — Einstieg in das API Add-on
- [i-doit Add-ons](../../../index.md) — Alle verfügbaren Add-ons
