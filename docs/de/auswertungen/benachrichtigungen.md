# Benachrichtigungen

In diesem Artikel beschreiben wir das Benachrichtigungsmodul, das dafür gedacht ist, unterschiedliche Daten in der IT-Dokumentation zu prüfen und bei Eintreten von gewissen Ereignissen E-Mails zu versenden. Es besteht aus den jeweiligen [Benachrichtigungsarten](./benachrichtigungen.md#benachrichtigungsarten), der [Einrichtung](./benachrichtigungen.md#einrichtung) dieser, den [E-Mail-Vorlagen](./benachrichtigungen.md#e-mail-vorlagen) und letztendlich einer regelmäßigen Ausführung des [Controllers](./benachrichtigungen.md#controller).

!!! info "Ein Praxisbeispiel finden Sie auf unserem [Blog](https://www.i-doit.com/blog/benachrichtigungen-und-eskalationsstufen-mit-i-doit/)"

## Benachrichtigungsarten

Die Konfiguration findet unter **Extras → CMDB → Benachrichtigungen** statt.

Als Benachrichtigungsarten stehen aktuell die folgenden zur Auswahl:

*   **Ablauf einer Kündigungsfrist**
    Prüft Verträge auf die Zeitspanne bis zum Ablauf der Kündigungsfrist.

*   **Ablauf einer Wartungs-/Garantiefrist**
    Prüft Verträge auf die Zeitspanne bis zum Ablauf der Wartungs-/Garantiefrist.

*   **Ablauf einer Zertifikatsfrist**
    Prüft alle Objekttypen, denen die Kategorie "Zertifikat" zugewiesen ist, auf das Ablaufdatum des Zertifikats.

*   **CMDB-Status endet**
    Für die Kategorie "Status-Planung" hilfreich. Hier wird vor der zu endenden geplanten Änderung des CMDB-Status benachrichtigt.

*   **CMDB-Status startet**
    Für die Kategorie "Status-Planung" hilfreich. Hier wird vor der zu startenden geplanten Änderung des CMDB-Status benachrichtigt.

*   **Freie Lizenzen**
    Prüft Lizenzen auf die Anzahl der restlichen/verfügbaren Lizenzen.

*   **Gelagerte Objekte**
    Prüft beliebige Objekttyp auf die Anzahl der darin befindlichen Objekte mit dem Status "Gelagert".

*   **Lizenzablauf**
    Prüft Lizenzen auf die Zeitspanne bis zum Ablaufdatums.

*   **Reportbasierte Benachrichtigung**
    Führt Reports aus und benachrichtigt beim Fund einer überschrittenen, selbst definierten Anzahl an gefundenen Objekten.

*   **Unveränderte Objekte**
    Prüft Objekte, die in einem selbst definierten Zeitraum nicht verändert wurden. Kann behilflich dabei sein, sehr alte Daten zu finden und in Prozessen aktualisieren zu lassen.

*   **Veränderte Objekte**
    Prüft auf Objekte, die in dem vergangenen, selbst definierten Zeitraum bis Ausführung der Benachrichtigung geändert wurden. Es kann beispielsweise täglich eine Liste mit den in den letzten 24 Stunden geänderten Objekten ausgegeben werden.

*   **i-doit Update**
    Prüft, ob eine neue Version von i-doit pro verfügbar ist. Dafür benötigt i-doit einen Zugang zum Internet.

!!! info "Hinweis"

    Die Benachrichtigungsart "Reportbasierte Benachrichtigung" ist sehr flexibel einsetzbar und kann bei fast allen Events und Zuständen passende Benachrichtigungen versenden.

## Einrichtung

Die Einrichtung der Benachrichtigungen folgt immer dem gleichen Schema. Es werden allgemeine Einstellungen, wie ein Schwellwert und ein Limit der Benachrichtigungen, Objekte, die überwacht werden sollen und Kontakte, die benachrichtigt werden sollen, eingerichtet.

Allgemeine Einstellungen

Das \* stellt in _i-doit_ ein Pflichtfeld dar.

*   **Bezeichnung**
    Die Bezeichnung sollte bestenfalls aussagekräftig sein.

*   **Aktiv**
    Hier kann für die Aktivierung die Checkbox angeklickt werden. Benachrichtigungen können darüber deaktiviert werden.

*   **Schwellwert**
    Der Schwellwert variiert, je nachdem ob ein zeitlicher Faktor (X Jahre/Monate/Tage/Stunden/Minuten/Sekunden) oder ein Zähler (Anzahl gefundener Objekte) für die Benachrichtigung eingerichtet werden kann. Oberhalb der Einstellungen ist eine kurze Erklärung der Benachrichtigung sowie die Information, was mit dem Schwellwert geprüft wird, hinterlegt.

*   **Max. Anzahl zu sendender Benachrichtigungen**
    Wird die Benachrichtigung mehrfach geprüft und mehrfach ein Objekt gefunden, kann hier ein Limit gesetzt werden, nach dem nicht weiter benachrichtigt wird. Alles kleiner gleich 0 bedeutet, es wird so lange benachrichtigt, bis das/die Objekt/e geändert wurde/n und die Benachrichtigung nicht weiter gültig ist.

    Beispiel: Wird jeden Tag geprüft und benachrichtigt und es ist in dem Feld eine 5 eingetragen, wird nach 5 Tagen nicht weiter benachrichtigt.

    Wird zwischenzeitlich oder nach der maximalen Anzahl der Benachrichtigungen das Objekt so aktualisiert, dass es nicht mehr über die Benachrichtigung gefunden wird, wird der Zähler auf 0 zurückgesetzt.

*   **Anzahl gesendeter Benachrichtigungen**
    Die hier ausgegebene Anzeige ist rein informativ und wird bei jedem Durchlauf entweder erhöht, wenn eine Benachrichtigung verschickt wurde, oder zurückgesetzt, wenn keine verschickt wurde.

*   **Datum des letzten Durchlaufs**
    Ebenfalls rein informativ. Zeigt, wann das letzte Mal geprüft wurde.

*   **Startdatum des Intervall**
    Bei diesem Feld kann ein Datum ausgewählt werden, das Datum ist das Startdatum für den Intervall

*   **Intervallkonfiguration**
    Dieses Feld dient zur Konfiguration des Intervalls, ist kein Intervall gesetzt wird dies im Feld mit "Kein Intervall definiert" daregestellt.
    Intervalle lassen sich z.B. Täglich oder Wöchentlich wiederholen.
    Außerdem lässt ein ende des Intervalls konfigurieren.

*   **Beschreibung**
    Dieses Feld ist ein Freitextfeld für einen Beschreibungstext der Benachrichtigung.

## Domänen

Unter den Domänen lassen sich gezielt Objekte oder nach einem Schema gesammelt auswählen, die von der Benachrichtigung überprüft werden sollen.

*   **Objekte**
    Es können über die Lupe ein oder mehrere Objekte ausgewählt werden.

*   **Objekttypen**
    Hierüber können alle Objekte eines oder mehrerer hier ausgewählten Objekttypen überprüft werden.

*   **Reports**
    Mit einem Report kann noch gezielter benachrichtigt werden. Beispiel: Es soll geprüft werden, ob es noch genug freie Lizenzen gibt, die mehr als 150€ pro Stück kosten, da dort ein längerer Prozess zu beachten ist, als bei günstigeren Lizenzen. Ein zweiter Report kann dann erstellt und in einer anderen Benachrichtigung verwendet werden, um die günstigeren abzufragen und zu einem anderen, vielleicht späteren Zeitpunkt, zu benachrichtigen. Bitte hier auch unbedingt auf die Domäne und die in den abgefragten Objekttypen zugewiesenen Kategorien achten!

*   **Nur Objete mit Status "Normal"**
    Ist diese Option auf Ja gestellt werden nur noch Objekte im Report dargestellt die den [Zustand](../grundlagen/lebens-und-dokumentationszyklus.md#zustände) Normal besitzen.
!!! info "Hinweis"

    Je nach Benachrichtigungsart werden nur bestimmte Objekttypen unterstützt. Beispielsweise dürfen bei Prüfung von Verträgen nur Objekte vom Typ "Vertrag" und bei Prüfung von Lizenzen nur Objekte vom Typ "Lizenz" angegeben werden.

## Empfänger

Bei den Empfängern kann ebenfalls gezielt oder gesammelt benachrichtigt werden.

*   **Zugewiesene Rollen**
    Wird ein Objekt mit der konfigurierten Benachrichtigung gefunden, kann hierüber der diesem Objekt zugewiesene Kontakt in der hier eingestellten Rolle benachrichtigt werden.
    Beispiel: Bei Verträgen kann der unter dem Vertrag über die Kategorie "Kontaktzuweisung" dokumentierte Kontakt mit der Rolle "Vertragspartner" benachrichtigt werden.
    Kontaktpersonen die via Kontaktzuweisung -> Rolle benachrichtigt werden erhalten auch nur die Informationen zu diesem Objekt.

*   **Zugewiesene Kontakte**
    Es kann auch ein oder mehrere Kontakte bzw. ein oder mehrere Personengruppen oder Organisationen benachrichtigt werden. Wichtig hierbei ist eine zu jedem Kontaktobjekt hinterlegte E-Mail-Adresse.

    !!! info "Hier zugewiesene Kontakte werden immer und über alle Objekte benachrichtigt."

*   **Strategie zur Berechnung der Empfänger**
    Genutzte Berechnungsstrategie der Empfänger bei der **Auflösung von Personengruppen** zu Personen. Diese Einstellung betrifft nur Personengruppen die als Kontakt zugewiesen sind.


| Strategie | Beschreibung |
| --- | --- |
| \-  | Dies is der Standard = Gruppen falls E-Mail vorhanden, sonst zugewiesene Personen |
| Gruppen falls E-Mail vorhanden, sonst zugewiesene Personen | Wenn die Personengruppe eine primäre E-Mail Adresse hinterlegt hat wird diese benachrichtigt.  <br>Wenn die Personengruppe KEINE primäre E-Mail Adresse hinterlegt hat, werden die primären E-Mail Adressen der Personengruppen Mitglieder benachrichtigt. |
| Gruppen und Personen | Es werden die primären E-Mail Adressen der Personengruppen und der Personengruppen Mitglieder benachrichtigt. |
| Nur Gruppen | Personengruppen mit einer primären E-Mail Adresse werden benachrichtigt. |
| Nur Personen | Personengruppen Mitglieder mit einer primären E-Mail Adresse werden benachrichtigt. |

## E-Mail-Vorlagen

Im linken Navigationsbaum lassen sich die jeweiligen, zu den Benachrichtigungen passenden Vorlagen auswählen und für die deutsche und englische Sprache anpassen. Dies gilt immer global für alle Benutzer und sollte demnach nicht zu speziell angepasst werden. Die Möglichkeit, die Vorlage auf den Standard zurückzusetzen besteht nicht. Ob die deutsche oder englische Nachricht verschickt wird, hängt von der Benutzereinstellung des zu benachrichtigenden Kontakts zusammen. Hat dieser sich noch nie in i-doit angemeldet, wird in der Standard-Sprache von _i-doit_ benachrichtigt.

*   **Sprache**
    Es wird die Sprache angezeigt, die gerade bearbeitet wird.
*   **Betreff**
    Der Betreff der zu verschickenden Nachricht kann mit Platzhaltern aus dem unteren Bereich der Oberfläche selbst definiert werden.
*   **Benachrichtigungstext**
    Der Text kann, wie auch der Betreff, mit Platzhaltern zusammengestellt werden.
*   **Report**
    Ein Report kann hier definiert werden, mit dem in der E-Mail die in der Benachrichtigung gefundenen Objektinformationen aufbereitet verschickt werden.

## Konfiguration des Aufrufs mit der i-doit Console

Damit die eingerichteten Benachrichtigungen auch regelmäßig überprüft werden, muss die i-doit [Console](../automatisierung-und-integration/cli/index.md) mit dem Command **[notifications-send](../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md#OptionenundParameterderConsole-notifications-send)** zum Beispiel als Cronjob ausgeführt werden. Es lässt sich nicht jede Benachrichtigung einzeln abrufen, sondern es werden immer automatisch alle Benachrichtigungen nacheinander geprüft. Sinnvoll ist es, zu überlegen, wie oft maximal geprüft werden soll. Bewährt hat es sich unserer Erfahrung nach täglich kurz vor Arbeitsbeginn zu prüfen, damit morgens sofort klar ist, womit man sich den Tag über beschäftigen sollte.

!!! info "Hinweis"

    Ohne einen Aufruf des Commands über die i-doit Console findet **kein** Versand der Benachrichtigungen statt!

Die Möglichen Parameter sowie ein Beispielaufruf für den Versand der Benachrichtigungen sind im [entsprechenden Artikel](../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md) für den Command **[notifications-send](../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md#notifications-send)** zu finden.

!!! info "Hinweis"

    Mit dem Benachrichtigungsmodul lassen sich Eskalationsstufen abbilden. Dazu ist nötig, für dieselben Benachrichtigungsarten mehrere Benachrichtigungen mit verschiedenen Empfängerkreisen und Schwellwerten einzurichten.

**Beispiel zur Verwendung**

    sudo -u www-data php console.php notifications-send --user admin --password admin --tenantId 1
