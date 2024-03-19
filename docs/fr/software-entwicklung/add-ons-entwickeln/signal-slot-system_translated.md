<!-- TRANSLATED by md-translate -->
# Signal-Slot System

# Système de slot de signal

Das [Signal-Slot System](https://de.wikipedia.org/wiki/Signal-Slot-Konzept) kann benutzt werden, um in i-doit auf bestimmte _Ereignisse_ zu reagieren. Darunter fallen sowohl CMDB Ereignisse, wie "Objekt wurde erstellt", "Datensatz wurde geändert" oder "Datensatz wurde archiviert", als auch technische Ereignisse, wie "Kategorie wurde initialisiert", "GUI wird gerendert" oder "CSS wird zusammengefasst".

Le [Signal-Slot System](https://de.wikipedia.org/wiki/Signal-Slot-Konzept) peut être utilisé pour réagir à certains _événements_ dans i-doit. Il s'agit aussi bien d'événements CMDB, tels que "l'objet a été créé", "l'enregistrement a été modifié" ou "l'enregistrement a été archivé", que d'événements techniques, tels que "la catégorie a été initialisée", "le rendu de l'interface graphique est en cours" ou "le CSS est en cours de fusion".

Das "Events" Add-on greift zum Beispiel auf eine Reihe dieser Signale zurück und bildet somit einen Adapter zwischen technischen Signalen und einer Konfiguration in der i-doit Oberfläche.

Le module complémentaire "Events", par exemple, fait appel à une série de ces signaux et constitue ainsi un adaptateur entre les signaux techniques et une configuration dans l'interface i-doit.

# Anwendungsfälle

# Cas d'utilisation

Mit Hilfe des Signal-Slot Systems kann zum Beispiel die GUI beliebiger Kategorien erweitert werden. Im einfachsten Fall ergänzt man die "navbar" um eine (oder mehrere) eigene Schaltflächen. Es ist aber darüber hinaus sogar möglich eine Kategorie um Attribute zu erweitern - dies erfordert allerdings viel Arbeit und ein tiefes Know-How des Systems.

Le système Signal-Slot permet par exemple d'étendre la GUI de n'importe quelle catégorie. Dans le cas le plus simple, on ajoute un (ou plusieurs) bouton(s) à la "navbar". Mais il est même possible d'ajouter des attributs à une catégorie - cela demande toutefois beaucoup de travail et une connaissance approfondie du système.

Mittels eigener Logik kann bei bestimmten Ereignissen, zum Beispiel beim dokumentieren von virtuellen Servern oder Ändern einer primären IP-Adresse, ein externes Skript angesteuert werden.

Grâce à une logique propre, un script externe peut être déclenché lors de certains événements, par exemple lors de la documentation de serveurs virtuels ou du changement d'une adresse IP primaire.

**Achtung!**

**Attention!**

Aufwändige Prozeduren sollten nicht auf Basis eines Signals angesteuert werden, da die Verarbeitung synchron passiert. Das bedeutet eine rechenintensive Prozedur würde den dahinterliegenden i-doit Prozess verlangsamen und könnte dadurch unerwünschte Seiteneffekte auslösen (Abbruch des Requests, Speicherüberlauf, …).

Les procédures complexes ne doivent pas être commandées sur la base d'un signal, car le traitement se fait de manière synchrone. Cela signifie qu'une procédure nécessitant une grande puissance de calcul ralentirait le processus i-doit sous-jacent et pourrait ainsi déclencher des effets de bord indésirables (interruption de la requête, débordement de mémoire, ...).

Alternativ lässt sich ein beobachtetes Signal in einen (Betriebssystem-) Prozess weiterleiten, sodass i-doit nicht geblockt wird. Dies wird in der [offiziellen PHP Dokumentation](https://www.php.net/manual/en/function.exec.php#refsect1-function.exec-notes) beschrieben.

Il est également possible de transmettre un signal observé à un processus (du système d'exploitation) afin que i-doit ne soit pas bloqué. Ceci est décrit dans la [documentation officielle PHP](https://www.php.net/manual/en/function.exec.php#refsect1-function.exec-notes).

# Verwendung der Signale

# Utilisation des signaux

Um mit Signalen arbeiten zu können, benötigen wir zunächst eine Instanz der "isys_component_signalcollection" Klasse aus dem Container:

Pour pouvoir travailler avec des signaux, nous avons d'abord besoin d'une instance de la classe "isys_component_signalcollection" du conteneur :

```
$signals = isys_application::instance()->container->get('signals');
```

Mit dieser Instanz können wir nun Signale senden oder vorhandene Signale beobachten. Die Beobachtung eines Signals kann auch nachträglich gestoppt werden.

Avec cette instance, nous pouvons maintenant envoyer des signaux ou observer des signaux existants. L'observation d'un signal peut également être stoppée ultérieurement.

## Generelle Informationen

## Informations générales

Um bei Erreichen eines Signals seine eigene Logik auszuführen, wird mit sogenannten "callbacks" gearbeitet. In der PHP Welt gibt es verschiedene Möglichkeiten, wie man diese definieren kann, siehe dazu auch die [offizielle PHP Dokumentation](https://www.php.net/callable).

Pour exécuter sa propre logique lorsqu'un signal est atteint, on travaille avec ce que l'on appelle des "callbacks". Dans le monde PHP, il existe différentes possibilités de les définir, voir à ce sujet la [documentation officielle PHP](https://www.php.net/callable).

Wir empfehlen "callbacks" mittels String- oder Array-Notation zu übergeben, also zum Beispiel:

Nous recommandons de passer les "callbacks" à l'aide de la notation string ou array, par exemple :

```
$signal->connect('signal.name', 'function_name');
// Or
$signal->connect('signal.name', ['class_name', 'method_name']);
```

Wir raten davon ab Lambda-Funktionen oder Closures zu nutzen, da diese Art der Signale später nicht mehr gelöst werden kann (siehe auch "Beobachtung beenden").

Nous déconseillons l'utilisation de fonctions lambda ou de fermetures, car ce type de signaux ne peut plus être résolu par la suite (voir aussi "Mettre fin à l'observation").

## Signale beobachten

## Observer les signaux

Um auf Signale zu reagieren, müssen wir einen validen "Callback" an das entsprechende Signal hängen. Das passiert mit Hilfe der "connect" Methode:

Pour réagir aux signaux, nous devons attacher un "callback" valide au signal correspondant. Cela se fait à l'aide de la méthode "connect" :

```
$signal->connect('name.des.signals', callable, priority);
```

* An erster Stelle steht der Name des Signals.
* Der zweite Parameter muss "[callable](https://www.php.net/callable)" sein, es empfiehlt sich hier ein Array oder ein String zu übergeben. Lambda Funktionen oder Closures funktionieren natürlich auch, lassen sich aber nachträglich nicht mehr "disconnecten".
* Als dritten Parameter lässt sich eine optionale Priorität mitgeben - dabei muss es sich um einen numerischen Wert handeln. Dabei entspricht eine niedrige Zahl eine höhere Priorität.

* Le nom du signal est placé en première position.
* Le deuxième paramètre doit être "[callable](https://www.php.net/callable)", il est recommandé de passer ici un tableau ou une chaîne de caractères. Les fonctions lambda ou les closures fonctionnent bien sûr aussi, mais ne peuvent plus être "déconnectées" ultérieurement.
* Le troisième paramètre peut être une priorité optionnelle - il doit s'agir d'une valeur numérique. Un nombre faible correspond à une priorité plus élevée.

Jedes Signal wird, je nach Implementierung, Parameter übergeben bekommen, mit denen gearbeitet werden kann. Die Stelle im Code, die das Signal aufruft entscheidet über die übergebenen Parameter.

Selon l'implémentation, chaque signal recevra des paramètres avec lesquels il sera possible de travailler. L'endroit du code qui appelle le signal décide des paramètres transmis.

Mehr dazu unter "Verfügbare Signale".

Pour en savoir plus, voir "Signaux disponibles".

## Beobachtung beenden

## Mettre fin à l'observation

Mittels "disconnect" lassen sich verbundene Beobachtungen nachträglich lösen. Wichtig hierbei: dies funktioniert NICHT mit Lambda Funktionen und Closures, sondern nur mit "callbacks" in String oder Array-Form, also zum Beispiel:

Grâce à "disconnect", les observations liées peuvent être résolues ultérieurement. Important : cela ne fonctionne PAS avec les fonctions lambda et les fermetures, mais uniquement avec des "callbacks" sous forme de chaîne ou de tableau, par exemple :

```
$signals->disconnect('signal.name', 'function_name');
// Or
$signals->disconnect('signal.name', ['class_name', 'method_name']);
```

# Eigene Signale senden

# Envoyer ses propres signaux

Mit Hilfe der "emit" Methode können Signale im eigenen Code gesendet werden. Das macht insbesondere dann Sinn, wenn im eigenen Add-on Objekte oder Kategorien erstellt oder geändert werden.

La méthode "emit" permet d'envoyer des signaux dans son propre code. Cela est particulièrement utile lorsque des objets ou des catégories sont créés ou modifiés dans le propre add-on.

So etwas ist notwendig, damit die Basisfunktionen, wie zum Beispiel die Suche über geänderte Daten informiert wird und entsprechend den Suchindex aktualisieren kann.

Cela est nécessaire pour que les fonctions de base, comme par exemple la recherche, soient informées des données modifiées et puissent actualiser l'index de recherche en conséquence.

Darüber hinaus ist es natürlich auch möglich eigene Signale zu senden, die dann an anderer Stelle beobachtet werden können. Das kann genutzt werden, um Code zu entzerren, indem bestimmte Sub-Routinen ausgelagert werden.

En outre, il est bien sûr possible d'envoyer ses propres signaux, qui peuvent ensuite être observés ailleurs. Cela peut être utilisé pour alléger le code en externalisant certaines sous-routines.

# Verfügbare Signale

# Signaux disponibles

Die Liste der verfügbaren Signale ist groß und in einigen Fällen auch sehr spezifisch, um bestimmte Use-Cases abzubilden. Diese Liste umfasst alle Signale, die im i-doit Kern existieren und ist in verschiedene Gruppen unterteilt. Die Signale unterhalb von "Andere" sind nur mit Vorsicht zu verwenden, wohingegen wir von der Verwendung der "Veralteten Signale" gänzlich abraten.

La liste des signaux disponibles est grande et, dans certains cas, très spécifique pour représenter certains cas d'utilisation. Cette liste comprend tous les signaux qui existent dans le noyau i-doit et est divisée en différents groupes. Les signaux situés en dessous de "Autres" ne doivent être utilisés qu'avec prudence, alors que nous déconseillons totalement l'utilisation des "Signaux obsolètes".

## Objekttyp Signale

## Type d'objet Signaux

### mod.cmdb.afterObjectTypeCreated

### mod.cmdb.afterObjectTypeCreated

Wird ausgeführt unmittelbar nachdem ein neuer Objekttyp in die Datenbank geschrieben wurde.

S'exécute immédiatement après l'écriture d'un nouveau type d'objet dans la base de données.

Parameter: Objekttyp ID, Name, Konstante, Spezifische Kategorie ID, Selbstdefiniert, Container, Objektbild URL, Icon URL, Sorting Wert, Status, SYS-ID Prefix, Darstellen im Baum

Paramètres : Type d'objet ID, Nom, Constante, Catégorie spécifique ID, Auto-défini, Conteneur, Image de l'objet URL, Icône URL, Valeur de tri, Statut, SYS-ID préfixe, Représenter dans l'arborescence

### mod.cmdb.beforeObjectTypePurge

### mod.cmdb.beforeObjectTypePurge

Wird ausgeführt bevor ein Objekttyp gelöscht wird.

Exécuté avant la suppression d'un type d'objet.

Parameter: Objekttyp ID, Name, Datensatz als Array

Paramètres : Type d'objet ID, nom, enregistrement sous forme de tableau

### mod.cmdb.afterObjectTypeDeleted

### mod.cmdb.afterObjectTypeDeleted

Wird ausgeführt nachdem ein Objekttyp aus der Datenbank gelöscht wurde.

S'exécute après la suppression d'un type d'objet de la base de données.

Parameter: Ursprüngliche Objekttyp ID, Datensatz als Array

Paramètres : ID du type d'objet d'origine, enregistrement sous forme de tableau

### mod.cmdb.afterObjectTypePurge

### mod.cmdb.afterObjectTypePurge

Wird ausgeführt nachdem ein Objekttyp gelöscht wird (ebenfalls nach mod.cmdb.afterObjectTypeDeleted).

Est exécuté après la suppression d'un type d'objet (également après mod.cmdb.afterObjectTypeDeleted).

Parameter: Objekttyp ID, Name, Ergebnis der Löschung, Datensatz als Array

Paramètres : Type d'objet ID, nom, résultat de la suppression, enregistrement sous forme de tableau

### mod.cmdb.beforeObjectTypeSave

### mod.cmdb.beforeObjectTypeSave

Wird ausgeführt bevor ein Objekttyp gespeichert wird.

Exécuté avant qu'un type d'objet ne soit enregistré.

Parameter: Objekttyp ID, Postdaten als Array

Paramètres : Type d'objet ID, données postales sous forme de tableau

### mod.cmdb.afterObjectTypeSave

### mod.cmdb.afterObjectTypeSave

Wird ausgeführt nachdem ein Objekttyp gespeichert wurde.

S'exécute après l'enregistrement d'un type d'objet.

Parameter: Objekttyp ID, Postdaten als Array, Ergebnis der Erstellung

Paramètres : Type d'objet ID, données postales sous forme de tableau, résultat de la création

### mod.cmdb.beforeCreateObjectTypeList

### mod.cmdb.beforeCreateObjectTypeList

Wird ausgeführt bevor die Objekt Typ Liste in der CMDB GUI erzeugt wird.

Exécuté avant que la liste des types d'objets ne soit créée dans la CMDB GUI.

Parameter: Instanz der Listen Komponente

Paramètres : Instance du composant Listen

## Objekt Signale

## Objet Signaux

### mod.cmdb.objectChanged

### mod.cmdb.objectChanged

Wird ausgeführt nachdem ein Objekt verändert wurde und bevor die "Objekt geändert" Daten aktualisiert werden.

Exécuté après qu'un objet a été modifié et avant que les données "objet modifié" ne soient actualisées.

Parameter: Objekt IDs als Array, Username des aktuellen Benutzers

Paramètres : ID d'objet sous forme de tableau, nom d'utilisateur de l'utilisateur actuel

### mod.cmdb.objectDeleted

### mod.cmdb.objectDeleted

Wird ausgeführt nachdem ein Objekt aus der Datenbank entfernt wurde (purged).

S'exécute après qu'un objet a été retiré de la base de données (purged).

Parameter: Objekt ID, DAO Instanz die den Befehl ausgelöst hat

Paramètres : ID objet, instance DAO qui a déclenché la commande

### mod.cmdb.beforeObjectRank

### mod.cmdb.beforeObjectRank

Wird ausgeführt bevor der Status eines Objekts geändert wird (z.B. archivieren, löschen, purgen, wiederherstellen).

Est exécuté avant que le statut d'un objet ne soit modifié (par ex. archiver, supprimer, purger, restaurer).

Parameter: DAO Instanz die den Befehl ausgelöst hat, Richtung ("archivieren/löschen/purgen", "wiederherstellen"), Objekt IDs als Array

Paramètres : Instance DAO qui a déclenché la commande, direction ("archiver/effacer/purger", "restaurer"), ID d'objet sous forme de tableau

### mod.cmdb.afterObjectRank

### mod.cmdb.afterObjectRank

Wird ausgeführt nachdem der Status eines Objekts geändert wurde (z.B. archivieren, löschen, purgen, wiederherstellen).

Est exécuté après que le statut d'un objet a été modifié (par ex. archiver, supprimer, purger, restaurer).

Parameter: DAO Instanz die den Befehl ausgelöst hat, Richtung ("archivieren/löschen/purgen", "wiederherstellen"), Objekt IDs als Array

Paramètres : Instance DAO qui a déclenché la commande, direction ("archiver/effacer/purger", "restaurer"), ID d'objet sous forme de tableau

### mod.cmdb.beforeInsertObject

### mod.cmdb.beforeInsertObject

Wird ausgeführt bevor ein Objekt über die CMDB GUI erzeugt wird.

Exécuté avant qu'un objet ne soit créé via l'interface utilisateur graphique CMDB.

Parameter: DAO Instanz die den Befehl ausgelöst hat

Paramètres : Instance DAO qui a déclenché la commande

### mod.cmdb.objectCreated

### mod.cmdb.objectCreated

Wird ausgeführt nachdem ein Objekt erfolgreich erzeugt wurde.

S'exécute après la création réussie d'un objet.

Parameter: DAO Instanz die den Befehl ausgelöst hat, Objekt ID, SYS-ID, Objekttyp ID, Name (u.U leer), CMDB-Status ID, Username des aktuellen Benutzers

Paramètres : Instance DAO qui a déclenché la commande, ID d'objet, ID SYS, ID de type d'objet, nom (éventuellement vide), ID de statut CMDB, nom d'utilisateur de l'utilisateur actuel.

### mod.cmdb.afterInsertObject

### mod.cmdb.afterInsertObject

Wird ausgeführt nachdem ein Objekt erfolgreich über die CMDB GUI erzeugt wurde.

S'exécute après qu'un objet a été créé avec succès via l'interface graphique CMDB.

Parameter: DAO Instanz die den Befehl ausgelöst hat, Objekttyp ID, Objekt ID

Paramètres : Instance DAO qui a déclenché la commande, ID type d'objet, ID objet

### mod.cmdb.beforeObjectStatusChange

### mod.cmdb.beforeObjectStatusChange

Wird aufgerufen bevor der Status eines Objekts geändert wird (z.B. archivieren, löschen, purgen, wiederherstellen), noch vor "mod.cmdb.beforeRankRecord".

Appelé avant que le statut d'un objet ne soit modifié (par ex. archiver, supprimer, purger, restaurer), avant même "mod.cmdb.beforeRankRecord".

Parameter: Objekt ID, neuer Status

Paramètres : ID de l'objet, nouveau statut

### mod.cmdb.templatesApplied

### mod.cmdb.templatesApplied

Wird aufgerufen nachdem ein Objekt aus einem Template erzeugt wurde.

Appelé après la création d'un objet à partir d'un modèle.

Parameter: Template Objekt IDs als Array, Objekt Typ ID, Name des erzeugten Objekts, Objekt ID des zuletzt erzeugten Objekts, Instanz des CMDB Import Handlers

Paramètres : ID objet modèle sous forme de tableau, ID type d'objet, nom de l'objet créé, ID objet du dernier objet créé, instance du gestionnaire d'importation CMDB.

## Kategorie Signale

## Catégorie Signaux

### mod.cmdb.beforeCategoryEntryRank

### mod.cmdb.beforeCategoryEntryRank

Wird aufgerufen bevor der Status eines Kategorie Datensatzes über die CMDB GUI geändert wird.

Appelé avant que le statut d'un enregistrement de catégorie ne soit modifié via la CMDB GUI.

Parameter: DAO Instanz der jeweiligen Kategorie, Tabellenname, Richtung ("archivieren/löschen/purgen", "wiederherstellen"), Postdaten als Array

Paramètres : Instance DAO de la catégorie correspondante, nom de la table, direction ("archiver/effacer/purger", "restaurer"), données de courrier sous forme de tableau

### mod.cmdb.afterCategoryEntryRank

### mod.cmdb.afterCategoryEntryRank

Wird aufgerufen nachdem der Status eines Kategorie Datensatzes über die CMDB GUI geändert wurde.

Appelé après que le statut d'un enregistrement de catégorie ait été modifié via l'interface utilisateur graphique CMDB.

Parameter: DAO Instanz der jeweiligen Kategorie, Tabellenname, Ergebnis des Prozess, Richtung ("archivieren/löschen/purgen", "wiederherstellen"), Postdaten als Array

Paramètres : Instance DAO de la catégorie correspondante, nom de la table, résultat du processus, direction ("archiver/supprimer/purger", "restaurer"), données de courrier sous forme de tableau

### mod.cmdb.afterCategoryEntrySave

### mod.cmdb.afterCategoryEntrySave

Wird aufgerufen nachdem ein Kategorie Datensatz gespeichert wurde.

Appelé après l'enregistrement d'une catégorie.

Parameter: DAO Instanz der jeweiligen Kategorie, Datensatz ID, Ergebnis des Prozess, Objekt ID, Postdaten als Array, Logbuchänderungen als Array

Paramètres : Instance DAO de la catégorie correspondante, ID de l'enregistrement, résultat du process, ID de l'objet, données du courrier sous forme de tableau, modifications du journal sous forme de tableau.

### mod.cmdb.beforeCategoryInit

### mod.cmdb.beforeCategoryInit

Wird aufgerufen bevor eine Kategorie über die CMDB GUI angesteuert wird.

Appelé avant d'accéder à une catégorie via l'interface utilisateur graphique CMDB.

Parameter: Objekt ID, Kategorie Datensatz ID, Einige gesammelte Kategorie Metadaten

Paramètres : ID de l'objet, ID de l'enregistrement de la catégorie, Quelques métadonnées de la catégorie collectées

### mod.cmdb.afterCategoryInit

### mod.cmdb.afterCategoryInit

Wird aufgerufen nachdem eine Kategorie über die CMDB GUI angesteuert wurde - sowohl beim öffnen der Kategorie als auch direkt nach dem speichern.

Appelé après avoir accédé à une catégorie via l'interface utilisateur graphique CMDB, que ce soit à l'ouverture de la catégorie ou directement après l'avoir enregistrée.

Parameter: Objekt ID, DAO Instanz der jeweiligen Kategorie, Instanz des DAO Distributors

Paramètres : ID d'objet, instance DAO de la catégorie correspondante, instance du distributeur DAO

### mod.cmdb.beforeCategorySync

### mod.cmdb.beforeCategorySync

Wird aufgerufen befor die "sync" Methode einer Kategorie DAO innerhalb des CMDB Imports aufgerufen wird - dies betrifft auch das Template System und die "Objekt duplizieren" Funktion.

Appelé avant que la méthode "sync" d'une catégorie DAO ne soit appelée dans l'importation CMDB - ceci concerne également le système de templates et la fonction "Dupliquer l'objet".

Parameter: Kategorie ID, Kategorie Daten die an "sync" übergeben werden, Objekt ID, Typ des Syncs (1 = erstellen, 2 = aktualisieren), Kategorie Typ ID (0 = Global, 1 = Spezifisch, 4 = Benutzerdefiniert)

Paramètres : ID de la catégorie, catégorie des données à transmettre à "sync", ID de l'objet, type de sync (1 = créer, 2 = mettre à jour), ID du type de catégorie (0 = global, 1 = spécifique, 4 = défini par l'utilisateur)

### mod.cmdb.afterCategorySync

### mod.cmdb.afterCategorySync

Wird aufgerufen nachdem die "sync" Methode einer Kategorie DAO innerhalb des CMDB Imports aufgerufen wird - dies betrifft auch das Template System und die "Objekt duplizieren" Funktion

Appelé après l'appel de la méthode "sync" d'une catégorie DAO dans l'importation CMDB - ceci concerne également le système de templates et la fonction "Dupliquer objet".

Parameter: Kategorie ID, Kategorie Daten die an "sync" übergeben wurden, Datensatz ID des erzeugten Eintrags, erstellte Objekt ID, Typ des Syncs (1 = erstellen, 2 = aktualisieren), Kategorie Typ ID (0 = Global, 1 = Spezifisch, 4 = Benutzerdefiniert), DAO Instanz der jeweiligen Kategorie

Paramètres : ID de la catégorie, données de la catégorie transmises à "sync", ID de l'enregistrement créé, ID de l'objet créé, type de sync (1 = créer, 2 = mettre à jour), ID du type de catégorie (0 = global, 1 = spécifique, 4 = défini par l'utilisateur), instance DAO de la catégorie concernée

### mod.cmdb.beforeCreateCategoryEntry

### mod.cmdb.beforeCreateCategoryEntry

Wird aufgerufen bevor ein Kategorie Datensatz über die CMDB GUI erzeugt wird.

Appelé avant qu'un enregistrement de catégorie ne soit créé via l'interface utilisateur graphique CMDB.

Parameter: Kategorie ID, Objekt ID, DAO Instanz der jeweiligen Kategorie, Logbuchänderungen als Array

Paramètres : ID de catégorie, ID d'objet, instance DAO de la catégorie correspondante, modifications du journal sous forme de tableau

### mod.cmdb.afterCreateCategoryEntry

### mod.cmdb.afterCreateCategoryEntry

Wird aufgerufen nachdem ein Kategorie Datensatz über die CMDB GUI erzeugt wurde.

Appelé après la création d'un enregistrement de catégorie via l'interface utilisateur graphique CMDB.

Parameter: Kategorie ID, Kategorie Datensatz ID, Ergebnis des Prozess, Objekt ID, DAO Instanz der jeweiligen Kategorie, Logbuchänderungen als Array

Paramètres : ID de la catégorie, ID de l'enregistrement de la catégorie, résultat du process, ID de l'objet, instance DAO de la catégorie correspondante, modifications du journal sous forme de tableau.

### mod.cmdb.beforeCategoryEntrySave

### mod.cmdb.beforeCategoryEntrySave

Wird aufgerufen bevor ein Kategorie Datensatz über die CMDB GUI gespeichert wird.

Appelé avant qu'un enregistrement de catégorie ne soit sauvegardé via la CMDB GUI.

Parameter: DAO Instanz der jeweiligen Kategorie, Kategorie Datensatz ID, Objekt ID, Postdaten als Array, Logbuchänderungen als Array

Paramètres : Instance DAO de la catégorie correspondante, ID de l'enregistrement de la catégorie, ID de l'objet, données du courrier sous forme de tableau, modifications du journal sous forme de tableau

### mod.cmdb.beforeProcess

### mod.cmdb.beforeProcess

Wird aufgerufen bevor die "process" Methode einer UI Kategorie Klasse aufgerufen wird.

Appelée avant que la méthode "process" d'une classe de catégorie UI ne soit appelée.

Parameter: DAO Instanz der jeweiligen Kategorie, Dateipfad des Templates

Paramètres : Instance DAO de la catégorie correspondante, chemin d'accès au fichier du modèle

### mod.cmdb.beforeProcessList

### mod.cmdb.beforeProcessList

Wird aufgerufen bevor die "process_list" Methode einer UI (Multivalue-) Kategorie Klasse aufgerufen wird.

Appelé avant que la méthode "process_list" d'une classe de catégorie UI (multivalue) ne soit appelée.

Parameter: DAO Instanz der jeweiligen Kategorie, Dateipfad des Templates

Paramètres : Instance DAO de la catégorie correspondante, chemin d'accès au fichier du modèle

### mod.cmdb.beforeRankRecord

### mod.cmdb.beforeRankRecord

Wird aufgerufen bevor der Status eines CMDB-Datensatz geändert wird. Dies beinhaltet sowohl Kategorie- als auch Objektdatensätze.

Appelé avant que le statut d'un enregistrement CMDB ne soit modifié. Cela inclut les enregistrements de catégorie et d'objet.

Parameter: DAO Instanz der jeweiligen Kategorie, Objekt ID, Kategorie Datensatz ID, Datensatz Identifier, Datensatz Array, Tabellenname, Aktueller Status des Datensatzes, Zielstatus des Datensatzes, Kategorie Typ ID (0 = Global, 1 = Spezifisch, 4 = Benutzerdefiniert), Richtung ("archivieren/löschen/purgen", "wiederherstellen")

Paramètres : Instance DAO de chaque catégorie, ID d'objet, ID d'enregistrement de catégorie, identifiant d'enregistrement, tableau d'enregistrements, nom de table, état actuel de l'enregistrement, état cible de l'enregistrement, ID de type de catégorie (0 = global, 1 = spécifique, 4 = défini par l'utilisateur), direction ("archiver/supprimer/purger", "restaurer")

### mod.cmdb.beforeUserGroupChanged

### mod.cmdb.beforeUserGroupChanged

Wird aufgerufen bevor eine Personengruppe geändert wird, zum Beispiel beim hinzufügen oder entfernen von Personen.

Appelé avant qu'un groupe de personnes ne soit modifié, par exemple lors de l'ajout ou de la suppression de personnes.

Parameter: Person Objekt ID, Gruppe Objekt ID, Aktion ("attach-person" oder "detach-person")

Paramètres : ID d'objet de la personne, ID d'objet du groupe, action ("attach-person" ou "detach-person")

### mod.cmdb.contact.beforeSaveTag

### mod.cmdb.contact.beforeSaveTag

Wird aufgerufen bevor die Rolle einer Kontaktzuweisung geändert wird.

Appelé avant que le rôle d'une attribution de contact ne soit modifié.

Parameter: DAO Instanz der jeweiligen Kategorie, Datensatz ID der Kontaktzuweisung Kategorie, ID der Personen Rolle

Paramètres : Instance DAO de la catégorie concernée, ID de l'enregistrement de la catégorie d'attribution des contacts, ID des personnes Rôle

### mod.cmdb.extendFieldList

### mod.cmdb.extendFieldList

Wird aufgerufen wenn die Konfiguration einer Liste verarbeitet wird. Der Rückgabewert sollte ein assoziatives Array sein mit dem feldnamen bzw. alias als Schlüssel und einer Sprachkonstante die in der GUI dargestellt wird als Wert.

Appelé lorsque la configuration d'une liste est traitée. La valeur de retour doit être un tableau associatif avec le nom du champ ou l'alias comme clé et une constante de langage qui est représentée dans l'interface graphique comme valeur.

Parameter: Kategorie ID, Kategorie Typ ID (0 = Global, 1 = Spezifisch, 4 = Benutzerdefiniert)

Paramètres : ID de catégorie, ID de type de catégorie (0 = global, 1 = spécifique, 4 = défini par l'utilisateur)

### mod.cmdb.extendProperties

### mod.cmdb.extendProperties

Wird aufgerufen wenn die Attribute (= Properties) einer Kategorie abgerufen werden. Der Callback des Signals kann hier eigene Attribute mitliefern um beliebige Kategorien um eigene Attribute zu ergänzen.

Est appelé lorsque les attributs (= propriétés) d'une catégorie sont appelés. Le callback du signal peut ici fournir ses propres attributs afin de compléter n'importe quelle catégorie par ses propres attributs.

Parameter: Kategorie ID, Kategorie Typ ID (0 = Global, 1 = Spezifisch, 4 = Benutzerdefiniert)

Paramètres : ID de catégorie, ID de type de catégorie (0 = global, 1 = spécifique, 4 = défini par l'utilisateur)

### mod.cmdb.processContentTop

### mod.cmdb.processContentTop

Wird aufgerufen nachdem der Objekt-Header verarbeitet wurde. Dies lässt sich abfangen um wie im "Wartungs Add-on" oder Monitoring eigene Elemente in den Objekt Header zu laden.

Appelé après le traitement de l'en-tête de l'objet. Cela peut être intercepté pour charger ses propres éléments dans l'en-tête de l'objet, comme dans le "module complémentaire de maintenance" ou le monitoring.

Parameter: Kategoriedaten der Allgemein Kategorie als Array

Paramètres : Données de catégorie de la catégorie générale sous forme de tableau

### mod.cmdb.processMenuTreeLinks

### mod.cmdb.processMenuTreeLinks

Wird aufgerufen wenn der Navigationsbaum für Kategorien in einem Objekt erzeugt wird. Dies wird üblicherweise für die "sticky" Kategorien verwendet die über dem Baum dargestellt werden.

Appelé lorsque l'arbre de navigation pour les catégories est créé dans un objet. Il est généralement utilisé pour les catégories "collantes" qui sont affichées au-dessus de l'arborescence.

Parameter: Instanz der Template Komponente, Template Variablen Name zum nutzen der "append()" Methode, Objekt ID, Objekttyp ID

Paramètres : Instance du composant modèle, nom de la variable modèle pour utiliser la méthode "append()", ID de l'objet, ID du type d'objet.

## Andere

## Autres

### mod.export.extendTree

### mod.export.extendTree

Wird aufgerufen nachdem der Navigationsbaum für die verschiedenen Exporte aufgebaut wurde um ggf. eigene Exporte anzuhängen.

Appelé après la création de l'arborescence de navigation pour les différentes exportations afin de rattacher, le cas échéant, ses propres exportations.

Parameter: Instanz der Baum-Komponente

Paramètres : Instance du composant de l'arbre

### mod.import_csv.afterImport

### mod.import_csv.afterImport

Wird aufgerufen nachdem der CSV Import abgeschlossen wurde, dieses Signal steuert u.a. den Suchindex an um die neu erzeugten / aktualisierten Objekte zu indexieren.

Appelé après la fin de l'importation CSV, ce signal commande entre autres l'index de recherche pour indexer les objets nouvellement créés / mis à jour.

Parameter: Instanz des CSV Imports, Verarbeitete Daten als Array, Erstellte Objekte als Array (mit Information zu ID, Titel und Typ ID), Kategorie Mapping als Array, Array der tatsächlich aktualisierten Kategorien (via Konstanten)

Paramètres : Instance de l'importation CSV, Données traitées sous forme de tableau, Objets créés sous forme de tableau (avec informations sur l'ID, le titre et l'ID de type), Mappage des catégories sous forme de tableau, Tableau des catégories effectivement mises à jour (via des constantes)

### mod.import_csv.afterImportObject

### mod.import_csv.afterImportObject

Wird aufgerufen nachdem ein der CSV Import ein einzelnes Objekt importiert hat.

Appelé après que l'importation CSV ait importé un seul objet.

Parameter: Instanz des CSV Imports, Objekt ID, Ergebnis des Imports (boolean)

Paramètres : Instance de l'importation CSV, ID de l'objet, résultat de l'importation (booléen)

### mod.css.attachStylesheet

### mod.css.attachStylesheet

Wird aufgerufen um Add-on spezifische Stylesheet Dateien zu laden und global verfügbar zu machen. Der Rückgabewert des Callbacks sollte der absolute Pfad zur Stylesheet des eigenen Add-ons sein. Achtung: Add-on spezifische Styles sollten immer mit einem eindeutigen Prefix arbeiten und keine "Core Styles" zu überschreiben.

Appelé pour charger des fichiers de feuilles de style spécifiques aux add-ons et les rendre globalement disponibles. La valeur de retour du callback doit être le chemin absolu vers la feuille de style du propre add-on. Attention : les styles spécifiques aux add-ons doivent toujours travailler avec un préfixe unique et ne pas écraser les "core styles".

Parameter: Keine

les paramètres : Aucun

### mod.cmdb.refreshTableConfigurations

### mod.cmdb.refreshTableConfigurations

Wird aufgerufen nachdem eine benutzerdefinierte Kategorie oder die Systemeinstellungen geändert wurden um Objektlisten zu aktualisieren, die ggf. geänderte Attribute beinhalten müssen.

Appelé après qu'une catégorie définie par l'utilisateur ou les paramètres du système ont été modifiés pour mettre à jour les listes d'objets qui doivent éventuellement contenir des attributs modifiés.

Parameter: Keine

les paramètres : Aucun

### mod.cmdb.extendLocationTree

### mod.cmdb.extendLocationTree

Wird aufgerufen wenn der Standort Navigations Baum in der CMDB aufgebaut wird und kann dazu genutzt werden den Baum nachträglich zu verändern.

Appelé lorsque l'arbre de navigation du site est construit dans la CMDB et peut être utilisé pour modifier l'arbre ultérieurement.

Parameter: Instanz der Baum-Komponente

Paramètres : Instance du composant de l'arbre

### mod.cmdb.extendObjectTree

### mod.cmdb.extendObjectTree

Wird aufgerufen wenn der Navigationsbaum (der die Kategorien anzeigt) innerhalb eines CMDB Objekts aufgebaut wird.

Appelé lorsque l'arbre de navigation (qui affiche les catégories) est construit dans un objet CMDB.

Parameter: Instanz der Baum-Komponente

Paramètres : Instance du composant de l'arbre

### mod.cmdb.extendObjectTypeTree

### mod.cmdb.extendObjectTypeTree

Wird aufgerufen wenn der Navigationsbaum (der die Objekttypen anzeigt) innerhalb einer CMDB Objekttyp Gruppe aufgebaut wird.

Appelé lorsque l'arbre de navigation (qui affiche les types d'objets) est construit dans un groupe de types d'objets CMDB.

Parameter: Instanz der Baum-Komponente

Paramètres : Instance du composant de l'arbre

### mod.cmdb.extendRelationTree

### mod.cmdb.extendRelationTree

Wird aufgerufen wenn der Navigationsbaum unterhalb von Extras > CMDB > Beziehungen aufgebaut wird.

Appelé lorsque l'arbre de navigation est construit en dessous de Outils > CMDB > Relations.

Parameter: Instanz der Baum-Komponente

Paramètres : Instance du composant de l'arbre

### mod.cmdb.beforeUpdateLocationNode

### mod.cmdb.beforeUpdateLocationNode

Spezifisches Signal welches beim erstellen, verschieben und löschen von Standort "Nodes" aufgerufen wird.

Signal spécifique appelé lors de la création, du déplacement et de la suppression de sites "Nodes".

Parameter: Node ID, Parent Node ID, Aktion ("insert", "move" oder "delete")

Paramètres : ID de nœud, ID de nœud parent, action ("insert", "move" ou "delete")

### mod.cmdb.massChangeApplied

### mod.cmdb.massChangeApplied

Wird aufgerufen nachdem eine Massenänderung (via Template-System) durchgeführt wurde.

Appelé après une modification en masse (via le système de templates).

Parameter: betroffene Objekt IDs als Array, Template Objekt ID, Instanz des CMDB Import Handlers

Paramètres : ID d'objet concerné sous forme de tableau, ID d'objet modèle, instance du gestionnaire d'importation CMDB

### mod.auth.afterRemoveAllRights

### mod.auth.afterRemoveAllRights

Wird aufgerufen nachdem alle User-Rechte entfernt werden. Achtung: dies geschieht bei jedem speichern der Rechte um die Caches zu aktualisieren - es werden alle Daten gelöscht und anschließend neu geschrieben.

Appelé après que tous les droits d'utilisateur ont été supprimés. Attention : cela se produit à chaque sauvegarde des droits pour actualiser les caches - toutes les données sont effacées puis réécrites.

Parameter: Objekt ID, Add-on ID

Paramètres : ID de l'objet, ID du module complémentaire

### mod.auth.afterUpdateRights

### mod.auth.afterUpdateRights

Wird aufgerufen nachdem die Rechte einer Person oder Personengruppe gespeichert wurden.

Appelé après que les droits d'une personne ou d'un groupe de personnes ont été enregistrés.

Parameter: Objekt ID, Add-on ID, gespeicherte Rechte als Array, Identifier der Aktion "create"

Paramètres : ID de l'objet, ID du module complémentaire, droits enregistrés sous forme de tableau, identifiant de l'action "create".

### mod.auth.afterDuplicateRights

### mod.auth.afterDuplicateRights

Wird aufgerufen nachdem eine Person oder Personengruppe dupliziert wurde und infolgedessen deren Rechte dupliziert wurden.

Appelé après la duplication d'une personne ou d'un groupe de personnes et, par conséquent, la duplication de leurs droits.

Parameter: Objekt ID des Originals, Objekt ID des Duplikats, Duplizierte Datensätze als Array

Paramètres : ID objet de l'original, ID objet du doublon, Enregistrements dupliqués sous forme de tableau

### system.afterChange

### system.afterChange

Wird aufgerufen nachdem das i-doit Update gelaufen ist oder ein Add-on geändert wurde (aktiviert, deaktiviert, installiert oder deinstalliert).

Appelé après l'exécution de la mise à jour i-doit ou après la modification d'un module complémentaire (activé, désactivé, installé ou désinstallé).

Parameter: Keine

les paramètres : Aucun

### system.afterFlushSystemCache

### system.afterFlushSystemCache

Wird aufgerufen nachdem das Cache Verzeichnis geleert wurde.

Appelé après que le répertoire de cache a été vidé.

Parameter: Keine

les paramètres : Aucun

### system.gui.beforeRender

### system.gui.beforeRender

Wird aufgerufen unmittelbar bevor die GUI verarbeitet wird (bevor Smarty die Templates durchläuft).

Appelé juste avant le traitement de l'IUG (avant que Smarty n'exécute les modèles).

Parameter: Keine

les paramètres : Aucun

### system.gui.afterRender

### system.gui.afterRender

Wird aufgerufen nachdem die GUI verarbeitet wurde (nachdem Smarty das Template gerendert hat).

Appelé après le traitement de l'interface graphique (après que Smarty ait rendu le modèle).

Parameter: Keine

les paramètres : Aucun

### system.navbar.beforeAssignment

### system.navbar.beforeAssignment

Wird aufgerufen bevor die "navbar buttons" verarbeitet werden. Dies wird u.a. vom "Swap-CI" Add-on verwendet um eine Schaltfläche hinzuzufügen.

Appelé avant le traitement des "navbar buttons". Ceci est utilisé entre autres par l'add-on "Swap-CI" pour ajouter un bouton.

Parameter: Keine

les paramètres : Aucun

### system.shutdown

### system.shutdown

Wird aufgerufen wenn der Destruktor von isys_application aufgerufen wird. Dies wird üblicherweise verwendet um Systemeinstellungen zu speichern die noch nicht in die Datenbank überführt wurden.

Appelé lorsque le destructeur de isys_application est appelé. Il est généralement utilisé pour sauvegarder les paramètres du système qui n'ont pas encore été transférés dans la base de données.

Parameter: Keine

les paramètres : Aucun

## Veraltete Signale, die nicht länger genutzt werden sollten

## Signaux obsolètes qui ne devraient plus être utilisés

### mod.cmdb.beforeCreateObjectList

### mod.cmdb.beforeCreateObjectList

Wird aufgerufen bevor eine Objektliste erzeugt wird, allerdings handelt es sich hierbei um eine veraltete "Listen" Komponente.

Appelé avant la création d'une liste d'objets, mais il s'agit d'un composant "Listes" obsolète.

Parameter: Instanz der Listen Komponente, Objekttyp ID

Paramètres : Instance du composant Listen, type d'objet ID

### mod.cmdb.afterLegacyImport

### mod.cmdb.afterLegacyImport

Wird aufgerufen nachdem ein Import durchgeführt wurde.

Appelé après une importation.

Parameter: Startzeit des Imports (als float Wert)

Paramètres : Heure de début de l'importation (sous forme de valeur flottante)

### mod.cmdb.resultList

### mod.cmdb.resultList

Wird aufgerufen wenn eine Multi-Value Kategorie in der CMDB GUI aufgerufen wird.

Appelé lorsqu'une catégorie multi-valeurs est appelée dans la CMDB GUI.

Parameter: Kategorie ID, Kategorie Typ ID (0 = Global, 1 = Spezifisch, 4 = Benutzerdefiniert), Objekt ID, Status der anzuzeigenden Datensätze

Paramètres : ID de catégorie, ID de type de catégorie (0 = global, 1 = spécifique, 4 = défini par l'utilisateur), ID d'objet, statut des enregistrements à afficher

### mod.report.views.view_rack_connections.set_encoding_type

### mod.report.views.view_rack_connections.set_encoding_type

Wird aufgerufen bevor in der Report view "Geräte in einem Schrank" die CSV Datei geschrieben wird.

Est appelé avant que le fichier CSV ne soit écrit dans la view du rapport "Appareils dans une armoire".

Parameter: Keine

les paramètres : Aucun

### mod.report.views.view_devices_in_location_detailed.extend_report_properties

### mod.report.views.view_devices_in_location_detailed.extend_report_properties

Wird aufgerufen bevor in der Report View "Geräte in einem Standort (Listenformat)" die Attributdaten verarbeitet werden.

Appelé avant que les données d'attribut ne soient traitées dans le rapport View "Appareils dans un site (format liste)".

Parameter: Keine

les paramètres : Aucun

### mod.cmdb.viewProcessed

### mod.cmdb.viewProcessed

Wird ausgeführt nachdem die CMDB View Instanz ausgeführt wurde.

S'exécute après l'exécution de l'instance CMDB View.

Parameter: Instanz der CMDB View, Viewdaten als Array

Paramètres : Instance de la vue CMDB, données de la vue sous forme de tableau

### system.exceptionTriggered

### system.exceptionTriggered

Wird an einigen spezifischen Stellen aufgerufen wenn eine Exception nicht gefangen wurde.

Appelé à certains endroits spécifiques lorsqu'une exception n'a pas été capturée.

Parameter: Instanz der Exception

Paramètres : Instance de l'exception

### mod.manager.onBeforeLoad

### mod.manager.onBeforeLoad

Wird aufgerufen bevor der "Modul Manager" die "start" Methode des aktiven Add-ons aufruft.

Appelé avant que le "Modul Manager" n'appelle la méthode "start" du module complémentaire actif.

Parameter: Instanz des aktuellen Add-on

Paramètres : Instance du module complémentaire actuel

### mod.manager.onAfterLoad

### mod.manager.onAfterLoad

Wird aufgerufen nachdem der "Modul Manager" die "start" Methode des aktiven Add-ons aufgerufen hat.

Appelé après que le "Modul Manager" a appelé la méthode "start" du module complémentaire actif.

Parameter: Instanz des aktuellen Add-on

Paramètres : Instance du module complémentaire actuel

### mod.css.beforeProcess

### mod.css.beforeProcess

Wird aufgerufen bevor die i-doit Kern Stylesheets zusammengefasst werden.

Appelé avant que les feuilles de style du noyau i-doit ne soient regroupées.

Parameter: Keine

les paramètres : Aucun

### mod.dashboard.afterInitialize

### mod.dashboard.afterInitialize

Wird aufgerufen nachdem das i-doit Dashboard vorbereitet wurde, unmittelbar bevor die Dashboard Daten an das Template übergeben werden.

Appelé après la préparation du tableau de bord i-doit, juste avant que les données du tableau de bord ne soient transmises au modèle.

Parameter: Instanz des Dashboard Moduls

Paramètres : Instance du module Dashboard

### mod.import_csv.beforeImport

### mod.import_csv.beforeImport

Wird aufgerufen bevor der CSV Import gestartet wird.

Appelé avant le démarrage de l'importation CSV.

Parameter: Instanz des CSV Imports, Verarbeitete Daten als Array, leeres Array, Kategorie Mapping als Array

Paramètres : Instance de l'importation CSV, Données traitées sous forme de tableau, Tableau vide, Mappage de catégorie sous forme de tableau

### mod.import_csv.beforeImportObject

### mod.import_csv.beforeImportObject

Wird aufgerufen unmittelbar bevor der CSV Import ein einzelnes Objekt importiert.

Appelé juste avant que l'importation CSV n'importe un seul objet.

Parameter: Instanz des CSV Imports, Objekt ID

Paramètres : Instance de l'importation CSV, ID de l'objet

### mod.css.processed

### mod.css.processed

Wird aufgerufen nachdem das i-doit eigene CSS verarbeitet wurde

Appelé après le traitement du CSS propre à i-doit

Parameter: Keine

les paramètres : Aucun