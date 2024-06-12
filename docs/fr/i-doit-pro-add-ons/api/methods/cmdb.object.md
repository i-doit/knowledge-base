---
title: objet
description: objet
icon: material/api
#status: mis à jour
lang: fr
---

# cmdb.objet

!!! example "Travail en cours"

## cmdb.objet.lire

Lire des informations communes sur un [objet](../../../basics/structure-of-the-it-documentation.md)

### Paramètres de la requête

| Clé | Type de données JSON | Requis | Description |
| --- | --- | --- | --- |
| **id** | Entier | Oui | Identifiant de l'objet; par exemple: **42** |

### Paramètres de la réponse

La clé JSON **result** contient un objet JSON.

| Clé | Type de données JSON | Description |
| --- | --- | --- |
| **id** | Chaîne | Identifiant de l'objet (sous forme de chaîne numérique) |
| **titre** | Chaîne | Titre de l'objet |
| **sysid** | Chaîne | SYSID (voir catégorie **Global**) |
| **typeobjet** | Chaîne | Identifiant du type d'objet (sous forme de chaîne numérique) |
| **créé** | Chaîne | Date de création; format: **Y-m-d H:i:s** |
| **mis_à_jour** | Chaîne | Date de la dernière mise à jour; format: **Y-m-d H:i:s**<br>**Remarque:** Cette clé est facultative car tous les objets n'ont pas été mis à jour auparavant. |
| **type_titre** | Chaîne | Nom traduit du type d'objet |
| **type_icône** | Chaîne | URL relative vers l'icône du type d'objet |
| **statut**     | Chaîne   | Filtrer par statut des objets, par exemple Normal ou Archivé:<br>-   **C__RECORD_STATUS__BIRTH** = Inachevé<br>-   **C__RECORD_STATUS__NORMAL** = Normal<br>-   **C__RECORD_STATUS__ARCHIVED** = Archivé<br>-   **C__RECORD_STATUS__DELETED** = Supprimé<br>-   **C__RECORD_STATUS__TEMPLATE** = Modèle<br>-   **C__RECORD_STATUS__MASS_CHANGES_TEMPLATE** = Modèle pour les changements massifs |
| **statut_cmdb** | Chaîne | Statut CMDB (voir catégorie **Global**; sous forme de chaîne numérique) |
| **titre_statut_cmdb** | Chaîne | Statut CMDB traduit (voir catégorie **Global**) |
| **image** | Chaîne | URL vers l'image de l'objet |

### Exemple

=== "Corps de la requête"

    ```json
    {
        "version": "2.0",
        "method": "cmdb.object.read",
        "params": {
            "id": 1000,
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
            "id": 1000,
            "title": "ESXi1",
            "sysid": "VHOST_1426338622",
            "objecttype": 58,
            "type_title": "Virtual host",
            "type_icon": "images/icons/silk/server_database.png",
            "status": 2,
            "cmdb_status": 6,
            "cmdb_status_title": "in operation",
            "created": "2023-07-11 14:07:04",
            "updated": "2023-07-11 14:07:04",
            "image": "http://demo.synetics.int/pro/images/objecttypes/server.png"
        }
    }
    ```

## cmdb.object.create

Crée un nouveau [objet](../../../basics/structure-of-the-it-documentation.md) avec quelques informations facultatives

### Paramètres de la requête

| Clé | Type de données JSON | Requis | Description |
| --- | --- | --- | --- |
| **type** | Chaîne\|Entier | Oui | Constante de type d'objet en tant que chaîne, par exemple : **"C__OBJTYPE__SERVER"**<br><br>Alternativement, identifiant de type d'objet en tant qu'entier, par exemple : **5** |
| **title** | Chaîne | Oui | Titre de l'objet, par exemple : **"Mon petit serveur"** |
| **category** | Chaîne | Non  | Attribut **Catégorie** dans la catégorie **Global** |
| **categories** | Objet avec un tableau | Non | Constante de catégorie, par exemple : **"C__CATG__MODEL"** avec des clés dans un tableau |
| **purpose** | Chaîne | Non  | Attribut **Objectif** dans la catégorie Global, par exemple : **"En production"** |
| **cmdb_status** | Chaîne\|Entier | Non  | Attribut **Statut CMDB** dans la catégorie **Global** par sa constante (chaîne), par exemple : **"C__CMDB_STATUS__IN_OPERATION"**<br><br>Alternativement, par son identifiant (entier), par exemple : **6** |
| **description** | Chaîne | Non  | Attribut **Description** dans la catégorie **Global** |

### Paramètres de réponse 

La clé JSON **result** contient un objet JSON.

| Clé | Type de données JSON | Description |
| --- | --- | --- |
| **id** | Chaîne | Identifiant de l'objet (sous forme de chaîne numérique) |
| **message** | Chaîne | Quelques informations |
| **success** | Booléen | Doit toujours être **true** |

### Exemple

=== "Corps de la requête"

    ```json
    {
        "version": "2.0",
        "method": "cmdb.object.create",
        "params": {
            "type": "C__OBJTYPE__SERVER",
            "title": "My little server",
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
        "id": 28,
        "message": "Object was successfully created",
        "success": true
      }
    }
    ```

## cmdb.object.update 

Modifier un objet, par exemple le titre d'un objet.

### Paramètres de requête 

| Clé | Type de données JSON | Requis | Description |
| --- | --- | --- | --- |
| **id** | Entier | Oui | Identifiant de l'objet, par exemple : **42** |
| **title** | Chaîne | Oui | Nouveau titre de l'objet, par exemple : **"Votre petit serveur"** |

### Paramètres de réponse 

La clé JSON **result** contient un objet JSON.

| Clé | Type de données JSON | Description |
| --- | --- | --- |
| **message** | Chaîne | Doit être |
| **success** | Booléen | Doit être true |

