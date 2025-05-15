---
search:
  exclude: true
---
# Changelog 0.8.X
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
0.8.6<br>
Folgende Fehler sind behoben:<br>

-   Ermittlung des Installationsverzeichnisses<br>
-   Im Element Switch fehlt das Feld Gateway<br>
-   Kein Dynamischer Datenbankname<br>
-   Hauptnavigation verschwindet und taucht nicht mehr auf<br>
-   Im Element "Router" in den Wan Modulen fehlt das Feld "Gateway"<br>
-   Fehlendes Feld "Beschreibungen" bei Element "Terminals"<br>
-   Fehlende Felder bei Element "Appliances"<br>
-   Netzwerkkonfiguration in Drucker-Detailansicht nicht verfügbar<br>
-   Netzwerkbearbeitung unter Element "Server" ohne Möglichkeit direkt einen Switch zuzuordnen<br>
-   Bearbeitung von Lizenzen nicht möglich<br>
-   Fehlerhafte Sortierung der Objekte über "Weiter"-Buttons<br>
-   Man kann Rechtegruppe 'Administrator' löschen und sich alle Rechte als Administrator entziehen<br>
-   Fehler unter "Meine Dokumente"<br>
-   Ansprechpartner nicht bearbeitbar<br>
-   Löschen von Netzwerkdevices fehlerhaft<br>
-   Kalender Pop-Up bei Wartungsverträgen zu groß<br>
-   'Weitere' Ansprechpartner Link funktioniert nicht<br>
-   Kalenderanzeige bei Arbeitsaufträgen<br>
-   Namensanzeige in Arbeitsaufträgen<br>
-   Sortierung in der Listenansicht der IT-Elemente fehlerhaft<br>
-   Fehler bei 'Neuer Arbeitsauftrag'<br>
-   Nach Änderung der sysop-Passwortes erscheint das Menü nicht mehr<br>
-   Datumsüberschreitung Arbeitsaufträge<br>
-   Löschen von Arbeitsaufträgen<br>
-   Einträge in der Kategorie "Arbeitsauftraege" sind nicht richtig verlinkt<br>
-   Suche-Funktion durchsucht zu wenig Felder<br>
-   main.php: Link zu IT-Elementen in "Letzte Updates"<br>
-   menu.php: Suchfunktion meldet "Kein Suchbegriff eingegeben" bei fehlendem<br>
Suchbegriff<br>
-   main.php: Es werden \n's in der RSS-Feed-Ausgabe angezeigt.<br>
-   CMDB: Kalenderbild wird nicht angezeigt<br>
-   Calender: Kalender zeigt unter Windows system-spezifische Warnungen<br>
-   Installer: Der i-doit SQL Dump wird nicht komplett eingelesen, da Windows-<br>
 zeilenumbrüche das Einlesen der letzten Zeile verhindern<br>
-   INSTALL: Text verweist auf falsche Installations-URL<br>
-   debug.inc: Debugausgabe wird in den DocumentRoot geschrieben, jetzt<br>
 in /debugs (bitte dem Webserver hierauf Rechte geben).<br>

Allgemeine Änderungen:<br>

-   Config: Basismodulkonfiguration temporär entfernt<br>
-   Config/CMDB: "Datentabellen leeren" gefixt. Passwort lässt sich in der<br>
 config.inc einstellen<br>
-   SQL Rights module: SQL-Abfragen optimiert<br>
-   Session Management optimiert<br>

0.8.5<br>

-   Allgemein: Rechteverwaltung implementiert, Administration von Benutzer und<br>
Gruppen jetzt möglich. Darüber hinaus ein neues Datenbankmodell für das<br>
Rechtesystem (siehe alle mit 'ur_' beginnenden Tabellen in der Datenbank<br>
'doit') entwickelt.<br>
-   Allgemein: Neue Lizenzverwaltung (unter IT-Elemente / Software /<br>
Anwendungen & Dienste zu finden)<br>
-   Allgemein: Neues Applikationsdesign<br>
-   Allgemein: Refakturierung und Redesign des Application Frameworks<br>
-   Allgemein: Module lassen sich jetzt im Banner und im Explorer einfügen<br>
-   Allgemein: Navigationsleiste (navbar.inc)<br>
-   CMDB: Navigationsleiste implementiert<br>
-   CMDB: Die Auswahlpunkte der Detailansicht befinden sich jetzt auf der linken<br>
Seite<br>
-   Rechteverwaltung: In die Module CMDB, Arbeitsaufträge, Checklisten und<br>
Dateiverwaltung implementiert.<br>

0.8.2<br>

-   Allgemein: Windows-Version ist jetzt als Stable verfügbar<br>
-   Arbeitsaufträge: 'Zurueck'-Button funktionierte in Auftragsansicht nicht<br>
-   Wartungsverträge: SQL-Aufruf gefixt<br>
-   CMDB: Normale Benutzer konnten Datensätze löschen<br>
-   Allgemein: Installationsanleitung (INSTALL) um einige wichtige Punkte<br>
erweitert.<br>
-   CMDB: Statussymbol für Elemente entfernt (bis NMS vollständig vorhanden ist)<br>
-   Allgemein: Einige optische Kleinigkeiten gefixt<br>

0.8.1.1 - Windows Beta<br>

-   Allgemein: i-doit ist jetzt Windows kompatibel (getestet auf WAMP)<br>
-   CMDB: Link von Arbeitsauftragsmodul zu Auftragsansicht war fehlerhaft<br>
-   Wartung: Wartungsvertragsverwaltung gefixt, da löschen der Einträge nicht<br>
 funktionierte.<br>

0.8.1.1<br>

-   Meine Dokumente: Einzelne Kategorien werden jetzt farblich voneinander<br>
getrennt<br>
-   Wartung: Tool zum Verwalten mehrere Subverträge.<br>
-   Wieder diverse Kleinigkeiten und Bugfixes, unter anderem bei Pfadangaben<br>
-   CMDB: Bei Subdatensatzanzeige wird nun die aktuelle Nummer des anzuzeigenden<br>
Datensatzes angezeigt<br>
-   CMDB: Mozilla hat bei zu langen Texten in einer Zelle den Text in der<br>
Detailansicht verschoben<br>
-   CMDB: Kontaktdetails Themeverzeichnis gefixt<br>
-   Checklisten: Direkt nach der Erstellung konnte eine Checkliste weder<br>
bearbeitet noch gelöscht werden<br>

0.8.1<br>

-   Checklisten: Auswahlliste mit den Benutzern wurde noch per LDAP und nicht<br>
über die Wrapperfunktionen abgefragt, es kam zu einem Fatal Error (cm)<br>
-   Suchfunktion: Suchte nichts aufgrund falscher Verlinkungen - fixed (aw)<br>
-   Dateiverwaltung: Theme wurde nicht richtig übersetzt, somit konnten einige<br>
Icons nicht mit angezeigt werden (aw)<br>
-   Dateiverwaltung: Benutzer haben nun nicht mehr das Recht, Dateien hochzu-<br>
laden und zu löschen (aw)<br>
-   Diverse Kleinigkeiten, sowie funktional als auch optisch (aw, cm)<br>
-   Installation: Hat functions.inc.php genutzt, in der ein DB-Select ausge-<br>
führt wurde, obwohl keine DB verfügbar ist<br>
-   Allgemein: functions.inc.php, verzeichnisspezifische Anweisungen entfernt<br>

0.8<br>

-   Erstes offizielles Release, folgende Dinge wurden hier deaktiviert:<br>
-   LDAP-Benutzerverwaltung<br>
-   NMS (momentan nur SNMP und Nagios Log/Config Parser/Creation)<br>
