<!-- TRANSLATED by md-translate -->
# Report-Manager

# Gestionnaire de rapports

Das Berichtswesen ist ein geeignetes Mittel, um Daten zu verdichten, aufzubereiten und an Dritte weiterzugeben. _i-doit_ verfügt daher über einen Report Manager, der vollumfänglich Daten aus der [IT-Dokumentation](../glossar.md) verarbeiten kann.

Le reporting est un moyen approprié pour condenser les données, les préparer et les transmettre à des tiers. _i-doit_ dispose donc d'un gestionnaire de rapports qui peut traiter intégralement les données de la [documentation informatique](../glossaire.md).

## Überblick

## vue d'ensemble

Der Report Manager ist über die Hauptnavigationsleiste unter **Extras → Report Manager** zu erreichen. Im Navigationsbaum auf der linken Seite erscheinen die Punkte **Reports**, **Online Repository** und **Views**, auf die im folgenden eingegangen wird. Sollte der Report Manager bzw. die Punkte im Navigationsbaum nicht oder nur unvollständig erscheinen, liegt das an fehlenden Berechtigungen.

Le Report Manager est accessible via la barre de navigation principale sous **Extras → Report Manager**. Dans l'arbre de navigation sur la gauche apparaissent les points **Reports**, **Online Repository** et **Views**, qui sont abordés ci-après. Si le Report Manager ou les points de l'arbre de navigation n'apparaissent pas ou seulement de manière incomplète, cela est dû à un manque d'autorisations.

[![Ueberblick](../assets/images/de/auswertungen/report-manager/1-rm.png)](../assets/images/de/auswertungen/report-manager/1-rm.png)

[ ![Aperçu](../assets/images/fr/exploitations/report-manager/1-rm.png)](../assets/images/fr/exploitations/report-manager/1-rm.png)

## Report auswerten

## Évaluer le rapport

Die selbst erstellten Reports befinden sich unter dem Punkt **Reports**. Nach dem [Setup von _i-doit_](../installation/manuelle-installation/setup.md) befinden sich daher noch keine Reports in diesem Bereich.

Les rapports que vous avez créés vous-même se trouvent sous le point **Reports**. Après le [setup de _i-doit_](../installation/manuelle-installation/setup.md), il n'y a donc pas encore de rapports dans cette zone.

[![report-auswerten](../assets/images/de/auswertungen/report-manager/2-rm.png)](../assets/images/de/auswertungen/report-manager/2-rm.png)

[ ![Rapport-évaluation](../assets/images/fr/évaluations/report-manager/2-rm.png)](../assets/images/fr/évaluations/report-manager/2-rm.png)

Beim Klicken auf einen Report in der Liste, wird dieser mit den aktuellen Daten ausgeführt. Die Ergebnisliste eines Reports ist in _i-doit_ tabellarisch aufgebaut. Reports fokussieren sich stets auf Objekte und deren Attribute. Pro Ergebniszeile steht daher ein Hauptobjekt im Fokus, zu dem beliebige Attribute wie Beziehungen zu anderen Objekten angegeben sein können. Durch einen Klick auf eine Zeile wird das dementsprechende Objekt geladen.

En cliquant sur un rapport dans la liste, celui-ci est exécuté avec les données actuelles. La liste des résultats d'un rapport est structurée sous forme de tableau dans _i-doit_. Les rapports se concentrent toujours sur les objets et leurs attributs. Pour chaque ligne de résultat, l'accent est donc mis sur un objet principal, pour lequel des attributs quelconques, tels que des relations avec d'autres objets, peuvent être indiqués. Un clic sur une ligne permet de charger l'objet correspondant.

[![report-auswerten2](../assets/images/de/auswertungen/report-manager/3-rm.png)](../assets/images/de/auswertungen/report-manager/3-rm.png)

[ ![report-exploitation2](../assets/images/fr/exploitations/report-manager/3-rm.png)](../assets/images/fr/exploitations/report-manager/3-rm.png)

Die Tabelle bietet verschiedene Funktionalitäten (Spaltensortierung, nach einer Spalte filtern, Pagination). Weiterhin lässt sich ein Report in verschiedene Formate exportieren (Klartext, CSV, XML und PDF). Für die Weiterverarbeitung mit einem Tabellenkalkulationsprogramm o. ä. bietet sich der Export ins CSV-Format an.

