# Experteneinstellungen

Die Experteneinstellungen sind so etwas wie die "Registry" von i-doit. Hier können viele Einstellungen gesetzt werden, die teilweise nicht über die Web GUI erreichbar sind.

!!! attention "Vorsicht"

    In der Regel ist es nicht nötig, in den Experteneinstellungen Werte hinzuzufügen oder zu verändern. Für den normalen Gebrauch bringt die Web GUI an den entsprechenden Stellen Funktionen mit, um das Verhalten von i-doit zu steuern.

    Vor der Änderung an den Experteneinstellungen sollte **unbedingt ein [Backup](../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) angefertigt** werden. Einige der aufgelisteten Einstellungen haben einen gravierenden Einfluss auf die Applikation. Im Zweifel hilft der [Support](../kundenportal.md) gerne weiter.

Konfiguration
-------------

Zu erreichen sind die Einstellungen unter **Verwaltung → Systemeinstellungen → Experteneinstellungen**.

[![Experteneinstellungen](../../assets/images/de/administration/systemeinstellungen/experteneinstellungen/experteneinstellungen.png)](../../assets/images/de/administration/systemeinstellungen/experteneinstellungen/experteneinstellungen.png)
Jede Einstellung besteht aus drei Teilen:

| Key | Value | Type |
| --- | --- | --- |
| Der Schlüssel (**Key**) gibt der Einstellung einen eindeutigen Namen. Sollte ein Schlüssel noch nicht existieren, kann er nachträglich hinzugefügt werden. | Der Wert (**Value**) ist in der Regel eine Zeichenkette bzw. ein längerer Text (String) oder eine Ganzzahl (Integer). | Über den Typ (**Type**) wird die Reichweite der Einstellung angegeben. Eine Einstellung mit dem Typ **Tenant-wide** wirkt sich nur auf denjenigen Mandanten aus, mit dem der Benutzer derzeit angemeldet ist. **System-wide** bedeutet, dass sich die Einstellung auf das gesamte i-doit auswirkt, also unabhängig von den verfügbaren Mandanten. |

Liste der Einstellungen
-----------------------

