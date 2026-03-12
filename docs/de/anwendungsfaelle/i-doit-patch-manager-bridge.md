---
title: i-doit - Patch Manager bridge
description: Dieses Beispiel zeigt, wie man eine Brücke zwischen i-doit und Patch Manager auf der Basis von Servern erstellt.
icon:
lang: de
---

# i-doit - Patch Manager bridge

Dieses Beispiel zeigt, wie man eine Brücke zwischen i-doit und Patch Manager auf der Basis von Servern erstellt.

Wir nutzen die Möglichkeit, automatisch Zugriffslinks in i-doit zu generieren, um den Patch Manager Launcher mit einem direkten Link zu einem bestimmten Objekt zu öffnen. Auf der Seite des Patch Managers verwenden wir die Funktion für externe Anwendungen, um zurück zu i-doit zu verlinken.

## i-doit Konfiguration:

<div class="steps" markdown>

1. Navigiere zu "Extras/Templates", klicke auf "Neues Template" und erstelle ein neues Template mit dem Objekttyp "server".<br>
    [![Open-Templates](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/1.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/1.png){:target="_blank"}

2. Benenne das Template "Patch Manager bridge"<br>
    [![Create-Template](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/2.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/2.png){:target="_blank"}

3. Navigiere zu der "Zugriff" Kategorie und drücke "Neuer Eintrag"<br>
    [![Create-Access-Entry](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/3.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/3.png){:target="_blank"}

4. Benenne das neue Eintrag z.B. "Patch manager" und gib ihm einen benutzerdefinierten Typ, wenn du willst.<br>
    [![Create-Access-Entry](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/4.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/4.png){:target="_blank"}

5. Gib die URL im Format `http(s)://mypatchmanager.server.com(:myport)/patchmanager.plp?initial-overview=%objectname|encode%` ein, wobei die Variable `%objectname%` durch eine der verfügbaren i-doit Platzhaltervariablen ersetzt werden kann. Eine Liste der verfügbaren Variablen erhältst du, indem du auf den Info-Button neben dem URL-Feld klickst.<br>
    [![Create-Access-Entry](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/5.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/5.png){:target="_blank"}

    Beispiel: `https://mypatchmanager.com:8080/patchmanager.plp?initial-overview=%objectname|encode%`

    [![example-link](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/6.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/6.png){:target="_blank"}

    !!! success "Wenn der Benutzer später auf den Link klickt, wird der Patch Manager-Launcher mit diesem Parameter geöffnet. Der Wert des URL-Parameters für den Patch Manager kann entweder die Gerätebezeichnung oder der Wert eines beliebigen Attributes sein, das mit dem Gerät verknüpft ist. Patch Manager öffnet das Objekt, das dem Wert entspricht.<br>**Der Wert muss eindeutig sein** (z.B. wenn es zwei Objekte mit dem Namen `Server12345` gibt, dann wird der Wert übersprungen und der Link wird standardmäßig auf die übergeordnete Standortübersicht führen)."

6. Speicher den Eintrag in der "Zugriff" Kategorie<br>
    [![Save-Access-Entry](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/7.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/7.png){:target="_blank"}

7. Klicke auf dein Profilicon in der oberen rechten Ecke und wähle "Verwaltung". Gehe dann zu "Datenstruktur" / "Objekttypen" / "Infrastruktur" und wähle "Server".<br>
    [![Open-Object-Type](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/8.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/8.png){:target="_blank"}

8. Klicke auf "Editieren" und scrolle nach unten zum Feld "Default Template". Wähle das neu erstellte "Patch Manager bridge" Template und "Speichere" die Einstellungen.<br>
    [![Set-Default-Template](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/9.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/9.png){:target="_blank"}

9.  Die i-doit Konfiguration ist fertig. Jedes mal wenn ein neuer Server erstellt wird, wird das "Default Template" mit dem Eintrag in der Zugriff Kategorie auf das Objekt angewandt. Nun lässt sich ganz einfach "Patch Manager" über den Link öffnen, um zwischen den Tools zu wechseln.<br>
    [![Use-Link](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/10.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/10.png){:target="_blank"}
</div>

!!! bug "Damit die URL in i-doit korrekt aufgebaut wird, muss ein Hotfix verwendet werden<br>Der Hotfix ist [HIER](../administration/hotfixes/index.md) zu finden."

## URL-Router Add-on installieren

Damit die Bride funktioniert, musst du das kostenlose i-doit **"URL-router"** Add-on in i-doit installieren. Siehe [Add-on Installation](../i-doit-add-ons/index.md#installation) für Details zur Installation eines i-doit Add-ons.

!!! note "Dieses Add-on wird benötigt, um die Navigation `/open-object/objectname` in i-doit bereitzustellen. Ohne dieses Add-on landen die vom Patch Manager erstellten Links im Nirwana.

## Patch Manager configuration

Diese Schritte beschreiben die Konfiguration von i-doit als externe Anwendung in Patch Manager.
<div class="steps" markdown>

1. Gehe zum Menü "Verwaltung" / "Übersicht über externe Anwendungen".<br>
    [![Open-External-Applications](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/11.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/11.png){:target="_blank"}

2. Fügen in der "Übersicht über externe Anwendungen" eine neue "Externe Anwendung" hinzu.<br>
    [![Create-External-Application](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/12.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/12.png){:target="_blank"}

3. Gib "i-doit" als Name, "browser" als "Ausführungsdatei" ein und dann die i-doit-URL im folgenden Format ein: `http(s)://my-i-doit.server.com(:myport)/open-object/[Label|url]`<br>

    Example: `https://demo.i-doit.com/open-object/[Label|url]`

    !!! success "Patch Manager erstellt einen Link mit der Objektbezeichnung als Eintrag für eine Drittanbieteranwendung. Sobald du auf diesen Link klickst, wird der Standardbrowser geöffnet und zu deiner i-doit Instanz navigiert. i-doit interpretiert die Patch-Manager Bezeichnung und gleicht sie mit dem Objektnamen ab. Wenn es einen eindeutigen Eintrag findet, öffnet es das jeweilige Objekt. <br><br>Optionale erweiterte Verwendungsmöglichkeiten: Der "URL-Router" bietet auch die folgenden URL-Routen:<br>`/open-object-by-ip/<ip address>`<br>`/open-object-by-inventory/<inventory no>`<br>Du kannst diese beispielsweise mit den Patch Manager Variablen `[ipaddress]` und `[inventory]` verwenden, wenn du entsprechend benutzerdefinierte Felder dafür erstellt hast."

    [![Open-External-Applications](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/13.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/13.png){:target="_blank"}

4. Gehe zur Registerkarte "Anwendung" und wende die Anwendung auf den Objekttyp "Server" (oder einen anderen Objekttyp) an..<br>
    [![Create-External-Application](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/14.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/14.png){:target="_blank"}

5. Du bist mit Patch Manager fertig! Um den Link zu starten, klick mit der rechten Maustaste auf ein Gerät und wähle "Starten" und dann den Untermenüpunkt "i-doit".<br>
    [![Use-External-Application](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/15.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/15.png){:target="_blank"}
</div>
