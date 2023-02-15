# Forms

Mit diesem Add-on können Sie Formulare erstellen, die Sie an anderen Mitarbeitern zum ausfüllen via Link zusenden können.  
Dieses Add-on kann ein Formular erstellen, dass zum Beispiel neuen Mitarbeitern hilft Computer in Ihrem Unternehmen zu dokumentieren.

Beim Erfassen von neuen Objekten ist es häufig so, dass zwar mehrere Kategorien angezeigt werden, aber aus jeder Kategorie nur einzelne Felder gepflegt werden müssen.  
In dem Fall ist es für den User (speziell wenn es neue Kollegen sind) einfacher, wenn nur die Attribute angezeigt werden, die tatsächlich ausgefüllt werden müssen.

Das Forms Add-on verwendet das Design des neuen i-doit Cloud Produktes, daher ist das Erscheinungsbild anders als in den anderen Add-ons.

Eine Vorstellung des Add-ons finden Sie auch auf unserem Blog, [hier](https://www.i-doit.com/blog/das-neue-i-doit-pro-forms-add-on/). Außerdem wurde ein [Video](https://www.youtube.com/watch?v=3jpzrK_cR0M) erstellt.

!!! info "Das Forms Add-on wird nur in Englisch bereitgestellt. Übersetzungen die von i-doit selbst Stammen werden auch in Deutsch dargestellt."

[![forms-ansicht](../../assets/images/de/i-doit-pro-add-ons/forms/1-forms.png)](../../assets/images/de/i-doit-pro-add-ons/forms/1-forms.png)

Anforderungen
-------------

Das Forms Add-on benötigt

*   i-doit Version **\>=** v**1.18**
*   MongoDB Server v**5**
*   NodeJS **\>=** v**16.x**  
    

Hier müssen die Systemvoraussetzungen von [MongoDB](https://docs.mongodb.com/manual/administration/production-notes/#mongodb-binaries) beachtet werden.  
Außerdem hat MongoDB eine [Checkliste für den Einsatz im Betrieb](https://docs.mongodb.com/manual/administration/production-checklist-operations/#operations-checklist).

[NodeJS](https://nodejs.org/en/download/current/) hat seine [Abhängigkeiten hier Dokumentiert](https://nodejs.org/en/docs/meta/topics/dependencies/).  

Installation
------------

*   Installieren des Forms Add-on über das [Admin Center](../../administration/admin-center.md).
*   [MongoDB Server v5](https://docs.mongodb.com/manual/installation/) installation
*   Anschließend wird [NodeJS](https://nodejs.org/en/download/current/) >= v16.x installiert.  via [Package Manager](https://nodejs.org/en/download/package-manager/).
*   Forms Backend konfigurieren
*   Backend in i-doit konfigurieren

!!! info "[info Weiter zur Installation Forms Add-on](./installation-forms-add-on.md)"

Rechtevergabe
-------------

Damit Benutzer in der Lage sind, Formulare zu erstellen, ist es nötig entsprechende [Rechte](../../effizientes-dokumentieren/rechteverwaltung/index.md) zu vergeben.  
Dies ist in der i-doit Verwaltung unterRechtesystem > Rechtevergabe > Forms möglich, wenn das Add-on installiert ist.

[![Rechtevergabe](../../assets/images/de/i-doit-pro-add-ons/forms/2-forms.png)](../../assets/images/de/i-doit-pro-add-ons/forms/2-forms.png)

!!! attention "Cache für das Rechtesystem leeren"

    Nachdem die Rechte vergeben oder geändert wurden ist es notwendig, in der i-doit [Verwaltung](../../administration/verwaltung/index.md) unter Systemtools > Cache / Datenbank den [Cache](../../administration/verwaltung/systemtools.md) zu leeren, damit die Änderungen vom System übernommen werden.

Aufruf des Add-ons
------------------

Nachdem alle Vorbereitungen abgeschlossen sind ist der Zugriff auf das Add-on ist über Extras > Forms möglich.

Die Ansicht des Menüs "Extras" kann sich Aufgrund unterschiedlicher Rechte und/oder weiterer installierter Add-ons unterscheiden.

Verwendung der API
------------------

Dieses Dokument enthält eine rudimentäre Beschreibung der Forms-API.

!!! info "[view Verwendung der Forms API](./verwenden-der-forms-api.md)"

Releases
--------

| Version | Date | Changelog |
| --- | --- | --- |
| 1.1.0 | 2022-06-27 | [Bug]  Allow all default characters to be used in Forms-secret key  <br>[Bug]  Do not show time selection in Start date for license keys  <br>[Bug]  Allow to publish form if load balancer and HTTP2 is used  <br>[Bug]  Save Form when publishing  <br>[Bug]  Create Logbook entries when creating an object and category data via "Forms" add-on  <br>[Bug]  Filter down connectable objects for custom categories with object relations in Forms  <br>[Bug]  Allow user to copy link in Forms table  <br>[Bug]  Allow user to select multiple objects in Forms object browser  <br>[Bug]  Inform user about required attributes in category  <br>[Task] Add tooltip to disabled state of copy link button in Forms add-on  <br>[Task] Allow to add child attribute only when parent dependent is added  <br>[Task] Change real text to placeholder text in text field in Forms add-on  <br>[Task] Do not allow to add same attribute multiple times in Forms  <br>[Task] Give user warning before publishing if form will be empty  <br>[Task] Add dependencies of object browser to Forms add-on  <br>[Task] Split hostaddress category into virtual IPv4 and IPv6 categories for Forms add-on  <br>[Task] Take default template values in consideration in Forms  <br>[Task] Update attribute name in pre-defined field in Forms add-on  <br>[Task] Disable child attribute until a value for parent is assigned  <br>[Task] Implement Pagination in Attribute Type Object Browser Single- and Multi-Selection |
| 1.0.0 | 2022-02-21 | Initial release |