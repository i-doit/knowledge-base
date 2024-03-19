<!-- TRANSLATED by md-translate -->
# Datei und Ordnerstruktur eines Add-ons

# Structure du fichier et du dossier d'un add-on

Wie unter [Add-ons installieren, aktualisieren und aktivieren](add-ons-installieren-aktualisieren-und-entwickeln.md) beschrieben, muss sich ein Add-on bzw. dessen Code im eigenen Verzeichnis unter <i-doit>/src/classes/modules/<identifier> befinden. Theoretisch lässt sich innerhalb dieses Ordners eine beliebige Struktur anlegen. Wir haben folgende Struktur im i-doit-Team etabliert und raten dazu, diese auch für die eigene Entwicklung zu nutzen:

Comme décrit dans [Installer, mettre à jour et activer les add-ons](add-ons-installer-mettre à jour-et-développer.md), un add-on ou son code doit se trouver dans son propre répertoire sous <i-doit>/src/classes/modules/<identifier>. En théorie, il est possible de créer une structure quelconque à l'intérieur de ce répertoire. Nous avons établi la structure suivante au sein de l'équipe i-doit et conseillons de l'utiliser également pour le développement personnel :

[![dateiundstruktur-nutzen](../../assets/images/de/software-entwicklung/add-ons-entwickeln/datei-und-ordnerstruktur/1-ia.png)](../../assets/images/de/software-entwicklung/add-ons-entwickeln/datei-und-ordnerstruktur/1-ia.png)

[ ![utilisation de la structure des fichiers et des dossiers](../../assets/images/fr/software-entwicklung/add-ons-entwickeln/datei-und-ordnerstruktur/1-ia.png)](../../assets/images/fr/software-entwicklung/add-ons-wickeln/datei-und-ordnerstruktur/1-ia.png)

Grundsätzlich wird "PSR-4"-konformer PHP-Code unterhalb von "src" positioniert. "Legacy"-Klassen werden üblicherweise in jeweils eigenen Ordnern hinterlegt - bitte hierzu auch das Kapitel Autoloading beachten:

En principe, le code PHP conforme à la norme PSR-4 est placé sous "src". Les classes "Legacy" sont généralement placées dans leurs propres dossiers - veuillez consulter le chapitre Autoloading :

