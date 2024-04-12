# API (JSON-RPC)

i-doit ermöglicht den externen Zugriff auf die [IT-Dokumentation](../../glossar.md) über eine [Programmierschnittstelle](https://de.wikipedia.org/wiki/Programmierschnittstelle), auch API genannt. Es können Daten gelesen, erstellt, aktualisiert und auch gelöscht werden. Somit stellt die API ähnliche Funktionen wie die Web GUI bereit - nur lassen sich diese problemlos automatisieren.

## Technischer Hintergrund

Die API von i-doit bringt typische [CRUD](https://de.wikipedia.org/wiki/CRUD)\-Funktionalitäten mit. Daten können darüber

*   erstellt (**C**reate),
*   gelesen (**R**ead),
*   aktualisiert (**U**pdate) und
*   gelöscht (**D**elete) werden.

Ein Client (beispielsweise in Form eines Scripts) sendet dazu einen Request an den Server (i-doit), um eine Methode auf dem Server ausführen zu lasen. Diese Vorgehensweise nennt man [Remote Procedure Call (RPC)](https://de.wikipedia.org/wiki/Remote_Procedure_Call). Das Ergebnis der Methode wird an den Client als Antwort (Response) zurückgegeben. Die API von i-doit stützt sich bei dieser Kommunikation auf das Protokoll [JSON-RPC](http://www.jsonrpc.org/) in Version 2.0. Es verwendet als höheres Protokoll HTTP und als Austauschformat [JavaScript Objekt Notation (JSON)](https://de.wikipedia.org/wiki/JavaScript_Object_Notation). Per HTTP POST wird ein Request im JSON-Format an den Server geschickt. Die Response erfolgt ebenfalls im JSON-Format.

API-Aufrufe können asynchron erfolgen, ohne den Zusammenhang zwischen Requests und Responses zu verlieren. Die verwendete Programmiersprache kann frei gewählt werden.

!!! success "API statt Datenbank"
    Es ist sehr zu empfehlen, die API immer der Datenbank-Manipulationen vorzuziehen. SQL Statements umgehen allerlei interne Verarbeitungsschritte. Wird per INSERT, UPDATE oder DELETE ein Datensatz via SQL manipuliert, könnte das die Datenintegrität gefährden und i-doit unbrauchbar machen.

## Download

Die API wird für die pro-Variante als kostenloses [Add-on](../index.md) im [Kundenportal](../../administration/kundenportal.md) zum Download angeboten. Benutzern der open-Variante steht es ebenfalls kostenlos über die Website [i-doit.org](https://i-doit.org/) zur Verfügung. Die [Installation](../index.md) folgt demselben Prinzip der anderen Add-ons für i-doit.

## Konfiguration

Die Konfiguration der API geschieht über die [Web GUI](../../grundlagen/web-gui.md) von i-doit, zu finden unter **Verwaltung → Add-ons → JSON-RPC API**.

[![Konfiguration](../../assets/images/de/i-doit-pro-add-ons/api/1-api.png)](../../assets/images/de/i-doit-pro-add-ons/api/1-api.png)

!!! info "Info"
    Das Entfernen von HTML-Tags aus Beschreibungsfeldern ist erst ab i-doit Version 1.15.2 mit installierter API Version 1.11.3 möglich.

Zu beachten ist, dass das Logging von API Requests bei jedem Request eine Datei im Installationsverzeichnis von i-doit unter log/ anlegt. Dies könnte bei massivem Gebrauch der API zu einem erhöhten Speicherplatzbedarf führen.

## Zugriff

Um die API von i-doit anzusprechen, gibt es eine spezielle URL. Der Basis-URL wird ein src/jsonrpc.php angehängt:

```text
https://demo.i-doit.com/src/jsonrpc.php
```

### Authentifizierung und Autorisierung

Damit Requests von der API verarbeitet werden, ist ein API Key erforderlich. Mit dem API Key wird der **Mandant** identifiziert.
Zudem kann aktiviert werden, dass ein dedizierter Benutzer-Account für die Anmeldung verwendet wird. Für diesen können wie gewohnt Rechte vergeben werden. Andernfalls stehen über die API alle Rechte zur Verfügung.
Zusätzlicher Vorteil ist, dass man pro Dritt-System/Script einen dedizierten Benutzer angeben kann, um einfach nachvollziehen zu können, welche Datenflüsse von wo nach wo stattfinden.

!!! success "Senden vieler Requests"
    Werden sehr viele Requests von einem Client aus gesendet (wir sprechen hier von tausenden), lohnt es sich, die API-Methode idoit.login zu nutzen, um sich lediglich einmal zu authentifizieren.<br>
    Andernfalls kann es passieren, dass in zu kurzer Zeit zu viele Sessions erstellt, aber nicht wieder beendet werden. Dies könnte dazu führen, dass i-doit unbenutzbar wird, bis die Sessions beendet wurden.<br>
    Dies erhöht außerdem die Performance erheblich.

!!! attention "Api Benutzer"
    Der für API-Aktionen verwendete Standardbenutzer ist **"Api System"**. Dieser kann bei Bedarf unter **"Kontakte -> Personen"** gefunden werden.<br>
    Dieser wird nur verwendet wenn kein Benutzername/Passwort für die Verbindung zur API Schnittstelle verwendet wird.<br>
    **Wird dieses Personen Objekt archiviert/gelöscht, kann die API nicht mehr ohne Authentifizierung genutzt werden.**<br>

### Beispiel

Anhand eines simplen Beispiels wird ein neues Objekt vom Typ **Server** mit dem Objekt-Titel "My little server" über die API erstellt.

Request an den Server:

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

Diesen Request kann man für Testzwecke via cURL absenden:

```shell
curl \
--data '{"jsonrpc":"2.0","method":"cmdb.object.create","params":{"type":"C__OBJTYPE__SERVER","title":"My little server","apikey":"c1ia5q"},"id":1}' \
--header "Content-Type: application/json" \
https://demo.i-doit.com/src/jsonrpc.php
```

Die Response vom Server:

```json
{
    "jsonrpc": "2.0",
    "result": {
        "id": "3351",
        "message": "Object was successfully created",
        "success": true
    },
    "id": 1
}
```

## Kategorien in der IT-Dokumentation

Eine hilfreiche Auflistung aller in i-doit verwendeten Kategorien und Attribute finden Sie in der Verwaltung:

[![Kategorien in der IT-Dokumentation](../../assets/images/de/i-doit-pro-add-ons/api/2-api.png)](../../assets/images/de/i-doit-pro-add-ons/api/2-api.png)

Dort wird beispielsweise aufgelistet, unter welchem Namen Kategorien und Attribute angesprochen werden können und welche Datentypen die jeweiligen Attribute erwarten.<br>
Für [benutzerdefinierte Kategorien](../../grundlagen/benutzerdefinierte-kategorien.md) bzw. Attribute finden Sie die technischen Schlüssel in der jeweiliges benutzerdefinierten Kategorie. Dort ist es möglich die technisches Schlüssel neu zu benennen.

## Clients und Libraries

Es gibt bereits zahlreiche Projekte und Produkte, die die API von i-doit benutzen. Einige Clients und Libraries stellen wir an dieser Stelle vor:

| Name | Website | Programming language | License |
| --- | --- | --- | --- |
| Idoit.API.Client | [https://github.com/OKT90/Idoit.API.Client](https://github.com/OKT90/Idoit.API.Client) | C#  | MIT |
| i-doit API client | [https://github.com/bheisig/i-doit-api-client-php](https://github.com/bheisig/i-doit-api-client-php) | PHP | AGPLv3 |
| i-doit CLI | [https://github.com/bheisig/i-doit-cli](https://github.com/bheisig/i-doit-cli) | PHP | AGPLv3 |
| i-doit-go-api | [https://github.com/cseeger-epages/i-doit-go-api](https://github.com/cseeger-epages/i-doit-go-api) | Go  | GPLv3 |
| i-doit-python | <https://github.com/ScaleUp-Technologies/i-doit-python> | Python | MIT |
| ansible-i-doit | <https://github.com/ScaleUp-Technologies/ansible-i-doit> | Python | MIT |
| i-doit_API | <https://github.com/mvorl/i-doit_API>| Python | AGPLv3 |

!!! info "Feedback"
    Sollte ein Client oder eine Library in diesem Artikel noch nicht aufgeführt sein, freuen wir uns über eine kurze Nachricht an [feedback@i-doit.com](mailto:feedback@i-doit.com).

## Dokumentation zum Download (veraltet)

Eine [von den Entwicklern erstellte Dokumentation](../../assets/downloads/i-doit-JSON-RPC-1.8.3.pdf) steht im PDF-Format zum Download.

Seit Version 1.8.1 wird die API als Add-on veröffentlicht. Vorherige Releases waren [in i-doit inkludiert](../../versionshistorie/index.md).

## FAQ

### Error Messages

| Error Message | Problem |
| --- | --- |
| User settings are only available after logging in. (i-doit <= 21) | Die Api System Person wurde archiviert oder gelöscht.  <br>  <br>**Lösung:**  Die Api System Person muss wiederhergestellt werden oder es muss eine Authentifizierungsmethode genutzt werden. |
| i-doit system error: Could not connect tenant database. (i-doit >=22) | Die Api System Person wurde archiviert oder gelöscht.  <br>  <br>**Lösung:**  Die Api System Person muss wiederhergestellt werden oder es muss eine Authentifizierungsmethode genutzt werden. |

## Releases

| Version | Datum | Changelog |
| --- | --- | --- |
| 2.0 | 10.04.2024 | [Task] Implement base architecture for new endpoint "cmdb.external"<br>[Task] Restructure API, implement 'v2' endpoint<br>[Bug]  Reading dialog+ entries from C__CATS__GROUP_TYPE leads to PHP error<br>[Bug]  Inputs are not displayed as they were entered when reading via the API<br>[Bug]  Categories and attributes needs to be updated |
| 1.16 | 27.02.2024 | [Bug] Dialog plus entry is not resolved via string<br>[Bug] cmdb.reports.read attaches "  " to each value<br>[Bug] Reading a object via cmdb.object.read results in "0" for status and cmdb_status<br>[Bug] API System setting overwrites tenant setting<br>[Bug] PHP error when reading category C__CATG_GENERAL<br>[Bug] cmdb.logbook.create with using a string for alert_level the field is empty<br>[Bug] cmdb.logbook.create with using a integer for source will cause a php error<br>[Bug] cmdb.object.purge does not work because it checks quickpurge option<br>[Bug] cmdb.object_types filter for title/titles needs to be a constant<br>[Bug] Save buttons do not display a success notification<br>[Bug] "cmdb.objects.read" endpoint does not work correctly with "type_title" filter and limit<br>[Bug] When using cmdb.dialog.read for category = C__CATG__CLUSTER_ROOT and property = quorum, one level too much is output<br> |
| 1.15 | 07.11.2023 | [Bug]  Using API after update to i-doit pro 25 displays license error message<br>[Bug]  Positioning an object in a rack misinterprets the rack unit position<br>[Bug]  The new cryptography method significantly extends API requests when no login has occurred previously<br>[Bug]  The overview of the API categories and attributes also shows virtual properties<br>[Bug]  Operating system > Version cannot be referenced via title, if a second operating system has the  ame version title<br>[Bug]  Cannot create a dialog entry with value "0"<br>[Bug]  API Categories and attributes not working<br>[Bug]  C__CATG__NETWORK_PORT attribute default_vlan is not saveable |
| 1.14.1 | 13.06.2023 | [Task] Use 'cmdb.quickpurge' setting from tenant-settings<br>[Bug]  Specific sub-categories can not be read via cmdb.objects.read<br>[Bug]  Wrong successful message when using id instead of assigned_object<br>[Bug]  The "Date for Notification" field in category "SIM" can not be emptied by the API<br>[Bug]  Category Application is not displayed in Categories and attributes<br>[Bug]  Set a Location in Rack is not correct if the Height unit sorting is Ascending<br>[Bug]  Validation error for custom category field time<br>[Bug]  It is not possible to remove a Network -> Port  -> addresses value<br>[Bug]  It is not possible to assign a Host address  -> assigned_port value<br>[Bug]  Write data to  Network > logical Ports > ports display SQL error message<br>[Bug]  Layer 2 Net  -> Assigned logical ports is not Editable<br> [Bug]  Version of software assignment does not get assigned correctly<br>[Bug]  "Categories and attributes" contains empty categories like Document and Floorplan<br>[Bug]  Typo in response message idoit.logout |
| 1.14 | 21.03.2023 |  [Improvement] New method "cmdb.ip_search.getNetworksByIp" returns all Layer3 objects a given IP is within the defined range (contributed by becon GmbH) <br>[Bug] Creating objects results in two entries in category 'Accounting' <br>[Bug] Category 'C__CATS__ORGANIZATION_CONTACT_ASSIGNMENT' can not be updated <br> [Bug] Translations for 'LC__CMDB__CATG__VD__HOST_RAID_ARRAY' is missing <br> [Bug] Add 'limit' and 'offset' options to endpoint 'cmdb.reports.read' <br>[Bug] SQL error when updating category 'network > port' <br>[Bug] Can't read type of layer2 net category <br>[Bug] Attribute "GPS" in category "C__CATG__LOCATION" is not writeable |
| 1.13.1 | 24.01.2023 | [Bug] Some fields are not being validated  <br>[Bug] The Login method can use old session keys  <br>[Bug] Validation error f\_popup\_  <br>[Bug] Setting a Dialog Attribute via causes Fatal error  <br>[Bug] Failed validation breaks the response  <br>[Bug] installDate is always set to actual date/time  <br>[Bug] The addresses attribute of the Network > Port category is incorrectly validated by API validation  <br>[Bug] Date of Change is not altered when archiving a object via API |
| 1.13 | 05.09.2022 | [Task] PHP 8.0 compatibility  <br>[Bug] Reports displayed via the API show language constants  <br>[Bug] The Hostname field of the Monitoring category is incorrectly validated by API validation  <br>[Bug] Changing the object type via the API via type: dialog constant is not possible  <br>[Bug] An EntryID is needed to purge single-value entries  <br>[Bug] The API shall be able to change passwords of users  <br>[Bug] The Host address field of the Network > Port category is incorrectly validated by API validation  <br>[Bug] The Latitude, Longitude and Position fields in the Location category cabinet are incorrectly validated by API validation  <br>[Bug] The Type and Assigned license key fields of the Software Assignment category are incorrectly validated by API validation  <br>[Bug] The Image attribute of the Object picture category is incorrectly validated by API validation |
| 1.12.3 | 21.02.2022 | [Bug] Edit host address > primary\_fqdn sets field default gateway for the network to Yes  <br>[Bug] If you edit an entry in the host address category, the IP address is removed. |
| 1.12.2 | 09.08.2021 | [Improvement] New parameters "offset" and "limit" for the "cmdb.category.read" method  <br>[Bug] Virtual Switches > Creating Port Groups generates SQL error message  <br>[Bug] Cluster members cannot be assigned via API using the category C\_\_CATG\_\_CLUSTER\_MEMBERSHIPS  <br>[Bug] The API can not create sub-categories in 'cmdb.object.create' context  <br>[Bug] Layer 3 nets cannot be assigned with API validation enabled in Layer 2 nets  <br>[Bug] When the layer 3 net is changed the layer 3 net is assigned to itself under layer 2 net assignment  <br>[Bug] The category SLA (C\_\_CATG\_\_SLA) cannot be described via the API / With API validation switched off the category is emptied  <br>[Bug] Dialog+ fields with 'PropertyFactory' definition can not be written |
| 1.12.1 | 18.01.2021 | [Bug] cmdb.category.quickpurge cannot be used with custom categories  <br>[Bug] API version 1.12 can no longer be used in the open variant of i-doit |
| 1.12 | 14.01.2021 | [Bug] API: It is not possible to create a volume license via the API if "type": "volume license" is used  <br>[Bug] Saving the "Layer-2 Nets" category deletes ip helper  <br>[Bug] Contact assignment of a group of people will be deleted if it is updated via the API |
| 1.11.3 | 01.12.2020 | [Bug] Assign cable with fibers/leads while saving connection  <br>[Bug] Limit assignment categories to one entry while creating  <br>[Bug] Do not connect root location while creating cluster membership  <br>[Bug] Do not create wrong output after removing cable connection  <br>[Bug] Cannot assign objects to category "locally assigned objects" (requires i-doit 1.15.1)  <br>[Bug] The category C\_\_CATG\_\_IMAGE is not read correctly via the API  <br>[Bug] The category C\_\_CATG\_\_IMAGE cannot be written correctly  <br>[Bug] The dates of the category contract information cannot be set via the API  <br>[Bug] Category > Assigned Subscriptions C\_\_CATG\_\_ASSIGNED\_SUBSCRIPTIONS key uuid cannot be set via string only via int  <br>[Bug] Read Methods: Do not output HTML tags in description fields  <br>[Bug] Objects can only be created via the API if the right to all object types is granted  <br>[Bug] Ports cannot be uniquely referenced via the API  <br>[Bug] Empty string supplied via API |
| 1.11.2 | 24.06.2020 | [Bug] API method: cmdb.object overrides the rights system |
| 1.11.1 | 09.04.2020 | [Bug] Updates via the API (save method) sets arbitrary entries in the Virtual Host category<br> |
| 1.11 | 23.03.2020 | [Bug] Do not connect root location while creating cluster membership[Bug] Objects that are changed via the API should also be locked for this period (Read > Update). <br> [Bug] Permission system error when using a user to change user-defined categories <br> [Bug] Data record of the standard_gateway always shows an ID[Bug] When updating the category 'General' all tags are removed <br> [Bug] Report displays HTML in the result<br> |
| 1.10.4 | 02.09.2019 | [Improvement] Add RPC to handle the CMDB status <br> [Improvement] Filling virtual custom category properties results in an error <br> [Improvement] Create, read, update and delete template objects and mass change template objects <br> [Bug] In the "Local Mass Storage" category, models cannot be created using the API. <br> [Bug] When updating the model, a Dialog+ value is created / displayed with the ID of the model. <br> [Bug] Update of a CPU title changes the frequency <br> [Bug] Improved handling of sorting of hight units when using API  <br> [Bug] API "Categories and properties" page displays no content <br> [Bug] Saving the WAN category writes wrong values for router and net[Bug] No salutation returns wrong value in JSON-API <br> [Bug] Missing values in the API method "cmdb.category_info"<br> |
| 1.10.3 | 06.05.2019 | <br>[Bug] Assignment of devices to segments in slots not possible <br> [Bug] Validating requests breaks altering attributes<br> |
| 1.10.2 | 01.04.2019 | [Bug] cmdb.category.read: Lese nur Einträge mit Status "normal", wenn nicht anders angegeben <br> [Bug] Selektiere Wert in einem "Dialog+"-Attribut über dessen Konstante <br> [Bug] Korrigiere SQL-Fehler beim verbinden von 2 Anschlüssen <br> [Bug] Objekt löschen unter Angabe des Status (C__RECORD_STATUS__DELETED) führt zur Endlosschleife <br> [Bug] Objekt-Status muss beim Löschen zwingend angegeben werden, obwohl er optional sein sollte <br> [Bug] idoit.license.read: Gebe neues Format aus <br> [Bug] idoit.addons.read: Verwende neue Lizenzform <br> [Bug] Löschen einer unbekannten Datensatz ID gibt Erfolg aus <br> [Bug] Erstelle Objekte mit definierter SYSID über die API <br> [Bug] API gibt nicht alle IP-Adressen der IP-Liste zurück <br> [Bug] Lese Daten aus der Kategorie Laufwerk <br> [Bug] Personengruppen Zuweisungen via API purgen <br> [Bug] Rückgabe des Attributs "Anrede" wiederherstellen<br> |
| 1.10.1 | 23.01.2019 | [Bug] Authentifizierung mit LDAP nicht möglich <br> [Bug] SQL Injection Lücke bei Login<br> |
| 1.10 | 17.12.2018 | [Verbesserung] Validierung von API Requests per Experteneinstellung aktivieren <br> [Verbesserung] Unterschiedliche API keys sind in einem Batch Request nicht erlaubt <br> [Verbesserung] Fehler wird geworfen, wenn eine ID innerhalb eines Batch Request wiederholt wird <br> [Verbesserung] API Key verpflichtend, User-Login mit inkludiertem Rechtesystem optional <br> [Verbesserung] cmdb.category.save erstellt oder aktualisiert Kategorie-Einträge <br> [Verbesserung] Auslesen von Lizenzinformationen per API <br> [Verbesserung] Internes Logging menschen-lesbar machen <br> [Verbesserung] Filtern von Kategorie-Einträgen nach Status <br> [Verbesserung] Kategorie-Eintrag wiederherstellen <br> [Verbesserung] Kategorie-Eintrag bereinigen <br> [Verbesserung] Kategorie-Eintrag löschen <br> [Verbesserung] Kategorie-Eintrag archivieren <br> [Verbesserung] Objekt als Massenänderungsvorlage markieren[Verbesserung] Objekt als Template markieren[Verbesserung] Objekt wiederherstellen <br> [Verbesserung] Objekt bereinigen <br> [Verbesserung] Objekt löschen <br> [Verbesserung] Objekt archivieren <br> [Verbesserung] Erstelle Objekt mit Kategorie-Einträgen <br> [Verbesserung] Lese Objekte mit Kategorie-Einträgen <br> [Verbesserung] Gebe Integer-Wert bei einer Response nicht weiterhin als String zurück <br> [Verbesserung] Beschreibe in der Web GUI den Umgang mit Kategorien und Attributen <br> [Verbesserung] Console Commands via API aufrufen <br> [Verbesserung] Abfrage von Informationen installierter Add-ons <br> [Verbesserung] Auslesen aller Konstanten <br> [Verbesserung] Templates und Änderungsvorlagen auslesen, erstellen, aktualisieren und löschen <br> [Änderung] cmdb.category.create und .update sind veraltet <br> [Bug] cmdb.category.create: Lizenz-Schlüssel kann in Kategorie "Softwarezuweisung" nicht angegeben werden <br> [Bug] Rückwärtige Kategorien liefern keine oder falsche Verbindungen zu Objekten <br> [Bug] cmdb.category.read: Falsche Objektbeziehungen und Mehrfacheinträge in Kategorie "C__CATS_NET_TYPE__IPV4" <br> [Bug] API liefert bei Attribut "zone" der Kategorie "Hostadresse" bei leerer Zuweisung ein leeresArray, bei einem Eintrag stattdessen ein Objekt <br> [Bug] Unbekannte Attribute werden ignoriert <br> [Bug] Ungültige Werte führen nicht zu Fehlermeldung <br> [Bug] Server sendet keine Notification, wenn "id" im Request nicht gesetzt ist <br> [Bug] cmdb.category.read liefert Einträge für leere Kategorien <br> [Bug] Inkorrekte Fehlermeldung bei der Verknüpfung eines Nicht-Netz-Objekts über die API in einem Feld, in dem ein Netz-Objekt erwartet wird (Hostadresse) <br> [Bug] Kabel bleiben unbenutzt wenn Verbindungen mittels der API erstellt werden <br> [Bug] Application-Priority wird nicht übernommen <br> [Bug] Timeout wird nicht nach jedem Request zurückgesetzt <br> [Bug] Fehler in Verbindung mit Hersteller/Modell über die API[Bug] API: Faserverbindungen können nicht ausgelesen werden <br> [Bug] Übergibt man eine ID als String ist es möglich das die falsche Daten übernommen werden <br> [Bug] Ports verbinden über die API nutzt falsche Objekte als Kabel<br> |
| 1.9.1 | 16.04.2018 | [Bug] cmdb.reports.read wirft SQL-Fehler bei variablen Reports<br>[Bug] Methode cmdb.reports wirft PHP Warning<br>[Bug] Nach Erstellung eines Objekts muss ein Reindex ausgeführt werden, um das Objekt per Suche zu finden<br>[Bug] Kategorie-Eintrag für C__CATS__ORGANIZATION_CONTACT_ASSIGNMENT kann nicht erstellt werden<br>[Bug] API berücksichtigt Sprachen-Parameter nicht<br> |
| 1.9 | 23.01.2018 | [Verbesserung]  Suche nach Objekten anhand von Attributen und Werten<br>[Verbesserung]  Benutzerrechte bei API Calls berücksichtigen<br>[Verbesserung]  Angabe eines Templates beim Erstellen eines Objekts via "cmdb.object.create"<br>[Bug] Datei kann nicht hochgeladen werden<br>[Bug] Über die API geänderter Wert erzeugt Logbucheintrag ohne Titel<br>[Bug] Benutzerdefinierte Dialog Plus Inhalte über die API auslesen <br> [Bug] Auslesen von Passwörtern nicht möglich<br>[Bug] Methode "cmdb.object.create" legt ObjektID's teils als String, teils als Integer an<br>[Bug] Datenbank-Fehler statt Meldung im Klartext beim Versuch, ein Objekt, das nicht existiert, über die API zu löschen<br>[Bug] Dialog Plus Felder, die eine Abhängigkeit zu einem anderen Attribut haben, werden nicht angelegt<br> |
| 1.8.1 | 02.03.2017 | <br>[Bug] Nach Erstellen werden benutzerdefinierte Dialog+-Felder nicht angezeigt<br>[Bug] Angelegte Dialog-Einträge erhalten den Status 1 anstelle von 2 (Normal) <br> [Bug] cmdb.object.delete berücksichtigt Parameter "status" nicht<br>[Bug] cmdb.category.create wirft Datenbank-Fehler für Kategorie "Modell"<br> |
