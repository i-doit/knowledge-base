---
title: Erweiterte Optionen für JDisc-Importprofile
description: Konfiguration und Nutzung von JDisc Discovery mit i-doit
icon:
status:
lang: de
---

# Erweiterte Optionen für JDisc-Importprofile

Dieser Artikel ergänzt die Hauptseite zur [JDisc Discovery Integration](index.md) und beschreibt die erweiterten Konfigurationsmöglichkeiten von Importprofilen innerhalb von i-doit.

## Matching-Profile

Matching-Profile bestimmen, **wie i-doit ein Gerät identifiziert**, das aus JDisc importiert wurde. Ziel ist es, zu vermeiden, dass ein und dasselbe Gerät mehrfach importiert wird.

### Relevante Kriterien:

* **Seriennummer** (empfohlen, wenn verfügbar)
* **MAC-Adresse**
* **Hostname** / **FQDN**
* **Gerätetyp (aus JDisc)**

:material-information-outline: i-doit verknüpft JDisc-Geräte mit vorhandenen Objekten, oder erstellt ein neues.

Weitere Details zur Matching-Strategie siehe: [Objektidentifikation bei Importen](../objekt-identifizieren-bei-importen.md)

---

## Kategorien und Filter :page_facing_up:

!!! warning "Hinweis zu Sichtbarkeit"
    Einige Optionen erscheinen nur, wenn bestimmte Kategorien oder übergeordnete Optionen aktiviert sind.

Über das Mapping definierst du, **welche Daten aus JDisc in welche Kategorien in i-doit geschrieben werden**.

| Option                                  | Beschreibung                                                                                                                                                                                                                                                          |
| --------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Kategorien auswählen**                | Legt fest, **welche Kategorien** beim Import befüllt werden. Es werden nur jene Kategorien aufgelistet, die der Import verarbeiten kann (z.B. Ports, Software, VLANs etc.). Wird keine Kategorie gewählt, wird nur die Allgemein Kategorie befüllt.                   |
| **MAC-Filter** (versteckt)              | Ist nur sichtbar, wenn Sie die Kategorie **Port** oder **FC-Port** ausgewählt haben. Hier können Sie eine **Whitelist** bzw. **Blacklist** für MAC-Adressen anlegen (jeweils eine Adresse pro Zeile). Auf diese Weise lassen sich z.B. bestimmte Geräte ausschließen. |
| **Netzwerk Interfaces importieren als** | Bestimmt, in welcher Kategorie die JDisc-erfassten Netzwerk-Schnittstellen angelegt werden (z.B. als normale Ports oder als spezielle Anschlüsse). So lassen sich Unterschiede zwischen physikalischen und virtuellen Netzwerkschnittstellen abbilden.                |

## :material-apps: Software-Import

| Option                                           | Beschreibung                                                                                                                                                                                                           |
| ------------------------------------------------ | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Software beim Import berücksichtigen**         | Soll inventarisiere **Software** aus JDisc als Objekte vom Typ **Anwendungen** in i-doit importiert werden? Aktivieren Sie diese Option, um Software-Daten zu übernehmen.                                              |
| **Softwarestandort** (versteckt)                 | Sichtbar nur, wenn *Software importieren* aktiv ist. Hier legen Sie fest, welchem **Standort** alle importierten Anwendungen zugewiesen werden. Das ist nützlich, wenn Benutzerrechte über Standorte gesteuert werden. |
| **Softwarelizenzen beim Import berücksichtigen** | Soll inventarisiere **Softwarelizenzen** als Objekte vom Typ **Lizenzen** importiert werden? Diese werden dann in der Kategorie **Lizenzen** hinterlegt.                                                               |
| **Systemdienste importieren**                    | Legt fest, ob inventarisiere **Systemdienste** aus JDisc als Objekte vom Typ **Systemdienst** importiert werden sollen.                                                                                                |

## :material-cloud: Cloud-Dienste und Verbindungen

| Option                                    | Beschreibung                                                                                                                                                                                                                                                                          |
| ----------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Cloud Subscriptionen importieren**      | Sollen Daten der JDisc-Kategorie **Cloud** importiert werden? Bei Aktivierung werden JDisc-Cloud-Abonnements in der i-doit-Kategorie *Zugewiesene Abonnenten* erfasst. Die rückwärtige Kategorie **Zugewiesene Benutzer** verknüpft die Einträge mit Lizenz-Objekten.                 |
| **Unbekannte Cloud Benutzer importieren** | Sichtbar nur, wenn *Cloud Subscriptionen importieren* aktiv ist. Hier können Sie bestimmen, ob auch **Benutzer** übernommen werden, die in JDisc zu Cloud-Abonnements zugeordnet sind, aber noch nicht im CMDB-System existieren.                                                     |
| **Verbindungs Endpunkte importieren**     | Aktivieren Sie diese Option, wenn Sie eine klare Unterscheidung zwischen manueller und automatischer Verkabelung wünschen. JDisc-Verbindungen werden dann **nicht** in die Standard-Kategorie Verkabelung importiert, sondern in die spezielle Kategorie **"Verbindungs Endpunkte"**. |

