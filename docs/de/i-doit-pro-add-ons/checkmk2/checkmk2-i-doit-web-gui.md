# checkmk 2 i-doit Web GUI

Die meisten Benutzerinteraktionen basieren auf dem [legacy checkmk add-on](./index.md) von i-doit, das derzeit mit i-doit pro/open ausgeliefert wird. Dieses Legacy-Add-on muss [über das i-doit Admin Center](../index.md) aktiviert werden (es ist standardmäßig aktiviert).

Echtzeit-Aufrufe aktivieren
---------------------------

Lassen Sie i-doit den Status von Host- und Service-Checks über Livestatus in Echtzeit abrufen. Die Konfiguration erfolgt über **Verwaltung → Import und interfaces → Monitoring → Livestatus / NDO**.

Diese Statusabfrage können in jedem Objekt oder in den Objektlisten für jeden Typ angezeigt werden. Fügen Sie diesen Objekt-Typen die Kategorie "Monitoring" über "Verwaltung > CMDB-Einstellungen > Schnellkonfigurationsassistent" hinzu.

Aktivieren Sie Statusaufrufe innerhalb dieser Kategorie manuell für jedes Objekt oder [idoitcmk pull](h./../checkmk2-bestandsdaten-in-die-cmdb-importieren.md) wird dies durch [Konfigurationseinstellung](./checkmk2-konfiguration.md) `pull.enableLivestatus` erledigen.

Verwalten von Host-Tags
-----------------------

Mit i-doit können Sie Host-Tags verwalten. Es gibt "statische" und "dynamische" Host-Tags: - "static" means you manually create tags in Extras > Check_MK 2 > Tags (static) and add them to host in category Check_MK Tags. - "dynamic" means this is done automatically via rule sets in Extras > Check_MK 2 > Tags (dynamic).

Sowohl "statische" als auch "dynamische" Host-Tags werden in der Kategorie Check_MK Tags angezeigt. Sie werden über [idoitcmk push](./checkmk2-wato-konfiguration-auf-basis-von-cmdb-daten-generieren.md) nach checkmk exportiert.

Aufruf von idoitcmk über Web GUI
----------------------------------

Die Kategorie Check_MK Host bietet mehrere Schaltflächen, die idoitcmk im Hintergrund auslösen:

*   Existiert der Host in checkmk?: Identifizierung des Hosts in checkmk anhand seines Hostnamens
*   Objekt von checkmk aktualisieren": Holt Daten vom checkmk-Host, um dieses Objekt zu aktualisieren.
*   Host in checkmk erstellen/aktualisieren": Die Objektdaten werden nach checkmk übertragen. Entweder wird ein neuer Host in checkmk erstellt oder ein bestehender aktualisiert.
*   Host in checkmk löschen": Wenn dieses Objekt als Host in checkmk existiert, wird es gelöscht.

Bevor Sie oder ein anderer Benutzer eine dieser Schaltflächen betätigen, führen Sie sie bitte manuell über die Befehlszeilenschnittstelle aus, um sicherzustellen, dass sie das tun, was sie tun sollen.

Die Konfiguration erfolgt über **Verwaltung → Add-ons → Check_MK**. Durch die Einstellung App idoitcmk aufrufen muss i-doit wissen, wo sich idoitcmk befindet. Wenn Sie die [Installationsschritte](./checkmk2-installation.md) sorgfältig befolgt haben, verwenden Sie dies:

    /usr/local/bin/idoitcmk

Tipp: Möglicherweise möchten Sie Standardoptionen hinzufügen, wenn eine der Schaltflächen ausgelöst wird. In einer Multi-Mandanten-Umgebung können Sie beispielsweise mieterspezifische Konfigurationseinstellungen bereitstellen:

    /usr/local/bin/idoitcmk -c /etc/idoitcmk/tenant-one.json

Die Protokollierung ist standardmäßig aktiviert. Für die ersten Schritte ist es immer gut zu wissen, was gerade passiert.

Um Benutzern/Benutzergruppen die Berechtigung zu erteilen, diese Schaltflächen auszulösen, gehen Sie zu "Verwaltung > Berechtigungssystem > Rechte > CMDB", laden Sie einen Benutzer/eine Gruppe und aktivieren Sie das Recht "Ausführen" für eine oder mehrere Bedingungen:

*   Kategorie,
*   Kategorie in Objekt-Typen,
*   Kategorie in Objekten,
*   Kategorie in Objekten unterhalb einer Lokation und/oder
*   Kategorien in von mir erstellten Objekten
