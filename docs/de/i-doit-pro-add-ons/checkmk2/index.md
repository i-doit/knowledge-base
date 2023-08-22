# Checkmk2

## Checkmk 2 v1.8.2

### Was ist neu

- Mit Version 1.8.2 unterstützt CMK2 jetzt auch die Version Checkmk 2.2<br>
- Wenn der Config-Parameter check_mk.version auf "2.2" gesetzt ist, wird automatisch anstatt der Web-API die REST-API angesprochen.<br>
- Wenn der Config-Parameter check_mk.version auf "2.1" gesetzt ist, wird die WebAPI genutzt, es sein denn, es gibt einen Konfigurationsabschnitt. "check_mk.rest" der parallel zum WebAPI-Konfiguration genutzt werden kann. Dann wird auch für 2.1 die REST-API genutzt.
- Die betrifft nicht die Aufrufe der Inventory-API!

!!! info ""
    Als Gold-Partner von Tribe29 gilt das SHD - System-Haus-Dresden GmbH als ausgewiesener Spezialist für das Monitoring mit Checkmk. Mit der Übernahme und Weiterentwicklung des i-doit pro Add-Ons Checkmk 2 stellt SHD diese Expertise nun auch den i-doit Anwendern zur Verfügung.

!!! attention ""
    Mit der [Checkmk Version 2.1.0b1](https://checkmk.com/werk/12389) wurde die Struktur der Inventory Daten verändert. Es ist aktuell mit der CheckMK 2 Add-on Version <=1.8 nicht möglich Inventory in i-doit zu übertragen.<br>
    Mit Version 1.8.1 muss die [Konfiguration](./checkmk2-konfiguration.md) angepasst werden.

Ein Praxisbeispiel finden Sie auf unserem [Blog](https://www.i-doit.com/blog/monitoring-mit-check_mk-und-i-doit/)

Austausch von Informationen zwischen i-doit und checkmk

## Über

[i-doit](https://i-doit.com) ist eine Webanwendung für die IT-Dokumentation und eine CMDB (Konfigurationsmanagement-Datenbank). Diese Anwendung ist sehr nützlich, um um Ihr gesamtes Wissen über die IT-Infrastruktur, mit der Sie arbeiten, zu sammeln.

[checkmk](https://checkmk.com/de) ist eine Softwareanwendung für die Netzwerküberwachung.

Beide Anwendungen zusammen erfüllen eine Aufgabe sehr gut: Sie sammeln und teilen Wissen darüber zu sammeln und weiterzugeben, was _der_ aktuelle Zustand aller Ihrer Hosts und Dienste in Echtzeit _und_ in welchem Zustand sich jeder Host und Service befinden _sollte_. Dies ist oft für ein professionelles und effizientes IT-Service-Management (ITSM) unerlässlich.

Die Anwendung idoitcmk stellt eine enge Verbindung zwischen i-doit und checkmk her. Eine Menge Informationen werden zwischen ihnen ausgetauscht, um die folgenden Ziele zu erreichen:

- Einmaliges Schreiben, viele Lesezugriffe: Bewahren Sie Ihre Dokumentation und Konfiguration an einem Ort auf.
- Vergleichen Sie den aktuellen Zustand mit dem Zielzustand all Ihrer Hosts und Services innerhalb Ihrer Dokumentation.
- Konfigurieren Sie Ihre Netzwerküberwachung auf der Grundlage Ihrer Dokumentation
- Lassen Sie Ihre Netzwerküberwachung wichtige Informationen über Hosts sammeln und diese in Ihrer Dokumentation wiederverwenden.
- Automatisieren Sie alle langweiligen Aufgaben, die ein Systemadministrator nicht mag.

Wir wissen, dass jede (IT-)Organisation unterschiedliche Anforderungen und verschiedene Prozesse hat. Aus diesem Grund ist es wichtig, eine [highly customizable](checkmk2-konfiguration.md) Anwendung zu haben.

## Dokumentation

- [Erste Schritte](./checkmk2-erste-schritte.md)
- [Anforderungen](./checkmk2-anforderungen.md)
- [Installation](./checkmk2-installation.md)
- [Konfiguration](./checkmk2-konfiguration.md)
- [Verwendung](./checkmk2-verwendung.md)
- [Erstelle WATO Konfiguration basierend auf CMDB Daten](./checkmk2-wato-konfiguration-auf-basis-von-cmdb-daten-generieren.md)
- [Importieren von Bestandsdaten in die CMDB](./checkmk2-bestandsdaten-in-die-cmdb-importieren.md)
- [Abgleich von Objekten aus i-doit mit Hosts aus checkmk](./checkmk2-abgleich-von-objekten-aus-i-doit-mit-hosts-aus-checkmk.md)
- [Informationen von i-doit und checkmk lesen](./checkmk2-informationen-aus-i-doit-und-checkmk-lesen.md)
- [Agentenarten von checkmk nach i-doit importieren](./checkmk2-synchronisierung-der-checkmk-agenten.md)
- [Kontaktgruppen zwischen checkmk und i-doit synchronisieren](./checkmk2-kontaktgruppen-synchronisieren.md)
- [WATO-Ordner zwischen checkmk und i-doit synchronisieren](./checkmk2-wato-ordner-synchronisieren.md)
- [Importieren von Sites aus checkmk in i-doit](./checkmk2-checkmk-sites-synchronisieren.md)
- [Synchronisierung von Host-Tags zwischen checkmk und i-doit](./checkmk2-host-tags-synchronisieren.md)
- [i-doit Web GUI](./checkmk2-i-doit-web-gui.md)
- [Häufig gestellte Fragen (FAQ)](./checkmk2-faq.md)

## Changelog


All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

[1.8.2] - 2023-08-18
---------------------------

### Added
- Adding compatibility to checkmk 2.1

### Fixes
- CMK2-38 prevent arbitrary code execution on the idoit host via command injection in the hostname field of the ajax call

[1.8.1] - 2022-11-21
---------------------------

### Fixes

- Adding compatibility to checkmk 2.1

[1.8.0] - 2022-09-05
---------------------------

### Added

- PHP 8.0 Compatibility
- Design Compatibility

### Fixes

- Error message when synchronizing tags
- Synchronizing IPv6 IPs and networks generates an error message

[1.7.1] - 2021-10-18
---------------------------

### Added

- Pull IPv6 addresses from checkmk to i-doit

### Fixed

- Add/fix CPU attributes from checkmk to i-doit
- Add/fix operating system attributes from checkmk to i-doit

[1.7.0] - 2021-08-09
---------------------------

### Added

- Implement merge strategy while pulling from checkmk to i-doit

### Fixed

- Tags (static) Dropdown 'Tag group' attributes cannot be deleted
- CheckMK 2: Tags are not displayed with the tag group in reports

[1.6.1] - 2021-06-15
---------------------------

### Fixed

- Password and username must be specified (i-doit config)
- Filtering on attributes of category Check\_MK (host) generates SQL error and list view does not work anymore
- Dynamic host tag "Location" cannot be set globally
- CheckMK 2 Plugin Pull: Validation errors in dialog related properties
- The live status configuration is not optional
- Checkmk responded with an error message: Check\_MK exception: Invalid key(s): hostname
- Check\_MK 2: Error Message strlen() expects parameter 1 to be string, null given
- Error in list views when add-on Check\_MK 2 was deinstalled
- Operating system is not assigned
- No attributes are imported for applications
- Pull with the same Host as parent ends in a loop

[1.6.0] - 2019-12-06
---------------------------

### Added

- pull: Import software applications
- pull: New configuration setting pull.createUnknownSoftwareApplications
- pull: New configuration setting pull.attributes.C__CATG__APPLICATION
- pull: New configuration setting objectTypes.softwareApplication
- pull/match: Match objects and hosts by serial number configured by new item serial in pull.attributes
- fetch-hosts: Add new option --select to select one or multiple attributes, ignore everything else (works only in verbose mode)
- push: Print last request to Checkmk API on failure as debug message

### Changed

- Drop support for PHP version 5.6
- Mark PHP version 7.0 as deprecated
- Recommend PHP 7.3
- Re-name Check_MK to Checkmk
- Require PHP modules hash, sockets and SPL
- pull: Do not warn about empty host tag IDs because they are allowed in Checkmk
- pull: Ignore link local networking addresses and interfaces
- pull: Do not ignore a networking address which can't be assigned to a networking port
- push: Create site if it's set in i-doit (category Checkmk Host) but not set in Checkmk
- push: Update site if it's set in both i-doit and Checkmk but differs
- push: Remove site if it isn't set in i-doit but set in Checkmk
- match: Warn about ignored objects or objects without unique identifiers

### Fixed

- fetch-hosts/pull: Fetch HW/SW inventory data for all hosts if configuration setting i-doit.limitBatchRequests is smaller than the number of hosts.
- match/pull/push: Use primary category entry from category hostadress to determine hostname used by Checkmk
- pull: Do not import empty MAC addresses
- pull: Prevent validation error caused by unknown property entry
- pull: Print link to Checkmk if attribute "site" is available
- pull: Validate data type of each tag identifier
- pull: Do not leave any host without an import strategy (create, overwrite, merge or ignore)
- pull: Decide import strategy for each host based on matching and configuration settings
- pull: Do not create objects which should be ignored
- push: Use IPv4 address which is explicitly marked as primary
- Web GUI: Add missing translations in English

[1.5.1] - 2019-05-08
---------------------------

This is a bug fix release after we received tons of useful feedback from our users.

**Important notices:**

- Before installing/updating this add-on, please update to the latest version of i-doit (at least 1.12.2) and the API add-on (at least 1.10.2).
- Before using any other commands, run sync-agents first and check your i-doit objects for missing values in category Check_MK Host, attribute Agent.

### Added

- status: Check installed versions of Check\_MK 2 and API add-on
- sync-agents: Cleanup agent types in i-doit which aren't available in Check\_MK
- sync-tags: Validate tags in i-doit before pushing them to Check\_MK
- pull/push: Add new configuration settings to identify required object types by their constants and objects by their titles
- pull: Print links to i-doit and Check\_MK for each object (only in debug mode)

### Changed

- Require i-doit >=1.12.2
- Require API add-on >=1.10.2
- pull/push/sync-tags/Extras > Check_MK 2 > Tags (static): Mark attribute Tag ID as optional
- pull: Skip empty tag identifiers
- pull: If model is given but vendor is unknown set vendor to n/a (and vice versa)
- pull: Support more bandwidth options
- sync-agents: Fetch agent types directly from Check\_MK and do not rely on a pre-defined list of agent types
- sync-tags: Do not allow to sync duplicate tag IDs, empty group titles or changed tag IDs
- sync-tags/sync-agents: Include built-in host tag groups, for example: agent type, SNMP, IP address family
- init: Do not force to configure most settings which have proper defaults; just ask nicely
- Add performance boost while fetching objects from i-doit by tweaking API calls
- Replaced deprecated i-doit API methods
- help/--help/-h: Improve included documentation
- Abort application run on any PHP error
- Category Check_MK Host: Print message if host/object not found
- Category Check_MK Host: Remove link to command log (prevents 403 forbidden error message)
- fetch-hosts/fetch-objects/delete-hosts: Exit with status code 2 if host/object not found
- Build binary: Replace BZip2 with GZip compression after autoloading failed because of wrong checksums

### Fixed

- pull: Fix API calls to prevent validation errors in attributes active, primary and export_ip
- pull: Avoid errors when archiving data in overwrite mode
- pull: Do not create new objects in i-doit if configuration setting pull.createObjects is disabled
- pull: Do not warn about missing host tags because they are dynamically created by i-doit
- pull: Do not try to add network port with zero bandwidth
- pull: Select proper attributes to import CPUs
- pull: Do not overwrite hostname selection in categories Check_MK Host and Livestatus if object is updated
- pull/fetch-hosts: Fix filtering by Check\_MK site with option --include-site
- pull/match: Do not try to match objects by unspecified hostname selection in category Check_MK Host
- pull/push/match: Do not try to create already existing object which has a match with a host
- push: Do not miss any host-related contact group if more than one group is assigned to an object
- push: Do not push tag IDs in lower-case
- push: Validate possible identifiers before using one of them
- push: Do not push any object with option --include-ids which is disabled for export
- push: Add parents to existing host or overwrite current parents or remove them properly
- push: Add or remove alias to/from host properly
- push/fetch-objects: Prevent error "Found invalid result for request in batch" if --include-ids filters by unknown objects
- sync-tags: Do not forget to strip HTML tags from tag group title before syncing to Check\_MK
- Installation/update: Grant "Admin" group access to Extras > Check_MK 2 in Web GUI
- Extras > Check_MK 2 > Tags (static): Edit/delete/sort static host tags in i-doit
- Administration > Interfaces / external data > Monitoring > Check_MK 2: Fix updating configuration settings
- Administration > CMDB settings > Dialog-Admin: Make dialog+ attributes agent, site and WATO folder available
- Category Check_MK Host/Check_MK Tags: Do not create duplicate assignments to object types after update
- Category Check_MK Host: Write full command output incl. STDERR to log file
- Category Check_MK Tags: Make "dynamic tags" and "CMDB tags" available in reports

[1.5.0] - 2018-12-18
---------------------------

First public release 🎉

**Important notes:**

- Because of several major changes in i-doit we had to increase minimum versions of i-doit pro and API add-on.
- Please re-run idoitcmk init to update configuration setting pull.attributes.
- From now on, you need a valid license for this add-on. Download your license file from [https://login.i-doit.com/](https://login.i-doit.com/).

### Added

- push/pull/match: Validate hostname specified in i-doit
- Add more pre-checks: Please do not use neither PHP version < 7.0.0 nor super-user "root"

### Changed

- Require i-doit pro, at least version 1.12
- Require i-doit API add-on, at least version 1.10
- Enforce license check
- Remove dependency from legacy Check\_MK add-on
- Migrate tag configuration from Extras > Check_MK to Extras > Check_MK 2
- Migrate category Check_MK (Host) > Export parameter to Check_MK Host
- Migrate category Check_MK (Host) > Host tags to Check_MK Tags
- Re-name category constant C__CATG__CMK_DEF to C__CATG__CMK2
- Re-name category constant C__CATG__CMK_TAG to C__CATG__CMK2_TAG
- Re-name category constant C__CMDB__SUBCAT__NETWORK_PORT to C__CATG__NETWORK_PORT in configuration   setting pull.attributes
- Re-name category constant C__CMDB__SUBCAT__NETWORK_INTERFACE_L to C__CATG__NETWORK_LOG_PORT in configuration   setting pull.attributes

### Fixed

- push: Fix error while archiving category entries
- sync-folders: Fix typos
- pull: Accept only EUI-48 MAC addresses (48-bit)

[1.4.0] - 2018-11-05
---------------------------

Remember, remember, the fifth of November… 🎃

### Added

- push: Add management board address to host based on a object-related remote management controller
- sync-tags: Import host tags and host tag groups from i-doit into Check\_MK
- sync-tags: Filter objects to sync their dynamic CMDB tags with Check\_MK
- sync-tags: Do not re-import dynamic CMDB tags from Check\_MK into i-doit
- sync-tags: Activate (foreign) changes after adding new host tags to Check\_MK

### Fixed

- Fix error when installing add-on in i-doit admin center without parallel login to i-doit tenant
- fetch-objects: Print URL without PHP notice

[1.3.0] - 2018-09-10
---------------------------

**Important note:** There are changes in the configuration settings. Re-configure your application with idoitcmk init.

### Added

- push: Validate regular expressions in configuration setting push.autoTagging
- status: Test loaded PHP extensions
- Make it optional to fetch "effective" attributes from hosts in Check\_MK, but enable it by default
- Add new configuration setting check_mk.webAPI.effectiveAttributes (set to true by default)
- fetch-objects: Print URL to each i-doit object
- fetch-hosts: Print URL to each Check\_MK host
- push/fetch-objects: Increase performance dramatically if the only filter option is --include-ids

### Changed

- pull: Ignore empty host tags
- pull: Ignore host tag groups address_family and snmp (they are not available via Check\_MK Web API call)

### Fixed

- push: Do not ignore IP address
- push/pull/match: Check for every object attribute whether it exists before matching it against host attributes
- Configure individual proxy hosts for both i-doit JSON-RPC API and Check\_MK Web API
- Verbose mode: Do not print that no objects have been found by blacklisted object types

[1.2.0] - 2018-07-09
---------------------------

**Important notice:** Before installing/updating this add-on, please update your i-doit instance to the latest version (  
currently 1.11).

### Added

- Trigger idoitcmk commands within i-doit category Check_MK (Host)
- delete-hosts: Delete hosts in Check\_MK
- push: Activate all changes including foreign changes by configuration setting push.activateForeignChanges

### Changed

- Require i-doit pro, version 1.11 or higher

### Fixed

- push, fetch-objects: Increase performance when using option --include-type
- push, fetch-objects: Include dynamic host tags

[1.1.0] - 2018-05-24
---------------------------

**Important notice:** Default configuration has changed. Setting pull.identifier has new value user-defined.
See (docs/configuration.md) for details.

### Added

- pull: Import IPv4 addresses and network ports from GNU/Linux and other non-windows systems
- pull: Add speed to network ports
- -v|--verbose: Print number of API requests
- match: Match objects from i-doit with hosts from Check\_MK
- pull: Match object with host by user-defined value for attribute Hostname in category Check_MK (Host) > Export parameter

### Fixed

- pull: Import right amount of CPU cores

[1.0.0] - 2018-04-30
---------------------------

### Added

- pull: Import CPU model, manufacturer and max. frequency

### Changed

- pull: Do not enable monitoring via Livestatus if attribute "site" is not available for Check\_MK host

### Fixed

- pull: Prevent PHP warnings while accessing unknown information

[0.10] - 2018-04-27
-------------------------

**Important note:** There are changes in the configuration settings. Re-configure your application with idoitcmk init.

### Added

- pull: Allow more than one IPv4 address per network adapter
- pull: Assign IPv4 addresses to physical/logical network ports
- pull: Import information about (virtual) video cards/chips
- New configuration setting pull.attributes.C__CATG__GRAPHIC; defaults to true

### Fixed

- pull: Sometimes host is missing in import cue when there is a match with an object
- pull: Do not forget to add primary IPv4 address to category "Check\_MK (Host) > Export parameter"
- push: Do not forget to add host tags based on configuration setting push.autoTagging
- sync-tags: Incomplete host group tags may cause errors
- Configuration setting push.autoTagging: Missing slashes in regular expressions

[0.9] - 2018-04-25
-----------------------

**Important note:** There are changes in the configuration settings. Re-configure your application with idoitcmk init.

### Added

- pull: Look for IP address configuration in hardware/software inventory from Check\_MK
- pull: Assign IP addresses to proper subnets in i-doit
- pull: Use ipaddress attribute as fallback if there are no addresses found in hw/sw inventory
- pull: Create or update link in i-doit object to host in Check\_MK
- New configuration setting pull.attributes.C__CATG__ACCESS; defaults to true

### Changed

- pull: Convert drive capacity to proper unit

### Fixed

- Let user overwrite (not merge) configuration settings pull.identifier and blacklistedObjectTypes
- pull: Do not ignore RAM, CPU sockets and cores

[0.8] - 2018-04-19
-----------------------

### Added

- pull: Add static host tags to i-doit objects
- push: Show more details if a host identifier is used by more than one i-doit object

### Fixed

- pull: Prevent mismatches for i-doit objects and Check\_MK hosts
- pull: Handle i-doit objects with missing attributes properly

[0.7] - 2018-04-19
-----------------------

**Important notes:**

1.  Activate MK\_Livestatus in Check\_MK
2.  There are changes in the configuration settings. Re-configure your application with idoitcmk init.

### Added

- push: Look for duplicate identifiers (object title, hostname, FQDN, user-defined) used by objects in i-doit
- status: Check connection to MK\_Livestatus and check Check\_MK version
- New configuration setting roles.monitoring to define i-doit role for contact groups assigned to objects

### Changed

- pull: Remove merge mode because it does not make sense for all categories which can be updated

### Fixed

- pull: Archive entries for enabled categories only
- pull: Respect ignore mode
- init: Ask for configuration setting pull.updateObjects

[0.6] - 2018-04-13
-----------------------

### Added

- status: Print warning if configuration setting i-doit.url looks insufficient
- push: Print warning if object is not enabled by attribute active in category Check_MK (Host) > Export parameter

### Fixed

- push: PHP warning is thrown while fetching a contact without specified role
- pull/fetch-hosts: Prevent HTTP error code 414 URI Too Long while fetching hw/sw inventory data from Check\_MK

[0.5] - 2018-04-12
-----------------------

This release fixes several issues in required packages.

### Changed

- Add requirements for PHP modules bzip2 and phar
- Do not look for configuration settings in /root/.idoitcmk/config.json

### Fixed

- Avoid duplicates in configuration settings
- Remove backslashes from configuration settings
- Fix several problems while parsing responses from Check\_MK Web API

[0.4] - 2018-04-05
-----------------------

### Added

- fetch-objects: Read information about objects from i-doit
- fetch-hosts: Read information about hosts from Check\_MK

### Changed

- Decreased binary file size

[0.3] - 2018-03-09
-----------------------

### Fixed

- help/init/configtest/print-example-config/print-config/list: Validation error for missing/invalid configuration settings

[0.2] - 2018-03-08
-----------------------

This release is dedicated to all women.

### Added

- push: Use primary IP address if no other is given
- push/pull: Print more information what is going on when there is a huge amount of objects to be fetched from i-doit
- Print current configuration settings with command print-config
- Validate configuration settings before any command is executed

### Changed

- push: Continue even if any discovery of services failed

### Fixed

- pull: Do not try to fetch objects by type from i-doit if there are no objects available
- sync-folders: Keep in mind WATO folders "/" and "" (empty string) are the same
- sync-folders: PHP error when WATO folder is copied from i-doit to Check\_MK

0.1 - 2018-03-05
----------------

First release!

### Added

- push: Generate WATO configuration based on CMDB data
- pull: Import inventory data into CMDB
- sync-agents: Import agents types from Check\_MK to i-doit
- sync-contact-groups: Sync contact groups between Check\_MK and i-doit
- sync-folders: Sync WATO folders between Check\_MK and i-doit
- sync-sites: Import monitoring sites from Check\_MK to i-doit
- sync-tags: Import tag groups from Check\_MK as static host tags to i-doit
- print-example-config: Print all configuration settings as an example
- More commands: help, list, init, status, configtest, print-example-config, build-test-environment
