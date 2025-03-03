---
search:
  exclude: true
---
# Changelog 1.0.X
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Bugfix] - Innerer Content Bereich ist nicht 100% breit im Firefox - Siehe letzten Kommentar<br>
[Bugfix] - [TTS-Modul] Kommunikation via TLS (https) nicht möglich<br>
[Bugfix] - [Import] Blacklisting von Kategorien ist nicht aktiv.<br>
[Bugfix] - Platzhalter im Template-System werden zu früh ersetzt<br>
[Bugfix] - Softwarebezeichnung im (Software) Objekt-Browser<br>
[Bugfix] - Verwaltung->Benutzereinstellungen->Objekt-Listen: Editieren-Button fehlt.<br>
[Bugfix] - IT Grundschutz Baustein lässt sich nicht zuordnen<br>
[Bugfix] - Rückwärtige Kontaktzuweisung klappt nicht mit eigenen Objekt-Typ-Gruppen<br>
[Bugfix] - [Suche] Bug durch ungefiltertes Regex...?<br>
[Bugfix] - Clustervitalität wird nicht richtig angezeigt<br>
[Bugfix] - Kapazität mit . als Dezimaltrennzeichen wird teilweise falsch berechnet<br>
[Bugfix] - Dateiversionen werden mit Status 1 (neu)<br>
[Bugfix] - Breadcrumb: Markiert man ein Objekt in einer Objektliste und klickt auf Editieren, aktualisiert sich die Breadcrumb nicht.<br>
[Bugfix] - Funktion "unfertige/archivierte/gelöschte Objekte entfernen" aufsplitten (siehe Beschreibung)<br>
[Bugfix] - [Standort] Wird via Listeneditierung ein Objekt einem Schrank zugewiesen, erkennt der Schrank dieses als eingeschoben<br>
[Bugfix] - JDisc-Konfiguration: leeres Passwort verursacht keine Fehlermeldung<br>
[Bugfix] - Admin und Admingruppe als "unlöschbar" definieren<br>
[Bugfix] - Bei der Verknüpfung von RT und i-doit auf der gleichen Maschine meldet i-doit alle Benutzer ab, wenn im RT ein Ticket mit einem referenzierten Objekt aus i-doit geöffnet wird.<br>
[Bugfix] - API: Standort von Objekten mit ausgeben<br>
[Bugfix] - Lizenz-Migration: Beschreibungsfeld wird nicht übernommen<br>
[Bugfix] - CATG: Netzwerk > Interface: Template wirfd nicht geladen<br>
[Bugfix] - Objektliste Raum: Die Raumnummer 1.3 wird als 1 angezeigt. Es wird anscheinend am Punkt abgeschnitten<br>
[Bugfix] - Listenansicht editieren. Das "Sortieren nach" kann nicht abgespeichert werden<br>
[Bugfix] - Währung: Es wird immer Pfund angezeigt, obwohl der Euro eingestellt ist. Eine Eigene Währung im Format "Euro;¤" ist nicht nutzbar und das Eurozeichen wird als "?" angezeigt<br>
[Bugfix] - Wenn der Name eines Objektes über die Übersichtsseite geändert wird, ist dies nicht im Logbuch verzeichnet<br>
[Bugfix] - Ist in der Kategorie Modell eine Beschreibung eingetragen, kann diese nicht über die Übersichtsseite geändert/gelöscht werden<br>
[Bugfix] - CPU-Frequenz: Es wird kein Komma mehr unterstützt, was zu einer Fehlermeldung führt<br>
[Bugfix] - Wird ein Filter im Logbuch verwendet und auf die nächste Seite gewechselt, wird der Filter zurückgesetzt<br>
[Bugfix] - Schrankansicht: Bei geringerer Auflösung hat man mehrere Scrollbalken, was dazu führt, dass man die Funktionen so gut wie gar nicht mehr nutzen kann<br>
[Bugfix] - Listenansicht editieren: Die Kontaktzuweisung funktioniert nicht richtig. Person ist immer leer (übrigens steht "Person" in der Kategorie Kontaktzuweisung beim Abfrageeditor im Reporting nichtmals zu Auswahl). Die anderen Felder gehen zwar, bringen aber nicht viel.<br>
[Bugfix] - Listenansicht editieren: Beim zugewiesenen Arbeitsplatz werden die Attribute doppelt angezeigt<br>
[Bugfix] - Dialog-Admin: Der Vertragsstatus ist nicht auffindbar. Durch eine unsinnige Sortierung ist die Suche auch sehr schwer.<br>
[Bugfix] - Beim Abfrageeditor für das Reporting steht unter Speicher die Bezeichnung zwei mal zur Auswahl<br>
[Bugfix] - Eigene Reports: Die nur für sich selber sichtbaren haben eine Sprachkonstante "LC_REPORT_LIST_ONLY_YOU"<br>
[Bugfix] - [NO FIX] Abfrageeditor: Suche nach <4GB Speicher geht die einzelnen Riegel durch und nicht den gesamten Speicher (2x4GB sind nach dem Report <5GB Speicher)<br>
[Bugfix] - Übersichtsseite einer Organisation: In der Organisation wird etwas geändert und das Objekt verliert seinen Namen<br>
[Bugfix] - Verwaltung: Unfertige Objekte löschen -> Foreign key constraint fail<br>
[Bugfix] - Objektvitalität: Der weiße Balken in der Mitte ist manchmal viel länger als der Rest, die Tabelle ist unförmig und passt sich nicht annähernd den Inhalten an<br>
[Bugfix] - Beim Duplizieren wird immer das Erstellt-Datum, sowie auch die Info wer es erstellt hat, mit dupliziert<br>
[Bugfix] - Firefox 9: Beim CSV-Import wird der Objekttyp ausgewählt aber nicht die Kategorien nachgeladen<br>
[Bugfix] - CSV-Import: Standort-Handling<br>
[Bugfix] - Mandant mit Umlauten führt zu Fehlern<br>
[Bugfix] - Mandant mit Sonderzeichen führt zu Fehlern<br>
[Bugfix] - Mögliche XSS Sicherheitslücke bei der Suche<br>

