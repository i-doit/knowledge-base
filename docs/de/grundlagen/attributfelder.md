---
title: Attributfelder
description: "Attributfelder sind die Formularelemente in der Web GUI von i-doit, über die du Attribute liest und bearbeitest."
icon:
status:
lang: de
---
# Attributfelder

Attributfelder sind die Formularelemente in der Web GUI von i-doit, über die du [Attribute](struktur-it-dokumentation.md) liest und bearbeitest. Dieser Artikel stellt dir alle verfügbaren Feldtypen vor.

## Überblick

Jedes bearbeitbare Attribut wird durch ein Formularfeld repräsentiert -- sowohl in Standard-Kategorien als auch in [benutzerdefinierten Kategorien](benutzerdefinierte-kategorien.md). Fast jedes Attributfeld kannst du als [Pflichtfeld deklarieren und/oder mit Validierungsoptionen belegen](../effizientes-dokumentieren/attributvalidierung-und-pflichtfelder.md).

[![Überblick](../assets/images/de/grundlagen/attributfelder/1-af.png)](../assets/images/de/grundlagen/attributfelder/1-af.png)

Nicht bearbeitbare Attribute erscheinen in der Editier-Ansicht entweder gar nicht oder als Nur-Lesen-Feld (Read-only).

**Beispiel: Dynamisch berechnetes Attribut** -- Die **FQDN** in der Kategorie **Hostadresse** setzt sich automatisch aus den Attributen **Hostname** und **DNS Domäne** zusammen und hat daher kein eigenes Eingabefeld.

[![fqdn](../assets/images/de/grundlagen/attributfelder/2-af.png)](../assets/images/de/grundlagen/attributfelder/2-af.png)

**Beispiel: Nur-Lesen-Feld** -- Die **Objekt ID** wird von MySQL/MariaDB automatisch erzeugt und kann nicht bearbeitet werden.

[![objekt-id](../assets/images/de/grundlagen/attributfelder/3-af.png)](../assets/images/de/grundlagen/attributfelder/3-af.png)

## Einzeilige Textfelder

Einzeilige Textfelder nehmen beliebigen Text mit maximal ca. 255 Zeichen entgegen. Beispiel: die **Seriennummer** in der Kategorie **Modell**.

[![Seriennummer](../assets/images/de/grundlagen/attributfelder/4-af.png)](../assets/images/de/grundlagen/attributfelder/4-af.png)

## HTML-Editor/Mehrzeilige Textfelder

Mehrzeilige Textfelder nehmen beliebigen Text mit maximal ca. 65.000 Zeichen auf. Du kannst sie optional in einen HTML-Editor (WYSIWYG -- "What You See Is What You Get") umwandeln, um Text zu formatieren.

So aktivierst du den HTML-Editor:

- **WYSIWYG aktivieren**: **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → CMDB → WYSIWYG Editor in Kategorien**
- **Erweiterte Formatierungsoptionen**: **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → CMDB → Aktiviere alle WYSIWYG Editor Funktionen**

Fast jeder Kategorie-Eintrag enthält am Ende ein **Beschreibung**-Attribut, das standardmäßig als HTML-Editor dargestellt wird.

[![Beschreibung](../assets/images/de/grundlagen/attributfelder/5-af.png)](../assets/images/de/grundlagen/attributfelder/5-af.png)

## Dialog-Feld (Drop Down)

Das Dialog-Feld ist ein Auswahlfeld (Drop-Down) mit vorgegebenen Werten, die du in der Regel nicht bearbeiten kannst. Wenn du keinen Wert auswählen möchtest, wähle -- sofern verfügbar -- den einfachen Strich (**-**).

Beispiel: der [Zustand](lebens-und-dokumentationszyklus.md) in der Kategorie **Allgemein**.

[![zustand](../assets/images/de/grundlagen/attributfelder/6-af.png)](../assets/images/de/grundlagen/attributfelder/6-af.png)

Ein Beispiel für ein Attribut, das zentral bearbeitet werden darf, ist der [**CMDB-Status**](lebens-und-dokumentationszyklus.md) in der Kategorie **Allgemein**.

## Dialog-Plus-Feld (erweitertes Drop Down)

Das Dialog-Plus-Feld funktioniert wie ein Dialog-Feld, erlaubt dir aber zusätzlich, eigene Werte hinzuzufügen. Dazu nutzt du entweder das Icon rechts vom Attributfeld oder den [Dialog-Admin](dialog-admin.md).

Beispiele sind die Attribute **Kategorie** und **Einsatzzweck** in der Kategorie **Allgemein**.

[![einsatzzweck](../assets/images/de/grundlagen/attributfelder/7-af.png)](../assets/images/de/grundlagen/attributfelder/7-af.png)

