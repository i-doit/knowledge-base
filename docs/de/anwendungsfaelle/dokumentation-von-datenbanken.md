Mit der Version 1.xx von i-doit haben wir eine zusätzliche Variante mit aufgenommen die genutzt werden kann um Datenbanken innerhalb von i-doit zu dokumentieren.

Die beiden Modelle unterscheiden sich darin das wir beim alten Modell die folgenden drei Objekttypen vorgesehen hatten:

![](/download/thumbnails/82576169/image2020-3-20_11-7-37.png?version=1&modificationDate=1584699069871&api=v2)  
  

**DBMS** - dieser Objekttyp entspricht dem der normalen Anwendungen, wir können hier festlegen welche Datenbank Software im Unternehmen vorhanden ist.

**Datenbankinstanz** - dieser Objekttyp zeigt wo die einzelnen DBMS installiert sind und welche Instanzen dort vorhanden sind.

**Datenbankschema** - dieser Objekttyp zeigt die jeweiligen Datenbanken die innerhalb der einzelnen Instanzen definiert wurden.

  

Am Beispiel von i-doit wäre hier MariaDB das DBMS, die Installation auf dem i-doit Server die Instanz und die idoit\_system und i-doit\_data wären die Datenbankschema.

Im neuen Modell gehen wir hier einen etwas anderen Weg. Das Objekt DBMS behalten wir bei, ergänzen aber in der Listenansicht der  Kategorie DBMS - Datenbank Installation den Reiter Zugewiesene Datenbanken. Hierdurch ist direkt am DBMS Objekt ersichtlich welche Datenbanken durch die jeweilige Datenbank Software bereitgestellt wird. Um beim Beispiel von i-doit zu bleiben würde hier dann innerhalb des MariaDB DBMS Obketes die Installation auf dem jeweiligen Server und die Datenbanken idoit\_data und idoit\_system angezeigt.

  

Im neuen Modell entfallen die Objekttypen Datenbankschema und Datenbankinstanz und werden durch eine neue Kategorie Datenbanken ersetzt. Die Idee ist hier Datenbanken dort zu dokumentieren wo sie ausgeführt werden. Läuft also eine Datenbank auf einem Server, weisen wir dort die Kategorie zu und pflegen Sie direkt an der Ressource. Läuft die Datenbank auf einem Cluster, weisen wir die Kategorie den Cluster Objekten zu und dokumentieren dort.

Die neue Kategorie bietet eine neu Ansicht der Datenbank Hierarchie die aufgeklappt werden kann:

![](/download/attachments/82576169/image2020-3-20_11-9-11.png?version=1&modificationDate=1584699069860&api=v2)

Unterhalb von _Datenbanken -> Datenbanken_ können wir jetzt die jeweiligen Datenbanken dokumentieren die auf der Ressource laufen:

![](/download/attachments/82576169/image2020-3-20_11-9-46.png?version=1&modificationDate=1584699069816&api=v2)

Unterhalb von _Datenbanken -> DBMS_ sehen wir die Verbindung zum jeweiligen DBMS Objekt zu dem der Server eine Beziehung besitzt.

![](/download/attachments/82576169/image2020-3-20_11-10-15.png?version=1&modificationDate=1584699069799&api=v2)

  
  
**Migration von vorhandener Datenbank Dokumentation in das neue Modell**

Du selber kannst entscheiden welche Art der Datenbank Dokumentation besser für deine Anforderungen geeignet ist. Willst du aus dem alten Modell in das neue wechseln bieten wir hierfür eine Moderationsfunktion die du in der Verwaltung unter Systemtools -> Cache Datenbank findest:

![](/download/attachments/82576169/image2020-3-20_11-10-52.png?version=1&modificationDate=1584699069778&api=v2)  
Nach dem anklicken bekommst du noch einmal eine Meldung über die Auswirkung der Migration:

![](/download/thumbnails/82576169/image2020-3-20_11-13-53.png?version=1&modificationDate=1584699233781&api=v2)

Und nach Abschluss erscheint eine Meldung ob die Migration erfolgreich war:

![](/download/thumbnails/82576169/image2020-3-20_11-14-22.png?version=1&modificationDate=1584699262258&api=v2)