Le tableau offre différentes fonctionnalités (tri des colonnes, filtrage sur une colonne, pagination). En outre, un rapport peut être exporté dans différents formats (texte brut, CSV, XML et PDF). L'exportation au format CSV est idéale pour le traitement ultérieur avec un tableur ou un logiciel similaire.

Aus einem Report lässt sich ein Objekt vom Typ **Objektgruppe** generieren. Deren gleichnamige Kategorie sind die Objekte aus dem Report statisch zugeordnet. Alternativ ist es möglich, eine Objekt vom Typ **Objektgruppe** anzulegen, deren Objektzuweisung dynamisch sind. Dazu wählt man in der Kategorie **Typ** die entsprechende Einstellung aus und wählt einen Report. Von nun an enthält diese Objektgruppe immer die aktuelle Liste an Objekten, die der zugeordnetete Report als Ergebnis liefert. Dies geschieht also zur Laufzeit.

Un objet de type **groupe d'objets** peut être généré à partir d'un rapport. Les objets du rapport sont attribués de manière statique à la catégorie du même nom. Il est également possible de créer un objet de type **groupe d'objets**, dont l'attribution des objets est dynamique. Pour cela, il suffit de sélectionner le paramètre correspondant dans la catégorie **Type** et de choisir un rapport. Dès lors, ce groupe d'objets contient toujours la liste actuelle d'objets que le rapport attribué fournit comme résultat. Cela se fait donc au moment de l'exécution.

## Reports kategorisieren

## Catégoriser les rapports

Reports können kategorisiert werden. Standardmäßig werden sie der Kategorie **Global** zugeordnet, die standardmäßig zur Verfügung steht und nicht gelöscht werden kann. Der Vorteil der Kategorisierung liegt im Berechtigungskonzept: Pro Katagorie kann angegeben werden, wer darauf zugreifen darf. Befindet man sich auf der Seite Reports, können über den Punkt **Kategorien** neue Kategorien erstellt oder bestehende bearbeitet werden. Hilfreich hierbei ist das optionale Beschreibungsfeld.

Les rapports peuvent être catégorisés. Par défaut, ils sont attribués à la catégorie **Global**, qui est disponible par défaut et ne peut pas être supprimée. L'avantage de la catégorisation réside dans le concept d'autorisation : pour chaque catégorie, il est possible d'indiquer qui peut y avoir accès. Si l'on se trouve sur la page Rapports, le point **Catégories** permet de créer de nouvelles catégories ou de modifier les catégories existantes. Le champ de description optionnel est ici très utile.

[![reports-kategorisieren](../assets/images/de/auswertungen/report-manager/4-rm.png)](../assets/images/de/auswertungen/report-manager/4-rm.png)

[ ![catégoriser les rapports](../assets/images/fr/évaluations/report-manager/4-rm.png)](../assets/images/fr/évaluations/report-manager/4-rm.png)

!!! info "Hinweis"

! !! info "Note"

```
Sollte es nicht möglich sein, Report-Kategorien zu erstellen und/oder zu bearbeiten, ist es ratsam, die Berechtigungen hierfür zu überprüfen und sicherzustellen, dass der aktuell eingeloggte User über die Berechtigungen hierfür verfügt.
```

## Report erstellen oder bearbeiten

## Créer ou modifier un rapport

Reports können kopiert werden. Hierzu markiert man einen Report und klickt auf den Button **Duplizieren**. Gelöscht wird ein Report über den Button **Purge**. Dieser Schritt ist unwiderruflich.

Les rapports peuvent être copiés. Pour cela, il faut sélectionner un rapport et cliquer sur le bouton **Dupliquer**. Pour supprimer un rapport, il faut cliquer sur le bouton **Purge**. Cette étape est irréversible.

[![reports-erstellen-oder-bearbeiten](../assets/images/de/auswertungen/report-manager/5-rm.png)](../assets/images/de/auswertungen/report-manager/5-rm.png)

[ ![création-ou modification-de-rapports](../assets/images/fr/évaluations/report-manager/5-rm.png)](../assets/images/fr/évaluations/report-manager/5-rm.png)

