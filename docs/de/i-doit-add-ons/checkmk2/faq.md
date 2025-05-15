# Häufig gestellte Fragen (FAQ)

Wir haben einige der am häufigsten gestellten Fragen zu idoitcmk gesammelt.

## Zugriff auf Hardware/Software-Inventar

In einer Umgebung mit mehreren Standorten können die Standorte Hardware-/Software-Informationen von ihren überwachten Hosts abrufen. Wenn Sie idoitcmk so konfiguriert haben, dass es Informationen über Ihre Hosts von einem Standort abruft, benötigt dieser Standort Zugriff auf das Hardware-/Softwareinventar der anderen Standorte. Stellen Sie dazu bitte sicher, dass Sie die folgenden Einstellungen vorgenommen haben:

1. Gehe zu `**WATO > Distributed Monitoring > Edit slave site > Livestatus settings > Connection**`
2. Wähle `**Use Livestatus Proxy Daemon**`
3. Wähle option `**TCP port to connect to**` for `**Connect to**`
4. Add FQDN/IP and port for the selected slave which other sites can use
5. Uncheck `**Allow access via TCP**`
6. Save and activate your changes

Nun sehen Sie in der Web-GUI auf jeder Statusseite eines Hosts eine Schaltfläche mit der Bezeichnung **Inventory**. Dies ist ein guter Indikator dafür, dass idoitcmk auch über die Web-API auf Inventarinformationen zugreifen kann.

## Multi-tenants

Das Add-on unterstützt mehr als einen von i-doit bereitgestellten Tenant. Für jeden i-doit tenant müssen Sie einen eindeutigen API-Schlüssel konfigurieren.

Sie haben zum Beispiel bereits 2 oder mehr Mandanten in i-doit angelegt. Erstellen Sie für jeden Tenant eine etwas andere Konfigurationsdatei und fügen Sie den API-Schlüssel jedes Tenants in die Einstellung i-doit.key ein. Die Einstellung i-doit.url ist immer die gleiche, aber die Einstellungen i-doit.username und i-doit.password können sich unterscheiden. Für jeden Tenant rufen Sie idoitcmk auf und fügen die Option --config hinzu:

```shell
idoitcmk --config tenant1.json
idoitcmk --config tenant2.json
```

Sie können die Konfigurationsdateien sogar vermischen: Eine Datei enthält allgemeine Einstellungen und die anderen sind tenant spezifisch. Zum Beispiel:

```shell
idoitcmk --config common.js --config tenant1.json
idoitcmk --config common.js --config tenant2.json
```

## Vergleich der Host-Tags zwischen checkmk und i-doit

Host-Tags werden in checkmk gruppiert. Dies ist ein Beispiel für eine Tag-Gruppe mit all ihren Tags:

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

Über checkmk Web API erhalten Sie für das Tag prod dieses key-value Paar:

```shell
tag_criticality: prod
```

Wie Sie sehen, wird dem Schlüssel einer Tag-Gruppe das Präfix tag_ vorangestellt, gefolgt von ihrer Internal ID, hier: criticality. Die Tag ID wird als Wert verwendet.

Auf der i-doit-Seite werden diese gruppierten Tags als static host tags bezeichnet. Man findet sie unter `Extras > Check_MK 2 > Tags (statisch)`. Dies ist die Darstellung des oben erwähnten Tags prod:

```shell
Host tag (id): prod
Display name: Productive system
Host group: criticality
Description: Criticality
```

Hier ist ein direkter Vergleich zwischen checkmk und i-doit:

| checkmk     | i-doit        | i-doit key | Beispiel          |
| ----------- | ------------- | ---------- | ----------------- |
| Internal ID | Host group    | group      | criticality       |
| Title       | Description   | -          | Criticality       |
| Topic       | -             | -          | -                 |
| Tag ID      | Host tag (ID) | const      | prod              |
| Description | Display name  | val        | Productive system |

## Selbstsignierte Zertifikate und andere Probleme mit TLS-Verbindungen

Es ist gängige Praxis, TLS-verschlüsselte HTTPS-Verbindungen zwischen idoitcmk, i-doit und checkmk zu erzwingen - selbst in privaten Netzwerken mit Firewalls. Oft werden dabei selbstsignierte x.509-Zertifikate verwendet. Das ist überhaupt kein Problem, wenn man diese Schritte beachtet:

*   Der Host, auf dem idoitcmk läuft (genauer: OpenSSL, das von cURL benutzt wird, das wiederum von PHP benutzt wird), muss die komplette Zertifikatskette überprüfen, insbesondere das Wurzelzertifikat. Importieren Sie daher Ihr Wurzelzertifikat auf diesen Host. Sie sollten testen, ob alles funktioniert, indem Sie den Befehl status ausführen:

```shell
idoitcmk status -v
```

*   Alternativ, aber nicht unbedingt empfehlenswert, können Sie diese Zertifikatsüberprüfung auch deaktivieren. Sie müssen sie für beide Verbindungen zu i-doit und checkmk deaktivieren, indem Sie zwei neue Konfigurationseinstellungen hinzufügen. Beispiel:

```shell
idoitcmk status -v -s "i-doit.bypassSecureConnection=true" -s "check_mk.webAPI.bypassSecureConnection=true"
```

Bitte bedenken Sie, dass die Deaktivierung der Überprüfung Ihre Einrichtung nicht vor Man-in-the-Middle-Angriffen schützt. Dies schwächt Ihre IT-Sicherheit erheblich. Sie werden gewarnt werden.

## checkmk antwortet mit dem HTTP-Statuscode "414"

Manchmal antwortet checkmk mit dem HTTP-Statuscode 414 URI too long, wenn es die Hardware/Software-Inventarisierungs-API anfordert. Dies könnte zum Beispiel bei der Ausführung des Befehls pull passieren:

```shell
$ idoitcmk pull
Import inventory data into CMDB

Looking for hosts in checkmk…
Found 1234 hosts

Read hardware/software inventory data for each host…
Web server responded with HTTP status code "414"
```

Um diesen Fehler zu vermeiden, sollten Sie die Konfigurationseinstellung `i-doit.limitBatchRequests` verringern. Der Standardwert ist 500. Ein Wert von 100 sollte funktionieren.

## Duplizierte Objekte nach dem Ziehen nach i-doit

Wenn das Matching nicht richtig zu funktionieren scheint, stellen Sie sicher, dass die Kategorien "Checkmk Host" und "Checkmk Tags" den Objekttypen, die Sie nach i-doit pullen, zugewiesen sind, indem Sie [Datenstruktur bearbeiten](../../administration/verwaltung/datenstruktur/datenstruktur-bearbeiten.md) verwenden.

Es kann auch notwendig sein, die [pull identifiers](./konfiguration.md) auf z.B. den Hostnamen zu reduzieren.
