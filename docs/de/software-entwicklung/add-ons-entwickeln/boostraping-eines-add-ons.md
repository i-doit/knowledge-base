---
title: "Bootstrapping eines Add-ons (init.php)"
description: "In erster Ebene des Add-on-Verzeichnisses muss eine init.php\\-Datei liegen."
icon:
status:
lang: de
---
# Bootstrapping eines Add-ons (init.php)

In erster Ebene des Add-on-Verzeichnisses muss eine init.php\-Datei liegen. Diese wird vom i-doit-System automatisch inkludiert, um das Add-on im Kern zu registrieren. Vom Entwickler sollte die init.php dazu genutzt werden, um Add-on-spezifische Vorbereitungen zu treffen. Dazu gehört unter anderem das Definieren von Konstanten oder das Registrieren der Autoloader und Routen. Ebenso können hier Callbacks via "Signal-Slot"-Komponente registriert werden.

Weiterhin können innerhalb der init.php\-Report-Views und Dashboard-Widgets registriert werden, damit i-doit an den entsprechenden Stellen darauf zugreifen kann.

Die init.php muss so wenig Logik wie möglich mitliefern, damit die Performance nicht darunter leidet. Die init.php\-Dateien aller Add-ons werden bei jedem Request durchlaufen!

## Prüfen, ob das Add-on aktiv ist

Die erste Codeanweisung innerhalb der init.php muss prüfen, ob das Add-on aktiv ist. Nur dann darf weiterer Code ausgeführt werden!

Der nötige Code dazu sieht folgendermaßen aus:

```php
if (isys_module_manager::instance()->is_active('example'))
{
    // Hier werden nun Konstanten, Autoloader und Events definiert bzw. registriert.
}
```

**Alle weiteren Anweisungen dürfen lediglich innerhalb dieser Überprüfung stattfinden!**

## Autoloader PSR-4 und Legacy

### PSR-4

Für PHP-Klassen, die nach PSR-4 erstellt werden, bietet i-doit eine einfache Möglichkeit, den Add-on-Namespace in den Autoloader zu implementieren:

```php
// Adding the PSR-4 autoloader.
\idoit\Psr4AutoloaderClass::factory()->addNamespace('idoit\Module\Example', __DIR__ . '/src/');
```

### Legacy Code

Für PHP-Klassen im Legacy-Format (wie z.B. die Rechtesystem- oder Kategorie-Klassen) muss der Classmap-Autoloader verwendet werden.
Die Classmap kann über einen internen Command erstellt werden, der zur Verfügung steht wenn man das i-doit Repository geklont hat:

```shell
$ php console.php internal:generate-classmap --add-on=<identifier> --skip-psr4
```

Durch den Identifier weiß der Command in welches Verzeichnis die Classmap geschrieben werden soll, das `--skip-psr4` flag
kann optional gesetzt werden um PSR-4 Klassen zu überspringen. Das Ergebnis des Commands sollte eine Datei sein, die im Add-on
Verzeichnis liegt: `src/classes/modules/<identifier>/classmap.php`.

Anschließend kann diese Datei folgendermaßen eingebunden werden:

```php
// Add classmap for legacy code.
\idoit\Component\Autoloader::appendClassmap(require_once __DIR__ . '/classmap.php');
```

## Einstellungen für [Mandanten-Name] erweitern

Die dargestellten Einstellungen für [Mandanten-Name] unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name]** können mittels Add-on erweitert werden. Weitere Informationen hierzu befinden sich im Artikel [Systemeinstellungen erweitern](systemeinstellungen-erweitern.md).
