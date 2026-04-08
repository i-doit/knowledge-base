---
title: Verwendung
description: "Fuehre einfach die Anwendung aus, um einige grundlegende Informationen auszugeben:"
icon:
status:
lang: de
---
# Verwendung

Führe einfach die Anwendung aus, um einige grundlegende Informationen auszugeben:

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

```shell
idoitcmk
```

## Hilfe

Jeder Befehl hat seine eigene Verwendung. Entweder führst du

```shell
idoitcmk help COMMAND
```

oder

```shell
idoitcmk COMMAND --help
```

aus.

## Versionsinformationen

Welche Version von idoitcmk benutzt du? Führe einfach aus:

```shell
idoitcmk --version
```

## Alle Befehle auflisten

Wenn du wissen willst, welche Befehle verfügbar sind, kannst du eine vollständige Liste ausgeben:

```shell
idoitcmk list
```

## Benutzerinteraktion

Bevor diese Anwendung Daten ändert, wird sie dich um Erlaubnis bitten. Zum Beispiel:

***17 Hosts in Check_MK werden aktualisiert***
***Möchtest du fortfahren? [Y|n]:***

Der Standardwert ist in Grossbuchstaben hervorgehoben (Y), sodass du einfach Enter drücken kannst, um fortzufahren.

Wenn du die Ausführung ohne Benutzerinteraktion automatisieren möchtest, verwende die Option -y oder --yes:

```shell
idoitcmk push --yes
```

## Abrufen von Statusinformationen

Wenn du sicherstellen willst, dass alles in Ordnung ist, führe verschiedene Tests durch:

```shell
idoitcmk status
```

Die folgenden Tests sind enthalten:

*   PHP-Umgebung
*   Verbindung zur i-doit JSON-RPC API
*   Verbindung zur Checkmk Web API
*   Verbindung zur Checkmk Livestatus API

## Verbosity

Während der Ausführung gibt diese Anwendung mehr oder weniger nuetzliche Informationen aus. Du kannst den gewünschten Grad der Ausführlichkeit mit zwei Optionen einstellen. Erhöhe die Ausführlichkeit mit -v oder --verbose, verringere sie mit -q oder --quiet. Diese Protokollstufen sind verfügbar:

| Level       | Farbe | Option                       | Beschreibung                                                   |
| ----------- | ----- | ---------------------------- | -------------------------------------------------------------- |
| Fatal error | Rot   | Immer an                     | Sofortiger Abbruch der Ausführung                             |
| Error       | Rot   | Immer an                     | Etwas Wichtiges ist schiefgelaufen                             |
| Warning     | Gelb  | Immer an                     | Überspringen eines Schrittes aufgrund mangelnder Informationen |
| Notice      | Gelb  | Deaktiviert mit -q/--quiet   | Alles ist in Ordnung, aber du solltest Folgendes beachten      |
| Info        | Gruen | Deaktiviert mit -q/--quiet   | Nur eine Information, was los ist                              |
| Debug       | Grau  | Aktiviert mit -v/--verbose   | Alles ausgeben                                                 |

Deaktiviere die farbige Ausgabe mit der Option --no-colors. Dies ist sehr nuetzlich zur Protokollierung, zum Beispiel:

```shell
idoitcmk push --verbose --no-colors --yes > idoitcmk.log
```

## Superuser-Rechte

Hinweis: Es ist nicht notwendig, dieses Skript in einer Produktionsumgebung mit Superuser-Rechten wie root auszuführen.
