<!-- TRANSLATED by md-translate -->
# DIY Daten-Import

# DIY importation de données

Von Zeit zu Zeit kann es nötig sein große Datenmengen aus einem Fremd-System nach i-doit zu überführen - sowohl für eine Initiale Befüllung als auch für regelmäßige Synchronisationen und Updates. Zu diesem Zweck bietet i-doit einige Schnittstellen, sogenannte Imports an, um Daten aus externen Quellen in die CMDB zu übernehmen.

De temps en temps, il peut être nécessaire de transférer de grandes quantités de données d'un système tiers vers i-doit - aussi bien pour un remplissage initial que pour des synchronisations et des mises à jour régulières. Pour cela, i-doit propose quelques interfaces, appelées imports, pour transférer des données de sources externes dans la CMDB.

Unter anderem bieten wir den CSV Import und die JSON-RPC API für generische Daten an. Auch für andere Tools, wie JDisc und OCS gibt es fertige Lösungen. Doch manchmal ist eine komplett neue bzw. eigene Lösung notwendig, um die Daten zuverlässig und ohne großen "Mehraufwand" nach i-doit zu überführen.

Nous proposons entre autres l'importation CSV et l'API JSON-RPC pour les données génériques. Il existe également des solutions prêtes à l'emploi pour d'autres outils, comme JDisc et OCS. Mais parfois, une solution entièrement nouvelle ou propre à l'entreprise est nécessaire pour transférer les données vers i-doit de manière fiable et sans grand "surcroît de travail".

Zu diesem Zweck ist es möglich einen eigenen Import schreiben.

Pour cela, il est possible d'écrire sa propre importation.

**Achtung!** Dieses Thema richtet sich an fortgeschrittene Entwickler, die bereits Know-How mit dem i-doit System gesammelt haben und sowohl die verschiedenen Kategorie-Arten als auch Attribut-Typen kennen.

**Ce thème s'adresse aux développeurs avancés qui ont déjà acquis du savoir-faire avec le système i-doit et qui connaissent les différents types de catégories et d'attributs.

# Technische Import Möglichkeiten

# Possibilités techniques d'importation

Um Daten zu importieren gibt es mehrere Optionen. Von CSV-Import über JDisc, OCS und einige weitere… Wir konzentrieren uns in diesem Artikel allerdings nur auf die "technischen" Möglichkeiten einen Import zu entwickeln.

Pour importer des données, il existe plusieurs options. De l'importation CSV en passant par JDisc, OCS et quelques autres... Nous nous concentrerons toutefois dans cet article uniquement sur les possibilités "techniques" de développer une importation.

Konkret gibt es hier zwei Optionen die sich anbieten:

Concrètement, il y a ici deux options qui se présentent :

# Import mit Hilfe der API

# Importation à l'aide de l'API

Bevor wir uns in die Programmierung stürzen, möchte ich darauf hinweisen, dass ein solcher Import über die API erzeugt werden und vermutlich sogar einigen Ärger ersparen kann, wenn es um die folgenden Themen geht...

Avant de nous lancer dans la programmation, je tiens à préciser qu'une telle importation peut être générée via l'API et probablement même éviter quelques ennuis en ce qui concerne les sujets suivants...

## Dialog, Dialog+ und Objektreferenzen

## Dialogue, Dialog+ et références d'objets

Von der API sind wir es gewöhnt, Daten in einer "lesbaren" Form übergeben zu können. Statt der ID "3" für einen Hersteller übergeben wir stattdessen den Namen im Klartext. Der API Code wird automatisch im entsprechenden Attribut bzw. der hinterlegten Datenbank-Tabelle nach diesem Namen suchen und die korrekte ID referenzieren.

L'API nous a habitués à pouvoir transmettre des données sous une forme "lisible". Au lieu de transmettre l'ID "3" pour un fabricant, nous transmettons plutôt le nom en texte clair. Le code API cherchera automatiquement ce nom dans l'attribut correspondant ou dans la table de base de données déposée et référencera l'ID correcte.

Zusätzlich werden Dialoge mit Abhängigkeiten (wie z.B. zwischen Modell und Hersteller) intern verarbeitet, sodass es zu keinen falschen Referenzen kommt.

De plus, les dialogues avec des dépendances (comme par exemple entre le modèle et le fabricant) sont traités en interne, de sorte qu'il n'y a pas de références erronées.

Sollte ein übergebener Datensatz nicht gefunden werden, wird die API diesen für uns erzeugen und auch wieder entsprechend referenzieren.

