---
title: Sprachprofile
description: Mithilfe der benutzerdefinierten Übersetzung kannst du mit wenigen Mausklicks die Namen der gewünschten Felder ändern oder neue Sprachen hinzufügen.
icon:
status:
lang: de
---
# Sprachprofile

Unter **Verwaltung → Datenansicht → Sprachprofile** kannst du benutzerdefinierte Übersetzungen für Feldnamen, Kategoriebeschriftungen und andere Oberflächentexte in i-doit anlegen. So lässt sich die Terminologie an die Begriffe deiner Organisation anpassen -- beispielsweise kannst du "Standort" in "Filiale" umbenennen oder eine komplett neue Sprache hinzufügen.

Um ein Sprachprofil zu erstellen, wählst du die Ausgangssprache und die Zielsprache aus. Anschließend kannst du gezielt einzelne Begriffe überschreiben. Die Änderungen werden für alle Benutzer wirksam, die diese Sprache in ihren [Benutzereinstellungen](../benutzereinstellungen/benutzersprache.md) ausgewählt haben.

[![Sprachprofile](../../../assets/images/de/administration/verwaltung/datenansicht/sprachprofile.png)](../../../assets/images/de/administration/verwaltung/datenansicht/sprachprofile.png)

[![Sprachprofile](../../../assets/images/de/administration/verwaltung/datenansicht/sprachprofile/1-s.png)](../../../assets/images/de/administration/verwaltung/datenansicht/sprachprofile/1-s.png)

## Export und Import

Sprachprofile lassen sich als JSON-Datei exportieren und in eine andere i-doit-Installation oder einen anderen Mandanten importieren. So überträgst du angepasste Begriffe zum Beispiel von einem Testsystem in das Produktivsystem.

### Sprachprofil exportieren

1. Öffne **Verwaltung → Datenansicht → Sprachprofile**.
2. Markiere in der Liste genau ein Sprachprofil.
3. Klicke auf **Export**.

i-doit lädt die Datei `custom-translation-<Kürzel>.json` herunter. Sie enthält die Bezeichnung der Sprache, das Kürzel, die Einstellung, ob die Sprache verfügbar ist, die Flagge sowie alle angepassten Begriffe des Profils.

### Sprachprofil importieren

1. Öffne **Verwaltung → Datenansicht → Sprachprofile**.
2. Klicke auf **Importieren**. Das Fenster **Übersetzung importieren** öffnet sich.
3. Lege bei **Übersetzungen zusammenführen** fest, wie mit bereits vorhandenen angepassten Begriffen verfahren wird. Voreingestellt ist **Nein**.
    - **Ja**: Die Begriffe aus der Datei werden zu den vorhandenen hinzugefügt. Begriffe, die in beiden enthalten sind, erhalten den Wert aus der Datei. Vorhandene Begriffe, die in der Datei fehlen, bleiben erhalten.
    - **Nein**: Die vorhandenen angepassten Begriffe werden durch die Begriffe aus der Datei ersetzt. Danach enthält das Profil nur noch die Begriffe aus der Datei.
4. Wähle bei **Datei auswählen** die exportierte JSON-Datei aus und klicke auf **Datei hochladen**. Der Import startet nach dem Hochladen und zeigt die einzelnen Schritte an.
5. Klicke auf **Schließen**. Die Seite wird neu geladen und zeigt das importierte Sprachprofil.

Gibt es bereits ein Sprachprofil mit demselben Kürzel, aktualisiert der Import dieses Profil (Bezeichnung, Flagge und Verfügbarkeit). Andernfalls legt er ein neues Sprachprofil an. Es werden nur JSON-Dateien bis 16 MB angenommen, die ein gültiges Kürzel enthalten.

Für den Export benötigst du das Recht **Bearbeiten** für **Sprachprofile**, für den Import das Recht **Erstellen** oder **Bearbeiten**.

!!! note "Export vor i-doit 39.2"
    Vor i-doit 39.2 konnte es vorkommen, dass die Exportdatei keine angepassten Begriffe enthielt. Exportiere das Sprachprofil in diesem Fall ab i-doit 39.2 erneut.

## Siehe auch

- [Benutzersprache](../benutzereinstellungen/benutzersprache.md) -- Sprache pro Benutzer festlegen
- [Datenformate](../benutzereinstellungen/datenformate.md) -- Datums- und Zahlenformate konfigurieren
