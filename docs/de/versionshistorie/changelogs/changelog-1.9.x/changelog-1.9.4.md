# Changelog 1.9.4

[Verbesserung] Neue TTS Schnittstelle zu Zammad  
[Verbesserung] Massenlöschung in der Massenänderung  
[Verbesserung] Das Check_MK transfer Skript erzeugt Änderungen in Check_MK 1.4  
[Verbesserung] Anzeige von "Layer-3 Netzen" in Listenansicht  
[Bug] Ändern des Passworts für das Admin-Center im Admin-Center selbst führt zu fehlerhafter Darstellung von Passwörtern  
[Bug] Kategorie "Gruppenmitgliedschaft": In der Suchleiste wird der Objekttyp-Filter anstatt der Kategorie-Filter verwendet  
[Bug] idoit.search liefert keine Ergebnisse  
[Bug] OCS-Import: Bei bestimmten Hostadressen wurde eine falsche Netzadresse kalkuliert  
[Bug] Listeneditierung: Validierung in Kategorie "Hostadresse" schlägt fehl, obwohl es FQDN nur einmal global gibt  
[Bug] Beim ausführen eines Reports wird eine Datenbankfehlermeldung ausgegeben wenn die Attribute "Anschlussart" und "Verbunden mit" aus der Kategorie "Anschlüsse" verwendet werden.  
[Bug] Falsche Validierung beim Speichern von Kategorien in der Listeneditierung fordert Ganzzahl  
[Bug] Schaltfläche "Neues Recht" in Kategorie "Rechtevergabe" unter "Personengruppen" hat keine Funktion  
[Bug] Falscher Standard-Filter in Objektlisten ausgewählt  
[Bug] Patchlevel wird in Kategorie "Softwarezuweisung" nicht angezeigt  
[Bug] Versionen: Patchlevel wird bei "Installationen" nicht angezeigt  
[Bug] Performanceprobleme in der Listeneditierung  
[Bug] Kategorie "Monitoring" nicht im Abfrage-Editor verfügbar  
[Bug] JDISC: Clusterdienstzuweisungen werden nicht komplett importiert  
[Bug] CheckMK: Hosttags UTF8/ASCII Fehlermeldung in CheckMK-Instanz  
[Bug] Sortierung nach Objektanzahl in Listenansicht der Objekttypen inkorrekt  
[Bug] Allgemeine Einstellungen werden nicht korrekt angezeigt  
[Bug] Mehrfache Objekt Browser in einzelner Kategorie führen zu überschriebenen Werten  
[Bug] Anzeige eines Bindestrichs in der Objektliste bei mehrfachauswahl Dialog+feldern  
[Bug] CMDB-Explorer Personengruppenmitgliedschaften werden nicht aktualisiert  
[Bug] Einträge im Dialog-Admin können nicht gespeichert werden wenn der Name nicht geändert wird  
[Bug] Hostadresse-Alias kann nicht gelöscht werden  
[Bug] JDISC Import: IP-Adressen werden nicht korrekt aktualisiert  
[Bug] Filtern bei Reportausgaben mit den Buchstaben "B", "N", "P" und "S" nicht möglich  
[Bug] Objektbrowser: Der "Alle" Auswahl Button fehlt  
[Bug] Sortierung der Verfügbaren Slots in einem Chassis fehlerhaft  
[Bug] Benutzerdefinierte Kategorien können mit Dialog+ Feldtypen in der Listenansicht der Objekttypen nicht sortiert werden  
[Bug] Objektliste springt auf anderen Objekttypen wenn mehr als 50 Objekte angezeigt werden sollen  
[Bug] Mouseover-Text für Löschen-Button in Layer 3-Netz IP-Liste wird falsch dargestellt  
[Bug] In workflows wird statt einer Url die IP-Adresse der I-Doit installation eingetragen  
[Bug] Sortierung nach CMDB-Status in Objektlisten nur möglich wenn es an letzter Stelle steht  
[Bug] Bei Benutzerdefinierte Kategorien werden immer Logs aus dem Rechtesystem geschrieben.  
[Bug] Beim Login wird PHP-Fehlermeldung zu LDAP angezeigt  
[Bug] Wechsel von statischer auf dynamische Objektgruppe schlägt fehl  
[Bug] Modell-Hersteller kann nicht via Dialog-Admin geändert werden  
[Bug] CSV Import: Nicht möglich, zugewiesene Objekte über spezifische Kategorie "Chassis" hinzuzufügen  
[Bug] Benachrichtigungen an Kontakten mit zugewiesener Rolle nicht möglich  
[Bug] Service Logbuch: Option "Gruppieren nach" liefert falsche Ergebnisse  
[Bug] CSV-Import: Objekte mit gleichen Objekttitel in verschieden Objekttypen werden nicht korrekt zugewiesen  
[Bug] Archivierte Räumlich zugeordnete Objekte werden in der Listenansicht angezeigt  
[Bug] Chassis in einem Rack fehlerhafte Darstellung in der Raumansicht  
[Bug] Verbinden von Anschlüssen über "Einzelnen Anschluss verbinden" nicht möglich  
[Bug] Verkabelungsbrowser kann nicht über Recht "Kategorien in Objekttyp" verrechtet werden  
[Bug] CSV Import: Spezifische Unter-Kategorie "Installation" wurden nicht alle Eltern-Kategorien aufgelistet.  
[Bug] Verbinden von Anschlüssen über den Button in der Übersicht der Anschlüsse nicht möglich.  
[Bug] Im Rechtesystem werden bestimmte Rechte übernommen, wenn man die Bedingung ändert  
[Bug] Kein Zugriff auf "Rechtesystem zurücksetzen" nach Installation mit install.sh  
[Bug] Kategorie "Ports": Titel mit Überlänge werden abgeschnitten und können nicht mehr gefiltert werden  
[Bug] Einträge im Dialog-Admin mit Sonderzeichen können nicht editiert werden  
[Bug] Sync von LDAP-Daten archiviert Benutzer "admin"  
[Bug] Objekte werden mit einer falschen Sperrzeit aufgelistet.  
[Bug] Leerer Objekttitel bei Personen-Objekten aus dem CSV-Import unter bestimmten Bedingungen  
[Bug] Fehlendes Recht Einzelverkabelungen führt in eine Fehlermeldungs-Loop  
[Bug] Fehlerhafte URL beim Abmelden aus der Raumplanung  
[Bug] Horizontale Scrollleiste in Kategorie "Rechnung" fehlt  
[Bug] Im QCW werden bei der Suggestion Search Ordnerkategorien (Netzwerk) nicht angezeigt  
[Bug] Verzögerungseinstellung unter Quickinfo funktioniert nicht  
[Bug] Attribut "Kontaktzuweisung" gibt in Benachrichtigungen lediglich die ID aus  
[Bug] Angegebenes Upload-Verzeichnis wird nicht berücksichtigt  
[Bug] Links verweisen auf das Objekt und nicht auf den Link  
[Bug] Beziehungen in der Kategorie "Prüfung" werden doppelt vergeben  
[Bug] CSV-Import: DBMS nicht verfügbar  
[Bug] [open] Quickinfo wird beim Drüberfahren nicht angezeigt  
[Bug] Link mit Fragezeichen im AdminCenter führt zu Verlust der Menüleiste nach erneutem Login  
[Bug] Dialog-Admin: Benutzerdefinierte Attribute werden nicht in Objektliste angezeigt  
[Bug] Setting-Bezeichnung "maxlengths" bei System-wide setting unklar  
[Bug] JDISC-Option "Erstellen" setzt die bereits verwendeten Custom Identifier nicht auf "Obsolete"  
[Bug] Import von mehreren IP-Adressen über den CSV-Import nicht möglich  