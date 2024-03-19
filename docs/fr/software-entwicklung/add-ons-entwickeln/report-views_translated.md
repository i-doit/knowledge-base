<!-- TRANSLATED by md-translate -->
# Report views

# Report views

Die Report Views werden in i-doit für spezifische Anwendungsfälle verwendet, die sich mit Hilfe des "Report Manager" nicht abbilden lassen oder z.B. über interaktive Elemente verfügen.

Les Report Views sont utilisées dans i-doit pour des cas d'application spécifiques qui ne peuvent pas être représentés à l'aide du "Report Manager" ou qui disposent par exemple d'éléments interactifs.

Der Vorteil einer Report View ist, dass diese mittels PHP Logik und einem spezifischen Template Daten der CMDB verarbeiten und ausgeben kann, anstatt wie bei "klassischen" Reports nur eine SQL Query auszuführen und als Tabelle darzustellen.

L'avantage d'une vue de rapport est qu'elle peut traiter et afficher les données de la CMDB au moyen d'une logique PHP et d'un modèle spécifique, au lieu de se contenter d'exécuter une requête SQL et de l'afficher sous forme de tableau, comme c'est le cas pour les rapports "classiques".

Daher eignen Sie sich ausgezeichnet für die Abbildung komplexer Abfragen, welche optional parametrisiert werden können, um eine große Variation an ähnlichen Sachverhalten abzudecken. Ferner bieten Report Views die Möglichkeit der Auswahl von anderen Visualisierungsformen als eine einfache Tabelle.

Elles conviennent donc parfaitement à la représentation de requêtes complexes, qui peuvent éventuellement être paramétrées afin de couvrir une grande variété de situations similaires. En outre, les rapports permettent de choisir d'autres formes de visualisation qu'un simple tableau.

Für eine Report View müssen drei Dinge gegeben sein:

Pour une vue de rapport, trois éléments doivent être réunis :

* Eine "Report View" PHP Klasse mit der nötigen Logik
* Ein Template zum darstellen des Reports in der Web GUI
* Die Registrierung der View

* une classe PHP "Report View" avec la logique nécessaire
* Un modèle pour la présentation du rapport dans l'interface utilisateur Web.
* L'enregistrement de la view

