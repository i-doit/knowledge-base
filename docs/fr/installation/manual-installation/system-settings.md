# Configuration du système {/ * exemples *}

Pour la configuration du système d'exploitation, nous recommandons une série de paramètres concernant PHP, le serveur Web Apache et MySQL/MariaDB. Ceux-ci sont basés sur les [exigences du système](../system-requirements.md) pour i-doit. Les paramètres varient en fonction du système d'exploitation, veuillez donc vous référer aux articles correspondants pour plus d'informations :

-   [Debian GNU/Linux](debian12.md)
-   [Red Hat Enterprise Linux (RHEL)](red-hat-enterprise-linux/index.md)
-   [Suse Linux Enterprise Server (SLES)](suse-linux-enterprise-server.md)
-   [Ubuntu Linux](ubuntu-linux/index.md)
-   [Microsoft Windows Server](microsoft-windows-server/index.md)

## PHP {/ * exemples *}

À ce stade, nous aimerions aborder quelques fonctionnalités de PHP qui complètent les articles mentionnés ci-dessus.

## Mise en cache {/ * exemples *}

i-doit possède ses propres stratégies de mise en cache pour répondre le plus rapidement possible aux demandes. Des caches d'opcode pour PHP et des stockages clé-valeur peuvent être utilisés en plus pour obtenir des améliorations de performances supplémentaires. Voici l'ordre suivant pris en compte :

1. memcached
2. APC(u)
3. Système de fichiers

Nous recommandons l'utilisation de _soit_ **memcached** _soit_ **APC/APCu**. Nous penchons vers l'utilisation de **memcached**. Les instructions d'installation (sauf pour Windows) peuvent être trouvées dans les articles mentionnés ci-dessus.

Le serveur Web Apache doit être redémarré après son installation, afin que les modifications apportées à PHP puissent devenir actives :

```shell
sudo systemctl restart apache2.service
```

### Suhosin {/ * exemples *}

L'extension de sécurité [Suhosin](https://suhosin.org/) est disponible pour PHP. Bien qu'elle apporte de nombreuses additions utiles pour le bon fonctionnement des applications Web sous PHP, il existe également de nombreux pièges dans les paramètres par défaut. En raison de cela, une fonctionnalité sans faille de _i-doit_ ne peut être garantie lors de l'utilisation de Suhosin.

I am ready to translate the Markdown content into French. Please paste the content you would like me to translate.
