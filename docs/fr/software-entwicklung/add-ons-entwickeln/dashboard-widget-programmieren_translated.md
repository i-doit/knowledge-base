<!-- TRANSLATED by md-translate -->
# Dashboard Widget programmieren

# Programmer le widget du tableau de bord

Das Dashboard ist der zentrale Einstieg in i-doit und somit das erste das jeder User nach seinem Login sieht - der perfekte Ort, um alle wichtigen Informationen auf einen Blick zu sammeln.

Le tableau de bord est le point d'entrée central dans i-doit et donc le premier que chaque utilisateur voit après s'être connecté - l'endroit parfait pour rassembler toutes les informations importantes en un coup d'œil.

Neben den mitgelieferten Widgets kann theoretisch jedes Add-on eigene Widgets mitbringen und den Usern zur Verfügung stellen. Vor allem bei spezifischen Anwendungsfällen, die sich beispielsweise nicht mit Hilfe des Report Managers abbilden lassen, macht es Sinn eigene Widgets zu programmieren. Hier verhält es sich ähnlich wie bei den [Report views](./report-views.md)!

Outre les widgets fournis, chaque module complémentaire peut théoriquement apporter ses propres widgets et les mettre à disposition des utilisateurs. Il est surtout judicieux de programmer ses propres widgets pour des cas d'application spécifiques qui ne peuvent pas être représentés à l'aide du Report Manager par exemple. Il en va de même pour les [Report views](./report-views.md) !

Ein Widget zu programmieren ist relativ einfach und benötigt nur zwei Dateien. Eine zusätzliche Datei wird vonnöten, wenn das Widget konfigurierbar sein soll. Ansonsten braucht das Widget nur einmalig im System registriert werden - ab diesem Zeitpunkt kann es von jedem Nutzer im Dashboard ausgewählt werden.

La programmation d'un widget est relativement simple et ne nécessite que deux fichiers. Un fichier supplémentaire est nécessaire si le widget doit être configurable. Sinon, il suffit d'enregistrer le widget une seule fois dans le système - à partir de ce moment, chaque utilisateur peut le sélectionner dans le tableau de bord.

<!---
Dieser Artikel basiert auf dem "[Example Dashboard]()" Add-on und verwendet dies zur Erklärung verschiedener Technologien die wir einsetzen.
-->

# Notwendige Dateien

# Fichiers nécessaires

Um ein eigenes Widget zu programmieren werden zwei bzw. drei Dateien benötigt:

Pour programmer un widget personnalisé, deux ou trois fichiers sont nécessaires :

* Eine PHP Klasse zum Vorbereiten der Daten (Backend)
* Ein Template zur Darstellung (Frontend)
* Ein optionales Template zur Darstellung der Konfiguration

* Une classe PHP pour préparer les données (backend)
* Un modèle pour la présentation (Frontend)
* Un modèle optionnel pour la représentation de la configuration

Es werden keine Datenbank Tabellen benötigt! Auch in diesem Kontext ähneln sich die Dashboard Widgets und Report Views stark - sie benötigen nur jeweils eine Datei für das "Backend" und "Frontend".

Aucune table de base de données n'est nécessaire ! Dans ce contexte également, les Dashboard Widgets et Report Views se ressemblent beaucoup - ils ne nécessitent qu'un seul fichier pour le "backend" et un seul pour le "frontend".

# Registrierung des eigenen Widgets

# Enregistrement de son propre widget

Ähnlich wie bei Add-ons muss jedes Widget zunächst im System registriert werden und benötigt einen einmaligen Identifier. Dieser wird benutzt, um die PHP Klasse ausfindig zu machen - daher muss der Identifier folgenden Regeln folgen:

Comme pour les add-ons, chaque widget doit d'abord être enregistré dans le système et nécessite un identifiant unique. Celui-ci est utilisé pour retrouver la classe PHP - c'est pourquoi l'identifiant doit suivre les règles suivantes :

* Name des Add-ons als Prefix
* Nur Kleinbuchstaben und Unterstriche
* Keine Sonder-, Leerzeichen oder Umlaute

* Nom de l'add-on comme préfixe
* Uniquement des lettres minuscules et des traits de soulignement
* Pas de caractères spéciaux, d'espaces ou de trémas

<!---
Im "[Example Dashboard]()" Add-on werden zwei Widgets registriert mit den Namen devday_widget_01 und devday_widget_02. Daraus ergeben sich die PHP Klassen Namen isys_dashboard_widgets_devday_widget_01 und isys_dashboard_widgets_devday_widget_02.
-->

Das heißt, der Klassen Name setzt sich zusammen aus "isys_dashboard_widgets_" + Identifier. Um ein Widget zu registrieren kann die Dashboard DAO genutzt werden. Diese Klasse bietet Methoden zum Erstellen und Aktualisieren von Widgets.

Cela signifie que le nom de la classe se compose de "isys_dashboard_widgets_" + identifiant. Pour enregistrer un widget, on peut utiliser la Dashboard DAO. Cette classe propose des méthodes pour créer et mettre à jour des widgets.

