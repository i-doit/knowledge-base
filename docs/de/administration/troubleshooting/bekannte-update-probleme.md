---
title: Bekannte update Probleme
description: Bekannte Probleme beim Update
icon: material/update
status: updated
lang: de
---

Dieser Artikel listet alle bekannten Probleme beim Update von oder auf eine bestimmte i-doit-Version.

## Version 39

Nach dem Update auf 39 lässt sich im [Add-on- & Abonnement-Center](../add-on-and-subscription-center.md) kein Add-on installieren oder aktualisieren. Es erscheint diese Fehlermeldung:

```log
Invalid add-on identifier in package.json
```

Spiele diesen Hotfix in der **39** ein, damit Installation und Update von Add-ons wieder funktionieren:

[i-doit_39_hotfix_ID-12679_417db18.zip :material-file-download:](../../assets/downloads/hotfixes/39/i-doit_39_hotfix_ID-12679_417db18.zip){ .md-button .md-button--primary }

---

Wenn nach dem Update auf 39 Seiten mit `HTTP 500` abbrechen und im Webserver-Log diese Fehlermeldung steht:

```log
PHP Fatal error:  Declaration of idoit\\Component\\isys_component_sessionProxyEebb398::include_mandator_cache() must be compatible with isys_component_session::include_mandator_cache(): void in /var/www/html/temp/di_container_cache_mandator_1.php on line 2628
```

Das passiert zum Beispiel nach einem Update über das [Add-on- & Abonnement-Center](../add-on-and-subscription-center.md). Dann bricht auch der Updater mit `HTTP 500` ab. Die Cache-Datei im Verzeichnis `temp` stammt noch aus Version 38. Leere das Verzeichnis `temp` und starte den Webserver neu. Beim nächsten Aufruf wird der Cache neu erzeugt:

```sh
sudo rm -rf /var/www/html/temp/*
sudo systemctl restart apache2
```

Nutzt du PHP-FPM, starte zusätzlich den PHP-FPM-Dienst neu. Schließe das Update danach mit dem Updater ab.

## Version 34

