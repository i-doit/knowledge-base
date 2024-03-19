<!-- TRANSLATED by md-translate -->
# Vorgehensweise mit VIVA

# Procédure avec VIVA

## IT-Grundschutz-Kataloge verwalten

## Gérer les catalogues de protection informatique de base

### Kataloge importieren

### Importer des catalogues

Der erste Schritt hin zur Dokumentation ist der Import der aktuellen IT-Grundschutz-Kataloge. Dazu wird bereits beim ersten Aufruf von VIVA unter **Extras → VIVA** aufgefordert. Es stehen verschiedene Kataloge zur Auswahl:

La première étape vers la documentation est l'importation des catalogues IT-Grundschutz actuels. Pour cela, il est demandé dès le premier appel de VIVA sous **Extras → VIVA**. Différents catalogues sont disponibles :

* Ergänzungslieferung (EL) 15 von 2016 in Deutsch
* EL 14 von 2014 in Deutsch
* EL 13 von 2013 in Deutsch
* EL 13 von 2013 in Englisch
* EL 12 von 2011 in Deutsch und
* EL 11 von 2009 in Deutsch.

* Livraison complémentaire (EL) 15 de 2016 en allemand
* EL 14 de 2014 en allemand
* EL 13 de 2013 en allemand
* EL 13 de 2013 en anglais
* EL 12 de 2011 en allemand et
* EL 11 de 2009 en allemand.

Die Kataloge stehen auf der Website des BSI als Download zur Verfügung. Je nach EL sind gegebenenfalls kleinere Zwischenschritte nötig, um die Kataloge in das richtige Dateiformat zu konvertieren.

Les catalogues sont disponibles en téléchargement sur le site web du BSI. Selon l'EL, de petites étapes intermédiaires peuvent être nécessaires pour convertir les catalogues dans le bon format de fichier.

Für den Import sind Zwischenschritte nötig, weil das vom BSI angebotene Format nicht direkt von VIVA verarbeitet werden kann. Auf der BSI-Website stehen die Kataloge zum Download. Die weiteren Schritte:

Des étapes intermédiaires sont nécessaires pour l'importation, car le format proposé par le BSI ne peut pas être traité directement par VIVA. Les catalogues peuvent être téléchargés sur le site web du BSI. Les étapes suivantes :

1. Nach dem Download: ZIP-Datei entpacken
2. Selbstextrahierendes Archiv (.exe) entpacken
3. In Ordner GSHB wechseln; dort ist der Unterordner DE vorhanden
4. Ordner DE in el15de umbenennen
5. Ordner el15de im ZIP-Format packen

1. après le téléchargement : Décompresser le fichier ZIP
2. décompresser l'archive auto-extractible (.exe)
3. aller dans le dossier GSHB ; le sous-dossier DE y est présent
4. renommer le dossier DE en el15de
5. compacter le dossier el15de au format ZIP

