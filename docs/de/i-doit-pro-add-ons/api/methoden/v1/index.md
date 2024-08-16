# API Methoden

In diesem Artikel erläutern wir die i-doit [JSON-RPC API](../../index.md) im Detail. Wenn Sie wissen wollen, welche Parameter für jede Methode gesetzt werden müssen/können und wie eine typische Antwort aussieht, ist dies die richtige Ressource.

## Namespace [idoit]

Dieser Namensraum ist für gängige Methoden reserviert.

### idoit.search

??? example "idoit.search"

    Suchen in i-doit pro

    **Anfrage Parameter**

    | Key   | JSON Datentyp | Erforderlich | Beschreibung                                  |
    | ----- | ------------- | ------------ | --------------------------------------------- |
    | **q** | String        | Ja           | Abfrage, zum Beispiel: **"My little server"** |

    **Antwort**

    JSON-Schlüsselergebnis enthält ein Array von JSON-Objekten. Jedes Objekt enthält ein Suchergebnis.

    | Key            | JSON Datentyp | Beschreibung                                     |
    | -------------- | ------------- | ------------------------------------------------ |
    | **documentID** | String        | Identifikationsnummer                            |
    | **key**        | String        | Attribut, das sich auf die Abfrage bezieht       |
    | **value**      | String        | Wert, der sich auf die Abfrage bezieht           |
    | **type**       | String        | [Add-on](../../index.md) oder Kernfunktionalität |
    | **link**       | String        | Relative URL, die direkt zum Suchergebnis führt  |
    | **score**      | Integer       | Punktevergabe (veraltet)                         |

    **Anfrage**<br>
    Body:

    ```json
    {
        "version": "2.0",
        "method": "idoit.search",
        "params": {
            "q": "My little server",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```

    **Antwort**<br>
    Body:

    ```json
    {
        "jsonrpc": "2.0",
        "result": [
            {
                "documentId": "1000",
                "key": "Virtual Host > Global > Title",
                "value": "My little server",
                "type": "cmdb",
                "link": "/?objID=1000&catgID=1&cateID=1029&highlight=My%20little%20server",
                "score": 0
            },
            […]
        ],
        "id": 1
    }
    ```

### idoit.version

??? example "idoit.version"

    Informationen über i-doit und den aktuellen Benutzer abrufen

    Anfrage Parameter

    Keine

    Antwort

    Das JSON-Schlüsselergebnis enthält ein JSON-Objekt mit verschiedenen Informationen über i-doit selbst und den aktuellen Benutzer.

    | Key                | JSON Datentyp | Beschreibung                                                                                |
    | ------------------ | ------------- | ------------------------------------------------------------------------------------------- |
    | **login**          | Array         | Informationen über den Benutzer, der die Anfrage durchgeführt hat; Einzelheiten siehe unten |
    | **login.userid**   | String        | Objekt-Identifikator (als numerische Zeichenfolge)                                          |
    | **login.name**     | String        | ObjektBezeichnung                                                                           |
    | **login.mail**     | String        | E-Mail-Adresse (siehe Kategorie Personen → Stammdaten)                                      |
    | **login.username** | String        | Benutzername (siehe Kategorie Personen → Login)                                             |
    | **login.tenant**   | String        | Name des Mandanten                                                                          |
    | **login.language** | String        | Sprache: "en" oder "de"                                                                     |
    | **version**        | String        | Version des installierten i-doit                                                            |
    | **step**           | String        | Dev, alpha oder beta release                                                                |
    | **type**           | String        | Variante: "OPEN" oder "PRO".                                                                |

    Beispiel

    **Anfrage**<br>
    Body:

    ```json
    {
        "version": "2.0",
        "method": "idoit.version",
        "params": {
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```

    **Antwort**<br>
    Body:

    ```json
    {
        "jsonrpc": "2.0",
        "result": {
            "login": {
                "userid": "9",
                "name": "i-doit Systemadministrator ",
                "mail": "i-doit@acme-it.example",
                "username": "admin",
                "mandator": "ACME IT Solutions",
                "language": "en"
            },
            "version": "1.10.2",
            "step": "",
            "type": "PRO"
        },
        "id": 1
    }
    ```

### idoit.constants

??? example "idoit.constants"

    Abrufen definierter Konstanten aus i-doit

    Anfrage Parameter

    Keine

    Antwort

    JSON-Schlüsselergebnis enthält ein JSON-Objekt.

    | Key              | JSON Datentyp | Beschreibung                                                                                                        |
    | ---------------- | ------------- | ------------------------------------------------------------------------------------------------------------------- |
    | **objectTypes**  | Object        | Liste der Objekttypen<br><br>Schlüssel: Objekttyp-Konstanten<br><br>Werte: Bezeichnung der übersetzten Objekttypen  |
    | **categories**   | Object        | Liste der globalen und spezifischen Kategorien                                                                      |
    | **categories.g** | Object        | Liste der globalen Kategorien<br><br>Schlüssel: Kategorie-Konstanten<br><br>Werte: übersetzte Kategorie Bezeichnung |
    | **categories.s** | Object        | Liste spezifischer Kategorien<br><br>Schlüssel: Kategorie-Konstanten<br><br>Werte: übersetzte Kategorie Bezeichnung |

    Beispiel
    **Anfrage**<br>
    Body:
    ```
    {
        "version": "2.0",
        "method": "idoit.constants",
        "params": {
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "objectTypes": {
                "C__OBJTYPE__SERVER": "Server",
                […]
            },
            "categories": {
                "g": {
                    "C__CATG__GLOBAL": "General",
                    "C__CATG__MODEL": "Model",
                    […]
                },
                "s": {
                    "C__CATS__MONITOR": "Monitor",
                    […]
                }
            }
        },
        "id": 1
    }
    ```

### idoit.login

