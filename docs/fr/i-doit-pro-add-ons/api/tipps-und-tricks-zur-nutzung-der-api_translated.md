<!-- TRANSLATED by md-translate -->
# Tipps und Tricks zur Nutzung der API

# Trucs et astuces pour utiliser l'API

An dieser Stelle tragen wir viele Tipps und Tricks zum effizienten Umgang mit der [Programmierschnittstelle (API)](./index.md) von i-doit zusammen.

Nous rassemblons ici de nombreux conseils et astuces pour une utilisation efficace de l'[interface de programmation (API)](./index.md) d'i-doit.

## Don't Repeat Yourself (DRY)

## Don't Repeat Yourself (DRY)

Das Rad muss nicht immer neu erfunden werden. Zum Ansteuern der API gibt es mittlerweile einige Libraries und Clients, die genutzt werden können. Wer hier nicht für die geliebte Programmiersprache fündig werden sollte, darf das natürlich ändern.

Il n'est pas toujours nécessaire de réinventer la roue. Pour piloter l'API, il existe désormais quelques bibliothèques et clients qui peuvent être utilisés. Ceux qui ne trouvent pas ici ce qu'ils cherchent dans leur langage de programmation peuvent bien sûr changer d'avis.

## Keep It Simple, Stupid (KISS)

## Keep It Simple, Stupid (KISS)

Ein weithin bekanntes Paradigma aus der Software-Entwicklung. Jedes Script zum Ansteuern der API sollte nur eine Aufgabe erledigen. 1 Tool, 1 Job – diese aus der Unix-Welt entlehnte Philosophie gilt auch für das IT Service Management (ITSM). Die Komplexität sollte soweit es geht reduziert werden. Andernfalls erschwert das die Wartung des Scripts.

Un paradigme bien connu du développement de logiciels. Chaque script d'accès à l'API ne doit effectuer qu'une seule tâche. 1 outil, 1 tâche - cette philosophie empruntée au monde Unix s'applique également à la gestion des services informatiques (ITSM). La complexité devrait être réduite autant que possible. Dans le cas contraire, cela complique la maintenance des scripts.

## Benutze die API anstatt SQL

## Utilise l'API au lieu de SQL

i-doit speichert fast alle Daten in einem Datenbankmanagementsystem (MariaDB oder MySQL). Da ist es für den SQL-Kenner verlockend, auf diese Daten direkt zuzugreifen. Doch Vorsicht: Wer die Mechanismen in i-doit explizit umgeht und die Daten via SQL verändert, kann sich schnell eine korrupte Installation einhandeln. Hierfür gilt keine Gewährleistung seitens des Herstellers. Besser ist es, die API zu nutzen. Denn nur hierüber lässt sich gewährleisten, dass beispielsweise [Objekt-Beziehungen](../../grundlagen/objekt-beziehungen.md) oder [Logbuch-Einträge](../../grundlagen/logbuch.md) korrekt angelegt werden.

i-doit stocke presque toutes les données dans un système de gestion de base de données (MariaDB ou MySQL). Il est donc tentant pour les habitués de SQL d'accéder directement à ces données. Mais attention : celui qui contourne explicitement les mécanismes d'i-doit et modifie les données via SQL peut rapidement se retrouver avec une installation corrompue. Dans ce cas, aucune garantie n'est accordée par le fabricant. Il est préférable d'utiliser l'API. Car c'est le seul moyen de garantir que, par exemple, les [relations entre objets](../../bases/relations-objets.md) ou les [entrées du journal](../../bases/logbuch.md) sont créées correctement.

## Benutze die API anstatt CSV-Datenimport

## Utilise l'API au lieu d'importer des données CSV