[![Kataloge importieren](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/1-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/1-vv.png)

[ ![Importer des catalogues](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/1-vv.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/1-vv.png)

Die ZIP-Datei kann nun von VIVA verarbeitet werden. Im Menüpunkt _Kataloge_ ist der Button _Importieren_ anzuklicken. Es erscheint ein Dialogfeld, in dem die gewünschte EL und die entsprechende ZIP-Datei auszuwählen sind. Bestätigt wird die Auswahl durch Klick auf _Import starten_. Der Import kann mehrere Minuten in Anspruch nehmen und solte nicht unterbrochen werden.

Le fichier ZIP peut maintenant être traité par VIVA. Dans le point de menu _Catalogues_, il faut cliquer sur le bouton _Importer_. Une boîte de dialogue apparaît, dans laquelle il faut sélectionner l'EL souhaitée et le fichier ZIP correspondant. La sélection est confirmée en cliquant sur _Lancer l'importation_. L'importation peut prendre plusieurs minutes et ne doit pas être interrompue.

Nach dem erfolgreichen Import erscheint die EL auf der geladenen Seite und kann verwendet werden. Sollen weitere ELs genutzt werden, sind die letzten Schritte zu wiederholen.

Une fois l'importation réussie, la PC apparaît sur la page chargée et peut être utilisée. Si d'autres EL doivent être utilisées, il faut répéter les dernières étapes.

[![Importierte Kataloge im Menübaum](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/2-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/2-vv.png)

[ ![Catalogues importés dans l'arborescence du menu](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/2-vv.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/2-vv.png)

### Kataloge anpassen

### Personnaliser les catalogues

IT-Grundschutz-Kataloge können individuell angepasst werden. So können neue Bausteine, Gefährdungen und Maßnahmen angelegt, bestehende angepasst oder gelöscht werden.

Les catalogues IT-Grundschutz peuvent être personnalisés. Il est ainsi possible de créer de nouveaux blocs, menaces et mesures, d'adapter ou de supprimer des blocs existants.

Ebenso ist die Zuordnung von Gefährdungen und Maßnahmen zu Bausteinen möglich. Die Angabe einer Qualifizierungsstufe bei einer zugeordneten Maßnahme wird berücksichtigt. Weiterhin können Sie die zu den jeweiligen Maßnahmen passenden Prüffragen einsehen, ergänzen und bearbeiten.

De même, il est possible d'affecter des dangers et des mesures à des modules. L'indication d'un niveau de qualification pour une mesure affectée est prise en compte. En outre, il est possible de consulter, de compléter et de modifier les questions de contrôle correspondant à chaque mesure.

!!! attention "Es sind die Hinweise im BSI-Standard 100-2 zu beachten, falls von den mitgelieferten Katalogen abgewichen wird."

! !! attention "Il convient de respecter les indications de la norme BSI 100-2 si l'on s'écarte des catalogues fournis".

## Informationsverbünde modellieren

## Modéliser des réseaux d'information

Unter dem Menüpunkt _Informationsverbünde_ können einer oder mehrere Informationsverbünde angelegt werden. Sie stellen den Ausgangspunkt für die tiefer greifende Dokumentation dar. Beim Anlegen ist darauf zu achten, welche IT-Grundschutz-Kataloge auf den Informationsverbund angewendet werden sollen.

Sous l'option de menu _Groupes d'information_, il est possible de créer un ou plusieurs groupes d'information. Ils constituent le point de départ d'une documentation plus approfondie. Lors de la création, il faut faire attention aux catalogues IT-Grundschutz qui doivent être appliqués au réseau d'information.

[![Informationsverbund erstellen](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/3-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/3-vv.png)

[ ![Créer un réseau d'information](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/3-vv.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/3-vv.png)

Durch das Anlegen eines neuen Informationsverbunds wird automatisch eine Zielgruppe mit derselben Bezeichnung und passendem Zielobjekt angelegt. Auf diese Zielgruppe werden die Bausteine der Schicht 1 _Übergreifende Aspekte_ angewendet. Ebenso werden die [Schutzbedarfskategorien](#schutzbedarfskategorien-definieren) mit den Beispielen aus dem BSI-Standard 100-2 ausgefüllt.

La création d'un nouveau réseau d'information entraîne automatiquement la création d'un groupe cible avec la même désignation et l'objet cible correspondant. Les éléments de la couche 1 _Aspects généraux_ sont appliqués à ce groupe cible. De même, les [catégories de besoins de protection](#catégories-debesoin-deprotection-définir) sont remplies avec les exemples de la norme BSI 100-2.

## Zielgruppen anlegen

## Créer des groupes cibles

In Zielgruppen werden sich ähnelnde Zielobjekte zu Gruppen zusammengefasst. Dieser Vorgang gehört zur Strukturanalyse (Siehe BSI-Standard 100-2, Kapitel 4.2.). Zielgruppen erscheinen im Menübaum unterhalb der fünf Schichten eines Informationsverbunds. Jede Zielgruppe wird beim Anlegen zunächst einer der folgenden Schichten zugeordnet:

Dans les groupes cibles, les objets cibles qui se ressemblent sont rassemblés en groupes. Ce processus fait partie de l'analyse structurelle (voir norme BSI 100-2, chapitre 4.2.). Les groupes cibles apparaissent dans l'arborescence des menus en dessous des cinq couches d'un réseau d'information. Chaque groupe cible est d'abord attribué à l'une des couches suivantes lors de sa création :

1. Übergreifende Aspekte,
2. Infrastruktur,
3. IT-Systeme,
4. Netze und
5. Anwendungen.

1. aspects transversaux,
2. l'infrastructure,
3. systèmes informatiques,
4. réseaux et
5. applications.

[![Zielgruppe erstellen](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/4-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/4-vv.png)

[ ![Créer un groupe cible](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/4-vv.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/4-vv.png)

Die Schichtzugehörigkeit kann durch Zuordnen von Bausteinen aus anderen Schichten erweitert werden. Der Informationsverbund selbst ist der 1. Schicht zugeordnet, was automatisch beim Anlegen eines neuen Informationsverbunds geschieht. Eine Ausnahme bildet der [Wechsel vom alten Modul (Migration)](#migrierenvombisherigen-itgs-modul): Dort wird die Schichtzuordnung anhand der zugeordneten Bausteine vorgenommen.

L'appartenance à une couche peut être élargie par l'attribution de blocs de construction d'autres couches. L'association d'informations elle-même est attribuée à la 1ère couche, ce qui se fait automatiquement lors de la création d'une nouvelle association d'informations. Une exception est le [changement de l'ancien module (migration)](#migrierenvombisherigen-itgs-modul) : Dans ce cas, l'attribution des couches se fait sur la base des modules attribués.

[![Zielgruppe R 2 erscheint in 2 Schichten.](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/5-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/5-vv.png)

[ ![Le groupe cible R 2 apparaît en 2 couches.](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/5-vv.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/5-vv.png)

Zielgruppen der Schichten 4 _Netze_ und 5 _Anwendungen_ verhalten sich unterschiedlich zu denjenigen der übrigen Schichten: Zielgruppen der Schicht 4 enthalten keine [Zielobjekte](#zielobjekte-zuordnen), sondern bestehen aus der Verknüpfung aus zwei Zielgruppen, was im Punkt _Kommunikationsverbindung_ dokumentiert wird. Anstatt zwei Zielgruppen zu verknüpfen, kann alternativ eine Gruppe mit etwas außerhalb des Informationsverbunds stehendem verknüpft werden. Beispiel: Die Zielgruppe ist mit dem Internet verknüpft.

Les groupes cibles des couches 4 _Réseaux_ et 5 _Applications_ se comportent différemment de ceux des autres couches : Les groupes cibles de la couche 4 ne contiennent pas d'[objets cibles](#attribuerobjets-cibles), mais consistent en la liaison de deux groupes cibles, ce qui est documenté dans le point _Lien de communication_. Au lieu de relier deux groupes cibles, il est également possible de relier un groupe à quelque chose qui se trouve en dehors du réseau d'information. Exemple : le groupe cible est lié à Internet.

[![Zielgruppe der Schicht 4 bearbeiten](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/6-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/6-vv.png)

[ ![Modifier le groupe cible de la couche 4](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/6-vv.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/6-vv.png)

Zielgruppen der Schicht 5 werden um die Art der Information, die sie verarbeiten, erweitert. VIVA bringt bereits einige Arten mit, die nachbearbeitet werden können (und auch sollten). Wichtig ist hier die Angabe, ob personenbezogene Daten verarbeitet werden, weil diese Information im weiteren Verlauf immer wieder Verwendung findet. Diese Art ist daher auch nicht entfernbar.

Les groupes cibles de la couche 5 sont complétés par le type d'informations qu'ils traitent. VIVA apporte déjà quelques types qui peuvent (et devraient) être traités ultérieurement. Il est important d'indiquer ici si des données à caractère personnel sont traitées, car cette information sera toujours utilisée par la suite. Ce type ne peut donc pas être supprimé.

[![Zielgruppe der Schicht 5 bearbeiten](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/7-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/7-vv.png)

[ ![Modifier le groupe cible de la couche 5](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/7-vv.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/7-vv.png)

## Zielobjekte zuordnen

## Assigner des objets cibles

Innerhalb von Zielgruppen werden Zielobjekte bestimmt. Eine Ausnahme stellen die [Zielgruppen](#zielgruppen-anlegen) der Schicht 4 _Netze_ dar. Dies ist Teil der Strukturanalyse. VIVA ist an dieser Stelle eng mit den CMDB-Daten aus i-doit verzahnt. Über den aus i-doit bekannten Objekt-Browser werden neue Zielobjekte ausgewählt.

Des objets cibles sont définis à l'intérieur des groupes cibles. Les [groupes cibles](#créer-groupes-cibles) de la couche 4 _Réseaux_ constituent une exception. Ceci fait partie de l'analyse structurelle. A ce niveau, VIVA est étroitement lié aux données CMDB d'i-doit. Les nouveaux objets cibles sont sélectionnés via le navigateur d'objets connu d'i-doit.

[![Zielobjekte auflisten](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/8-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/8-vv.png)

[ ![Lister les cibles](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/8-vv.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/8-vv.png)

Die Verzahnung mit den CMDB-Daten spiegelt sich an weiteren Stellen wieder. Überall dort, wo es sinnvoll erscheint, können beispielsweise Kontakte (Personen, Personengruppen, Organisationen) verknüpft werden.

L'imbrication avec les données CMDB se reflète à d'autres endroits. Partout où cela semble judicieux, il est par exemple possible de relier des contacts (personnes, groupes de personnes, organisations).

## Zielgruppenvererbung

## Héritage du groupe cible

Zielobjekte erben automatisch die Eigenschaften ihrer Zielgruppe, sodass keine weiteren Anpassungen nötig sind. Soweit die Theorie. Die Praxis hat jedoch gezeigt, dass einige Eigenschaften nicht immer synchron zu allen Zielobjekten gleichzeitig passen.

Les objets cibles héritent automatiquement des caractéristiques de leur groupe cible, de sorte qu'aucune autre adaptation n'est nécessaire. Voilà pour la théorie. La pratique a toutefois montré que certaines propriétés ne conviennent pas toujours de manière synchrone à tous les objets cibles en même temps.

Das betrifft vor allem die [Umsetzung von Maßnahmen](#massnahmenumsetzen). Daher können innerhalb eines Zielobjekts einige wenige von der Zielgruppe abweichende Eigenschaften festgehalten werden, um beispielsweise das Datum der Umsetzung, das gegebenenfalls differieren darf, zu dokumentieren.

Cela concerne surtout la [mise en œuvre des mesures](#mettreenœuvredesmesures). C'est pourquoi, au sein d'un objet cible, il est possible de consigner quelques caractéristiques différentes du groupe cible, par exemple pour documenter la date de mise en œuvre, qui peut éventuellement être différente.

!!! attention "Die Referenzdokumente beachten die Vererbung nicht, sondern ziehen die Informationen aus den Zielgruppen und nicht aus den Zielobjekten."

! !! attention "Les documents de référence ne tiennent pas compte de l'héritage, mais tirent les informations des groupes cibles et non des objets cibles".

## Schutzbedarfskategorien definieren

## Définir les catégories de besoins de protection

Unterhalb eines Informationsverbunds erscheint im Menübaum der Punkt _Schutzbedarfskategorien_. Laut BSI-Standard 100-2, Kapitel 4.3.1 werden an dieser Stelle die Schadensszenarien mit Hilfe der Schutzbedarfskategorien definiert. Beim Anlegen eines Informationsverbunds werden die Beispiele, die im Standard genannt werden, übernommen und sollten an die eigene Organisation angepasst werden.

Sous un réseau d'information apparaît dans l'arborescence du menu le point _Catégories de besoins de protection_. Selon la norme BSI 100-2, chapitre 4.3.1, les scénarios de dommages sont définis à cet endroit à l'aide des catégories de besoins de protection. Lors de la création d'un réseau d'information, les exemples cités dans la norme sont repris et devraient être adaptés à la propre organisation.

[![Schutzbedarfskategorie bearbeiten](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/9-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/9-vv.png)

[ ![Modifier la catégorie de protection requise](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/9-vv.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/9-vv.png)

## Schutzbedarf festlegen

## Définir le besoin de protection

Als Teil der Schutzbedarfsfeststellung wird der Schutzbedarf der einzelnen [Zielgruppen](#zielgruppen-anlegen) festgestellt. (Siehe BSI-Standard 100-2, Kapitel 4.3.2 bis 4.3.5.) Daher sind die entsprechenden Formularfelder innerhalb einer Zielgruppe zu finden.

Dans le cadre de la détermination des besoins de protection, les besoins de protection de chaque [groupe cible](#groupe-cible-créer) sont déterminés. (Voir norme BSI 100-2, chapitres 4.3.2 à 4.3.5.) C'est pourquoi les champs de formulaire correspondants se trouvent à l'intérieur d'un groupe cible.

[![Schutzbedarf bearbeiten](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/10-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/10-vv.png)

[ ![Modifier la protection requise](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/10-vv.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/10-vv.png)

Eine Besonderheit gilt in der Schicht 4 _Netze_: Der Schutzbedarf der Kommunikationsverbindungen richtet sich nach der zugewiesenen Kritikalität.

Une particularité s'applique à la couche 4 _Réseaux_ : le besoin de protection des liaisons de communication est fonction de la criticité attribuée.

[![Schutzbedarf einer Kommunikationsverbindung bearbeiten](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/11-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/11-vv.png)

[ ![Modifier les besoins de protection d'une connexion de communication](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/11-vv.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/11-vv.png)

## Bausteine zuordnen

## Affecter des blocs

Den [Zielgruppen](#zielgruppen-anlegen) werden Bausteine aus den IT-Grundschutz-Katalogen zugeordnet. (Siehe BSI-Standard 100-2, Kapitel 4.4.) Bausteine enthalten Gefährdungen und Maßnahmen inklusive derer Qualifizierungsstufen, die VIVA automatisch bei einer Bausteinzuordnung berücksichtigt.

Les [groupes cibles](#créer-groupes-cibles) se voient attribuer des blocs issus des catalogues IT-Grundschutz. (Voir norme BSI 100-2, chapitre 4.4.) Les blocs contiennent des dangers et des mesures, y compris leurs niveaux de qualification, que VIVA prend automatiquement en compte lors d'une affectation de bloc.

[![Bausteine einer Zielgruppe zuordnen](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/12-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/12-vv.png)

[ ![Affecter des éléments à un groupe cible](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/12-vv.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/12-vv.png)

Werden Bausteine aus einer anderen Schicht als der der Zielgruppe zugeordneten Schicht ausgewählt, führt dies dazu, dass diese Zielgruppe auch dieser anderen Schicht zugeordnet wird. Im Menübaum taucht diese Gruppe somit in mehreren Schichten gleichzeitig auf.

Si des blocs sont sélectionnés dans une autre couche que celle affectée au groupe cible, cela a pour conséquence que ce groupe cible est également affecté à cette autre couche. Dans l'arborescence des menus, ce groupe apparaît donc simultanément dans plusieurs couches.

Beim Anlegen eines neuen [Informationsverbunds](#informationsverbuende-modellieren) werden der automatisch miterstellten Zielgruppe sämtliche Bausteine der Schicht 1 _Übergreifende Aspekte_ zugeordnet.

Lors de la création d'un nouveau [réseau d'information](#modélisation-réseau d'information), tous les blocs de la couche 1 _Aspects généraux_ sont attribués au groupe cible créé automatiquement.

## Maßnahmen umsetzen

## Mettre en œuvre des mesures

Maßnahmen sind per Definition darauf ausgerichtet, umgesetzt zu werden, um identifizierten Gefährdungen entgegen zu wirken. Anhand der Qualifizierungsstufe, die jede verknüpfte Maßnahme erhält, ist eine Priorisierung möglich. (Siehe BSI-Standard 100-2, Kapitel 4.4 und 4.5.)

Par définition, les mesures sont conçues pour être mises en œuvre afin de contrer les dangers identifiés. Le niveau de qualification attribué à chaque mesure associée permet d'établir des priorités. (Voir norme BSI 100-2, chapitres 4.4 et 4.5).

[![Zugeordnete Maßnahmen auflisten](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/13-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/13-vv.png)

[ ![Lister les mesures attribuées](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/13-vv.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/13-vv.png)

Bei einem Klick auf eine verknüpfte Maßnahme unterhalb von einem einer [Zielgruppe](#zielgruppen-anlegen) [zugeordneten Baustein](#bausteine-zuordnen), kann der Status ihrer Umsetzung im Detail dokumentiert werden.

En cliquant sur une mesure liée en dessous d'un [groupe cible](#créer-groupe-cible) [module affecté](#affecter-module), le statut de sa mise en œuvre peut être documenté en détail.

[![Umsetzung einer Maßnahme dokumentieren](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/14-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/14-vv.png)

[ ![Documenter la mise en œuvre d'une mesure](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/14-vv.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/14-vv.png)

## Prüffragen beantworten

## Répondre aux questions de contrôle

In der Regel gehören zu Maßnahmen eine Reihe von Prüffragen, die als Checkliste zum Abhaken zu verstehen sind. Alle Fragen können entweder mit "ja" oder mit "nein" beantwortet werden.

En règle générale, les mesures sont accompagnées d'une série de questions de contrôle qui doivent être considérées comme une liste de contrôle à cocher. Il est possible de répondre à toutes les questions par "oui" ou par "non".

Die in den Katalogen mitgelieferten Prüffragen werden bereits beim [Import](#kataloge-importieren) berücksichtigt und werden [innerhalb der Maßnahmen](#kataloge-anpassen) angezeigt. Zudem können diese bearbeitet, gelöscht oder durch neue ergänzt werden.

Les questions de contrôle fournies dans les catalogues sont déjà prises en compte lors de l'[importation](#importer-catalogues) et sont affichées [au sein des mesures](#adapter-catalogues). De plus, elles peuvent être modifiées, supprimées ou complétées par de nouvelles.

[![Prüffragen zu einer Maßnahme beantworten](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/15-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/15-vv.png)

[ ![Répondre aux questions de contrôle sur une intervention](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/15-vv.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/15-vv.png)

Die Checklisten, die sich aus den Prüffragen zusammensetzen, sind innerhalb von [Zielgruppen](#zielgruppen-anlegen) [zugeordneten Maßnahmen](#massnahmen-umsetzen) verfügbar.

Les listes de contrôle, composées des questions de contrôle, sont disponibles au sein de [groupes cibles](#créer-groupes-cibles) [mesures attribuées](#mettre-en-œuvre-mesures).

## Ergänzende Sicherheitsanalyse durchführen

## Effectuer une analyse de sécurité complémentaire

Die ergänzende Sicherheitsanalyse (Siehe BSI-Standard 100-2, Kapitel 4.6.) wird für jede [Zielgruppe](#zielgruppen-anlegen) durchgeführt. Ob dieser Schritt überhaupt nötig ist, erkennt VIVA selbstständig anhand der Daten aus der Schutzbedarfsfeststellung (der Kommunikationsverbindungen) und der Angabe, ob über diese Angaben hinaus eine ergänzende Sicherheitsanalyse nötig ist.

L'analyse de sécurité complémentaire (voir norme BSI 100-2, chapitre 4.6.) est effectuée pour chaque [groupe cible](#créer-groupe-cible). VIVA reconnaît de lui-même si cette étape est nécessaire en se basant sur les données de l'évaluation des besoins de protection (des connexions de communication) et en indiquant si une analyse de sécurité complémentaire est nécessaire en plus de ces données.

[![Ergänzende Sicherheitsanalyse bearbeiten](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/16-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/16-vv.png)

[ ![Modifier l'analyse de sécurité complémentaire](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/16-vv.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/procédure/16-vv.png)