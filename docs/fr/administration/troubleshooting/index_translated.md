<!-- TRANSLATED by md-translate -->
# Troubleshooting

# Dépannage

Nicht nachvollziehbares Verhalten in i-doit. Ein Fehler? Wie soll man sich verhalten? Bitte weiterlesen! Es könnte nützlich sein. 😉

Comportement incompréhensible dans i-doit. Une erreur de manipulation ? Comment se comporter ? Merci de lire la suite ! Cela pourrait être utile. 😉

## Don't panic

## Don't panic

Zuallererst ist es sehr wichtig, Ruhe zu bewahren. Fehler passieren. Uns. Dir. Allen. Die Welt geht nicht unter. IT-Dokumentationen lösen sich nur sehr, sehr selten in Luft auf.

Tout d'abord, il est très important de garder son calme. Les erreurs arrivent. Nous. A toi. A tous. Le monde ne s'arrête pas. Les documentations informatiques ne se volatilisent que très, très rarement.

Nach dem anfänglichen Schock, gilt es, die Situation zu bewerten und anschließend richtig zu handeln. "Richtig" wäre im Falle eines Fehlers, uns so schnell wie möglich, aber auch so ausführlich wie nötig zu informieren. Trage erst einmal alle Informationen zusammen, bevor du uns kontaktierst. So können wir dir schnellstmöglich ohne langwierige Rückfragen weiterhelfen.

Après le choc initial, il s'agit d'évaluer la situation et d'agir ensuite correctement. "Correct" signifierait, en cas d'erreur, nous informer le plus rapidement possible, mais aussi de manière aussi détaillée que nécessaire. Rassemble d'abord toutes les informations avant de nous contacter. Nous pourrons ainsi t'aider le plus rapidement possible, sans avoir à te poser de longues questions.

## Fehler analysieren

## Analyser les erreurs

**Was passiert genau, wenn der Fehler auftritt? Welche Schritte wurden durchgeführt, um den Fehler zu provozieren? Gibt es eine Fehlermeldung? Lässt sich der Fehler reproduzieren?** - Dies sind wichtige Fragen, die beantwortet werden sollten, bevor es ins Detail geht.

**Que se passe-t-il exactement lorsque l'erreur se produit ? Quelles étapes ont été suivies pour provoquer l'erreur ? Y a-t-il un message d'erreur ? Est-il possible de reproduire l'erreur?** - Il s'agit de questions importantes auxquelles il convient de répondre avant d'entrer dans les détails.

Hier ist eine kleine Checkliste, was du darüber hinaus recherchieren kannst:

Voici une petite liste de ce que tu peux rechercher en plus :