Zum Erstellen eines Reports bieten sich zwei Arten an, die im folgenden näher erläutert werden.

Il existe deux types de rapports, expliqués ci-dessous.

### Abfrage-Editor

### Éditeur de requêtes

Der Abfgrage-Editor bietet eine grafische Oberfläche, um einen neuen Report zu erstellen oder einen bestehenden zu bearbeiten. Er wird über den Button **Neu** aufgerufen. Alternativ findet man neben diesem Button in dem Drop-Down-Feld den Button **Abfrage-Editor**. Soll ein bestehender Report bearbeitet werden, muss die Checkbox neben dem Report ausgewählt und einer der oben genannten Buttons geklickt werden.

L'éditeur de graphiques offre une interface graphique permettant de créer un nouveau rapport ou d'en modifier un existant. Il est accessible via le bouton **Nouveau**. On trouve également à côté de ce bouton, dans le champ déroulant, le bouton **Éditeur de requêtes**. Si un rapport existant doit être édité, il faut sélectionner la case à cocher à côté du rapport et cliquer sur l'un des boutons mentionnés ci-dessus.

[![abfrage-editor](../assets/images/de/auswertungen/report-manager/6-rm.png)](../assets/images/de/auswertungen/report-manager/6-rm.png)

[ ![éditeur de requêtes](../assets/images/fr/évaluations/report-manager/6-rm.png)](../assets/images/fr/évaluations/report-manager/6-rm.png)

Essentiell ist der Titel und die Kategorie. Zudem ist es oftmals hilfreich eine kurze Beschreibung zu hinterlegen.

Le titre et la catégorie sont essentiels. En outre, il est souvent utile d'ajouter une brève description.

Über den Button **Prüfen** kann der Report getestet werden. In einem Popup werden maximal 25 Ergebnisse präsentiert.

Le rapport peut être testé en cliquant sur le bouton **Vérifier**. Un maximum de 25 résultats sont présentés dans une popup.

#### Erweiterte Optionen

#### Options avancées

[![erweiterte-optionen](../assets/images/de/auswertungen/report-manager/7-rm.png)](../assets/images/de/auswertungen/report-manager/7-rm.png)

[ ![options avancées](../assets/images/fr/évaluations/report-manager/7-rm.png)](../assets/images/fr/évaluations/report-manager/7-rm.png)

Es gibt folgende erweiterte Optionen.

Les options avancées suivantes sont disponibles.

| Option | Beschreibung |
| --- | --- |
| **Zeige HTML** | Wenn die Option auf Ja gesetzt ist wird in Reports auch HTML angezeigt. |
| **Gruppierte Multivalue-Darstellung** | Diese Option gruppiert Multi-Value Einträge zu einem Objekt untereinander |
| **Objekte mit leeren Verknüpfungen anzeigen?** | Diese Option bezieht sich auf Unterabfragen zu Objekten, die in Beziehung stehen. Sollte das Attribut, das diese Beziehung repräsentiert, leer sein, d. h., es steht kein Objekt in Beziehung, wird das Ergebnis leer sein, wenn die Option auf **Nein** steht. Andernfalls bleibt die Zelle im Ergebnis leer. |
| **Beziehungsobjekte mit ausgeben?** | Hinter jeder Beziehung zwischen zwei Objekten steht ein Beziehungsobjekt. Wenn diese Option auf **Ja** steht, wird das Beziehungsobjekt ebenfalls im Ergebnis angezeigt. |
| **Sortierung** | Nach einigen ausgewählten Attributen kann automatisch sortiert werden, sobald der Report ausgeführt wird. Mit dieser Option lässt sich zusätzlich einstellen, ob die Sortierung auf- oder absteigend geschieht. |
| **Statusfilter für Multi-Value Kategorien** | Sollen archivierte, gelöschte, normale, unfertige oder Alle Multi-Value Einträge aus Kategorien angezeigt werden? |

