<!-- TRANSLATED by md-translate -->
# Active Directory Documentation

# Documentation Active Directory

Das "Active Directory Dokumentation" Add-on wurde als erstes [Add-on](./index.md) mit dem [Add-on Packager](./add-on-packager.md) entworfen und erstellt. Mit dem "Active Directory Dokumentation" Add-on soll es Administratoren einfacher gemacht werden, Microsoft Umgebungen zu dokumentieren. Dabei werden durch das Add-on die nötigen Objekttypen und Kategorien erstellt.

L'add-on "Documentation Active Directory" a été conçu et créé comme le premier [add-on](./index.md) avec le [add-on Packager](./add-on-packager.md). Le module complémentaire "Documentation Active Directory" doit permettre aux administrateurs de documenter plus facilement les environnements Microsoft. Les types d'objets et les catégories nécessaires sont créés par le module complémentaire.

Installation und Lizenz

Installation et licence

Das "Active Directory Dokumentation" Add-on wird wie jedes Add-on über das [Admin Center](../administration/admin-center.md) installiert. Das Add-on ist nicht lizenzpflichtig. Es kann allerdings nur mit der pro-Variante genutzt werden.

L'add-on "Documentation Active Directory" est installé comme tout add-on via le [Admin Center](../administration/admin-center.md). L'add-on n'est pas soumis à une licence. Il ne peut toutefois être utilisé qu'avec la variante pro.

## Inhalt des Add-ons

## Contenu de l'add-on

Das "Active Directory Dokumentation" Add-on bringt eine Sammlung an Objekttypen, Kategorien und Dialog+ Einträge mit:

Le module complémentaire "Documentation Active Directory" apporte une collection de types d'objets, de catégories et d'entrées Dialog+ :

Es werden zwei neuen Objekttyp-Gruppen "Active Directory" und "Windows Systems" mit den neuen Objekttypen erstellt:

Deux nouveaux groupes de types d'objets "Active Directory" et "Windows Systems" sont créés avec les nouveaux types d'objets :

| Active Directory | Windows Systems |
| --- | --- |
| Domäne | DHCP Server |
| Gesamtstruktur | DNS Server |
| Standort | Windows Client |
| Zertifizierungsstelle | Window Server |

| Active Directory | Systèmes Windows |
| --- | --- |
| Domaine | Serveur DHCP |
| structure globale | serveur DNS |
| Site | Windows Client |
| Autorité de certification | Window Server |

Im folgenden werden die einzelnen Objekttypen mit den neu ausgelieferten Kategorien kurz erläutert.

Les différents types d'objets avec les nouvelles catégories livrées sont brièvement expliqués ci-dessous.

## Domäne

## Domaine

Der ausgelieferte Objekttyp "Domäne" ermöglicht es die gängigsten Informationen einer Domäne zu dokumentieren.  
Mit dem Objekttypen werden die folgenden Kategorien ausgeliefert:

Le type d'objet "domaine" livré permet de documenter les informations les plus courantes d'un domaine.  
Les catégories suivantes sont livrées avec le type d'objet :

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

| catégorie |
| --- |
| Informations sur les domaines |
| schéma de domaines |
| structure du domaine |
| Rôles FSMO |
| Domaines de confiance |
| Contrôleurs de domaine assignés |
| Partitions assignées |
| Sites assignés |

[![Domäne](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/1-add.png)](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/1-add.png)

[ ![Domaine](../assets/images/fr/i-doit-pro-add-ons/active-directory-documentation/1-add.png)](../assets/images/fr/i-doit-pro-add-ons/active-directory-documentation/1-add.png)

## Gesamtstruktur

## structure globale

Der neue Objekttyp ermöglicht es mit den mitgelieferten Kategorien, alle nötigen Informationen einer Struktur zu dokumentieren.  
Mit dem Objekttypen werden die folgenden Kategorien ausgeliefert:

Le nouveau type d'objet permet, grâce aux catégories fournies, de documenter toutes les informations nécessaires d'une structure.  
Les catégories suivantes sont livrées avec le type d'objet :

| Kategorie |
| --- |
| FSMO Rollen |
| Struktur Informationen |
| Vertrauenswürdige Strukturen |
| Zugewiesene Katalogserver |

| catégorie |
| --- |
| Rôles FSMO |
| Structure Informations |
| Structures de confiance |
| Serveurs de catalogue attribués |

[![Gesamtstruktur](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/2-add.png)](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/2-add.png)

[ ![Structure générale](../assets/images/fr/i-doit-pro-add-ons/active-directory-documentation/2-add.png)](../assets/images/fr/i-doit-pro-add-ons/active-directory-documentation/2-add.png)

## Zertifizierungsstelle

## Autorité de certification

Die "Zertifizierungsstelle" ermöglicht die genaue Dokumentation von Zertifikaten. Hierbei ermöglicht der namengebende Objekttyp die ausstellende Zertifizierungsstelle, sowie die ausgestellten Zertifikate zu dokumentieren.

L'"autorité de certification" permet de documenter précisément les certificats. Dans ce cas, le type d'objet qui donne son nom permet de documenter l'autorité de certification qui a délivré le certificat, ainsi que les certificats délivrés.

Mit dem Objekttypen werden die folgenden Kategorien ausgeliefert:

Les catégories suivantes sont livrées avec le type d'objet :

