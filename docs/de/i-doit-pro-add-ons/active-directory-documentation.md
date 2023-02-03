Das "Active Directory Dokumentation" Add-on wurde als erstes [Add-on](/display/de/i-doit+pro+Add-ons) mit dem [Add-on Packager](/display/de/Add-on+Packager) entworfen und erstellt. Mit dem "Active Directory Dokumentation" Add-on soll es Administratoren einfacher gemacht werden, Microsoft Umgebungen zu dokumentieren. Dabei werden durch das Add-on die nötigen Objekttypen und Kategorien erstellt.

  
Installation und Lizenz

Das "Active Directory Dokumentation" Add-on wird wie jedes Add-on über das [Admin Center](/display/de/Admin+Center) installiert. Das Add-on ist nicht lizenzpflichtig. Es kann allerdings nur mit der pro-Variante genutzt werden.

**Inhaltsverzeichnis**

*   1[Inhalt des Add-ons](#ActiveDirectoryDocumentation-InhaltdesAdd-ons)
*   2[Domäne](#ActiveDirectoryDocumentation-Domäne)
*   3[Gesamtstruktur](#ActiveDirectoryDocumentation-Gesamtstruktur)
*   4[Zertifizierungsstelle](#ActiveDirectoryDocumentation-Zertifizierungsstelle)
*   5[Windows Server](#ActiveDirectoryDocumentation-WindowsServer)
*   6[Windows Client](#ActiveDirectoryDocumentation-WindowsClient)
*   7[DNS Server](#ActiveDirectoryDocumentation-DNSServer)
*   8[DHCP Server](#ActiveDirectoryDocumentation-DHCPServer)

Inhalt des Add-ons
------------------

Das "Active Directory Dokumentation" Add-on bringt eine Sammlung an Objekttypen, Kategorien und Dialog+ Einträge mit:

Es werden zwei neuen Objekttyp-Gruppen "Active Directory" und "Windows Systems" mit den neuen Objekttypen erstellt:  

| Active Directory | Windows Systems |
| --- | --- |
| Domäne | DHCP Server |
| Gesamtstruktur | DNS Server |
| Standort | Windows Client |
| Zertifizierungsstelle | Window Server |

Im folgenden werden die einzelnen Objekttypen mit den neu ausgelieferten Kategorien kurz erläutert.

  

Domäne
------

Der ausgelieferte Objekttyp "Domäne" ermöglicht es die gängigsten Informationen einer Domäne zu dokumentieren.   
Mit dem Objekttypen werden die folgenden Kategorien ausgeliefert:

| Kategorie |
| --- |
| Domänen Informationen |
| Domänen Schema |
| Domänenstruktur |
| FSMO Rollen |
| Vertauenswürdige Domänen |
| Zugewiesene Domänencontroller |
| Zugewiesene Partitionen |
| Zugewiesene Standorte |

![](/download/attachments/97288806/domain.png?version=1&modificationDate=1612950533853&api=v2&effects=drop-shadow)

Gesamtstruktur
--------------

Der neue Objekttyp ermöglicht es mit den mitgelieferten Kategorien, alle nötigen Informationen einer Struktur zu dokumentieren.  
Mit dem Objekttypen werden die folgenden Kategorien ausgeliefert:

| Kategorie |
| --- |
| FSMO Rollen |
| Struktur Informationen |
| Vertrauenswürdige Strukturen |
| Zugewiesene Katalogserver |

![](/download/attachments/97288806/forest.png?version=1&modificationDate=1612950533844&api=v2&effects=drop-shadow)

Zertifizierungsstelle
---------------------

Die "Zertifizierungsstelle" ermöglicht die genaue Dokumentation von Zertifikaten. Hierbei ermöglicht der namengebende Objekttyp die ausstellende Zertifizierungsstelle, sowie die ausgestellten Zertifikate zu dokumentieren.  
Mit dem Objekttypen werden die folgenden Kategorien ausgeliefert:

| Kategorie |
| --- |
| Ausgestellte Zertifikate |
| Zertifizierungsstelle |

![](/download/attachments/97288806/cert_authority.png?version=1&modificationDate=1612950533826&api=v2&effects=drop-shadow)

Windows Server
--------------

Der neue Objekttyp "Windows Server" basiert grundlegend auf dem Objekttypen "Server". Hierbei wird jedoch verstärkt auf den Nutzen und dessen Beziehungen zum Active Directory gesetzt.  
Mit dem Objekttypen werden die folgenden Kategorien ausgeliefert:

| Kategorie |
| --- |
| Domänencontroller |
| FSMO Informationen |
| Globaler Katalog |
| LDAP |
| NTFS Freigaben |
| Server Rollen |
| Windows Dienste |
| Windows Ereignisse |
| Windows Features |
| Windows Informationen |
| Windows Server Gruppe |
| Windows Update |

![](/download/attachments/97288806/winserv.png?version=1&modificationDate=1612950533816&api=v2&effects=drop-shadow)

Windows Client
--------------

Der neue Objekttyp "Windows Client" basiert grundlegend auf dem Objekttypen "Client". Hierbei wird jedoch, wie beim Windows Server, verstärkt auf den Nutzen und dessen Beziehungen zum Active Directory gesetzt.  
Mit dem Objekttypen werden die folgenden Kategorien ausgeliefert:

| Kategorie |
| --- |
| RDP Einstellungen |
| Windows Informationen |

![](/download/attachments/97288806/winclient.png?version=1&modificationDate=1612950533806&api=v2&effects=drop-shadow)

DNS Server
----------

Der Objekttyp "DNS Server" basiert grundlegend auf dem Objekttypen "Windows Server". Dieser ermöglicht eine separate Dokumentation von DNS Informationen. Für eine spezielle DNS Dokumentation steht das "DNS Dokumentation" DNS Add-on zur Verfügung.  
Mit dem Objekttypen werden die folgenden Kategorien ausgeliefert:

| Kategorie |
| --- |
| DNS Zonen Einträge |
| Zugewiesene DNS Server |

![](/download/attachments/97288806/dnsserv.png?version=1&modificationDate=1612950533797&api=v2&effects=drop-shadow)

DHCP Server
-----------

Der Objekttyp "DHCP Server" basiert grundlegend auf dem Objekttypen "Windows Server". Dieser ermöglicht eine separate Dokumentation von DHCP Informationen.   
Mit dem Objekttypen werden die folgenden Kategorien ausgeliefert:

| Kategorie |
| --- |
| DHCP Bereiche |
| Zugewiesene DHCP Server |

![](/download/attachments/97288806/dhcpserv.png?version=1&modificationDate=1612950533779&api=v2&effects=drop-shadow)

Changelog

| Version | Date | Changelog |
| --- | --- | --- |
| 0.1 | 26.01.2021 | Initial Release |