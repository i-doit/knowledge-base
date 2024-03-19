<!-- TRANSLATED by md-translate -->
# Logbuch

# Journal de bord

Jede Änderung an der [IT-Dokumentation](../glossar.md) wird von i-doit in einem Logbuch hinterlegt. Auf diese Weise lässt sich der [Lebenszyklus der IT-Dokumentation](lebens-und-dokumentationszyklus.md) problemlos nachvollziehen.

Chaque modification apportée à la [documentation informatique](../glossaire.md) est consignée par i-doit dans un journal de bord. De cette manière, le [cycle de vie de la documentation informatique](lebens-und-dokumentationszyklus.md) peut être suivi sans problème.

## Globales Logbuch

## Journal de bord global

Das Logbuch, in dem alle Änderungen einfließen, befindet sich unter **Extras → CMDB → Logbuch → Listenansicht Logbuch**. Einträge können dort nach verschiedenen Parametern gefiltert werden. Wenn möglich, enthält ein Eintrag zudem die genauen Änderungen (Welcher Wert wurde von was zu was geändert?).

Le journal de bord, dans lequel sont intégrées toutes les modifications, se trouve sous **Extras → CMDB → Journal de bord → Vue liste Journal de bord**. Les entrées peuvent y être filtrées selon différents paramètres. Si possible, une entrée contient en outre les modifications exactes (quelle valeur a été modifiée de quoi à quoi ?).

[![globales-logbuch](../assets/images/de/grundlagen/logbuch/1-lb.png)](../assets/images/de/grundlagen/logbuch/1-lb.png)

[ ![global-logbook](../assets/images/fr/bases/logbook/1-lb.png)](../assets/images/fr/bases/logbook/1-lb.png)

Die letzte Änderung ist auf jeder Seite im unteren Bereich nachvollziehbar.

La dernière modification peut être suivie sur chaque page dans la partie inférieure.

[![letzte-änderung](../assets/images/de/grundlagen/logbuch/2-lb.png)](../assets/images/de/grundlagen/logbuch/2-lb.png)

[ ![dernière modification](../assets/images/fr/bases/logbook/2-lb.png)](../assets/images/fr/bases/logbook/2-lb.png)

## Logbuch pro Objekt

## Journal de bord par objet

Das Logbuch lässt sich nicht nur global, sondern auf ein einzelnes [Objekt](../glossar.md) beschränkt anzeigen. Jedem [Objekttyp](../glossar.md) ist die [Kategorie](../glossar.md) **Logbuch** fest zugeordnet. In der **Objektsicht** ist das Logbuch über das Buch-Icon oberhalb des Kategorie-Baums zu erreichen.

