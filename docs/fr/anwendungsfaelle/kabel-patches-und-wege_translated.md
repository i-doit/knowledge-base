<!-- TRANSLATED by md-translate -->
# Kabel-Patches und -wege

# Patches et chemins de câbles

Zu einer umfangreichen [IT-Dokumentation](../glossar.md) kommt man über kurz oder lang zur Abbildung der Verkabelung. Mit diesem Artikel geben wir einen Einstieg, wie man Hardware-[Objekte](../grundlagen/struktur-it-dokumentation.md) miteinander verkabelt.

Une [documentation informatique](../glossar.md) complète est tôt ou tard accompagnée d'une illustration du câblage. Avec cet article, nous donnons une introduction à la manière de câbler les [objets] matériels(../bases/structure-it-dokumentation.md) entre eux.

## Konzept

## Concept

Die Abbildung von Verkabelungen ist in i-doit vielfältig wie die Realität: Ethernet, Glasfaser, Stromversorgung, Anschluss von Peripherie - alles, was einen Anschluss hat und mit einem Kabel verbunden werden kann, findet seinen Platz in der IT-Dokumentation.

Dans i-doit, la représentation des câblages est aussi variée que la réalité : Ethernet, fibre optique, alimentation électrique, connexion de périphériques - tout ce qui a une connexion et peut être relié par un câble trouve sa place dans la documentation informatique.

i-doit sieht dabei eine **strikte Trennung zwischen der Dokumentation von Verbindungen und der physikalischen Verkabelung** vor. Ein gutes Beispiel ist die Netzwerkverkabelung über Ethernet. Zum Einen können die Verbindungen zwischen aktiven Netzwerkkomponenten (Switches, Router, Firewalls) in der [Kategorie](../grundlagen/struktur-it-dokumentation.md) **Netzwerk → Port** festgehalten werden. Somit ist zu erkennen, an welchem Switch welcher Server hängt. Verbindungswege über mehrere Komponenten hinweg werden sichtbar. Zum Anderen spielen oftmals passive Komponenten eine wichtige Rolle: Patchpanels und Patchdosen sorgen für Ordnung im regelrechten "Kabelwirrwarr". Doch wem die Verbindung zwischen aktiven Komponenten genügt, kann die passiven Komponenten und damit auch die Kabel selbst außen vor lassen. i-doit ist in der Lage, im Hintergrund die Dokumentation der Verkabelung vorzunehmen, ohne dass der Benutzer zusätzliche Schritte ergreifen muss. Wird zu einem späteren Zeitpunkt ein Detailwissen zur Verkabelung erforderlich, kann die bisherige Dokumentation ergänzt werden, ohne dass der Benutzer von vorne beginnen muss.

i-doit prévoit ici une **séparation stricte entre la documentation des connexions et le câblage physique**. Un bon exemple est le câblage réseau via Ethernet. D'une part, les connexions entre les composants réseau actifs (commutateurs, routeurs, pare-feu) peuvent être consignées dans la [catégorie](../grundlagen/struktur-it-dokumentation.md) **Réseau → Port**. Il est ainsi possible de voir à quel switch est rattaché tel ou tel serveur. Les chemins de connexion sur plusieurs composants sont visibles. D'autre part, les composants passifs jouent souvent un rôle important : les panneaux de brassage et les prises de brassage permettent de mettre de l'ordre dans un véritable "fouillis de câbles". Mais pour ceux qui se contentent de la connexion entre les composants actifs, les composants passifs et donc les câbles eux-mêmes peuvent être laissés de côté. i-doit est en mesure d'effectuer en arrière-plan la documentation du câblage sans que l'utilisateur n'ait à entreprendre de démarches supplémentaires. Si des connaissances détaillées sur le câblage sont nécessaires ultérieurement, la documentation existante peut être complétée sans que l'utilisateur ait à tout recommencer.

Wie in i-doit üblich findet die Dokumentation der Verkabelung mittels Objekten und [Attributen](../grundlagen/struktur-it-dokumentation.md) statt. Neben zahlreichen Formularen stehen Funktionen zum Visualisieren, Auswertung und Importieren bereit. Darum geht es im Folgenden.