Si un enregistrement transmis n'est pas trouvé, l'API le créera pour nous et le référencera à nouveau en conséquence.

## Validierung

## Validation

Die API wird beim erstellen und aktualisieren von Kategoriedaten die konfigurierte Validierung berücksichtigen und jegliche Fehler melden. In diesem Fall werden die Änderungen nicht übernommen - der Prozess wird unterbrochen.

L'API tiendra compte de la validation configurée lors de la création et de la mise à jour des données de catégorie et signalera toute erreur. Dans ce cas, les modifications ne seront pas prises en compte - le processus sera interrompu.

## Prozessoren

## Processeurs

Die API besitzt interne Helfer für einige Kategorien, die nicht ohne weiteres speicherbar sind - konkret geht es hierbei um Kategorien, die nur mittels "extra Logik" sinnvoll befüllt werden können, weil sie über spezifische Logik verfügen.

L'API possède des assistants internes pour certaines catégories qui ne peuvent pas être enregistrées facilement - concrètement, il s'agit de catégories qui ne peuvent être remplies de manière judicieuse qu'au moyen d'une "logique supplémentaire", car elles disposent d'une logique spécifique.

Als Beispiel möchte ich die "Hostadresse" Kategorie aufführen. Hier gibt es indirekte Abhängigkeiten zwischen der eingegebenen IP-Adresse und dem hinterlegten Netz - IPv6 Adressen dürfen nicht in einem IPv4 Netz hinterlegt werden. Ebenso darf keine IP-Adresse gespeichert werden, wenn diese außerhalb des ausgewählten Netzesbereiches liegt.

J'aimerais citer comme exemple la catégorie "adresse d'hôte". Il existe ici des dépendances indirectes entre l'adresse IP saisie et le réseau enregistré - les adresses IPv6 ne peuvent pas être enregistrées dans un réseau IPv4. De même, aucune adresse IP ne peut être enregistrée si elle se trouve en dehors de la plage de réseau sélectionnée.

Der jeweilige Kategorie-Prozessor übernimmt eben diese Aufgabe.

Le processeur de catégorie correspondant se charge justement de cette tâche.

Ein weiteres Beispiel ist die "SLA" Kategorie, die eine sehr spezifische GUI und auch Daten besitzt, um die einzelnen Tage und Servicezeiten zu dokumentieren.

Un autre exemple est la catégorie "SLA", qui possède une IUG très spécifique et aussi des données pour documenter les différents jours et heures de service.

# Import mit Hilfe der "sync" Methoden

# Importation à l'aide des méthodes "sync

Entschließen wir uns dennoch dazu einen "eigenen" Import zu schreiben, werden wir diesen mit Hilfe der "sync"-Methoden unserer Kategorie-DAOs umsetzen.

Si nous décidons néanmoins d'écrire un import "propre", nous le réaliserons à l'aide des méthodes "sync" de nos DAO de catégorie.

Im Gegensatz zum Import mittels API, müssen wir die folgenden notwendigen Prozeduren selbst implementieren:

Contrairement à l'importation via l'API, nous devons implémenter nous-mêmes les procédures nécessaires suivantes :

1. Das jeweilige Zielobjekt finden oder erstellen
2. Kategoriedaten auf Konsistenz prüfen und Referenzen auflösen
3. Kategorie-DAOs vorbereiten
4. Daten validieren und Struktur vorbereiten
5. Vorbereitete Daten an die "sync"-Methode übergeben
6. Logbucheinträge schreiben

1. trouver ou créer l'objet cible correspondant
2. vérifier la cohérence des données de catégorie et résoudre les références
3. préparer les DAO de catégorie
4. valider les données et préparer la structure
5. transmettre les données préparées à la méthode "sync".
6. écrire des entrées de journal

# Überblick der notwendigen Komponenten

# Aperçu des composants nécessaires

Mit den letzten i-doit Major-Versionen haben wir immer mehr entkoppelte Komponenten vorgestellt, welche die Programmierung eigenere Imports extrem vereinfachen. Hierzu müssen wir uns mit den folgenden Komponenten vertraut machen:

Avec les dernières versions majeures d'i-doit, nous avons présenté de plus en plus de composants découplés qui simplifient énormément la programmation de nos propres importations. Pour cela, nous devons nous familiariser avec les composants suivants :

## Datenquelle

## Source des données

Diese muss existieren, denn ohne eine Datenquelle können keine Daten nach i-doit übertragen werden :) Hier ist es von Vorteil mit Datentypen zu arbeiten, die in PHP einfach zu verarbeiten sind, wie z.B. Datenbanken, JSON, XML oder auch YAML.