??? example "idoit.login"

    Neue Sitzung erstellen

    Anfrage Parameter
    Keine

    Antwort

    JSON-Schlüsselergebnis enthält ein JSON-Objekt.

    | Key             | JSON Datentyp | Beschreibung                                                                  |
    | --------------- | ------------- | ----------------------------------------------------------------------------- |
    | **result**      | Boolean       | Sollte **true** sein                                                          |
    | **userid**      | String        | Objekt-Identifikator des eingeloggten Benutzers (als numerische Zeichenfolge) |
    | **name**        | String        | ObjektBezeichnung des eingeloggten Benutzers                                  |
    | **mail**        | String        | Attribut E-Mail-Adresse in der Kategorie Personen → Stammdaten                |
    | **username**    | String        | Attribut Benutzername in Kategorie Personen → Anmeldung                       |
    | **session-id**  | String        | Generierter Sitzungs-Identifikator                                            |
    | **client-id**   | String        | Mandanten Identifikator (als numerische Zeichenfolge)                         |
    | **client-name** | String        | Name des Mandanten                                                            |

    Beispiel

    **Anfrage**
    <br>Header:
    ```
    X-RPC-Auth-Username: admin
    X-RPC-Auth-Password: admin
    ```
    <br>Body:

    ```
    {
        "version": "2.0",
        "method": "idoit.login",
        "params": {
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```

    **Antwort**
    <br>Header:
    ```
    X-RPC-Auth-Session: d1obs9m3d2pd8651grptjhdjg3
    ```
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "result": true,
            "userid": "9",
            "name": "i-doit Systemadministrator ",
            "mail": "i-doit@acme-it.example",
            "username": "admin",
            "session-id": "d1obs9m3d2pd8651grptjhdjg3",
            "client-id": "1",
            "client-name": "ACME IT Solutions"
        },
        "id": 1
    }
    ```
    **Anfrage**
    <br>Header:
    ```
    X-RPC-Auth-Session: d1obs9m3d2pd8651grptjhdjg3
    ```
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "idoit.version",
        "params": {
            "apikey": "xxx",
            "language": "en"
        },
        "id": 2
    }
    ```
    **Antwort**
    <br>Header:
    ```
    X-RPC-Auth-Session: d1obs9m3d2pd8651grptjhdjg3
    ```
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "login": {
                "userid": "9",
                "name": "i-doit Systemadministrator ",
                "mail": "i-doit@acme-it.example",
                "username": "admin",
                "mandator": "ACME IT Solutions",
                "language": "de"
            },
            "version": "1.9",
            "step": "",
            "type": "PRO"
        },
        "id": 2
    }
    ```
    **Anfrage**
    <br>Header:
    ```
    X-RPC-Auth-Session: d1obs9m3d2pd8651grptjhdjg3
    ```
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "idoit.logout",
        "params": {
            "apikey": "xxx",
            "language": "en"
        },
        "id": 3
    }
    ```
    **Antwort**
    <br>Header:
    ```
    X-RPC-Auth-Session: d1obs9m3d2pd8651grptjhdjg3
    ```
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "message": "Logout successfull",
            "result": true
        },
        "id": 3
    }
    ```

### idoit.logout

??? example "idoit.logout"
    Aktuelle Sitzung schließen

    Anfrage Parameter

    Keine

    Antwort

    JSON-Schlüsselergebnis enthält ein JSON-Objekt.

    | Key     | JSON Datentyp | Beschreibung                         |
    | ------- | ------------- | ------------------------------------ |
    | message | String        | Sollte **"Logout successfull" **sein |
    | result  | Boolean       | Sollte **true **sein                 |

    Beispiel

    Siehe Methode idoit.login

Namespace [cmdb]
----------------

Dieser Namensraum bezieht sich auf alle CMDB-spezifischen Methoden wie die Behandlung von Objekten und Kategorien.

### cmdb.object.create

??? example "cmdb.object.create"

    Erstelle ein neues Objekt mit einigen optionalen Informationen

    Anfrage Parameter

    | Key             | JSON Datentyp   | Erforderlich | Beschreibung                                                                                                                                                                                  |
    | --------------- | --------------- | ------------ | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
    | **type**        | String\|Integer | Ja           | Objekttyp Konstante als String, zum Beispiel: "C\_\_OBJTYPE\_\_SERVER".<br><br>Alternativ z.B. Objekttyp-Identifikator als Ganzzahl: 5                                                        |
    | **title**       | String          | Ja           | Zum Beispiel Objekt Bezeichnung **"My little server"**                                                                                                                                        |
    | **category**    | String          | Nein         | Attribut-Kategorie in Kategorie Global                                                                                                                                                        |
    | **purpose**     | String          | Nein         | Attribut Zweck in der Kategorie Global, zum Beispiel: **"In production"**                                                                                                                     |
    | **cmdb_status** | String\|Integer | Nein         | Attribute CMDB-Status in der Kategorie Global z. B. durch seine Konstante (String): **"C__CMDB_STATUS__IN_OPERATION"**<br><br>Alternativ, durch seinen Bezeichner (Ganzzahl), zum Beispiel: 6 |
    | **description** | String          | Nein         | Attributbeschreibung in der Kategorie Global                                                                                                                                                  |

     Antwort

    JSON-Schlüsselergebnis enthält ein JSON-Objekt.

    | Key         | JSON Datentyp | Beschreibung                                   |
    | ----------- | ------------- | ---------------------------------------------- |
    | **id**      | String        | Objektbezeichner (als numerische Zeichenfolge) |
    | **message** | String        | Einige Informationen                           |
    | **success** | Boolean       | Sollte immer **true **sein                     |

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.object.create",
        "params": {
            "type": "C__OBJTYPE__SERVER",
            "title": "My little server",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "id": "42",
            "message": "Object was successfully created",
            "success": true
        },
        "id": 1
    }
    ```

### cmdb.object.read

