---
title: Systemreparatur und Bereinigung
description: "Wenn i-doit sich merkwürdig verhält — Kategorien fehlen, Listen zeigen falsche Daten, die Suche findet nichts — ist Systemreparatur der erste Anlaufpunkt."
icon:
status:
lang: de
---
# Systemreparatur und Bereinigung

Wenn i-doit sich merkwürdig verhält — Kategorien fehlen, Listen zeigen falsche Daten, die Suche findet nichts — ist Systemreparatur der erste Anlaufpunkt. Du findest die Funktion unter **Verwaltung → Systemreparatur und Bereinigung**. Hier stehen dir eine Reihe von Werkzeugen zur Verfügung, mit denen du Caches leeren, Datenbanktabellen reparieren und verwaiste Einträge entfernen kannst.

!!! info "Sicher in der Anwendung"
    Die meisten Reparaturfunktionen sind sicher — sie löschen keine Daten, sondern bauen Caches und Indizes neu auf. Funktionen, die tatsächlich Einträge entfernen (z. B. archivierte Objekte löschen), sind weiter unten separat beschrieben und entsprechend gekennzeichnet.

!!! warning "Backup nicht vergessen"
    Erstelle vor der Nutzung eine Sicherungskopie deiner Datenbank. Alle Änderungen lassen sich nicht rückgängig machen.

[![systemreparatur](../../../assets/images/de/administration/systemreparatur.png)](../../../assets/images/de/administration/systemreparatur.png)

---

## Häufige Szenarien

### Nach einem Update

Nach einem i-doit-Update kann es vorkommen, dass Objektlisten nicht mehr korrekt dargestellt werden oder Kategorien fehlen. Leere in diesem Fall zuerst den **kompletten Cache** und führe anschließend **Kategorie-Attribute neu indizieren** aus. Wenn Objektlisten weiterhin nicht stimmen, hilft zusätzlich die Einstellung `cmdb.refresh-table-configurations` in den [Experteneinstellungen](experteneinstellungen.md).

### Nach dem Löschen vieler Objekte

Wenn du eine größere Menge an Objekten gelöscht oder archiviert hast, bleiben in der Datenbank Fragmente zurück: verwaiste Beziehungen, leere Kategorie-Einträge, nicht mehr zugeordnete Dialog-Werte. Nutze nacheinander **Nicht zugewiesene Beziehungen entfernen**, **Tabellen defragmentieren** und **Tabellen optimieren**, um die Datenbank aufzuräumen und die Performance wiederherzustellen.

### Wenn die Suche keine Ergebnisse liefert

Die i-doit-Suche arbeitet mit einem eigenen Index. Wird dieser beschädigt oder veraltet, liefert die Suche unvollständige oder gar keine Ergebnisse. Leere den **kompletten Cache** und führe danach **Kategorie-Attribute neu indizieren** aus. Prüfe außerdem im Bereich [Troubleshooting](../../troubleshooting/index.md), ob weitere Maßnahmen nötig sind.

---

## Cache

Cache-Funktionen sind vollkommen ungefährlich. Sie löschen temporäre Daten, die i-doit beim nächsten Seitenaufruf automatisch neu erzeugt.

| Button | Was passiert | Wann sinnvoll |
| --- | --- | --- |
| **Kompletten Cache leeren** | Entfernt sämtliche zwischengespeicherten Daten — System-, Template-, Rechte- und Quickinfo-Cache auf einmal. | Nach Updates, bei unerklärlichem Verhalten, als erster Schritt bei jeder Fehlersuche. |
| **System Cache leeren** | Löscht den Cache für Systemkonfiguration und Menüstruktur. | Wenn Menüpunkte fehlen oder die Navigation nicht zum aktuellen Stand passt. |
| **Template Cache leeren** | Verwirft zwischengespeicherte Vorlagen der Benutzeroberfläche. | Wenn Formulare oder Ansichten nach einer Änderung nicht aktualisiert werden. |
| **Rechtesystem Cache leeren** | Baut den Cache des Berechtigungssystems neu auf. | Nach dem Ändern von Benutzerrechten oder Rollen, wenn Berechtigungen nicht greifen. |
| **Quickinfo Cache leeren** | Entfernt die Tooltips, die beim Überfahren von Objektlinks erscheinen. | Wenn Quickinfos veraltete oder falsche Informationen anzeigen. |
| **Validierungscache erneuern** | Aktualisiert den Cache, der die Pflichtfeld-Regeln vorhält. | Nach dem Anpassen von Validierungsprofilen, wenn Pflichtfelder nicht korrekt geprüft werden. |

