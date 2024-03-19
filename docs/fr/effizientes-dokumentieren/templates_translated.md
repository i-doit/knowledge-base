<!-- TRANSLATED by md-translate -->
# Templates

# Templates

i-doit erlaubt das Erstellen von Objekten, welche als Vorlage für neue [Objekte](../grundlagen/struktur-it-dokumentation.md) dienen. Der Benutzer kann eine große Menge an Objekten, die identische [Attribute](../grundlagen/struktur-it-dokumentation.md) besitzen - zum Beispiel Server der gleichen Hardware - vereinfacht anlegen.

i-doit permet de créer des objets qui servent de modèles pour de nouveaux [objets](../bases/structure-it-documentation.md). L'utilisateur peut créer de manière simplifiée un grand nombre d'objets qui possèdent des [attributs](../grundlagen/struktur-it-dokumentation.md) identiques - par exemple des serveurs du même matériel.

## Aufruf

## Appel

Du findest die Template-Funktion in i-doit unter **Extras → CMDB → Templates**. Hier ist es möglich vorhandene Templates einzusehen und zu bearbeiten, neue Templates anzulegen und Objekte aus Templates zu erzeugen.

Tu trouveras la fonction Templates dans i-doit sous **Extras → CMDB → Templates**. Ici, il est possible de consulter et d'éditer les templates existants, de créer de nouveaux templates et de générer des objets à partir de templates.

[![templates-einsehen](../assets/images/de/effizientes-dokumentieren/templates/1-temp.png)](../assets/images/de/effizientes-dokumentieren/templates/1-temp.png)

[ ![consulter les templates](../assets/images/fr/documenter-efficacement/templates/1-temp.png)](../assets/images/fr/documenter-efficacement/templates/1-temp.png)

## Konfiguration

## Configuration

Unter **Verwaltung → Allgemeine Einstellungen → Template Konfiguration** können Einstellungen zu Templates getätigt werden. Mit der Aktivierung des Template-Filters ist es möglich, Templates in den [Objeklisten](../grundlagen/objekt-liste/index.md) anzuzeigen. Wenn du innerhalb einer Objektliste den Status-Filter auf Template stellst, werden dir hier alle Templates, die diesem [Objekttyp](../grundlagen/struktur-it-dokumentation.md) zugehörig sind, angezeigt.

