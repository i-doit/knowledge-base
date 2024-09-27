# checkmk 2: Installation

After you’ve met the [requirements](./requirements.md) download the latest stable version of the i-doit add-on from the [i-doit customer portal](https://portal.i-doit.com/).

Install the downloaded ZIP file [like any other i-doit add-on](../index.md).

## Adding the checkmk 2 add-on categories

The add-on additionally makes the "Checkmk Host" and "Checkmk Tags" category available for all object types. The category can be linked to the desired object types via the object type configuration and [Edit data structure](../../system-administration/administration/data-structure/edit-data-structure.md). In this way, only those object types appear that are specified by the user in order to keep the selection list clear.

## Run idoitcmk where you want

The ZIP file includes the binary idoitcmk which you can install on any other computer beneath the i-doit host. Make it executable and move it to a directory within your PATH so you can run it inside your terminal. For example, execute on a GNU/Linux or MacOS host:

```shell
unzip idoit-cmk2-*.zip
chmod 755 idoitcmk
sudo mv idoitcmk /usr/local/bin/
```

To be up-to-date you need to repeat those steps.

## Run idoitcmk on the same host as i-doit

On a GNU/Linux host the following steps are not quite different than the ones above. Make the binary executable and create a symbolic link to a directory within your PATH. In this example i-doit is installed at /var/www/html:

```shell
chmod 755 /var/www/html/idoitcmk
sudo ln -s /var/www/html/idoitcmk /usr/local/bin/
```

To be up-to-date you need to download and install the ZIP file.
