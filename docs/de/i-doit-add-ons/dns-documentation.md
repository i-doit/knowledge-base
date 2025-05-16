---
title: DNS Documentation
description: Artikel für das DNS Documentaion Add-on
icon:
status:
lang: de
---

Das "DNS Dokumentation" Add-on wurde als erstes [Add-on](./index.md) mit dem [Add-on Packager](./add-on-packager.md) entworfen und erstellt. Der Gedanke hinter der DNS Dokumentation ist, DNS-Einträge einfach in i-doit zu dokumentieren. Dabei werden über das Add-on die nötigen Objekttypen und Kategorien erstellt.

Installation und Lizenz

Das "DNS Dokumentation" Add-on wird wie jedes Add-on über das [Admin-Center](../administration/admin-center.md) installiert. Das Add-on ist nicht lizenzpflichtig. Es kann allerdings nur mit der pro-Variante genutzt werden.

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

Der ausgelieferte Objekttyp "DNS Server" orientiert sich an einem normalen Server Objekt, wobei noch die zusätzliche Kategorie "DNS Zones" zugewiesen ist.
In dem Add-on wird ein expliziter Objekttyp genutzt, damit eine problemlose Integration gewährleistet werden kann. Die automatisch zugewiesene Kategorie "DNS Zones" beinhaltet eine Übersicht aller zugewiesener DNS Zonen. (Hierbei handelt es sich um eine rückwärtige Kategorie, weswegen die Informationen hier nicht bearbeitet werden können!)

[![DNS Server](../assets/images/de/i-doit-add-ons/dns-documentation/1-dns.png)](../assets/images/de/i-doit-add-ons/dns-documentation/1-dns.png)

## DNS Zone

Im neuen Objekttypen "DNS Zone" werden alle Informationen zu den Zonen Einträgen dokumentiert.
Hier stehen drei zusätzliche Kategorien zur Verfügung:

*   Autorisierende Namesserver → hier werden die zugehörigen Namesserver eingetragen und können zwischen "Primary" und "Secondary" unterschieden werden
*   DNS Records → hier können die "einzelnen Zeilen" einer Zonendatei eingetragen werden. Diese können über die mitgelieferten "Types" passend erstellt werden
*   SOA Record → hier kann der SOA-Record explizit dokumentiert werden.

### Autorisierende Namesserver

Bei der Kategorie "Autorisierende Namesserver" handelt es sich um eine Multi-Value Kategorie.
[![Autorisierende Namsserver](../assets/images/de/i-doit-add-ons/dns-documentation/2-dns.png)](../assets/images/de/i-doit-add-ons/dns-documentation/2-dns.png)

In einem Eintrag werden zwei Informationen dokumentiert:

1. DNS Server Objekt
2. Rolle

[![DNS Server Objekt](../assets/images/de/i-doit-add-ons/dns-documentation/3-dns.png)](../assets/images/de/i-doit-add-ons/dns-documentation/3-dns.png)

Für das Attribut "DNS Server Objekt" steht ein Objektbrowser zur Verfügung. Hier kann dann der entsprechende DNS Server ausgewählt werden. Zusätzlich kann dann pro Sever auch die entsprechende "Rolle" angegeben werden. Zu Verfügung stehen hier → Primary und Secondary

### DNS Records

Auch bei der Kategorie "DNS Records" handelt es sich um eine Multi-Value Kategorie.
[![DNS Records](../assets/images/de/i-doit-add-ons/dns-documentation/4-dns.png)](../assets/images/de/i-doit-add-ons/dns-documentation/4-dns.png)

Die Kategorie wurde als Multi-Value Kategorie entworfen, damit eine DNS Datei "Zeile für Zeile" dokumentiert werden kann. Dies ermöglicht eine Übersicht aller Einträge.

[![DNS Records](../assets/images/de/i-doit-add-ons/dns-documentation/5-dns.png)](../assets/images/de/i-doit-add-ons/dns-documentation/5-dns.png)

Ein Eintrag setzt sich den Textfeldern "Name", "Time to live", "Data" und den Dialog+ Feldern "Class" und Type" zusammen. Für die Dialog+ Felder "Class" und "Type" werden vordefinierte Einträge mitgeliefert.

### SOA Records

Zusätzlich zu den einfachen DNS Records gibt es die Kategorie "SOA Records". Diese Kategorie ermöglicht es den sogenannten "Start of Authority" detaillierter zu dokumentieren. Da der SOA-Record einzigartig ist, steht die Kategorie auch nicht als Multi-Value Kategorie zur Verfügung.

[![SOA Records](../assets/images/de/i-doit-add-ons/dns-documentation/6-dns.png)](../assets/images/de/i-doit-add-ons/dns-documentation/6-dns.png)

Abgesehen vom Dialog+ Feld "Class" stehen alle Felder als Textfelder zur Verfügung. Hier können alle notwendigen Informationen des SOA-Records dokumentiert werden.
