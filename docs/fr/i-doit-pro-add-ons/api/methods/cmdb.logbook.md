---
title: cmdb.logbook
description: cmdb.logbook
icon: material/api
#status: updated
lang: en
---

# cmdb.logbook

!!! example "Travail en cours"

## cmdb.logbook.read

Accès en lecture au journal de bord i-doit.

### Paramètres de la requête

| Clé                 | Type de données JSON | Requis | Description                                                                                                                                                                                                                                                                                                                                                                           |
| ------------------- | --------------------- | ------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **id**              | Entier               | Non    | ID de l'entrée de journal de bord global de la table isys_logbook                                                                                                                                                                                                                                                                                                                     |
| **object_id**       | Entier               | Non    | ID de l'objet                                                                                                                                                                                                                                                                                                                                                                         |
| **catg_logbook_id** | Entier               | Non    | ID de l'entrée de catégorie de journal de bord de la table sys_catg_logbook_list                                                                                                                                                                                                                                                                                                       |
| **since**           | Chaîne               | Non    | Date pour filtrer les changements du journal de bord depuis une certaine date, pour les valeurs possibles voir aussi [https://www.php.net/manual/de/function.strtotime.php](https://www.php.net/manual/de/function.strtotime.php){:target="_blank"} par exemple **1660203634** (2022-08-11 09:40:34)                                                                                                                 |
| **status**          | Chaîne               | Non    | Filtrer par statut des objets par exemple Normal ou Archivé:<br>-   **C__RECORD_STATUS__BIRTH** = Non terminé<br>-   **C__RECORD_STATUS__NORMAL** = Normal<br>-   **C__RECORD_STATUS__ARCHIVED** = Archivé<br>-   **C__RECORD_STATUS__DELETED** = Supprimé<br>-   **C__RECORD_STATUS__TEMPLATE** = Modèle<br>-   **C__RECORD_STATUS__MASS_CHANGES_TEMPLATE** = Modèle pour les changements de masse |

### Paramètres de réponse 

La clé JSON **résultat** contient un tableau d'objets JSON. Chaque objet contient un résultat de recherche.

| Clé             | Type de données JSON | Description |
| --------------- | ------------------- | ----------- |
| **Placeholder** | Placeholder          | Placeholder |
| **Placeholder** | Placeholder          | Placeholder |

### Exemple

=== "Corps de la requête"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.logbook.read",
      "params": {
        "id": 2,
        "since": "1660203634",
        "status": 2,
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
          "logbook_id": "20",
          "logbook_catg_id": "17",
          "comment": "",
          "description": "UPDATE isys_catg_global_list\n SET isys_catg_global_list__isys_purpose__id = NULL,\n isys_catg_global_list__isys_catg_global_category__id = NULL,\n isys_catg_global_list__status = 2\n WHERE isys_catg_global_list__id = 31;",
          "changes": {
            "isys_cmdb_dao_category_g_global::title": {
              "from": "",
              "to": "Building 1"
            }
          },
          "date": "2023-08-11 09:41:16",
          "username": "admin",
          "event": "C__LOGBOOK_EVENT__CATEGORY_CHANGED",
          "object_id": "33",
          "object_title": "Building 1",
          "object_title_static": "",
          "source": "Internal",
          "source_constant": "C__LOGBOOK_SOURCE__INTERNAL",
          "level_id": "1"
        }
      ]
    }
    ```

## cmdb.logbook.create

Écrire une entrée dans le journal i-doit.

### Paramètres de requête 

| Clé             | Type de données JSON | Requis   | Description                                                                                                                     |
| --------------- | --------------------- | -------- | ------------------------------------------------------------------------------------------------------------------------------- |
| **object_id**   | Entier               | Oui      | ID de l'objet                                                                                                                   |
| **object_ids**  | Chaîne ou Tableau    | Non      | Liste d'identifiants d'objet                                                                                                    |
| **message**     | Chaîne               | Oui      | Message pour l'entrée                                                                                                           |
| **description** | Chaîne               | Non      | Description de l'entrée                                                                                                         |
| **comment**     | Chaîne               | Non      | Commentaire sur ce qui a changé                                                                                                 |
| **source**      | Chaîne               | Non      | Constante ou ID de la source de l'entrée du journal à partir de la table `isys_logbook_source`.<br> La valeur par défaut est `C__LOGBOOK__ALERT_LEVEL__0` |
| **alert_level** | Entier ou Chaîne     | Non      | Constante ou ID du niveau d'alerte, à partir de la table `isys_logbook_level`.<br> La valeur par défaut est `C__LOGBOOK__ALERT_LEVEL__0` |

=== "Liste des sources"

    | Titre           | ID   | Constante                     |
    | --------------- | ---- | ----------------------------- |
    | Interne         | 1    | C__LOGBOOK_SOURCE__INTERNAL   |
    | Externe         | 2    | C__LOGBOOK_SOURCE__EXTERNAL   |
    | Entrées manuelles| 3    | C__LOGBOOK_SOURCE__USER       |
    | Tous!           | 4    | C__LOGBOOK_SOURCE__ALL        |
    | Ticket RT       | 1001 | C__LOGBOOK_SOURCE__RT         |
    | Import JDisc    | 1004 | C__LOGBOOK_SOURCE__JDISC      |
    | Import          | 1005 | C__LOGBOOK_SOURCE__IMPORT     |

=== "Liste des niveaux d'alerte"

    | Titre            | ID  | Constante                     |
    | ---------------- | --- | ----------------------------- |
    | 0 (information)  | 1   | C__LOGBOOK__ALERT_LEVEL__0    |
    | 1 (faible)       | 2   | C__LOGBOOK__ALERT_LEVEL__1    |
    | 2 (moyen)        | 3   | C__LOGBOOK__ALERT_LEVEL__2    |
    | 3 (élevé)        | 4   | C__LOGBOOK__ALERT_LEVEL__3    |

!!! example "En cours"

    ### Paramètres de réponse

    La clé JSON **result** contient un tableau d'objets JSON. Chaque objet contient un résultat de recherche.

    | Clé             | Type de données JSON | Description |
    | --------------- | ------------------- | ----------- |
    | **Placeholder** | Placeholder          | Placeholder |
    | **Placeholder** | Placeholder          | Placeholder |

### Exemple

=== "Corps de la requête"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.logbook.create",
      "params": {
        "object_id": 31,
        "message": "message",
        "description": "SQL Description / Log",
        "comment": "Revisional comment",
        "source": "C__LOGBOOK_SOURCE__INTERNAL",
        "alert_level": 1,
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
        "id": 135,
        "message": "Logbook entry/entries successfully created."
      }
    }
    ```