??? example "cmdb.object.read"

    Lesen Sie allgemeine Informationen über eine Objekt

     Anfrage Parameter

    | Key    | JSON Datentyp | Erforderlich | Beschreibung                               |
    | ------ | ------------- | ------------ | ------------------------------------------ |
    | **id** | Integer       | Ja           | Objekt-Identifikator; zum Beispiel: **42** |

     Antwort

    JSON-Schlüsselergebnis enthält ein JSON-Objekt.

    | Key                   | JSON Datentyp | Beschreibung                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
    | --------------------- | ------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
    | **id**                | String        | Objektbezeichner (als numerische Zeichenfolge)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
    | **title**             | String        | Objekt Bezeichnung                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
    | **sysid**             | String        | SYSID (siehe Kategorie Global)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
    | **objecttype**        | String        | Objekt-Typ-Identifikator (als numerische Zeichenfolge)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
    | **created**           | String        | Datum der Erstellung; Format: Y-m-d H:i:s                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
    | **updated**           | String        | Datum der letzten Aktualisierung; Format: Y-m-d H:i:s<br><br>**Hinweis:** Dieser Schlüssel ist optional, da nicht jedes Objekt zuvor aktualisiert wurde.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
    | **type_title**        | String        | Übersetzter Name des Objekttyps                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
    | **type_icon**         | String        | Relative URL zum Objekttyp-Symbol                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
    | **status**            | String        | Objekt status:<br><br>*   **C__RECORD_STATUS__BIRTH  <br>    Status-ID = 1  <br>    Bezeichnung = Unfertig**<br>*   **C__RECORD_STATUS__NORMAL  <br>    Status-ID = 2**  <br>    **Bezeichnung = ****Normal**<br>*   **C__RECORD_STATUS__ARCHIVED  <br>    Status-ID = 3**  <br>    **Bezeichnung =** **Archiviert**<br>*   **C__RECORD_STATUS__DELETED  <br>    Status-ID = 4**  <br>    **Bezeichnung =** **Gelöscht**<br>*   **C__RECORD_STATUS__TEMPLATE  <br>    Status-ID = 6**  <br>    **Bezeichnung =** **Vorlage**<br>*   **C__RECORD_STATUS__MASS_CHANGES_TEMPLATE  <br>    Status-ID = 7**  <br>    **Bezeichnung =** **Vorlage für Massenänderung** |
    | **cmdb_status**       | String        | CMDB-Status (siehe Kategorie Global; als numerische Zeichenfolge)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
    | **cmdb_status_title** | String        | Übersetzter CMDB-Status (siehe Kategorie Global)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
    | **image**             | String        | URL zum Objektbild                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.object.read",
        "params": {
            "id": 1000,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
     {
        "jsonrpc": "2.0",
        "result": {
            "id": "1000",
            "title": "ESXi1",
            "sysid": "VHOST_1426338622",
            "objecttype": "58",
            "type_title": "Virtual host",
            "type_icon": "images/icons/silk/server_database.png",
            "status": "2",
            "cmdb_status": "6",
            "cmdb_status_title": "in operation",
            "created": "2015-03-14 14:10:22",
            "updated": "2017-04-26 10:22:20",
            "image": "http://demo.synetics.int/pro/images/objecttypes/server.png"
        },
        "id": 1
    }
    ```

### cmdb.object.update

??? example "cmdb.object.update"

    Objekt ändern, z.B. Bezeichnung eines Objekts

     Anfrage Parameter

    | Key       | JSON Datentyp | Erforderlich | Description                                                     |
    | --------- | ------------- | ------------ | --------------------------------------------------------------- |
    | **id**    | Integer       | Ja           | Objekt-Identifikator, zum Beispiel: **42**                      |
    | **title** | String        | Ja           | Neue Objekt Bezeichnung, zum Beispiel: **"Your little server"** |

     Antwort

    JSON-Schlüsselergebnis enthält ein JSON-Objekt.

    | Key         | JSON Datentyp | Beschreibung                                        |
    | ----------- | ------------- | --------------------------------------------------- |
    | **message** | String        | Sollte "Object title was successfully updated" sein |
    | **success** | Boolean       | Sollte true sein                                    |

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.object.update",
        "params": {
            "id": 42,
            "title": "Your little server",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "message": "Object title was successfully updated",
            "success": true
        },
        "id": 1
    }
    ```

### cmdb.object.delete

??? example "cmdb.object.delete"

    Löscht ein Objekt

     Anfrage Parameter

    | Key        | JSON Datentyp | Erforderlich | Beschreibung                                                                                                                                                                                                                       |
    | ---------- | ------------- | ------------ | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
    | **id**     | Integer       | Ja           | Objekt-Identifikator, zum Beispiel: **42**                                                                                                                                                                                         |
    | **status** | String        | Ja           | Status Konstante:<br><br>*   **"C__RECORD_STATUS__ARCHIVED"**: Archiviertes Objekt<br>*   **"C__RECORD_STATUS__DELETED"**: Objekt als gelöscht markieren<br>*   **"C__RECORD_STATUS__PURGE"**: Objekt aus der Datenbank bereinigen |

    Antwort

    JSON-Schlüsselergebnis enthält ein JSON-Objekt.

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.object.delete",
        "params": {
            "id": 42,
            "status": "C__RECORD_STATUS__ARCHIVED",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "message": "Object(s) successfully archived!",
            "success": true
        },
        "id": 1
    }
    ```

### cmdb.object.recycle

??? example "cmdb.object.recycle"

    Wiederherstellen eines Objekts

    Anfrage Parameter

    | **Key**    | **JSON Datentyp** | Erforderlich | Beschreibung                                |
    | ---------- | ----------------- | ------------ | ------------------------------------------- |
    | **object** | Integer           | Ja           | Objekt-Identifikator, zum Beispiel: **464** |

    Antwort

    JSON-Schlüsselergebnis enthält ein JSON-Objekt.

    | **Key**     | **JSON Datentyp** | Beschreibung         |
    | ----------- | ----------------- | -------------------- |
    | **success** | Boolean           | Sollte **true** sein |
    | **message** | String            | Einige Informationen |

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.object.recycle",
        "params": {
            "object": 464,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Object 464 has been recycled."
        }
    }
    ```

### cmdb.object.archive

??? example "cmdb.object.archive"

    [Archiviert](../../../../grundlagen/lebens-und-dokumentationszyklus.md) ein Objekt

     Anfrage Parameter

    | **Key**    | **JSON Datentyp** | Erforderlich | Beschreibung                                |
    | ---------- | ----------------- | ------------ | ------------------------------------------- |
    | **object** | Integer           | Yes          | Objekt-Identifikator, zum Beispiel: **464** |

     **Antwort**

    JSON-Schlüsselergebnis enthält ein JSON-Objekt.

    | **Key**     | **JSON Datentyp** | Beschreibung         |
    | ----------- | ----------------- | -------------------- |
    | **success** | Boolean           | Sollte true sein     |
    | **message** | String            | Einige Informationen |
    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.object.archive",
        "params": {
            "object": 464,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Object 464 has been archived."
        }
    }
    ```

### cmdb.object.purge

??? example "cmdb.object.purge"

    [Löscht](../../../../grundlagen/lebens-und-dokumentationszyklus.md) ein Objekt

     Anfrage Parameter

    | **Key**    | **JSON Datentyp** | Erforderlich | Beschreibung                                |
    | ---------- | ----------------- | ------------ | ------------------------------------------- |
    | **object** | Integer           | Ja           | Objekt-Identifikator, zum Beispiel: **464** |

     **Antwort**

    JSON-Schlüsselergebnis enthält ein JSON-Objekt.

    | **Key**     | **JSON Datentyp** | Beschreibung         |
    | ----------- | ----------------- | -------------------- |
    | **success** | Boolean           | Sollte true sein     |
    | **message** | String            | Einige Informationen |

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.object.purge",
        "params": {
            "object": 464,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Object 464 has been purged."
        }
    }
    ```

### cmdb.object.markAsTemplate

