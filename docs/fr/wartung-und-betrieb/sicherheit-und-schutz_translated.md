<!-- TRANSLATED by md-translate -->
# Sicherheit und Schutz

# Sécurité et protection

Die IT-Dokumentation umfasst in vielen Fällen sehr sensible Daten, die geschützt werden müssen. In diesem Artikel beleuchten wir, welche Schutzmechanismen greifen, um eine Installation von i-doit abzusichern. Insbesondere arbeiten wir auf die Schutzziele Vertraulichkeit, Integrität, Verfügbarkeit, Authentizität und Autorisierung hin.

Dans de nombreux cas, la documentation informatique comprend des données très sensibles qui doivent être protégées. Dans cet article, nous mettons en lumière les mécanismes de protection qui permettent de sécuriser une installation d'i-doit. Nous nous concentrons en particulier sur les objectifs de protection que sont la confidentialité, l'intégrité, la disponibilité, l'authenticité et l'autorisation.

!!!info "Warum ist dieser Artikel so lang?"

!!!info "Pourquoi cet article est-il si long ?"

```
Zugegeben, der Artikel ist lang. Das Thema Informationssicherheit von Web-Applikationen ist ein sehr weites Feld, über das man lang und breit diskutieren kann.

Trotzdem: Aufgrund der Masse an sinnvollen Maßnahmen kratzen wir lediglich an der Oberfläche und verweisen zu weiterführenden Informationen, wo es nur geht. Dieser Artikel ist daher als Ideensammlung gedacht. Die einzelnen Maßnahmen sollten stets mit gesundem Menschenverstand und dem notwendigen Know How hinterfragt werden.
```

!!!info "Warum nicht Teil der Installation?"

!!!info "Pourquoi ne pas faire partie de l'installation ?"

```
Die hier aufgeführten Tipps gehören nicht zum normalen Umfang einer [Installation von i-doit](../installation/index.md) und stellen keine [Systemanforderungen](../installation/systemvoraussetzungen.md) dar. Es handelt sich um zusätzliche Sicherheitsmaßnahmen, die überwiegend das Betriebssystem und die installierten Pakete betreffen.
```

## Vor der Installation von i-doit

## Avant d'installer i-doit

Bevor i-doit [installiert](../installation/index.md) wird, können wir bereits einige Maßnahmen durchführen, um das System, auf dem i-doit fußt, zu härten. Als Beispiel dient ein [Debian GNU/Linux](../installation/manuelle-installation/debian.md), auf dem i-doit installiert ist bzw. werden soll.

Avant d'installer [i-doit](../installation/index.md), nous pouvons déjà prendre quelques mesures pour durcir le système sur lequel i-doit est basé. Nous prenons comme exemple une [Debian GNU/Linux](../installation/manuelle-installation/debian.md) sur laquelle i-doit est ou doit être installé.

### Weniger Rechte ist mehr

### Moins de droits, c'est plus

