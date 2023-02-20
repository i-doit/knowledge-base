# checkmk 2 WATO Konfiguration auf Basis von CMDB-Daten generieren

i-doit liefert detaillierte Informationen über Ihre IT-Infrastruktur, einschließlich aller Ihrer Hosts. Diese Hosts können mit checkmk geteilt werden, so dass Sie Ihre Hosts nur einmal dokumentieren/konfigurieren müssen. Um diese Hosts an checkmk zu übergeben, führen Sie aus:

    idoitcmk push

Denken Sie daran, dass Objekte in i-doit markiert sein müssen, damit sie nach checkmk exportiert werden können. Überprüfen Sie zuerst die Kategorie Check_MK Host, bevor Sie diesen Befehl ausführen.

**Empfehlung:** Führen Sie diesen Befehl jedes Mal aus, wenn Sie Ihre CMDB-Daten ändern.

Optionen
--------

Diese Optionen sind während der Laufzeit verfügbar:

| Option | Erforderlich | Beschreibung |
| --- | --- | --- |
| --include-ids IDs | Nein | i-doit-Objekte nach ID filtern |
| --include-title TITLE | Nein | i-doit Objekte nach Bezeichnung filtern |
| --include-type TYPE | Nein | i-doit Objekte nach Typ filtern |

IDs ist eine durch Kommata getrennte Liste von Objekt ID’s.

TITLE bedeutet einen beliebigen Objekt Bezeichnung, einschließlich der Platzhalter *, ? und [ae]. Bei TITLE wird die Groß- und Kleinschreibung nicht beachtet. Option “Wiederholen”, um mehr als eine Objekt Bezeichnung zu finden.

TYPE bedeutet den Objekt-Typ, der durch seine Bezeichnung, seine Konstante oder seinen Bezeichner dargestellt wird. Wie bei TITLE sind Wildcards erlaubt und Groß- und Kleinschreibung wird nicht berücksichtigt. Option “Repeat” (Wiederholen), um mehr als einen Objekt-Typ zu finden.

Jede Kombination dieser Filter wird logisch durch oder kombiniert. Beispiel: Alle Hosts mit den Objekt-IDs “1”, “2” und “3” und alle Hosts, deren Titel mit “\*.example.com” übereinstimmt, werden gepusht.:

    idoitcmk push --include-ids 1,2,3 --include-title "*.example.com"

Konfiguration Diese [Konfigurationseinstellungen](./checkmk2-konfiguration.md) sind verfügbar:
------------------------------------------------------------------------------------------------------------------------------

| Key | Typ | Erforderlich | Standard | Beschreibung |
| --- | --- | --- | --- | --- |
| objectTypes.contactGroup | String | Nein | C__OBJTYPE__PERSON_GROUP | Kontaktgruppen sind durch diesen Typ gekennzeichnet (Konstante verwenden!) |
| push.activateChanges | Boolean | Nein | false | Aktivieren Sie alle Änderungen mit Ausnahme der “foreign changes” |
| push.autoMatching | String | Nein | all | Deaktivieren Sie autoTagging (none), suchen Sie nur nach der ersten Übereinstimmung (first) oder versuchen Sie, alle Ausdrücke zu finden (all) |
| push.autoSite | Boolean | Nein | false | In einer Umgebung mit mehreren Standorten wird jeder Host von einem Standort überwacht. Mit dem Wert “Standort” kann ein Standort automatisch anhand des Standortpfades identifiziert werden. |
| push.autoTagging | Object | Nein | –   | Fügen Sie Host Tags dynamisch auf der Grundlage von Objektinformationen hinzu, die mit regulären Ausdrücken übereinstimmen; siehe Abschnitt “Auto-Tagging”. |
| push.bakeAgents | Boolean | Nein | false | Automatisches erstellen “Bake” von Agenten; keine Verteilung von Agenten |
| push.contactGroupIdentifier | String | Nein | title | Sammeln von Kontaktgruppen nach ihren Objekttiteln (title) oder nach ihren LDAP-DNs (ldap) |
| push.defaultWATOFolder | String | Nein | –   | Hosts in diesen Ordner verschieben, falls nicht festgelegt; leerer Wert bedeutet Hauptordner |
| push.discoverServices | Boolean | Nein | false | Suchen Sie nach Diensten auf neuen/geänderten Hosts |
| roles.monitoring | String | Nein | Monitoring | i-doit-Rolle für Kontaktgruppen, die bei Kontaktzuweisungen verwendet werden |