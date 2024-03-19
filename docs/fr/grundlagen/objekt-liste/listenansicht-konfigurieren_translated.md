<!-- TRANSLATED by md-translate -->
# Listenansicht Konfigurieren

# Configurer la vue en liste

Die Ansicht der [Objekt-Listen](index.md) kann pro Liste und pro Benutzer individuell konfiguriert werden.

L'affichage des [listes d'objets](index.md) peut être configuré individuellement par liste et par utilisateur.

## Konfiguration aufrufen

## Appeler la configuration

Die Konfiguration der jeweiligen Objekt-liste wird über den Button [![systemeinstellungen](../../assets/images/de/grundlagen/listenansicht-konfigurieren/1-lk.png)](../../assets/images/de/grundlagen/listenansicht-konfigurieren/1-lk.png) in der [Navigations- und Filterleiste](navigieren-und-filtern.md) erreicht. Alternativ ist der Weg über **Verwaltung → Benutzereinstellungen → Objekt-Listen → [Objekttyp]**.

La configuration de chaque liste d'objets est accessible via le bouton [ ![réglages système](../../assets/images/fr/bases/configurer l'affichage des listes/1-lk.png)](../../assets/images/fr/bases/configurer l'affichage des listes/1-lk.png) dans la [barre de navigation et de filtrage](naviguer-et-filtrer.md). Une autre solution consiste à passer par **Administration → Préférences utilisateur → Listes d'objets → [Type d'objet]**.

[![objekt-listen](../../assets/images/de/grundlagen/listenansicht-konfigurieren/2-lk.png)](../../assets/images/de/grundlagen/listenansicht-konfigurieren/2-lk.png)

[ ![listes d'objets](../../assets/images/fr/bases/configuration de la vue en liste/2-lk.png)](../../assets/images/fr/bases/configuration de la vue en liste/2-lk.png)

## Attribute auswählen

## Sélectionner les attributs

Ähnlich wie beim [Report Manager](../../auswertungen/report-manager.md) werden über die Auswahl der Kategorie und dem dort enthaltenen Attribut die Spalten definiert.

Comme pour le [Report Manager](../../auswertungen/report-manager.md), les colonnes sont définies par la sélection de la catégorie et l'attribut qu'elle contient.

Zuerst wird eine [globale, spezifische](../struktur-it-dokumentation.md) oder [benutzerdefinierte](../benutzerdefinierte-kategorien.md) Kategorie im Drop-Down-Menü ausgewählt. Über ein Textfeld lässt sich die Liste der Kategorien filtern.

Tout d'abord, une catégorie [globale, spécifique](../structure-it-documentation.md) ou [personnalisée](../catégories-personnalisées.md) est sélectionnée dans le menu déroulant. Un champ de texte permet de filtrer la liste des catégories.

Bei Auswahl einer Kategorie erscheinen diejenigen Attribute, die sich als Spalte definieren lassen. Bei Klick auf den Button [![plus](../../assets/images/de/grundlagen/listenansicht-konfigurieren/3-lk.png)](../../assets/images/de/grundlagen/listenansicht-konfigurieren/3-lk.png) wird das Attribut zu den gewählten Attributen hinzugefügt.

En sélectionnant une catégorie, les attributs qui peuvent être définis comme colonne apparaissent. En cliquant sur le bouton [ ![plus](../../assets/images/fr/bases/configurer-list-view/3-lk.png)](../../assets/images/fr/bases/configurer-list-view/3-lk.png), l'attribut est ajouté aux attributs sélectionnés.

Die Liste der gewählten Attribute lässt sich manipulieren. Per Drag'n'Drop ist die Reihenfolge zu beeinflussen. Je höher das Attribut in der Auswahl, desto weiter links wird es in der Objekt-Liste dargestellt. Über den Button [![delete](../../assets/images/de/grundlagen/listenansicht-konfigurieren/4-lk.png)](../../assets/images/de/grundlagen/listenansicht-konfigurieren/4-lk.png) wird ein Attribut entfernt.

La liste des attributs sélectionnés peut être manipulée. L'ordre peut être modifié par glisser-déposer. Plus l'attribut est haut dans la sélection, plus il est représenté à gauche dans la liste des objets. Le bouton [ ![delete](../../assets/images/fr/bases/configuration de la vue en liste/4-lk.png)](../../assets/images/fr/bases/configuration de la vue en liste/4-lk.png) permet de supprimer un attribut.

!!! info "Einschränkungen"

! !! info "Restrictions

```
Für die Auswahl von Attributen gelten folgende Einschränkungen:

*   Es stehen nicht alle Attribute aller Kategorien zur Verfügung.
*   Die Anzahl an Attributen ist auf **10** beschränkt.
```

Attribute, die aus [Listen-Kategorien (Multi-Value)](../struktur-it-dokumentation.md) stammen, können unterschiedlich dargestellt werden. Über das Drop-Down-Menü **Gruppierte Daten darstellen als** können die Attribute entweder komma-separiert nebeneinander oder als Liste untereinander dargestellt werden. Beispiel hierfür ist das Attribut **Hostadressen** der Kategorie **Hostadresse**.

Les attributs provenant de [Catégories de listes (multi-valeurs)](../structure-it-documentation.md) peuvent être représentés de différentes manières. Grâce au menu déroulant **Représenter les données groupées sous**, les attributs peuvent être représentés soit séparés par des virgules les uns à côté des autres, soit sous forme de liste les uns en dessous des autres. L'attribut **Adresses d'hôtes** de la catégorie **Adresses d'hôtes** en est un exemple.

!!! success "Tipp"

! !! success "tuyau"

```
In der Standard-Installation von i-doit wird in jeder Objekt-Liste die [ID](../eindeutige-referenzierungen.md) angezeigt. Da diese für den normalen Gebrauch keine Rolle spielt, kann die entsprechende Spalte aus den Listen entfernt werden. Dies fördert zudem die Übersichtlichkeit.
```

!!! info "Performance"

! !! info "Performance

```
Objektlisten mit einer großen Anzahl an Attributen können zu einer verringerten Performance führen. Sollten Leistungseinbußen festgestellt werden, sollte die Anzahl der ausgewählten Attribute verringert oder die [Systemressourcen](../../installation/systemvoraussetzungen.md) erweitert werden.
```

## Spalten vorsortieren

## Pré-trier les colonnes

Welche Sortierung bereits beim Laden der Objekt-Liste vorgenommen werden soll, kann ebenfalls konfiguriert werden. Neben einigen Attributen existiert ein Auswahl-Button, der angeklickt werden kann. Im Drop-Down-Menü **Sortieren** kann eine auf- oder absteigende Sortierung des gewählten Attributs festgelegt werden.

Il est également possible de configurer le tri qui doit être effectué dès le chargement de la liste des objets. À côté de certains attributs, il existe un bouton de sélection sur lequel on peut cliquer. Dans le menu déroulant **Tri**, il est possible de définir un tri croissant ou décroissant de l'attribut sélectionné.

Ohne festgelegte Sortierung werden die Objekte nach deren [ID](../eindeutige-referenzierungen.md) sortiert.

Sans tri défini, les objets sont triés selon leur [ID](../références-uniques.md).

!!! info "Einschränkungen"

! !! info "Restrictions

```
Für die Sortierung von Attributen gelten folgende Einschränkungen:

*   Nicht alle Attribute können sortiert werden.
*   Die nachträgliche Sortierung über die Spaltenüberschriften ist bei einer Objekt-Liste mit mehr als **10.000** Objekten nicht möglich. Diese [Limitierung kann angepasst werden](erweiterte-einstellungen.md).
```

## Filterung beeinflussen

## Influencer le filtrage

Eine Objekt-Liste kann bereits beim Laden gefiltert werden. Hierzu wird im Drop-Down-Menü **Standardfilter** das Attribut ausgewählt und im Textfeld rechts daneben der Wert angegeben, nach dem gefiltert werden soll.

Une liste d'objets peut être filtrée dès son chargement. Pour cela, il suffit de sélectionner l'attribut dans le menu déroulant **Filtre standard** et d'indiquer dans le champ de texte à droite la valeur selon laquelle le filtrage doit être effectué.

Wenn man in der Listenansicht nicht jedes mal ein zu filterndes Attribut auswählen möchte kann der Filter für alle Felder gesetzt werden.

Si l'on ne souhaite pas sélectionner à chaque fois un attribut à filtrer dans la vue en liste, le filtre peut être défini pour tous les champs.

## Arten, ein Objekt zu öffnen

## façons d'ouvrir un objet

Häufig genügt nicht der Blick auf die Objekt-Liste, um alle geforderten Attribute abzurufen. Daher kann ein Objekt über die Liste geöffnet werden. Hierfür existieren zwei Wege:

Souvent, il ne suffit pas de regarder la liste des objets pour obtenir tous les attributs demandés. Il est donc possible d'ouvrir un objet via la liste. Il existe deux façons de le faire :

* Objekt öffnen durch Klicken auf die entsprechende Zeile in der Objekt-Liste: Hierzu ist die Checkbox **Bei dieser Liste soll das Objekt über den Klick auf die Zeile geöffnet werden.** zu wählen.
* Über die Auswahl der Checkbox eines Objekts und den Button **Editieren** wird das Objekt geöffnet (und gleichzeitig editiert).

* Ouvrir l'objet en cliquant sur la ligne correspondante dans la liste des objets : Pour cela, il faut sélectionner la case à cocher **Pour cette liste, l'objet doit être ouvert en cliquant sur la ligne.**.
* En sélectionnant la case à cocher d'un objet et en cliquant sur le bouton **Editer**, l'objet est ouvert (et édité en même temps).

Die erste Option kann für alle Benutzer und alle Objekt-Listen gleichzeitig aktiviert werden. Unter **Verwaltung → Systemtools → Cache / Datenbank → Datenbank** befindet sich der Button **Zeilenklick in Objektlisten aktivieren**.

La première option peut être activée simultanément pour tous les utilisateurs et toutes les listes d'objets. Sous **Administration → Outils système → Cache / Base de données → Base de données** se trouve le bouton **Activer le clic en ligne dans les listes d'objets**.

## Konfiguration zurücksetzen

## Réinitialiser la configuration

Zu jeder Objekt-Liste existiert eine Standard-Konfiguration. Soll auf den Standard zurückgesetzt werden, drückt man auf den Button **Liste auf Standard zurücksetzen**.

Il existe une configuration standard pour chaque liste d'objets. Si l'on souhaite revenir à la configuration par défaut, il suffit d'appuyer sur le bouton **Réinitialiser la liste par défaut**.

## Konfiguration als Standard setzen

## Définir la configuration comme standard

Damit eine Objekt-Liste zum Standard wird, genügt im Bereich **Konfiguration als Standard definieren** ein Klick auf den Button **Als Standard definieren**. Bereits von Benutzern geänderte Objekt-Listen werden dadurch nicht beeinflusst. Diese Änderung betrifft also neue Benutzer und Benutzer, die eine Objekt-Liste noch nicht geändert haben.

Pour qu'une liste d'objets devienne un standard, il suffit de cliquer sur le bouton **Définir comme standard** dans la zone **Définir la configuration comme standard**. Les listes d'objets déjà modifiées par les utilisateurs ne sont pas affectées par cette modification. Cette modification concerne donc les nouveaux utilisateurs et les utilisateurs qui n'ont pas encore modifié une liste d'objets.

[![standard-setzen](../../assets/images/de/grundlagen/listenansicht-konfigurieren/5-lk.png)](../../assets/images/de/grundlagen/listenansicht-konfigurieren/5-lk.png)

[ ![mettre par défaut](../../assets/images/fr/bases/configuration de la vue de liste/5-lk.png)](../../assets/images/fr/bases/configuration de la vue de liste/5-lk.png)

## Konfiguration anderen Benutzern zuweisen

## Attribuer la configuration à d'autres utilisateurs

Wenn anderen Benutzern eine bestimmte Objekt-Liste vorgegeben werden soll, werden diese im Bereich **Konfiguration anderen Benutzern zuweisen** über einen [Objekt-Browser](../attributfelder.md) ausgewählt. Anschließend wird die Auswahl über den Button **Konfiguration überschreiben** bestätigt.

Si une certaine liste d'objets doit être prédéfinie pour d'autres utilisateurs, ceux-ci sont sélectionnés dans la zone **Affecter la configuration aux autres utilisateurs** via un [navigateur d'objets](../champs d'attributs.md). Ensuite, la sélection est confirmée par le bouton **Ecraser la configuration**.

[![benutzer-zuweisen](../../assets/images/de/grundlagen/listenansicht-konfigurieren/6-lk.png)](../../assets/images/de/grundlagen/listenansicht-konfigurieren/6-lk.png)

[ ![assigner l'utilisateur](../../assets/images/fr/bases/configurer la vue de liste/6-lk.png)](../../assets/images/fr/bases/configurer la vue de liste/6-lk.png)

## Speichern der Konfiguration

## Enregistrer la configuration

Über den Button **Speichern** werden alle Änderungen an der Konfiguration übernommen.

Le bouton **Enregistrer** permet de valider toutes les modifications apportées à la configuration.

!!! info "Browser Cache"

! !! info "Cache du navigateur

```
Sollte die Listenansicht beim nächsten Aufruf der Objekt-Liste nicht mit der Konfiguration übereinstimmen, hilft es, den Cache des Webbrowsers zu leeren.
```

## Rechte zum Bearbeiten der Listenansicht

## Droits d'édition de la vue en liste

Die [Rechteverwaltung](../../effizientes-dokumentieren/rechteverwaltung/cmdb.md) erlaubt das Vergeben von Rechten, welche Person oder Personengruppe die Listenansicht konfigurieren und anderen Benutzern vorgeben darf.

La [gestion des droits](../../documenter-efficacement/gestion des droits/cmdb.md) permet d'attribuer des droits à la personne ou au groupe de personnes qui peut configurer la vue en liste et la présenter aux autres utilisateurs.