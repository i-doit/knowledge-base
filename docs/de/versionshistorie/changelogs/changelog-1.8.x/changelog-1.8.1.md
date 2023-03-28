# Changelog 1.8.1

[Verbesserung]  Konfiguration zur Ermöglichung einer Suche nach Teilstrings in den Objektlisten<br>
[Verbesserung]  JDisc-Profil: Neues Dialog Feld zur Bestimmung des Objekttypen von Blade/Chassis Modulen<br>
[Verbesserung]  Sicherheit: Unterbundene Darstellung von Hashes in Passwortfeldern<br>
[Verbesserung]  Sicherheit: Nutzung von Authenfizierungscookies (HTTPOnly, Secure)<br>
[Verbesserung]  Sicherheit: Funktion für hash-basiertes Passwort in Admin Center (Neusetzen des Passworts über /admin/?req=config)<br>
[Verbesserung]  Sicherheit: Freie Konfiguration des Pfades für Caches und temporäre Dateien (in src/config.inc.php)<br>
[Verbesserung]  Sicherheit: CSRF Tokens beim Speichern von CMDB Kategorien (Systemeinstellungen)<br>
[Verbesserung]  Login: Nutzung eines CSRF Tokens zur zusätzlichen Absicherung des Logins (Systemeinstellungen)<br>
[Verbesserung]  Vererbung von Breiten- und Längengrad in der Kategorie Standort<br>
[Änderung]      Sicherheit: Verbotener Web-Zugriff auf das temp/ Verzeichnis via .htaccess Regel<br>
[Bug]           Fehler in der Kategorie "Objektvitalität", wenn kein Verbrauch vorliegt<br>
[Bug]           IP-Adressen können pro Netz nicht mehrfach vergeben werden<br>
[Bug]           Objekt-Matching Profile: Wenn das Objekt Matching Profil in den jeweiligen Import Konfigurationen nicht eingestellt wurde, wird das Profil "Default" für manche Imports nicht automatisch verwendet.<br>
[Bug]           Beschreibung in Smartcard Zertifikat wird nicht gespeichert<br>
[Bug]           Objektlisten zeigen ID eines Dialog+-Feldes anstatt des Inhalts<br>
[Bug]           PHP Warnung aufgrund von "open_basedir restriction"<br>
[Bug]           Objekttyp-Auswahl bei der Verknüpfung einer Zuweisung im CSV-Import hat keine Auswirkung<br>
[Bug]           Fehlermeldung im RSS Widget unter Verwendung eines Proxies<br>
[Bug]           Attribut "Letzte Änderung" ist im Abfrage-Editor nicht als Bedingung auswählbar<br>
[Bug]           "IS NOT NULL" erzeugt im Report Manager einen Fehler<br>
[Bug]           Einträge aus benutzerdefinierten Multi-Value-Kateorie wird in Liste nicht angezeigt und verdoppelt andere Einträge<br>
[Bug]           Im Report kann kein Attribut zur Kategorie "Räumlich zugeordnete Objekte" unter den Bedingungen ausgewählt werden<br>
[Bug]           Import der Geschwindigkeit eines Interfaces über JDisc verwendet inkorrekte Umrechnung<br>
[Bug]           Sortierung der Spalten in Report-Ergebnissen nicht mehr möglich<br>
[Bug]           Deaktivierte Quickinfo wird trotzdem bei Standort-Pfad angezeigt<br>
[Bug]           Layer-2 Netzzuordnung für Ports beim CSV-Import nicht auswählbar<br>
[Bug]           Beim Anpassen der Objekttypen über den QCW ist der Lösch-Button bei Selbstdefinierten Objekttypen inaktiv und bei Standard Objekttypen aktiv<br>
[Bug]           Anlegen einer expliziten Objekt-Beziehung erzeugt SQL-Fehler<br>
[Bug]           Uneinheitliches Datumsformat<br>
[Bug]           Massenänderung leert Multi-Value-Einträge einer benutzerdefinierten Kategorie nicht<br>
[Bug]           Report Manager: Die Vergleichsoperatoren "IS NULL" und "IS NOT NULL" werden nicht korrekt dargestellt beim editieren von bestehenden Reports.<br>
[Bug]           Fehlende Sprachkonstante "LC__CMDB__OBJECT_DOES_NOT_EXIST"<br>
[Bug]           Einstellung zum CMDB-Status im JDisc-Profil hat keine Auswirkungen beim Import über den Controller<br>
[Bug]           CSV-Export eines Reports mit Umbrüchen enthält ebenfalls die Umbrüche<br>
[Bug]           Icon zur Bearbeitung der Listenansicht wird nicht ausgeblendet, wenn der User nicht über die Rechte verfügt<br>
[Bug]           Standort kann nicht gelöst werden<br>
[Bug]           Vertikale Slots in leeren Schränken werden bei der Standort-Zuweisung nicht angezeigt<br>
[Bug]           Bei Layer-3 Netzen wird eine falsche Anzahl von zugewiesenen Adressen auf der Objekt-Liste angezeigt.<br>
[Bug]           Objekt-Matching Profile: Das Matching Attribut "IP-Adresse" hat bei Importen eine Datenbank Fehlermeldung ausgegeben.<br>
[Bug]           "UND/ODER"-Feld in Reports verrutsch bei Auswahl des CMDB-Status<br>
[Bug]           HTML Quelltext in der CMDB-Explorer Objektauswahl<br>
[Bug]           Filtern nach IP-Adressen nicht möglich<br>
[Bug]           Übersetzung der Sprachkonstante erfolgt nicht im Menübaum der Verwaltung<br>
[Bug]           Beschreibungsfelder aus Benutzerdefinierte Kategorien können in der Objekt-Listen Ansicht nicht gefiltert werden.<br>
[Bug]           Drop-Down-Auswahl im Internet-Explorer überlappt sich selbst<br>
[Bug]           Benutzer kann über die Suche Objektinformationen einsehen/bearbeiten, die ihm nicht verrechtet wurden.<br>
[Bug]           Rechtevergabe auf Objekte unterhalb eines Standorts erlaubt nicht die Verwendung der Schaltflächen in Objektlisten<br>
[Bug]           Kombination aus Validierung und automatischer Inventarnummer erzeugt Fehler beim Duplizieren<br>
[Bug]           Vertragsbeginn und Vertragsende stehen nicht in der Auswahl zur Darstellung in den Objekt-Listen<br>
[Bug]           Bei der Verwendung von Informationen aus mehr als einer Multi-Value-Kategorie in der Listenansicht werden die Attribute wiederholt dargestellt<br>
[Bug]           Barcode aufrufen schlägt fehl<br>
[Bug]           Filter funktioniert in benutzerdefinierten Objekttypen nicht<br>
[Bug]           Mehrere Vertragsdaten nicht mehr im Report Manager vorhanden<br>
[Bug]           Fehler, wenn beim Report eine Bedingung auf das Attribut "CMDB-Status" verwendet wird<br>
[Bug]           Lupen-Icon zur Auswahl der verknüpften Attribute im Report-Manager fehlt<br>
[Bug]           Objektlink kann nicht zum öffnen der Objektdetails verwendet werden, wenn der Klick auf die Zeile deaktiviert ist.<br>
[Bug]           Ja/Nein-Feld aus benutzerdefinierten Kategorien mit Pflichtfelddefinition führt auf Übersichtsseite immer dazu, dass der Datensatz nicht gespeichert werden kann.<br>
[Bug]           Ja/Nein-Felder können im Report-Manager nicht sauber abgefragt werden<br>
[Bug]           Informationen der Kategorie "Datensicherung" werden nicht auf der Übersichtsseite gespeichert, wenn Pflichtfelder konfiguriert wurden<br>
[Bug]           Objektbilder bei über den QCW neu angelegten Objekttypen werden nicht dargestellt<br>
[Bug]           Attribut Telefon wird in Listeneditierung nicht gespeichert<br>
[Bug]           Neuer Service Filter kann nicht gespeichert werden<br>
[Bug]           Attribut "Firma" ist in Objekt-Liste leer<br>
[Bug]           Dashboard kann anderen Benutzern nicht zugewiesen werden<br>
[Bug]           Knowledge Base Link in Systemeinstellungen in Englisch verweist auf deutschen Link<br>
[Bug]           Fehler beim Import einer CSV-Datei ohne Identifizierungsfeld<br>
[Bug]           Fehler beim Login eines LDAP-Users, wenn dieser keine Rechte besitzt<br>
[Bug]           DropDown-Box-Darstellung in Internet Explorer inkorrekt<br>
[Bug]           Quick Configuration Wizard: Bei der Kategorie Liste werden die abgewählten Kategorien nicht gespeichert.<br>
[Bug]           Anzeige der zweiten Seite von Services unter "Extras - Services" nicht möglich<br>
[Bug]           Button "Neu" unter "Extras - Services" nicht korrekt<br>
[Bug]           Attribut "Interface" in einem Anschluss wird geleert, wenn der Anschluss über den Verkabelungsimport importiert wird.<br>
[Bug]           Button "Neu" im Dialog-Admin funktioniert nach Editieren eines Eintrages wie ein "Editieren"-Button<br>
[Bug]           Typen in Dialog-Box "Service Auswahl" im CMDB-Explorer werden bei zu langen Service-Namen inkorrekt dargestellt<br>
[Bug]           Bei Klick auf "Extras - CMDB - Beziehungen" wird das Dashboard angezeigt<br>
[Bug]           Das Objektbild wird nicht richtig mit dupliziert<br>
[Bug]           Kategorie "Bilder" wird nicht vollständig mit dupliziert<br>
[Bug]           Fehler in der Suche bei Nutzung von Klammern oder Bindestrichen<br>
[Bug]           Listeneditierung mit Kategorie Betriebssystem setzt Objektbrowser-Auswahl für Zugewiesene Lizenz nicht zurück<br>
[Bug]           Benutzerdefinierte Kategorie mit "Objekt-Beziehung (Mehrfach)" zeigt in Liste nur den ersten Eintrag an<br>
[Bug]           Purge-Button archiviert Kategorie-Einträge<br>
[Bug]           Attribute "DNS Domäne" und "FQDN" können im Report-Manager nicht ausgegeben werden<br>
[Bug]           Service-Auswahl kann im Browser nicht angezeigt werden und bricht mit Fehler ab<br>
[Bug]           Logbucheintrag zu einem geänderten Standort enthält Quellcode<br>
[Bug]           IT-Service-Komponente wird nicht mehr im CMDB-Explorer dargestellt nach Archivierung und Neuzuweisung<br>
[Bug]           Button "Purge" bei JDisc-Profilen im Edit-Mode entfernen<br>
[Bug]           Fehlermeldung TCPDF ERROR bei der Generierung von PDF Dateien aus dem Report Manager<br>
[Bug]           Fehlende Attribute für Letzte Änderung und Erstellungsdatum in CSV Reports<br>
[Bug]           Auswahl von Listener im Report Manager führt zu Fehlermeldung<br>
[Bug]           CSV-Import bricht beim Profil-laden mit Fehlermeldung ab<br>
[Bug]           Objektvitalität wird falsch berechnet<br>
[Bug]           Korrigierte Links auf die Knowledge Base<br>
[Bug]           Makro wird im CMDB-Explorer nicht ausgeführt<br>
[Bug]           SMTP Passwort über Entwicklertools auslesbar<br>
[Bug]           Benachrichtigung mit Standort-Pfad beinhaltet Quickinfo<br>
[Bug]           Über Profil importierte Objekttypen einer anderen Instanz können nicht verwendet werden<br>
[Bug]           Attribut "Primär" aus Kategorie "Kontaktzuweisung" wird nicht im Report-Ergebnis ausgegeben<br>
[Bug]           Fehler beim Verwenden eines @-Zeichens in der Suche<br>
[Bug]           Verwendung eines Default-Templates bewirkt, dass Änderungsvorlagen als reguläre Objekte erzeugt werden<br>
[Bug]           Platzhalter werden im Report nicht ersetzt<br>
[Bug]           Listeneditierung: Datumsfelder von Benutzerdefinierte Kategorien werden nicht übernommen<br>
