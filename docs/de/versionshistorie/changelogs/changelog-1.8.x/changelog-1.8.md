# Changelog 1.8

[Verbesserung]  Überarbeitete Spaltenangaben in den Objektlisten
[Verbesserung]  Darstellung von Multivalue Feldern in Listen konfigurierbar als Liste oder komma-separiert
[Verbesserung]  Versenden von SMTP E-Mails über ein selbst-signiertes SSL Zertifikat
[Verbesserung]  Benutzer mit Erstellen Recht in einem Objekttypen erhalten automatisch Rechte auf die selbst erstellen Objekte
[Verbesserung]  Dateiupload für benutzerdefinierte Kategorien
[Verbesserung]  Einige Designverbesserung in den Formularen
[Verbesserung]  Drag and Drop in das Textfeld des Dateibrowsers (Dateizuweisung -> Neu)
[Verbesserung]  Autovervollständigung im Textfeld des Dateibrowsers
[Verbesserung]  Editiermöglichkeit der Ausnahmen in Workflows
[Verbesserung]  Konfigurierbares Objekt Matching für Importe
[Verbesserung]  Tenant-wide Settings überschreiben System-wide Settings (Experteneinstellungen)
[Verbesserung]  Purge von Reports nur nach Rückfrage
[Verbesserung]  Verbesserte QCW Oberfläche
[Bug]           Listeneditierung übernimmt für Kategorie Betriebssystem nicht alle gewählten Änderungen
[Bug]           Attribut "Nagios services vererben" erscheint in der Listeneditierung bei der Kategorie "Betriebssystem"
[Bug]           Fehler in updates/classes/isys_update_files.class.php
[Bug]           Standardrichtung der Darstellungs bei selbstdefinierten CMDB-Explorer-Profilen ist nach Browseraktualisierung vertikal
[Bug]           Errormeldung nach Update und Login
[Bug]           Profil-editieren-Button fehlt im CMDB-Explorer
[Bug]           Export der Verkabelungsansicht nutzt Komma statt Semikolon als Trennzeichen
[Bug]           Verkabelungsansicht stellt kompletten Standort-Pfad dar
[Bug]           Duplizieren-Button fehlt
[Bug]           In der Übersicht der Kategorie "Verbindung" führt ein Klick auf ein Objekt unter "Verbunden mit Listener" zurück zum Hauptobjekt statt zum Verbundenen Objekt.
[Bug]           Fehler beim Upload einer exportierten XML-Datei
[Bug]           Daten können über einen SQL-Report gelöscht werden
[Bug]           Selbstdefinierte Objekttyp-Gruppen werden im QCW unterschiedlich dargestellt
[Bug]           Manuelle Indexierung über den i-doit Controller berücksichtigt nicht die Kategorie "Allgemein"
[Bug]           Multi-Dialog-Plus-Felder in benutzerdefinierten Kategorien werden in Reports nur mit IDs ausgegeben.
[Bug]           Report als TXT exportieren erzeugt eine CSV-Datei
[Bug]           Zugewiesenes Betriebssystem lässt sich über die API nicht leeren
[Bug]           Fehler beim Duplizieren von Objekten mit dokumentiertem Modell
[Bug]           VIVA-Ansicht der Informationsverbünde durch i-doit 1.8 verfälscht und unbrauchbar
[Bug]           JDisc-Import benutzt auch Templates von Kabeln für die Verkabelung von Objekten
[Bug]           Beim Duplizieren eines Objekts werden Dialog und Dialog+ Werte verdoppelt
[Bug]           Fehler bei der Erzeugung von Objekten aus einem Template, wenn Modell und Hersteller ausgewählt sind.
[Bug]           Verkabelung zeigt HTML an
[Bug]           Einheit des Speichers in Kategorie "Objektvitatlität" stimmt nicht mit tatsächlicher Einheit überein
[Bug]           Mitglied (Stack Mitglieder) verursacht falsche Links in Listen
[Bug]           Primäre Hostadresse in Report erzeugt Fehlermeldung
[Bug]           Objekt lösen aktualisiert IP-Liste nicht
[Bug]           Gelbes Highlighting gefundener Suchbegriffe ist immer klein geschrieben
[Bug]           CSV-Import bricht beim Profil-laden mit Fehlermeldung ab
[Bug]           Dialog+-Feld in Objektliste erzeugt SQL-Fehler
[Bug]           Suche findet keine Inhalte von Dialog+-Feldern aus benutzerdefinierten Kategorien
[Bug]           Links in Lesezeichen-Widget können nicht sortiert werden
[Bug]           Attribut "DBMS" wird nicht in Objekt-Listen dargestellt
[Bug]           Sprachkonstanten werden im Duplizieren-Dialog nicht übersetzt
[Bug]           Fehler beim Export eines Reports nach CSV
[Bug]           Fehlender Hilfetext im Verkabelungsimport
[Bug]           Rechtschreibfehler im Hilfetext des Controllers
[Bug]           Attribut "Aktiv" in Kategorie "Port" wird beim JDisc-Import nicht im Modus "Aktualisieren" überprüft
[Bug]           Einträge aus C__CATS__PERSON_ASSIGNED_GROUPS können nicht über die API gelöscht werden
[Bug]           Fehlermeldung, wenn ein neuer Anschluss erzeugt werden soll und die Bezeichnung unique sein muss
[Bug]           Attribut "Erstellungsdatum" wird im Report nicht ausgegeben
[Bug]           Attribut "CPU" wird beim CSV-Export eines Reports mehrfach innerhalb der Spalte dargestellt
[Bug]           Attribut "Letzte Änderung" in Report-Ausgabe ist immer leer
[Bug]           CSV-Import ignoriert Identifikationsfeld
[Bug]           Fehler beim Import eines Einsatzzwecks über den CSV-Import
[Bug]           CSV-Import von Werten in Dialog-Plus-Felder ist nicht möglich
[Bug]           Inhalte der Kategorie Remote Management Controller werden nicht korrekt dargestellt
[Bug]           Dynamische Objektgruppen können nicht im Objekt-Browser verwendet werden.
[Bug]           Einstellung des numerischen Formats in den Benutzereinstellungen hat keine Auswirkung
[Bug]           Bearbeitung des Attributs "Tags" aus der Kategorie "Allgemein" über die API nicht möglich
[Bug]           Deutsches Datumsformat verhindet die Verwendung des Kalenders zur Auswahl des Datums in Datumsfeldern
[Bug]           Zuweisung eines neuen Betriebssystems über den JDisc-Import nicht möglich, wenn das Objekt bereits über ein anderes, primäres Betriebssystem verfügt
[Bug]           Setup verlinkt auf veraltete Dokumentation
[Bug]           Bereinigungsfunktionen berücksichtigen nicht benutzerdefinierte Kategorien
[Bug]           Objekt-ID in einem Report wird nicht exportiert
[Bug]           Aufruf einiger Handler des Controllers führt zu Fehlermeldung
[Bug]           Eigene Objekttyp-Icons skalieren nicht in Legende des CMDB-Explorers
[Bug]           Fehler bei der Verwendung des Attributs "Installiert auf" in einem Report.
[Bug]           Gültigkeitszeitraum wird in einer Benachrichtigung in inkorrektem Format dargestellt
[Bug]           Attribut "Investitionskosten" wird in Reports nur mit " - " ausgegeben
[Bug]           Benutzerdefinierte Single-Value-Kategorien erzeugen neue Einträge, wenn der erste Wert nicht gefüllt wurde
[Bug]           Generierter Link zu Geokoordinaten zeigt auf die eigene Position
[Bug]           Fehlermeldung beim Speichern einer Dateiversion
[Bug]           Fehler bei der Bearbeitung von Objekten ohne Inhalt in der Kategorie "Standort" über die Listeneditierung
[Bug]           Archivieren der Kategorie Service Beziehung wird nicht korrekt angezeigt
[Bug]           Nach Update wird auf Log im temp-Verzeichnis verlinkt
[Bug]           Checkboxen bleiben nach Duplizieren selektiert
[Bug]           Beim Duplizieren erscheint als Erfolgsmeldung eine Language-Konstante
[Bug]           Purgen einer Verknüpfung hinterlässt einen Eintrag im Objekt-Browser
[Bug]           Objekt-Beziehung einer benutzerdefinierten Kategorie wird im CSV-Import als Objektverknüpfung angezeigt.
[Bug]           Import einer h-inventory XML-Datei führt zu einem Logout
[Bug]           Eintragen einer MAC-Adresse ändert die Geschwindigkeit eines Ports
[Bug]           Versionsnummer wird in der Übersicht der Kategorie "Softwarezuweisung" nicht dargestellt
[Bug]           Variante des Betriebssystems wird nicht von der Massenänderungsvorlage übernommen
[Bug]           Navigation in der Verwaltung markiert falschen Bereich
[Bug]           Fehler beim Aufruf der vorhandenen Massenänderungsvorlagen
[Bug]           Dialog-Plus-Felder in benutzerdefinierten Kategorien können nicht über die Listeneditierung bearbeitet werden
[Bug]           Fehler beim Ausführen eines Reports
[Bug]           Kategorie "Standort" kann nur dann in der Listeneditierung bearbeitet werden, wenn ein Standort gepflegt ist oder war
[Bug]           Beim Anlegen einer Datei im Update fehlt ein Slash
[Bug]           Änderungskommentar wird nach dem Speichern nicht angezeigt, wenn er aktiviert wurde
[Bug]           Vorgegebene Werte aus der Validierung werden nicht in Dropdown-Liste dargestellt
[Bug]           FC-Ports werden beim Import doppelt angelegt und als "RJ-45" dokumentiert
[Bug]           Report-View "CMDB-Status Änderungen" zeigt nicht alle Änderungen an
[Bug]           Pflichtfelder werden in benutzerdefinierten Kategorien nicht angezeigt
[Bug]           Pflichtfelder geben an, nicht gefüllt zu sein, obwohl Inhalt vorliegt
[Bug]           Fehler beim Aufruf der Verwaltung mit einem Nicht-Admin-User
[Bug]           Schaltfläche "Als CSV exporiteren" in Objektlisten erlaubt den Export selbst ohne Zugriff auf Objekte
[Bug]           Vorschlagsfunktion bei der Attributsauswahl zeigt nur dann Ergebnisse, wenn der Anfang der Bezeichnung eingegeben wird
[Bug]           CSV-Import erzeugt in benutzerdefinierten Kategorien mit Objektbeziehung keine Beziehung
[Bug]           Das Bearbeiten der Kategorie SLA ist nicht mehr möglich, wenn ein inkompatibler Wert eingetragen wurde
[Bug]           Datumseingaben werden nicht gespeichert, wennn das Format nicht dem eingestellten Format entspricht
[Bug]           Suggestion-Feld der Suche wird nur einmal aktualisiert
[Bug]           JEDI-/JDisc-Import setzt Kommastelle bei Laufwerkskapazitäten falsch
[Bug]           Verwendung einiger Sonderzeichen führt zu Fehler in der Suche
[Bug]           Kündigungsinformationen werden in Listeneditierung nicht auf alle Objekte übertragen, wenn die Informationen in der Zeile "Alle Objekte" eingetragen werden
[Bug]           Icons werden in der Standortsicht nicht skaliert.
[Bug]           Upload einer CSV-Datei schlägt fehl, wenn ein windowsbasiertes System eingesetzt wird
[Bug]           Datumsformate innerhalb der Listeneditierung nicht einheitlich
[Bug]           Kategorie "Rechteverwaltung" taucht zusätzlich in der Kategorie-Liste auf.
[Bug]           Kategorie Buchhaltung kann nicht gespeichert werden, wenn kein "Datum der Anschaffung" hinterlegt wurde
[Bug]           Fehler beim Aufruf einer Objektliste mit dem Attribut "VLAN-ID" aus der Kategorie "WAN-Leitung"
[Bug]           Fehler beim Aufruf von Objektlisten aktivem CMDB-Status-Filter aus dem my-doit-Bereich
[Bug]           Templates vom Objekttyp Gebäude werden nicht als Template sondern als Objekt im Zustand Normal gespeichert.
[Bug]           Änderung eines Betriebssystems zeigt im Logbuch lediglich die ID des verknüpften Objekts
[Bug]           Fehler beim Speichern der Kategorie "Zugeweisene Objekte"
[Bug]           Das Anlegen neuer Wartungen ist nicht möglich
[Bug]           Fehler beim Aufruf einer benutzerdefinierten Kategorie über Suchergebnisse
[Bug]           Fehler bei der Vergabe eines Rechts über die Kategorie "Rechtevergabe" wenn zuvor kein Recht existiert.
[Bug]           Lizenzschlüssel werden nur gespeichert, wenn ein Ablaufdatum angegeben wird.
[Bug]           Standort-Pfad im Report besteht lediglich aus dem Zeichen >
[Bug]           "Typ" wird beim JDisc-Import nicht ins Logbuch geschrieben
[Bug]           CSV-Import über die Konsole erstellt keine Logbuch-Einträge
[Bug]           Umlaute werden als HTML-Zeichenfolge beim Abkürzen in Listen dargestellt
[Bug]           Kein Tree im Treebrowser nach Klick auf "Zurück"
[Bug]           Spaltenüberschriften in der Rechte-Darstellung verrutscht oder überflüssig