1.0<br>

-   Komplett überarbeitetes Oberflächendesign<br>
-   Neue Speicherlogik (Speichern und Abbrechen sind nun in der oberen Buttonleiste zu finden)<br>
-   deutliche Performance Verbesserungen, insbesondere auf der Übersichtsseite<br>
-   Überarbeitete Einzel- und Volumenlizenzverwaltung<br>
-   Migrationshinweise:<br>
 -- 1. Eine Lizenz-Liste mit Anzahl = 5 und einzeiligem Schlüssel (je Zeile = ein Schlüssel) = 1x Volumen-Lizenz mit Anzahl 5<br>
 -- 2. Eine Lizenz-Liste mit Anzahl = 1 und einzeiligem Schlüssel = 1x Einzel-Lizenz<br>
 -- 3. Eine Lizenz-Liste mit Anzahl = 5 und 2-zeiligem Schlüssel = 5x Einzel-Lizenzen, von denen die ersten Zwei einen Schlüssel haben<br>
 -- 4. Eine Lizenz-Liste mit Anzahl = 2 und 5-zeiligem Schlüssel = 5x Einzel-Lizenzen, von denen jeder einen Schlüssel hat<br>
-   Neuer SAN-Browser für Verknüpfungen<br>
-   Erweiterete JDisc-Schnittstelle<br>
-   Optimierung beim Speichern von Kategorieeinträgen<br>
-   Überarbeitete Rackansicht<br>
-   Neue Raumansicht<br>
-   Kategorie SOA-Komponenten wurde entfernt<br>
-   Neuer Beziehungstyp: Vertrag<br>
-   Die Workflows ermöglichen nun eine 1:n Beziehung zu CMDB Objekten<br>
-   Veraltete Kategorien "Abhängigkeiten" und "SAN" wurden entfernt<br>
-   Neues Feld "Service-Tag" in Kategorie Modell<br>
-   Erweiterungen in der Backup Kategorie (Art, Cycle und Speicherort)<br>
-   Der Name des Änderungsbenutzers im Logbuch kann in der Verwaltung<br>
 nun aus Vorname, Nachname und Benutzernamen zusammengestellt werden<br>
-   Verwaltung von Supernetzen (Supernetting)<br>

 [Bugfix] - Die Berechnung von /32 Netzen in der IP-Adressverwaltung ist falsch<br>
 [Bugfix] - Die Liste der aktiven Sessions auf dem Dashboard ist nicht korrekt<br>
 [Bugfix] - Personen-Stammdaten können auf der Übersichtsseite nicht gespeichert werden<br>
 [Bugfix] - Die Objektlisten erlauben nur alphabetische Sortierungen<br>
 [Bugfix] - DNS Domain lässt sich nur speichern wenn ein DNS Server gewählt ist<br>
 [Bugfix] - In der OCS Konfiguration können mehrere Datenbanken angeben, es wird aber immer die Erste verwendet<br>
 [Bugfix] - OCS-Konfiguration lässt sich nicht speichern<br>
 [Bugfix] - PHP 5.4: Fast alle Umlaute werden falsch dargestellt<br>
 [Bugfix] - Quickview Fenster wird nicht zuverlässig geschlossen<br>
 [Bugfix] - Duplizieren von einem Server schlägt mit einem Nagios Fehler fehl wenn Nagios nicht installiert ist<br>
 [Bugfix] - DCHP anstatt DHCP in Adressverwaltung<br>
 [Bugfix] - Wird ein neues Template mit dem ?generischen Template? Objekttyp angelegt, ist das Objekt voll von gefüllten Kategorien.<br>
 [Bugfix] - In der Report View ?Geplante Änderungen? erscheint eine Fehlermeldung<br>
 [Bugfix] - Bei FC-Ports geht die Zuweisung von SAN-Zoning nicht<br>
 [Bugfix] - Lizenzübersicht zeigt $ obwohl Währung auf ¤ eingestellt wurde<br>
 [Bugfix] - Bei der Zuweisung eines Clusterdienstes zu einem Cluster fehlt beim Feld ?Standardserver? eine ?Keiner? Option.<br>
 [Bugfix] - Benachrichtigungsvorlagen lassen sich nicht abspeichern<br>
 [Bugfix] - Die Hersteller / Modell Kopplung funktioniert nicht mehr<br>
 [Bugfix] - Links für Benachrichtigungen (Workflows) sind bei Verwendung von HTTPS nicht korrekt<br>
 [Bugfix] - Authoren können alle Passwörter editieren<br>
 [Bugfix] - CPU: Dokumentation von Mehrkernprozessoren und Hyperthreading<br>
 [Bugfix] - Leereinträge auf der Übersichtsseite<br>
 [Bugfix] - Die Berechnung von /32 Netzen in der IP-Adressverwaltung ist falsch<br>
 [Bugfix] - Mandatory Fields funktionieren nicht bei Dialog+ Feldern<br>
 [Bugfix] - Die Liste der aktiven Sessions auf dem Dashboard ist nicht korrekt<br>
 [Bugfix] - Fehler beim Wechseln des Mandanten<br>
