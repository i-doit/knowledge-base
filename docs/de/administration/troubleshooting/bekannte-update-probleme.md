---
title: Bekannte update Probleme
description: Bekannte Probleme beim Update
icon: material/update
status: updated
lang: de
---

In diesem Artikel werden wir alle bekannten Probleme beim Update von oder auf eine bestimmte i-doit Version auflisten.

## Version 33

Es kann vorkommen, dass nach dem update einige Funktionen verschwinden. Wie zum Beispiel die Update Funktion oder die LDAP Funktion. Um das Problem zu lösen muss in der Datei `.../i-doit/src/config.inc.php`
der Wert `$g_is_cloud = '0'` gesetzt werden.

Es gibt noch weitere Variablen die geprüft werden sollten wie zum Beispiel:

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

## Version 25 - 28

Wird der Updater verwendet, zeigt dieser **v30** als nächste Version an, was ein Fehler ist.
Verwende in diesem Fall den Hotfix oder bereite das Update manuell vor, indem das v29-Updatepaket in den i-doit-Ordner entpackt wird.
Oder entpacke den entsprechenden Hotfix, je nach i-doit Version, [Hotfix-Archiv](../hotfixes/hotfix-archiv/index.md).

## Dateien können nicht kopiert werden

Wenn bei **4. File-Update** die Meldung `A problem occurred during update:` angezeigt wird, liegt dies häufig an fehlenden Schreibberechtigungen auf dem Dateisystem.
In diesem Fall nutzen bitte, passend zum verwendeten Betriebssystem und Webserver Benutzer, den jeweiligen Befehl im die Rechte für die i-doit Dateien zu setzen:

Wir gehen von einer "standard" installation aus, so wie unterhalb von [Installation](../../installation/index.md) beschrieben.

=== "Debian/Ubuntu"

    ```sh
    cd /var/www/html/i-doit/
    sudo chown www-data:www-data -R .
    sudo find . -type d -name \* -exec chmod 775 {} \;
    sudo find . -type f -exec chmod 664 {} \;
    ```

=== "Red Hat Enterprise Linux"

    ```sh
    cd /var/www/html/i-doit/
    sudo chown apache:apache -R .
    sudo find . -type d -name \* -exec chmod 775 {} \;
    sudo find . -type f -exec chmod 664 {} \;
    ```

=== "Suse Linux Enterprise Server"

    ```sh
    cd /var/www/html/i-doit/
    sudo chown wwwrun:www -R .
    sudo find . -type d -name \* -exec chmod 775 {} \;
    sudo find . -type f -exec chmod 664 {} \;
    ```

=== "Microsoft Windows Server"

    Spezifische Datei- und Verzeichnisrechte sind in der Regel nicht zu setzen.
