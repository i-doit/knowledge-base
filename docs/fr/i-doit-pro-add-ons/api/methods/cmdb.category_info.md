---
title: cmdb.category_info
description: cmdb.category_info
icon: material/api
#status: updated
lang: fr
---

# Infos_catégorie

!!! example "Travail en cours"

## cmdb.category_info.read

description

### Paramètres de la requête

| Clé          | Type de données JSON | Requis | Description |
| ------------ | -------------------- | ------ | ----------- |
| **catgID**   | Entier               | Non    | Placeholder |
| **catsID**   | Entier               | Non    | Placeholder |
| **customID** | Entier               | Non    | Placeholder |
| **category** | Chaîne               | Non    | Placeholder |

!!! example "WIP"

    ### Paramètres de la réponse

    La clé JSON **result** contient un tableau d'objets JSON. Chaque objet contient un résultat de recherche.

    | Clé             | Type de données JSON | Description |
    | --------------- | -------------------- | ----------- |
    | **Placeholder** | Placeholder           | Placeholder |
    | **Placeholder** | Placeholder           | Placeholder |

### Exemple

=== "Corps de la requête catgID"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.category_info.read",
      "params": {
        "catgID": 1,
        "apikey": "xxx",
        "language": "en"
      },
      "id": 1
    }
    ```

=== "Corps de réponse catgID" {/examples}

```json
({
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "id": {
          "title": "ID",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "int",
            "backward": false,
            "title": "ID",
            "description": "ID"
          },
          "data": {
            "type": "int",
            "readonly": false,
            "index": true,
            "field": "isys_obj__id",
            "table_alias": "isys_obj"
          },
          "ui": {
            "type": "text",
            "params": {
              "p_strPlaceholder": "0",
              "default": "0"
            },
            "default": null,
            "id": "C__OBJ__ID"
          }
        },
        "title": {
          "title": "Title",
          "check": {
            "mandatory": false
          },
          "info": {
            "title": "LC__UNIVERSAL__TITLE",
            "type": "text",
            "primaryField": false,
            "backwardCompatible": false
          },
          "data": {
            "type": "text",
            "field": "isys_obj__title",
            "sourceTable": "isys_obj",
            "readOnly": false,
            "index": true,
            "select": {}
          },
          "ui": {
            "id": "C__CATG__GLOBAL_TITLE",
            "type": "text",
            "params": {
              "p_nMaxLen": 255
            }
          },
          "format": []
        },
        "status": {
          "title": "Condition",
          "check": {
            "mandatory": null
          },
          "info": {
            "title": "LC__UNIVERSAL__CONDITION",
            "type": "dialog",
            "primaryField": false,
            "backwardCompatible": false
          },
          "data": {
            "type": "int",
            "field": "isys_obj__status",
            "sourceTable": "isys_obj",
            "readOnly": true,
            "index": true,
            "select": {}
          },
          "ui": {
            "id": "C__OBJ__STATUS",
            "type": "dialog",
            "default": "-1",
            "params": {
              "p_arData": {},
              "p_bDbFieldNN": false,
              "chosen": false
            }
          },
          "format": {
            "callback": [
              "isys_export_helper",
              "dialog"
            ]
          }
        },
        "created": {
          "title": "Creation date",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "datetime",
            "backward": false,
            "title": "LC__TASK__DETAIL__WORKORDER__CREATION_DATE",
            "description": "Created"
          },
          "data": {
            "type": "date_time",
            "readonly": true,
            "index": false,
            "field": "isys_obj__created",
            "table_alias": "isys_obj",
            "select": {},
            "sort_alias": "obj_main.isys_obj__created"
          },
          "ui": {
            "type": "datetime",
            "params": {
              "p_strPopupType": "calendar",
              "p_bTime": 1,
              "p_bReadonly": true,
              "default": "n/a"
            },
            "default": null,
            "id": "C__CATG__GLOBAL_CREATED"
          },
          "format": {
            "callback": [
              "isys_export_helper",
              "datetime"
            ]
          }
        },
        "created_by": {
          "title": "Created by",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "text",
            "backward": false,
            "title": "LC__UNIVERSAL__CREATED_BY",
            "description": "Created by"
          },
          "data": {
            "type": "text",
            "readonly": true,
            "index": false,
            "field": "isys_obj__created_by",
            "table_alias": "isys_obj"
          },
          "ui": {
            "type": "text",
            "default": null,
            "params": {
              "p_nMaxLen": 255
            },
            "id": "C__CATG__GLOBAL_CREATED_BY"
          }
        },
        "changed": {
          "title": "Last change",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "datetime",
            "backward": false,
            "title": "LC__CMDB__LAST_CHANGE",
            "description": "Changed"
          },
          "data": {
            "type": "date_time",
            "readonly": true,
            "index": true,
            "sort_alias": "isys_obj__updated",
            "field": "isys_obj__updated",
            "table_alias": "isys_obj",
            "select": {}
          },
          "ui": {
            "type": "datetime",
            "params": {
              "p_strPopupType": "calendar",
              "p_bTime": 1,
              "p_bReadonly": true,
              "default": "n/a"
            },
            "default": null,
            "id": "C__CATG__GLOBAL_UPDATED"
          },
          "format": {
            "callback": [
              "isys_export_helper",
              "datetime"
            ]
          }
        },
        "changed_by": {
          "title": "Last change by",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "text",
            "backward": false,
            "title": "LC__CMDB__LAST_CHANGE_BY",
            "description": "Changed"
          },
          "data": {
            "type": "text",
            "readonly": true,
            "index": false,
            "sort_alias": "isys_obj__updated_by",
            "field": "isys_obj__updated_by",
            "table_alias": "isys_obj"
          },
          "ui": {
            "type": "text",
            "default": null,
            "params": {
              "p_nMaxLen": 255
            },
            "id": "C__CATG__GLOBAL_UPDATED_BY"
          }
        },
        "purpose": {
          "title": "Purpose",
          "check": {
            "mandatory": null
          },
          "info": {
            "primary_field": false,
            "type": "dialog_plus",
            "backward": false,
            "title": "LC__CMDB__CATG__GLOBAL_PURPOSE",
            "description": "Purpose"
          },
          "data": {
            "type": "int",
            "readonly": false,
            "index": false,
            "field": "isys_catg_global_list__isys_purpose__id",
            "source_table": "isys_purpose",
            "references": [
              "isys_purpose",
              "isys_purpose__id"
            ],
            "select": {},
            "join": [
              {},
              {}
            ]
          },
          "ui": {
            "type": "popup",
            "params": {
              "p_strPopupType": "dialog_plus",
              "p_strTable": "isys_purpose"
            },
            "default": "-1",
            "id": "C__CATG__GLOBAL_PURPOSE"
          },
          "format": {
            "callback": [
              "isys_export_helper",
              "dialog_plus"
            ]
          }
        },
        "category": {
          "title": "Category",
          "check": {
            "mandatory": null
          },
          "info": {
            "primary_field": false,
            "type": "dialog_plus",
            "backward": false,
            "title": "LC__CMDB__CATG__GLOBAL_CATEGORY",
            "description": "Category"
          },
          "data": {
            "type": "int",
            "readonly": false,
            "index": false,
            "field": "isys_catg_global_list__isys_catg_global_category__id",
            "source_table": "isys_catg_global_category",
            "references": [
              "isys_catg_global_category",
              "isys_catg_global_category__id"
            ],
            "select": {},
            "join": [
              {},
              {}
            ]
          },
          "ui": {
            "type": "popup",
            "params": {
              "p_strPopupType": "dialog_plus",
              "p_strTable": "isys_catg_global_category"
            },
            "default": "-1",
            "id": "C__CATG__GLOBAL_CATEGORY"
          },
          "format": {
            "callback": [
              "isys_export_helper",
              "dialog_plus"
            ]
          }
        },
        "sysid": {
          "title": "SYSID",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "text",
            "backward": false,
            "title": "LC__CMDB__CATG__GLOBAL_SYSID",
            "description": "SYSID"
          },
          "data": {
            "type": "text",
            "readonly": false,
            "index": true,
            "field": "isys_obj__sysid",
            "table_alias": "isys_obj"
          },
          "ui": {
            "type": "text",
            "default": null,
            "params": {
              "p_nMaxLen": 255,
              "p_bDisabled": "1"
            },
            "id": "C__CATG__GLOBAL_SYSID"
          }
        },
        "cmdb_status": {
          "title": "CMDB status",
          "check": {
            "mandatory": null
          },
          "info": {
            "primary_field": false,
            "type": "dialog",
            "backward": false,
            "title": "LC__UNIVERSAL__CMDB_STATUS",
            "description": "CMDB status"
          },
          "data": {
            "type": "int",
            "readonly": true,
            "index": false,
            "field": "isys_obj__isys_cmdb_status__id",
            "source_table": "isys_cmdb_status",
            "references": [
              "isys_cmdb_status",
              "isys_cmdb_status__id"
            ],
            "select": {}
          },
          "ui": {
            "type": "dialog",
            "params": {
              "p_strTable": "isys_cmdb_status",
              "condition": "isys_cmdb_status__id NOT IN (13, 14)",
              "default": "n/a",
              "p_bDbFieldNN": 1
            },
            "default": "-1",
            "id": "C__OBJ__CMDB_STATUS"
          },
          "format": {
            "callback": [
              "isys_export_helper",
              "dialog"
            ]
          }
        },
        "type": {
          "title": "Object type",
          "check": {
            "mandatory": null
          },
          "info": {
            "primary_field": false,
            "type": "dialog",
            "backward": false,
            "title": "LC__REPORT__FORM__OBJECT_TYPE",
            "description": "Object-Type"
          },
          "data": {
            "type": "int",
            "readonly": true,
            "index": true,
            "field": "isys_obj__isys_obj_type__id",
            "references": [
              "isys_obj_type",
              "isys_obj_type__id"
            ],
            "select": {}
          },
          "ui": {
            "type": "dialog",
            "params": {
              "p_strTable": "",
              "p_arData": {},
              "default": "n/a",
              "p_bDbFieldNN": 1
            },
            "default": "-1",
            "id": "C__OBJ__TYPE"
          },
          "format": {
            "callback": [
              "isys_export_helper",
              "dialog"
            ]
          }
        },
        "tag": {
          "title": "Tags",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "multiselect",
            "backward": false,
            "title": "LC__CMDB__CATG__GLOBAL_TAG",
            "description": "Tag"
          },
          "data": {
            "type": "int",
            "readonly": false,
            "index": true,
            "field": "isys_obj__id",
            "table_alias": "global_tag",
            "source_table": "isys_tag",
            "references": [
              "isys_tag_2_isys_obj",
              "isys_obj__id"
            ],
            "select": {}
          },
          "ui": {
            "type": "popup",
            "params": {
              "type": "f_popup",
              "p_strPopupType": "dialog_plus",
              "multiselect": true,
              "p_strTable": "isys_tag",
              "emptyMessage": "LC__CMDB__CATG__GLOBAL__NO_TAGS_FOUND",
              "p_onComplete": "idoit.callbackManager.triggerCallback('cmdb-catg-global-tag-update', selected);"
            },
            "default": null,
            "id": "C__CATG__GLOBAL_TAG"
          },
          "format": {
            "callback": [
              "isys_export_helper",
              "dialog_multiselect"
            ]
          }
        },
        "description": {
          "title": "Description",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "commentary",
            "backward": false,
            "title": "LC__CMDB__LOGBOOK__DESCRIPTION",
            "description": "Description"
          },
          "data": {
            "type": "text_area",
            "readonly": false,
            "index": false,
            "field": "isys_obj__description",
            "table_alias": "isys_obj"
          },
          "ui": {
            "type": "textarea",
            "default": null,
            "id": "C__CMDB__CAT__COMMENTARY_01"
          }
        }
      }
    }
