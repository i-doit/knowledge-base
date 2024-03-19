<!-- TRANSLATED by md-translate -->
# checkmk 2: Häufig gestellte Fragen (FAQ)

# checkmk 2 : Foire aux questions (FAQ)

Wir haben einige der am häufigsten gestellten Fragen zu idoitcmk gesammelt.

Nous avons rassemblé quelques-unes des questions les plus fréquemment posées sur idoitcmk.

## Zugriff auf Hardware/Software-Inventar

## Accès à l'inventaire matériel/logiciel

In einer Umgebung mit mehreren Standorten können die Standorte Hardware-/Software-Informationen von ihren überwachten Hosts abrufen. Wenn Sie idoitcmk so konfiguriert haben, dass es Informationen über Ihre Hosts von einem Standort abruft, benötigt dieser Standort Zugriff auf das Hardware-/Softwareinventar der anderen Standorte. Stellen Sie dazu bitte sicher, dass Sie die folgenden Einstellungen vorgenommen haben:

Dans un environnement multi-sites, les sites peuvent récupérer des informations matérielles/logicielles auprès de leurs hôtes surveillés. Si vous avez configuré idoitcmk pour qu'il récupère des informations sur vos hôtes à partir d'un site, ce site doit avoir accès à l'inventaire matériel/logiciel des autres sites. Pour ce faire, veuillez vous assurer que vous avez configuré les paramètres suivants :

1. Gehe zu `**WATO > Distributed Monitoring > Edit slave site > Livestatus settings > Connection**`
2. Wähle `**Use Livestatus Proxy Daemon**`
3. Wähle option `**TCP port to connect to**` for `**Connect to**`
4. Add FQDN/IP and port for the selected slave which other sites can use
5. Uncheck `**Allow access via TCP**`
6. Save and activate your changes

1. va dans `**WATO > Distributed Monitoring > Edit slave site > Livestatus settings > Connection**`
2. choisissez `**Use Livestatus Proxy Daemon**`.
3. choisissez l'option `**TCP port to connect to**` pour `**Connect to**`.
4. ajouter FQDN/IP et port pour l'esclave sélectionné que d'autres sites peuvent utiliser
5. vérifier `**Autoriser l'accès via TCP**`.
6. enregistrer et activer vos modifications

Nun sehen Sie in der Web-GUI auf jeder Statusseite eines Hosts eine Schaltfläche mit der Bezeichnung **Inventory**. Dies ist ein guter Indikator dafür, dass idoitcmk auch über die Web-API auf Inventarinformationen zugreifen kann.

Maintenant, dans l'interface utilisateur Web, vous voyez sur chaque page d'état d'un hôte un bouton intitulé **Inventory**. C'est un bon indicateur du fait que idoitcmk peut également accéder aux informations d'inventaire via l'API Web.

## Multi-tenants

## Multi-tenants

Das Add-on unterstützt mehr als einen von i-doit bereitgestellten Tenant. Für jeden i-doit tenant müssen Sie einen eindeutigen API-Schlüssel konfigurieren.

L'add-on supporte plus d'un tenant fourni par i-doit. Pour chaque tenant i-doit, vous devez configurer une clé API unique.

Sie haben zum Beispiel bereits 2 oder mehr Mandanten in i-doit angelegt. Erstellen Sie für jeden Tenant eine etwas andere Konfigurationsdatei und fügen Sie den API-Schlüssel jedes Tenants in die Einstellung i-doit.key ein. Die Einstellung i-doit.url ist immer die gleiche, aber die Einstellungen i-doit.username und i-doit.password können sich unterscheiden. Für jeden Tenant rufen Sie idoitcmk auf und fügen die Option --config hinzu:

Vous avez par exemple déjà créé 2 ou plusieurs clients dans i-doit. Créez un fichier de configuration légèrement différent pour chaque tenant et insérez la clé API de chaque tenant dans le paramètre i-doit.key. Le paramètre i-doit.url est toujours le même, mais les paramètres i-doit.username et i-doit.password peuvent être différents. Pour chaque locataire, appelez idoitcmk et ajoutez l'option --config :

