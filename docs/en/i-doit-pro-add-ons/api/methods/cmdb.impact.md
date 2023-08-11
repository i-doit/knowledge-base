---
title: Namespace cmdb.impact
description: cmdb.impact
icon: material/api
status: new
lang: en
---

# Namespace cmdb.impact

!!! example "Work in Progress"

## cmdb.impact.read

This method is used for impact analysis and recursively returns all relationships of the specified object. The output can be restricted by specifying the relationship type.<br>
Attention: Depending on the environment and filling of the database this query may take some time and server resources (especially memory).

### Request parameters

| Key | JSON data type | Required | Description |
| --- | --- | --- | --- |
| **id** | Integer | Yes | Object identifier, for example: **9** |
| **relation_type** | String or Integer | Yes | Constant of the relationship type or ID of the relationship type, for example **4** |

Default relation types are:

| ID | Constant |
|-|-|
| 1 | C__RELATION_TYPE__SOFTWARE |
| 2 | C__RELATION_TYPE__CLUSTER_SERVICE |
| 3 | C__RELATION_TYPE__BACKUP |
| 4 | C__RELATION_TYPE__ADMIN |
| 5 | C__RELATION_TYPE__USER |
| 6 | C__RELATION_TYPE__CLUSTER_MEMBERSHIPS |
| 7 | C__RELATION_TYPE__POWER_CONSUMER |
| 8 | C__RELATION_TYPE__NETWORK_PORT |
| 9 | C__RELATION_TYPE__VIRTUAL_MACHINE |
| 10 | C__RELATION_TYPE__LOCATION |
| 11 | C__RELATION_TYPE__UNIVERSAL_INTERFACE |
| 12 | C__RELATION_TYPE__IP_ADDRESS |
| 13 | C__RELATION_TYPE__CONTROLLER_FC_PORT |
| 14 | C__RELATION_TYPE__CONNECTORS |
| 15 | C__RELATION_TYPE__LDEV_CLIENT |
| 16 | C__RELATION_TYPE__GROUP_MEMBERSHIPS |
| 17 | C__RELATION_TYPE__PERSON_ASSIGNED_GROUPS |
| 18 | C__RELATION_TYPE__DEFAULT |
| 19 | C__RELATION_TYPE__DATABASE_ACCESS |
| 20 | C__RELATION_TYPE__DATABASE_LINK |
| 21 | C__RELATION_TYPE__DATABASE_GATEWAY |
| 22 | C__RELATION_TYPE__DATABASE_INSTANCE |
| 23 | C__RELATION_TYPE__IT_SERVICE_COMPONENT |
| 24 | C__RELATION_TYPE__REPLICATION_PARTNER |
| 25 | C__RELATION_TYPE__SOA_COMPONENTS |

### Response parameters

JSON key **result** contains an array of JSON objects. Each object contains a search result.

| Key | JSON data type | Description |
| --- | --- | --- |
| **id** | String | Placeholder |
| **name** | String | Placeholder |
| **data** | String | Placeholder |
| **type** | String | Placeholder |
| **text** | String | Placeholder |
| **relation** | String | Placeholder |
| **statusColor** | String | Placeholder |
| **objTypeID** | String | Placeholder |
| **objectType** | String | Placeholder |
| **objID** | String | Placeholder |

### Example:

=== "Request body"

    ``` { .json }
    {
      "version": "2.0",
      "method": "cmdb.impact.read",
      "params": {
        "id": 9,
        "relation_type": 4,
        "apikey": "xxx",
        "language": "en"
      },
      "id": 1
    }
    ```

    ```json
    {
      "version": "2.0",
      "method": "cmdb.impact.read",
      "params": {
        "id": 9,
        "relation_type": 4,
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
      "result": [
        {
          "id": 123,
          "name": "CareBear Power Client",
          "data": {
            "relation": {
              "type": "Contact assignment",
              "text": "administrates"
            },
            "color": "B9E1BE",
            "statusColor": "33C20A",
            "objTypeID": 10,
            "objectType": "Client",
            "objID": 1122714692
          }
        }
      ]
    }
    ```
