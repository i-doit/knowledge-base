# IP Address Management (IPAM)

An essential part of an [IT documentation](../glossary.md) is the maintenance of IP networks, IP addresses and various network components, the so-called IP Address Management (IPAM).

Overview
--------

[IPAM](https://en.wikipedia.org/wiki/IP_address_management) contains several areas which the following text explains in more detail. In the default installation, i-doit already provides all [object types](../glossary.md) and [categories](../glossary.md) in order to cover precisely these areas. These include amongst others the following object types:

*   **Layer 3 Net**
*   **Layer 2 Net**
*   **Supernet**

We especially focus on these categories:

*   **Host address**
*   **Net** (category folder)
*   **Network** (category folder)

As active net components i-doit provides, for example, the object types **Switch** and **Router**, as active devices **Server**, **Client**, **VoIP Telephone** and many others.

LAN
---

Before you start documenting single IP addresses, host names and MAC addresses, it is worth documenting the corresponding LANs (local area networks). The **Layer 3 Net** object type is suitable for this purpose. The **Net** category contains the essential [attributes](../glossary.md) to maintain an IP net:

*   **Type** (IPv4, IPv6; selection field)
*   **Net** address (text field) with Subnet mask or CIDR notation (text fields; are mutually dependent)
*   **Default Gateway** ([object relation](../basics/object-relations.md) to active component, for example router; multiple selection)
*   **Reverse DNS** (text field)
*   **DNS server** (object relation; multiple selection)
*   **DNS domain** (multiple selection)
*   **Layer-2-net-assignment** (for VLANs; object relation; multiple selection)

In this category you can also check whether other nets have already been documented and if the specified address ranges overlap.

Global v4 and Global v6

i-doit provides two [objects](../glossary.md) of the type **Layer 3 Net**: **Global v4** and **Global v6**. Those who want to do without the documentation of single nets can assign single IP addresses to one of the two objects. This is done automatically, depending on the IP version. The nets comprise the complete IPv4 and IPv6 address range. Therefore you cannot delete these two objects and you should not change them radically so that they cannot fulfill their purpose anymore.

Supernets
---------

Supernets, in other words, the combination of several subnets to one net, can be documented in the **Supernet**  object type. When the address range in the **Net** category is defined in an object of this type, the associated subnets will be related to each other automatically. The **Supernet** category supplies a summary in form of a table.

IP Address with Host Name
-------------------------

The documentation of single IP addresses is carried out in the **Host address** category which can be assigned to each object type. As this is a [list category](../glossary.md), you can specify any number of IP addresses per object. Beside the mere maintenance of data, this category provides some automatisms to support the user. First, you should define which **Type** (which IP version) is used. Then you should specify the net which you created before and the type of **Address allocation** (for example, static). Then i-doit suggests the next available IP address which you can accept or change. It is also important to specify the host name. Under **DNS domain** you can make a selection from the domains which are allocated to the net so that FQDNs (Fully Qualified Domain Names) can be generated from host names and domains.

IP List
-------

The **IP list** category which is assigned to the **Layer 3 Net** object type provides a [comprehensive overview of each net](..//evaluation/ip-list.md). All objects which are allocated to this net are listed in a table, including IP address, host name and type of the address assignment. The latter is shown in color and in a legend to the right of the list you can find the color code.

You can also add further objects to the list without using the Host address category. You can even detach an assignment. With "smaller" nets (< 1,000 IP addresses), the free IP addresses will be also displayed, in other cases a corresponding message appears.

In order to avoid unintentional address conflicts, i-doit informs you about multiple assigned IP addresses beside the table.

Another table summarizes important details about the net (number of assigned and free IP addresses, address range etc.).

Ping and NSLOOKUP

The IP list category provides the possibility to compare the desired status and the actual state: To check if the documented IP addresses and host names are really already assigned, i-doit can send ICMP packets ("pings") and start a NSLOOKUP. For this purpose, i-doit requires access to the net. It is possible to check single entries or all entries subsequently. With **Administration → System settings → Tenantsettings → Options for the IP-List** you can define the command line tools to be used. The user/ the group of the Apache webserver has to be allowed to apply them.

VLAN
----

For each virtual LAN (VLAN) you want to maintain you create an object of the type **Layer 2 Net** in i-doit. The category of the same name, in which the VLAN ID is stored, is important here. You can also connect a physical net with a VLAN via the **Layer 3 Net assignment**  attribute here. Also possible is the specification of **IP helper addresses**.

You should create the port of an active net component before you connect a VLAN to a (virtual/ physical) port. Either the port can be assigned in the object of the component (categories **Port** or **Logical port**) or in the **Layer 2 Net** object in the categories ** **Assigned p****orts** or **Assigned logical ports****.

DHCP
----

IP addresses are allocated with different methods in a net (objects of the type **Layer 3 Net**). While servers often receive a static IP address, clients usually receive an address via DHCP. The DHCP server may assign IP addresses dynamically or per reservation. To document this, you can divide the net into different sections. For this purpose, the **DHCP** category is used.

During the assignment of an IP to a net (**Host address** category), the selection of the **Address allocation** influences the automatic assignment of the next available IP address. Vice versa it is possible to define a new (either reserved or unreserved) DHCP section in the assigned net by a targeted specification of the **Address allocation**.

Net Zones
---------

Apart from CIDR you can divide a subnet logically into several segments. This is especially useful when allocating IP addresses for special tasks or for certain departments.

[![ip-adress-management](../assets/images/en/use-cases/ipam/1-ipam.png)](../assets/images/en/use-cases/ipam/1-ipam.png)

Each segment is created as object of the type **Net zone**. Here the category folder of the same name is available. You can choose a **Zone color** in the subordinated **Options** category. This color is used in the category **Net → IP list.** Furthermore, the address ranges of the allocated subnets of the type **Layer 3 Net** are displayed in the subcategory **Scope**.

The assignment of an area to a subnet is carried out in the category **Net → IP list** of a subnet. First, you select an IP address or a range of IP addresses. Then you assign the segment to these IP addresses via the button **New area**. The IP addresses are highlighted in the colors of the net zones.

[![ip-adress-management](../assets/images/en/use-cases/ipam/2-ipam.png)](../assets/images/en/use-cases/ipam/2-ipam.png)

In the **Host address** category the next available IP address is suggested automatically on basis of the selected net zones. The **Domain** attribute in the category **Net zone → Options** ensures that this domain is preselected automatically with newly assigned IP addresses in the  **Host address** category.

DNS and FQDNs
-------------

When you want to maintain details referring to the applied Domain Name System (DNS) and/ or Fully Qualified Domain Names (FQDN), you can manage this with help of i-doit. You can store any number of **DNS servers** (object relation) and domains in the **Net** category for each **Layer 3 Net**. Varying settings regarding applied DNS servers and domains can be stored in the **Host address** category for each object. If an object has one or more host names (**Host address** category) and other details about the applied domains, the result are one or more FQDNs which are displayed automatically. Domains can be inherited through assignment to a net. Furthermore, you can also specify **Search domains**.

[![ip-adress-management](../assets/images/en/use-cases/ipam/3-ipam.png)](../assets/images/en/use-cases/ipam/3-ipam.png)

Configuration data for DNS and DHCP server

Basically, the documented data are suited to equip DNS or DHCP servers with appropriate configuration data. i-doit contains an [export function for the DNS server ISC DHCPD](../automation-and-integration/cli/index.md).

DNS zones and records

While DNS zones can be determined from the IT documentation with a few simple i-doit remedies, DNS records (A, AAAA, MX etc.) are not a core element at the moment. It is helpful to generate a user-defined list category containing the corresponding records. This category can be assigned to every object for which you want to store records. Reverse DNS is documented in objects of the type **Layer 3 Net**.

Gateways
--------

Net components can act as gateways to transfer connections from one net to other nets (routing). Usually, there is a so-called default gateway per net which is used when no explicit routing rule can be applied. Such a default gateway is specified in i-doit for each net: Either you select an object acting as a default gateway in the **Net** category of a **Layer 3 Net**  object. Here it is important that this object already has an IP address which is allocated to this net. Or you select **Yes** for the attribute **Default gateway for the net** within the object in the **Host address** category.

IPv4 versus IPv6
----------------

Presumably, IPv6 is not widely spread in most company LANs, but nevertheless i-doit provides the basic elements for a documentation of IPv6 networks. Similar to the procedure with IPv4 you define networks and assign IP addresses. Only the **Address allocation**  is different (SLAAC, DHCPv6, etc.). Moreover, you can specify the range of validity (global, linklocal etc.). Both attributes belong to the **Host address** category.

WLAN
----

The documentation of WLANs does not differ fundamentally from the already mentioned options. You can document an access point (AP) as an object of the type **Wireless Access Point**. Among other things, SSIDs and specifications about encryption are maintained in the **WiFi device** category.

WLAN controller

In the default installation i-doit does not provide a direct possibility to map WLAN controllers to control access points. For this purpose, it makes sense to create a dedicated object type and to define a corresponding customized category.

WAN
---

In order to document external connections you can use the  **WAN Connection** object type. WAN stands for Wide Area Network. Similar forms, such as Metropol Area Network (MAN) or Global Area Network (GAN) shall be covered by WAN.

Details about upstream and downstream, assigned LANs and WANs etc., can be stored in the **WAN Connection** category.

VPN
---

The default installation of i-doit neither provides a dedicated object type nor a special category for virtual private networks (VPN). It is possible to use the **Layer 3 Net** object type and assign a significant name as **Object title** so that the object can be recognized as VPN. If you need additional attributes tailored for VPN, a dedicated object type and a user-defined category will help.

Related Subjects
----------------

Often the IPAM documentation alone is not enough. There are many related subjects which play a more or less important role. We would like to address some of them in the following text.

### MAC Addresses and Ports

Often you also want to document the associated MAC addresses in addition to IP addresses for a host. The MAC addresses are allocated unambiguously to a network port. In i-doit the ****Port**** category in the category folder **Network** serves documentation purposes. Here you can specify additional (physical) characteristics of the port. Moreover, you can assign one ore more IP addresses to a certain port. As the **Port** category is a list category you can create any number of ports per object.

It makes sense to define how many ports you want to create simultaneously. For this purpose, you can also apply a names scheme (eth0, eth1, eth2).

A connection to another (active/ passive) net component per port entry is possible: In the **Port Browser** you preselect the object and then the corresponding port. Therefor the ports should already exist before you can connect them to each other.

### Virtual Ports

You can put together physical ports to logical ports. This method is often called trunking or bonding. The **Logical ports** category in the category folder **Network** enables you to document logical ports.

### Cabling

In i-doit you can differentiate clearly between the various layers of the [TCP/IP reference model](https://en.wikipedia.org/wiki/Internet_protocol_suite). The upper subjects treat the layers 3 with IP and 4 (MAC). For the other layers, i-doit provides further documentation functions, for example for layer 1, which concerns the physical medium.

To document cables and their connections to active and passive components i-doit supplies numerous object types (**Cable**, **Patch Panel**, **Cable tray**, **Conduit** etc.). The connection of objects of these types is carried out in the category for cabling, which can be (but doesn't have to be) maintained actively. When you document a connection between two components via the **Port** category (network), this category will be filled automatically and an object of the type **Cable** will be generated.

### Network Listener and Port Binding

Just like the cabling you can document the upper layers of the TCP/IP reference model in i-doit. In the category folder **Network connections** you can see which application opens which TCP/UDP connections and which application addresses which ports regarding third-party systems. Within the folder you can find the categories **Listener** (port is opened) and **Connection** (port of third-party system is used). Beforehand you should ensure that the required software installations are documented in i-doit.

Further Links
-------------

*   [doIT BETTER: IP Address Management (IPAM)](https://www.i-doit.com/ip-adressmanagement-mit-i-doit/), German blog article with video at [i-doit.com](http://i-doit.com)
*   [German demo](http://ipamdemo.i-doit.com/) regarding the above describes "doIT BETTER" subject (credentials: admin/admin)