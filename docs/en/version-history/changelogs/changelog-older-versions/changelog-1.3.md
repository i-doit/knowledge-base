---
search:
  exclude: true
---
# Changelog 1.3
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Erweiterung]  Schnittstelle zum IT Monitoring System Check_MK (<http://mathias-kettner.de/check_mk.html>)<br>
[Erweiterung]  Check_MK: Validierung von Exports<br>
[Erweiterung]  Neue Kategorie für N:M Beziehung für Software und Check_MK Services<br>
[Erweiterung]  Vererbte Ansicht in der Softwarezuweisung für Check_MK Services<br>
[Erweiterung]  Check_MK: Neuer Logbuch Controller zum Updaten von historischen Statusinformationen zu Hosts<br>
[Erweiterung]  Bünderlung der Nagios und Check_MK Status Abfragen in Listenansichten<br>
[Erweiterung]  Diverse Optimierungen im neuen i-doit Design<br>
[Erweiterung]  Neues Hinweis- und Erfolgsmeldungssystem in der i-doit Oberfläche<br>
[Erweiterung]  Erweiterung der Listeneditierung um weitere Kategorien (z.B. Hostadresse, SW-Zuweisung)<br>
[Erweiterung]  Neuer Feldtyp Objekt-Beziehung bei den Benutzerdefinierten Kategorien<br>
[Erweiterung]  Neues Feld "Mountpoint" in Kategorie "Freigabezugriff"<br>
[Erweiterung]  Speicherbare CSV Profile<br>
[Erweiterung]  CSV Import: Keyfeld für Referenzierung eines Objektes und Ermöglichung von Updates<br>
[Erweiterung]  CSV Import: Import in Beschreibungsfelder<br>
[Erweiterung]  Neues Feld "Zahlweise" in Kategorie Vertragsinformationen<br>
[Erweiterung]  Möglichkeit zur Auswahl eines bestehenden Objektbildes<br>
[Erweiterung]  Import von mehreren JDisc/JEDI Servern<br>
[Erweiterung]  Darstellung des CMDB Status in der Schrankansicht<br>
[Erweiterung]  CMDB Status in Quickinfo mit aufnehmen<br>
[Erweiterung]  Neue globale Kategorie Anschrift<br>
[Erweiterung]  Firma beim LDAP-Kontakte-Sync mit importieren und entsprechend verknüpfen<br>
[Erweiterung]  Nur bestimte LDAP Server per Kommandozeile synchronisieren<br>
[Erweiterung]  Verwaltungsoberfläche für Rollen in der Kategorie Kontaktzuweisung<br>
[Erweiterung]  Direkteinstieg zu bestimmter Objekt-ID über die globale Suche mit # Präfix (#1234)<br>
[Erweiterung]  Möglichkeit zur Anzeige von Text unterhalb eines QR Codes<br>
[Erweiterung]  Aktualisierung der JDisc-Schnittstelle (Version 3)<br>
[Erweiterung]  JDisc Import von Blades<br>
[Erweiterung]  JDisc Import von Clusterkonfigurationen<br>
[Erweiterung]  JDisc Import von IPv6 Adressen<br>
[Erweiterung]  JDisc Erkennung von Switch Interfaces<br>
[Erweiterung]  Exportierter "contact_name" im Nagios Export nun benutzerdefiniert<br>
[Erweiterung]  Neuer Rechtepfad: Kategorien in Lokation<br>
[Erweiterung]  Neuer Rechtepfad: Kategorien in Objekt<br>
[Erweiterung]  Update der i-doit Template Enging "Smarty" von Version 2 auf 3.1.15<br>
[Erweiterung]  Zwei neue Platzhalter %objectname_downcase% und "%objectname_uppercase%" in Kategorie Zugriff<br>
[Erweiterung]  Neue BTU Angaben in Rackansicht<br>
[Erweiterung]  Neues Settings Handling; Die config.inc.php wurde aus dem Dateisystem in die Oberfläche (Verwaltung -> Systemeinstellungen) verlagert<br>
[Bugfix]       Logbuch Änderungen werden nicht mehr protokolliert<br>
[Bugfix]       Spezifische Kategorie Mobiltelefon umbenannt in Mobilfunk<br>
[Bugfix]       Kategorie "Cluster": Beim öffnen des Beziehungs- Objektbrowsers, funktioniert die Preselection nicht. Es wird immer die Root-Lokation selektiert.<br>
[Bugfix]       Layer-2-Netze: Kategorie "Zugewiesene log. Ports": Spalte Objekt zeigt nur den Objekttypen und nicht das Objekt an.<br>
[Bugfix]       Generelle merging Probleme bei den Kategorien Port, Logischer Port und Hostadresse beim JDisc Import<br>
[Bugfix]       Beim OCS Import wurden die zu aktualisierenden Objekte neu erstellt wenn man die Modell Kategorie für den Import nicht ebenfalls selektiert.<br>
[Bugfix]       Mögliche XSS Injektion beim setzen eines Objekt Titels über die i-doit APi<br>
[Bugfix]       Mögliches XSS Problem (siehe CVE-2014-1597)<br>
[Bugfix]       Die IP Statistik in der Kategorie IP Liste für IPV4 zeigte eine falsche Anzahl von freien IP Adressen an.<br>
[Bugfix]       Listeneditierung: Verwendung der Listeneditierung leert das Beschreibungsfeld (beobachtet in Kategorie Allgemein)<br>
[Bugfix]       Einträge der Kategorie "Allgemein" im Objekttyp "Blade Chassis" werden über die Massenänderung nicht angepasst.<br>
[Bugfix]       Diverse JDisc Fehlerbehebungen<br>
[Bugfix]       Die Verwaltungsinstanz wird entfernt, wenn ein Objekt als Gastsystem zugewiesen wird<br>
[Bugfix]       Die Gastsystemzuweisung erzeugt keinen Logbuch Eintrag<br>
[Bugfix]       Ein Problem im Dialog-Admin wurde gelöst, bei welchem einige Felder nicht korrekt bearbeitet werden konnten<br>
[Bugfix]       Problembehebung bei einem Report, welcher das Schlüsselwort "update" beinhaltet<br>
[Bugfix]       Das Kalenderwidget zeigt Dezember 2013 nicht richtig an<br>
[Bugfix]       Feld Lizenz zur Softwarezuweisungsliste hinzugefügt<br>
[Bugfix]       Mögliche Ajax XSS Schwachstelle (siehe CVE-2014-1237)<br>
[Bugfix]       Ein LDAP Problem wurde gelöst, bei welchem sich einige Benutzer mit Sonderzeichen im Namen nicht korrekt anmelden konnten<br>
[Bugfix]       Die Kategorie Hostadresse ist auf der Übersichtsseite nicht zugänglich<br>
[Bugfix]       Bei Kontaktobjekten (Personen, Personengruppen, ...) kann in der Kategorie "Allgemein" die Bezeichnung geändert werden<br>
               Dieses Feld sollte jedoch gesperrt sein, wie es auf der Übersichtsseite der Fall ist, und aus den Stammdaten übernommen werden<br>
[Bugfix]       Es ist nicht möglich die Kategorie Dateiversionen zu speichern<br>
[Bugfix]       Auf der Übersichtsseite des Objekttypen Dateien funktioniert die Auswahl einer neuen Datei nicht<br>
[Bugfix]       Wenn als Dateiversion "-" gewählt wurde, kann ab diesem Zeitpunkt keine andere Datei mehr gewählt werden<br>
[Bugfix]       Selbst bei vollständig entzogenen Rechten für das Modul CMDB ist im linken Baum-Menü die erste Objekttypgruppe zu sehen (jedoch ist diese leer)<br>
[Bugfix]       Wenn eine Beziehung über Gastsysteme erzeugt wird, bleibt die Eigenschaft "Läuft auf Host / Cluster" der Kategorie "Virtuelle Maschine" leer<br>
               Weist man hier nun das Cluster zu, wird die Beziehung doppelt erzeugt<br>
[Bugfix]       Wenn über Chrome & Safari benutzerdefinierte Kategorien bearbeitet werden, werden die Feldtypen beim Bearbeiten auf "Text" geändert<br>
[Bugfix]       Raum-Schrankansicht: Vorder/Rückseite umschalten ist nicht möglich<br>
[Bugfix]       Die Logbuch Wiederherstellen Funktion schlägt fehl<br>
[Bugfix]       Problem mit expliziten Beziehungen in einem IT-Service<br>
[Bugfix]       In der IP-Liste ist der Default GW nicht gelb markiert<br>
[Bugfix]       Kategorie Hostadressen: Primär und Aktiv muss standardmäßig auf "JA"<br>
[Bugfix]       Konfiguration einer Standard-Sortierung über die Objektlistenkonfiguration führt bei manchen Eigenschaften dazu, dass die Objektlisten nicht aufgerufen werden können<br>
[Bugfix]       Keine Sprach-Lokalisierung der Buttons unter Extras -> Suche<br>
[Bugfix]       Clustereigenschaften im Rahmen von Verknüpfungen werden willkürlich ohne Benutzereingabe festgelegt<br>
[Bugfix]       Häufigkeit von Checklisten (Workflows) kann nicht korrekt verwendet werden<br>
[Bugfix]       Mehrfachauswahl des IT Services in Kategorie Softwarezuweisung nicht möglich<br>
[Bugfix]       Kategorienordner Dienste ist nicht verfügbar<br>
[Bugfix]       Auswahl des Feldtyps "HTML" in Benutzerdefinierten Kategorien bewirkt, dass in der Kategorie eine nicht nutzbare Fläche ohne Eingabefunktion erzeugt wird<br>
[Bugfix]       Leereinträge in Datumsfeldern sind nicht wirklich leer sondern werden als 0000-00-00 oder 01.01.1970 dargestellt<br>
[Bugfix]       Kategorie "Monitor": Die Eigenschaft "Lautsprecher" wird nicht gespeichert, wenn diese auf "nein" gesetzt wird.<br>
               Die Anzeige im View-Mode der Kategorie bleibt leer. Beim nächsten Öffnen des Edit-Mode steht die Eigenschaft auf "ja".<br>
[Bugfix]       Wenn unter Eigene Reports => Neu => die Eigenschaft "Benutzerspezifisch" gewählt wird, ist der Report nach dem Abspeichern trotzdem global<br>
[Bugfix]       Darstellung der Eigenschaft "Geldwert/Preis" aus Kategorie Buchhaltung ist in der Listenansicht undeutlich<br>
[Bugfix]       Kategorienordner DBMS: Hier muss es wie im Kategorienordner Anwendungen eine Kategorie "Varianten" geben<br>
[Bugfix]       Das Feld Cluster Verwaltungsinstanz wählt automatisch ein willkürliches Objekt aus<br>
[Bugfix]       Bei einer Massenänderung wird in Kategorie Modell unter Hersteller immer das erste Feld ausgewählt<br>
[Bugfix]       Das Freigeben von IP Adressen durch die Archivierung oder Löschung des Hostadressen Eintrages veranlasst das Entfernen der Adresse nicht aus der IP-Adressliste<br>
[Bugfix]       Beim Duplizieren eines Objekts wird trotz Vergebung eines neuen Namens eine #2 angehängt<br>
[Bugfix]       Fehler beim Duplizieren im CMDB Explorer<br>
[Bugfix]       Beim duplizieren/importieren wird die Benutzerdefinierte Kategorie immer neu erzeugt<br>
[Bugfix]       Syslog Daten aus controller Module werden nicht mehr importiert<br>
[Bugfix]       Das Kontextmenü für eine Node im CMDB Explorer funktiniuert nicht<br>
[Bugfix]       API: cmdb.object_types gibt die "Objektgruppe" nicht mit aus<br>
[Bugfix]       Einige Sonderzeichen können über die API nicht an i-doit übermittelt werden<br>
[Bugfix]       Der LDAP Sync füllt einige Parameter zum jeweiligen Personen Objekt nicht korrekt<br>
[Bugfix]       Die Vorschlagfunktion für IP Adressen schlägt IP Adressen vom falschen Typ vor<br>
[Bugfix]       In der IP Adressliste können keine Bereiche definiert werden<br>
[Bugfix]       Archivierte IP Adressen können ienen IP-Adress Konflikt in der IP Adressliste verursachen<br>
[Bugfix]       Das Paging in den Suchergebnissen funktioniert nicht<br>
[Bugfix]       IE8 - Die Rechtesystem Parameter werden im Internet Explorer 8 nicht nachgeladen<br>
[Bugfix]       [Widget] Die Lizenzübersicht errechnet einen falschen "verbleibende Tage" Wert<br>
[Bugfix]       Auf der Übersichtsseite werden unter gewissen Umständen nicht die konfigurierten Kategorien dargestellt<br>
[Bugfix]       [Nagios] Der Export zeigt teilweise einen "Malformed JSON ..." Fehler<br>
[Bugfix]       Darstellungsfehler unter der Kategorie Supernet: Aus "x/y adressen frei" wurde "x/y Adressen in Benutzung"<br>
[Bugfix]       Die Kategorie Vertragszuweisung zeigt leere Daten als 01.01.1970 an<br>
[Bugfix]       Der Button "Alle unfertigen und archivierten Objekte löschen" zeigt einen Bestätigungsdialog mit Umlautfehlern an<br>
[Bugfix]       Das löschen von unfertigen/archivierten oder gelöschten Kategorieeinträgen zeigt eine SQL Exception<br>
[Bugfix]       Die Kategorie Hostadresse zeigt leere Einträge auf der Überssichtsseite<br>
[Bugfix]       Die Farbe von IP Adressen in der IP Liste ändert sich nicht wenn die Adresszuweisungsmethode in der Hostadresse geändert wurde<br>
[Bugfix]       Das Duplizieren oder Ändern von Informationen in der Massenänderung resultiert in doppelten Kategorieeinträgen<br>
[Bugfix]       Das Sortieren von Suchergebnissen funktioniert nicht<br>
[Bugfix]       Der Einsatzzweck in Kategorie Allgemein ist in den Listenansichten leer<br>
[Bugfix]          [Objekt-Browser] In der Standortsicht werden nur Standort-Objekte angezeigt.<br>
[Bugfix]       [Objekt-Browser] der Filter "Gruppe" sollte "Objektgruppe" heißen.<br>
[Bugfix]       Das Archivieren von Chassis Slots resultiert in einer Fehlermeldung<br>
[Bugfix]       Die Übersichtsseite zeigt nicht die korrekten Kategorien wenn die Rechtesystem Regel "Kategorien in Objekttypen" verwendetet wird<br>
[Bugfix]       Wenn mehr als eine Berechtigung auf Reports gelegt wird bleibt die Anzeige von Reports komplett leer<br>
[Bugfix]       Lizenzierungsproblem im Zusammenhang mit der i-doit Mandanten Datenbank<br>
[Bugfix]       Die Massenänderungn funktioniert nicht mit Objektbildern<br>
[Bugfix]       Einige Logbuch Änderungen werden nicht mehr protokolliert<br>
[Bugfix]       Single Sign On Problem bei Übergeben der Domäne<br>
[Bugfix]       Das Lösen einer IP Adresse in der IP-Liste erzeugt keinen Logbuch Eintrag in dem Objekt<br>
[Bugfix]       Sprachkonstanten in Anschlüsse-Kategorie<br>
[Bugfix]       "Neu" Button im globalen Logbuch entfernt<br>
[Bugfix]       Der Listenfilter für Objektlisten funktioniert nicht richtig<br>
[Bugfix]       Session Warnung bei automatischer Abmeldung<br>
