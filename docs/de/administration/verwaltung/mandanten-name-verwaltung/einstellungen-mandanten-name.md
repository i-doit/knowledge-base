---
title: Einstellungen für [Mandanten-Name]
description: Alle mandantenspezifischen Einstellungen in i-doit — von Sicherheit über CMDB-Verhalten bis hin zu Import und Suche.
icon:
status:
lang: de
---

# Einstellungen für [Mandanten-Name]

Unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen** findest du alle Konfigurationsoptionen, die sich auf den aktuell ausgewählten Mandanten auswirken. Die Einstellungen sind in aufklappbare Sektionen gruppiert, die du über **Alles ausklappen** und **Alles einklappen** steuern kannst.

Diese Seite richtet sich an i-doit-Administratoren, die das Verhalten der CMDB, der Oberfläche, der Suche oder der Sicherheitsmechanismen für ihren Mandanten anpassen möchten. Änderungen hier wirken sich **nur auf den aktuellen Mandanten** aus — systemweite Einstellungen (z.B. SMTP, Proxy, Login-Verhalten) konfigurierst du im [Admin Center](../../admin-center.md). Für niedrigere Konfigurationsebenen mit Key-Value-Paaren stehen die [Experteneinstellungen](experteneinstellungen.md) zur Verfügung.

[![Einstellungen übersicht](../../../assets/images/de/administration/mandanten-verwaltung/einstellungen.png)](../../../assets/images/de/administration/mandanten-verwaltung/einstellungen.png)

---

## Passwort zurücksetzen

| Option | Wert |
| --- | --- |
| **Passwort zurücksetzen** | Aktiviert / Deaktiviert |

Wenn diese Option aktiviert ist, können Benutzer auf der Login-Seite über einen Link ihr Passwort selbst zurücksetzen. i-doit verschickt dann eine E-Mail mit einem Reset-Link an die im Benutzerkonto hinterlegte Adresse.

Deaktiviere diese Funktion, wenn du Passwörter ausschließlich über LDAP/AD oder ein externes Identity-Management verwaltest und ein Self-Service-Reset nicht gewünscht ist.

---

## URL Einstellungen

| Option | Wert |
| --- | --- |
| **i-doit Adresse (URL)** | URL zur i-doit-Installation |

Hier hinterlegst du die Basis-URL, unter der deine i-doit-Instanz erreichbar ist (z.B. `https://cmdb.example.com/i-doit`). Diese URL wird für die Generierung von Links in E-Mail-Benachrichtigungen, Exporten und API-Antworten verwendet.

!!! warning "Korrekte URL ist wichtig"
    Wenn die URL nicht korrekt gesetzt ist, führen Links in Benachrichtigungen und exportierten Reports ins Leere. Stelle sicher, dass Protokoll (`https://`), Hostname und Pfad korrekt angegeben sind.

---

## CMDB

Diese Sektion enthält die meisten Optionen und steuert das grundlegende Verhalten der Configuration Management Database.

<!-- cSpell:disable -->
| Option | Wert |
| --- | --- |
| **CSV-Export Trennzeichen** | Komma, Semikolon, Raute oder Tab |
| **One-Click-Edit** | Ja / Nein |
| **Globaler SYS-ID Präfix** | String |
| **CMDB Status von Kabeln nach Verkabelung "In Betrieb" setzen** | Ja / Nein |
| **CMDB Status von Kabeln nach Entkabelung "Außer Betrieb" setzen** | Ja / Nein |
| **Objekttyp Konstante für Segmentierungs-Templates** | String |
| **Nummerierung vertikaler Schrank-Einschübe** | Standard / Von oben links nach unten rechts, beide Seiten / Von oben links nach unten rechts, pro Seite |
| **Die vertikalen Schrank Einschübe auf der Rückseite spiegeln** | Ja / Nein |
| **Aufzählung von Schrank HEs** | Von oben / Von unten |
| **Gelöste Segmentierungs Objekte…** | nicht verändern / archivieren / purgen |
| **Objekte beim Umzug aus Chassis lösen** | Ja / Nein |
| **Interaktion zwischen "Logischer Standort" und "Standort" aktivieren?** | Ja / Nein |
| **Objekttyp-Filter bei Arbeitsplätzen aktivieren?** | Ja / Nein |
| **Bei CSV-Export von Listen Objekt-IDs entfernen** | Ja / Nein |
| **Validierung für MAC-Adressen deaktivieren** | Ja / Nein |
| **SYS-ID nur lesbar** | Ja / Nein |
| **Freigabe der IP-Adressen eines Objektes beim Löschen oder Archivieren** | Ja / Nein |
| **Zustand von importierten Objekten beibehalten?** | Ja / Nein |
| **Präfix für automatische Bezeichnung von Kabelobjekten** | Leer oder String |
| **Quickpurge-Button aktivieren** | Ja / Nein |
| **WYSIWYG Editor in Kategorien** | Ja / Nein |
| **Aktiviere alle WYSIWYG Editor Funktionen** | Ja / Nein |
| **my-doit CMDB-Status Auswahl speichern** | Ja / Nein |
<!-- cSpell:enable -->

