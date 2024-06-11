# cmdb.condition

!!! example "Travail en cours. **État Alpha**" {/examples}

## cmdb.condition.read

Donnez-moi tous les objets qui ont l'attribut Y = Z dans la catégorie X. Comme un rapport.

### Paramètres de la requête

| Clé                                                       | Type de données JSON | Requis            | Description                                               |
| --------------------------------------------------------- | -------------------- | ----------------- | --------------------------------------------------------- |
| **conditions**                                            | Tableau              | Oui               | Composé de la constante de catégorie + le nom de l'attribut |
| **property**                                              | Chaîne               | Oui               | `=`, `!=`, `like`, `not like`, `>`, `>=`, `<`, `<=`, `<>` |
| **comparison**                                            | Chaîne               | Chaîne ou Entier   | Exemple, `C__OBJTYPE__SERVER`, `123` ou `*server*`        |
| **operator** :material-flask:{ title="Travail en cours" } | Tableau              | Oui               | `ET` ou `OU`                                             |

### Paramètres de réponse {/examples}

La clé JSON **résultat** contient un tableau d'objets JSON. Chaque objet contient un résultat de recherche.

| Clé       | Type de données JSON | Description                      |
| --------- | --------------------- | -------------------------------- |
| **clé**   | Chaîne de caractères | Attribut lié à la requête        |
| **valeur** | Chaîne de caractères | Valeur liée à la requête         |

### Exemple {/examples}

=== "Corps de la requête"

    ```json
    {
    "version": "2.0",
    "method": "cmdb.condition.read",
    "params": {
        "conditions": [
            {
                "property": "C__CATG__GLOBAL-type",
                "comparison": "=",
                "value": "C__OBJTYPE__CLIENT"
            },
            {
                "property": "C__CATG__ACCOUNTING-inventory_no",
                "comparison": "like",
                "value": "*"
            },
            {
                "property": "C__CATG__GLOBAL-title",
                "comparison": "like",
                "value": "*serv*"
            }
        ],
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
      "result": [
        {
          "id": "26",
          "title": "Client01",
          "sysid": "SYSID_1651224253",
          "type": "10",
          "created": "2022-04-29 11:23:47",
          "updated": "2022-04-29 11:24:53",
          "type_title": "Client",
          "type_icon": "images/icons/silk/computer.png",
          "type_group_title": null,
          "status": "2",
          "cmdb_status": "6",
          "cmdb_status_title": "in operation"
        },
        {
          "id": "27",
          "title": "Client",
          "sysid": "SYSID_1651224275",
          "type": "10",
          "created": "2022-04-29 11:24:08",
          "updated": "2022-04-29 11:24:13",
          "type_title": "Client",
          "type_icon": "images/icons/silk/computer.png",
          "type_group_title": null,
          "status": "2",
          "cmdb_status": "6",
          "cmdb_status_title": "in operation"
        },
        {
          "id": "28",
          "title": "MyClient",
          "sysid": "SYSID_1651224285",
          "type": "10",
          "created": "2022-04-29 11:24:17",
          "updated": "2022-04-29 11:24:25",
          "type_title": "Client",
          "type_icon": "images/icons/silk/computer.png",
          "type_group_title": null,
          "status": "2",
          "cmdb_status": "6",
          "cmdb_status_title": "in operation"
        }
      ]
    }
    ```
