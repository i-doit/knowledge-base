---
search:
  exclude: true
---
# Changelog 1.2
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Erweiterung]    Komplett überarbeitetes benutzerspezifisches Dashboard<br>
[Erweiterung]      Widget: Report Widget<br>
[Erweiterung]      Widget: Generischer RSS Feed<br>
[Erweiterung]      Widget: Bookmarks<br>
[Erweiterung]      Widget: Vitalinformationen eines Objektes<br>
[Erweiterung]      Widget: Externer Webinhalt<br>
[Erweiterung]      Erweiterung des Kreisdiagramm Widgets<br>
[Erweiterung]      Widget: Notizen<br>
[Erweiterung]      Widget: Umrechner<br>
[Erweiterung]      Widget: Lizenzübersicht<br>
[Erweiterung]      Widget: Kalender<br>
[Erweiterung]      Widget: CMDB Explorer<br>
[Erweiterung]    Internationalisierung: Umstellung auf UTF-8 ermöglicht den Support nicht lateinischer Sprachen<br>
[Erweiterung]    Menübaum Suche & Ausblenden nicht genutzter Objekttypen oder Kategorien<br>
[Erweiterung]    Tastaturnavigation im Menübaum<br>
[Erweiterung]    Benutzerspezifische Kategorien können nun "Multivalue" sein<br>
[Erweiterung]    Dynamische Gruppen (Objekte)<br>
[Erweiterung]    Kompatibilität zu JDisc Version 2.9 und 3.0.<br>
[Erweiterung]   Das Rechtesystem wurde um einen neuen Rechtepfad erweitert, der es ermöglicht Kategorien in Objekttypen zu berechtigen<br>
[Bugfix]        Objektlisten: Kapazitäten werden in Byte angezeigt<br>
[Bugfix]        Wenn unter DNS-Domäne in der Hostadresse ein neuer Eintrag eingegeben wird, wird dieser nicht mehr neu angelegt<br>
[Bugfix]        Der LDAP Controller zur Synchronisation von Benutzern hat den konfigurierten LDAP Filter nicht verwendet.<br>
                In diesem Zusammenhang ist Vorsicht bei dem Sync von mehr als 1000 Active Directory Usern geboten. Die Konfigurationseinstellung<br>
                MaxPageSize sollte hierfür entsprechend der Useranzahl erhöht werden.<br>
