# Templates

i-doit erlaubt das Erstellen von Objekten, welche als Vorlage für neue [Objekte](../grundlagen/struktur-it-dokumentation.md) dienen. Der Benutzer kann eine große Menge an Objekten, die identische [Attribute](../grundlagen/struktur-it-dokumentation.md) besitzen – zum Beispiel Server der gleichen Hardware – vereinfacht anlegen.

Aufruf
------

Du findest die Template-Funktion in i-doit unter **Extras → CMDB → Templates**. Hier ist es möglich vorhandene Templates einzusehen und zu bearbeiten, neue Templates anzulegen und Objekte aus Templates zu erzeugen.

[![templates-einsehen](../assets/images/de/effizientes-dokumentieren/templates/1-temp.png)](../assets/images/de/effizientes-dokumentieren/templates/1-temp.png)

Konfiguration
-------------

Unter **Verwaltung **→**** **Allgemeine Einstellungen** **→** **Template Konfiguration** können Einstellungen zu Templates getätigt werden. Mit der Aktivierung des Template-Filters ist es möglich, Templates in den [Objeklisten](../grundlagen/objekt-liste/index.md) anzuzeigen. Wenn du innerhalb einer Objektliste den Status-Filter auf Template stellst, werden dir hier alle Templates, die diesem [Objekttyp](../grundlagen/struktur-it-dokumentation.md) zugehörig sind, angezeigt.

[![templates-anzeigen](../assets/images/de/effizientes-dokumentieren/templates/2-temp.png)](../assets/images/de/effizientes-dokumentieren/templates/2-temp.png)

Erstellen eines Templates
-------------------------

Sobald du die Template-Funktion aufgerufen hast, kannst du unter **Neues Template erzeugen**im Baum-Menü auf der linken Seite ein Template erstellen. Im ersten Schritt wirst du aufgefordert festzulegen, welchem Objekttyp das Template angehören soll. Wähle diesen im Drop-Down-Menü aus und bestätige mit der Schaltfläche **Neue Vorlage erstellen**. Die nun folgende Konfiguration eines Templates ist identisch zur Erstellung eines regulären Objekts. Hinterlege alle Inhalte, die du später auf die Objekte übertragen möchtest und speichere deine Eingaben.

Alternativ kannst du innerhalb einer Objektliste über das Pfeil-Icon neben der Schaltfläche **Neu** die Konfiguration zur Erstellung eines Templates aufrufen.

[![templates-erstellen](../assets/images/de/effizientes-dokumentieren/templates/3-temp.png)](../assets/images/de/effizientes-dokumentieren/templates/3-temp.png)

Vorhandene Templates einsehen, bearbeiten und löschen
-----------------------------------------------------

In der Template-Funktion kannst du dir unter **Vorhandene Templates** im Baum-Menü auf der linken Seite alle bisher erstellten Templates anzeigen lassen. Um eines der Templates zu bearbeiten kannst du dieses anklicken. Wenn du die Checkbox eines oder mehrerer Templates aktivierst kannst du die ausgewählten Templates mit der Schaltfläche **Purge** vom System entfernen. Bitte sei dir sicher, dass du die ausgewählten Templates löschen möchtest, da gelöschte Templates nicht wiederhergestellt werden können.

[![templates-entfernen](../assets/images/de/effizientes-dokumentieren/templates/4-temp.png)](../assets/images/de/effizientes-dokumentieren/templates/4-temp.png)

Erzeugen von Objekten aus Templates
-----------------------------------

Verwende in der Template-Funktion **Objekt(e) anlegen**  im Baum-Menü auf der linken Seite um Objekte auf Basis deiner Templates zu generieren.

Hier wirst du zuerst aufgefordert, grundlegende Informationen zu deinen neuen Objekten anzugeben. Im ersten Schritt gilt es den Objekt-Titel sowie Objektyp deiner Objekte anzugeben. Da die Template-Funktion die gleichzeitige Erzeugung mehrerer Objekte erlaubt, kannst du ebenfalls festlegen, wie viele (identische) Objekte erstellt werden sollen. Wenn du dich dazu entscheidest, mehr als ein Objekt zu generieren, öffnet sich ein zusätzlicher Bereich, der dich auswählen lässt, ob du ein Zähler-Suffix verwenden möchtest. Hierbei ist es ebenfalls möglich die führenden Nullstellen und den Wert, mit dem die Zählung begonnen werden soll, anzugeben. Weiterhin lassen sich die Attribute **Einsatzzweck** und **Kategorie** der neuen Objekte bereits vorab angeben.

Im Abschnitt **Template(s) wählen** kannst du nun festlegen, welches Template oder welche Templates für die Erzeugung der Objekte verwendet werden sollen. Wähle die gewünschten Templates im Drop-Down-Menü aus und füge diese nacheinander über die Schaltfläche **Ausgewähltes Template verwenden** hinzu. Informationen mehrerer Templates werden in jedem Objekt kombiniert.  
[![templates-objerzeugen](../assets/images/de/effizientes-dokumentieren/templates/5-temp.png)](../assets/images/de/effizientes-dokumentieren/templates/5-temp.png)

Aufrufen der Template-Funktionen aus einer Objektliste
------------------------------------------------------

Du kannst die Funktionen zum Erstellen neuer Templates und zum erstellen von Objekten aus Templates auch über die Objektlisten aufrufen. Verwende hierfür den nach unten zeigenden Pfeil neben der Schaltfläche **Neu** um das Kontextmenü zu öffnen. Dieses enthält die entsprechenden Punkte, um direkt zum gewünschten Vorgang zu springen.

[![templates-einsehen](../assets/images/de/effizientes-dokumentieren/templates/6-temp.png)](../assets/images/de/effizientes-dokumentieren/templates/6-temp.png)

Default-Template in der Objekttyp-Konfiguration
-----------------------------------------------

In der [Objekttypkonfiguration](../grundlagen/benutzerdefinierte-objekttypen.md) kannst du ein Default-Template auswählen. Hier kann jedes von dir erstellte Template verwendet werden. Solltest du ein Default-Template angeben, werden alle neu erstellten Objekte gemäß dieser Vorlage vorbefüllt. Selbstverständlich kannst du Objekte, die auf diese Weise erstellt wurden, jederzeit anpassen und die vorbefüllten Werte ändern.

[![templates-default](../assets/images/de/effizientes-dokumentieren/templates/7-temp.png)](../assets/images/de/effizientes-dokumentieren/templates/7-temp.png)