<!-- TRANSLATED by md-translate -->
# Attribut definition

# Définition de l'attribut

Die zentrale Funktion einer CMDB wie i-doit ist das Dokumentieren. Zusammenhängende Datensätze werden hierbei in Kategorien gruppiert. Jede Kategorie wird wiederum durch ihre Attribute ausgeprägt. Ein Attribut repräsentiert einen pflegbaren Datensatz, wie zum Beispiel ein Text-, Dialog- oder Objektbrowser-Feld. Diese Attribute werden üblicherweise über die Oberfläche im Browser eingetragen und gelesen. Darüber hinaus ist es möglich weitere i-doit Funktionen zu nutzen, um die Dokumentation in verschiedenster Form zu verwenden - sei es in Reports, der API, dem Dokumente Add-on oder sonstigen Exports.

La fonction centrale d'une CMDB comme i-doit est la documentation. Les enregistrements liés sont regroupés en catégories. Chaque catégorie est à son tour caractérisée par ses attributs. Un attribut représente un enregistrement pouvant être géré, comme par exemple un champ de texte, de dialogue ou de navigateur d'objets. Ces attributs sont généralement saisis et lus dans le navigateur via l'interface. En outre, il est possible d'utiliser d'autres fonctions i-doit pour utiliser la documentation sous différentes formes - que ce soit dans des rapports, l'API, le module complémentaire Documents ou d'autres exportations.

Damit die Attribute und deren Daten in den verschiedenen Funktionen genutzt werden können, müssen diese technisch definiert sein. Die verschiedenen Optionen sind in diesem Artikel beschrieben.

Pour que les attributs et leurs données puissent être utilisés dans les différentes fonctions, ils doivent être définis techniquement. Les différentes options sont décrites dans cet article.

Die Definition eines Attributes wird vom i-doit System benötigt, um das entsprechende Attribut in die Kernfunktionen zu integrieren. Um ein Attribut zum Beispiel in der Listeneditierung, der API sowie unseren Importen zu nutzen ist eine korrekte und ausführliche Definition unerlässlich.

La définition d'un attribut est nécessaire au système i-doit pour intégrer l'attribut correspondant dans les fonctions principales. Pour utiliser un attribut par exemple dans l'édition de listes, l'API ainsi que nos importations, une définition correcte et détaillée est indispensable.

In den meisten Fällen wird eine detaillierte Definition vollständig von den "Property Factory" Klassen übernommen und bedarf keiner weiteren Bearbeitung.

Dans la plupart des cas, une définition détaillée est entièrement prise en charge par les classes "Property Factory" et ne nécessite pas de traitement supplémentaire.

# Arten der Definition

# Types de définition

## Array-Notation (deprecated)

## Notation des tableaux (deprecated)

**Achtung: Die veraltete Array-Notation sollte, nicht länger verwendet werden. Die "Property-Factory"-Klassen bieten eine komfortable und sichere Alternative.**

**Attention : la notation obsolète des tableaux ne devrait plus être utilisée. Les classes "Property-Factory" offrent une alternative confortable et sûre.**

Vor der Einführung der Property-Factories in i-doit v1.12.3, musste die Definition mittels verschachtelter Arrays stattfinden. Damit ständig wiederkehrende Strukturen nicht dupliziert werden mussten, wurden sogenannte "Patterns" eingeführt, welche die Basisdefinition eines Attributes darstellt.

Avant l'introduction des Property-Factories dans i-doit v1.12.3, la définition devait se faire au moyen de tableaux imbriqués. Pour éviter de dupliquer des structures récurrentes, des "patterns" ont été introduits, qui représentent la définition de base d'un attribut.

Für die meisten Attributtypen gibt es ein entsprechendes Pattern in der PHP-Klasse isys_cmdb_dao_category_pattern. Jedes Pattern liefert die für den jeweiligen Typen zutreffende Definition, unter anderem die Datentypen, UI-Standards, verfügbare "Provides" und Validierungsmethoden.

Pour la plupart des types d'attributs, il existe un modèle correspondant dans la classe PHP isys_cmdb_dao_category_pattern. Chaque pattern fournit la définition applicable au type en question, notamment les types de données, les normes UI, les "provides" disponibles et les méthodes de validation.

In der DAO werden die entsprechenden Patterns mittels array_replace_recursive um spezifische Daten ergänzt, die für das jeweilige Attribut notwendig sind. Üblicherweise zählen dazu Übersetzungen, Datenbankfelder, Datenbankreferenzen, UI Parameter und ggf. "Callback" Methoden für bestimmte Datentypen.

