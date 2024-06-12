# API (JSON-RPC) {#api-json-rpc}

i-doit permet l'accès externe à la [documentation informatique](../../glossary.md) via une [interface de programmation d'application (API)](https://fr.wikipedia.org/wiki/Interface_de_programmation). Avec l'API, les données peuvent être lues, créées, mises à jour et supprimées. Ainsi, l'API offre des fonctions similaires à l'interface utilisateur Web mais le bénéfice supplémentaire est que vous pouvez les automatiser sans aucun problème.

Contexte technique
-------------------

L'API d'i-doit fournit des fonctionnalités typiques de [CRUD](https://fr.wikipedia.org/wiki/Create,_read,_update_and_delete). Avec cela, les fichiers peuvent être

*   **C**réés
*   **R**éad
*   **U**pdatés et
*   **D**étruits.

Pour cela, un client (par exemple, sous forme de script) envoie une demande au serveur (i-doit) afin d'exécuter une méthode sur le serveur. Cette approche est appelée [Appel de Procédure à Distance (RPC)](https://fr.wikipedia.org/wiki/Appel_de_proc%C3%A9dure_%C3%A0_distance). Le résultat de la méthode est renvoyé au client en tant que réponse. Dans cette communication, l'API d'i-doit est basée sur le protocole [JSON-RPC](http://www.jsonrpc.org/), version 2.0. HTTP est utilisé comme protocole supérieur et le [JavaScript Object Notation (JSON)](https://fr.wikipedia.org/wiki/JavaScript_Object_Notation) est utilisé comme format d'échange. Une demande est envoyée au serveur au format JSON via HTTP POST. La réponse est également faite au format JSON.

Les requêtes API peuvent se faire de manière asynchrone sans perdre la relation entre les demandes et les réponses. Le langage de programmation utilisé peut être choisi librement.

!!! success "API au lieu de la base de données"

    Il est fortement recommandé de préférer l'API aux manipulations de base de données en tout temps. Les instructions SQL contournent toutes sortes de processus internes. Si un enregistrement de données est manipulé via SQL par INSERT, UPDATE ou DELETE, cela pourrait compromettre l'intégrité des données et même désactiver _i-doit_.

Téléchargement
--------------

Dans le [portail client](../../system-administration/customer-portal.md), vous pouvez télécharger l'API pour la version pro en tant qu'[extension](../index.md) gratuitement. Les utilisateurs de la version open peuvent également le télécharger gratuitement via [i-doit.org](https://i-doit.org/). L'[installation](../index.md) est conforme aux mêmes principes que les autres extensions i-doit.

Configuration
-------------

L'API est configurée via l'[interface Web](../../basics/web-gui.md) d'i-doit et peut être trouvée à **Administration → Interfaces / données externes → API JSON-RPC**.

[![Configuration](../../assets/images/en/i-doit-pro-add-ons/api/1-api.png)](../../assets/images/en/i-doit-pro-add-ons/api/1-api.png)

!!! info "Info"

    Supprimer les balises HTML des champs de description n'est possible qu'à la version 1.15.2 d'i-doit avec la version 1.11.3 de l'API installée.

Veuillez noter que la journalisation des requêtes API créera un fichier dans le chemin d'installation d'_i-doit_ à  log/  pour chaque requête. Cela peut entraîner une augmentation des besoins en espace mémoire si l'API est utilisée de manière intensive.

Accès
------

Vous pouvez accéder à l'API d'i-doit en activant une URL spéciale. Ajoutez `src/jsonrpc.php`  à l'URL de base :

     https://demo.i-doit.com/src/jsonrpc.php

Authentification et Autorisation
--------------------------------

Vous avez besoin d'une clé API pour que les requêtes soient traitées par l'API. De plus, vous pouvez activer la fonction qu'un compte utilisateur dédié soit activé pour la connexion. Les autorisations pour ce compte peuvent être définies comme d'habitude. Sinon, toutes les autorisations sont disponibles via l'API. Un autre avantage est le fait qu'un utilisateur dédié peut être défini par système/script tiers ; cela facilite le suivi du flux de données.

Il peut être utile d'utiliser la méthode API  idoit.login  pour une seule authentification si de nombreuses requêtes (signifiant des milliers) sont envoyées depuis un client. Sinon, il est possible que trop de sessions soient créées dans un laps de temps très court mais ne sont pas terminées. Cela pourrait entraîner le fait qu'i-doit cesse de fonctionner jusqu'à ce que les sessions aient été terminées.

!!! attention ""

    L'utilisateur par défaut utilisé pour les actions API est "Système API". Cela peut être trouvé sous "Contacts -> Personnes" si nécessaire.<br>
    Ceci est utilisé uniquement si aucun nom d'utilisateur/mot de passe n'est utilisé pour se connecter à l'interface API.<br>
    Si la personne est archivée/supprimée, l'API ne peut plus être utilisée sans authentification.

Exemple
-------

Avec un exemple simple, nous créons un nouvel objet du type  **Serveur**  avec le titre d'objet "Mon petit serveur" via l'API.

Demande au serveur :

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.object.create",
    "params": {
        "type": "C__OBJTYPE__SERVER",
        "title": "My little server",
        "apikey": "c1ia5q"
    },
    "id": 1
}
```

Via cURL, vous pouvez envoyer cette demande à des fins de test :

```json
curl \
--data '{"jsonrpc":"2.0","method":"cmdb.object.create","params":{"type":"C__OBJTYPE__SERVER","title":"My little server","apikey":"c1ia5q"},"id":1}' \
--header "Content-Type: application/json" \
https://demo.i-doit.com/src/jsonrpc.php
```

Réponse du serveur :

```json
{
    "id": 1,
    "jsonrpc": "2.0",
    "result": {
        "id": "3351",
        "message": "Object was successfully created",
        "success": true
    },
}
```

Catégories dans la documentation informatique
--------------------------------------------

Une liste utile de toutes les catégories et attributs utilisés dans _i-doit_ est fournie par une URL spéciale :

[![Catégories dans la documentation informatique](../../assets/images/en/i-doit-pro-add-ons/api/2-api.png)](../../assets/images/en/i-doit-pro-add-ons/api/2-api.png)

Par exemple, cette liste vous montre quel nom est utilisé pour accéder aux catégories et attributs et quels types de données sont attendus par ces attributs.<br>
Pour les [catégories personnalisées](../../basics/custom-categories.md) ou attributs, vous trouverez les clés techniques dans la catégorie personnalisée respective. Il est possible de renommer les clés techniques.

Clients et Bibliothèques
------------------------

Il existe de nombreux projets et produits utilisant l'API par i-doit. Nous aimerions vous présenter quelques clients et bibliothèques :

| Nom | Site Web | Langage de programmation | Licence |
| --- | --- | --- | --- |
| Idoit.API.Client | [https://github.com/OKT90/Idoit.API.Client](https://github.com/OKT90/Idoit.API.Client) | C#  | MIT |
| Client API i-doit | [https://github.com/bheisig/i-doit-api-client-php](https://github.com/bheisig/i-doit-api-client-php) | PHP | AGPLv3 |
| i-doit CLI | [https://github.com/bheisig/i-doit-cli](https://github.com/bheisig/i-doit-cli) | PHP | AGPLv3 |
| i-doit-go-api | [https://github.com/cseeger-epages/i-doit-go-api](https://github.com/cseeger-epages/i-doit-go-api) | Go  | GPLv3 |
| i-doit-python | <https://github.com/ScaleUp-Technologies/i-doit-python> | Python | MIT |
| ansible-i-doit | <https://github.com/ScaleUp-Technologies/ansible-i-doit> | Python | MIT |
| i-doit_API | <https://github.com/mvorl/i-doit_API>| Python | AGPLv3 |

!!! info "Retour d'information"

    Si un client ou une bibliothèque manque dans cet article, nous apprécions un court message à [feedback@i-doit.com](mailto:feedback@i-doit.com).

Documentation pour Téléchargement
--------------------------

Vous pouvez télécharger un [{--documentation maintenue par les développeurs~--}](../../assets/downloads/i-doit-JSON-RPC-1.8.3.pdf) en tant que fichier PDF. (==obsolète==)

Depuis la version 1.8.1, l'API est publiée en tant qu'extension. Les préversions étaient [groupées avec i-doit](../../version-history/index.md).

FAQ
---

### Messages d'Erreur

| Message d'Erreur | Problème |
| --- | --- |
| Les paramètres utilisateur ne sont disponibles qu'après s'être connecté. (i-doit <= 21) | La personne du système Api est archivée ou supprimée. <br>**La solution** est de recycler l'utilisateur du système Api ou d'utiliser une méthode d'authentification |
| Erreur système i-doit : Impossible de se connecter à la base de données du locataire. (i-doit >=22) | La personne du système Api est archivée ou supprimée. <br>**La solution** est de recycler l'utilisateur du système Api ou d'utiliser une méthode d'authentification |


Releases
--------

| Version | Date | Changelog |
| --- | --- | --- |
| 2.0.1 | 2024-05-08 | [Bug] No categories in the result when using cmdb.objects.read with key categories<br>[Bug] Too many connections when using batch requests |
| 2.0 | 2024-04-10 | [Task] Implement base architecture for new endpoint "cmdb.external"<br>[Task] Restructure API, implement 'v2' endpoint<br>[Bug]  Reading dialog+ entries from C__CATS__GROUP_TYPE leads to PHP error<br>[Bug]  Inputs are not displayed as they were entered when reading via the API<br>[Bug]  Categories and attributes needs to be updated |
| 1.16 | 2024-02-27 | [Bug] Dialog plus entry is not resolved via string<br>[Bug] cmdb.reports.read attaches "  " to each value<br>[Bug] Reading a object via cmdb.object.read results in "0" for status and cmdb_status<br>[Bug] API System setting overwrites tenant setting<br>[Bug] PHP error when reading category C__CATG_GENERAL<br>[Bug] cmdb.logbook.create with using a string for alert_level the field is empty<br>[Bug] cmdb.logbook.create with using a integer for source will cause a php error<br>[Bug] cmdb.object.purge does not work because it checks quickpurge option<br>[Bug] cmdb.object_types filter for title/titles needs to be a constant<br>[Bug] Save buttons do not display a success notification<br>[Bug] "cmdb.objects.read" endpoint does not work correctly with "type_title" filter and limit<br>[Bug] When using cmdb.dialog.read for category = C__CATG__CLUSTER_ROOT and property = quorum, one level too much is output<br> |
| 1.15 | 2023-11-07 | [Bug]  Using API after update to i-doit pro 25 displays license error message<br>[Bug]  Positioning an object in a rack misinterprets the rack unit position<br>[Bug]  The new cryptography method significantly extends API Requests when no login has occurred previously<br>[Bug]  The overview of the API categories and attributes also shows virtual properties<br>[Bug]  Operating system > Version cannot be referenced via title, if a second operating system has the  ame version title<br>[Bug]  Cannot create a dialog entry with value "0"<br>[Bug]  API Categories and attributes not working<br>[Bug]  C__CATG__NETWORK_PORT attribute default_vlan is not saveable |
| 1.14.1 | 2023-06-13 | [Task] Use 'cmdb.quickpurge' setting from tenant-settings<br>[Bug]  Specific sub-categories can not be read via cmdb.objects.read<br>[Bug]  Wrong successful message when using id instead of assigned_object<br>[Bug]  The "Date for Notification" field in category "SIM" can not be emptied by the API<br>[Bug]  Category Application is not displayed in Categories and attributes<br>[Bug]  Set a Location in Rack is not correct if the Height unit sorting is Ascending<br>[Bug]  Validation error for custom category field time<br>[Bug]  It is not possible to remove a Network -> Port  -> addresses value<br>[Bug]  It is not possible to assign a Host address  -> assigned_port value<br>[Bug]  Write data to  Network > logical Ports > ports display SQL error message<br>[Bug]  Layer 2 Net  -> Assigned logical ports is not Editable<br> [Bug]  Version of software assignment does not get assigned correctly<br>[Bug]  "Categories and attributes" contains empty categories like Document and Floorplan<br>[Bug]  Typo in response message idoit.logout |
| 1.14 | 2023-03-21 |  [Improvement] New method "cmdb.ip_search.getNetworksByIp" returns all Layer3 objects a given IP is within the defined range (contributed by becon GmbH) <br>[Bug] Creating objects results in two entries in category 'Accounting' <br>[Bug] Category 'C__CATS__ORGANIZATION_CONTACT_ASSIGNMENT' can not be updated <br> [Bug] Translations for 'LC__CMDB__CATG__VD__HOST_RAID_ARRAY' is missing <br> [Bug] Add 'limit' and 'offset' options to endpoint 'cmdb.reports.read' <br>[Bug] SQL error when updating category 'network > port' <br>[Bug] Can't read type of layer2 net category <br>[Bug] Attribute "GPS" in category "C__CATG__LOCATION" is not writeable |
| 1.13.1 | 2023-01-24 | [Bug] Some fields are not being validated  <br>[Bug] The Login method can use old session keys  <br>[Bug] Validation error f\_popup\_  <br>[Bug] Setting a Dialog Attribute via causes Fatal error  <br>[Bug] Failed validation breaks the response  <br>[Bug] installDate is always set to actual date/time  <br>[Bug] The addresses attribute of the Network > Port category is incorrectly validated by API validation  <br>[Bug] Date of Change is not altered when archiving a object via API |
| 1.13 | 2022-09-05 | [Task] PHP 8.0 compatibility  <br>[Bug] Reports displayed via the API show language constants  <br>[Bug] The Hostname field of the Monitoring category is incorrectly validated by API validation  <br>[Bug] Changing the object type via the API via type: dialog constant is not possible  <br>[Bug] An EntryID is needed to purge single-value entries  <br>[Bug] The API shall be able to change passwords of users  <br>[Bug] The Host address field of the Network > Port category is incorrectly validated by API validation  <br>[Bug] The Latitude, Longitude and Position fields in the Location category cabinet are incorrectly validated by API validation  <br>[Bug] The Type and Assigned license key fields of the Software Assignment category are incorrectly validated by API validation  <br>[Bug] The Image attribute of the Object picture category is incorrectly validated by API validation |
| 1.12.3 | 2022-02-21 | [Bug] Edit host address > primary\_fqdn sets field default gateway for the network to Yes  <br>[Bug] If you edit an entry in the host address category, the IP address is removed. |
| 1.12.2 | 2021-08-09 | [Improvement] New parameters "offset" and "limit" for the "cmdb.category.read" method  <br>[Bug] Virtual Switches > Creating Port Groups generates SQL error message  <br>[Bug]  Cluster members cannot be assigned via API using the category C\_\_CATG\_\_CLUSTER\_MEMBERSHIPS  <br>[Bug] The API can not create sub-categories in 'cmdb.object.create' context  <br>[Bug] Layer 3 nets cannot be assigned with API validation enabled in Layer 2 nets  <br>[Bug] When the layer 3 net is changed the layer 3 net is assigned to itself under layer 2 net assignment  <br>[Bug] The category SLA (C\_\_CATG\_\_SLA) cannot be described via the API / With API validation switched off the category is emptied  <br>[Bug] Dialog+ fields with 'PropertyFactory' definition can not be written |
| 1.12.1 | 2021-01-18 | [Bug] cmdb.category.quickpurge cannot be used with custom categories  <br>[Bug] API version 1.12 can no longer be used in the open variant of i-doit |
| 1.12 | 2021-01-14 | [Bug] API: It is not possible to create a volume license via the API if "type": "volume license" is used  <br>[Bug] Saving the "Layer-2 Nets" category deletes ip helper  <br>[Bug] Contact assignment of a group of people will be deleted if it is updated via the API |
| 1.11.3 | 2020-12-01 | [Bug] Assign cable with fibers/leads while saving connection  <br>[Bug] Limit assignment categories to one entry while creating  <br>[Bug] Do not connect root location while creating cluster membership  <br>[Bug] Do not create wrong output after removing cable connection  <br>[Bug] Cannot assign objects to category "locally assigned objects" (requires i-doit 1.15.1)  <br>[Bug] The category C\_\_CATG\_\_IMAGE is not read correctly via the API  <br>[Bug] The category C\_\_CATG\_\_IMAGE cannot be written correctly  <br>[Bug] The dates of the category contract information cannot be set via the API  <br>[Bug] Category > Assigned Subscriptions C\_\_CATG\_\_ASSIGNED\_SUBSCRIPTIONS key uuid cannot be set via string only via int  <br>[Bug] Read Methods: Do not output HTML tags in description fields  <br>[Bug] Objects can only be created via the API if the right to all object types is granted  <br>[Bug] Ports cannot be uniquely referenced via the API  <br>[Bug] Empty string supplied via API |
| 1.11.2 | 2020-06-24 | [Bug] API method: cmdb.object overrides the rights system |
| 1.11.1 | 2020-04-09 | [Bug] Updates via the API (save method) sets arbitrary entries in the Virtual Host category<br>    |
| 1.11 | 2020-03-23 | [Bug] Do not connect root location while creating cluster membership<br>[Bug] Objects that are changed via the API should also be locked for this period (Read > Update).<br>[Bug] Permission system error when using a user to change user-defined categories<br>[Bug] Data record of the standard_gateway always shows an ID<br>[Bug] When updating the category 'General' all tags are removed<br>[Bug] Report displays HTML in the result<br>    |
| 1.10.4 | 2019-09-02 | [Improvement] Add RPC to handle the CMDB status<br>[Improvement] Filling virtual custom category properties results in an error<br>[Improvement] Create, read, update and delete template objects and mass change template objects<br>[Bug] In the "Local Mass Storage" category, models cannot be created using the API.<br>[Bug] When updating the model, a Dialog+ value is created / displayed with the ID of the model.<br>[Bug] Update of a CPU title changes the frequency<br>[Bug] Improved handling of sorting of hight units when using API<br>[Bug] API "Categories and properties" page displays no content<br>[Bug] Saving the WAN category writes wrong values for router and net<br>[Bug] No salutation returns wrong value in JSON-API<br>[Bug] Missing values in the API method "cmdb.category_info"<br>    |
| 1.10.3 | 2019-05-06 | [Bug] Assignment of devices to segments in slots not possible<br>[Bug] Validating requests breaks altering attributes<br>    |
| 1.10.2 | 2019-04-01 | [Bug] cmdb.category.read: Read entries by state "normal" unless otherwise noted<br>[Bug] Select value in a dialog+ attribute by its constant<br>[Bug] Fix SQL error when linking two connectors<br>[Bug] Object deletion with provided status (C__RECORD_STATUS__DELETED) will result in an infinite loop<br>[Bug] object state is mandatory although it should be optional<br>[Bug] idoit.license.read: Response in new format<br>[Bug] idoit.license.read: Use new license form<br>[Bug] Deleting an unknown entry ID results in success<br>[Bug] Create objects with defined SYSID via API<br>[Bug] API does not return all IP addresses of the IP list<br>[Bug] Read data from the drive category<br>[Bug] Purge assigned Groups via API<br>[Bug] Revert changes of the "salutation" property<br>    |
| 1.10.1 | 2019-01-23 | [Bug] Authentication with LDAP not possible<br>[Bug] SQL injection vulnerability during login<br>    |
| 1.10 | 2018-12-17 | [Improvement] Enable validation of API requests via expert setting<br>[Improvement] Do not allow different API keys within a batch request<br>[Improvement] Throw error when same ID is used within a batch request<br>[Improvement] API Key is required, user credentials are optional but include rights management<br>[Improvement] Create or update category entries with cmdb.category.save<br>[Improvement] Read licence information via API<br>[Improvement] Human-readable internal logging<br>[Improvement] Filter category entries by status<br>[Improvement] Recycle category entry<br>[Improvement] Purge category entry<br>[Improvement] Delete category entry<br>[Improvement] Archive category entry<br>[Improvement] Mark object as mass change template<br>[Improvement] Mark object as template<br>[Improvement] Recycle object<br>[Improvement] Purge object<br>[Improvement] Delete object<br>[Improvement] Archive object<br>[Improvement] Create object with category entries<br>[Improvement] Read objects with category entries<br>[Improvement] Do not return integer value as string in a response anymore<br>[Improvement] Describe in the Web GUI handling with categories and attributes<br>[Improvement] Call console commands via API<br>[Improvement] Fetch information about installed add-ons<br>[Improvement] Read all constants<br>[Improvement] Create, read, update and delete template objects and mass change template objects<br>[Change] cmdb.category.create and .update are deprecated<br>[Bug] cmdb.category.create: Unable to add license key to category "software assignment"<br>[Bug] Category "managed devices" returned wrong values<br>[Bug] cmdb.category.read: Wrong object relations and duplicates in category "C__CATS_NET_TYPE__IPV4"<br>[Bug] API delivers a null array with no assignment for key zone, but an object with an assignment<br>[Bug] Unknown attributes will be ignoriert<br>[Bug] Invalid values do not throw exception<br>[Bug] Server does not send notification for request without an "id"<br>[Bug] cmdb.category.read returns entries for empty categories<br>[Bug][Bug] Cables remain unused when connections are created with the API<br>[Bug] Application priority is not being saved<br>[Bug] API: Timeout is not being reset after every request<br>[Bug] Error when editing Manufacturer/model via API<br>[Bug] API: Fibre connections cannot be read<br>[Bug] When givin an ID as string it is possible that the resulting data will be wrong<br>[Bug] Connecting ports with the API uses wrong objects as cables<br>    |
| 1.9.1 | 2018-04-16 | [Bug] cmdb.reports.read throws SQL error for variable reports <br>[Bug] Method cmdb.reports throws PHP warning <br>[Bug] After creating an object, a reindex is substantial to find an object via the search <br>[Bug] Unable to create entries in category C__CATS__ORGANIZATION_CONTACT_ASSIGNMENT <br>[Bug] API ignores language parameter<br>    |
| 1.9 | 2018-01-23 | [Improvement] Searching for objects by attributes and values <br>[Improvement] Enforce user rights for API calls <br>[Improvement] Create object via "cmdb.object.create" with optional template <br>[Bug] Unable to upload file <br>[Bug] Logbook title is empty when saving a custom category <br>[Bug] User-defined dialog plus contents select via API <br>[Bug] Unable to read passwords <br>[Bug] Method 'cmdb.object.create' creates object id's partly as string, partly as integer <br>[Bug] Database error when trying to delete an object, which does not exist anymore, via the API <br>[Bug] Dialog Plus fields that have a dependency on another attribute have not been created.<br>    |
| 1.8.1 | 2017-03-02 | [Bug] Self-defined Dialog+ fields won't be displayed after creating them <br>[Bug] Created dialog entries receive status 1 instead of 2 (normal) <br>[Bug] cmdb.object.delete ignores parameter "status" <br>[Bug] cmdb.category.create throws database error for category "model"<br>    |
