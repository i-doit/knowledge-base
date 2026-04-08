---
title: "SMTP Konfiguration (E-Mail)"
description: "Hier kannst du den Mailserver konfigurieren, der von i-doit benutzt werden soll."
icon:
status:
lang: de
---
# SMTP Konfiguration (E-Mail)

Unter **Verwaltung → Import und Schnittstellen → SMTP-Konfiguration** richtest du den Mailserver ein, über den i-doit E-Mails versenden soll. Diese Konfiguration wird unter anderem für das Benachrichtigungssystem und den Versand von Wartungsvertrags-Erinnerungen benötigt.

Trage den Hostnamen oder die IP-Adresse deines SMTP-Servers sowie den zugehörigen Port ein. Falls dein Mailserver eine Authentifizierung erfordert, gib Benutzername und Passwort an. Aktiviere **SMTP TLS**, wenn die Verbindung verschlüsselt aufgebaut werden soll. Über den **Absender** und den **Namen** legst du fest, von welcher Adresse und unter welchem Anzeigenamen E-Mails verschickt werden. Mit dem **SMTP Debug**-Modus kannst du bei Problemen detaillierte Protokollausgaben aktivieren.

[![SMTP Konfiguration](../../../assets/images/de/administration/verwaltung/import-und-schnittstellen/smtp-konfiguration-email.png)](../../../assets/images/de/administration/verwaltung/import-und-schnittstellen/smtp-konfiguration-email.png)

[![smtp-konfiguration](../../../assets/images/de/administration/smtp-konfiguration.png)](../../../assets/images/de/administration/smtp-konfiguration.png)

| Option                                        | Wert              |
| --------------------------------------------- | ----------------- |
| SMTP Host                                     | Hostname oder URL |
| SMTP Port                                     | Port              |
| SMTP Username                                 | Username          |
| SMTP Password                                 | Password          |
| SMTP TLS                                      | Ja oder Nein      |
| Absender                                      | E-Mail Adresse    |
| Name                                          | Name              |
| Timeout                                       | Wert in Sekunden  |
| SMTP Debug                                    | Ja oder Nein      |
| Betreff Präfix                                | String            |
| Benachrichtigungstemplate für Wartungsvertrag | HTML              |

## Siehe auch

- [Import und Schnittstellen](index.md) -- Übersicht aller Import- und Schnittstellenkonfigurationen
