---
title: Espace de noms cmdb.contact
description: cmdb.contact
icon: material/api
#status: updated
lang: fr
---

# Espace de noms cmdb.contact {/examples}

!!! example "Travail en cours"

## cmdb.contact.read {/examples}

Récupère tous les objets attribués par contact.

### Paramètres de la requête

| Clé        | Type de données JSON | Requis                                       | Description                       |
| ---------- | -------------------- | -------------------------------------------- | --------------------------------- |
| **méthode** | Chaîne de caractères | uniquement "assigned_objects_by_contact" disponible |                                   |
| **filtre** | Objet                | Oui                                          | Par `email` Chaîne de caractères ou `id` Entier |

!!! example "Travail en cours"

    ### Paramètres de la réponse

    La clé JSON **résultat** contient un tableau d'objets JSON. Chaque objet contient un résultat de recherche.

    | Clé       | Type de données JSON | Description                      |
    | --------- | -------------------- | -------------------------------- |
    | **clé**   | Chaîne de caractères | Attribut lié à la requête         |
    | **valeur** | Chaîne de caractères | Valeur liée à la requête         |

### Exemple

=== "Corps de la requête"

```json
{
      "version": "2.0",
      "method": "cmdb.contact.read",
      "params": {
        "method": "assigned_objects_by_contact",
        "filter": {
          "id": 9
        },
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
        "1122742661": {
          "id": "55",
          "title": "CareBear Power Server",
          "sysid": "SYSID_2807233812",
          "type": "5",
          "type_title": "Server",
          "primary": "No",
          "role": "Administrator"
            }
        }
    }
```
