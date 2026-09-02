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

Im neuen Modell entfallen die Objekttypen "Datenbankschema" und "Datenbankinstanz". Stattdessen dokumentierst du Datenbanken dort, wo sie ausgeführt werden -- direkt am Server oder Cluster über die neue Kategorie **Datenbank Hierarchie**. Sie enthält die Einträge **Datenbanken**, **DBMS Information** und **Datenbanktabelle**.

Das DBMS-Objekt bleibt erhalten und zeigt über den Reiter **Zugewiesene Datenbanken** in der Kategorie "DBMS - Datenbank Installation", welche Datenbanken durch die Software bereitgestellt werden.

Die Kategorie **Datenbank Hierarchie** bietet eine aufklappbare Ansicht der Datenbank-Hierarchie:

[![Datenbanken](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/2-dvd.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/2-dvd.png)


Unter **Datenbank Hierarchie → Datenbanken** dokumentierst du die einzelnen Datenbanken auf der Ressource:

[![Datenbanken](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/3-dvd.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/3-dvd.png)

Unter **Datenbank Hierarchie → DBMS Information** siehst du die Verbindung zum zugehörigen DBMS-Objekt:

[![DBMS Information](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/4-dvd.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/4-dvd.png)

Unter **Datenbank Hierarchie → Datenbanktabelle** kannst du zusätzlich einzelne Tabellen einer Datenbank dokumentieren.

## Migration zum neuen Modell

Du kannst frei wählen, welches Modell besser zu deinen Anforderungen passt. Für den Wechsel vom klassischen zum neuen Modell findest du unter **Verwaltung → Systemreparatur und Bereinigung** die Schaltfläche **Migriere Datenbankobjekte in Kategorien**:

[![Migration](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/5-dvd.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/5-dvd.png)

Die Migration übernimmt vorhandene Datenbankinstanzen, Datenbankschemata und Datenbankzugriffe in die neue Kategorie und entfernt dabei keine Daten.
