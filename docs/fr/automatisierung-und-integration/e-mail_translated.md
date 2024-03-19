<!-- TRANSLATED by md-translate -->
# E-Mail (SMTP)

# E-mail (SMTP)

_i-doit_ ist in der Lage, beim Eintreten verschiedener Events oder bei Abfragen von bestimmten Zuständen automatisiert E-Mails zu versenden.

_i-doit_ est capable d'envoyer automatiquement des e-mails lorsque différents événements se produisent ou lorsque certains états sont interrogés.

!!! warning "Controller"

! !! était "contrôleur" en interne

```
Die Konfiguration ist unbedingt notwendig, wenn der [CLI](../automatisierung-und-integration/cli/index.md) mit den [Benachrichtigungen](../auswertungen/benachrichtigungen.md) oder Workflows verwendet wird. Es können sonst keine E-Mails versandt werden!
```

Die Einbindung eines Mailservers ist in der **Verwaltung** unter **Import und Schnittstellen** als **SMTP Konfiguration (E-Mail)** zu finden.

L'intégration d'un serveur de messagerie se trouve dans la **gestion** sous **Importation et interfaces** en tant que **Configuration SMTP (e-mail)**.

[![smtp-konfiguration](../assets/images/de/automatisierung-und-integration/1-smtp.png)](../assets/images/de/automatisierung-und-integration/1-smtp.png)

[ ![configuration smtp](../assets/images/fr/automatisation-et-integration/1-smtp.png)](../assets/images/fr/automatisation-et-integration/1-smtp.png)

Dort steht eine Konfigurationsmaske mit folgenden Feldern zur Verfügung:

Un masque de configuration avec les champs suivants y est disponible :

| Feld | Beschreibung |
| --- | --- |
| SMTP Host | Angabe des Hostnamens oder der IP-Adresse des Mailservers. |
| SMTP Port | Standard-Port ist 25. Bei einer verschlüsselten Verbindung oder abweichenden Konfiguration muss der Port entsprechend abgeändert werden. |
| SMTP Username | Angabe des Username |
| SMTP Password | Angabe des Passwort |
| Absender | Absende E-Mail-Adresse für den Mailversand |
| Name | Absender-Name für den Mailversand. |
| Timeout | Timeout für den Versand |
| SMTP Debug | Für die initiale Konfiguration ist es oft hilfreich das Debugging zu aktivieren. Das Log wird im Verzeichnis log/ im _i-doit_-Hauptverzeichnis abgelegt.<br><br>(Standard: **Nein**) |
| Betreff Präfix | Optionaler Eintrag um in E-Mail-Clients regelbasierte Automatisierungen besser zu unterstützen. |
| Benachrichtigungstemplate für Wartungsvertrag | Dieses Template wurde in einer vorherigen Versionen verwendet und wird in den aktuellen _i-doit_-Versionen nicht mehr benötigt.<br><br>In den aktuellen Versionen kann das Template im **Benachrichtigungssystem** unter **Extras** konfiguriert werden. |

| champ | description |
| --- | --- |
| SMTP Host | Indication du nom d'hôte ou de l'adresse IP du serveur de messagerie. |
| Port SMTP | Le port par défaut est 25. En cas de connexion cryptée ou de configuration différente, le port doit être modifié en conséquence. |
| SMTP Username | Indication du nom d'utilisateur |
| SMTP Password | Indication du mot de passe |
| Expéditeur | Adresse e-mail d'envoi pour l'envoi de courrier |
| Nom | Nom de l'expéditeur pour l'envoi du courrier. |
| Timeout | Timeout pour l'envoi |
| Débogage SMTP | Pour la configuration initiale, il est souvent utile d'activer le débogage. Le log est placé dans le répertoire log/ dans le répertoire principal de _i-doit_.<br><br>(Par défaut : **Non**) |
| Préfixe du sujet | Entrée facultative pour mieux prendre en charge les automatisations basées sur des règles dans les clients de messagerie. |
| Modèle de notification pour contrat de maintenance | Ce modèle était utilisé dans une version précédente et n'est plus nécessaire dans les versions actuelles de _i-doit_.<br><br>Dans les versions actuelles, le modèle peut être configuré dans le **Système de notification** sous **Extras**. |