---
title: Zammad
description: Zammad configuration and FAQ
icon:
status:
lang: en
---

# Zammad

[Zammad](https://zammad.com/) is a web application for the service desk. It is able to access information about objects from i-doit and link them with tickets. For further information on configuring and using Zammad, the manufacturer is happy to help.

i-doit already includes all functions in the standard installation to [access tickets in Zammad](index.md).

A practical example can be found on our [Blog](https://www.i-doit.com/blog/zammad-intuitiver-service-desk-mit-anbindung-an-i-doit/)

## FAQ:

???+ question "**i-doit cannot retrieve tickets from Zammad**"

    An important thing that is often forgotten is that Elasticsearch must be installed and functional on the Zammad server. Without this service, i-doit cannot retrieve tickets. To test the connection from the i-doit server to the Zammad server, you can use curl:

    ```shell
    curl -u user@domain.de -X POST http://myzammadserver/api/v1/tickets/search -d 'query=preferences.idoit.object_ids:myobjectid' -d 'limit=10'
    ```

    Please extend the curl command so that you can authenticate.

???+ question "**"Authentication error: System setting 'api.authenticated-users-only' is enabled. Please provide valid user credentials by http basic auth or use an existing session id.**"

    This setting can be found in the Admin Center > System settings under [Expert settings](../../administration/admin-center.md#expert-settings-system-bezogen) as "api.authenticated-users-only" and must be set to "0" for Zammad.
