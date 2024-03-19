<!-- TRANSLATED by md-translate -->
# Vorbereitung der VIVA-Installation

# Préparation de l'installation de VIVA

Vor der ersten Nutzung des [i-doit pro Add-ons](../index.md) **VIVA** steht die Installation an.

Avant la première utilisation du [i-doit pro Add-ons](../index.md) **VIVA**, il faut l'installer.

## Systemvoraussetzungen

## Configuration requise

Neben den für i-doit allgemeingültigen [Systemvoraussetzungen](../../installation/systemvoraussetzungen.md) und Systemeinstellungen setzt dieses Add-on folgende Bedingungen an das System, auf dem es installiert wird, voraus:

En plus de la [configuration système requise](../../installation/systemvoraussetzung.md) et des paramètres système généralement applicables à i-doit, ce module complémentaire requiert les conditions suivantes pour le système sur lequel il est installé :

* Ein lauffähiges _i-doit pro_ in den aktuell von Synetics unterstützten Versionen ist installiert.
* Die PHP-Einstellung short_open_tag ist aktiviert (On).
* Optional wird für die Erstellung eines bereinigten Netzplans Graphviz (in Form der Binaries dot oder neato) auf dem System benötigt und es ist erforderlich, dass die PHP-Funktion exec ausgeführt werden darf. Dies funktioniert nicht auf einem Windows-Betriebssystem.

* Un _i-doit pro_ exécutable dans les versions actuellement supportées par Synetics est installé.
* Le paramètre PHP short_open_tag est activé (On).
* En option, pour la création d'un réseau nettoyé, Graphviz (sous la forme des binaires dot ou neato) est nécessaire sur le système et il faut que la fonction PHP exec puisse être exécutée. Cela ne fonctionne pas sur un système d'exploitation Windows.

## Herunterladen, Installation, Aktualisierung, (De-)Aktivieren

## Téléchargement, installation, mise à jour, (dé)activation

Siehe Artikel [i-doit pro Add-ons](../index.md).

Voir l'article [i-doit pro Add-ons](../index.md).

## Rechteverwaltung

## Gestion des droits

_i-doit pro_ verfügt über eine fein-granulare [Rechteverwaltung](../../effizientes-dokumentieren/rechteverwaltung/index.md), die auch für VIVA genutzt wird. Die Rechte können pro Benutzer/Benutzergruppe unter **Verwaltung → Rechtesystem → VIVA** vergeben werden. Folgende Rechte sind verfügbar:

_i-doit pro_ dispose d'une [gestion des droits] finement granulaire(../../documentation efficace/gestion des droits/index.md), qui est également utilisée pour VIVA. Les droits peuvent être attribués par utilisateur/groupe d'utilisateurs sous **Administration → Système de droits → VIVA**. Les droits suivants sont disponibles :

* Lesender Zugriff: Bearbeitung ist nicht möglich.
* Schreibender Zugriff: Lesen, Neuanlegen, Speichern und Löschen von Informationen
* Administrativer Zugriff: ohne Einschränkungen

* Accès en lecture : l'édition n'est pas possible.
* Accès en écriture : lecture, création, enregistrement et suppression d'informations.
* Accès administratif : sans restriction

Um die ersten Schritte zu vereinfachen, wird bei der Installation die gleichnamige Personengruppe **VIVA** angelegt, die bereits über administrative Rechte verfügt. Sollen Personen diese Rechte erhalten, genügt es, sie dieser Personengruppe hinzuzufügen. Auf diese Weise erhält die Personengruppe **Admin** administrativen Zugriff.

Pour simplifier les premières étapes, le groupe de personnes du même nom **VIVA**, qui dispose déjà de droits administratifs, est créé lors de l'installation. Si des personnes doivent obtenir ces droits, il suffit de les ajouter à ce groupe de personnes. De cette manière, le groupe de personnes **Admin** obtient l'accès administratif.

!!! attention "Nach der Installation verfügt der angemeldete Benutzer noch nicht über die entsprechende Gruppenzugehörigkeit. Daher erscheint VIVA auch nicht im Extras-Menü. Wurde das dem Benutzer entsprechende Personen-Objekt der Personengruppe hinzugefügt, muss sich der Anwender einmal neu anmelden, damit die Änderung wirksam wird. Danach erscheint das VIVA im Extras-Menü."

! !! attention "Après l'installation, l'utilisateur connecté ne dispose pas encore de l'appartenance au groupe correspondant. C'est pourquoi VIVA n'apparaît pas non plus dans le menu Outils. Si l'objet personne correspondant à l'utilisateur a été ajouté au groupe de personnes, l'utilisateur doit se reconnecter une fois pour que la modification prenne effet. Ensuite, VIVA apparaît dans le menu Outils".

[![Extras-Menü in i-doit anzeigen](../../assets/images/de/i-doit-pro-add-ons/viva/installation/1-vi.png)](../../assets/images/de/i-doit-pro-add-ons/viva/installation/1-vi.png)

