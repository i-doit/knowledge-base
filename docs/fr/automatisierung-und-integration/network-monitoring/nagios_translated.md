<!-- TRANSLATED by md-translate -->
# Nagios

# Nagios

Nagios ist eine Software für [Network Monitoring](index.md), das aus den Daten der [IT-Dokumentation](../../glossar.md) heraus konfiguriert werden kann. Dadurch lassen sich eine doppelte Pflege von Daten vermeiden und Fehler minimieren. Der in i-doit verfügbare Export erlaubt es, vollständige oder partielle Konfigurationen zu erzeugen. Dazu werden in der i-doit-Oberfläche Nagios-Konfigurationen manuell angelegt oder automatisiert mit Werten unterfüttert.

Nagios est un logiciel de [Network Monitoring](index.md) qui peut être configuré à partir des données de la [Documentation IT](../../glossaire.md). Cela permet d'éviter une double gestion des données et de minimiser les erreurs. L'exportation disponible dans i-doit permet de créer des configurations complètes ou partielles. Pour ce faire, les configurations Nagios sont créées manuellement dans l'interface d'i-doit ou sont alimentées automatiquement avec des valeurs.

!!! info "Kompatibilität"

! !! info "Compatibilité

```
Die exportierten Daten sind mit der Version 3 von Nagios und Version 1 von Icinga kompatibel. Version 4 von Nagios ist nicht vollständig kompatibel. Weitere Derivate von Nagios werden nicht unterstützt.
```

## Grundkonfiguration

## Configuration de base

Unter **Verwaltung → Import und Schnittstellen → Monitoring → Exportkonfiguration** wird die Konfiguration hinterlegt. Der **Lokale Pfad** definiert einen absoluten oder relativen Pfad zur i-doit Installation im Dateisystem, in dem die von i-doit erzeugte Konfiguration abgelegt werden soll. Der **Link zum Monitoring Tool** gibt einen Basislink an, um aus i-doit heraus Links auf die Monitoring-Instanz zu generieren.

Sous **Administration → Importation et interfaces → Monitoring → Configuration d'exportation**, la configuration est déposée. Le **chemin local** définit un chemin absolu ou relatif vers l'installation i-doit dans le système de fichiers dans lequel la configuration générée par i-doit doit être déposée. Le **Lien vers l'outil de monitoring** indique un lien de base pour générer des liens vers l'instance de monitoring à partir d'i-doit.

