<!-- TRANSLATED by md-translate -->
# Suchen

# Recherche

"Wer suchet, der findet." Die gezielte Recherche in der [IT-Dokumentation](../glossar.md) bedingt eine schnelle und komfortable Suche. Oftmals ist eine gezielte Suche der kürzere Weg als das Klicken durch Menüstrukturen.

"Celui qui cherche, trouve". La recherche ciblée dans la [documentation informatique](../glossaire.md) nécessite une recherche rapide et confortable. Souvent, une recherche ciblée est un chemin plus court que de cliquer à travers les structures de menu.

## Das Suchfeld

## Le champ de recherche

Das Suchfeld befindet sich in der Web GUI von i-doit in der oberen rechten Ecke. Dort kann nach beliebigen Begriffen in der IT-Dokumentation gesucht werden. Beim Tippen erscheinen erste Suchergebnisse (Suchvorschläge), die mit der Maus oder Tastatur ausgewählt werden können (Autovervollständigung), um direkt in den gefundenen Datensatz zu springen.

Le champ de recherche se trouve dans l'interface utilisateur Web d'i-doit, dans le coin supérieur droit. Il est possible d'y rechercher n'importe quel terme dans la documentation informatique. En tapant, les premiers résultats de la recherche apparaissent (propositions de recherche), qui peuvent être sélectionnés avec la souris ou le clavier (autocomplétion) pour passer directement à l'enregistrement trouvé.

[![suche-suchen](../assets/images/de/effizientes-dokumentieren/suche/1-suche.png)](../assets/images/de/effizientes-dokumentieren/suche/1-suche.png)

[ ![recherche-recherche](../assets/images/fr/documentation-efficace/recherche/1-recherche.png)](../assets/images/fr/documentation-efficace/recherche/1-recherche.png)

Neben der Freitextsuche, kann die Suche auf bestimmte [Objekt-Attribute](../glossar.md) beschränkt werden:

