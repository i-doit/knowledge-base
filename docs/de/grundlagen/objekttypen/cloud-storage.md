---
title: "Objekttyp: Cloud Storage"
description: Dokumentation des Objekttyps Cloud Storage in i-doit
icon:
status:
lang: de
---

# Objekttyp: Cloud Storage

Der Objekttyp **Cloud Storage** dokumentiert Speicherressourcen in einer Public Cloud, zum Beispiel AWS-S3-Buckets, Azure-Blob-Storage-Container oder Google-Cloud-Storage-Buckets. Provider, Account, Region und Status werden in der Kategorie [Cloud](../kategorien/cloud.md) erfasst.

!!! info "Neu in i-doit 39"
    Der Objekttyp Cloud Storage ist ab i-doit 39 verfügbar. Er liegt in der Objekttypgruppe **Infrastruktur**.

## Verwendung

- **Bucket-Inventar**: Dokumentiere alle Storage-Buckets mit Provider, Account und Region an einer Stelle.
- **Speicherort der Daten**: Über die Felder Region-ID und Region-Name ist erkennbar, in welcher Region Daten liegen, zum Beispiel für Datenschutzprüfungen.
- **Zuständigkeiten und Kosten**: Weise Ansprechpartner über die [Kontaktzuweisung](../kategorien/contact.md) zu und erfasse Kostendaten in der [Buchhaltung](../kategorien/accounting.md).
- **Lebenszyklus**: Nutze das Feld Status zusammen mit dem CMDB-Status und der [Status-Planung](../kategorien/planning.md), um festzuhalten, wann ein Bucket angelegt oder stillgelegt werden soll.

[![Cloud Storage](../../assets/images/de/grundlagen/objekttypen/cloud-storage.png)](../../assets/images/de/grundlagen/objekttypen/cloud-storage.png)

## Zugeordnete Kategorien

### Globale Kategorien

- [Allgemein](../kategorien/global.md)
- [Buchhaltung](../kategorien/accounting.md)
- [Cloud](../kategorien/cloud.md)
- [Kontaktzuweisung](../kategorien/contact.md)
- [Hostadresse](../kategorien/ip.md)
- [Standort](../kategorien/location.md)
- [Logbuch](../kategorien/logbook.md)
- [Beziehungen](../kategorien/relation.md)
- [Version](../kategorien/version.md)
- [Status-Planung](../kategorien/planning.md)
- Übersichtsseite
- Rechteverwaltung

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Objekttyp-Konstante** | `C__OBJTYPE__CLOUD_STORAGE` |
| **Gruppe** | Infrastruktur |
