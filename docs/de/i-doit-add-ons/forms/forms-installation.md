---
title: Installation des Forms Add-on
description: "Wie i-doit lizenziert wird findest du im Artikel Lizenzierung{: target=\"_blank\"}."
icon:
status:
lang: de
---

## 1. Installation des Forms Add-on

### Installation der Lizenz

Wie i-doit lizenziert wird findest du im Artikel [Lizenzierung](../../wartung-und-betrieb/lizenzierung.md){: target="_blank"}.

### Download und Installation des Forms Add-on

Eine detaillierte Beschreibungen bezüglich Download, Installation, Updates usw. liefert der Artikel [i-doit Add-ons](../index.md).

* * *

## 2. Installation MongoDB

Die Systemvoraussetzungen von MongoDB findest du [hier](https://docs.mongodb.com/manual/administration/production-notes/){: target="_blank"}. Außerdem stellt MongoDB eine [Checkliste für den Einsatz im Betrieb](https://docs.mongodb.com/manual/administration/production-checklist-operations/#operations-checklist){: target="_blank"} zur Verfügung.

!!! success "Diese Anleitung beschreibt den Einsatz von **Debian 12** als Betriebssystem sowie die Installation von **MongoDB Version 8**."

!!! warning "Wenn du ein anderes Betriebssystem verwenden nutzt du bitte die MongoDB Anleitung für die Installation [https://www.mongodb.com/docs/manual/administration/install-community/](https://www.mongodb.com/docs/manual/administration/install-community/){: target="_blank"}"

Installiere zuerst `gnupg` auf der Konsole:

```shell
sudo apt-get install gnupg curl
```

Importiere den Public Key für das mongodb-org Repository:

```shell
curl -fsSL https://www.mongodb.org/static/pgp/server-8.0.asc | \
sudo gpg -o /usr/share/keyrings/mongodb-server-8.0.gpg \
--dearmor
```

Erstelle eine sources-Datei für MongoDB:

!!! attention "Dieses Repo ist nur für **Debian 12** Bookworm  zu verwenden!"

!!! note "Debian 13 (trixie)"
    Für MongoDB 8 gibt es (Stand 22.10.2026) noch kein eigenes `trixie`-Repository. Auf Debian 13 funktioniert die
    `bookworm`-Repo-Zeile als Behelf. Diese Anleitung ist mit **Debian 12** getestet.

```shell
echo "deb [ signed-by=/usr/share/keyrings/mongodb-server-8.0.gpg ] http://repo.mongodb.org/apt/debian bookworm/mongodb-org/8.0 main" | sudo tee /etc/apt/sources.list.d/mongodb-org-8.0.list
```

Aktualisiere die lokale Package-Database:

```shell
sudo apt-get update
```

Installiere die neueste stabile Version von MongoDB:

```shell
sudo apt-get install -y mongodb-org
```

Lade die Services neu:

```shell
sudo systemctl daemon-reload
```

Damit MongoDB beim nächsten Systemstart gestartet wird:

```shell
sudo systemctl enable mongod
```

Starte MongoDB:

```shell
sudo systemctl start mongod
```

* * *

## 3. Installation NodeJS

!!! attention "Getestet mit NodeJS v22.23.4, auf Debian 12. Forms benötigt Node 22 (`engines: node ^22.13.0`)."

Der Forms-Backend-Dienst läuft als Benutzer `www-data` und startet `node` aus dem System-`PATH`. Node muss daher
**systemweit** in Version 22 installiert sein. `nvm` im Home eines Benutzers genügt nicht, weil `www-data` es nicht
sieht.

Zuerst cURL installieren:

```shell
sudo apt-get install -y curl
```

NodeJS 22.x über das offizielle NodeSource-Repository installieren:

```shell
curl -fsSL https://deb.nodesource.com/setup_22.x | sudo -E bash -
sudo apt-get install -y nodejs
```

Version prüfen:

```shell
node -v    # v22.23.4 oder neuer
npm -v
```

!!! warning "Kein zusätzliches `apt-get install nodejs` aus den Debian-Quellen"
    Das Debian-Paket `nodejs` liefert auf Debian 12 Node 18 und auf Debian 13 Node 20 (beide End-of-Life). Wird es
    zusätzlich installiert, benutzt der Forms-Dienst es und läuft mit veraltetem, verwundbarem Node. Nur die
    NodeSource-Quelle (oder eine andere Quelle, die systemweit Node 22 unter `/usr/bin/node` bereitstellt) verwenden.

* * *

## 4. Konfiguration das Forms Backend

Navigiere in den Forms-Backend-Unterordner innerhalb der i-doit-Installation (der Pfad kann abweichen):

```shell
cd /var/www/html/src/classes/modules/forms/backend/
```

Erstelle eine Kopie der Konfiguration (der Apache-Benutzer kann je nach OS abweichen). Beispiel für Debian/Ubuntu:

```shell
sudo -u www-data cp .env.dist .env
```

Editiere die `.env` mit einem Texteditor wie `vi` oder `nano`:

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

Als nächstes erstellst du eine Instanz. Setze zunächst die Ausführungsrechte für die `run.sh`:

```shell
sudo chmod +x run.sh
```

Führe die `run.sh` aus:

```shell
sudo ./run.sh instance:create {Benutzername} {Apikey}
```

!!! info ""
    Jede Forms-Instanz hat eine eigene API und bekommt einen eigenen **{Benutzernamen}** sowie **{APIkey}**. Diese definierst du frei -- sie haben nichts mit der i-doit-API gemeinsam.
    Notiere dir die Daten bei der Installation, da du sie später in der Konfiguration des Forms Add-on in der i-doit-Oberfläche einträgst.
    Beispiel: `sudo ./run.sh instance:create forms1 abD5zfk74dsf4i55FOS32`

Setze die Ausführungsrechte für die `forms-service.sh`:

```shell
sudo chmod +x forms-service.sh
```

Erstelle den systemd-Service für das Forms-Backend. Dieser wird automatisch aktiviert und gestartet:

```shell
sudo ./forms-service.sh
```

Damit ist die Installation abgeschlossen.

* * *

## 5. Konfiguration in i-doit

Damit das Frontend mit dem Backend kommunizieren kann, hinterlegst du den zuvor verwendeten Benutzernamen und den APIkey in der Verwaltung unter [Einstellungen für [Mandanten-Name]](../../administration/verwaltung/mandanten-name-verwaltung/einstellungen-mandanten-name.md) hinterlegen. Aufgerufen werden diese über **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → Forms Add-on**.

[![Konfiguration in i-doit](../../assets/images/de/i-doit-add-ons/forms/installation/konfig-i-doit.png)](../../assets/images/de/i-doit-add-ons/forms/installation/konfig-i-doit.png)

[Weiter mit "Forms Add-on verwenden"](./forms-verwenden.md){ .md-button .md-button--primary }
