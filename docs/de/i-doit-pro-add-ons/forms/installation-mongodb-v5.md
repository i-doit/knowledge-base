# Installation MongoDB v5

Die Systemvoraussetzungen von MongoDB finden Sie [hier](https://docs.mongodb.com/manual/administration/production-notes/).

Außerdem stellt MongoDB eine [Checkliste für den Einsatz im Betrieb](https://docs.mongodb.com/manual/administration/production-checklist-operations/#operations-checklist) zur Verfügung.

!!! info "CPU AVX support"

    MongoDB 5.0+ requires a CPU with AVX support
    see [https://jira.mongodb.org/browse/SERVER-54407](https://jira.mongodb.org/browse/SERVER-54407)
    see also [https://www.mongodb.com/community/forums/t/mongodb-5-0-cpu-intel-g4650-compatibility/116610/2](https://www.mongodb.com/community/forums/t/mongodb-5-0-cpu-intel-g4650-compatibility/116610/2)
    see also [https://github.com/docker-library/mongo/issues/485#issuecomment-891991814](https://github.com/docker-library/mongo/issues/485#issuecomment-891991814)

!!! success "Empfehlung"

    Wir beschreiben den Einsatz von Debian GNU/Linux in Version 11 "bullseye" als Betriebssystem, unter dem i-doit betrieben werden sollte.
    MongoDB unterstützt derzeit Debian 11 offiziell nicht. Wir konnten aber in mehreren Testinstallationen MongoDB mit dem Forms Add-on verwenden.

Auf dem Terminal führen wir folgende Befehle aus:

Wir installieren gnupg:

    sudo apt-get install gnupg

Wir importieren den Public Key für das mongodb-org Repository:

    wget -qO - https://www.mongodb.org/static/pgp/server-5.0.asc | sudo apt-key add -

Nun erstellen wir eine sources Datei für MongoDB

Dieses Repo ist nur für Debian zu verwenden!

    echo "deb [http://repo.mongodb.org/apt/debian](http://repo.mongodb.org/apt/debian) buster/mongodb-org/5.0 main" | sudo tee /etc/apt/sources.list.d/mongodb-org-5.0.list

Nun aktualisieren wir die lokale package database:

    sudo apt-get update

Jetzt können wir MongoDB installieren:

    sudo apt-get install -y mongodb-org

Als nächstes laden wir die Services neu:

    sudo systemctl daemon-reload

Damit MongoDB beim nächsten Systemstart gestartet wird:

    sudo systemctl enable mongod

Jetzt starten wir MongoDB:

    sudo systemctl start mongod

[Weiter zur Installation NodeJS](./installation-nodejs.md)
