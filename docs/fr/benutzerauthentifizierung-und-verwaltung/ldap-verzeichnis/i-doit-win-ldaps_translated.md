<!-- TRANSLATED by md-translate -->
---

title: LDAPS i-doit für Windows
description: Anleitung zur Konfiguration einer LDAPS Verbindung mit i-doit für Windows
icon: material/microsoft-windows
status: new
lang: de

title : LDAPS i-doit pour Windows
description : Instructions pour configurer une connexion LDAPS avec i-doit pour Windows
icon : material/microsoft-windows
status : new
lang : fr

---

## Zusammenfassung

## Résumé

Der Artikel bietet eine Anleitung zur Konfiguration einer LDAPS-Verbindung mit i-doit für Windows, die Apache2 HTTPD verwendet.

Cet article propose des instructions pour configurer une connexion LDAPS avec i-doit pour Windows, qui utilise Apache2 HTTPD.

### 1. Zertifikat des Domain Controller exportieren und kopieren

### 1. exporter et copier le certificat du contrôleur de domaine

Wie das Zertifikat exportiert wird beschreiben wir [hier](ldap-tls.md).
Nachdem das Zertifikat erstellt wurde kopieren wir dieses in den Ordner `C:\openldap\sysconf\` (Erstellen wenn nicht vorhanden).

Nous décrivons [ici] comment exporter le certificat (ldap-tls.md).
Une fois le certificat créé, nous le copions dans le dossier `C:\openldap\sysconf\` (créer s'il n'existe pas).

### 2. ldap.conf erstellen

### 2. Créer ldap.conf

Im Ordner `C:\openldap\sysconf\ldap.cer` wird die Datei `ldap.conf` erstellt.
Die `ldap.conf` mit einen texteditor öffnen und folgendes einfügen:

Dans le dossier `C:\openldap\sysconf\ldap.cer`, créer le fichier `ldap.conf`.
Ouvrir le fichier `ldap.conf` avec un éditeur de texte et insérer ce qui suit :

```conf
# Instruct client to NOT request a server's cert.
TLS_REQCERT never
# Define location of CA Cert
TLS_CACERTDIR C:\openldap\sysconf\
```

### 3. Apache2 HTTPD Konfiguration editieren

### 3. éditer la configuration d'Apache2 HTTPD

Die `httpd.conf` unter `C:\i-doit\apache-2.4\conf\` mit einem Texteditor öffnen und folgendes, vor dem `LoadModule...` Block einfügen:

Ouvrir le fichier `httpd.conf` sous `C:\i-doit\apache-2.4\conf\` avec un éditeur de texte et insérer ce qui suit, avant le bloc `LoadModule...` :

```conf
LoadModule authnz_ldap_module modules/mod_authnz_ldap.so
```

Anschließend wird Apache2 HTTPD, über die Eingabeaufforderung, neu gestartet via: `C:\i-doit\apache-2.4\bin\httpd.exe -k restart`

Ensuite, Apache2 HTTPD est redémarré via l'invite de commande : `C:\i-doit\apache-2.4\bin\httpd.exe -k restart`.

### 4. In i-doit einen LDAP Server eintrag Erstellen

### 4. créer une entrée de serveur LDAP dans i-doit

Nun loggen wir uns in i-doit ein und erstellen einen neuen Server Eintrag unter `Administration -> Import und Schnittstellen -> LDAP -> Server`.
Alle notwendigen Felder ausfüllen und `TLS` auf `LDAPS` stellen.

Nous nous connectons maintenant à i-doit et créons une nouvelle entrée de serveur sous `Administration -> Importation et interfaces -> LDAP -> Serveur`.
Remplissez tous les champs nécessaires et réglez `TLS` sur `LDAPS`.

[![i-doit Konfiguration](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/i-doit-win-ldaps/i-doit-conf.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/i-doit-win-ldaps/i-doit-conf.png)

[ ![Configuration i-doit](../../assets/images/fr/authentification et gestion des utilisateurs/répertoire-ldap/i-doit-win-ldaps/i-doit-conf.png)](../../assets/images/fr/authentification et gestion des utilisateurs/répertoire-ldap/i-doit-win-ldaps/i-doit-conf.png)