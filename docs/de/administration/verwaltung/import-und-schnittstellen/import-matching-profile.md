---
title: Import Matching Profile
description: "Die Objekt-matching Profile wurden erstellt, um Kriterien festzulegen, die verwendet werden, wenn du eine Verbindung zwischen einem externen Objekt und..."
icon:
status:
lang: de
---
# Import Matching Profile

Unter **Verwaltung → Import und Schnittstellen → Import Matching Profile** legst du fest, nach welchen Kriterien i-doit beim Import entscheidet, ob ein externes Objekt einem bereits vorhandenen i-doit-Objekt entspricht oder ob ein neues Objekt angelegt werden soll.

Die [Objekt-Matching Profile](../../../daten-konsolidieren/objekt-identifizieren-bei-importen.md) wurden erstellt, um Kriterien festzulegen, die verwendet werden, wenn du eine Verbindung zwischen einem externen Objekt und einem i-doit-Objekt über eine Schnittstelle herstellen willst. Du kannst festlegen, wie viele und welche Attribute für einen erfolgreichen Abgleich übereinstimmen müssen -- beispielsweise Hostname, MAC-Adresse, Seriennummer oder eine Kombination davon.

Ein gut konfiguriertes Matching-Profil verhindert doppelte Objekte in der CMDB und sorgt dafür, dass importierte Daten den richtigen vorhandenen Objekten zugeordnet werden. Die Profile werden von verschiedenen Import-Schnittstellen wie JDisc, CSV-Import und LDAP verwendet.

[![Objekt-matching Profile](../../../assets/images/de/administration/verwaltung/import-und-schnittstellen/import-matching-profile/1-imp.png)](../../../assets/images/de/administration/verwaltung/import-und-schnittstellen/import-matching-profile/1-imp.png)

## Siehe auch

- [Objekt identifizieren bei Importen](../../../daten-konsolidieren/objekt-identifizieren-bei-importen.md) -- Ausführliche Dokumentation zum Objekt-Matching
- [JDisc Konfiguration](jdisc/jdisc-konfiguration.md) -- JDisc-Serververbindung einrichten
- [LDAP Server](ldap/server.md) -- LDAP-Verbindung konfigurieren
