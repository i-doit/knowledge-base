# LOGINventory

!!! warning
    Mit i-doit Version 1.11 wurde LOGINventory entfernt

Über diesen Import können Informationen aus LOGINventory in i-doit importiert und verwendet werden.

## Voraussetzungen

*   Der Import unterstützt LOGINventory bis einschließlich Version 5. Die Versionen 6 und folgende werden derzeit nicht unterstützt.
*   PDO muss installiert sein.
*   PDO-Treiber dblib muss installiert sein.
*   In der Datei freetds.conf muss die globale Einstellung tds version auf 7.0 gesetzt werden

## Einstellungen in i-doit

Einstellungen zu LOGINventory findet man unter **Verwaltung → Schnittstellen → externe Daten → Loginventory**

## Konfiguration der Datenbank

**IP:** Server, auf dem die Datenbank zu finden ist.
**Port:** der IP Port zur Kommunikation (Standard 3108)
**Datenbank / Schema:** Datenbank Bezeichnung (Standard **loginventory**)
**Benutzername:** Benutzername zum Einloggen in die Datenbank
**Passwort:** selbsterklärend

[![LOGINventory DB Konfigratution](../assets/images/de/daten-konsolidieren/loginventory/logindb.jpg)](../assets/images/de/daten-konsolidieren/loginventory/logindb.jpg)

## Konfiguration der Schnittstelle

Hier kann man das Standardverhalten des Imports für das LOGINventory beeinflussen.

**Standardobjekttyp beim Import: **Alle importierte Objekte im LOGINventory werden mit den ausgewählten Objekttyp erstellt.

**Standard Datenbank:** Bei mehreren Datenbanken kann man eine als Standard auswählen, die geladen wird, sobald wenn man auf der Import-Seite ist.

**Nur bekannte Anwendungen verknüpfen:** Mit dieser Option kann man entscheiden, ob nur Verknüpfungen für Software erstellt werden, deren Software bereits im i-doit-System vorhanden ist, oder ob gefundene Software-Verknüpfungen auch zusätzliche Software in i-doit anlegt.

**Logbuch beim Importieren aktiv:** Mit dieser Option kann man entscheiden, ob Logbuch-Einträge während des Imports geschrieben werden oder nicht. Bei aktiv wird der Import durch das Schreiben von Logbuch-Einträgen langsamer. Dennoch sollte die Option eingeschaltet sein.

**Import:** Auf der Import-Seite kann man Datenbanken auswählen, die man in der Konfiguration hinzugefügt hat. Zusätzlich kann man den Standardobjekttypen für den aktuellen Import bei Bedarf ändern.