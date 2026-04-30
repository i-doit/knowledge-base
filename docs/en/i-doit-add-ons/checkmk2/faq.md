---
title: Frequently Asked Questions (FAQ)
description: Here you can find some of the most frequently asked questions about idoitcmk.
icon:
status:
lang: en
---
# Frequently Asked Questions (FAQ)

Here you can find some of the most frequently asked questions about idoitcmk.

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

## Access to Hardware/Software Inventory

In a multi-site environment, sites can retrieve hardware/software information from their monitored hosts. If you have configured idoitcmk to retrieve information about your hosts from a site, that site needs access to the hardware/software inventory of the other sites. Please make sure you have made the following settings:

1. Go to `**WATO > Distributed Monitoring > Edit slave site > Livestatus settings > Connection**`
2. Select `**Use Livestatus Proxy Daemon**`
3. Select the option `**TCP port to connect to**` for `**Connect to**`
4. Add FQDN/IP and port for the selected slave that other sites can use
5. Deactivate `**Allow access via TCP**`
6. Save and activate your changes

Now you will see a button labeled **Inventory** on every host status page in the web GUI. This is a good indicator that idoitcmk can also access inventory information via the web API.

## Multi-Tenants

The add-on supports more than one tenant provided by i-doit. For each i-doit tenant, you need to configure a unique API key.

For example, you have already created 2 or more tenants in i-doit. Create a slightly different configuration file for each tenant and add the API key of each tenant to the i-doit.key setting. The i-doit.url setting is always the same, but the i-doit.username and i-doit.password settings may differ. For each tenant, you call idoitcmk and add the --config option:

```shell
idoitcmk --config tenant1.json
idoitcmk --config tenant2.json
```

You can even mix the configuration files: One file contains general settings and the others are tenant-specific. For example:

```shell
idoitcmk --config common.js --config tenant1.json
idoitcmk --config common.js --config tenant2.json
```

## Comparing Host Tags between Checkmk and i-doit

Host tags are grouped in Checkmk. This is an example of a tag group with all its tags:

    Internal ID: criticality
    Title: Criticality
    Topic: -
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

Via the Checkmk Web API, you get this key-value pair for the tag prod:

```shell
tag_criticality: prod
```

As you can see, the key of a tag group is prefixed with tag_, followed by its internal ID, here: criticality. The tag ID is used as the value.

On the i-doit side, these grouped tags are referred to as static host tags. You can find them under `Extras > Check_MK 2 > Tags (static)`. Here is the representation of the tag prod mentioned above:

```shell
Host tag (id): prod
Display name: Productive system
Host group: criticality
Description: Criticality
```

Here is a direct comparison between Checkmk and i-doit:

| Checkmk     | i-doit        | i-doit key | Example          |
| ----------- | ------------- | ---------- | ----------------- |
| Internal ID | Host group    | group      | criticality       |
| Title       | Description   | -          | Criticality       |
| Topic       | -             | -          | -                 |
| Tag ID      | Host tag (ID) | const      | prod              |
| Description | Display name  | val        | Productive system |

## Self-Signed Certificates and Other TLS Connection Issues

It is common practice to enforce TLS-encrypted HTTPS connections between idoitcmk, i-doit, and Checkmk -- even in private networks with firewalls. Self-signed x.509 certificates are often used in this context. This is no problem at all, as long as you follow these steps:

*   The host running idoitcmk (more specifically: OpenSSL, used by cURL, which in turn is used by PHP) must be able to verify the complete certificate chain, particularly the root certificate. Therefore, import your root certificate on this host. You should test whether everything works by running the status command:

```shell
idoitcmk status -v
```

*   Alternatively, but not recommended, you can also disable certificate verification. You need to disable it for both connections to i-doit and Checkmk by adding two new configuration settings. Example:

```shell
idoitcmk status -v -s "i-doit.bypassSecureConnection=true" -s "check_mk.webAPI.bypassSecureConnection=true"
```

Please keep in mind that disabling verification does not protect your setup from man-in-the-middle attacks. This significantly weakens your IT security. You have been warned.

## Checkmk Responds with HTTP Status Code "414"

Sometimes Checkmk responds with HTTP status code 414 URI too long when requesting the hardware/software inventory API. This could happen, for example, when running the pull command:

```shell
$ idoitcmk pull
Import inventory data into CMDB

Looking for hosts in checkmk…
Found 1234 hosts

Read hardware/software inventory data for each host…
Web server responded with HTTP status code "414"
```

To avoid this error, you should decrease the configuration setting `i-doit.liwithBatchRequests`. The default value is 500. A value of 100 should work.

## Duplicated Objects After Pulling to i-doit

If the matching does not seem to work correctly, make sure that the "Checkmk Host" and "Checkmk Tags" categories are assigned to the object types that you are pulling to i-doit. Use [Edit data structure](../../administration/management/data-structure/edit-data-structure.md) for this.

It may also be necessary to reduce the [pull identifiers](./konfiguration.md) to, for example, just the hostname.
