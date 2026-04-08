---
title: i-doit cloud
description: Alle Informationen und Services rund um deine i-doit in der Cloud. Sicher, gewartet und performant.
icon: material/cloud
lang: de
---

# Willkommen in der i-doit cloud

Entdecke die Vorteile unserer gemanagten i-doit Cloud-Lösung. Wir kümmern uns um die Technik im Hintergrund, damit du dich voll und ganz auf deine IT-Dokumentation konzentrieren kannst. Sicher, performant und immer aktuell.

---

## Leistungsumfang & Technische Details

Hier findest du die wichtigsten Eckdaten zu deiner i-doit Cloud Instanz.

* **Instanz-Größe**: Ausgelegt für bis zu 50.000 Objekte.
* **Speicherplatz**: 1 GB dedizierter Datenspeicherplatz.
* **Sicherheit**: deine Daten werden verschlüsselt gespeichert.
* **Domain**: Der Name deiner Subdomain ist frei wählbar (z.B. `firmenname.i-doit.cloud`).
* **Bereitstellung**: Die Bereitstellung dauert ungefähr 15 Minuten.
* **Backup**: Automatisierte und engmaschige Backups.
* **Add-on Kompatibilität**: Ein Großteil der [i-doit Add-ons](https://www.i-doit.com/i-doit/add-ons/){:target="_blank"} ist kompatibel.
* **Serverstandort**: Alle unsere Server befinden sich in Deutschland und sind ISO27000 Zertifiziert.

!!! warning "Kein Shell-Zugriff"
    Aus Sicherheits- und Stabilitätsgründen ist ein direkter SSH- oder Dateisystem-Zugriff auf die Server nicht möglich.

---

## Support & Service-Zeiten

Unser Experten-Team steht dir für alle Anliegen rund um deine Cloud-Instanz zur Verfügung.

* **Service-Zeiten**: Montag bis Freitag von 10:00 bis 16:00 Uhr (ausgenommen bundesweite Feiertage).
* **Erreichbarkeit**:
    * **E-Mail**: <a href="mailto:help@i-doit.com">help@i-doit.com</a>
    * **Help Center**: <a href="https://help.i-doit.com" target="_blank">help.i-doit.com</a>

<a href="https://help.i-doit.com" target="_blank" class="md-button md-button--primary">Support-Ticket erstellen</a>

**Diese Leistungen sind im Support enthalten:**

* Einspielen deiner Lizenz
* Installation und Updates von kompatiblen Add-ons
* Anpassung von serverseitigen Systemeinstellungen
* Einspielen von Backups auf Anfrage
* Durchführung von i-doit Software-Updates
* Aufnahme und Weiterleitung von Bug-Meldungen
* Aufnahme von Wünschen zur Funktionsverbesserung

---

## Migration: Umzug in die Cloud

Wir unterstützen dich aktiv beim Umzug deiner bestehenden On-Premise Installation in die i-doit Cloud.

**Ablauf der Migration:**

1.  **Terminvereinbarung**: Wir vereinbaren einen ersten Termin, um die Voraussetzungen für die Migration zu prüfen.
2.  **Vorbereitung**: Wenn alle Voraussetzungen erfüllt sind, bereiten wir deine persönliche Cloud-Instanz vor.
3.  **Datenexport**: In einem zweiten gemeinsamen Termin exportieren wir die Daten aus deinem aktuellen System.
4.  **Datenimport**: Anschließend migrieren wir deine Daten sicher in die vorbereitete Cloud-Instanz.

---

## Backup & Wiederherstellung

Für jede Cloud-Instanz erstellen wir automatisch und regelmäßig Backups.

**Backup-Schema:**

-   **Stündlich**: Alle 3 Stunden (die letzten 8 Backups werden aufbewahrt)
-   **Täglich**: Einmal täglich (die letzten 7 Backups werden aufbewahrt)
-   **Wöchentlich**: Einmal pro Woche (die letzten 4 Backups werden aufbewahrt)
-   **Monatlich**: Einmal pro Monat (die letzten 12 Backups werden aufbewahrt)
-   **Jährlich**: Einmal pro Jahr (die letzten 10 Backups werden aufbewahrt)
-   **Event-basiert**: Vor jedem System-Update (die letzten 10 Backups werden aufbewahrt)

!!! info "Backup-Wiederherstellung anfordern"
    Ein Restore auf einen früheren Zeitpunkt kannst du jederzeit über unser [Help Center](https://help.i-doit.com){:target="_blank"} oder per [E-Mail](mailto:help@i-doit.com) beantragen.

---

## Netzwerkanbindung und Schnittstellen

Damit du externe Systeme wie LDAP, JDisc oder eigene APIs sicher mit deiner i-doit Cloud-Instanz verbinden kannst, musst du unter Umständen deine Firewall anpassen. Hier findest du alle notwendigen technischen Informationen.

### VPN-Anbindung (OpenVPN)

Für eine dedizierte und sichere Verbindung zwischen deinem Netzwerk und deiner Cloud-Instanz bieten wir die Anbindung über OpenVPN an.

!!! warning "Beta-Phase / Erstanwendung"

    Die Anbindung via OpenVPN nutzt eine Benutzer- und Zertifikatsauthentifizierung. Dieses Feature wurde intern erfolgreich getestet, befindet sich aber noch nicht im produktiven Einsatz bei Kunden.

    Wenn du diese Option nutzen möchtest, definiere bitte deine Anforderungen und kontaktiere unseren [Support](#support-service-zeiten), um den Einrichtungsprozess gemeinsam zu starten.

### Feste IP-Adressen für Firewall-Regeln

Deine i-doit Cloud-Instanz ist unter festen IP-Adressen erreichbar (Ingress) und kommuniziert auch von festen IP-Adressen aus mit deinen Systemen (Egress).

#### Ingress: Erreichbarkeit deiner Instanz von außen

Wenn du in deinem Netzwerk den Zugriff auf `*.i-doit.cloud` einschränkst, gib bitte die folgenden IP-Adressen für eingehende Verbindungen frei:

* **IPv4:**
    * `159.69.103.121`
    * `78.46.236.49`
* **IPv6:**
    * `2a01:4f8:c01f:289a::`
    * `2a01:4f8:1c17:a07c::`

#### Egress: Ausgehende Verbindungen von i-doit zu dir

Damit deine Cloud-Instanz deine lokalen Systeme (z.B. APIs, LDAP, JDisc) erreichen kann, gib bitte die jeweils zutreffenden IP-Adressen in deiner Firewall für ausgehende Verbindungen frei:

* **Für `i-doit eval` Instanzen:**
    * **IPv4:**
        * `88.99.122.103`
        * `138.199.151.161`
    * **IPv6:**
        * `2a01:4f8:c17:2702::1`
        * `2a01:4f8:c013:9e17::1`

* **Für `i-doit pro` Instanzen (z.B. für JDisc, VPN):**
    * **IPv4:**
        * `138.199.151.160`
    * **IPv6:**
        * `2a01:4f8:c013:9e16::1`

!!! note "Gültigkeit der Angaben"

    Alle hier genannten IP-Adressen beziehen sich auf unsere Produktionsumgebung (`production stage`), auf der alle Kundeninstanzen betrieben werden.

---

## Software-Updates

Wir halten deine Instanz aktuell. Updates auf eine neue i-doit Version werden in der Regel **innerhalb von 7 Tagen** nach der offiziellen Veröffentlichung durchgeführt. Während des Updates wird deine Instanz kurzzeitig in den Wartungsmodus versetzt.

Den aktuellen Status kannst du hier einsehen: [i-doit cloud status](https://status.docupike.com/affected/i-doit/){:target="_blank"}

---

## Unterschiede zur On-Premise-Version

Die Cloud-Version bietet denselben Funktionsumfang wie die On-Premise-Variante — mit einigen Unterschieden bei Administration und Zugriff:

| Funktion | On-Premise | Cloud |
|----------|-----------|-------|
| Hosting | Eigener Server | Von i-doit betrieben |
| Updates | Eigenverantwortlich | Durch i-doit (innerhalb von 7 Tagen nach Release) |
| Backup | Eigenverantwortlich | Automatisch (stündlich bis jährlich) |
| Admin-Center | Voller Zugang | Nicht verfügbar |
| Add-on-Installation | Manuell per ZIP oder Subscription Center | Nicht möglich — im Paket enthalten |
| Server-Zugang (SSH) | Ja | Nein |
| Console-Befehle (CLI) | Ja | Nein — stattdessen [Flows Lite](#automatisierung-mit-flows-lite) |
| Eigene PHP-Anpassungen | Möglich | Nicht möglich |
| SSO (SAML, Azure AD) | Über Apache konfigurierbar | Noch nicht verfügbar (geplant) |
| Mandanten | Mehrere möglich | Einer pro Instanz |
| API-Zugriff | Ja | Ja (Firewall-Konfiguration beachten) |

### Add-ons in der Cloud

Add-ons können in der Cloud nicht eigenständig installiert werden. Die verfügbaren Add-ons richten sich nach dem gebuchten Paket — die im Vertrag enthaltenen Add-ons sind auf deiner Instanz bereits vorinstalliert.

Ein Großteil der [i-doit Add-ons](../i-doit-add-ons/index.md) ist mit der Cloud kompatibel. Bei Fragen zu verfügbaren Add-ons oder zur Erweiterung des Pakets wende dich an das Sales-Team unter [sales@i-doit.com](mailto:sales@i-doit.com).

---

## Automatisierung mit Flows Lite

In der On-Premise-Version richtest du wiederkehrende Aufgaben über [Cronjobs](../wartung-und-betrieb/cronjobs-einrichten.md) und die `console.php` ein. In der Cloud gibt es keinen Shell-Zugang — stattdessen steht dir **Flows Lite** zur Verfügung.

Flows Lite ist eine eingeschränkte Version des [Flows Add-ons](../i-doit-add-ons/flows/index.md), die ohne separate Lizenz funktioniert und die zeitgesteuerte Ausführung von Console-Befehlen ermöglicht.

### Flows Lite vs. Flows (Vollversion)

| Funktion | Flows Lite | Flows (Vollversion) |
|----------|-----------|-------------------|
| Zeitbasierte Trigger | Ja | Ja |
| Button-Trigger | Nein | Ja |
| API-Aufrufe | Nein | Ja |
| E-Mail versenden | Nein | Ja |
| Objekte erstellen/ändern | Nein | Ja |
| Bedingungen (UND/ODER) | Nein | Ja |

### Verfügbare Console-Befehle in Flows Lite

Folgende Befehle kannst du über Flows Lite zeitgesteuert ausführen:

| Befehl | Beschreibung |
|--------|-------------|
| `ldap-sync` / `ldap-syncdn` | [LDAP-Synchronisation](../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md) |
| `import-jdisc` | [JDisc-Import](../daten-konsolidieren/jdisc/index.md) |
| `import-csv` / `import-xml` | [CSV-](../daten-konsolidieren/csv-datenimport/index.md) und XML-Import |
| `notifications-send` | [Benachrichtigungen](../auswertungen/benachrichtigungen.md) versenden |
| `search-index` | Suchindex aktualisieren |
| `report-export` | Reports exportieren |
| `extend-contracts` | Vertragslaufzeiten automatisch verlängern |
| `sync-dynamic-groups` | Dynamische Gruppen synchronisieren |

Flows Lite ersetzt damit die manuelle [Cronjob-Konfiguration](../wartung-und-betrieb/cronjobs-einrichten.md), die bei On-Premise über die Server-Konsole erfolgt.

---

## FAQ - Häufig gestellte Fragen

???+ question "**Kann ich die i-doit Schnittstellen (z.B. für LDAP, JDisc) nutzen?**"

    Ja, die API-Schnittstellen deiner i-doit Cloud-Instanz sind von außen erreichbar. Du musst lediglich sicherstellen, dass die Kommunikation von der Cloud-Instanz zu deinem lokalen System (z.B. durch deine Firewall) möglich ist. Selbstsignierte Zertifikate für TLS-Verbindungen können in der Schnittstellen-Konfiguration hinterlegt werden.

???+ question "**Kann ich meine Daten aus der Cloud wieder auf eine On-Prem-Variante umziehen?**"

    Ja, ein Export deiner Daten aus der Cloud ist jederzeit möglich. Diese können problemlos in eine andere i-doit Installation migriert werden.

???+ question "**Ist ein Single Sign-On (SSO), z.B. mit Azure AD, möglich?**"

    Aktuell wird SSO noch nicht unterstützt. Die Implementierung dieser Funktion ist jedoch für die Zukunft geplant.

???+ question "**Sind mehrere Mandanten in einer Instanz möglich?**"

    Derzeit ist pro Instanz nur ein Mandant möglich. Du kannst jedoch bei Bedarf jederzeit weitere, separate Instanzen buchen.

???+ question "**Kann ich Cronjobs einrichten?**"

    Nein, in der Cloud gibt es keinen Shell-Zugang. Stattdessen nutzt du [Flows Lite](#automatisierung-mit-flows-lite) für zeitgesteuerte Aufgaben wie LDAP-Sync, JDisc-Import oder Suchindex-Aktualisierung.

???+ question "**Kann ich Add-ons selbst installieren?**"

    Nein, Add-ons werden durch das i-doit-Team bereitgestellt. Die im Vertrag enthaltenen Add-ons sind auf deiner Instanz vorinstalliert. Für zusätzliche Add-ons wende dich an [sales@i-doit.com](mailto:sales@i-doit.com).

???+ question "**Wie kann ich von On-Premise in die Cloud wechseln (und umgekehrt)?**"

    Der Wechsel ist in beide Richtungen möglich. Ein vollständiger Datenexport steht jederzeit zur Verfügung. Kontaktiere unseren [Support](#support-service-zeiten) um den Migrationsprozess zu starten. Details: [Migration](#migration-umzug-in-die-cloud)
