# IP List

Again and again there is one central issue for the Admin: Which IP addresses are assigned to which host and which addresses can still be assigned? The IP lists in i-doit can be a great help to tackle this question.

A more detailed approach into this matter is provided in the application case for the [IP Address Management (IPAM)](../use-cases/ip-adress-management.md).

## IP List Category

----------------

The **IP list** [category](../basics/structure-of-the-it-documentation.md) provides a comprehensive overview of each net. In the default installation of i-doit it is assigned to the [object type](../basics/structure-of-the-it-documentation.md) Layer-3-Net. You can find all [objects](../basics/structure-of-the-it-documentation.md) which are assigned to this net, including their IP address, host name and type of address assignment, in a tabular listing.

[![IP List Category](../assets/images/en/evaluation/ip-list/1-il.png)](../assets/images/en/evaluation/ip-list/1-il.png)

The type of address assignment is presented with colors and their respective meaning is explained in a color key on the right of the list:

*   **Green:** Net address / Broadcast
*   **Yellow:** Default Gateway (This is the object for which you defined in the Host address category that it should act as default gateway.)
*   **Orange:** unnumbered address range
*   **Gray:** statically assigned IP addresses
*   **Blue:** IP addresses which are reserved by the DHCP server (see also **DHCP** category)
*   **Light blue:** IP addresses which are assigned dynamically by the DHCP server (see also **DHCP** category)

In order to avoid (unintentional) address conflicts, i-doit points out multiple assigned IP addresses beside the table.

In smaller networks (< 1,000 IP addresses) also IP addresses which have not been assigned yet are displayed. Should the network have an address range which is too extensive, for example a /16 with more than 65,000 IP addresses, only the used IP addresses are shown and those who are not yet assigned are hidden. Additionally, a corresponding note is made.

Another table on the right concludes important information about the net:

*   IP addresses in use
*   Net address
*   Subnet mask
*   Default gateway
*   Address range
*   Superordinate supernets (object type **Supernet**)
*   Assigned VLANs (object type **Layer-2-Net**)

## Object Assignment

-----------------

You can expand the list by further objects without using the **Host address** category but by using the **Connect object**  button.

## Check of IP Addresses

-----------------

The **IP list** category provides the possibility to make a comparison between the target state and the actual state. In order to check if the documented IP addresses and host names are really assigned, i-doit can send ICMP packets ("Pings") and start a NSLOOKUP. For this purpose, i-doit requires net access. You can check single entries or all entries in a subsequent order. With  **Administration → System settings → Tentantsettings → Options for the IP-List** you can set which command line tools should be applied. The user/ group of the Apache webserver have to have the permission to activate these tools.

*   **Ping**: Send ICMP packet to IP address
*   **NSLOOKUP**: Specify IP address as host name
*   **Reverse NSLOOKUP**: Specify host name for IP address

## Nmap Installation

### Windows

Open Command Prompt and use `bitsadmin` to download the Nmap Zip archive:

```cmd
bitsadmin /transfer nmapDownloadJob /download /priority normal https://nmap.org/dist/nmap-7.92-win32.zip C:\nmap-7.92-win32.zip
```

Extract the zip file using `tar`

```cmd
tar -xf C:\nmap-7.92-win32.zip -C C:\nmap
```

!!! note "If `tar` is not available, use `7-Zip` if it is installed"

```cmd
"C:\Program Files\7-Zip\7z.exe" x C:\nmap-7.92-win32.zip -oC:\nmap
```

Add the Nmap directory to the system PATH environment variable

```cmd
setx PATH "%PATH%;C:\nmap"
```

!!! danger "Ensure the path matches the directory where you extracted Nmap"

Create a text file containing the list of IP addresses you want to ping. Use a text editor or create it directly in the command line

```cmd
echo 192.168.1.1 > C:\ip_list.txt
echo 192.168.1.2 >> C:\ip_list.txt
echo 192.168.1.3 >> C:\ip_list.txt
```

!!! attention "Replace the IP addresses with those you want to ping."

Use Nmap to ping the IP addresses in the list

```cmd
nmap -sn -iL C:\ip_list.txt
```

### Unix

First we need to install Nmap

#### Debian or Ubuntu

```sh
sudo apt update
sudo apt install nmap
```

#### Red Hat Enterprise Linux (RHEL)

```sh
sudo dnf install nmap
```

or

```sh
sudo yum install nmap
```

Then we need to create the IP List File. Create a text file containing the list of IP addresses you want to ping. You can use any text editor or create the file directly in the terminal

```sh
echo "192.168.1.1" > ~/ip_list.txt
echo "192.168.1.2" >> ~/ip_list.txt
echo "192.168.1.3" >> ~/ip_list.txt
```

!!! attention "Replace the IP addresses with those you want to ping."

Lastly we need to run nmap through the created IP List

```sh
nmap -sn -iL ~/ip_list.txt
```
