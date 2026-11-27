---
title: KI Funktionen
description: Dokumentenvorlagen mit KI erstellen und KI-Inhalte kennzeichnen
icon:
status:
lang: de
---

# KI Funktionen

Ab Version 1.12 erstellt das Add-on Dokumente Dokumentenvorlagen mit Hilfe einer KI. Kapitel, die mit KI erstellt oder verändert wurden, werden gekennzeichnet, und exportierte Dokumente zeigen auf der ersten Seite einen Hinweis.

## KI Funktionen konfigurieren

Die KI Funktionen konfigurierst du pro Mandant in der i-doit Verwaltung unter **Add-ons > Dokumente**. Der Eintrag ist für Benutzer sichtbar, die im Add-on Dokumente das Recht **Konfiguration** haben (siehe [Vorbereitung](./vorbereitung-add-on-dokumente.md)).

| Feld | Beschreibung |
| ---- | ------------ |
| **KI Funktionen** | **Aktiv** schaltet die KI Funktionen ein, **Inaktiv** schaltet sie aus. |
| **KI API Schlüssel** | Der API Schlüssel, mit dem sich i-doit beim KI Dienst anmeldet. |
| **Timeout** | Maximale Wartezeit für eine KI Anfrage in Sekunden. Der Standardwert ist 300 Sekunden, das Minimum 30 Sekunden. |

[![KI Funktionen Einstellungen](../../assets/images/de/i-doit-add-ons/documents/ki-funktionen/ki-einstellungen.png)](../../assets/images/de/i-doit-add-ons/documents/ki-funktionen/ki-einstellungen.png)

Dauert das Erstellen einer Vorlage länger als das eingestellte Timeout, wird die Anfrage abgebrochen. Erhöhe in diesem Fall den Wert für **Timeout**.

### KI Dienst und Schlüssel

Standardmäßig nutzt das Add-on den KI Dienst von i-doit. Der Dienst und das verwendete Modell sind dabei fest vorgegeben und nicht einstellbar. Für die Nutzung benötigst du einen KI Schlüssel, den du im Feld **KI API Schlüssel** einträgst. Den Schlüssel erhältst du, indem du das Produkt "Documents (with AI)" im Add-on & Subscription Center kaufst.

Möchtest du stattdessen einen eigenen, selbst betriebenen KI Dienst anbinden, benötigst du die Lizenz `document-custom-ai`. Diese erhältst du, indem du das Produkt "AI Documents Creator (bring own AI)" im Add-on & Subscription Center kaufst. Der Dienst muss eine OpenAI-kompatible Schnittstelle bereitstellen. Mit dieser Lizenz zeigt die Konfiguration zusätzlich zwei Felder, über die du den eigenen Dienst einträgst:

- **KI URL Endpunkt**: Adresse der OpenAI-kompatiblen Schnittstelle deines Dienstes.
- **KI Modell**: Name des Modells, das der Dienst bereitstellt.

Der **KI API Schlüssel** ist bei einem eigenen Dienst optional und bleibt leer, wenn der Dienst keinen Schlüssel verlangt.

Ab Version 1.13 lizenziert die Lizenz `document-custom-ai` auch allein das Add-on Dokumente. In Version 1.12 ist zusätzlich die Lizenz für das Add-on Dokumente nötig.

### Verwendete KI Tokens

Ab Version 1.12 zeigt die Konfiguration den Eintrag **Verwendete KI Tokens**, wenn das Add-on den KI Dienst von i-doit nutzt und **KI Funktionen** auf **Aktiv** steht. Der Eintrag zeigt den Tokenverbrauch für die Zeiträume, die der KI Dienst von i-doit meldet, zum Beispiel **Heute**, **Diese Woche**, **Diesen Monat**, **Dieses Jahr** und **Gesamt**:

- Für einen Zeitraum mit Limit zeigt ein Fortschrittsbalken den Anteil der verwendeten Tokens. Darunter steht, wie viele der verfügbaren Tokens verwendet sind und wie viel Prozent das sind.
- Für einen Zeitraum ohne Limit erscheint nur die Anzahl der verwendeten Tokens zusammen mit dem Hinweis, dass der Tarif kein Nutzungslimit hat.
- Können die Verbrauchsdaten nicht geladen werden, erscheint eine Fehlermeldung in roter Schrift.

[![Verwendete KI Tokens](../../assets/images/de/i-doit-add-ons/documents/ki-funktionen/verwendete-ki-tokens.png)](../../assets/images/de/i-doit-add-ons/documents/ki-funktionen/verwendete-ki-tokens.png)

Bei einer eigenen KI Verbindung (Lizenz `document-custom-ai`) fehlt der Eintrag, weil Verbrauchsdaten nur für den KI Dienst von i-doit vorliegen.

## Dokumentenvorlage mit KI erstellen

Sind die KI Funktionen aktiv, öffnet die Schaltfläche "Neu" in der Vorlagenübersicht den Dialog **Neue Dokumentenvorlage erstellen** mit zwei Möglichkeiten:

- **Von Grund auf erstellen**: Vorlage manuell erstellen und bearbeiten, wie unter [Dokumentenvorlagen](./dokumentenvorlagen.md) beschrieben.
- **Mit KI erstellen**: Beschreibe was du benötigst und lasse eine Vorlage generieren.

[![Neue Dokumentenvorlage erstellen](../../assets/images/de/i-doit-add-ons/documents/ki-funktionen/neue-vorlage-dialog.png)](../../assets/images/de/i-doit-add-ons/documents/ki-funktionen/neue-vorlage-dialog.png)