Celle-ci doit exister, car sans une source de données, aucune donnée ne peut être transmise à i-doit :) Il est ici avantageux de travailler avec des types de données faciles à traiter en PHP, comme par exemple les bases de données, JSON, XML ou encore YAML.

Die Daten müssen vom Code aus erreich- und lesbar sein!

Les données doivent être accessibles et lisibles à partir du code !

## Mapping

## Mapping

Dieser Schritt ist essentiell und sollte inhaltlich wohl überlegt werden. Die i-doit CMDB verfügt über knapp 150 globale und 80 spezifische Kategorien, die für die Dokumentation verwendet werden können. Zusätzlich gibt es natürlich noch die benutzerdefinierten Kategorien, die von uns für spezifische Informationen genutzt werden können.

Cette étape est essentielle et son contenu doit être mûrement réfléchi. La CMDB d'i-doit dispose de près de 150 catégories globales et de 80 catégories spécifiques qui peuvent être utilisées pour la documentation. De plus, il y a bien sûr les catégories définies par l'utilisateur, que nous pouvons utiliser pour des informations spécifiques.

Die Aufgabe besteht darin, die Quelldaten auf Kategorie-Attribute zu mappen, sodass i-doit (bzw. unser Import) diese korrekt verarbeiten kann. Wir können die GUI des CSV Import als praktisches Beispiel nehmen, um uns ein solches Mapping anzusehen - diese Zuordnung von Quelldaten zu i-doit Kategorie-Attributen ist genau,was wir auf Code-Ebene bauen müssen.

La tâche consiste à mapper les données sources sur les attributs de catégorie afin qu'i-doit (ou notre importation) puisse les traiter correctement. Nous pouvons prendre l'interface graphique de l'importation CSV comme exemple pratique pour voir un tel mappage - ce mappage des données sources aux attributs de catégorie i-doit est exactement ce que nous devons construire au niveau du code.

Um unseren Import ohne Umwege mit den Daten versorgen zu können, sollten wir das gleiche Format nutzen, welches auch schon in der API genutzt wird:

Pour pouvoir alimenter notre importation sans détours avec les données, nous devrions utiliser le même format que celui déjà utilisé dans l'API :

```
{
    "Kategorie Konstante": [
        {"Attribut": "Wert"},
        {"Attribut 2": "Wert 2"}
    ]
}
```

Oder mit konkreten Daten:

Ou avec des données concrètes :

```
{
    "C__CATG__CPU": [
        {"title": "CPU #1", "frequency": 3.6, "frequency_unit": 3},
        {"title": "CPU #2", "manufacturer": "Intel", "type": "Core i7"}
    ]
}
```

Wir sehen hier eine Mischung aus ID-Referenzen und lesbaren Werten (siehe "frequency_unit": 3 und "manufacturer": "Intel"). Beim manuellen Import via Kategorie "sync" müssen wir alle Referenzen auflösen - i-doit kann intern nur mit ID-Referenzen arbeiten!

Nous voyons ici un mélange de références ID et de valeurs lisibles (voir "frequency_unit" : 3 et "manufacturer" : "Intel"). Lors de l'importation manuelle via la catégorie "sync", nous devons résoudre toutes les références - i-doit ne peut travailler en interne qu'avec des références ID !

Wie das funktioniert wird im nächsten Punkt erläutert. Der Artikel [Kategorien programmieren](./kategorien-programmieren.md) und [Attribut-Definition](./attribut-definition.md) werden uns beim Verständnis helfen!

