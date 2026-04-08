---
title: LDAPS Debian Configuration
description: Guide for configuring an LDAPS connection with i-doit for Debian
icon: material/debian
lang: en
---

!!! warning "Please create a complete backup before making any changes to an interface/import. If the result is not satisfactory, the backup can then be restored"

This guide shows you how to set up an encrypted LDAPS or STARTTLS connection between your i-doit server (Debian) and Active Directory. To do this, you export the certificate from the LDAP server and add it to the certificate store of your i-doit server.

## Step 1: Export Certificate on the LDAP Server

Log in to the LDAP server, which typically also contains the certificate authority. Open the corresponding MMC snap-in or select the **Certificate Authority** option in Server Manager.

[![Server Manager](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-1.png)](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-1.png)

Select the properties of the certificate authority.

[![Select properties](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-2.png)](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-2.png)

Display the certificate (1), select **Details** (2), and then copy it to a file (3).

[![Display and copy certificate](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-3.png)](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-3.png)

Keep the DER format selected.

[![Keep DER format selected](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-4.png)](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-4.png)

Choose a file name and directory.

[![Choose name and directory](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-5.png)](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-5.png)

Complete the export wizard.

[![Complete the export wizard](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-6.png)](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-6.png)

## Step 2: Set Up Certificate on the i-doit Server

Copy the exported certificate to your i-doit system (in the example to `/tmp/`). Then install openssl if not already present:

```shell
apt install openssl
```

Convert the certificate to PEM format:

```shell
openssl x509 -inform der -outform pem -in /tmp/synetics.test.cer \
-out /usr/local/share/ca-certificates/synetics.test.crt
```

Finally, update the certificate store and restart Apache:

```shell
update-ca-certificates
service apache2 restart
```

!!! warning "The output file must have the .crt file extension, otherwise it will not be considered by the update-ca-certificates command. If correctly adopted, the certificate must be visible under /etc/ssl/certs/."
