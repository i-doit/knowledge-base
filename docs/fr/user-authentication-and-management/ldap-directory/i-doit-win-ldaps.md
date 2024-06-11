---
title: LDAPS i-doit pour Windows
description: Guide pour configurer une connexion LDAPS avec i-doit pour Windows
icon: material/microsoft-windows
status: new
lang: fr
---

## Résumé {/examples}

Cet article fournit un guide pour configurer une connexion LDAPS avec i-doit pour Windows en utilisant Apache2 HTTPD

### 1. Exporter et Copier le Certificat du Contrôleur de Domaine

Nous décrivons comment exporter le certificat [ici](ldap-tls.md).
Après avoir créé le certificat, copiez-le dans le dossier `C:\openldap\sysconf\` (créez-le s'il n'est pas présent).

### 2. Créer ldap.conf

Créez le fichier `ldap.conf` dans le dossier `C:\openldap\sysconf\`.
Ouvrez `ldap.conf` avec un éditeur de texte et insérez ce qui suit :

```conf
# Instruct client to NOT request a server's cert.
TLS_REQCERT never
# Define the location of CA Cert
TLS_CACERTDIR C:\openldap\sysconf\
```

### 3. Modifier la Configuration d'Apache2 HTTPD

Ouvrez `httpd.conf` sous `C:\i-doit\apache-2.4\conf\` avec un éditeur de texte, et insérez ce qui suit avant le bloc `LoadModule...` :

```conf
LoadModule authnz_ldap_module modules/mod_authnz_ldap.so
```

Puis redémarrez Apache2 HTTPD via l'invite de commande avec : `C:\i-doit\apache-2.4\bin\httpd.exe -k restart`

### 4. Créer une entrée de serveur LDAP dans i-doit

Maintenant, connectez-vous à i-doit et créez une nouvelle entrée de serveur sous `Administration -> Import et Interfaces -> LDAP -> Serveur`.
Remplissez tous les champs nécessaires et définissez `TLS` sur `LDAPS`.

[![Configuration i-doit](../../assets/images/en/user-authentication-and-management/ldap-directory/i-doit-win-ldaps/i-doit-conf.png)](../../assets/images/en/user-authentication-and-management/ldap-directory/i-doit-win-ldaps/i-doit-conf.png){/*examples*/}