Le point suivant explique comment cela fonctionne. Les articles [Programmer des catégories](./programmation-catégories.md) et [Définition d'attribut](./attribut-definition.md) nous aideront à comprendre !

## AttributeDataCollector

## AttributeDataCollector

Diese Komponente kann genutzt werden, um Datenreferenzen, wie "Hersteller: Intel", aufzulösen. Sie funktioniert auf Attribut-Basis und kümmert sich automatisch um die übergebenen Typen. Hierbei benötigen wir konkret das jeweilige Attribut:

Ce composant peut être utilisé pour résoudre des références de données telles que "Fabricant : Intel". Il fonctionne sur la base d'attributs et s'occupe automatiquement des types transmis. Pour cela, nous avons concrètement besoin de l'attribut concerné :

```
use idoit\Component\Property\Property;
use idoit\Module\Cmdb\Component\AttributeDataCollector\Collector;

$property = '<property definition from category DAO>';
$data = null;
$collector = new Collector();

// We need to check if we are handling a property in the "old" format.
if (!$property instanceof Property) {
    $property = Property::createInstanceFromArray($property);
}

// Only process if the property can be handled by the collector.
if ($collector->isApplicable($property)) {
    $data = $collector->getApplicableType()->collectData($property, false);
}
```

Am Ende wird in der $data Variable eine Liste der verfügbaren Daten existieren - diese kann nun auf passende Inhalte geprüft werden. Kann keine Übereinstimmung festgestellt werden, muss individuell entschieden werden, ob ein Datensatz zur Laufzeit erzeugt werden soll.

A la fin, la variable $data contiendra une liste des données disponibles, dont le contenu peut être vérifié. Si aucune correspondance n'est trouvée, il faut décider individuellement si un enregistrement doit être créé au moment de l'exécution.

## CiMatcher

## CiMatcher

Der "CiMerger" ist eine Komponente zum finden von Objekten mittels verschiedener Attribute wie z.B. dem Hostnamen, Seriennummer, Mac Adresse etc. derzeit existieren 19 Identifikatoren zum finden von Objekten.

Le "CiMerger" est un composant permettant de trouver des objets à l'aide de différents attributs tels que le nom d'hôte, le numéro de série, l'adresse Mac, etc. Il existe actuellement 19 identificateurs pour trouver des objets.

Die Nutzung ist sehr einfach gestaltet:

L'utilisation est très simple :

```
$numberOfNecessaryMatches = 2;
$matcher = new CiMatcher(MatchConfig::factory($numberOfNecessaryMatches, isys_application::instance()->container));

$match = $matcher->match([
    new MatchKeyword(Hostname::KEY, $hostname),
    new MatchKeyword(ModelSerial::KEY, $serialNumber),
    new MatchKeyword(IpAddress::KEY, $ipAddress),
    new MatchKeyword(Mac::KEY, $macAddress),
]);

$foundObjectId = $match->getId();
```

Sofern kein Objekt gefunden werden konnte wird getId() lediglich null zurückliefern. Sollten mehrere Objekte gefunden werden können diese mittels getMatchResult() ausgelesen werden.

Si aucun objet n'est trouvé, getId() renvoie seulement null. Si plusieurs objets sont trouvés, ils peuvent être lus avec getMatchResult().

!!! info "Achtung!"

! !! info "Attention !

```
Aufgrund der PHP 8 kompatibilität wird der Methodenname "match" sich zukünftig ändern!
```

## Merger

## Merger

Der "Merger" hat nur eine einzige Aufgabe: übergebene Datensätze auf Vollständigkeit zu prüfen und ggf. mit vorhandenen Daten oder Standardwerten der CMDB zu ergänzen.

La "fusion" n'a qu'une seule tâche : vérifier que les enregistrements transférés sont complets et, le cas échéant, les compléter avec des données existantes ou des valeurs par défaut de la CMDB.

Und wieso brauchen wir so etwas? Die "sync"-Methode der Kategorie DAOs benötigt immer komplette Datensätze, um die jeweiligen Daten zu erstellen oder aktualisieren.

Et pourquoi avons-nous besoin de cela ? La méthode "sync" de la catégorie des DAO a toujours besoin d'ensembles de données complets pour créer ou mettre à jour les données en question.

Wenn ein oder mehrere Attribute nicht Bestandteil der Daten sind würden diese beim überführen in die Datenbank genullt werden.

Si un ou plusieurs attributs ne font pas partie des données, ils seraient mis à zéro lors du transfert dans la base de données.

## Object und Kategorie DAO

## Objet et catégorie DAO

Um Kategoriedaten tatsächlich in die Datenbank zu schreiben werden die verschiedenen Kategorie-DAO Klassen benötigt. Diese können wir mit Hilfe der Kategorie Konstanten aus unserer API-Ähnlichen Struktur finden und nutzen.

Pour écrire les données de catégorie dans la base de données, les différentes classes DAO de catégorie sont nécessaires. Nous pouvons les trouver et les utiliser à l'aide des constantes de catégorie de notre structure similaire à celle de l'API.

Für Objektdaten kann die "CMDB DAO" verwendet werden - oder auch jede beliebige Kategorie-DAO, da diese von der CMDB-DAO erben.

Pour les données d'objet, la "CMDB DAO" peut être utilisée - ou n'importe quelle DAO de catégorie, car elles héritent de la CMDB DAO.

Zum erstellen von Objekten gibt es eine Methode die genutzt werden muss: "isys_cmdb_dao->insert_new_obj()". Objekte dürfen nicht mit eigenem SQL erzeugt werden, da sonst einige notwendige Prozeduren übersprungen werden, die vom System benötigt wird.

Pour créer des objets, il existe une méthode qui doit être utilisée : "isys_cmdb_dao->insert_new_obj()". Les objets ne doivent pas être créés avec leur propre SQL, sinon certaines procédures nécessaires sont ignorées par le système.

# Gut zu Wissen!

# Bon à savoir !

Bevor wir mit dem Import-Code beginnen, möchte ich zunächst auf ein paar Punkte hinweisen:

Avant de commencer le code d'importation, je voudrais d'abord attirer l'attention sur quelques points :

## Erstellen ist einfach, aktualisieren schwierig

## Créer est facile, mettre à jour est difficile

Wenn lediglich neue Objekte und neue Kategorie Daten erstellt werden sollen ist der Import um ein vielfaches einfacher zu entwickeln, da hierbei keine Daten "zusammengeführt" werden müssen.

Si seuls de nouveaux objets et de nouvelles catégories de données doivent être créés, l'importation est beaucoup plus simple à développer, car il n'est pas nécessaire de "fusionner" les données.

Gerade bei Multi-Value Kategorien kann das "Erkennen" des zu aktualisierenden Datensatzes kompliziert und ressourcenaufwändig sein. Man kann diesen Schritt zwar stark vereinfachen indem man pro Kategorie eigenen Code schreibt, der den korrekten Datensatz "erkennt" - allerdings macht das nur Sinn, wenn der Import ein paar wenige Kategorien importiert.

Dans le cas des catégories multi-valeurs, la "reconnaissance" de l'enregistrement à mettre à jour peut être compliquée et demander beaucoup de ressources. Il est certes possible de simplifier considérablement cette étape en écrivant un code propre à chaque catégorie qui "reconnaît" l'enregistrement correct - mais cela n'a de sens que si l'importation ne porte que sur quelques catégories.

## Multivalue Kategorien importieren

## Importer des catégories multivaluées

Pro "sync" wird immer nur EIN Datensatz erstellt oder aktualisiert. Multiple Datensätze für Multivalue-Kategorien müssen demnach in einer Schleife durchlaufen werden.

Un seul enregistrement est créé ou mis à jour par "sync". Les enregistrements multiples pour les catégories multivaluées doivent donc être parcourus en boucle.

## Den Import / Code kapseln

## Encapsuler l'importation / le code

Wenn der eigene Import bzw. dessen Code gekapselt wird sind wir als Entwickler in der Lage diesen an verschiedenen Stellen zu verwenden. Konkret könnte der Import durch eine solche Architektur ohne großen Mehraufwand, sowohl für einen Konsolen Command, als auch innerhalb der GUI oder der API genutzt werden (genau wie es auch beim CSV Import der Fall ist).

En encapsulant notre propre importation ou son code, nous sommes en mesure, en tant que développeurs, de l'utiliser à différents endroits. Concrètement, une telle architecture permettrait d'utiliser l'importation aussi bien pour une commande de console que dans l'interface graphique ou l'API (comme c'est le cas pour l'importation de fichiers CSV), sans grand effort supplémentaire.

## Konsistenzprüfung der Daten

## Contrôle de cohérence des données

Wie zuvor erwähnt müssen zum Beispiel Dialog und Objekt Referenzen aufgelöst werden. Das heißt, Hersteller-Daten, wie "Intel" oder "Cisco", müssen im System gefunden (oder erstellt) werden und der Code muss statt dieser String-Werte mit IDs arbeiten.

Comme mentionné précédemment, les références de dialogue et d'objet, par exemple, doivent être résolues. Cela signifie que les données du fabricant, comme "Intel" ou "Cisco", doivent être trouvées (ou créées) dans le système et que le code doit travailler avec des ID au lieu de ces valeurs de chaîne.

Zu diesem Zweck gibt es eine "AttributeDataCollector" Komponente (siehe weiter oben).

Il existe à cet effet un composant "AttributeDataCollector" (voir plus haut).

# Basis Import Code

# Code d'importation de base

Der Import mit Hilfe der sync Methode ist relativ einfach gehalten und benötigt nur wenige Zeilen Code. Es muss hierbei unbedingt beachtet werden, dass dieser "einfache" Import nur die Basis darstellt - es folgt eine Beschreibung des Codes und eine Liste mit "fehlenden Features", die bei Bedarf individuell entwickelt werden müssen.

L'importation à l'aide de la méthode sync est relativement simple et ne nécessite que quelques lignes de code. Il est important de noter que cette importation "simple" ne constitue que la base - elle est suivie d'une description du code et d'une liste des "fonctionnalités manquantes" qui doivent être développées individuellement si nécessaire.

## Beispiel-Daten im JSON Format

## Exemple de données au format JSON

Diese Beispiel-Daten wurden im Vorfeld bereits in ein Format gebracht mit dem wir ohne weiteres arbeiten können - das heißt die Schritte zur Beschaffung und der "Mapping" Prozess sind hier bereits abgeschlossen.

Ces exemples de données ont été préalablement convertis dans un format avec lequel nous pouvons travailler sans problème - c'est-à-dire que les étapes d'acquisition et le processus de "mapping" sont ici déjà terminés.

```
[
    {
        "C__CATG__GLOBAL": [
            {
                "title": "My empty Object"
            }
        ]
    },
    {
        "C__CATG__GLOBAL": [
            {
                "title": "My filled Object",
                "purpose": 3
            }
        ],
        "C__CATG__CPU": [
            {
                "title": "cpu1",
                "manufacturer": 1,
                "type": 2,
                "cores": 3
            },
            {
                "title": "CPU 2",
                "manufacturer": "Intel",
                "type": "Core i5",
                "cores": 4,
                "frequency": 2.5,
                "frequency_unit": "Ghz"
            }
        ],
        "C__CATG__MODEL": [
            {
                "manufacturer": "Custom Manufacturer",
                "title": "Custom Title",
                "productid": "Custom Product ID",
                "service_tag": "Custom Service Tag",
                "serial": "Custom Serial"
            }
        ],
        "C__CATG__IP": [
            {
                "primary": 0,
                "active": 0,
                "net": 20,
                "ipv4_address": "127.0.0.1"
            },
            {
                "primary": 1,
                "active": 1,
                "net": 21,
                "ipv6_address": "affe::"
            }
        ],
        "C__CATG__SLA": [
            {
                "service_id": "Service ID",
                "service_level": 1,
                "monday_time": "08:00 - 16:00",
                "tuesday_time": "08:00 - 16:00"
            }
        ]
    }
]
```

## Basis Code

## Code de base

Der folgende Code bietet eine funktionierende Grundlage zum erstellen eines eigenen Imports. Ein solcher Code sollte am besten in eine eigene Klasse oder funktion gekapselt sein, damit sie von verschiedenen Stellen aus aufrufbar ist - zum Beispiel von einem Command, dem i-doit Frontend oder auch einem eigenen API Endpunkt aus.

Le code suivant offre une base fonctionnelle pour créer son propre import. Un tel code devrait de préférence être encapsulé dans une classe ou une fonction propre, afin qu'il puisse être appelé à partir de différents endroits - par exemple à partir d'une commande, du front-end i-doit ou même d'un point final API propre.

```
use idoit\Module\Cmdb\Component\SyncMerger\Config;
use idoit\Module\Cmdb\Component\SyncMerger\Merger;

$data = '{JSON Data}';

$dao = isys_application::instance()->container->get('cmdb_dao');
$database = isys_application::instance()->container->get('database');
$objectTypeId = C__OBJTYPE__CLIENT; // ID of the "client" type (10)

foreach ($data as $objectData) {
    $objectTitle = $objectData['C__CATG__GLOBAL'][0]['title'] ?: 'Created by import: ' . date('Y-m-d H:i:s');

    $objectId = $dao->insert_new_obj($objectTypeId, null, $objectTitle, null, C__RECORD_STATUS__NORMAL);

    foreach ($objectData as $categoryConst => $categoryData) {
        $category = $dao->get_cat_by_const($categoryConst);

        if (!class_exists($category['class_name'])) {
            continue;
        }

        /** @var isys_cmdb_dao_category $categoryDao */
        $categoryDao = $category['class_name']::instance($database);

        foreach ($categoryData as $entryData) {
            // Will contain either 'true' or a associative array with 'key' => 'validation error message'
            $validationResult = $categoryDao->validate($entryData);

            if ($validationResult === true) {
                // Die Kategoriedaten müssen in ein bestimmtes Format gebracht werden damit der Merger damit arbeiten kann
                $fakeEntry = [
                    Config::CONFIG_DATA_ID    => null,
                    Config::CONFIG_PROPERTIES => array_map(function ($prop) { return [C__DATA__VALUE => $prop]; }, $entryData)
                ];

                $syncData = Merger::instance(Config::instance($categoryDao, $objectId, $fakeEntry))->getDataForSync();

                $categoryEntryId = $categoryDao->sync($syncData, $objectId, isys_import_handler_cmdb::C__CREATE);
            }
        }
    }
}
```

## Erklärung des Code

## Explication du code

Den Code möchte ich gerne Schritt für Schritt erklären:

J'aimerais expliquer le code étape par étape :

* Unser Import beginnt mit den übergebenen Daten - in welcher Form dies geschieht obliegt dem Rahmen des Import (Datenbankverbindung, Third-Party-API, Datei im Dateisystem, …). Diese sollten zu diesem Zeitpunkt (unmittelbar vor dem Import) bereits dem vorgeschlagenen Format entsprechen _(Zeile 4)_
* Anschließend holen wir uns die "CMDB DAO" und die Datenbank Komponente aus unserem Dependency Injection Container.  
Zusätzlich definieren wir einen statischen Objekttypen, als was unsere Objekte importiert werden sollen (das könnte auch mittels eigenem Code oder Parametern verbessert werden) _(Zeilen 6-7)_
* Wir erzeugen eine "foreach" Schleife, die für jeden Eintrag ein Objekt importieren wird _(Zeilen 10+)_
* In den folgenden Zeilen wird ein Objekt erstellt mit dem Namen aus den übergebenen Daten - falls hier kein Name definiert wird verwenden wir einen Fallback String "Created by import: …" mit dem aktuellen Datum + Uhrzeit _(Zeile 11)_
* Es wird also aktuell IMMER ein Objekt erzeugt - soll stattdessen ein vorhandenes Objekt GEFUNDEN und weiterverwendet werden, muss eine eigene Logik implementiert werden.  
Für die folgenden Zeilen wird zwingend eine Objekt ID benötigt! _(Zeile 13)_
* Wir erzeugen eine weitere "foreach"-Schleife, die nun die Kategorien des Objekts verarbeiten wird - zunächst versuchen wir auf Basis der verwendeten Kategorie Konstante die DAO Klasse der gewünschten Kategorie zu instanzieren.
    Schlägt dies fehl überspringen wir die Daten - solche Stellen sollten üblicherweise das Verhalten in einem Log festhalten, damit Fehler im nachhinein festgestellt werden können _(Zeilen 15+)_
* Wenn der Code eine Kategorie DAO gefunden hat erzeugen wir eine dritte "foreach" Schleife die nun durch die einzelnen Kategorie-Datensätze läuft _(Zeilen 16-25)_
* Auf den ersten Zeilen dieser Schleife rufen wir die "validate" Methode der DAO auf, die unsere eingegebenen Daten mit der Konfigurierten Validierung aus der Verwaltung abgleicht. Sollte es hier keine Probleme geben werden wir den Rückgabewert "true" erhalten - andernfalls ein Array mit Einträgen fehlgeschlagener Validierungen. _(Zeilen 27-29)_
    **ACHTUNG** - die Validierung stellt keine Konsistenzprüfung der Daten dar!
* Auf den nächsten Zeilen werden die Daten mit Hilfe des "Merger" in ein Format gebracht, mit dem die "sync" Methode der DAO arbeiten kann.
    Wir nennen dies "fake entry" weil wir ohne Datensatz ID arbeiten und den Merger nur nutzen um die fehlenden Kategorie Daten mit Standardwerten zu vervollständigen _(Zeilen 31-36)_
* Wir übergeben die vorbereiteten Daten schließlich an die "sync" Methode und übergeben den "create" Modus um neue Datensätze zu erstellen _(Zeile 38)_

* Notre importation commence par les données transmises - la forme sous laquelle cela se fait dépend du cadre de l'importation (connexion à la base de données, API tierce partie, fichier dans le système de fichiers, ...). A ce stade (juste avant l'importation), celles-ci devraient déjà correspondre au format proposé _(ligne 4)_.
* Ensuite, nous récupérons la "CMDB DAO" et le composant de la base de données dans notre conteneur d'injection de dépendances.  
De plus, nous définissons un type d'objet statique sous lequel nos objets doivent être importés (cela pourrait également être amélioré à l'aide de notre propre code ou de paramètres) _(lignes 6-7)_.
* Nous créons une boucle "foreach" qui importera un objet pour chaque entrée _(lignes 10+)_.
* Dans les lignes suivantes, un objet est créé avec le nom issu des données transmises - si aucun nom n'est défini ici, nous utilisons une chaîne de repli "Created by import : ..." avec la date et l'heure actuelles _(ligne 11)_.
* Un objet est donc TOUJOURS créé actuellement - si un objet existant doit être TROUVÉ et réutilisé à la place, une logique propre doit être implémentée.  
Pour les lignes suivantes, un ID d'objet est obligatoirement nécessaire ! _(ligne 13)_
* Nous créons une autre boucle "foreach" qui va maintenant traiter les catégories de l'objet - nous essayons d'abord d'instancier la classe DAO de la catégorie souhaitée sur la base de la constante de catégorie utilisée.
    Si cela échoue, nous sautons les données - de tels endroits devraient normalement enregistrer le comportement dans un journal, afin que les erreurs puissent être détectées ultérieurement _(lignes 15+)_.
