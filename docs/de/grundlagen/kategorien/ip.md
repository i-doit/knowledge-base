---
title: "Kategorie: Hostadresse"
description: Dokumentation der Kategorie Hostadresse in i-doit
icon:
status:
lang: de
---

# Kategorie: Hostadresse

Die Kategorie **Hostadresse** ist die zentrale Kategorie für die IP-Adressverwaltung in i-doit. Sie ist eine **Multi-Value-Kategorie** – pro Objekt lassen sich beliebig viele IP-Adressen erfassen, etwa wenn ein Server über mehrere Netzwerkschnittstellen in verschiedenen Netzen erreichbar ist oder wenn ein Interface sowohl eine IPv4- als auch eine IPv6-Adresse trägt.

Die Hostadresse verknüpft drei Ebenen miteinander: die **IP-Adresse** selbst, das **Layer-3-Netz-Objekt**, in dem sie liegt, und den **physischen oder logischen Port**, über den sie erreichbar ist. Dieses Zusammenspiel macht die Kategorie zur Drehscheibe der Netzwerkdokumentation und ist gleichzeitig die häufigste Fehlerquelle bei der Konfiguration.

!!! warning "Häufigster Fehler: Kein Netz zugeordnet"
    Eine IP-Adresse **muss** einem Layer-3-Netz-Objekt zugeordnet werden. Fehlt diese Zuordnung, landet die Adresse im vordefinierten Auffangnetz „Global v4" bzw. „Global v6" und taucht **nicht** in der IPAM-Übersicht des gewünschten Subnetzes auf. Die Folge: Die Adresse erscheint als „nicht zugewiesen", IP-Listen bleiben unvollständig, und Doppelvergaben werden nicht erkannt. Prüfe nach dem Anlegen einer Hostadresse immer, ob im Feld **Netz** das korrekte Layer-3-Netz-Objekt ausgewählt ist.

## Verwendung

Typische Anwendungsfälle:

- **IP-Adress-Management (IPAM)**: i-doit verwaltet belegte und freie Adressen innerhalb von Layer-3-Netzen. Jeder Hostadress-Eintrag belegt automatisch eine Adresse im zugeordneten Netz-Objekt. Über die Netz-Kategorie lässt sich so auf einen Blick erkennen, welche Adressen frei, vergeben oder reserviert sind.
- **DNS-Dokumentation**: Hostname, Domain und DNS-Server werden direkt am Objekt gepflegt. i-doit bildet daraus den **FQDN** (Fully Qualified Domain Name), z.B. `srv-db-01.bhb-ag.local`, und zeigt ihn als berechnetes Feld an. Der FQDN erscheint in Reports und Exporten – ein konsistent gepflegter Hostname und eine korrekte Domain sind daher die Voraussetzung für aussagekräftige Auswertungen. DNS-Aliase (CNAMEs) lassen sich über das Feld Aliase ergänzen.
- **Netzwerk-Zuordnung**: Durch die Verknüpfung mit einem Layer-3-Netz und einem Port entsteht eine durchgehende Dokumentation vom Kabel über den Switch-Port bis zur IP-Adresse. Die Verbindung zur Kategorie **Port** verknüpft die logische IP-Adresse mit der physischen Netzwerkschnittstelle – so lässt sich bei einem Netzwerkproblem sofort nachvollziehen, an welchem Switch-Port das betroffene Gerät hängt. Reports können diese Kette abfragen, etwa „Welche Server hängen im VLAN 100?".
- **Primäre IP in Listen und Monitoring**: Das Flag **Primäre IP-Adresse** bestimmt, welche Adresse in der Objektliste, in Reports und bei Monitoring-Exporten (z.B. Nagios, Checkmk) verwendet wird. Pro Objekt sollte genau eine Adresse als primär markiert sein. Fehlt das Flag oder sind versehentlich zwei Einträge primär, kommt es zu unerwartetem Verhalten bei Exporten und Erreichbarkeitsprüfungen.
- **Kombination mit Zugriff und Kontaktzuweisung**: Die Hostadresse liefert die IP, die Kategorie [Zugriff](access.md) den konkreten Dienst-URL, und die [Kontaktzuweisung](contact-assignment.md) den Verantwortlichen. Zusammen ergibt sich ein vollständiges Bild: *welche* Adresse, *wie* erreichbar, *wer* zuständig.

