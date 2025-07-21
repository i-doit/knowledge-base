---
title: Zammad
description: Zammad configuration and faq
icon:
status:
lang: en
---

# Zammad

[Zammad](https://zammad.com/) is a web application for the service desk. It is able to access information about objects from i-doit and link it to tickets. For more information on configuring and using Zammad, please contact the manufacturer.

The standard installation of i-doit already includes all the functions required to access tickets in Zammad.

You can find a practical example, in german, on our [Blog](https://www.i-doit.com/blog/zammad-intuitiver-service-desk-mit-anbindung-an-i-doit/).

## FAQ:

???+ question "**i-doit cannot retrieve tickets from Zammad**"

    One important thing that is often forgotten is that elasticsearch must be installed and working on the Zammad server, without this service i-doit cannot retrieve the tickets. To test the connection from the i-doit server to the Zammad server a curl can be used:

    ```shell
    curl -u user@domain.de -X POST http://myzammadserver/api/v1/tickets/search -d 'query=preferences.idoit.object_ids:myobjectid' -d 'limit=10'
    ```

    Please extend the curl so that you can authenticate.


???+ question "**"Authentication error: System setting 'api.authenticated-users-only' is enabled. Please provide valid user credentials by http basic auth or use an existing session id.**"

    This setting can be found in the Admin-Center under System settings > [Expert settings](../../system-administration/admin-center.md#expert-settings-system-related) as "api.authenticated-users-only" and must be set to "0" for Zammad.