Wer seine damals provisorischen, aber dann doch über Jahre gepflegten Excel-Tabellen durch eine strukturierte IT-Dokumentation ablösen möchte, kann in vielen Fällen den CSV-Datenimport nutzen. Doch dieser erreicht Grenzen, wenn in den Tabellen nicht nur nackte Daten, sondern ausgeklügelte Konstrukte verborgen sind. Spätestens bei Abhängigkeiten zwischen Spalten sowie Zellen, die mehr als eine Information speichern, ist es ratsam, einen eigenen Import zu implementieren. Der schnellte Weg mag hier die API darstellen.

Celui qui souhaite remplacer ses tableaux Excel, provisoires à l'époque mais entretenus pendant des années, par une documentation informatique structurée, peut dans de nombreux cas utiliser l'importation de données CSV. Mais celle-ci atteint ses limites lorsque les tableaux ne contiennent pas seulement des données brutes, mais aussi des constructions sophistiquées. Au plus tard en cas de dépendances entre les colonnes et les cellules qui stockent plus d'une information, il est conseillé d'implémenter une importation propre. L'API peut être la solution la plus rapide.

## Benutze die API anstatt CSV-Datenexport

## Utilise l'API au lieu d'exporter les données CSV

Umgekehrt kann die API flexibler verwendet werden, wenn es um den Datenexport geht. Die API stellt also auch eine Alternative zum [Report Manager](../../auswertungen/report-manager.md) und den [CSV-Datenexport](../../daten-konsolidieren/csv-datenexport.md) dar.

Inversement, l'API peut être utilisée de manière plus flexible lorsqu'il s'agit d'exporter des données. L'API constitue donc également une alternative au [Report Manager](../../exploitations/report-manager.md) et à l'[exportation de données CSV](../../consolidation de données/csv-datenexport.md).

## Benutze die API für das Sammeln von Daten

## Utilise l'API pour la collecte de données

Keine Frage: Das automatisierte Sammeln von Informationen durch ein Network Discovery erleichtert die Pflege der IT-Dokumentation ungemein. i-doit bietet hier bereits Schnittstellen zu [JDisc Discovery](../../daten-konsolidieren/jdisc-discovery.md), [OCS Inventory NG](../ocs-inventory-ng.md) und weitere. Sollte eine Schnittstelle fehlen, hilft die API weiter.

Pas de doute : la collecte automatisée d'informations par un Network Discovery facilite énormément la gestion de la documentation informatique. i-doit propose ici déjà des interfaces vers [JDisc Discovery](../../consolidation des données/jdisc-discovery.md), [OCS Inventory NG](../ocs-inventory-ng.md) et autres. S'il manque une interface, l'API peut vous aider.

## Benutze die Zwei-Faktor-Authentifizierung

## Utilise l'authentification à deux facteurs

Neben dem API Key bietet die zusätzliche Authentifizierung mit einem Benutzer-Account mehrere Vorteile: Die so erreichte Zwei-Faktor-Authentifizierung erhöht zum einen die Sicherheit. Zum anderen erleichtert sie die Nachvollziehbarkeit, wenn jedes Script einen eigenen Benutzer-Account verwendet. Auf diese Weise lässt sich anhand des [Logbuchs](../../grundlagen/logbuch.md) recherchieren, welches Script welche Daten in der IT-Dokumentation verändert hat.

Outre la clé API, l'authentification supplémentaire avec un compte d'utilisateur présente plusieurs avantages : L'authentification à deux facteurs ainsi obtenue augmente d'une part la sécurité. D'autre part, elle facilite la traçabilité lorsque chaque script utilise son propre compte d'utilisateur. De cette manière, il est possible de rechercher, à l'aide du [journal](../../grundlagen/logbuch.md), quel script a modifié quelles données dans la documentation informatique.

## Logge alle API Calls

## Enregistre tous les appels à l'API

Nützlich fürs [Troubleshooting](../../administration/troubleshooting/index.md): Alle API Calls lassen sich von i-doit loggen. Requests und Responses werden in handlichen Textdateien unter log/ im Installationsverzeichnis gespeichert.

