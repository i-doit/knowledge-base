**Inhaltsverzeichnis**

*   1[Technischer Hintergrund](#API(JSONRPC)-TechnischerHintergrund)
*   2[Download](#API(JSONRPC)-Download)
*   3[Konfiguration](#API(JSONRPC)-Konfiguration)
*   4[Zugriff](#API(JSONRPC)-Zugriff)
*   5[Authentifizierung und Autorisierung](#API(JSONRPC)-AuthentifizierungundAutorisierung)
*   6[Beispiel](#API(JSONRPC)-Beispiel)
*   7[Kategorien in der IT-Dokumentation](#API(JSONRPC)-KategorieninderIT-Dokumentation)
*   8[Clients und Libraries](#API(JSONRPC)-ClientsundLibraries)
*   9[Dokumentation zum Download](#API(JSONRPC)-DokumentationzumDownload)
*   10[FAQ](#API(JSONRPC)-FAQ)
    *   10.1[Error Messages](#API(JSONRPC)-ErrorMessages)
*   11[Releases](#API(JSONRPC)-Releases)

  

  

i-doit ermöglicht den externen Zugriff auf die [IT-Dokumentation](/display/de/Glossar) über eine [Programmierschnittstelle](https://de.wikipedia.org/wiki/Programmierschnittstelle), auch API genannt. Es können Daten gelesen, erstellt, aktualisiert und auch gelöscht werden. Somit stellt die API ähnliche Funktionen wie die Web GUI bereit – nur lassen sich diese problemlos automatisieren.

Technischer Hintergrund
-----------------------

Die API von i-doit bringt typische [CRUD](https://de.wikipedia.org/wiki/CRUD)\-Funktionalitäten mit. Daten können darüber

*   erstellt (**C**reate),
*   gelesen (**R**ead),
*   aktualisiert (**U**pdate) und
*   gelöscht (**D**elete) werden.

Ein Client (beispielsweise in Form eines Scripts) sendet dazu einen Request an den Server (i-doit), um eine Methode auf dem Server ausführen zu lasen. Diese Vorgehensweise nennt man [Remote Procedure Call (RPC)](https://de.wikipedia.org/wiki/Remote_Procedure_Call). Das Ergebnis der Methode wird an den Client als Antwort (Response) zurückgegeben. Die API von i-doit stützt sich bei dieser Kommunikation auf das Protokoll [JSON-RPC](http://www.jsonrpc.org/) in Version 2.0. Es verwendet als höheres Protokoll HTTP und als Austauschformat [JavaScript Objekt Notation (JSON)](https://de.wikipedia.org/wiki/JavaScript_Object_Notation). Per HTTP POST wird ein Request im JSON-Format an den Server geschickt. Die Response erfolgt ebenfalls im JSON-Format.

API-Aufrufe können asynchron erfolgen, ohne den Zusammenhang zwischen Requests und Responses zu verlieren. Die verwendete Programmiersprache kann frei gewählt werden.

API statt Datenbank

Es ist sehr zu empfehlen, die API immer Datenbank-Manipulationen vorzuziehen. SQL Statements umgehen allerlei interne Verarbeitungsschritte. Wird per `INSERT`, `UPDATE` oder `DELETE` ein Datensatz via SQL manipuliert, könnte das die Datenintegrität gefährden und i-doit unbrauchbar machen.

Download
--------

Die API wird für die pro-Variante als kostenloses [Add-on](/display/de/i-doit+pro+Add-ons) im [Kundenportal](/display/de/Kundenportal) zum Download angeboten. Benutzern der open-Variante steht es ebenfalls kostenlos über die Website [i-doit.org](https://i-doit.org/) zur Vergfügung. Die [Installation](/display/de/i-doit+pro+Add-ons) folgt demselben Prinzip der anderen Add-ons für i-doit.

Konfiguration
-------------

Die Konfiguration der API geschieht über die [Web GUI](/display/de/Web+GUI) von i-doit, zu finden unter **`Verwaltung → Schnittstellen / externe Daten → JSON-RPC API → Allgemeine Einstellungen`**.

![](/download/attachments/7831613/image2020-12-4_13-5-22.png?version=1&modificationDate=1607083523376&api=v2&effects=drop-shadow)

Info

Das Entfernen von HTML-Tags aus Beschreibungsfeldern ist erst ab i-doit Version 1.15.2 mit installierter API Version 1.11.3 möglich.

  
Zu beachten ist, dass das Logging von API Requests bei jedem Request eine Datei im Installationsverzeichnis von i-doit unter `log/` anlegt. Dies könnte bei massivem Gebrauch der API zu einem erhöhten Speicherplatzbedarf führen.

Zugriff
-------

Um die API von i-doit anzusprechen, gibt es eine spezielle URL. Der Basis-URL wird ein `src/jsonrpc.php` angehangen:

[?](#)

`https:``//demo``.i-doit.com``/src/jsonrpc``.php`

Authentifizierung und Autorisierung
-----------------------------------

Damit Requests von der API verarbeitet werden, ist ein API Key erforderlich. Mit dem API Key wird der Mandant identifiziert.  
Zudem kann aktiviert werden, dass ein dedizierter Benutzer-Account für die Anmeldung verwendet wird. Für diesen können wie gewohnt Rechte vergeben werden. Andernfalls stehen über die API alle Rechte zur Verfügung.  
Zusätzlicher Vorteil ist, dass man pro Dritt-System/Script einen dedizierten Benutzer angeben kann, um einfach nachvollziehen zu können, welche Datenflüsse von wo nach wo stattfinden.

Werden sehr viele Requests von einem Client aus gesendet (wir sprechen hier von tausenden), lohnt es sich, die API-Methode `idoit.login` zu nutzen, um sich lediglich einmal zu authentifizieren.  
Andernfalls kann es passieren, dass in zu kurzer Zeit zu viele Sessions erstellt, aber nicht wieder beendet werden. Dies könnte dazu führen, dass i-doit unbenutzbar wird, bis die Sessions beendet wurden.  
Dies erhöht außerdem die Performance erheblich.

Der für API-Aktionen verwendete Standardbenutzer ist "Api System“. Dieser kann bei Bedarf unter "Kontakte -> Personen" gefunden werden.  
Dieser wird nur verwendet wenn kein Benutzername/Passwort für die Verbindung zur API Schnittstelle verwendet wird.  
Wird die Person archiviert/gelöscht kann die API nicht mehr ohne Authentifizierung genutzt werden.

  

Methoden

Eine ausführliche Dokumentation mit vielen Beispielen steht im PDF-Format zum Download zur Verfügung (siehe unten).

| Methode | Beschreibung |
| --- | --- |
| `idoit.version` | Version von i-doit abfragen |
| `idoit.login` | [Login](/display/de/Erstanmeldung) |
| `idoit.logout` | [Logout](/display/de/Erstanmeldung) |
| `idoit.constants` | [Konstanten](/display/de/Glossar) abfragen |
| `idoit.search` | In i-doit [suchen](/display/de/Suche) |
| `cmdb.objects` | [Objekte](/display/de/Glossar) auslesen |
| `cmdb.object.{create, read, update, delete}` | Ein Objekt erstellen, auslesen, aktualisieren, [archivieren/als gelöscht markieren/unwiderruflich löschen](/display/de/Lebens-+und+Dokumentationszyklus) |
| `cmdb.object_types` | [Objekttypen](/display/de/Glossar) abfragen |
| `cmdb.category_info` | [Attribute](/display/de/Glossar) zu einer [Kategorie](/display/de/Struktur+der+IT-Dokumentation) auslesen |
| `cmdb.category.{create, read, update, delete}` | Einen Kategorie-Eintrag erstellen, lesen, aktualisieren, löschen |
| `cmdb.dialog.{create, read}  <br>` | Werte eines [Dialog](/display/de/Glossar)\-Feldes erstellen oder auslesen |
| `cmdb.reports` | Einen [Report](/display/de/Report+Manager) ausführen |
| `cmdb.objects_by_relation` | Objekte nach Beziehungsart auslesen |
| `cmdb.location_tree` | Standort\-Pfad auslesen |
| `cmdb.workstation_components` | Arbeitsplatzkomponenten auslesen |
| `cmdb.object_type_categories` | Auslesen, welche Kategorien zu welchen Objekttypen konfiguriert sind |
| `cmdb.object_type_groups` | Auslesen, welche Objekttypen welchen [Objekttypgruppen](/display/de/Glossar) zugeordnet sind |
| `cmdb.logbook.{create, read}` | Einen Logbuch-Eintrag erstellen, auslesen |
| `cmdb.impact` | Rekursive Abfrage aller Objektbeziehungen |

Beispiel
--------

Anhand eines simplen Beispiels wird ein neues Objekt vom Typ `**Server**` mit dem Objekt-Titel "My little server" über die API erstellt.

Request an den Server:

[?](#)

`{`

`"jsonrpc"``:` `"2.0"``,`

`"method"``:` `"cmdb.object.create"``,`

`"params"``: {`

`"type"``:` `"C__OBJTYPE__SERVER"``,`

`"title"``:` `"My little server"``,`

`"apikey"``:` `"c1ia5q"`

`},`

`"id"``: 1`

`}`

Diesen Request kann man für Testzwecke via cURL absenden:

[?](#)

`curl \`

`--data` `'{"jsonrpc":"2.0","method":"cmdb.object.create","params":{"type":"C__OBJTYPE__SERVER","title":"My little server","apikey":"c1ia5q"},"id":1}'` `\`

`--header` `"Content-Type: application/json"` `\`

`https:``//demo``.i-doit.com``/src/jsonrpc``.php`

Die Response vom Server:

[?](#)

`{`

`"jsonrpc"``:` `"2.0"``,`

`"result"``: {`

`"id"``:` `"3351"``,`

`"message"``:` `"Object was successfully created"``,`

`"success"``:` `true`

`},`

`"id"``: 1`

`}`

Kategorien in der IT-Dokumentation
----------------------------------

Eine hilfreiche Auflistung aller in i-doit verwendeten Kategorien und Attribute finden Sie in der Verwaltung:

![](/download/attachments/7831613/image2020-8-17_12-47-28.png?version=1&modificationDate=1597661248852&api=v2&effects=drop-shadow)

Dort wird beispielsweise aufgelistet, unter welchem Namen Kategorien und Attribute angesprochen werden können und welche Datentypen die jeweiligen Attribute erwarten.

Clients und Libraries
---------------------

Es gibt bereits zahlreiche Projekte und Produkte, die die API von i-doit benutzen. Einige Clients und Libraries stellen wir an dieser Stelle vor:

| Name | Website | Programmiersprache | Lizenz |
| --- | --- | --- | --- |
| Idoit.API.Client | [https://github.com/OKT90/Idoit.API.Client](https://github.com/OKT90/Idoit.API.Client) | C#  | MIT |
| i-doit API client | [https://github.com/bheisig/i-doit-api-client-php](https://github.com/bheisig/i-doit-api-client-php) | PHP | AGPLv3 |
| i-doit CLI | [https://github.com/bheisig/i-doit-cli](https://github.com/bheisig/i-doit-cli) | PHP | AGPLv3 |
| i-doit-go-api | [https://github.com/cseeger-epages/i-doit-go-api](https://github.com/cseeger-epages/i-doit-go-api) | Go  | GPLv3 |

Feedback

Sollte ein Client oder eine Library in diesem Artikel noch nicht aufgeführt sein, freuen wir uns über eine kurze Nachricht an [feedback@i-doit.com](mailto:feedback@i-doit.com).

Dokumentation zum Download
--------------------------

Eine [von den Entwicklern gepflegte Dokumentation](/download/attachments/7831613/i-doit%20JSON-RPC%201.8.3.pdf?version=1&modificationDate=1488357023614&api=v2) steht im PDF-Format zum Download. (veraltet)

Seit Version 1.8.1 wird die API als Add-on veröffentlicht. Vorherige Releases waren [in i-doit inkludiert](/display/de/Versionshistorie).

FAQ
---

### Error Messages

| Error Message | Problem |
| --- | --- |
| Usersettings are only available after logging in. (i-doit <= 21) | Die Api System Person wurde archiviert oder gelöscht.  <br>  <br>**Lösung:**  Die Api System Person muss wiederhergestellt werden oder es muss eine Authentifizierungsmethode genutzt werden. |
| i-doit system error: Could not connect tenant database. (i-doit >=22) | Die Api System Person wurde archiviert oder gelöscht.  <br>  <br>**Lösung:**  Die Api System Person muss wiederhergestellt werden oder es muss eine Authentifizierungsmethode genutzt werden. |

Releases
--------

| Version | Datum | Changelog |
| --- | --- | --- |
| 1.13.1 | 24.01.2023 | \[Bug\] Some fields are not being validated  <br>\[Bug\] The Login method can use old session keys  <br>\[Bug\] Validation error f\_popup\_  <br>\[Bug\] Setting a Dialog Attribute via causes Fatal error  <br>\[Bug\] Failed validation breaks the response  <br>\[Bug\] installDate is always set to actual date/time  <br>\[Bug\] The addresses  attribute of the Network > Port category is incorrectly validated by API validation  <br>\[Bug\] Date of Change is not altered when archiving a object via API |
| 1.13 | 05.09.2022 | \[Task\] PHP 8.0 compatibility  <br>\[Bug\]  Reports displayed via the API show language constants  <br>\[Bug\]  The Hostname field of the Monitoring category is incorrectly validated by API validation  <br>\[Bug\]  Changing the object type via the API via type: dialog constant is not possible  <br>\[Bug\]  An EntryID is needed to purge single-value entries  <br>\[Bug\]  The API shall be able to change passwords of users  <br>\[Bug\]  The Host address field of the Network > Port category is incorrectly validated by API validation  <br>\[Bug\]  The Latitude, Longitude and Position fields in the Location category cabinet are incorrectly validated by API validation  <br>\[Bug\]  The Type and Assigned license key fields of the Software Assignment category are incorrectly validated by API validation  <br>\[Bug\]  The Image attribute of the Object picture category is incorrectly validated by API validation |
| 1.12.3 | 21.02.2022 | \[Bug\] Edit host address > primary\_fqdn sets field default gateway for the network to Yes  <br>\[Bug\] If you edit an entry in the host address category, the IP address is removed. |
| 1.12.2 | 09.08.2021 | \[Improvement\] New parameters "offset" and "limit" for the "cmdb.category.read" method  <br>\[Bug\] Virtual Switches > Creating Port Groups generates SQL error message  <br>\[Bug\] Cluster members cannot be assigned via API using the category C\_\_CATG\_\_CLUSTER\_MEMBERSHIPS  <br>\[Bug\] The API can not create sub-categories in 'cmdb.object.create' context  <br>\[Bug\] Layer 3 nets cannot be assigned with API validation enabled in Layer 2 nets  <br>\[Bug\] When the layer 3 net is changed the layer 3 net is assigned to itself under layer 2 net assignment  <br>\[Bug\] The category SLA (C\_\_CATG\_\_SLA) cannot be described via the API / With API validation switched off the category is emptied  <br>\[Bug\] Dialog+ fields with 'PropertyFactory' definition can not be written |
| 1.12.1 | 18.01.2021 | \[Bug\] cmdb.category.quickpurge cannot be used with custom categories  <br>\[Bug\] API version 1.12 can no longer be used in the open variant of i-doit |
| 1.12 | 14.01.2021 | \[Bug\] API: It is not possible to create a volume license via the API if "type": "volume license" is used  <br>\[Bug\] Saving the "Layer-2 Nets" category deletes ip helper  <br>\[Bug\] Contact assignment of a group of people will be deleted if it is updated via the API |
| 1.11.3 | 01.12.2020 | \[Bug\] Assign cable with fibers/leads while saving connection  <br>\[Bug\] Limit assignment categories to one entry while creating  <br>\[Bug\] Do not connect root location while creating cluster membership  <br>\[Bug\] Do not create wrong output after removing cable connection  <br>\[Bug\] Cannot assign objects to category "locally assigned objects" (requires i-doit 1.15.1)  <br>\[Bug\] The category C\_\_CATG\_\_IMAGE is not read correctly via the API  <br>\[Bug\] The category C\_\_CATG\_\_IMAGE cannot be written correctly  <br>\[Bug\] The dates of the category contract information cannot be set via the API  <br>\[Bug\] Category > Assigned Subscriptions C\_\_CATG\_\_ASSIGNED\_SUBSCRIPTIONS key uuid cannot be set via string only via int  <br>\[Bug\] Read Methods: Do not output HTML tags in description fields  <br>\[Bug\] Objects can only be created via the API if the right to all object types is granted  <br>\[Bug\] Ports cannot be uniquely referenced via the API  <br>\[Bug\] Empty string supplied via API |
| 1.11.2 | 24.06.2020 | \[Bug\] API method: cmdb.object overrides the rights system |
| 1.11.1 | 09.04.2020 | ```<br>[Bug] Updates via the API (save method) sets arbitrary entries in the Virtual Host category<br>``` |
| 1.11 | 23.03.2020 | ```<br>[Bug] Do not connect root location while creating cluster membership[Bug] Objects that are changed via the API should also be locked for this period (Read > Update).[Bug] Permission system error when using a user to change user-defined categories[Bug] Data record of the standard_gateway always shows an ID[Bug] When updating the category 'General' all tags are removed[Bug] Report displays HTML in the result<br>``` |
| 1.10.4 | 02.09.2019 | ```<br>[Improvement] Add RPC to handle the CMDB status[Improvement] Filling virtual custom category properties results in an error[Improvement] Create, read, update and delete template objects and mass change template objects[Bug] In the "Local Mass Storage" category, models cannot be created using the API.[Bug] When updating the model, a Dialog+ value is created/displayed with the ID of the model.[Bug] Update of a CPU title changes the frequency[Bug] Improved handling of sorting of hight units when using API[Bug] API "Categories and properties" page displays no content[Bug] Saving the WAN category writes wrong values for router and net[Bug] No salutation returns wrong value in JSON-API[Bug] Missing values in the API method "cmdb.category_info"<br>``` |
| 1.10.3 | 06.05.2019 | ```<br>[Bug] Assignment of devices to segments in slots not possible[Bug] Validating requests breaks altering attributes<br>``` |
| 1.10.2 | 01.04.2019 | ```<br>[Bug] cmdb.category.read: Lese nur Einträge mit Status "normal", wenn nicht anders angegeben[Bug] Selektiere Wert in einem "Dialog+"-Attribut über dessen Konstante[Bug] Korrigiere SQL-Fehler beim verbinden von 2 Anschlüssen[Bug] Objekt löschen unter Angabe des Status (C__RECORD_STATUS__DELETED) führt zur Endlosschleife[Bug] Objekt-Status muss beim Löschen zwingend angegeben werden, obwohl er optional sein sollte[Bug] idoit.license.read: Gebe neues Format aus[Bug] idoit.addons.read: Verwende neue Lizenzform[Bug] Löschen einer unbekannten Datensatz ID gibt Erfolg aus[Bug] Erstelle Objekte mit definierter SYSID über die API[Bug] API gibt nicht alle IP-Adressen der IP-Liste zurück[Bug] Lese Daten aus der Kategorie Laufwerk[Bug] Personengruppen zuweisungen via API purgen[Bug] Rückgabe des Attributs "Anrede" wiederherstellen<br>``` |
| 1.10.1 | 23.01.2019 | ```<br>[Bug] Authentifizierung mit LDAP nicht möglich[Bug] SQL Injection Lücke bei Login<br>``` |
| 1.10 | 17.12.2018 | ```<br>[Verbesserung] Validierung von API Requests per Experteneinstellung aktivieren[Verbesserung] Unterschiedliche API keys sind in einem Batch Request nicht erlaubt[Verbesserung] Fehler wird geworfen, wenn eine ID innerhalb eines Batch Request wiederholt wird[Verbesserung] API Key verpflichtend, User-Login mit inkludiertem Rechtesystem optional[Verbesserung] cmdb.category.save erstellt oder aktualisiert Kategorie-Einträge[Verbesserung] Auslesen von Lizenzinformationen per API[Verbesserung] Internes Logging menschen-lesbar machen[Verbesserung] Filtern von Kategorie-Einträgen nach Status[Verbesserung] Kategorie-Eintrag wiederherstellen[Verbesserung] Kategorie-Eintrag bereinigen[Verbesserung] Kategorie-Eintrag löschen[Verbesserung] Kategorie-Eintrag archivieren[Verbesserung] Objekt als Massenänderungsvorlage markieren[Verbesserung] Objekt als Template markieren[Verbesserung] Objekt wiederherstellen[Verbesserung] Objekt bereinigen[Verbesserung] Objekt löschen[Verbesserung] Objekt archivieren[Verbesserung] Erstelle Objekt mit Kategorie-Einträgen[Verbesserung] Lese Objekte mit Kategorie-Einträgen[Verbesserung] Gebe Integer-Wert bei einer Response nicht weiterhin als String zurück[Verbesserung] Beschreibe in der Web GUI den Umgang mit Kategorien und Attributen[Verbesserung] Console Commands via API aufrufen[Verbesserung] Abfrage von Informationen installierter Add-ons[Verbesserung] Auslesen aller Konstanten[Verbesserung] Templates und Änderungsvorlagen auslesen, erstellen, aktualisieren und löschen[Änderung] cmdb.category.create und .update sind veraltet[Bug] cmdb.category.create: Lizenz-Schlüssel kann in Kategorie "Softwarezuweisung" nicht angegeben werden[Bug] Rückwärtige Kategorien liefern keine oder falsche Verbindungen zu Objekten[Bug] cmdb.category.read: Falsche Objektbeziehungen und Mehrfacheinträge in Kategorie "C__CATS_NET_TYPE__IPV4"[Bug] API liefert bei Attribut "zone" der Kategorie "Hostadresse" bei leerer Zuweisung ein leeresArray, bei einem Eintrag stattdessen ein Objekt[Bug] Unbekannte Attribute werden ignoriert[Bug] Ungültige Werte führen nicht zu Fehlermeldung[Bug] Server sendet keine Notifcation, wenn "id" im Request nicht gesetzt ist[Bug] cmdb.category.read liefert Einträge für leere Kategorien[Bug] Inkorrekte Fehlermeldung bei der Verknüpfung eines Nicht-Netz-Objekts über die API in einem Feld, in dem ein Netz-Objekt erwartet wird (Hostadresse)[Bug] Kabel bleiben unbenutzt wenn Verbindungen mittels der API erstellt werden[Bug] Application-Priority wird nicht übernommen[Bug] Timeout wird nicht nach jedem Request zurückgesetzt[Bug] Fehler in Verbindung mit Hersteller/Modell über die API[Bug] API: Faserverbindungen können nicht ausgelesen werden[Bug] Übergibt man eine ID als String ist es möglich das die falsche Daten übernommen werden[Bug] Ports verbinden über die API nutzt falsche Objekte als Kabel<br>``` |
| 1.9.1 | 16.04.2018 | ```<br>[Bug]           cmdb.reports.read wirft SQL-Fehler bei variablen Reports<br>```<br><br>```<br>[Bug]           Methode cmdb.reports wirft PHP Warning<br>```<br><br>```<br>[Bug]           Nach Erstellung eines Objekts muss ein Reindex ausgeführt werden, um das Objekt per Suche zu finden<br>```<br><br>```<br>[Bug]           Kategorie-Eintrag für C__CATS__ORGANIZATION_CONTACT_ASSIGNMENT kann nicht erstellt werden<br>```<br><br>```<br>[Bug]           API berücksichtigt Sprachen-Parameter nicht<br>``` |
| 1.9 | 23.01.2018 | ```<br>[Verbesserung]  Suche nach Objekten anhand von Attributen und Werten<br>```<br><br>```<br>[Verbesserung]  Benutzerrechte bei API Calls berücksichtigen<br>```<br><br>```<br>[Verbesserung]  Angabe eines Templates beim Erstellen eines Objekts via "cmdb.object.create"<br>```<br><br>```<br>[Bug]           Datei kann nicht hochgeladen werden<br>```<br><br>```<br>[Bug]           Über die API geänderter Wert erzeugt Logbucheintrag ohne Titel<br>```<br><br>```<br>[Bug]           Benutzerdefinierte Dialog Plus Inhalte über die API auslesen<br>```<br><br>```<br>[Bug]           Auslesen von Passwörtern nicht möglich<br>```<br><br>```<br>[Bug]           Methode "cmdb.object.create" legt ObjektID's teils als String, teils als Integer an<br>```<br><br>```<br>[Bug]           Datenbank-Fehler statt Meldung im Klartext beim Versuch, ein Objekt, das nicht existiert, über die API zu löschen<br>```<br><br>```<br>[Bug]           Dialog Plus Felder, die eine Abhängigkeit zu einem anderen Attribut haben, werden nicht angelegt<br>``` |
| 1.8.1 | 02.03.2017 | ```<br>[Bug]           Nach Erstellen werden benutzerdefinierte Dialog+-Felder nicht angezeigt<br>```<br><br>```<br>[Bug]           Angelegte Dialog-Einträge erhalten den Status 1 anstelle von 2 (Normal)<br>```<br><br>```<br>[Bug]           cmdb.object.delete berücksichtigt Parameter "status" nicht<br>```<br><br>```<br>[Bug]           cmdb.category.create wirft Datenbank-Fehler für Kategorie "Modell"<br>``` |