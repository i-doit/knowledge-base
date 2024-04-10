---
title: external
description: cmdb.external endpunkt
icon: material/api
status: new
lang: de
---

# cmdb.external

Die Einbindung externer Datenquellen in die Configuration Management Database (CMDB) kann durch verschiedene Maßnahmen vereinfacht werden. Zunächst ist es wichtig, dass die Daten in einem standardisierten, leicht zu verarbeitenden Format vorliegen, um das Auslesen und Übernehmen in die CMDB zu erleichtern. Darüber hinaus sollten Funktionen implementiert werden, die eine vollständige, einmalige Datenübernahme sowie regelmäßige, automatisierte Synchronisationen ermöglichen. Dabei ist es entscheidend, dass jedes Datenelement in der CMDB mit seiner Herkunft verknüpft wird, um die Identifizierbarkeit der Datenquellen sicherzustellen. Gleichzeitig müssen klare Regeln und Richtlinien definiert werden, um den Geltungsbereich der Daten aus den einzelnen Quellen abzugrenzen. Die simultane Integration mehrerer Datenquellen sollte ebenfalls unterstützt werden, wobei Konflikte und Inkonsistenzen erkannt und aufgelöst werden müssen. Schließlich sollten Single-Request Operationen implementiert werden, die es Anwendern ermöglichen, Datenimporte, -synchronisationen und -abfragen über eine einzige Schnittstelle durchzuführen, um die Benutzerfreundlichkeit und Effizienz zu erhöhen.

## cmdb.external

### Was sind External Identifier?

-   Benutzerdefinierte String-basierte stabile und eindeutige IDs
-   Zusammengesetzt aus einem **"type"** und einer **"id"**

Zum Beispiel `my_vendor_id / my_object_id`.

### Warum brauchen wir External Identifier?

-   Klare Identifizierung von Objekt- und Kategorie-Datensätzen
-   Scoping: Abgeschlossene Datenbereiche
-   Caller muss interne Datensatz-IDs nicht kennen

### Wie funktionieren External Identifier?

-   Hierarchischer Ansatz
-   User definiert einen External Identifier für das Objekt
    -   **extType**: Identifikator für die Datenquelle/Vendor
    -   **extId**: Identifikator für das Objekt
-   **User definiert zudem einen Identifier (ohne extType) für jeden Kategorieeintrag**
-   API erstellt ein Mapping zwischen Identifier und internen IDs

Beispiele dazu wären:

-   External Identifier für ein **Objekt**
    -   `datenquelle-1 / windows-server100`
-   External Identifier für jeden **Kategorieeintrag**
    -   `datenquelle-1 / windows-server100 / C__CATG__CPU / intel-1`

Auf der ersten Ebene befindet sich das Objekt. Hierbei definieren wir zum einen den **extType** und zum anderen die **extId**. Beides im Verbund bildet den vollständigen Identifier und identifiziert das erstellte Objekt eindeutig.

Auf der nächsten Ebene hingegen haben wir unsere **Kategorie Ebene**. Dabei startet jede Kategorie mit der zugehörigen Konstante und erhält auf der darunterliegenden eine eindeutige Id.

Aus dieser Struktur ermittelt i-doit dann automatisch den finalen Identifier hier am Beispiel von **intel-1** und **intel-2** verdeutlicht.

Hier ein beispielhafter Push-Request zur Erstellung eines Objektes über den neuen Endpunkt.

```json
{
    "jsonrpc": "2.0",
    "id": 1,
    "params": {
        ...
        "apikey": "{{API_KEY}}",
        <--- Objekt Ebene
        "extType": "datenquelle-1",
        "extId": "windows-server100",
        "title": "Server 100",
        "class": "C__OBJTYPE__SERVER",
        Objekt Ebene --->
        "data": {
            <--- Kategorie Ebene
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
            Kategorie Ebene --->
        }
    }
}
```

und erfasst das ganze in einer internen Mapping Tabelle.

[![Mapping Tabelle](../../../assets/images/de/i-doit-pro-add-ons/api/methods/cmdb.external/mapping-table.png)](../../../assets/images/de/i-doit-pro-add-ons/api/methods/cmdb.external/mapping-table.png)