| option | description |
| --- | --- |
| Si l'option est définie sur Oui, le HTML est également affiché dans les rapports. |
| **Représentation multivaluée groupée** | Cette option regroupe les entrées multi-valeurs d'un objet les unes sous les autres |
| **Afficher les objets avec des liens vides?** | Cette option s'applique aux sous-requêtes sur les objets qui sont en relation. Si l'attribut représentant cette relation est vide, c'est-à-dire qu'il n'y a pas d'objet en relation, le résultat sera vide si l'option est définie sur **Non**. Dans le cas contraire, la cellule du résultat reste vide. |
| Derrière chaque relation entre deux objets se trouve un objet de relation. Si cette option est réglée sur **Oui**, l'objet de relation est également affiché dans le résultat. |
| **Tri** | Certains attributs sélectionnés peuvent être triés automatiquement lors de l'exécution du rapport. Cette option permet en outre de définir si le tri doit être effectué dans l'ordre croissant ou décroissant. |
| Faut-il afficher les entrées archivées, supprimées, normales, inachevées ou toutes les entrées multi-valeurs des catégories ? |

#### Ausgabe

#### Édition

[![ausgabe](../assets/images/de/auswertungen/report-manager/8-rm.png)](../assets/images/de/auswertungen/report-manager/8-rm.png)

[ ![sortie](../assets/images/fr/évaluations/report-manager/8-rm.png)](../assets/images/fr/évaluations/report-manager/8-rm.png)

Im Bereich **Ausgabe** hat man die Möglichkeit, die Spalten der Ergebnisliste zu definieren. Dazu wählt man die gewünschten Attribute aus den drei Kategorietypen **Global**, **Spezifisch** und **Benutzerdefiniert** aus. Jedes Attribut definiert eine Spalte. Die Reihenfolge der Spalten lässt sich per Drag'n'Drop festlegen.

Dans la zone **Sortie**, on a la possibilité de définir les colonnes de la liste de résultats. Pour ce faire, on choisit les attributs souhaités parmi les trois types de catégories **Global**, **Spécifique** et **Défini par l'utilisateur**. Chaque attribut définit une colonne. L'ordre des colonnes peut être défini par glisser-déposer.

Nach einigen ausgewählten Attributen kann automatisch sortiert werden, sobald der Report ausgeführt wird. Dazu dient die Radiobox neben dem ausgewählten Attribut. Ist kein Attribut ausgewählt, wird nach der Objekt-ID sortiert.

Certains attributs sélectionnés peuvent être triés automatiquement lors de l'exécution du rapport. La case radio à côté de l'attribut sélectionné sert à cela. Si aucun attribut n'est sélectionné, le tri s'effectue selon l'ID de l'objet.

Wird als Attribut eine Objektreferenzierung ausgewählt, können über die eingeblendete Lupe weitere Attribute des in Beziehung stehenden Objekts ausgewählt werden. Dazu öffnet sich beim Klick auf die Lupe eine weitere Abfrage nach dem oben beschriebenen Prinzip. Diese Unterabfragen können selbstverständlich wiederum zu Unterabfragen gemacht werden (rekursiv).

Si une référence d'objet est sélectionnée comme attribut, il est possible de sélectionner d'autres attributs de l'objet en relation à l'aide de la loupe qui s'affiche. Pour ce faire, une autre requête s'ouvre en cliquant sur la loupe, selon le principe décrit ci-dessus. Ces sous-requêtes peuvent bien entendu être transformées à leur tour en sous-requêtes (récursives).

#### Bedingungen

#### Conditions

[![bedingungen](../assets/images/de/auswertungen/report-manager/9-rm.png)](../assets/images/de/auswertungen/report-manager/9-rm.png)

[ ![conditions](../assets/images/fr/évaluations/report-manager/9-rm.png)](../assets/images/fr/évaluations/report-manager/9-rm.png)

Über den Punkt **Bedingungen** können gewünschte Konditionen angegeben werden. Um auf ein bestimmtes Attribut zu prüfen, wird dieses mit der passenden Kategorie ausgewählt. Daraufhin wird die logische Abfrage konstruiert: Welchem Wert muss das Attribut entsprechen (oder nicht)? Typische Angaben wie =, !=, <, > usw. sind hier möglich und richten sich nach dem Feldtypen des Attributs. Ebenfalls richtet sich die Auswahl nach dem ausgewählten Attribut.

