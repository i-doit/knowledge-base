---
title: LDAPS i-doit for Windows
description: Guide for configuring an LDAPS connection with i-doit for Windows
icon: material/microsoft-windows
status:
lang: en
---

!!! warning "Please create a complete backup before making any changes to an interface/import. If the result is not satisfactory, the backup can then be restored"

This guide shows you how to set up an encrypted LDAPS connection between i-doit and your Active Directory on Windows with Apache2 HTTPD.

## Step 1: Export and Copy Domain Controller Certificate

Export the certificate as described in the guide [LDAPS Debian Configuration](ldap-tls.md). Then copy the exported certificate to the folder `C:\openldap\sysconf\` (create the folder if it does not exist).

## Step 2: Create ldap.conf

Create the file `ldap.conf` in the folder `C:\openldap\sysconf\`. Open it with a text editor and add the following content:

```conf
# Instruct client to NOT request a server's cert.
TLS_REQCERT never
# Define location of CA Cert
TLS_CACERTDIR C:\openldap\sysconf\
```

## Step 3: Edit Apache2 HTTPD Configuration

Open `httpd.conf` under `C:\i-doit\apache-2.4\conf\` with a text editor and add the following entry before the `LoadModule...` block:

```conf
LoadModule authnz_ldap_module modules/mod_authnz_ldap.so
```

Then restart Apache2 HTTPD via the command prompt: `C:\i-doit\apache-2.4\bin\httpd.exe -k restart`

## Step 4: Create LDAP Server Entry in i-doit

Log in to i-doit and create a new server entry under **Administration > Import and Interfaces > LDAP > Server**. Fill in all required fields and set **TLS** to **LDAPS**.

[![i-doit Configuration](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/i-doit-win-ldaps/i-doit-conf.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/i-doit-win-ldaps/i-doit-conf.png)