1. **Ist der Fehler bereits bekannt und gar behoben?**<br> Hier in der Knowledge Base pflegen wir [zu einigen Fehlern eine Liste](../hotfixes/index.md). Auch unsere [FAQ](../../faq.md) ist Quell für mögliche Lösungen. Eine beherzte Suche bei der Suchmaschine deiner Wahl könnte weitere Anhaltspunkte liefern.
2. **Wurde i-doit korrekt installiert und konfiguriert?**<br> Ein Fehler kann auftreten, wenn unsere [Systemvoraussetzungen](../../installation/systemvoraussetzungen.md) und [-einstellungen](../../installation/systemvoraussetzungen.md) nicht ausreichend beachtet worden sind. Zudem können sich diese Angaben ändern. Ein Blick in die zum Fehlerzeitpunkt aktiven Einstellungen verschafft Klarheit. Zudem sollte kontrolliert werden, ob die Dateirechte im Installationsverzeichnis von i-doit korrekt gesetzt sind.
3. **Wurde i-doit regelmäßig gepflegt?**<br> Ein Fehler könnte bereits behoben und ein Fix veröffentlicht sein. Bitte stelle sicher, die aktuelle [Version von i-doit](../../versionshistorie/index.md) einzusetzen.
4. **Gibt es übergreifende Probleme?**<br> Beispielsweise könnte es Netzwerkprobleme geben. Angebundene Dritt-Systeme könnten umkonfiguriert oder gar ausgefallen sein.
5. **Werden Log-Dateien von i-doit bereitgestellt?**<br> Beispielsweise können [Importe](../../daten-konsolidieren/index.md), [Benachrichtigungen](../../auswertungen/benachrichtigungen.md) oder [API Requests](../../i-doit-pro-add-ons/api/index.md) mit geloggt werden. Zudem gibt es teilweise verschiedene Log Level, zum Beispiel beim [Import von Daten aus JDisc](../../daten-konsolidieren/jdisc-discovery.md). Je höher das Level (Debug ist das höchste), desto detaillierter fällt die Fehleranalyse aus. Diese Logs befinden sich im Installationsverzeichnis von i-doit unter log/. Einige von ihnen können unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → Logging** aktiviert werden.
6. **Werden Exceptions geschmissen?**<br> In PHP können viele Fehler abgefangen werden. Diese Fehler werden im Installationsverzeichnis von i-doit unter log/exception.log gesammelt. Die Option wird unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → Logging → Exception Log** aktiviert.
7. **Werden Fehler von PHP an den Apache Webserver weitergereicht?**<br> Wer unseren Installationsanleitungen folgt, lässt viele Fehler vom Apache Webserver mit loggen. Zu finden ist dieses Log unter Debian-basierten Betriebssystemen unter `/var/log/apache2/error.log`.
8. **Meldet der Webserver an den Webbrowser einen Fehler?**<br> Gesetzt den Fall, der Fehler tritt über die Web GUI auf: Teilweise sendet der Webserver eine Fehlermeldung an den Browser, ohne dass er dies für den Benutzer sichtbar macht. Über die Entwicklerkonsolen der Browser wird die Kommunikation zwischen beiden sichtbar, also auch mögliche Fehler.
9. **Meldet das Betriebssystem Fehler?**<br> Vielleicht ist der Fehler nicht bei i-doit. sondern bei den verwendeten Diensten wie Apache Webserver, MySQL/MariaDB oder dem Betriebssystem selbst zu suchen. Die Dienste werden unter GNU/Linux üblicherweise über einen Init-Dienst wie systemd verwaltet. Dieses schreibt Meldungen ins Syslog, meist zu finden unter `/var/log/syslog`.