### Erläuterungen zu ausgewählten CMDB-Optionen

**CSV-Export Trennzeichen** — Wähle das Trennzeichen, das beim CSV-Export aus Objektlisten und Reports verwendet wird. Semikolon ist der Standard für deutschsprachige Excel-Installationen, Komma für englischsprachige.

**One-Click-Edit** — Wenn aktiviert, kannst du Attributwerte in der Listenansicht direkt per Klick bearbeiten, ohne die Detailseite des Objekts zu öffnen. Dies beschleunigt die Pflege, erhöht aber das Risiko versehentlicher Änderungen.

**Globaler SYS-ID Präfix** — Jedes neue Objekt erhält automatisch eine SYS-ID mit diesem Präfix (z.B. `CMDB-`). Ändere den Präfix nur, wenn du mehrere i-doit-Instanzen betreibst und die SYS-IDs unterscheidbar halten möchtest.

**Kabelstatus automatisch setzen** — Die beiden Optionen für den CMDB-Status von Kabeln sorgen dafür, dass Kabelobjekte beim Verkabeln automatisch auf "In Betrieb" und beim Entkabeln auf "Außer Betrieb" gesetzt werden. Das spart manuelle Nacharbeit bei der Verkabelungsdokumentation.

**Freigabe der IP-Adressen beim Löschen/Archivieren** — Wenn aktiviert, werden IP-Adressen eines Objekts freigegeben, sobald es archiviert oder gelöscht wird. Damit stehen die Adressen sofort wieder für andere Objekte zur Verfügung. Deaktiviere diese Option, wenn du IP-Historien lückenlos nachverfolgen möchtest.

**Quickpurge-Button aktivieren** — Zeigt in der Objektansicht einen Button, mit dem Objekte sofort endgültig gelöscht (gepurged) werden können, ohne den Umweg über Archivieren → Löschen → Purgen.

!!! warning "Quickpurge"
    Der Quickpurge-Button entfernt Objekte unwiderruflich aus der Datenbank. Aktiviere ihn nur, wenn du sicher bist, dass Benutzer mit Löschrechten sich der Konsequenz bewusst sind.

**SYS-ID nur lesbar** — Verhindert, dass Benutzer die SYS-ID manuell ändern. Empfohlen, wenn die SYS-ID als stabiler Identifier in externen Systemen oder Schnittstellen verwendet wird.

**WYSIWYG Editor** — Aktiviert einen Rich-Text-Editor für Beschreibungsfelder in Kategorien. Mit "Aktiviere alle WYSIWYG Editor Funktionen" stehen zusätzliche Formatierungsoptionen wie Tabellen und Bilder zur Verfügung.

---

## Display Limits

Diese Einstellungen begrenzen die Anzahl der angezeigten Elemente in verschiedenen Bereichen der Oberfläche. Niedrigere Werte verbessern die Ladezeit, höhere Werte zeigen mehr Informationen auf einen Blick.

<!-- cSpell:disable -->
| Option | Wert |
| --- | --- |
| **Anzeigelimit verknüpfter Objekte in Objektbrowser** | Zahl |
| **Anzeigeart verknüpfter Objekte in Objektbrowsers** | Kommasepariert / Als Liste |
| **Anzahl vorgeladener Seiten in Report-Listen** | Zahl |
| **Anzeigelimit für Spalten in Multivalue-Kategorien** | Zahl |
| **Objekt-Browser Ergebnislimit** | Zahl |
| **Anzeigelimit VLANs in Portlisten** | Zahl |
| **Anzeigelimit Layer-2 Netze in Portlisten** | Zahl |
| **Nur Default VLAN in Portübersicht zeigen** | Ja / Nein |
| **Anzeigelimit von verbundenen Anschlüssen in Anschlusslisten** | Zahl |
| **Anzeigelimit von Hostadressen** | Zahl |
| **Anzeigelimit von Services im CMDB Explorer Popup** | Zahl |
| **Limit der Tiefe des Standortpfades** | Zahl |
| **MyDoIt Taskeinträge** | Zahl |
<!-- cSpell:enable -->

