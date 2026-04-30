---
search:
  exclude: true
---
# Changelog 1.6.1
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Neue Funktion] CSV Export von Kategorielisten<br>
[Neue Funktion] Anzeige von Wartungsfenstern im Kalender Dashboard Widget<br>
[Verbesserung]  Aktualisierung von Objekten, welche per H-Inventory importiert werden (Anhand Custom-Identifier, Hostname, Seriennummer, Mac- oder IP-Adresse)<br>
[Verbesserung]  Verbesserte Darstellung der my-doit Bookmarks<br>
[Verbesserung]  Api Methode cmdb.objects bekommt neue Rückgabeparameter Erstellungsdatum und Letzte Änderung<br>
[Verbesserung]  Dynamisches Attribut zum anzeigen aller Hostadressen eines Gerätes hinzugefügt<br>
[Verbesserung]  Umbenennung Button "Importieren" beim Active Directory Server Import in "Ergebnisse Laden"<br>
[Verbesserung]  Neue Spalte "Software Art" in der Listenansicht der Kategorie Softwarezuweisung<br>
[Verbesserung]  Möglichkeit zur Bestimmung der Textausrichtung der QR-Codes<br>
[Verbesserung]  Einstellung für die Anzahl der maximal anzuzeigenden Objekttypgruppen für das Hauptmenü<br>
[Verbesserung]  CSV Import mit neuen Optionen: Aufsplittung von Komma-separierten Werten & bessere Referenzierung von Objekten<br>
[Verbesserung]  Modernisierung der grafischen Oberfläche des CSV- und XML Imports<br>
[Verbesserung]  Eigener Menüpunkt "CSV Import" im Bereich der Importe<br>
[Verbesserung]  JDisc: Import der Schnittstelle zwischen Monitor und Gerät<br>
[Verbesserung]  Automatische Netzwahl bei Eingabe einer IP-Adresse in Kategorie Hostadresse<br>
[Verbesserung]  Kategorie Logischer Standort nun konfigurierbar für Übersichtsseite<br>
[Verbesserung]  Möglichkeit zur Abschaltung von QR Codes je Objekttyp<br>
[Verbesserung]  Möglichkeit zum direkten Öffnen von duplizierten Objekten<br>
[Verbesserung]  Kategorie Zugewiesener Arbeitsplatz nun konfigurierbar für  Übersichtsseite<br>
[Verbesserung]  Entfernen der Validierungsoption "Eindeutig (pro Objekt)" bei Single-Value-Kategorien<br>
[Verbesserung]  Löschen-Schaltfläche in Objektbild löscht das Bild umgehend<br>
[Bug]           Fehlermeldung bei Installation einer Subscriptionslizenz unterschiedlich in AdminCenter und Administration-Lizenzinstallation.<br>
[Bug]           Die Massenanlage per Templates bringt Standortrechte durcheinander<br>
[Bug]           Tenant kann auf einer nicht existierenden Datenbank angelegt werden.<br>
[Bug]           Versand von Benachrichtigungen nicht möglich<br>
[Bug]           Verdoppelte Kopfzeile im Hauptbereich des Suchfensters<br>
[Bug]           Rückwärtige Servicezuweisung in Kategorie Nagios (Service) lässt sich nicht löschen<br>
[Bug]           Vordefinierte Gewichtung für Beziehungen wird beim Erstellen von neuen Beziehungen nicht berücksichtigt<br>
[Bug]           Umlaute werden in DialogPlus-Feldern falsch dargestellt<br>
[Bug]           Ansicht der SLA-Kategorie zeigt falsche Checkboxen nach Abbruch der Editierung<br>
[Bug]           Änderungen über die Übersichtsseite erzeugen überflüssige Logbuch-Einträge<br>
[Bug]           Dupliziert man ein CMDB-Explorer Profil fehlt der Knopf um dieses als Standard Profil zu definieren<br>
[Bug]           Import über AD fügt importiertes Objekt selber als Betriebssystem hinzu<br>
[Bug]           Benutzerdefinierte Kategorie wird auf der Übersichtsseite immer an die letzte Stelle geschoben<br>
[Bug]           Objektlisten Konfiguration: Neue Benutzerdefinierte Kategorien werden nicht angeboten. Erst beim erneuten Speichern werden diese angezeigt.<br>
[Bug]           CSV Import bricht mit Fehlermeldung ab<br>
[Bug]           Controller Handler "cleanup_auth" bricht mit Fehlermeldung ab<br>
[Bug]           Ändern von mehreren Standorten in der Listeneditierung nur möglich nach einzelner Änderung<br>
[Bug]           Report-Widget stellt " als &quot; dar<br>
[Bug]           Versionsnummer in Kategorie Betriebssystem wird nicht gespeichert<br>
[Bug]           Listeneditierung ändert nur den Standort des ersten Objekts<br>
[Bug]           Attribut "Gewähltes Objekt (Freigabezugriff) führt dazu, dass der Objekt-Titel in Objekt-Liste nicht dargestellt wird.<br>
[Bug]           Benutzerdefinierte Kategorien müssen ein weiteres Mal abgespeichert werden um in der Listenkonfiguration verfügbar zu sein<br>
[Bug]           OCS Import: Bei SNMP Geräten wird bei der Hostadressen Zuweisung das Supernetz verwendet anstelle des zugewiesen Layer3-Netzes<br>
[Bug]           Rechte werden aufgespalten auf mehrere einzelne Rechte<br>
[Bug]           Fehler beim Aufruf von "Meine Workflows"<br>
[Bug]           OCS Import: Bei SNMP Geräten wird nicht nach Seriennummer überprüft ob ein Gerät bereits existiert<br>
[Bug]           Varianten werden in der Softwarezuweisung bei der Auswahl eines Objekts nicht geladen<br>
[Bug]           Fehler beim Duplizieren von Objekten mit mehreren Kontaktzuweisungen<br>
[Bug]           Standortzuweisungen erzeugen keine Beziehungen<br>
[Bug]           Tabellen in der QR-Code-Beschreibung werden gelöscht<br>
[Bug]           Attribute aus benutzerdef. Kategorien in Objekt-Listen werden in der Bearbeitungsansicht der Objektliste ab dem zweiten Aufruf nicht mehr angezeigt<br>
[Bug]           Verwendung von mehr als einer benutzerdef. Kategorie in Objektliste führt dazu, dass nur die Werte der ersten Kategorie angezeigt werden<br>
[Bug]           Kodierung in exportierten Reports nicht korrekt<br>
[Bug]           Reports aus dem Online Repository werden nicht geladen<br>
[Bug]           Kontaktzuweisung: Beim Auswählen einer Rolle erscheint Fehlermeldung<br>
[Bug]           Datenbankfehler beim Aufruf des Reports "Lizenzschlüssel in Benutzung" aus dem Online Repository<br>
[Bug]           Attribut "Zugeordnete Objekte (Vertrag)" in E-Mail-Vorlagen der Benachrichtigung führt zu Fehlermeldung beim Versand der Nachricht<br>
[Bug]           Nach Beziehungsarten kann nicht gefiltert werden<br>
[Bug]           Limit für Objekttypgruppen aufheben und Menüband besser nutzbar machen<br>
[Bug]           Updates: Hovertext zu PHP-Erweiterungen zeigt Language-Konstanten<br>
[Bug]           Kategorie mit HTML-Feldtyp verliert in der Konfiguration die Felder<br>
[Bug]           Property-Selector stellt unvollständige / verwirrende spezifische Kategorien dar<br>
[Bug]           DNS Domäne wird nicht in der Kategorie selbst gespeichert<br>
[Bug]           Listeneditierung: Anschlüsse die über die Listeneditierung erstellt werden, werden nur in der Kategorie angezeigt aber nicht in der Listeneditierung.<br>
[Bug]           JDisc: Der Algorithmus zur Überprüfung von bestehenden Objekten ist nicht präzise genug.<br>
[Bug]           Fehlerhafte Übersetzung in englisch-sprachigen Reports<br>
[Bug]           JDisc Discovery Log aus der Kategorie "JDisc Discovery" wird beim IE 9 nicht korrekt ausgegeben.<br>
[Bug]           Fehler bei Installation wird in grüner Farbe dargestellt<br>
[Bug]           CMDB-Explorer: Der im als Standard konfigurierte Service-Filter wird beim ersten Aufruf nicht mit geladen<br>
[Bug]           Überarbeitete englische Übersetzung "bequest" in Kategorie "Installation" : Heisst nun "inheritance"<br>
[Bug]           Fehlermeldung beim Aufruf der Kategorie "Computing Resources"<br>
[Bug]           Dialog-Admin: Liste im Navigationsbaum ist nicht richtig sortiert, Knoten sind schlecht benannt<br>
[Bug]           Nagios: Konfiguration unter "Extras" enthält Typo "ecalations"<br>
[Bug]           CMDB-Explorer: Bearbeiten-Funktion wählt automatisch das Standard-Profil<br>
[Bug]           Verwendung der globalen Suche mit weniger als zwei Zeichen gibt keine Eindeutige Information zurück<br>
[Bug]           HTML-Tags werden im WYSIWYG-Editor der QR-Codes teilweise entfernt<br>
[Bug]           "Expand all" im Logbuch wechselt den Expandierungsstatus der Einträge, statt alle zu öffnen<br>
[Bug]           Theme lässt sich über GET Parameter ändern<br>
