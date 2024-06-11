---
title: Configuration LDAPS Debian
description: Guide pour configurer une connexion LDAPS avec i-doit pour debian
icon: material/debian
lang: fr
---

Pour établir une connexion à l'Active Directory via LDAPS ou STARTTLS, le certificat du serveur LDAP est requis.
Nous l'exportons et l'ajoutons au magasin de certificats du serveur i-doit afin qu'une communication chiffrée puisse être établie.

Tout d'abord, nous nous connectons au serveur LDAP, qui contient généralement également l'autorité de certification.
Ensuite, ouvrez le snap-in MMC correspondant ou sélectionnez via Gestionnaire de serveur -> Autorité de certification.

[![Gestionnaire de serveur](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-1.png)](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-1.png)

Sélectionnez les propriétés de l'autorité de certification

[![Sélectionner les propriétés](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-2.png)](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-2.png)

Affichez le certificat (1), sélectionnez les détails (2) et copiez-le dans un fichier (3).


[![Afficher et copier le certificat](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-3.png)](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-3.png)

Format DER Leave sélectionné

[![Format DER Leave sélectionné](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-4.png)](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-4.png)

Sélectionner le nom du fichier et le répertoire

[![Sélectionner le nom et le répertoire](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-5.png)](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-5.png)

Exporter le fichier

[![Terminer l'assistant d'exportation](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-6.png)](../../assets/images/en/automation-and-integration/ldap/ldap-tls/ldap-tls-6.png)

Copiez le certificat dans le système i-doit (dans l'exemple sous /tmp/). Ensuite, installez openssl

```shell
apt install openssl
```

et convertissez le certificat au format PEM :

```shell
openssl x509 -inform der -outform pem -in /tmp/synetics.test.cer \
-out /usr/local/share/ca-certificates/synetics.test.crt
```

Maintenant mettez à jour le magasin de certificats et redémarrez Apache :

```shell
update-ca-certificates
service apache2 restart
```

!!! warning "Le fichier de sortie doit avoir l'extension de fichier .crt, sinon il ne sera pas pris en compte par la commande update-ca-certificates. S'il est transféré correctement, le certificat doit être visible sous /etc/ssl/certs/."