* Lorsque le code a trouvé une catégorie DAO, nous créons une troisième boucle "foreach" qui parcourt maintenant les enregistrements de catégorie individuels _(lignes 16-25)_.
* Sur les premières lignes de cette boucle, nous appelons la méthode "validate" de la DAO, qui compare nos données saisies avec la validation configurée dans l'administration. S'il n'y a pas de problème, nous recevrons la valeur de retour "true" - sinon un tableau avec des entrées de validations échouées. (lignes 27-29)_
    **ATTENTION** - la validation ne constitue pas un contrôle de cohérence des données !
* Sur les lignes suivantes, les données sont transformées à l'aide de la "fusion" en un format avec lequel la méthode "sync" de la DAO peut travailler.
    Nous appelons cela "fake entry" car nous travaillons sans ID d'enregistrement et n'utilisons la fusion que pour compléter les données de catégorie manquantes avec des valeurs standard _(lignes 31-36)_.
* Nous transmettons finalement les données préparées à la méthode "sync" et passons en mode "create" pour créer de nouveaux enregistrements _(ligne 38)_.

## Optionale Verbesserungen

## Améliorations optionnelles

Wie bereits geschrieben handelt es sich bei diesem Code um eine lauffähige "Basis" Version eines Imports - das heißt der Code ist in seiner aktuellen Form nutzbar und wird übergebene Daten importieren können!

