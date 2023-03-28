# Changelog 1.10.1

[Verbesserung]  Neue Attribute in Kategorie "Check_MK (Host) > Export Parameter"  <br>
[Verbesserung]  Gesamtkapazität von Festplatten im Report Manager  <br>
[Verbesserung]  Listenansicht mit mehr als zehn Spalten  <br>
[Verbesserung]  Weitere Platzhalter für Benachrichtigungen: Modell und Hersteller  <br>
[Verbesserung]  JDISC Import von Software: Optional Software Family anstatt Software Version für Objekttitel verwenden  <br>
[Verbesserung]  IP-Listen lassen sich markieren und kopieren  <br>
[Verbesserung]  Oberfläche der Kategorie Vertragszuweisung aktualisieren  <br>
[Verbesserung]  JDisc Import: Import des Attributes SNMP Syslocation in die Standort Kategorie  <br>
[Verbesserung]  Die Fuzzy-Suggestion ist nun konfigurierbar  <br>
[Verbesserung]  Validierung der Benutzereinstellungen  <br>
[Verbesserung]  Rack: Objektlink für unpositionierte Objekte  <br>
[Verbesserung]  Benutzerdefinierte Spaltenbreite für Tabellen  <br>
[Verbesserung]  Templates: Keine Vorsortierung bei anlegen eines Objektes mit gewähltem Objekttypen  <br>
[Verbesserung]  Warnhinweis zum aktualisieren der Konfiguration der Objektliste abändern  <br>
[Verbesserung]  Suche: Verwenden der Suche mit weniger als drei Zeichen nicht möglich  <br>
[Verbesserung]  Unterstützung von Expliziten Beziehungen bei Benutzerdefinierten Kategorien für den Felttyp Beziehungs-Browser  <br>
[Verbesserung]  GUI Komponente zum auswählen von Intervallen  <br>
[Verbesserung]  Konfiguration von Objekten als "positionierbar im Schrank" für neue Installationen/Mandanten  <br>
[Verbesserung]  JDISC: Feld mit Bezeichnung für verschiedene Standorte aus JDISC  <br>
[Verbesserung]  Export des CMDB-Explorers nach PNG oder JPG  <br>
[Verbesserung]  CMDB-Explorer: Legende zeigt nur Typen, welche auch Objekte beinhalten  <br>
[Änderung]      Smarty Cache-Daten in den i-doit Cache Ordner speichern  <br>
[Änderung]      Veraltete Dateien und Verzeichnisse entfernt  <br>
[Bug]           Aufruf der neuen Console aus anderen Verzeichnissen  <br>
[Bug]           Standortänderungen werden nicht an die Chassiübersicht übergeben  <br>
[Bug]           Sprachkonstanten werden in der I-Doit Open angezeigt  <br>
[Bug]           Reports werden in Benutzerdefinierte Kategorien aufgerufen wenn mindestens ein Objekt-Browser Typ konfiguriert ist  <br>
[Bug]           Platzhalter "Modell" und "Service Tag" aus Kategorie "Modell" fehlen beim QR-Code-Reader  <br>
[Bug]           Duplizieren berücksichtigt selbst bei expliziter Auswahl nicht die Kontaktzuweisung  <br>
[Bug]           Attribute der Kategorie "Lokaler Massenspeicher" kann auf der Übersichtssseite nicht angezeigt werden  <br>
[Bug]           Beim Aufruf einer Monitoring-Konfiguration wird die Auswahl "Aktiv" im Standard immer auf Ja gesetzt  <br>
[Bug]           Beim duplizieren werden Kategorien dupliziert die nicht angehakt wurden (bei Chassis?)  <br>
[Bug]           CSV-Export von Werten mit Einheiten aus Objektlisten heraus erzeugt falsche Ausgabe  <br>
[Bug]           In Kategorie "Betriebssystem" lassen sich Attribute "Variante" und "Versionsnummer" nicht in Listen einblenden  <br>
[Bug]           Import von XML-Dateien nicht möglich  <br>
[Bug]           JDisc-Import weist Clustermitgliedschaften erst zu und löscht diese dann  <br>
[Bug]           Bug beim Import via Console mit JDisc-Import  <br>
[Bug]           Beschreibungstext einer Personengruppe wird nicht auf der Übersichtsseite angezeigt  <br>
[Bug]           Rückgabewert für attach_person via API  <br>
[Bug]           API: C__CATG__IMAGE: image_selection besitzt falschen Datentyp  <br>
[Bug]           Setzen einer ungültigen CMDB-Status-Konstante führt zur vermeintlichen Löschung des Objektes  <br>
[Bug]           XML-Import per Console funktioniert nicht  <br>
[Bug]           Bearbeiten der Softwarezuweisung über die Listeneditierung löscht Informationen der Kategorie "Betriebssystem"  <br>
[Bug]           API: cmdb.category.read liest nur den ersten Wert bei benutzerdefinierten Mehrfach-Dialog-Feldern  <br>
[Bug]           Livestatus führt zu langen Wartezeiten in Objektlisten  <br>
[Bug]           API: Logs werden auch mit deaktivierter Option geschrieben  <br>
[Bug]           API: Änderungen der Kategorie Hostadresse nicht möglich  <br>
[Bug]           API: Das Feld LDAP-DN kann nicht gespeichert werden  <br>
[Bug]           API: Falscher DatenTyp (C__CATG__IMAGE/image)  <br>
[Bug]           API: Purge request meldet Database error  <br>
[Bug]           API: Setzen einer ungültigen CMDB-Status-Konstante führt zur vermeintlichen Löschung des Objektes  <br>
[Bug]           Apache-Konfiguration in [I-DOIT]/.htaccess greift nicht für Version 2.4  <br>
[Bug]           CMDB Explorer: Export von SVG funktioniert nur mit Firefox  <br>
[Bug]           Dialog-Admin: Benutzerdefinierte Dialoge tauchen mehrfach auf  <br>
[Bug]           Fehlerhafte Ausgabe bei Console ldap-sync  <br>
[Bug]           Variabler Report auf Dashboard erzeugt Fehler  <br>
[Bug]           Fehler beim Aufruf der Console: Column 'isys_obj__id' in where clause is ambiguous  <br>
[Bug]           Feld "Tags" steht im Report-Manager nicht zur Verfügung  <br>
[Bug]           Archivieren/Löschen einer Softwarezuweisung aus der Kategorie "Installation" lässt eine Beziehung im Zustand "Normal" zurück  <br>
[Bug]           Kategorie "Hostadresse" erzeugt unfertigen Eintrag, wenn diese auf der Übersichtsseite verwendet wird  <br>
[Bug]           Listen: Sortieren nach Spalte Bereiche in Netzbereichen nicht möglich  <br>
[Bug]           Datenbankfehler bei der Installation einer Lizenz innerhalb eines Mandanten  <br>
[Bug]           Seitennavigation wechselt teilweise auch die Zustandsansicht  <br>
[Bug]           Bearbeiten der Kategorie "Passwörter" über die Listeneditierung speichert das Passwort auch verschlüsselt auf der Oberfläche  <br>
[Bug]           Löschen einer größeren Anzahl (>500) von Objekten nicht möglich  <br>
[Bug]           Vertragszuweisung: Datum wird im Feld Kundennummer angezeigt  <br>
[Bug]           Listeneditierung: Spezifische Kategorie Schrank fehlt  <br>
[Bug]           JDisc: Standardtemplate wird bei Import nicht vollständig angewandt  <br>
[Bug]           Report Manager: Fehlende Attribut Layer-2 Netzzuordnung  <br>
[Bug]           Falsche Zuweisung von JDisc Informationen bei VMware Cluster-Diensten  <br>
[Bug]           Dialog-Feld des Attributs "Service-Kategorie" kann nicht im Dialog-Admin bearbeitet werden.  <br>
[Bug]           JDisc: Discovery verwendet Hostnamen anstatt FQDN  <br>
[Bug]           Import des Garantiezeitraums über CSV nicht möglich  <br>
[Bug]           PHP 7.1: Fehler im Reportmanager  <br>
[Bug]           Auswahl der Rechte für einzelne Controller Handler nicht möglich  <br>
[Bug]           Mehrfacher Klick auf die Buttons zum Archivieren/Löschen erlaubt das Überspringen von Zuständen  <br>
[Bug]           Validierungsfehlermeldung nach Eingabe des ersten Eintrags der Kategorie Datenbankzuweisung  <br>
[Bug]           OCS-Import des Attributs "Domäne" ist nicht möglich  <br>
[Bug]           Einige Dialog- und Dialog-Plus-Felder bieten auch archivierte/gelöschte Objekte zur Auswahl an  <br>
[Bug]           Standorte: Sortierung nicht korrekt wenn der Pfad zu lang ist  <br>
[Bug]           Reports: Attribut Zustand unvollständig  <br>
[Bug]           Sortierung nach Datum in Multi-Value inkorrekt  <br>
[Bug]           Templates: Keine Sortierung ersichtlich, möglich  <br>
[Bug]           Logbuch: Änderungen der Chassiposition etc. am Gerät wird nicht im Logbuch eingetragen  <br>
[Bug]           Duplizierte Chassis werden Chassiinhalte mit dupliziert  <br>
[Bug]           Variable %OBJID% nimmt letztes erstelltes Objekt als ID  <br>
[Bug]           Report Manager: Report "Logbook" aus Online Repository zeigt Objektname bei "C__LOGBOOK_EVENT__OBJECT_PURGED" in Spalte "Category"  <br>
[Bug]           Falsche Darstellung von Rechten in Kategorie "Rechtevergabe"  <br>
[Bug]           Identischer Name unterschiedlicher Kategorien (Servicezuweisung)  <br>
[Bug]           Widget "Meine geänderten Objekte" baut inkorrekten Link bei Verwendung eines Proxys auf  <br>
[Bug]           JDisc-Import löst Layer-2-Netzzzuweisung zu Ports  <br>
[Bug]           Kategorie "Datenbankzuweisung" nicht fett hervorgehoben, wenn Einträge enthalten  <br>
[Bug]           Fehlerhafte Sortierung nach ObjID anstatt nach dem angezeigten Text  <br>
[Bug]           Umlaute werden in der Lizenzübersicht nicht korrekt dargestellt  <br>
[Bug]           Beim Duplizieren eines Objektes wird das Options-Fenster nicht geschlossen  <br>
[Bug]           Mit CMDB-Explorer kann man in Chrome keine SVG-Grafik exportieren  <br>
[Bug]           Auswahl mehrerer Objekte über Checkboxen in i-doit open möglich  <br>
[Bug]           JDISC: Import überschreibt den Formfaktor von Objekten  <br>
[Bug]           Breite Spalten in der Kategorie Kontaktzuweisung verschieben die Informationen aus dem angezeigten Bereich  <br>
[Bug]           Listeneditierung löscht Verbindung mit Anschluss wenn das Interface bearbeitet wird  <br>
