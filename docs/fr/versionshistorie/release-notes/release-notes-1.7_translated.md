<!-- TRANSLATED by md-translate -->
# Release Notes 1.7

# Notes de publication 1.7

> Mit i-doit pro 1.7 gibt es einige Neuerungen, die vor dem Update zu beachten sind.
>
> ### Geänderte Systemvoraussetzungen
>
> Die Systemvoraussetzungen haben sich geändert. i-doit pro benötigt nun mindestens MySQL 5.6 oder MariaDB 10 als Datenbankplattform. Bitte updaten Sie Ihre Datenbankplattform, bevor sie das i-doit Update ausführen.
>
> Anleitungen und Hinweise zum Update des Datenbanksystems finden Sie in unserer Knowledge Base unter: [Upgrade zu MySQL5.6 und MariaDB 10.0](../../upgrades-und-umzuege/upgrade-zu-mysql-5.6-oder-mariadb-10.0.md)
>
> Wenn Sie Fragen oder Probleme haben, zögern Sie nicht und wenden sich bitte an unseren Support unter [support@i-doit.com](mailto:support@i-doit.com). Wir freuen uns, wenn wir Ihnen helfen können.
>
> ### Suchindex
>
> i-doit pro verfügt ab Version 1.7 über einen neuen Suchindex. Dieser ist notwendig, um die Objektsuche zu benutzen. Er wird beim Update von 1.6 auf 1.7 automatisch generiert. Ausnahmen sind Installationen mit mehr als 500.000 lizenzpflichtigen Objekten. Installationen mit mehr als 500.000 lizenzpflchtigen Objekten bekommen beim Update einen Hinweis auf die manuelle Generierung des Suchindex. Diese wird im Folgenden beschrieben.
>
> Grundsätzlich wird der Suchindex bei manueller Eingabe oder bei Importen automatisch aktualisiert.
>
> Werden Objekte durch die API automatisiert in i-doit angelegt, muss der Suchindex per Crontab automatisch generiert werden. Dafür hat der Controller eine entsprechende Funktionswerweiterung bekommen. Ein exemplarischer Eintrag für einen Crontab sieht wie folgt aus:
>
> 0 3 * * * /var/www/controller -u admin -p admin -i 1 -v -m search_index reindex
>
> Wenn Sie Fragen oder Probleme haben, zögern Sie nicht und wenden sich bitte an unseren Support unter [support@i-doit.com](mailto:support@i-doit.com). Wir freuen uns, wenn wir Ihnen helfen können.
>
> ### Optionale Switch Stacking Migration
>
> Ab i-doit pro 1.7 wird das Stacking von Switchen erweitert dokumentiert. Die Kategorie "Stacking" wird durch Objekte des Typs "Stacking" (zu finden unter "Andere") abgelöst.
>
> Dieser neue Objekttyp enthält die Kategorie "Stack Member", welche die Mitglieder der Stacking-Gruppe beherbergt.
>
> Beim Update bleiben die bisherigen Kategorien erhalten, um Ihnen keine Funktionalitäten zu nehmen. Möchten Sie von der alten Verfahrensweise auf die neue migrieren, stellt Ihnen unser Support aber gerne ein Verfahren zur Verfügung. Bitte kontaktieren Sie uns unter [support@i-doit.com](mailto:support@i-doit.com).
>
> Bei Neuinstallationen existiert die alte Kategorie "Stacking" nicht länger. Es sind zwar sämtliche Dateien und Tabellen weiterhin vorhanden, jedoch ist der Eintrag in der GUI nicht mehr verfügbar.
>
> ### VRRP/HSRP
>
> Auch die VRRP/HSRP Abbildung wird nun ab Version 1.7 in einer erweiterten Logik abgebildet. Der Objekttyp für VRRP/HSRP Cluster hat eine neue Kategorie erhalten, in der nun dediziert und mit mehr Informationen VRRP/HSRP IP-Clustering abgebildet werden kann.Eine Umstellung oder Migration ist hier nicht notwendig, sie können bei Bedarf die neue Kategorie nutzen, wenn Sie die erweiterten Funktionen nutzen möchten.

> Avec i-doit pro 1.7, il y a quelques nouveautés dont il faut tenir compte avant la mise à jour.

> ### Configuration système requise modifiée
>
> La configuration requise a été modifiée. i-doit pro nécessite désormais au moins MySQL 5.6 ou MariaDB 10 comme plate-forme de base de données. Veuillez mettre à jour votre plateforme de base de données avant d'exécuter la mise à jour d'i-doit.
>
> Vous trouverez des instructions et des conseils pour la mise à jour du système de base de données dans notre base de connaissances sous : [mise à niveau vers MySQL5.6 et MariaDB 10.0](../../upgrades-et-transformations/mise-à-mysql-5.6-ou-mariadb-10.0.md)
>
> Si vous avez des questions ou des problèmes, n'hésitez pas à contacter notre support à [support@i-doit.com](mailto:support@i-doit.com). Nous serons ravis de pouvoir vous aider.
>
> ### Index de recherche
>
> i-doit pro dispose d'un nouvel index de recherche à partir de la version 1.7. Celui-ci est nécessaire pour utiliser la recherche d'objets. Il est généré automatiquement lors de la mise à jour de la version 1.6 à la version 1.7. Les exceptions sont les installations avec plus de 500.000 objets soumis à licence. Lors de la mise à jour, les installations avec plus de 500.000 objets soumis à licence reçoivent une indication sur la génération manuelle de l'index de recherche. Celle-ci est décrite ci-dessous.

> En principe, l'index de recherche est mis à jour automatiquement en cas de saisie manuelle ou d'importation.

> Si des objets sont créés automatiquement dans i-doit par l'API, l'index de recherche doit être généré automatiquement par crontab. Pour cela, le Controller a reçu une extension de fonction correspondante. Une entrée exemplaire pour un crontab se présente comme suit :
>
> 0 3 * * * /var/www/controller -u admin -p admin -i 1 -v -m search_index reindex
>
> Si vous avez des questions ou des problèmes, n'hésitez pas à contacter notre support à [support@i-doit.com](mailto:support@i-doit.com). Nous serons ravis de pouvoir vous aider.
>
> ### Migration par empilement de commutateurs en option
>
> À partir d'i-doit pro 1.7, l'empilage des switches est documenté de manière plus étendue. La catégorie "Stacking" est remplacée par des objets de type "Stacking" (à trouver sous "Autres").

> Ce nouveau type d'objet contient la catégorie "Stacking Member", qui héberge les membres du groupe de stacking.

> Lors de la mise à jour, les anciennes catégories sont conservées afin de ne vous priver d'aucune fonctionnalité. Si vous souhaitez migrer de l'ancienne procédure vers la nouvelle, notre support se fera un plaisir de vous fournir une procédure. Veuillez nous contacter à l'adresse [support@i-doit.com](mailto:support@i-doit.com).
>
> Pour les nouvelles installations, l'ancienne catégorie "Stacking" n'existe plus. Tous les fichiers et tableaux sont certes toujours disponibles, mais l'entrée dans l'interface graphique n'est plus disponible.
>
> ### VRRP/HSRP
>
> Le mappage VRRP/HSRP est également représenté dans une logique étendue à partir de la version 1.7. Le type d'objet pour les clusters VRRP/HSRP a reçu une nouvelle catégorie, dans laquelle le clustering IP VRRP/HSRP peut désormais être représenté de manière dédiée et avec plus d'informations.Une conversion ou une migration n'est pas nécessaire ici, vous pouvez utiliser la nouvelle catégorie si vous souhaitez utiliser les fonctions étendues.