### Scoping

Das Scoping soll sicherstellen, dass sich zwei Datenquellen nicht in die Quere kommen, da wir folgendes annehmen:

!!! note "Wenn unterschiedliche Datenquellen zugleich ihre Daten in i-doit einspeisen, so nehmen wir an, dass jede Datenquelle für sich genommen führend ist und als Single-Source-of-Truth betrachtet werden kann. Das heisst im Umkehrschluss, dass ein Objekt niemals zugleich in mehreren Datenquellen auftauchen kann."

[![Scoping](../../../assets/images/de/i-doit-pro-add-ons/api/methods/cmdb.external/scoping.png)](../../../assets/images/de/i-doit-pro-add-ons/api/methods/cmdb.external/scoping.png)

Basierend auf dieser Annahme implementiert i-doit daher folgendes Sicherheitsnetz:

-   Es gibt eine klare Zuweisung von Objekten zu Datenquellen
    -   Ein Objekt kann lediglich einer Datenquelle zugewiesen sein
        -   Ein Datenquelle-Objekt kann nicht von mehreren Datenquellen verwaltet werden
    -   Eine weitere Feinheit: Bestehende Objekte können einer Datenquelle nicht manuell zugewiesen werden

Auf der Kategorie Ebene haben wir ein ähnliches Handling:

-   Klare Zuweisung von Kategorieeinträgen zu Datenquellen
-   Eine Besonderheit bei MV: **MV-Einträge können manuell bearbeitet werden auch wenn sie aus einer Datenquelle kommen**
-   Der umgekehrte Weg jedoch, also manuell erstellte multi-value Kategorieeinträge bleiben vor dem Zugriff der Datenquelle geschützt
-   Aber auch hier gibt es eine Ausnahme, nämlich bei single-value Kategorien: **Manuell erstellte single-value Kategorieeinträge können durch Datenquellen manipuliert werden**
-   Rechts unten gibt es zudem noch einen unerlaubten und nicht abbildbaren Case: Die Datenquelle **"datenquelle-2"** kann keinen CPU-Eintrag in einem Objekt besitzen, was durch die **"datenquelle-1"** verwaltet wird

## cmdb.external.push.v2

Erstellung und Aktualisierung von Objekten und Kategorieeinträgen durch einen einzelnen Request.
Zudem erlauben uns verschiedene **"strategies"** die Abbildung verschiedener Use-Cases, wobei aber erwähnt werden sollte, dass diese lediglich auf der Kategorieschicht angesiedelt sind.

Außerdem verfügt auch die Push-API über Prozeduren, um Human-Readable Werte in ihre technische Repräsentation zu überführen, beispielsweise Dialog+, Objekt-Referenzen oder Kategoriereferenzen.
Und ganz wichtig:

!!! note "Durch die Verwendung der Push-API muss man nicht auf generelle CMDB-Strukturen verzichten, wie zum Beispiel das Rechtesystem, Validierungsregel oder das Logbuch. Alles greift wie bisher!"

| Strategy | Eintrag existiert single-value | Eintrag existiert multi-value | Eintrag existiert nicht single-value | Eintrag existiert nicht multi-value |
| --- | --- | --- | --- | --- |
| **create** | :material-close: wird übersprungen | :material-close: wird übersprungen | :material-plus: wird erstellt | :material-plus: wird erstellt |
| **update** | :material-pencil: wird aktualisiert | :material-pencil: wird aktualisiert | :material-plus: wird erstellt | :material-plus: wird erstellt |
| **overwrite** | :material-pencil: wird aktualisiert | :material-pencil: wird aktualisiert | :material-plus: wird erstellt | :material-plus: wird erstellt |

!!! warning "**overwrite** löscht alle multi-value Einträge aus i-doit, die nicht im Request enthalten sind. Bestehende werden aktualisiert oder erstellt."

### Request parameters