Sind die KI Funktionen inaktiv, öffnet die Schaltfläche "Neu" wie bisher direkt den Vorlageneditor.

### Thema beschreiben

Nach der Auswahl von **Mit KI erstellen** füllst du folgende Felder aus:

| Feld | Beschreibung |
| ---- | ------------ |
| **Vorlagen Kategorie** | Kategorie, in der die neue Vorlage gespeichert wird. |
| **Thema** | Kurzes Stichwort für die Vorlage, zum Beispiel "Übergabeprotokoll". Bis zu 200 Zeichen. |
| **Rahmenbedingungen** | Konkrete Angaben für die KI, zum Beispiel Zweck, Zielgruppe und Umfang des Dokuments. Bis zu 2000 Zeichen. |
| **Dokumenten Sprache** | Sprache, in der die KI die Vorlage schreibt, Deutsch oder Englisch. |

[![Mit KI erstellen](../../assets/images/de/i-doit-add-ons/documents/ki-funktionen/mit-ki-erstellen-formular.png)](../../assets/images/de/i-doit-add-ons/documents/ki-funktionen/mit-ki-erstellen-formular.png)

**Thema** und **Rahmenbedingungen** sind Pflichtfelder. Unter dem Thema stehen Vorschläge wie "Notfallwiederherstellungsplan (Disaster Recovery)" oder "IT-Onboarding-Leitfaden". Ein Klick auf einen Vorschlag füllt **Thema** und **Rahmenbedingungen** aus, die du danach anpassen kannst.

Mit **Generieren** schickst du die Anfrage ab. Das Erstellen kann eine Weile dauern.

### Entwurf prüfen

Sobald die KI geantwortet hat, zeigt der Dialog **Struktur vor dem Erstellen überprüfen**. Links siehst du die **Dokumentstruktur** mit allen erzeugten Kapiteln und Unterkapiteln. Ein Klick auf ein Kapitel zeigt dessen Titel und Inhalt. Zu diesem Zeitpunkt ist noch nichts gespeichert.

### Entwurf übernehmen

Mit **Übernehmen und bearbeiten** legst du die Vorlage an. i-doit speichert die Vorlage mit allen Kapiteln und öffnet sie im Vorlageneditor. Dort bearbeitest, ergänzt oder löschst du Kapitel wie gewohnt (siehe [Dokumentenvorlagen](./dokumentenvorlagen.md)).

Die Vorlage erhält zusätzlich ein Standard-Deckblatt sowie eine Standard-Kopf- und Fußzeile. Kapitel der obersten Ebene beginnen auf einer neuen Seite.

!!! note "Erzeugte Inhalte prüfen"
    Die KI schreibt die Kapiteltexte und setzt [Platzhalter](./platzhalter-im-add-on-dokumente.md) für variable Daten wie Objektnamen oder IP-Adressen ein. Die tatsächlichen Werte werden eingesetzt, wenn du ein Dokument für ein Objekt erzeugst. Prüfe Texte und Platzhalter jedes Kapitels, bevor du die Vorlage verwendest.

## Kennzeichnung von KI-Inhalten

i-doit merkt sich für jedes Kapitel, ob es manuell oder mit KI erstellt wurde:

| Kennzeichnung | Bedeutung |
| ------------- | --------- |
| **KI-generiert** | Das Kapitel wurde vollständig von der KI erstellt und seitdem nicht verändert. |
| **KI-unterstützt** | Das Kapitel wurde von der KI erstellt und danach bearbeitet. |

Kapitel, die über **Mit KI erstellen** entstehen, sind als **KI-generiert** gekennzeichnet. Sobald du ein solches Kapitel im Editor bearbeitest, wechselt die Kennzeichnung zu **KI-unterstützt**. Manuell erstellte Kapitel haben keine Kennzeichnung.

Die Kennzeichnung siehst du an diesen Stellen:

- Im Kapitelbaum einer Vorlage als KI-Symbol neben dem Kapitel. Der Tooltip zeigt **KI-generiert** oder **KI-unterstützt**.
- In der Vorlagenübersicht und in der Dokumentenübersicht in der Spalte **KI**.
- In einem Dokument in der Zeile **KI** und in den Revisionen des Dokuments in der Spalte **KI**.

Die Kennzeichnung eines Dokuments ergibt sich aus seinen Kapiteln:

- **KI-generiert**: Alle Kapitel sind als **KI-generiert** gekennzeichnet.
- **KI-unterstützt**: Mindestens ein Kapitel ist als **KI-generiert** oder **KI-unterstützt** gekennzeichnet.
- Keine Kennzeichnung: Kein Kapitel wurde mit KI erstellt.

## KI-Hinweis im Export

Enthält ein Dokument KI-Inhalte, enthält der Export einen Hinweis:

- **PDF**: Ein KI-Symbol oben auf der ersten Seite, also auf dem Deckblatt, wenn die Vorlage eines hat. Auch die PDF-Metadaten (Schlüsselwörter) enthalten einen KI-Hinweis.
- **HTML**: Ein KI-Symbol oben auf der Seite und das Meta-Tag `ai-disclosure` mit dem Wert `ai-generated` oder `ai-assisted`. Dokumente ohne KI-Inhalte erhalten den Wert `none`.

Der Alternativtext des Symbols lautet "Dieses Dokument wurde vollständig von einer KI erstellt." bei Dokumenten mit der Kennzeichnung **KI-generiert** und "Dieses Dokument enthält KI-generierte Texte." bei Dokumenten mit der Kennzeichnung **KI-unterstützt**.
