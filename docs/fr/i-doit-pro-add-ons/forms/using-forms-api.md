# Utilisation de l'API de Formulaires

Introduction
------------

L'addon Forms se compose d'un addon compatible avec i-doit et d'une application backend. Le backend est responsable de la gestion des données et peut être contrôlé par une
API REST. Il est toujours possible d'utiliser i-doit comme proxy pour communiquer avec le backend des Formulaires. Cependant, cela nécessite une session utilisateur valide dans i-doit. Si tel n'est pas le cas, l'API backend des Formulaires peut également être adressée directement. Ce document suppose une communication directe.

> Il convient de noter que le backend ne contient aucune validation logique. Cette tâche est exclusivement effectuée par le frontend.
> L'utilisation directe de l'API entraîne donc une renonciation complète aux structures de contrôle.
> Cela doit donc toujours être pris en compte lorsqu'il est utilisé de cette manière.

Il convient également de noter que pour l'utilisation des attributs i-doit, l'API de l'addon Forms est également nécessaire pour accéder aux informations essentielles des attributs.

Authentification
--------------

L'authentification auprès du backend des formulaires est basée sur le nom d'utilisateur et la clé API. Ces informations concernent les paramètres de configuration
qui ont déjà été enregistrés dans la configuration i-doit:

```
    POST http://localhost:3000/login
    Content Type: application/json

    {
    "apikey": "APIKEY",
    "name": "USERNAME"
    }
```

Si l'authentification réussit, vous recevrez alors un jeton web JSON :

```
    {
    "access_token": "{JWT_TOKEN}"
    }
```

Désormais, le jeton doit être spécifié dans chaque requête si des points de terminaison nécessitant une authentification sont adressés. Cela se fait via l'en-tête Authorization. Voici un exemple :

```
    GET http://localhost:3000/api/form
    Authorization: bearer {JWT_TOKEN}
```

Par défaut, un jeton est valide pendant 60 minutes après sa création. Après ce délai, il perd sa validité et vous devez vous 'connecter' à nouveau.

Points de terminaison
---------

### GET /api/form

Ce point de terminaison renvoie une liste de tous les formulaires disponibles. De plus, il offre la possibilité de filtrer et de trier.

```
    GET http://localhost:3000/api/form
    Accept: application/json
    Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI2MWU2YThlNmY1ZTMxYjI5NzAwOTMxOWEiLCJuYW1lIjoic2VsY3VrIiwic3ViIjoiJDJhJDEwJFJ4YlRybVpUVXlXc1NSQ2VZTFR6enVBZXJZTUF1dUlsNU5qOWt5RFN4WXlFL0NsdG1iLmY2IiwiaWF0IjoxNjU3MjkyNTAxLCJleHAiOjE2NTcyOTYxMDF9.yEZAjFAGpOCbDsJuI_vqot5J75MOE0bKPPn8osQS0Ik
```

### GET /api/form/{ID}
> Récupération de formulaires spécifiques

```
    GET http://localhost:3000/api/form/6245bf4f36f695945b3df9be
    Autorisation: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI2MWU2YThlNmY1ZTMxYjI5NzAwOTMxOWEiLCJuYW1lIjoic2VsY3VrIiwic3ViIjoiJDJhJDEwJFJ4YlRybVpUVXlXc1NSQ2VZTFR6enVBZXJZTUF1dUlsNU5qOWt5RFN4WXlFL0NsdG1iLmY2IiwiaWF0IjoxNjU3MjkyNTAxLCJleHAiOjE2NTcyOTYxMDF9.yEZAjFAGpOCbDsJuI_vqot5J75MOE0bKPPn8osQS0Ik
```

Le retour ressemble à ceci :

