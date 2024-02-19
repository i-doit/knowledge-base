# i-doit Eval Discovery Installer

Wie i-doit Discovery unter dem Betriebssystem Windows installiert wird, beschreiben wir in diesem Artikel.<br>
Das i-doit Discovery Installationspaket für Windows wird im [Kundenportal](../../../administration/kundenportal.md) zur Verfügung gestellt.

Die Inhalte des Pakets sehen wie folgt aus:

-   i-doit Eval Discovery Windows Installer.exe
-   idoit-XX.zip
-   src.zip
-   windowsdesktop-runtime-6.0.14-win-x64.exe

Im Installationspaket wird immer die aktuelle [i-doit Version](../../../versionshistorie/index.md) mitgeliefert, sowie die aktuellste JDisc Discovery Version mit den entsprechenden Add-ons von JDisc.
Ebenfalls wird durch den `src.zip` Ordner eine Installation ohne Internetverbindung ermöglicht.<br>
Da der i-doit Discovery Windows installer die `windowsdesktop-runtime-6.0.14` benötigt, wird diese ebenfalls zur Verfügung gestellt falls während der installation keine Internetverbindung vorhanden ist.

## Installation

Nach ausführen des `i-doit discovery Installer.exe` wird folgende GUI angezeigt:

[![GUI discovery](../../../assets/images/de/installation/microsoft-windows/i-doit-discovery-windows/1-ijdw.png)](../../../assets/images/de/installation/microsoft-windows/i-doit-discovery-windows/1-ijdw.png)

Nach einem Klick auf **Installieren** werden im Hintergrund alle benötigten Elemente installiert.

Es werden installiert:

-   **Apache 2.4**
-   **PHP 8.0**
-   **MariaDB 10.5**
-   **i-doit**
-   **JDisc**
-   **JDisc Add-ons**

!!! info "Ist die Windows Firewall aktiviert wird abgefragt ob die Applikation freigegeben werden darf"

Bei erfolgreicher Installation wird in einem kleinem Fenster **"i-doit has been installed successfully."** angezeigt.<br>
Nach einem Klick auf **OK** wird automatisch ein neues Browsertab mit der `localhost` URL geöffnet und kann i-doit im vollen Umfang nutzen.

!!! info "Sollte bei der Installation ein Fehler unterlaufen sein, werden automatisch Log-Dateien im i-doit-Discovery Ordner erstellt"

## Konfiguration

Der Speicherort der PHP, MariaDB oder Apache Konfiguration:

-   **PHP:**
    `C:\i-doit-Discovery\php\php.ini`

-   **MariaDB:**
    `C:\ProgramData\MariaDB\data\my.ini`

-   **Apache:**
    `C:\i-doit-Discovery\apache-2.4\conf\httpd.conf`

## HTTPS einrichten (optional)

Die folgende Anleitung zeigt, wie Sie SSL für Windows mit i-doit einrichten.<br>
Es werden nur die notwendigen Schritte beschrieben, die benötigt werden um HTTPS zu konfigurieren.<br>
Dieser Abschnitt kann übersprungen werden.

### Voraussetzungen