1) Le bug est-il déjà connu et corrigé ? 2) Ici, dans la base de connaissances, nous maintenons une liste de bugs(../hotfixes/index.md). Notre [FAQ](../../faq.md) est également une source de solutions possibles. Une recherche courageuse sur le moteur de recherche de ton choix pourrait fournir des indices supplémentaires.
Une erreur peut se produire si nos [Configuration requise](../../installation/configuration requise.md) et [Paramètres](../../installation/configuration requise.md) n'ont pas été suffisamment respectés. De plus, ces indications peuvent changer. Un coup d'œil aux paramètres actifs au moment de l'erreur permet d'y voir plus clair. Il faut également vérifier si les droits d'accès aux fichiers sont correctement définis dans le répertoire d'installation d'i-doit.
3. **Il y a eu des mises à jour régulières d'i-doit*<br> Il se peut qu'une erreur ait déjà été corrigée et qu'un correctif ait été publié. Veuillez vous assurer que vous utilisez la dernière [version d'i-doit](../../versionshistorie/index.md).
4. **Est-ce qu'il y a des problèmes transversaux?**<br> Par exemple, il pourrait y avoir des problèmes de réseau. Des systèmes tiers connectés pourraient être reconfigurés ou même tomber en panne.
5. **Les fichiers journaux sont-ils mis à disposition par i-doit?**<br> Par exemple, les [importations](../../consolider-données/index.md), [notifications](../../évaluations/notifications.md) ou [API Requests](../../i-doit-pro-add-ons/api/index.md) peuvent également être enregistrés. De plus, il y a parfois différents niveaux de log, par exemple pour l'[importation de données depuis JDisc](../../consolidation-données/jdisc-discovery.md). Plus le niveau est élevé (Debug est le plus élevé), plus l'analyse des erreurs est détaillée. Ces logs se trouvent dans le répertoire d'installation d'i-doit sous log/. Certains d'entre eux peuvent être activés sous **Administration → [nom du mandant] Administration → Paramètres pour [nom du mandant] → Logging**.
6. **Est-ce que des exceptions sont lancées?**<br> De nombreuses erreurs peuvent être interceptées en PHP. Ces erreurs sont collectées dans le répertoire d'installation d'i-doit sous log/exception.log. L'option est activée sous **Administration → [nom du client] Administration → Paramètres pour [nom du client] → Logging → Exception Log**.
7. **Les erreurs sont-elles transmises par PHP au serveur web Apache?**<br> Si vous suivez nos instructions d'installation, de nombreuses erreurs sont également journalisées par le serveur web Apache. Sous les systèmes d'exploitation basés sur Debian, ce journal se trouve dans `/var/log/apache2/error.log`.
8) Le serveur web signale une erreur au navigateur web... Supposons que l'erreur se produise via l'interface graphique web : Parfois, le serveur web envoie un message d'erreur au navigateur sans que cela soit visible pour l'utilisateur. La communication entre les deux est visible via les consoles de développement des navigateurs, donc aussi les erreurs éventuelles.
9. **Le système d'exploitation signale-t-il des erreurs?**<br> Peut-être que l'erreur ne vient pas d'i-doit. mais des services utilisés comme le serveur web Apache, MySQL/MariaDB ou du système d'exploitation lui-même. Sous GNU/Linux, les services sont généralement gérés par un service init comme systemd. Celui-ci écrit des messages dans le syslog, que l'on trouve généralement sous `/var/log/syslog`.

!!! success "Debugging für Anfänger"
    Um einen Fehler nicht erst im Nachhinein, sondern in Echtzeit zu beobachten, lohnt es sich, die oben genannten Log-Dateien und die Systemlast parallel zu untersuchen. Log-Dateien können unter GNU/Linux mit tail -f [log-Datei] geöffnet werden. Änderungen werden sofort sichtbar. Um die Systemlast zu beobachten, eignen sich Kommandozeilen-Befehle wie top, htop, atop und free. Hierbei ist darauf zu achten, ob die Prozesse von Apache und MySQL/MariaDB ungewöhnlich viel CPU-Zeit und/oder Arbeitsspeicher fressen.

! !! success "Débogage pour débutants".
    Pour observer une erreur non pas après coup, mais en temps réel, il vaut la peine d'examiner en parallèle les fichiers log mentionnés ci-dessus et la charge du système. Les fichiers log peuvent être ouverts sous GNU/Linux avec tail -f [fichier log]. Les modifications sont immédiatement visibles. Pour observer la charge du système, des commandes en ligne de commande telles que top, htop, atop et free sont appropriées. Il faut alors faire attention si les processus d'Apache et de MySQL/MariaDB consomment une quantité inhabituelle de temps CPU et/ou de mémoire vive.

## Bug Report schreiben

## Écrire un rapport de bug

