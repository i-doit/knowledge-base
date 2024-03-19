<!-- TRANSLATED by md-translate -->
# Add-on Packager

# Add-on Packager

Die Idee des Add-on Packagers ist es, dem Anwender die Möglichkeit zu eröffnen, eigene vollwertige [i-doit pro Add-ons](./index.md) zu bauen. Dabei wird der Add-on Packager komplett über die grafische Benutzeroberfläche von i-doit bedient und es werden keine Programmierkenntnisse benötigt.

L'idée de l'Add-on Packager est d'offrir à l'utilisateur la possibilité de construire ses propres [i-doit pro Add-ons](./index.md) à part entière. L'Add-on Packager est entièrement géré par l'interface graphique d'i-doit et ne nécessite aucune connaissance en programmation.

Es können die Strukturen, die der Anwender beispielsweise über [Datenstruktur bearbeiten](../administration/verwaltung/datenstruktur/datenstruktur-bearbeiten.md) oder den [Report Manager](../auswertungen/report-manager.md) erstellen kann, als Add-on paketiert und weitergeben werden.

Il est possible de packager et de transmettre les structures que l'utilisateur peut par exemple créer via [Modifier la structure de données](../administration/gestion/structure de données/modifier la structure de données.md) ou le [Gestionnaire de rapports](../évaluations/gestionnaire de rapports.md) en tant que module complémentaire.

## Allgemeine Hinweise

## Remarques générales

**Bitte installieren und nutzen Sie den Add-on Packager nicht auf einer Produktionsumgebung!**

**Veuillez ne pas installer et utiliser Add-on Packager sur un environnement de production!**

Das Paketieren von Add-ons ist ein Entwicklungsprozess. Produktions- und Entwicklunsgumgebungen sollten immer getrennt werden.
Unter anderem, um Produktionsdaten vor Beschädigung oder leichtfertiger Veränderung zu schützen.
Weiterhin müssen sind Produktionsdaten hinsichtlich des Datenschutzes besonders schützenswert.
Werden Add-ons auf Produktionsumgebungen gepackt, besteht die Gefahr der versehentlichen Weitergabe von internen oder persönlichen Daten.
Gehen sie dieses Risiko nicht ein.
Nutzen Sie entweder eine dedizierte Installation oder erstellen Sie eine Kopie Ihrer Produktionsumgebung, wenn Sie Daten von dort paketieren möchten.
Nutzen sie mindestens einen dedizierten Mandanten für ihre Entwicklungen.

Le packaging des add-ons est un processus de développement. Les environnements de production et de développement devraient toujours être séparés.
Entre autres, pour protéger les données de production de tout dommage ou de toute modification à la légère.
En outre, les données de production doivent être particulièrement protégées en termes de protection des données.
Si des modules complémentaires sont placés dans des environnements de production, il existe un risque de divulgation accidentelle de données internes ou personnelles.
Ne prenez pas ce risque.
Utilisez une installation dédiée ou créez une copie de votre environnement de production si vous souhaitez mettre en paquets des données à partir de celui-ci.
Utilisez au moins un client dédié pour vos développements.

Im Rahmen der Entwicklungspartnerschaft wird eine kostenfreie Entwicklungslizenz bereitgestellt. Diese kann für die Entwicklung von Add-ons genutzt werden.

Dans le cadre du partenariat de développement, une licence de développement gratuite est mise à disposition. Celle-ci peut être utilisée pour le développement d'add-ons.

## Installation und Lizenz

## Installation et licence

Der Add-on Packager wird wie jedes Add-on über das Admin Center installiert. Der Add-on Packager ist nicht lizenzpflichtig. Er kann allerdings nur mit der pro-Variante genutzt werden.

L'Add-on Packager s'installe comme tout add-on via l'Admin Center. L'Add-on Packager n'est pas soumis à une licence. Il ne peut toutefois être utilisé qu'avec la variante pro.

## Welche Strukturen können in ein Add-on gepackt werden?

## Quelles structures peuvent être emballées dans un add-on ?

Derzeit können folgende [Strukturen](../grundlagen/struktur-it-dokumentation.md) mit dem Add-on Packager in ein Add-on eingebunden werden:

Actuellement, les [structures](../bases/structure-it-documentation.md) suivantes peuvent être intégrées dans un add-on avec l'add-on Packager :

