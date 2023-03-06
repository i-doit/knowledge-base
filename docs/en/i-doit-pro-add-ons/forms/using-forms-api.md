# Using Forms API

Introduction
------------

The Forms addon consists of an i-doit compatible addon and a backend application. The backend is responsible for data management and can be controlled by a
REST API. It is still possible to use i-doit as a proxy to communicate with the Forms backend. However, this requires a valid user session in i-doit. If this is not the case, the Forms backend API can also be addressed directly. This document assumes direct communication.

> It should be noted that the backend does not contain any logical validations. This task is exclusively performed by the frontend.
> Direct use of the API therefore entails a complete waiver of control structures.
> This should therefore always be taken into account when used in this way.

It must also be considered that for the use of i-doit attributes, the Forms addon API is also required to access essential attribute information.

Authentication
--------------

The authentication against the forms backend is based on username and API key. This information is about those configuration parameters
which have already been stored in the i-doit configuration:

```
    POST http://localhost:3000/login
    Content Type: application/json

    {
    "apikey": "APIKEY",
    "name": "USERNAME"
    }
```

If the authentication is successful, you will then receive a JSON web token:

```
    {
    "access_token": "{JWT_TOKEN}"
    }
```

From now on, the token must be specified in every request if endpoints that require authentication are addressed. This is done via the Authorization
\-Header. Below is an example:

```
    GET http://localhost:3000/api/form
    Authorization: bearer {JWT_TOKEN}
```

By default, a token is valid for 60 minutes after it is created. After this time it loses its validity and you have to ‘login’ again.

Endpoints
---------

### GET /api/form

This endpoint returns a list of all available forms. In addition, it has the possibility of filtering and sorting.

```
    GET http://localhost:3000/api/form
    Accept: application/json
    Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI2MWU2YThlNmY1ZTMxYjI5NzAwOTMxOWEiLCJuYW1lIjoic2VsY3VrIiwic3ViIjoiJDJhJDEwJFJ4YlRybVpUVXlXc1NSQ2VZTFR6enVBZXJZTUF1dUlsNU5qOWt5RFN4WXlFL0NsdG1iLmY2IiwiaWF0IjoxNjU3MjkyNTAxLCJleHAiOjE2NTcyOTYxMDF9.yEZAjFAGpOCbDsJuI_vqot5J75MOE0bKPPn8osQS0Ik
```

### GET /api/form/{ID}

> Retrieval of specific forms

```
    GET http://localhost:3000/api/form/6245bf4f36f695945b3df9be
    Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI2MWU2YThlNmY1ZTMxYjI5NzAwOTMxOWEiLCJuYW1lIjoic2VsY3VrIiwic3ViIjoiJDJhJDEwJFJ4YlRybVpUVXlXc1NSQ2VZTFR6enVBZXJZTUF1dUlsNU5qOWt5RFN4WXlFL0NsdG1iLmY2IiwiaWF0IjoxNjU3MjkyNTAxLCJleHAiOjE2NTcyOTYxMDF9.yEZAjFAGpOCbDsJuI_vqot5J75MOE0bKPPn8osQS0Ik
```

The return looks like this:

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

A specific form can be deleted using the DELETE verb. The return contains the form data.

```
    DELETE http://localhost:3000/api/form/6245bf4f36f695945b3df9be
    Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI2MWU2YThlNmY1ZTMxYjI5NzAwOTMxOWEiLCJuYW1lIjoic2VsY3VrIiwic3ViIjoiJDJhJDEwJFJ4YlRybVpUVXlXc1NSQ2VZTFR6enVBZXJZTUF1dUlsNU5qOWt5RFN4WXlFL0NsdG1iLmY2IiwiaWF0IjoxNjU3MjkyNTAxLCJleHAiOjE2NTcyOTYxMDF9.yEZAjFAGpOCbDsJuI_vqot5J75MOE0bKPPn8osQS0Ik
```

### PUT /api/form/{ID}

This endpoint allows editing of a form. Only the attributes that need to be changed have to be specified in the JSON body.

### POST /api/form

This endpoint must be used to create new forms. The definition is made by using JSON and must have the following structure:

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

The structure of the form is specified under shape. In general, it was designed to represent a normalized and hierarchical structure. For this it contains  
all available node elements on the first level. This includes not only headings, texts, dividing lines, i-doit category attributes, but also pages.

> It must be ensured that the node IDs (root, PAGE\_1, PAGE\_2,…) are unique and not repeated.

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

The available configuration parameters of a node are type-dependent. In general, the following data structure can be identified:

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

The root node is particularly important here. This represents the entry point on the basis of which a form is built up hierarchically.

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

The following is a complete structure of a form consisting of two pages (“PAGE\_1” and “PAGE\_2”). Each page has a heading and a  
text description.

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

The following section covers all available node types and describes their configurations.

### Dividing Line

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

### Text

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

### Heading

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

### i-doit category attributes

Compared to the previous types, this type is more complex and therefore contains a greater number of configuration parameters. To which these parameters can change  
differentiate further by type of category attribute.

The basic data structure is described below using the example of the attribute General > Title:

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

### Meta information about attributes

Some configuration parameters are dictated by the Forms addon API. They can consist of both static and dynamic values:

*   **attribute**\*: static value
*   **type**\* : static value, reflects the attribute type
*   **isSystemRequired** : variable value, calculated based on validation or natively

> This parameter overwrites **required** if the attribute is required on the system side.

*   **defaultValue** : variable value, is pre-filled if the object type addresses a default template that defines a value for the attribute

> An incorrect specification of **isSystemRequired** will inevitably result in an error when submitting the form
> unless **required** is _true_.
> **defaultValue** is not absolutely necessary if the values ​​from the default template are not to be taken into account.

All of this information can be obtained via the Forms addon API, as mentioned earlier:

     GET https://idoit-instance/forms/api/attribute?category=C__CATG__GLOBAL,C__CATG__ACCOUNTING&class=C__OBJTYPE__SERVER

Here, category contains a comma-separated list of category constants.
class on the other hand contains the object type constant and is needed to determine **defaultValue**. The return looks like this:

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

### Special case: Field Dependencies

i-doit has attributes that depend on another attribute within the category. A very simple example is the
attribute Model > Model, which depends on Model > Manufacturer.

For this purpose, the Forms addon contains frontend control mechanisms, for example to recognizes the use of Model > Model (Child) without
Model > Manufacturer and in this case adds the parent attribute automatically.

These attributes can be identified based on their metadata. The child attribute contains **parent** information and the parent attribute **children** information:

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

The definition of the nodes for such dependency structures, on the other hand, looks as follows:

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
