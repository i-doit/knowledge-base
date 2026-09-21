---
title: LDAPS Red Hat Enterprise Linux Configuration
description: Guide for configuring an LDAPS connection with i-doit for Red Hat Enterprise Linux
icon: material/redhat
lang: en
---

!!! warning "Please create a complete backup before making any changes to an interface/import. If the result is not satisfactory, the backup can then be restored"

This guide shows you how to set up an encrypted LDAPS or STARTTLS connection between your i-doit server (Red Hat Enterprise Linux, Rocky Linux or another RHEL derivative) and Active Directory. To do this, you export the certificate from the LDAP server and add it to the trust store of your i-doit server. The Debian variant of this guide is [LDAPS Debian Configuration](ldap-tls.md).

## Step 1: Export Certificate on the LDAP Server

Log in to the LDAP server, which typically also contains the certificate authority. Open the corresponding MMC snap-in or select the **Certificate Authority** option in Server Manager.

[![Server Manager](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-1.png)](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-1.png)

Select the properties of the certificate authority.

[![Select properties](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-2.png)](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-2.png)

Display the certificate (1), select **Details** (2), and then copy it to a file (3).

[![Display and copy certificate](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-3.png)](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-3.png)

Keep the DER format selected.

[![Keep DER format selected](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-4.png)](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-4.png)

Choose a file name and directory.

[![Choose name and directory](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-5.png)](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-5.png)

Complete the export wizard.

[![Complete the export wizard](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-6.png)](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-6.png)

## Step 2: Set Up Certificate on the i-doit Server

Copy the exported certificate to your i-doit system (in the example to `/tmp/`). Then install openssl and the LDAP client tools, if not already present:

```shell
sudo dnf install openssl openldap-clients
```

Convert the certificate to PEM format and place it in the anchor directory of the system trust store:

```shell
sudo openssl x509 -inform der -outform pem -in /tmp/synetics.test.cer \
-out /etc/pki/ca-trust/source/anchors/synetics.test.crt
```

Update the trust store and restart the web server and PHP-FPM so that PHP picks up the new certificate:

```shell
sudo update-ca-trust
sudo systemctl restart httpd php-fpm
```

!!! warning "The certificate must be placed in `/etc/pki/ca-trust/source/anchors/`, not in `/etc/pki/tls/certs/`. Only the anchor directory is read by `update-ca-trust`. Afterwards the certificate is part of the bundle `/etc/pki/tls/certs/ca-bundle.crt`, which the LDAP client library uses by default (`/etc/openldap/ldap.conf` needs no `TLS_CACERT` entry)."

!!! info "SELinux"
    SELinux must allow the web server to open outgoing LDAP connections. If you followed the [RHEL installation guide](../../installation/manual-installation/red-hat-enterprise-linux/index.md), `httpd_can_network_connect` is already enabled and covers this. Otherwise enable at least the LDAP-specific boolean:

    ```shell
    sudo setsebool -P httpd_can_connect_ldap 1
    ```

## Step 3: Test the connection

Check from the i-doit server whether the certificate is trusted for the host name you use in the LDAP server configuration:

```shell
echo | openssl s_client -connect ldap.synetics.test:636 2>/dev/null | grep "Verify return code"
ldapsearch -x -H ldaps://ldap.synetics.test:636 -b "dc=synetics,dc=test" -s base
```

| Output | Meaning |
| ------ | ------- |
| `Verify return code: 0 (ok)`, `ldapsearch` returns a search result | Certificate is trusted, LDAPS works. |
| `Verify return code: 18 (self-signed certificate)` or `21 (unable to verify the first certificate)`, `ldapsearch: Can't contact LDAP server (-1)` | The certificate is not in the trust store yet. Repeat step 2 and check the `.crt` file in the anchor directory. |
| `Verify return code: 62 (hostname mismatch)` | The certificate does not contain the host name you connect to. Use the name from the certificate (CN or Subject Alternative Name) as **Host** in the i-doit LDAP server configuration. |

Then enter the server in i-doit under **Administration → Import and Interfaces → LDAP → Server** with **TLS** set to `LDAPS` (port 636) or `STARTTLS` (port 389), see [LDAP Directory](index.md#server).
