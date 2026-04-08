---
title: Admin-Center
description: Das Admin-Center ist die zentrale, mandantenübergreifende Administrationsoberfläche von i-doit.
icon: admin-center
status:
lang: de
---

# Admin-Center

Das Admin-Center ist die zentrale, mandantenübergreifende Administrations-Oberfläche von i-doit. Hier konfigurierst du systemweite Einstellungen, verwaltest Mandanten und Lizenzen und installierst Add-ons.

!!! tip "Add-ons und Subskriptionen sind nun auch über das [Add-on & Subscription Center](add-on-and-subscription-center.md) verwaltbar."

## Zugangsdaten und Anmeldung

Für das Admin-Center gelten **separate Zugangsdaten** — nicht dein normaler i-doit Login. Du legst sie bei der [Installation von i-doit](../installation/manuelle-installation/setup.md) fest.

Du erreichst das Admin-Center auf zwei Wegen:

1. Über den Link **Admin-Center** unterhalb der i-doit Login-Maske
2. Direkt über die URL `https://deine-instanz/admin/`

[![Anmeldung](../assets/images/de/administration/admin-center/1-ac.png)](../assets/images/de/administration/admin-center/1-ac.png)

!!! warning "Passwort vergessen?"
    Wenn du dich nicht mehr einloggen kannst, kann das Passwort nur über das [i-doit console utility](../automatisierung-und-integration/cli/index.md) zurückgesetzt werden.

!!! info "Englische Oberfläche"
    Das Admin-Center ist vollständig auf Englisch gehalten.

## Übersicht (Home)

Zeigt die installierte i-doit-Version. Unter **Actions** kannst du das **i-doit environment info file** herunterladen — eine XML-Datei mit Systemeinstellungen, die beim [Troubleshooting](troubleshooting/index.md) sehr hilfreich ist.

[![Übersicht](../assets/images/de/administration/admin-center/3-ac.png)](../assets/images/de/administration/admin-center/3-ac.png)

## Mandanten (Tenants)

Hier verwaltest du Mandanten — relevant bei Multi-Mandanten-Lizenzen. Du kannst neue Mandanten erzeugen, bestehende (de-)aktivieren oder löschen.

!!! warning "Ein gelöschter Mandant lässt sich nur über ein [Backup](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) wiederherstellen."

[![Mandanten](../assets/images/de/administration/admin-center/4-ac.png)](../assets/images/de/administration/admin-center/4-ac.png)

## Lizenzen (Licenses)

Hier spielst du deine [Lizenz](../wartung-und-betrieb/lizenzierung.md) ein.

[![Lizenzen](../assets/images/de/administration/admin-center/5-ac.png)](../assets/images/de/administration/admin-center/5-ac.png)

## Add-ons

Hier installierst und verwaltest du [i-doit Add-ons](../i-doit-add-ons/index.md).

[![Add-ons](../assets/images/de/administration/admin-center/6-ac.png)](../assets/images/de/administration/admin-center/6-ac.png)

## System settings

[![Admin Center System Settings](../assets/images/de/administration/admin-center-system-settings.png)](../assets/images/de/administration/admin-center-system-settings.png)

!!! info "Seit i-doit v25"
    Die system-weiten Einstellungen sind seit Version 25 ins Admin Center gewandert. Mandanten-spezifische Einstellungen findest du weiterhin unter [Verwaltung → Experteneinstellungen](verwaltung/mandanten-name-verwaltung/experteneinstellungen.md).

### Login

| Einstellung | Beschreibung |
|-------------|--------------|
| **Welcome message for login** | Text der auf der Anmeldeseite angezeigt wird — z.B. "Wartungsfenster: Sonntag 02:00-06:00 Uhr" oder Hinweise für neue Benutzer. HTML ist möglich. |

### Proxy

Wenn deine i-doit-Installation keinen direkten Internetzugang hat (z.B. für Lizenzprüfung oder das Add-on & Subscription Center), konfiguriere hier den HTTP-Proxy.

| Einstellung | Beschreibung |
|-------------|--------------|
| **Active** | Proxy aktivieren/deaktivieren |
| **Host/IP-Address** | Hostname oder IP des Proxy-Servers |
| **Port** | Proxy-Port (Standard: 3128 für Squid) |
| **Username/Password** | Falls der Proxy Authentifizierung erfordert |

