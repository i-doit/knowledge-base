---
title: VIVA2 (IT-Grundschutz) Add-on
description: Das VIVA2 Add-on unterstützt beim Aufbau und der Dokumentation eines Informationssicherheits-Managementsystems nach BSI IT-Grundschutz innerhalb der i-doit CMDB.
icon: addons/viva2
status:
lang: de
---

# VIVA2 (IT-Grundschutz) Add-on

Das VIVA2 Add-on auch bekannt als **"IT-Grundschutz"** unterstützt beim Aufbau und der Dokumentation eines Informationssicherheits-Managementsystems nach **BSI IT-Grundschutz** innerhalb der i-doit CMDB. Die Doku führt dich von der Ersteinrichtung bis zur täglichen Anwendung.

## Highlights

- **Nahtlos in i-doit**: Du arbeitest direkt an den Objekten deiner IT-Dokumentation.
- **IT-Grundschutz-Methodik**: Strukturanalyse, Schutzbedarfsfeststellung, Modellierung, IT-Grundschutz-Check und Reporting.
- **Transparenz im Verbund**: Grafische Schutzbedarfsvererbung und klare Verantwortlichkeiten.
- **Auswertungen**: Feste und variable Reports für Nachweise und Export.

## Wann VIVA2 einsetzen?

- Wenn du nach **BSI IT-Grundschutz 200-1/200-2** modellierst und die Bausteine des Kompendiums nutzen möchtest.
- Wenn du Schutzbedarfe **nachvollziehbar vererben** und zentral dokumentieren willst.
- Wenn du **Audits** mit belastbaren Reports vorbereitest.

## Zielgruppe

ISB, Security- und Compliance-Verantwortliche, Administratoren, Auditoren.

## Voraussetzungen

- Lies die **Systemvoraussetzungen** und installiere das Add-on:
  siehe [VIVA2 Systemvoraussetzungen](setup.md#systemvoraussetzungen) und [Installation](setup.md#installation).
- Führe die **Einrichtung** mit dem Import des IT-Grundschutz Kompendiums durch:
  siehe [Installation und Einrichtung](setup.md#installation-und-einrichtung).

!!! warning "Das VIVA2 Add-on verbraucht lizenzpflichtige Objekte"
    Der Import des IT-Grundschutz-Kompendiums erzeugt ~**2927** lizenzpflichtige Objekte, zieht man entfallene Anforderungen ab bleiben ~**2637** übrig. Stelle sicher, dass deine i-doit-Lizenz ausreichend lizenzpflichtige Objekte umfasst, um das Add-on nutzen zu können.
    Mit dem Import des IT-Grundschutz-Kompendiums werden auch inzwischen obsolete Anforderungen mit importiert. Das BSI hat diese Anforderungen mit dem Titel "ENTFALLEN" versehen. Aus Gründen der Abwärtskompatibilität werden diese Anforderungen alle mit importiert, können aber problemlos hinterher alle gelöscht werden.

## Arbeitsablauf in 5 Schritten

1. **Strukturanalyse**: Stelle sicher, dass alle relevanten Objekte vorhanden und verknüpft sind.
   → [Strukturanalyse](structural-analysis.md)
2. **Schutzbedarfsfeststellung**: Bestimme und begründe den Schutzbedarf und prüfe die Vererbung.
   → [Schutzbedarfsfeststellung](assessment-of-protection.md)
3. **Modellierung des Informationsverbundes**: Ordne Prozess- und Systembausteine zu und definiere Ansprechpartner.
   → [Modellierung](modeling.md)
4. **IT-Grundschutz-Check**: Dokumentiere den Umsetzungsstand der Anforderungen.
   → [IT-Grundschutz-Check](structural-analysis.md)
5. **Reports**: Werte Zuständigkeiten, Abdeckung und Umsetzungsstände aus.
   → [Reports](reports.md)

[Zur Installation ->](setup.md#installation){ .md-button }

## Betrieb und Pflege

- **IT-Grundschutz-Profile**: Profile erstellen, exportieren, importieren und anwenden.
  → [Profile](it-grundschutz-profiles.md)
- **Kompendium aktualisieren**: Neue Editionen selektiv übernehmen.
  → [Aktualisierung des Kompendiums](setup.md#kompendium-aktualisieren)

## Zusammenspiel mit anderen Add-ons

- **ISMS Add-on**: Komplementär für Risikoanalyse und Management nach **ISO 27xx** und **BSI Standard 200-3**.
    In vielen Setups laufen **VIVA2 (IT-Grundschutz)** und **ISMS (ISO 27001)** parallel, um beide Nachweisketten abzusichern.

## Changelog

Was sich geändert hat, steht im [Changelog](changelog.md).

[Installation und Einrichtung ->](setup.md){ .md-button .md-button--primary }
