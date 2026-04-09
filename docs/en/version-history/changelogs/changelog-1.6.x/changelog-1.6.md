---
search:
  exclude: true
---
# Changelog 1.6
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Neue Funktion] Neue Kategorie zur Verknüpfung von Remote Management Controllern<br>
[Neue Funktion] Rückwärtige Ansicht "Gemanagte Geräte" für Remote Management Devices<br>
[Neue Funktion] Bearbeitung von Anschlusstypen in globaler Verkabelungsansicht<br>
[Neue Funktion] Dokumentation von Softwareversionen und Patchleveln<br>
[Neue Funktion] Listeneditierung: Erweiterung der Kontaktzuweisung um das Attribut "Rolle"<br>
[Neue Funktion] Modul Wartung (Zur Planung von Wartungsfenstern)<br>
[Neue Funktion] Auswertbarkeit von Attribut "Host im Cluster" für Kategorie Virtuelle Maschine<br>
[Neue Funktion] Neue Kategorie Remote Management Controller<br>
[Neue Funktion] Wartungsmodul: Option zur Auflösung von Kontaktgruppen<br>
[Neue Funktion] Neue globale Verkabelungsansichten<br>
[Neue Funktion] Import der JDISC Netzverbindungen unter Netzwerkverbindungen -> Connector/Listener<br>
[Neue Funktion] CSV Import spezifischer Kategorien<br>
[Neue Funktion] Direkter NSLOOKUP und PING aus IP Liste heraus<br>
[Neue Funktion] Benutzerdefinierte Kategorien auf der Übersichtsseite<br>
[Neue Funktion] Boolean-Wert für Attribut in einer benutzerdefinierten Kategorie<br>
[Neue Funktion] Erweiterung der Suche um "benutzerdefinierte Kategorien"<br>
[Neue Funktion] Benutzerdefinierte Kategorien zur Auswahl in Objektlisten<br>
[Neue Funktion] Schnelle Massenping Funktion durch Einbindung von NMAP oder FPing<br>
[Neue Funktion] Abfrage von DNS A-Records über NSLookup<br>
[Neue Funktion] Abfrage von DNS PTR-Records über NSLookup<br>
[Verbesserung]  Kategorie Gastsysteme: Vererbung von Gastsystemen aus einem Cluster<br>
[Verbesserung]  Filterung zu importierender Software beim JDisc Import (Blacklist/Whitelist)<br>
[Verbesserung]  JDisc: Neuer Modus "Aktualisieren (Neu inventarisiert)" implementieren<br>
[Verbesserung]  JDisc Import von Patchleveln<br>
[Verbesserung]  Neuer Button zum Leeren der Check MK Export Tags<br>
[Verbesserung]  Check_MK Export Sprache einstellen<br>
[Verbesserung]  Automatisches Generieren von Reports via Controller<br>
[Verbesserung]  JDISC Import: Option zum CMDB Status setzen<br>
[Verbesserung]  Neuer Objekttyp Remote Management Controller<br>
[Verbesserung]  Kategorie SLA: neues Feld<br>
[Verbesserung]  Anzahl anzuzeigender Objekte für jede Person einzeln konfigurierbar<br>
[Verbesserung]  Verbesserte Sortierung der Ports in der Kategorie Portübersicht<br>
[Verbesserung]  Optimierter RAM-Bedarf bei JDisc Import über den controller (php-cli)<br>
[Verbesserung]  update_data.xml für PRO Modul<br>
[Verbesserung]  Login Protokollierung in Log Datei: log/system<br>
[Verbesserung]  Rechtesystem: Einfachere Ausklammerung von Kategorierechten<br>
[Verbesserung]  Implizite Beziehung für Dateizuweisungen<br>
[Verbesserung]  Quickpurge über API<br>
[Verbesserung]  Neues Feld MTU in Kategorie Ports<br>
[Verbesserung]  Listeneditierung: Funktion zum Hinzufügen von Multivalue Einträgen<br>
[Verbesserung]  Neue CMDB Kategorie: Bilder<br>
[Verbesserung]  Neues Dialog+ Feld mit Mehrfachauswahl (z.B. in Hostadresse: DNS Server)<br>
[Verbesserung]  Link zu Objekten in der Objektliste in neuem Fenster öffnen<br>
[Verbesserung]  Diverse Erweiterungen der Kategorie WAN-Leitung<br>
[Änderung]      Änderung des JDisc Imports aus Liste der "Connected Devices": Es werden nur noch 1:1 verbundene Devices importiert (Trunk- bzw. virtualisierte Ports werden somit ausgelassen)<br>
[Änderung]      Umbenennung des "mandator" controller moduls und shell-scripts in "tenants"<br>
[Änderung]      Neues Log Verzeichnis: i-doit-root/log/ & Umzug der Log Dateien ldap_debug.txt, error_log und Update Logs<br>
[Änderung]      Einbindung von Monolog als neue i-doit logging Engine<br>
[Änderung]      Vorhandene Instanzen von "f_multiselect" ersetzen<br>
[Änderung]      Ungewollte Organisationsbeziehungen beim update löschen<br>
[Bug]           Fehlende Sortierung der Höheneinheiten in Schränken führt dazu, dass diese nicht im Raum umpositioniert werden können<br>
[Bug]           Vertragsbeginn und Vertragsende werden in Kategorie Vertragszuweisung nicht aktualisiert, wenn sie geändert werden<br>
[Bug]           Systemweite Einstellungen zu Unique-Checks wurden parallel zu den Mandanten-Einstellungen migriert<br>
[Bug]           OCS-Import: Klarere Abgrenzung eines erfolgreichen Imports von überschriebenen Objekten<br>
[Bug]           Objekte können nicht aus Templates erzeugt werden, wenn diese über ein &-Zeichen im Titel verfügen<br>
[Bug]           Verrechtung auf Upload von Dateien in Datei-Browser nicht möglich<br>
[Bug]           Portübersicht stellt nicht alle Inhalte vollständig dar<br>
[Bug]           Frequenz wird in Reports ohne Einheit ausgegeben.<br>
[Bug]           Massenänderung trägt Logbuch Historie "von" und "auf" verkehrt ein (verwechselt)<br>
[Bug]           Lösen einer Zuordnung in der IP-Liste über die Schaltfläche "Lösen" entfernt nicht die Beziehung<br>
[Bug]           Verwendung der MAC-Adresse in Objekt-Liste führt zu mehrfachen Einträgen in der Objekt-Liste<br>
[Bug]           Default VLAN kann erst ausgewählt werden, nachdem der Datensatz des Ports gespeichert wurde<br>
[Bug]           Steckerart eines Ports wird nicht auf die Anschlussart des Anschlusses übertragen<br>
[Bug]           Angabe der Kapazität von Speicherriegeln in MB führt dazu, dass die Gesamtkapazität in der Listenansicht mit 0GB dargestellt wird<br>
[Bug]           CSS Cache verursacht unschönes Design in einigen Modulen<br>
[Bug]           "Alle Tickets" Kategorie liefert keine Inhalte - RT Connector defekt?<br>
[Bug]           Übernahme des Pagelimits für Listen in Systemeinstellungen<br>
[Bug]           Konfiguration für SMTP Benutzer und Passwort<br>
[Bug]           Hat ein Objekt mehrere Beziehungen zu einem Anderen, wird in der ersten Ebene nur eine Beziehung dargestellt<br>
[Bug]           Migrationsobjekte haben die spezifische Kategorie Netz zugewiesen<br>
[Bug]           JS Fehler in CMDB-Explorer, wenn Objekttypen mit Hochkomma im Namen existieren<br>
[Bug]           Manchen Einträgen der Kategorie Hostadresse kann keine DNS-Domäne hinzugefügt werden.<br>
[Bug]           API Methode idoit.version liefert Fehlermeldung<br>
[Bug]           In Kategorie "JDisc Discovery": Kein Feedback bei nicht erreichbarem Webservice<br>
[Bug]           Quickinfo aktualisiert Daten der Kontaktzuweisung nicht sofort<br>
[Bug]           Nicht benötigte Schaltflächen in Kategorie "Mitglieder" unter Personengruppen<br>
[Bug]           Geänderte Personengruppenmitgliedschaften werden nicht im Logbuch angezeigt<br>
[Bug]           Trotz Recht zur Bearbeitung einer Kategorie ist die Anpassung über die Listeneditierung nicht möglich.<br>
[Bug]           Hostname wird immer als eindeutig vorausgesetzt, selbst wenn keine Validierung konfiguriert wurde<br>
[Bug]           JDisc Import: Aufgrund von dopplungen erfolgt die Identifizierung des Objekts nicht mehr zusätzlich über die IP Adresse<br>
[Bug]           Nicht nachvollziehbarer Editier"modus" bei benutzerdefinierten Multi-Value-Kategorien ohne Auswahl eines Eintrags bei Klick auf "Editieren"<br>
[Bug]           Einträge zu einer Benutzerdef. Kategorie werden nicht als "normal" sondern als "archiviert" angelegt, wenn zuvor ein andrer Eintrag archiviert wurde.<br>
[Bug]           DNS Domäne kann nicht gespeichert werden, wenn diese bereits verwendet wurde / existiert<br>
[Bug]           "Monitoring"-Widget nicht in Widget-Liste enthalten.<br>
[Bug]           OCS-Import: Klarere Beschreibung von "Error 95"<br>
[Bug]           Fehlermeldung beim Versuch mit "Speichern" eine Änderung in der Kategorie "Speicher" vorzunehmen (Validierung Aktiv)<br>
[Bug]           JDISC-Konfiguration: Zusätzliche Optionen werden nicht gespeichert.<br>
[Bug]           Fehlermeldung in "Verkabelung/Anschlüsse" bei Sortierung nach "Kabel" oder "Faser/Wellenlänge".<br>