---

## Datenbank

Diese Funktionen arbeiten direkt auf den Datenbanktabellen. Sie reparieren Strukturen und Indizes, ohne Nutzdaten zu löschen.

| Button | Was passiert | Wann sinnvoll |
| --- | --- | --- |
| **Tabellen optimieren** | Führt ein `OPTIMIZE TABLE` auf alle i-doit-Tabellen aus. Gibt ungenutzten Speicher frei und aktualisiert Tabellenstatistiken. | Regelmäßig zur Performancepflege, besonders nach dem Löschen vieler Datensätze. |
| **Tabellen defragmentieren** | Reorganisiert fragmentierte Tabellen. Ähnlich wie Optimieren, aber gezielt auf physische Fragmentierung. | Wenn die Datenbank über längere Zeit gewachsen ist und Abfragen langsamer werden. |
| **Standorte korrigieren** | Überprüft und repariert die Standort-Hierarchie. Stellt sicher, dass alle Standortzuweisungen konsistent sind. | Wenn der Standort-Browser fehlerhafte Baumstrukturen anzeigt oder Objekte am falschen Ort erscheinen. |
| **Mehrfach zugewiesene Kategorien entfernen** | Entfernt doppelte Zuweisungen von Kategorien zu Objekttypen. | Wenn eine Kategorie in einem Objekttyp mehrfach auftaucht. |
| **Kategorie-Attribute neu indizieren** | Baut die internen Indizes für Kategorie-Attribute komplett neu auf. | Nach Updates, nach Import-Vorgängen oder wenn Suche und Filter nicht die erwarteten Ergebnisse liefern. |
| **Mehrfache Einträge Single-Value-Kategorien löschen** | Single-Value-Kategorien dürfen pro Objekt nur einen Eintrag haben. Diese Funktion entfernt überzählige Einträge. | Wenn durch Importe oder Fehler mehrere Einträge in einer Single-Value-Kategorie entstanden sind. |
| **Nicht zugewiesene Beziehungen entfernen** | Löscht Beziehungsobjekte, deren Quell- oder Zielobjekt nicht mehr existiert. | Nach dem Löschen vieler Objekte, wenn verwaiste Beziehungen die Übersicht stören. |
| **Titel von Beziehungsobjekten erneuern** | Aktualisiert die automatisch generierten Titel aller Beziehungsobjekte anhand der aktuellen Objekt- und Beziehungsnamen. | Wenn Beziehungsobjekte veraltete oder falsche Titel tragen, z. B. nach Umbenennungen. |
| **Leere SYS-IDs befüllen** | Erzeugt fehlende SYS-IDs für Objekte, die keine haben. Jedes Objekt benötigt eine eindeutige SYS-ID. | Nach Migrationen oder Importen, bei denen SYS-IDs nicht übernommen wurden. |
| **Gewichtung aller Beziehungstypen auf Standard setzen** | Setzt die Gewichtung sämtlicher Beziehungstypen auf den Standardwert zurück. | Wenn benutzerdefinierte Gewichtungen zu unerwartetem Verhalten bei der Beziehungsauswertung führen. |
| **Beziehungsobjekte erneuern** | Erstellt fehlende Beziehungsobjekte neu und repariert beschädigte. | Wenn in der Kategorie *Beziehungen* Einträge fehlen, obwohl Verknüpfungen bestehen. |
| **Zeilenklick in Objektlisten aktivieren** | Aktiviert die Funktion, dass ein Klick auf eine Zeile in der Objektliste das Objekt öffnet. | Wenn der Zeilenklick nach einem Update oder einer Konfigurationsänderung nicht mehr funktioniert. |

---

## Export

| Button | Was passiert | Wann sinnvoll |
| --- | --- | --- |
| **"mysqldump" Pfad** | Ermöglicht dir, den Pfad zum `mysqldump`-Binary anzugeben und einen Datenbank-Export direkt aus der Oberfläche anzustoßen. Du kannst die zu exportierende Datenbank auswählen. | Wenn du ein schnelles Backup über die Weboberfläche erstellen möchtest, ohne auf die Kommandozeile zu wechseln. |

---

## Objekte

!!! warning "Achtung: Datenverlust möglich"
    Diese Funktionen entfernen Objekte unwiderruflich aus der Datenbank. Stelle sicher, dass du die betroffenen Objekte nicht mehr benötigst.

