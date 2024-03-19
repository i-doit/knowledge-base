<!-- TRANSLATED by md-translate -->
# LDAP via TLS

# LDAP via TLS

Bei einigen Benutzern gibt es leider Probleme bei der LDAP Verbindung via TLS daher teilen wir die bisherigen Lösungen hier.

Certains utilisateurs rencontrent malheureusement des problèmes lors de la connexion LDAP via TLS, c'est pourquoi nous partageons ici les solutions trouvées jusqu'à présent.

Leider gibt es da keine generelle Lösung.

Malheureusement, il n'y a pas de solution générale.

## Zuerst mal die häufigsten Ursachen:

## Tout d'abord, les causes les plus fréquentes :

* Das Zertifikat wurde nicht oder nicht korrekt importiert.
* In der LDAP Konfiguration wurde nicht der Hostname des LDAP Servers verwendet.
* Der Hostname des LDAP Servers kann nicht aufgelöst werden.
* Mit IPv4 klappte die Zertifikatsprüfung, mit IPv6 nicht. Nachdem IPv6 auf dem Linux deaktiviert wurde war das Problem gelöst.

* Le certificat n'a pas été importé ou a été importé de manière incorrecte.
* Le nom d'hôte du serveur LDAP n'a pas été utilisé dans la configuration LDAP.
* Le nom d'hôte du serveur LDAP ne peut pas être résolu.
* La vérification du certificat a fonctionné avec IPv4, mais pas avec IPv6. Après avoir désactivé IPv6 sur Linux, le problème a été résolu.

## Bei LDAP gibt es seitens der Active Directory Domain Controller zunächst nicht viel zu beachten:

## Dans le cas de LDAP, il n'y a pas grand-chose à prendre en compte au départ du côté des contrôleurs de domaine Active Directory :

* Es wird ein Zertifikat benötigt, das bestimmte Anforderungen erfüllt ([https://support.microsoft.com/en-us/help/321051/how-to-enable-ldap-over-ssl-with-a-third-party-certification-authority](https://support.microsoft.com/en-us/help/321051/how-to-enable-ldap-over-ssl-with-a-third-party-certification-authority))
* Es sollte möglichst nur ein Zertifikat für diese Zwecke auf einem DC vorhanden sein (wird interessant, wenn bereits eins für Kerberos-Authentifizierung vorhanden ist - was unter Sicherheitsaspekten vermutlich überall der Fall ist
* Eine verschlüsselte Verbindung kann gegen AD per LDAPS (TLS/SSL schon bei Verbindungsaufbau) oder STARTTLS (explizites Kommando zum Anfang der Verbindung) erfolgen
* Es ist ein Gemenge von Client und Server-Einstellungen (Links weiter unten), wenn LDAP Channel Binding und LDAP Signing berücksichtigt wird; nicht jedes System (Linux) unterstützt out oft he box alle Optionen.

* Un certificat répondant à certaines exigences est nécessaire ([https://support.microsoft.com/en-us/help/321051/how-to-enable-ldap-over-ssl-with-a-third-party-certification-authority](https://support.microsoft.com/en-us/help/321051/how-to-enable-ldap-over-ssl-with-a-third-party-certification-authority))
* Si possible, il ne devrait y avoir qu'un seul certificat à cet effet sur un DC (cela devient intéressant s'il y en a déjà un pour l'authentification Kerberos - ce qui est probablement le cas partout du point de vue de la sécurité).
* Une connexion cryptée peut être établie avec AD via LDAPS (TLS/SSL dès l'établissement de la connexion) ou STARTTLS (commande explicite au début de la connexion).
* C'est un mélange de paramètres client et serveur (liens plus bas), si LDAP Channel Binding et LDAP Signing sont pris en compte ; tous les systèmes (Linux) ne supportent pas out oft he box toutes les options.

## Linkservice:

## Service de liens :

[https://support.microsoft.com/en-us/help/4520412/2020-ldap-channel-binding-and-ldap-signing-requirements-for-windows](https://support.microsoft.com/en-us/help/4520412/2020-ldap-channel-binding-and-ldap-signing-requirements-for-windows)

[https://support.microsoft.com/en-us/help/4520412/2020-ldap-channel-binding-and-ldap-signing-requirements-for-windows](https://support.microsoft.com/en-us/help/4520412/2020-ldap-channel-binding-and-ldap-signing-requirements-for-windows)

[https://support.microsoft.com/en-us/help/935834/how-to-enable-ldap-signing-in-windows-server](https://support.microsoft.com/en-us/help/935834/how-to-enable-ldap-signing-in-windows-server)

[https://support.microsoft.com/en-us/help/935834/how-to-enable-ldap-signing-in-windows-server](https://support.microsoft.com/en-us/help/935834/how-to-enable-ldap-signing-in-windows-server)

[https://techcommunity.microsoft.com/t5/core-infrastructure-and-security/ldap-channel-binding-and-ldap-signing-requirements-march-2020/ba-p/921536#](https://techcommunity.microsoft.com/t5/core-infrastructure-and-security/ldap-channel-binding-and-ldap-signing-requirements-march-2020/ba-p/921536#)

[https://techcommunity.microsoft.com/t5/core-infrastructure-and-security/ldap-channel-binding-and-ldap-signing-requirements-march-2020/ba-p/921536#](https://techcommunity.microsoft.com/t5/core-infrastructure-and-security/ldap-channel-binding-and-ldap-signing-requirements-march-2020/ba-p/921536#)

[https://support.microsoft.com/en-in/help/4034879/how-to-add-the-ldapenforcechannelbinding-registry-entry](https://support.microsoft.com/en-in/help/4034879/how-to-add-the-ldapenforcechannelbinding-registry-entry)

[https://support.microsoft.com/en-in/help/4034879/how-to-add-the-ldapenforcechannelbinding-registry-entry](https://support.microsoft.com/en-in/help/4034879/how-to-add-the-ldapenforcechannelbinding-registry-entry)

## Vielleicht könnten die Schritte die MS zur Problemlösung empfiehlt helfen?

## Peut-être que les étapes recommandées par MS pour résoudre le problème pourraient aider ?

* [https://support.microsoft.com/en-us/help/938703/how-to-troubleshoot-ldap-over-ssl-connection-problems](https://support.microsoft.com/en-us/help/938703/how-to-troubleshoot-ldap-over-ssl-connection-problems)

* [https://support.microsoft.com/en-us/help/938703/how-to-troubleshoot-ldap-over-ssl-connection-problems](https://support.microsoft.com/en-us/help/938703/how-to-troubleshoot-ldap-over-ssl-connection-problems)

## Wenn du das Problem gefunden hast würde es helfen die Information mit uns zu teilen. Gerne per E-Mail an [help@i-doit.com](mailto:help@i-doit.com)

## Si tu as trouvé le problème, il serait utile de partager l'information avec nous. N'hésite pas à envoyer un e-mail à [help@i-doit.com](mailto:help@i-doit.com)