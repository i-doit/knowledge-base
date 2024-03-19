<!-- TRANSLATED by md-translate -->
# Variable Reports

# Rapports variables

Die variablen Reports sind nützlich, um die eigene i-doit-Installation noch weiter auf den persönlichen Zuschnitt hin anzupassen.

Les rapports variables sont utiles pour adapter encore plus sa propre installation i-doit à ses besoins personnels.

## Benutzerdefinierte Kategorie

## Catégorie définie par l'utilisateur

Viele Anwender haben bereits heute [benutzerdefinierte Kategorien](../grundlagen/benutzerdefinierte-kategorien.md) in Verwendung. Eine Sache, die benutzerdefinierte Kategorien auszeichnet, ist unter anderem die Möglichkeit zur Verknüpfung von [Objekten](../grundlagen/struktur-it-dokumentation.md).

De nombreux utilisateurs ont déjà recours aux [catégories personnalisées](../bases/catégories-personnalisées.md). Une chose qui caractérise les catégories définies par l'utilisateur est, entre autres, la possibilité de lier des [objets](../bases/structure-it-documentation.md).

Nehmen wir an, in der Organisation sind Bereichsdrucker definiert. Die Räume **1.01** bis **1.07** verwenden **HQ Staff Printer 01**, die Räume **1.0****8** bis **1.11** den **HQ Staff Printer 02**.

Supposons que des imprimantes de secteur soient définies dans l'organisation. Les salles **1.01** à **1.07** utilisent **HQ Staff Printer 01**, les salles **1.0****8** à **1.11** l'imprimante **HQ Staff Printer 02**.

Dokumentiert wird das mit der benutzerdefinierten Kategorie **Bereichsdrucker**. Diese wird dem [Objekttyp](../grundlagen/struktur-it-dokumentation.md) **Drucker** zugeordnet und als [Single-Value-Kategorie](../grundlagen/struktur-it-dokumentation.md), nicht als [Listen-Kategorie (Multi-Value)](../grundlagen/struktur-it-dokumentation.md) definiert. Das [Attribut](../grundlagen/struktur-it-dokumentation.md) **Bereichsdrucker für** wird als **Objekt-Beziehung (Mehrfachauswahl)** mit **Zusatz Freigabenzugriff** hinzugefügt.

Cela est documenté par la catégorie définie par l'utilisateur **Imprimante de zone**. Celle-ci est attribuée au [type d'objet](../grundlagen/struktur-it-dokumentation.md) **Imprimante** et définie comme [catégorie à valeur unique](../grundlagen/struktur-it-dokumentation.md), et non comme [catégorie à liste (multi-valeurs)](../grundlagen/struktur-it-dokumentation.md). L'[attribut](../bases/structure-it-documentation.md) **Imprimante de zone pour** est ajouté en tant que **Relation d'objet (sélection multiple)** avec **Ajout d'accès de partage**.

[![benutzerdefinierte-kategorien](../assets/images/de/auswertungen/variable-reports/1-vr.png)](../assets/images/de/auswertungen/variable-reports/1-vr.png)

[ ![catégories-personnalisées](../assets/images/fr/évaluations/variable-reports/1-vr.png)](../assets/images/fr/évaluations/variable-reports/1-vr.png)

Danach wechselt man zum Objekt **HQ Staff Printer 01**. In der Kategorie **Bereichsdrucker** wählt man nun in die zugeordneten Räume aus.

Ensuite, on passe à l'objet **HQ Staff Printer 01**. Dans la catégorie **Imprimante de zone**, on choisit maintenant dans les salles attribuées.

[![objekt-browser](../assets/images/de/auswertungen/variable-reports/2-vr.png)](../assets/images/de/auswertungen/variable-reports/2-vr.png)

[ ![object-browser](../assets/images/fr/évaluations/variable-reports/2-vr.png)](../assets/images/fr/évaluations/variable-reports/2-vr.png)

Das Ergebnis sieht in der Kategorie dann so aus wie im nachfolgenden Bild.

Le résultat se présente alors dans la catégorie comme dans l'image ci-dessous.

[![bereichsdrucker](../assets/images/de/auswertungen/variable-reports/3-vr.png)](../assets/images/de/auswertungen/variable-reports/3-vr.png)

[ ![imprimante de zone](../assets/images/fr/évaluations/variable-reports/3-vr.png)](../assets/images/fr/évaluations/variable-reports/3-vr.png)

Dies lässt sich auch mit dem [CMDB-Explorer](../auswertungen/cmdb-explorer/index.md) visualisieren.

Cela peut également être visualisé à l'aide de [CMDB-Explorer](../exploitations/cmdb-explorer/index.md).

[![cmdb-explorer](../assets/images/de/auswertungen/variable-reports/4-vr.png)](../assets/images/de/auswertungen/variable-reports/4-vr.png)

[ ![cmdb-explorer](../assets/images/fr/évaluations/variable-reports/4-vr.png)](../assets/images/fr/évaluations/variable-reports/4-vr.png)

## Rückwärtige Ansicht für benutzerdefinierte Kategorie

## Vue arrière pour catégorie personnalisée

So weit so gut. Doch wie findet man heraus, wenn man sich den Raum **1.05** ansieht, welcher Bereichsdrucker für diesen Raum definiert ist? Dafür ist eine rückwärtige Ansicht nötig, mit der man feststellen kann, welcher Drucker in Beziehung zu diesem Raum steht. Mit den variablen Reports gibt für solche kontextabhängigen Abfragen eine Lösung.

