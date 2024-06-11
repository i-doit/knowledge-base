---
title: externe
description: Point de terminaison cmdb.external
icon: material/api
status: nouveau
lang: fr
---

# cmdb.external

L'intégration de sources de données externes dans la base de données de gestion de la configuration (CMDB) peut être simplifiée par diverses mesures. Tout d'abord, il est important que les données soient disponibles dans un format standardisé, facile à traiter pour faciliter la lecture et le transfert vers la CMDB. De plus, des fonctions doivent être mises en œuvre pour permettre un transfert de données complet et ponctuel ainsi que des synchronisations régulières et automatisées. Il est crucial que chaque élément de données dans la CMDB soit lié à son origine afin de garantir l'identifiabilité des sources de données. En même temps, des règles claires et des directives doivent être définies pour délimiter la portée des données des sources individuelles. L'intégration simultanée de plusieurs sources de données devrait également être prise en charge, les conflits et les incohérences devant être reconnus et résolus. Enfin, des opérations de demande unique devraient être mises en œuvre pour permettre aux utilisateurs d'effectuer des importations de données, des synchronisations et des requêtes via une interface unique afin d'augmenter la convivialité et l'efficacité.

## cmdb.external

### Quels sont les identifiants externes?

- Identifiants uniques et stables basés sur des chaînes définies par l'utilisateur
- Composés d'un **"type"** et d'un **"id"**

Par exemple `mon_id_fournisseur / mon_id_objet`.

### Pourquoi avons-nous besoin d'identifiants externes?

- Identification claire des enregistrements de données d'objet et de catégorie
- Délimitation : Zones de données complétées
- L'appelant n'a pas besoin de connaître les identifiants d'enregistrement internes

### Comment fonctionnent les identifiants externes?

- Approche hiérarchique
- L'utilisateur définit un identifiant externe pour l'objet
    - **extType** : Identifiant pour la source de données/fournisseur
    - **extId** : Identifiant pour l'objet
- **L'utilisateur définit également un identifiant (sans extType) pour chaque entrée de catégorie**
- L'API crée une correspondance entre les identifiants et les identifiants internes

Des exemples seraient :

- Identifiant externe pour un **objet**
    - `source-de-données-1 / serveur-windows100`
- Identifiant externe pour chaque **entrée de catégorie**
    - `source-de-données-1 / serveur-windows100 / C__CATG__CPU / intel-1`

L'objet se trouve au premier niveau. Ici, nous définissons le **extType** d'une part et le **extId** de l'autre. Ensemble, ils forment l'identifiant complet et identifient de manière unique l'objet créé.
Au niveau suivant, cependant, nous avons notre **niveau de catégorie**. Chaque catégorie commence par la constante correspondante et reçoit un identifiant unique au niveau inférieur.

Dans cette structure, i-doit détermine ensuite automatiquement l'identifiant final, illustré ici à l'aide de l'exemple de **intel-1** et **intel-2**.
Voici un exemple de requête push pour créer un objet via le nouveau point de terminaison.

```json
{
    "jsonrpc": "2.0",
    "id": 1,
    "params": {
        ...
        "apikey": "{{API_KEY}}",
        <--- object level
        "extType": "data-source-1",
        "extId": "windows-server100",
        "title": "Server 100",
        "class": "C__OBJTYPE__SERVER",
        object level --->
        "data": {
            <--- category level
            "C__CATG__CPU": {
                "strategy": "overwrite",
                "data": {
                    "intel-1": {
                        "title": "Intel Core i9 3.5GHz #1",
                        "manufacturer": "Intel",
                        "type": "Core i9",
                        "frequency": "3.5",
                        "frequency_unit": "GHz"
                    },
                    "intel-2":{
                        "title": "Intel Core i9 3.5GHz #2",
                        "manufacturer": "Intel",
                        "type": "Core i9",
                        "frequency": "3.5",
                        "frequency_unit": "GHz"
                    }
                },...
            }
            category level --->
        }
    }
}
```

et enregistre le tout dans une table de correspondance interne.

### Délimitation

La délimitation devrait garantir que deux sources de données ne se gênent pas mutuellement, car nous supposons ce qui suit:

!!! note "Si différentes sources de données alimentent leurs données dans i-doit en même temps, nous supposons que chaque source de données est prépondérante en son propre droit et peut être considérée comme une seule source de vérité. En d'autres termes, cela signifie qu'un objet ne peut jamais apparaître dans plusieurs sources de données en même temps."