* Objekttypgruppen
* Objekttypen
* [Benutzerdefinierte Kategorien](../grundlagen/benutzerdefinierte-kategorien.md)
* Reports
* Dialog-Felder
* [Beziehungsarten](../grundlagen/objekt-beziehungen.md)

* Groupes de types d'objets
* Types d'objets
* [Catégories définies par l'utilisateur](../bases/catégories-definies-par-l'utilisateur.md)
* Rapports
* Champs de dialogue
* [Types de relations](../bases/objets-relations.md)

## Erstellen einer Add-on Strukturvorlage

## Création d'un modèle de structure add-on

Den Add-on Packager erreicht man wie nahezu alle Add-ons über das Extras-Menü.

Comme presque tous les add-ons, on accède à l'Add-on Packager via le menu Outils.

Anschließend navigiert man auf den Bereich Add-ons und erstellt dort über den Button "Neu" eine neue Strukturvorlage.

Ensuite, on navigue vers la zone Add-ons et on y crée un nouveau modèle de structure en cliquant sur le bouton "Nouveau".

## Basis Informationen

## Informations de base

[![Basis Informationen](../assets/images/de/i-doit-pro-add-ons/add-on-packager/1-aop.png)](../assets/images/de/i-doit-pro-add-ons/add-on-packager/1-aop.png)

[ ![Informations de base](../assets/images/fr/i-doit-pro-add-ons/add-on-packager/1-aop.png)](../assets/images/fr/i-doit-pro-add-ons/add-on-packager/1-aop.png)

In den Basis Informationen können mehrere Metadaten zu dem Add-on angegeben werden.

Dans les informations de base, plusieurs métadonnées peuvent être indiquées pour l'add-on.

| <!-- --> | <!-- --> |
|---|---|
| **Bezeichnung** | Name des Add-ons |
| **Hersteller** | Der Name Ihres Unternehmens oder Synonym |
| **Webseite** | Ein Link auf weitere Informationen zu dem Add-on(wird derzeit nicht für den Anwender angezeigt) |
| **Lizenzpflichtig** | Definiert, ob das Add-on lizenzpflichtig sein soll oder nicht. Lizenzen können nur über den i-doit Lizenzserver ausgestellt werden. Falls Sie ihr Add-on kommerziell verkaufen möchten, sprechen Sie bitte mit Ihrem Ansprechpartner der synetics GmbH. |
| **Identifikator** | Der Identifikator wird bei der Erstellung als Freitext angegeben. Wird er abgespeichert, wird er mit dem Herstellernamen kombiniert, um eine Eindeutigkeit zu gewährleisten.Der Add-on Identifikator ist für die Lizenzierung, aber auch das spätere Update eines Add-ons wichtig und sollte eindeutig und unveränderlich sein.Bitte Verwenden Sie keine Leerzeichen oder Sonderzeichen. |
| **Benötigt mindestens i-doit Version** | Standardmäßig ist hier i-doit Version 1.11 eingetragen. Dieser Wert stellt die aktuelle Mindestkompatibilität dar und muss im Normalfall nicht verändert werden. |
| **Erstellt mit Add-on Packager** | Gibt die verwendete Version des Add-on Packagers an, um Kompatibilität zu gewährleisten. |
| **Beschreibung** | Freitext-beschreibung des Add-ons |

| <!-- --> | <!-- --> |
|---|---|
| **Dénomination** | Nom de l'add-on |
| **Fabricant** | Le nom de votre entreprise ou un synonyme |
| **Site web** | Un lien vers des informations supplémentaires sur l'add-on(n'est pas actuellement affiché pour l'utilisateur) |
| **Licence obligatoire** | Définit si l'add-on doit être soumis à une licence ou non. Les licences ne peuvent être émises que par le serveur de licences i-doit. Si vous souhaitez vendre votre add-on à des fins commerciales, veuillez en parler avec votre interlocuteur de synetics GmbH. |
| **Identificateur** | L'identificateur est indiqué comme texte libre lors de la création. S'il est enregistré, il est combiné avec le nom du fabricant afin de garantir l'unicité.L'identifiant de l'add-on est important pour l'octroi de la licence, mais aussi pour la mise à jour ultérieure d'un add-on et doit être unique et non modifiable.Veuillez ne pas utiliser d'espaces ou de caractères spéciaux. |
| **Requiert au moins la version i-doit** | Par défaut, la version 1.11 d'i-doit est saisie ici. Cette valeur représente la compatibilité minimale actuelle et ne doit normalement pas être modifiée. |
| **Créé avec Add-on Packager** | Indique la version de l'Add-on Packager utilisée pour assurer la compatibilité. |
| **Description** | Description en texte libre de l'add-on |