Comme nous l'avons déjà écrit, ce code est une version "de base" exécutable d'une importation - cela signifie que le code est utilisable dans sa forme actuelle et qu'il pourra importer les données transmises !

Es fehlen allerdings einige (optionale) Funktionen die ein Import üblicherweise liefert. Diese Punkte möchte ich hier auflisten:

Il manque cependant quelques fonctions (optionnelles) qu'une importation fournit habituellement. Je souhaite énumérer ces points ici :

* Dieser Import ist auf das erstellen von Daten beschränkt - es können damit keine existierenden Daten aktualisiert werden. Dies ist ein äußerst aufwändiger Prozess der am besten für jede betroffene Kategorie händisch implementiert wird
* Ein Import sollte seinen Fortschritt und auch unerwartete Probleme in Form eines Logs aufzeichnen. Um eine Logger Instanz zu erzeugen können wir zu Beginn des Imports folgende Zeile nutzen:  
$logger = idoit\Component\Logger::factory('my-import', BASE_DIR . 'log/my-import_' . date('Y-m-d') . '.log');
* Die $entryData Daten müssen auf allgemeine Konsistenz geprüft werden - Objekte und Dialog-Felder benötigen immer Referenzen mittels IDs. Falls hier String-Werte übergeben werden wird der Import für den entsprechenden Wert fehlschlagen
* Bevor die Daten an den "Merger" übergeben werden sollte ein Kategorie Prozessor verwendet werden der die Daten für die entsprechende Kategorie vorbereitet
* Aktuell schreibt der Import keinerlei Daten in das CMDB Logbuch, das muss sowohl für die Objekte als auch Kategorie Daten nachgeholt werden

* Cette importation est limitée à la création de données - elle ne permet pas de mettre à jour des données existantes. Il s'agit d'un processus très complexe qu'il est préférable de mettre en œuvre manuellement pour chaque catégorie concernée.
* Une importation doit enregistrer sa progression et les problèmes inattendus sous la forme d'un journal. Pour créer une instance de logger, nous pouvons utiliser la ligne suivante au début de l'importation :
$logger = idoit\Component\Logger::factory('my-import', BASE_DIR . 'log/my-import_' . date('Y-m-d') . '.log') ;
* La cohérence générale des données $entryData doit être vérifiée - les objets et les champs de dialogue nécessitent toujours des références au moyen d'ID. Si des valeurs de type chaîne sont transmises ici, l'importation échouera pour la valeur correspondante.
* Avant de transmettre les données au "Merger", il faut utiliser un processeur de catégorie qui prépare les données pour la catégorie correspondante.
* Actuellement, l'importation n'écrit aucune donnée dans le journal CMDB, cela doit être fait pour les objets et les données de catégorie.
