<!-- TRANSLATED by md-translate -->
# checkmk 2 Bestandsdaten in die CMDB importieren

# checkmk 2 Importer les données d'inventaire dans la CMDB

Sie lassen checkmk alle Ihre Rechner überwachen? Sie lassen checkmk grundlegende Informationen über Ihre Hardware/Software sammeln? Warum sollten Sie diese Informationen dann nicht mit Ihrer CMDB teilen? Importieren oder aktualisieren Sie Objekte in i-doit, indem Sie Folgendes ausführen:

Vous laissez checkmk surveiller tous vos ordinateurs ? Vous laissez checkmk collecter des informations de base sur votre matériel/logiciel ? Alors pourquoi ne pas partager ces informations avec votre CMDB ? Importez ou mettez à jour des objets dans i-doit en effectuant les opérations suivantes :

```
idoitcmk pull
```

**Empfehlung:** Führen Sie diesen Befehl jedes Mal aus, wenn Sie Ihre WATO Konfiguration in checkmk ändern oder wenn die Inventarisierungsagenten von checkmk neue Hardware-/Softwareinformationen finden.

**Recommandation:** Exécutez cette commande à chaque fois que vous modifiez votre configuration WATO dans checkmk ou que les agents d'inventaire de checkmk trouvent de nouvelles informations sur le matériel/logiciel.

## Optionen

## Options

Diese Optionen sind während der Laufzeit verfügbar:

Ces options sont disponibles pendant la durée du contrat :

| Option | Erforderlich | Beschreibung |
| --- | --- | --- |
| --include-alias STRING | Nein | Hosts nach Alias filtern |
| --include-folder STRING | Nein | Hosts nach WATO Ordner filtern |
| --include-hostname STRING | Nein | Hosts nach name filtern |
| --include-ipaddress STRING | Nein | Hosts nach IPv4/v6 address filtern |
| --include-os STRING | Nein | Hosts nach operating system filtern |
| --include-site STRING | Nein | Hosts nach monitoring site filtern |
| --include-tag TAG | Nein | Hosts nach tag filtern |

| Option | Requis | Description |
| --- | --- | --- |
| --include-alias STRING | Non | Filtrer les hôtes par alias |
| --include-folder STRING | Non | Filtrer les hôtes par dossier WATO |
| --include-hostname STRING | Non | Filtrer les hôtes par nom |
| --include-ipaddress STRING | Non | Filtrer les hôtes par adresse IPv4/v6 |
| --include-os STRING | Non | Filtrer les hôtes par système d'exploitation |
| --include-site STRING | Non | Filtrer les hôtes par site de surveillance |
| --include-tag TAG | Non | Filtrer les hôtes par tag |

STRING bedeutet eine beliebige Zeichenfolge einschließlich der Platzhalter *, ? und [ae]. Wiederholen Sie die Option, um mehr als einen STRING zu finden. Beispiel: Alle Hosts mit einem GNU/Linux- oder Windows-Betriebssystem abrufen:

STRING signifie n'importe quelle chaîne de caractères, y compris les caractères génériques *, ? et [ae]. Répétez l'option pour trouver plus d'une chaîne de caractères. Exemple : récupérer tous les hôtes avec un système d'exploitation GNU/Linux ou Windows :

```
idoitcmk pull --include-os "*Linux*" --include-os "*Windows*"
```

Beliebige Kombinationen dieser Filter werden logisch durch oder kombiniert. Zum Beispiel, alle Hosts mit der Endung .example.com oder im Ordner cloud abrufen:

Les combinaisons quelconques de ces filtres sont combinées logiquement par ou . Par exemple, récupérer tous les hôtes avec l'extension .example.com ou dans le dossier cloud :

```
idoitcmk pull --include-hostname "*.example.com" --include-folder "cloud"
```

TAG ist wie STRING, ist aber eine Schlüssel/Wert-Kombination mit dem Tag-Namen und seinem Wert. Beispiel: Abruf aller als geschäftskritisch gekennzeichneten Hosts:

TAG est comme STRING, mais est une combinaison clé/valeur avec le nom de la balise et sa valeur. Exemple : récupération de tous les hôtes marqués comme critiques pour l'entreprise :

```
idoitcmk pull --include-tag "criticality=critical"
```

## Konfiguration

## Configuration

Diese [Einstellungen](./checkmk2-konfiguration.md) sind verfügbar:

Ces [paramètres](./checkmk2-konfiguration.md) sont disponibles :

| Key | Typ | Erforderlich | Standard | Beschreibung |
| --- | --- | --- | --- | --- |
| pull.createObjects | Boolean | Nein | true | Unbekannte Hosts werden als neue Objekte erstellt |
| pull.objectType | String | Nein | C__OBJTYPE__SERVER | Setzen der Objekttypkonstante für neue Objekte |
| pull.updateObjects | String | Nein | overwrite | Wenn der Host in i-doit gefunden wird, werden vorhandene Kategorieeinträge überschrieben oder ignoriert. |
| pull.idenfifier | Array | Nein | ["title", "hostname", "fqdn", "hostaddress", "alias"] | Suchen Sie nach diesen Identifier, um Hosts mit Objekten abzugleichen; siehe Abschnitt "Identifier". |
| pull.minMatch | Integer | Nein | 2 | Objekt und Host müssen sich eine Mindestmenge an identifiers teilen |
| pull.attributes | Array | Nein | _See section "Attributes"_ | Liste der Kategoriekonstanten, die geändert werden sollen; siehe Abschnitt "Attribute". |
| pull.enableExport | Boolean | Nein | true | Host-Konfiguration in Kategorie schreiben Check_MK Host |
| pull.enableLivestatus | Boolean | Nein | true | Host-Konfiguration in Kategorie schreiben Monitoring |
| pull.ports | String | Nein | physical | Hinzufügen/Aktualisieren von "physischen" oder "logischen" Netzwerkanschlüssen |
| roles.monitoring | String | Nein | Monitoring | i-doit Rolle für Kontaktgruppen, die bei Kontaktzuweisungen verwendet werden |

| Clé | Type | Requis | Standard | Description |
| --- | --- | --- | --- | --- |
| pull.createObjects | Booléen | Non | true | Les hôtes inconnus sont créés en tant que nouveaux objets |
| pull.objectType | Chaîne | Non | C__OBJTYPE__SERVER | Définition de la constante de type d'objet pour les nouveaux objets |
| pull.updateObjects | Chaîne | Non | overwrite | Si l'hôte est trouvé dans i-doit, les entrées de catégorie existantes seront écrasées ou ignorées. |
| pull.idenfifier | tableau | Non | ["title", "hostname", "fqdn", "hostaddress", "alias"] | Recherchez ces identifiants pour faire correspondre les hôtes aux objets ; voir la section "Identifiants". |
| pull.minMatch | Entier | Non | 2 | L'objet et l'hôte doivent partager un nombre minimum d'identifiants |
| pull.attributes | tableau | Non | _See section "Attributes"_ | Liste des constantes de catégorie à modifier ; voir section "Attributs". |
| pull.enableExport | Booléen | Non | true | Écrire la configuration de l'hôte dans la catégorie Check_MK Host |
| pull.enableLivestatus | Booléen | Non | true | Écrire la configuration de l'hôte dans la catégorie Monitoring |
| pull.ports | Chaîne | Non | physical | Ajouter/Mettre à jour des ports réseau "physiques" ou "logiques" |
| roles.monitoring | Chaîne | Non | Monitoring | Rôle i-doit pour les groupes de contacts utilisés lors des assignations de contacts |