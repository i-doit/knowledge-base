# Attributfelder

Nachdem wir uns mit der [Struktur der IT-Dokumentation](struktur-it-dokumentation.md) vertraut gemacht haben, betrachten wir etwas detaillierter die Attributfelder, die i-doit in der Web GUI zur Verfügung stellt.

## Überblick

Jedes Attribut, dass bearbeitet werden kann, wird durch ein Formularfeld repräsentiert. Dies betrifft sowohl die Standard-Kategorien, als auch die [benutzerdefinierten Kategorien](benutzerdefinierte-kategorien.md). Fast jedes Attributfeld kann als [Pflichtfeld deklariert und/oder mit Validierungsoptionen belegt](../effizientes-dokumentieren/validierung-und-pflichtfelder.md) werden.

[![Überblick](../assets/images/de/grundlagen/attributfelder/1-af.png)](../assets/images/de/grundlagen/attributfelder/1-af.png)

Attribute, die nicht bearbeitet werden können, erhalten in der Editier-Ansicht kein Attributfeld oder eines mit Nur-Lesen-Option (Read-only).

Ein Beispiel für ein dynamisch erstelltes Attribut ohne Attributfeld ist die **FQDN** in der Kategorie **Hostadresse**. Die **FQDN** setzt sich aus den Attributen **Hostname** und **DNS Domäne** zusammen.

[![fqdn](../assets/images/de/grundlagen/attributfelder/2-af.png)](../assets/images/de/grundlagen/attributfelder/2-af.png)

Ein Beispiel für ein Nur-Lesen-Attributfeld ist die **Objekt ID**, die von MySQL/MariaDB automatisch erzeugt wird.

[![objekt-id](../assets/images/de/grundlagen/attributfelder/3-af.png)](../assets/images/de/grundlagen/attributfelder/3-af.png)

## Einzeilige Textfelder

Einzeilige Textfelder nehmen beliebigen Text entgegen. Die Zeichenlänge ist begrenzt auf ca. 255 Zeichen. Ein Beispiel ist die **Seriennummer** in der Kategorie **Modell**.

[![Seriennummer](../assets/images/de/grundlagen/attributfelder/4-af.png)](../assets/images/de/grundlagen/attributfelder/4-af.png)

## HTML-Editor/Mehrzeilige Textfelder

Mehrzeilige Textfelder können beliebigen Text in mehreren Zeilen enthalten. Die Zeichenlänge ist auf ca. 65000 Zeichen begrenzt. Aus einem schlichten Textfeld lässt sich in einen HTML-Editor wechseln, um den Text zu formatieren. Dies geschieht unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → CMDB → WYSIWYG Editor in Kategorien**. "WYSIWYG" steht für "What You See Is What You Get".

Der HTML-Editor verfügt über weitere Formatierungsoptionen, die unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → CMDB → Aktiviere alle WYSIWYG Editor Funktionen** aktiviert werden können.

Fast jeder Kategorie-Eintrag verfügt am Ende über das Attribut Beschreibung, das standardmäßig als HTML-Editor dargestellt wird.

[![Beschreibung](../assets/images/de/grundlagen/attributfelder/5-af.png)](../assets/images/de/grundlagen/attributfelder/5-af.png)

## Dialog-Feld (Drop Down)

Das Dialog-Feld ist ein Auswahlfeld (Drop Down). Die Werte, aus denen einer ausgewählt werden kann, sind vorgegeben und können in der Regel nicht bearbeitet werden. Soll keiner der Werte ausgewählt werden, kann wenn möglich der einfache Strich (**-**) ausgewählt werden.

Als Beispiel dient der [Zustand](lebens-und-dokumentationszyklus.md) in der Kategorie **Allgemein**.

[![zustand](../assets/images/de/grundlagen/attributfelder/6-af.png)](../assets/images/de/grundlagen/attributfelder/6-af.png)

Ein Beispiel für ein Attribut, das zentral bearbeitet werden darf, ist der [**CMDB-Status**](lebens-und-dokumentationszyklus.md) in der Kategorie **Allgemein**.

## Dialog-Plus-Feld (erweitertes Drop Down)

Ähnlich wie das Dialog-Feld ist das Dialog-Plus-Feld. Darüber hinaus können zusätzliche Werte vorgegeben werden. Dazu nutzt man entweder das Icon rechts vom Attributfeld oder den [Dialog-Admin](dialog-admin.md).

Beispiele sind die Attribute **Kategorie** und **Einsatzzweck** in der Kategorie **Allgemein**.

[![einsatzzweck](../assets/images/de/grundlagen/attributfelder/7-af.png)](../assets/images/de/grundlagen/attributfelder/7-af.png)

