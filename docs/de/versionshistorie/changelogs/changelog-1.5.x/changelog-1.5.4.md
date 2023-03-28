# Changelog 1.5.4

[Verbesserung]  API: Neue automatische Existenzprüfung der angegebenen Objekt ID für die cmdb.category Methoden<br>
[Verbesserung]  Beschreibungsfeld aus Kategorie "Standort" wird nun in der anpassbaren Listenansicht zur Auswahl angeboten<br>
[Verbesserung]  Kategorie Service: Neues Feld "Service Nummer"<br>
[Bug]           Fehlende Lösch- und fehlerhafte Editierfunktion in der Service-Typ-Konfiguration<br>
[Bug]           Bearbeiten der Rechtekonfiguration innerhalb eines Kontakt-Objekts löscht die Rechte "Administrator", "Ansehen" und "Löschen".<br>
[Bug]           In Kategorie "Raid-Verbund" stehen alle Controller aller Objekte zur Auswahl<br>
[Bug]           Fehler beim Speichern einer Host-Adresse wenn das Attribut Hostname als Pflichtfeld definiert ist<br>
[Bug]           Beim JDisc-Import werden Speicherkapazitäten nicht korrekt ausgelesen und importiert.<br>
[Bug]           Rechtekonfiguration von Personengruppen wird beim Duplizieren nicht übernommen<br>
[Bug]           OCS-Import ignoriert bei der Namensvergabe die Unique-Einstellung<br>
[Bug]           Reports die den CMDB-Status "DELIVERED_FROM_REPAIR" abfragen, können nicht ausgeführt werden<br>
[Bug]           Kategorie "Datenbankzuweisung": Neu angelegte Inhalte werden nicht gespeichert<br>
[Bug]           OCS-Import passt das Änderungsdatum des Objektes nicht an<br>
[Bug]           In Kategorie "Installation" können Lizenzobjekte eines benutzerdefinierten Objekttyps mit der spezifischen Kategorie "Lizenzzuweisung" nicht ausgewählt werden.<br>
[Bug]           Fehler beim Speichern einer benutzerdefinierten Kategorie mit Validierung<br>
[Bug]           Aktualisierung von Objekten über den CSV-Import passt das Änderungsdatum nicht an<br>
[Bug]           Erneuter Import von h-inventory XML-Dateien führt dazu, dass die Einstellung im Wert "primär" der IP-Adresse wechselt<br>
[Bug]           Auswahl der SAN-Zone im "SAN-Zoning Browser" ist nicht möglich<br>
[Bug]           CSV-Import: Standortzuweisung zu Objekten, die lediglich aus Ziffern bestehen ist nicht möglich,da diese als Objekt-IDs interpretiert werden.<br>
[Bug]           Kategorie "Allgemein" kann nicht bearbeitet werden, wenn diese einzeln verrechtet wird.<br>
[Bug]           Objekte ohne eigenes Icon verfügen in der Standort-Sicht über falsche Icons<br>
[Bug]           Deaktivierung der Quickinfo hat keine Auswirkung<br>
[Bug]           Löschen eines Vertragsendes bewirkt, dass Vertragsende und Nächstmögliches Vertragsende auf das aktuelle Datum gesetzt werden.<br>
[Bug]           Ausgabe der Zugriffs-URL zeigt zu allen Einträgen die primäre URL an.<br>
[Bug]           Kategorie Stacking: Lösen der Objektverknüpfungen lässt Beziehungen zurück<br>
[Bug]           Verkabelungsimport: Ports/Anschlüsse werden angelegt, jedoch nicht verkabelt.<br>
[Bug]           CSV-Import: Import einer Kontaktzuweisung in benutzerdefinierten Objekttyp bewirkt leere Zuweisung<br>
[Bug]           CMDB-Explorer zeigt browserabhängig unterschiedlich falsche Ergebnisse bei Verkabelungen an<br>
[Bug]           Report Manager: Kondition nach "Engekauft bei" ignoriert "!="<br>
[Bug]           Connection-Check zu JDisc-DB bleibt rot markiert auch bei positiver Rückmeldung<br>
[Bug]           Kategorie "Datenbankzuweisung" filtert archivierte Einträge nicht aus<br>
[Bug]           Login-Username kann mehrmals vergeben werden<br>
[Bug]           CMDB-Explorer zeigt mit einem Level 1 Filter doppelte Beziehungen nicht an<br>
[Bug]           Sortierung von IDs in Objektlisten ist falsch<br>
