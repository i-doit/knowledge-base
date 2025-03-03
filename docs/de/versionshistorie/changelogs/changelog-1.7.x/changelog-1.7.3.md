---
search:
  exclude: true
---
# Changelog 1.7.3
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Verbesserung]  JDisc-Import: Erweiterung des Imports um Stacked Switches<br>
[Verbesserung]  Neuer Parameter "hostfilter" in API Methode cmdb.filter.getUpdatedIPs<br>
[Verbesserung]  Konfigurierbarer globaler Sysid Präfix<br>
[Verbesserung]  Editiermöglichkeit der Ausnahmen in Workflows<br>
[Verbesserung]  Mapping Funktionalität für Attribute mit Mehrfachauswahl im CSV-Import<br>
[Bug]           Versionsnummer wird in der Übersicht der Kategorie "Softwarezuweisung" nicht dargestellt<br>
[Bug]           Archivierte und gelöschte Festplatten werden für einen RAID-Verbund angeboten<br>
[Bug]           Es lässt sich aus einem Report keine neue Objektgruppe erstellen<br>
[Bug]           Fehlermeldung beim Speichern einer Dateiversion<br>
[Bug]           Bei Festlegung eines Default-Templates in der Objekttyp-Konfiguration von "Patchfeld" wird beim Neuerstellen eines Objekts das Patchfeld erstellt aber nicht angezeigt<br>
[Bug]           Fehler bei der Verwendung des Attributs "Installiert auf" in einem Report.<br>
[Bug]           mod_rewrite check auf der Systemübersicht schlägt bei unsicherem SSL Zertifikat fehl<br>
[Bug]           Feld Refrigerating capacity in der Kategorie Air Conditioning speichert falsche Werte<br>
[Bug]           Verkabelungsimport beim Patchfeld: Bei bestehenden Anschlüssen werden importierte Anschlüsse intern nicht korrekt verbunden<br>
[Bug]           Eigene Objekttyp-Icons skalieren nicht in Legende des CMDB-Explorers<br>
[Bug]           Aufruf einiger Handler des Controllers führt zu Fehlermeldung<br>
[Bug]           Setup verlinkt auf veraltete Dokumentation<br>
[Bug]           Falsche Darstellung des Widget "Monitoring..." wenn keine Host-Verbindung möglich<br>
[Bug]           Zuweisung eines neuen Betriebssystems über den JDisc-Import nicht möglich, wenn das Objekt bereits über ein anderes, primäres Betriebssystem verfügt<br>
[Bug]           Fehler beim Import eines Einsatzzwecks über den CSV-Import<br>
[Bug]           Deutsches Datumsformat verhindet die Verwendung des Kalenders zur Auswahl des Datums in Datumsfeldern<br>
[Bug]           CSV-Import von Werten in Dialog-Plus-Felder ist nicht möglich<br>
[Bug]           Attribut "Letzte Änderung" in Report-Ausgabe ist immer leer<br>
[Bug]           CSV-Import ignoriert Identifikationsfeld<br>
[Bug]           Dynamische Objektgruppen können nicht im Objekt-Browser verwendet werden.<br>
[Bug]           Option "Kommasepariert" im CSV-Import führt zu fehlerhaften Importen<br>
[Bug]           Bearbeitung des Attributs "Tags" aus der Kategorie "Allgemein" über die API nicht möglich<br>
[Bug]           Bereinigungsfunktionen berücksichtigen nicht benutzerdefinierte Kategorien<br>
[Bug]           Attribut "CPU" wird beim CSV-Export eines Reports mehrfach innerhalb der Spalte dargestellt<br>
[Bug]           Attribut "Erstellungsdatum" wird im Report nicht ausgegeben<br>
[Bug]           "Root-Lokation" wird im englischen nicht übersetzt<br>
[Bug]           Wird in Link in der Zugriffskategorie angeklickt, öffnet sich neben dem Link auch der Kategorieeintrag<br>
[Bug]           Einträge aus C__CATS__PERSON_ASSIGNED_GROUPS können nicht über die API gelöscht werden<br>
[Bug]           Dateizuweisung: Button "Datei herunterladen" startet Download und öffnet den Eintrag<br>
[Bug]           Import einer h-inventory XML-Datei führt zu einem Logout<br>
[Bug]           Benutzer wird nach OCS-Import abgemeldet<br>
[Bug]           Es wird nur die letzte reportbasierte Benachrichtigung verschickt<br>
[Bug]           Service Logbuch enthält das gesamte Logbuch, wenn keine Komponenten hinzugefügt sind<br>
[Bug]           Fehler beim Ausführen eines Reports<br>
[Bug]           Reportbasierte Benachrichtigung findet und übermittelt nicht alle gefundenen Objekte<br>
[Bug]           Ausgabe des konfigurierten Namens der Custom Properties in Personenstammdaten<br>
[Bug]           "Dateneingabe bereinigen" wird nicht durchgehend auf alle Felder angewendet<br>
[Bug]           Attribut "Aktiv" in Kategorie "Port" wird beim JDisc-Import nicht im Modus "Aktualisieren" überprüft<br>
[Bug]           Rechtschreibfehler im Hilfetext des Controllers<br>
[Bug]           Purgen einer Verknüpfung hinterlässt einen Eintrag im Objekt-Browser<br>
[Bug]           Navigation in der Verwaltung markiert falschen Bereich<br>
[Bug]           Gültigkeitszeitraum wird in einer Benachrichtigung in inkorrektem Format dargestellt<br>
[Bug]           Im Logbuch wird die Beschreibung immer als "geändert" gekennzeichnet<br>
[Bug]           Kalender-Widget bleibt bei Klick auf "Abbrechen" stehen<br>
[Bug]           Netzwerk und Portübersicht fett dargestellt obwohl kein Eintrag vorhanden<br>
[Bug]           Nicht-länderspezifischer Infotext unter "Allgemeine Einstellungen"<br>
[Bug]           Objekt-ID in einem Report wird nicht exportiert<br>
[Bug]           Einstellung des numerischen Formats in den Benutzereinstellungen hat keine Auswirkung<br>
[Bug]           Inhalte der Kategorie Remote Management Controller werden nicht korrekt dargestellt<br>
[Bug]           Fehlender Hilfetext im Verkabelungsimport<br>
[Bug]           Kategorie "Service-Typ" befindet sich immer im Editiermodus<br>
[Bug]           Fehlermeldung, wenn ein neuer Anschluss erzeugt werden soll und die Bezeichnung unique sein muss<br>
[Bug]           Button verwendet den Begriff "...Vorlage..." anstelle von "...Template..."<br>
[Bug]           Feld "Abfrage für jede Zeile" im SQL-Editor des Report-Managers hat keine Auswirkung<br>
[Bug]           Ansicht-Einstellungen des Widgets "Notizen" werden durch Edit-Mode auf "Default" zurückgesetzt<br>
[Bug]           Parameter-Reihenfolge falsch in Darstellung der Rechte<br>
[Bug]           Sprachkonstanten werden im Duplizieren-Dialog nicht übersetzt<br>
[Bug]           Fehler beim Export eines Reports nach CSV<br>
