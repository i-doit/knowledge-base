---
title: Mehrsprachigkeit und Übersetzungen
description: "i-doit bringt Deutsch und Englisch als Sprachen mit."
icon:
status:
lang: de
---
# Mehrsprachigkeit und Übersetzungen

i-doit bringt Deutsch und Englisch als Sprachen mit. Die gesamte Oberfläche – Menüs, Kategorie-Bezeichnungen, Attributnamen und Dialog-Werte – wird automatisch in der gewählten Sprache angezeigt. Darüber hinaus kannst du bestehende Übersetzungen anpassen, überschreiben oder über Sprachprofile sogar komplett neue Sprachen anlegen. Dieser Artikel erklärt dir, wie der Sprachwechsel funktioniert, was übersetzt wird und was nicht, und wie du eigene Übersetzungen pflegst.

!!! info "Englisch-only-Bereiche"
    Einige Bereiche sind grundsätzlich nur auf Englisch verfügbar: der [Login](../grundlagen/erstanmeldung.md), das [Admin-Center](../administration/admin-center.md), das [Setup](../installation/manuelle-installation/setup.md), der [Update-Assistent](../wartung-und-betrieb/update-einspielen.md) und das [Kommandozeilen-Tool Controller](../automatisierung-und-integration/cli/index.md).

---

## Sprache wechseln

Es gibt mehrere Wege, die Anzeigesprache zu ändern:

### Flaggen in der Oberfläche

Oben rechts in der Web GUI findest du Länderflaggen. Ein Klick darauf wechselt die Sprache sofort für die aktuelle Sitzung.

[![Sprachwechsel](../assets/images/de/administration/mehrsprachigkeit-und-uebersetzungen/sprachwechsel.png)](../assets/images/de/administration/mehrsprachigkeit-und-uebersetzungen/sprachwechsel.png)

### Benutzereinstellung (dauerhaft)

Unter **Verwaltung → Benutzereinstellungen → Benutzersprache** legst du fest, welche Sprache nach dem Login aktiv sein soll. Diese Einstellung ist wichtig, weil sie auch für Funktionen greift, die außerhalb der Web GUI ablaufen – zum Beispiel werden [E-Mail-Benachrichtigungen](../auswertungen/benachrichtigungen.md) in der hier eingestellten Sprache versendet.

### URL-Parameter

Du kannst die Sprache auch per URL-Parameter steuern, indem du `?lang=de` oder `?lang=en` an die URL anhängst. Das ist praktisch, um jemandem einen Link in einer bestimmten Sprache zu schicken.

### Automatische Spracherkennung

Webbrowser senden bei jeder Anfrage die bevorzugten Sprachen des Benutzers mit. i-doit wertet diese Information beim Login aus und wählt automatisch die passende Sprache. Die Benutzereinstellung unter **Verwaltung → Benutzereinstellungen → Benutzersprache** hat aber Vorrang, sobald dort ein Wert gesetzt ist.

---

## Was wird übersetzt – und was nicht?

### Übersetzt wird

- **UI-Elemente**: Menüs, Buttons, Navigationseinträge, Tooltips
- **Kategorie- und Attributnamen**: Zum Beispiel wird "General" zu "Allgemein"
- **Objekttyp-Bezeichnungen**: "Room" ↔ "Raum", "Server" ↔ "Server"
- **Dialog-Werte**: Vordefinierte Auswahllisten wie CMDB-Status oder Betriebszustände

### Nicht übersetzt wird

- **Objekt-Titel**: Der Name eines Objekts bleibt immer gleich, unabhängig von der Sprache. Das ist bewusst so, weil Objekt-Titel der [eindeutigen Referenzierung](../grundlagen/eindeutige-referenzierungen.md) dienen.
- **Benutzerdaten**: Beschreibungen, Kommentare und andere Freitextfelder, die du selbst einträgst, werden nicht übersetzt – sie bleiben in der Sprache, in der sie geschrieben wurden.
- **Benutzerdefinierte Dialog-Werte**: Wenn du eigene Einträge in Dialog-Feldern anlegst, musst du sie selbst über Sprachkonstanten mehrsprachig machen.

---

## Sprachkonstanten verstehen

Hinter jeder Übersetzung steckt eine sogenannte Sprachkonstante. Im Quellcode und in der Datenbank steht nie der sichtbare Text, sondern ein Platzhalter wie `LC__CMDB__OBJTYPE__ROOM`. Erst zur Anzeige in der Web GUI wird daraus "Raum" oder "Room" – je nach eingestellter Sprache.

| Sprachkonstante | Englisch | Deutsch |
| --- | --- | --- |
| LC__CMDB__OBJTYPE__ROOM | Room | Raum |

Sprachkonstanten erkennst du daran, dass sie nur Großbuchstaben (A–Z), Unterstriche und gelegentlich Zahlen enthalten. Sie beginnen immer mit dem Präfix `LC__`.

---

## Benutzerdefinierte Übersetzungen und Sprachprofile

### Wann brauchst du ein Sprachprofil?

Sprachprofile sind der Weg, um in i-doit über Deutsch und Englisch hinauszugehen – oder um eine bestehende Sprache in großem Umfang anzupassen. Typische Anwendungsfälle:

- Du möchtest i-doit in einer dritten Sprache bereitstellen (z. B. Spanisch oder Französisch)
- Du willst Fachbegriffe unternehmensweit vereinheitlichen, ohne in Dateien auf dem Server einzugreifen

