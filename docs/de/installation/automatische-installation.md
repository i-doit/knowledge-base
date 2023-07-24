# Automatische Installation

Dieser Artikel behandelt die automatische [Installation](index.md) von i-doit. Auf einem frisch installierten GNU/Linux-Betriebssystem werden alle nötigen Konfigurationsschritte durchgeführt und i-doit installiert. Zusätzlich werden Cronjobs, Backups und weitere nützliche CLI-Werkzeuge mitgeliefert. Dazu wird lediglich ein Script ausgeführt.

## Umfang

✔ Software-Pakete installieren<br>
✔ Software-Pakete konfigurieren<br>
✔ i-doit installieren<br>
✔ Cronjobs einrichten<br>
✔ Backups einrichten<br>
✔ Restore einrichten

## Voraussetzungen

- Die [Systemvoraussetzungen](systemvoraussetzungen.md) **müssen** erfüllt sein. Ausgenommen davon ist der genannte LAMP Stack (Apache Web Server, MariaDB/MySQL, PHP).
- Eines der [unterstützten](systemvoraussetzungen.md) GNU/Linux-Betriebssysteme ist frisch installiert.
- Das System kann über eine Internetanbindung auf Paket-Repositories und Web Services von i-doit zugreifen.

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

## Nächste Schritte

- [Eine gültige Lizenz einspielen (nur i-doit pro)](../wartung-und-betrieb/lizenz-aktivieren.md)
- [Tipps zur Sicherheit und zum Schutz beachten](../wartung-und-betrieb/sicherheit-und-schutz.md)
- [Erste Schritte mit i-doit](../grundlagen/index.md)
