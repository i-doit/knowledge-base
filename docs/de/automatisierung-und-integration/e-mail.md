# E-Mail (SMTP)

!!! warning "Bitte erstellen Sie vor jeder Änderung an einer Schnittstelle/Import einen vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist kann dieses dann wiederhergestellt werden"

_i-doit_ ist in der Lage, beim Eintreten verschiedener Events oder bei Abfragen von bestimmten Zuständen automatisiert E-Mails zu versenden.

!!! warning "Controller"

    Die Konfiguration ist unbedingt notwendig, wenn der [CLI](../automatisierung-und-integration/cli/index.md) mit den [Benachrichtigungen](../auswertungen/benachrichtigungen.md) oder Workflows verwendet wird. Es können sonst keine E-Mails versandt werden!

Die Einbindung eines Mailservers ist in der **Verwaltung** unter **Import und Schnittstellen** als **SMTP Konfiguration (E-Mail)** zu finden.

[![smtp-konfiguration](../assets/images/de/automatisierung-und-integration/1-smtp.png)](../assets/images/de/automatisierung-und-integration/1-smtp.png)

 Dort steht eine Konfigurationsmaske mit folgenden Feldern zur Verfügung:

| Feld                                          | Beschreibung                                                                                                                                                                                                                                              |
| --------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| SMTP Host                                     | Angabe des Hostnamen oder der IP-Adresse des Mailservers.                                                                                                                                                                                                 |
| SMTP Port                                     | Standard-Port ist 25. Bei einer verschlüsselten Verbindung oder abweichenden Konfiguration muss der Port entsprechend abgeändert werden.                                                                                                                  |
| SMTP Username                                 | Angabe des Username                                                                                                                                                                                                                                       |
| SMTP Password                                 | Angabe des Passwort                                                                                                                                                                                                                                       |
| Absender                                      | Absende E-Mail-Adresse für den Mailversand                                                                                                                                                                                                                |
| Name                                          | Absender-Name für den Mailversand.                                                                                                                                                                                                                        |
| Timeout                                       | Timeout für den Versand                                                                                                                                                                                                                                   |
| SMTP Debug                                    | Für die initiale Konfiguration ist es oft hilfreich das Debugging zu aktivieren. Das Log wird im Verzeichnis log/ im _i-doit_\-Hauptverzeichnis abgelegt.<br><br>(Standard: **Nein**)                                                                     |
| Betreff Präfix                                | Optionaler Eintrag um in E-Mail-Clients regelbasierte Automatisierungen besser zu unterstützen.                                                                                                                                                           |
| Benachrichtigungstemplate für Wartungsvertrag | Dieses Template wurde in einer vorherigen Versionen verwendet und wird in den aktuellen _i-doit_\-Versionen nicht mehr benötigt.<br><br>In den aktuellen Versionen kann das Template im **Benachrichtigungssystem** unter **Extras** konfiguriert werden. |

