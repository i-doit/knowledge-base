---
title: Installing the Forms add-on
description: Installing the Forms add-on
icon:
status:
lang: en
---

## 1. Install Forms add-on

### Installing the license

You can find out how i-doit is licensed in the article [Licensing](../../maintenance-and-operation/licensing.md){: target="_blank"}.

### Download and installation of the Forms add-on

A detailed descriptions regarding download, installation, updates etc. can be found in the article [i-doit Add-ons](index.md).

* * *

## 2. Installation MongoDB

The system requirements of MongoDB can be found [here](https://docs.mongodb.com/manual/administration/production-notes/). In addition, MongoDB provides a [checklist for use in operation](https://docs.mongodb.com/manual/administration/production-checklist-operations/#operations-checklist).

!!! success "We describe the use of **Debian 12** as the operating system and the installation of **MongoDB version 8**"

!!! warning "If you are using a different operating system, please use the MongoDB installation instructions [https://www.mongodb.com/docs/manual/administration/install-community/](https://www.mongodb.com/docs/manual/administration/install-community/){: target="_blank"}"

First install `gnupg`:

```shell
sudo apt-get install gnupg curl
```

We import the public key for the mongodb-org repository:

```shell
curl -fsSL https://www.mongodb.org/static/pgp/server-8.0.asc | \
sudo gpg -o /usr/share/keyrings/mongodb-server-8.0.gpg \
--dearmor
```

Now we create a sources file for MongoDB:

!!! attention "This repo is to be used for **Debian 12** only!"

```shell
echo "deb [ signed-by=/usr/share/keyrings/mongodb-server-8.0.gpg ] http://repo.mongodb.org/apt/debian bookworm/mongodb-org/8.0 main" | sudo tee /etc/apt/sources.list.d/mongodb-org-8.0.list
```

Now we update the local package database:

```shell
sudo apt-get update
```

Now we can install the latest stable version of MongoDB:

```shell
sudo apt-get install -y mongodb-org
```

Next, we reload the services:

```shell
sudo systemctl daemon-reload
```

So that MongoDB is started at the next system start:

```shell
sudo systemctl enable mongod
```

Now we start MongoDB:

```shell
sudo systemctl start mongod
```

* * *

## 3. Installation NodeJS

!!! attention "The installation was last tested with NodeJS v22.14.0 LTS, on Debian 12"

Dependencies can be found [here](https://nodejs.org/en/download){: target="_blank"}. A manual download as well as a installation guide can also be found there.

For the next step we need cURL:

```shell
sudo apt-get install curl
```

NodeJS is installed automatically via the package manager using the code displayed via [https://nodejs.org/en/download](https://nodejs.org/en/download){: target="_blank"}:

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

Now we can install NodeJS:

```shell
sudo apt-get install -y nodejs
```

* * *

## 4. Configuration of the Forms backend

First, we navigate to the Form Backend subfolder within the i-doit installation:

```shell
cd /var/www/html/i-doit/src/classes/modules/forms/backend/
```

We create a copy of the configuration template:

```shell
sudo -u www-data cp .env.dist .env
```

Using a text editor like, `vi` or `nano`, we now edit the `.env`:

```shell
sudo nano .env
```

!!! warning "The **FORMS_SECRET** must not be empty. The key can consist of alphanumeric and special characters."

A **FORMS_SECRET** must be set and the file saved.

| Key                      | Value                                | Description                                                                                                                          |
| ------------------------ | ------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| FORMS\_SECRET            | 'g87z$t2r346aSd6as%&f52458g724g875!' | Key for encrypting the data in the database.  <br>Must not be empty!  <br>Example: FORMS_SECRET='g87z$t2r346aSd6as%&f52458g724g875!' |
| FORMS\_PORT              | '3000'                               | Port for connections  <br>Example: FORMS_PORT='3000'                                                                                 |
| FORMS\_MONGO\_DB\_SERVER | 'mongodb://127.0.0.1:27017/forms'    | URL and port to connect to the MongoDB server  <br>Example: FORMS_MONGO_DB_SERVER='mongodb://127.0.0.1:27017/forms'                  |

Next, we create an instance. In order to use the `run.sh`, we must first set the rights for execution:

```shell
sudo chmod +x run.sh
```

Now we can run the `run.sh`:

```shell
sudo ./run.sh instance:create {Benutzername} {Apikey}
```

!!!info ""
    Each Forms instance has its own API and gets its own **{Username}** and **{Apikey}**. These can be defined freely and have nothing in common with the i-doit API.
    The data must be noted during the installation, because they must be entered later in the configuration of the Forms Add-on in the i-doit interface.
    Example: `sudo ./run.sh instance:create forms1 abD5zfk74dsf4i55FOS32`

To use `forms-service.sh`, we must first set the rights to execute it:

```shell
sudo chmod +x forms-service.sh
```

We now have the systemd service created for the Forms backend. The Service will be activated and started:

```shell
sudo ./forms-service.sh
```

This completes the installation.

* * *

## 5. Configuration in i-doit

In order for the frontend to be able to communicate with the backend, we have to store the previously used user name and the API key in the [tenant settings](../../system-administration/administration/tenant-management/settings-for-tenant.md). These are accessed via **Administration → [Tenant name] management → Settings for [Tenant name] → Forms Add-on**.

[![Configuration in i-doit](../../assets/images/en/i-doit-add-ons/forms/install/tenant-conf.png)](../../assets/images/en/i-doit-add-ons/forms/install/tenant-conf.png)

[Continue to create forms](./use-forms.md){ .md-button .md-button--primary }
