<!-- TRANSLATED by md-translate -->
# Daten abfragen mit Livestatus/NDOUtils

# Interroger les données avec Livestatus/NDOUtils

Für einen Soll-/Ist-Vergleich zwischen der Soll-Dokumentation in i-doit und dem Ist-Zustand, den eine Software für [Network Monitoring](../network-monitoring/index.md) liefert, bietet sich eine passende Schnittstelle an. Mit dieser lassen sich Daten aus dem Network Monitoring in i-doit anzeigen und auswerten.

Pour une comparaison théorique/réelle entre la documentation théorique dans i-doit et l'état réel fourni par un logiciel de [Network Monitoring](../network-monitoring/index.md), une interface appropriée est proposée. Celle-ci permet d'afficher et d'évaluer les données du Network Monitoring dans i-doit.

## Schnittstellen

## interfaces

Es werden die Schnittstellen

Les interfaces sont

* [NDOUtils](https://exchange.nagios.org/directory/Addons/Database-Backends/NDOUtils/details) (bzw. IDOUtils) sowie
* [MK Livestatus](https://mathias-kettner.de/checkmk_livestatus.html)

* [NDOUtils](https://exchange.nagios.org/directory/Addons/Database-Backends/NDOUtils/details) (ou IDOUtils) ainsi que
* [MK Livestatus](https://mathias-kettner.de/checkmk_livestatus.html)

für [Nagios](https://www.nagios.org/), [Check_MK](https://mathias-kettner.de/check_mk), [Icinga](https://www.icinga.org/) und kompatiblen Forks unterstützt.

pour [Nagios](https://www.nagios.org/), [Check_MK](https://mathias-kettner.de/check_mk), [Icinga](https://www.icinga.org/) et les forks compatibles sont pris en charge.

!!! success "Empfehlung"

! !! success "recommandation

```
MK Livestatus bietet eine sehr performante Anbindung an das Network Monitoring. Daher ist es den NDOUtils zu bevorzugen.
```

## Grundkonfiguration

## Configuration de base

Voraussetzung ist ein laufendes NDOUtils oder MK Livestatus auf dem Monitoring-System. In i-doit muss unter **Verwaltung → Import und Schnittstellen → Monitoring → Livestatus/NDO** der Zugriff auf eine der Schnittstellen konfiguriert werden.

Pour cela, il faut que NDOUtils ou MK Livestatus soit en cours d'exécution sur le système de monitoring. Dans i-doit, l'accès à l'une des interfaces doit être configuré sous **Administration → Importation et interfaces → Monitoring → Livestatus/NDO**.

[![datenabfragenmls-access](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/1-nm.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/1-nm.png)

[ ![datenabfragenmls-access](../../assets/images/fr/automatisation et intégration/network-monitoring/livestatus/1-nm.png)](../../assets/images/fr/automatisation et intégration/network-monitoring/livestatus/1-nm.png)

Je nach Typ der Schnittstelle muss nun entweder ein TCP/UNIX Socket oder eine Datenbankkonfiguration mit entsprechenden Zugriffsberechtigungen angegeben werden.

Selon le type d'interface, il faut maintenant indiquer soit un socket TCP/UNIX, soit une configuration de base de données avec les droits d'accès correspondants.

Beispiel NDOUtils:

Exemple NDOUtils :

[![datenabfragenmls-example](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/2-nm.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/2-nm.png)

[ ![data queriesmls-example](../../assets/images/fr/automatisation-et-intégration/network-monitoring/livestatus/2-nm.png)](../../assets/images/fr/automatisation-et-intégration/network-monitoring/livestatus/2-nm.png)

Beispiel MK Livestatus:

Exemple MK Livestatus :

[![datenabfragenmls-example](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/3-nm.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/3-nm.png)

[ ![data queriesmls-example](../../assets/images/fr/automatisation-et-intégration/network-monitoring/livestatus/3-nm.png)](../../assets/images/fr/automatisation-et-intégration/network-monitoring/livestatus/3-nm.png)

## Kategorien

## catégories

Um die Daten auszulesen muss über **[Datenstruktur bearbeiten](../../administration/verwaltung/datenstruktur/datenstruktur-bearbeiten.md)** den [Objekttypen](../../grundlagen/struktur-it-dokumentation.md) der [Kategorie-Ordner](../../grundlagen/struktur-it-dokumentation.md) **Monitoring** zugewiesen werden. In der Kategorie **Monitoring** muss jeweils für das [Objekt](../../grundlagen/struktur-it-dokumentation.md) der [Identifizierungsschlüssel](../../grundlagen/eindeutige-referenzierungen.md) für das Monitoring konfiguriert werden. Dazu kann entweder der Objekttitel, der Hostname mit oder ohne Domain Name oder ein frei gewählter Name genutzt werden. Dieser Eintrag bestimmt den Namen, der im Monitoring abgefragt wird.

Pour pouvoir lire les données, il faut attribuer le [dossier de catégorie](../../grundlagen/struktur-it-dokumentation.md) **Monitoring** aux [types d'objets](../../grundlagen/struktur-it-dokumentation.md) via **[traiter la structure de données](../../administration/administration/datenstruktur/datenstruktur-bearbeiten.md)**. Dans la catégorie **Monitoring**, il faut configurer pour chaque [objet](../../bases/structure-it-documentation.md) la [clé d'identification](../../bases/références-uniques.md) pour le monitoring. Pour cela, on peut utiliser soit le titre de l'objet, soit le nom d'hôte avec ou sans nom de domaine, soit un nom librement choisi. Cette entrée détermine le nom qui sera interrogé dans le monitoring.

Falls mehrere Monitoring-Instanzen konfiguriert sind, wird die entsprechende Instanz ausgewählt.

Si plusieurs instances de monitoring sont configurées, l'instance correspondante est sélectionnée.

[![datenabfragenmls-multiinstance](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/4-nm.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/4-nm.png)

[ ![data queriesmls-multiinstance](../../assets/images/fr/automatisation-et-intégration/network-monitoring/livestatus/4-nm.png)](../../assets/images/fr/automatisation-et-intégration/network-monitoring/livestatus/4-nm.png)

Wird die Kategorie aktiviert und der Eintrag abgespeichert, kann in der Kategorie **Livestatus** bzw. **NDO** der aktuelle Status abgefragt werden.

Si la catégorie est activée et l'entrée sauvegardée, le statut actuel peut être consulté dans la catégorie **Statut live** ou **NDO**.

[![datenabfragenmls-status](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/5-nm.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/5-nm.png)

[ ![data queriesmls-status](../../assets/images/fr/automatisation-et-intégration/network-monitoring/livestatus/5-nm.png)](../../assets/images/fr/automatisation-et-intégration/network-monitoring/livestatus/5-nm.png)

Zusätzlich kann in der [Objektlistenkonfiguration](../../grundlagen/objekt-liste/listenansicht-konfigurieren.md) eine Spalte für NDO oder Livestatus ausgewählt werden, so dass in den [Objekt-Liste](../../grundlagen/objekt-liste/index.md) der aktuelle Hoststatus mit angezeigt wird.

De plus, dans la [configuration de la liste d'objets](../../bases/liste d'objets/configuration de l'affichage de la liste.md), il est possible de sélectionner une colonne pour le statut NDO ou le statut en direct, de sorte que le statut actuel de l'hôte soit également affiché dans la [liste d'objets](../../bases/liste d'objets/index.md).

[![datenabfragenmls-objlist](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/6-nm.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/6-nm.png)

[ ![data queriesmls-objlist](../../assets/images/fr/automatisation-et-intégration/network-monitoring/livestatus/6-nm.png)](../../assets/images/fr/automatisation-et-intégration/network-monitoring/livestatus/6-nm.png)

## Logbucheinträge aus dem Monitoring

## Entrées du journal de suivi

Über die [Console](../cli/console/index.md) können Statusmeldungen aus dem Monitoring in das [Logbuch](../../grundlagen/logbuch.md) von i-doit übertragen werden. Dazu muss der entsprechende Handler [nagios-ndoutils](../cli/console/optionen-und-parameter-der-console.md#nagios-ndoutils) aufgerufen werden und es werden automatisch alle Statusänderungen, die sich seit dem letzten Lauf geändert haben, in das Logbuch übertragen.

La [Console](../cli/console/index.md) permet de transférer des messages d'état du monitoring dans le [Logbook](../../grundlagen/logbuch.md) d'i-doit. Pour cela, il faut appeler le gestionnaire correspondant [nagios-ndoutils](../cli/console/options-et-paramètres-de-la-console.md#nagios-ndoutils) et tous les changements d'état qui ont changé depuis la dernière exécution seront automatiquement transférés dans le journal.