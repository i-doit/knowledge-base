---
title: idoit
description: idoit
icon: material/api
#status: updated
lang: en
---

# idoit

Cet espace de noms est réservé aux méthodes communes.

!!! example "Travail en cours"

## idoit.addons

Affiche une liste des modules complémentaires installés.

### Paramètres de la requête

| Clé | Type de données JSON | Description |
| --- | -------------------- | ----------- |
| -   | -                    | -           |

!!! example "Travail en cours"

    ### Paramètres de la réponse

    La clé JSON **result** contient un tableau d'objets JSON. Chaque objet contient un résultat de recherche.

    | Clé             | Type de données JSON | Description |
    | --------------- | -------------------- | ----------- |
    | **Placeholder** | Placeholder          | Placeholder |
    | **Placeholder** | Placeholder          | Placeholder |

### Exemple

=== "Corps de la requête"

    ```json
    {
      "version": "2.0",
      "method": "idoit.addons",
      "params": {
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
        "success": true,
        "result": [
          {
            "title": "Api",
            "key": "api",
            "version": "1.14.1",
            "author": {
              "name": "synetics GmbH"
            },
            "licensed": true,
            "active": true,
            "installed": true
          },
          {
            "title": "PRO",
            "key": "pro",
            "version": "25",
            "author": {
              "name": "synetics GmbH"
            },
            "licensed": true,
            "active": true,
            "installed": true
          }
        ]
      }
    }
    ```

## idoit.constants

Récupère les constantes définies dans i-doit.

### Paramètres de la requête

| Clé | Type de données JSON | Description |
| --- | -------------------- | ----------- |
| -   | -                    | -           |

### Réponse 

La clé JSON **result** contient un objet JSON.

| Clé              | Type de données JSON | Description                                                                                           |
| ---------------- | -------------------- | ----------------------------------------------------------------------------------------------------- |
| **objectTypes**  | Objet                | Liste des types d'objets<br><br>Clés : constantes de types d'objets<br><br>Valeurs : titres de types d'objets traduits  |
| **categories**   | Objet                | Liste des catégories globales et spécifiques                                                            |
| **categories.g** | Objet                | Liste des catégories globales<br><br>Clés : constantes de catégories<br><br>Valeurs : titres de catégories traduits   |
| **categories.s** | Objet                | Liste des catégories spécifiques<br><br>Clés : constantes de catégories<br><br>Valeurs : titres de catégories traduits |

### Exemple 

=== "Corps de la requête"

    ```json
    {
      "version": "2.0",
      "method": "idoit.constants",
      "params": {
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
        "objectTypes": {
          "C__OBJTYPE__SERVICE": "System Service",
          "C__OBJTYPE__APPLICATION": "Application",
          "C__OBJTYPE__BUILDING": "Building",
          "C__OBJTYPE__ENCLOSURE": "Rack",
          "C__OBJTYPE__SERVER": "Server",
          ...
        },
        "categories": {
          "g": {
            "C__CATG__GLOBAL": "General",
            "C__CATG__MODEL": "Model",
            "C__CATG__FORMFACTOR": "Form factor",
            "C__CATG__CPU": "CPU",
            "C__CATG__MEMORY": "Memory",
            "C__CATG__NETWORK": "Network",
            ...
          },
          "s": {
            "C__CATS__ENCLOSURE": "Rack",
            "C__CATS__ROOM": "Room",
            "C__CATS__SERVICE": "Services",
            "C__CATS__SWITCH_NET": "Switch",
            "C__CATS__WAN": "WAN",
            ...
          },
          "g_custom": {
            "C__CATG__CUSTOM_FIELDS_DIALOG_ADMIN_KB": "Dialog-Admin KB"
          }
        },
        "recordStates": {
          "C__RECORD_STATUS__NORMAL": "Normal",
          "C__RECORD_STATUS__ARCHIVED": "Archived",
          "C__RECORD_STATUS__DELETED": "Deleted",
          "C__RECORD_STATUS__PURGE": "LC__CMDB__RECORD_STATUS__PURGE"
        },
        "relationTypes": {
          "C__RELATION_TYPE__SOFTWARE": "Software assignment",
          "C__RELATION_TYPE__CLUSTER_SERVICE": "Cluster service assignment",
          "C__RELATION_TYPE__BACKUP": "Backup",
          "C__RELATION_TYPE__ADMIN": "Contact assignment",
          "C__RELATION_TYPE__USER": "Contact assignment",
          ...
        },
        "staticObjects": {
          "C__OBJ__ROOT_LOCATION": "Root location",
          "C__OBJ__PERSON_GUEST": "guest ",
          "C__OBJ__PERSON_READER": "reader ",
          "C__OBJ__PERSON_EDITOR": "editor ",
          "C__OBJ__PERSON_AUTHOR": "author ",
          "C__OBJ__PERSON_ARCHIVAR": "archivar ",
          "C__OBJ__PERSON_ADMIN": "admin ",
          "C__OBJ__PERSON_GROUP_READER": "Reader",
          "C__OBJ__PERSON_GROUP_EDITOR": "Editor",
          "C__OBJ__PERSON_GROUP_AUTHOR": "Author",
          "C__OBJ__PERSON_GROUP_ARCHIVAR": "Archivar",
          "C__OBJ__PERSON_GROUP_ADMIN": "Admin",
          "C__OBJ__NET_GLOBAL_IPV4": "Global v4",
          "C__OBJ__NET_GLOBAL_IPV6": "Global v6",
          "C__OBJ__PERSON_API_SYSTEM": "Api System",
          "C__OBJ__RACK_SEGMENT__4SLOT": "4-Slot",
          "C__OBJ__RACK_SEGMENT__8SLOT": "8-Slot",
          "C__OBJ__RACK_SEGMENT__2SLOT": "2-Slot"
        }
      }
    }
    ```