Utile pour le [Troubleshooting](../../administration/troubleshooting/index.md) : Tous les appels API peuvent être enregistrés par i-doit. Les requêtes et les réponses sont enregistrées dans des fichiers texte pratiques sous log/ dans le répertoire d'installation.

## Teste nicht im Produktivsystem

## Ne pas tester dans le système de production

Um die produktiven Daten nicht durch ein fehlerhaftes Script zu gefährden, bietet sich eine zweite Installation zum Testen an. Das obligatorische [Backup](../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) darf natürlich nicht fehlen.

Pour ne pas mettre en danger les données de production par un script erroné, une deuxième installation s'impose à titre de test. La [sauvegarde] obligatoire(../../maintenance-et-exploitation/sauvegarde-et-restauration-de-données/index.md) ne doit bien sûr pas manquer.

## Sichere die Kommunikation ab

## Sécurise la communication

Die IT-Dokumentation enthält in vielen Fällen sensible Informationen, die nicht in falsche Hände geraten dürfen. Damit API Keys, Zugangsdaten und Nutzdaten nicht im Klartext über das Netzwerk ausgetauscht werden, bietet sich die verschlüsselte Kommunikation via TLS (HTTPS) mit einem Zertifikat an. Nur so kann sicher gestellt werden, dass Daten integer sind und nicht missbraucht werden können. Eine mögliche Konfiguration und viele weitere Tipps enthält der Artikel "[Sicherheit und Schutz](../../wartung-und-betrieb/sicherheit-und-schutz.md)".

Dans de nombreux cas, la documentation informatique contient des informations sensibles qui ne doivent pas tomber entre de mauvaises mains. Pour que les clés API, les données d'accès et les données utiles ne soient pas échangées en texte clair sur le réseau, la communication cryptée via TLS (HTTPS) avec un certificat s'impose. C'est la seule façon de s'assurer que les données sont intègres et ne peuvent pas être utilisées à mauvais escient. L'article "[Sécurité et protection](../../maintenance-et-exploitation/sécurité-et-protection.md)" contient une configuration possible et de nombreux autres conseils.

## Sichere das Script ab

## Sécurise le script

Die API umgeht derzeit die in der Web GUI verwendete [Rechteverwaltung](../../effizientes-dokumentieren/rechteverwaltung/index.md). Umso wichtiger ist es, dass der Zugang zur API und die Kommunikation zur API gesichert werden (siehe oben). Ebenfalls essentiell ist es, das Script gegen unberechtigten Zugriff zu schützen.

L'API contourne actuellement la [gestion des droits] utilisée dans l'interface utilisateur Web(../../documentation efficace/gestion des droits/index.md). Il est donc d'autant plus important que l'accès à l'API et la communication avec l'API soient sécurisés (voir ci-dessus). Il est également essentiel de protéger le script contre tout accès non autorisé.

## Melde dich an und wieder ab

## Connecte-toi et déconnecte-toi

Führt das Script gleich mehrere API Calls aus, ist der explizite Login zu empfehlen. Mit der Methode **idoit.login** wird eine neue Session erstellt, die für alle weiteren API Calls wiederverwendet werden kann. Zum Schluss schließt man die Session mit der Methode **idoit.logout**. So spart man zahlreiche Sessions, die von PHP erst nach und nach gelöscht werden, teilweise erst nach Wochen.

Si le script exécute plusieurs appels à l'API, il est recommandé de se connecter explicitement. La méthode **idoit.login** permet de créer une nouvelle session qui peut être réutilisée pour tous les autres API calls. Pour finir, on ferme la session avec la méthode **idoit.logout**. On économise ainsi de nombreuses sessions qui ne sont supprimées par PHP qu'au fur et à mesure, parfois après des semaines.

## Benutze Batch Requests

## Utilise les requêtes par lots

Die API verfügt über sogenannte Batch Requests: Mit einem API Call lassen sich gleich mehrere Requests senden. Das steigert die Performance, weil Netzwerkverbindungen und weiterer Overhead auf ein Minimum reduziert wird.

