---
title: Espace de noms cmdb.impact
description: cmdb.impact
icon: material/api
#status: updated
lang: fr
---

# Espace de noms cmdb.impact

!!! example "Travail en cours"

## cmdb.impact.read

Cette méthode est utilisée pour l'analyse d'impact et renvoie de manière récursive toutes les relations de l'objet spécifié. La sortie peut être restreinte en spécifiant le type de relation.<br>
Attention : En fonction de l'environnement et du remplissage de la base de données, cette requête peut prendre du temps et des ressources serveur (en particulier de la mémoire).

### Paramètres de la requête

| Clé               | Type de données JSON | Requis   | Description                                                                         |
| ----------------- | --------------------- | -------- | ----------------------------------------------------------------------------------- |
| **id**            | Entier               | Oui      | Identifiant de l'objet, par exemple : **9**                                         |
| **relation_type** | Chaîne ou Entier     | Oui      | Constante du type de relation ou ID du type de relation, par exemple **4**          |

Les types de relations par défaut sont :

| Titre                      | ID  | Constante                                |
| -------------------------- | --- | ---------------------------------------- |
| Attribution de logiciel    | 1   | C__RELATION_TYPE__SOFTWARE               |
| Attribution de service de cluster | 2   | C__RELATION_TYPE__CLUSTER_SERVICE        |
| Sauvegarde                 | 3   | C__RELATION_TYPE__BACKUP                 |
| Attribution de contact     | 4   | C__RELATION_TYPE__ADMIN                  |
| Attribution de contact     | 5   | C__RELATION_TYPE__USER                   |
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

La clé JSON **result** contient un tableau d'objets JSON. Chaque objet contient un résultat de recherche.

| Clé             | Type de données JSON | Description |
| --------------- | --------------------- | ----------- |
| **id**          | Chaîne               | Placeholder |
| **name**        | Chaîne               | Placeholder |
| **data**        | Chaîne               | Placeholder |
| **type**        | Chaîne               | Placeholder |
| **text**        | Chaîne               | Placeholder |
| **relation**    | Chaîne               | Placeholder |
| **statusColor** | Chaîne               | Placeholder |
| **objTypeID**   | Chaîne               | Placeholder |
| **objectType**  | Chaîne               | Placeholder |
| **objID**       | Chaîne               | Placeholder |

### Exemple

=== "Corps de la requête"

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

=== "Corps de la réponse"

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
