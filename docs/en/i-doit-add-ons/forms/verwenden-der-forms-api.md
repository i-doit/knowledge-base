---
title: Using the Forms API
description: "The Forms add-on consists of an i-doit-compatible add-on and a backend application."
icon:
status:
lang: en
---

# Using the Forms API

## Introduction

The Forms add-on consists of an i-doit-compatible add-on and a backend application. The backend is responsible for data storage and is operated via a REST API.

You can use i-doit as a proxy to communicate with the Forms backend. This requires a valid user session in i-doit. Alternatively, you can call the Forms backend API directly. This document assumes direct communication.

!!! warning "No server-side validation"
    The backend does not contain any logical validations -- this task is handled exclusively by the frontend. When using the API directly, you forgo all control structures entirely. Keep this in mind when using it.

For using i-doit attributes, you additionally require the Forms add-on API to access essential attribute information.

## Authentication

Authentication against the Forms backend is done with a username and API key -- the same configuration parameters that you set in the i-doit configuration:

```
POST http://localhost:3000/login
Content-Type: application/json

{
"apikey": "APIKEY",
"name": "USERNAME"
}
```

Upon successful authentication you receive a JSON Web Token:

```
{
"access_token": "{JWT_TOKEN}"
}
```

From now on you include the token in every request in the Authorization header, provided the endpoint requires authentication. Example:

```
GET http://localhost:3000/api/form
Authorization: bearer {JWT_TOKEN}
```

A token is valid for 60 minutes by default. After expiry you must log in again.

## Endpoints

### GET /api/form

This endpoint returns a list of all available forms. It also supports filtering and sorting.

```
GET http://localhost:3000/api/form
Accept: application/json
Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI2MWU2YThlNmY1ZTMxYjI5NzAwOTMxOWEiLCJuYW1lIjoic2VsY3VrIiwic3ViIjoiJDJhJDEwJFJ4YlRybVpUVXlXc1NSQ2VZTFR6enVBZXJZTUF1dUlsNU5qOWt5RFN4WXlFL0NsdG1iLmY2IiwiaWF0IjoxNjU3MjkyNTAxLCJleHAiOjE2NTcyOTYxMDF9.yEZAjFAGpOCbDsJuI_vqot5J75MOE0bKPPn8osQS0Ik
```

### GET /api/form/{ID}

Retrieval of specific forms

```
GET http://localhost:3000/api/form/6245bf4f36f695945b3df9be
Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI2MWU2YThlNmY1ZTMxYjI5NzAwOTMxOWEiLCJuYW1lIjoic2VsY3VrIiwic3ViIjoiJDJhJDEwJFJ4YlRybVpUVXlXc1NSQ2VZTFR6enVBZXJZTUF1dUlsNU5qOWt5RFN4WXlFL0NsdG1iLmY2IiwiaWF0IjoxNjU3MjkyNTAxLCJleHAiOjE2NTcyOTYxMDF9.yEZAjFAGpOCbDsJuI_vqot5J75MOE0bKPPn8osQS0Ik
```

The return looks exemplarily as follows:

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

Via the DELETE verb you delete a specific form. The return contains the form data.

```
DELETE http://localhost:3000/api/form/6245bf4f36f695945b3df9be
Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI2MWU2YThlNmY1ZTMxYjI5NzAwOTMxOWEiLCJuYW1lIjoic2VsY3VrIiwic3ViIjoiJDJhJDEwJFJ4YlRybVpUVXlXc1NSQ2VZTFR6enVBZXJZTUF1dUlsNU5qOWt5RFN4WXlFL0NsdG1iLmY2IiwiaWF0IjoxNjU3MjkyNTAxLCJleHAiOjE2NTcyOTYxMDF9.yEZAjFAGpOCbDsJuI_vqot5J75MOE0bKPPn8osQS0Ik
```

### PUT /api/form/{ID}

Via this endpoint you edit a form. In the JSON body you only specify the attributes to be changed.

### POST /api/form

Via this endpoint you create new forms. The definition is done via JSON with the following structure:

```
{
// Name of the form
"name": "My Form",
// Structure
"shape": {
...
},
// Publication status
"published": false
}
```

The structure of the form is specified under `shape`. It represents a normalized and hierarchical structure. On the first level it contains all available node elements: headings, texts, dividing lines, i-doit category attributes, and pages.

> You must ensure that the node IDs (root, PAGE\_1, PAGE\_2,...) are unique and do not repeat.