Comme d'habitude dans i-doit, la documentation du câblage se fait au moyen d'objets et d'[attributs](../bases/structure-it-documentation.md). Outre de nombreux formulaires, des fonctions de visualisation, d'évaluation et d'importation sont disponibles. C'est de cela qu'il s'agit dans ce qui suit.

## Kategorie-Ordner **Verkabelung**

## Dossier de catégorie **Câblage***.

Jeder [Objekttyp](../grundlagen/struktur-it-dokumentation.md) kann mit dem Kategorie-Ordner **Verkabelung** [konfiguriert](../grundlagen/zurodnung-von-kategorien-zu-objekttypen.md) werden. Dadurch erhalten Objekte von diesen ausgewählten Typen die Kategorien **Anschlüsse** und **Schnittstelle**.

Chaque [type d'objet](../bases/structure-it-documentation.md) peut être [configuré](../bases/classement-de-catégories-en-types-d'objets.md) avec le dossier de catégories **câblage**. Ainsi, les objets de ces types sélectionnés reçoivent les catégories **Ports** et **Interface**.

Der Kategorie-Ordner eignet sich für alle Objekte, die einen aktiven oder passiven Part bei der Verkabelungen beitragen.

Le dossier de catégorie convient à tous les objets qui jouent un rôle actif ou passif dans le câblage.

[![Verkabelungsweg Liste](../assets/images/de/anwendungsfaelle/kabel-patches-und-wege/1-kpuw.png)](../assets/images/de/anwendungsfaelle/kabel-patches-und-wege/1-kpuw.png)

[ ![Liste des chemins de câblage](../assets/images/fr/applicationfaelle/kabel-patches-und-wege/1-kpuw.png)](../assets/images/fr/applicationfaelle/kabel-patches-und-wege/1-kpuw.png)

### Kategorie **Anschlüsse**

### catégorie **connexions**

Verfügt das ausgewählte Objekt über einen physischen Anschluss jeglicher Art, kann dieser in der Kategorie **Anschlüsse** dokumentiert werden.

Si l'objet sélectionné dispose d'un raccordement physique de quelque type que ce soit, celui-ci peut être documenté dans la catégorie **Connexions**.

Jeder Anschluss ist entweder als **Eingang** oder als **Ausgang** definiert.

Chaque connexion est définie soit comme **entrée**, soit comme **sortie**.

* Verbindung zwischen einem Eingang und einem Ausgang

* Connexion entre une entrée et une sortie

Diese Verbindung zwischen Ein- und Ausgang ist optional und nur unter bestimmten Bedingungen sinnvoll. Beispielsweise hat ein Patchpanel die Möglichkeit zum Auflegen von Kabeln, die in Ports münden. Hier entsteht also eine Beziehung zwischen Ein- und Ausgang.

Cette connexion entre l'entrée et la sortie est facultative et n'a de sens que dans certaines conditions. Par exemple, un panneau de brassage a la possibilité de poser des câbles qui débouchent sur des ports. Il y a donc ici une relation entre l'entrée et la sortie.

Die Kategorie **Anschlüsse** wird durch weitere Kategorien automatisch mit Einträgen versorgt:

La catégorie **Connexions** est automatiquement alimentée en entrées par d'autres catégories :

* **Netzwerk → Port**: Wird ein neuer Port angelegt, wird dieser automatisch als neuer **Ausgang** definiert.
* **Stromverbraucher**: Wird ein neues Netzteil angelegt, wird dessen Stromanschluss automatisch als neuer **Eingang** definiert.
* **Verkabelung → Schnittstelle**: Wird eine neue Schnittstelle angelegt, wird diese automatisch als neuer **Ausgang** definiert.
* **Speichernetze → FC-Port**: Wird ein neuer Fiber Channel Port angelegt, wird dieser automatisch als neuer **Ausgang** definiert.

