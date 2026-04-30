---
title: Directories
description: "Hier können die Abbildungsattribute angegeben werden, die für die LDAP Schnittstelle verwendet werden."
icon:
status:
lang: de
---
# Directories

Hier können die Abbildungsattribute angegeben werden, die für die [LDAP Schnittstelle](../../../../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md) verwendet werden.

Du erreichst diese Einstellung unter **Verwaltung → Import und Schnittstellen → LDAP → Verzeichnisse / Directories**. Auf dieser Seite konfigurierst du die Verbindung zu einem oder mehreren LDAP-Verzeichnissen (z. B. Active Directory oder OpenLDAP). Dabei gibst du Serverdaten wie Hostname, Port, Base-DN und Bind-Benutzer an. Zusätzlich legst du das Attribut-Mapping fest, also welche LDAP-Attribute (z. B. `sAMAccountName`, `mail`, `department`) auf welche i-doit-Felder abgebildet werden sollen. So stellst du sicher, dass beim LDAP-Sync die Benutzerdaten korrekt in i-doit übernommen werden. Nutze diese Konfiguration, wenn du Benutzer und Personen automatisch aus deinem Verzeichnisdienst importieren möchtest.

[![ldap-verzeichnis](../../../../assets/images/de/administration/verwaltung/import-und-schnittstellen/ldap/3-ldap.png)](../../../../assets/images/de/administration/verwaltung/import-und-schnittstellen/ldap/3-ldap.png)

## Siehe auch

- [LDAP-Verzeichnis](../../../../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md)
- [LDAP Attributerweiterung](attributerweiterung.md)
- [Benutzerauthentifizierung und -verwaltung](../../../../benutzerauthentifizierung-und-verwaltung/index.md)
