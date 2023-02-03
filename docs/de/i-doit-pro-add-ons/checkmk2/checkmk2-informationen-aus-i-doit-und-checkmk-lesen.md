Die folgenden Befehle geben Ihnen einen schnellen Überblick über Ihre i-doit- und checkmk Konfiguration. Sie sind sehr nützlich für Debugging- und Testzwecke, ohne Ihre Daten zu verändern.

i-doit Objekte
--------------

Auflisten der i-doit Objekte mit dem Befehl `fetch-objects`:

[?](#)

`idoitcmk fetch-objects`

Holt alle verfügbaren Informationen über i-doit-Objekte:

[?](#)

`idoitcmk fetch-objects -``v`

Geben Sie `--help` für Kommandozeilenoptionen ein, um diese Objekte zu filtern.

Check\_MK-Hosts
---------------

Auflisten der checkmk Hosts mit dem Befehl `fetch-hosts`:

[?](#)

`idoitcmk fetch-hosts`

Holt alle verfügbaren Informationen über checkmk Hosts:

[?](#)

`idoitcmk fetch-hosts -``v`

Geben Sie `--help` für Kommandozeilenoptionen ein, um diese Hosts zu filtern.

Holt alle Hosts, aber ohne “effektive” Attribute, die von Regelsätzen, Ordnern, etc. geerbt werden:

[?](#)

`idoitcmk fetch-hosts -``v` `-s check_mk.webAPI.effectiveAttributes=``false`

Objekte und Hosts vergleichen
-----------------------------

Der Befehl [`match`](/pages/viewpage.action?pageId=75989122) vergleicht Objekte aus i-doit mit Hosts aus checkmk und gibt detaillierte Berichte aus.