# Systemeinstellungen

Für die Konfiguration des Betriebssystems empfehlen wir eine Reihe von Einstellungen bezogen auf PHP, Apache Webserver und MySQL/MariaDB. Diese fußen auf den [Systemvoraussetzungen](../systemvoraussetzungen.md) für i-doit. Die Einstellungen unterscheiden sich je nach Betriebssystem, weswegen auf die jeweiligen Artikel verwiesen wird:

*   [Debian 12 GNU/Linux](debian12.md)
*   [Red Hat Enterprise Linux (RHEL)](red-hat-enterprise-linux/index.md)
*   [Suse Linux Enterprise Server (SLES)](suse-linux-enterprise-server.md)
*   [Ubuntu Linux](ubuntu-linux/index.md)
*   [Microsoft Windows Server](./microsoft-windows-server/index.md)

## PHP

An dieser Stelle möchten wir auf ein paar Besonderheiten von PHP eingehen, die die oben erwähnten Artikeln ergänzen.

## Caching

i-doit verfügt über eigene Caching-Strategien, um Anfragen so schnell wie möglich zu beantworten. Zusätzlich können sogenannte Opcode Caches für PHP und Key-Value-Storages benutzt werden, um weitere Verbesserungen an der Performance zu erzielen. Folgende Reihenfolge wird berücksichtigt:

1. memcached
2. APC(u)
3. Dateisystem

Der Einsatz von _entweder_ **memcached** _oder_ **APC/APCu** wird empfohlen. Wir tendieren zum Einsatz von **memcached**. Die Installation ist in den oben genannten Artikeln beschrieben (außer für Windows).

Der Apache Webserver sollte nach der Installation neu gestartet werden, damit die Änderungen an PHP aktiv werden:

```shell
sudo systemctl restart apache2.service
```

### Suhosin

Für PHP existiert die Sicherheitserweiterung [Suhosin](https://suhosin.org/). Obwohl sie viele sinnvolle Ergänzungen für den sicheren Betrieb von Web-Applikationen unter PHP mitbringt, bergen die Standardeinstellungen viele Fallstricke. Daher kann beim Einsatz von Suhosin keine korrekte Funktionalität von i-doit gewährleistet werden.
