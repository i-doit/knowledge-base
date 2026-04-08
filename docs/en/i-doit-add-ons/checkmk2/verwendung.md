---
title: Usage
description: "Simply run the application to output some basic information:"
icon:
status:
lang: en
---
# Usage

Simply run the application to output some basic information:

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

```shell
idoitcmk
```

## Help

Each command has its own usage. Either run

```shell
idoitcmk help COMMAND
```

or

```shell
idoitcmk COMMAND --help
```



## Version information

Which version of idoitcmk are you using? Simply run:

```shell
idoitcmk --version
```

## List all commands

If you want to know which commands are available, you can output a complete list:

```shell
idoitcmk list
```

## User interaction

Before this application changes data, it will ask you for permission. For example:

***17 hosts in Check_MK will be updated***
***Do you want to continue? [Y|n]:***

The default value is highlighted in uppercase (Y), so you can simply press Enter to continue.

If you want to execute without user interaction, use the -y or --yes option:

```shell
idoitcmk push --yes
```

## Retrieving status information

If you want to make sure everything is in order, run various tests:

```shell
idoitcmk status
```

The following tests are included:

*   PHP environment
*   Connection to the i-doit JSON-RPC API
*   Connection to the Checkmk Web API
*   Connection to the Checkmk Livestatus API

## Verbosity

During execution, this application outputs more or less useful information. You can set the desired level of verbosity with two options. Increase verbosity with -v or --verbose, decrease it with -q or --quiet. These log levels are available:

| Level       | Color | Option                       | Description                                                   |
| ----------- | ----- | ---------------------------- | -------------------------------------------------------------- |
| Fatal error | Red   | Always on                    | Immediate abort of execution                                   |
| Error       | Red   | Always on                    | Something important went wrong                             |
| Warning     | Yellow | Always on                    | Skipping a step due to insufficient information               |
| Notice      | Yellow | Disabled with -q/--quiet    | Everything is fine, but you should note the following      |
| Info        | Green | Disabled with -q/--quiet     | Just information about what is going on                              |
| Debug       | Gray  | Enabled with -v/--verbose    | Output everything                                                 |

Disable colored output with the --no-colors option. This is very useful for logging, for example:

```shell
idoitcmk push --verbose --no-colors --yes > idoitcmk.log
```

## Superuser rights

Note: It is not necessary to run this script in a production environment with superuser rights like root.
