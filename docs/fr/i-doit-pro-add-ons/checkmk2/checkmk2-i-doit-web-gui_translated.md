<!-- TRANSLATED by md-translate -->
# checkmk 2 i-doit Web GUI

# checkmk 2 i-doit Web GUI

Die meisten Benutzerinteraktionen basieren auf dem [legacy checkmk add-on](./index.md) von i-doit, das derzeit mit i-doit pro/open ausgeliefert wird. Dieses Legacy-Add-on muss [über das i-doit Admin Center](../index.md) aktiviert werden (es ist standardmäßig aktiviert).

La plupart des interactions utilisateur sont basées sur le [legacy checkmk add-on](./index.md) d'i-doit, qui est actuellement livré avec i-doit pro/open. Ce legacy add-on doit être activé [via le centre d'administration i-doit](../index.md) (il est activé par défaut).

## Echtzeit-Aufrufe aktivieren

## Activer les appels en temps réel

Lassen Sie i-doit den Status von Host- und Service-Checks über Livestatus in Echtzeit abrufen. Die Konfiguration erfolgt über **Verwaltung → Import und interfaces → Monitoring → Livestatus / NDO**.

Permettez à i-doit de consulter en temps réel l'état des contrôles d'hôtes et de services via Livestatus. La configuration se fait via **Administration → Importation et interfaces → Monitoring → Livestatus / NDO**.

Diese Statusabfrage können in jedem Objekt oder in den Objektlisten für jeden Typ angezeigt werden. Fügen Sie diesen Objekt-Typen die Kategorie "Monitoring" über "Verwaltung > CMDB-Einstellungen > Schnellkonfigurationsassistent" hinzu.

Cette requête d'état peut être affichée dans chaque objet ou dans les listes d'objets pour chaque type. Ajoutez la catégorie "Monitoring" à ces types d'objets via "Administration > Paramètres CMDB > Assistant de configuration rapide".

Aktivieren Sie Statusaufrufe innerhalb dieser Kategorie manuell für jedes Objekt oder [idoitcmk pull](h./../checkmk2-bestandsdaten-in-die-cmdb-importieren.md) wird dies durch [Konfigurationseinstellung](./checkmk2-konfiguration.md) `pull.enableLivestatus` erledigen.

Activez manuellement les appels de statut au sein de cette catégorie pour chaque objet ou [idoitcmk pull](h./../checkmk2-bestandesdaten-in-die-cmdb-import.md) s'en chargera en utilisant [configuration](./checkmk2-konfiguration.md) `pull.enableLivestatus`.

## Verwalten von Host-Tags

## Gérer les balises d'hôte

Mit i-doit können Sie Host-Tags verwalten. Es gibt "statische" und "dynamische" Host-Tags: - "static" means you manually create tags in Extras > Check_MK 2 > Tags (static) and add them to host in category Check_MK Tags. - "dynamic" means this is done automatically via rule sets in Extras > Check_MK 2 > Tags (dynamic).

Avec i-doit, vous pouvez gérer les tags d'hôte. Il existe des balises hôte "statiques" et "dynamiques" : - "static" signifie que vous créez manuellement des balises dans Extras > Check_MK 2 > Tags (statiques) et les ajoutez à l'hôte dans la catégorie Check_MK Tags. - "dynamique" signifie que cela se fait automatiquement via des jeux de règles dans Outils > Check_MK 2 > Balises (dynamiques).

Sowohl "statische" als auch "dynamische" Host-Tags werden in der Kategorie Check_MK Tags angezeigt. Sie werden über [idoitcmk push](./checkmk2-wato-konfiguration-auf-basis-von-cmdb-daten-generieren.md) nach checkmk exportiert.

Les balises hôtes "statiques" et "dynamiques" sont toutes deux affichées dans la catégorie Check_MK Tags. Elles sont exportées vers checkmk via [idoitcmk push](./checkmk2-wato-configuration-basee-sur-cmdb-data-generation.md).

## Aufruf von idoitcmk über Web GUI

## Appel de idoitcmk via l'interface utilisateur Web

Die Kategorie Check_MK Host bietet mehrere Schaltflächen, die idoitcmk im Hintergrund auslösen:

