# Usage

Just run the application to print some basic information:

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

Which version of idoitcmk are the using? Just run

```shell
idoitcmk --version
```

## List all commands

If you want to know which commands are available you can get a complete list with:

```shell
idoitcmk list
```

## User interaction

Before this application will ever alter data it will asked the user for permission. For example:

17 hosts in Check_MK will be updated
Do you like to proceed? [Y|n]:

Default value is highlighted in upper-case (Y) so you can just hit enter to proceed.

If you like to automate execution without any user interaction use option -y or --yes:

```shell
idoitcmk push --yes
```

## Fetch status information

If you want to make sure everything is alright perform various tests:

```shell
idoitcmk status
```

The following tests are included:

*   PHP environment
*   Connection to i-doit JSON-RPC API
*   Connection to Checkmk Web API
*   Connection to Checkmk Livestatus API

## Verbosity

During execution this application will print out more or less useful information. You can set the preferred level of verbosity with two options. Increase verbosity with -v or --verbose, decrease it with -q or --quiet. These log levels are available:

| Level       | Color  | Option                   | Description                                      |
| ----------- | ------ | ------------------------ | ------------------------------------------------ |
| Fatal error | Red    | Always on                | Abort execution immediately                      |
| Error       | Red    | Always on                | Something important went wrong                   |
| Warning     | Yellow | Always on                | Skip a step due to lack of information           |
| Notice      | Yellow | Disable with -q/--quiet  | Everything is alright but you should notice this |
| Info        | Green  | Disable with -q/--quiet  | Just a information what is going on              |
| Debug       | Grey   | Enable with -v/--verbose | Print out everything you got                     |

Disable colored output with option --no-colors. This is very useful for logging purposes, for example:

```shell
idoitcmk push --verbose --no-colors --yes > idoitcmk.log
```

## Super-user rights

!!! info "Notice: There is no need to run this script in a production environment with super-user rights like root."
