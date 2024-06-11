# Installation de i-doit pour Windows

La procédure d'installation de i-doit sur le système d'exploitation Windows est décrite dans cet article.<br>
Le package d'installation de i-doit pour Windows est fourni dans le [Portail Client](../../../system-administration/customer-portal.md).

Le contenu du package est le suivant :

-   i-doit Windows Installer.exe
-   idoit-XX.zip
-   src.zip
-   windowsdesktop-runtime-6.0.14-win-x64.exe

Le package d'installation inclura toujours la dernière [version de i-doit](../../../version-history/index.md). De plus, le dossier `src.zip` permet une installation sans connexion internet.<br>
Puisque l'installateur Windows de i-doit nécessite ==windowsdesktop-runtime-6.0.14==, cela est également fourni au cas où aucune connexion internet n'est disponible.

## Installation de i-doit pour Windows

Après avoir exécuté `i-doit Windows Installer.exe`, vous verrez l'interface graphique suivante :

[![GUI](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/1-idw.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/1-idw.png)

Après avoir cliqué sur Installer, tous les éléments requis seront installés en arrière-plan.

Les éléments suivants seront installés :

-   ==Apache 2.4==
-   ==PHP 8.X==
-   ==MariaDB 10.X==
-   ==i-doit==

!!! info "Si le pare-feu Windows est activé, vous serez invité à faire confiance à l'application"

Si l'installation a réussi, une petite fenêtre avec le message "==i-doit a été installé avec succès.==" s'affichera.<br>
Après avoir cliqué sur ==OK==, un nouvel onglet de navigateur avec l'URL `localhost` s'ouvrira automatiquement et vous pourrez utiliser i-doit pleinement.

!!! info "Si une erreur s'est produite pendant l'installation, un fichier journal est automatiquement créé dans le dossier i-doit"

### Configuration

Pour configurer PHP, MariaDB ou Apache, vous pouvez trouver les fichiers de configuration respectifs dans les répertoires suivants :

-   ==PHP:==<br>
    `C:\ProgramData\i-doit\php\php.ini`

-   ==MariaDB:==<br>
    `C:\ProgramData\MariaDB\data\my.ini`

-   ==Apache:==<br>
    `C:\ProgramData\i-doit\apache-2.4\conf\httpd.conf`

### Informations d'identification {/ * exemples *}

Les informations d'identification suivantes sont définies par l'installateur.

| Quoi | Nom d'utilisateur | Mot de passe |
|-|-|-|
| MariaDB root | root | idoit |
| MariaDB i-doit | idoit | idoit |
| Centre d'administration i-doit | admin | admin |

Pour les informations d'identification de connexion à i-doit, consultez [ici](../../../basics/initial-login.md).

### Configuration de HTTPS (optionnel) {/ * exemples *}

Les instructions suivantes vous montrent comment configurer SSL pour Windows avec i-doit.<br>
Seules les étapes nécessaires pour configurer HTTPS sont décrites.<br>
Cette section peut être ignorée.

#### Prérequis {/ * exemples *}

Tout d'abord, vous avez besoin d'un certificat valide au format `.crt` et `.key`. Vous pouvez le créer avec OpenSSL.<br>
Vous pouvez télécharger et installer OpenSSL ici : [OpenSSL](https://slproweb.com/products/Win32OpenSSL.html)<br>
Une fois OpenSSL installé, vous pouvez ouvrir l'invite de commandes Win64 OpenSSL via la barre de recherche de Windows en recherchant "OpenSSL".
Maintenant, saisissez la commande suivante pour créer le certificat :

```winbatch
OpenSSL req -x509 -sha256 -nodes -days 365 -newkey rsa:4096 -keyout private.key -out certificate.crt
```

Le certificat et la clé privée ont maintenant été créés dans le dossier où la commande a été exécutée. Copiez-les, par exemple, dans le dossier `ProgramData\i-doit\apache-2.4\conf\extra\`.

### Étapes de configuration {/ * exemples *}

#### 1. **Création du fichier ssl.conf**

Accédez à votre dossier i-doit sous `ProgramData\i-doit\apache-2.4\conf\extra\` et créez le fichier `ssl.conf`. Le fichier devrait avoir le contenu suivant :

```conf
<VirtualHost *:443>
   DocumentRoot "${SRVROOT}/htdocs"
   ServerName localhost

   SSLEngine on
   SSLCertificateFile "path/to/certificate.crt"
   SSLCertificateKeyFile "path/to/privatekey.key"

   <Directory "${SRVROOT}/htdocs">
       Options Indexes FollowSymLinks MultiViews
       AllowOverride all
       Require all granted
       AddHandler application/x-httpd-php .php
   </Directory>

   ErrorLog "logs/ssl_error.log"
   LogLevel warn

   <IfModule log_config_module>
       LogFormat "%h %l %u %t \"%r\" %>s %b \"%{Referer}i\" \"%{User-Agent}i\"" combined
       LogFormat "%h %l %u %t \"%r\" %>s %b" common
       <IfModule logio_module>
           LogFormat "%h %l %u %t \"%r\" %>s %b \"%{Referer}i\" \"%{User-Agent}i\" %I %O" combinedio
       </IfModule>
       CustomLog "logs/ssl_access.log" common
   </IfModule>
</VirtualHost>
```

**Remarque :** Personnalisez les chemins et les paramètres de configuration selon votre environnement et assurez-vous que votre certificat et votre clé privée sont situés dans les chemins spécifiés.

#### 2. **Ajustements dans le fichier httpd.conf**{/*examples*/}

Modifiez le fichier `httpd.conf` situé sous `i-doit\apache-2.4\conf\` et ajoutez ce qui suit :

-   Ajoutez `lists 443` et commentez `lists 80`. En conséquence, i-doit ne sera plus accessible via http.
-   Ajoutez également les lignes suivantes : `LoadModule ssl_module modules/mod_ssl.so` et `Include conf/extra/ssl.conf`

Le fichier devrait alors ressembler à ceci si rien n'a été modifié auparavant :

```conf
Define SRVROOT "C:/ProgramData/i-doit/apache-2.4"

ServerRoot "${SRVROOT}"
#Listen 80
Listen 443

LoadModule actions_module modules/mod_actions.so
LoadModule alias_module modules/mod_alias.so
LoadModule allowmethods_module modules/mod_allowmethods.so
LoadModule asis_module modules/mod_asis.so
LoadModule auth_basic_module modules/mod_auth_basic.so
LoadModule authn_core_module modules/mod_authn_core.so
LoadModule authn_file_module modules/mod_authn_file.so
LoadModule authz_core_module modules/mod_authz_core.so
LoadModule authz_groupfile_module modules/mod_authz_groupfile.so
LoadModule authz_host_module modules/mod_authz_host.so
LoadModule authz_user_module modules/mod_authz_user.so
LoadModule autoindex_module modules/mod_autoindex.so
LoadModule cgi_module modules/mod_cgi.so
LoadModule dir_module modules/mod_dir.so
LoadModule env_module modules/mod_env.so
LoadModule headers_module modules/mod_headers.so
LoadModule include_module modules/mod_include.so
LoadModule isapi_module modules/mod_isapi.so
LoadModule ldap_module modules/mod_ldap.so
LoadModule log_config_module modules/mod_log_config.so
LoadModule mime_module modules/mod_mime.so
LoadModule mime_magic_module modules/mod_mime_magic.so
LoadModule negotiation_module modules/mod_negotiation.so
LoadModule rewrite_module modules/mod_rewrite.so
LoadModule setenvif_module modules/mod_setenvif.so
LoadModule php_module "C:/ProgramData/i-doit/php/php8apache2_4.dll"
LoadModule ssl_module modules/mod_ssl.so
Include conf/extra/ssl.conf

PHPIniDir "C:/i-doit/php"

<IfModule unixd_module>
    User daemon
    Group daemon
</IfModule>

ServerAdmin admin@example.com

ServerName localhost:80
<Directory />
    AllowOverride all
    Require all granted
</Directory>


DocumentRoot "${SRVROOT}/htdocs"
<Directory "${SRVROOT}/htdocs">
    Options Indexes FollowSymLinks MultiViews
    AllowOverride all
    Require all granted
    AddHandler application/x-httpd-php .php
</Directory>

<IfModule dir_module>
    DirectoryIndex index.html index.php
</IfModule>

<Files ".ht*">
    Require all granted
</Files>

ErrorLog "logs/error.log"

LogLevel warn

<IfModule log_config_module>
    LogFormat "%h %l %u %t \"%r\" %>s %b \"%{Referer}i\" \"%{User-Agent}i\"" combined
    LogFormat "%h %l %u %t \"%r\" %>s %b" common
    <IfModule logio_module>
      LogFormat "%h %l %u %t \"%r\" %>s %b \"%{Referer}i\" \"%{User-Agent}i\" %I %O" combinedio
    </IfModule>
    CustomLog "logs/access.log" common
<IfModule alias_module>
    ScriptAlias /cgi-bin/ "${SRVROOT}/cgi-bin/"
</IfModule>

<IfModule cgid_module>
</IfModule>

<Directory "${SRVROOT}/cgi-bin">
    AllowOverride all
    Options None
    Require all granted
</Directory>

<IfModule headers_module>
    RequestHeader unset Proxy early
</IfModule>

<IfModule mime_module>
    TypesConfig conf/mime.types
    AddType application/x-compress .Z
    AddType application/x-gzip .gz .tgz
</IfModule>

<IfModule proxy_html_module>
    Include conf/extra/proxy-html.conf
</IfModule>

<IfModule ssl_module>
    SSLRandomSeed startup builtin
    SSLRandomSeed connect builtin
</IfModule>
```

#### 3. **Redémarrer le serveur Web Apache**{/*examples*/}

- Appuyez sur ++windows+r++, tapez `cmd` et appuyez sur Entrée.<br>
- Ou tapez `cmd` dans la barre de recherche de Windows pour ouvrir l'invite de commandes

Entrez la commande suivante pour redémarrer le serveur web Apache :

```winbatch
C:\ProgramData\i-doit\apache-2.4\bin\httpd.exe -k restart
```

Le serveur web Apache a maintenant été redémarré. Vérifiez l'installation et si i-doit est accessible via HTTPS.

C'est tout ! Votre installation i-doit est maintenant configurée pour SSL sur Windows.

### Désinstallation{/*examples*/}

Pour désinstaller i-doit, le service Apache2 doit d'abord être arrêté.<br>
Pour cela, nous saisissons la commande suivante dans l'invite de commandes :

```winbatch
C:\ProgramData\i-doit\apache-2.4\bin\httpd.exe -k stop
```

Une fois le service Apache2 arrêté, Apache2 peut être désinstallé :

```winbatch
C:\ProgramData\i-doit\apache-2.4\bin\httpd.exe -k uninstall
```

Ensuite, MariaDB est désinstallé en supprimant MariaDB sous ==Ajouter ou supprimer des programmes==.

[![Désinstaller MariaDB](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/2-idw.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/2-idw.png)

Maintenant, le dossier i-doit doit être supprimé et le `PATH` PHP doit être supprimé des variables d'environnement :

[![Désinstaller PHP](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/3-idw.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/3-idw.png)

## Découverte pour le serveur Windows

Dans cette section, nous décrivons comment installer la découverte d'i-doit.<br >
Le package de découverte i-doit peut être trouvé sur notre [site Web](https://www.i-doit.com/en/i-doit-discovery/).

Le contenu du package est le suivant :

-   i-doit Discovery Installer.exe
-   idoit-XX.zip
-   src.zip
-   windowsdesktop-runtime-6.0.14-win-x64.exe

Le package d'installation inclura toujours la dernière [version d'i-doit](../../../version-history/index.md) ainsi que JDisc 5.0 et plusieurs add-ons JDisc. De plus, le dossier `src.zip` permet une installation sans connexion Internet.<br>
Comme l'installateur Windows i-doit nécessite ==windowsdesktop-runtime-6.0.14==, il est également fourni au cas où aucune connexion Internet n'est disponible.

### Installation {/examples}

Après avoir exécuté le `i-doit Discovery Installer.exe`, vous verrez l'interface graphique suivante :

[![GUI Discovery](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/4-idw.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/4-idw.png)

Après avoir cliqué sur Installer, tous les éléments requis seront installés en arrière-plan.

Les éléments suivants seront installés :

-   ==Apache 2.4==
-   ==PHP 8.X==
-   ==MariaDB 10.X==
-   ==i-doit==
-   ==JDisc 5.X==
-   ==JDisc JDisc Discovery Dependency Mapping 5.X(Add-on)==
-   ==JDisc Discovery Device History 5.X(Add-on)==
-   ==JDisc Discovery Measurement 5.X(Add-on)==
-   ==JDisc Discovery Measurement 5.X(Add-on)==
-   ==JDisc Discovery Security 5.X(Add-on)==
-   ==JDisc Discovery WEB UI 5.X(Add-on)==

!!! info "Si le pare-feu Windows est activé, vous serez invité à faire confiance à l'application"

Si l'installation a réussi, une petite fenêtre avec le message "==i-doit Discovery a été installé avec succès.==" s'affichera.<br>
Après avoir cliqué sur ==OK==, un nouvel onglet de navigateur avec l'URL `localhost` s'ouvrira automatiquement et vous pourrez utiliser i-doit pleinement.

```markdown
!!! info "Si une erreur s'est produite pendant l'installation, un fichier journal est automatiquement créé dans le dossier i-doit"

### Configuration {/examples}

Pour configurer PHP, MariaDB ou Apache, vous pouvez trouver les fichiers de configuration respectifs dans les répertoires suivants :

-   ==PHP:==<br>
    `C:\ProgramData\i-doit-discovery\php\php.ini`

-   ==MariaDB:==<br>
    `C:\ProgramData\MariaDB\data\my.ini`

-   ==Apache:==<br>
    `C:\ProgramData\i-doit-discovery\apache-2.4\conf\httpd.conf`

## Informations d'identification {/examples}

Les informations d'identification suivantes sont définies par l'installateur.

| Quoi | Nom d'utilisateur | Mot de passe |
|-|-|-|
| Racine MariaDB | root | idoit |
| i-doit MariaDB | idoit | idoit |
| Centre d'administration i-doit | - | admin |

Pour les informations d'identification de connexion à i-doit, voir [ici](../../../basics/initial-login.md).

### Désinstallation {/examples}

Pour désinstaller i-doit-discovery, le service Apache2 doit d'abord être arrêté.<br>
Pour cela, nous saisissons la commande suivante dans l'invite de commandes :

```winbatch
C:\ProgramData\i-doit-discovery\apache-2.4\bin\httpd.exe -k stop
```

Une fois le service Apache2 est arrêté, Apache2 peut être désinstallé :

```winbatch
C:\ProgramData\i-doit-discovery\apache-2.4\bin\httpd.exe -k uninstall
```

Ensuite, MariaDB est désinstallé en supprimant MariaDB sous ==Ajouter ou supprimer des programmes==.

[![Désinstaller MariaDB](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/2-idw.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/2-idw.png)

De plus, JDisc et ses add-ons respectifs doivent être supprimés sous ==Ajouter ou supprimer des programmes==.

!!! warning "Les add-ons JDisc doivent être supprimés avant de supprimer JDisc lui-même !"

[![Désinstaller JDisc](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/5-idw.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/5-idw.png)
```

Maintenant, le dossier i-doit-discovery doit être supprimé et le `PATH` PHP doit être supprimé des variables d'environnement :

[![Désinstaller PHP](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/3-idw.png)](../../../assets/images/en/installation/manual-installation/microsoft-windows-server/i-doit-windows/3-idw.png)
```
