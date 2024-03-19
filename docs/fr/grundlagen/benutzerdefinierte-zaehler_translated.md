<!-- TRANSLATED by md-translate -->
# Benutzerdefinierte Zähler

# Compteurs définis par l'utilisateur

Benutzerdefinierte Zähler sind unter **Verwaltung → Vordefinierte Inhalte → Benutzerdefinierte Zähler** zu finden. Hier werden alle konfigurierten Zähler in einer Liste dargestellt.

Les compteurs définis par l'utilisateur se trouvent sous **Administration → Contenu prédéfini → Compteurs définis par l'utilisateur**. Tous les compteurs configurés y sont présentés sous forme de liste.

Oben in dieser Liste befindet sich eine Schaltfläche zum Hinzufügen von X neuen Zählern zu dieser Liste.

En haut de cette liste se trouve un bouton permettant d'ajouter X nouveaux compteurs à cette liste.

[![Benutzerdefinierter-Zähler](../assets/images/de/grundlagen/benutzerdefinierte-zaehler/1-bz.png)](../assets/images/de/grundlagen/benutzerdefinierte-zaehler/1-bz.png)

[ ![Compteur personnalisé](../assets/images/fr/bases/compteur-personnalisé/1-bz.png)](../assets/images/fr/bases/compteur-personnalisé/1-bz.png)

Für jeden definierten Zähler gibt es eine eigene Zeile in dieser Liste.

Pour chaque compteur défini, il y a une ligne séparée dans cette liste.

Jede Zeile hat eine vorangestellte Bezeichnung: **%COUNTER_**

Chaque ligne est précédée d'un libellé : **%COUNTER_**

Gefolgt von einem Textfeld **[_____________]**

Suivi d'un champ de texte **[_____________]**.

Gefolgt von einer weiteren Beschriftung: **%**
Das bedeutet, dass der fertige Zähler wie folgt aussehen wird: **%COUNTER_CUSTOMTEXT%**

Suivi d'une autre inscription : **%**
Cela signifie que le compteur final ressemblera à ceci : **%COUNTER_CUSTOMTEXT%**

Neben der Namensdefinition haben Sie auch ein Informationsfeld, das Ihnen den aktuellen Status des Zählers anzeigt, welche Zahl dieser Zähler gerade erreicht hat.

Outre la définition du nom, vous disposez également d'un champ d'information qui vous indique l'état actuel du compteur, le nombre que ce compteur vient d'atteindre.

Neben der Information über die aktuelle Zahl, die der Zähler erreicht hat, befindet sich eine Schaltfläche **Zurücksetzen**. Damit wird der Zähler auf 1 zurückgesetzt.<br>
Wenn Sie auf die Schaltfläche "Zurücksetzen" klicken, wird der Benutzer darüber informiert, dass dies nicht rückgängig gemacht werden kann und der Zähler unwiderruflich auf 1 zurückgesetzt wird. Der Benutzer wird gefragt, ob er fortfahren möchte. (Auswahl Ja/Nein)

A côté de l'information sur le nombre actuel atteint par le compteur se trouve un bouton **Réinitialiser**. Il permet de remettre le compteur à 1.<br>
En cliquant sur le bouton "Réinitialiser", l'utilisateur est informé que cela ne peut pas être annulé et que le compteur est irrévocablement remis à 1. Il est demandé à l'utilisateur s'il souhaite continuer. (Choix Oui/Non)

Die letzte Spalte enthält eine Schaltfläche **Löschen**, um den Zähler dauerhaft aus der Konfiguration zu entfernen. Wenn der Benutzer darauf klickt, wird er gefragt, ob er diesen Zähler wirklich löschen möchte, da er dann nicht mehr verfügbar ist und nicht wiederhergestellt werden kann. (Auswahl Ja/Nein)

La dernière colonne contient un bouton **Supprimer** qui permet de supprimer définitivement le compteur de la configuration. Si l'utilisateur clique dessus, il lui est demandé s'il souhaite vraiment supprimer ce compteur, car il ne sera alors plus disponible et ne pourra pas être restauré. (Choix Oui/Non)

Die gesamte Konfiguration sieht wie folgt aus:

L'ensemble de la configuration se présente comme suit :

[![Benutzerdefinierter-Zähler](../assets/images/de/grundlagen/benutzerdefinierte-zaehler/2-bz.png)](../assets/images/de/grundlagen/benutzerdefinierte-zaehler/2-bz.png)

[ ![Compteur personnalisé](../assets/images/fr/bases/compteur-personnalisé/2-bz.png)](../assets/images/fr/bases/compteur-personnalisé/2-bz.png)

