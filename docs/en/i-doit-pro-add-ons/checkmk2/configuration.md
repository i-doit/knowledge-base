# checkmk 2: Configuration

This application is highly-customizable via configuration files and runtime settings.

Configuration files
-------------------

On startup it try to load the following files:

*   /etc/idoitcmk/config.json (system-wide) and
*   ~/.idoitcmk/config.json (user-defined)

Configuration files are formatted as JSON (JavaScript Object Notation), an easily-readable format for both humans and robots.

Create configuration file automatically
---------------------------------------

Use command init to create your own configuration file:

    idoitcmk init

This command will ask you several questions about all settings which are mentioned below. After that a configuration file will be written to `~/.idoitcmk/config.json`.

If you run this command with super-user rights (root) a configuration file will be written to `/etc/idoitcmk/config.json` instead.

With this command you are even able to update your configuration settings. Before that a backup will be created in the background.

Create configuration files manually
-----------------------------------

For a good start print the example configuration and edit it locally:

    mkdir ~/.idoitcmk
    idoitcmk print-example-config > ~/.idoitcmk/config.json
    editor ~/.idoitcmk/config.json

Available settings
------------------

The configuration settings are separated by topics:

| Topic | Description |
| --- | --- |
| i-doit | Configure how to access i-doit's JSON-RPC API |
| check_mk | Configure how to access checkmk's Web API |
| push | Configure how to [push data from i-doit to checkmk](./generate-wato-configuration-base-on-cmdb-data.md) |
| pull | Configure how to [pull data from checkmk to i-doit](./import-inventory-data-into-cmdb.md) |
| objectTypes | Used object types identified by their constants |
| objectTitles | Used objects identified by their titles |
| roles | i-doit roles for contact groups used in contact assignments |
| blacklistedObjectTypes | Object types which will be completely ignored by all commands |
| log | Log levels and colored output |

Required topics are i-doit and check_mk, otherwise sharing information between them won't work. All other topics may be altered optionally.

For almost each setting there is a pre-defined default value. You may remove unchanged settings from your local configuration files.

### Access i-doit's JSON-RPC API

Configure how to access i-doit's JSON-RPC API:

| Key | Type | Required | Default | Description |
| --- | --- | --- | --- | --- |
| i-doit.url | String | Yes | -   | Entry point to i-doit's JSON-RPC API (Example: http://demo.i-doit.com/src/jsonrpc.php |
| i-doit.key | String | Yes | -   | API key |
| i-doit.username | String | No  | -   | Username |
| i-doit.password | String | No  | -   | Password |
| i-doit.language | String | No  | en | Supported languages are en or de |
| i-doit.limitBatchRequests | String | No  | 500 | If you encounter performance or memory issues in i-doit decrease this setting. Value 100 is a good starting point. 0 disables any limitation. |
| i-doit.proxy.type | String | No  | -   | HTTP or SOCKS5 |
| i-doit.proxy.host | String | No  | -   | FQDN or IP address to proxy |
| i-doit.proxy.port | Integer | No  | -   | TCP/IP port |
| i-doit.proxy.username | String | No  | -   | Username |
| i-doit.proxy.password | String | No  | -   | Password |

### Access checkmk's Web API and Livestatus

Configure how to access checkmk's Web API:

| Key | Type | Required | Default | Description |
| --- | --- | --- | --- | --- |
| check_mk.webAPI.url | String | Yes | -   | Entry point to checkmk's Web API (Example: http://CheckMK-Server/site-name/check_mk/) |
| check_mk.webAPI.username | String | Yes | automation | Automation user |
| check_mk.webAPI.secret | String | Yes | -   | Automation secret |
| check_mk.webAPI.effectiveAttributes | Boolean | Yes | true | Fetch inherited settings from rulesets, folders, etc. |
| check_mk.webAPI.proxy.type | String | No  | -   | HTTP or SOCKS5 |
| check_mk.webAPI.proxy.host | String | No  | -   | FQDN or IP address to proxy |
| check_mk.webAPI.proxy.port | String | No  | -   | TCP/IP port |
| check_mk.webAPI.proxy.username | String | No  | -   | Username |
| check_mk.webAPI.proxy.password | String | No  | -   | Password |
| check_mk.livestatus.type | String | No  | tcp | tcp or socket |
| check_mk.livestatus.title | String | No  | Check_MK | Unique name for this livestatus instance |
| check_mk.livestatus.host | String | No  | -   | Hostname (type tcp only) |
| check_mk.livestatus.port | Integer | No  | 6557 | TCP/IP port (type tcp only) |
| check_mk.livestatus.path | String | No  | -   | Path to UNIX socket (type socket only) |