### Exemple 

=== "Corps de la requête"

    ```json
    {
        "version": "2.0",
        "method": "cmdb.object.update",
        "params": {
            "id": 42,
            "title": "Your little server",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```

### Corps de la réponse 

    ```json
    {
        "jsonrpc": "2.0",
        "result": {
            "message": "Object title was successfully updated",
            "success": true
        },
        "id": 1
    }
    ```

## cmdb.object.delete

[Supprime](../../../basics/life-and-documentation-cycle.md) un objet et peut également définir un statut d'enregistrement spécifique comme Archivé.

### Paramètres de la demande

| Clé | Type de données JSON | Requis | Description |
| --- | --- | --- | --- |
| **id** | Entier | Oui | Identifiant de l'objet, par exemple: **42** |
| **status** | Chaîne | Oui | Constante de statut :<br> **C__RECORD_STATUS__ARCHIVED**<br> Archiver l'objet<br> **C__RECORD_STATUS__DELETED**<br> Marquer l'objet comme supprimé<br> **C__RECORD_STATUS__PURGE**<br> Purger l'objet de la base de données |

### Paramètres de la réponse

La clé JSON **result** contient un objet JSON.

| Clé | Type de données JSON | Description |
| --- | --- | --- |
| **success** | Booléen | Doit être **true** |
| **message** | Chaîne | Quelques informations |

### Exemple

=== "Corps de la demande"

    ```json
    {
        "version": "2.0",
        "method": "cmdb.object.delete",
        "params": {
            "id": 42,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```

### Corps de la réponse 

    ```json
    {
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Object 42 has been deleted."
        },
        "id": 1
    }
    ```

## cmdb.object.recycle

Recycle un objet

### Paramètres de la requête 

| Clé | Type de données JSON | Requis | Description |
| --- | --- | --- | --- |
| **objet** | Entier | Oui | Identifiant de l'objet, par exemple : **464** |

### Paramètres de la réponse 

La clé JSON **résultat** contient un objet JSON.

| Clé | Type de données JSON | Description |
| --- | --- | --- |
| **succès** | Booléen | Doit être **true** |
| **message** | Chaîne de caractères | Quelques informations |

### Exemple 

=== "Corps de la requête"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.object.recycle",
      "params": {
        "object": 28,
        "status": "C__RECORD_STATUS__ARCHIVED",
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
        "message": "Object 28 has been recycled."
      }
    }
    ```

## cmdb.object.archive 

[Archive](../../../basics/life-and-documentation-cycle.md#archive-category-entries-mark-them-as-deleted-or-purge-them) un objet

### Paramètres de la requête 

| Clé | Type de données JSON | Requis | Description |
| --- | --- | --- | --- |
| **objet** | Entier | Oui | Identifiant de l'objet, par exemple : **464** |

### Paramètres de la réponse 

La clé JSON **résultat** contient un objet JSON.

| Clé | Type de données JSON | Description |
| --- | --- | --- |
| **succès** | Booléen | Doit être **true** |
| **message** | Chaîne de caractères | Quelques informations |

## cmdb.object.purge 

[Purges](../../../basics/life-and-documentation-cycle.md#archive-category-entries-mark-them-as-deleted-or-purge-them) un objet lorsque le statut est supprimé.

### Paramètres de la requête

| Clé | Type de données JSON | Requis | Description |
| --- | --- | --- | --- |
| **objet** | Entier | Oui | Identifiant de l'objet, par exemple : **464** |

### Paramètres de la réponse

La clé JSON **result** contient un objet JSON.

| Clé | Type de données JSON | Description |
| --- | --- | --- |
| **succès** | Booléen | Doit être **true** |
| **message** | Chaîne | Quelques informations |

### Exemple

=== "Corps de la requête"

    ```json
    {
        "version": "2.0",
        "method": "cmdb.object.purge",
        "params": {
            "object": 464,
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
            "message": "Object 464 has been purged."
        }
    }
    ```

## cmdb.object.markAsTemplate

Définit la condition de l'objet comme un [Modèle](../../../efficient-documentation/templates.md)

### Paramètres de la requête

| Clé | Type de données JSON | Requis | Description |
| --- | --- | --- | --- |
| **objet** | Entier | Oui | Identifiant de l'objet, par exemple : **465** |

### Paramètres de réponse

La clé JSON **résultat** contient un objet JSON.

| Clé | Type de données JSON | Description |
| --- | --- | --- |
| **succès** | Booléen | Doit être **true** |
| **message** | Chaîne de caractères | Quelques informations |

### Exemple

=== "Corps de la requête"

    ```json
    {
        "version": "2.0",
        "method": "cmdb.object.markAsTemplate",
        "params": {
            "object": 465,
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
            "message": "Object 465 has been marked as template."
        }
    }
    ```

## cmdb.object.markAsMassChangeTemplate

Définit la condition de l'objet comme un [Changement de masse](../../../efficient-documentation/mass-change.md) [Modèle](../../../efficient-documentation/templates.md)

### Paramètres de la requête

| Clé | Type de données JSON | Requis | Description |
| --- | --- | --- | --- |
| **objet** | Entier | Oui | Identifiant de l'objet, par exemple : **465** |

### Paramètres de réponse

La clé JSON **résultat** contient un objet JSON.

| Clé | Type de données JSON | Description |
| --- | --- | --- |
| **succès** | Booléen | Doit être **true** |
| **message** | Chaîne de caractères | Quelques informations |

### Exemple

=== "Corps de la requête"

```json
{
        "version": "2.0",
        "method": "cmdb.object.markAsMassChangeTemplate",
        "params": {
            "object": 465,
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
            "message": "Object 465 has been marked as mass change template."
        }
    }
```