| Key | JSON data type | Required | Description |
| --- | --- | --- | --- |
| **extType** | String | Ja | Datenquelle, zum Beispiel: **datenquelle-1** |
| **extId** | String | Ja | Objekt, zum Beispiel: **windows-server100** |
| **class** | String | Ja | Objekttyp, zum Beispiel: **C__OBJTYPE__SERVER** |
| **title** | String | Ja | Objekt Bezeichnung, zum Beispiel: **Server 100** |

### Example

=== "Request"

    ```json
    {
        "jsonrpc": "2.0",
        "id": 1,
        "method": "cmdb.external.push.v2",
        "params": {
            "apikey": "a9d55pg9yts88488",
            "extType": "datenquelle-1",
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
                                "purpose": "Doku",
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
                                    "extType": "datenquelle-1",
                                    "extId": "CITY_OBJECT_DUESSELDORF"
                            }
                        }
                    }
                }
            }
        }
    }
    ```

=== "Response"

    ```json
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "messages": [
                {
                    "message": "External id datenquelle-1/windows-server100 not found. Object with id 770 created.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.134886+02:00"
                },
                {
                    "message": "Preparing data for category 'CPU' using strategy create.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.135378+02:00"
                },
                {
                    "message": "Handling multi value category.",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.135431+02:00"
                },
                {
                    "message": "New category entry 104 created for custom id intel-1.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.138370+02:00"
                },
                {
                    "message":"Original: {\"title\":\"5th Generation Intel\® Xeon\® Scalable Processors #1\",\"manufacturer\":\"Intel\",\"cores\":52,\"type\":\"8571N\",\"frequency\":\"2.4\",\"frequency_unit\":\"GHz\"}",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.139098+02:00"
                },
                {
                    "message":"Normalized: {\"title\":\"5th Generation Intel\® Xeon\® Scalable Processors #1\",\"manufacturer\":2,\"type\":33,\"frequency\":\"2.4\",\"frequency_unit\":3,\"cores\":52}",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.144378+02:00"
                },
                {
                    "message":"Final: {\"data_id\":104,\"properties\":{\"title\":{\"value\":\"5th Generation Intel\® Xeon\® Scalable Processors #1\"},\"manufacturer\":{\"value\":2},\"type\":{\"value\":33},\"frequency\":{\"value\":\"2.4\"},\"frequency_unit\":{\"value\":3},\"cores\":{\"value\":52},\"description\":{\"value\":null}}}",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.145200+02:00"
                },
                {
                    "message": "New category entry 105 created for custom id intel-2.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.146411+02:00"
                },
                {
                    "message":"Original: {\"title\":\"5th Generation Intel\® Xeon\® Scalable Processors #2\",\"manufacturer\":\"Intel\",\"cores\":52,\"type\":\"8571N\",\"frequency\":\"2.4\",\"frequency_unit\":\"GHz\"}",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.147024+02:00"
                },
                {
                    "message":"Normalized: {\"title\":\"5th Generation Intel\® Xeon\® Scalable Processors #2\",\"manufacturer\":2,\"type\":33,\"frequency\":\"2.4\",\"frequency_unit\":3,\"cores\":52}",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.147884+02:00"
                },
                {
                    "message":"Final: {\"data_id\":105,\"properties\":{\"title\":{\"value\":\"5th Generation Intel\® Xeon\® Scalable Processors #2\"},\"manufacturer\":{\"value\":2},\"type\":{\"value\":33},\"frequency\":{\"value\":\"2.4\"},\"frequency_unit\":{\"value\":3},\"cores\":{\"value\":52},\"description\":{\"value\":null}}}",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.148551+02:00"
                },
                {
                    "message": "Preparing data for category 'General' using strategy update.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.148807+02:00"
                },
                {
                    "message": "Handling single value category.",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.148844+02:00"
                },
                {
                    "message": "New external id windows-server1001_TAGS reference created for category entry id 768.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.150471+02:00"
                },
                {
                    "message": "Original: {\"tag\":[\"server\",\"monitoring\",\"api2.0\"],\"purpose\":\"Doku\",\"type\":\"C__OBJTYPE__SERVER\"}",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.150502+02:00"
                },
                {
                    "message": "Normalized: {\"purpose\":5,\"type\":\"C__OBJTYPE__SERVER\",\"tag\":[1,4,8]}",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.153905+02:00"
                },
                {
                    "message": "Final: {\"data_id\":768,\"properties\":{\"purpose\":{\"value\":5},\"type\":{\"value\":\"C__OBJTYPE__SERVER\"},\"tag\":{\"value\":[1,4,8]},\"title\":{\"value\":\"Server 100\"},\"status\":{\"value\":\"2\"},\"created\":{\"value\":\"2024-04-09 15:53:56\"},\"created_by\":{\"value\":\"admin\"},\"changed_by\":{\"value\":\"admin\"},\"category\":{\"value\":null},\"sysid\":{\"value\":\"SYSID_1712671606\"},\"cmdb_status\":{\"value\":\"6\"},\"description\":{\"value\":null}}}",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.156163+02:00"
                },
                {
                    "message": "Preparing data for category 'Location' using strategy create.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.156514+02:00"
                },
                {
                    "message": "Handling single value category.",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.156542+02:00"
                },
                {
                    "message": "New category entry 167 created for custom id CITY_OBJECT_DUESSELDORF.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.159102+02:00"
                },
                {
                    "message":"Original: {\"parent\":{\"title\":\"D\üsseldorf\",\"class\":\"C__OBJTYPE__CITY\",\"extType\":\"datenquelle-1\",\"extId\":\"CITY_OBJECT_DUESSELDORF\"}}",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.159744+02:00"
                },
                {
                    "message": "Normalized: {\"parent\":771}",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.169216+02:00"
                },
                {
                    "message": "Final: {\"data_id\":167,\"properties\":{\"parent\":{\"value\":771},\"option\":{\"value\":null},\"insertion\":{\"value\":null},\"pos\":{\"value\":null},\"snmp_syslocation\":{\"value\":null},\"description\":{\"value\":null}}}",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.174171+02:00"
                },
                {
                    "message": "Sync C__CATG__CPU in object 770 with import status 2.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.175085+02:00"
                },
                {
                    "message": "Sync C__CATG__CPU in object 770 with import status 2.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.176118+02:00"
                },
                {
                    "message": "Sync C__CATG__GLOBAL in object 770 with import status 2.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.176866+02:00"
                },
                {
                    "message": "Sync C__CATG__LOCATION in object 770 with import status 2.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.185615+02:00"
                }
            ],
            "success": true
        }
    }
    ```