Livestatus can currently not be connected via TLS.

### Configure the used Checkmk Version

| Key | Type | Required | Default | Description |
| --- | --- | --- | --- | --- |
| check_mk.version | String | No  | -   | Used Checkmk Version needed for inventory import e.g. "2.1" |

### Configure command push

Configure how to [push data from i-doit to checkmk](./generate-wato-configuration-base-on-cmdb-data.md):

| Key | Type | Required | Default | Description |
| --- | --- | --- | --- | --- |
| push.activateChanges | Boolean | No  | false | Activate all changes except foreign changes |
| push.activateForeignChanges | Boolean | No  | false | Activate all changes including foreign changes; push.activateChanges must be true |
| push.autoMatching | String | No  | all | Disable autoTagging (none), just look for the first match (first) or try to match all expressions (all) |
| push.autoSite | Boolean | No  | false | In a multi-site environment each host is monitored by one site. With value location site can be identified automatically by the object location path. |
| push.autoTagging | Object | No  | -   | Add host tags dynamically based on object information that matches regular expressions; see section "Auto tagging" |
| push.bakeAgents | Boolean | No  | false | Bake agents automatically; does not deploy agents |
| push.contactGroupIdentifier | String | No  | title | Collect contact groups by their object titles (title) or by their LDAP DNs (ldap) |
| push.defaultWATOFolder | String | No  | -   | Push hosts to this folder if not set; empty value means main folder |
| push.discoverServices | Boolean | No  | false | Look for services on new/altered hosts |
| push.location | Boolean | No  | true |     |

#### Auto tagging

Example:

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

Try to match all expressions:

*   Objects whose titles (title) begin with 00 will be checked by an agent and are tagged as productive.
*   Objects whose titles (title) has mail in the middle are tagged as mail hosts.
*   Objects whose hostnames ( hostname) begin with vm are assigned to the DMZ.
*   Objects whose fully qualified domain names (fqdn) end with test.local are tagged as test

### Configure command pull

Configure how to [pull data from checkmk to i-doit](./import-inventory-data-into-cmdb.md):

| Key | Type | Required | Default | Description |
| --- | --- | --- | --- | --- |
| pull.createObjects | Boolean | No  | true | Unknown hosts will be created as new objects |
| pull.createUnknownSoftwareApplications | Boolean | No  | true | Unknown Applications will be created as new objects |
| pull.objectType | String | No  | C__OBJTYPE__SERVER | Set the object type constant for new objects |
| pull.updateObjects | String | No  | overwrite | If host is found in i-doit overwrite existing category entries, merge them or ignore them (list categories only) |
| pull.idenfifier | Array | No  | ["title", "hostname", "fqdn", "hostaddress", "alias", "user-defined", "serial"] | Look for these identifiers to match hosts with objects; see section "Identifiers" |
| pull.minMatch | Integer | No  | 2 | Object and host must share a minimum amount of identifiers |
| pull.attributes | Array | No  | _See section "Attributes"_ | List of category constants which will be altered; see section "Attributes" |
| pull.enableExport | Boolean | No  | true | Write host configuration to category Check_MK Host |
| pull.enableLivestatus | Boolean | No  | true | Write host configuration to category Monitoring |
| pull.ports | String | No  | physical | Add/update physical or logical network ports |

#### Identifiers

In i-doit there are several attributes which are suitable as unique identifiers to match them with hosts in checkmk:

| Identifier | Category | Description |
| --- | --- | --- |
| title | General | Object title |
| hostname | Host address | Hostname |
| fqdn | Host address | Fully qualified domain name |
| hostaddress | Host address | Primary IPv4 or IPv6 address |
| alias | Check_MK Host | Host alias |
| user-defined | Check_MK Host | User-defined value for attribute hostname |
| serial | Model | Serial number in the model category |

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

In i-doit each object attribute is bound to a so-called category. These categories can be altered:

| Category | Constant | Default | Description |
| --- | --- | --- | --- |
| Access | C__CATG__ACCESS | true | Link to host in checkmk |
| Application | C__CATG__APPLICATION | false | Software assignments |
| Contact assignment | C__CATG__CONTACT | true | Contact groups with role roles.monitoring |
| CPU | C__CATG__CPU | true | CPU cores |
| Drive | C__CATG__DRIVE | true | Mount points |
| Graphic card | C__CATG__GRAPHIC | true | (Virtual) Graphic cards |
| Host address | C__CATG__IP | true | IP addresses and hostname |
| Memory | C__CATG__MEMORY | true | Total memory |
| Model | C__CATG__MODEL | true | Manufacturer, model name and serial number |
| Operating system | C__CATG__OPERATING_SYSTEM | true | Operating system |
| Network > logical Ports | C__CATG__NETWORK_LOG_PORT | true | Active logical ports with MAC address |
| Network > Port | C__CATG__NETWORK_PORT | true | Active physical ports with MAC address |

Example:

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

### Object types

Used object types identified by their constants:

| Key | Type | Required | Default | Description |
| --- | --- | --- | --- | --- |
| objectTypes.contactGroup | String | No  | C__OBJTYPE__PERSON_GROUP | Contact groups |
| objectTypes.operatingSystem | String | No  | C__OBJTYPE__OPERATING_SYSTEM | Operating systems |
| objectTypes.subnetwork | String | No  | C__OBJTYPE__LAYER3_NET | Subnetworks |
| objectTypes.remoteManagementController | String | No  | C__OBJTYPE__RM_CONTROLLER | Remote management controllers |

### Object titles

Used objects identified by their titles:

| Key | Type | Required | Default | Description |
| --- | --- | --- | --- | --- |
| IPv4 subnetwork | String | No  | Global v4 | Default subnetwork for IPv4 addresses |
| IPv6 subnetwork | String | No  | Global v6 | Default subnetwork for IPv6 addresses |

### Roles

This is a list of i-doit roles for contact groups used in contact assignments:

| Key | Type | Required | Default | Description |
| --- | --- | --- | --- | --- |
| roles.monitoring | String | No  | Monitoring | i-doit role for contact groups used in contact assignments |

### Blocklist object types

This list of object types will be completely ignored by default:

| Object type | Constant |
| --- | --- |
| Cable tray | C__CMDB__OBJTYPE__CABLE_TRAY |
| Conduit | C__CMDB__OBJTYPE__CONDUIT |
| Object group | C__OBJECT_TYPE__GROUP |
| Aircraft | C__OBJTYPE__AIRCRAFT |
| Application | C__OBJTYPE__APPLICATION |
| Building | C__OBJTYPE__BUILDING |
| Cable | C__OBJTYPE__CABLE |
| Cell phone contract | C__OBJTYPE__CELL_PHONE_CONTRACT |
| City | C__OBJTYPE__CITY |
| Country | C__OBJTYPE__COUNTRY |
| Database instance | C__OBJTYPE__DATABASE_INSTANCE |
| Database schema | C__OBJTYPE__DATABASE_SCHEMA |
| DBMS | C__OBJTYPE__DBMS |
| Emergency plan | C__OBJTYPE__EMERGENCY_PLAN |
| Rack | C__OBJTYPE__ENCLOSURE |
| File | C__OBJTYPE__FILE |
| Generic template | C__OBJTYPE__GENERIC_TEMPLATE |
| Information domain | C__OBJTYPE__INFORMATION_DOMAIN |
| Service | C__OBJTYPE__IT_SERVICE |
| Crypto card | C__OBJTYPE__KRYPTO_CARD |
| Layer 2 Net | C__OBJTYPE__LAYER2_NET |
| Layer 3-Net | C__OBJTYPE__LAYER3_NET |
| Licenses | C__OBJTYPE__LICENCE |
| Generic location | C__OBJTYPE__LOCATION_GENERIC |
| Contract | C__OBJTYPE__MAINTENANCE |
| Middleware | C__OBJTYPE__MIDDLEWARE |
| Migration objects | C__OBJTYPE__MIGRATION_OBJECT |
| Nagios host-template | C__OBJTYPE__NAGIOS_HOST_TPL |
| Nagios service | C__OBJTYPE__NAGIOS_SERVICE |
| Nagios service-template | C__OBJTYPE__NAGIOS_SERVICE_TPL |
| Net zone | C__OBJTYPE__NET_ZONE |
| Operating system | C__OBJTYPE__OPERATING_SYSTEM |
| Organization | C__OBJTYPE__ORGANIZATION |
| Parallel relation | C__OBJTYPE__PARALLEL_RELATION |
| Patch Panel | C__OBJTYPE__PATCH_PANEL |
| Persons | C__OBJTYPE__PERSON |
| Person groups | C__OBJTYPE__PERSON_GROUP |
| Rack segment | C__OBJTYPE__RACK_SEGMENT |
| Relation | C__OBJTYPE__RELATION |
| Replication object | C__OBJTYPE__REPLICATION |
| Room | C__OBJTYPE__ROOM |
| SAN Zoning | C__OBJTYPE__SAN_ZONING |
| System service | C__OBJTYPE__SERVICE |
| SIM card | C__OBJTYPE__SIM_CARD |
| SOA stack | C__OBJTYPE__SOA_STACK |
| Supernet | C__OBJTYPE__SUPERNET |
| Vehicle | C__OBJTYPE__VEHICLE |
| VRRP | C__OBJTYPE__VRRP |
| WAN | C__OBJTYPE__WAN |
| Wiring System | C__OBJTYPE__WIRING_SYSTEM |
| Workplace | C__OBJTYPE__WORKSTATION |

