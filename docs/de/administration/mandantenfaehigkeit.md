---
title: Mandantenfähigkeit
description: "Mandantenfähigkeit (Multi-Tenancy) bedeutet, dass du mit einer einzigen i-doit-Installation mehrere vollständig voneinander getrennte IT-Dokumentationen..."
icon:
status:
lang: de
---
# Mandantenfähigkeit

## Was ist Mandantenfähigkeit?

Mandantenfähigkeit (Multi-Tenancy) bedeutet, dass du mit einer einzigen i-doit-Installation mehrere vollständig voneinander getrennte [IT-Dokumentationen](../glossar.md) betreiben kannst. Jeder Mandant arbeitet in seinem eigenen, abgeschotteten Datenbestand — als wäre es eine separate i-doit-Instanz, nur ohne den Aufwand, mehrere Installationen zu pflegen.

Typische Gründe, warum du Mandanten einsetzen würdest:

-   **Organisatorische Trennung:** Tochtergesellschaften, Standorte oder Abteilungen sollen jeweils eine eigene, unabhängige IT-Dokumentation führen, ohne dass Daten vermischt werden.
-   **Kundentrennung bei Dienstleistern:** Systemhäuser oder Managed-Service-Provider dokumentieren die IT ihrer Kunden in dedizierten Mandanten — sauber getrennt und bei Bedarf einzeln übergebbar.
-   **Staging-Umgebungen:** Du betreibst neben dem produktiven Mandanten einen Test- oder Entwicklungsmandanten, um Änderungen an Kategorien, Templates oder Workflows gefahrlos auszuprobieren, bevor du sie produktiv übernimmst.