## Eingebundene Ressourcen

## Ressources intégrées

[![Eingebundene Ressourcen](../assets/images/de/i-doit-pro-add-ons/add-on-packager/2-aop.png)](../assets/images/de/i-doit-pro-add-ons/add-on-packager/2-aop.png)

[ ![Ressources intégrées](../assets/images/fr/i-doit-pro-add-ons/add-on-packager/2-aop.png)](../assets/images/fr/i-doit-pro-add-ons/add-on-packager/2-aop.png)

Im Ressourcen Bereich der Strukturvorlage können die verfügbaren Strukturen ausgewählt werden. Diese sind im folgenden aufgeschlüsselt.

Dans la section Ressources du modèle de structure, les structures disponibles peuvent être sélectionnées. Celles-ci sont détaillées ci-dessous.

<!---- TODO
[![Quick Configuration Wizard](../assets/images/de/i-doit-pro-add-ons/add-on-packager/3-aop.png)](../assets/images/de/i-doit-pro-add-ons/add-on-packager/3-aop.png)
-->

Über [Datenstruktur bearbeiten](../administration/verwaltung/datenstruktur/datenstruktur-bearbeiten.md) können Objekttyp Gruppen und Objekttypen angelegt und zugewiesen werden.

Avec [Modifier la structure de données](../administration/gestion/structure de données/modifier la structure de données.md), il est possible de créer et d'attribuer des groupes de types d'objets et des types d'objets.

## Objekttypgruppen

## Groupes de types d'objets

[![Objekttypgruppen](../assets/images/de/i-doit-pro-add-ons/add-on-packager/4-aop.png)](../assets/images/de/i-doit-pro-add-ons/add-on-packager/4-aop.png)