```
    {
    "_id": "62864bbe2eb3cb20879f9405",
    "data": [],
    "shape": {
    "root": {
          "children": [
          "page"
          ],
          "config": {
          "type": "RootForm",
          "props": {
               "name": "Form with dependency",
               "page": "page",
               "user": {
               "name": "admin ",
               "email": "",
               "id": "9"
               },
               "classification": "C__OBJTYPE__SERVER"
          }
          }
    },
    "page": {
          "children": [
          "Attribute1652968394906021170002572071178",
          "Attribute1652968394927036554591972381756",
          "Attribute1653044325681014562436038700444",
          "Attribute165304432570104575271313868843",
          "Attribute1653044340696047510895312740087"
          ],
          "config": {
          "type": "FormPage"
          }
    },
    "Attribute1652968394906021170002572071178": {
          "children": [],
          "config": {
          "type": "Attribute",
          "props": {
               "attribute": "C__CATG__MODEL.manufacturer",
               "defaultLabel": "Manufacturer (Model)",
               "label": "",
               "required": false,
               "isSystemRequired": false,
               "categoryLabel": "Model",
               "type": "dialog_plus",
               "hidden": false,
               "defaultValue": "5"
          }
          }
    },
    "Attribute1652968394927036554591972381756": {
          "children": [],
          "config": {
          "type": "Attribute",
          "props": {
               "attribute": "C__CATG__MODEL.title",
               "defaultLabel": "Model (Model)",
               "label": "",
               "required": false,
               "isSystemRequired": false,
               "categoryLabel": "Model",
               "type": "dialog_plus",
               "parent": "C__CATG__MODEL.manufacturer",
               "hidden": false,
               "defaultValue": null
          }
          }
    },
    "Attribute1653044325681014562436038700444": {
          "children": [],
          "config": {
          "type": "Attribute",
          "props": {
               "attribute": "C__CATG__CONTRACT_ASSIGNMENT.connected_contract",
               "defaultLabel": "Assigned contract (Contract assignment)",
               "label": "",
               "required": false,
               "isSystemRequired": false,
               "categoryLabel": "Contract assignment",
               "type": "object_browser"
          }
          }
    },
    "Attribute165304432570104575271313868843": {
          "children": [],
          "config": {
          "type": "Attribute",
          "props": {
               "attribute": "C__CATG__CONTRACT_ASSIGNMENT.contract_start",
               "defaultLabel": "Contract begin (Contract assignment)",
               "label": "",
               "required": false,
               "isSystemRequired": false,
               "categoryLabel": "Contract assignment",
               "type": "date",
               "parent": "C__CATG__CONTRACT_ASSIGNMENT.connected_contract"
          }
          }
    },
    "Attribute1653044340696047510895312740087": {
          "children": [],
          "config": {
          "type": "Attribute",
          "props": {
               "attribute": "C__CATG__CONTRACT_ASSIGNMENT.contract_end",
               "defaultLabel": "Contract end (Contract assignment)",
               "label": "",
               "required": false,
               "isSystemRequired": false,
               "categoryLabel": "Contract assignment",
               "type": "date",
               "parent": "C__CATG__CONTRACT_ASSIGNMENT.connected_contract"
          }
          }
    }
    },
    "instance": "61e6a8e6f5e31b297009319a",
    "published": true,
    "updated": "2022-05-20T11:09:49.194Z",
    "created": "2022-05-19T13:53:02.143Z",
    "name": "Form with dependency",
    "__v": 0,
    "identifier": "form-with-dependency-62864bbe"
    }
```

### DELETE /api/form/{ID}
Un formulaire spécifique peut être supprimé en utilisant le verbe DELETE. Le retour contient les données du formulaire.

```
    DELETE http://localhost:3000/api/form/6245bf4f36f695945b3df9be
    Autorisation: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI2MWU2YThlNmY1ZTMxYjI5NzAwOTMxOWEiLCJuYW1lIjoic2VsY3VrIiwic3ViIjoiJDJhJDEwJFJ4YlRybVpUVXlXc1NSQ2VZTFR6enVBZXJZTUF1dUlsNU5qOWt5RFN4WXlFL0NsdG1iLmY2IiwiaWF0IjoxNjU3MjkyNTAxLCJleHAiOjE2NTcyOTYxMDF9.yEZAjFAGpOCbDsJuI_vqot5J75MOE0bKPPn8osQS0Ik
```

### PUT /api/form/{ID}
### POST /api/form 
Cet endpoint permet de modifier un formulaire. Seuls les attributs qui doivent être modifiés doivent être spécifiés dans le corps JSON.

### POST /api/form 

Cet endpoint doit être utilisé pour créer de nouveaux formulaires. La définition est faite en utilisant JSON et doit avoir la structure suivante:

