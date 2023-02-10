# Standort kann nicht gespeichert werden
Problem
-------

In der Kategorie **Standort** erscheint beim Speichern eine Fehlermeldung:

    Error!

    CMDB Error: Database error : Query error: 'UPDATE isys_catg_location_list SET isys_catg_location_list__rgt = isys_catg_location_list__rgt + -4294967294 WHERE isys_catg_location_list__rgt > -1': BIGINT UNSIGNED value is out of range in '(idoit_data.isys_catg_location_list.isys_catg_location_list__rgt + -(4294967294))'

[![Problem](../../assets/images/de/administration/troubleshooting/standort-kann-nicht-gespeichert-werden/1-skngw.png)](../../assets/images/de/administration/troubleshooting/standort-kann-nicht-gespeichert-werden/1-skngw.png)

Der genaue Wortlaut der Fehlermeldung kann abweichen. Das Resultat ist allerdings immer gleich: Die Standortzuweisung wird nicht gespeichert.

Lösung
------

Das Problem kann dadurch verursacht werden, wenn sehr viele Standortzuweisungen durch einen Automatismus (beispielsweise durch einen [Datenimport](../../daten-konsolidieren/index.md)) erstellt werden. Die Lösung besteht darin unter **Verwaltung → Systemtools → Cache / Datenbank → Datenbank** den Button **Standortkorrektur** zu klicken. Danach ist das Erstellen und Ändern von Standortzuweisungen wieder problemlos möglich.

[![Lösung](../../assets/images/de/administration/troubleshooting/standort-kann-nicht-gespeichert-werden/2-skngw.png)](../../assets/images/de/administration/troubleshooting/standort-kann-nicht-gespeichert-werden/2-skngw.png)