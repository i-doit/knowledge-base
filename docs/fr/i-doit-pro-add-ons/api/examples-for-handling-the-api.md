# Exemples de Gestion de l'API

Pour faciliter la gestion des [Interfaces de Programmation d'Applications (API)](../../system-administration/administration/import-and-interfaces/index.md) de i-doit, nous avons rassemblé quelques exemples typiques.

Recherche
---------
### idoit.search

??? example "idoit.search"
    Méthode : idoit.search

    Exemple

    **Requête**
    <br>Corps :
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
    **Réponse**
    <br>Corps :
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
                "score": 0
            }
        ],
        "id": 1
    }
    ```

Connexion et Déconnexion
------------------------
### idoit.login

??? example "idoit.login"

    Méthode : **idoit.login**, **idoit.version** (comme exemple pour des requêtes quelconques), **idoit.logout**

    Exemple

    **Requête**
    <br>En-tête :
    ```
    X-RPC-Auth-Username: admin
    X-RPC-Auth-Password: admin
    ```
    <br>Corps :
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
    **Réponse**
    <br>En-tête :
    ```
    X-RPC-Auth-Session: d1obs9m3d2pd8651grptjhdjg3
    ```
    <br>Corps :
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

    **Requête**
    <br>En-tête :
    ```
    X-RPC-Auth-Session: d1obs9m3d2pd8651grptjhdjg3
    ```
    <br>Corps :
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
    **Réponse**
    <br>En-tête :
    ```
    X-RPC-Auth-Session: d1obs9m3d2pd8651grptjhdjg3
    ```
    <br>Corps :
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

    **Requête**
    <br>En-tête:
    ```
    X-RPC-Auth-Session: d1obs9m3d2pd8651grptjhdjg3
    ```
    <br>Corps:
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
    **Réponse**
    <br>En-tête:
    ```
    X-RPC-Auth-Session: d1obs9m3d2pd8651grptjhdjg3
    ```
    <br>Corps:
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

Création d'un nouvel objet
--------------------------
### cmdb.object.create
??? example "cmdb.object.create"
    
    Méthode: **cmdb.object.create**

    Exemple

    **Requête**
    <br>Corps:
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
    **Réponse**
    <br>Corps:
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

Lecture des informations générales sur un objet
-----------------------------------------------
### cmdb.object.read
??? example "cmdb.object.read"

    Méthode: **cmdb.object.read**

    Exemple

    **Requête**
    <br>Corps:
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
    **Réponse**
    <br>Corps:
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

Mise à jour d'un objet
----------------------
### cmdb.object.update
??? example "cmdb.object.update"

    Exemple

    **Requête**
    <br>Corps :
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
    **Réponse**
    <br>Corps :
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

Archivage d'un objet/ Marquer comme supprimé/ Purger
----------------------------------------------
### cmdb.object.delete
??? example "cmdb.object.delete"
    Méthode : **cmdb.object.delete**

    Exemple

    **Requête**
    <br>Corps :
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
    **Réponse**
    <br>Corps :
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
    **Requête**
    <br>Corps :
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
    **Réponse**
    <br>Corps :
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
    **Requête**
    <br>Corps :
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
    **Réponse**
    <br>Corps :
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

Téléchargement ou Téléversement d'une image
-------------------------------
### cmdb.category.create
??? example "cmdb.category.create"

    Méthode : **cmdb.category.create**, **cmdb.category.read**

    Catégorie : **Images**

    Avant de télécharger, vous devez encoder le fichier de l'image en BASE64. De même, pour télécharger l'image, elle doit être encodée en BASE64. Pour des raisons de concision, les chaînes encodées en BASE64 sont remplacées par des jokers dans les exemples.

    Exemple

    **Requête**
    <br>Corps :
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
    **Réponse**
    <br>Corps :
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
    **Requête**
    <br>Corps :
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
    **Réponse**
    <br>Corps :
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

Télécharger un fichier et l'attribuer à un objet
-----------------------------------------
### cmdb.object.create et cmdb.category.create
??? example "cmdb.object.create et cmdb.category.create"
    Méthode : **cmdb.object.create** et **cmdb.category.create**

    Catégories : **Fichiers → Versions de fichiers et Fichiers**

    Nous voulons télécharger le fichier existant **test.txt** dans i-doit et l'attribuer à un nouvel objet serveur. Dans i-doit, les fichiers sont également des objets. Avant de télécharger le fichier, son contenu doit être encodé en **BASE64**, voir l'attribut file_content dans la 3ème requête. Comme vous pouvez le voir, l'objet serveur reçoit l'ID **1000** et l'objet fichier l'ID **1001**. 

{ /* examples */ }

    Créer un objet serveur

    **Requête**
    <br>Corps:
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
    **Réponse**
    <br>Corps:
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

    Créer un objet fichier

    **Requête**
    <br>Corps:
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
    **Réponse**
    <br>Corps:
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

    Télécharger un fichier par catégorie **Fichiers → Versions de fichiers**

    **Requête**
    <br>Corps:
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
    **Réponse**
    <br>Corps:
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

    Assigner un objet fichier à un objet serveur par catégorie **Fichiers**

    **Requête**
    <br>Corps:
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
    **Réponse**
    <br>Corps:
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

Installation de logiciel sur du matériel
------------------------------------

### cmdb.category.create
??? example "cmdb.category.create"
    Méthode: **cmdb.category.create**

    Catégorie: **Allocation de logiciel**

    Exemple

    **Requête**
    <br>Corps:
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
    Dans cet exemple, le matériel a l'ID d'objet 123 et le logiciel a l'ID d'objet 456.
    **Réponse**
    <br>Corps:
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

### Données spécifiques au modèle d'un composant matériel {/examples}

### cmdb.category.create
??? example "cmdb.category.create"
    Méthode: **cmdb.category.create**
    
    Catégorie: **Modèle**

    Une particularité concernant ce sujet est que les attributs **Fabricant** et **Modèle** sont liés entre eux. Dans une requête API, vous pouvez définir leurs noms en tant que chaînes de caractères car tous deux sont des [champs de dialogue](../../basics/attribute-fields.md). Si l'une de ces valeurs n'existe pas, elle sera créée automatiquement.

    Exemple

    **Requête**
    <br>Corps:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.create",
        "params": {
            "objID": 123,
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
    **Réponse**
    <br>Corps:
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