* **api/**
Legacy: Hier befinden sich die Model-Klassen für die API. Siehe auch [API erweitern](api-erweitern.md).
* **assets/**
Der "assets"-Ordner wird für Javascript, CSS und Bild-Dateien verwendet. Die Unterordner könnten demnach "js", "css" und "img" heißen.
* **auth/**
Legacy: Wird für sämtlichen Rechtesystem-Code verwendet. Siehe auch [Benutzerrechte im Add-on nutzen](benutzerrechte-im-add-on-nutzen.md).
* **example/**
Legacy: Dient als Beispiel für eigenen Code im "legacy"-Format.
* **install/**
Hier befinden sich Dateien, die zur Installation und/oder Aktualisierung eines Add-ons verwendet werden (update_data.xml, update_sys.xml und update_files.xml). Siehe auch [Add-ons installieren, aktualisieren und aktivieren](add-ons-installieren-aktualisieren-und-entwickeln.md).
* **lang/**
In diesem Ordner befinden sich Übersetzungen (de.inc.php und en.inc.php) für Deutsch und Englisch.
* **src/**
Dies ist der Ordner für Code im "PSR-4"-Format. Der Add-on-Namespace (hier: idoit\Module\Example) sollte auf diesen Ordner gelegt werden. Siehe auch [Routing und MVC](routing-und-mvc.md).
* **templates/**
Üblicherweise wird dieser Ordner für Smarty-Templates verwendet.
* **vendor/**
Ist ein optionales Verzeichnis, das von Composer benutzt wird. Ein Add-on kann beliebige Composer-Pakete mitliefern. Es ist allerdings darauf zu achten, keine Paket-Konflikte mit dem i-doit-Kern zu schaffen!
* **CHANGELOG**
Optionaler Changelog, der die Änderungen aller Add-on-Versionen auflisten sollte.
* **composer.json**
Von Composer erstellte Datei, die definiert, welche Third-Party-Pakete installiert werden sollten. Weitere Informationen sind auf [getcomposer.org](https://getcomposer.org/) nachzulesen. Diese Datei ist nur für Entwickler relevant und ist im finalen Add-on-Paket unnötig.
* **composer.lock**
Von Composer erstellte Datei, die den aktuell installierten Paket-Stand beinhaltet. Diese Datei sollte im Repository hinterlegt werden! Ebenso wie package.json ist diese Datei nur für Entwickler relevant und im finalen Paket unnötig.
* **init.php**
Die "init.php"-Datei ist notwendig, um diverse Vorbereitungen für das Add-on zu treffen; zum Beispiel werden hier Autoloader registriert und Konstanten definiert. Siehe auch [Bootstrapping eines Add-ons (init.php)](boostraping-eines-add-ons.md).
* **isys_module_example_autoload.class.php**
Diese Autoloader-Klasse ist notwendig, sobald Code im "legacy"-Format verwendet wird (z.B. API, Rechtesystem, Kategorien, ...). Siehe auch [Bootstrapping eines Add-ons (init.php)](boostraping-eines-add-ons.md).
* **isys_module_example.class.php**
Dies ist die "Basis"-Klasse für Add-ons. Sie ist zwingend erforderlich!
* **Makefile**
Hierbei handelt es sich um ein einfaches "Make"-Skript, um Add-on-ZIP-Pakete zu erstellen.
Intern wird die korrekte Struktur vorbereitet, Entwickler-Dateien (z.B. Makefile, package.json usw.) werden gelöscht und das ZIP, unter Berücksichtigung der VERSION, erstellt.
* **package.json**
Die "package.json"-Datei wird vorausgesetzt und beinhaltet wichtige Metainformationen zum Add-on - siehe auch [Metadaten eines Add-ons (package.json)](metadaten-eines-add-ons.md).
* **README.md**
Eine "README.md" soll generelle Informationen über das Add-on im Markdown-Format bereitstellen. Auch weiterführende Themen können behandelt werden. Es würde sich beispielsweise anbieten, Entwicklung-, Deployment- und Build-spezifische Informationen ebenfalls zu erfassen.
* **VERSION**
Eine einfache Datei ohne Endung, welche lediglich die aktuelle Version des Add-ons beinhaltet. Diese Datei ist optional, wird allerdings im **Makefile**-Skript verwendet.

* **api/**
Legacy : C'est ici que se trouvent les classes de modèles pour l'API. Voir aussi [étendre l'API](api-erweitern.md).
* *assets/**
Le dossier "assets" est utilisé pour les fichiers Javascript, CSS et images. Les sous-dossiers pourraient donc s'appeler "js", "css" et "img".
* **auth/**
Legacy : utilisé pour tout le code du système de droits. Voir aussi [Utiliser les droits d'utilisateur dans l'add-on](droits-utilisateur-utiliser-l'add-on.md).
* **exemple/**
Legacy : sert d'exemple pour le code propre au format "legacy".
* **install/**
Ici se trouvent les fichiers utilisés pour installer et/ou mettre à jour un add-on (update_data.xml, update_sys.xml et update_files.xml). Voir aussi [Installer, mettre à jour et activer les add-ons](add-ons-installer-mettre à jour-et-développer.md).
* **lang/**
Dans ce dossier se trouvent les traductions (de.inc.php et en.inc.php) pour l'allemand et l'anglais.
* **src/****
Il s'agit du dossier pour le code au format "PSR-4". L'add-on namespace (ici : idoit\Module\Example) doit être placé dans ce dossier. Voir aussi [Routing et MVC](routing-und-mvc.md).
* **templates/**
Habituellement, ce dossier est utilisé pour les templates Smarty.
* **vendor/**
Est un répertoire optionnel utilisé par Composer. Un add-on peut fournir n'importe quel package Composer. Il faut toutefois veiller à ne pas créer de conflits de paquets avec le noyau i-doit !
* **CHANGELOG**
Changelog optionnel qui devrait énumérer les modifications de toutes les versions de l'add-on.
* **composer.json**
Fichier créé par Composer, qui définit quels paquets tiers doivent être installés. De plus amples informations sont disponibles sur [getcomposer.org](https://getcomposer.org/). Ce fichier n'est pertinent que pour les développeurs et n'est pas nécessaire dans le package final du module complémentaire.
* **composer.lock**
Fichier créé par Composer qui contient l'état du paquet actuellement installé. Ce fichier devrait être déposé dans le référentiel ! Tout comme package.json, ce fichier ne concerne que les développeurs et est inutile dans le paquet final.
**init.php**
Le fichier "init.php" est nécessaire pour effectuer diverses préparations pour l'add-on ; par exemple, les autoloaders sont enregistrés ici et des constantes sont définies. Voir aussi [boostraping d'un add-on (init.php)](boostraping-un-add-ons.md).
* **isys_module_example_autoload.class.php**.
Cette classe autoloader est nécessaire dès que du code au format "legacy" est utilisé (par ex. API, système de droits, catégories, ...). Voir aussi [boostraping d'un add-ons (init.php)](boostraping-un-add-ons.md).
* **isys_module_example.class.php**.
Il s'agit de la classe "de base" pour les add-ons. Elle est obligatoire !
**Makefile**
Il s'agit ici d'un simple script "Make" pour créer des paquets ZIP d'add-on.
En interne, la structure correcte est préparée, les fichiers de développement (par ex. Makefile, package.json, etc.) sont supprimés et le ZIP, en tenant compte de la VERSION, est créé.
**package.json**
Le fichier "package.json" est supposé contenir des méta-informations importantes sur l'add-on - voir aussi [métadonnées d'un add-on (package.json)](metadaten-ein-add-ons.md).
* **README.md**
Un "README.md" doit fournir des informations générales sur l'add-on au format Markdown. Des thèmes plus avancés peuvent également être abordés. Il serait par exemple judicieux de saisir également des informations spécifiques au développement, au déploiement et à la construction.
* **VERSION**
Un simple fichier sans extension, qui contient uniquement la version actuelle de l'add-on. Ce fichier est facultatif, mais il est utilisé dans le script **Makefile**.
