# Changelog 1.9.1

[Verbesserung]  Ermöglichen des Editieren eines neuen Eintrags im DialogPlus-Feld direkt nach dem Hinzufügen
[Verbesserung]  Berücksichtigung der Stromkreisrekursion
[Verbesserung]  Horizontale Scrollbar in JDisc Profilen sofort sichtbar
[Verbesserung]  Switch Stacking: Portübersicht über alle mitglieder hinweg
[Verbesserung]  Switch Stacking: Logische Ports über mehrere Switche hinweg
[Verbesserung]  Export der Host-Aliasse beim Check_MK Export
[Verbesserung]  JDisc-Import aktualisert Objekt-Titel nicht
[Verbesserung]  Segmentierung von HEs in Racks
[Verbesserung]  Attribut "E-Mail-Adresse" aus Kategorie "Personen" nicht im CSV-Import verknüpfbar
[Verbesserung]  Neu erzeugte Einträge über den Dialog-Admin werden validiert
[Verbesserung]  Massenänderung: Konfiguration von Logging
[Verbesserung]  Listeneditierung: Option "Alle Objekte" in "Alle Einträge" umbenannt
[Verbesserung]  Globale Suche: Höherwertige Darstellung von Objekttitel und Objekte im Zustand Normal
[Verbesserung]  Einstellung zur Festlegung der maximalen Anzahl an Attributen in Objekt-Listen
[Verbesserung]  Möglichkeit zur Administration von Tags im Dialog-Admin
[Verbesserung]  Benachrichtigung bei bereits vergebenen Konstanten bei der Erstellung einer neuen benutzerdefinierten Kategorie
[Verbesserung]  Neue View: Offene und ungenutzte Kabel
[Verbesserung]  In der Kategorie "Betriebssystem" können nur noch Betriebssysteme zugewiesen werden
[Verbesserung]  "Lösen"-Button in "Listenansicht Logbuch"
[Änderung]      Entfernen der Sprachauswahl in der Single-Sign-On Konfiguration
[Änderung]      Mehrfach-Auswahl in Report-Views entfernen
[Bug]           Profile können im QCW nicht hochgeladen werden wenn zuvor alle anderen Profile gelöscht wurden
[Bug]           Ändern einer nicht-selbst-definierten Objekttyp-Gruppe im QCW ist möglich
[Bug]           Fehlerhafte Darstellung von Objekt-Links im Safari
[Bug]           Transfer der exportierten Check_MK-Konfiguration bricht mit Fehlermeldung ab
[Bug]           Relation von Ein- und Ausgang geht beim Duplizieren verloren
[Bug]           Fehler beim Speichern der Kategorie "Buchhaltung"
[Bug]           Einige Kategorien werden im Objekttree aber nicht im QCW angezeigt
[Bug]           Ausgeblendete Kategorie im QCW wird auch für andere Objekttypen nicht mehr angezeigt
[Bug]           Bearbeiten von Service-Filtern mit ID > 10 nicht möglich
[Bug]           Objekterkennung im CSV-Import funktioniert nicht mit casesensitivity
[Bug]           Listeneditierung - Kategorie "Betriebssystem": Zugewiesene Lizenzen können nicht geändert werden
[Bug]           Kategorie "Servicezuweisung": Es ist nicht möglich Selbstdefinierte Objekttypen auszuwählen mit der Kategorie "Service"
[Bug]           Attribut "Auf Gerät" beim CSV-Import mehrfach vorhanden
[Bug]           LC__UNIVERSAL__USED_BY ist nicht übersetzt
[Bug]           Report Manager: View "Geräte in einem Standort (Listenformat)" kann nicht heruntergeladen werden
[Bug]           Listeneditierung - Kategorie "Buchhaltung": Rechnungsdatum gibt "Feldwert ist ungültig." aus
[Bug]           Sprachkonstanten werden in der englischen Version unter Systemeinstellungen angezeigt
[Bug]           Bearbeiten eines Anschlusses ohne Verbindung erzeugt automatisch ein Kabel
[Bug]           Sprachkonstante in der englischen Version unter Cable in der Kategorie Fiber/lead
[Bug]           Kategorie Beziehung: Beziehungsrichtung verändert sich wenn ein Eintrag gespeichert wird ohne die Richtung zu ändern.
[Bug]           Kategorie "Standort" / "Betriebssystem" / "Buchhaltung": Objekte, welche über die Suche aufgerufen werden, geben den Standort falsch aus
[Bug]           Read-only Funktion zur Farbauswahl im CMDB-Explorer Profil fehlerhaft
[Bug]           Kategorie Hostadresse: Wird das zugeordnete Netz gelöst wird nicht das Globale v4/v6 Netz automatisch ausgewählt
[Bug]           Geräte werden im linken Menübaum in der Kombinierten Ansicht nicht immer angezeigt
[Bug]           Javascript Fehler bei der Darstellung großer Netze
[Bug]           Auswahl für die Standort Ansichten wird nach einloggen nicht dargestellt.
[Bug]           Editieren-Button unter LDAP-Directories funktioniert nicht
[Bug]           Gemischte Sprachanzeige unter LDAP-Directories
[Bug]           Der Standardfilter einer Objektliste wird nicht angewendet sobald die Liste aufgerufen wird.
[Bug]           OCS-Import: Kategorie Modell wird bei Switch Geräten innerhalb eines Stacks nicht aktualisiert
[Bug]           Import: Modell und Hersteller aus der Kategorie Modell werden nicht korrekt miteinander verbunden
[Bug]           Settings für das Anzeigen von Kategorien auf der Übersichtsseite werden durch Nein-Ja-Setzen gelöscht
[Bug]           Zuweisung eines Raums zu einem LDAP-User funktioniert nicht
[Bug]           Startdatum und Enddatum von Lizenzen werden nicht in Objektlisten angezeigt
[Bug]           Report Manager: Bedingung mit einer Einheit verursacht Fehlermeldung wenn diese als erste Bedingung definiert ist
[Bug]           ZenDesk Testbug 0815
[Bug]           View "CMDB-Status Änderungen" arbeitet nicht korrekt
[Bug]           Überschreiben-Modus im CSV-Import bewirkt die mehrfache Anlage von Kabeln
[Bug]           Referenzierung eines Controllers einer Festplatte über den CSV-Import nicht möglich
[Bug]           KabelVerbindung wird nicht angezeigt, wenn keine Kabellänge angegeben ist
[Bug]           Import von Ja/Nein-Feldern über den CSV-Import nicht möglich.
[Bug]           install.sh funktioniert nicht
[Bug]           In JDisc-Profilen kann der CMDB-Status "i-doit Status" ausgewählt werden
[Bug]           Attribut "Faser / Wellenlänge" ist falsch und sollte "Farbe / Wellenlänge" heißen
[Bug]           Verbindungen manuell erzeugter Kabel werden nicht in der Liste angezeigt
[Bug]           Duplizieren von Kategorien mit Dialog-Plus Inhalten, die auf eine Sprachkonstante verwenden führt zu doppelten Dialog-Plus Einträgen.
[Bug]           Duplizieren von Inhalten aus benutzerdefinierten Kategorien bei Verwendung von Sprachkonstanten erzeugt ein Duplikat der Kategorie
[Bug]           Report Manager: Spezifische Kategorie "Zugewiesene Objekte" vom Objekttypen "Organisation" ist nicht auswählbar
[Bug]           Doppelte ID-Anzeige in Widget "Objektliste" wenn ID als Attribut gewählt ist
[Bug]           Objekttyp wird trotz Abbrechen erstellt.
[Bug]           Kabellänge wird in Listeneditierung falsch umgerechnet
[Bug]           Hostadresse wird nicht als primär importiert
[Bug]           Listen: Numerisches Format hat keine Auswirkungen
[Bug]           Lizenzen: Gesamtkosten in Listenansicht mit zu vielen Nachkommastellen
[Bug]           Fehlermeldung nach dem Login in Kategorie mit Währungsfeld
[Bug]           Suche findet keine Begriffe aus WYSIWYG Feldern in Benutzerdefinierten Kategorien
[Bug]           Notizen-Widget wird ab einer bestimmten Zeichenanzahl nicht mehr geladen
[Bug]           Inkorrektes Editieren einer unbekannten Objekttyp-Konfiguration
[Bug]           Fehlermeldung beim Löschen eines nicht-leeren Objekttypen inkorrekt
[Bug]           Report-Manager wiederholt Objekt-Titel statt das verknüpfte Objekt auszugeben.
[Bug]           Attribut "Primäre E-Mail-Adresse" im CSV-Import auswählbar
[Bug]           HTML-Tags um E-Mail Adresse in Kategorie "E-Mail-Adressen"
[Bug]           Diverse Dialog Einträge haben keinen Status
[Bug]           Kategorie "Port" zeigt in Tabelle nicht die zugeordnete IP-Adresse an
[Bug]           Dialog-Attribute ohne richtige Benamung
[Bug]           Dialog-Einträge für "Vertrag: Vertragsart" haben "0" als Konstante
[Bug]           Dialog-Admin speichert Einträge für "Modul TTS: Ticket Systeme" nicht.
[Bug]           Konfiguration der QR-Codes für Objekttypen öffnet sich nicht beim Aufruf
[Bug]           Im Attribut "Zugewiesene Arbeitsplätze" fehlt das Icon zur Auswahl der verknüpften Attribute im Report-Manager
[Bug]           Fehlerhafte Darstellung der zugewiesenen Lizenz in der Kategorie "Softwarezuweisung", wenn ein bestehender Eintrag bearbeitet wird
[Bug]           Fehlermeldung beim Deinstallieren einer Extension im AdminCenter
[Bug]           Filter der Liste "JDisc-Profile" in der Verwaltung funktioniert nicht
[Bug]           Darstellung in Multi Value-Kategorie "Objektgruppe" defekt
[Bug]           Zugewiesene Objekte in Dateien können nicht angeklickt werden
[Bug]           Upload einer neuen Dateiversion löscht die Kategorie und die Beschreibung
[Bug]           Spezifische Kategorie "Dateien > Zugewiesene Objekte" lässt sich nicht in Liste einbinden
[Bug]           Suche findet Inhalt von Beschreibungsfeldern nicht, wenn diese Sonderzeichen enthalten
[Bug]           Verkabelung: Anschluss enthält standardmäßig den Kaltgerätestecker anstatt den Eintrag "-"
[Bug]           Anschlüsse werden doppelt erstellt anstatt abgespeichert
[Bug]           Falsches Datumsformat in Kategorie "Vertragszuweisung"
[Bug]           Falsche Inventarnummer beim QR-Code Druck, wenn der Platzhalter %COUNTER% verwendet wird
[Bug]           Wird die ausgeführte Suche als Bookmark hinzugefügt, erscheint nur Text unter my-doit
[Bug]           Gelöschte Kategorien werden weiterhin in Listen angezeigt
[Bug]           Neue Bookmarks in my-doit zeigen auf das Dashboard
[Bug]           Kategorie "Listener" listet keine Verbindungen auf.
[Bug]           Report mit Datumsfeldern in benutzerdefinierten Kategorien berücksichtigt nicht das länderspezifische Datumsformat
[Bug]           Berechnung der "RAID Kapazität" nicht nachvollziehbar bei Änderung der Speichereinheit oder des Wertes
[Bug]           Objekte werden erstellt bevor sie gespeichert werden und nicht bei Klick auf Abbrechen gelöscht.
