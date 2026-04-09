---
search:
  exclude: true
---
# Changelog 0.9.X
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
0.9.9-9<br>
Erweiterungen:<br>

-   Listeneditierung für bestehende Kategorieeinträge<br>
-   Massenänderungen für Objekte<br>
-   Benutzerdefinierte Pflichtfelder für Kategorien (Verwaltung/Module/CMDB/Kategorie-Validierung)<br>
-   Benutzerdefinierte Objektlisten<br>
-   mit schnellerem Seitenwechsel<br>
-   und einstellbaren Spalten (Verwaltung/Module/CMDB/Objekt-Listen)<br>
-   Der Query Builder im Report Modul wurde komplett überarbeitet<br>
-   Neues System zur E-Mail Benachrichtigung mit grafischer Konfiguration<br>
-   Neben einem neuen Design stehen neue Felder und Bedingungen zur Auswahl<br>
-   Neue Platzhalter für Objektnamen im Template System (%SYSID%)<br>
-   Wartungsverträge werden zu allgemeinen Verträgen<br>
-   und erhalten überarbeitete Logik<br>
-   Neue Systemrollen für Verträge<br>
-   schreibende sowie lesende JSON-RPC Schnittstelle für Logbuch Einträge aus externen Quellen<br>
-   Spracheinstellungen werden nun pro User im System gespeichert<br>
-   Neugestaltetes Ticket System Modul<br>
-   für eine verbesserte Live-Anbindung an Request Tracker<br>
-   und zur Vorbereitung für eine OTRS Integration<br>
-   Das Verfahren zur Generierung von SYS-IDs ist nun über die Objekttypkonfiguration steuerbar<br>

Fixes:

[Bugfix] - Das Löschen von Objekten in größeren Umgebungen/Datenbanken wurde optimiert<br>
[Bugfix] - SQL Fehler bei Nichtangabe von Feldern in Kategorie Planung<br>
[Bugfix] - SecurityFix: Upload von PHP Dateien verhindern<br>
[Bugfix] - Über H-Inventory importierte Objekte erhalten keinen Eintrag in der Kategorie "Allgemein"<br>
[Bugfix] - In der Übersicht der Lizenzgruppe wird immer nur eine Lizenz unter "Lizenzbezeichnung" angezeigt<br>
[Bugfix] - Reader kann Single-Value Kategorie Einträge erstellen<br>
[Bugfix] - Kategorie "Gruppe": kein Logbucheintrag beim Hinzufügen eines Objekts<br>
[Bugfix] - Extras-Menü im IE an falscher Position<br>
[Bugfix] - Auto-Vervollständigung vom Objektbrowser zeigt klickbare Links an<br>
[Bugfix] - Der Mandantenwechsel funktioniert nicht<br>
[Bugfix] - Kategorie Portübersicht: Links führen zu Anschlüssen anstatt Netzwerk-Ports<br>
[Bugfix] - Kategorie Portübersicht: Es erscheint kein horizontaler Scroller bei zu vielen Ports<br>
[Bugfix] - Kategorie Lizenzen / Übersicht: Ist nicht ins Englische übersetzt<br>
[Bugfix] - In einigen Kategorien wird das Feld Beschreibung nicht gespeichert<br>
[Bugfix] - In der Report View für Beziehungen wird der Objektbrowser nicht richtig angezeigt<br>
[Bugfix] - Lizenzen: Wird kein Datum für Start und Ablauf einer Lizenz eingetragen, erscheint bei der Lizenzzuweisung zu einer Hardware das Datum 1970<br>
[Bugfix] - Lizenzbrowser: Wird der Lizenzbrowser geöffnet und steht direktauf einer Lizenz, wird die zweite Spalte nicht direkt angezeigt<br>
[Bugfix] - OCS-Import: Der Konfigurationslink auf der OCS-Import Seite ist falsch<br>
[Bugfix] - Ist die Logbuch Kategorie auf der Übersichtsseite, erscheinen falsche Werte in der Liste<br>
[Bugfix] - Die Neuanlage einer Benutzerdefinierten Kategorie springt unter gewissen Bedingungen in eine bestehende Kategorie, anstatt einen Neueintrag<br>
[Bugfix] - Ein Problem mit der Scrollleiste im Report Manager wurde behoben<br>
[Bugfix] - Unter einigen Umständen zegit der Datei-Wizard einen Fehler und ist nicht benutzbar<br>
[Bugfix] - In einigen Umgebungen können benutzerdefinierte Kategorien nicht gespeichert werden<br>
[Bugfix] - Objekttyüen können nicht mehr als Container definiert werden<br>
[Bugfix] - Objekte, welche aus dem Template System erzeugt werden erhalten teilweise die gleiche SYS-ID<br>
[Bugfix] - Der CSV-Import wird abgebrochen, wenn nicht alle Zuweisungen gemacht wurden<br>
[Bugfix] - Wenn ein "Gerät / Appliance"-Objekt eine Hostadresse erhalten hat wurde dies nicht in der IP-Liste angezeigt<br>
[Bugfix] - Das letzte Oktett der Layer-3-Netzadresse wird bei einer Neuanlage immer automatisch auf "0" geändert<br>
[Bugfix] - Die LDAP-Authentifizierung wirft einen Datenbank-Fehler und die Anmeldung per LDAP ist nicht möglich<br>
[Bugfix] - Bei installiertem verinice-Modul ist es in der Objekttypkonfiguration nicht möglich beim verinice-Mapping keinen Wert auszuwählen<br>

0.9.9-8<br>
Extensions:

-   Enhanced network documentation<br>
-   Validation and maintenance of IPv4 and IPv6 addresses<br>
-   Validation of layer 3 networks<br>
-   Various accessibility help<br>
-   IPv4 address management<br>
-   IPv6 address management<br>
-   VLANs (layer 2 networks)<br>
-   Layer 2 and layer 3 reports<br>
-   Category "routing"<br>
-   Category "switch"<br>
-   Category "net" -> port overview<br>
-   Revised interface to Request Tracker (module: TTS)<br>
-   Incl. live queries<br>
-   New object type "workstation"<br>
-   Category "assigned logical units"<br>
-   Category "assigned workstation"<br>
-   Creation of logical structures/locations (tree view)<br>
-   Renaming "logical interfaces" to "logical ports"<br>
-   Link from layer 3 net into logical ports<br>
-   Note: By changing the functionality of the category "logical interfaces"<br>
this version only links layer 3 networks. Therefore all layer 2 network<br>
assignments are lost.<br>
-   Coupling of manufacturers to model in the category "model"<br>
-   Network mask in "hostaddresses" and layer 3 network and optionally in bit<br>
notation<br>
-   In the category "net" there must be a field of "reverse DNS".<br>
-   New object type: "layer 2 networks"<br>
-   Category "port": new field "layer 2 network"<br>
-   Category "port": new field "port mode"<br>
-   New category: "layer 2 net"<br>
-   New category: assigned objects<br>
-   Category "hostaddresses": new field "assigned port"<br>
-   Layer 3 net address and host extensions<br>
-   New category: "ip addresses"<br>
-   New category: "port overview"<br>
-   New category: "audit"<br>
-   Extension of category "switch"<br>
-   Extension of category "routers"<br>

Fixes:

