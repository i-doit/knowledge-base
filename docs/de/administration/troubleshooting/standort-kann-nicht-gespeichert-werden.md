Problem
-------

In der Kategorie `**Standort**` erscheint beim Speichern eine Fehlermeldung:

[?](#)

`Error!`

`CMDB Error: Database error : Query error:` `'UPDATE isys_catg_location_list SET isys_catg_location_list__rgt = isys_catg_location_list__rgt + -4294967294 WHERE isys_catg_location_list__rgt > -1'``: BIGINT UNSIGNED value is out of range` `in` ``'(`idoit_data`.`isys_catg_location_list`.`isys_catg_location_list__rgt` + -(4294967294))'``

![](/download/attachments/30834721/standortkorrektur_fehler.png?version=2&modificationDate=1459848993608&api=v2&effects=drop-shadow)

Der genaue Wortlaut der Fehlermeldung kann abweichen. Das Resultat ist allerdings immer gleich: Die Standortzuweisung wird nicht gespeichert.

Lösung
------

Das Problem kann dadurch verursacht werden, wenn sehr viele Standortzuweisungen durch einen Automatismus (beispielsweise durch einen [Datenimport](/display/de/Daten+konsolidieren)) erstellt werden. Die Lösung besteht darin unter **`Verwaltung → Systemtools → Cache / Datenbank → Datenbank`** den Button `**Standortkorrektur**` zu klicken. Danach ist das Erstellen und Ändern von Standortzuweisungen wieder problemlos möglich.

![](/download/attachments/30834721/standortkorrektur_button.png?version=1&modificationDate=1459848993575&api=v2&effects=drop-shadow)