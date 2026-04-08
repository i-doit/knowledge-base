---
title: "Wie beginne ich zu dokumentieren?"
description: "Du stehst vor der Frage, wie du mit deiner IT-Dokumentation starten sollst?"
icon:
status:
lang: de
---
# Wie beginne ich zu dokumentieren?

Du stehst vor der Frage, wie du mit deiner IT-Dokumentation starten sollst? Damit bist du nicht allein. Die wichtigste Erkenntnis vorweg: Du musst nicht alles auf einmal dokumentieren. Starte mit dem, was dir den größten Nutzen bringt, und baue von dort aus weiter auf.

## Kläre deine Ziele

Bevor du das erste Objekt in i-doit anlegst, beantworte dir diese Fragen:

-   **Warum** dokumentierst du? Compliance-Anforderung, besserer Überblick, Vorbereitung auf ein Audit?
-   **Für wen** ist die Dokumentation? Admins im Tagesgeschäft, Management für Entscheidungen, externe Prüfer?
-   **Was** hat die höchste Priorität? Server und Netzwerk? Standorte und Räume? Lizenzen und Verträge?

Die Antworten bestimmen, wo du ansetzt und wie detailliert du vorgehst.

## Wähle deinen Einstieg

Die meisten i-doit-Anwender starten mit einem dieser Ansätze:

### Standorte zuerst (Top-Down)

Beginne mit der physischen Infrastruktur: Gebäude, Räume, Racks. Dann fülle die Racks mit Servern und Netzwerkkomponenten. So entsteht schnell eine übersichtliche Standortstruktur.

1.  Standorte anlegen: **Gebäude > Etagen > Räume > Racks**
2.  Aktive Komponenten: Server, Switches, Firewalls in Racks platzieren
3.  Netzwerk: IP-Netze, VLANs und Port-Verbindungen dokumentieren

### Automatisch inventarisieren (Bottom-Up)

Lass [JDisc Discovery](../daten-konsolidieren/jdisc/index.md) oder einen [CSV-Import](../daten-konsolidieren/csv-datenimport/index.md) die Arbeit machen. Bestehende Daten aus Netzwerk-Scans oder Excel-Listen importieren und anschließend in i-doit anreichern.

1.  Netzwerk scannen mit JDisc oder Daten per CSV vorbereiten
2.  Import in i-doit durchführen
3.  Standorte und Beziehungen manuell ergänzen

!!! tip "Unser Tipp"
    Starte mit 80% Abdeckung in guter Qualität statt 100% anzustreben. Eine gepflegte Dokumentation mit den wichtigsten Systemen ist wertvoller als eine vollständige, die niemand aktuell hält.

## Bestehende Daten übernehmen

Du hast bereits Daten in Excel, einem anderen Tool oder einem Netzwerk-Scanner? i-doit bietet mehrere Wege, diese zu übernehmen:

| Quelle | Import-Weg | Geeignet für |
|---|---|---|
| Excel/CSV | [CSV-Datenimport](../daten-konsolidieren/csv-datenimport/index.md) | Standorte, Kontakte, Clients, beliebige Listen |
| Netzwerk-Scan | [JDisc Discovery](../daten-konsolidieren/jdisc/index.md) | Server, Switches, Drucker, Software |
| LDAP/AD | [LDAP-Verzeichnis](../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md) | Benutzer und Gruppen |
| Andere CMDB | [API (JSON-RPC)](../i-doit-add-ons/api/index.md) | Programmatische Migration |

## Plane die laufende Pflege

Eine Dokumentation ist nur so gut wie ihre Aktualität. Überlege dir von Anfang an:

-   **Wer pflegt was?** — Definiere Verantwortlichkeiten. Netzwerk-Team pflegt Switches, Server-Team pflegt VMs.
-   **Wann wird aktualisiert?** — Bei jeder Änderung? Wöchentlich? Bei jedem Change-Prozess?
-   **Automatisch oder manuell?** — Regelmäßige JDisc-Scans und [Cronjobs](../automatisierung-und-integration/cli/index.md) halten vieles automatisch aktuell.

!!! info "i-doit als führendes System"
    Wenn i-doit den kompletten Lebenszyklus einer IT-Komponente abbildet — von der Planung über die Inbetriebnahme bis zur Ausmusterung — wird es zum zentralen System, an dem sich alle anderen Tools orientieren.

## Nächste Schritte

-   [Checkliste für die IT-Dokumentation](checkliste-fuer-die-it-dokumentation.md) — Alle wichtigen Punkte auf einen Blick
-   [Installation](../installation/index.md) — i-doit installieren
-   [Erstanmeldung](../grundlagen/erstanmeldung.md) — Dein erster Login
-   [Grundlagen](../grundlagen/index.md) — Objekte, Kategorien und Attribute verstehen

Du brauchst Unterstützung beim Einstieg? Unsere [Partner](https://www.i-doit.com/partner/) bieten Workshops und Beratungspakete für die Einführungsphase an. Oder schreib uns direkt an [help@i-doit.com](mailto:help@i-doit.com).
