---
title: Systemeinstellungen erweitern
description: Systemeinstellungen erweitern
icon:
status:
lang: de
---

# Systemeinstellungen erweitern

i-doits Systemeinstellungen sind ein hierarchisches System kaskadierender Einstellungsparameter.  
Diese Hierarchie wird aus insgesamt drei verschiedenen Ebenen zusammengesetzt.  
Alle verfügbaren Einstellungsparameter können innerhalb dieser Ebenen existieren und werden je nach Bedarf gelesen.

Die erste Instanz stellt die benutzerspezifische Ebene dar.  
In dieser Ebene werden unmittelbar vom Benutzer vorgenommene Parameter hinterlegt.  
Wird ein Parameter abgerufen, der vom Benutzer nicht gepflegt wurde, stellt die *mandantenweite* Ebene einen Standardwert bereit.  
Je nach Parameter kann es sein, dass die Bereitstellung einer mandantenspezifischen Einstellung keinen Sinn macht.  
Daher wird in letzter Instanz der systemweite Einstellungspool abgerufen.

Dieses hierarchische System stellt sicher,  
dass i-doit hochgradig personalisierbar bleibt und weiterhin einen leichten Einstieg mit bestmöglichen Standardeinstellungen bietet.

Die i-doit-Systemeinstellungen können von Add-ons um eigene Konfigurationen erweitert werden.  
Dadurch wird auch automatisch das Formular in der GUI unter  
**Verwaltung → {mandant} Verwaltung → Einstellungen für {mandant}** erweitert.  
Falls einzelne Einstellungen nicht in der GUI dargestellt werden sollen, müssen sie nicht registriert,  
sondern lediglich im Code *benutzt* werden.  
Solche impliziten Einstellungen können nur über die Experteneinstellungen konfiguriert werden.

Systemeinstellungen können für drei Schichten definiert werden: System, Mandant oder Benutzer.

Der dahinterliegende Code ist nahezu identisch und unterscheidet sich nur in der genutzten Klasse:

* Systemweite Einstellungen: `isys_settings`
* Mandantenweite Einstellungen: `isys_tenantsettings`
* Einstellungen je Benutzer: `isys_usersettings`

## Einstellungen auslesen

Um system-, mandanten- oder benutzerspezifische Einstellungen zu lesen, kann der folgende Code verwendet werden:

```php
// System-Einstellung:
$value = isys_settings::get('example.key', 'Default value');

// Mandanten-Einstellung:
$value = isys_tenantsettings::get('example.key', 'Default value');

// Benutzer-Einstellung:
$value = isys_usersettings::get('example.key', 'Default value');
```

Die Klassen sind auch im Dependency-Injection-Container verfügbar:

```php
// System-Einstellung:
$value = isys_application::instance()->container->get('settingsSystem')->get('example.key', 'Default value');

// Mandanten-Einstellung:
$value = isys_application::instance()->container->get('settingsTenant')->get('example.key', 'Default value');

// Benutzer-Einstellung:
$value = isys_application::instance()->container->get('settingsUser')->get('example.key', 'Default value');
```

## Einstellungen in der GUI erweitern

Um Einstellungen innerhalb der Oberfläche zu erweitern, muss ab i-doit 36 das Event-System genutzt werden.
Für jede Ebene existiert dabei ein eigenes Event:

* `idoit\Event\System\Settings\ExtendSystemSettings` zum Erweitern von Systemeinstellungen
* `idoit\Event\System\Settings\ExtendTenantSettings` zum Erweitern von Mandanteneinstellungen
* `idoit\Event\System\Settings\ExtendUserSettings` zum Erweitern von Benutzereinstellungen

Durch das Registrieren von Events kann die Performance geschont werden,
da zum Beispiel ressourcenintensive Prozesse im Callback nur dann ausgeführt werden, wenn es wirklich notwendig ist,
anstatt bei jedem Request.

```php
use idoit\Event\System\Settings\ExtendTenantSettings;

// In der Add-on 'init.php'.

if (isys_module_manager::instance()->is_active('example_addon')) {
    // ...
    
    isys_application::instance()->container->get('event_dispatcher')
        ->addListener(ExtendTenantSettings::NAME, ['isys_module_example', 'extendTenantSettings']);
        
    // ...
}
```

Der Callback muss eine **statische öffentliche Methode** sein.
Als Parameter wird das Event übergeben.
Innerhalb des Codes können die Einstellungen mit Objekten ergänzt werden:

```php
use idoit\Component\Settings\SettingsCollection;
use idoit\Component\Settings\Types\SelectSetting;
use idoit\Event\System\Settings\ExtendTenantSettings;

class isys_module_example 
{
    // ...

    public static function extendTenantSettings(ExtendTenantSettings $event): void
    {
        $event->addSettingsCollection(
            new SettingsCollection('Überschrift für den Einstellungs-Block', [
                new SelectSetting(
                    'example.key',
                    'Name der Einstellung',
                    'Detaillierte Beschreibung der Einstellung',
                    '0',
                    [
                        '0' => 'LC__UNIVERSAL__NO',
                        '1' => 'LC__UNIVERSAL__YES'
                    ]
                )
            ])
        );
    }
}
```

Einstellungen können um neue *Settings-Collections* ergänzt werden.
Diese bestehen aus einem Titel und einem Array an `Setting`-Klassen.
Zum Stand von i-doit 36 existieren die folgenden Setting-Typen:

* `idoit\Component\Settings\Types\IntSetting` – für Zahlenwerte
* `idoit\Component\Settings\Types\PasswordSetting` – für Passwörter
* `idoit\Component\Settings\Types\SelectSetting` – für ein Dialogfeld mit definierten Inhalten
* `idoit\Component\Settings\Types\TextareaSetting` – für ein mehrzeiliges Textfeld
* `idoit\Component\Settings\Types\TextSetting` – für ein einzeiliges Textfeld

Jeder dieser Typen erbt von `idoit\Component\Settings\Types\AbstractSetting` und erhält dadurch die folgenden Standardparameter:

* `protected string $key;` – der Schlüssel der Einstellung, der auch zum Abfragen benutzt werden muss
* `protected string $name;` – der Name der Einstellung, der in der GUI dargestellt wird
* `protected ?string $description = null;` – die (optionale) Erklärung der Einstellung, die in der GUI dargestellt wird
* `protected mixed $default = null;` – der (optionale) Standardwert, der in der GUI dargestellt wird

Verschiedene Setting-Typen können, wenn nötig, noch eigene Parameter definieren.

Innerhalb des Callbacks können beliebig viele *Settings-Collections* hinzugefügt werden.

**Wichtig!** Die Event-Callbacks werden nur dann aufgerufen, wenn die entsprechende GUI aufbereitet wird.
Dadurch wird im laufenden Betrieb die Performance von i-doit nicht negativ beeinflusst.