Passe diese Limits an, wenn du in großen Umgebungen Performance-Probleme feststellst oder wenn Benutzer sich beschweren, dass nicht alle relevanten Einträge angezeigt werden. In Umgebungen mit Tausenden von VLANs oder Hostadressen kann ein zu hohes Limit die Ladezeiten deutlich verschlechtern.

---

## Optionen für IP-Liste

Diese Einstellungen steuern das Verhalten der IP-Listen-Ansicht innerhalb von Netz-Objekten.

<!-- cSpell:disable -->
| Option | Wert |
| --- | --- |
| **Cache Zeitraum (in Sekunden)** | Zahl |
| **Ping Funktion** | Ping via NMAP / Ping via FPING |
| **NMAP Parameter (für Ping)** | PE/PP/PM (ICMP) / sP (Ping Scan) / PR (ARP Scan) / sT (TCP Connect Scan) |
<!-- cSpell:enable -->

**Cache Zeitraum** — Legt fest, wie lange die Ping-Ergebnisse zwischengespeichert werden. Ein kurzer Zeitraum liefert aktuellere Ergebnisse, erzeugt aber mehr Last auf dem Server.

**Ping Funktion** — Wähle zwischen NMAP und FPING als Backend für die Erreichbarkeitsprüfung. FPING ist in der Regel schneller bei vielen Hosts, NMAP bietet mehr Scan-Optionen.

!!! info "Voraussetzung"
    NMAP bzw. FPING müssen auf dem i-doit-Server installiert und für den Webserver-Benutzer ausführbar sein, damit die Ping-Funktion korrekt arbeitet.

---

## Unique Checks

Diese Prüfungen werden **ausschließlich während Import/Export-Vorgängen** ausgewertet. Sie verhindern, dass doppelte Werte in die CMDB importiert werden.

| Option | Wert |
| --- | --- |
| **Objekt-Titel** | Ja / Nein |
| **Layer-2-Netze** | Ja / Nein |
| **IP-Adressen** | Ja / Nein |
| **Hostname** | Ja / Nein |

Aktiviere diese Checks, wenn du regelmäßig Daten aus externen Quellen (z.B. JDisc, CSV, API) importierst und sicherstellen möchtest, dass keine Duplikate entstehen. Beachte, dass die Prüfung nur beim Import greift — bestehende Duplikate in der CMDB werden dadurch nicht bereinigt.

---

## Barcodes

| Option | Wert |
| --- | --- |
| **Barcodes in i-doit darstellen** | Ja / Nein |
| **Barcode-Form** | QR-Code / Code39 |

Wenn aktiviert, zeigt i-doit in der Objektansicht einen Barcode an, der die Objekt-ID oder SYS-ID kodiert. QR-Codes eignen sich für mobile Scanner-Apps, Code39 für klassische Barcode-Handscanner. Nützlich für Inventurprozesse und die physische Zuordnung von Assets.

---

## Oberflächendarstellung

Diese Optionen beeinflussen, wie Informationen in der Benutzeroberfläche dargestellt werden.

| Option | Wert |
| --- | --- |
| **Leerwerte darstellen als** | String (z.B. `-` oder `N/A`) |
| **String zur Separation von Standorten** | String (z.B. ` > `) |
| **Orientierung des Standortpfades** | Linksbündig (Standard) / Rechtsbündig |
| **String zur Separation von Anschlüssen** | String |
| **Drag 'n' Drop von Objekten** | Ja / Nein |
| **Objekttyp Sortierung** | Alphabetisch / Manuell |

**Leerwerte darstellen als** — Bestimmt, welcher Platzhalter angezeigt wird, wenn ein Attribut keinen Wert hat. Ein Bindestrich (`-`) ist üblich; ein leerer String kann die Übersichtlichkeit verschlechtern.