Outre la recherche en texte libre, il est possible de limiter la recherche à certains [attributs d'objet](../glossar.md) :

* Beginnt die Suche mit einer Raute, gefolgt von der [Objekt-ID](../glossar.md) (#123), wird nach Drücken der Return-Taste die Übersichtsseite des Objekts mit ebendieser ID aufgerufen.
* Beginnt die Suche mit dem Stichwort title, gefolgt von einem Doppelpunkt und dem Objekt-Titel, wird das entsprechende Objekt angezeigt (title:acme).

* Si la recherche commence par un dièse suivi de l'[ID objet](../glossaire.md) (#123), la page de présentation de l'objet avec ce même ID est affichée après avoir appuyé sur la touche retour.
* Si la recherche commence par le mot-clé title, suivi de deux points et du titre de l'objet, l'objet correspondant s'affiche (title:acme).

## Das Suchergebnis

## Le résultat de la recherche

Führen die oben genannte Suchvorschläge nicht zum gewünschten Ergebnis, wird nach Drücken der Return-Taste eine Seite mit Suchergebnissen präsentiert. Neben jedem gefundenen Datensatz wird die Quelle genannt, beispielsweise das [Attribut](../glossar.md) einer [Kategorie](../glossar.md) eines [Objekttyps](../glossar.md) im [CMDB](../glossar.md)-Modul.

Si les propositions de recherche ci-dessus n'aboutissent pas au résultat souhaité, une page de résultats de recherche est présentée après avoir appuyé sur la touche Return. La source est mentionnée à côté de chaque enregistrement trouvé, par exemple l'[attribut](../glossar.md) d'une [catégorie](../glossar.md) d'un [type d'objet](../glossar.md) dans le module [CMDB](../glossar.md).

[![suche-wegdruecken](../assets/images/de/effizientes-dokumentieren/suche/2-suche.png)](../assets/images/de/effizientes-dokumentieren/suche/2-suche.png)

[ ![recherche-effacement](../assets/images/fr/documentation-efficace/recherche/2-recherche.png)](../assets/images/fr/documentation-efficace/recherche/2-recherche.png)

!!! success "Lesezeichen/Favoriten setzen"
    Jede Suche kann über die URL referenziert werden. Wird nach dem Begriff "acme" gesucht, ergibt das die URL [http://i-doit/i-doit/search?q=acme](http://i-doit/i-doit/search?q=acme). So können Suchergebnisse als Lesezeichen/Favoriten im Webbrowser gespeichert werden, um sie schneller wieder aufzurufen.

! !! success "Placer des signets/favoris".
    Chaque recherche peut être référencée par l'URL. Si l'on recherche le terme "acme", cela donne l'URL [http://i-doit/i-doit/search?q=acme](http://i-doit/i-doit/search?q=acme). Ainsi, les résultats de la recherche peuvent être enregistrés comme signets/favoris dans le navigateur web afin de pouvoir y revenir plus rapidement.

## Such-Modus

## Mode de recherche

Für die Suche kann aus zwei Modi ausgewählt werden, die zu unterschiedlichen Ergebnissen führen können:

Pour la recherche, il est possible de choisir entre deux modes qui peuvent donner des résultats différents :

* **Normal**: Für die Suche wird die Indexierung (siehe unten) verwendet. Dies ist die Standard-Einstellung.
* **Deep Search**: Es werden nacheinander Attribute durchsucht. Diese Suche nimmt mehr Zeit in Anspruch.

* **Normal** : L'indexation (voir ci-dessous) est utilisée pour la recherche. Il s'agit du réglage par défaut.
* **Deep Search** : Les attributs sont recherchés les uns après les autres. Cette recherche prend plus de temps.

Der Such-Modus kann unter **Extras → Suche** nach der ersten Suche ausgewählt werden. Um einen bestimmten Modus automatisch zu verwenden, kann dieser unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → Suche → Standard Such-Modus** ausgewählt werden.

Le mode de recherche peut être sélectionné sous **Extras → Recherche** après la première recherche. Pour utiliser automatiquement un mode particulier, celui-ci peut être sélectionné sous **Administration → [Nom du mandant] Administration → Paramètres pour [Nom du mandant] → Recherche → Mode de recherche standard**.

## Automatische Deep Search

## Recherche approfondie automatique

Sollte die Suche im voreingestellten Modus (siehe oben) kein oder ein unzureichendes Ergebnis liefern, kann automatisch die **Deep Search** ausgeführt werden. Dieses Verhalten wird unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → Suche → Automatische DeepSearch** konfiguriert:

Si la recherche en mode prédéfini (voir ci-dessus) ne donne aucun résultat ou un résultat insuffisant, la **Recherche en profondeur** peut être exécutée automatiquement. Ce comportement est configuré sous **Administration → [Nom du mandant] Administration → Paramètres pour [Nom du mandant] → Recherche → DeepSearch automatique** :

| Option | Beschreibung |
| --- | --- |
| **Aktiv** | Die Such-Ergebnisse werden durch eine zusätzliche **Deep Search** ergänzt. |
| **Aktiv, wenn keine Ergebnisse gefunden werden** | Die zusätzliche **Deep Search** wird gestartet, wenn keine Ergebnisse gefunden worden sind. |
| **Deaktiviert** | Die zusätzliche **Deep Search** wird nicht berücksichtigt. |

| option | description |
| --- | --- |
| Les résultats de la recherche sont complétés par une **Recherche en profondeur** supplémentaire. |
| **Active si aucun résultat n'est trouvé** | La **Recherche en profondeur** supplémentaire est lancée si aucun résultat n'est trouvé. |
| **Désactivé** | La **recherche en profondeur** supplémentaire n'est pas prise en compte. |

## Indexierung

## Indexation

Initial wird der Suchindex automatisch beim Update und der Installation erzeugt. Nur in sehr großen Datenbanken mit mehr als 500.000 Objekten muss dieser manuell erzeugt werden, damit die Suche performant läuft und gute Ergebnisse liefert. Der Index kann unabhängig von Benutzer-Interaktionen im Hintergrund erstellt bzw. aktualisiert werden. Angestoßen wird diese Aktion über die i-doit [Console](../automatisierung-und-integration/cli/console/index.md). Ein Beispielaufruf sowie Erklärungen zu den möglichen Parametern können dem [entsprechenden Artikel](../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md) entnommen werden.

Initialement, l'index de recherche est généré automatiquement lors de la mise à jour et de l'installation. Ce n'est que dans les très grandes bases de données avec plus de 500.000 objets qu'il doit être créé manuellement, afin que la recherche soit performante et donne de bons résultats. L'index peut être créé ou actualisé en arrière-plan, indépendamment des interactions de l'utilisateur. Cette action est lancée via la [Console] d'i-doit(../automatisation-et-intégration/cli/console/index.md). Un exemple d'appel ainsi que des explications sur les paramètres possibles peuvent être trouvés dans l'[article correspondant](../automatisation-et-intégration/cli/console/options-et-paramètres-de-la-console.md).

```shell
php console.php search-index -uadmin -padmin -i 1
```

Alternativ kann der Reindex auch in der i-doit Verwaltung unter **Systemtools** -> **Cache / Datenbank** über die Schaltfläche **Suche-Index** erneuern ausgeführt werden.

Il est également possible d'exécuter le Reindex dans l'administration i-doit sous **Outils système** -> **Cache / Base de données** en cliquant sur le bouton **Renouveler l'index de recherche**.

!!! info "Speicherbedarf"
    Auf einem Unix-artigen Betriebssystem wird der Index pro 1 Million indizierter Datensätze ca. 500 MByte groß. Die Dauer einer Suchabfrage wird durch große Indizes in der Regel nicht erhöht.

! !! info "Besoin en mémoire"
    Sur un système d'exploitation de type Unix, l'index pèse environ 500 Mo pour 1 million d'enregistrements indexés. En règle générale, la durée d'une requête de recherche n'est pas augmentée par de grands index.

## Über die Konsole suchen

## Rechercher via la console

Die i-doit [Console](../automatisierung-und-integration/cli/console/index.md) erlaubt auch das Suchen über die Kommandozeile. Die nötige Option heißt **search**. Ein Beispielaufruf ist im Artikel zu finden, der näher auf die [Optionen und Parameter](../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md) der i-doit Console eingeht.

L'i-doit [Console](../automatisation-et-intégration/cli/console/index.md) permet également de faire des recherches via la ligne de commande. L'option nécessaire s'appelle **search**. Un exemple d'appel est disponible dans l'article qui traite plus en détail des [options et paramètres](../automatisation-et-intégration/cli/console/options-et-paramètres-de-la-console.md) de la i-doit Console.

```shell
sudo -u www-data php console.php search -uadmin -padmin --searchString=acme
    +------+-------------------------------------------------------+------------------------------------------------------------------------+-------+
    | ID   | Key                                                   | Found Match                                                            | Score |
    +------+-------------------------------------------------------+------------------------------------------------------------------------+-------+
    | 538  | Database scheme > Global > Title                      | i-doit Tenant ACME IT Solutions                                        | 4.04  |
    | 25   | Organisation > Global > Title                         | ACME IT Solutions GmbH                                                 | 4.04  |
    | 157  | Person groups > Mail Addresses > Title                | Team: intern@acme-it.example                                           | 4.04  |
    | 158  | Persons > Mail Addresses > Title                      | Adam Riese: a.riese@acme-it.example                                    | 4.04  |
    | 160  | Persons > Mail Addresses > Title                      | Mara Thon: m.thon@acme-it.example                                      | 4.04  |
    | 164  | Persons > Mail Addresses > Title                      | Falk Narei: f.narei@acme-it.example                                    | 4.04  |
    | 25   | Organisation > Mail Addresses > Title                 | ACME IT Solutions GmbH: info@acme-it.example                           | 4.04  |
    [...]
    +------+-------------------------------------------------------+------------------------------------------------------------------------+-------+
```

## Über die API suchen

## Rechercher via l'API

Über die [programmierbare Schnittstelle (API)](../i-doit-pro-add-ons/api/index.md) von i-doit kann ebenfalls in der IT-Dokumentation gesucht werden. Die nötige Methode lautet idoit.search:

L'[interface programmable (API)](../i-doit-pro-add-ons/api/index.md) d'i-doit permet également d'effectuer des recherches dans la documentation informatique. La méthode nécessaire est idoit.search :

```json
{
    "version": "2.0",
    "method": "idoit.search",
    "params": {
        "q": "acme",
        "apikey": "c1ia5q",
        "language": "en"
    },
    "id": 1
}
```

Die Antwort vom Server sieht folgendermaßen aus:

La réponse du serveur est la suivante :

```shell
{
    "jsonrpc": "2.0",
    "result": [
        {

            "documentId": "1412",
            "key": "Client > Ip > Dns domain",
            "value": "Laptop 001: intern.acme-it.example",
            "type": "cmdb",
            "link": "\/?objID=1412&catgID=47&cateID=47&highlight=acme",
            "score": 0

        },
        // […]

    ],
    "id": 1

}
```

## Indexierung anpassen

## Personnaliser l'indexation

Die Indexierung von i-doit beansprucht viele Funktionen, die von MySQL/MariaDB zur Verfügung gestellt werden. Diese lassen sich benutzerdefiniert anpassen. Für einige Einstellungen wird die [Konfigurationsdatei von MySQL/MariaDB](../installation/manuelle-installation/systemeinstellungen.md) angepasst (zum Beispiel unter /etc/mysql/conf.d/i-doit.cnf). Für andere ist das Ausführen von SQL-Statements erforderlich, wofür sich der Client auf der Kommandozeile eignet. Beispiel:

L'indexation d'i-doit fait appel à de nombreuses fonctions mises à disposition par MySQL/MariaDB. Celles-ci peuvent être adaptées selon les besoins de l'utilisateur. Pour certains paramètres, le [fichier de configuration de MySQL/MariaDB](../installation/installation manuelle/paramètres système.md) est adapté (par exemple sous /etc/mysql/conf.d/i-doit.cnf). Pour d'autres, il est nécessaire d'exécuter des instructions SQL, pour lesquelles le client en ligne de commande est approprié. Exemple :

```shell
mysql -uroot -p -hlocalhost
```

### Wortlänge

### Longueur du mot

Eine wichtige Frage lautet, [wie lang ein Wort mindestens sein muss](https://dev.mysql.com/doc/refman/5.7/en/innodb-parameters.html#sysvar_innodb_ft_min_token_size), damit es indexiert wird. Häufig steht dieser Wert auf 3 Zeichen. Begriffe wie "PC 01" werden hiermit nicht gefunden. Geeignet wäre die Angabe von 2 oder sogar 1 Zeichen.

Une question importante est de savoir [quelle doit être la longueur minimale d'un mot](https://dev.mysql.com/doc/refman/5.7/en/innodb-parameters.html#sysvar_innodb_ft_min_token_size) pour qu'il soit indexé. Souvent, cette valeur est fixée à 3 caractères. Des termes comme "PC 01" ne sont pas trouvés avec cette valeur. Il serait plus approprié d'indiquer 2 ou même 1 caractère.

```ini
innodb_ft_min_token_size = 2 # minimale Zeichenanzahl eines Suchbegriffes
```

Diese Einstellung könnte dazu führen, dass der Index um ein vielfaches größer wird.

Ce réglage pourrait entraîner une multiplication de l'index.

### Worttrenner

### Séparateur de mots

Um Wörter voneinander zu unterscheiden, werden verschiedene Zeichen als Worttrenner herangezogen (z. B. Leerzeichen, Punkt, Strich). Damit der Begriff "PC-01" gefunden wird, wird dieser in "PC" und "01" aufgeteilt. Hier ist also wieder die Wortlänge entscheidend, ob "PC" und "01" indiziert werden oder nicht.

Pour distinguer les mots les uns des autres, différents caractères sont utilisés comme séparateurs de mots (p. ex. espace, point, tiret). Pour que le terme "PC-01" soit trouvé, il est divisé en "PC" et "01". Ici, c'est donc à nouveau la longueur du mot qui détermine si "PC" et "01" sont indexés ou non.

### Stoppwörter

### Mots d'arrêt

Als [Stoppwörter](https://de.wikipedia.org/wiki/Stoppwort) gelten Begriffe, die bei einer Suche ignoriert werden. Daher sollte der Index diese nicht berücksichtigen. Zu diesen Wörtern zählen beispielswese "am", "dem" und "mit". MySQL bringt bereits eine Liste an Stoppwörtern mit, die allerdings relativ klein ausfällt und nur englische Begriffe beinhaltet. Diese lässt sich allerdings durch eine eigene Liste ersetzen. Dazu dienen die folgenden SQL Statements:

Sont considérés comme [mots d'arrêt](https://de.wikipedia.org/wiki/Stoppwort) les termes qui sont ignorés lors d'une recherche. L'index ne doit donc pas les prendre en compte. Parmi ces mots, on trouve par exemple "am", "dem" et "mit". MySQL fournit déjà une liste de mots d'arrêt, mais elle est relativement petite et ne contient que des termes anglais. Il est toutefois possible de la remplacer par une liste personnalisée. Les instructions SQL suivantes sont utilisées à cet effet :

System-Datenbank von i-doit angeben:

Indiquer la base de données système d'i-doit :

```sql
USE idoit_system;
```

```
## Falls die Tabelle noch nicht existiert, sollte sie erstellt werden:
```

```sql
CREATE TABLE IF NOT EXISTS isys_search_stopwords (value VARCHAR(18) NOT NULL DEFAULT '') ENGINE=INNODB DEFAULT CHARSET=latin1;
```

Tabelle leeren:

Vider le tableau :

```sql
TRUNCATE TABLE isys_search_stopwords;
```

Liste von deutschen Stoppwörtern einfügen:

Insérer une liste de mots d'arrêt allemands :

```sql
INSERT INTO isys_search_stopwords (value)
VALUES ('aber'), ('als'), ('also'), ('am'), ('an'), ('auch'), ('auf'), ('aus'), ('bei'), ('bin'), ('bis'), ('bist'), ('da'), ('dadurch'), ('daher'), ('darum'), ('das'), ('daß'), ('dass'), ('dein'), ('deine'), ('dem'), ('den'), ('der'), ('des'), ('deshalb'), ('dessen'), ('die'), ('dies'), ('dieser'), ('dieses'), ('doch'), ('dort'), ('du'), ('durch'), ('ein'), ('eine'), ('einem'), ('einen'), ('einer'), ('eines'), ('er'), ('es'), ('euer'), ('eure'), ('für'), ('hatte'), ('hatten'), ('hattest'), ('hattet'), ('hier'), ('hinter'), ('ich'), ('ihr'), ('ihre'), ('im'), ('in'), ('ist'), ('ja'), ('jede'), ('jedem'), ('jeden'), ('jeder'), ('jedes'), ('jener'), ('jenes'), ('jetzt'), ('kann'), ('kannst'), ('können'), ('könnt'), ('machen'), ('mein'), ('meine'), ('mit'), ('muß'), ('müssen'), ('mußt'), ('musst'), ('müßt'), ('nach'), ('nachdem'), ('nein'), ('nicht'), ('nun'), ('oder'), ('seid'), ('sein'), ('seine'), ('sich'), ('sie'), ('sind'), ('soll'), ('sollen'), ('sollst'), ('sollt'), ('sonst'), ('soweit'), ('sowie'), ('über'), ('und'), ('unser'), ('unsere'), ('unter'), ('vom'), ('von'), ('vor'), ('wann'), ('warum'), ('was'), ('weiter'), ('weitere'), ('wenn'), ('wer'), ('werde'), ('werden'), ('werdet'), ('weshalb'), ('wie'), ('wieder'), ('wieso'), ('wir'), ('wird'), ('wirst'), ('wo'), ('woher'), ('wohin'), ('zu'), ('zum'), ('zur');
```

Eine Liste von Stoppwörtern in verschiedenen Sprachen können im Internet schnell recherchiert werden.

Une liste de mots d'arrêt dans différentes langues peut être rapidement recherchée sur Internet.

Damit diese Liste die von MySQL ersetzt, wird folgende Einstellungen nötig:

Pour que cette liste remplace celle de MySQL, les réglages suivants sont nécessaires :

```ini
innodb_ft_server_stopword_table = 'idoit_system/isys_search_stopwords'
```

### Änderungen am Index aktivieren

### Activer les modifications de l'index

Damit Änderungen am Index-Verhalten wirksam werden, sind drei Schritte erforderlich. Erst sollte der MySQL-Dienst neu gestartet werden. Unter Debian-basierten Betriebssystemen führt man folgenden Befehl aus:

Pour que les modifications du comportement de l'index prennent effet, trois étapes sont nécessaires. Tout d'abord, le service MySQL doit être redémarré. Sur les systèmes d'exploitation basés sur Debian, on exécute la commande suivante :

```shell
sudo systemctl restart mysql.service
```

Anschließend muss folgendes SQL Statement für jede Mandanten-Datenbank ausgeführt werden:

Ensuite, la déclaration SQL suivante doit être exécutée pour chaque base de données client :

```sql
OPTIMIZE TABLE isys_search_idx;
```

Vollständiges SQL Statement für den ersten Mandanten mit der Datenbank idoit_data:

Statement SQL complet pour le premier mandant avec la base de données idoit_data :

```sql
USE idoit_data;
OPTIMIZE TABLE isys_search_idx;
```

Zum Schluss muss eine Neu-Indexing über die i-doit Console oder die i-doit Verwaltung durchgeführt werden (siehe oben).

Enfin, il faut effectuer une réindexation via la Console i-doit ou l'administration i-doit (voir ci-dessus).

### Das Limit von 2500 Ergenissen erhöhen

### Augmenter la limite de 2500 résultats

Wenn Objekte fortlaufend benannt werden z.B. 123456-00001 bis 123456-99999 so können mit normalen Sucheinstellungen nur Objekte bis 123456-2500 gefunden werden.  
Dieses Limit dient der Performance. Um dieses Limit zu erhöhen muss eine Experteneinstellung hinzugefügt werden.

Si les objets sont nommés de manière continue, par exemple de 123456-00001 à 123456-99999, les paramètres de recherche normaux ne permettent de trouver que des objets jusqu'à 123456-2500.  
Cette limite sert à améliorer les performances. Pour augmenter cette limite, il faut ajouter un paramètre expert.

Hier ein Beispiel bei dem das Limit auf 5000 Ergenisse gesetzt wurde.

Voici un exemple où la limite a été fixée à 5000 résultats.

| Key | Value | Type |
| --- | --- | --- |
| search.limit | 5000 | Tenant-wide |

| clé | valeur | type |
| --- | --- | --- |
| search.limit | 5000 | Tenant-wide |