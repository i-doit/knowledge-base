---
title: "Generate WATO Configuration Based on CMDB Data"
description: "i-doit provides detailed information about your IT infrastructure, including all your hosts."
icon:
status:
lang: en
---
# Generate WATO Configuration Based on CMDB Data

i-doit provides detailed information about your IT infrastructure, including all your hosts. These hosts can be shared with Checkmk so you only need to document/configure your hosts once. To transfer these hosts to Checkmk, run:

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

```shell
idoitcmk push
```

Remember that objects in i-doit must be marked so they can be exported to Checkmk. Check the Check_MK Host category first before running this command.

**Recommendation:** Run this command every time you change your CMDB data.

## Options

These options are available at runtime:

| Option                | Required | Description                            |
| --------------------- | ------------ | --------------------------------------- |
| --include-ids IDs     | No         | Filter i-doit objects by ID          |
| --include-title TITLE | No         | Filter i-doit objects by title |
| --include-type TYPE   | No         | Filter i-doit objects by type         |

IDs is a comma-separated list of object IDs.

TITLE means any object title, including the wildcards *, ? and [ae]. TITLE is case-insensitive. Repeat the option to specify more than one object title.

TYPE means the object type, represented by its title, its constant, or its identifier. Like TITLE, wildcards are allowed and the comparison is case-insensitive. Repeat the option to specify more than one object type.

Any combination of these filters is logically combined with OR. Example: All hosts with object IDs "1", "2" and "3" as well as all hosts whose title matches "\*.example.com" will be pushed:

```shell
idoitcmk push --include-ids 1,2,3 --include-title "*.example.com"
```

## Configuration

These [configuration settings](./konfiguration.md) are available:

| Key                         | Type     | Required | Default                 | Description                                                                                                                                                                                  |
| --------------------------- | ------- | ------------ | ------------------------ | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| objectTypes.contactGroup    | String  | No         | C__OBJTYPE__PERSON_GROUP | Contact groups are identified by this type (use the constant!)                                                                                                                    |
| push.activateChanges        | Boolean | No           | false                    | Activate all changes except "foreign changes"                                                                                                                                 |
| push.autoMatching           | String  | No           | all                      | Disable autoTagging (none), search only for the first match (first) or try to find all expressions (all)                                                            |
| push.autoSite               | Boolean | No           | false                    | In a multi-site environment, each host is monitored by a site. With the value "location", a site can be automatically identified based on the location path |
| push.autoTagging            | Object  | No           | -                        | Add host tags dynamically based on object information matching regular expressions; see section "Auto-Tagging"                                    |
| push.bakeAgents             | Boolean | No         | false                    | Automatically bake agents; no distribution of agents                                                                                                                   |
| push.contactGroupIdentifier | String  | No         | title                    | Collect contact groups by their object titles (title) or by their LDAP DNs (ldap)                                                                                                        |
| push.defaultWATOFolder      | String  | No         | -                        | Move hosts to this folder if not defined; empty value means main folder                                                                                                  |
| push.discoverServices       | Boolean | No           | false                    | Search for services on new/changed hosts                                                                                                                                               |
| roles.monitoring            | String  | No           | Monitoring               | i-doit role for contact groups used in contact assignments                                                                                                                 |
