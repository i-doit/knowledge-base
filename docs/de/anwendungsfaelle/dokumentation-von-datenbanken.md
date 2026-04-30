---
title: Dokumentieren von Datenbanken
description: "i-doit bietet zwei Modelle zur Dokumentation von Datenbanken: das klassische Modell mit drei Objekttypen und ein neueres, vereinfachtes Modell."
icon:
status:
lang: de
---
# Dokumentieren von Datenbanken

i-doit bietet zwei Modelle zur Dokumentation von Datenbanken: das klassische Modell mit drei Objekttypen und ein neueres, vereinfachtes Modell. Beide werden hier beschrieben.

## Klassisches Modell

Das klassische Modell arbeitet mit drei Objekttypen:

[![DBMS](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/1-dvd.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/1-dvd.png)

- **DBMS** -- Legt fest, welche Datenbank-Software im Unternehmen vorhanden ist (z. B. MariaDB, PostgreSQL).
- **Datenbankinstanz** -- Zeigt, wo ein DBMS installiert ist und welche Instanzen dort laufen.
- **Datenbankschema** -- Zeigt die einzelnen Datenbanken innerhalb einer Instanz.

**Beispiel i-doit:** MariaDB ist das DBMS, die Installation auf dem i-doit-Server die Instanz, `idoit_system` und `idoit_data` sind die Datenbankschemata.

## Neues Modell

Im neuen Modell entfallen die Objekttypen "Datenbankschema" und "Datenbankinstanz". Stattdessen dokumentierst du Datenbanken dort, wo sie ausgeführt werden -- direkt am Server oder Cluster über die neue Kategorie **Datenbanken**.

Das DBMS-Objekt bleibt erhalten und zeigt über den Reiter **Zugewiesene Datenbanken** in der Kategorie "DBMS - Datenbank Installation", welche Datenbanken durch die Software bereitgestellt werden.

Die neue Kategorie bietet eine aufklappbare Ansicht der Datenbank-Hierarchie:

[![Datenbanken](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/2-dvd.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/2-dvd.png)


Unter **Datenbanken → Datenbanken** dokumentierst du die einzelnen Datenbanken auf der Ressource:

[![Datenbanken](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/3-dvd.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/3-dvd.png)

Unter **Datenbanken → DBMS** siehst du die Verbindung zum zugehörigen DBMS-Objekt:

[![DBMS](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/4-dvd.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/4-dvd.png)

## Migration zum neuen Modell

Du kannst frei wählen, welches Modell besser zu deinen Anforderungen passt. Für den Wechsel vom klassischen zum neuen Modell findest du eine Migrationsfunktion unter **Verwaltung → Systemtools → Cache Datenbank**:

[![Cache / Datenbanken](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/5-dvd.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/5-dvd.png)

Nach dem Klick erscheint eine Meldung über die Auswirkungen der Migration:

[![Migration](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/6-dvd.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/6-dvd.png)


Nach Abschluss zeigt dir eine Meldung, ob die Migration erfolgreich war:

[![Systemansicht](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/7-dvd.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/7-dvd.png)