??? example "cmdb.object.markAsTemplate"

    Setze den Objekt Zustand auf [Vorlage](../../../../effizientes-dokumentieren/templates.md)

    Anfrage Parameter

    | **Key**    | **JSON Datentyp** | Erforderlich | Beschreibung                                |
    | ---------- | ----------------- | ------------ | ------------------------------------------- |
    | **object** | Integer           | Ja           | Objekt-Identifikator, zum Beispiel: **465** |

    **Antwort**

    JSON-Schlüsselergebnis enthält ein JSON-Objekt.

    | **Key**     | **JSON Datentyp** | Beschreibung         |
    | ----------- | ----------------- | -------------------- |
    | **success** | Boolean           | Sollte true sein     |
    | **message** | String            | Einige Informationen |

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.object.markAsTemplate",
        "params": {
            "object": 465,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Object 465 has been marked as template."
        }
    }
    ```

### cmdb.object.markAsMassChangeTemplate

??? example "cmdb.object.markAsMassChangeTemplate"

    Setze den Objekt Zustand auf [Massenänderung](../../../../effizientes-dokumentieren/massenaenderung.md) [Template](../../../../effizientes-dokumentieren/templates.md)

    Anfrage Parameter

    | **Key**    | **JSON Datentyp** | Erforderlich | Beschreibung                                |
    | ---------- | ----------------- | ------------ | ------------------------------------------- |
    | **object** | Integer           | Ja           | Objekt-Identifikator, zum Beispiel: **465** |

    **Antwort**

    JSON-Schlüsselergebnis enthält ein JSON-Objekt.

    | **Key**     | **JSON Datentyp** | Beschreibung         |
    | ----------- | ----------------- | -------------------- |
    | **success** | Boolean           | Sollte true sein     |
    | **message** | String            | Einige Informationen |

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.object.markAsMassChangeTemplate",
        "params": {
            "object": 465,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Object 465 has been marked as mass change template."
        }
    }
    ```

### cmdb.objects.read

