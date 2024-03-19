<!-- TRANSLATED by md-translate -->
# Systemeinstellungen

# Paramètres du système

Für die Konfiguration des Betriebssystems empfehlen wir eine Reihe von Einstellungen bezogen auf PHP, Apache Webserver und MySQL/MariaDB. Diese fußen auf den [Systemvoraussetzungen](../systemvoraussetzungen.md) für i-doit. Die Einstellungen unterscheiden sich je nach Betriebssystem, weswegen auf die jeweiligen Artikel verwiesen wird:

Pour la configuration du système d'exploitation, nous recommandons une série de paramètres relatifs à PHP, au serveur web Apache et à MySQL/MariaDB. Ceux-ci sont basés sur la [configuration requise](../systemvoraussetzung.md) pour i-doit. Les réglages diffèrent selon le système d'exploitation, c'est pourquoi nous vous renvoyons aux articles correspondants :

* [Debian GNU/Linux](debian.md)
* [Red Hat Enterprise Linux (RHEL)](red-hat-enterprise-linux/index.md)
* [Suse Linux Enterprise Server (SLES)](suse-linux-enterprise-server.md)
* [Ubuntu Linux](ubuntu-linux/index.md)
* [Microsoft Windows Server](./microsoft-windows-server/index.md)

* [Debian GNU/Linux](debian.md)
* [Red Hat Enterprise Linux (RHEL)](red-hat-enterprise-linux/index.md)
* [Suse Linux Enterprise Server (SLES)](suse-linux-enterprise-server.md)
* [Ubuntu Linux](ubuntu-linux/index.md)
* [Microsoft Windows Server](./microsoft-windows-server/index.md)

## PHP

## PHP

An dieser Stelle möchten wir auf ein paar Besonderheiten von PHP eingehen, die die oben erwähnten Artikeln ergänzen.

Nous souhaitons ici aborder quelques particularités de PHP qui complètent les articles mentionnés ci-dessus.

### Caching

### Mise en cache

i-doit verfügt über eigene Caching-Strategien, um Anfragen so schnell wie möglich zu beantworten. Zusätzlich können sogenannte Opcode Caches für PHP und Key-Value-Storages benutzt werden, um weitere Verbesserungen an der Performance zu erzielen. Folgende Reihenfolge wird berücksichtigt:

i-doit dispose de ses propres stratégies de mise en cache afin de répondre le plus rapidement possible aux demandes. De plus, les caches Opcode pour PHP et les Key-Value-Storages peuvent être utilisés pour obtenir des améliorations supplémentaires de la performance. L'ordre suivant est pris en compte :

1. memcached
2. APC(u)
3. Dateisystem

1. memcached
2. APC(u)
3. système de fichiers

Der Einsatz von _entweder_ **memcached** _oder_ **APC/APCu** wird empfohlen. Wir tendieren zum Einsatz von **memcached**. Die Installation ist in den oben genannten Artikeln beschrieben (außer für Windows).

L'utilisation de _*memcached** _ou_ **APC/APCu** est recommandée. Nous penchons pour l'utilisation de **memcached**. L'installation est décrite dans les articles ci-dessus (sauf pour Windows).

Der Apache Webserver sollte nach der Installation neu gestartet werden, damit die Änderungen an PHP aktiv werden:

Le serveur web Apache doit être redémarré après l'installation pour que les modifications de PHP soient actives :

```
sudo systemctl restart apache2.service
```

### Suhosin

### Suhosin

Für PHP existiert die Sicherheitserweiterung [Suhosin](https://suhosin.org/). Obwohl sie viele sinnvolle Ergänzungen für den sicheren Betrieb von Web-Applikationen unter PHP mitbringt, bergen die Standardeinstellungen viele Fallstricke. Daher kann beim Einsatz von Suhosin keine korrekte Funktionalität von i-doit gewährleistet werden.

L'extension de sécurité [Suhosin] (https://suhosin.org/) existe pour PHP. Bien qu'elle apporte de nombreux compléments utiles pour le fonctionnement sécurisé des applications Web sous PHP, les paramètres par défaut comportent de nombreux pièges. C'est pourquoi l'utilisation de Suhosin ne permet pas de garantir une fonctionnalité correcte d'i-doit.