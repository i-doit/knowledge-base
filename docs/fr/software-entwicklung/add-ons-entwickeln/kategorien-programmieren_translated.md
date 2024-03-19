<!-- TRANSLATED by md-translate -->
# Kategorien programmieren

# Programmer des catégories

Kategorien sind das Kernstück von i-doit. Sie ermöglichen die Pflege von Informatione für spezifische Themenbereiche und bieten darüber hinaus weitere Funktionalitäten, um diese Daten sinnvoll zu nutzen. Sollte das Standardset an Kategorien mal nicht den Anforderungen genügen, schaffen "benutzerdefinierte Kategorien" Abhilfe. So können simple Anwendungsfälle über eine grafische Konfigurationsoberfläche ohne jegliche Programmierkenntnisse abgebildet werden. Sobald der Anwendungsfall jedoch eine mittlere Komplexität aufweist werden schnell die Limitierungen der "benutzerdefinierten Kategorien" sichtbar. An diesem Punkt hilft nur eine physische i-doit Kategorie.

Les catégories sont au cœur d'i-doit. Elles permettent de gérer des informations pour des thèmes spécifiques et offrent en outre d'autres fonctionnalités permettant d'utiliser ces données de manière judicieuse. Si le jeu de catégories standard ne répond pas aux exigences, les "catégories définies par l'utilisateur" permettent d'y remédier. Ainsi, des cas d'application simples peuvent être représentés via une interface de configuration graphique sans aucune connaissance en programmation. Toutefois, dès que le cas d'application présente une complexité moyenne, les limites des "catégories définies par l'utilisateur" deviennent rapidement visibles. À ce stade, seule une catégorie physique i-doit peut aider.

# Vorteile einer programmierten Kategorie

# Avantages d'une catégorie programmée

Programmierte Kategorien sind im Vergleich zu benutzerdefinierten Kategorien völlig frei im Bezug auf Darstellung und verwendete Formulartypen.

Les catégories programmées, par rapport aux catégories définies par l'utilisateur, sont totalement libres en ce qui concerne la présentation et les types de formulaires utilisés.

Darüber hinaus ist es möglich diese Art von Kategorien zu gruppieren, sodass im i-doit Frontend sogenannte "Ordner-Kategorien" dargestellt werden können (z.B. "Netzwerk", "Lokaler Massenspeicher" oder "Verkabelung").

En outre, il est possible de regrouper ce type de catégories, de sorte que des "catégories de dossiers" peuvent être représentées dans le frontend i-doit (par ex. "Réseau", "Mémoire de masse locale" ou "Câblage").

Aufgrund der selbst implementierten Datenhaltung ist es theoretisch ebenfalls möglich auf die API von Drittsystemen zuzugreifen und diese somit "on-the-fly" in i-doit einzubinden (siehe "Alle Tickets" oder "Monitoring" Kategorien).

En raison de la gestion des données implémentée en interne, il est théoriquement possible d'accéder à l'API de systèmes tiers et de les intégrer "à la volée" dans i-doit (voir "Tous les tickets" ou les catégories "Monitoring").

# Nachteile einer programmierten Kategorie

# Inconvénients d'une catégorie programmée

Freiheit bringt bekanntlich auch Verantwortung. Bei programmierten Kategorien verhält es sich ähnlich. Bei einer codebasierten Kategorie entscheidet der Entwickler über den angebotenen Funktionsumfang. Ferner sollte beachtet werden, dass der zugrundeliegende Code sich in das i-doit Ökosystem einbettet. Obwohl wir natürlich Breaking-Changes weitestgehend vermeiden, so ist es trotz allem nicht ausgeschlossen, dass Änderungen durch zukünftige Updates notwendig werden können.

La liberté, c'est bien connu, entraîne aussi des responsabilités. Il en va de même pour les catégories programmées. Dans le cas d'une catégorie basée sur le code, c'est le développeur qui décide de l'étendue des fonctions proposées. Il faut également veiller à ce que le code sous-jacent s'intègre dans l'écosystème i-doit. Bien que nous évitions autant que possible les breaking changes, il n'est pas exclu que des modifications soient nécessaires lors de futures mises à jour.

Darüber hinaus können bei Fehlern im eigenen Code, die zum Beispiel Datenverlust zur Folge haben, kein Support geleistet werden - um solche Fälle zu verhindern kann die Entwicklungspartner Plattform für den Austausch mit den i-doit Entwicklern genutzt werden.

De plus, il n'est pas possible de fournir un support en cas d'erreurs dans son propre code, qui entraîneraient par exemple une perte de données - pour éviter de tels cas, la plateforme des partenaires de développement peut être utilisée pour échanger avec les développeurs i-doit.

# Nötige Dateien für eine eigene Kategorie

# Fichiers nécessaires pour une catégorie propre

Um eine eigene globale Kategorie zu erstellen sind im Grunde nur drei Dateien nötig. Im Fall einer Multi-Value-Kategorie kommt noch eine vierte Datei hinzu:

Pour créer sa propre catégorie globale, il suffit en principe de trois fichiers. Dans le cas d'une catégorie multi-valeurs, un quatrième fichier vient s'ajouter :

## Data-Access-Object PHP Klasse

## Data-Access-Object PHP Class

Die sogenannte "Data-Access-Object"-Klasse (kurz DAO) wird benötigt, um die Attribute einer Kategorie zu definieren. Sie beinhaltet zusätzlich alle notwendigen Methoden, um mit den Daten der Datenbank zu interagieren. Das bedeutet: lesen, schreiben und löschen (CRUD).

La classe "Data-Access-Object" (en abrégé DAO) est nécessaire pour définir les attributs d'une catégorie. Elle contient en outre toutes les méthodes nécessaires pour interagir avec les données de la base de données. Cela signifie : lire, écrire et supprimer (CRUD).

Einfache Datenstrukturen können "out-of-the-box" durch i-doit behandelt werden. Hierbei kommen generische Funktionen zum Einsatz, welche auf Grundlage der Property-Definitionen agieren. Somit können CRUD-Operationen durchgeführt werden.

Les structures de données simples peuvent être traitées "out-of-the-box" par i-doit. Pour cela, des fonctions génériques sont utilisées, qui agissent sur la base des définitions de propriétés. Ainsi, les opérations CRUD peuvent être effectuées.

Sofern jedoch komplexere Datenstrukturen (n:m Verknüpfungen und Referenzen) verarbeitet werden sollen, müssen zwingend eigene Methoden für CRUD-Operationen bereitgestellt werden.

Toutefois, dans la mesure où des structures de données plus complexes (n:m liens et références) doivent être traitées, il est impératif de mettre à disposition des méthodes spécifiques pour les opérations CRUD.

## List DAO PHP Klasse (nur für Multi-Value)

## List DAO PHP Class (seulement pour Multi-Value)

Multi-Value-Kategorien bestehen aus zwei Teilen: Einer Liste und der Detailansicht eines Datensatzes. Für die Liste ist eine spezielle "List DAO" notwendig, welche die darzustellenden Attribute definiert. Mit Hilfe optionaler Methoden können die Kategorie-Daten für die GUI vorbereitet werden (z.B. zum Erstellen von Links oder Umformatieren der Werte).

Les catégories multi-valeurs se composent de deux parties : Une liste et une vue détaillée d'un enregistrement. Pour la liste, une "List DAO" spéciale est nécessaire, qui définit les attributs à afficher. Des méthodes optionnelles permettent de préparer les données des catégories pour l'IUG (par exemple pour créer des liens ou reformater les valeurs).

## User-Interface PHP Klasse

## Interface utilisateur classe PHP

Die User-Interface Klasse (kurz UI) stellt das Bindeglied zwischen dem i-doit Frontend und der DAO dar. Diese Klasse wird üblicherweise dazu verwendet, um Daten aus der dazugehörigen DAO zu verarbeiten und für das Smarty Template vorzubereiten.

