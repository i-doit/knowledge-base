---
title: Installation des Forms Add-on
description: Installation des Forms Add-on
icon:
status:
lang: de
---

## 1. Installation des Forms Add-on

### Installation der Lizenz

Wie i-doit lizenziert wird finden Sie im Artikel [Lizenzierung](../../wartung-und-betrieb/lizenzierung.md){: target="_blank"}.

### Download und Installation des Forms Add-on

Eine detaillierte Beschreibungen bezüglich Download, Installation, Updates usw. liefert der Artikel [i-doit Add-ons](../index.md).

* * *

## 2. Installation MongoDB

Die Systemvoraussetzungen von MongoDB finden Sie [hier](https://docs.mongodb.com/manual/administration/production-notes/){: target="_blank"}. Außerdem stellt MongoDB eine [Checkliste für den Einsatz im Betrieb](https://docs.mongodb.com/manual/administration/production-checklist-operations/#operations-checklist){: target="_blank"} zur Verfügung.

!!! success "Wir beschreiben den Einsatz von **Debian 12** als Betriebssystem sowie der Installation von **MongoDB Version 8**"

!!! warning "Wenn Sie ein anderes Betriebssystem verwenden nutzen Sie bitte die MongoDB Anleitung für die Installation [https://www.mongodb.com/docs/manual/administration/install-community/](https://www.mongodb.com/docs/manual/administration/install-community/){: target="_blank"}"

Auf der Konsole installieren wir zuerst `gnupg`:

```shell
sudo apt-get install gnupg curl
```

Wir importieren den Public Key für das mongodb-org Repository:

```shell
curl -fsSL https://www.mongodb.org/static/pgp/server-8.0.asc | \
sudo gpg -o /usr/share/keyrings/mongodb-server-8.0.gpg \
--dearmor
```

Nun erstellen wir eine sources Datei für MongoDB

!!! attention "Dieses Repo ist nur für **Debian 12** Bookworm  zu verwenden!"

```shell
echo "deb [ signed-by=/usr/share/keyrings/mongodb-server-8.0.gpg ] http://repo.mongodb.org/apt/debian bookworm/mongodb-org/8.0 main" | sudo tee /etc/apt/sources.list.d/mongodb-org-8.0.list
```

Nun aktualisieren wir die lokale package database:

```shell
sudo apt-get update
```

Jetzt können wir die neueste stabile Version von MongoDB installieren:

```shell
sudo apt-get install -y mongodb-org
```

Als nächstes laden wir die Services neu:

```shell
sudo systemctl daemon-reload
```

Damit MongoDB beim nächsten Systemstart gestartet wird:

```shell
sudo systemctl enable mongod
```

Jetzt starten wir MongoDB:

```shell
sudo systemctl start mongod
```

* * *

## 3. Installation NodeJS

!!! attention "Die Installation wurde zuletzt mit NodeJS v22.14.0 LTS, auf Debian 12 getestet"

Ein manueller Download ist [hier](https://nodejs.org/en/download){: target="_blank"} möglich. Eine Anleitung ist dort auch zu finden.

Für den nächsten Schritt benötigen wir cURL:

```shell
sudo apt-get install curl
```

NodeJS wird via package manager automatisch installiert dazu verwenden wir den Code der über [https://nodejs.org/en/download](https://nodejs.org/en/download){: target="_blank"} angezeigt wird:

```shell
# Download and install nvm:
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.40.2/install.sh | bash

# in lieu of restarting the shell
\. "$HOME/.nvm/nvm.sh"

# Download and install Node.js:
nvm install 22

# Verify the Node.js version:
node -v # Should print "v22.14.0".
nvm current # Should print "v22.14.0".

# Verify npm version:
npm -v # Should print "10.9.2".
```

Nun können wir NodeJS installieren:

```shell
sudo apt-get install -y nodejs
```

* * *

## 4. Konfiguration das Forms Backend

Zuerst navigieren wir in den Form Backend Unterordner innerhalb der i-doit Installation, der Pfad kann abweichen:

```shell
cd /var/www/html/i-doit/src/classes/modules/forms/backend/
```

Wir erstellen eine Kopie der Konfiguration, der Apache Benutzer kann je nach OS abweichen. Das Beispiel für Debian/Ubuntu:

```shell
sudo -u www-data cp .env.dist .env
```

Mit einem Texteditor wie, `vi` oder `nano`, editieren wir nun die `.env`:

```shell
sudo nano .env
```

!!! warning "Das **FORMS_SECRET** darf nicht leer sein. Der Schlüssel kann aus alphanumerischen- sowie Sonderzeichen bestehen."

Es muss ein **FORMS_SECRET** gesetzt und die Datei gespeichert werden.

| Key                       | Wert                                 | Beschreibung                                                                                                                                           |
| ------------------------- | ------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------ |
| FORMS\_SECRET=            | 'g87z$t2r346aSd6as%&f52458g724g875!' | Schlüssel zum Verschlüsseln der Daten in der Datenbank  <br>Darf nicht leer sein!  <br>Zum Beispiel: FORMS_SECRET='g87z$t2r346aSd6as%&f52458g724g875!' |
| FORMS\_PORT=              | '3000'                               | Port für Verbindungen  <br>Zum Beispiel: FORMS_PORT='3000'                                                                                             |
| FORMS\_MONGO\_DB\_SERVER= | 'mongodb://127.0.0.1:27017/forms'    | URL und Port zur Verbindung mit dem MongoDB Server<br>Zum Beispiel: FORMS_MONGO_DB_SERVER='mongodb://127.0.0.1:27017/forms'                            |

Als nächstes erstellen wir eine Instanz. Um die `run.sh` zu verwenden, müssen wir erst die Rechte zum Ausführen setzen:

```shell
sudo chmod +x run.sh
```

Jetzt können wir die `run.sh` ausführen:

```shell
sudo ./run.sh instance:create {Benutzername} {Apikey}
```

!!! info ""
    Jede Forms Instanz hat eine eigene API und bekommt einen eigenen **{Benutzernamen}** sowie **{APIkey}**. Diese können frei definiert werden und haben nichts mit der i-doit API gemeinsam.
    Die Daten müssen bei der Installation notiert werden, da sie später in der Konfiguration des Forms Add-on in der i-doit Oberfläche eingetragen werden müssen.
    Beispiel: `sudo ./run.sh instance:create forms1 abD5zfk74dsf4i55FOS32`

Um die `forms-service.sh` zu verwenden, müssen wir erst die Rechte zum Ausführen setzen:

```shell
sudo chmod +x forms-service.sh
```

Wir lassen nun den systemd Service für das Forms-Backend erstellen. Dieser wird aktiviert und gestartet:

```shell
sudo ./forms-service.sh
```

Damit ist die Installation abgeschlossen.

* * *

## 5. Konfiguration in i-doit

Damit das Frontend mit dem Backend kommunizieren kann, müssen wir den zuvor verwendeten Benutzername und den APIkey in der Verwaltung unter [Einstellungen für [Mandanten-Name]](../../administration/verwaltung/mandanten-name-verwaltung/einstellungen-mandanten-name.md) hinterlegen. Aufgerufen werden diese über **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → Forms Add-on**.

[![Konfiguration in i-doit](../../assets/images/de/i-doit-add-ons/forms/installation/konfig-i-doit.png)](../../assets/images/de/i-doit-add-ons/forms/installation/konfig-i-doit.png)

[Weiter mit "Forms Add-on verwenden"](./forms-verwenden.md){ .md-button .md-button--primary }
