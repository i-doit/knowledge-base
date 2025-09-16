---
title: LDAPS i-doit für Windows
description: Anleitung zur Konfiguration einer LDAPS Verbindung mit i-doit für Windows
icon: material/microsoft-windows
status:
lang: de
---

!!! warning "Bitte erstellen Sie vor jeder Änderung an einer Schnittstelle/Import einen vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist kann dieses dann wiederhergestellt werden"

## Zusammenfassung

Der Artikel bietet eine Anleitung zur Konfiguration einer LDAPS-Verbindung mit i-doit für Windows, die Apache2 HTTPD verwendet.

### 1. Zertifikat des Domain Controller exportieren und kopieren

Wie das Zertifikat exportiert wird beschreiben wir [hier](ldap-tls.md).
Nachdem das Zertifikat erstellt wurde kopieren wir dieses in den Ordner `C:\openldap\sysconf\` (Erstellen wenn nicht vorhanden).

### 2. ldap.conf erstellen

Im Ordner `C:\openldap\sysconf\ldap.cer` wird die Datei `ldap.conf` erstellt.
Die `ldap.conf` mit einen texteditor öffnen und folgendes einfügen:

```conf
# Instruct client to NOT request a server's cert.
TLS_REQCERT never
# Define location of CA Cert
TLS_CACERTDIR C:\openldap\sysconf\
```

### 3. Apache2 HTTPD Konfiguration editieren

Die `httpd.conf` unter `C:\i-doit\apache-2.4\conf\` mit einem Texteditor öffnen und folgendes, vor dem `LoadModule...` Block einfügen:

```conf
LoadModule authnz_ldap_module modules/mod_authnz_ldap.so
```

Anschließend wird Apache2 HTTPD, über die Eingabeaufforderung, neu gestartet via: `C:\i-doit\apache-2.4\bin\httpd.exe -k restart`

### 4. In i-doit einen LDAP Server eintrag Erstellen

Nun loggen wir uns in i-doit ein und erstellen einen neuen Server Eintrag unter `Administration -> Import und Schnittstellen -> LDAP -> Server`.
Alle notwendigen Felder ausfüllen und `TLS` auf `LDAPS` stellen.

[![i-doit Konfiguration](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/i-doit-win-ldaps/i-doit-conf.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/i-doit-win-ldaps/i-doit-conf.png)
