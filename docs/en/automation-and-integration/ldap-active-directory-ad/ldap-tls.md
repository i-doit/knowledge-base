# Access to Microsoft LDAP server with TLS encryption

To establish a connection to the Active Directory via LDAPS or STARTTLS, the certificate from the LDAP server is required.
We export this and add it to the certificate store of the i-doit server so that an encrypted communication can be established.

First we log in to the LDAP server, which usually also contains the certification authority.
Then open the corresponding MMC snap-in or select via Server Manager -> Certificate Authority.

[![Server Manager](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-1.png)](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-1.png)

Select the properties of the certification body

[![Select properties](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-2.png)](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-2.png)

Display the certificate (1), select details (2) and then copy it to a file (3).

[![Display and copy certificate](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-3.png)](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-3.png)

DER Leave format selected

[![DER Leave format selected](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-4.png)](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-4.png)

Select file name and directory

[![Select name and directory](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-5.png)](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-5.png)

Export file

[![Finish it export assistant](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-6.png)](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-6.png)

Copy the certificate to the i-doit system (in the example under /tmp/). Then install openssl

```shell
apt install openssl
```

and convert the certificate into the PEM format:

```shell
openssl x509 -inform der -outform pem -in /tmp/synetics.test.cer \
-out /usr/local/share/ca-certificates/synetics.test.crt
```

Now update the certificate store and restart Apache:

```shell
update-ca-certificates
service apache2 restart
```

!!! warning "The output file must have the file extension .crt, otherwise it will not be taken into account by the update-ca-certificates command. If it is transferred correctly, the certificate must be visible under /etc/ssl/certs/."


