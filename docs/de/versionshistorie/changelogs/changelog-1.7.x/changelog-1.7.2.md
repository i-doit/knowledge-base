# Changelog 1.7.2

[Verbesserung]  Überarbeitete Workflow E-Mail Texte<br>
[Verbesserung]  Kategorie Bilder: Upload über die JSON-RPC API<br>
[Verbesserung]  Neues Recht für Objektlistenkonfiguration<br>
[Verbesserung]  Standardmäßige Ausklammerung von Beziehungen in Reports<br>
[Verbesserung]  Purge von Reports nur nach Rückfrage<br>
[Verbesserung]  Standortsicht: Berücksichtigung von Objektberechtigungen konfigurierbar (Ausblenden)<br>
[Verbesserung]  Serviceauswahl in CMDB Explorer: Berücksichtigung von Objektberechtigungen konfigurierbar (Ausblenden)<br>
[Verbesserung]  CMDB Explorer: Berücksichtigung von Objektberechtigungen konfigurierbar (Ausblenden)<br>
[Verbesserung]  Objektbrowser: Berücksichtigung von Objektberechtigungen konfigurierbar (Ausblenden)<br>
[Bug]           Benutzerdefinierte Single-Value-Kategorien erzeugen neue Einträge, wenn der erste Wert nicht gefüllt wurde<br>
[Bug]           Generierter Link zu Geokoordinaten zeigt auf die eigene Position<br>
[Bug]           Betriebskosten werden im Report nicht ausgegeben<br>
[Bug]           Objektliste: Attribut Variante aus der Spezifischen Kategorie Varianten zeigt nur einen Wert an.<br>
[Bug]           Fehler bei der Bearbeitung von Objekten ohne Inhalt in der Kategorie "Standort" über die Listeneditierung<br>
[Bug]           API: Nicht-Übergabe einer Beschreibung führt bei Benutzerdefinierten Kategorien dazu, dass diese geleert wird (Methode "cmdb.category")<br>
[Bug]           API: Leere Dialoge liefern ein leeres Array, wohingegen gesetzte Dialoge ein Objekt zurückgeben (Methode "cmdb.category")<br>
[Bug]           Layer-3-Netz Zuordnung geht bei Update des Layer-2-Netzes über die API verloren<br>
[Bug]           Inhalte von Dialog+-Felder werden im Report durch den ersten Wert überschrieben.<br>
[Bug]           Archivieren der Kategorie Service Beziehung wird nicht korrekt angezeigt<br>
[Bug]           Controller weist auf falschen Befehl hin<br>
[Bug]           Aufrufen einer Objektliste erzeugt Meldung "Subquery is ambigoud"<br>
[Bug]           Report kommt mit mehreren SELECT nicht zurecht<br>
[Bug]           Button "Archivieren" purged Kategorieeinträge<br>
[Bug]           Nach Update wird auf Log im temp-Verzeichnis verlinkt<br>
[Bug]           Checkboxen bleiben nach Duplizieren selektiert<br>
[Bug]           Beim Duplizieren erscheint als Erfolgsmeldung eine Language-Konstante<br>
[Bug]           Validierung für Datumsfelder in benutzerdefinierten Kategorien erkennt Inhalte nicht<br>
[Bug]           Rechtevergabe für zur Fehlermeldung<br>
[Bug]           Verkabelungsimport: Bestehende Anschlüsse werden nicht verkabelt<br>
[Bug]           Objekt-Beziehung einer benutzerdefinierten Kategorie wird im CSV-Import als Objektverknüpfung angezeigt.<br>
[Bug]           Fehler beim Aufruf der vorhandenen Massenänderungsvorlagen<br>
[Bug]           Eintragen einer MAC-Adresse ändert die Geschwindigkeit eines Ports<br>
[Bug]           Dialog-Plus-Felder in benutzerdefinierten Kategorien können nicht über die Listeneditierung bearbeitet werden<br>
[Bug]           In der Kategorie "Service Zuweisung" können nicht alle Objekte gleichzeitig über den Objektbrowser entfernt werden<br>
[Bug]           Benutzerdefinierte Multi-Value-Kategorien können über die Listeneditierung keine neuen Einträge erhalten<br>
[Bug]           Events-Modul wirft Fatal Error bei Quickpurge eines Objekts<br>
[Bug]           CSV-Import erzeugt in benutzerdefinierten Kategorien mit Objektbeziehung keine Beziehung<br>
[Bug]           Fehler bei der Vergabe eines Rechts über die Kategorie "Rechtevergabe" wenn zuvor kein Recht existiert.<br>
[Bug]           Bei Installation vom Dokumenten-Modul fehlt ein PHP-Modul<br>
[Bug]           Suchfeld für Texteingabe schaltet nach einmaliger Falscheingabe nicht auf "normale" Darstellung zurück.<br>
[Bug]           Report-View "CMDB-Status Änderungen" zeigt nicht alle Änderungen an<br>
[Bug]           Vorgegebene Werte aus der Validierung werden nicht in Dropdown-Liste dargestellt<br>
[Bug]           Kategorie "Standort" kann nur dann in der Listeneditierung bearbeitet werden, wenn ein Standort gepflegt ist oder war<br>
[Bug]           Pflichtfelder werden in benutzerdefinierten Kategorien nicht angezeigt<br>
[Bug]           Änderungskommentar wird nach dem Speichern nicht angezeigt, wenn er aktiviert wurde<br>
[Bug]           Feldtyp "Objekt-Beziehung (Mehrere Objekte)" erlaubt lediglich die Auswahl eines Objekts.<br>
[Bug]           FC-Ports werden beim Import doppelt angelegt und als "RJ-45" dokumentiert<br>
[Bug]           Das Bearbeiten der Kategorie SLA ist nicht mehr möglich, wenn ein inkompatibler Wert eingetragen wurde<br>
[Bug]           Vorschlagsfunktion bei der Attributsauswahl zeigt nur dann Ergebnisse, wenn der Anfang der Bezeichnung eingegeben wird<br>
[Bug]           Schaltfläche "Als CSV exporiteren" in Objektlisten erlaubt den Export selbst ohne Zugriff auf Objekte<br>
[Bug]           Fehler beim Aufruf der Verwaltung mit einem Nicht-Admin-User<br>
[Bug]           PHP-Warning in der Verwaltung<br>
[Bug]           Icons werden in der Standortsicht nicht skaliert.<br>
[Bug]           Attribute "Zugewiesene Adressen" im Report nicht verständlich<br>
[Bug]           Klick auf "Import" unter "Import - Verkabelung" zeigt fälschlicherweise an, dass der Import erfolgreich gewesen sei<br>
[Bug]           Datumseingaben werden nicht gespeichert, wennn das Format nicht dem eingestellten Format entspricht<br>
[Bug]           Objekt-Browser: Wenn man Objekte über den "Alle"-Button selektiert werden nicht alle Objekte markiert<br>
[Bug]           Upload einer CSV-Datei schlägt fehl, wenn ein windowsbasiertes System eingesetzt wird<br>
[Bug]           Attribut "Investitionskosten" wird in Reports nur mit " - " ausgegeben<br>
[Bug]           Beim Lösen von Objektbeziehungen wird in der Listeneditierung ein zufälliges Objekt ausgewählt<br>
[Bug]           Attribut "Layer-2-Netz-Zuordnung" ist nicht im CSV-Import verfügbar.<br>
[Bug]           Rechte-Darstellung und Rechte-Vergabe differieren bei der Parameter-Anzeige<br>
[Bug]           Template Instanziierung: Anschlüsse werden nicht miteinander verbunden<br>
[Bug]           Aktualisieren des Browsers nach Duplizieren wiederholt das letzte Duplizieren<br>
[Bug]           Konfiguration des Widget "Willkommen" hat keine englische Übersetzung<br>
[Bug]           Variante des Betriebssystems wird nicht von der Massenänderungsvorlage übernommen<br>
