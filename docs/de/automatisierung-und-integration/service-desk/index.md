---
title: Service Desk
description: Der Service Desk ist in vielen Organisationen eine zentrale Schnittstelle zum Kunden
icon:
status:
lang: de
---

# Service Desk

Über die Service-Desk-Integration verknüpfst du Tickets aus deinem Ticketsystem direkt mit Objekten in i-doit. So greifst du bei Support-Anfragen sofort auf die relevante [IT-Dokumentation](../../glossar.md) zu -- Modell, Standort, IP-Adresse und mehr stehen dir direkt im Ticket zur Verfügung.

## Unterstützte Applikationen

i-doit bietet in der Standard-Installation Schnittstellen zu folgenden Service-Desk-Applikationen:

*   [((OTRS)) Community Edition](../service-desk/otrscommunity-help-desk.md)
*   [Request Tracker (RT)](../service-desk/request-tracker.md)
*   [Zammad](../service-desk/zammad.md)

... und iTop.

Details zur Installation der jeweiligen Extensions und Module findest du in den verlinkten Artikeln. Im Folgenden geht es um die Konfiguration und Funktionen auf i-doit-Seite.

## Konfiguration

Die Anbindung konfigurierst du unter **Verwaltung → Import und Schnittstellen → TroubleTicket-System (TTS)**.

[![service-desk-konfigurieren](../../assets/images/de/automatisierung-und-integration/service-desk/1-sd.png)](../../assets/images/de/automatisierung-und-integration/service-desk/1-sd.png)

| Option                  | Beschreibung                                                                                                                                                           |
| ----------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **TTS-Typ**             | Um welche Applikation handelt es sich?                                                                                                                                 |
| **Aktiv**               | Soll die Schnittstelle aktiv sein?                                                                                                                                     |
| **Benutzername**        | i-doit muss sich mit einem Benutzer bei der Applikation anmelden, um Daten abrufen zu können. Aus Sicherheitsgründen sollte ein dedizierter Benutzer verwendet werden. |
| **Passwort**            | Das zum Benutzer passende Passwort                                                                                                                                     |
| **URL inkl. Protokoll** | Der Link zur Web GUI der Applikation, beispielsweise https://rt.example.org/rt                                                                                         |
| **TLS-Zertifikat**      | Verwendet die Applikation ein selbstsigniertes TLS-Zertifikat, kann dieses hier hochgeladen werden.                                                                    |

## Tickets auslesen

Verknüpfst du ein Ticket in der Service-Desk-Applikation mit einem i-doit-Objekt, wird diese Verknüpfung in i-doit sichtbar. Voraussetzung: Die Option **Aktiv** steht auf **Ja**. Die Kategorie **Alle Tickets** erreichst du über das Sprachblasen-Icon ![service-desk-icon](../../assets/images/de/automatisierung-und-integration/service-desk/2-sd.png).

[![service-desk-anzeigen](../../assets/images/de/automatisierung-und-integration/service-desk/3-sd.png)](../../assets/images/de/automatisierung-und-integration/service-desk/3-sd.png)

Die Kategorie listet alle verknüpften Tickets mit Detailinformationen auf. Klickst du auf ein Ticket, öffnet es sich in der Web GUI der Service-Desk-Applikation.

## Neues Ticket erstellen

Im oberen Bereich der Kategorie **Alle Tickets** erstellst du ein neues Ticket. Klicke auf **Ticket erstellen** -- das Web-Formular der Applikation öffnet sich und verknüpft automatisch das aktuelle Objekt.

Bei [Request Tracker (RT)](../service-desk/request-tracker.md) wählst du zusätzlich die Queue aus. Die voreingestellten Queues konfigurierst du unter **Verwaltung → Import und Schnittstellen → TroubleTicket-System (TTS) → Request Tracker queues** (kommasepariert).
