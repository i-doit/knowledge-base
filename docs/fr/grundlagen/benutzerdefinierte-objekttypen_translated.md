<!-- TRANSLATED by md-translate -->
# Benutzerdefinierte Objekttypen

# Types d'objets définis par l'utilisateur

In der Standard-Installation von _i-doit_ wird eine Vielzahl von [Objekttypen](../glossar.md) bereitgestellt. Es ist jedoch wahrscheinlich , dass du [Objekte](../glossar.md) dokumentieren möchtest, die sich den bestehenden Objekttypen nicht zuordnen lassen. Aus diesem Grund ist es möglich, eigene Objekttypen, also benutzerdefinierte Objekttypen, zu erzeugen und auszuprägen.

Dans l'installation standard de _i-doit_, un grand nombre de [types d'objets](../glossar.md) sont fournis. Cependant, il est probable que tu souhaites documenter des [objets](../glossar.md) qui ne peuvent pas être attribués aux types d'objets existants. C'est pourquoi il est possible de créer et d'imprimer ses propres types d'objets, c'est-à-dire des types d'objets définis par l'utilisateur.

Zugriff auf die Konfiguration

Accès à la configuration

Die Möglichkeit, benutzerdefinierte Objekttypen zu erstellen findest du unter **Verwaltung → CMBD-Einstellungen → Objekttyp-Konfiguration → [Objekttyp-Gruppe]**. Hier ist es dir möglich, neue Objekttypen zu erstellen und bestehende Objekttypen zu bearbeiten.

