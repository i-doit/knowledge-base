# CheckMK

[![Logo von Check_MK](../assets/images/en/i-doit-pro-add-ons/checkmk/1-cmk.gif)](../assets/images/en/i-doit-pro-add-ons/checkmk/1-cmk.gif)

Check\_MK is a software for [Network Monitoring](../automation-and-integration/network-monitoring/index.md) which can be configured from i-doit.

The export supplies Check\_MK with WATO configuration files. WATO is the configuration interface of Check\_MK managing changes of the monitoring configuration and checking their validity. The configurations contain IP addresses or the DNS name of hosts and/or clusters and their members that are to be exported as well as associated host properties (tags) and linked contacts. Further monitoring specific configurations remain in Check\_MK.

The advantage of filling it with i-doit is that you don't have to take care of data maintenance twice and that the host properties, which determine the monitoring in Check\_MK based on rules, can be generated automatically through CMD information, as for example the location of an object.

!!! attention "Attention"

    The Interface officially only supports Check\_MK up to version 1.4, all newer versions will be supported by the [Check\_MK 2 add-on](./checkmk2/index.md).  
    It is therefore unclear which functions/areas of the interface will work correctly with Check\_MK versions > 1.4.

Basic Configuration
-------------------

For Check\_MK a configuration has to be saved at **Administration → Interfaces → Monitoring → Export configuration** in i-doit. The local path defines an absolute or a relative path (for the installation of i-doit, for example) in the file system in which the configuration generated in i-doit is to be deposited. The link to the monitoring tool gives a basic link to generate links from i-doit to the monitoring instance.

Further configuration parameters are opened after selecting Check\_MK as the type.

**Export assigned contacts** allows the storing of contacts which were assigned to the corresponding [objects](../basics/structure-of-the-it-documentation.md) in this role in the exported configuration of the object. In this connection the [object title](../basics/unique-references.md) of the contacts is also exported

In the plain text field **Site** you can define a site to which the exported configuration is forwarded to. For this **Multisite (Distributed Monitoring)** has to be set to "**Yes**".

When locking hosts or folders, the exported configuration cannot be edited anymore in Check\_MK. This is useful to prevent Check\_MK of making changes that would be overwritten again with the next export.

The sites that are selectable as **Master Site** are the ones that were added through multiple export configurations. This entry can be left empty if there is only one configuration.

[![Basic Configuration](../assets/images/en/i-doit-pro-add-ons/checkmk/2-cmk.png)](../assets/images/en/i-doit-pro-add-ons/checkmk/2-cmk.png)

Categories
----------

Generally, the [category folder](../basics/structure-of-the-it-documentation.md) **Check_MK (Host)** needs to be assigned to the [object types](../basics/structure-of-the-it-documentation.md) that are going to be used via the **[Quick Configuration Wizard](../basics/assignment-of-categories-to-object-types.md)**.

An export configuration has to be chosen and a host nanme/ host address have to be defined in the category **Check_MK (HOST)**. Additionally, the export of the IP address can be prevented, for example, if it was supplied by the DHCP and changes.

[![Categories](../assets/images/en/i-doit-pro-add-ons/checkmk/3-cmk.png)](../assets/images/en/i-doit-pro-add-ons/checkmk/3-cmk.png)

Host Tags
---------

The **Host tags** are assigned and shown via the category of the same name. They are distinguished as follows:

*   **Host tags** – simple and manual assignment of tags (and thus statically)
    
*   **CMDB tags** – tags that are defined by an [attribute](../basics/structure-of-the-it-documentation.md) from the CMDB
    
*   **Dynamic tags** – host tags which are generated through rules
    

All kinds of host properties are configured via the **Extras** menu of **Check_MK**.

[![Extras Check_MK](../assets/images/en/i-doit-pro-add-ons/checkmk/4-cmk.png)](../assets/images/en/i-doit-pro-add-ons/checkmk/4-cmk.png)

The static host properties are managed manually. The default properties of Check\_MK are already delivered in a predefined way.