```
    {
    // Name of Form
    "name": "My Form",
    // Structure
    "shape": {
    ...
    },
    // Release Status
    "published": false
    }
```

La structure du formulaire est spécifiée sous forme. En général, il a été conçu pour représenter une structure normalisée et hiérarchique. Pour cela, il contient
tous les éléments de nœud disponibles sur le premier niveau. Cela inclut non seulement les en-têtes, les textes, les lignes de division, les attributs de catégorie i-doit, mais aussi les pages.

> Il faut s'assurer que les IDs de nœud (root, PAGE\_1, PAGE\_2,…) sont uniques et non répétés.

```json
    {
    "shape": {
    // Entry Node
    "root": {
        ..config..
    },
    // Page 1
    "PAGE_1": {
        ..config..
    },
    // Page 2
    "PAGE_1": {
        ..config..
    },
    // Heading 1
    "HEADING_1": {
          ..config..
    },
    // TEXT 1
    "TEXT_1": {
        ..config..
    }
    }
    }
```

Les paramètres de configuration disponibles d'un nœud dépendent du type. En général, la structure de données suivante peut être identifiée:

```json
     {
     "NODE_1": {
     // What nodes are contained in "NODE_1" - Specification of NODE-ID
     "children": [
          "NODE_1.1",
          "NODE_1.2"
     ],
     // Configuration parameter for "NODE_1"
     "config": {
          // Type of node
          "type": "NODE_TYPE",
          // Direct configuration parameter
          "props": {
          "parameter_1": "",
          "parameter_2": "",
     [
     ...
     ]
     }
     }
     }
     }
```

Le nœud racine est particulièrement important ici. Il représente le point d'entrée sur la base duquel un formulaire est construit de manière hiérarchique.

```
                    ┌──────ROOT──────┐
                    │                │
                    │                │
                    ▼                ▼
          ┌─────────Page 1───┐      Page 2────────────┬────────┬───────────┐
          │           │      │            │           │        │           │
          │           │      │            │           │        │           │
          │           │      │            │           │        │           │
          │           │      │            ▼           │        │           │
          │           │      │         Attribute 2    │        │           │
          ▼           │      ▼                        │        │           │
     HEADING 1        │    Text 1                     ▼        │           │
                      │                           Attribute 3  │           │
                      │                                        │           │
                      │                                        ▼           │
                      ▼                                    Attribute 4     │
                 Attribute 1                                               │
                                                                           ▼
                                                                         Text 2
```

Voici une structure complète d'un formulaire composé de deux pages ("PAGE\_1" et "PAGE\_2"). Chaque page a un titre et une description textuelle.

```
     {
     "shape": {
     // Root-Node
     // Contains meta information and basic structure
     "root": {
          // Contains the IDs of the pages
          "children": [
          "PAGE 1",
          "PAGE 2"
          ],
          // Meta Information
          "config": {
          // Node-Type - Must be specified as RootForm
          "type": "RootForm",
          "props": {
               // Name of the form
               "name": "My Form",
               // Initial page to load
               "page": "PAGE_1",
               // User information based on the i-doit user
               "user": {
               "name": "admin",
               "email": "admin@i-doit.com",
               "id": "9"
               },
               // Underlying object type
               "classification": "C__OBJTYPE__SERVER"
          }
          }
     },
     // Definition of the 1st page
     "PAGE_1": {
          // Page contains "HEADING_1" and "TEXT_1"
          "children": [
          "HEADING_1",
          "TEXT_1"
          ],
          "config": {
          // Indicates that this node is a page
          "type": "FormPage",
          "props": {}
          }
     },
     // Similar structure to "PAGE_1"
     "PAGE_2": {
          // Includes "HEADING_2" and "TEXT_2"
          "children": [
          "HEADING_2",
          "TEXT_2"
          ],
          "config": {
          "type": "FormPage",
          "props": {}
          }
     },
     // ...
     "HEADING_1": {
          "children": [],
          "config": {
          "type": "Headline",
          "props": {
               "label": "Page 1 Headline",
               "size": "h1"
          }
          }
     },
     "TEXT_1": {
          "children": [],
          "config": {
          "type": "Text",
          "props": {
               "text": "Page 1 Text",
               "placeholder": "Enter your text"
          }
          }
     },
     "HEADING_2": {
          "children": [],
          "config": {
          "type": "Headline",
          "props": {
               "label": "Page 2 Headline",
               "size": "h1"
          }
          }
     },
     "TEXT_2": {
          "children": [],
          "config": {
          "type": "Text",
          "props": {
               "text": "Page 2 Text",
               "placeholder": "Enter your text"
          }
         }
        }
       }
     }
```

