---
title: JDisc Discovery
description: JDisc Discovery
icon:
status:
lang: en
---

!!! warning "Please create a complete backup before making any changes to an interface/import. If the result is not satisfying, it can then be restored"

[JDisc Discovery](http://www.jdisc.com/en/) makes an inventory of whole networks and recognizes all important operating systems (including HP-UX, Solaris and AIX). It recognizes hardware and software, IP networks, Windows domains and Active Directory. In addition, JDisc Discovery identifies all important virtualization technologies, as well as many cluster environments.

## Installation

The installation of JDisc server components on a Microsoft Windows system (preferably the server version) is required for its operation. The necessary installation files can be downloaded via the following web address:

[https://jdisc.com/downloads/](https://jdisc.com/downloads/)

During the setup you will be asked which passwords are to be used for the PostgreSQL-DBMS, which is applied in the background. This concerns the administrative account **postgres** and the account **postgresro**, which only has read permission for the JDisc database. The latter account is required for the interface to i-doit. Besides, with the setup you have to specify that the PostgreSQL instance should be accessible to the outside. As a default, it observes port **25321**. You have to activate the port in the Windows firewall.

The JDisc documentation can be found at [https://jdisc.com/support/documentation/](https://jdisc.com/support/documentation/).
If you have any questions regarding the installation or configuration of JDisc, please contact the manufacturer's support [https://jdisc.com/support/](https://jdisc.com/support/).

!!! info "JDisc WebService see [JDisc FAQ](https://jdisc.com/support/faq/)"
    > The WebService implements access to some JDisc Functionality using a SOAP interface on port 9000. However, with the new GraphQL-based API, the SOAP service is obsolete. I-Doit can access our GraphQL-API to perform the same tasks as with the WEB Service starting with i-doit Release 22.
    > Simply change the protocol in i-doit to HTTPS and use port 443 and then i-doit will use the GraphQL API and you can uninstall the obsolete WEB Service Add-On.
    > The GraphQL-API offers two major advantages:
    > It is using HTTPS by default (as with the WEB Service, HTTP was used by default)
    > It is a modern and powerful API that lets you automate everything in JDisc.

## Configuration

The configuration of the interface is under **Administration → Import and interfaces → JDISC → JDisc configuration**. You can define any number of instances of JDisc Discovery. This allows complex inventory scenarios with separated networks.

[![jdisc-discovery-interface](../assets/images/en/consolidate-data/jdisc-discovery/1-jd.png)](../assets/images/en/consolidate-data/jdisc-discovery/1-jd.png)

### Common Settings

| Parameter                                | Comment                                                                                                                                                                             |
| ---------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Default Server**                       | Is the instance involved which is to be suggested with a manual import?                                                                                                             |
| **Host**                                 | Host name / FQDN or IP address of the JDisc instance; this has to be accessible from the i-doit instance.                                                                           |
| **Port**                                 | Open port of the PostgreSQL instance which runs in the background of JDisc Discovery.                                                                                               |
| **Database**                             | JDisc Discovery uses the **inventory** database as a standard.                                                                                                                      |
| **Username**                             | Enter one of the accounts which were requested during setup. You can use the account **postgresro** with limited rights, because i-doit only needs reading access for the database. |
| **Password**                             | The password assigned during setup which belongs to the used account.                                                                                                               |
| **Allow import of older JDisc version?** | This query is only relevant for older versions of JDisc Discovery.                                                                                                                  |

After the parameters are saved, you can test the connection to the JDisc database with the **Check connection** button.

To archive objects that have not been seen by JDisc for a certain number of e.g. X days, the threshold value and the threshold value unit must be set under **Administration → [Tenant name] management → Settings for [Tenant name] → JDisc**.

| Parameter          | Anmerkung                                                                                                                |
| ------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| **Threshold**      | When the setting is defined, the objects have not been seen by JDisc within this time period will be archived on import. |
| **Threshold unit** | Days, Weeks or Month                                                                                                     |

### Discovery settings

The user can activate a scan with the configured JDisc instance with i-doit. For this purpose, the JDisc Discovery web service is used, provided it is installed and activated.

| Parameter    | Comment                                     |
| ------------ | ------------------------------------------- |
| **Username** | The account to be used for the web service. |
| **Password** | Password for the account                    |
| **Port**     | Default: **9000** for GraphQL **443**       |
| **Protocol** | Default: **http** for GraphQL **https**     |

After saving the parameters, you can test whether the configuration was successful with the **Check connection** button.

## JDisc profiles

The JDisc profiles of i-doit provide the possibility to define the connection of object types and their attributes between JDisc and i-doit. Under **Administration → Import and interfaces → JDISC → JDisc profiles** you can specify how the objects found by JDisc find their way into the IT documentation.

[![jdisc-discovery-profiles](../assets/images/en/consolidate-data/jdisc-discovery/2-jd.png)](../assets/images/en/consolidate-data/jdisc-discovery/2-jd.png)

The i-doit default installation already provides a predefined example profile. The **'Example'** profile serves as an example of how you can setup your JDisc profile in order to import the data inventoried by JDisc.

!!! note "Own profiles"
    Keep in mind that you would need to alter these profiles to fit your installation and available types of objects from JDisc mapped to i-doit object types.

### General configuration

| Option           | Description                                                                                               |
| ---------------- | --------------------------------------------------------------------------------------------------------- |
| **JDisc Server** | Which JDisc instance do you want to preselect during import? See also "Configuration" as explained above. |
| **Title**        | Name of the profile                                                                                       |
| **Description**  | Description of the profile                                                                                |

### Object-type Assignment

For each type in JDisc you can select an equivalent object type in i-doit. If none is selected, devices of this type will not be imported. The order of allocations is observed during import. In order to identify an allocation, the list is processed from top to bottom. For each line the matrix has the following structure:

| JDisc type                                                                                                                                           | JDisc operating system                                                                                                                                                                                                                                           | Objekt title transform                                                                                                                                                                                                                                      | FQDN Addition                                 | Port filter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Object matching profile                                                                                                                                                                                              | Object-type                                                                                                                         | Location                                                                                                                                              | Actions                                                                         |
| ---------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- |
| Device type from JDisc which is to be considered during import<br><br>The list is read out from the specified JDisc instance and kept in the buffer. | Operating systems which already have been inventoried by JDisc.<br><br>Often the device type isn't sufficient for an assignment to an object type, therefore you can enter the operating system as an option.<br><br>You can enter wildcards (\*) in this field. | Converts the object title.<br><br>**"As is" Unchanged**: The object name is not changed<br><br>**"Uppercase" letters**: The complete object name is changed to upper case.<br><br>**"Lowercase" letters**: The entire object name is changed to lower case. | Appends an FQDN addition to the object title. | Which network ports do you want to import?<br><br>**Normal import**: All physical and logical ports are imported.<br><br>**No import**: In the text field you can enter port names which shall be ignored.  <br>The field can be used with wildcards (\*). (Example: Port name: Loopback → Ports with the name Loopback are not imported)<br><br>**Logical port**/ **Physical port**/ **FC-port**: Only ports which are named in the text field are imported.<br><br>You can combine the criteria so that only certain physical and certain logical ports are considered. | [Which strategy do you want to use](object-identification-during-imports.md) to update objects which are already documented in i-doit?<br>**Additional filter criteria can be found in the Import Matching profile** | Imported devices are assigned to this object type.<br><br>If you don't select an object type, devices of this type will be ignored. | Objects which meet the criteria mentioned here are allocated to a certain location during import. This is carried out with the **Location** category. | Add a new assignment, duplicate an existing assignment or delete an assignment. |

### Additional Options

| Option                                                                            | Description                                                                                                                                                                                                                                |
| --------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **Select categories**                                                             | Which [categories](../basics/structure-of-the-it-documentation.md) do you want to fill during import? Only supported categories are listed.                                                                                                |
| **MAC filter**                                                                    | Either a white list or a black list can be selected for MAC addresses. One MAC address per line.                                                                                                                                           |
| **Import network interfaces as**                                                  | You can map inventoried network interfaces in different categories.                                                                                                                                                                        |
| **Include software**                                                              | Do you want to import inventoried software as object type **Applications**?                                                                                                                                                                |
| **Include software** -> **Software location**                                     | Only visible if **Consider software during import** is activated. Sets the location of applications to a specific location. Useful if authorizations are used based on locations.                                                          |
| **Include software licences**                                                     | Do you want to import inventoried licenses as object type **Licenses**?                                                                                                                                                                    |
| **Import system services**                                                        | Do you want to import inventoried Services as object type **System Services**?                                                                                                                                                             |
| **Import cloud subscriptions**                                                    | Do you want to import inventoried Cloud data?<br> Data is imported to the category **Assigned subscriptions**. The backward category **Subscriptions** is is assigned to License objects.                                                  |
| **Import unknown cloud users**                                                    | Only used if the "Import cloud subscriptions" option is active.                                                                                                                                                                            |
| **Import connection endpoints**                                                   | The connections are not imported into the cabling category, but into the category "Connection endpoint". This allows to distinguish between manual cabling and automatic cabling by JDisc.                                                 |
| **Use simple database modelling?**                                                | Should the new or the old database logic be used?                                                                                                                                                                                          |
| **Include layer 3 nets**                                                          | Do you want to import inventoried IP nets as object type **Layer 3 nets**?                                                                                                                                                                 |
| **Include layer 3 nets** -> **Layer 3 filter**                                    | Only visible if **Include layer 3 nets** is activated. Specify the range in the following formats: 127.0.0.1-127.0.10.255 or 10.40.55.0/24 or 10.40.55.7. One rule per line.                                                               |
| **Include layer 3 nets** -> **Network location**                                  | Only visible if **Include layer 3 nets** is activated. Sets the location of layer-3 objects to a specific location. Useful if authorizations are used based on locations.                                                                  |
| **Layer 3 filter**                                                                | Specify the range in the following formats: 127.0.0.1-127.0.10.255 or 10.40.55.0/24 or 10.40.55.7. One rule per line.                                                                                                                      |
| **Keep IP address types**                                                         | Should IPv4 addresses, IPv6 addresses, loopback addresses, virtual addresses be imported?                                                                                                                                                  |
| **Import type for DHCP IP addresses**                                             | Should addresses assigned via DHCP be overwritten?                                                                                                                                                                                         |
| **Include VLans**                                                                 | Do you want to import inventoried VLans as object type **Layer 2 nets**?                                                                                                                                                                   |
| **Include clusters**                                                              | Do you want to import (virtualization) environments as object type **Cluster**?                                                                                                                                                            |
| **Include Blade/Chassis connections during import <br>**                          | Do you want to include objects of the type **Blade Server** to objects of the type **Blade Chassis** during import?                                                                                                                        |
| **Object type of the assigned modules within a blade/chassis unit**               | When a blade chassis or switch chassis was inventoried, you can allocate the modules to a certain object type during import.                                                                                                               |
| **Update the object type of the assigned modules**                                | Should the object types of the assigned modules of a blade/chassis device be updated?                                                                                                                                                      |
| **Import custom attributes**                                                      | When you maintain customized attributes (**Custom Attributes**) in JDisc Discovery, you can import these in i-doit. After import, they are displayed in the **JDisc Custom Attributes** category.                                          |
| **Consider default templates from object types (only for newly created objects)** | When a new object is created, it is possible to consider [templates](../efficient-documentation/templates.md) automatically. The template selection is carried out in the object type configuration.                                       |
| **Change CMDB-status of objects to**                                              | Already existing objects can receive a certain [CMDB status](../basics/life-and-documentation-cycle.md) during updating. If you don't want to change the CMDB-Status, select the option **Keep CMDB-Status**.                              |
| **Software filter**                                                               | You can either enter a white list or a black list of software applications which you want to import (Whitelist) or don't want to import (Blacklist). You can enter wildcards (\*) in this field. The list of titles is separated by comma. |
| **Use filter as regular expression**                                              | Should the object types of the assigned modules of a blade/chassis device be updated?                                                                                                                                                      |
| **Use OS family (if available) instead of OS version as object title**            | For software import, use the software family as object title instead of the software version. E.g. instead of "Windows Server 2008 Standard" only "Windows" with "Server 2008 Standard" as variant.                                        |
| **Update object type**                                                            | When the device already exists as an object in i-doit, you can determine whether the object type is to be updated with help of the assignment (see above) or not.                                                                          |
| **Update object title**                                                           | Should the object title be updated by the import?                                                                                                                                                                                          |
| **Use hostname as object title instead of FQDN?**                                 | If devices have an FQDN, they are resolved up to the host name.                                                                                                                                                                            |
| **Inherit location of parent Object**                                             | Devices that are physically connected to another device automatically receive the location of the connected device.                                                                                                                        |

Categories which are JDisc specific or have related information:

-   [Assigned Subscriptions](../basics/categories-and-attributes.md)
-   [Data source](../basics/categories-and-attributes.md)
-   [JDisc Custom Attributes](../basics/categories-and-attributes.md)
-   [JDisc Device Information](../basics/categories-and-attributes.md)
-   [JDisc Discovery](../basics/categories-and-attributes.md)
-   [Network → Connection endpoint](../basics/categories-and-attributes.md)
-   [Subscriptions](../basics/categories-and-attributes.md)
-   [Support Entitlements](../basics/categories-and-attributes.md)

### Custom identifier

!!! attention "Matching rule"
    The `deviceid` from JDisc is always used to identify objects.

JDisc `deviceid` should be assigned with type JDisc when the object is created in the **Custom identifier** category. This is intended to identify the objects later on.
If no data is available, the object matching profile is used.

## Import of Data via the Web GUI

The import of data contents from JDisc is carried out via **Extras → Import → JDisc**.

[![jdisc-discovery-import](../assets/images/en/consolidate-data/jdisc-discovery/3-jd.png)](../assets/images/en/consolidate-data/jdisc-discovery/3-jd.png)

Before you execute the import process, you have to define the import parameters.<br>
Because it is possible to apply more than one JDisc server, you have to select the JDisc server in the first step. The profile which you defined beforehand can be also selected to influence the imported contents and their use. In addition, you can set the import mode. The **Append** import mode creates all found objects without checking whether these already exist. The **Update** import mode creates only objects which can't be found in the i-doit data pool. Categories of already existing objects are complemented (if necessary) with new data. The **Overwrite** import mode is, in principle, like the **Update** mode but with the difference that list categories are emptied first and are then recreated.

| **Import Mode**                       | **Description**                                                                                                                                                                    |
| ------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Append**                            | The import mode **"Create"** will create all found objects without checking if they already exist.                                                                                 |
| **Update**                            | The import mode **"Update"** will only create objects that could not be found in i-doit. Categories of already existing objects will be supplemented with new data (if necessary). |
| **Overwrite**                         | The **"Overwrite"** import mode behaves exactly like the "Update" mode with the difference that list categories are first emptied and then newly created.                          |
| **Update (Existing only)**            | The addition of "(Existing only)" will update only existing objects, no new objects are created.                                                                                   |
| **Overwrite (New inventory)**         | With the addition **"(New inventory)"** fixed i-doit-to-jdisc-device links are discarded and the object associations are recalculated.                                             |
| **Only create newly scanned devices** | The "**Only create newly scanned devices"** Mode creates only objects that do not exist in i-doit.                                                                                 |
| **Update (New inventory)**            | With the addition **"(New inventory)"** fixed i-doit-to-jdisc-device links are discarded and the object associations are recalculated.                                             |

With the logging function you can influence the extent of the written log. A more extensive logging increases the import duration.<br>
When you carried out the settings completely, you can activate the import with **Start the import**. Please, consider that the duration of the import process depends both on the size of the JDisc database and the utilized hardware.<br>
When the import process is completed, a summary is displayed in the **Result** section.<br>
You can find the logs which are generated during import in the i-doit directory called `log/`.

## Import via JDisc Discovery category

You can update individual objects using the JDisc Discovery category.
Here it is possible to scan the device using a specific identification (host address, FQDN and serial number).

[![JDisc Profile](../assets/images/en/consolidate-data/jdisc-discovery/6-jd.png)](../assets/images/en/consolidate-data/jdisc-discovery/6-jd.png)

You can add the category via the object type configuration of the object type.

## Import via i-doit Console

Importing data from JDisc to i-doit is not only possible manually via the user interface. It can also be executed via the i-doit [Console](../automation-and-integration/cli/console/index.md) and thus automated. How the corresponding call is generated can be found in the [corresponding article](../automation-and-integration/cli/console/options-and-parameters-cli.md) with an example for the import-jdisc option.

For the import, the ID of the desired profile can be specified. The ID can be found in the list of profiles:

[![jdisc-discovery-id](../assets/images/en/consolidate-data/jdisc-discovery/4-jd.png)](../assets/images/en/consolidate-data/jdisc-discovery/4-jd.png)

Also the ID of the JDisc server to be used can be specified. This can be found in the configuration:

[![jdisc-discovery-server](../assets/images/en/consolidate-data/jdisc-discovery/5-jd.png)](../assets/images/en/consolidate-data/jdisc-discovery/5-jd.png)

A jdisc.ini might look like this more information about .ini files can be found [here](../automation-and-integration/cli/console/using-configuration-files-for-console-cli.md).

```ini
[commandArguments]
[commandOptions]
user=admin
password=admin
tenantId=6
profile=1
group=
mode=1
server=2
overwriteHost
detailedLogging=3
regenerateSearchIndex
[additional]
```

If we assume that the jdisc.ini is located in the i-doit root directory, then the import is called with the ldap.ini from the i-doit root directory like this:

```shell
sudo -u www-data php console.php import-jdisc -c jdisc.ini
```

### JDisc availability Report view

Under **Report Manager -> Views** you will find a report with the name **JDisc availability**, which compares i-doit objects with JDisc objects.
