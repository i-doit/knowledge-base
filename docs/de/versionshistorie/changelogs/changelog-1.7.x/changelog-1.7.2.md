# Changelog 1.7.2

[Verbesserung]  Überarbeitete Workflow E-Mail Texte
[Verbesserung]  Kategorie Bilder: Upload über die JSON-RPC API
[Verbesserung]  Neues Recht für Objektlistenkonfiguration
[Verbesserung]  Standardmäßige Ausklammerung von Beziehungen in Reports
[Verbesserung]  Purge von Reports nur nach Rückfrage
[Verbesserung]  Standortsicht: Berücksichtigung von Objektberechtigungen konfigurierbar (Ausblenden)
[Verbesserung]  Serviceauswahl in CMDB Explorer: Berücksichtigung von Objektberechtigungen konfigurierbar (Ausblenden)
[Verbesserung]  CMDB Explorer: Berücksichtigung von Objektberechtigungen konfigurierbar (Ausblenden)
[Verbesserung]  Objektbrowser: Berücksichtigung von Objektberechtigungen konfigurierbar (Ausblenden)
[Bug]           Benutzerdefinierte Single-Value-Kategorien erzeugen neue Einträge, wenn der erste Wert nicht gefüllt wurde
[Bug]           Generierter Link zu Geokoordinaten zeigt auf die eigene Position
[Bug]           Betriebskosten werden im Report nicht ausgegeben
[Bug]           Objektliste: Attribut Variante aus der Spezifischen Kategorie Varianten zeigt nur einen Wert an.
[Bug]           Fehler bei der Bearbeitung von Objekten ohne Inhalt in der Kategorie "Standort" über die Listeneditierung
[Bug]           API: Nicht-Übergabe einer Beschreibung führt bei Benutzerdefinierten Kategorien dazu, dass diese geleert wird (Methode "cmdb.category")
[Bug]           API: Leere Dialoge liefern ein leeres Array, wohingegen gesetzte Dialoge ein Objekt zurückgeben (Methode "cmdb.category")
[Bug]           Layer-3-Netz Zuordnung geht bei Update des Layer-2-Netzes über die API verloren
[Bug]           Inhalte von Dialog+-Felder werden im Report durch den ersten Wert überschrieben.
[Bug]           Archivieren der Kategorie Service Beziehung wird nicht korrekt angezeigt
[Bug]           Controller weist auf falschen Befehl hin
[Bug]           Aufrufen einer Objektliste erzeugt Meldung "Subquery is ambigoud"
[Bug]           Report kommt mit mehreren SELECT nicht zurecht
[Bug]           Button "Archivieren" purged Kategorieeinträge
[Bug]           Nach Update wird auf Log im temp-Verzeichnis verlinkt
[Bug]           Checkboxen bleiben nach Duplizieren selektiert
[Bug]           Beim Duplizieren erscheint als Erfolgsmeldung eine Language-Konstante
[Bug]           Validierung für Datumsfelder in benutzerdefinierten Kategorien erkennt Inhalte nicht
[Bug]           Rechtevergabe für zur Fehlermeldung
[Bug]           Verkabelungsimport: Bestehende Anschlüsse werden nicht verkabelt
[Bug]           Objekt-Beziehung einer benutzerdefinierten Kategorie wird im CSV-Import als Objektverknüpfung angezeigt.
[Bug]           Fehler beim Aufruf der vorhandenen Massenänderungsvorlagen
[Bug]           Eintragen einer MAC-Adresse ändert die Geschwindigkeit eines Ports
[Bug]           Dialog-Plus-Felder in benutzerdefinierten Kategorien können nicht über die Listeneditierung bearbeitet werden
[Bug]           In der Kategorie "Service Zuweisung" können nicht alle Objekte gleichzeitig über den Objektbrowser entfernt werden
[Bug]           Benutzerdefinierte Multi-Value-Kategorien können über die Listeneditierung keine neuen Einträge erhalten
[Bug]           Events-Modul wirft Fatal Error bei Quickpurge eines Objekts
[Bug]           CSV-Import erzeugt in benutzerdefinierten Kategorien mit Objektbeziehung keine Beziehung
[Bug]           Fehler bei der Vergabe eines Rechts über die Kategorie "Rechtevergabe" wenn zuvor kein Recht existiert.
[Bug]           Bei Installation vom Dokumenten-Modul fehlt ein PHP-Modul
[Bug]           Suchfeld für Texteingabe schaltet nach einmaliger Falscheingabe nicht auf "normale" Darstellung zurück.
[Bug]           Report-View "CMDB-Status Änderungen" zeigt nicht alle Änderungen an
[Bug]           Vorgegebene Werte aus der Validierung werden nicht in Dropdown-Liste dargestellt
[Bug]           Kategorie "Standort" kann nur dann in der Listeneditierung bearbeitet werden, wenn ein Standort gepflegt ist oder war
[Bug]           Pflichtfelder werden in benutzerdefinierten Kategorien nicht angezeigt
[Bug]           Änderungskommentar wird nach dem Speichern nicht angezeigt, wenn er aktiviert wurde
[Bug]           Feldtyp "Objekt-Beziehung (Mehrere Objekte)" erlaubt lediglich die Auswahl eines Objekts.
[Bug]           FC-Ports werden beim Import doppelt angelegt und als "RJ-45" dokumentiert
[Bug]           Das Bearbeiten der Kategorie SLA ist nicht mehr möglich, wenn ein inkompatibler Wert eingetragen wurde
[Bug]           Vorschlagsfunktion bei der Attributsauswahl zeigt nur dann Ergebnisse, wenn der Anfang der Bezeichnung eingegeben wird
[Bug]           Schaltfläche "Als CSV exporiteren" in Objektlisten erlaubt den Export selbst ohne Zugriff auf Objekte
[Bug]           Fehler beim Aufruf der Verwaltung mit einem Nicht-Admin-User
[Bug]           PHP-Warning in der Verwaltung
[Bug]           Icons werden in der Standortsicht nicht skaliert.
[Bug]           Attribute "Zugewiesene Adressen" im Report nicht verständlich
[Bug]           Klick auf "Import" unter "Import - Verkabelung" zeigt fälschlicherweise an, dass der Import erfolgreich gewesen sei
[Bug]           Datumseingaben werden nicht gespeichert, wennn das Format nicht dem eingestellten Format entspricht
[Bug]           Objekt-Browser: Wenn man Objekte über den "Alle"-Button selektiert werden nicht alle Objekte markiert
[Bug]           Upload einer CSV-Datei schlägt fehl, wenn ein windowsbasiertes System eingesetzt wird
[Bug]           Attribut "Investitionskosten" wird in Reports nur mit " - " ausgegeben
[Bug]           Beim Lösen von Objektbeziehungen wird in der Listeneditierung ein zufälliges Objekt ausgewählt
[Bug]           Attribut "Layer-2-Netz-Zuordnung" ist nicht im CSV-Import verfügbar.
[Bug]           Rechte-Darstellung und Rechte-Vergabe differieren bei der Parameter-Anzeige
[Bug]           Template Instanziierung: Anschlüsse werden nicht miteinander verbunden
[Bug]           Aktualisieren des Browsers nach Duplizieren wiederholt das letzte Duplizieren
[Bug]           Konfiguration des Widget "Willkommen" hat keine englische Übersetzung
[Bug]           Variante des Betriebssystems wird nicht von der Massenänderungsvorlage übernommen
