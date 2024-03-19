<!-- TRANSLATED by md-translate -->
# checkmk 2: Kontaktgruppen synchronisieren

# checkmk 2 : Synchroniser les groupes de contacts

checkmk benachrichtigt Kontaktgruppen bei jedem Ereignis, wenn es richtig konfiguriert ist. Innerhalb von i-doit kann jede Kontaktgruppe als Objekt dokumentiert werden. Um Kontaktgruppen zwischen beiden zu teilen, führen Sie aus:

checkmk notifie les groupes de contacts à chaque événement, s'il est correctement configuré. Au sein d'i-doit, chaque groupe de contacts peut être documenté comme un objet. Pour partager des groupes de contacts entre les deux, exécutez

```
idoitcmk sync-contact-groups
```

Dieser Befehl erzeugt neue Objekte in i-doit, die auf den Kontaktgruppen von checkmk basieren. Zusätzlich können Objekte in i-doit verwendet werden, um neue Kontaktgruppen zu erzeugen.

Cette commande crée de nouveaux objets dans i-doit, basés sur les groupes de contacts de checkmk. De plus, des objets peuvent être utilisés dans i-doit pour créer de nouveaux groupes de contacts.

Standardmäßig werden Kontaktgruppen als "Personengruppen" in i-doit gespeichert. Sie können diesen Gruppen einfach Personen-Objekte hinzufügen und die Gruppen beliebigen anderen Objekten mit der Kategorie Kontaktzuweisung und der Rolle Überwachung zuweisen.

Par défaut, les groupes de contacts sont enregistrés comme "groupes de personnes" dans i-doit. Vous pouvez facilement ajouter des objets de personne à ces groupes et attribuer les groupes à n'importe quel autre objet avec la catégorie Attribution de contact et le rôle Surveillance.

**Empfehlung:** Führen Sie diesen Befehl jedes Mal aus, wenn Sie eine neue Kontaktgruppe in checkmk oder i-doit hinzufügen.

**Recommandation:** Exécutez cette commande à chaque fois que vous ajoutez un nouveau groupe de contacts dans checkmk ou i-doit.

## Konfiguration

## Configuration

Diese [Konfigurationseinstellungen](./checkmk2-konfiguration.md) sind verfügbar:

Ces [paramètres de configuration](./checkmk2-konfiguration.md) sont disponibles :

| Key | Typ | Erforderlich | Standart | Beschreibung |
| --- | --- | --- | --- | --- |
| objectTypes.contactGroup | String | Nein | C__OBJTYPE__PERSON_GROUP | Kontaktgruppen werden durch diesen Typ gekennzeichnet (Konstante verwenden!) |

| Clé | Type | Requis | Standard | Description |
| --- | --- | --- | --- | --- |
| objectTypes.contactGroup | Chaîne | Non | C__OBJTYPE__PERSON_GROUP | Les groupes de contacts sont identifiés par ce type (utiliser une constante !) |