[![nagios-verwalten](../../assets/images/de/automatisierung-und-integration/network-monitoring/nagios/1-nag.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/nagios/1-nag.png)

[ ![gestion de nagios](../../assets/images/fr/automatisation-et-intégration/network-monitoring/nagios/1-nag.png)](../../assets/images/fr/automatisation-et-intégration/network-monitoring/nagios/1-nag.png)

## Basiskonfigurationen

## Configurations de base

Unter **Add-ons → Nagios** werden die Basiskonfigurationen angelegt.

Les configurations de base sont créées sous **Add-ons → Nagios**.

[![nagios-extras](../../assets/images/de/automatisierung-und-integration/network-monitoring/nagios/2-nag.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/nagios/2-nag.png)

[ ![nagios-extras](../../assets/images/fr/automatisation-et-integration/network-monitoring/nagios/2-nag.png)](../../assets/images/fr/automatisation-et-integration/network-monitoring/nagios/2-nag.png)

Dazu gehört die Hauptkonfiguration, Service- und Host-Templates sowie weitere grundlegende Einstellungen. Alle Werte sind 1:1 mit der Nagios-Konfiguration deckungsgleich.

Cela comprend la configuration principale, les modèles de service et d'hôte ainsi que d'autres paramètres de base. Toutes les valeurs correspondent 1:1 à la configuration de Nagios.

## Konfiguration in Objekten

## Configuration dans les objets

Alle weiteren Konfigurationen werden innerhalb der [Objekte](../../grundlagen/struktur-it-dokumentation.md) vorgenommen. Der einfachste Fall ist die Konfiguration von Hostparametern. Hierzu muss über [Datenstruktur bearbeiten](../../administration/verwaltung/datenstruktur/datenstruktur-bearbeiten.md) der [Kategorie](../../grundlagen/struktur-it-dokumentation.md) Ordner **Nagios (Host)** zu den gewünschten [Objekttypen](../../grundlagen/struktur-it-dokumentation.md) zugewiesen werden.

Toutes les autres configurations sont effectuées à l'intérieur des [objets](../../bases/structure-it-documentation.md). Le cas le plus simple est la configuration des paramètres de l'hôte. Pour cela, il faut assigner le dossier **Nagios (hôte)** aux [types d'objets](../../grundlagen/struktur-it-dokumentation.md) souhaités via [Modifier la structure de données](../../administration/administration/datenstruktur/datenstruktur-bearbeiten.md).

In der Kategorie **Host Definition** kann dann entweder über ein Nagios Template oder durch individuelle Konfiguration eine Hostdefinition für Nagios hinterlegt werden.

Dans la catégorie **Host Definition**, il est alors possible d'enregistrer une définition d'hôte pour Nagios, soit via un modèle Nagios, soit par une configuration individuelle.

[![nagios-konfiguration](../../assets/images/de/automatisierung-und-integration/network-monitoring/nagios/3-nag.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/nagios/3-nag.png)

[ ![nagios-configuration](../../assets/images/fr/automatisation-et-integration/network-monitoring/nagios/3-nag.png)](../../assets/images/fr/automatisation-et-integration/network-monitoring/nagios/3-nag.png)

Das Prinzip der Host- und Service Templates ist mit der Nagios-Konfiguration deckungsgleich.
Über die Kategorie **Servicezuweisung** werden in der Basiskonfiguration definierte Servicechecks einem Host zugewiesen.
Als Ergebnis bildet sich später hieraus die Konfiguration einer klassischen Host-zu-Service-Zuweisung. Es gibt zusätzlich einen zweiten Weg, wie Services zu Hosts zugewiesen werden können. Dies geschieht über die Vererbung über ein Softwareobjekt.<br>
in einem Softwareobjekt in der Kategorie **Nagios (Anwendungen)** wird ein Servicecheck zugewiesen, analog zu der Zuweisung zu einem Host.
Ist diese Anwendung nun über die Kategorie **Softwarezuweisung** auf einem Host installiert, wird der Servicecheck auf den Host automatisch vererbt.
Weitere Nagios-Konfigurationen innerhalb von Objekten finden sich in Objekten vom Typ **Personen sowie in Personengruppen und Objektgruppen**.

Le principe des modèles d'hôtes et de services est identique à celui de la configuration de Nagios.
Les contrôles de service définis dans la configuration de base sont attribués à un hôte via la catégorie **Affectation de service**.
Il en résultera plus tard la configuration d'une attribution classique d'hôte à service. Il existe en outre une deuxième manière d'attribuer des services à des hôtes. Il s'agit de l'héritage via un objet logiciel.
dans un objet logiciel de la catégorie **Nagios (applications)**, un contrôle de service est attribué, de la même manière que l'attribution à un hôte.
Si cette application est maintenant installée sur un hôte via la catégorie **Affectation logicielle**, le contrôle de service est automatiquement hérité par l'hôte.
D'autres configurations Nagios au sein des objets se trouvent dans les objets de type **Personnes ainsi que dans les groupes de personnes et les groupes d'objets**.

## Export der Nagios Konfiguration

## Exportation de la configuration de Nagios

Unter **Verwaltung → Import und Schnittstellen → Monitoring → Exportkonfiguration** können die Nagios-Konfigurationen manuell exportiert werden. Dazu wird eine Exportkonfiguration ausgewählt und optional eine Validierung der Parameter angewählt.

Sous **Administration → Importation et interfaces → Monitoring → Configuration d'exportation**, les configurations Nagios peuvent être exportées manuellement. Pour cela, on choisit une configuration d'exportation et on sélectionne en option une validation des paramètres.

[![nagios-export](../../assets/images/de/automatisierung-und-integration/network-monitoring/nagios/4-nag.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/nagios/4-nag.png)

[ ![nagios-export](../../assets/images/fr/automatisation-et-intégration/network-monitoring/nagios/4-nag.png)](../../assets/images/fr/automatisation-et-intégration/network-monitoring/nagios/4-nag.png)

Die Validierung überprüft grundlegende Abhängigkeiten, ob beispielsweise eine IP-Adresse für einen Host eingetragen ist. Diese Überprüfung soll davor schützen, korrupte Nagios-Konfigurationen zu erzeugen, allerdings ist es kein 100-prozentiger Schutz. Zur Sicherheit sollte immer ein Test mit der Nagios Binary über die erzeugte Konfiguration gefahren werden.

La validation vérifie les dépendances de base, par exemple si une adresse IP est enregistrée pour un hôte. Cette vérification doit protéger contre la création de configurations Nagios corrompues, mais ce n'est pas une protection à 100 %. Pour plus de sécurité, il faut toujours effectuer un test avec le binaire Nagios sur la configuration générée.

Die Konfigurationsdateien werden gemäß dem konfigurierten Pfad auf dem Dateisystem abgelegt und entsprechen den in den Kategorien konfigurierten Werten.

Les fichiers de configuration sont placés sur le système de fichiers selon le chemin configuré et correspondent aux valeurs configurées dans les catégories.

Selbstverständlich lässt sich der Export der Dateien auch über die i-doit [Console](../cli/console/index.md) automatisieren. Eine Beschreibung der einzelnen Parameter sowie ein Beispiel sind im [entsprechenden Artikel](../cli/console/optionen-und-parameter-der-console.md#nagios-export) für die Option **Exportkonfiguration** zu finden.

Bien entendu, l'exportation des fichiers peut également être automatisée via la [Console] d'i-doit(../cli/console/index.md). Une description des différents paramètres ainsi qu'un exemple se trouvent dans [l'article correspondant](../cli/console/options-et-paramètres-de-la-console.md#nagios-export) pour l'option **Configuration-export**.

## Changelog

## Changelog

| Version | Date | Changelog |
| --- | --- | --- |
| 1.1.1 | 22.08.2023 | [Improvement] PHP 8.1 Compatibility |
| 1.1 | 05.09.2022 | [Task] PHP 8.0 compatibility  <br>[Task] Design Compatibility |
| 1.0.3 |     | [Improvement] Compatibility with i-doit 1.16 |
| 1.0.2 |     | [Bug] The Nagios category cannot be opened among persons<br>[Bug] Clicking on "Edit" after saving an object, navigates to object list<br>[Bug] Click on "Edit" in object list should be only possible if object is selected |
| 1.0.1 |     | [Bug] Creation of Nagios tables is performed in the wrong order |
| 1.0 |     | [Change] Add-onize Nagios |

| Version | Date | Changelog |
| --- | --- | --- |
| 1.1.1 | 22.08.2023 | [Improvement] PHP 8.1 Compatibility |
| 1.1 | 05.09.2022 | [Task] PHP 8.0 compatibility <br>[Tâche] Design Compatibility |
| 1.0.3 | | [Improvement] Compatibility with i-doit 1.16 |
| 1.0.2 | | [Bug] La catégorie Nagios ne peut pas être ouverte parmi les personnes<br>[Bug] Cliquer sur "Edit" après avoir sauvegardé un objet, navigue vers la liste des objets<br>[Bug] Cliquer sur "Edit" dans la liste des objets ne devrait être possible que si l'objet est sélectionné |
| 1.0.1 | | [Bug] La création des tables Nagios s'effectue dans le mauvais ordre |
| 1.0 | | [Change] Add-onize Nagios |