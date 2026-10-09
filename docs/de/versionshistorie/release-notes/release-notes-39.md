---
title: Release Notes 39
description: "Wir freuen uns, i-doit 39 vorstellen zu können, mit einem klaren Fokus auf Sicherheit, neue Dokumentation für Cloud und Kubernetes sowie Qualität."
icon:
status:
lang: de
---
# Release Notes 39
<!-- cSpell:disable -->
Wir freuen uns, i-doit 39 vorstellen zu können, mit einem klaren Fokus auf **Sicherheit** und **Qualität**.

Mit dieser Version haben wir i-doit an vielen Stellen gehärtet, zum Beispiel mit einem Schutz vor Brute-Force-Angriffen beim Login, strengeren Prüfungen bei Datei-Uploads und Exportpfaden sowie serverseitigen Berechtigungsprüfungen für Importe und Einstiegspunkte von Add-ons. Außerdem können Sie jetzt **Cloud-Ressourcen** und **Kubernetes** mit neuen Kategorien und Objekttypen in i-doit dokumentieren. Darüber hinaus enthält diese Version 46 Korrekturen bekannter Probleme.

Eine detaillierte Liste aller Änderungen und Verbesserungen finden Sie im [Changelog](../changelogs/index.md).

## Neues Add-on: i-doit MCP

Mit i-doit 39 veröffentlichen wir das neue Add-on **i-doit MCP**. Es verbindet i-doit über das Model Context Protocol (MCP) mit KI-Assistenten. So stellen Sie Fragen zu Ihrer CMDB in natürlicher Sprache. Standardmäßig kann der Assistent nur lesen. Soll er Ihre Dokumentation auch pflegen, erlaubt ein Administrator den Schreibzugriff je Mandant. Jede Anfrage läuft mit den i-doit-Rechten des Token-Inhabers und wird in einem Anfrage-Protokoll festgehalten. Eine geführte Seite hilft Ihnen, Ihren KI-Client in drei Schritten zu verbinden.

