---
title: Espace de noms cmdb.objects_by_relation
description: cmdb.objects_by_relation
icon: material/api
#status: updated
lang: fr
---

# Espace de noms cmdb.objects_by_relation

!!! example "Travail en cours"

## cmdb.objects_by_relation.read

Renvoie des objets par relation.

### Paramètres de la requête

| Clé               | Type de données JSON | Requis   | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| ----------------- | --------------------- | -------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **id**            | Entier               | Oui      | Identifiant de l'objet                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| **relation_type** | Chaîne de caractères ou Entier | Non       | Constante du type de relation ou ID du type de relation, par exemple **4**                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
| **status**        | Chaîne de caractères  | Non       | Filtrer par statut des objets, par exemple Normal ou Archivé:<br><br>- **C__RECORD_STATUS__NORMAL**  <br>    **ID de statut = 2**  <br>    **Désignation = Normal**<br>- **C__RECORD_STATUS__ARCHIVED**  <br>    **ID de statut = 3**  <br>    **Désignation = Archivé**<br>- **C__RECORD_STATUS__DELETED**  <br>    **ID de statut = 4**  <br>    **Description = Supprimé**<br>- **C__RECORD_STATUS__TEMPLATE**  <br>    **ID de statut = 6**  <br>    **Description = Modèle**<br>- **C__RECORD_STATUS__MASS_CHANGES_TEMPLATE**  <br>    **ID de statut = 7**  <br>    **Description = Modèle pour les changements massifs** |
| **raw**           | Booléen              | Non       | Affichage du format brut, voir exemple.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |

Les types de relations par défaut sont les suivants :

| Titre                      | ID  | Constante                                |
| -------------------------- | --- | ----------------------------------------- |
| Attribution de logiciel     | 1   | C__RELATION_TYPE__SOFTWARE               |
| Attribution de service de cluster | 2   | C__RELATION_TYPE__CLUSTER_SERVICE        |
| Sauvegarde                 | 3   | C__RELATION_TYPE__BACKUP                 |
| Attribution de contact      | 4   | C__RELATION_TYPE__ADMIN                  |
| Attribution de contact      | 5   | C__RELATION_TYPE__USER                   |
| Adhésions de cluster       | 6   | C__RELATION_TYPE__CLUSTER_MEMBERSHIPS    |
| Consommateur d'énergie     | 7   | C__RELATION_TYPE__POWER_CONSUMER         |
| Ports                      | 8   | C__RELATION_TYPE__NETWORK_PORT           |
| Machine virtuelle          | 9   | C__RELATION_TYPE__VIRTUAL_MACHINE        |
| Emplacement                | 10  | C__RELATION_TYPE__LOCATION               |
| Interface                  | 11  | C__RELATION_TYPE__UNIVERSAL_INTERFACE    |
| Adresse hôte               | 12  | C__RELATION_TYPE__IP_ADDRESS             |
| Port FC                    | 13  | C__RELATION_TYPE__CONTROLLER_FC_PORT     |
| Connecteurs                | 14  | C__RELATION_TYPE__CONNECTORS             |
| Appareils logiques (Client) | 15  | C__RELATION_TYPE__LDEV_CLIENT            |
| Adhésions de groupe        | 16  | C__RELATION_TYPE__GROUP_MEMBERSHIPS      |
| Adhésions de groupe de personnes | 17  | C__RELATION_TYPE__PERSON_ASSIGNED_GROUPS |
| Dépendance                 | 18  | C__RELATION_TYPE__DEFAULT                |
| Accès à la base de données | 19  | C__RELATION_TYPE__DATABASE_ACCESS        |
| Liens de base de données   | 20  | C__RELATION_TYPE__DATABASE_LINK          |
| Passerelle de base de données | 21  | C__RELATION_TYPE__DATABASE_GATEWAY       |
| Instance de base de données | 22  | C__RELATION_TYPE__DATABASE_INSTANCE      |
| Composant de service       | 23  | C__RELATION_TYPE__IT_SERVICE_COMPONENT   |
| Partenaire de réplication  | 24  | C__RELATION_TYPE__REPLICATION_PARTNER    |
| Composant SOA              | 25  | C__RELATION_TYPE__SOA_COMPONENTS         |

### Paramètres de réponse 

Clé JSON **résultat** contient un tableau d'objets JSON. Chaque objet contient un résultat de recherche.

| Clé             | Type de données JSON | Description |
| --------------- | -------------------- | ----------- |
| **Placeholder** | Placeholder           | Placeholder |
| **Placeholder** | Placeholder           | Placeholder |

### Exemple 

=== "Corps de la requête"

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

=== "Corps de la réponse"

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

=== "Corps de la requête avec relation_type"

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

=== "Corps de la réponse"

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
