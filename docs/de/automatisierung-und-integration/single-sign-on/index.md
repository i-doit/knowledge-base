# Single Sign On (SSO)

Für die automatische Anmeldung an i-doit innerhalb eines Intranets bietet sich die Authentifizierung über Single Sign On (SSO) an.

!!! info
    Dieser Artikel wurde zuletzt für i-doit Version 1.17.2 geprüft

!!! info
    Diese Anleitung funktioniert nicht mehr mit Debian 11 das dort das Apache2 Module **mod_auth_kerb** nicht mehr verfügbar ist.
    Daher sollte [GSSAPI](../single-sign-on/single-sign-on-via-gssapi.md) verwendet werden.

Voraussetzungen und Annahmen

Folgende Bedingungen sind die Grundlage dieses Artikels:

*   i-doit ist unter GNU/Linux [installiert](../../installation/manuelle-installation/setup.md)
*   Es wird ein Active Directory (AD) unter Windows Server 2008/2012 für die Authentifizierung eingesetzt.

In diesem Artikel wird beschrieben, wie Single Sign On (SSO) unter Apache Webserver mit **auth_kerb** eingerichtet wird.

!!! warning "Groß- und Kleinschreibung"

    Bei der Konfiguration ist exakt auf Groß- und Kleinschreibung zu achten.

Active Directory (AD) konfigurieren
-----------------------------------

Für den SSO-Zugang wird im AD ein Benutzer generiert. Beispiel:

*   Servername von i-doit: **idoit.mydomain.local**
*   AD Domain: **addomain.local**
*   SSO-Benutzer: **ssouser**
*   Passwort: **passwort**

Auf einem AD Domain Controller wird mit dem Admin-Benutzer mithilfe der ktpass Utilities eine Keytab-Datei generiert:

```shell
    ktpass -princ HTTP/idoit.mydomain.local@ADDOMAIN.LOCAL -mapuser ssouser@ADDOMAIN.LOCAL -crypto RC4-HMAC-NT -ptype KRB5_NT_PRINCIPAL -pass passwort -out c:\krb5.keytab
```

Die generierte Datei krb5.keytab wird auf den i-doit-Server kopiert unter /etc/krb5.keytab.

Anschließend wird **Active Directory Users and Computers **geöffnet (adsiedit.msc). Unter **View** wird **Advanced Features** angehakt. Nun wird das SSO Userobjekt geöffnet. Im Reiter **Attribute Editor** wird nach den Werten **userPrincipalName** und **servicePrincipalName** gesucht. In beiden Werten muss **genau ein Eintrag** mit dem Wert **HTTP/idoit.mydomain.local** stehen.

Apache Webserver konfigurieren
------------------------------

Für den Apache Webserver wird das Modul auth_kerb benötigt.

    # Debian GNU/Linux oder Ubuntu Linux:

    ```shell
    sudo apt install libapache2-mod-auth-kerb
    ```

    # Suse Linux Enterprise Server (SLES):

    ```shell
    sudo zypper in apache2-mod_auth_kerb
    ```

    # Modul aktivieren:

    ```shell
    sudo a2enmod auth_kerb
    ```

Nun wird die Konfiguration für Kerberos geschrieben (dc.mydomain.local ist mit dem Domain Controller zu ersetzen):

```conf
    # cat /etc/krb5.conf
    [libdefaults]

    default_realm = ADDOMAIN.LOCAL

    [realms]
    ADDOMAIN.LOCAL = {
    admin_server = dc.mydomain.local
    kdc          = dc.mydomain.local

    }

    [domain_realm]
    idoit.mydomain.local = ADDOMAIN.LOCAL
    .mydomain.local = ADDOMAIN.LOCAL
    mydomain.local = ADDOMAIN.LOCAL
```

Zum Testen der Konfiguration ist folgender Befehl auszuführen:

```shell
    kinit ssouser@ADDOMAIN.LOCAL
```

Es wird nach dem Passwort des SSO-Benutzers gefragt. Mit dem Befehl

```shell
    klist
```

kann kontrolliert werden, ob ein gültiges Ticket existiert.

Anschließend wird die Apache-Konfiguration für den VHost, unter dem i-doit erreichbar ist, innerhalb der Directory\-Directive ergänzt:

```conf
    <Directory "/pfad/zu/i-doit/">
        AuthType Kerberos
        KrbAuthRealms ADDOMAIN.LOCAL
        KrbServiceName HTTP/idoit.mydomain.local@ADDOMAIN.LOCAL
        Krb5Keytab /etc/krb5.keytab
        KrbMethodNegotiate on
        KrbMethodK5Passwd off
        require valid-user
    </Directory>
```

Damit die Änderungen wirksam werden, muss der Apache Webserver neugestartet werden:

    # Debian GNU/Linux oder Ubuntu oder Suse Linux Enterprise Server (SLES):

    ```shell
    sudo systemctl restart apache2.service
    ```

i-doit konfigurieren
--------------------

Ab Version 1.5 kann SSO über die Web GUI von i-doit konfiguriert werden. Die entsprechende Einstellung befindet sich unter **Verwaltung → Systemeinstellungen**. Dort ist **SSO** zu aktivieren.

Browser Client-seitig konfigrieren
----------------------------------

Zuletzt muss jeder Browser konfiguiert werden, damit SSO automatisch genutzt wird.

### Microsoft Internet Explorer (IE)

In den IE-Einstellungen muss man den i-doit-Server zu den lokalen Intranet Sites hinzufügen. Danach muss man unter **Stufe anpassen** den Punkt **Automatisches Anmelden mit aktuellem Benutzernamen und Kennwort** unter dem Eintrag **Benutzerauthentifizierung** anhaken. Zusätzlich muss noch sichergestellt werden, dass unter dem Reiter **Erweitert** der **Internetoptionen** der Haken **Integrierte Windows-Authentifizierung** aktiviert ist.

### Mozilla Firefox und Google Chrome

SSO ist für diese Browser ebenfalls möglich. Details zur Konfiguration finden sich zu Hauf im Internet, für Firefox beispielsweise [hier](https://superuser.com/questions/664656/how-to-configure-firefox-for-ntlm-sso-single-sign-on).

Troubleshooting
---------------

Falls ein Problem bei der Authentifizierung auftreten sollte, helfen eventuell folgende Fragen und Hinweise:

*   Zeiteinstellungen auf Linux und Windows DC vergleichen: Sind diese gleich?

*   Der Server ist in den meisten Fällen nur über den vollen FQDN idoit.mydomain.local erreichbar

*   Hat der _i-doit_\-Server Zugriff auf den Domain Controller? Liegt eine Firewall dazwischen?

*   Ist der SSO Domain User entsperrt?

*   Kann der DC per DNS vom _i-doit_\-Server aus aufgelöst werden?

*   Hat der Webserver Leseberechtigung auf die Datei krb5.keytab?