Klickt man auf das Icon, öffnet sich der **Listenbrowser**, über den sich weitere Werte hinzufügen und bestehende ändern lassen.

[![listenbrowser](../assets/images/de/grundlagen/attributfelder/8-af.png)](../assets/images/de/grundlagen/attributfelder/8-af.png)

!!! info "Hinweis"
    Das Löschen ist nur über den Dialog-Admin möglich. Diese Funktion sollte ausschließlich von Administratoren verwendet werden, da entfernte Feldwerte aus allen Einträgen unwiderruflich gelöscht werden.

## Multi-Dialog-Plus-Feld (Mehrfachauswahl)

Bei den oben genannten Auswahlfeldern lässt sich stets nur ein Wert selektieren. Um mehrere gleichzeitig auswählen zu können, gibt es das Multi-Dialog-Plus-Feld. Aus einem Drop-Down-Menü lassen sich weitere Werte hinzufügen. In einigen Fällen gibt es zusätzliche Buttons zum (De-)Selektieren aller Werte oder zur Umkehr der Auswahl.

Als Beispiel dient das Attribut **DNS Domäne** in der Kategorie **Hostadresse**.

[![dns-domäne](../assets/images/de/grundlagen/attributfelder/9-af.png)](../assets/images/de/grundlagen/attributfelder/9-af.png)

## Datumsfeld

Für Datumsangaben dient das Datumsfeld. Klickt man auf das einzeilige Textfeld, öffnet sich ein Kalender. Klickt man auf das gewünschte Datum, wird dieses im Textfeld übernommen. Alternativ kann das Datum manuell im Format tt.mm.jjjj angeben werden.

In der Kategorie **Buchhaltung** gibt es das Beispiel-Attribut **Lieferdatum**.

[![datumsfdeld](../assets/images/de/grundlagen/attributfelder/10-af.png)](../assets/images/de/grundlagen/attributfelder/10-af.png)

## Einheiten und Intervalle

Um Einheiten oder Intervalle zu dokumentieren, gibt es neben solchen Attributfeldern ein Drop-Down-Feld, um diese festzulegen. Hierbei kann es sich um Zeiteinheiten, Maßeinheiten, Gewichtseinheiten, Zeiträume usw. handeln.

Das Attribut **Garantiezeitraum** in der Kategorie **Buchhaltung** ist ein Beispiel.

[![intervalle](../assets/images/de/grundlagen/attributfelder/11-af.png)](../assets/images/de/grundlagen/attributfelder/11-af.png)

## Kosten

Kosten werden als Dezimalzahlen (oder vereinfacht als reelle Zahlen ohne Nachkommastellen) dokumentiert. Als Trenner zu den Nachkommastellen dürfen Punkt und Komma genutzt werden. Das Attributfeld zeigt zudem die konfigurierte Währung an. Diese wird unter **Verwaltung → [Mandanten-Name] Verwaltung → Allgemeine Einstellungen → Währungsformat** festgelegt.

Das Attribut **Investitionskosten** in der Kategorie **Buchhaltung** ist ein Beispiel.

[![kosten](../assets/images/de/grundlagen/attributfelder/12-af.png)](../assets/images/de/grundlagen/attributfelder/12-af.png)

## Link

Manche einzeiligen Textfelder sind dafür gedacht, URIs einzugeben. Daraus wird ein Link generiert, den der Benutzer anklicken kann, um ihn aufzurufen.

Die Kategorie **Zugriff** bietet beispielsweise dieses Attributfeld an.

[![link](../assets/images/de/grundlagen/attributfelder/13-af.png)](../assets/images/de/grundlagen/attributfelder/13-af.png)

## Objekt-Beziehungen

Um eine Beziehung zwischen zwei oder mehreren Objekten herzustellen, existiert für allgemeine Fälle der Objektbrowser und für spezielle weitere Browser. Das einzeilige Textfeld wird durch zwei Icons auf der rechten Seite ergänzt.

Wenn eine 1-zu-1-Beziehung zwischen zwei Objekten hergestellt werden kann, ist das Textfeld beschreibbar. Dabei werden bereits beim Tippen Vorschläge gemacht. Wenn eine 1-zu-n-Beziehung hergestellt werden kann, ist das Textfeld im Nur-Lesen-Modus.

Wird auf das Lupen-Icon geklickt, öffnet sich der passende Browser. Das Icon daneben, eine Klammer mit Sperrzeichen, löst bestehende oder gerade ausgewählte Beziehungen.

[![objekt-beziehung](../assets/images/de/grundlagen/attributfelder/14-af.png)](../assets/images/de/grundlagen/attributfelder/14-af.png)

### Objekt-Browser