| Kategorie |
| --- |
| Ausgestellte Zertifikate |
| Zertifizierungsstelle |

| catégorie |
| --- |
| Certificats délivrés |
| Autorité de certification |

[![Zertifizierungsstelle](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/3-add.png)](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/3-add.png)

[ ![Autorité de certification](../assets/images/fr/i-doit-pro-add-ons/active-directory-documentation/3-add.png)](../assets/images/fr/i-doit-pro-add-ons/active-directory-documentation/3-add.png)

## Windows Server

## Windows Server

Der neue Objekttyp "Windows Server" basiert grundlegend auf dem Objekttypen "Server". Hierbei wird jedoch verstärkt auf den Nutzen und dessen Beziehungen zum Active Directory gesetzt.

Le nouveau type d'objet "Windows Server" est fondamentalement basé sur le type d'objet "Serveur". Toutefois, il met davantage l'accent sur l'utilité et ses relations avec Active Directory.

Mit dem Objekttypen werden die folgenden Kategorien ausgeliefert:

Les catégories suivantes sont livrées avec le type d'objet :

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

| catégorie |
| --- |
| contrôleur de domaine |
| Informations FSMO |
| Catalogue global |
| LDAP |
| Partages NTFS |
| Rôles du serveur |
| Services Windows |
| Événements Windows |
| Fonctionnalités Windows |
| Informations Windows |
| Groupe de serveurs Windows |
| Mise à jour Windows |

[![Windows Server](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/4-add.png)](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/4-add.png)

[ ![Windows Server](../assets/images/fr/i-doit-pro-add-ons/active-directory-documentation/4-add.png)](../assets/images/fr/i-doit-pro-add-ons/active-directory-documentation/4-add.png)

## Windows Client

## Client Windows

Der neue Objekttyp "Windows Client" basiert grundlegend auf dem Objekttypen "Client". Hierbei wird jedoch, wie beim Windows Server, verstärkt auf den Nutzen und dessen Beziehungen zum Active Directory gesetzt.

Le nouveau type d'objet "Windows Client" est fondamentalement basé sur le type d'objet "Client". Toutefois, comme pour Windows Server, l'accent est mis ici davantage sur l'utilité et ses relations avec Active Directory.

Mit dem Objekttypen werden die folgenden Kategorien ausgeliefert:

Les catégories suivantes sont livrées avec le type d'objet :

| Kategorie |
| --- |
| RDP Einstellungen |
| Windows Informationen |

| catégorie |
| --- |
| Paramètres RDP |
| Informations Windows |

[![Windows Client](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/5-add.png)](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/5-add.png)

[ ![Windows Client](../assets/images/fr/i-doit-pro-add-ons/active-directory-documentation/5-add.png)](../assets/images/fr/i-doit-pro-add-ons/active-directory-documentation/5-add.png)

## DNS Server

## Serveur DNS

Der Objekttyp "DNS Server" basiert grundlegend auf dem Objekttypen "Windows Server". Dieser ermöglicht eine separate Dokumentation von DNS Informationen. Für eine spezielle DNS Dokumentation steht das "DNS Dokumentation" DNS Add-on zur Verfügung.

Le type d'objet "serveur DNS" est fondamentalement basé sur le type d'objet "serveur Windows". Celui-ci permet une documentation séparée des informations DNS. Pour une documentation DNS spéciale, le module complémentaire DNS "Documentation DNS" est disponible.

Mit dem Objekttypen werden die folgenden Kategorien ausgeliefert:

Les catégories suivantes sont livrées avec le type d'objet :

| Kategorie |
| --- |
| DNS Zonen Einträge |
| Zugewiesene DNS Server |

| catégorie |
| --- |
| Enregistrements de zones DNS |
| Serveurs DNS attribués |

[![DNS Server](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/6-add.png)](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/6-add.png)

[ ![Serveur DNS](../assets/images/fr/i-doit-pro-add-ons/active-directory-documentation/6-add.png)](../assets/images/fr/i-doit-pro-add-ons/active-directory-documentation/6-add.png)

## DHCP Server

## Serveur DHCP

Der Objekttyp "DHCP Server" basiert grundlegend auf dem Objekttypen "Windows Server". Dieser ermöglicht eine separate Dokumentation von DHCP Informationen.

Le type d'objet "Serveur DHCP" est fondamentalement basé sur le type d'objet "Serveur Windows". Celui-ci permet une documentation séparée des informations DHCP.

Mit dem Objekttypen werden die folgenden Kategorien ausgeliefert:

Les catégories suivantes sont livrées avec le type d'objet :

| Kategorie |
| --- |
| DHCP Bereiche |
| Zugewiesene DHCP Server |

| catégorie |
| --- |
| Domaines DHCP |
| Serveurs DHCP attribués |

[![DHCP Server](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/7-add.png)](../assets/images/de/i-doit-pro-add-ons/active-directory-documentation/7-add.png)

[ ![Serveur DHCP](../assets/images/fr/i-doit-pro-add-ons/active-directory-documentation/7-add.png)](../assets/images/fr/i-doit-pro-add-ons/active-directory-documentation/7-add.png)

Changelog

Changelog

| Version | Date | Changelog |
| --- | --- | --- |
| 0.1 | 26.01.2021 | Initial Release |

| Version | Date | Changelog |
| --- | --- | --- |
| 0.1 | 26.01.2021 | Sortie initiale |