Dieser Artikel basiert auf dem existierenden Beispiel Add-on "[Report view example](https://bitbucket.org/synetics/addon-example-reportview/commits/)" - dieses ist für alle [Entwicklungspartner](https://www.i-doit.com/partner/partner-werden/) frei zugänglich und bietet eine funktionsfähige Report View die zu Lernzwecken verwendet werden kann.

Cet article est basé sur l'add-on existant "[Report view example](https://bitbucket.org/synetics/addon-example-reportview/commits/)". - qui est librement accessible à tous les [partenaires de développement](https://www.i-doit.com/partner/partner-werden/) et offre une vue de rapport fonctionnelle qui peut être utilisée à des fins d'apprentissage.

# Report PHP Klasse

# Rapport classe PHP

Die PHP Klasse muss von isys_report_view erben und die nötigen Interface Klassen implementieren:

La classe PHP doit hériter de isys_report_view et implémenter les classes d'interface nécessaires :

* name
Diese Methode liefert lediglich die Bezeichnung der Report View zurück.
* description
Ähnlich wie name(), nur für die Beschreibung.
* template
Muss den absoluten Pfad zum zuständigen Template zurückliefern, das i-doit System wird das Template entsprechend selbstständig laden sobald die Report View geöffnet wird.
* viewtype
Diese Methode liefert den Typen der Report View zurück. Hierbei handelt es sich um einen einfach String.
* init
Hierbei handelt es sich um eine optionale Methode, die vor jeglicher Verarbeitung aufgerufen wird.
* start
Diese Methode wird von i-doit verwendet wenn die Report View aufgerufen wird. Hier muss die initiale Datenaufbereitung für das Frontend passieren, damit das Template darauf zugreifen kann.
Dieser Prozess sollte möglichst schlank gehalten werden - jegliche "aufwändige" Report Logik sollte mittels Ajax Anfrage geschehen.
* ajax_request
Eine weitere optionale Methode zum verarbeiten von Ajax Anfragen aus dem Frontend.

* name
Cette méthode renvoie uniquement le nom de la vue du rapport.
* description
Similaire à name(), mais pour la description.
* template
Doit renvoyer le chemin absolu vers le modèle responsable, le système i-doit chargera le modèle de manière autonome dès que la vue du rapport sera ouverte.
* viewtype
Cette méthode renvoie le type de la vue du rapport. Il s'agit d'une simple chaîne de caractères.
* init
Il s'agit d'une méthode optionnelle qui est appelée avant tout traitement.
* start
Cette méthode est utilisée par i-doit lorsque le Report View est appelé. C'est ici que doit avoir lieu la préparation initiale des données pour le frontend, afin que le modèle puisse y accéder.
Ce processus doit être aussi léger que possible - toute logique de rapport "complexe" doit être effectuée au moyen d'une requête Ajax.
* ajax_request
Une autre méthode optionnelle pour traiter les requêtes Ajax du frontend.

In diesem Beispiel Add-on trägt die Klasse den Namen example_report_view_01.class.php - dieser Name muss den Add-on Identifier (hier "example_report") beinhaltet, der Rest kann frei vergeben werden. Die PHP Klasse selbst muss den gleichen Namen tragen.

Dans cet exemple de module complémentaire, la classe porte le nom example_report_view_01.class.php - ce nom doit contenir l'identifiant du module complémentaire (ici "example_report"), le reste peut être attribué librement. La classe PHP elle-même doit porter le même nom.

## Initiale start() Methode

## Méthode start() initiale

Sobald eine Report View im i-doit Frontend geöffnet wird durchläuft das Backend zunächst die optionale init() und dann die start() Methode. Diese fungiert als Einstiegspunkt in die Report View und wird üblicherweise dafür genutzt alle initialen Daten zu laden, die anschließend im Smarty Template verwendet werden.

Dès qu'une vue de rapport est ouverte dans le frontend i-doit, le backend passe d'abord par la méthode optionnelle init() et ensuite par la méthode start(). Cette dernière fait office de point d'entrée dans le report view et est généralement utilisée pour charger toutes les données initiales qui seront ensuite utilisées dans le modèle Smarty.

Wir können hier die [TOM Logik](./kategorien-programmieren.md#ubergabe-der-daten-an-smarty-plugins-mittels-tom-und-rules) nutzen, ähnlich wie bei den Kategorien - im Beispiel Add-on nutzen wir diese Methode zum vorbereiten des Status Filters.

Nous pouvons utiliser ici la [logique TOM](./catégories-programmation.md#transfert-des-données-vers-smarty-plugins-moyen-tom-et-rules), comme pour les catégories - dans l'exemple du module complémentaire, nous utilisons cette méthode pour préparer le filtre de statut.

## Daten via ajax_request() nachladen

## Recharger les données via ajax_request()

Diese Methode wird automatisch gerufen, wenn die Report View URL um den "ajax" Parameter erweitert wird. Ab i-doit 1.16.3 wird auch hier zunächst die optionale init() Methode aufgerufen um eventuelle Daten vorzubereiten.

Cette méthode est automatiquement appelée lorsque le paramètre "ajax" est ajouté à l'URL de la vue du rapport. A partir de la version 1.16.3 d'i-doit, la méthode optionnelle init() est également appelée en premier lieu pour préparer d'éventuelles données.

Damit diese Methode die korrekten Daten an das Frontend zurück liefert müssen drei Dinge gegeben sein:

Pour que cette méthode renvoie les données correctes au frontend, trois conditions doivent être remplies :

* Der korrekte Content-Type muss gesetzt werden (im Beispiel "application/json")
* Die Daten müssen ausgegeben werden (im Beispiel mittels "echo "...";")
* Der Request muss beendet werden um eventuelle Folge-Logik zu unterbinden (im Beispiel mittels "die();")

* Le type de contenu correct doit être défini (dans l'exemple "application/json").
* Les données doivent être affichées (dans l'exemple avec "echo "..." ;")
* La requête doit être terminée afin d'empêcher toute logique de suivi (dans l'exemple avec "die() ;").

Die ausgegebenen Werte können anschließend im Template empfangen und weiterverwendet werden.

Les valeurs émises peuvent ensuite être reçues dans le modèle et être réutilisées.

# Template

# Template

Das Template muss die komplette Darstellung der Report View übernehmen, üblicherweise wird hier mittels [Smarty](https://www.smarty.net/docs/en/) ein Formular mit Filtern und eine Tabelle mit Informationen dargestellt. Alternativ kann aber zum Beispiel mittels [D3](https://d3js.org/) oder anderen Tools eine grafische Auswertung präsentiert werden.

Le modèle doit prendre en charge la présentation complète de la vue du rapport, en général un formulaire avec des filtres et un tableau avec des informations sont présentés à l'aide de [Smarty](https://www.smarty.net/docs/en/). Il est également possible de présenter une évaluation graphique à l'aide de [D3](https://d3js.org/) ou d'autres outils.

Im Beispiel Add-on sehen wir ein Dialogfeld dessen Daten beim Klick des Buttons per Ajax an das Backend gesendet werden. Die Antwort des Backens beinhaltet einige Information zu Objekttypen die dann sowohl in einer Tabelle als auch in Form eines Tortendiagramms dargestellt werden.

Dans l'exemple du module complémentaire, nous voyons une boîte de dialogue dont les données sont envoyées au backend par Ajax lorsque l'on clique sur le bouton. La réponse du backend contient quelques informations sur les types d'objets qui sont ensuite représentés dans un tableau ainsi que sous forme de camembert.

# Report View registrieren

# Enregistrer la vue du rapport

Damit die eigene View im Report Manager auftaucht, muss sie zunächst registriert werden. Dazu nutzen wir einen speziellen Register, dem wir lediglich den absoluten Pfad zur Report View Klasse übergeben:

Pour que la propre view apparaisse dans le Report Manager, elle doit d'abord être enregistrée. Pour cela, nous utilisons un registre spécial auquel nous transmettons uniquement le chemin absolu vers la classe Report View :

```
$path = '/reportview/isys_maintenance_reportview_maintenance_export.class.php';

isys_register::factory('additional-report-views')->set(__DIR__ . $path);
```

Dieser Schritt sollte in der init.php Datei des eigenen Add-ons geschehen, da diese von i-doit immer gelesen und verarbeitet wird. Außerdem kann somit sichergestellt werden das die Report View nur dann auftaucht, wenn das Add-on im Admin-Center "aktiv" geschaltet ist:

Cette étape devrait être effectuée dans le fichier init.php du propre module complémentaire, car celui-ci est toujours lu et traité par i-doit. De plus, on peut ainsi s'assurer que la vue du rapport n'apparaît que si le module complémentaire est "actif" dans l'Admin-Center :

```
if (isys_module_manager::instance()->is_active('example_reportview')) {
    // ...

    isys_register::factory('additional-report-views')
        ->set(__DIR__ . '/report-view/example_report_view_01.class.php');
}
```

Sobald dieser Schritt getan ist und die Report View Klasse mittels Autoloading verfügbar ist, lässt sich die [Report View in i-doit öffnen](../../auswertungen/report-manager.md#report-views) und ausführen.

Dès que cette étape est terminée et que la classe Report View est disponible grâce à l'autoloading, il est possible d'ouvrir la [Report View dans i-doit](../../évaluations/report-manager.md#report-views) et de l'exécuter.