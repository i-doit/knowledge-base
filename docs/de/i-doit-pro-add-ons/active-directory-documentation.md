# Active Directory Documentation

Das "Active Directory Dokumentation" Add-on wurde als erstes [Add-on](./index.md) mit dem [Add-on Packager](./add-on-packager.md) entworfen und erstellt. Mit dem "Active Directory Dokumentation" Add-on soll es Administratoren einfacher gemacht werden, Microsoft Umgebungen zu dokumentieren. Dabei werden durch das Add-on die nötigen Objekttypen und Kategorien erstellt.
  
Installation und Lizenz

Das "Active Directory Dokumentation" Add-on wird wie jedes Add-on über das [Admin Center](../administration/admin-center.md) installiert. Das Add-on ist nicht lizenzpflichtig. Es kann allerdings nur mit der pro-Variante genutzt werden.

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

[![Domäne](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/1-add.png)](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/1-add.png)

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

[![Gesamtstruktur](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/2-add.png)](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/2-add.png)

Zertifizierungsstelle
---------------------

Die "Zertifizierungsstelle" ermöglicht die genaue Dokumentation von Zertifikaten. Hierbei ermöglicht der namengebende Objekttyp die ausstellende Zertifizierungsstelle, sowie die ausgestellten Zertifikate zu dokumentieren.  
Mit dem Objekttypen werden die folgenden Kategorien ausgeliefert:

| Kategorie |
| --- |
| Ausgestellte Zertifikate |
| Zertifizierungsstelle |

[![Zertifizierungsstelle](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/3-add.png)](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/3-add.png)

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

[![Windows Server](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/4-add.png)](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/4-add.png)

Windows Client
--------------

Der neue Objekttyp "Windows Client" basiert grundlegend auf dem Objekttypen "Client". Hierbei wird jedoch, wie beim Windows Server, verstärkt auf den Nutzen und dessen Beziehungen zum Active Directory gesetzt.  
Mit dem Objekttypen werden die folgenden Kategorien ausgeliefert:

| Kategorie |
| --- |
| RDP Einstellungen |
| Windows Informationen |

[![Windows Client](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/5-add.png)](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/5-add.png)

DNS Server
----------

Der Objekttyp "DNS Server" basiert grundlegend auf dem Objekttypen "Windows Server". Dieser ermöglicht eine separate Dokumentation von DNS Informationen. Für eine spezielle DNS Dokumentation steht das "DNS Dokumentation" DNS Add-on zur Verfügung.  
Mit dem Objekttypen werden die folgenden Kategorien ausgeliefert:

| Kategorie |
| --- |
| DNS Zonen Einträge |
| Zugewiesene DNS Server |

[![DNS Server](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/6-add.png)](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/6-add.png)

DHCP Server
-----------

Der Objekttyp "DHCP Server" basiert grundlegend auf dem Objekttypen "Windows Server". Dieser ermöglicht eine separate Dokumentation von DHCP Informationen.   
Mit dem Objekttypen werden die folgenden Kategorien ausgeliefert:

| Kategorie |
| --- |
| DHCP Bereiche |
| Zugewiesene DHCP Server |

[![DHCP Server](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/7-add.png)](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/7-add.png)

Changelog

| Version | Date | Changelog |
| --- | --- | --- |
| 0.1 | 26.01.2021 | Initial Release |