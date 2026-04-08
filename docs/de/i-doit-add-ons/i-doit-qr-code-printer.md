---
title: "i-doit QR-Code Printer"
description: "In i-doit generierst du für alle Objekte automatisch Barcodes oder QR-Codes."
icon:
status:
lang: de
---
# i-doit QR-Code Printer

!!! info "Ein Praxisbeispiel findest du auf unserem [Blog](https://www.i-doit.com/blog/inventarisierung-in-i-doit-mit-qr-codes/)"

In i-doit generierst du für alle Objekte automatisch Barcodes oder QR-Codes. Diese nutzt du z. B., um maschinenlesbare [Etiketten zu drucken](./i-doit-qr-code-printer.md). Nach der Konfiguration erscheint der Code in der oberen rechten Ecke, sobald du ein Objekt auswahlst.

[![Übersichtsseite](../assets/images/de/i-doit-add-ons/qr-code-printer/1-qr.png)](../assets/images/de/i-doit-add-ons/qr-code-printer/1-qr.png)

## Barcode

[![Barcode](../assets/images/de/i-doit-add-ons/qr-code-printer/2-qr.png)](../assets/images/de/i-doit-add-ons/qr-code-printer/2-qr.png)

Ein Barcode ist eine optoelektronisch lesbare Schrift aus verschieden breiten Strichen und Luecken. Der Nachteil: Ein Barcode kann nur relativ wenige Informationen speichern.

## QR-Code

[![QR-Code](../assets/images/de/i-doit-add-ons/qr-code-printer/3-qr.png)](../assets/images/de/i-doit-add-ons/qr-code-printer/3-qr.png)

Der QR-Code (Quick Response) ist ein zweidimensionaler Code mit automatischer Fehlerkorrektur. Sein Vorteil gegenüber dem Barcode: Er speichert deutlich mehr Informationen.

## Konfiguration QR-Code oder Barcode

Die Konfiguration innerhalb von i-doit findest du unter **Verwaltung → Vordefinierte Inhalte → QR-Code**

[![Konfiguration QR-Code oder Barcode](../assets/images/de/i-doit-add-ons/qr-code-printer/4-qr.png)](../assets/images/de/i-doit-add-ons/qr-code-printer/4-qr.png)

Hier aktivierst oder deaktivierst du die Code-Anzeige und wählst zwischen Barcode und QR-Code.

## Konfiguration des QR-Code Inhaltes

Welche Informationen im QR-Code gespeichert werden, konfigurierst du unter **Verwaltung → Vordefinierte Inhalte → QR-Code**:

[![Konfiguration des QR-Code Inhaltes](../assets/images/de/i-doit-add-ons/qr-code-printer/5-qr.png)](../assets/images/de/i-doit-add-ons/qr-code-printer/5-qr.png)

### Globale Definition

Bei der globalen Definition befuellst du die QR-Code-Informationen mit folgenden Platzhaltern:

[![Globale Definition](../assets/images/de/i-doit-add-ons/qr-code-printer/6-qr.png)](../assets/images/de/i-doit-add-ons/qr-code-printer/6-qr.png)

### Primäre Zugriffs URL

Bei dieser Option fliesst ausschließlich die im Objekt hinterlegte URL in den QR-Code ein.

### QR-Code Verlinkung

Lege fest, was beim Klick auf den Code passiert: Entweder öffnet sich das [QR-Code Printer](./i-doit-qr-code-printer.md) Tool oder ein Popup mit der Standard-Druckfunktion deines Betriebssystems.

### Text Template

Hier kombinierst du Freitext mit Platzhaltern aus i-doit und formatierst das Etikett nach deinen Wünschen.

### Logo für Druckansicht

Lade eine Bilddatei hoch -- sie wird automatisch in jedes Etikett integriert.

### i-doit QR-Code Printer

Mit dem QR-Code Printer druckst du Etiketten bequem auf deinem Etikettendrucker. Die Formate konfigurierst du passend zu deinen Vorgaben. Scannt jemand den QR-Code mit einem Smartphone oder Tablet, wird er direkt auf die Übersichtsseite des [Objekts](../glossar.md) weitergeleitet.

### Start und Konfiguration

Lade den QR-Code Printer aus dem [Kundenportal](../administration/kundenportal.md) herunter. Die Windows-Anwendung startet direkt -- eine Installation ist nicht nötig.

So richtest du die Verbindung ein:

1. Öffne **File → Options → i-doit API Settings**.
2. Gib die URL deiner i-doit-Installation, den API-Key und die Zugangsdaten eines Benutzers mit [API-Berechtigung](./api/index.md) ein.

!!! info "Der i-doit API-Key"
    Den API-Key deiner Installation findest du in i-doit unter **Verwaltung → Add-ons → JSON-RPC API**

### Konfiguration der Druck-Parameter

Unter **File → Options** konfigurierst du alle Druckparameter:

- **Randabstände und Labelgröße** -- Passe die Masse an dein Etikettenformat an.
- **QR-Code Positioning** -- Definiere Position (in Pixeln), Größe, Schriftart und Schriftgröße.
- **Logo** -- Wähle unter **Path** ein Logo im ueblichen Bildformat und positioniere es über die Parameter.

!!! tip "Tipp"
    Definiere den Dymo Label Writer als Standarddrucker und stelle das Papierformat auf horizontal um.

## Drucken von Etiketten

So druckst du ein Etikett:

1. Trage die **Objekt-ID** des gewünschten Objekts ein.
2. Die Barcode-Informationen werden automatisch aus i-doit geladen -- du kannst sie bei Bedarf bearbeiten.
3. Drucke, speichere oder exportiere den QR-Code über die Icons oder **File** im Kontextmenue. Der Export erfolgt im `.bmp`-Format.

[![Drucken von Etiketten](../assets/images/de/i-doit-add-ons/qr-code-printer/7-qr.png)](../assets/images/de/i-doit-add-ons/qr-code-printer/7-qr.png)

## Releases

| Version | Datum | Changelog |
| --- | --- | --- |
| 1.5 | 24.01.2023 | [Bug] Fix the configuration of the Text margin |