Le point **Conditions** permet d'indiquer les conditions souhaitées. Pour vérifier un attribut spécifique, celui-ci est sélectionné avec la catégorie appropriée. La requête logique est ensuite construite : À quelle valeur l'attribut doit-il correspondre (ou non) ? Des indications typiques telles que =, !=, <, >, etc. sont possibles ici et dépendent du type de champ de l'attribut. La sélection dépend également de l'attribut sélectionné.

Einfache Verschachtelungen mit und oder oder sind möglich, indem über den **+**-Button und Konditionsblöcke weitere Bedingungen angegeben werden. Über den **-**-Button werden Bedingungen entfernt. Leere Konditionsblöcke werden automatisch entfernt.

Des imbrications simples avec et ou ou sont possibles en indiquant d'autres conditions via le bouton **+** et les blocs de conditions. Le bouton **-** permet de supprimer des conditions. Les blocs de conditions vides sont automatiquement supprimés.

Möchte man Bedingungen setzen, die auf Attribute von Objekten, die in Beziehung stehen, abzielen, wählt man das Attribut mit der Objektbeziehung aus und setzt die Bedingung auf **Verknüpftes Attribut**. Daraufhin kann man in einem Unterkonditionsblock weitere Bedingungen angeben.

Si l'on souhaite définir des conditions qui visent des attributs d'objets qui sont en relation, on sélectionne l'attribut avec la relation d'objet et on définit la condition sur **Attribut lié**. On peut ensuite indiquer d'autres conditions dans un bloc de sous-conditions.

### SQL-Editor

### Éditeur SQL

Jeder Report lässt sich über den SQL-Editor erstellen oder bearbeiten - also auch diejenigen, die mit dem Abfrage-Editor erstellt worden sind. Auf der Übersichtsseite der **Reports** klickt man entweder das Drop-Down-Feld neben **Neu** oder selektiert einen bestehenden Report und klickt das Drop-Down-Feld neben **Bearbeiten** an und wählt den Punkt **SQL-Editor**.

Chaque rapport peut être créé ou modifié via l'éditeur SQL - donc également ceux qui ont été créés avec l'éditeur de requêtes. Sur la page d'aperçu des **rapports**, on clique soit sur le champ déroulant à côté de **nouveau**, soit on sélectionne un rapport existant et on clique sur le champ déroulant à côté de **modifier** et on choisit l'option **Éditeur SQL**.

!!! info "Wechsel zwischen Abfrage- und SQL-Editor"

! !! info "Basculer entre l'éditeur de requêtes et l'éditeur SQL".

```
Wird ein Report mit dem SQL-Editor erstellt oder bearbeitet, ist die nachträgliche Bearbeitung mit dem Abfrage-Editor nicht mehr möglich. Hintergrund: Im SQL-Editor steht das volle Spektrum von SQL zur Verfügung. Da der Abfrage-Editor auf ein Subset von SQL beschränkt ist (was in den meisten Fällen reicht), könnte durch diese Differenz die erstellt Abfrage zerstört werden.
```

[![sql-editor](../assets/images/de/auswertungen/report-manager/10-rm.png)](../assets/images/de/auswertungen/report-manager/10-rm.png)

[ ![sql-editor](../assets/images/fr/évaluations/report-manager/10-rm.png)](../assets/images/fr/évaluations/report-manager/10-rm.png)

Im Formularfeld **SQL-Abfrage** wird die Abfrage in SQL geschrieben. Kenntnisse über die Datenbank-Struktur von i-doit sind hier vonnöten. Wichtig ist, dass man immer Objekte abfragt und als erste (unsichtbare) Spalte die ID des Objektes selektiert:

Dans le champ de formulaire **Requête SQL**, la requête est écrite en SQL. Des connaissances sur la structure de la base de données d'i-doit sont ici nécessaires. Il est important de toujours interroger des objets et de sélectionner l'ID de l'objet comme première colonne (invisible) :

```
SELECT obj_main.isys_obj__id AS '__id__' FROM isys_obj AS obj_main;
```

Die Spalten-Namen können multilingual angegeben werden und werden von _i-doit_ bei der Echtzeitabfrage automatisch übersetzt:

Les noms des colonnes peuvent être indiqués en plusieurs langues et sont automatiquement traduits par _i-doit_ lors de la consultation en temps réel :

```
obj_main.isys_obj__title AS 'LC__UNIVERSAL__TITLE###1'
```

