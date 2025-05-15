# Release Notes 1.7

> Mit i-doit 1.7 gibt es einige Neuerungen, die vor dem Update zu beachten sind.
>
> ### Geänderte Systemvoraussetzungen
>
> Die Systemvoraussetzungen haben sich geändert. i-doit benötigt nun mindestens MySQL 5.6 oder MariaDB 10 als Datenbankplattform. Bitte updaten Sie Ihre Datenbankplattform, bevor sie das i-doit Update ausführen.
>
> Anleitungen und Hinweise zum Update des Datenbanksystems finden Sie in unserer Knowledge Base unter: [Upgrade zu MySQL5.6 und MariaDB 10.0](../../upgrades-und-umzuege/upgrade-zu-mysql-5.6-oder-mariadb-10.0.md)
>
> Wenn Sie Fragen oder Probleme haben, zögern Sie nicht und wenden sich bitte an unseren Support unter [support@i-doit.com](mailto:support@i-doit.com). Wir freuen uns, wenn wir Ihnen helfen können.
>
> ### Suchindex
>
> i-doit verfügt ab Version 1.7 über einen neuen Suchindex. Dieser ist notwendig, um die Objektsuche zu benutzen. Er wird beim Update von 1.6 auf 1.7 automatisch generiert. Ausnahmen sind Installationen mit mehr als 500.000 lizenzpflichtigen Objekten. Installationen mit mehr als 500.000 lizenzpflchtigen Objekten bekommen beim Update einen Hinweis auf die manuelle Generierung des Suchindex. Diese wird im Folgenden beschrieben.
>
> Grundsätzlich wird der Suchindex bei manueller Eingabe oder bei Importen automatisch aktualisiert.
>
> Werden Objekte durch die API automatisiert in i-doit angelegt, muss der Suchindex per Crontab automatisch generiert werden. Dafür hat der Controller eine entsprechende Funktionswerweiterung bekommen. Ein exemplarischer Eintrag für einen Crontab sieht wie folgt aus:
>
> 0 3 \* \* \* /var/www/controller -u admin -p admin -i 1 -v -m search\_index reindex
>
> Wenn Sie Fragen oder Probleme haben, zögern Sie nicht und wenden sich bitte an unseren Support unter [support@i-doit.com](mailto:support@i-doit.com). Wir freuen uns, wenn wir Ihnen helfen können.
>
> ### Optionale Switch Stacking Migration
>
> Ab i-doit 1.7 wird das Stacking von Switchen erweitert dokumentiert. Die Kategorie "Stacking" wird durch Objekte des Typs "Stacking" (zu finden unter "Andere") abgelöst.
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
