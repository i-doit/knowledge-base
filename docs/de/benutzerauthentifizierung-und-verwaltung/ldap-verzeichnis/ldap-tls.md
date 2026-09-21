---
title: LDAPS Debian Konfiguration
description: Anleitung zur Konfiguration einer LDAPS Verbindung mit i-doit für Debian
icon: material/debian
lang: de
---

!!! warning "Bitte erstelle vor jeder Änderung an einer Schnittstelle/Import ein vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist, kann dieses dann wiederhergestellt werden"

Diese Anleitung zeigt dir, wie du eine verschlüsselte LDAPS- oder STARTTLS-Verbindung zwischen deinem i-doit-Server (Debian) und dem Active Directory einrichtest. Dazu exportierst du das Zertifikat vom LDAP-Server und fügst es dem Zertifikatsspeicher deines i-doit-Servers hinzu.

## Schritt 1: Zertifikat auf dem LDAP-Server exportieren

Melde dich auf dem LDAP-Server an, der in der Regel auch die Zertifizierungsstelle beinhaltet. Öffne das entsprechende MMC Snap-In oder wähle im Server Manager die Option **Certificate Authority**.

[![Server Manager](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-1.png)](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-1.png)

Wähle die Eigenschaften der Zertifizierungsstelle an.

[![Eigenschaften der auswählen](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-2.png)](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-2.png)

Lass dir das Zertifikat anzeigen (1), wähle **Details** (2) und kopiere es anschließend in eine Datei (3).

[![Zertifikat anzeigen und kopieren](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-3.png)](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-3.png)

Lass das DER-Format ausgewählt.

[![Lass das DER-Format ausgewählt.](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-4.png)](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-4.png)

Wähle einen Dateinamen und ein Verzeichnis.

[![Name und Verzeichnis wählen](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-5.png)](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-5.png)

Schließe den Export-Assistenten ab.

[![Fertigstellen des Export-Assistenten](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-6.png)](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-6.png)

## Schritt 2: Zertifikat auf dem i-doit-Server einrichten

Kopiere das exportierte Zertifikat auf dein i-doit-System (im Beispiel nach `/tmp/`). Installiere anschließend openssl, falls noch nicht vorhanden:

```shell
apt install openssl
```

Wandle das Zertifikat in das PEM-Format um:

```shell
openssl x509 -inform der -outform pem -in /tmp/synetics.test.cer \
-out /usr/local/share/ca-certificates/synetics.test.crt
```

Aktualisiere abschließend den Zertifikatsspeicher und starte Apache neu:

```shell
update-ca-certificates
service apache2 restart
```

!!! warning "Das Output File muss die Dateiendung .crt haben, sonst wird es vom Befehl update-ca-certificates nicht berücksichtigt. Ist es korrekt übernommen, muss das Zertifikat unter /etc/ssl/certs/ zu sehen sein."

## Schritt 3: Verbindung testen

Prüfe vom i-doit-Server aus, ob das Zertifikat für den Hostnamen vertraut wird, den du in der LDAP-Server-Konfiguration verwendest:

```shell
echo | openssl s_client -connect ldap.synetics.test:636 2>/dev/null | grep "Verify return code"
```

| Ausgabe | Bedeutung |
| ------- | --------- |
| `Verify return code: 0 (ok)` | Dem Zertifikat wird vertraut, LDAPS funktioniert. |
| `Verify return code: 18 (self-signed certificate)` | Das Zertifikat ist noch nicht im Zertifikatsspeicher. Wiederhole Schritt 2 und prüfe die Endung `.crt` und `/etc/ssl/certs/`. |
| `Verify return code: 62 (hostname mismatch)` | Das Zertifikat enthält den Hostnamen nicht, mit dem du dich verbindest (siehe unten). |

### Selbstsignierte Zertifikate

Schritt 2 funktioniert auch mit selbstsignierten Zertifikaten: Das Serverzertifikat selbst wird in den Zertifikatsspeicher importiert und ist danach vertrauenswürdig. Entscheidend ist der **Hostname**. Der **Host** in der [LDAP-Server-Konfiguration](index.md#server) von i-doit muss genau der Name sein, auf den das Zertifikat ausgestellt ist (CN oder Subject Alternative Name). Trägst du die IP-Adresse oder einen anderen Alias ein, scheitert der LDAP-Bind mit `Can't contact LDAP server`, obwohl dem Zertifikat vertraut wird. Eine zusätzliche `TLS_CACERT`-Zeile in `/etc/ldap/ldap.conf`, die auf das einzelne Zertifikat zeigt, behebt das nicht, das importierte Zertifikat ist bereits Teil des Standardbündels `/etc/ssl/certs/ca-certificates.crt`.

Lässt sich das Zertifikat nicht mit dem richtigen Namen neu ausstellen, kannst du die Zertifikatsprüfung als letzten Ausweg abschalten. Ergänze dazu in `/etc/ldap/ldap.conf` die folgende Zeile und starte Apache neu:

```text
TLS_REQCERT never
```

!!! warning "Die Verbindung bleibt verschlüsselt, aber die Identität des LDAP-Servers wird nicht mehr geprüft. Bevorzuge ein Zertifikat mit dem richtigen Hostnamen."
