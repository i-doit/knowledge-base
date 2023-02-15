# Events
Das Event [Add-on](./index.md) erlaubt einen hohen Automatisierungsgrad bei der Arbeit mit der [IT-Dokumentation](../glossar.md). Wird etwas an der IT-Dokumentation geändert, können Dritt-Systeme über ebendiese Änderungen informiert werden. Wird beispielsweise eine neue VM in i-doit dokumentiert, kann diese automatisch auf einem Virtualisierungs-Host erstellt und provisioniert werden.

!!! info "Ein Praxisbeispiel finden Sie auf unserem [Blog](https://www.i-doit.com/blog/event-add-on/)"

Rechtevergabe

Unter **Verwaltung → Rechtesystem → Rechtevergabe → Events.** können [Rechte für Personen und Personengruppen](../effizientes-dokumentieren/rechteverwaltung/index.md) angepasst werden.

[![Rechtevergabe](../assets/images/de/i-doit-pro-add-ons/events/1-eve.png)](../assets/images/de/i-doit-pro-add-ons/events/1-eve.png)

Konfiguration
-------------

Die Konfiguration wird über **Verwaltung → CMDB Einstellungen → Events **→** Hooks** erreicht.

[![Konfiguration](../assets/images/de/i-doit-pro-add-ons/events/2-eve.png)](../assets/images/de/i-doit-pro-add-ons/events/2-eve.png)

!!! attention "404 Not Found"

    Erscheint beim Aufruf der Event-Konfiguration lediglich eine Fehlermeldung, die Seite könne nicht gefunden werden, liegt das mit aller Wahrscheinlichkeit an einer fehlerhaften [Konfiguration des Webservers](../administration/systemeinstellungen/index.md). Sowohl das Apache-Modul rewrite muss aktiviert sein, als auch das Einlesen der .htaccess\-Datei im Installationsverzeichnis von i-doit muss erlaubt sein (AllowOverride All).

Es werden Events mit Befehlsaufrufen kombiniert. Ein Event wird durch einen Hook ausgelöst, also bei einer internen Routine in i-doit. Folgende Events stehen zur Verfügung:

*   [Kategorie](../glossar.md)
    *   Neuanlage (nur über die Web GUI)
    *   Speichern
    *   Archivieren/Löschen/Wiederherstellen/Purge
*   [Objekt](../glossar.md)
    *   Neuanlage
    *   Purge
*   [Objekttyp](../glossar.md)
    *   Neuanlage/Speichern
    *   Purge

Es existieren demnach für alle [Zustände in der IT-Dokumentation](../grundlagen/lebens-und-dokumentationszyklus.md) passende Events. Es sind beliebig viele Event-zu-Befehlsaufruf-Kombinationen möglich.

Der Befehlsaufruf erfolgt unmittelbar beim Eintreten des konfigurierten Events. Dazu wird ein Shellscript ausgeführt. Dieses muss vom User oder Gruppe, mit dessen Rechten der Webserver läuft, ausgeführt werden dürfen. Unter einem Debian-basierten Betriebssystem ist dies der User www-data mit der gleichnamigen Gruppe. Das Script benötigt daher unter GNU/Linux das Rechtebit zum Ausführen (x). Die Programmiersprache ist beliebig, sollte allerdings vom Betriebssystem unterstützt sein (Bash, PHP, Python, Perl etc.).

[![Befehlsaufruf](../assets/images/de/i-doit-pro-add-ons/events/3-eve.png)](../assets/images/de/i-doit-pro-add-ons/events/3-eve.png)

