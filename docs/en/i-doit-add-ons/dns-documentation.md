# DNS Documentation

The "DNS Documentation" [add-on](./index.md) was designed and created as the first add-on with the [Add-on Packager](./add-on-packager.md). The idea behind the DNS Documentation is to easily document DNS entries in i-doit. The add-on creates the necessary object types and categories.

Installation and license
---------------------------

The "DNS Documentation" add-on is installed like any other add-on via the [Admin-Center](../system-administration/admin-center.md). The add-on does not require a license. However, it can only be used with the pro variant.

Add-on content

The "DNS Documentation" add-on brings the following object types, categories and Dialog+ entries:

| Objekt-type | Category | Dialog+ Field | Dialog+ Entry |
| --- | --- | --- | --- |
| DNS Server | DNS Zones | \-  | \-  |
| DNS Zone | Authoritative Nameservers | Role | Primary |
|     |     |     | Secondary |
|     | DNS Records | Class | IN (Internet) |
|     |     |     | CH (Chaosnet) |
|     |     |     | HS (Hesoid) |
|     |     | Type | A   |
|     |     |     | AAAA |
|     |     |     | NS  |
|     |     |     | CNAME |
|     |     |     | MX  |
|     |     |     | PTR |
|     |     |     | TXT |
|     |     |     | SRV |
|     |     |     | SOA |
|     | SOA Record | Class | IN (Internet) |
|     |     |     | CH (Chaosnet) |
|     |     |     | HS (Hesoid) |

DNS Server
----------

The delivered object type "DNS Server" is based on a normal server object, with the additional category "DNS Zones" assigned.
In the add-on, an explicit object type is used so that a smooth integration can be ensured. The automatically assigned category "DNS Zones" contains an overview of all assigned DNS zones. (This is a backward category, which is why the information cannot be edited here).

[![DNS Server](../assets/images/en/i-doit-add-ons/dns-documentation/1-dns.png)](../assets/images/en/i-doit-add-ons/dns-documentation/1-dns.png)

DNS Zone
--------

In the new object type "DNS Zone" all information about the zone entries is documented.
Three additional categories are available here:

*   Authoritative Nameservers → the associated name servers are entered here and can be distinguished between "Primary" and "Secondary".
*   DNS Records → the "individual lines" of a zone file can be entered here. These can be created suitably over the supplied "Types".
*   SOA Record → here the SOA record can be explicitly documented.

### Authorizing name servers

The category "Authoritative Nameservers" is a multi-value category.

[![Authorizing name servers](../assets/images/en/i-doit-add-ons/dns-documentation/2-dns.png)](../assets/images/en/i-doit-add-ons/dns-documentation/2-dns.png)

Two pieces of information are documented in one entry:

*   DNS Server Object
*   Role

[![DNS Server Object](../assets/images/en/i-doit-add-ons/dns-documentation/3-dns.png)](../assets/images/en/i-doit-add-ons/dns-documentation/3-dns.png)

An object browser is available for the "DNS server object" attribute. The corresponding DNS server can then be selected here. In addition, the corresponding "role" can also be specified for each server. Available here are → Primary and Secondary

DNS Records
-----------

The "DNS Records" category is also a multi-value category.

[![DNS Records](../assets/images/en/i-doit-add-ons/dns-documentation/4-dns.png)](../assets/images/en/i-doit-add-ons/dns-documentation/4-dns.png)

The category was designed as a multi-value category so that a DNS file can be documented "line by line". This allows an overview of all entries.

[![DNS Records](../assets/images/en/i-doit-add-ons/dns-documentation/5-dns.png)](../assets/images/en/i-doit-add-ons/dns-documentation/5-dns.png)

An entry consists of the text fields "Name", "Time to live", "Data" and the Dialog+ fields "Class" and "Type". Predefined entries are supplied for the Dialog+ fields "Class" and "Type".

SOA Records
-----------

In addition to the simple DNS records, there is the category "SOA Records". This category allows the so-called "Start of Authority" to be documented in more detail. Since the SOA record is unique, the category is also not available as a multi-value category.

[![SOA Records](../assets/images/en/i-doit-add-ons/dns-documentation/6-dns.png)](../assets/images/en/i-doit-add-ons/dns-documentation/6-dns.png)

Apart from the dialog+ field "Class", all fields are available as text fields. All necessary information of the SOA record can be documented here.
