---
title: Benutzerdefinierte Kategorien
description: "Benutzerdefinierte Kategorien ermöglichen dir, eigene Kategorien mit individuellen Attributen zu erstellen -- für alle Informationen, die in den..."
icon:
status:
lang: de
---
# Benutzerdefinierte Kategorien

Benutzerdefinierte Kategorien ermöglichen dir, eigene [Kategorien](struktur-it-dokumentation.md) mit individuellen [Attributen](struktur-it-dokumentation.md) zu erstellen -- für alle Informationen, die in den Standard-Kategorien von i-doit nicht abgedeckt sind.

## Konfiguration der Kategorie

Du findest die Konfiguration unter **Verwaltung → Datenstruktur → Benutzerdefinierte Kategorien**. Über den Button **Neu** erstellst du eine neue Kategorie. Bestehende benutzerdefinierte Kategorien kannst du dort jederzeit nachträglich bearbeiten.

[![benutzerdefinierte-kategorien](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/1-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/1-bk.png)

So konfigurierst du eine neue Kategorie Schritt für Schritt:

**1. Eindeutigen Namen vergeben**

Gib der Kategorie einen eindeutigen Namen, damit du sie in der Kategorie-Liste leicht identifizieren kannst.

[![benutzerdefinierte-kategorien-2](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/2-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/2-bk.png)

**2. Objekttypen zuweisen**

Verknüpfe die Kategorie mit einem oder mehreren [Objekttypen](struktur-it-dokumentation.md), damit sie dort zur Verfügung steht.

[![benutzerdefinierte-kategorien-3](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/3-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/3-bk.png)

**3. Kategorie-Typ festlegen**

Wähle zwischen [Single-Value-](struktur-it-dokumentation.md) und [Multi-Value-Kategorie](struktur-it-dokumentation.md) (Listen-Kategorie). Wenn die Attribute pro Objekt nur einmal gepflegt werden müssen, reicht eine Single-Value-Kategorie. Benötigst du mehrere Einträge pro Objekt (z. B. mehrere Verträge), wähle eine Multi-Value-Kategorie.

[![benutzerdefinierte-kategorien-4](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/4-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/4-bk.png)

**4. Konstante hinterlegen**

Hinterlege eine Konstante, um die Kategorie in Abfragen (z. B. in selbst geschriebenen [Reports](../auswertungen/report-manager.md)) referenzieren zu können. i-doit schlägt beim Erstellen automatisch eine Konstante vor -- du kannst sie bei Bedarf anpassen.

[![benutzerdefinierte-kategorien-5](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/5-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/5-bk.png)

**5. Icon auswählen (ab Version 37)**

Du kannst ein eigenes Icon für die Kategorie auswählen. Klicke dazu auf **Icon ändern** und wähle aus der Sammlung oder lade ein eigenes Icon hoch. Maximale Dateigröße: **1024 KB**. Erlaubte Formate: **apng**, **avif**, **gif**, **jpg**, **jpeg**, **jfif**, **pjpeg**, **pjp**, **png**, **svg** und **webp**.

[![benutzerdefinierte-kategorien-5](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/icon-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/icon-bk.png)

## Ausprägung der Kategorie

Um deine Kategorie mit Attributen auszuprägen, fügst du über den Button **Mehrere Felder hinzufügen** beliebig viele Felder hinzu. Folgende [Feldtypen](attributfelder.md) stehen zur Auswahl:

| Feld                                   | Beschreibung                                                                                                                                                                                                                                                                                                                                                                            |
| -------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Checkbox**                           | Eine Checkbox die markiert werden kann.                                                                                                                                                                                                                                                                                                                                                 |
| **Dateibrowser**                       | Eine Datei referenzieren.                                                                                                                                                                                                                                                                                                                                                               |
| **Datum und Uhrzeit**                  | Ein Feld zum Eintragen eines Datums und/oder einer Uhrzeit; innerhalb der Kategorie steht hier ein Kalender zur Verfügung, mit dem die Auswahl ermöglicht wird.                                                                                                                                                                                                                         |
| **Dialog+**                            | [Dialog-Plus-Felder](dialog-admin.md), die mit eigenen Werten befüllt werden können, sodass diese wiederverwendbar sind. Über den Identifier im Feld **Zusatz** kann das Dialog-Plus-Feld auch in anderen Kategorien genutzt werden, sodass dort die bereits eingetragenen Werte zur Verfügung stehen. Hierfür ist es notwendig, denselben Identifier in beiden Kategorien einzutragen. |
| **Dialog+ (Mehrfachauswahl)**          | Wie **Dialog+**, nur mit beliebig vielen Werten.                                                                                                                                                                                                                                                                                                                                        |
| **HTML-Editor**                        | Ein Textfeld, das einfache Textformatierungen wie zum Beispiel kursive Schrift erlaubt.                                                                                                                                                                                                                                                                                                 |
| **Ja-Nein-Feld**                       | Eine einfache Ja-oder-Nein-Auswahl.                                                                                                                                                                                                                                                                                                                                                     |
| **Link**                               | Ein Feld zur Angabe eines Hyperlinks, der innerhalb der Kategorie angeklickt werden kann und dort weiterleitet.                                                                                                                                                                                                                                                                         |
| **Nur Zahlen sind erlaubt**            | Ein Feld in dem nur Zahlen eingetragen werden können.                                                                                                                                                                                                                                                                                                                                   |
| **Objekt-Beziehung**                   | Bei der Verwendung einer [Objektbeziehung](objekt-beziehungen.md) wird eine vollwertige Beziehung erzeugt. Das Feld **Zusatz** erlaubt die Auswahl der Beziehungsart und den damit verbundenen Beziehungstext. Diese Beziehungen sind auch im CMDB Explorer aufzufinden. Wenn möglich, ist dieser Feldtyp dem oben genannten Objekt-Browser zu bevorzugen.                              |
| **Objekt-Beziehung (Mehrere Objekte)** | Wie **Objekt-Beziehung**, nur mit beliebig vielen Objekten.                                                                                                                                                                                                                                                                                                                             |
| **Objekt-Browser**                     | Ein Feld zur Erzeugung einer Verknüpfung mit einem anderen Objekt. Hierbei handelt es sich nur um eine Referenzierung und nicht um eine vollwertige Beziehung. Eine solche Referenzierung wird daher nicht im CMDB Explorer erscheinen.                                                                                                                                                 |
| **Objekt-Browser (Mehrere Objekte)**   | Wie **Objekt-Browser**, nur mit beliebig vielen Objekten.                                                                                                                                                                                                                                                                                                                               |
| **Report**                             | Zeigt einen Report an, dazu muss der Report im Feld Zusatz ausgewählt werden.                                                                                                                                                                                                                                                                                                           |
| **Textfeld**                           | Ein einzeiliges Textfeld zur Eingabe von Freitext                                                                                                                                                                                                                                                                                                                                       |
| **Textfeld (maskiert)**                | Ein einzeiliges Textfeld zur Eingabe von maskiertem Freitext. Der Inhalt ist nur in der Datenbank sichtbar.                                                                                                                                                                                                                                                                             |
| **Textfeld (Mehrzeilig)**              | In diesem mehrzeiligen Textfeld können längere Texte hinterlegt werden.                                                                                                                                                                                                                                                                                                                 |
| **Datum und Uhrzeit**                  | Ein Feld für Datum oder für Datum + Uhrzeit                                                                                                                                                                                                                                                                                                                                             |
| **Zeit**                               | Hier kann eine Uhrzeit zwischen 00:00 und 23:59 angegeben werden                                                                                                                                                                                                                                                                                                                        |

Zusätzlich sind folgende Elemente verfügbar:

| Feld                  | Beschreibung                                                                                                                                                                                                                                                                                       |
| --------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Horizontale Linie** | Eine Linie zur optischen Abgrenzung von Feldern und Inhalten                                                                                                                                                                                                                                       |
| **HTML**              | Die Möglichkeit in der Konfiguration der Kategorie HTML-Code zu hinterlegen, der in der Kategorie interpretiert wird. Der Quellcode wird in der Konfiguration der Kategorie eingetragen und kann nicht beim Aufruf der Kategorie in der Dokumentation durch die Anwender eingetragen werden.       |
| **Javascript**        | Die Möglichkeit in der Konfiguration der Kategorie Javascript-Code zu hinterlegen, der in der Kategorie interpretiert wird. Der Quellcode wird in der Konfiguration der Kategorie eingetragen und kann nicht beim Aufruf der Kategorie in der Dokumentation durch die Anwender eingetragen werden. |

Wie bei fast jeder anderen Kategorie fügt i-doit automatisch ein **Beschreibungsfeld** am Ende hinzu.

Die Reihenfolge der erstellten Attribute änderst du über die schraffierten Flächen am Anfang jeder Zeile per Drag'n'Drop.

[![benutzerdefinierte-kategorien-6](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/6-bk.gif)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/6-bk.gif)

Über den Button **Entfernen** löschst du Attribute.

[![benutzerdefinierte-kategorien-7](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/7-bk.gif)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/7-bk.gif)

!!! attention "Achtung!"
    Sobald die Kategorie in Verwendung ist, kannst du bestehende Feldtypen nicht mehr ändern -- um Datenverlust zu vermeiden. Entfernst du Felder aus der Konfiguration, verlierst du den Zugriff auf deren Inhalte. Danach musst du die Attribute über die [Systemreparatur und Bereinigung](../administration/verwaltung/mandanten-name-verwaltung/systemreparatur-und-bereinigung.md) neu indizieren.

Unterhalb der Konfiguration erfolgt eine Auswertung:

| Statistik                    | Beschreibung                                                                                                                                            |
| ---------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Kategorieeinträge gesamt** | Wie oft wurde die Kategorie gespeichert? Pro Objekt werden die Einträge (bei Single-Value also einmal, bei Multi-Value pro Eintrag) zusammen gerechnet. |
| **Gepflegte Werte**          | Jedes Attribut, das ausgefüllt und gespeichert wurde, wird Objekt-übergreifend zusammen gezählt.                                                        |

[![benutzerdefinierte-kategorien-8](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/8-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/8-bk.png)

Sobald deine Kategorie konfiguriert und ausgeprägt wurde, kannst du die Schaltfläche **Speichern** verwenden, damit die Kategorie in den ausgewählten Objekttypen zur Verfügung steht.

## Technische Konfiguration

Wenn du die benutzerdefinierte Kategorie über die [API](../i-doit-add-ons/api/index.md) nutzen möchtest, benötigst du die technische Konfiguration. Du erreichst sie über den Button **Technische Konfiguration anzeigen**.

Dort kannst du die technischen Schlüssel für jedes Feld ändern, indem du auf **Technischen Schlüssel ändern** klickst.

[![Technischen Schlüssel ändern](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/9-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/9-bk.png)

Jetzt kannst du den Schlüssel ändern. i-doit prüft den neuen Wert automatisch, bevor du speichern kannst.

!!! warning "Achtung!"
    Das Ändern eines Schlüssels löst eine Migration der hinterlegten Daten zum neuen Schlüssel aus. Beachte folgende Regeln:<br>
    - Der Schlüssel darf nur die Zeichen **a-z**, **0-9** und **_** enthalten.<br>
    - Er muss mindestens **einen Buchstaben** enthalten.<br>
    - Er **darf nicht leer** und **nicht länger als 64 Zeichen** sein.<br>
    - Er **muss einzigartig** sein.

[![Technischen Schlüssel ändern](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/10-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/10-bk.png)

Nachdem du die benutzerdefinierte Kategorie gespeichert hast, kannst du die neue technische Konfiguration anzeigen und verwenden.

[![Technische Konfiguration](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/11-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/11-bk.png)