[![Hostadresse](../../assets/images/de/grundlagen/kategorien/ip.png)](../../assets/images/de/grundlagen/kategorien/ip.png)

## Felder

### Typ (IPv4/IPv6)

Legt fest, ob der Eintrag eine IPv4- oder eine IPv6-Adresse enthält. Je nach Auswahl blendet i-doit die passenden Adress- und Zuweisungsfelder ein. Ein Objekt kann sowohl IPv4- als auch IPv6-Einträge haben – dafür werden separate Hostadress-Einträge angelegt.

### IPv4-Adresse / IPv6-Adresse

Die eigentliche IP-Adresse des Objekts, z.B. `192.168.10.25` oder `fd00::1a2b:3c4d`. Bei IPv4 wird die Adresse als Dotted-Decimal-Notation eingegeben, bei IPv6 in der üblichen Hex-Schreibweise mit Doppelpunkten.

Beim Speichern prüft i-doit, ob die Adresse in den Adressbereich des zugeordneten Netzes passt. Liegt sie ausserhalb, erscheint eine Warnung – die Zuordnung kann aber trotzdem erzwungen werden. Die Adresse wird gleichzeitig im Netz-Objekt als belegt markiert.

### Netz (Layer-3-Netz)

Das Layer-3-Netz-Objekt, dem diese Adresse zugeordnet ist, z.B. ein Objekt „Servernetz 192.168.10.0/24". Dieses Feld ist ein Objekt-Browser und verlinkt auf ein Objekt vom Typ **Layer-3-Netz**.

**Wichtig**: Dieses Feld ist die häufigste Stolperfalle. Die Zuordnung zum Netz geschieht nicht automatisch anhand der IP – sie muss explizit gesetzt werden. Wird kein Netz gewählt, landet die Adresse im vordefinierten Netz „Global v4" bzw. „Global v6", das als Auffangbecken für nicht zugeordnete Adressen dient. Für sauberes IPAM sollte jede Adresse einem konkreten Netz-Objekt zugewiesen sein.

Umgekehrt gilt: Wenn ein Netz-Objekt ausgewählt wird, bietet i-doit im Adressfeld die nächste freie Adresse aus diesem Netz an.

### Hostname

Der Hostname des Objekts ohne Domain-Anteil, z.B. `srv-db-01`. Zusammen mit dem Feld Domain bildet i-doit den vollqualifizierten Hostnamen (FQDN). Der Hostname wird auch in Listen und Reports verwendet und sollte daher konsistent gepflegt werden.

### Domain

Die DNS-Domain, z.B. `bhb-ag.local` oder `intern.example.com`. Aus Hostname und Domain berechnet i-doit den FQDN, also z.B. `srv-db-01.bhb-ag.local`. Die Domain wird als Freitext eingegeben – es gibt keine automatische Validierung gegen einen DNS-Server.

### DNS-Server

Verknüpfung mit einem Objekt, das als DNS-Server für diese Adresse zuständig ist. Dies ist ein Objekt-Browser-Feld – es wird also ein bestehendes Objekt in i-doit ausgewählt, z.B. ein Server-Objekt „DNS-01". Mehrere DNS-Server können zugeordnet werden.

### Suchdomänen

Mehrfachauswahl der DNS-Suchdomänen, die für die Namensauflösung dieses Eintrags gelten. Die verfügbaren Werte werden global in der DNS-Konfiguration von i-doit verwaltet und können dort ergänzt werden.

### Primäre IP-Adresse