* **Réseau → Port** : Si un nouveau port est créé, il est automatiquement défini comme nouvelle **sortie**.
* **Consommateur d'électricité** : Si un nouveau bloc d'alimentation est créé, son port d'alimentation est automatiquement défini comme nouvelle **entrée**.
* **Câblage → Interface** : Si une nouvelle interface est créée, son port est automatiquement défini comme nouvelle **sortie**.
* **Réseaux de stockage → Port FC** : Si un nouveau port Fiber Channel est créé, il est automatiquement défini comme nouvelle **sortie**.

[![Anschlüsse](../assets/images/de/anwendungsfaelle/kabel-patches-und-wege/4-kpuw.png)](../assets/images/de/anwendungsfaelle/kabel-patches-und-wege/4-kpuw.png)

[ ![Connexions](../assets/images/fr/applicationfaelle/kabel-patches-und-wege/4-kpuw.png)](../assets/images/fr/applicationfaelle/kabel-patches-und-wege/4-kpuw.png)

### Kategorie **Schnittstelle**

### Catégorie **Interface**

Die Kategorie Schnittstelle dient zum Anlegen weiterer Verbindungen, die nicht die Netzwerk- oder Stromverkabelung betreffen. Dies könnten Anschlüsse an Peripherie-Geräten wie Monitore über HDMI oder Drucker über USB sein.

La catégorie Interface sert à créer d'autres connexions qui ne concernent pas le réseau ou le câblage électrique. Il peut s'agir de connexions à des périphériques tels que des moniteurs via HDMI ou des imprimantes via USB.

## Objekttyp **Kabel**

## type d'objet **câble**

Der Objekttyp Kabel beinhaltet alle Objekte, die ein Kabel repräsentieren. Ein Kabel besteht in i-doit zwingend aus einem Anfang und einem Ende. Y-Kabel o. ä. werden nicht unterstützt. Hier muss sich der Benutzer mit einem Hilfsobjekt begnügen, dass unter **Verkablung → Anschlüsse** einen Eingang mit zwei Ausgängen, die untereinander verbunden sind, enthält (1-zu-2-Beziehung).

Le type d'objet Câble contient tous les objets qui représentent un câble. Dans i-doit, un câble se compose obligatoirement d'un début et d'une fin. Les câbles en Y ou similaires ne sont pas supportés. Dans ce cas, l'utilisateur doit se contenter d'un objet auxiliaire qui contient sous **Câblage → Connexions** une entrée avec deux sorties qui sont reliées entre elles (relation 1 à 2).

Die Eigenschaften eines Kabels werden in mehreren Kategorien definiert, die im Folgenden erläutert werden.

Les caractéristiques d'un câble sont définies dans plusieurs catégories, expliquées ci-dessous.

[![Kabel](../assets/images/de/anwendungsfaelle/kabel-patches-und-wege/5-kpuw.png)](../assets/images/de/anwendungsfaelle/kabel-patches-und-wege/5-kpuw.png)

[ ![Câble](../assets/images/fr/applicationfaelle/kabel-patches-und-wege/5-kpuw.png)](../assets/images/fr/applicationfaelle/kabel-patches-und-wege/5-kpuw.png)

### Kategorie-Ordner **Kabelverbindung**

### Dossier de la catégorie **Connexion par câble**

Der Kategorie-Ordner **Kabelverbindung** enthält die Kategorie **Kabel** und wird daher typischerweise dem Objekttyp **Kabel** zugeordnet. Der Ordner selbst zeigt an, an was das Kabel angeschlossen ist.

Le dossier de catégorie **Connexion par câble** contient la catégorie **Câble** et est donc typiquement attribué au type d'objet **Câble**. Le dossier lui-même indique à quoi le câble est connecté.

[![Kategorie-Ordner](../assets/images/de/anwendungsfaelle/kabel-patches-und-wege/6-kpuw.png)](../assets/images/de/anwendungsfaelle/kabel-patches-und-wege/6-kpuw.png)

[ ![Dossier de la catégorie](../assets/images/fr/applicationfaelle/kabel-patches-und-wege/6-kpuw.png)](../assets/images/fr/applicationfaelle/kabel-patches-und-wege/6-kpuw.png)

### Kategorie **Kabel**

### catégorie **câble**

