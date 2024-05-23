# checkmk 2: Generate WATO configuration based on CMDB data

i-doit provides detailed information about your IT infrastructure including all your hosts. Those hosts can be shared with Check\_MK so you only have to document/configure your hosts once. To push these hosts to checkmk run:

    idoitcmk push

Keep in mind that objects must be marked within i-doit to be exported to Check\_MK. Check category Check_MK Host first before executing this command.

**Recommendation:** Run this command every time you alter your CMDB data.

Options
-------

These options are available during runtime:

| Option | Required | Description |
| --- | --- | --- |
| --include-ids IDs | No  | Filter i-doit objects by identifier |
| --include-title TITLE | No  | Filter i-doit objects by title |
| --include-type TYPE | No  | Filter i-doit objects by type |

IDs means a comma-separated list of object identifiers.

TITLE means any object title including wildcards *, ? and [ae]. TITLE is case-insensitive. Repeat option to match more than one object title.

TYPE means the object type represented by its title, constant or identifier. Like TITLE wildcards are allowed and it is case-insensitive. Repeat option to match more than one object type.

Any combination of these filters are logically combined by or. For example, push all hosts with object IDs 1, 2 and 3 and all hosts that matches *.example.com in their titles:

    idoitcmk push --include-ids 1,2,3 --include-title "*.example.com"

Configuration
-------------

These [configuration settings](./configuration.md) are available:

| Key | Type | Required | Default | Description |
| --- | --- | --- | --- | --- |
| objectTypes.contactGroup | String | No  | C__OBJTYPE__PERSON_GROUP | Contact groups are marked by this type (use constant!) |
| push.activateChanges | Boolean | No  | false | Activate all changes except foreign changes |
| push.autoMatching | String | No  | all | Disable autoTagging (none), just look for the first match (first) or try to match all expressions (all) |
| push.autoSite | Boolean | No  | false | In a multi-site environment each host is monitored by one site. With value location site can be identifed automatically by the object location path. |
| push.autoTagging | Object | No  | –   | Add host tags dynamically based on object information that matches regular expressions; see section “Auto tagging” |
| push.bakeAgents | Boolean | No  | false | Bake agents automatically; does not deploy agents |
| push.contactGroupIdentifier | String | No  | title | Collect contact groups by their object titles (title) or by their LDAP DNs (ldap) |
| push.defaultWATOFolder | String | No  | –   | Push hosts to this folder if not set; empty value means main folder |
| push.discoverServices | Boolean | No  | false | Look for services on new/altered hosts |
| roles.monitoring | String | No  | Monitoring | i-doit role for contact groups used in contact assignments |