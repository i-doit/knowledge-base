---
title: Configuration
description: This application is highly customizable via configuration files and runtime settings.
icon:
status:
lang: en
---
# Configuration

This application is highly customizable via configuration files and runtime settings.


[![checkmk2/checkmk-übersicht.png](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-uebersicht.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-uebersicht.png)

## Configuration Files

On startup, the application attempts to load the following files:

*   /etc/idoitcmk/config.json (system-wide) and
*   ~/.idoitcmk/config.json (user-defined)

The configuration files are formatted as JSON (JavaScript Object Notation), a format that is easily readable by both humans and machines.

## Create Configuration File Automatically

Use the init command to create your own configuration file:

```shell
idoitcmk init
```

This command asks you several questions about all settings listed below. Afterward, a configuration file is written to ~/.idoitcmk/config.json.

If you run this command with superuser rights (root), a configuration file will be written to /etc/idoitcmk/config.json instead.

With this command you can even update your configuration settings. A backup is created in the background beforehand.

## Create Configuration Files Manually

For a good start, output the example configuration and edit it locally:

```shell
mkdir ~/.idoitcmk
idoitcmk print-example-config > ~/.idoitcmk/config.json
editor ~/.idoitcmk/config.json
```

## Available Settings

The configuration settings are separated by topic:

| Topic                  | Description                                                                                                                           |
| ---------------------- | -------------------------------------------------------------------------------------------------------------------------------------- |
| i-doit                 | Configure access to the JSON-RPC API of i-doit                                                                              |
| check_mk               | Configure access to the Checkmk Web API                                                                                  |
| push                   | Configure how [data is transferred from i-doit to Checkmk](./wato-konfiguration-auf-basis-von-cmdb-daten-generieren.md) |
| pull                   | Configure how [data is pulled from Checkmk to i-doit](./bestandsdaten-in-die-cmdb-importieren.md)                            |
| objectTypes            | Used object types, identified by their constants                                                                            |
| objectTitles           | Used objects, identified by their title                                                                          |
| roles                  | i-doit roles for contact groups used in contact assignments                                                         |
| blacklistedObjectTypes | Object types that are completely ignored by all commands                                                                      |
| log                    | Log levels and colored output                                                                                                    |

Required topics are i-doit and check_mk, otherwise the information exchange between them will not work. All other topics can be optionally changed.

There is a predefined default value for almost every setting. You can remove unchanged settings from your local configuration files.

### Access to the JSON-RPC API of i-doit

Configure access to the JSON-RPC API of i-doit:

| Key                       | Type    | Required | Default | Description                                                                                                                                                             |
| ------------------------- | ------- | ------------ | -------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| i-doit.url                | String  | Yes           | -        | Entry point to the JSON-RPC API of i-doit (example: <http://demo.i-doit.com/src/jsonrpc.php>)                                                                          |
| i-doit.key                | String  | Yes           | -        | API key                                                                                                                                                                  |
| i-doit.username           | String  | No         | -        | Username                                                                                                                                                             |
| i-doit.password           | String  | No         | -        | Password                                                                                                                                                                 |
| i-doit.language           | String  | No         | en       | Supported language: en or de                                                                                                                                         |
| i-doit.limitBatchRequests | String  | No         | 500      | If you experience performance or memory issues in i-doit, decrease this setting. The value 100 is a good starting point. 0 disables any limitation.      |
| i-doit.proxy.type         | String  | No         | -        | HTTP or SOCKS5                                                                                                                                                         |
| i-doit.proxy.host         | String  | No         | -        | FQDN or IP address of the proxy                                                                                                                                          |
| i-doit.proxy.port         | Integer | No         | -        | TCP/IP port                                                                                                                                                              |
| i-doit.proxy.username     | String  | No         | -        | Proxy username                                                                                                                                                       |
| i-doit.proxy.password     | String  | No         | -        | Proxy password                                                                                                                                                           |

### Access to the Checkmk Web API and Livestatus

Configure access to the Checkmk Web API:

| Key                                 | Type    | Required | Default   | Description                                                                                   |
| ----------------------------------- | ------- | ------------ | ---------- | ---------------------------------------------------------------------------------------------- |
| check_mk.webAPI.url                 | String  | Yes           | -          | Entry point to the Checkmk Web API (example: <http://CheckMK-Server/site-name/check_mk/>) |
| check_mk.webAPI.username            | String  | Yes           | automation | Automation user                                                                            |
| check_mk.webAPI.secret              | String  | Yes           | -          | Automation secret                                                                              |
| check_mk.webAPI.effectiveAttributes | Boolean | Yes           | true       | Retrieve inherited settings from rulesets, folders, etc.                              |
| check_mk.webAPI.proxy.type          | String  | No         | -          | HTTP or SOCKS5                                                                               |
| check_mk.webAPI.proxy.host          | String  | No         | -          | FQDN or IP address of the proxy                                                                |
| check_mk.webAPI.proxy.port          | String  | No         | -          | TCP/IP port                                                                                    |
| check_mk.webAPI.proxy.username      | String  | No         | -          | Username                                                                                   |
| check_mk.webAPI.proxy.password      | String  | No         | -          | Password                                                                                       |
| check_mk.livestatus.type            | String  | No         | tcp        | tcp or socket                                                                                |
| check_mk.livestatus.title           | String  | No         | Check_MK   | Unique name for this Livestatus instance                                                 |
| check_mk.livestatus.host            | String  | No         | -          | Hostname (type tcp only)                                                                       |
| check_mk.livestatus.port            | Integer | No         | 6557       | TCP/IP port (type tcp only)                                                                    |
| check_mk.livestatus.path            | String  | No         | -          | Path to the UNIX socket (type socket only)                                                        |

Livestatus currently cannot be connected via TLS.

### Configuration of the Used Checkmk Version

| Key              | Type   | Required | Default | Description                                                                     |
| ---------------- | ------ | ------------ | -------- | -------------------------------------------------------------------------------- |
| check_mk.version | String | No           | -        | Used Checkmk version, required for the inventory import, e.g., "2.1" |

### Configuration of the push Command

Configure how [data is transferred from i-doit to Checkmk](./wato-konfiguration-auf-basis-von-cmdb-daten-generieren.md):

| Key                         | Type    | Required | Default | Description                                                                                                                                                                                           |
| --------------------------- | ------- | ------------ | -------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| push.activateChanges        | Boolean | No         | false    | Activate all changes except foreign changes                                                                                                                                       |
| push.activateForeignChanges | Boolean | No         | false    | Activate all changes, including foreign changes; push.activateChanges must be true                                                                                                  |
| push.autoMatching           | String  | No         | all      | Disable autoTagging (none), search only for the first match (first), or try to find all expressions (all)                                                                          |
| push.autoSite               | Boolean | No         | false    | In a multi-site environment, each host is monitored by a site. With the value "location", a site can be automatically identified based on the object location path |
| push.autoTagging            | Object  | No         | -        | Add host tags dynamically based on object information matching regular expressions; see section "Auto tagging"                                                     |
| push.bakeAgents             | Boolean | No         | false    | Automatically bake agents; no distribution of agents                                                                                                                                         |
| push.contactGroupIdentifier | String  | No         | title    | Collect contact groups by their object titles (title) or by their LDAP DNs (ldap)                                                                                                                 |
| push.defaultWATOFolder      | String  | No         | -        | Move hosts to this folder if not defined; empty value means main folder                                                                                                           |
| push.discoverServices       | Boolean | No         | false    | Search for services on new/changed hosts                                                                                                                                                        |
| push.location               | Boolean | No         | true     |                                                                                                                                                                                                        |

#### Auto tagging

Example:

```json
{
    "push": {
        "autoTagging": {
            "title": {
                "/^00/": {
                    "tag_agent": "cmk-agent",
                    "tag_criticality": "prod"
                },
                "/mail/": {
                    "tag_system": "mail"
                }
            },
            "hostname": {
                "/^vm/": {
                    "tag_networking": "dmz"
                }
            },
            "fqdn": {
                "/test\\.local$/": {
                    "tag_criticality": "test"
                }
            }
        },
        "autoMatching": "all"
    }
}
```

Tries to find all expressions:

*   Objects whose title starts with 00 are checked by an agent and classified as productive.
*   Objects whose title contains mail are tagged as mail hosts.
*   Objects whose hostname starts with vm are assigned to the DMZ.
*   Objects whose fully qualified domain name (fqdn) ends with test.local are tagged as test.

### Configuration of the pull Command

Configure how [data is pulled from Checkmk to i-doit](./bestandsdaten-in-die-cmdb-importieren.md):

| Key                                    | Type    | Required | Default                                                                        | Description                                                                                                                                         |
| -------------------------------------- | ------- | ------------ | ------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------- |
| pull.createObjects                     | Boolean | No         | true                                                                            | Unknown hosts are created as new objects                                                                                                    |
| pull.createUnknownSoftwareApplications | Boolean | No         | true                                                                            | Unknown applications are created as new objects                                                                                              |
| pull.objectType                        | String  | No         | C__OBJTYPE__SERVER                                                              | Set the object type constant for new objects                                                                                                     |
| pull.updateObjects                     | String  | No         | overwrite or merge                                                              | If the host is found in i-doit, existing category entries are "overwritten", "merged", or "ignored" (list categories only) |
| pull.identifier                        | Array   | No         | ["title", "hostname", "fqdn", "hostaddress", "alias", "user-defined", "serial"] | Search for these identifiers to match hosts with objects; see section "Identifiers"                                                    |
| pull.minMatch                          | Integer | No         | 2                                                                               | Object and host must share a minimum number of identifiers                                                                                |
| pull.attributes                        | Array   | No         | _See section "Attributes"_                                                   | List of category constants to be changed; see section "Attributes"                                                             |
| pull.enableExport                      | Boolean | No         | true                                                                            | Write host configuration in the Check_MK Host category                                                                                              |
| pull.enableLivestatus                  | Boolean | No         | true                                                                            | Write host configuration in the Monitoring category                                                                                                 |
| pull.ports                             | String  | No         | physical                                                                        | Add/update physical or logical network ports                                                                                    |

#### Identifiers

In i-doit, there are several attributes that can serve as unique identifiers to match them with hosts in Checkmk:

| Identifier   | Category      | Description                                       |
| ------------ | ------------- | -------------------------------------------------- |
| title        | General       | Object title                                  |
| hostname     | Host address  | Hostname                                           |
| fqdn         | Host address  | Fully qualified domain name                        |
| hostaddress  | Host address  | Primary IPv4 or IPv6 address                    |
| alias        | Check_MK Host | Host alias                                         |
| user-defined | Check_MK Host | User-defined value for the hostname attribute |
| serial       | Model        | Serial number in the Model category               |

Example:

    {
        "pull": {
            "identifier": [
                "title",
                "hostname",
                "fqdn",
                "hostaddress",
                "alias",
                "user-defined"
            ],
            "minMatch": 2
        }
    }

#### Attributes

In i-doit, every object attribute is bound to a so-called category. The following categories can be modified:

| Category                | Constant                 | Default | Description                                   |
| ----------------------- | ------------------------- | -------- | ---------------------------------------------- |
| Access                  | C__CATG__ACCESS           | true     | Link to the host in Checkmk                       |
| Application             | C__CATG__APPLICATION      | false    | Software assignments                            |
| Contact assignment      | C__CATG__CONTACT          | true     | Contact groups with role roles.monitoring      |
| CPU                     | C__CATG__CPU              | true     | CPU cores                                      |
| Drive                   | C__CATG__DRIVE            | true     | Mount points                                   |
| Graphic card            | C__CATG__GRAPHIC          | true     | (Virtual) graphic card                        |
| Host address            | C__CATG__IP               | true     | IP addresses and hostname                       |
| Memory                  | C__CATG__MEMORY           | true     | Total memory                              |
| Model                   | C__CATG__MODEL            | true     | Manufacturer, model name, and serial number |
| Operating system        | C__CATG__OPERATING_SYSTEM | true     | Operating system                                 |
| Network > logical Ports | C__CATG__NETWORK_LOG_PORT | true     | Active logical ports with MAC address          |
| Network > Port          | C__CATG__NETWORK_PORT     | true     | Active physical ports with MAC address         |

Example:

```json
{
    "pull": {
        "attributes": {
            "C__CATG__ACCESS": true,
            "C__CATG__APPLICATION": true,
            "C__CATG__CONTACT": true,
            "C__CATG__CPU": true,
            "C__CATG__DRIVE": true,
            "C__CATG__GRAPHIC": true,
            "C__CATG__IP": true,
            "C__CATG__MEMORY": true,
            "C__CATG__MODEL": true,
            "C__CATG__OPERATING_SYSTEM": true,
            "C__CATG__NETWORK_LOG_PORT": true,
            "C__CATG__NETWORK_PORT": true
        }
    }
}
```

### Object Types

Used object types, identified by their constants:

| Key                                    | Type   | Required | Default                     | Description                      |
| -------------------------------------- | ------ | ------------ | ---------------------------- | --------------------------------- |
| objectTypes.contactGroup               | String | No         | C__OBJTYPE__PERSON_GROUP     | Contact groups                    |
| objectTypes.operatingSystem            | String | No         | C__OBJTYPE__OPERATING_SYSTEM | Operating systems                   |
| objectTypes.subnetwork                 | String | No         | C__OBJTYPE__LAYER3_NET       | Subnetworks                         |
| objectTypes.remoteManagementController | String | No         | C__OBJTYPE__RM_CONTROLLER    | Remote management controllers |

### Object Titles

Used objects, identified by their title:

| Key             | Type   | Required | Default  | Description                        |
| --------------- | ------ | ------------ | --------- | ----------------------------------- |
| IPv4 subnetwork | String | No         | Global v4 | Default subnetwork for IPv4 addresses |
| IPv6 subnetwork | String | No         | Global v6 | Default subnetwork for IPv6 addresses |

### Roles

List of i-doit roles for contact groups used in contact assignments:

| Key              | Type   | Required | Default   | Description                                                                 |
| ---------------- | ------ | ------------ | ---------- | ---------------------------------------------------------------------------- |
| roles.monitoring | String | No         | Monitoring | i-doit role for contact groups used in contact assignments |

### Blacklisted Object Types

The following list of object types is completely ignored by default:

| Object Type              | Constant                       |
| ----------------------- | ------------------------------- |
| Cable tray             | C__CMDB__OBJTYPE__CABLE_TRAY    |
| Conduit                | C__CMDB__OBJTYPE__CONDUIT       |
| Object group           | C__OBJECT_TYPE__GROUP           |
| Aircraft                | C__OBJTYPE__AIRCRAFT            |
| Application               | C__OBJTYPE__APPLICATION         |
| Building                | C__OBJTYPE__BUILDING            |
| Cable                   | C__OBJTYPE__CABLE               |
| Cell phone contracts      | C__OBJTYPE__CELL_PHONE_CONTRACT |
| City                   | C__OBJTYPE__CITY                |
| Country                    | C__OBJTYPE__COUNTRY             |
| Database instance        | C__OBJTYPE__DATABASE_INSTANCE   |
| Database schema         | C__OBJTYPE__DATABASE_SCHEMA     |
| DBMS                    | C__OBJTYPE__DBMS                |
| Emergency plan             | C__OBJTYPE__EMERGENCY_PLAN      |
| Enclosure                 | C__OBJTYPE__ENCLOSURE           |
| File                   | C__OBJTYPE__FILE                |
| Generic template      | C__OBJTYPE__GENERIC_TEMPLATE    |
| Information domain   | C__OBJTYPE__INFORMATION_DOMAIN  |
| Service                 | C__OBJTYPE__IT_SERVICE          |
| Crypto card             | C__OBJTYPE__KRYPTO_CARD         |
| Layer 2 Net             | C__OBJTYPE__LAYER2_NET          |
| Layer 3 Net             | C__OBJTYPE__LAYER3_NET          |
| Licenses                | C__OBJTYPE__LICENCE             |
| Generic location    | C__OBJTYPE__LOCATION_GENERIC    |
| Contract                 | C__OBJTYPE__MAINTENANCE         |
| Middleware              | C__OBJTYPE__MIDDLEWARE          |
| Migration object       | C__OBJTYPE__MIGRATION_OBJECT    |
| Nagios Host Template    | C__OBJTYPE__NAGIOS_HOST_TPL     |
| Nagios Service          | C__OBJTYPE__NAGIOS_SERVICE      |
| Nagios Service Template | C__OBJTYPE__NAGIOS_SERVICE_TPL  |
| Net zone             | C__OBJTYPE__NET_ZONE            |
| Operating system          | C__OBJTYPE__OPERATING_SYSTEM    |
| Organization            | C__OBJTYPE__ORGANIZATION        |
| Parallel relation       | C__OBJTYPE__PARALLEL_RELATION   |
| Patch Panel             | C__OBJTYPE__PATCH_PANEL         |
| Persons                | C__OBJTYPE__PERSON              |
| Person groups         | C__OBJTYPE__PERSON_GROUP        |
| Rack segment         | C__OBJTYPE__RACK_SEGMENT        |
| Relation               | C__OBJTYPE__RELATION            |
| Replication object      | C__OBJTYPE__REPLICATION         |
| Room                    | C__OBJTYPE__ROOM                |
| SAN Zoning              | C__OBJTYPE__SAN_ZONING          |
| System service            | C__OBJTYPE__SERVICE             |
| SIM card               | C__OBJTYPE__SIM_CARD            |
| SOA stack               | C__OBJTYPE__SOA_STACK           |
| Supernet               | C__OBJTYPE__SUPERNET            |
| Vehicle                | C__OBJTYPE__VEHICLE             |
| VRRP                    | C__OBJTYPE__VRRP                |
| WAN                     | C__OBJTYPE__WAN                 |
| Wiring system            | C__OBJTYPE__WIRING_SYSTEM       |
| Workstation            | C__OBJTYPE__WORKSTATION         |

It is not possible to remove object types from this list (please create a ticket if you still want to do so). However, you can extend this list with other object types.

In the following example, all objects of type Client are also ignored. To identify this object type, use its constant instead of its (English or German) title:

```json
{
    "blacklistedObjectTypes": [
        "C__OBJTYPE__CLIENT"
    ]
}
```

### Log Level

The CLI tool idoitcmk has various log levels:

| Level   | Value |
| ------- | ---- |
| Fatal   | 1    |
| Error   | 2    |
| Warning | 4    |
| Notice  | 8    |
| Info    | 16   |
| Debug   | 32   |

There is a configuration setting log.verbosity to adjust the default log level. This value is used when neither the runtime option -v|--verbose nor -q|--quiet is specified. The current default value is 31. This means all log messages except debug messages are included.

On one hand, the runtime option -v|--verbose temporarily sets this configuration setting to 63, which includes all log levels. On the other hand, the runtime option -q|--quiet temporarily sets this setting to 3 (only fatal errors and errors).

## Additional configuration files

Optionally, you can pass one or more additional JSON-formatted configuration files using the -c or --config option. Repeat the option for more than one file. For example:

```shell
idoitcmk push --config i-doit-testing.json --config check_mk-testing.json
```

## Runtime Settings

Do you want to change some settings at runtime? You can do so with the -s and --setting options. Separate nested keys with `.`, for example:

```shell
idoitcmk push --setting "push.activateChanges=true"
idoitcmk pull -s ['pull.attributes={"C__CATG__ACCESS": true,"C__CATG__APPLICATION": true,"C__CATG__CONTACT": true,"C__CATG__CPU": true,"C__CATG__DRIVE": true,"C__CATG__GRAPHIC": true,"C__CATG__IP": true,"C__CATG__MEMORY": true,"C__CATG__MODEL": true,"C__CATG__OPERATING_SYSTEM": true,"C__CATG__NETWORK_LOG_PORT": true,"C__CATG__NETWORK_PORT": true}']
```

Repeat the option for more than one setting.

## Order of Configuration Settings Matters

As you have already read, you have various options for passing your preferred settings to this application. The application follows this order:

1. The default settings are overridden by
2. System-wide settings (/etc/idoitcmk/config.json), which are overridden by
3. User-defined settings (~/.idoitcmk/config.json), which are overridden by
4. Additional configuration files (options -c FILE or --config FILE), which are overridden by
5. Runtime settings (options -s KEY=VALUE or --setting KEY=VALUE)

## Test Your Configuration

With the `configtest` command, you can perform a detailed check of your configuration settings. This is very useful after you have created or changed your settings:

```shell
idoitcmk configtest
```

## Print Your Configuration

If you have a number of configuration files and runtime settings, it is sometimes useful to know what your compiled settings are:

```shell
idoitcmk print-config
```

This outputs your current configuration settings in JSON format to STDOUT.