!!! info "Lizenzierung"
    Für die Fähigkeit, mehrere Mandanten mit einer Installation zu betreiben, ist eine spezielle Lizenz notwendig. Nähere Informationen sind [auf Anfrage](https://www.i-doit.com/kontakt/) erhältlich.

## Technischer Aufbau

i-doit setzt Mandantenfähigkeit über eine strikte Datenbanktrennung um:

-   **Eine Installation, mehrere Datenbanken:** Jeder Mandant erhält eine eigene MySQL-/MariaDB-Datenbank (z.B. `idoit_data`, `idoit_data_kunde_b`, `idoit_data_test`). Darin liegen sämtliche Objekte, Kategorien, Beziehungen, Reports und mandantenspezifische Einstellungen.
-   **Gemeinsame System-Datenbank:** Daneben existiert eine mandantenübergreifende System-Datenbank (`idoit_system`), die unter anderem die Mandantenliste selbst, globale Einstellungen und Add-on-Registrierungen enthält.
-   **Gemeinsame Codebasis:** Alle Mandanten teilen sich dieselbe PHP-Codebasis und denselben Webserver. Updates und Patches installierst du daher nur einmal.

Durch diese Architektur ist ein versehentlicher Datenaustausch zwischen Mandanten technisch ausgeschlossen. Es gibt keine mandantenübergreifenden Abfragen, Reports oder Objektverknüpfungen.

## Mandantenfähigkeit vs. Rechteverwaltung

Nicht jede Form der Datentrennung erfordert einen eigenen Mandanten. Bevor du einen neuen Mandanten anlegst, prüfe, ob die [Rechteverwaltung](../benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/index.md) innerhalb eines Mandanten ausreicht:

| Kriterium | Rechteverwaltung im Mandant | Eigener Mandant |
|---|---|---|
| Sichtbarkeit einzelner Objekte einschränken | Ja — über Objektrechte und Personengruppen | Nicht nötig |
| Kategorien pro Benutzergruppe beschränken | Ja — über Kategorierechte | Nicht nötig |
| Komplett getrennte Objektbestände ohne jede Überschneidung | Schwierig und fehleranfällig | Empfohlen |
| Eigene Objekttyp-Konfiguration je Bereich | Nein | Ja |
| Getrennte CMDB-Strukturen (z.B. unterschiedliche Lebenszyklen, Workflows) | Nein | Ja |
| Daten müssen an einen externen Dritten übergeben werden können | Nur mit manuellem Export | Ja — Datenbank einzeln sicherbar |

**Faustregel:** Wenn sich zwei Bereiche lediglich nicht gegenseitig sehen sollen, reicht die Rechteverwaltung. Wenn sie komplett unabhängige Konfigurationen, Objekttypen oder Kategoriedefinitionen benötigen, nutze separate Mandanten.

## Mandanten anlegen und verwalten

Du verwaltest Mandanten im [Admin-Center](admin-center.md) unter dem Reiter **Tenants**. Dort sind alle angelegten Mandanten aufgelistet.

[![Konfiguration](../assets/images/de/administration/mandantenfaehigkeit/1-mand.png)](../assets/images/de/administration/mandantenfaehigkeit/1-mand.png)

Oberhalb der Auflistung stehen folgende Aktionen zur Verfügung:

-   **Add new tenant**: Einen neuen Mandanten erstellen. i-doit legt dabei automatisch eine neue Datenbank an.
-   **Edit**: Einen bestehenden Mandanten konfigurieren (Name, Datenbank, Cache-Verzeichnis).
-   **Activate / Deactivate**: Mandanten ein- oder ausschalten, ohne sie zu löschen. Deaktivierte Mandanten erscheinen nicht mehr beim Login.
-   **Remove**: Einen Mandanten **unwiderruflich** löschen — inklusive seiner Datenbank. Nur über ein [Backup](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) wiederherstellbar.
-   **Save license settings**: Die Verteilung der Lizenzobjekte auf die Mandanten speichern.

Zum Konfigurieren wählst du einen Mandanten über die Checkbox aus. Zum (De-)Aktivieren oder Löschen kannst du auch mehrere Mandanten gleichzeitig auswählen.

[![Konfiguration](../assets/images/de/administration/mandantenfaehigkeit/2-mand.png)](../assets/images/de/administration/mandantenfaehigkeit/2-mand.png)

Pro Mandant gibst du folgende Eigenschaften an:

-   **Tenant GUI title**: Name des Mandanten — wird unter anderem beim Login und in der Hauptnavigation angezeigt.
-   **Description**: Freitext-Beschreibung (rein informell, hat keine funktionale Auswirkung).
-   **Sort value**: Sortierreihenfolge als Ganzzahl. Je niedriger der Wert, desto weiter oben erscheint der Mandant.
-   **Cache dir**: Dediziertes Cache-Verzeichnis unterhalb von `temp/` im Installationsverzeichnis. i-doit legt es automatisch an.
-   **MySQL settings**: Datenbankname, Host, Benutzer und Passwort. Es empfiehlt sich, den Datenbanknamen mit dem Prefix `idoit_` zu benennen. Der erste Mandant heißt nach der [Installation](../installation/manuelle-installation/setup.md) standardmäßig `idoit_data`.

## Objektlimitierung pro Mandant

Du kannst festlegen, wie viele lizenzpflichtige Objekte ein Mandant maximal enthalten darf. Das konfigurierst du im Admin-Center unter **Tenants** über den Parameter **Assigned object licenses** (Ganzzahl). So verteilst du dein Lizenzvolumen gezielt auf die einzelnen Mandanten.

[![Objektlimitierung pro Mandant](../assets/images/de/administration/mandantenfaehigkeit/3-mand.png)](../assets/images/de/administration/mandantenfaehigkeit/3-mand.png)

## Was ist gemeinsam, was ist getrennt?

| Aspekt | Gemeinsam (installationsweit) | Getrennt (pro Mandant) |
|---|---|---|
| **PHP-Code und Webserver** | Ja | — |
| **System-Datenbank** | Ja | — |
| **Add-on-Dateien** | Ja (eine Installation) | Aktivierung pro Mandant steuerbar |
| **Admin-Center-Zugang** | Ja (ein Passwort) | — |
| **Mandanten-Datenbank** | — | Ja — eigene DB pro Mandant |
| **Objekte, Kategorien, Beziehungen** | — | Ja |
| **Objekttyp-Konfiguration** | — | Ja |
| **Reports und Dashboards** | — | Ja |
| **Benutzer und Rechte** | — | Ja — eigene Personen-Objekte |
| **LDAP-/SSO-Konfiguration** | — | Pro Mandant konfigurierbar |
| **Mandantenspezifische Einstellungen** | — | Ja — siehe [Einstellungen](verwaltung/mandanten-name-verwaltung/einstellungen-mandanten-name.md) |

## Add-ons pro Mandant

Add-on-Dateien installierst du einmalig über das Admin-Center. Bei der [Installation und beim Update](../i-doit-add-ons/i-diary.md) wählst du aus, ob die Aktion für einen einzelnen Mandanten oder alle Mandanten gelten soll.

Im Admin-Center unter **Modules** siehst du alle installierten Add-ons pro Mandant und kannst sie gezielt (de-)aktivieren. Das Löschen von Add-on-Dateien erfolgt immer installationsweit für alle Mandanten.

[![Add-ons pro Mandant](../assets/images/de/administration/mandantenfaehigkeit/4-mand.png)](../assets/images/de/administration/mandantenfaehigkeit/4-mand.png)

!!! attention "Update von i-doit"
    Während des [Updates von i-doit](../wartung-und-betrieb/update-einspielen.md) wird abgefragt, welche Mandanten-Datenbanken aktualisiert werden sollen. Standardmäßig sind alle ausgewählt. Es wird dringend empfohlen, immer alle Mandanten-Datenbanken beim Update zu berücksichtigen. Abweichungen davon gelten nur in gut begründeten Ausnahmefällen — beispielsweise auf Anweisung des [Supports](../administration/troubleshooting/index.md).

## Benutzerverwaltung

Die [Benutzerverwaltung](../grundlagen/erstanmeldung.md) konfigurierst du pro Mandant. Personen-Objekte mit Login-Daten können je nach Mandant unterschiedlich sein — ein Benutzer kann also in Mandant A Administrator und in Mandant B gar nicht vorhanden sein.

Sind mehrere Mandanten aktiviert, fragt i-doit beim Login, in welchem Mandanten du dich anmelden möchtest. Das passiert allerdings nur, wenn deine Zugangsdaten in mehreren Mandanten identisch sind. Andernfalls wählt i-doit automatisch den Mandanten, für den die Zugangsdaten gültig sind.

[![Benutzerverwaltung](../assets/images/de/administration/mandantenfaehigkeit/5-mand.png)](../assets/images/de/administration/mandantenfaehigkeit/5-mand.png)

Wenn du ein [LDAP-Verzeichnis oder Active Directory](../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md) anbindest, fragt i-doit beim Login die konfigurierten Server nacheinander ab und ermittelt dann, für welche Mandanten die Zugangsdaten gültig sind.

Bei aktivem [Single Sign On (SSO)](../benutzerauthentifizierung-und-verwaltung/sso-vergleich/index.md) kannst du im [Admin-Center](admin-center.md#system-settings) einen Standard-Mandanten festlegen. i-doit verbindet den Benutzer dann automatisch mit diesem Mandanten, ohne dass eine Auswahl nötig ist.

## Mandanten-Wechsel

Du kannst zwischen Mandanten wechseln, ohne dich vorher abzumelden.

In der oberen [Hauptnavigationsleiste](../grundlagen/struktur-it-dokumentation.md) siehst du, mit welchem Benutzer du in welchem Mandanten angemeldet bist. Fahre mit der Maus über den Mandanten-Namen — es erscheint ein Drop-Down-Menü mit den weiteren verfügbaren Mandanten. Ein Klick wechselt dich direkt dorthin.

Dies funktioniert nur, wenn deine Zugangsdaten in den jeweiligen Mandanten identisch sind.

[![Mandanten-Wechsel](../assets/images/de/administration/mandantenfaehigkeit/6-mand.png)](../assets/images/de/administration/mandantenfaehigkeit/6-mand.png)

## Weiterführende Themen

-   [Admin-Center](admin-center.md) — mandantenübergreifende Verwaltung, Lizenzen, Add-ons
-   [Einstellungen](verwaltung/mandanten-name-verwaltung/einstellungen-mandanten-name.md) — mandantenspezifische Konfiguration
-   [Daten sichern und wiederherstellen](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) — Backup-Strategien bei mehreren Mandanten