Sur la base de cette hypothèse, i-doit met en œuvre le filet de sécurité suivant:

-   Les objets sont clairement attribués à des sources de données
    -   Un objet ne peut être attribué qu'à une seule source de données
        -   Un objet de source de données ne peut pas être géré par plusieurs sources de données
    -   Une autre précision: les objets existants ne peuvent pas être attribués manuellement à une source de données

{ /*examples*/ }

Nous avons un traitement similaire au niveau de la **catégorie** :

-   Attribution claire des entrées de catégorie aux sources de données
-   Une caractéristique spéciale de MV : **les entrées MV peuvent être éditées manuellement même si elles proviennent d'une source de données**
-   Dans l'autre sens, cependant, c'est-à-dire que les entrées de catégorie à valeurs multiples créées manuellement restent protégées contre l'accès par la source de données
-   Mais il y a aussi une exception ici, à savoir pour les catégories à valeur unique : **les entrées de catégorie à valeur unique créées manuellement peuvent être manipulées par les sources de données**
-   Il existe également un cas non autorisé et non mappable : La source de données **"data-source-2"** ne peut pas avoir une entrée de CPU dans un objet géré par **"data-source-1"**

## cmdb.external.push.v2

Création et mise à jour d'objets et d'entrées de catégorie par une seule requête.
De plus, diverses **"stratégies "** nous permettent de mapper différents cas d'utilisation, bien qu'il soit à noter qu'elles se trouvent uniquement au niveau de la catégorie.

L'API Push dispose également de procédures pour convertir des valeurs lisibles par l'homme en leur représentation technique, par exemple dialog+, références d'objets ou références de catégories.
Et très important :

!!! note "En utilisant l'API Push, vous n'avez pas à vous passer des structures CMDB générales, telles que le système de droits, la règle de validation ou le journal. Tout fonctionne comme avant!"

| Stratégie | Entrée existe en valeur unique | Entrée existe en valeur multiple | Entrée n'existe pas en valeur unique | Entrée n'existe pas en valeur multiple |
| --- | --- | --- | --- | --- |
| **créer** | :material-close: sera ignoré | :material-close: sera ignoré | :material-plus: est créée | :material-plus: est créée |
| **mettre à jour** | :material-pencil: sera mis à jour | :material-pencil: sera mis à jour | :material-plus: est créée | :material-plus: est créée |
| **écraser** | :material-pencil: sera mis à jour | :material-pencil: sera mis à jour | :material-plus: est créée | :material-plus: est créée |

!!! warning "**écraser** supprime toutes les entrées en valeur multiple de i-doit qui ne sont pas incluses dans la demande. Les existantes sont mises à jour ou créées"

### Paramètres de la demande

| Clé | Type de données JSON | Requis | Description |
| --- | --- | --- | --- |
| **extType** | Chaîne | Oui | Source de données, par exemple : **source-de-données-1** |
| **extId** | Chaîne | Oui | Objet, par exemple : **serveur-windows100** |
| **classe** | Chaîne | Oui | Type d'objet, par exemple : **C__OBJTYPE__SERVEUR** |
| **titre** | Chaîne | Oui | Désignation de l'objet, par exemple : **Serveur 100** |

### Exemple

=== "Requête"

    ```json
    {
        "jsonrpc": "2.0",
        "id": 1,
        "method": "cmdb.external.push.v2",
        "params": {
            "apikey": "a9d55pg9yts88488",
            "extType": "data-source-1",
            "extId": "windows-server100",
            "class": "C__OBJTYPE__SERVER",
            "title": "Server 100",
            "data": {
                "C__CATG__CPU": {
                    "strategy": "create",
                    "data": {
                        "intel-1": {
                            "title": "5th Generation Intel® Xeon® Scalable Processors #1",
                            "manufacturer": "Intel",
                            "cores": 52,
                            "type": "8571N",
                            "frequency": "2.4",
                            "frequency_unit": "GHz"
                        },
                        "intel-2":{
                            "title": "5th Generation Intel® Xeon® Scalable Processors #2",
                            "manufacturer": "Intel",
                            "cores": 52,
                            "type": "8571N",
                            "frequency": "2.4",
                            "frequency_unit": "GHz"
                        }
                    }
                },
                    "C__CATG__GLOBAL": {
                        "strategy": "update",
                        "data": {
                            "windows-server1001_TAGS": {
                                "tag": [
                                    "server",
                                    "monitoring",
                                    "api2.0"
                                ],
                                "purpose": "Docu",
                                "type": "C__OBJTYPE__SERVER"
                            }
                        }
                    },
                    "C__CATG__LOCATION": {
                        "strategy": "create",
                        "data": {
                            "CITY_OBJECT_DUESSELDORF": {
                                "parent": {
                                    "title": "Düsseldorf",
                                    "class": "C__OBJTYPE__CITY",
                                    "extType": "data-source-1",
                                    "extId": "CITY_OBJECT_DUESSELDORF"
                            }
                        }
                    }
                }
            }
        }
    }
    ```

