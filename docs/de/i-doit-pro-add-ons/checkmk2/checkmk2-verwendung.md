Führen Sie einfach die Anwendung aus, um einige grundlegende Informationen zu drucken:

[?](#)

`idoitcmk`

Hilfe
-----

Jeder Befehl hat seine eigene Verwendung. Entweder führen Sie

[?](#)

`idoitcmk help COMMAND`

oder

[?](#)

`idoitcmk COMMAND --help`

Versionsinformationen
---------------------

Welche Version von `idoitcmk` benutzen Sie? Führen Sie einfach

[?](#)

`idoitcmk --version`

Alle Befehle auflisten
----------------------

Wenn Sie wissen wollen, welche Befehle verfügbar sind, können Sie eine vollständige Liste mit:

[?](#)

`idoitcmk list`

Benutzerinteraktion
-------------------

Bevor diese Anwendung Daten ändert, wird sie den Benutzer um Erlaubnis bitten. Zum Beispiel:

```
17 Hosts in Check_MK werden aktualisiert
Möchten Sie fortfahren? [Y|n]:

```

Der Standardwert ist in Großbuchstaben hervorgehoben (`Y`), so dass Sie einfach Enter drücken können, um fortzufahren.

Wenn Sie die Ausführung ohne Benutzerinteraktion automatisieren möchten, verwenden Sie die Option `-y` oder `--yes`:

[?](#)

`idoitcmk push --``yes`

Abrufen von Statusinformationen
-------------------------------

Wenn Sie sicherstellen wollen, dass alles in Ordnung ist, führen Sie verschiedene Tests durch:

[?](#)

`idoitcmk status`

Die folgenden Tests sind enthalten:

*   PHP-Umgebung
*   Verbindung zur i-doit JSON-RPC API
*   Verbindung zur checkmk Web API
*   Verbindung zu checkmk Livestatus API

Verbosity
---------

Während der Ausführung wird diese Anwendung mehr oder weniger nützliche Informationen ausgeben. Sie können den gewünschten Grad der Verbosity mit zwei Optionen einstellen. Erhöhen Sie die Verbosity mit `-v` oder `--verbose`, verringern Sie sie mit `-q` oder `--quiet`. Diese Protokollstufen sind verfügbar:

| Level | Farbe | Option | Beschreibung |
| --- | --- | --- | --- |
| Level | Farbe | Option | Beschreibung |
| --- | --- | --- | --- |
| Fatal error | Rot | Immer an | Sofortiger Abbruch der Ausführung |
| Error | Rot | Immer an | Etwas Wichtiges ist schief gelaufen |
| Warning | Gelb | Immer an | Überspringen eines Schrittes aufgrund mangelnder Informationen |
| Notice | Gelb | Deaktiviert mit `-q`/`--quiet` | Alles ist in Ordnung, aber Sie sollten Folgendes beachten |
| Info | Grün | Deaktiviert mit `-q`/`--quiet` | Nur eine Information, was los ist |
| Debug | Grau | Deaktiviert mit `-v`/`--verbose` | Drucken Sie alles aus, was Sie haben |

Deaktivieren Sie die farbige Ausgabe mit der Option `-no-colors`. Dies ist sehr nützlich für Protokollierungszwecke, zum Beispiel:

[?](#)

`idoitcmk push --verbose --no-colors --``yes` `> idoitcmk.log`

Superuser-Rechte
----------------

Hinweis: Es ist nicht notwendig, dieses Skript in einer Produktionsumgebung mit Superuser-Rechten wie `root` auszuführen.