!!! success "Komplexe Reports gestalten"

! !! success "Création de rapports complexes

```
Um komplexe Reports zu gestalten, die viele Features von SQL ausreizen, bietet sich folgende Vorgehensweise an:

1. Erstellen des Reports mit dem Abfrage-Editor (so weit es geht)
2. Report kopieren
3. Kopie mit dem SQL-Editor nachbearbeiten

Vorteile sind, dass man nicht unbedingt die Datenbank-Struktur von i-doit kennen muss und dass man den vorbereiteten Report immer noch mit dem Abfrage-Editor bearbeiten kann.
```

## Report exportieren/importieren

## Exporter/importer un rapport

Reports können auch exportiert bzw. importiert werden. Wenn der gewünschte Report über die Checkbox gewählt wurde, kann er über die Schaltfläche oben in eine Datei exportiert werden. Diese Datei kann in einer anderen Instanz oder einem anderen Mandanten importiert werden, sodass der Report dort ebenfalls genutzt werden kann. Die Bearbeitung ist, wenn der Report ursprünglich über den Abfrage-Editor erstellt wurde, auch weiterhin über den Abfrage-Editor möglich.

Les rapports peuvent également être exportés ou importés. Si le rapport souhaité a été sélectionné via la case à cocher, il peut être exporté dans un fichier via le bouton en haut. Ce fichier peut être importé dans une autre instance ou un autre mandant, afin que le rapport puisse également y être utilisé. Si le rapport a été créé à l'origine via l'éditeur de requêtes, il est toujours possible de l'éditer via l'éditeur de requêtes.

Beim Transfer eines Reports ist zu beachten, dass Bedingungen und Ausgaben, die sich auf individuelle Inhalte (z.B. eine Objekt-ID oder eine benutzerdefinierte Kategorie) beziehen, nachbearbeitet werden müssen, wenn diese nicht in der Ziel-Instanz identisch sind, da sie andernfalls ein Ergebnis liefern, das von der Erwartung abweicht.

Lors du transfert d'un rapport, il faut tenir compte du fait que les conditions et les sorties qui se réfèrent à des contenus individuels (par exemple un ID d'objet ou une catégorie définie par l'utilisateur) doivent être retravaillées si elles ne sont pas identiques dans l'instance cible, sinon elles donnent un résultat qui diffère de ce qui était attendu.

## Online Repository

## Référentiel en ligne

Im Internet sind bereits einige vorgefertigte Reports zum Download verfügbar. Über den Punkt **Online Repository** kann man diese direkt ausführen oder erst lokal speichern. Eine bestehende Internetverbindung ist dazu nötig.

Quelques rapports prédéfinis sont déjà disponibles au téléchargement sur Internet. Le point **Online Repository** permet de les exécuter directement ou de les enregistrer localement. Une connexion Internet existante est nécessaire.

[![online-repository](../assets/images/de/auswertungen/report-manager/11-rm.png)](../assets/images/de/auswertungen/report-manager/11-rm.png)

[ ![dépôt en ligne](../assets/images/fr/évaluations/report-manager/11-rm.png)](../assets/images/fr/évaluations/report-manager/11-rm.png)

## Report Views

## Report Views

**Report Views** bieten über die oben genannten Reports zusätzliche Funktionen und Ansichten. Neue können nicht angelegt, bestehende nicht bearbeitet oder gelöscht werden.

Les **Report Views** offrent des fonctions et des vues supplémentaires par rapport aux rapports mentionnés ci-dessus. Il n'est pas possible d'en créer de nouvelles, ni de modifier ou de supprimer celles qui existent déjà.

[![report-views](../assets/images/de/auswertungen/report-manager/12-rm.png)](../assets/images/de/auswertungen/report-manager/12-rm.png)

[ ![report-views](../assets/images/fr/évaluations/report-manager/12-rm.png)](../assets/images/fr/évaluations/report-manager/12-rm.png)

Auswahl von nützlichen **Report Views**:

Sélection de **Report Views** utiles :

* **QR Codes**:<br>
Aufbereiten und Drucken von mehreren Labels gleichzeitig, die einen QR-Code sowie weitere Informationen und ein Logo enthalten können.
* **Geräte in einem Standort (Listenformat)**
* **Netzwerkverbindungen**
* **Offene Kabelverbindungen**

