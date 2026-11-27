---
title: cmdb.impact
description: "This method is used for impact analysis and recursively returns all relationships of the specified object."
icon: material/api
#status: updated
lang: de
---

## cmdb.impact.read

This method is used for impact analysis and recursively returns all relationships of the specified object. The output can be restricted by specifying the relationship type.<br>
Attention: Depending on the environment and filling of the database this query may take some time and server resources (especially memory).

### Request parameters

| Key               | JSON data type    | Required | Description                                                                         |
| ----------------- | ----------------- | -------- | ----------------------------------------------------------------------------------- |
| **id**            | Integer           | Yes      | Object identifier, for example: **37**                                               |
| **relation_type** | String or Integer | Yes      | Constant of the relationship type or ID of the relationship type, for example: **4** or **C__RELATION_TYPE__ADMIN** |

Default relation types are:

| Title                      | ID  | Constant                                 |
| -------------------------- | --- | ---------------------------------------- |
| Software assignment        | 1   | C__RELATION_TYPE__SOFTWARE               |
| Cluster service assignment | 2   | C__RELATION_TYPE__CLUSTER_SERVICE        |
| Backup                     | 3   | C__RELATION_TYPE__BACKUP                 |
| Contact assignment         | 4   | C__RELATION_TYPE__ADMIN                  |
| Contact assignment         | 5   | C__RELATION_TYPE__USER                   |
| Cluster memberships        | 6   | C__RELATION_TYPE__CLUSTER_MEMBERSHIPS    |
| Power consumer             | 7   | C__RELATION_TYPE__POWER_CONSUMER         |
| Ports                      | 8   | C__RELATION_TYPE__NETWORK_PORT           |
| Virtual machine            | 9   | C__RELATION_TYPE__VIRTUAL_MACHINE        |
| Location                   | 10  | C__RELATION_TYPE__LOCATION               |
| Interface                  | 11  | C__RELATION_TYPE__UNIVERSAL_INTERFACE    |
| Host address               | 12  | C__RELATION_TYPE__IP_ADDRESS             |
| FC port                    | 13  | C__RELATION_TYPE__CONTROLLER_FC_PORT     |
| Connectors                 | 14  | C__RELATION_TYPE__CONNECTORS             |
| Logical devices (Client)   | 15  | C__RELATION_TYPE__LDEV_CLIENT            |
| Group memberships          | 16  | C__RELATION_TYPE__GROUP_MEMBERSHIPS      |
| Person group memberships   | 17  | C__RELATION_TYPE__PERSON_ASSIGNED_GROUPS |
| Dependency                 | 18  | C__RELATION_TYPE__DEFAULT                |
| Database access            | 19  | C__RELATION_TYPE__DATABASE_ACCESS        |
| Database links             | 20  | C__RELATION_TYPE__DATABASE_LINK          |
| Database gateway           | 21  | C__RELATION_TYPE__DATABASE_GATEWAY       |
| Database instance          | 22  | C__RELATION_TYPE__DATABASE_INSTANCE      |
| Service component          | 23  | C__RELATION_TYPE__IT_SERVICE_COMPONENT   |
| Replication partner        | 24  | C__RELATION_TYPE__REPLICATION_PARTNER    |
| SOA-Component              | 25  | C__RELATION_TYPE__SOA_COMPONENTS         |

### Response parameters

JSON key **result** contains an array of JSON objects. Each object contains one related object. If the object has no relationships of the given type or the relationship type is unknown, the array is empty. If the object does not exist, **result** is `null`.

| Key                            | JSON data type | Description                                                         |
| ------------------------------ | -------------- | ------------------------------------------------------------------- |
| **id**                         | Integer        | Identifier of the related object                                    |
| **name**                       | String         | Title of the related object                                         |
| **data**                       | Object         | Details of the related object and the relationship                  |
| **data.relation**              | Object         | Relationship to the related object                                  |
| **data.relation.type**         | String         | Relationship type, for example: "Contact assignment"                |
| **data.relation.text**         | String         | Description of the relationship, for example: "administrates"       |
| **data.color**                 | String         | Color of the object type as hex code, for example: "#82e27e"        |
| **data.statusColor**           | String         | Color of the CMDB status as hex code, for example: "#33c20a"        |
| **data.objTypeID**             | Integer        | Object type identifier                                              |
| **data.objectType**            | String         | Object type, translated into the requested language                 |
| **data.objID**                 | Integer        | Identifier of the related object, same as **id**                    |

### Example

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.impact.read",
      "params": {
        "id": 37,
        "relation_type": "C__RELATION_TYPE__ADMIN",
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
          "id": 39,
          "name": "Contoso GmbH",
          "data": {
            "relation": {
              "type": "Contact assignment",
              "text": "administrates"
            },
            "color": "#82e27e",
            "statusColor": "#33c20a",
            "objTypeID": 52,
            "objectType": "Organization",
            "objID": 39
          }
        },
        {
          "id": 44,
          "name": "Zone Rechenzentrum",
          "data": {
            "relation": {
              "type": "Contact assignment",
              "text": "administrates"
            },
            "color": "#59bdff",
            "statusColor": "#33c20a",
            "objTypeID": 91,
            "objectType": "Net zone",
            "objID": 44
          }
        }
      ]
    }
    ```

=== "Error: id or relation_type missing"

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "error": {
        "code": -32099,
        "message": "i-doit system error: Error: You have to specify the parameters 'id' and 'relation_type'",
        "data": null
      }
    }
    ```

## Siehe auch

- [API v1 Methoden](index.md) — Übersicht aller API v1 Methoden
- [API Add-on](../../index.md) — Einstieg in das API Add-on
- [i-doit Add-ons](../../../index.md) — Alle verfügbaren Add-ons
