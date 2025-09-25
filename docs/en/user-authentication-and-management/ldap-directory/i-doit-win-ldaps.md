---
title: LDAPS i-doit for Windows
description: Guide for configuring an LDAPS connection with i-doit for Windows
icon: material/microsoft-windows
status:
lang: en
---

## Summary

The article provides a guide for configuring an LDAPS connection with i-doit for Windows using Apache2 HTTPD

### 1. Export and Copy the Domain Controller Certificate

We describe how to export the certificate [here](ldap-tls.md).
After creating the certificate, copy it to the `C:\openldap\sysconf\` folder (create if not present).

### 2. Create ldap.conf

Create the file `ldap.conf` in the `C:\openldap\sysconf\` folder.
Open `ldap.conf` with a text editor and insert the following:

```conf
# Instruct client to NOT request a server's cert.
TLS_REQCERT never
# Define the location of CA Cert
TLS_CACERTDIR C:\openldap\sysconf\
```

### 3. Edit Apache2 HTTPD Configuration

Open `httpd.conf` under `C:\i-doit\apache-2.4\conf\` with a text editor, and insert the following before the `LoadModule...` block:

```conf
LoadModule authnz_ldap_module modules/mod_authnz_ldap.so
```

Then restart Apache2 HTTPD via the command prompt with: `C:\i-doit\apache-2.4\bin\httpd.exe -k restart`

### 4. Create an LDAP Server Entry in i-doit

Now, log in to i-doit and create a new server entry under `Administration -> Import and Interfaces -> LDAP -> Server`.
Fill in all the necessary fields and set `TLS` to `LDAPS`.

[![i-doit Configuration](../../assets/images/en/user-authentication-and-management/ldap-directory/i-doit-win-ldaps/i-doit-conf.png)](../../assets/images/en/user-authentication-and-management/ldap-directory/i-doit-win-ldaps/i-doit-conf.png)
