# Changelog 0.8.X

0.8.6
Folgende Fehler sind behoben:

- Ermittlung des Installationsverzeichnisses
- Im Element Switch fehlt das Feld Gateway
- Kein Dynamischer Datenbankname
- Hauptnavigation verschwindet und taucht nicht mehr auf
- Im Element "Router" in den Wan Modulen fehlt das Feld "Gateway"
- Fehlendes Feld "Beschreibungen" bei Element "Terminals"
- Fehlende Felder bei Element "Appliances"
- Netzwerkkonfiguration in Drucker-Detailansicht nicht verfügbar
- Netzwerkbearbeitung unter Element "Server" ohne Möglichkeit direkt einen Switch zuzuordnen
- Bearbeitung von Lizenzen nicht möglich
- Fehlerhafte Sortierung der Objekte über "Weiter"-Buttons
- Man kann Rechtegruppe 'Administrator' löschen und sich alle Rechte als Administrator entziehen
- Fehler unter "Meine Dokumente"
- Ansprechpartner nicht bearbeitbar
- Löschen von Netzwerkdevices fehlerhaft
- Kalender Pop-Up bei Wartungsverträgen zu groß
- 'Weitere' Ansprechpartner Link funktioniert nicht
- Kalenderanzeige bei Arbeitsaufträgen
- Namensanzeige in Arbeitsaufträgen
- Sortierung in der Listenansicht der IT-Elemente fehlerhaft
- Fehler bei 'Neuer Arbeitsauftrag'
- Nach Änderung der sysop-Passwortes erscheint das Menü nicht mehr
- Datumsüberschreitung Arbeitsaufträge
- Löschen von Arbeitsaufträgen
- Einträge in der Kategorie "Arbeitsauftraege" sind nicht richtig verlinkt
- Suche-Funktion durchsucht zu wenig Felder
- main.php: Link zu IT-Elementen in "Letzte Updates"
- menu.php: Suchfunktion meldet "Kein Suchbegriff eingegeben" bei fehlendem
Suchbegriff
- main.php: Es werden \n's in der RSS-Feed-Ausgabe angezeigt.
- CMDB: Kalenderbild wird nicht angezeigt
- Calender: Kalender zeigt unter Windows system-spezifische Warnungen
- Installer: Der i-doit SQL Dump wird nicht komplett eingelesen, da Windows-
 zeilenumbrüche das Einlesen der letzten Zeile verhindern
- INSTALL: Text verweist auf falsche Installations-URL
- debug.inc: Debugausgabe wird in den DocumentRoot geschrieben, jetzt
 in /debugs (bitte dem Webserver hierauf Rechte geben).

Allgemeine Änderungen:

- Config: Basismodulkonfiguration temporär entfernt
- Config/CMDB: "Datentabellen leeren" gefixt. Passwort lässt sich in der
 config.inc einstellen
- SQL Rights module: SQL-Abfragen optimiert
- Session Management optimiert

0.8.5
- Allgemein: Rechteverwaltung implementiert, Administration von Benutzer und
Gruppen jetzt möglich. Darüber hinaus ein neues Datenbankmodell für das
Rechtesystem (siehe alle mit 'ur_' beginnenden Tabellen in der Datenbank
'doit') entwickelt.
- Allgemein: Neue Lizenzverwaltung (unter IT-Elemente / Software /
Anwendungen & Dienste zu finden)
- Allgemein: Neues Applikationsdesign
- Allgemein: Refakturierung und Redesign des Application Frameworks
- Allgemein: Module lassen sich jetzt im Banner und im Explorer einfügen
- Allgemein: Navigationsleiste (navbar.inc)
- CMDB: Navigationsleiste implementiert
- CMDB: Die Auswahlpunkte der Detailansicht befinden sich jetzt auf der linken
Seite
- Rechteverwaltung: In die Module CMDB, Arbeitsaufträge, Checklisten und
Dateiverwaltung implementiert.

0.8.2
- Allgemein: Windows-Version ist jetzt als Stable verfügbar
- Arbeitsaufträge: 'Zurueck'-Button funktionierte in Auftragsansicht nicht
- Wartungsverträge: SQL-Aufruf gefixt
- CMDB: Normale Benutzer konnten Datensätze löschen
- Allgemein: Installationsanleitung (INSTALL) um einige wichtige Punkte
erweitert.
- CMDB: Statussymbol für Elemente entfernt (bis NMS vollständig vorhanden ist)
- Allgemein: Einige optische Kleinigkeiten gefixt

0.8.1.1 - Windows Beta
- Allgemein: i-doit ist jetzt Windows kompatibel (getestet auf WAMP)
- CMDB: Link von Arbeitsauftragsmodul zu Auftragsansicht war fehlerhaft
- Wartung: Wartungsvertragsverwaltung gefixt, da löschen der Einträge nicht
 funktionierte.

0.8.1.1
- Meine Dokumente: Einzelne Kategorien werden jetzt farblich voneinander
getrennt
- Wartung: Tool zum Verwalten mehrere Subverträge.
- Wieder diverse Kleinigkeiten und Bugfixes, unter anderem bei Pfadangaben
- CMDB: Bei Subdatensatzanzeige wird nun die aktuelle Nummer des anzuzeigenden
Datensatzes angezeigt
- CMDB: Mozilla hat bei zu langen Texten in einer Zelle den Text in der
Detailansicht verschoben
- CMDB: Kontaktdetails Themeverzeichnis gefixt
- Checklisten: Direkt nach der Erstellung konnte eine Checkliste weder
bearbeitet noch gelöscht werden

0.8.1
- Checklisten: Auswahlliste mit den Benutzern wurde noch per LDAP und nicht
über die Wrapperfunktionen abgefragt, es kam zu einem Fatal Error (cm)
- Suchfunktion: Suchte nichts aufgrund falscher Verlinkungen - fixed (aw)
- Dateiverwaltung: Theme wurde nicht richtig übersetzt, somit konnten einige
Icons nicht mit angezeigt werden (aw)
- Dateiverwaltung: Benutzer haben nun nicht mehr das Recht, Dateien hochzu-
laden und zu löschen (aw)
- Diverse Kleinigkeiten, sowie funktional als auch optisch (aw, cm)
- Installation: Hat functions.inc.php genutzt, in der ein DB-Select ausge-
führt wurde, obwohl keine DB verfügbar ist
- Allgemein: functions.inc.php, verzeichnisspezifische Anweisungen entfernt

0.8
- Erstes offizielles Release, folgende Dinge wurden hier deaktiviert:
- LDAP-Benutzerverwaltung
- NMS (momentan nur SNMP und Nagios Log/Config Parser/Creation)