[Bugfix]        Gemeinsamer Speicher: Die Namen der Objekte, die die LUNs zur Verfügung stellen wurden gekürzt<br>
[Bugfix]        Verwaltung/Benutzereinstellungen/Objektlisten: In der Kategorie Schrank ist vertikale Einschübe 2x vorhanden<br>
[Bugfix]        Nagios host state und nagios service state links funktionieren nicht richtig<br>
[Bugfix]        Spezifische Kategorie "Routing": Die Gatewayadresse wird in der Liste nicht angezeigt<br>
[Bugfix]        In Objektlisten wird das Feld "Übergeordnetes Objekt" der Kategorie "Logischer Standort" nicht angezeigt<br>
[Bugfix]        Die Druckansicht wurde wiederhergestellt<br>
[Bugfix]        Druckansicht: Verschiedene Kategorien werden fehlerhaft angezeigt<br>
[Bugfix]        Personengruppenmitgliedschaft: Der Button zum Löschen fehlt!<br>
[Bugfix]        Problem mit dem Default Gateway in der Hostadresse<br>
[Bugfix]        Das Erstellen neuer Objekte vom Template hat ebenso neue Objekte für alle darin befindlichen Referenzen erzeugt<br>
[Bugfix]        Nagios URL ist abgeschnitten<br>
[Bugfix]        In der Portübersicht wird die Netzadresse anstatt der Hostadresse angezeigt<br>
[Bugfix]        Archivierte und gelöschte Lizenzzuweisungen werden als in Benutzung gezählt<br>
[Bugfix]        Umlautproblem im Titel der Benachrichtigungen<br>
[Bugfix]        isys_file_version wirft einen foreign key error<br>
[Bugfix]        Error beim Duplizieren von Personen<br>
[Bugfix]        Personen: Zugewiesene Objekte lassen sich nicht archivieren<br>
[Bugfix]        Templates: Speichert man in einem Personen-Template die Kategorie Stammdaten ab, verändert sich der Zustand des Templates auf "normal"<br>
[Bugfix]        Baummenü Standortsicht: Wenn ein Objekttyp kein Icon hat, wird das Icon des vorherigen Objektes im Baum verwendet.<br>
[Bugfix]        In den Vertragsdetails ist fälschlicherweise das Ende mit dem Start gleichgesetzt<br>
[Bugfix]        IP-Adresse aus Layer 3 Netz zuordnen geht nicht, wenn die Wiki-URL konfiguriert ist<br>
[Bugfix]        Verbindungen zwischen Objekten werden in gewissen Situationen gelöscht wenn über die Listeneditierung editiert wird<br>
[Bugfix]        vitueller Host/virtuelle Switche: Man kann auch archivierte Ports auswählen.<br>
[Bugfix]        Beim Klick auf Speichern sollte der editierte Wert der Dialog+ Liste abgespeichert werden<br>
[Bugfix]        Kategorie Freigabenzugriff: Das Feld "Zugewiesene Objekte" muss "Zugewiesenes Objekt" heißen<br>
[Bugfix]        Kategorie Vertragszuweisung: Das Kündigungsdatum wird falsch angegeben<br>
[Bugfix]        SLA Kategorie funktioniert nicht und erzeugt Fehler bei der Suche<br>
[Bugfix]        Kategorie Klimaanlage: Feld "Luftmenge" -> qm/h in cbm/h umbenennen<br>
[Bugfix]        Spez. Kategorie vom Objekttypen "Objektgruppe" heißt Objekttyp-Gruppe. Sollte besser Objektgruppe heißen<br>
[Bugfix]        Session Timeout aus config.inc.php wird nicht mehr berücksichtigt<br>
[Bugfix]        Templates: Ein neu erstelltes Objekt kann keinen Umlaut in der Bezeichnung haben<br>
[Bugfix]        Kategorie Clusterdienstzuweisung lässt sich in benutzerdefinierten Objekttypen nicht speichern<br>
[Bugfix]        Kategorie FC-Port: Das Beschreibungsfeld kann keine Umlaute!<br>
[Bugfix]        Listeneditierung in FC-Port: Verbindungen zu anderen FC-Ports werden nicht gespeichert<br>
[Bugfix]        Listeneditierung in FC-Port: Verbundener Controller lässt sich nicht wählen<br>
[Bugfix]        Kontaktzuweisung: E-Mail Adressen von Gruppen wurden nicht dargestellt<br>
[Bugfix]        Personengruppen- und Personenzuweisung: Zuweisungsobjekte wurden mehrfach dargestellt<br>
[Bugfix]        Das Purgen in Personengruppe -> Mitglieder funktioniert nicht<br>
[Bugfix]        Dialog-Admin: Wenn man einen Wert editiert, werden Umlaute im Titel falsch dargestellt<br>
[Bugfix]        Mehrere Probleme beim der Unique Überprüfung von IP Adressen und der Objekt Titel wurden gelöst<br>
[Bugfix]        Objektbrowser zeigt unter kürzlich erstellt auch archivierte Objekte an<br>
[Bugfix]        Sortierreihenfolge für das Startdatum der Workflows ist nicht chronologisch<br>
[Bugfix]        Massenänderung für Objekttyp "Generisches Template": Benutzerdefinierte Kategorien sind nicht im Baummenü<br>
[Bugfix]        [API] Umlaute werden nicht korrekt in die Datenbank übernommen<br>
[Bugfix]        Subkategorien (unterhalb eines Ordners) funktionieren nicht auf der Übersichtsseite<br>
[Bugfix]        [AUTH] Das Recht "Unterhalb einer Lokation" funktioniert unter gewissen Umständen nicht verlässlich<br>
[Bugfix]        Upload von .phtml Dateien im Import verbieten<br>
[Bugfix]        einige Sprachkonstanten im Rechtesystem unter Verwaltung fehlen<br>
[Bugfix]        Konfigurierbare Handhabung für eine Archivierung von IP-Adressen (Kategorie Hostadresse)<br>
[Bugfix]        Objekttyp-Aktivierung wird direkt nach Anlage des OT im QCW verworfen<br>
[Bugfix]        Das default Gateway wird in der Spezifischen Kategorie IP-Liste immer dargestellt, auch wenn nicht eingetragen<br>
[Bugfix]        Kategorie Raum: Durch Template erstellte Räume erhalten im Dialog+ Raum die Werte Array, 2, Büro<br>
[Bugfix]        Doppelzuweisung Kategorie Schnittstelle<br>
[Bugfix]        Anschlüsse: Wenn man mehrere Ausgänge archiviert, werden die markierten archiviert, alle anderen Anschlüsse werden gepurged oder sind weg<br>
