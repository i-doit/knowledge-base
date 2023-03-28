# Changelog 1.8.3

[Verbesserung]  Objektlisten: Performance des Attributs "Betriebssystem" aus der Kategorie "Betriebssystem" verbessert<br>
[Verbesserung]  Im CMDB-Explorer werden die Beziehungsrichtungen nun besser dargestellt<br>
[Verbesserung]  Es werden alle Referenzen des angeklickten Objekts im CMDB-Explorer markiert<br>
[Verbesserung]  Button "Teilstring Suche in Objektlisten als Standard setzen" unter Tools / Datenbank in der Verwaltung<br>
[Verbesserung]  Button zum Entfernen eines Filters in den Objektlisten<br>
[Verbesserung]  JDISC Import Option "Objekttyp aktualisieren"<br>
[Verbesserung]  Verbundene Kabel können gespeichert werden, wenn kein Anschluss definiert ist<br>
[Bug]           Vertragsbeginn und -ende lassen sich nicht als Bedingung auswählen<br>
[Bug]           Einspielen eines Profils im Quick Configuration Wizard wirft Fehlermeldung<br>
[Bug]           Die Spalten einer Objekt-Liste wurde nicht aktualisiert nachdem diese über die Objekt-Listen Konfiguration bearbeitet wurde<br>
[Bug]           Importe/API erstellen keinen Eintrag in Kategorie "Aktuelle Datei"<br>
[Bug]           DB-Fehler nach Klick auf "Check_MK:Hostmerkmale" unter Dialog-Admin<br>
[Bug]           Eingegebene Zahlen in Textfeldern werden wieder dargestellt<br>
[Bug]           Breiten- und Längengrad können nicht über den CSV-Import importiert werden<br>
[Bug]           In der Hostadresse werden die logischen Ports im Feld "Verknüpfter Port" wieder dargestellt<br>
[Bug]           Über die Kontaktzuweisung erstellte Personen werden nicht in der globalen Suche gefunden<br>
[Bug]           Wiki-Link wird bei verborgenen Feldern nicht länger dargestellt<br>
[Bug]           Bei der Port Kategorie wird eine Fehlermeldung ausgegeben wenn der i-doit MySQL-Benutzer keine Ausführungsrechte besitzt um Prozeduren auszuführen<br>
[Bug]           Kommas hinter den Template-Namen<br>
[Bug]           post_max_size wird zwei Mal in der Systemübersicht angezeigt<br>
[Bug]           Neue Einträge in der Kategorie "Hostadresse" werden immer als Primär gekenntzeichnet<br>
[Bug]           Modell ist beim Editieren nicht mehr ausgefüllt, wenn der Inhalt aus JDisc stammt<br>
[Bug]           LDAP: Beim einloggen eines LDAP Benutzers wird dieser immer der eingestellten LDAP Standardgruppe hinzugefügt<br>
[Bug]           Monitoring Instanz kann nicht auf "-" gesetzt werden<br>
[Bug]           Bedingungen auf das Attribut "Einschub" werden im Report-Manager nicht korrekt umgesetzt<br>
[Bug]           Löschen von Kabel hinterlässt Beziehung zwischen den verkabelten Objekten<br>
[Bug]           Session Timeout-Wert von <= 0 oder >= 99999[..] führt dazu, dass man sich nicht mehr einloggen kann<br>
[Bug]           Entfernen einer Slotzuweisung lässt einen Eintrag in "räumlich zugeordnete Objekte" zurück<br>
[Bug]           Attributsauswahl für Kategorie "Betriebssystem" im Report-Manager leer<br>
[Bug]           Wechsel von Suchergebnis auf CMDB-Explorer öffnet Suchmaske<br>
[Bug]           Report Manager: Komma und Punkt wird in Währungsfeldern vertauscht<br>
[Bug]           Report Manager: Layer-3-Netzdetails werden nicht angezeigt, wenn über eine benutzerdefinierte Kategorie hinweg abgefragt wird<br>
[Bug]           Dateiversionen: Wird die aktuellste Version gelöscht, wird nicht die vorherige Version angeboten<br>
[Bug]           Falsche Übersetzung in benutzerdefinierten Kategorien<br>
[Bug]           Leitungsnetz wird im Objekt Browser nicht angezeigt<br>
[Bug]           Falsches Datumsformat in Kategorie "Vertragszuweisung"<br>
[Bug]           Das Erstellen Recht auf "Objekte vom Typ" (Alle) zeigt nun keine weiteren Objekte in der Objektliste an<br>
[Bug]           Suchstring wird fehlerhaft manipuliert beim suchen<br>
[Bug]           API-Logs werden auch geschrieben, wenn die Einstellung hierzu deaktiviert wurde<br>
[Bug]           "Root" im Standortpfad der Objektlisten ausblenden<br>
[Bug]           Wartungs-Modul: Mehrfache Anrede bei Auswahl von mehreren Objekten<br>
[Bug]           Raid-Kapazität in Speichersystemen wird immer in GB dargestellt<br>
[Bug]           Logout nicht möglich bei der Verwendung von SSO<br>
[Bug]           Felder in der LDAP-Konfiguration beim Aufruf der Bearbeitungsansicht leer<br>
[Bug]           Login im AdminCenter mit belliebigem Account - außer admin - ohne Paswort möglich<br>
[Bug]           PHP-Error beim Aufruf der PDU-Kategorie nach fehlerhafter SNMP-Abfrage<br>
[Bug]           Vertragsdaten werden bei CSV-Import nicht aktualisiert<br>
[Bug]           Bei Geo-Koordinaten wird der Nach-Komma-Anteil abgeschnitten bei Verwendung von Komma<br>
[Bug]           OCS: Port-Beschreibung wird nicht importiert<br>
[Bug]           Falsche Logbuch-Informationen zu Schränken, wenn ein Objekt umpositioniert wird<br>
[Bug]           JDisc Import: Beim Modus "Aktualisieren (Neu Inventarisiert)" werden neu gescannte Geräte nicht richtig importiert wenn diese in einer JDisc-Gruppe zugewiesen sind<br>
[Bug]           Über die Übersichtsseite kann die Verknüpfung zu einem Mobiltelefon nicht entfernt werden<br>
[Bug]           Sonderzeichen werden in der Passwort Kategorie nicht gespeichert "<>"<br>
[Bug]           CSV-Import: Dateiendung .csv darf keine Großbuchstaben haben<br>
[Bug]           Benachrichtigung "Veränderte Objekte": Schwellwert hat keinen Einfluss auf die Benachrichtigung<br>
[Bug]           Kategorie "DHCP" fehlt in der Listeneditierung<br>
[Bug]           Kategorie "DHCP" fehlt im CSV-Import<br>
[Bug]           Benachrichtigungen: Tage verhalten sich anders als Monate<br>
[Bug]           JDisc Import: Controller Aufruf erzeugt eine unverständliche Felermeldung wenn kein Standard Server definiert ist<br>
[Bug]           Objekte werden unnötig mehrfach gesperrt<br>
[Bug]           Legende in Verkabelungsansicht überlagert Informationen<br>
[Bug]           Fehlerhafte Darstellung von Icons im Listenbrowser<br>
[Bug]           Attribute-Darstellung inkorrekt bei Check_MK-Host-Tags<br>
[Bug]           Pfeil für die Sortierung sortiert nicht<br>
[Bug]           CMDB-Explorer hängt sich bei Standort-Objekten auf, wenn nur auf diese eine Berechtigung zum Ansehen besteht<br>
[Bug]           Bei Klick auf "Suche" in der Breadcrumb-Zeile wird eine leere Seite angezeigt<br>
[Bug]           Anzahl anzuzeigender Objekte fehlerhaft<br>
[Bug]           Änderungen am Attribut "Einschub" über den CSV-Import im Logbuch nicht nachvollziehbar<br>
[Bug]           Experteneinstellung "auth.use-in-location-tree" deaktiviert für alle User die Root-Lokation im Standort-Browser<br>
[Bug]           Tags werden nicht in der Suche gefunden<br>
[Bug]           Jeder Login-berechtigte Benutzer darf ein Update von i-doit durchführen<br>
[Bug]           Objekt-Beziehung (Mehrere Objekte) wird bei Massenänderung nicht übernommen<br>
[Bug]           Positionen im Schrank zur Auswahl, die belegt sind<br>
[Bug]           Sprachkonstanten werden im Editiermodus bei Kategorieerweiterungen übersetzt<br>
[Bug]           Fehler bei Berechnung der Raid Kapazität in der Liste Lokaler Massenspeicher -> Gerät<br>
[Bug]           LIMIT in Report wird beim Export ignoriert<br>
[Bug]           Name des validierten Feldes in der Fehlermeldung unter Umständen uneindeutig<br>
[Bug]           Status der Einträge im Dialog-Admin werden übersetzt dargestellt<br>
[Bug]           Überflüssiger Scrollbalken in der Listeneditierung<br>
[Bug]           Systemfehlermeldung bei Exportieren ohne Standortobjekt<br>
[Bug]           Diagrammtypen im Widget "Diagramm" in Auswahl vertauscht<br>
[Bug]           Speichereinheit-Anzeige in Widget "Rechner" in "RAID Kapazität" wird nicht angepasst<br>
[Bug]           Interner "i-doit Status" kann fälschlicherweise als Filter unter "CMDB-Status" ausgewählt werden<br>
[Bug]           Erster Workflow-Parameter wird überschrieben nach Neuerstellung eines anderen Parameters<br>
[Bug]           Keine Status-Auswahl unter "Workflows->Workflows" möglich<br>
[Bug]           Button "Abbrechen" fehlt bei "Neue E-Mail-Vorlage erstellen"<br>
[Bug]           Falsche Anzeige des Screens oder der Button nach "Abbrechen" oder "Speichern" einer Benachrichtigungs- oder E-Mail-Vorlage<br>
[Bug]           Gelöschte Report-Kategorie wird im Treebrowser weiter angezeigt<br>
[Bug]           Fehlender "Abbrechen"-Button im Abfrage-Editor des Report-Managers<br>
