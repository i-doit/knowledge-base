**Inhaltsverzeichnis**

*   1[Voraussetzungen und Annahmen](#SingleSignon(SSO)viaGSSAPI-VoraussetzungenundAnnahmen)
*   2[Active Directory (AD) konfigurieren](#SingleSignon(SSO)viaGSSAPI-ActiveDirectory(AD)konfigurieren)
*   3[Konfiguration des i-doit Servers](#SingleSignon(SSO)viaGSSAPI-Konfigurationdesi-doitServers)
*   4[Erstanmeldung und erstellen der Keytab](#SingleSignon(SSO)viaGSSAPI-ErstanmeldungunderstellenderKeytab)
*   5[Apache Webserver konfigurieren](#SingleSignon(SSO)viaGSSAPI-ApacheWebserverkonfigurieren)
*   6[i-doit konfigurieren](#SingleSignon(SSO)viaGSSAPI-i-doitkonfigurieren)
*   7[Browser Client-seitig konfigurieren](#SingleSignon(SSO)viaGSSAPI-BrowserClient-seitigkonfigurieren)
    *   7.1[Microsoft Internet Explorer (IE)](#SingleSignon(SSO)viaGSSAPI-MicrosoftInternetExplorer(IE))
    *   7.2[Mozilla Firefox und Google Chrome](#SingleSignon(SSO)viaGSSAPI-MozillaFirefoxundGoogleChrome)
*   8[Troubleshooting](#SingleSignon(SSO)viaGSSAPI-Troubleshooting)

Für die automatische Anmeldung an i-doit innerhalb eines Intranets bietet sich die Authentifizierung über Single Sign On (SSO) an.

Voraussetzungen und Annahmen
----------------------------

Folgende Bedingungen sind die Grundlage dieses Artikels:

*   i-doit ist unter GNU/Linux [installiert](/display/de/Setup)
*   Es wird ein Active Directory (AD) unter Windows Server 2008/2012 für die Authentifizierung eingesetzt.

In diesem Artikel wird beschrieben, wie Single Sign On (SSO) unter Apache Webserver mit `mod-auth-gssapi` eingerichtet wird.

  

Groß- und Kleinschreibung

Bei der Konfiguration ist exakt auf Groß- und Kleinschreibung zu achten.

Active Directory (AD) konfigurieren
-----------------------------------

Für den SSO-Zugang wird im AD ein Benutzer generiert. Beispiel:

*   Servername von i-doit: **`idoit.mydomain.local`**
*   AD Domain: **`addomain.local`**
*   SSO-Benutzer: **`ssouser`**
*   Passwort: **`passwort`**

Konfiguration des i-doit Servers
--------------------------------

Installation aller benötigten Pakete

[?](#)

`# Debian GNU/Linux oder Ubuntu Linux:`

`sudo` `apt` `install` `msktutil libapache2-mod-auth-gssapi kinit krb5-user`

`Info:`

`Domain``"REALM"` `angeben: addomain.``local`

`Hostname``"Passwortserver"` `mydomaincontroller`

`# Apache neustarten:`

`sudo` `systemctl restart apache2.service`

Erstanmeldung und erstellen der Keytab
--------------------------------------

[?](#)

`# Authentifizierung des Servers:`

`kinit <AD Administrator Account>`

`# Erstellen der Keytab:`

`msktutil --server <AD Domain-Controller> --user-creds-only --update --use-service-account --service HTTP``/idoit``.mydomain.``local` `--keytab` `/etc/apache2/apache_krb5``.keytab --password <SERVICE ACCOUNT PASSWORD> --account-name ssouser`

`# Berechtigungen für Apache vergeben`

`chmod` `644` `/etc/apache2/apache_krb5``.keytab`

Apache Webserver konfigurieren
------------------------------

In dieser Datei wird die neue VHost-Konfiguration anpassen:

[?](#)

`sudo` `nano` `/etc/apache2/sites-available/i-doit``.conf`

`<Directory` `/var/www/html/``>`

`AuthType GSSAPI`

`AuthName` `"i-doit Kerberos auth"`

`GssapiBasicAuth On`

`GssapiCredStore keytab:``/etc/apache2/apache_krb5``.keytab`

`GssapiLocalName On`

`Require valid-user`

`<``/Directory``>`

Bitte nur den Teil in `<Directory> </Directory> anpassen`

Im Anschluss einmal den Apache neustarten damit die Änderungen wirksam werden

[?](#)

`sudo` `systemctl restart apache2.service`

Zum Testen der Konfiguration ist folgender Befehl auszuführen:

[?](#)

`kinit ssouser@ADDOMAIN.LOCAL`

Es wird nach dem Passwort des SSO-Benutzers gefragt. Mit dem Befehl

[?](#)

`klist`

kann kontrolliert werden, ob ein gültiges Ticket existiert.

i-doit konfigurieren
--------------------

Ab Version 1.5 kann SSO über die Web GUI von i-doit konfiguriert werden. Die entsprechende Einstellung befindet sich unter **`Verwaltung → Systemeinstellungen`**. Dort ist **`SSO`** zu aktivieren.

Browser Client-seitig konfigurieren
-----------------------------------

Zuletzt muss jeder Browser konfiguriert werden, damit SSO automatisch genutzt wird.

### Microsoft Internet Explorer (IE)

In den IE-Einstellungen muss man den i-doit-Server zu den lokalen Intranet Sites hinzufügen. Danach muss man unter **`Stufe anpassen`** den Punkt **`Automatisches Anmelden mit aktuellem Benutzernamen und Kennwort`** unter dem Eintrag **`Benutzerauthentifizierung`** anhaken. Zusätzlich muss noch sichergestellt werden, dass unter dem Reiter **`Erweitert`** der **`Internetoptionen`** der Haken **`Integrierte Windows-Authentifizierung`** aktiviert ist.

### Mozilla Firefox und Google Chrome

SSO ist für diese Browser ebenfalls möglich. Details zur Konfiguration finden sich zu Hauf im Internet, für Firefox beispielsweise [hier](https://superuser.com/questions/664656/how-to-configure-firefox-for-ntlm-sso-single-sign-on).

Troubleshooting
---------------

Falls ein Problem bei der Authentifizierung auftreten sollte, helfen eventuell folgende Fragen und Hinweise:

*   Zeiteinstellungen auf Linux und Windows DC vergleichen: Sind diese gleich?
    
*   Der Server ist in den meisten Fällen nur über den vollen FQDN `idoit.mydomain.local` erreichbar
    
*   Hat der _i-doit_\-Server Zugriff auf den Domain Controller? Liegt eine Firewall dazwischen?
    
*   Ist der SSO Domain User entsperrt?
    
*   Kann der DC per DNS vom _i-doit_\-Server aus aufgelöst werden?
    
*   Hat der Webserver Leseberechtigung auf die Datei apache\_krb5.keytab?