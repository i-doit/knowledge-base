# checkmk 2: Frequently asked questions (FAQ)

We’ve collected some of the most asked questions about idoitcmk.

Access hardware/software inventory
----------------------------------

In a multi-site environment sites are able to collect hardware/software information from their monitored hosts. If you have configured idoitcmk to fetch information about your hosts from one site this site will need access to the other sites’ hardware/software inventory. To do so please make sure you have the following settings:

1.  Go to **WATO > Distributed Monitoring > Edit slave site > Livestatus settings > Connection**
2.  Select **Use Livestatus Proxy Daemon**
3.  Select option **TCP port to connect to** for **Connect to**
4.  Add FQDN/IP and port for the selected slave which other sites can use
5.  Uncheck **Allow access via TCP**
6.  Save and activate your changes

Now you will see inside the Web GUI a button called **Inventory** on each status page of a host. This is a good indicator that idoitcmk may access inventory information via Web API as well.

Multi-tenants
-------------

The add-on supports more than one tenants provided by i-doit. For each i-doit tenant you need to configure an unique API key.

For example, you already have created 2 or more tenants in i-doit. Create for each tenant a slightly different configuration file and add each tenant’s API key to the setting i-doit.key. The setting i-doit.url is always the same but the settings i-doit.username and i-doit.password may differ. For each tenant call idoitcmk and add the option --config:

    idoitcmk --config tenant1.json
    idoitcmk --config tenant2.json

You can even mix-up configuration files: One file contains common settings and the others are tenant-specific. For example:

    idoitcmk --config common.js --config tenant1.json
    idoitcmk --config common.js --config tenant2.json

Compare host tags between checkmk and i-doit
--------------------------------------------

Host tags are grouped in checkmk. This is an example for a tag group with all its tags:


    Internal ID: criticality
    Title: Criticality
    Topic: –
    Choices:
        1
            Tag ID: prod
            Description: Productive system
        2
            Tag ID: critical
            Description: Business critical
        3
            Tag ID: test
            Description: Test system
        4
            Tag ID: offline
            Description: Do not monitor this host

Via checkmk Web API you receive for the tag prod this key-value pair:

    tag_criticality: prod

As you can see, the key of a tag group is prefixed by tag_ followed by its Internal ID, here: criticality. The Tag ID is used as the value.

On i-doit side these grouped tags are named static host tags. You find them in Extras > Check_MK 2 > Tags (static). This is the representation of the tag prod mentioned above:

    Host tag (id): prod
    Display name: Productive system
    Host group: criticality
    Description: Criticality



Here is a direct comparison between checkmk and i-doit:

| checkmk | i-doit | i-doit key | Example |
| --- | --- | --- | --- |
| Internal ID | Host group | group | criticality |
| Title | Description | –   | Criticality |
| Topic | –   | –   | –   |
| Tag ID | Host tag (ID) | const | prod |
| Description | Display name | val | Productive system |

Self-signed certificates and other problems with TLS connections
----------------------------------------------------------------

It’s common practice to enforce TLS-encrypted HTTPS connections between idoitcmk, i-doit and checkmk – even in firewalled private networks. Often self-signed x.509 certificates are used. That’ll no problem at all, if you take care of these steps:

*   The host idoitcmk runs on (precisely: OpenSSL which is used by cURL which is used by PHP) needs to verify the complete certificate chain, especially the root certificate. Therefore, import your root certificate on that host. You should test if everything works by running the status command:

    idoitcmk status -v

*   Alternatively, but strictly not recommended just disable this certificate verification. You must disable it for both connections to i-doit and checkmk by adding two new configuration settings. Example:

    idoitcmk status -v -s "i-doit.bypassSecureConnection=true" -s "check_mk.webAPI.bypassSecureConnection=true"

Please keep in mind that disabling verification does not protect your setup from man-in-the-middle attacks. This weakens your IT security significantly. You’ll be warned.

checkmk responds with HTTP status code “414”
--------------------------------------------

Sometimes checkmk responds with HTTP status code 414 URI too long while requesting the hardware/software inventory API. For example, this could happen while executing the command pull:

    $ idoitcmk pull
    Import inventory data into CMDB

    Looking for hosts in checkmk… 
    Found 1234 hosts

    Read hardware/software inventory data for each host… 
    Web server responded with HTTP status code "414"

To prevent this error you should decrease the configuration setting i-doit.limitBatchRequests. Default value is 500. A value of 100 should be working.

Duplicated Objects after pulling to i-doit
------------------------------------------

If the Matching seems not working properly, get sure that the categorys “Checkmk Host” and Checkmk Tags" are assigned to the Objecttypes you pull to i-doit.For this you can use the [Quick Configuration Wizard](../../basics/assignment-of-categories-to-object-types.md)  
It might also be necessary to reduce the [pull identifiers](./configuration.md) to e.g. hostname.