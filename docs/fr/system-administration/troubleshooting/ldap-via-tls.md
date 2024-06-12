# LDAP via TLS

Certains utilisateurs ont malheureusement des problèmes avec la connexion LDAP via TLS, nous partageons donc ici les solutions précédentes.  
Malheureusement, il n'y a pas de solution générale.

Tout d'abord, les causes les plus courantes:
=============================================

*   Le certificat n'a pas été importé ou n'a pas été importé correctement.
*   Le nom d'hôte du serveur LDAP n'a pas été utilisé dans la configuration LDAP.
*   Le nom d'hôte du serveur LDAP ne peut pas être résolu.
*   Avec IPv4, la vérification du certificat a fonctionné, avec IPv6 non. Après avoir désactivé IPv6 sur Linux, le problème a été résolu.

Avec LDAP, il n'y a pas grand-chose à considérer du côté des contrôleurs de domaine Active Directory au départ:
=============================================================================================================

*   Un certificat est nécessaire qui répond à certaines exigences ([https://support.microsoft.com/en-us/help/321051/how-to-enable-ldap-over-ssl-with-a-third-party-certification-authority](https://support.microsoft.com/en-us/help/321051/how-to-enable-ldap-over-ssl-with-a-third-party-certification-authority)).
*   S'il est possible, il devrait y avoir un seul certificat à cette fin sur un DC (devient intéressant s'il y en a déjà un pour l'authentification Kerberos - ce qui est probablement le cas partout d'un point de vue sécurité).
*   Une connexion chiffrée peut être établie contre AD via LDAPS (TLS/SSL déjà à l'établissement de la connexion) ou STARTTLS (commande explicite au début de la connexion)
*   Il s'agit d'un mélange de paramètres client et serveur (liens ci-dessous) lorsque la liaison de canal LDAP et la signature LDAP sont considérées; tous les systèmes (Linux) ne prennent pas en charge toutes les options par défaut.

Service de liens:
=================

[https://support.microsoft.com/en-us/help/4520412/2020-ldap-channel-binding-and-ldap-signing-requirements-for-windows](https://support.microsoft.com/en-us/help/4520412/2020-ldap-channel-binding-and-ldap-signing-requirements-for-windows)

[https://support.microsoft.com/en-us/help/935834/how-to-enable-ldap-signing-in-windows-server](https://support.microsoft.com/en-us/help/935834/how-to-enable-ldap-signing-in-windows-server) 


[https://techcommunity.microsoft.com/t5/core-infrastructure-and-security/ldap-channel-binding-and-ldap-signing-requirements-march-2020/ba-p/921536#](https://techcommunity.microsoft.com/t5/core-infrastructure-and-security/ldap-channel-binding-and-ldap-signing-requirements-march-2020/ba-p/921536#)

[https://support.microsoft.com/en-in/help/4034879/how-to-add-the-ldapenforcechannelbinding-registry-entry](https://support.microsoft.com/en-in/help/4034879/how-to-add-the-ldapenforcechannelbinding-registry-entry)

Peut-être que les étapes recommandées par MS pour résoudre le problème pourraient aider?
==============================================================

*   [https://support.microsoft.com/en-us/help/938703/how-to-troubleshoot-ldap-over-ssl-connection-problems](https://support.microsoft.com/en-us/help/938703/how-to-troubleshoot-ldap-over-ssl-connection-problems)

Si vous avez trouvé le problème, il serait utile de partager l'information avec nous. N'hésitez pas à nous envoyer un e-mail à [help@i-doit.com](mailto:help@i-doit.com)
===========================================================================================================================================