!!! info "Voraussetzungen für i-doit MCP"
    - i-doit 39 oder neuer
    - [Add-on API](../../i-doit-add-ons/api/index.md), installiert und aktiv
    - **JSON-RPC API aktivieren** steht unter **Verwaltung → Add-ons → JSON-RPC API** auf **Ja**
    - Ein KI-Client, der MCP über HTTP unterstützt

    Details stehen unter [i-doit MCP](../../i-doit-add-ons/i-doit-mcp/index.md#voraussetzungen).

## Dokumente 1.12: Vorlagen mit KI erstellen

Mit Version 1.12 erstellt das Add-on **Dokumente** Dokumentenvorlagen mit KI. Sie beschreiben Thema und Zweck des Dokuments, die KI schlägt eine vollständige Struktur mit Kapiteln, Texten und Platzhaltern vor. Sie prüfen den Entwurf und übernehmen ihn als neue Vorlage, die Sie danach wie gewohnt bearbeiten. Kapitel, die mit KI erstellt oder verändert wurden, werden als **KI-generiert** oder **KI-unterstützt** gekennzeichnet, und exportierte Dokumente zeigen einen KI-Hinweis. Details stehen unter [KI Funktionen](../../i-doit-add-ons/documents/ki-funktionen.md).

## Highlights dieser Version

- Neues Add-on **i-doit MCP**: Ihre CMDB mit **KI-Assistenten** nutzen
- **Dokumente 1.12**: Dokumentenvorlagen mit **KI** erstellen
- **Sicherheit**: Begrenzung der Login-Versuche und Schutz vor Brute-Force-Angriffen, dazu 7 weitere Sicherheitskorrekturen
- Neue Kategorie [**Cloud**](../../grundlagen/kategorien/cloud.md) (Anbieter, Konto, Region, Status) und neuer Objekttyp [**Cloud Storage**](../../grundlagen/objekttypen/cloud-storage.md)
- Neue Kategorie [**Kubernetes**](../../grundlagen/kategorien/kubernetes.md) (Namespace, Workload, Art) und neue Objekttypen [**Kubernetes Service**](../../grundlagen/objekttypen/k8s-service.md), [**Kubernetes Pod**](../../grundlagen/objekttypen/k8s-pod.md) und [**Kubernetes Container**](../../grundlagen/objekttypen/k8s-container.md)
- **HTML-E-Mails** für Benachrichtigungen
- Neuer Konsolenbefehl zum **Wiederherstellen des Logbuchs**
- Neuinstallationen sortieren Objekttypen standardmäßig **alphabetisch**
- URL-kodierte Variablen in der Kategorie **Zugriff**
- 46 **Qualitätsverbesserungen**

## Wichtige Änderungen

Einige der Sicherheitsverbesserungen ändern das Verhalten von i-doit. Bitte prüfen Sie vor und nach dem Update die folgenden Punkte.

### Begrenzung der Login-Versuche

i-doit sperrt den Login nach zu vielen Fehlversuchen vorübergehend. Fehlversuche werden je Benutzername und je IP-Adresse gezählt. Mit den Standardwerten wird der Login nach 5 Fehlversuchen innerhalb von 5 Minuten für 15 Minuten gesperrt. Die Werte lassen sich in den systemweiten Experteneinstellungen im [Admin-Center](../../administration/admin-center.md#system-settings) (**System settings → Expert settings**) mit den folgenden Schlüsseln anpassen:

| Schlüssel | Standard | Bedeutung |
| --- | --- | --- |
| `system.security.login-throttle.active` | `1` | Begrenzung aktiv (`1`) oder inaktiv (`0`) |
| `system.security.login-throttle.max-attempts` | `5` | Anzahl der Fehlversuche bis zur Sperre |
| `system.security.login-throttle.window` | `300` | Zeitraum in Sekunden, in dem Fehlversuche gezählt werden |
| `system.security.login-throttle.lockout` | `900` | Dauer der Sperre in Sekunden |
| `system.security.login-throttle.trusted-proxies` | leer | Kommagetrennte IP-Adressen vertrauenswürdiger Reverse Proxies |

Läuft i-doit hinter einem Reverse Proxy, tragen Sie dessen IP-Adresse in `system.security.login-throttle.trusted-proxies` ein. Nur dann wird die IP-Adresse des Clients aus dem Header `X-Forwarded-For` übernommen. Andernfalls teilen sich alle Benutzer die IP-Adresse des Proxys.

### CMDB-Export: Speichern auf dem Server ist deaktiviert

Der CMDB-Export bietet standardmäßig die Option **Exportdaten speichern unter ...** nicht mehr an, mit der die Exportdatei in einem Verzeichnis auf dem i-doit-Server gespeichert wurde. **Exportdaten anzeigen** und **Exportdaten herunterladen** stehen weiterhin zur Verfügung. Wenn Sie Exporte auf dem Server speichern müssen, aktivieren Sie die Option mit der mandantenweiten [Experteneinstellung](../../administration/verwaltung/mandanten-name-verwaltung/experteneinstellungen.md#cmdb-export) `cmdb.cmdb-export.allow-save-on-filesystem` (Wert `1`). Die Datei wird dann immer als XML gespeichert und der Speicherpfad wird geprüft.

### Erlaubte Dateiendungen für Uploads

Hochgeladene Dateien in der CMDB werden jetzt auf dem Server geprüft. Die neue Einstellung **Erlaubte Dateiendungen für den CMDB-Kategorie-Upload** in den [Mandanten-Einstellungen](../../administration/verwaltung/mandanten-name-verwaltung/einstellungen-mandanten-name.md#cmdb) unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → CMDB** legt fest, welche Dateiendungen angenommen werden. Neuinstallationen bringen eine vordefinierte Liste mit (pdf, doc, docx, xls, xlsx, ppt, pptx, odt, ods, odp, txt, csv, rtf, png, jpg, jpeg, gif, bmp, zip). Bei Neuinstallationen gilt diese Liste auch dann, wenn das Feld in den Mandanten-Einstellungen leer ist. Nach einem Update gibt es keine vordefinierte Liste, ein leeres Feld erlaubt dann alle Endungen. Prüfen Sie nach dem Update, ob Sie die Dateiendungen einschränken möchten.

### Erlaubte URL-Schemata für Links

Links in den Kategorien **Dateizuweisung** und **Zugriff** werden beim Speichern jetzt gegen eine Liste erlaubter URL-Schemata geprüft. Links mit anderen Schemata wie `javascript:` lassen sich nicht mehr speichern. Bestehende Links mit einem solchen Schema werden nicht mehr als anklickbarer Link angezeigt. Die neue Einstellung **Erlaubte URL-Schemata** in den [Mandanten-Einstellungen](../../administration/verwaltung/mandanten-name-verwaltung/einstellungen-mandanten-name.md#sicherheit) unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → Sicherheit** legt die erlaubten Schemata fest. Standard ist `http, https, ftp, ftps, mailto, tel`, bei Neuinstallationen und nach dem Update. Nutzen Sie Links mit anderen Schemata, ergänzen Sie diese nach dem Update in der Liste.

### Prüfung von TLS-Zertifikaten bei ausgehenden Verbindungen

Ausgehende Verbindungen über den internen Proxy und den Updater prüfen jetzt das TLS-Zertifikat der Gegenstelle. Die neue Option **Verify SSL certificate** im [Admin-Center](../../administration/admin-center.md#proxy) unter **System settings → Proxy** steht standardmäßig auf **Ja**. Ersetzt Ihr Proxy Zertifikate durch ein eigenes Zertifikat, stellen Sie sicher, dass der Server diesem Zertifikat vertraut.

### Serverseitige Prüfung der Berechtigungen

Berechtigungen für Importe und Einstiegspunkte von Add-ons werden jetzt auf dem Server geprüft und nicht mehr nur in der Navigation. Das betrifft die folgenden Bereiche: Importe, das Rechtesystem, benutzerdefinierte Kategorien, das Konfigurieren von Dashboards und deren Widgets, Benachrichtigungen und E-Mail-Vorlagen, Report Views, die Konfiguration von h-inventory und das Öffnen von Objekten. Benutzer, die diese Seiten bisher ohne passendes Recht über eine direkte URL erreicht haben, erhalten jetzt eine Fehlermeldung. Fehlt Benutzern nach dem Update ein Zugriff, prüfen Sie deren [Berechtigungen](../../administration/verwaltung/berechtigungen.md).

### Webserver-Konfiguration für i-doit MCP

Die `.htaccess` von i-doit erlaubt jetzt zusätzlich den Zugriff auf `src/mcp.php` und reicht den `Authorization`-Header an PHP weiter. Beides benötigt [i-doit MCP](../../i-doit-add-ons/i-doit-mcp/index.md). Wenn Ihr Apache VHost `AllowOverride None` verwendet und die Regeln der `.htaccess` direkt enthält, übernehmen Sie diese Änderungen in Ihre VHost-Konfiguration. Die VHost-Beispiele in den [Installationsanleitungen](../../installation/manuelle-installation/debian/index.md) zeigen die angepasste Konfiguration.

## Weitere Verbesserungen

- Das Passwort für eine entfernte Datenbank des Logbuch-Archivs wird jetzt verschlüsselt gespeichert. Bestehende Passwörter werden beim Update automatisch verschlüsselt.

## Systemvoraussetzungen

Die Systemvoraussetzungen sind gegenüber i-doit 38 unverändert: PHP 8.2 (veraltet), 8.3 oder 8.4 (empfohlen), MariaDB 10.6 bis 11.8 (10.11 empfohlen) oder MySQL 5.7 (veraltet) bis 8.4 (8.4 empfohlen). Details stehen unter [Systemvoraussetzungen](../../installation/systemvoraussetzungen.md). Ein Update auf i-doit 39 setzt mindestens i-doit 35 voraus.

## Add-ons

Neben der Veröffentlichung von i-doit 39 sind auch die folgenden Versionen unserer Add-ons verfügbar:

- [i-doit MCP 1.1.1](../../i-doit-add-ons/i-doit-mcp/index.md), das neue Add-on zur Anbindung von i-doit an **KI-Assistenten**
- [Documents 1.12](../../i-doit-add-ons/documents/index.md) mit den neuen **KI Funktionen** zum Erstellen von Dokumentenvorlagen

Stellen Sie sicher, dass Sie die Add-ons entsprechend **aktualisieren**, damit Sie die Anforderungen für i-doit 39 erfüllen.

Wir empfehlen Ihnen, i-doit und Ihre installierten Add-ons so bald wie möglich auf diese Version zu [aktualisieren](../../wartung-und-betrieb/update-einspielen.md), um von allen Verbesserungen zu profitieren.

Bei weiteren Fragen zu dieser Version wenden Sie sich gerne an unser Support-Team unter <https://help.i-doit.com>{: target="_blank"}.
