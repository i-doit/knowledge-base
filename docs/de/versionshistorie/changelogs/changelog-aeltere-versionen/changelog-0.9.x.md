# Changelog 0.9.X

0.9.9-9
Erweiterungen:

- Listeneditierung für bestehende Kategorieeinträge
- Massenänderungen für Objekte
- Benutzerdefinierte Pflichtfelder für Kategorien (Verwaltung/Module/CMDB/Kategorie-Validierung)
- Benutzerdefinierte Objektlisten
 - mit schnellerem Seitenwechsel
 - und einstellbaren Spalten (Verwaltung/Module/CMDB/Objekt-Listen)
- Der Query Builder im Report Modul wurde komplett überarbeitet
- Neues System zur E-Mail Benachrichtigung mit grafischer Konfiguration
 - Neben einem neuen Design stehen neue Felder und Bedingungen zur Auswahl
- Neue Platzhalter für Objektnamen im Template System (%SYSID%)
- Wartungsverträge werden zu allgemeinen Verträgen
 - und erhalten überarbeitete Logik
 - Neue Systemrollen für Verträge
- schreibende sowie lesende JSON-RPC Schnittstelle für Logbuch Einträge aus externen Quellen
- Spracheinstellungen werden nun pro User im System gespeichert
- Neugestaltetes Ticket System Modul
 - für eine verbesserte Live-Anbindung an Request Tracker
 - und zur Vorbereitung für eine OTRS Integration
- Das Verfahren zur Generierung von SYS-IDs ist nun über die Objekttypkonfiguration steuerbar

Fixes:

[Bugfix] - Das Löschen von Objekten in größeren Umgebungen/Datenbanken wurde optimiert
[Bugfix] - SQL Fehler bei Nichtangabe von Feldern in Kategorie Planung
[Bugfix] - SecurityFix: Upload von PHP Dateien verhindern
[Bugfix] - Über H-Inventory importierte Objekte erhalten keinen Eintrag in der Kategorie "Allgemein"
[Bugfix] - In der Übersicht der Lizenzgruppe wird immer nur eine Lizenz unter "Lizenzbezeichnung" angezeigt
[Bugfix] - Reader kann Single-Value Kategorie Einträge erstellen
[Bugfix] - Kategorie "Gruppe": kein Logbucheintrag beim Hinzufügen eines Objekts
[Bugfix] - Extras-Menü im IE an falscher Position
[Bugfix] - Auto-Vervollständigung vom Objektbrowser zeigt klickbare Links an
[Bugfix] - Der Mandantenwechsel funktioniert nicht
[Bugfix] - Kategorie Portübersicht: Links führen zu Anschlüssen anstatt Netzwerk-Ports
[Bugfix] - Kategorie Portübersicht: Es erscheint kein horizontaler Scroller bei zu vielen Ports
[Bugfix] - Kategorie Lizenzen / Übersicht: Ist nicht ins Englische übersetzt
[Bugfix] - In einigen Kategorien wird das Feld Beschreibung nicht gespeichert
[Bugfix] - In der Report View für Beziehungen wird der Objektbrowser nicht richtig angezeigt
[Bugfix] - Lizenzen: Wird kein Datum für Start und Ablauf einer Lizenz eingetragen, erscheint bei der Lizenzzuweisung zu einer Hardware das Datum 1970
[Bugfix] - Lizenzbrowser: Wird der Lizenzbrowser geöffnet und steht direktauf einer Lizenz, wird die zweite Spalte nicht direkt angezeigt
[Bugfix] - OCS-Import: Der Konfigurationslink auf der OCS-Import Seite ist falsch
[Bugfix] - Ist die Logbuch Kategorie auf der Übersichtsseite, erscheinen falsche Werte in der Liste
[Bugfix] - Die Neuanlage einer Benutzerdefinierten Kategorie springt unter gewissen Bedingungen in eine bestehende Kategorie, anstatt einen Neueintrag
[Bugfix] - Ein Problem mit der Scrollleiste im Report Manager wurde behoben
[Bugfix] - Unter einigen Umständen zegit der Datei-Wizard einen Fehler und ist nicht benutzbar
[Bugfix] - In einigen Umgebungen können benutzerdefinierte Kategorien nicht gespeichert werden
[Bugfix] - Objekttyüen können nicht mehr als Container definiert werden
[Bugfix] - Objekte, welche aus dem Template System erzeugt werden erhalten teilweise die gleiche SYS-ID
[Bugfix] - Der CSV-Import wird abgebrochen, wenn nicht alle Zuweisungen gemacht wurden
[Bugfix] - Wenn ein "Gerät / Appliance"-Objekt eine Hostadresse erhalten hat wurde dies nicht in der IP-Liste angezeigt
[Bugfix] - Das letzte Oktett der Layer-3-Netzadresse wird bei einer Neuanlage immer automatisch auf "0" geändert
[Bugfix] - Die LDAP-Authentifizierung wirft einen Datenbank-Fehler und die Anmeldung per LDAP ist nicht möglich
[Bugfix] - Bei installiertem verinice-Modul ist es in der Objekttypkonfiguration nicht möglich beim verinice-Mapping keinen Wert auszuwählen

0.9.9-8
Extensions:

- Enhanced network documentation
- Validation and maintenance of IPv4 and IPv6 addresses
- Validation of layer 3 networks
- Various accessibility help
- IPv4 address management
- IPv6 address management
- VLANs (layer 2 networks)
- Layer 2 and layer 3 reports
- Category "routing"
- Category "switch"
- Category "net" -> port overview
- Revised interface to Request Tracker (module: TTS)
- Incl. live queries
- New object type "workstation"
- Category "assigned logical units"
- Category "assigned workstation"
- Creation of logical structures/locations (tree view)
- Renaming "logical interfaces" to "logical ports"
- Link from layer 3 net into logical ports
- Note: By changing the functionality of the category "logical interfaces"
this version only links layer 3 networks. Therefore all layer 2 network
assignments are lost.
- Coupling of manufacturers to model in the category "model"
- Network mask in "hostaddresses" and layer 3 network and optionally in bit
notation
- In the category "net" there must be a field of "reverse DNS".
- New object type: "layer 2 networks"
- Category "port": new field "layer 2 network"
- Category "port": new field "port mode"
- New category: "layer 2 net"
- New category: assigned objects
- Category "hostaddresses": new field "assigned port"
- Layer 3 net address and host extensions
- New category: "ip addresses"
- New category: "port overview"
- New category: "audit"
- Extension of category "switch"
- Extension of category "routers"

Fixes:

