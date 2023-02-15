# checkmk 2: Installation

Nachdem Sie sich mit dem [Anforderungen](./checkmk2-anforderungen.md) Laden Sie die neueste stabile Version des i-doit pro Add-ons von der [i-doit Kundenportal](../../administration/kundenportal.md).

Installieren Sie die heruntergeladene ZIP-Datei [wie jedes andere i-doit Add-on](../index.md).

Hinzufügen der checkmk 2 Add-on Kategorien
------------------------------------------

Das Add-on macht zusätzlich die Kategorien “Checkmk Host” und “Checkmk Tags” für alle Objekttypen verfügbar. Die Kategorie kann über die Objekttypkonfiguration und den Quick Configuration Wizard mit den gewünschten Objekttypen verknüpft werden. Auf diese Weise erscheinen nur die Objekttypen, die vom Benutzer angegeben werden, um die Auswahlliste übersichtlich zu halten.

Führen Sie idoitcmk dort aus, wo Sie wollen
---------------------------------------------

Die ZIP-Datei enthält die Binärdatei idoitcmk, die Sie auf jedem anderen Computer unterhalb des i-doit-Hosts installieren können. Machen Sie es ausführbar und verschieben Sie es in ein Verzeichnis in Ihrem PATH, damit Sie es in Ihrem Terminal ausführen können. Führen Sie es zum Beispiel auf einem GNU/Linux- oder MacOS-Host aus:

    unzip idoit-cmk2-*.zip
    chmod 755 idoitcmk
    sudo mv idoitcmk /usr/local/bin/

Um auf dem neuesten Stand zu sein, müssen Sie diese Schritte wiederholen.

Führen Sie idoitcmk auf demselben Rechner wie i-doit aus
----------------------------------------------------------

Auf einem GNU/Linux-Host unterscheiden sich die folgenden Schritte nicht wesentlich von den oben genannten. Machen Sie die Binärdatei ausführbar und erstellen Sie einen symbolischen Link zu einem Verzeichnis in Ihrem PATH. In diesem Beispiel wird i-doit installiert unter /var/www/html:

    chmod 755 /var/www/html/idoitcmk
    sudo ln -s /var/www/html/idoitcmk /usr/local/bin/

Um auf dem neuesten Stand zu sein, müssen Sie diese Schritte wiederholen.