SM-View `2024.3.0.2708` ist nicht kompatibel mit i-doit 34. Nach dem Update wird ein `HTTP 500`-Serverfehler geworfen. [Deaktiviere das Add-on](../../i-doit-add-ons/index.md#de-aktivieren) im [Admin-Center](../admin-center.md), um weiterarbeiten zu können. Die Fehlermeldung im Webserver-Log sieht so aus:

```log
PHP Fatal error: Declaration of Symfony\Component\HttpFoundation\ResponseHeaderBag::all(?string $key = null) must be compatible with Symfony\Component\HttpFoundation\HeaderBag::all(?string $key = null): array in /var/www/html/src/classes/modules/shd_smview_connect/vendor/symfony/http-foundation/ResponseHeaderBag.php on line 91
```

---

Wenn beim Update auf Version 35 folgende Fehlermeldung geloggt wird:

```log
Fatal error: Uncaught ArgumentCountError: 4 arguments are required, 2 given in /var/www/html/i-doit/updates/versions/35/migration/migrate-system-crypto-hash-to-tenant.php:28 Stack trace: #0 /var/www/html/i-doit/updates/versions/35/migration/migrate-system-crypto-hash-to-tenant.php(28): sprintf() #1 /var/www/html/i-doit/updates/classes/isys_update_migration.class.php(109): include('...') #2 /var/www/html/i-doit/updates/update.inc.php(1050): isys_update_migration->migrate() #3 /var/www/html/i-doit/src/hypergate.inc.php(229): include_once('...') #4 /var/www/html/i-doit/index.php(263): include_once('...') #5 {main} thrown in /var/www/html/i-doit/updates/versions/35/migration/migrate-system-crypto-hash-to-tenant.php on line 28
```

Benutze diesen Hotfix in der **34**, um auf die **35** aktualisieren zu können.

[i-doit_34_ID-11978_migration-of-crypto-hashes.zip :material-file-download:](../../assets/downloads/hotfixes/34/i-doit_34_ID-11978_migration-of-crypto-hashes.zip){ .md-button .md-button--primary }

## Version 33

Nach dem Update können einige Funktionen verschwinden, z. B. die Update-Funktion oder die LDAP-Funktion. Setze in der Datei `.../i-doit/src/config.inc.php` den Wert `$g_is_cloud = '0'`.

Prüfe auch die folgenden Variablen:

=== "Richtig"

    ```php
    $g_enable_gui_update = '1';
    $g_is_cloud = '0';
    $g_active_features = [''];
    ```

=== "Falsch"

    ```php
    $g_enable_gui_update = '%config.admin.enable_gui_update%';
    $g_is_cloud = '%config.cloud.active%';
    $g_active_features = ['%config.active_features.list%'];
    ```

## Version 28

Wenn du den Hotfix [i-doit_28_hotfix_ID-10745.zip](../hotfixes/hotfix-archiv/v28.md#wrong-i-doit-version-is-downloaded-at-updater) installiert hast, wird die neue Version angezeigt. Ein Klick auf **Next** hat jedoch keine Wirkung. In der Entwicklerkonsole des Browsers (F12) erscheint folgende Fehlermeldung:
<!-- cSpell:disable -->
```shell
Uncaught ReferenceError: open29NoticeHandler is not defined
at HTMLInputElement.<anonymous> (index.php?load=update:399:17)
at klass.handleEvent (prototype.js:7182:34)
at HTMLInputElement.<anonymous> (prototype.js:7266:15)
```
<!-- cSpell:enable -->
Führe folgende Schritte aus:

1. Führe das Update auf Version **28** erneut mit dem Updater aus.
2. Lade die Update-ZIP der Version **29** über das [Kundenportal](../kundenportal.md) herunter.
3. Entpacke die ZIP im i-doit-Ordner, wie [hier beschrieben](../../wartung-und-betrieb/update-einspielen.md#update-uber-die-konsole-vorbereiten).
4. Führe das Update auf Version **29** mit dem Updater aus.

## Version 25 - 28

Der Updater zeigt fälschlicherweise **v30** als nächste Version an. Behebe das Problem auf einem der folgenden Wege:

-   Entpacke das v29-Updatepaket manuell in den i-doit-Ordner.
-   Verwende den passenden Hotfix aus dem [Hotfix-Archiv](../hotfixes/hotfix-archiv/index.md).

## Dateien können nicht kopiert werden

Wenn bei **4. File-Update** die Meldung `A problem occurred during update:` erscheint, fehlen häufig Schreibberechtigungen auf dem Dateisystem.

Setze die Dateiberechtigungen passend zu deinem Betriebssystem und Webserver-Benutzer. Die folgenden Befehle gehen von einer Standardinstallation aus, wie unter [Installation](../../installation/index.md) beschrieben.

=== "Debian/Ubuntu"

    ```sh
    cd /var/www/html/
    sudo chown www-data:www-data -R .
    sudo find . -type d -name \* -exec chmod 775 {} \;
    sudo find . -type f -exec chmod 664 {} \;
    ```

=== "Red Hat Enterprise Linux"

    ```sh
    cd /var/www/html/
    sudo chown apache:apache -R .
    sudo find . -type d -name \* -exec chmod 775 {} \;
    sudo find . -type f -exec chmod 664 {} \;
    ```

=== "SUSE Linux Enterprise Server"

    ```sh
    cd /var/www/html/
    sudo chown wwwrun:www -R .
    sudo find . -type d -name \* -exec chmod 775 {} \;
    sudo find . -type f -exec chmod 664 {} \;
    ```

=== "Microsoft Windows Server"

    Spezifische Datei- und Verzeichnisrechte sind in der Regel nicht zu setzen.