[Bugfix] - Date field bug in all IEs
[Bugfix] - Adding a new client: The client is not created, it is offered for downloading via JSON.
[Bugfix] - Object Browser bug on multi selection in the second list
[Bugfix] - Bug in the view of IT service relations
[Bugfix] - Layer 3 network: network with a higher mask than /32 should not be possible.
[Bugfix] - Export templates can not be displayed or deleted.
[Bugfix] - Slow performance when deleting an object
[Bugfix] - Saving a normal report (SQL) backslashes are automatically added.
[Bugfix] - Search does not find entries in the category "access".
[Bugfix] - Compatibility of the new browsers in Internet Explorer 8 faulty
[Bugfix] - Hostaddresses: g_unique_check in config has no effect.
[Bugfix] - Pagination for inventoried items under import does not work.
[Bugfix] - Duplication of interfaces: Type is not accepted.
[Bugfix] - It is possible to select oneself as a location. This creates an infinite loop.
[Bugfix] - H-Inventory can no longer update existing objects since 0.9.9-7.
[Bugfix] - When you let a dragged object go, it does not moves back in the object list but hangs somewhere on the screen.
[Bugfix] - CSV import: Child categories are not displayed.
[Bugfix] - Category cabling defect
[Bugfix] - Changes for people in a department are not possible.
[Bugfix] - Apostrophes (') for dialog+ boxes cause errors
[Bugfix] - Error message when you see a detailed view of a group member
[Bugfix] - When creating a new server, the name is not saved.
[Bugfix] - "Foreign key constraint fails" while duplication of an organization
[Bugfix] - Navigation: Back button in the tree jumps to the wrong place.
[Bugfix] - Object browser throws parameter error.
[Bugfix] - Incorrect duplication dialog in the object type "contact"
[Bugfix] - importing an object (to which a license was assigned) does not work.
[Bugfix] - Special characters mess up XML export.
[Bugfix] - Validation: category "global" forgets properties.
[Bugfix] - Overview page shows no dialog+ fields.
[Bugfix] - Type image in category "Contact assignment" is incorrect.
[Bugfix] - The check all function in connection lists with several different tables does not work as expected.
[Bugfix] - Import/export of the category "virtual devices" does not work anymore.
[Bugfix] - The filter for the object lists does not work at the category ports.
[Bugfix] - When moving a device in the rack view, it loses the insertion configuration.
[Bugfix] - After using the CMDB explorer, there is no scroll bar in i-doit anymore.

0.9.9-7
- Überarbeitung der Druckansichten
- Abrundung Im- und Export, Duplizierung und Template-System
 - Komplettierung fehlender Kategorien
 - Verbesserung des CSV Imports
 - Export von benutzerdefinierten Kategorien
 - verbesserter Umgang mit Referenzen beim Import/Templating/Duplizieren
- Verbesserung der CMDB Browser
 - Neuer Objektbrowser für Verknüpfung von CMDB Objekten
 - Neuer Anschlussbrowser für die Verbindung von Geräten (Netzwerk, Storage, ..)
- Neuer Objekttyp SIM-Karte
 - Neue Kategorie SIM-Karte
- Neuer Objekttyp Kryprokarte
 - Neue Kategorie Kryptokarte
 - Neue Kategorie TSI-Service
- Verbindung der Mobilkarten mit Mobiltelefonen
- Abschaffung des Menüpunkts Module; Ersetzt durch: Extras
- Verlagerung der Modulkonfiguration in "Verwaltung"
- Verbesserung der Änderungshistorie im Logbuch
- Fehlerbehebungen

0.9.9-6
- Neues Navigationselement: CMDB-Explorer
 - mit folgenden Darstellungsfunktionen:
- IT Servicesicht
- Clustersicht
- Virtualisierungssicht
- Standortsicht
- CMDB-Status für Objekte zur Abbildung des ITIL Lebenszyklus
- Der Systemstatus von i-doit wurde umbenannt in Zustand
- Vorausplanung und Dokumentation von Statuswechsel, "Gültigkeitszeitraum"
- Abschaffung Abhängigkeiten; neues überarbeitetes Beziehungsmodell
 - Hauptmenüpunkt Abhängigkeiten wird zu Beziehungen
- Gleichgerichtete Beziehungen (z.B. Cluster)
- IT-Grundschutzmodul
 - Import IT-Grundschutzkatalog
 - diverse Auswertungen
- Generischer CSV-Import
- Neue Objekttypen
 - Middleware (und SOA Applikationen)
 - Replikation
 - Datenbankinstanz
- Neue konfigurierbare Standardfarben für Objekttypen
- Autosuggestion im Textfeld für Objektverknüpfungen
- Neue Gruppierungskategorie im IT Service: IT-Service Typ
- globale Beziehungssicht im IT Service für dessen Komponenten
- gruppiertes Logbuch im IT Service
- Entferunung der Hintergrundfarbe von Kategorie-icons
- Behobene von Fehlern
 - beim Browsen im Logbuch
 - bei der Zuordnung von Partitionen zu Software RAID
 - beim Duplizieren
 - beim Importierten von Software über OCS
 - beim Filtern von Objekten im Objekt-Browser
- Bessere Darstellung dess Namens für verbundene Anschlüsse
- Hostadresse hat einen Leereintrag auf Übersichtsseite beim
Nichtausfüllen erzeugt
- verbesserte Berechnung der CPU Frequenz in Objekt- und Clustervitalität
- Verbesserung bei Selectfeldern in Änderungshistorie
- diverse kleine Fehlerbehebungen
- erhöhte Stabilität

0.9.9-5
- Many many bugfixes!

- New ajax location browser (much fuster, no freeze anymore)
- Categories are now sorted alphanumerically
- Category group colors were removed
- New object type DBMS
 - New categories for DBMS
- DBMS
- Database instance (practicable for oracle databases)
-
- New object type Database schema
 - New categories for database schema
- database schema
- database links
- Fixed different h-inventory problems where XML Import results in a parse error
- New category IT Service components
- New category computing resources
- New category object vitality
- The objecttypes are now shown as a row in an object group list
- Special character problem (öäü broken) after duplicating fixed
- Virtual machines are now able to get assigned to a cluster
- Fixed HTTP Port problem in Internet Explorer
- Duplicated objects don't get an own sys-id
- Javascript error fixed in shared storage
- Search now works with special characters
- Sorting a search result works now
- The Port -> Interface list now also display the interfaces slot number
- Duplicating a template creates a new regular object instead of a template
- Archiving and deleting now works for ports and fc-ports
- Right groups can now only be edited by an admin

0.9.9-4
- Extended documenattion of virtualized environments
 - New object type virtual host
 - New object type virtual server
 - New object type virtual client
 - New categories for virtual machines:
- Virtual host
- Virtual devices
- Virtual witch
- Shared virtual switches
- Documentation of clusters and cluster servies
 - New object type cluster
 - New object tyoe cluster-service
- New category cluster
- New category cluster-service
- New category cluster members
- New category shared storage
- New category cluster vitality
- New category cluster ressources
- Duplication of objects
- New category shares
- Empty categories now look a bit palish
- Mass completion of workflows

Bugfixes:
- Fixed: Search doesn't work in redbox theme
- Fixed: Search didn't escape special chars
- Several IE-specific issues

0.9.9-3
- Komplettüberarbeitung der i-doit Kontakte
 - Kontakte sind nun richtige Objekte (Configuration Items)
- Neuer Objekttyp Person
- Neuer Objekttyp Organisation
- Neuer Objekttyp Personengruppe
 - Trennung von Login und Stammdaten einer Person
- Überarbeitung Storage (Bildung von SAN-Zonen, Abbildung komplexer SAN Strukturen)
 - Neuer Objekttyp San-Zone
- Neue Kategorie Lokaler Massenspeicher zur Gruppierung von
 - Speicher Geräten
 - Controller
 - Raid Verbund
- Neue Kategorie Speichernetze (Netzwerkspeicher) zur Gruppierung von
 - Logischen Geräten (LDEV Server)
 - Logischen Geräten (LDEV Client)
 - FC-Ports
 - Hostadapter (HBA)
- Umbenennung SAN-Pool in Speichersystem
- Die Sprachauswahl beim Login wurde von den Mandanten getrennt
- Bookmark Link zur aktuellen Seite in der Navigationszeile der Listen
- Jedes i-dot Objekt ist nun mit einem QR Code ausgestattet, welcher den aktuellen Link beinhaltet
- Barcode sind nun (über einen Klick auf das Bild) druckbar
 - Der Standard Barcode ist nun QR. In der src/constants.in.php in
 Zeile 35 kann der gewohnte Code39 wieder aktiviert werden
- Neue Mandantenverwaltung, erreichbar über /admin
 - Aktivierung und setzen des Passworts in config.inc.php : $g_admin_auth

Bugfixes:
- Fehler beim Filtern einiger Listen
- Kontakte können nicht archiviert und gelöscht werden
- Lizenz Handler verschickte bei Überschreitung mail imt "allen" Lizenzen
- Problem beim Import über OCS wurde beseitigt
- Anschluss Browser zeigt alle Anschlüsse als Ausgänge an
- Import von Kategorie Buchhaltung funktioniert nicht zu 100%
- Organisationen und Gruppen können im Kontakt Browser nicht abgewählt werden
- Anschlüsse: Anschlusspärchen wird falsch exportiert
- Anschlüsse: Ein Klick auf das Anschlusspärchen im edit mode lädt i-doit ohne Stylesheet

0.9.9-2
- Anbindung an OCS Datenbank
 - Import von inventarisierten OCS Objekten
- Komplett überarbeitete Verwaltung von Stromobjekten (Vorhandene Stromdaten werden weitgehend migriert)
 - Neuer Objekttyp: Energieversorgungsunternehmen
 - Neuer Objekttyp: Netzersatzanlage
 - Neuer Objekttyp: Verteilerkasten
 - Neuer Objekttyp: Unterbrechungsfreie Stromversorgung
 - Neuer Objekttyp: Steckdosenleiste
 - Neue Kategorie: Stromverbraucher
 - Import / Export von Stromobjekten
 - Neue Visualisierung von verschachtelten Kabelwegen (insb. bei Mehrfachsteckdosen)
- Übernahme von Netzinformationen bei Zuweisung eines Layer-3-Netzes unter Hostadresse
- DNS Server und Domäne unter Hostadresse verwenden nun Dialog+ des Layer-3-Netzes
- Die Standort Kategorie ermöglicht nun das beidseitige Positionieren eines Geräts im Rack ("Einschub: vorne und hinten")
- Sortieren von Standorten in der Listenansicht
- JSON Schnittstelle zur Abrufung von Kategorie Inhalten
- In der Kabelliste werden die unmittelbar Verbundenen Anschlüsse dargestellt
- Kategorie Version nun exportierbar

Bugfixes (gekürzt):
- Fehler beim Auslesen der Höheneinheiten eines Geräts (Schrankansicht)
- Fehler beim Eintragen eines Netzes
- Datenbank Exception beim Exportieren einer NAGIOS Konfiguration
- Quickinfo Fenster bleiben unter einigen Umständen im Firefox hängen
- In der Logbuch Detailansicht fehlen die geänderten Werte
- Authoren sollten Templates anwenden können
- Der Listenfilter filtert nur nach Textfeldern (wie z.B. Objekt namen), nicht aber nach z.B. Standorten
- Bei Umbenennung eines Ports oder einer Schnittstelle wird der zugehörige Anschluss nicht umbenannt
- Bei Ablauf der Session werden temporäre Tabellen nicht gelöscht
- Layer 3 Netz: Adressbereich wird bei DHCP Auswahl aus- bzw. eingeblendet
- Unter einigen Umständen können keine Kontakte zugewiesen werden
- i-doit Logo ist in Exceptions nicht sichtbar
- Archivierte und gelöschte Objekte verschwinden nicht aus der Schrankansicht
- NAGIOS: n/a Werte werden im i-doit als 01.01.1970 dargestellt

0.9.9-1
- Kabel und Patch Management
 - Neuer Objekttyp: Kabel
 - Neuer Objekttyp: Verstärker
 - Neuer Objekttyp: Patchfeld (Patchpanel)
 - Neuer Objekttyp: Leitungsnetz
 - Neuer Objekttyp: Konverter
 - Kategorie Anschlüsse und Verbindungslogik
 - Anschlussbrowser
- Kategorie Rechnungen
- Erweiterung der Kategorie Wartungsverträge
- Neuer Objekttyp: IT-Service
- Anbindung an Ticket System: Request Tracker über Modul
 - Cron synchronisation von Tickets
 - Neue Kategorie Tickets
- Nahtloser Wechsel zwischen Mandanten inmitten einer aktiven Session über
einen "Mouse Over" des Mandanten Namen (links oben)
- Plausibilitätsprüfungen in der Kategorie Hostadresse (Konfigurierbar
in config.inc.php):
 - Prüfung auf Doppelvergabe von IP-Adressen.
 - Prüfung auf Verfügbarkeit einer IP-Adresse im zugewiesenen Netz über
 einen Refresh Knopf neben der IP-Adresse
 - Prüfung auf Doppelvergabe von Objektnamen (z.B. Servername).
- Verwaltung von IPv6 Adressen.
- Entwicklung einer neuen "Custom-Value" Kategorie, welche es ermöglicht Werte
zu frei definierbaren Feldern hinzuzufügen. Custom Kategorien können über
das unter Module befindliche Modul "Benutzerdefinierte Kategorie" erzeugt
und zu Objekt Typen zugewiesen werden.
- Das Logbuch ermöglicht die Suche nach CMDB Änderungen (Sowohl Global als auch
in der Kategorie Logbuch)
- Ebenso wurde das Logbuch um eine Funktion für Freitext Meldungen erweitert
- Report Browser
- ausführbare Standard Reports
- Tag Zuordnung für eine Kontaktzuweisung in der Kategorie Kontakte

- Bugfixes

0.9.9
- Unzählige Verbesserungen im Datenbank Model, was impliziet folgende
 Auswirkungen auf den Umgang mit i-doit hat:
- Höhere Datenverfügbarkeit
- Erhöhung der Performance in größeren Umgebungen
- Einfachereres Reporting
- Vereinfachung von CMDB Abfragen
 - Rationalisierungen innerhalb der Mandanten und System Datenbank
 - Neue globale Kategorie: IP Adresse
- Zuweisung zu allen Objekttypen unabhänging von der Netzwerk Kategorie
 - Neuer Objekttyp: Host
 - Dashboard & Widget System als Willkommensseite
 - Widget: Quicklaunch
 - Widget: Tipps
 - Widget: My latest changes
 - Ablösung der Sprachverwaltung innerhalb der Datenbank
- Sprachkonstanten werden von nun an in Dateien verwaltet (src/lang/*.inc.php).
- Neue Möglichkeit für "Custom" Sprachsets (src/lang/*_custom.inc.php)
 - Neue erweiterte Suche innerhalb der CMDB
 - Wechseln der Sprache ohne Logout
 - Entfernung der dynamischen und Port Kategorien (Bis auf IP)
---> ACHTUNG: Datenverlust möglich <---

 - Updated database model, which implicitly means
- Higher data availability
- Increasing performance in large environments
- Easier reporting
- Simplification of CMDB queries
 - Streamlining of mandator and system database
 - New global category: IP-Address
- Assignment to all objecttypes independent of the network category
 - New objecttype: Host
 - Dashboard and widget system as welcome page
- Widget: Quicklaunch
- Widget: Tips
- Widget: My latest changes
 - Replacement of the old language administration inside the system database
- Language constants are administarted inside files from now on (src/lang/*.inc.php)
- New possibility to add custom language sets (src/lang/*_custom.inc.php)
 - New extended search within the CMDB
 - Changing language without logging out
 - Remove of dynamic and port categories (Except IP)
---> ATTENTION: Data loss possible <---

Additional Changes:

 [Fixed] - Detaching a virtual machine does not work
 [Fixed] - Logical interface import does not work
 [Fixed] - Missing contact and location information in object overview
 [Fixed] - Adv Search: link from result list direct to category
 [Fixed] - Filter by status does not work in hostaddress
 [Fixed] - Name of object in information header is wrong when creating a new object
 [Fixed] - Single value categories are only saveable on second edit
 [Fixed] - Search back button does not work properly
 [Fixed] - Several constraints incorrectly defined
 [Fixed] - Graphic manufacturer is not exported
 [Fixed] - Cutted location paths in object lists are appended by ">"
 [Fixed] - Migration of Contacts does not work properly
 [Fixed] - Switch | File | update => new file will be created
 [Fixed] - Switch | Application/Service | New => Exception and no new file will be created
 [Fixed] - Switch | File Wizard: File choosed and click on "=>" Error Message "get_general_data failed
 [Fixed] - San | Storage | Controller | edit controller results in an Exception
 [Fixed] - Category file does not show the correct actual file version
 [Fixed] - Global search for log. Interface
 [Fixed] - CPU Frequency does not allow comma values (e.g 3,6)
 [Fixed] - Calendar Bug in Internet Explorer
 [Fixed] - Maintenance Agreement in IE < 8 does not show the "sub contract"
 [Fixed] - Empty net assignments are displayed as root-location in an export
 [Fixed] - No Calender in maintenance contract "end"
 [Fixed] - No Calender in maintenance contract "start"
 [Fixed] - +/- in Memory does not work in overview category
 [Fixed] - Assigning a file in global category "file" does not work

0.9.8-2
[Enhancement] - Quick Infos for object links (Mouseover)
 [Enhancement] - Include assigned net object in a port export
 [Enhancement] - New javascript calendar
 [Enhancement] - Editable start/end date in workflows
 [Enhancement] - Database optimization
 [Enhancement] - Search function in object browser
 [Enhancement] - Filter function for the object-browser
 [Fixed] - No comma values possible in specific category wan
 [Fixed] - No comma values possible in san-pool category
 [Fixed] - Archived logical interfaces are not recycable
 [Fixed] - An empty manual is created after saving the overview page
 [Fixed] - No applications/operating systems assignable in object browser
 [Fixed] - Calendar time does not work
 [Fixed] - No delete and purge button in ip list
 [Fixed] - Global dependencies not editable
 [Fixed] - Group filter does not work in contact browser
 [Fixed] - Several bugs in workflow module
 [Fixed] - Error in category view for workflows
 [Fixed] - Detach button on network port connection
 [Fixed] - Importing a not existing image via xml results in an error
 [Fixed] - IP Addresses are not applied in templates
 [Fixed] - Template description is not applied in object image
 [Fixed] - Only a few port properties are applyed by a template
 [Fixed] - Some interface properties are missing while applying an interface template
 [Fixed] - Template loses status after creating object.
 [Fixed] - It is not possible to add the same LDAP server with a different search DN
 [Fixed] - Error in Workflow Module
 [Fixed] - Category entries in category application are not deleted when referenced application is deleted
 [Fixed] - Missing fields in logbook archive
 [Fixed] - Problems with large object lists
 [Fixed] - Multiple assignments to one port possible
 [Fixed] - Saving an _empty_ location results in an error
 [Fixed] - Clicking on workflow abort-button creates a new "completed"-action

0.9.8-1
[Enhancement] - Automatic update check (via updatecheck controller)
 [Enhancement] - Capitalized key-words in print view
 [Enhancement] - Converting an object into a template
 [Enhancement] - PHP 5.3.0 Support
 [Enhancement] - Template System: Nagios templates
 [Enhancement] - Template System: Applying object images
 [Fixed] - Error saving category memory
 [Fixed] - Tree and tooltips does not work in Internet Explorer 6 & 7
 [Fixed] - Internet Explorer 6 & 7 Cache problem alert
 [Fixed] - Template System: Global category -> purpose not applied
 [Fixed] - Click on checkbox in contact browser does not work
 [Fixed] - Template System: Network Interfaces & Ports are not created
 [Fixed] - Adding location objects via category objects does not work anymore
 [Fixed] - Username and password are not saveable when editing a person
 [Fixed] - The update check does not work in system overview

0.9.8
[Enhancement] - Template System / Module
 [Enhancement] - New handler for Nagios export
 [Enhancement] - Nagios export path configurable
 [Enhancement] - Simplify category memory
 [Enhancement] - Global information moved into object table
 [Enhancement] - New category "accounting"
 [Enhancement] - Print preview for objects
 [Enhancement] - New Role/Rights Management for groups
 [Enhancement] - Used licence selection for an Application/OS is now possible in the application assignment
 [Enhancement] - Connected ports without location
 [Fixed] - Constant name gets translated in objecttype configuration
 [Fixed] - Saving an access URL creates a new one.
 [Fixed] - Creating 2 FC-Ports always creates 3
 [Fixed] - You can not edit existing dependencies or object combinations
 [Fixed] - Module uninstaller did not work properly
 [Fixed] - Locations are not detachable
 [Fixed] - Error in logbook browsing
 [Fixed] - Error processing AJAX request" when trying to edit the logbook archiving settings
 [Fixed] - When you create a new organisation the name field is prefilled with the value "new organisation"
 [Fixed] - Locations can not be unlinked
 [Fixed] - SAN-Pool Browser does not work properly
 [Fixed] - Room is not savable
 [Fixed] - Print view for rack visualization
 [Fixed] - Problems with File Upload Wizard

0.9.7-1
[Enhancement] - More info in objecttype configuration lists
 [Enhancement] - LDAP: Experimental OpenLDAP fix
 [Enhancement] - Advanced tracking of changes in logbook
 [Enhancement] - Added update check to system overview
 [Enhancement] - New "System Overview" in maintenance section
 [Enhancement] - Characters "r" and "b" are trimmed from the last line of textareas
 [Fixed] - Object Net is not createable
 [Fixed] - Login does not work with special characters in username or password
 [Fixed] - It is not possible to filter/search for special characters like an umlaut
 [Fixed] - LDAP connection errors
 [Fixed] - SYSID always readonly
 [Fixed] - The calender popup does not work
 [Fixed] - LDAP error when logging in with an unknown user
 [Fixed] - Object image upload does not work
 [Fixed] - Problem when creating a mobile phone
 [Fixed] - Printer objects are not usable

0.9.7
[Enhancement] - Function "New" for dialog administrator
 [Enhancement] - Hotspare status is not revertable to "No" in device category
 [Enhancement] - Network port creation fails after "pre-selecting" the interface
 [Fixed] - Users having writing-privileges on the CMDB are not
 allowed change the password of any user anymore
 [Fixed] - Port problem when a port was deleted
 [Fixed] - Removed hotspare from raid-calculation
 [Fixed] - Object image upload does not work
 [Fixed] - Object images are not deleted after clearing them
 [Fixed] - IE6 freezes after login
 [Fixed] - FC-Port is not editable via checkbox
 [Fixed] - Creation of more than one primary access url possible
 [Fixed] - Page corrupted after clicking on a list entry on page > 1
 [Fixed] - File upload does not work in wizard
 [Fixed] - Unexpected behaviour in menu tree
 [Fixed] - Adding a new contact deletes primary selection

0.9.6-1
[Enhancement] - Alert message on browser cache problems
 [Enhancement] - IP Address in rack view
 [Enhancement] - Removed unneeded debug calls which increases script performance
 [Enhancement] - New logbook commentary design
 [Fixed] - Save Cancel buttons in object combinations does not work
 [Fixed] - Error in Nagios status view
 [Fixed] - Saving does not work in rack-view
 [Fixed] - New breadcrumb implementation for AJAX-Calls
 [Fixed] - Appended "r" on every line break in description fields
 [Fixed] - Redbox theme display problem (empty fields)
 [Fixed] - Paging (Prev/Next) does not work inside categories
 [Fixed] - Nagios error in overview page
 [Fixed] - Moving does not work in rack view

0.9.6
[Enhancement] - Ajax Engine
 [Enhancement] - NAGIOS Export
 [Enhancement] - More information in Nagios category
 [Enhancement] - LDAP Debug
 [Enhancement] - Workflow tasks now deletable
 [Enhancement] - Category maintenance: Detailed information when assigning a contract
 [Enhancement] - New notification system for maintenance if contract ends (handler)
 [Enhancement] - New field: "File Link" in category file
 [Enhancement] - Manual input of dates, instead of selecting with the popup
 [Enhancement] - Selection of (application) groups in application assignment
 [Enhancement] - Optimization: Overview Category
 [Enhancement] - Optimization: CMDB Module
 [Enhancement] - Optimization: Module Manager
 [Enhancement] - Sorting in workflow tables
 [Enhancement] - Infobox query optimized
 [Enhancement] - Performance and page load optimized
 [Enhancement] - Mandator/Client in header name is now a link to the welcome page
 [Enhancement] - New info message: "Logged in as: xy"
 [Enhancement] - "my-doit" closing button (X)
 [Fixed] - Internet Explorer 7 display optimization
 [Fixed] - The search does not work anymore
 [Fixed] - Rounding problem in licence list
 [Fixed] - Content top switch javascript problem
 [Fixed] - No logbook entries generated after category update
 [Fixed] - Uninstalling inactive modules does not work
 [Fixed] - Print button is always disabled
 [Fixed] - my-doit bookmark creation fails
 [Fixed] - Editing an interface inside a port does not work
 [Fixed] - Creating a new workflow does not work anymore
 [Fixed] - Port editing does not work
 [Fixed] - Category access is not savable
 [Fixed] - Strip slashes when displaying object names
 [Fixed] - Deleting a licence group does not work
 [Fixed] - Deleting a licence does not work
 [Fixed] - Backslashes are not correctly escaped in description fields
 [Fixed] - SQL Error in location browser
 [Fixed] - Escape characters ("") are visible in GUI
 [Fixed] - Saving a network port results in an error
 [Fixed] - Creating a new port results in an exception
 [Fixed] - Access rights are not applied correctly
 [Fixed] - Editing a fc port does not work from list
 [Fixed] - Editing a network port does not work from list
 [Fixed] - Every creation of an interface also creates another unready interface
 [Fixed] - Port Browser tree display error
 [Fixed] - SAN-Pool Browser is always empty

0.9.5
[Task]- Purging of obsolete code
 [Enhancement] - Monetary field (EUR, DOLLAR, ..) = "ISY_NULL" in licence overview
 [Enhancement] - Same SYS-ID"s for multiple objects are no more possible; Config constant in src/constants.inc.php added
 [Enhancement] - Logbook description of failed overview savings now show error info about what category had problems
 [Enhancement] - List of assigned objects in object-types "Service, Application and Operating System
 [Enhancement] - New quicklaunch menu in welcome screen
 [Enhancement] - Changed object browser refreshing to ajax load
 [Enhancement] - NAGIOS Export (BETA)
 [Fixed] - Port browser - duplicate objects display fix
 [Fixed] - Maintenance -> Assigned objects does not work
 [Fixed] - Contact browser does not move newly selected persons into the parent input field
 [Fixed] - Removed image title from object image
 [Fixed] - Internet Explorer CSS problems
 [Fixed] - Logbook category not correctly displayed in category overview
 [Fixed] - Object selection in object browser does not work always
 [Fixed] - Function to directly select pages in lists instead of just forward/backward
 [Fixed] - Selecting a port connection does not work (in Network- and FC-Ports)
 [Fixed] - Swap master with slave objects in dependency table
 [Fixed] - Object positioning in category location is not correctly displayed in rack-view
 [Fixed] - Filter string should still be setted when jumping back to the list
 [Fixed] - Category model is not saved when creating an item in the overview category
 [Fixed] - Creating a FC-Port does not work
 [Fixed] - Multiselection in contact browser
 [Fixed] - Adding more than one contacts adds one empty contact; Group selection also possible now
 [Fixed] - Monthly workflows generate daily tasks
 [Fixed] - Full RAID calculation in storage category

0.9.4-5
[Enhancement] - LDAP Integration (BETA)
 [Enhancement] - Module installer / uninstaller
 [Enhancement] - Nagios Module integrated
 [Enhancement] - Graphical mandator overview
 [Enhancement] - Location path in object lists
 [Enhancement] - New field "key" in access point category
 [Enhancement] - Ability to uninstall, deactivate and activate modules in module manager
 [Enhancement] - Specific category access point should be multivalued
 [Enhancement] - SYS-ID readonly configuration in i-doit registry: [Root]/idoit/constants/SYSID__READONLY
 [Enhancement] - Locking of datasets in edit mode
 [Enhancement] - Editing licences does not work when entering the category over the"Licence" directory link
 [Enhancement] - Entries in category "dependency" cannot be changed
 [Enhancement] - Licence currency should be editable, not forced to be EUR
 [Fixed] - Connected file object in category emergency plan is not displayed
 [Fixed] - Changing an entry in category sound affects all entries
 [Fixed] - Changing an entry in category graphic affects all entries
 [Fixed] - Rack view not well displayed in internet explorer
 [Fixed] - Constant is overwritten with empty value in Dialog-Admin
 [Fixed] - The type of created power-objects is not editable after saving
 [Fixed] - New Object-types are not shown in the rack-view
 [Fixed] - DB prefix cannot be changed for NDO

0.9.4
[Enhancement] - CMDB improvements
 [Enhancement] - Wiki link for each textbox (url defined in src/constants.inc.php)
 [Enhancement] - New object type: Operating System
 [Enhancement] - New global category: Virtual Machine
 [Enhancement] - New fields: warranty period - remainder warranty in global category
 [Enhancement] - New Logbook message: Category Archived
 [Enhancement] - New Logbook message: Category Purged
 [Enhancement] - New storage type: SAS
 [Enhancement] - RackView (Graphical view and positioning of rack contents)
 [Enhancement] - Specific categories inside overview category
 [Enhancement] - Graphical Rack Viewer in specific category 'Rack' based on formfactor units
 [Enhancement] - Adminstrative interface for Dialog+ boxes
 [Enhancement] - New Logbook list for better overview with filter functions
 [Enhancement] - Logbook archive function to another MySQL Server
 [Fixed] - 'No object selected' link results in an error
 [Fixed] - Wrong data field in Category table air condition
 [Fixed] - Dialog Administrator allows editing of first element only
 [Fixed] - Dialog Admininistrator: Some tables are missing
 [Fixed] - After deleting an 'unready' object, the log message says 'archived' instead of 'deleted'
 [Fixed] - Title of FC-Port always extended by a numeric value
 [Fixed] - Object-tree in dependency -> object combinations doesnt work
 [Fixed] - Icon of self defined container broken in location tree
 [Fixed] - Session expiration also on ajax requests
 [Fixed] - Assignments get deleted after saving a workflow and not changing them
 [Fixed] - New fields in global category: purchased at, order no.
 [Fixed] - Logical interface gets purged when clicking on archive. A regular archive is not possible
 [Fixed] - Devices are not saved after saving a raid
 [Fixed] - Workflow action parameters cannot get saved
 [Fixed] - Workflow contacts get resetted when not editing them after saving a workflow
 [Fixed] - Removed duplicate rack formfactory configuration in specific category
 [Fixed] - Variable length of infobox messages (src/constants.inc.php::C__INFOBOX__LENGTH)

0.9.3-r419
[Enhancement] - Object combinations (Server/Client > Application / Service)
 [Enhancement] - Security issues in Dialog-Admin
 [Enhancement] - Purging objects!!! (Beta)
 [Enhancement] - Logbook does not show any information about a purged, or a changed category
 [Fixed] - It's possible to login with a deleted user
 [Fixed] - Settings like IP or Routing are not saved when creating a logical interface
 [Fixed] - The name and object-type of a purged object is empty
 [Fixed] - Logbook message is empty when an object change failed
 [Fixed] - Show human readable information about a change in the logbook category ;-)
 [Fixed] - Logbook link in headline produces an error
 [Fixed] - Show port-connection in fc-port list
 [Fixed] - Port connections unstable - Any re-assignment is not saved!
 [Fixed] - After saving/creating a fc-port, not all information are saved
 [Fixed] - RAID-1 capacity is not automatically calculated
 [Fixed] - GUI Message when object id does not exist
 [Fixed] - Object browser somtimes empty
 [Fixed] - Application assignment not saveable
 [Fixed] - New alarm message when object type cannot be deleted

0.9.3-r325
[Enhancement] - Implemented WAN-Capacity unit
 [Enhancement] - Improved loading performance of the front-end
 [Enhancement] - Multi mandator capability for controller
 [Enhancement] - Load my-doit with AJAX
 [Enhancement] - Room: Startpage does not contain any informations (4h)
 [Fixed] - Mandatory field in dependencies results in overview problems
 [Fixed] - Printer-Interface only shows last connected interface
 [Fixed] - Disable logbook save and cancel buttons
 [Fixed] - Some icons missing in location view
 [Fixed] - RAID not saveable
 [Fixed] - object types are not visible anymore after saving the objecgt type configuration
 [Fixed] - mydoit problems in internet explorer
 [Fixed] - Adding an interface does not work
 [Fixed] - Workflow checklist parameters not savable
 [Fixed] - Cannot add hard discs to raid
 [Fixed] - Switch contentheader and tree via javascript
 [Fixed] - Wrong values get saved when creating a logical interface
 [Fixed] - MenuTree for locations doesn't remember current object
 [Fixed] - GUI enhancements: Manual / Maintenance and Emergency Plan

0.9.3
[Enhancement] - Barcode plugin for category global (Must be enabled in config.inc.php)
 [Enhancement] - Preloader editable in system settings
 [Enhancement] - Editable path field for the directory browser inside the i-doit setup (For selecting other partitions on Windows systems)
 [Enhancement] - Focus to "Title" when creating a new object
 [Enhancement] - Treeicons for object-types
 [Enhancement] - The application category needs an object browser for the application selection
 [Enhancement] - Location entries in reverse (add objects to your current location)
 [Enhancement] - Handler to activate / deactivate mandators
 [Fixed] - New logical interface not editable after creation
 [Fixed] - Number of objects in tree is showing also disabled or deleted objects
 [Fixed] - Default value for "front side of a rack" changed to "Yes"
 [Fixed] - Unnecessary mandatory field #2 (Title in category object-image)
 [Fixed] - Main menu does not change when clicking on a contact inside the cmdb (e.g. "Infrastructure")
 [Fixed] - When creating new objects the name field is always filled
 [Fixed] - Category location displays all new objects inside root-location even if there are not assigned to it
 [Fixed] - Unnecessary mandatory fields
 [Fixed] - new buldings do not attach to the root location automatically
 [Fixed] - Navbar buttons always disabled
 [Fixed] - Adding applications to an object does not work anymore
 [Fixed] - New user cannot login
 [Fixed] - MAC adresses cannot be found in the search
 [Fixed] - Licence handler scans 1 licence object only
 [Fixed] - ZIP only without leading '0'
 [Fixed] - Port connections could be unstable
 [Fixed] - Function to delete cache doesn't delete all cached data
 [Fixed] - Assigning Workflows to persons doesn't work any more after the Workflow is saved

0.9.2 rev 3069
[Enhancement] - Location entries in reverse (add objects to your current location)
 [Fixed] - New user cannot login
 [Fixed] - MAC adresses cannot be found in the search
 [Fixed] - Licence handler scans 1 licence object only
 [Fixed] - ZIP only without leading '0'
 [Fixed] - Port connections could be unstable

0.9.2
[Enhancement] - Count licences on the basis of the connection to servers and clients_ not applications
 [Enhancement] - Editable workflows
 [Enhancement] - In licences in use_ show name(s) of user(s)_ which are using the corresponding licence
 [Enhancement] - Port list: Name of destination device has also to be shown
 [Fixed] - Port type cannot be deleted
 [Fixed] - Error in former connected port when deleting a port
 [Fixed] - HTTPS not working
 [Fixed] - The list filter status could be shown incorrectly
 [Fixed] - Name of fuse cannot be saved
 [Fixed] - Description for new object type is not saved
 [Fixed] - Updater does not check 'requirements'
 [Fixed] - Javascript clock is flickering
 [Fixed] - Error when opening spec. category for application
 [Fixed] - UI-browser only shows objects of type server
 [Fixed] - Workflows cannot be shown any more when someone overwrites 'start_date'
 [Fixed] - Licence list is not shown
 [Fixed] - Hardware-RAID-groups cannot be saved
 [Fixed] - List 'Assigned objects' (specific category 'file') doesn't have a list filter

0.9.1 rev 2916
[Task]- Replace all language specific words with LCs
 [Enhancement] - Extend right system to NavBar buttons
 [Enhancement] - Distributor updated_ object view now faster
 [Enhancement] - New login procedure (AJAX)
 [Enhancement] - Display a message when session timed out
 [Enhancement] - Easier and faster setup
 [Enhancement] - New and easy way to update i-doit
 [Enhancement] - Port browser: Mark ports in use
 [Enhancement] - Object types cannot be deleted
 [Enhancement] - Enhanced checklists (workflows)
 [Enhancement] - More details in first view of power objects
 [Enhancement] - Room list view: Additional values
 [Enhancement] - Floor entry has to be text instead of just numbers (1h)
 [Enhancement] - Network ports: Names for cables
 [Enhancement] - Port list: List the object of the destination port
 [Enhancement] - Workflow management tool (instead of tasks and checklists)
 [Enhancement] - Dialog+ fields change the actual selected value after adding new list elements
 [Fixed] - Cache listens to hardcoded port
 [Fixed] - List search doesn't work 'onKeyPress'
 [Fixed] - No rights for external DB users
 [Fixed] - idoit debug console does not work properly
 [Fixed] - Licences: logbook title is empty when saving new licence
 [Fixed] - Category 'General'is missing the title in view mode (object type 'services')
 [Fixed] - Category 'general' missing in licences
 [Fixed] - Error on saving a dynamic category
 [Fixed] - Settings cannot be saved
 [Fixed] - No login possible with 'Enter'-Button
 [Fixed] - IEBug: Login screen not centered
 [Fixed] - Categories are displayed wrong
 [Fixed] - Quick-save button settings cannot be saved
 [Fixed] - Category 'Workorder' is deprecated!
 [Fixed] - If session gets closed by the browser_ there is a php error displayed after refreshing i-doit
 [Fixed] - Language constants cannot be deleted
 [Fixed] - If no mandant is installed or detectable in isys_mandator - the login says invalid password
 [Fixed] - Trouble with decoding html special characters
 [Fixed] - Update: Version number is not updated
 [Fixed] - Titles in list view of storage drives is not translated
 [Fixed] - After saving a storage drive the following view is wrong
 [Fixed] - Organisations/Contacts: Not possible to delete objects
 [Fixed] - 'tempObjData' could cause problems
 [Fixed] - Category storage: device doesn't save numerical values
 [Fixed] - Numeric/decimal format wrong in list views
 [Fixed] - Date in Infobox is not formatted
 [Fixed] - Saving a drive without a filesystem type selection results in an sql error
 [Fixed] - Image title in object image is not saved
 [Fixed] - Access url in category access is converted to integer
 [Fixed] - Incorrect integer value: '' for column 'isys_catg_stor_list__capacity'
 [Fixed] - When a cpu or port gets created_ the data of it is not directly shown in view/list mode
 [Fixed] - When a cpu gets created_ the data of it is not directly shown in view mode
 [Fixed] - Security fix: Show smarty debug console only on localhost
 [Fixed] - Error when detaching a newly created building
 [Fixed] - Category global is missing in licences
 [Fixed] - Adding a licence results in a mysql error
 [Fixed] - Contact lists doesn't get refreshed correctly after assigning persons and/or groups
 [Fixed] - Saving an objecttype without selecting any overview entry results in an error
 [Fixed] - Contact gets deleted after editing an entry
 [Fixed] - Interface cannot be created
 [Fixed] - Language constant editor: Buttons not in edit mode
 [Fixed] - Dialogue lists with errors in view mode
 [Fixed] - Files are not deletable
 [Fixed] - Fields with dimension units are to be saved as DECIMAL
 [Fixed] - Object image can't be downloaded after creating it
 [Fixed] - Some Dialog+ don't set the status to '2' when adding new items
 [Fixed] - Storage: Some logic bugs (4h)
 [Fixed] - Contact browser too small for content in IE
 [Fixed] - Category Storage: Type floppy is mising when creating a controller
 [Fixed] - Category Storage
 [Fixed] - Power object: connection problems
 [Fixed] - CSS: Styles in IE have too big fonts (2h)
 [Fixed] - Port: already set connection cannot be deleted
 [Fixed] - New doesnt work in detail view of a port
 [Fixed] - Logical interface: net object is not saved correctly
 [Fixed] - Logical interface: not possible to save
 [Fixed] - Count licences on the basis of the connection to servers and clients
 [Fixed] - Contact groups cannot be created
 [Fixed] - Path strings not escaped during setup
 [Fixed] - Licence: Adding a group results in an error
 [Fixed] - Monitor: units are not translated with language constants
 [Fixed] - Storage: Not possible to connect a partition to a device!
 [Fixed] - IP-Port: DHCP selected but you still must enter an IP-Adress
 [Fixed] - Link in IP-List wrong
 [Fixed] - FC-Switch: Storage category missing
 [Fixed] - Power Oject - Connecting to other Power Objects: Connected Devices not visible
 [Fixed] - KVM-Switch-Contact: Not possible to add aPrimary Contact
 [Fixed] - Files: Wrong link + not deleteable
 [Fixed] - Wrong link in overview page to ports
 [Fixed] - Power object: Cannot be deleted / connections cannot be deleted
 [Fixed] - Port-browser doesn't work in IE
 [Fixed] - Licences cannot be archived
 [Fixed] - Category location: Objekts that are already archieved and deleted are not filtered in the browser
 [Fixed] - Creation of a SAN object
 [Fixed] - Ports : Object corrupt after setting port from inactive to active
 [Fixed] - Server-Network-Port: Browserwindow for assigning a Network is to small (IE)
 [Fixed] - Interfaces-Connections: Creating a new Connection with IE does not work
 [Fixed] - Network-Port: Field Mac-adress is visible only after saving
 [Fixed] - Blank screen error
 [Fixed] - No link for the URL in 'organisations'
 [Fixed] - Redbox theme: No scrolling in IE
 [Fixed] - Contact organisations
 [Fixed] - Ports cannot be created
 [Fixed] - Specific category 'power'
 [Fixed] - Specific category file - current file: description is not saved

0.9 rev 2409
Bugfixes
- Access point can't be created
- SAN can't be created on some systems
- Can't open input plug in power object
- Port detail view is not shown correctly
- Link in overview page of ports not working correctly
- Login problems
- Ports are not created correctly if values are missing
- The global debugger instance is not available on some systems
- WAP can't be saved correctly
- Not possible to change themes
- Licences can't be deleted correctly
- Number of used licences is not calculated correctly
- The port browser doesn't work in IE
- FC ports can't be selected
- Storage: Partition can't be connected to a device
- Contact groups can't be created
- Link in IP list not working correctly (in ports)
- Files from file category can't be downloaded

0.9
New features
- Search
- Workflow management system (Tasks, checklists and self-defined objects)
- Link to our documentary
- You can switch between different date, time and numerical formats
- You can switch the 'QuickSave' functionality on or off (Without QuickSave
the user has to fill in a description for his changes in a pop-up window)
- Additional description for logbook entries, see also 'QuickSave' for that
- New category 'Overview' with values from some selected categories
- Updated category 'Air Conditioning'
- Updated category 'Printer'
- Updated category 'Monitor'
- Updated category 'Access Point'
- Updated category 'FC Switch'
- Updated category 'Client'
- Updated category 'Backup'
- Updated category 'Power'
- Updated category 'Enclosure'
- Updated category 'Formfactor'
- Updated category 'Emergency plan'
- Updated category 'SAN'
- Updated category 'Switch'

Bugfixes
- Object image cannot be deleted
- Text is 'escaped' everywhere where it's written into the database
- Date and time is in the wrong format in english
- Repaired JavaScript enhanced categories
- Temporary tables are not always deleted
- many more...

0.9 beta2
Bugfixes
- closed 523: Network: IP-Adresse wird als primär angezeigt
- closed 538: Storage: After creating fc-ports the new view is not the list
view
- closed 531: Storage: JS isn't initially working at the start of the page
- closed 530: Tooltips for all icons
- closed 534: Storage: Kleine Ãnderungen
- closed 537: JavaScript-generated date cannot be formatted
- closed 449: objecttype: cellphone
- closed 314: Dialog+ fields change the actual selected value after adding new
list elements
- closed 100003: Files: Name of downloaded file should be changeable
- closed 532: Storage: Benennungen der Geräte
- closed 528: Network: Port Kategorien lassen sich nicht speichern
- closed 525: Network: Port-Kategorien werden nicht referenziell gelöscht
- closed 526: Network: Statusänderungen bei Ports müssen verhindert werden
- closed 511: Themes cannot be changed
- closed 519: Network: 'Standard'-not connected to port and interface as well
- closed 501: Alt+S doesn't save an object :(
- closed 517: Breadcrumb strings have to be translated
- closed 2: Ermittlung des Installationsverzeichnisses
- closed 510: Checking for rights in action processor
- closed 505: Exchange current plain JS buildup-routine
- closed 504: The language constant editor has too many delete buttons
- closed 495: Category Memory: Row 'unit' is redundant
- closed 493: Title for save button too long
- closed 489: Duplicate button is without function
- closed 498: Maintenance contract fixup / Emergency plan incomplete
- closed 280: Missing script to delete old temporary tables
- closed 485: Temporary tables are always newly created
- closed 486: It is possible to log in to i-doit without password!!!
- closed 483: Temporary tables are not deleted automatically
- closed 467: Description of an object can't be saved
- closed 474: You can't save a storage drive when there is no connected
manufacturer
- closed 478: List views generate SQL-Error
- closed 3: Dienste zu Server hinzufügen fehlerhaft
- closed 362: Date and time in header?
- closed 476: PHPInfo doesn't show up
- closed 475: Logbook navigation does not work - jumping through pages is
impossible
- closed 249: Deletion of temporary directory / caches
- closed 462: Allowed php memory size of 8MB is too low
- closed 473: Add framework button as link to our support-forum
- closed 463: Licences: SQL error when clicking on folder
- closed 207: Tooltip-JS doesn't use via JS changed title attributes
- closed 267: Wrong link in logbook list view
- closed 311: login (back to viewed page)
- closed 317: Status texts are not translated
- closed 401: New CMDB: Highlights in the menutree
- closed 432: Navbar buttons in lists have to be activated correctly
- closed 63: Elementeigenschaften: Speichern beim Wechsel zwischen Unterpunkten
- closed 238: Button-Icons im NavBar haben keine einheitliche Logik
- closed 250: Default tooltips in main navigation
- closed 263: "Edit" button is active in list view
- closed 264: "Delete" button is active in "edit" mode
- closed 278: i18n: New language constants
- closed 289: Editor: HTML chars in text fields

Feature updates
- CMDB: Storage management finished
- CMDB: Network management finished
- CMDB: Licence management fixed
- CMDB: File management fixed
- CMDB: Navigation tree for (network-)port categories
- CMDB: Adding contacts to objects (according to contact management)
- Framework: Environment for theme development
- Framework: Patch-Engine
- Framework: Support for localization (according to UNIX Locale specs)
- ... and many, many more ...

0.9 beta
+ Storage management in beta state
- Controllers (Fibre-Channel, SCSI, ATA, FD etc.)
- Devices / Drives
- SAN-Pools / RAID-Groups
- Contact management / Address book for companies, persons and Groups
- Task management for work orders and checklists
- Web-Installer

0.9 prebeta
- Licence management (as Objecttype in CMDB/Other)
- Network management in beta state (as global category)
- Rights system - rudimentary handling of rights (without User-interface)
- my-doit area which will act as personal bookmark manager initially
- Breadcrumb navigation
- New objecttype configuration
- Objecttype "Cellphone"

0.9 PR3
+ Added file management, which includes ...
- a file manager component with client-independant up-/download
features
- a global CMDB file category in order to attach / detach a file object
- a specific CMDB file category. We have implemented versioning features
into this manager.
- Added power management
- Added logbook
