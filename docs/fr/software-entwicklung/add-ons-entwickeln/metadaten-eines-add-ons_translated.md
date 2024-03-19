<!-- TRANSLATED by md-translate -->
# Metadaten eines Add-ons

# Métadonnées d'un add-on

Die package.json-Datei kann in etwa mit einer composer.json verglichen werden. Der Inhalt dieser Datei gibt Aufschluss über die Inhalte des Add-ons, die Version und Abhängigkeiten.

Le fichier package.json peut être comparé à un composer.json. Le contenu de ce fichier donne des informations sur le contenu du module complémentaire, la version et les dépendances.

Hier finden wir unter anderem den Add-on-Namen, Identifikator, Autor, Beschreibung und Version. Der Inhalt der Datei kann folgendermaßen aussehen:

Nous y trouvons entre autres le nom du module complémentaire, l'identifiant, l'auteur, la description et la version. Le contenu du fichier peut se présenter comme suit :

```
{
    "title": "Example add-on",
    "name": "LC__MODULE__EXAMPLE",
    "identifier": "example",
    "author": "synetics GmbH",
    "version": "1.0",
    "description": "Example add-on for i-doit",
    "type": "addon",
    "icon": "images/icons/silk/information.png",
    "files": [
        "init.php",
        "isys_module_example.class.php",
        "isys_module_example_autoload.class.php",
        "package.json"
    ],
    "sql-tables": [],
    "requirements": {
    "core": ">= 1.11"
    },
    "dependencies": {
        "php": [
            "json",
            "mysqli"
        ]
    }
}
```

## Title

## Titre

Der hier hinterlegte String wird im Admin-Center dargestellt. Es ist hier nicht nötig, eine Sprachkonstante zu verwenden.

La chaîne déposée ici est représentée dans le centre d'administration. Il n'est pas nécessaire ici d'utiliser une constante de langage.

## Name

## Nom

Die hinterlegte Sprachkonstante wird als Name des Add-ons verwendet, wenn dieses in i-doit dargestellt wird (zum Beispiel im Extras-Menü oder dem Rechtesystem).

La constante de langue déposée est utilisée comme nom de l'add-on lorsque celui-ci est représenté dans i-doit (par exemple dans le menu Outils ou le système de droits).

## Identifier

## Identifiant

Der Identifier ist mit die wichtigste Information der package.json, da dieser für eine Menge interner Logik und für die Identifikation des Add-ons benötigt wird. Detaillierte Informationen befinden sich im Artikel [Add-ons entwickeln](index.md).

L'identifiant est l'une des informations les plus importantes du package.json, car il est nécessaire pour une grande partie de la logique interne et pour l'identification du module complémentaire. Des informations détaillées se trouvent dans l'article [Développer des add-ons](index.md).

## Author

## Author

Die hier hinterlegte Information wird im Admin-Center dargestellt.

Les informations déposées ici sont présentées dans le centre d'administration.

## Version

## version

Die hier hinterlegte Version wird im Admin-Center dargestellt. Weitere Logik ist damit nicht verbunden.

La version déposée ici est affichée dans le centre d'administration. Elle n'est pas liée à une logique supplémentaire.

## Description

## Description

Hier kann eine optionale Beschreibung des Add-ons vergeben werden. Üblicherweise ist diese Beschreibung in Englisch verfasst und beschränkt sich auf 255 Zeichen.

Une description facultative de l'add-on peut être attribuée ici. En général, cette description est rédigée en anglais et se limite à 255 caractères.

## Type

## Type

Als "type" muss "addon" angegeben werden. Andere Typen dürfen nur von Kern-Komponenten verwendet werden.

Le "type" doit être "addon". Les autres types ne peuvent être utilisés que par les composants principaux.

## Icon

## Icône

Hier kann der Pfad für ein (optionales) Icon angegeben werden. Dies wird zum Beispiel im Extras-Menü dargestellt wird. Üblicherweise hat ein solches Icon die Abmessungen von 16x16 Pixel. Das Format wird zwar nicht vorgeschrieben, wir empfehlen aber die Nutzung von PNG. Der anzugebende Pfad ist relativ ab dem i-doit-Wurzelverzeichnis anzugeben.

Le chemin d'accès à une icône (optionnelle) peut être indiqué ici. Celle-ci est par exemple affichée dans le menu Outils. Les dimensions habituelles d'une telle icône sont de 16x16 pixels. Le format n'est pas imposé, mais nous recommandons d'utiliser le format PNG. Le chemin à indiquer doit être relatif à partir du répertoire racine d'i-doit.

## Files

## Files

Das Array der Dateien wird beim Deinstallieren eines Add-ons verwendet. Nachdem die uninstall-Methode aufgerufen wird, werden alle hier aufgeführten Dateien und Ordner unwiderruflich gelöscht. Die Dateipfade müssen relativ ab dem Add-on-Verzeichnis angegeben werden.

Le tableau des fichiers est utilisé lors de la désinstallation d'un add-on. Après l'appel de la méthode uninstall, tous les fichiers et dossiers listés ici sont irrémédiablement supprimés. Les chemins d'accès aux fichiers doivent être indiqués de manière relative à partir du répertoire du module complémentaire.

## Sql-Tables

## Tables Sql

Das Array der SQL-Tabellen wird beim Deinstallieren eines Add-ons verwendet. Nachdem die uninstall-Methode aufgerufen wird, werden alle hier aufgeführten Datenbanktabellen unwiderruflich gelöscht.

Le tableau des tables SQL est utilisé lors de la désinstallation d'un add-on. Après l'appel de la méthode uninstall, toutes les tables de base de données listées ici sont irrémédiablement supprimées.

## Requirements

## Requirements

Aktuell (Stand i-doit 1.11.x) ist es nur möglich, die i-doit-Version als Voraussetzung zu verwenden, wie z.B.:

Actuellement (version i-doit 1.11.x), il n'est possible d'utiliser que la version i-doit comme condition préalable, comme par ex :

```
"requirements": {
    "core": ">= 1.11"
}
```

## Dependencies

## Dépendances

Aktuell (Stand 1.11.x) ist es nur möglich, PHP-Extensions als Abhängigkeiten zu definieren, wie z.B.:

Actuellement (version 1.11.x), il est seulement possible de définir des extensions PHP en tant que dépendances, comme par ex :

```
"dependencies": {
    "php": ["spl", "json", "mysqli"]
}
```