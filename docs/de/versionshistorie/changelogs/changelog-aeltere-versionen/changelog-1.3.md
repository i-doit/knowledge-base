# Changelog 1.3

[Erweiterung]  Schnittstelle zum IT Monitoring System Check_MK (http://mathias-kettner.de/check_mk.html)  
[Erweiterung]  Check_MK: Validierung von Exports  
[Erweiterung]  Neue Kategorie für N:M Beziehung für Software und Check_MK Services  
[Erweiterung]  Vererbte Ansicht in der Softwarezuweisung für Check_MK Services  
[Erweiterung]  Check_MK: Neuer Logbuch Controller zum Updaten von historischen Statusinformationen zu Hosts  
[Erweiterung]  Bünderlung der Nagios und Check_MK Status Abfragen in Listenansichten  
[Erweiterung]  Diverse Optimierungen im neuen i-doit Design  
[Erweiterung]  Neues Hinweis- und Erfolgsmeldungssystem in der i-doit Oberfläche  
[Erweiterung]  Erweiterung der Listeneditierung um weitere Kategorien (z.B. Hostadresse, SW-Zuweisung)  
[Erweiterung]  Neuer Feldtyp Objekt-Beziehung bei den Benutzerdefinierten Kategorien  
[Erweiterung]  Neues Feld "Mountpoint" in Kategorie "Freigabezugriff"  
[Erweiterung]  Speicherbare CSV Profile  
[Erweiterung]  CSV Import: Keyfeld für Referenzierung eines Objektes und Ermöglichung von Updates  
[Erweiterung]  CSV Import: Import in Beschreibungsfelder  
[Erweiterung]  Neues Feld "Zahlweise" in Kategorie Vertragsinformationen  
[Erweiterung]  Möglichkeit zur Auswahl eines bestehenden Objektbildes  
[Erweiterung]  Import von mehreren JDisc/JEDI Servern  
[Erweiterung]  Darstellung des CMDB Status in der Schrankansicht  
[Erweiterung]  CMDB Status in Quickinfo mit aufnehmen  
[Erweiterung]  Neue globale Kategorie Anschrift  
[Erweiterung]  Firma beim LDAP-Kontakte-Sync mit importieren und entsprechend verknüpfen  
[Erweiterung]  Nur bestimte LDAP Server per Kommandozeile synchronisieren  
[Erweiterung]  Verwaltungsoberfläche für Rollen in der Kategorie Kontaktzuweisung  
[Erweiterung]  Direkteinstieg zu bestimmter Objekt-ID über die globale Suche mit # Präfix (#1234)  
[Erweiterung]  Möglichkeit zur Anzeige von Text unterhalb eines QR Codes  
[Erweiterung]  Aktualisierung der JDisc-Schnittstelle (Version 3)  
[Erweiterung]  JDisc Import von Blades  
[Erweiterung]  JDisc Import von Clusterkonfigurationen  
[Erweiterung]  JDisc Import von IPv6 Adressen  
[Erweiterung]  JDisc Erkennung von Switch Interfaces  
[Erweiterung]  Exportierter "contact_name" im Nagios Export nun benutzerdefiniert  
[Erweiterung]  Neuer Rechtepfad: Kategorien in Lokation  
[Erweiterung]  Neuer Rechtepfad: Kategorien in Objekt  
[Erweiterung]  Update der i-doit Template Enging "Smarty" von Version 2 auf 3.1.15  
[Erweiterung]  Zwei neue Platzhalter %objectname_downcase% und "%objectname_uppercase%" in Kategorie Zugriff  
[Erweiterung]  Neue BTU Angaben in Rackansicht  
[Erweiterung]  Neues Settings Handling; Die config.inc.php wurde aus dem Dateisystem in die Oberfläche (Verwaltung -> Systemeinstellungen) verlagert  
[Bugfix]       Logbuch Änderungen werden nicht mehr protokolliert  
[Bugfix]       Spezifische Kategorie Mobiltelefon umbenannt in Mobilfunk  
[Bugfix]       Kategorie "Cluster": Beim öffnen des Beziehungs- Objektbrowsers, funktioniert die Preselection nicht. Es wird immer die Root-Lokation selektiert.  
[Bugfix]       Layer-2-Netze: Kategorie "Zugewiesene log. Ports": Spalte Objekt zeigt nur den Objekttypen und nicht das Objekt an.  
[Bugfix]       Generelle merging Probleme bei den Kategorien Port, Logischer Port und Hostadresse beim JDisc Import  
[Bugfix]       Beim OCS Import wurden die zu aktualisierenden Objekte neu erstellt wenn man die Modell Kategorie für den Import nicht ebenfalls selektiert.  
[Bugfix]       Mögliche XSS Injektion beim setzen eines Objekt Titels über die i-doit APi  
[Bugfix]       Mögliches XSS Problem (siehe CVE-2014-1597)  
[Bugfix]       Die IP Statistik in der Kategorie IP Liste für IPV4 zeigte eine falsche Anzahl von freien IP Adressen an.  
[Bugfix]       Listeneditierung: Verwendung der Listeneditierung leert das Beschreibungsfeld (beobachtet in Kategorie Allgemein)  
[Bugfix]       Einträge der Kategorie "Allgemein" im Objekttyp "Blade Chassis" werden über die Massenänderung nicht angepasst.  
[Bugfix]       Diverse JDisc Fehlerbehebungen  
[Bugfix]       Die Verwaltungsinstanz wird entfernt, wenn ein Objekt als Gastsystem zugewiesen wird  
[Bugfix]       Die Gastsystemzuweisung erzeugt keinen Logbuch Eintrag  
[Bugfix]       Ein Problem im Dialog-Admin wurde gelöst, bei welchem einige Felder nicht korrekt bearbeitet werden konnten  
[Bugfix]       Problembehebung bei einem Report, welcher das Schlüsselwort "update" beinhaltet  
[Bugfix]       Das Kalenderwidget zeigt Dezember 2013 nicht richtig an  
[Bugfix]       Feld Lizenz zur Softwarezuweisungsliste hinzugefügt  
[Bugfix]       Mögliche Ajax XSS Schwachstelle (siehe CVE-2014-1237)  
[Bugfix]       Ein LDAP Problem wurde gelöst, bei welchem sich einige Benutzer mit Sonderzeichen im Namen nicht korrekt anmelden konnten  
[Bugfix]       Die Kategorie Hostadresse ist auf der Übersichtsseite nicht zugänglich  
[Bugfix]       Bei Kontaktobjekten (Personen, Personengruppen, ...) kann in der Kategorie "Allgemein" die Bezeichnung geändert werden  
               Dieses Feld sollte jedoch gesperrt sein, wie es auf der Übersichtsseite der Fall ist, und aus den Stammdaten übernommen werden  
[Bugfix]       Es ist nicht möglich die Kategorie Dateiversionen zu speichern  
[Bugfix]       Auf der Übersichtsseite des Objekttypen Dateien funktioniert die Auswahl einer neuen Datei nicht  
[Bugfix]       Wenn als Dateiversion "-" gewählt wurde, kann ab diesem Zeitpunkt keine andere Datei mehr gewählt werden  
[Bugfix]       Selbst bei vollständig entzogenen Rechten für das Modul CMDB ist im linken Baum-Menü die erste Objekttypgruppe zu sehen (jedoch ist diese leer)  
[Bugfix]       Wenn eine Beziehung über Gastsysteme erzeugt wird, bleibt die Eigenschaft "Läuft auf Host / Cluster" der Kategorie "Virtuelle Maschine" leer  
               Weist man hier nun das Cluster zu, wird die Beziehung doppelt erzeugt  
[Bugfix]       Wenn über Chrome & Safari benutzerdefinierte Kategorien bearbeitet werden, werden die Feldtypen beim Bearbeiten auf "Text" geändert  
[Bugfix]       Raum-Schrankansicht: Vorder/Rückseite umschalten ist nicht möglich  
[Bugfix]       Die Logbuch Wiederherstellen Funktion schlägt fehl  
[Bugfix]       Problem mit expliziten Beziehungen in einem IT-Service  
[Bugfix]       In der IP-Liste ist der Default GW nicht gelb markiert  
[Bugfix]       Kategorie Hostadressen: Primär und Aktiv muss standardmäßig auf „JA“  
[Bugfix]       Konfiguration einer Standard-Sortierung über die Objektlistenkonfiguration führt bei manchen Eigenschaften dazu, dass die Objektlisten nicht aufgerufen werden können  
[Bugfix]       Keine Sprach-Lokalisierung der Buttons unter Extras -> Suche  
[Bugfix]       Clustereigenschaften im Rahmen von Verknüpfungen werden willkürlich ohne Benutzereingabe festgelegt  
[Bugfix]       Häufigkeit von Checklisten (Workflows) kann nicht korrekt verwendet werden  
[Bugfix]       Mehrfachauswahl des IT Services in Kategorie Softwarezuweisung nicht möglich  
[Bugfix]       Kategorienordner Dienste ist nicht verfügbar  
[Bugfix]       Auswahl des Feldtyps "HTML" in Benutzerdefinierten Kategorien bewirkt, dass in der Kategorie eine nicht nutzbare Fläche ohne Eingabefunktion erzeugt wird  
[Bugfix]       Leereinträge in Datumsfeldern sind nicht wirklich leer sondern werden als 0000-00-00 oder 01.01.1970 dargestellt  
[Bugfix]       Kategorie "Monitor": Die Eigenschaft "Lautsprecher" wird nicht gespeichert, wenn diese auf "nein" gesetzt wird.  
               Die Anzeige im View-Mode der Kategorie bleibt leer. Beim nächsten Öffnen des Edit-Mode steht die Eigenschaft auf "ja".  
[Bugfix]       Wenn unter Eigene Reports => Neu => die Eigenschaft "Benutzerspezifisch" gewählt wird, ist der Report nach dem Abspeichern trotzdem global  
[Bugfix]       Darstellung der Eigenschaft "Geldwert/Preis" aus Kategorie Buchhaltung ist in der Listenansicht undeutlich  
[Bugfix]       Kategorienordner DBMS: Hier muss es wie im Kategorienordner Anwendungen eine Kategorie "Varianten" geben  
[Bugfix]       Das Feld Cluster Verwaltungsinstanz wählt automatisch ein willkürliches Objekt aus  
[Bugfix]       Bei einer Massenänderung wird in Kategorie Modell unter Hersteller immer das erste Feld ausgewählt  
[Bugfix]       Das Freigeben von IP Adressen durch die Archivierung oder Löschung des Hostadressen Eintrages veranlasst das Entfernen der Adresse nicht aus der IP-Adressliste  
[Bugfix]       Beim Duplizieren eines Objekts wird trotz Vergebung eines neuen Namens eine #2 angehängt  
[Bugfix]       Fehler beim Duplizieren im CMDB Explorer  
[Bugfix]       Beim duplizieren/importieren wird die Benutzerdefinierte Kategorie immer neu erzeugt  
[Bugfix]       Syslog Daten aus controller Module werden nicht mehr importiert  
[Bugfix]       Das Kontextmenü für eine Node im CMDB Explorer funktiniuert nicht  
[Bugfix]       API: cmdb.object_types gibt die "Objektgruppe" nicht mit aus  
[Bugfix]       Einige Sonderzeichen können über die API nicht an i-doit übermittelt werden  
[Bugfix]       Der LDAP Sync füllt einige Parameter zum jeweiligen Personen Objekt nicht korrekt  
[Bugfix]       Die Vorschlagfunktion für IP Adressen schlägt IP Adressen vom falschen Typ vor  
[Bugfix]       In der IP Adressliste können keine Bereiche definiert werden  
[Bugfix]       Archivierte IP Adressen können ienen IP-Adress Konflikt in der IP Adressliste verursachen  
[Bugfix]       Das Paging in den Suchergebnissen funktioniert nicht  
[Bugfix]       IE8 - Die Rechtesystem Parameter werden im Internet Explorer 8 nicht nachgeladen  
[Bugfix]       [Widget] Die Lizenzübersicht errechnet einen falschen "verbleibende Tage" Wert  
[Bugfix]       Auf der Übersichtsseite werden unter gewissen Umständen nicht die konfigurierten Kategorien dargestellt  
[Bugfix]       [Nagios] Der Export zeigt teilweise einen "Malformed JSON ..." Fehler  
[Bugfix]       Darstellungsfehler unter der Kategorie Supernet: Aus "x/y adressen frei" wurde "x/y Adressen in Benutzung"  
[Bugfix]       Die Kategorie Vertragszuweisung zeigt leere Daten als 01.01.1970 an  
[Bugfix]       Der Button "Alle unfertigen und archivierten Objekte löschen" zeigt einen Bestätigungsdialog mit Umlautfehlern an  
[Bugfix]       Das löschen von unfertigen/archivierten oder gelöschten Kategorieeinträgen zeigt eine SQL Exception  
[Bugfix]       Die Kategorie Hostadresse zeigt leere Einträge auf der Überssichtsseite  
[Bugfix]       Die Farbe von IP Adressen in der IP Liste ändert sich nicht wenn die Adresszuweisungsmethode in der Hostadresse geändert wurde  
[Bugfix]       Das Duplizieren oder Ändern von Informationen in der Massenänderung resultiert in doppelten Kategorieeinträgen  
[Bugfix]       Das Sortieren von Suchergebnissen funktioniert nicht  
[Bugfix]       Der Einsatzzweck in Kategorie Allgemein ist in den Listenansichten leer  
[Bugfix]          [Objekt-Browser] In der Standortsicht werden nur Standort-Objekte angezeigt.  
[Bugfix]       [Objekt-Browser] der Filter "Gruppe" sollte "Objektgruppe" heißen.  
[Bugfix]       Das Archivieren von Chassis Slots resultiert in einer Fehlermeldung  
[Bugfix]       Die Übersichtsseite zeigt nicht die korrekten Kategorien wenn die Rechtesystem Regel "Kategorien in Objekttypen" verwendetet wird  
[Bugfix]       Wenn mehr als eine Berechtigung auf Reports gelegt wird bleibt die Anzeige von Reports komplett leer  
[Bugfix]       Lizenzierungsproblem im Zusammenhang mit der i-doit Mandanten Datenbank  
[Bugfix]       Die Massenänderungn funktioniert nicht mit Objektbildern  
[Bugfix]       Einige Logbuch Änderungen werden nicht mehr protokolliert  
[Bugfix]       Single Sign On Problem bei Übergeben der Domäne  
[Bugfix]       Das Lösen einer IP Adresse in der IP-Liste erzeugt keinen Logbuch Eintrag in dem Objekt  
[Bugfix]       Sprachkonstanten in Anschlüsse-Kategorie  
[Bugfix]       "Neu" Button im globalen Logbuch entfernt  
[Bugfix]       Der Listenfilter für Objektlisten funktioniert nicht richtig  
[Bugfix]       Session Warnung bei automatischer Abmeldung  