```

=== "Corps de requête catsID" {/examples}

```json
({
      "version": "2.0",
      "method": "cmdb.category_info.read",
      "params": {
        "catsID": 53,
        "apikey": "xxx",
        "language": "en"
      },
      "id": 1
    }
```

=== "Corps de réponse catsID" {/examples}

```json
({
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "title": {
          "title": "Title",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "text",
            "backward": false,
            "title": "LC__CONTACT__GROUP_TITLE",
            "description": "Title"
          },
          "data": {
            "type": "text",
            "readonly": false,
            "index": false,
            "field": "isys_cats_person_group_list__title"
          },
          "ui": {
            "type": "text",
            "default": null,
            "params": {
              "p_nMaxLen": 255
            },
            "id": "C__CONTACT__GROUP_TITLE"
          }
        },
        "email_address": {
          "title": "E-Mail",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "text",
            "backward": false,
            "title": "LC__CONTACT__GROUP_EMAIL_ADDRESS",
            "description": "EMail"
          },
          "data": {
            "type": "text",
            "readonly": false,
            "index": false,
            "field": "isys_catg_mail_addresses_list__title",
            "select": {},
            "join": [
              {}
            ]
          },
          "ui": {
            "type": "text",
            "default": null,
            "params": {
              "p_nMaxLen": 255
            },
            "id": "C__CONTACT__GROUP_EMAIL_ADDRESS"
          }
        },
        "phone": {
          "title": "Phone",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "text",
            "backward": false,
            "title": "LC__CONTACT__GROUP_PHONE",
            "description": "Phone"
          },
          "data": {
            "type": "text",
            "readonly": false,
            "index": false,
            "field": "isys_cats_person_group_list__phone"
          },
          "ui": {
            "type": "text",
            "default": null,
            "params": {
              "p_nMaxLen": 255
            },
            "id": "C__CONTACT__GROUP_PHONE"
          }
        },
        "ldap_group": {
          "title": "LDAP-Group (Mapping)",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "text",
            "backward": false,
            "title": "LC__CMDB__CATS__PERSON_GROUPS__LDAP_MAPPING",
            "description": "LDAP Group"
          },
          "data": {
            "type": "text",
            "readonly": false,
            "index": false,
            "field": "isys_cats_person_group_list__ldap_group"
          },
          "ui": {
            "type": "text",
            "default": null,
            "params": {
              "p_nMaxLen": 255
            },
            "id": "C__CONTACT__GROUP_LDAP"
          }
        },
        "description": {
          "title": "Description",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "commentary",
            "backward": false,
            "title": "LC__CMDB__LOGBOOK__DESCRIPTION",
            "description": "Description"
          },
          "data": {
            "type": "text_area",
            "readonly": false,
            "index": false,
            "field": "isys_cats_person_group_list__description"
          },
          "ui": {
            "type": "textarea",
            "default": null,
            "id": "C__CMDB__CAT__COMMENTARY_153"
          }
        }
      }
    }
