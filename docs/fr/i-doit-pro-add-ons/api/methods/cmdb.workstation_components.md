---
title: Espace de noms cmdb.object
description: cmdb.object
icon: material/api
#status: updated
lang: fr
---

# Espace de noms composants_poste_de_travail

!!! example "Travail en cours"

## cmdb.composants_poste_de_travail.lire

Récupère les composants du poste de travail pour une personne.

### Paramètres de la requête

| Clé | Type de données JSON | Requis | Description |
| --- | --- | --- | --- |
| **id** | Entier | Non | ID d'un objet |
| **ids** | Tableau avec entiers | Non | ID des objets |
| **email** | Chaîne de caractères | Non | Adresse e-mail de la personne |
| **emails** | Chaîne de caractères | Non | Adresses e-mail des personnes |

!!! example "Travail en cours"

    ### Paramètres de la réponse

    La clé JSON **resultat** contient un tableau d'objets JSON. Chaque objet contient un résultat de recherche.

    | Clé | Type de données JSON | Description |
    | --- | --- | --- |
    | **Espace de noms** | Espace de noms | Espace de noms |
    | **Espace de noms** | Espace de noms | Espace de noms |

### Exemple

=== "Corps de la requête avec e-mail"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.workstation_components.read",
      "params": {
        "filter": {
          "email": "moverkamp@i-doit.com"
        },
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
        "62": {
          "data": {
            "id": "62",
            "title": "Michael Overkamp",
            "sysid": "SYSID_1692080956",
            "type": "53",
            "type_title": "Persons",
            "status": "2",
            "email": "moverkamp@i-doit.com",
            "first_name": "Michael",
            "last_name": "Overkamp"
          },
          "children": {
            "60": {
              "data": {
                "id": "60",
                "title": "Workstation_1",
                "sysid": "SYSID_1692080944",
                "type": "71",
                "type_title": "Workplace",
                "status": "2"
              },
              "children": {
                "58": {
                  "data": {
                    "id": "58",
                    "title": "MyLittleClient",
                    "sysid": "SYSID_1692080907",
                    "type": "10",
                    "type_title": "Client",
                    "status": "2"
                  },
                  "children": false
                }
              }
            }
          }
        }
      }
    }
    ```

=== "Corps de la requête avec des identifiants"

```json
((((8061a9065d02dd91))))
```

=== "Corps de la réponse"

```json
((((e141100b971c93fe))))
```