| Button | Was passiert | Wann sinnvoll |
| --- | --- | --- |
| **Unfertige Objekte entfernen** | Löscht Objekte mit dem Status *Unfertig*. Das sind Objekte, deren Erstellung abgebrochen wurde und die nie vollständig angelegt waren. | Regelmäßig, um die Datenbank von unvollständigen Objekten zu bereinigen. |
| **Archivierte Objekte entfernen** | Entfernt alle Objekte mit dem Status *Archiviert* endgültig aus der Datenbank. | Wenn du sicher bist, dass archivierte Objekte nicht wiederhergestellt werden müssen. |
| **Gelöschte Objekte entfernen** | Entfernt alle Objekte mit dem Status *Gelöscht* endgültig (Purge). | Um die Datenbank von bereits als gelöscht markierten Objekten zu befreien. |

---

## Kategorien

!!! warning "Achtung: Datenverlust möglich"
    Kategorie-Einträge werden unwiderruflich entfernt.

| Button | Was passiert | Wann sinnvoll |
| --- | --- | --- |
| **Unfertige Kategorie-Einträge entfernen** | Löscht Einträge in Kategorien, die den Status *Unfertig* haben. | Wenn durch abgebrochene Bearbeitungen unvollständige Einträge entstanden sind. |
| **Archivierte Kategorie-Einträge entfernen** | Entfernt archivierte Einträge aus allen Kategorien. | Um Speicherplatz freizugeben und die Übersichtlichkeit in Kategorien zu verbessern. |
| **Gelöschte Kategorie-Einträge entfernen** | Entfernt Einträge mit dem Status *Gelöscht* endgültig. | Zur endgültigen Bereinigung nach dem Aufräumen von Kategorie-Daten. |

---

## Dialog

| Button | Was passiert | Wann sinnvoll |
| --- | --- | --- |
| **Unfertige Dialog-Einträge entfernen** | Löscht Dialog-Einträge (Dropdown-Werte) mit dem Status *Unfertig*. | Wenn unvollständige Dropdown-Werte in Auswahllisten auftauchen. |
| **Archivierte Dialog-Einträge entfernen** | Entfernt archivierte Dialog-Einträge. | Wenn veraltete Werte die Dropdown-Listen nicht mehr belasten sollen. |
| **Gelöschte Dialog-Einträge entfernen** | Entfernt als gelöscht markierte Dialog-Einträge endgültig. | Zur endgültigen Bereinigung von Dialog-Feldern. |
| **Setze alle Dialog-Einträge auf normal** | Setzt den Status aller Dialog-Einträge auf *Normal* zurück. Das betrifft auch archivierte und gelöschte Einträge — sie werden dadurch wieder sichtbar. | Wenn du versehentlich Dialog-Einträge archiviert oder gelöscht hast und alle wiederherstellen möchtest. |

---

## Andere

| Button | Was passiert | Wann sinnvoll |
| --- | --- | --- |
| **Migriere Datenbank-Objekte in Kategorien** | Verschiebt Daten aus veralteten Datenbankstrukturen in die aktuelle Kategorienstruktur. | Nach einem größeren Versionssprung, wenn alte Datenstrukturen migriert werden müssen. |
| **Suche nach Teil-Strings in Objektlisten aktivieren** | Aktiviert die Wildcard-Suche in Objektlisten, sodass auch Teilbegriffe gefunden werden. | Wenn du in Objektlisten nur mit exakten Treffern suchen kannst und Teilbegriffe benötigst. |
| **Alte Objekttyp-Icons gegen Redesign-Icons tauschen** | Ersetzt veraltete Icons durch die aktuellen Redesign-Icons. | Nach einem Update auf eine Version mit neuem Icon-Set, wenn noch alte Icons angezeigt werden. |
| **Exportierte Check_MK-Tags löschen** | Entfernt Tags, die für den Checkmk-Export erzeugt wurden. | Wenn die Checkmk-Integration nicht mehr genutzt wird oder Tags neu synchronisiert werden sollen. |
| **Verwaiste Einträge benutzerdefinierter Kategorien löschen** | Entfernt Einträge in benutzerdefinierten Kategorien, die keinem Objekt mehr zugeordnet sind. | Nach dem Löschen von Objekten, wenn Reste in benutzerdefinierten Kategorien verbleiben. |

---

## Weiterführende Informationen

- In den [Experteneinstellungen](experteneinstellungen.md) findest du die Option `cmdb.refresh-table-configurations`, mit der du Objektlisten-Konfigurationen zurücksetzen kannst — hilfreich, wenn Listen nach einem Update nicht korrekt dargestellt werden.
- Allgemeine Hilfe bei Problemen findest du im Bereich [Troubleshooting](../../troubleshooting/index.md).