Klickst du auf das Icon, öffnet sich der **Listenbrowser**, über den du weitere Werte hinzufügen und bestehende ändern kannst.

[![listenbrowser](../assets/images/de/grundlagen/attributfelder/8-af.png)](../assets/images/de/grundlagen/attributfelder/8-af.png)

!!! info "Hinweis"
    Das Löschen ist nur über den Dialog-Admin möglich. Diese Funktion sollte ausschließlich von Administratoren verwendet werden, da entfernte Feldwerte aus allen Einträgen unwiderruflich gelöscht werden.

## Multi-Dialog-Plus-Feld (Mehrfachauswahl)

Die bisherigen Auswahlfelder erlauben nur die Auswahl eines einzelnen Werts. Das Multi-Dialog-Plus-Feld ermöglicht dir die gleichzeitige Auswahl mehrerer Werte aus einem Drop-Down-Menü. In einigen Fällen stehen zusätzliche Buttons zum (De-)Selektieren aller Werte oder zur Umkehr der Auswahl bereit.

Als Beispiel dient das Attribut **DNS Domäne** in der Kategorie **Hostadresse**.

[![dns-domäne](../assets/images/de/grundlagen/attributfelder/9-af.png)](../assets/images/de/grundlagen/attributfelder/9-af.png)

## Datumsfeld

Das Datumsfeld dient zur Eingabe von Datumsangaben. Klicke auf das Textfeld, um einen Kalender zu öffnen, und wähle das gewünschte Datum aus. Alternativ gibst du das Datum manuell im Format **tt.mm.jjjj** ein.

In der Kategorie **Buchhaltung** gibt es das Beispiel-Attribut **Lieferdatum**.

[![datumsfdeld](../assets/images/de/grundlagen/attributfelder/10-af.png)](../assets/images/de/grundlagen/attributfelder/10-af.png)

## Einheiten und Intervalle

Manche Attributfelder werden durch ein zusätzliches Drop-Down-Feld ergänzt, über das du die Einheit oder das Intervall festlegst -- z. B. Zeiteinheiten, Maßeinheiten, Gewichtseinheiten oder Zeiträume.

Das Attribut **Garantiezeitraum** in der Kategorie **Buchhaltung** ist ein Beispiel.

[![intervalle](../assets/images/de/grundlagen/attributfelder/11-af.png)](../assets/images/de/grundlagen/attributfelder/11-af.png)

## Kosten

Kosten gibst du als Dezimalzahlen ein -- sowohl Punkt als auch Komma sind als Dezimaltrenner erlaubt. Das Feld zeigt die konfigurierte Währung an. Diese legst du unter **Verwaltung → [Mandanten-Name] Verwaltung → Allgemeine Einstellungen → Währungsformat** fest.

Das Attribut **Investitionskosten** in der Kategorie **Buchhaltung** ist ein Beispiel.

[![kosten](../assets/images/de/grundlagen/attributfelder/12-af.png)](../assets/images/de/grundlagen/attributfelder/12-af.png)

## Link

Manche einzeiligen Textfelder sind für die Eingabe von URIs vorgesehen. i-doit generiert daraus einen klickbaren Link.

Die Kategorie **Zugriff** bietet beispielsweise dieses Attributfeld an.

[![link](../assets/images/de/grundlagen/attributfelder/13-af.png)](../assets/images/de/grundlagen/attributfelder/13-af.png)

## Objekt-Beziehungen

Um Beziehungen zwischen Objekten herzustellen, stehen dir der Objektbrowser und spezielle Browser zur Verfügung. Das Textfeld wird durch zwei Icons ergänzt:

- **Lupen-Icon**: Öffnet den passenden Browser zur Auswahl
- **Klammer-Icon mit Sperrzeichen**: Löst bestehende oder ausgewählte Beziehungen

Bei **1-zu-1-Beziehungen** kannst du direkt ins Textfeld tippen -- i-doit macht bereits beim Eintippen Vorschläge. Bei **1-zu-n-Beziehungen** ist das Textfeld schreibgeschützt, und du wählst über den Browser aus.

[![objekt-beziehung](../assets/images/de/grundlagen/attributfelder/14-af.png)](../assets/images/de/grundlagen/attributfelder/14-af.png)

### Objekt-Browser

Der Objekt-Browser passt sich an die jeweilige Beziehungsart an -- nicht alle hier beschriebenen Funktionen stehen immer zur Verfügung. Oft ist die Auswahl an Filtern eingeschränkt, weil nur Objekte bestimmter Objekttypen zugelassen sind.

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

Als Beispiel dient der **Kontakt-Browser**, der in der Kategorie **Buchhaltung** dem Attribut **Eingekauft bei** zur Verfügung steht.

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
