<!-- TRANSLATED by md-translate -->
# Single Sign On (SSO)

# Authentification unique (SSO)

Für die automatische Anmeldung an i-doit innerhalb eines Intranets bietet sich die Authentifizierung über Single Sign On (SSO) an.

Pour la connexion automatique à i-doit au sein d'un intranet, l'authentification par Single Sign On (SSO) est idéale.

!!! info
    Dieser Artikel wurde zuletzt für i-doit Version 1.17.2 geprüft

! !! info
    Cet article a été vérifié pour la dernière fois pour i-doit version 1.17.2

!!! info
    Diese Anleitung funktioniert nicht mehr mit Debian 11 das dort das Apache2 Module **mod_auth_kerb** nicht mehr verfügbar ist.
    Daher sollte [GSSAPI](../gssapi/index.md) verwendet werden.

! !! info
    Ces instructions ne fonctionnent plus avec Debian 11, car le module Apache2 **mod_auth_kerb** n'est plus disponible.
    Il faut donc utiliser [GSSAPI](../gssapi/index.md).

Voraussetzungen und Annahmen

Conditions préalables et hypothèses

Folgende Bedingungen sind die Grundlage dieses Artikels:

Les conditions suivantes constituent la base de cet article :

* i-doit ist unter GNU/Linux [installiert](../../../installation/manuelle-installation/setup.md)
* Es wird ein Active Directory (AD) unter Windows Server 2008/2012 für die Authentifizierung eingesetzt.

* i-doit est [installé] sous GNU/Linux(../../../installation/manuelle-installation/setup.md)
* Un Active Directory (AD) sous Windows Server 2008/2012 est utilisé pour l'authentification.

In diesem Artikel wird beschrieben, wie Single Sign On (SSO) unter Apache Webserver mit **auth_kerb** eingerichtet wird.

Cet article décrit comment mettre en place le Single Sign On (SSO) sous le serveur web Apache avec **auth_kerb**.

!!! warning "Groß- und Kleinschreibung"

! !! warning "Majuscules et Minuscules".

```
Bei der Konfiguration ist exakt auf Groß- und Kleinschreibung zu achten.
```

## Active Directory (AD) konfigurieren

## Configurer Active Directory (AD)

Für den SSO-Zugang wird im AD ein Benutzer generiert. Beispiel:

Un utilisateur est généré dans l'AD pour l'accès SSO. Exemple :

* Servername von i-doit: **idoit.mydomain.local**
* AD Domain: **addomain.local**
* SSO-Benutzer: **ssouser**
* Passwort: **passwort**

* Nom du serveur d'i-doit : **idoit.mydomain.local**
* Domaine AD : **addomaine.local**
* Utilisateur SSO : **ssouser**
* mot de passe : **password**

Auf einem AD Domain Controller wird mit dem Admin-Benutzer mithilfe der ktpass Utilities eine Keytab-Datei generiert:

Sur un contrôleur de domaine AD, un fichier keytab est généré avec l'utilisateur admin à l'aide des ktpass Utilities :

```shell
ktpass -princ HTTP/idoit.mydomain.local@ADDOMAIN.LOCAL -mapuser ssouser@ADDOMAIN.LOCAL -crypto RC4-HMAC-NT -ptype KRB5_NT_PRINCIPAL -pass passwort -out c:\krb5.keytab
```

Die generierte Datei krb5.keytab wird auf den i-doit-Server kopiert unter /etc/krb5.keytab.

Le fichier généré krb5.keytab est copié sur le serveur i-doit sous /etc/krb5.keytab.

Anschließend wird **Active Directory Users and Computers** geöffnet (adsiedit.msc). Unter **View** wird **Advanced Features** angehakt. Nun wird das SSO Userobjekt geöffnet. Im Reiter **Attribute Editor** wird nach den Werten **userPrincipalName** und **servicePrincipalName** gesucht. In beiden Werten muss **genau ein Eintrag** mit dem Wert **HTTP/idoit.mydomain.local** stehen.

Ensuite, **Active Directory Users and Computers** est ouvert (adsiedit.msc). Sous **View**, on coche **Advanced Features**. L'objet utilisateur SSO est maintenant ouvert. Dans l'onglet **Attribute Editor**, on recherche les valeurs **userPrincipalName** et **servicePrincipalName**. Dans les deux valeurs, il doit y avoir **exactement une entrée** avec la valeur **HTTP/idoit.mydomain.local**.

## Apache Webserver konfigurieren

## Configurer le serveur web Apache

Für den Apache Webserver wird das Modul auth_kerb benötigt.

Pour le serveur web Apache, le module auth_kerb est nécessaire.

Debian GNU/Linux oder Ubuntu Linux:

Debian GNU/Linux ou Ubuntu Linux :

```shell
sudo apt install libapache2-mod-auth-kerb
```

Suse Linux Enterprise Server (SLES):

Suse Linux Enterprise Server (SLES) :

```shell
sudo zypper in apache2-mod_auth_kerb
```

Modul aktivieren:

Activer le module :

```shell
sudo a2enmod auth_kerb
```

