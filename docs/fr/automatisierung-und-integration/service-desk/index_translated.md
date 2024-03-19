<!-- TRANSLATED by md-translate -->
# Service Desk

# Service Desk

Der Service Desk ist in vielen Organisationen eine zentrale Schnittstelle zum Kunden. Wenn der Kunde ein Anliegen zu einem Produkt hat, stellt er eine Anfrage (Request) an den Support. Bei ITIL wird auch von Incidents gesprochen, bei der Software-Entwicklung eher von Issues. Anfragen kommen in der Regel als E-Mail oder per Telefon (Call) herein und werden in Tickets organisiert. Zur Unterstützung eines Service Desks existiert eine Vielzahl an (Web-)Applikationen. Diese greifen meistens auf zusätzliche Ressourcen zu (Kundendatenbanken etc.), um Anfragen ganzheitlich zu betrachten und möglichst effizient zu bearbeiten. Eine wichtige Ressource ist die [IT-Dokumentation](../../glossar.md): Meldet ein Kollege aus einer Fachabteilung einen defekten Drucker an die IT-Abteilung, unterstützt die IT-Dokumentation mit hilfreichen Informationen zum Modell, Standort, IP-Adresse, Remote-Zugriff und vielem mehr.

Dans de nombreuses organisations, le service desk est une interface centrale avec le client. Lorsque le client a une préoccupation concernant un produit, il envoie une demande (request) au support. Dans ITIL, on parle aussi d'incidents, mais dans le développement de logiciels, on parle plutôt d'issues. Les demandes arrivent généralement par e-mail ou par téléphone (call) et sont organisées en tickets. Il existe une multitude d'applications (web) pour soutenir un service desk. Celles-ci font généralement appel à des ressources supplémentaires (bases de données clients, etc.) afin de considérer les demandes de manière globale et de les traiter le plus efficacement possible. Une ressource importante est la [documentation informatique](../../glossaire.md) : Si un collègue d'un département spécialisé signale une imprimante défectueuse au service informatique, la documentation informatique apporte son soutien en fournissant des informations utiles sur le modèle, l'emplacement, l'adresse IP, l'accès à distance et bien plus encore.

Unterstützte Applikationen

Applications prises en charge

i-doit bietet in der Standard-Installationen Schnittstellen zu mehreren Applikationen aus dem Bereich Service Desk:

Dans les installations standard, i-doit offre des interfaces vers plusieurs applications du domaine Service Desk :

* [((OTRS)) Community Edition](../service-desk/otrscommunity-help-desk.md)
* [Request Tracker (RT)](../service-desk/request-tracker.md)
* [Zammad](../service-desk/zammad.md)

* [((OTRS)) Community Edition](../service-desk/otrscommunity-help-desk.md)
* [Request Tracker (RT)](../service-desk/request-tracker.md)
* [Zammad](../service-desk/zammad.md)

… und iTop.

... et iTop.

Die konkrete Installation und Benutzung von Extensions (RT) und Modulen (((OTRS)) Community Edition) sind in den jeweiligen Artikeln beschrieben beziehungsweise verlinkt. Im Folgenden konzentrieren wir uns auf die Konfiguration und Funktionen von i-doit.

L'installation et l'utilisation concrètes des extensions (RT) et des modules (((OTRS)) Community Edition) sont décrites dans les articles respectifs ou en lien. Dans ce qui suit, nous nous concentrons sur la configuration et les fonctions d'i-doit.

## Konfiguration

## Configuration

Die Konfiguration zur Anbindung von den oben genannten Applikationen geschieht unter **Verwaltung → Import und Schnittstellen → TroubleTicket-System (TTS)**.

La configuration pour la connexion des applications susmentionnées se fait sous **Administration → Importation et interfaces → Système TroubleTicket (TTS)**.

[![servicedesk-konfigurieren](../../assets/images/de/automatisierung-und-integration/service-desk/1-sd.png)](../../assets/images/de/automatisierung-und-integration/service-desk/1-sd.png)

[ ![servicedesk-configurer](../../assets/images/fr/automatisation et intégration/service-desk/1-sd.png)](../../assets/images/fr/automatisation et intégration/service-desk/1-sd.png)

| Option | Beschreibung |
| --- | --- |
| **TTS-Typ** | Um welche Applikation handelt es sich? |
| **Aktiv** | Soll die Schnittstelle aktiv sein? |
| **Benutzername** | i-doit muss sich mit einem Benutzer bei der Applikation anmelden, um Daten abrufen zu können. Aus Sicherheitsgründen sollte ein dedizierter Benutzer verwendet werden. |
| **Passwort** | Das zum Benutzer passende Passwort |
| **URL inkl. Protokoll** | Der Link zur Web GUI der Applikation, beispielsweise https://rt.example.org/rt |

