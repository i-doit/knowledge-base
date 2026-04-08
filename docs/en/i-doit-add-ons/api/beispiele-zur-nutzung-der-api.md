---
title: Examples for using the API
description: "To make working with the programming interface (API) of i-doit easier, we have compiled some typical examples."
icon:
status:
lang: en
---
# Examples for using the API

To make working with the [programming interface (API)](../../administration/verwaltung/add-ons/json-rpc-api/index.md) of i-doit easier, we have compiled some typical examples.

Search
-----

### idoit.search

??? example "idoit.search"
    Method: idoit.search

    Example

    **Request**
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
    **Response**
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

Login and Logout
----------------

### idoit.login

??? example "idoit.login"

    Methods: **idoit.login**, **idoit.version** (as an example for arbitrary requests), **idoit.logout**

    Example

    **Request**
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
    **Response**
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

    **Request**
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
    **Response**
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

    **Request**
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
    **Response**
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

Create a new object
----------------------

### cmdb.object.create

??? example "cmdb.object.create"

    Method: **cmdb.object.create**

    Example

    **Request**
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
    **Response**
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

Read general information about an object
-------------------------------------------------

### cmdb.object.read

??? example "cmdb.object.read"

    Method: **cmdb.object.read**

    Example

    **Request**
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
    **Response**
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

Update an object
--------------------

### cmdb.object.update

??? example "cmdb.object.update"
    Method: **cmdb.object.update**

    Example

    **Request**
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
    **Response**
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

Archive object/mark as deleted/purge
----------------------------------------------------

### cmdb.object.delete

??? example "cmdb.object.delete"
    Method: **cmdb.object.delete**

    Example

    **Request**
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
    **Response**
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
    **Request**
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
    **Response**
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
    **Request**
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
    **Response**
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

Upload and download images
----------------------------

### cmdb.category.create

??? example "cmdb.category.create"

    Methods: **cmdb.category.create**, **cmdb.category.read**

    Category: **Images**

    The image file must be BASE64 encoded before uploading. When downloading, the image is also BASE64 encoded. For space reasons, the BASE64-encoded strings in the examples have been replaced with placeholders.

    Example

    **Request**
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
    **Response**
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
    **Request**
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
    **Response**
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

Upload file and link with object
-----------------------------------------

### cmdb.object.create and cmdb.category.create

??? example "cmdb.object.create and cmdb.category.create"
    Methods: **cmdb.object.create** and **cmdb.category.create**

    Categories: **Files → File versions** and **Files**

    The goal is to upload an existing file **test.txt** to i-doit and link it with a new server object. Files are also objects in i-doit. Before the file can be uploaded, its content must be **BASE64** encoded, see attribute **file_content** in the 3rd request. In the following, the server object will receive ID **1000** and the file object ID **1001**.

    Create server object

    **Request**
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
    **Response**
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

    Create file object

    **Request**
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
    **Response**
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

    Upload file via the category **Files → File versions**

    **Request**
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
    **Response**
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

    Link file object with server object via category **Files**

    **Request**
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
    **Response**
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

Install software on hardware
----------------------------------------------

### cmdb.category.create

??? example "cmdb.category.create"
    Method: **cmdb.category.create**

    Category: **Software assignment**

    Example

    **Request**
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
    In this example, the hardware has the object ID 123 and the software has the object ID 456.
    **Response**
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

Model maintenance of hardware
---------------------------

### cmdb.category.create

??? example "cmdb.category.create"
    Method: **cmdb.category.create**

    Category: **Model**

    The special feature here is the attribute pair **Manufacturer** and **Model**, which are interdependent. Since both are [Dialog+ fields](../../grundlagen/attributfelder.md), the names can be passed as strings. If matching entries do not yet exist, they will be created.

    Example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.create",
        "params": {
            "objID": 123,
            "data": {
                "manufacturer": "Manufacturer name",
                "title": "Model name"
            },
            "category": "C__CATG__MODEL",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
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
