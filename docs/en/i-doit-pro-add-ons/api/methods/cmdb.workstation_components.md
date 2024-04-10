---
title: Namespace cmdb.object
description: cmdb.object
icon: material/api
#status: updated
lang: en
---

# Namespace workstation_components

!!! example "Work in Progress"

## cmdb.workstation_components.read

Fetches workplace components for a Person.

### Request parameters

| Key | JSON data type | Required | Description |
| --- | --- | --- | --- |
| **id** | Integer | No | ID of a object |
| **ids** | Array with integer | No | ID of objects |
| **email** | String | No | Person email address |
| **emails** | String | No | Person email addresses |

!!! example "WIP"

    ### Response parameters

    JSON key **result** contains an array of JSON objects. Each object contains a search result.

    | Key | JSON data type | Description |
    | --- | --- | --- |
    | **Placeholder** | Placeholder | Placeholder |
    | **Placeholder** | Placeholder | Placeholder |

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