[ ![Afficher le menu Outils dans i-doit](../../assets/images/fr/i-doit-pro-add-ons/viva/installation/1-vi.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/installation/1-vi.png)

## Migrieren vom bisherigen ITGS-Modul

## Migrer à partir de l'ancien module ITGS

Bereits seit _i-doit pro_ in Version 0.9.9-6 pro ist ein Modul zur Dokumentation von IT-Grundschutz-relevanten Informationen enthalten. VIVA löst es vollständig ab und erweitert es um zahlreiche neue Funktionen. Falls im alten Modul bereits dokumentiert wurde, können diese Daten rückstandslos nach VIVA überführt werden.

Depuis _i-doit pro_ dans sa version 0.9.9-6 pro, un module de documentation des informations pertinentes pour la protection informatique de base est déjà inclus. VIVA le remplace complètement et l'enrichit de nombreuses nouvelles fonctions. Si la documentation a déjà été effectuée dans l'ancien module, ces données peuvent être transférées dans VIVA sans laisser de traces.

### Migration vorbereiten

### Préparer la migration

Um möglichst reibungslos die Daten aus dem Altbestand zu übernehmen, werden folgende Annahmen getroffen:

Afin de reprendre le plus facilement possible les données de l'ancienne base, les hypothèses suivantes sont retenues :

* Die IT-Grundschutz-Kataloge EL 11 von 2009 werden im alten Modul verwendet.
* Die Kataloge EL 12 von 2011 sollen in VIVA eingesetzt werden. Der [Import](./vorgehensweise-mit-viva.md) muss bereits erfolgt sein.
* Im alten Modul ist der Objekttyp _ITGS-Gruppe_ für die Dokumentation der Zielgruppen verwendet worden.
* Diesen _ITGS-Gruppen_ zugewiesene Objekte sind gleichartig, d. h., sie entsprechen der Definition von Zielgruppen und -objekten.
* Die IT-Grundschutz-relevante Dokumentation wird den _ITGS-Gruppen_ und denjenigen Objekten in i-doit, die von keiner _ITGS-Gruppe_ ihre Dokumentation erbt, entnommen.
* Diese nicht-gruppierten Objekte werden jeweils zu Zielgruppen transformiert.
* Anhand des Titels des zur Laufzeit verwendeten Mandanten wird ein neuer Informationsverbund angelegt. Bereits bestehende Informationsverbünde in VIVA werden nicht angetastet.
* Die Schicht-Zuordnung der Gruppen erfolgt anhand ihrer verknüpften Bausteine.

* Les catalogues IT Grundschutz EL 11 de 2009 sont utilisés dans l'ancien module.
* Les catalogues EL 12 de 2011 doivent être utilisés dans VIVA. L'[importation](./procédure-avec-viva.md) doit déjà avoir eu lieu.
* Dans l'ancien module, le type d'objet _ITGS-Gruppe_ est utilisé pour la documentation des groupes cibles.
* Les objets attribués à ces _ITGS-Groups_ sont de même nature, c'est-à-dire qu'ils correspondent à la définition des groupes et objets cibles.
* La documentation relative à la protection informatique de base est extraite des _ITGS-Groupes_ et des objets d'i-doit qui n'héritent de la documentation d'aucun _ITGS-Groupe_.
* Ces objets non groupés sont transformés en groupes cibles.
* Un nouveau groupe d'informations est créé sur la base du titre du mandant utilisé au moment de l'exécution. Les groupes d'informations déjà existants dans VIVA ne sont pas touchés.
* L'attribution des couches aux groupes s'effectue sur la base de leurs éléments constitutifs reliés.

### Migration durchführen

### Effectuer la migration

Sind die [Voraussetzungen](#migrationvorbereiten) erfüllt und ist das alte Modul (noch) nicht gelöscht, kann die Migration über die Web-Oberfläche über **VIVA → Migration** gestartet werden. Dort kann zwischen zwei Aktionen gewählt werden:

Si les [conditions préalables](#préparer la migration) sont remplies et si l'ancien module n'est pas (encore) supprimé, la migration peut être lancée via l'interface web en cliquant sur **VIVA → Migration**. Là, il est possible de choisir entre deux actions :

* **Migration starten _…_**
* **Altes Modul entfernen _…_**

**Démarrer la migration _..._**
**Enlever l'ancien module _..._**

[![Migration starten](../../assets/images/de/i-doit-pro-add-ons/viva/installation/1-vi.png)](../../assets/images/de/i-doit-pro-add-ons/viva/installation/1-vi.png)

[ ![Démarrer la migration](../../assets/images/fr/i-doit-pro-add-ons/viva/installation/1-vi.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/installation/1-vi.png)

Ersteres führt durch die Migration und zeigt den Fortschritt der jeweiligen Schritte. Nachdem der Benutzer die **ITGS-Gruppen** als Zielgruppen definiert und einer IT-Grundschutz-Schicht zugeordnet hat, wird die Migration durchgeführt. Beim Klick auf **Fertigstellen** wird zum neu erstellten Informationsverbund weitergeleitet.

Le premier guide la migration et montre la progression de chaque étape. Une fois que l'utilisateur a défini les **groupes ITGS** en tant que groupes cibles et les a attribués à une couche de protection IT fondamentale, la migration est effectuée. En cliquant sur **Finir**, l'utilisateur est redirigé vers le groupe d'informations nouvellement créé.

Optional kann das alte Modul inkl. aller Daten (Objekte, Kategorien) nach der Migration gelöscht werden. Dieser Schritt ist unwiderruflich.

En option, l'ancien module, y compris toutes les données (objets, catégories), peut être supprimé après la migration. Cette étape est irréversible.

!!! attention "Bevor eine der genannten Aktionen ausgeführt wird, sollte ein Backup der Datenbank und der i-doit-Installation angelegt werden, um im Fehlerfall auf einen funktionierenden Stand zurückkehren zu können."

! !! attention "Avant d'effectuer l'une des actions mentionnées, il convient de faire une sauvegarde de la base de données et de l'installation i-doit afin de pouvoir revenir à un état fonctionnel en cas d'erreur".