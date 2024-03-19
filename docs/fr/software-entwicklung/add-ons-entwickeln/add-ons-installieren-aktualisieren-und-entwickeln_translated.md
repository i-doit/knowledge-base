<!-- TRANSLATED by md-translate -->
# Add-ons installieren, aktualisieren und aktivieren

# Installer, mettre à jour et activer les add-ons

Damit ein Add-on in i-doit installiert, aktualisiert und aktiviert werden kann, ist eine bestimmte Ordnerhierarchie einzuhalten. Innerhalb des Add-on-Ordners werden Dateien, wie z.B. init.php, vorausgesetzt, um einen einheitlichen Programmablauf zu gewährleisten.

Pour qu'un add-on puisse être installé, mis à jour et activé dans i-doit, une certaine hiérarchie de dossiers doit être respectée. Des fichiers tels que init.php sont supposés se trouver à l'intérieur du dossier Add-on afin de garantir un déroulement uniforme du programme.

## Add-on installieren

## Installer un add-on

Add-ons müssen als ZIP-Archiv vorliegen, um von i-doit installiert werden zu können. Die ZIP-Datei wird über das Admin-Center eingespielt und startet die internen Routinen zum Installieren. Die Verzeichnisstruktur innerhalb des Archivs muss dabei einem vorgegebenem Muster folgen. Hier am Beispiel des "Beispiel"-Add-ons (Identifier "example"):

Les add-ons doivent être disponibles sous forme d'archive ZIP pour pouvoir être installés par i-doit. Le fichier ZIP est importé via l'Admin-Center et démarre les routines internes d'installation. La structure des répertoires dans l'archive doit suivre un modèle prédéfini. Ici, l'exemple de l'add-on "exemple" (identifiant "example") :

[![addonsaa-istallieren](../../assets/images/de/software-entwicklung/add-ons-entwickeln/installieren-aktualisieren/1-ia.png)](../../assets/images/de/software-entwicklung/add-ons-entwickeln/installieren-aktualisieren/1-ia.png)

[ ![addonsaa-istall](../../assets/images/fr/software-entwicklung/add-ons-entwickeln/installieren-aktualisieren/1-ia.png)](../../assets/images/fr/software-entwicklung/add-ons-entwickeln/installieren-aktualisieren/1-ia.png)

Im Archiv muss die package.json-Datei auf oberster Ebene (wie auch src) liegen, damit diese von i-doit gefunden wird. Diese beinhaltet diverse wichtige Metadaten, die während der Installation benötigt werden. Weitere Informationen sind im Artikel [Metadaten eines Add-ons (package.json)](metadaten-eines-add-ons.md) nachzulesen.