Dem Shellscript werden Informationen zum Event übergeben. Diese werden als JSON mit BASE64 kodiert. Beispiel eines JSON-Strings beim Speichern eines Kategorie-Eintrags (die BASE64-Dekodierung fand bereits statt):

    {
        "success": 0,
        "objectID": "2912",
        "categoryID": 1,
        "categoryConst": "C__CATG__GLOBAL",
        "categoryDataID": "2949",
        "multivalue": false,
        "changes": [],
        "postData": {
            "data_id": "2948",
            "properties": {
                "title": {
                    "tag": "title",
                    "value": "Headquarter Network",
                    "title": "LC__UNIVERSAL__TITLE"
                },
                "created": {
                    "tag": "created",
                    "value": "2016-04-26 14:41:01",
                    "title": "LC__TASK__DETAIL__WORKORDER__CREATION_DATE"
                },
                "created_by": {
                    "tag": "created_by",
                    "value": "admin",
                    "title": "LC__UNIVERSAL__CREATED_BY"
                },
                "changed_by": {
                    "tag": "changed_by",
                    "value": "admin",
                    "title": "LC__CMDB__LAST_CHANGE_BY"
                },
                "purpose": {
                    "tag": "purpose",
                    "value": "1",
                    "id": "1",
                    "title_lang": "LC__CMDB__CATG__PURPOSE_PRODUCTION",
                    "title": "LC__CMDB__CATG__GLOBAL_PURPOSE"
                },
                "category": {
                    "tag": "category",
                    "value": "2",
                    "id": "2",
                    "title_lang": "Demo",
                    "title": "LC__CMDB__CATG__GLOBAL_CATEGORY"
                },
                "sysid": {
                    "tag": "sysid",
                    "value": "SYSID_1461677372",
                    "title":"SYSID"
                },
                "cmdb_status": {
                    "tag": "cmdb_status",
                    "value": "6",
                    "id": "6",
                    "const": "C__CMDB_STATUS__IN_OPERATION",
                    "title_lang": "LC__CMDB_STATUS__IN_OPERATION",
                    "title": "LC__UNIVERSAL__CMDB_STATUS"
                },
                "type": {
                    "tag": "type",
                    "value": "77",
                    "id": "77",
                    "const": "C__OBJTYPE__SUPERNET",
                    "title_lang": "LC__OBJTYPE__SUPERNET",
                    "title": "LC__REPORT__FORM__OBJECT_TYPE"
                },
                "tag": {
                    "tag": "tag",
                    "title": "LC__CMDB__CATG__GLOBAL_TAG",
                    "value": []
                },
                "description": {
                    "tag": "description",
                    "title": "LC__CMDB__LOGBOOK__DESCRIPTION"
                }
            }
        },
        "data": {
            "2949":{
                "title": "Headquarter Network",
                "status": "Normal",
                "created": "2016-04-26 14:47:57",
                "created_by": "admin",
                "changed": "2016-04-26 14:47:57",
                "changed_by": "admin",
                "purpose": "Produktion",
                "category": "Demo",
                "sysid": "SYSID_1461674878",
                "cmdb_status": "In Betrieb",
                "type": "Supernet",
                "tag": null,
                "description": "",
                "_id": 2912,
                "_title": "<span class=\"hide\">Headquarter Network<\/span><a name=\"Headquarter Network\" href=\"?objID=2912\" id=\"lb_58_2912\">Headquarter Network<\/a><script type='text\/javascript'>if ($('lb_58_2912')) new Tip('lb_58_2912', '', {ajax: {url: '\/i-doit\/?ajax=1&call=quick_info&objID=2912'}, delay: '0', stem: 'topLeft', style: 'default', className: 'objectinfo'});<\/script>",
                "_created": "<span data-date=\"2016-04-26 14:47:57\" class=\"hide\"><\/span>26.04.2016 (admin)",
                "_changed": "<span data-date=\"2016-04-26 14:47:57\" class=\"hide\"><\/span>26.04.2016 (admin)",
                "_cmdb_status": "<div class=\"cmdb-marker\" style=\"background-color:#33C20A;\"><\/div> In Betrieb"
            }
        }
    }

Zu sehen ist, dass die Kategorie **Allgemein** für das Objekt "Headquarter Network" erfolgreich gespeichert wurde.

Zusätzliche Parameter können ebenfalls konfiguriert werden, die dem Shellscript übergeben werden. Diese sind statisch sprich ohne Platzhalter.

!!! success "i-doit Controller"

    Die beschriebenen Shellscripte sind nicht nur dafür geeignet, Dritt-Systeme zu steuern, sondern auch i-doit selbst. Es spricht nichts dagegen, über ein solches Shellscript das Kommandozeilen-Tool von i-doit, den [Controller](../automatisierung-und-integration/cli/index.md), oder die [API](./api/index.md) aufzurufen. Dadurch können automatisierte Arbeiten innerhalb der IT-Dokumentation erledigt werden.

!!! success "Performance"

    Die Befehlsaufrufe werden synchron ausgeführt, d. h., sie werden beispielsweise beim Drücken auf **Speichern** unmittelbar ausgeführt und es wird solange gewartet, bis das Shellscript beendet wird. Bei vielen und/oder umfangreichen Shellscripten bremst das die Web GUI von i-doit aus, was sich negativ auf die Benutzerfreundlichkeit auswirkt. Daher bietet es sich an, eine Queue zu bauen: i-doit ruft dazu ein Shellscript auf, das die Parameter entgegen nimmt und erst einmal in einer Queue zwischenspeichert (beispielsweise in einer temporären Datei). Per Cronjob o. ä. wird ein weiteres Script ausgeführt, das diese Queue abarbeitet. Auf diese Weise entsteht eine Asynchronität, die ein Benutzer von i-doit nicht negativ spüren wird.

Logging
-------

Wenn ein Event ausgelöst wird und dieses mit einem Befehlsaufruf verbunden ist, wird die Ausführung protokolliert. Unter **Verwaltung → CMDB Einstellungen → Events → Historie (Log)** werden die letzten 500 Einträge aufgelistet.

[![Logging](../assets/images/de/i-doit-pro-add-ons/events/4-eve.png)](../assets/images/de/i-doit-pro-add-ons/events/4-eve.png)

Releases
--------

| Version | Datum | Changelog |
| --- | --- | --- |
| 1.3 | 05.09.2022 | [Task] Change link to knowledgebase  <br>[Task] PHP 8.0 Compatibility <br> [Task] Design Compatibility <br> [Bug] Events are not triggered when changing/assigning roles |
| 1.2 |     | [Improvement] The event contains information about the user  <br> [Bug] Custom category constants are not passed, when ranking entries |
| 1.1.1 | 31.07.2019 | [Bug] Drop-down empty in hooks for object types<br> |
| 1.1 | 30.01.2019 | [Bug] Constant of user defined categories is missing<br> |
| 1.0.1 |     | [Bug] i-doit 1.12 compatibility<br> |
| 1.0 | 03.07.2018 | Initiales Release |