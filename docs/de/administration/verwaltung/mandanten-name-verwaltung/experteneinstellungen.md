---
title: Experteneinstellungen
description: Mandanten-spezifische Experteneinstellungen in der i-doit Verwaltung
icon:
status:
lang: de
---

# Experteneinstellungen

Die Experteneinstellungen unter **Verwaltung → [Mandanten-Name] Verwaltung → Experteneinstellungen** enthalten mandanten-spezifische Konfigurationsschlüssel. Jede Einstellung besteht aus einem **Key**, einem **Value** und einem **Type** (Tenant-wide oder User).

!!! info "Aufteilung seit i-doit v25"
    Seit Version 25 sind die Experteneinstellungen auf zwei Orte aufgeteilt:

    - **Hier** (Verwaltung → Experteneinstellungen): Einstellungen die nur den **aktuellen Mandanten** betreffen — API-Verhalten, GUI-Darstellung, interne Caches.
    - **[Admin Center → System settings](../../admin-center.md)**: Einstellungen die die **gesamte Installation** betreffen — Login, Proxy, SMTP, Sicherheit, Rechtesystem. Dort findest du auch die system-weiten Experteneinstellungen über den Link "Expert settings" oben rechts.

    Wenn du eine Einstellung suchst die hier nicht aufgeführt ist (z.B. `auth.active`, `security.passwort.minlength`, `cmdb.quickpurge`), findest du sie im [Admin Center](../../admin-center.md).

[![Experteneinstellungen](../../../assets/images/de/administration/mandanten-verwaltung/experteneinstellungen.png)](../../../assets/images/de/administration/mandanten-verwaltung/experteneinstellungen.png)

!!! warning "Vor jeder Änderung: Backup erstellen!"
    Erstelle **immer** ein [Backup](../../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) bevor du Werte änderst. Am Ende der Tabelle kannst du über das Eingabefeld neue Schlüssel hinzufügen.

## Mandanten-Einstellungen (Tenant-wide)

Diese Einstellungen gelten für alle Benutzer des aktuellen Mandanten.

### API-Verhalten

| Key | Standard | Was passiert wenn du es änderst? |
|-----|----------|----------------------------------|
| `api.status` | `1` | Bei `0` wird die [JSON-RPC API](../../../i-doit-add-ons/api/index.md) für diesen Mandanten **deaktiviert**. Alle API-Anfragen werden mit einem Fehler beantwortet. Externe Systeme (JDisc, Monitoring, Ticketsystem) die über die API angebunden sind, verlieren sofort die Verbindung. |
| `api.validation` | `1` | Bei `0` werden API-Eingaben nicht validiert. Das beschleunigt Massenimporte, kann aber zu inkonsistenten Daten führen — z.B. Text in einem Zahlenfeld oder ungültige Datumsformate. Nur temporär für Migrationen deaktivieren. |
| `api.log-level` | `100` | Steuert die Ausführlichkeit des API-Logs. `100` = DEBUG (alles loggen), `400` = ERROR (nur Fehler). In Produktion auf `200` (INFO) oder `300` (WARNING) setzen, um das Log-Volumen zu reduzieren. |

### GUI-Darstellung

| Key | Standard | Was passiert wenn du es änderst? |
|-----|----------|----------------------------------|
| `gui.category.padding` | Zeilenabstände | Steuert den vertikalen Abstand zwischen Feldern in Kategorien. Die vier Zeilen (title, type, options, default) gehören zusammen — ändere nur den `default`-Wert. |
| `gui.tree.spacing` | Abstände in Menübäumen | Steuert den Abstand zwischen Einträgen in der linken Sidebar (Standortbaum, Kategorie-Baum). Kleinere Werte = kompaktere Darstellung, aber schwerer zu treffen. |
| `gui.category.spacer` | Abstandhalter darstellen | Bei `1` werden Trennlinien zwischen Feldgruppen in Kategorien angezeigt. Bei `0` wirkt die Kategorie kompakter, aber weniger strukturiert. |
| `gui.default-tree-view` | `1008` | Bestimmt welcher Baum in der linken Sidebar standardmäßig angezeigt wird. `1008` = Objektsicht. Ändere diesen Wert nicht, es sei denn du weißt welche View-ID du setzen willst. |
| `gui.tree.hide-empty-categories` | `1` | Bei `1` werden Kategorien ohne Einträge in der Sidebar ausgeblendet. Bei `0` werden alle zugeordneten Kategorien angezeigt — auch leere. Hilfreich wenn Benutzer nicht finden wo sie Daten eingeben sollen, weil die Kategorie "verschwunden" ist. |

### Interne Einstellungen

| Key | Standard | Was passiert wenn du es änderst? |
|-----|----------|----------------------------------|
| `cmdb.refresh-table-configurations` | `0` | Bei `1` werden die Tabellenkonfigurationen (Objektlisten-Spalten) beim nächsten Laden neu aufgebaut. Nützlich nach einem Update wenn Spalten fehlen oder falsch dargestellt werden. Setzt sich nach der Ausführung automatisch auf `0` zurück. |
| `cmdb.renew-properties` | `0` | Bei `1` werden die internen Property-Definitionen neu generiert. Wie `cmdb.refresh-table-configurations` ein einmaliger Reparaturmechanismus der sich selbst zurücksetzt. |
| `synetics_admin.news.subscription-and-addons` | `1` | Bei `0` werden die News-Hinweise zu Add-ons und Subscriptions im Dashboard ausgeblendet. |

### CMDB-Export

| Key | Standard | Was passiert wenn du es änderst? |
|-----|---------|----------------------------------|
| `cmdb.cmdb-export.allow-save-on-filesystem` | nicht gesetzt (`0`) | Bei `1` bietet der CMDB-Export wieder die Option **Exportdaten speichern unter ...** an. Die Exportdatei wird dann immer als XML im Verzeichnis `temp` der i-doit-Installation gespeichert. Solange der Schlüssel fehlt oder auf `0` steht, ist die Option ausgeblendet und ein Export mit dieser Option wird stattdessen heruntergeladen. Existiert der Schlüssel noch nicht, lege ihn als neuen Schlüssel an. In i-doit Cloud nicht verfügbar. |

## Benutzer-Einstellungen (User)

Diese Einstellungen gelten nur für den aktuell angemeldeten Benutzer.

| Key | Standard | Was passiert wenn du es änderst? |
|-----|----------|----------------------------------|
| `gui.leftcontent.width` | `235` | Breite der linken Sidebar in Pixeln. Erhöhe den Wert wenn lange Objektnamen abgeschnitten werden, z.B. auf `300` oder `350`. Jeder Benutzer kann seinen eigenen Wert haben. |
| `gui.login.display` | `user-name` | Wie dein Name oben rechts angezeigt wird: `user-name` (lfischer), `full-name` (Dr. Leonard Fischer), `full-name-plus` (Dr. Leonard Fischer (lfischer)), `first-last-name-abbreviation` (L. Fischer). |
| `workflows.max-checklist-entries` | `7` | Maximale Einträge in Workflow-Checklisten. |
