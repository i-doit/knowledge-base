---
title: Forms
description: Forms installation
icon:
status: updated
lang: de
---

# Forms

Mit dem Forms Add-on erstellst du Formulare und versendest sie per Link an Mitarbeiter zum Ausfüllen. Neue Kollegen dokumentieren so z. B. Computer im Unternehmen, ohne die gesamte i-doit-Oberfläche kennen zu müssen.

Der Vorteil: Statt aller Kategorien mit sämtlichen Feldern zeigst du nur die Attribute, die tatsächlich ausgefüllt werden müssen.

Mehr dazu findest du in unserem [Blog](https://www.i-doit.com/blog/das-neue-i-doit-pro-forms-add-on/) und im [Video](https://www.youtube.com/watch?v=3jpzrK_cR0M).

!!! info "Das Forms Add-on wird aktuell in Englisch bereitgestellt. Übersetzungen die von i-doit stammen werden auch in Deutsch übersetzt."

[![forms-ansicht](../../assets/images/de/i-doit-add-ons/forms/1-forms.png)](../../assets/images/de/i-doit-add-ons/forms/1-forms.png)

## Anforderungen

Das Forms Add-on benötigt:

*   i-doit Version **\>= v23**
*   MongoDB Server Version **\>=8**
*   NodeJS Version **\>= v22.x**

Es müssen die Systemvoraussetzungen von [MongoDB](https://docs.mongodb.com/manual/administration/production-notes/#mongodb-binaries) beachtet werden. Außerdem hat MongoDB eine [Checkliste für den Einsatz im Betrieb](https://docs.mongodb.com/manual/administration/production-checklist-operations/#operations-checklist).

[NodeJS](https://nodejs.org/en/download/current/) hat seine [Abhängigkeiten hier Dokumentiert](https://nodejs.org/en/docs/).

## Installation

So installierst du das Add-on:

1. Installiere das Forms Add-on über das [Admin-Center](../../administration/admin-center.md).
2. Installiere [MongoDB Server **v8**](https://docs.mongodb.com/manual/installation/).
3. Installiere [NodeJS **v22**](https://nodejs.org/en/download/current/) via [nvm Package Manager](https://github.com/nvm-sh/nvm).
4. Konfiguriere das Forms Backend.
5. Konfiguriere i-doit.

[Weiter zur Installation des Forms Add-on](forms-installation.md){ .md-button .md-button--primary }

## Rechtevergabe

Damit Benutzer Formulare erstellen können, vergib die entsprechenden [Rechte](../../effizientes-dokumentieren/rechteverwaltung/index.md) unter **Verwaltung → Rechtesystem → Rechtevergabe → Forms**.

[![Rechtevergabe](../../assets/images/de/i-doit-add-ons/forms/2-forms.png)](../../assets/images/de/i-doit-add-ons/forms/2-forms.png)

!!! attention "Cache für das Rechtesystem leeren"
    Nachdem du die Rechte vergeben oder geändert hast, leere in der i-doit [Verwaltung](../../administration/verwaltung/index.md) unter **Verwaltung > [Mandanten-Name] Verwaltung > Systemreparatur und Berechtigungen** den [Cache](../../administration/verwaltung/mandanten-name-verwaltung/systemreparatur-und-bereinigung.md), damit die Änderungen vom System übernommen werden.

## Aufruf des Add-ons

Nach Abschluss aller Vorbereitungen erreichst du das Add-on unter **Add-ons → Forms**.

## Verwendung der API

Dieses Dokument enthält eine rudimentäre Beschreibung der Forms-API.

!!! info "[Verwendung der Forms API](verwenden-der-forms-api.md)"

## Releases

| Version | Date       | Changelog                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| ------- | ---------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1.3     | 2025-07-18 | [Bug] Object is not created when a attribute validation is used<br>[Bug] Link to a form does not include tenant id<br>[Bug] Using Forms to create an object bypasses validation "unique" check<br>[Bug] Creating a object via Form ignores validation for attributes<br>[Bug] The Location and all physically assigned objects below right only works if parameter All is selected<br>[Bug] Created Objects are not indexed after creation<br>[Bug] Highlight 'add-on' instead of 'extras' menu<br>[Bug] Content is overlapping in list of forms<br>[Bug] Unable to select objects for Net (Hostaddress (IPv4)) attribute<br>[Bug] Hostaddress category can not be validated properly<br>[Bug] Shorten object names dynamically in Object Browser<br>[Bug] Change Service assignment to multiple select object browser<br>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| 1.2.1   | 2025-05-14 | [Task] Allow removal of instances and their data over cli<br> [Task] Implement health endpoint on backend-server<br>[Task] Add support for node v22 on backend-server<br>[Task] Add support for mongodb v8.x on backend-server                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
| 1.2.0   | 2023-05-03 | [Bug] Fix Investment cost and cost center with Forms<br> [Bug] Align categories on the left side<br>[Bug] Fix right to delete or create Forms<br>[Bug] Fix empty list in object browser if category names should be used in header<br>[Bug] Show objects if attribute type is missing<br>[Bug] Improve rendering performance of object browser fields with multiple objects<br>[Bug] Filter child values after parent values                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| 1.1.0   | 2022-06-27 | [Bug] Allow all default characters to be used in Forms-secret key  <br>[Bug] Do not show time selection in Start date for license keys  <br>[Bug] Allow to publish form if load balancer and HTTP2 is used  <br>[Bug] Save Form when publishing  <br>[Bug] Create Logbook entries when creating an object and category data via "Forms" add-on  <br>[Bug] Filter down connectable objects for custom categories with object relations in Forms  <br>[Bug] Allow user to copy link in Forms table  <br>[Bug] Allow user to select multiple objects in Forms object browser  <br>[Bug] Inform user about required attributes in category  <br>[Task] Add tooltip to disabled state of copy link button in Forms add-on  <br>[Task] Allow to add child attribute only when parent dependent is added  <br>[Task] Change real text to placeholder text in text field in Forms add-on  <br>[Task] Do not allow to add same attribute multiple times in Forms  <br>[Task] Give user warning before publishing if form will be empty  <br>[Task] Add dependencies of object browser to Forms add-on  <br>[Task] Split hostaddress category into virtual IPv4 and IPv6 categories for Forms add-on  <br>[Task] Take default template values in consideration in Forms  <br>[Task] Update attribute name in pre-defined field in Forms add-on  <br>[Task] Disable child attribute until a value for parent is assigned  <br>[Task] Implement Pagination in Attribute Type Object Browser Single- and Multi-Selection |
| 1.0.0   | 2022-02-21 | Initial release                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
