# Changelog 1.2

[Erweiterung]    Komplett überarbeitetes benutzerspezifisches Dashboard
[Erweiterung]      Widget: Report Widget
[Erweiterung]      Widget: Generischer RSS Feed
[Erweiterung]      Widget: Bookmarks
[Erweiterung]      Widget: Vitalinformationen eines Objektes
[Erweiterung]      Widget: Externer Webinhalt
[Erweiterung]      Erweiterung des Kreisdiagramm Widgets
[Erweiterung]      Widget: Notizen
[Erweiterung]      Widget: Umrechner
[Erweiterung]      Widget: Lizenzübersicht
[Erweiterung]      Widget: Kalender
[Erweiterung]      Widget: CMDB Explorer
[Erweiterung]    Internationalisierung: Umstellung auf UTF-8 ermöglicht den Support nicht lateinischer Sprachen
[Erweiterung]    Menübaum Suche & Ausblenden nicht genutzter Objekttypen oder Kategorien
[Erweiterung]    Tastaturnavigation im Menübaum
[Erweiterung]    Benutzerspezifische Kategorien können nun "Multivalue" sein
[Erweiterung]    Dynamische Gruppen (Objekte)
[Erweiterung]    Kompatibilität zu JDisc Version 2.9 und 3.0.
[Erweiterung]   Das Rechtesystem wurde um einen neuen Rechtepfad erweitert, der es ermöglicht Kategorien in Objekttypen zu berechtigen
[Bugfix]        Objektlisten: Kapazitäten werden in Byte angezeigt
[Bugfix]        Wenn unter DNS-Domäne in der Hostadresse ein neuer Eintrag eingegeben wird, wird dieser nicht mehr neu angelegt
[Bugfix]        Der LDAP Controller zur Synchronisation von Benutzern hat den konfigurierten LDAP Filter nicht verwendet.
                In diesem Zusammenhang ist Vorsicht bei dem Sync von mehr als 1000 Active Directory Usern geboten. Die Konfigurationseinstellung
                MaxPageSize sollte hierfür entsprechend der Useranzahl erhöht werden.