Die wesentlichen Eigenschaften eines Kabels werden in der Kategorie **Kabelverbindung → Kabel** festgehalten:

Les caractéristiques essentielles d'un câble sont consignées dans la catégorie **Connexion de câbles → Câble** :

| Attribut | Beschreibung |
| --- | --- |
| **Art des Kabels** | Spezifikation des Kabels, beispielsweise "CAT7" oder "LWL" |
| **Länge in CM** | Länge des Kabels - nicht nur in Zentimetern |
| **Farbe** | Farbe der äußeren Ummantlung |
| **Belegung** | Wie viele Adern/Fasern enthält das Kabel? |
| **Maximale Anzahl an Fasern/Adern** | Wie viele Adern/Fasern dürfen maximal genutzt werden? |

| Attribut | Description |
| --- | --- |
| **Type de câble** | Spécification du câble, par exemple "CAT7" ou "Fibre optique" |
| **Longueur en CM** | Longueur du câble - pas seulement en centimètres |
| **Couleur** | Couleur de la gaine extérieure |
| Combien de fils/fibres le câble contient-il ? |
| **Nombre maximal de fibres/fibres** | Quel est le nombre maximal de fils/fibres pouvant être utilisés ? |

### Kategorie **Faser/Ader**

### Catégorie **fibre/filament**

Wer bis ins kleinste Detail dokumentieren möchte/muss, wird die Kategorie Faser/Ader lieben. Für jede Faser eines Glasfaserkabels bzw. jede Ader eines Kupferkabels können weitere Eigenschaften hinterlegt werden:

Ceux qui souhaitent/doivent documenter les moindres détails adoreront la catégorie Fibre/Conducteur. Il est possible d'enregistrer d'autres propriétés pour chaque fibre d'un câble à fibres optiques ou chaque conducteur d'un câble en cuivre :

| ### Attribut | ### Beschreibung |
| --- | --- |
| **Label** | Bezeichnung |
| **Kategorie** | Relevant für LWL (OM1-4, OS1-2) |
| **Farbe** | Wellenlänge |
| **Dämpfung** | in dB |
| **RX** | Leitung zum Empfang von Daten |
| **TX** | Leitung zum Senden von Daten |

| ### Attribut | ### Description |
| --- | --- |
| **Label** | Désignation |
| **Catégorie** | Pertinent pour les fibres optiques (OM1-4, OS1-2) |
| **Couleur** | Longueur d'onde |
| **Atténuation** | en dB |
| **RX** | Ligne pour la réception de données |
| **TX** | Ligne pour l'émission de données |

## Objekttyp **Patchfeld**

## type d'objet **patchfield**

Patchpanel werden in i-doit als Objekte vom Typ **Patchfeld** dokumentiert. Dieser passiven Komponente ist typischerweise der Kategorie-Ordner **Verkabelung** zu geordnet. In der Kategorie **Verkabelung → Anschlüsse** werden die Ports definiert: Ein **Eingang** repräsentiert den Netzwerk-Port. Ein **Ausgang** repräsentiert das aufgelegte Kabel. Ein- und Ausgang werden miteinander verbunden.

Les panneaux de brassage sont documentés dans i-doit comme des objets de type **Panneau de brassage**. Le dossier de catégorie **câblage** est typiquement attribué à ce composant passif. Les ports sont définis dans la catégorie **Câblage → Connexions** : Une **entrée** représente le port réseau. Une **sortie** représente le câble raccroché. L'entrée et la sortie sont reliées entre elles.