## cmdb.external.pull.v2

Lesen von CMDB-Daten basierend auf dem "External Identifier".
Beim Pull bestimmt der External Identifier die abgefragten Daten zum Beispiel:

| extType | extId | Aktion |
| --- | --- | --- |
| datenquelle-1 | null | Liest alle Objekte und jegliche Kategoriedaten |
| datenquelle-1 | windows-server100 | Liest windows100 und jegliche Kategoriedaten |
| datenquelle-1 / windows-server100 / C__CATG__CPU | null | Liest windows100 und alle CPU-Einträge |
| datenquelle-1 / windows-server100 / C__CATG__CPU | intel-1 | Liest windows100 und nur den CPU-Eintrag intel-1 |

### Request parameters

| Key | JSON data type | Required | Description |
| --- | --- | --- | --- |
| **extType** | String | Ja | Datenquelle, zum Beispiel: **datenquelle-1** |
| **extId** | String | Ja | Objekt, zum Beispiel: **windows-server100** |

### Example

=== "Request"

    ```json
    {
        "jsonrpc": "2.0",
        "id": 1,
        "method": "cmdb.external.pull.v2",
        "params": {
            "apikey": "xxx",
            "extType": "datenquelle-1",
            "extId": "windows-server100"
        }
    }
    ```