Vorab benötigen Sie ein gültiges Zertifikat im `.crt` und `.key` Format. Dieses können Sie mit OpenSSL erstellen.<br>
OpenSSL können Sie z.B. hier herunterladen und installieren: [OpenSSL](https://slproweb.com/products/Win32OpenSSL.html)<br>
Sobald OpenSSL installiert ist, können Sie Win64 OpenSSL Command Prompt über die Windows-Suchleiste öffnen, indem Sie nach "OpenSSL" suchen.
Hier geben Sie nun folgenden Befehl ein, um das Zertifikat zu erstellen:

```winbatch
OpenSSL req -x509 -sha256 -nodes -days 365 -newkey rsa:4096 -keyout private.key -out certificate.crt
```

Das Zertifikat und der Private Key wurden nun in dem Ordner erstellt, in dem der Befehl ausgeführt wurde. Kopieren Sie diese z.B. in den Ordner `i-doit-Discovery\apache-2.4\conf\extra\`.

### Konfigurationsschritte

1. **Erstellen der ssl.conf-Datei**<br>

Navigieren Sie zu Ihrem i-doit-Ordner unter `i-doit-Discovery\apache-2.4\conf\extra\` und erstellen Sie die Datei `ssl.conf`. Die Datei sollte folgenden Inhalt haben:

```apacheconf
<VirtualHost *:443>
   DocumentRoot "${SRVROOT}/htdocs"
   ServerName localhost

   SSLEngine on
   SSLCertificateFile "Pfad/Zum/Zertifikat.crt"
   SSLCertificateKeyFile "Pfad/Zum/Privatekey.key"

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

**Hinweis:** Passen Sie die Pfade und Konfigurationseinstellungen entsprechend Ihrer eigenen Umgebung an und stellen Sie sicher, dass Ihr Zertifikat und privater Schlüssel in den angegebenen Pfaden vorhanden sind.

2. **Anpassungen in der httpd.conf**<br>

Bearbeiten Sie die `httpd.conf`-Datei, die sich unter `i-doit-Discovery\apache-2.4\conf\` befindet:

-   Fügen Sie `Listen 443` hinzu und kommentieren Sie `Listen 80` aus. Dadurch wird i-doit nicht mehr über http erreichbar sein.
-   Fügen Sie außerdem folgende Zeilen ein: `LoadModule ssl_module modules/mod_ssl.so` und `Include conf/extra/ssl.conf`

Die Datei sollte dann so aussehen, wenn vorher nichts geändert wurde:

```apacheconf
Define SRVROOT "C:/i-doit-Discovery/apache-2.4"

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
LoadModule php_module "C:/i-doit-Discovery/php/php8apache2_4.dll"
LoadModule ssl_module modules/mod_ssl.so
Include conf/extra/ssl.conf

PHPIniDir "C:/i-doit-Discovery/php"

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

3. **Apache-Webserver neustarten**:

\- Drücken Sie ++windows+r++ , geben Sie `cmd` ein und drücken Sie Enter.<br>
\- Oder geben Sie `cmd` in der Windows-Suchleiste ein, um die Eingabeaufforderung zu öffnen

Geben Sie den folgenden Befehl ein, um den Apache-Webserver neu zu starten:

```winbatch
C:\i-doit-Discovery\apache-2.4\bin\httpd.exe -k restart
```

Der Apache-Webserver wurde nun neu gestartet. Prüfen Sie die installation und ob i-doit über HTTPS erreichbar ist.

Das wars! Ihre i-doit-Installation ist jetzt für SSL auf Windows konfiguriert.

### Deinstallation

Um i-doit-Discovery wieder zu deinstallieren muss zuerst der Apache2 service gestoppt werden.<br>
Dafür geben wir in der Eingabeaufforderung folgenden Befehl ein:

```winbatch
C:\i-doit-Discovery\apache-2.4\bin\httpd.exe -k stop
```

Ist der Apache2 Service gestoppt, kann Apache2 deinstalliert werden:

```winbatch
C:\i-doit-Discovery\apache-2.4\bin\httpd.exe -k uninstall
```

Anschließend wird MariaDB deinstalliert indem wir unter **Programme hinzufügen oder entfernen** MariaDB entfernen.

[![Deinstallieren MariaDB](../../../assets/images/de/installation/microsoft-windows/i-doit-windows/3-idw.png)](../../../assets/images/de/installation/microsoft-windows/i-doit-windows/3-idw.png)

Alternativ kann MariaDB auch über die Eingabeaufforderung deinstalliert werden:

```winbatch
msiexec.exe /i C:\i-doit-Discovery\mariadb-10.5\mariadb-10.5.19-winx64.msi /qn REMOVE=ALL
```

MariaDB deinstallieren ohne Daten zu löschen:

```winbatch
msiexec.exe /i C:\i-doit-Discovery\mariadb-10.5\mariadb-10.5.19-winx64.msi /qn REMOVE=ALL CLEANUPDATA=""
```

JDisc und seine Add-ons müssen ebenfalls deinstalliert werden. Dies kann ebenfalls über **Programme hinzufügen oder entfernen** durchgeführt werden, die Add-ons müssen zuerst deinstalliert werden um Fehler zu vermeiden.

[![Deinstallieren JDisc](../../../assets/images/de/installation/microsoft-windows/i-doit-discovery-windows/2-ijdw.png)](../../../assets/images/de/installation/microsoft-windows/i-doit-discovery-windows/2-ijdw.png)

Jetzt muss noch der i-doit-Discovery Ordner gelöscht werden und der PHP `PATH` muss aus den Umgebungsvariablen entfernt werden:

[![Deinstallieren PHP](../../../assets/images/de/installation/microsoft-windows/i-doit-discovery-windows/3-ijdw.png)](../../../assets/images/de/installation/microsoft-windows/i-doit-discovery-windows/3-ijdw.png)
