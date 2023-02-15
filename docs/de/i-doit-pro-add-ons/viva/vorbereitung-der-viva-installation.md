# Vorbereitung der VIVA-Installation

Vor der ersten Nutzung des [i-doit pro Add-ons](../index.md) **VIVA** steht die Installation an.

Systemvoraussetzungen
---------------------

Neben den für i-doit allgemeingültigen [Systemvoraussetzungen](../../installation/systemvoraussetzungen.md) und [Systemeinstellungen](../../administration/verwaltung/system-einstellungen.md) setzt dieses Add-on folgende Bedingungen an das System, auf dem es installiert wird, voraus:

*   Ein lauffähiges _i-doit pro_ in den aktuell von Synetics unterstützten Versionen ist installiert.
*   Die PHP-Einstellung short_open_tag ist aktiviert (On).
*   Optional wird für die Erstellung eines bereinigten Netzplans Graphviz (in Form der Binaries dot oder neato) auf dem System benötigt und es ist erforderlich, dass die PHP-Funktion exec ausgeführt werden darf. Dies funktioniert nicht auf einem Windows-Betriebssystem.

Herunterladen, Installation, Aktualisierung, (De-)Aktivieren
------------------------------------------------------------

Siehe Artikel [i-doit pro Add-ons](../index.md).

Rechteverwaltung
----------------

_i-doit pro_ verfügt über eine fein-granulare [Rechteverwaltung](../../effizientes-dokumentieren/rechteverwaltung/index.md), die auch für VIVA genutzt wird. Die Rechte können pro Benutzer/Benutzergruppe unter **Verwaltung → Rechtesystem → VIVA** vergeben werden. Folgende Rechte sind verfügbar:

*   Lesender Zugriff: Bearbeitung ist nicht möglich.
*   Schreibender Zugriff: Lesen, Neuanlegen, Speichern und Löschen von Informationen
*   Administrativer Zugriff: ohne Einschränkungen

Um die ersten Schritte zu vereinfachen, wird bei der Installation die gleichnamige Personengruppe **VIVA** angelegt, die bereits über administrative Rechte verfügt. Sollen Personen diese Rechte erhalten, genügt es, sie dieser Personengruppe hinzuzufügen. Auf diese Weise erhält die Personengruppe **Admin** administrativen Zugriff.

!!! attention "Nach der Installation verfügt der angemeldete Benutzer noch nicht über die entsprechende Gruppenzugehörigkeit. Daher erscheint VIVA auch nicht im Extras-Menü. Wurde das dem Benutzer entsprechende Personen-Objekt der Personengruppe hinzugefügt, muss sich der Anwender einmal neu anmelden, damit die Änderung wirksam wird. Danach erscheint das VIVA im Extras-Menü."

[![Extras-Menü in i-doit anzeigen](../../assets/images/de/i-doit-pro-add-ons/viva/installation/1-vi.png)](../../assets/images/de/i-doit-pro-add-ons/viva/installation/1-vi.png)

Migrieren vom bisherigen ITGS-Modul
-----------------------------------

Bereits seit _i-doit pro_ in Version 0.9.9-6 pro ist ein Modul zur Dokumentation von IT-Grundschutz-relevanten Informationen enthalten. VIVA löst es vollständig ab und erweitert es um zahlreiche neue Funktionen. Falls im alten Modul bereits dokumentiert wurde, können diese Daten rückstandslos nach VIVA überführt werden.

### Migration vorbereiten

Um möglichst reibungslos die Daten aus dem Altbestand zu übernehmen, werden folgende Annahmen getroffen:

*   Die IT-Grundschutz-Kataloge EL 11 von 2009 werden im alten Modul verwendet.
*   Die Kataloge EL 12 von 2011 sollen in VIVA eingesetzt werden. Der [Import](./vorgehensweise-mit-viva.md) muss bereits erfolgt sein.
*   Im alten Modul ist der Objekttyp _ITGS-Gruppe_ für die Dokumentation der Zielgruppen verwendet worden.
*   Diesen \_ITGS-Gruppen\_ zugewiesene Objekte sind gleichartig, d. h., sie entsprechen der Definition von Zielgruppen und -objekten.
*   Die IT-Grundschutz-relevante Dokumentation wird den _ITGS-Gruppen_ und denjenigen Objekten in i-doit, die von keiner _ITGS-Gruppe_ ihre Dokumentation erbt, entnommen.
*   Diese nicht-gruppierten Objekte werden jeweils zu Zielgruppen transformiert.
*   Anhand des Titels des zur Laufzeit verwendeten Mandanten wird ein neuer Informationsverbund angelegt. Bereits bestehende Informationsverbünde in VIVA werden nicht angetastet.
*   Die Schicht-Zuordnung der Gruppen erfolgt anhand ihrer verknüpften Bausteine.

### Migration durchführen

Sind die [Voraussetzungen](#migrationvorbereiten) erfüllt und ist das alte Modul (noch) nicht gelöscht, kann die Migration über die Web-Oberfläche über **VIVA → Migration** gestartet werden. Dort kann zwischen zwei Aktionen gewählt werden:

*   **Migration starten _…_**
*   **Altes Modul entfernen _…_**

[![Migration starten](../../assets/images/de/i-doit-pro-add-ons/viva/installation/1-vi.png)](../../assets/images/de/i-doit-pro-add-ons/viva/installation/1-vi.png)

Ersteres führt durch die Migration und zeigt den Fortschritt der jeweiligen Schritte. Nachdem der Benutzer die **ITGS-Gruppen** als Zielgruppen definiert und einer IT-Grundschutz-Schicht zugeordnet hat, wird die Migration durchgeführt. Beim Klick auf **Fertigstellen** wird zum neu erstellten Informationsverbund weitergeleitet.

Optional kann das alte Modul inkl. aller Daten (Objekte, Kategorien) nach der Migration gelöscht werden. Dieser Schritt ist unwiderruflich.

!!! attention "Bevor eine der genannten Aktionen ausgeführt wird, sollte ein Backup der Datenbank und der i-doit-Installation angelegt werden, um im Fehlerfall auf einen funktionierenden Stand zurückkehren zu können."