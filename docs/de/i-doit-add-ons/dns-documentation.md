---
title: DNS Documentation
description: Artikel für das DNS Documentaion Add-on
icon:
status:
lang: de
---

Mit dem "DNS Dokumentation" Add-on dokumentierst du DNS-Einträge direkt in i-doit. Das Add-on wurde mit dem [Add-on Packager](./add-on-packager.md) erstellt und liefert alle nötigen Objekttypen und Kategorien automatisch mit.

## Installation und Lizenz

Installiere das Add-on wie gewohnt über das [Admin-Center](../administration/admin-center.md). Es ist nicht lizenzpflichtig, setzt aber die pro-Variante von i-doit voraus.

## Inhalt des Add-ons

Das "DNS-Dokumentation" Add-on bringt die folgenden Objekttypen, Kategorien und Dialog+ Einträge mit:

| Objekttyp | Kategorie | Dialog+ Feld | Dialog+ Einträge |
| --- | --- | --- | --- |
| DNS Server | DNS Zones | \-  | \-  |
| DNS Zone | Autorisierende Namesserver | Rolle | Primary |
|     |     |     | Secondary |
|     | DNS Records | Class | IN (Internet) |
|     |     |     | CH (Chaosnet) |
|     |     |     | HS (Hesoid) |
|     |     | Type | A   |
|     |     |     | AAAA |
|     |     |     | NS  |
|     |     |     | CNAME |
|     |     |     | MX  |
|     |     |     | PTR |
|     |     |     | TXT |
|     |     |     | SRV |
|     |     |     | SOA |
|     | SOA Record | Class | IN (Internet) |
|     |     |     | CH (Chaosnet) |
|     |     |     | HS (Hesoid) |

## DNS Server

Der Objekttyp "DNS Server" basiert auf einem normalen Server-Objekt, ergänzt um die Kategorie "DNS Zones". Diese Kategorie zeigt eine Übersicht aller zugewiesenen DNS-Zonen.

!!! info "Bei 'DNS Zones' handelt es sich um eine rückwärtige Kategorie -- die Informationen kannst du hier nur lesen, nicht bearbeiten."

[![DNS Server](../assets/images/de/i-doit-add-ons/dns-documentation/1-dns.png)](../assets/images/de/i-doit-add-ons/dns-documentation/1-dns.png)

## DNS Zone

Im Objekttyp "DNS Zone" dokumentierst du alle Zonen-Informationen. Drei Kategorien stehen dir zur Verfügung:

*   **Autorisierende Nameserver** -- Trage die zugehörigen Nameserver ein und unterscheide zwischen "Primary" und "Secondary".
*   **DNS Records** -- Dokumentiere die einzelnen Zeilen einer Zonendatei. Die mitgelieferten "Types" helfen dir bei der korrekten Erstellung.
*   **SOA Record** -- Dokumentiere den SOA-Record separat und detailliert.

### Autorisierende Namesserver

Die Kategorie "Autorisierende Nameserver" ist eine Multi-Value-Kategorie -- du kannst beliebig viele Einträge anlegen.

[![Autorisierende Namsserver](../assets/images/de/i-doit-add-ons/dns-documentation/2-dns.png)](../assets/images/de/i-doit-add-ons/dns-documentation/2-dns.png)

Jeder Eintrag enthält zwei Informationen:

1. **DNS Server Objekt** -- Wähle den Server über den Objektbrowser aus.
2. **Rolle** -- Weise dem Server die Rolle "Primary" oder "Secondary" zu.

[![DNS Server Objekt](../assets/images/de/i-doit-add-ons/dns-documentation/3-dns.png)](../assets/images/de/i-doit-add-ons/dns-documentation/3-dns.png)

### DNS Records

Auch "DNS Records" ist eine Multi-Value-Kategorie. So dokumentierst du eine DNS-Datei Zeile für Zeile und behältst die Übersicht.

[![DNS Records](../assets/images/de/i-doit-add-ons/dns-documentation/4-dns.png)](../assets/images/de/i-doit-add-ons/dns-documentation/4-dns.png)

[![DNS Records](../assets/images/de/i-doit-add-ons/dns-documentation/5-dns.png)](../assets/images/de/i-doit-add-ons/dns-documentation/5-dns.png)

Jeder Eintrag besteht aus den Textfeldern **Name**, **Time to live** und **Data** sowie den Dialog+-Feldern **Class** und **Type**. Für "Class" und "Type" werden vordefinierte Einträge mitgeliefert.

### SOA Records

In der Kategorie "SOA Records" dokumentierst du den "Start of Authority" detailliert. Da der SOA-Record pro Zone einzigartig ist, handelt es sich hier um eine Single-Value-Kategorie.

[![SOA Records](../assets/images/de/i-doit-add-ons/dns-documentation/6-dns.png)](../assets/images/de/i-doit-add-ons/dns-documentation/6-dns.png)

Bis auf das Dialog+-Feld "Class" stehen alle Felder als Textfelder zur Verfügung.
