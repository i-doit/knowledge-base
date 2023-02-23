i-doit provides over 200 predefined [categories](structure-of-the-it-documentation.md). The result is a wide range of over 1,000 [attributes](structure-of-the-it-documentation.md) which theoretically can be documented for each [object](structure-of-the-it-documentation.md). This abundance inevitably leads to the frequently asked question "What is the purpose of category XY with all its attributes?" Which concepts represent each single category and each single attribute?

Flexibility versus specifications

The following table is an attempt to give you a general overview. It is an "attempt" because of the sheer bulk of predefined categories and attributes. There are no strict specifications for many categories and attributes. Therefore the following descriptions are only recommendations. We would appreciate additions and corrections and would be glad to receive information about how you use the following categories and attributes in practice. Please just send an e-mail to [feedback@i-doit.com](mailto:feedback@i-doit.com).

Global Categories
-----------------

| Category | Attribute | Description |
| --- | --- | --- |
| **All tickets** [![all-tickets](../assets/images/en/basics/categories-and-attributes/1-caa.png)](../assets/images/en/basics/categories-and-attributes/1-caa.png) | **-** | [Service Desk](../automation-and-integration/service-desk/index.md): If the interface to the service desk is activated, you can display all referenced tickets for this object with this category. |
| **General  <br>** | **ID** | Each object receives a [unique identifier (ID)](./unique-references.md) by the underlying DBMS MySQL/MariaDB. |
|     | **Title  <br>** | Every object must be named. Sometimes the name even has to be unique per tenant or per object type. Synonym: **Object title** |
|     | **Status  <br>** | The [life cycle of the documentation](./life-and-documentation-cycle.md) is mapped via the **Status**. |
|     | **CMDB status  <br>** | The CMDB status indicates the [stadium of the life cycle](./life-and-documentation-cycle.md) of an object, for example, **in operation**. |
|     | **Purpose  <br>** | If the component serves a special purpose, you can record it here. The **Tags** attribute is a good alternative. |
|     | **Category  <br>** | Don't confuse this attribute with the i-doit categories. It is used only seldom and can be replaced by the **Tags** attribute. |
|     | **SYSID** | Beside the **Object ID**, the **SYSID** is suited for [unique referencing](./unique-references.md). Additionally, the user can edit the SYSID while the **Object ID** is fixed. |
|     | **Tags** | You can add any number of keywords to each object. This is very useful, for example, to assign specific roles or purposes to an object. |
|     | **Description  <br>** | Almost every entry of a category can be provided with a description. You can also add notes. Here a simple evaluation is impeded as unstructured texts are involved. |
| **Analysis** [![Analysis](../assets/images/en/basics/categories-and-attributes/2-caa.png)](../assets/images/en/basics/categories-and-attributes/2-caa.png) | **-** | Forwards you to the impact simulation of the [Analysis](../i-doit-pro-add-ons/analysis.md) add-on. |
| **Connectors  <br>** | **- ** | Here you can document the cabling between components. A distinction is made between **Input** and **Output** which can be connected to each other. This category is filled automatically by other categories, for example, **Port** or **Power consumer**. |
| **Address  <br>** | **-** | Street address; is often assigned to objects of the type **Building** |
| **Workplace components  <br>** | **-** | Objects which are assigned to an object of the type **Workstation**. Backwards category: **Assigned workstation  <br>** |
| **Zone** | **-** | Use of a net zone; is contained in the category folder **Net zone**; Backwards category: **Net → Net zone** |
| **Operating system  <br>** | **-** | Here you can record the primal operating system; this information complements the category **Software assignment** |
| **Relationship** [![Relationship](../assets/images/en/basics/categories-and-attributes/3-caa.png)](../assets/images/en/basics/categories-and-attributes/3-caa.png) | **-** | List of all [object relations](./object-relations.md) |
| **Images  <br>** | **-** | Image gallery |
| **Accounting  <br>** | **-** | Details for accounting, such as **inventory no, account** etc. |
| **Cluster** | \-  | Via this category folder you can document a **Cluster**.  Frequent clusters are virtualization clusters, web clusters or database clusters. Subordinate categories: **Cluster**, **Cluster service** **assignment**, **Cluster members, Cluster vitality, Shared Storage, Shared virtual switches**,  **Administration service  <br>** |
| **Cluster service assignment  <br>** | \-  | Link of an object of the type **Cluster service assignment**, i.e. a software which represents or manages the **Cluster**; is contained in the **Cluster** category folder |
| **Cluster Members** | \-  | Components which form a **Cluster**; is contained in the **Cluster** category folder. Backwards category: **Cluster memberships** |
| **Cluster memberships** | \-  | Objects can be assigned to one or more clusters. Backwards category: **Cluster members** |
| **Cluster vitality** | \-  | Visual presentation and statistics regarding the **Object vitality** of cluster members; is contained in the **Cluster** category folder |
| **CMDB explorer** [![CMDB explorer](../assets/images/en/basics/categories-and-attributes/4-caa.png)](../assets/images/en/basics/categories-and-attributes/4-caa.png) | \-  | Opens the object in the [CMDB explorer](../evaluation/cmdb-explorer/index.md) |
| **Controller** | \-  | Built-in onboard or PCIe plug-in cards for the connection of storages drives; is contained in the category folder **Direct Attached Storage** |
| **CPU** | \-  | List of CPU sockets and built-in CPUs |
| **CUCM VoIP Phone Line  <br>** | \-  | Information about Cisco Unified Call Manager (CUCM) |
| **CUCM VoIP Phone** | \-  | Information about Cisco Unified Call Manager (CUCM) |
| **Data Source** | \-  | Information about the [data import](../consolidate-data/index.md) which provided the attributes of this object |
| **Files  <br>** | \-  | Assignment of files which are again stored as objects of the type **Files**; you can upload new files via drag and drop; similar to the categories **Manual assignment** and **Emergency plan assignment**; backwards category: **Files → Assigned objects** |
| **Database assignment  <br>** | \-  | If an installed application (see object types **Applications** and **System service**) accesses one or more databases, it can be documented here; supplements the **Installation** category in the category folders **Applications** and **Services** |
| **Backup** | \-  | Backup: Data of this object are stored by another object. Backwards category: ******Backup** (assigned objects**)** |
| **Backup (assigned Objects)** | \-  | Backup: This objects stores data of other objects. Backwards category: **Backup** |
| **Documents** | \-  | [Documents](../i-doit-pro-add-ons/documents/index.md) add-on: List of created documents |
| **E-Mail addresses** | \-  | List of e-mail addresses; often in connection with contacts (see object types **Persons**, **Person groups** and **Organization**); supplements the **Master data** in the category folders **Persons**, **Person groups** and **Organization** |
| **Vehicle** | \-  | Details about a vehicle, for example, license plate; suitable for the documentation of a vehicle fleet or for company cars; see object type of the same name: **Vehicle** |
| **Fiber/lead** | \-  | Detailed description of fiber optics or of the cores of copper cables, therefore often assigned to the object type **Cable** |
| **FC port** | \-  | List of fiber channel ports; serves the documentation of storage area networks (SANs) and is often assigned to the object types **Storage system** and **FC switch**; is contained in the category folder **Storage Area Network**; automatically fills in the **Cabling → Connectors** category |
| **Aircraft** | \-  | Details about an aircraft |
| **Form factor** | \-  | Information whether a hardware is usable for 19'' and if yes, how many height units it requires. Here you also specify how many height units a server rack has. You can also indicate dimensions and weight. |
| **Shares** | \-  | This object provides one or more shares (Samba, CIFS, NFS etc.). Backwards category: **Share access** |
| **Share access  <br>** | \-  | This object accesses an existing share (Samba, CIFS, NFS etc.) of another object. Backwards category: **Shares** |
| **Guest systems  <br>** | \-  | Virtual machines assigned to a host system; is contained in the category folder **Virtual Host** |
| **Managed devices  <br>** | \-  | If the object is a remote management controller (see object type of the same name), you can assign objects here which can be managed via this object (see also Lights Out Management, LOM). Backwards category: **Remote Management Controller** |
| **Shared virtual switches  <br>** | \-  | Information about shared virtual switches (see also category **Virtual Host → Virtual Switches**); is contained in the category folder **Cluster** |
| **Shared Storage  <br>** | \-  | Visual presentation and statistics regarding host systems and LUNs; is contained in the category folder **Cluster** |
| **Device** | \-  | List of  drives (hard disks, SSDs etc.); is contained in the category folder **Direct Attached Storage**; supplements the **Controller** and **Raid-Array** categories in this category folder |
| **Graphic card  <br>** | \-  | List of built-in graphic cards |
| **Group memberships  <br>** | \-  | Assignment of the object to a dynamic or static group, see object type **Object group**; backwards category: **Object group** |
| **Manual assignment** | \-  | Assignment of files which can be stored as objects of the type **Files**; you can upload new files per drag and drop; similar to the categories **Files**, ****Emergency plan assignment****; Backwards category: **Files → Assigned objects** |
| **Host definition** | \-  | [Network Monitoring](../automation-and-integration/network-monitoring/index.md): Export of configuration settings for Nagios |
| **Host-template definition** | \-  | [Network Monitoring](../automation-and-integration/network-monitoring/index.md): Export of configuration settings for Nagios |
| **Host Bus Adapter (HBA)** | \-  | List of HBAs which provide fiber channel ports (see **Storage Area Network → FC port**); serves the documentation of storage area networks (SANs); is contained in the category folder ****Storage Area Network**** |
| **Host address** | \-  | [IPAM](../use-cases/ip-adress-management.md): List of configured IP addresses (IPv4/IPv6); additional assignment of **Host name**, **Domain**, network connections (see category **Network** **→ Port**) and subnets (see object type **Layer 3 Net**); backwards category: **IP list** |
| **Interface** | \-  | Allocation of physical network connections (see category **Network** **→ Port**) to internal connections of a device, for example, on-board or PCIe cards; is contained in the category folder **Network** |
| **JDisc Custom Attributes** | \-  | Here you can display and edit custom attributes which were imported from [JDisc Discovery](../consolidate-data/jdisc-discovery.md) |
| **JDisc Discovery** | \-  | Import for [JDisc Discovery](../consolidate-data/jdisc-discovery.md) for this object |
| **Cable** | \-  | Information about a **Cable**, for example, length and color |
| **Contact assignment** | \-  | Assigns **Persons**, **Person groups**, **Organizations** etc. to an object; each allocation can be provided with a **Role**, for example, **Administrator**; backwards category: **Persons/Person groups/Organization → Assigned objects** |
| **Drive** | \-  | Documentation of configured mount points or drive letters; supplements category folder **Direct Attached Storage**; see also categories **Share access** and **Storage Area Network → Logical devices(client)** |
| **LDAP** | **Distinguished Name (DN)** | If a person or a person group is synchronized via  [LDAP/AD](../automation-and-integration/ldap-active-directory-ad/index.md), the related DN is stored here. |
| **Last login user** | \-  | The user who was logged in last; can be imported by [JDisc Discovery](../consolidate-data/jdisc-discovery.md) |
| **Listener** | \-  | If an installed application (see category **Software assignment**) opens a port (1-65535) via the IP protocol (see category **Host address**), that is via protocols such as TCP and UDP, you can document it here; is contained in the category folder **Network connections**; backwards category: **Connection** |
| **Livestatus** | \-  | [Network Monitoring](../automation-and-integration/network-monitoring/index.md): shows current information about a host and its services which are available via the Livestatus interface; is contained in the category folder **Monitoring** and is configured there |
| **Logbook** [![Logbook](../assets/images/en/basics/categories-and-attributes/5-caa.png)](../assets/images/en/basics/categories-and-attributes/5-caa.png) | \-  | [Changes of an object](./logbook.md) |
| **Logical devices (Client)** | \-  | If an object accesses LUNs of a SAN, this is documented here; is contained in the category folder ****Storage Area Network****; backwards category: **Logical devices (LDEV Server)** |
| ****Logical devices** (LDEV Server)** | \-  | If an object, for example, a SAN, offers LUNs to other objects, this is documented here; is contained in the category folder **Storage Area Network**; backwards category: **Logical devices (Client)** |
| **logical ports** | \-  | Summary of physical network connections (see category **Network → Port**), often named trunking or bonding; is contained in the category folder **Network** |
| **Logical location** | **Parent object  <br>** | Object of the type **Person** which is allocated to an object of the type **Workstation**. Backwards category: **Assigned workstation** |
| ****Direct Attached Storage**** | \-  | Category folder with the subordinate categories **Controller**, **Device** and **Raid-Array**; evaluation of these categories; supplements the category **Drive**; for access to shares see category **Share access** and for LUNs the category **Storage Area Network** **→ Logical Devices (Client)** |
| **Members** | \-  | List of objects with their logical ports (see category **Network → Logical ports**) which are allocated to a VRRP/ HSRP/ CARP cluster; is contained in the category folder **VRRP**; backwards category: **VRRP membership** |
| **Model** | \-  | One of the most important categories of a (hardware) object with details about **Manufacturer**, **Model** and **Serial number** |
| **Monitoring** | \-  | [Network Monitoring](../automation-and-integration/network-monitoring/index.md): category folders with the subordinated categories **Livestatus** and **NDO**; configures and activates the query of current information of a host |
| **Nagios (application)** | \-  | [Network Monitoring](../automation-and-integration/network-monitoring/index.md): Export of configuration settings for Nagios |
| **Nagios (host TPL)** | \-  | [Network Monitoring](../automation-and-integration/network-monitoring/index.md): Export of configuration settings for Nagios |
| **Nagios (host)** | \-  | [Network Monitoring](../automation-and-integration/network-monitoring/index.md): Export of configuration settings for Nagios |
| **Nagios (service TPL)** | \-  | [Network Monitoring](../automation-and-integration/network-monitoring/index.md): Export of configuration settings for Nagios |
| **Nagios (service)** | \-  | [Network Monitoring](../automation-and-integration/network-monitoring/index.md): Export of configuration settings for Nagios |
| **Nagios group** | \-  | [Network Monitoring](../automation-and-integration/network-monitoring/index.md): Export of configuration settings for Nagios |
| **Nagios Service dependencies** | \-  | [Network Monitoring](../automation-and-integration/network-monitoring/index.md): Export of configuration settings for Nagios |
| **NDO** | \-  | [Network Monitoring](../automation-and-integration/network-monitoring/index.md): displays current information about a host and its services which are available via the NDOUtils (or IDOUtils) interface; is contained in the category folder **Monitoring** and is configured there |
| **Net zone** | \-  | Category folder with the subordinated categories **Zone** and **Options**; is usually assigned to the object type **Net zone** |
| **Network** | \-  | Category folder with the subordinated categories **Interface**, **Logical ports**, **Port**, **Port overview** and **VRRP membership** |
| **Network connections** | \-  | Category folder with the subordinated categories **Listener** and **Connection**; enables the documentation of network communications between applications; is often assigned to (virtual) hardware, such as servers, VMs or clients with installed applications (see category **Software assignment**); requires IP addresses (see category **Host address**) |
| **Emergency plan assignment  <br>** | \-  | Assignment of files which then again are stored as objects of the type **Files**; you can upload new files per drag and drop; similar to the categories **File assignment** and **Manual assignment**; backwards category: **Emergency plan → Assigned objects** |
| **Object picture** | \-  | Changes the default image of an object which is depicted on each page; as only 150 x 150 pixels are allowed, the **Images** category is more suitable in most cases |
| **Options** | \-  | Details about a net zone; is contained in the category folder **Net zone** |
| **Passwords** | \-  | List of passwords |
| **Port** | \-  | List of physical network connections (Ethernet); contains attributes regarding the MAC address, allocated VLANs (see object type **Layer 2 Net**), assigned IP addresses (see category **Host address**) and connected devices; is contained in the category folder **Network**; automatically fills the category **Cabling → Connectors** |
| **Audit** | \-  | If a component is checked on a regular basis, you can enter the results in this category. |
| **Object vitality** | \-  | Indicates the target system utilization; for this purpose the categories **CPU**, **Memory**, **Network → Port**, ****Direct Attached Storage**** and **Software assignment** are assessed and compared to the category **Computing resources**, which is assigned to the allocated applications; has only little informative value as it is just a simple addition of values |
| **QinQ CE-VLAN** | \-  | Documentation of QinQ VLANs (see object type **Layer-2 net**) |
| **QinQ SP-VLAN** | \-  | Documentation of QinQ VLANs (see object type **Layer-2 net**) |
| **Raid-Array  <br>** | \-  | Documentation of hardware or software RAIDs with the various levels (1, 5, 6, 10 etc.); is contained in the category folder **Direct Attached Storage** |
| **locally assigned objects  <br>** | \-  | List of all physically subordinated objects with respect to space; backwards category: **Location** |
| **Computing resources** | \-  | Details about system requirements of applications (CPU, working memory, disk space, network bandwidth); is evaluated by the category **Object vitality** |
| **Invoice** | \-  | List of invoices; supplements category **Accounting** |
| **Rights management** [![Rights management](../assets/images/en/basics/categories-and-attributes/6-caa.png)](../assets/images/en/basics/categories-and-attributes/6-caa.png) | \-  | [Rights management](../efficient-documentation/rights-management/index.md): Who or which person group has access options for this object? |
| **Remote management controller** | **Assigned object** | If the object has a Lights Out Management (LOM), you can link it here. Often the object type **Remote Management Controller** of the same name serves this purpose. Backwards category: **Managed devices** |
|     | **Primary access URL** | If the assigned object has a link (see category **Access**), it is shown here. In case of several links the link which is marked as primary link is displayed. |
| **Backwards service assignment** |     |     |
| **Interface** | \-  | Further external interfaces of a hardware which go beyond physical network ports (see category **Network → Port**) and power supplies (see category **Power consumer**), for example, peripheral devices via USB, HDMI, display Port, VGA etc.; thus suitable for the documentation of rather "unimportant" components, such as mouse and keyboard |
| **Service** | \-  | Category folder with the subordinated categories **Service relation**, **Service components**, **Service Logbook** and **Service Type**; contains information about the service; is often assigned to the object type **Service** of the same name |
| **Service relation** | \-  | If components of a service are interdependent, you can document the dependence here. Only objects which are in the category **Service components** are listed here; is contained in the category folder **Service** |
| **Service definition** | \-  | [Network Monitoring](../automation-and-integration/network-monitoring/index.md): Export of configuration settings for Nagios |
| **Service components** | \-  | List of objects which are subordinated under the service; is contained in the category folder **Service**; backwards category: **Service assignment** |
| **Service Logbook** | \-  | List of [logbook](./logbook.md) entries from all objects which are added as components to the service (see category **Service components**); is contained in the category folder **Service** |
| **Service Type** | **type** | Typing of services; is contained in the category folder **Service** |
| **Service-template definition** | \-  | [Network Monitoring](../automation-and-integration/network-monitoring/index.md): Export of configuration settings for Nagios |
| **Service assignment** | \-  | Serves the object as a component of a service, you can add it here. An object can be assigned to several services. Backwards category: **Service components** |
| **SIM card** | \-  | Details about a **SIM card** (PIN, PUK, phone number etc.); backwards category: **Assigned cards  <br>** |
| **SLA** | \-  | Information about a Service Level Agreement (SLA); often assigned to the object types **Service** and **Contract** |
| **Smart Card Certificate** | \-  | Details about a smartcard |
| **SNMP** | \-  | Live query of information via the SNMP protocol; retrieved date are **not** saved |
| **SOA stacks** |     | Details about a **Middleware** |
| **Software assignment** | \-  | List of installed applications (see object types **Applications**, **Operating system**, **DBMS**); supplements the category **Operating system**; backwards categories: **Applications/DBMS/**Services** → Installation** |
| **Sound card** | \-  | List of built-in sound cards |
| **Subscriptions** | \-  | Information on existing subscriptions, which is assigned to **persons** via the category **Assigned Users**; can be imported via **JDisc** |
| **Memory** | \-  | List of all built-in RAM modules (working memory) |
| **Storage Area Network** | \-  | Category folder with subordinated categories **FC port**,  **Host bus adapter (HBA)**, **Logical devices (Client)** and **Logical devices (LDEV Server)**; for the documentation of Storage Area Networks (SANs) and LUNs |
| **Stack member** | \-  | List of objects which are allocated to a hardware stack; often assigned to the object type **Stacking**; backwards category: **Stack membership** |
| **Stack membership** | \-  | Allocation of an object to a hardware stack; backwards category **Stack member** |
| **Stacking** | \-  | Information about a hardware stack; this logic was replaced by the object type **Stacking** and the categories **Stack member** and  **Stack membership** |
| **Location** | \-  | Spatial assignment of an object to another object; additionally, you can "build in" objects suitable for 19'' (see category **Form factor**) into a server rack in the appropriate height unit; geo coordinates are also possible; backwards category: **locally assigned objects** |
| **Status-planning** [![Status-planning](../assets/images/en/basics/categories-and-attributes/7-caa.png)](../assets/images/en/basics/categories-and-attributes/7-caa.png) | \-  | Details about which **CMDB status** (see category **General**) is valid and when |
| **Power supplier** | \-  | Information about a power supplier |
| **Power consumer** | \-  | List of built-in power adapters; thus you can document a redundant power supply, automatically fills the category **Cabling → Connectors**; enables the specification of a **BTU** (suitable for the  calculation of cooling/ air-conditioning) |
| **Support Entitlements** | \-  | **JDisc** retrieves the status of support claims directly from some vendors and imports them into its database. This information can be imported from **JDisc** to **i-doit**. |
| **Telephone/fax** | \-  | Information such as telephone number or fax number |
| **TSI service** |     | Details about Cisco telephone systems |
| **Connection** | \-  | If an installed application (see category **Software assignment**) accesses another application via an IP-based network connection (see category **Host address**), you can document it here; is contained in the category folder **Network connections**; backwards category: **Listener** |
| **Cabling** | \-  | Category folder with the subordinated categories **Connections** und **Interface**; offers several (graphical) evaluations of these categories |
| **Assigned cards  <br>** | \-  | List of SIM cards (see object type **SIM card**); backwards category: **SIM card** |
| **Version** | \-  | List of versions of a software; is often assigned to the object types **Applications**, **Operating system**, **DBMS** and **Services**; supplements the categories **Applications/DBMS/Services → Installation **and **Variants** |
| **Contract assignment** | \-  | Assignment of a **Contract** to this object; may contain differing details about start and end date of a contract |
| **Administration service  <br>** | \-  | Instance which manages the virtual cluster; is contained in the category folder **Cluster**; backwards category: **Virtual managed objects** |
| **Virtual managed objects** | \-  | List of objects which are managed by this instance; backwards category: **Cluster → Administration service** |
| **Virtual devices  <br>** | \-  | Assignment of virtual devices to hardware resources of the host system from the fields **Network**, **Storage** and **Interfaces**; is contained in the category folder **Virtual host** |
| ****Virtual machine**** | \-  | Category folder with the subordinated categories **Virtual devices** and **Virtual machine**; for the documentation of virtual environments; backwards category: **Virtual host** |
| ****Virtual** **machine**  <br>** | \-  | Information whether the object is a virtual machine; is contained in the category folder **Virtual** **machine** of the same name |
| ****Virtual** Switches** | \-  | Virtual network switches in a virtual environment; is contained in the category folder **Virtual host** |
| ****Virtual** host** | \-  | Category folder with the subordinated categories **Guest systems**, **Virtual host** and **Virtual Switches**; is typically allocated to a host system for virtual machines (see object type **Virtual host**) or to a **Cluster**; backwards category: **Virtual machine** |
| ****Virtual** host** | \-  | Details about host system or cluster of a virtual environment; is contained in the category folder **Virtual host** of the same name |
| **VIVA** [![VIVA](../assets/images/en/basics/categories-and-attributes/8-caa.png)](../assets/images/en/basics/categories-and-attributes/8-caa.png) | \-  | Add-on [VIVA](../i-doit-pro-add-ons/viva/index.md): Information which is relevant for basic IT protection |
| **VRRP** | \-  | Category folder with the subordinated category **Members**; contains information about the VRRP/HSRP/CARP protocols |
| **VRRP Member** | \-  | List of all logical ports (see category **Network → Logical ports**) assigned to a VRRP/HSRP/CARP cluster; is contained in the category folder **Network**; backwards category: **VRRP → Member** |
| **WAN Connection  <br>** | \-  | Attributes such as the bandwidth of upload and download of an internet connection; often assigned to the object type **WAN Connection** |
| **Certificate** | \-  | Documentation of x.509 certificates |
| **Assigned Workplaces  <br>** | \-  | A **Person** can be assigned to one or more objects of the type **Workplace**; backwards category: **Logical Location** |
| **Assigned objects  <br>** | \-  | Allocation of objects to a file; is contained in the category folder **Files**; backwards category: **Files** |
| **Assigned workstation** | \-  | The object with this category is assigned to a **workstation**. Backwards category: **Workplace components** |
| **Access** | \-  | Here you can set any links; offers a simple but fast connection between various applications; the protocol used in the URL can be any protocol but has to be known to the web browser |
| **Assigned Users** | \-  | Assignment of subscriptions to persons; rear category: **assigned subscribers** |
| **Assigned Subscriptions** | \-  | Backwards category of the category **Assigned users** |

Specific Categories
-------------------

| Category | Attributes | Description |
| --- | --- | --- |
| **Current file  <br>** | \-  | Current revision of a file for download; is contained in the category folder **Files**; is based on the category **File versions** |
| **Applications** | \-  | 1.  Category folder with subordinated categories **Installation** and **Variants**; contains information about the application, such as the **Manufacturer**<br>2.  Details about the application, such as the **Manufacturer**; is contained in the category folder **DBMS** |
| **Desktop** | \-  | Information about a computer, for example **Client type** (laptop, desktop etc.) or **Keyboard Layout**; often assigned to the object type **Client** |
| **Relation details** | \-  | Details about an [object relation](./object-relations.md) |
| **Branch** | \-  | List of branches; is contained in the category folder **PDU** |
| **Chassis** | \-  | Category folder with subordinated categories **Chassis view**, **Slots**, **Cabling** and **Assigned devices**; often assigned to the object types **Blade Chassis** and **Switch Chassis** |
| **Chassis view** | \-  | Visual presentation of a blade or switch chassis; is contained in the category folder **Chassis** |
| **Cluster installation** | \-  | List of allocated clusters; is contained in the category folder **DBMS**; is based on data of the category **DBMS → Assigned clusters** |
| **Files** | \-  | Category folder with subordinated categories **Current file**, **File versions** and **Assigned objects  <br>** |
| **File versions** | \-  | List of all available revisions of a file; with this category you can upload files; is contained in the category folder **Files**; supplies the **Current file** category with information |
| **Database gateway** | \-  | List of possibilities to access this database; is contained in the category folder **Database schema** |
| **Database links** | \-  | Link between databases; is contained in category folder **Database schema** |
| **Database objects** | \-  | Details about the structure of the database, for example, lists of tables; is contained in the category folder **Database schema** |
| **Database schema** | \-  | Category folder with subordinated categories ****Database** Gateway**, ****Database** links**, ****Database** objects** and ****Database access****; often assigned to the  object type of the same name **Database schema** |
| **Database access** | \-  | List of installed applications which access this database; is contained in the category folder **Database schema**; backwards category: **Software assignment** |
| **DBMS** | **DBMS** | Category folder with subordinated categories **Applications**, **Cluster installation**, **Installation**, **Variants** and **Assigned clusters** |
| **DHCP** | \-  | List of DHCP ranges of a subnet; is contained in the category folder **Net** |
| **Services** | \-  | Category folder with subordinated categories **Installation** and **Variants**; contains information about the application, such as the **Manufacturer** |
| **Printer** | \-  | Details of a **printer** |
| **FC switch** | \-  | Information about a fiber channel switch: **Title** and **Active**; often assigned to the object type of the same name **FC switch** |
| **Parallel relations  <br>** | \-  | Information about a parallel [object relation](./object-relations.md) |
| **Installation** | \-  | Documents the installation of an application on a hardware; is contained in the category folders **Applications**, **DBMS** and **Services**; backwards category: **Software assignment** |
| **Instance / Oracle database** | \-  | Information about an active database instance; often assigned to the object type **Database instance** |
| **IP list** | \-  | Visual presentation of a subnet with additional functions and statistics; is contained in the category folder **Net**; backwards category: **Host address** |
| **Air conditioning  <br>** | \-  | Details of  **Air conditioning** |
| **Crypto card** | \-  | Information about a **Crypto card** |
| **Layer 2 Net** | \-  | Category folder with subordinated categories **Assigned logical ports** and **Assigned ports**; contains information about a VLAN; often assigned to the object type of the same name **Layer 2 Net** |
| **Wiring System  <br>** | \-  | Category folder with subordinated categories **Net type** and **Assigned objects**; often assigned to the object type of the same name **Wiring System  <br>** |
| **License keys** | \-  | List of license keys and applications which require a license for installation (see category **Software assignment**); is contained in the category folder **License assignment** |
| **License assignment  <br>** | \-  | Category folder with subordinated categories **View** and **License keys**; often assigned to the object type **Licenses** |
| **Login** | \-  | Credentials for local i-doit user consisting of **User name** and **Password** |
| **Middleware** | \-  | Information about a **Middleware** |
| **Members** | \-  | List of persons which are allocated to the person group; is contained in the category folder **Person group**; backwards category: **Persons → Person group memberships** |
| **Mobile radio** | **IMEI number** | Unique number of a mobile phone/ smart phone; often assigned to the object type **Cellphone** |
| **Monitor** | \-  | Information about a monitor, for example, **Resolution**; thus often assigned to the object type **Monitor** |
| **Nagios** | \-  | [Network Monitoring](../automation-and-integration/network-monitoring/index.md): Export of configuration settings for Nagios |
| **Net** | \-  | Category folder with subordinated categories **DHCP**, **IP list** and **Net zone**; contains information about a subnet, thus often assigned to the object type  **Layer 3 Net** |
| **Net type** | **Net type** | Information about a **Wiring System**, for example, "Electricity", "Water", "Gas"; is contained in the category folder **Wiring System** |
| **Net zone** | \-  | Details about segmentation of subnets; is contained in the category folder **Net**; backwards category: **Net zone → Zone** |
| **Emergency power supply** | \-  | Details about a power generator, for example a diesel generator set; often assigned to the object type of the same name ****Emergency power supply**** |
| **Emergency plan  <br>** | \-  | Category folder with subordinated categories **Emergency plan properties** and **Assigned objects**; often assigned to the object type of the same name **Emergency plan** |
| ****Emergency plan** properties** | \-  | Details of an emergency plan: **Time need** and **Date of emergency practice**; is contained in the category folder ****Emergency plan**** |
| **Object group** | \-  | List of assigned objects (see object type **Object group**); category folder with the subordinated category **Type**; backwards category: **Group memberships** |
| **Organization** | \-  | Category folder with subordinated categories **Persons**, **Master data** and **Assigned objects**; often assigned to the object type of the same name  **Organization** |
| **PDU** | \-  | Category folder with subordinated categories **View** and **Branch**; contains information about a power distribution unit; often assigned to the object type **Power distribution unit** |
| **Persons** | \-  | 1.  Category folder with subordinated categories **Login**, **Nagios**, **Person group memberships**, **Rights**, **Master data** and **Assigned objects**<br>2.  List of assigned objects of the type **Persons**; is contained in the category folder **Organization**; backwards category: **Persons → Master data** (attribute **Organization**) |
| **Person groups** | \-  | Category folder with the subordinated categories **Member**, **Nagios**, ****Rights****, ******Master data ******and ******Assigned objects****** |
| ****Person group memberships**** | \-  | List of **Person groups** superior to the person; is contained in the category folders **Persons**; backwards category: **Members** |
| **Room** | \-  | Data, such as **Type**, **Room number** and **Floor**; often assigned to the object type of the same name **Room** |
| **Rights** | \-  | See [Rights management](../efficient-documentation/rights-management/index.md); is contained in the category folders **Persons** and **Person groups** |
| **Replication** | \-  | Category folder with the subordinated category **Replication partner**; contains information about the **Replication mechanism**; often assigned to the object type  **Replication object** |
| **Replication partner** | \-  | List of objects which are replicated; is contained in the category folder **Replication** |
| **Routing** | \-  | Data of configured routes: **Routing protocol** and **Gateway address** (see category **Host address**); often assigned to the object type **r** |
| **SAN Zoning** | \-  | Storage Area Networks (SAN): Details for **SAN Zoning** |
| **Rack** | \-  | Visual presentation of a rack, thus often assigned to the object type **Rack**; contains additional attributes for vertical slots and statistics which can be generated from the locally assigned objects and the  **Form factor** category |
| **Slots** | \-  | List of available slots in a blade or switch chassis; is contained in the category folder **Chassis** |
| **Master data** | \-  | 1.  Data of a person; is contained in the category folder **Persons**<br>2.  Data of a person group; is contained in the category folder **Person groups**<br>3.  Data of an organization; is contained in the category folder **Organization** |
| **Switch** | \-  | Details about a **Switch**; based on information from the categories **Host address** and **Network → Port** |
| **Type** | \-  | Definition if an **Object group** is structured dynamically (per [Report](../evaluation/report-manager.md)) or statically; is contained in the category folder **Object group** |
| **Overview** | \-  | 1.  Summary of details regarding a license; is contained in the category folder **License assignment**<br>2.  Visual presentation and statistics regarding PDU branches; is contained in the category folder **PDU** |
| **Uninterruptible power supply  <br>** | \-  | Details of an uninterruptible power supply (USP), thus often assigned to the object type **Uninterruptible power supply** of the same name |
| **Variants** | \-  | List of variants of an application, for example, "Standard", "Enterprise", "Pro", "Open"; is contained in the category folders **Applications**, **DBMS** and **Services**; supplements the category **Installation** in these category folders |
| **Cabling** | \-  | Interconnection within a chassis; is contained in the category folder **Chassis** |
| **Contract** | \-  | Category folder with subordinated categories **Contract information** and **Assigned objects**; often assigned to the object type **Contract** of the same name |
| ****Contract information**** | \-  | Details about a contract; is contained in the category folder **Contract** |
| **WAN Connection** | \-  | Information about an internet connection (WAN, MAN, GAN etc.), thus often assigned to the object type **WAN Connection** of the same name |
| **WiFi device** | \-  | Information about a WLAN access point, thus often assigned to the object type **Wireless Access Point** |
| **Assigned clusters** | \-  | List of objects of the type **Cluster** with additional details about how the cluster is defined; is contained in the category folder **DBMS**; backwards category: **Cluster memberships** |
| **Assigned objects** | \-  | 1.  List of objects which are allocated to a **Contract**; is contained in the category folder **Contract**; backwards category: **Contract assignment  <br>    **<br>2.  List of objects which are allocated to a **Wiring system**; is contained in the category folder **Wiring system**; backwards category: **Cabling → Connectors** (**Wiring System** attribute) |
| **Assigned devices** | \-  | List of hardware objects (**Blade Server**, switch modules) in a chassis; is contained in the category folder **Chassis**; supplements the category **locally assigned objects** |
| **Assigned logical ports** | \-  | List of assigned objects with their logical ports; is contained in the category folder **Layer 2 Net**; backwards category: **Network → Logical ports** |
| **Assigned objects** | \-  | 1.  Assignment of objects to a contact; is contained in the category folders **Persons**, **Person groups** and **Organization**; backwards category: **Contact assignment**<br>2.  Assignment of objects to an  **Emergency plan**; is contained in the category folder **Emergency plan**; backwards category: ****Emergency plan** assignment  <br>    ** |
| **Assigned ports** | \-  | List of assigned objects with their ports; is contained in the category folder **Layer 2 Net**; backwards category: **Network → Port** |