**Contents**

*   1[IP List Category](#IPList-IPListCategory)
*   2[Object Assignment](#IPList-ObjectAssignment)
*   3[Check of IP Addresses](#IPList-CheckofIPAddresses)

Again and again there is one central issue for the Admin: Which IP addresses are assigned to which host and which addresses can still be assigned? The IP lists in i-doit can be a great help to tackle this question.

A more detailed approach into this matter is provided in the application case for the [IP Address Management (IPAM)](https://kb.i-doit.com/pages/viewpage.action?pageId=61015781).

IP List Category
----------------

The `**IP list**` [category](https://kb.i-doit.com/display/en/Structure+of+the+IT+Documentation) provides a comprehensive overview of each net. In the default installation of i-doit it is assigned to the [object type](https://kb.i-doit.com/display/en/Structure+of+the+IT+Documentation) Layer-3-Net. You can find all [objects](https://kb.i-doit.com/display/en/Structure+of+the+IT+Documentation) which are assigned to this net, including their IP address, host name and type of address assignment, in a tabular listing.

 ![](/download/attachments/66355690/image2017-10-13%209%3A44%3A19.png?version=1&modificationDate=1507881377235&api=v2&effects=drop-shadow)

The type of address assignment is presented with colors and their respective meaning is explained in a color key on the right of the list:

*   **Green:** Net address / Broadcast
*   **Yellow:** Default Gateway (This is the object for which you defined in the Host address category that it should act as default gateway.)
*   **Orange:** unnumbered address range
*   **Gray:** statically assigned IP addresses
*   **Blue:** IP addresses which are reserved by the DHCP server (see also **`DHCP`** category)
*   **Light blue:** IP addresses which are assigned dynamically by the DHCP server (see also **`DHCP`** category)

In order to avoid (unintentional) address conflicts, i-doit points out multiple assigned IP addresses beside the table.

In smaller networks (< 1,000 IP addresses) also IP addresses which have not been assigned yet are displayed. Should the network have an address range which is too extensive, for example a `/16` with more than 65,000 IP addresses, only the used IP addresses are shown and those who are not yet assigned are hidden. Additionally, a corresponding note is made.

Another table on the right concludes important information about the net:

*   IP addresses in use
*   Net address
*   Subnet mask
*   Default gateway
*   Address range
*   Superordinate supernets (object type `**Supernet**)`
*   Assigned VLANs (object type `**Layer-2-Net**`)

Object Assignment
-----------------

You can expand the list by further objects without using the `**Host address**` category but by using the `**Connect object**`  button.

Check of IP Addresses
---------------------

The `**IP list**` category provides the possibility to make a comparison between the target state and the actual state. In order to check if the documented IP addresses and host names are really assigned, i-doit can send ICMP packets ("Pings") and start a NSLOOKUP. For this purpose, i-doit requires net access. You can check single entries or all entries in a subsequent order. With  `**Administration → System settings → Tentantsettings → Options for the IP-List**` you can set which command line tools should be applied. The user/ group of the Apache webserver have to have the permission to activate these tools.

*   `**Ping**`: Send ICMP packet to IP address
*   `**NSLOOKUP**`: Specify IP address as host name
*   `**Reverse NSLOOKUP**`: Specify host name for IP address