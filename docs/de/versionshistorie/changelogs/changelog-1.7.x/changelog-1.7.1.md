# Changelog 1.7.1

[Neue Funktion] Api: Möglichkeit zum Archivieren eines Objektes (Parameter "status" in Methode cmdb.object.delete)<br>
[Neue Funktion] Neue Felder "Freier-" und "Belegter Speicher" in Kategorie Laufwerk<br>
[Neue Funktion] JDisc-Import: Berücksichtigung von freiem und benutzem Speicherplatz beim Import von Laufwerken<br>
[Verbesserung]  Export Funktion für Objektlisten als CSV<br>
[Verbesserung]  QR-Code Konfiguration um QR-Code Printer ergänzt<br>
[Verbesserung]  Unfertige Objekte Löschen: Anzeige der Objekte<br>
[Verbesserung]  Kategorien in den Konditionseinstellungen eines Reports nun durchsuchbar<br>
[Verbesserung]  Anzeige von E-Mail-Adressen als klickbarer Link in Reports<br>
[Verbesserung]  Suche: Neue Funktion Deep Search durchsucht auch Teilbegriffe (in Systemeinstellungen als Standard definierbar)<br>
[Änderung]      Entfernen der Sprachauswahl beim Login (die Auswahl führte dazu, dass die konfigurierte Sprache nicht verwendet wurde)<br>
[Änderung]      Umbenennung der Kategorie "Zugewiesene Endgeräte" in "Arbeitsplatzkomponenten"<br>
[Bug]           OCS-Import: Geschwindigkeit von Ports werden nicht richtig importiert<br>
[Bug]           Gastsysteme verschwinden aus einem Cluster, nachdem die Verwaltungsinstanz gesetzt wurde<br>
[Bug]           "Host Resourcen" aus der Kategorie Virtuelle Geräte werden nicht von vollständig angezeigt.<br>
[Bug]           Report View "Verkabelung" erzeugt Fehlermeldung<br>
[Bug]           Lesezeichen-Reihenfolge läßt sich nicht ändern<br>
[Bug]           CSV-Import von Informationen in Kategorie "WAN-Leitungen" nur unter bestimmten Bedingungen möglich<br>
[Bug]           JDisc-Import: Speicherüberlauf bei sehr großer Anzahl zu importierender Ports<br>
[Bug]           Interfaces können nicht mehr angelegt werden<br>
[Bug]           CSV-Import über die Konsole erstellt keine Logbuch-Einträge<br>
[Bug]           Chassis Einstellungen können nicht gespeichert werden<br>
[Bug]           Trial Meldung wird angezeigt trotz gültiger Lizenz<br>
[Bug]           Fehler beim Speichern der Kategorie "Zugeweisene Objekte"<br>
[Bug]           Falsches ROW_FORMAT in zwei MySQL Tabellen verursacht Fehler bei Installation in MySQL 5.7<br>
[Bug]           Speicherüberlauf beim CSV-Export eines Reports mit sehr vielen Inhalten<br>
[Bug]           Leere Darstellung von " > " beim Standortpfad in Reports<br>
[Bug]           Kategorie SLA in Service wird nicht korrekt gespeichert und kann nicht mehr gelöscht werden<br>
[Bug]           Darstellungseinstellung Standard-Baumansicht stellt sich nach Klick auf eine Objekttyp-Gruppe wieder auf Objektsicht zurück<br>
[Bug]           Einige Button unter Beziehungen bei Status "Archiviert" und "Gelöscht" anwählbar, auch wenn keine Objekte vorhanden<br>
[Bug]           JDisc Standard Profil bei Erstellung einer Objekttyp-Konfiguration nicht vorhanden<br>
[Bug]           Fehler beim Aufruf einer Objektliste mit dem Attribut "VLAN-ID" aus der Kategorie "WAN-Leitung"<br>
[Bug]           Kategorie Buchhaltung kann nicht gespeichert werden, wenn kein "Datum der Anschaffung" hinterlegt wurde<br>
[Bug]           Kategorie "Rechteverwaltung" taucht zusätzlich in der Kategorie-Liste auf.<br>
[Bug]           Lizenzschlüssel werden nur gespeichert, wenn ein Ablaufdatum angegeben wird.<br>
[Bug]           Kategorie Buchhaltung lässt sich nicht bei der Anlage von Objekten über die Übersichtsseite pflegen<br>
[Bug]           Fehler beim Aufruf einer benutzerdefinierten Kategorie über Suchergebnisse<br>
[Bug]           "Typ" wird beim JDisc-Import nicht ins Logbuch geschrieben<br>
[Bug]           Bei Benutzung eines Filters, zeigt die Listeneditierung zwar die einzelnen Zeilen, diese aber nur mit leeren Inhalten an<br>
[Bug]           checkmk_transfer.sh wirft PHP Fatal Error<br>
[Bug]           Datumsformate innerhalb der Listeneditierung nicht einheitlich<br>
[Bug]           Standort-Pfad im Report besteht lediglich aus dem Zeichen ><br>
[Bug]           Fehler beim Aufruf von Objektlisten aktivem CMDB-Status-Filter aus dem my-doit-Bereich<br>
[Bug]           Neue Dateiversion kann nicht hochgeladen werden<br>
[Bug]           Templates vom Objekttyp Gebäude werden nicht als Template sondern als Objekt im Zustand Normal gespeichert.<br>
[Bug]           Das Anlegen neuer Wartungen ist nicht möglich<br>
[Bug]           Inhalte aus benutzerdefinierten Kategorien werden in Listenansicht nicht dargestellt, sobald diese bearbeitet wurde<br>
[Bug]           JEDI-/JDisc-Import setzt Kommastelle bei Laufwerkskapazitäten falsch<br>
[Bug]           Systemfehlermeldung nach Klick auf "Purge" unter "Benachrichtigungen"<br>
[Bug]           Kündigungsinformationen werden in Listeneditierung nicht auf alle Objekte übertragen, wenn die Informationen in der Zeile "Alle Objekte" eingetragen werden<br>
[Bug]           Zugewiesene Objekte in Kategorie "Stacking" lassen sich nicht entfernen, wenn keine weiteren Zuweisungen mehr vorhanden sind.<br>
[Bug]           Attribute aus Kategorie "Organisation" verschwinden aus der Konfiguration der Listenansicht<br>
[Bug]           Beim Duplizieren eines Kontakts ist die E-Mail-Adresse beim Duplikat doppelt vorhanden <br>
[Bug]           Abfrage eines leeren Dialog-Plus-Felds im Abfrage-Editor ist nicht möglich<br>
[Bug]           Report berücksichtigt bei Bedingung "ungleich" keine Leerwerte<br>
[Bug]           Überflüssiger "Editieren"-Button in Unterkategorie "Service - Service Typ"<br>
[Bug]           Versionsnummer in Kategorie Betriebssystem läßt sich auch ohne vorherige Betriebssystem-Objektauswahl ändern<br>
[Bug]           Im JDisc-Profil erscheint kein Hinweis, dass die Verbindung zum gewählten Server fehlschlägt<br>
[Bug]           Purge-Button ist aktiv, obwohl keine JDisc-Konfiguratonen angelegt sind<br>
[Bug]           Navigationsbaum wird beim Aufruf eines JDisc-Profils nicht aufgeklappt<br>
[Bug]           Beim Anklicken der Objekt-Anzeigefelder in Kategorie "Beziehungsdetails" werden die Objekte ausgeblendet<br>
[Bug]           Lesezeichen-Definitionen werden komplett gelöscht durch "falsches" Übernehmen<br>
[Bug]           Zählerfunktion in Verkabelungsimport grafisch kaputt<br>
[Bug]           Bei der Auswahl des deutschen Datumsformats wird in Objektlisten die englische Darstellung genutzt<br>
[Bug]           Report-View "CMDB-Status Änderungen" stellt nicht alle Änderungen dar<br>
[Bug]           Fehler bei der Eingabe von zusätzlichen Leerzeichen in der Suche<br>
[Bug]           Änderung eines Betriebssystems zeigt im Logbuch lediglich die ID des verknüpften Objekts<br>
[Bug]           Verwendung einiger Sonderzeichen führt zu Fehler in der Suche<br>
[Bug]           Reader sieht auf Übersichtsseite einen "Editier"-Button<br>
[Bug]           Filter "Quelle" im Logbuch filtert nicht korrekt auf "Benutzer"<br>
[Bug]           Fehlermeldung im Widget "CMDB Status Lebenszyklus" nach Hinzufügen ins Dashboard<br>
[Bug]           CSV-Import besagt fälschlicherweise, dass die Kategorie "Datensicherung" nicht dem Objekttyp zugewiesen ist<br>
[Bug]           Reports mit benutzerdefinierten Kategorien geben Objekte fälschlicherweise mehrfach aus<br>
[Bug]           Suggestion-Feld der Suche wird nur einmal aktualisiert<br>
[Bug]           Logbuch-Eintrag zu Softwarezuweisung zeigt nur die ID statt des Namens<br>