La classe d'interface utilisateur (en abrégé UI) représente le lien entre le frontal i-doit et la DAO. Cette classe est généralement utilisée pour traiter les données de la DAO correspondante et les préparer pour le modèle Smarty.

Beinhaltet die Kategorie nur einfache Attribute ist es möglich diese Klasse leer zu lassen, da (ähnlich wie bei der DAO) i-doit diese Aufgabe selbstständig erledigen kann.

Si la catégorie ne contient que des attributs simples, il est possible de laisser cette classe vide, car (comme pour la DAO) i-doit peut se charger de cette tâche de manière autonome.

Sollte es sich allerdings um komplexe Daten oder eine eigene Darstellung im Frontend handeln, muss die zuständige Logik hier implementiert werden.

Toutefois, s'il s'agit de données complexes ou d'une représentation propre dans le frontend, la logique compétente doit être implémentée ici.

## Smarty Template

## Smarty Template

Das [Smarty](https://www.smarty.net/) Template wird benötigt, um die Daten aus der DAO bzw. UI für den User darzustellen. Das geschieht in Form von HTML. Anders als bei der DAO- und UI-Klasse, ist es nicht möglich diesen Prozess von i-doit erledigen zu lassen - das Template muss zwingend vorhanden sein und alle nötigen Aufgaben selbst erledigen.

Le modèle [Smarty](https://www.smarty.net/) est nécessaire pour présenter les données de la DAO ou de l'UI à l'utilisateur. Cela se fait sous forme de HTML. Contrairement à la classe DAO et UI, il n'est pas possible de laisser i-doit s'occuper de ce processus - le template doit impérativement être présent et effectuer lui-même toutes les tâches nécessaires.

Damit nicht jedes Template seine eigenen Formulare definieren muss, liefert der i-doit Kern viele "Smarty Plugins" mit, [dazu später mehr](kategorien-programmieren.md#smarty-plugins).

Pour que chaque modèle ne doive pas définir ses propres formulaires, le noyau i-doit fournit de nombreux "plugins Smarty", [nous y reviendrons plus tard](programmer-catégories.md#smarty-plugins).

# Nötige Vorbereitung für eine eigene Kategorie

# Préparation nécessaire pour une catégorie propre

Zusätzlich zu den PHP Dateien und dem Template benötigt eine Kategorie zwei weitere Teile:

En plus des fichiers PHP et du modèle, une catégorie nécessite deux autres parties :

1. Die Kategorie muss im Backend registriert werden. Dies geschieht mittels Datensatz in der Datenbanktabelle isysgui_catg
2. Die Kategorie benötigt eine eigene Datenbanktabelle

1. la catégorie doit être enregistrée dans le backend. Cela se fait au moyen d'un enregistrement dans la table de base de données isysgui_catg.
2. la catégorie a besoin de sa propre table de base de données

## Kategorie im Backend registrieren

## Enregistrer une catégorie dans le backend

Damit i-doit unsere Kategorie "kennt" und entsprechend verwenden kann, muss sie in der Tabelle isysgui_catg registriert werden. Das bedeutet, wir erzeugen einen Datensatz der auf die DAO Klasse und Kategorietabelle zeigt. Für die CPU-Kategorie sieht dieser Eintrag folgendermaßen aus:

Pour qu'i-doit "connaisse" notre catégorie et puisse l'utiliser en conséquence, elle doit être enregistrée dans la table isysgui_catg. Cela signifie que nous créons un enregistrement qui pointe vers la classe DAO et la table de catégories. Pour la catégorie CPU, cet enregistrement se présente comme suit :

```
INSERT INTO isysgui_catg SET
isysgui_catg__type = 2,
isysgui_catg__title = 'LC__CMDB__CATG__CPU',
isysgui_catg__const = 'C__CATG__CPU',
isysgui_catg__source_table = 'isys_catg_cpu',
isysgui_catg__class_name = 'isys_cmdb_dao_category_g_cpu',
isysgui_catg__parent = NULL,
isysgui_catg__list_multi_value = 1,
isysgui_catg__status = 2,
isysgui_catg__standard = 0,
isysgui_catg__overview = 1;
```

Die Tabelle beinhaltet noch andere Felder, die wir jedoch nicht mehr verwenden. Beim erzeugen eines Datensatzes können diese also ignoriert werden. Nachfolgend eine Erklärung zu den verschiedenen Feldern:

La table contient encore d'autres champs, mais nous ne les utilisons plus. Lors de la création d'un enregistrement, ceux-ci peuvent donc être ignorés. Ci-dessous, une explication sur les différents champs :

* isysgui_catg__type
Definiert den Kategorie "Typen" für die interne verwendung, wir verwenden die folgenden Typen:
1 - View: Eine Kategorie ohne eigene Daten bzw. Datenbanktabelle, sie stellt lediglich Daten dar, die in der UI-Klasse aufbereitet wurden.
2 - Edit: Eine normale Kategorie, die bearbeitet werden kann.
3 - Rückwärtige: Die "rückwärtige" Seite einer anderen Kategorie (z.B. "Personengruppen > Mitglieder").
4 - Zuweisung: Eine Kategorie, die lediglich Objektreferenzen zuweist (z.B. "Kontaktzuweisung").
* isysgui_catg__title
Beinhaltet die Sprache-Konstante der Kategorie.
* isysgui_catg__const
Beinhaltet die Konstante der Kategorie, diese ist sehr wichtig da sie intern als Identifikator dient (wir nutzen im Code keine IDs, da sich diese von Installation zu Installation ändern können).  
Die Kategorie-Konstante sollte IMMER dem Format `C__CATG__*` folgen und keine Sonderzeichen beinhalten, da diese von i-doit zu einer PHP-Konstante umgewandelt wird.
* isysgui_catg__source_table
Der Name der zugehörigen Datenbank Tabelle. Hierbei sollte beachtet werden, dass der Name NICHT mit "_list" endet, die eigentliche Datenbanktabelle allerdings schon.
* isysgui_catg__class_name
Der Name der zugehörigen DAO-Klasse.
* isysgui_catg__parent
Dieses Feld beinhaltet eine optionale Referenz zu einer anderen Kategorie. Diese entscheidet darüber, ob die Kategorie unterhalb einer anderen Kategorie dargestellt werden soll ("Ordner Kategorie")
* isysgui_catg__list_multi_value
Der Inhalt dieses Feldes (0 oder 1) entscheidet, ob eine Kategorie eine Multi-Value-Kategorie ist
* isysgui_catg__status
Der Status entscheidet, wie auch bei Objekten und Kategorien, ob der jeweilige Datensatz den "Normal" (= 2) Status hat und verwendet werden kann.
* isysgui_catg__standard
Eine "Standard"-Kategorie ist in jedem Objekttypen verfügbar und wird nur als Icon im Navigationsbaum eines Objektes dargestellt (siehe "Beziehungen", "Status Planung", "Alle Tickets" usw.)
* isysgui_catg__overview
Dieses Feld definiert, ob die Kategorie auf der Übersichtsseite verwendet werden kann oder nicht.

* isysgui_catg__type
Définit la catégorie "Types" pour l'utilisation interne, nous utilisons les types suivants :
1 - View : Une catégorie sans données propres ou table de base de données, elle représente uniquement des données qui ont été préparées dans la classe UI.
2 - Edit : une catégorie normale qui peut être éditée.
3 - Arrière : la page "arrière" d'une autre catégorie (par ex. "Groupes de personnes > Membres").
4 - Attribution : une catégorie qui attribue uniquement des références d'objet (par ex. "Attribution de contact").
* isysgui_catg__title
Contient la constante de langue de la catégorie.
* isysgui_catg__const
Contient la constante de la catégorie, celle-ci est très importante car elle sert d'identifiant en interne (nous n'utilisons pas d'identifiants dans le code, car ils peuvent changer d'une installation à l'autre).  
La constante de catégorie doit TOUJOURS suivre le format `C__CATG__*` et ne pas contenir de caractères spéciaux, car elle est convertie par i-doit en une constante PHP.
* isysgui_catg__source_table
Le nom de la table de la base de données correspondante. Il faut noter que le nom ne se termine PAS par "_list", mais que la table de base de données proprement dite l'est.
* isysgui_catg__class_name
Le nom de la classe DAO correspondante.
* isysgui_catg__parent
Ce champ contient une référence facultative à une autre catégorie. Celle-ci détermine si la catégorie doit être représentée en dessous d'une autre catégorie ("dossier catégorie").
* isysgui_catg__list_multi_value
Le contenu de ce champ (0 ou 1) détermine si une catégorie est une catégorie multi-valeurs.
* isysgui_catg__status
Le statut détermine, comme pour les objets et les catégories, si l'enregistrement concerné a le statut "Normal" (= 2) et peut être utilisé.
* isysgui_catg__standard
Une catégorie "standard" est disponible dans chaque type d'objet et n'est représentée que par une icône dans l'arbre de navigation d'un objet (voir "Relations", "Statut planification", "Tous les tickets", etc.)
* isysgui_catg__overview
Ce champ définit si la catégorie peut être utilisée ou non sur la page d'aperçu.

Diese notwendige Query wird idealerweise bei der Installation des eigenen Add-ons ausgeführt, siehe dazu auch den Artikel "[Add-ons installieren, aktualisieren und aktivieren](add-ons-installieren-aktualisieren-und-entwickeln.md)".

Cette requête nécessaire est idéalement effectuée lors de l'installation du propre add-on, voir aussi l'article "[Installer, mettre à jour et activer les add-ons](add-ons-installer-mettre à jour-et-développer.md)".

## Kategorie Datenbanktabelle

## Catégorie Table de base de données

Eine Kategorie benötigt eine Reihe an vorgegebenen Feldern, damit i-doit globales Verhalten im Bezug auf die Kategorien abbilden kann.

Une catégorie nécessite une série de champs prédéfinis pour qu'i-doit puisse reproduire un comportement global par rapport aux catégories.

```
CREATE TABLE isys_catg_cpu_list (
    isys_catg_cpu_list__id int(10) unsigned NOT NULL AUTO_INCREMENT,
    isys_catg_cpu_list__isys_catg_cpu_manufacturer__id int(10) unsigned DEFAULT NULL,
    isys_catg_cpu_list__isys_catg_cpu_type__id int(10) unsigned DEFAULT NULL,
    isys_catg_cpu_list__title varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
    isys_catg_cpu_list__frequency bigint(15) unsigned DEFAULT NULL,
    isys_catg_cpu_list__description longtext COLLATE utf8_unicode_ci DEFAULT NULL,
    isys_catg_cpu_list__status int(10) unsigned DEFAULT 1,
    isys_catg_cpu_list__property int(10) unsigned DEFAULT 0,
    isys_catg_cpu_list__isys_obj__id int(10) unsigned DEFAULT NULL,
    isys_catg_cpu_list__isys_frequency_unit__id int(10) unsigned DEFAULT NULL,
    isys_catg_cpu_list__cores int(10) unsigned DEFAULT NULL,
    PRIMARY KEY (isys_catg_cpu_list__id),
    KEY isys_catg_cpu_list_FKIndex2 (isys_catg_cpu_list__isys_catg_cpu_manufacturer__id),
    KEY isys_catg_cpu_list_FKIndex3 (isys_catg_cpu_list__isys_catg_cpu_type__id),
    KEY isys_catg_cpu_list__isys_obj__id (isys_catg_cpu_list__isys_obj__id),
    KEY isys_catg_cpu_list__isys_frequency_unit__id (isys_catg_cpu_list__isys_frequency_unit__id),
    KEY isys_catg_cpu_list__status (isys_catg_cpu_list__status),
    CONSTRAINT isys_catg_cpu_list__isys_frequency_unit__id FOREIGN KEY (isys_catg_cpu_list__isys_frequency_unit__id) REFERENCES isys_frequency_unit (isys_frequency_unit__id) ON DELETE SET NULL ON UPDATE CASCADE,
    CONSTRAINT isys_catg_cpu_list_ibfk_5 FOREIGN KEY (isys_catg_cpu_list__isys_obj__id) REFERENCES isys_obj (isys_obj__id) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT isys_catg_cpu_list_ibfk_6 FOREIGN KEY (isys_catg_cpu_list__isys_catg_cpu_manufacturer__id) REFERENCES isys_catg_cpu_manufacturer (isys_catg_cpu_manufacturer__id) ON DELETE SET NULL ON UPDATE CASCADE,
    CONSTRAINT isys_catg_cpu_list_ibfk_7 FOREIGN KEY (isys_catg_cpu_list__isys_catg_cpu_type__id) REFERENCES isys_catg_cpu_type (isys_catg_cpu_type__id) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
```

[Hier gibt es weitere Informationen zu unseren Datenbanktabellen.](../datenbank-modell/index.md)

[Vous trouverez ici de plus amples informations sur nos tables de base de données](../datenbank-modell/index.md)

Hierbei bitte beachten, dass Kategorietabellen den Prefix "isys_catg_" und den Suffix "_list" enthalten müssen.

Veuillez noter ici que les tableaux de catégories doivent contenir le préfixe "isys_catg_" et le suffixe "_list".

Die folgenden vier Tabellenfelder werden von i-doit benötigt und müssen immer Bestandteil einer Kategorietabelle sein:

Les quatre champs de tableau suivants sont nécessaires à i-doit et doivent toujours faire partie d'un tableau de catégories :

|     |     |
| --- | --- |
| 1<br><br>2<br><br>3<br><br>4 | ___id<br><br>___isys_obj__id<br><br>___description<br><br>___status |

| | |
| --- | --- |
| 1<br><br>2<br><br>3<br><br>4 | ___id<br><br>___isys_obj__id<br><br>___description<br><br>___status |

Alle weiteren Felder können für die eigenen Kategoriedaten verwendet werden.

Tous les autres champs peuvent être utilisés pour les propres données de la catégorie.

Auch die Query, zum Erzeugen der Tabelle, wird idealerweise bei der Installation des eigenen Add-ons ausgeführt, siehe dazu auch den Artikel "[Add-ons installieren, aktualisieren und aktivieren](add-ons-installieren-aktualisieren-und-entwickeln.md)".

La requête, pour créer le tableau, est également exécutée idéalement lors de l'installation du propre add-on, voir à ce sujet l'article "[Installer, mettre à jour et activer les add-ons](add-ons-installer-mettre à jour-et-développer.md)".

# DAO Klasse

# Classe DAO

## Mindestvoraussetzung / Grundlagen

## Prérequis minimum / bases

Eine DAO Klasse muss folgende Bedingungen erfüllen:

Une classe DAO doit remplir les conditions suivantes :

* Die Klasse muss von isys_cmdb_dao_category_global erben
* Die Klasse benötigt zwingend den "identifier", der sich im Klassennamen, der Tabelle und anderen Stellen wiederfindet via:
protected $m_category = 'identifier';
* Wenn es sich um eine Multi-Value-Kategorie handelt, muss die Klasse die folgende Variable mitliefern:
protected $m_multivalued = true;
* Um unnötige SQL Queries zu verhindern, liefern wir außerdem den Namen der Kategorie in einer Variable mit:
protected $categoryTitle = 'LC__CMDB__CATG__...';
* Die DAO-Klasse muss zwingend die dazugehörigen Attribute definieren. Das geschieht mittels der Methode:
protected function properties()

* La classe doit hériter de isys_cmdb_dao_category_global.
* La classe a impérativement besoin de l'"identifier", qui se retrouve dans le nom de la classe, la table et d'autres endroits via :
protected $m_category = 'identifier' ;
* S'il s'agit d'une catégorie multi-valeurs, la classe doit aussi fournir la variable suivante :
protected $m_multivalued = true ;
* Pour éviter les requêtes SQL inutiles, nous fournissons également le nom de la catégorie dans une variable :
protected $categoryTitle = 'LC__CMDB__CATG__...' ;
* La classe DAO doit impérativement définir les attributs correspondants. Cela se fait au moyen de la méthode :
protected function properties()

Darüber hinaus gibt es noch einige andere wichtige Variablen die von i-doit genutzt werden - in den meisten Fällen müssen diese aber nicht explizit definiert werden, da i-doit dies auf Basis der $m_category Variable selbst erledigen kann. Die Voraussetzung dafür ist, dass ein einheitliches Naming verwendet wird.

En outre, il existe encore quelques autres variables importantes utilisées par i-doit - mais dans la plupart des cas, il n'est pas nécessaire de les définir explicitement, car i-doit peut le faire lui-même sur la base de la variable $m_category. La condition pour cela est d'utiliser un naming uniforme.

Die folgenden Variablen werden von i-doit selbst erzeugt:

Les variables suivantes sont créées par i-doit lui-même :

* protected $m_category_const = 'C__CATG__<identifier>';
Wird die Konstante beinhalten, mit deren Hilfe die Kategorie identifiziert werden kann.
* protected $m_category_id = 123;
Beinhaltet die ID der Konstante und wird mit Hilfe der Konstante aufgelöst.
* protected $m_table = 'isys_catg_<identifier>_list';
Beinhaltet den Namen der Tabelle, der für interne Prozesse verwendet wird.
* protected $m_ui = 'isys_cmdb_ui_category_g_<identifier>';
Der Name der zuständigen UI Klasse.
* protected $m_list = 'isys_cmdb_dao_list_<identifier>';
Der Name der zuständigen List DAO (nur bei Multi-Value-Kategorien).
* protected $m_tpl = 'catg__<identifier>.tpl';
Der Name des zuständigen Templates, welches in der UI Klasse verwendet werden soll.

* protected $m_category_const = 'C__CATG__<identifier>' ;
Contiendra la constante qui permet d'identifier la catégorie.
* protected $m_category_id = 123 ;
Contient l'ID de la constante et est résolu à l'aide de la constante.
* protected $m_table = 'isys_catg_<identifier>_list' ;
Contient le nom de la table qui est utilisée pour les processus internes.
* protected $m_ui = 'isys_cmdb_ui_category_g_<identifier>' ;
Le nom de la classe UI responsable.
* protected $m_list = 'isys_cmdb_dao_list_<identifier>' ;
Le nom de la List DAO responsable (uniquement pour les catégories multi-valeurs).
* protected $m_tpl = 'catg__<identifier>.tpl' ;
Le nom du template responsable qui doit être utilisé dans la classe UI.

## Attribut-Definition

## Définition de l'attribut

Die Attribut-Definition stellt (neben den Metainformationen) das Herzstück einer Kategorie dar. Attribute müssen in der Methode properties definiert und in Array-Form zurückgeliefert werden.Für die Definition selbst gibt es zwei Optionen:

La définition des attributs constitue (avec les méta-informations) le cœur d'une catégorie. Les attributs doivent être définis dans la méthode properties et renvoyés sous forme de tableau :

### Array Notation (veraltet)

### Notation de tableau (obsolète)

**Achtung: Die veraltete Arraynotation sollte, wenn möglich, nicht länger verwendet werden. Die "Property Factory" Klassen bieten eine komfortable und sichere Alternative.**

**Attention : la notation arraynote obsolète ne devrait plus être utilisée, si possible. Les classes "Property Factory" offrent une alternative confortable et sûre.**

In den meisten Kategorien findet man eine recht umfangreiche Definition auf Basis eines PHP Arrays pro Attribut. Für gewöhnlich nutzen wir ein "property pattern" als Ausgangspunkt für Definitionen, die z.B. für alle Text-Attribute gleich bleiben. Da ein Attribut allerdings auch immer eigene Definitionen benötigt (Name, Datenbankfelder, …), fügen wir diese mittels array_replace_recursive() hinzu. Eine detaillierte Erklärung der wichtigsten Attributdefinitionen sind [in diesem Artikel zu finden](attribut-definition.md).

Dans la plupart des catégories, on trouve une définition assez complète basée sur un tableau PHP par attribut. En général, nous utilisons un "property pattern" comme point de départ pour les définitions, qui restent par exemple identiques pour tous les attributs de texte. Mais comme un attribut a toujours besoin de ses propres définitions (nom, champs de base de données, ...), nous les ajoutons à l'aide de array_replace_recursive(). Une explication détaillée des principales définitions d'attributs se trouve [dans cet article](attribut-definition.md).

Beispiel aus der CPU Kategorie

Exemple de la catégorie CPU

```
protected function properties()
{
    return [
        'title' => array_replace_recursive(isys_cmdb_dao_category_pattern::text(), [
            C__PROPERTY__INFO     => [
                C__PROPERTY__INFO__TITLE       => 'LC__CMDB__CATG__CPU_TITLE',
                C__PROPERTY__INFO__DESCRIPTION => 'Title'
            ],
            C__PROPERTY__DATA     => [
                C__PROPERTY__DATA__FIELD => 'isys_catg_cpu_list__title'
            ],
            C__PROPERTY__PROVIDES => [
                C__PROPERTY__PROVIDES__LIST   => true,
                C__PROPERTY__PROVIDES__REPORT => true
            ],
            C__PROPERTY__UI       => [
                C__PROPERTY__UI__ID => 'C__CATG__CPU_TITLE'
            ]
        ]),

    // ...
```

### Property Factory

### Property Factory

Seit i-doit Version 1.12.3 gibt es sogenannte "Property Factory" Klassen, die unsere alten Arraynotationen ablösen. Der Vorteil wird sofort deutlich: Aufgrund der objekt-orientierten Programmierung können viele Bereiche der Definition eingespart werden, da diese für gewöhnlich immer sehr ähnlich sind und z.B. auf dem "Identifier" des Attributs, sowie dem Datenbankfeld basieren.

Depuis la version 1.12.3 d'i-doit, il existe des classes dites "Property Factory" qui remplacent nos anciennes notations d'arrays. L'avantage est immédiatement visible : en raison de la programmation orientée objet, de nombreux domaines de définition peuvent être économisés, car ceux-ci sont généralement toujours très similaires et se basent par exemple sur l'"identifiant" de l'attribut, ainsi que sur le champ de la base de données.

Für die meisten Standardfälle (Textfeld, Dialogfeld, Objektbrowser) gibt es entsprechende Klassen, ähnlich wie bei den "property patterns". Sowohl die "Array Notation" als auch die "Property Factory" Option beinhalten im Endeffekt die gleichen Informationen - eine detaillierte Erklärung der wichtigsten Attribut Definitionen sind [in diesem Artikel zu finden](attribut-definition.md).

Pour la plupart des cas standard (zone de texte, boîte de dialogue, navigateur d'objets), il existe des classes correspondantes, comme pour les "property patterns". Les deux options "Array Notation" et "Property Factory" contiennent en fin de compte les mêmes informations - une explication détaillée des principales définitions d'attributs se trouve [dans cet article](attribut-definition.md).

Beispiel aus der AUDIT Kategorie

Exemple de la catégorie AUDIT

```
protected function properties()
{
    return [
        'title' => (new TextProperty(
            'C__CMDB__CATG__AUDIT__TITLE',
            'LC__CMDB__CATG__AUDIT__TITLE',
            'isys_catg_audit_list__title',
            'isys_catg_audit_list'
    )),

// ...
```

## Lesende Zugriffe (optional)

## Accès en lecture (facultatif)

i-doit verwendet die Methode get_data zum Auslesen von Kategorie-Daten. Für gewöhnlich ist die generische Methode der vererbten Klassen ausreichend für diese Aufgabe. In bestimmten Fällen kann es aber Sinnvoll sein diese Methode selbst zu implementieren, um zum Beispiel eine bessere Performance zu erzielen:

i-doit utilise la méthode get_data pour extraire les données de catégorie. En général, la méthode générique des classes héritées est suffisante pour cette tâche. Dans certains cas, il peut cependant être utile d'implémenter cette méthode soi-même, par exemple pour obtenir de meilleures performances :

Beispiel aus der CPU Kategorie

Exemple de la catégorie CPU

```
/**
* Get data method for retrieving data.
*
* @param int    $p_catg_list_id
* @param int    $p_obj_id
* @param string $p_condition
* @param array  $p_filter
* @param int    $p_status
*
* @return isys_component_dao_result
* @throws isys_exception_database
*/
public function get_data($p_catg_list_id = null, $p_obj_id = null, $p_condition = '', $p_filter = null, $p_status = null)
{
    $l_sql = 'SELECT * FROM isys_catg_cpu_list
        INNER JOIN isys_obj ON isys_catg_cpu_list__isys_obj__id = isys_obj__id
        INNER JOIN isys_obj_type ON isys_obj__isys_obj_type__id = isys_obj_type__id
        LEFT JOIN isys_catg_cpu_manufacturer ON isys_catg_cpu_manufacturer__id = isys_catg_cpu_list__isys_catg_cpu_manufacturer__id
        LEFT JOIN isys_catg_cpu_type ON isys_catg_cpu_type__id = isys_catg_cpu_list__isys_catg_cpu_type__id
        LEFT JOIN isys_frequency_unit ON isys_catg_cpu_list__isys_frequency_unit__id = isys_frequency_unit__id
        WHERE TRUE ' . $p_condition . ' ' . $this->prepare_filter($p_filter) . ' ';

    if ($p_obj_id !== null) {
        $l_sql .= $this->get_object_condition($p_obj_id);
    }

    if ($p_catg_list_id !== null) {
        $l_sql .= ' AND isys_catg_cpu_list__id = ' . $this->convert_sql_id($p_catg_list_id);
    }

    if ($p_status !== null) {
        $l_sql .= ' AND isys_catg_cpu_list__status = ' . $this->convert_sql_int($p_status);
    }

    return $this->retrieve($l_sql);

}
```

Diese Methode wird von allen internen Stellen verwendet, um objektspezifische Daten aus der Kategorie zu lesen. Um eine möglichst hohe Kompatibilität mit allen Kernfunktionen zu garantieren, müssen sowohl Objekt als auch Objekttypinformationen zum geladenen Datensatz mitgeliefert werden. Das geschieht mittels LEFT JOIN isys_obj [...] und LEFT JOIN isys_obj_type […].

Cette méthode est utilisée par tous les services internes pour lire les données spécifiques à l'objet dans la catégorie. Afin de garantir une compatibilité maximale avec toutes les fonctions de base, les informations relatives à l'objet et au type d'objet doivent être fournies avec l'enregistrement chargé. Cela se fait au moyen de LEFT JOIN isys_obj [...] et LEFT JOIN isys_obj_type [...].

Die Bedingungen für die SQL Query können im Idealfall exakt übernommen werden, einzig der Tabellen- und die Feldnamen gilt es anzupassen.

Dans le cas idéal, les conditions de la requête SQL peuvent être reprises exactement, seuls les noms des tables et des champs doivent être adaptés.

## Schreibende Zugriffe (optional)

## Accès en écriture (facultatif)

i-doit verwendet eine Reihe von Methoden zum Erstellen und Aktualisieren von Kategorie-Daten. Für gewöhnlich kann dies ohne weitere Logik intern verarbeitet werden.

i-doit utilise une série de méthodes pour créer et mettre à jour les données de catégorie. En général, cela peut être traité en interne sans logique supplémentaire.

Bei komplexen Anwendungsfällen kann es jedoch notwendig werden diese Methoden selbst zu implementieren. Für gewöhnlich sollte es ausreichen die folgenden zwei Methoden zu implementieren:

Pour les cas d'application complexes, il peut toutefois être nécessaire d'implémenter ces méthodes soi-même. En général, il devrait suffire d'implémenter les deux méthodes suivantes :

### Create Data Methode

### Méthode Create Data

Wie der Name schon sagt wird die Methode create_data dazu verwendet, um Kategoriedaten initial zu erstellen. Die Daten werden in einem einfachen "Key-Value-Array" an die Methode übergeben.

Comme son nom l'indique, la méthode create_data est utilisée pour créer initialement des données de catégorie. Les données sont transmises à la méthode dans un simple "tableau de valeurs clés".

Die Schlüssel entsprechen hierbei den Attribut-Schlüsseln, siehe [Attribut-Definition](attribut-definition.md).

Les clés correspondent ici aux clés d'attributs, voir [définition d'attribut](attribut-definition.md).

Die weitere Verarbeitung der Daten kann hier auf zwei verschiedene Arten erfolgen:

Le traitement ultérieur des données peut ici se faire de deux manières différentes :

1. Anpassen einzelner Attribut-Daten und anschließende Weiterleitung an parent::create_data. Dies wird beispielsweise in der Passwort-Kategorie verwendet: Wir verschlüsseln das Passwort und lassen die übergeordnete Methode den Datensatz mit Hilfe von generischer Logik speichern.
Ein anderes BeisReihenfolge der Datenübergabepiel ist die Monitor-Kategorie. Hier wird lediglich die Bildschirmgröße entsprechend der ausgewählten "Einheit" berechnet und ebenfalls an parent::create_data übergeben.
2. Theoretisch können wir an dieser Stelle die "INSERT INTO …" Query selbst erzeugen und an die Datenbank übermitteln. Dies wird nicht empfohlen und auch von i-doits Kern-Kategorien nicht gemacht!
Diese Option sollte nur dann gewählt werden, wenn ein komplexer Datensatz nicht von der generischen Implementierung gespeichert werden kann.

1. adapter les données d'attributs individuelles et les transmettre ensuite à parent::create_data. Ceci est utilisé par exemple dans la catégorie des mots de passe : Nous encodons le mot de passe et laissons la méthode parente enregistrer l'ensemble de données à l'aide de la logique générique.
Un autre exemple de transfert de données est la catégorie moniteur. Ici, seule la taille de l'écran est calculée en fonction de l'"unité" sélectionnée et transmise également à parent::create_data.
2. en théorie, nous pouvons à ce stade créer la "INSERT INTO ..." dans la base de données. Query elle-même et la transmettre à la base de données. Ceci n'est pas recommandé et n'est pas non plus fait par les catégories de base d'i-doits !
Cette option ne devrait être choisie que lorsqu'un ensemble de données complexe ne peut pas être enregistré par l'implémentation générique.

### Save Data Methode

### Méthode Save Data

Die gleichnamige save_data-Methode funktioniert exakt wie create_data. Es gibt nur einen einzigen Unterschied: Der erste Parameter der Methode beinhaltet die Datensatz ID des jeweiligen Eintrags.

La méthode save_data du même nom fonctionne exactement comme create_data. Il n'y a qu'une seule différence : le premier paramètre de la méthode contient l'ID de l'enregistrement correspondant.

### Sync Methode

### Méthode de synchronisation

Sollte es beim Speichern von Kategorie-Daten mittels API, CSV-Import oder Listeneditierung zu Fehlern kommen, ist es möglich das die zuständige sync Methode selbst implementiert werden muss. Bei der Verwendung von create_data und save_data ist dies allerdings auszuschließen und dürfte nur Kategorien betreffen, die noch veraltete Speicherlogik nutzen.

Si des erreurs se produisent lors de l'enregistrement des données de catégorie via l'API, l'importation CSV ou l'édition de listes, il est possible que la méthode sync responsable doive être implémentée elle-même. En utilisant create_data et save_data, cela est toutefois exclu et ne devrait concerner que les catégories qui utilisent encore une logique de stockage obsolète.

### Sicherheit in SQL Queries

### Sécurité dans les requêtes SQL

Um sogenannter [SQL-Injection](https://de.wikipedia.org/wiki/SQL-Injection) und auch [XSS](https://de.wikipedia.org/wiki/Cross-Site-Scripting) vorzubeugen, liefert i-doit einige interne Helfer zum Säubern von Inhalten, die durch den User eingegeben werden. Konkret stellt jede DAO eine Reihe von Methoden bereit, die für verschiedene Einsatzzwecke gedacht sind:

Afin de prévenir les injections SQL (https://de.wikipedia.org/wiki/SQL-Injection) et XSS (https://de.wikipedia.org/wiki/Cross-Site-Scripting), i-doit fournit des outils internes pour nettoyer le contenu saisi par l'utilisateur. Concrètement, chaque DAO met à disposition une série de méthodes destinées à différentes utilisations :

* convert_sql_id
Diese Methode formatiert jeden übergebenen Wert zu einer Ganzzahl. Sollte das Ergebnis kleiner oder gleich 0 sein, wird 'NULL' zurückgeliefert.
* convert_sql_int
Wird jeden übergebenen Wert zur Ganzzahl formatieren. Lediglich der Leerwert NULL wird auch zum SQL Leerwert 'NULL'.
* convert_sql_float
Ähnlich wie convert_sql_int, nur für Kommazahlen. Hier wird außerdem eine interne Funktion verwendet, um beliebige Formate (Tausendertrennzeichen, Dezimaltrennzeichen, etc.) zu vereinheitlichen, sodass diese mit SQL kompatibel sind.
* convert_sql_text
Diese Methode wird den übergebenen Text formatieren, so dass jegliche Zeichen, die für [SQL-Injection](https://de.wikipedia.org/wiki/SQL-Injection) genutzt werden, nicht länger gefährlich sind.
* convert_sql_boolean
Diese Methode kann genutzt werden, um beliebige Werte zu 1 (für Wahr) oder 0 (für Falsch) zu formatieren.
* convert_sql_datetime
Mit dieser Methode wird ein Datum in die SQL konforme Schreibweise geändert. Es lassen sich Zeichenketten, Timestamp Werte, "NOW()" oder "CURDATE()" übergeben.
* convert_sql_point
Kann genutzt werden um "Coordinate"-Instanzen für SQL "geometry" Felder zu formatieren (zum Beispiel für GPS Koordinaten)

* convert_sql_id
Cette méthode formate chaque valeur transmise en un nombre entier. Si le résultat est inférieur ou égal à 0, 'NULL' est retourné.
* convert_sql_int
Formate chaque valeur transmise en un nombre entier. Seule la valeur vide NULL devient également une valeur vide SQL 'NULL'.
* convert_sql_float
Similaire à convert_sql_int, mais pour les nombres à virgule. Ici, une fonction interne est en outre utilisée pour uniformiser n'importe quel format (séparateur des milliers, séparateur des décimales, etc.) afin qu'il soit compatible avec SQL.
* convert_sql_text
Cette méthode formatera le texte passé en paramètre afin que tout caractère utilisé pour [SQL Injection](https://de.wikipedia.org/wiki/SQL-Injection) ne soit plus dangereux.
* convert_sql_boolean
Cette méthode peut être utilisée pour formater n'importe quelle valeur en 1 (pour vrai) ou 0 (pour faux).
* convert_sql_datetime
Cette méthode permet de modifier une date en écriture conforme à SQL. Il est possible de passer des chaînes de caractères, des valeurs d'horodatage, "NOW()" ou "CURDATE()".
* convert_sql_point
Peut être utilisé pour formater les instances "Coordinate" pour les champs SQL "geometry" (par exemple pour les coordonnées GPS).

Für den Fall das HTML in die Datenbank gespeichert werden soll, können wir darüber hinaus den "[HTML Purifier](http://htmlpurifier.org/)" nutzen, um möglichen Schadcode aus dem HTML zu entfernen. Dieser befindet sich im i-doit Dependency Injection Container und kann folgendermaßen genutzt werden:

Dans le cas où le HTML doit être enregistré dans la base de données, nous pouvons en outre utiliser le "[HTML Purifier](http://htmlpurifier.org/)" pour supprimer un éventuel code malveillant du HTML. Celui-ci se trouve dans le conteneur d'injection de dépendances i-doit et peut être utilisé de la manière suivante :

```
$safe = isys_application::instance()
    ->container
    ->get('htmlpurifier')
    ->purify($unsafe);
```

In diesem Beispiel wird der "unsichere" Inhalt von $unsafe gesäubert und in $safe hinterlegt.

Dans cet exemple, le contenu "non sécurisé" de $unsafe est nettoyé et déposé dans $safe.

# UI Klasse

# Classe UI

## Frontend Vorbereiten via process

## Préparation du front-end via process

Diese Methode wird aufgerufen, wenn ein User im i-doit-Frontend in die Kategorie hinein navigiert. Diese Methode kann, sofern es sich um eine "einfache" Kategorie (also ohne spezielle Logik) handelt, übersprungen werden, da i-doit alle notwendigen Daten selbstständig verarbeiten kann.

Cette méthode est appelée lorsqu'un utilisateur navigue dans la catégorie dans le frontend d'i-doit. Cette méthode peut être ignorée s'il s'agit d'une catégorie "simple" (donc sans logique particulière), car i-doit peut traiter toutes les données nécessaires de manière autonome.

Damit ist das auslesen der Kategorie Daten zum jeweiligen Objekt und die übergabe an das Template gemeint. Außerdem werden die "UI Parameter" aus der Attribut-Definition an das Template übergeben (mehr dazu im Bereich "[Reihenfolge der Datenübergabe](#reihenfolge-der-daten%C3%BCbergabe)")

Cela signifie la lecture des données de la catégorie de l'objet concerné et le transfert au modèle. En outre, les "paramètres UI" de la définition des attributs sont transmis au modèle (plus d'informations à ce sujet dans la section "[ordre de transmission des données](#ordre-de-transmission-des-données%C3%BC)").

Im Fall einer "View"-Kategorie oder komplexen Daten, die vor der Übergabe an das Template verarbeitet werden müssen, muss die "process"-Methode genutzt und die zugrundeliegenden Daten manuell an das Template weitergeleitet werden.

Dans le cas d'une catégorie "view" ou de données complexes qui doivent être traitées avant d'être transmises au modèle, la méthode "process" doit être utilisée et les données sous-jacentes doivent être transmises manuellement au modèle.

Die übergabe an das Template kann auf zwei Arten geschehen:

Le transfert vers le modèle peut se faire de deux manières :

### Direkte Zuordnung von Variablen an das Template

### Affectation directe de variables au modèle

Innerhalb der UI-Klasse haben wir Zugriff auf die Smarty-Instanz und können mittels assign('key', 'value') Daten an das Template übermitteln:

Au sein de la classe UI, nous avons accès à l'instance Smarty et pouvons transmettre des données au modèle à l'aide de assign('key', 'value') :

```
$this
    ->get_template_component()
    ->assign('templateVar', $phpVar);
```

Innerhalb des Templates kann nun mit Hilfe der leicht angepassten [Smarty Syntax](https://www.smarty.net/docsv2/en/language.basic.syntax.tpl) unsere Variable ausgegeben werden:

A l'intérieur du modèle, notre variable peut maintenant être éditée à l'aide de la [Smarty Syntax](https://www.smarty.net/docsv2/en/language.basic.syntax.tpl) légèrement adaptée :

```
[{$templateVar}]
```

### Übergabe der Daten an Smarty-Plugins mittels "TOM" und "rules"

### Transfert des données vers les plugins Smarty via "TOM" et "rules".

i-doit verfügt über ein eigenes Sub-System zum Verteilen von Daten an [Smarty Plugins](https://www.smarty.net/docsv2/en/plugins.tpl). Das funktioniert mit Hilfe des "Template Object Models" (kurz TOM) und den sogenannten "rules".

i-doit dispose de son propre sous-système pour distribuer des données à [Smarty Plugins](https://www.smarty.net/docsv2/en/plugins.tpl). Cela fonctionne à l'aide du "Template Object Model" (en abrégé TOM) et de ce que l'on appelle les "rules".

Über das TOM werden verschiedene Bereiche des i-doit-Frontend definiert, siehe hierzu folgende Darstellung:

Le TOM permet de définir différentes zones du front-end i-doit, voir à ce sujet la représentation suivante :

[![kategorien-TOM](../../assets/images/de/software-entwicklung/add-ons-entwickeln/kategorie-programmieren/tom-areas.png)](../../assets/images/de/software-entwicklung/add-ons-entwickeln/kategorie-programmieren/tom-areas.png)

[ ![kategorien-TOM](../../assets/images/fr/software-entwicklung/add-ons-entwickeln/kategorie-programmieren/tom-areas.png)](../../assets/images/fr/software-wicklung/add-ons-wickeln/kategorie-programmieren/tom-areas.png)

Die Kategorie-Templates werden im "contentbottomcontent"-Bereich dargestellt, der zugehörige TOM-Pfad lautet "tom.content.bottom.content". Um Daten aus der UI- Klasse in die Smarty-Plugins zu leiten, müssen wir folgende Codezeilen schreiben:

Les modèles de catégorie sont représentés dans la zone "contentbottomcontent", le chemin TOM correspondant est "tom.content.bottom.content". Pour transférer les données de la classe UI vers les plug-ins Smarty, nous devons écrire les lignes de code suivantes :

```
$rulesArray = [
    'C__CATG__ATTRIBUTE_ID' => [
        'p_strValue' => 'Test'
        // ...
    ]
];

$this
    ->get_template_component()
    ->smarty_tom_add_rules('tom.content.bottom.content', $rulesArray);
```

In unserem Template können wir nun ein Smarty Plugin nutzen, um den Wert "Test" in einem Textfeld auszugeben. Dafür ist folgende Syntax nötig:

Dans notre modèle, nous pouvons maintenant utiliser un plugin Smarty pour afficher la valeur "Test" dans un champ de texte. Pour cela, la syntaxe suivante est nécessaire :

```
[{isys type="f_text" name="C__CATG__ATTRIBUTE_ID"}]
```

Würden wir nun unsere Kategorie öffnen, würde das Template (je nach View / Edit Modus) den Text bzw. ein Textfeld mit dem Inhalt "Test" darstellen.

Si nous ouvrions maintenant notre catégorie, le modèle afficherait (selon le mode View / Edit) le texte ou un champ de texte avec le contenu "Test".

Je nach Smarty-Plugin gibt es eine Reihe verschiedener Parameter, die man übergeben kann, um die jeweiligen Formularfelder mit Daten zu befüllen. Im Quelltext findet man die verschiedenen Plugins im Verzeichnis <i-doit>/src/classes/smarty. Weitere Beispiele folgen im Bereich "[Smarty Plugins](#smarty-plugins)".

Selon le plugin Smarty, il existe une série de paramètres différents que l'on peut transmettre pour remplir les champs de formulaire respectifs avec des données. Dans le code source, on trouve les différents plugins dans le répertoire <i-doit>/src/classes/smarty. D'autres exemples suivent dans la section "[Smarty Plugins](#smarty-plugins)".

## Liste vorbereiten via process_list (nur Multi-Value-Kategorien)

## Préparer la liste via process_list (uniquement les catégories multi-valeurs)

Diese Methode wird aufgerufen, sobald ein User in eine Multi-Value-Kategorie navigiert. Sie ist hauptsächlich dafür verantwortlich die Tabelle vorzubereiten. Für gewöhnlich muss diese Methode nicht selbst implementiert werden - einzig Kategorien vom Typ "Zuweisung" müssen dies tun, um die "Hinzufügen" -Schaltfläche mit einer "Objekt-Browser"-Instanz zu koppeln.

Cette méthode est appelée dès qu'un utilisateur navigue dans une catégorie multi-valeurs. Elle est principalement responsable de la préparation du tableau. En général, cette méthode n'a pas besoin d'être implémentée - seules les catégories de type "Attribution" doivent l'être, afin de coupler le bouton "Ajouter" à une instance "Navigateur d'objets".

Das geschieht mittels $this->object_browser_as_new(...). Es gibt eine Reihe an notwendigen Parametern, die man sich am besten aus Kategorien, wie zum Beispiel der "Kontaktzuweisung" oder "Stacking", abschaut.

Cela se fait au moyen de $this->object_browser_as_new(...). Il existe un certain nombre de paramètres nécessaires, qu'il est préférable d'emprunter à des catégories telles que "Attribution de contacts" ou "Stacking".

Anschließend kann parent::process_list() mit allen Parametern aufgerufen werden, damit i-doit den Rest übernimmt.

Ensuite, parent::process_list() peut être appelé avec tous les paramètres pour que i-doit se charge du reste.

# Kategorie-Template

# Modèle de catégorie

## Genereller Aufbau

## Structure générale

Der hier beschriebene generelle Aufbau bezieht sich auf Kategorien, die im i-doit "Look and Feel" dargestellt werden sollen. Hier benötigen wir nur eine einfache Tabelle mit vorgegebenen CSS Klassen:

La structure générale décrite ici se rapporte aux catégories qui doivent être représentées dans le "look and feel" i-doit. Ici, nous n'avons besoin que d'un simple tableau avec des classes CSS prédéfinies :

<table class="contentTable">
    <tr>
        <td class="key">Label</td>
        <td class="value">Form field</td>
    </tr>
    <tr>
        <td colspan="2">
            <hr class="mt5 mb5" />
        </td>
    </tr>
    <tr>
        <td class="key">
            [{isys type='f_label' name='C__CATG__ATTRIBUTE_ID' ident="LC__LANGUAGE_CONSTANT"}]
        </td>
        <td class="value">
        [{isys type="f_count" name="C__CATG__ATTRIBUTE_ID"}]
        </td>
    </tr>
</table>

## Smarty-Plugins

## Plugins Smarty

Die meistbenutzten Smarty Plugins lauten:

Les plugins Smarty les plus utilisés sont les suivants :

Jedes dieser Plugins verfügt über eine Reihe gemeinsamer aber auch spezifischer Parameter, die nur für dieses Plugin verwendet werden können.

Chacun de ces plugins dispose d'une série de paramètres communs, mais aussi spécifiques, qui ne peuvent être utilisés que pour ce plugin.

* f_label
* f_text
* f_textarea
* f_wysiwyg
* f_password
* f_dialog
* f_popup

* f_label
* f_text
* f_textarea
* f_wysiwyg
* f_password
* f_dialog
* f_popup

Einige der gemeinsamen Parameter lauten:

Voici quelques-uns des paramètres communs :

* name
Der Name ist notwendig und wird für das "TOM" und die übergebenen "rules" verwendet, um das jeweilige Plugin zu identifizieren.
* id oder p_strID
Die "id" wird in den meisten Fällen im HTML als gleichnamiges Attribut ausgegeben und kann dann im Javascript wiederverwendet werden, um Elemente zu selektieren.
* type
Der "type" Parameter entscheidet letztendlich darüber, welches Smarty Plugin verwendet werden soll. Mit Hilfe des übergebenen Wertes lässt sich auch die zuständige PHP-Klasse ausfindig machen:
isys_smarty_plugin_<type>.class.php.
* p_strClass
Wird verwendet, um CSS-Klassen auf die HTML-Elemente zu schreiben.
* p_strStyle
Der Inhalt dieses Parameters wird als "style" Attribut auf das zuständige HTML-Element geschrieben.

* name
Le nom est nécessaire et est utilisé pour le "TOM" et les "rules" transmises afin d'identifier le plugin en question.
* id ou p_strID
L'"id" est dans la plupart des cas émis en HTML comme attribut du même nom et peut ensuite être réutilisé en Javascript pour sélectionner des éléments.
* type
Le paramètre "type" détermine finalement quel plugin Smarty doit être utilisé. La valeur transmise permet également de trouver la classe PHP responsable :
isys_smarty_plugin_<type>.class.php.
* p_strClass
Est utilisée pour écrire des classes CSS sur les éléments HTML.
* p_strStyle
Le contenu de ce paramètre est écrit comme attribut "style" sur l'élément HTML concerné.

Die beste Anlaufstelle für verfügbare Parameter ist der Code selbst, da die Plugins von Zeit zu Zeit aktualisiert werden und eine statische Dokumentation an dieser Stelle schnell veraltet sein würde.

Le meilleur point de contact pour les paramètres disponibles est le code lui-même, car les plugins sont mis à jour de temps en temps et une documentation statique à cet endroit deviendrait rapidement obsolète.

In einigen Smarty-Plugins werden auch Javascript-spezifische Parameter verwendet, wie zum Beispiel "p_onChange", "p_onClick" oder auch "p_onMouseOver" und "p_onKeyDown" etc. - diese Parameter sollten möglichst nicht verwendet werden, wenn es sich vermeiden lässt.

Dans certains plugins Smarty, des paramètres spécifiques à Javascript sont également utilisés, comme par exemple "p_onChange", "p_onClick" ou encore "p_onMouseOver" et "p_onKeyDown", etc. - ces paramètres ne devraient pas être utilisés dans la mesure du possible, si cela peut être évité.

Diese Fälle lassen sich nur dann nicht vermeiden, wenn sie absolut notwendig sind und auch im Kontext anderer Oberflächen existieren müssen (wie zum Beispiel "Listeneditierung)".

Ces cas ne peuvent être évités que s'ils sont absolument nécessaires et doivent également exister dans le contexte d'autres interfaces (comme par exemple "édition de listes)".

### Popups in i-doit

### Popups dans i-doit

Neben den anderen Formularfeldern gibt es in i-doit auch "popups", wie zum Beispiel den Objekt-Browser, Dialog-Plus oder den Datepicker. Für diese GUI Elemente wird immer der gleiche "type" verwendet ("f_popup"). Das jeweilige Popup muss dann über den Parameter p_strPopupType bestimmt werden.

Outre les autres champs de formulaire, il existe dans i-doit des "popups", comme par exemple l'Explorateur d'objets, Dialogue-Plus ou le Filepicker. Le même "type" est toujours utilisé pour ces éléments GUI ("f_popup"). Le popup en question doit alors être déterminé par le paramètre p_strPopupType.

Die Kern-Popups befinden sich im Ordner <i-doit>/src/classes/popups/ und werden über ihren Typen referenziert: isys_popup_<type>.class.php.

Les popups de base se trouvent dans le dossier <i-doit>/src/classes/popups/ et sont référencés par leur type : isys_popup_<type>.class.php.

Popup-Klassen erben immer von isys_component_popup und beinhalten mindestens zwei Methoden:

Les classes popup héritent toujours de isys_component_popup et contiennent au moins deux méthodes :

* handle_smarty_include
Diese Methode wird sowohl im VIEW- als auch EDIT-Modus aufgerufen und muss HTML zurückliefern das den eigentlichen Popup-Trigger beinhaltet - dabei handelt es sich um ein beliebiges HTML Element, dass ein "onclick" Attribut erhält, dessen Inhalt mit Hilfe von $this->process_overlay(...) erzeugt wird. Üblicherweise beinhaltet das HTML auch noch ein Formular-Feld, dass den jeweiligen Popup-Wert beinhaltet.
* handle_smarty_request
Diese Methode wird via Ajax-Request aufgerufen, wenn der Popup-Trigger aktiviert wurde. Sie muss das Popup spezifische Smarty-Template rendern und den Request mittels die; beenden. i-doit wird das Template im Frontend empfangen, in das HTML des Popups einbetten und darstellen.

* handle_smarty_include
Cette méthode est appelée en mode VIEW et EDIT et doit retourner le HTML qui contient le déclencheur de popup - il s'agit d'un élément HTML quelconque qui reçoit un attribut "onclick", dont le contenu est généré à l'aide de $this->process_overlay(...). En général, le HTML contient également un champ de formulaire qui contient la valeur popup correspondante.
* handle_smarty_request
Cette méthode est appelée via une requête Ajax lorsque le déclencheur de popup est activé. Elle doit rendre le modèle de popup spécifique à Smarty et terminer la requête avec die ;. i-doit recevra le modèle dans le frontend, l'intégrera dans le HTML du popup et l'affichera.

## Reihenfolge der Datenübergabe

## Ordre de transmission des données

Wie zuvor beschrieben, kann die UI Klasse im besten Fall die komplette Verarbeitung der Daten und UI Parameter übernehmen. Das heißt, sie übergibt sowohl Daten aus der DAO als auch die UI-Parameter aus der Attribut-Definition direkt an das TOM.

Comme décrit précédemment, la classe UI peut, dans le meilleur des cas, prendre en charge le traitement complet des données et des paramètres UI. Cela signifie qu'elle transmet directement au TOM aussi bien les données de la DAO que les paramètres UI issus de la définition des attributs.

Diese Logik kann man sich zunutze machen, um sich in der UI Klasse nur auf das Wesentliche zu beschränken, indem man zu Beginn der process-Methode direkt $rules = parent::process(); aufruft.

On peut profiter de cette logique pour se limiter à l'essentiel dans la classe UI, en appelant directement $rules = parent::process() ; au début de la méthode process.

Das $rules-Array lässt sich nach Belieben ergänzen (oder auch nullen). Am Ende der Methode sollte das $rules-Array erneut an Smarty übergeben werden.

Le tableau $rules peut être complété (ou mis à zéro) à volonté. À la fin de la méthode, le tableau $rules devrait être à nouveau transmis à Smarty.

Der letzte Ort an dem man die Parameter ändern kann ist unmittelbar im Template selbst. Theoretisch kann jeder (mittels TOM) übermittelte Parameter auf diesem Weg überschrieben werden:

Le dernier endroit où l'on peut modifier les paramètres est directement dans le modèle lui-même. En théorie, tout paramètre transmis (par TOM) peut être écrasé de cette manière :

```
[{isys type="f_text" name="C__CATG__EXAMPLE_TEXT" p_strClass="css-class"}]

[{isys type="f_dialog" name="C__CATG__EXAMPLE_DIALOG" p_strTable="isys_purpose"}]
```

Was in der Theorie gut funktioniert, könnte dem Entwickler in der Praxis leider den ein oder anderen Stolperstein in den Weg legen. Denn andere Oberflächen (wie zum Beispiel die "Listeneditierung") werden die geänderten Parameter nicht übergeben bekommen und dadurch andere Ergebnisse darstellen als in der Kategorie selbst.

Ce qui fonctionne bien en théorie pourrait malheureusement poser l'un ou l'autre écueil au développeur dans la pratique. En effet, d'autres interfaces (comme par exemple l'"édition de liste") ne recevront pas les paramètres modifiés et présenteront donc des résultats différents de ceux de la catégorie elle-même.

Auf der anderen Seite kann dieses Wissen aber auch gezielt genutzt werden, um in der Kategorie selbst ein anderes (gewünschtes) Verhalten zu erzeugen.

D'un autre côté, ces connaissances peuvent également être utilisées de manière ciblée pour générer un autre comportement (souhaité) dans la catégorie elle-même.