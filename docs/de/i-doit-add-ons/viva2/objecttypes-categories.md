---
title: Objekttypen und Kategorien
description: Das VIVA2-Addon führt sechs neue Objekttypen ein, die alle in der Objekttyp Gruppe "IT-Grundschutz" eingeordnet werden
icon:
status:
lang: de
---

# Objekttypen und Kategorien

Das VIVA2-Addon führt sechs neue Objekttypen ein, die alle in der Objekttyp Gruppe "IT-Grundschutz" eingeordnet werden:

## Baustein

[![Baustein](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/module.jpg)](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/module.jpg){:target="_blank"}

Der Objekttyp "Baustein" bildet die Bausteine aus dem Grundschutzkompendium ab. In der Standardkonfiguration gehören folgende Kategorien zu Objekten vom Typ Baustein:

**Kategorien**:

- **Allgemein** (i-doit Standardkategorie): Gehört zu jedem Objekt.
- **Anforderungen**: Dies ist eine Multivalue-Kategorie, in der alle Anforderungen verknüpft sind, die zu diesem Baustein gehören.
- **Baustein**: Diese Kategorie enthält die textuellen Beschreibungen des Bausteins aus dem Grundschutzkompendium, wie z.B. Nummer, Titel, Einleitung, Zielsetzung und Abgrenzung.
- **Dateien** (i-doit Standardkategorie): Hier können zusätzlich Dateien zu diesem Baustein verlinkt werden.
- **Gefährdungslage**: Dies ist eine Multivalue-Kategorie, in der alle Gefährdungen verknüpft sind, die zu diesem Baustein gehören.
- **Kontaktzuweisung** (i-doit Standardkategorie): Hier müssen die entsprechenden Ansprechpartner für den Baustein eingetragen werden.
- **Zielobjekte/-gruppen**: Dies ist eine Multivalue-Kategorie, in der alle Objekte verknüpft sind, denen dieser Baustein zugewiesen (entweder über die Kategorie "Prozessbausteine" oder über die Kategorie "Zugeordnete Bausteine").
- **Zugriff** (i-doit Standardkategorie): Über die Zugriffs-Kategorie ist der Baustein mit der Bausteinbeschreibung auf der Internetseite des IT-Grundschutzkompendiums des BSI verlinkt.

## Anforderung

[![Anforderung](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/requirement.jpg)](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/requirement.jpg){:target="_blank"}

Der Objekttyp "Anforderung" bildet die Anforderungen aus den Bausteinen des Grundschutzkompendium ab. In der Standardkonfiguration gehören folgende Kategorien zu Objekten vom Typ Anforderung:

**Kategorien**:

- **Allgemein** (i-doit Standardkategorie): Gehört zu jedem Objekt.
- **Anforderung**: Diese Kategorie enthält die textuellen Beschreibungen der Anforderung aus dem Grundschutzkompendium, wie z.B. Nummer, Titel, Anforderungstyp und Beschreibung.
- **Bausteine**: Diese Kategorie verknüpft die Anforderung mit dem zugehörigen Baustein. Obwohl dies eine Multivalue-Kategorie ist, macht eine Zuweisung zu mehreren Bausteinen in der Regel keinen Sinn.
- **Zugriff** (i-doit Standardkategorie): Über die Zugriffs-Kategorie ist die Anforderung mit der zugehörigen Bausteinbeschreibung auf der Internetseite des IT-Grundschutzkompendiums des BSI verlinkt.

## Gefährdung

[![Gefährdung](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/threat.jpg)](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/threat.jpg){:target="_blank"}

Der Objekttyp "Gefährdung" bildet die Gefährdungen aus den Bausteinen des Grundschutzkompendium ab. In der Standardkonfiguration gehören folgende Kategorien zu Objekten vom Typ Gefährdung:

- **Allgemein** (i-doit Standardkategorie): Gehört zu jedem Objekt.
- **Bausteine**: Diese Multivalue-Kategorie verknüpft die Gefährdung mit den zugehörigen Bausteinen.
- **Gefährdung**: Diese Kategorie enthält die textuellen Beschreibungen der Gefährdung aus dem Grundschutzkompendium, wie z.B. Nummer (nur bei Elementargefährdungen), Titel und Beschreibung.
- **Zugriff** (i-doit Standardkategorie): Über die Zugriffs-Kategorie ist die Gefährdung mit der zugehörigen Bausteinbeschreibung auf der Internetseite des IT-Grundschutzkompendiums des BSI verlinkt.

## Informationsverbund

[![Informationsverbund](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/scope.jpg)](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/scope.jpg){:target="_blank"}

