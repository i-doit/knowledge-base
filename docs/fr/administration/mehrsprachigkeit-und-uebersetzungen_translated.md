<!-- TRANSLATED by md-translate -->
# Mehrsprachigkeit und Übersetzungen

# Multilinguisme et traductions

_Do you speak IT documentation?_ Englisch ist und bleibt die Standard-Sprache in der Informationstechnologie, doch Vielfalt belebt: Daher unterstützt i-doit mehrere Sprachen. In diesem Artikel zeigen wir unter anderem, wie sich bestehende Übersetzungen anpassen lassen.

Do you speak IT documentation?_ L'anglais est et reste la langue standard dans la technologie de l'information, mais la diversité anime : c'est pourquoi i-doit supporte plusieurs langues. Dans cet article, nous montrons entre autres comment adapter les traductions existantes.

## Unterstützte Sprachen

## Langues prises en charge

| Sprache | i-doit open | i-doit pro |
| --- | --- | --- |
| Englisch | ja  | ja  |
| Deutsch | nein | ja  |

| langue | i-doit open | i-doit pro |
| --- | --- | --- |
| anglais | oui | oui |
| allemand | non | oui |

Die Mehrsprachigkeit bezieht sich auf die [Web GUI von i-doit](../grundlagen/struktur-it-dokumentation.md). In Englisch gehalten sind der [Login](../grundlagen/erstanmeldung.md), das [Admin Center](../administration/admin-center.md), das [Setup](../installation/manuelle-installation/setup.md), der [Update-Assistent](../wartung-und-betrieb/update-einspielen.md) und das [Kommandozeilen-Tool Controller](../automatisierung-und-integration/cli/index.md).

