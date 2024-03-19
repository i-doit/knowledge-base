<!-- TRANSLATED by md-translate -->
# Objekt-Beziehungen

# Relations entre objets

[Objekte](struktur-it-dokumentation.md) stehen in i-doit in der Regel nicht für sich allein, sondern in Relation zueinander.<br>
Server stehen in Racks, Admins betreuen Server, auf einem Server läuft ein Betriebssystem mit Software, … Die grundsätzlichen Konzepte der Objekt-Beziehungen erläutern wir in diesem Artikel.

[Dans i-doit, les objets ne sont généralement pas isolés, mais en relation les uns avec les autres.
Les serveurs sont placés dans des racks, les administrateurs s'occupent des serveurs, un système d'exploitation avec des logiciels tourne sur un serveur, ... Nous expliquons les concepts de base des relations entre objets dans cet article.

## Beziehungsarten

## Types de relations

Objekte können auf die unterschiedlichste Art in Beziehung stehen. Um hier Klarheit zu schaffen, erhält jede Beziehung eine Art. i-doit bringt in der Standardinstallation bereits viele vordefinierte Beziehungsarten mit. Eine Auflistung aller Arten gibt es unter **Verwaltung → Vordefinierte Inhalte → Objekt Beziehungsarten**.

Les objets peuvent être reliés de différentes manières. Afin de clarifier la situation, chaque relation se voit attribuer un type. Dans l'installation standard, i-doit propose déjà de nombreux types de relations prédéfinis. Une liste de tous les types est disponible sous **Administration → Contenus prédéfinis → Objet Types de relations**.

[![Beziehungen](../assets/images/de/grundlagen/objekt-beziehungen/1-ob.png)](../assets/images/de/grundlagen/objekt-beziehungen/1-ob.png)

[ ![Relations](../assets/images/fr/bases/objet-relations/1-ob.png)](../assets/images/fr/bases/objet-relations/1-ob.png)

| Beziehungstitel | Beschreibung aus Sicht des Master-Objekts | Beschreibung aus Sicht des Slave-Objekts |
| --- | --- | --- |
| **Abhängigkeit** | **hat Abhängigkeit zu** | **hängt ab von** |
| **Anschlüsse** | **verbindet** | **ist verbunden mit** |
| **Betriebssystem** | **hat Betriebssystem** | **ist installiert auf** |
| **Chassis** | **beinhaltet** | **ist eingeschoben in** |
| **Clusterdienstzuweisung** | **ist Host für** | **auf** |
| **Clustermitgliedschaften** | **ist Mitglied von** | **hat Mitglied** |
| **DBMS** | **verwaltet** | **ist eingerichtet in** |
| **Dateizuweisung** | **hat Dateizuweisung** | **ist Datei für** |
| **Datenbank Gateway** | **hat Datenbank Gateway zu** | **ist Datenbank Gateway von** |
| **Datenbankinstanz** | **auf mir läuft** | **ist Datenbankinstanz von** |
| **Datenbanklinks** | **hat Datenbanklink zu** | **hat Datenbanklink von** |
| **Datenbankzugriff** | **wird benutzt von** | **hat Datenbankzugriff auf** |
| **Datensicherung** | **sichert** | **wird gesichert von** |
| **FC-Port** | **liefert Netzwerk an** | **bekommt Netzwerk geliefert von** |
| **Freigabenzugriff** | **Freigabe wird genutzt von** | **nutzt Freigabe auf** |
| **Gruppenmitgliedschaft** | **ist Mitglied von** | **hat Mitglied** |
| **Hostadresse** | **liefert Netzwerk an** | **bekommt Netzwerk geliefert von** |
| **Kontaktzuweisung (administriert)** | **administriert** | **wird administriert von** |
| **Kontaktzuweisung (wird benutzt von)** | **wird benutzt von** | **benutzt** |
| **Layer-2-Transport** | **transportiert Layer-2-Netz** | **wird transportiert von** |
| **Logische Geräte (Client)** | **verbindet** | **ist verbunden mit** |
| **Logischer Standort** | **ist Ordnungselement von** | **ist zugeordnet zu** |
| **Netzwerkverbindungen** | **ist verbunden mit** | **verbindet sich zu** |
| **Organisation (Organisation)** | **hat Mitglied** | **gehört zu** |
| **Organisation (Personen)** | **hat Mitglied** | **gehört zu** |
| **Personengruppenmitgliedschaft** | **hat Mitglied** | **ist Mitglied von** |
| **Ports** | **liefert Netzwerk an** | **bekommt Netzwerk geliefert von** |
| **Remote Management Controller** | **wird remote gemanagt von** | **ist management controller von** |
| **Replikationspartner** | **ist Replikationspartner von** | **hat Replikationspartner** |
| **SOA-Komponente** | **ist SOA Komponente von** | **hat SOA Komponente** |
| **SOA-Stacks** | **hat SOA Stacks** | **ist SOA Stack von** |
| **Schnittstelle** | **hat Abhängigkeit zu** | **hängt ab von** |
| **Service-Komponente** | **ist Service Komponente von** | **hat Service Komponente** |
| **Servicezuweisung** | **auf mir läuft** | **läuft auf** |
| **Softwarezuweisung** | **auf mir läuft** | **auf** |
| **Stacking** | **ist stack von** | **ist gestackt mit** |
| **Standort** | **ist Standort von** | **steht in** |
| **Stromverbraucher** | **liefert Strom an** | **bezieht Strom von** |
| **VRRP** | **hat VRRP Mitglied** | **ist VRRP Mitglied von** |
| **Verknüpfte Karten** | **hat Karte** | **ist Karte von** |
| **Vertragszuweisung** | **ist Vertrag von** | **hat Vertragszuweisung zu** |
| **Verwaltungsinstanz** | **ist Verwaltungsinstanz für** | **wird verwaltet von** |
| **Virtuelle Maschine** | **ist Host für** | **läuft auf** |
| **Virtueller Host** | **ist Verwaltungsinstanz für** | **wird verwaltet von** |
| **Zentrale (Organisation)** | **ist Zentrale von** | **ist Zweigstelle** |

| Titre de la relation | Description du point de vue de l'objet maître | Description du point de vue de l'objet esclave |
| --- | --- | --- |
| **Dépendance** | **Dépendance de** | **Dépendance de** |
| **Connexions** | **connecté** | **est connecté à** |
| **Système d'exploitation** | **Possède un système d'exploitation** | **Est installé sur** |
| **châssis** | **contient** | **est inséré dans** |
| **Affectation de service de cluster** | **est hôte pour** | **sur** |
| **Adhésions au cluster** | **est membre de** | **a un membre** |
| **SERVICE DE BASE** | **administré** | **est établi dans** |
| **Assignation de fichier** | **a assignation de fichier** | **est un fichier pour** |
| **Passerelle de base de données** | **a une passerelle de base de données vers** | **est une passerelle de base de données de** |
| **instance de base de données** | **sur moi fonctionne** | **est instance de base de données de** |
| **Liens de base de données** | **a un lien de base de données vers** | **a un lien de base de données depuis** |
| **accès à la base de données** | **est utilisé par** | **a accès à la base de données sur** |
| **Sauvegarde des données** | **sauvegardé** | **sauvegardé par** |
| **port FC** | **fournit le réseau** | **reçoit le réseau de** |
| **accès au partage** | **partage utilisé par** | **utilise le partage sur** |
| **appartenance à un groupe** | **est membre de** | **a un membre** |
| **adresse hôte** | **fournit le réseau à** | **reçoit le réseau de** |
| **Attribution de contact (administré)** | **Administré** | **Administré par** |
| **Attribution de contact (utilisé par)** | **Utilisé par** | **Utilisé** |
| **Transport de la couche 2** | **Transporte le réseau de la couche 2** | **Est transporté par** |
| **Périphérique logique (client)** | **connecté** | **est connecté à** |
| **Site logique** | **est un élément d'ordre de** | **est associé à** |
| **Liens réseau** | **est connecté à** | **est connecté à** |
| **Organisation (Organisation)** | **a un membre** | **appartient à** |
| **Organisation (personnes)** | **Avec membre** | **Appartient à** |
| **appartenance à un groupe de personnes** | **est membre** | **est membre de** |
| **Ports** | **fournit le réseau** | **reçoit le réseau de** |
| **Contrôleur de gestion à distance** | **est géré à distance par** | **est contrôleur de gestion de** |
| **partenaire de réplication** | **est partenaire de réplication de** | **a des partenaires de réplication** |
| **composant SOA** | **est un composant SOA de** | **a un composant SOA** |
| **piles SOA** | **a des piles SOA** | **est une pile SOA de** |
| **Interface** | **Dépend de** | **Dépend de** |
| **Composant de service** | **est un composant de service de** | **a un composant de service** |
| **Affectation de service** | **En cours d'exécution sur moi** | **En cours d'exécution sur** |
| **Affectation de logiciel** | **Sur moi fonctionne** | **Sur** |
| **Empilage** | **est empilé de** | **est empilé avec** |
| **Lieu** | **est le lieu de** | **est en** |
| **consommateur d'électricité** | **fournit de l'électricité à** | **reçoit de l'électricité de** |
| **VRRP** | **a été membre de VRRP** | **est membre de VRRP** |
| **Cartes associées** | **a la carte** | **est la carte de** |
| **Affectation du contrat** | **est le contrat de** | **a affecté le contrat à** |
| **Instance de gestion** | **est une instance de gestion pour** | **est gérée par** |
| **Machine virtuelle** | **est hôte pour** | **fonctionne sur** |
| **Hôte virtuel** | **est l'instance de gestion pour** | **est géré par** |
| **Siège (organisation)** | **est le siège de** | **est une succursale** |

Unter der Auflistung der Beziehungsarten kann über den Button **Neuen Wert Hinzufügen** eine neue Art erstellt werden. Möchten Sie diese Beziehung in einer benutzerdefinierten Kategorie verwenden, müssen Sie diese als "Implizit" definieren.

Sous la liste des types de liens, un nouveau type peut être créé en cliquant sur le bouton **Ajouter une nouvelle valeur**. Si vous souhaitez utiliser cette relation dans une catégorie définie par l'utilisateur, vous devez la définir comme "Implicite".

[![Beziehung-hinzufügen](../assets/images/de/grundlagen/objekt-beziehungen/2-ob.png)](../assets/images/de/grundlagen/objekt-beziehungen/2-ob.png)

[ ![Ajouter une relation](../assets/images/fr/bases/objet-relations/2-ob.png)](../assets/images/fr/bases/objet-relations/2-ob.png)

Bereits dokumentierte Objekt-Beziehungen werden unter **Extras → CMDB → Beziehungen** je nach Art aufgelistet. Klickt man im linken Navigationsbaum auf Alle, werden alle Objekt-Beziehungen unabhängig von der Art geladen. Das Laden der Liste kann bei einer größeren IT-Dokumentation etwas dauern.

Les relations entre objets déjà documentées sont listées sous **Extras → CMDB → Relations** selon leur type. Si l'on clique sur Tous dans l'arbre de navigation de gauche, toutes les relations d'objets sont chargées, indépendamment de leur type. Le chargement de la liste peut prendre un certain temps si la documentation informatique est importante.

[![vorhandene-beziehungsarten](../assets/images/de/grundlagen/objekt-beziehungen/3-ob.png)](../assets/images/de/grundlagen/objekt-beziehungen/3-ob.png)

[ ![types de relations existantes](../assets/images/fr/bases/relations-objets/3-ob.png)](../assets/images/fr/bases/relations-objets/3-ob.png)

## Beziehungs-Objekte

## Objets de relation

Wird eine Beziehung zwischen zwei Objekten erstellt, wird automatisch im Hintergrund ein drittes Objekt vom [Typ](struktur-it-dokumentation.md) **Beziehungen** erstellt. Dieses erhält als Objekt-Titel von Objekt-Titel des Master-Objekts, gefolgt von der Beschreibung und dem Objekt-Titel des Slave-Objekts.

Lorsqu'une relation entre deux objets est créée, un troisième objet de [type](struktur-it-dokumentation.md) **Liens** est automatiquement créé en arrière-plan. Celui-ci reçoit comme titre d'objet le titre d'objet de l'objet maître, suivi de la description et du titre d'objet de l'objet esclave.

Beispiel:

exemple :

| Master-Objekt | Beschreibung der Beziehung | Slave-Objekt |
| --- | --- | --- |
| PDU-HQ-Intern-01-A | **liefert Strom an** | ESX1 |

| Objet maître | Description de la relation | Objet esclave |
| --- | --- | --- |
| PDU-HQ-Intern-01-A | **fournit du courant à** | ESX1 |

Das Beziehungs-Objekt ist nötig, um Eigenschaften der Beziehung als [Attribute](struktur-it-dokumentation.md) zu speichern. Dazu gehören unter anderem:

L'objet lien est nécessaire pour enregistrer les propriétés du lien en tant que [Attributs](struktur-it-dokumentation.md). Il s'agit entre autres de

* **Beziehungsart**:<br> siehe oben
* **Gewichtung**:<br> siehe unten
* **Service** (optional):<br> Die Objekt-Beziehung kann direkt einem Service zugewiesen werden.

**Type de relation**:<br> voir ci-dessus
* **Pondération**:<br> voir ci-dessous
* **Service** (optionnel):<br> La relation d'objet peut être attribuée directement à un service.

Wie bereits ersichtlich besteht eine Objekt-Beziehung aus einem Master- und einem Slave-Objekt. Es handelt sich also um eine gerichtete Beziehung. Das Slave-Objekt ist abhängig vom Master-Objekt.

Comme on peut le voir, une relation d'objet se compose d'un objet maître et d'un objet esclave. Il s'agit donc d'une relation orientée. L'objet esclave dépend de l'objet maître.

[![beziehungsobjekt](../assets/images/de/grundlagen/objekt-beziehungen/4-ob.png)](../assets/images/de/grundlagen/objekt-beziehungen/4-ob.png)

[ ![objet de la relation](../assets/images/fr/bases/objet-relation/4-ob.png)](../assets/images/fr/bases/objet-relation/4-ob.png)

Die Richtung der Beziehung - also welches ist Objekt Master, welches Slave - hat Auswirkungen auf den [CMDB-Explorer](../auswertungen/cmdb-explorer/index.md). In der Baumansicht werden Objekt-Beziehungen entweder nach oben oder unten rekursiv aufgebaut. Im [Standard-Profil](../auswertungen/cmdb-explorer/profile-im-cmdb-explorer.md) stehen Master-Objekte unter den Slave-Objekten.

La direction de la relation - c'est-à-dire quel est l'objet maître, quel est l'objet esclave - a des conséquences sur l'explorateur [CMDB-Explorer](../explorations/cmdb-explorer/index.md). Dans la vue arborescente, les relations entre les objets sont construites de manière récursive soit vers le haut soit vers le bas. Dans le [profil standard](../explorations/cmdb-explorer/profile-im-cmdb-explorer.md), les objets maîtres sont placés sous les objets esclaves.

!!! info "Lizenzpflichtige Objekte"
    Beziehungs-Objekte sind nicht [lizenzpflichtig](../wartung-und-betrieb/lizenz-aktivieren.md).

! !! info "Objets sous licence"
    Les objets de lien ne sont pas [soumis à une licence](../maintenance-et-exploitation/activer-une-licence.md).

## Kategorie Beziehungen

## catégorie relations

Pro Objekt werden Beziehungen zu anderen Objekten in der [Kategorie](struktur-it-dokumentation.md) **Beziehungen** gesammelt. Diese ist jedem Objekttyp fest zugeordnet und über das Pfeile-Icon aufzurufen.

Pour chaque objet, les relations avec d'autres objets sont rassemblées dans la [catégorie](struktur-it-dokumentation.md) **relations**. Celle-ci est attribuée de manière fixe à chaque type d'objet et est accessible via l'icône en forme de flèche.

[![kategorie-beziehungen](../assets/images/de/grundlagen/objekt-beziehungen/5-ob.png)](../assets/images/de/grundlagen/objekt-beziehungen/5-ob.png)

[ ![catégorie-relations](../assets/images/fr/bases/relations-objets/5-ob.png)](../assets/images/fr/bases/relations-objets/5-ob.png)

## Implizite vs. explizite Beziehungen

## Relations implicites vs explicites

Beziehungen unterscheiden sich nicht nur nach ihrer Art (siehe oben), sondern auch, ob diese implizit oder explizit erstellt worden sind. Implizite Beziehungen stammen aus den Kategorien. Wird beispielsweise die Kategorie **Standort** bearbeitet und im Attribut **Standort** ein übergeordnetes Objekt ausgewählt, entsteht automatisch im Hintergrund eine implizite Beziehung der Art **Standort**. Diese implizite Beziehung wird zudem in der Kategorie **Beziehungen** und unter **Extras → CMDB → Beziehungen → Standort** angezeigt.

Les relations se distinguent non seulement par leur nature (voir ci-dessus), mais aussi selon qu'elles ont été créées de manière implicite ou explicite. Les relations implicites proviennent des catégories. Si, par exemple, la catégorie **Lieu** est éditée et qu'un objet parent est sélectionné dans l'attribut **Lieu**, une relation implicite du type **Lieu** est automatiquement créée en arrière-plan. Cette relation implicite est en outre affichée dans la catégorie **Relations** et sous **Extras → CMDB → Relations → Emplacement**.

Soll unabhängig von den Kategorien und ihren Attributen eine Beziehung zwischen zwei Objekten gesetzt werden, wird eine explizite Beziehung erstellt. Diese explizite Beziehung wird in der Kategorie **Beziehungen** erstellt. Das Objekt, in dem man sich befindet, ist als **Objekt 1** vorausgewählt. Das Objekt, mit dem **Objekt 1** in Beziehung stehen soll, wird unter **Objekt 2** ausgewählt. Zudem muss zwischen beiden die Richtung gewählt werden. Als Beziehungsart ist standardmäßig **Abhängigkeit** vorausgewählt, weil diese Art unter **Verwaltung → Vordefinierte Inhalte → Objekt Beziehungen** bereits als explizit ausgewiesen ist. Es ist hier aber auch problemlos möglich eine neue explizite Beziehung zu definieren und direkt zu verwenden. Dies kann über das Zettel-Icon, wie bei Dialog+-Feldern, gemacht werden.

Si une relation doit être établie entre deux objets indépendamment des catégories et de leurs attributs, une relation explicite est créée. Cette relation explicite est créée dans la catégorie **Relations**. L'objet dans lequel on se trouve est présélectionné comme **Objet 1**. L'objet avec lequel **Objet 1** doit être en relation est sélectionné sous **Objet 2**. En outre, la direction doit être choisie entre les deux. Le type de relation présélectionné par défaut est **Dépendance**, car ce type est déjà explicitement indiqué sous **Administration → Contenu prédéfini → Relations entre objets**. Mais il est ici aussi possible de définir sans problème une nouvelle relation explicite et de l'utiliser directement. Cela peut se faire via l'icône en forme de fiche, comme pour les champs Dialog+.

[![explizite-beziehungsart](../assets/images/de/grundlagen/objekt-beziehungen/6-ob.png)](../assets/images/de/grundlagen/objekt-beziehungen/6-ob.png)

[ ![type de relation explicite](../assets/images/fr/bases/relations-objets/6-ob.png)](../assets/images/fr/bases/relations-objets/6-ob.png)

Beim Anlegen einer neuen expliziten Beziehungsart können die Art und die Beschreibungen aus den jeweiligen Objektsichten definiert werden.

Lors de la création d'un nouveau type de relation explicite, le type et les descriptions peuvent être définis à partir des vues d'objet correspondantes.

!!! success "Implizit oder explizit?"
    Was ist nun besser? Implizite oder explizite Beziehungen verwenden? Die Antwort lautet: implizite. Kategorien und Attribute sind zentrale Elemente zur Strukturierung der IT-Dokumentation. In Kategorien dokumentieren die Benutzer und dort suchen die Benutzer Informationen. Daher ist es besser, unspezifische Beziehungen der Art Abhängigkeit explizit in einer Kategorie zu dokumentieren, in der im- und explizite Beziehungen bunt miteinander gemischt sind. Auswertbar sind beide Möglichkeiten, aber gut nachzuvollziehen sind nur die impliziten.

! !! success "Implicite ou explicite ?"
    Qu'est-ce qui est le mieux maintenant ? Utiliser des relations implicites ou explicites ? La réponse est : implicites. Les catégories et les attributs sont des éléments centraux pour structurer la documentation informatique. C'est dans les catégories que les utilisateurs documentent et c'est là que les utilisateurs recherchent des informations. Il est donc préférable de documenter explicitement les relations non spécifiques de type dépendance dans une catégorie où les relations im et explicites sont mélangées de manière hétérogène. Les deux possibilités sont évaluables, mais seules les relations implicites sont faciles à suivre.

## Gewichtung

## Pondération

Wie weiter oben bereits erwähnt, erhält jede Beziehung eine Gewichtung. Diese wird im Beziehungsobjekt als Attribut angegeben. Als Gewichtung sind Werte zwischen **1** und **10** möglich. Sie drücken aus, wie abhängig das Slave- vom Master-Objekt ist. **1** bedeutet **sehr wichtig**, **10** hingegen **unwichtig**, **5** ist die goldene Mitte mit **wichtig** und stellt den Standard dar.

Comme nous l'avons déjà mentionné plus haut, chaque relation reçoit une pondération. Celle-ci est indiquée comme attribut dans l'objet relationnel. Les valeurs possibles pour la pondération sont comprises entre **1** et **10**. Elles expriment le degré de dépendance de l'objet esclave par rapport à l'objet maître. **1** signifie **très important**, **10** par contre **non important**, **5** est le juste milieu avec **important** et représente le standard.

Beispiel: Bekommt ein nicht redundant ausgelegtes Netzteil Strom von einer USV, dann könnte die Gewichtung bei **1 (sehr wichtig)** liegen, denn ohne funktionierende USV funktioniert das Netzteil nicht. Fällt stattdessen eine Node im Web Cluster aus, übernehmen andere Nodes ihren Job. Die Abhängigkeit zu übergeordneten Services ist also nicht ganz so hart, sondern könnte zwischen **5 (wichtig)** und **10 (nicht wichtig)** liegen.

Exemple : si un bloc d'alimentation non redondant reçoit du courant d'une ASI, la pondération pourrait être de **1 (très important)**, car sans ASI en état de marche, le bloc d'alimentation ne fonctionne pas. Si un nœud du cluster web tombe en panne, d'autres nœuds prennent le relais. La dépendance vis-à-vis des services de niveau supérieur n'est donc pas aussi dure, mais pourrait se situer entre **5 (important)** et **10 (pas important)**.

Das Analyse-Modul verwendet diese Gewichtung in Kombination mit Services und [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md), um Aussagen treffen zu können, welche Services von Ausfällen betroffen sind.

Le module d'analyse utilise cette pondération en combinaison avec les services et [Network Monitoring](../automatisation-et-intégration/network-monitoring/index.md) afin de pouvoir faire des déclarations sur les services qui sont concernés par les pannes.

## Gleichgerichtete Beziehungen

## Relations alignées

Neben den gerichteten Beziehungen mit Master- und Slave-Objekten, existieren in i-doit noch die gleichgerichteten Beziehungen. Diese stellen ebenfalls zwei Objekte in Beziehung zueinander, doch ohne eine Abhängigkeit voneinander auszudrücken.

Outre les relations orientées avec des objets maîtres et esclaves, il existe également dans i-doit des relations orientées dans le même sens. Celles-ci mettent également deux objets en relation, mais sans exprimer de dépendance l'un par rapport à l'autre.

Beispiel: Ist in i-doit ein Web Cluster mit mehreren Nodes dokumentiert, agieren die Nodes unabhängig voneinander. Lediglich das Funktionieren des Clusters hängt von allen Nodes ab. Die Kategorie **Clustermitglieder** (beziehungsweise die [rückwärtige Kategorie](struktur-it-dokumentation.md) **Clustermitgliedschaften**) erstellt im Hintergrund gleichgerichtete Objekt-Beziehungen zwischen den Cluster-Mitgliedern.

Exemple : Si un cluster Web avec plusieurs nœuds est documenté dans i-doit, les nœuds agissent indépendamment les uns des autres. Seul le fonctionnement du cluster dépend de tous les nœuds. La catégorie **Membres du cluster** (ou la [catégorie arrière](struct-it-dokumentation.md) **Membres du cluster**) crée en arrière-plan des relations d'objets alignées entre les membres du cluster.

Eine Auflistung aller gleichgerichteter Beziehungen befindet sich unter **Extras → Vordefinierte Inhalte → Objekt Beziehungen → Gleichgerichtete Beziehungen**. Sie können nicht vom Benutzer erstellt werden, sondern werden implizit, automatisch im Hintergrund erstellt.

Une liste de toutes les relations alignées se trouve sous **Extras → Contenu prédéfini → Relations entre objets → Relations alignées**. Elles ne peuvent pas être créées par l'utilisateur, mais sont créées implicitement, automatiquement en arrière-plan.

[![gleichberechtigte-beziehungen](../assets/images/de/grundlagen/objekt-beziehungen/7-ob.png)](../assets/images/de/grundlagen/objekt-beziehungen/7-ob.png)

[ ![relations-égales](../assets/images/fr/bases/relations-objets/7-ob.png)](../assets/images/fr/bases/relations-objets/7-ob.png)

## Objekt-Beziehung in benutzerdefinierter Kategorie

## Relation d'objet dans une catégorie définie par l'utilisateur

In [benutzerdefinierten Kategorien](benutzerdefinierte-kategorien.md) können Objekt-Beziehungen dokumentiert werden. Hierbei ist zwischen zwei Feldtypen zu unterscheiden:

Les relations entre les objets peuvent être documentées dans [catégories définies par l'utilisateur](userdefinierte-kategorien.md). Il faut distinguer ici deux types de champs :

* **Objekt-Browser**:<br> Es wird kein Beziehungs-Objekt erzeugt. Die hier zu dokumentierende Beziehung zwischen zwischen zwei Objekten wird in der Kategorie Beziehungen nicht aufgelistet und der [CMDB-Explorer](../auswertungen/cmdb-explorer/index.md) wertet diese Beziehung nicht aus.
* **Objekt-Beziehung**:<br> Als **Zusatz** kann hier nur eine implizite Beziehungsart angegeben werden. Explizite Beziehungen werden hier nicht angezeigt.

* **Object Explorer**:<br> Aucun objet de relation n'est créé. La relation entre deux objets à documenter ici n'est pas listée dans la catégorie Relations et le [CMDB-Explorer](../exploitations/cmdb-explorer/index.md) n'évalue pas cette relation.
* **Relation objet**:<br> Comme **supplément**, seul un type de relation implicite peut être indiqué ici. Les relations explicites ne sont pas affichées ici.

!!! success "Objekt-Browser oder -Beziehung?"
    Wie bei den impliziten und expliziten Beziehungen stellt sich hier ebenfalls die Frage: Welcher Feldtyp ist besser? Auch hier fällt die Antwort wieder eindeutig aus: Die **Objekt-Beziehung** hat einen zusätzlichen Nutzen und ist daher dem Feldtyp **Objekt-Browser** zu bevorzugen.

! !! success "Navigateur d'objets ou relation ?"
    Comme pour les relations implicites et explicites, la question se pose ici aussi : quel type de champ est le meilleur ? Ici aussi, la réponse est claire : La **relation d'objet** a une utilité supplémentaire et est donc à préférer au type de champ **navigateur d'objet**.