## idoit.license 

Affiche des informations sur la licence installée.

### Paramètres de la requête

| Clé            | Type de données JSON | Requis   | Description |
| -------------- | -------------------- | -------- | ----------- |
| **Placeholder** | Placeholder          | Oui      | Placeholder |

!!! example "WIP"

    ### Paramètres de la réponse

    La clé JSON **result** contient un tableau d'objets JSON. Chaque objet contient un résultat de recherche.

    | Clé            | Type de données JSON | Description |
    | -------------- | -------------------- | ----------- |
    | **Placeholder** | Placeholder          | Placeholder |
    | **Placeholder** | Placeholder          | Placeholder |

### Exemple

=== "Corps de la requête"

    ```json
    {
      "version": "2.0",
      "method": "idoit.license",
      "params": {
        "apikey": "{{apikey}}",
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
        "objectCapacity": {
          "total": 5002,
          "inUse": 1
        },
        "addons": {
          "iso27001": {
            "licensed": true,
            "label": "i-doit pro Add-on ISMS medium"
          },
          "viva": {
            "label": "VIVA",
            "licensed": false
          },
          "viva2": {
            "licensed": true,
            "label": "i-doit pro Add-on VIVA medium"
          },
          "cmk2": {
            "licensed": true,
            "label": "i-doit pro Add-on Checkmk2"
          },
          "document": {
            "licensed": true,
            "label": "i-doit pro Add-on Documents medium"
          },
          ...
        },
        "licenses": [
          {
            "id": 2,
            "label": "i-doit pro Add-on Checkmk2",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          ...
        ]
      }
    }
    ```

## idoit.login 

Crée une nouvelle session avec les en-têtes X-RPC-Auth.

### Paramètres de la requête

| Clé | Type de données JSON | Requis   | Description |
| --- | -------------------- | -------- | ----------- |
| -   | -                    | -        | -           |

### Paramètres de réponse 

La clé JSON **result** contient un objet JSON.

| Clé             | Type de données JSON | Description                                                        |
| --------------- | -------------------- | ------------------------------------------------------------------ |
| **result**      | Booléen              | Doit être **true**                                                 |
| **userid**      | Chaîne de caractères | Identifiant d'objet de l'utilisateur connecté (sous forme de chaîne numérique) |
| **name**        | Chaîne de caractères | Titre de l'objet de l'utilisateur connecté                          |
| **mail**        | Chaîne de caractères | Attribut **Adresse e-mail** dans la catégorie **Personnes → Données principales** |
| **username**    | Chaîne de caractères | Attribut **Nom d'utilisateur** dans la catégorie **Personnes → Connexion** |
| **session-id**  | Chaîne de caractères | Identifiant de session généré                                     |
| **client-id**   | Chaîne de caractères | Identifiant du locataire (sous forme de chaîne numérique)          |
| **client-name** | Chaîne de caractères | Nom du locataire                                                   |

### Exemple

=== "Corps de la requête avec en-tête défini"

    ```
    X-RPC-Auth-Username: admin
    X-RPC-Auth-Password: admin
    ```

    ```json
    {
        "version": "2.0",
        "method": "idoit.login",
        "params": {
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```