Dans la DAO, les patterns correspondants sont complétés par des données spécifiques nécessaires pour l'attribut en question à l'aide de array_replace_recursive. Il s'agit généralement de traductions, de champs de base de données, de références de base de données, de paramètres d'interface utilisateur et, le cas échéant, de méthodes de "rappel" pour certains types de données.

Da diese Art der Definition sehr schnell unübersichtlich wird und viele redundanten Informationen enthält wurde das neue Format der "Property-Factory"-Klassen etabliert. Diese beinhalten letztlich die gleichen Informationen, verschlanken aber aufgrund der objektorientierten Programmierung die Nutzung und Redundanzen ganz enorm!

Comme ce type de définition devient très vite confus et contient beaucoup d'informations redondantes, le nouveau format des classes "Property-Factory" a été établi. Celles-ci contiennent en fin de compte les mêmes informations, mais grâce à la programmation orientée objet, elles simplifient énormément l'utilisation et les redondances !

Dies trägt außerdem dazu bei, den Code sicherer und robuster zu gestalten.

Cela contribue également à rendre le code plus sûr et plus robuste.

Beim Erstellen neuer Kategorien und Attribute gibt es keinen Grund mehr diese veraltete Struktur zu nutzen - alle neuen Definitionen sollten die Property-Factories nutzen.

Lors de la création de nouvelles catégories et attributs, il n'y a plus de raison d'utiliser cette structure obsolète - toutes les nouvelles définitions devraient utiliser les Property-Factories.

## Property-Factories

## Property-Factories

Diese Art der Definition ist der Arraynotation weit überlegen und kann enorm viel Code (und damit Fehlerpotential) einsparen. Wir empfehlen die "Property-Factory"-Klassen immer zu nutzen, wenn neue Attribute erzeugt werden.