**Standort-Separatoren** — Der Trennstring wird zwischen den einzelnen Ebenen des Standortpfades eingefügt (z.B. `Gebäude A > Raum 101 > Rack 3`). Passe ihn an die Lesegewohnheiten deiner Benutzer an.

**Drag 'n' Drop** — Erlaubt das Verschieben von Objekten per Drag & Drop in Standort- und Objektlisten. Deaktiviere es, wenn Benutzer versehentlich Objekte verschieben.

**Objekttyp Sortierung** — "Alphabetisch" sortiert die Objekttyp-Gruppen und -Typen in der Navigation automatisch. "Manuell" erlaubt eine eigene Reihenfolge über die Objekttyp-Konfiguration.

---

## Maximallänge von Zeichenfolgen

| Option | Wert |
| --- | --- |
| **Dialog-Plus** | Zahl |
| **Objektbezeichnung im Standortpfad** | Zahl |
| **Kompletter Standortpfad** | Zahl |

Legt fest, nach wie vielen Zeichen Texte in der Oberfläche abgeschnitten werden. Erhöhe die Werte, wenn lange Objektnamen oder tiefe Standorthierarchien nicht vollständig angezeigt werden. Zu hohe Werte können das Layout der Oberfläche stören.

---

## Logbuch

| Option | Wert |
| --- | --- |
| **Detaillierte CMDB Änderungen protokollieren** | Ja / Nein |
| **"Änderungskommentar" deaktivieren** | Ja / Nein |
| **Logbucheinträge zu bereinigten Objekten vollständig löschen** | Ja / Nein |

**Detaillierte Änderungen protokollieren** — Wenn aktiviert, speichert das Logbuch bei jeder Änderung den alten und den neuen Wert eines Attributs. Dies ermöglicht eine lückenlose Nachvollziehbarkeit, vergrößert aber die Datenbank im Laufe der Zeit.

**Änderungskommentar deaktivieren** — Entfernt das Kommentarfeld, das beim Speichern von Änderungen erscheint. Aktiviere diese Option, wenn Benutzer die Kommentarpflicht als störend empfinden; deaktiviere sie, wenn du eine Begründungspflicht für Änderungen durchsetzen möchtest.

**Logbucheinträge zu bereinigten Objekten löschen** — Wenn ein Objekt gepurged wird, werden auch die zugehörigen Logbucheinträge entfernt. Das spart Speicherplatz, geht aber zu Lasten der Audit-Nachvollziehbarkeit.

!!! info "Compliance-Anforderungen"
    Wenn du regulatorischen Anforderungen (z.B. ISO 27001, BSI IT-Grundschutz) unterliegst, solltest du die detaillierte Protokollierung aktiviert lassen und Logbucheinträge nicht automatisch löschen.

---

## Templates

| Option | Wert |
| --- | --- |
| **Template Filter in den Objektlisten anzeigen** | Ja / Nein |
| **Markiere Template-Verknüpfungen/Referenzen farblich** | Ja / Nein |
| **In folgender Farbe** | Farbwähler / Hex-Wert |

Templates ermöglichen es, Objekte mit vordefinierten Attributwerten anzulegen. Wenn der Template-Filter aktiv ist, können Benutzer in den Objektlisten nach Vorlagen filtern. Die farbliche Markierung hebt Attribute hervor, die aus einem Template übernommen wurden, und hilft so bei der Unterscheidung zwischen manuell gepflegten und vorausgefüllten Werten.

---

## Sicherheit

| Option | Wert |
| --- | --- |
| **Rechtesystem** | Aktiv / Inaktiv |
| **Minimallänge Benutzerpasswort** | Zahl |
| **Passwörter im Klartext** | Ja / Nein |
| **Information about last login** | Aktiv / Inaktiv |
| **Informationen zum letzten Login** | Ja / Nein |
| **Dateneingabe bereinigen** | Ja / Nein |

!!! danger "Rechtesystem nicht unbedacht deaktivieren"
    Wenn du das Rechtesystem deaktivierst, haben **alle authentifizierten Benutzer vollen Zugriff** auf sämtliche Objekte, Kategorien und Verwaltungsfunktionen des Mandanten. Deaktiviere das Rechtesystem nur zu Testzwecken oder in Einzelbenutzer-Installationen.

**Minimallänge Benutzerpasswort** — Legt die Mindestanzahl an Zeichen für lokale Benutzerpasswörter fest. Ein Wert von mindestens 10 ist empfehlenswert. Diese Einstellung gilt nicht für LDAP-/SSO-Benutzer, deren Passwortrichtlinien extern verwaltet werden.

