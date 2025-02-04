---
title: API v2 endpoints
description: API v2 endpoints
#icon: material/api
status: updated
lang: en
---

!!! warning "Please create a complete backup before making any changes to an interface/import. If the result is not satisfying, it can then be restored"

The new structure is much more rigorous and allows for better validation of passed parameters and it is now possible to create much more structured and simple endpoints. The new structure will use a new service, i.e. the v2 API will use an internal (i-doit core) v2 API.

This is to ensure that the v2 API no longer implements any special "own" logic. The v2 API only serves as an interface.

!!! example "A documentation is provided by the API itself via request or in i-doit"

    === "Request system.endpoints.read.v2"

        ```json
        {
        "version": "2.0",
        "method": "system.endpoints.read.v2",
        "params": {
            "apikey": "KEY",
            "language": "en"
        },
        "id": 1
        }
        ```

    === "Actual v2 endpoints"

        ```json
        {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "cmdb.category.archive.v2": {
                "description": "Will \"archive\" a singular category entry.",
                "parameters": {
                    "required": {
                        "object": {
                            "types": [
                                "integer"
                            ],
                            "description": "Numeric object ID.",
                            "has-validation": true
                        },
                        "category": {
                            "types": [
                                "string"
                            ],
                            "description": "Category constant as string.",
                            "has-validation": true
                        },
                        "entry": {
                            "types": [
                                "integer"
                            ],
                            "description": "Numeric entry ID.",
                            "has-validation": true
                        }
                    },
                    "optional": []
                }
            },
            "cmdb.category.delete.v2": {
                "description": "Will \"delete\" a singular category entry.",
                "parameters": {
                    "required": {
                        "object": {
                            "types": [
                                "integer"
                            ],
                            "description": "Numeric object ID.",
                            "has-validation": true
                        },
                        "category": {
                            "types": [
                                "string"
                            ],
                            "description": "Category constant as string.",
                            "has-validation": true
                        },
                        "entry": {
                            "types": [
                                "integer"
                            ],
                            "description": "Numeric entry ID.",
                            "has-validation": true
                        }
                    },
                    "optional": []
                }
            },
            "cmdb.category.purge.v2": {
                "description": "Will permanently remove a singular category entry from the database.",
                "parameters": {
                    "required": {
                        "object": {
                            "types": [
                                "integer"
                            ],
                            "description": "Numeric object ID.",
                            "has-validation": true
                        },
                        "category": {
                            "types": [
                                "string"
                            ],
                            "description": "Category constant as string.",
                            "has-validation": true
                        },
                        "entry": {
                            "types": [
                                "integer"
                            ],
                            "description": "Numeric entry ID.",
                            "has-validation": true
                        }
                    },
                    "optional": []
                }
            },
            "cmdb.external.pull.v2": {
                "description": "Get object and category data based on external identifier.",
                "parameters": {
                    "required": {
                        "extType": {
                            "types": [
                                "string"
                            ],
                            "description": "First part of external identifier used to identify the data source.",
                            "has-validation": true
                        }
                    },
                    "optional": {
                        "extId": {
                            "types": [
                                "string"
                            ],
                            "description": "Second part of external identifier used to identifiy the asset.",
                            "has-validation": true,
                            "default-value": null
                        }
                    }
                }
            },
            "cmdb.external.push.v2": {
                "description": "Push an object and its category entries at ones based on your external identifier.",
                "parameters": {
                    "required": {
                        "extType": {
                            "types": [
                                "string"
                            ],
                            "description": "First part of external identifier used to identify the data source.",
                            "has-validation": true
                        },
                        "extId": {
                            "types": [
                                "string"
                            ],
                            "description": "Second part of external identifier used to identifiy the asset.",
                            "has-validation": true
                        },
                        "title": {
                            "types": [
                                "string"
                            ],
                            "description": "Object title of asset which should be created if not exist.",
                            "has-validation": true
                        },
                        "class": {
                            "types": [
                                "string"
                            ],
                            "description": "Constant of object type of asset which should be created if not exist.",
                            "has-validation": true
                        },
                        "data": {
                            "types": [
                                "array"
                            ],
                            "description": "Category data for asset.",
                            "has-validation": false
                        }
                    },
                    "optional": []
                }
            },
            "cmdb.object-type-group.create.v2": {
                "description": "Creates one new object type group in i-doit.",
                "parameters": {
                    "required": {
                        "title": {
                            "types": [
                                "string"
                            ],
                            "description": "Title of the object type group",
                            "has-validation": true
                        }
                    },
                    "optional": {
                        "sort": {
                            "types": [
                                "integer"
                            ],
                            "description": "Sorting of the object type group",
                            "has-validation": false,
                            "default-value": null
                        },
                        "visible": {
                            "types": [
                                "boolean"
                            ],
                            "description": "Visibility of the object type groups",
                            "has-validation": false,
                            "default-value": null
                        }
                    }
                },
                "example-request": {
                    "Basic request": {
                        "id": 1,
                        "version": "2.0",
                        "method": "cmdb.object-type-group.create.v2",
                        "params": {
                            "title": "Example group",
                            "visible": true,
                            "sort": 10,
                            "apikey": "{your-api-key}"
                        }
                    }
                },
                "example-response": {
                    "Basic response": {
                        "id": 1,
                        "jsonrpc": "2.0",
                        "result": {
                            "success": true,
                            "id": 123
                        }
                    }
                }
            },
            "cmdb.object-type-group.delete.v2": {
                "description": "Deletes one object type group in i-doit.",
                "parameters": {
                    "required": [],
                    "optional": {
                        "id": {
                            "types": [
                                "integer"
                            ],
                            "description": "Numeric entry ID.",
                            "has-validation": true,
                            "default-value": null
                        },
                        "constant": {
                            "types": [
                                "string"
                            ],
                            "description": "Single constant as string.",
                            "has-validation": true,
                            "default-value": null
                        }
                    }
                },
                "example-request": {
                    "With id": {
                        "id": 1,
                        "version": "2.0",
                        "method": "cmdb.object-type-group.delete.v2",
                        "params": {
                            "id": 123,
                            "apikey": "{your-api-key}"
                        }
                    },
                    "With constant": {
                        "id": 1,
                        "version": "2.0",
                        "method": "cmdb.object-type-group.delete.v2",
                        "params": {
                            "constant": "C__OBJTYPE_GROUP__SD_CUSTOM_GROUP",
                            "apikey": "{your-api-key}"
                        }
                    }
                },
                "example-response": {
                    "Basic response": {
                        "id": 1,
                        "jsonrpc": "2.0",
                        "result": {
                            "success": true,
                            "messages": "Object type constant 'Example group' (#123) successfully deleted."
                        }
                    }
                }
            },
            "cmdb.object-type-group.read.v2": {
                "description": "Reads one or more object type group from i-doit.",
                "parameters": {
                    "required": [],
                    "optional": {
                        "id": {
                            "types": [
                                "integer",
                                "array"
                            ],
                            "description": "Numeric entry ID as integer or array.",
                            "has-validation": true,
                            "default-value": null
                        },
                        "constant": {
                            "types": [
                                "string",
                                "array"
                            ],
                            "description": "Constant as string or array.",
                            "has-validation": true,
                            "default-value": null
                        },
                        "visible": {
                            "types": [
                                "boolean"
                            ],
                            "description": "Visibility of the object type groups",
                            "has-validation": false,
                            "default-value": null
                        }
                    }
                },
                "example-request": {
                    "Basic request": {
                        "id": 1,
                        "version": "2.0",
                        "method": "cmdb.object-type-group.read.v2",
                        "params": {
                            "apikey": "{your-api-key}"
                        }
                    },
                    "With ids": {
                        "id": 1,
                        "version": "2.0",
                        "method": "cmdb.object-type-group.read.v2",
                        "params": {
                            "id": 1,
                            "apikey": "{your-api-key}"
                        }
                    },
                    "With constants": {
                        "id": 1,
                        "version": "2.0",
                        "method": "cmdb.object-type-group.read.v2",
                        "params": {
                            "constant": "C__OBJTYPE_GROUP__SOFTWARE",
                            "apikey": "{your-api-key}"
                        }
                    }
                },
                "example-response": {
                    "Basic response": {
                        "id": 1,
                        "jsonrpc": "2.0",
                        "result": [
                            {
                                "id": 1,
                                "constant": "C__OBJTYPE_GROUP__SOFTWARE",
                                "title": "Software",
                                "titleRaw": "LC__CMDB__OBJTYPE_GROUP__SOFTWARE",
                                "sort": 1,
                                "status": 2,
                                "visible": true,
                                "deletable": false
                            },
                            {
                                "id": 2,
                                "constant": "C__OBJTYPE_GROUP__INFRASTRUCTURE",
                                "title": "Infrastructure",
                                "titleRaw": "LC__CMDB__OBJTYPE_GROUP__INFRASTRUCTURE",
                                "sort": 2,
                                "status": 2,
                                "visible": true,
                                "deletable": false
                            },
                            {
                                "id": 3,
                                "constant": "C__OBJTYPE_GROUP__OTHER",
                                "title": "Other",
                                "titleRaw": "LC__CMDB__OBJTYPE_GROUP__OTHER",
                                "sort": 3,
                                "status": 2,
                                "visible": true,
                                "deletable": false
                            },
                            [
                                "..."
                            ]
                        ]
                    }
                }
            },
            "cmdb.object-type-group.update.v2": {
                "description": "Update an existing object type group.",
                "parameters": {
                    "required": {
                        "id": {
                            "types": [
                                "integer",
                                "string"
                            ],
                            "description": "Object type group, either as ID (integer) or constant (string).",
                            "has-validation": true
                        }
                    },
                    "optional": {
                        "title": {
                            "types": [
                                "string"
                            ],
                            "description": "Title of the object type group",
                            "has-validation": true,
                            "default-value": null
                        },
                        "sort": {
                            "types": [
                                "integer"
                            ],
                            "description": "Sorting of the object type group",
                            "has-validation": false,
                            "default-value": null
                        },
                        "visible": {
                            "types": [
                                "boolean"
                            ],
                            "description": "Visibility of the object type groups",
                            "has-validation": false,
                            "default-value": null
                        }
                    }
                },
                "example-request": {
                    "Basic request": {
                        "id": 1,
                        "version": "2.0",
                        "method": "cmdb.object-type-group.update.v2",
                        "params": {
                            "id": 1234,
                            "title": "New object type group name",
                            "apikey": "{your-api-key}"
                        }
                    },
                    "Change visibility": {
                        "id": 1,
                        "version": "2.0",
                        "method": "cmdb.object-type-group.update.v2",
                        "params": {
                            "id": 1234,
                            "visible": false,
                            "apikey": "{your-api-key}"
                        }
                    },
                    "Change order": {
                        "id": 1,
                        "version": "2.0",
                        "method": "cmdb.object-type-group.update.v2",
                        "params": {
                            "id": 1234,
                            "sort": 99,
                            "apikey": "{your-api-key}"
                        }
                    }
                },
                "example-response": {
                    "Basic response": {
                        "id": 1,
                        "jsonrpc": "2.0",
                        "result": {
                            "success": true
                        }
                    }
                }
            },
            "cmdb.object.archive.v2": {
                "description": "Will \"archive\" a singular object.",
                "parameters": {
                    "required": {
                        "object": {
                            "types": [
                                "integer"
                            ],
                            "description": "Numeric object ID.",
                            "has-validation": true
                        }
                    },
                    "optional": []
                }
            },
            "cmdb.object.delete.v2": {
                "description": "Will \"delete\" a singular object.",
                "parameters": {
                    "required": {
                        "object": {
                            "types": [
                                "integer"
                            ],
                            "description": "Numeric object ID.",
                            "has-validation": true
                        }
                    },
                    "optional": []
                }
            },
            "cmdb.object.purge.v2": {
                "description": "Will permanently remove a singular object from the database.",
                "parameters": {
                    "required": {
                        "object": {
                            "types": [
                                "integer"
                            ],
                            "description": "Numeric object ID.",
                            "has-validation": true
                        }
                    },
                    "optional": []
                }
            },
            "cmdb.report.list.v2": {
                "description": "Lists up all available reports, based on your rights. To execute a report use \"cmdb.report.read.v2\".",
                "parameters": {
                    "required": [],
                    "optional": []
                },
                "example-request": {
                    "Basic request": {
                        "id": 1,
                        "version": "2.0",
                        "method": "cmdb.report.list.v2",
                        "params": {
                            "apikey": "{your-api-key}"
                        }
                    }
                },
                "example-response": {
                    "Basic response": {
                        "id": 1,
                        "jsonrpc": "2.0",
                        "result": [
                            {
                                "id": 1,
                                "category": "General",
                                "title": "My server report",
                                "description": "This report contains valuable data about my servers",
                                "created": "2024-03-12 12:09:08",
                                "modified": null
                            },
                            {
                                "id": 2,
                                "category": "General",
                                "title": "Inactive clients",
                                "description": "List up all clients that are not \"in operation\" right now",
                                "created": "2023-10-13 11:00:28",
                                "modified": "2024-04-01 16:11:48"
                            },
                            [
                                "..."
                            ]
                        ]
                    }
                }
            },
            "cmdb.report.read.v2": {
                "description": "Reads a given report.",
                "parameters": {
                    "required": {
                        "id": {
                            "types": [
                                "integer"
                            ],
                            "description": "Numeric entry ID.",
                            "has-validation": true
                        }
                    },
                    "optional": {
                        "offset": {
                            "types": [
                                "integer"
                            ],
                            "description": "Set a offset to skip the first {n} rows, can be used together with \"limit\" to page.",
                            "has-validation": true,
                            "default-value": 0
                        },
                        "limit": {
                            "types": [
                                "integer"
                            ],
                            "description": "Limit how many rows should be returned, can be used together with \"offset\" to page.",
                            "has-validation": true,
                            "default-value": null
                        }
                    }
                },
                "example-request": {
                    "Basic request": {
                        "id": 1,
                        "version": "2.0",
                        "method": "cmdb.report.read.v2",
                        "params": {
                            "id": 123,
                            "apikey": "{your-api-key}"
                        }
                    },
                    "Request with offset and limit (paging)": {
                        "id": 1,
                        "version": "2.0",
                        "method": "cmdb.report.read.v2",
                        "params": {
                            "id": 123,
                            "offset": 150,
                            "limit": 50,
                            "apikey": "{your-api-key}"
                        }
                    }
                },
                "example-response": {
                    "Example response": [
                        {
                            "id": 1,
                            "jsonrpc": "2.0",
                            "result": [
                                {
                                    "Object type": "Client",
                                    "Title": "Laptop 005",
                                    "Order date": "31.01.2022",
                                    "Delivery date": "04.01.2022",
                                    "Date of invoice": "01.02.2022"
                                },
                                {
                                    "Object type": "Client",
                                    "Title": "Laptop 006",
                                    "Order date": "03.03.2022",
                                    "Delivery date": "04.02.2022",
                                    "Date of invoice": "01.03.2022"
                                },
                                [
                                    "..."
                                ]
                            ]
                        }
                    ]
                }
            },
            "system.endpoints.read.v2": {
                "description": "Reads all registered endpoints of the new structure.",
                "parameters": {
                    "required": [],
                    "optional": []
                },
                "example-request": {
                    "Basic request": {
                        "id": 1,
                        "version": "2.0",
                        "method": "system.endpoints.read.v2",
                        "params": {
                            "apikey": "{your-api-key}"
                        }
                    }
                },
                "example-response": {
                    "Basic response": {
                        "id": 1,
                        "jsonrpc": "2.0",
                        "result": {
                            "cmdb.category.archive.v2": {
                                "description": "Will \"archive\" a singular category entry.",
                                "parameters": {
                                    "required": {
                                        "object": {
                                            "types": [
                                                "integer"
                                            ],
                                            "description": "Numeric object ID.",
                                            "has-validation": true
                                        },
                                        "category": {
                                            "types": [
                                                "string"
                                            ],
                                            "description": "Category constant as string.",
                                            "has-validation": true
                                        },
                                        "entry": {
                                            "types": [
                                                "integer"
                                            ],
                                            "description": "Numeric entry ID.",
                                            "has-validation": true
                                        }
                                    },
                                    "optional": []
                                }
                            },
                            "cmdb.category.delete.v2": {
                                "description": "Will \"delete\" a singular category entry.",
                                "parameters": {
                                    "required": {
                                        "object": {
                                            "types": [
                                                "integer"
                                            ],
                                            "description": "Numeric object ID.",
                                            "has-validation": true
                                        },
                                        "category": {
                                            "types": [
                                                "string"
                                            ],
                                            "description": "Category constant as string.",
                                            "has-validation": true
                                        },
                                        "entry": {
                                            "types": [
                                                "integer"
                                            ],
                                            "description": "Numeric entry ID.",
                                            "has-validation": true
                                        }
                                    },
                                    "optional": []
                                }
                            },
                            "cmdb.category.purge.v2": [
                                "..."
                            ],
                            "...": []
                        }
                    }
                }
            }
        }
    }
        ```