### SMTP

E-Mail-Konfiguration für [Benachrichtigungen](../auswertungen/benachrichtigungen.md), Passwort-Reset-Mails und Wartungsvertrag-Erinnerungen. Ohne korrekte SMTP-Konfiguration werden **keine E-Mails** versendet.

| Einstellung | Beschreibung |
|-------------|--------------|
| **SMTP Host** | Hostname des Mailservers, z.B. `smtp.firma.de` |
| **SMTP Port** | Port — `587` für STARTTLS (empfohlen), `465` für SSL, `25` für unverschlüsselt |
| **SMTP Username/Password** | Zugangsdaten für den Mailserver |
| **SMTP TLS** | TLS-Verschlüsselung aktivieren — **unbedingt einschalten** wenn dein Mailserver es unterstützt |
| **Sender** | Absender-Adresse, z.B. `idoit@firma.de`. Muss vom Mailserver akzeptiert werden. |
| **Name** | Anzeigename des Absenders, z.B. `i-doit CMDB` |
| **Timeout** | Verbindungs-Timeout in Sekunden (Standard: 60) |
| **SMTP Debug** | Bei `Yes` werden SMTP-Dialoge ins Log geschrieben — hilfreich wenn Mails nicht ankommen |
| **Subject prefix** | Wird jedem Betreff vorangestellt, z.B. `[i-doit]`. Hilft beim Filtern in Outlook/Thunderbird. |

!!! tip "Verbindung testen"
    Unter der SMTP-Konfiguration gibt es einen **Test**-Button. Nutze ihn nach jeder Änderung um sicherzustellen, dass Mails tatsächlich versendet werden.

### Security

| Einstellung | Beschreibung |
|-------------|--------------|
| **CSRF-Token** | Schutz gegen Cross-Site Request Forgery. Bei `Yes` (Standard) wird bei jedem Formular ein Token geprüft. **Nicht deaktivieren** — es sei denn, ein Add-on hat Kompatibilitätsprobleme. |

### Session

| Einstellung | Beschreibung |
|-------------|--------------|
| **Session timeout** | Nach wie vielen Sekunden Inaktivität wird der Benutzer automatisch abgemeldet. Standard: `3600` (1 Stunde). In sicherheitskritischen Umgebungen auf `1800` (30 Minuten) oder weniger setzen. |

### Single Sign On

| Einstellung | Beschreibung |
|-------------|--------------|
| **Active** | SSO aktivieren/deaktivieren. Voraussetzung: ein [SSO-Verfahren](../benutzerauthentifizierung-und-verwaltung/sso-vergleich/index.md) muss konfiguriert sein. |
| **Default tenant** | Welcher Mandant bei SSO-Anmeldung automatisch ausgewählt wird |
| **Use Domain Part** | Bei `Yes` wird der Domain-Teil des Benutzernamens (z.B. `FIRMA\lfischer`) für die Mandanten-Zuordnung verwendet |

### System Parameters

| Einstellung | Beschreibung |
|-------------|--------------|
| **PHP Timezone** | Zeitzone für Datumsanzeigen, z.B. `Europe/Berlin`. Muss mit der PHP-Zeitzone des Servers übereinstimmen. |
| **File upload directory** | Verzeichnis für hochgeladene Dateien. Standard: `upload/files/` relativ zum i-doit Installationsverzeichnis. |
| **Image upload directory** | Verzeichnis für hochgeladene Bilder (Objektbilder, Floorplan-Bilder). |

### User interface

| Einstellung | Beschreibung |
|-------------|--------------|
| **Wiki URL** | URL zu einem externen Wiki. Wird in der Oberfläche als Link angezeigt. |
| **Sortfunction for login tenantlist** | Sortierung der Mandantenliste auf der Login-Seite: nach Titel oder benutzerdefiniert. |

## Expert settings (system-weit)

Über den Link **Expert settings** oben rechts auf der System-Settings-Seite erreichst du die system-weiten Key/Value-Experteneinstellungen. Hier sind die wichtigsten:

### Rechtesystem

