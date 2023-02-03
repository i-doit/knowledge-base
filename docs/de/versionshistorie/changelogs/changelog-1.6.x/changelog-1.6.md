[Neue Funktion] Neue Kategorie zur Verknüpfung von Remote Management Controllern
[Neue Funktion] Rückwärtige Ansicht "Gemanagte Geräte" für Remote Management Devices
[Neue Funktion] Bearbeitung von Anschlusstypen in globaler Verkabelungsansicht
[Neue Funktion] Dokumentation von Softwareversionen und Patchleveln
[Neue Funktion] Listeneditierung: Erweiterung der Kontaktzuweisung um das Attribut "Rolle"
[Neue Funktion] Modul Wartung (Zur Planung von Wartungsfenstern)
[Neue Funktion] Auswertbarkeit von Attribut "Host im Cluster" für Kategorie Virtuelle Maschine
[Neue Funktion] Neue Kategorie Remote Management Controller
[Neue Funktion] Wartungsmodul: Option zur Auflösung von Kontaktgruppen
[Neue Funktion] Neue globale Verkabelungsansichten
[Neue Funktion] Import der JDISC Netzverbindungen unter Netzwerkverbindungen -> Connector/Listener
[Neue Funktion] CSV Import spezifischer Kategorien
[Neue Funktion] Direkter NSLOOKUP und PING aus IP Liste heraus
[Neue Funktion] Benutzerdefinierte Kategorien auf der Übersichtsseite
[Neue Funktion] Boolean-Wert für Attribut in einer benutzerdefinierten Kategorie
[Neue Funktion] Erweiterung der Suche um "benutzerdefinierte Kategorien"
[Neue Funktion] Benutzerdefinierte Kategorien zur Auswahl in Objektlisten
[Neue Funktion] Schnelle Massenping Funktion durch Einbindung von NMAP oder FPing
[Neue Funktion] Abfrage von DNS A-Records über NSLookup
[Neue Funktion] Abfrage von DNS PTR-Records über NSLookup
[Verbesserung]  Kategorie Gastsysteme: Vererbung von Gastsystemen aus einem Cluster
[Verbesserung]  Filterung zu importierender Software beim JDisc Import (Blacklist/Whitelist)
[Verbesserung]  JDisc: Neuer Modus "Aktualisieren (Neu inventarisiert)" implementieren
[Verbesserung]  JDisc Import von Patchleveln
[Verbesserung]  Neuer Button zum Leeren der Check MK Export Tags
[Verbesserung]  Check_MK Export Sprache einstellen
[Verbesserung]  Automatisches Generieren von Reports via Controller
[Verbesserung]  JDISC Import: Option zum CMDB Status setzen
[Verbesserung]  Neuer Objekttyp Remote Management Controller
[Verbesserung]  Kategorie SLA: neues Feld
[Verbesserung]  Anzahl anzuzeigender Objekte für jede Person einzeln konfigurierbar
[Verbesserung]  Verbesserte Sortierung der Ports in der Kategorie Portübersicht
[Verbesserung]  Optimierter RAM-Bedarf bei JDisc Import über den controller (php-cli)
[Verbesserung]  update_data.xml für PRO Modul
[Verbesserung]  Login Protokollierung in Log Datei: log/system
[Verbesserung]  Rechtesystem: Einfachere Ausklammerung von Kategorierechten
[Verbesserung]  Implizite Beziehung für Dateizuweisungen
[Verbesserung]  Quickpurge über API
[Verbesserung]  Neues Feld MTU in Kategorie Ports
[Verbesserung]  Listeneditierung: Funktion zum Hinzufügen von Multivalue Einträgen
[Verbesserung]  Neue CMDB Kategorie: Bilder
[Verbesserung]  Neues Dialog+ Feld mit Mehrfachauswahl (z.B. in Hostadresse: DNS Server)
[Verbesserung]  Link zu Objekten in der Objektliste in neuem Fenster öffnen
[Verbesserung]  Diverse Erweiterungen der Kategorie WAN-Leitung
[Änderung]      Änderung des JDisc Imports aus Liste der "Connected Devices": Es werden nur noch 1:1 verbundene Devices importiert (Trunk- bzw. virtualisierte Ports werden somit ausgelassen)
[Änderung]      Umbenennung des "mandator" controller moduls und shell-scripts in "tenants"
[Änderung]      Neues Log Verzeichnis: i-doit-root/log/ & Umzug der Log Dateien ldap_debug.txt, error_log und Update Logs
[Änderung]      Einbindung von Monolog als neue i-doit logging Engine
[Änderung]      Vorhandene Instanzen von "f_multiselect" ersetzen
[Änderung]      Ungewollte Organisationsbeziehungen beim update löschen
[Bug]           Fehlende Sortierung der Höheneinheiten in Schränken führt dazu, dass diese nicht im Raum umpositioniert werden können
[Bug]           Vertragsbeginn und Vertragsende werden in Kategorie Vertragszuweisung nicht aktualisiert, wenn sie geändert werden
[Bug]           Systemweite Einstellungen zu Unique-Checks wurden parallel zu den Mandanten-Einstellungen migriert
[Bug]           OCS-Import: Klarere Abgrenzung eines erfolgreichen Imports von überschriebenen Objekten
[Bug]           Objekte können nicht aus Templates erzeugt werden, wenn diese über ein &-Zeichen im Titel verfügen
[Bug]           Verrechtung auf Upload von Dateien in Datei-Browser nicht möglich
[Bug]           Portübersicht stellt nicht alle Inhalte vollständig dar
[Bug]           Frequenz wird in Reports ohne Einheit ausgegeben.
[Bug]           Massenänderung trägt Logbuch Historie "von" und "auf" verkehrt ein (verwechselt)
[Bug]           Lösen einer Zuordnung in der IP-Liste über die Schaltfläche "Lösen" entfernt nicht die Beziehung
[Bug]           Verwendung der MAC-Adresse in Objekt-Liste führt zu mehrfachen Einträgen in der Objekt-Liste
[Bug]           Default VLAN kann erst ausgewählt werden, nachdem der Datensatz des Ports gespeichert wurde
[Bug]           Steckerart eines Ports wird nicht auf die Anschlussart des Anschlusses übertragen
[Bug]           Angabe der Kapazität von Speicherriegeln in MB führt dazu, dass die Gesamtkapazität in der Listenansicht mit 0GB dargestellt wird
[Bug]           CSS Cache verursacht unschönes Design in einigen Modulen
[Bug]           "Alle Tickets" Kategorie liefert keine Inhalte - RT Connector defekt?
[Bug]           Übernahme des Pagelimits für Listen in Systemeinstellungen
[Bug]           Konfiguration für SMTP Benutzer und Passwort
[Bug]           Hat ein Objekt mehrere Beziehungen zu einem Anderen, wird in der ersten Ebene nur eine Beziehung dargestellt
[Bug]           Migrationsobjekte haben die spezifische Kategorie Netz zugewiesen
[Bug]           JS Fehler in CMDB-Explorer, wenn Objekttypen mit Hochkomma im Namen existieren
[Bug]           Manchen Einträgen der Kategorie Hostadresse kann keine DNS-Domäne hinzugefügt werden.
[Bug]           API Methode idoit.version liefert Fehlermeldung
[Bug]           In Kategorie "JDisc Discovery": Kein Feedback bei nicht erreichbarem Webservice
[Bug]           Quickinfo aktualisiert Daten der Kontaktzuweisung nicht sofort
[Bug]           Nicht benötigte Schaltflächen in Kategorie "Mitglieder" unter Personengruppen
[Bug]           Geänderte Personengruppenmitgliedschaften werden nicht im Logbuch angezeigt
[Bug]           Trotz Recht zur Bearbeitung einer Kategorie ist die Anpassung über die Listeneditierung nicht möglich.
[Bug]           Hostname wird immer als eindeutig vorausgesetzt, selbst wenn keine Validierung konfiguriert wurde
[Bug]           JDisc Import: Aufgrund von dopplungen erfolgt die Identifizierung des Objekts nicht mehr zusätzlich über die IP Adresse
[Bug]           Nicht nachvollziehbarer Editier"modus" bei benutzerdefinierten Multi-Value-Kategorien ohne Auswahl eines Eintrags bei Klick auf "Editieren"
[Bug]           Einträge zu einer Benutzerdef. Kategorie werden nicht als "normal" sondern als "archiviert" angelegt, wenn zuvor ein andrer Eintrag archiviert wurde.
[Bug]           DNS Domäne kann nicht gespeichert werden, wenn diese bereits verwendet wurde / existiert
[Bug]           "Monitoring"-Widget nicht in Widget-Liste enthalten.
[Bug]           OCS-Import: Klarere Beschreibung von "Error 95"
[Bug]           Fehlermeldung beim Versuch mit "Speichern" eine Änderung in der Kategorie "Speicher" vorzunehmen (Validierung Aktiv)
[Bug]           JDISC-Konfiguration: Zusätzliche Optionen werden nicht gespeichert.
[Bug]           Fehlermeldung in "Verkabelung/Anschlüsse" bei Sortierung nach "Kabel" oder "Faser/Wellenlänge".