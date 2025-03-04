---
search:
  exclude: true
---
# Changelog 1.5
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Neue Funktion] Vertragszuweisung / Leistungsschein: Neues Feld Reaktionszeit<br>
[Neue Funktion] Text bei leerer Report Vorschau<br>
[Neue Funktion] Benutzerdefinierte Kategorien erhalten einen neuen Feldtypen "Textarea"<br>
[Neue Funktion] Konfigurierbares Dropdown Element für sämtliche Textfelder als Validierungsfunktion<br>
[Neue Funktion] CMDB Explorer Profile zur benutzerdefinierten Darstellung der Knotenpunkte<br>
[Neue Funktion] Legende und Darstellung von Objektinfos des aktuellen Objekts im CMDB Explorer<br>
[Neue Funktion] Erzeugung von Logbucheinträgen bei API Änderungen<br>
[Neue Funktion] Verknüpfung von JDisc Devices zu i-doit Objekten über Kategorie "Custom Identifier"<br>
[Neue Funktion] Event Handler Modul<br>
[Neue Funktion] Entfernen des dynamische Nachladens von LDAP Attributen in Kategorie Personenstammdaten (Anzuzeigende Attribute können nur noch per Sync übertragen werden)<br>
[Neue Funktion] Nutzung der IT Service Filter zur Filterung von Beziehungen im CMDB Explorer<br>
[Neue Funktion] Komplett neugestalteter CMDB Explorer mit verschiedenen Darstellungsformen<br>
[Neue Funktion] Neuer Feldtyp für benutzerdefinierte Kategorien "Javascript"<br>
[Neue Funktion] Upload neuer Dateien im Dateibrowser<br>
[Neue Funktion] Konfiguration anzuzeigender Spalten in der Liste von benutzerdefinierten Multivalue Kategorien<br>
[Neue Funktion] Neue Berechtigung auf Standortsicht<br>
[Neue Funktion] Dokumentation von SSD's und SD-Karten in Kategorie Gerät<br>
[Neue Funktion] Neue Report View "CMDB-Statusänderungen"<br>
[Neue Funktion] Benutzerdefinierte Felder in Kategorie Personenstammdaten (einstellbar unter Verwaltung)<br>
[Neue Funktion] CSV Import für Benutzerdefinierte Kategorien<br>
[Neue Funktion] Installation von Modulen zu Testzwecken<br>
[Neue Funktion] Automatische Erzeugung von Inventarnummern in Kategorie Buchhaltung<br>
[Neue Funktion] Berücksichtigung des CMDB Status in den IT Service Filtern<br>
[Neue Funktion] Beibehalten des Objektlistenfilters bei Klick auf Zurück & Breadcrumb (Konfigurierbare Benutzereinstellung)<br>
[Neue Funktion] Benutzerdefinierte Listen als Standard für alle User definieren<br>
[Neue Funktion] Benutzerdefinierte Listen für mehrere User gleichzeitig setzen<br>
[Neue Funktion] Umzugsfunktion für physikalische und logische Standorte<br>
[Neue Funktion] Ticketing Schnittstelle iTop<br>
[Verbesserung] Verbessertes Debug Logging beim JDisc Import<br>
[Verbesserung] Neue Konfigurationseinstellung zum Übernehmen des Objektzustands beim (JDisc-)Import<br>
[Verbesserung] Anzahl anzuzeigender VLANs in Portübersicht nun über Verwaltung -> Systemeinstellungen konfigurierbar<br>
[Verbesserung] Beim JDisc-Profil soll es möglich sein Standorte zu den einzelnen Zuweisungen zu definieren.<br>
[Verbesserung] Tabelle in Listeneditierung erhält Sortierfunktion<br>
[Verbesserung] CSV-Import: Auswahl des Zeilenumbruchformats<br>
[Verbesserung] Copy & Paste Funktion für Bilder im WYSIWYG Editor<br>
[Verbesserung] Konfiguration um alle WYSIWYG Funktionen zu aktivieren (Verwaltung -> Systemeinstellungen)<br>
[Verbesserung] Report Möglichkeit des verwendeten Datenbankschemas einer Softwarezuweisung<br>
[Verbesserung] Erweiterte Performance Optimierung der JDisc Schnittstelle<br>
[Verbesserung] Ausgeblendete Objekttypen sollen nicht in der Allgemein Kategorie zur Auswahl stehen<br>
[Verbesserung] Optimierung der Browser-Druckansicht für Kategoriedetails und die Übersichtsseite<br>
[Verbesserung] H-Inventory: Import von Versionsnummern in entsprechende Kategorie Version<br>
[Verbesserung] Listenüberschriften werden leicht versetzt nach links oben dargestellt<br>
[Verbesserung] Im Update-Prozess auf eine neue Version überprüfen zeigt nun eine nutzerfreundliche Meldung, wenn kein Internetzugang besteht<br>
[Verbesserung] Nagios Export von DHCP Hosts<br>
[Verbesserung] Vererbte Nagios Services einzeln abwählen<br>
[Verbesserung] Report Manager: Persönliche Reports<br>
[Verbesserung] Neues Feld Seriennummer in Lizenzschlüssel<br>
[Verbesserung] Filterfunktion in Listeneditieren zur Filterung von Einträgen<br>
[Verbesserung] Neue Oberfläche zur Konfiguration der Systemdatenbank in Admin-Center<br>
[Verbesserung] Neue "Startseite" für den CMDB-Explorer<br>
[Verbesserung] Massenzuweisen von Software<br>
[Verbesserung] Generische Benachrichtigung auf Basis von Reports<br>
[Verbesserung] In der Zugriffskategorie Variablen für weitere IP-Adressen bereitstellen<br>
[Verbesserung] Widget mit Liste aller aktuell eingeloggten Benutzer<br>
[Verbesserung] Warnung bei belegten Kabelports<br>
[Verbesserung] CSV Import: Unique Checks aktivieren<br>
[Verbesserung] CSV Import: Hostadresse - Layer 3 Netze importieren<br>
[Verbesserung] Anzeige des FQDN Hostnamens in IP-Liste<br>
[Verbesserung] Neue Konfigurationseinstellung zum Präfixen des Objekttitels von automatisch erzeugten Kabeln<br>
[Verbesserung] Das Laden des globalen Logbuchs ist bei >100k Einträgen sehr langsam<br>
[Verbesserung] Optimierung des Speicherverbrauchs und Beschleunigung der globalen Suche<br>
[Verbesserung] Tooltips über Objekten im CMDB-Explorer (Für Mikro und Netz Profil)<br>
[Verbesserung] Die Meldung "duplicate IP addresses" in der IP Adressverwaltung zeigt nicht genau um welche Adressen es sich handelt<br>
[Verbesserung] Listeneditierung mit Zählfunktion<br>
[Verbesserung] Lesezeichen Widget kann keine relativen URLs verlinken, Lesezeichen können nicht bearbeitet werden<br>
[Verbesserung] Oldschool preloader zur 1.5 entfernen<br>
[Verbesserung] Mehrzeiliges Textfeld in Benutzerdefinierten Kategorien<br>
[Verbesserung] Standort-/Anschluss-Separierer & Exception Logging konfigurierbar in Mandanteneinstellungen<br>
[Verbesserung] CMDB Status als zusätzliches IT Service Filterkriterium<br>
[Verbesserung] Export des CMDB Explorers als SVG und GraphML<br>
[Verbesserung] Einstellungsmöglichkeit zur Mandantensortierung unter Verwaltung -> Systemeinstellungen<br>
[Verbesserung] Anzeige einer Rückmeldung bei leerem Ergebnis in Report View: Konsistenzprüfung<br>
[Verbesserung] Neue Kategorie Betriebssystem<br>
[Verbesserung] Kategorie "Custom Identifier" zur Verbindung von CIs mit Drittsystemen<br>
[Verbesserung] Neue JDisc Profile Netzwerk, Server & Clients, Andere<br>
[Verbesserung] JSON-RPC Api: Neue Konfiguration zum Deaktivieren des Logins ohne Benutzername/Passwort<br>
[Verbesserung] LDAP Ignore Funktion zur Verhinderung, dass z.B. Benutzer ohne Vor-, Nach- und Usernamen synchronisiert werden (ignoreFunction in LDAP-Handler Config)<br>
[Verbesserung] Suche in der Auswahl von Eigenschaften (z.B. im Report Manager)<br>
[Verbesserung] OCS Import von SNMP Geräten (OCS Version 2.1.2)<br>
[Verbesserung] Unique-Check auf Feldebene in Validierungsfunktion<br>
[Verbesserung] Umbenennung des Attributs "Jährliche Betriebskosten" in "Betriebskosten".<br>
[Verbesserung] Gruppenmitgliedschaftsprüfung von LDAP-Usern bei jedem Login<br>
[Änderung]    Ersetzung der IP Felder durch normale Textfelder<br>
[Änderung]    Umbenennung IT-Service Typ in Service Typ<br>
[Änderung]    Umbenennung IT-Service Komponenten in Service Komponenten<br>
[Änderung]    Umbenennung IT-Service Logbuch in Service Logbuch<br>
[Änderung]    Umbenennung IT-Service Beziehung in Service Beziehungen<br>
[Änderung]    Verifizierung der php.ini Werte "max_input_vars" und "post_max_size"<br>
[Änderung]    Rechtesystem wird leicht umstrukturiert<br>
[Änderung]    Umbenennung IT-Service in Service<br>
[Änderung]    Neuer Name für Objekttyp Service (Software): Systemdienst<br>
[Bug]          Auswahlfeld in Kategorie "Zugewiesene Endgeräte" heißt auf der Übersichtsseite "Verknüpfte Karten"<br>
[Bug]          Link in Benachrichtigungen verlinkt auf das Admin-Center, statt auf das Objekt<br>
[Bug]          Kategorie "IT-Service Logbuch": In Spalte "Objekttyp" wird bei Änderungen durch den JDisc-Import nur eine Konstante angezeigt.<br>
[Bug]          Benachrichtigung "Veränderte Objekte" benachrichtigt nicht über Objekte mit Änderung<br>
[Bug]          Bei der Auswahl "benutzerdefiniert" im JDisc-Profil wird das DropDown-Feld nicht zu einem Eingabefeld umgewandelt, falls es sich beim verwendeten Browser um "Google Chrome" handelt<br>
[Bug]          Horizontaler Scrollbalken in Kategorie "Verkabelung" steht nicht zur Verfügung<br>
[Bug]          CSV-Import erzeugt falsch gerichtete Beziehungen bei Kontaktzuweisungen<br>
[Bug]          Inhalte von Single-Value-Kategorien werden über die Massenänderung nicht angepasst.<br>
[Bug]          Leerauswahl bei Kategorie/Einsatzzweck leert diese Inhalte bei der Ausführung der Massenänderung immer<br>
[Bug]          LDAP Sync: Das Anlegen von neuen Organisation verursacht einen Fehler<br>
[Bug]          Service Status wird in Kategorie Monitoring -> NDO nicht dargestellt<br>
[Bug]          Das Recht "Reports" verhindert das Duplizieren von Reports<br>
[Bug]          Vorname & Nachname von Personen sind in Objektlisten nicht automatisch sortierbar<br>
[Bug]          LDAP Sync: "Login failed", wenn das Passwort aus der isys_handler_ldap config stammt<br>
[Bug]          LDAP Sync: "Login failed", wenn Passwort mit "!" beginnt und über Parameter übergeben wurde<br>
[Bug]          API: Validierungsfehler bei unnumerischer Angabe der DNS-Domäne<br>
[Bug]          Nagios Status funktioniert nicht zuverlässig in Objektlisten, wenn mehrere Nagios Hosts konfiguriert sind<br>
[Bug]          Das Recht "Löschen" berechtigt ebenfalls zum Purgen.<br>
[Bug]          Fehler bei der Berechnung freier IP-Adressen in der Listenansicht der Layer-3-Netze<br>
[Bug]          Generisches Template in der Massenänderung wird als Anwendung angelegt.<br>
[Bug]          Meldung beim CSV-Import neuer Rollen: "CMDB Error: Error: Your relation type for table 'isys_catg_contact_list' is empty. The constant cache is maybe not available here."<br>
[Bug]          Attribut "Standort" im Report zeigt lediglich die ID des Objekts<br>
[Bug]          Hostname von archivierten Hostadressen wird auf der Übersichtsseite angezeigt.<br>
[Bug]          API Methode cmdb.category.read liefert in der spezifischen Kategorie "Mitglieder" (catsID 54) immer nur das letzte Mitglied.<br>
[Bug]          Mit der Massenänderung abgeänderte Objekte erhalten den Zustand "Änderungsvorlage"<br>
[Bug]          In der Listeneditierung ist im Attribut "DNS Server" (Kat. Hostadresse) immer das Objekt selbst angegeben.<br>
[Bug]          Änderung des Standorts zeigt im Logbuch nicht den neuen Standort des Objekts an<br>
[Bug]          Das Ändern der Rolle einer Kontaktzuweisung erzeugt keinen Logbucheintrag<br>
[Bug]          Im Logbucheintrag eines archivierten Kontaktes wird nicht ersichtlich, welcher der Kontakte archiviert wurde<br>
[Bug]          Umlaute im Standortpfad werden beim exportierten Report (.csv) nicht korrekt dargestellt<br>
[Bug]          Der Zustand von Änderungsvorlagen lässt sich nicht abändern<br>
[Bug]          Listeneditierung: Softwarezuweisung funktioniert nicht<br>
[Bug]          Fehler beim Anlegen/Annehmen eines Workflows: Fatal error: Call to undefined method isys_workflow_dao::get_object_by_id()<br>
[Bug]          json_encode() Fehler im Report Manager unter SLES<br>
[Bug]          Berechtigung mit Bedingung "Kategorie in Objekt" gestattet selbst bei ausgewähltem Parameter "Alle" lediglich den Zugriff auf Kategorie "Allgemein".<br>
[Bug]          Befüllen des Attributs "Eingekauft bei" ist über die API nicht möglich.<br>
[Bug]          Listeneditierung: Allgemeinkategorie wird nicht gespeichert<br>
[Bug]          Kategorie Switch sehr langsam bei enorm großer Anzahl verknüpfter VLANs<br>
[Bug]          Fehler beim Update: Fatal error: Class 'isys_import_handler_cmdb' not found<br>
[Bug]          Automatische Rechte auf Reports fehlerhaft<br>
[Bug]          JDisc Import Fehler: Database error: Object ID not available in isys_cmdb_dao_category_s_net::sync()<br>
[Bug]          Attribute stehen nur dann in der Listenansicht zur Auswahl, wenn ein Benutzer über Rechte auf alle Kategorien verfügt.<br>
[Bug]          Fehler bei Update Benachrichtigung über die Konsole: Missing argument 1 for isys_update::fetch_file()<br>
[Bug]          Kategorie "Clustervitalität" berücksichtigt auch archivierte & gelöschte RAM-Module in der Berechnung<br>
[Bug]          Objektvitalität übernimmt keine Informationen aus den Einträgen der Kategorie "Laufwerk"<br>
[Bug]          Systemübersicht prüft MySQL-Werte nicht korrekt<br>
[Bug]          Objektbrowser (Filter: nach Beziehungen): Bei über 8000 Anwendungen wird nichts mehr angezeigt<br>
[Bug]          Fehler in Massenänderung: array_key_exists() expects parameter 2 to be array, null given<br>
[Bug]          Importierte i-doit XML-Dateien werden auch nach dem Import als "Noch nicht importiert" angezeigt.<br>
[Bug]          Standortpfad in exportierten Reports (.txt & .csv) enthält Quelltext und ist daher nicht lesbar<br>
[Bug]          In der Listeneditierung der Softwarezuweisung wird als Objekt die Software angezeigt, nicht das zu editierende Objekt<br>
[Bug]          Fehler beim XML-Import: "strstr() expects parameter 1 to be string"<br>
[Bug]          Attribut "DNS Domäne" (Kategorie Hostadresse) steht nicht in der Listeneditierung zur Verfügung<br>
[Bug]          Systeminformationen zeigen generell einen Fehler beim Update-Check<br>
[Bug]          Änderungen der Kategorie Hostadresse werden auf der Übersichtsseite nicht übernommen<br>
[Bug]          OCS-Tags haben keinen Einfluss<br>
[Bug]          SQL Fehler bei Listeneditierung von Netzwerk Ports<br>
[Bug]          LDAP Sync Fehler: array_keys() expects parameter 1 to be array<br>
[Bug]          Es ist selbst bei vollen Admin-Berechtigungen nur möglich auf seine eigenen Reports zuzugreifen.<br>
[Bug]          "Extras" wird nicht angezeigt, wenn Rechte auf das Logbuch und die Suche und sonst nichts darunter vergeben wurden<br>
[Bug]          Fehler beim Bearbeiten der Kategorie "Anschlüsse" in der Listeneditierung<br>
[Bug]          API Query Error beim Verknüpfen eines Layer-2 Netzes zu Layer-3<br>
[Bug]          API: Beim Update von einzelnen Feldern werden die restlichen Felder geleert.<br>
[Bug]          Horizontaler Scrollbalken fehlt bei langen Ergebnislisten in Reports<br>
[Bug]          Ports in der Kategorie "Portübersicht" werden alphanumerisch sortiert<br>
[Bug]          Validierungsfehler bei der Spezifischen Kategorie Instanz / Oracle Datenbank<br>
[Bug]          Editieren der Listenansicht blendet die Inhalte von Vetragsbeginn und -ende in der Liste aus.<br>
[Bug]          Kompatibilitätsprobleme zu älteren OCS Versionen<br>
[Bug]          Anzeigefehler bei benutzerdefinierten Kategorien in (multi-value) Listendarstellung<br>
[Bug]          Sortierung im Dialog-Admin unter "Modell: Name" gelegentlich nicht möglich.<br>
[Bug]          LDAP-Server-Konfiguration: Schaltflächen "Filter hinzufügen" und "Start Test" funktionieren teilweise nicht<br>
[Bug]          Keine Sortierung nach Objekt-Titel in der Listeneditierung<br>
[Bug]          Das nächstmögliche Kündigungsdatum im Objekt Vertrag wird im Zeitraum Februar nicht richtig berechnet. Statt 28. Februar wird 30. Februar angezeigt.<br>
[Bug]          Fehler beim Login im Internet Explorer 10/11: "Template .../mandants.tpl does not exist"<br>
[Bug]          Listeneditierung verwirft eingetragene Werte bei größeren Änderungen (php.ini Einstellung: max_input_vars)<br>
[Bug]          SQL Fehler beim Filtern im Logbuch nach dem Entfernen der zuvor ausgewählten Person<br>
[Bug]          Beim Import Formular von JDisc werden die Gruppen nicht ausgeblendet wenn man bei der Auswahl eines JDisc- Servers eine Maschine auswählt wo nur JEDI läuft.<br>
[Bug]          Archivierte IT Servicekomponenten werden nach dem Hinzufügen neuer plötzlich wiederhergestellt<br>
[Bug]          Beim Erstellen eines Reports wird, wenn man eine Teilbedingung entfernt und wieder hinzufügt der Report nicht richtig ausgeführt.<br>
[Bug]          In der Kategorie Nagios/Kontakt werden die Inhalte der Felder host_notification_options und service_notification_options nicht gespeichert<br>
[Bug]          Beim JDisc Import sollte der Import-Modus standardmäßig auf "Aktualisieren" stehen.<br>
[Bug]          Der JDisc- Import von VRRP/HSRP-Clustern hat bei fehlenden Cluster Services den Import nicht Ordnungsgemäß abgeschlossen.<br>
[Bug]          Javascript Fehler in Clusterdienstzuweisung<br>
[Bug]          "One Support Button To Fix Them All" löscht willkürlich LUNs und lässt die Beziehungen über<br>
[Bug]          Rolle aus Zugewiesene Objekte kann nicht gespeichert werden.<br>
[Bug]          Beziehung ändert beim Bearbeiten die Richtung<br>
[Bug]          Die Berechtigungen für die QR-Code-Konfiguration können nicht festgelegt werden.<br>
[Bug]          Fehler beim Verwenden der View "Layer-3-Network Plan".<br>
[Bug]          Report-Widget taucht nicht in der Widget-Konfiguration auf<br>
[Bug]          Attribut Firma funktioniert in Listeneditierung der spezifischen Kategorie "Personen" nicht<br>
[Bug]          API: Beim Auslesen der Spezifischen Kategorie Vertragsinformationen wird eine Fehlermeldung als Response zurückgegeben.<br>
[Bug]          Fehler "`isys_catg_backup_list`, CONSTRAINT.." beim Nutzen der Funktion "Unfertige Objekte entfernen"<br>
[Bug]          Die Kategorie zugewiesene Endgeräte zeigt auf der Übersichtsseite keine Einträge<br>
[Bug]          Bei der Listeneditierung wird bei der spezifischen Kategorie Personen keine Änderung gespeichert.<br>
[Bug]          Beim JDisc Import wird beim ändern des Filters nicht das jeweilge Template nachgeladen.<br>
[Bug]          Purge-Button in Kontaktzuweisung ist eigentlich ein "Archivieren"-Button<br>
[Bug]          Kategoriebereinigung unter Verwaltung/Cache erzeugt einen Fehler<br>
[Bug]          Erstellen eines TTS-Tickets übergibt Mandanten falsch an RT/OTRS<br>
[Bug]          Neu angelegter Benutzer ohne jegliche Rechte bekommt eine Fehlermeldung, wenn er auf ein Objekt aus der Standortsicht klickt<br>
[Bug]          Änderung des Attributs "Primär" auf "Nein" wird erst nach dem erneuten Laden der Kontaktzuweisung sichtbar.<br>
[Bug]          "Mandant" ist auf Login-Seite im Englischen falsch benannt.<br>
[Bug]          "Division by zero" Fehlermeldung auf dem Dashboard nach einem Serverumzug<br>
[Bug]          Beim Erstellen eines Anschluss Reports wird bei einigen Attributen ein Fehler dargestellt<br>
[Bug]          LDAP Attribut-Mappings aus der Konfigurationsdatei isys_handler_ldap.inc.php sind "case-sensitive"<br>
[Bug]          Gelöschte User, welche aus einem LDAP Directory syncronisiert wurden, sind in i-doit weiterhin aktiv<br>
[Bug]          Listeneditierung speichert IP-Adressen Fehlerhaft (Kategorie Hostadresse)<br>
[Bug]          Bearbeiten einer Software (Anwendung, Betriebssystem, etc.) führt dazu, dass Master und Slave im Beziehungstitel vertauscht werden<br>
[Bug]          Lösen des Ausgewählten Kabels bewirkt, dass automatisch ein neues Kabel erzeugt wird<br>
[Bug]          Quickpurge Button kommt nur wenn der Status explizit auf Normal gesetzt wird<br>
[Bug]          Listeneditierung: Standortänderung von zB. Clients wird nicht gespeichert<br>
[Bug]          Das Abspeichern der Host-Template Definition verursacht einen Fehler<br>
[Bug]          Datei kann nicht umgehend nach Upload & Einordnung in Kategorie ausgewählt werden<br>
[Bug]          Listenbrowser für die Bearbeitung von Datei-Kategorien befindet sich hinter dem Datei-Browser<br>
[Bug]          %notification_templates__report% erzeugt falschen Link in Benachrichtigung<br>
[Bug]          Änderung der Bezeichnung eines Anschlusses in Listeneditierung bleibt wirkungslos<br>
[Bug]          Zuweisung von Nicht-Kontakt-Objekten in der Kontaktzuweisung möglich<br>
[Bug]          In der Open Version sind die IP-Adress-Boxen sehr schmal<br>
[Bug]          Die CSS Klasse .box verursacht im englischen eine graue Border um die "Distribution box"<br>
[Bug]          Objektzählung falsch: Objektlimit um 0 Objekte überschritten<br>
[Bug]          Report Widget kann nicht geladen werden.<br>
[Bug]          Verrutschtes Design im Widget "Objektliste"<br>
[Bug]          i-doit system error, wenn in der Breadcrumb "Benutzerdefinierte Felder" angeklickt wird<br>
[Bug]          Fehler beim Anlegen eines Mandanten mit einer bereits existierenden Datenbank (im Admin-Center)<br>
[Bug]          Der Name von Nagios Gruppen wird nicht korrekt vorselektiert<br>
[Bug]          Hostnamen mit leerzeichen<br>
[Bug]          JDisc Import wird nicht ausgeführt wenn die Kategorien Hostadresse und Port dem JDisc-Profil zugewiesen sind.<br>
[Bug]          Im Benachrichtigungsmodul können keine Direktlinks verwendet werden<br>
[Bug]          Annehmen von Task aus Checklisten ist nicht möglich<br>
[Bug]          Neue Kontaktzuweisung löscht vorherige Kontaktzuweisungen<br>
[Bug]          Der Löschen Button in Kategorie "Gastsysteme" fehlt<br>
[Bug]          Beim einem JDisc Import werden bei bestehenden Port-Verbindungen neue Kabel Objekte erzeugt<br>
[Bug]          Beim Import von Virtuellen Maschinen unter JDisc wird der Schalter ob es sich um eine Virtuelle Maschine handelt nicht gesetzt.<br>
[Bug]          Modul Verinice lässt sich nicht deaktivieren (Fehlermeldung)<br>
[Bug]          VIVA lässt sich nicht deinstallieren<br>
[Bug]          Einträge in der globalen Kategorie Listener (Netzwerkverbindungen) lassen sich nicht archivieren, löschen oder purgen.<br>
[Bug]          Benachrichtigungen für auslaufende Wartungsverträge greifen nicht auf Leistungsschein-Details<br>
[Bug]          Beim Sprachwechsel bleibt der Menübaum in der vorherigen Sprache<br>
[Bug]          Modul lässt sich nicht via CLI installieren<br>
[Bug]          Bericht "Umgesetzte Maßnahmen" filtert bereits umgesetzte Maßnahmen nicht aus.<br>
[Bug]          Bericht "Ergänzende Sicherheitsanalyse" weißt auf bereits dokumentierte Analysen hin<br>
[Bug]          Beim Einloggen mit einem reaktivierten Mandanten kommt beim installiertem SwapCI Modul eine MySQL-Fehlermeldung<br>
[Bug]          Hostadresse auf der Übersichtsseite zeigt archivierte / gelöschte Einträge<br>
[Bug]          Zuweisungsfelder / Objektbrowserfelder im IE 10: Die Autosuggestion wird nicht direkt unter dem Feld angezeigt.<br>
[Bug]          Module sind deaktiviert und trotzdem im menü sichtbar. Wenn man auf ein Modul klickt, bekommt man eine rote Fehlermeldung, dass das Modul deaktiviert ist.<br>
[Bug]          Not unique table/alias: 'isys_obj' im CSV-Import<br>
[Bug]          Spalten benutzerdefinierter Multi-Value-Kategorien können nicht sortiert werden<br>
[Bug]          Sortierung in Listeneditierung ist nicht korrekt<br>
[Bug]          Objektliste: Sortierung in Spalten ist nicht einheitlich<br>
[Bug]          Fehler: "Could not check licence." bei der Installation einer Lizenz.<br>
[Bug]          Im Report Manager funktioniert die Kategorie Logbuch nicht<br>
[Bug]          Benutzer ohne Rechte kann IT-Service-Typen editieren<br>
[Bug]          IT-Service-Beziehungen werden nicht im CMDB-Explorer angezeigt<br>
[Bug]          Die Logbuch Änderungshistorie zeigt eine Änderung der Rolle unter Kontaktzuweisung nicht immer an<br>
[Bug]          Nach einem (erneuten) OCS-Import eines PCs, wird das Import-Datum nicht aktualisiert.<br>
[Bug]          Änderungsdatum in Kategorie Allgemein aktualisiert sich nicht, sofern Objekte in Kategorie Kontaktzuweisung hinzugefügt werden<br>
[Bug]          Bei der Spezifische Kategorie Netz kann das Feld DNS Domain nicht über die API Schnittstelle befüllt werden.<br>
[Bug]          Beim JDisc-Profil sollen nur die Objekttypen auswählbar sein die auch aktiviert sind. Desweiteren sollte dies beim Import abgefangen werden.<br>
[Bug]          Report mit allen Datenbankinstanzen und jeweiligen Datenbank-Schemata gibt eine Fehlermeldung zurück<br>
[Bug]          Filter in Objektlisten greift nur auf verkürzte Form (XYZ..) des Objekttitels<br>
[Bug]          Filtern von Objekten mit Umlaut im Titel nicht möglich<br>
[Bug]          Widget wird trotz Abbrechens entfernt<br>
[Bug]          Eigenschaft Webseite in Objektliste wird nicht als Link formattiert<br>
[Bug]          Viele Eigenschaften aus Netzersatzanlage lassen sich für Objekt-Liste nicht nutzen<br>
[Bug]          Popup zum Bearbeiten von Notizen speichert Änderungen nicht.<br>
[Bug]          Notiz-Widget meldet Syntax-Fehler<br>
[Bug]          Lesezeichen mit Protokoll "https://" erhalten Ergänzung "http://"<br>
[Bug]          Bearbeiten von benutzerdefinierten Kategorien in benutzerdefinierten Objekttypen ist über Listeneditierung nicht möglich<br>
[Bug]          Attribut "Freigabe" in Kategorie "Freigabenzugriff" wird bei der Massenänderung nicht berücksichtigt<br>
[Bug]          Nagios-Host-Link ist nicht mehr vorhanden<br>
[Bug]          Backslash im Objekttitel wird nicht angezeigt<br>
[Bug]          Der Name vom Datenbankschema wird in der Kategorie aus dem Objekttitel abgeleitet, aber nicht in der Listenansicht<br>
[Bug]          Archivierte Kontakte und Hostadressen werden in der Objekt-Liste dargestellt<br>
[Bug]          Beim duplizieren von Reports gibt es noch die Checkbox "Dieser Report soll nur für den aktuellen Benutzer verfügbar sein!"<br>
[Bug]          Report Widget: Kategorien darstellen (via Option Group)<br>
[Bug]          Zugriffstyp-Browser ist auf der Übersichtsseite nicht benutzbar<br>
[Bug]          Der Kontaktzuweisung fehlt der "Wiederherstellen" Button<br>
[Bug]          Eine CMDB Status Konstante darf keine Leerzeichen enthalten<br>
[Bug]          Die Rechte der Report Manager Kategorien werden nicht durchgängig überprüft<br>
[Bug]          Controller wirft PHP-Fehlermeldungen, wenn Reihenfolge der Parameter nicht eingehalten wird.<br>
[Bug]          VoIP-Telefone haben keine Allgemein-Kategorie<br>
[Bug]          Entfernen eines Objekts aus einer Gruppe löscht die Beziehung nicht<br>
[Bug]          In der Druckansicht wird anstatt der primären IP-Adresse der Name des Netzes angezeigt<br>
[Bug]          Download eines Templates verwendet ausschließlich Kategorie "Allgemein"<br>
[Bug]          Quickpurge Button bei IT Servicekomponenten fehlerhaft<br>
[Bug]          Fehlermeldung "Dieses Modul unterstuetzt leider keine Bookmarks" beim Anlegen von Bookmarks<br>
[Bug]          Langsamer LDAP Sync bei größeren Datenbanken<br>
[Bug]          Berechtigungsproblem bei Cache Dateien, wenn diese über das CLI (Controller) Interface erzeugt wurden<br>
[Bug]          OCS Import zeigt Objekte nicht als bereits importiert an<br>
[Bug]          SNMP Community lässt sich bei (per CSV) Importierten Objekten nicht mehr ändern<br>
[Bug]          In der Kategorie Modell wird, wenn man in der Eigenschaft Modell einen neuen Eintrag erstellt, nicht selektiert bzw. nichts angezeigt.<br>
[Bug]          "Unknown column" Fehler beim Zuweisen eines Vertrages zu einem Server<br>
[Bug]          Kategorie Verwaltungsinstanz: Man kann die Einträge nicht anklicken.<br>
[Bug]          Objektauswahl bei manueller Erzeugung einer Beziehung bewirkt Sprung aufs Dashboard<br>
[Bug]          Chassis Slots sind nicht über die Listeneditierung bearbeitbar<br>
[Bug]          Rechtesystem: Es wird bei der Verrechtung der Kategorien nicht angezeigt, dass es Ordner oder zu Ordnern gehörige Kategorien sind<br>
[Bug]          Rechtesystem-Cache wird nicht automatisch geleert, wenn Rechte aus Richtung eines Objekts angepasst werden.<br>
[Bug]          Suche durchsucht Werte, auf die der User keine Rechte haben sollte<br>
[Bug]          CSV-Import: Beschreibungsfeld der Allgemeinkategorie steht nicht zur Verfügung<br>
[Bug]          Dialog-Plus "Bezeichnung" (Kat. Speicher) kann nicht im Dialog-Admin bearbeitet werden.<br>
[Bug]          Übersichtsseite: Auswahlfeld "Primär" in Kategorie "Zugriff" ist leer.<br>
[Bug]          CSV-Import: SQL-Fehler beim Importieren von Standorten mit ausdefinierter Einschub- und Positionseigenschaft<br>
[Bug]          Nagios Service-Dependencies: SQL-Error bei leerem "Service (Master)"-Feld<br>
[Bug]          Workflows: Checklisten werden als Tasks behandelt<br>
[Bug]          Port-Browser funktioniert nicht in i-doit OPEN<br>
[Bug]          PHP Fehlermeldung in Kategorie Service Assignment (Check_MK)<br>
[Bug]          CMDB-Explorer: Neue Darstellungsform "Ungerichteter Graph"<br>
[Bug]          Formatierung kaputt<br>
[Bug]          Kontaktzuweisung auf der Übersichtsseite wirft Fehler beim speichern<br>
[Bug]          Attribut "Eingekauft bei" aus Kategorie "Buchhaltung" steht nicht in der Listeneditierung zur Verfügung.<br>
[Bug]          Objektbrowser im Objektlisten-Widget liegt hinter dem Auswahl-Fenster.<br>
[Bug]          Nicht funktionsfähige Links: Kategorie Netzwerk > Interface -> Ports anzeigen, Neue Ports<br>
[Bug]          JSON API Fehler: Die Konstante "C__CMDB__SUBCAT__STORAGE__DEVICE" wird nicht gefunden<br>
[Bug]          Das erstellen von Objekten aus einem Template erstellt falsche Logbuch meldung<br>
[Bug]          JDisc erkennt nicht alle Ports als "Ethernet", dadurch werden beim Import teilweise nicht alle Ports importiert<br>
[Bug]          JDisc Import bricht in sehr großen Netzumgebungen ohne Fehler ab<br>
[Bug]          Manuelle Sortierung über Drag'n'Drop im QCW wird nicht gespeichert<br>
[Bug]          Es koennen nicht alle Objekttypen via QCW bearbeitet werden<br>
[Bug]          Schlechte Formatierung der Listen in einem PDF aus Report Manager<br>
[Bug]          Report View: Geräte in einem Standort - Icons fehlen<br>
[Bug]          Softwarezuweisungen werden beim JDisc Import nicht als Änderungen im Logbuch aufgeführt<br>
[Bug]          Über den JDisc Import erstellte Objekte sind im Logbuch nicht erkennbar<br>
[Bug]          Die globale Liste aller Beziehungen verursacht unter Umständen Speicherüberläufe<br>
[Bug]          Gastsysteme werden über den JDisc Import nur teilweise importiert<br>
[Bug]          In der Massenänderung führt der Link auf Templates zum Templatesystem<br>
[Bug]          Fehlerhaftes Design beim Erstellen einer Änderungsvorlage<br>
[Bug]          Kategorie Service: Leerer Alias führt zu SQL-Error<br>
[Bug]          Veraltetes Redbox-Theme ist in manchen Umgebungen weiterhin auswählbar<br>
[Bug]          Validierung: Die Dropdown Funktionalität funktioniert nicht für Währungsfelder<br>
[Bug]          Verbesserte Darstellung von Validierungsfehlern<br>
[Bug]          Listeneditierung: Javascript für setzen aller Werte funktioniert nicht mehr, wenn Validierungen für die Kategorie gesetzt sind<br>
[Bug]          API: DNS-Domain in Kategorie IP Adresse kann nicht gespeichert werden<br>
[Bug]          CSV Import per Controller schlägt fehl<br>
[Bug]          Kategorie Ports: Im Objektbrowser für Kabel kann man keinen Objekttyp auswählen, eine Kabelauswahl ist auch mit Suggestion Search nicht möglich<br>
[Bug]          Einige Variablen in der Zugriffskategorie werden auf der Übersichtsseite nicht übersetzt.<br>
[Bug]          API-Methode "impact" führt zu PHP-Fehlermeldungen<br>
[Bug]          Beim Download von Imports kommt ein Permission Denied Fehler<br>
[Bug]          Templates: Menüpunkt Objekte anlegen wird neue Startseite für Templates<br>
[Bug]          Die Massenänderung soll als Startseite für die Massenänderung dienen<br>
[Bug]          Vertragslaufzeit wírd falsch angegeben<br>
[Bug]          Redundante Informationen in Kategorie "Aktuelle Datei"<br>
[Bug]          Die Buttons in der Unterkategorie "zugewiesene Objekte" (Notfallplan) werden nicht ausgeblendet.<br>
[Bug]          Adressbereich-Berechnung zeigt falsche Ergebnisse<br>
[Bug]          IP-Liste lässt sich nicht weiter erweitern wenn man eine Hostadresse gelöst hat oder einem Objekt zuweist.<br>
[Bug]          Berechnung der Anzahl freier IP-Adressen für Supernet ist falsch<br>
[Bug]          Fehlermeldung beim Erstellen einer WAN-Leitung<br>
[Bug]          Ein "/" im Dialog+ Feld macht die Ansicht und das Feld kaputt. Der Inhalt ist vorerst nicht mehr sichtbar<br>
[Bug]          Im Internet Explorer funktionieren die Shortcuts nicht<br>
[Bug]          Listenfilter filtert nicht korrekt bei Umlauten<br>
[Bug]          Admin-Center: Ist beim Anlegen eines neuen Mandanten das root Passwort falsch, wird die Fehlermeldung "mysql_select_db() expects parameter 2 to be resource, boolean given (/var/www/html/idoit_update/setup/functions.inc.php:131)" angezeigt<br>
[Bug]          IT-Service-Filter: Objekttyp "Objektgruppe" fehlt in der Liste<br>
[Bug]          Heruntergeladene Reports aus dem Online Repository wurden nicht in der Report Liste dargestellt.<br>
[Bug]          Zuweisung von CE-VLANs wirft SQL-Fehler<br>
[Bug]          Entfernen der Hinweise und Links zu veraltetem i-doit-Wiki "doc.i-doit.org"<br>
[Bug]          Objekterstellung im Anschluss-Browser ohne Typauswahl<br>
[Bug]          PHP-Fehler beim Editieren eines Anschlusses<br>
[Bug]          Textfeld für die Auswahl der Seitenzahl in Listen ist zu klein ab drei Stellen<br>
[Bug]          Anlegen mehrerer Speicher legt nur einen an.<br>
[Bug]          IT-Service Logbuch filtert nicht nach IT-Service Komponenten<br>
[Bug]          Zukünftiges Vertragsende lässt sich nicht eintragen.<br>
[Bug]          Listeneditierung: Datumsfelder können nicht über die "Alle" Funktion editiert werden.<br>
[Bug]          Berechnungsfehler in der Spezifischen Kategorie Vertragsinformationen.<br>
[Bug]          Der LDAP Connection-Test zeigt kein Ergebnis an<br>
[Bug]          Zugewiesener IT-Service in Kategorie "Installation" wird nicht gespeichert.<br>
[Bug]          Nach jedem Import (CMDB, JDisc, CSV) muss man den Rechte Cache leeren für Benutzer die nur über das Recht "Objekte unterhalb einer Lokation" verfügen.<br>
[Bug]          Beim Aktualisieren des Dashboards wird die Meldung angezeigt, dass aktuell keine Widgets eingerichtet sind<br>
[Bug]          Keine Pflichtfeldüberprüfung in "Benutzerdefinierte Kategorien"<br>
[Bug]          Die Verwaltung funktioniert nicht mehr, wenn Check_MK deaktiviert wurde<br>
[Bug]          In der Kategorie Logische Ports wird das Feld für die Port-Zuweisung nicht geladen wenn man ein bestehenden logischen Port editiert.<br>
[Bug]          Logout mit JAVA-Fehlermeldung trotz Aktivität in Widget-Objekt-Browser<br>
[Bug]          Erster Login eines Benutzers per LDAP wirft Fehlermeldung "Unknown error while creating the LDAP-User - Received an empty user-id."<br>
[Bug]          Nicht numerische Eingabe macht Widget "unbrauchbar" (Entfernen und Neuladen nötig).<br>
[Bug]          Lizensierung beim Mandantenwechsel fehlerhaft<br>
[Bug]          Suche in Attribut-Auswahl ist nicht auf bestimmte Kategorien limitiert<br>
[Bug]          SYSID kann in der Listeneditierung nicht bearbeitet werden<br>
[Bug]          Beim Login werden mehrere Mandanten angezeigt, selbst wenn die Person nur in einem davon den Status "normal" hat<br>
[Bug]          Protokoll eines JDisc-Imports wird falsch verlinkt<br>
[Bug]          Beim Konfigurieren des Objektlisten-Widgets werden Fehler bei der Auwahl von Objekten angezeigt<br>
[Bug]          Beim erneuten Installieren einer bestehenden Lizenz erscheint nur die Sprachkonstante des Fehlers<br>
[Bug]          Wenn eine falsche Lizenz hochgeladen wird, erscheint die Sprachkonstante der Fehlermeldung in der Überschrift<br>
[Bug]          CSV Import: Bei der Kategorie Buchhaltung wird das Attribut "Eingekauft bei" nicht importiert.<br>
[Bug]          Neuestes Updatepaket zeigt im zweiten Update-Schritt die Meldung "Unknown column 'isys_settings__isys_mandator__id' in 'where clause' " und bricht ab<br>
[Bug]          H-Inventory Import bricht ab einer gewissen Stelle ab und importiert nicht alle Daten.<br>
[Bug]          Kategorie "Anschrift" lässt sich nicht in Übersichtsseite integrieren<br>
[Bug]          Benachrichtigungs-Variable %notification_templates__report% erzeugt falsche Objekt-Links<br>
[Bug]          Fehlermeldung beim Deinstallieren von Modulen ist nicht in die GUI integriert.<br>
[Bug]          Neue Felder für Benachrichtung "%notification_templates__report%"<br>
[Bug]          Fehler im CSV-Import bei der Zuweisung zu einem Standort<br>
[Bug]          Benachrichtigungstyp "Ablauf von Wartungsfristen" berücksichtigt lediglich Verträge<br>
[Bug]          Im Login Fenster für das Admin-Center sind die Felder unterschiedlich lang<br>
[Bug]          Anschluss kann nicht ausgewählt werden, wenn ein Objekt über einen Report im Browser gefiltert wird<br>
[Bug]          Einige Felder werden in der Listenansicht trotz ausgefüllten Werten nicht angezeigt<br>
[Bug]          Port mit der Bezeichnung "0" kann nicht verwendet werden.<br>
[Bug]          VLAN IDs in Kategorie "Virtuelle Switche" werden nicht gespeichert, wenn mehr als 10 Portgruppen angelegt sind<br>
[Bug]          Quickinfo lässt sich nicht ausschalten<br>
[Bug]          Dashboard-Quicklaunch: Nicht übersetzter Wert: LC__WIDGET__QUICKLAUNCH_USER_SETTINGS<br>
[Bug]          Der Status Filter in den Objekt Listen hat auch Auswirkungen in manchen Listen Kategorien.<br>
[Bug]          i-doit langsam bei sehr hohem Session-Timeout<br>
[Bug]          Unnötige Scroll-Balken im Hostadressen-Browser<br>
[Bug]          Vertragsdetails werden erst nach erneutem Editieren korrekt angezeigt.<br>
[Bug]          Software Browser bietet keine Dienste zur Auswahl als Clusterdienst<br>
[Bug]          Das Recht "Kategorie in Objekttyp" verhindert die Konfiguration der Listenansicht<br>
[Bug]          Backup-Pfad kann nicht dokumentiert werden<br>
[Bug]          Report Manager: Beim erstellen eines Reports via SQL-Editor wird die Kategorie nicht korrekt übernommen<br>
[Bug]          Schreibfehler "Aurichtung" im "CMDB-Explorer"-Fenster<br>
[Bug]          Texte der Objekte im CMDB-Explorer gehen ineinander über (überdecken sich).<br>
[Bug]          Darstellungsfehler in der Kategorie "Vertragsinformationen"<br>
[Bug]          QuickInfo im Anschluss-Browser kaum erreichbar<br>
[Bug]          Objekt-Titel-Feld beim Duplizieren ist zu groß.<br>
[Bug]          Lange Formularfelder sprengen Ansicht bei Bearbeitung von IT-Service Beziehungen<br>
[Bug]          In der Listeneditierung wird bei der Globalen Kategorie "Buchhaltung" das Attribut "Datum der Anschaffung" nicht in der ersten Zeile angezeigt.<br>
[Bug]          Auswahl nicht möglich beim Widget "CMDB-Explorer"<br>
[Bug]          Widgetkonfiguration: Schreibweise des Fenstertitels und von "Standard" inkorrekt<br>
[Bug]          Suche findet keine Inhalte aus dem Feld "Inventarnummer".<br>
[Bug]          [CSV-Import] Fehler bei Standortverknüpfung, wenn Standort-Name mehrmals verwendet wird<br>
[Bug]          Hosting-Lizenz kann für Mandanten nicht aktiviert werden<br>
[Bug]          Attribute "Einsatzzweck" und "Beschreibung" können über den CSV-Import nicht aktualisiert werden<br>
[Bug]          Fehler Beim Import einer CSV-Datei:Allowed memory size of [ ... ] bytes exhausted in [ ... ]/isys_module_import_csv.class.php on line 908<br>
[Bug]          Massenänderung macht aus allen geänderten Objekten eine Änderungsvorlage<br>
[Bug]          Kategorie "Organisation" => "Zugewiesene Objekte": Einträge können nicht gelöscht werden<br>
[Bug]          Wenn man in der Spez. Kategorie "Schränke" mehr als 11 Schränke zugewiesen hat, verschwindet das Gerät aus Position 1, wenn man die Position 1 an die Position 11 setzt.<br>
[Bug]          Kontakte können in der Zuweisung nur über eine Rolle verfügen<br>
[Bug]          CSV Import kann Multivalue Kategorien nicht updaten (erstellen klappt ohne Probleme)<br>
[Bug]          Kategorie eines Reports wird nicht beim Erzeugen über den SQL-Editor übernommen<br>
[Bug]          Wenn man im Rechtesystem einen User auswählt werden die jeweiligen Rechte nicht geladen.<br>
[Bug]          Neue "Alle auswählen" Funktion für die Multiauswahl (Chosen)<br>
[Bug]          Beschreibungsfeld der Kategorie Allgemein wird bei der Massenänderung nicht übernommen.<br>
[Bug]          Filtern in Objektlisten mit Suchbegriffen, die Umlaute erhalten ist nicht möglich<br>
[Bug]          Wenn eine 0 in einem Dialog-Plus Feld ausgewählt wird, enthält die Anzeige einen anderen Wert<br>
[Bug]          SLA Servicelevel ist nicht in Dialog Admin aufgeführt<br>
[Bug]          PHP Database error, wenn NDO Datenbank Verbindung fehlschlägt<br>
[Bug]          Wenn einer der konfigurierten JDisc Server nicht erreichbar ist, kann weder ein Import gemacht, noch ein Profil bearbeitet werden<br>
[Bug]          Der Funktionsknopf "Doppelte Single-Value Einträge löschen" löscht Softwarezuweisungen die nicht gelöscht werden sollten.<br>
[Bug]          Adressierbarkeit der benutzerdefinierten Kategorien über die JSON-RPC API<br>
[Bug]          Benutzer mit dem Recht "Objekte unterhalb einer Lokation" kann in der Listeneditierung alle Objekte auswählen und bearbeiten.<br>
[Bug]          Zielobjekt in Kategorie "Logische Ports" ist in der Listenansicht leer<br>
[Bug]          Wenn die Bedingungen im Abfrage-Editor nicht auf Objekttypen beschränken, werden ebenfalls Beziehungen angezeigt<br>
[Bug]          Die Rückwärtige Kategorie von "Kontaktzuweisung" zeigt alle archivierte/gelöschte Zuweisungen an.<br>
[Bug]          Benutzerdefinierte Kategorien werden beim Duplizieren nicht berücksichtigt<br>
[Bug]          Report View QR Code zeigt manchmal keine QR Code Images<br>
[Bug]          Der Wert für "Speicherkapazität" wird beim CSV-Import nicht importiert/berücksichtigt.<br>
[Bug]          Standortpfad von Objekten wird nicht angepasst, wenn zuvor kein Standort ausgewählt wurde und das Objekt einem Slot eines Chassis zugewiesen wird<br>
[Bug]          IT-Service Konsistenzprüfung berücksichtigt auch archivierte/gelöschte Zuweisungen zu einem IT-Service.<br>
[Bug]          Softwarebeziehung wird nicht entfernt, wenn die Installation (aus der Software heraus via Quickpurge) entfernt wird<br>
[Bug]          Installation meldet keinen Fehler bei falschem Root-Namen<br>
[Bug]          Wechsel aus Objekt in die CMDB-Explorer Ansicht ändert nicht die Positionsmarkierung<br>
[Bug]          Wiederholtes Speichern erzeugt mehrere Reports<br>
[Bug]          Fehler in Listeneditierung: "Allgemeiner Fehler..." nach Auswahl einer Kategorie, kein weiteres Arbeiten mit einer Auswahl möglich.<br>
[Bug]          Überflüssiger Rollbalken am rechten Fensterrand in Widget "Meine Lesezeichen"<br>
[Bug]          Das Verknüpfen einer Zentrale in Kategorie Organisation erzeugt keine Beziehung<br>
[Bug]          In der Kategorie "Virtuelle Geräte" tauchen, wenn zuvor "Storage" ausgewählt wurde unter "Host Ressource" dieselben Geräte mehrfach auf. Außerdem wird eine falsche Auswahl gespeichert.<br>
[Bug]          Mehrmaliges Speichern eines neuen Eintrags in einer Multi-Value-Kategorie führt zu mehreren neuen Einträgen.<br>
[Bug]          Duplizieren eines Objekts bewirkt, dass das Änderungsdatum des duplizierten Objekts ebenfalls aktualisiert wird.<br>
[Bug]          Einstellung des Session-Timeouts findet keine Anwendung.<br>
[Bug]          Button "Doppelte Single-Value-Einträge löschen" entfernt Lizenzschlüssel<br>
[Bug]          Fehler beim Speichern der Listenkonfiguration, wenn Feld Personenstammdaten -> Anrede dargestellt werden soll<br>
[Bug]          CSV Import aktualisert Objekt Titel nicht<br>
[Bug]          Bei der Neuanlage einer LUN werden die Zugeordneten Geräte nicht gespeichert.<br>
[Bug]          Filter auf Objekt-Titel mit Umlauten in Objekttyp "Arbeitsplatz" finden keine Ergebnisse<br>
[Bug]          Entfernen von bestehenden Multi-Value-Kategorie-Einträgen über ein Update mit dem CSV-Import lässt die zugehörige Beziehung zurück<br>
[Bug]          Suche nach der Deselektion eines Objektypen ergibt leeres Klapplistenfeld "Objekttypen" und Hinweistext "Eingabe zu kurz oder leer" wird zusätzlich angezeigt.<br>
[Bug]          Validierung: Felder und Listen "verrutschen" bei Auswahl von "Regulärem Ausdruck..." für die Attributentsprechung.<br>
[Bug]          Validierung: Verarbeitung (und Verwendung) von scharfem S ("ß") (und den anderen deutschen Umlauten) ist im "Textfeld als Dropdown-Liste..." inkorrekt.<br>
[Bug]          Einstellung zu Quickinfo wird zurückgesetzt, wenn der Cache geleert wird.<br>