Nun wird die Konfiguration für Kerberos geschrieben (dc.mydomain.local ist mit dem Domain Controller zu ersetzen):

La configuration pour Kerberos est maintenant écrite (dc.mydomain.local doit être remplacé par le contrôleur de domaine) :

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

Pour tester la configuration, il faut exécuter la commande suivante :

```shell
kinit ssouser@ADDOMAIN.LOCAL
```

Es wird nach dem Passwort des SSO-Benutzers gefragt. Mit dem Befehl

Le mot de passe de l'utilisateur SSO est demandé. Avec la commande

```shell
klist
```

kann kontrolliert werden, ob ein gültiges Ticket existiert.

permet de contrôler s'il existe un ticket valable.

Anschließend wird die Apache-Konfiguration für den VHost, unter dem i-doit erreichbar ist, innerhalb der Directory-Directive ergänzt:

Ensuite, la configuration d'Apache pour le VHost sous lequel i-doit est accessible est complétée au sein de la Directory-Directive :

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

Pour que les modifications prennent effet, le serveur web Apache doit être redémarré :

# Debian GNU/Linux oder Ubuntu oder Suse Linux Enterprise Server (SLES)

# Debian GNU/Linux ou Ubuntu ou Suse Linux Enterprise Server (SLES)

```shell
sudo systemctl restart apache2.service
```

## i-doit konfigurieren

## Configurer i-doit

Ab Version 1.5 kann SSO über die Web GUI von i-doit konfiguriert werden. Die entsprechende Einstellung befindet sich im Admin Center unter **System settings → Single Sign on**. Dort ist **SSO** zu aktivieren.

À partir de la version 1.5, le SSO peut être configuré via l'interface utilisateur Web d'i-doit. Le paramètre correspondant se trouve dans l'Admin Center sous **System settings → Single Sign on**. C'est là qu'il faut activer **SSO**.

## Browser Client-seitig konfigrieren

## Configurer le navigateur côté client

Zuletzt muss jeder Browser konfiguiert werden, damit SSO automatisch genutzt wird.

Enfin, chaque navigateur doit être configuré pour que le SSO soit utilisé automatiquement.

### Microsoft Internet Explorer (IE)

### Microsoft Internet Explorer (IE)

In den IE-Einstellungen muss man den i-doit-Server zu den lokalen Intranet Sites hinzufügen. Danach muss man unter **Stufe anpassen** den Punkt **Automatisches Anmelden mit aktuellem Benutzernamen und Kennwort** unter dem Eintrag **Benutzerauthentifizierung** anhaken. Zusätzlich muss noch sichergestellt werden, dass unter dem Reiter **Erweitert** der **Internetoptionen** der Haken **Integrierte Windows-Authentifizierung** aktiviert ist.

Dans les paramètres IE, il faut ajouter le serveur i-doit aux sites intranet locaux. Ensuite, il faut cocher le point **Connexion automatique avec le nom d'utilisateur et le mot de passe actuels** sous l'entrée **Authentification de l'utilisateur** sous **Configuration du niveau**. En outre, il faut encore s'assurer que sous l'onglet **Avancé** des **Options Internet**, la coche **Authentification intégrée de Windows** est activée.

### Mozilla Firefox und Google Chrome

### Mozilla Firefox et Google Chrome

SSO ist für diese Browser ebenfalls möglich. Details zur Konfiguration finden sich zu Hauf im Internet, für Firefox beispielsweise [hier](https://superuser.com/questions/664656/how-to-configure-firefox-for-ntlm-sso-single-sign-on).

Le SSO est également possible pour ces navigateurs. Des détails sur la configuration sont disponibles sur Internet, par exemple pour Firefox [ici](https://superuser.com/questions/664656/how-to-configure-firefox-for-ntlm-sso-single-sign-on).

## Troubleshooting

## Dépannage

Falls ein Problem bei der Authentifizierung auftreten sollte, helfen eventuell folgende Fragen und Hinweise:

Si un problème survient lors de l'authentification, les questions et remarques suivantes peuvent éventuellement aider :

* Zeiteinstellungen auf Linux und Windows DC vergleichen: Sind diese gleich?
* Der Server ist in den meisten Fällen nur über den vollen FQDN idoit.mydomain.local erreichbar
* Hat der _i-doit_-Server Zugriff auf den Domain Controller? Liegt eine Firewall dazwischen?
* Ist der SSO Domain User entsperrt?
* Kann der DC per DNS vom _i-doit_-Server aus aufgelöst werden?
* Hat der Webserver Leseberechtigung auf die Datei krb5.keytab?

* Comparer les réglages de l'heure sur Linux et Windows DC : sont-ils identiques ?
* Dans la plupart des cas, le serveur n'est accessible que par le FQDN complet idoit.mydomain.local.
* Le serveur _i-doit_ a-t-il accès au contrôleur de domaine ? Y a-t-il un pare-feu entre les deux ?
* L'utilisateur de domaine SSO est-il débloqué ?
* Le DC peut-il être résolu par DNS à partir du serveur _i-doit_ ?
* Le serveur web a-t-il un droit de lecture sur le fichier krb5.keytab ?
