<!-- TRANSLATED by md-translate -->
# CheckMK

# CheckMK

[![Logo von Check_MK](../assets/images/de/i-doit-pro-add-ons/checkmk/1-cmk.gif)](../assets/images/de/i-doit-pro-add-ons/checkmk/1-cmk.gif)

[ ![Logo de Check_MK](../assets/images/fr/i-doit-pro-add-ons/checkmk/1-cmk.gif)](../assets/images/fr/i-doit-pro-add-ons/checkmk/1-cmk.gif)

Check_MK ist eine Software für [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md), die aus i-doit heraus konfiguriert werden kann.

Check_MK est un logiciel de [Network Monitoring](../automatisation-et-intégration/network-monitoring/index.md) qui peut être configuré à partir d'i-doit.

Der Export beliefert Check_MK mit WATO-Konfigurationsdateien. WATO ist die Konfigurationsoberfläche von Check_MK, welche Änderungen an der Monitoring-Konfiguration verwaltet und deren Gültigkeit überprüft. Die Konfigurationen beinhalten IP-Adresse oder den DNS-Namen von zu exportierenden Hosts und/oder Cluster und deren Mitgliedern sowie zugeordnete Hostmerkmale (Tags) und verknüpfte Kontakte. Weitere Monitoring-spezifische Konfigurationen verbleiben in Check_MK.

L'exportation fournit à Check_MK des fichiers de configuration WATO. WATO est l'interface de configuration de Check_MK qui gère les modifications de la configuration de surveillance et vérifie leur validité. Les configurations comprennent l'adresse IP ou le nom DNS des hôtes et/ou des clusters à exporter et de leurs membres, ainsi que les caractéristiques d'hôte (balises) associées et les contacts liés. Les autres configurations spécifiques à la surveillance restent dans Check_MK.

Der Vorteil durch die Befüllung mit i-doit liegt darin, dass keine doppelte Datenpflege betrieben werden muss und die Hostmerkmale, die in Check_MK das Monitoring regelbasiert bestimmen, automatisiert durch CMDB-Informationen, wie beispielsweise den Standort eines Objektes, generiert werden können.

L'avantage du remplissage avec i-doit réside dans le fait qu'il n'est pas nécessaire de gérer deux fois les données et que les caractéristiques de l'hôte, qui déterminent le monitoring dans Check_MK sur la base de règles, peuvent être générées de manière automatisée par des informations CMDB, comme par exemple l'emplacement d'un objet.

!!! attention "Achtung!"

! ! attention "Attention !"

```
Schnittstelle unterstützt offiziell ausschließlich Check\_MK bis Version 1.4. Für alle neueren Versionen ist das [Check\_MK 2 Add-on](./checkmk2/index.md) vorgesehen.
Welche Funktionen/Bereiche der Schnittstelle auch mit Check\_MK Versionen > 1.4 fehlerfrei funktionieren ist daher unklar.
```

## Grundkonfiguration

## Configuration de base

In i-doit wird unter **Verwaltung →** **Schnittstellen → Monitoring → Exportkonfiguration** eine Konfiguration für Check_MK hinterlegt. Der lokale Pfad definiert einen absoluten oder relativen Pfad (beispielsweise zur Installation von i-doit) im Dateisystem, in dem die von i-doit erzeugte Konfiguration abgelegt werden soll. Der Link zum Monitoring-Tool gibt einen Basislink an, um aus i-doit heraus Links auf die Monitoring-Instanz zu generieren.

Dans i-doit, une configuration pour Check_MK est enregistrée sous **Administration →** **Interfaces → Monitoring → Configuration d'exportation**. Le chemin local définit un chemin absolu ou relatif (par exemple vers l'installation d'i-doit) dans le système de fichiers dans lequel la configuration générée par i-doit doit être stockée. Le lien vers l'outil de monitoring indique un lien de base pour générer des liens vers l'instance de monitoring à partir d'i-doit.

