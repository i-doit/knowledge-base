Installation/Update
===================

Das aktuelle Installationspaket für das Add-on steht im i-doit Kundenportal unter [https://login.i-doit.com/](https://login.i-doit.com/) nach dem Erwerb einer gültigen Lizenz zur Verfügung und kann dort heruntergeladen werden. Die Installation selbst erfolgt im i-doit [Admin-Center](/display/de/Admin+Center) im Reiter "Add-ons". Hier wird das Paket vom lokalen System über die Schaltfläche "Durchsuchen" ausgewählt. Nachdem festgelegt wurde, für welche(n) [Mandant(en)](/pages/viewpage.action?pageId=36864089) das Add-on verfügbar gemacht werden soll, kann die Installation über die Schaltfläche "Upload and install" fertiggestellt werden.  
Nach der Veröffentlichung einer neuen Version kann im Admin-Center auf demselben Weg das aktualisierte Paket, welches ebenfalls im i-doit Kundenportal verfügbar sein wird, hochgeladen und installiert werden.

Rechtevergabe
=============

Damit ein Benutzer in der Lage ist, Vorlagen zu erstellen und Dokumente zu erzeugen, ist es nötig, entsprechende [Rechte](/display/de/Rechteverwaltung) zu vergeben. Dies ist in der i-doit Verwaltung unter `Rechtesystem > Rechtevergabe > Dokumente` möglich, wenn das Add-on installiert ist.

![](/download/attachments/97288855/Rechte-dokumente.png?version=1&modificationDate=1617198401228&api=v2&effects=drop-shadow)

Hier stehen folgende Berechtigungen zur Verfügung:

*   **Dokument**

Mit der Bedingung "Dokument" kann der Zugriff auf einzelne oder mehrere Dokumente ermöglicht werden. Benutzer mit dieser Berechtigung können die ausgewählten Dokumente bearbeiten.

*   **Dokumente in Kategorien**

Über "Dokumente in Kategorien" kann der Zugriff auf Dokumente auf Basis der Dokumentkategorien erteilt werden.

*   **Vorlagen**

Die Berechtigung "Vorlage" vergibt die Erlaubnis, Dokumentenvorlagen bearbeiten zu können.

*   **Vorlagen in Kategorien**

Der Zugriff auf die Vorlagen kann mit "Vorlagen in Kategorien" auf Vorlagen aus definierten Kategorien ermöglicht werden.

*   **Online Repository**

Um Vorlagen aus dem Online Repository herunterladen zu können wird die Berechtigung “Online Repository” benötigt.

Cache für das Rechtesystem leeren

Nachdem die Rechte vergeben wurden ist es ratsam, in der i-doit [Verwaltung](/display/de/Verwaltung) unter `Systemtools > Cache / Datenbank` den [Cache](/display/de/Systemtools) zu leeren, damit die Änderungen vom System übernommen werden.

Zusätzliche Konfiguration
=========================

Mit dem Add-on wird zusätzlich die [Kategorie](/display/de/Struktur+der+IT-Dokumentation) "Dokumente" für alle [Objekttypen](/display/de/Struktur+der+IT-Dokumentation) verfügbar. Die Kategorie kann über die [Objekttyp-Konfiguration](/display/de/Benutzerdefinierte+Objekttypen) und den [Quick Configuration Wizard](/display/de/Zuordnung+von+Kategorien+zu+Objekttypen) mit den gewünschten Objekttypen verknüpft werden. Auf diesem Weg tauchen nur jene Objekttypen bei der Objekterstellung auf, die vom Anwender vorgegeben sind um die Auswahlliste übersichtlich zu halten.

Kategorie Dokumente

Damit ein Dokument für ein Objekt erstellt werden kann ist es notwendig, dass die Kategorie "Dokumente" mit dem Objekttyp verknüpft ist. Wenn der Objekttyp nicht über diese Kategorie verfügt, können keine Dokumente für die darin enthaltenen Objekte erstellt werden, da sie nicht in der Auswahl auftauchen.

Aufruf des Add-ons
==================

Nachdem alle Vorbereitungen abgeschlossen sind ist der Zugriff auf das Add-on ist über `Extras > Dokumente` möglich.

![](/download/thumbnails/97288855/Aufruf-Extras-Dokumente.png?version=1&modificationDate=1617188773495&api=v2)

Die Ansicht des Menüs "Extras" kann sich Aufgrund unterschiedlicher Rechte und/oder weiterer installierter Add-ons unterscheiden.