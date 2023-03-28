# Changelog 1.8.3

[Verbesserung]  Objektlisten: Performance des Attributs "Betriebssystem" aus der Kategorie "Betriebssystem" verbessert
[Verbesserung]  Im CMDB-Explorer werden die Beziehungsrichtungen nun besser dargestellt
[Verbesserung]  Es werden alle Referenzen des angeklickten Objekts im CMDB-Explorer markiert
[Verbesserung]  Button "Teilstring Suche in Objektlisten als Standard setzen" unter Tools / Datenbank in der Verwaltung
[Verbesserung]  Button zum Entfernen eines Filters in den Objektlisten
[Verbesserung]  JDISC Import Option "Objekttyp aktualisieren"
[Verbesserung]  Verbundene Kabel können gespeichert werden, wenn kein Anschluss definiert ist
[Bug]           Vertragsbeginn und -ende lassen sich nicht als Bedingung auswählen
[Bug]           Einspielen eines Profils im Quick Configuration Wizard wirft Fehlermeldung
[Bug]           Die Spalten einer Objekt-Liste wurde nicht aktualisiert nachdem diese über die Objekt-Listen Konfiguration bearbeitet wurde
[Bug]           Importe/API erstellen keinen Eintrag in Kategorie "Aktuelle Datei"
[Bug]           DB-Fehler nach Klick auf "Check_MK:Hostmerkmale" unter Dialog-Admin
[Bug]           Eingegebene Zahlen in Textfeldern werden wieder dargestellt
[Bug]           Breiten- und Längengrad können nicht über den CSV-Import importiert werden
[Bug]           In der Hostadresse werden die logischen Ports im Feld "Verknüpfter Port" wieder dargestellt
[Bug]           Über die Kontaktzuweisung erstellte Personen werden nicht in der globalen Suche gefunden
[Bug]           Wiki-Link wird bei verborgenen Feldern nicht länger dargestellt
[Bug]           Bei der Port Kategorie wird eine Fehlermeldung ausgegeben wenn der i-doit MySQL-Benutzer keine Ausführungsrechte besitzt um Prozeduren auszuführen
[Bug]           Kommas hinter den Template-Namen
[Bug]           post_max_size wird zwei Mal in der Systemübersicht angezeigt
[Bug]           Neue Einträge in der Kategorie "Hostadresse" werden immer als Primär gekenntzeichnet
[Bug]           Modell ist beim Editieren nicht mehr ausgefüllt, wenn der Inhalt aus JDisc stammt
[Bug]           LDAP: Beim einloggen eines LDAP Benutzers wird dieser immer der eingestellten LDAP Standardgruppe hinzugefügt
[Bug]           Monitoring Instanz kann nicht auf "-" gesetzt werden
[Bug]           Bedingungen auf das Attribut "Einschub" werden im Report-Manager nicht korrekt umgesetzt
[Bug]           Löschen von Kabel hinterlässt Beziehung zwischen den verkabelten Objekten
[Bug]           Session Timeout-Wert von <= 0 oder >= 99999[..] führt dazu, dass man sich nicht mehr einloggen kann
[Bug]           Entfernen einer Slotzuweisung lässt einen Eintrag in "räumlich zugeordnete Objekte" zurück
[Bug]           Attributsauswahl für Kategorie "Betriebssystem" im Report-Manager leer
[Bug]           Wechsel von Suchergebnis auf CMDB-Explorer öffnet Suchmaske
[Bug]           Report Manager: Komma und Punkt wird in Währungsfeldern vertauscht
[Bug]           Report Manager: Layer-3-Netzdetails werden nicht angezeigt, wenn über eine benutzerdefinierte Kategorie hinweg abgefragt wird
[Bug]           Dateiversionen: Wird die aktuellste Version gelöscht, wird nicht die vorherige Version angeboten
[Bug]           Falsche Übersetzung in benutzerdefinierten Kategorien
[Bug]           Leitungsnetz wird im Objekt Browser nicht angezeigt
[Bug]           Falsches Datumsformat in Kategorie "Vertragszuweisung"
[Bug]           Das Erstellen Recht auf "Objekte vom Typ" (Alle) zeigt nun keine weiteren Objekte in der Objektliste an
[Bug]           Suchstring wird fehlerhaft manipuliert beim suchen
[Bug]           API-Logs werden auch geschrieben, wenn die Einstellung hierzu deaktiviert wurde
[Bug]           "Root" im Standortpfad der Objektlisten ausblenden
[Bug]           Wartungs-Modul: Mehrfache Anrede bei Auswahl von mehreren Objekten
[Bug]           Raid-Kapazität in Speichersystemen wird immer in GB dargestellt
[Bug]           Logout nicht möglich bei der Verwendung von SSO
[Bug]           Felder in der LDAP-Konfiguration beim Aufruf der Bearbeitungsansicht leer
[Bug]           Login im AdminCenter mit belliebigem Account - außer admin - ohne Paswort möglich
[Bug]           PHP-Error beim Aufruf der PDU-Kategorie nach fehlerhafter SNMP-Abfrage
[Bug]           Vertragsdaten werden bei CSV-Import nicht aktualisiert
[Bug]           Bei Geo-Koordinaten wird der Nach-Komma-Anteil abgeschnitten bei Verwendung von Komma
[Bug]           OCS: Port-Beschreibung wird nicht importiert
[Bug]           Falsche Logbuch-Informationen zu Schränken, wenn ein Objekt umpositioniert wird
[Bug]           JDisc Import: Beim Modus "Aktualisieren (Neu Inventarisiert)" werden neu gescannte Geräte nicht richtig importiert wenn diese in einer JDisc-Gruppe zugewiesen sind
[Bug]           Über die Übersichtsseite kann die Verknüpfung zu einem Mobiltelefon nicht entfernt werden
[Bug]           Sonderzeichen werden in der Passwort Kategorie nicht gespeichert "<>"
[Bug]           CSV-Import: Dateiendung .csv darf keine Großbuchstaben haben
[Bug]           Benachrichtigung "Veränderte Objekte": Schwellwert hat keinen Einfluss auf die Benachrichtigung
[Bug]           Kategorie "DHCP" fehlt in der Listeneditierung
[Bug]           Kategorie "DHCP" fehlt im CSV-Import
[Bug]           Benachrichtigungen: Tage verhalten sich anders als Monate
[Bug]           JDisc Import: Controller Aufruf erzeugt eine unverständliche Felermeldung wenn kein Standard Server definiert ist
[Bug]           Objekte werden unnötig mehrfach gesperrt
[Bug]           Legende in Verkabelungsansicht überlagert Informationen
[Bug]           Fehlerhafte Darstellung von Icons im Listenbrowser
[Bug]           Attribute-Darstellung inkorrekt bei Check_MK-Host-Tags
[Bug]           Pfeil für die Sortierung sortiert nicht
[Bug]           CMDB-Explorer hängt sich bei Standort-Objekten auf, wenn nur auf diese eine Berechtigung zum Ansehen besteht
[Bug]           Bei Klick auf "Suche" in der Breadcrumb-Zeile wird eine leere Seite angezeigt
[Bug]           Anzahl anzuzeigender Objekte fehlerhaft
[Bug]           Änderungen am Attribut "Einschub" über den CSV-Import im Logbuch nicht nachvollziehbar
[Bug]           Experteneinstellung "auth.use-in-location-tree" deaktiviert für alle User die Root-Lokation im Standort-Browser
[Bug]           Tags werden nicht in der Suche gefunden
[Bug]           Jeder Login-berechtigte Benutzer darf ein Update von i-doit durchführen
[Bug]           Objekt-Beziehung (Mehrere Objekte) wird bei Massenänderung nicht übernommen
[Bug]           Positionen im Schrank zur Auswahl, die belegt sind
[Bug]           Sprachkonstanten werden im Editiermodus bei Kategorieerweiterungen übersetzt
[Bug]           Fehler bei Berechnung der Raid Kapazität in der Liste Lokaler Massenspeicher -> Gerät
[Bug]           LIMIT in Report wird beim Export ignoriert
[Bug]           Name des validierten Feldes in der Fehlermeldung unter Umständen uneindeutig
[Bug]           Status der Einträge im Dialog-Admin werden übersetzt dargestellt
[Bug]           Überflüssiger Scrollbalken in der Listeneditierung
[Bug]           Systemfehlermeldung bei Exportieren ohne Standortobjekt
[Bug]           Diagrammtypen im Widget "Diagramm" in Auswahl vertauscht
[Bug]           Speichereinheit-Anzeige in Widget "Rechner" in "RAID Kapazität" wird nicht angepasst
[Bug]           Interner "i-doit Status" kann fälschlicherweise als Filter unter "CMDB-Status" ausgewählt werden
[Bug]           Erster Workflow-Parameter wird überschrieben nach Neuerstellung eines anderen Parameters
[Bug]           Keine Status-Auswahl unter "Workflows->Workflows" möglich
[Bug]           Button "Abbrechen" fehlt bei "Neue E-Mail-Vorlage erstellen"
[Bug]           Falsche Anzeige des Screens oder der Button nach "Abbrechen" oder "Speichern" einer Benachrichtigungs- oder E-Mail-Vorlage
[Bug]           Gelöschte Report-Kategorie wird im Treebrowser weiter angezeigt
[Bug]           Fehlender "Abbrechen"-Button im Abfrage-Editor des Report-Managers
