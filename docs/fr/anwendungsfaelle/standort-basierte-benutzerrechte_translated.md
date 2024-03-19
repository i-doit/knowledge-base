<!-- TRANSLATED by md-translate -->
# Standort-basierte Benutzerrechte

# Droits d'utilisateur basés sur la localisation

In i-doit sind [sehr feingranulare Benutzerrechte](../effizientes-dokumentieren/rechteverwaltung/index.md) definierbar, um bestimmten Benutzergruppen nur eingeschränkten Zugriff auf die IT-Dokumentation zu ermöglichen. Dazu gehören Benutzerrechte, die sich nur auf bestimmte [Standorte](../anwendungsfaelle/standorte.md) auswirken.

Dans i-doit, il est possible de définir des [droits d'utilisateur à granularité très fine](../documenter-efficacement/gestion-des-droits/index.md) afin de n'accorder à certains groupes d'utilisateurs qu'un accès limité à la documentation informatique. Il s'agit notamment de droits d'utilisateur qui ne s'appliquent qu'à certains [sites](../anwendungsfaelle/standorte.md).

## Aufgabe

## tâche

Herr Müller ist verantwortlich für alle Server im Standort Düsseldorf. Die Rechte von Herrn Müller sollen so eingeschränkt werden, dass er jeweils im Standort Düsseldorf alle Server sehen kann und neue Server-[Objekte](../grundlagen/struktur-it-dokumentation.md) erstellen kann. Bei allen Servern im Standort Düsseldorf soll er alle [Kategorien](../grundlagen/struktur-it-dokumentation.md) bearbeiten können. Auf Server oder andere Objekte in anderen Standorten soll er keinen Zugriff haben.

M. Müller est responsable de tous les serveurs du site de Düsseldorf. Les droits de M. Müller doivent être limités de manière à ce qu'il puisse voir tous les serveurs du site de Düsseldorf et créer de nouveaux [objets](../bases/structure-it-documentation.md). Pour tous les serveurs du site de Düsseldorf, il doit pouvoir modifier toutes les [catégories](../grundlagen/struktur-it-dokumentation.md). Il ne doit pas avoir accès aux serveurs ou autres objets situés sur d'autres sites.

## Konfiguration

## Configuration

Um den lesenden und bearbeitenden Zugriff auf die Objekte und deren Kategorien zu ermöglichen, werden unter **[Verwaltung → Einstellungen für [Mandanten-Name] → Berechtigungen → CMDB](../effizientes-dokumentieren/rechteverwaltung/cmdb.md)** für das **Personen**-Objekt von Herrn Müller die Rechte  **Ansehen** und **Bearbeiten** auf die **Bedingungen**

Pour permettre l'accès en lecture et en modification aux objets et à leurs catégories, les droits **[Administration → Paramètres pour [nom du mandant] → Autorisations → CMDB](../efficient-dokumentieren/rechtverwaltung/cmdb.md)** pour l'objet **Personnes** de M. Müller sont attribués aux droits **Visualiser** et **Modifier** sur les **Conditions**.

* **Objekte unterhalb einer Lokation** und
* **Kategorie in Objekten unterhalb eines Standortes** gesetzt.

**Objets en dessous d'un emplacement** et
* **Catégorie définie dans les objets situés en dessous d'une localisation**.

Als **Parameter** wird jeweils Düsseldorf ausgewählt.

Le **paramètre** sélectionné est à chaque fois Düsseldorf.

Um die Neuanlage von Objekten zu ermöglichen, muss das Recht **Erstellen** für **Objekte vom Typ** Server gesetzt werden. Um den Zugriff auf die Kategorien der neu erstellten Objekte zu ermöglichen, wird das Recht **Kategorie(n) in von mir erstellten Objekten** auf alle Kategorien gesetzt. Dies kann optional auch nur für die Kategorie **Standort** gesetzt werden, damit eine physikalische Zuordnung möglich wird.

Pour permettre la création de nouveaux objets, le droit **Créer** doit être activé pour les **objets de type** serveur. Pour permettre l'accès aux catégories des objets nouvellement créés, le droit **Catégorie(s) dans les objets que j'ai créés** doit être activé pour toutes les catégories. En option, cela peut aussi être activé uniquement pour la catégorie **Site**, afin de permettre une attribution physique.

Damit diese Einschränkungen auch im [Objektbrowser](../grundlagen/objekt-beziehungen.md), in der [Standortansicht](../anwendungsfaelle/standorte.md) sowie im [CMDB-Explorer](../auswertungen/cmdb-explorer/index.md) greifen, müssen unter **Verwaltung → [Mandanten-Name] Verwaltung → Experteneinstellungen** erweiterte Einstellungen gesetzt werden:

Pour que ces restrictions s'appliquent également dans le [navigateur d'objets](../bases/relations-objets.md), dans la [vue du site](../applicationfaelle/site.md) ainsi que dans le [CMDB-Explorer](../exploitations/cmdb-explorer/index.md), des paramètres étendus doivent être définis sous **administration → [nom du mandant] administration → paramètres experts** :

| Key | Value |
| --- | --- |
| **auth.use-in-cmdb-explorer** | **1** |
| **auth.use-in-object-browser** | **1** |
| **auth.use-in-location-tree** | **1** |

| clé | valeur |
| --- | --- |
| **auth.use-in-cmdb-explorer** | **1** |
| **auth.use-in-object-browser** | **1** |
| **auth.use-in-location-tree** | **1** |

Eine genaue Erklärung dieser Einstellungen befindet sich im Artikel [CMDB (Rechteverwaltung)](../effizientes-dokumentieren/rechteverwaltung/cmdb.md).

Une explication détaillée de ces paramètres se trouve dans l'article [CMDB (gestion des droits)](../documenter-efficacement/gestion-des-droits/cmdb.md).

## Handhabung

## manipulation

Der Prozess bei der Neuanlage eines Servers von Herrn Müller ist nun wie folgt: Er legt einen neuen Server an, editiert die Kategorie **Standort** und weist den Server einem Standort unterhalb von Düsseldorf zu.

Le processus lors de la création d'un nouveau serveur par Monsieur Müller est maintenant le suivant : Il crée un nouveau serveur, édite la catégorie **Site** et attribue le serveur à un site situé en dessous de Düsseldorf.