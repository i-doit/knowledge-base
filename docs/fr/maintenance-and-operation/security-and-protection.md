# Sécurité et Protection 

Dans de nombreux cas, la documentation informatique contient des données très sensibles qui doivent être protégées. Dans cet article, nous examinons quels mécanismes de protection sont efficaces pour sécuriser une installation i-doit. En particulier, nos objectifs de protection sont la confidentialité, l'intégrité, la disponibilité, l'authenticité et l'autorisation.

!!! info "Pourquoi cet article est-il si étendu ?"

    Il faut l'admettre, cet article est long. Le sujet "Sécurité de l'information des applications Web" est un domaine très vaste que l'on peut discuter en détail.

    Néanmoins : En raison de la quantité de mesures sensées, nous effleurons à peine le sujet et renvoyons à d'autres informations chaque fois que possible. Ainsi, cet article est conçu comme une collection d'idées. Les mesures individuelles mentionnées doivent toujours être traitées avec bon sens et le savoir-faire nécessaire.

!!! info "Pourquoi ces mesures ne font-elles pas partie de l'installation ?"

    Les conseils que nous décrivons dans cet article ne font pas partie de l'étendue normale d'une [installation i-doit](../installation/index.md) et ne sont pas des [exigences système](../installation/system-requirements.md) nécessaires. Ce sont des mesures de sécurité supplémentaires concernant principalement le système d'exploitation et les packages installés.

Avant d'installer i-doit
------------------------

Avant d'[installer](../installation/index.md) i-doit, vous pouvez déjà prendre certaines mesures pour renforcer le système sur lequel i-doit est basé. À titre d'exemple, nous utilisons un Debian GNU/Linux pour une installation i-doit.

### Droits des utilisateurs : Moins c'est mieux

Les utilisateurs connectés au système d'exploitation et n'ayant pas toutes les autorisations possibles dès le départ peuvent également causer potentiellement moins de dommages (accidentels). **Ainsi, vous ne devriez pas utiliser l'inscription en tant que super utilisateur (root)**. Comme alternative établie, vous pouvez utiliser [sudo](https://wiki.debian.org/sudo) qui vous permet d'exécuter temporairement des commandes avec les droits root.

De nombreux services s'exécutent avec des utilisateurs ou des groupes. Apache sous Debian GNU/Linux s'exécute avec l'utilisateur www-data et le groupe du même nom.

### Sécurisation de SSH

Outre Apache, SSH est le seul service accessible depuis l'extérieur. **SSH est utilisé pour l'administration du système via la ligne de commande.** La configuration du serveur SSH se trouve sous /etc/ssh/sshd_config. L'installation par défaut offre déjà un bon niveau de sécurité que nous pouvons cependant renforcer davantage.

Pour limiter les attaques par force brute courantes, vous ne devriez pas autoriser l'enregistrement en tant que super utilisateur (root) :

    PermitRootLogin no

Au lieu de devoir se souvenir des mots de passe, vous pouvez utiliser la procédure de clé publique. À cette fin, vous créez une paire composée de clés publique et privée sur le client :

    ssh-keygen -t rsa -f mykey -b 4096 -C myemail@example.org

Ensuite, vous copiez la clé publique sur le serveur :

    ssh-copy-key -i ~/.ssh/mykey.pub idoitadm@i-doit.example.org

Ensuite, vous modifiez la procédure des mots de passe en clés publiques dans la configuration du serveur SSH :

    PubkeyAuthentication yes
    PasswordAuthentication no

Après cela, le service SSH doit être redémarré :

    sudo systemctl restart ssh.service

### Mise à jour, Mises à jour, Mises à jour

Probablement le conseil le plus important est : **Gardez votre système à jour**. En termes informatiques : Vous ne pouvez pas avoir de sécurité des informations sans gestion des correctifs. Il est particulièrement important de maintenir à jour l'installation de i-doit, le système d'exploitation correspondant, les clients accédant à i-doit et le navigateur web en permanence. Les systèmes tiers communiquant avec i-doit devraient également être à jour en tout temps.

Il est inconfortable d'installer les mises à jour manuellement. Lorsque vous n'utilisez pas l'automatisation et un système de contrôle centralisé, vous pouvez laisser les mises à jour à l'opération du système. Debian GNU/Linux propose l'application des [mises à jour non assistées](https://wiki.debian.org/UnattendedUpgrades). Avec cette fonction, vous pouvez obtenir les dépôts de paquets et effectuer des mises à jour (de sécurité) et même des mises à niveau des paquets. De plus, les administrateurs sont informés par e-mail.

### Système d'exploitation minimal

