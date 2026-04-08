---
title: Troubleshooting
description: "Etwas funktioniert nicht?"
icon:
status:
lang: de
---
# Troubleshooting

Etwas funktioniert nicht? Kein Problem — hier findest du systematische Hilfe. Die allermeisten Fehler in i-doit lassen sich mit den richtigen Informationen schnell eingrenzen und lösen. Dieser Artikel hilft dir dabei, die Ursache zu finden, die passende Lösung in der Knowledge Base zu erreichen und — falls nötig — einen aussagekräftigen Bug Report zu schreiben.


[![index-logfiles.png](../../assets/images/de/administration/troubleshooting/index-logfiles.png)](../../assets/images/de/administration/troubleshooting/index-logfiles.png)

---

## Schnellcheck: Wo findest du Hinweise?

Bevor du dich in die Details stürzt, wirf einen Blick auf diese vier Informationsquellen. In den meisten Fällen liefert mindestens eine davon den entscheidenden Hinweis.

### Log-Dateien von i-doit

Alle i-doit-eigenen Logs liegen im Installationsverzeichnis unter `log/`. Die wichtigsten Dateien:

| Datei | Inhalt |
|-------|--------|
| `log/exception.log` | PHP-Exceptions — die häufigste Anlaufstelle bei Fehlermeldungen in der Oberfläche. Aktivieren unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen → Logging → Exception Log**. |
| `log/system.log` | Allgemeine Systemmeldungen von i-doit |
| `log/ldap_debug.log` | LDAP-Verbindungs- und Sync-Protokoll (wenn `ldap.debug` aktiviert ist) |
| `log/import_*.log` | Import-Protokolle für CSV, JDisc und andere [Importe](../../daten-konsolidieren/index.md) |

!!! tip "Log-Dateien in Echtzeit beobachten"
    Öffne ein Terminal und verwende `tail -f /pfad/zu/idoit/log/exception.log`. Führe dann die fehlerhafte Aktion in i-doit aus — der Fehler erscheint sofort im Terminal.

Einige Log-Kanäle müssen erst aktiviert werden. Die Einstellungen findest du unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → Logging**. Je höher das Log-Level (Debug ist das höchste), desto mehr Details erhältst du.

### PHP- und Webserver-Fehlerlog

Nicht jeder Fehler wird von i-doit selbst geloggt. PHP-Fehler und fatale Abstürze landen im Fehlerlog des Webservers:

- **Debian/Ubuntu (Apache):** `/var/log/apache2/error.log`
- **RHEL/Rocky (Apache):** `/var/log/httpd/error_log`
- **Nginx:** `/var/log/nginx/error.log`

### Browser-Entwicklerkonsole