Le multilinguisme se réfère à la [Web GUI d'i-doit](../bases/structure-it-documentation.md). Les éléments en anglais sont le [Login](../grundlagen/erstanmeldung.md), l'[Admin Center](../administration/admin-center.md), le [Setup](../installation/manuelle-installation/setup.md), l'[Assistant de mise à jour](../maintenance-et-exploitation/installation-de-mises-à-jour.md) et l'[outil de ligne de commande Controller](../automatisation-et-intégration/cli/index.md).

!!! info "Neue Sprachen unterstützen"
    Wie Sie andere Sprachen hinzufügen können finden Sie unter [Benutzerdefinierte Übersetzungen](../anwendungsfaelle/benutzerdefinierte-uebersetzungen.md)

! !! info "Soutenir de nouvelles langues".
    Pour savoir comment ajouter d'autres langues, voir [Traductions personnalisées](../anwendungsfaelle/benutzerdefinierte-uebersetzungen.md)

## Automatische Sprache je nach Browser-Einstellung

## Langue automatique selon les paramètres du navigateur

Webbrowser senden bei Anfragen an einen Webserver in der Regel die präferierten Sprachen des Benutzers mit. Diese werden von i-doit beim Login ausgewertet, sodass sich i-doit dem Benutzer automatisch in der passenden Sprache präsentiert. Dieses Verhalten kann unter **Verwaltung → Benutzereinstellungen → Benutzersprache** beeinflusst werden.

Les navigateurs Web envoient généralement les langues préférées de l'utilisateur lors des demandes à un serveur Web. Celles-ci sont évaluées par i-doit lors de la connexion, de sorte qu'i-doit se présente automatiquement à l'utilisateur dans la langue appropriée. Ce comportement peut être influencé sous **Administration → Paramètres utilisateur → Langue utilisateur**.

## Sprachwechsel

## Changement de langue

Jeder Benutzer ist in der Lage, während der Arbeit mit i-doit die Sprache zu wechseln. Dies geschieht in der Web GUI über die Länderflaggen, die oben rechts angezeigt werden.

Chaque utilisateur est en mesure de changer de langue pendant qu'il travaille avec i-doit. Cela se fait dans la Web GUI via les drapeaux des pays affichés en haut à droite.

[![Sprachwechsel](../assets/images/de/administration/mehrsprachigkeit-und-uebersetzungen/sprachwechsel.png)](../assets/images/de/administration/mehrsprachigkeit-und-uebersetzungen/sprachwechsel.png)

[ ![Changement de langue](../assets/images/fr/administration/plurilinguisme-et-traductions/changement-de-langue.png)](../assets/images/fr/administration/plurilinguisme-et-traductions/changement-de-langue.png)

## Sprache pro Benutzer

## Langue par utilisateur

[Beim ersten Anmelden in i-doit](../grundlagen/erstanmeldung.md) erhält der Benutzer automatisch die englische Oberfläche. Jeder Benutzer kann individuell einstellen, welche Sprache als Standard gesetzt werden soll. Dies geschieht unter **Verwaltung → Benutzereinstellungen → Benutzersprache**. Hier den richtigen Wert einzustellen ist wichtig, um beispielsweise [E-Mail-Benachrichtigungen](../auswertungen/benachrichtigungen.md) in der gewünschten Sprache zu erhalten, da die E-Mail-Vorlagen mehrsprachig sind.

[Lors de la première connexion à i-doit](../bases/connexion.md), l'utilisateur reçoit automatiquement l'interface en anglais. Chaque utilisateur peut définir individuellement quelle langue doit être définie par défaut. Cela se fait sous **Administration → Paramètres utilisateur → Langue utilisateur**. Il est important de définir ici la valeur correcte afin de recevoir par exemple les [notifications par e-mail](../évaluations/notifications.md) dans la langue souhaitée, car les modèles d'e-mail sont multilingues.

## Sprachkonstanten

## Constantes linguistiques

Innerhalb des Quellcodes und der Datenbanken werden zu übersetzende Texte durch sogenannte Sprachkonstanten repräsentiert. Beispiel für den Objekttyp **Raum**:

Au sein du code source et des bases de données, les textes à traduire sont représentés par ce que l'on appelle des constantes de langage. Exemple pour le type d'objet **Espace** :

| Sprachkonstante | Englisch | Deutsch |
| --- | --- | --- |
| LC__CMDB__OBJTYPE__ROOM | Room | Raum |

| constante linguistique | anglais | allemand |
| --- | --- | --- |
| LC__CMDB__OBJTYPE__ROOM | Room | Pièce |

Im Quellcode bzw. den Datenbanken steht lediglich die Sprachkonstante `LC__CMDB__OBJTYPE__ROOM`. Der Benutzer erhält allerdings in der Web GUI von i-doit die passende Übersetzung ("Room" oder "Raum"). Sprachkonstanten erkennt man daran, dass diese lediglich Großbuchstaben (A-Z), Unterstriche (_) und ggf. Zahlen (0-9) enthalten. Sie beginnen immer mit dem Prefix LC__.

Dans le code source ou les bases de données, seule la constante de langage `LC__CMDB__OBJTYPE__ROOM` est présente. L'utilisateur obtient toutefois la traduction appropriée ("Room" ou "Raum") dans l'interface utilisateur graphique Web d'i-doit. Les constantes de langue se reconnaissent au fait qu'elles ne contiennent que des lettres majuscules (A-Z), des traits de soulignement (_) et éventuellement des chiffres (0-9). Elles commencent toujours par le préfixe LC__.

Bei einem Server-Aufruf im Browser zieht i-doit Übersetzungstabellen heran. Diese befinden sich im Installationsverzeichnis von i-doit unter src/lang. Für jede Sprache existiert ein Kürzel (de für Deutsch, en für Englisch).

Lors d'un appel du serveur dans le navigateur, i-doit fait appel à des tables de traduction. Celles-ci se trouvent dans le répertoire d'installation d'i-doit sous src/lang. Il existe une abréviation pour chaque langue (de pour allemand, en pour anglais).

| Datei | Bemerkung | Update-sicher? |
| --- | --- | --- |
| de_custom.example.inc.php | Beispiel-Datei für benutzerdefinierte Anpassungen an der deutschen Sprache (wird für die Web GUI ignoriert) | nein |
| de_custom.inc.php | Benutzerdefinierte Anpassungen an der deutschen Sprache (optional) | ja  |
| de.inc.php | Deutsche Sprache | nein |
| en_custom.inc.php | Benutzerdefinierte Anpassungen an der englischen Sprache (optional) | ja  |
| en.inc.php | Englisch Sprache | nein |

| Fichier | Remarque | Sûr pour la mise à jour ? |
| --- | --- | --- |
| fichier d'exemple pour les adaptations personnalisées à la langue allemande (ignoré pour l'interface utilisateur Web) | non |
| fichier de personnalisation de la langue française (optionnel) | oui |
| fr.inc.php | langue française | non |
| en_custom.inc.php | Adaptations personnalisées à la langue anglaise (facultatif) | oui |
| en.inc.php | langue anglaise | non |

