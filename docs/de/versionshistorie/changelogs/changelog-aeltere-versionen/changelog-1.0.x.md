# Changelog 1.0.X

1.0.2
[Bugfix] - Innerer Content Bereich ist nicht 100% breit im Firefox - Siehe letzten Kommentar
 [Bugfix] - [TTS-Modul] Kommunikation via TLS (https) nicht möglich
 [Bugfix] - [Import] Blacklisting von Kategorien ist nicht aktiv.
 [Bugfix] - Platzhalter im Template-System werden zu früh ersetzt
 [Bugfix] - Softwarebezeichnung im (Software) Objekt-Browser
 [Bugfix] - Verwaltung->Benutzereinstellungen->Objekt-Listen: Editieren-Button fehlt.
 [Bugfix] - IT Grundschutz Baustein lässt sich nicht zuordnen
 [Bugfix] - Rückwärtige Kontaktzuweisung klappt nicht mit eigenen Objekt-Typ-Gruppen
 [Bugfix] - [Suche] Bug durch ungefiltertes Regex...?
 [Bugfix] - Clustervitalität wird nicht richtig angezeigt
 [Bugfix] - Kapazität mit . als Dezimaltrennzeichen wird teilweise falsch berechnet
 [Bugfix] - Dateiversionen werden mit Status 1 (neu)
 [Bugfix] - Breadcrumb: Markiert man ein Objekt in einer Objektliste und klickt auf Editieren, aktualisiert sich die Breadcrumb nicht.
 [Bugfix] - Funktion "unfertige/archivierte/gelöschte Objekte entfernen" aufsplitten (siehe Beschreibung)
 [Bugfix] - [Standort] Wird via Listeneditierung ein Objekt einem Schrank zugewiesen, erkennt der Schrank dieses als eingeschoben
 [Bugfix] - JDisc-Konfiguration: leeres Passwort verursacht keine Fehlermeldung
 [Bugfix] - Admin und Admingruppe als "unlöschbar" definieren
 [Bugfix] - Bei der Verknüpfung von RT und i-doit auf der gleichen Maschine meldet i-doit alle Benutzer ab, wenn im RT ein Ticket mit einem referenzierten Objekt aus i-doit geöffnet wird.
 [Bugfix] - API: Standort von Objekten mit ausgeben
 [Bugfix] - Lizenz-Migration: Beschreibungsfeld wird nicht übernommen
 [Bugfix] - CATG: Netzwerk > Interface: Template wirfd nicht geladen
 [Bugfix] - Objektliste Raum: Die Raumnummer 1.3 wird als 1 angezeigt. Es wird anscheinend am Punkt abgeschnitten
 [Bugfix] - Listenansicht editieren. Das "Sortieren nach" kann nicht abgespeichert werden
 [Bugfix] - Währung: Es wird immer Pfund angezeigt, obwohl der Euro eingestellt ist. Eine Eigene Währung im Format "Euro;¤" ist nicht nutzbar und das Eurozeichen wird als "?" angezeigt
 [Bugfix] - Wenn der Name eines Objektes über die Übersichtsseite geändert wird, ist dies nicht im Logbuch verzeichnet
 [Bugfix] - Ist in der Kategorie Modell eine Beschreibung eingetragen, kann diese nicht über die Übersichtsseite geändert/gelöscht werden
 [Bugfix] - CPU-Frequenz: Es wird kein Komma mehr unterstützt, was zu einer Fehlermeldung führt
 [Bugfix] - Wird ein Filter im Logbuch verwendet und auf die nächste Seite gewechselt, wird der Filter zurückgesetzt
 [Bugfix] - Schrankansicht: Bei geringerer Auflösung hat man mehrere Scrollbalken, was dazu führt, dass man die Funktionen so gut wie gar nicht mehr nutzen kann
 [Bugfix] - Listenansicht editieren: Die Kontaktzuweisung funktioniert nicht richtig. Person ist immer leer (übrigens steht "Person" in der Kategorie Kontaktzuweisung beim Abfrageeditor im Reporting nichtmals zu Auswahl). Die anderen Felder gehen zwar, bringen aber nicht viel.
 [Bugfix] - Listenansicht editieren: Beim zugewiesenen Arbeitsplatz werden die Attribute doppelt angezeigt
 [Bugfix] - Dialog-Admin: Der Vertragsstatus ist nicht auffindbar. Durch eine unsinnige Sortierung ist die Suche auch sehr schwer.
 [Bugfix] - Beim Abfrageeditor für das Reporting steht unter Speicher die Bezeichnung zwei mal zur Auswahl
 [Bugfix] - Eigene Reports: Die nur für sich selber sichtbaren haben eine Sprachkonstante "LC_REPORT_LIST_ONLY_YOU"
 [Bugfix] - [NO FIX] Abfrageeditor: Suche nach <4GB Speicher geht die einzelnen Riegel durch und nicht den gesamten Speicher (2x4GB sind nach dem Report <5GB Speicher)
 [Bugfix] - Übersichtsseite einer Organisation: In der Organisation wird etwas geändert und das Objekt verliert seinen Namen
 [Bugfix] - Verwaltung: Unfertige Objekte löschen -> Foreign key constraint fail
 [Bugfix] - Objektvitalität: Der weiße Balken in der Mitte ist manchmal viel länger als der Rest, die Tabelle ist unförmig und passt sich nicht annähernd den Inhalten an
 [Bugfix] - Beim Duplizieren wird immer das Erstellt-Datum, sowie auch die Info wer es erstellt hat, mit dupliziert
 [Bugfix] - Firefox 9: Beim CSV-Import wird der Objekttyp ausgewählt aber nicht die Kategorien nachgeladen
 [Bugfix] - CSV-Import: Standort-Handling
 [Bugfix] - Mandant mit Umlauten führt zu Fehlern
 [Bugfix] - Mandant mit Sonderzeichen führt zu Fehlern
 [Bugfix] - Mögliche XSS Sicherheitslücke bei der Suche