You are not able to remove object types from this list (please raise an issue if you want to anyway). But you can expand this list by other object types.

In the next example all objects by type Client will be ignored, too. To identify this object type use its constant instead of its (English or German) title:

    {
        "blacklistedObjectTypes": [
            "C__OBJTYPE__CLIENT"
        ]
    }

### Log levels

The CLI tool idoitcmk has various log levels:

| Level | Value |
| --- | --- |
| Level | Value |
| --- | --- |
| Fatal | 1 |
| Error | 2 |
| Warning | 4 |
| Notice | 8 |
| Info | 16 |
| Debug | 32 |

There is a configuration setting log.verbosity to adjust the default log level. This value will be used when neither runtime option `-v|--verbose` nor `-q|--quiet` are used. The current default value is 31. That means all log messages except debug messages are included.

On the one side runtime option `-v|--verbose` sets this configuration setting temporarily to 63 which includes all log levels. On the other side runtime option `-q|--quiet` sets it temporarily to 3 (only fatals and errors).

Additional configuration files
------------------------------

Optionally, you may pass one or more additional JSON-formatted configuration files by using option -c or --config. Repeat option for more then one file. For example:


    idoitcmk push --config i-doit-testing.json --config check_mk-testing.json

Runtime settings
----------------

You would like to change some settings during runtime? You can do that with options `-s` and `--setting`. Separate nested keys with ., for example:

    idoitcmk push --setting "push.activateChanges=true"

    idoitcmk pull -s ['pull.attributes={"C__CATG__ACCESS": true,"C__CATG__APPLICATION": true,"C__CATG__CONTACT": true,"C__CATG__CPU": true,"C__CATG__DRIVE": true,"C__CATG__GRAPHIC": true,"C__CATG__IP": true,"C__CATG__MEMORY": true,"C__CATG__MODEL": true,"C__CATG__OPERATING_SYSTEM": true,"C__CATG__NETWORK_LOG_PORT": true,"C__CATG__NETWORK_PORT": true}']

Repeat option for more than one setting.

Order of configuration settings matters
---------------------------------------

As you already read you have various options to pass your preferred settings to this application. This application follows this order:

1.  Default settings will be overwritten by
2.  System-wide settings (/etc/idoitcmk/config.json) will be overwritten by
3.  User-defined settings (~/.idoitcmk/config.json) will be overwritten by
4.  Additional configuration files (options -c FILE or --config FILE) will be overwritten by
5.  Runtime settings (options -s KEY=VALUE or --setting KEY=VALUE)

Test your config
----------------

With command configtest you are able to perform a detailed validation of your configuration settings. This is very useful after you create or change your settings:

    idoitcmk configtest

Print your config
-----------------

If you have a bunch of configuration files and runtime settings sometimes it's good to know what are your compiled settings:

    idoitcmk print-config

This will print your current configuration settings JSON-formatted to STDOUT.
