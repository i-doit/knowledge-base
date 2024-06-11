---
title: Points de terminaison de l'API v2
description: Points de terminaison de l'API v2
#icon: material/api
status: new
lang: en
---

La nouvelle structure est beaucoup plus rigoureuse et permet une meilleure validation des paramètres transmis. Il est désormais possible de créer des points de terminaison beaucoup plus structurés et simples. La nouvelle structure utilisera un nouveau service, c'est-à-dire que l'API v2 utilisera une API interne (noyau i-doit) v2.

Cela garantit que l'API v2 n'implémente plus de logique spéciale "propre". L'API v2 ne sert que d'interface.

!!! example "Une documentation est fournie par l'API elle-même via:"

=== "Requête system.endpoints.read.v2"

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

=== "Points de terminaison v2 actuels"

    ```json
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "cmdb.category.archive.v2": {
                "description": "Will archive a singular category entry from i-doit",
                "parameters": {
                    "required": {
                        "object": {
                            "type": "integer",
                            "description": "Numeric object ID",
                            "has-validation": true
                        },
                        "category": {
                            "type": "string",
                            "description": "Category string constant",
                            "has-validation": true
                        },
                        "entry": {
                            "type": "integer",
                            "description": "Numeric entry ID",
                            "has-validation": true
                        }
                    },
                    "optional": []
                }
            },
            "cmdb.category.delete.v2": {
                "description": "Will delete a singular category entry from i-doit",
                "parameters": {
                    "required": {
                        "object": {
                            "type": "integer",
                            "description": "Numeric object ID",
                            "has-validation": true
                        },
                        "category": {
                            "type": "string",
                            "description": "Category string constant",
                            "has-validation": true
                        },
                        "entry": {
                            "type": "integer",
                            "description": "Numeric entry ID",
                            "has-validation": true
                        }
                    },
                    "optional": []
                }
            },
            "cmdb.category.purge.v2": {
                "description": "Will purge a singular category entry from i-doit",
                "parameters": {
                    "required": {
                        "object": {
                            "type": "integer",
                            "description": "Numeric object ID",
                            "has-validation": true
                        },
                        "category": {
                            "type": "string",
                            "description": "Category string constant",
                            "has-validation": true
                        },
                        "entry": {
                            "type": "integer",
                            "description": "Numeric entry ID",
                            "has-validation": true
                        }
                    },
                    "optional": []
                }
            },
            "cmdb.external.pull.v2": {
                "description": "Get object and category data based on external identifier",
                "parameters": {
                    "required": {
                        "extType": {
                            "type": "string",
                            "description": "First part of external identifier used to identify the data source",
                            "has-validation": true
                        }
                    },
                    "optional": {
                        "extId": {
                            "type": "string",
                            "description": "Second part of external identifier used to identifiy the asset",
                            "has-validation": true,
                            "default-value": null
                        }
                    }
                }
            },
            "cmdb.external.push.v2": {
                "description": "Push an object and its category entries at ones based on your external identifier",
                "parameters": {
                    "required": {
                        "extType": {
                            "type": "string",
                            "description": "First part of external identifier used to identify the data source",
                            "has-validation": true
                        },
                        "extId": {
                            "type": "string",
                            "description": "Second part of external identifier used to identifiy the asset",
                            "has-validation": true
                        },
                        "title": {
                            "type": "string",
                            "description": "Object title of asset which should be created if not exist",
                            "has-validation": true
                        },
                        "class": {
                            "type": "string",
                            "description": "Object type of asset which should be created if not exist",
                            "has-validation": true
                        },
                        "data": {
                            "type": "array",
                            "description": "Category data for asset",
                            "has-validation": true
                        }
                    },
                    "optional": []
                }
            },
            "cmdb.object.archive.v2": {
                "description": "Will archive a singular object from i-doit",
                "parameters": {
                    "required": {
                        "object": {
                            "type": "integer",
                            "description": "Numeric object ID",
                            "has-validation": true
                        }
                    },
                    "optional": []
                }
            },
            "cmdb.object.delete.v2": {
                "description": "Will delete a singular object from i-doit",
                "parameters": {
                    "required": {
                        "object": {
                            "type": "integer",
                            "description": "Numeric object ID",
                            "has-validation": true
                        }
                    },
                    "optional": []
                }
            },
            "cmdb.object.purge.v2": {
                "description": "Will purge a singular object from i-doit",
                "parameters": {
                    "required": {
                        "object": {
                            "type": "integer",
                            "description": "Numeric object ID",
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
                }
            },
            "cmdb.report.read.v2": {
                "description": "Reads a report.",
                "parameters": {
                    "required": {
                        "id": {
                            "type": "integer",
                            "description": "The report ID",
                            "has-validation": true
                        }
                    },
                    "optional": {
                        "offset": {
                            "type": "integer",
                            "description": "Set a offset to skip the first n rows, can be used together with \"limit\" to page.",
                            "has-validation": true,
                            "default-value": null
                        },
                        "limit": {
                            "type": "integer",
                            "description": "Limit how many rows should be returned, can be used together with \"offset\" to page.",
                            "has-validation": true,
                            "default-value": null
                        }
                    }
                }
            },
            "system.endpoints.read.v2": {
                "description": "Will read all registered endpoints of the new structure",
                "parameters": {
                    "required": [],
                    "optional": []
                },
                "example-request": {
                    "basic example": {
                        "version": "2.0",
                        "method": "system.endpoints.read.v2",
                        "params": {
                            "apikey": "api-key"
                        },
                        "id": 1
                    }
                }
            }
        }
    }
    ```
