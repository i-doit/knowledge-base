# Admin Center

Das Admin Center ist eine in i-doit integrierte separate Administrations-Oberfläche. Hierüber werden mandantenübergreifende Einstellungen konfiguriert.

## Zugangsdaten

!!! attention "Achtung!"
    Bitte editieren Sie nicht das Passwort, falls eines bereits vergeben ist. Dies kann nur über die [CLI](../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md#admin-center-password-reset) geändert werden!

Für das Admin Center gelten **separate Zugangsdaten**. Diese können bei der [Installation von i-doit](../installation/manuelle-installation/setup.md) festgelegt werden. Sollte dieser Schritt übersprungen werden, ist erst einmal kein Zugang zum Admin Center möglich. Um **nachträglich** Zugangsdaten zu vergeben, wird die Datei src/config.inc.php im Installationsverzeichnis von i-doit durch den CLI Befehl [**admin-center-password-reset**](../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md#console-admin-center-password-reset) aktualisiert, wobei username und password durch durch die im Befehl mitgegebenen Werte ausgetauscht werden :

```shell
$g_admin_auth = array(
"username" => "password",
);
```

## Anmeldung

Das Admin Center ist über die [Login-Maske von i-doit](../grundlagen/erstanmeldung.md) zu erreichen. Unterhalb der Maske befindet sich der Link **Admin-Center**.

[![Anmeldung](../assets/images/de/administration/admin-center/1-ac.png)](../assets/images/de/administration/admin-center/1-ac.png)

!!! info "Zugangsdaten vergeben"
    Dieser Link steht nur zur Verfügung, wenn die Zugangsdaten für das Admin Center konfiguriert wurden (siehe oben).

Alternativ kann im Browser die URL zum Admin Center eingegeben werden. Dabei wird dem Link zu i-doit ein /admin/ nachgestellt:

<https://demo.i-doit.com/admin/>

[![Anmeldung](../assets/images/de/administration/admin-center/2-ac.png)](../assets/images/de/administration/admin-center/2-ac.png)

!!! info "Englische Oberfläche"
    Das Admin Center ist vollständig in englisch gehalten.

## Übersicht

Im Bereich **Home** wird die derzeit installierte Version von i-doit angezeigt. Unter dem Punkt **Actions** kann das **i-doit environment info file** heruntergeladen werden. Dies ist eine XML-Datei mit wichtigen Systemeinstellungen, die beim [Troubleshooting](../administration/troubleshooting/index.md) sehr hilfreich sein können.

[![Übersicht](../assets/images/de/administration/admin-center/3-ac.png)](../assets/images/de/administration/admin-center/3-ac.png)

## Mandanten

Im Bereich **Tenants** werden die Mandanten verwaltet. Dies wird allerdings nur bei einer Multi-Mandanten-Lizenz von i-doit relevant. Neue Mandanten können über die Schaltfläche "Add new tenant" erzeugt werden. Bestehende Mandanten können außerdem bearbeitet, (de)aktiviert oder vollständig gelöscht werden. Ein gelöschter Mandant kann nur über ein [BackUp](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) wiederhergestellt werden.

[![Mandanten](../assets/images/de/administration/admin-center/4-ac.png)](../assets/images/de/administration/admin-center/4-ac.png)

## Lizenzen

Über den Bereich **Licences** kann die [Lizenz für i-doit](../wartung-und-betrieb/lizenz-aktivieren.md) eingespielt werden.

[![Lizenzen](../assets/images/de/administration/admin-center/5-ac.png)](../assets/images/de/administration/admin-center/5-ac.png)

Wie License Token verwendet werden wird [HIER](../wartung-und-betrieb/lizenz-aktivieren.md) erklärt.

## Add-ons

Im Bereich **Modules** werden die [i-doit Add-ons](../i-doit-add-ons/index.md) verwaltet. Jede Funktionalität von i-doit ist in einem Modul gekapselt. Viele davon gehören zum Kern (**core**) von i-doit, einige davon gelten als **extension**, wenn sie bei der Installation bereits installiert sind, oder als **addon**, wenn sie zusätzlich installiert werden können.

[![Add-ons](../assets/images/de/administration/admin-center/7-ac.png)](../assets/images/de/administration/admin-center/7-ac.png)

## Support

Bei einem Klick auf den Bereich **Support** wird das [Kundenportal](../administration/kundenportal.md) in einem neuen Tab geöffnet. Darüber können beispielsweise Download-Pakete und Lizenzen heruntergeladen werden.

## System settings

Hier finden Sie die systembezogenen Einstellungen. Auch finden Sie hier den Link zu den [Experteneinstellungen](#expert-settings-system-related) auf der rechten Seite.

### LDAP Debug settings

| Option     | Wert         |
| ---------- | ------------ |
| LDAP Debug | Ja oder Nein |

Einstellung kann auch via [Expert settings](#expert-settings-system-related) geändert werden. Die Option heißt `ldap.debug`.

### Login

| Option                    | Wert   |
| ------------------------- | ------ |
| Welcome message for login | String |

### Proxy

| Option          | Wert                 |
| --------------- | -------------------- |
| Active          | Ja oder Nein         |
| Host/IP-Address | Host oder IP address |
| Port            | Port                 |
| Username        | Username             |
| Password        | Password             |

### Security

| Option     | Wert         |
| ---------- | ------------ |
| CSRF-Token | Ja oder Nein |

### Session

| Option          | Wert             |
| --------------- | ---------------- |
| Session timeout | Wert in Sekunden |

### Single Sign On

| Option          | Wert             |
| --------------- | ---------------- |
| Active          | Ja oder Nein     |
| Default tenant  | Dropdown Auswahl |
| Use Domain Part | Ja oder Nein     |

### System Parameters

| Option                 | Wert     |
| ---------------------- | -------- |
| PHP Timezone           | Zeitzone |
| File upload directory  | Pfad     |
| Image upload directory | Pfad     |

### User interface

| Option                            | Wert                                           |
| --------------------------------- | ---------------------------------------------- |
| Wiki URL                          | URL                                            |
| Sortfunction for login tenantlist | Title<br>Custom (configurable in Admin-Center) |

## Konfiguration

Im Bereich Config werden drei Punkte konfiguriert:

-   Über **Admin-Center Credentials** können die Zugangsdaten zum Admin Center geändert werden (siehe oben).
-   Über **Security configuration** kann die `Encryption method` ausgewählt werden.
-   Über **Connection to i-doit System Database** kann der Zugang zur [System-Datenbank](../software-entwicklung/datenbank-modell/index.md) geändert werden.

[![Konfiguration](../assets/images/de/administration/admin-center/9-ac.png)](../assets/images/de/administration/admin-center/9-ac.png)

Die Einstellungen können alternativ in der Dateien src/config.inc.php im Installationsverzeichnis von i-doit geändert werden. Diese Datei wird bei der [Installation von i-doit](../installation/manuelle-installation/setup.md) erstellt. Wird ein [Update von i-doit](../wartung-und-betrieb/update-einspielen.md) eingespielt, wird automatisch ein [Backup](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) der Datei angegeben. Im Dateinamen wird das Datum des Updates angeben.

## Expert settings (Systembezogenen)

Die Experteneinstellungen für das System befinden sich im Admin Center. Sie können sie erreichen über die [System settings](#system-settings)

| Key                                             | Value                                                                                                                                                             | Description                            |
| ----------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------- |
| system.email.password                           | -                                                                                                                                                                 | system.email.port                      |
| admin.active_license_distribution               | 1                                                                                                                                                                 |                                        |
| api.authenticated-users-only                    | 1                                                                                                                                                                 |                                        |
| api.status                                      | 1                                                                                                                                                                 |                                        |
| api.validation                                  | 1                                                                                                                                                                 |                                        |
| auth.active                                     | 1                                                                                                                                                                 |                                        |
| barcode.type                                    | qr                                                                                                                                                                |                                        |
| cmdb.connector.suffix-schema                    | -                                                                                                                                                                 |                                        |
| cmdb.limits.connector-lists-assigned_connectors | 5                                                                                                                                                                 |                                        |
| cmdb.limits.obj-browser.objects-in-viewmode     | 8                                                                                                                                                                 |                                        |
| cmdb.limits.port-lists-layer2                   | 5                                                                                                                                                                 |                                        |
| cmdb.limits.port-lists-vlans                    | 5                                                                                                                                                                 |                                        |
| cmdb.limits.port-overview-default-vlan-only     | 0                                                                                                                                                                 |                                        |
| cmdb.limits.port-overview-vlans                 | -                                                                                                                                                                 |                                        |
| cmdb.object-browser.max-objects                 | -                                                                                                                                                                 |                                        |
| cmdb.object.title.cable-prefix                  | KABEL_DEFAULT_                                                                                                                                                    |                                        |
| cmdb.objtype.X.auto-inventory-no                | -                                                                                                                                                                 |                                        |
| cmdb.quickpurge                                 | 0                                                                                                                                                                 |                                        |
| cmdb.renew-properties                           | 1                                                                                                                                                                 |                                        |
| cmdb.unique.hostname                            | 0                                                                                                                                                                 |                                        |
| cmdb.unique.ip-address                          | 0                                                                                                                                                                 |                                        |
| cmdb.unique.layer-2-net                         | 0                                                                                                                                                                 |                                        |
| cmdb.unique.object-title                        | 0                                                                                                                                                                 |                                        |
| debug_bar.storeDirectory                        | /tmp/idoit_debugbar                                                                                                                                               |                                        |
| debug-bar.enabled                               | 1                                                                                                                                                                 |                                        |
| email.template.maintenance                      | `Your maintenance contract: %s timed out.\n<strong>Contract information</strong>:\nStart: %s\nEnd: %s\nSupport-Url: %s\nContract-Number: %s\nCustomer-Number: %s` |                                        |
| email.template.password                         | Ihr Passwort lautet:                                                                                                                                              |                                        |
| gui.empty_value                                 | -                                                                                                                                                                 |                                        |
| gui.empty_values                                | -                                                                                                                                                                 |                                        |
| gui.forum-link                                  | 0                                                                                                                                                                 |                                        |
| gui.leftcontent.width                           |                                                                                                                                                                   |                                        |
| gui.wiki-url                                    |                                                                                                                                                                   |                                        |
| gui.wysiwyg                                     | 1                                                                                                                                                                 |                                        |
| gui.wysiwyg-all-controls                        | 1                                                                                                                                                                 |                                        |
| import.object.keep-status                       | 0                                                                                                                                                                 |                                        |
| ldap.debug                                      | 1                                                                                                                                                                 |                                        |
| ldap.default-group                              |                                                                                                                                                                   |                                        |
| logbook.changes                                 | 1                                                                                                                                                                 |                                        |
| logging.cmdb.import                             | 1                                                                                                                                                                 |                                        |
| login.tenantlist.sortby                         | isys_mandator__sort                                                                                                                                               |                                        |
| maxlength.dialog_plus                           | 110                                                                                                                                                               |                                        |
| mysql.unbuffered-queries                        | 0                                                                                                                                                                 |                                        |
| proxy.active                                    | 0                                                                                                                                                                 |                                        |
| proxy.host                                      | -                                                                                                                                                                 |                                        |
| proxy.password                                  | -                                                                                                                                                                 |                                        |
| proxy.port                                      | -                                                                                                                                                                 |                                        |
| proxy.username                                  | -                                                                                                                                                                 |                                        |
| qrcode.config                                   | -                                                                                                                                                                 |                                        |
| reports.browser-url                             | -                                                                                                                                                                 |                                        |
| security.passwort.minlength                     | -                                                                                                                                                                 |                                        |
| session.sso.active                              | 0                                                                                                                                                                 |                                        |
| session.sso.mandator-id                         | 1,2                                                                                                                                                               | Reihenfolge für die Anmeldung über sso |
| session.time                                    | 3600                                                                                                                                                              |                                        |
| system.devmode                                  | -                                                                                                                                                                 |                                        |
| system.email.connection-timeout                 | -                                                                                                                                                                 |                                        |
| system.email.from                               | <i-doit@example-domain.int>                                                                                                                                       |                                        |
| system.email.name                               | -                                                                                                                                                                 |                                        |
| system.email.smtp-auto-tls                      | 0                                                                                                                                                                 |                                        |
| system.email.smtp-host                          | -                                                                                                                                                                 |                                        |
| system.email.smtpdebug                          | 0                                                                                                                                                                 |                                        |
| system.email.subject-prefix                     | [i-doit]                                                                                                                                                          |                                        |
| system.email.username                           | -                                                                                                                                                                 |                                        |
| system.last-change                              | 1689077222                                                                                                                                                        |                                        |
| system.login.welcome-message                    | -                                                                                                                                                                 |                                        |
| system.security.csrf                            | 1                                                                                                                                                                 |                                        |
| system.show-proc-time                           | 0                                                                                                                                                                 |                                        |