* **Codes QR** :<br>
Préparation et impression de plusieurs étiquettes en même temps, qui peuvent contenir un code QR ainsi que d'autres informations et un logo.
**Périphériques sur un site (format liste)**.
* **Connexions réseau**
* **Connexions par câble ouvert**

[![report-views-2](../assets/images/de/auswertungen/report-manager/13-rm.png)](../assets/images/de/auswertungen/report-manager/13-rm.png)

[ ![report-views-2](../assets/images/fr/évaluations/report-manager/13-rm.png)](../assets/images/fr/évaluations/report-manager/13-rm.png)

## Reports automatisiert exportieren

## Exporter des rapports de manière automatisée

Bestehende Reports können automatisiert als Datei exportiert werden, ohne das ein Benutzer manuell eingreifen muss. Dies geschieht über das Kommandozeilen-Werkzeug von _i-doit_, der [console.php](../automatisierung-und-integration/cli/console/index.md) via [report-export](../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md#report-export).

Les rapports existants peuvent être exportés automatiquement sous forme de fichier, sans qu'un utilisateur doive intervenir manuellement. Cela se fait via l'outil de ligne de commande de _i-doit_, le [console.php](../automatisation-et-intégration/cli/console/index.md) via [report-export](../automatisation-et-intégration/cli/console/options-et-paramètres-de-la-console.md#report-export).

```shell
sudo -u www-data php console.php report-export --help

    Usage:
        report-export [options]

    Options:
    -r, --reportId=REPORTID ID of the report
    -d, --exportPath=EXPORTPATH Path to export the report into
    -f, --exportFilename=EXPORTFILENAME File name of export file, without extension (e.g. .pdf). Default is the title of the report
    -t, --exportFileType=EXPORTFILETYPE File Type of the export. Possible options: csv, txt, pdf, xml [default: "csv"]
    -u, --user=USER User
    -p, --password=PASSWORD Password
    -i, --tenantId=TENANTID Tenant ID [default: 1]
    -c, --config=CONFIG Config File
    -h, --help Display this help message
    -q, --quiet Do not output any message
    -V, --version Display this application version
    --ansi Force ANSI output
    --no-ansi Disable ANSI output
    -n, --no-interaction Do not ask any interactive question
    -v|vv|vvv, --verbose Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

    Help:
        Executes an i-doit report and saves it to a file as CSV, TXT, PDF or XML
```

Die Automatisierung kann beispielsweise durch einen Cronjob erledigt werden.

L'automatisation peut par exemple être effectuée par un cronjob.

!!! info "Report-basierte Benachrichtigung"

! !! info "Notification basée sur un rapport"

```
_i-doit_ kann bei positiven Reports, also Reports mit Ergebnissen, passende [E-Mails versenden](../auswertungen/benachrichtigungen.md).
```

## Rechte vergeben

## Attribuer des droits

Benutzern und Benutzergruppen (in i-doit vertreten durch die Objekttypen **Personen** und **Personengruppen**) können Rechte für den Report Manager vergeben werden. Konfigurieren lässt sich dies über **Verwaltung → Rechtesystem → Rechtevergabe → Report Manager**. Folgende Rechte lassen sich vergeben:

Les utilisateurs et les groupes d'utilisateurs (représentés dans i-doit par les types d'objets **Personnes** et **Groupes de personnes**) peuvent se voir attribuer des droits pour le Report Manager. Cela peut être configuré via **Administration → Système de droits → Attribution de droits → Report Manager**. Les droits suivants peuvent être attribués :

* **Neue Reports erstellen**
* **Online Repository**
* **Report Views**
* **Kategorien**
* **Reports in Kategorien**
* **Reports**

**Créer de nouveaux rapports**.
**Référentiel en ligne***.
**Vues de rapports**
**catégories**
**Rapports dans les catégories**
* **Rapports**

[![rechte-vergeben](../assets/images/de/auswertungen/report-manager/14-rm.png)](../assets/images/de/auswertungen/report-manager/14-rm.png)

[ ![donner-droits](../assets/images/fr/exploitations/report-manager/14-rm.png)](../assets/images/fr/exploitations/report-manager/14-rm.png)