??? example "cmdb.objects.read"

    Hole eine Liste von Objekten

    Anfrage Parameter

    | Key            | JSON Datentyp | Erforderlich | Beschreibung                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
    | -------------- | ------------- | ------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
    | **categories** | Array         | Nein         | Hier kann nach einer Liste oder einer Kategorie, in Form von Kategorie Konstante/n, gefiltert werden.  <br>"categories": ["C__CATG__MY_CUSTOM_CATEGORY"]  <br>"categories": ["C__CATG__MY_CUSTOM_CATEGORY", "C__CATG__MY_SECOND_CATEGORY"]                                                                                                                                                                                                                                                                                                                                                                                     |
    | **filter**     | Array         | Nein         | Liste der Objekte filtern; siehe unten für eine vollständige Liste der Optionen                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
    | **limit**      | Mixed         | Nein         | Maximale Anzahl von Objekten (als ganze Zahl), z.B. die ersten tausend Objekte abrufen: **1000**<br><br>Kombinieren Sie diese Grenze mit einem Offset (als Zeichenkette), z.B. holen Sie die nächsten tausend Objekte: **"1000,1000"**                                                                                                                                                                                                                                                                                                                                                                                         |
    | **order_by**   | String        | Nein         | Ordnen Sie das Ergebnis nach (siehe Filter für weitere Details, was jeder Wert bedeutet):<br><br>*   **"isys_obj_type__id"**,<br>*   **"isys_obj__isys_obj_type__id"**,<br>*   **"type"**,<br>*   **"isys_obj__title"**,<br>*   **"title"**,<br>*   **"isys_obj_type__title"**,<br>*   **"type_title"**,<br>*   **"isys_obj__sysid"**,<br>*   **"sysid"**,<br>*   **"isys_cats_person_list__first_name"**,<br>*   **"first_name"**,<br>*   **"isys_cats_person_list__last_name"**,<br>*   **"last_name"**,<br>*   **"isys_cats_person_list__mail_address"**,<br>*   **"email"**,<br>*   **"isys_obj__id"**, or<br>*   **"id"** |
    | **sort**       | String        | Nein         | Nur sinnvoll in Kombination mit Schlüssel order\_by; erlaubte Werte sind entweder "ASC" (aufsteigend) oder "DESC" (absteigend)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |

    Filter

    | Key            | JSON Datentyp   | Erforderlich | Beschreibung                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
    | -------------- | --------------- | ------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
    | **ids**        | Array           | Nein         | Liste von Objekt-Identifikatoren (als ganze Zahlen), zum Beispiel: **1, 2, 3**                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
    | **type**       | Integer\|String | Nein         | Objekttyp-Identifikator (als ganze Zahl), zum Beispiel: **5**<br><br>Alternativ Objekttyp-Konstante (als String), z.B.: **"C__OBJTYPE__SERVER"**                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
    | **title**      | String          | Nein         | Objekt Bezeichnung (siehe Attribut Bezeichnung in Kategorie Global), z.B.: **"My little server"**                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
    | **type_title** | String          | Nein         | Übersetzter Name des Objekttyps, zum Beispiel: **"Server"**<br><br>**Hinweis:** Stellen Sie in Ihrer Anfrage eine geeignete Sprache ein..                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
    | **sysid**      | String          | Nein         | **SYSID** (siehe Kategorie Global), zum Beispiel: **"SRV_101010"**                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
    | **first_name** | String          | Nein         | Vorname eines Objekts vom Typ Personen (siehe Attribut Vorname in der Kategorie Personen → Stammdaten), z.B.: **"John"**                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
    | **last_name**  | String          | Nein         | Nachname eines Objekts vom Typ Personen (siehe Attribut Nachname in der Kategorie Personen → Stammdaten), z.B.: **"Doe"**                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
    | **email**      | String          | Nein         | Primäre E-Mail-Adresse eines Objekts vom Typ Personen, Personengruppen oder Organisation (siehe Attribut E-Mail-Adresse in den Kategorien Personen/Personengruppen/Organisation → Stammdaten), zum Beispiel: **"john.doe@example.com"**                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
    | **type_group** | String          | Nein         | Filter nach der Objekt Typ Gruppe z.B. Infrastructure oder Andere:  <br>"**C__OBJTYPE_GROUP__INFRASTRUCTURE**"                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
    | **status**     | String          |              | Filter nach Status der Objekte z.B. Normal oder Archiviert:<br><br>*   **C__RECORD_STATUS__BIRTH  <br>    Status-ID = 1  <br>    Bezeichnung = Unfertig**<br>*   **C__RECORD_STATUS__NORMAL  <br>    Status-ID = 2**  <br>    **Bezeichnung = ****Normal**<br>*   **C__RECORD_STATUS__ARCHIVED  <br>    Status-ID = 3**  <br>    **Bezeichnung =** **Archiviert**<br>*   **C__RECORD_STATUS__DELETED  <br>    Status-ID = 4**  <br>    **Bezeichnung =** **Gelöscht**<br>*   **C__RECORD_STATUS__TEMPLATE  <br>    Status-ID = 6**  <br>    **Bezeichnung =** **Vorlage**<br>*   **C__RECORD_STATUS__MASS_CHANGES_TEMPLATE  <br>    Status-ID = 7**  <br>    **Bezeichnung =** **Vorlage für Massenänderung** |

    Sie können eine beliebige Kombination von Filtern verwenden. Filter sind logisch mit UND verknüpft. Eine gültige Kombination könnte sein: "Gib mir alle Server, die den gleichen Hostnamen haben."

    Antwort

    JSON-Schlüsselergebnis enthält ein Array von JSON-Objekten. Jedes Objekt enthält ein Bündel von Informationen über ein i-doit-Objekt.

    | Key                   | JSON Datentyp | Beschreibung                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
    | --------------------- | ------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
    | **id**                | String        | Objektbezeichner (als numerische Zeichenfolge)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
    | **title**             | String        | Objekt Bezeichnung                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
    | **sysid**             | String        | SYSID (siehe Kategorie Global)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
    | **type**              | String        | Objekt-Typ-Identifikator (als numerische Zeichenfolge)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
    | **created**           | String        | Datum der Erstellung; Format: Y-m-d H:i:s                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
    | **updated**           | String        | Datum der letzten Aktualisierung; Format: Y-m-d H:i:s<br><br>**Hinweis:** Dieser Schlüssel ist optional, da nicht jedes Objekt zuvor aktualisiert wurde..                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
    | **type_title**        | String        | Übersetzter Name des Objekttyps                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
    | **type_group_title**  | String        | Übersetzter Name der Objekttypgruppe                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
    | **status**            | String        | Objekt status:<br><br>*   **C__RECORD_STATUS__BIRTH  <br>    Status-ID = 1  <br>    Bezeichnung = Unfertig**<br>*   **C__RECORD_STATUS__NORMAL  <br>    Status-ID = 2**  <br>    **Bezeichnung = ****Normal**<br>*   **C__RECORD_STATUS__ARCHIVED  <br>    Status-ID = 3**  <br>    **Bezeichnung =** **Archiviert**<br>*   **C__RECORD_STATUS__DELETED  <br>    Status-ID = 4**  <br>    **Bezeichnung =** **Gelöscht**<br>*   **C__RECORD_STATUS__TEMPLATE  <br>    Status-ID = 6**  <br>    **Bezeichnung =** **Vorlage**<br>*   **C__RECORD_STATUS__MASS_CHANGES_TEMPLATE  <br>    Status-ID = 7**  <br>    **Bezeichnung =** **Vorlage für Massenänderung** |
    | **cmdb_status**       | String        | CMDB-Status (siehe Kategorie Global; als numerische Zeichenfolge)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
    | **cmdb_status_title** | String        | Übersetzter CMDB-Status (siehe Kategorie Global)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
    | **image**             | String        | URL zum Objektbild                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
    | **categories**        | Mixed         | Optionale Attribute mit Werten abhängig von der angeforderten Kategorie                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          |

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.objects.read",
        "params": {
            "filter": {
                "type": "C__OBJTYPE__SERVER",
                "status": "C__RECORD_STATUS__ARCHIVED"
            },
            "limit": "0,10",
            "order_by": "title",
            "sort": "ASC",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": [
            {
                "id": "123",
                "title": "My little server",
                "sysid": "SRV_101010",
                "type": "5",
                "created": "2017-03-07 15:57:48",
                "updated": "2017-05-10 15:40:27",
                "type_title": "Server",
                "type_group_title": "Hardware",
                "status": "3",
                "cmdb_status": "6",
                "cmdb_status_title": "in operation",
                "image": "https://demo.i-doit.com/images/objecttypes/empty.png"
            },
            […]
        ]
    }
    ```

### cmdb.category.save

??? example "cmdb.category.save"

    Kategorieeintrag eines Objekts erstellen oder aktualisieren.

    Es funktioniert für multi-value Kategorien undsingle-value Kategorien.

    Anfrage Parameter

    | **Key**      | **JSON Datentyp** | Erforderlich | Beschreibung                                                                                                      |
    | ------------ | ----------------- | ------------ | ----------------------------------------------------------------------------------------------------------------- |
    | **object**   | Integer           | Ja           | Objekt-Identifikator, zum Beispiel: **456**                                                                       |
    | **category** | String            | Ja           | [Kategoriekonstante](../../../../grundlagen/kategorien-und-attribute.md), zum Beispiel: **"C\_\_CATG\_\_ACCESS"** |
    | **data**     | Object            | Ja           | {<br><br> "title":"Name of the access",<br><br>  "description":"description of the access"<br><br>}               |

    Antwort

    Objekt-Identifikator, zum Beispiel

    | **Key**     | **JSON Datentyp** | Beschreibung                                |
    | ----------- | ----------------- | ------------------------------------------- |
    | **success** | Boolean           | Sollte true sein                            |
    | **message** | String            | Einige Informationen                        |
    | **entry**   | Integer           | Eintragsidentifikator, zum Beispiel: **35** |

    Beispiel

    ***Create***
    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.save",
        "params": {
            "object": 456,
            "data": {
                "title":"Name of the access",
                "description":"description of the access"
            },
            "category": "C__CATG__ACCESS",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Category entry successfully saved",
            "entry": 35
        }
    }
    ```
    ***Update***
    **Anfrage**
    <br>Body:
    ```
    {
    "version": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "object": 456,
        "data": {
        "manufacturer": "Name of manufacturer",
        "title": "Name of model"
        },
        "category": "C__CATG__MODEL",
        "entry": 24,
        "apikey": "xxx",
        "language": "en"
    },
    "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
    "id": 1,
    "jsonrpc": "2.0",
    "result": {
        "success": true,
        "message": "Category entry successfully saved",
        "entry": 24
    }
    }
    ```

### cmdb.category.create

