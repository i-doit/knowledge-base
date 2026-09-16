---
title: Automatische Installation
description: "Der schnellste Weg zu einem lauffähigen i-doit: Ein Script installiert und konfiguriert auf einem frischen Linux-System alles Nötige — Apache, PHP,..."
icon:
status:
lang: de
---
# Automatische Installation

Der schnellste Weg zu einem lauffähigen i-doit: Ein Script installiert und konfiguriert auf einem frischen Linux-System alles Nötige — Apache, PHP, MariaDB, i-doit selbst sowie Cronjobs und Backups.

## Voraussetzungen

-   Die [Systemvoraussetzungen](systemvoraussetzungen.md) **müssen** erfüllt sein. Ausgenommen davon ist der genannte LAMP Stack (Apache Web Server, MariaDB/MySQL, PHP).
-   Eines der [unterstützten](systemvoraussetzungen.md) GNU/Linux-Betriebssysteme ist frisch installiert.
-   Das System kann über eine Internetanbindung auf Paket-Repositories und Web Services von i-doit zugreifen.

## Benutzung

Die Installation übernimmt ein [Script](https://github.com/i-doit/scripts#install-i-doit-on-a-gnulinux-operating-system), das auf dem Betriebssystem ausgeführt wird. <br>
Die folgenden Schritte finden auf der Kommandozeile statt. Dazu verbindet man sich beispielsweise via **SSH**. Anschließend lädt man das Script herunter und macht es ausführbar:

```shell
wget https://raw.githubusercontent.com/i-doit/scripts/main/idoit-install
chmod 755 idoit-install
```

Das Script muss mit **root**-Rechten ausgeführt werden. Wenn **sudo** zur Verfügung steht:

```shell
sudo ./idoit-install
```

Alternativ meldet man sich als **root** an:

```shell
su
./idoit-install
```

Das Script stellt mehrere Fragen zur Konfiguration. Für alle Fragen gibt es vordefinierte Antworten, die mit dem Drücken von **ENTER** übernommen werden können.

## Was das Script macht

Bevor es etwas ändert, listet das Script seine Schritte auf und fragt vor jedem einzelnen nach, sodass sich Schritte auch überspringen lassen. In dieser Reihenfolge

1. erkennt es das Betriebssystem und prüft die Hardware- und Softwarevoraussetzungen,
2. konfiguriert optional einen Proxy-Server für den benötigten Web-Zugriff,
3. installiert die benötigten Distributionspakete, darunter memcached,
4. konfiguriert PHP und PHP-FPM,
5. konfiguriert den Apache Webserver (VirtualHost für i-doit, Event-MPM),
6. konfiguriert MariaDB (zum Beispiel die Größe des InnoDB Buffer Pools),
7. lädt die aktuelle i-doit Version in der gewählten Variante (EVAL, pro oder open) herunter, installiert sie und legt optional den ersten Mandanten an,
8. richtet die Cronjobs und den Kommandozeilen-Wrapper `idoit` für die `console.php` ein,
9. richtet die Scripts `idoit-backup` und `idoit-restore` ein und erstellt das erste Backup.

Eine ausführliche Beschreibung der einzelnen Schritte und der eingerichteten Scripts findet sich in der [README des Repositorys i-doit/scripts](https://github.com/i-doit/scripts#readme).

## Nächste Schritte

-   [Eine gültige Lizenz einspielen (nur i-doit)](../wartung-und-betrieb/lizenzierung.md)
-   [Tipps zur Sicherheit und zum Schutz beachten](../wartung-und-betrieb/sicherheit-und-schutz.md)
-   [Erste Schritte mit i-doit](../grundlagen/index.md)
