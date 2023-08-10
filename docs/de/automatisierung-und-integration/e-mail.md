# E-Mail (SMTP)

_i-doit_ ist in der Lage, beim Eintreten verschiedener Events oder bei Abfragen von bestimmten Zuständen automatisiert E-Mails zu versenden.

!!! warning "Controller"

    Die Konfiguration ist unbedingt notwendig, wenn der [CLI](../automatisierung-und-integration/cli/index.md) mit den [Benachrichtigungen](../auswertungen/benachrichtigungen.md) oder Workflows verwendet wird. Es können sonst keine E-Mails versandt werden!

Die Einbindung eines Mailservers ist in der **Verwaltung** unter den **Systemeinstellungen** möglich. Dort steht eine Konfigurationsmaske mit folgenden Feldern zur Verfügung:

| Feld | Beschreibung |
| --- | --- |
| SMTP Host | Angabe des Hostnamens oder der IP-Adresse des Mailservers. |
| SMTP Port | Standard-Port ist 25. Bei einer verschlüsselten Verbindung oder abweichenden Konfiguration muss der Port entsprechend abgeändert werden. |
| Absender | Absende E-Mail-Adresse für den Mailversand |
| Name | Absender-Name für den Mailversand. |
| Timeout | Timeout für den Versand |
| SMTP Debug | Für die initiale Konfiguration ist es oft hilfreich das Debugging zu aktivieren. Das Log wird im Verzeichnis log/ im _i-doit_\-Hauptverzeichnis abgelegt.<br><br>(Standard: **Nein**) |
| Betreff Präfix | Optionaler Eintrag um in E-Mail-Clients regelbasierte Automatisierungen besser zu unterstützen. |
| Benachrichtigungstemplate für Wartungsvertrag | Dieses Template wurde in einer vorherigen Versionen verwendet und wird in den aktuellen _i-doit_\-Versionen nicht mehr benötigt.<br><br>In den aktuellen Versionen kann das Template im **Benachrichtigungssystem** unter **Extras** konfiguriert werden. |
| Benachrichtigungstemplate für Passwort vergessen | ein Artefakt aus einer früheren Version ohne Funktion, kann ignoriert werden. |