=== "Réponse"

    ```json
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "messages": [
                {
                    "message": "External id data-source-1/windows-server100 not found. Object with id 774 created.",
                    "level": 200,
                    "datetime": "2024-04-10T09:46:11.173494+02:00"
                },
                {
                    "message": "Preparing data for category 'CPU' using strategy create.",
                    "level": 200,
                    "datetime": "2024-04-10T09:46:11.173921+02:00"
                },
                {
                    "message": "Handling multi value category.",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.173966+02:00"
                },
                {
                    "message": "New category entry 106 created for custom id intel-1.",
                    "level": 200,
                    "datetime": "2024-04-10T09:46:11.176969+02:00"
                },
                {
                    "message":"Original: {\"title\":\"5th Generation Intel\® Xeon\® Scalable Processors #1\",\"manufacturer\":\"Intel\",\"cores\":52,\"type\":\"8571N\",\"frequency\":\"2.4\",\"frequency_unit\":\"GHz\"}",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.177588+02:00"
                },
                {
                    "message":"Normalized: {\"title\":\"5th Generation Intel\® Xeon\® Scalable Processors #1\",\"manufacturer\":2,\"type\":33,\"frequency\":\"2.4\",\"frequency_unit\":3,\"cores\":52}",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.186125+02:00"
                },
                {
                    "message":"Final: {\"data_id\":106,\"properties\":{\"title\":{\"value\":\"5th Generation Intel\® Xeon\® Scalable Processors #1\"},\"manufacturer\":{\"value\":2},\"type\":{\"value\":33},\"frequency\":{\"value\":\"2.4\"},\"frequency_unit\":{\"value\":3},\"cores\":{\"value\":52},\"description\":{\"value\":null}}}",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.186740+02:00"
                },
                {
                    "message": "New category entry 107 created for custom id intel-2.",
                    "level": 200,
                    "datetime": "2024-04-10T09:46:11.187859+02:00"
                },
                {
                    "message":"Original: {\"title\":\"5th Generation Intel\® Xeon\® Scalable Processors #2\",\"manufacturer\":\"Intel\",\"cores\":52,\"type\":\"8571N\",\"frequency\":\"2.4\",\"frequency_unit\":\"GHz\"}",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.188443+02:00"
                },
                {
                    "message":"Normalized: {\"title\":\"5th Generation Intel\® Xeon\® Scalable Processors #2\",\"manufacturer\":2,\"type\":33,\"frequency\":\"2.4\",\"frequency_unit\":3,\"cores\":52}",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.189215+02:00"
                },
                {
                    "message":"Final: {\"data_id\":107,\"properties\":{\"title\":{\"value\":\"5th Generation Intel\® Xeon\® Scalable Processors #2\"},\"manufacturer\":{\"value\":2},\"type\":{\"value\":33},\"frequency\":{\"value\":\"2.4\"},\"frequency_unit\":{\"value\":3},\"cores\":{\"value\":52},\"description\":{\"value\":null}}}",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.189833+02:00"
                },
                {
                    "message": "Preparing data for category 'General' using strategy update.",
                    "level": 200,
                    "datetime": "2024-04-10T09:46:11.190074+02:00"
                },
                {
                    "message": "Handling single value category.",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.190100+02:00"
                },
                {
                    "message": "New external id windows-server1001_TAGS reference created for category entry id 772.",
                    "level": 200,
                    "datetime": "2024-04-10T09:46:11.192059+02:00"
                },
                {
                    "message": "Original: {\"tag\":[\"server\",\"monitoring\",\"api2.0\"],\"purpose\":\"Docu\",\"type\":\"C__OBJTYPE__SERVER\"}",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.192087+02:00"
                },
                {
                    "message": "Normalized: {\"purpose\":6,\"type\":\"C__OBJTYPE__SERVER\",\"tag\":[1,4,8]}",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.197526+02:00"
                },
                {
                    "message": "Final: {\"data_id\":772,\"properties\":{\"purpose\":{\"value\":6},\"type\":{\"value\":\"C__OBJTYPE__SERVER\"},\"tag\":{\"value\":[1,4,8]},\"title\":{\"value\":\"Server 100\"},\"status\":{\"value\":\"2\"},\"created\":{\"value\":\"2024-04-10 09:46:11\"},\"created_by\":{\"value\":\"admin\"},\"changed_by\":{\"value\":\"admin\"},\"category\":{\"value\":null},\"sysid\":{\"value\":\"SYSID_1712735945\"},\"cmdb_status\":{\"value\":\"6\"},\"description\":{\"value\":null}}}",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.200155+02:00"
                },
                {
                    "message": "Preparing data for category 'Location' using strategy create.",
                    "level": 200,
                    "datetime": "2024-04-10T09:46:11.200479+02:00"
                },
                {
                    "message": "Handling single value category.",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.200505+02:00"
                },
                {
                    "message": "New category entry 168 created for custom id CITY_OBJECT_DUESSELDORF.",
                    "level": 200,
                    "datetime": "2024-04-10T09:46:11.209471+02:00"
                },
                {
                    "message":"Original: {\"parent\":{\"title\":\"D\üsseldorf\",\"class\":\"C__OBJTYPE__CITY\",\"extType\":\"data-source-1\",\"extId\":\"CITY_OBJECT_DUESSELDORF\"}}",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.210140+02:00"
                },
                {
                    "message": "Normalized: {\"parent\":775}",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.217953+02:00"
                },
                {
                    "message": "Final: {\"data_id\":168,\"properties\":{\"parent\":{\"value\":775},\"option\":{\"value\":null},\"insertion\":{\"value\":null},\"pos\":{\"value\":null},\"snmp_syslocation\":{\"value\":null},\"description\":{\"value\":null}}}",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.221995+02:00"
                },
                {
                    "message": "Sync C__CATG__CPU in object 774 with import status 2.",
                    "level": 200,
                    "datetime": "2024-04-10T09:46:11.222853+02:00"
                },
                {
                    "message": "Sync C__CATG__CPU in object 774 with import status 2.",
                    "level": 200,
                    "datetime": "2024-04-10T09:46:11.223711+02:00"
                },
                {
                    "message": "Sync C__CATG__GLOBAL in object 774 with import status 2.",
                    "level": 200,
                    "datetime": "2024-04-10T09:46:11.224330+02:00"
                },
                {
                    "message": "Sync C__CATG__LOCATION in object 774 with import status 2.",
                    "level": 200,
                    "datetime": "2024-04-10T09:46:11.230300+02:00"
                }
            ],
            "success": true
        }
    }
    ```

