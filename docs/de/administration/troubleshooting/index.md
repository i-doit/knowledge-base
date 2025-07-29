# Troubleshooting

Nicht nachvollziehbares Verhalten in i-doit. Ein Fehler? Wie soll man sich verhalten? Bitte weiterlesen! Es könnte nützlich sein. 😉

## Don't panic

Zuallererst ist es sehr wichtig, Ruhe zu bewahren. Fehler passieren. Uns. Dir. Allen. Die Welt geht nicht unter. IT-Dokumentationen lösen sich nur sehr, sehr selten in Luft auf.

Nach dem anfänglichen Schock, gilt es, die Situation zu bewerten und anschließend richtig zu handeln. "Richtig" wäre im Falle eines Fehlers, uns so schnell wie möglich, aber auch so ausführlich wie nötig zu informieren. Trage erst einmal alle Informationen zusammen, bevor du uns kontaktierst. So können wir dir schnellstmöglich ohne langwierige Rückfragen weiterhelfen.

## Fehler analysieren

**Was passiert genau, wenn der Fehler auftritt? Welche Schritte wurden durchgeführt, um den Fehler zu provozieren? Gibt es eine Fehlermeldung? Lässt sich der Fehler reproduzieren?** - Dies sind wichtige Fragen, die beantwortet werden sollten, bevor es ins Detail geht.

Hier ist eine kleine Checkliste, was du darüber hinaus recherchieren kannst:

1. **Ist der Fehler bereits bekannt und gar behoben?**<br> Hier in der Knowledge Base pflegen wir [zu einigen Fehlern eine Liste](../hotfixes/index.md). Auch unsere [FAQ](../../faq.md) ist Quell für mögliche Lösungen. Eine beherzte Suche bei der Suchmaschine deiner Wahl könnte weitere Anhaltspunkte liefern.
2. **Wurde i-doit korrekt installiert und konfiguriert?**<br> Ein Fehler kann auftreten, wenn unsere [Systemvoraussetzungen](../../installation/systemvoraussetzungen.md) und [\-einstellungen](../../installation/systemvoraussetzungen.md) nicht ausreichend beachtet worden sind. Zudem können sich diese Angaben ändern. Ein Blick in die zum Fehlerzeitpunkt aktiven Einstellungen verschafft Klarheit. Zudem sollte kontrolliert werden, ob die Dateirechte im Installationsverzeichnis von i-doit korrekt gesetzt sind.
3. **Wurde i-doit regelmäßig gepflegt?**<br> Ein Fehler könnte bereits behoben und ein Fix veröffentlicht sein. Bitte stelle sicher, die aktuelle [Version von i-doit](../../versionshistorie/index.md) einzusetzen.
4. **Gibt es übergreifende Probleme?**<br> Beispielsweise könnte es Netzwerkprobleme geben. Angebundene Dritt-Systeme könnten umkonfiguriert oder gar ausgefallen sein.
5. **Werden Log-Dateien von i-doit bereitgestellt?**<br> Beispielsweise können [Importe](../../daten-konsolidieren/index.md), [Benachrichtigungen](../../auswertungen/benachrichtigungen.md) oder [API Requests](../../i-doit-add-ons/api/index.md) mit geloggt werden. Zudem gibt es teilweise verschiedene Log Level, zum Beispiel beim [Import von Daten aus JDisc](../../_archiv/jdisc-discovery.md). Je höher das Level (Debug ist das höchste), desto detaillierter fällt die Fehleranalyse aus. Diese Logs befinden sich im Installationsverzeichnis von i-doit unter log/. Einige von ihnen können unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → Logging** aktiviert werden.
6. **Werden Exceptions geschmissen?**<br> In PHP können viele Fehler abgefangen werden. Diese Fehler werden im Installationsverzeichnis von i-doit unter log/exception.log gesammelt. Die Option wird unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → Logging → Exception Log** aktiviert.
7. **Werden Fehler von PHP an den Apache Webserver weitergereicht?**<br> Wer unseren Installationsanleitungen folgt, lässt viele Fehler vom Apache Webserver mit loggen. Zu finden ist dieses Log unter Debian-basierten Betriebssystemen unter `/var/log/apache2/error.log`.
8. **Meldet der Webserver an den Webbrowser einen Fehler?**<br> Gesetzt den Fall, der Fehler tritt über die Web GUI auf: Teilweise sendet der Webserver eine Fehlermeldung an den Browser, ohne dass er dies für den Benutzer sichtbar macht. Über die Entwicklerkonsolen der Browser wird die Kommunikation zwischen beiden sichtbar, also auch mögliche Fehler.
9. **Meldet das Betriebssystem Fehler?**<br> Vielleicht ist der Fehler nicht bei i-doit. sondern bei den verwendeten Diensten wie Apache Webserver, MySQL/MariaDB oder dem Betriebssystem selbst zu suchen. Die Dienste werden unter GNU/Linux üblicherweise über einen Init-Dienst wie systemd verwaltet. Dieses schreibt Meldungen ins Syslog, meist zu finden unter `/var/log/syslog`.

