# Service Desk

Der Service Desk ist in vielen Organisationen eine zentrale Schnittstelle zum Kunden. Wenn der Kunde ein Anliegen zu einem Produkt hat, stellt er eine Anfrage (Request) an den Support. Bei ITIL wird auch von Incidents gesprochen, bei der Software-Entwicklung eher von Issues. Anfragen kommen in der Regel als E-Mail oder per Telefon (Call) herein und werden in Tickets organisiert. Zur Unterstützung eines Service Desks existiert eine Vielzahl an (Web-)Applikationen. Diese greifen meistens auf zusätzliche Ressourcen zu (Kundendatenbanken etc.), um Anfragen ganzheitlich zu betrachten und möglichst effizient zu bearbeiten. Eine wichtige Ressource ist die [IT-Dokumentation](../../glossar.md): Meldet ein Kollege aus einer Fachabteilung einen defekten Drucker an die IT-Abteilung, unterstützt die IT-Dokumentation mit hilfreichen Informationen zum Modell, Standort, IP-Adresse, Remote-Zugriff und vielem mehr.

Unterstützte Applikationen

i-doit bietet in der Standard-Installationen Schnittstellen zu mehreren Applikationen aus dem Bereich Service Desk:

*   [OTRS Help Desk](../service-desk/otrs-help-desk.md)
*   [Request Tracker (RT)](../service-desk/request-tracker.md)
*   [Zammad](../service-desk/zammad.md)

… und iTop.

Die konkrete Installation und Benutzung von Extensions (RT) und Modulen (OTRS) sind in den jeweiligen Artikeln beschrieben beziehungsweise verlinkt. Im Folgenden konzentrieren wir uns auf die Konfiguration und Funktionen von i-doit.

Konfiguration
-------------

Die Konfiguration zur Anbindung von den oben genannten Applikationen geschieht unter **Verwaltung → Schnittstellen / externe Daten → TroubleTicket-System (TTS) → Konfiguration**.

[![servicedesk-konfigurieren](../../assets/images/de/automatisierung-und-integration/service-desk/1-sd.png)](../../assets/images/de/automatisierung-und-integration/service-desk/1-sd.png)

| Option | Beschreibung |
| --- | --- |
| **TTS-Typ** | Um welche Applikation handelt es sich? |
| **Aktiv** | Soll die Schnittstelle aktiv sein? |
| **Benutzername** | i-doit muss sich mit einem Benutzer bei der Applikation anmelden, um Daten abrufen zu können. Aus Sicherheitsgründen sollte ein dedizierter Benutzer verwendet werden. |
| **Passwort** | Das zum Benutzer passende Passwort |
| **URL inkl. Protokoll** | Der Link zur Web GUI der Applikation, beispielsweise https://rt.example.org/rt |

Tickets auslesen
----------------

Wird ein Ticket über die Applikation mit einem Objekt aus i-doit verknüpft, kann diese Verknüpfung in i-doit angezeigt werden. Dazu muss die Option **Aktiv** in der Konfiguration auf **Ja** gestellt sein. Zu jedem Objekt existiert die Kategorie **Alle Tickets**, die über das Sprachblasen-Icon ![servicedesk-icon](../../assets/images/de/automatisierung-und-integration/service-desk/2-sd.png) erreichbar ist.

[![servicedesk-anzeigen](../../assets/images/de/automatisierung-und-integration/service-desk/3-sd.png)](../../assets/images/de/automatisierung-und-integration/service-desk/3-sd.png)

Die Kategorie listet alle verknüpften Tickets auf und zeigt zu jedem Ticket weitere Informationen. Klickt man auf das Ticket, öffnet es sich in der Web GUI der Service-Desk-Applikation.

Neues Ticket erstellen
----------------------

Über die Kategorie Alle Ticket kann auch ein neues Ticket erstellt werden. Dazu dient der obere Bereich. Klickt man auf den Button Ticket erstellen, öffnet sich das Web-Formular der Service-Desk-Applikation und verknüpft bereits das Objekt, zu dem das Ticket erstellt werden soll.

Kommt die Applikation [Request Tracker (RT)](../service-desk/request-tracker.md) zum Einsatz, muss zusätzlich die Queue ausgewählt werden, dem das Ticket zugeordnet wird. Die Konfiguration der voreingestellten Queues geschieht unter **Verwaltung → Systemeinstellungen → System Parameters → Request Tracker queues**. Hier werden die Queues kommasepariert angegeben.

Logbuch-Einträge zu Tickets
---------------------------

Wenn in der Service-Desk-Applikation ein Ticket erstellt oder bearbeitet wird und dabei mindestens ein Objekt aus i-doit verknüpft wird, ist dies im Nachhinein im [Logbuch](../../grundlagen/logbuch.md) nachzuvollziehen.

[![servicedesk-erstellen](../../assets/images/de/automatisierung-und-integration/service-desk/4-sd.png)](../../assets/images/de/automatisierung-und-integration/service-desk/4-sd.png)
