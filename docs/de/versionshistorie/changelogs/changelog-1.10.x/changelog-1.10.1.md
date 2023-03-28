# Changelog 1.10.1

[Verbesserung]  Neue Attribute in Kategorie "Check_MK (Host) > Export Parameter"
[Verbesserung]  Gesamtkapazität von Festplatten im Report Manager
[Verbesserung]  Listenansicht mit mehr als zehn Spalten
[Verbesserung]  Weitere Platzhalter für Benachrichtigungen: Modell und Hersteller
[Verbesserung]  JDISC Import von Software: Optional Software Family anstatt Software Version für Objekttitel verwenden
[Verbesserung]  IP-Listen lassen sich markieren und kopieren
[Verbesserung]  Oberfläche der Kategorie Vertragszuweisung aktualisieren
[Verbesserung]  JDisc Import: Import des Attributes SNMP Syslocation in die Standort Kategorie
[Verbesserung]  Die Fuzzy-Suggestion ist nun konfigurierbar
[Verbesserung]  Validierung der Benutzereinstellungen
[Verbesserung]  Rack: Objektlink für unpositionierte Objekte
[Verbesserung]  Benutzerdefinierte Spaltenbreite für Tabellen
[Verbesserung]  Templates: Keine Vorsortierung bei anlegen eines Objektes mit gewähltem Objekttypen
[Verbesserung]  Warnhinweis zum aktualisieren der Konfiguration der Objektliste abändern
[Verbesserung]  Suche: Verwenden der Suche mit weniger als drei Zeichen nicht möglich
[Verbesserung]  Unterstützung von Expliziten Beziehungen bei Benutzerdefinierten Kategorien für den Felttyp Beziehungs-Browser
[Verbesserung]  GUI Komponente zum auswählen von Intervallen
[Verbesserung]  Konfiguration von Objekten als "positionierbar im Schrank" für neue Installationen/Mandanten
[Verbesserung]  JDISC: Feld mit Bezeichnung für verschiedene Standorte aus JDISC
[Verbesserung]  Export des CMDB-Explorers nach PNG oder JPG
[Verbesserung]  CMDB-Explorer: Legende zeigt nur Typen, welche auch Objekte beinhalten
[Änderung]      Smarty Cache-Daten in den i-doit Cache Ordner speichern
[Änderung]      Veraltete Dateien und Verzeichnisse entfernt
[Bug]           Aufruf der neuen Console aus anderen Verzeichnissen
[Bug]           Standortänderungen werden nicht an die Chassiübersicht übergeben
[Bug]           Sprachkonstanten werden in der I-Doit Open angezeigt
[Bug]           Reports werden in Benutzerdefinierte Kategorien aufgerufen wenn mindestens ein Objekt-Browser Typ konfiguriert ist
[Bug]           Platzhalter "Modell" und "Service Tag" aus Kategorie "Modell" fehlen beim QR-Code-Reader
[Bug]           Duplizieren berücksichtigt selbst bei expliziter Auswahl nicht die Kontaktzuweisung
[Bug]           Attribute der Kategorie "Lokaler Massenspeicher" kann auf der Übersichtssseite nicht angezeigt werden
[Bug]           Beim Aufruf einer Monitoring-Konfiguration wird die Auswahl "Aktiv" im Standard immer auf Ja gesetzt
[Bug]           Beim duplizieren werden Kategorien dupliziert die nicht angehakt wurden (bei Chassis?)
[Bug]           CSV-Export von Werten mit Einheiten aus Objektlisten heraus erzeugt falsche Ausgabe
[Bug]           In Kategorie "Betriebssystem" lassen sich Attribute "Variante" und "Versionsnummer" nicht in Listen einblenden
[Bug]           Import von XML-Dateien nicht möglich
[Bug]           JDisc-Import weist Clustermitgliedschaften erst zu und löscht diese dann
[Bug]           Bug beim Import via Console mit JDisc-Import
[Bug]           Beschreibungstext einer Personengruppe wird nicht auf der Übersichtsseite angezeigt
[Bug]           Rückgabewert für attach_person via API
[Bug]           API: C__CATG__IMAGE: image_selection besitzt falschen Datentyp
[Bug]           Setzen einer ungültigen CMDB-Status-Konstante führt zur vermeintlichen Löschung des Objektes
[Bug]           XML-Import per Console funktioniert nicht
[Bug]           Bearbeiten der Softwarezuweisung über die Listeneditierung löscht Informationen der Kategorie "Betriebssystem"
[Bug]           API: cmdb.category.read liest nur den ersten Wert bei benutzerdefinierten Mehrfach-Dialog-Feldern
[Bug]           Livestatus führt zu langen Wartezeiten in Objektlisten
[Bug]           API: Logs werden auch mit deaktivierter Option geschrieben
[Bug]           API: Änderungen der Kategorie Hostadresse nicht möglich
[Bug]           API: Das Feld LDAP-DN kann nicht gespeichert werden
[Bug]           API: Falscher DatenTyp (C__CATG__IMAGE/image)
[Bug]           API: Purge request meldet Database error
[Bug]           API: Setzen einer ungültigen CMDB-Status-Konstante führt zur vermeintlichen Löschung des Objektes
[Bug]           Apache-Konfiguration in [I-DOIT]/.htaccess greift nicht für Version 2.4
[Bug]           CMDB Explorer: Export von SVG funktioniert nur mit Firefox
[Bug]           Dialog-Admin: Benutzerdefinierte Dialoge tauchen mehrfach auf
[Bug]           Fehlerhafte Ausgabe bei Console ldap-sync
[Bug]           Variabler Report auf Dashboard erzeugt Fehler
[Bug]           Fehler beim Aufruf der Console: Column 'isys_obj__id' in where clause is ambiguous
[Bug]           Feld "Tags" steht im Report-Manager nicht zur Verfügung
[Bug]           Archivieren/Löschen einer Softwarezuweisung aus der Kategorie "Installation" lässt eine Beziehung im Zustand "Normal" zurück
[Bug]           Kategorie "Hostadresse" erzeugt unfertigen Eintrag, wenn diese auf der Übersichtsseite verwendet wird
[Bug]           Listen: Sortieren nach Spalte Bereiche in Netzbereichen nicht möglich
[Bug]           Datenbankfehler bei der Installation einer Lizenz innerhalb eines Mandanten
[Bug]           Seitennavigation wechselt teilweise auch die Zustandsansicht
[Bug]           Bearbeiten der Kategorie "Passwörter" über die Listeneditierung speichert das Passwort auch verschlüsselt auf der Oberfläche
[Bug]           Löschen einer größeren Anzahl (>500) von Objekten nicht möglich
[Bug]           Vertragszuweisung: Datum wird im Feld Kundennummer angezeigt
[Bug]           Listeneditierung: Spezifische Kategorie Schrank fehlt
[Bug]           JDisc: Standardtemplate wird bei Import nicht vollständig angewandt
[Bug]           Report Manager: Fehlende Attribut Layer-2 Netzzuordnung
[Bug]           Falsche Zuweisung von JDisc Informationen bei VMware Cluster-Diensten
[Bug]           Dialog-Feld des Attributs "Service-Kategorie" kann nicht im Dialog-Admin bearbeitet werden.
[Bug]           JDisc: Discovery verwendet Hostnamen anstatt FQDN
[Bug]           Import des Garantiezeitraums über CSV nicht möglich
[Bug]           PHP 7.1: Fehler im Reportmanager
[Bug]           Auswahl der Rechte für einzelne Controller Handler nicht möglich
[Bug]           Mehrfacher Klick auf die Buttons zum Archivieren/Löschen erlaubt das Überspringen von Zuständen
[Bug]           Validierungsfehlermeldung nach Eingabe des ersten Eintrags der Kategorie Datenbankzuweisung
[Bug]           OCS-Import des Attributs "Domäne" ist nicht möglich
[Bug]           Einige Dialog- und Dialog-Plus-Felder bieten auch archivierte/gelöschte Objekte zur Auswahl an
[Bug]           Standorte: Sortierung nicht korrekt wenn der Pfad zu lang ist
[Bug]           Reports: Attribut Zustand unvollständig
[Bug]           Sortierung nach Datum in Multi-Value inkorrekt
[Bug]           Templates: Keine Sortierung ersichtlich, möglich
[Bug]           Logbuch: Änderungen der Chassiposition etc. am Gerät wird nicht im Logbuch eingetragen
[Bug]           Duplizierte Chassis werden Chassiinhalte mit dupliziert
[Bug]           Variable %OBJID% nimmt letztes erstelltes Objekt als ID
[Bug]           Report Manager: Report "Logbook" aus Online Repository zeigt Objektname bei "C__LOGBOOK_EVENT__OBJECT_PURGED" in Spalte "Category"
[Bug]           Falsche Darstellung von Rechten in Kategorie "Rechtevergabe"
[Bug]           Identischer Name unterschiedlicher Kategorien (Servicezuweisung)
[Bug]           Widget "Meine geänderten Objekte" baut inkorrekten Link bei Verwendung eines Proxys auf
[Bug]           JDisc-Import löst Layer-2-Netzzzuweisung zu Ports
[Bug]           Kategorie "Datenbankzuweisung" nicht fett hervorgehoben, wenn Einträge enthalten
[Bug]           Fehlerhafte Sortierung nach ObjID anstatt nach dem angezeigten Text
[Bug]           Umlaute werden in der Lizenzübersicht nicht korrekt dargestellt
[Bug]           Beim Duplizieren eines Objektes wird das Options-Fenster nicht geschlossen
[Bug]           Mit CMDB-Explorer kann man in Chrome keine SVG-Grafik exportieren
[Bug]           Auswahl mehrerer Objekte über Checkboxen in i-doit open möglich
[Bug]           JDISC: Import überschreibt den Formfaktor von Objekten
[Bug]           Breite Spalten in der Kategorie Kontaktzuweisung verschieben die Informationen aus dem angezeigten Bereich
[Bug]           Listeneditierung löscht Verbindung mit Anschluss wenn das Interface bearbeitet wird