Achtung: Die Änderungen an den Dateien `src/lang/<Sprache>.inc.php` werden bei einem [Update](../wartung-und-betrieb/update-einspielen.md) überschrieben und sollten daher nicht angepasst werden. Stattdessen sollten die entsprechenden Übersetzungen [HIER](../anwendungsfaelle/benutzerdefinierte-uebersetzungen.md) verwenden oder die custom-Dateien angepasst werden. Alle Dateien enthalten PHP-Quellcode, der sich leicht anpassen lässt. Für jede Übersetzung schreibt man eine neue Zeile nach demselben Schema:

Attention : les modifications apportées aux fichiers `src/lang/<langue>.inc.php` sont écrasées lors d'une [mise à jour](../maintenance-et-exploitation/importer-une-mise-à-jour.md) et ne doivent donc pas être adaptées. Au lieu de cela, il faut utiliser les traductions correspondantes [ICI](../anwendungsfaelle/benutzerdefinierte-uebersetzungen.md) ou adapter les fichiers custom. Tous les fichiers contiennent du code source PHP qui peut être facilement adapté. Pour chaque traduction, on écrit une nouvelle ligne selon le même schéma :

```ini
$g_langcache['LC__EXAMPLE'] = 'Beispiel-Übersetzung';
```

Aus der Sprachkonstante `LC__EXAMPLE` wird somit `Beispiel-Übersetzung`.

La constante linguistique `LC__EXAMPLE` devient donc `Exemple de traduction`.

Die custom-Dateien eignen sich nicht nur dafür neue Übersetzungen einzuführen, sondern auch bestehende zu überschreiben.

Les fichiers custom ne servent pas seulement à introduire de nouvelles traductions, mais aussi à écraser les traductions existantes.

!!! success "Sprachen ausschließen"
    Damit i-doit lediglich in einer Sprache den Benutzern zur Verfügung steht, hilft es, die nicht benötigten Sprachdateien zu ersetzen. Um beispielsweise i-doit lediglich in Englisch anzubieten führt man folgende Aktionen auf der Kommandozeile aus:
    `shell cd /var/www/html/i-doit # Wechsel in das Installationsverzeichnis von i-doit (ggf. anpassen) cd src/lang/ # Wechsel in das Verzeichnis mit den Sprachdateien cp de.inc.php de.inc.php.bak # Man weiß ja nie ;-) cp en.inc.php de.inc.php # Deutsche durch englische Sprache ersetzen # Optional, wenn bereits Anpassungen vorgenommen wurden: #cp de_custom.inc.php de_custom.inc.php.bak #cp en_custom.inc.php de_custom.inc.php`
    Da diese Vorgehensweise nicht Update-sicher ist, sollte dies nach jedem Update wiederholt werden.

! !! success "Exclure les langues".
    Pour qu'i-doit ne soit disponible que dans une seule langue pour les utilisateurs, il est utile de remplacer les fichiers de langue inutiles. Par exemple, pour proposer i-doit uniquement en anglais, il faut effectuer les actions suivantes sur la ligne de commande :
    `shell cd /var/www/html/i-doit # Aller dans le répertoire d'installation d'i-doit (le modifier si nécessaire) cd src/lang/ # Aller dans le répertoire contenant les fichiers de langue cp de.inc.php de.inc.php.bak # On ne sait jamais ;-) cp en.inc.php de.inc.php # Remplacer le français par l'anglais # Optionnel si des adaptations ont déjà été faites : #cp de_custom.inc.php de_custom.inc.php.bak #cp en_custom.inc.php de_custom.inc.php`.
    Comme cette procédure n'est pas sûre pour les mises à jour, il faut la répéter après chaque mise à jour.

## Beispiele

## exemples

Prinzipiell lässt sich jeder Text in der Web GUI übersetzen. Um herauszufinden, welche Sprachkonstante verwendet wird, hilft es in vielen Fällen, in den Sprachkonstanten nach den Übersetzungen zu suchen.