=== "Response"

    ```json
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": [
            {
                "extId": "windows-server100",
                "extType": "datenquelle-1",
                "id": 770,
                "title": "Server 100",
                "sysid": "SYSID_1712671606",
                "objecttype": 5,
                "type_title": "Server",
                "type_icon": "images/axialis/hardware-network/server-single.svg",
                "status": 0,
                "cmdb_status": 0,
                "data": {
                    "C__CATG__CPU": [
                        {
                            "extId": "intel-1",
                            "extType": "datenquelle-1/windows-server100/C__CATG__CPU",
                            "id": "104",
                            "objID": "770",
                            "title": "5th Generation Intel® Xeon® Scalable Processors #1",
                            "manufacturer": {
                                "id": "2",
                                "title": "Intel",
                                "const": null,
                                "title_lang": "Intel"
                            },
                            "type": {
                                "id": "33",
                                "title": "8571N",
                                "const": null,
                                "title_lang": "8571N"
                            },
                            "frequency": {
                                "title": 2.4
                            },
                            "frequency_unit": {
                                "id": "3",
                                "title": "GHz",
                                "const": "C__FREQUENCY_UNIT__GHZ",
                                "title_lang": "GHz"
                            },
                            "cores": "52",
                            "description": ""
                        },
                        {
                            "extId": "intel-2",
                            "extType": "datenquelle-1/windows-server100/C__CATG__CPU",
                            "id": "104",
                            "objID": "770",
                            "title": "5th Generation Intel® Xeon® Scalable Processors #1",
                            "manufacturer": {
                                "id": "2",
                                "title": "Intel",
                                "const": null,
                                "title_lang": "Intel"
                            },
                            "type": {
                                "id": "33",
                                "title": "8571N",
                                "const": null,
                                "title_lang": "8571N"
                            },
                            "frequency": {
                                "title": 2.4
                            },
                            "frequency_unit": {
                                "id": "3",
                                "title": "GHz",
                                "const": "C__FREQUENCY_UNIT__GHZ",
                                "title_lang": "GHz"
                            },
                            "cores": "52",
                            "description": ""
                        }
                    ],
                    "C__CATG__GLOBAL": [
                        {
                            "extId": "windows-server1001_TAGS",
                            "extType": "datenquelle-1/windows-server100/C__CATG__GLOBAL",
                            "id": "770",
                            "objID": "770",
                            "title": "Server 100",
                            "status": {
                                "id": "2",
                                "title": "Normal",
                                "const": "",
                                "title_lang": "LC__CMDB__RECORD_STATUS__NORMAL"
                            },
                            "created": "2024-04-09 15:53:56",
                            "created_by": "admin",
                            "changed": "2024-04-09 15:53:56",
                            "changed_by": "admin",
                            "purpose": {
                                "id": "5",
                                "title": "Doku",
                                "const": null,
                                "title_lang": "Doku"
                            },
                            "category": null,
                            "sysid": "SYSID_1712671606",
                            "cmdb_status": {
                                "id": "6",
                                "title": "in operation",
                                "const": "C__CMDB_STATUS__IN_OPERATION",
                                "title_lang": "LC__CMDB_STATUS__IN_OPERATION"
                            },
                            "type": {
                                "id": "5",
                                "title": "Server",
                                "const": "C__OBJTYPE__SERVER",
                                "title_lang": "LC__CMDB__OBJTYPE__SERVER"
                            },
                            "tag": [
                                {
                                    "id": "1",
                                    "title": "server"
                                },
                                {
                                    "id": "4",
                                    "title": "monitoring"
                                },
                                {
                                    "id": "8",
                                    "title": "api2.0"
                                }
                            ],
                            "description": ""
                        }
                    ],
                    "C__CATG__LOCATION": [
                        {
                            "extId": "CITY_OBJECT_DUESSELDORF",
                            "extType": "datenquelle-1/windows-server100/C__CATG__LOCATION",
                            "id": "167",
                            "objID": "770",
                            "location_path": "771",
                            "parent": {
                                "id": "771",
                                "title": "Düsseldorf",
                                "sysid": "SYSID_1712671607",
                                "type": "C__OBJTYPE__CITY",
                                "type_title": "City",
                                "location_path": "Düsseldorf"
                            },
                            "option": null,
                            "insertion": null,
                            "pos": null,
                            "gps": {
                                "0": null,
                                "1": null,
                                "latitude": null,
                                "longitude": null
                            },
                            "latitude": null,
                            "longitude": null,
                            "snmp_syslocation": "",
                            "description": ""
                        }
                    ]
                }
            }
        ]
    }
    ```

*[DQ]: Datenquellen