Die Registrierung muss beim installieren des Add-ons geschehen, damit es anschließend verfügbar ist. Der zuständige Code könnte folgendermaßen aussehen:

L'enregistrement doit être effectué lors de l'installation du module complémentaire afin qu'il soit ensuite disponible. Le code compétent pourrait se présenter comme suit :

```
$database = isys_application::instance()->container->get('database');

isys_dashboard_dao::instance($database)->create_new_widget(
    'Developer Day Widget #01',
    'devday_widget_01',
    'C__WIDGET__DEVDAY_WIDGET_01', // Optional constant
    '', // Optional configuration in JSON format
    '' // Optional description
);
```

Wurde das Widget erfolgreich in die Datenbank geschrieben, muss die jeweilige PHP-Klasse nur noch im Code verfügbar sein (Stichwort: [Autoloader](./boostraping-eines-add-ons.md)).

Si le widget a été écrit avec succès dans la base de données, il suffit que la classe PHP correspondante soit encore disponible dans le code (mot-clé : [Autoloader](./boostraping-un-add-ons.md)).

# Das Widget Backend (PHP)

# Le backend du widget (PHP)

Bei der Widget-Klasse handelt es sich um eine normale PHP Klasse, die von isys_dashboard_widgets erben muss. Im einfachsten Fall muss nur die "render" Methode implementiert werden - diese muss lediglich das HTML des Widgets als "string" zurückliefern.

La classe de widget est une classe PHP normale qui doit hériter de isys_dashboard_widgets. Dans le cas le plus simple, seule la méthode "render" doit être implémentée - celle-ci doit simplement renvoyer le HTML du widget sous forme de "string".

Üblicherweise werden Smarty-Template verwendet, um diese Aufgabe zu übernehmen. Die globale Smarty-Instanz ist in der Widget-Klasse über $this->m_tpl erreichbar.

Généralement, on utilise des modèles Smarty pour effectuer cette tâche. L'instance globale de Smarty est accessible dans la classe de widgets via $this->m_tpl.

Das Beispiel-Widget isys_dashboard_widgets_devday_widget_01 demonstriert in wenigen Zeilen, wie es möglich ist, Variablen an das Template zu übermitteln, dieses zu rendern und als Rückgabewert an das Dashboard zu liefern:

L'exemple de widget isys_dashboard_widgets_devday_widget_01 démontre en quelques lignes comment il est possible de transmettre des variables au template, de le rendre et de le livrer comme valeur de retour au Dashboard :

```
/**
* @param string $uniqueId
* @return string
* @throws SmartyException
*/
public function render($uniqueId)
{
    // We store a smarty instance in "$this->m_tpl", assign some values and return the rendered template.
    return $this->m_tpl
        ->assign('title', 'Beispiel Widget (mit D3)')
        ->assign('uniqueId', $uniqueId)
        ->fetch(__DIR__ . '/widget.tpl');
}
```

Andere verfügbare Services sind die Datenbank- und Sprach-Komponente. Sollten andere Services benötigt werden, können diese aus dem globalen Dependency Injection Container geladen werden über isys_application::instance()->container->get('...');

Les autres services disponibles sont la base de données et les composants linguistiques. Si d'autres services sont nécessaires, ils peuvent être chargés depuis le conteneur global d'injection de dépendances via isys_application::instance()->container->get('...') ;

## Konfiguration

## Configuration

Sofern das Widget über eine Konfiguration verfügen soll muss die Methode has_configuration() überschrieben werden und true zurückgeben.

Si le widget doit disposer d'une configuration, la méthode has_configuration() doit être écrasée et renvoyer true.

Zusätzlich wird die load_configuration() Methode benötigt, um das Konfigurations-Popup des Widgets vorzubereiten. Hier muss, genau wie bei render(), ein Template zurückgegeben werden - siehe hierzu auch das Beispiel Widget isys_dashboard_widgets_devday_widget_02.

De plus, la méthode load_configuration() est nécessaire pour préparer le popup de configuration du widget. Ici, tout comme avec render(), un modèle doit être retourné - voir à ce sujet l'exemple du widget isys_dashboard_widgets_devday_widget_02.

Innerhalb der Widget-Klasse kann mit Hilfe der Variable $this->m_config auf zuvor gespeicherte Konfiguration zugegriffen werden.

Au sein de la classe de widgets, la variable $this->m_config permet d'accéder à la configuration précédemment enregistrée.

# Das Widget Frontend (Template)

# Le front-end du widget (modèle)

Das Widget-Template unterliegt aktuell keinen Regeln und kann frei gestaltet werden. Hier kann nach belieben mit HTML, Javascript und CSS gearbeitet werden.

Le modèle de widget n'est actuellement soumis à aucune règle et peut être conçu librement. Il est possible de travailler avec HTML, Javascript et CSS.

