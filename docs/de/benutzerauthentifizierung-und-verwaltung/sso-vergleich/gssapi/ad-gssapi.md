---
title: SSO über Active Directory mit GSSAPI
description: "Für die automatische Anmeldung an i-doit innerhalb eines Intranets bietet sich Single Sign-On (SSO) an."
icon:
status:
lang: de
---
# SSO über Active Directory mit GSSAPI

!!! warning "Bitte erstelle vor jeder Änderung an einer Schnittstelle/Import ein vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist, kann dieses dann wiederhergestellt werden"

Für die automatische Anmeldung an i-doit innerhalb eines Intranets bietet sich Single Sign-On (SSO) an. Dieser Artikel zeigt dir, wie du SSO mit dem Apache-Modul `mod-auth-gssapi` einrichtest.

## Voraussetzungen

*   i-doit ist unter GNU/Linux [installiert](../../../installation/index.md).
*   Es wird ein Active Directory (AD) unter Windows Server 2008/2012 für die Authentifizierung eingesetzt.

!!! warning Groß- und Kleinschreibung

    Bei der Konfiguration ist exakt auf Groß- und Kleinschreibung zu achten.

Active Directory (AD) konfigurieren
-----------------------------------

Erstelle für den SSO-Zugang einen Benutzer im AD. Beispiel:

*   Servername von i-doit: **idoit.mydomain.local**
*   AD Domain: **addomain.local**
*   SSO-Benutzer: **ssouser**
*   Passwort: **passwort**

## Konfiguration des i-doit Servers

Installiere alle benötigten Pakete.

**Debian GNU/Linux:**

```shell
sudo apt install msktutil libapache2-mod-auth-gssapi krb5-user
```

**Ubuntu Linux:**

```shell
sudo apt install msktutil libapache2-mod-auth-gssapi krb5-user
```

Gib bei der Installation folgende Werte an:

*   Domain/REALM: `addomain.local`
*   Hostname/Passwortserver: `mydomaincontroller`

Starte Apache neu:

```shell
sudo systemctl restart apache2.service
```

## Erstanmeldung und Keytab erstellen

Authentifiziere den Server:

```shell
kinit <AD Administrator Account>
```

Erstelle die Keytab:

```shell
msktutil --server <AD Domain-Controller> --user-creds-only --update --use-service-account --service HTTP/idoit.mydomain.local --keytab /etc/apache2/apache_krb5.keytab --password <SERVICE ACCOUNT PASSWORD> --account-name ssouser
```

Vergib die Berechtigungen für Apache:

```shell
chmod 644 /etc/apache2/apache_krb5.keytab
```

## Apache Webserver konfigurieren

Passe die VHost-Konfiguration an:

```shell
sudo nano /etc/apache2/sites-available/i-doit.conf

<Directory /var/www/html/>

        AuthType GSSAPI
        AuthName "i-doit Kerberos auth"
        GssapiBasicAuth On
        GssapiCredStore keytab:/etc/apache2/apache_krb5.keytab
        GssapiLocalName On

        Require valid-user

</Directory>
```

Passe nur den Teil innerhalb von `<Directory>` ... `</Directory>` an.

Starte den Apache neu, damit die Änderungen wirksam werden:

```shell
sudo systemctl restart apache2.service
```

Teste die Konfiguration mit folgendem Befehl:

```shell
kinit ssouser@ADDOMAIN.LOCAL
```

Du wirst nach dem Passwort des SSO-Benutzers gefragt. Prüfe mit `klist`, ob ein gueltiges Ticket existiert:

```shell
klist
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
*   Hat der Webserver Leseberechtigung auf die Datei apache\_krb5.keytab?