[ ![Groupes de types d'objets](../assets/images/fr/i-doit-pro-add-ons/add-on-packager/4-aop.png)](../assets/images/fr/i-doit-pro-add-ons/add-on-packager/4-aop.png)

Objekttypgruppen sind die in der Hauptnavigation verankerten Gruppierungen.

Les groupes de types d'objets sont les regroupements ancrés dans la navigation principale.

Wird eine Objekttypgruppe ausgewählt, so wird auch ausschließlich die Gruppe und die Zuordnung der Objekttypen zur Objekttypgruppe mit übernommen. Es werden nicht die Objekttypen als solche mit übernommen, diese müssen explizit im nächsten Punkt ausgewählt werden.

Si un groupe de types d'objets est sélectionné, seul le groupe et l'attribution des types d'objets au groupe de types d'objets sont repris. Les types d'objets ne sont pas repris en tant que tels, ils doivent être explicitement sélectionnés au point suivant.

## Objekttypen

## Types d'objets

[![Objekttypen](../assets/images/de/i-doit-pro-add-ons/add-on-packager/5-aop.png)](../assets/images/de/i-doit-pro-add-ons/add-on-packager/5-aop.png)

[ ![Types d'objets](../assets/images/fr/i-doit-pro-add-ons/add-on-packager/5-aop.png)](../assets/images/fr/i-doit-pro-add-ons/add-on-packager/5-aop.png)

Die Objekttypen sind die logische Typisierung der Objekte. Standardmäßig werden eine Menge Objekttypen ausgeliefert (Server, Clients, …).

Les types d'objets sont le typage logique des objets. Par défaut, un grand nombre de types d'objets sont livrés (serveurs, clients, ...).

Hier können nur die eigens erstellten Objekttypen ausgewählt werden. Mit den ausgewählten Objekttypen wird auch die Zuordnung der Kategorien in das Add-on übernommen, allerdings nicht die Kategorien als solche. Diese müssen explizit im nächsten Punkt ausgewählt werden.

Ici, seuls les types d'objets créés spécialement peuvent être sélectionnés. Avec les types d'objets sélectionnés, l'attribution des catégories est également reprise dans l'add-on, mais pas les catégories en tant que telles. Celles-ci doivent être explicitement sélectionnées au point suivant.

## Kategorien

## catégories

Kategorien sind logischen Klammern um die einzelnen Attribute.

Les catégories sont des parenthèses logiques autour des différents attributs.

[![Kategorien](../assets/images/de/i-doit-pro-add-ons/add-on-packager/6-aop.png)](../assets/images/de/i-doit-pro-add-ons/add-on-packager/6-aop.png)

[ ![Catégories](../assets/images/fr/i-doit-pro-add-ons/add-on-packager/6-aop.png)](../assets/images/fr/i-doit-pro-add-ons/add-on-packager/6-aop.png)

Eigene Kategorien können über die Verwaltung im Bereich "Benutzerdefinierte Kategorien" angelegt werden.

Il est possible de créer ses propres catégories via l'administration dans la section "Catégories personnalisées".

Es können nur benutzerdefinierte Kategorien ausgewählt werden.

Seules les catégories définies par l'utilisateur peuvent être sélectionnées.

## Reports

## Rapports

[![Reports](../assets/images/de/i-doit-pro-add-ons/add-on-packager/7-aop.png)](../assets/images/de/i-doit-pro-add-ons/add-on-packager/7-aop.png)

[ ![Reports](../assets/images/fr/i-doit-pro-add-ons/add-on-packager/7-aop.png)](../assets/images/fr/i-doit-pro-add-ons/add-on-packager/7-aop.png)

Hier können Reporte aus dem Report Manager ausgewählt werden.

Les rapports peuvent être sélectionnés ici à partir du Report Manager.

## Dialog+-Felder

## Champs de dialogue+

[![Dialog+-Felder](../assets/images/de/i-doit-pro-add-ons/add-on-packager/8-aop.png)](../assets/images/de/i-doit-pro-add-ons/add-on-packager/8-aop.png)

[ ![Dialogue+-Champs](../assets/images/fr/i-doit-pro-add-ons/add-on-packager/8-aop.png)](../assets/images/fr/i-doit-pro-add-ons/add-on-packager/8-aop.png)

Dialog+ Felder sind solche Felder, die dem Anwender ein Drop-Down mit festen Werten anbieten, aber die Möglichkeit geben, eigene Inhalte zu ergänzen.

Les champs Dialog+ sont de tels champs qui offrent à l'utilisateur une liste déroulante avec des valeurs fixes, mais qui lui permettent d'ajouter son propre contenu.

Habe ich in einem Dialog+ Feld eigene Werte angelegt, so kann ich hier das Feld auswählen, damit die Werte mit dem Add-on ausgeliefert werden..

Si j'ai créé mes propres valeurs dans un champ Dialog+, je peux sélectionner ici le champ pour que les valeurs soient livrées avec l'add-on...

## Beziehungsarten

## Types de relations

[![Beziehungsarten](../assets/images/de/i-doit-pro-add-ons/add-on-packager/9-aop.png)](../assets/images/de/i-doit-pro-add-ons/add-on-packager/9-aop.png)

[ ![Types de relations](../assets/images/fr/i-doit-pro-add-ons/add-on-packager/9-aop.png)](../assets/images/fr/i-doit-pro-add-ons/add-on-packager/9-aop.png)

Beziehungsarten können über die Verwaltung angelegt oder bearbeitet werden.

Les types de relation peuvent être créés ou modifiés via l'administration.

An dieser Stelle können die Beziehungsarten als solches samt ihren Eigenschaften ausgewählt werden, um sie mit dem Add-on auszuliefern.

A ce stade, les types de liens peuvent être sélectionnés en tant que tels, avec leurs propriétés, pour être livrés avec l'add-on.

## Erstellen der fertigen Add-on ZIP-Datei

## Création du fichier ZIP du module complémentaire terminé

[![Paket erstellen](../assets/images/de/i-doit-pro-add-ons/add-on-packager/10-aop.png)](../assets/images/de/i-doit-pro-add-ons/add-on-packager/10-aop.png)

[ ![Créer un paquet](../assets/images/fr/i-doit-pro-add-ons/add-on-packager/10-aop.png)](../assets/images/fr/i-doit-pro-add-ons/add-on-packager/10-aop.png)

Im unteren Bereich kann nun das Add-on als ZIP-Datei erstellt werden.

Dans la partie inférieure, l'add-on peut maintenant être créé sous forme de fichier ZIP.

Hier muss eine Release-Version angegeben werden, die auf Semantic Versioning (bspw. 1.2.5) basieren muss.

Il faut indiquer ici une version qui doit être basée sur le Semantic Versioning (par ex. 1.2.5).

Ebenfalls zu jeder Version gibt es einen Changelog Eintrag, der ergänzt wird sowie ein Releasedatum. Wird das Paket erstellt, landet man automatisch auf der Paketseite des Add-ons.

Pour chaque version, il y a également un changelog qui est complété et une date de sortie. Si le paquet est créé, on arrive automatiquement sur la page du paquet de l'add-on.

## Pakete

## Paquets

[![Paketseite](../assets/images/de/i-doit-pro-add-ons/add-on-packager/11-aop.png)](../assets/images/de/i-doit-pro-add-ons/add-on-packager/11-aop.png)

[ ![Page du paquet](../assets/images/fr/i-doit-pro-add-ons/add-on-packager/11-aop.png)](../assets/images/fr/i-doit-pro-add-ons/add-on-packager/11-aop.png)

Die Pakete sind die fertigen ZIP Dateien der Add-ons. Jede Version jedes Add-ons bekommt eine eigene Paketseite, auf der das Add-on als ZIP Datei heruntergeladen werden kann.

Les paquets sont les fichiers ZIP prêts à l'emploi des add-ons. Chaque version de chaque add-on reçoit sa propre page de paquet, sur laquelle l'add-on peut être téléchargé sous forme de fichier ZIP.

[![Pakete](../assets/images/de/i-doit-pro-add-ons/add-on-packager/12-aop.png)](../assets/images/de/i-doit-pro-add-ons/add-on-packager/12-aop.png)

[ ![Paquets](../assets/images/fr/i-doit-pro-add-ons/add-on-packager/12-aop.png)](../assets/images/fr/i-doit-pro-add-ons/add-on-packager/12-aop.png)

## Releases

## Releases

| Version | Datum | Changelog |
| --- | --- | --- |
| 1.3 | 07.11.2023 | [Bug] Custom Object types are not replaced in report conditions<br/>[Bug] HTTP 500 while Add-on uninstall via Admin Center |
| 1.2.1 | 22.08.2023 | [Bug] The content buttons do not work in some browsers<br>[Bug] The User is not able to download the add on zip file |
| 1.2 | 05.09.2022 | [Task] PHP 8.0 Compatibility <br/> [Task] Design Compatibility |
| 1.1.1 | 27.07.2022 | [Bug] Packaging does not work with custom category dialog+ fields |
| 1.1 | 21.02.2022 | [Improvement] Add Report-Manager categories to the Add-On <br/> [Bug] Error message when creating a package with Dialog Plus Listener resources "Unknown column '*__sort' in 'field list'" <br/> [Bug] CSV import files are not being copied correctly |
| 1.0.1 | 04.05.2020 | [Bug] Packages with custom multi value categories become single value categories on import |
| 1.0 | 21.10.2019 | `Initial release` |

| version | date | changelog |
| --- | --- | --- |
| 1.3 | 07.11.2023 | [Bug] Les types d'objets personnalisés ne sont pas remplacés dans les conditions de rapport<br/>[Bug] HTTP 500 while Add-on uninstall via Admin Center |
| 1.2.1 | 22.08.2023 | [Bug] Les boutons de contenu ne fonctionnent pas dans certains navigateurs<br>[Bug] L'utilisateur ne peut pas télécharger le fichier add on zip |
| 1.2 | 05.09.2022 | [Tâche] Compatibilité PHP 8.0 <br/> [Tâche] Compatibilité de conception |
| 1.1.1 | 27.07.2022 | [Bug] Le packaging ne fonctionne pas avec les champs personnalisés du dialogue de catégorie+ |
| 1.1 | 21.02.2022 | [Improvement] Add Report-Manager categories to the Add-On <br/> [Bug] Message d'erreur lors de la création d'un package avec Dialog Plus Listener resources "Unknown column '*__sort' in 'field list'" <br/> [Bug] Les fichiers CSV import ne sont pas copiés correctement |
| 1.0.1 | 04.05.2020 | [Bug] Les paquets avec des catégories multi-valeurs personnalisées deviennent des catégories à valeur unique à l'importation |
| 1.0 | 21.10.2019 | `Libération initiale` |