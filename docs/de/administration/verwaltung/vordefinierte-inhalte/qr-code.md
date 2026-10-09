---
title: "QR-Code"
description: "Lege in diesem Dialog die Konfiguration für den QR-Code fest."
icon:
status:
lang: de
---
# QR-Code

Lege in diesem Dialog die Konfiguration für den QR-Code fest. Du kannst wählen, ob der QR-Code die primäre Zugriffs-URL von Objekten als Inhalt enthalten soll oder ob eine globale Definition verwendet werden soll. Darüber hinaus kannst du entscheiden, was passiert, wenn du auf einen angezeigten QR-Code klickst. → [WEITERLESEN](../../../i-doit-add-ons/i-doit-qr-code-printer.md)

[![QR-Code](../../../assets/images/de/administration/verwaltung/vordefinierte-inhalte/qr-code/1-qc.png)](../../../assets/images/de/administration/verwaltung/vordefinierte-inhalte/qr-code/1-qc.png)

## Variablen verändern

Seit i-doit 39 kannst du die Variablen der globalen Definition mit Modifikatoren verändern, zum Beispiel um sie in einer URL zu verwenden. Hänge den Modifikator mit einem senkrechten Strich an den Variablennamen an, zum Beispiel `%hostname|lower%`. Mehrere Modifikatoren lassen sich kombinieren und werden von links nach rechts angewendet, zum Beispiel `%hostname|lower|encode%`.

| Modifikator | Wirkung |
| --- | --- |
| `encode` | Wendet URL-Encoding an (Leerzeichen werden zu `+`) |
| `raw-encode` | Wendet Raw URL-Encoding nach RFC 3986 an (Leerzeichen werden zu `%20`) |
| `lower` | Wandelt den Wert in Kleinbuchstaben um |
| `upper` | Wandelt den Wert in Großbuchstaben um |
| `slug` | Wandelt den Wert in eine URL-freundliche Form (Slug) um |

Dieselben Modifikatoren stehen für die URL in der Kategorie **Zugriff** zur Verfügung.