**Passwörter im Klartext** — Wenn aktiviert, werden Passwörter in der Kategorie "Passwörter" im Klartext angezeigt statt maskiert. Deaktiviere diese Option in Umgebungen, in denen Shoulder-Surfing ein Risiko darstellt.

!!! warning "Passwörter im Klartext"
    Diese Option betrifft die Anzeige in der Kategorie "Passwörter". Auch bei Deaktivierung werden Passwörter in der Datenbank gespeichert — diese Option regelt lediglich die Sichtbarkeit auf der Oberfläche.

**Dateneingabe bereinigen** — Filtert potenziell schädliche Eingaben (z.B. HTML-Tags, Script-Injections) automatisch heraus. Lass diese Option aktiviert, es sei denn, du hast einen konkreten Grund, Sonderzeichen ungefiltert zu speichern.

---

## Logging

| Option | Wert |
| --- | --- |
| **Rechtesystem Log** | Ja / Nein |
| **Exception Log** | Ja / Nein |
| **CMDB Import** | Ja / Nein |

Diese Optionen aktivieren zusätzliche Log-Dateien auf dem Server. Aktiviere sie zur Fehlersuche oder zur Überwachung sicherheitsrelevanter Vorgänge:

- **Rechtesystem Log** — Protokolliert, wann und warum Zugriffsanfragen abgelehnt wurden. Hilfreich beim Debugging von Rechte-Konfigurationen.
- **Exception Log** — Schreibt technische Fehlermeldungen in eine Log-Datei. Wichtig für die Analyse von Anwendungsfehlern.
- **CMDB Import** — Protokolliert Import-Vorgänge (CSV, JDisc, API). Aktiviere es, wenn du Import-Probleme nachvollziehen möchtest.

---

## Quickinfo (Link Mouseover)

| Option | Wert |
| --- | --- |
| **Cache-Laufzeit** | Minute / Stunde / Tag |
| **Zeilen pro Kategorie** | Zahl |

Die Quickinfo zeigt beim Überfahren eines Objekt-Links mit der Maus eine Vorschau mit den wichtigsten Attributen. Die Cache-Laufzeit bestimmt, wie lange diese Vorschau zwischengespeichert wird. Kürzere Intervalle liefern aktuellere Daten, längere Intervalle reduzieren die Serverlast.

---

## LDAP

<!-- cSpell:disable -->
| Option | Wert |
| --- | --- |
| **Standard LDAP Gruppe** | Komma-separierte Liste von Personengruppen-IDs |
| **LDAP Config** | JSON-String |
| **Anrede Herr** | Kommaseparierte Liste mit gemappten Werten für das LDAP-Anrede-Attribut |
| **Anrede Frau** | Kommaseparierte Liste mit gemappten Werten für das LDAP-Anrede-Attribut |
<!-- cSpell:enable -->

**Standard LDAP Gruppe** — Neue Benutzer, die sich erstmals via LDAP anmelden, werden automatisch den hier angegebenen Personengruppen zugeordnet. Trage die i-doit-Objekt-IDs der gewünschten Gruppen ein (z.B. `15,42`).

**LDAP Config** — Erweiterte LDAP-Konfiguration als JSON-String. Nutze diese Option nur, wenn die Standard-LDAP-Konfiguration unter Verwaltung nicht ausreicht.

**Anrede-Mapping** — LDAP-Verzeichnisse verwenden unterschiedliche Werte für das Geschlecht (z.B. `male`, `m`, `1`). Hier hinterlegst du die Zuordnung zu den i-doit-Anredefeldern.

---

## Report Manager

| Option | Wert |
| --- | --- |
| **Standardfilter** | ID / Bezeichnung / Kategorie / Mit Abfrage-Editor erzeugt / Variabler Report / Beschreibung |

Legt fest, welcher Filter beim Öffnen des Report Managers vorausgewählt ist. Wähle den Filter, der dem häufigsten Anwendungsfall deiner Benutzer entspricht.

---

## Import

<!-- cSpell:disable -->
| Option | Wert |
| --- | --- |
| **Bei Validierungsfehlern Prozess abbrechen?** | Ja / Nein |
| **Nur die betroffenen Attribute leeren bei Validierungsfehlern?** | Ja / Nein |
| **Der CSV Import kann den Objekttyp überschreiben?** | Ja / Nein |
| **Anzahl der Zeilen pro Import Batch** | Zahl |
<!-- cSpell:enable -->