```
{
"shape": {
// Entry node
"root": {
    ..config..
},
// Page 1
"PAGE_1": {
    ..config..
},
// Page 2
"PAGE_2": {
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

The available configuration parameters of a node are type-dependent. The general data structure looks like this:

```
{
"NODE_1": {
// Which nodes are contained in "NODE_1" - specification of the node ID
"children": [
    "NODE_1.1",
    "NODE_1.2"
],
// Configuration parameters for "NODE_1"
"config": {
    // Type of the node
    "type": "NODE_TYPE",
    // Direct configuration parameters
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

Particularly important is the `root` node. It represents the entry point on the basis of which you build the form hierarchically.

```
                    ┌──────ROOT──────┐
                    │                │
                    │                │
                    ▼                ▼
          ┌─────────Page 1────┐     Page 2─────────────┬────────┬───────────┐
          │           │       │            │            │        │           │
          │           │       │            │            │        │           │
          │           │       │            │            │        │           │
          │           │       │            ▼            │        │           │
          │           │       │         Attribute 2     │        │           │
          ▼           │       ▼                         │        │           │
     Heading 1        │    Text 1                       ▼        │           │
                      │                             Attribute 3  │           │
                      │                                          │           │
                      │                                          ▼           │
                      ▼                                      Attribute 4     │
                 Attribute 1                                                 │
                                                                             ▼
                                                                        Text 2
```

In the following you can see the complete structure of a form consisting of two pages ("PAGE\_1" and "PAGE\_2"). Each page contains a heading and a text description.

```
{
"shape": {
// Root node
// Contains meta information and the basic structure
"root": {
    // Contains the IDs of the pages
    "children": [
    "PAGE_1",
    "PAGE_2"
    ],
    // Meta information
    "config": {
    // Node type - Must be specified as RootForm
    "type": "RootForm",
    "props": {
        // Name of the form
        "name": "My Form",
        // Initially loaded page
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
// Definition of page 1
"PAGE_1": {
    // Page contains "HEADING_1" and "TEXT_1"
    "children": [
    "HEADING_1",
    "TEXT_1"
    ],
    "config": {
    // Specifies that this node is a page
    "type": "FormPage",
    "props": {}
    }
},
// Analogous structure to "PAGE_1"
"PAGE_2": {
    // Contains "HEADING_2" and "TEXT_2"
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

## Types

In the following section you will find all available node types and their configurations.

### Dividing line

```
{
"Dividingline165731154526401147116484517714": {
"children": [],
"config": {
    // Node type: Dividing line
    "type": "Dividing line",
    "props": {
    // Thickness of the dividing line
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
    // Node type: Text
    "type": "Text",
    "props": {
    // Text to display
    "text": "Page 2 Text",
    // Placeholder: Displayed when the content is cleared in the frontend
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
    // Node type: Heading
    "type": "Headline",
    "props": {
    // Heading content
    "label": "Page 2 Headline",
    // Size: Possible values are h1, h2 or h3
    "size": "h1"
    }
}
}
}
```

### i-doit category attribute

This type is more complex than the previous ones and therefore contains more configuration parameters. The parameters differ depending on the type of category attribute.

The basic data structure is described using the example of the attribute General > Title:

```
{
"Attribute165731273460305039947937820184": {
"children": [],
"config": {
    // Node type: Category attribute
    "type": "Attribute",
    "props": {
    // Attribute ID: Composed of the category constant and the technical attribute identifier
    "attribute": "C__CATG__GLOBAL.title",
    // Default title of the field in the form, if "label" is not specified
    "defaultLabel": "Title (General)",
    // Field label
    "label": "LABEL",
    // Is this a required field?
    "required": false,
    // Is the attribute required by i-doit? Natively or via the validation configuration.
    "isSystemRequired": false,
    // Label of the category
    "categoryLabel": "General",
    // Attribute type
    "type": "text",
    // Is the field visible?
    "hidden": false,
    // Default value
    "defaultValue": "Pre-filled value"
    }
}
}
}
```

### Meta information for attributes

Some configuration parameters are provided by the Forms add-on API. They consist of static or dynamic values:

*   **attribute**\*: static value
*   **type**\* : static value, indicates the attribute type
*   **isSystemRequired** : variable value, calculated based on validation or natively

> This parameter overrides **required**, if the attribute is required by the system.

*   **defaultValue** : variable value, pre-filled if the object type references a default template that defines a value for the attribute

> An incorrect specification of **isSystemRequired** will inevitably lead to an error when submitting the form,
> unless **required** is set to _true_.
> **defaultValue** is not strictly necessary if the values from the default template should not be considered.

All this information can be obtained via the Forms add-on API:

```
GET https://idoit-instance/forms/api/attribute?category=C__CATG__GLOBAL,C__CATG__ACCOUNTING&class=C__OBJTYPE__SERVER
```

`category` contains a comma-separated list of category constants. `class` contains the object type constant and is required to determine **defaultValue**. Example response:

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
"title": "CMDB-Status",
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
"defaultValue": "<p>Default description of the default template<\/p>",
"parent": null,
"children": null
}
]
```

### Special Case: Field Dependencies

i-doit has attributes that depend on another attribute within the category. A simple example is Model > Model, which depends on Model > Manufacturer.

The Forms add-on frontend contains control mechanisms that detect if you use Model > Model (child) without Model > Manufacturer, and automatically add the parent attribute.

You can identify these attributes by their metadata: The child attribute contains a **parent** entry and the parent attribute contains a **children** entry:

```
GET https://idoit-instance/forms/api/attribute?category=C__CATG__MODEL&class=C__OBJTYPE__SERVER

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

The definition of the nodes for such dependency structures looks as follows:

```
{
// Manufacturer: Contains no information about the dependency
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
// Model: parameter "parent" references "Manufacturer" to define the dependency
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

## See also

- [Forms Add-on](index.md) -- Overview of the Forms Add-on
- [i-doit Add-ons](../index.md) -- All available add-ons
- [API Add-on](../api/index.md) -- Interface for external access
