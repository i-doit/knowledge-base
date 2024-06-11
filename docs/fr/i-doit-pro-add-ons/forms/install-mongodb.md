# Installer MongoDB v5

Les exigences système de MongoDB peuvent être trouvées [ici](https://docs.mongodb.com/manual/administration/production-notes/).

De plus, MongoDB fournit une [liste de contrôle à utiliser en opération](https://docs.mongodb.com/manual/administration/production-checklist-operations/#operations-checklist).

!!! info "Support CPU AVX"

    MongoDB 5.0+ nécessite un CPU avec le support AVX<br>
     voir [https://jira.mongodb.org/browse/SERVER-54407](https://jira.mongodb.org/browse/SERVER-54407)<br>
     voir aussi [https://www.mongodb.com/community/forums/t/mongodb-5-0-cpu-intel-g4650-compatibility/116610/2](https://www.mongodb.com/community/forums/t/mongodb-5-0-cpu-intel-g4650-compatibility/116610/2)<br>
     voir aussi [https://github.com/docker-library/mongo/issues/485#issuecomment-891991814](https://github.com/docker-library/mongo/issues/485#issuecomment-891991814)

!!! success "Recommandation"

    Nous décrivons l'utilisation de **Debian GNU/Linux version 11 "bullseye"** comme le système d'exploitation sous lequel i-doit devrait être exécuté.<br>

MongoDB ne prend actuellement pas en charge officiellement Debian 11. Cependant, nous avons pu utiliser MongoDB avec l'add-on Forms dans plusieurs installations de test.

Dans le terminal, nous exécutons les commandes suivantes :

!!! info "Ubuntu est livré avec gnupg, pour les utilisateurs d'Ubuntu, cette étape peut être ignorée."

Nous installons gnupg :

    sudo apt-get install gnupg

Nous importons la clé publique du dépôt mongodb-org :

    wget -qO - https://www.mongodb.org/static/pgp/server-5.0.asc | sudo apt-key add -

Maintenant, nous créons un fichier sources pour MongoDB :

!!! attention "Ce dépôt est destiné à être utilisé uniquement pour Debian !"

```shell
echo "deb http://repo.mongodb.org/apt/debian buster/mongodb-org/5.0 main" | sudo tee /etc/apt/sources.list.d/mongodb-org-5.0.list 
```

!!! attention "Ce dépôt est destiné à être utilisé uniquement pour Ubuntu 20.04 !"

```shell
echo "deb http://repo.mongodb.org/apt/ubuntu focal/mongodb-org/5.0" | sudo tee /etc/apt/sources.list.d/mongodb-org-5.0.list 
```

Maintenant, nous mettons à jour la base de données locale des paquets :

    sudo apt-get update

Maintenant, nous pouvons installer MongoDB :

    sudo apt-get install -y mongodb-org

Ensuite, nous rechargeons les services :

```bash
sudo systemctl daemon-reload
```

Afin que MongoDB démarre au prochain démarrage du système :

```bash
sudo systemctl enable mongod
```

Maintenant, nous démarrons MongoDB :

```bash
sudo systemctl start mongod
```

[Continuer avec l'installation de NodeJS](./install-nodejs.md){ .md-button .md-button--primary }