**Bei Validierungsfehlern abbrechen** — Wenn aktiviert, wird der gesamte Import abgebrochen, sobald ein ungültiger Datensatz erkannt wird. Deaktiviere diese Option, wenn du lieber fehlerhafte Zeilen überspringst und den Rest importierst.

**Betroffene Attribute leeren** — Bei einem Validierungsfehler werden nur die fehlerhaften Attribute geleert, der Rest des Datensatzes wird normal importiert. Sinnvoll, wenn du teilweise korrekte Daten nicht verlieren möchtest.

**Objekttyp überschreiben** — Erlaubt dem CSV-Import, den Objekttyp eines bestehenden Objekts zu ändern. Sei hier vorsichtig — ein falscher Objekttyp kann Kategorie-Zuordnungen und Rechte verändern.

**Zeilen pro Import Batch** — Bestimmt, wie viele Zeilen pro Datenbank-Transaktion verarbeitet werden. Höhere Werte beschleunigen den Import, können aber bei sehr großen Datensätzen zu Speicherproblemen führen.

---

## Suche

| Option | Wert |
| --- | --- |
| **Standard Such-Modus** | Normal / Deep Search |
| **Unscharfe Suche verwenden** | Ja / Nein |
| **Automatische DeepSearch** | Aktiv / Aktiv, wenn keine Ergebnisse gefunden werden / Deaktiviert |
| **Hervorhebung des Suchstrings** | Ja / Nein |
| **Mindestlänge Suchwort** | Zahl |
| **Archivierte/Gelöschte Objekte mit in der Suche berücksichtigen** | Ja / Nein |
| **Standort-Pfade mit in der Suche berücksichtigen** | Ja / Nein |

**Standard Such-Modus** — "Normal" durchsucht den Suchindex und liefert schnelle Ergebnisse. "Deep Search" durchsucht zusätzlich direkt die Datenbank und findet auch Attribute, die nicht im Index enthalten sind — dauert aber deutlich länger.

**Unscharfe Suche** — Findet auch Treffer, die dem Suchbegriff ähneln (z.B. Tippfehler). Kann in großen Datenbanken die Ergebnisliste unübersichtlich machen.

**Automatische DeepSearch** — Die Option "Aktiv, wenn keine Ergebnisse gefunden werden" ist ein guter Kompromiss: Die schnelle Normalsuche wird zuerst ausgeführt und nur wenn sie keine Treffer liefert, wird automatisch eine Deep Search nachgeschoben.

**Mindestlänge Suchwort** — Suchbegriffe mit weniger Zeichen als dem eingestellten Wert werden ignoriert. Verhindert, dass Einzeichensuchen die Datenbank belasten und unbrauchbar viele Ergebnisse liefern.

---

## JDisc

| Option | Wert |
| --- | --- |
| **Schwellwert** | Zahl |
| **Schwellwert Einheit** | Tage / Wochen / Monate |
| **Maximale Länge der Importpause** | Zeit in Minuten |
| **Verhalten des pausierten Imports** | Abbrechen / Fortsetzen |

Der Schwellwert bestimmt, wie alt JDisc-Daten maximal sein dürfen, um importiert zu werden. Geräte, deren letzter Scan-Zeitpunkt älter als der Schwellwert ist, werden übersprungen. Damit verhinderst du, dass veraltete Informationen in die CMDB geschrieben werden.

**Importpause** — Bei großen JDisc-Importen kann der Prozess zeitweise pausiert werden (z.B. wegen Serverlast). Die maximale Länge der Importpause legt fest, nach wie vielen Minuten ein pausierter Import automatisch abgebrochen oder fortgesetzt wird.

---

## Sprache

| Option | Wert |
| --- | --- |
| **Standard Sprache für neue Benutzer** | Deutsch / Englisch |

Legt die Sprache fest, die neuen Benutzerkonten standardmäßig zugewiesen wird. Jeder Benutzer kann die Sprache später in seinen persönlichen Einstellungen ändern.

---

## Benachrichtigungen

| Option | Wert |
| --- | --- |
| **Abgelaufene Lizenzen überspringen** | Ja / Nein |
| **Nur bei exakter Übereinstimmung des Schwellwerts benachrichtigen** | Ja / Nein |

