<!-- TRANSLATED by md-translate -->
# Lebens und Dokumentationszyklus

# Cycle de vie et de documentation

IT-Komponenten kommen und gehen. Sie werden geplant, angeschafft, betrieben und irgendwann wieder ausgemustert. Bingo: Es geht um das Life Cycle Management. In der [IT-Dokumentation](../glossar.md) spielt dies eine wichtige Rolle, weil hierbei nachvollzogen werden kann, welchen Status eine Komponente haben soll bzw. hat. Zudem soll die IT-Dokumentation an sich archiviert und gelöscht werden können.

Les composants informatiques vont et viennent. Ils sont planifiés, achetés, exploités et mis au rebut à un moment donné. Bingo : il s'agit de la gestion du cycle de vie. Dans la [documentation informatique](../glossar.md), cela joue un rôle important, car il est possible de suivre le statut qu'un composant doit avoir ou a eu. De plus, la documentation informatique en elle-même doit pouvoir être archivée et supprimée.

## Lebenszyklus von IT-Komponenten

## Cycle de vie des composants informatiques

Der Lebenszyklus einer IT-Komponente wird im **CMDB-Status** dokumentiert. Bei einer frischen Installation von _i-doit_ sind folgende **CMDB-Status** verfügbar:

Le cycle de vie d'un composant IT est documenté dans le **CMDB-Status**. Lors d'une installation récente de _i-doit_, les **CMDB-Status** suivants sont disponibles :

* **Geplant**
* **Bestellt**
* **Geliefert**
* **Montiert**
* **Getestet**
* **In Betrieb (nicht editierbar)**
* **Defekt**
* **Außer Betrieb (nicht editierbar)**
* **In Reparatur**
* **Aus Reparatur geliefert**
* **Gelagert**
* **Verschrottet**
* **i-doit Status (nicht editierbar)**
* **Template (nicht editierbar)**

**Planifié**
* **Commandé**
* **Livré**
**Monté**
* **Testé**
**En service (non modifiable)**.
* **Défaut**
**hors service (non modifiable)**.
* **En réparation**
* **Livré en réparation**
**Entreposé**
* **Mis au rebut**
* **i-doit Statut (non modifiable)**
* **Template (non modifiable)**

Der **CMDB-Status** kann in den Objektlisten als Spalte dargestellt werden, um möglichst schnell den Soll-Zustand eines dokumentierten Objekts zu recherchieren.

Le **Statut de la CMDB** peut être représenté sous forme de colonne dans les listes d'objets afin de rechercher le plus rapidement possible l'état théorique d'un objet documenté.

[![cmdb-status](../assets/images/de/grundlagen/lebens-und-dokumentationszyklus/1-lud.png)](../assets/images/de/grundlagen/lebens-und-dokumentationszyklus/1-lud.png)

[ ![cmdb-status](../assets/images/fr/bases/cycle de vie et de documentation/1-lud.png)](../assets/images/fr/bases/cycle de vie et de documentation/1-lud.png)

!!! success "Planung"
    Durch das Abbilden des Lebenszyklus ist es möglich, _i-doit_ für die Planung einzusetzen. Ob nun eine Anschaffung, ein größeres Update oder ein Umzug ansteht - die IT-Dokumentation ist immer mit dabei und bietet valide Aussagen.

! !! success "Planification"
    En reproduisant le cycle de vie, il est possible d'utiliser _i-doit_ pour la planification. Qu'il s'agisse d'une acquisition, d'une mise à jour importante ou d'un déménagement, la documentation informatique est toujours présente et offre des informations valables.

### CMDB-Status pro Objekt angeben

### Indiquer le statut CMDB par objet

Um den gesamten Lebenszyklus eines Objekts abzubilden, wird pro [Objekt](../glossar.md) das [Attribut](../glossar.md) **CMDB-Status** in der [Kategorie](../glossar.md) **Allgemein** verwendet. Wird ein neues Objekt angelegt, erhält dies **In Betrieb** als **CMDB-Status**, solange nichts anderes explizit angegeben wurde.

Afin de représenter le cycle de vie complet d'un objet, le [attribut](../glossar.md) **Statut CMDB** est utilisé pour chaque [objet](../glossar.md) dans la [catégorie](../glossar.md) **Général**. Si un nouvel objet est créé, il reçoit **En service** comme **Statut CMDB**, tant que rien d'autre n'est explicitement indiqué.