Types
-----

La section suivante couvre tous les types de nœuds disponibles et décrit leurs configurations.

### Ligne de division

```
     {
     "Dividingline165731154526401147116484517714": {
     "children": [],
     "config": {
          // Node-Type: Dividing line
          "type": "Dividing line",
          "props": {
          // Thickness of dividing line
          "height": 1
         }
        }
       }
     }
```

### Texte

```
    {
      "Text165729439981501359363935038671": {
        "children": [],
        "config": {
          // Node-Type: Text
          "type": "Text",
          "props": {
            // To be displayed text
            "text": "Page 2 Text",
            // Placeholder: Displayed if the content is emptied in the frontend
            "placeholder": "Enter your text",
            // Visibility: Should the element be hidden?
            "hidden": true
          }
        }
      }
    }
```

### Titre

```
     {
       "Headline165729439333006517788648825422": {
         "children": [],
         "config": {
           // Node-Type: Headline
           "type": "Headline",
           "props": {
             // Content of Headline
             "label": "Page 2 Headline",
             // Size: Possible values are h1, h2 oder h3
             "size": "h1"
           }
         }
       }
     }
```

### Attributs de catégorie i-doit

Comparé aux types précédents, ce type est plus complexe et contient donc un plus grand nombre de paramètres de configuration. Ces paramètres peuvent changer  
différents selon le type d'attribut de catégorie.

La structure de données de base est décrite ci-dessous en utilisant l'exemple de l'attribut Général > Titre :

```
     {
       "Attribute165731273460305039947937820184": {
         "children": [],
         "config": {
           // Node-Type: Category attribute
           "type": "Attribute",
           "props": {
             // Attribute-ID: Composed of the category constant and the technical attribute identifier
             "attribute": "C__CATG__GLOBAL.title",
             // Default label of the field in the form if "label" is not specified
             "defaultLabel": "Bezeichnung (Allgemein)",
             // Field title
             "label": "TITLE",
             // Is this a mandatory field?
             "required": false,
             // Is the attribute required on the i-doit side? Natively or via the validation configuration.
             "isSystemRequired": false,
             // Label of category
             "categoryLabel": "General",
             // Type of attribute
             "type": "text",
             // Is the field visible?
             "hidden": false,
             // Default value
             "defaultValue": "Default Value"
           }
         }
       }
     }
```

### Informations métadonnées sur les attributs

Certains paramètres de configuration sont dictés par l'API de l'addon Forms. Ils peuvent être composés de valeurs statiques et dynamiques :

*   **attribut**\* : valeur statique
*   **type**\* : valeur statique, reflète le type d'attribut
*   **isSystemRequired** : valeur variable, calculée en fonction de la validation ou nativement

> Ce paramètre remplace **required** si l'attribut est requis du côté du système.

*   **defaultValue** : valeur de la variable, est préremplie si le type d'objet fait référence à un modèle par défaut qui définit une valeur pour l'attribut

> Une spécification incorrecte de **isSystemRequired** entraînera inévitablement une erreur lors de la soumission du formulaire
> à moins que **required** ne soit _true_.
> **defaultValue** n'est pas absolument nécessaire si les valeurs du modèle par défaut ne doivent pas être prises en compte.

Toutes ces informations peuvent être obtenues via l'API de l'addon Forms, comme mentionné précédemment :

     GET https://idoit-instance/forms/api/attribute?category=C__CATG__GLOBAL,C__CATG__ACCOUNTING&class=C__OBJTYPE__SERVER

Ici, la catégorie contient une liste de constantes de catégorie séparées par des virgules.
d'autre part, la classe contient la constante du type d'objet et est nécessaire pour déterminer **defaultValue**. Le retour ressemble à ceci :

