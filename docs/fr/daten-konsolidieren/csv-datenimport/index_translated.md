<!-- TRANSLATED by md-translate -->
## CSV-Datenimport

## Importation de données CSV

!!! example ""
    Ein Praxisbeispiel für den automatisierten Datenimport finden Sie auf unserem [Blog](https://www.i-doit.com/blog/automatisierter-csv-import-mit-i-doit/)

! !! exemple ""
    Vous trouverez un exemple pratique d'importation automatisée de données sur notre [blog](https://www.i-doit.com/blog/automatisierter-csv-import-mit-i-doit/)

Viele Organisationen verwenden für ihre IT-Dokumentation eine Tabellenkalkulation, sodass die Informationen in tabellarischer Form vorliegen. Dieser Umstand ist nicht nur unübersichtlich, sondern bringt auch einen großen Aufwand für die Pflege mit sich. Mit dem CSV-Datenimport ist es möglich, diese Daten ganz bequem aus Microsoft Excel, OpenOffice oder LibreOffice Calc nach i-doit zu überführen.

De nombreuses organisations utilisent un tableur pour leur documentation informatique, de sorte que les informations se présentent sous forme de tableaux. Cet état de fait n'est pas seulement peu clair, il entraîne également un grand effort de maintenance. Grâce à l'importation de données CSV, il est possible de transférer facilement ces données de Microsoft Excel, OpenOffice ou LibreOffice Calc vers i-doit.

## Voraussetzungen

## conditions préalables

Damit eine Datei für den CSV-Datenimport verwenden kann, muss diese im .csv-Format mit **UTF-8**-Kodierung gespeichert werden. Einige Tabellenkalkulationen sind nicht in der Lage, die Kodierung beim Speichern festzulegen. In diesem Fall kann nach dem Export ins .csv-Format auf einen Texteditor mit Konvertierungsfunktion zurückgegriffen werden. Im Screenshot zu sehen ist die Funktion **Konvertiere zu UTF-8** in [Notepad++](https://notepad-plus-plus.org/):

Pour qu'un fichier puisse être utilisé pour l'importation de données CSV, il doit être enregistré au format .csv avec un encodage **UTF-8**. Certains tableurs ne sont pas en mesure de définir l'encodage lors de l'enregistrement. Dans ce cas, il est possible de recourir à un éditeur de texte avec fonction de conversion après l'exportation au format .csv. La capture d'écran montre la fonction **Convertir en UTF-8** dans [Notepad++](https://notepad-plus-plus.org/) :

[![Kodierung im Notepad++](../../assets/images/de/daten-konsolidieren/csv-import/1-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/1-csvi.png)

[ ![Encodage dans le Bloc-notes++](../../assets/images/fr/consolidation-données/csv-import/1-csvi.png)](../../assets/images/fr/consolidation-données/csv-import/1-csvi.png)

Der Aufbau einer verwendbaren .csv-Datei sieht in etwa so aus wie in folgendem Beispiel:

La structure d'un fichier .csv utilisable se présente à peu près comme dans l'exemple suivant :

[![Aufbau einer CSV](../../assets/images/de/daten-konsolidieren/csv-import/2-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/2-csvi.png)

[ ![Structure d'un CSV](../../assets/images/fr/consolidation des données/csv-import/2-csvi.png)](../../assets/images/fr/consolidation des données/csv-import/2-csvi.png)

Die erste Zeile wird als Überschrift verwendet und dient der Identifikation, um welches [Attribut](../../grundlagen/struktur-it-dokumentation.md) es sich handelt. Jede weitere Zeile entspricht hier einem einzelnen [Objekt](../../glossar.md) in der IT-Dokumentation.

La première ligne est utilisée comme titre et permet d'identifier de quel [attribut](../../bases/structure-it-documentation.md) il s'agit. Chaque ligne supplémentaire correspond ici à un seul [objet](../../glossaire.md) dans la documentation IT.

Sie können auch Ihren bevorzugten Texteditor zum erstellen von csv-Dateien verwenden.

Vous pouvez également utiliser votre éditeur de texte préféré pour créer des fichiers csv.

[![CSV im Texteditor](../../assets/images/de/daten-konsolidieren/csv-import/3-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/3-csvi.png)

[ ![CSV dans l'éditeur de texte](../../assets/images/fr/consolidation des données/csv-import/3-csvi.png)](../../assets/images/fr/consolidation des données/csv-import/3-csvi.png)

Wenn die .csv-Datei soweit vorbereitet ist, kann der Datenimport beginnen.

Lorsque le fichier .csv est prêt, l'importation des données peut commencer.

## Datei hochladen

## Télécharger le fichier

Der CSV-Datenimport befindet sich unter **Extras → CMDB → Import** → **CSV Import**. Eine Konfiguration vorab ist nicht notwendig.

L'importation de données CSV se trouve sous **Extras → CMDB → Import** → **CSV Import**. Une configuration préalable n'est pas nécessaire.

Im ersten Schritt wird eine .csv-Datei über den Button **Durchsuchen…** ausgewählt und hochgeladen. Anschließend wird die Datei in der Liste angezeigt und sobald man mit der Maus über die Zeile der Datei fährt, kann man zwischen den Aktionen **Für Import verwenden**, **Datei herunterladen** und **Datei löschen** wählen.

La première étape consiste à sélectionner un fichier .csv en cliquant sur le bouton **Chercher...** et à le télécharger. Ensuite, le fichier est affiché dans la liste et dès que l'on passe la souris sur la ligne du fichier, on peut choisir entre les actions **Utiliser pour l'importation**, **Télécharger le fichier** et **Supprimer le fichier**.

[![CSV für den Import verwenden](../../assets/images/de/daten-konsolidieren/csv-import/4-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/4-csvi.png)

[ ![Utiliser CSV pour l'importation](../../assets/images/fr/consolidation des données/csv-import/4-csvi.png)](../../assets/images/fr/consolidation des données/csv-import/4-csvi.png)

Um zum nächsten Schritt des Datenimports zu gelangen, klickt man auf den Button **Für Import verwenden**.

Pour passer à l'étape suivante de l'importation des données, il faut cliquer sur le bouton **Utiliser pour l'importation**.

## Optionen festlegen

## Définir les options

Bevor das Mapping zwischen Tabellenspalten und Attributen in i-doit stattfinden kann, sind einige Optionen festzulegen.

Avant que le mapping entre les colonnes du tableau et les attributs ne puisse avoir lieu dans i-doit, certaines options doivent être définies.

[![CSV Import Optionen](../../assets/images/de/daten-konsolidieren/csv-import/5-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/5-csvi.png)

[ ![Options d'importation CSV](../../assets/images/fr/consolidation des données/csv-import/5-csvi.png)](../../assets/images/fr/consolidation des données/csv-import/5-csvi.png)

### Objekttyp

### Type d'objet

Wenn man im Drown-Down-Menü unter **Globaler Objekttyp** einen [Objekttypen](../../grundlagen/struktur-it-dokumentation.md) auswählt, werden alle Objekte der .csv-Datei als dieser Objekttyp importiert. Wird kein globaler Objekttyp definiert, wird ein zusätzliches Feld in der .csv-Datei zur Angabe der [Datenbank-Konstante](../../grundlagen/struktur-it-dokumentation.md) benötigt. Pro Zeile wird dadurch der jeweilige Objekttyp festgelegt, dem das Objekt zugehörig sein soll. Auf diesem Weg ist es möglich, Objekte aus verschiedenen Objekttypen (Client, Drucker, Monitore, ...) über eine Datei zu importieren. Diese Angabe muss für alle Objekte gepflegt werden, wenn kein globaler Objekttyp verwendet wird. Eine Mischform ist nicht möglich.

Si l'on sélectionne un [type d'objet](../../bases/structure-it-documentation.md) dans le menu déroulant sous **Type d'objet global**, tous les objets du fichier .csv seront importés comme ce type d'objet. Si aucun type d'objet global n'est défini, un champ supplémentaire est nécessaire dans le fichier .csv pour indiquer la [constante de la base de données](../../bases/structure-it-documentation.md). Le type d'objet auquel l'objet doit appartenir est ainsi défini par ligne. De cette manière, il est possible d'importer des objets de différents types (clients, imprimantes, moniteurs, ...) via un fichier. Cette indication doit être gérée pour tous les objets si aucun type d'objet global n'est utilisé. Une forme mixte n'est pas possible.

### Trennzeichen, Überschriften und Default-Template berücksichtigen

### Prendre en compte les séparateurs, les en-têtes et le modèle par défaut

Solltest du ein anderes **Trennzeichen** anstelle des Semikolons (;) verwenden, ist es möglich, das genutzte Trennzeichen anzugeben.

Si tu souhaites utiliser un autre **séparateur** au lieu du point-virgule ( ;), il est possible d'indiquer le séparateur utilisé.

Falls du keine Überschriften-Zeile nutzt, kannst du die Überschriften-Zeile deaktivieren, sodass die erste Zeile der .csv-Datei als das erste Objekt interpretiert wird.

Si tu n'utilises pas de ligne d'en-tête, tu peux désactiver la ligne d'en-tête afin que la première ligne du fichier .csv soit interprétée comme le premier objet.

Die Objekte werden mit den Daten aus dem [default Template](../../effizientes-dokumentieren/templates.md) angelegt.

Les objets sont créés avec les données du [modèle par défaut](../../documenter-efficacement/templates.md).

### Leerwerte

### Valeurs vides

Sollen durch den CSV-Datenimport bestehende Objekte aktualisiert werden, kann mit der Option **Leerwerte übernehmen** gewählt werden, wie leere Zellen in der .csv-Datei behandelt werden sollen:

Si des objets existants doivent être mis à jour par l'importation de données CSV, l'option **Reprendre les valeurs vides** permet de choisir comment les cellules vides doivent être traitées dans le fichier .csv :

* **Ja**: Leere Zellen führen dazu, dass bestehende Attribute (falls vorhanden) überschrieben werden.
* **Nein**: Leere Zellen werden ignoriert, damit bestehende Attribute (falls vorhanden) erhalten bleiben.

* **Oui** : Les cellules vides entraînent l'écrasement des attributs existants (s'ils existent).
* **Non** : Les cellules vides sont ignorées afin de conserver les attributs existants (s'ils existent).

### Umgang mit Einträgen in Listen-Kategorien (Multi-Value)

### Gestion des entrées dans les catégories de listes (Multi-Value)

Weiterhin ist anzugeben, in welcher Form [Listen-Kategorien](../../grundlagen/struktur-it-dokumentation.md) (Multi-Value) in der .csv-Datei vorzufinden sind. Falls keine Kategorien dieser Art vom Datenimport berührt werden, können die folgenden Optionen ignoriert werden.

En outre, il faut indiquer sous quelle forme [Catégories de listes](../../grundlagen/struktur-it-dokumentation.md) (Multi-Value) se trouvent dans le fichier .csv. Si aucune catégorie de ce type n'est touchée par l'importation de données, les options suivantes peuvent être ignorées.

Bei dem Beispiel (siehe oben) fällt auf, dass "Client 02" mehrfach auftaucht. Da dieser Client über zwei CPUs verfügt, sollen in der Listen-Kategorie **CPU** zwei Einträge (einer pro CPU) erzeugt werden. Durch die Verwendung einer weiteren **Zeile** erhält das Objekt daher die beiden Einträge in der Kategorie **CPU**. Es ist nicht notwendig, gleichbleibende [Attribute](../../glossar.md) in den weiteren Zeilen des Objekts erneut anzugeben. Somit musst du also nicht die Inventarnummer "ABCD-2000" erneut angeben.

Dans l'exemple (voir ci-dessus), on remarque que le "Client 02" apparaît plusieurs fois. Comme ce client dispose de deux CPU, deux entrées (une par CPU) doivent être créées dans la catégorie de liste **CPU**. En utilisant une autre **ligne**, l'objet obtient donc les deux entrées dans la catégorie **CPU**. Il n'est pas nécessaire d'indiquer à nouveau des [attributs](../../glossaire.md) constants dans les autres lignes de l'objet. Ainsi, tu ne dois pas indiquer à nouveau le numéro d'inventaire "ABCD-2000".

Alternativ ist es dir auch möglich, die einzelnen Einträge aus Listen-Kategorien entweder in einer **Spalte** zu hinterlegen oder in einer Zelle, als **Komma-separierte** Liste.

Il est également possible d'enregistrer les différentes entrées des catégories de listes dans une **colonne** ou dans une cellule, sous forme de liste **séparée par des virgules**.

Sind bereits Kategorie-Einträge vorhanden, stehen weitere Optionen zur Verfügung:

Si des entrées de catégorie existent déjà, d'autres options sont disponibles :

* **Erzeuge neue Kategorieeinträge nur, wenn die Kategorie bisher keine Einträge enthält (neu anlegen, wenn leer)**
* **Erzeuge neue Kategorieeinträge, bestehende bleiben erhalten (anhängen)**
* **Erzeuge neue Kategorieeinträge, bestehende Einträge werden komplett entfernt (ersetzen)**

**Créer de nouvelles entrées de catégorie uniquement si la catégorie ne contient aucune entrée jusqu'à présent (créer une nouvelle entrée si vide)**.
* **Créer de nouvelles entrées de catégorie, les entrées existantes sont conservées (ajouter)**.
* **Crée de nouvelles entrées de catégorie, les entrées existantes sont complètement supprimées (remplacer)**.

Über den Button **Mapping vorbereiten** gelangt man zum nächsten Schritt.

En cliquant sur le bouton **Préparer la cartographie**, on passe à l'étape suivante.

## Identifizierungsmerkmale festlegen

## Définir les caractéristiques d'identification

Sobald die Optionen festgelegt sind, kann das Mapping beginnen. Zunächst kann ein [**Objekt-Matching Profil**](../objekt-identifizieren-bei-importen.md) ausgewählt werden, falls bestehende Objekte aktualisiert werden sollen. Dieses Profil kann nachträglich bearbeitet werden.

Une fois les options définies, le mapping peut commencer. Tout d'abord, il est possible de sélectionner un [**profil de correspondance d'objet**](../objet-identifier-en-important.md) si des objets existants doivent être mis à jour. Ce profil peut être édité ultérieurement.

[![Objekte identifizieren](../../assets/images/de/daten-konsolidieren/csv-import/6-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/6-csvi.png)

[ ![Identifier les objets](../../assets/images/fr/consolider les données/csv-import/6-csvi.png)](../../assets/images/fr/consolider les données/csv-import/6-csvi.png)

## Zuweisung von Spalten zu Attributen

## Affectation des colonnes aux attributs

Jede Spalte erhält im Mapping eine eigene Zeile. So kann jede Zeile der .csv-Datei mit einem Attribut in i-doit verknüpft werden. Nach Klick auf das Stift-Icon kann im Drop-Down-Menü das passende Attribut ausgewählt werden oder dessen Bezeichnung direkt in das Feld eingegeben werden, um passende Attribute vorgeschlagen zu bekommen. Die Eingabe wird mit dem Button **Übernehmen** bestätigt. Auf diesem Weg wird jede Spalte zugewiesen, bis alle Zuweisungen vollständig sind. Zuweisungen können nachträglich gelöst werden. Spalten ohne Zuweisung werden beim Datenimport ignoriert.

Chaque colonne reçoit sa propre ligne dans le mapping. Ainsi, chaque ligne du fichier .csv peut être reliée à un attribut dans i-doit. Après avoir cliqué sur l'icône en forme de crayon, il est possible de sélectionner l'attribut correspondant dans le menu déroulant ou d'entrer directement sa désignation dans le champ pour que des attributs correspondants soient proposés. La saisie est confirmée en cliquant sur le bouton **Appliquer**. De cette manière, chaque colonne est attribuée jusqu'à ce que toutes les attributions soient complètes. Les attributions peuvent être résolues ultérieurement. Les colonnes sans attribution sont ignorées lors de l'importation des données.

[![Zuweisungen von Attributen](../../assets/images/de/daten-konsolidieren/csv-import/7-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/7-csvi.png)

[ ![Attributions d'attributs](../../assets/images/fr/consolidation des données/csv-import/7-csvi.png)](../../assets/images/fr/consolidation des données/csv-import/7-csvi.png)

Pflichtangaben

Données obligatoires

Bei der Angabe von Objekt-Titel _und_ Objekttyp handelt es sich um Pflichtangaben_._ Wenn in den Optionen des Datenimports ein globaler Objekttyp definiert ist, muss im Mapping lediglich der [Objekt-Titel](../objekt-identifizieren-bei-importen.md) mit einer Spalte verknüpft werden. Sollte kein globaler Objekttyp festgelegt sind, muss ebenfalls der Objekttyp in einer Spalte repräsentiert sein. Andernfalls ist es nicht möglich, den Import durchzuführen. Die Angabe des Objekttyps erfolgt über dessen Datenbank-Konstante (zum Beispiel **C__OBJTYPE__SERVER**). Die Angabe der Bezeichnung des Objekttyps (z. B. **Server**) ist **nicht** ausreichend.

Si un type d'objet global est défini dans les options d'importation de données, il suffit de lier le [titre de l'objet](../objet-identifier-en-important.md) à une colonne dans le mappage. Si aucun type d'objet global n'est défini, le type d'objet doit également être représenté dans une colonne. Dans le cas contraire, il n'est pas possible d'effectuer l'importation. Le type d'objet est indiqué par sa constante de base de données (par exemple **C__OBJTYPE__SERVER**). L'indication de la désignation du type d'objet (par exemple **Serveur**) est **non** suffisante.

## Profil anlegen

## Créer un profil

Wenn weitere .csv-Dateien mit identischem Aufbau in Bezug auf die Spaltenbelegung importiert werden sollen oder die aktuell verwendete Datei später aktualisiert und neu importiert werden soll, kann die Konfiguration des aktuellen Mappings Profil gespeichert werden. So vermeidet man wiederkehrende Arbeitsschritte. Ein gespeichertes Profil kann in den Optionen im oberen Bereich ausgewählt und geladen oder gelöscht werden.

Si d'autres fichiers .csv avec une structure identique en termes d'occupation des colonnes doivent être importés ou si le fichier actuellement utilisé doit être mis à jour et réimporté ultérieurement, la configuration du profil de mappage actuel peut être enregistrée. On évite ainsi des étapes de travail répétitives. Un profil enregistré peut être sélectionné et chargé ou supprimé dans les options de la partie supérieure.

Existiert bereits ein passendes Profil, kann es ohne Angabe eines Namens überschrieben werden.

Si un profil correspondant existe déjà, il peut être écrasé sans qu'un nom soit indiqué.

## Datenimport starten

## Démarrer l'importation de données

Den Detailgrad des Loggings des CSV-Datenimports kann unterhalb des Mappings festlegt werden. Je umfangreicher das Logging, desto höher die Dauer und der Ressourcenbedarf des Datenimports. Für mögliches [Troubleshooting](../../administration/troubleshooting/index.md) ist das Loggen von Debug-Meldungen sehr hilfreich.

Le niveau de détail de la journalisation de l'importation des données CSV peut être défini sous le mappage. Plus le logging est détaillé, plus la durée et les ressources nécessaires à l'importation des données sont élevées. Pour un éventuel [Troubleshooting](../../administration/troubleshooting/index.md), la journalisation des messages de débogage est très utile.

Über den Button **Importieren** unterhalb des Mappings wird der Datenimport gestartet. Die Dauer des Datenimports ist abhängig von Umfang der zu importierenden Informationen sowie dem ausgewählten Level des Loggings.

Le bouton **Importer** situé sous le mapping permet de démarrer l'importation des données. La durée de l'importation des données dépend du volume des informations à importer ainsi que du niveau de logging sélectionné.

Nachdem der Import abgeschlossen wurde, werden die Informationen zum Import sowie eine Bestätigung über die Fertigstellung angezeigt. Die importierten oder aktualisierten Objekte sind direkt verlinkt. Die Inhalte dieser Objekte lassen sich bei Bedarf jederzeit manuell ändern.

Une fois l'importation terminée, les informations relatives à l'importation ainsi qu'une confirmation d'achèvement s'affichent. Les objets importés ou mis à jour sont directement liés. Le contenu de ces objets peut être modifié manuellement à tout moment si nécessaire.

[![Liste der importierten Objekte](../../assets/images/de/daten-konsolidieren/csv-import/8-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/8-csvi.png)

[ ![Liste des objets importés](../../assets/images/fr/consolidation des données/csv-import/8-csvi.png)](../../assets/images/fr/consolidation des données/csv-import/8-csvi.png)

## Import von Beziehungen (Verknüpfen von Objekten)

## Importation de relations (relier des objets)

Der CSV-Datenimport ist in der Lage, Verknüpfungen von Objekten ([Beziehungen](../../grundlagen/objekt-beziehungen.md)) zu erzeugen, wenn diese über eine Kategorie gepflegt werden. Das zu verknüpfende Objekt kann ebenfalls in einer Spalte der .csv-Datei hinterlegt und das Feld zur Verknüpfung als zuzuweisendes Attribut angeben werden. Ein Beispiel zur Angabe des physikalischen Standorts in Spalte H:

L'importation de données CSV est en mesure de créer des liens entre des objets ([relations](../../bases/objets-relations.md)) si ceux-ci sont gérés via une catégorie. L'objet à relier peut également être déposé dans une colonne du fichier .csv et le champ pour la liaison peut être indiqué comme attribut à attribuer. Un exemple d'indication de la localisation physique dans la colonne H :

[![Verknüpfen von Beziehungen](../../assets/images/de/daten-konsolidieren/csv-import/9-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/9-csvi.png)

[ ![Relier les relations](../../assets/images/fr/consolider les données/csv-import/9-csvi.png)](../../assets/images/fr/consolider les données/csv-import/9-csvi.png)

Während des Mappings kann man, nachdem das Feld ausgewählt wurde, angeben, ob die Auswahl des zu verknüpfenden Objekts uneingeschränkt erfolgen soll oder eine Eingrenzung auf einen festgelegten Objekttyp stattfindet. Weiterhin können Objekte, die nicht gefunden wurden, automatisch erstellt werden. In diesem Fall ist die Angabe des Objekttyps der verknüpften Objekte notwendig, damit ein Objekt dieses Typs erstellt wird. Bei einigen Verknüpfungsarten kann in der Sonderzuweisung festlegt werden, über welches Attribut die Identifikation des zu verknüpfenden Objekts erfolgen soll. Im Standard wird hier der Objekt-Titel verwendet.

Pendant le mappage, il est possible d'indiquer, après avoir sélectionné le champ, si la sélection de l'objet à relier doit être illimitée ou limitée à un type d'objet défini. En outre, les objets qui n'ont pas été trouvés peuvent être créés automatiquement. Dans ce cas, il est nécessaire d'indiquer le type d'objet des objets liés pour qu'un objet de ce type soit créé. Pour certains types de liens, il est possible de définir dans l'attribution spéciale quel attribut doit être utilisé pour identifier l'objet à lier. Par défaut, c'est le titre de l'objet qui est utilisé ici.

!!! note "Hinweis"
    Die Sonderzuweisung ist nicht bei allen Verknüpfungsfeldern verfügbar. In diesem Fall wird ausschließlich der Objekt-Titel zur Identifikation des zu aktualisierenden Objekts verwendet.

! !! note "Remarque".
    L'attribution spéciale n'est pas disponible pour tous les champs de liaison. Dans ce cas, seul le titre de l'objet est utilisé pour identifier l'objet à mettre à jour.

[![Sonderzuweisung](../../assets/images/de/daten-konsolidieren/csv-import/10-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/10-csvi.png)

[ ![Attribution spéciale](../../assets/images/fr/consolidation des données/csv-import/10-csvi.png)](../../assets/images/fr/consolidation des données/csv-import/10-csvi.png)

## Import von Werten mit Einheiten

## Importation de valeurs avec unités

Einige Attribute beinhalten aus Werten und Einheiten. In den jeweiligen Formularen der Web GUI sind diese jeweils voneinander getrennt anzugeben. Beispielsweise besteht in der Kategorie **Monitor** das Attribut **Display** aus dem Feld für den Wert und aus dem Feld für die Einheit (Zoll, cm, usw.). Um dieses Attribut sinngemäß über den CSV-Datenimport zu importieren, müssen Wert und Einheit zusammen in einer Zelle stehen. Beispiele:

Certains attributs comportent des valeurs et des unités. Dans les formulaires respectifs de la Web GUI, ces attributs doivent être indiqués séparément les uns des autres. Par exemple, dans la catégorie **Monitor**, l'attribut **Display** se compose d'un champ pour la valeur et d'un champ pour l'unité (pouces, cm, etc.). Pour importer cet attribut par analogie via l'importation de données CSV, la valeur et l'unité doivent être placées ensemble dans une cellule. Exemples :

| Kategorie | Attribut | Zuweisung beim CSV-Datenimport | Zelle in CSV-Datei |
| --- | --- | --- | --- |
| **CPU** | **CPU-Frequenz** | **CPU-Frequenz (Einheit)** | 2.5 GHz |
| **Lokaler Massenspeicher → Gerät** | **Kapazität** | **Kapazität (Einheit)** | 4 TB |
| **Monitor** | **Display** | **Display (Einheit)** | 24 Inch |

| Catégorie | Attribut | Attribution lors de l'importation des données CSV | Cellule dans le fichier CSV |
| --- | --- | --- | --- |
| **CPU** | **Fréquence CPU** | **Fréquence CPU (unité)** | 2.5 GHz |
| **Mémoire de masse locale → Périphérique** | **Capacité** | **Capacité (unité)** | 4 TB |
| **Moniteur** | **Affichage** | **Affichage (unité)** | 24 pouces |

## CSV-Dateien über die i-doit Console importieren

## Importer des fichiers CSV via la console i-doit

Der Import von CSV-Dateien ist nicht nur manuell über die Benutzeroberfläche möglich, sondern kann auch mit der i-doit [Console](../../automatisierung-und-integration/cli/console/index.md) umgesetzt werden. Dies erlaubt die Automatisierung des Imports, mit dem regelmäßig Informationen aktualisiert werden können. Eine Beschreibung aller Parameter ist im [entsprechenden Artikel](../../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md#import-csv) inklusive eines Beispiels unter der Option **import-csv** zu finden. Weiterhin kann die ID eines zuvor erstellten Import-Profils im Aufruf angegeben werden. Diese IDs lassen sich mit der Option **import-csvprofiles** auslesen. Die Verwendung dieser Option ist ebenfalls im genannten Artikel beschrieben.

L'importation de fichiers CSV n'est pas seulement possible manuellement via l'interface utilisateur, mais peut également être mise en œuvre avec l'i-doit [Console](../../automatisation-et-intégration/cli/console/index.md). Cela permet d'automatiser l'importation, avec laquelle les informations peuvent être régulièrement mises à jour. Une description de tous les paramètres est disponible dans [l'article correspondant](../../automatisation-et-intégration/cli/console/options-et-paramètres-de-la-console.md#import-csv), y compris un exemple sous l'option **import-csv**. En outre, l'ID d'un profil d'importation créé précédemment peut être indiqué dans l'appel. Ces identifiants peuvent être lus avec l'option **import-csvprofiles**. L'utilisation de cette option est également décrite dans l'article mentionné.