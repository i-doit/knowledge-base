<!-- TRANSLATED by md-translate -->
# Struktur der IT-Dokumentation

# Structure de la documentation informatique

Wie i-doit die [IT-Dokumentation](../glossar.md) strukturiert, ist Thema dieses Artikels. Hierbei geht es vor allem um das Vokabular, das in i-doit Verwendung findet, wie die Begriffe in Zusammenhang stehen und wie dies in der Web GUI dargestellt wird.

Le sujet de cet article est la manière dont i-doit structure la [documentation IT](../glossaire.md). Il s'agit avant tout du vocabulaire utilisé dans i-doit, de la manière dont les termes sont reliés entre eux et de la façon dont cela est représenté dans l'interface utilisateur graphique Web.

## Von der Navigation

## De la navigation

Nach der [Anmeldung](erstanmeldung.md) erscheint zunächst das [Dashboard mit Widgets](dashboard-und-widgets.md). Von dort aus lässt sich die IT-Dokumentation erkunden. Vom Hauptnavigationsleiste (der schwarze Bereich oben) erreicht man fast alle Funktionen in i-doit.

Après la [connexion](erstanmeldung.md), le [tableau de bord avec widgets](dashboard-und-widgets.md) apparaît en premier. C'est à partir de là que la documentation informatique peut être explorée. Depuis la barre de navigation principale (la zone noire en haut), on accède à presque toutes les fonctions d'i-doit.

