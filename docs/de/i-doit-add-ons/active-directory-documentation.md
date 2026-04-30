---
title: Active Directory Documentation
description: "Mit dem Add-on \"Active Directory Dokumentation\" dokumentierst du Microsoft-Umgebungen direkt in i-doit."
icon:
status:
lang: de
---
# Active Directory Documentation

Mit dem Add-on "Active Directory Dokumentation" dokumentierst du Microsoft-Umgebungen direkt in i-doit. Das Add-on wurde mit dem [Add-on Packager](./add-on-packager.md) erstellt und liefert alle nötigen Objekttypen und Kategorien automatisch mit.

## Installation und Lizenz

Installiere das Add-on wie gewohnt über das [Admin-Center](../administration/admin-center.md). Es ist nicht lizenzpflichtig, setzt aber die pro-Variante von i-doit voraus.

## Inhalt des Add-ons

Das Add-on bringt eine Sammlung an Objekttypen, Kategorien und Dialog+-Einträgen mit. Dabei werden zwei neue Objekttyp-Gruppen erstellt: **Active Directory** und **Windows Systems**.

| Active Directory | Windows Systems |
| --- | --- |
| Domäne | DHCP Server |
| Gesamtstruktur | DNS Server |
| Standort | Windows Client |
| Zertifizierungsstelle | Window Server |

Im Folgenden werden die einzelnen Objekttypen mit ihren Kategorien erläutert.

## Domäne

Mit dem Objekttyp "Domäne" dokumentierst du die gängigsten Informationen einer Active-Directory-Domäne. Folgende Kategorien sind zugeordnet:

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

[![Domäne](../assets/images/de/i-doit-add-ons/active-directory-documentation/1-add.png)](../assets/images/de/i-doit-add-ons/active-directory-documentation/1-add.png)

## Gesamtstruktur

Mit diesem Objekttyp dokumentierst du alle relevanten Informationen einer Active-Directory-Gesamtstruktur (Forest). Folgende Kategorien sind zugeordnet:

| Kategorie |
| --- |
| FSMO Rollen |
| Struktur Informationen |
| Vertrauenswürdige Strukturen |
| Zugewiesene Katalogserver |

[![Gesamtstruktur](../assets/images/de/i-doit-add-ons/active-directory-documentation/2-add.png)](../assets/images/de/i-doit-add-ons/active-directory-documentation/2-add.png)

## Zertifizierungsstelle

Mit diesem Objekttyp dokumentierst du sowohl die ausstellende Zertifizierungsstelle als auch die einzelnen ausgestellten Zertifikate. Folgende Kategorien sind zugeordnet:

| Kategorie |
| --- |
| Ausgestellte Zertifikate |
| Zertifizierungsstelle |

[![Zertifizierungsstelle](../assets/images/de/i-doit-add-ons/active-directory-documentation/3-add.png)](../assets/images/de/i-doit-add-ons/active-directory-documentation/3-add.png)

## Windows Server

Dieser Objekttyp basiert auf dem Standard-Objekttyp "Server", ergänzt aber Kategorien, die speziell auf die Beziehung zum Active Directory ausgelegt sind. Folgende Kategorien sind zugeordnet:

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

[![Windows Server](../assets/images/de/i-doit-add-ons/active-directory-documentation/4-add.png)](../assets/images/de/i-doit-add-ons/active-directory-documentation/4-add.png)

## Windows Client

Dieser Objekttyp basiert auf dem Standard-Objekttyp "Client" und ergänzt -- wie beim Windows Server -- AD-spezifische Kategorien. Folgende Kategorien sind zugeordnet:

| Kategorie |
| --- |
| RDP Einstellungen |
| Windows Informationen |

[![Windows Client](../assets/images/de/i-doit-add-ons/active-directory-documentation/5-add.png)](../assets/images/de/i-doit-add-ons/active-directory-documentation/5-add.png)

## DNS Server

Dieser Objekttyp basiert auf "Windows Server" und ermöglicht die separate Dokumentation von DNS-Informationen. Für eine noch detailliertere DNS-Dokumentation steht zusätzlich das [DNS-Dokumentation Add-on](./dns-documentation.md) zur Verfügung. Folgende Kategorien sind zugeordnet:

| Kategorie |
| --- |
| DNS Zonen Einträge |
| Zugewiesene DNS Server |

[![DNS Server](../assets/images/de/i-doit-add-ons/active-directory-documentation/6-add.png)](../assets/images/de/i-doit-add-ons/active-directory-documentation/6-add.png)

## DHCP Server

Dieser Objekttyp basiert auf "Windows Server" und ermöglicht die separate Dokumentation von DHCP-Informationen. Folgende Kategorien sind zugeordnet:

| Kategorie |
| --- |
| DHCP Bereiche |
| Zugewiesene DHCP Server |

[![DHCP Server](../assets/images/de/i-doit-add-ons/active-directory-documentation/7-add.png)](../assets/images/de/i-doit-add-ons/active-directory-documentation/7-add.png)

## Changelog

| Version | Date | Changelog |
| --- | --- | --- |
| 0.1 | 26.01.2021 | Initial Release |
