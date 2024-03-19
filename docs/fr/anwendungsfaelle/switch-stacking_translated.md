<!-- TRANSLATED by md-translate -->
# Switch Stacking

# Switch Stacking

Mit dem [Objekttypen](../glossar.md) **Stacking** ist es möglich, einen Stack-Verbund mit mehreren Mitgliedern zu definieren, die Informationen untereinander austauschen. Auch wenn Stacking für unterschiedliche Objekttypen genutzt werden kann, ist der ursprüngliche Gedanke für diesen Objekttypen und die dazugehörige [Kategorie](../glossar.md) **Stack Mitglieder** auf Switch Stacking zurückzuführen. Der Objekttyp ist ab Version 1.7 unter der [Objekttypgruppe](../glossar.md) **Andere** zu finden.

Avec le [type d'objet](../glossar.md) **Stacking**, il est possible de définir une association de pile avec plusieurs membres qui échangent des informations entre eux. Même si l'empilement peut être utilisé pour différents types d'objets, l'idée initiale de ce type d'objet et de la [catégorie](../glossar.md) **membres de la pile** qui lui est associée est due à l'empilement de switch. Depuis la version 1.7, ce type d'objet se trouve sous le [groupe de types d'objets](../glossar.md) **Autres**.

## Stack-Mitglieder

## Membres de la pile

In der für das Stacking geschaffenen Kategorie **Stack Mitglieder** können [Objekte](../glossar.md) als Mitglieder des Stacks hinzugefügt und als "Aktiv" oder "Passiv" gekennzeichnet werden. In der Dokumentation hat diese Kennzeichnung keine weitere Auswirkung außer der entsprechenden Anzeige.

Dans la catégorie **Membres de la pile** créée pour le stacking, il est possible d'ajouter des [objets](../glossar.md) comme membres de la pile et de les marquer comme "actifs" ou "passifs". Dans la documentation, ce marquage n'a pas d'autre effet que l'affichage correspondant.

[![Stack-Mitglieder](../assets/images/de/anwendungsfaelle/switch-stacking/1-sws.png)](../assets/images/de/anwendungsfaelle/switch-stacking/1-sws.png)

[ ![Membres de la pile](../assets/images/fr/applicationfaelle/switch-stacking/1-sws.png)](../assets/images/fr/applicationfaelle/switch-stacking/1-sws.png)

[![Stack-Mitglieder](../assets/images/de/anwendungsfaelle/switch-stacking/2-sws.png)](../assets/images/de/anwendungsfaelle/switch-stacking/2-sws.png)

[ ![Membres de la pile](../assets/images/fr/applicationfaelle/switch-stacking/2-sws.png)](../assets/images/fr/applicationfaelle/switch-stacking/2-sws.png)

## Logische Ports

## Ports logiques

Wird ein logischer Port in einem der Stack-Mitglieder angelegt, erscheint dieser nun auch bei den anderen Stack-Mitgliedern unter den logischen Ports.

Si un port logique est créé dans l'un des membres de la pile, il apparaît désormais également dans les ports logiques des autres membres de la pile.

[![Logische Ports](../assets/images/de/anwendungsfaelle/switch-stacking/3-sws.png)](../assets/images/de/anwendungsfaelle/switch-stacking/3-sws.png)

[ ![Ports logiques](../assets/images/fr/applicationfaelle/switch-stacking/3-sws.png)](../assets/images/fr/applicationfaelle/switch-stacking/3-sws.png)

Zudem kann der logische Port eines anderen Stack-Mitglieds als Eltern-Port eines Ports zugewiesen werden.

De plus, le port logique d'un autre membre de la pile peut être attribué comme port parent d'un port.

[![Logische Ports](../assets/images/de/anwendungsfaelle/switch-stacking/4-sws.png)](../assets/images/de/anwendungsfaelle/switch-stacking/4-sws.png)

[ ![Ports logiques](../assets/images/fr/applicationfaelle/switch-stacking/4-sws.png)](../assets/images/fr/applicationfaelle/switch-stacking/4-sws.png)