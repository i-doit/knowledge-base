# Vorgehensweise mit VIVA

IT-Grundschutz-Kataloge verwalten
---------------------------------

### Kataloge importieren

Der erste Schritt hin zur Dokumentation ist der Import der aktuellen IT-Grundschutz-Kataloge. Dazu wird bereits beim ersten Aufruf von VIVA unter **Extras → VIVA** aufgefordert. Es stehen verschiedene Kataloge zur Auswahl:

*   Ergänzungslieferung (EL) 15 von 2016 in Deutsch
*   EL 14 von 2014 in Deutsch
*   EL 13 von 2013 in Deutsch
*   EL 13 von 2013 in Englisch
*   EL 12 von 2011 in Deutsch und
*   EL 11 von 2009 in Deutsch.

Die Kataloge stehen auf der Website des BSI als Download zur Verfügung. Je nach EL sind gegebenenfalls kleinere Zwischenschritte nötig, um die Kataloge in das richtige Dateiformat zu konvertieren.

Für den Import sind Zwischenschritte nötig, weil das vom BSI angebotene Format nicht direkt von VIVA verarbeitet werden kann. Auf der BSI-Website stehen die Kataloge zum Download. Die weiteren Schritte:

1.  Nach dem Download: ZIP-Datei entpacken
2.  Selbstextrahierendes Archiv (.exe) entpacken
3.  In Ordner GSHB wechseln; dort ist der Unterordner DE vorhanden
4.  Ordner DE in el15de umbenennen
5.  Ordner el15de im ZIP-Format packen