L'API dispose de "Batch Requests" : un seul appel API permet d'envoyer plusieurs requêtes. Cela permet d'augmenter la performance, car les connexions réseau et autres frais généraux sont réduits au minimum.

Doch Vorsicht: Wer zu viele Requests zu einem Batch Request zusammenfasst, kann eine schwachbrüstige Installation von i-doit in die Knie zwingen. Das Resultat ist ein Abbruch mit einem HTTP Status 500. Hier hilft es, den PHP-Prozessen mehr Arbeitsspeicher zu geben.

Mais attention : si l'on regroupe trop de requêtes en un seul batch request, on risque de mettre à genoux une installation peu performante d'i-doit. Le résultat est un arrêt avec un statut HTTP 500. Il est alors utile de donner plus de mémoire de travail aux processus PHP.

## Automatisiere den Datenaustausch

## Automatiser l'échange de données

Läuft das Script erst einmal, dass die API von i-doit ansteuert, kann man dieses bestimmt auch automatisiert ausführen. Ein Cronjob ist schnell eingerichtet und erleichtert die Datenpflege.

Une fois que le script qui pilote l'API d'i-doit est en cours d'exécution, il est certainement possible de l'automatiser. Une tâche cron est rapidement mise en place et facilite la gestion des données.

## Kombiniere API und Events

## Combiner API et événements

Eine gute Ergänzung zur API stellen die [Events](../events.md) in i-doit dar. Wird über i-doit ein Objekt erstellt oder ein Kategorie-Eintrag verändert, kann ein beliebiges Script ausgeführt werden. Diesem werden die wichtigsten Daten des Events übermittelt (Welches Objekt wurde erstellt? Welche Attribute wurden aktualisiert?). Das ausgeführte Script kann nun die API ansteuern, um weitere Daten abzufragen oder zu manipulieren.

Les [Events](../events.md) d'i-doit constituent un bon complément à l'API. Si un objet est créé ou une entrée de catégorie modifiée via i-doit, un script quelconque peut être exécuté. Les données les plus importantes de l'événement lui sont transmises (quel objet a été créé ? quels attributs ont été mis à jour ?). Le script exécuté peut alors faire appel à l'API pour demander ou manipuler d'autres données.

Ein konkretes Beispiel, das sowohl API, als auch Events verwendet, ist die [Provisionierung von virtuellen Maschinen](../../anwendungsfaelle/vm-provisionieren.md).

Un exemple concret qui utilise à la fois l'API et les événements est le [provisionnement des machines virtuelles](../../applicationfaelle/vm-provisioning.md).

## Veröffentliche dein Script

## Publie ton script

Das Problem, das durch ein Script zum Ansteuern der API gelöst wird, kann nicht nur einem selbst, sondern eventuell auch anderen Nutzern von i-doit weiterhelfen. Wer der Community etwas zurück geben möchte, kann das eigene Script unter einer Open-Source- oder freien Lizenz auf GitHub & Co. veröffentlichen. Wir würden uns über eine kurze Nachricht sehr freuen!

Le problème résolu par un script de commande de l'API peut aider non seulement soi-même, mais aussi éventuellement d'autres utilisateurs d'i-doit. Ceux qui souhaitent donner quelque chose en retour à la communauté peuvent publier leur propre script sous une licence open-source ou libre sur GitHub & Co. Nous serions très heureux de recevoir un petit message !

## Read the Fine Manual (RTFM)

## Read the Fine Manual (RTFM)

Alle API-Methoden und viele Beispiele liefert die Knowledge Base. Wer hier nicht fündig wird, ist vielleicht auf eine Lücke gestoßen. Auch hier freuen wir uns über kurzes Feedback.

Toutes les méthodes API et de nombreux exemples sont fournis par la base de connaissances. Si vous n'y trouvez pas votre bonheur, c'est peut-être qu'il y a une lacune. Là aussi, nous serions heureux de recevoir un bref feed-back.