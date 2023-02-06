# Zuordnung von Kategorien zu Objekttypen

Der Quick Configuration Wizard (QCW) erlaubt es dir, bequem die Zuweisungen von [Objekttypgruppen](../glossar.md), [Objekttypen](../glossar.md) und [Kategorien](../glossar.md) zu verwalten und deinen Anforderungen anzupassen.

Aufruf des Quick Configuration Wizards
--------------------------------------

Du findest den Quick Configuration Wizard unter **Verwaltung → CMDB Einstellungen → Quick Configuration Wizard. **Alle Änderungen im Quick Configuration Wizard werden umgehend übernommen und müssen nicht über eine Schaltfläche gespeichert werden. Bei Änderungen werden keine Daten gelöscht. Der QCW ist lediglich für die Darstellung von Daten zuständig.

[![QCW](../assets/images/de/grundlagen/zuordnung-von-kategorien-zu-objekttypen/1-zko.png)](../assets/images/de/grundlagen/zuordnung-von-kategorien-zu-objekttypen/1-zko.png)
------------------------------------------------------------------------------------------------------------

Aufbau des Quick Configuration Wizards
--------------------------------------

Die Konfiguration der Zuweisungen erfolgt über eine Aufteilung in drei Spalten. Diese Spalten repräsentieren deine Objekttypgruppen, Objekttypen und Kategorien. In jeder Spalte steht dir pro Zeile ein gepunkteter Bereich zur Verfügung, der es dir erlaubt per Drag 'n' Drop die Reihenfolge zu verändern.

[![QCW-Aufbau](../assets/images/de/grundlagen/zuordnung-von-kategorien-zu-objekttypen/2-zko.png)](../assets/images/de/grundlagen/zuordnung-von-kategorien-zu-objekttypen/2-zko.png)

  

Objekttyp-Gruppen, Objekttypen und Kategorien Anpassen
------------------------------------------------------

Über den [![QCW-Kategorien-anpassen](../assets/images/de/grundlagen/zuordnung-von-kategorien-zu-objekttypen/3-zko.png)](../assets/images/de/grundlagen/zuordnung-von-kategorien-zu-objekttypen/3-zko.png) Button kannst du in allen drei Hauptfeldern in den Bearbeitungsmodus wechseln.

Hier kannst du die Zuweisungen der jeweiligen Objektgruppe bearbeiten, aber auch neue Gruppen, Objekttypen oder auch Kategorien erzeugen und ausprägen.

[![QCW-Kategorien-anpassen-2](../assets/images/de/grundlagen/zuordnung-von-kategorien-zu-objekttypen/4-zko.png)](../assets/images/de/grundlagen/zuordnung-von-kategorien-zu-objekttypen/4-zko.png)

Bearbeitung der Zuweisungen
---------------------------

Die Bearbeitung beginnt in der linken Spalte, also der für die Objekttypgruppen. Wähle hier die Objekttypgruppe aus, deren Objekttypzuweisung du anpassen möchtest. Klicke die entsprechende Gruppe hierfür an, sodass die mittlere Spalte aktiv geschaltet wird. Über die Checkboxen hingegen kannst du die Gruppen selbst ausblenden, falls du sie nicht benötigst.

Wenn eine Gruppe ausgewählt wurde und die mittlere Spalte aktiv ist, kannst du hier über die Checkboxen festlegen, welche Objekttypen der jeweiligen Gruppe zugewiesen sind. Ausgegraute Objekttypen sind bereits anderen Gruppen zugewiesen, können jedoch neu zugewiesen werden.

Im unteren Bereich der Spalte für Objekttypgruppen kannst du eigene Gruppen ergänzen. Diese erhalten ein Stift-Icon in ihrer Zeile, sodass du sie jederzeit bearbeiten oder löschen kannst.

Identisch verhält es sich in der Spalte der Objekttypen. Auch hier findest du die Möglichkeit, [benutzerdefinierte Objekttypen](benutzerdefinierte-objekttypen.md) zu erzeugen. Für eine umfangreiche Konfiguration des Objekttyps empfehlen wir jedoch die Verwendung der Objekttyp-Konfiguration.

Wenn du in der mittleren Spalte einen Objekttyp anklickst, schaltest du die rechte Spalte aktiv. Hier siehst du nun die zum ausgewählten Objekttyp zugewiesenen Kategorien und kannst die Zuweisungen über die Checkboxen ändern und aufheben.

Die Schaltfläche **Eigene Kategorie erstellen** leitet dich direkt zur Funktion, [benutzerdefinierte Kategorien](benutzerdefinierte-kategorien.md) zu erzeugen.

Profile im Quick Configuration Wizard
-------------------------------------

Du kannst deine aktuelle Konfiguration in Form eines Profils speichern. Trage hierzu unter **Aktuelles Profil speichern** eine Bezeichnung für das Profil ein, sodass es im Anschluss in den verfügbaren Profilen in der rechten Spalte auftaucht. Hier ist es dir möglich, das Profil zu aktivieren, zu löschen oder als Datei herunterzuladen. Aktiviere die Checkbox des gewünschten Profils und klicke auf **Laden** um die Zuweisung aus dem ausgewählten Profil wiederherzustellen. Über das Disketten-Symbol kannst du das Profil als Datei im XML-Format sichern und bei Bedarf über die Schaltfläche **Durchsuchen** erneut hochladen. Das rote X-Symbol löscht das entsprechende Profil.

Diese Funktion eignet sich, Konfigurationsdaten zwischen mehreren _i-doit_\-Installationen auszutauschen. Ein Profil beinhaltet folgende Einstellungen:

*   Objekttypgruppen mit Namen, Reihenfolge und weiteren Attributen
*   Objekttypen mit Namen, Zuordnung zu Objekttypgruppen und weiteren Attributen aus der Objekttypkonfiguration
*   Jedem Objekttyp zugewiesene globale, spezifische und benutzerdefinierte Kategorien
*   Konfiguration jeder benutzerdefinierten Kategorie, die mindestens einem Objekttypen zugeordnet ist

Ein Profil beinhaltet demnach die Konfiguration der IT-Dokumentation, aber keine Inhalte. Es werden weder Objekte, Kategorie-Einträge noch ausgefüllte Dialog-Felder gespeichert.

Konfiguration leeren
--------------------

Wenn du mit einem leeren Stand die Zuweisungen neu durchführen möchtest, kannst du über die Schaltfläche **Leeren** die komplette Zuweisung zurücksetzen.