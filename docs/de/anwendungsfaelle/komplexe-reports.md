# Komplexe Reports

Im Report Manager lassen sich über den Abfrage-Editor bereits viele, nützliche Reports generieren. Für komplexere Fälle kann das dahinter liegende SQL bearbeitet werden. Hierbei lassen sich MySQL-/MariaDB-eigene Funktionen nutzen, um beispielsweise Zeitintervalle abzufragen.

Vorbereitung
------------

Das erforderliche Wissen rund ums [Reporting](../auswertungen/report-manager.md) mit und die [Datenbank-Struktur von i-doit](../software-entwicklung/datenbank-modell/index.md) befindet sich bereits in den entsprechenden Artikeln. Gute Kenntnisse in SQL beziehungsweise in SQL-Funktionen, die MySQL/MariaDB bieten, sind klar von Vorteil.

Zeitintervalle
--------------

Eine häufige Anforderung an einen Report ist, sich über einen bestimmten Zeitraum zu informieren. i-doit bringt hierzu bereits nötige Felder mit Datumsangaben mit, beispielsweise wann ein [Objekt](../grundlagen/struktur-it-dokumentation.md) zuletzt geändert wurde oder wann ein Wartungsvertrag ausläuft. Der Abfrage-Editor im Report Manager kann diese Felder zwar adressieren, aber nur mit festen Datumsangaben: Welche Objekte wurden seit dem 01.01.2016 geändert? Allerdings soll das Datum häufig in Relation zum jetzigen Zeitpunkt stehen: Welche Objekte wurden in diesem Monat geändert? Dabei wird nicht festgelegt, welcher Monat gemeint ist, sondern derjenige Monat, in dem der Report ausgeführt wird, wird angenommen.

Um so einen Report zu generieren, erstellen wir zunächst einen neuen Report mit dem Abfrage-Editor. Zur Ausgabe fügen wir beispielsweise [Objekt-Titel](../grundlagen/eindeutige-referenzierungen.md), [Objekttyp](../grundlagen/struktur-it-dokumentation.md), Datum der letzten Änderung und den Namen der bearbeitenden Person hinzu.

[![Abfrage Editor](../assets/images/de/anwendungsfaelle/komplexe-reports/report_changes_abfrage-editor.png)](../assets/images/de/anwendungsfaelle/komplexe-reports/report_changes_abfrage-editor.png)

Diesen Report speichern wir ab. Anschließend duplizieren wir ihn und geben dem Duplikat einen aussagekräftigen Namen wie "Geänderte Objekte in diesem Monat".

!!! info "SQL nachbearbeiten"

    Wir duplizieren den Report, weil er sich nicht mehr mit dem Abfrage-Editor öffnen lässt, nachdem das SQL bearbeitet worden ist.

Das Duplikat bearbeiten wir anschließend mit dem SQL-Editor und erweitern die WHERE\-Klausel:

```sql
    SELECT
    obj_main.isys_obj__id AS '__id__',
    obj_main.isys_obj__title AS 'LC__UNIVERSAL__TITLE###1',
    j2.isys_obj_type__title AS 'LC__REPORT__FORM__OBJECT_TYPE###1',
    obj_main.isys_obj__updated AS 'isys_cmdb_dao_category_g_global::dynamic_property_callback_changed::isys_obj__updated::LC__CMDB__LAST_CHANGE',
    obj_main.isys_obj__updated_by AS 'LC__CMDB__LAST_CHANGE_BY###1'

    FROM isys_obj AS obj_main
    INNER JOIN isys_cmdb_status AS obj_main_status ON obj_main_status.isys_cmdb_status__id = obj_main.isys_obj__isys_cmdb_status__id
    LEFT JOIN isys_obj_type AS j2 ON j2.isys_obj_type__id = obj_main.isys_obj__isys_obj_type__id
    LEFT JOIN isys_catg_global_list AS j3 ON j3.isys_catg_global_list__isys_obj__id = obj_main.isys_obj__id

    WHERE j2.isys_obj_type__const != 'C__OBJTYPE__RELATION' AND
    YEAR(obj_main.isys_obj__updated) = YEAR(NOW()) AND MONTH(obj_main.isys_obj__updated) = MONTH(NOW());
```

Um _diesen_ Monat als Zeitintervall einzugrenzen, verwenden wir die SQL-Funktionen NOW(), YEAR() und MONTH(). Diese wenden wir auf das Änderungsdatum an, das in der Tabellen-Spalte obj_main.isys_obj__updated gespeichert wird. Zusätzlich schließen wir mit j2.isys_obj_type__const != 'C__OBJTYPE__RELATION' alle [Beziehungsobjekte](../grundlagen/objekt-beziehungen.md) aus.

[Dieses und weitere Beispiele, um Zeitintervalle abzufragen](http://stackoverflow.com/questions/5293189/select-records-from-today-this-week-this-month-php-mysql), bietet beispielsweise diese Frage bei Stackoverflow.
