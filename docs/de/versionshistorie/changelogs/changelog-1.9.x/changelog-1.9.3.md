# Changelog 1.9.3

[Verbesserung]  Option zum UTF8 dekodieren exportierter Check_MK Dateien
[Verbesserung]  Neue Konfiguration für den Umgang bei Validierungsfehlern während der Duplizierung von Objekten
[Verbesserung]  Verbesserung der Suchindexierung zur Erhöhung der Performance
[Verbesserung]  Neue Systemeinstellung hinzugefügt "Interaktion zwischen 'Logischer Standort' und 'Standort' aktivieren?"
[Verbesserung]  Erweiterung der Kategorie Zertifikat
[Bug]           Stacking: Stacks mit nur einem Mitglied können nicht ausgelesen werden
[Bug]           Objektliste: Das Attribut "Läuft auf" aus der Kategorie "Clusterdienstzuweisung" verursacht eine Fehlermeldung
[Bug]           Datumsfelder können nicht gespeichert werden wenn kein Datumsformat in den Benutzereinstellungen definiert ist
[Bug]           Fehlerhafte Sortierung bei zuweisen von Servern in einem Rack
[Bug]           Überschrift von Datumsfeldern in einer Benutzerdefinierten Kategorie werden bei einem Export nicht korrekt ausgegeben
[Bug]           Lösen des Attributs DNS-Server in der Kategorie Netz führt zu MySQL Syntax error im Objekt Browser
[Bug]           Layer-3 Netz, Statische IP-Addressvergabe inkorrekt wenn ein Reservierter DHCP-Bereich konfiguriert ist
[Bug]           Listen: Archivierte Nutzer werden in Kontaktzuweisungen angezeigt
[Bug]           Sortieren nach Modell in Objektlisten nicht möglich
[Bug]           OCS-Import: Import Abbruch nach ersten nicht validen Objekt
[Bug]           Fehler beim Import via CSV einer IP-Adresse mit führender Nullstelle in beliebigem Oktett
[Bug]           Rechtesystem: Bei den Rechten "Kategorie in Objekt", "- Objekttyp" und "- in Objekten unterhalb eines Standortes" ist die Auswahl für die Kategorien bei Änderung nicht aktiv
[Bug]           Kategorie "LDAP" wird im Menübaum trotz bestehenden Daten als inaktiv dargestellt
[Bug]           Automatisches Löschen des physikalischen Standorts bei Vergabe eines logischen Standorts
[Bug]           Kategorie Buchhaltung: Das ersetzen der Automatischen Inventarnummer bei mehreren Objekttypen wird beim importieren nicht korrekt ausgeführt
[Bug]           Kategorie Clustermitgliedschaften: Wird eine Zuweisung entfernt wird die dazugehörige Beziehung nicht mit entfernt
[Bug]           Admin-Center: Beim hinzufügen eines neuen Mandanten werden Umlaute nicht korrekt dargestellt
[Bug]           Suche findet nach Massenänderung Inhalte aus dem Logbuch
[Bug]           Präfix für automatisch erstellte Kabel wird ignoriert
[Bug]           CSV-Import: Import der Kategorie Kontaktzuweisung erzeugt einen leeren Eintrag wenn dieser in der CSV-Datei nicht gesetzt ist
[Bug]           Validierung: Besteht eine Validierung für die Kategorie Stammdaten (Personen), wirkt diese nur für die Ordnerkategorie Personen
[Bug]           LDAP-Sync setzt alle gefundenen User bei jedem Durchlauf kurzzeitig in den Zustand "Normal"
[Bug]           Fehler beim Verrechten der Kategorie "Gastsysteme"
[Bug]           Verschieben des Objekttyps "Kabel" in eine andere Objekttypgruppe bewirkt, dass Kabel im Kabelbrowser nicht mehr ausgewählt werden können
[Bug]           Import aller Ports über den JDisc-Import, selbst bei konfiguriertem Port Filter
[Bug]           Fehler bei der Verwendung eines Portfilters im JDisc-Profil
[Bug]           Fusszeile des AdminCenters vor und nach dem Login nicht identisch
[Bug]           Kategorie Passwort wird in einem duplizierten Objekt nicht entschlüsselt
[Bug]           Standort von duplizierten Objekten wird nicht korrekt übertragen
[Bug]           WYSIWYG-Funktionen stehen innerhalb der Kategorien nur teilweise zur Verfügung
[Bug]           Benutzerdefinierte Kategorien: Feldtyp "Dateibrowser" funktioniert nicht
[Bug]           Report Manager: Bei bestimmten Zeichenanordnungen innerhalb des Attributes "Standortpfad" kommt es zu keinem Ergebnis
[Bug]           Inkonsistentes Verhalten bei Eingabe und Auswahl und Anzeige von Suchergebnissen
[Bug]           Objektliste: Falsche Zählung von vergebenen IP-Adressen
[Bug]           Verwendung von Inhalten mit [...]LC_[...] nicht möglich
[Bug]           Benachrichtigungen: Lizenzen werden trotz archiviertem oder gelöschtem Lizenzschlüssel in E-Mails angezeigt
[Bug]           Logbuch: Listenansicht zeigt Alarmlevel hoch (3) nicht an
[Bug]           CSV Import: Import per Controller schlägt fehl, wenn MultiValue-Option "comma" verwendet wird
[Bug]           Löschen von geteiltem Dialog+ in benutzerdefinierten Kategorien löscht Einträge für alle anderen Kategorien
[Bug]           Backslash aus Objekttiteln wird oft falsch ausgegeben
[Bug]           Objektliste: Fehler beim Sortieren des Attributs "Kategorie"
[Bug]           Beim Aufruf von Extras > CMDB > Import erscheint eine Fehlermeldung
[Bug]           Report Manager erzeugt falsche Abfragen zu Objektbeziehungen
[Bug]           Objekt-Browser öffnet unter bestimmten Voraussetzungen einen inaktiven Tab
[Bug]           Verwendung von bestehenden Kabeln im Verkabelungsimport nicht möglich
[Bug]           Fehler bei Herunterladen von Online Reports auf mehreren Mandanten
[Bug]           Format von Beschreibungen wird trotz WYSIWYG-Editor nicht gespeichert
[Bug]           Listeneditierung - Kategorie "Port": Kabel-ID kann nicht geändert werden
[Bug]           Leerauswahl der HE in einem Schrank über Standort nicht möglich
[Bug]           Fehlerhafte Kontaktzuweisungsmaske nach Klick auf Übernehmen
[Bug]           Bearbeiten der Kategorie Hostadresse aufgrund von Meldung zur IP-Adresse nicht möglich
[Bug]           Validierung: Doppelte Inventarnummer nach Duplizierung eines Objektes
[Bug]           Feldtyp in benutzerdefinierten Kategorien für Verknüpfungen mit mehreren Objekten wird beim xml-export nicht korrekt übernommen
[Bug]           Icon zur Visualisierung des Ping-Status in IP-Liste in Spalte "Objekt" verschoben
[Bug]           Kategorie DBMS-Zugeordnete Cluster hat keine Button und keine Attribut-Liste
[Bug]           Notizen verlieren Formatierung beim Bearbeiten
[Bug]           Matching von Systemdiensten beim JDisc-Import funktioniert nicht
[Bug]           Logischer Standort wird nicht in Objektliste angezeigt, wenn die Auswahl nicht aus dem Objekttyp "Personen" stammt
[Bug]           CSV Import: Import von Datumswerten in benutzerdefinierten Kategorien wird immer mit Uhrzeit ausgegeben
[Bug]           Logbuch-Konfiguration: Doppelte Einstellung "Maximalanzahl kombinierter Änderungen (pro Kategorie)" entfernt
[Bug]           Highlighting von gefundenen Suchbegriffen funktioniert in Beschreibungsfeldern nicht
[Bug]           Eigene Sprachkonstanten werden nicht überall übernommen
[Bug]           Datum der Anschaffung ohne Uhrzeit in Listen anzeigen
[Bug]           Event-Log zeigt nicht das jeweils verwendete sondern das aktuelle Kommando
[Bug]           Ressourcen in Clustervitalität zeigen falsche Werte an
[Bug]           Dialog-Admin: Die Spalte "Löschbar" für benutzerdefinierte "Dialog+"-Felder entfernt
[Bug]           Kategorie Beziehungen: Beim erstellen einer Expliziten Beziehung wird die Richtung zwischen Master und Slave Objekt nicht berücksichtigt