---
title: Benachrichtigungen
description: Proaktiv per E-Mail über wichtige Ereignisse und Zustände in der IT-Dokumentation informiert werden.
icon: notifications
status: published
lang: de
---

## Voraussetzung

Damit Benachrichtigungen überhaupt verschickt werden können, muss [SMTP Konfiguriert](../administration/verwaltung/import-und-schnittstellen/smtp-konfiguration-email.md) werden.

## Benachrichtigungen

Das Benachrichtigungsmodul ist ein leistungsstarkes Werkzeug, um Ihre IT-Dokumentation proaktiv zu überwachen. Anstatt reaktiv auf Probleme zu stoßen, können Sie sich automatisch per E-Mail informieren lassen, wenn bestimmte Ereignisse eintreten. So verpassen Sie keine ablaufenden Verträge, Zertifikate oder Wartungsfristen mehr und können die Datenqualität nachhaltig sichern.

In diesem Artikel beschreiben wir den gesamten Prozess von der Auswahl der passenden **[Benachrichtigungsart](#benachrichtigungsarten)** über die detaillierte **[Einrichtung](#einrichtung-einer-benachrichtigung)** und Anpassung der **[E-Mail-Vorlagen](#e-mail-vorlagen-anpassen)** bis hin zur automatisierten Ausführung über die **[i-doit console utility)](#automatisierung-per-cronjob-cli)**.

!!! info "Ein Praxisbeispiel für Benachrichtigungen und Eskalationsstufen finden Sie auch auf unserem [Blog](https://www.i-doit.com/blog/benachrichtigungen-und-eskalationsstufen-mit-i-doit/)"

---

## Benachrichtigungsarten

Die Konfiguration findet unter **Extras → Benachrichtigungen** statt. i-doit bietet eine Vielzahl von vordefinierten Benachrichtigungstypen, die auf unterschiedliche Anwendungsfälle zugeschnitten sind.

| Benachrichtigung                         | Beschreibung                                                                                                                                                                                                                                                                                               |
| :--------------------------------------- | :--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Ablauf einer Kündigungsfrist**         | Prüft Vertragsobjekte und benachrichtigt, wenn die konfigurierte Zeitspanne (z. B. 90 Tage) vor dem letztmöglichen Kündigungstermin erreicht ist.                                                                                                                                                          |
| **Ablauf einer Wartungs-/Garantiefrist** | Überwacht Verträge und informiert vor dem Ende einer hinterlegten Wartungs- oder Garantiefrist.                                                                                                                                                                                                            |
| **Ablauf einer Zertifikatsfrist**        | Prüft alle Objekte mit zugewiesener Kategorie "Zertifikat" und warnt vor dem eingetragenen Ablaufdatum.                                                                                                                                                                                                    |
| **CMDB-Status endet**                    | Überwacht Objekte mit geplanter Statusänderung (Kategorie "Status-Planung") und informiert vor dem Ende eines geplanten CMDB-Status (z. B. "in Wartung").                                                                                                                                                  |
| **CMDB-Status startet**                  | Informiert vor dem Beginn einer geplanten Statusänderung (z.B. "in Betriebnahme").                                                                                                                                                                                                                         |
| **Freie Lizenzen**                       | Überwacht Lizenzobjekte und benachrichtigt, wenn die Anzahl der verfügbaren Lizenzen einen definierten Schwellwert unterschreitet.                                                                                                                                                                         |
| **Gelagerte Objekte**                    | Prüft beliebige Objekttypen und meldet, wenn die Anzahl der Objekte mit dem Status "Gelagert" einen Schwellwert überschreitet. Nützlich für das Lagermanagement.                                                                                                                                           |
| **i-doit Update**                        | Prüft, ob eine neue Version von i-doit verfügbar ist. Hierfür benötigt der i-doit Server eine funktionierende Internetverbindung.                                                                                                                                                                          |
| **Lizenzablauf**                         | Prüft Lizenzobjekte und warnt vor deren Ablaufdatum. Um Benachrichtigungen für bereits abgelaufene Lizenzen zu vermeiden, sollte die Option [Abgelaufene Lizenzen überspringen](../administration/verwaltung/mandanten-name-verwaltung/einstellungen-mandanten-name.md#benachrichtigungen) aktiviert sein. |
| **Reportbasierte Benachrichtigung**      | Führt einen vordefinierten Report aus und versendet eine Benachrichtigung, wenn die Anzahl der gefundenen Objekte einen Schwellwert überschreitet. **Extrem flexibel** für individuelle Anwendungsfälle.                                                                                                   |
| **Unveränderte Objekte**                 | Prüft, welche Objekte in einem definierten Zeitraum nicht geändert wurden. Ideal, um veraltete Daten aufzuspüren und die Datenqualität zu sichern.                                                                                                                                                         |
| **Veränderte Objekte**                   | Prüft, welche Objekte in einem definierten Zeitraum geändert wurden. Ermöglicht z. B. tägliche Änderungsreports per E-Mail.                                                                                                                                                                                |

---

## Einrichtung einer Benachrichtigung

Die Konfiguration einer neuen Benachrichtigung erfolgt durch einen Klick auf den **`Neu`**-Button und folgt stets dem gleichen Schema, das in drei Hauptbereiche unterteilt ist: Allgemeine Einstellungen, Domänen (was wird geprüft?) und Empfänger (wer wird benachrichtigt?).

### Allgemeine Einstellungen

Hier definieren Sie das grundsätzliche Verhalten der Benachrichtigung.

| Einstellung                                     | Beschreibung                                                                                                                                                                                                                                                                      |
| :---------------------------------------------- | :-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Bezeichnung**                                 | Ein aussagekräftiger Name, z. B. "Warnung 30 Tage vor Vertragsablauf".                                                                                                                                                                                                            |
| **Aktiv**                                       | Aktiviert oder deaktiviert die Benachrichtigung.                                                                                                                                                                                                                                  |
| **Schwellwert**                                 | Der Auslöser für die Benachrichtigung. Je nach Typ ist dies ein **zeitlicher Abstand** (z. B. 30 Tage) oder eine **Anzahl** (z. B. 5 Lizenzen). Eine genaue Erklärung wird direkt im Formular angezeigt.                                                                          |
| **Max. Anzahl zu sendender Benachrichtigungen** | Limitiert die Anzahl der E-Mails für denselben Fall. Bei `0` wird so lange benachrichtigt, bis der auslösende Zustand behoben ist. Setzt man den Wert auf `5`, stoppt der Versand nach der fünften E-Mail. Der Zähler wird zurückgesetzt, sobald der Zustand nicht mehr zutrifft. |
| **Anzahl gesendeter Benachrichtigungen**        | Ein reines Informationsfeld, das anzeigt, wie oft bereits benachrichtigt wurde.                                                                                                                                                                                                   |
| **Datum des letzten Durchlaufs**                | Zeigt an, wann die Prüfung zuletzt ausgeführt wurde.                                                                                                                                                                                                                              |
| **Startdatum des Intervalls**                   | Definiert den Startzeitpunkt für eine sich wiederholende Benachrichtigung.                                                                                                                                                                                                        |
| **Intervallkonfiguration**                      | Ermöglicht die Einrichtung von wiederkehrenden Prüfungen (z. B. täglich, wöchentlich, monatlich) mit einem optionalen Enddatum.                                                                                                                                                   |
| **Englisches/Deutsches Template**               | Weist die zu verwendende [E-Mail-Vorlage](#e-mail-vorlagen-anpassen) für die jeweilige Sprache zu.                                                                                                                                                                                |
| **Beschreibung**                                | Ein Freitextfeld für interne Notizen zur Benachrichtigung.                                                                                                                                                                                                                        |

### Domänen (Was wird geprüft?)

In diesem Bereich legen Sie fest, welche Objekte von der Benachrichtigung überwacht werden sollen.

| Domäne                              | Beschreibung                                                                                                                                                                                 |
| :---------------------------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Objekte**                         | Direkte Auswahl eines oder mehrerer spezifischer Objekte.                                                                                                                                    |
| **Objekttypen**                     | Überwacht alle Objekte eines oder mehrerer ausgewählter Objekttypen.                                                                                                                         |
| **Reports**                         | Die flexibelste Methode: Verwenden Sie einen Report aus dem Report-Manager, um den Objekt-Scope präzise zu definieren. Beispiel: Nur Lizenzen überwachen, deren Stückpreis über 150 € liegt. |
| **Nur Objekte mit Status "Normal"** | Eine zusätzliche Filteroption, die nur Objekte im Zustand "Normal" berücksichtigt und andere (z. B. "archiviert", "gelagert") ignoriert.                                                     |

!!! info "Je nach Benachrichtigungstyp sind die Domänen eingeschränkt. Eine "Lizenzablauf"-Benachrichtigung kann beispielsweise nur auf Lizenz-Objekte angewendet werden."

### Empfänger (Wer wird benachrichtigt?)

Hier konfigurieren Sie, wer die Benachrichtigungs-E-Mail erhalten soll.

| Empfänger                                  | Beschreibung                                                                                                                                                                                                                                 |
| :----------------------------------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Zugewiesene Rollen**                     | Benachrichtigt Kontakte, die an einem betroffenen Objekt in einer bestimmten Rolle zugewiesen sind (z. B. der "Vertragspartner" bei einem Vertrag). Diese Kontakte erhalten nur Informationen zu dem Objekt, dem sie direkt zugewiesen sind. |
| **Zugewiesene Kontakte**                   | Feste Auswahl von Personen, Personengruppen oder Organisationen, die immer über *alle* von dieser Benachrichtigung gefundenen Objekte informiert werden. Eine E-Mail-Adresse am jeweiligen Kontaktobjekt ist zwingend erforderlich.          |
| **Strategie zur Berechnung der Empfänger** | Definiert, wie Personengruppen aufgelöst werden, wenn sie als Empfänger ausgewählt sind.                                                                                                                                                     |

Die Strategie zur Auflösung von Personengruppen bietet folgende Optionen:

| Strategie                                                                 | Beschreibung                                                                                                      |
| :------------------------------------------------------------------------ | :---------------------------------------------------------------------------------------------------------------- |
| **Gruppen falls E-Mail vorhanden, sonst zugewiesene Personen (Standard)** | Hat die Gruppe eine eigene E-Mail-Adresse, geht die Mail dorthin. Ansonsten an alle Mitglieder der Gruppe.        |
| **Gruppen und Personen**                                                  | Die Benachrichtigung geht sowohl an die E-Mail-Adresse der Gruppe als auch an alle einzelnen Mitglieder.          |
| **Nur Gruppen**                                                           | Es wird ausschließlich an die E-Mail-Adresse der Gruppe gesendet. Mitglieder werden ignoriert.                    |
| **Nur Personen**                                                          | Es wird ausschließlich an die E-Mail-Adressen der Gruppenmitglieder gesendet. Die Gruppen-Mailbox wird ignoriert. |

---

## E-Mail-Vorlagen anpassen

Im linken Navigationsbaum unter **E-Mail-Vorlagen** können Sie den Inhalt der Benachrichtigungen global anpassen. Die Auswahl der Sprache (Deutsch/Englisch) richtet sich nach der im Kontaktobjekt eingestellten Sprache des Empfängers.

| Einstellung               | Beschreibung                                                                                                                                                               |
| :------------------------ | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Sprache**               | Zeigt die aktuell bearbeitete Sprache an.                                                                                                                                  |
| **Betreff**               | Der Betreff der E-Mail. Kann mit Platzhaltern dynamisch gestaltet werden.                                                                                                  |
| **Benachrichtigungstext** | Der Inhalt der E-Mail, ebenfalls mit Platzhaltern anpassbar.                                                                                                               |
| **Report**                | Optional kann hier ein Report ausgewählt werden. Dessen Ergebnis (die gefundenen Objekte mit den ausgewählten Attributen) wird dann als Tabelle in die E-Mail eingebettet. |

### Verfügbare Platzhalter

Um E-Mails dynamisch zu gestalten, können Sie Platzhalter im Betreff und Text verwenden. Alle Platzhalter können in i-doit eingesehen werden.

---

## Automatisierung per Cronjob (CLI)

Eine eingerichtete Benachrichtigung wird nicht von selbst aktiv. Sie muss regelmäßig durch einen automatisierten Aufruf über das i-doit console utility ausgelöst werden.

!!! danger "Ohne Cronjob kein Versand!"
    Ohne die regelmäßige Ausführung des `notifications-send` Befehls per Cronjob oder geplantem Task findet **kein** Versand der Benachrichtigungen statt.

Die Einrichtung erfolgt z. B. über einen [Cronjob unter Linux](../wartung-und-betrieb/cronjobs-einrichten.md) oder einen geplanten [Task unter Windows](../automatisierung-und-integration/automatisierung-und-cronjobs.md). Ein bewährter Rhythmus ist die tägliche Ausführung am frühen Morgen.

**Beispielaufruf:**
Dieser Befehl führt alle aktiven Benachrichtigungen für den Mandanten mit der ID 1 aus.

```shell
sudo -u www-data php /var/www/html/console.php notifications-send --user admin --password admin --tenantId 1
```

[Mehr Informationen zum i-doit console utility](../automatisierung-und-integration/cli/index.md)

---

## Logging

Jeder Aufruf des `notifications-send` Befehls erzeugt eine Logdatei im Format `notifications_YYYY-MM-DD.log` im `log`-Verzeichnis Ihrer i-doit-Installation. Dort können Sie Details zu durchgeführten Prüfungen und versendeten E-Mails einsehen.