Nach der Auswahl von Check_MK als Typ öffnen sich weitere Konfigurationsparameter.

Après avoir sélectionné Check_MK comme type, d'autres paramètres de configuration s'ouvrent.

**Zugewiesene Kontakte exportieren** erlaubt es, die den entsprechenden [Objekten](../grundlagen/struktur-it-dokumentation.md) in dieser Rolle zugewiesene Kontakte in der exportierten Konfiguration des Objekts mit abzulegen. Hierbei wird der [Objekttitel](../grundlagen/eindeutige-referenzierungen.md) der Kontakte mit exportiert.

**Exporter les contacts attribués** permet d'inclure dans la configuration exportée de l'objet les contacts attribués aux [objets](../bases/structure-it-documentation.md) correspondants dans ce rôle. Le [titre de l'objet](../bases/références-uniques.md) des contacts est également exporté.

Im Freitextfeld **Site** kann eine Site definiert werden, an welche die exportierte Konfiguration weitergereicht wird. Hierfür muss **Multisite (Distributed Monitoring)** auf "Ja" gesetzt werden.

Dans le champ de texte libre **Site**, il est possible de définir un site auquel la configuration exportée sera transmise. Pour cela, **Multisite (Distributed Monitoring)** doit être défini sur "Oui".

Wenn man Hosts oder Ordner sperrt, kann man die exportierte Konfiguration in Check_MK nicht mehr bearbeiten. Dies ist sinnvoll, damit in Check_MK keine Änderungen durchgeführt werden, die nach dem nächsten Export dann wieder überschrieben werden würden.

Si l'on verrouille des hôtes ou des dossiers, il n'est plus possible de modifier la configuration exportée dans Check_MK. Cela est utile pour éviter que des modifications soient effectuées dans Check_MK, qui seraient alors écrasées après la prochaine exportation.

Als **Master Site** sind die Sites auswählbar, die über mehrere Exportkonfigurationen hinzugekommen sind. Gibt es nur eine Konfiguration, kann der Eintrag leer gelassen werden.[![Master Site](../assets/images/de/i-doit-pro-add-ons/checkmk/2-cmk.png)](../assets/images/de/i-doit-pro-add-ons/checkmk/2-cmk.png)

Comme **Master Site**, on peut sélectionner les sites qui ont été ajoutés par plusieurs configurations d'exportation. S'il n'y a qu'une seule configuration, l'entrée peut être laissée vide[ ![Master Site](../assets/images/fr/i-doit-pro-add-ons/checkmk/2-cmk.png)](../assets/images/fr/i-doit-pro-add-ons/checkmk/2-cmk.png)

## Kategorien

## catégories

Grundsätzlich muss den zu nutzenden [Objekttypen](../grundlagen/struktur-it-dokumentation.md) über [Datenstruktur bearbeiten](../administration/verwaltung/datenstruktur/datenstruktur-bearbeiten.md) der [Kategorie-Ordner](../grundlagen/struktur-it-dokumentation.md) **Check_Mk (Host)** zugeordnet werden.

En principe, le [dossier de catégorie](../grundlagen/struktur-it-dokumentation.md) **Check_Mk (Host)** doit être attribué aux [types d'objets](../grundlagen/struktur-it-dokumentation.md) à utiliser via [modifier la structure de données](../administration/administration/datenstruktur/datenstruktur-bearbeiten.md).

In der Kategorie **Check_MK (Host)** wird eine Export-Konfiguration ausgewählt und ein zu nutzender Hostname bzw. eine zu nutzende Hostadresse definiert. Zudem kann verhindert werden, dass die IP-Adresse exportiert wird, beispielsweise wenn diese per DHCP geliefert wurde und sich ändert.

Dans la catégorie **Check_MK (Host)**, on choisit une configuration d'exportation et on définit un nom d'hôte ou une adresse d'hôte à utiliser. En outre, il est possible d'empêcher l'exportation de l'adresse IP, par exemple si celle-ci a été fournie par DHCP et qu'elle change.

[![Check_MK (Host)](../assets/images/de/i-doit-pro-add-ons/checkmk/3-cmk.png)](../assets/images/de/i-doit-pro-add-ons/checkmk/3-cmk.png)

[ ![Check_MK (Host)](../assets/images/fr/i-doit-pro-add-ons/checkmk/3-cmk.png)](../assets/images/fr/i-doit-pro-add-ons/checkmk/3-cmk.png)

## Hostmerkmale

## Caractéristiques de l'hôte

Über die Kategorie **Hostmerkmale** werden diese zugewiesen oder angezeigt. Es wird unterschieden zwischen:

La catégorie **Caractéristiques de l'hôte** permet de les attribuer ou de les afficher. Une distinction est faite entre

* **Hostmerkmale**: einfache manuelle Zuweisung von Merkmalen (daher statisch)
* **CMDB Merkmale**: Merkmale, die durch ein [Attribut](../grundlagen/struktur-it-dokumentation.md) aus der CMDB ausgeprägt werden
* **Dynamische Merkmale**: Hostmerkmale, die durch Regelungen generiert werden

* **Caractéristiques hôte** : simple attribution manuelle de caractéristiques (donc statique)
* **CMDB caractéristiques** : caractéristiques qui sont exprimées par un [attribut](../bases/structure-it-documentation.md) de la CMDB
* **Caractéristiques dynamiques** : caractéristiques hôte générées par des règlements

Alle Arten von Hostmerkmalen werden unter **Extras → Check_MK** konfiguriert.

Tous les types de caractéristiques d'hôte sont configurés sous **Extras → Check_MK**.

Die statischen Hostmerkmale werden manuell gepflegt. Die Standardmerkmale von Check_MK werden bereits vorkonfiguriert ausgeliefert.

Les caractéristiques statiques de l'hôte sont gérées manuellement. Les caractéristiques standard de Check_MK sont livrées préconfigurées.

Die CMDB-Merkmale bedienen sich an Inhalten aus der CMDB. In der Konfiguration werden nur Objekttypen angezeigt, die den Kategorieordner **Check_MK** zugeordnet haben. Hier können einzelne Attribute ausgewählt werden. Es kann eine globale Definition eingerichtet werden, die für alle aufgelisteten Objekttypen ohne spezielle Konfiguration gültig ist, die die globale Definition ignoriert. Über **Generisches Standort-Merkmal exportieren** kann der Objekttitel des Standorts eines Objekts als Tag zu den Hostmerkmalen hinzugefügt werden.

Les caractéristiques CMDB se servent des contenus de la CMDB. Dans la configuration, seuls les types d'objets auxquels le dossier de catégorie **Check_MK** a été attribué sont affichés. Des attributs individuels peuvent être sélectionnés ici. Il est possible de configurer une définition globale valable pour tous les types d'objets listés sans configuration particulière, qui ignore la définition globale. Via **Exporter la caractéristique générique de l'emplacement**, le titre de l'emplacement d'un objet peut être ajouté comme balise aux caractéristiques de l'hôte.

Im folgenden Beispiel wird das Attribut **Betriebssystem** aus der CDMB in ein Hostmerkmal gewandelt.

Dans l'exemple suivant, l'attribut **Système d'exploitation** de la CDMB est converti en une caractéristique hôte.

[![Betriebssystem](../assets/images/de/i-doit-pro-add-ons/checkmk/4-cmk.png)](../assets/images/de/i-doit-pro-add-ons/checkmk/4-cmk.png)

[ ![Système d'exploitation](../assets/images/fr/i-doit-pro-add-ons/checkmk/4-cmk.png)](../assets/images/fr/i-doit-pro-add-ons/checkmk/4-cmk.png)

Der Server im Beispiel hat als Betriebssystem Debian 7.1 zugewiesen. Dieser Wert wird beim Export der Konfiguration zu dem entsprechenden Hostmerkmal übernommen.

Le serveur de l'exemple se voit attribuer Debian 7.1 comme système d'exploitation. Cette valeur est reprise lors de l'exportation de la configuration pour la caractéristique hôte correspondante.

Die dynamischen Merkmale funktionieren ähnlich, nur dass sie regelbasiert arbeiten. Im folgenden Beispiel wird der Standort eines Objektes ausgewertet und beim Export der Konfiguration die angegebenen Hostmerkmale mit übergeben. Steht ein Server im konkreten Beispiel unterhalb des Standortes München, bekommt er das Hostmerkmal WAN mitgegeben.

Les caractéristiques dynamiques fonctionnent de manière similaire, sauf qu'elles sont basées sur des règles. Dans l'exemple suivant, l'emplacement d'un objet est évalué et les caractéristiques d'hôte indiquées sont transmises lors de l'exportation de la configuration. Si, dans l'exemple concret, un serveur se trouve en dessous du site de Munich, il reçoit la caractéristique d'hôte WAN.

## Kategorie Hostmerkmale

## Catégorie Caractéristiques de l'hôte

In der Kategorie **Hostmerkmale** eines Objektes werden die dynamischen Hostmerkmale angezeigt und die manuellen, statischen Hostmerkmale zugewiesen.

Dans la catégorie **Caractéristiques hôte** d'un objet, les caractéristiques hôte dynamiques sont affichées et les caractéristiques hôte statiques manuelles sont attribuées.

## Kategorie Servicezuweisung

## Catégorie d'attribution de service

Analyse-Modul

Module d'analyse

Diese Kategorie ist nur bei installiertem Analyse-Modul nutzbar.

Cette catégorie n'est utilisable que si le module d'analyse est installé.

Die **Servicezuweisung** dient zur Zuweisung von installierter Software zu Service-Checks, die per [Livestatus](../automatisierung-und-integration/network-monitoring/daten-abfragen-mit-livestatus.md) ausgelesen werden. Dies wird genutzt, um im Analyse-Modul anhand von aus dem Monitoring gemeldeten Ausfällen zu errechnen, welche IT-Services betroffen sind. In der Kategorie wird quasi ein Monitoring Check mit einer auf dem System installierten Software "verheiratet".

L'attribution de services** sert à attribuer des logiciels installés à des contrôles de service qui sont lus par [Livestatus](../automatisation-et-intégration/network-monitoring/data-requests-avec-livestatus.md). Ceci est utilisé pour calculer dans le module d'analyse quels services informatiques sont concernés à l'aide des pannes signalées par la surveillance. Dans cette catégorie, on "marie" quasiment un contrôle de surveillance avec un logiciel installé sur le système.

Dadurch kann im Analyse-Modul ermittelt werden, welche IT-Services direkt oder indirekt von dem technischen Ausfall betroffen sind.

Il est ainsi possible de déterminer dans le module d'analyse quels services informatiques sont directement ou indirectement concernés par la panne technique.

## Export der Konfiguration

## Exportation de la configuration

Über **Extras → Check_MK → Check_MK Export** erreichbar kann manuell der Export der WATO-Konfigurationsdaten angestoßen werden.

L'exportation des données de configuration WATO peut être lancée manuellement via **Extras → Check_MK → Check_MK Export**.

Erzeugt werden Dateien im .mk-Format, die zur Check_MK-Instanz übertragen werden können. Zunächst werden diese im Verzeichnis abgelegt, welches in der Exportkonfiguration angegeben wurde. Zur einfachen Übertragung in die OMD Site werden die Daten zusätzlich als .zip und als Tarball gepackt.

Des fichiers au format .mk sont créés et peuvent être transférés vers l'instance Check_MK. Ils sont d'abord placés dans le répertoire indiqué dans la configuration d'exportation. Pour faciliter le transfert vers le site OMD, les données sont également compressées en .zip et en tarball.

Die Definition der Export-Struktur erlaubt es, die exportierten Objekte in einer Ordnerstruktur ins Check_MK zu übertragen. Hierbei kann gewählt werden, ob entweder die Standorte als Ordner angelegt werden sollen oder die Objekttypen.

La définition de la structure d'exportation permet de transférer les objets exportés dans une structure de dossiers dans le Check_MK. Il est possible de choisir si ce sont soit les sites qui doivent être créés en tant que dossiers, soit les types d'objets.

## Transfer Script

## Script de transfert

Im Installationsverzeichnis von i-doit befindet sich ein Shellscript namens checkmk_transfer.sh. Dieses wird mit den entsprechenden Zugriffen auf die OMD Site konfiguriert und überträgt dann automatisiert die i-doit-Konfiguration ins WATO.

Dans le répertoire d'installation d'i-doit se trouve un script shell appelé checkmk_transfer.sh. Celui-ci est configuré avec les accès correspondants au site OMD et transfère ensuite automatiquement la configuration i-doit dans le WATO.

Dazu steuert es die [i-doit Console](../automatisierung-und-integration/cli/index.md) an und baut eine SSH-Verbindung zur Check_MK-Instanz auf. Es überträgt die Daten in die OMD Site und entpackt diese automatisch. Anschließend signalisiert es WATO, dass Änderungen vorliegen.

Pour cela, il contrôle la [i-doit Console](../automatisation-et-intégration/cli/index.md) et établit une connexion SSH avec l'instance Check_MK. Il transfère les données dans le site OMD et le décompresse automatiquement. Il signale ensuite à WATO que des modifications ont été apportées.

Voraussetzung für die Übertragung per SSH ist Public-Key-Authentifizierung zwischen der i-doit-Instanz und der Check_MK OMD Site. Eine detaillierte Anleitung dazu liegt im Installationverzeichnis von i-doit unter docs/checkmk/README bzw. README.german.

La condition préalable à la transmission par SSH est l'authentification par clé publique entre l'instance i-doit et le site Check_MK OMD. Des instructions détaillées à ce sujet se trouvent dans le répertoire d'installation d'i-doit sous docs/checkmk/README ou README.german.

## Releases

## Releases

| Version | Date | Changelog |
| --- | --- | --- |
| 1.1 | 05.09.2022 | [Task] PHP 8.0 Compatibility  <br> [Task] Design Compatibility |
| 1.0.2 |     | [Improvement] Compatibility with i-doit 1.16 |
| 1.0.1 | 14.10.2019 | [Bug] List editing of Check_MK categories <br> [Bug] Create new category entries in the list editing category "Export Parameter (subcategory of Check_MK (Host))" <br>[Bug] Add more dynamic CMDB-tags <br> [Bug] Export of dynamic host tags with special characters |
| 1.0 | 17.12.2018 | [Improvement] Add-on is installable[Improvement] Add-on is uninstallable <br> [Improvement] Add-on is activatable <br> [Improvement] Add-on is deactivatable <br> [Change] Add-onize Check_MK |

| Version | Date | Changelog |
| --- | --- | --- |
| 1.1 | 05.09.2022 | [Tâche] Compatibilité PHP 8.0 <br> [Tâche] Compatibilité de conception |
| 1.0.2 | | [Improvement] Compatibility with i-doit 1.16 |
| 1.0.1 | 14.10.2019 | [Bug] Édition de listes de catégories Check_MK <br> [Bug] Création de nouvelles entrées de catégories dans la catégorie d'édition de listes "Export Parameter (sous-catégorie de Check_MK (Host))" <br>[Bug] Ajout de balises CMDB plus dynamiques <br> [Bug] Exportation de balises d'hôtes dynamiques avec des caractères spéciaux |
| 1.0 | 17.12.2018 | [Improvement] Add-on is installable[Improvement] Add-on is uninstallable <br> [Improvement] Add-on est activable <br> [Improvement] Add-on est désactivable <br> [Change] Add-onize Check_MK |