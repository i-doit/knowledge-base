# Erste Schritte

Sie sind neu in diesem Thema und möchten sowohl checkmk als auch i-doit integrieren? Folgen Sie diesen einfachen Schritten:

1. [Alle Anforderungen erfüllen](./anforderungen.md)
2. [Herunterladen und installieren](./installation.md) das Add-on mit dem integrierten Befehlszeilenwerkzeug idoitcmk
3. Sicherstellen, dass auf checkmk und i-doit über ihre APIs zugegriffen werden kann
4. Erstelle deine eigene Konfiguration:

    idoitcmk init ([mehr dazu](./konfiguration.md))

5. [Rechte für Benutzer oder Gruppen setzen](../../effizientes-dokumentieren/rechteverwaltung/index.md)
6. Kategorie Checkmk Host und Checkmk Tag dem gewünschtem [Objekttyp zuordnen](../../grundlagen/zurodnung-von-kategorien-zu-objekttypen.md)
7. [Probieren Sie einige grundlegende Befehle aus](./verwendung.md)
8. Synchronisierung einiger grundlegender Informationen zwischen checkmk und i-doit:

    idoitcmk sync-agents ([mehr dazu](./synchronisierung-der-checkmk-agenten.md))

    idoitcmk sync-contact-groups ([mehr dazu](./kontaktgruppen-synchronisieren.md))

    idoitcmk sync-folders ([mehr dazu](./wato-ordner-synchronisieren.md))

    idoitcmk sync-sites ([mehr dazu](./checkmk-sites-synchronisieren.md))

    idoitcmk sync-tags ([mehr dazu](./host-tags-synchronisieren.md))

9. Oder checkmk auf der Grundlage von i-doit konfigurieren:

    idoitcmk push ([mehr dazu](./wato-konfiguration-auf-basis-von-cmdb-daten-generieren.md))

10. Oder nützliche Informationen über Ihre Infrastruktur von checkmk an i-doit übermitteln:

    idoitcmk pull ([mehr dazu](./bestandsdaten-in-die-cmdb-importieren.md))

11. Automatisieren Sie alle diese Dinge!

Haben Sie Fragen? Lesen Sie unser [FAQ](./faq.md)