!!! success "Debugging für Anfänger"
    Um einen Fehler nicht erst im Nachhinein, sondern in Echtzeit zu beobachten, lohnt es sich, die oben genannten Log-Dateien und die Systemlast parallel zu untersuchen. Log-Dateien können unter GNU/Linux mit tail -f [log-Datei] geöffnet werden. Änderungen werden sofort sichtbar. Um die Systemlast zu beobachten, eignen sich Kommandozeilen-Befehle wie top, htop, atop und free. Hierbei ist darauf zu achten, ob die Prozesse von Apache und MySQL/MariaDB ungewöhnlich viel CPU-Zeit und/oder Arbeitsspeicher fressen.

## Bug Report schreiben

Wenn wir einen Fehler kennen, können wir ihn auch beheben. Wer einen Support-Vertrag mit uns abgeschlossen hat, verfügt bereits über die nötigen Kontaktdaten. Fehler lassen sich auch ohne Support-Vertrag über das [Kundenportal](../../administration/kundenportal.md) oder über das [Help Portal](https://help.i-doit.com) melden.

!!! attention "Wichtig"
    Bitte gib immer an, welche **Versionen** von i-doit, betroffenen [Add-ons](../../i-doit-add-ons/index.md), Apache Webserver, PHP und MySQL/MariaDB im Einsatz sind. Dabei hilft dir das **i-doit environment info file**, das im [Admin-Center](../../administration/admin-center.md) zum Download steht. **Konfigurationsdateien**, **Log-Dateien**, **Screenshots** und die **Fehlermeldung im Klartext** unterstützen ebenfalls bei der Analyse. **Antworten** auf die oben genannten Fragen helfen uns und letztendlich dir enorm weiter.

Weniger wichtig ist uns, dass du deinen Bug Report hübsch formatierst oder gar in Hochglanz-PDFs einbettest. Umso mehr freuen wir uns über einen freundlichen, sachlichen Umgangston. Aber das versteht sich von selbst.

## Wir melden uns

Bei unseren Kunden mit Support-Vertrag melden wir uns innerhalb kurzer Zeit zurück (nicht selten mit einem Lösungsvorschlag). Wir versuchen anhand deiner Informationen den Fehler auf unseren Testsystemen nachzustellen. Wird dieser Fehler als solcher erkannt, wird er von uns schnellstmöglich behoben. Bevor wir einen Fix liefern, durchläuft dieser unsere Testing-Prozesse. Qualität braucht Zeit. Danach veröffentlichen wir diesen Fix im Rahmen unserer Release-Zyklen. Warum auch immer: Manchmal dauert es ein wenig länger, um einen Fehler zu korrigieren. Wir bitten in solchen Fällen um Verständnis. Wir bleiben am Ball.

## Alles gut?

Wenn du einen Lösungsweg (Fix, Workaround, o. ä.) ausprobiert hast, würden wir uns über Feedback freuen. Hat es geklappt? Wunderbar. Existiert das Problem weiterhin? Auch gut, dann probieren wir eben alternative Wege. Es ist ein Folgefehler aufgetreten? Keine Panik, wir gehen die obigen Schritte noch einmal durch, bis alle Fehler erkannt und bestenfalls behoben sind. Und nicht vergessen: You'll never walk alone. 😉

## Öffnen und Nutzen der Entwicklerkonsole im Browser

Für eine detaillierte Fehleranalyse im Webbrowser oder bei Support-Anfragen durch das i-doit-Team ist es oft notwendig, die Entwicklerkonsole des Browsers zu öffnen. Diese zeigt wichtige Informationen wie JavaScript-Fehler, fehlgeschlagene Ladeversuche von Ressourcen oder Details zu Netzwerk-Anfragen an.

Diese Anleitung beschreibt, wie Sie die Entwicklerkonsole in den gängigsten Webbrowsern aufrufen und die für den Support relevanten Informationen extrahieren.

### Schritt 1: Entwicklerkonsole öffnen

Wählen Sie die Anleitung für Ihren Browser.

#### Google Chrome

-   **Per Tastenkombination (empfohlen)**: `F12` oder `Strg` + `Umschalt` + `I` (macOS: `Cmd` + `Option` + `I`).
-   **Über das Menü**: Drei-Punkte-Menü (`⋮`) → **Weitere Tools** → **Entwicklertools**.

#### Mozilla Firefox

-   **Per Tastenkombination (empfohlen)**: `F12` oder `Strg` + `Umschalt` + `I` (macOS: `Cmd` + `Option` + `I`).
-   **Über das Menü**: "Burger"-Menü (`≡`) → **Weitere Werkzeuge** → **Web-Entwickler-Werkzeuge**.

#### Microsoft Edge

-   **Per Tastenkombination (empfohlen)**: `F12` oder `Strg` + `Umschalt` + `I` (macOS: `Cmd` + `Option` + `I`).
-   **Über das Menü**: Drei-Punkte-Menü (`...`) → **Weitere Tools** → **Entwicklertools**.

#### Apple Safari

1.  **Menü "Entwickler" aktivieren (einmalig)**: Menüleiste → **Safari** → **Einstellungen...** → **Erweitert** → Haken bei **Menü "Entwickler" in der Menüleiste anzeigen** setzen.
2.  **Konsole öffnen**: `Cmd` + `Option` + `I` oder über das Menü **Entwickler** → **Webinformationen einblenden**.

### Schritt 2: Relevante Informationen für den Support sammeln

Nachdem Sie die Entwicklertools geöffnet haben, sehen Sie verschiedene Reiter. Je nach Art des Problems sind unterschiedliche Informationen von Bedeutung.

#### Der Reiter "Konsole" (Console)

**Wann wird das gebraucht?**
Immer dann, wenn eine Aktion in der i-doit Oberfläche nicht funktioniert. Zum Beispiel:
-   Ein Klick auf einen Button (z.B. "Speichern") hat keine Wirkung.
-   Ein Dialogfenster öffnet sich nicht oder schließt sich unerwartet.
-   Listen oder Inhalte werden nicht korrekt geladen.

**So liefern Sie die richtigen Informationen:**

1.  Öffnen Sie die Entwicklertools und wechseln Sie zum Reiter **Konsole**.
2.  Löschen Sie alle bisherigen Einträge. Klicken Sie dazu auf das "Durchgestrichener Kreis"-Symbol (`🚫`) oder nutzen Sie die Tastenkombination `Strg` + `L`. Dies stellt sicher, dass nur die relevanten Fehler aufgezeichnet werden.
3.  **Führen Sie jetzt in i-doit die Aktion aus, die den Fehler verursacht.**
4.  Achten Sie auf neue Einträge in der Konsole. **Fehler sind fast immer rot markiert** und enthalten Schlüsselwörter wie `Error`, `Exception` oder `failed`.
5.  **Erstellen Sie einen Screenshot.** Achten Sie darauf, dass die **gesamte Fehlermeldung** sichtbar ist. Manchmal müssen Sie kleine Dreiecke (`▶`) anklicken, um die vollständige Fehlermeldung auszuklappen.
6.  **Noch besser als ein Screenshot:** Klicken Sie mit der rechten Maustaste auf die Fehlermeldung und wählen Sie "Als Text kopieren" oder eine ähnliche Option. Fügen Sie diesen Text in Ihre Support-Anfrage ein.

#### Der Reiter "Netzwerkanalyse" (Network)

**Wann wird das gebraucht?**
Wenn Aktionen sehr lange dauern, Ladebalken nicht verschwinden oder Daten scheinbar verloren gehen, nachdem Sie auf "Speichern" geklickt haben. Dieser Reiter zeigt die Kommunikation zwischen Ihrem Browser und dem i-doit-Server.

**So liefern Sie die richtigen Informationen:**

1.  Öffnen Sie die Entwicklertools und wechseln Sie zum Reiter **Netzwerkanalyse** (oder **Netzwerk**).
2.  Setzen Sie einen Haken bei der Option **Protokolle nicht löschen** (oder `Persist logs`). Dies verhindert, dass die Aufzeichnung bei einem Neuladen der Seite verloren geht.
3.  Löschen Sie die bisherige Aufzeichnung durch Klick auf das "Durchgestrichener Kreis"-Symbol (`🚫`).
4.  **Führen Sie jetzt in i-doit die langsame oder fehlerhafte Aktion aus.**
5.  Beobachten Sie die Liste der Anfragen. Suchen Sie nach Zeilen, die rot markiert sind oder einen **Status-Code** wie `404` (nicht gefunden), `403` (verboten) oder `500` (Serverfehler) aufweisen.
    - *Tipp:* Sie können die Liste oft nach `XHR`-Anfragen filtern, da diese für das dynamische Laden von Daten in i-doit zuständig sind.
6.  **Klicken Sie auf die fehlerhafte Anfrage** (die rote Zeile). Rechts oder unterhalb der Liste öffnet sich ein neues Fenster mit Details zu dieser Anfrage.
7.  Wechseln Sie in diesem Detailfenster auf den Reiter **Antwort** (oder **Response**). Hier steht oft die genaue Fehlermeldung des i-doit-Servers.
8.  **Machen Sie einen Screenshot von diesem Fenster**, der sowohl die Liste der Anfragen (mit der rot markierten Zeile) als auch die Details mit der **Antwort** des Servers zeigt.

#### Der Reiter "Elemente" (Elements)

**Wann wird das gebraucht?**
Dieser Reiter wird seltener benötigt. Er ist nützlich, wenn es um Probleme mit der Darstellung von Inhalten geht (z.B. ein Feld ist verschoben oder nicht sichtbar). In der Regel wird der i-doit-Support Sie gezielt bitten, hier nachzusehen. Sie können damit die HTML- und CSS-Struktur der Seite live untersuchen.

!!! tip "Zusammenfassung für den i-doit Support"
Eine gute Fehlerbeschreibung ist der Schlüssel zu einer schnellen Lösung. Indem Sie die oben genannten Schritte befolgen, liefern Sie unserem Support-Team genau die technischen Details, die zur Analyse benötigt werden.

- Bei **Funktionsfehlern**: Senden Sie uns die Ausgabe aus der **Konsole**.
- Bei **Ladeproblemen oder "stillen" Fehlern**: Senden Sie uns einen Screenshot der **Netzwerkanalyse**, inklusive der **Antwort (Response)** des fehlerhaften Eintrags.