**Abgelaufene Lizenzen überspringen** — Wenn aktiviert, werden für bereits abgelaufene Lizenzen keine Benachrichtigungen mehr ausgelöst. Sinnvoll, wenn du nur an bevorstehenden Abläufen interessiert bist und nicht wiederholt über längst abgelaufene Lizenzen informiert werden möchtest.

**Exakte Schwellwert-Übereinstimmung** — Sendet die Benachrichtigung nur genau am Tag des Schwellwerts (z.B. exakt 30 Tage vor Ablauf) statt an jedem Tag innerhalb des Schwellwert-Zeitraums. Reduziert die Anzahl der Benachrichtigungen, birgt aber das Risiko, dass die Nachricht bei einem Ausfall des Benachrichtigungsdienstes an genau diesem Tag verloren geht.

---

## Installed Add-on related settings

Wenn Add-ons installiert sind, erscheinen hier zusätzliche Einstellungen. Die Verfügbarkeit hängt von den installierten Add-ons ab.

<!-- cSpell:disable -->
| Option | Wert |
| --- | --- |
| [ISMS](../../../i-doit-add-ons/isms/index.md) Reportviews nach Standortrechten filtern | Ja / Nein |
| [ISMS](../../../i-doit-add-ons/isms/index.md) Risikokennzeichnung anzeigen | Ja / Nein |
| [ISMS](../../../i-doit-add-ons/isms/index.md) Risikotitel anzeigen | Ja / Nein |
| [Dokumente](../../../i-doit-add-ons/documents/index.md) Revisionen kommentieren | Ja / Nein |
| [Dokumente](../../../i-doit-add-ons/documents/index.md) Generierte Dokumente cachen | Ja / Nein |
| [Wartung](../../../i-doit-add-ons/maintenance.md) E-Mail Adressen entnehmen aus | Kontaktgruppen auflösen und Mitglieder einzeln benachrichtigen / E-Mail-Adressen der ausgewählten Kontakte ohne Auflösung verwenden |
| [Events](../../../i-doit-add-ons/events.md) Base64 Decode Event Parameters | Ja / Nein |
| [Check_MK](../../../i-doit-add-ons/checkmk.md) Tags dürfen beim Export nur aus Buchstaben, Zahlen, Binde- und Unterstrichen bestehen | Ja / Nein |
| [Workflows](../../../i-doit-add-ons/workflow.md) Checklisten im my-doit Bereich ausblenden | Ja / Nein |
| [IT-Grundschutz](../../../i-doit-add-ons/viva/index.md) URL-Prefix zum IT-Grundschutz Kompendium | URL |
| [IT-Grundschutz](../../../i-doit-add-ons/viva/index.md) Upload Verzeichnis des IT-Grundschutz Kompendiums | Verzeichnispfad |
| [CI-Umzug](../../../i-doit-add-ons/relocate-ci.md) Nach einem physikalischen Umzug soll der logische Standort entfernt werden | Ja / Nein |
| [CI-Umzug](../../../i-doit-add-ons/relocate-ci.md) Nach einem logischen Umzug soll der physische Standort aktualisiert werden | Ja / Nein |
| [CI-Umzug](../../../i-doit-add-ons/relocate-ci.md) Schreibe Logbucheinträge in alle positionierten Objekte eines umgezogenen Objekts | Ja / Nein |
| [Forms Add-on](../../../i-doit-add-ons/forms/index.md) Forms Server | URL |
| [Forms Add-on](../../../i-doit-add-ons/forms/index.md) Benutzername | String |
| [Forms Add-on](../../../i-doit-add-ons/forms/index.md) API Schlüssel | String |
<!-- cSpell:enable -->

!!! info "Add-on-Dokumentation"
    Details zu den einzelnen Add-on-Einstellungen findest du in der jeweiligen Add-on-Dokumentation, die in der Tabelle verlinkt ist.

---

## Weiterführende Informationen

- **[Experteneinstellungen](experteneinstellungen.md)** — Key-Value-basierte Konfiguration für fortgeschrittene Einstellungen, die auf dieser Seite nicht verfügbar sind.
- **[Admin Center](../../admin-center.md)** — Systemweite Einstellungen, die alle Mandanten betreffen (z.B. Login, Proxy, SMTP, System-Sicherheit).
