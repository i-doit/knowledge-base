---
title: cmdb.workstation_components.read
description: "Fetches workplace components for a Person."
icon: material/api
#status: updated
lang: de
---

!!! example "Work in Progress"

## cmdb.workstation_components.read

Fetches workplace components for a Person.

### Request parameters

| Key               | JSON data type | Required | Description                                 |
| ----------------- | -------------- | -------- | ------------------------------------------- |
| **filter**        | Object         | Yes      | At least one of the following keys          |
| **filter.id**     | Integer        | No       | Object identifier of a person               |
| **filter.ids**    | Array          | No       | Object identifiers of persons (as integers) |
| **filter.email**  | String         | No       | E-mail address of a person                  |
| **filter.emails** | Array          | No       | E-mail addresses of persons (as strings)    |

### Response parameters

JSON key **result** contains a JSON object. Keys are the object identifiers of the persons; each value is a JSON object with the keys **data** and **children**.

| Key                 | JSON data type    | Description                                                                                                                |
| ------------------- | ----------------- | -------------------------------------------------------------------------------------------------------------------------- |
| **data.id**         | String            | Object identifier of the person (as numeric string)                                                                        |
| **data.title**      | String            | Object title of the person                                                                                                 |
| **data.sysid**      | String            | SYSID (see category **Global**)                                                                                            |
| **data.type**       | String            | Object type identifier (as numeric string)                                                                                 |
| **data.type_title** | String            | Translated name of object type; may be empty                                                                               |
| **data.status**     | String            | Record status (as numeric string)                                                                                          |
| **data.email**      | String            | Primary e-mail address of the person                                                                                       |
| **data.first_name** | String            | First name of the person                                                                                                   |
| **data.last_name**  | String            | Last name of the person                                                                                                    |
| **children**        | Object or Boolean | Workplaces of the person<br><br>Keys: object identifiers of the workplaces<br><br>**false** if the person has no workplace |

Each workplace in **children** again has the keys **data** (with **id**, **title**, **sysid**, **type**, **type_title** and **status**) and **children** (the components of the workplace, same structure). For components, **children** is **false**.

### Example

=== "Request body with email"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.workstation_components.read",
      "params": {
        "filter": {
          "email": "moverkamp@i-doit.com"
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
        "62": {
          "data": {
            "id": "62",
            "title": "Michael Overkamp",
            "sysid": "SYSID_1692080956",
            "type": "53",
            "type_title": "Persons",
            "status": "2",
            "email": "moverkamp@i-doit.com",
            "first_name": "Michael",
            "last_name": "Overkamp"
          },
          "children": {
            "60": {
              "data": {
                "id": "60",
                "title": "Workstation_1",
                "sysid": "SYSID_1692080944",
                "type": "71",
                "type_title": "Workplace",
                "status": "2"
              },
              "children": {
                "58": {
                  "data": {
                    "id": "58",
                    "title": "MyLittleClient",
                    "sysid": "SYSID_1692080907",
                    "type": "10",
                    "type_title": "Client",
                    "status": "2"
                  },
                  "children": false
                }
              }
            }
          }
        }
      }
    }
    ```

=== "Request body with ids"

    ```json
    {
        "version": "2.0",
        "method": "cmdb.workstation_components.read",
        "params": {
        "filter": {
            "ids": [62,64]
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
        "62": {
          "data": {
            "id": "62",
            "title": "Michael Overkamp",
            "sysid": "SYSID_1692080956",
            "type": "53",
            "type_title": "Persons",
            "status": "2",
            "email": "moverkamp@i-doit.com",
            "first_name": "Michael",
            "last_name": "Overkamp"
          },
          "children": {
            "60": {
              "data": {
                "id": "60",
                "title": "Workstation_1",
                "sysid": "SYSID_1692080944",
                "type": "71",
                "type_title": "Workplace",
                "status": "2"
              },
              "children": {
                "58": {
                  "data": {
                    "id": "58",
                    "title": "MyLittleClient",
                    "sysid": "SYSID_1692080907",
                    "type": "10",
                    "type_title": "Client",
                    "status": "2"
                  },
                  "children": false
                }
              }
            }
          }
        },
        "64": {
          "data": {
            "id": "64",
            "title": "Michael Overkamp Again",
            "sysid": "SYSID_1692081388",
            "type": "53",
            "type_title": "Persons",
            "status": "2",
            "email": "2moverkamp@i-doit.com",
            "first_name": "Michael",
            "last_name": "Overkamp Again"
          },
          "children": {
            "65": {
              "data": {
                "id": "65",
                "title": "Workstation_2",
                "sysid": "SYSID_1692081488",
                "type": "71",
                "type_title": "Workplace",
                "status": "2"
              },
              "children": false
            }
          }
        }
      }
    }
    ```

## Siehe auch

- [API v1 Methoden](index.md) — Übersicht aller API v1 Methoden
- [API Add-on](../../index.md) — Einstieg in das API Add-on
- [i-doit Add-ons](../../../index.md) — Alle verfügbaren Add-ons