[Bugfix]        Gemeinsamer Speicher: Die Namen der Objekte, die die LUNs zur Verfügung stellen wurden gekürzt
[Bugfix]        Verwaltung/Benutzereinstellungen/Objektlisten: In der Kategorie Schrank ist vertikale Einschübe 2x vorhanden
[Bugfix]        Nagios host state und nagios service state links funktionieren nicht richtig
[Bugfix]        Spezifische Kategorie "Routing": Die Gatewayadresse wird in der Liste nicht angezeigt
[Bugfix]        In Objektlisten wird das Feld "Übergeordnetes Objekt" der Kategorie "Logischer Standort" nicht angezeigt
[Bugfix]        Die Druckansicht wurde wiederhergestellt
[Bugfix]        Druckansicht: Verschiedene Kategorien werden fehlerhaft angezeigt
[Bugfix]        Personengruppenmitgliedschaft: Der Button zum Löschen fehlt!
[Bugfix]        Problem mit dem Default Gateway in der Hostadresse
[Bugfix]        Das Erstellen neuer Objekte vom Template hat ebenso neue Objekte für alle darin befindlichen Referenzen erzeugt
[Bugfix]        Nagios URL ist abgeschnitten
[Bugfix]        In der Portübersicht wird die Netzadresse anstatt der Hostadresse angezeigt
[Bugfix]        Archivierte und gelöschte Lizenzzuweisungen werden als in Benutzung gezählt
[Bugfix]        Umlautproblem im Titel der Benachrichtigungen
[Bugfix]        isys_file_version wirft einen foreign key error
[Bugfix]        Error beim Duplizieren von Personen
[Bugfix]        Personen: Zugewiesene Objekte lassen sich nicht archivieren
[Bugfix]        Templates: Speichert man in einem Personen-Template die Kategorie Stammdaten ab, verändert sich der Zustand des Templates auf "normal"
[Bugfix]        Baummenü Standortsicht: Wenn ein Objekttyp kein Icon hat, wird das Icon des vorherigen Objektes im Baum verwendet.
[Bugfix]        In den Vertragsdetails ist fälschlicherweise das Ende mit dem Start gleichgesetzt
[Bugfix]        IP-Adresse aus Layer 3 Netz zuordnen geht nicht, wenn die Wiki-URL konfiguriert ist
[Bugfix]        Verbindungen zwischen Objekten werden in gewissen Situationen gelöscht wenn über die Listeneditierung editiert wird
[Bugfix]        vitueller Host/virtuelle Switche: Man kann auch archivierte Ports auswählen.
[Bugfix]        Beim Klick auf Speichern sollte der editierte Wert der Dialog+ Liste abgespeichert werden
[Bugfix]        Kategorie Freigabenzugriff: Das Feld "Zugewiesene Objekte" muss "Zugewiesenes Objekt" heißen
[Bugfix]        Kategorie Vertragszuweisung: Das Kündigungsdatum wird falsch angegeben
[Bugfix]        SLA Kategorie funktioniert nicht und erzeugt Fehler bei der Suche
[Bugfix]        Kategorie Klimaanlage: Feld "Luftmenge" -> qm/h in cbm/h umbenennen
[Bugfix]        Spez. Kategorie vom Objekttypen "Objektgruppe" heißt Objekttyp-Gruppe. Sollte besser Objektgruppe heißen
[Bugfix]        Session Timeout aus config.inc.php wird nicht mehr berücksichtigt
[Bugfix]        Templates: Ein neu erstelltes Objekt kann keinen Umlaut in der Bezeichnung haben
[Bugfix]        Kategorie Clusterdienstzuweisung lässt sich in benutzerdefinierten Objekttypen nicht speichern
[Bugfix]        Kategorie FC-Port: Das Beschreibungsfeld kann keine Umlaute!
[Bugfix]        Listeneditierung in FC-Port: Verbindungen zu anderen FC-Ports werden nicht gespeichert
[Bugfix]        Listeneditierung in FC-Port: Verbundener Controller lässt sich nicht wählen
[Bugfix]        Kontaktzuweisung: E-Mail Adressen von Gruppen wurden nicht dargestellt
[Bugfix]        Personengruppen- und Personenzuweisung: Zuweisungsobjekte wurden mehrfach dargestellt
[Bugfix]        Das Purgen in Personengruppe -> Mitglieder funktioniert nicht
[Bugfix]        Dialog-Admin: Wenn man einen Wert editiert, werden Umlaute im Titel falsch dargestellt
[Bugfix]        Mehrere Probleme beim der Unique Überprüfung von IP Adressen und der Objekt Titel wurden gelöst
[Bugfix]        Objektbrowser zeigt unter kürzlich erstellt auch archivierte Objekte an
[Bugfix]        Sortierreihenfolge für das Startdatum der Workflows ist nicht chronologisch
[Bugfix]        Massenänderung für Objekttyp "Generisches Template": Benutzerdefinierte Kategorien sind nicht im Baummenü
[Bugfix]        [API] Umlaute werden nicht korrekt in die Datenbank übernommen
[Bugfix]        Subkategorien (unterhalb eines Ordners) funktionieren nicht auf der Übersichtsseite
[Bugfix]        [AUTH] Das Recht "Unterhalb einer Lokation" funktioniert unter gewissen Umständen nicht verlässlich
[Bugfix]        Upload von .phtml Dateien im Import verbieten
[Bugfix]        einige Sprachkonstanten im Rechtesystem unter Verwaltung fehlen
[Bugfix]        Konfigurierbare Handhabung für eine Archivierung von IP-Adressen (Kategorie Hostadresse)
[Bugfix]        Objekttyp-Aktivierung wird direkt nach Anlage des OT im QCW verworfen
[Bugfix]        Das default Gateway wird in der Spezifischen Kategorie IP-Liste immer dargestellt, auch wenn nicht eingetragen
[Bugfix]        Kategorie Raum: Durch Template erstellte Räume erhalten im Dialog+ Raum die Werte Array, 2, Büro
[Bugfix]        Doppelzuweisung Kategorie Schnittstelle
[Bugfix]        Anschlüsse: Wenn man mehrere Ausgänge archiviert, werden die markierten archiviert, alle anderen Anschlüsse werden gepurged oder sind weg