En principe, tout texte peut être traduit dans l'interface utilisateur Web. Pour savoir quelle constante de langue est utilisée, il est souvent utile de rechercher les traductions dans les constantes de langue.

### Mehrsprachige Objekttyp gruppen

### Groupes de types d'objets multilingues

In der Mandanten-Datenbank stehen in der Tabelle `isys_obj_type_group` in der Spalte `isys_obj_type_group__title` die Sprachkonstanten. Wird eine neue [Objekttyp gruppe](../grundlagen/struktur-it-dokumentation.md) erstellt, kann hier in der Datenbank der Wert in eine Sprachkonstante umgewandelt werden. Eine bestehende Objekttypgruppe sollte nicht in der Datenbank anders benannt werden. Stattdessen sollte in den custom-Dateien die jeweilige Sprachkonstante neu übersetzt werden.

Dans la base de données du mandant, la table `isys_obj_type_group` contient les constantes de langue dans la colonne `isys_obj_type_group__title`. Si un nouveau [type d'objet groupe](../grundlagen/struktur-it-dokumentation.md) est créé, la valeur peut être convertie ici en une constante de langue dans la base de données. Un groupe de types d'objets existant ne devrait pas être nommé différemment dans la base de données. Au lieu de cela, la constante de langue correspondante devrait être retraduite dans les fichiers custom.

### Mehrsprachige Objekttypen

### Types d'objets multilingues

Unter **Verwaltung → Datenstruktur → Objekttypen → [Objekttyp gruppe] → [Objekttyp] → Sprachkonstante / Bezeichnung** kann ein [Objekttyp](../grundlagen/struktur-it-dokumentation.md) mehrsprachig angegeben werden. Dies gilt sowohl für Standard-, als auch für [benutzerdefinierte Objekttypen](../grundlagen/benutzerdefinierte-objekttypen.md).

Sous **Administration → Structure de données → Types d'objets → [type d'objet groupe] → [type d'objet] → Constante de langue / désignation**, un [type d'objet](../bases/structure-it-documentation.md) peut être indiqué en plusieurs langues. Cela vaut aussi bien pour les types d'objets standard que pour les [types d'objets définis par l'utilisateur](../bases/typesd'objetsdéfinisparl'utilisateur.md).

### Mehrsprachige Objekt-Titel

### Titres d'objets multilingues

Mehrsprachige [Objekt-Titel](../grundlagen/struktur-it-dokumentation.md) sind nicht möglich. Dies würde eine [eindeutige Referenzierung](../grundlagen/eindeutige-referenzierungen.md) behindern.

Les [titres d'objets](../bases/structure-it-documentation.md) multilingues ne sont pas possibles. Cela empêcherait un [référencement univoque](../bases/références-univoques.md).

### Mehrsprachige Kategorien

### Catégories multilingues

Handelt es sich um eine Standard-[Kategorie](../grundlagen/struktur-it-dokumentation.md), kann die Sprachkonstante in den custom-Dateien überschrieben werden.

S'il s'agit d'une [catégorie] standard(../bases/structure-it-dokumentation.md), la constante de langue peut être remplacée dans les fichiers custom.

Bei [benutzerdefinierten Kategorien](../grundlagen/benutzerdefinierte-kategorien.md) wird der Kategorie-Titel mit einer Sprachkonstante belegt und diese in den custom-Dateien übersetzt.

Pour les [catégories personnalisées](../bases/catégories-personnalisées.md), une constante de langue est attribuée au titre de la catégorie et traduite dans les fichiers custom.

### Mehrsprachige Attribute

### Attributs multilingues

Die Standard-[Attribute](../grundlagen/struktur-it-dokumentation.md) werden über die Sprachdateien übersetzt. Die Sprachkonstanten befinden sich im Quellcode und sollten daher nicht angepasst werden.

Les [attributs] standard(../grundlagen/struktur-it-dokumentation.md) sont traduits via les fichiers de langue. Les constantes de langue se trouvent dans le code source et ne doivent donc pas être adaptées.

Attribute in benutzerdefinierten Kategorien können mit einer Sprachkonstante übersetzt werden.

Les attributs des catégories définies par l'utilisateur peuvent être traduits à l'aide d'une constante de langue.