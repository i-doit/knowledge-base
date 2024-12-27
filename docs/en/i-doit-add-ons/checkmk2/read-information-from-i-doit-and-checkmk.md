# Read information from i-doit and checkmk

The following commands will give you a fast overview about your i-doit and checkmk configuration. They are very useful for debugging and testing purposes without altering your data.

## i-doit objects

List i-doit objects with command fetch-objects:

```shell
idoitcmk fetch-objects
```

Fetch all available information about i-doit objects:

```shell
idoitcmk fetch-objects -v
```

Type --help for command-line options to filter these objects.

## checkmk hosts

List checkmk hosts with command fetch-hosts:

```shell
idoitcmk fetch-hosts
```

Fetch all available information about checkmk hosts:

```shell
idoitcmk fetch-hosts -v
```

Type --help for command-line options to filter these hosts.

Fetch all hosts, but without “effective” attributes which are inherited from rulesets, folders, etc.:

```shell
idoitcmk fetch-hosts -v -s check_mk.webAPI.effectiveAttributes=false
```

## Compare objects and hosts

The command [match](./match-objects-from-i-doit-with-hosts-from-checkmk.md) matches objects from i-doit with hosts from checkmk and prints detailed reports.
