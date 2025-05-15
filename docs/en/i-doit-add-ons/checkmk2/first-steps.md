# First steps

You are new to this topic and want to integrate both checkmk and i-doit? Follow these simple steps:

1. [Meet all requirements](./requirements.md)
2. [Download and install](./installation.md) the add-on package with the built-in command-line tool idoitcmk
3. Make sure checkmk and i-doit can be accessed by their APIs
4. Create your own configuration:

    idoitcmk init ([read more](./configuration.md))

5. [Try some basic commands](./usage.md)
6. Sync some basic information between checkmk and i-doit:

    idoitcmk sync-agents ([read more](./sync-checkmk-agents.md))

    idoitcmk sync-contact-groups ([read more](./sync-contact-groups.md))

    idoitcmk sync-folders ([read more](./sync-wato-folder.md))

    idoitcmk sync-sites ([read more](./sync-checkmk-sites.md))

    idoitcmk sync-tags ([read more](./sync-host-tags.md))

7. Either configure checkmk based on i-doit:

    idoitcmk push ([read more](./generate-wato-configuration-base-on-cmdb-data.md))

8. Or fetch useful information about your infrastructure from checkmk to i-doit:

    idoitcmk pull ([read more](./import-inventory-data-into-cmdb.md))

9. Automate all the things!

Any questions? Read our [FAQ](./faq.md)