Dans l'archive, le fichier package.json doit se trouver au premier niveau (comme src) pour qu'il soit trouvé par i-doit. Ce fichier contient diverses métadonnées importantes qui sont nécessaires pendant l'installation. Vous trouverez de plus amples informations dans l'article [Métadonnées d'un add-on (package.json)](metadaten-ein-add-ons.md).

Die Datei wird nach erfolgreicher Installation automatisch in das Add-on-Verzeichnis verschoben.

Une fois l'installation réussie, le fichier est automatiquement déplacé dans le répertoire des add-ons.

## Add-on aktualisieren

## Mettre à jour l'add-on

Anders als beim i-doit-Kern gibt es bei Add-ons keinen Unterschied zwischen "installation"- und "update"-Paketen. Die Entscheidung zwischen "Was passiert bei Installation?" und "Was passiert bei Aktualisierung?" wird im Kapitel "Installieren und Deinstallieren" näher erläutert.

Contrairement au noyau i-doit, il n'y a pas de différence entre les paquets "installation" et "update" pour les add-ons. Le choix entre "Que se passe-t-il lors de l'installation ?" et "Que se passe-t-il lors de la mise à jour ?" est expliqué plus en détail dans le chapitre "Installer et désinstaller".

## System- und Mandanten-Datenbank erweitern

## Étendre la base de données du système et des clients

Häufig erweitert ein Add-on die i-doit-Mandanten-Datenbank um eigene Tabellen und Inhalte. Zu diesem Zweck kann ein Add-on die Dateien update_data.xml und update_sys.xml mitbringen, die im Add-on-Verzeichnis unterhalb des "install"-Ordners liegen müssen. Hier werden unter definierten Bedingungen SQL-Queries ausgeführt, die sowohl zum Installieren als auch Aktualisieren von Datenbank-Tabellen und -Inhalten genutzt werden können. Die Datei update_data.xml wird für die gewählten Mandanten-Datenbanken verwendet, während update_sys.xml ausschließlich auf die System-Datenbank angewendet wird.

Souvent, un add-on étend la base de données du mandant i-doit avec ses propres tables et contenus. À cette fin, un add-on peut apporter les fichiers update_data.xml et update_sys.xml, qui doivent se trouver dans le répertoire add-on sous le dossier "install". C'est ici que sont exécutées, dans des conditions définies, des requêtes SQL qui peuvent être utilisées aussi bien pour l'installation que pour la mise à jour des tables et du contenu de la base de données. Le fichier update_data.xml est utilisé pour les bases de données des mandants sélectionnés, tandis que update_sys.xml s'applique exclusivement à la base de données du système.

```
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE isys [
    <!ELEMENT isys (info|queries)*>
    <!ELEMENT info (title|version|requirement|directory|revision|release)*>
    <!ELEMENT title (#PCDATA)>
    <!ELEMENT version (#PCDATA)>
    <!ELEMENT requirement (revision|version)*>
    <!ELEMENT revision (#PCDATA)>
    <!ELEMENT directory (#PCDATA)>
    <!ELEMENT release (#PCDATA)>
    <!ELEMENT queries (query)*>
    <!ELEMENT query (id|title|check|errmsg|sql)*>
    <!ELEMENT id (#PCDATA)>
    <!ELEMENT check (#PCDATA)>
    <!ATTLIST check ident CDATA #REQUIRED>
    <!ELEMENT errmsg (#PCDATA)>
    <!ELEMENT sql (exec)*>
    <!ELEMENT exec (#PCDATA)>
    <!ATTLIST exec ident CDATA #REQUIRED>
    ]>
<isys>
    <info>
        <title>Beispiel Add-on</title>
        <version>1.0</version>
        <release>2018-08-01</release>
    </info>
    <queries>

        <!-- Queries and conditions go here -->

    </queries>
</isys>
```

Ein Query-Element muss immer die folgenden Elemente mitliefern:

Un élément de requête doit toujours inclure les éléments suivants :

* id: Ein numerischer Counter, beginnend bei 1
* title: Ein beschreibender Titel, der erläutert, welche Query aktuell ausgeführt wird.
* check: Der notwendige Check + Bedingung
* errmsg: Ein optionaler Text, der im Fehlerfall ausgegeben wird.
* sql: Die auszuführende SQL-Query, unter Berücksichtigung des Check-Ergebnisses

* id : un compteur numérique, commençant à 1
* title : un titre descriptif expliquant quelle requête est en cours d'exécution.
* check : Le check nécessaire + condition
* errmsg : Un texte optionnel qui sera affiché en cas d'erreur.
* sql : La requête SQL à exécuter, en tenant compte du résultat du contrôle.

Solche Queries können folgendermaßen aussehen:

De telles requêtes peuvent se présenter comme suit :

```
<query>
    <id>1</id>
    <title>Creating table "isys_example_table"</title>
    <check ident="C_CREATE_TABLE">isys_example_table</check>
    <errmsg>The example table could not be created!</errmsg>
    <sql>
        <exec ident="true">

            <!-- Nothing to do, the table exists -->

        </exec>
        <exec ident="false">
            CREATE TABLE isys_example_table ...;
        </exec>
    </sql>
</query>

<query>
    <id>2</id>
    <title>Setting title of object #1 to "Root-Location"</title>
    <check ident="C_VALUE_EXISTS">
        SELECT isys_obj__id FROM isys_obj WHERE isys_obj__id = 1;
    </check>
    <errmsg>The example table could not be created!</errmsg>
    <sql>
        <exec ident="true">
            <!-- Object with ID 1 exists -->
            UPDATE isys_obj
            SET isys_obj__title = 'Root-Location'
            WHERE isys_obj__id = 1;
        </exec>
        <exec ident="false">
            <!-- Object with ID 1 could not be found -->
            INSERT INTO isys_obj
            SET isys_obj__id = 1,
            isys_obj__title = 'Root-Location';
        </exec>
    </sql>
</query>
```

Es ist möglich, für jeden Ausgang des Checks (true / false) eine SQL-Query zu hinterlegen.

Il est possible d'enregistrer une requête SQL pour chaque sortie du check (true / false).

Folgende Checks und Bedingungen sind möglich:

Les chèques et conditions suivants sont possibles :

* C_CREATE_TABLE (inkl. Alias "C_UPDATE", "C_INSERT_INTO", "C_ALTER_TABLE", "C_TABLE_EXISTS" und "C_DROP_TABLE")
Bedingung: Tabellen-Name
Prüft, ob die angegebene Tabelle existiert.
* C_VALUE_EXISTS
Bedingung: SQL-Query
Führt die angegebene Query aus und prüft, ob es eine Rückgabe gibt (gefundene Zeilen > 0).
* C_ADD_FIELD
Bedingung: Tabelle und Spalte in folgender Form: <Tabelle>,<Spalte>
Prüft, ob das genannte Feld in der Tabelle existiert.

* C_CREATE_TABLE (y compris les alias "C_UPDATE", "C_INSERT_INTO", "C_ALTER_TABLE", "C_TABLE_EXISTS" et "C_DROP_TABLE")
Condition à remplir : Nom de la table
Vérifie si la table indiquée existe.
* C_VALUE_EXISTS
Condition : SQL Query
Exécute la requête indiquée et vérifie s'il y a un retour (lignes trouvées > 0).
* C_ADD_FIELD
Condition : Table et colonne sous la forme suivante : <Table>,<Colonne>.
Vérifie si le champ mentionné existe dans la table.

## Aktivieren und Deaktivieren

## Activer et désactiver

Damit ein Add-on im Admin-Center aktiviert und deaktiviert werden kann, muss die isys_module_example-Klasse das idoit\AddOn\ActivatableInterface-Interface implementieren. Dieses setzt drei Methoden voraus, die bei den entsprechenden Aktionen ausgeführt werden:

Pour qu'un add-on puisse être activé et désactivé dans le centre d'administration, la classe isys_module_example doit implémenter l'interface idoit\AddOn\ActivatableInterface. Celle-ci suppose trois méthodes qui sont exécutées lors des actions correspondantes :

```
/**
* Checks if a module is active.
*
* @return integer|bool
*/
public static function isActive()
{
    return isys_module_manager::instance()->is_active('example');
}

/**
* Method that is called after clicking "activate" in admin center for specific mandator
*
* @param isys_component_database $mandatorDb
*
* @return boolean
*/
public static function activate($mandatorDb)
{
    try {
        // Custom logic...
        return true;
    } catch (Exception $e) {
        return false;
    }
}

/**
* Method that is called after clicking "deactivate" in admin center for specific mandator
*
* @param isys_component_database $mandatorDb
*
* @return boolean
*/
public static function deactivate($mandatorDb)
{
    try {
        // Custom logic...
        return true;
    } catch (Exception $e) {
        return false;
    }
}
```

Werden die Methoden nicht benötigt, kann lediglich true zurückgegeben werden. Üblicherweise werden diese Methoden dazu genutzt, um zum Beispiel Rechte zu setzen oder Dashboard-Widgets zu installieren.

Si les méthodes ne sont pas nécessaires, seul true peut être renvoyé. Ces méthodes sont généralement utilisées pour définir des droits ou installer des widgets de tableau de bord, par exemple.

## Installieren und Deinstallieren

## Installer et désinstaller

Ähnlich wie beim Aktivieren und Deaktivieren eines Add-ons, gibt es auch zum Installieren und Deinstallieren ein entsprechendes Interface: idoit\AddOn\InstallableInterface. Auch dies setzt drei Methoden voraus, die zwingend implementiert werden müssen:

Comme pour l'activation et la désactivation d'un add-on, il existe également une interface correspondante pour l'installation et la désinstallation : idoit\AddOn\InstallableInterface. Cela suppose également trois méthodes qui doivent impérativement être implémentées :

```
/**
* Checks if a add-on is installed.
*
* @return integer|bool
*/
public static function isInstalled()
{
    return isys_module_manager::instance()->is_installed('example');
}

/**
* Basic installation process for all mandators.
*
* @param isys_component_database $tenantDatabase
* @param isys_component_database $systemDatabase
* @param integer                 $moduleId
* @param string                  $type
* @param integer                 $tenantId
*
* @since i-doit 1.12
* @return void
*/
public static function install($tenantDatabase, $systemDatabase, $moduleId, $type, $tenantId)
{
    if ($type === 'install') {
        // Logic for installation.
}

    if ($type === 'update') {
        // Logic for update.
    }
}

/**
* Uninstall add-on for all mandators
*
* @return void
*/
public static function uninstall()
{
    // Custom logic...
}
```

Die install- und uninstall-Methoden können benutzt werden, um komplexe Aufgaben zu erledigen, die über einfache SQL-Queries hinausgehen.

Les méthodes install et uninstall peuvent être utilisées pour effectuer des tâches complexes qui vont au-delà des simples requêtes SQL.

!!! info "Veraltete Installationslogik"

! !! info "Logique d'installation obsolète

```
In älteren i-doit-Versionen (< 1.12) wird die "install"-Methode noch nicht unterstützt - hier muss eine separate Logik angewendet werden.
```