```

=== "Corps de requête custimID" {/examples}

```json
({
      "version": "2.0",
      "method": "cmdb.category_info.read",
      "params": {
        "customID": 1,
        "apikey": "xxx",
        "language": "en"
      },
      "id": 1
    }
```

=== "Corps de réponse customID" {/examples}

```json
({
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "f_popup_c_16920981543572760": {
          "title": "Checkbox",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "multiselect",
            "backward": false,
            "title": "Checkbox",
            "description": "f_popup"
          },
          "data": {
            "type": "int",
            "readonly": false,
            "index": false,
            "field": "isys_catg_custom_fields_list__field_content",
            "field_alias": "f_popup_c_16920981543572760",
            "source_table": "isys_catg_custom_fields_list",
            "references": [
              "isys_dialog_plus_custom",
              "isys_dialog_plus_custom__id"
            ],
            "select": {}
          },
          "ui": {
            "type": "popup",
            "default": null,
            "params": {
              "p_nMaxLen": 255,
              "type": "f_popup",
              "popup": "checkboxes",
              "title": "Checkbox",
              "identifier": "Addition",
              "multiselection": 1,
              "visibility": "visible",
              "show_in_list": false,
              "show_inline": false,
              "p_strTable": "isys_dialog_plus_custom",
              "condition": "isys_dialog_plus_custom__identifier = 'Addition'",
              "p_arData": {},
              "p_strPopupType": "dialog_plus",
              "p_identifier": "Addition",
              "multiselect": true
            },
            "id": "c_16920981543572760"
          },
          "format": {
            "callback": [
              "isys_global_custom_fields_export_helper",
              "exportCustomFieldDialogPlus"
            ]
          }
        },
        "f_popup_c_16920981545077660": {
          "title": "Date and Time",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "datetime",
            "backward": false,
            "title": "Date and Time",
            "description": "f_popup"
          },
          "data": {
            "type": "date_time",
            "readonly": false,
            "index": false,
            "field": "isys_catg_custom_fields_list__field_content",
            "field_alias": "f_popup_c_16920981545077660",
            "select": {}
          },
          "ui": {
            "type": "datetime",
            "default": null,
            "params": {
              "p_nMaxLen": 255,
              "type": "f_popup",
              "popup": "calendar",
              "extra": "date-datetime",
              "title": "Date and Time",
              "default": "1",
              "visibility": "visible",
              "show_in_list": false,
              "show_inline": false,
              "p_bTime": true,
              "p_strStyle": "width:70%;"
            },
            "id": "c_16920981545077660"
          },
          "format": {
            "callback": [
              "isys_global_custom_fields_export_helper",
              "exportCustomFieldCalendarWithTime"
            ]
          }
        },
        "f_popup_c_16920981546684770": {
          "title": "Dialog +",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "dialog_plus",
            "backward": false,
            "title": "Dialog +",
            "description": "f_popup"
          },
          "data": {
            "type": "int",
            "readonly": false,
            "index": false,
            "field": "isys_catg_custom_fields_list__field_content",
            "field_alias": "f_popup_c_16920981546684770",
            "source_table": "isys_catg_custom_fields_list",
            "references": [
              "isys_dialog_plus_custom",
              "isys_dialog_plus_custom__id"
            ],
            "select": {}
          },
          "ui": {
            "type": "popup",
            "default": null,
            "params": {
              "p_nMaxLen": 255,
              "type": "f_popup",
              "popup": "dialog_plus",
              "title": "Dialog +",
              "identifier": "Addition",
              "visibility": "visible",
              "show_in_list": false,
              "show_inline": false,
              "p_strTable": "isys_dialog_plus_custom",
              "condition": "isys_dialog_plus_custom__identifier = 'Addition'",
              "p_arData": {},
              "p_strPopupType": "dialog_plus",
              "p_identifier": "Addition"
            },
            "id": "c_16920981546684770"
          },
          "format": {
            "callback": [
              "isys_global_custom_fields_export_helper",
              "exportCustomFieldDialogPlus"
            ]
          }
        },
        "f_popup_c_16920981548156320": {
          "title": "Dialog +Multiple selection)",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "multiselect",
            "backward": false,
            "title": "Dialog +Multiple selection)",
            "description": "f_popup"
          },
          "data": {
            "type": "int",
            "readonly": false,
            "index": false,
            "field": "isys_catg_custom_fields_list__field_content",
            "field_alias": "f_popup_c_16920981548156320",
            "source_table": "isys_catg_custom_fields_list",
            "references": [
              "isys_dialog_plus_custom",
              "isys_dialog_plus_custom__id"
            ],
            "select": {}
          },
          "ui": {
            "type": "popup",
            "default": null,
            "params": {
              "p_nMaxLen": 255,
              "type": "f_popup",
              "popup": "dialog_plus",
              "title": "Dialog +Multiple selection)",
              "identifier": "Addition",
              "multiselection": 1,
              "visibility": "visible",
              "show_in_list": false,
              "show_inline": false,
              "p_strTable": "isys_dialog_plus_custom",
              "condition": "isys_dialog_plus_custom__identifier = 'Addition'",
              "p_arData": {},
              "p_strPopupType": "dialog_plus",
              "p_identifier": "Addition",
              "multiselect": true
            },
            "id": "c_16920981548156320"
          },
          "format": {
            "callback": [
              "isys_global_custom_fields_export_helper",
              "exportCustomFieldDialogPlus"
            ]
          }
        },
        "f_popup_c_16920981549657730": {
          "title": "File browser",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "object_browser",
            "backward": false,
            "title": "File browser",
            "description": "f_popup"
          },
          "data": {
            "type": "int",
            "readonly": false,
            "index": false,
            "field": "isys_catg_custom_fields_list__field_content",
            "field_alias": "f_popup_c_16920981549657730",
            "select": {}
          },
          "ui": {
            "type": "popup",
            "default": null,
            "params": {
              "p_nMaxLen": 255,
              "type": "f_popup",
              "popup": "file",
              "title": "File browser",
              "visibility": "visible",
              "show_in_list": false,
              "show_inline": false,
              "p_strPopupType": "browser_object_ng",
              "multiselection": false
            },
            "id": "c_16920981549657730"
          },
          "format": {
            "callback": [
              "isys_global_custom_fields_export_helper",
              "exportCustomFieldObject"
            ]
          }
        },
        "html_c_16920981551089650": {
          "title": "HTML",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "text",
            "backward": false,
            "title": "HTML",
            "description": "html"
          },
          "data": {
            "type": "text",
            "readonly": false,
            "index": false,
            "field": "isys_catg_custom_fields_list__field_content",
            "field_alias": "html_c_16920981551089650",
            "select": {}
          },
          "ui": {
            "type": "html",
            "default": null,
            "params": {
              "p_nMaxLen": 255,
              "type": "html",
              "title": "HTML",
              "visibility": "visible",
              "show_in_list": false,
              "show_inline": false
            },
            "id": "c_16920981551089650"
          }
        },
        "f_wysiwyg_c_16920981552569820": {
          "title": "HTML-Editor",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "textarea",
            "backward": false,
            "title": "HTML-Editor",
            "description": "f_wysiwyg"
          },
          "data": {
            "type": "text",
            "readonly": false,
            "index": false,
            "field": "isys_catg_custom_fields_list__field_content",
            "field_alias": "f_wysiwyg_c_16920981552569820",
            "select": {}
          },
          "ui": {
            "type": "wysiwyg",
            "default": null,
            "params": {
              "p_nMaxLen": 255,
              "type": "f_wysiwyg",
              "title": "HTML-Editor",
              "visibility": "visible",
              "show_in_list": false,
              "show_inline": false
            },
            "id": "c_16920981552569820"
          }
        },
        "hr_c_16920982533611700": {
          "title": "Horizontal line",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "text",
            "backward": false,
            "title": "Horizontal line",
            "description": "hr"
          },
          "data": {
            "type": "text",
            "readonly": false,
            "index": false,
            "field": "isys_catg_custom_fields_list__field_content",
            "field_alias": "hr_c_16920982533611700",
            "select": {}
          },
          "ui": {
            "type": "hr",
            "default": null,
            "params": {
              "p_nMaxLen": 255,
              "type": "hr",
              "title": "Horizontal line",
              "visibility": "visible",
              "show_in_list": false,
              "show_inline": false
            },
            "id": "c_16920982533611700"
          }
        },
        "script_c_16920982535068230": {
          "title": "Javascript",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "text",
            "backward": false,
            "title": "Javascript",
            "description": "script"
          },
          "data": {
            "type": "text",
            "readonly": false,
            "index": false,
            "field": "isys_catg_custom_fields_list__field_content",
            "field_alias": "script_c_16920982535068230",
            "select": {}
          },
          "ui": {
            "type": "script",
            "default": null,
            "params": {
              "p_nMaxLen": 255,
              "type": "script",
              "title": "Javascript",
              "visibility": "visible",
              "show_in_list": false,
              "show_inline": false
            },
            "id": "c_16920982535068230"
          }
        },
        "f_link_c_16920982536598820": {
          "title": "Link",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "text",
            "backward": false,
            "title": "Link",
            "description": "f_link"
          },
          "data": {
            "type": "text",
            "readonly": false,
            "index": false,
            "field": "isys_catg_custom_fields_list__field_content",
            "field_alias": "f_link_c_16920982536598820",
            "select": {}
          },
          "ui": {
            "type": "link",
            "default": null,
            "params": {
              "p_nMaxLen": 255,
              "type": "f_link",
              "title": "Link",
              "visibility": "visible",
              "show_in_list": false,
              "show_inline": false
            },
            "id": "c_16920982536598820"
          }
        },
        "f_numeric_c_16920982538135930": {
          "title": "Number only",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "text",
            "backward": false,
            "title": "Number only",
            "description": "f_numeric"
          },
          "data": {
            "type": "text",
            "readonly": false,
            "index": false,
            "field": "isys_catg_custom_fields_list__field_content",
            "field_alias": "f_numeric_c_16920982538135930",
            "select": {}
          },
          "ui": {
            "type": "numeric",
            "default": null,
            "params": {
              "p_nMaxLen": 255,
              "type": "f_numeric",
              "title": "Number only",
              "visibility": "visible",
              "show_in_list": false,
              "show_inline": false
            },
            "id": "c_16920982538135930"
          }
        },
        "f_popup_c_16920982539453190": {
          "title": "Object-Browser (Several objects)",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "object_browser",
            "backward": false,
            "title": "Object-Browser (Several objects)",
            "description": "f_popup"
          },
          "data": {
            "type": "int",
            "readonly": false,
            "index": false,
            "field": "isys_catg_custom_fields_list__field_content",
            "field_alias": "f_popup_c_16920982539453190",
            "select": {}
          },
          "ui": {
            "type": "popup",
            "default": null,
            "params": {
              "p_nMaxLen": 255,
              "type": "f_popup",
              "popup": "browser_object",
              "title": "Object-Browser (Several objects)",
              "multiselection": true,
              "visibility": "visible",
              "show_in_list": false,
              "show_inline": false,
              "p_strPopupType": "browser_object_ng"
            },
            "id": "c_16920982539453190"
          },
          "format": {
            "callback": [
              "isys_global_custom_fields_export_helper",
              "exportCustomFieldObject"
            ]
          }
        },
        "f_popup_c_16920982540799680": {
          "title": "Object-Relation (Several objects)",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "object_browser",
            "backward": false,
            "title": "Object-Relation (Several objects)",
            "description": "f_popup"
          },
          "data": {
            "type": "int",
            "readonly": false,
            "index": false,
            "field": "isys_catg_custom_fields_list__field_content",
            "field_alias": "f_popup_c_16920982540799680",
            "select": {}
          },
          "ui": {
            "type": "popup",
            "default": null,
            "params": {
              "p_nMaxLen": 255,
              "type": "f_popup",
              "popup": "browser_object",
              "title": "Object-Relation (Several objects)",
              "identifier": "38",
              "multiselection": true,
              "visibility": "visible",
              "show_in_list": false,
              "show_inline": false,
              "p_strPopupType": "browser_object_ng",
              "p_identifier": "38"
            },
            "id": "c_16920982540799680"
          },
          "format": {
            "callback": [
              "isys_global_custom_fields_export_helper",
              "exportCustomFieldObject"
            ]
          }
        },
        "f_popup_c_16920982542208730": {
          "title": "Object browser (One object)",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "object_browser",
            "backward": false,
            "title": "Object browser (One object)",
            "description": "f_popup"
          },
          "data": {
            "type": "int",
            "readonly": false,
            "index": false,
            "field": "isys_catg_custom_fields_list__field_content",
            "field_alias": "f_popup_c_16920982542208730",
            "select": {}
          },
          "ui": {
            "type": "popup",
            "default": null,
            "params": {
              "p_nMaxLen": 255,
              "type": "f_popup",
              "popup": "browser_object",
              "title": "Object browser (One object)",
              "visibility": "visible",
              "show_in_list": false,
              "show_inline": false,
              "p_strPopupType": "browser_object_ng",
              "multiselection": false
            },
            "id": "c_16920982542208730"
          },
          "format": {
            "callback": [
              "isys_global_custom_fields_export_helper",
              "exportCustomFieldObject"
            ]
          }
        },
        "f_popup_c_16920982543638450": {
          "title": "Object relationship (One object)",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "object_browser",
            "backward": false,
            "title": "Object relationship (One object)",
            "description": "f_popup"
          },
          "data": {
            "type": "int",
            "readonly": false,
            "index": false,
            "field": "isys_catg_custom_fields_list__field_content",
            "field_alias": "f_popup_c_16920982543638450",
            "select": {}
          },
          "ui": {
            "type": "popup",
            "default": null,
            "params": {
              "p_nMaxLen": 255,
              "type": "f_popup",
              "popup": "browser_object",
              "title": "Object relationship (One object)",
              "identifier": "38",
              "visibility": "visible",
              "show_in_list": false,
              "show_inline": false,
              "p_strPopupType": "browser_object_ng",
              "multiselection": false,
              "p_identifier": "38"
            },
            "id": "c_16920982543638450"
          },
          "format": {
            "callback": [
              "isys_global_custom_fields_export_helper",
              "exportCustomFieldObject"
            ]
          }
        },
        "f_popup_c_16920983590869540": {
          "title": "Report",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "text",
            "backward": false,
            "title": "Report",
            "description": "f_popup"
          },
          "data": {
            "type": "int",
            "readonly": false,
            "index": false,
            "field": "isys_catg_custom_fields_list__field_content",
            "field_alias": "f_popup_c_16920983590869540",
            "select": {}
          },
          "ui": {
            "type": "popup",
            "default": null,
            "params": {
              "p_nMaxLen": 255,
              "type": "f_popup",
              "popup": "report_browser",
              "title": "Report",
              "identifier": "1",
              "visibility": "visible",
              "show_in_list": false,
              "show_inline": false
            },
            "id": "c_16920983590869540"
          },
          "format": {
            "callback": [
              "isys_global_custom_fields_export_helper",
              "exportCustomReport"
            ]
          }
        },
        "f_text_c_1692098359236280": {
          "title": "Textfield",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "text",
            "backward": false,
            "title": "Textfield",
            "description": "f_text"
          },
          "data": {
            "type": "text",
            "readonly": false,
            "index": false,
            "field": "isys_catg_custom_fields_list__field_content",
            "field_alias": "f_text_c_1692098359236280",
            "select": {}
          },
          "ui": {
            "type": "text",
            "default": null,
            "params": {
              "p_nMaxLen": 255,
              "type": "f_text",
              "title": "Textfield",
              "visibility": "visible",
              "show_in_list": false,
              "show_inline": false
            },
            "id": "c_1692098359236280"
          }
        },
        "f_password_c_16920983593948440": {
          "title": "Textfield (masked)",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "text",
            "backward": false,
            "title": "Textfield (masked)",
            "description": "f_password"
          },
          "data": {
            "type": "text",
            "readonly": false,
            "index": false,
            "field": "isys_catg_custom_fields_list__field_content",
            "field_alias": "f_password_c_16920983593948440",
            "select": {}
          },
          "ui": {
            "type": "password",
            "default": null,
            "params": {
              "p_nMaxLen": 255,
              "type": "f_password",
              "title": "Textfield (masked)",
              "visibility": "visible",
              "show_in_list": false,
              "show_inline": false
            },
            "id": "c_16920983593948440"
          },
          "format": {
            "callback": [
              "isys_global_custom_fields_export_helper",
              "exportCustomFieldPassword"
            ]
          }
        },
        "f_textarea_c_16920983595455790": {
          "title": "Textfield (multiple rows)",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "textarea",
            "backward": false,
            "title": "Textfield (multiple rows)",
            "description": "f_textarea"
          },
          "data": {
            "type": "text_area",
            "readonly": false,
            "index": false,
            "field": "isys_catg_custom_fields_list__field_content",
            "field_alias": "f_textarea_c_16920983595455790",
            "select": {}
          },
          "ui": {
            "type": "textarea",
            "default": null,
            "params": {
              "p_nMaxLen": 255,
              "type": "f_textarea",
              "title": "Textfield (multiple rows)",
              "visibility": "visible",
              "show_in_list": false,
              "show_inline": false
            },
            "id": "c_16920983595455790"
          }
        },
        "f_time_c_16920983597011990": {
          "title": "Time",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "time",
            "backward": false,
            "title": "Time",
            "description": "f_time"
          },
          "data": {
            "type": "time",
            "readonly": false,
            "index": false,
            "field": "isys_catg_custom_fields_list__field_content",
            "field_alias": "f_time_c_16920983597011990",
            "select": {}
          },
          "ui": {
            "type": "time",
            "default": null,
            "params": {
              "p_nMaxLen": 255,
              "type": "f_time",
              "title": "Time",
              "visibility": "visible",
              "show_in_list": false,
              "show_inline": false
            },
            "id": "c_16920983597011990"
          }
        },
        "f_dialog_c_16920983598535500": {
          "title": "Yes-no-field",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "dialog",
            "backward": false,
            "title": "Yes-no-field",
            "description": "f_dialog"
          },
          "data": {
            "type": "text",
            "readonly": false,
            "index": false,
            "field": "isys_catg_custom_fields_list__field_content",
            "field_alias": "f_dialog_c_16920983598535500",
            "select": {}
          },
          "ui": {
            "type": "dialog",
            "default": "LC__UNIVERSAL__NO",
            "params": {
              "p_nMaxLen": 255,
              "type": "f_dialog",
              "extra": "yes-no",
              "title": "Yes-no-field",
              "default": "0",
              "visibility": "visible",
              "show_in_list": false,
              "show_inline": false,
              "p_arData": {
                "LC__UNIVERSAL__YES": "Yes",
                "LC__UNIVERSAL__NO": "No"
              }
            },
            "id": "c_16920983598535500"
          },
          "format": {
            "callback": [
              "isys_global_custom_fields_export_helper",
              "exportCustomFieldYesNoDialog"
            ]
          }
        },
        "description": {
          "title": "Description",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "commentary",
            "backward": false,
            "title": "LC__CMDB__LOGBOOK__DESCRIPTION",
            "description": "Description"
          },
          "data": {
            "type": "text_area",
            "readonly": false,
            "index": false,
            "field": "isys_catg_custom_fields_list__field_content",
            "field_alias": "C__CMDB__CAT__COMMENTARY_41",
            "select": {}
          },
          "ui": {
            "type": "textarea",
            "default": null,
            "id": "C__CMDB__CAT__COMMENTARY_41"
          }
        }
      }
    }
