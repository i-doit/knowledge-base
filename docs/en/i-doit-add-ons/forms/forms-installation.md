---
title: Installation of the Forms Add-on
description: "How i-doit is licensed can be found in the article Licensing."
icon:
status:
lang: en
---

## 1. Installation of the Forms Add-on

### License installation

How i-doit is licensed can be found in the article [Licensing](../../maintenance-and-operation/licensing.md){: target="_blank"}.

### Download and installation of the Forms Add-on

A detailed description regarding download, installation, updates, etc. can be found in the article [i-doit Add-ons](../index.md).

* * *

## 2. Install MongoDB

The system requirements for MongoDB can be found [here](https://docs.mongodb.com/manual/administration/production-notes/){: target="_blank"}. Furthermore, MongoDB provides a [checklist for production deployment](https://docs.mongodb.com/manual/administration/production-checklist-operations/#operations-checklist){: target="_blank"}.

!!! success "This guide describes the use of **Debian 12** as the operating system and the installation of **MongoDB version 8**."

!!! warning "If you are using a different operating system, please use the MongoDB installation guide at [https://www.mongodb.com/docs/manual/administration/install-community/](https://www.mongodb.com/docs/manual/administration/install-community/){: target='_blank'}"

First install `gnupg` via the console:

```shell
sudo apt-get install gnupg curl
```

Import the public key for the mongodb-org repository:

```shell
curl -fsSL https://www.mongodb.org/static/pgp/server-8.0.asc | \
sudo gpg -o /usr/share/keyrings/mongodb-server-8.0.gpg \
--dearmor
```

Create a sources file for MongoDB:

!!! attention "This repo is only to be used for **Debian 12** Bookworm!"

```shell
echo "deb [ signed-by=/usr/share/keyrings/mongodb-server-8.0.gpg ] http://repo.mongodb.org/apt/debian bookworm/mongodb-org/8.0 main" | sudo tee /etc/apt/sources.list.d/mongodb-org-8.0.list
```

Update the local package database:

```shell
sudo apt-get update
```

Install the latest stable version of MongoDB:

```shell
sudo apt-get install -y mongodb-org
```

Reload the services:

```shell
sudo systemctl daemon-reload
```

So that MongoDB starts at the next system boot:

```shell
sudo systemctl enable mongod
```

Start MongoDB:

```shell
sudo systemctl start mongod
```

* * *

## 3. Install NodeJS

!!! attention "The installation was last tested with NodeJS v22.14.0 LTS on Debian 12"

A manual download is available [here](https://nodejs.org/en/download){: target="_blank"}. Instructions are also provided there.

For the next step you need cURL:

```shell
sudo apt-get install curl
```

Install NodeJS via package manager. Use the code displayed at [https://nodejs.org/en/download](https://nodejs.org/en/download){: target="_blank"}:

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

Install NodeJS:

```shell
sudo apt-get install -y nodejs
```

* * *

## 4. Configure the Forms backend

Navigate to the Forms backend subdirectory within the i-doit installation (the path may vary):

```shell
cd /var/www/html/src/classes/modules/forms/backend/
```

Create a copy of the configuration (the Apache user may vary depending on the OS). Example for Debian/Ubuntu:

```shell
sudo -u www-data cp .env.dist .env
```

Edit the `.env` with a text editor such as `vi` or `nano`:

```shell
sudo nano .env
```

!!! warning "The **FORMS_SECRET** must not be empty. The key can consist of alphanumeric and special characters."

A **FORMS_SECRET** must be set and the file saved.

| Key                       | Value                                 | Description                                                                                                                                           |
| ------------------------- | ------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------ |
| FORMS\_SECRET=            | 'g87z$t2r346aSd6as%&f52458g724g875!' | Key for encrypting data in the database<br>Must not be empty!<br>Example: FORMS_SECRET='g87z$t2r346aSd6as%&f52458g724g875!' |
| FORMS\_PORT=              | '3000'                               | Port for connections<br>Example: FORMS_PORT='3000'                                                                                             |
| FORMS\_MONGO\_DB\_SERVER= | 'mongodb://127.0.0.1:27017/forms'    | URL and port for the connection to the MongoDB server<br>Example: FORMS_MONGO_DB_SERVER='mongodb://127.0.0.1:27017/forms'                            |

Next, create an instance. First set the execution rights for the `run.sh`:

```shell
sudo chmod +x run.sh
```

Run the `run.sh`:

```shell
sudo ./run.sh instance:create {username} {Apikey}
```

!!! info ""
    Each Forms instance has its own API and receives its own **{username}** and **{API key}**. You define these freely -- they have nothing in common with the i-doit API.
    Note down the credentials during installation, as you will need to enter them later in the Forms add-on configuration within the i-doit interface.
    Example: `sudo ./run.sh instance:create forms1 abD5zfk74dsf4i55FOS32`

Set the execution rights for the `forms-service.sh`:

```shell
sudo chmod +x forms-service.sh
```

Create the systemd service for the Forms backend. It will be automatically enabled and started:

```shell
sudo ./forms-service.sh
```

The installation is now complete.

* * *

## 5. Configuration in i-doit

For the frontend to communicate with the backend, enter the previously used username and API key in the administration under [Settings for [tenant-name]](../../administration/management/tenant-management/tenant-settings.md). Access these via **Administration → [tenant-name] Administration → Settings for [tenant-name] → Forms Add-on**.

[![Configuration in i-doit](../../assets/images/de/i-doit-add-ons/forms/installation/konfig-i-doit.png)](../../assets/images/de/i-doit-add-ons/forms/installation/konfig-i-doit.png)

[Continue with "Using the Forms Add-on"](./create-forms.md){ .md-button .md-button--primary }
