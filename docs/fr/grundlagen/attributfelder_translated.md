<!-- TRANSLATED by md-translate -->
# Attributfelder

# Champs d'attributs

Nachdem wir uns mit der [Struktur der IT-Dokumentation](struktur-it-dokumentation.md) vertraut gemacht haben, betrachten wir etwas detaillierter die Attributfelder, die i-doit in der Web GUI zur Verfügung stellt.

Après nous être familiarisés avec la [structure de la documentation IT](structure-it-dokumentation.md), nous examinons un peu plus en détail les champs d'attributs qu'i-doit met à disposition dans l'interface graphique Web.

## Überblick

## vue d'ensemble

Jedes Attribut, dass bearbeitet werden kann, wird durch ein Formularfeld repräsentiert. Dies betrifft sowohl die Standard-Kategorien, als auch die [benutzerdefinierten Kategorien](benutzerdefinierte-kategorien.md). Fast jedes Attributfeld kann als [Pflichtfeld deklariert und/oder mit Validierungsoptionen belegt](../effizientes-dokumentieren/validierung-und-pflichtfelder.md) werden.

Chaque attribut qui peut être modifié est représenté par un champ de formulaire. Cela concerne aussi bien les catégories standard que les [catégories définies par l'utilisateur](catégories-personnalisées.md). Presque tous les champs d'attributs peuvent être déclarés comme [champs obligatoires et/ou être dotés d'options de validation](../documentation-efficace/validation-et-champs-obligatoires.md).

[![Überblick](../assets/images/de/grundlagen/attributfelder/1-af.png)](../assets/images/de/grundlagen/attributfelder/1-af.png)

[ ![Aperçu](../assets/images/fr/bases/champs d'attributs/1-af.png)](../assets/images/fr/bases/champs d'attributs/1-af.png)

Attribute, die nicht bearbeitet werden können, erhalten in der Editier-Ansicht kein Attributfeld oder eines mit Nur-Lesen-Option (Read-only).

Les attributs qui ne peuvent pas être modifiés n'ont pas de champ d'attribut dans la vue d'édition ou en ont un avec une option de lecture seule (Read-only).

Ein Beispiel für ein dynamisch erstelltes Attribut ohne Attributfeld ist die **FQDN** in der Kategorie **Hostadresse**. Die **FQDN** setzt sich aus den Attributen **Hostname** und **DNS Domäne** zusammen.

Un exemple d'attribut créé dynamiquement sans champ d'attribut est le **FQDN** dans la catégorie **adresse de l'hôte**. Le **FQDN** se compose des attributs **nom d'hôte** et **domaine DNS**.

[![fqdn](../assets/images/de/grundlagen/attributfelder/2-af.png)](../assets/images/de/grundlagen/attributfelder/2-af.png)

[ ![fqdn](../assets/images/fr/bases/champs d'attributs/2-af.png)](../assets/images/fr/bases/champs d'attributs/2-af.png)

Ein Beispiel für ein Nur-Lesen-Attributfeld ist die **Objekt ID**, die von MySQL/MariaDB automatisch erzeugt wird.

Un exemple de champ d'attribut en lecture seule est le **Object ID**, qui est généré automatiquement par MySQL/MariaDB.

[![objekt-id](../assets/images/de/grundlagen/attributfelder/3-af.png)](../assets/images/de/grundlagen/attributfelder/3-af.png)

[ ![id_objet](../assets/images/fr/bases/champs d'attributs/3-af.png)](../assets/images/fr/bases/champs d'attributs/3-af.png)

## Einzeilige Textfelder

## Champs de texte d'une seule ligne

Einzeilige Textfelder nehmen beliebigen Text entgegen. Die Zeichenlänge ist begrenzt auf ca. 255 Zeichen. Ein Beispiel ist die **Seriennummer** in der Kategorie **Modell**.

Les champs de texte d'une seule ligne acceptent n'importe quel texte. La longueur des caractères est limitée à environ 255 caractères. Un exemple est le **numéro de série** dans la catégorie **modèle**.

[![Seriennummer](../assets/images/de/grundlagen/attributfelder/4-af.png)](../assets/images/de/grundlagen/attributfelder/4-af.png)

[ ![Numéro de série](../assets/images/fr/bases/champs d'attributs/4-af.png)](../assets/images/fr/bases/champs d'attributs/4-af.png)

## HTML-Editor/Mehrzeilige Textfelder

## Éditeur HTML/Zones de texte multilignes

Mehrzeilige Textfelder können beliebigen Text in mehreren Zeilen enthalten. Die Zeichenlänge ist auf ca. 65000 Zeichen begrenzt. Aus einem schlichten Textfeld lässt sich in einen HTML-Editor wechseln, um den Text zu formatieren. Dies geschieht unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → CMDB → WYSIWYG Editor in Kategorien**. "WYSIWYG" steht für "What You See Is What You Get".

Les champs de texte multilignes peuvent contenir n'importe quel texte sur plusieurs lignes. La longueur des caractères est limitée à environ 65000 caractères. Depuis un simple champ de texte, il est possible de passer à un éditeur HTML pour formater le texte. Cela se fait sous **Administration → [Nom du mandant] Administration → Paramètres pour [Nom du mandant] → CMDB → Éditeur WYSIWYG dans les catégories**. "WYSIWYG" signifie "What You See Is What You Get" (ce que vous voyez est ce que vous obtenez).

Der HTML-Editor verfügt über weitere Formatierungsoptionen, die unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → CMDB → Aktiviere alle WYSIWYG Editor Funktionen** aktiviert werden können.

L'éditeur HTML dispose d'autres options de formatage qui peuvent être activées sous **Administration → [Nom du client] Administration → Paramètres pour [Nom du client] → CMDB → Activer toutes les fonctions WYSIWYG Editor**.

Fast jeder Kategorie-Eintrag verfügt am Ende über das Attribut Beschreibung, das standardmäßig als HTML-Editor dargestellt wird.

Presque chaque entrée de catégorie dispose à la fin de l'attribut Description, qui est présenté par défaut comme un éditeur HTML.

[![Beschreibung](../assets/images/de/grundlagen/attributfelder/5-af.png)](../assets/images/de/grundlagen/attributfelder/5-af.png)

[ ![Description](../assets/images/fr/bases/champs d'attributs/5-af.png)](../assets/images/fr/bases/champs d'attributs/5-af.png)

## Dialog-Feld (Drop Down)

## Champ de dialogue (Drop Down)

Das Dialog-Feld ist ein Auswahlfeld (Drop Down). Die Werte, aus denen einer ausgewählt werden kann, sind vorgegeben und können in der Regel nicht bearbeitet werden. Soll keiner der Werte ausgewählt werden, kann wenn möglich der einfache Strich (**-**) ausgewählt werden.

Le champ de dialogue est un champ de sélection (Drop Down). Les valeurs parmi lesquelles on peut en choisir une sont prédéfinies et ne peuvent en général pas être modifiées. Si aucune des valeurs ne doit être sélectionnée, il est possible de choisir le trait simple (**-**).

Als Beispiel dient der [Zustand](lebens-und-dokumentationszyklus.md) in der Kategorie **Allgemein**.

L'exemple est [état](cycle de vie et de documentation.md) dans la catégorie **Général**.

[![zustand](../assets/images/de/grundlagen/attributfelder/6-af.png)](../assets/images/de/grundlagen/attributfelder/6-af.png)

[ ![état](../assets/images/fr/bases/champs d'attributs/6-af.png)](../assets/images/fr/bases/champs d'attributs/6-af.png)

Ein Beispiel für ein Attribut, das zentral bearbeitet werden darf, ist der [**CMDB-Status**](lebens-und-dokumentationszyklus.md) in der Kategorie **Allgemein**.

Un exemple d'attribut pouvant être modifié de manière centralisée est le [**StatutCMDB**](cycledevieetdocumentation.md) dans la catégorie **Général**.

## Dialog-Plus-Feld (erweitertes Drop Down)

## Champ Dialogue Plus (Drop Down étendu)

Ähnlich wie das Dialog-Feld ist das Dialog-Plus-Feld. Darüber hinaus können zusätzliche Werte vorgegeben werden. Dazu nutzt man entweder das Icon rechts vom Attributfeld oder den [Dialog-Admin](dialog-admin.md).

Le champ Dialogue Plus est similaire au champ Dialogue. En outre, il est possible de définir des valeurs supplémentaires. Pour cela, on utilise soit l'icône à droite du champ d'attributs, soit [Dialog-Admin](dialog-admin.md).

Beispiele sind die Attribute **Kategorie** und **Einsatzzweck** in der Kategorie **Allgemein**.

Les attributs **Catégorie** et **Utilisation** dans la catégorie **Général** en sont des exemples.

[![einsatzzweck](../assets/images/de/grundlagen/attributfelder/7-af.png)](../assets/images/de/grundlagen/attributfelder/7-af.png)

[ ![but d'utilisation](../assets/images/fr/bases/champs d'attributs/7-af.png)](../assets/images/fr/bases/champs d'attributs/7-af.png)

Klickt man auf das Icon, öffnet sich der **Listenbrowser**, über den sich weitere Werte hinzufügen und bestehende ändern lassen.

Si l'on clique sur l'icône, le **navigateur de listes** s'ouvre et permet d'ajouter d'autres valeurs et de modifier les valeurs existantes.

[![listenbrowser](../assets/images/de/grundlagen/attributfelder/8-af.png)](../assets/images/de/grundlagen/attributfelder/8-af.png)

[ ![listenbrowser](../assets/images/fr/bases/champs d'attributs/8-af.png)](../assets/images/fr/bases/champs d'attributs/8-af.png)

!!! info "Hinweis"
    Das Löschen ist nur über den Dialog-Admin möglich. Diese Funktion sollte ausschließlich von Administratoren verwendet werden, da entfernte Feldwerte aus allen Einträgen unwiderruflich gelöscht werden.

! !! info "Remarque".
    La suppression n'est possible que via le dialogue Admin. Cette fonction ne devrait être utilisée que par les administrateurs, car les valeurs de champ supprimées de toutes les entrées sont irrémédiablement effacées.

## Multi-Dialog-Plus-Feld (Mehrfachauswahl)

## Champ Multi-Dialog Plus (sélection multiple)

Bei den oben genannten Auswahlfeldern lässt sich stets nur ein Wert selektieren. Um mehrere gleichzeitig auswählen zu können, gibt es das Multi-Dialog-Plus-Feld. Aus einem Drop-Down-Menü lassen sich weitere Werte hinzufügen. In einigen Fällen gibt es zusätzliche Buttons zum (De-)Selektieren aller Werte oder zur Umkehr der Auswahl.

Les champs de sélection mentionnés ci-dessus ne permettent de sélectionner qu'une seule valeur à la fois. Pour pouvoir en sélectionner plusieurs en même temps, il existe le champ Multi-Dialog Plus. D'autres valeurs peuvent être ajoutées à partir d'un menu déroulant. Dans certains cas, il existe des boutons supplémentaires pour (dé)sélectionner toutes les valeurs ou pour inverser la sélection.

Als Beispiel dient das Attribut **DNS Domäne** in der Kategorie **Hostadresse**.

L'attribut **domaine DNS** dans la catégorie **adresse de l'hôte** sert d'exemple.

[![dns-domäne](../assets/images/de/grundlagen/attributfelder/9-af.png)](../assets/images/de/grundlagen/attributfelder/9-af.png)

[ ![domaine dns](../assets/images/fr/bases/champs d'attributs/9-af.png)](../assets/images/fr/bases/champs d'attributs/9-af.png)

## Datumsfeld

## Champ de date

Für Datumsangaben dient das Datumsfeld. Klickt man auf das einzeilige Textfeld, öffnet sich ein Kalender. Klickt man auf das gewünschte Datum, wird dieses im Textfeld übernommen. Alternativ kann das Datum manuell im Format tt.mm.jjjj angeben werden.

Le champ de date sert à indiquer la date. Si l'on clique sur le champ de texte d'une ligne, un calendrier s'ouvre. Si l'on clique sur la date souhaitée, celle-ci est reprise dans le champ de texte. Il est également possible d'indiquer la date manuellement au format jj.mm.aaaa.

In der Kategorie **Buchhaltung** gibt es das Beispiel-Attribut **Lieferdatum**.

Dans la catégorie **Comptabilité**, il y a l'attribut exemple **Date de livraison**.

[![datumsfdeld](../assets/images/de/grundlagen/attributfelder/10-af.png)](../assets/images/de/grundlagen/attributfelder/10-af.png)

[ ![champ de date](../assets/images/fr/bases/champs d'attributs/10-af.png)](../assets/images/fr/bases/champs d'attributs/10-af.png)

## Einheiten und Intervalle

## Unités et intervalles

Um Einheiten oder Intervalle zu dokumentieren, gibt es neben solchen Attributfeldern ein Drop-Down-Feld, um diese festzulegen. Hierbei kann es sich um Zeiteinheiten, Maßeinheiten, Gewichtseinheiten, Zeiträume usw. handeln.

Pour documenter des unités ou des intervalles, il existe à côté de tels champs d'attributs un champ déroulant permettant de les définir. Il peut s'agir d'unités de temps, d'unités de mesure, d'unités de poids, de périodes, etc.

Das Attribut **Garantiezeitraum** in der Kategorie **Buchhaltung** ist ein Beispiel.

L'attribut **Période de garantie** dans la catégorie **Comptabilité** est un exemple.

[![intervalle](../assets/images/de/grundlagen/attributfelder/11-af.png)](../assets/images/de/grundlagen/attributfelder/11-af.png)

[ ![intervalles](../assets/images/fr/bases/champs d'attributs/11-af.png)](../assets/images/fr/bases/champs d'attributs/11-af.png)

## Kosten

## Coût

Kosten werden als Dezimalzahlen (oder vereinfacht als reelle Zahlen ohne Nachkommastellen) dokumentiert. Als Trenner zu den Nachkommastellen dürfen Punkt und Komma genutzt werden. Das Attributfeld zeigt zudem die konfigurierte Währung an. Diese wird unter **Verwaltung → [Mandanten-Name] Verwaltung → Allgemeine Einstellungen → Währungsformat** festgelegt.

Les coûts sont documentés sous forme de nombres décimaux (ou de nombres réels simplifiés sans décimales). Le point et la virgule peuvent être utilisés comme séparateurs des décimales. Le champ d'attribut indique en outre la devise configurée. Celle-ci est définie sous **Administration → [Nom du mandant] Administration → Paramètres généraux → Format de la monnaie**.

Das Attribut **Investitionskosten** in der Kategorie **Buchhaltung** ist ein Beispiel.

L'attribut **Coûts d'investissement** dans la catégorie **Comptabilité** est un exemple.

[![kosten](../assets/images/de/grundlagen/attributfelder/12-af.png)](../assets/images/de/grundlagen/attributfelder/12-af.png)

[ ![coût](../assets/images/fr/bases/champs d'attributs/12-af.png)](../assets/images/fr/bases/champs d'attributs/12-af.png)

## Link

## lien

Manche einzeiligen Textfelder sind dafür gedacht, URIs einzugeben. Daraus wird ein Link generiert, den der Benutzer anklicken kann, um ihn aufzurufen.

Certains champs de texte d'une ligne sont destinés à la saisie d'URI. Un lien est alors généré, sur lequel l'utilisateur peut cliquer pour y accéder.

Die Kategorie **Zugriff** bietet beispielsweise dieses Attributfeld an.

La catégorie **Accès** propose par exemple ce champ d'attribut.

[![link](../assets/images/de/grundlagen/attributfelder/13-af.png)](../assets/images/de/grundlagen/attributfelder/13-af.png)

[ ![link](../assets/images/fr/bases/champs d'attributs/13-af.png)](../assets/images/fr/bases/champs d'attributs/13-af.png)

## Objekt-Beziehungen

## Relations entre les objets

Um eine Beziehung zwischen zwei oder mehreren Objekten herzustellen, existiert für allgemeine Fälle der Objektbrowser und für spezielle weitere Browser. Das einzeilige Textfeld wird durch zwei Icons auf der rechten Seite ergänzt.

Pour établir une relation entre deux ou plusieurs objets, il existe le navigateur d'objets pour les cas généraux et d'autres navigateurs pour les cas particuliers. Le champ de texte d'une ligne est complété par deux icônes sur le côté droit.

Wenn eine 1-zu-1-Beziehung zwischen zwei Objekten hergestellt werden kann, ist das Textfeld beschreibbar. Dabei werden bereits beim Tippen Vorschläge gemacht. Wenn eine 1-zu-n-Beziehung hergestellt werden kann, ist das Textfeld im Nur-Lesen-Modus.

Si une relation 1 à 1 peut être établie entre deux objets, il est possible d'écrire dans le champ de texte. Des propositions sont faites dès la saisie. Si une relation de 1 à n peut être établie, le champ de texte est en mode lecture seule.

Wird auf das Lupen-Icon geklickt, öffnet sich der passende Browser. Das Icon daneben, eine Klammer mit Sperrzeichen, löst bestehende oder gerade ausgewählte Beziehungen.

Si l'on clique sur l'icône de la loupe, le navigateur correspondant s'ouvre. L'icône à côté, une parenthèse avec un signe de verrouillage, dissout les relations existantes ou celles qui viennent d'être sélectionnées.

[![objekt-beziehung](../assets/images/de/grundlagen/attributfelder/14-af.png)](../assets/images/de/grundlagen/attributfelder/14-af.png)

[ ![lien objet](../assets/images/fr/bases/champs d'attributs/14-af.png)](../assets/images/fr/bases/champs d'attributs/14-af.png)

### Objekt-Browser

### Explorateur d'objets

Der Objekt-Browser ist individuell aufgebaut, je nachdem, welche Beziehungsart dokumentiert werden soll. Daher stehen nicht alle Funktionen, die hier beschrieben werden, immer zur Verfügung. Oftmals ist die Auswahl an Filtern eingeschränkt, weil beispielsweise nur Objekte von bestimmten Objekttypen ausgewählt werden dürfen.

Le navigateur des objets est structuré de manière individuelle, en fonction du type de relation à documenter. C'est pourquoi toutes les fonctions décrites ici ne sont pas toujours disponibles. Souvent, le choix des filtres est limité, par exemple parce que seuls les objets de certains types d'objets peuvent être sélectionnés.

Wenn die Auswahl des referenzierten Objekts über Radio-Buttons erfolgt, ist lediglich eine einfache Auswahl möglich. Stehen hingegen die [![bild](../assets/images/de/grundlagen/attributfelder/hinzufuegen.png)](../assets/images/de/grundlagen/attributfelder/hinzufuegen.png)-Schaltflächen zur Verfügung, ist eine Mehrfachauswahl möglich.

Si la sélection de l'objet référencé se fait par des boutons radio, seule une sélection simple est possible. En revanche, si les boutons [ ![image](../assets/images/fr/bases/champs d'attributs/ajouter.png)](../assets/images/fr/bases/champs d'attributs/ajouter.png) sont disponibles, une sélection multiple est possible.

Im oberen Bereich befinden sich mehrere Tabs:

Plusieurs onglets se trouvent dans la partie supérieure :

* **Objektsicht**: Die Objektsicht wird nach Filtern sortiert. Fehlt das passende Objekt, kann es über den Button **Neues Objekt erstellen** erzeugt werden. Filter:
    - **nach Objekttyp**: Zunächst wird der Objekttyp ausgewählt, anschließend das oder die Objekte.
    - **nach Objektgruppe**: Wird der Objekttyp **Objektgruppe** genutzt, lassen sich Objekte pro **Objektgruppe** auflisten.
    - **nach Personengruppen**: Es werden alle **Personen** pro **Personengruppe** aufgelistet.
    - **nach Beziehungen**: Es werden alle Beziehungs-Objekte aufgelistet, wobei zunächst die Beziehungsart ausgewählt werden muss.
    - **nach Datum**: Es werden Objekte nach Datum sortiert. Die Optionen sind: **kürzlich erstellt**, **kürzlich verändert**, **diesen Monat erstellt**, **letzten Monat erstellt**.
* **Standortsicht**: Der Standortbaum mit allen Pfaden wird aufgebaut, aus dem das passende Objekt ausgewählt werden kann.
* **Suche**: Hierüber werden Objekte anhand der Objekt-Titel [gesucht](../effizientes-dokumentieren/suche.md).
* **Reports**: Anhand von bereits erstellten [Reports](../auswertungen/report-manager.md) werden Objekte aufgelistet.
* **Ausgewählte Objekte**: In diesem Tab werden alle bereits ausgewählten Objekte angezeigt. Über den Button **Neue Objektgruppe aus Auswahl erzeugen** wird ein Objekt vom Typ Objektgruppe erstellt und mit der Auswahl an Objekten befüllt.

* **Vue de l'objet** : La vue des objets est triée par filtres. Si l'objet correspondant manque, il peut être créé en cliquant sur le bouton **Créer un nouvel objet**. Filtres :
    - **par type d'objet** : Le type d'objet est d'abord sélectionné, puis le ou les objets.
    - **par groupe d'objets** : Si le type d'objet **groupe d'objets** est utilisé, il est possible de lister les objets par **groupe d'objets**.
    - **par groupe de personnes** : Toutes les **personnes** sont listées par **groupe de personnes**.
    - **par relations** : Tous les objets de relation sont listés, le type de relation devant d'abord être sélectionné.
    - **par date** : Les objets sont triés par date. Les options sont : **créé récemment**, **modifié récemment**, **créé ce mois-ci**, **créé le mois dernier**.
* **Vue du site** : L'arbre du site avec tous les chemins est construit, à partir duquel l'objet approprié peut être sélectionné.
**Recherche** : Les objets sont [recherchés] à l'aide du titre de l'objet(../documenter-efficacement/suche.md).
* **Rapports** : Les objets sont listés sur la base des [rapports](../exploitations/report-manager.md) déjà créés.
**Objets sélectionnés** : Tous les objets déjà sélectionnés sont affichés dans cet onglet. En cliquant sur le bouton **Créer un nouveau groupe d'objets à partir de la sélection**, un objet de type groupe d'objets est créé et rempli avec la sélection d'objets.

Im Log werden alle derzeitigen Änderungen aufgelistet.

Le journal répertorie toutes les modifications en cours.

Aus Beispiel dient der **Kontakt-Browser**, der in der Kategorie **Buchhaltung** dem Attribut **Eingekauft bei** zur Verfügung steht.

Le **Navigateur de contacts**, qui est disponible dans la catégorie **Comptabilité** de l'attribut **Acheté chez**, sert d'exemple.

[![Kontakt Browser](../assets/images/de/grundlagen/attributfelder/15-af.png)](../assets/images/de/grundlagen/attributfelder/15-af.png)

[ ![Contact Browser](../assets/images/fr/bases/champs d'attributs/15-af.png)](../assets/images/fr/bases/champs d'attributs/15-af.png)

### Standortauswahl

### Choix du site

Dieser Browser baut eine 1-zu-1-Beziehung der Art **Standort** zu einem Objekt auf, das als Standort definiert ist. Beim Klick auf das Lupen-Icon wird die **Standortauswahl** präsentiert, die der **Standortsicht** ähnelt (siehe oben). Dieser Browser erscheint in der Kategorie **Standort**.

Ce navigateur établit une relation 1 à 1 du type **emplacement** avec un objet défini comme emplacement. En cliquant sur l'icône de la loupe, la **sélection du lieu** est présentée, similaire à la **vue du lieu** (voir ci-dessus). Ce navigateur apparaît dans la catégorie **emplacement**.

[![Standort](../assets/images/de/grundlagen/attributfelder/16-af.png)](../assets/images/de/grundlagen/attributfelder/16-af.png)

[ ![Site](../assets/images/fr/bases/champs d'attributs/16-af.png)](../assets/images/fr/bases/champs d'attributs/16-af.png)

[![Standortauswahl](../assets/images/de/grundlagen/attributfelder/17-af.png)](../assets/images/de/grundlagen/attributfelder/17-af.png)

[ ![Choix du site](../assets/images/fr/bases/champs d'attributs/17-af.png)](../assets/images/fr/bases/champs d'attributs/17-af.png)

### Browser mit Unterauswahl

### Navigateur avec sous-sélection

Teilweise ist es nötig, nicht nur das Objekt auszuwählen, sondern ein Attribut dieses Objekts. Beispiele sind das Attribut **Verbunden mit** in der Kategorie **Port (Netzwerk)**, wobei hier ein Ein- oder Ausgang aus der Kategorie **Anschluss** **(Verkabelung)** ausgewählt wird, und die Möglichkeit in der Kategorie **Service Komponenten**, Software-Beziehungen auszuwählen.

Il est parfois nécessaire de sélectionner non seulement l'objet, mais aussi un attribut de cet objet. Des exemples sont l'attribut **Lié à** dans la catégorie **Port (réseau)**, où une entrée ou une sortie de la catégorie **Port** **(câblage)** est sélectionnée, et la possibilité dans la catégorie **Composants de service** de sélectionner des relations logicielles.

[![Objekt Browser](../assets/images/de/grundlagen/attributfelder/18-af.png)](../assets/images/de/grundlagen/attributfelder/18-af.png)

[ ![Navigateur d'objets](../assets/images/fr/bases/champs d'attributs/18-af.png)](../assets/images/fr/bases/champs d'attributs/18-af.png)

!!!info "Hinweis"
    Wenn der Browser zweigeteilt ist, also über eine solche Unterauswahl verfügt, und Radio-Buttons verwendet, muss in beiden Spalten eine Auswahl getroffen werden. Wenn beispielsweise bei der Verkabelung zweier Geräte nur das verbundene Objekt, jedoch nicht der entsprechende Anschluss im Objektbrowser ausgewählt wird, wird die Eingabe beim Speichern nicht übernommen.

!!!info "Remarque".
    Si le navigateur est divisé en deux, c'est-à-dire qu'il dispose d'une telle sous-sélection, et qu'il utilise des boutons radio, une sélection doit être effectuée dans les deux colonnes. Si, par exemple, lors du câblage de deux appareils, seul l'objet connecté est sélectionné, mais pas la connexion correspondante dans le navigateur des objets, la saisie ne sera pas prise en compte lors de l'enregistrement.