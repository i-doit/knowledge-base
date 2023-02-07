The "DNS Documentation" [add-on](/display/en/i-doit+pro+Add-ons) was designed and created as the first add-on with the [Add-on Packager](/display/en/Add-on+Packager). The idea behind the DNS Documentation is to easily document DNS entries in i-doit. The add-on creates the necessary object types and categories.

  
Installation and license
---------------------------

The "DNS Documentation" add-on is installed like any other add-on via the [Admin Center](/display/en/Admin+Center). The add-on does not require a license. However, it can only be used with the pro variant.

**Table of Contents**

*   1[Installation and license](#DNSDocumentation-Installationandlicense)
*   2[DNS Server](#DNSDocumentation-DNSServer)
*   3[DNS Zone](#DNSDocumentation-DNSZone)
    *   3.1[Authorizing name servers](#DNSDocumentation-Authorizingnameservers)
*   4[DNS Records](#DNSDocumentation-DNSRecords)
*   5[SOA Records](#DNSDocumentation-SOARecords)

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

![](/download/attachments/113475890/image2021-12-1_11-39-6.png?version=1&modificationDate=1638357572782&api=v2&effects=drop-shadow)

DNS Zone
--------

In the new object type "DNS Zone" all information about the zone entries is documented.   
Three additional categories are available here:

*   Authoritative Nameservers → the associated name servers are entered here and can be distinguished between "Primary" and "Secondary".
*   DNS Records → the "individual lines" of a zone file can be entered here. These can be created suitably over the supplied "Types".
*   SOA Record → here the SOA record can be explicitly documented.

### Authorizing name servers

The category "Authoritative Nameservers" is a multi-value category. 

![](/download/attachments/113475890/image2021-12-1_11-41-36.png?version=1&modificationDate=1638357572773&api=v2&effects=drop-shadow)

Two pieces of information are documented in one entry:

*   DNS Server Object
*   Role

![](/download/attachments/113475890/image2021-12-1_11-43-26.png?version=1&modificationDate=1638357572762&api=v2&effects=drop-shadow)

An object browser is available for the "DNS server object" attribute. The corresponding DNS server can then be selected here. In addition, the corresponding "role" can also be specified for each server. Available here are → Primary and Secondary

DNS Records
-----------

The "DNS Records" category is also a multi-value category.

![](/download/attachments/113475890/image2021-12-1_11-46-54.png?version=1&modificationDate=1638357572750&api=v2&effects=drop-shadow)

The category was designed as a multi-value category so that a DNS file can be documented "line by line". This allows an overview of all entries. 

![](/download/attachments/113475890/image2021-12-1_11-48-18.png?version=1&modificationDate=1638357572739&api=v2&effects=drop-shadow)

An entry consists of the text fields "Name", "Time to live", "Data" and the Dialog+ fields "Class" and "Type". Predefined entries are supplied for the Dialog+ fields "Class" and "Type".

SOA Records
-----------

In addition to the simple DNS records, there is the category "SOA Records". This category allows the so-called "Start of Authority" to be documented in more detail. Since the SOA record is unique, the category is also not available as a multi-value category.

![](/download/attachments/113475890/image2021-12-1_11-50-22.png?version=1&modificationDate=1638357572720&api=v2&effects=drop-shadow)

Apart from the dialog+ field "Class", all fields are available as text fields. All necessary information of the SOA record can be documented here.