Wenn eine Aktion in der Web-Oberfläche nicht funktioniert (Button reagiert nicht, Dialog öffnet sich nicht, Liste bleibt leer), liefert die Browser-Konsole oft den entscheidenden Hinweis. Öffne sie mit `F12` oder `Strg` + `Umschalt` + `I` (macOS: `Cmd` + `Option` + `I`). Fehler sind rot markiert. Eine ausführliche Anleitung findest du weiter unten im Abschnitt [Entwicklerkonsole im Browser](#offnen-und-nutzen-der-entwicklerkonsole-im-browser).

### Betriebssystem-Logs

Manchmal liegt das Problem nicht bei i-doit, sondern beim Webserver, der Datenbank oder dem Betriebssystem selbst. Unter GNU/Linux hilft:

```bash
# Syslog / Journald
journalctl -u apache2 --since "1 hour ago"
journalctl -u mariadb --since "1 hour ago"

# Systemlast prüfen
htop    # oder: top, atop, free -h
```

Achte darauf, ob die Prozesse von Apache und MySQL/MariaDB ungewöhnlich viel CPU-Zeit oder Arbeitsspeicher belegen.

---

## Probleme nach Symptom

### i-doit startet nicht oder zeigt eine weiße Seite

Eine weiße Seite (White Screen of Death) oder ein HTTP-500-Fehler deutet fast immer auf ein PHP-Problem hin. Prüfe zuerst das PHP-Fehlerlog des Webservers (siehe oben). Häufige Ursachen:

- **PHP-Version nicht kompatibel** — prüfe die [Systemvoraussetzungen](../../installation/systemvoraussetzungen.md) für deine i-doit-Version.
- **PHP-Speicherlimit zu niedrig** — `memory_limit` in der `php.ini` sollte mindestens `256M` betragen.
- **Dateirechte falsch gesetzt** — der Webserver-Benutzer (z.B. `www-data`) muss Lese- und Schreibrechte auf das gesamte Installationsverzeichnis haben.
- **Datenbank nicht erreichbar** — siehe Abschnitt [Datenbank-Fehler](#datenbank-fehler) weiter unten.

### Login funktioniert nicht

Wenn du dich nicht anmelden kannst, gibt es mehrere mögliche Ursachen:

- **"Lost link to database"** — die Datenbankverbindung ist unterbrochen. Detaillierte Hilfe findest du im Artikel ["Lost link to database"](lost-link-to-database.md).
- **Session-Timeout falsch konfiguriert** — ein zu niedriger Wert kann dazu führen, dass du sofort nach dem Login wieder abgemeldet wirst. Lies dazu [Kein Login nach Änderung des Session Timeouts](kein-login-nach-aenderung-des-session-timeouts.md).
- **LDAP-Probleme** — wenn LDAP-Benutzer sich nicht anmelden können, prüfe die LDAP-Konfiguration und das Debug-Log. Bei TLS-Verbindungen hilft der Artikel [LDAP via TLS](ldap-via-tls.md).
- **Admin-Center Login** — das Admin-Center verwendet separate Zugangsdaten. Bei vergessenem Passwort kann es nur über das [CLI-Tool](../../automatisierung-und-integration/cli/index.md) zurückgesetzt werden. Siehe [Admin-Center](../../administration/admin-center.md).

### Performance-Probleme

i-doit reagiert langsam, Seiten laden ewig, Speichern dauert Minuten? Dann prüfe:

1. **Systemlast** — läuft die CPU oder der Arbeitsspeicher am Limit? (`htop`, `free -h`)
2. **Datenbankgröße** — sehr große Mandanten-Datenbanken profitieren von regelmäßiger [Systemreparatur und Bereinigung](../verwaltung/mandanten-name-verwaltung/systemreparatur-und-bereinigung.md). Diese Funktion räumt verwaiste Einträge auf und optimiert Tabellen.
3. **MariaDB-Konfiguration** — die Einstellungen `innodb_buffer_pool_size` und `innodb_log_file_size` haben großen Einfluss auf die Performance. Beachte unsere [Systemeinstellungen](../../installation/manuelle-installation/systemeinstellungen.md).
4. **PHP OPcache** — stelle sicher, dass der OPcache aktiviert ist und ausreichend Speicher hat.
5. **Netzwerk** — bei Remote-Datenbanken können Latenzen die Ursache sein.

### Datenbank-Fehler

Datenbankprobleme gehören zu den häufigsten Fehlerquellen. Hier die wichtigsten Szenarien und ihre Lösungsartikel:

| Symptom | Artikel |
|---------|---------|
| Fehlermeldung "MySQL-Server has gone away" | ["MySQL-Server has gone away"](mysql-server-has-gone-away.md) — in der Regel ist `max_allowed_packet` zu niedrig konfiguriert. |
| MySQL/MariaDB startet nicht nach Konfigurationsänderung | [MySQL/MariaDB startet nicht](mysql-mariadb-startet-nicht.md) — tritt häufig nach Änderung von `innodb_log_file_size` auf. |
| "Lost link to database" beim Login | ["Lost link to database"](lost-link-to-database.md) — die Datenbankverbindung ist unterbrochen oder die Zugangsdaten sind falsch. |
| "Row size too large" beim Update | [Row size too large](row-size-too-large.md) — eine Tabelle hat die maximale Zeilengröße von InnoDB überschritten. |
| "Can't create table (errno: 140)" | [Can't create table](cant-create-table.md) — tritt beim Wiederherstellen eines SQL-Dumps auf, wenn das Zeilenformat nicht passt. |
| Datenbank-Korruption (Crashes, kaputte Tabellen) | [MariaDB Database Corruption](mariadb-database-corruption.md) — Reparatur beschädigter InnoDB-Tabellen. |

!!! info "Datenbank-Gesundheit prüfen"
    Die Funktion [Systemreparatur und Bereinigung](../verwaltung/mandanten-name-verwaltung/systemreparatur-und-bereinigung.md) prüft die Datenbankintegrität und kann viele Inkonsistenzen automatisch beheben.

### Update-Probleme

Wenn ein Update fehlschlägt oder nach dem Update Fehler auftreten, findest du in [Bekannte Update-Probleme](bekannte-update-probleme.md) eine gepflegte Liste bekannter Probleme mit Workarounds. Prüfe außerdem:

- Wurden die [Systemvoraussetzungen](../../installation/systemvoraussetzungen.md) für die neue Version eingehalten?
- Wurde vor dem Update ein vollständiges Backup erstellt? Falls ja, kannst du im Notfall [wiederherstellen](../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md).
- Sind [Hotfixes](../hotfixes/index.md) für die neue Version verfügbar?

### Standort-Probleme

Wenn du in der Kategorie **Standort** nicht speichern kannst, liegt meist eine Inkonsistenz in der Standorthierarchie vor. Der Artikel [Standort kann nicht gespeichert werden](standort-kann-nicht-gespeichert-werden.md) zeigt dir, wie du die Ursache findest und behebst.

### LDAP-Probleme

LDAP-Verbindungen über TLS sind erfahrungsgemäß fehleranfällig. Der Artikel [LDAP via TLS](ldap-via-tls.md) listet die häufigsten Ursachen und Lösungsansätze. Aktiviere außerdem das LDAP-Debug-Log (`ldap.debug` in den [Experteneinstellungen](../verwaltung/mandanten-name-verwaltung/experteneinstellungen.md)), um die Kommunikation mit dem LDAP-Server im Detail nachzuvollziehen.

---

## Nützliche Werkzeuge für die Fehlersuche

Neben den Log-Dateien stehen dir in i-doit selbst einige Werkzeuge zur Verfügung:

- **[Logbuch](../../grundlagen/kategorien/logbook.md)** — Jede Änderung an Objekten wird im Logbuch protokolliert. Wenn Daten verschwunden oder verändert sind, zeigt dir das Logbuch, wer wann was geändert hat.
- **[Systemreparatur und Bereinigung](../verwaltung/mandanten-name-verwaltung/systemreparatur-und-bereinigung.md)** — Prüft die Datenbank auf Inkonsistenzen und repariert sie. Besonders hilfreich nach Imports, Migrationen oder wenn sich i-doit "seltsam" verhält.
- **i-doit environment info file** — Im [Admin-Center](../../administration/admin-center.md) unter **Home → Actions** kannst du eine XML-Datei mit allen Systemeinstellungen herunterladen. Diese Datei ist Gold wert für den Support.
- **[FAQ](../../faq.md)** — Häufig gestellte Fragen mit Antworten.
- **[Hotfixes](../hotfixes/index.md)** — Bereits veröffentlichte Fixes für bekannte Fehler.

---

## Bevor du den Support kontaktierst

Wenn du das Problem nicht selbst lösen kannst, hilf uns, dir schnell zu helfen. Sammle die folgenden Informationen, **bevor** du uns schreibst — so vermeiden wir zeitraubende Rückfragen:

### Pflichtangaben

1. **Versionen** — Welche Version von i-doit, betroffenen [Add-ons](../../i-doit-add-ons/index.md), PHP, Apache/Nginx und MariaDB/MySQL setzt du ein? Am einfachsten: lade das **i-doit environment info file** aus dem [Admin-Center](../../administration/admin-center.md) herunter und hänge es an.
2. **Fehlerbeschreibung** — Was passiert genau? Was hast du erwartet? Was ist stattdessen passiert?
3. **Reproduktionsschritte** — Welche Schritte führen zum Fehler? Lässt sich der Fehler zuverlässig nachstellen?
4. **Fehlermeldung im Klartext** — Kopiere die Fehlermeldung als Text (nicht nur als Screenshot), damit wir sie durchsuchen können.

### Sehr hilfreich

5. **Log-Dateien** — Relevante Auszüge aus `exception.log`, dem PHP-Fehlerlog oder dem Syslog.
6. **Screenshots** — Von der Fehlermeldung in der Oberfläche und, wenn zutreffend, aus der Browser-Entwicklerkonsole.
7. **Zeitpunkt** — Wann ist der Fehler erstmals aufgetreten? Wurde vorher etwas geändert (Update, Import, Konfigurationsänderung)?

### Kontaktwege

Hast du einen Support-Vertrag, verfügst du bereits über die nötigen Kontaktdaten. Fehler lassen sich auch ohne Support-Vertrag über das [Kundenportal](../../administration/kundenportal.md) oder das [Help Portal](https://help.i-doit.com) melden.

Du musst den Bug Report nicht hübsch formatieren oder in Hochglanz-PDFs einbetten. Ein freundlicher, sachlicher Ton und die oben genannten Informationen reichen völlig aus.

---

## Wir melden uns

Bei Kunden mit Support-Vertrag melden wir uns innerhalb kurzer Zeit zurück — nicht selten mit einem Lösungsvorschlag. Wir versuchen, den Fehler anhand deiner Informationen auf unseren Testsystemen nachzustellen.

Wird der Fehler bestätigt, beheben wir ihn schnellstmöglich. Vor der Auslieferung durchläuft jeder Fix unsere Testing-Prozesse. Qualität braucht Zeit. Danach veröffentlichen wir den Fix im Rahmen unserer Release-Zyklen.

Wenn du einen Lösungsweg (Fix, Workaround o. ä.) ausprobiert hast, freuen wir uns über Feedback:

- **Hat es geklappt?** Wunderbar.
- **Problem besteht weiterhin?** Dann probieren wir alternative Wege.
- **Folgefehler aufgetreten?** Kein Problem — wir gehen die obigen Schritte erneut durch, bis alles läuft.

---

## Öffnen und Nutzen der Entwicklerkonsole im Browser

Für eine detaillierte Fehleranalyse im Webbrowser oder bei Support-Anfragen durch das i-doit-Team ist es oft notwendig, die Entwicklerkonsole des Browsers zu öffnen. Diese zeigt wichtige Informationen wie JavaScript-Fehler, fehlgeschlagene Ladeversuche von Ressourcen oder Details zu Netzwerk-Anfragen an.

### Schritt 1: Entwicklerkonsole öffnen

Wähle die Anleitung für deinen Browser.

#### Google Chrome

-   **Per Tastenkombination (empfohlen)**: `F12` oder `Strg` + `Umschalt` + `I` (macOS: `Cmd` + `Option` + `I`).
-   **Über das Menü**: Drei-Punkte-Menü (`⋮`) → **Weitere Tools** → **Entwicklertools**.

#### Mozilla Firefox

-   **Per Tastenkombination (empfohlen)**: `F12` oder `Strg` + `Umschalt` + `I` (macOS: `Cmd` + `Option` + `I`).
-   **Über das Menü**: "Burger"-Menü (`≡`) → **Weitere Werkzeuge** → **Web-Entwickler-Werkzeuge**.

#### Microsoft Edge

-   **Per Tastenkombination (empfohlen)**: `F12` oder `Strg` + `Umschalt` + `I` (macOS: `Cmd` + `Option` + `I`).
-   **Über das Menü**: Drei-Punkte-Menü (`...`) → **Weitere Tools** → **Entwicklertools**.

#### Apple Safari

1.  **Menü "Entwickler" aktivieren (einmalig)**: Menüleiste → **Safari** → **Einstellungen...** → **Erweitert** → Haken bei **Menü "Entwickler" in der Menüleiste anzeigen** setzen.
2.  **Konsole öffnen**: `Cmd` + `Option` + `I` oder über das Menü **Entwickler** → **Webinformationen einblenden**.

### Schritt 2: Relevante Informationen für den Support sammeln

Nachdem du die Entwicklertools geöffnet hast, siehst du verschiedene Reiter. Je nach Art des Problems sind unterschiedliche Informationen von Bedeutung.

#### Der Reiter "Konsole" (Console)

**Wann wird das gebraucht?**
Immer dann, wenn eine Aktion in der i-doit Oberfläche nicht funktioniert. Zum Beispiel:
-   Ein Klick auf einen Button (z.B. "Speichern") hat keine Wirkung.
-   Ein Dialogfenster öffnet sich nicht oder schließt sich unerwartet.
-   Listen oder Inhalte werden nicht korrekt geladen.

**So lieferst du die richtigen Informationen:**

1.  Öffne die Entwicklertools und wechsle zum Reiter **Konsole**.
2.  Lösche alle bisherigen Einträge. Klicke dazu auf das "Durchgestrichener Kreis"-Symbol oder nutze die Tastenkombination `Strg` + `L`. Dies stellt sicher, dass nur die relevanten Fehler aufgezeichnet werden.
3.  **Führe jetzt in i-doit die Aktion aus, die den Fehler verursacht.**
4.  Achte auf neue Einträge in der Konsole. **Fehler sind fast immer rot markiert** und enthalten Schlüsselwörter wie `Error`, `Exception` oder `failed`.
5.  **Erstelle einen Screenshot.** Achte darauf, dass die **gesamte Fehlermeldung** sichtbar ist. Manchmal musst du kleine Dreiecke (`▶`) anklicken, um die vollständige Fehlermeldung auszuklappen.
6.  **Noch besser als ein Screenshot:** Klicke mit der rechten Maustaste auf die Fehlermeldung und wähle "Als Text kopieren" oder eine ähnliche Option. Füge diesen Text in deine Support-Anfrage ein.

#### Der Reiter "Netzwerkanalyse" (Network)

**Wann wird das gebraucht?**
Wenn Aktionen sehr lange dauern, Ladebalken nicht verschwinden oder Daten scheinbar verloren gehen, nachdem du auf "Speichern" geklickt hast. Dieser Reiter zeigt die Kommunikation zwischen deinem Browser und dem i-doit-Server.

**So lieferst du die richtigen Informationen:**

1.  Öffne die Entwicklertools und wechsle zum Reiter **Netzwerkanalyse** (oder **Netzwerk**).
2.  Setze einen Haken bei der Option **Protokolle nicht löschen** (oder `Persist logs`). Dies verhindert, dass die Aufzeichnung bei einem Neuladen der Seite verloren geht.
3.  Lösche die bisherige Aufzeichnung durch Klick auf das "Durchgestrichener Kreis"-Symbol.
4.  **Führe jetzt in i-doit die langsame oder fehlerhafte Aktion aus.**
5.  Beobachte die Liste der Anfragen. Suche nach Zeilen, die rot markiert sind oder einen **Status-Code** wie `404` (nicht gefunden), `403` (verboten) oder `500` (Serverfehler) aufweisen.
    - *Tipp:* Du kannst die Liste oft nach `XHR`-Anfragen filtern, da diese für das dynamische Laden von Daten in i-doit zuständig sind.
6.  **Klicke auf die fehlerhafte Anfrage** (die rote Zeile). Rechts oder unterhalb der Liste öffnet sich ein neues Fenster mit Details zu dieser Anfrage.
7.  Wechsle in diesem Detailfenster auf den Reiter **Antwort** (oder **Response**). Hier steht oft die genaue Fehlermeldung des i-doit-Servers.
8.  **Mache einen Screenshot von diesem Fenster**, der sowohl die Liste der Anfragen (mit der rot markierten Zeile) als auch die Details mit der **Antwort** des Servers zeigt.

#### Der Reiter "Elemente" (Elements)

**Wann wird das gebraucht?**
Dieser Reiter wird seltener benötigt. Er ist nützlich, wenn es um Probleme mit der Darstellung von Inhalten geht (z.B. ein Feld ist verschoben oder nicht sichtbar). In der Regel wird der i-doit-Support dich gezielt bitten, hier nachzusehen. Du kannst damit die HTML- und CSS-Struktur der Seite live untersuchen.

!!! tip "Zusammenfassung für den i-doit Support"
    Eine gute Fehlerbeschreibung ist der Schlüssel zu einer schnellen Lösung. Indem du die oben genannten Schritte befolgst, lieferst du unserem Support-Team genau die technischen Details, die zur Analyse benötigt werden.

    - Bei **Funktionsfehlern**: Sende uns die Ausgabe aus der **Konsole**.
    - Bei **Ladeproblemen oder "stillen" Fehlern**: Sende uns einen Screenshot der **Netzwerkanalyse**, inklusive der **Antwort (Response)** des fehlerhaften Eintrags.