Das Beispiel-Widget isys_dashboard_widgets_devday_widget_01 demonstriert die einfache Nutzung eines Diagramms, dass mittels [D3](https://d3js.org/) und unserer "D3ChartBar" JS-Klasse genutzt werden kann.

L'exemple de widget isys_dashboard_widgets_devday_widget_01 démontre l'utilisation simple d'un diagramme qui peut être utilisé à l'aide de [D3](https://d3js.org/) et de notre classe JS "D3ChartBar".

Im Beispiel Widget isys_dashboard_widgets_devday_widget_02 wird dagegen einfach die aktuelle Konfiguration ausgegeben. Dieses Beispiel kann genutzt werden, um im Template entsprechend auf konfigurierte Optionen zu reagieren.

Dans l'exemple du widget isys_dashboard_widgets_devday_widget_02, la configuration actuelle est simplement affichée. Cet exemple peut être utilisé pour réagir dans le modèle en fonction des options configurées.

# Die Widget Konfiguration

# La configuration du widget

Jedes Widget kann eine optionale Konfiguration mitbringen, um Optionen vom Benutzer in der GUI einstellen zu lassen. Diese Konfiguration funktioniert in etwa wie das Widget selbst - mittels der load_configuration(array $row, $id) Methode in der Widget-Klasse können Daten für die Konfiguration gesammelt und vorbereitet werden.Der erste Parameter beinhaltet die Zeile aus isys_widgets des Widgets.Der zweite Parameter beinhaltet die ID des Widgets aus isys_widgets_config.

Chaque widget peut avoir une configuration optionnelle pour permettre à l'utilisateur de définir des options dans l'interface graphique. Cette configuration fonctionne à peu près comme le widget lui-même - à l'aide de la méthode load_configuration(array $row, $id) dans la classe de widget, des données peuvent être collectées et préparées pour la configuration.Le premier paramètre contient la ligne de isys_widgets du widget.Le deuxième paramètre contient l'ID du widget de isys_widgets_config.

Die Methode muss, ähnlich wie render(), das gerenderte HTML zurückliefern.
Auch in dieser Methode ist die aktuelle Konfiguration in $this->m_config verfügbar und kann genutzt werden, um Daten vor auszuwählen.

Comme render(), cette méthode doit renvoyer le HTML rendu.
Dans cette méthode aussi, la configuration actuelle est disponible dans $this->m_config et peut être utilisée pour présélectionner des données.

## Speichern der Daten

## Enregistrement des données

Die Konfiguration selbst passiert üblicherweise mit Hilfe von Formularfeldern, in denen der User seine Eingaben machen kann. Es bietet sich an, die verfügbaren Smarty Plugins von i-doit zu nutzen (siehe [Smarty Plugins](./kategorien-programmieren.md#smarty-plugins)).

La configuration elle-même se fait généralement à l'aide de champs de formulaire dans lesquels l'utilisateur peut saisir ses données. Il est possible d'utiliser les plugins Smarty disponibles d'i-doit (voir [Smarty Plugins](./catégories-programmation.md#smarty-plugins)).

Das Speichern dieser Daten läuft größtenteils automatisch ab - es wird nur eine Funktion benötigt, um die konkreten Daten an eine interne Schnittstelle zu übergeben. Dies kann man sich im config.tpl Template des isys_dashboard_widgets_devday_widget_02 Widgets ansehen.

L'enregistrement de ces données se fait en grande partie automatiquement - seule une fonction est nécessaire pour transmettre les données concrètes à une interface interne. On peut voir cela dans le modèle config.tpl du widget isys_dashboard_widgets_devday_widget_02.

Wichtig ist es lediglich, dass beim Klick auf den "Übernehmen" Button des Konfigurations-Popups, die nötigen Daten an eine Stelle zu schreiben:

Il est simplement important, lorsque l'on clique sur le bouton "Appliquer" de la fenêtre contextuelle de configuration, d'écrire les données nécessaires à un seul endroit :

```
$('widget-popup-accept').on('click', function () {
    // Collect the input data and save them to a JSON object.
    const data = {
        title: $F('my-title'),
        dialog: $F('my-dialog')
    };

    // In order to automatically save the configured information, we pass it as JSON string to this defined field.
    $('widget-popup-config-hidden').setValue(Object.toJSON(data));

    // Also we define the configuration as "changed" in order to save it and reload the widget after the popup closes.
    $('widget-popup-config-changed').setValue('1');
});
```

Dieser Code kann quasi 1:1 übernommen werden - lediglich die Aufbereitung der Daten in der "data"-Variable müsste angepasst werden.

Ce code peut être repris quasiment à l'identique - seule la préparation des données dans la variable "data" devrait être adaptée.

i-doit wird sich anschließend darum kümmern, die übergebenen Daten zu speichern und das Widget neu zu laden, damit die aktuellen Optionen direkt angewendet werden.

i-doit se chargera ensuite de sauvegarder les données transmises et de recharger le widget pour que les options actuelles soient directement appliquées.