Tu trouveras la possibilité de créer des types d'objets personnalisés sous **Administration → Paramètres CMBD → Configuration des types d'objets → [Groupe de types d'objets]**. Ici, il t'est possible de créer de nouveaux types d'objets et de modifier des types d'objets existants.

Alternativ kannst du über die Bezeichnung der [Objekttypgruppe](../glossar.md) oberhalb der [Objekttyp-Liste](../glossar.md) im [Baum-Menü](../glossar.md) auf der linken Seite ebenfalls zur Objekttyp-Konfiguration gelangen. Klicke hierzu nur auf den Link und du befindest dich direkt in der Auflistung der Objekttypen dieser Objekttypgruppe und kannst diese bearbeiten.

Tu peux également accéder à la configuration du type d'objet en cliquant sur le nom du [groupe de types d'objets](../glossar.md) au-dessus de la [liste des types d'objets](../glossar.md) dans le [menu arborescent](../glossar.md) sur le côté gauche. Pour cela, il suffit de cliquer sur le lien et tu te trouves directement dans la liste des types d'objets de ce groupe de types d'objets et tu peux les modifier.

[![objektsicht](../assets/images/de/grundlagen/benutzerdefinierte-objekttypen/1-bo.png)](../assets/images/de/grundlagen/benutzerdefinierte-objekttypen/1-bo.png)

[ ![vue d'objet](../assets/images/fr/bases/types d'objets définis par l'utilisateur/1-bo.png)](../assets/images/fr/bases/types d'objets définis par l'utilisateur/1-bo.png)

In der Listenansicht der Objekttyp-Konfiguration verwende die Schaltfläche **Neu** um mit der Konfiguration eines eigenen Objekttyps zu beginnen.

Dans la liste de configuration du type d'objet, utilise le bouton **Nouveau** pour commencer à configurer ton propre type d'objet.

[![liste-objekttyp-konfiguration](../assets/images/de/grundlagen/benutzerdefinierte-objekttypen/2-bo.png)](../assets/images/de/grundlagen/benutzerdefinierte-objekttypen/3-bo.png)

[ ![liste-configuration-type-objet](../assets/images/fr/bases/types-objets-définis-par-l'utilisateur/2-bo.png)](../assets/images/fr/bases/types-objets-définis-par-l'utilisateur/3-bo.png)

Nun kannst du deinen eigenen Objekttyp konfigurieren.

Tu peux maintenant configurer ton propre type d'objet.

[![objekttyp-konfiguration](../assets/images/de/grundlagen/benutzerdefinierte-objekttypen/3-bo.png)](../assets/images/de/grundlagen/benutzerdefinierte-objekttypen/3-bo.png)

[ ![configuration du type d'objet](../assets/images/fr/bases/types d'objets définis par l'utilisateur/3-bo.png)](../assets/images/fr/bases/types d'objets définis par l'utilisateur/3-bo.png)

## Felder in der Konfiguration

## Champs dans la configuration

Folgende Felder werden in der Konfiguration neuer und bestehender Objekttypen angezeigt:

Les champs suivants sont affichés dans la configuration des types d'objets nouveaux et existants :

* **ID**
Die ID ist eine fortlaufende Nummer, die vom System vergeben wird. Sie ist eindeutig und erlaubt die Identifikation des Objekttyps. Eine manuelle Änderung ist nicht möglich.
* **Übersetzte Bezeichnung**
Hier kannst du prüfen, ob die Sprachkonstante, die du verwendest in der aktuell gewählten Sprache korrekt übersetzt wird, falls du eine eigene Sprachdatei verwendest
* **Sprachkonstante/Bezeichnung**
In diesem Feld ist es dir möglich, eine [Sprachkonstante](../administration/mehrsprachigkeit-und-uebersetzungen.md) oder eine Bezeichnung im Klartext zu vergeben. Solltest du _i-doit_ multilingual nutzen, verwende bitte eine Konstante, die du in den eigenen Sprachdateien übersetzt.
* **SYSID Präfix**
Das [SYSID](../glossar.md) Präfix wird bei der Erzeugung der SYSID für alle Objekte dieses Typs eingesetzt. Wenn du dieses Feld leer lässt, wird das Standard-Präfix **SYSID_ **verwendet. Andernfalls werden die SYSIDs mit deinem eigenen Präfix generiert. Bleibt das Feld unangetastet, fließt der aktuelle Unix Timestamp beim Erstellen eines Objektes in die SYSID ein. Bei eigenem Präfix wird die Objekt-ID herangezogen.
* **Automatische Inventarnummer**
Wenn du möchtest, dass i-doit für Objekte dieses Typs eigenständig individuelle Inventarnummern generiert, kannst du das Schema hier hinterlegen. Hierfür stehen dir Platzhalter zur Verfügung, die du dir über das blaue Fragezeichen am Ende der Zeile einblenden kannst. Es ist möglich, diese Platzhalter miteinander sowie mit Freitext zu kombinieren.
* **Position im Baum**
Wenn du keine alphabetische Sortierung für die Objekttypen im Baum-Menü der linken Seite verwendest, kannst du über die Sortierung eine eigene Reihenfolge erzeugen. Die Sortierung erfolgt auf Basis der Zahlenwerte in aufsteigender Reihenfolge.
* **Objekt Farbe**
Hierbei kannst du jedem Objekttyp eine eigene Farbe zuordnen. Diese farblichen Markierungen findest du zum Beispiel im [CMDB-Explorer](../auswertungen/cmdb-explorer/index.md) sowie in der grafischen Darstellung von Schränken wieder, damit dir der Überblick erleichtert wird.
* **Objekttyp-Gruppe**
Solltest du dich während der Konfiguration umentscheiden und deinen Objekttyp einer anderen Gruppe zuweisen wollen oder bereits bestehende Objekttypen in eine andere Gruppe verschieben wollen, kannst du über diese Einstellung die Objekttyp-Gruppe anpassen.
* **Spezifische Kategorie**
In einem Drop-Down-Menü kannst du optional die gewünschte [spezifische Kategorie](../glossar.md) auswählen und mit dem Objekttyp verknüpfen. Bitte beachte, dass sich spezifische Kategorien gegenseitig ausschließen und daher nur die Auswahl von maximal einer spezifischen Kategorie möglich ist.
* **Selbstdefiniert**
Die Information **selbstdefiniert** gibt dir eine Info darüber, ob der Objekttyp bereits in der Standard-Installation enthalten ist oder von einem Anwender selbst erstellt wurde. Standard-Objekttypen können nicht gelöscht, sondern nur ausgeblendet werden.
* **Standort**
In dieser Auswahl ist es dir möglich zu definieren, ob Objekte dieses Typs als physikalischer Standort für weitere Objekte dienen sollen. Objekte, die nicht als physikalischer Standort dienen sollen, tauchen nicht im Standort-Browser auf.
* **Beziehungsmaster**
Jede [Objekt-Beziehung](objekt-beziehungen.md) verfügt über eine Richtung bzw. eine Abhängigkeit. Wenn du ein Objekt bearbeitest und ein anderes Objekt verknüpfst, ist das verknüpfte Objekt immer abhängig vom aktuell in Bearbeitung befindlichen Objekt. Handelt es sich jedoch bei dem verknüpften Objekt um ein Objekt, dessen Objekttyp als Beziehungsmaster konfiguriert wurde, nimmt das Objekt automatisch die Master-Rolle in der Beziehung ein.
* **Positionierbar im Schrank**
Hier kannst du festlegen, ob Objekte dieses Typs innerhalb von Höheneinheiten in einem Rack verbaut werden sollen. Bei deaktivierter Auswahl stehen die Attribute für eine Positionierung im Rack nicht zur Verfügung.
* **Anzeige im Menübaum**
Die Anzeige im Menübaum kann über diese Option deaktiviert werden. Wenn du entweder Standard-Objekttypen nicht benötigst und diese ausblenden möchtest oder möchtest, dass dein eigener Objekttyp noch nicht im Menübaum auftaucht, kannst du hier die Sichtbarkeit für alle Benutzer deaktivieren.
* **Bild**
Hier ist es dir möglich, ein Standard-Objektbild für die Informationszeile auszuwählen.
* **Icon**
Du kannst das Icon, welches im Menü-Baum neben deinem Objekttyp angezeigt wird, in dieser Auswahl festlegen. Gib hierfür den Pfad, beginnend ab dem _i-doit_-Installationsverzeichnis an, unter dem das Icon zu finden ist.
* **Konstante**
Du kannst eine [Konstante](../glossar.md) festlegen, über die Datenbankabfragen auf den Objekttyp möglich sind. Das Standard-Schema hierfür lautet in _i-doit_ **C__OBJTYPE__[NAME]**, wobei **[NAME]** durch die Bezeichnung des Objekttyps zu ersetzen ist. _i-doit_ erzeugt automatisch eine Konstante, die statt des Namens den aktuellen Unix Timestamp enthält. Für eine bessere Lesbarkeit (bei SQL-Reports o. ä,) ist der Unix Timestamp durch den stilisierten Namen des Objekttyps zu ersetzen (bestenfalls nur ASCII-Großbuchstaben).
* **Default-Template**
Wenn du mit der [Template](../effizientes-dokumentieren/templates.md)-Funktion bereits Templates erzeugt hast, kannst du hier ein Template auswählen, nach dessen Vorlage neue Objekte automatisch befüllt werden. So kannst du Werte, die bei allen Objekten dieses Typs gleich sind, vorbefüllen. Diese vorbefüllten Werte kannst du jederzeit anpassen, falls dies notwendig ist.
* **Übersichtsseite als Standard Ansicht**
Mit dieser Auswahl legst du fest, ob beim Aufruf eines Objekts dieses Typs die [Übersichtsseite](../glossar.md) oder lediglich die Kategorie **Allgemein** angezeigt werden soll. Standardmäßig ist diese Option auf "Nein" gesetzt. Wenn sie auf "Ja" steht, wird die zuvor ausgewählte spezifische Kategorie auf der Übersichtsseite automatisch hinzugefügt.
* **Kategorien**
In dieser Auswahl prägst du deinen Objekttypen aus. Jede [Kategorie](../glossar.md), deren Checkbox du aktivierst, wird dir innerhalb deines Objekttyps zur Verfügung stehen. In der rechten Spalte legst du fest, welche Kategorien auf der Übersichtsseite angezeigt werden sollen. Diese Auswahl ist nur möglich, wenn zuvor die Übersichtsseite als Standard-Ansicht aktiviert wurde. Über die schraffierten Streifen lässt sich die Reihenfolge der Kategorien per Drag'n'Drop bestimmen.
* **Beschreibung**
Hier ist es dir möglich, Hinweise und Notizen zu deinem Objekttyp zu hinterlegen.

* **ID**
L'ID est un numéro séquentiel attribué par le système. Il est unique et permet d'identifier le type d'objet. Une modification manuelle n'est pas possible.
* **Désignation traduite**.
Tu peux vérifier ici si la constante de langue que tu utilises est correctement traduite dans la langue actuellement sélectionnée, si tu utilises un fichier de langue propre.
**Constante de langue/désignation**.
Dans ce champ, il t'est possible d'attribuer une [constante de langue](../administration/multilinguisme-et-traductions.md) ou une désignation en texte clair. Si tu utilises _i-doit_ multilingue, utilise une constante que tu traduiras dans tes propres fichiers de langue.
* **SYSID préfixe**.
Le préfixe [SYSID](../glossar.md) est utilisé lors de la création du SYSID pour tous les objets de ce type. Si tu laisses ce champ vide, le préfixe par défaut **SYSID_ ** sera utilisé. Dans le cas contraire, les SYSID sont générés avec ton propre préfixe. Si le champ n'est pas modifié, l'horodatage Unix actuel est intégré dans le SYSID lors de la création d'un objet. Si tu as ton propre préfixe, l'ID de l'objet est utilisé.
* **Numéro d'inventaire automatique**.
Si tu souhaites qu'i-doit génère de manière autonome des numéros d'inventaire individuels pour les objets de ce type, tu peux enregistrer le schéma ici. Pour cela, tu disposes de caractères de remplacement que tu peux afficher en cliquant sur le point d'interrogation bleu à la fin de la ligne. Il est possible de combiner ces caractères de remplacement entre eux ainsi qu'avec du texte libre.
**Position dans l'arborescence**.
Si tu n'utilises pas de tri alphabétique pour les types d'objets dans le menu de l'arbre du côté gauche, tu peux créer ton propre ordre via le tri. Le tri se fait sur la base des valeurs numériques dans l'ordre croissant.
**Couleur de l'objet**
Ici, tu peux attribuer à chaque type d'objet sa propre couleur. Ces marquages de couleur se retrouvent par exemple dans [CMDB-Explorer](../auswertungen/cmdb-explorer/index.md) ainsi que dans la représentation graphique des armoires, afin de te faciliter la vue d'ensemble.
* **Groupe de type d'objet**
Si tu changes d'avis pendant la configuration et que tu souhaites attribuer ton type d'objet à un autre groupe ou déplacer des types d'objets déjà existants dans un autre groupe, tu peux adapter le groupe de type d'objet via ce paramètre.
* **Catégorie spécifique**
Dans un menu déroulant, tu peux éventuellement sélectionner la [catégorie spécifique](../glossaire.md) souhaitée et l'associer au type d'objet. Veuillez noter que les catégories spécifiques s'excluent mutuellement et qu'il n'est donc possible de sélectionner qu'une seule catégorie spécifique au maximum.
* **Autodéfini**
L'information **autodéfini** te donne une info sur le fait que le type d'objet est déjà inclus dans l'installation standard ou a été créé par un utilisateur lui-même. Les types d'objets standard ne peuvent pas être supprimés, mais seulement masqués.
* **Lieu**
Dans cette sélection, il t'est possible de définir si les objets de ce type doivent servir d'emplacement physique pour d'autres objets. Les objets qui ne doivent pas servir d'emplacement physique n'apparaissent pas dans le navigateur d'emplacement.
**Maître des relations**.
Chaque [relation d'objet](objekt-beziehungen.md) dispose d'une direction ou d'une dépendance. Si tu édites un objet et que tu lies un autre objet, l'objet lié dépend toujours de l'objet en cours d'édition. Cependant, si l'objet lié est un objet dont le type d'objet a été configuré comme maître de la relation, l'objet prend automatiquement le rôle de maître dans la relation.
**Positionnable dans l'armoire**.
Tu peux définir ici si les objets de ce type doivent être montés dans un rack à l'intérieur d'unités de hauteur. Si la sélection est désactivée, les attributs pour un positionnement dans le rack ne sont pas disponibles.
**Affichage dans l'arborescence du menu**.
L'affichage dans l'arborescence du menu peut être désactivé par cette option. Si tu n'as pas besoin des types d'objets standard et que tu souhaites les masquer ou si tu veux que ton propre type d'objet n'apparaisse pas encore dans l'arborescence du menu, tu peux désactiver ici la visibilité pour tous les utilisateurs.
* **Image**
Ici, tu peux choisir une image d'objet standard pour la ligne d'information.
* **Icône**
Tu peux définir dans cette sélection l'icône qui sera affichée dans l'arborescence des menus à côté de ton type d'objet. Pour cela, indique le chemin, en commençant par le répertoire d'installation _i-doit_, sous lequel se trouve l'icône.
* **Constante**
Tu peux définir une [constante](../glossar.md) qui permet d'interroger la base de données sur le type d'objet. Le schéma standard pour cela dans _i-doit_ est **C__OBJTYPE__[NAME]**, où **[NAME]** doit être remplacé par le nom du type d'objet. _i-doit_ crée automatiquement une constante qui contient l'horodatage Unix actuel au lieu du nom. Pour une meilleure lisibilité (pour les rapports SQL ou autres), l'Unix Timestamp doit être remplacé par le nom stylisé du type d'objet (au mieux uniquement en majuscules ASCII).
* **Template par défaut**.
Si tu as déjà créé des templates avec la fonction [Template](../efficient-dokumentieren/templates.md), tu peux choisir ici un template selon le modèle duquel les nouveaux objets seront automatiquement remplis. Tu peux ainsi pré-remplir des valeurs qui sont identiques pour tous les objets de ce type. Tu peux adapter ces valeurs pré-remplies à tout moment, si cela est nécessaire.
**Page d'aperçu comme vue standard**.
Avec cette option, tu peux définir si, lors de l'appel d'un objet de ce type, la [page de présentation](../glossaire.md) doit être affichée ou seulement la catégorie **Général**. Par défaut, cette option est réglée sur "Non". Si elle est réglée sur "Oui", la catégorie spécifique sélectionnée précédemment sera automatiquement ajoutée à la page de résumé.
* **Catégories**
Dans ce choix, tu indiques ton type d'objet. Chaque [catégorie](../glossaire.md) dont tu coches la case sera disponible dans ton type d'objet. Dans la colonne de droite, tu peux définir quelles catégories doivent être affichées sur la page d'aperçu. Cette sélection n'est possible que si la page d'aperçu a été activée comme affichage standard. Les bandes hachurées permettent de définir l'ordre des catégories par drag'n'drop.
* **Description**
Ici, tu as la possibilité d'ajouter des remarques et des notes sur ton type d'objet.

Sobald deine Konfiguration abgeschlossen ist, kannst du über die Schaltfläche **Speichern** deine Einstellungen sichern. Dein eigener Objekttyp steht dir nun innerhalb der ausgewählten Objekttypgruppe zur Verfügung.

Dès que ta configuration est terminée, tu peux sauvegarder tes paramètres en cliquant sur le bouton **Enregistrer**. Ton propre type d'objet est maintenant disponible dans le groupe de types d'objets sélectionné.