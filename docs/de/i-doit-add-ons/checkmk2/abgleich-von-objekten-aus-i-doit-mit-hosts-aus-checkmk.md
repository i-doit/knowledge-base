# Abgleich von Objekten aus i-doit mit Hosts aus Checkmk 2

Bevor Sie [push](./wato-konfiguration-auf-basis-von-cmdb-daten-generieren.md) oder [pull](./bestandsdaten-in-die-cmdb-importieren.md) ausführen, möchten Sie einen genaueren Blick darauf werfen, wie Ihre Infrastruktur in den beiden Tools i-doit und Checkmk 2 aussieht. Die Befehle [fetch-objects und fetch-hosts](./informationen-aus-i-doit-und-checkmk-lesen.md) geben Ihnen detaillierte Informationen über Ihre dokumentierten Objekte in i-doit oder Ihre überwachten Hosts in Checkmk 2. Aber beide gleichen sie nicht miteinander ab. Dies wird durch den Befehl match erledigt:

```shell
idoitcmk match
```

Nach dem Vergleich jedes Objekts mit jedem Host werden einige detaillierte Berichte ausgegeben:

*   Objekte in i-doit, die von Hosts in Checkmk 2 aktualisiert werden können
*   Hosts in Checkmk 2, die nicht als Objekte in i-doit verfügbar sind
*   Hosts in Checkmk 2, die durch Objekte in i-doit aktualisiert werden können
*   Objekte in i-doit, die nicht als Hosts in Checkmk 2 verfügbar sind

Keine Ihrer Daten werden verändert.

Wenn Sie die Ausführlichkeit erhöhen, gibt Ihnen dieser Befehl Hinweise, was als nächstes zu tun ist:

```shell
idoitcmk match -v
```