Für jeden Informationsverbund gibt es genau ein Objekt vom Typ "Informationsverbund". In der Regel gibt es also nur ein Objekt vom Typ Informationsverbund, das VIVA2-Addon bietet aber auch die Möglichkeit, mehrere Informationsverbünde zu dokumentieren. In der Standardkonfiguration gehören folgende Kategorien zu Objekten vom Typ Informationsverbund:

**Kategorien**:

- **Allgemein** (i-doit Standardkategorie): Gehört zu jedem Objekt.
- **IT-Grundschutz (Informationsverbund)**: Dies ist eine Kategorien-Gruppe, die die folgenden vier Kategorien beinhaltet:
Informationsverbund: Hier werden die grundlegenden Informationen zum Informationsverbund dokumentiert wie der bereinigte Netzplan und die Leitlinie zur Informationssicherheit
  - **Infrastrukturanalyse**: Diese Multivalue-Kategorie zeigt alle mit diesem Informationsverbund über die rückwärtige Kategorie "Informationsverbünde" direkt verknüpften Objekte an. Mehr dazu findet man unter [Strukturanalyse](structural-analysis.md).
  - **IT-Grundschutz Check**: Die Übersichtsseite zeigt alle durch die Bausteine zugewiesenen Anforderungen, sortiert nach Baustein und Anforderungsnummer. Mehr dazu findet man unter [IT-Grundschutz-Check](it-grundschutz-check.md).
  - **Prozessbausteine**: Hier können die Prozessbausteine zugewiesen werden, die für den gesamten Informationsverbund gelten. Aus technischer Sicht können auch Systembausteine zugewiesen werden, in der Regel werden diese jedoch den jeweiligen Zielobjekten bzw. Zielobjektgruppen zugewiesen. Mehr dazu findet man unter [Strukturanalyse](structural-analysis.md).
- **Kontaktzuweisung**: (i-doit Standardkategorie) Hier müssen die entsprechenden Rollen für den kompletten Informationsverbund eingetragen werden, allen voran natürlich der Informationssicherheitsbeauftragte (ISB).

**Reports**:

- **Anwendungen ohne Installation**: Dieser variable Report zeigt alle Anwendungen an, die auf keiner Maschine installiert sind (laut Dokumentation in i-doit). Es werden alle Anwendungen überprüft, die entweder direkt diesem Informationsverbund zugeordnet sind oder die Mitglieder einer Zielobjektgruppe sind, die diesem Informationsverbund zugeordnet ist.
- **IT-Grundschutz-Check**: Dieser variable Report zeigt alle Anforderungen und deren Umsetzungsstatus an, die über Bausteine diesem Informationsverbund zugeordnet sind. Es werden dabei nicht nur die Anforderungen aus den direkt zugewiesenen Bausteinen berücksichtigt, sondern auch die aus den Bausteinen, die den zugewiesenen Zielobjekten/Zielobjektgruppen zugewiesen sind.
- **Physische Hardware ohne Standort**: Dieser variable Report zeigt alle Objekte an, denen die Kategorie "Standort" zugewiesen ist, diese aber nicht gepflegt ist. Es werden alle Objekte überprüft, die entweder direkt diesem Informationsverbund zugeordnet sind oder die Mitglieder einer Zielobjektgruppe sind, die diesem Informationsverbund zugeordnet ist.
- **Räume ohne Gebäude**: Dieser variable Report zeigt alle Räume an, bei denen die Standortkategorie nicht gepflegt ist oder bei denen das Standortobjekt keine Adresse eingetragen hat. Es werden alle Räume überprüft, die entweder direkt diesem Informationsverbund zugeordnet sind oder die Mitglieder einer Zielobjektgruppe sind, die diesem Informationsverbund zugeordnet ist.
- **Räume ohne Raumnummer**: Dieser variable Report zeigt alle Räume an, bei denen keine Raumnummer eingetragen ist. Es werden alle Räume überprüft, die entweder direkt diesem Informationsverbund zugeordnet sind oder die Mitglieder einer Zielobjektgruppe sind, die diesem Informationsverbund zugeordnet ist.
- **Vom Informationsverbund abgedeckt**: Dieser variable Report zeigt alle Objekte an, die entweder direkt diesem Informationsverbund zugeordnet sind oder die Mitglieder einer Zielobjektgruppe sind, die diesem Informationsverbund zugeordnet ist.

## Zielobjektgruppe

[![Zielobjektgruppe](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/targetgroup.jpg)](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/targetgroup.jpg){:target="_blank"}

Im Rahmen der Strukturanalyse sollen "ähnliche" Zielobjekte zur Komplexitätsreduzierung gruppiert werden. Der Objekttyp Zielobjektgruppe dient der Abbildung dieser Gruppierung von Zielobjekten. In der Standardkonfiguration gehören folgende Kategorien zu Objekten vom Typ Zielobjektgruppe:

