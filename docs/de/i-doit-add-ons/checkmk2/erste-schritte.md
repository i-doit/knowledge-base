---
title: Erste Schritte
description: "Du moechtest Checkmk und i-doit integrieren?"
icon:
status:
lang: de
---
# Erste Schritte

Du möchtest Checkmk und i-doit integrieren? Folge diesen Schritten:

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

1. [Anforderungen erfuellen](./anforderungen.md)
2. Add-on mit dem CLI-Tool `idoitcmk` [herunterladen und installieren](./installation.md)
3. Sicherstellen, dass Checkmk und i-doit über ihre APIs erreichbar sind
4. Eigene Konfiguration erstellen: `idoitcmk init` ([mehr dazu](./konfiguration.md))
5. [Rechte für Benutzer oder Gruppen setzen](../../effizientes-dokumentieren/rechteverwaltung/index.md)
6. Kategorien **Checkmk Host** und **Checkmk Tag** dem gewünschten [Objekttyp zuordnen](../../grundlagen/zurodnung-von-kategorien-zu-objekttypen.md)
7. [Grundlegende Befehle ausprobieren](./verwendung.md)
8. Grundlegende Informationen synchronisieren:
    - `idoitcmk sync-agents` ([Agenten](./synchronisierung-der-checkmk-agenten.md))
    - `idoitcmk sync-contact-groups` ([Kontaktgruppen](./kontaktgruppen-synchronisieren.md))
    - `idoitcmk sync-folders` ([WATO-Ordner](./wato-ordner-synchronisieren.md))
    - `idoitcmk sync-sites` ([Sites](./checkmk-sites-synchronisieren.md))
    - `idoitcmk sync-tags` ([Host-Tags](./host-tags-synchronisieren.md))
9. Checkmk auf Basis von i-doit konfigurieren: `idoitcmk push` ([mehr dazu](./wato-konfiguration-auf-basis-von-cmdb-daten-generieren.md))
10. Inventardaten von Checkmk nach i-doit übertragen: `idoitcmk pull` ([mehr dazu](./bestandsdaten-in-die-cmdb-importieren.md))
11. Alle Schritte automatisieren!

Hast du Fragen? Lies das [FAQ](./faq.md).
