# checkmk 2: Abgleich von Objekten aus i-doit mit Hosts aus checkmk

Bevor Sie [push](./checkmk2-wato-konfiguration-auf-basis-von-cmdb-daten-generieren.md) oder [pull](./checkmk2-bestandsdaten-in-die-cmdb-importieren.md) ausführen, möchten Sie einen genaueren Blick darauf werfen, wie Ihre Infrastruktur in den beiden Tools i-doit und checkmk aussieht. Die Befehle [fetch-objects und fetch-hosts](./checkmk2-informationen-aus-i-doit-und-checkmk-lesen.md) geben Ihnen detaillierte Informationen über Ihre dokumentierten Objekte in i-doit oder Ihre überwachten Hosts in checkmk. Aber beide gleichen sie nicht miteinander ab. Dies wird durch den Befehl match erledigt:

    idoitcmk match

Nach dem Vergleich jedes Objekts mit jedem Host werden einige detaillierte Berichte ausgegeben:

*   Objekte in i-doit, die von Hosts in checkmk aktualisiert werden können
*   Hosts in checkmk, die nicht als Objekte in i-doit verfügbar sind
*   Hosts in checkmk, die durch Objekte in i-doit aktualisiert werden können
*   Objekte in i-doit, die nicht als Hosts in checkmk verfügbar sind

Keine Ihrer Daten werden verändert.

Wenn Sie die Ausführlichkeit erhöhen, gibt Ihnen dieser Befehl Hinweise, was als nächstes zu tun ist:

    idoitcmk match -v
