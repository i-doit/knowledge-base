# Massenänderung

Die Massenänderung ist eine Funktion in i-doit, mit der auf Basis von Änderungsvorlagen mehrere [Objekte](../grundlagen/struktur-it-dokumentation.md) in einem Schritt geändert werden können. Bei dieser Änderung übernehmen die ausgewählten Objekte die [Attribute](../grundlagen/struktur-it-dokumentation.md) der Änderungsvorlage.

Aufruf
------

Du findest die Massenänderung unter **Extras → CMDB → Massenänderung**. Hier ist es möglich, vorhandene Änderungsvorlagen einzusehen und zu bearbeiten, neue Änderungsvorlagen anzulegen und Objekte gemäß der Vorlagen anzupassen.  
[![massenaenderung-finden](../assets/images/de/effizientes-dokumentieren/massenaenderung/1-mae.png)](../assets/images/de/effizientes-dokumentieren/massenaenderung/1-mae.png)

Erstellen einer Änderungsvorlage
--------------------------------

Sobald du die Massenänderung aufgerufen hast kannst du unter **Neue Vorlage erstellen**  im Baum-Menü auf der linken Seite eine Änderungsvorlage erstellen. Im ersten Schritt wirst du aufgefordert, festzulegen, welchem [Objekttyp](../grundlagen/struktur-it-dokumentation.md) die Vorlage angehören soll. Wähle diesen im Drop-Down-Menü aus und bestätige mit der Schaltfläche **Neue Vorlage erstellen**. Die nun folgende Konfiguration einer Vorlage ist identisch zur Erstellung eines regulären Objekts. Hinterlege alle Inhalte, die du später auf die Objekte übertragen möchtest und speichere deine Eingaben.

[![massenaenderung-erstellen](../assets/images/de/effizientes-dokumentieren/massenaenderung/2-mae.png)](../assets/images/de/effizientes-dokumentieren/massenaenderung/2-mae.png)

!!! info "Hinweis"

    Du kannst auch das **Generische Template** als Objekttyp für deine Änderungsvorlagen angeben. Hierdurch kannst du die Vorlage auf jeden beliebigen Objekttyp anwenden. Sollte diese Vorlage jedoch über Inhalte in Kategorien verfügen, die den zu ändernden Objekten nicht zugewiesen sind, wirst du diese Inhalte in den Objekten nur einsehen können, wenn du die entsprechenden [Kategorien](../grundlagen/struktur-it-dokumentation.md) zuweist.

Vorhandene Änderungsvorlagen einsehen, bearbeiten und löschen
-------------------------------------------------------------

In der Massenänderung kannst du dir unter **Vorhandene Vorlagen** im Baum-Menü auf der linken Seite alle bisher erstellten Änderungsvorlagen anzeigen lassen. Um eine der Änderungsvorlagen zu bearbeiten, kannst du diese anklicken. Wenn du die Checkbox einer oder mehrerer Änderungsvorlagen aktivierst, kannst du die ausgewählten Änderungsvorlagen mit der Schaltfläche **Purge** vom System entfernen. Bitte sei dir sicher, dass du die ausgewählten Änderungsvorlagen löschen möchtest, weil gelöschte Änderungsvorlagen nicht wiederhergestellt werden können.

[![massenaenderung-loeschen](../assets/images/de/effizientes-dokumentieren/massenaenderung/3-mae.png)](../assets/images/de/effizientes-dokumentieren/massenaenderung/3-mae.png)

Ändern von Objektinformationen mit einer Änderungsvorlage
---------------------------------------------------------

Verwende in der Massenänderung den Punkt **Massenänderung** im Baum-Menü auf der linken Seite, um Objekte auf Basis deiner Änderungsvorlagen zu bearbeiten.

Wähle hier im ersten Schritt die Objekte aus, die du anpassen möchtest. Hier kannst du beliebig viele Objekte selektieren. Im nächsten Schritt kannst du die entsprechende Änderungsvorlage aus dem Drop-Down-Menü auswählen, auf deren Basis die Objekte angepasst werden sollen.

Die Optionen im dritten Schritt legen fest, wie leere Felder der Vorlage und [Multi-Value-Kategorien](../grundlagen/struktur-it-dokumentation.md) behandelt werden sollen. Für leere Felder in der Vorlage stehen zwei Möglichkeiten zur Auswahl:

*   **Leere Felder in der Vorlage ignorieren und diese Felder in den Zielobjekten unangetastet lassen**
*   **Felder explizit leeren, wenn die Vorlage keinen Inhalt für diese Felder bereithält**

So kannst du konfigurieren, ob deine Objekte exakt an die Änderungsvorlage angeglichen werden sollen oder nur in der Änderungsvorlage dokumentierte Werte auf deine bestehenden Objekte übertragen werden sollen.

Multi-Value-Kategorien können auf drei Arten gehandhabt werden:

*   **Kategorie unangetastet lassen**
*   **Kategorieeinträge aus der Vorlage zu bestehenden Einträgen hinzufügen und bestehende Einträge unangetastet lassen**
*   **Bestehende Kategorieeinträge löschen und Einträge aus der Vorlage übernehmen**

Wenn du die Kategorien unangetastet lässt, werden unter keinen Umständen Inhalte in Multi-Value-Kategorien übertragen - unabhängig davon, ob diese bereits über Inhalte verfügen oder nicht. Die Option zum Hinzufügen von Kategorieeinträgen lässt deine bereits dokumentierten Inhalte bestehen und ergänzt alle Einträge deiner Vorlage. Beim Löschen bestehender Einträge werden alle bisher existierenden Multi-Value-Einträge gelöscht und durch die Inhalte der Änderungsvorlage ersetzt.

Sobald alle Einstellungen deinen Anforderungen entsprechen kannst du die Änderungen mit der Schaltfläche **Massenänderung durchführen** auf die Objekte übertragen.  
[![massenaenderung-durchfuehren](../assets/images/de/effizientes-dokumentieren/massenaenderung/4-mae.png)](../assets/images/de/effizientes-dokumentieren/massenaenderung/4-mae.png)