# Changelog 1.8.1

[Verbesserung]  Konfiguration zur Ermöglichung einer Suche nach Teilstrings in den Objektlisten
[Verbesserung]  JDisc-Profil: Neues Dialog Feld zur Bestimmung des Objekttypen von Blade/Chassis Modulen
[Verbesserung]  Sicherheit: Unterbundene Darstellung von Hashes in Passwortfeldern
[Verbesserung]  Sicherheit: Nutzung von Authenfizierungscookies (HTTPOnly, Secure)
[Verbesserung]  Sicherheit: Funktion für hash-basiertes Passwort in Admin Center (Neusetzen des Passworts über /admin/?req=config)
[Verbesserung]  Sicherheit: Freie Konfiguration des Pfades für Caches und temporäre Dateien (in src/config.inc.php)
[Verbesserung]  Sicherheit: CSRF Tokens beim Speichern von CMDB Kategorien (Systemeinstellungen)
[Verbesserung]  Login: Nutzung eines CSRF Tokens zur zusätzlichen Absicherung des Logins (Systemeinstellungen)
[Verbesserung]  Vererbung von Breiten- und Längengrad in der Kategorie Standort
[Änderung]      Sicherheit: Verbotener Web-Zugriff auf das temp/ Verzeichnis via .htaccess Regel
[Bug]           Fehler in der Kategorie "Objektvitalität", wenn kein Verbrauch vorliegt
[Bug]           IP-Adressen können pro Netz nicht mehrfach vergeben werden
[Bug]           Objekt-Matching Profile: Wenn das Objekt Matching Profil in den jeweiligen Import Konfigurationen nicht eingestellt wurde, wird das Profil "Default" für manche Imports nicht automatisch verwendet.
[Bug]           Beschreibung in Smartcard Zertifikat wird nicht gespeichert
[Bug]           Objektlisten zeigen ID eines Dialog+-Feldes anstatt des Inhalts
[Bug]           PHP Warnung aufgrund von "open_basedir restriction"
[Bug]           Objekttyp-Auswahl bei der Verknüpfung einer Zuweisung im CSV-Import hat keine Auswirkung
[Bug]           Fehlermeldung im RSS Widget unter Verwendung eines Proxies
[Bug]           Attribut "Letzte Änderung" ist im Abfrage-Editor nicht als Bedingung auswählbar
[Bug]           "IS NOT NULL" erzeugt im Report Manager einen Fehler
[Bug]           Einträge aus benutzerdefinierten Multi-Value-Kateorie wird in Liste nicht angezeigt und verdoppelt andere Einträge
[Bug]           Im Report kann kein Attribut zur Kategorie "Räumlich zugeordnete Objekte" unter den Bedingungen ausgewählt werden
[Bug]           Import der Geschwindigkeit eines Interfaces über JDisc verwendet inkorrekte Umrechnung
[Bug]           Sortierung der Spalten in Report-Ergebnissen nicht mehr möglich
[Bug]           Deaktivierte Quickinfo wird trotzdem bei Standort-Pfad angezeigt
[Bug]           Layer-2 Netzzuordnung für Ports beim CSV-Import nicht auswählbar
[Bug]           Beim Anpassen der Objekttypen über den QCW ist der Lösch-Button bei Selbstdefinierten Objekttypen inaktiv und bei Standard Objekttypen aktiv
[Bug]           Anlegen einer expliziten Objekt-Beziehung erzeugt SQL-Fehler
[Bug]           Uneinheitliches Datumsformat
[Bug]           Massenänderung leert Multi-Value-Einträge einer benutzerdefinierten Kategorie nicht
[Bug]           Report Manager: Die Vergleichsoperatoren "IS NULL" und "IS NOT NULL" werden nicht korrekt dargestellt beim editieren von bestehenden Reports.
[Bug]           Fehlende Sprachkonstante "LC__CMDB__OBJECT_DOES_NOT_EXIST"
[Bug]           Einstellung zum CMDB-Status im JDisc-Profil hat keine Auswirkungen beim Import über den Controller
[Bug]           CSV-Export eines Reports mit Umbrüchen enthält ebenfalls die Umbrüche
[Bug]           Icon zur Bearbeitung der Listenansicht wird nicht ausgeblendet, wenn der User nicht über die Rechte verfügt
[Bug]           Standort kann nicht gelöst werden
[Bug]           Vertikale Slots in leeren Schränken werden bei der Standort-Zuweisung nicht angezeigt
[Bug]           Bei Layer-3 Netzen wird eine falsche Anzahl von zugewiesenen Adressen auf der Objekt-Liste angezeigt.
[Bug]           Objekt-Matching Profile: Das Matching Attribut "IP-Adresse" hat bei Importen eine Datenbank Fehlermeldung ausgegeben.
[Bug]           "UND/ODER"-Feld in Reports verrutsch bei Auswahl des CMDB-Status
[Bug]           HTML Quelltext in der CMDB-Explorer Objektauswahl
[Bug]           Filtern nach IP-Adressen nicht möglich
[Bug]           Übersetzung der Sprachkonstante erfolgt nicht im Menübaum der Verwaltung
[Bug]           Beschreibungsfelder aus Benutzerdefinierte Kategorien können in der Objekt-Listen Ansicht nicht gefiltert werden.
[Bug]           Drop-Down-Auswahl im Internet-Explorer überlappt sich selbst
[Bug]           Benutzer kann über die Suche Objektinformationen einsehen/bearbeiten, die ihm nicht verrechtet wurden.
[Bug]           Rechtevergabe auf Objekte unterhalb eines Standorts erlaubt nicht die Verwendung der Schaltflächen in Objektlisten
[Bug]           Kombination aus Validierung und automatischer Inventarnummer erzeugt Fehler beim Duplizieren
[Bug]           Vertragsbeginn und Vertragsende stehen nicht in der Auswahl zur Darstellung in den Objekt-Listen
[Bug]           Bei der Verwendung von Informationen aus mehr als einer Multi-Value-Kategorie in der Listenansicht werden die Attribute wiederholt dargestellt
[Bug]           Barcode aufrufen schlägt fehl
[Bug]           Filter funktioniert in benutzerdefinierten Objekttypen nicht
[Bug]           Mehrere Vertragsdaten nicht mehr im Report Manager vorhanden
[Bug]           Fehler, wenn beim Report eine Bedingung auf das Attribut "CMDB-Status" verwendet wird
[Bug]           Lupen-Icon zur Auswahl der verknüpften Attribute im Report-Manager fehlt
[Bug]           Objektlink kann nicht zum öffnen der Objektdetails verwendet werden, wenn der Klick auf die Zeile deaktiviert ist.
[Bug]           Ja/Nein-Feld aus benutzerdefinierten Kategorien mit Pflichtfelddefinition führt auf Übersichtsseite immer dazu, dass der Datensatz nicht gespeichert werden kann.
[Bug]           Ja/Nein-Felder können im Report-Manager nicht sauber abgefragt werden
[Bug]           Informationen der Kategorie "Datensicherung" werden nicht auf der Übersichtsseite gespeichert, wenn Pflichtfelder konfiguriert wurden
[Bug]           Objektbilder bei über den QCW neu angelegten Objekttypen werden nicht dargestellt
[Bug]           Attribut Telefon wird in Listeneditierung nicht gespeichert
[Bug]           Neuer Service Filter kann nicht gespeichert werden
[Bug]           Attribut "Firma" ist in Objekt-Liste leer
[Bug]           Dashboard kann anderen Benutzern nicht zugewiesen werden
[Bug]           Knowledge Base Link in Systemeinstellungen in Englisch verweist auf deutschen Link
[Bug]           Fehler beim Import einer CSV-Datei ohne Identifizierungsfeld
[Bug]           Fehler beim Login eines LDAP-Users, wenn dieser keine Rechte besitzt
[Bug]           DropDown-Box-Darstellung in Internet Explorer inkorrekt
[Bug]           Quick Configuration Wizard: Bei der Kategorie Liste werden die abgewählten Kategorien nicht gespeichert.
[Bug]           Anzeige der zweiten Seite von Services unter "Extras - Services" nicht möglich
[Bug]           Button "Neu" unter "Extras - Services" nicht korrekt
[Bug]           Attribut "Interface" in einem Anschluss wird geleert, wenn der Anschluss über den Verkabelungsimport importiert wird.
[Bug]           Button "Neu" im Dialog-Admin funktioniert nach Editieren eines Eintrages wie ein "Editieren"-Button
[Bug]           Typen in Dialog-Box "Service Auswahl" im CMDB-Explorer werden bei zu langen Service-Namen inkorrekt dargestellt
[Bug]           Bei Klick auf "Extras - CMDB - Beziehungen" wird das Dashboard angezeigt
[Bug]           Das Objektbild wird nicht richtig mit dupliziert
[Bug]           Kategorie "Bilder" wird nicht vollständig mit dupliziert
[Bug]           Fehler in der Suche bei Nutzung von Klammern oder Bindestrichen
[Bug]           Listeneditierung mit Kategorie Betriebssystem setzt Objektbrowser-Auswahl für Zugewiesene Lizenz nicht zurück
[Bug]           Benutzerdefinierte Kategorie mit "Objekt-Beziehung (Mehrfach)" zeigt in Liste nur den ersten Eintrag an
[Bug]           Purge-Button archiviert Kategorie-Einträge
[Bug]           Attribute "DNS Domäne" und "FQDN" können im Report-Manager nicht ausgegeben werden
[Bug]           Service-Auswahl kann im Browser nicht angezeigt werden und bricht mit Fehler ab
[Bug]           Logbucheintrag zu einem geänderten Standort enthält Quellcode
[Bug]           IT-Service-Komponente wird nicht mehr im CMDB-Explorer dargestellt nach Archivierung und Neuzuweisung
[Bug]           Button "Purge" bei JDisc-Profilen im Edit-Mode entfernen
[Bug]           Fehlermeldung TCPDF ERROR bei der Generierung von PDF Dateien aus dem Report Manager
[Bug]           Fehlende Attribute für Letzte Änderung und Erstellungsdatum in CSV Reports
[Bug]           Auswahl von Listener im Report Manager führt zu Fehlermeldung
[Bug]           CSV-Import bricht beim Profil-laden mit Fehlermeldung ab
[Bug]           Objektvitalität wird falsch berechnet
[Bug]           Korrigierte Links auf die Knowledge Base
[Bug]           Makro wird im CMDB-Explorer nicht ausgeführt
[Bug]           SMTP Passwort über Entwicklertools auslesbar
[Bug]           Benachrichtigung mit Standort-Pfad beinhaltet Quickinfo
[Bug]           Über Profil importierte Objekttypen einer anderen Instanz können nicht verwendet werden
[Bug]           Attribut "Primär" aus Kategorie "Kontaktzuweisung" wird nicht im Report-Ergebnis ausgegeben
[Bug]           Fehler beim Verwenden eines @-Zeichens in der Suche
[Bug]           Verwendung eines Default-Templates bewirkt, dass Änderungsvorlagen als reguläre Objekte erzeugt werden
[Bug]           Platzhalter werden im Report nicht ersetzt
[Bug]           Listeneditierung: Datumsfelder von Benutzerdefinierte Kategorien werden nicht übernommen