Zum schnellen Verbinden von Patchfeldern eignet sich der [Verkabelungsbrowser](#Verkabelungsbrowser).

Pour connecter rapidement des panneaux de brassage, le [Navigateur de câblage](#Navigateur de câblage) convient.

## Verkabelungsbrowser

## Navigateur de câblage

Diese Funktion erleichtert die schnelle Verbindung von zwei Objekten untereinander. Er ist in der Kategorie **Verkabelung → Anschlüsse** über den Button **Verkabelungsbrowser** zu erreichen. Vorausgesetzt werden bereits dokumentierte Anschlüsse bei beiden Objekten.

Cette fonction facilite la connexion rapide de deux objets entre eux. Elle est accessible dans la catégorie **Câblage → Raccordements** en cliquant sur le bouton **Navigateur de câblage**. Il faut que les deux objets soient déjà documentés.

[![Verkabelungsbrowser](../assets/images/de/anwendungsfaelle/kabel-patches-und-wege/13-kpuw.png)](../assets/images/de/anwendungsfaelle/kabel-patches-und-wege/13-kpuw.png)

[ ![Navigateur de câblage](../assets/images/fr/applicationfaelle/kabel-patches-und-wege/13-kpuw.png)](../assets/images/fr/applicationfaelle/kabel-patches-und-wege/13-kpuw.png)

Der geöffnete **Verkabelungsbrowser** bietet eine zweigeteilte Ansicht: Das Objekt, in dem sich der Benutzer befindet, wird mit allen verfügbaren Anschlüssen auf der linken Seite angezeigt. Die Ein- werden von den Ausgängen getrennt dargestellt. Auf der rechten Seite wird ein zweites Objekt mit seinen Anschlüssen geladen, damit beide Objekte miteinander verbunden werden können.

Le **Navigateur de câblage** ouvert offre une vue en deux parties : l'objet dans lequel se trouve l'utilisateur est affiché avec tous les raccordements disponibles sur la gauche. Les entrées sont représentées séparément des sorties. Sur la droite, un deuxième objet est chargé avec ses connexions afin que les deux objets puissent être reliés entre eux.

Es können jeweils die rechts dargestellten Anschlüsse des ersten Objekts und die links dargestellten Anschlüsse des zweiten Objekts miteinander verbunden werden. Die Ansicht der Ein- und Ausgänge kann gespiegelt werden, damit sowohl Ein-, als auch Ausgänge links beziehungsweise rechts dargestellt werden.

Les connexions du premier objet représentées à droite et les connexions du deuxième objet représentées à gauche peuvent être reliées entre elles. La vue des entrées et des sorties peut être inversée afin que les entrées et les sorties soient représentées respectivement à gauche et à droite.

Über den Button **Nächstes Objekt laden** wird einem bestehender Verkabelungsweg nachgegangen.

Le bouton **Charger l'objet suivant** permet de suivre un chemin de câblage existant.

Zum Verbinden von je einem Anschluss zwischen den beiden Objekten wird die Checkboxen der Anschlüsse ausgewählt. Über die oberste Checkbox werden alle verfügbaren Anschlüsse ausgewählt. Ein Bereich von Anschlüssen kann mit der **Shift**-Taste selektiert werden. Wichtig ist, dass die Anzahl der Anschlüsse des ersten Objekts mit der Anschluss der Anschlüsse des zweiten Objekts übereinstimmen.

Pour relier une connexion entre les deux objets, les cases à cocher des connexions sont sélectionnées. La case à cocher supérieure permet de sélectionner tous les raccordements disponibles. Une plage de connexions peut être sélectionnée avec la touche **Shift**. Il est important que le nombre de connexions du premier objet corresponde au nombre de connexions du deuxième objet.

Über den Button **Anschlüsse verbinden** werden die ausgewählten Anschlüsse beider Objekte miteinander verbunden. Die Logik sieht vor, von oben nach unten die jeweils nächsten ausgewählten Anschlüsse zu verbinden, bis das Listenende unten erreicht ist.

Le bouton **Relier les connexions** permet de relier les connexions sélectionnées des deux objets. La logique prévoit de relier de haut en bas les connexions sélectionnées suivantes, jusqu'à ce que la fin de la liste soit atteinte en bas.

i-doit sieht bei jedem neu verbundenen Anschluss ein **Kabel**-Objekt vor. Über die Checkbox **Automatische Verkabelung** werden neue **Kabel**-Objekte ohne Rückfrage erstellt. Andernfalls ist für jede Verbindung ein bestehendes **Kabel**-Objekt in einem neuen Fenster auszuwählen.

i-doit prévoit un **objet Câble** pour chaque nouvelle connexion. Si la case **Câblage automatique** est cochée, les nouveaux objets **Câble** sont créés sans demande de confirmation. Sinon, un objet **câble** existant doit être sélectionné dans une nouvelle fenêtre pour chaque connexion.

Über den Button **Kabel ändern** kann für die selektierten Anschlüsse jeweils ein alternatives Kabel-Objekt ausgewählt werden.

Le bouton **Modifier le câble** permet de choisir un objet câble alternatif pour chacun des raccords sélectionnés.

Der Button **Anschlüsse lösen** bewirkt, dass die Verbindung von den ausgewählten Anschlüssen unwiderruflich gelöscht werden.

Le bouton **Déconnecter** entraîne la suppression irréversible de la connexion des ports sélectionnés.

## Verkabelungsimport

## Importation du câblage

Verkabelungswege können in i-doit über den Import einer Datei im CSV-Format erstellt werden. Die dazu nötigen Schritte sind unter **Extras → CMDB → Import → Verkabelung** zu finden.

Les chemins de câblage peuvent être créés dans i-doit via l'importation d'un fichier au format CSV. Les étapes nécessaires à cet effet se trouvent sous **Extras → CMDB → Importation → Câblage**.

Folgende Optionen stehen zur Verfügung:

Les options suivantes sont disponibles :

| Option | Beschreibung |
| --- | --- |
| **Verkabelungsart** | In welcher Kategorie sollen Einträge erstellt werden? Zur Auswahl stehen:<br><br>-   **Anschlüsse** (siehe Kategorie **Verkabelung → Anschlüsse**)<br>-   **FC-Ports** (siehe Kategorie **Speichernetze → FC-Port**)<br>-   **Ports** (siehe Kategorie **Netzwerk → Port**)<br>-   **Schnittstelle** (siehe Kategorie **Verkabelung → Schnittstelle**)<br><br>Die Kategorie wird nur beim ersten und beim letzten Objekt des jeweiligen Verkabelungsweges berücksichtigt. Bei allen anderen Zwischen-Objekten werden Einträge in der Kategorie **Verkabelung →** **Anschlüsse** importiert. |
| **Anschlussart** | Um welchen Anschluss handelt es sich? Zur Auswahl stehen alle Einträge des Attributs **Anschlussart** in der Kategorie **Verkabelung → Anschlüsse**. Diese Liste kann unter **Verwaltung → Vordefinierte Inhalte → Dialog-Admin → Anschlüsse: Anschlussart** angepasst werden. |
| **Nicht existierende Zwischenobjekte automatisch erzeugen** | Wird diese Option aktiviert, können nicht bereits dokumentierte Objekte zwischen Anfangs- und End-Objekt beim Import erzeugt werden. |
| **Objekttyp des automatisch erzeugten Zwischenobjekts** | Ist die oben genannte Option aktiv, muss zusätzlich definiert werden, welchem Objekttyp neu erstellte Objekte zugeordnet werden sollen. |

| option | description |
| --- | --- |
| **Type de câblage** | Dans quelle catégorie des entrées doivent-elles être créées ? Vous avez le choix entre :<br><br>- **Ports** (voir catégorie **Câblage → Ports**)<br>- **PortsFC** (voir catégorie **Réseaux de stockage → Port FC**)<br>- **Ports** (voir catégorie **Réseau → Port**)<br>- **Interface** (voir catégorie **Câblage → Interface**)<br><br>La catégorie n'est prise en compte que pour le premier et le dernier objet de chaque chemin de câblage. Pour tous les autres objets intermédiaires, les entrées sont importées dans la catégorie **Câblage →** **Connexions**. |
| **Type de raccordement** | De quel raccordement s'agit-il ? Toutes les entrées de l'attribut **Type de raccordement** dans la catégorie **Câblage → Raccordements** peuvent être sélectionnées. Cette liste peut être consultée sous **Administration → Contenu prédéfini → Admin. dialogue → Raccords : Type de connexion** peut être personnalisé. |
| **Créer automatiquement les objets intermédiaires non existants** | Si cette option est activée, les objets non déjà documentés peuvent être créés entre l'objet initial et l'objet final lors de l'importation. |
| **Type d'objet de l'objet intermédiaire créé automatiquement** | Si l'option ci-dessus est activée, il faut également définir à quel type d'objet les objets nouvellement créés doivent être attribués. |

Über den Button **CSV-Datei einlesen** wird eine zuvor ausgewählte Datei hochgeladen und analysiert. Das Ergebnis befindet sich im Tab **Inhalt**.

Le bouton **Importer un fichier CSV** permet de télécharger et d'analyser un fichier préalablement sélectionné. Le résultat se trouve dans l'onglet **Contenu**.

Innerhalb des Tabs **Inhalt** werden die Zeilen und Spalten der CSV-Datei dargestellt. Über die entsprechenden Buttons können neue Zeilen und Spalten definiert werden. Jede Zeile repräsentiert einen Verkabelungsweg mit je einem Anfangs- und End-Objekt sowie beliebig vielen Zwischen-Objekten.

Les lignes et les colonnes du fichier CSV sont représentées dans l'onglet **Contenu**. De nouvelles lignes et colonnes peuvent être définies à l'aide des boutons correspondants. Chaque ligne représente un chemin de câblage avec un objet de début et un objet de fin ainsi qu'un nombre quelconque d'objets intermédiaires.

Das Anfangsobjekt besteht aus einem Objekt-Titel und einem Ausgang. Das End-Objekt aus einem Objekt-Titel und einem Eingang. Die Zwischen-Objekte verfügen über je einen Eingang und Ausgang. Zwischen den Anschlüssen befinden sich Objekte vom Typ Kabel. Für diese wird ebenfalls ein Objekt-Titel vergeben. Bei Zwischen-Objekten können Ein- und Ausgang nachträglich vertauscht werden. Sollten für die Anschlüsse und Kabel keine Namen vergeben werden, werden diese durchnummeriert.

L'objet initial se compose d'un titre d'objet et d'une sortie. L'objet final se compose d'un titre d'objet et d'une entrée. Les objets intermédiaires disposent chacun d'une entrée et d'une sortie. Entre les connexions se trouvent des objets de type câble. Un titre d'objet est également attribué à ces derniers. Pour les objets intermédiaires, l'entrée et la sortie peuvent être interverties ultérieurement. Si aucun nom n'est attribué aux raccordements et aux câbles, ceux-ci sont numérotés.

Die Vergabe der Objekt-Titel und Anschlüsse geschieht entweder über die CSV-Datei oder über die Textfelder. Eine automatische Namensvergabe ist für jede Spalte individuell möglich.

L'attribution des titres d'objets et des connexions se fait soit via le fichier CSV, soit via les champs de texte. Une attribution automatique des noms est possible individuellement pour chaque colonne.

!!! success "Auch ohne CSV-Datei nutzbar"
    Eine CSV-Datei muss nicht zwangsläufig für den Import vorliegen. Stattdessen kann der Tab **Inhalt** dazu genutzt werden, manuell Verkabelungswege anzulegen.

! !! success "Utilisable même sans fichier CSV".
    Un fichier CSV ne doit pas nécessairement être disponible pour l'importation. Au lieu de cela, l'onglet **contenu** peut être utilisé pour créer manuellement des chemins de câblage.

Nicht existierende Objekte werden rot, automatisch zu erstellende gelb und bereits existierende Objekte grün markiert. Diese werden anhand des Objekt-Titels und -Typs identifiziert.

Les objets inexistants sont marqués en rouge, les objets à créer automatiquement en jaune et les objets déjà existants en vert. Ils sont identifiés par le titre et le type d'objet.

Über den Button **Import starten** werden die Verkabelungswege importiert.

Le bouton **Lancer l'importation** permet d'importer les chemins de câblage.

[![Import starten](../assets/images/de/anwendungsfaelle/kabel-patches-und-wege/15-kpuw.png)](../assets/images/de/anwendungsfaelle/kabel-patches-und-wege/15-kpuw.png)

[ ![Lancer l'importation](../assets/images/fr/applicationfaelle/kabel-patches-und-wege/15-kpuw.png)](../assets/images/fr/applicationfaelle/kabel-patches-und-wege/15-kpuw.png)