```

=== "Corps de requête catégorie" {/examples}

```json
({
      "version": "2.0",
      "method": "cmdb.category_info.read",
      "params": {
        "category": "C__CATG__GLOBAL",
        "apikey": "{{apikey}}",
        "language": "en"
      },
      "id": 1
    }
```

=== "Corps de réponse catégorie" {/examples}

```json
({
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "id": {
          "title": "ID",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "int",
            "backward": false,
            "title": "ID",
            "description": "ID"
          },
          "data": {
            "type": "int",
            "readonly": false,
            "index": true,
            "field": "isys_obj__id",
            "table_alias": "isys_obj"
          },
          "ui": {
            "type": "text",
            "params": {
              "p_strPlaceholder": "0",
              "default": "0"
            },
            "default": null,
            "id": "C__OBJ__ID"
          }
        },
        "title": {
          "title": "Title",
          "check": {
            "mandatory": false
          },
          "info": {
            "title": "LC__UNIVERSAL__TITLE",
            "type": "text",
            "primaryField": false,
            "backwardCompatible": false
          },
          "data": {
            "type": "text",
            "field": "isys_obj__title",
            "sourceTable": "isys_obj",
            "readOnly": false,
            "index": true,
            "select": {}
          },
          "ui": {
            "id": "C__CATG__GLOBAL_TITLE",
            "type": "text",
            "params": {
              "p_nMaxLen": 255
            }
          },
          "format": []
        },
        "status": {
          "title": "Condition",
          "check": {
            "mandatory": null
          },
          "info": {
            "title": "LC__UNIVERSAL__CONDITION",
            "type": "dialog",
            "primaryField": false,
            "backwardCompatible": false
          },
          "data": {
            "type": "int",
            "field": "isys_obj__status",
            "sourceTable": "isys_obj",
            "readOnly": true,
            "index": true,
            "select": {}
          },
          "ui": {
            "id": "C__OBJ__STATUS",
            "type": "dialog",
            "default": "-1",
            "params": {
              "p_arData": {},
              "p_bDbFieldNN": false,
              "chosen": false
            }
          },
          "format": {
            "callback": [
              "isys_export_helper",
              "dialog"
            ]
          }
        },
        "created": {
          "title": "Creation date",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "datetime",
            "backward": false,
            "title": "LC__TASK__DETAIL__WORKORDER__CREATION_DATE",
            "description": "Created"
          },
          "data": {
            "type": "date_time",
            "readonly": true,
            "index": false,
            "field": "isys_obj__created",
            "table_alias": "isys_obj",
            "select": {},
            "sort_alias": "obj_main.isys_obj__created"
          },
          "ui": {
            "type": "datetime",
            "params": {
              "p_strPopupType": "calendar",
              "p_bTime": 1,
              "p_bReadonly": true,
              "default": "n/a"
            },
            "default": null,
            "id": "C__CATG__GLOBAL_CREATED"
          },
          "format": {
            "callback": [
              "isys_export_helper",
              "datetime"
            ]
          }
        },
        "created_by": {
          "title": "Created by",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "text",
            "backward": false,
            "title": "LC__UNIVERSAL__CREATED_BY",
            "description": "Created by"
          },
          "data": {
            "type": "text",
            "readonly": true,
            "index": false,
            "field": "isys_obj__created_by",
            "table_alias": "isys_obj"
          },
          "ui": {
            "type": "text",
            "default": null,
            "params": {
              "p_nMaxLen": 255
            },
            "id": "C__CATG__GLOBAL_CREATED_BY"
          }
        },
        "changed": {
          "title": "Last change",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "datetime",
            "backward": false,
            "title": "LC__CMDB__LAST_CHANGE",
            "description": "Changed"
          },
          "data": {
            "type": "date_time",
            "readonly": true,
            "index": true,
            "sort_alias": "isys_obj__updated",
            "field": "isys_obj__updated",
            "table_alias": "isys_obj",
            "select": {}
          },
          "ui": {
            "type": "datetime",
            "params": {
              "p_strPopupType": "calendar",
              "p_bTime": 1,
              "p_bReadonly": true,
              "default": "n/a"
            },
            "default": null,
            "id": "C__CATG__GLOBAL_UPDATED"
          },
          "format": {
            "callback": [
              "isys_export_helper",
              "datetime"
            ]
          }
        },
        "changed_by": {
          "title": "Last change by",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "text",
            "backward": false,
            "title": "LC__CMDB__LAST_CHANGE_BY",
            "description": "Changed"
          },
          "data": {
            "type": "text",
            "readonly": true,
            "index": false,
            "sort_alias": "isys_obj__updated_by",
            "field": "isys_obj__updated_by",
            "table_alias": "isys_obj"
          },
          "ui": {
            "type": "text",
            "default": null,
            "params": {
              "p_nMaxLen": 255
            },
            "id": "C__CATG__GLOBAL_UPDATED_BY"
          }
        },
        "purpose": {
          "title": "Purpose",
          "check": {
            "mandatory": null
          },
          "info": {
            "primary_field": false,
            "type": "dialog_plus",
            "backward": false,
            "title": "LC__CMDB__CATG__GLOBAL_PURPOSE",
            "description": "Purpose"
          },
          "data": {
            "type": "int",
            "readonly": false,
            "index": false,
            "field": "isys_catg_global_list__isys_purpose__id",
            "source_table": "isys_purpose",
            "references": [
              "isys_purpose",
              "isys_purpose__id"
            ],
            "select": {},
            "join": [
              {},
              {}
            ]
          },
          "ui": {
            "type": "popup",
            "params": {
              "p_strPopupType": "dialog_plus",
              "p_strTable": "isys_purpose"
            },
            "default": "-1",
            "id": "C__CATG__GLOBAL_PURPOSE"
          },
          "format": {
            "callback": [
              "isys_export_helper",
              "dialog_plus"
            ]
          }
        },
        "category": {
          "title": "Category",
          "check": {
            "mandatory": null
          },
          "info": {
            "primary_field": false,
            "type": "dialog_plus",
            "backward": false,
            "title": "LC__CMDB__CATG__GLOBAL_CATEGORY",
            "description": "Category"
          },
          "data": {
            "type": "int",
            "readonly": false,
            "index": false,
            "field": "isys_catg_global_list__isys_catg_global_category__id",
            "source_table": "isys_catg_global_category",
            "references": [
              "isys_catg_global_category",
              "isys_catg_global_category__id"
            ],
            "select": {},
            "join": [
              {},
              {}
            ]
          },
          "ui": {
            "type": "popup",
            "params": {
              "p_strPopupType": "dialog_plus",
              "p_strTable": "isys_catg_global_category"
            },
            "default": "-1",
            "id": "C__CATG__GLOBAL_CATEGORY"
          },
          "format": {
            "callback": [
              "isys_export_helper",
              "dialog_plus"
            ]
          }
        },
        "sysid": {
          "title": "SYSID",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "text",
            "backward": false,
            "title": "LC__CMDB__CATG__GLOBAL_SYSID",
            "description": "SYSID"
          },
          "data": {
            "type": "text",
            "readonly": false,
            "index": true,
            "field": "isys_obj__sysid",
            "table_alias": "isys_obj"
          },
          "ui": {
            "type": "text",
            "default": null,
            "params": {
              "p_nMaxLen": 255,
              "p_bDisabled": "1"
            },
            "id": "C__CATG__GLOBAL_SYSID"
          }
        },
        "cmdb_status": {
          "title": "CMDB status",
          "check": {
            "mandatory": null
          },
          "info": {
            "primary_field": false,
            "type": "dialog",
            "backward": false,
            "title": "LC__UNIVERSAL__CMDB_STATUS",
            "description": "CMDB status"
          },
          "data": {
            "type": "int",
            "readonly": true,
            "index": false,
            "field": "isys_obj__isys_cmdb_status__id",
            "source_table": "isys_cmdb_status",
            "references": [
              "isys_cmdb_status",
              "isys_cmdb_status__id"
            ],
            "select": {}
          },
          "ui": {
            "type": "dialog",
            "params": {
              "p_strTable": "isys_cmdb_status",
              "condition": "isys_cmdb_status__id NOT IN (13, 14)",
              "default": "n/a",
              "p_bDbFieldNN": 1
            },
            "default": "-1",
            "id": "C__OBJ__CMDB_STATUS"
          },
          "format": {
            "callback": [
              "isys_export_helper",
              "dialog"
            ]
          }
        },
        "type": {
          "title": "Object type",
          "check": {
            "mandatory": null
          },
          "info": {
            "primary_field": false,
            "type": "dialog",
            "backward": false,
            "title": "LC__REPORT__FORM__OBJECT_TYPE",
            "description": "Object-Type"
          },
          "data": {
            "type": "int",
            "readonly": true,
            "index": true,
            "field": "isys_obj__isys_obj_type__id",
            "references": [
              "isys_obj_type",
              "isys_obj_type__id"
            ],
            "select": {}
          },
          "ui": {
            "type": "dialog",
            "params": {
              "p_strTable": "",
              "p_arData": {},
              "default": "n/a",
              "p_bDbFieldNN": 1
            },
            "default": "-1",
            "id": "C__OBJ__TYPE"
          },
          "format": {
            "callback": [
              "isys_export_helper",
              "dialog"
            ]
          }
        },
        "tag": {
          "title": "Tags",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "multiselect",
            "backward": false,
            "title": "LC__CMDB__CATG__GLOBAL_TAG",
            "description": "Tag"
          },
          "data": {
            "type": "int",
            "readonly": false,
            "index": true,
            "field": "isys_obj__id",
            "table_alias": "global_tag",
            "source_table": "isys_tag",
            "references": [
              "isys_tag_2_isys_obj",
              "isys_obj__id"
            ],
            "select": {}
          },
          "ui": {
            "type": "popup",
            "params": {
              "type": "f_popup",
              "p_strPopupType": "dialog_plus",
              "multiselect": true,
              "p_strTable": "isys_tag",
              "emptyMessage": "LC__CMDB__CATG__GLOBAL__NO_TAGS_FOUND",
              "p_onComplete": "idoit.callbackManager.triggerCallback('cmdb-catg-global-tag-update', selected);"
            },
            "default": null,
            "id": "C__CATG__GLOBAL_TAG"
          },
          "format": {
            "callback": [
              "isys_export_helper",
              "dialog_multiselect"
            ]
          }
        },
        "description": {
          "title": "Description",
          "check": {
            "mandatory": false
          },
          "info": {
            "primary_field": false,
            "type": "commentary",
            "backward": false,
            "title": "LC__CMDB__LOGBOOK__DESCRIPTION",
            "description": "Description"
          },
          "data": {
            "type": "text_area",
            "readonly": false,
            "index": false,
            "field": "isys_obj__description",
            "table_alias": "isys_obj"
          },
          "ui": {
            "type": "textarea",
            "default": null,
            "id": "C__CMDB__CAT__COMMENTARY_01"
          }
        }
      }
    }
```
