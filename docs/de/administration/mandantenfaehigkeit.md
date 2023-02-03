i-doit ist mandantenfähig. Das bedeutet, dass über eine Installation ein oder mehrere eigenständige [IT-Dokumentationen](/display/de/Glossar) abgebildet werden können. Die Anwendungsfälle sind vielfältig: von Sub-Organisationen, die getrennt voneinander dokumentieren sollen, über Systemhäuser, die Kunden-IT in dedizierten Instanzen dokumentieren, bis hin zu Hosting-Providern, die i-doit als Dienstleistung bereitstellen.

Lizenzierung

Für die Fähigkeit, mehrere Mandanten mit einer Installation zu betreiben, ist eine spezielle Lizenz notwendig. Nähere Informationen sind [auf Anfrage](https://www.i-doit.com/ueber-uns/kontakt/) erhältlich.

**Inhaltsverzeichnis**

*   1[Hintergrund](#Mandantenfähigkeit-Hintergrund)
*   2[Konfiguration](#Mandantenfähigkeit-Konfiguration)
*   3[Objektlimitierung pro Mandant](#Mandantenfähigkeit-ObjektlimitierungproMandant)
*   4[Add-ons pro Mandant](#Mandantenfähigkeit-Add-onsproMandant)
*   5[Benutzerverwaltung](#Mandantenfähigkeit-Benutzerverwaltung)
*   6[Mandanten-Wechsel](#Mandantenfähigkeit-Mandanten-Wechsel)

Hintergrund
-----------

Pro Mandant existiert in i-doit eine separate Datenbank. In dieser Datenbank werden alle Inhalte gespeichert, aber auch die Konfigurationen. So können über eine Instanz von i-doit völlig unterschiedliche IT-Dokumentationen gepflegt werden. Ein Austausch zwischen Mandanten ist nicht vorgesehen. Diese strikte Trennung ist auch ein Grund dafür, dass das [Admin Center](/display/de/Admin+Center) als übergeordnete Verwaltungsinstanz zur Verfügung steht.

Konfiguration
-------------

Die Verwaltung von Mandanten geschieht im Admin Center. Im Bereich `**Tenants**` werden alle derzeit angelegten Mandanten aufgelistet.

![](/download/attachments/36864089/admin_center_tenants.png?version=1&modificationDate=1462979715665&api=v2&effects=drop-shadow)

Oberhalb der Auflistung stehen verschiedene Optionen zur Verfügung:

*   `**Add new tenant**`: ein neuer Mandant wird erstellt
*   `**Edit**`: ein bestehender Mandant wird konfiguriert
*   `**Activate**`: ein bestehender Mandant wird aktiviert, falls dieser vorher deaktiviert war
*   `**Deactivate**`: ein bestehender Mandant wird deaktiviert, falls dieser vorher aktiviert war
*   `**Remove**`: ein bestehender Mandant wird **unwiderruflich** gelöscht

Zum Konfigurieren wird ein Mandant über die Checkboxen ausgewählt. Zum (De-)Aktivieren oder Löschen wird ein oder mehrere Mandanten ausgewählt.

![](/download/attachments/36864089/admin_center_tenant_edit.png?version=1&modificationDate=1462979715695&api=v2&effects=drop-shadow)

Pro Mandant müssen verschiedene Eigenschaften angegeben werden (Pflichtfelder):

*   `**Tenant GUI title**`: Name des Mandanten (wird unter anderem beim Login angezeigt)
*   `**Description**`: Beschreibung (hat bis auf den informellen Charakter keine Auswirkung auf die Funktionalität)
*   `**Sort value**`: Sortierreihenfolge als Ganzzahl angeben (je niedriger der Wert, desto höher steht der Mandant in der Reihenfolge)
*   `**Cache dir**`: i-doit speichert aus Performance-Gründen viele Daten zwischen. Pro Mandant wird unterhalb des Verzeichnisses `temp/` im Installationsverzeichnis von i-doit ein dediziertes Cache-Verzeichnis angelegt.
*   `**MySQL settings**`: Hierbei ist es von Vorteil, den Database Name mit Prefix `idoit_` zu benennen. Der erste Mandant erhält bei der [Installation](/display/de/Setup) standardmäßig den Datenbanknamen `idoit_data`.

Objektlimitierung pro Mandant
-----------------------------

Pro Mandant kann – sofern die Mandanten-Lizenz verwendet wird – eingestellt werden, wie viele lizenzpflichtige Objekte maximal dokumentiert werden dürfen. Dies geschieht im Admin Center unter `**Licences**`. Dort gibt es pro Mandant den Paramter `**Object limit**` (Ganzzahl).

![](/download/attachments/36864089/admin_center_licenses.png?version=1&modificationDate=1462979715649&api=v2&effects=drop-shadow)

Add-ons pro Mandant
-------------------

Bei der [Installation und beim Update von Add-ons](/display/de/i-doit+pro+Add-ons) kann ausgewählt werden, ob diese Aktion für einen einzelnen Mandanten oder für alle Mandanten durchgeführt werden soll. Im Admin Center unter `**Modules**` werden alle installierten Add-ons pro Mandant aufgeführt. Sie können pro Mandant (de-)aktiviert werden. Das Löschen erfolgt für alle Mandanten.

![](/download/attachments/36864089/admin_center_modules.png?version=1&modificationDate=1462979715601&api=v2&effects=drop-shadow)

Update von i-doit

Während des [Updates von i-doit](/display/de/Update+einspielen) wird abgefragt, welche Mandanten-Datenbanken aktualisiert werden sollen. Standardmäßig sind alle als ausgewählt markiert. Es wird dringend empfohlen, alle Mandanten-Datenbanken beim Update zu berücksichtigen. Eine Abweichung gilt nur in gut begründeten Ausnahmefällen (beispielsweise durch den [Support](/display/de/Troubleshooting)).

Benutzerverwaltung
------------------

Die [Benutzerverwaltung](/display/de/Erstanmeldung) wird pro Mandant konfiguriert, d. h., Personen-Objekte mit Login-Daten können je nach Mandant abweichen.

Sind mehrere Mandanten aktiviert, wird beim Login abgefragt, in welchen Mandanten man sich anmelden möchte. Dies geschieht allerdings nur, wenn die Zugangsdaten des Benutzers in mehreren Mandanten dieselben sind. Andernfalls wird automatisch derjenige Mandant geladen, für den die Zugangsdaten gültig sind.

![](/download/attachments/36864089/login_multi-tenant.png?version=1&modificationDate=1463041653053&api=v2&effects=drop-shadow)

Wird für die Authentifizierung und Autorisierung ein [LDAP-Verzeichnis/Active Directory (AD)](/pages/viewpage.action?pageId=9666615) angebunden, werden beim Login die konfigurierten Server nacheinander abgefragt, ob die Zugangsdaten gültig sind. Danach wird ermittelt, für welche Mandanten die Zugangsdaten gültig sind (siehe oben).

Ist [Single Sign On (SSO)](/pages/viewpage.action?pageId=10780674) aktiv, kann ein zu nutzender Mandant als Standard gewählt werden. Dies geschieht unter `**Verwaltung → Systemeinstellungen → Single Sign On → Standard Mandant**`. Beim Aufruf von i-doit wird der Benutzer automatisch zu diesem Mandanten verbunden, falls die Zugangsdaten korrekt sind.

Mandanten-Wechsel
-----------------

Zwischen verschiedenen Mandanten kann gewechselt werden, ohne sich vorher abmelden zu müssen. In der oberen [Hauptnavigationsleiste](/display/de/Struktur+der+IT-Dokumentation) wird angegeben, mit welchem Benutzer man derzeit in welchem Mandanten angemeldet ist. Fährt man mit der Maus über den Mandanten-Namen, entsteht automatisch ein Drop-Down-Menü. Zur Auswahl stehen dann die weiteren Mandanten. Klickt man auf einen, wird der Benutzer für den derzeitigen Mandanten abgemeldet und automatisch im neuen angemeldet. Dies funktioniert allerdings nur, wenn die Zugangsdaten des Benutzers in den Mandanten dieselben sind.

![](/download/attachments/36864089/logged_in.png?version=1&modificationDate=1463041652100&api=v2&effects=drop-shadow)