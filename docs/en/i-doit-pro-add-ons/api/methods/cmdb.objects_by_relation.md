---
title: Namespace cmdb.objects_by_relation
description: cmdb.objects_by_relation
icon: material/api
status: new
lang: en
---

# Namespace cmdb.objects_by_relation

!!! example "Work in Progress"

## cmdb.objects_by_relation.read

Return objects by relation.

### Request parameters

| Key               | JSON data type    | Required | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| ----------------- | ----------------- | -------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **id**            | Integer           | Yes      | Object identifier                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| **relation_type** | String or Integer | No       | Constant of the relationship type or ID of the relationship type, for example **4**                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
| **status**        | String            | No       | Filter by status of the objects e.g. Normal or Archived:<br><br>- **C__RECORD_STATUS__NORMAL**  <br>    **Status ID = 2**  <br>    **Designation = Normal**<br>- **C__RECORD_STATUS__ARCHIVED**  <br>    **Status ID = 3**  <br>    **Designation = Archived**<br>- **C__RECORD_STATUS__DELETED**  <br>    **Status-ID = 4**  <br>    **Description = Deleted**<br>- **C__RECORD_STATUS__TEMPLATE**  <br>    **Status-ID = 6**  <br>    **Description = Template**<br>- **C__RECORD_STATUS__MASS_CHANGES_TEMPLATE**  <br>    **Status ID = 7**  <br>    **Description = Template for mass changes** |
| **raw**           | Boolean           | No       | Displayed raw formatting, see example.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |

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

!!! example "WIP"

    ### Response parameters

    JSON key **result** contains an array of JSON objects. Each object contains a search result.

    | Key             | JSON data type | Description |
    | --------------- | -------------- | ----------- |
    | **Placeholder** | Placeholder    | Placeholder |
    | **Placeholder** | Placeholder    | Placeholder |

### Example:

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.objects_by_relation",
      "params": {
        "status": 2,
        "id": 62,
        "raw": false,
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
        "63": {
          "data": {
            "id": 63,
            "title": "Michael Overkamp is logical unit of Workstation_1",
            "cmdb_status_title": "",
            "related_object": 60,
            "related_title": "Workstation_1",
            "related_type": 71,
            "related_type_title": "Workplace",
            "related_cmdb_status_title": "in operation",
            "master": 62,
            "slave": 60,
            "type": 60,
            "type_title": "Relation"
          },
          "children": false
        },
        "69": {
          "data": {
            "id": 69,
            "title": "Admin has member Michael Overkamp",
            "cmdb_status_title": "",
            "related_object": 14,
            "related_title": "Admin",
            "related_type": 54,
            "related_type_title": "Person groups",
            "related_cmdb_status_title": "in operation",
            "master": 14,
            "slave": 62,
            "type": 60,
            "type_title": "Relation"
          },
          "children": false
        },
        "70": {
          "data": {
            "id": 70,
            "title": "Author has member Michael Overkamp",
            "cmdb_status_title": "",
            "related_object": 12,
            "related_title": "Author",
            "related_type": 54,
            "related_type_title": "Person groups",
            "related_cmdb_status_title": "in operation",
            "master": 12,
            "slave": 62,
            "type": 60,
            "type_title": "Relation"
          },
          "children": false
        },
        "71": {
          "data": {
            "id": 71,
            "title": "MyLittleClient is used by Michael Overkamp",
            "cmdb_status_title": "",
            "related_object": 58,
            "related_title": "MyLittleClient",
            "related_type": 10,
            "related_type_title": "Client",
            "related_cmdb_status_title": "in operation",
            "master": 58,
            "slave": 62,
            "type": 60,
            "type_title": "Relation"
          },
          "children": false
        }
      }
    }
    ```

=== "Request body with relation_type"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.objects_by_relation",
      "params": {
        "status": 2,
        "id": 62,
        "relation_type": 5,
        "raw": false,
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
        "71": {
          "data": {
            "id": 71,
            "title": "MyLittleClient is used by Michael Overkamp",
            "cmdb_status_title": "",
            "related_object": 58,
            "related_title": "MyLittleClient",
            "related_type": 10,
            "related_type_title": "Client",
            "related_cmdb_status_title": "in operation",
            "master": 58,
            "slave": 62,
            "type": 60,
            "type_title": "Relation"
          },
          "children": false
        }
      }
    }
    ```
