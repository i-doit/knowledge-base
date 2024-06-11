---
title: cmdb.object_types
description: cmdb.object_types
icon: material/api
#status: updated
lang: fr
---

# cmdb.object_types

!!! example "Travail en cours"

## cmdb.object_types

Lire les configurations de types d'objets.

### Paramètres de requête

| Clé              | Type de données JSON | Requis | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
| ---------------- | --------------------- | ------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **countobjects** | Booléen               | Non     | Afficher le compteur d'objets                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
| **filter**       | Tableau               | Non     | Filtrer la liste des objets; voir ci-dessous pour une liste complète des options                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| **limit**        | Mixte                 | Non     | Nombre maximum d'objets (en tant qu'entier), par exemple, récupérer les mille premiers objets: **1000**<br><br>Combiner cette limite avec un décalage (en tant que chaîne), par exemple, récupérer les mille objets suivants: **"1000,1000"**                                                                                                                                                                                                                                                                                                                                                   |
| **sort**         | Chaîne                | Non     | Utile uniquement en combinaison avec la clé **order_by**; les valeurs autorisées sont soit **"ASC"** (ascendant) ou **"DESC"** (descendant)                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| **order_by**     | Chaîne                | Non     | Trier l'ensemble de résultats par (voir le filtre pour plus de détails sur la signification de chaque valeur):<br><br>- **"isys_obj_type__id"**,<br>- **"isys_obj__isys_obj_type__id"**,<br>- **"type"**,<br>- **"isys_obj__title"**,<br>- **"title"**,<br>- **"isys_obj_type__title"**,<br>- **"type_title"**,<br>- **"isys_obj__sysid"**,<br>- **"sysid"**,<br>- **"isys_cats_person_list__first_name"**,<br>- **"first_name"**,<br>- **"isys_cats_person_list__last_name"**,<br>- **"last_name"**,<br>- **"isys_cats_person_list__mail_address"**,<br>- **"email"**,<br>- **"isys_obj__id"**, ou<br>- **"id"** |
| **raw**          | Booléen               | Non     | Afficher le format brut, voir exemple.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |

### Filtre {/examples/}

| Clé         | Type de données JSON | Requis | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| ----------- | ------------------- | ------ | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **id**      | Entier              | Non    | Identifiant du type d'objet ou constante du type d'objet                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| **ids**     | Tableau             | Non    | Liste des identifiants de type d'objet (en tant qu'entiers), par exemple : **[1, 2, 3]**                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
| **title**   | Chaîne de caractères | Non    | Constante de langue du type d'objet, par exemple : `LC__CMDB__OBJTYPE__SERVER` pour Serveur                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| **titles**  | Tableau             | Non    | Liste de constantes de langue du type d'objet, par exemple : `["LC__CMDB__OBJTYPE__SERVER","LC__CMDB__OBJTYPE__CLIENT"]`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| **enabled** | Booléen             | Non    | Afficher uniquement les types d'objets activés ou désactivés dans l'interface graphique utilisateur                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |


### Paramètres de réponse {/examples}

La clé JSON **result** contient un tableau d'objets JSON. Chaque objet contient un résultat de recherche.

| Clé             | Type de données JSON | Description |
| --------------- | -------------------- | ----------- |
| **Placeholder** | Placeholder           | Placeholder |
| **Placeholder** | Placeholder           | Placeholder |

### Exemple {/examples}

=== "Corps de la requête"
    ```json
    {
      "version": "2.0",
      "method": "cmdb.object_types",
      "params": {
        "filter": {
          "id": 5
        },
        "countobjects": true,
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
          "id": "5",
          "title": "Server",
          "container": "0",
          "const": "C__OBJTYPE__SERVER",
          "color": "A2BCFA",
          "image": "http://10.10.60.64/testinstance/images/objecttypes/server.png",
          "icon": "images/axialis/hardware-network/server-single.svg",
          "tree_group": "2",
          "status": "2",
          "type_group": "2",
          "type_group_title": "Infrastructure",
          "objectcount": "1"
        }
      ]
    }
    ```

=== "Corps de la réponse avec RAW"
    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": [
        {
          "isys_obj_type__id": "5",
          "isys_obj_type__isys_obj_type_group__id": "2",
          "isys_obj_type__isysgui_cats__id": null,
          "isys_obj_type__default_template": null,
          "isys_obj_type__title": "LC__CMDB__OBJTYPE__SERVER",
          "isys_obj_type__description": "",
          "isys_obj_type__selfdefined": "0",
          "isys_obj_type__container": "0",
          "isys_obj_type__idoit_obj_type_number": "",
          "isys_obj_type__obj_img_name": "server.png",
          "isys_obj_type__icon": "images/axialis/hardware-network/server-single.svg",
          "isys_obj_type__const": "C__OBJTYPE__SERVER",
          "isys_obj_type__sort": "40",
          "isys_obj_type__property": "0",
          "isys_obj_type__status": "2",
          "isys_obj_type__show_in_tree": "1",
          "isys_obj_type__show_in_rack": "1",
          "isys_obj_type__overview": "1",
          "isys_obj_type__color": "A2BCFA",
          "isys_obj_type__class_name": "isys_cmdb_dao_list_objects",
          "isys_obj_type__sysid_prefix": null,
          "isys_obj_type__relation_master": "0",
          "isys_obj_type__isys_jdisc_profile__id": null,
          "isys_obj_type__use_template_title": "0",
          "isys_obj_type_group__id": "2",
          "isys_obj_type_group__title": "LC__CMDB__OBJTYPE_GROUP__INFRASTRUCTURE",
          "isys_obj_type_group__description": null,
          "isys_obj_type_group__const": "C__OBJTYPE_GROUP__INFRASTRUCTURE",
          "isys_obj_type_group__sort": "2",
          "isys_obj_type_group__property": "1",
          "isys_obj_type_group__status": "2"
        }
      ]
    }
    ```
