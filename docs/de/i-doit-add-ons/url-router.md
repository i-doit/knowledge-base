---
title: URL-Router Add-on
description: Ein kleines "Router" Add-on, das zusätzliche URL-Routen für den bequemen Zugriff auf Objekte in i-doit implementiert
lang: de
---

Ein kleines "Router" Add-on, das zusätzliche URL-Routen für den bequemen Zugriff auf Objekte in i-doit implementiert.

## Routen

Wenn wir die Routen beschreiben, verwenden wir nur den absoluten Pfad: Anstatt `http://your-idoit.int/open-object/server-abc` schreiben wir
`/open-object/server-abc`. Bitte beachte, dass die Parameter [URL-codiert](https://de.wikipedia.org/wiki/URL-Encoding) übergeben werden sollten.

### Objekt über exakten Namen öffnen `/open-object/{object title}` (case-sensitive)

Das Öffnen der URL `/open-object/client001` löst die interne Logik aus, um nach einem Objekt zu suchen, das **genau** "client001" heißt, und leitet zu diesem Objekt weiter. Wenn "client001" entweder nicht gefunden werden kann oder mehrere Ergebnisse liefert, wirst du stattdessen zur Suche weitergeleitet.

### Objekt über ähnlichen Namen öffnen `/open-object-like/{object title}` (case-insensitive)

Ähnlich wie `/open-object/{object-title}` wird diese Route versuchen, ein Objekt anhand seines Titels zu finden. Wenn wir sie mit "client001" aufrufen und kein exakter Treffer gefunden werden kann, wird diese Route weiterhin nach Objekten suchen, deren Namen mit "client001" beginnen
(zum Beispiel "client00123").

Wenn auch dies fehlschlägt, wird die Suche fortfahren, um Objekte zu finden, die "client001" irgendwo in ihrem Namen haben
(zum Beispiel "my client00123 laptop").

Wenn entweder kein exakter oder mehrere Treffer gefunden werden, wirst du zur Suche weitergeleitet.

### Objekte über primäre IP-Adresse öffnen `/open-object-by-ip/{ip address}`

Das Öffnen der URL `/open-object-by-ip/127.0.0.1` oder `/open-object-by-ip/2001:0db8:85a3:0000:0000:8a2e:0370:7334` löst die interne Logik aus, um nach einem Objekt mit der entsprechenden primären IP-Adresse zu suchen. Bei IPv6-Adressen spielt es keine Rolle, ob du die kurze oder lange Form verwenden (kurz: `::1`, oder lang: `0000:0000:0000:0000:0000:0000:0000:0001`). Ähnlich wie `/open-object/{object title}` findet diese Route nur **exakte** Übereinstimmungen.

Wenn entweder keine exakte oder mehrere Übereinstimmungen gefunden werden, wirst du zur Suche weitergeleitet.

### Objekte über exakte Inventarnummer öffnen `/open-object-by-inventory/{inventory no}` (case-sensitive)

Das Öffnen der URL `/open-object-by-inventory/123` löst die interne Logik aus, um nach einem Objekt mit der entsprechenden Inventarnummer zu suchen. Ähnlich wie `/open-object/{object title}` findet diese Route nur **exakte** Übereinstimmungen (einschließlich der Groß-/Kleinschreibung).

Wenn entweder keine exakte oder mehrere Übereinstimmungen gefunden werden, wirst du zur Suche weitergeleitet.

### Objekte über ähnliche Inventarnummer öffnen `/open-object-like-inventory/{inventory}` (case-insensitive)

Ähnlich wie `/open-object-by-inventory/{inventory no}` wird diese Route versuchen, ein Objekt anhand seiner Inventarnummer zu finden. Wenn wir sie mit "123" aufrufen und kein exakter Treffer gefunden werden kann, wird diese Route weiterhin nach Inventarnummern suchen, die mit "123" beginnen
(zum Beispiel "123456").

Wenn auch dies fehlschlägt, wird die Suche fortfahren, um Inventarnummern zu finden, die "123" irgendwo in ihrem Namen haben
(zum Beispiel "000123456").

Wenn entweder keine exakte oder mehrere Übereinstimmungen gefunden werden, wirst du zur Suche weitergeleitet.

## Releases

| Version | Date       | Changelog       |
| ------- | ---------- | --------------- |
| 1.0.0   | 2026-03-11 | Initial release |
