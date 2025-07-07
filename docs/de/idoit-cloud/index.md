---
title: i-doit cloud
description: Alle Informationen und Services rund um Ihre i-doit in der Cloud. Sicher, gewartet und performant.
icon: material/cloud
lang: de
---

# Willkommen in der i-doit cloud

Entdecken Sie die Vorteile unserer gemanagten i-doit Cloud-Lösung. Wir kümmern uns um die Technik im Hintergrund, damit Sie sich voll und ganz auf Ihre IT-Dokumentation konzentrieren können. Sicher, performant und immer aktuell.

---

## Leistungsumfang & Technische Details

Hier finden Sie die wichtigsten Eckdaten zu Ihrer i-doit Cloud Instanz.

* **Instanz-Größe**: Ausgelegt für bis zu 50.000 Objekte.
* **Speicherplatz**: 1 GB dedizierter Datenspeicherplatz.
* **Sicherheit**: Ihre Daten werden verschlüsselt gespeichert.
* **Domain**: Der Name Ihrer Subdomain ist frei wählbar (z.B. `firmenname.i-doit.cloud`).
* **Bereitstellung**: Die Bereitstellung dauert ungefähr 15 Minuten.
* **Backup**: Automatisierte und engmaschige Backups.
* **Add-on Kompatibilität**: Ein Großteil der [i-doit Add-ons](https://www.i-doit.com/i-doit/add-ons/){:target="_blank"} ist kompatibel.
* **Serverstandort**: Alle unsere Server befinden sich in Deutschland und sind ISO27000 Zertifiziert.

!!! warning "Kein Shell-Zugriff"
    Aus Sicherheits- und Stabilitätsgründen ist ein direkter SSH- oder Dateisystem-Zugriff auf die Server nicht möglich.

---

## Support & Service-Zeiten

Unser Experten-Team steht Ihnen für alle Anliegen rund um Ihre Cloud-Instanz zur Verfügung.

* **Service-Zeiten**: Montag bis Freitag von 10:00 bis 16:00 Uhr (ausgenommen bundesweite Feiertage).
* **Erreichbarkeit**:
    * **E-Mail**: <a href="mailto:help@i-doit.com">help@i-doit.com</a>
    * **Help Center**: <a href="https://help.i-doit.com" target="_blank">help.i-doit.com</a>

<a href="https://help.i-doit.com" target="_blank" class="md-button md-button--primary">Support-Ticket erstellen</a>

**Diese Leistungen sind im Support enthalten:**

* Einspielen Ihrer Lizenz
* Installation und Updates von kompatiblen Add-ons
* Anpassung von serverseitigen Systemeinstellungen
* Einspielen von Backups auf Anfrage
* Durchführung von i-doit Software-Updates
* Aufnahme und Weiterleitung von Bug-Meldungen
* Aufnahme von Wünschen zur Funktionsverbesserung

---

## Migration: Umzug in die Cloud

Wir unterstützen Sie aktiv beim Umzug Ihrer bestehenden On-Premise-Installation in die i-doit Cloud.

!!! info "Kostenloser Umzugsservice"
    Derzeit bieten wir den kompletten Umzug Ihrer Altdaten (Datenbank und Dateien) von On-Premise in die Cloud als kostenlosen Service an.

**Ablauf der Migration:**

1.  **Terminvereinbarung**: Wir vereinbaren einen ersten Termin, um die Voraussetzungen für die Migration zu prüfen.
2.  **Vorbereitung**: Wenn alle Voraussetzungen erfüllt sind, bereiten wir Ihre persönliche Cloud-Instanz vor.
3.  **Datenexport**: In einem zweiten gemeinsamen Termin exportieren wir die Daten aus Ihrem aktuellen System.
4.  **Datenimport**: Anschließend migrieren wir Ihre Daten sicher in die vorbereitete Cloud-Instanz.

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
    Ein Restore auf einen früheren Zeitpunkt können Sie jederzeit über unser [Help Center](https://help.i-doit.com){:target="_blank"} oder per [E-Mail](mailto:help@i-doit.com) beantragen.

---

## Netzwerkanbindung und Schnittstellen

Damit Sie externe Systeme wie LDAP, JDisc oder eigene APIs sicher mit Ihrer i-doit Cloud-Instanz verbinden können, müssen Sie unter Umständen Ihre Firewall anpassen. Hier finden Sie alle notwendigen technischen Informationen.

### VPN-Anbindung (OpenVPN)

Für eine dedizierte und sichere Verbindung zwischen Ihrem Netzwerk und Ihrer Cloud-Instanz bieten wir die Anbindung über OpenVPN an.

!!! warning "Beta-Phase / Erstanwendung"

    Die Anbindung via OpenVPN nutzt eine Benutzer- und Zertifikatsauthentifizierung. Dieses Feature wurde intern erfolgreich getestet, befindet sich aber noch nicht im produktiven Einsatz bei Kunden.

    Wenn Sie diese Option nutzen möchten, definieren Sie bitte Ihre Anforderungen und kontaktieren Sie unseren [Support](#support-service-zeiten), um den Einrichtungsprozess gemeinsam zu starten.

### Feste IP-Adressen für Firewall-Regeln

Ihre i-doit Cloud-Instanz ist unter festen IP-Adressen erreichbar (Ingress) und kommuniziert auch von festen IP-Adressen aus mit Ihren Systemen (Egress).

#### Ingress: Erreichbarkeit Ihrer Instanz von außen

Wenn Sie in Ihrem Netzwerk den Zugriff auf `*.i-doit.cloud` einschränken, geben Sie bitte die folgenden IP-Adressen für eingehende Verbindungen frei:

* **IPv4:**
    * `159.69.103.121`
    * `78.46.236.49`
* **IPv6:**
    * `2a01:4f8:c01f:289a::`
    * `2a01:4f8:1c17:a07c::`

#### Egress: Ausgehende Verbindungen von i-doit zu Ihnen

Damit Ihre Cloud-Instanz Ihre lokalen Systeme (z.B. APIs, LDAP, JDisc) erreichen kann, geben Sie bitte die jeweils zutreffenden IP-Adressen in Ihrer Firewall für ausgehende Verbindungen frei:

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

Wir halten Ihre Instanz aktuell. Updates auf eine neue i-doit Version werden in der Regel **innerhalb von 7 Tagen** nach der offiziellen Veröffentlichung durchgeführt. Während des Updates wird Ihre Instanz kurzzeitig in den Wartungsmodus versetzt.

Den aktuellen Status können Sie hier einsehen: [i-doit cloud status](https://status.docupike.com/affected/i-doit/){:target="_blank"}

---

## FAQ - Häufig gestellte Fragen

???+ question "**Kann ich die i-doit Schnittstellen (z.B. für LDAP, JDisc) nutzen?**"

    Ja, die API-Schnittstellen Ihrer i-doit Cloud-Instanz sind von außen erreichbar. Sie müssen lediglich sicherstellen, dass die Kommunikation von der Cloud-Instanz zu Ihrem lokalen System (z.B. durch Ihre Firewall) möglich ist. Selbstsignierte Zertifikate für TLS-Verbindungen können in der Schnittstellen-Konfiguration hinterlegt werden.

???+ question "**Kann ich meine Daten aus der Cloud wieder auf eine On-Prem-Variante umziehen?**"

    Ja, ein Export Ihrer Daten aus der Cloud ist jederzeit möglich. Diese können problemlos in eine andere i-doit Installation migriert werden.

???+ question "**Ist ein Single Sign-On (SSO), z.B. mit Azure AD, möglich?**"

    Aktuell wird SSO noch nicht unterstützt. Die Implementierung dieser Funktion ist jedoch für die Zukunft geplant.

???+ question "**Sind mehrere Mandanten in einer Instanz möglich?**"

    Derzeit ist pro Instanz nur ein Mandant möglich. Sie können jedoch bei Bedarf jederzeit weitere, separate Instanzen buchen.
