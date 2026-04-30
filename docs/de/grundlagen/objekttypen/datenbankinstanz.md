---
title: "Objekttyp: Datenbankinstanz"
description: Dokumentation des Objekttyps Datenbankinstanz in i-doit
icon:
status:
lang: de
---

# Objekttyp: Datenbankinstanz

Der Objekttyp **Datenbankinstanz** dokumentiert gestartete Datenbankinstanzen eines DBMS. Eine Instanz ist eine konkrete laufende Datenbankumgebung mit eigenem Port, Speicherpuffer und Benutzerverwaltung.

## Verwendung

- **Instanz-Inventar**: Dokumentiere alle Datenbankinstanzen mit Port, Version und zugehörigem DBMS-Host.
- **Datenbankschema-Zuordnung**: Verknüpfe die Instanz mit den in ihr enthaltenen Datenbankschemata.
- **Anwendungszuordnung**: Erfasse welche Anwendungen diese Datenbankinstanz nutzen.

[![Datenbankinstanz](../../assets/images/de/grundlagen/objekttypen/datenbankinstanz.png)](../../assets/images/de/grundlagen/objekttypen/datenbankinstanz.png)

## Zugeordnete Kategorien

### Globale Kategorien

- [Buchhaltung](../kategorien/accounting.md)
- [Version](../kategorien/version.md)
- [Allgemein](../kategorien/global.md)
- [Zertifikat](../kategorien/certificate.md)
- [Logbuch](../kategorien/logbook.md)

### Spezifische Kategorie

Die spezifische Kategorie für diesen Objekttyp ist Instance / Oracle database.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Objekttyp-Konstante** | `C__OBJTYPE__DATABASE_INSTANCE` |
| **Gruppe** | Software |