[![Kataloge importieren](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/1-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/1-vv.png)

Die ZIP-Datei kann nun von VIVA verarbeitet werden. Im Menüpunkt _Kataloge_ ist der Button _Importieren_ anzuklicken. Es erscheint ein Dialogfeld, in dem die gewünschte EL und die entsprechende ZIP-Datei auszuwählen sind. Bestätigt wird die Auswahl durch Klick auf _Import starten_. Der Import kann mehrere Minuten in Anspruch nehmen und solte nicht unterbrochen werden.

Nach dem erfolgreichen Import erscheint die EL auf der geladenen Seite und kann verwendet werden. Sollen weitere ELs genutzt werden, sind die letzten Schritte zu wiederholen.

[![Importierte Kataloge im Menübaum](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/2-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/2-vv.png)

### Kataloge anpassen

IT-Grundschutz-Kataloge können individuell angepasst werden. So können neue Bausteine, Gefährdungen und Maßnahmen angelegt, bestehende angepasst oder gelöscht werden.

Ebenso ist die Zuordnung von Gefährdungen und Maßnahmen zu Bausteinen möglich. Die Angabe einer Qualifizierungsstufe bei einer zugeordneten Maßnahme wird berücksichtigt. Weiterhin können Sie die zu den jeweiligen Maßnahmen passenden Prüffragen einsehen, ergänzen und bearbeiten.

!!! attention "Es sind die Hinweise im BSI-Standard 100-2 zu beachten, falls von den mitgelieferten Katalogen abgewichen wird."

Informationsverbünde modellieren
--------------------------------

Unter dem Menüpunkt _Informationsverbünde_ können einer oder mehrere Informationsverbünde angelegt werden. Sie stellen den Ausgangspunkt für die tiefer greifende Dokumentation dar. Beim Anlegen ist darauf zu achten, welche IT-Grundschutz-Kataloge auf den Informationsverbund angewendet werden sollen.

[![Informationsverbund erstellen](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/3-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/3-vv.png)

Durch das Anlegen eines neuen Informationsverbunds wird automatisch eine Zielgruppe mit derselben Bezeichnung und passendem Zielobjekt angelegt. Auf diese Zielgruppe werden die Bausteine der Schicht 1 _Übergreifende Aspekte_ angewendet. Ebenso werden die [Schutzbedarfskategorien](#schutzbedarfskategorien-definieren) mit den Beispielen aus dem BSI-Standard 100-2 ausgefüllt.

Zielgruppen anlegen
-------------------

In Zielgruppen werden sich ähnelnde Zielobjekte zu Gruppen zusammengefasst. Dieser Vorgang gehört zur Strukturanalyse (Siehe BSI-Standard 100-2, Kapitel 4.2.). Zielgruppen erscheinen im Menübaum unterhalb der fünf Schichten eines Informationsverbunds. Jede Zielgruppe wird beim Anlegen zunächst einer der folgenden Schichten zugeordnet:

1.  Übergreifende Aspekte,
2.  Infrastruktur,
3.  IT-Systeme,
4.  Netze und
5.  Anwendungen.

[![Zielgruppe erstellen](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/4-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/4-vv.png)

Die Schichtzugehörigkeit kann durch Zuordnen von Bausteinen aus anderen Schichten erweitert werden. Der Informationsverbund selbst ist der 1. Schicht zugeordnet, was automatisch beim Anlegen eines neuen Informationsverbunds geschieht. Eine Ausnahme bildet der [Wechsel vom alten Modul (Migration)](#migrierenvombisherigen-itgs-modul): Dort wird die Schichtzuordnung anhand der zugeordneten Bausteine vorgenommen.

[![Zielgruppe R 2 erscheint in 2 Schichten.](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/5-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/5-vv.png)

Zielgruppen der Schichten 4 _Netze_ und 5 _Anwendungen_ verhalten sich unterschiedlich zu denjenigen der übrigen Schichten: Zielgruppen der Schicht 4 enthalten keine [Zielobjekte](#zielobjekte-zuordnen), sondern bestehen aus der Verknüpfung aus zwei Zielgruppen, was im Punkt _Kommunikationsverbindung_ dokumentiert wird. Anstatt zwei Zielgruppen zu verknüpfen, kann alternativ eine Gruppe mit etwas außerhalb des Informationsverbunds stehendem verknüpft werden. Beispiel: Die Zielgruppe ist mit dem Internet verknüpft.

[![Zielgruppe der Schicht 4 bearbeiten](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/6-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/6-vv.png)

Zielgruppen der Schicht 5 werden um die Art der Information, die sie verarbeiten, erweitert. VIVA bringt bereits einige Arten mit, die nachbearbeitet werden können (und auch sollten). Wichtig ist hier die Angabe, ob personenbezogene Daten verarbeitet werden, weil diese Information im weiteren Verlauf immer wieder Verwendung findet. Diese Art ist daher auch nicht entfernbar.

[![Zielgruppe der Schicht 5 bearbeiten](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/7-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/7-vv.png)

Zielobjekte zuordnen
--------------------

Innerhalb von Zielgruppen werden Zielobjekte bestimmt. Eine Ausnahme stellen die [Zielgruppen](#zielgruppen-anlegen) der Schicht 4 _Netze_ dar. Dies ist Teil der Strukturanalyse. VIVA ist an dieser Stelle eng mit den CMDB-Daten aus i-doit verzahnt. Über den aus i-doit bekannten Objekt-Browser werden neue Zielobjekte ausgewählt.

[![Zielobjekte auflisten](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/8-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/8-vv.png)

Die Verzahnung mit den CMDB-Daten spiegelt sich an weiteren Stellen wieder. Überall dort, wo es sinnvoll erscheint, können beispielsweise Kontakte (Personen, Personengruppen, Organisationen) verknüpft werden.

Zielgruppenvererbung
--------------------

Zielobjekte erben automatisch die Eigenschaften ihrer Zielgruppe, sodass keine weiteren Anpassungen nötig sind. Soweit die Theorie. Die Praxis hat jedoch gezeigt, dass einige Eigenschaften nicht immer synchron zu allen Zielobjekten gleichzeitig passen.

Das betrifft vor allem die [Umsetzung von Maßnahmen](#massnahmenumsetzen). Daher können innerhalb eines Zielobjekts einige wenige von der Zielgruppe abweichende Eigenschaften festgehalten werden, um beispielsweise das Datum der Umsetzung, das gegebenenfalls differieren darf, zu dokumentieren.

!!! attention "Die Referenzdokumente beachten die Vererbung nicht, sondern ziehen die Informationen aus den Zielgruppen und nicht aus den Zielobjekten."

Schutzbedarfskategorien definieren
----------------------------------

Unterhalb eines Informationsverbunds erscheint im Menübaum der Punkt _Schutzbedarfskategorien_. Laut BSI-Standard 100-2, Kapitel 4.3.1 werden an dieser Stelle die Schadensszenarien mit Hilfe der Schutzbedarfskategorien definiert. Beim Anlegen eines Informationsverbunds werden die Beispiele, die im Standard genannt werden, übernommen und sollten an die eigene Organisation angepasst werden.

[![Schutzbedarfskategorie bearbeiten](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/9-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/9-vv.png)

Schutzbedarf festlegen
----------------------

Als Teil der Schutzbedarfsfeststellung wird der Schutzbedarf der einzelnen [Zielgruppen](#zielgruppen-anlegen) festgestellt. (Siehe BSI-Standard 100-2, Kapitel 4.3.2 bis 4.3.5.) Daher sind die entsprechenden Formularfelder innerhalb einer Zielgruppe zu finden.

[![Schutzbedarf bearbeiten](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/10-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/10-vv.png)

Eine Besonderheit gilt in der Schicht 4 _Netze_: Der Schutzbedarf der Kommunikationsverbindungen richtet sich nach der zugewiesenen Kritikalität.

[![Schutzbedarf einer Kommunikationsverbindung bearbeiten](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/11-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/11-vv.png)

Bausteine zuordnen
------------------

Den [Zielgruppen](#zielgruppen-anlegen) werden Bausteine aus den IT-Grundschutz-Katalogen zugeordnet. (Siehe BSI-Standard 100-2, Kapitel 4.4.) Bausteine enthalten Gefährdungen und Maßnahmen inklusive derer Qualifizierungsstufen, die VIVA automatisch bei einer Bausteinzuordnung berücksichtigt.

[![Bausteine einer Zielgruppe zuordnen](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/12-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/12-vv.png)

Werden Bausteine aus einer anderen Schicht als der der Zielgruppe zugeordneten Schicht ausgewählt, führt dies dazu, dass diese Zielgruppe auch dieser anderen Schicht zugeordnet wird. Im Menübaum taucht diese Gruppe somit in mehreren Schichten gleichzeitig auf.

Beim Anlegen eines neuen [Informationsverbunds](#informationsverbuende-modellieren) werden der automatisch miterstellten Zielgruppe sämtliche Bausteine der Schicht 1 _Übergreifende Aspekte_ zugeordnet.

Maßnahmen umsetzen
------------------

Maßnahmen sind per Definition darauf ausgerichtet, umgesetzt zu werden, um identifizierten Gefährdungen entgegen zu wirken. Anhand der Qualifizierungsstufe, die jede verknüpfte Maßnahme erhält, ist eine Priorisierung möglich. (Siehe BSI-Standard 100-2, Kapitel 4.4 und 4.5.)

[![Zugeordnete Maßnahmen auflisten](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/13-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/13-vv.png)

Bei einem Klick auf eine verknüpfte Maßnahme unterhalb von einem einer [Zielgruppe](#zielgruppen-anlegen) [zugeordneten Baustein](#bausteine-zuordnen), kann der Status ihrer Umsetzung im Detail dokumentiert werden.

[![Umsetzung einer Maßnahme dokumentieren](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/14-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/14-vv.png)

Prüffragen beantworten
----------------------

In der Regel gehören zu Maßnahmen eine Reihe von Prüffragen, die als Checkliste zum Abhaken zu verstehen sind. Alle Fragen können entweder mit "ja" oder mit "nein" beantwortet werden.

Die in den Katalogen mitgelieferten Prüffragen werden bereits beim [Import](#kataloge-importieren) berücksichtigt und werden [innerhalb der Maßnahmen](#kataloge-anpassen) angezeigt. Zudem können diese bearbeitet, gelöscht oder durch neue ergänzt werden.

[![Prüffragen zu einer Maßnahme beantworten](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/15-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/15-vv.png)

Die Checklisten, die sich aus den Prüffragen zusammensetzen, sind innerhalb von [Zielgruppen](#zielgruppen-anlegen) [zugeordneten Maßnahmen](#massnahmen-umsetzen) verfügbar.

Ergänzende Sicherheitsanalyse durchführen
-----------------------------------------

Die ergänzende Sicherheitsanalyse (Siehe BSI-Standard 100-2, Kapitel 4.6.) wird für jede [Zielgruppe](#zielgruppen-anlegen) durchgeführt. Ob dieser Schritt überhaupt nötig ist, erkennt VIVA selbstständig anhand der Daten aus der Schutzbedarfsfeststellung (der Kommunikationsverbindungen) und der Angabe, ob über diese Angaben hinaus eine ergänzende Sicherheitsanalyse nötig ist.

[![Ergänzende Sicherheitsanalyse bearbeiten](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/16-vv.png)](../../assets/images/de/i-doit-pro-add-ons/viva/vorgehensweise/16-vv.png)