---
title: LDAPS i-doit für Windows
description: Anleitung zur Konfiguration einer LDAPS Verbindung mit i-doit für Windows
icon: material/microsoft-windows
status:
lang: de
---

!!! warning "Bitte erstelle vor jeder Änderung an einer Schnittstelle/Import ein vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist, kann dieses dann wiederhergestellt werden"

Diese Anleitung zeigt dir, wie du eine verschlüsselte LDAPS-Verbindung zwischen i-doit und deinem Active Directory unter Windows mit Apache2 HTTPD einrichtest.

## Schritt 1: Zertifikat des Domain Controllers exportieren und kopieren

Exportiere das Zertifikat wie in der Anleitung [LDAPS Debian Konfiguration](ldap-tls.md) beschrieben. Kopiere das exportierte Zertifikat anschließend in den Ordner `C:\openldap\sysconf\` (erstelle den Ordner, falls er nicht existiert).

## Schritt 2: ldap.conf erstellen

Erstelle im Ordner `C:\openldap\sysconf\` die Datei `ldap.conf`. Öffne sie mit einem Texteditor und füge folgenden Inhalt ein:

```conf
# Instruct client to NOT request a server's cert.
TLS_REQCERT never
# Define location of CA Cert
TLS_CACERTDIR C:\openldap\sysconf\
```

## Schritt 3: Apache2 HTTPD Konfiguration editieren

Öffne die `httpd.conf` unter `C:\i-doit\apache-2.4\conf\` mit einem Texteditor und fuege folgenden Eintrag vor dem `LoadModule...`-Block ein:

```conf
LoadModule authnz_ldap_module modules/mod_authnz_ldap.so
```

Starte Apache2 HTTPD anschließend über die Eingabeaufforderung neu: `C:\i-doit\apache-2.4\bin\httpd.exe -k restart`

## Schritt 4: LDAP-Server-Eintrag in i-doit erstellen

Melde dich in i-doit an und erstelle einen neuen Server-Eintrag unter **Administration > Import und Schnittstellen > LDAP > Server**. Fuelle alle notwendigen Felder aus und setze **TLS** auf **LDAPS**.

[![i-doit Konfiguration](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/i-doit-win-ldaps/i-doit-conf.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/i-doit-win-ldaps/i-doit-conf.png)
