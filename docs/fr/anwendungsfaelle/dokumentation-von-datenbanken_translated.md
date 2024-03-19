<!-- TRANSLATED by md-translate -->
# Dokumentieren von Datenbanken

# Documenter les bases de données

Mit der Version 1.xx von i-doit haben wir eine zusätzliche Variante mit aufgenommen die genutzt werden kann um Datenbanken innerhalb von i-doit zu dokumentieren.

Avec la version 1.xx d'i-doit, nous avons ajouté une variante supplémentaire qui peut être utilisée pour documenter les bases de données dans i-doit.

Die beiden Modelle unterscheiden sich darin das wir beim alten Modell die folgenden drei Objekttypen vorgesehen hatten:

Les deux modèles se distinguent par le fait que nous avions prévu les trois types d'objets suivants dans l'ancien modèle :

[![DBMS](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/1-dvd.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/1-dvd.png)

[ ![DBMS](../assets/images/fr/anwendungsfaelle/dokumentation-von-datenbanken/1-dvd.png)](../assets/images/fr/anwendungsfaelle/dokumentation-von-datenbanken/1-dvd.png)

**DBMS** - dieser Objekttyp entspricht dem der normalen Anwendungen, wir können hier festlegen welche Datenbank Software im Unternehmen vorhanden ist.

**DBMS** - ce type d'objet correspond à celui des applications normales, nous pouvons définir ici quel logiciel de base de données est présent dans l'entreprise.

**Datenbankinstanz** - dieser Objekttyp zeigt wo die einzelnen DBMS installiert sind und welche Instanzen dort vorhanden sind.

**Instance de base de données** - ce type d'objet indique où sont installés les différents SGBD et quelles instances y sont présentes.

**Datenbankschema** - dieser Objekttyp zeigt die jeweiligen Datenbanken die innerhalb der einzelnen Instanzen definiert wurden.

**Schéma de base de données** - ce type d'objet montre les bases de données respectives qui ont été définies au sein de chaque instance.

Am Beispiel von i-doit wäre hier MariaDB das DBMS, die Installation auf dem i-doit Server die Instanz und die idoit_system und i-doit_data wären die Datenbankschema.

Dans l'exemple d'i-doit, MariaDB serait ici le SGBD, l'installation sur le serveur i-doit l'instance et les idoit_system et i-doit_data seraient les schémas de base de données.

Im neuen Modell gehen wir hier einen etwas anderen Weg. Das Objekt DBMS behalten wir bei, ergänzen aber in der Listenansicht der Kategorie DBMS - Datenbank Installation den Reiter Zugewiesene Datenbanken. Hierdurch ist direkt am DBMS Objekt ersichtlich welche Datenbanken durch die jeweilige Datenbank Software bereitgestellt wird. Um beim Beispiel von i-doit zu bleiben würde hier dann innerhalb des MariaDB DBMS Obketes die Installation auf dem jeweiligen Server und die Datenbanken idoit_data und idoit_system angezeigt.

Dans le nouveau modèle, nous adoptons une approche légèrement différente. Nous conservons l'objet SGBD, mais ajoutons l'onglet Bases de données attribuées dans la liste de la catégorie SGBD - Installation de base de données. Ainsi, il est possible de voir directement sur l'objet SGBD quelles sont les bases de données mises à disposition par le logiciel de base de données concerné. Pour reprendre l'exemple d'i-doit, l'installation sur le serveur correspondant et les bases de données idoit_data et idoit_system sont affichées dans l'Object SGBD MariaDB.

Im neuen Modell entfallen die Objekttypen Datenbankschema und Datenbankinstanz und werden durch eine neue Kategorie Datenbanken ersetzt. Die Idee ist hier Datenbanken dort zu dokumentieren wo sie ausgeführt werden. Läuft also eine Datenbank auf einem Server, weisen wir dort die Kategorie zu und pflegen Sie direkt an der Ressource. Läuft die Datenbank auf einem Cluster, weisen wir die Kategorie den Cluster Objekten zu und dokumentieren dort.

Dans le nouveau modèle, les types d'objets schéma de base de données et instance de base de données sont supprimés et remplacés par une nouvelle catégorie de bases de données. L'idée est ici de documenter les bases de données là où elles sont exécutées. Ainsi, si une base de données est exécutée sur un serveur, nous y attribuons la catégorie et la gérons directement au niveau de la ressource. Si la base de données fonctionne sur un cluster, nous attribuons la catégorie aux objets du cluster et la documentons à cet endroit.

Die neue Kategorie bietet eine neu Ansicht der Datenbank Hierarchie die aufgeklappt werden kann:

La nouvelle catégorie offre une nouvelle vue de la hiérarchie de la base de données qui peut être développée :

[![Datenbanken](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/2-dvd.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/2-dvd.png)

[ ![Bases de données](../assets/images/fr/anwendungsfaelle/dokumentation-von-datenbanken/2-dvd.png)](../assets/images/fr/anwendungsfaelle/dokumentation-von-datenbanken/2-dvd.png)

Unterhalb von _Datenbanken -> Datenbanken_ können wir jetzt die jeweiligen Datenbanken dokumentieren die auf der Ressource laufen:

En dessous de _Bases de données -> Bases de données_, nous pouvons maintenant documenter les bases de données respectives qui fonctionnent sur la ressource :

[![Datenbanken](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/3-dvd.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/3-dvd.png)

[ ![Bases de données](../assets/images/fr/anwendungsfaelle/dokumentation-von-datenbanken/3-dvd.png)](../assets/images/fr/anwendungsfaelle/dokumentation-von-datenbanken/3-dvd.png)

Unterhalb von _Datenbanken -> DBMS_ sehen wir die Verbindung zum jeweiligen DBMS Objekt zu dem der Server eine Beziehung besitzt.

En dessous de _Bases de données -> SGBD_, nous voyons la connexion à l'objet SGBD respectif avec lequel le serveur a une relation.

[![DBMS](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/4-dvd.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/4-dvd.png)

[ ![DBMS](../assets/images/fr/anwendungsfaelle/dokumentation-von-datenbanken/4-dvd.png)](../assets/images/fr/anwendungsfaelle/dokumentation-von-datenbanken/4-dvd.png)

**Migration von vorhandener Datenbank Dokumentation in das neue Modell**

**Migration de la documentation existante de la base de données vers le nouveau modèle**.

Du selber kannst entscheiden welche Art der Datenbank Dokumentation besser für deine Anforderungen geeignet ist. Willst du aus dem alten Modell in das neue wechseln bieten wir hierfür eine Moderationsfunktion die du in der Verwaltung unter Systemtools -> Cache Datenbank findest:

Tu peux décider toi-même quel type de documentation de base de données est le mieux adapté à tes besoins. Si tu veux passer de l'ancien modèle au nouveau, nous te proposons une fonction de modération que tu trouveras dans l'administration sous Outils système -> Base de données Cache :

[![Cache / Datenbanken](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/5-dvd.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/5-dvd.png)

[ ![Cache / Bases de données](../assets/images/fr/anwendungsfaelle/dokumentation-von-datenbanken/5-dvd.png)](../assets/images/fr/anwendungsfaelle/dokumentation-von-datenbanken/5-dvd.png)

Nach dem anklicken bekommst du noch einmal eine Meldung über die Auswirkung der Migration:

Après avoir cliqué sur ce bouton, tu reçois à nouveau un message sur l'effet de la migration :

[![Migration](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/6-dvd.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/6-dvd.png)

[ ![Migration](../assets/images/fr/anwendungsfaelle/dokumentation-von-datenbanken/6-dvd.png)](../assets/images/fr/anwendungsfaelle/dokumentation-von-datenbanken/6-dvd.png)

Und nach Abschluss erscheint eine Meldung ob die Migration erfolgreich war:

Et une fois la migration terminée, un message apparaît pour indiquer si elle a été effectuée avec succès :

[![Systemansicht](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/7-dvd.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/7-dvd.png)

[ ![Vue du système](../assets/images/fr/anwendungsfaelle/dokumentation-von-datenbanken/7-dvd.png)](../assets/images/fr/anwendungsfaelle/dokumentation-von-datenbanken/7-dvd.png)