[![Navigation](../assets/images/de/grundlagen/struktur-der-it-dokumentation/1-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/1-sitdoku.png)

[ ![Navigation](../assets/images/fr/bases/structure-du-it-documentation/1-sitdoku.png)](../assets/images/fr/bases/structure-du-it-documentation/1-sitdoku.png)

Um sich zu orientieren, wo man sich befindet, hilft ein Blick auf die Brotkrumen-Navigation. Von dort aus lassen sich übergeordnete Seiten ansteuern.

Pour savoir où l'on se trouve, il est utile de jeter un coup d'œil à la navigation en fil d'Ariane. De là, il est possible d'accéder à des pages de niveau supérieur.

[![Navigation-2](../assets/images/de/grundlagen/struktur-der-it-dokumentation/2-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/2-sitdoku.png)

[ ![Navigation-2](../assets/images/fr/bases/structure-du-it-documentation/2-sitdoku.png)](../assets/images/fr/bases/structure-du-it-documentation/2-sitdoku.png)

## Von Gruppen, Typen und Kategorisierungen

## De groupes, de types et de catégorisations

Objekttypengruppen umfassen Objekttypen instantiieren Objekte erben Kategorien beinhalten Attribute. Alles klar? Noch einmal langsam und ganz von vorn.

Les groupes de types d'objets comprennent les types d'objets instancient les objets héritent des catégories contiennent des attributs. Tout est clair ? Reprenons lentement et depuis le début.

[![Objekttypgruppen](../assets/images/de/grundlagen/struktur-der-it-dokumentation/3-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/3-sitdoku.png)

[ ![Groupes de types d'objets](../assets/images/fr/bases/structure-du-documentaire-it/3-sitdoku.png)](../assets/images/fr/bases/structure-du-documentaire-it/3-sitdoku.png)

### Objekttypgruppe

### Groupe de types d'objets

In einer gelebten und gut gefüllten IT-Dokumentation kommen nicht selten viele Objekttypen zum Einsatz. Damit sich diese Fülle übersichtlich präsentiert, können gleichartige Objekttypen gruppiert werden. Diese Objekttypgruppen erscheinen in der Hauptnavigationsleiste (oberster Bereich) von i-doit.

Dans une documentation informatique vivante et bien remplie, il n'est pas rare que de nombreux types d'objets soient utilisés. Pour que cette abondance se présente de manière claire, les types d'objets similaires peuvent être regroupés. Ces groupes de types d'objets apparaissent dans la barre de navigation principale (partie supérieure) d'i-doit.

[![Objekttypgruppen-2](../assets/images/de/grundlagen/struktur-der-it-dokumentation/4-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/5-sitdoku.png)

[ ![Groupes de types d'objets-2](../assets/images/fr/bases/structure-du-documentaire-it/4-sitdoku.png)](../assets/images/fr/bases/structure-du-documentaire-it/5-sitdoku.png)

In unserem Beispiel betrachten wir die Objekttypgruppe "Hardware".

Dans notre exemple, nous considérons le groupe de types d'objets "matériel".

[![Objekttypgruppen-3](../assets/images/de/grundlagen/struktur-der-it-dokumentation/5-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/5-sitdoku.png)

[ ![Groupes de types d'objets-3](../assets/images/fr/bases/structure-du-it-documentation/5-sitdoku.png)](../assets/images/fr/bases/structure-du-it-documentation/5-sitdoku.png)

### Objekttyp

### Type d'objet

Als Objekttyp bezeichnen wir die Zusammenfassung aller Objekte desselben Typs. Beispiele sind "Router", "Server" oder "Anwendungen". Üblicherweise wird diese Zusammenfassung auch als "Klasse" bezeichnet. In ITIL© wird der Begriff "CI-Typ" (Original: "CI Type") verwendet.

Par type d'objet, nous entendons le regroupement de tous les objets du même type. Les exemples sont "routeur", "serveur" ou "applications". Habituellement, ce regroupement est également appelé "classe". Dans ITIL©, on utilise le terme "type CI" (original : "CI Type").

i-doit enthält in der Standard-Installation bereits eine Vielzahl an vor konfigurierten Objekttypen. Sollten diese nicht ausreichen, lassen sich [eigene Objekttypen erstellen](benutzerdefinierte-objekttypen.md).

Dans l'installation standard, i-doit contient déjà un grand nombre de types d'objets préconfigurés. S'ils ne suffisent pas, il est possible de [créer ses propres types d'objets] (user-defined-objecttypen.md).

Pro Objekttyp existiert eine [Objektliste](objekt-liste/index.md), die alle diesem Objekttyp zugeordneten Objekte mit einigen Attributen auflistet. Als Beispiel betrachten wir die Objektliste für den Objekttyp "Virtualisierungsserver".

Pour chaque type d'objet, il existe une [liste d'objets](objekt-liste/index.md) qui répertorie tous les objets affectés à ce type d'objet avec quelques attributs. A titre d'exemple, nous considérons la liste d'objets pour le type d'objet "serveur de virtualisation".

[![Objekttyp](../assets/images/de/grundlagen/struktur-der-it-dokumentation/6-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/6-sitdoku.png)

[ ![Type d'objet](../assets/images/fr/bases/structure-du-it-documentation/6-sitdoku.png)](../assets/images/fr/bases/structure-du-it-documentation/6-sitdoku.png)

### Objekt

### objet

Zu jedem Artefakt, das dokumentiert werden soll, muss entschieden werden, als was es gespeichert wird. Beispielsweise wird ein einzelner Server oftmals als ein zusammenhängendes Konstrukt betrachtet. In diesem Fall wird ein Server als Objekt in i-doit angelegt. Objekte sind in i-doit alle Dinge, die wir in einer IT-Dokumentation dokumentieren, gleich ob es sich um physische Geräte wie Server oder Clients oder logische Konstrukte wie Netze oder Services handelt. Ein Objekt definiert sich durch seinen Objekttyp, der bestimmt, welche Attribute für das Objekt mit Werten belegt werden kann. In ITIL© wird der Begriff "Configuration Item (CI)" verwendet. Im Asset Management ist der Begriff "Asset Value" verbreitet. Wir möchten durch den Begriff "Objekt" eine abstraktere und damit allgemeingültige sowie vielseitig verwendbare Definition etablieren.

Pour chaque artefact qui doit être documenté, il faut décider sous quelle forme il sera enregistré. Par exemple, un serveur individuel est souvent considéré comme une construction cohérente. Dans ce cas, un serveur est créé en tant qu'objet dans i-doit. Dans i-doit, les objets sont toutes les choses que nous documentons dans une documentation informatique, qu'il s'agisse d'appareils physiques comme les serveurs ou les clients ou de constructions logiques comme les réseaux ou les services. Un objet se définit par son type d'objet, qui détermine les attributs auxquels des valeurs peuvent être attribuées pour l'objet. Dans ITIL©, le terme utilisé est "Configuration Item (CI)". Dans la gestion des actifs, le terme "Asset Value" est plus répandu. En utilisant le terme "objet", nous souhaitons établir une définition plus abstraite et donc plus universelle et utilisable de manière polyvalente.

In i-doit gibt es in der Standard-Installation einige Objekte, die für die korrekte Funktionsweise essentiell sind. Dazu gehören Benutzer-Objekte vom Objekttyp "Personen", weiterhin "Personengruppen" für die Rechte und "[Layer-3-Netze](../anwendungsfaelle/ip-adress-management.md)". Zudem gibt es nicht sichtbare Objekte, z. B. die "Root-Lokation" für Standorte. Diese lassen sich nicht löschen.

Dans l'installation standard d'i-doit, il y a quelques objets qui sont essentiels au bon fonctionnement. Il s'agit notamment d'objets utilisateurs de type "personnes", de "groupes de personnes" pour les droits et de "[Layer-3-Netze](../anwendungsfaelle/ip-adress-management.md)". Il existe en outre des objets non visibles, par exemple l'"emplacement racine" pour les sites. Ceux-ci ne peuvent pas être supprimés.

Jedes Objekt in i-doit erhält einen Titel. Dieser wird als Attribut in der Kategorie "Allgemein" dokumentiert. Synoym wird dieses Attribut auch "Bezeichnung", "Name", "Objekt-Link" genannt.

Chaque objet dans i-doit reçoit un titre. Celui-ci est documenté en tant qu'attribut dans la catégorie "Généralités". Synonyme, cet attribut est également appelé "désignation", "nom", "lien d'objet".

[![Objekt](../assets/images/de/grundlagen/struktur-der-it-dokumentation/7-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/7-sitdoku.png)

[ ![Objet](../assets/images/fr/bases/structure-du-it-documentation/7-sitdoku.png)](../assets/images/fr/bases/structure-du-it-documentation/7-sitdoku.png)

Im Beispiel beleuchten wir das Objekt mit dem Objekt-Titel "ESX1". Dazu reicht ein Klick auf den Objekt-Link in der oben genannten Objektliste.

Dans l'exemple, nous éclairons l'objet avec le titre d'objet "ESX1". Pour ce faire, il suffit de cliquer sur le lien de l'objet dans la liste d'objets susmentionnée.

### Kategorie

### catégorie

Thematisch zusammenhängende Attribute werden pro Objekt in Kategorien zusammengefasst. Es gibt drei Typen von Kategorien: globale, spezifische und [benutzerdefinierte](benutzerdefinierte-kategorien.md). Zudem unterteilen sie sich in Single- und Multi-Value-Kategorien (Listen-Kategorien). Manche Kategorien sind rückwärtig, andere wiederum dienen als View. Einige sind fest jedem Objekttyp und somit jedem Objekt zugeordnet, andere lassen sich flexibel pro Objekttyp zu- und abwählen Zu guter Letzt gibt es spezielle Kategorien wie "Allgemein" oder die "Übersichtsseite".

Les attributs liés thématiquement sont regroupés par objet dans des catégories. Il existe trois types de catégories : globales, spécifiques et [définies par l'utilisateur](catégories-personnalisées.md). Elles se divisent en outre en catégories à valeur unique et en catégories à valeurs multiples (catégories de listes). Certaines catégories sont en arrière, d'autres servent de vues. Certaines sont attribuées de manière fixe à chaque type d'objet et donc à chaque objet, d'autres peuvent être sélectionnées ou désélectionnées de manière flexible par type d'objet. Enfin, il existe des catégories spéciales telles que "Général" ou la "Page d'aperçu".

Kategorien werden im linken Navigationsbaum in der Objektsicht angezeigt.

Les catégories sont affichées dans l'arborescence de navigation de gauche dans la vue de l'objet.

[![Kategorie](../assets/images/de/grundlagen/struktur-der-it-dokumentation/8-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/8-sitdoku.png)

[ ![Catégorie](../assets/images/fr/bases/structure-du-it-documentation/8-sitdoku.png)](../assets/images/fr/bases/structure-du-it-documentation/8-sitdoku.png)

Oberhalb des linken Navigationsbaums werden die statischen Kategorien als Icons aufgelistet.

Au-dessus de l'arborescence de navigation de gauche, les catégories statiques sont listées sous forme d'icônes.

[![Icons](../assets/images/de/grundlagen/struktur-der-it-dokumentation/9-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/9-sitdoku.png)

[ ![Icônes](../assets/images/fr/bases/structure-du-document/9-sitdoku.png)](../assets/images/fr/bases/structure-du-document/9-sitdoku.png)

Kategorien haben in der Regel zwei Ansichten: eine zum Lesen und eine zum Bearbeiten. Um Attribute in einer Kategorie zu bearbeiten, klickt man in der Aktionsleiste auf den Button **Editieren**.

Les catégories ont généralement deux vues : une pour la lecture et une pour l'édition. Pour éditer des attributs dans une catégorie, il faut cliquer sur le bouton **Editer** dans la barre d'action.

[![Kategorien](../assets/images/de/grundlagen/struktur-der-it-dokumentation/10-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/10-sitdoku.png)

[ ![Catégories](../assets/images/fr/bases/structure-du-it-documentation/10-sitdoku.png)](../assets/images/fr/bases/structure-du-it-documentation/10-sitdoku.png)

Für unser Beispiel betrachten wir die Kategorie Modell.

Pour notre exemple, nous considérons la catégorie Modèle.

[![Kategorie-Modell](../assets/images/de/grundlagen/struktur-der-it-dokumentation/11-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/11-sitdoku.png)

[ ![Modèle de catégorie](../assets/images/fr/bases/structure-du-it-documentation/11-sitdoku.png)](../assets/images/fr/bases/structure-du-it-documentation/11-sitdoku.png)

[Kategorien werden Objekttypen zugeordnet](zurodnung-von-kategorien-zu-objekttypen.md), nicht Objekten. Jedes Objekt eines Objekttyps hat dieselben Kategorien zugeordnet.

[Les catégories sont attribuées à des types d'objets](zuodnung-von-kategorien-zu-objecttypen.md), et non à des objets. Chaque objet d'un type d'objet est associé aux mêmes catégories.

#### Übersichtsseite

#### page d'aperçu

Die Übersichtsseite wird beim Aufruf eines Objekts in der Web GUI von i-doit dargestellt. Sie besteht aus der Kategorie "Allgemein" und optional weiteren Kategorien, die dem Objekttyp zugeordnet sind. Diese können in der [Objekttyp-Konfiguration](../assets/images/de/grundlagen/struktur-der-it-dokumentation/0-sitdoku.png) an- oder abgewählt sowie sortiert werden.

La page d'aperçu est affichée lors de l'appel d'un objet dans la Web GUI d'i-doit. Elle se compose de la catégorie "Général" et, en option, d'autres catégories associées au type d'objet. Celles-ci peuvent être sélectionnées ou désélectionnées et triées dans la [Configuration du type d'objet](../assets/images/fr/grundlagen/struktur-der-it-dokumentation/0-sitdoku.png).

[![Übersichtsseite](../assets/images/de/grundlagen/struktur-der-it-dokumentation/12-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/12-sitdoku.png)

[ ![Page d'accueil](../assets/images/fr/bases/structure-du-documentaire-it/12-sitdoku.png)](../assets/images/fr/bases/structure-du-documentaire-it/12-sitdoku.png)

#### Kategorie "Allgemein"

#### Catégorie "Généralités

Die Kategorie "Allgemein" gehört zu jenen Kategorien, die fester Bestandteil eines jeden Objekts sind. Daher lässt sie sich pro Objekttyp nicht als unerwünscht abwählen. In dieser Kategorien werden wichtige Attribute festgehalten wie der Objekt-Titel, SYS-ID, [CMDB-Status und Zustand](lebens-und-dokumentationszyklus.md).

La catégorie "Général" fait partie des catégories qui font partie intégrante de chaque objet. C'est pourquoi elle ne peut pas être désélectionnée comme indésirable par type d'objet. Dans cette catégorie sont consignés des attributs importants tels que le titre de l'objet, l'ID SYS, [le statut CMDB et l'état](cycle de vie et de documentation.md).

[![Kategorie-Allgemein](../assets/images/de/grundlagen/struktur-der-it-dokumentation/13-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/13-sitdoku.png)

[ ![Catégorie-Général](../assets/images/fr/bases/structure-du-it-documentation/13-sitdoku.png)](../assets/images/fr/bases/structure-du-it-documentation/13-sitdoku.png)

#### Globale Kategorie

#### Catégorie globale

Eine globale Kategorie kann prinzipiell jedem Objekttypen zugeordnet werden, sodass deren Attribute den jeweiligen Objekten zur Verfügung stehen. Beispiel: Kategorie "Modell".

Une catégorie globale peut en principe être attribuée à chaque type d'objet, de sorte que ses attributs soient disponibles pour les objets correspondants. Exemple : catégorie "Modèle".

#### Spezifische Kategorie

#### Catégorie spécifique

Eine spezifische Kategorie unterschiedet sich von einer globalen Kategorie dahingehend, dass deren Attribute einen sehr speziellen Fokus haben, der sich in der Regel nur für einen oder wenige Objekttypen eignet. Ein Beispiel ist die Kategorie "Schrank", die dem gleichnamigen Objekttypen "Schrank" zugeordnet ist und eine Rack-Ansicht dem Benutzer präsentiert.

Une catégorie spécifique se distingue d'une catégorie globale en ce sens que ses attributs ont un focus très spécifique, qui ne convient généralement qu'à un ou quelques types d'objets. Un exemple est la catégorie "Armoire", qui est attribuée au type d'objet du même nom "Armoire" et qui présente une vue de rack à l'utilisateur.

#### Single-Value-Kategorie

#### Catégorie de valeur unique

In einer Single-Value-Kategorie kann jedes zugehörige Attribut jeweils nur einmal pro Objekt dokumentiert werden. Ein Beispiel ist die Kategorie "Buchhaltung": Informationen zu Inventarnummer, Kostenstelle usw. werden nur einmal benötigt. Das Pendant hierzu ist die Multi-Value-Kategorie.

Dans une catégorie à valeur unique, chaque attribut correspondant ne peut être documenté qu'une seule fois par objet. La catégorie "Comptabilité" en est un exemple : les informations sur le numéro d'inventaire, le centre de coûts, etc. ne sont nécessaires qu'une seule fois. Le pendant de cette catégorie est la catégorie multi-valeurs.

#### Multi-Value-Kategorie

#### Catégorie multi-valeurs

Wenn die Attribute einer Kategorie mehrmals pro Objekt dokumentiert werden können, spricht man von einer Multi-Value-Kategorie, auch Listen-Kategorie genannt. Ein Beispiel ist die Kategorie "CPU": Handelt es sich um ein Mehrsockelsystem, kann jede CPU mit Frequenz, Kernzahl usw. separat dokumentiert werden. Das Pendant hierzu ist die Single-Value-Kategorie.

Lorsque les attributs d'une catégorie peuvent être documentés plusieurs fois par objet, on parle de catégorie multi-valeurs, également appelée catégorie liste. La catégorie "CPU" en est un exemple : S'il s'agit d'un système multi-socket, chaque CPU peut être documentée séparément avec sa fréquence, son nombre de cœurs, etc. Le pendant de cette catégorie est la catégorie Single Value.

#### Benutzerdefinierte Kategorie

#### Catégorie définie par l'utilisateur

Eine Kategorie, die von einem Benutzer angelegt und mit einem oder mehreren Attributfeldern konfiguriert wurde, wird in i-doit als [benutzerdefiniert](benutzerdefinierte-kategorien.md) markiert.

Une catégorie créée par un utilisateur et configurée avec un ou plusieurs champs d'attributs est marquée comme [définie par l'utilisateur](catégories-personnalisées.md) dans i-doit.

#### Rückwärtige Kategorie

#### Catégorie arrière

Stehen zwei oder mehrere Objekte in Beziehung zueinander, wird dies in der dafür bestimmten Kategorie festgehalten. Beispielsweise können in der Kategorie "Kontaktzuweisung" beliebig viele Personen, Personengruppen etc. als Kontakt für ein Objekt hinterlegt werden. Damit auch innerhalb dieser Personen und Personengruppen ersichtlich ist, welchen Objekten diese als Kontakt zugeordnet sind, existiert eine weitere Kategorie "Zugeordnete Objekte". Da dieselben Informationen dort zur Verfügung stehen, aber nur einmal gespeichert und in einem anderen Kontext dargestellt werden, handelt es sich um eine rückwärtige Kategorie.

Si deux ou plusieurs objets sont en relation les uns avec les autres, cela est consigné dans la catégorie définie à cet effet. Par exemple, dans la catégorie "Attribution de contact", il est possible d'enregistrer un nombre quelconque de personnes, groupes de personnes, etc. comme contact pour un objet. Pour qu'il soit également possible de voir, au sein de ces personnes et groupes de personnes, à quels objets elles sont attribuées en tant que contact, il existe une autre catégorie "Objets attribués". Comme les mêmes informations y sont disponibles, mais qu'elles ne sont enregistrées qu'une seule fois et représentées dans un autre contexte, il s'agit d'une catégorie arrière.

#### View-Kategorie

#### Catégorie View

In einigen Kategorien können keine Attribute pro Objekt hinterlegt werden. Sie dienen der Auswertung von anderweitig hinterlegten Daten. Die aufbereiteten Daten können nicht editiert werden. Ein Beispiel ist die Kategorie "Objektvitalität", eine Auswertung der Kategorien "CPU", "Speicher", "Port" und "Softwarezuweisung".

Dans certaines catégories, il n'est pas possible d'enregistrer des attributs par objet. Ils servent à l'évaluation de données enregistrées par ailleurs. Les données préparées ne peuvent pas être éditées. Un exemple est la catégorie "Vitalité de l'objet", une évaluation des catégories "CPU", "Mémoire", "Port" et "Attribution du logiciel".

### Attribut

### Attribut

Ein Attribut ist ein dokumentierter Wert zu einem Objekt. Gleichartige Attribute werden in i-doit zu Kategorien zusammengefasst. Beispiel: in der Kategorie "Modell" das Attribut "Seriennummer".

Un attribut est une valeur documentée pour un objet. Les attributs de même type sont regroupés en catégories dans i-doit. Exemple : dans la catégorie "Modèle", l'attribut "Numéro de série".

[![Attribut-Seriennummer](../assets/images/de/grundlagen/struktur-der-it-dokumentation/14-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/14-sitdoku.png)

[ ![Numéro de série de l'attribut](../assets/images/fr/bases/structure-du-documentaire-it/14-sitdoku.png)](../assets/images/fr/bases/structure-du-documentaire-it/14-sitdoku.png)

Wichtige Attribute aus verschiedenen Kategorien werden zu einer Ansicht vereint, die über jeder Kategorie angezeigt wird. Diese Primär-Attribute sind "SYS-ID", "Einsatzzweck" (beides in Kategorie "Allgemein"), "Beziehungen", "Standort", "Kontaktzuweisung" und "Primäre Zugriffs-URL" (Kategorie "Zugriff"). Daneben wird zudem ein QR-Code dargestellt, der den Link zur Übersichtsseite beinhaltet.

Les attributs importants de différentes catégories sont réunis dans une vue qui s'affiche au-dessus de chaque catégorie. Ces attributs primaires sont "SYS-ID", "Utilisation" (tous deux dans la catégorie "Général"), "Relations", "Emplacement", "Attribution de contact" et "URL d'accès primaire" (catégorie "Accès"). Un code QR contenant le lien vers la page d'aperçu est également affiché.

[![Kategorie-Zugriff](../assets/images/de/grundlagen/struktur-der-it-dokumentation/15-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/15-sitdoku.png)

[ ![Accès aux catégories](../assets/images/fr/bases/structure-du-it-documentation/15-sitdoku.png)](../assets/images/fr/bases/structure-du-it-documentation/15-sitdoku.png)

### Attributfeld

### Champ d'attributs

In der Web GUI von i-doit werden Attribute von Objekten über Formularfelder gespeichert und bearbeitet. Diese Felder werden demnach Attributfelder genannt. Sie können unterschiedlicher Art sein: Es gibt ein- oder mehrzeilige Textfelder, Datumsfelder, HTML-Editoren, Objekt-Browser, [Dialog-Plus-Felder](dialog-admin.md) und viele weitere.

Dans l'interface utilisateur Web d'i-doit, les attributs des objets sont enregistrés et traités via des champs de formulaire. Ces champs sont donc appelés champs d'attributs. Ils peuvent être de différents types : il existe des champs de texte à une ou plusieurs lignes, des champs de date, des éditeurs HTML, des navigateurs d'objets, des [champs Dialogue Plus](dialog-admin.md) et bien d'autres.

[![Attributfeld](../assets/images/de/grundlagen/struktur-der-it-dokumentation/16-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/16-sitdoku.png)

[ ![Champ d'attributs](../assets/images/fr/bases/structure-du-it-documentation/16-sitdoku.png)](../assets/images/fr/bases/structure-du-it-documentation/16-sitdoku.png)

## Von Beziehungen

## De relations

In i-doit können nicht nur IT-Komponenten für sich alleinstehend dokumentiert werden, sondern diese auch in Beziehung gesetzt werden. Es gibt verschiedene bereits vorkonfigurierte Beziehungsarten, die angepasst und erweitert werden können. Jede Beziehung ist ein eigenes (nicht lizenzpflichtiges) Objekt, das automatisch erstellt, bearbeitet oder gelöscht wird.

Dans i-doit, il n'est pas seulement possible de documenter des composants informatiques de manière isolée, mais aussi de les mettre en relation. Il existe différents types de relations déjà préconfigurées, qui peuvent être adaptées et étendues. Chaque relation est un objet distinct (non soumis à licence) qui est créé, modifié ou supprimé automatiquement.