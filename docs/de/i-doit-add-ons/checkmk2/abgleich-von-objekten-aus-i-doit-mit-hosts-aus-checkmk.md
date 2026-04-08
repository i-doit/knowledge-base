---
title: "Abgleich von Objekten aus i-doit mit Hosts aus Checkmk 2"
description: "Bevor du push oder pull ausführst, moechtest du vielleicht einen genaueren Blick darauf werfen, wie deine Infrastruktur in den beiden Tools i-doit und..."
icon:
status:
lang: de
---
# Abgleich von Objekten aus i-doit mit Hosts aus Checkmk 2

Bevor du [push](./wato-konfiguration-auf-basis-von-cmdb-daten-generieren.md) oder [pull](./bestandsdaten-in-die-cmdb-importieren.md) ausführst, möchtest du vielleicht einen genaueren Blick darauf werfen, wie deine Infrastruktur in den beiden Tools i-doit und Checkmk 2 aussieht.

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

Die Befehle [fetch-objects und fetch-hosts](./informationen-aus-i-doit-und-checkmk-lesen.md) geben dir detaillierte Informationen über deine dokumentierten Objekte in i-doit oder deine überwachten Hosts in Checkmk 2. Aber beide gleichen sie nicht miteinander ab. Dies wird durch den Befehl match erledigt:

```shell
idoitcmk match
```

Nach dem Vergleich jedes Objekts mit jedem Host werden einige detaillierte Berichte ausgegeben:

*   Objekte in i-doit, die von Hosts in Checkmk 2 aktualisiert werden können
*   Hosts in Checkmk 2, die nicht als Objekte in i-doit verfügbar sind
*   Hosts in Checkmk 2, die durch Objekte in i-doit aktualisiert werden können
*   Objekte in i-doit, die nicht als Hosts in Checkmk 2 verfügbar sind

Keine deiner Daten werden verändert.

Wenn du die Ausführlichkeit erhöhst, gibt dir dieser Befehl Hinweise, was als Nächstes zu tun ist:

```shell
idoitcmk match -v
```
