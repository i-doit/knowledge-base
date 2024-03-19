<!-- TRANSLATED by md-translate -->
# Installation MongoDB v5

# Installation de MongoDB v5

Die Systemvoraussetzungen von MongoDB finden Sie [hier](https://docs.mongodb.com/manual/administration/production-notes/).

Vous trouverez la configuration requise pour MongoDB [ici](https://docs.mongodb.com/manual/administration/production-notes/).

Außerdem stellt MongoDB eine [Checkliste für den Einsatz im Betrieb](https://docs.mongodb.com/manual/administration/production-checklist-operations/#operations-checklist) zur Verfügung.

En outre, MongoDB met à disposition une [liste de contrôle pour l'utilisation en entreprise](https://docs.mongodb.com/manual/administration/production-checklist-operations/#operations-checklist).

!!! info "CPU AVX support"

! !! info "CPU AVX support"

```
MongoDB 5.0+ requires a CPU with AVX support
see [https://jira.mongodb.org/browse/SERVER-54407](https://jira.mongodb.org/browse/SERVER-54407)
see also [https://www.mongodb.com/community/forums/t/mongodb-5-0-cpu-intel-g4650-compatibility/116610/2](https://www.mongodb.com/community/forums/t/mongodb-5-0-cpu-intel-g4650-compatibility/116610/2)
see also [https://github.com/docker-library/mongo/issues/485#issuecomment-891991814](https://github.com/docker-library/mongo/issues/485#issuecomment-891991814)
```

!!! success "Empfehlung"

! !! success "recommandation

```
Wir beschreiben den Einsatz von Debian GNU/Linux in Version 11 "bullseye" als Betriebssystem, unter dem i-doit betrieben werden sollte.
MongoDB unterstützt derzeit Debian 11 offiziell nicht. Wir konnten aber in mehreren Testinstallationen MongoDB mit dem Forms Add-on verwenden.
```

Auf dem Terminal führen wir folgende Befehle aus:

Sur le terminal, nous exécutons les commandes suivantes :

!!! info "Ubuntu hat standardmäßig gnupg vorinstalliert, dieser Schritt kann von Ubuntu Benutzern übersprungen werden"

! !! info "Ubuntu a gnupg préinstallé par défaut, cette étape peut être ignorée par les utilisateurs d'Ubuntu".

Wir installieren gnupg:

Nous installons gnupg :

```
sudo apt-get install gnupg
```

Wir importieren den Public Key für das mongodb-org Repository:

Nous importons la clé publique pour le référentiel mongodb-org :

```
wget -qO - https://www.mongodb.org/static/pgp/server-5.0.asc | sudo apt-key add -
```

Nun erstellen wir eine sources Datei für MongoDB

Nous allons maintenant créer un fichier sources pour MongoDB

!!! attention "Dieses Repo ist nur für Debian zu verwenden!"

! !! attention "Ce repo ne doit être utilisé que pour Debian" !

```shell
echo "deb http://repo.mongodb.org/apt/debian buster/mongodb-org/5.0 main" | sudo tee /etc/apt/sources.list.d/mongodb-org-5.0.list
```

!!! attention "Dieses Repo ist nur für Ubuntu 20.04 zu verwenden!"

! !! attention "Ce repo ne peut être utilisé que pour Ubuntu 20.04" !

```shell
echo "deb http://repo.mongodb.org/apt/ubuntu focal/mongodb-org/5.0" | sudo tee /etc/apt/sources.list.d/mongodb-org-5.0.list
```

Nun aktualisieren wir die lokale package database:

Maintenant, nous mettons à jour la base de données locale des paquets :

```
sudo apt-get update
```

Jetzt können wir MongoDB installieren:

Nous pouvons maintenant installer MongoDB :

```
sudo apt-get install -y mongodb-org
```

Als nächstes laden wir die Services neu:

Ensuite, nous rechargeons les services :

```
sudo systemctl daemon-reload
```

Damit MongoDB beim nächsten Systemstart gestartet wird:

Pour que MongoDB soit lancé au prochain démarrage du système :

```
sudo systemctl enable mongod
```

Jetzt starten wir MongoDB:

Nous allons maintenant lancer MongoDB :

```
sudo systemctl start mongod
```

[Weiter zur Installation NodeJS](./installation-nodejs.md){ .md-button .md-button--primary }

[Continuer l'installation NodeJS](./installation-nodejs.md){ .md-button .md-button--primary }