| Key | Standard | Was passiert wenn du es änderst? |
|-----|----------|----------------------------------|
| `auth.active` | `1` | Bei `0` wird das **gesamte Rechtesystem deaktiviert** — jeder Benutzer kann alles sehen und bearbeiten. Nur in Notfällen verwenden, z.B. wenn du dich durch eine fehlerhafte Rechtekonfiguration ausgesperrt hast. |
| `api.authenticated-users-only` | `1` | Bei `1` müssen API-Anfragen mit gültigen Benutzerdaten (Basic Auth) authentifiziert werden — nicht nur mit dem API-Key. **Empfohlen** für Produktionsumgebungen. |

### CMDB-Verhalten

| Key | Standard | Was passiert wenn du es änderst? |
|-----|----------|----------------------------------|
| `cmdb.quickpurge` | `0` | Bei `1` können Objekte **direkt und unwiderruflich gelöscht** werden — ohne Archivieren → Löschen → Purgen. **Gefährlich in Produktion.** |
| `cmdb.unique.hostname` | `0` | Bei `1` werden doppelte Hostnamen verhindert. |
| `cmdb.unique.ip-address` | `0` | Bei `1` werden doppelte IP-Adressen verhindert. **Empfohlen.** |
| `cmdb.unique.object-title` | `0` | Bei `1` müssen Objektnamen eindeutig sein. |
| `cmdb.unique.layer-2-net` | `0` | Bei `1` werden doppelte VLAN-IDs verhindert. |
| `cmdb.limits.obj-browser.objects-in-viewmode` | `8` | Maximale Anzahl Objekte im Objekt-Browser. |
| `cmdb.limits.port-lists-vlans` | `5` | Wie viele VLANs in der Portliste angezeigt werden. |
| `cmdb.object.title.cable-prefix` | `KABEL_DEFAULT_` | Prefix für automatisch generierte Kabel-Objektnamen. |
| `cmdb.objtype.X.auto-inventory-no` | (leer) | Muster für automatische Inventarnummern. Ersetze `X` durch die Objekttyp-ID. Beispiel: `SRV-%COUNTER%` → `SRV-001`. |

### Sicherheit und Passwörter

| Key | Standard | Was passiert wenn du es änderst? |
|-----|----------|----------------------------------|
| `security.passwort.minlength` | (leer) | Mindestlänge für Benutzerpasswörter. Setze diesen Wert in Produktionsumgebungen auf mindestens **8**, besser **12**. |

### Logging und Debug

| Key | Standard | Was passiert wenn du es änderst? |
|-----|----------|----------------------------------|
| `ldap.debug` | `1` | LDAP-Debug-Logging. Bei `0` deaktiviert — spart Log-Volumen in Produktion. |
| `logbook.changes` | `1` | Bei `0` werden Änderungen nicht mehr im Logbuch protokolliert. **Nicht deaktivieren** — du verlierst die Nachvollziehbarkeit. |
| `logging.cmdb.import` | `1` | Logging von Import-Vorgängen (CSV, JDisc). |
| `debug-bar.enabled` | `1` | PHP Debug Bar anzeigen. In Produktion auf `0` setzen. |

### GUI und E-Mail-Templates

| Key | Standard | Beschreibung |
|-----|----------|--------------|
| `gui.empty_value` | (leer) | Darstellung leerer Felder in der UI, z.B. `—` oder `n/a`. |
| `gui.wysiwyg` | `1` | WYSIWYG-Editor für Beschreibungsfelder aktivieren. |
| `email.template.maintenance` | (Template) | E-Mail-Vorlage für Wartungsvertrag-Benachrichtigungen. |
| `email.template.password` | `Ihr Passwort lautet:` | E-Mail-Text beim Passwort-Versand. |
| `maxlength.dialog_plus` | `110` | Maximale Zeichenlänge für Dialog+-Einträge. |

## Konfiguration (Config)

Hier änderst du drei grundlegende Einstellungen:

- **Admin-Center Credentials** — Zugangsdaten zum Admin-Center ändern
- **Security configuration** — Verschlüsselungsmethode auswählen
- **Connection to i-doit System Database** — Datenbankzugangsdaten ändern

[![Konfiguration](../assets/images/de/administration/admin-center/7-ac.png)](../assets/images/de/administration/admin-center/7-ac.png)

!!! tip "Notfall-Zugang"
    Im Notfall kannst du die Datenbankeinstellungen direkt in der Datei `src/config.inc.php` im Installationsverzeichnis ändern. Bei einem [Update](../wartung-und-betrieb/update-einspielen.md) legt i-doit automatisch ein Backup dieser Datei an.