Wenn wir einen Fehler kennen, können wir ihn auch beheben. Wer einen Support-Vertrag mit uns abgeschlossen hat, verfügt bereits über die nötigen Kontaktdaten. Fehler lassen sich auch ohne Support-Vertrag über das [Kundenportal](../../administration/kundenportal.md) oder über das [Help Portal](https://help.i-doit.com) melden.

Si nous connaissons une erreur, nous pouvons aussi la corriger. Les personnes qui ont conclu un contrat d'assistance avec nous disposent déjà des coordonnées nécessaires. Les erreurs peuvent également être signalées sans contrat de support via le [portail clients](../../administration/kundenportal.md) ou via le [portail d'aide](https://help.i-doit.com).

!!! attention "Wichtig"
    Bitte gib immer an, welche **Versionen** von i-doit, betroffenen [Add-ons](../../i-doit-pro-add-ons/index.md), Apache Webserver, PHP und MySQL/MariaDB im Einsatz sind. Dabei hilft dir das **i-doit environment info file**, das im [Admin Center](../../administration/admin-center.md) zum Download steht. **Konfigurationsdateien**, **Log-Dateien**, **Screenshots** und die **Fehlermeldung im Klartext** unterstützen ebenfalls bei der Analyse. **Antworten** auf die oben genannten Fragen helfen uns und letztendlich dir enorm weiter.

! !! attention "Important"
    Veuillez toujours indiquer quelles **versions** d'i-doit, des [add-ons](../../i-doit-pro-add-ons/index.md) concernés, du serveur web Apache, de PHP et de MySQL/MariaDB sont utilisées. Le **i-doit environment info file**, qui peut être téléchargé dans le [Admin Center](../../administration/admin-center.md), t'y aidera. Les **fichiers de configuration**, les **fichiers log**, les **captures d'écran** et le **message d'erreur en texte clair** aident également à l'analyse. Les **réponses** aux questions susmentionnées nous aident énormément et, en fin de compte, t'aident toi aussi.

Weniger wichtig ist uns, dass du deinen Bug Report hübsch formatierst oder gar in Hochglanz-PDFs einbettest. Umso mehr freuen wir uns über einen freundlichen, sachlichen Umgangston. Aber das versteht sich von selbst.

Il est moins important pour nous que tu formates joliment ton rapport de bug ou que tu l'intègres dans des PDF sur papier glacé. Nous nous réjouissons d'autant plus d'un ton amical et objectif. Mais cela va de soi.

## Wir melden uns

## Nous vous contacterons

Bei unseren Kunden mit Support-Vertrag melden wir uns innerhalb kurzer Zeit zurück (nicht selten mit einem Lösungsvorschlag). Wir versuchen anhand deiner Informationen den Fehler auf unseren Testsystemen nachzustellen. Wird dieser Fehler als solcher erkannt, wird er von uns schnellstmöglich behoben. Bevor wir einen Fix liefern, durchläuft dieser unsere Testing-Prozesse. Qualität braucht Zeit. Danach veröffentlichen wir diesen Fix im Rahmen unserer Release-Zyklen. Warum auch immer: Manchmal dauert es ein wenig länger, um einen Fehler zu korrigieren. Wir bitten in solchen Fällen um Verständnis. Wir bleiben am Ball.

Nous répondons rapidement à nos clients sous contrat d'assistance (souvent avec une proposition de solution). Sur la base de tes informations, nous essayons de reproduire l'erreur sur nos systèmes de test. Si cette erreur est reconnue comme telle, nous la corrigeons le plus rapidement possible. Avant de livrer un correctif, celui-ci passe par nos processus de test. La qualité prend du temps. Ensuite, nous publions ce correctif dans le cadre de nos cycles de release. Quelle qu'en soit la raison, il faut parfois un peu plus de temps pour corriger une erreur. Dans ce cas, nous vous remercions de votre compréhension. Nous restons vigilants.

## Alles gut?

## Tout va bien ?

Wenn du einen Lösungsweg (Fix, Workaround, o. ä.) ausprobiert hast, würden wir uns über Feedback freuen. Hat es geklappt? Wunderbar. Existiert das Problem weiterhin? Auch gut, dann probieren wir eben alternative Wege. Es ist ein Folgefehler aufgetreten? Keine Panik, wir gehen die obigen Schritte noch einmal durch, bis alle Fehler erkannt und bestenfalls behoben sind. Und nicht vergessen: You'll never walk alone. 😉

Si tu as essayé une solution (correction, solution de contournement, etc.), nous serions heureux de recevoir ton feedback. Cela a-t-il fonctionné ? C'est très bien. Le problème persiste-t-il ? Très bien, alors nous essayons d'autres solutions. Une erreur de suivi s'est produite ? Pas de panique, nous reprenons les étapes ci-dessus jusqu'à ce que toutes les erreurs soient identifiées et, dans le meilleur des cas, corrigées. Et n'oubliez pas : You'll never walk alone. 😉