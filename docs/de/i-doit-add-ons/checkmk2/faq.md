---
title: Haeufig gestellte Fragen (FAQ)
description: Hier findest du einige der am häufigsten gestellten Fragen zu idoitcmk.
icon:
status:
lang: de
---
# Häufig gestellte Fragen (FAQ)

Hier findest du einige der am häufigsten gestellten Fragen zu idoitcmk.

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

## Zugriff auf Hardware/Software-Inventar

In einer Umgebung mit mehreren Standorten können die Standorte Hardware-/Software-Informationen von ihren überwachten Hosts abrufen. Wenn du idoitcmk so konfiguriert hast, dass es Informationen über deine Hosts von einem Standort abruft, benötigt dieser Standort Zugriff auf das Hardware-/Softwareinventar der anderen Standorte. Stelle dazu bitte sicher, dass du die folgenden Einstellungen vorgenommen hast:

1. Gehe zu `**WATO > Distributed Monitoring > Edit slave site > Livestatus settings > Connection**`
2. Wähle `**Use Livestatus Proxy Daemon**`
3. Wähle die Option `**TCP port to connect to**` für `**Connect to**`
4. Fuege FQDN/IP und Port für den ausgewählten Slave hinzu, den andere Sites nutzen können
5. Deaktiviere `**Allow access via TCP**`
6. Speichere und aktiviere deine Änderungen

Nun siehst du in der Web-GUI auf jeder Statusseite eines Hosts eine Schaltfläche mit der Bezeichnung **Inventory**. Dies ist ein guter Indikator dafür, dass idoitcmk auch über die Web-API auf Inventarinformationen zugreifen kann.

## Multi-Tenants

Das Add-on unterstützt mehr als einen von i-doit bereitgestellten Mandanten. Für jeden i-doit-Mandanten musst du einen eindeutigen API-Schlüssel konfigurieren.

Du hast zum Beispiel bereits 2 oder mehr Mandanten in i-doit angelegt. Erstelle für jeden Mandanten eine etwas andere Konfigurationsdatei und fuege den API-Schlüssel jedes Mandanten in die Einstellung i-doit.key ein. Die Einstellung i-doit.url ist immer die gleiche, aber die Einstellungen i-doit.username und i-doit.password können sich unterscheiden. Für jeden Mandanten rufst du idoitcmk auf und fuegst die Option --config hinzu:

```shell
idoitcmk --config tenant1.json
idoitcmk --config tenant2.json
```

Du kannst die Konfigurationsdateien sogar vermischen: Eine Datei enthält allgemeine Einstellungen und die anderen sind mandantenspezifisch. Zum Beispiel:

```shell
idoitcmk --config common.js --config tenant1.json
idoitcmk --config common.js --config tenant2.json
```

## Vergleich der Host-Tags zwischen Checkmk und i-doit

Host-Tags werden in Checkmk gruppiert. Dies ist ein Beispiel für eine Tag-Gruppe mit all ihren Tags:

    Internal ID: criticality
    Title: Criticality
    Topic: -
    Choices:
        1
            Tag ID: prod
            Description: Productive system
        2
            Tag ID: critical
            Description: Business critical
        3
            Tag ID: test
            Description: Test system
        4
            Tag ID: offline
            Description: Do not monitor this host

Über die Checkmk Web API erhältst du für das Tag prod dieses Key-Value-Paar:

```shell
tag_criticality: prod
```

Wie du siehst, wird dem Schlüssel einer Tag-Gruppe das Präfix tag_ vorangestellt, gefolgt von ihrer Internal ID, hier: criticality. Die Tag ID wird als Wert verwendet.

Auf der i-doit-Seite werden diese gruppierten Tags als statische Host-Tags bezeichnet. Du findest sie unter `Extras > Check_MK 2 > Tags (statisch)`. Dies ist die Darstellung des oben erwaehnten Tags prod:

```shell
Host tag (id): prod
Display name: Productive system
Host group: criticality
Description: Criticality
```

Hier ist ein direkter Vergleich zwischen Checkmk und i-doit:

| Checkmk     | i-doit        | i-doit key | Beispiel          |
| ----------- | ------------- | ---------- | ----------------- |
| Internal ID | Host group    | group      | criticality       |
| Title       | Description   | -          | Criticality       |
| Topic       | -             | -          | -                 |
| Tag ID      | Host tag (ID) | const      | prod              |
| Description | Display name  | val        | Productive system |

## Selbstsignierte Zertifikate und andere Probleme mit TLS-Verbindungen

Es ist gaengige Praxis, TLS-verschlüsselte HTTPS-Verbindungen zwischen idoitcmk, i-doit und Checkmk zu erzwingen -- selbst in privaten Netzwerken mit Firewalls. Oft werden dabei selbstsignierte x.509-Zertifikate verwendet. Das ist überhaupt kein Problem, wenn du diese Schritte beachtest:

*   Der Host, auf dem idoitcmk läuft (genauer: OpenSSL, das von cURL benutzt wird, das wiederum von PHP benutzt wird), muss die komplette Zertifikatskette überprüfen, insbesondere das Wurzelzertifikat. Importiere daher dein Wurzelzertifikat auf diesen Host. Du solltest testen, ob alles funktioniert, indem du den Befehl status ausführst:

```shell
idoitcmk status -v
```

*   Alternativ, aber nicht unbedingt empfehlenswert, kannst du diese Zertifikatsüberprüfung auch deaktivieren. Du musst sie für beide Verbindungen zu i-doit und Checkmk deaktivieren, indem du zwei neue Konfigurationseinstellungen hinzufügst. Beispiel:

```shell
idoitcmk status -v -s "i-doit.bypassSecureConnection=true" -s "check_mk.webAPI.bypassSecureConnection=true"
```

Bitte bedenke, dass die Deaktivierung der Überprüfung deine Einrichtung nicht vor Man-in-the-Middle-Angriffen schützt. Dies schwaecht deine IT-Sicherheit erheblich. Du wirst gewarnt.

## Checkmk antwortet mit dem HTTP-Statuscode "414"

Manchmal antwortet Checkmk mit dem HTTP-Statuscode 414 URI too long, wenn es die Hardware/Software-Inventarisierungs-API anfordert. Dies könnte zum Beispiel bei der Ausführung des Befehls pull passieren:

```shell
$ idoitcmk pull
Import inventory data into CMDB

Looking for hosts in checkmk…
Found 1234 hosts

Read hardware/software inventory data for each host…
Web server responded with HTTP status code "414"
```

Um diesen Fehler zu vermeiden, solltest du die Konfigurationseinstellung `i-doit.limitBatchRequests` verringern. Der Standardwert ist 500. Ein Wert von 100 sollte funktionieren.

## Duplizierte Objekte nach dem Pull nach i-doit

Wenn das Matching nicht richtig zu funktionieren scheint, stelle sicher, dass die Kategorien "Checkmk Host" und "Checkmk Tags" den Objekttypen zugewiesen sind, die du nach i-doit pullst. Verwende dafür [Datenstruktur bearbeiten](../../administration/verwaltung/datenstruktur/datenstruktur-bearbeiten.md).

Es kann auch notwendig sein, die [Pull-Identifiers](./konfiguration.md) auf z.B. den Hostnamen zu reduzieren.