Ce type de définition est bien supérieur à l'arraynotation et peut permettre d'économiser énormément de code (et donc d'erreurs potentielles). Nous recommandons d'utiliser les classes "Property-Factory" chaque fois que de nouveaux attributs sont créés.

Dank der mitgelieferten mergeProperty*-Methoden können alle Definitionen, je nach Bedarf, überschrieben werden.

Grâce aux méthodes mergeProperty* fournies, toutes les définitions peuvent être écrasées, selon les besoins.

### Ausprägungen

### expressions

Ähnlich wie bei den "Patterns" für die Array-Notation gibt es eine Reihe von vorgegebenen Property Factory Klassen, mit denen sich Attribute definieren lassen. Jede dieser Ausprägungen verfügt über die jeweils notwendigen Konstruktor-Parameter, um das Attribut funktionsfähig abzubilden.

Comme pour les "patterns" de la notation des tableaux, il existe une série de classes Property Factory prédéfinies qui permettent de définir des attributs. Chacune de ces expressions dispose des paramètres de constructeur nécessaires pour représenter l'attribut de manière fonctionnelle.

Zusätzlich existieren Helper-Methoden, um einzelne Bereiche zu ergänzen oder zu ersetzen - das ist allerdings häufig gar nicht nötig und wird nur in speziellen Fällen angewandt, in denen keine passende Property-Factory existiert.

Il existe en outre des méthodes Helper pour compléter ou remplacer certains domaines - ce qui n'est toutefois souvent pas nécessaire et n'est utilisé que dans des cas particuliers où il n'existe pas de Property-Factory appropriée.

Die am häufigsten genutzten Factories sind:

Les factories les plus utilisées sont :

* TextProperty
* TextAreaProperty
* DialogProperty
* DialogPlusProperty
* ObjectBrowserProperty
* DateProperty
* CommentaryProperty

* TextProperty
* TextAreaProperty
* DialogProperty
* DialogPlusProperty
* ObjectBrowserProperty
* DateProperty
* CommentaryProperty

Natürlich gibt es noch weitere Klassen, die teilweise schon sehr spezifische Fälle abdecken. Diese sind im Dateisystem unter <i-doit>/src/idoit/Component/Property/Type/ zu finden.

Il existe bien sûr d'autres classes, dont certaines couvrent déjà des cas très spécifiques. On les trouve dans le système de fichiers sous <i-doit>/src/idoit/Component/Property/Type/.

# Bereiche zur Definitionen

# Domaines pour les définitions

## Info

## Info

### Primary (Deprecated)

### Primary (Deprecated)

Diese Funktionalität wurde ursprünglich bei den Reports genutzt und durch dynamische Attribute abgelöst.

Cette fonctionnalité était initialement utilisée pour les rapports et a été remplacée par des attributs dynamiques.

### Type

### Type

Gibt Aufschluss über den Attribut-Typen - die verfügbaren findet man als Klassen-Konstanten mit dem Prefix "C__PROPERTY__INFO__TYPE__" in idoit\Component\Property\LegacyPropertyInterface.

Donne des informations sur le type d'attribut - on trouve les disponibles comme constantes de classe avec le préfixe "C__PROPERTY__INFO__TYPE__" dans idoit\Component\Property\LegacyPropertyInterface.

### Backward

### Backward

Definiert, ob es sich bei einem Attribut um das rückwärtige Pendant einer anderen Kategorie handelt. Beispielsweise ist das Attribut isys_cmdb_dao_category_s_person_contact_assign::object (Zugewiesene Objekte) das rückwärtige Attribut zu isys_cmdb_dao_category_g_contact::contact (Kontaktzuweisung). Dieses Feld wird nur innerhalb von rückwärtigen Kategorien verwendet und kann in allen anderen Fällen ignoriert werden.

Définit si un attribut est le pendant arrière d'une autre catégorie. Par exemple, l'attribut isys_cmdb_dao_category_s_person_contact_assign::object (objets affectés) est l'attribut arrière de isys_cmdb_dao_category_g_contact::contact (affectation de contact). Ce champ n'est utilisé que dans les catégories inversées et peut être ignoré dans tous les autres cas.

## Data

## Data

### Type

### Type

Der Typ beschreibt den Datentyp auf Seite der Datenbank und wird verwendet um korrekte Formatierung zu gewährleisten.

Le type décrit le type de données du côté de la base de données et est utilisé pour garantir un formatage correct.

### Source table

### Source table

Hier wird der Name der Quell-Tabelle hinterlegt, in der die jeweiligen Daten zu finden sind. Diese Konfiguration ist ebenso notwendig wie das Feld (nächster Punkt).

Le nom du tableau source, dans lequel se trouvent les données respectives, est enregistré ici. Cette configuration est tout aussi nécessaire que le champ (point suivant).

### References

### Références

Diese Referenz Definition muss ein Array mit zwei Werten beinhalten: Die referenzierte Datenbanktabelle und dessen Feld, welches die (Fremdschlüssel) ID beinhaltet. Dies wird üblicherweise für Dialog-Plus oder andere 1:1 Felder verwendet.

Cette définition de référence doit contenir un tableau avec deux valeurs : La table de base de données référencée et son champ qui contient l'ID (clé étrangère). Ceci est généralement utilisé pour Dialog-Plus ou d'autres champs 1:1.

### Field

### champ

Beinhaltet den Feldnamen der zuständigen Tabelle. Diese Information ist verpflichtend und wird verwendet beim "automatischen" lesen und schreiben von Daten.

Contient le nom du champ de la table responsable. Cette information est obligatoire et est utilisée lors de la lecture et de l'écriture "automatiques" des données.

### Relation type

### Type de relation

Sollte es sich bei dem Attribut um eine Referenz handeln, die eine implizite Beziehung behandelt kann hier entweder statisch die Konstante des Beziehungstyp hinterlegt werden oder ein Callback vom Typ isys_callback welcher wiederum eine Konstante zurückliefern muss.

Si l'attribut est une référence qui traite une relation implicite, il est possible d'enregistrer ici soit la constante statique du type de relation, soit un callback de type isys_callback qui doit à son tour renvoyer une constante.

### Relation handler

### Gestionnaire de relations

Der sogenannte "relation handler" wird während der erstellung impliziter Beziehungen benutzt und muss ein Array zurückliefern welches aufschluss darüber gibt welches Objekt der "Parent" und welches das "Child" ist.

Le "relation handler" est utilisé lors de la création de relations implicites et doit renvoyer un tableau indiquant quel objet est le "parent" et quel objet est l'"enfant".

### Readonly

### Readonly

Diese Information gibt darüber aufschluss ob das Attribut schreibbar sein soll. Ein Beispiel hierfür wären die Felder "changed_by" oder "changed" in der Allgemein Kategorie - diese sollen nicht verändert werden können.

Cette information permet de savoir si l'attribut doit être accessible en écriture. Un exemple serait les champs "changed_by" ou "changed" dans la catégorie générale - ceux-ci ne doivent pas pouvoir être modifiés.

### Select

### Select

Diese Konfiguration wird für referenzierte Werte verwendet, für die ein Sub-Select nötig wird. Der Wert muss ein Instanz von idoit\Module\Report\SqlQuery\Structure\SelectSubSelect sein.

Cette configuration est utilisée pour les valeurs référencées pour lesquelles une sous-sélection est nécessaire. La valeur doit être une instance de idoit\Module\Report\SqlQuery\Structure\SelectSubSelect.

Dies wird für Objektlisten und Reports verwendet.

Ceci est utilisé pour les listes d'objets et les rapports.

### Join

### Rejoindre

Diese Konfiguration muss ein Array beinhalten mit einem oder mehreren Objekten vom Typ idoit\Module\Report\SqlQuery\Structure\SelectJoin. Dies wird für Referenzierte Werte im Kontext der Objektlisten und Reports verwendet um komplexe joins aufzubauen.

Cette configuration doit contenir un tableau avec un ou plusieurs objets de type idoit\Module\Report\SqlQuery\Structure\SelectJoin. Ceci est utilisé pour les valeurs référencées dans le contexte des listes d'objets et des rapports afin de construire des jointures complexes.

### Join list

### Join list

Deprecated - Diese funktionalität wird nicht mehr verwendet.

Deprecated - Cette fonctionnalité n'est plus utilisée.

### Index

### Index

Hier wird mittels boolean true oder false definiert ob es sich beim Datenbankfeld um ein indexiertes Feld handelt. Diese Information entscheidet unter anderem darüber ob ein Feld in den Objektlisten sortierbar ist.

Ici, le booléen true ou false permet de définir si le champ de la base de données est un champ indexé. Cette information détermine entre autres si un champ peut être trié dans les listes d'objets.

### Field function

### Field function

Dies wird für spezielle SQL-Typen verwendet, die durch eine interne Funktion verarbeitet müssen. Die einzigen Anwendungsfälle sind Längen- und Breitengrad (Standort Kategorie) da beide Datensätze im gleichen Feld gespeichert werden und zuvor mittels SQL Funktion X() und Y() verarbeitet werden.

Ceci est utilisé pour des types SQL spéciaux qui doivent être traités par une fonction interne. Les seuls cas d'utilisation sont la latitude et la longitude (catégorie de localisation), car les deux enregistrements sont stockés dans le même champ et sont traités au préalable par les fonctions SQL X() et Y().

### Sort

### Trier

Kann eine Sub-Query beinhalten nach deren Ergebnis die Datensätze der Kategorie sortiert werden sollen. Wird für die Objektlisten und Reports verwendet.

Peut contenir une sous-requête dont le résultat doit servir à trier les enregistrements de la catégorie. Utilisée pour les listes d'objets et les rapports.

### Field alias

### Champ alias

Wird im Kontext von Referenzierten Werten verwendet, die ggf. den gleichen "Field" Wert haben. Der Alias unterstützt dabei um das Ergebnis auf einen anderen Namen zu mappen. Dies wird von mehreren Funktionen in i-doit verwendet.

Utilisé dans le contexte de valeurs référencées qui ont éventuellement la même valeur "Field". L'alias permet de faire correspondre le résultat à un autre nom. Il est utilisé par plusieurs fonctions dans i-doit.

### Table alias

### Tableau alias

Diese Konfiguration dient einem ähnlichen Zweck wie "Field alias" - um referenzierte Werte über eigene Namen lesen zu können.

Cette configuration a un but similaire à celui de "Field alias" - pour pouvoir lire les valeurs référencées par leurs propres noms.

### Sort alias

### Sort alias

Übernimmt eine ähnliche Funktion wie "Field alias" und "Table alias" und wird im Kontext der Objekt- und Kategorielisten verwendet.

Assume une fonction similaire à "Field alias" et "Table alias" et est utilisé dans le contexte des listes d'objets et de catégories.

### Encrypt

### Encrypt

Beinhaltet die Information ob das Feld verschlüsselt wird oder nicht. Dies wird üblicherweise für Passwort Felder benutzt und sorgt dafür das die i-doit interne Logik die Werte beim lesen und schreiben jeweils ver- und entschlüsselt .

Contient l'information si le champ est crypté ou non. Cette information est généralement utilisée pour les champs de mot de passe et permet à la logique interne d'i-doit de crypter et de décrypter les valeurs lors de la lecture et de l'écriture.

## UI

## UI

Der UI-Bereich ist notwendig für die Darstellung der Attribute in "generischen Oberflächen", wie zum Beispiel der Listeneditierung. Auch andere Bereiche von i-doit greifen auf diese Information zurück.

La zone UI est nécessaire pour la représentation des attributs dans les "interfaces génériques", comme par exemple l'édition de listes. D'autres domaines d'i-doit ont également recours à ces informations.

Vor allem die UI-Klasse der entsprechenden Kategorie wird diese Definition nutzen und die Daten an das [TOM (Template Object Model)](kategorien-programmieren.md#ubergabe-der-daten-an-smarty-plugins-mittels-tom-und-rules) übergeben. Dadurch brauchen Smarty- Parameter nicht an mehreren Stellen hinterlegt werden.

C'est surtout la classe UI de la catégorie correspondante qui utilisera cette définition et transmettra les données au [TOM (Template Object Model)](categories-programmieren.md#ubergabe-des-données-au-smarty-plugins-mittels-tom-und-rules). Ainsi, les paramètres Smarty ne doivent pas être déposés à plusieurs endroits.

### ID

### ID

Hier muss die im Frontend genutzte ID des Feldes festgelegt werden. Diese muss in exakter Schreibweise im Kategorie-Template verwendet werden. Das sorgt dafür, dass die POST-Daten automatisch zum jeweiligen Attribut zugeordnet werden können.

L'ID du champ utilisé dans le frontend doit être défini ici. Celui-ci doit être utilisé en écriture exacte dans le modèle de catégorie. Cela permet d'assurer que les données POST soient automatiquement attribuées à l'attribut correspondant.

Die ID hat für gewöhnlich folgende Struktur:

L'identifiant a généralement la structure suivante :

```
C__CMDB__CAT<kategorie-typ>__<kategorie-kürzel>__<attribut-kürzel>
```

Also zum Beispiel:

Par exemple

```
C__CMDB__CATG__AUDIT__TITLE
```

**Achtung**: Bei eigenen Add-ons macht es Sinn den Identifier im Kategorienamen zu verwenden. Dies verhindert Kollisionen mit i-doit-eigenen Kategorien und macht zudem die Zugehörigkeit transparent.

**Attention** : Pour les add-ons personnels, il est judicieux d'utiliser l'identifiant dans le nom de la catégorie. Cela évite les collisions avec les catégories propres à i-doit et rend en outre l'appartenance transparente.

### Type

### Type

Beinhaltet den abstrahierten Formular-Typen. Hierfür werden die C__PROPERTY__UI__TYPE__* Konstanten aus idoit\Component\Property\LegacyPropertyInterface verwendet.

Contient le type de formulaire abstrait. Les constantes C__PROPERTY__UI__TYPE__* de idoit\Component\Property\LegacyPropertyInterface sont utilisées à cet effet.

### Params

### Paramètres

Hierbei handelt es sich um die Parameter, die an das Smarty-Plugin übergeben werden. Diese Parameter steuern z.B. die Darstellung, verfügbare Inhalte als auch spezielle (plugin-spezifische) Funktionen.

Il s'agit des paramètres qui sont transmis au plug-in Smarty. Ces paramètres contrôlent par exemple l'affichage, les contenus disponibles ainsi que des fonctions spéciales (spécifiques au plugin).

Sofern die Parameter an dieser Stelle definiert werden, brauchen sie nicht in der UI- Klasse oder dem Kategorie-Template hinterlegt werden. Auch "generische Oberflächen", wie z.B. die Listeneditierung, werden diese Parameter nutzen.

Si les paramètres sont définis à cet endroit, il n'est pas nécessaire de les définir dans la classe d'interface utilisateur ou dans le modèle de catégorie. Les "interfaces génériques", comme par exemple l'édition de listes, utiliseront également ces paramètres.

### Default

### Défaut

Hier kann ein Standardwert für das jeweilige Attribut angegeben werden, welches im "Erstellen"-Kontext der Kategorie verwendet wird.

Il est possible d'indiquer ici une valeur par défaut pour l'attribut en question, qui sera utilisée dans le contexte "Créer" de la catégorie.

### Placeholder (Deprecated)

### Placeholder (Deprecated)

Der Placeholder wurde ursprünglich für das gleichnamige HTML-Attribut verwendet und inzwischen durch ein Smarty-Plugin Parameter ersetzt.

Le placeholder était à l'origine utilisé pour l'attribut HTML du même nom et a depuis été remplacé par un paramètre du plugin Smarty.

### Empty message (Deprecated)

### Empty message (Deprecated)

Diese Konfiguration wurde, wie auch der "Placeholder" Parameter, durch Smarty-Plugin Parameter setzt.

Cette configuration, tout comme le paramètre "Placeholder", a été définie par les paramètres du plugin Smarty.

## Format

## Format

Der "Format"- der Definition wird für optionale Callback-Methoden genutzt, um attributspezifische Daten nachzuladen. Dies wird unter anderem beim Export benutzt,um hinterlegte Daten in ein "lesbares" Format zu konvertieren.

Le "format" de la définition est utilisé pour des méthodes de rappel optionnelles afin de charger des données spécifiques à l'attribut. Ceci est utilisé entre autres lors de l'exportation pour convertir les données déposées dans un format "lisible".

Damit diese Daten auch im Import verarbeitet werden können, muss eine zusätzliche Callback-Methode mit gleichem Namen + "_import" suffix hinterlegt werden. In der Regel wird dieser Teil nicht benötigt, da die Property-Factories die entsprechenden Callbacks bereits mitliefern.

Pour que ces données puissent également être traitées dans l'importation, il faut définir une méthode de callback supplémentaire avec le même nom + "_import" suffixe. En règle générale, cette partie n'est pas nécessaire, car les Property-Factories fournissent déjà les callbacks correspondants.

Auf der anderen Seite werden die Format-Callbacks genutzt, um spezifischen Code für virtuelle- oder dynamische Attribute auszuführen, welche dann wiederum den gewünschten Inhalt zurückliefern.

D'autre part, les rappels de format sont utilisés pour exécuter un code spécifique pour les attributs virtuels ou dynamiques, qui renvoient à leur tour le contenu souhaité.

## Dependency

## Dépendance

Die Dependency wird für einige Attribute verwendet, deren Daten von anderen Attributen beeinflusst werden. Ein Beispiel hierfür ist die Abhängigkeit zwischen "Hersteller" und "Modell".

La dépendance est utilisée pour certains attributs dont les données sont influencées par d'autres attributs. La dépendance entre "fabricant" et "modèle" en est un exemple.

### Property key

### Clé de propriété

Hier muss das Kürzel des abhängigen Attributes eingetragen werden.

L'abréviation de l'attribut dépendant doit être saisie ici.

### Smarty parameters

### Smarty parameters

Die Abhängigkeit wird im Frontend abgebildet und muss daher mittels Smarty-Parameter definiert werden. Eine solche Abhängigkeit wird derzeit nur bei Dialog-Attributen unterstützt.

La dépendance est représentée dans le frontend et doit donc être définie au moyen d'un paramètre smarty. Une telle dépendance n'est actuellement supportée que pour les attributs de dialogue.

## Provides

## Provides

Die "Provides" entscheiden darüber, welche i-doit Funktionen für dieses Attribut verfügbar sind. In den meisten Fällen werden die Property-Factories diese Option korrekt setzen.

Les "Provides" décident quelles fonctions i-doit sont disponibles pour cet attribut. Dans la plupart des cas, les property factories définiront correctement cette option.

Unter bestimmten Umständen kann es aber nötig sein ein Attribut für Im- und Export oder Listeneditierung zu sperren, zum Beispiel, wenn das Attribut im Kategorie-Template über benutzerdefinierte Logik verfügt, die sich nicht anders abbilden lässt.

Dans certaines circonstances, il peut toutefois être nécessaire de bloquer un attribut pour l'importation et l'exportation ou l'édition de listes, par exemple si l'attribut dispose d'une logique définie par l'utilisateur dans le modèle de catégorie qui ne peut pas être représentée autrement.

## Check

## Check

Mit Hilfe dieser Definition können verschiedene Validierungsmöglichkeiten eingestellt werden. Es ist außerdem möglich das Attribut als Pflichtfeld zu definieren.

Cette définition permet de définir différentes possibilités de validation. Il est en outre possible de définir l'attribut comme champ obligatoire.

Sobald eine Validierung im Code definiert wurde, kann das Attribut in der i-doit Verwaltung nicht mehr für eine benutzerdefinierte Validierung verwendet werden.

Dès qu'une validation a été définie dans le code, l'attribut ne peut plus être utilisé dans l'administration i-doit pour une validation définie par l'utilisateur.