---
title: IP Address Management (IPAM)
description: "IP Address Management (IPAM) -- managing IP networks, addresses, and network components -- is an essential element of your IT documentation."
icon:
status:
lang: en
---
# IP Address Management (IPAM)

IP Address Management (IPAM) -- managing IP networks, addresses, and network components -- is an essential element of your [IT documentation](../glossar.md).

## Overview

i-doit comes with all [object types](../glossar.md) and [categories](../glossar.md) needed to cover [IPAM](https://en.wikipedia.org/wiki/IP_address_management) in the standard installation. These include:

*   **Layer 3 Net**
*   **Layer 2 Net**
*   **Supernet**

We focus primarily on these categories:

*   **Host address**
*   **Net** (category folder)
*   **Network** (category folder)

As active network components, i-doit provides object types such as **Switch** and **Router**, and as active end devices **Server**, **Client**, **VoIP Phone**, and many more.

## LAN

Before documenting individual IP addresses, hostnames, and MAC addresses, it is worthwhile to document the corresponding LANs (Local Area Networks). The **Layer 3 Net** object type is suitable for this purpose. The **Net** category contains the essential [attributes](../glossar.md) for maintaining an IP network:

*   **Type** (IPv4, IPv6; selection field)
*   **Net** address (text field) with subnet mask or CIDR notation (text fields; mutually dependent)
*   **Default gateway** (dropdown selection field for active components, e.g., router)
*   **Reverse DNS** (text field)
*   **DNS server** (object browser)
*   **DNS domain** (multiple selection)
*   **Layer 2 net assignment** (for VLANs; object relationship; multiple selection)

In this category, you can also check whether networks have already been documented whose address range overlaps with the one specified here.

!!! info "Global v4 and Global v6"
    i-doit comes with two [objects](../glossar.md) of type **Layer 3 Net**: **Global v4** and **Global v6**. If you want to skip documenting individual networks, you assign individual IP addresses to one of these two objects. This happens automatically depending on the IP version. The networks encompass the complete IPv4 or IPv6 address range. Therefore, both objects cannot be deleted and should ideally not be fundamentally changed so that their purpose can still be fulfilled.

## Supernets

Supernets, i.e., the aggregation of multiple subnets into one network, can be documented in the **Supernet** object type. When the address range is defined in the **Net** category of an object of this type, the associated subnets are automatically linked. A tabular summary is provided by the **Supernet** category.

## IP Address with Hostname

Documentation of individual IP addresses takes place in the **Host address** category, which can be assigned to any object type. Since it is a [list category](../glossar.md), any number of IP addresses per object can be specified. The category provides some automation features beyond pure data maintenance to support the user. First, you should specify which **type** (i.e., which IP version) is used. Then the previously created network should be specified along with the type of **address assignment** (e.g., static). i-doit then suggests the next free IP address, which can be accepted or changed. It is also important to specify the hostname. Under **DNS domain**, you can choose from the domains assigned to the network, so that corresponding FQDNs (Fully Qualified Domain Names) can be formed from hostnames and domains.

## IP List

A [comprehensive overview of each network](../auswertungen/ip-listen.md) is provided by the **IP list** category, which is assigned to the **Layer 3 Net** object type. A tabular list contains all objects assigned to this network, along with IP address, hostname, and type of address assignment. The latter is displayed in color, with a legend to the right of the list explaining the color coding.

The list can also be extended with additional objects without using the Host address category. Assignments can also be removed. For "smaller" networks (< 1,000 IP addresses), free IP addresses are also displayed; otherwise, a notification appears.

To avoid (unintentional) address conflicts, i-doit indicates duplicate IP addresses next to the table.

An additional table summarizes important network information (number of assigned and free IP addresses, address range, etc.).

!!!info "Ping and NSLOOKUP"
    The IP list category provides a way to compare the documented state with the actual state: To check whether the documented IP addresses and hostnames are actually assigned, i-doit can send ICMP packets ("pings") and perform an NSLOOKUP. For this, the i-doit installation needs access to the network. There is the option to check individual entries or all entries sequentially. Under **Administration > [Tenant Name] Management > Settings for [Tenant Name] > IP list options**, you can configure which command-line tools are used. The user/group of the Apache web server must be allowed to execute these tools.

## VLAN

For each Virtual LAN (VLAN) to be maintained, you create an object of type **Layer 2 Net** in i-doit. The important part is the category of the same name, where the VLAN ID is stored. There you can also connect a physical network with a VLAN via the **Layer 3 net assignment** attribute. Specifying **IP helper addresses** is also possible.

To bind a VLAN to a (virtual/physical) port, the corresponding port of an active network component should have been created beforehand. Either the port can be assigned in the component's object (category **Port** or **Logical Port**) or in the **Layer 2 Net** object in the category **Assigned Ports** or **Assigned Logical Ports**.

## DHCP

IP addresses are assigned in a network (objects of type **Layer 3 Net**) in various ways. While servers often receive a static IP address, clients usually receive one assigned via DHCP. The DHCP server may assign IP addresses dynamically or by reservation. To document this, a network can be divided into different ranges. The **DHCP** category serves this purpose.

When assigning an IP to a network (category **Host address**), the choice of **address assignment** affects the automatic allocation of the next free IP address. Conversely, it is possible to define a new (reserved/unreserved) DHCP range in the assigned network by specifically setting the **address assignment**.

## Net Zones

Apart from CIDR, a subnet can be logically divided into multiple segments. This is useful when assigning IP addresses for specific tasks or for specific departments.

[![Net zones](../assets/images/de/anwendungsfaelle/ipam/1-ipam.png)](../assets/images/de/anwendungsfaelle/ipam/1-ipam.png)

Each segment is created as an object of type **Net Zone**. The category folder of the same name is available there. In the subordinate category **Options**, a **zone color** can be selected. This color is used in the **Net > IP List** category. Furthermore, the sub-category **Zones** displays the address ranges of the assigned subnets of type **Layer 3 Net**.

The assignment of a zone to a subnet takes place in the **Net > IP List** category of a subnet: First, you select an IP address or a range of IP addresses. Then you assign the segment to these IP addresses via the **New zone** button. The IP addresses are marked in the color of the zone.

[![New zone](../assets/images/de/anwendungsfaelle/ipam/2-ipam.png)](../assets/images/de/anwendungsfaelle/ipam/2-ipam.png)

In the **Host address** category, the next free IP address is automatically suggested based on the selected net zone. The **Domain** attribute in the **Net Zone > Options** category additionally ensures that when new IP addresses are assigned in the **Host address** category, this domain is automatically preselected.

## DNS and FQDNs

If you want to maintain information about the Domain Name System (DNS) and/or Fully Qualified Domain Names (FQDNs) used, you can do so with i-doit. For each **Layer 3 Net**, any number of **DNS servers** (object relationship) and domains can be stored in the **Net** category. Deviating settings for DNS servers and domains used can be stored per object in the **Host address** category. If an object receives one or more hostnames (category **Host address**) and information about the domains used, one or more FQDNs are derived, which are displayed automatically. Domains can be inherited through the assignment to a network. Additionally, **search domains** can be specified.

[![Host address](../assets/images/de/anwendungsfaelle/ipam/3-ipam.png)](../assets/images/de/anwendungsfaelle/ipam/3-ipam.png)

!!! info "Configuration data for DNS and DHCP servers"
    In principle, the documented data is suitable for supplying DNS or DHCP servers with matching configuration data. i-doit includes an [export function for the ISC DHCP DNS server](../automatisierung-und-integration/cli/index.md).

!!! info "DNS zones and records"
    While DNS zones can be easily derived from the IT documentation using i-doit's built-in tools, DNS records (A, AAAA, MX, etc.) are currently not a core component. It is recommended to create a custom list category containing the corresponding records. This category can be assigned to any object for which records should be stored. Reverse DNS is documented in objects of type **Layer 3 Net**.

## Gateways

Network components can act as gateways to route connections from one network to other networks (routing). Each network typically has a so-called default gateway, which is used when no explicit routing rule applies. Such a default gateway is defined in i-doit for a network: Either you select an object that acts as default gateway in the **Net** category of a **Layer 3 Net** object. It is important that this object already has an IP address assigned to this network. Or you set the **Default gateway for the network** attribute to **yes** within the object in the **Host address** category.

## IPv4 versus IPv6

Even though the adoption of IPv6 in many enterprise LANs can be estimated as rather low, i-doit provides the basic elements for documenting IPv6 networks. As with IPv4, networks are defined and IP addresses assigned. Only the **address assignment** differs (SLAAC, DHCPv6, etc.). Additionally, the **scope** (global, link-local, etc.) can be specified. Both attributes belong to the **Host address** category.

## WLAN

Documenting WLANs does not fundamentally differ from the options already described. An access point (AP) can be documented as an object of type **Wireless Access Point**. In the **WiFi device** category, SSIDs and encryption details, among other things, are maintained.

!!! info "WLAN controller"
    i-doit does not provide a direct way in the standard installation to represent WLAN controllers for managing access points. It is recommended to create a dedicated object type with a corresponding custom category.

## WAN

To document external connections, the **WAN Lines** object type is suitable. WAN stands for Wide Area Network. Similar forms such as Metropolitan Area Network (MAN) or Global Area Network (GAN) are intended to be covered by WAN.

Details about upstream and downstream, assigned LANs and VLANs, and more can be stored in the **WAN Lines** category.

## VPN

For Virtual Private Networks (VPN), there is neither a dedicated object type nor a special category in the standard installation of i-doit. It is recommended to use the **Layer 3 Net** object type and assign a descriptive name in the **Object title** so that the object is recognizable as a VPN. If additional VPN-specific attributes are needed, a dedicated object type and a custom category can help.

## Related Topics

"Pure" IPAM documentation is usually not sufficient: There are many adjacent topics that play a more or less important role. We would like to briefly touch on some of them below.

## MAC Addresses and Ports

In addition to IP addresses, you often want to document the associated MAC addresses for a host. These are uniquely assigned to a network port. In i-doit, the **Port** category in the **Network** category folder is used for documentation. There, additional (physical) properties of the port are specified. Additionally, one or more IP addresses can be permanently assigned to a port. Since the **Port** category is a list category, any number of ports can be created per object.

A helpful feature here is the ability to specify how many ports should be created simultaneously. A naming scheme (eth0, eth1, eth2) can also be applied.

A connection to another (active/passive) network component is possible per port entry: In the **Port Browser**, you first preselect the object and then the corresponding port. This means the ports should already exist before they are connected to each other.

## Virtual Ports

Physical ports can be combined into logical ones. This technique is often called trunking or bonding. To document this, the **Logical Ports** category in the **Network** category folder is used.

## Cabling

In i-doit, a clear distinction can be made between the different layers of the [TCP/IP reference model](https://en.wikipedia.org/wiki/Internet_protocol_suite#TCP/IP_reference_model). The topics above cover layers 3 with IP and 4 (MAC). For the remaining layers, i-doit provides further documentation features, for example for layer 1, which addresses the physical medium.

To document cables and their connections to active and passive components, i-doit already includes numerous object types (**Cable**, **Patch Panel**, **Cable Tray**, **Conduit**, etc.). The **Cabling** category handles the connection of objects of these types. This category can, but does not have to be, actively maintained. When a connection between two components is documented via the **Port** (Network) category, this category is automatically filled in and an object of type **Cable** is created.

## Network Listener and Port Binding

Analogous to cabling, the upper layers of the TCP/IP reference model can also be documented in i-doit. Which application opens which TCP/UDP connections and which application accesses which ports on third-party systems can be recorded in the **Network Connections** category folder. Within the folder, there are the categories **Listener** (port is opened) and **Connection** (port on third-party system is used). It should be ensured beforehand that the required software installations are documented in i-doit.

## Further Links

*   [doIT BETTER: IP Address Management (IPAM)](https://www.i-doit.com/blog/ip-adress-management-mit-i-doit/), blog article on [i-doit.com](http://i-doit.com) with video
*   [German-language demo](http://ipamdemo.i-doit.com/) for the above "doIT BETTER" topic (Credentials: admin/admin)