=== "Corps de la réponse avec en-tête"

    ```
    X-RPC-Auth-Session: d1obs9m3d2pd8651grptjhdjg3
    ```

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "result": true,
        "userid": "9",
        "name": "admin ",
        "mail": "",
        "username": "admin",
        "session-id": "d1obs9m3d2pd8651grptjhdjg3",
        "client-id": 1,
        "client-name": "KnowledgeBase"
      }
    }
    ```

### idoit.logout

Ferme la session actuelle

### Paramètres de la requête

| Clé | Type de données JSON | Description |
| --- | -------------------- | ----------- |
| -   | -                    | -           |

### Paramètres de la réponse

La clé JSON **result** contient un objet JSON.

| Clé     | Type de données JSON | Description                           |
| ------- | -------------------- | ------------------------------------- |
| message | Chaîne de caractères | Doit être **"Déconnexion réussie"**    |
| result  | Booléen              | Doit être **true**                    |

### Exemple

Voir la méthode [idoit.login](#idoitlogin) avant.

=== "Corps de la requête"

    ```
    X-RPC-Auth-Session: d1obs9m3d2pd8651grptjhdjg3
    ```

    ```json
    {
        "version": "2.0",
        "method": "idoit.logout",
        "params": {
            "apikey": "xxx",
            "language": "en"
        },
        "id": 3
    }
    ```

### Corps de la réponse {/%%%/}

    ```
    X-RPC-Auth-Session: d1obs9m3d2pd8651grptjhdjg3
    ```

    ```json
    {
        "jsonrpc": "2.0",
        "result": {
            "message": "Logout successfull",
            "result": true
        },
        "id": 3
    }
    ```

## idoit.search {/%%%/}

[Recherche](../../../efficient-documentation/search.md) dans i-doit

### Paramètres de la requête {/%%%/}

| Clé   | Type de données JSON | Requis | Description                                |
| ----- | --------------------- | ------ | ------------------------------------------ |
| **q** | Chaîne de caractères | Oui    | Requête, par exemple : **"Mon petit serveur"** |

### Paramètres de la réponse {/%%%/}

La clé JSON **result** contient un tableau d'objets JSON. Chaque objet contient un résultat de recherche.

| Clé            | Type de données JSON | Description                                        |
| -------------- | -------------------- | -------------------------------------------------- |
| **documentID** | Chaîne de caractères  | Identifiant                                         |
| **key**        | Chaîne de caractères  | Attribut lié à la requête                          |
| **value**      | Chaîne de caractères  | Valeur liée à la requête                           |
| **type**       | Chaîne de caractères  | [Module complémentaire](../index.md) ou fonction principale |
| **link**       | Chaîne de caractères  | URL relative qui mène directement au résultat de la recherche |
| **score**      | Entier               | Score (obsolète)                                   |

### Exemple

=== "Corps de la requête"

    ```json
    {
        "version": "2.0",
        "method": "idoit.search",
        "params": {
            "q": "My little server",
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
                "documentId": "1000",
                "key": "Virtual Host > Global > Title",
                "value": "My little server",
                "type": "cmdb",
                "link": "/?objID=1000&catgID=1&cateID=1029&highlight=My%20little%20server",
                "score": "100",
                "status": "Normal"
            },
            […]
        ],
    }
    ```

## idoit.version

Obtenez des informations sur i-doit et l'utilisateur actuel

### Paramètres de la requête

| Clé | Type de données JSON | Description |
| --- | -------------------- | ----------- |
| -   | -                    | -           |

### Paramètres de la réponse

La clé JSON **result** contient un objet JSON avec diverses informations sur i-doit lui-même et l'utilisateur actuel.

| Clé                | Type de données JSON | Description                                                                     |
| ------------------ | -------------------- | ------------------------------------------------------------------------------- |
| **login**          | Tableau              | Informations sur l'utilisateur ayant effectué la demande; voir ci-dessous pour les détails |
| **login.userid**   | Chaîne               | Identifiant de l'objet (sous forme de chaîne numérique)                         |
| **login.name**     | Chaîne               | Titre de l'objet                                                                |
| **login.mail**     | Chaîne               | Adresse e-mail (voir la catégorie **Personnes → Données principales**)          |
| **login.username** | Chaîne               | Nom d'utilisateur (voir la catégorie **Personnes → Connexion**)                 |
| **login.mandator** | Chaîne               | Nom du locataire                                                               |
| **login.language** | Chaîne               | Langue : **"en"** ou **"de"**                                                  |
| **version**        | Chaîne               | Version de i-doit installée                                                    |
| **step**           | Chaîne               | Version de développement, alpha ou bêta                                        |
| **type**           | Chaîne               | Variante de version : **"OPEN"** ou **"PRO"**                                  |

### Exemple

=== "Corps de la requête"

```json
{
        "version": "2.0",
        "method": "idoit.version",
        "params": {
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
        "login": {
          "userid": "9",
          "name": "admin ",
          "mail": "",
          "username": "admin",
          "tenant": "KnowledgeBase",
          "language": "en"
        },
        "version": "25",
        "step": "",
        "type": "PRO"
      }
    }
```
