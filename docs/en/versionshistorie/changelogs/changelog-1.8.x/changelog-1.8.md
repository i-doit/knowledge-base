---
search:
  exclude: true
---
# Changelog 1.8
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Verbesserung]  Überarbeitete Spaltenangaben in den Objektlisten<br>
[Verbesserung]  Darstellung von Multivalue Feldern in Listen konfigurierbar als Liste oder komma-separiert<br>
[Verbesserung]  Versenden von SMTP E-Mails über ein selbst-signiertes SSL Zertifikat<br>
[Verbesserung]  Benutzer mit Erstellen Recht in einem Objekttypen erhalten automatisch Rechte auf die selbst erstellen Objekte<br>
[Verbesserung]  Dateiupload für benutzerdefinierte Kategorien<br>
[Verbesserung]  Einige Designverbesserung in den Formularen<br>
[Verbesserung]  Drag and Drop in das Textfeld des Dateibrowsers (Dateizuweisung -> Neu)<br>
[Verbesserung]  Autovervollständigung im Textfeld des Dateibrowsers<br>
[Verbesserung]  Editiermöglichkeit der Ausnahmen in Workflows<br>
[Verbesserung]  Konfigurierbares Objekt Matching für Importe<br>
[Verbesserung]  Tenant-wide Settings überschreiben System-wide Settings (Experteneinstellungen)<br>
[Verbesserung]  Purge von Reports nur nach Rückfrage<br>
[Verbesserung]  Verbesserte QCW Oberfläche<br>
[Bug]           Listeneditierung übernimmt für Kategorie Betriebssystem nicht alle gewählten Änderungen<br>
[Bug]           Attribut "Nagios services vererben" erscheint in der Listeneditierung bei der Kategorie "Betriebssystem"<br>
[Bug]           Fehler in updates/classes/isys_update_files.class.php<br>
[Bug]           Standardrichtung der Darstellungs bei selbstdefinierten CMDB-Explorer-Profilen ist nach Browseraktualisierung vertikal<br>
[Bug]           Errormeldung nach Update und Login<br>
[Bug]           Profil-editieren-Button fehlt im CMDB-Explorer<br>
[Bug]           Export der Verkabelungsansicht nutzt Komma statt Semikolon als Trennzeichen<br>
[Bug]           Verkabelungsansicht stellt kompletten Standort-Pfad dar<br>
[Bug]           Duplizieren-Button fehlt<br>
[Bug]           In der Übersicht der Kategorie "Verbindung" führt ein Klick auf ein Objekt unter "Verbunden mit Listener" zurück zum Hauptobjekt statt zum Verbundenen Objekt.<br>
[Bug]           Fehler beim Upload einer exportierten XML-Datei<br>
[Bug]           Daten können über einen SQL-Report gelöscht werden<br>
[Bug]           Selbstdefinierte Objekttyp-Gruppen werden im QCW unterschiedlich dargestellt<br>
[Bug]           Manuelle Indexierung über den i-doit Controller berücksichtigt nicht die Kategorie "Allgemein"<br>
[Bug]           Multi-Dialog-Plus-Felder in benutzerdefinierten Kategorien werden in Reports nur mit IDs ausgegeben.<br>
[Bug]           Report als TXT exportieren erzeugt eine CSV-Datei<br>
[Bug]           Zugewiesenes Betriebssystem lässt sich über die API nicht leeren<br>
[Bug]           Fehler beim Duplizieren von Objekten mit dokumentiertem Modell<br>
[Bug]           VIVA-Ansicht der Informationsverbünde durch i-doit 1.8 verfälscht und unbrauchbar<br>
[Bug]           JDisc-Import benutzt auch Templates von Kabeln für die Verkabelung von Objekten<br>
[Bug]           Beim Duplizieren eines Objekts werden Dialog und Dialog+ Werte verdoppelt<br>
[Bug]           Fehler bei der Erzeugung von Objekten aus einem Template, wenn Modell und Hersteller ausgewählt sind.<br>
[Bug]           Verkabelung zeigt HTML an<br>
[Bug]           Einheit des Speichers in Kategorie "Objektvitatlität" stimmt nicht mit tatsächlicher Einheit überein<br>
[Bug]           Mitglied (Stack Mitglieder) verursacht falsche Links in Listen<br>
[Bug]           Primäre Hostadresse in Report erzeugt Fehlermeldung<br>
[Bug]           Objekt lösen aktualisiert IP-Liste nicht<br>
[Bug]           Gelbes Highlighting gefundener Suchbegriffe ist immer klein geschrieben<br>
[Bug]           CSV-Import bricht beim Profil-laden mit Fehlermeldung ab<br>
[Bug]           Dialog+-Feld in Objektliste erzeugt SQL-Fehler<br>
[Bug]           Suche findet keine Inhalte von Dialog+-Feldern aus benutzerdefinierten Kategorien<br>
[Bug]           Links in Lesezeichen-Widget können nicht sortiert werden<br>
[Bug]           Attribut "DBMS" wird nicht in Objekt-Listen dargestellt<br>
[Bug]           Sprachkonstanten werden im Duplizieren-Dialog nicht übersetzt<br>
[Bug]           Fehler beim Export eines Reports nach CSV<br>
[Bug]           Fehlender Hilfetext im Verkabelungsimport<br>
[Bug]           Rechtschreibfehler im Hilfetext des Controllers<br>
[Bug]           Attribut "Aktiv" in Kategorie "Port" wird beim JDisc-Import nicht im Modus "Aktualisieren" überprüft<br>
[Bug]           Einträge aus C__CATS__PERSON_ASSIGNED_GROUPS können nicht über die API gelöscht werden<br>
[Bug]           Fehlermeldung, wenn ein neuer Anschluss erzeugt werden soll und die Bezeichnung unique sein muss<br>
[Bug]           Attribut "Erstellungsdatum" wird im Report nicht ausgegeben<br>
[Bug]           Attribut "CPU" wird beim CSV-Export eines Reports mehrfach innerhalb der Spalte dargestellt<br>
[Bug]           Attribut "Letzte Änderung" in Report-Ausgabe ist immer leer<br>
[Bug]           CSV-Import ignoriert Identifikationsfeld<br>
[Bug]           Fehler beim Import eines Einsatzzwecks über den CSV-Import<br>
[Bug]           CSV-Import von Werten in Dialog-Plus-Felder ist nicht möglich<br>
[Bug]           Inhalte der Kategorie Remote Management Controller werden nicht korrekt dargestellt<br>
[Bug]           Dynamische Objektgruppen können nicht im Objekt-Browser verwendet werden.<br>
[Bug]           Einstellung des numerischen Formats in den Benutzereinstellungen hat keine Auswirkung<br>
[Bug]           Bearbeitung des Attributs "Tags" aus der Kategorie "Allgemein" über die API nicht möglich<br>
[Bug]           Deutsches Datumsformat verhindet die Verwendung des Kalenders zur Auswahl des Datums in Datumsfeldern<br>
[Bug]           Zuweisung eines neuen Betriebssystems über den JDisc-Import nicht möglich, wenn das Objekt bereits über ein anderes, primäres Betriebssystem verfügt<br>
[Bug]           Setup verlinkt auf veraltete Dokumentation<br>
[Bug]           Bereinigungsfunktionen berücksichtigen nicht benutzerdefinierte Kategorien<br>
[Bug]           Objekt-ID in einem Report wird nicht exportiert<br>
[Bug]           Aufruf einiger Handler des Controllers führt zu Fehlermeldung<br>
[Bug]           Eigene Objekttyp-Icons skalieren nicht in Legende des CMDB-Explorers<br>
[Bug]           Fehler bei der Verwendung des Attributs "Installiert auf" in einem Report.<br>
[Bug]           Gültigkeitszeitraum wird in einer Benachrichtigung in inkorrektem Format dargestellt<br>
[Bug]           Attribut "Investitionskosten" wird in Reports nur mit " - " ausgegeben<br>
[Bug]           Benutzerdefinierte Single-Value-Kategorien erzeugen neue Einträge, wenn der erste Wert nicht gefüllt wurde<br>
[Bug]           Generierter Link zu Geokoordinaten zeigt auf die eigene Position<br>
[Bug]           Fehlermeldung beim Speichern einer Dateiversion<br>
[Bug]           Fehler bei der Bearbeitung von Objekten ohne Inhalt in der Kategorie "Standort" über die Listeneditierung<br>
[Bug]           Archivieren der Kategorie Service Beziehung wird nicht korrekt angezeigt<br>
[Bug]           Nach Update wird auf Log im temp-Verzeichnis verlinkt<br>
[Bug]           Checkboxen bleiben nach Duplizieren selektiert<br>
[Bug]           Beim Duplizieren erscheint als Erfolgsmeldung eine Language-Konstante<br>
[Bug]           Purgen einer Verknüpfung hinterlässt einen Eintrag im Objekt-Browser<br>
[Bug]           Objekt-Beziehung einer benutzerdefinierten Kategorie wird im CSV-Import als Objektverknüpfung angezeigt.<br>
[Bug]           Import einer h-inventory XML-Datei führt zu einem Logout<br>
[Bug]           Eintragen einer MAC-Adresse ändert die Geschwindigkeit eines Ports<br>
[Bug]           Versionsnummer wird in der Übersicht der Kategorie "Softwarezuweisung" nicht dargestellt<br>
[Bug]           Variante des Betriebssystems wird nicht von der Massenänderungsvorlage übernommen<br>
[Bug]           Navigation in der Verwaltung markiert falschen Bereich<br>
[Bug]           Fehler beim Aufruf der vorhandenen Massenänderungsvorlagen<br>
[Bug]           Dialog-Plus-Felder in benutzerdefinierten Kategorien können nicht über die Listeneditierung bearbeitet werden<br>
[Bug]           Fehler beim Ausführen eines Reports<br>
[Bug]           Kategorie "Standort" kann nur dann in der Listeneditierung bearbeitet werden, wenn ein Standort gepflegt ist oder war<br>
[Bug]           Beim Anlegen einer Datei im Update fehlt ein Slash<br>
[Bug]           Änderungskommentar wird nach dem Speichern nicht angezeigt, wenn er aktiviert wurde<br>
[Bug]           Vorgegebene Werte aus der Validierung werden nicht in Dropdown-Liste dargestellt<br>
[Bug]           FC-Ports werden beim Import doppelt angelegt und als "RJ-45" dokumentiert<br>
[Bug]           Report-View "CMDB-Status Änderungen" zeigt nicht alle Änderungen an<br>
[Bug]           Pflichtfelder werden in benutzerdefinierten Kategorien nicht angezeigt<br>
[Bug]           Pflichtfelder geben an, nicht gefüllt zu sein, obwohl Inhalt vorliegt<br>
[Bug]           Fehler beim Aufruf der Verwaltung mit einem Nicht-Admin-User<br>
[Bug]           Schaltfläche "Als CSV exporiteren" in Objektlisten erlaubt den Export selbst ohne Zugriff auf Objekte<br>
[Bug]           Vorschlagsfunktion bei der Attributsauswahl zeigt nur dann Ergebnisse, wenn der Anfang der Bezeichnung eingegeben wird<br>
[Bug]           CSV-Import erzeugt in benutzerdefinierten Kategorien mit Objektbeziehung keine Beziehung<br>
[Bug]           Das Bearbeiten der Kategorie SLA ist nicht mehr möglich, wenn ein inkompatibler Wert eingetragen wurde<br>
[Bug]           Datumseingaben werden nicht gespeichert, wennn das Format nicht dem eingestellten Format entspricht<br>
[Bug]           Suggestion-Feld der Suche wird nur einmal aktualisiert<br>
[Bug]           JEDI-/JDisc-Import setzt Kommastelle bei Laufwerkskapazitäten falsch<br>
[Bug]           Verwendung einiger Sonderzeichen führt zu Fehler in der Suche<br>
[Bug]           Kündigungsinformationen werden in Listeneditierung nicht auf alle Objekte übertragen, wenn die Informationen in der Zeile "Alle Objekte" eingetragen werden<br>
[Bug]           Icons werden in der Standortsicht nicht skaliert.<br>
[Bug]           Upload einer CSV-Datei schlägt fehl, wenn ein windowsbasiertes System eingesetzt wird<br>
[Bug]           Datumsformate innerhalb der Listeneditierung nicht einheitlich<br>
[Bug]           Kategorie "Rechteverwaltung" taucht zusätzlich in der Kategorie-Liste auf.<br>
[Bug]           Kategorie Buchhaltung kann nicht gespeichert werden, wenn kein "Datum der Anschaffung" hinterlegt wurde<br>
[Bug]           Fehler beim Aufruf einer Objektliste mit dem Attribut "VLAN-ID" aus der Kategorie "WAN-Leitung"<br>
[Bug]           Fehler beim Aufruf von Objektlisten aktivem CMDB-Status-Filter aus dem my-doit-Bereich<br>
[Bug]           Templates vom Objekttyp Gebäude werden nicht als Template sondern als Objekt im Zustand Normal gespeichert.<br>
[Bug]           Änderung eines Betriebssystems zeigt im Logbuch lediglich die ID des verknüpften Objekts<br>
[Bug]           Fehler beim Speichern der Kategorie "Zugeweisene Objekte"<br>
[Bug]           Das Anlegen neuer Wartungen ist nicht möglich<br>
[Bug]           Fehler beim Aufruf einer benutzerdefinierten Kategorie über Suchergebnisse<br>
[Bug]           Fehler bei der Vergabe eines Rechts über die Kategorie "Rechtevergabe" wenn zuvor kein Recht existiert.<br>
[Bug]           Lizenzschlüssel werden nur gespeichert, wenn ein Ablaufdatum angegeben wird.<br>
[Bug]           Standort-Pfad im Report besteht lediglich aus dem Zeichen ><br>
[Bug]           "Typ" wird beim JDisc-Import nicht ins Logbuch geschrieben<br>
[Bug]           CSV-Import über die Konsole erstellt keine Logbuch-Einträge<br>
[Bug]           Umlaute werden als HTML-Zeichenfolge beim Abkürzen in Listen dargestellt<br>
[Bug]           Kein Tree im Treebrowser nach Klick auf "Zurück"<br>
[Bug]           Spaltenüberschriften in der Rechte-Darstellung verrutscht oder überflüssig<br>
