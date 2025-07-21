---
title: Zammad
description: Zammad Konfiguration und FAQ
icon:
status:
lang: de
---

# Zammad

[Zammad](https://zammad.com/) ist eine Web-Applikation für den Service Desk. Es ist in der Lage, auf Informationen zu Objekten aus i-doit zuzugreifen und diese mit Tickets zu verknüpfen. Für weitere Informationen zur Konfiguration und Nutzung von Zammad, hilft der Hersteller gerne weiter.

i-doit bringt bereits in der Standardinstallation alle Funktionen mit, um [auf Tickets in Zammad zuzugreifen](index.md).

Ein Praxisbeispiel finden Sie auf unserem [Blog](https://www.i-doit.com/blog/zammad-intuitiver-service-desk-mit-anbindung-an-i-doit/)

## FAQ:

???+ question "**i-doit kann keine Tickets aus Zammad abrufen**"

    Eine wichtige Sache die häufig vergessen wird ist, dass elasticsearch auf dem Zammad Server installiert und funktionsfähig sein muss, ohne diesen Service kann i-doit die Tickets nicht abrufen. Um die Verbindung vom i-doit Server zum Zammad Server zu testen kann ein Curl verwendet werden:

    ```shell
    curl -u user@domain.de -X POST http://myzammadserver/api/v1/tickets/search -d 'query=preferences.idoit.object_ids:myobjectid' -d 'limit=10'
    ```

    Bitte den curl so erweitern, dass Sie sich authentifizieren können.

???+ question "**"Authentication error: System setting 'api.authenticated-users-only' is enabled. Please provide valid user credentials by http basic auth or use an existing session id.**"

    Diese Einstellung ist im Admin-Center > System settings bei den [Expert settings](../../administration/admin-center.md#expert-settings-system-bezogen) als "api.authenticated-users-only" zu finden und muss für Zammad auf "0" gesetzt werden.