## :material-network: Netzwerk- und Adress-Optionen

| Option                                        | Beschreibung                                                                                                                                                                                                                      |
| --------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Einfache Datenbankmodellierung verwenden?** | Hier wählen Sie, ob beim Import die **neue** oder die **alte** Datenbanklogik\*\* verwendet werden soll. Die neue Logik ist in aktuellen i-doit-Versionen Standard.                                                               |
| **Layer-3-Netze beim Import berücksichtigen** | Sollen inventarisiere **IP-Netze** aus JDisc als Objekte vom Typ **Layer-3-Netze** angelegt werden? Bei Aktivierung erscheinen zwei weitere Einstellungen: *Layer-3-Filter* und *Netzwerkstandort*.                               |
| **Layer-3-Filter** (versteckt)                | Sichtbar nur, wenn *Layer-3-Netze berücksichtigen* aktiviert ist. Hier geben Sie IP-Bereiche an, z.B. `192.168.0.0/24` oder `10.0.0.1-10.0.0.255`, jeweils eine Regel pro Zeile. Nur Netze in diesen Bereichen werden importiert. |
| **Layer-3-Standort** (versteckt)              | Sichtbar nur, wenn *Layer-3-Netze berücksichtigen* aktiviert ist. Legt einen festen **Standort** fest, unter dem alle neu importierten Layer-3-Netze angelegt werden. Nützlich für rollenbasierte Berechtigungen.                 |
| **IP-Adresstypen beibehalten**                | Gibt an, welche Adresstypen übernommen werden sollen (IPv4, IPv6, Loopback, virtuelle IPs etc.). Sie können hier bestimmte Typen aktivieren oder deaktivieren.                                                                    |
| **Importtyp für DHCP IP-Adressen**            | Legt fest, ob IP-Adressen, die per DHCP vergeben wurden, überschrieben werden sollen. Zum Beispiel kann man hier wählen, dass dynamisch vergebene Adressen nicht importiert werden (wenn etwa nur statische IPs ins CMDB sollen). |
| **VLANs beim Import berücksichtigen**         | Sollen inventarisiere **VLANs** aus JDisc als Objekte vom Typ **Layer-2-Netze** importiert werden? Aktivieren Sie dies, um VLAN-Daten in der CMDB abzubilden.                                                                     |

## :material-layers: Virtualisierung und Blade/Chassis

| Option                                     | Beschreibung                                                                                                                                                                                                                         |
| ------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **Cluster beim Import berücksichtigen**    | Soll JDisc-Cluster-/Virtualisierungsumgebungen als Objekte vom Typ **Cluster** angelegt werden? Aktivieren Sie dies, wenn Virtualisierungsdaten (z.B. VMware/Hyper-V) übernommen werden sollen.                                      |
| **Blade/Chassis Verbindungen importieren** | Wenn JDisc Blade-Server und -Chassis erfasst hat, können Sie hier festlegen, dass die **Verbindungen** zwischen Blade und Chassis ebenfalls importiert werden. So werden Blade-Module mit ihrem Chassis verknüpft.                   |
| **Objekttyp der Module**                   | Sichtbar nach Inventarisierung eines Blade-/Chassis-Geräts. Hier legen Sie fest, welchem Objekttyp die eingesetzten **Module** zugeordnet werden sollen. Z.B. können Sie Module als *Blade Server* oder *Switch* importieren lassen. |
| **Objekttyp der Module aktualisieren**     | Legt fest, ob bei Aktualisierung eines Blade-/Chassis-Geräts die Objekttypen der bereits zugeordneten Module geändert werden sollen. Deaktivieren Sie dies, wenn bestehende Modultypen erhalten bleiben sollen.                      |

## :material-tune: Weitere Einstellungen

