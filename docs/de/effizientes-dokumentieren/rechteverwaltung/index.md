# Rechteverwaltung

Wer darf was in i-doit sehen und bearbeiten?
Diese häufig gestellte Frage rührt daher, ein Rechtekonzept für die eigene IT-Dokumentation zu etablieren.
Nicht jede Person, die Login-berechtigt ist, darf sensible Daten sehen oder gar bearbeiten.
i-doit verfügt über eine umfassende Rechteverwaltung, die die eigene IT-Dokumentation vor unbefugtem Zugriff schützt und die Integrität wahrt.

Personen und Personengruppen

Rechte können an Personen und Personengruppen vergeben werden. Wird ein Recht an eine Gruppe vergeben, erben alle Personen, die dieser Gruppe angehören, dieses Recht. Login-berichtigte Benutzer werden als Objekt vom Typ Person in i-doit gespeichert. Die entsprechenden Gruppen sind vom Typ Personengruppe.

!!! success "Gruppen bilden"
    In der IT hat sich bewährt, das Rollenkonzept nicht für einzelne Benutzer zu erstellen, sondern für Gruppen (oder oft auch Rollen genannt). Das macht die Handhabung eleganter, denn Benutzer können einer oder mehreren Gruppen zugeordnet werden. Rechte müssen demnach nur noch an wenigen Stellen konfiguriert werden.

Bei der Standard-Installation von i-doit gibt es einige **Personen**\-Objekte, die **Personengruppen** zugewiesen sind und somit vordefinierte Rechte besitzen:

| Benutzer | Passwort | Gruppe | Rechte (oberflächlich) |
| --- | --- | --- | --- |
| admin | admin | Admin | Alle Rechte, auch für die [Verwaltung](../../administration/verwaltung/index.md) |
| archivar | archivar | Archivar | Lesen und ändern |
| author | author | Author | Anlegen, ändern, [archivieren](../../grundlagen/lebens-und-dokumentationszyklus.md) und ausführen |
| editor | editor | Editor | Lesen und ändern |
| reader | reader | Reader | Lesen |

Die aufgelisteten Benutzer erben ihre Rechte durch die gleichnamigen Gruppen.

!!! success "Rechte an LDAP/AD koppeln"
    Wie im Artikel zur [Erstanmeldung](../../grundlagen/erstanmeldung.md) beschrieben, ist es sinnvoll, Personen und Gruppenzugehörigkeiten durch die Anbindung an einen [LDAP-Verzeichnisserver/Active Directory (AD)](../../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md) zu automatisieren.

Positive Rechte
---------------

Die Rechteverwaltung in i-doit folgt dem Konzept der positiven Rechten. Das heißt, Personen oder Gruppen können Rechte gegeben werden, aber nicht genommen.

Beispiel: Person X ist der Gruppe **Admin** und **Reader** zugeordnet. Obwohl Die Gruppe **Reader** nur Leserechte in i-doit erhält, darf Person X alles in i-doit, da sie auch die Rechte der Gruppe **Admin**, die alles darf, erbt.

Additive Rechte
---------------

Weiterhin addieren sich Rechte. Ist eine Person mehreren Gruppen zugeordnet, erbt sie die Rechte aller Gruppen. Ebenso addieren sich Rechte, wenn der Person und ihren zugehörigen Gruppen Rechte gegeben werden.

Beispiel: Person X ist in der Gruppe **Reader**, darf also alles in i-doit lesen, aber nicht ändern. Zudem erhält sie das Recht, eigene [Reports](../../auswertungen/report-manager.md) zu erstellen. Dieses Recht ergänzt sich mit den Rechten der Gruppe **Reader**.

Genereller Aufbau der Konfiguration
-----------------------------------

Die Konfiguration ist pro Modul immer gleich aufgebaut, nur die Rechte selbst sind unterschiedlich. Im ersten Schritt wird im Feld **Person / Personengruppe** entweder ein Objekt vom Typ **Person** oder **Personengruppe** ausgewählt. Bereits beim Tippen des Objekt-Titels werden passende Objekte vorgeschlagen. Ein Klick auf den Button **Rechte laden** lädt die für dieses Modul gespeicherte Konfiguration.

Werden die Rechte für ein bestimmtes Personen-Objekt geladen und sollte diese Person Rechte von zugehörigen Gruppen erben, werden diese vererbten Rechte ebenfalls angezeigt. Die vererbten Rechte können allerdings nicht geändert werden und sind somit ausgegraut.

Die Konfiguration in der Web GUI ist tabellarisch aufgebaut.

| ![rechteverwaltung-icon](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/1-rv.png) | ![rechteverwaltung-icon](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/2-rv.png) | ![rechteverwaltung-icon](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/3-rv.png) | ![rechteverwaltung-icon](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/4-rv.png) | ![rechteverwaltung-icon](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/5-rv.png) | ![rechteverwaltung-icon](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/5-rv.png) | ![rechteverwaltung-icon](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/7-rv.png) | Bedingung | Parameter | Aktion |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| Erstellen | Ansehen | Bearbeiten | Archivieren | Löschen | Ausführen | Administrator | Um welchen Bereich geht es? | Optionale Parameter | ![rechteverwaltung-icon](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/8-rv.png) Recht entfernen |

