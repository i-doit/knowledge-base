---
title: Dokumentation von Lizenzen
description: Dokumentation von Lizenzen
icon: 
status: new
lang: de
---

Die Dokumentation von Software-Lizenzen ist für alle Client- und Server-Systeme bedeutsam. Für IT-Administratoren ist der Überblick über vorhandene Lizenzen essentiell, um die rechtssichere Lizenzierung aller eingesetzten Systeme zu gewährleisten. Mehrfach genutzte Lizenzen sollten schnell erkannt und mögliche Neuzuweisungen einfach vorgenommen werden.

Durch die Dokumentation der Lizenzen werden nicht nur Handlungskompetenzen aufgebaut, sondern Kosten gespart. Durch das rasante Wachstum der Infrastruktur wächst der Lizenzpool gleichermaßen. Kaum jemand behält die Übersicht, welche Lizenzen noch verwendet werden. i-doit unterstützt hier, indem nicht genutzte Lizenzen per Knopfdruck ermittelt und aus dem Lizenzpool entfernt werden können. i-doit sorgt als zentrales effektives Tool dafür, dass Ihr Unternehmen stets über die Lizenzen verfügt, die tatsächlich benötigt werden.

[![Objekt-Liste](../assets/images/de/anwendungsfaelle/dokumentation-von-lizenzen/1.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-lizenzen/1.png)

## Lizenzen anlegen und verwalten

Jede neue Lizenz wird in i-doit über den Objekttyp “Lizenzen” angelegt. Neben einer eindeutigen Bezeichnung kann hier der CMDB-Zustand der Lizenz festgelegt werden. Dieser ist davon abhängig, ob die Lizenz gerade erst bestellt, geliefert oder in Betrieb ist. Der gesamte Asset-Lebenszyklus wird somit auch für Lizenzen in i-doit abgebildet.

Alle wichtigen Informationen zur Zahlung und Lieferung werden in der Kategorie „Buchhaltung“ erfasst. Die Berechnung der Garantie erfolgt auf Basis der eingetragenen Werte automatisch und kann in individuellen Berichten verwendet werden.

[![Lizenz anlegen](../assets/images/de/anwendungsfaelle/dokumentation-von-lizenzen/2.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-lizenzen/2.png)

Bei Lizenzen kann es zu Rückfragen kommen. Oft beginnt dann die Suche nach Informationen auf alten Rechnungen und Lieferscheinen. In i-doit hinterlegen Sie wichtige Ansprechpartner in der Kategorie “Kontaktzuweisungen”. Diese Ansprechpartner statten Sie darüber hinaus mit verschiedenen Rollen aus.

[![Kontaktzuweisung](../assets/images/de/anwendungsfaelle/dokumentation-von-lizenzen/3.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-lizenzen/3.png)

## Lizenzschlüssel erstellen

Ein Lizenzobjekt kann über verschiedene Schlüssel verfügen. Oft wird eben nicht nur ein Windows-Server betrieben, sondern eine Vielzahl. Dementsprechend werden auch unterschiedliche Lizenzschlüssel verwendet, die in i-doit separat angelegt werden. Dabei wird zwischen Einzellizenzen und Volumen-Lizenzschlüsseln unterschieden. Zusätzlich ist die Angabe eines Start- und Ablaufdatums der Lizenz möglich. Vor allem für Benachrichtigungen und das Reporting sind das hilfreiche Informationen, um bereits vor dem Ablauf von Lizenzen handlungsfähig zu sein.

## Lizenzen zu bestehenden Assets hinzufügen

Die Lizenzzuweisung erfolgt direkt im Asset (z.B. Server oder Client) und wird in der Kategorie „Softwarezuweisung“ oder „Betriebssystem“ vorgenommen. Neben der Lizenzzuweisung kann hier auch die jeweilige Version und Variante der Software konfiguriert werden. IT-Administratoren haben so stets das Patchlevel der verschiedenen Systeme im Blick und können diese Informationen in beliebigen Reports verwenden.

[![Betriebssystem](../assets/images/de/anwendungsfaelle/dokumentation-von-lizenzen/4.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-lizenzen/4.png)

## Reporting und Benachrichtigungen

Alle Informationen zu Software, Lizenzen und Systemen unterstützen Fach- und Führungskräfte bei der Planung und Umsetzung von Tasks. Für die regelmäßige Auswertung der Informationen stellt i-doit die Tools Benachrichtigungen und Report Manager zur Verfügung. Mit diesen erstellen Sie automatisch Benachrichtigungen und werten vorhandene Informationen granular aus.

**Use-Case: Auswertung der genutzten Lizenzen nach Abteilung oder Standort**

Oft muss ermittelt werden, welche Lizenzen von einzelnen Personen oder ganzen Abteilungen genutzt und eingesetzt werden. Dafür kann über den Report Manager ein Bericht erstellt werden, der alle Systeme mit einer zugewiesenen Lizenz ausgibt. Dieser Bericht kann mit Angaben zum Standort, Modell, Benutzer uvm. individuell erweitert werden.

Als Bedingung wird im Bericht festlegt, dass alle Systeme unterhalb eines Standorts angezeigt werden sollen. In diesem Beispiel haben wir die Niederlassung in Wien ausgewählt. Als zweite Bedingung wurde festgelegt, dass nur Systeme angezeigt werden sollen, die über eine zugewiesene Lizenz in der Kategorie “Betriebssystem” verfügen. Durch diese Kombination von Bedingungen werden nun ausschließlich Systeme unterhalb des Standorts Wien mit einer zugewiesenen Betriebssystem-Lizenz angezeigt.

[![Report](../assets/images/de/anwendungsfaelle/dokumentation-von-lizenzen/5.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-lizenzen/5.png)

Nachdem die Bedingungen definiert wurden, sollen nun noch verschiedene Informationen im Bericht ausgegeben werden. Dazu wählen wir die gewünschten Attribute aus und prüfen die Ausgabe.

[![Report](../assets/images/de/anwendungsfaelle/dokumentation-von-lizenzen/6.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-lizenzen/6.png)

Statt eines Standorts kann auch die Zugehörigkeit zu einer Abteilung, eines bestimmten Benutzers oder eines bestimmten Gerätetyps gewählt werden.

## Verfügbare und genutzte Lizenzen anzeigen

Um die zugeteilten und freien Lizenzen zu ermitteln, gibt es verschiedene Möglichkeiten. Die einfachste Variante ist einfach die Lizenzen aufzurufen und über die Objekt-Listen die Kategorie Freie Lizenzen zu aktivieren.

[![Objekt-Liste](../assets/images/de/anwendungsfaelle/dokumentation-von-lizenzen/1.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-lizenzen/1.png)

Im Report Manager ist der standardisierte Bericht “Lizenzauslastung” in den Online Repositories verfügbar. Über diesen können ebenfalls alle Lizenzen mit Lizenzschlüsseln, insgesamt vorhandenen Lizenzen und den tatsächlich genutzten Lizenzen angezeigt werden.

[![Lizenzen in Benutzung](../assets/images/de/anwendungsfaelle/dokumentation-von-lizenzen/7.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-lizenzen/7.png)

## Automatisch über ablaufende Lizenzen benachrichtigt werden

i-doit verfügt über ein integriertes Werkzeug für Benachrichtigungen. Dieses kann über Extras -> CMDB -> Benachrichtigungen aufgerufen werden. Hier kann nun präzise definiert werden, wann Personen und Abteilungen über bald ablaufende Lizenzen oder eine Lizenzunterschreitung informiert werden sollen. Dazu kann definiert werden, ab welchem Schwellwert (z.B. 30 Tage) die verantwortlichen Personen eine Benachrichtigung erhalten sollen.

## Automatische Erkennung von Software und Lizenzen mit Netzwerk Discovery

Die Infrastruktur unterliegt einem ständigen Wandel. Neue Clients und Server werden in Betrieb genommen und alte Systeme abgeschaltet. Und inzwischen benötigt ein Nutzer kurzfristig eine bestimmte Software zur Erledigung einer Aufgabe. Die Dokumentation all dieser Änderung kann im hektischen Arbeitsalltag leicht vergessen werden. Dies kann leicht zu einer doppelten Vergabe von Lizenzen und zu einer Unterlizenzierung führen, die im schlimmsten Fall kostspielig wird. Es ist vor allem im Bereich Software und Lizenzen oft sinnvoll, diese Informationen regelmäßig automatisiert direkt auf den Systemen zu prüfen.

Ob zur Kontrolle der Lizenznutzung oder zur Entlastung Ihrer Mitarbeiter und Kollegen: Mit einem Discovery-Tool reduzieren Sie den Dokumentationsaufwand. Professionelle Tools für die Discovery von Netzwerken sind z.B. [JDisc](https://www.i-doit.com/i-doit-discovery/), Lansweeper und [Monitos Inventory](https://www.i-doit.com/produkte/add-ons/monitos-inventory).