Un système d'exploitation minimal se caractérise par le fait que seules les applications et les services vraiment essentiels à son fonctionnement sont installés. **Le but est de limiter l'ensemble du système à sa fonction principale (dans notre cas : i-doit).** Cela signifie que nous avons essentiellement besoin d'Apache, PHP et MariaDB/MySQL et de quelques applications et services supplémentaires, qui sont mentionnés dans cet article. Tout le reste, comme une interface utilisateur graphique avec un bureau, un service d'impression ou un serveur Minecraft, peut être ignoré.

Dans une certaine mesure, une installation habituelle implique un bagage inutile et notre objectif principal est de nous débarrasser de ce fardeau. Dans cette optique, nous devrions examiner de plus près les processus en cours d'exécution et les ports ouverts :

# Services en cours d'exécution administrés par Systemd:
```bash
systemctl list-units
```
# Afficher clairement les processus en cours d'exécution et les ressources système:
```bash
htop
```
# Ports actuellement ouverts:
```bash
sudo netstat -tulpen
```
Les composants inutiles peuvent être désactivés, arrêtés ou même supprimés du système.
Voici un exemple:

# Exemple: Désactiver et arrêter le service d'impression CUPS:
```bash
sudo systemctl disable cups.service
sudo systemctl stop cups.service
```
# Supprimer le service d'impression CUPS:
```bash
sudo apt remove cups
```
# Supprimer le service d'impression CUPS y compris la configuration:
```bash
sudo apt purge cups
```
**Le principe du minimum ne s'applique pas seulement au système d'exploitation, mais aussi aux services et applications installés.** Il existe de nombreux modules pour Apache et PHP autres que ceux réellement nécessaires au bon fonctionnement d'i-doit. Exemples: mod_proxy pour Apache ou xdebug pour PHP ne doivent être installés et activés que s'ils sont vraiment nécessaires.

Vous pouvez désactiver les modules avec ces commandes:

```bash
sudo a2dismod proxy
sudo phpdismod xdebug
```
Certains clients installent l'application web [phpMyAdmin](https://www.phpmyadmin.net/) car i-doit utilise MariaDB/MySQL en arrière-plan. Nous déconseillons fortement de le faire, car cela rend la base de données protégée accessible de l'extérieur. Au fil des années, phpMyAdmin a été un exemple négatif en ce qui concerne les failles de sécurité et cela pourrait aggraver les problèmes. phpMyAdmin est un outil utile, mais pas sur un système productif contenant des données sensibles.

### Sauvegarde et Restauration

**Les sauvegardes sont essentielles.** Si vous ne créez pas de sauvegardes, vous agissez avec une négligence grave. Le fait qu'il est crucial de réaliser des sauvegardes régulièrement devrait être clair pour tout le monde. Cependant, quelle est la meilleure approche ? Pour i-doit, nous avons préparé un article concernant la [sauvegarde et la récupération de la documentation IT](./backup-and-recovery/index.md). Dans cet article, nous avons laissé de côté la fréquence (quotidienne, hebdomadaire...) et les stratégies (sauvegarde complète, sauvegarde incrémentielle, sauvegarde différentielle, image) auxquelles vous devriez vous attaquer. Les organisations sont responsables de décider des directives à suivre, car les exigences en matière de solutions acceptables concernant la perte de données ainsi que les temps d'arrêt et de récupération sont différents pour chaque entreprise.

**Tout aussi important qu'une sauvegarde est la récupération des données, les restaurations.** Vous avez peut-être entendu ce qui suit : Si vous ne testez pas les restaurations, vous n'avez pas non plus de sauvegarde fonctionnelle.

Cela soulève une autre question importante : Que se passe-t-il si l'infrastructure complète n'est pas disponible et que la documentation informatique est également affectée ? Notre conseil : **Une deuxième instance qui fonctionne indépendamment du reste de l'infrastructure informatique** est très utile. De nombreux clients utilisent i-doit sur une machine virtuelle. Vous pouvez exporter régulièrement la machine virtuelle et la conserver en lieu sûr, par exemple sur une clé USB dans un coffre ignifuge. C'est en quelque sorte une veille à froid, au sens propre du terme. En cas d'urgence, vous pouvez lancer la machine virtuelle sur un ordinateur portable. Pour une compatibilité maximale, vous pouvez utiliser le [format de fichier OVF](https://fr.wikipedia.org/wiki/Open_Virtualization_Format) pour les machines virtuelles. Ce format est pris en charge par les virtualiseurs actuels, tels que VMware et VirtualBox.

### Sécurisation de MariaDB/MySQL