Le journal de bord peut être affiché non seulement de manière globale, mais aussi de manière limitée à un seul [objet](../glossar.md). Chaque [type d'objet](../glossar.md) est associé à la [catégorie](../glossar.md) **Journal de bord**. Dans la vue **Objet**, le journal de bord est accessible via l'icône du livre au-dessus de l'arborescence des catégories.

[![objekt-logbuch](../assets/images/de/grundlagen/logbuch/3-lb.png)](../assets/images/de/grundlagen/logbuch/3-lb.png)

[ ![journal des objets](../assets/images/fr/bases/logbook/3-lb.png)](../assets/images/fr/bases/logbook/3-lb.png)

Die Filter-Funktionen und die Detail-Tiefe entsprechen denen des globalen Logbuchs.

Les fonctions de filtrage et le niveau de détail correspondent à ceux du journal global.

[![logbuch-filter](../assets/images/de/grundlagen/logbuch/4-lb.png)](../assets/images/de/grundlagen/logbuch/4-lb.png)

[ ![logbook-filter](../assets/images/fr/bases/logbuch/4-lb.png)](../assets/images/fr/bases/logbuch/4-lb.png)

## Logbuch pro Service

## Journal de bord par service

Zu jedem Service, der in i-doit modelliert ist, existiert ein Logbuch, dass die Änderungen an allen Service-Komponenten (oder Sub-Services) enthält. Die Kategorie heißt **Service Logbuch** und kann durch die Kategorie **Service** denjenigen Objekttypen hinzugefügt werden, die Services repräsentieren.

Pour chaque service modélisé dans i-doit, il existe un journal de bord qui contient les modifications apportées à tous les composants du service (ou sous-services). Cette catégorie s'appelle **Journal de bord des services** et peut être ajoutée aux types d'objets représentant des services par la catégorie **Service**.

[![logbuch-service](../assets/images/de/grundlagen/logbuch/5-lb.png)](../assets/images/de/grundlagen/logbuch/5-lb.png)

[ ![logbook-service](../assets/images/fr/bases/logbuch/5-lb.png)](../assets/images/fr/bases/logbuch/5-lb.png)

## Logbuch konfigurieren

## Configurer le journal de bord

Die Konfiguration des Logbuchs befindet sich unter **Extras → CMDB → Logbuch → Logbuch** Konfiguration.

La configuration du journal de bord se trouve sous **Extras → CMDB → Journal de bord → Journal de bord** Configuration.

[![logbuch-konfigurieren](../assets/images/de/grundlagen/logbuch/6-lb.png)](../assets/images/de/grundlagen/logbuch/6-lb.png)

[ ![Configuration du journal](../assets/images/fr/bases/logbook/6-lb.png)](../assets/images/fr/bases/logbook/6-lb.png)

Änderungen wirken sich **nicht** auf bereits existierende Einträge aus.

Les modifications n'ont **pas d'effet** sur les entrées déjà existantes.

In der Konfiguration lässt sich die **Benutzerkennung** ändern, die zu jedem Eintrag hinterlegt wird. Als Standard gilt der [Objekttitel](../glossar.md) des Personen-Objekts, meist bestehend aus Vor- und Nachnamen.

Dans la configuration, il est possible de modifier l'**identification de l'utilisateur** qui est enregistrée pour chaque entrée. Le [titre de l'objet](../glossar.md) de l'objet personne, généralement composé du prénom et du nom, est utilisé par défaut.

!!! success "Anonymisierung"
    Wird die **Benutzerkennung** auf einen festen Wert, beispielsweise auf "Anonymous", geändert, wird das Logbuch anonymisiert. Es lässt sich somit nicht mehr nachvollziehen, wer welche Änderungen getätigt hat.

! !! success "Anonymisation".
    Si l' **identification de l'utilisateur** est modifiée sur une valeur fixe, par exemple sur "Anonymous", le journal de bord est rendu anonyme. Il n'est donc plus possible de savoir qui a fait quelles modifications.

Die Einstellung für die **struktur-it-dokumentation.mdMaximalzahl kombinierter Änderungenstruktur-it-dokumentation.md** bewirkt, dass gleichzeitige Änderungen zusammengefasst werden. Die Detailtiefe flacht dadurch ab, aber die Performance bei Importen wird erhöht.

Le paramètre **structure-it-documentation.mdNombre maximal de modifications combinées-it-documentation.md** a pour effet de regrouper les modifications simultanées. Le niveau de détail s'en trouve aplati, mais les performances lors des importations sont améliorées.

### Logbucheinträge zu bereinigten Objekten vollständig löschen

### Supprimer complètement les entrées du journal pour les objets nettoyés

Diese Konfiguration des Logbuch ist unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → Logbuch → Logbucheinträge zu bereinigten Objekten vollständig löschen** zu finden.

Cette configuration du journal se trouve sous **Administration → [Nom du mandant] Administration → Paramètres pour [Nom du mandant] → Journal de bord → Supprimer complètement les entrées du journal pour les objets nettoyés**.

[![logbucheinträge-bereinigen](../assets/images/de/grundlagen/logbuch/12-lb.png)](../assets/images/de/grundlagen/logbuch/12-lb.png)

[ ![Nettoyage des entrées du journal](../assets/images/fr/bases/logbook/12-lb.png)](../assets/images/fr/bases/logbook/12-lb.png)

Diese Einstellung ist Standardmäßig auf **Nein** gestellt. Stellt man diese Einstellung auf **Ja** wird nach bereinigen eines Objekts der Logbucheintrag des Objekts ebenfalls vollständig gelöscht.

Ce paramètre est réglé par défaut sur **Non**. Si l'on règle ce paramètre sur **Oui**, l'entrée du journal de l'objet est également entièrement supprimée après le nettoyage de l'objet.

## Logbuch aktivieren/deaktivieren

## Activer/désactiver le journal de bord

Unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → Logbuch → Detaillierte CMDB Änderungen protokollieren** kann das Logbuch aktiviert bzw. deaktiviert werden.

Sous **Administration → [Nom du mandant] Administration → Paramètres pour [Nom du mandant] → Journal de bord → Consigner les modifications CMDB détaillées**, le journal de bord peut être activé ou désactivé.

## Eigene Einträge

## Propres entrées

Zu jedem Objekt kann ein neuer Eintrag im Logbuch generiert werden. Dazu wird innerhalb des Objekts die Kategorie **Logbuch** aufgerufen (siehe oben). Anschließend wird über den Button **Neu** das Formular für einen neuen Eintrag angezeigt. Hierbei können **Alert Level**, **Nachricht** und **Beschreibung** angegeben werden. Nachdem man auf den Button **Speichern** geklickt hat, erscheint der Eintrag im Logbuch.

Pour chaque objet, une nouvelle entrée peut être générée dans le journal de bord. Pour cela, la catégorie **Journal de bord** est appelée à l'intérieur de l'objet (voir ci-dessus). Ensuite, le formulaire pour une nouvelle entrée est affiché en cliquant sur le bouton **Nouveau**. Il est possible d'indiquer ici le **niveau d'alerte**, le **message** et la **description**. Après avoir cliqué sur le bouton **Enregistrer**, l'entrée apparaît dans le journal de bord.

[![eigene-einträge](../assets/images/de/grundlagen/logbuch/7-lb.png)](../assets/images/de/grundlagen/logbuch/7-lb.png)

[ ![propres-entrées](../assets/images/fr/bases/logbook/7-lb.png)](../assets/images/fr/bases/logbook/7-lb.png)

## Einträge aus Dritt-Systemen

## Entrées provenant de systèmes tiers

Das Logbuch nimmt neue Einträge aus Dritt-Systemen entgegen, beispielsweise durch [Importe](../daten-konsolidieren/index.md), [Service Desks](../automatisierung-und-integration/service-desk/index.md), [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md) und die [API](../i-doit-pro-add-ons/api/index.md).

Le journal accepte de nouvelles entrées en provenance de systèmes tiers, par exemple via [importations](../consolidation des données/index.md), [centres de services](../automatisation-et-intégration/service-desk/index.md), [surveillance du réseau](../automatisation-et-intégration/network-monitoring/index.md) et l'[API](../i-doit-pro-add-ons/api/index.md).

## Ältere Einträge archivieren und wiederherstellen

## Archiver et restaurer des entrées plus anciennes

Über **Extras → CMDB → Logbuch → Archivieren** lässt sich konfigurieren, ob ältere Einträge archiviert werden sollen. Dabei ist anzugeben, ob welchem Alter (in Tagen) ein Eintrag archiviert wird. Hilfreich ist diese Funktion, wenn das Logbuch sehr groß ist und die Auswertung durch lange Wartezeiten behindert wird. Archivierte Einträge werden in eine separate Datenbank-Tabelle ausgelagert. Diese Tabelle wird entweder in der jeweiligen Mandanten-Datenbank oder auf einer dritten Datenbank-Instanz angelegt.

Via **Extras → CMDB → Journal de bord → Archiver**, il est possible de configurer si les anciennes entrées doivent être archivées. Il faut indiquer l'âge (en jours) auquel une entrée est archivée. Cette fonction est utile lorsque le journal de bord est très volumineux et que l'évaluation est entravée par de longs temps d'attente. Les entrées archivées sont transférées dans un tableau de base de données séparé. Cette table est créée soit dans la base de données du mandant concerné, soit sur une troisième instance de base de données.

[![einträge-wiederherstellen](../assets/images/de/grundlagen/logbuch/8-lb.png)](../assets/images/de/grundlagen/logbuch/8-lb.png)

[ ![restaurer les entrées](../assets/images/fr/bases/logbook/8-lb.png)](../assets/images/fr/bases/logbook/8-lb.png)

Über die [i-doit Console](../automatisierung-und-integration/cli/index.md) wird die Archivierung ausgeführt. Dieser Schritt kann daher auch automatisieren werden. Ein entsprechendes Beispiel für einen Aufruf sowie eine Auflistung der Parameter lässt sich im [zugehörigen Artikel](../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md#OptionenundParameterderConsole-logbook-archive) für die Option **logbook-archive** finden.

L'archivage est effectué via la [i-doit Console](../automatisation-et-intégration/cli/index.md). Cette étape peut donc également être automatisée. Un exemple d'appel et une liste de paramètres sont disponibles dans [l'article correspondant](../automatisation-et-intégration/cli/console/options-et-paramètres-de-la-console.md#optionset-paramètres-de-la-console-logbook-archive) pour l'option **logbook-archive**.

Beispiel:

exemple :

```shell
sudo -u www-data php console.php logbook-archive --user admin --password admin --tenantId 1
```

Archivierte Einträge lassen sich zur weiteren Auswertung wiederherstellen. Dieser Punkt befindet sich unter **Extras → CMDB → Logbuch → Wiederherstellen**.

Les entrées archivées peuvent être restaurées pour une analyse plus approfondie. Ce point se trouve sous **Extras → CMDB → Journal de bord → Restaurer**.

[![archivierte-einträge](../assets/images/de/grundlagen/logbuch/9-lb.png)](../assets/images/de/grundlagen/logbuch/9-lb.png)

[ ![entrées-archives](../assets/images/fr/bases/logbook/9-lb.png)](../assets/images/fr/bases/logbook/9-lb.png)

## Erstellungs- und Änderungsdatum

## Date de création et de modification

Jegliche Änderung an Objekten [Erstellen, Ändern, Archivieren, Löschen, Wiederherstellen](lebens-und-dokumentationszyklus.md) bewirkt nicht nur einen Eintrag im Logbuch, sondern auch an den [Attributen](../glossar.md) **Erstellungdatum** und **Änderungsdatum** in der Kategorie **Allgemein**, die jedem Objekttypen fest zugeordnet ist.

Toute modification apportée aux objets [création, modification, archivage, suppression, restauration](cycledevieetdocumentation.md) entraîne non seulement une entrée dans le journal de bord, mais aussi dans les [attributs](../glossaire.md) **date de création** et **date de modification** dans la catégorie **générale**, qui est attribuée de manière fixe à chaque type d'objet.

[![Änderungsdatum](../assets/images/de/grundlagen/logbuch/10-lb.png)](../assets/images/de/grundlagen/logbuch/10-lb.png)

[ ![Date de modification](../assets/images/fr/bases/logbook/10-lb.png)](../assets/images/fr/bases/logbook/10-lb.png)

Auf dem [Dashboard](dashboard-und-widgets.md) kann das Widget **Meine zuletzt geänderten Objekte** hinzugefügt werden, das die letzten eigenen Änderungen an Objekten anzeigt.

Sur le [tableau de bord](dashboard-et-widgets.md), il est possible d'ajouter le widget **Mes derniers objets modifiés**, qui affiche les dernières modifications personnelles apportées aux objets.

[![dashboard](../assets/images/de/grundlagen/logbuch/11-lb.png)](../assets/images/de/grundlagen/logbuch/11-lb.png)

[ ![dashboard](../assets/images/fr/bases/logbook/11-lb.png)](../assets/images/fr/bases/logbook/11-lb.png)

## Rechte setzen

## Définir les droits

Das Rechtesystem von i-doit erlaubt die Konfiguration, welche Personen(-gruppen) lesend auf das Logbuch zugreifen können. So kann beispielsweise festgelegt werden, dass nur i-doit-Administratoren Änderungen nachvollziehen dürfen.

Le système de droits d'i-doit permet de configurer quelles personnes (groupes de personnes) peuvent accéder au journal en lecture. Il est par exemple possible de définir que seuls les administrateurs i-doit peuvent suivre les modifications.