[Bugfix] - Date field bug in all IEs<br>
[Bugfix] - Adding a new client: The client is not created, it is offered for downloading via JSON.<br>
[Bugfix] - Object Browser bug on multi selection in the second list<br>
[Bugfix] - Bug in the view of IT service relations<br>
[Bugfix] - Layer 3 network: network with a higher mask than /32 should not be possible.<br>
[Bugfix] - Export templates can not be displayed or deleted.<br>
[Bugfix] - Slow performance when deleting an object<br>
[Bugfix] - Saving a normal report (SQL) backslashes are automatically added.<br>
[Bugfix] - Search does not find entries in the category "access".<br>
[Bugfix] - Compatibility of the new browsers in Internet Explorer 8 faulty<br>
[Bugfix] - Hostaddresses: g_unique_check in config has no effect.<br>
[Bugfix] - Pagination for inventoried items under import does not work.<br>
[Bugfix] - Duplication of interfaces: Type is not accepted.<br>
[Bugfix] - It is possible to select oneself as a location. This creates an infinite loop.<br>
[Bugfix] - H-Inventory can no longer update existing objects since 0.9.9-7.<br>
[Bugfix] - When you let a dragged object go, it does not moves back in the object list but hangs somewhere on the screen.<br>
[Bugfix] - CSV import: Child categories are not displayed.<br>
[Bugfix] - Category cabling defect<br>
[Bugfix] - Changes for people in a department are not possible.<br>
[Bugfix] - Apostrophes (') for dialog+ boxes cause errors<br>
[Bugfix] - Error message when you see a detailed view of a group member<br>
[Bugfix] - When creating a new server, the name is not saved.<br>
[Bugfix] - "Foreign key constraint fails" while duplication of an organization<br>
[Bugfix] - Navigation: Back button in the tree jumps to the wrong place.<br>
[Bugfix] - Object browser throws parameter error.<br>
[Bugfix] - Incorrect duplication dialog in the object type "contact"<br>
[Bugfix] - importing an object (to which a license was assigned) does not work.<br>
[Bugfix] - Special characters mess up XML export.<br>
[Bugfix] - Validation: category "global" forgets properties.<br>
[Bugfix] - Overview page shows no dialog+ fields.<br>
[Bugfix] - Type image in category "Contact assignment" is incorrect.<br>
[Bugfix] - The check all function in connection lists with several different tables does not work as expected.<br>
[Bugfix] - Import/export of the category "virtual devices" does not work anymore.<br>
[Bugfix] - The filter for the object lists does not work at the category ports.<br>
[Bugfix] - When moving a device in the rack view, it loses the insertion configuration.<br>
[Bugfix] - After using the CMDB explorer, there is no scroll bar in i-doit anymore.<br>

0.9.9-7<br>

-   Überarbeitung der Druckansichten<br>
-   Abrundung Im- und Export, Duplizierung und Template-System<br>
-   Komplettierung fehlender Kategorien<br>
-   Verbesserung des CSV Imports<br>
-   Export von benutzerdefinierten Kategorien<br>
-   verbesserter Umgang mit Referenzen beim Import/Templating/Duplizieren<br>
-   Verbesserung der CMDB Browser<br>
-   Neuer Objektbrowser für Verknüpfung von CMDB Objekten<br>
-   Neuer Anschlussbrowser für die Verbindung von Geräten (Netzwerk, Storage, ..)<br>
-   Neuer Objekttyp SIM-Karte<br>
-   Neue Kategorie SIM-Karte<br>
-   Neuer Objekttyp Kryprokarte<br>
-   Neue Kategorie Kryptokarte<br>
-   Neue Kategorie TSI-Service<br>
-   Verbindung der Mobilkarten mit Mobiltelefonen<br>
-   Abschaffung des Menüpunkts Module; Ersetzt durch: Extras<br>
-   Verlagerung der Modulkonfiguration in "Verwaltung"<br>
-   Verbesserung der Änderungshistorie im Logbuch<br>
-   Fehlerbehebungen<br>

0.9.9-6<br>

-   Neues Navigationselement: CMDB-Explorer<br>
-   mit folgenden Darstellungsfunktionen:<br>
-   IT Servicesicht<br>
-   Clustersicht<br>
-   Virtualisierungssicht<br>
-   Standortsicht<br>
-   CMDB-Status für Objekte zur Abbildung des ITIL Lebenszyklus<br>
-   Der Systemstatus von i-doit wurde umbenannt in Zustand<br>
-   Vorausplanung und Dokumentation von Statuswechsel, "Gültigkeitszeitraum"<br>
-   Abschaffung Abhängigkeiten; neues überarbeitetes Beziehungsmodell<br>
-   Hauptmenüpunkt Abhängigkeiten wird zu Beziehungen<br>
-   Gleichgerichtete Beziehungen (z.B. Cluster)<br>
-   IT-Grundschutzmodul<br>
-   Import IT-Grundschutzkatalog<br>
-   diverse Auswertungen<br>
-   Generischer CSV-Import<br>
-   Neue Objekttypen<br>
-   Middleware (und SOA Applikationen)<br>
-   Replikation<br>
-   Datenbankinstanz<br>
-   Neue konfigurierbare Standardfarben für Objekttypen<br>
-   Autosuggestion im Textfeld für Objektverknüpfungen<br>
-   Neue Gruppierungskategorie im IT Service: IT-Service Typ<br>
-   globale Beziehungssicht im IT Service für dessen Komponenten<br>
-   gruppiertes Logbuch im IT Service<br>
-   Entferunung der Hintergrundfarbe von Kategorie-icons<br>
-   Behobene von Fehlern<br>
-   beim Browsen im Logbuch<br>
-   bei der Zuordnung von Partitionen zu Software RAID<br>
-   beim Duplizieren<br>
-   beim Importierten von Software über OCS<br>
-   beim Filtern von Objekten im Objekt-Browser<br>
-   Bessere Darstellung dess Namens für verbundene Anschlüsse<br>
-   Hostadresse hat einen Leereintrag auf Übersichtsseite beim<br>
Nichtausfüllen erzeugt<br>
-   verbesserte Berechnung der CPU Frequenz in Objekt- und Clustervitalität<br>
-   Verbesserung bei Selectfeldern in Änderungshistorie<br>
-   diverse kleine Fehlerbehebungen<br>
-   erhöhte Stabilität<br>

0.9.9-5<br>

-   Many many bugfixes!<br>

-   New ajax location browser (much fuster, no freeze anymore)<br>
-   Categories are now sorted alphanumerically<br>
-   Category group colors were removed<br>
-   New object type DBMS<br>
-   New categories for DBMS<br>
-   DBMS<br>
-   Database instance (practicable for oracle databases)<br>

-   New object type Database schema<br>
-   New categories for database schema<br>
-   database schema<br>
-   database links<br>
-   Fixed different h-inventory problems where XML Import results in a parse error<br>
-   New category IT Service components<br>
-   New category computing resources<br>
-   New category object vitality<br>
-   The objecttypes are now shown as a row in an object group list<br>
-   Special character problem (öäü broken) after duplicating fixed<br>
-   Virtual machines are now able to get assigned to a cluster<br>
-   Fixed HTTP Port problem in Internet Explorer<br>
-   Duplicated objects don't get an own sys-id<br>
-   Javascript error fixed in shared storage<br>
-   Search now works with special characters<br>
-   Sorting a search result works now<br>
-   The Port -> Interface list now also display the interfaces slot number<br>
-   Duplicating a template creates a new regular object instead of a template<br>
-   Archiving and deleting now works for ports and fc-ports<br>
-   Right groups can now only be edited by an admin<br>

0.9.9-4<br>

-   Extended documenattion of virtualized environments<br>
-   New object type virtual host<br>
-   New object type virtual server<br>
-   New object type virtual client<br>
-   New categories for virtual machines:<br>
-   Virtual host<br>
-   Virtual devices<br>
-   Virtual witch<br>
-   Shared virtual switches<br>
-   Documentation of clusters and cluster servies<br>
-   New object type cluster<br>
-   New object tyoe cluster-service<br>
-   New category cluster<br>
-   New category cluster-service<br>
-   New category cluster members<br>
-   New category shared storage<br>
-   New category cluster vitality<br>
-   New category cluster ressources<br>
-   Duplication of objects<br>
-   New category shares<br>
-   Empty categories now look a bit palish<br>
-   Mass completion of workflows<br>

Bugfixes:<br>

-   Fixed: Search doesn't work in redbox theme<br>
-   Fixed: Search didn't escape special chars<br>
-   Several IE-specific issues<br>

0.9.9-3<br>

-   Komplettüberarbeitung der i-doit Kontakte<br>
-   Kontakte sind nun richtige Objekte (Configuration Items)<br>
-   Neuer Objekttyp Person<br>
-   Neuer Objekttyp Organisation<br>
-   Neuer Objekttyp Personengruppe<br>
-   Trennung von Login und Stammdaten einer Person<br>
-   Überarbeitung Storage (Bildung von SAN-Zonen, Abbildung komplexer SAN Strukturen)<br>
-   Neuer Objekttyp San-Zone<br>
-   Neue Kategorie Lokaler Massenspeicher zur Gruppierung von<br>
-   Speicher Geräten<br>
-   Controller<br>
-   Raid Verbund<br>
-   Neue Kategorie Speichernetze (Netzwerkspeicher) zur Gruppierung von<br>
-   Logischen Geräten (LDEV Server)<br>
-   Logischen Geräten (LDEV Client)<br>
-   FC-Ports<br>
-   Hostadapter (HBA)<br>
-   Umbenennung SAN-Pool in Speichersystem<br>
-   Die Sprachauswahl beim Login wurde von den Mandanten getrennt<br>
-   Bookmark Link zur aktuellen Seite in der Navigationszeile der Listen<br>
-   Jedes i-dot Objekt ist nun mit einem QR Code ausgestattet, welcher den aktuellen Link beinhaltet<br>
-   Barcode sind nun (über einen Klick auf das Bild) druckbar<br>
-   Der Standard Barcode ist nun QR. In der src/constants.in.php in<br>
 Zeile 35 kann der gewohnte Code39 wieder aktiviert werden<br>
-   Neue Mandantenverwaltung, erreichbar über /admin<br>
-   Aktivierung und setzen des Passworts in config.inc.php : $g_admin_auth<br>

Bugfixes:<br>

-   Fehler beim Filtern einiger Listen<br>
-   Kontakte können nicht archiviert und gelöscht werden<br>
-   Lizenz Handler verschickte bei Überschreitung mail imt "allen" Lizenzen<br>
-   Problem beim Import über OCS wurde beseitigt<br>
-   Anschluss Browser zeigt alle Anschlüsse als Ausgänge an<br>
-   Import von Kategorie Buchhaltung funktioniert nicht zu 100%<br>
-   Organisationen und Gruppen können im Kontakt Browser nicht abgewählt werden<br>
-   Anschlüsse: Anschlusspärchen wird falsch exportiert<br>
-   Anschlüsse: Ein Klick auf das Anschlusspärchen im edit mode lädt i-doit ohne Stylesheet<br>

0.9.9-2<br>

-   Anbindung an OCS Datenbank<br>
-   Import von inventarisierten OCS Objekten<br>
-   Komplett überarbeitete Verwaltung von Stromobjekten (Vorhandene Stromdaten werden weitgehend migriert)<br>
-   Neuer Objekttyp: Energieversorgungsunternehmen<br>
-   Neuer Objekttyp: Netzersatzanlage<br>
-   Neuer Objekttyp: Verteilerkasten<br>
-   Neuer Objekttyp: Unterbrechungsfreie Stromversorgung<br>
-   Neuer Objekttyp: Steckdosenleiste<br>
-   Neue Kategorie: Stromverbraucher<br>
-   Import / Export von Stromobjekten<br>
-   Neue Visualisierung von verschachtelten Kabelwegen (insb. bei Mehrfachsteckdosen)<br>
-   Übernahme von Netzinformationen bei Zuweisung eines Layer-3-Netzes unter Hostadresse<br>
-   DNS Server und Domäne unter Hostadresse verwenden nun Dialog+ des Layer-3-Netzes<br>
-   Die Standort Kategorie ermöglicht nun das beidseitige Positionieren eines Geräts im Rack ("Einschub: vorne und hinten")<br>
-   Sortieren von Standorten in der Listenansicht<br>
-   JSON Schnittstelle zur Abrufung von Kategorie Inhalten<br>
-   In der Kabelliste werden die unmittelbar Verbundenen Anschlüsse dargestellt<br>
-   Kategorie Version nun exportierbar<br>

Bugfixes (gekürzt):<br>

-   Fehler beim Auslesen der Höheneinheiten eines Geräts (Schrankansicht)<br>
-   Fehler beim Eintragen eines Netzes<br>
-   Datenbank Exception beim Exportieren einer NAGIOS Konfiguration<br>
-   Quickinfo Fenster bleiben unter einigen Umständen im Firefox hängen<br>
-   In der Logbuch Detailansicht fehlen die geänderten Werte<br>
-   Authoren sollten Templates anwenden können<br>
-   Der Listenfilter filtert nur nach Textfeldern (wie z.B. Objekt namen), nicht aber nach z.B. Standorten<br>
-   Bei Umbenennung eines Ports oder einer Schnittstelle wird der zugehörige Anschluss nicht umbenannt<br>
-   Bei Ablauf der Session werden temporäre Tabellen nicht gelöscht<br>
-   Layer 3 Netz: Adressbereich wird bei DHCP Auswahl aus- bzw. eingeblendet<br>
-   Unter einigen Umständen können keine Kontakte zugewiesen werden<br>
-   i-doit Logo ist in Exceptions nicht sichtbar<br>
-   Archivierte und gelöschte Objekte verschwinden nicht aus der Schrankansicht<br>
-   NAGIOS: n/a Werte werden im i-doit als 01.01.1970 dargestellt<br>

0.9.9-1<br>

-   Kabel und Patch Management<br>
-   Neuer Objekttyp: Kabel<br>
-   Neuer Objekttyp: Verstärker<br>
-   Neuer Objekttyp: Patchfeld (Patchpanel)<br>
-   Neuer Objekttyp: Leitungsnetz<br>
-   Neuer Objekttyp: Konverter<br>
-   Kategorie Anschlüsse und Verbindungslogik<br>
-   Anschlussbrowser<br>
-   Kategorie Rechnungen<br>
-   Erweiterung der Kategorie Wartungsverträge<br>
-   Neuer Objekttyp: IT-Service<br>
-   Anbindung an Ticket System: Request Tracker über Modul<br>
-   Cron synchronisation von Tickets<br>
-   Neue Kategorie Tickets<br>
-   Nahtloser Wechsel zwischen Mandanten inmitten einer aktiven Session über<br>
einen "Mouse Over" des Mandanten Namen (links oben)<br>
-   Plausibilitätsprüfungen in der Kategorie Hostadresse (Konfigurierbar<br>
in config.inc.php):<br>
-   Prüfung auf Doppelvergabe von IP-Adressen.<br>
-   Prüfung auf Verfügbarkeit einer IP-Adresse im zugewiesenen Netz über<br>
 einen Refresh Knopf neben der IP-Adresse<br>
-   Prüfung auf Doppelvergabe von Objektnamen (z.B. Servername).<br>
-   Verwaltung von IPv6 Adressen.<br>
-   Entwicklung einer neuen "Custom-Value" Kategorie, welche es ermöglicht Werte<br>
zu frei definierbaren Feldern hinzuzufügen. Custom Kategorien können über<br>
das unter Module befindliche Modul "Benutzerdefinierte Kategorie" erzeugt<br>
und zu Objekt Typen zugewiesen werden.<br>
-   Das Logbuch ermöglicht die Suche nach CMDB Änderungen (Sowohl Global als auch<br>
in der Kategorie Logbuch)<br>
-   Ebenso wurde das Logbuch um eine Funktion für Freitext Meldungen erweitert<br>
-   Report Browser<br>
-   ausführbare Standard Reports<br>
-   Tag Zuordnung für eine Kontaktzuweisung in der Kategorie Kontakte<br>

-   Bugfixes<br>

0.9.9<br>

-   Unzählige Verbesserungen im Datenbank Model, was impliziet folgende<br>
 Auswirkungen auf den Umgang mit i-doit hat:<br>
-   Höhere Datenverfügbarkeit<br>
-   Erhöhung der Performance in größeren Umgebungen<br>
-   Einfachereres Reporting<br>
-   Vereinfachung von CMDB Abfragen<br>
-   Rationalisierungen innerhalb der Mandanten und System Datenbank<br>
-   Neue globale Kategorie: IP Adresse<br>
-   Zuweisung zu allen Objekttypen unabhänging von der Netzwerk Kategorie<br>
-   Neuer Objekttyp: Host<br>
-   Dashboard & Widget System als Willkommensseite<br>
-   Widget: Quicklaunch<br>
-   Widget: Tipps<br>
-   Widget: My latest changes<br>
-   Ablösung der Sprachverwaltung innerhalb der Datenbank<br>
-   Sprachkonstanten werden von nun an in Dateien verwaltet (src/lang/*.inc.php).<br>
-   Neue Möglichkeit für "Custom" Sprachsets (src/lang/*_custom.inc.php)<br>
-   Neue erweiterte Suche innerhalb der CMDB<br>
-   Wechseln der Sprache ohne Logout<br>
-   Entfernung der dynamischen und Port Kategorien (Bis auf IP)<br>
---> ACHTUNG: Datenverlust möglich <---<br>

-   Updated database model, which implicitly means<br>
-   Higher data availability<br>
-   Increasing performance in large environments<br>
-   Easier reporting<br>
-   Simplification of CMDB queries<br>
-   Streamlining of mandator and system database<br>
-   New global category: IP-Address<br>
-   Assignment to all objecttypes independent of the network category<br>
-   New objecttype: Host<br>
-   Dashboard and widget system as welcome page<br>
-   Widget: Quicklaunch<br>
-   Widget: Tips<br>
-   Widget: My latest changes<br>
-   Replacement of the old language administration inside the system database<br>
-   Language constants are administarted inside files from now on (src/lang/*.inc.php)<br>
-   New possibility to add custom language sets (src/lang/*_custom.inc.php)<br>
-   New extended search within the CMDB<br>
-   Changing language without logging out<br>
-   Remove of dynamic and port categories (Except IP)<br>
---> ATTENTION: Data loss possible <---<br>

Additional Changes:<br>

 [Fixed] - Detaching a virtual machine does not work<br>
 [Fixed] - Logical interface import does not work<br>
 [Fixed] - Missing contact and location information in object overview<br>
 [Fixed] - Adv Search: link from result list direct to category<br>
 [Fixed] - Filter by status does not work in hostaddress<br>
 [Fixed] - Name of object in information header is wrong when creating a new object<br>
 [Fixed] - Single value categories are only saveable on second edit<br>
 [Fixed] - Search back button does not work properly<br>
 [Fixed] - Several constraints incorrectly defined<br>
 [Fixed] - Graphic manufacturer is not exported<br>
 [Fixed] - Cutted location paths in object lists are appended by ">"<br>
 [Fixed] - Migration of Contacts does not work properly<br>
 [Fixed] - Switch | File | update => new file will be created<br>
 [Fixed] - Switch | Application/Service | New => Exception and no new file will be created<br>
 [Fixed] - Switch | File Wizard: File choosed and click on "=>" Error Message "get_general_data failed<br>
 [Fixed] - San | Storage | Controller | edit controller results in an Exception<br>
 [Fixed] - Category file does not show the correct actual file version<br>
 [Fixed] - Global search for log. Interface<br>
 [Fixed] - CPU Frequency does not allow comma values (e.g 3,6)<br>
 [Fixed] - Calendar Bug in Internet Explorer<br>
 [Fixed] - Maintenance Agreement in IE < 8 does not show the "sub contract"<br>
 [Fixed] - Empty net assignments are displayed as root-location in an export<br>
 [Fixed] - No Calender in maintenance contract "end"<br>
 [Fixed] - No Calender in maintenance contract "start"<br>
 [Fixed] - +/- in Memory does not work in overview category<br>
 [Fixed] - Assigning a file in global category "file" does not work<br>

0.9.8-2<br>
[Enhancement] - Quick Infos for object links (Mouseover)<br>
 [Enhancement] - Include assigned net object in a port export<br>
 [Enhancement] - New javascript calendar<br>
 [Enhancement] - Editable start/end date in workflows<br>
 [Enhancement] - Database optimization<br>
 [Enhancement] - Search function in object browser<br>
 [Enhancement] - Filter function for the object-browser<br>
 [Fixed] - No comma values possible in specific category wan<br>
 [Fixed] - No comma values possible in san-pool category<br>
 [Fixed] - Archived logical interfaces are not recycable<br>
 [Fixed] - An empty manual is created after saving the overview page<br>
 [Fixed] - No applications/operating systems assignable in object browser<br>
 [Fixed] - Calendar time does not work<br>
 [Fixed] - No delete and purge button in ip list<br>
 [Fixed] - Global dependencies not editable<br>
 [Fixed] - Group filter does not work in contact browser<br>
 [Fixed] - Several bugs in workflow module<br>
 [Fixed] - Error in category view for workflows<br>
 [Fixed] - Detach button on network port connection<br>
 [Fixed] - Importing a not existing image via xml results in an error<br>
 [Fixed] - IP Addresses are not applied in templates<br>
 [Fixed] - Template description is not applied in object image<br>
 [Fixed] - Only a few port properties are applyed by a template<br>
 [Fixed] - Some interface properties are missing while applying an interface template<br>
 [Fixed] - Template loses status after creating object.<br>
 [Fixed] - It is not possible to add the same LDAP server with a different search DN<br>
 [Fixed] - Error in Workflow Module<br>
 [Fixed] - Category entries in category application are not deleted when referenced application is deleted<br>
 [Fixed] - Missing fields in logbook archive<br>
 [Fixed] - Problems with large object lists<br>
 [Fixed] - Multiple assignments to one port possible<br>
 [Fixed] - Saving an _empty_ location results in an error<br>
 [Fixed] - Clicking on workflow abort-button creates a new "completed"-action<br>

0.9.8-1<br>
[Enhancement] - Automatic update check (via updatecheck controller)<br>
 [Enhancement] - Capitalized key-words in print view<br>
 [Enhancement] - Converting an object into a template<br>
 [Enhancement] - PHP 5.3.0 Support<br>
 [Enhancement] - Template System: Nagios templates<br>
 [Enhancement] - Template System: Applying object images<br>
 [Fixed] - Error saving category memory<br>
 [Fixed] - Tree and tooltips does not work in Internet Explorer 6 & 7<br>
 [Fixed] - Internet Explorer 6 & 7 Cache problem alert<br>
 [Fixed] - Template System: Global category -> purpose not applied<br>
 [Fixed] - Click on checkbox in contact browser does not work<br>
 [Fixed] - Template System: Network Interfaces & Ports are not created<br>
 [Fixed] - Adding location objects via category objects does not work anymore<br>
 [Fixed] - Username and password are not saveable when editing a person<br>
 [Fixed] - The update check does not work in system overview<br>

0.9.8<br>
[Enhancement] - Template System / Module<br>
 [Enhancement] - New handler for Nagios export<br>
 [Enhancement] - Nagios export path configurable<br>
 [Enhancement] - Simplify category memory<br>
 [Enhancement] - Global information moved into object table<br>
 [Enhancement] - New category "accounting"<br>
 [Enhancement] - Print preview for objects<br>
 [Enhancement] - New Role/Rights Management for groups<br>
 [Enhancement] - Used licence selection for an Application/OS is now possible in the application assignment<br>
 [Enhancement] - Connected ports without location<br>
 [Fixed] - Constant name gets translated in objecttype configuration<br>
 [Fixed] - Saving an access URL creates a new one.<br>
 [Fixed] - Creating 2 FC-Ports always creates 3<br>
 [Fixed] - You can not edit existing dependencies or object combinations<br>
 [Fixed] - Module uninstaller did not work properly<br>
 [Fixed] - Locations are not detachable<br>
 [Fixed] - Error in logbook browsing<br>
 [Fixed] - Error processing AJAX request" when trying to edit the logbook archiving settings<br>
 [Fixed] - When you create a new organisation the name field is prefilled with the value "new organisation"<br>
 [Fixed] - Locations can not be unlinked<br>
 [Fixed] - SAN-Pool Browser does not work properly<br>
 [Fixed] - Room is not savable<br>
 [Fixed] - Print view for rack visualization<br>
 [Fixed] - Problems with File Upload Wizard<br>

0.9.7-1<br>
[Enhancement] - More info in objecttype configuration lists<br>
 [Enhancement] - LDAP: Experimental OpenLDAP fix<br>
 [Enhancement] - Advanced tracking of changes in logbook<br>
 [Enhancement] - Added update check to system overview<br>
 [Enhancement] - New "System Overview" in maintenance section<br>
 [Enhancement] - Characters "r" and "b" are trimmed from the last line of textareas<br>
 [Fixed] - Object Net is not createable<br>
 [Fixed] - Login does not work with special characters in username or password<br>
 [Fixed] - It is not possible to filter/search for special characters like an umlaut<br>
 [Fixed] - LDAP connection errors<br>
 [Fixed] - SYSID always readonly<br>
 [Fixed] - The calender popup does not work<br>
 [Fixed] - LDAP error when logging in with an unknown user<br>
 [Fixed] - Object image upload does not work<br>
 [Fixed] - Problem when creating a mobile phone<br>
 [Fixed] - Printer objects are not usable<br>

0.9.7<br>
[Enhancement] - Function "New" for dialog administrator<br>
 [Enhancement] - Hotspare status is not revertable to "No" in device category<br>
 [Enhancement] - Network port creation fails after "pre-selecting" the interface<br>
 [Fixed] - Users having writing-privileges on the CMDB are not<br>
 allowed change the password of any user anymore<br>
 [Fixed] - Port problem when a port was deleted<br>
 [Fixed] - Removed hotspare from raid-calculation<br>
 [Fixed] - Object image upload does not work<br>
 [Fixed] - Object images are not deleted after clearing them<br>
 [Fixed] - IE6 freezes after login<br>
 [Fixed] - FC-Port is not editable via checkbox<br>
 [Fixed] - Creation of more than one primary access url possible<br>
 [Fixed] - Page corrupted after clicking on a list entry on page > 1<br>
 [Fixed] - File upload does not work in wizard<br>
 [Fixed] - Unexpected behaviour in menu tree<br>
 [Fixed] - Adding a new contact deletes primary selection<br>

0.9.6-1<br>
[Enhancement] - Alert message on browser cache problems<br>
 [Enhancement] - IP Address in rack view<br>
 [Enhancement] - Removed unneeded debug calls which increases script performance<br>
 [Enhancement] - New logbook commentary design<br>
 [Fixed] - Save Cancel buttons in object combinations does not work<br>
 [Fixed] - Error in Nagios status view<br>
 [Fixed] - Saving does not work in rack-view<br>
 [Fixed] - New breadcrumb implementation for AJAX-Calls<br>
 [Fixed] - Appended "r" on every line break in description fields<br>
 [Fixed] - Redbox theme display problem (empty fields)<br>
 [Fixed] - Paging (Prev/Next) does not work inside categories<br>
 [Fixed] - Nagios error in overview page<br>
 [Fixed] - Moving does not work in rack view<br>

0.9.6<br>
[Enhancement] - Ajax Engine<br>
 [Enhancement] - NAGIOS Export<br>
 [Enhancement] - More information in Nagios category<br>
 [Enhancement] - LDAP Debug<br>
 [Enhancement] - Workflow tasks now deletable<br>
 [Enhancement] - Category maintenance: Detailed information when assigning a contract<br>
 [Enhancement] - New notification system for maintenance if contract ends (handler)<br>
 [Enhancement] - New field: "File Link" in category file<br>
 [Enhancement] - Manual input of dates, instead of selecting with the popup<br>
 [Enhancement] - Selection of (application) groups in application assignment<br>
 [Enhancement] - Optimization: Overview Category<br>
 [Enhancement] - Optimization: CMDB Module<br>
 [Enhancement] - Optimization: Module Manager<br>
 [Enhancement] - Sorting in workflow tables<br>
 [Enhancement] - Infobox query optimized<br>
 [Enhancement] - Performance and page load optimized<br>
 [Enhancement] - Mandator/Client in header name is now a link to the welcome page<br>
 [Enhancement] - New info message: "Logged in as: xy"<br>
 [Enhancement] - "my-doit" closing button (X)<br>
 [Fixed] - Internet Explorer 7 display optimization<br>
 [Fixed] - The search does not work anymore<br>
 [Fixed] - Rounding problem in licence list<br>
 [Fixed] - Content top switch javascript problem<br>
 [Fixed] - No logbook entries generated after category update<br>
 [Fixed] - Uninstalling inactive modules does not work<br>
 [Fixed] - Print button is always disabled<br>
 [Fixed] - my-doit bookmark creation fails<br>
 [Fixed] - Editing an interface inside a port does not work<br>
 [Fixed] - Creating a new workflow does not work anymore<br>
 [Fixed] - Port editing does not work<br>
 [Fixed] - Category access is not savable<br>
 [Fixed] - Strip slashes when displaying object names<br>
 [Fixed] - Deleting a licence group does not work<br>
 [Fixed] - Deleting a licence does not work<br>
 [Fixed] - Backslashes are not correctly escaped in description fields<br>
 [Fixed] - SQL Error in location browser<br>
 [Fixed] - Escape characters ("") are visible in GUI<br>
 [Fixed] - Saving a network port results in an error<br>
 [Fixed] - Creating a new port results in an exception<br>
 [Fixed] - Access rights are not applied correctly<br>
 [Fixed] - Editing a fc port does not work from list<br>
 [Fixed] - Editing a network port does not work from list<br>
 [Fixed] - Every creation of an interface also creates another unready interface<br>
 [Fixed] - Port Browser tree display error<br>
 [Fixed] - SAN-Pool Browser is always empty<br>

0.9.5<br>
[Task]- Purging of obsolete code<br>
 [Enhancement] - Monetary field (EUR, DOLLAR, ..) = "ISY_NULL" in licence overview<br>
 [Enhancement] - Same SYS-ID"s for multiple objects are no more possible; Config constant in src/constants.inc.php added<br>
 [Enhancement] - Logbook description of failed overview savings now show error info about what category had problems<br>
 [Enhancement] - List of assigned objects in object-types "Service, Application and Operating System<br>
 [Enhancement] - New quicklaunch menu in welcome screen<br>
 [Enhancement] - Changed object browser refreshing to ajax load<br>
 [Enhancement] - NAGIOS Export (BETA)<br>
 [Fixed] - Port browser - duplicate objects display fix<br>
 [Fixed] - Maintenance -> Assigned objects does not work<br>
 [Fixed] - Contact browser does not move newly selected persons into the parent input field<br>
 [Fixed] - Removed image title from object image<br>
 [Fixed] - Internet Explorer CSS problems<br>
 [Fixed] - Logbook category not correctly displayed in category overview<br>
 [Fixed] - Object selection in object browser does not work always<br>
 [Fixed] - Function to directly select pages in lists instead of just forward/backward<br>
 [Fixed] - Selecting a port connection does not work (in Network- and FC-Ports)<br>
 [Fixed] - Swap master with slave objects in dependency table<br>
 [Fixed] - Object positioning in category location is not correctly displayed in rack-view<br>
 [Fixed] - Filter string should still be setted when jumping back to the list<br>
 [Fixed] - Category model is not saved when creating an item in the overview category<br>
 [Fixed] - Creating a FC-Port does not work<br>
 [Fixed] - Multiselection in contact browser<br>
 [Fixed] - Adding more than one contacts adds one empty contact; Group selection also possible now<br>
 [Fixed] - Monthly workflows generate daily tasks<br>
 [Fixed] - Full RAID calculation in storage category<br>

0.9.4-5<br>
[Enhancement] - LDAP Integration (BETA)<br>
 [Enhancement] - Module installer / uninstaller<br>
 [Enhancement] - Nagios Module integrated<br>
 [Enhancement] - Graphical mandator overview<br>
 [Enhancement] - Location path in object lists<br>
 [Enhancement] - New field "key" in access point category<br>
 [Enhancement] - Ability to uninstall, deactivate and activate modules in module manager<br>
 [Enhancement] - Specific category access point should be multivalued<br>
 [Enhancement] - SYS-ID readonly configuration in i-doit registry: [Root]/idoit/constants/SYSID__READONLY<br>
 [Enhancement] - Locking of datasets in edit mode<br>
 [Enhancement] - Editing licences does not work when entering the category over the"Licence" directory link<br>
 [Enhancement] - Entries in category "dependency" cannot be changed<br>
 [Enhancement] - Licence currency should be editable, not forced to be EUR<br>
 [Fixed] - Connected file object in category emergency plan is not displayed<br>
 [Fixed] - Changing an entry in category sound affects all entries<br>
 [Fixed] - Changing an entry in category graphic affects all entries<br>
 [Fixed] - Rack view not well displayed in internet explorer<br>
 [Fixed] - Constant is overwritten with empty value in Dialog-Admin<br>
 [Fixed] - The type of created power-objects is not editable after saving<br>
 [Fixed] - New Object-types are not shown in the rack-view<br>
 [Fixed] - DB prefix cannot be changed for NDO<br>

0.9.4<br>
[Enhancement] - CMDB improvements<br>
 [Enhancement] - Wiki link for each textbox (url defined in src/constants.inc.php)<br>
 [Enhancement] - New object type: Operating System<br>
 [Enhancement] - New global category: Virtual Machine<br>
 [Enhancement] - New fields: warranty period - remainder warranty in global category<br>
 [Enhancement] - New Logbook message: Category Archived<br>
 [Enhancement] - New Logbook message: Category Purged<br>
 [Enhancement] - New storage type: SAS<br>
 [Enhancement] - RackView (Graphical view and positioning of rack contents)<br>
 [Enhancement] - Specific categories inside overview category<br>
 [Enhancement] - Graphical Rack Viewer in specific category 'Rack' based on formfactor units<br>
 [Enhancement] - Adminstrative interface for Dialog+ boxes<br>
 [Enhancement] - New Logbook list for better overview with filter functions<br>
 [Enhancement] - Logbook archive function to another MySQL Server<br>
 [Fixed] - 'No object selected' link results in an error<br>
 [Fixed] - Wrong data field in Category table air condition<br>
 [Fixed] - Dialog Administrator allows editing of first element only<br>
 [Fixed] - Dialog Admininistrator: Some tables are missing<br>
 [Fixed] - After deleting an 'unready' object, the log message says 'archived' instead of 'deleted'<br>
 [Fixed] - Title of FC-Port always extended by a numeric value<br>
 [Fixed] - Object-tree in dependency -> object combinations doesnt work<br>
 [Fixed] - Icon of self defined container broken in location tree<br>
 [Fixed] - Session expiration also on ajax requests<br>
 [Fixed] - Assignments get deleted after saving a workflow and not changing them<br>
 [Fixed] - New fields in global category: purchased at, order no.<br>
 [Fixed] - Logical interface gets purged when clicking on archive. A regular archive is not possible<br>
 [Fixed] - Devices are not saved after saving a raid<br>
 [Fixed] - Workflow action parameters cannot get saved<br>
 [Fixed] - Workflow contacts get resetted when not editing them after saving a workflow<br>
 [Fixed] - Removed duplicate rack formfactory configuration in specific category<br>
 [Fixed] - Variable length of infobox messages (src/constants.inc.php::C__INFOBOX__LENGTH)<br>

0.9.3-r419<br>
[Enhancement] - Object combinations (Server/Client > Application / Service)<br>
 [Enhancement] - Security issues in Dialog-Admin<br>
 [Enhancement] - Purging objects!!! (Beta)<br>
 [Enhancement] - Logbook does not show any information about a purged, or a changed category<br>
 [Fixed] - It's possible to login with a deleted user<br>
 [Fixed] - Settings like IP or Routing are not saved when creating a logical interface<br>
 [Fixed] - The name and object-type of a purged object is empty<br>
 [Fixed] - Logbook message is empty when an object change failed<br>
 [Fixed] - Show human readable information about a change in the logbook category ;-)<br>
 [Fixed] - Logbook link in headline produces an error<br>
 [Fixed] - Show port-connection in fc-port list<br>
 [Fixed] - Port connections unstable - Any re-assignment is not saved!<br>
 [Fixed] - After saving/creating a fc-port, not all information are saved<br>
 [Fixed] - RAID-1 capacity is not automatically calculated<br>
 [Fixed] - GUI Message when object id does not exist<br>
 [Fixed] - Object browser somtimes empty<br>
 [Fixed] - Application assignment not saveable<br>
 [Fixed] - New alarm message when object type cannot be deleted<br>

0.9.3-r325<br>
[Enhancement] - Implemented WAN-Capacity unit<br>
 [Enhancement] - Improved loading performance of the front-end<br>
 [Enhancement] - Multi mandator capability for controller<br>
 [Enhancement] - Load my-doit with AJAX<br>
 [Enhancement] - Room: Startpage does not contain any informations (4h)<br>
 [Fixed] - Mandatory field in dependencies results in overview problems<br>
 [Fixed] - Printer-Interface only shows last connected interface<br>
 [Fixed] - Disable logbook save and cancel buttons<br>
 [Fixed] - Some icons missing in location view<br>
 [Fixed] - RAID not saveable<br>
 [Fixed] - object types are not visible anymore after saving the objecgt type configuration<br>
 [Fixed] - mydoit problems in internet explorer<br>
 [Fixed] - Adding an interface does not work<br>
 [Fixed] - Workflow checklist parameters not savable<br>
 [Fixed] - Cannot add hard discs to raid<br>
 [Fixed] - Switch contentheader and tree via javascript<br>
 [Fixed] - Wrong values get saved when creating a logical interface<br>
 [Fixed] - MenuTree for locations doesn't remember current object<br>
 [Fixed] - GUI enhancements: Manual / Maintenance and Emergency Plan<br>

0.9.3<br>
[Enhancement] - Barcode plugin for category global (Must be enabled in config.inc.php)<br>
 [Enhancement] - Preloader editable in system settings<br>
 [Enhancement] - Editable path field for the directory browser inside the i-doit setup (For selecting other partitions on Windows systems)<br>
 [Enhancement] - Focus to "Title" when creating a new object<br>
 [Enhancement] - Treeicons for object-types<br>
 [Enhancement] - The application category needs an object browser for the application selection<br>
 [Enhancement] - Location entries in reverse (add objects to your current location)<br>
 [Enhancement] - Handler to activate / deactivate mandators<br>
 [Fixed] - New logical interface not editable after creation<br>
 [Fixed] - Number of objects in tree is showing also disabled or deleted objects<br>
 [Fixed] - Default value for "front side of a rack" changed to "Yes"<br>
 [Fixed] - Unnecessary mandatory field #2 (Title in category object-image)<br>
 [Fixed] - Main menu does not change when clicking on a contact inside the cmdb (e.g. "Infrastructure")<br>
 [Fixed] - When creating new objects the name field is always filled<br>
 [Fixed] - Category location displays all new objects inside root-location even if there are not assigned to it<br>
 [Fixed] - Unnecessary mandatory fields<br>
 [Fixed] - new buldings do not attach to the root location automatically<br>
 [Fixed] - Navbar buttons always disabled<br>
 [Fixed] - Adding applications to an object does not work anymore<br>
 [Fixed] - New user cannot login<br>
 [Fixed] - MAC adresses cannot be found in the search<br>
 [Fixed] - Licence handler scans 1 licence object only<br>
 [Fixed] - ZIP only without leading '0'<br>
 [Fixed] - Port connections could be unstable<br>
 [Fixed] - Function to delete cache doesn't delete all cached data<br>
 [Fixed] - Assigning Workflows to persons doesn't work any more after the Workflow is saved<br>

0.9.2 rev 3069<br>
[Enhancement] - Location entries in reverse (add objects to your current location)<br>
 [Fixed] - New user cannot login<br>
 [Fixed] - MAC adresses cannot be found in the search<br>
 [Fixed] - Licence handler scans 1 licence object only<br>
 [Fixed] - ZIP only without leading '0'<br>
 [Fixed] - Port connections could be unstable<br>

0.9.2<br>
[Enhancement] - Count licences on the basis of the connection to servers and clients_not applications<br>
 [Enhancement] - Editable workflows<br>
 [Enhancement] - In licences in use_ show name(s) of user(s)_which are using the corresponding licence<br>
 [Enhancement] - Port list: Name of destination device has also to be shown<br>
 [Fixed] - Port type cannot be deleted<br>
 [Fixed] - Error in former connected port when deleting a port<br>
 [Fixed] - HTTPS not working<br>
 [Fixed] - The list filter status could be shown incorrectly<br>
 [Fixed] - Name of fuse cannot be saved<br>
 [Fixed] - Description for new object type is not saved<br>
 [Fixed] - Updater does not check 'requirements'<br>
 [Fixed] - Javascript clock is flickering<br>
 [Fixed] - Error when opening spec. category for application<br>
 [Fixed] - UI-browser only shows objects of type server<br>
 [Fixed] - Workflows cannot be shown any more when someone overwrites 'start_date'<br>
 [Fixed] - Licence list is not shown<br>
 [Fixed] - Hardware-RAID-groups cannot be saved<br>
 [Fixed] - List 'Assigned objects' (specific category 'file') doesn't have a list filter<br>

0.9.1 rev 2916<br>
[Task]- Replace all language specific words with LCs<br>
 [Enhancement] - Extend right system to NavBar buttons<br>
 [Enhancement] - Distributor updated_object view now faster<br>
 [Enhancement] - New login procedure (AJAX)<br>
 [Enhancement] - Display a message when session timed out<br>
 [Enhancement] - Easier and faster setup<br>
 [Enhancement] - New and easy way to update i-doit<br>
 [Enhancement] - Port browser: Mark ports in use<br>
 [Enhancement] - Object types cannot be deleted<br>
 [Enhancement] - Enhanced checklists (workflows)<br>
 [Enhancement] - More details in first view of power objects<br>
 [Enhancement] - Room list view: Additional values<br>
 [Enhancement] - Floor entry has to be text instead of just numbers (1h)<br>
 [Enhancement] - Network ports: Names for cables<br>
 [Enhancement] - Port list: List the object of the destination port<br>
 [Enhancement] - Workflow management tool (instead of tasks and checklists)<br>
 [Enhancement] - Dialog+ fields change the actual selected value after adding new list elements<br>
 [Fixed] - Cache listens to hardcoded port<br>
 [Fixed] - List search doesn't work 'onKeyPress'<br>
 [Fixed] - No rights for external DB users<br>
 [Fixed] - idoit debug console does not work properly<br>
 [Fixed] - Licences: logbook title is empty when saving new licence<br>
 [Fixed] - Category 'General'is missing the title in view mode (object type 'services')<br>
 [Fixed] - Category 'general' missing in licences<br>
 [Fixed] - Error on saving a dynamic category<br>
 [Fixed] - Settings cannot be saved<br>
 [Fixed] - No login possible with 'Enter'-Button<br>
 [Fixed] - IEBug: Login screen not centered<br>
 [Fixed] - Categories are displayed wrong<br>
 [Fixed] - Quick-save button settings cannot be saved<br>
 [Fixed] - Category 'Workorder' is deprecated!<br>
 [Fixed] - If session gets closed by the browser_ there is a php error displayed after refreshing i-doit<br>
 [Fixed] - Language constants cannot be deleted<br>
 [Fixed] - If no mandant is installed or detectable in isys_mandator - the login says invalid password<br>
 [Fixed] - Trouble with decoding html special characters<br>
 [Fixed] - Update: Version number is not updated<br>
 [Fixed] - Titles in list view of storage drives is not translated<br>
 [Fixed] - After saving a storage drive the following view is wrong<br>
 [Fixed] - Organisations/Contacts: Not possible to delete objects<br>
 [Fixed] - 'tempObjData' could cause problems<br>
 [Fixed] - Category storage: device doesn't save numerical values<br>
 [Fixed] - Numeric/decimal format wrong in list views<br>
 [Fixed] - Date in Infobox is not formatted<br>
 [Fixed] - Saving a drive without a filesystem type selection results in an sql error<br>
 [Fixed] - Image title in object image is not saved<br>
 [Fixed] - Access url in category access is converted to integer<br>
 [Fixed] - Incorrect integer value: '' for column 'isys_catg_stor_list__capacity'<br>
 [Fixed] - When a cpu or port gets created_the data of it is not directly shown in view/list mode<br>
 [Fixed] - When a cpu gets created_ the data of it is not directly shown in view mode<br>
 [Fixed] - Security fix: Show smarty debug console only on localhost<br>
 [Fixed] - Error when detaching a newly created building<br>
 [Fixed] - Category global is missing in licences<br>
 [Fixed] - Adding a licence results in a mysql error<br>
 [Fixed] - Contact lists doesn't get refreshed correctly after assigning persons and/or groups<br>
 [Fixed] - Saving an objecttype without selecting any overview entry results in an error<br>
 [Fixed] - Contact gets deleted after editing an entry<br>
 [Fixed] - Interface cannot be created<br>
 [Fixed] - Language constant editor: Buttons not in edit mode<br>
 [Fixed] - Dialogue lists with errors in view mode<br>
 [Fixed] - Files are not deletable<br>
 [Fixed] - Fields with dimension units are to be saved as DECIMAL<br>
 [Fixed] - Object image can't be downloaded after creating it<br>
 [Fixed] - Some Dialog+ don't set the status to '2' when adding new items<br>
 [Fixed] - Storage: Some logic bugs (4h)<br>
 [Fixed] - Contact browser too small for content in IE<br>
 [Fixed] - Category Storage: Type floppy is mising when creating a controller<br>
 [Fixed] - Category Storage<br>
 [Fixed] - Power object: connection problems<br>
 [Fixed] - CSS: Styles in IE have too big fonts (2h)<br>
 [Fixed] - Port: already set connection cannot be deleted<br>
 [Fixed] - New doesnt work in detail view of a port<br>
 [Fixed] - Logical interface: net object is not saved correctly<br>
 [Fixed] - Logical interface: not possible to save<br>
 [Fixed] - Count licences on the basis of the connection to servers and clients<br>
 [Fixed] - Contact groups cannot be created<br>
 [Fixed] - Path strings not escaped during setup<br>
 [Fixed] - Licence: Adding a group results in an error<br>
 [Fixed] - Monitor: units are not translated with language constants<br>
 [Fixed] - Storage: Not possible to connect a partition to a device!<br>
 [Fixed] - IP-Port: DHCP selected but you still must enter an IP-Adress<br>
 [Fixed] - Link in IP-List wrong<br>
 [Fixed] - FC-Switch: Storage category missing<br>
 [Fixed] - Power Oject - Connecting to other Power Objects: Connected Devices not visible<br>
 [Fixed] - KVM-Switch-Contact: Not possible to add aPrimary Contact<br>
 [Fixed] - Files: Wrong link + not deleteable<br>
 [Fixed] - Wrong link in overview page to ports<br>
 [Fixed] - Power object: Cannot be deleted / connections cannot be deleted<br>
 [Fixed] - Port-browser doesn't work in IE<br>
 [Fixed] - Licences cannot be archived<br>
 [Fixed] - Category location: Objekts that are already archieved and deleted are not filtered in the browser<br>
 [Fixed] - Creation of a SAN object<br>
 [Fixed] - Ports : Object corrupt after setting port from inactive to active<br>
 [Fixed] - Server-Network-Port: Browserwindow for assigning a Network is to small (IE)<br>
 [Fixed] - Interfaces-Connections: Creating a new Connection with IE does not work<br>
 [Fixed] - Network-Port: Field Mac-adress is visible only after saving<br>
 [Fixed] - Blank screen error<br>
 [Fixed] - No link for the URL in 'organisations'<br>
 [Fixed] - Redbox theme: No scrolling in IE<br>
 [Fixed] - Contact organisations<br>
 [Fixed] - Ports cannot be created<br>
 [Fixed] - Specific category 'power'<br>
 [Fixed] - Specific category file - current file: description is not saved<br>

0.9 rev 2409<br>
Bugfixes<br>

-   Access point can't be created<br>
-   SAN can't be created on some systems<br>
-   Can't open input plug in power object<br>
-   Port detail view is not shown correctly<br>
-   Link in overview page of ports not working correctly<br>
-   Login problems<br>
-   Ports are not created correctly if values are missing<br>
-   The global debugger instance is not available on some systems<br>
-   WAP can't be saved correctly<br>
-   Not possible to change themes<br>
-   Licences can't be deleted correctly<br>
-   Number of used licences is not calculated correctly<br>
-   The port browser doesn't work in IE<br>
-   FC ports can't be selected<br>
-   Storage: Partition can't be connected to a device<br>
-   Contact groups can't be created<br>
-   Link in IP list not working correctly (in ports)<br>
-   Files from file category can't be downloaded<br>

0.9<br>
New features<br>

-   Search<br>
-   Workflow management system (Tasks, checklists and self-defined objects)<br>
-   Link to our documentary<br>
-   You can switch between different date, time and numerical formats<br>
-   You can switch the 'QuickSave' functionality on or off (Without QuickSave<br>
the user has to fill in a description for his changes in a pop-up window)<br>
-   Additional description for logbook entries, see also 'QuickSave' for that<br>
-   New category 'Overview' with values from some selected categories<br>
-   Updated category 'Air Conditioning'<br>
-   Updated category 'Printer'<br>
-   Updated category 'Monitor'<br>
-   Updated category 'Access Point'<br>
-   Updated category 'FC Switch'<br>
-   Updated category 'Client'<br>
-   Updated category 'Backup'<br>
-   Updated category 'Power'<br>
-   Updated category 'Enclosure'<br>
-   Updated category 'Formfactor'<br>
-   Updated category 'Emergency plan'<br>
-   Updated category 'SAN'<br>
-   Updated category 'Switch'<br>

Bugfixes<br>

-   Object image cannot be deleted<br>
-   Text is 'escaped' everywhere where it's written into the database<br>
-   Date and time is in the wrong format in english<br>
-   Repaired JavaScript enhanced categories<br>
-   Temporary tables are not always deleted<br>
-   many more...<br>

0.9 beta2<br>
Bugfixes<br>

-   closed 523: Network: IP-Adresse wird als primär angezeigt<br>
-   closed 538: Storage: After creating fc-ports the new view is not the list<br>
view<br>
-   closed 531: Storage: JS isn't initially working at the start of the page<br>
-   closed 530: Tooltips for all icons<br>
-   closed 534: Storage: Kleine Ãnderungen<br>
-   closed 537: JavaScript-generated date cannot be formatted<br>
-   closed 449: objecttype: cellphone<br>
-   closed 314: Dialog+ fields change the actual selected value after adding new<br>
list elements<br>
-   closed 100003: Files: Name of downloaded file should be changeable<br>
-   closed 532: Storage: Benennungen der Geräte<br>
-   closed 528: Network: Port Kategorien lassen sich nicht speichern<br>
-   closed 525: Network: Port-Kategorien werden nicht referenziell gelöscht<br>
-   closed 526: Network: Statusänderungen bei Ports müssen verhindert werden<br>
-   closed 511: Themes cannot be changed<br>
-   closed 519: Network: 'Standard'-not connected to port and interface as well<br>
-   closed 501: Alt+S doesn't save an object :(<br>
-   closed 517: Breadcrumb strings have to be translated<br>
-   closed 2: Ermittlung des Installationsverzeichnisses<br>
-   closed 510: Checking for rights in action processor<br>
-   closed 505: Exchange current plain JS buildup-routine<br>
-   closed 504: The language constant editor has too many delete buttons<br>
-   closed 495: Category Memory: Row 'unit' is redundant<br>
-   closed 493: Title for save button too long<br>
-   closed 489: Duplicate button is without function<br>
-   closed 498: Maintenance contract fixup / Emergency plan incomplete<br>
-   closed 280: Missing script to delete old temporary tables<br>
-   closed 485: Temporary tables are always newly created<br>
-   closed 486: It is possible to log in to i-doit without password!!!<br>
-   closed 483: Temporary tables are not deleted automatically<br>
-   closed 467: Description of an object can't be saved<br>
-   closed 474: You can't save a storage drive when there is no connected<br>
manufacturer<br>
-   closed 478: List views generate SQL-Error<br>
-   closed 3: Dienste zu Server hinzufügen fehlerhaft<br>
-   closed 362: Date and time in header?<br>
-   closed 476: PHPInfo doesn't show up<br>
-   closed 475: Logbook navigation does not work - jumping through pages is<br>
impossible<br>
-   closed 249: Deletion of temporary directory / caches<br>
-   closed 462: Allowed php memory size of 8MB is too low<br>
-   closed 473: Add framework button as link to our support-forum<br>
-   closed 463: Licences: SQL error when clicking on folder<br>
-   closed 207: Tooltip-JS doesn't use via JS changed title attributes<br>
-   closed 267: Wrong link in logbook list view<br>
-   closed 311: login (back to viewed page)<br>
-   closed 317: Status texts are not translated<br>
-   closed 401: New CMDB: Highlights in the menutree<br>
-   closed 432: Navbar buttons in lists have to be activated correctly<br>
-   closed 63: Elementeigenschaften: Speichern beim Wechsel zwischen Unterpunkten<br>
-   closed 238: Button-Icons im NavBar haben keine einheitliche Logik<br>
-   closed 250: Default tooltips in main navigation<br>
-   closed 263: "Edit" button is active in list view<br>
-   closed 264: "Delete" button is active in "edit" mode<br>
-   closed 278: i18n: New language constants<br>
-   closed 289: Editor: HTML chars in text fields<br>

Feature updates<br>

-   CMDB: Storage management finished<br>
-   CMDB: Network management finished<br>
-   CMDB: Licence management fixed<br>
-   CMDB: File management fixed<br>
-   CMDB: Navigation tree for (network-)port categories<br>
-   CMDB: Adding contacts to objects (according to contact management)<br>
-   Framework: Environment for theme development<br>
-   Framework: Patch-Engine<br>
-   Framework: Support for localization (according to UNIX Locale specs)<br>
-   ... and many, many more ...<br>

0.9 beta<br>

-   Storage management in beta state<br>

-   Controllers (Fibre-Channel, SCSI, ATA, FD etc.)<br>
-   Devices / Drives<br>
-   SAN-Pools / RAID-Groups<br>
-   Contact management / Address book for companies, persons and Groups<br>
-   Task management for work orders and checklists<br>
-   Web-Installer<br>

0.9 prebeta<br>

-   Licence management (as Objecttype in CMDB/Other)<br>
-   Network management in beta state (as global category)<br>
-   Rights system - rudimentary handling of rights (without User-interface)<br>
-   my-doit area which will act as personal bookmark manager initially<br>
-   Breadcrumb navigation<br>
-   New objecttype configuration<br>
-   Objecttype "Cellphone"<br>

0.9 PR3<br>

-   Added file management, which includes ...<br>

-   a file manager component with client-independant up-/download<br>
features<br>
-   a global CMDB file category in order to attach / detach a file object<br>
-   a specific CMDB file category. We have implemented versioning features<br>
into this manager.<br>
-   Added power management<br>
-   Added logbook<br>