Wer auf dem Betriebssystem mit einem Benutzer angemeldet ist, der nicht von vornherein alle Rechte besitzt, kann potenziell weniger (unabsichtlichen) Schaden anrichten. **Auf die Anmeldung als Superuser (root) sollte verzichtet werden.** Etabliert hat sich stattdessen der Einsatz von [sudo](https://wiki.debian.org/sudo), um temporär Befehle mit den Rechten von root ausführen zu können.

Si l'on se connecte au système d'exploitation avec un utilisateur qui ne possède pas d'emblée tous les droits, on peut potentiellement causer moins de dommages (involontaires). **Il est préférable de ne pas se connecter en tant que super-utilisateur (root). L'utilisation de [sudo](https://wiki.debian.org/sudo) pour pouvoir exécuter temporairement des commandes avec les droits de root s'est établie à la place.

Viele Dienste laufen mit eigenen Usern/Gruppen. Apache unter Debian GNU/Linux läuft mit dem User www-data und der gleichnamigen Gruppe.

De nombreux services fonctionnent avec leurs propres utilisateurs/groupes. Apache sous Debian GNU/Linux fonctionne avec l'utilisateur www-data et le groupe du même nom.

### SSH absichern

### Sécuriser SSH

Neben Apache ist SSH der einzige Dienst, der von außen zu erreichen ist. **SSH dient der Administration des Systems über die Kommandozeile.** Die Konfiguration des SSH-Servers befindet sich unter **/etc/ssh/sshd_config**. Die Standard-Installation bietet bereits ein gutes Maß an Sicherheit, die wir allerdings noch weiter erhöhen können.

Outre Apache, SSH est le seul service accessible depuis l'extérieur. **SSH sert à l'administration du système via la ligne de commande.** La configuration du serveur SSH se trouve sous **/etc/ssh/sshd_config**. L'installation standard offre déjà un bon niveau de sécurité, que nous pouvons toutefois encore augmenter.

Um gängige Brute-Force-Attacken einzuschränken, sollte die Anmeldung mit dem Superuser (root) nicht erlaubt sein:

Pour limiter les attaques par force brute courantes, la connexion avec le superutilisateur (root) ne devrait pas être autorisée :

```
PermitRootLogin no
```

Anstatt sich Passwörter zu merken, bietet sich das Public-Key-Verfahren an. Dazu wird auf dem Client ein Paar aus Public und Private Key erzeugt:

Au lieu de mémoriser les mots de passe, la méthode de la clé publique s'impose. Pour ce faire, une paire de clés publique et privée est générée sur le client :

```
ssh-keygen -t rsa -f mykey -b 4096 -C myemail@example.org
```

Auf den Server wird anschließend der Public Key kopiert:

La clé publique est ensuite copiée sur le serveur :

```
ssh-copy-key -i ~/.ssh/mykey.pub idoitadm@i-doit.example.org
```

Und in der Konfiguration vom SSH-Server stellen wir das Verfahren von Passwörtern auf Public Keys um:

Et dans la configuration du serveur SSH, nous changeons la procédure des mots de passe en clés publiques :

```
PubkeyAuthentication yes
PasswordAuthentication no
```

Der SSH-Dienst muss anschließend neu gestartet werden:

Le service SSH doit ensuite être redémarré :

```
sudo systemctl restart ssh.service
```

### Update, Updates, Updates

### Mise à jour, mises à jour, mises à jour

Der wohl wichtigste Tipp ist: **Das System muss auf einem aktuellen Stand sein.** Im IT-Sprech: Ohne Patchmanagement funktioniert Informationssicherheit nicht. Insbesondere ist darauf zu achten, die i-doit-Installation auf dem neuesten Stand zu halten, das darunter liegende Betriebssystem, die Clients, die auf das i-doit zugreifen, inklusive Webbrowser. Auch Dritt-Systeme, die mit i-doit kommunizieren, sollten stets aktuell gehalten werden.

Le conseil le plus important est probablement : **Le système doit être à jour.** En langage informatique, la sécurité de l'information ne fonctionne pas sans gestion des correctifs. Il faut notamment veiller à ce que l'installation d'i-doit soit à jour, le système d'exploitation sous-jacent, les clients qui accèdent à i-doit, y compris les navigateurs Web. Les systèmes tiers qui communiquent avec i-doit doivent également être maintenus à jour.

Manuell Updates einspielen ist lästig. Wer keine zentrale Steuerung und Automatisierung einsetzt, kann die Updates dem Betriebssystem überlassen. Unter Debian GNU/Linux bieten sich die [Unattended Updates](https://wiki.debian.org/UnattendedUpgrades) an. Hierüber werden die Paket-Repositories abgerufen, (Sicherheits-)Updates bis hin zu Upgrades von Paketen durchgeführt. Zudem werden die Administratoren per E-Mail benachrichtigt.

Installer des mises à jour manuellement est fastidieux. Ceux qui n'ont pas recours à un contrôle centralisé et à l'automatisation peuvent laisser le système d'exploitation se charger des mises à jour. Sous Debian GNU/Linux, les [Unattended Updates](https://wiki.debian.org/UnattendedUpgrades) sont une bonne solution. Elles permettent de consulter les dépôts de paquets, d'effectuer des mises à jour (de sécurité) et même des mises à niveau de paquets. De plus, les administrateurs sont informés par e-mail.

### Minimales Betriebssystem

### Système d'exploitation minimal

Ein minimales Betriebssystem zeichnet sich dadurch aus, dass nur Anwendungen und Dienste installiert sind, die wirklich essentiell für den Betrieb sind. **Es gilt, das gesamte System auf seine Kernfunktion (hier: i-doit) zu beschränken.** Dass heißt, wir benötigen im Grunde nur Apache, PHP und MariaDB/MySQL. Und ein paar zusätzliche Anwendungen und Dienste, die in diesem Artikel erwähnt werden. Auf alles andere wie eine grafische Oberfläche mit Desktop, einen Drucker-Dienst oder einen Minecraft-Server kann getrost verzichtet werden.

Un système d'exploitation minimal se caractérise par le fait que seules les applications et les services qui sont vraiment essentiels au fonctionnement sont installés. **Il s'agit de limiter l'ensemble du système à sa fonction principale (ici : i-doit).** Cela signifie que nous n'avons besoin en principe que d'Apache, PHP et MariaDB/MySQL. Et quelques applications et services supplémentaires, mentionnés dans cet article. On peut sans problème renoncer à tout le reste, comme une interface graphique avec bureau, un service d'impression ou un serveur Minecraft.

Eine gewöhnliche Installation bringt teilweise unnötigen Ballast mit, von dem wir uns erst einmal befreien müssen. Dazu sollten wir uns die laufenden Prozesse und offenen Ports genauer anschauen:

Une installation ordinaire apporte parfois des charges inutiles dont nous devons d'abord nous débarrasser. Pour ce faire, nous devrions examiner de plus près les processus en cours et les ports ouverts :

```
# Laufende Dienste, die von Systemd verwaltet werden:
systemctl list-units

# Laufende Prozesse und Systemresourcen übersichtlich anzeigen lassen:
htop

# Derzeit offene Ports:
sudo netstat -tulpen
```

Was überflüssig ist, kann gestoppt, deaktiviert oder gar vom System gelöscht werden. Hier ein Beispiel:

Ce qui est superflu peut être stoppé, désactivé ou même supprimé du système. Voici un exemple :

```
# Beispiel: Druckerdienst CUPS deaktivieren und stoppen:
sudo systemctl disable cups.service
sudo systemctl stop cups.service

# Druckerdienst CUPS löschen:
sudo apt remove cups

# Druckerdienst CUPS inkl. Konfiguration löschen:

sudo apt purge cups
```

**Das Minimalprinzip gilt nicht nur für das Betriebssystem, sondern auch für die installierten Dienste und Anwendungen.** Für Apache und PHP gibt es weitaus mehr Module, als für den reibungslosen Betrieb von i-doit benötigt werden. Beispiele: mod_proxy für Apache oder xdebug für PHP sollten nur installiert und aktiviert sein, wenn diese wirklich benötigt werden.

**Le principe du minimum ne s'applique pas seulement au système d'exploitation, mais aussi aux services et applications installés.** Pour Apache et PHP, il existe bien plus de modules que ceux nécessaires au bon fonctionnement d'i-doit. Exemples : mod_proxy pour Apache ou xdebug pour PHP ne devraient être installés et activés que s'ils sont vraiment nécessaires.

Deaktivieren lassen sich die Module mit diesen Befehlen:

Les modules peuvent être désactivés à l'aide de ces commandes :

```
sudo a2dismod proxy
sudo phpdismod xdebug
```

Da i-doit im Hintergrund MariaDB/MySQL einsetzt, installieren einige Kunden die Web-Applikation [phpMyAdmin](https://www.phpmyadmin.net/). Wir raten dringend davon ab, denn dadurch wird die abgeschottete Datenbank nach außen hin verfügbar gemacht. phpMyAdmin ist in den vergangenen Jahren immer wieder durch Sicherheitslücken negativ aufgefallen, was die Problematik nochmals verschärfen könnte. phpMyAdmin leistet gute Dienste, aber nicht auf einem Produktivsystem mit sensiblen Daten.

Comme i-doit utilise MariaDB/MySQL en arrière-plan, certains clients installent l'application web [phpMyAdmin](https://www.phpmyadmin.net/). Nous le déconseillons vivement, car cela rend la base de données cloisonnée disponible à l'extérieur. phpMyAdmin s'est régulièrement fait remarquer de manière négative par des failles de sécurité au cours des dernières années, ce qui pourrait encore aggraver le problème. phpMyAdmin rend de bons services, mais pas sur un système productif contenant des données sensibles.

### Backup & Restore

### Sauvegarde et restauration

**Backups sind essentiell.** Wer keine Sicherungen macht, handelt grob fahrlässig. Dass Backups gemacht werden müssen, ist also jedem klar. Doch wie? Für i-doit haben wir einen eigenen Artikel zum [Sichern und Wiederherstellen der IT-Dokumentation](daten-sichern-und-wiederherstellen/index.md). Dabei haben wir außer acht gelassen, wie oft (täglich, wöchentlich, …) und mit welchen Strategien (Vollsicherung, inkrementell, differentiell, Image) vorgegangen werden sollte. Das bleibt auch jeder Organisation selbst überlassen, denn die Anforderungen an akzeptablem Datenverlust sowie Ausfall- und Wiederherstellungszeiten sind unterschiedlich.

**Les sauvegardes sont essentielles. Ne pas faire de sauvegardes, c'est faire preuve de négligence grave. Tout le monde sait donc qu'il faut faire des sauvegardes. Mais comment faire ? Pour i-doit, nous avons rédigé un article spécifique sur la [sauvegarde et la restauration de la documentation informatique](daten-sichern--und-wiederherstellen/index.md). Nous n'avons pas tenu compte de la fréquence (quotidienne, hebdomadaire, ...) ni des stratégies (sauvegarde complète, incrémentielle, différentielle, image). Cela est également laissé à l'appréciation de chaque organisation, car les exigences en matière de perte de données acceptable et de temps d'arrêt et de restauration sont différentes.

**Ebenso wichtig wie das Backup selbst ist die Wiederherstellung**, also der Restore. Wer den Restore nicht testet, hat auch kein funktionierendes Backup, heißt es oft.

**La restauration**, c'est-à-dire la restauration, est tout aussi importante que la sauvegarde elle-même. On dit souvent que celui qui ne teste pas la restauration n'a pas non plus de sauvegarde qui fonctionne.

Schnell kommt eine weitere wichtige Frage: Was ist, wenn die gesamte Infrastruktur nicht zur Verfügung steht und die IT-Dokumentation davon ebenso betroffen ist? Unser Tipp: Hierbei hilft **eine zweite Instanz, die unabhängig von der übrigen IT-Infrastruktur läuft**. Viele Kunden setzen i-doit auf einer virtuellen Maschine ein. Diese kann man regelmäßig exportieren und sicher verwahren, beispielsweise auf einem USB-Stick in einem feuerfesten Safe. Im wahrsten Sinne des Wortes ein Cold Standby. Im Fall des Falles kann man die virtuelle Maschine dann auf einem Notebook starten. Für die maximale Kompatibilität bietet sich das [OVF-Dateiformat](https://de.wikipedia.org/wiki/Open_Virtualization_Format) für virtuelle Maschinen an. Dieses Format wird von den gängigen Virtualisierern wie VMware und VirtualBox unterstützt.

Une autre question importante vient rapidement à l'esprit : que se passe-t-il si l'ensemble de l'infrastructure n'est pas disponible et que la documentation informatique en est également affectée ? Notre conseil : dans ce cas, **une deuxième instance, qui fonctionne indépendamment du reste de l'infrastructure informatique**, peut aider. De nombreux clients utilisent i-doit sur une machine virtuelle. Celle-ci peut être exportée régulièrement et conservée en toute sécurité, par exemple sur une clé USB dans un coffre-fort ignifugé. Au sens propre du terme, c'est un cold standby. En cas de besoin, on peut alors démarrer la machine virtuelle sur un ordinateur portable. Pour une compatibilité maximale, le [format de fichier OVF](https://de.wikipedia.org/wiki/Open_Virtualization_Format) est idéal pour les machines virtuelles. Ce format est supporté par les virtualisateurs les plus courants comme VMware et VirtualBox.

### MariaDB/MySQL absichern

### Sécuriser MariaDB/MySQL

**Die gröbste Absicherung von MariaDB/MySQL überlassen wir dem Kommandozeilenwerkzeug mysql_secure_installation.** Dies richtet unter anderem ein Passwort für den Benutzer root ein (wenn noch nicht geschehen). Anschließend sollten wir uns auf dem DBMS einmal umschauen. Dazu melden wir uns als root an:

**Nous laissons à l'outil de ligne de commande mysql_secure_installation le soin de sécuriser MariaDB/MySQL dans les grandes lignes.** Cela permet entre autres de définir un mot de passe pour l'utilisateur root (si ce n'est pas déjà fait). Ensuite, nous devrions jeter un coup d'œil sur le SGBD. Pour ce faire, nous nous connectons en tant que root :

```
mysql -uroot -p -hlocalhost
```

Nun verschaffen wir uns einen Überblick über die derzeit hinterlegten Benutzer:

Nous allons maintenant obtenir une vue d'ensemble des utilisateurs actuellement déposés :

```
SELECT * FROM mysql.user;
```

Nicht gewollte Einträge sollten wir löschen. Unerwünschte Benutzer haben unter Host ein Wildcard (%) oder von außen erreichbare Adressen. Erwünscht sind die Hosts localhost, 127.0.0.1 (IPv4) und ::1 (IPv6).

Il faut supprimer les entrées non souhaitées. Les utilisateurs indésirables ont un joker (%) sous Host ou des adresses accessibles de l'extérieur. Les hôtes souhaités sont localhost, 127.0.0.1 (IPv4) et ::1 (IPv6).

Wichtig ist, dass der Dienst von außen nicht erreichbar ist. Meist läuft der Dienst unter dem Standart-Port 3306. Auch für MariaDB/MySQL existieren dedizierte **Application Firewalls**. Diese sind unter anderem in der Lage, schadhafte SQL-Queries zu unterbinden. Eine konkrete Empfehlung haben wir derzeit nicht.

Il est important que le service ne soit pas accessible de l'extérieur. La plupart du temps, le service fonctionne sous le port standard 3306. Il existe également des **application firewalls** dédiés à MariaDB/MySQL. Ceux-ci sont entre autres en mesure d'empêcher les requêtes SQL malveillantes. Nous n'avons pas de recommandation concrète à formuler pour le moment.

### PHP absichern

### Sécuriser PHP

Wir schließen uns den üblichen Rants zu PHP keineswegs an, denn die Scriptsprache lässt sich für unsere Zwecke angemessen "härten". Eine wichtige Botschaft ist: **PHP sollte immer auf dem neusten Patch-Stand sein.** Hierbei ist zu beachten, welche Major-Versionen von PHP (5.x, 7.x) von den PHP-Entwicklern und welche PHP-Pakete von der genutzten Distribution unterstützt werden. Distributionen setzen oftmals nicht auf die neusten Major-Versionen, sondern pflegen ältere, eher stabilere Versionen. Diese werden mit Bug- und Security-Fixes gepatcht. Updates von PHP sollten also immer schnellstmöglich eingespielt werden.

Nous ne nous joignons pas du tout aux rumeurs habituelles concernant PHP, car le langage de script peut être "durci" de manière appropriée pour nos besoins. Un message important est le suivant : **PHP devrait toujours être à jour avec les derniers patchs.** Il faut ici tenir compte des versions majeures de PHP (5.x, 7.x) supportées par les développeurs PHP et des paquets PHP supportés par la distribution utilisée. Souvent, les distributions ne misent pas sur les dernières versions majeures, mais maintiennent des versions plus anciennes et plutôt stables. Celles-ci sont patchées avec des corrections de bugs et de sécurité. Les mises à jour de PHP devraient donc toujours être appliquées le plus rapidement possible.

Für den Betrieb von i-doit erforderliche haben wir bereits in den [Systemeinstellungen](../installation/manuelle-installation/systemeinstellungen.md) beschrieben. **Diese Einstellungen lassen sich durch zusätzliche erweitern.** Dafür erstellen wir eine neue .ini-Datei:

Pour le fonctionnement d'i-doit nécessaire, nous avons déjà décrit dans les [Paramètres système](../installation/installation manuelle/paramètres système.md). **Pour cela, nous créons un nouveau fichier .ini :

```
sudo editor /etc/php/7.2/mods-available/zz_security.ini
```

Dort hinterlegen wir unsere Einstellungen:

Nous y déposons nos paramètres :

```
;; Einschränkung auf Verzeichnisse, auf die PHP zugreifen darf:
open_basedir = "/var/www/html/i-doit/:/tmp/"

;; Unnötige Methoden deaktivieren:
disable_functions = pcntl_alarm,pcntl_fork,pcntl_waitpid,pcntl_wait,pcntl_wifexited,pcntl_wifstopped,pcntl_wifsignaled,pcntl_wifcontinued,pcntl_wexitstatus,pcntl_wtermsig,pcntl_wstopsig,pcntl_signal,pcntl_signal_dispatch,pcntl_get_last_error,pcntl_strerror,pcntl_sigprocmask,pcntl_sigwaitinfo,pcntl_sigtimedwait,pcntl_exec,pcntl_getpriority,pcntl_setpriority,

;; Verwendete PHP-Version nicht in den HTTP-Headers mitsenden:
expose_php = Off
```

Anschließend müssen die Einstellungen noch aktiviert werden:

Ensuite, il faut encore activer les paramètres :

```
sudo php5enmod zz_security
sudo systemctl restart apache2.service
```

Für PHP existiert die **Sicherheits-Erweiterung [Suhosin](https://suhosin.org/)**. Sie greift sehr tief in die Ausführung von PHP-Methoden ein. Das ist teilweise sinnvoll, aber birgt auch die Gefahr, dass i-doit nicht mehr vollständig funktioniert. Konkrete Einstellungen können wir noch nicht abschließend empfehlen.

L'extension de sécurité [Suhosin](https://suhosin.org/)** existe pour PHP. Elle intervient très profondément dans l'exécution des méthodes PHP. C'est en partie judicieux, mais cela comporte aussi le risque qu'i-doit ne fonctionne plus complètement. Nous ne pouvons pas encore recommander des réglages concrets de manière définitive.

### Transportverschlüsselung

### Cryptage du transport

i-doit ist eine Client-Server-Anwendung, dass heißt, es existiert eine Server-Instanz, die mit einer Client-Instanz über ein Netzwerk kommuniziert. Zudem kann i-doit über Schnittstellen mit weiteren Server-Instanzen kommunizieren, beispielsweise [LDAP zur Anmeldung von Benutzern](../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md).

i-doit est une application client-serveur, c'est-à-dire qu'il existe une instance de serveur qui communique avec une instance de client via un réseau. De plus, i-doit peut communiquer avec d'autres instances de serveur via des interfaces, par exemple [LDAP pour l'inscription des utilisateurs](../authentification-et-gestion-des-utilisateurs/répertoire-ldap/index.md).

Um diese Kommunikationsverbindungen abzusichern, bietet sich die Transportverschlüsselung via TLS an. Beispielsweise kann der Apache Webserver mit einem vertrauenswürdigen X.509-Zertifikat ausgestattet werden, damit ein Webbrowser **via HTTPS auf die IT-Dokumentation zugreifen** kann. Bei Zertifikaten sollten viele Dinge beachtet werden: u. a. Gültigkeitsdauer, Vertrauenskette, verwendete Ciphers und Hashes. Mozilla bietet einen passenden [Generator für die Apache-Konfiguration](https://mozilla.github.io/server-side-tls/ssl-config-generator/) an und liefert jede Menge [Hintergrundinformationen zu Server-seitigem TLS](https://wiki.mozilla.org/Security/Server_Side_TLS). Weitere gute Quellen sind die [SSL Labs von Qualys](https://www.ssllabs.com/ssltest/) und die Website [securityheaders.io](https://securityheaders.io/), die auch passende Tests der Konfiguration durchführen.

Pour sécuriser ces connexions de communication, le cryptage de transport via TLS s'impose. Par exemple, le serveur web Apache peut être équipé d'un certificat X.509 fiable afin qu'un navigateur web puisse accéder **via HTTPS à la documentation informatique**. De nombreux éléments doivent être pris en compte dans les certificats : entre autres la durée de validité, la chaîne de confiance, les chiffrement et hachage utilisés. Mozilla propose un [générateur pour la configuration Apache](https://mozilla.github.io/server-side-tls/ssl-config-generator/) et fournit de nombreuses [informations de base sur le TLS côté serveur](https://wiki.mozilla.org/Security/Server_Side_TLS). D'autres bonnes sources sont les [SSL Labs de Qualys](https://www.ssllabs.com/ssltest/) et le site [securityheaders.io](https://securityheaders.io/), qui effectuent également des tests de configuration appropriés.

Hier ist ein Beispiel für Debian GNU/Linux 8.x, um verschiedene Sicherheitsmechanismen zu etablieren. Die entsprechenden Pfade und Domain Names müssen angepasst werden:

Voici un exemple pour Debian GNU/Linux 8.x afin d'établir différents mécanismes de sécurité. Les chemins d'accès et les noms de domaine correspondants doivent être adaptés :

```
<IfModule mod_headers.c>
    ## See <https://securityheaders.io/>:
    Header always set Content-Security-Policy "default-src 'unsafe-inline' 'unsafe-eval' data: http://i-doit.example.net:80 https://i-doit.example.net:443"
    Header always set X-Frame-Options "SAMEORIGIN"
    Header always set X-XSS-Protection "1; mode=block"
    Header always set X-Content-Type-Options "nosniff"

    ## Avoid information about the Web server:
    Header unset Server
</IfModule>

## Avoid information about the Web server:
ServerSignature Off
ServerTokens Prod

<IfModule mod_ssl.c>
        ## See <https://mozilla.github.io/server-side-tls/ssl-config-generator/>:
        SSLProtocol all -SSLv3 -TLSv1 -TLSv1.1
        SSLCipherSuite ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-CHACHA20-POLY1305:ECDHE-RSA-CHACHA20-POLY1305:ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-SHA384:ECDHE-RSA-AES256-SHA384:ECDHE-ECDSA-AES128-SHA256:ECDHE-RSA-AES128-SHA256
        SSLHonorCipherOrder on
        SSLCompression off

        SSLUseStapling on
        SSLStaplingResponderTimeout 5
        SSLStaplingReturnResponderErrors off
        SSLStaplingCache shmcb:/var/run/ocsp(128000)

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

                ## Let i-doit know about some SSL settings (see <https://httpd.apache.org/docs/2.4/mod/mod_ssl.html#ssloptions>):
                <FilesMatch "\.(php)$">
                        SSLOptions +StdEnvVars
                </FilesMatch>
        </VirtualHost>
</IfModule>
```

Einen Schritt weiter geht die zusätzliche **Absicherung via Client-Zertifikate**. Hierzu überprüft nicht nur der Client, ob dem Server-Zertifikat vertraut wird, sondern auch der Webserver überprüft den Webbrowser auf Authentizität.

La **sécurité supplémentaire via les certificats clients** va un peu plus loin. Pour cela, non seulement le client vérifie si le certificat du serveur est fiable, mais le serveur web vérifie également l'authenticité du navigateur web.

### Datenverschlüsselung

### Cryptage des données

**Die Verschlüsselung von Festplatten/SSDs schützt bei Diebstahl.** Auf Clients ist sie daher keine Seltenheit und [von gängigen Normen gefordert](https://www.bsi.bund.de/). Bei Servern ist solch eine Verschlüsselung eher selten, da dies in der Administration oftmals als hinderlich gesehen wird. Gut, die unberechtigte Entwendung von Servern passiert nicht sehr oft und wird kann durch andere Schutzmaßnahmen verhindert werden. Sollte die Hardware, auf der i-doit läuft, allerdings nicht im eigenen Rechenzentrum abgesichert laufen, wächst das Misstrauen gegenüber dem Dienstleister, der die Hardware zur Verfügung stellt. In kleineren Betrieben ist i-doit teilweise gar auf Notebooks installiert.

**Le chiffrement des disques durs/SSD protège contre le vol*. Il est donc courant sur les clients et [exigé par les normes courantes] (https://www.bsi.bund.de/). Sur les serveurs, un tel cryptage est plutôt rare, car il est souvent considéré comme un obstacle au niveau de l'administration. Le détournement non autorisé de serveurs n'est pas très fréquent et peut être évité par d'autres mesures de protection. Toutefois, si le matériel sur lequel fonctionne i-doit ne fonctionne pas de manière sécurisée dans son propre centre informatique, la méfiance envers le prestataire de services qui met le matériel à disposition augmente. Dans les petites entreprises, i-doit est parfois même installé sur des ordinateurs portables.

Wer sich für die Verschlüsselung der Daten entscheidet, hat verschiedene Möglichkeiten: Unter GNU/Linux ist dm-crypt/LUKS weit verbreitet. Viele Distributionen bieten bereits bei der Installation an, die Daten zu verschlüsseln. Unter Windows bieten sich BitLocker und Veracrypt an.

Ceux qui décident de crypter leurs données ont plusieurs possibilités : Sous GNU/Linux, dm-crypt/LUKS est très répandu. De nombreuses distributions proposent de crypter les données dès l'installation. Sous Windows, BitLocker et Veracrypt s'offrent à vous.

### Firewall und offene Ports

### Pare-feu et ports ouverts

**Jeder Port, der nicht nach außen hin geöffnet ist, verkleinert die Angriffsvektoren.** Da i-doit eine Web-Applikation ist, reichen oftmals die Ports 80 und 443 aus. Apache kann über die Einstellung Listen in der Datei /etc/apache2/ports.conf und die passende VHost-Konfiguration eingeschränkt werden. MariaDB/MySQL sollte von außen gar nicht erst erreichbar sein. Um das System via SSH zu administrieren, muss ebenfalls ein Port geöffnet sein (Standard: 22).

**Chaque port qui n'est pas ouvert vers l'extérieur réduit les vecteurs d'attaque.** Comme i-doit est une application web, les ports 80 et 443 sont souvent suffisants. Apache peut être limité par le paramètre Listes dans le fichier /etc/apache2/ports.conf et la configuration VHost appropriée. MariaDB/MySQL ne devrait pas être accessible de l'extérieur. Pour administrer le système via SSH, un port doit également être ouvert (par défaut : 22).

Doch Vorsicht: **"Security by Obscurity" ist ein denkbar schlechter Schutz.** Hierbei werden Nicht-Standard-Ports im höheren vier- oder gar fünfstelligen Bereich verwendet. Apache läuft häufig unter Port 8080 und SSH unter 8022. Diese Methodik stellt keine große Hürde bei einem Angriff dar, denn Port-Scanner wie nmap finden solche offenen Ports ohne Probleme.

Mais attention ! **La "sécurité par obscurité" est une très mauvaise protection **. Elle consiste à utiliser des ports non standard à quatre ou cinq chiffres. Apache fonctionne souvent sur le port 8080 et SSH sur le port 8022. Cette méthodologie ne constitue pas un grand obstacle en cas d'attaque, car les scanners de ports comme nmap trouvent sans problème de tels ports ouverts.

Das Unterbinden von ICMP (beispielsweise von ping benutzt) ist ebenfalls [keine gute Idee](http://shouldiblockicmp.com/).

L'inhibition du protocole ICMP (utilisé par exemple par ping) est également [une mauvaise idée](http://shouldiblockicmp.com/).

Lässt sich ein Dienst nicht durch die eigene Konfiguration einschränken, hilft eine Firewall. Eine komfortable **Application Firewall** unter GNU/Linux ist ufw, das in wenigen Schritten aktiviert ist und im Hintergrund Regeln für iptables einrichtet:

Si un service ne peut pas être limité par sa propre configuration, un pare-feu peut aider. Un pare-feu confortable **application firewall** sous GNU/Linux est ufw, qui est activé en quelques étapes et qui instaure des règles pour iptables en arrière-plan :

```
sudo apt install ufw
sudo ufw allow 80/tcp
sudo ufw allow 443/tcp
sudo ufw allow 22/tcp
sudo ufw disable
sudo ufw enable
```

Speziell an Webserver richtet sich eine **Web Application Firewall**. Eine sehr bekannte ist [mod_security](https://www.digitalocean.com/community/tutorials/how-to-set-up-mod_security-with-apache-on-debian-ubuntu), eine Erweiterung für Apache.

Un **Web Application Firewall** est spécialement destiné aux serveurs web. Un très connu est [mod_security](https://www.digitalocean.com/community/tutorials/how-to-set-up-mod_security-with-apache-on-debian-ubuntu), une extension pour Apache.

Noch sinnvoller, aber aufwendiger umzusetzen und zu betreiben, ist eine externe, **dedizierte Firewall**. i-doit sollte erlaubt sein, nach Updates suchen und auf Online Repositories (z. B. für [Reports](../auswertungen/report-manager.md) und [Vorlagen](../i-doit-pro-add-ons/documents/dokumentenvorlagen.md) zugreifen zu dürfen:

Un pare-feu externe **dédié** est encore plus utile, mais plus complexe à mettre en œuvre et à exploiter. i-doit devrait être autorisé à rechercher des mises à jour et à accéder aux dépôts en ligne (par exemple pour [Rapports](../exploitations/report-manager.md) et [Modèles](../i-doit-pro-add-ons/documents/dokumentenvorlagen.md) :

| Host | Protokoll | Port | Beschreibung |
| --- | --- | --- | --- |
| **login.i-doit.com** | **HTTP** | **80** | Updates für i-doit und dessen Add-ons herunterladen |
| **login.i-doit.com** | **HTTPS** | **443** | Siehe oben (TLS-verschlüsselt) |
| **reports-ng.i-doit.org** | **HTTP** | **80** | Online Repositories (z. B. für [Reports](../auswertungen/report-manager.md)) |
| **reports-ng.i-doit.org** | **HTTPS** | **443** | Siehe oben (TLS-verschlüsselt) |
| **r.i-doit.com** | **HTTP** | **80** | Online Repositories (z. B. für [Vorlagen](../i-doit-pro-add-ons/documents/index.md)) |
| **r.i-doit.com** | **HTTPS** | **443** | Siehe oben (TLS-verschlüsselt) |
| **news.i-doit.com** | **HTTP** | **80** | Neuigkeiten zu i-doit im Dashboard (open-Variante) |
| **news.i-doit.com** | **HTTPS** | **443** | Siehe oben (TLS-verschlüsselt) |
| **i-doit.com** | **HTTP** | **80** | Nach Updates der pro-Variante suchen |
| **i-doit.com** | **HTTPS** | **443** | Siehe oben (TLS-verschlüsselt) |
| **i-doit.org** | **HTTP** | **80** | Nach Updates der open-Variante suchen |
| **i-doit.org** | **HTTPS** | **443** | Siehe oben (TLS-verschlüsselt) |
| **lizenzen.i-doit.com** | **HTTP** | **80** | Lizenzen über Token abrufen |
| **lizenzen.i-doit.com** | **HTTPS** | **443** | Siehe oben (TLS-verschlüsselt) |

| hôte | protocole | port | description |
| --- | --- | --- | --- |
| **login.i-doit.com** | **HTTP** | **80** | Télécharger les mises à jour pour i-doit et ses add-ons |
| **login.i-doit.com** | **HTTPS** | **443** | Voir ci-dessus (crypté TLS) |
| **reports-ng.i-doit.org** | **HTTP** | **80** | Référentiels en ligne (par ex. pour [Reports](../évaluations/report-manager.md)) |
| **reports-ng.i-doit.org** | **HTTPS** | **443** | Voir ci-dessus (crypté TLS) |
| **r.i-doit.com** | **HTTP** | **80** | Référentiels en ligne (par ex. pour [Modèles](../i-doit-pro-add-ons/documents/index.md)) |
| **r.i-doit.com** | **HTTPS** | **443** | Voir ci-dessus (crypté TLS) |
| **news.i-doit.com** | **HTTP** | **80** | Nouvelles d'i-doit dans le tableau de bord (variante open) |
| **news.i-doit.com** | **HTTPS** | **443** | Voir ci-dessus (crypté TLS) |
| **i-doit.com** | **HTTP** | **80** | Rechercher les mises à jour de la variante pro |
| **i-doit.com** | **HTTPS** | **443** | Voir ci-dessus (crypté TLS) |
| **i-doit.org** | **HTTP** | **80** | Rechercher les mises à jour de la variante open |
| **i-doit.org** | **HTTPS** | **443** | Voir ci-dessus (crypté TLS) |
| **licences.i-doit.com** | **HTTP** | **80** | Obtenir les licences par token |
| **licences.i-doit.com** | **HTTPS** | **443** | Voir ci-dessus (crypté TLS) |

Sind eine oder mehrere Schnittstellen zu Dritt-Applikationen konfiguriert, muss der jeweilige Zugriff ebenfalls erlaubt sein:

Si une ou plusieurs interfaces vers des applications tierces sont configurées, l'accès respectif doit également être autorisé :

| Schnittstelle | Protokoll | Standard-Port |
| --- | --- | --- |
| [E-Mails senden](../auswertungen/benachrichtigungen.md) | **SMTP** | **25/465/587** |
| [LDAP/AD](../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md) | **LDAP** | **389/636** |
| [Livestatus](../automatisierung-und-integration/network-monitoring/daten-abfragen-mit-livestatus.md) | **Livestatus** | **6557** |
| [NDOUtils/IDOUtils](../automatisierung-und-integration/network-monitoring/daten-abfragen-mit-livestatus.md) | **MySQL** | **3306** |
| [((OTRS)) Community Edition Help Desk](../automatisierung-und-integration/service-desk/otrscommunity-help-desk.md), [Request Tracker](../automatisierung-und-integration/service-desk/request-tracker.md), iTop | **HTTP/HTTPS** | **80/443** |
| [JDisc Discovery](../daten-konsolidieren/jdisc-discovery.md) | **PostgreSQL** | **25321** |
| [JDisc Discovery](../daten-konsolidieren/jdisc-discovery.md) | **HTTP** | **9000** |
| [OCS Inventory NG](../i-doit-pro-add-ons/ocs-inventory-ng.md) | **MySQL** | **3306** |

| interface | protocole | port standard |
| --- | --- | --- |
| [Envoyer des e-mails](../évaluations/notifications.md) | **SMTP** | **25/465/587** |
| [LDAP/AD](../authentification-et-gestion-des-utilisateurs/répertoire-ldap/index.md) | **LDAP** | **389/636** |
| [Livestatus](../automatisation-et-intégration/network-monitoring/recherche-de-données-avec-livestatus.md) | **Livestatus** | **6557** |
| [NDOUtils/IDOUtils](../automatisation-et-intégration/network-monitoring/données-recherche-avec-livestatus.md) | **MySQL** | **3306** |
| [((OTRS)) Community Edition Help Desk](../automatisierung-et-integration/service-desk/otrscommunity-help-desk.md), [Request Tracker](../automatisierung-et-integration/service-desk/request-tracker.md), iTop | **HTTP/HTTPS** | **80/443** |
| [JDisc Discovery](../consolidation des données/jdisc-discovery.md) | **PostgreSQL** | **25321** |
| [JDisc Discovery](../consolidation des données/jdisc-discovery.md) | **HTTP** | **9000** |
| [OCS Inventory NG](../i-doit-pro-add-ons/ocs-inventory-ng.md) | **MySQL** | **3306** |

### Sicherheits-Frameworks

### Frameworks de sécurité

Sicherheits-Frameworks bieten einen zusätzlichen Schutz, dass Dienste, Applikationen und Benutzer nur berechtigte Aktionen durchführen dürfen. Unter GNU/Linux sind [SELinux](https://de.wikipedia.org/wiki/SELinux) und [AppArmor](https://de.wikipedia.org/wiki/AppArmor) weit verbreitet. Zumindest liegen sie den meisten Distributionen bei, sind aber meist nicht aktiviert. Für i-doit bietet sich an, Apache einzusperren. Der Dienst darf dann **nur noch auf bestimmte Verzeichnisse lesend und/oder schreibend zugreifen**.

Les frameworks de sécurité offrent une protection supplémentaire pour que les services, les applications et les utilisateurs ne puissent effectuer que des actions autorisées. Sous GNU/Linux, [SELinux](https://de.wikipedia.org/wiki/SELinux) et [AppArmor](https://de.wikipedia.org/wiki/AppArmor) sont très répandus. Du moins, ils sont inclus dans la plupart des distributions, mais ne sont généralement pas activés. Pour i-doit, il est possible de verrouiller Apache. Le service ne peut alors **accéder qu'à certains répertoires en lecture et/ou en écriture**.

Unter Debian GNU/Linux gibt es derzeit einen Bug in selinux-policy-default, der den sinnvollen Einsatz von SELinux verhindert. Wir vertiefen dieses Thema zu einem späteren Zeitpunkt.

Sous Debian GNU/Linux, il existe actuellement un bug dans selinux-policy-default qui empêche l'utilisation judicieuse de SELinux. Nous approfondirons ce sujet ultérieurement.

### Angriffe automatisch abwehren

### repousser automatiquement les attaques

**Angriffe frühzeitig zu erkennen und abzuwehren ist nur noch automatisiert zu meistern.** Ein kleines, aber feines Helferlein stellt [fail2ban](http://www.fail2ban.org/) dar. Es analysiert kontinuierlich Log-Dateien von gängigen Diensten, um Angriffe zu erkennen. Brute-Force-Attacken auf SSH kann fail2ban daher schnell zunichte machen. Man kann es so konfigurieren, dass nach 3 fehlgeschlagenen Logins direkt hintereinander, die dazugehörige IP-Adresse via iptables gesperrt wird.

**La détection précoce et la défense contre les attaques ne peuvent être maîtrisées que de manière automatisée.** [fail2ban](http://www.fail2ban.org/) est une aide petite mais efficace. Il analyse en permanence les fichiers journaux des services courants afin de détecter les attaques. Les attaques par force brute sur SSH peuvent donc être rapidement annulées par fail2ban. On peut le configurer de manière à ce qu'après trois échecs de connexion consécutifs, l'adresse IP correspondante soit bloquée via iptables.

Vorkonfigurierte Jails bietet fail2ban für SSH, Apache und MariaDB/MySQL.

fail2ban propose des jails préconfigurés pour SSH, Apache et MariaDB/MySQL.

## Nach der Installation von i-doit

## Après l'installation d'i-doit

Direkt nach der Installation ergreifen wir weitere Maßnahmen.

Immédiatement après l'installation, nous prenons d'autres mesures.

### Berechtigungen im Dateisystem

### Autorisations dans le système de fichiers

**Das Dateisystem bietet viele Möglichkeiten, unberechtigte Zugriffe auf Code und Daten auszuschließen.** Debian GNU/Linux verwendet in der Regel Ext4. Hierfür können wir die Standard-Tools chown, chmod und chattr verwenden:

**Le système de fichiers offre de nombreuses possibilités pour exclure les accès non autorisés au code et aux données.** Debian GNU/Linux utilise généralement Ext4. Pour cela, nous pouvons utiliser les outils standard chown, chmod et chattr :

```
# Wechsel ins Installations-Verzeichnis von i-doit:
cd /var/www/html/i-doit

# Apache sollte die volle Kontrolle über die Dateien und Verzeichnisse haben:
sudo chown www-data:www-data -R .

# Diese Kontrolle schränken wir auf das Lesen und Ausführen ein:
sudo find . -type d -name \* -exec chmod 550 {} \;
sudo find . -type f -exec chmod 440 {} \;
sudo chmod 550 controller tenants import updatecheck *.sh

# Diese Rechte versiegeln wir, sodass nicht einmal root etwas ändern darf:
sudo chattr -R +i .

# Na gut, in einige Verzeichnisse sollte i-doit schreiben dürfen:

for dir in "log/ imports/ temp/ upload/"; do sudo chattr -R -i "$dir" && sudo find "$dir" -type d -name \* -exec chmod 770 {} \;; done
```

Bei einem Update von i-doit müssen einige Einschränkungen temporär aufgehoben werden:

Lors d'une mise à jour d'i-doit, certaines restrictions doivent être temporairement levées :

```
# Wechsel ins Installations-Verzeichnis von i-doit:
cd /var/www/html/i-doit
sudo chattr -R -i .
sudo find . -type d -name \* -exec chmod 775 {} \;
sudo find . -type f -exec chmod 664 {} \;
sudo chmod 774 controller *.sh setup/*.sh
```

Ist das Update eingespielt, sollten die Einschränkungen wieder aktiviert werden.

Une fois la mise à jour installée, les restrictions doivent être réactivées.

### Sichere Passwörter

### Mots de passe sécurisés

Ein i-doit wird für Testzwecke "schnell mal" aufgesetzt. Dieses "schnell mal" bedeutet leider allzu oft, dass sich niemand um sichere Passwörter Gedanken macht. Das muss nicht sein. Wer konsequent **von Anfang an sichere Passwörter** setzt, hat im Nachhinein weniger Aufwand, diese potenziellen Sicherheitslücken zu stopfen. Konkret geht es um diese Passwörter:

Un i-doit est mis en place "rapidement" à des fins de test. Ce "vite fait" signifie malheureusement trop souvent que personne ne se soucie des mots de passe sécurisés. Ce n'est pas nécessaire. Celui qui choisit systématiquement des mots de passe sûrs **dès le début** a moins de mal à combler ces failles de sécurité potentielles après coup. Concrètement, il s'agit de ces mots de passe :

* MySQL-Benutzer, den i-doit für die Datenbanken einrichtet
* Benutzer für das Admin Center
* Standard-Benutzer in i-doit (admin, reader, author, editor)

* Utilisateur MySQL, qu'i-doit configure pour les bases de données
* utilisateur pour l'Admin Center
* Utilisateurs standard dans i-doit (admin, reader, author, editor)

#### MySQL-Benutzer

#### Utilisateur MySQL

---

Dieser Benutzer wird bereits beim [Setup](../installation/manuelle-installation/setup.md) angelegt. Das Passwort kann nachträglich mit wenigen SQL-Befehlen geändert werden. Es wird davon ausgegangen, dass der Benutzer idoit heißt und die [System-Datenbank](../software-entwicklung/datenbank-modell/index.md) idoit_system. Zuerst kommt die Anmeldung:

Cet utilisateur est déjà créé lors du [Setup](../installation/manuelle-installation/setup.md). Le mot de passe peut être modifié ultérieurement à l'aide de quelques commandes SQL. On part du principe que l'utilisateur s'appelle idoit et que la [base de données système](../développement de logiciels/modèle de base de données/index.md) s'appelle idoit_system. Tout d'abord, il y a la connexion :

```
mysql -uroot -p -hlocalhost
```

Anschließend folgt das ändern des Passworts:

Vient ensuite la modification du mot de passe :

```
ALTER USER 'idoit'@'localhost' IDENTIFIED BY 'thisistotallysecure!!11';
```

Dieses Passwort muss auch i-doit mitgeteilt werden. Zuerst in der Systemdatenbank, damit die [Mandanten-Datenbanken](../software-entwicklung/datenbank-modell/index.md) erreicht werden können:

Ce mot de passe doit également être communiqué à i-doit. D'abord dans la base de données du système, afin de pouvoir accéder aux [bases de données des mandants](../développement de logiciels/modèle de base de données/index.md) :

```
UPDATE idoit_system.isys_mandator SET isys_mandator__db_pass = 'thisistotallysecure!!11' WHERE isys_mandator__db_user = 'idoit';
```

Und zuletzt muss das Passwort in der zentralen Konfiguration abgelegt werden, damit die System-Datenbank erreicht werden kann. Dies geschieht entweder im Admin Center unter **Config** oder in der Datei src/config.inc.php im Installationsverzeichnis von i-doit.

Enfin, le mot de passe doit être stocké dans la configuration centrale afin de pouvoir accéder à la base de données du système. Cela se fait soit dans l'Admin Center sous **Config**, soit dans le fichier src/config.inc.php dans le répertoire d'installation d'i-doit.

#### Benutzer für das Admin Center

#### Utilisateurs pour l'Admin Center

Dieser Benutzer wird ebenfalls beim Setup angelegt. Anschließend kann das Passwort dort unter **Config** geändert werden. Alternativ kann die Datei src/config.inc.php bearbeitet werden.

Cet utilisateur est également créé lors du setup. Ensuite, le mot de passe peut y être modifié sous **Config**. Il est également possible d'éditer le fichier src/config.inc.php.

#### Standard-Benutzer in i-doit

#### Utilisateur standard dans i-doit

Die Benutzer admin, reader, author und editor werden bereits beim Setup angelegt. Best Practice ist es, diese Benutzer niemals zu verwenden, sondern für jeden Benutzer ein eigenes [Personenobjekt](../grundlagen/struktur-it-dokumentation.md) anzulegen. Die Personenobjekte für admin & Co. können nicht gelöscht, aber [archiviert](../grundlagen/struktur-it-dokumentation.md) werden. Dadurch wird die Anmeldung ausgeschlossen. Wer auf den Einsatz dieser Standard-Benutzer nicht verzichten möchte, sollte deren Passwörter dringend ändern, weil sie gleichlautend mit dem Benutzernamen sind. Erledigt wird dies im jeweiligen Personenobjekt in der Kategorie **Personen → Login**.

Les utilisateurs admin, reader, author et editor sont déjà créés lors du setup. La meilleure pratique consiste à ne jamais utiliser ces utilisateurs, mais à créer un [objet personne](../bases/structure-it-documentation.md) pour chaque utilisateur. Les objets de personne pour admin & Co. ne peuvent pas être supprimés, mais [archivés](../grundlagen/struktur-it-dokumentation.md). Cela permet d'exclure la connexion. Ceux qui ne veulent pas renoncer à l'utilisation de ces utilisateurs standard doivent impérativement modifier leurs mots de passe, car ils sont identiques au nom d'utilisateur. Cette opération s'effectue dans l'objet personne correspondant, dans la catégorie **Personnes → Login**.

#### Standard-Benutzer unter Linux

#### Utilisateur standard sous Linux

Bereits bei der Installation des Betriebssystems wird ein Standard-Benutzer angelegt, der ebenso ein sicheres Passwort verdient. Nachträglich ändern lässt es sich mit:

Lors de l'installation du système d'exploitation, un utilisateur standard est déjà créé, qui mérite également un mot de passe sûr. Il peut être modifié ultérieurement avec :

```
passwd
```

### CSRF Tokens aktivieren

### Activer les jetons CSRF

i-doit bringt mehrere Maßnahmen mit, um Angriffe, die unter [**Cross-Site-Request-Forgery** (CSRF oder XSRF)](https://de.wikipedia.org/wiki/Cross-Site-Request-Forgery) firmieren, zu erschweren. Aktiviert werden die Maßnahmen im Admin Center unter **System setting → Security → CSRF-Token** mit der Angabe **Ja**.

i-doit apporte plusieurs mesures pour rendre plus difficiles les attaques appelées [**Cross-Site-Request-Forgery** (CSRF ou XSRF)](https://de.wikipedia.org/wiki/Cross-Site-Request-Forgery). Les mesures sont activées dans l'Admin Center sous **System setting → Security → CSRF-Token** avec l'indication **Oui**.

### Zwei-Faktor-Authentifizierung

### Authentification à deux facteurs

Die Anmeldung via Benutzernamen und -passwort wird heutzutage als nicht mehr zeitgemäß angesehen. **Zusätzliche Authentifzierungsmechanismen bringen einen Zugewinn an Sicherheit.** Wenn ein weiterer Mechanismus hinzukommt, spricht man von Zwei-Faktor-Authentifizierung, bei mehr als zweien von Mehr-Faktor-Authentifizierung. Eine gängige Art der Umsetzung ist der Einsatz eines (USB-)Tokens.

La connexion via le nom d'utilisateur et le mot de passe n'est plus considérée comme moderne de nos jours. **Des mécanismes d'authentification supplémentaires apportent un gain de sécurité.** Lorsqu'un autre mécanisme est ajouté, on parle d'authentification à deux facteurs, et lorsqu'il y en a plus de deux, on parle d'authentification à plusieurs facteurs. L'utilisation d'un jeton (USB) est une manière courante de le mettre en œuvre.

i-doit erlaubt zusätzliche Mechanismen durch den zugrunde liegenden Apache Webserver. Beispielsweise beruht die das **[Single-Sign-On-Verfahren](../benutzerauthentifizierung-und-verwaltung/sso-vergleich/index.md)** darauf. Dieses lässt sich dazu nutzen, weitere Mechanismen direkt im Webserver zu aktivieren und zu konfigurieren. Hier sind praktisch keine Grenzen gesetzt, solange das Verfahren i-doit über entsprechende HTTP-Header mitteilt, für welchen Benutzer die Authentifizierung erfolgreich ist.

i-doit permet des mécanismes supplémentaires grâce au serveur web Apache sous-jacent. Par exemple, la procédure **[Single-Sign-On](../authentification-et-gestion-des-utilisateurs/sso-comparaison/index.md)** repose sur ce mécanisme. Celle-ci peut être utilisée pour activer et configurer d'autres mécanismes directement dans le serveur web. Il n'y a pratiquement pas de limites, tant que la procédure indique à i-doit, via les en-têtes HTTP correspondants, pour quel utilisateur l'authentification a réussi.

### Monitoring und Logs

### Surveillance et logs

Alle getätigten Maßnahmen sollten permanent überwacht werden. Bestenfalls automatisch.

Toutes les mesures prises devraient faire l'objet d'un suivi permanent. Dans le meilleur des cas, automatiquement.

Das System ist gut in einem [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md) wie Nagios oder Check_MK aufgehoben. Es gibt kaum etwas, was sich nicht damit überwachen lässt. Wichtig ist beispielsweise, das Betriebssystem und die (virtuelle) Hardware im Blick zu haben: laufende Prozesse, Speicherverbrauch, angemeldete Benutzer, verfügbare Updates usw. **Für i-doit sollten Apache, MariaDB/MySQL und der verfügbare Speicherplatz überwacht werden.**

Le système est bien placé dans un [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md) comme Nagios ou Check_MK. Il n'y a pratiquement rien qui ne puisse être surveillé par ce biais. Il est par exemple important de garder un œil sur le système d'exploitation et le matériel (virtuel) : processus en cours, consommation de mémoire, utilisateurs connectés, mises à jour disponibles, etc. **Pour i-doit, Apache, MariaDB/MySQL et l'espace disque disponible doivent être surveillés.**

Neben dem Network Monitoring bieten sich noch weitere Dienste an, die **Logs überwachen**. Bevor man mit der Installation eines ausgewachsenen Log-Servers (zum Beispiel [Logstash](https://www.elastic.co/products/logstash)) beginnt, kann man erst einmal auf kleinere Tools wie [Logwatch](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-logwatch-log-analyzer-and-reporter-on-a-vps) zurückgreifen. Logwatch überwacht die Log-Dateien von Apache, SSH sowie weiteren Diensten und verschickt täglich einen gut lesbaren Report per E-Mail.

Outre la surveillance du réseau, d'autres services permettent de **surveiller les logs**. Avant de se lancer dans l'installation d'un serveur de logs sophistiqué (par exemple [Logstash](https://www.elastic.co/products/logstash)), on peut d'abord recourir à des outils plus petits comme [Logwatch](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-logwatch-log-analyzer-and-reporter-on-a-vps). Logwatch surveille les fichiers journaux d'Apache, de SSH et d'autres services et envoie chaque jour un rapport lisible par e-mail.

i-doit produziert ebenfalls laufend Log-Dateien. Im Installationsverzeichnis befinden sie sich unterhalb vom Verzeichnis log/. Eine (regelmäßige) Auswertung lohnt sich nicht nur bei der [Suche nach Fehlern](../administration/troubleshooting/index.md).

i-doit produit également des fichiers journaux en permanence. Dans le répertoire d'installation, ils se trouvent sous le répertoire log/. Il vaut la peine de les analyser (régulièrement), et pas seulement pour la [recherche d'erreurs](../administration/troubleshooting/index.md).

Nachdem [Cronjobs einmal eingerichtet](../automatisierung-und-integration/cli/console/index.md) worden sind, interessiert sich niemand mehr dafür. Das ist fatal, wenn beim automatischen Ausführen etwas schief geht und niemand etwas mitbekommt. Es ist demnach ratsam, die **Ausgaben von laufenden Jobs in Log-Dateien umzuleiten** und bei Bedarf E-Mails zu verschicken.

Une fois que [les tâches cron ont été configurées](../automatisation-et-intégration/cli/console/index.md), plus personne ne s'y intéresse. C'est fatal si quelque chose se passe mal lors de l'exécution automatique et que personne n'est au courant. Il est donc conseillé de rediriger les **sorties des tâches en cours vers des fichiers journaux** et d'envoyer des e-mails si nécessaire.

Apropos E-Mail: Wenn das System E-Mails verschicken soll (wie es Logwatch täglich tut), sollte man dies vorher testen. Ein passender SMTP-Server sollte erreichbar sein. Eventuell hilft es, einen simplen Dienst wie [sSMTP](https://wiki.debian.org/sSMTP) als Relay-Server zu verwenden.

A propos du courrier électronique : Si le système doit envoyer des e-mails (comme Logwatch le fait quotidiennement), il faut le tester au préalable. Un serveur SMTP approprié devrait être accessible. Il peut être utile d'utiliser un service simple comme [sSMTP](https://wiki.debian.org/sSMTP) comme serveur de relais.

Eine weitere Möglichkeit, das System permanent von außen auf Schwachstellen zu überprüfen, ist der Einsatz eines **Schwachstellen-Scanners** wie [OpenVAS](http://www.openvas.org/).

Une autre possibilité de vérifier en permanence les vulnérabilités du système depuis l'extérieur est d'utiliser un **scanner de vulnérabilités** comme [OpenVAS](http://www.openvas.org/).

## Über den Tellerrand geschaut

## Regarder plus loin que le bout de son nez

Es gibt zahlreiche weitere Maßnahmen, die etwas außerhalb der eigentlichen Installation liegen, aber nicht unerwähnt bleiben sollten.

Il existe de nombreuses autres mesures qui sont un peu en dehors de l'installation proprement dite, mais qu'il ne faut pas oublier de mentionner.

### Hochverfügbarkeit

### Haute disponibilité

!!! info  "Wirklich nötig?"

! !! info "Vraiment nécessaire ?"

```
Wir wurden schon oft gefragt, wie man i-doit performant aufsetzt. Schnell ist die Rede von redundanten Systemen. Doch das ist in den meisten Fällen überdimensioniert und zu komplex. Bevor man ein Arsenal an Hard- und Software auf die IT-Dokumentation loslässt, ist es besser, ein(!) simples, aber durchdachtes System aufzusetzen und regelmäßig zu warten. Aus Performance-Gründen hat unseres Wissens nach noch kein Kunde ein redundantes System für i-doit benötigt, da die Systemanforderungen recht moderat sind. i-doit funktioniert mit den angegebenen Anforderungen problemlos mit a) vielen Daten und b) vielen Benutzern zur selben Zeit.
```

Um die Verfügbarkeit der IT-Dokumentation zu erhöhen, kann es helfen, die einzelnen Dienste **redundant** und auf dedizierten Systemen (Bare Metal, VM oder Container) zu betreiben. i-doit benötigt zum Betrieb einen Apache-Webserver, der redundant durch einen oder gar mehrere Load Balancer angesteuert werden kann. Die Datenbanken können auf einem MariaDB-Cluster, der beispielsweise von [MaxScale](https://mariadb.com/products/mariadb-maxscale) verwaltet wird, gespeichert werden. Die Daten, die i-doit im Dateisystem ablegt, können in einem (verteilten) Storage-System gespeichert werden. Und der Cache, der von memcached verwaltet wird, kann ebenfalls ausgelagert werden.

Pour augmenter la disponibilité de la documentation informatique, il peut être utile d'exploiter les différents services de manière **redondante** et sur des systèmes dédiés (bare metal, VM ou conteneurs). Pour fonctionner, i-doit a besoin d'un serveur web Apache qui peut être piloté de manière redondante par un, voire plusieurs load balancers. Les bases de données peuvent être stockées sur un cluster MariaDB, géré par exemple par [MaxScale](https://mariadb.com/products/mariadb-maxscale). Les données qu'i-doit place dans le système de fichiers peuvent être stockées dans un système de stockage (distribué). Et le cache, géré par memcached, peut également être délocalisé.

Doch das ist Stoff für einen weiteren Artikel.

Mais cela fera l'objet d'un autre article.

Um "im Kleinen" anzufangen, sollte die drunter liegende Hardware betrachtet werden: ein RAID, ECC-Speicherschutz beim RAM und redundant ausgelegte Netzteile (die auch wirklich an unterschiedlichen Stromphasen hängen, bestenfalls abgesichert durch USV, Generator & Co.) sind übliche Schutzmaßnahmen.

Pour commencer "à petite échelle", il convient de considérer le matériel sous-jacent : un RAID, une protection de la mémoire ECC pour la RAM et des blocs d'alimentation redondants (qui dépendent réellement de différentes phases de courant, au mieux protégés par un UPS, un générateur & Co.) sont des mesures de protection courantes.

### Vertrauenswürdiges Netzwerk

### Réseau de confiance

Ein Blick sollte auch auf die Netzwerkinfrastruktur geworfen werden, in der das i-doit-System läuft und erreicht werden kann.

Il convient également de jeter un coup d'œil à l'infrastructure réseau dans laquelle le système i-doit fonctionne et peut être atteint.

Eine Maßnahme wäre eine direkte Trennung zum Internet. Ein **HTTP-Proxy** würde es erlauben, dass das System Updates beziehen darf.

Une mesure consisterait à se déconnecter directement d'Internet. Un **HTTP-Proxy** permettrait au système d'obtenir des mises à jour.

Eine weitere Maßnahme wäre, ein **dediziertes Netz für die Administration** zu verwenden. So könnte man den offenen Port für SSH aus der "Schusslinie" ziehen. Nur noch die Kernfunktion, also der Apache-Webserver wäre erreichbar. Ob nun durch physikalisch Trennung von Subnetzen oder via VLAN oder VPN, überlassen wir dem Leser.

Une autre mesure consisterait à utiliser un **réseau dédié pour l'administration**. Ainsi, le port ouvert pour SSH pourrait être retiré de la "ligne de mire". Seule la fonction principale, c'est-à-dire le serveur web Apache, serait encore accessible. Nous laissons au lecteur le soin de décider s'il faut séparer physiquement les sous-réseaux ou utiliser un VLAN ou un VPN.

### IPv4 vs. IPv6

### IPv4 vs. IPv6

Viele der genannten Maßnahmen sind unabhängig davon, ob IP in Version 4 oder 6 verwendet wird. IPv6 genießt in vielen Organisationen keine weite Verbreitung. Kommt es gar nicht zum Einsatz (was schade wäre), sollte es auch konsequent deaktiviert werden. Soll es hingegen benutzt werden, sollte es genauso sicher behandelt werden wie IPv4. Lauschen Dienste nach außen mit geöffneten Ports, sollte dies sowohl für IPv4 als auch v6 konfiguriert werden. Gegebenenfalls sind Firewall-Regeln anzupassen.

Bon nombre des mesures mentionnées sont indépendantes de l'utilisation de la version 4 ou 6 d'IP. IPv6 n'est pas très répandu dans de nombreuses organisations. S'il n'est pas utilisé du tout (ce qui serait dommage), il devrait être désactivé de manière conséquente. En revanche, s'il est utilisé, il doit être traité de manière aussi sûre qu'IPv4. Si des services écoutent vers l'extérieur avec des ports ouverts, cela devrait être configuré aussi bien pour IPv4 que pour v6. Le cas échéant, les règles de pare-feu doivent être adaptées.

Das Routing und die Adressvergabe in IPv6-Netzen unterscheiden sich von von IPv4-Netzen. Wer hier nicht aufpasst, macht eventuell das System im weltweiten Internet verfügbar, obwohl das bei IPv4 ausgeschlossen wurde.

Le routage et l'attribution d'adresses dans les réseaux IPv6 diffèrent de ceux des réseaux IPv4. Si l'on n'y prend pas garde, on risque de rendre le système disponible sur l'Internet mondial, bien que cela ait été exclu avec IPv4.

## Weiterführende Links

## Liens complémentaires

Wer tiefer in die Materie einsteigen möchte (und wer möchte das nach dem Lesen dieses Artikels nicht?), wird unter anderem hier fündig:

Ceux qui souhaitent approfondir le sujet (et qui ne le souhaiterait pas après avoir lu cet article ?) trouveront leur bonheur ici, entre autres :

* Einen guten Einstieg in die (sichere) Administration von einem Linux-Betriebssystem, bietet der Blog-Artikel "[My First 10 Minutes On a Server - Primer for Securing Ubuntu](https://www.codelitt.com/blog/my-first-10-minutes-on-a-server-primer-for-securing-ubuntu/)".
* Die Norm IT-Grundschutz vom BSI listet mit den [IT-Grundschutz-Katalogen](https://www.bsi.bund.de/grundschutz/) jede Menge Gefahren, denen die IT tagtäglich ausgesetzt ist. Passend dazu liefert das BSI geeignete Maßnahmen zur Risikominimierung gleich mit. Die Kataloge dienen in vielen Fällen als Quelle für andere Standards und Normen wie ISO27001.

* L'article de blog "[My First 10 Minutes On a Server - Primer for Securing Ubuntu](https://www.codelitt.com/blog/my-first-10-minutes-on-a-server-primer-for-securing-ubuntu/)" offre une bonne introduction à l'administration (sécurisée) d'un système d'exploitation Linux.
* La norme IT-Grundschutz du BSI énumère avec les [catalogues IT-Grundschutz](https://www.bsi.bund.de/grundschutz/) toute une série de dangers auxquels l'informatique est exposée quotidiennement. Le BSI fournit également des mesures appropriées pour minimiser les risques. Dans de nombreux cas, les catalogues servent de source pour d'autres standards et normes comme ISO27001.
