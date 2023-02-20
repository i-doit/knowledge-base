# "Lost link to database"

Problem
-------

In der Login-Maske erscheint nach Angabe der Credentials die Fehlermeldung **Lost link to database**. Der Login schlägt fehl.

Lösung
------

i-doit ist nicht in der Lage, auf die gewünschte [Mandanten-Datenbank](../../software-entwicklung/datenbank-modell/index.md) zuzugreifen. Schnell kann dieser Fehler passieren, wenn die Installation von i-doit auf ein anderes System umzieht und die User für MySQL/MariaDB auf dem neuen System nicht existieren.

i-doit speichert in der [System-Datenbank](../../software-entwicklung/datenbank-modell/index.md) (idoit_system bei [Standardinstallationen](../../installation/manuelle-installation/setup.md)) in der Tabelle isys_mandator alle konfigurierten Mandanten. Jeder Mandant erhält eine von den übrigen separate Datenbank (idoit_data für den ersten Mandanten bei Standardinstallationen). Um auf diese Datenbank zugreifen zu können, kann man dedizierte Credentials vergeben. Diese befinden sich in den Spalten isys_mandator__db_user und isys_mandator__db_pass. Diese sollten auf Gültigkeit überprüft werden. Auch schadet es nicht, die übrigen Angaben zu überprüfen.

Testen kann man dies auf der Kommandozeile:

    mysql -hlocalhost -uidoit -p

Hier sind die Crentials für die gewünschte Mandanten-Datenbank anzugeben. Nach dem Ausführen des Befehls fragt mysql nach dem Passwort. Schlägt die Anmeldung fehl, sind die Credentials nicht gültig. Ist die Anmeldung erfolgreich, sollte zusätzlich geprüft werden, ob der User Leserechte auf die Mandanten-Datenbank hat:

    mysql> USE idoit_data;
    mysql> SHOW TABLES;

Auch hier gilt wieder: Werden Fehlermeldungen ausgegeben, stimmt etwas nicht.

Ein genauer Blick in die User-Tabelle von MySQL/MariaDB bringt Klarheit bzw. schafft Abhilfe. Hierzu sollte man sich als Datenbank-Administrator anmelden (oftmals root):

    mysql -hlocalhost -uroot -p
    mysql> USE mysql;
    mysql> SELECT * FROM user;

Fehlt der User, kann man ihn beispielsweise mit diesem Befehl nachtragen:

    mysql> GRANT ALL PRIVILEGES ON idoit_data TO 'idoit'@'localhost' IDENTIFIED BY 'idoit';

Bei diesem Beispiel ist unbedingt darauf zu achten, den Namen der Mandanten-Datenbank, den User und dessen Passwort durch die richtigen bzw. durch sichere Angaben zu ersetzen.

Wer sich vor der Kommandozeile sträubt, kann alternativ auf Administrations-Werkzeuge für MySQL/MariaDB wie beispielsweise [phpMyAdmin](https://de.wikipedia.org/wiki/PhpMyAdmin) zurückgreifen.