Bestimmt, ob dieser Eintrag die **primäre** Hostadresse des Objekts ist. Pro Objekt sollte genau eine Adresse als primär markiert sein. Die primäre Adresse wird in der Objektliste, in Reports und von Monitoring-Integrationen bevorzugt verwendet. Bei einem Objekt mit nur einer IP ist diese automatisch primär.

### Aktiv

Gibt an, ob die Adresse aktuell aktiv (in Benutzung) ist. Inaktive Einträge bleiben dokumentiert, werden aber in bestimmten Auswertungen und Exporten nicht berücksichtigt. Dies ist nützlich, wenn eine IP temporär nicht genutzt, aber reserviert bleiben soll.

### Adressvergabe (IPv4/IPv6)

Die Art der Adresszuweisung: **Statisch**, **DHCP** oder **Nicht vergeben**. Bei IPv6 stehen zusätzlich **SLAAC** und **DHCPv6** zur Verfügung. Dieses Feld dient der Dokumentation – i-doit konfiguriert keinen DHCP-Server. Es hilft aber in Reports, z.B. „Welche Server haben noch eine DHCP-Adresse statt einer statischen?".

### IPv6-Scope

Nur bei IPv6 sichtbar. Beschreibt den Gültigkeitsbereich der Adresse, z.B. **Link-local**, **Site-local** oder **Global**. Dialog+-Feld – eigene Werte lassen sich ergänzen.

### Standard-Gateway für dieses Netz

Markiert diese Hostadresse als Standard-Gateway innerhalb des zugeordneten Netzes. Pro Netz sollte maximal ein Objekt als Gateway gekennzeichnet sein. i-doit zeigt dieses Gateway dann automatisch in der Netz-Übersicht an.

### Zugeordneter Port

Verknüpft die IP-Adresse mit einem physischen Netzwerk-Port (aus der Kategorie „Port") oder einem logischen Port (aus der Kategorie „Logischer Port") desselben Objekts. Diese Verknüpfung schließt die Dokumentationskette: Vom Kabel über den Port zur IP-Adresse.

**Praxistipp**: Wenn der Port noch nicht angelegt ist, muss er zuerst in der Kategorie Port erstellt werden. Erst danach taucht er in der Auswahlliste dieses Feldes auf. Typischer Fehler: Die IP wird angelegt, aber kein Port zugeordnet – dann fehlt die Verbindung zur physischen Netzwerkinfrastruktur.

### Aliase

DNS-Aliase bzw. CNAME-Einträge, die auf diese Hostadresse zeigen. Über dieses Feld lassen sich mehrere alternative Hostnamen dokumentieren, z.B. `mail.example.com` als Alias für `srv-mail-01.example.com`. Die Aliase werden als n2m-Verknüpfung gespeichert.

### Netzzone

Optionale Zuordnung zu einer Netzzone (Dialog-Feld). Netzzonen können in der i-doit-Verwaltung definiert werden und erlauben eine Segmentierung der Netze nach Sicherheitszonen, z.B. DMZ, LAN-intern oder Management.

### Beschreibung

Freitext für zusätzliche Angaben: Verwendungszweck der IP, Besonderheiten der Konfiguration, Ansprechpartner oder Hinweise zur Netzwerkanbindung.

## Zusammenspiel von IP, Netz und Port

Die drei Felder **IPv4/IPv6-Adresse**, **Netz** und **Zugeordneter Port** bilden zusammen das Rückgrat der Netzwerkdokumentation. Nur wenn alle drei korrekt gesetzt sind, liefern Reports und die Netzplan-Visualisierung vollständige Ergebnisse.

Empfohlene Reihenfolge beim Anlegen:

1. **Layer-3-Netz-Objekt** erstellen (z.B. „Servernetz 192.168.10.0/24" vom Objekttyp Layer-3-Netz), inklusive Subnetzmaske und Gateway.
2. **Port** in der Kategorie Port des Zielobjekts anlegen (z.B. „eth0").
3. **Hostadresse** anlegen: Netz auswählen, IP-Adresse eintragen (oder die vorgeschlagene freie Adresse übernehmen), Port zuordnen.

Häufige Fehler:

- **Kein Netz zugeordnet**: Die IP landet im „Global v4"-Netz und taucht nicht in der IPAM-Übersicht des gewünschten Subnetzes auf.
- **Kein Port zugeordnet**: Die IP ist dokumentiert, aber nicht mit der physischen Schnittstelle verknüpft – in Netzplänen fehlt die Verbindung.
- **Mehrere primäre IPs**: Wenn versehentlich zwei Einträge als primär markiert werden, kann es zu unerwartetem Verhalten bei Monitoring-Exporten kommen.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__IP` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Client, Router, Switch, PDU, Blade Server, Virtueller Server u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Typ (IPv4/IPv6)** | `net_type` | Dialog (Auswahl) |
| **IPv4-Adresse** | `ipv4_address` | Text |
| **IPv6-Adresse** | `ipv6_address` | Text |
| **Netz** | `net` | Objekt-Browser (Verknüpfung) |
| **Hostname** | `hostname` | Text |
| **Domain** | `domain` | Text |
| **DNS-Server** | `dns_server` | Objekt-Browser (Verknüpfung) |
| **Suchdomänen** | `dns_domain` | Mehrfachauswahl |
| **Primäre IP-Adresse** | `primary` | Dialog (Auswahl) |
| **Aktiv** | `active` | Dialog (Auswahl) |
| **Adressvergabe IPv4** | `ipv4_assignment` | Dialog (Auswahl) |
| **Adressvergabe IPv6** | `ipv6_assignment` | Dialog (Auswahl) |
| **IPv6-Scope** | `ipv6_scope` | Dialog+ (erweiterbare Auswahl) |
| **Standard-Gateway** | `use_standard_gateway` | Dialog (Auswahl) |
| **Zugeordneter Port** | `assigned_port` | Dialog (Auswahl) |
| **Zugeordneter logischer Port** | `assigned_logical_port` | Dialog (Auswahl) |
| **Netzzone** | `zone` | Dialog (Auswahl) |
| **Aliase** | `aliases` | n2m |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

Zusätzlich gibt es berechnete Lesefelder, die in der API zurückgegeben werden, aber nicht direkt beschrieben werden können:

| Feld | API-Key | Beschreibung |
|---|---|---|
| **Primary Layer-3 Net** | `primary_layer3_net` | Name des primären Netzes |
| **Primary Hostaddress** | `primary_hostaddress` | Primäre IP als Text |
| **Primary Hostname** | `primary_hostname` | Primärer Hostname als Text |
| **Hostaddress** | `hostaddress` | IP-Adresse als Text (unabhängig von IPv4/IPv6) |
| **DNS Server Address** | `dns_server_address` | IP des DNS-Servers als Text |
| **All IPs** | `all_ips` | Alle IPs des Objekts als Text |
| **FQDN** | `primary_fqdn` | Berechneter vollqualifizierter Hostname |

### API-Beispiele

**Hinweis**: Die Kategorie Hostadresse verwendet in der API den Parameter `object` statt `objID` beim Speichern. Beide Varianten werden akzeptiert, aber `object` ist die korrekte Bezeichnung laut API-Dokumentation.

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 123,
        "category": "C__CATG__IP",
        "data": {
            "net_type": 1,
            "ipv4_address": "192.168.10.25",
            "net": 456,
            "hostname": "srv-db-01",
            "domain": "bhb-ag.local",
            "primary": 1,
            "active": 1,
            "ipv4_assignment": 2,
            "assigned_port": 78,
            "description": "Management-Interface, statische IP im Servernetz"
        }
    },
    "id": 1
}
```

#### Einträge lesen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "dein-api-key",
        "objID": 123,
        "category": "C__CATG__IP"
    },
    "id": 2
}
```

#### Eintrag aktualisieren

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 123,
        "category": "C__CATG__IP",
        "entry": 42,
        "data": {
            "ipv4_address": "192.168.10.30",
            "description": "IP-Wechsel 2026-04: Umzug in neues Rack"
        }
    },
    "id": 3
}
```