Jusqu'ici, tout va bien. Mais comment savoir, en regardant la salle **1.05**, quelle imprimante de zone est définie pour cette salle ? Pour cela, il faut une vue arrière qui permette de déterminer quelle imprimante est en relation avec cette salle. Les rapports variables offrent une solution pour de telles requêtes contextuelles.

Dazu wird ein [Report](../auswertungen/report-manager.md) und eine weitere benutzerdefinierte Kategorie erstellt. Zunächst zum Report **Bereichsdrucker rückwärtig**. Dort wird die Checkbox **Variabler Report** angehakt und unter **Ausgabe** einige interessante Attribute zu den Druckern ausgewählt.

Pour ce faire, un [rapport](../évaluations/report-manager.md) et une autre catégorie définie par l'utilisateur sont créés. Tout d'abord, le rapport **Imprimante de la zone arrière**. On y coche la case **Rapport variable** et on sélectionne sous **Sortie** quelques attributs intéressants concernant les imprimantes.

[![abfrage-editor](../assets/images/de/auswertungen/variable-reports/5-vr.png)](../assets/images/de/auswertungen/variable-reports/5-vr.png)

[ ![éditeur de requêtes](../assets/images/fr/évaluations/variable-reports/5-vr.png)](../assets/images/fr/évaluations/variable-reports/5-vr.png)

Im Abfrage-Editor gibt es die Möglichkeit, bei allen Verknüpfungen, die Beziehungen generieren, unter **Bedingungen** einen **Feldplatzhalter** zu setzen.

Dans l'éditeur de requêtes, il est possible de placer un **module de champ** sous **conditions** pour tous les liens qui génèrent des relations.

Für diesen Anwendungsfall heißt das: Der Report "sucht" nach jenen Objekten, in denen in der benutzerdefinierten Kategorie **Bereichsdrucker** im Attribut **Bereichsdrucker für** die [Objekt-ID](../grundlagen/eindeutige-referenzierungen.md) des aktuell ausgewählten Objektes eingetragen ist. Doch was ist das ausgewählte Objekt? Im Kontext des Report Managers gibt es kein ausgewähltes Objekt.

Pour ce cas d'application, cela signifie que le rapport "recherche" les objets dans lesquels l'[ID objet](../bases/références-uniques.md) de l'objet actuellement sélectionné est saisi dans l'attribut **Imprimante de zone pour** de la catégorie définie par l'utilisateur **Imprimante de zone pour**. Mais qu'est-ce que l'objet sélectionné ? Dans le contexte du Report Manager, il n'y a pas d'objet sélectionné.

Daher muss stets ein Objekt auswählt werden, um den Report ausfüllen zu können. Das geschieht dadurch, indem man zum Report eine Kategorie erstellt, die den Report innerhalb eines Objektes ausführt. Diese wird **Bereichsdrucker rückwärtig** genannt, dem Objekttyp **Raum** zugeordnet und als Single-Value-Kategorie definiert. Zudem erhält sich ein namenloses Attribut mit dem **Feldtyp Report**. Unter **Zusatz** wird die ID des oben erstellten Reports angegeben.

C'est pourquoi il faut toujours sélectionner un objet pour pouvoir remplir le rapport. Pour ce faire, on crée une catégorie pour le rapport, qui exécute le rapport à l'intérieur d'un objet. Celle-ci est appelée **Imprimante de zone arrière**, affectée au type d'objet **Space** et définie comme catégorie Single-Value. De plus, un attribut sans nom est créé avec le **type de champ Report**. Sous **Ajout**, l'ID du rapport créé ci-dessus est indiqué.

[![report-1](../assets/images/de/auswertungen/variable-reports/6-vr.png)](../assets/images/de/auswertungen/variable-reports/6-vr.png)

[ ![report-1](../assets/images/fr/évaluations/variable-reports/6-vr.png)](../assets/images/fr/évaluations/variable-reports/6-vr.png)

Die Report-ID ist in der Übersicht der bereits definierten Reports enthalten.

L'ID du rapport figure dans l'aperçu des rapports déjà définis.

[![report-2](../assets/images/de/auswertungen/variable-reports/7-vr.png)](../assets/images/de/auswertungen/variable-reports/8-vr.png)

[ ![report-2](../assets/images/fr/évaluations/variable-reports/7-vr.png)](../assets/images/fr/évaluations/variable-reports/8-vr.png)

In Raumobjekten steht jetzt die neue Kategorie zur Verfügung, die den Report immer für das Objekt ausführt, in dem sich der Anwender befindet. Dadurch erhält man eine rückwärtige Ansicht über die Beziehung zum Bereichsdrucker.

Dans les objets de l'espace, la nouvelle catégorie est désormais disponible, qui exécute toujours le rapport pour l'objet dans lequel se trouve l'utilisateur. On obtient ainsi une vue arrière de la relation avec l'imprimante de la zone.

[![report-3](../assets/images/de/auswertungen/variable-reports/8-vr.png)](../assets/images/de/auswertungen/variable-reports/8-vr.png)

[ ![report-3](../assets/images/fr/évaluations/variable-reports/8-vr.png)](../assets/images/fr/évaluations/variable-reports/8-vr.png)