## cmdb.external.pull.v2

Lecture des données CMDB basée sur l'**"Identifiant Externe"**.
Lors de la récupération, l'identifiant externe détermine les données interrogées, par exemple :

| extType | extId | Action |
| --- | --- | --- |
| data-source-1 | null | Lit tous les objets et toutes les données de catégorie |
| data-source-1 | windows-server100 | Lit windows100 et toutes les données de catégorie |
| data-source-1 / windows-server100 / C__CATG__CPU | null | Lit windows100 et toutes les entrées CPU |
| data-source-1 / windows-server100 / C__CATG__CPU | intel-1 | Lit windows100 et seulement l'entrée CPU intel-1 |

### Paramètres de la requête

| Clé | Type de données JSON | Requis | Description |
| --- | --- | --- | --- |
| **extType** | Chaîne | Oui | Source de données, par exemple : **data-source-1** |
| **extId** | Chaîne | Oui | Objet, par exemple : **windows-server100** |

### Exemple

=== "Requête"

    ```json
    {
        "jsonrpc": "2.0",
        "id": 1,
        "method": "cmdb.external.pull.v2",
        "params": {
            "apikey": "a9d55pg9yts88488",
            "extType": "data-source-1",
            "extId": "windows-server100"
        }
    }
    ```

=== "Réponse"

```json
((((5cd36d184cf9fbe3))))
```
