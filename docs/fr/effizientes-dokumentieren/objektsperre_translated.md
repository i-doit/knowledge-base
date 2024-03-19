<!-- TRANSLATED by md-translate -->
# Bearbeitungssperre

# Blocage de l'édition

Kollaboratives Arbeiten an der IT-Dokumentation bringt auch so manche Fallstricke mit sich. Damit sich Änderungen von Benutzern nicht gegenseitig überschreiben, bringt i-doit eine Bearbeitungssperre mit. Diese räumt einem Benutzer exklusive Schreibrechte ein. Alle anderen Benutzer erhalten in der Zeit der Sperre lediglich Leserechte.

Le travail collaboratif sur la documentation informatique comporte également de nombreux pièges. Pour éviter que les modifications des utilisateurs ne s'écrasent les unes les autres, i-doit propose un verrouillage des modifications. Celui-ci accorde à un utilisateur des droits d'écriture exclusifs. Tous les autres utilisateurs n'ont que des droits de lecture pendant la durée du blocage.

## Funktionsweise

## Fonctionnement

Wenn ein Benutzer ein [Objekt](../grundlagen/struktur-it-dokumentation.md) editiert, wird es für eine bestimmte Zeit für andere Benutzer gesperrt. Diese können in dieser Zeit das Objekt zwar im Lesemodus betrachten, aber nicht editieren. Die Objektsperre erkennt man daran, dass auf der [Übersichtsseite](../grundlagen/struktur-it-dokumentation.md) und in jeder [Kategorie](../grundlagen/struktur-it-dokumentation.md) des gesperrten Objekts ein großer, roter Hinweis erscheint, von wem das Objekt gesperrt wurde: **- LOCKED ([Benutzer]) -**

Lorsqu'un utilisateur édite un [objet](../bases/structure-it-documentation.md), celui-ci est bloqué pendant un certain temps pour les autres utilisateurs. Ceux-ci peuvent certes consulter l'objet en mode lecture pendant ce temps, mais ne peuvent pas l'éditer. On reconnaît le verrouillage de l'objet au fait que sur la [page d'aperçu](../bases/structure-it-documentation.md) et dans chaque [catégorie](../bases/structure-it-documentation.md) de l'objet verrouillé apparaît une grande indication rouge indiquant par qui l'objet a été verrouillé : **- LOCKED ([utilisateur]) -**

Sobald die Objektsperre aktiviert wird, startet ein Counter. Läuft der Countdown ab, wird die Objektsperre aufgehoben. Der Benutzer sollte in dieser Zeit seine Änderungen gespeichert haben, um nicht Gefahr zu laufen, dass andere Benutzer seine Änderungen überschreiben (oder umgekehrt).

Dès que le verrouillage d'objet est activé, un compte à rebours démarre. Si le compte à rebours s'achève, le verrouillage de l'objet est levé. Pendant ce temps, l'utilisateur devrait avoir enregistré ses modifications pour ne pas courir le risque que d'autres utilisateurs écrasent ses modifications (ou inversement).

Die Objektsperre wird vorzeitig aufgehoben, wenn der Benutzer seine Änderungen gespeichert hat.

Le verrouillage de l'objet est levé prématurément lorsque l'utilisateur a enregistré ses modifications.

[![objektsperre-aufheben](../assets/images/de/effizientes-dokumentieren/objektsperre/1-os.png)](../assets/images/de/effizientes-dokumentieren/objektsperre/1-os.png)

[ ![débloquer-objet](../assets/images/fr/documenter-efficacement/blocage-objet/1-os.png)](../assets/images/fr/documenter-efficacement/blocage-objet/1-os.png)

## Konfiguration

## Configuration

In der Standard-Installation von i-doit ist die Objektsperre für 120 Sekunden aktiv. Dies wird unter **Verwaltung → Benutzereinstellungen → Bearbeitungssperre** konfiguriert:

Dans l'installation standard d'i-doit, le verrouillage d'objet est actif pendant 120 secondes. Ceci est configuré sous **Administration → Paramètres utilisateur → Verrouillage de l'édition** :

* **Aktiviere das Sperren von Objekten in Bearbeitung**: Soll die Objektsperre aktiviert sein?
* **Timeout**: Zeit in Sekunden für den Countdown

**Activer le verrouillage des objets en cours de traitement** : Le verrouillage des objets doit-il être activé ?
**Timeout** : Temps en secondes pour le compte à rebours

[![objektsperre-timeout](../assets/images/de/effizientes-dokumentieren/objektsperre/2-os.png)](../assets/images/de/effizientes-dokumentieren/objektsperre/2-os.png)

[ ![blocage d'objet-timeout](../assets/images/fr/documenter-efficacement/blocage-d'objet/2-os.png)](../assets/images/fr/documenter-efficacement/blocage-d'objet/2-os.png)

## Liste von gesperrten Objekten

## Liste d'objets bloqués

Unterhalb der Konfiguration **Verwaltung → Benutzereinstellungen → Bearbeitungssperre** werden derzeit gesperrte Objekte in einer Liste angezeigt. Über den Button **Löschen** werden alle Sperren vorzeitig aufgehoben.

Sous la configuration **Administration → Paramètres utilisateur → Verrouillage de l'édition**, les objets actuellement verrouillés sont affichés dans une liste. En cliquant sur le bouton **Supprimer**, tous les blocages sont supprimés de manière anticipée.

[![objektsperre-anzeigen](../assets/images/de/effizientes-dokumentieren/objektsperre/3-os.png)](../assets/images/de/effizientes-dokumentieren/objektsperre/3-os.png)

[ ![affichage du verrouillage des objets](../assets/images/fr/documentation efficace/verrouillage des objets/3-os.png)](../assets/images/fr/documentation efficace/verrouillage des objets/3-os.png)