1.0
- Komplett überarbeitetes Oberflächendesign
 - Neue Speicherlogik (Speichern und Abbrechen sind nun in der oberen Buttonleiste zu finden)
 - deutliche Performance Verbesserungen, insbesondere auf der Übersichtsseite
 - Überarbeitete Einzel- und Volumenlizenzverwaltung
 - Migrationshinweise:
 -- 1. Eine Lizenz-Liste mit Anzahl = 5 und einzeiligem Schlüssel (je Zeile = ein Schlüssel) = 1x Volumen-Lizenz mit Anzahl 5
 -- 2. Eine Lizenz-Liste mit Anzahl = 1 und einzeiligem Schlüssel = 1x Einzel-Lizenz
 -- 3. Eine Lizenz-Liste mit Anzahl = 5 und 2-zeiligem Schlüssel = 5x Einzel-Lizenzen, von denen die ersten Zwei einen Schlüssel haben
 -- 4. Eine Lizenz-Liste mit Anzahl = 2 und 5-zeiligem Schlüssel = 5x Einzel-Lizenzen, von denen jeder einen Schlüssel hat
 - Neuer SAN-Browser für Verknüpfungen
 - Erweiterete JDisc-Schnittstelle
 - Optimierung beim Speichern von Kategorieeinträgen
 - Überarbeitete Rackansicht
 - Neue Raumansicht
 - Kategorie SOA-Komponenten wurde entfernt
 - Neuer Beziehungstyp: Vertrag
 - Die Workflows ermöglichen nun eine 1:n Beziehung zu CMDB Objekten
 - Veraltete Kategorien "Abhängigkeiten" und "SAN" wurden entfernt
 - Neues Feld "Service-Tag" in Kategorie Modell
 - Erweiterungen in der Backup Kategorie (Art, Cycle und Speicherort)
 - Der Name des Änderungsbenutzers im Logbuch kann in der Verwaltung
 nun aus Vorname, Nachname und Benutzernamen zusammengestellt werden
 - Verwaltung von Supernetzen (Supernetting)

 [Bugfix] - Die Berechnung von /32 Netzen in der IP-Adressverwaltung ist falsch
 [Bugfix] - Die Liste der aktiven Sessions auf dem Dashboard ist nicht korrekt
 [Bugfix] - Personen-Stammdaten können auf der Übersichtsseite nicht gespeichert werden
 [Bugfix] - Die Objektlisten erlauben nur alphabetische Sortierungen
 [Bugfix] - DNS Domain lässt sich nur speichern wenn ein DNS Server gewählt ist
 [Bugfix] - In der OCS Konfiguration können mehrere Datenbanken angeben, es wird aber immer die Erste verwendet
 [Bugfix] - OCS-Konfiguration lässt sich nicht speichern
 [Bugfix] - PHP 5.4: Fast alle Umlaute werden falsch dargestellt
 [Bugfix] - Quickview Fenster wird nicht zuverlässig geschlossen
 [Bugfix] - Duplizieren von einem Server schlägt mit einem Nagios Fehler fehl wenn Nagios nicht installiert ist
 [Bugfix] - DCHP anstatt DHCP in Adressverwaltung
 [Bugfix] - Wird ein neues Template mit dem ?generischen Template? Objekttyp angelegt, ist das Objekt voll von gefüllten Kategorien.
 [Bugfix] - In der Report View ?Geplante Änderungen? erscheint eine Fehlermeldung
 [Bugfix] - Bei FC-Ports geht die Zuweisung von SAN-Zoning nicht
 [Bugfix] - Lizenzübersicht zeigt $ obwohl Währung auf ¤ eingestellt wurde
 [Bugfix] - Bei der Zuweisung eines Clusterdienstes zu einem Cluster fehlt beim Feld ?Standardserver? eine ?Keiner? Option.
 [Bugfix] - Benachrichtigungsvorlagen lassen sich nicht abspeichern
 [Bugfix] - Die Hersteller / Modell Kopplung funktioniert nicht mehr
 [Bugfix] - Links für Benachrichtigungen (Workflows) sind bei Verwendung von HTTPS nicht korrekt
 [Bugfix] - Authoren können alle Passwörter editieren
 [Bugfix] - CPU: Dokumentation von Mehrkernprozessoren und Hyperthreading
 [Bugfix] - Leereinträge auf der Übersichtsseite
 [Bugfix] - Die Berechnung von /32 Netzen in der IP-Adressverwaltung ist falsch
 [Bugfix] - Mandatory Fields funktionieren nicht bei Dialog+ Feldern
 [Bugfix] - Die Liste der aktiven Sessions auf dem Dashboard ist nicht korrekt
 [Bugfix] - Fehler beim Wechseln des Mandanten