??? example "cmdb.category.create"

    Einen neuen Kategorieeintrag erstellen

    Anfrage Parameter

    | Key          | JSON Datentyp | Erforderlich | Beschreibung                                                                                                               |
    | ------------ | ------------- | ------------ | -------------------------------------------------------------------------------------------------------------------------- |
    | **objID**    | Integer       | ja           | Objekt-Identifikator, zum Beispiel: **42**                                                                                 |
    | **category** | String        | ja           | [Kategoriekonstante](../../../../grundlagen/kategorien-und-attribute.md), zum Beispiel: **C__CATG__MODEL**                 |
    | **data**     | Object        | ja           | Attribute mit ihren Werten, zum Beispiel: <br>``` { "manufacturer": "Name of manufacturer", "title": "Name of model" } ``` |


     Antwort

    JSON-Schlüsselergebnis enthält ein JSON-Objekt.

    | Key         | JSON Datentyp | Beschreibung                                        |
    | ----------- | ------------- | --------------------------------------------------- |
    | **id**      | String        | Eintragsidentifikator (als numerische Zeichenfolge) |
    | **message** | String        | Einige Informationen                                |
    | **success** | Boolean       | Sollte immer true sein                              |

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.create",
        "params": {
            "objID": 42,
            "data": {
                "manufacturer": "Name of manufacturer",
                "title": "Name of model"
            },
            "category": "C__CATG__MODEL",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "id": "123",
            "message": "Category entry successfully created.",
            "success": true
        },
        "id": 1
    }
    ```

### cmdb.category.read

??? example "cmdb.category.read"

    Lesen Sie einen oder mehrere Kategorieeinträge für ein Objekt

    Anfrage Parameter

    | Key          | JSON Datentyp | Erforderlich | Beschreibung                                                                                                                                                                              |
    | ------------ | ------------- | ------------ | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
    | **objID**    | Integer       | Ja           | Objekt-Identifikator, zum Beispiel: **42**                                                                                                                                                |
    | **category** | String        | Ja           | Kategorie-Konstante, zum Beispiel: **"C__CATG__MODEL"**                                                                                                                                   |
    | **status**   | Integer       | Ja           | ID des Status, zum Beispiel **2** für **normal  <br>**Wird der Parameter _status_ nicht angegeben, ist der Status auf **2** (normal) zu setzen. Dies entspricht dem bisherigen Verhalten. |

    Gültige Werte für **status**

    | Wert | Beschreibung                                                                   |
    | ---- | ------------------------------------------------------------------------------ |
    | -1   | Lese alle Einträge mit dem Status **normal**, **archiviert** oder **gelöscht** |
    | 2    | Lese alle Einträge mit dem Status **normal** (default)                         |
    | 3    | Lese alle Einträge mit dem Status **archiviert**                               |
    | 4    | Lese alle Einträge mit dem Status **gelöscht**                                 |

    Wird ein ungültiger Wert für _status_ angegeben, resultiert dies in der Response in einer Fehlermeldung:
    ```
    Status is invalid
    ```
    Antwort

    JSON-Schlüsselergebnis enthält ein Array von JSON-Objekten. Jedes Objekt enthält alle verfügbaren Attribute für die angeforderte Kategorie. **Hinweis**: Auch wenn es sich um eine single-value Kategorie oder eine multi-value Kategorie mit nur 1 Eintrag handelt, enthält das JSON-Schlüsselergebnis immer ein Array von JSON-Objekten.

    | Key       | JSON Datentyp | Beschreibung                                                            |
    | --------- | ------------- | ----------------------------------------------------------------------- |
    | **id**    | String        | Eingabe-Identifikator (als numerische Zeichenfolge)                     |
    | **objID** | String        | Objektbezeichner (als numerische Zeichenfolge)                          |
    | …         | Mixed         | Optionale Attribute mit Werten abhängig von der angeforderten Kategorie |

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.read",
        "params": {
            "objID": 1000,
            "category": "C__CATG__MODEL",
            "status": 2,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": [
            {
                "id": "74",
                "objID": "1000",
                "manufacturer": {
                    "id": "2",
                    "title": "Lenovo",
                    "const": null,
                    "title_lang": "Lenovo"
                },
                "title": {
                    "id": "1",
                    "title": "ThinkServer RD350",
                    "const": null,
                    "title_lang": "ThinkServer RD350"
                },
                "productid": "",
                "service_tag": "",
                "serial": "123000999888",
                "firmware": "",
                "description": ""
            }
        ],
        "id": 1
    }
    ```

### cmdb.category.update

??? example "cmdb.category.update"

    Kategorieeintrag eines Objekts aktualisieren

     Anfrage Parameter

    | Key                  | JSON Datentyp | Erforderlich | Beschreibung                                                         |
    | -------------------- | ------------- | ------------ | -------------------------------------------------------------------- |
    | **objID**            | Integer       | Ja           | Objekt-Identifikator, zum Beispiel: **42**                           |
    | **category**         | String        | Ja           | Kategorie-Konstante, zum Beispiel: **"C__CATG__MODEL"**              |
    | **data**             | Object        | Ja           | Attribute, die aktualisiert werden                                   |
    | **data.category_id** | Integer       | Ja           | Eintrags-Identifikator (nur bei multi-value Kategorien erforderlich) |

     Antwort

    JSON-Schlüsselergebnis enthält ein JSON-Objekt.

    | Key         | JSON Datentyp | Beschreibung                                              |
    | ----------- | ------------- | --------------------------------------------------------- |
    | **success** | Boolean       | Sollte true sein                                          |
    | **message** | String        | Sollte "**Category entry successfully** **saved**" lauten |

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.update",
        "params": {
            "objID": 42,
            "category": "C__CATG__MODEL",
            "data": {
                "serial": "123abc"
            },
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Category entry successfully saved"
        },
        "id": 1
    }
    ```

### cmdb.category.delete

??? example "cmdb.category.delete"

    Einen Kategorieeintrag für ein Objekt archivieren, als gelöscht markieren oder aus der Datenbank bereinigen

    Einschränkungen

    *   Dies funktioniert zur Zeit nur mit multi-value Kategorien.
    *   Sie können nur Kategorieeinträge archivieren, die einen normalen Status haben.
    *   Sie können nur Kategorieeinträge als gelöscht markieren, die archiviert sind.
    *   Sie können nur Kategorieeinträge aus der Datenbank bereinigen, die als gelöscht markiert sind..

    Anfrage Parameter

    | Key          | JSON Datentyp | Erforderlich | Beschreibung                                         |
    | ------------ | ------------- | ------------ | ---------------------------------------------------- |
    | **objID**    | Integer       | Ja           | Objekt-Identifikator, zum Beispiel: **42**           |
    | **category** | String        | Ja           | Kategorie-Konstante, zum Beispiel: **"C__CATG__IP"** |
    | **cateID**   | Integer       | Ja           | Eintrags-Identifikator, zum Beispiel: **3**          |

    Antwort

    JSON-Schlüsselergebnis enthält ein JSON-Objekt.

    | Key         | JSON Datentyp | Beschreibung         |
    | ----------- | ------------- | -------------------- |
    | **success** | Boolean       | Sollte true sein     |
    | **message** | String        | Einige Informationen |

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.delete",
        "params": {
            "objID": 42,
            "category": "C__CATG__IP",
            "cateID": 3,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Category entry '3' successfully deleted"
        },
        "id": 1
    }
    ```

### cmdb.category.quickpurge

