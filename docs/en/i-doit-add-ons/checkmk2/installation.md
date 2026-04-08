---
title: Installation
description: "Once you have met the requirements, download the latest stable version of the i-doit add-on from the i-doit customer portal."
icon:
status:
lang: en
---
# Installation

Once you have met the [requirements](./anforderungen.md), download the latest stable version of the i-doit add-on from the [i-doit customer portal](../../administration/kundenportal.md).

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

Install the downloaded ZIP file [like any other i-doit add-on](../index.md).

## Adding the Checkmk 2 Add-on Categories

The add-on additionally makes the "Checkmk Host" and "Checkmk Tags" categories available for all object types. The category can be linked to the desired object types via the object type configuration and via [Edit data structure](../../administration/verwaltung/datenstruktur/datenstruktur-bearbeiten.md). This way, only the object types you specify appear, keeping the selection list clear.

## Run idoitcmk wherever you want

The ZIP file contains the idoitcmk binary, which you can run on any other computer outside the i-doit host. Make it executable and move it to a directory in your PATH so you can run it in your terminal. For example, run it on a GNU/Linux or macOS host:

```shell
unzip idoit-cmk2-*.zip
chmod 755 idoitcmk
sudo mv idoitcmk /usr/local/bin/
```

To stay up to date, you need to repeat these steps.

## Run idoitcmk on the same machine as i-doit

On a GNU/Linux host, the following steps do not differ significantly from those above. Make the binary executable and create a symbolic link to a directory in your PATH. In this example, i-doit is installed under /var/www/html:

```shell
chmod 755 /var/www/html/idoitcmk
sudo ln -s /var/www/html/idoitcmk /usr/local/bin/
```

To stay up to date, you need to repeat these steps.