Der Objekt-Browser ist individuell aufgebaut, je nachdem, welche Beziehungsart dokumentiert werden soll. Daher stehen nicht alle Funktionen, die hier beschrieben werden, immer zur Verfügung. Oftmals ist die Auswahl an Filtern eingeschränkt, weil beispielsweise nur Objekte von bestimmten Objekttypen ausgewählt werden dürfen.

Wenn die Auswahl des referenzierten Objekts über Radio-Buttons erfolgt, ist lediglich eine einfache Auswahl möglich. Stehen hingegen die [![bild](../assets/images/de/grundlagen/attributfelder/hinzufuegen.png)](../assets/images/de/grundlagen/attributfelder/hinzufuegen.png)-Schaltflächen zur Verfügung, ist eine Mehrfachauswahl möglich.

Im oberen Bereich befinden sich mehrere Tabs:

-   **Objektsicht**: Die Objektsicht wird nach Filtern sortiert. Fehlt das passende Objekt, kann es über den Button **Neues Objekt erstellen** erzeugt werden. Filter:
    -   **nach Objekttyp**: Zunächst wird der Objekttyp ausgewählt, anschließend das oder die Objekte.
    -   **nach Objektgruppe**: Wird der Objekttyp **Objektgruppe** genutzt, lassen sich Objekte pro **Objektgruppe** auflisten.
    -   **nach Personengruppen**: Es werden alle **Personen** pro **Personengruppe** aufgelistet.
    -   **nach Beziehungen**: Es werden alle Beziehungs-Objekte aufgelistet, wobei zunächst die Beziehungsart ausgewählt werden muss.
    -   **nach Datum**: Es werden Objekte nach Datum sortiert. Die Optionen sind: **kürzlich erstellt**, **kürzlich verändert**, **diesen Monat erstellt**, **letzten Monat erstellt**.
-   **Standortsicht**: Der Standortbaum mit allen Pfaden wird aufgebaut, aus dem das passende Objekt ausgewählt werden kann.
-   **Suche**: Hierüber werden Objekte anhand der Objekt-Titel [gesucht](../effizientes-dokumentieren/suche.md).
-   **Reports**: Anhand von bereits erstellten [Reports](../auswertungen/report-manager.md) werden Objekte aufgelistet.
-   **Ausgewählte Objekte**: In diesem Tab werden alle bereits ausgewählten Objekte angezeigt. Über den Button **Neue Objektgruppe aus Auswahl erzeugen** wird ein Objekt vom Typ Objektgruppe erstellt und mit der Auswahl an Objekten befüllt.

Im Log werden alle derzeitigen Änderungen aufgelistet.

Aus Beispiel dient der **Kontakt-Browser**, der in der Kategorie **Buchhaltung** dem Attribut **Eingekauft bei** zur Verfügung steht.

[![Kontakt Browser](../assets/images/de/grundlagen/attributfelder/15-af.png)](../assets/images/de/grundlagen/attributfelder/15-af.png)

### Standortauswahl

Dieser Browser baut eine 1-zu-1-Beziehung der Art **Standort** zu einem Objekt auf, das als Standort definiert ist. Beim Klick auf das Lupen-Icon wird die **Standortauswahl** präsentiert, die der **Standortsicht** ähnelt (siehe oben). Dieser Browser erscheint in der Kategorie **Standort**.

[![Standort](../assets/images/de/grundlagen/attributfelder/16-af.png)](../assets/images/de/grundlagen/attributfelder/16-af.png)

[![Standortauswahl](../assets/images/de/grundlagen/attributfelder/17-af.png)](../assets/images/de/grundlagen/attributfelder/17-af.png)

### Browser mit Unterauswahl

Teilweise ist es nötig, nicht nur das Objekt auszuwählen, sondern ein Attribut dieses Objekts. Beispiele sind das Attribut **Verbunden mit** in der Kategorie **Port (Netzwerk)**, wobei hier ein Ein- oder Ausgang aus der Kategorie **Anschluss** **(Verkabelung)** ausgewählt wird, und die Möglichkeit in der Kategorie **Service Komponenten**, Software-Beziehungen auszuwählen.

[![Objekt Browser](../assets/images/de/grundlagen/attributfelder/18-af.png)](../assets/images/de/grundlagen/attributfelder/18-af.png)

!!!info "Hinweis"
    Wenn der Browser zweigeteilt ist, also über eine solche Unterauswahl verfügt, und Radio-Buttons verwendet, muss in beiden Spalten eine Auswahl getroffen werden. Wenn beispielsweise bei der Verkabelung zweier Geräte nur das verbundene Objekt, jedoch nicht der entsprechende Anschluss im Objektbrowser ausgewählt wird, wird die Eingabe beim Speichern nicht übernommen.
