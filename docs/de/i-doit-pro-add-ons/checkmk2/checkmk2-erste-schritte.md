Sie sind neu in diesem Thema und möchten sowohl checkmk als auch i-doit integrieren? Folgen Sie diesen einfachen Schritten:

1.  [Alle Anforderungen erfüllen](/display/de/checkmk+2%3A+Anforderungen)
2.  [Herunterladen und installieren](/display/de/checkmk+2%3A+Installation) das Add-on mit dem integrierten Befehlszeilenwerkzeug `idoitcmk`
3.  Sicherstellen, dass auf checkmk und i-doit über ihre APIs zugegriffen werden kann
4.  Erstelle deine eigene Konfiguration:
    
    `idoitcmk init` ([mehr dazu](/display/de/checkmk+2%3A+Konfiguration))
    
5.  [Rechte für Benutzer oder Gruppen setzen](/display/de/Rechteverwaltung)
6.  Kategorie Checkmk Host und Checkmk Tag dem gewünschtem [Objekttyp zuordnen](/display/de/Zuordnung+von+Kategorien+zu+Objekttypen)
7.  [Probieren Sie einige grundlegende Befehle aus](/display/de/checkmk+2%3A+Verwendung)
8.  Synchronisierung einiger grundlegender Informationen zwischen checkmk und i-doit:
    
    `idoitcmk sync-agents` ([mehr dazu](/display/de/checkmk+2%3A+Synchronisierung+der+checkmk+Agenten))
    
    `idoitcmk sync-contact-groups` ([mehr dazu](/display/de/checkmk+2%3A+Kontaktgruppen+synchronisieren))
    
    `idoitcmk sync-folders` ([mehr dazu](/display/de/checkmk+2%3A+WATO+Ordner+synchronisieren))
    
    `idoitcmk sync-sites` ([mehr dazu](/display/de/checkmk+2%3A+checkmk+sites+synchronisieren))
    
    `idoitcmk sync-tags` ([mehr dazu](/display/de/checkmk+2%3A+Host+Tags+synchronisieren))
    
9.  Oder checkmk auf der Grundlage von i-doit konfigurieren:
    
    `idoitcmk push` ([mehr dazu](/display/de/checkmk+2%3A+WATO+Konfiguration+auf+Basis+von+CMDB-Daten+generieren))
    
10.  Oder nützliche Informationen über Ihre Infrastruktur von checkmk an i-doit übermitteln:
    
    `idoitcmk pull` ([mehr dazu](/display/de/checkmk+2%3A+Bestandsdaten+in+die+CMDB+importieren))
    
11.  Automatisieren Sie alle diese Dinge!

Haben Sie Fragen? Lesen Sie unser [FAQ](https://kb.i-doit.com/pages/viewpage.action?pageId=113475803)