La catégorie Check_MK Host propose plusieurs boutons qui déclenchent idoitcmk en arrière-plan :

* Existiert der Host in checkmk?: Identifizierung des Hosts in checkmk anhand seines Hostnamens
* Objekt von checkmk aktualisieren": Holt Daten vom checkmk-Host, um dieses Objekt zu aktualisieren.
* Host in checkmk erstellen/aktualisieren": Die Objektdaten werden nach checkmk übertragen. Entweder wird ein neuer Host in checkmk erstellt oder ein bestehender aktualisiert.
* Host in checkmk löschen": Wenn dieses Objekt als Host in checkmk existiert, wird es gelöscht.

* L'hôte existe-t-il dans checkmk ? Identifier l'hôte dans checkmk par son nom d'hôte.
* Mettre à jour l'objet de checkmk" : Récupère les données de l'hôte checkmk pour mettre à jour cet objet.
* Créer/mettre à jour l'hôte dans checkmk" : Les données de l'objet sont transférées vers checkmk. Soit un nouvel hôte est créé dans checkmk, soit un hôte existant est mis à jour.
* Supprimer l'hôte dans checkmk" : Si cet objet existe comme hôte dans checkmk, il sera supprimé.

Bevor Sie oder ein anderer Benutzer eine dieser Schaltflächen betätigen, führen Sie sie bitte manuell über die Befehlszeilenschnittstelle aus, um sicherzustellen, dass sie das tun, was sie tun sollen.

Avant que vous ou un autre utilisateur n'actionniez l'un de ces boutons, veuillez l'exécuter manuellement via l'interface de ligne de commande afin de vous assurer qu'il fait bien ce qu'il est censé faire.

Die Konfiguration erfolgt über **Verwaltung → Add-ons → Check_MK**. Durch die Einstellung App idoitcmk aufrufen muss i-doit wissen, wo sich idoitcmk befindet. Wenn Sie die [Installationsschritte](./checkmk2-installation.md) sorgfältig befolgt haben, verwenden Sie dies:

La configuration s'effectue via **Administration → Add-ons → Check_MK**. Grâce au paramètre Appeler idoitcmk, i-doit savoir où se trouve idoitcmk. Si vous avez suivi attentivement les [étapes d'installation](./checkmk2-installation.md), utilisez ceci :

```
/usr/local/bin/idoitcmk
```

Tipp: Möglicherweise möchten Sie Standardoptionen hinzufügen, wenn eine der Schaltflächen ausgelöst wird. In einer Multi-Mandanten-Umgebung können Sie beispielsweise mieterspezifische Konfigurationseinstellungen bereitstellen:

Conseil : vous souhaiterez peut-être ajouter des options par défaut lorsqu'un des boutons est déclenché. Par exemple, dans un environnement multi-mandants, vous pouvez fournir des paramètres de configuration spécifiques aux locataires :

```
/usr/local/bin/idoitcmk -c /etc/idoitcmk/tenant-one.json
```

Die Protokollierung ist standardmäßig aktiviert. Für die ersten Schritte ist es immer gut zu wissen, was gerade passiert.

La journalisation est activée par défaut. Pour les premiers pas, il est toujours bon de savoir ce qui se passe.

Um Benutzern/Benutzergruppen die Berechtigung zu erteilen, diese Schaltflächen auszulösen, gehen Sie zu "Verwaltung > Berechtigungssystem > Rechte > CMDB", laden Sie einen Benutzer/eine Gruppe und aktivieren Sie das Recht "Ausführen" für eine oder mehrere Bedingungen:

Pour donner aux utilisateurs/groupes d'utilisateurs l'autorisation de déclencher ces boutons, allez dans "Administration > Système d'autorisation > Droits > CMDB", chargez un utilisateur/groupe et activez le droit "Exécuter" pour une ou plusieurs conditions :

* Kategorie,
* Kategorie in Objekt-Typen,
* Kategorie in Objekten,
* Kategorie in Objekten unterhalb einer Lokation und/oder
* Kategorien in von mir erstellten Objekten

* Catégorie,
* Catégorie dans les types d'objets,
* catégorie dans les objets,
* catégorie dans les objets en dessous d'une localisation et/ou
* catégories dans les objets que j'ai créés