| option | description |
| --- | --- |
| **TTS type** | De quelle application s'agit-il ? |
| **Active** | L'interface doit-elle être active ? |
| **Nom d'utilisateur** | i-doit se connecter à l'application avec un utilisateur pour pouvoir consulter les données. Pour des raisons de sécurité, un utilisateur dédié doit être utilisé. |
| **Mot de passe** | Le mot de passe correspondant à l'utilisateur |
| **URL y compris protocole** | Le lien vers l'interface graphique web de l'application, par exemple https://rt.example.org/rt |

## Tickets auslesen

## Lire les tickets

Wird ein Ticket über die Applikation mit einem Objekt aus i-doit verknüpft, kann diese Verknüpfung in i-doit angezeigt werden. Dazu muss die Option **Aktiv** in der Konfiguration auf **Ja** gestellt sein. Zu jedem Objekt existiert die Kategorie **Alle Tickets**, die über das Sprachblasen-Icon ![servicedesk-icon](../../assets/images/de/automatisierung-und-integration/service-desk/2-sd.png) erreichbar ist.

Si un ticket est lié à un objet d'i-doit via l'application, ce lien peut être affiché dans i-doit. Pour cela, l'option **Active** doit être réglée sur **Oui** dans la configuration. Pour chaque objet, il existe la catégorie **Tous les tickets**, accessible via l'icône de bulle ![servicedesk-icon](../../assets/images/fr/automatisation-et-intégration/service-desk/2-sd.png).

[![servicedesk-anzeigen](../../assets/images/de/automatisierung-und-integration/service-desk/3-sd.png)](../../assets/images/de/automatisierung-und-integration/service-desk/3-sd.png)

[ ![servicedesk-annonces](../../assets/images/fr/automatisation-et-intégration/service-desk/3-sd.png)](../../assets/images/fr/automatisation-et-intégration/service-desk/3-sd.png)

Die Kategorie listet alle verknüpften Tickets auf und zeigt zu jedem Ticket weitere Informationen. Klickt man auf das Ticket, öffnet es sich in der Web GUI der Service-Desk-Applikation.

La catégorie énumère tous les tickets liés et affiche des informations supplémentaires pour chaque ticket. Si l'on clique sur le ticket, il s'ouvre dans la Web GUI de l'application Service Desk.

## Neues Ticket erstellen

## Créer un nouveau ticket

Über die Kategorie Alle Ticket kann auch ein neues Ticket erstellt werden. Dazu dient der obere Bereich. Klickt man auf den Button Ticket erstellen, öffnet sich das Web-Formular der Service-Desk-Applikation und verknüpft bereits das Objekt, zu dem das Ticket erstellt werden soll.

La catégorie Tous les tickets permet également de créer un nouveau ticket. La partie supérieure sert à cela. Si l'on clique sur le bouton Créer un ticket, le formulaire web de l'application Service Desk s'ouvre et associe déjà l'objet pour lequel le ticket doit être créé.

Kommt die Applikation [Request Tracker (RT)](../service-desk/request-tracker.md) zum Einsatz, muss zusätzlich die Queue ausgewählt werden, dem das Ticket zugeordnet wird. Die Konfiguration der voreingestellten Queues geschieht unter **Verwaltung → Import und Schnittstellen → TroubleTicket-System (TTS) → Request Tracker queues**. Hier werden die Queues kommasepariert angegeben.

Si l'application [Request Tracker (RT)](../service-desk/request-tracker.md) est utilisée, il faut en plus sélectionner la file d'attente à laquelle le ticket sera attribué. La configuration des files d'attente prédéfinies se fait sous **Administration → Importation et interfaces → Système TroubleTicket (TTS) → Request Tracker queues**. Les files d'attente sont indiquées ici, séparées par des virgules.

## Logbuch-Einträge zu Tickets

## Entrées du journal de bord pour les tickets

Wenn in der Service-Desk-Applikation ein Ticket erstellt oder bearbeitet wird und dabei mindestens ein Objekt aus i-doit verknüpft wird, ist dies im Nachhinein im [Logbuch](../../grundlagen/logbuch.md) nachzuvollziehen.

Si un ticket est créé ou traité dans l'application Service Desk et qu'au moins un objet d'i-doit est lié à cette occasion, il est possible d'en garder une trace a posteriori dans le [Journal de bord](../../grundlagen/logbuch.md).

[![servicedesk-erstellen](../../assets/images/de/automatisierung-und-integration/service-desk/4-sd.png)](../../assets/images/de/automatisierung-und-integration/service-desk/4-sd.png)

[ ![servicedesk-employer](../../assets/images/fr/automatisation-et-intégration/service-desk/4-sd.png)](../../assets/images/fr/automatisation-et-intégration/service-desk/4-sd.png)