### So erstellst du ein Sprachprofil

Navigiere zu **Verwaltung → Datenansicht → Sprachprofile** und klicke auf **Neu**. Vergib einen Namen, wähle eine Flagge und speichere. Die neue Sprache ist sofort auswählbar, enthält aber zunächst die deutschen Texte. Anschließend übersetzt du einzelne Felder direkt im Sprachprofil-Editor – du kannst dort nach Sprachkonstanten oder bestehendem Text filtern und die Übersetzung eintragen.

Eine ausführliche Schritt-für-Schritt-Anleitung findest du unter [Benutzerdefinierte Übersetzungen](../anwendungsfaelle/benutzerdefinierte-uebersetzungen.md).

---

## Übersetzungsdateien auf dem Server

Wenn du lieber direkt auf Dateiebene arbeitest, findest du die Übersetzungen im Installationsverzeichnis von i-doit unter `src/lang/`:

| Datei | Zweck | Update-sicher? |
| --- | --- | --- |
| `de.inc.php` | Komplette deutsche Übersetzung | nein |
| `en.inc.php` | Komplette englische Übersetzung | nein |
| `de_custom.inc.php` | Deine Anpassungen an der deutschen Sprache | ja |
| `en_custom.inc.php` | Deine Anpassungen an der englischen Sprache | ja |
| `de_custom.example.inc.php` | Beispieldatei als Vorlage (wird von i-doit ignoriert) | nein |

!!! warning "Nur `custom`-Dateien bearbeiten"
    Die Hauptdateien `de.inc.php` und `en.inc.php` werden bei jedem [Update](../wartung-und-betrieb/update-einspielen.md) überschrieben. Trage deine Anpassungen deshalb ausschließlich in die `custom`-Dateien ein.

### Syntax

Die Dateien enthalten PHP-Code. Jede Übersetzung ist eine Zeile nach diesem Schema:

```php
$g_langcache['LC__EXAMPLE'] = 'Deine Übersetzung';
```

Du kannst damit sowohl neue Sprachkonstanten einführen als auch bestehende überschreiben – die `custom`-Datei hat immer Vorrang vor der Hauptdatei.

### Sprache erzwingen

Wenn du möchtest, dass i-doit nur in einer Sprache verfügbar ist, kannst du die nicht benötigte Sprachdatei durch die gewünschte ersetzen:

```shell
cd /var/www/html/           # Installationsverzeichnis von i-doit (ggf. anpassen)
cd src/lang/
cp de.inc.php de.inc.php.bak
cp en.inc.php de.inc.php    # Deutsch durch Englisch ersetzen
```

Da die Hauptdateien nicht update-sicher sind, musst du diesen Schritt nach jedem Update wiederholen.

---

## Mehrsprachigkeit bei Objekttypen, Kategorien und Attributen

### Objekttypgruppen

In der Mandanten-Datenbank enthält die Tabelle `isys_obj_type_group` in der Spalte `isys_obj_type_group__title` die Sprachkonstanten. Wenn du eine neue [Objekttypgruppe](../grundlagen/struktur-it-dokumentation.md) erstellst, kannst du den Titel in der Datenbank durch eine Sprachkonstante ersetzen und diese in den `custom`-Dateien übersetzen. Bestehende Gruppen benennst du nicht direkt in der Datenbank um – überschreibe stattdessen die Sprachkonstante in den `custom`-Dateien.

### Objekttypen

Unter **Verwaltung → Datenstruktur → Objekttypen → [Gruppe] → [Objekttyp] → Sprachkonstante / Bezeichnung** kannst du jeden [Objekttyp](../grundlagen/struktur-it-dokumentation.md) mehrsprachig benennen – das gilt für Standard- und [benutzerdefinierte Objekttypen](../grundlagen/benutzerdefinierte-objekttypen.md) gleichermaßen.

### Kategorien und Attribute

Standard-[Kategorien](../grundlagen/struktur-it-dokumentation.md) und ihre Attribute übersetzt du, indem du die zugehörige Sprachkonstante in den `custom`-Dateien überschreibst. Bei [benutzerdefinierten Kategorien](../grundlagen/benutzerdefinierte-kategorien.md) trägst du direkt beim Anlegen eine Sprachkonstante als Titel ein und übersetzt sie anschließend in den `custom`-Dateien für jede Sprache.

---

## Praxistipp: Konsistente Sprache im mehrsprachigen Team

Wenn in deinem Team sowohl deutsch- als auch englischsprachige Kolleginnen und Kollegen mit i-doit arbeiten, lohnt es sich, ein paar Regeln festzulegen:

- **Objekt-Titel immer auf Englisch vergeben** – da sie nicht übersetzt werden, verstehen so alle Teammitglieder die Namen auf Anhieb.
- **Beschreibungsfelder in einer einheitlichen Sprache pflegen** – oder, wenn das nicht realistisch ist, zumindest pro Kategorie eine Sprache vereinbaren.
- **Benutzerdefinierte Dialog-Werte mit Sprachkonstanten anlegen**, damit sie in beiden Sprachen korrekt angezeigt werden. Das erfordert etwas Aufwand beim Einrichten, spart aber langfristig Verwirrung.
- **Benutzersprache korrekt setzen** – erinnere alle Teammitglieder daran, unter **Verwaltung → Benutzereinstellungen → Benutzersprache** ihre bevorzugte Sprache einzustellen, damit auch Benachrichtigungen in der richtigen Sprache ankommen.
