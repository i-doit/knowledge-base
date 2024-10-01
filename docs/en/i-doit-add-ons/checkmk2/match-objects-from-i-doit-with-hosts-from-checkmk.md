# checkmk 2: Match objects from i-doit with hosts from checkmk

Before running [push](./generate-wato-configuration-base-on-cmdb-data.md) or [pull](./import-inventory-data-into-cmdb.md) you like to take a deeper look how your infrastructure looks like in both tools i-doit and checkmk. The commands [fetch-objects and fetch-hosts](./read-information-from-i-doit-and-checkmk.md) gives you detailed information about your documented objects in i-doit or your monitored hosts in checkmk. But both don’t match them against each other. This is done by the command match:

    idoitcmk match

After comparing each object with each host some detailed reports will be printed:

*   Objects in i-doit which can be updated by hosts in checkmk
*   Hosts in checkmk which are not available as objects in i-doit
*   Hosts in checkmk which can be updated by objects in i-doit
*   Objects in i-doit which are not available as hosts in checkmk

None of your data will be altered.

If you increase verbosity this command will give you hints what to do next:

    idoitcmk match -v