??? example "cmdb.category.quickpurge"

    Wenn [Quickpurge](../../../../grundlagen/objekt-liste/erweiterte-einstellungen.md) aktiviert ist, bereinigen Sie einen Kategorieeintrag eines Objekts direkt aus der Datenbank.

    Anfrage Parameter

    | Key          | JSON Datentyp | Erforderlich | Beschreibung                                         |
    | ------------ | ------------- | ------------ | ---------------------------------------------------- |
    | **objID**    | Integer       | Ja           | Objekt-Identifikator, zum Beispiel: **42**           |
    | **category** | String        | Ja           | Kategorie-Konstante, zum Beispiel: **"C__CATG__IP"** |
    | **cateID**   | Integer       | Ja           | Eintrags-Identifikator, zum Beispiel: **3**          |

    Antwort

    JSON-Schlüsselergebnis enthält ein JSON-Objekt.

    | Key         | JSON Datentyp | Beschreibung         |
    | ----------- | ------------- | -------------------- |
    | **success** | Boolean       | Sollte true sein     |
    | **message** | String        | Einige Informationen |

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.quickpurge",
        "params": {
            "objID": 42,
            "category": "C__CATG__IP",
            "cateID": 3,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Category entry '3' successfully purged"
        },
        "id": 1
    }
    ```

### cmdb.category.purge

??? example "cmdb.category.purge"

    Bereinigen eines Kategorieeintrags eines Objekts.
    Es funktioniert bei multi-value Kategorien und single-value Kategorien.

    Anfrage Parameter

    | **Key**      | **JSON Datentyp** | Erforderlich | Beschreibung                                                 |
    | ------------ | ----------------- | ------------ | ------------------------------------------------------------ |
    | **object**   | Integer           | Ja           | Objekt-Identifikator, zum Beispiel: **456**                  |
    | **category** | String            | Ja           | Kategorie-Konstante, zum Beispiel: **"C\_\_CATG\_\_ACCESS"** |
    | **entry**    | Integer           | Ja           | Eintrags-Identifikator, zum Beispiel: **33**                 |

    Antwort

    JSON-Schlüsselergebnis enthält ein JSON-Objekt.

    | **Key**     | **JSON Datentyp** | Beschreibung         |
    | ----------- | ----------------- | -------------------- |
    | **success** | Boolean           | Sollte true sein     |
    | **message** | String            | Einige Informationen |

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.purge",
        "params": {
            "object": 456,
            "category": "C__CATG__ACCESS",
            "entry": 33,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Entry 33 has been successfully purged from 4 to 5."
        }
    }
    ```
    <br>oder:
    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.purge",
        "params": {
            "object": 456,
            "category": "C__CATG__MODEL",
            "entry": 24,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Entry 24 has been successfully purged from 2 to 5."
        }
    }
    ```

### cmdb.category.recycle

??? example "cmdb.category.recycle"

    Einschränkungen

    *   Dies funktioniert zur Zeit nur mit multi-value Kategorien.
    *   Sie können Kategorieeinträge, die den Status archiviert oder gelöscht haben, wiederherstellen.

    Anfrage Parameter

    | **Key**      | **JSON Datentyp** | Erforderlich | Beschreibung                                                 |
    | ------------ | ----------------- | ------------ | ------------------------------------------------------------ |
    | **object**   | Integer           | Ja           | Objekt-Identifikator, zum Beispiel: **456**                  |
    | **category** | String            | Ja           | Kategorie-Konstante, zum Beispiel: **"C\_\_CATG\_\_ACCESS"** |
    | **entry**    | Integer           | Ja           | Eintrags-Identifikator, zum Beispiel: **32**                 |

    Antwort

    JSON-Schlüsselergebnis enthält ein JSON-Objekt.

    | **Key**     | **JSON Datentyp** | Beschreibung         |
    | ----------- | ----------------- | -------------------- |
    | **success** | Boolean           | Sollte true sein     |
    | **message** | String            | Einige Informationen |

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.recycle",
        "params": {
            "object": 456,
            "category": "C__CATG__ACCESS",
            "entry": 32,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Entry 32 has been successfully recycled from 4 to 2."
        }
    }
    ```

### cmdb.category.archive

??? example "cmdb.category.archive"

    Limitations

    *   Dies funktioniert zur Zeit nur mit multi-value Kategorien.
    *   Sie können nur Kategorieeinträge archivieren, die einen normalen Status haben.

    Anfrage Parameter

    | **Key**      | **JSON Datentyp** | Erforderlich | Beschreibung                                                 |
    | ------------ | ----------------- | ------------ | ------------------------------------------------------------ |
    | **object**   | Integer           | Ja           | Objekt-Identifikator, zum Beispiel: **456**                  |
    | **category** | String            | Ja           | Kategorie-Konstante, zum Beispiel: **"C\_\_CATG\_\_ACCESS"** |
    | **entry**    | Integer           | Ja           | Eintrags-Identifikator, zum Beispiel: **32**                 |

    Antwort

    JSON-Schlüsselergebnis enthält ein JSON-Objekt.

    | **Key**     | **JSON Datentyp** | Beschreibung         |
    | ----------- | ----------------- | -------------------- |
    | **success** | Boolean           | Sollte true sein     |
    | **message** | String            | Einige Informationen |

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.archive",
        "params": {
            "object": 456,
            "category": "C__CATG__ACCESS",
            "entry": 32,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Entry 32 has been successfully archived from 2 to 3."
        }
    }
    ```

### cmdb.dialog.read

??? example "cmdb.dialog.read"

    Lese die Dialoginformationen.

    Anfrage Parameter

    | **Key**      | **JSON Datentyp** | Erforderlich | Beschreibung                                              |
    | ------------ | ----------------- | ------------ | --------------------------------------------------------- |
    | **category** | String            | Ja           | Kategorie-Konstante, zum Beispiel: **"C\_\_CATG\_\_CPU"** |
    | **property** | String            | Ja           | Attribut in der Kategorie, zum Beispiel: "manufacturer"   |

    Antwort

    JSON-Schlüsselergebnis enthält ein JSON-Objekt.

    | **Key**   | **JSON Datentyp** | Beschreibung                   |
    | --------- | ----------------- | ------------------------------ |
    | **id**    | String            | Identifikator                  |
    | **const** | String            | Konstante des Dialog-Attributs |
    | **title** | String            | Bezeichnung des Attributs      |

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.dialog.read",
        "params": {
            "category": "C__CATG__CPU",
            "property": "manufacturer",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": [
            {
                "id": "1",
                "const": "",
                "title": "AMD"
            },
            {
                "id": "2",
                "const": "",
                "title": "Intel"
            }
        ]
    }
    ```

### cmdb.dialog.create

