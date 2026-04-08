---
search:
  exclude: true
---
# Changelog 1.9.4
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Verbesserung] Neue TTS Schnittstelle zu Zammad<br>
[Verbesserung] Massenlöschung in der Massenänderung<br>
[Verbesserung] Das Check_MK transfer Skript erzeugt Änderungen in Check_MK 1.4<br>
[Verbesserung] Anzeige von "Layer-3 Netzen" in Listenansicht<br>
[Bug] Ändern des Passworts für das Admin-Center im Admin-Center selbst führt zu fehlerhafter Darstellung von Passwörtern<br>
[Bug] Kategorie "Gruppenmitgliedschaft": In der Suchleiste wird der Objekttyp-Filter anstatt der Kategorie-Filter verwendet<br>
[Bug] idoit.search liefert keine Ergebnisse<br>
[Bug] OCS-Import: Bei bestimmten Hostadressen wurde eine falsche Netzadresse kalkuliert<br>
[Bug] Listeneditierung: Validierung in Kategorie "Hostadresse" schlägt fehl, obwohl es FQDN nur einmal global gibt<br>
[Bug] Beim ausführen eines Reports wird eine Datenbankfehlermeldung ausgegeben wenn die Attribute "Anschlussart" und "Verbunden mit" aus der Kategorie "Anschlüsse" verwendet werden.<br>
[Bug] Falsche Validierung beim Speichern von Kategorien in der Listeneditierung fordert Ganzzahl<br>
[Bug] Schaltfläche "Neues Recht" in Kategorie "Rechtevergabe" unter "Personengruppen" hat keine Funktion<br>
[Bug] Falscher Standard-Filter in Objektlisten ausgewählt<br>
[Bug] Patchlevel wird in Kategorie "Softwarezuweisung" nicht angezeigt<br>
[Bug] Versionen: Patchlevel wird bei "Installationen" nicht angezeigt<br>
[Bug] Performanceprobleme in der Listeneditierung<br>
[Bug] Kategorie "Monitoring" nicht im Abfrage-Editor verfügbar<br>
[Bug] JDISC: Clusterdienstzuweisungen werden nicht komplett importiert<br>
[Bug] CheckMK: Hosttags UTF8/ASCII Fehlermeldung in CheckMK-Instanz<br>
[Bug] Sortierung nach Objektanzahl in Listenansicht der Objekttypen inkorrekt<br>
[Bug] Allgemeine Einstellungen werden nicht korrekt angezeigt<br>
[Bug] Mehrfache Objekt Browser in einzelner Kategorie führen zu überschriebenen Werten<br>
[Bug] Anzeige eines Bindestrichs in der Objektliste bei mehrfachauswahl Dialog+feldern<br>
[Bug] CMDB-Explorer Personengruppenmitgliedschaften werden nicht aktualisiert<br>
[Bug] Einträge im Dialog-Admin können nicht gespeichert werden wenn der Name nicht geändert wird<br>
[Bug] Hostadresse-Alias kann nicht gelöscht werden<br>
[Bug] JDISC Import: IP-Adressen werden nicht korrekt aktualisiert<br>
[Bug] Filtern bei Reportausgaben mit den Buchstaben "B", "N", "P" und "S" nicht möglich<br>
[Bug] Objektbrowser: Der "Alle" Auswahl Button fehlt<br>
[Bug] Sortierung der Verfügbaren Slots in einem Chassis fehlerhaft<br>
[Bug] Benutzerdefinierte Kategorien können mit Dialog+ Feldtypen in der Listenansicht der Objekttypen nicht sortiert werden<br>
[Bug] Objektliste springt auf anderen Objekttypen wenn mehr als 50 Objekte angezeigt werden sollen<br>
[Bug] Mouseover-Text für Löschen-Button in Layer 3-Netz IP-Liste wird falsch dargestellt<br>
[Bug] In workflows wird statt einer Url die IP-Adresse der I-Doit installation eingetragen<br>
[Bug] Sortierung nach CMDB-Status in Objektlisten nur möglich wenn es an letzter Stelle steht<br>
[Bug] Bei Benutzerdefinierte Kategorien werden immer Logs aus dem Rechtesystem geschrieben.<br>
[Bug] Beim Login wird PHP-Fehlermeldung zu LDAP angezeigt<br>
[Bug] Wechsel von statischer auf dynamische Objektgruppe schlägt fehl<br>
[Bug] Modell-Hersteller kann nicht via Dialog-Admin geändert werden<br>
[Bug] CSV Import: Nicht möglich, zugewiesene Objekte über spezifische Kategorie "Chassis" hinzuzufügen<br>
[Bug] Benachrichtigungen an Kontakten mit zugewiesener Rolle nicht möglich<br>
[Bug] Service Logbuch: Option "Gruppieren nach" liefert falsche Ergebnisse<br>
[Bug] CSV-Import: Objekte mit gleichen Objekttitel in verschieden Objekttypen werden nicht korrekt zugewiesen<br>
[Bug] Archivierte Räumlich zugeordnete Objekte werden in der Listenansicht angezeigt<br>
[Bug] Chassis in einem Rack fehlerhafte Darstellung in der Raumansicht<br>
[Bug] Verbinden von Anschlüssen über "Einzelnen Anschluss verbinden" nicht möglich<br>
[Bug] Verkabelungsbrowser kann nicht über Recht "Kategorien in Objekttyp" verrechtet werden<br>
[Bug] CSV Import: Spezifische Unter-Kategorie "Installation" wurden nicht alle Eltern-Kategorien aufgelistet.<br>
[Bug] Verbinden von Anschlüssen über den Button in der Übersicht der Anschlüsse nicht möglich.<br>
[Bug] Im Rechtesystem werden bestimmte Rechte übernommen, wenn man die Bedingung ändert<br>
[Bug] Kein Zugriff auf "Rechtesystem zurücksetzen" nach Installation mit install.sh<br>
[Bug] Kategorie "Ports": Titel mit Überlänge werden abgeschnitten und können nicht mehr gefiltert werden<br>
[Bug] Einträge im Dialog-Admin mit Sonderzeichen können nicht editiert werden<br>
[Bug] Sync von LDAP-Daten archiviert Benutzer "admin"<br>
[Bug] Objekte werden mit einer falschen Sperrzeit aufgelistet.<br>
[Bug] Leerer Objekttitel bei Personen-Objekten aus dem CSV-Import unter bestimmten Bedingungen<br>
[Bug] Fehlendes Recht Einzelverkabelungen führt in eine Fehlermeldungs-Loop<br>
[Bug] Fehlerhafte URL beim Abmelden aus der Raumplanung<br>
[Bug] Horizontale Scrollleiste in Kategorie "Rechnung" fehlt<br>
[Bug] Im QCW werden bei der Suggestion Search Ordnerkategorien (Netzwerk) nicht angezeigt<br>
[Bug] Verzögerungseinstellung unter Quickinfo funktioniert nicht<br>
[Bug] Attribut "Kontaktzuweisung" gibt in Benachrichtigungen lediglich die ID aus<br>
[Bug] Angegebenes Upload-Verzeichnis wird nicht berücksichtigt<br>
[Bug] Links verweisen auf das Objekt und nicht auf den Link<br>
[Bug] Beziehungen in der Kategorie "Prüfung" werden doppelt vergeben<br>
[Bug] CSV-Import: DBMS nicht verfügbar<br>
[Bug] [open] Quickinfo wird beim Drüberfahren nicht angezeigt<br>
[Bug] Link mit Fragezeichen im AdminCenter führt zu Verlust der Menüleiste nach erneutem Login<br>
[Bug] Dialog-Admin: Benutzerdefinierte Attribute werden nicht in Objektliste angezeigt<br>
[Bug] Setting-Bezeichnung "maxlengths" bei System-wide setting unklar<br>
[Bug] JDISC-Option "Erstellen" setzt die bereits verwendeten Custom Identifier nicht auf "Obsolete"<br>
[Bug] Import von mehreren IP-Adressen über den CSV-Import nicht möglich<br>
