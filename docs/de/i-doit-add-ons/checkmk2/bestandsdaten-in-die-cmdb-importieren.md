---
title: Bestandsdaten in die CMDB importieren
description: "Du laesst Checkmk alle deine Rechner überwachen?"
icon:
status:
lang: de
---
# Bestandsdaten in die CMDB importieren

Du lässt Checkmk alle deine Rechner überwachen? Du lässt Checkmk grundlegende Informationen über deine Hardware/Software sammeln? Warum solltest du diese Informationen dann nicht mit deiner CMDB teilen? Importiere oder aktualisiere Objekte in i-doit, indem du Folgendes ausführst:

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

```shell
idoitcmk pull
```

**Empfehlung:** Führe diesen Befehl jedes Mal aus, wenn du deine WATO-Konfiguration in Checkmk änderst oder wenn die Agenten von Checkmk neue Hardware-/Softwareinformationen finden.

## Optionen

Diese Optionen sind während der Laufzeit verfügbar:

| Option                     | Erforderlich | Beschreibung                        |
| -------------------------- | ------------ | ----------------------------------- |
| --include-alias STRING     | Nein         | Hosts nach Alias filtern            |
| --include-folder STRING    | Nein         | Hosts nach WATO Ordner filtern      |
| --include-hostname STRING  | Nein         | Hosts nach Name filtern             |
| --include-ipaddress STRING | Nein         | Hosts nach IPv4/v6-Adresse filtern  |
| --include-os STRING        | Nein         | Hosts nach Betriebssystem filtern   |
| --include-site STRING      | Nein         | Hosts nach Monitoring-Site filtern  |
| --include-tag TAG          | Nein         | Hosts nach Tag filtern              |

STRING bedeutet eine beliebige Zeichenfolge einschließlich der Platzhalter *, ? und [ae]. Wiederhole die Option, um mehr als einen STRING zu finden. Beispiel: Alle Hosts mit einem GNU/Linux- oder Windows-Betriebssystem abrufen:

```shell
idoitcmk pull --include-os "*Linux*" --include-os "*Windows*"
```

Beliebige Kombinationen dieser Filter werden logisch durch ODER kombiniert. Zum Beispiel alle Hosts mit der Endung .example.com oder im Ordner cloud abrufen:

```shell
idoitcmk pull --include-hostname "*.example.com" --include-folder "cloud"
```

TAG ist wie STRING, ist aber eine Schlüssel/Wert-Kombination mit dem Tag-Namen und seinem Wert. Beispiel: Abruf aller als geschäftskritisch gekennzeichneten Hosts:

```shell
idoitcmk pull --include-tag "criticality=critical"
```

## Konfiguration

Diese [Einstellungen](./konfiguration.md) sind verfügbar:

| Key                   | Typ     | Erforderlich | Standard                                              | Beschreibung                                                                                             |
| --------------------- | ------- | ------------ | ----------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| pull.createObjects    | Boolean | Nein         | true                                                  | Unbekannte Hosts werden als neue Objekte erstellt                                                        |
| pull.objectType       | String  | Nein         | C__OBJTYPE__SERVER                                    | Setze die Objekttyp-Konstante für neue Objekte                                                         |
| pull.updateObjects    | String  | Nein         | overwrite                                             | Wenn der Host in i-doit gefunden wird, werden vorhandene Kategorieeinträge überschrieben oder ignoriert |
| pull.identifier       | Array   | Nein         | ["title", "hostname", "fqdn", "hostaddress", "alias"] | Suche nach diesen Identifiern, um Hosts mit Objekten abzugleichen; siehe Abschnitt "Identifier"         |
| pull.minMatch         | Integer | Nein         | 2                                                     | Objekt und Host müssen sich eine Mindestmenge an Identifiern teilen                                    |
| pull.attributes       | Array   | Nein         | _Siehe Abschnitt "Attribute"_                         | Liste der Kategorie-Konstanten, die geändert werden sollen; siehe Abschnitt "Attribute"                 |
| pull.enableExport     | Boolean | Nein         | true                                                  | Host-Konfiguration in Kategorie Check_MK Host schreiben                                                 |
| pull.enableLivestatus | Boolean | Nein         | true                                                  | Host-Konfiguration in Kategorie Monitoring schreiben                                                     |
| pull.ports            | String  | Nein         | physical                                              | Hinzufügen/Aktualisieren von "physischen" oder "logischen" Netzwerkanschlüssen                         |
| roles.monitoring      | String  | Nein         | Monitoring                                            | i-doit-Rolle für Kontaktgruppen, die bei Kontaktzuweisungen verwendet werden                            |
