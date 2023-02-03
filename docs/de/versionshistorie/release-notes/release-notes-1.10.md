Systemvoraussetzungen
---------------------

*   i-doit unterstützt nun PHP ab 5.6 bis 7.0
    
*   Der MySQL Parameter `**innodb_stats_on_metadata = 0**` sollte gesetzt werden, um die Performance beim Speichern von Kategorien zu erhöhen
    

Weitere Informationen
---------------------

*   Die Verkabelungs-Kategorie benutzt nun das Verkabelungs-Addon. Wenn Sie Verkabelungen dokumentieren, installieren sie bitte das freie Verkabelungs-Add-on.
    

Migrationen
-----------

*   Der Controller benutzt nun das Symfony Framework als Backend. Das Controller Kommando ist derzeit noch abwärtskompatibel. Sehen sie bitte in unserer Knowledgebase nach, wie sie ihre Cronjobs auf die neue Controller Console umstellen.