Sous **Administration → Paramètres généraux → Configuration des templates**, il est possible d'effectuer des réglages concernant les templates. En activant le filtre des templates, il est possible d'afficher les templates dans les [listes d'objets](../bases/liste d'objets/index.md). Si tu définis le filtre d'état sur Template dans une liste d'objets, tous les templates appartenant à ce [type d'objet](../bases/structure-it-documentation.md) seront affichés ici.

[![templates-anzeigen](../assets/images/de/effizientes-dokumentieren/templates/2-temp.png)](../assets/images/de/effizientes-dokumentieren/templates/2-temp.png)

[ ![templates-annonces](../assets/images/fr/documenter-efficacement/templates/2-temp.png)](../assets/images/fr/documenter-efficacement/templates/2-temp.png)

## Erstellen eines Templates

## Création d'un modèle

Sobald du die Template-Funktion aufgerufen hast, kannst du unter **Neues Template erzeugen**im Baum-Menü auf der linken Seite ein Template erstellen. Im ersten Schritt wirst du aufgefordert festzulegen, welchem Objekttyp das Template angehören soll. Wähle diesen im Drop-Down-Menü aus und bestätige mit der Schaltfläche **Neue Vorlage erstellen**. Die nun folgende Konfiguration eines Templates ist identisch zur Erstellung eines regulären Objekts. Hinterlege alle Inhalte, die du später auf die Objekte übertragen möchtest und speichere deine Eingaben.

Une fois que tu as appelé la fonction de modèle, tu peux créer un modèle sous **Créer un nouveau modèle** dans le menu arborescent sur la gauche. Dans la première étape, il t'est demandé de définir le type d'objet auquel le modèle doit appartenir. Sélectionne-le dans le menu déroulant et confirme en cliquant sur le bouton **Créer un nouveau modèle**. La configuration d'un modèle qui suit est identique à la création d'un objet régulier. Enregistre tous les contenus que tu souhaites transférer plus tard sur les objets et enregistre tes saisies.

Alternativ kannst du innerhalb einer Objektliste über das Pfeil-Icon neben der Schaltfläche **Neu** die Konfiguration zur Erstellung eines Templates aufrufen.

Tu peux également appeler la configuration pour la création d'un modèle dans une liste d'objets en cliquant sur l'icône en forme de flèche à côté du bouton **Nouveau**.

[![templates-erstellen](../assets/images/de/effizientes-dokumentieren/templates/3-temp.png)](../assets/images/de/effizientes-dokumentieren/templates/3-temp.png)

[ ![création de templates](../assets/images/fr/documentation-efficace/templates/3-temp.png)](../assets/images/fr/documentation-efficace/templates/3-temp.png)

## Vorhandene Templates einsehen, bearbeiten und löschen

## Consulter, modifier et supprimer les modèles existants

In der Template-Funktion kannst du dir unter **Vorhandene Templates** im Baum-Menü auf der linken Seite alle bisher erstellten Templates anzeigen lassen. Um eines der Templates zu bearbeiten kannst du dieses anklicken. Wenn du die Checkbox eines oder mehrerer Templates aktivierst kannst du die ausgewählten Templates mit der Schaltfläche **Purge** vom System entfernen. Bitte sei dir sicher, dass du die ausgewählten Templates löschen möchtest, da gelöschte Templates nicht wiederhergestellt werden können.

Dans la fonction modèles, tu peux afficher tous les modèles créés jusqu'à présent sous **Templates existants** dans le menu arborescent sur le côté gauche. Pour modifier l'un des modèles, tu peux cliquer dessus. Si tu coches la case d'un ou de plusieurs templates, tu peux supprimer les templates sélectionnés du système en cliquant sur le bouton **Purge**. Sois sûr de vouloir supprimer les templates sélectionnés, car les templates supprimés ne peuvent pas être restaurés.

[![templates-entfernen](../assets/images/de/effizientes-dokumentieren/templates/4-temp.png)](../assets/images/de/effizientes-dokumentieren/templates/4-temp.png)

[ ![templates-entry](../assets/images/fr/documenter-efficacement/templates/4-temp.png)](../assets/images/fr/documenter-efficacement/templates/4-temp.png)

## Erzeugen von Objekten aus Templates

## Création d'objets à partir de templates

Verwende in der Template-Funktion **Objekt(e) anlegen**  im Baum-Menü auf der linken Seite um Objekte auf Basis deiner Templates zu generieren.

Utilise la fonction **Créer un/des objet(s)** dans le menu arborescent à gauche pour générer des objets sur la base de tes templates.

Hier wirst du zuerst aufgefordert, grundlegende Informationen zu deinen neuen Objekten anzugeben. Im ersten Schritt gilt es den Objekt-Titel sowie Objektyp deiner Objekte anzugeben. Da die Template-Funktion die gleichzeitige Erzeugung mehrerer Objekte erlaubt, kannst du ebenfalls festlegen, wie viele (identische) Objekte erstellt werden sollen. Wenn du dich dazu entscheidest, mehr als ein Objekt zu generieren, öffnet sich ein zusätzlicher Bereich, der dich auswählen lässt, ob du ein Zähler-Suffix verwenden möchtest. Hierbei ist es ebenfalls möglich die führenden Nullstellen und den Wert, mit dem die Zählung begonnen werden soll, anzugeben. Weiterhin lassen sich die Attribute **Einsatzzweck** und **Kategorie** der neuen Objekte bereits vorab angeben.

Ici, il t'est d'abord demandé d'indiquer des informations de base sur tes nouveaux objets. La première étape consiste à indiquer le titre et le type de tes objets. Comme la fonction de modèle permet de créer plusieurs objets en même temps, tu peux également définir combien d'objets (identiques) doivent être créés. Si tu décides de générer plus d'un objet, une zone supplémentaire s'ouvre pour te permettre de choisir si tu veux utiliser un suffixe de compteur. Dans ce cas, il est également possible d'indiquer les zéros de tête et la valeur à partir de laquelle le comptage doit commencer. En outre, il est possible d'indiquer au préalable les attributs **Utilisation** et **Catégorie** des nouveaux objets.

Im Abschnitt **Template(s) wählen** kannst du nun festlegen, welches Template oder welche Templates für die Erzeugung der Objekte verwendet werden sollen. Wähle die gewünschten Templates im Drop-Down-Menü aus und füge diese nacheinander über die Schaltfläche **Ausgewähltes Template verwenden** hinzu. Informationen mehrerer Templates werden in jedem Objekt kombiniert.

Dans la section **Sélectionner le(s) modèle(s)**, tu peux maintenant définir le ou les modèles à utiliser pour la création des objets. Sélectionne les templates souhaités dans le menu déroulant et ajoute-les les uns après les autres en cliquant sur le bouton **Utiliser le template sélectionné**. Les informations de plusieurs templates sont combinées dans chaque objet.

[![templates-objerzeugen](../assets/images/de/effizientes-dokumentieren/templates/5-temp.png)](../assets/images/de/effizientes-dokumentieren/templates/5-temp.png)

[ ![templates-objerzeugen](../assets/images/fr/documenter-efficacement/templates/5-temp.png)](../assets/images/fr/documenter-efficacement/templates/5-temp.png)

## Aufrufen der Template-Funktionen aus einer Objektliste

## Appel des fonctions du template à partir d'une liste d'objets

Du kannst die Funktionen zum Erstellen neuer Templates und zum erstellen von Objekten aus Templates auch über die Objektlisten aufrufen. Verwende hierfür den nach unten zeigenden Pfeil neben der Schaltfläche **Neu** um das Kontextmenü zu öffnen. Dieses enthält die entsprechenden Punkte, um direkt zum gewünschten Vorgang zu springen.

Tu peux également accéder aux fonctions de création de nouveaux modèles et de création d'objets à partir de modèles via les listes d'objets. Pour cela, utilise la flèche vers le bas à côté du bouton **Nouveau** pour ouvrir le menu contextuel. Celui-ci contient les points correspondants pour aller directement à l'opération souhaitée.

[![templates-einsehen](../assets/images/de/effizientes-dokumentieren/templates/6-temp.png)](../assets/images/de/effizientes-dokumentieren/templates/6-temp.png)

[ ![consulter les templates](../assets/images/fr/documenter-efficacement/templates/6-temp.png)](../assets/images/fr/documenter-efficacement/templates/6-temp.png)

## Default-Template in der Objekttyp-Konfiguration

## Modèle par défaut dans la configuration du type d'objet

In der [Objekttypkonfiguration](../grundlagen/benutzerdefinierte-objekttypen.md) kannst du ein Default-Template auswählen. Hier kann jedes von dir erstellte Template verwendet werden. Solltest du ein Default-Template angeben, werden alle neu erstellten Objekte gemäß dieser Vorlage vorbefüllt. Selbstverständlich kannst du Objekte, die auf diese Weise erstellt wurden, jederzeit anpassen und die vorbefüllten Werte ändern.

Dans la [configuration du type d'objet](../bases/typesd'objetsdéfinisparl'utilisateur.md), tu peux choisir un modèle par défaut. Tout modèle que tu as créé peut être utilisé ici. Si tu indiques un modèle par défaut, tous les nouveaux objets créés seront pré-remplis selon ce modèle. Bien entendu, tu peux à tout moment adapter les objets créés de cette manière et modifier les valeurs pré-remplies.

[![templates-default](../assets/images/de/effizientes-dokumentieren/templates/7-temp.png)](../assets/images/de/effizientes-dokumentieren/templates/7-temp.png)

[ ![templates-default](../assets/images/fr/documenter-efficacement/templates/7-temp.png)](../assets/images/fr/documenter-efficacement/templates/7-temp.png)