| Key | Default Value (Standardwert) | Recommended Value (vorgeschlagener Wert) | Type | Module<br><br>(Bereich/[Add-on](../../i-doit-pro-add-ons/i-diary.md) in i-doit) | Beschreibung |
| --- | --- | --- | --- | --- | --- |
| api.authenticated-users-only | 0   |     | Systemweite Einstellung | PRO/CMDB | Erzwingt die Authentifizierung für die Verwendung der API |
| auth.active | 1   |     | Systemweite Einstellung | PRO/CMDB | Aktivierung/Deaktivierung des Rechtesystems |
| auth.logging | 1   | 1   | Mandanteneinstellung | PRO/CMDB | Aktiviert/Deaktiviert das loggen von Rechtesystem-Meldungen |
| auth.use-in-cmdb-explorer | 0   | 0   | Mandanteneinstellung | PRO/CMDB | Aktiviert die Berücksichtigung von Rechten im CMDB-Explorer. Objekte auf die nicht verrechtet sind werden nicht dargestellt / weiter iteriert |
| auth.use-in-cmdb-explorer-service-browser | 0   | 0   | Mandanteneinstellung | PRO/CMDB | Aktiviert die Berücksichtigung von Rechten im CMDB-Explorer Service Popup. Der User sieht nur die Services, auf die er Rechte hat. |
| auth.use-in-object-browser | 0   | 0   | Mandanteneinstellung | PRO/CMDB | Aktiviert die Berücksichtigung von Rechten im Objekt Browser. Objekte die nicht verrechtet sind werden nicht dargestellt. Bereits ausgewählte Objekte werden mit "\[Ausgeblendet\]" dargestellt |
| auth.use-in-location-tree | 0   | 0   | Mandanteneinstellung | PRO/CMDB | Aktiviert die Berücksichtigung von Rechten im Standort Baum. Objekte die nicht verrechtet sind werden nicht dargestellt / aufgeklappt. |
| barcode.type | qr  |     | Mandanteneinstellung | PRO/CMDB | Typ des Barcodes |
| check\_mk.controller.last\_log\_check | 0   |     | Mandanteneinstellung | PRO/CMDB | Zeitpunkt des letzten Durchlaufs des check\_mk-Controllers |
| ckeditor.font\_names | Arial;Courier New;Times New Roman;Helvetica |     | Mandanteneinstellung | PRO/CMDB | Verwendbare Schriftarten im WYSIWYG Editor |
| cmdb.connector.suffix-schema | isys\_format\_json::encode(array(  <br>    "##INPUT## - OUT",  <br>    "- ##INPUT##",  <br>    "(\*) ##INPUT##",  <br>) |     | Systemweite Einstellung | PRO/CMDB | Formatierungsschema für die Generierung von TODO |
| cmdb.limits.order-threshhold | 10000 | 1000 | Mandanteneinstellung | PRO/CMDB | Limit an Zeilen für die TableComponent ab wann nur noch indexierte Felder sortiert und gefiltert werden können |
| cmdb.limits.obj-browser.objects-in-viewmode | 8   |     | Mandanteneinstellung | PRO/CMDB | Maximale Anzahl darzustellender Objekte im Objektbrowser im Viewmode |
| cmdb.limits.port-lists-layer2 | 5   |     | Mandanteneinstellung | PRO/CMDB | Limitierung der aufgeführten Layer2-Netze in der Portliste |
| cmdb.limits.port-lists-vlans | 10  |     | Mandanteneinstellung | PRO/CMDB | Limitierung der aufgeführten VLANs in der Portliste |
| cmdb.limits.port-overview-default-vlan-only | 0   |     | Mandanteneinstellung | PRO/CMDB | In der Portübersicht soll lediglich das Standard-VLAN angezeigt werden. |
| cmdb.multiedit.text-size-in-px | 120 |     | Mandanteneinstellung | PRO/CMDB | Textgröße in der Listeneditierung |
| cmdb.object-browser.max-objects | 1500 |     | Systemweite Einstellung | PRO/CMDB | Maximale Anzahl darzustellender Objekte im Objektbrowser |
| cmdb.objtype.OBJECT\_TYPE\_ID.auto-inventory-no |     |     | Mandanteneinstellung | PRO/CMDB | Muster für die Generierung automatischer Inventarnummern in der Buchhaltungskategorie |
| cmdb.only-show-ranked-entries-as-such | 0   | 0   | Mandanteneinstellung | PRO/CMDB | Option zur Festlegung, ob Beziehungen zu einem archivierten Objekt als archiviert oder normal angezeigt werden sollen |
| cmdb.quickpurge |     |     | Systemweite Einstellung | PRO/CMDB | Aktivieren/Deaktivieren der Quickpurge-Funktionalität |
| cmdb.skip-unidirectional-connection-ranking | 0   | 0   | Mandanteneinstellung | PRO/CMDB | Option um festzulegen, ob Verknüpfungen zu einem archivierten Objekt als archiviert oder normal dargestellt werden sollen |
| cmdb.unique.hostname |     |     | Mandanteneinstellung | PRO/CMDB | Aktivieren/Deaktivieren von einzigartigen Hostnamen |
| cmdb.unique.ip-address |     |     | Systemweite Einstellung | PRO/CMDB | Aktivieren/Deaktivieren von einzigartigen Ips |
| cmdb.unique.layer-2-net |     |     | Mandanteneinstellung | PRO/CMDB | Aktivieren/Deaktivieren von einzigartigen Layer-2 Ids |
| cmdb.unique.object-title |     |     | Mandanteneinstellung | PRO/CMDB | Aktivieren/Deaktivieren von einzigartigen Objekt-Titel |
| email.template.maintenance | "Your maintenance contract: %s timed out.\\n\\n" .  <br>"<strong>Contract information</strong>:\\n" .  <br>"Start: %s\\n" .  <br>"End: %s\\n" .  <br>"Support-Url: %s\\n" .  <br>"Contract-Number: %s\\n" .  <br>"Customer-Number: %s" |     | Systemweite Einstellung | PRO/CMDB |     |
| email.template.password | "Hello %FIRSTNAME% %LASTNAME%, \\n\\n" .  <br>"Your password has been changed to: %PASSWORD%\\n" .  <br>"\\n\\n" .  <br>"Regards,\\n" .  <br>"i-doit system" |     | Systemweite Einstellung | PRO/CMDB | Verwendetes E-Mail-Template bei Passwortänderungen |
| gui.empty\_value | \-  | \-  | Mandanteneinstellung | Core | Definiert die Darstellung eines Leerwerts in der Oberfläche |
| gui.forum-link | 0   |     | Systemweite Einstellung | Core | Link zum Forum |
| gui.leftcontent.width | 235 | 350 | Benutzereinstellung | Core | Definiert die Breite des linken Baumbereichs in Pixeln |
| gui.mandator-switch.keep-url | 0   |     | Systemweite Einstellung | Core | Soll der Importvorgang den Objektstatus verändern oder nicht. |
| gui.quickinfo.active | 1   |     | Systemweite Einstellung | PRO/CMDB | Aktivieren/Deaktivieren von Quickinfo-Popups |
| gui.quickinfo.delay | 0   |     | Systemweite Einstellung | PRO/CMDB | Verzögerungszeit beim Einblende/Ausblenden von Quickinfo-Popups |
| gui.wiki-url |     |     | Systemweite Einstellung | PRO/CMDB | Link zum Wiki |
| gui.wysiwyg | 1   |     | Systemweite Einstellung | PRO/CMDB | Aktivierung/Deaktivierung von WYSIWYG-Editoren. |
| import.object.keep-status | FALSE |     | Systemweite Einstellung | PRO/CMDB | Soll der Importvorgang den Objektstatus verändern oder nicht. |
| jdisc.import-unidentified-devices | false |     | Mandanteneinstellung | PRO/CMDB | Aktivieren/Deaktivieren von Imports unidentifizierter JDISC-Objekte |
| jdisc.prevent-duplicates | 1   | 1   | Systemweite Einstellung | PRO/CMDB | Sucht Jdisc Devices anhand ihres Namens und verwendet diese, anstatt duplikate (#1, #2, ..) zu erzeugen |
| ldap.debug | true |     | Systemweite Einstellung | LDAP | Aktiviert die Generierung eines Debug-Logs für den Synkronisierungsvorgang |
| ldap.default-group | 14  |     | Systemweite Einstellung | LDAP | Standardgruppe für importierte Kontakte, welche keiner Gruppe zugewiesen werden können |
| logbook.changes | 1   |     | Mandanteneinstellung | Logbook | Aktiviert/Deaktiviert das Loggen der Changes im Logbuch |
| logging.cmdb.import | false |     | Systemweite Einstellung | Import | Aktivieren/Deaktivieren des Loggings für i-doit Importvorgänge |
| logging.system.api | false |     | Systemweite Einstellung | Api | Aktivieren/Deaktivieren des Loggings von API-Calls |
| login.tenantlist.sortby |     |     | Systemweite Einstellung | Core | Sortierung der Mandantenliste auf der Login-Seite |
| maxlength.dialog\_plus | 110 |     | Mandanteneinstellung | PRO/CMDB | Maximale Zeichlänge für Einträge in Dialoglisten |
| maxlength.location.objects | 16  |     | Mandanteneinstellung | PRO/CMDB | Maximale Anzahl darzustellender Objekte |
| maxlength.location.path | 40  |     | Mandanteneinstellung | PRO/CMDB | Maximale Länge von Standortpfaden |
| maxlength.object.lists | 55  |     | Mandanteneinstellung | PRO/CMDB | Maximale Anzahl darzustellender Objekte in Objektlisten |
| memcache.host | 127.0.0.1 | Systemabhängig | Mandanteneinstellung | PRO/CMDB | Hostname oder IP-Adresse zu Memcache Cachingdienst (memcached) |
| memcache.port | 11211 | Systemabhängig | Mandanteneinstellung | PRO/CMDB | Port zu Memcache Cachingdienst (memcached) |
| proxy.active |     |     | Systemweite Einstellung | Core | Aktivieren/Deaktivieren des Proxys |
| proxy.host |     |     | Systemweite Einstellung | Core | Proxy: Host |
| proxy.password |     |     | Systemweite Einstellung | Core | Proxy: Passwort |
| proxy.port |     |     | Systemweite Einstellung | Core | Proxy: Port |
| proxy.username | false |     | Systemweite Einstellung | Core | Proxy: Benutzername |
| qrcode.config |     |     | Mandanteneinstellung | PRO/CMDB | QR-Code Konfiguration |
| reports.browser-url | [http://reports-ng.i-doit.org/](http://reports-ng.i-doit.org/) |     | Systemweite Einstellung | PRO/CMDB | URL zum i-doit Online Report Repository |
| search.global.autostart-deep-search | 0   |     | Mandanteneinstellung | PRO/CMDB | Automatische Deep Search Suche |
| security.passwort.minlength | 4   |     | Mandanteneinstellung | Core | Mindestlänge für Benutzerpasswörter |
| session.sso.active | false |     | Systemweite Einstellung | Core | Aktvieren/Deaktivieren von SingleSign-On |
| session.sso.language | en  |     | Systemweite Einstellung | Core | Standardsprache für SingleSign-On |
| session.sso.mandator-id | 1   |     | Systemweite Einstellung | Core | Der beim SingleSign-On verwendete Mandant |
| session.time | 300 |     | Systemweite Einstellung | Core | Länge der Login-Session |
| system.devmode |     |     | Systemweite Einstellung | Core | Aktivierung/Deaktivierung des i-doit Devmodes |
| system.dir.file-upload | upload/files/ |     | Systemweite Einstellung | Core | Pfad zum Datei-Upload Verzeichnis |
| system.dir.image-upload | upload/images/ |     | Systemweite Einstellung | Core | Pfad zum Bild-Upload Verzeichnis |
| system.email.connection-timeout | 60  |     | Systemweite Einstellung | Core | E-Mail: Verbindungs-Timeout für den Verbindungsaufbau zum Mail-Server |
| system.email.from | [i-doit@i-doit.com](mailto:i-doit@i-doit.com) |     | Systemweite Einstellung | Core | E-Mail: Absenderadresse |
| [system.email.name](http://system.email.name) | I-doit |     | Systemweite Einstellung | Core | E-Mail: Name des Absenders |
| system.email.port | 25  |     | Systemweite Einstellung | Core | E-Mail: Port |
| system.email.smtp-host |     |     | Systemweite Einstellung | Core | E-Mail: Host des Servers |
| system.email.smtpdebug | 0   |     | Systemweite Einstellung | Core | E-Mail: SMTP Debug |
| system.email.subject-prefix |     |     | Systemweite Einstellung | Core | E-Mail: Betreff-Präfix für von i-doit versendete E-Mails |
| system.memory-limit.jdisc | 2G  | 2G  | Systemweite Einstellung | JDisc | RAM Limit für Jdisc Import |
| system.memory-limit.object-lists | 768M | 768M | Systemweite Einstellung | CMDB | RAM Limit für Objektlisten |
| system.memory-limit.relation-object-list | 1024M | 1024M | Systemweite Einstellung | CMDB | RAM Limit für Beziehungslisten (Erhöhter Arbeitsspeicherbedarf ist bei größeren Umgebungen möglich) |
| system.memory-limit.search | 1G  | 1500M | Systemweite Einstellung | Suche | RAM Limit für die globale Volltextsuche |
| system.show-proc-time | 0   |     | Systemweite Einstellung | Core | Ausgabe der benötigten Ausführungszeit als HTML-Kommentar |
| system.timezone | Europe/Berlin |     | Systemweite Einstellung | Core | Zu verwendende Zeitzone, zur Verfügung stehende Werte können hier entnommen werden: [http://php.net/manual/de/timezones.php](http://php.net/manual/de/timezones.php) |
| tts.rt.queues | General |     | Systemweite Einstellung | Core | Verwendete Queues bei der Erstellung eines neuen Tickets im RT. Mehrere Queues werden kommasepariert angegeben. |
| workflows.max-checklist-entries | 7   |     | Benutzereinstellung | Workflows | Maximale Einträge in Checklisten |
| css.caching.cache-to-temp | 1   | 1   | Systemweite Einstellung | Core | Definiert, ob die CSS Dateien im Temp Verzeichnis in eine Datei zusammengefasst werden (Dies bringt schnellere Ladezeiten) |
| system.last-change |     |     | Systemweite Einstellung | Core | Kennzeichnet das Datum des letzten Systemupdates in Form eines UNIX Timestamps. Dieser Wert wird ebenfalls bei Update oder Installation eines Moduls verändert. |
| system.dev.assert.active | 0   | 0   | Systemweite Einstellung | Core | Entwicklerfehler darstellen (siehe assert\_options(ASSERT\_ACTIVE)) |
| system.dev.assert.warning | 0   | 0   | Systemweite Einstellung | Core | Entwicklerfehler darstellen (siehe assert\_options(ASSERT\_WARNING)) |
| system.dev.assert.bail | 0   | 0   | Systemweite Einstellung | Core | Entwicklerfehler darstellen (siehe assert\_options(ASSERT\_BAIL)) |
| error-tracker.enabled | 1   | 1   | Systemweite Einstellung | Error Tracker | Aktiviert automatisches Exception/Error Tracking und die Übermittlung des Fehlers per HTTPS an Synetics |
| error-tracker.type | rollbar | rollbar | Systemweite Einstellung | Error Tracker | Error Tracking Mechanismen, Aktuell steht nur rollbar zur Verfügung |
| error-tracker.environment | Production | Production | Systemweite Einstellung | Error Tracker | In welcher Umgebung ist der Fehler aufgetreten (Production, Test, Development) |
| error-tracker.anonymize | 1   | 1   | Systemweite Einstellung | Error Tracker | Nur Anonymisierte Daten versenden (nicht Anonimisierte Daten: Benutzername, E-Mail Adresse, Hostname, IP Adresse) |
| gui.nat-sort.port-list | 1   | 1   | Mandanteneinstellung | PRO/CMDB | Lexikografische Sortierung der Portliste |
| workflows.mail.ip-address |     |     | Systemweite Einstellung | Workflows | IP Adresse zur Verwendung in Workflow E-Mails |
| workflows.mail.hostname |     |     | Systemweite Einstellung | Workflows | Hostname zur Verwendung in Workflow E-Mails |
| cache.default-expiration-time | 86400 | 86400 | Mandanteneinstellung | Caching | Legt die Zeit in Sekunden fest, für welche bestimmte Systeminterne Caches behalten werden (z.B. Rechtesystem, Analyse Ergebnisse) |
| system.memory-limit.searchindex | 4096M | 4096M | Systemweite Einstellung | Suche | Reservierter Arbeitsspeicher für Suchindizierung. Eine Indizierung von 50000 Objekten benötigt ca. 1,5GB RAM. |
| gui.login.display | user-name |     | Benutzereinstellung | PRO/CMDB | Darstellung des Namens im "logged in as" Bereich:<br><br>*   user-name: lfischer<br>*   full-name: Dr. Leonard Fischer<br>*   full-name-plus: Dr. Leonard Fischer (lfischer)<br>*   first-last-name-abbreviation: L. Fischer |
| system.security.csrf | 0   | 0   | Systemweite Einstellung | Core | Entscheidet über die Nutzung eines CSRF-Tokens während des Login, beim speichern der Kategorien und XML Export |
| cmdb.limits.object-table-columns | 10  | 10  | Mandanteneinstellung | PRO/CMDB | Entscheidet, wie viele Spalten in den Objektlisten dargestellt werden dürfen |