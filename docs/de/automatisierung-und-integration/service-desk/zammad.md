# Zammad

!!! warning "Bitte erstellen Sie vor jeder Änderung an einer Schnittstelle/Import einen vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist kann dieses dann wiederhergestellt werden"

[Zammad](https://zammad.com/) ist eine Web-Applikation für den Service Desk. Es ist in der Lage, auf Informationen zu Objekten aus i-doit zuzugreifen und diese mit Tickets zu verknüpfen. Für weitere Informationen zur Konfiguration und Nutzung von Zammad, hilft der Hersteller gerne weiter.

i-doit bringt bereits in der Standardinstallation alle Funktionen mit, um [auf Tickets in Zammad zuzugreifen](index.md).

Ein Praxisbeispiel finden Sie auf unserem [Blog](https://www.i-doit.com/blog/zammad-intuitiver-service-desk-mit-anbindung-an-i-doit/)

## FAQ:

Eine wichtige Sache die häufig vergessen wird ist, dass elasticsearch auf dem Zammad Server installiert und funktionsfähig sein muss, ohne diesen Service kann i-doit die Tickets nicht abrufen.

Um die Verbindung vom i-doit Server zum Zammad Server zu testen kann ein Curl verwendet werden:

```shell
curl -u user@domain.de -X POST http://myzammadserver/api/v1/tickets/search -d 'query=preferences.idoit.object_ids:myobjectid' -d 'limit=10'
```

Bitte den curl so erweitern, dass Sie sich authentifizieren können.
