---
search:
  exclude: true
---
# Changelog 1.9.3
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Verbesserung]  Option zum UTF8 dekodieren exportierter Check_MK Dateien<br>
[Verbesserung]  Neue Konfiguration für den Umgang bei Validierungsfehlern während der Duplizierung von Objekten<br>
[Verbesserung]  Verbesserung der Suchindexierung zur Erhöhung der Performance<br>
[Verbesserung]  Neue Systemeinstellung hinzugefügt "Interaktion zwischen 'Logischer Standort' und 'Standort' aktivieren?"<br>
[Verbesserung]  Erweiterung der Kategorie Zertifikat<br>
[Bug]           Stacking: Stacks mit nur einem Mitglied können nicht ausgelesen werden<br>
[Bug]           Objektliste: Das Attribut "Läuft auf" aus der Kategorie "Clusterdienstzuweisung" verursacht eine Fehlermeldung<br>
[Bug]           Datumsfelder können nicht gespeichert werden wenn kein Datumsformat in den Benutzereinstellungen definiert ist<br>
[Bug]           Fehlerhafte Sortierung bei zuweisen von Servern in einem Rack<br>
[Bug]           Überschrift von Datumsfeldern in einer Benutzerdefinierten Kategorie werden bei einem Export nicht korrekt ausgegeben<br>
[Bug]           Lösen des Attributs DNS-Server in der Kategorie Netz führt zu MySQL Syntax error im Objekt Browser<br>
[Bug]           Layer-3 Netz, Statische IP-Addressvergabe inkorrekt wenn ein Reservierter DHCP-Bereich konfiguriert ist<br>
[Bug]           Listen: Archivierte Nutzer werden in Kontaktzuweisungen angezeigt<br>
[Bug]           Sortieren nach Modell in Objektlisten nicht möglich<br>
[Bug]           OCS-Import: Import Abbruch nach ersten nicht validen Objekt<br>
[Bug]           Fehler beim Import via CSV einer IP-Adresse mit führender Nullstelle in beliebigem Oktett<br>
[Bug]           Rechtesystem: Bei den Rechten "Kategorie in Objekt", "- Objekttyp" und "- in Objekten unterhalb eines Standortes" ist die Auswahl für die Kategorien bei Änderung nicht aktiv<br>
[Bug]           Kategorie "LDAP" wird im Menübaum trotz bestehenden Daten als inaktiv dargestellt<br>
[Bug]           Automatisches Löschen des physikalischen Standorts bei Vergabe eines logischen Standorts<br>
[Bug]           Kategorie Buchhaltung: Das ersetzen der Automatischen Inventarnummer bei mehreren Objekttypen wird beim importieren nicht korrekt ausgeführt<br>
[Bug]           Kategorie Clustermitgliedschaften: Wird eine Zuweisung entfernt wird die dazugehörige Beziehung nicht mit entfernt<br>
[Bug]           Admin-Center: Beim hinzufügen eines neuen Mandanten werden Umlaute nicht korrekt dargestellt<br>
[Bug]           Suche findet nach Massenänderung Inhalte aus dem Logbuch<br>
[Bug]           Präfix für automatisch erstellte Kabel wird ignoriert<br>
[Bug]           CSV-Import: Import der Kategorie Kontaktzuweisung erzeugt einen leeren Eintrag wenn dieser in der CSV-Datei nicht gesetzt ist<br>
[Bug]           Validierung: Besteht eine Validierung für die Kategorie Stammdaten (Personen), wirkt diese nur für die Ordnerkategorie Personen<br>
[Bug]           LDAP-Sync setzt alle gefundenen User bei jedem Durchlauf kurzzeitig in den Zustand "Normal"<br>
[Bug]           Fehler beim Verrechten der Kategorie "Gastsysteme"<br>
[Bug]           Verschieben des Objekttyps "Kabel" in eine andere Objekttypgruppe bewirkt, dass Kabel im Kabelbrowser nicht mehr ausgewählt werden können<br>
[Bug]           Import aller Ports über den JDisc-Import, selbst bei konfiguriertem Port Filter<br>
[Bug]           Fehler bei der Verwendung eines Portfilters im JDisc-Profil<br>
[Bug]           Fusszeile des AdminCenters vor und nach dem Login nicht identisch<br>
[Bug]           Kategorie Passwort wird in einem duplizierten Objekt nicht entschlüsselt<br>
[Bug]           Standort von duplizierten Objekten wird nicht korrekt übertragen<br>
[Bug]           WYSIWYG-Funktionen stehen innerhalb der Kategorien nur teilweise zur Verfügung<br>
[Bug]           Benutzerdefinierte Kategorien: Feldtyp "Dateibrowser" funktioniert nicht<br>
[Bug]           Report Manager: Bei bestimmten Zeichenanordnungen innerhalb des Attributes "Standortpfad" kommt es zu keinem Ergebnis<br>
[Bug]           Inkonsistentes Verhalten bei Eingabe und Auswahl und Anzeige von Suchergebnissen<br>
[Bug]           Objektliste: Falsche Zählung von vergebenen IP-Adressen<br>
[Bug]           Verwendung von Inhalten mit [...]LC_[...] nicht möglich<br>
[Bug]           Benachrichtigungen: Lizenzen werden trotz archiviertem oder gelöschtem Lizenzschlüssel in E-Mails angezeigt<br>
[Bug]           Logbuch: Listenansicht zeigt Alarmlevel hoch (3) nicht an<br>
[Bug]           CSV Import: Import per Controller schlägt fehl, wenn MultiValue-Option "comma" verwendet wird<br>
[Bug]           Löschen von geteiltem Dialog+ in benutzerdefinierten Kategorien löscht Einträge für alle anderen Kategorien<br>
[Bug]           Backslash aus Objekttiteln wird oft falsch ausgegeben<br>
[Bug]           Objektliste: Fehler beim Sortieren des Attributs "Kategorie"<br>
[Bug]           Beim Aufruf von Extras > CMDB > Import erscheint eine Fehlermeldung<br>
[Bug]           Report Manager erzeugt falsche Abfragen zu Objektbeziehungen<br>
[Bug]           Objekt-Browser öffnet unter bestimmten Voraussetzungen einen inaktiven Tab<br>
[Bug]           Verwendung von bestehenden Kabeln im Verkabelungsimport nicht möglich<br>
[Bug]           Fehler bei Herunterladen von Online Reports auf mehreren Mandanten<br>
[Bug]           Format von Beschreibungen wird trotz WYSIWYG-Editor nicht gespeichert<br>
[Bug]           Listeneditierung - Kategorie "Port": Kabel-ID kann nicht geändert werden<br>
[Bug]           Leerauswahl der HE in einem Schrank über Standort nicht möglich<br>
[Bug]           Fehlerhafte Kontaktzuweisungsmaske nach Klick auf Übernehmen<br>
[Bug]           Bearbeiten der Kategorie Hostadresse aufgrund von Meldung zur IP-Adresse nicht möglich<br>
[Bug]           Validierung: Doppelte Inventarnummer nach Duplizierung eines Objektes<br>
[Bug]           Feldtyp in benutzerdefinierten Kategorien für Verknüpfungen mit mehreren Objekten wird beim xml-export nicht korrekt übernommen<br>
[Bug]           Icon zur Visualisierung des Ping-Status in IP-Liste in Spalte "Objekt" verschoben<br>
[Bug]           Kategorie DBMS-Zugeordnete Cluster hat keine Button und keine Attribut-Liste<br>
[Bug]           Notizen verlieren Formatierung beim Bearbeiten<br>
[Bug]           Matching von Systemdiensten beim JDisc-Import funktioniert nicht<br>
[Bug]           Logischer Standort wird nicht in Objektliste angezeigt, wenn die Auswahl nicht aus dem Objekttyp "Personen" stammt<br>
[Bug]           CSV Import: Import von Datumswerten in benutzerdefinierten Kategorien wird immer mit Uhrzeit ausgegeben<br>
[Bug]           Logbuch-Konfiguration: Doppelte Einstellung "Maximalanzahl kombinierter Änderungen (pro Kategorie)" entfernt<br>
[Bug]           Highlighting von gefundenen Suchbegriffen funktioniert in Beschreibungsfeldern nicht<br>
[Bug]           Eigene Sprachkonstanten werden nicht überall übernommen<br>
[Bug]           Datum der Anschaffung ohne Uhrzeit in Listen anzeigen<br>
[Bug]           Event-Log zeigt nicht das jeweils verwendete sondern das aktuelle Kommando<br>
[Bug]           Ressourcen in Clustervitalität zeigen falsche Werte an<br>
[Bug]           Dialog-Admin: Die Spalte "Löschbar" für benutzerdefinierte "Dialog+"-Felder entfernt<br>
[Bug]           Kategorie Beziehungen: Beim erstellen einer Expliziten Beziehung wird die Richtung zwischen Master und Slave Objekt nicht berücksichtigt<br>