The CMDB properties make use of the contents from the CMDB. Only object types that are assigned to the category folder Check\_MK are shown in the configuration. Single attributes can be selected here. You can set up a global definition which applies to all listed object types, which are not associated to any special configuration that ignores the global definition. The object title of the location of an object can be added as a tag to the host properties via the “**Export generic location property**” item.

In the following example the **Operating system** attribute from the CDMB is converted to a host property.

[![Operating system](../assets/images/en/i-doit-pro-add-ons/checkmk/5-cmk.png)](../assets/images/en/i-doit-pro-add-ons/checkmk/5-cmk.png)


The example server is assigned to the operating system Debian GNU/Linux. This value is transferred to the corresponding host property when exporting the configuration.

[![example server ](../assets/images/en/i-doit-pro-add-ons/checkmk/6-cmk.png)](../assets/images/en/i-doit-pro-add-ons/checkmk/6-cmk.png)


The dynamic properties function in a similar way with the exception of being based on rules. In the following example the type of an object is evaluated and passed on when exporting the configuration. If the object is a server, then it receives the host tags Local network and DMZ in this specific example.

[![specific example](../assets/images/en/i-doit-pro-add-ons/checkmk/7-cmk.png)](../assets/images/en/i-doit-pro-add-ons/checkmk/7-cmk.png)

Host Properties Category
------------------------

The dynamic host properties are displayed and the manual, static host properties are assigned in the **Host properties** category of an object.

Service Assignment Category
---------------------------

!!! info "Analysis Module"

    This category can only be used when the Analysis module is installed.

The **Service assignment** is used to assign installed software to service checks which are read out per [Livestatus](../automation-and-integration/network-monitoring/fetch-data-with-livestatus-ndo.md). This is applied to calculate the affected IT services using the Analysis module and the failures reported by the monitoring. In this category, a monitoring check is “married” to a software installed on the system, so to speak. This way, the IT services which are affected directly or indirectly by the technical failure can be detected in the Analysis module.

Export of the Configuration
---------------------------

With **Extras → Check_MK → Check_MK Export** you can manually initiate the export of the WATO configuration.

Files are generated in the .mk format which can be transferred to the Check\_MK instance. First, they are saved in the folder which was entered in the export configuration. For an easy transfer to the OMD site the data are also _compressed_ to .zip and as tarball files.

The definition of the export structure allows for transferring the exported objects in a folder structure to the Check\_MK. Here you can choose whether the locations or the object types are to be saved as folders.

Transfer Script
---------------

A shellscript named **checkmk_transfer.sh** is located in the root path of the i-doit installation. This is configured with the corresponding accesses to the OMD site and then transfers the i-doit configuration to the WATO in an automated way.

For this purpose it uses the [i-doit Controller](../automation-and-integration/cli/index.md) and builds up a SSH connection to the Check\_MK instance. It transfers the files to the OMD site and extracts them automatically. Afterwards, it notifies WATO that changes have been made.

A public key authentication between the i-doit instance and the Check\_MK OMD site is required for the transfer via SSH. A detailled guide for this is available in the i-doit installation directory under ** docs/checkmk/README.**

Releases
--------

| Version | Date | Changelog |
| --- | --- | --- |
| 1.1 | 2022-09-05 | [Task] PHP 8.0 Compatibility  <br>[Task] Design Compatibility |
| 1.0.2 |     | [Improvement] Compatibility with i-doit 1.16 |
| 1.0.1 | 2019-10-14 | [Bug] List editing of Check_MK categories<br>[Bug] Create new category entries in the list editing category "Export Parameter (subcategory of Check_MK (Host))"<br>[Bug] Add more dynamic CMDB-tags<br>[Bug] Export of dynamic host tags with special characters<br> |
| 1.0 | 2018-12-17 | [Improvement] Add-on is installable<br>[Improvement] Add-on is uninstallable<br>[Improvement] Add-on is activatable<br>[Improvement] Add-on is deactivatable<br>[Change] Add-onize Check_MK<br> |