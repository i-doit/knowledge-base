# Beispiele zur Nutzung der API

Um den Umgang mit der [Programmierschnittstelle (API)](../../administration/verwaltung/add-ons/json-rpc-api/index.md) von i-doit zu erleichtern, haben wir einige typische Beispiele zusammengetragen.

Suche
-----

### idoit.search

??? example "idoit.search"
    Methode: idoit.search

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "idoit.search",
        "params": {
            "q": "ESXi1",
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
                "documentId": "1000",
                "key": "Virtueller Host > Global > Title",
                "value": "ESXi1",
                "type": "cmdb",
                "link": "\/?objID=1000&catgID=1&cateID=1029&highlight=ESXi1",
                "score": 0,
                "status": "Normal"
            }
        ],
        "id": 1
    }
    ```

Login und Logout
----------------

### idoit.login

??? example "idoit.login"

    Methoden: **idoit.login**, **idoit.version** (als Beispiel für beliebige Requests), **idoit.logout**

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

Neues Objekt erstellen
----------------------

### cmdb.object.create

??? example "cmdb.object.create"

    Methode: **cmdb.object.create**

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

Allgemeine Informationen zu einem Objekt auslesen
-------------------------------------------------

### cmdb.object.read

??? example "cmdb.object.read"

    Methode: **cmdb.object.read**

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
            "language": "de"
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
            "type_title": "Virtueller Host",
            "type_icon": "images\/icons\/silk\/server_database.png",
            "status": "2",
            "cmdb_status": "6",
            "cmdb_status_title": "In Betrieb",
            "created": "2015-03-14 14:10:22",
            "updated": "2017-04-26 10:22:20",
            "image": "https:\/\/demo.i-doit.com\/images\/objecttypes\/server.png"
        },
        "id": 1
    }
    ```

Objekt aktualisieren
--------------------

### cmdb.object.update

??? example "cmdb.object.update"
    Methode: **cmdb.object.update**

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.object.update",
        "params": {
            "id": 1000,
            "title": "esxi1",
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

Objekt archivieren/als gelöscht markieren/bereinigen
----------------------------------------------------

### cmdb.object.delete

??? example "cmdb.object.delete"
    Methode: **cmdb.object.delete**

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.object.delete",
        "params": {
            "id": 3240,
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
            "message": "Object(s) successfully archived",
            "success": true
        },
        "id": 1
    }
    ```
    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.object.delete",
        "params": {
            "id": 3240,
            "status": "C__RECORD_STATUS__DELETED",
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
            "message": "Object(s) successfully deleted",
            "success": true
        },
        "id": 1
    }
    ```
    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.object.delete",
        "params": {
            "id": 3240,
            "status": "C__RECORD_STATUS__PURGE",
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
            "message": "Object(s) successfully purged",
            "success": true
        },
        "id": 1
    }
    ```

Bild hoch- und herunterladen
----------------------------

### cmdb.category.create

??? example "cmdb.category.create"

    Methoden: **cmdb.category.create**, **cmdb.category.read**

    Kategorie: **Bilder**

    Die Datei des Bildes muss vor dem Hochladen in BASE64 kodiert werden. Beim Herunterladen wird das Bild ebenfalls in BASE64 kodiert. Aus Platzgründen wurden die BASE64-kodierten Strings in den Beispielen durch Platzhalter ersetzt.

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.create",
        "params": {
            "objID": 123,
            "data": {
                "name": "Picture of a cloud",
                "content": "<BASE64 encoded string>"
            },
            "catgID": "C__CATG__IMAGES",
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
            "id": 7,
            "message": "Category entry successfully created.",
            "success": true
        },
        "id": 1
    }
    ```
    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.read",
        "params": {
            "objID": 123,
            "category": "C__CATG__IMAGES",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 2
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": [
            {
                "id": "7",
                "objID": "123",
                "name": "Picture of a cloud",
                "content": "<BASE64 encoded string>"
            }
        ],
        "id": 2
    }
    ```

Datei hochladen und mit Objekt verknüpfen
-----------------------------------------

### cmdb.object.create und cmdb.category.create

??? example "cmdb.object.create und cmdb.category.create"
    Methoden: **cmdb.object.create** und **cmdb.category.create**

    Kategorien: **Dateien → Dateiversionen** und **Dateien**

    Ziel ist es eine bestehende Datei **test.txt** in i-doit hochzuladen und diese mit einem neuen Server-Objekt zu verknüpfen. Dateien sind in i-doit ebenfalls Objekte. Bevor die Datei hochgeladen werden kann, muss deren Inhalt in **BASE64** enkodiert werden, siehe Attribut **file_content** im 3. Request. Im Folgenden wird das Server-Objekt die ID **1000** und das Datei-Objekt die ID **1001** erhalten.

    Server-Objekt erstellen

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
            "id": 1000,
            "message": "Object was successfully created",
            "success": true
        },
        "id": 1
    }
    ```

    Datei-Objekt erstellen

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.object.create",
        "params": {
            "type": "C__OBJTYPE__FILE",
            "title": "Just a test",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 2
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "id": 1001,
            "message": "Object was successfully created",
            "success": true
        },
        "id": 2
    }
    ```

    Datei hochladen über die Kategorie **Dateien → Dateiversionen**

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.create",
        "params": {
            "objID": 1001,
            "data": {
                "file_content": "dGVzdAo=",
                "file_physical": "test.txt",
                "file_title": "Just a test",
                "version_description": "Just a test"
            },
            "category": "C__CMDB__SUBCAT__FILE_VERSIONS",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 3
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "id": "69",
            "message": "Category entry successfully created.",
            "success": true
        },
        "id": 3
    }
    ```

    Datei-Objekt mit Server-Objekt über Kategorie **Dateien** verknüpfen

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.create",
        "params": {
            "objID": 1000,
            "data": {
                "file": 1001
            },
            "category": "C__CATG__FILE",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 4
    }
    ```
    **Antwort**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "id": "69",
            "message": "Category entry successfully created.",
            "success": true
        },
        "id": 4
    }
    ```

Installation einer Software auf einer Hardware
----------------------------------------------

### cmdb.category.create

??? example "cmdb.category.create"
    Methode: **cmdb.category.create**

    Kategorie: **Softwarezuweisung**

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.create",
        "params": {
            "objID": 123,
            "data": {
                "application": 456
            },
            "catgID": "C__CATG__APPLICATION",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    Die Hardware hat in diesem Beispiel die Objekt-ID 123, die Software die Objekt-ID 456.
    **Antwort**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "id": "500",
            "message": "Category entry successfully created.",
            "success": true
        },
        "id": 1
    }
    ```

Modellpflege einer Hardware
---------------------------

### cmdb.category.create

??? example "cmdb.category.create"
    Methode: **cmdb.category.create**

    Kategorie: **Modell**

    Die Besonderheit hierbei ist das Attribut-Pärchen **Hersteller** und **Modell**, das sich gegenseitig bedingt. Da es sich bei beiden um [Dialog+-Felder](../../grundlagen/attributfelder.md) handelt, können die Namen als Strings übergeben werden. Existieren passende Einträge noch nicht, werden diese erstellt.

    Beispiel

    **Anfrage**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.create",
        "params": {
            "objID": 123,
            "data": {
                "manufacturer": "Herstellername",
                "title": "Modellname"
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
            "id": "183",
            "message": "Category entry successfully created.",
            "success": true
        },
        "id": 1
    }
    ```
