---
title: IT-Grundschutz-Profile
description: Verwaltung von IT-Grundschutz-Profilen zum Export, Import und zur Anwendung
icon:
status:
lang: de
---

# IT-Grundschutz-Profile

Mit Profilen bündelst du eine definierte Auswahl von Bausteinen inklusive zugehöriger Anforderungen und Gefährdungen. Profile können angelegt, exportiert, importiert und angewendet werden.

### Profilverwaltung öffnen

Menü: Add-ons → IT-Grundschutz → Profile. Die Übersichtsseite zeigt alle vorhandenen Profile.

[![Profilübersicht](../../assets/images/de/i-doit-add-ons/viva2/it-grundschutz-profiles/profil-uebersicht.png)](../../assets/images/de/i-doit-add-ons/viva2/it-grundschutz-profiles/profil-uebersicht.png){:target="_blank"}

### Neues Profil anlegen

1. Neu anklicken
2. Namen vergeben
3. Bausteine auswählen
4. Speichern. Danach werden alle zugehörigen Anforderungen und Gefährdungen angezeigt

[![Profil anlegen](../../assets/images/de/i-doit-add-ons/viva2/it-grundschutz-profiles/profil-anlegen.png)](../../assets/images/de/i-doit-add-ons/viva2/it-grundschutz-profiles/profil-anlegen.png){:target="_blank"}

### Profil exportieren

- Im Profil auf Profil exportieren klicken. Es wird ein ZIP-Paket heruntergeladen. Export ist auch von der Übersichtsseite möglich

### Profil importieren

- In der Profilübersicht Profil importieren wählen und ein zuvor exportiertes ZIP importieren

### Profil anwenden

1. Gewünschtes Profil in der Liste markieren
2. Profil anwenden anklicken
3. Warnhinweis sorgfältig lesen und bestätigen

[![Profil anwenden](../../assets/images/de/i-doit-add-ons/viva2/it-grundschutz-profiles/profil-anwenden.png)](../../assets/images/de/i-doit-add-ons/viva2/it-grundschutz-profiles/profil-anwenden.png){:target="_blank"}

!!! danger "Achtung"
    Beim Anwenden werden alle vorhandenen Bausteine, Gefährdungen und Anforderungen gelöscht und danach durch die Inhalte des Profils ersetzt. Vorher ein Backup anlegen und die Auswirkungen in einer Testumgebung prüfen.

### Best Practices

- Namenskonventionen für Profile festlegen, zum Beispiel "BSI-Standardprofil-2025-Q1"
- Exportdateien versionieren, zum Beispiel `profil-bsi-standardprofil-2025-01.zip`
- Anwendung von Profilen dokumentieren (Zeitpunkt, Mandant, Anwender)


[<- Zurück](setup.md){ .md-button } · [Objekttypen und Kategorien ->](objecttypes-categories.md){ .md-button .md-button--primary }
