# Categories and attributes

i-doit provides over 200 predefined [categories](structure-of-the-it-documentation.md). The result is a wide range of over 1,000 [attributes](structure-of-the-it-documentation.md) which theoretically can be documented for each [object](structure-of-the-it-documentation.md). This abundance inevitably leads to the frequently asked question "What is the purpose of category XY with all its attributes?" Which concepts represent each single category and each single attribute?

!!! info "Flexibility versus specifications"
    The following table is an attempt to give you a general overview. It is an "attempt" because of the sheer bulk of predefined categories and attributes. There are no strict specifications for many categories and attributes. Therefore the following descriptions are only recommendations. We would appreciate additions and corrections and would be glad to receive information about how you use the following categories and attributes in practice. Please just send an e-mail to [feedback@i-doit.com](mailto:feedback@i-doit.com).

## Global Categories

| Category | Attribute | Description |
| --- | --- | --- |
| **Access** | -  | Here you can set any links; offers a simple but fast connection between various applications; the protocol used in the URL can be any protocol but has to be known to the web browser |
| **Accounting** | - | Details for accounting, such as **inventory no, account** etc. |
| **Address** | - | Street address; is often assigned to objects of the type **Building** |
| **Aircraft** | -  | Details about an aircraft |
| **All tickets** [![all-tickets](../assets/images/en/basics/categories-and-attributes/1-caa.png)](../assets/images/en/basics/categories-and-attributes/1-caa.png) | - | [Service Desk](../automation-and-integration/service-desk/index.md): If the interface to the service desk is activated, you can display all referenced tickets for this object with this category. |
| **Assigned cards** | -  | Assignment of a **SIM card** or a **Crypto card** to this object |
| **Assigned objects** | -  | Allocation of objects to a file; is contained in the category folder **Files**; backwards category: **Files** |
| **Assigned SIM cards** | -  | Backwards category of the category **Cards** |
| **Assigned Subscriptions** | -  | Backwards category of the category **Assigned users** |
| **Assigned Users** | -  | Assignment of subscriptions to persons; rear category: **assigned subscribers** |
| **Assigned Workplaces** | -  | A **Person** can be assigned to one or more objects of the type **Workplace**; backwards category: **Logical Location** |
| **Assigned workstation** | -  | The object with this category is assigned to a **workstation**. Backwards category: **Workplace components** |
| **Audit** | -  | If a component is checked on a regular basis, you can enter the results in this category. |
| **Backup** | -  | Backup: Data of this object are stored by another object. Backwards category: **Backup (assigned objects)** |
| **Backup (assigned Objects)** | -  | Backup: This objects stores data of other objects. Backwards category: **Backup** |
| **Cable connection** | \-  | Category folder with the subordinate categories **Cable connection** and **Cable**. |
| **Cable connection -> Cable** | -  | Information about a **Cable**, for example, length and color |
| **Cable connection -> Cable connection** | \-  | Displays the cable connection |
| **Cabling** | -  | Category folder with the subordinated categories **Connectors** and **Interface**; offers several (graphical) evaluations of these categories |
| **Cabling -> Connectors** | - | Here you can document the cabling between components. A distinction is made between **Input** and **Output** which can be connected to each other. This category is filled automatically by other categories, for example, **Port** or **Power consumer**. |
| **Cabling -> Interface** | -  | Further external interfaces of a hardware which go beyond physical network ports (see category **Network → Port**) and power supplies (see category **Power consumer**), for example, peripheral devices via USB, HDMI, display Port, VGA etc.; thus suitable for the documentation of rather "unimportant" components, such as mouse and keyboard |
| **Cards** | \-  | Details of a **SIM card** (linked cell phone, pin, serial number); back category: **Assigned SIM cards** |
| **Certificate** | -  | Documentation of x.509 certificates |
| **Cluster** | -  | Via this category folder you can document a **Cluster**. Frequent clusters are virtualization clusters, web clusters or database clusters. Subordinate categories: **Cluster**, **Cluster service assignment**, **Cluster Members**, **Cluster vitality**, **Shared Storage**, **Shared virtual switches**, **Administration service**  <br> |
| **Cluster -> Administration service** | -  | Instance which manages the virtual cluster; is contained in the category folder **Cluster**; backwards category: **Virtual managed objects** |
| **Cluster -> Cluster Members** | -  | Components which form a **Cluster**; is contained in the **Cluster** category folder. Backwards category: **Cluster memberships** |
| **Cluster -> Cluster service assignment** | -  | Link of an object of the type **Cluster service assignment**, i.e. a software which represents or manages the **Cluster**; is contained in the **Cluster** category folder |
| **Cluster -> Cluster vitality** | -  | Visual presentation and statistics regarding the **Object vitality** of cluster members; is contained in the **Cluster** category folder |
| **Cluster -> Shared Storage** | -  | Visual presentation and statistics regarding host systems and LUNs; is contained in the category folder **Cluster** |
| **Cluster -> Shared virtual switches** | -  | Information about shared virtual switches (see also category **Virtual Host → Virtual Switches**); is contained in the category folder **Cluster** |
| **Cluster memberships** | -  | Objects can be assigned to one or more clusters. Backwards category: **Cluster members** |
| **CMDB explorer** [![CMDB explorer](../assets/images/en/basics/categories-and-attributes/4-caa.png)](../assets/images/en/basics/categories-and-attributes/4-caa.png) | -  | Opens the object in the [CMDB explorer](../evaluation/cmdb-explorer/index.md) |
| **Computing resources** | -  | Details about system requirements of applications (CPU, working memory, disk space, network bandwidth); is evaluated by the category **Object vitality** |
| **Contact assignment** | -  | Assigns **Persons**, **Person groups**, **Organizations** etc. to an object; each allocation can be provided with a **Role**, for example, **Administrator**; backwards category: **Persons/Person groups/Organization → Assigned objects** |
| **Contract assignment** | -  | Assignment of a **Contract** to this object; may contain differing details about start and end date of a contract |
| **CPU** | -  | List of CPU sockets and built-in CPUs |
| **CUCM VoIP Phone Line** | -  | Information about Cisco Unified Call Manager (CUCM) |
| **CUCM VoIP Phone** | -  | Information about Cisco Unified Call Manager (CUCM) |
| **Database assignment** | -  | If an installed application (see object types **Applications** and **System service**) accesses one or more databases, it can be documented here; supplements the **Installation** category in the category folders **Applications** and **Services** |
| **Database hierarchy** | \-  | Category folder with subordinate categories **Database hierarchy**, **Databases**, **Database tables** and **DBMS information** |
| **Data Source** | -  | Information about the [data import](../consolidate-data/index.md) which provided the attributes of this object |
| **Direct Attached Storage** | -  | Category folder with the subordinate categories **Controller**, **Device** and **Raid-Array**; evaluation of these categories; supplements the category **Drive**; for access to shares see category **Share access** and for LUNs the category **Storage Area Network** **→ Logical Devices (Client)** |
| **Direct Attached Storage -> Controller** | -  | Built-in onboard or PCIe plug-in cards for the connection of storages drives; is contained in the category folder **Direct Attached Storage** |
| **Direct Attached Storage -> Device** | -  | List of drives (hard disks, SSDs etc.); is contained in the category folder **Direct Attached Storage**; supplements the **Controller** and **Raid-Array** categories in this category folder |
| **Direct Attached Storage -> Raid-Array** | -  | Documentation of hardware or software RAIDs with the various levels (1, 5, 6, 10 etc.); is contained in the category folder **Direct Attached Storage** |
| **Documents** | -  | [Documents](../i-doit-pro-add-ons/documents/index.md) add-on: List of created documents |
| **Drive** | -  | Documentation of configured mount points or drive letters; supplements category folder **Direct Attached Storage**; see also categories **Share access** and **Storage Area Network → Logical devices(client)** |
| **E-Mail addresses** | -  | List of e-mail addresses; often in connection with contacts (see object types **Persons**, **Person groups** and **Organization**); supplements the **Master data** in the category folders **Persons**, **Person groups** and **Organization** |
| **Emergency plan assignment** | -  | Assignment of files which then again are stored as objects of the type **Files**; you can upload new files per drag and drop; similar to the categories **File assignment** and **Manual assignment**; backwards category: **Emergency plan → Assigned objects** |
| **Fiber/lead** | -  | Detailed description of fiber optics or of the cores of copper cables, therefore often assigned to the object type **Cable** |
| **File assignment** | -  | Assignment of files which are again stored as objects of the type **Files**; you can upload new files via drag and drop; similar to the categories **Manual assignment** and **Emergency plan assignment**; backwards category: **Files → Assigned objects** |
| **Form factor** | -  | Information whether a hardware is usable for 19'' and if yes, how many height units it requires. Here you also specify how many height units a server rack has. You can also indicate dimensions and weight. |
| **General** | **ID** | Each object receives a [unique identifier (ID)](./unique-references.md) by the underlying DBMS MySQL/MariaDB. |
| **General** | **Title** | Every object must be named. Sometimes the name even has to be unique per tenant or per object type. Synonym: **Object title** |
| **General** | **Status** | The [life cycle of the documentation](./life-and-documentation-cycle.md) is mapped via the **Status**. |
| **General** | **CMDB status** | The CMDB status indicates the [stadium of the life cycle](./life-and-documentation-cycle.md) of an object, for example, **in operation**. |
| **General** | **Purpose** | If the component serves a special purpose, you can record it here. The **Tags** attribute is a good alternative. |
| **General** | **Category** | Don't confuse this attribute with the i-doit categories. It is used only seldom and can be replaced by the **Tags** attribute. |
| **General** | **SYSID** | Beside the **Object ID**, the **SYSID** is suited for [unique referencing](./unique-references.md). Additionally, the user can edit the SYSID while the **Object ID** is fixed. |
| **General** | **Tags** | You can add any number of keywords to each object. This is very useful, for example, to assign specific roles or purposes to an object. |
| **General** | **Description** | Almost every entry of a category can be provided with a description. You can also add notes. Here a simple evaluation is impeded as unstructured texts are involved. |
| **Graphic card** | -  | List of built-in graphic cards |
| **Group memberships** | -  | Assignment of the object to a dynamic or static group, see object type **Object group**; backwards category: **Object group** |
| **Host address** | -  | [IPAM](../use-cases/ip-adress-management.md): List of configured IP addresses (IPv4/IPv6); additional assignment of **Host name**, **Domain**, network connections (see category **Network → Port**) and subnets (see object type **Layer 3 Net**); backwards category: **IP list** |
| **Images** | - | Image gallery |
| **Invoice** | -  | List of invoices; supplements category **Accounting** |
| **JDisc Custom Attributes** | -  | Here you can display and edit custom attributes which were imported from [JDisc Discovery](../consolidate-data/jdisc-discovery.md) |
| **JDisc Device Information** | -  | A "Read only" category containing "Import date", "Last seen" and "Last discovery" from JDisc |
| **JDisc Discovery** | -  | Import for [JDisc Discovery](../consolidate-data/jdisc-discovery.md) for this object |
| **Last login user** | -  | The user who was logged in last; can be imported by [JDisc Discovery](../consolidate-data/jdisc-discovery.md) |
| **LDAP** | **Distinguished Name (DN)** | If a person or a person group is synchronized via  [LDAP/AD](../user-authentication-and-management/ldap-directory/index.md), the related DN is stored here. |
| **locally assigned objects** | -  | List of all physically subordinated objects with respect to space; backwards category: **Location** |
| **Location** | -  | Spatial assignment of an object to another object; additionally, you can "build in" objects suitable for 19'' (see category **Form factor**) into a server rack in the appropriate height unit; geo coordinates are also possible; backwards category: **locally assigned objects** |
| **Logbook** [![Logbook](../assets/images/en/basics/categories-and-attributes/5-caa.png)](../assets/images/en/basics/categories-and-attributes/5-caa.png) | -  | [Changes of an object](./logbook.md) |
| **Logical location** | **Parent object** | Object of the type **Person** which is allocated to an object of the type **Workstation**. Backwards category: **Assigned workstation** |
| **Managed devices** | -  | If the object is a remote management controller (see object type of the same name), you can assign objects here which can be managed via this object (see also Lights Out Management, LOM). Backwards category: **Remote Management Controller** |
| **Manual assignment** | -  | Assignment of files which can be stored as objects of the type **Files**; you can upload new files per drag and drop; similar to the categories **File assignment**, **Emergency plan assignment**; Backwards category: **Files → Assigned objects** |
| **Memory** | -  | List of all built-in RAM modules (working memory) |
| **Model** | -  | One of the most important categories of a (hardware) object with details about **Manufacturer**, **Model** and **Serial number** |
| **Monitoring** | -  | [Network Monitoring](../automation-and-integration/network-monitoring/index.md): category folders with the subordinated categories **Livestatus** and **NDO**; configures and activates the query of current information of a host |
| **Monitoring -> Livestatus** | -  | [Network Monitoring](../automation-and-integration/network-monitoring/index.md): shows current information about a host and its services which are available via the Livestatus interface; is contained in the category folder **Monitoring** and is configured there |
| **Monitoring -> NDO** | -  | [Network Monitoring](../automation-and-integration/network-monitoring/index.md): displays current information about a host and its services which are available via the NDOUtils (or IDOUtils) interface; is contained in the category folder **Monitoring** and is configured there |
| **Network** | -  | Category folder with the subordinated categories **Connection endpoint**, **logical Ports**, **Network-Interface**, **Port**, **Port overview** and **VRRP membership** |
| **Network -> Connection endpoint** | -  | If the corresponding option is activated in the JDisc profile, the connections are not imported into the cabling but into the "Network endpoints" category. This makes it possible to differentiate between manual cabling and automatic cabling by JDisc. |
| **Network -> logical Ports** | -  | Grouping of physical network connections (see category **Network → port**), often called trunking or bonding; is contained in the **Network** category folder |
| **Network -> Network-Interface** | -  | Assignment of physical network connections (see category **Network → Port**) to internal connections of a device, for example onboard or PCIe plug-in card; is contained in the **Network** category folder |
| **Network -> Port** | -  | List of physical network connections (Ethernet); contains attributes for the MAC address, assigned VLANs (see object type **Layer 2 network**), assigned IP addresses (see category **Host address**) and connected devices; is contained in the **Network** category folder; automatically fills the **Cabling → Connectors** category |
| **Network -> Port overview** | -  | Displays the ports in a list. |
| **Network -> VRRP membership** | -  | List of all logical ports (see category **Network → logical ports**) that are assigned to a VRRP/HSRP/CARP cluster; is contained in the **Network** category folder; rear category: **VRRP → Members** |
| **Network listener** | -  | Category folder with the subordinated categories **Listener** and **Connection**; enables the documentation of network communications between applications; is often assigned to (virtual) hardware, such as servers, VMs or clients with installed applications (see category **Software assignment**); requires IP addresses (see category **Host address**) |
| **Network listener -> Network connections** | -  | If an installed application (see category **Software assignment**) accesses another application via an IP-based network connection (see category **Host address**), you can document it here; is contained in the category folder **Network listener**; backwards category: **Listener** |
| **Net zone** | -  | Category folder with the subordinated categories **Zone** and **Options**; is usually assigned to the object type **Net zone** |
| **Net zone -> Net zone options** | -  | Details about a net zone; is contained in the category folder **Net zone** |
| **Net zone -> Net zone scopes** | - | Use of a net zone; is contained in the category folder **Net zone**; Backwards category: **Net → Net zone** |
| **Object picture** | -  | Changes the default image of an object which is depicted on each page; as only 150 x 150 pixels are allowed, the **Images** category is more suitable in most cases |
| **Object vitality** | -  | Indicates the target system utilization; for this purpose the categories **CPU**, **Memory**, **Network → Port**, **Direct Attached Storage** and **Software assignment** are assessed and compared to the category **Computing resources**, which is assigned to the allocated applications; has only little informative value as it is just a simple addition of values |
| **Operating system** | - | Here you can record the primal operating system; this information complements the category **Software assignment** |
| **Passwords** | -  | List of passwords |
| **Port Overview (Stacking)** | \- | Shows the ports of all stack members bundled together. Click on a port to open it |
| **Power consumer** | -  | List of built-in power adapters; thus you can document a redundant power supply, automatically fills the category **Cabling → Connectors**; enables the specification of a **BTU** (suitable for the calculation of cooling/ air-conditioning) |
| **Power supplier** | -  | Information about a power supplier |
| **QinQ CE-VLAN** | -  | Documentation of QinQ VLANs (see object type **Layer-2 net**) |
| **QinQ SP-VLAN** | -  | Documentation of QinQ VLANs (see object type **Layer-2 net**) |
| **Racks** | \- | Visual representation of spatially assigned cabinets, therefore often assigned to the **Room** object type |
| **Relationship** [![Relationship](../assets/images/en/basics/categories-and-attributes/3-caa.png)](../assets/images/en/basics/categories-and-attributes/3-caa.png) | - | List of all [object relations](./object-relations.md) |
| **Remote management controller** | **Assigned object** | If the object has a Lights Out Management (LOM), you can link it here. Often the object type **Remote Management Controller** of the same name serves this purpose. Backwards category: **Managed devices** |
| **Remote management controller** | **Primary access URL** | If the assigned object has a link (see category **Access**), it is shown here. In case of several links the link which is marked as primary link is displayed. |
| **Service assignment** | -  | Serves the object as a component of a service, you can add it here. An object can be assigned to several services. Backwards category: **Service components** |
| **Service** | -  | Category folder with the subordinated categories **Service relation**, **Service components**, **Service Logbook** and **Service Type**; contains information about the service; is often assigned to the object type **Service** of the same name |
| **Service -> Service components** | -  | List of objects which are subordinated under the service; is contained in the category folder **Service**; backwards category: **Service assignment** |
| **Service -> Service Logbook** | -  | List of [logbook](./logbook.md) entries from all objects which are added as components to the service (see category **Service components**); is contained in the category folder **Service** |
| **Service -> Service Relation** | -  | If components of a service are interdependent, you can document the dependence here. Only objects which are in the category **Service components** are listed here; is contained in the category folder **Service** |
| **Service -> Service Type** | **type** | Typing of services; is contained in the category folder **Service** |
| **Share access** | -  | This object accesses an existing share (Samba, CIFS, NFS etc.) of another object. Backwards category: **Shares** |
| **Shares** | -  | This object provides one or more shares (Samba, CIFS, NFS etc.). Backwards category: **Share access** |
| **SIM card** | -  | Details about a **SIM card** (PIN, PUK, phone number etc.); backwards category: **Assigned cards** |
| **SIM** | \-  | Details of a **SIM** (network provider, rate, telephone number, etc.) |
| **SLA** | -  | Information about a Service Level Agreement (SLA); often assigned to the object types **Service** and **Contract** |
| **Smart Card Certificate** | -  | Details about a smartcard |
| **SNMP** | -  | Live query of information via the SNMP protocol; retrieved date are **not** saved |
| **SOA stacks** |     | Details about a **Middleware** |
| **Software assignment** | -  | List of installed applications (see object types **Applications**, **Operating system**, **DBMS**); supplements the category **Operating system**; backwards categories: **Applications/DBMS/**Services** → Installation** |
| **Sound card** | -  | List of built-in sound cards |
| **Stack member** | -  | List of objects which are allocated to a hardware stack; often assigned to the object type **Stacking**; backwards category: **Stack membership** |
| **Stack membership** | -  | Allocation of an object to a hardware stack; backwards category **Stack member** |
| **Storage Area Network** | -  | Category folder with subordinated categories **FC port**,  **Host bus adapter (HBA)**, **Logical devices (Client)** and **Logical devices (LDEV Server)**; for the documentation of Storage Area Networks (SANs) and LUNs |
| **Storage Area Network -> FC port** | -  | List of fiber channel ports; serves the documentation of storage area networks (SANs) and is often assigned to the object types **Storage system** and **FC switch**; is contained in the category folder **Storage Area Network**; automatically fills in the **Cabling → Connectors** category |
| **Storage Area Network -> Host Bus Adapter (HBA)** | -  | List of HBAs which provide fiber channel ports (see **Storage Area Network → FC port**); serves the documentation of storage area networks (SANs); is contained in the category folder **Storage Area Network** |
| **Storage Area Network -> Logical devices (Client)** | -  | If an object accesses LUNs of a SAN, this is documented here; is contained in the category folder **Storage Area Network**; backwards category: **Logical devices (LDEV Server)** |
| **Storage Area Network -> Logical devices (LDEV Server)**| -  | If an object, for example, a SAN, offers LUNs to other objects, this is documented here; is contained in the category folder **Storage Area Network**; backwards category: **Logical devices (Client)** |
| **Subscriptions** | -  | Information on existing subscriptions, which is assigned to **persons** via the category **Assigned Users**; can be imported via **JDisc** |
| **Supernet** | \- | List of supernetworks and subnetworks |
| **Support Entitlements** | -  | **JDisc** retrieves the status of support claims directly from some vendors and imports them into its database. This information can be imported from **JDisc** to **i-doit**. |
| **Telephone/fax** | -  | Information such as telephone number or fax number |
| **TSI service** |     | Details about Cisco telephone systems |
| **Vehicle** | -  | Details about a vehicle, for example, license plate; suitable for the documentation of a vehicle fleet or for company cars; see object type of the same name: **Vehicle** |
| **Version** | -  | List of versions of a software; is often assigned to the object types **Applications**, **Operating system**, **DBMS** and **Services**; supplements the categories **Applications/DBMS/Services → Installation** and **Variants** |
| **Virtual host** | -  | Category folder with the subordinated categories **Guest systems**, **Virtual host** and **Virtual Switches**; is typically allocated to a host system for virtual machines (see object type **Virtual host**) or to a **Cluster**; backwards category: **Virtual machine** |
| **Virtual host -> Guest systems** | -  | Virtual machines assigned to a host system; is contained in the category folder **Virtual Host** |
| **Virtual host -> Virtual host** | -  | Details about host system or cluster of a virtual environment; is contained in the category folder **Virtual host** of the same name |
| **Virtual host -> Virtual Switches** | -  | Virtual network switches in a virtual environment; is contained in the category folder **Virtual host** |
| **Virtual machine** | -  | Category folder with the subordinated categories **Virtual devices** and **Virtual machine**; for the documentation of virtual environments; backwards category: **Virtual host** |
| **Virtual machine -> Virtual devices** | -  | Assignment of virtual devices to hardware resources of the host system from the fields **Network**, **Storage** and **Interfaces**; is contained in the category folder **Virtual host** |
| **Virtual machine -> Virtual machine** | -  | Information whether the object is a virtual machine; is contained in the category folder **Virtual** **machine** of the same name |
| **Virtual managed objects** | -  | List of objects which are managed by this instance; backwards category: **Cluster → Administration service** |
| **VRRP** | -  | Category folder with the subordinated category **Members**; contains information about the VRRP/HSRP/CARP protocols |
| **VRRP -> VRRP Member** | -  | List of all logical ports (see category **Network → Logical ports**) assigned to a VRRP/HSRP/CARP cluster; is contained in the category folder **Network**; backwards category: **VRRP → Member** |
| **WAN Connection** | -  | Attributes such as the bandwidth of upload and download of an internet connection; often assigned to the object type **WAN Connection** |
| **Workplace components** | - | Objects which are assigned to an object of the type **Workstation**. Backwards category: **Assigned workstation** |

## Specific Categories

| Category | Attributes | Description |
| --- | --- | --- |
| **Air conditioning** | -  | Details of **Air conditioning** |
| **Applications** | -  | 1.  Category folder with subordinated categories **Installation** and **Variants**; contains information about the application, such as the **Manufacturer**<br>2.  Details about the application, such as the **Manufacturer**; is contained in the category folder **DBMS** |
| **Assigned logical ports** | -  | List of assigned objects with their logical ports; is contained in the category folder **Layer 2 Net**; backwards category: **Network → Logical ports** |
| **Assigned objects** | -  | 1.  List of objects which are allocated to a **Contract**; is contained in the category folder **Contract**; backwards category: **Contract assignment  <br>**<br>2.  List of objects which are allocated to a **Wiring system**; is contained in the category folder **Wiring system**; backwards category: **Cabling → Connectors** (**Wiring System** attribute) |
| **Assigned objects** | -  | 1.  Assignment of objects to a contact; is contained in the category folders **Persons**, **Person groups** and **Organization**; backwards category: **Contact assignment**<br>2.  Assignment of objects to an **Emergency plan**; is contained in the category folder **Emergency plan**; backwards category: **Emergency plan** assignment  <br>** |
| **Chassis** | -  | Category folder with subordinated categories **Chassis view**, **Slots**, **Cabling** and **Assigned devices**; often assigned to the object types **Blade Chassis** and **Switch Chassis** |
| **Chassis -> Assigned devices** | -  | List of hardware objects (**Blade Server**, switch modules) in a chassis; is contained in the category folder **Chassis**; supplements the category **locally assigned objects** |
| **Chassis -> Chassis Cabling** | -  | Interconnection within a chassis; is contained in the category folder **Chassis** |
| **Chassis -> Chassis view** | -  | Visual presentation of a blade or switch chassis; is contained in the category folder **Chassis** |
| **Chassis -> Slots** | -  | List of available slots in a blade or switch chassis; is contained in the category folder **Chassis** |
| **Contract** | -  | Category folder with subordinated categories **Contract information** and **Contract Objects**; often assigned to the object type **Contract** of the same name |
| **Current file** | -  | Current revision of a file for download; is contained in the category folder **Files**; is based on the category **File versions** |
| **Crypto card** | -  | Information about a **Crypto card** |
| **DBMS** | - | Category folder with subordinated categories **Applications**, **Cluster installation**, **Installation**, **Variants** and **Assigned clusters** |
| **DBMS -> Assigned clusters** | -  | List of objects of the type **Cluster** with additional details about how the cluster is defined; is contained in the category folder **DBMS**; backwards category: **Cluster memberships** |
| **DBMS -> Cluster installation** | -  | List of allocated clusters; is contained in the category folder **DBMS**; is based on data of the category **DBMS → Assigned clusters** |
| **Database schema** | -  | Category folder with subordinated categories **Database Gateway**, **Database links**, **Database objects** and **Database access**; often assigned to the object type of the same name **Database schema** |
| **Database schema -> Database access** | -  | List of installed applications which access this database; is contained in the category folder **Database schema**; backwards category: **Software assignment** |
| **Database schema -> Database gateway** | -  | List of possibilities to access this database; is contained in the category folder **Database schema** |
| **Database schema -> Database links** | -  | Link between databases; is contained in category folder **Database schema** |
| **Database schema -> Database objects** | -  | Details about the structure of the database, for example, lists of tables; is contained in the category folder **Database schema** |
| **Desktop** | -  | Information about a computer, for example **Client type** (laptop, desktop etc.) or **Keyboard Layout**; often assigned to the object type **Client** |
| **Emergency plan** | -  | Category folder with subordinated categories **Emergency plan properties** and **Assigned objects**; often assigned to the object type of the same name **Emergency plan** |
| **Emergency plan -> Emergency plan properties** | -  | Details of an emergency plan: **Time need** and **Date of emergency practice**; is contained in the category folder **Emergency plan** |
| **Emergency plan -> Emergency power supply** | -  | Details about a power generator, for example a diesel generator set; often assigned to the object type of the same name **Emergency power supply** |
| **FC switch** | -  | Information about a fiber channel switch: **Title** and **Active**; often assigned to the object type of the same name **FC switch** |
| **Files** | -  | Category folder with subordinated categories **Current file**, **File versions** and **Assigned objects  <br>** |
| **Files -> File versions** | -  | List of all available revisions of a file; with this category you can upload files; is contained in the category folder **Files**; supplies the **Current file** category with information |
| **Installation** | -  | Documents the installation of an application on a hardware; is contained in the category folders **Applications**, **DBMS** and **Services**; backwards category: **Software assignment** |
| **Instance / Oracle database** | -  | Information about an active database instance; often assigned to the object type **Database instance** |
| **Layer 2 Net** | -  | Category folder with subordinated categories **Assigned logical ports** and **Assigned ports**; contains information about a VLAN; often assigned to the object type of the same name **Layer 2 Net** |
| **Layer 2 Net -> Assigned ports** | -  | List of assigned objects with their ports; is contained in the category folder **Layer 2 Net**; backwards category: **Network → Port** |
| **Licenses** | -  | Category folder with subordinated categories **License assignment overview** and **License keys**; often assigned to the object type **Licenses** |
| **Licenses -> License keys** | -  | List of license keys and applications which require a license for installation (see category **Software assignment**); is contained in the category folder **Licenses** |
| **Middleware** | -  | Information about a **Middleware** |
| **Mobile radio** | **IMEI number** | Unique number of a mobile phone/ smart phone; often assigned to the object type **Cellphone** |
| **Monitor** | -  | Information about a monitor, for example, **Resolution**; thus often assigned to the object type **Monitor** |
| **Net** | -  | Category folder with subordinated categories **DHCP**, **IP list** and **Net zone**; contains information about a subnet, thus often assigned to the object type **Layer 3 Net** |
| **Net -> DHCP** | -  | List of DHCP ranges of a subnet; is contained in the category folder **Net** |
| **Net -> IP list** | -  | Visual presentation of a subnet with additional functions and statistics; is contained in the category folder **Net**; backwards category: **Host address** |
| **Net -> Net zone** | -  | Details about segmentation of subnets; is contained in the category folder **Net**; backwards category: **Net zone → Net zone scopes** |
| **Object group** | -  | List of assigned objects (see object type **Object group**); category folder with the subordinated category **Type**; backwards category: **Group memberships** |
| **Object group -> Type** | -  | Definition if an **Object group** is structured dynamically (per [Report](../evaluation/report-manager.md)) or statically; is contained in the category folder **Object group** |
| **Overview** | -  | 1.  Summary of details regarding a license; is contained in the category folder **License assignment**<br>2.  Visual presentation and statistics regarding PDU branches; is contained in the category folder **PDU** |
| **Operating Systems** | \- | Category order with subordinate categories **Operating Systems**, **Installation** and **Variants**; contains information on the operating system |
| **Organization** | -  | Category folder with subordinated categories **Persons**, **Master data** and **Assigned objects**; often assigned to the object type of the same name  **Organization** |
| **PDU** | -  | Category folder with subordinated categories **View** and **Branch**; contains information about a power distribution unit; often assigned to the object type **Power distribution unit** |
| **PDU -> Branch** | -  | List of branches; is contained in the category folder **PDU** |
| **Parallel relations** | -  | Information about a parallel [object relation](./object-relations.md) |
| **Person groups** | -  | Category folder with the subordinated categories **Member**, **Nagios**, *Rights**, **Master data** and **Assigned objects** |
| **Person groups -> Members** | -  | List of persons which are allocated to the person group; is contained in the category folder **Person group**; backwards category: **Persons → Person group memberships** |
| **Persons** | -  | 1.  Category folder with subordinated categories **Login**, **Nagios**, **Person group memberships**, **Rights**, **Master data** and **Assigned objects**<br>2.  List of assigned objects of the type **Persons**; is contained in the category folder **Organization**; backwards category: **Persons → Master data** (attribute **Organization**) |
| **Persons -> Login** | -  | Credentials for local i-doit user consisting of **User name** and **Password** |
| **Persons -> Master data** | -  | 1.  Data of a person; is contained in the category folder **Persons**<br>2.  Data of a person group; is contained in the category folder **Person groups**<br>3.  Data of an organization; is contained in the category folder **Organization** |
| **Persons -> Person group memberships** | -  | List of **Person groups** superior to the person; is contained in the category folders **Persons**; backwards category: **Members** |
| **Printer** | -  | Details of a **printer** |
| **Rack** | -  | Visual presentation of a rack, thus often assigned to the object type **Rack**; contains additional attributes for vertical slots and statistics which can be generated from the locally assigned objects and the **Form factor** category |
| **Relation details** | -  | Details about an [object relation](./object-relations.md) |
| **Replication** | -  | Category folder with the subordinated category **Replication partner**; contains information about the **Replication mechanism**; often assigned to the object type **Replication object** |
| **Replication -> Replication partner** | -  | List of objects which are replicated; is contained in the category folder **Replication** |
| **Room** | -  | Data, such as **Type**, **Room number** and **Floor**; often assigned to the object type of the same name **Room** |
| **Routing** | -  | Data of configured routes: **Routing protocol** and **Gateway address** (see category **Host address**); often assigned to the object type **r** |
| **SAN Zoning** | -  | Storage Area Networks (SAN): Details for **SAN Zoning** |
| **Switch** | -  | Details about a **Switch**; based on information from the categories **Host address** and **Network → Port** |
| **System Services** | -  | Category folder with subordinated categories **Installation**, **System Services** and **Variants**; contains information about the application, such as the **Manufacturer** |
| **Uninterruptible power supply** | -  | Details of an uninterruptible power supply (USP), thus often assigned to the object type **Uninterruptible power supply** of the same name |
| **Variants** | -  | List of variants of an application, for example, "Standard", "Enterprise", "Pro", "Open"; is contained in the category folders **Applications**, **DBMS** and **Services**; supplements the category **Installation** in these category folders |
| **WAN Connection** | -  | Information about an internet connection (WAN, MAN, GAN etc.), thus often assigned to the object type **WAN Connection** of the same name |
| **WAN** | \-  | Information on an Internet connection (WAN, MAN, GAN or similar), therefore often assigned to the **WAN Connection** object type |
| **WiFi device** | -  | Information about a WLAN access point, thus often assigned to the object type **Wireless Access Point** |
| **Logbook** [![Logbook](../assets/images/en/basics/categories-and-attributes/5-caa.png)](../assets/images/en/basics/categories-and-attributes/5-caa.png) | -  | [Changes of an object](./logbook.md) |
| **Wiring System -> Net type** | **Net type** | Information about a **Wiring System**, for example, "Electricity", "Water", "Gas"; is contained in the category folder **Wiring System** |