```shell
idoitcmk --config tenant1.json
    idoitcmk --config mieter2.json
```

Sie können die Konfigurationsdateien sogar vermischen: Eine Datei enthält allgemeine Einstellungen und die anderen sind tenant spezifisch. Zum Beispiel:

Vous pouvez même mélanger les fichiers de configuration : Un fichier contient des paramètres généraux et les autres sont spécifiques au tenant. Par exemple

```shell
idoitcmk --config common.js --config tenant1.json
    idoitcmk --config common.js --config tenant2.json
```

## Vergleich der Host-Tags zwischen checkmk und i-doit

## Comparaison des tags d'hôte entre checkmk et i-doit

Host-Tags werden in checkmk gruppiert. Dies ist ein Beispiel für eine Tag-Gruppe mit all ihren Tags:

Les tags d'hôte sont regroupés dans checkmk. Voici un exemple de groupe de balises avec toutes ses balises :

```
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
```

Über checkmk Web API erhalten Sie für das Tag prod dieses key-value Paar:

Via checkmk Web API, vous obtenez pour le tag prod cette paire key-value :

```shell
tag_criticality: prod
```

Wie Sie sehen, wird dem Schlüssel einer Tag-Gruppe das Präfix tag_ vorangestellt, gefolgt von ihrer Internal ID, hier: criticality. Die Tag ID wird als Wert verwendet.

Comme vous pouvez le constater, la clé d'un groupe de balises est précédée du préfixe tag_ et suivie de son Internal ID, ici : criticality. L'ID de la balise est utilisé comme valeur.

Auf der i-doit-Seite werden diese gruppierten Tags als static host tags bezeichnet. Man findet sie unter `Extras > Check_MK 2 > Tags (statisch)`. Dies ist die Darstellung des oben erwähnten Tags prod:

Sur le site i-doit, ces tags groupés sont appelés static host tags. On les trouve sous `Extras > Check_MK 2 > Tags (statiques)`. Il s'agit de la représentation de la balise prod mentionnée ci-dessus :

```shell
Host tag (id): prod
    Display name: Productive system
    Host group: criticality
    Description: Criticality
```

Hier ist ein direkter Vergleich zwischen checkmk und i-doit:

Voici une comparaison directe entre checkmk et i-doit :

| checkmk | i-doit | i-doit key | Beispiel |
| --- | --- | --- | --- |
| Internal ID | Host group | group | criticality |
| Title | Description | -    | Criticality |
| Topic | -    | -    | -    |
| Tag ID | Host tag (ID) | const | prod |
| Description | Display name | val | Productive system |

| checkmk | i-doit | i-doit key | exemple |
| --- | --- | --- | --- |
| Internal ID | Host group | group | criticality |
| Title | Description | - | Criticality |
| Topic | - | - - - |
| ID de la balise | Host tag (ID) | const | prod |
| Description | Nom d'affichage | val | Système productif |

## Selbstsignierte Zertifikate und andere Probleme mit TLS-Verbindungen

## Certificats auto-signés et autres problèmes liés aux connexions TLS

Es ist gängige Praxis, TLS-verschlüsselte HTTPS-Verbindungen zwischen idoitcmk, i-doit und checkmk zu erzwingen - selbst in privaten Netzwerken mit Firewalls. Oft werden dabei selbstsignierte x.509-Zertifikate verwendet. Das ist überhaupt kein Problem, wenn man diese Schritte beachtet:

Il est courant de forcer des connexions HTTPS chiffrées TLS entre idoitcmk, i-doit et checkmk, même dans des réseaux privés équipés de pare-feu. Souvent, des certificats x.509 auto-signés sont utilisés à cet effet. Ce n'est pas du tout un problème si l'on suit ces étapes :

* Der Host, auf dem idoitcmk läuft (genauer: OpenSSL, das von cURL benutzt wird, das wiederum von PHP benutzt wird), muss die komplette Zertifikatskette überprüfen, insbesondere das Wurzelzertifikat. Importieren Sie daher Ihr Wurzelzertifikat auf diesen Host. Sie sollten testen, ob alles funktioniert, indem Sie den Befehl status ausführen:

* L'hôte sur lequel fonctionne idoitcmk (plus précisément OpenSSL, utilisé par cURL, lui-même utilisé par PHP) doit vérifier la chaîne complète de certificats, en particulier le certificat racine. Importez donc votre certificat racine sur cet hôte. Vous devriez tester si tout fonctionne en exécutant la commande status :

```shell
idoitcmk status -v
```

* Alternativ, aber nicht unbedingt empfehlenswert, können Sie diese Zertifikatsüberprüfung auch deaktivieren. Sie müssen sie für beide Verbindungen zu i-doit und checkmk deaktivieren, indem Sie zwei neue Konfigurationseinstellungen hinzufügen. Beispiel:

* Alternativement, mais pas nécessairement recommandé, vous pouvez désactiver cette vérification de certificat. Vous devez la désactiver pour les deux connexions à i-doit et checkmk en ajoutant deux nouveaux paramètres de configuration. Exemple :

```shell
idoitcmk status -v -s "i-doit.bypassSecureConnection=true" -s "check_mk.webAPI.bypassSecureConnection=true"
```

Bitte bedenken Sie, dass die Deaktivierung der Überprüfung Ihre Einrichtung nicht vor Man-in-the-Middle-Angriffen schützt. Dies schwächt Ihre IT-Sicherheit erheblich. Sie werden gewarnt werden.

N'oubliez pas que la désactivation de la vérification ne protège pas votre établissement contre les attaques de type "man-in-the-middle". Cela affaiblit considérablement votre sécurité informatique. Vous serez averti.

## checkmk antwortet mit dem HTTP-Statuscode "414"

## checkmk répond avec le code d'état HTTP "414".

Manchmal antwortet checkmk mit dem HTTP-Statuscode 414 URI too long, wenn es die Hardware/Software-Inventarisierungs-API anfordert. Dies könnte zum Beispiel bei der Ausführung des Befehls pull passieren:

Parfois, checkmk répond avec le code d'état HTTP 414 URI too long lorsqu'il demande l'API d'inventaire matériel/logiciel. Cela pourrait par exemple se produire lors de l'exécution de la commande pull :

```shell
$ idoitcmk pull
    Import inventory data into CMDB

    Looking for hosts in checkmk…
    Found 1234 hosts

    Read hardware/software inventory data for each host…
    Web server responded with HTTP status code "414"
```

Um diesen Fehler zu vermeiden, sollten Sie die Konfigurationseinstellung `i-doit.limitBatchRequests` verringern. Der Standardwert ist 500. Ein Wert von 100 sollte funktionieren.

Pour éviter cette erreur, vous devriez réduire le paramètre de configuration `i-doit.limitBatchRequests`. La valeur par défaut est de 500. Une valeur de 100 devrait fonctionner.

## Duplizierte Objekte nach dem Ziehen nach i-doit

## Objets dupliqués après avoir été glissés dans i-doit

Wenn das Matching nicht richtig zu funktionieren scheint, stellen Sie sicher, dass die Kategorien "Checkmk Host" und "Checkmk Tags" den Objekttypen, die Sie nach i-doit pullen, zugewiesen sind, indem Sie [Datenstruktur bearbeiten](../../administration/verwaltung/datenstruktur/datenstruktur-bearbeiten.md) verwenden.

Si le matching ne semble pas fonctionner correctement, assurez-vous que les catégories "Checkmk Host" et "Checkmk Tags" sont assignées aux types d'objets que vous mettez en pull vers i-doit en utilisant [Modifier la structure des données](../../administration/administration/structure des données/modifier la structure des données.md).

Es kann auch notwendig sein, die [pull identifiers](./checkmk2-konfiguration.md) auf z.B. den Hostnamen zu reduzieren.

Il peut également être nécessaire de réduire les [pull identifiers](./checkmk2-konfiguration.md) au nom d'hôte, par exemple.