**Kategorien**:

- **Allgemein (i-doit Standardkategorie)**: Gehört zu jedem Objekt.
- **IT-Grundschutz (Zielobjekte)**: Dies ist eine Kategorien-Gruppe, die die folgenden sieben Kategorien beinhaltet:
- **Informationsverbünde**: Diese Multivalue-Kategorie zeigt alle Informationsverbünde an, denen diese Zielobjektgruppe zugewiesen ist (über die rückwärtige Kategorie "Infrastrukturanalyse"). Auch wenn es technisch möglich ist, die Zielobjektgruppe mehreren Informationsverbünden zuzuweisen, sollte eine Zielobjektgruppe in der Regel nur einem Informationsverbund zugeordnet werden. Mehr dazu findet man unter [Strukturanalyse](structural-analysis.md).
- **IT-Grundschutz-Check**: Die Übersichtsseite zeigt alle durch die Bausteine zugewiesenen Anforderungen, sortiert nach Baustein und Anforderungsnummer. Mehr dazu findet man unter [IT-Grundschutz-Check](it-grundschutz-check.md).
- **Klassifikation von Informationen**: Hier kann die Klassifikation der Informationen vorgenommen werden, die laut BSI Standard 200-2 Teil der Dokumentation des Sicherheitsprozesses ist.
- **Schutzbedarfsfeststellung**: Hier kann der Schutzbedarf für dieses Objekt oder diese Objektgruppe in den definierten Grundwerten festgelegt und begründed werden. Mehr dazu findet man unter [Schutzbedarfsfeststellung](assessment-of-protection.md).
- **Zugeordnete Bausteine**: Hier können die Bausteine zugeordneten werden, die für dieses Objekt oder diese Objektgruppe gelten sollen. In der Regel werden hier Systembausteine zugeordnet, es ist aber auch möglich hier Prozessbausteine zuzuweisen, wenn es für dieses Objekt oder diese Objektgruppe Abweichungen von den im Informationsverbund zugewiesenen Prozessbausteinen gibt. Mehr dazu findet man unter [Strukturanalyse](structural-analysis.md).
- **Zugewiesene Anforderungen**: Dies ist eine virtuelle Kategorie, die alle Anforderungen anzeigt, die durch die zugeordneten Bausteine zugewiesen werden.
- **Zugewiesene Gefährdungen**: Dies ist eine virtuelle Kategorie, die alle Gefährdungen anzeigt, die durch die zugeordneten Bausteine zugewiesen werden.
- **Kontaktzuweisung (i-doit Standardkategorie)**:Hier können die entsprechenden Ansprechpartner oder andere Rollen für diese Zielobjektgruppe eingetragen werden.
- **Objektgruppe (i-doit Standardkategorie)**: Hier wird definiert, welche Objekte dieser Zielobjektgruppe zugeordnet sind. Bitte beachten, dass der Typ auf "statisch" gestellt sein muss, damit die ganzen Reports funktionieren.

## Kommunikationsverbindung

[![Kommunikationsverbindung](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/communication_link.jpg)](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/communication_link.jpg){:target="_blank"}

Der Objekttyp "Kommunikationsverbindung" dient der Dokumentation der für den Informationsverbund relevanten Kommunikationsverbindungen. In der Standardkonfiguration gehören folgende Kategorien zu Objekten vom Typ Kommunikationsverbindung:

**Kategorien**:

- **Allgemein** (i-doit Standardkategorie): Gehört zu jedem Objekt.
- **IT-Grundschutz (Zielobjekte)**: Diese Kategoriegruppierung dient der Zuordnung zum Informationsverbund, der Schutzbedarfsfeststellung, der Zuordnung von Bausteinen und dem IT-Grundschutz-Check (s. Zielobjektgruppe für eine ausführlichere Beschreibung).
- **Kommunikationsverbindung**: Hier kann dokumentiert werden, welche Objekte oder Objektgruppen diese Kommunikationsverbindung verwenden. Von diesen Objekten wird der Schutzbedarf dann (nach dem Maximumprinzip) auf die Kommunikationsverbindung vererbt. Außerdem kann zur Veranschaulichung der Netzplan mit der hervorgehobenen Kommunikationsverbindung verlinkt werden.
- **Kontaktzuweisung (i-doit Standardkategorie)**: Hier sollen die Hauptansprechpartner für die Kommunikationverbindung dokumentiert werden.

[<- Zurück](it-grundschutz-profiles.md){ .md-button } · [Strukturanalyse ->](structural-analysis.md){ .md-button .md-button--primary }
