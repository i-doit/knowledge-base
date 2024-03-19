<!-- TRANSLATED by md-translate -->
# SSO über Active Directory mit GSSAPI

# SSO via Active Directory avec GSSAPI

Für die automatische Anmeldung an i-doit innerhalb eines Intranets bietet sich die Authentifizierung über Single Sign On (SSO) an.

Pour la connexion automatique à i-doit au sein d'un intranet, l'authentification par Single Sign On (SSO) est idéale.

## Voraussetzungen und Annahmen

## Conditions préalables et hypothèses

Folgende Bedingungen sind die Grundlage dieses Artikels:

Les conditions suivantes constituent la base de cet article :

* i-doit ist unter GNU/Linux [installiert](../../../installation/index.md)
* Es wird ein Active Directory (AD) unter Windows Server 2008/2012 für die Authentifizierung eingesetzt.

* i-doit est [installé] sous GNU/Linux(../../../installation/index.md)
* Un Active Directory (AD) sous Windows Server 2008/2012 est utilisé pour l'authentification.

In diesem Artikel wird beschrieben, wie Single Sign On (SSO) unter Apache Webserver mit mod-auth-gssapi eingerichtet wird.

Cet article décrit comment mettre en place l'authentification unique (SSO) sous le serveur web Apache avec mod-auth-gssapi.

!!! warning Groß- und Kleinschreibung

! !! respecte les majuscules et les minuscules

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

* Nom de serveur d'i-doit : **idoit.mydomain.local**
* Domaine AD : **addomaine.local**
* Utilisateur SSO : **ssouser**
* mot de passe : **password**

## Konfiguration des i-doit Servers

## Configuration du serveur i-doit

Installation aller benötigten Pakete

Installation de tous les paquets nécessaires

Debian GNU/Linux oder Ubuntu Linux:

Debian GNU/Linux ou Ubuntu Linux :

```shell
sudo apt install msktutil libapache2-mod-auth-gssapi kinit krb5-user
```

Info:
Domain"REALM" angeben: addomain.local
Hostname"Passwortserver" mydomaincontroller

Info :
Spécifier le domaine "REALM" : addomain.local
Nom d'hôte "serveur de mots de passe" mydomaincontroller

Apache neustarten:

Redémarrer Apache :

```shell
sudo systemctl restart apache2.service
```

## Erstanmeldung und erstellen der Keytab

## Première connexion et création du keytab

Authentifizierung des Servers:

Authentification du serveur :

```shell
kinit <AD Administrator Account>
```

Erstellen der Keytab:

Création du keytab :

```shell
msktutil --server <AD Domain-Controller> --user-creds-only --update --use-service-account --service HTTP/idoit.mydomain.local --keytab /etc/apache2/apache_krb5.keytab --password <SERVICE ACCOUNT PASSWORD> --account-name ssouser
```

Berechtigungen für Apache vergeben

Donner des permissions à Apache

```shell
chmod 644 /etc/apache2/apache_krb5.keytab
```

## Apache Webserver konfigurieren

## Configurer le serveur web Apache

In dieser Datei wird die neue VHost-Konfiguration anpassen:

Dans ce fichier, la nouvelle configuration VHost sera adaptée :

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

Bitte nur den Teil in `<Directory>` `</Directory>` anpassen

Veuillez adapter uniquement la partie dans `<Directory>` `</Directory>`.

Im Anschluss einmal den Apache neustarten damit die Änderungen wirksam werden

Redémarrez ensuite Apache pour que les modifications soient prises en compte.

```shell
sudo systemctl restart apache2.service
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

## i-doit konfigurieren

## Configurer i-doit

Ab Version 1.5 kann SSO über die Web GUI von i-doit konfiguriert werden. Die entsprechende Einstellung befindet sich im Admin Center unter **System settings → Single Sign on**. Dort ist **SSO** zu aktivieren.

À partir de la version 1.5, le SSO peut être configuré via l'interface utilisateur Web d'i-doit. Le paramètre correspondant se trouve dans l'Admin Center sous **System settings → Single Sign on**. C'est là qu'il faut activer **SSO**.

## Browser Client-seitig konfigurieren

## Configurer le navigateur côté client

Zuletzt muss jeder Browser konfiguriert werden, damit SSO automatisch genutzt wird.

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

En cas de problème d'authentification, les questions et remarques suivantes peuvent éventuellement aider :

* Zeiteinstellungen auf Linux und Windows DC vergleichen: Sind diese gleich?
* Der Server ist in den meisten Fällen nur über den vollen FQDN idoit.mydomain.local erreichbar
* Hat der _i-doit_-Server Zugriff auf den Domain Controller? Liegt eine Firewall dazwischen?
* Ist der SSO Domain User entsperrt?
* Kann der DC per DNS vom _i-doit_-Server aus aufgelöst werden?
* Hat der Webserver Leseberechtigung auf die Datei apache_krb5.keytab?

* Comparer les réglages de l'heure sur Linux et Windows DC : sont-ils identiques ?
* Dans la plupart des cas, le serveur n'est accessible que par le FQDN complet idoit.mydomain.local.
* Le serveur _i-doit_ a-t-il accès au contrôleur de domaine ? Y a-t-il un pare-feu entre les deux ?
* L'utilisateur de domaine SSO est-il débloqué ?
* Le DC peut-il être résolu par DNS à partir du serveur _i-doit_ ?
* Le serveur web a-t-il un droit de lecture sur le fichier apache_krb5.keytab ?