```
     [
       {
         "id": "C__CATG__GLOBAL.title",
         "title": "Title",
         "type": "text",
         "isSystemRequired": false,
         "defaultValue": "SERVER_TEMPLATE",
         "parent": null,
         "children": null
       },
       {
         "id": "C__CATG__GLOBAL.purpose",
         "title": "Purpose",
         "type": "dialog_plus",
         "isSystemRequired": false,
         "defaultValue": "7",
         "parent": null,
         "children": null
       },
       {
         "id": "C__CATG__GLOBAL.category",
         "title": "Category",
         "type": "dialog_plus",
         "isSystemRequired": false,
         "defaultValue": "2",
         "parent": null,
         "children": null
       },
       {
         "id": "C__CATG__GLOBAL.sysid",
         "title": "SYS-ID",
         "type": "text",
         "isSystemRequired": false,
         "defaultValue": "SYSID_1655124042",
         "parent": null,
         "children": null
       },
       {
         "id": "C__CATG__GLOBAL.cmdb_status",
         "title": "CMDB status",
         "type": "dialog",
         "isSystemRequired": false,
         "defaultValue": "6",
         "parent": null,
         "children": null
       },
       {
         "id": "C__CATG__GLOBAL.tag",
         "title": "Tags",
         "type": "multiselect",
         "isSystemRequired": false,
         "defaultValue": null,
         "parent": null,
         "children": null
       },
       {
         "id": "C__CATG__GLOBAL.description",
         "title": "Description",
         "type": "commentary",
         "isSystemRequired": false,
         "defaultValue": "<p>Default description of the default templates<\/p>",
         "parent": null,
         "children": null
       }
     ]
```

### Cas spécial : Dépendances de champ

i-doit possède des attributs qui dépendent d'un autre attribut dans la catégorie. Un exemple très simple est l'attribut Modèle > Modèle, qui dépend de Modèle > Fabricant.

À cette fin, l'addon Forms contient des mécanismes de contrôle frontend, par exemple pour reconnaître l'utilisation de Modèle > Modèle (Enfant) sans Modèle > Fabricant et dans ce cas ajoute automatiquement l'attribut parent.

Ces attributs peuvent être identifiés en fonction de leurs métadonnées. L'attribut enfant contient les informations **parent** et l'attribut parent contient les informations **enfants** :

GET https://idoit-instance/forms/api/attribute?category=C__CATG__MODEL&class=C__OBJTYPE__SERVER

```
     [
       {
         "id": "C__CATG__MODEL.manufacturer",
         "title": "Manufacturer",
         "type": "dialog_plus",
         "isSystemRequired": false,
         "defaultValue": "-1",
         "parent": null,
         "children": [
           {
             "id": "C__CATG__MODEL.title",
             "title": "Model",
             "type": "dialog_plus",
             "isSystemRequired": false,
             "parent": "C__CATG__MODEL.manufacturer"
           }
         ]
       },
       {
         "id": "C__CATG__MODEL.title",
         "title": "Model",
         "type": "dialog_plus",
         "isSystemRequired": false,
         "defaultValue": "-1",
         "parent": {
           "id": "C__CATG__MODEL.manufacturer",
           "title": "Manufacturer",
           "type": "dialog_plus",
           "isSystemRequired": false
         },
         "children": null
       },
       [...]
     ]
```

La définition des nœuds pour de telles structures de dépendance, quant à elle, se présente comme suit :

```
     {
       // Manufacturer: Does not contain any dependency information
       "Attribute165731798525604834639173302364": {
         "children": [],
         "config": {
           "type": "Attribute",
           "props": {
             "attribute": "C__CATG__MODEL.manufacturer",
             "defaultLabel": "Manufacturer (Model)",
             "label": "",
             "required": false,
             "isSystemRequired": false,
             "categoryLabel": "Model",
             "type": "dialog_plus"
           }
         }
       },
       // Model: Parameter "parent" addresses "manufacturer" to define the dependency
       "Attribute165731798528807005258890749957": {
         "children": [],
         "config": {
           "type": "Attribute",
           "props": {
             "attribute": "C__CATG__MODEL.title",
             "defaultLabel": "Model (Model)",
             "label": "",
             "required": false,
             "isSystemRequired": false,
             "categoryLabel": "Model",
             "type": "dialog_plus",
             "parent": "C__CATG__MODEL.manufacturer",
             "defaultValue": null,
             "hidden": false
           }
         }
       }
     }
```
