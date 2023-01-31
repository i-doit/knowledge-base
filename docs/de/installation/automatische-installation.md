# Automatische Installation

Dieser Artikel behandelt die automatische [Installation](index.md) von i-doit. Auf einem frisch installierten GNU/Linux-Betriebssystem werden alle nötigen Konfigurationsschritte durchgeführt und i-doit installiert. Zusätzlich werden Cronjobs, Backups und weitere nützliche CLI-Werkzeuge mitgeliefert. Dazu wird lediglich ein Script ausgeführt.

Umfang
------

✔ Software-Pakete installieren  
✔ Software-Pakete konfigurieren  
✔ i-doit installieren  
✔ Cronjobs einrichten  
✔ Backups einrichten  
✔ Restore einrichten

Voraussetzungen
---------------

*   Die [Systemvoraussetzungen](systemvoraussetzungen.md) **müssen** erfüllt sein. Ausgenommen davon ist der genannte LAMP Stack (Apache Web Server, MariaDB/MySQL, PHP).
*   Eines der [unterstützten](systemvoraussetzungen.md) GNU/Linux-Betriebssysteme ist frisch installiert. Debian GNU/Linux 10 "Buster" wird empfohlen.
*   Das System kann über eine Internetanbindung auf Paket-Repositories und Web Services von i-doit zugreifen.

Benutzung
---------

Die Installation übernimmt ein [Script](https://github.com/bheisig/i-doit-scripts#install-i-doit-on-a-gnulinux-operating-system), das auf dem Betriebssystem ausgeführt wird.

Die folgenden Schritte finden auf der Kommandozeile statt. Dazu verbindet man sich beispielsweise via **SSH**. Anschließend lädt man das Script herunter und macht es ausführbar:

    wget https://raw.githubusercontent.com/i-doit/scripts/main/idoit-install
chmod 755 idoit-install

Das Script muss mit **root**-Rechten ausgeführt werden. Wenn **sudo** zur Verfügung steht:

    sudo ./idoit-install

Alternativ meldet man sich als **root** an:

    su
    ./idoit-install

Das Script stellt mehrere Fragen zur Konfiguration. Für alle Fragen gibt es vordefinierte Antworten, die mit dem Drücken von **ENTER** übernommen werden können.

Nächste Schritte
----------------
<!----TODO: fixme---->

*   [Eine gültige Lizenz einspielen (nur i-doit pro)](/display/de/Lizenz+aktivieren)
*   [Tipps zur Sicherheit und zum Schutz beachten](/display/de/Sicherheit+und+Schutz)
*   [Erste Schritte mit i-doit](/display/de/Grundlagen)