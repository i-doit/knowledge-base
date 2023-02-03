**Inhaltsverzeichnis**

*   1[Positive Rechte](#Rechteverwaltung-PositiveRechte)
*   2[Additive Rechte](#Rechteverwaltung-AdditiveRechte)
*   3[Genereller Aufbau der Konfiguration](#Rechteverwaltung-GenerellerAufbauderKonfiguration)
*   4[Module](#Rechteverwaltung-Module)
*   5[Rechte wiederherstellen](#Rechteverwaltung-Rechtewiederherstellen)
*   6[Rechteverwaltung deaktivieren](#Rechteverwaltung-Rechteverwaltungdeaktivieren)
*   7[Kategorie Rechtevergabe](#Rechteverwaltung-KategorieRechtevergabe)

Wer darf was in i-doit sehen und bearbeiten?  
Diese häufig gestellte Frage rührt daher, ein Rechtekonzept für die eigene IT-Dokumentation zu etablieren.  
Nicht jede Person, die Login-berechtigt ist, darf sensible Daten sehen oder gar bearbeiten.  
i-doit verfügt über eine umfassende Rechteverwaltung, die die eigene IT-Dokumentation vor unbefugtem Zugriff schützt und die Integrität wahrt.

  

Personen und Personengruppen

Rechte können an Personen und Personengruppen vergeben werden. Wird ein Recht an eine Gruppe vergeben, erben alle Personen, die dieser Gruppe angehören, dieses Recht. Login-berichtigte Benutzer werden als Objekt vom Typ Person in i-doit gespeichert. Die entsprechenden Gruppen sind vom Typ Personengruppe.

Gruppen bilden

In der IT hat sich bewährt, das Rollenkonzept nicht für einzelne Benutzer zu erstellen, sondern für Gruppen (oder oft auch Rollen genannt). Das macht die Handhabung eleganter, denn Benutzer können einer oder mehreren Gruppen zugeordnet werden. Rechte müssen demnach nur noch an wenigen Stellen konfiguriert werden.

Bei der Standard-Installation von i-doit gibt es einige `**Personen**`\-Objekte, die `**Personengruppen**` zugewiesen sind und somit vordefinierte Rechte besitzen:

| Benutzer | Passwort | Gruppe | Rechte (oberflächlich) |
| --- | --- | --- | --- |
| `admin` | `admin` | `Admin` | Alle Rechte, auch für die [Verwaltung](/display/de/Verwaltung) |
| `archivar` | `archivar` | `Archivar` | Lesen und ändern |
| `author` | `author` | `Author` | Anlegen, ändern, [archivieren](/display/de/Lebens-+und+Dokumentationszyklus) und ausführen |
| `editor` | `editor` | `Editor` | Lesen und ändern |
| `reader` | `reader` | `Reader` | Lesen |

Die aufgelisteten Benutzer erben ihre Rechte durch die gleichnamigen Gruppen.

Rechte an LDAP/AD koppeln

Wie im Artikel zur [Erstanmeldung](/display/de/Erstanmeldung) beschrieben, ist es sinnvoll, Personen und Gruppenzugehörigkeiten durch die Anbindung an einen [LDAP-Verzeichnisserver/Active Directory (AD)](/pages/viewpage.action?pageId=9666615) zu automatisieren.

Positive Rechte
---------------

Die Rechteverwaltung in i-doit folgt dem Konzept der positiven Rechten. Das heißt, Personen oder Gruppen können Rechte gegeben werden, aber nicht genommen.

Beispiel: Person X ist der Gruppe `**Admin**` und `**Reader**` zugeordnet. Obwohl Die Gruppe `**Reader**` nur Leserechte in i-doit erhält, darf Person X alles in i-doit, da sie auch die Rechte der Gruppe `**Admin**`, die alles darf, erbt.

Additive Rechte
---------------

Weiterhin addieren sich Rechte. Ist eine Person mehreren Gruppen zugeordnet, erbt sie die Rechte aller Gruppen. Ebenso addieren sich Rechte, wenn der Person und ihren zugehörigen Gruppen Rechte gegeben werden.

Beispiel: Person X ist in der Gruppe `**Reader**`, darf also alles in i-doit lesen, aber nicht ändern. Zudem erhält sie das Recht, eigene [Reports](/display/de/Report+Manager) zu erstellen. Dieses Recht ergänzt sich mit den Rechten der Gruppe `**Reader**`.

Genereller Aufbau der Konfiguration
-----------------------------------

Die Konfiguration ist pro Modul immer gleich aufgebaut, nur die Rechte selbst sind unterschiedlich. Im ersten Schritt wird im Feld `**Person / Personengruppe**` entweder ein Objekt vom Typ `**Person**` oder `**Personengruppe**` ausgewählt. Bereits beim Tippen des Objekt-Titels werden passende Objekte vorgeschlagen. Ein Klick auf den Button `**Rechte laden**` lädt die für dieses Modul gespeicherte Konfiguration.

Werden die Rechte für ein bestimmtes Personen-Objekt geladen und sollte diese Person Rechte von zugehörigen Gruppen erben, werden diese vererbten Rechte ebenfalls angezeigt. Die vererbten Rechte können allerdings nicht geändert werden und sind somit ausgegraut.

Die Konfiguration in der Web GUI ist tabellarisch aufgebaut.

| ![](/download/attachments/42303494/page_add.png?version=1&modificationDate=1465817710479&api=v2) | ![](/download/attachments/42303494/page_magnify.png?version=1&modificationDate=1465817709473&api=v2) | ![](/download/attachments/42303494/page_edit.png?version=1&modificationDate=1465817708265&api=v2) | ![](/download/attachments/42303494/page_red.png?version=1&modificationDate=1465817707025&api=v2) | ![](/download/attachments/42303494/page_delete.png?version=1&modificationDate=1465817705977&api=v2) | ![](/download/attachments/42303494/page_go.png?version=1&modificationDate=1465817704983&api=v2) | ![](/download/attachments/42303494/user_gray.png?version=1&modificationDate=1465817702675&api=v2) | Bedingung | Parameter | Aktion |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| Erstellen | Ansehen | Bearbeiten | Archivieren | Löschen | Ausführen | Administrator | Um welchen Bereich geht es? | Optionale Parameter | ![](/download/attachments/42303494/cross.png?version=1&modificationDate=1465817700703&api=v2) Recht entfernen |

Die Bedingung wird aus einem Drop-Down-Menü ausgewählt. Die ersten Spalten vergeben konkrete Rechte für diese Bedingung. Teilweise sind diese allerdings ausgegraut und können nicht aktiviert werden, weil es keinen Sinn macht, für ebendiese Bedingung diese Rechte zu vergeben. Ebenfalls abhängig von der Bedingung sind die optionalen Parameter. In der letzten Spalte können Aktionen durchgeführt werden (bisher: das Recht entfernen).

![](/download/attachments/42303494/rights-admin-group.png?version=1&modificationDate=1631794374605&api=v2&effects=drop-shadow)

Ein Klick auf den Button `**Neues Recht**` fügt am Ende der Tabelle eine neue Zeile hinzu.

Rechte testen

Um die Auswirkungen an der Konfiguration direkt testen zu können, bietet es sich an, in einem zweiten Browser (bzw. einem "privaten" Tab) mit einem Benutzer angemeldet zu sein, der von den Konfigurationsänderungen betroffen ist. Sollte keiner vorhanden sein, kann ein Test-Benutzer angelegt werden und den zu testenden Gruppen zugeordnet werden.

Sind alle Rechte wie gewünscht konfiguriert, sollten diese über den Button `**Speichern**` scharf geschaltet werden.

Cache erneuern

Unter Umständen kann es vorkommen, dass Rechte nicht sofort greifen, beispielsweise weil die betroffenen Benutzer noch angemeldet sind. Um die neuen Rechte zu forcieren, muss der Rechte-Cache erneuert werden. Dies geschieht unter `**Verwaltung → Systemtools → Cache / Datenbank → Cache → Rechtesystem Cache leeren**`. Zudem ist es empfehlenswert, den Cache [automatisch regelmäßig per Cronjob](/display/de/CLI) zu erneuern.

Module
------

Damit die Rechteverwaltung nicht zu unübersichtlich wird, sind alle Rechte in Module aufgeteilt. Zu finden sind die Module unter `**Verwaltung → Rechtesystem → Rechtevergabe**`.

*   `**Analyse**`
    
*   `**Benachrichtigungen**`
    
*   `**CI-Umzug**`
    
*   `**[CMDB](/pages/viewpage.action?pageId=42303548)**`
    
*   `**Dashboard**`
    
*   `**Dialog-Admin**`
    
*   `**Dokumente**`
    
*   `**Events**`
    
*   `**Export**`
    
*   `**Gerätetausch**`
    
*   `**Import**`
    
*   `**Logbuch**`
    
*   `**Nagios**`
    
*   `**Raumplan**`
    
*   `**Rechtesystem**`
    
*   `**Report Manager**`
    
*   `**Services**`
    
*   `**Suche**`
    
*   `**Templates/Massenänderung**`
    
*   `**Verkabelungen**`
    
*   `**Verwaltung**`
    
*   `**VIVA**`
    
*   `**Wartung**`
    

Rechte wiederherstellen
-----------------------

Über die `**Verwaltung → Rechtesystem → Rechtesystem zurücksetzen**` kann man für dem Benutzer, mit dem man derzeit angemeldet ist, alle Rechte zuordnen. Das heißt, dem Personenobjekt des Benutzers werden alle zur Verfügung stehenden Rechte zugeordnet. Um dies zu aktivieren, müssen die Credentials für das [Admin Center](/display/de/Admin+Center) eingegeben werden.

Rechteverwaltung deaktivieren
-----------------------------

Um allen Benutzern alle Rechte zu geben, kann die Rechteverwaltung deaktiviert werden. Erledigt wird dies unter `**Verwaltung → Systemeinstellungen → System Parameters** **→ Rechtesystem**`.

Kategorie Rechtevergabe
-----------------------

Zu den Objekttypen `**Personen**` und `**Personengruppen**` gibt es die Kategorie `**Rechtevergabe**`. Sie bietet eine stark vereinfachte Konfiguration zur Rechteverwaltung der oben genannten Module. Zu den einzelnen Modulen gibt es jeweils die Rechte `**Ansehen**`, `**Bearbeiten**`, `**Archivieren**`, `**Löschen**`, `**Ausführen**` und `**Administrator**`. Die Funktionalität ähnelt damit der einfachen Rechteverwaltung alter Versionen von i-doit. Um diese Kategorie sehen und verwenden zu können, wird das `**Administrator**`\-Recht auf diese Kategorie im Modul `**CMDB**` benötigt.

![](/download/attachments/42303494/auhorization-conf-de.png?version=1&modificationDate=1631794966763&api=v2&effects=drop-shadow)

Sinn und Zweck

Die Kategorie `**Rechtevergabe**` bot beim Einführen der damals neuen Rechteverwaltung den Benutzern der bisherigen Rechteverwaltung einen "sanften" Umstieg. Zum jetzigen Zeitpunkt hat diese Kategorie allerdings stark an Bedeutung verloren. Sie sollte daher nicht mehr verwendet werden. Keinesfalls sollten Rechte in den einzelnen Modulen gleichzeitig mit Konfigurationen in dieser Kategorie vermischt werden.