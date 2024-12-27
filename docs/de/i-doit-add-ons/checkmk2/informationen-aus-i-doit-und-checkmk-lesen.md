# Informationen aus i-doit und checkmk lesen

Die folgenden Befehle geben Ihnen einen schnellen Überblick über Ihre i-doit- und checkmk Konfiguration. Sie sind sehr nützlich für Debugging- und Testzwecke, ohne Ihre Daten zu verändern.

## i-doit Objekte

Auflisten der i-doit Objekte mit dem Befehl fetch-objects:

```shell
idoitcmk fetch-objects
```

Holt alle verfügbaren Informationen über i-doit-Objekte:

```shell
idoitcmk fetch-objects -v
```

Geben Sie --help für Kommandozeilenoptionen ein, um diese Objekte zu filtern.

## Check\_MK-Hosts

Auflisten der checkmk Hosts mit dem Befehl fetch-hosts:

```shell
idoitcmk fetch-hosts
```

Holt alle verfügbaren Informationen über checkmk Hosts:

```shell
idoitcmk fetch-hosts -v
```

Geben Sie --help für Kommandozeilenoptionen ein, um diese Hosts zu filtern.

Holt alle Hosts, aber ohne "effektive" Attribute, die von Regelsätzen, Ordnern, etc. geerbt werden:

```shell
idoitcmk fetch-hosts -v -s check_mk.webAPI.effectiveAttributes=false
```

## Objekte und Hosts vergleichen

Der Befehl [match](./abgleich-von-objekten-aus-i-doit-mit-hosts-aus-checkmk.md) vergleicht Objekte aus i-doit mit Hosts aus checkmk und gibt detaillierte Berichte aus.