Die Bedingung wird aus einem Drop-Down-Menü ausgewählt. Die ersten Spalten vergeben konkrete Rechte für diese Bedingung. Teilweise sind diese allerdings ausgegraut und können nicht aktiviert werden, weil es keinen Sinn macht, für ebendiese Bedingung diese Rechte zu vergeben. Ebenfalls abhängig von der Bedingung sind die optionalen Parameter. In der letzten Spalte können Aktionen durchgeführt werden (bisher: das Recht entfernen).

[![rechteverwaltung-dropdown](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/9-rv.png)](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/9-rv.png)

Ein Klick auf den Button **Neues Recht** fügt am Ende der Tabelle eine neue Zeile hinzu.

!!! success "Rechte testen"
    Um die Auswirkungen an der Konfiguration direkt testen zu können, bietet es sich an, in einem zweiten Browser (bzw. einem "privaten" Tab) mit einem Benutzer angemeldet zu sein, der von den Konfigurationsänderungen betroffen ist. Sollte keiner vorhanden sein, kann ein Test-Benutzer angelegt werden und den zu testenden Gruppen zugeordnet werden.

Sind alle Rechte wie gewünscht konfiguriert, sollten diese über den Button **Speichern** scharf geschaltet werden.

!!! warning "Cache erneuern"
    Unter Umständen kann es vorkommen, dass Rechte nicht sofort greifen, beispielsweise weil die betroffenen Benutzer noch angemeldet sind. Um die neuen Rechte zu forcieren, muss der Rechte-Cache erneuert werden. Dies geschieht unter **Verwaltung → Systemtools → Cache / Datenbank → Cache → Rechtesystem Cache leeren**. Zudem ist es empfehlenswert, den Cache [automatisch regelmäßig per Cronjob](../../automatisierung-und-integration/cli/index.md) zu erneuern.

Module
------

Damit die Rechteverwaltung nicht zu unübersichtlich wird, sind alle Rechte in Module aufgeteilt. Zu finden sind die Module unter **Verwaltung → Rechtesystem → Rechtevergabe**.

*   **Analyse**
*   **Benachrichtigungen**
*   **CI-Umzug**
*   **[CMDB](../../effizientes-dokumentieren/rechteverwaltung/cmdb.md)**
*   **Dashboard**
*   **Dialog-Admin**
*   **Dokumente**
*   **Events**
*   **Export**
*   **Gerätetausch**
*   **Import**
*   **Logbuch**
*   **Nagios**
*   **Raumplan**
*   **Rechtesystem**
*   **Report Manager**
*   **Services**
*   **Suche**
*   **Templates/Massenänderung**
*   **Verkabelungen**
*   **Verwaltung**
*   **VIVA**
*   **Wartung**

Rechte wiederherstellen
-----------------------

Über die **Verwaltung → Rechtesystem → Rechtesystem zurücksetzen** kann man für dem Benutzer, mit dem man derzeit angemeldet ist, alle Rechte zuordnen. Das heißt, dem Personenobjekt des Benutzers werden alle zur Verfügung stehenden Rechte zugeordnet. Um dies zu aktivieren, müssen die Credentials für das [Admin Center](../../administration/admin-center.md) eingegeben werden.

Rechteverwaltung deaktivieren
-----------------------------

Um allen Benutzern alle Rechte zu geben, kann die Rechteverwaltung deaktiviert werden. Erledigt wird dies unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → Sicherheit → Rechtesystem**.

Kategorie Rechtevergabe
-----------------------

Zu den Objekttypen **Personen** und **Personengruppen** gibt es die Kategorie **Rechtevergabe**. Sie bietet eine stark vereinfachte Konfiguration zur Rechteverwaltung der oben genannten Module. Zu den einzelnen Modulen gibt es jeweils die Rechte **Ansehen**, **Bearbeiten**, **Archivieren**, **Löschen**, **Ausführen** und **Administrator**. Die Funktionalität ähnelt damit der einfachen Rechteverwaltung alter Versionen von i-doit. Um diese Kategorie sehen und verwenden zu können, wird das **Administrator**\-Recht auf diese Kategorie im Modul **CMDB** benötigt.

[![rechteverwaltung-dropdown](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/10-rv.png)](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/10-rv.png)

!!! warning "Sinn und Zweck"
    Die Kategorie **Rechtevergabe** bot beim Einführen der damals neuen Rechteverwaltung den Benutzern der bisherigen Rechteverwaltung einen "sanften" Umstieg. Zum jetzigen Zeitpunkt hat diese Kategorie allerdings stark an Bedeutung verloren. Sie sollte daher nicht mehr verwendet werden. Keinesfalls sollten Rechte in den einzelnen Modulen gleichzeitig mit Konfigurationen in dieser Kategorie vermischt werden.
