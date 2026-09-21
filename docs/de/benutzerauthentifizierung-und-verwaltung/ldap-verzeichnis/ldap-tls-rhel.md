---
title: LDAPS Red Hat Enterprise Linux Konfiguration
description: Anleitung zur Konfiguration einer LDAPS-Verbindung mit i-doit für Red Hat Enterprise Linux
icon: material/redhat
lang: de
---

!!! warning "Bitte erstelle vor jeder Änderung an einer Schnittstelle/Import ein vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist, kann dieses dann wiederhergestellt werden"

Diese Anleitung zeigt dir, wie du eine verschlüsselte LDAPS- oder STARTTLS-Verbindung zwischen deinem i-doit-Server (Red Hat Enterprise Linux, Rocky Linux oder ein anderes RHEL-Derivat) und dem Active Directory einrichtest. Dazu exportierst du das Zertifikat vom LDAP-Server und nimmst es in den Zertifikatsspeicher deines i-doit-Servers auf. Die Debian-Variante dieser Anleitung ist [LDAPS Debian Konfiguration](ldap-tls.md).

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

Kopiere das exportierte Zertifikat auf dein i-doit-System (im Beispiel nach `/tmp/`). Installiere anschließend openssl und die LDAP-Client-Werkzeuge, falls noch nicht vorhanden:

```shell
sudo dnf install openssl openldap-clients
```

Wandle das Zertifikat in das PEM-Format um und lege es im Anker-Verzeichnis des System-Zertifikatsspeichers ab:

```shell
sudo openssl x509 -inform der -outform pem -in /tmp/synetics.test.cer \
-out /etc/pki/ca-trust/source/anchors/synetics.test.crt
```

Aktualisiere den Zertifikatsspeicher und starte Webserver und PHP-FPM neu, damit PHP das neue Zertifikat übernimmt:

```shell
sudo update-ca-trust
sudo systemctl restart httpd php-fpm
```

!!! warning "Das Zertifikat muss nach `/etc/pki/ca-trust/source/anchors/`, nicht nach `/etc/pki/tls/certs/`. Nur das Anker-Verzeichnis wird von `update-ca-trust` gelesen. Danach ist das Zertifikat Teil des Bündels `/etc/pki/tls/certs/ca-bundle.crt`, das die LDAP-Client-Bibliothek standardmäßig verwendet (`/etc/openldap/ldap.conf` braucht keinen `TLS_CACERT`-Eintrag)."

!!! info "SELinux"
    SELinux muss dem Webserver ausgehende LDAP-Verbindungen erlauben. Hast du die [RHEL-Installationsanleitung](../../installation/manuelle-installation/red-hat-enterprise-linux/index.md) befolgt, ist `httpd_can_network_connect` bereits aktiv und deckt das ab. Andernfalls aktiviere mindestens den LDAP-spezifischen Schalter:

    ```shell
    sudo setsebool -P httpd_can_connect_ldap 1
    ```

## Schritt 3: Verbindung testen

Prüfe vom i-doit-Server aus, ob das Zertifikat für den Hostnamen vertraut wird, den du in der LDAP-Server-Konfiguration verwendest:

```shell
echo | openssl s_client -connect ldap.synetics.test:636 2>/dev/null | grep "Verify return code"
ldapsearch -x -H ldaps://ldap.synetics.test:636 -b "dc=synetics,dc=test" -s base
```

| Ausgabe | Bedeutung |
| ------- | --------- |
| `Verify return code: 0 (ok)`, `ldapsearch` liefert ein Suchergebnis | Dem Zertifikat wird vertraut, LDAPS funktioniert. |
| `Verify return code: 18 (self-signed certificate)` oder `21 (unable to verify the first certificate)`, `ldapsearch: Can't contact LDAP server (-1)` | Das Zertifikat ist noch nicht im Zertifikatsspeicher. Wiederhole Schritt 2 und prüfe die `.crt`-Datei im Anker-Verzeichnis. |
| `Verify return code: 62 (hostname mismatch)` | Das Zertifikat enthält den Hostnamen nicht, mit dem du dich verbindest. Verwende den Namen aus dem Zertifikat (CN oder Subject Alternative Name) als **Host** in der LDAP-Server-Konfiguration von i-doit. |

Trage den Server danach in i-doit unter **Verwaltung → Import und Schnittstellen → LDAP → Server** mit **TLS** = `LDAPS` (Port 636) oder `STARTTLS` (Port 389) ein, siehe [LDAP-Verzeichnis](index.md#server).
