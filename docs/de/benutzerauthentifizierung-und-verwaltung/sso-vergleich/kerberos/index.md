---
title: Single Sign On (SSO)
description: "Für die automatische Anmeldung an i-doit innerhalb eines Intranets bietet sich Single Sign-On (SSO) an."
icon:
status:
lang: de
---
# Single Sign On (SSO)

!!! warning "Bitte erstelle vor jeder Änderung an einer Schnittstelle/Import ein vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist, kann dieses dann wiederhergestellt werden"

Für die automatische Anmeldung an i-doit innerhalb eines Intranets bietet sich Single Sign-On (SSO) an. Dieser Artikel beschreibt die Einrichtung mit dem Apache-Modul **auth_kerb**.

!!! info
    Dieser Artikel wurde zuletzt für i-doit Version 1.17.2 geprüft

!!! info
    Diese Anleitung funktioniert nicht mehr mit Debian 11, da dort das Apache2-Modul **mod_auth_kerb** nicht mehr verfügbar ist.
    Verwende stattdessen [GSSAPI](../gssapi/index.md).

## Voraussetzungen

*   i-doit ist unter GNU/Linux [installiert](../../../installation/manuelle-installation/setup.md).
*   Es wird ein Active Directory (AD) unter Windows Server 2008/2012 für die Authentifizierung eingesetzt.

!!! warning "Groß- und Kleinschreibung"

    Bei der Konfiguration ist exakt auf Groß- und Kleinschreibung zu achten.

## Active Directory (AD) konfigurieren

Erstelle für den SSO-Zugang einen Benutzer im AD. Beispiel:

*   Servername von i-doit: **idoit.mydomain.local**
*   AD Domain: **addomain.local**
*   SSO-Benutzer: **ssouser**
*   Passwort: **passwort**

Generiere auf einem AD Domain Controller mit dem Admin-Benutzer über das ktpass-Utility eine Keytab-Datei:

```shell
ktpass -princ HTTP/idoit.mydomain.local@ADDOMAIN.LOCAL -mapuser ssouser@ADDOMAIN.LOCAL -crypto RC4-HMAC-NT -ptype KRB5_NT_PRINCIPAL -pass passwort -out c:\krb5.keytab
```

Kopiere die generierte Datei `krb5.keytab` auf den i-doit-Server nach `/etc/krb5.keytab`.

Öffne anschließend **Active Directory Users and Computers** (`adsiedit.msc`). Aktiviere unter **View** die Option **Advanced Features**. Öffne das SSO-Userobjekt und prüfe im Reiter **Attribute Editor** die Werte **userPrincipalName** und **servicePrincipalName** -- in beiden muss **genau ein Eintrag** mit dem Wert `HTTP/idoit.mydomain.local` stehen.

## Apache Webserver konfigurieren

Für den Apache Webserver benötigst du das Modul `auth_kerb`.

Debian GNU/Linux oder Ubuntu Linux:

```shell
sudo apt install libapache2-mod-auth-kerb
```

Suse Linux Enterprise Server (SLES):

```shell
sudo zypper in apache2-mod_auth_kerb
```

Modul aktivieren:

```shell
sudo a2enmod auth_kerb
```

Erstelle die Kerberos-Konfiguration (ersetze `dc.mydomain.local` durch deinen Domain Controller):

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

Teste die Konfiguration mit folgendem Befehl:

```shell
kinit ssouser@ADDOMAIN.LOCAL
```

Du wirst nach dem Passwort des SSO-Benutzers gefragt. Prüfe mit `klist`, ob ein gueltiges Ticket existiert:

```shell
klist
```

Ergänze anschließend die Apache-Konfiguration für den VHost, unter dem i-doit erreichbar ist, innerhalb der Directory-Directive:

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

Starte den Apache Webserver neu, damit die Änderungen wirksam werden:

```shell
sudo systemctl restart apache2.service
```

## i-doit konfigurieren

Die SSO-Einstellung findest du im Admin-Center unter **System settings > Single Sign on**. Aktiviere dort **SSO**.

## Browser clientseitig konfigurieren

Damit SSO automatisch genutzt wird, muss jeder Browser entsprechend konfiguriert werden.

### Microsoft Internet Explorer (IE)

Fuege den i-doit-Server in den IE-Einstellungen zu den lokalen Intranet Sites hinzu. Aktiviere unter **Stufe anpassen > Benutzerauthentifizierung** die Option **Automatisches Anmelden mit aktuellem Benutzernamen und Kennwort**. Stelle zudem sicher, dass unter **Erweitert > Internetoptionen** der Haken **Integrierte Windows-Authentifizierung** gesetzt ist.

### Mozilla Firefox und Google Chrome

SSO ist für diese Browser ebenfalls möglich. Details zur Konfiguration finden sich zu Hauf im Internet, für Firefox beispielsweise [hier](https://superuser.com/questions/664656/how-to-configure-firefox-for-ntlm-sso-single-sign-on).

## Troubleshooting

Falls bei der Authentifizierung Probleme auftreten, prüfe folgende Punkte:

*   Zeiteinstellungen auf Linux und Windows DC vergleichen: Sind diese gleich?
*   Der Server ist in den meisten Fällen nur über den vollen FQDN idoit.mydomain.local erreichbar
*   Hat der _i-doit_\-Server Zugriff auf den Domain Controller? Liegt eine Firewall dazwischen?
*   Ist der SSO Domain User entsperrt?
*   Kann der DC per DNS vom _i-doit_\-Server aus aufgelöst werden?
*   Hat der Webserver Leseberechtigung auf die Datei krb5.keytab?