| Option                                       | Beschreibung                                                                                                                                                                                                                                                                                          |
| -------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Custom Attributes importieren**            | Wenn in JDisc benutzerdefinierte Attribute gepflegt wurden, können diese hier aktiviert werden. Nach dem Import erscheinen sie in der i-doit-Kategorie **"JDisc Custom Attributes"**.                                                                                                                 |
| **Standard Templates berücksichtigen**       | Bei Neuanlage eines Objekts kann automatisch ein i-doit-Template angewendet werden. Wählen Sie hier ein Template, das berücksichtigt wird (Einstellungen in der Objekttyp-Konfiguration).                                                                                                             |
| **CMDB-Status (bei Aktualisierung)**         | Bestehende Objekte können beim Import einen bestimmten **CMDB-Status** erhalten. Wählen Sie hier z.B. "In Betrieb" oder "Außer Betrieb", wenn Sie Statusänderungen beim Update durchführen möchten. Bei Auswahl *CMDB-Status beibehalten* erfolgt keine Änderung.                                     |
| **CMDB-Status (bei Neuanlage)**              | Analog: Hier legen Sie fest, welchen CMDB-Status neu angelegte Geräte erhalten sollen. Standardmäßig bleibt dieser unverändert ("-" auswählen).                                                                                                                                                       |
| **Software Filter** (versteckt)              | Sichtbar nur, wenn *Software importieren* aktiv ist. Hier können Sie über **Whitelist** oder **Blacklist** genau festlegen, welche Software-Anwendungen importiert (Whitelist) oder ausgelassen (Blacklist) werden sollen. Geben Sie eine durch Kommata getrennte Liste von Namen oder Wildcards ein. |
| **Filter als regexp verwenden?**             | Aktivieren Sie *Filter als regexp*, wenn Sie für obige Liste reguläre Ausdrücke verwenden möchten. Da das Pattern direkt an die JDisc-Datenbank weitergegeben wird, sollten Sie kompatible PostgreSQL-RegEx verwenden.                                                                                |
| **OS-Familie statt OS-Version verwenden**    | *Hinweis:* Beim Software-Import kann es sinnvoll sein, die Betriebssystem-Familie statt der vollständigen Versionsbezeichnung als Objekttitel zu verwenden (z.B. "Windows" statt "Windows Server 2012 Standard"), um bessere Gruppierungen zu erreichen.                                              |
| **Objekttyp aktualisieren**                  | Wenn ein Gerät bereits in i-doit existiert, können Sie hier festlegen, ob sein Objekttyp anhand der Zuordnungstabelle (oben) geändert werden soll. Deaktivieren Sie dies, um den bestehenden Typ beizubehalten.                                                                                       |
| **Objekttitel aktualisieren**                | Legt fest, ob beim Import der **Objektname** aktualisiert wird. Deaktivieren Sie dies, wenn der ursprüngliche Objekttitel in i-doit erhalten bleiben soll.                                                                                                                                            |
| **Hostnamen statt FQDN als Titel verwenden** | Ist diese Option aktiv, wird beim Import nur der Hostname (ohne Domain) als Objekttitel verwendet, sofern eine FQDN-Adresse vorliegt. Das kann zu kürzeren Titeln führen.                                                                                                                             |
| **Standort vererben**                        | Für Geräte, die physikalisch an einem anderen Gerät hängen: Ist diese Option aktiviert, erbt das importierte Gerät den **Standort** seines übergeordneten Geräts automatisch.                                                                                                                         |

!!! tip "Hinweis"
    Wenn in einer Whitelist (z.B. Software-Filter) keine Einträge definiert sind, wird sie nicht berücksichtigt und es werden alle Elemente importiert. Geben Sie z.B. Office* ein, importiert i-doit alle Software-Titel, die mit "Office" beginnen.

!!! note "Regex-Filter"
    Möchten Sie reguläre Ausdrücke für Filter nutzen, beachten Sie die PostgreSQL-Syntax. Beispiel: Um nur Software mit Namen zu importieren, die auf "_Pro" enden, könnte die Whitelist Office_* sein (ohne Aktivierung von RegExp).

---

## Erweiterte Optionen

Neben Kategorien und Matching bietet i-doit zahlreiche Importfilter und Modifikationen, u.a.:

| Option                                                | Bedeutung                                                                     |
| ----------------------------------------------------- | ----------------------------------------------------------------------------- |
| **CMDB-Status setzen**                                | Objekte beim Import automatisch auf z.B. "in Betrieb" setzen                  |
| **Titel aktualisieren**                               | Bestehende Objekttitel durch JDisc-Daten ersetzen                             |
| **MAC-Filter**                                        | Nur bestimmte MAC-Adressen zulassen (Whitelist) oder ausschließen (Blacklist) |
| **IP-Filter / Layer-3-Filter**                        | Nur definierte Netze importieren (CIDR oder IP-Bereich)                       |
| **Import von Software, Lizenzen, Diensten, Clustern** | Optional aktivierbar                                                          |
| **Vererbung von Standorten**                          | Übergeordnete Standorte (z.B. bei Blade-Chassis) automatisch übernehmen       |

Eine vollständige Liste der Filter findest du im Dialog "Zusätzliche Optionen" beim Bearbeiten eines JDisc-Profils.

---

## Siehe auch

* [JDisc Discovery - Hauptartikel](index.md)
* [i-doit console utility Import](../../automatisierung-und-integration/cli/index.md)
* [Verwendung von INI-Dateien](../../automatisierung-und-integration/cli/configuration-files.md)