[![cmdb-status-pro-objekt](../assets/images/de/grundlagen/lebens-und-dokumentationszyklus/2-lud.png)](../assets/images/de/grundlagen/lebens-und-dokumentationszyklus/2-lud.png)

[ ![cmdb-status-pro-objet](../assets/images/fr/bases/cycle de vie et de documentation/2-lud.png)](../assets/images/fr/bases/cycle de vie et de documentation/2-lud.png)

### CMDB-Status verwalten

### Gérer l'état de la CMDB

Das Hinzufügen, Ändern oder Löschen eines **CMDB-Status** erfolgt über **Verwaltung → Vordefinierte Inhalte → CMDB-Status**. Pro **CMDB-Status** werden folgende Angaben benötigt:

L'ajout, la modification ou la suppression d'un **Statut CMDB** se fait via **Administration → Contenu prédéfini → Statut CMDB**. Pour chaque **état de la CMDB**, les informations suivantes sont nécessaires :

* Eindeutige Bezeichnung bzw. [Sprachkonstante (zur Übersetzung)](../administration/mehrsprachigkeit-und-uebersetzungen.md)
* Eindeutige Konstante (beispielsweise für die Nutzung der [API](../i-doit-pro-add-ons/api/index.md) hilfreich)
* Farbe (wird in Objektlisten, der **Allgemein**-Kategorie, im [**CMDB-Explorer**](../auswertungen/cmdb-explorer/index.md) und an vielen anderen Stellen verwendet)

* Nom unique ou [constante linguistique (pour la traduction)](../administration/multilinguisme-et-traductions.md)
* Constante univoque (utile par exemple pour l'utilisation de l'[API](../i-doit-pro-add-ons/api/index.md))
* Couleur (utilisée dans les listes d'objets, la catégorie **Général**, dans [**CMDB-Explorer**](../explorations/cmdb-explorer/index.md) et à bien d'autres endroits)

[![cmdb-status-verwalten](../assets/images/de/grundlagen/lebens-und-dokumentationszyklus/3-lud.png)](../assets/images/de/grundlagen/lebens-und-dokumentationszyklus/3-lud.png)

[ ![cmdb-status-gestion](../assets/images/fr/bases/cycle de vie et de documentation/3-lud.png)](../assets/images/fr/bases/cycle de vie et de documentation/3-lud.png)

## Lebenszyklus der IT-Dokumentation

## Cycle de vie de la documentation informatique

Neben den zu dokumentierenden Objekten kann auch die Dokumentation an sich einem Lebenszyklus unterstellt werden. Wird ein Dokumentations-Artefakt nicht mehr benötigt, kann es archiviert werden. Ebenso kann ein Artefakt als gelöscht markiert werden, damit eine für die IT-Dokumentation verantwortliche Person dieses Artefakt unwiderruflich über **Purge** löscht.

Outre les objets à documenter, la documentation en elle-même peut être soumise à un cycle de vie. Si un artefact de documentation n'est plus nécessaire, il peut être archivé. De même, un artefact peut être marqué comme supprimé afin qu'une personne responsable de la documentation informatique supprime irrévocablement cet artefact via **Purge**.

!!! success "Lösch-Prozess"
    Für größere Umgebungen lohnt es sich, für das Archivieren und Löschen von Dokumentations-Artefakten die nötigen Prozesse zu etablieren. Wann wird archiviert? Wer darf die IT-Dokumentation bereinigen? Solche Fragen sollten im Team unbedingt geklärt werden. Um lediglich bestimmten Benutzern oder Benutzergruppen das Recht zum Archivieren oder unwiderruflichen Löschen einzuräumen, bietet das Rechtesystem von _i-doit_ die nötigen Einstellungen.

! !! processus de suppression successif
    Pour les environnements de grande taille, il vaut la peine de mettre en place les processus nécessaires à l'archivage et à la suppression des artefacts documentaires. Quand faut-il archiver ? Qui peut nettoyer la documentation informatique ? Ces questions doivent absolument être clarifiées en équipe. Le système de droits d'_i-doit_ offre les réglages nécessaires pour n'accorder le droit d'archiver ou de supprimer irrévocablement que certains utilisateurs ou groupes d'utilisateurs.

### Zustände

### états

So gut wie alle Dokumentations-Artefakte (Objekte, Kategorie-Einträge, Werte in [**Dialog+**-Feldern](dialog-admin.md) u.v.m.) erhalten einen Zustand:

Presque tous les artefacts de documentation (objets, entrées de catégorie, valeurs dans les champs [**Dialog+**](dialog-admin.md) et bien d'autres) reçoivent un état :

* **Normal**:<br> Beim gewöhnlichen Arbeiten (anlegen, ändern) erhält jedes Artefakt diesen Zustand und kann überall verwendet werden.
* **Archiviert**:<br> Das Artefakt wird aus der IT-Dokumentation ausgeblendet. Die weitere Verwendung, beispielsweise Verknüpfungen sind nicht mehr möglich.
* **Gelöscht**:<br> Das Artefakt soll unwiderruflich gelöscht (**Purge**) werden, existiert aber noch vollständig mit allen Beziehungen in der IT-Dokumentation. Ansonsten gleicht dieser Zustand dem von **Archiviert**.

* **Normal**:<br> Lors du travail habituel (création, modification), chaque artefact reçoit cet état et peut être utilisé partout.
* **Archivé**:<br> L'artefact est retiré de la documentation informatique. Toute utilisation ultérieure, par exemple des liens, n'est plus possible.
* **Supprimé**:<br> L'artefact doit être supprimé de manière irréversible (**Purge**), mais existe encore intégralement avec toutes les relations dans la documentation informatique. Sinon, cet état ressemble à celui de **Archivé**.

Der Zyklus sieht vor, dass jedes Dokumentations-Artefakt den Zustand **Normal** erhält. Später folgt **Archiviert**, danach **Gelöscht**. Eine Wiederherstellung in den vorherigen Zustand ist jederzeit möglich.

Le cycle prévoit que chaque artefact de documentation reçoive l'état **Normal**. Plus tard, il devient **archivé**, puis **supprimé**. Un retour à l'état précédent est possible à tout moment.

Neben diesen drei Zuständen existieren bei Objekten Sonderfälle:

Outre ces trois états, il existe des cas particuliers pour les objets :

* **Unfertig**:<br> Wird ein neues Objekt erstellt, aber nicht gespeichert, erhält es diesen Zustand. Dies passiert beispielsweise, wenn ein Objekt zwar neu angelegt, aber der Button **Speichern** nicht gedrückt wird. Diese Objekte lassen sich nur über einen Report aufspüren und dann weiter verwenden. Daher sollten diese regelmäßig gelöscht werden. Dies kann über **Verwaltung → [Mandanten-Name] Verwaltung → Systemreparatur und Bereinigung → Unfertige Objekte entfernen** gemacht werden. Alternativ kann dies auch automatisch geschehen. Mehr dazu finden Sie weiter unten in diesem Artikel.
* **Template**:<br> Ein Objekt kann als [Vorlage](../effizientes-dokumentieren/templates.md) für weitere Objekte fungieren.
* **Änderungsvorlage**:<br> Ein Objekt kann als Änderungsvorlage für die [Massenänderung](../effizientes-dokumentieren/massenaenderung.md) fungieren.

* **Inachevé**:<br> Si un nouvel objet est créé mais pas enregistré, il reçoit cet état. Cela se produit par exemple lorsqu'un objet est créé mais que le bouton **Enregistrer** n'est pas cliqué. Ces objets ne peuvent être retrouvés et réutilisés que via un rapport. C'est pourquoi ils doivent être régulièrement supprimés. Cela peut être fait via **Administration → [nom du mandant] Administration → Réparation et nettoyage du système → Supprimer les objets inachevés**. Il est également possible de le faire automatiquement. Vous trouverez plus d'informations à ce sujet plus loin dans cet article.
* **Template**:<br> Un objet peut faire office de [modèle](../documenter-efficacement/templates.md) pour d'autres objets.
* **Modèle de modification**:<br> Un objet peut faire office de modèle de modification pour la [modification en masse](../documenter-efficacement/modification-en-masse.md).

Soll ein Dokumentations-Artefakt unwiderruflich gelöscht werden, folgt nach der Markierung als **Gelöscht** die Funktion **Purge**. Dies ist allerdings kein Zustand, denn alle Daten (auch der bisherige Zustand und jegliche Logbuch-Einträge) gehen dabei verloren, sodass nicht mehr nachvollzogen werden kann, dass dieses Objekt jemals existiert hat. Diese Funktion sollte also mit Bedacht verwendet werden.

Si un artefact de documentation doit être supprimé de manière irréversible, la fonction **Purge** suit le marquage **Supprimé**. Il ne s'agit toutefois pas d'un état, car toutes les données (y compris l'état précédent et toutes les entrées du journal) sont perdues, de sorte qu'il n'est plus possible de vérifier que cet objet a existé. Cette fonction doit donc être utilisée avec précaution.

### Objekte archivieren, als gelöscht markieren oder unwiderruflich löschen (purge)

### Archiver les objets, les marquer comme supprimés ou les supprimer irrémédiablement (purge)

Der Zustand eines Objekts ist in der **Allgemein**-Kategorie sichtbar. Sollen ein oder mehrere Objekte archiviert, als gelöscht markiert oder unwiderruflich gelöscht werden, geschieht dies über die [Objekt-Liste](objekt-liste/index.md). Dazu werden die Checkboxen der jeweiligen Objekte markiert und einer der Buttons **Archivieren**, **Löschen** oder **Purge** gedrückt.

L'état d'un objet est visible dans la catégorie **Général**. Si un ou plusieurs objets doivent être archivés, marqués comme supprimés ou irrémédiablement supprimés, cela se fait via la [liste d'objets](objekt-liste/index.md). Pour cela, il suffit de cocher les cases des objets concernés et de cliquer sur l'un des boutons **archiver**, **supprimer** ou **purger**.

[![objekte-archivieren-oder-purgen](../assets/images/de/grundlagen/lebens-und-dokumentationszyklus/4-lud.png)](../assets/images/de/grundlagen/lebens-und-dokumentationszyklus/4-lud.png)

[ ![archiver-objets-ou-purge](../assets/images/fr/bases/cycle-de-vie-et-documentation/4-lud.png)](../assets/images/fr/bases/cycle-de-vie-et-documentation/4-lud.png)

Es kann immer nur in den nächstmöglichen Zustand gewechselt werden. Ist ein Objekt im Status **Normal**, kann aus der Liste heraus nur der zum nächsten Zustand **archiviert** gewechselt werden. Gelöscht kann dann erst aus der oben rechts nach archivierten Objekten gefilterten Liste heraus werden. Zudem kann mit **Wiederherstellen** wieder auf den vorherigen Zustand gewechselt werden.

Il est toujours possible de passer uniquement à l'état le plus proche possible. Si un objet est dans l'état **Normal**, on ne peut passer que de l'état suivant **archivé** à partir de la liste. La suppression n'est alors possible qu'à partir de la liste filtrée en haut à droite selon les objets archivés. En outre, il est possible de revenir à l'état précédent en cliquant sur **Rétablir**.

Beim unwiderruflichen Löschen (**Purge**) gibt es keine Rückfrage, außer es existieren Beziehungen zu anderen Objekten.

Lors de la suppression irréversible (**Purge**), il n'y a pas de demande de confirmation, sauf s'il existe des relations avec d'autres objets.

### Kategorie-Einträge archivieren, als gelöscht markieren oder unwiderruflich löschen (Purge)

### Archiver les entrées de catégorie, les marquer comme supprimées ou les supprimer irrémédiablement (Purge)

Eine ähnliche Funktionalität wie bei Objekten existiert bei manchen [Listen-Kategorien](../glossar.md) ("Multi-Value"). Hierüber lassen sich Kategorie-Einträge archivieren, als gelöscht markieren und purgen.

Une fonctionnalité similaire à celle des objets existe pour certaines [listes-catégories](../glossar.md) ("Multi-Value"). Cela permet d'archiver des entrées de catégories, de les marquer comme supprimées et de les purger.

### Vereinfachtes Löschen (Quickpurge)

### Suppression simplifiée (Quickpurge)

Soll ein Dokumentations-Artefakt unwiderruflich gelöscht werden, muss es zuvor erst archiviert und dann als gelöscht markiert werden. Um diesen Zyklus abzukürzen, bietet sich an, den Button **Quickpurge** zu aktivieren. Dies geschieht unter **Verwaltung → [Mandanten-Name] Verwaltung → CMDB → Quickpurge-Button aktivieren**. Auf diese Weise kann ein Objekt oder ein Kategorie-Eintrag unabhängig vom Zustand unwiderruflich gelöscht werden.

Si un artefact de documentation doit être supprimé de manière irréversible, il doit d'abord être archivé puis marqué comme supprimé. Pour raccourcir ce cycle, il est possible d'activer le bouton **Quickpurge**. Cela se fait sous **Administration → [nom du mandant] Administration → CMDB → Activer le bouton Quickpurge**. De cette manière, un objet ou une entrée de catégorie peut être supprimé de manière irréversible, quel que soit son état.

### Auflisten aller archivierten oder als gelöscht markierten Objekte

### Lister tous les objets archivés ou marqués comme supprimés

Um eine Liste mit allen archivierten oder als gelöscht markierten Objekte zu erhalten, bietet sich ein [Report](../auswertungen/report-manager.md) an, der über den Abfrage-Editor zusammengestellt werden kann.

Pour obtenir une liste de tous les objets archivés ou marqués comme supprimés, il est possible de créer un [Rapport](../exploitations/report-manager.md), qui peut être composé via l'éditeur de requêtes.

### Unfertige/archivierte/gelöscht markierte Objekte oder Kategorie-Einträge gesammelt löschen (Purge)

### Supprimer collectivement les éléments marqués inachevés/archivés/supprimés ou les entrées de catégorie (Purge)

Fast immer sind unfertige Objekte unerwünscht, denn sie sind nicht sichtbar und somit nicht zu bearbeiten. Aber auch archivierte oder als gelöscht markierte Objekte sind oftmals unerwünscht. Dasselbe gilt für Kategorie-Einträge. Daher bietet es sich an, diese unerwünschten Dokumentations-Artefakte permanent zu löschen (**Purge**). Hierfür existieren zwei Wege: manuelles oder automatisches Löschen.

Les objets non terminés sont presque toujours indésirables, car ils ne sont pas visibles et ne peuvent donc pas être modifiés. Mais les objets archivés ou marqués comme supprimés sont également souvent indésirables. Il en va de même pour les entrées de catégorie. C'est pourquoi il est conseillé de supprimer définitivement ces artefacts documentaires indésirables (**Purge**). Il existe pour cela deux méthodes : la suppression manuelle ou la suppression automatique.

#### Manuelles Löschen

#### Suppression manuelle

Über die Web GUI lassen sich diese Artefakte löschen. Die entsprechende Funktionalität befindet sich unter **Verwaltung → [Mandanten-Name] Verwaltung → Systemreparatur und Bereinigung → Objekte** bzw. **Kategorien**. Nach dem Drücken eines der angebotenen Buttons wird eine Meldung mit der Anzahl der zu löschenden Objekte oder Kategorie-Einträge angezeigt und nach dem Löschen am unteren Ende der Seite eine Statistik angezeigt, wie viele Objekte bzw. Kategorie-Einträge gelöscht wurden.

Ces artefacts peuvent être supprimés via la Web GUI. La fonctionnalité correspondante se trouve sous **Administration → [nom du mandant] Administration → Réparation du système et nettoyage → Objets** ou **Catégories**. Après avoir appuyé sur l'un des boutons proposés, un message s'affiche avec le nombre d'objets ou d'entrées de catégories à supprimer et, après la suppression, une statistique s'affiche en bas de la page indiquant combien d'objets ou d'entrées de catégories ont été supprimés.

#### Automatisches Löschen

#### Effacement automatique

Die i-doit [Console](../automatisierung-und-integration/cli/index.md) bietet ebenfalls eine Möglichkeit, gewisse unerwünschte Objekte unwiderruflich zu löschen. Ein Beispiel für einen Aufruf sowie die möglichen Parameter können im [dazugehörigen Artikel](../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md) für die Option **system-objectcleanup** eingesehen werden.

La [Console](../automatisation-et-intégration/cli/index.md) d'i-doit offre également la possibilité de supprimer irrémédiablement certains objets indésirables. Un exemple d'appel ainsi que les paramètres possibles peuvent être consultés dans [article associé](../automatisation-et-intégration/cli/console/options-et-paramètres-de-la-console.md) pour l'option **system-objectcleanup**.

```shell
sudo -u www-data console.php system-objectcleanup -u admin -p admin -i 1 --objectStatus 3
```

Der Automatismus besteht darin, den Aufruf per Cronjob regelmäßig auszuführen.

L'automatisme consiste à exécuter régulièrement l'appel par cronjob.

### Zustandsänderungen im Logbuch

### Changements d'état dans le journal

Im Logbuch werden Zustandsänderungen vollständig erfasst. Erst wenn ein Objekt bzw. ein Kategorie-Eintrag unwiderruflich gelöscht wird (**Purge**), werden auch alle zugehörigen Logbuch-Einträge endgültig gelöscht.

Les changements d'état sont entièrement enregistrés dans le journal de bord. Ce n'est que lorsqu'un objet ou une entrée de catégorie est supprimé(e) de manière irréversible (**Purge**) que toutes les entrées correspondantes du journal de bord sont également supprimées de manière définitive.