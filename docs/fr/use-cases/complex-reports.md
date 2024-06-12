# Rapports Complexes {/examples}

Vous pouvez générer de nombreux rapports utiles avec le générateur de requêtes du gestionnaire de rapports. Pour des cas plus complexes, vous pouvez également modifier le SQL derrière celui-ci et ainsi utiliser des fonctions MySQL ou MariaDB, par exemple, pour interroger des intervalles de temps.

Préparation
-----------

Les connaissances requises autour du [Reporting](../evaluation/report-manager.md) et de la [structure de la base de données d'i-doit](../software-development/database-model/index.md) peuvent être trouvées dans les articles respectifs. Une bonne connaissance de SQL ou des fonctions SQL fournies par MySQL/MariaDB est clairement un avantage.

Intervalles de Temps
--------------

Souvent, un rapport est nécessaire pour fournir des informations sur un certain intervalle de temps. i-doit fournit déjà les champs requis avec des spécifications de date, par exemple, quand un [objet](../basics/structure-of-the-it-documentation.md) a été modifié la dernière fois ou quand un contrat de maintenance expire. Le générateur de requêtes du gestionnaire de rapports peut adresser ces champs mais seulement avec des spécifications de date fixes : Quels objets ont été modifiés depuis le 2016-01-01 ? Cependant, souvent la date doit être en relation avec le temps actuel : Quels objets ont été modifiés ce mois-ci ? Vous ne spécifiez pas le mois mais il est supposé que le mois pendant lequel le rapport est exécuté est le mois en question.

Pour générer un tel rapport, nous créons d'abord un nouveau rapport avec le générateur de requêtes. Pour la requête, nous ajoutons, par exemple, le [titre de l'objet](../basics/unique-references.md), le [type d'objet](../basics/structure-of-the-it-documentation.md), la date de la dernière modification et le nom de la personne ayant effectué la modification.

[![rapports-complexes](../assets/images/en/use-cases/complexe-reports/1-cr.png)](../assets/images/en/use-cases/complexe-reports/1-cr.png)

Nous enregistrons ce rapport, puis nous le dupliquons et nommons la copie avec un nom significatif, par exemple "Objets modifiés de ce mois".

!!! info "Modification SQL"

    Nous dupliquons le rapport car il ne peut plus être ouvert avec le générateur de requêtes une fois que le SQL a été modifié.

Ensuite, nous modifions la copie avec l'éditeur SQL et étendons la clause WHERE :

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

Pour restreindre l'intervalle de temps à _ce_ mois, nous utilisons les fonctions SQL `NOW()`, `YEAR()` et `MONTH()`. Elles sont appliquées à la date de modification enregistrée dans la colonne de table `bj_main.isys_obj__updated`. De plus, nous excluons tous les [objets de relation](../basics/object-relations.md) avec `j2.isys_obj_type__const != 'C__OBJTYPE__RELATION'`.

Vous pouvez trouver [cet exemple et d'autres concernant la requête des intervalles de temps](http://stackoverflow.com/questions/5293189/select-records-from-today-this-week-this-month-php-mysql) sur le site web Stackoverflow.