??? example "cmdb.dialog.create"

    Dialoge erstellen

    Anfrage Parameter

    | **Key**      | **JSON Datentyp  <br>** | Erforderlich | Beschreibung                                              |
    | ------------ | ----------------------- | ------------ | --------------------------------------------------------- |
    | **category** | String                  | Yes          | Kategorie-Konstante, zum Beispiel: **"C\_\_CATG\_\_CPU"** |
    | **property** | String                  | Yes          | Attribut in der Kategorie, zum Beispiel: "Hersteller"     |
    | **value**    | String                  | Yes          | Wert des Attributs                                        |

    Antwort

    JSON-Schlüsselergebnis enthält ein JSON-Objekt.

    | **Key**       | **JSON Datentyp** | Beschreibung                         |
    | ------------- | ----------------- | ------------------------------------ |
    | **success**   | Boolean           | Sollte true sein                     |
    | **entry\_id** | Integer           | Eintrags-Identifikator, zum Beispiel |

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.dialog.create",
        "params": {
            "category": "C__CATG__CPU",
            "property": "manufacturer",
            "value": "IBM",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "entry_id": 3
        }
    }
    ```

### cmdb.dialog.update

??? example "cmdb.dialog.update"

    Einen [Dialogeintrag](../../../../grundlagen/dialog-admin.md) aktualisieren

    Anfrage Parameter

    | **Key**       | **JSON Datentyp** | Erforderlich | Beschreibung                                              |
    | ------------- | ----------------- | ------------ | --------------------------------------------------------- |
    | **category**  | String            | Ja           | Kategorie-Konstante, zum Beispiel: **"C\_\_CATG\_\_CPU"** |
    | **property**  | String            | Ja           | Attribut in der Kategorie, zum Beispiel: "manufacturer"   |
    | **value**     | String            | Ja           | Wert des Attributs                                        |
    | **entry\_id** | String            | Ja           | Eintrags-Identifikator, zum Beispiel: 3                   |

    Anfrage

    JSON-Schlüsselergebnis enthält ein JSON-Objekt.

    | **Key**       | **JSON Datentyp** | Beschreibung                            |
    | ------------- | ----------------- | --------------------------------------- |
    | **success**   | Boolean           | Sollte true sein                        |
    | **entry\_id** | Integer/String    | Eintrags-Identifikator, zum Beispiel: 3 |

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.dialog.update",
        "params": {
            "category": "C__CATG__CPU",
            "property": "manufacturer",
            "entry_id": "3",
            "value": "IBM 2",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "entry_id": 3
        }
    }
    ```

### cmdb.dialog.delete

??? example "cmdb.dialog.delete"

    Löscht Dialoge

    Anfrage Parameter

    | **Key**       | **JSON Datentyp** | Erforderlich | Beschreibung                                              |
    | ------------- | ----------------- | ------------ | --------------------------------------------------------- |
    | **category**  | String            | Ja           | Kategorie-Konstante, zum Beispiel: **"C\_\_CATG\_\_CPU"** |
    | **property**  | String            | Ja           | Attribut in der Kategorie, zum Beispiel: "manufacturer"   |
    | **entry\_id** | String            | Ja           | Eintrags-Identifikator, zum Beispiel: 3                   |

    Antwort

    JSON-Schlüsselergebnis enthält ein JSON-Objekt..

    | **Key**       | **JSON Datentyp** | Beschreibung                            |
    | ------------- | ----------------- | --------------------------------------- |
    | **success**   | Boolean           | Sollte true sein                        |
    | **entry\_id** | Integer/String    | Eintrags-Identifikator, zum Beispiel: 3 |

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.dialog.delete",
        "params": {
            "category": "C__CATG__CPU",
            "property": "manufacturer",
            "entry_id": "3",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "entry_id": "3"
        }
    }
    ```

### cmdb.reports.read

??? example "cmdb.reports.read"

    Bericht anzeigen.

    **Anfrage Parameter**

    Keine

    **Antwort**

    JSON-Schlüsselergebnis enthält ein JSON-Objekt.

    | **Key**         | **JSON Datentyp** | Beschreibung                           |
    | --------------- | ----------------- | -------------------------------------- |
    | **id**          | String            | Identifikator                          |
    | **category**    | String            | Attribut-Kategorie in Kategorie Global |
    | **title**       | String            | Bezeichnung des Berichts               |
    | **description** | String            | Beschreibung des Berichts              |
    | **created**     | String            | Wann wurde er erstellt                 |

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
    "version": "2.0",
    "method": "cmdb.reports.read",
    "params": {
        "apikey": "xxx",
        "language": "en"
    },
    "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
    "id": 1,
    "jsonrpc": "2.0",
    "result": [
        {
        "id": "11",
        "category": "Changes",
        "title": "Changed objects from today",
        "description": "Shows objects which have been created or changed for today. Relation objects are excluded.",
        "created": "2016-08-31 15:23:17"
        },
        {
        "id": "7",
        "category": "Changes",
        "title": "Changed objects last 24 hours",
        "description": "Shows objects which have been created or changed for the last 24 hours. Relation objects are excluded.",
        "created": "2016-08-31 15:09:36"
        },
        {
        "id": "8",
        "category": "Changes",
        "title": "Changed objects last 7 days",
        "description": "Shows objects which have been created or changed for the last 7 days. Relation objects are excluded.",
        "created": "2016-08-31 15:11:29"
        }
    ]
    }
    ```

    Oder Sie können auch den Parameter "id" in Ihrer Anfrage verwenden, um den entsprechenden Bericht zu erhalten

    **Anfrage Parameter**

    | **Key** | **JSON Datentyp** | Beschreibung  |
    | ------- | ----------------- | ------------- |
    | **id**  | String            | Identifikator |

    **Antwort**

    JSON-Schlüsselergebnis enthält ein JSON-Objekt..

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
    "version": "2.0",
    "method": "cmdb.reports.read",
    "params": {
        "id": "3",
        "apikey": "xxx",
        "language": "en"
    },
    "id": 1
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
    "id": 1,
    "jsonrpc": "2.0",
    "result": [
        {
        "Title": "backup001",
        "Object type": "LC__CMDB__OBJTYPE__SERVER",
        "Last change": "<span data-date=\"2020-02-14 08:34:02\" class=\"hide\"></span>2020-02-14 - 08:34",
        "Last change by": "admin"
        },
        {
        "Title": "Backup Server",
        "Object type": "LC__CMDB__OBJTYPE__VIRTUAL_SERVER",
        "Last change": "<span data-date=\"2020-02-14 08:23:50\" class=\"hide\"></span>2020-02-14 - 08:23",
        "Last change by": "admin"
        }
    ]
    }
    ```
