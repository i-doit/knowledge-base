# Release Notes 36
<!-- cSpell:disable -->

Wir freuen uns, die Veröffentlichung von i-doit 36 bekannt zu geben. Dieses Update beinhaltet größere Änderungen an der **JDisc-Schnittstelle** und dem **Add-on Flows**. Darüber hinaus unterstützen wir nun **PHP 8.4** für i-doit und unsere Add-ons. Eine detaillierte Liste aller Änderungen und Verbesserungen ist im [Changelog](../changelogs/index.md) verfügbar.

## Neues "JDisc Connector Add-on"

Mit i-doit 36 führen wir das JDisc-Add-on ein. Dieses wird die derzeit im Kernprodukt integrierte JDisc-Funktionalität ersetzen. Durch diese Änderung sind wir in der Lage, in Zukunft mehr Funktionen und eine bessere Benutzererfahrung zu implementieren.

### Was bedeutet das für Nutzer der JDisc-Schnittstelle?

- **Wenn Sie von i-doit 35 auf i-doit 36 aktualisieren:** Sie behalten die JDisc-Schnittstelle der Version 35 und niedriger. Dies bleibt so, bis Sie das neue Add-on installieren. Dieses ersetzt die Legacy-Schnittstelle vollständig und migriert Ihre Daten. Dieser Vorgang ist nicht rückgängig zu machen. Sie können die Legacy-Schnittstelle jedoch für die nächsten zwei i-doit-Versionen beibehalten. Danach ist ein Umstieg auf das neue Add-on obligatorisch.
- **Wenn Sie i-doit Version 36 (oder höher) neu installieren:** Um die JDisc-Schnittstellenfunktionen nutzen zu können, müssen Sie das JDisc-Add-on installieren.

Die erste für das neue Add-on entwickelte Funktion ist die Geräteliste. Mit dieser Funktion haben Sie schnellen Zugriff auf Ihre Geräte und können einen Import für neue Geräte von einem Ort aus durchführen.

## Add-on Flows

Mit Version 1.2.0 erhält unser i-doit-Add-on Flows sein erstes großes Feature-Update. Es wird eine neue Aktion zum Einstufen von Objekten zwischen den Zuständen "Normal", "Archiviert" und "Gelöscht" hinzugefügt. Neben dieser Aktion wurden viele Verbesserungen an den Auslöse-Buttons vorgenommen. Diese können jetzt Icons für eine schnelle Identifikation enthalten und sind gruppierbar, um mehrere verwandte Flows mit einem Klick oder nacheinander auszulösen. Darüber hinaus können Buttons so definiert werden, dass sie in bestimmten Kategorien sichtbar sind. Zusammen mit diesen Funktionen haben wir die Benutzererfahrung beim Erstellen logischer Bedingungen verbessert.

## Add-ons QR code printer & i-diary

Sowohl das Add-on "QR code printer" als auch das Add-on "i-diary" sind Windows-Anwendungen. Diese Add-ons können nun auch in Ihrer i-doit-Installation verwendet werden. Nach der Installation erscheinen sie in der Add-on-Liste. Benutzer können Berechtigungen für diesen Bereich erhalten. In diesem Bereich finden Sie eine Einführung zum entsprechenden Add-on sowie einen Download-Link für die Anwendung. So können Benutzer schnell auf die Datei zugreifen, wenn diese direkt über die i-doit-Benutzeroberfläche benötigt wird, und die Microsoft-Windows-Anwendung mit Ihrem i-doit-Server verbinden.

## Highlights in dieser Version

- Die **JDisc**-Schnittstelle ist jetzt ein **Add-on**
- Mehrere neue Funktionen für das Add-on **Flows**
- Nutzer von [i-doit cloud](../../idoit-cloud/index.md) können jetzt mehr Experteneinstellungen ändern
- Konfiguration der Verwendung von **selbstsignierten Zertifikaten** für **LDAP** über die Schnittstelle
- Add-ons mit Microsoft Windows-basierten Anwendungen können jetzt installiert werden

### i-doit Add-ons

Neben der Veröffentlichung von i-doit 36 werden auch die folgenden Versionen unserer Add-ons verfügbar sein:

- [API 2.4](../../i-doit-add-ons/api/index.md)
- [Check_MK 1.1.1](../../i-doit-add-ons/checkmk.md)
- [Documents 1.11](../../i-doit-add-ons/documents/index.md)
- [Floorplan 1.10](../../i-doit-add-ons/floorplan.md)
- [Flows 1.2.0](../../i-doit-add-ons/flows/index.md)
- [JDisc Connector 1.0](../../i-doit-add-ons/jdisc-connector/index.md)
- [Maintenance 1.7](../../i-doit-add-ons/maintenance.md)
- [Packager 1.4](../../i-doit-add-ons/add-on-packager.md)
- [Workflow 1.6](../../i-doit-add-ons/workflow.md)

Stellen Sie sicher, dass Sie **die Add-ons entsprechend aktualisieren**, damit Sie die Anforderungen für i-doit 36 erfüllen.
