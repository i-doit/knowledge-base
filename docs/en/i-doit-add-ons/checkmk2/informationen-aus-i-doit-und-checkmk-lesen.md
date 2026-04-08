---
title: "Read Information from i-doit and Checkmk"
description: "The following commands give you a quick overview of your i-doit and Checkmk configuration."
icon:
status:
lang: en
---
# Read Information from i-doit and Checkmk

The following commands give you a quick overview of your i-doit and Checkmk configuration. They are very useful for debugging and testing purposes without changing your data.

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

## i-doit Objects

List the i-doit objects with the fetch-objects command:

```shell
idoitcmk fetch-objects
```

Fetch all available information about i-doit objects:

```shell
idoitcmk fetch-objects -v
```

Enter --help for command-line options to filter these objects.

## Checkmk Hosts

List the Checkmk hosts with the fetch-hosts command:

```shell
idoitcmk fetch-hosts
```

Fetch all available information about Checkmk hosts:

```shell
idoitcmk fetch-hosts -v
```

Enter --help for command-line options to filter these hosts.

Fetch all hosts, but without "effective" attributes inherited from rulesets, folders, etc.:

```shell
idoitcmk fetch-hosts -v -s check_mk.webAPI.effectiveAttributes=false
```

## Match Objects and Hosts

The [match](./abgleich-von-objekten-aus-i-doit-mit-hosts-aus-checkmk.md) command compares objects from i-doit with hosts from Checkmk and generates detailed reports.