!!! attention ""
    Wenn man den Mauszeiger über das (Info-) Symbol bewegt, erscheint ein kleiner Text, der darauf hinweist, dass diese Funktion den Zähler auf 1 zurücksetzt und alle zukünftigen Verwendungen dieses Zählers diese neue Zählung verwenden werden.
    Es ist nicht möglich, zum aktuellen Stand zurückzukehren.

! !! attention ""
    Lorsque l'on déplace le curseur de la souris sur le symbole (d'information), un petit texte apparaît pour indiquer que cette fonction remet le compteur à 1 et que toutes les utilisations futures de ce compteur utiliseront ce nouveau comptage.
    Il n'est pas possible de revenir à l'état actuel.

Es ist nur erlaubt, A-Z, a-z, 0-9, - und _ für den Namen des Zählers einzugeben. Wenn etwas anderes in das Feld eingegeben wird und der Benutzer versucht zu speichern, wird der Zähler nicht gespeichert.

Il est uniquement permis d'entrer A-Z, a-z, 0-9, - et _ pour le nom du compteur. Si quelque chose d'autre est saisi dans le champ et que l'utilisateur tente d'enregistrer, le compteur ne sera pas enregistré.

Er wird rot hervorgehoben und ein Infokasten weist darauf hin, dass nur "A-Z, a-z, 0-9, - und _" verwendet werden dürfen. Nach dem Speichern werden alle Kleinbuchstaben in Großbuchstaben umgewandelt.

Il est mis en évidence en rouge et une boîte d'information indique que seuls les caractères "A-Z, a-z, 0-9, - et _" peuvent être utilisés. Après l'enregistrement, toutes les lettres minuscules sont converties en majuscules.

Nach dem Speichern wird das Textfeld deaktiviert, so dass der ZÄHLER nicht mehr verändert werden kann. Dies soll Probleme vermeiden. Der Speicherknopf ist ganz oben in der Konfiguration allgemein platziert.

Après l'enregistrement, le champ de texte est désactivé, de sorte que le COMPTEUR ne peut plus être modifié. Ceci a pour but d'éviter les problèmes. Le bouton d'enregistrement est placé tout en haut de la configuration en général.

Der Zähler kann überall verwendet werden, ein normaler **%COUNTER%** kann verwendet werden. Er wird manuell in das entsprechende Feld eingegeben. Jedes Mal, wenn der benutzerdefinierte Zähler verwendet wird, wird er um 1 hochgezählt.

Le compteur peut être utilisé partout, un **%COUNTER%** normal peut être utilisé. Il est saisi manuellement dans le champ correspondant. Chaque fois que le compteur personnalisé est utilisé, il est incrémenté de 1.

Der benutzerdefinierte Zähler kann auch für führende Nullen auf die gleiche Weise verwendet werden, bereits vorhandene Zähler verwenden diese Konfiguration:

Le compteur personnalisé peut également être utilisé pour les zéros de tête de la même manière, les compteurs déjà existants utilisent cette configuration :

**%COUNTER_CUSTOMTEXT#N%**

**%COUNTER_CUSTOMTEXT#N%**

**%COUNTER_CUSTOMTEXT#3%** würde zu 001 führen.

**%COUNTER_CUSTOMTEXT#3%** donnerait 001.

Zusätzlich gibt es eine [Experteneinstellung](../administration/verwaltung/mandanten-name-verwaltung/experteneinstellungen.md). Hier kann der Benutzer den Zähler bei Bedarf auf einen bestimmten Wert setzen.
Diese Zähler können über die Suche via `cmdb.counter.counter_` dort gefunden werden.

De plus, il existe un [réglage expert](../administration/administration/nom-du-client-administration/réglages-expert.md). Ici, l'utilisateur peut, si nécessaire, définir le compteur sur une valeur spécifique.
Ces compteurs peuvent y être trouvés par une recherche via `cmdb.counter.counter_`.

Alle Zähler sind in der Listenbearbeitung, der Massenbearbeitung, den Vorlagen und der automatisch generierten Inventarnummer aus der Objekttyp Konfiguration verfügbar/verwendbar.

Tous les compteurs sont disponibles/utilisables dans le traitement des listes, le traitement en masse, les modèles et le numéro d'inventaire généré automatiquement à partir de la configuration du type d'objet.

Außerdem sind die Counter auch bei Textfeldern von benutzerdefinierten Kategorien verwendbar.

En outre, les compteurs sont également utilisables pour les champs de texte des catégories personnalisées.

Diese Counter werden durch klick auf das [![icon](../assets/images/de/grundlagen/icons/riddle.png)](../assets/images/de/grundlagen/icons/riddle.png) Fragezeichen Symbol neben dem Feld aufgelistet.

Ces compteurs sont listés en cliquant sur l'icône [ ![icon](../assets/images/fr/grundlagen/icons/riddle.png)](../assets/images/fr/grundlagen/icons/riddle.png) point d'interrogation à côté du champ.