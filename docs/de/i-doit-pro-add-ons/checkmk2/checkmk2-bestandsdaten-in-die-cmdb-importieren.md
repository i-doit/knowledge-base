# checkmk 2 Bestandsdaten in die CMDB importieren

Sie lassen checkmk alle Ihre Rechner überwachen? Sie lassen checkmk grundlegende Informationen über Ihre Hardware/Software sammeln? Warum sollten Sie diese Informationen dann nicht mit Ihrer CMDB teilen? Importieren oder aktualisieren Sie Objekte in i-doit, indem Sie Folgendes ausführen:

    idoitcmk pull

**Empfehlung:** Führen Sie diesen Befehl jedes Mal aus, wenn Sie Ihre WATO Konfiguration in checkmk ändern oder wenn die Inventarisierungsagenten von checkmk neue Hardware-/Softwareinformationen finden.

Optionen
--------

Diese Optionen sind während der Laufzeit verfügbar:

| Option | Erforderlich | Beschreibung |
| --- | --- | --- |
| --include-alias STRING | Nein | Hosts nach Alias filtern |
| --include-folder STRING | Nein | Hosts nach WATO Ordner filtern |
| --include-hostname STRING | Nein | Hosts nach name filtern |
| --include-ipaddress STRING | Nein | Hosts nach IPv4/v6 address filtern |
| --include-os STRING | Nein | Hosts nach operating system filtern |
| --include-site STRING | Nein | Hosts nach monitoring site filtern |
| --include-tag TAG | Nein | Hosts nach tag filtern |

STRING bedeutet eine beliebige Zeichenfolge einschließlich der Platzhalter *, ? und [ae]. Wiederholen Sie die Option, um mehr als einen STRING zu finden. Beispiel: Alle Hosts mit einem GNU/Linux- oder Windows-Betriebssystem abrufen:

    idoitcmk pull --include-os "*Linux*" --include-os "*Windows*"

Beliebige Kombinationen dieser Filter werden logisch durch oder kombiniert. Zum Beispiel, alle Hosts mit der Endung .example.com oder im Ordner cloud abrufen:

    idoitcmk pull --include-hostname "*.example.com" --include-folder "cloud"

TAG ist wie STRING, ist aber eine Schlüssel/Wert-Kombination mit dem Tag-Namen und seinem Wert. Beispiel: Abruf aller als geschäftskritisch gekennzeichneten Hosts:

    idoitcmk pull --include-tag "criticality=critical"

Konfiguration
-------------

Diese [Einstellungen](./checkmk2-konfiguration.md) sind verfügbar:

| Key | Typ | Erforderlich | Standard | Beschreibung |
| --- | --- | --- | --- | --- |
| pull.createObjects | Boolean | Nein | true | Unbekannte Hosts werden als neue Objekte erstellt |
| pull.objectType | String | Nein | C__OBJTYPE__SERVER | Setzen der Objekttypkonstante für neue Objekte |
| pull.updateObjects | String | Nein | overwrite | Wenn der Host in i-doit gefunden wird, werden vorhandene Kategorieeinträge überschrieben oder ignoriert. |
| pull.idenfifier | Array | Nein | ["title", "hostname", "fqdn", "hostaddress", "alias"] | Suchen Sie nach diesen Identifier, um Hosts mit Objekten abzugleichen; siehe Abschnitt “Identifier”. |
| pull.minMatch | Integer | Nein | 2 | Objekt und Host müssen sich eine Mindestmenge an identifiers teilen |
| pull.attributes | Array | Nein | _See section “Attributes”_ | Liste der Kategoriekonstanten, die geändert werden sollen; siehe Abschnitt “Attribute”. |
| pull.enableExport | Boolean | Nein | true | Host-Konfiguration in Kategorie schreiben Check_MK Host |
| pull.enableLivestatus | Boolean | Nein | true | Host-Konfiguration in Kategorie schreiben Monitoring |
| pull.ports | String | Nein | physical | Hinzufügen/Aktualisieren von “physischen” oder “logischen” Netzwerkanschlüssen |
| roles.monitoring | String | Nein | Monitoring | i-doit Rolle für Kontaktgruppen, die bei Kontaktzuweisungen verwendet werden |