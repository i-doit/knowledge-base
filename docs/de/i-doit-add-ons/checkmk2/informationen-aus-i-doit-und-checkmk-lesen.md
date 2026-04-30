---
title: "Informationen aus i-doit und Checkmk lesen"
description: "Die folgenden Befehle geben dir einen schnellen Überblick über deine i-doit- und Checkmk-Konfiguration."
icon:
status:
lang: de
---
# Informationen aus i-doit und Checkmk lesen

Die folgenden Befehle geben dir einen schnellen Überblick über deine i-doit- und Checkmk-Konfiguration. Sie sind sehr nuetzlich für Debugging- und Testzwecke, ohne deine Daten zu verändern.

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

## i-doit Objekte

Liste die i-doit-Objekte mit dem Befehl fetch-objects auf:

```shell
idoitcmk fetch-objects
```

Hole alle verfügbaren Informationen über i-doit-Objekte:

```shell
idoitcmk fetch-objects -v
```

Gib --help für Kommandozeilenoptionen ein, um diese Objekte zu filtern.

## Checkmk-Hosts

Liste die Checkmk-Hosts mit dem Befehl fetch-hosts auf:

```shell
idoitcmk fetch-hosts
```

Hole alle verfügbaren Informationen über Checkmk-Hosts:

```shell
idoitcmk fetch-hosts -v
```

Gib --help für Kommandozeilenoptionen ein, um diese Hosts zu filtern.

Hole alle Hosts, aber ohne "effektive" Attribute, die von Regelsätzen, Ordnern usw. geerbt werden:

```shell
idoitcmk fetch-hosts -v -s check_mk.webAPI.effectiveAttributes=false
```

## Objekte und Hosts vergleichen

Der Befehl [match](./abgleich-von-objekten-aus-i-doit-mit-hosts-aus-checkmk.md) vergleicht Objekte aus i-doit mit Hosts aus Checkmk und gibt detaillierte Berichte aus.
