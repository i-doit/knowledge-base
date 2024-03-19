<!-- TRANSLATED by md-translate -->
# Standort kann nicht gespeichert werden

# L'emplacement ne peut pas être enregistré

## Problem

## problème

In der Kategorie **Standort** erscheint beim Speichern eine Fehlermeldung:

Dans la catégorie **Lieu**, un message d'erreur apparaît lors de l'enregistrement :

```
Error!

    CMDB Error: Database error : Query error: 'UPDATE isys_catg_location_list SET isys_catg_location_list__rgt = isys_catg_location_list__rgt + -4294967294 WHERE isys_catg_location_list__rgt > -1': BIGINT UNSIGNED value is out of range in '(idoit_data.isys_catg_location_list.isys_catg_location_list__rgt + -(4294967294))'
```

[![Problem](../../assets/images/de/administration/troubleshooting/standort-kann-nicht-gespeichert-werden/1-skngw.png)](../../assets/images/de/administration/troubleshooting/standort-kann-nicht-gespeichert-werden/1-skngw.png)

[ ![Problème](../../assets/images/fr/administration/troubleshooting/site-ne-peut-pas-être-sauvé/1-skngw.png)](../../assets/images/fr/administration/troubleshooting/site-peut-pas-être-sauvé/1-skngw.png)

Der genaue Wortlaut der Fehlermeldung kann abweichen. Das Resultat ist allerdings immer gleich: Die Standortzuweisung wird nicht gespeichert.

Le libellé exact du message d'erreur peut varier. Cependant, le résultat est toujours le même : l'attribution du site n'est pas enregistrée.

## Lösung

## solution

Das Problem kann dadurch verursacht werden, wenn sehr viele Standortzuweisungen durch einen Automatismus (beispielsweise durch einen [Datenimport](../../daten-konsolidieren/index.md)) erstellt werden. Die Lösung besteht darin unter **Verwaltung → Systemtools → Cache / Datenbank → Datenbank** den Button **Standortkorrektur** zu klicken. Danach ist das Erstellen und Ändern von Standortzuweisungen wieder problemlos möglich.

Le problème peut être causé par la création d'un grand nombre d'attributions de sites par un automatisme (par exemple par une [importation de données](../../consolidation de données/index.md)). La solution consiste à cliquer sur le bouton **Correction d'emplacement** sous **Administration → Outils système → Cache / Base de données → Base de données**. Ensuite, la création et la modification des attributions de sites sont à nouveau possibles sans problème.

[![Lösung](../../assets/images/de/administration/troubleshooting/standort-kann-nicht-gespeichert-werden/2-skngw.png)](../../assets/images/de/administration/troubleshooting/standort-kann-nicht-gespeichert-werden/2-skngw.png)

[ ![Solution](../../assets/images/fr/administration/troubleshooting/site-ne-peut-pas-être-sauvé/2-skngw.png)](../../assets/images/fr/administration/troubleshooting/site-ne-peut-pas-être-sauvé/2-skngw.png)