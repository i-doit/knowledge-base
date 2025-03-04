---
search:
  exclude: true
---
# Changelog 1.9.1
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Verbesserung]  Ermöglichen des Editieren eines neuen Eintrags im DialogPlus-Feld direkt nach dem Hinzufügen<br>
[Verbesserung]  Berücksichtigung der Stromkreisrekursion<br>
[Verbesserung]  Horizontale Scrollbar in JDisc Profilen sofort sichtbar<br>
[Verbesserung]  Switch Stacking: Portübersicht über alle mitglieder hinweg<br>
[Verbesserung]  Switch Stacking: Logische Ports über mehrere Switche hinweg<br>
[Verbesserung]  Export der Host-Aliasse beim Check_MK Export<br>
[Verbesserung]  JDisc-Import aktualisert Objekt-Titel nicht<br>
[Verbesserung]  Segmentierung von HEs in Racks<br>
[Verbesserung]  Attribut "E-Mail-Adresse" aus Kategorie "Personen" nicht im CSV-Import verknüpfbar<br>
[Verbesserung]  Neu erzeugte Einträge über den Dialog-Admin werden validiert<br>
[Verbesserung]  Massenänderung: Konfiguration von Logging<br>
[Verbesserung]  Listeneditierung: Option "Alle Objekte" in "Alle Einträge" umbenannt<br>
[Verbesserung]  Globale Suche: Höherwertige Darstellung von Objekttitel und Objekte im Zustand Normal<br>
[Verbesserung]  Einstellung zur Festlegung der maximalen Anzahl an Attributen in Objekt-Listen<br>
[Verbesserung]  Möglichkeit zur Administration von Tags im Dialog-Admin<br>
[Verbesserung]  Benachrichtigung bei bereits vergebenen Konstanten bei der Erstellung einer neuen benutzerdefinierten Kategorie<br>
[Verbesserung]  Neue View: Offene und ungenutzte Kabel<br>
[Verbesserung]  In der Kategorie "Betriebssystem" können nur noch Betriebssysteme zugewiesen werden<br>
[Verbesserung]  "Lösen"-Button in "Listenansicht Logbuch"<br>
[Änderung]      Entfernen der Sprachauswahl in der Single-Sign-On Konfiguration<br>
[Änderung]      Mehrfach-Auswahl in Report-Views entfernen<br>
[Bug]           Profile können im QCW nicht hochgeladen werden wenn zuvor alle anderen Profile gelöscht wurden<br>
[Bug]           Ändern einer nicht-selbst-definierten Objekttyp-Gruppe im QCW ist möglich<br>
[Bug]           Fehlerhafte Darstellung von Objekt-Links im Safari<br>
[Bug]           Transfer der exportierten Check_MK-Konfiguration bricht mit Fehlermeldung ab<br>
[Bug]           Relation von Ein- und Ausgang geht beim Duplizieren verloren<br>
[Bug]           Fehler beim Speichern der Kategorie "Buchhaltung"<br>
[Bug]           Einige Kategorien werden im Objekttree aber nicht im QCW angezeigt<br>
[Bug]           Ausgeblendete Kategorie im QCW wird auch für andere Objekttypen nicht mehr angezeigt<br>
[Bug]           Bearbeiten von Service-Filtern mit ID > 10 nicht möglich<br>
[Bug]           Objekterkennung im CSV-Import funktioniert nicht mit casesensitivity<br>
[Bug]           Listeneditierung - Kategorie "Betriebssystem": Zugewiesene Lizenzen können nicht geändert werden<br>
[Bug]           Kategorie "Servicezuweisung": Es ist nicht möglich Selbstdefinierte Objekttypen auszuwählen mit der Kategorie "Service"<br>
[Bug]           Attribut "Auf Gerät" beim CSV-Import mehrfach vorhanden<br>
[Bug]           LC__UNIVERSAL__USED_BY ist nicht übersetzt<br>
[Bug]           Report Manager: View "Geräte in einem Standort (Listenformat)" kann nicht heruntergeladen werden<br>
[Bug]           Listeneditierung - Kategorie "Buchhaltung": Rechnungsdatum gibt "Feldwert ist ungültig." aus<br>
[Bug]           Sprachkonstanten werden in der englischen Version unter Systemeinstellungen angezeigt<br>
[Bug]           Bearbeiten eines Anschlusses ohne Verbindung erzeugt automatisch ein Kabel<br>
[Bug]           Sprachkonstante in der englischen Version unter Cable in der Kategorie Fiber/lead<br>
[Bug]           Kategorie Beziehung: Beziehungsrichtung verändert sich wenn ein Eintrag gespeichert wird ohne die Richtung zu ändern.<br>
[Bug]           Kategorie "Standort" / "Betriebssystem" / "Buchhaltung": Objekte, welche über die Suche aufgerufen werden, geben den Standort falsch aus<br>
[Bug]           Read-only Funktion zur Farbauswahl im CMDB-Explorer Profil fehlerhaft<br>
[Bug]           Kategorie Hostadresse: Wird das zugeordnete Netz gelöst wird nicht das Globale v4/v6 Netz automatisch ausgewählt<br>
[Bug]           Geräte werden im linken Menübaum in der Kombinierten Ansicht nicht immer angezeigt<br>
[Bug]           Javascript Fehler bei der Darstellung großer Netze<br>
[Bug]           Auswahl für die Standort Ansichten wird nach einloggen nicht dargestellt.<br>
[Bug]           Editieren-Button unter LDAP-Directories funktioniert nicht<br>
[Bug]           Gemischte Sprachanzeige unter LDAP-Directories<br>
[Bug]           Der Standardfilter einer Objektliste wird nicht angewendet sobald die Liste aufgerufen wird.<br>
[Bug]           OCS-Import: Kategorie Modell wird bei Switch Geräten innerhalb eines Stacks nicht aktualisiert<br>
[Bug]           Import: Modell und Hersteller aus der Kategorie Modell werden nicht korrekt miteinander verbunden<br>
[Bug]           Settings für das Anzeigen von Kategorien auf der Übersichtsseite werden durch Nein-Ja-Setzen gelöscht<br>
[Bug]           Zuweisung eines Raums zu einem LDAP-User funktioniert nicht<br>
[Bug]           Startdatum und Enddatum von Lizenzen werden nicht in Objektlisten angezeigt<br>
[Bug]           Report Manager: Bedingung mit einer Einheit verursacht Fehlermeldung wenn diese als erste Bedingung definiert ist<br>
[Bug]           ZenDesk Testbug 0815<br>
[Bug]           View "CMDB-Status Änderungen" arbeitet nicht korrekt<br>
[Bug]           Überschreiben-Modus im CSV-Import bewirkt die mehrfache Anlage von Kabeln<br>
[Bug]           Referenzierung eines Controllers einer Festplatte über den CSV-Import nicht möglich<br>
[Bug]           KabelVerbindung wird nicht angezeigt, wenn keine Kabellänge angegeben ist<br>
[Bug]           Import von Ja/Nein-Feldern über den CSV-Import nicht möglich.<br>
[Bug]           install.sh funktioniert nicht<br>
[Bug]           In JDisc-Profilen kann der CMDB-Status "i-doit Status" ausgewählt werden<br>
[Bug]           Attribut "Faser / Wellenlänge" ist falsch und sollte "Farbe / Wellenlänge" heißen<br>
[Bug]           Verbindungen manuell erzeugter Kabel werden nicht in der Liste angezeigt<br>
[Bug]           Duplizieren von Kategorien mit Dialog-Plus Inhalten, die auf eine Sprachkonstante verwenden führt zu doppelten Dialog-Plus Einträgen.<br>
[Bug]           Duplizieren von Inhalten aus benutzerdefinierten Kategorien bei Verwendung von Sprachkonstanten erzeugt ein Duplikat der Kategorie<br>
[Bug]           Report Manager: Spezifische Kategorie "Zugewiesene Objekte" vom Objekttypen "Organisation" ist nicht auswählbar<br>
[Bug]           Doppelte ID-Anzeige in Widget "Objektliste" wenn ID als Attribut gewählt ist<br>
[Bug]           Objekttyp wird trotz Abbrechen erstellt.<br>
[Bug]           Kabellänge wird in Listeneditierung falsch umgerechnet<br>
[Bug]           Hostadresse wird nicht als primär importiert<br>
[Bug]           Listen: Numerisches Format hat keine Auswirkungen<br>
[Bug]           Lizenzen: Gesamtkosten in Listenansicht mit zu vielen Nachkommastellen<br>
[Bug]           Fehlermeldung nach dem Login in Kategorie mit Währungsfeld<br>
[Bug]           Suche findet keine Begriffe aus WYSIWYG Feldern in Benutzerdefinierten Kategorien<br>
[Bug]           Notizen-Widget wird ab einer bestimmten Zeichenanzahl nicht mehr geladen<br>
[Bug]           Inkorrektes Editieren einer unbekannten Objekttyp-Konfiguration<br>
[Bug]           Fehlermeldung beim Löschen eines nicht-leeren Objekttypen inkorrekt<br>
[Bug]           Report-Manager wiederholt Objekt-Titel statt das verknüpfte Objekt auszugeben.<br>
[Bug]           Attribut "Primäre E-Mail-Adresse" im CSV-Import auswählbar<br>
[Bug]           HTML-Tags um E-Mail Adresse in Kategorie "E-Mail-Adressen"<br>
[Bug]           Diverse Dialog Einträge haben keinen Status<br>
[Bug]           Kategorie "Port" zeigt in Tabelle nicht die zugeordnete IP-Adresse an<br>
[Bug]           Dialog-Attribute ohne richtige Benamung<br>
[Bug]           Dialog-Einträge für "Vertrag: Vertragsart" haben "0" als Konstante<br>
[Bug]           Dialog-Admin speichert Einträge für "Modul TTS: Ticket Systeme" nicht.<br>
[Bug]           Konfiguration der QR-Codes für Objekttypen öffnet sich nicht beim Aufruf<br>
[Bug]           Im Attribut "Zugewiesene Arbeitsplätze" fehlt das Icon zur Auswahl der verknüpften Attribute im Report-Manager<br>
[Bug]           Fehlerhafte Darstellung der zugewiesenen Lizenz in der Kategorie "Softwarezuweisung", wenn ein bestehender Eintrag bearbeitet wird<br>
[Bug]           Fehlermeldung beim Deinstallieren einer Extension im AdminCenter<br>
[Bug]           Filter der Liste "JDisc-Profile" in der Verwaltung funktioniert nicht<br>
[Bug]           Darstellung in Multi Value-Kategorie "Objektgruppe" defekt<br>
[Bug]           Zugewiesene Objekte in Dateien können nicht angeklickt werden<br>
[Bug]           Upload einer neuen Dateiversion löscht die Kategorie und die Beschreibung<br>
[Bug]           Spezifische Kategorie "Dateien > Zugewiesene Objekte" lässt sich nicht in Liste einbinden<br>
[Bug]           Suche findet Inhalt von Beschreibungsfeldern nicht, wenn diese Sonderzeichen enthalten<br>
[Bug]           Verkabelung: Anschluss enthält standardmäßig den Kaltgerätestecker anstatt den Eintrag "-"<br>
[Bug]           Anschlüsse werden doppelt erstellt anstatt abgespeichert<br>
[Bug]           Falsches Datumsformat in Kategorie "Vertragszuweisung"<br>
[Bug]           Falsche Inventarnummer beim QR-Code Druck, wenn der Platzhalter %COUNTER% verwendet wird<br>
[Bug]           Wird die ausgeführte Suche als Bookmark hinzugefügt, erscheint nur Text unter my-doit<br>
[Bug]           Gelöschte Kategorien werden weiterhin in Listen angezeigt<br>
[Bug]           Neue Bookmarks in my-doit zeigen auf das Dashboard<br>
[Bug]           Kategorie "Listener" listet keine Verbindungen auf.<br>
[Bug]           Report mit Datumsfeldern in benutzerdefinierten Kategorien berücksichtigt nicht das länderspezifische Datumsformat<br>
[Bug]           Berechnung der "RAID Kapazität" nicht nachvollziehbar bei Änderung der Speichereinheit oder des Wertes<br>
[Bug]           Objekte werden erstellt bevor sie gespeichert werden und nicht bei Klick auf Abbrechen gelöscht.<br>
