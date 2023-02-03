checkmk benachrichtigt Kontaktgruppen bei jedem Ereignis, wenn es richtig konfiguriert ist. Innerhalb von i-doit kann jede Kontaktgruppe als Objekt dokumentiert werden. Um Kontaktgruppen zwischen beiden zu teilen, führen Sie aus:

[?](#)

`idoitcmk` `sync``-contact-``groups`

Dieser Befehl erzeugt neue Objekte in i-doit, die auf den Kontaktgruppen von checkmk basieren. Zusätzlich können Objekte in i-doit verwendet werden, um neue Kontaktgruppen zu erzeugen.

Standardmäßig werden Kontaktgruppen als “Personengruppen” in i-doit gespeichert. Sie können diesen Gruppen einfach `Personen`\-Objekte hinzufügen und die Gruppen beliebigen anderen Objekten mit der Kategorie `Kontaktzuweisung` und der Rolle `Überwachung` zuweisen.

**Empfehlung:** Führen Sie diesen Befehl jedes Mal aus, wenn Sie eine neue Kontaktgruppe in checkmk oder i-doit hinzufügen.

Konfiguration
-------------

Diese [Konfigurationseinstellungen](https://kb.i-doit.com/display/de/checkmk+2%3A+Konfiguration) sind verfügbar:

| Key | Typ | Erforderlich | Standart | Beschreibung |
| --- | --- | --- | --- | --- |
| Key | Typ | Erforderlich | Standart | Beschreibung |
| --- | --- | --- | --- | --- |
| `objectTypes.contactGroup` | String | Nein | `C__OBJTYPE__PERSON_GROUP` | Kontaktgruppen werden durch diesen Typ gekennzeichnet (Konstante verwenden!) |