Vor der ersten Nutzung des [i-doit pro Add-ons](/display/de/i-doit+pro+Add-ons) `**VIVA**` steht die Installation an.

Systemvoraussetzungen
---------------------

Neben den für i-doit allgemeingültigen [Systemvoraussetzungen](/display/de/Systemvoraussetzungen) und [Systemeinstellungen](/display/de/Systemeinstellungen) setzt dieses Add-on folgende Bedingungen an das System, auf dem es installiert wird, voraus:

*   Ein lauffähiges _i-doit pro_ in den aktuell von Synetics unterstützten Versionen ist installiert.
*   Die PHP-Einstellung `short_open_tag` ist aktiviert (`On`).
*   Optional wird für die Erstellung eines bereinigten Netzplans Graphviz (in Form der Binaries `dot` oder `neato`) auf dem System benötigt und es ist erforderlich, dass die PHP-Funktion `exec` ausgeführt werden darf. Dies funktioniert nicht auf einem Windows-Betriebssystem.

Herunterladen, Installation, Aktualisierung, (De-)Aktivieren
------------------------------------------------------------

Siehe Artikel [i-doit pro Add-ons](/display/de/i-doit+pro+Add-ons).

Rechteverwaltung
----------------

_i-doit pro_ verfügt über eine fein-granulare [Rechteverwaltung](/display/de/Rechteverwaltung), die auch für VIVA genutzt wird. Die Rechte können pro Benutzer/Benutzergruppe unter **`Verwaltung → Rechtesystem → VIVA`** vergeben werden. Folgende Rechte sind verfügbar:

*   Lesender Zugriff: Bearbeitung ist nicht möglich.
*   Schreibender Zugriff: Lesen, Neuanlegen, Speichern und Löschen von Informationen
*   Administrativer Zugriff: ohne Einschränkungen

Um die ersten Schritte zu vereinfachen, wird bei der Installation die gleichnamige Personengruppe **`VIVA`** angelegt, die bereits über administrative Rechte verfügt. Sollen Personen diese Rechte erhalten, genügt es, sie dieser Personengruppe hinzuzufügen. Auf diese Weise erhält die Personengruppe **`Admin`** administrativen Zugriff.

Nach der Installation verfügt der angemeldete Benutzer noch nicht über die entsprechende Gruppenzugehörigkeit. Daher erscheint VIVA auch nicht im Extras-Menü. Wurde das dem Benutzer entsprechende Personen-Objekt der Personengruppe hinzugefügt, muss sich der Anwender einmal neu anmelden, damit die Änderung wirksam wird. Danach erscheint das VIVA im Extras-Menü.

![Extras-Menü in i-doit anzeigen](/download/attachments/13598734/i-doit_viva_extras_menu.png?version=1&modificationDate=1441632163494&api=v2&effects=drop-shadow "Extras-Menü in i-doit anzeigen")

Migrieren vom bisherigen ITGS-Modul
-----------------------------------

Bereits seit _i-doit pro_ in Version 0.9.9-6 pro ist ein Modul zur Dokumentation von IT-Grundschutz-relevanten Informationen enthalten. VIVA löst es vollständig ab und erweitert es um zahlreiche neue Funktionen. Falls im alten Modul bereits dokumentiert wurde, können diese Daten rückstandslos nach VIVA überführt werden.

### Migration vorbereiten

Um möglichst reibungslos die Daten aus dem Altbestand zu übernehmen, werden folgende Annahmen getroffen:

*   Die IT-Grundschutz-Kataloge EL 11 von 2009 werden im alten Modul verwendet.
*   Die Kataloge EL 12 von 2011 sollen in VIVA eingesetzt werden. Der [Import](/display/de/Vorgehensweise+mit+VIVA) muss bereits erfolgt sein.
*   Im alten Modul ist der Objekttyp _ITGS-Gruppe_ für die Dokumentation der Zielgruppen verwendet worden.
*   Diesen \_ITGS-Gruppen\_ zugewiesene Objekte sind gleichartig, d. h., sie entsprechen der Definition von Zielgruppen und -objekten.
*   Die IT-Grundschutz-relevante Dokumentation wird den _ITGS-Gruppen_ und denjenigen Objekten in i-doit, die von keiner _ITGS-Gruppe_ ihre Dokumentation erbt, entnommen.
*   Diese nicht-gruppierten Objekte werden jeweils zu Zielgruppen transformiert.
*   Anhand des Titels des zur Laufzeit verwendeten Mandanten wird ein neuer Informationsverbund angelegt. Bereits bestehende Informationsverbünde in VIVA werden nicht angetastet.
*   Die Schicht-Zuordnung der Gruppen erfolgt anhand ihrer verknüpften Bausteine.

### Migration durchführen

Sind die [Voraussetzungen](#VorbereitungderVIVAInstallation-Migrationvorbereiten) erfüllt und ist das alte Modul (noch) nicht gelöscht, kann die Migration über die Web-Oberfläche über **`VIVA → Migration`** gestartet werden. Dort kann zwischen zwei Aktionen gewählt werden:

*   **`Migration starten _…_`**
*   **`Altes Modul entfernen` _…_**

![Migration starten](/download/attachments/13598734/i-doit_viva_migration_starten.png?version=1&modificationDate=1441632163307&api=v2&effects=drop-shadow "Migration starten")

Ersteres führt durch die Migration und zeigt den Fortschritt der jeweiligen Schritte. Nachdem der Benutzer die **`ITGS-Gruppen`** als Zielgruppen definiert und einer IT-Grundschutz-Schicht zugeordnet hat, wird die Migration durchgeführt. Beim Klick auf **`Fertigstellen`** wird zum neu erstellten Informationsverbund weitergeleitet.

Optional kann das alte Modul inkl. aller Daten (Objekte, Kategorien) nach der Migration gelöscht werden. Dieser Schritt ist unwiderruflich.

Bevor eine der genannten Aktionen ausgeführt wird, sollte ein Backup der Datenbank und der i-doit-Installation angelegt werden, um im Fehlerfall auf einen funktionierenden Stand zurückkehren zu können.