L'outil en ligne de commande **mysql_secure_installation** prend en charge la tâche des **mesures de sécurisation de base pour Maria DB/MySQL**. Entre autres, il configure un mot de passe pour l'utilisateur root (si cela n'a pas encore été fait). Ensuite, nous devrions nous familiariser avec le SGBD. Pour ce faire, nous nous connectons en tant que root :

```mysql
mysql -uroot -p -hlocalhost
```

Maintenant, nous essayons d'obtenir un aperçu des utilisateurs actuels :

```mysql
SELECT * FROM mysql.user;
```

Nous devrions supprimer les entrées non désirées. Les utilisateurs non désirés ont un joker (%) sous l'hôte ou des adresses accessibles depuis l'extérieur. Les hôtes localhost, 127.0.0.1 (IPv4) et ::1 (IPv6) sont les bienvenus.

Il est important que le service ne soit pas accessible depuis l'extérieur. Souvent, le service s'exécute sur le port par défaut 3306. Pour MariaDB/MySQL, il existe également des **pare-feu d'application** dédiés. Entre autres, ils sont capables de prévenir les requêtes SQL endommagées. Pour l'instant, nous n'avons pas de recommandation spécifique.

### Sécurisation de PHP

Nous ne nous joignons pas aux critiques habituelles concernant PHP car nous pouvons "sécuriser" adéquatement le langage de script pour nos besoins. Un message important est le suivant : **PHP doit toujours être à jour avec le dernier correctif**. À cet égard, vous devez tenir compte des principales versions de PHP (5.x, 7.x) prises en charge par les développeurs PHP et des paquets PHP pris en charge par la distribution utilisée. Souvent, les distributions ne comptent pas sur les dernières versions majeures, mais maintiennent des versions plus anciennes et plus stables. Celles-ci sont corrigées avec des correctifs de bogues et de sécurité. Par conséquent, vous devriez toujours télécharger les mises à jour de PHP le plus rapidement possible.

Nous avons déjà décrit les paramètres requis pour le fonctionnement de i-doit dans la [gestion des locataires](../system-administration/administration/tenant-management/index.md). **Vous pouvez compléter ces paramètres par des paramètres supplémentaires.** Pour ce faire, nous créons un nouveau fichier.ini :

    sudo éditeur /etc/php/7.2/mods-available/zz_security.ini

Effectuez les réglages suivants :

    ;; Restriction aux répertoires auxquels PHP peut accéder :
    open_basedir = "/var/www/html/i-doit/:/tmp/"

    ;; Désactiver les méthodes inutiles :
    disable_functions = pcntl_alarm,pcntl_fork,pcntl_waitpid,pcntl_wait,pcntl_wifexited,pcntl_wifstopped,pcntl_wifsignaled,pcntl_wifcontinued,pcntl_wexitstatus,pcntl_wtermsig,pcntl_wstopsig,pcntl_signal,pcntl_signal_dispatch,pcntl_get_last_error,pcntl_strerror,pcntl_sigprocmask,pcntl_sigwaitinfo,pcntl_sigtimedwait,pcntl_exec,pcntl_getpriority,pcntl_setpriority,

    ;; Ne pas envoyer la version de PHP utilisée dans les en-têtes HTTP :
    expose_php = Off

Ensuite, les paramètres doivent être activés :

    sudo php5enmod zz_security
    sudo systemctl restart apache2.service



Le **module de sécurité** **[Suhosin](https://suhosin.org/)** est disponible pour PHP. Il affecte profondément la mise en œuvre des méthodes PHP. En partie, cela a du sens, mais cela peut également entraîner le risque de compromettre le bon fonctionnement à 100% d'i-doit. Pour le moment, nous ne pouvons pas recommander de paramètres spécifiques.

### Chiffrement des transports

i-doit est une application client-serveur, autrement dit, il existe une instance serveur qui communique avec une instance client via un réseau. De plus, i-doit est capable de communiquer via des interfaces avec d'autres instances serveur, par exemple, [LDAP](../user-authentication-and-management/ldap-directory/index.md) pour l'enregistrement des utilisateurs.

Afin de sécuriser ces connexions de communication, vous pouvez utiliser le chiffrement des transports via TLS. Par exemple, vous pouvez équiper le serveur web Apache d'un certificat X.509 fiable, de sorte qu'un navigateur web puisse **accéder à la documentation IT via HTTPS**. Vous devez garder à l'esprit de nombreuses choses en relation avec les certificats, telles que la période de validité, la chaîne de confiance, les chiffres et les hachages utilisés. Mozilla propose un [générateur adapté pour la configuration Apache](https://mozilla.github.io/server-side-tls/ssl-config-generator/) et fournit beaucoup d'informations de [fond sur le TLS côté serveur](https://wiki.mozilla.org/Security/Server_Side_TLS). D'autres bonnes sources sont les [SSL Labs de Qualys](https://www.ssllabs.com/ssltest/) et le site web [securityheaders.io](http://securityheaders.io) qui effectuent également des tests appropriés de la configuration.

Voici un exemple pour Debian GNU/Linux 8.x pour établir différents types de mécanismes de sécurité. Vous devez ajuster les chemins et les noms de domaine correspondants :

```apache
<IfModule mod_headers.c>
    ## Voir <https://securityheaders.io/> :
    Header always set Content-Security-Policy "default-src 'unsafe-inline' 'unsafe-eval' data: http://i-doit.example.net:80 https://i-doit.example.net:443"
    Header always set X-Frame-Options "SAMEORIGIN"
    Header always set X-XSS-Protection "1; mode=block"
    Header always set X-Content-Type-Options "nosniff"

    ## Éviter les informations sur le serveur Web :
    Header unset Server
</IfModule>

## Éviter les informations sur le serveur Web :
ServerSignature Off
ServerTokens Prod

<IfModule mod_ssl.c>
    ## Voir <https://mozilla.github.io/server-side-tls/ssl-config-generator/> :
    SSLProtocol all -SSLv3 -TLSv1 -TLSv1.1
    SSLCipherSuite ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-CHACHA20-POLY1305:ECDHE-RSA-CHACHA20-POLY1305:ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-SHA384:ECDHE-RSA-AES256-SHA384:ECDHE-ECDSA-AES128-SHA256:ECDHE-RSA-AES128-SHA256
    SSLHonorCipherOrder on
    SSLCompression off
</IfModule>
```

```apache
            SSLUseStapling  on
            SSLStaplingResponderTimeout     5
            SSLStaplingReturnResponderErrors        off
            SSLStaplingCache        shmcb:/var/run/ocsp(128000)

            Header always set Strict-Transport-Security "max-age=15768000; includeSubDomains"
    </IfModule>

    <IfModule mod_ssl.c>
            <VirtualHost *:443>
                    ServerAdmin info@i-doit.example.net
                    Servername i-doit.example.net

                    DocumentRoot /var/www/html/

                    <Directory /var/www/html/>
                            Options FollowSymLinks
                            AllowOverride All
                    </Directory>

                    CustomLog /var/log/apache2/access.log combined
                    ServerSignature Off

                    LogLevel info ssl:warn
                    ErrorLog ${APACHE_LOG_DIR}/error.log

                    SSLEngine on

                    SSLCertificateFile      /etc/ssl/i-doit.example.net.crt
                    SSLCertificateKeyFile   /etc/ssl/i-doit.example.net.key
```

## Faites savoir à i-doit certains paramètres SSL (voir <https://httpd.apache.org/docs/2.4/mod/mod_ssl.html#ssloptions>):
<FilesMatch "\.(php)$">
    SSLOptions +StdEnvVars
</FilesMatch>
</VirtualHost>
</IfModule>

**La sécurisation supplémentaire à l'aide de certificats clients** va encore plus loin avec cette méthode. Ici, non seulement le client vérifie la fiabilité du certificat du serveur, mais le serveur web vérifie également l'authenticité du navigateur web.

### Chiffrement des données

**Le chiffrement des disques durs/SSD protège vos données en cas de vol.** Il est donc courant de chiffrer les données sur les clients, ce qui est également requis dans les [normes courantes](https://www.bsi.bund.de/EN/Home/home_node.html). Le chiffrement est plutôt rare pour les serveurs car il est souvent considéré comme gênant en termes d'administration. Heureusement, il est plutôt rare que des serveurs soient volés et il existe d'autres mesures de protection qui peuvent empêcher le vol. Cependant, si le matériel sur lequel i-doit fonctionne n'est pas situé dans votre propre centre de données mais est fourni par une entreprise de services, vous voudrez peut-être prendre des mesures et envisager le chiffrement des données. Parfois, dans les petites entreprises, i-doit est même installé sur des ordinateurs portables.

Lorsque vous décidez de chiffrer vos données, vous avez plusieurs possibilités : Sous GNU/Linux, vous pouvez utiliser le commun dm-crypt/LUKS. De nombreuses distributions offrent déjà un encodage des données lors du processus d'installation. Sous Windows, vous pouvez utiliser BitLocker et Veracrypt.

### Pare-feu et Ports Ouverts

**Chaque port qui n'est pas ouvert vers l'extérieur contribue à réduire les vecteurs d'attaque.** Comme i-doit est une application web, les ports 80 et 443 sont souvent suffisants. Apache peut être limité avec le paramètre Lists dans le fichier /etc/apache2/ports.conf et une configuration VHost appropriée. En aucun cas MariaDB/MySQL ne devrait être accessible depuis l'extérieur. Pour administrer le système via SSH, un port doit être ouvert (port par défaut : 22).

**Mais méfiez-vous de la "Sécurité par l'Obscurité" car cette méthode est une mesure de protection extrêmement faible.** Avec cette méthode, vous utilisez des ports non par défaut composés de quatre ou cinq chiffres. Apache fonctionne souvent sous le port 8080 et SSH sous le port 8022. Cette méthode ne représente pas un grand défi pour un attaquant, car les scanners de ports comme nmap peuvent trouver ces ports ouverts sans aucun problème.

Prévenir l'ICMP (par exemple, utilisé par ping) est également [une mauvaise idée](http://shouldiblockicmp.com/).

Si vous ne pouvez pas limiter un service par le biais de votre propre configuration, un pare-feu peut aider. Un **pare-feu d'application** pratique sous GNU/Linux est ufw que vous pouvez activer en quelques étapes seulement et qui configure des règles pour iptables en arrière-plan :

    sudo apt install ufw
    sudo ufw allow 80/tcp
    sudo ufw allow 443/tcp
    sudo ufw allow 22/tcp
    sudo ufw disable
    sudo ufw enable

Un **pare-feu d'application web** est particulièrement adapté aux serveurs web. Une application très populaire est [mod_security](https://www.digitalocean.com/community/tutorials/how-to-set-up-mod_security-with-apache-on-debian-ubuntu), qui est une extension pour Apache.

Un **pare-feu dédié externe** est très utile, mais bien sûr, sa mise en œuvre et son fonctionnement sont plus complexes. i-doit devrait être activé pour rechercher des mises à jour et accéder aux dépôts en ligne (par exemple, pour les [rapports](../evaluation/report-manager.md) et les [modèles](../i-doit-pro-add-ons/documents/index.md)) :


| Hôte | Protocole | Port | Description |
| --- | --- | --- | --- |
| **[login.i-doit.com](https://login.i-doit.com)** | **HTTPS** | **443** | Téléchargement des mises à jour pour i-doit et ses modules complémentaires |
| **[reports-ng.i-doit.org](https://reports-ng.i-doit.org)** | **HTTPS** | **443** | Dépôts en ligne (par exemple, pour [rapports](../evaluation/report-manager.md)) |
| **[r.i-doit.com](https://r.i-doit.com)** | **HTTPS** | **443** | Dépôts en ligne (par exemple, pour [modèles](../i-doit-pro-add-ons/documents/index.md)) |
| **[news.i-doit.com](https://news.i-doit.com)** | **HTTPS** | **443** | Actualités sur i-doit dans le tableau de bord (version ouverte) |
| **[i-doit.com](https://www.i-doit.com/en/)** | **HTTPS** | **443** | Recherche de mises à jour de la version pro |
| **[i-doit.org](https://i-doit.org)** | **HTTPS** | **443** | Recherche de mises à jour de la version pro |
| **[crm-gateway.i-doit.com](https://crm-gateway.i-doit.com)** | **HTTPS** | **443** | Récupère les téléchargements disponibles via le jeton de licence |
| **[lizenzen.i-doit.com](https://lizenzen.i-doit.com)**  | **HTTPS** | **443** | Récupérer les licences via le jeton

Si une ou plusieurs interfaces vers des applications tierces sont configurées, vous devez également activer l'accès respectivement :

| Interface | Protocole | Port par défaut |
| --- | --- | --- |
| [Envoi d'e-mails](../evaluation/notifications.md) | **SMTP** | **25/465/587** |
| [LDAP/AD](../user-authentication-and-management/ldap-directory/index.md) | **LDAP** | **389/636** |
| Livestatus | **Livestatus** | **6557** |
| NDOUtils/IDOUtils | **MySQL** | **3306** |
| [((OTRS)) Community Edition Help Desk](../automation-and-integration/service-desk/otrscommunity-help-desk.md), [Request Tracker](../automation-and-integration/service-desk/request-tracker.md), iTop | **HTTP/HTTPS** | **80/443** |
| [JDisc Discovery](../consolidate-data/jdisc-discovery.md) | **PostgreSQL** | **25321** |
| [JDisc Discovery graphQL](../consolidate-data/jdisc-discovery.md) | **HTTPS** | **443** |
| [JDisc Discovery](../consolidate-data/jdisc-discovery.md) | **HTTP** | **9000** |
| OCS Inventory NG | **MySQL** | **3306** |

### Cadres de sécurité

Les cadres de sécurité fournissent une protection supplémentaire garantissant que les services, les applications et les utilisateurs ne peuvent effectuer que des opérations autorisées. [SELinux](https://en.wikipedia.org/wiki/Security-Enhanced_Linux) et [AppArmor](https://en.wikipedia.org/wiki/AppArmor) sont courants sous GNU/Linux. Ils sont inclus dans la plupart des distributions, mais sont désactivés dans de nombreux cas. Il est utile pour i-doit de limiter Apache afin que le service **ne puisse accéder qu'à certains répertoires avec des autorisations de lecture et/ou d'écriture correspondantes**.

Actuellement, il y a un bug dans selinux-policy-default sous Debian GNU/Linux qui empêche une application sensée de SELinux. À une date ultérieure, nous explorerons en profondeur ce problème.

### Défense automatique contre les attaques

**De nos jours, vous ne pouvez gérer et repousser les attaques qu'à un stade précoce de manière automatisée.** Un petit mais excellent outil pour vous aider est [fail2ban](http://www.fail2ban.org/). Il analyse en continu les fichiers journaux des services actuels pour reconnaître les attaques. Par conséquent, fail2ban est capable de contrer très rapidement les attaques par force brute sur SSH. Vous pouvez configurer les paramètres de telle sorte que l'adresse IP correspondante soit désactivée via iptables après trois échecs de connexion successifs.

fail2ban propose des geôles préconfigurées pour SSH, Apache et MariaDB/MySQL.

Après l'installation de i-doit
--------------------------------

Directement après l'installation, nous prenons d'autres mesures.

### Autorisations dans le système de fichiers

**Le système de fichiers offre de nombreuses possibilités pour exclure l'accès non autorisé au code et aux données.** Debian GNU/Linux applique généralement Ext4 à cette fin. Pour cela, vous pouvez utiliser les outils standard chown, chmod et chattr :

# Accédez au répertoire d'installation de i-doit :
cd /var/www/html/i-doit

# Apache doit avoir un contrôle total sur les fichiers et répertoires :
sudo chown www-data:www-data -R .

# Nous limitons ce contrôle à la lecture et à l'exécution :

sudo find . -type d -name \* -exec chmod 550 {} \;

sudo find . -type f -exec chmod 440 {} \;

sudo chmod 550 controller tenants import updatecheck *.sh

# Nous scellons ces droits, de sorte que même root ne puisse rien changer :
sudo chattr -R +i .

# Eh bien, i-doit devrait être autorisé à écrire dans certains répertoires :
for dir in "log/ imports/ temp/ upload/"; do sudo chattr -R -i "$dir" && sudo find "$dir" -type d -name \* -exec chmod 770 {} \;; done

Certaines restrictions doivent être temporairement annulées lors d'une mise à jour de i-doit :

# Accédez au répertoire d'installation de i-doit :
cd /var/www/html/i-doit
sudo chattr -R -i .
sudo find . -type d -name \* -exec chmod 775 {} \;
sudo find . -type f -exec chmod 664 {} \;
sudo chmod 774 controller *.sh setup/*.sh
```

### Mots de passe sécurisés 

Ceux qui veulent simplement configurer rapidement i-doit à des fins de test oublient malheureusement souvent de tenir compte des mots de passe sécurisés. Ce ne devrait pas être le cas : si vous choisissez **des mots de passe sécurisés dès le début**, vous n'aurez pas à vous soucier de remédier à ces éventuelles failles de sécurité par la suite. Les mots de passe spécifiques sont les suivants :

- Utilisateur MySQL configuré par i-doit pour les bases de données
- Utilisateur pour le Centre d'administration
- Utilisateur par défaut dans i-doit (admin, lecteur, auteur, éditeur)

#### Utilisateur MySQL

Cet utilisateur est déjà créé lors de la [configuration](../installation/manual-installation/setup.md). Le mot de passe peut être modifié ultérieurement avec quelques commandes SQL. Nous supposons que l'utilisateur est appelé idoit et que le nom de la [base de données système](../software-development/database-model/index.md) est idoit_system. Tout d'abord, vous vous connectez :

```bash
mysql -uroot -p -hlocalhost
```

Ensuite, vous changez le mot de passe :

```sql
ALTER USER 'idoit'@'localhost' IDENTIFIED BY 'thisistotallysecure!!11';
```

Ce mot de passe doit également être communiqué à i-doit. Tout d'abord dans la base de données du système, afin que les [bases de données des locataires](../software-development/database-model/index.md) puissent être accessibles :

    UPDATE idoit_system.isys_mandator SET isys_mandator__db_pass = 'cesttotalementsécurisé!!11' WHERE isys_mandator__db_user = 'idoit';

Enfin, le mot de passe doit être stocké dans la configuration centrale, afin que la base de données du système puisse être accessible. Cela peut être fait soit sous **Config** dans le Centre d'administration, soit dans le fichier src/config.inc.php dans le répertoire d'installation de i-doit.

#### Utilisateur pour le Centre d'administration

Cet utilisateur est également créé lors de la configuration initiale. Ensuite, vous pouvez changer le mot de passe sous Config. Alternativement, vous pouvez modifier le fichier src/config.inc.php.

#### Utilisateur par défaut dans i-doit

Les utilisateurs admin, reader, author et editor sont déjà générés lors de la configuration initiale. La meilleure pratique est de ne jamais utiliser ces utilisateurs mais de créer un [objet personne](../basics/structure-of-the-it-documentation.md) pour chaque utilisateur à la place. Les objets personne pour admin etc. ne peuvent pas être supprimés, mais archivés. De cette manière, vous excluez la connexion. Si vous ne voulez pas vous passer de ces utilisateurs par défaut, vous devriez changer d'urgence leurs mots de passe car ils sont identiques au nom d'utilisateur. Vous pouvez implémenter les changements dans l'objet personne respectif dans la catégorie **Personnes → Connexion**. 



#### Utilisateur par défaut sous Linux 

Un utilisateur par défaut est déjà créé lors de l'installation du système d'exploitation. Cet utilisateur par défaut mérite également un mot de passe sécurisé que vous pouvez changer rétroactivement avec:

    passwd

### Activation des jetons CSRF

i-doit fournit plusieurs mesures pour entraver les attaques appelées [**Cross-Site-Request-Forgery** (CSRF ou XSRF)](https://fr.wikipedia.org/wiki/Cross-site_request_forgery). Vous pouvez activer ces mesures sous **Administration → Paramètres système → Sécurité → Jeton CSRF** en choisissant **Oui**.

### Authentification à deux facteurs

De nos jours, une connexion avec seulement un nom d'utilisateur et un mot de passe est considérée comme obsolète. **Des mécanismes d'authentification supplémentaires offrent un gain en sécurité.** Lorsqu'un mécanisme supplémentaire est appliqué, la méthode est appelée authentification à deux facteurs ; lorsque plus de deux facteurs sont appliqués, cela s'appelle une authentification multi-facteurs. Une forme courante de mise en œuvre est l'application d'un jeton (USB).

i-doit permet des mécanismes supplémentaires via le serveur web Apache sous-jacent. Par exemple, la [**procédure de connexion unique**](../user-authentication-and-management/sso-comparison/index.md) en est basée. La procédure peut être utilisée pour activer et configurer d'autres mécanismes directement dans le serveur web. Tant que la procédure informe i-doit via des en-têtes HTTP pertinents pour quel utilisateur l'authentification a réussi, les possibilités sont pratiquement illimitées.

### Surveillance et Journaux

Toutes les mesures affectées doivent être surveillées en permanence, de préférence de manière automatisée.

Le système est entre de bonnes mains dans un [Surveillance Réseau](../automation-and-integration/network-monitoring/index.md), tel que Nagios ou Check\_MK. Il n'y a presque rien qui ne puisse être surveillé de cette manière. Par exemple, il est important de garder un œil sur le système d'exploitation et le matériel (virtuel) avec les processus en cours, la consommation de mémoire, les utilisateurs connectés, les mises à jour disponibles, etc. **Pour i-doit, vous devriez vous assurer que Apache, MariaDB/MySQL et l'espace de stockage disponible sont surveillés.**

En plus de la surveillance réseau, il existe d'autres services qui **surveillent les journaux**. Avant de commencer avec l'installation d'un serveur de journaux complet (par exemple, [Logstash](https://www.elastic.co/products/logstash)), vous pourriez essayer des outils plus petits, comme [Logwatch](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-logwatch-log-analyzer-and-reporter-on-a-vps). Logwatch surveille les fichiers journaux d'Apache, SSH et d'autres services et envoie un rapport facile à lire par e-mail sur une base quotidienne. 



De plus, i-doit produit constamment des fichiers journaux. Vous pouvez les trouver dans le répertoire d'installation sous le répertoire log/. Il vaut la peine d'évaluer les journaux (régulièrement), non seulement lorsque vous êtes [à la recherche d'erreurs](../system-administration/troubleshooting/index.md).

Après que les [Cronjobs](../automation-and-integration/cli/index.md) ont été configurés, personne ne semble plus s'y intéresser. Cependant, cela peut être désastreux, car personne ne remarque peut-être quand quelque chose ne va pas pendant l'exécution automatique. Par conséquent, il est conseillé de **rediriger les sorties des tâches en cours dans des fichiers journaux** et d'envoyer des e-mails, si nécessaire.

En parlant d'e-mails : lorsque vous souhaitez que le système envoie des e-mails (comme le fait Logwatch quotidiennement), vous devriez tester le processus au préalable. Un serveur SMTP approprié devrait être accessible. Il peut être utile d'utiliser un service simple, comme [sSMTP](https://wiki.debian.org/sSMTP), en tant que serveur relais.

Une autre possibilité pour vérifier constamment le système à la recherche de failles depuis l'extérieur est l'application d'un scanner de vulnérabilité, comme [OpenVAS](http://www.openvas.org)[.](http://www.openvas.org/)

Penser en dehors de la boîte
------------------------

Il existe de nombreuses autres mesures qui vont au-delà de l'installation réelle, mais qui méritent d'être soulignées.

### Haute disponibilité

!!! info "Vraiment nécessaire?"

    Souvent, les gens nous demandent comment configurer i-doit de la manière la plus efficace. Rapidement, l'accent est mis sur les systèmes redondants, mais dans la plupart des cas, un tel système est surdimensionné et trop complexe. Avant de prendre un marteau-piqueur pour casser une noix et d'utiliser un énorme appareil matériel et logiciel pour votre documentation informatique, il est préférable de mettre en place un (!) système simple mais sophistiqué et de le maintenir régulièrement. Autant que nous le sachions, aucun client n'a encore demandé un système redondant pour i-doit pour des raisons de performance, car les exigences du système sont plutôt modérées. i-doit fonctionne parfaitement avec les exigences déclarées même en cas de a) nombreuses données et b) nombreux utilisateurs travaillant en même temps.

Pour améliorer la disponibilité de la documentation informatique, il peut être utile de faire fonctionner les services individuels de manière **redondante** et sur des systèmes dédiés (Bare Metal, VM ou Conteneur). Pour faire fonctionner i-doit, vous avez besoin d'un serveur web Apache qui peut être contrôlé de manière redondante par un ou même plusieurs équilibreurs de charge. Vous pouvez stocker les bases de données sur un cluster MariaDB, qui est administré, par exemple, par [MaxScale](https://mariadb.com/products/mariadb-maxscale). Les données stockées par i-doit dans le système de fichiers peuvent être enregistrées dans un système de stockage (distribué). Et également le cache, qui est administré par memcached, peut être remplacé.

Mais cela suffit pour un autre article.

Pour commencer à petite échelle, vous devriez examiner de plus près le matériel sous-jacent : le RAID, la protection de la mémoire ECC pour la RAM et les unités d'alimentation redondantes (avec des courants de phase vraiment différents, idéalement protégés par un USP, un générateur, etc.) sont des mesures préventives courantes.

### Réseau fiable

Vous devriez également tenir compte de l'infrastructure réseau dans laquelle le système i-doit s'exécute et est accessible.

Une méthode peut être une séparation directe d'Internet. Un **proxy HTTP** permettrait au système de télécharger des mises à jour.

Une autre mesure est l'application d'un **réseau dédié à l'administration**. Ainsi, vous pourriez mettre le port ouvert pour SSH à l'abri des attaques. Seule la fonction principale, le serveur web Apache, serait accessible. Nous vous laissons le soin de décider si vous y parvenez en séparant physiquement les sous-réseaux ou en utilisant des VLAN ou VPN.

### IPv4 versus IPv6

Pour bon nombre des mesures décrites, il est indifférent que l'IP soit utilisée en version 4 ou 6. IPv6 n'est pas largement utilisé dans les organisations. Si IPv6 n'est pas du tout utilisé (ce qui serait dommage), il devrait être désactivé. Cependant, si vous l'utilisez, vous devriez le traiter aussi sûrement que l'IPv4. Si des services écoutent à l'extérieur avec des ports ouverts, vous devriez effectuer les mêmes réglages pour l'IPv4 ainsi que pour l'IPv6. Si nécessaire, personnalisez les règles du pare-feu.

Le routage et l'attribution d'adresses dans les réseaux IPv6 diffèrent des réseaux IPv4. Si vous ne faites pas attention, vous pourriez accidentellement rendre le système accessible à l'Internet mondial, bien que cela ait été exclu avec IPv4.

Liens supplémentaires
----------------

Si vous souhaitez approfondir le sujet (et qui ne le voudrait pas après avoir étudié cet article ?), vous pouvez trouver plus d'informations ici :

*   L'article de blog "[Mes premières 10 minutes sur un serveur - Guide pour sécuriser Ubuntu](https://www.codelitt.com/blog/my-first-10-minutes-on-a-server-primer-for-securing-ubuntu/)" est un bon point de départ pour une administration (sécurisée) d'un système d'exploitation Linux.
*   En relation avec la norme IT-Grundschutz (norme pour la protection informatique de base), l'Office fédéral allemand de la sécurité des technologies de l'information (BSI) publie des [catalogues IT-Grundschutz](https://www.bsi.bund.de/EN/Home/home_node.html) qui répertorient de nombreux risques affectant l'informatique au quotidien. De plus, le BSI propose des mesures adaptées pour minimiser les risques. Dans de nombreux cas, les catalogues servent de source pour d'autres normes et normes, telles que l'ISO27001. En particulier, les composants suivants du catalogue sont une lecture intéressante pour le fonctionnement sécurisé de i-doit : B 3.101 Serveur général, B 3.102 Serveurs sous Unix, B 3.304 Virtualisation, B 5.4 Serveurs Web, B 5.7 Bases de données, B 5.21 Applications Web, B 5.24 Services Web. Vous pouvez télécharger le dernier catalogue depuis le [site Web international IT-Grundschutz](https://www.bsi.bund.de/EN/Home/home_node.html).
*   Le [Projet de sécurité des applications Web ouvertes (OWASP)](https://www.owasp.org/index.php/Main_Page) est une ONG à but non lucratif dédiée à assurer la sécurité des informations des applications Web. Ils mettent en évidence les scénarios d'attaques actuels, mais aussi les mesures pour minimiser les risques.

