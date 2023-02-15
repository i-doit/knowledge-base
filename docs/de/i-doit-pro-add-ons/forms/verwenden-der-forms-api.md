# Verwendung der Forms API

Einführung
----------

Das Forms-Addon besteht aus einem i-doit kompatiblen Addon und einer Backend-Applikation. Das Backend ist hierbei verantwortlich für die Datenhaltung und kann über eine  
REST-API bedient werden. Es besteht weiterhin die Möglichkeit i-doit als Proxy zu verwenden, um mit dem Forms-Backend zu kommunizieren. Dies setzt jedoch eine valide  
Benutzersession in i-doit voraus. Sofern dies nicht gegeben ist kann die Forms-Backend-API auch direkt angesprochen werden. Dieses Dokument geht von einer direkten Kommunikation aus.

> Es ist zu beachten, dass das Backend keinerlei logische Validierungen enthält. Diese Aufgabe übernimmt ausschließlich das Frontend.  
> Eine unmittelbare Nutzung der API bringt daher einen kompletten Verzicht auf Kontrollstrukturen mit sich.  
> Dies sollte bei einer derartigen Nutzung daher immer beachtet werden.

Es muss ferner berücksichtigt werden, dass für die Nutzung von i-doit Attributen zusätzlich die Forms-Addon-API vorausgesetzt wird, um auf essentielle Attributinformationen  
zuzugreifen.

Authentifizierung
-----------------

Die Authentifizierung gegen das Forms-Backend erfolgt auf Basis von Benutzername und API Schlüssel. Bei diesen Informationen geht es um eben jene Konfigurationsparameter,  
die auch schon in der i-doit Konfiguration hinterlegt wurden:

     POST http://localhost:3000/login
     Content-Type: application/json
     
     {
     "apikey": "APIKEY",
     "name": "USERNAME"
     }

Bei einer erfolgreichen Authentifizierung erhält man anschließend einen JSON Web Token:

     {
     "access_token": "{JWT_TOKEN}"
     }

Der Token muss fortan in jedem Request angegeben werden, sofern Endpunkte angesprochen werden, die eine Authentifizierung voraussetzen. Dies erfolgt über den Authorization  
\-Header. Im Folgenden ein Beispiel:

     GET http://localhost:3000/api/form
     Authorization: bearer {JWT_TOKEN}

Standardmäßig hat ein Token nach seiner Erstellung eine Gültigkeit von 60 Minuten. Nach Ablauf dieser Zeit verliert es seine Gültigkeit und es muss ein erneutes Login  
erfolgen.

Endpunkte
---------

### GET /api/form

Dieser Endpunkt gibt eine Liste aller verfügbaren Formulare zurück. Darüber hinaus verfügt es über die Möglichkeit der Filterung und Sortierung.

     GET http://localhost:3000/api/form
     Accept: application/json
     Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI2MWU2YThlNmY1ZTMxYjI5NzAwOTMxOWEiLCJuYW1lIjoic2VsY3VrIiwic3ViIjoiJDJhJDEwJFJ4YlRybVpUVXlXc1NSQ2VZTFR6enVBZXJZTUF1dUlsNU5qOWt5RFN4WXlFL0NsdG1iLmY2IiwiaWF0IjoxNjU3MjkyNTAxLCJleHAiOjE2NTcyOTYxMDF9.yEZAjFAGpOCbDsJuI_vqot5J75MOE0bKPPn8osQS0Ik

### GET /api/form/{ID}

> Abruf von spezifischen Formularen

     GET http://localhost:3000/api/form/6245bf4f36f695945b3df9be
     Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI2MWU2YThlNmY1ZTMxYjI5NzAwOTMxOWEiLCJuYW1lIjoic2VsY3VrIiwic3ViIjoiJDJhJDEwJFJ4YlRybVpUVXlXc1NSQ2VZTFR6enVBZXJZTUF1dUlsNU5qOWt5RFN4WXlFL0NsdG1iLmY2IiwiaWF0IjoxNjU3MjkyNTAxLCJleHAiOjE2NTcyOTYxMDF9.yEZAjFAGpOCbDsJuI_vqot5J75MOE0bKPPn8osQS0Ik

Die Rückgabe sieht beispielhaft, wie folgt aus:

     {
     "_id": "62864bbe2eb3cb20879f9405",
     "data": [],
     "shape": {
     "root": {
          "children": [
          "page"
          ],
          "config": {
          "type": "RootForm",
          "props": {
               "name": "Form with dependency",
               "page": "page",
               "user": {
               "name": "admin ",
               "email": "",
               "id": "9"
               },
               "classification": "C__OBJTYPE__SERVER"
          }
          }
     },
     "page": {
          "children": [
          "Attribute1652968394906021170002572071178",
          "Attribute1652968394927036554591972381756",
          "Attribute1653044325681014562436038700444",
          "Attribute165304432570104575271313868843",
          "Attribute1653044340696047510895312740087"
          ],
          "config": {
          "type": "FormPage"
          }
     },
     "Attribute1652968394906021170002572071178": {
          "children": [],
          "config": {
          "type": "Attribute",
          "props": {
               "attribute": "C__CATG__MODEL.manufacturer",
               "defaultLabel": "Manufacturer (Model)",
               "label": "",
               "required": false,
               "isSystemRequired": false,
               "categoryLabel": "Model",
               "type": "dialog_plus",
               "hidden": false,
               "defaultValue": "5"
          }
          }
     },
     "Attribute1652968394927036554591972381756": {
          "children": [],
          "config": {
          "type": "Attribute",
          "props": {
               "attribute": "C__CATG__MODEL.title",
               "defaultLabel": "Model (Model)",
               "label": "",
               "required": false,
               "isSystemRequired": false,
               "categoryLabel": "Model",
               "type": "dialog_plus",
               "parent": "C__CATG__MODEL.manufacturer",
               "hidden": false,
               "defaultValue": null
          }
          }
     },
     "Attribute1653044325681014562436038700444": {
          "children": [],
          "config": {
          "type": "Attribute",
          "props": {
               "attribute": "C__CATG__CONTRACT_ASSIGNMENT.connected_contract",
               "defaultLabel": "Assigned contract (Contract assignment)",
               "label": "",
               "required": false,
               "isSystemRequired": false,
               "categoryLabel": "Contract assignment",
               "type": "object_browser"
          }
          }
     },
     "Attribute165304432570104575271313868843": {
          "children": [],
          "config": {
          "type": "Attribute",
          "props": {
               "attribute": "C__CATG__CONTRACT_ASSIGNMENT.contract_start",
               "defaultLabel": "Contract begin (Contract assignment)",
               "label": "",
               "required": false,
               "isSystemRequired": false,
               "categoryLabel": "Contract assignment",
               "type": "date",
               "parent": "C__CATG__CONTRACT_ASSIGNMENT.connected_contract"
          }
          }
     },
     "Attribute1653044340696047510895312740087": {
          "children": [],
          "config": {
          "type": "Attribute",
          "props": {
               "attribute": "C__CATG__CONTRACT_ASSIGNMENT.contract_end",
               "defaultLabel": "Contract end (Contract assignment)",
               "label": "",
               "required": false,
               "isSystemRequired": false,
               "categoryLabel": "Contract assignment",
               "type": "date",
               "parent": "C__CATG__CONTRACT_ASSIGNMENT.connected_contract"
          }
          }
     }
     },
     "instance": "61e6a8e6f5e31b297009319a",
     "published": true,
     "updated": "2022-05-20T11:09:49.194Z",
     "created": "2022-05-19T13:53:02.143Z",
     "name": "Form with dependency",
     "__v": 0,
     "identifier": "form-with-dependency-62864bbe"
     }

### DELETE /api/form/{ID}

Über das DELETE Verb kann ein bestimmtes Form gelöscht werden. Die Rückgabe enthält die Formular-Daten.

     DELETE http://localhost:3000/api/form/6245bf4f36f695945b3df9be
     Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI2MWU2YThlNmY1ZTMxYjI5NzAwOTMxOWEiLCJuYW1lIjoic2VsY3VrIiwic3ViIjoiJDJhJDEwJFJ4YlRybVpUVXlXc1NSQ2VZTFR6enVBZXJZTUF1dUlsNU5qOWt5RFN4WXlFL0NsdG1iLmY2IiwiaWF0IjoxNjU3MjkyNTAxLCJleHAiOjE2NTcyOTYxMDF9.yEZAjFAGpOCbDsJuI_vqot5J75MOE0bKPPn8osQS0Ik




### PUT /api/form/{ID}

Dieser Endpunkt ermöglicht die Editierung eines Formulars. Hierbei müssen im JSON-Body lediglich, die zu verändernden Attribute angegeben werden.

### POST /api/form

Zur Erstellung neuer Formulare muss dieser Endpunkt genutzt werden. Die Definition erfolgt über JSON und muss folgende Struktur aufweisen:

     {
     // Name des Forms
     "name": "My Form",
     // Struktur
     "shape": {
     ...
     },
     // Veröffentlichungsstatus
     "published": false
     }

Die Struktur des Forms wird unter shape angegeben. Generell wurde sie entworfen, um eine normalisierte und hierarchiesche Struktur abbilden zu können. Dazu enthält sie auf  
der ersten Ebene alle verfügbaren Knoten-Elemente. Hierzu zählen nicht nur Überschriften, Texte, Trennlinien, i-doit Kategorie-Attribute sondern auch Seiten.

> Es ist sicherzustellen, dass die Knoten-IDs (root, SEITE\_1, SEITE\_2,…) einzigartig sind und keine Wiederholungen aufweisen.

     {
     "shape": {
     // Einstiegsknoten
     "root": {
          ..config..
     },
     // Seite 1
     "SEITE_1": {
          ..config..
     },
     // Seite 2
     "SEITE_2": {
          ..config..
     },
     // Überschrift 1
     "ÜBERSCHRIFT_1": {
          ..config..
     },
     // TEXT 1
     "TEXT_1": {
          ..config..
     }
     }
     }

Die verfügbaren Konfigurationsparameter eines Knotens sind typen-abhängig. Generell kann folgende Datenstruktur ausgemacht werden:

     {
     "KNOTEN_1": {
     // Welche Knoten sind in "KNOTEN_1" enthalten - Angabe der Knoten-ID
     "children": [
          "KNOTEN_1.1",
          "KNOTEN_1.2"
     ],
     // Konfigurationsparameter zu "KNOTEN_1"
     "config": {
          // Typ des Knotens
          "type": "KNOTEN_TYP",
          // Direkte Konfigurationsparameter
          "props": {
          "parameter_1": "",
          "parameter_2": "",
     [
     ...
     ]
     }
     }
     }
     }

Besonders wichtig hierbei ist der Knoten root. Dieser stellt den Einstiegspunkt dar auf deren Basis ein Form hierarchisch aufgebaut wird.

                    ┌──────ROOT──────┐
                    │                │
                    │                │
                    ▼                ▼
          ┌─────────Seite 1───┐      Seite 2────────────┬────────┬───────────┐
          │           │       │            │            │        │           │
          │           │       │            │            │        │           │
          │           │       │            │            │        │           │
          │           │       │            ▼            │        │           │
          │           │       │         Attribut 2      │        │           │
          ▼           │       ▼                         │        │           │
     Überschrift 1    │    Text 1                       ▼        │           │
                      │                             Attribut 3   │           │
                      │                                          │           │
                      │                                          ▼           │
                      ▼                                      Attribut 4      │
                 Attribut 1                                                  │
                                                                             ▼
                                                                        Text 2

Im folgenden ist eine vollständige Struktur eines Forms, welches aus zwei Seiten (“SEITE\_1” und “SEITE\_2”) besteht. Dabei beinhaltet jede Seite eine Überschrift und eine  
Textbeschreibung.

     {
     "shape": {
     // Root-Knoten
     // Enthält Meta-Informationen sowie die Basisstruktur
     "root": {
          // Beinhaltet die IDs der Pages
          "children": [
          "SEITE_1",
          "SEITE_2"
          ],
          // Meta-Informationen
          "config": {
          // Knoten-Type - Muss zwingend als RootForm angegeben werden
          "type": "RootForm",
          "props": {
               // Name des Formulars
               "name": "My Form",
               // Initial zu ladende Page
               "page": "SEITE_1",
               // Benutzerinformationen basierend auf dem i-doit Benutzer
               "user": {
               "name": "admin",
               "email": "admin@i-doit.com",
               "id": "9"
               },
               // Zugrundeliegender Objekttyp
               "classification": "C__OBJTYPE__SERVER"
          }
          }
     },
     // Definition der 1. Seite
     "SEITE_1": {
          // Seite beinhaltet "ÜBERSCHRIFT_1" und "TEXT_1"
          "children": [
          "ÜBERSCHRIFT_1",
          "TEXT_1"
          ],
          "config": {
          // Gibt an, dass es sich bei diesem Knoten um eine Seite handelt
          "type": "FormPage",
          "props": {}
          }
     },
     // Analoger Aufbau wie bereits "SEITE_1"
     "SEITE_2": {
          // Beinhaltet "ÜBERSCHRIFT_2" und "TEXT_2"
          "children": [
          "ÜBERSCHRIFT_2",
          "TEXT_2"
          ],
          "config": {
          "type": "FormPage",
          "props": {}
          }
     },
     // ...
     "ÜBERSCHRIFT_1": {
          "children": [],
          "config": {
          "type": "Headline",
          "props": {
               "label": "Page 1 Headline",
               "size": "h1"
          }
          }
     },
     "TEXT_1": {
          "children": [],
          "config": {
          "type": "Text",
          "props": {
               "text": "Page 1 Text",
               "placeholder": "Enter your text"
          }
          }
     },
     "ÜBERSCHRIFT_2": {
          "children": [],
          "config": {
          "type": "Headline",
          "props": {
               "label": "Page 2 Headline",
               "size": "h1"
          }
          }
     },
     "TEXT_2": {
          "children": [],
          "config": {
          "type": "Text",
          "props": {
               "text": "Page 2 Text",
               "placeholder": "Enter your text"
          }
          }
     }
     }
     }

Typen
-----

Im folgenden Abschnitt werden alle verfügbaren Knotentypen behandelt und deren Konfigurationen beschrieben.

### Trennlinie

     {
     "Dividingline165731154526401147116484517714": {
     "children": [],
     "config": {
          // Type des Knotens: Trennlinie
          "type": "Dividing line",
          "props": {
          // Dicke der Trennlinie
          "height": 1
          }
     }
     }
     }

### Text

     {
     "Text165729439981501359363935038671": {
     "children": [],
     "config": {
          // Type des Knotens: Text
          "type": "Text",
          "props": {
          // Anzuzeigender Text
          "text": "Page 2 Text",
          // Platzhalter: Wird angezeigt, sofern der Inhalt im Frontend geleert wird
          "placeholder": "Enter your text",
          // Sichtbarkeit: Soll das Element versteckt werden?
          "hidden": true
          }
     }
     }
     }

### Überschrift

     {
     "Headline165729439333006517788648825422": {
     "children": [],
     "config": {
          // Type des Knotens: Überschrift
          "type": "Headline",
          "props": {
          // Inhalt der Überschrift
          "label": "Page 2 Headline",
          // Größe: Mögliche Werte sind h1, h2 oder h3
          "size": "h1"
          }
     }
     }
     }

### i-doit Kategorieattribute

Dieser Typ ist im Vergleich zu den vorherigen Typen komplexer und enthält daher eine größere Anzahl an Konfigurationsparametern. Zu dem können sich eben diese Parameter je  
nach Typ des Kategorieattributes noch weiter unterscheiden.

Die grundlegende Datenstruktur wird im folgenden am Beispiel des Attributes Allgemein > Bezeichnung beschrieben:

     {
     "Attribute165731273460305039947937820184": {
     "children": [],
     "config": {
          // Type des Knotens: Kategorieattribut
          "type": "Attribute",
          "props": {
          // Attribut-ID: Zusammensetzung aus der Konstante der Kategorie und des technischen Attributidentifikators
          "attribute": "C__CATG__GLOBAL.title",
          // Standardmäßige Bezeichnung des Feldes im Formular, sofern "label" nicht angegeben wurde
          "defaultLabel": "Bezeichnung (Allgemein)",
          // Feldbezeichnung
          "label": "BEZEICHNUNG",
          // Handelt es sich um ein Pflichtfeld?
          "required": false,
          // Wird das Attribut i-doit-seitig vorausgesetzt? Nativ oder aber über die Validierungskonfiguration.
          "isSystemRequired": false,
          // Label der Kategorie
          "categoryLabel": "Allgemein",
          // Attributtyp
          "type": "text",
          // Ist das Feld sichtbar?
          "hidden": false,
          // Standardwert
          "defaultValue": "Vorausgefüllter Wert"
          }
     }
     }
     }

### Metainformationen zu Attributen

Einige Konfiguratiosparameter werden von der Forms-Addon-API vorgegeben. Sie können sowohl aus statischen aber auch dynamischen Werten bestehen:

*   **attribute**\*: statischer Wert
*   **type**\* : statischer Wert, gibt den Attributtypen wieder
*   **isSystemRequired** : variabler Wert, wird auf Basis der Validierung oder nativ berechnet

> Dieser Parameter überschreibt **required**, sofern das Attribut system-seitig vorausgesetzt wird.

*   **defaultValue** : variabler Wert, wird vorausgefüllt, sofern der Objekttyp ein Default-Template adressiert, welches ein Wert für das Attribut definiert

> Eine fehlerhafte Angabe von **isSystemRequired** wird zwangsläufig in einen Fehler beim Submit des Formulars  
> führen, sofern **required** nicht _true_ ist.
> 
> **defaultValue** ist nicht zwingend notwendig, sofern die Werte aus dem Default-Template nicht berücksichtigt werden sollen.

All diese Informationen können, wie bereits erwähnt, über die Forms-Addon-API ermittelt werden:

     GET https://idoit-instance/forms/api/attribute?category=C__CATG__GLOBAL,C__CATG__ACCOUNTING&class=C__OBJTYPE__SERVER

Hierbei enthält category eine kommaseparierte Liste an Kategoriekonstanten.  
class hingegen enthält die Objekttypkonstante und wird benötigt, um **defaultValue** zu ermitteln. Die Rückgabe sieht beispielhaft wie folgt aus:

     [
     {
     "id": "C__CATG__GLOBAL.title",
     "title": "Bezeichnung",
     "type": "text",
     "isSystemRequired": false,
     "defaultValue": "SERVER_TEMPLATE",
     "parent": null,
     "children": null
     },
     {
     "id": "C__CATG__GLOBAL.purpose",
     "title": "Einsatzzweck",
     "type": "dialog_plus",
     "isSystemRequired": false,
     "defaultValue": "7",
     "parent": null,
     "children": null
     },
     {
     "id": "C__CATG__GLOBAL.category",
     "title": "Kategorie",
     "type": "dialog_plus",
     "isSystemRequired": false,
     "defaultValue": "2",
     "parent": null,
     "children": null
     },
     {
     "id": "C__CATG__GLOBAL.sysid",
     "title": "SYS-ID",
     "type": "text",
     "isSystemRequired": false,
     "defaultValue": "SYSID_1655124042",
     "parent": null,
     "children": null
     },
     {
     "id": "C__CATG__GLOBAL.cmdb_status",
     "title": "CMDB-Status",
     "type": "dialog",
     "isSystemRequired": false,
     "defaultValue": "6",
     "parent": null,
     "children": null
     },
     {
     "id": "C__CATG__GLOBAL.tag",
     "title": "Tags",
     "type": "multiselect",
     "isSystemRequired": false,
     "defaultValue": null,
     "parent": null,
     "children": null
     },
     {
     "id": "C__CATG__GLOBAL.description",
     "title": "Beschreibung",
     "type": "commentary",
     "isSystemRequired": false,
     "defaultValue": "<p>Standardbeschreibung des Default-Templates<\/p>",
     "parent": null,
     "children": null
     }
     ]

### Sonderfall: Feldabhängigkeiten

i-doit verfügt über Attribute, welche eine Abhängigkeit zu einem anderen Attribut innerhalb der Kategorie aufweist. Ein sehr einfaches Beispiel ist hierbei das  
Attribut Modell > Modell, welches von Modell > Hersteller abhängt.

Hierfür enthält das Forms-Addon Frontend Kontrollmechanismen, um beispielsweise die Nutzung von Modell > Modell (Child) ohne  
Modell > Hersteller erkennt und in diesem Fall das Parentattribut automatisch hinzufügt.

Diese Attribute lassen sich aufgrund ihrer Metadaten identifizieren. Hierbei enthält das Childattribut eine **parent**\- und das Parentattribut eine **children**\-Information:

GET https://idoit-instance/forms/api/attribute?category=C__CATG__MODEL&class=C__OBJTYPE__SERVER
 
     [
     {
     "id": "C__CATG__MODEL.manufacturer",
     "title": "Hersteller",
     "type": "dialog_plus",
     "isSystemRequired": false,
     "defaultValue": "-1",
     "parent": null,
     "children": [
          {
          "id": "C__CATG__MODEL.title",
          "title": "Modell",
          "type": "dialog_plus",
          "isSystemRequired": false,
          "parent": "C__CATG__MODEL.manufacturer"
          }
     ]
     },
     {
     "id": "C__CATG__MODEL.title",
     "title": "Modell",
     "type": "dialog_plus",
     "isSystemRequired": false,
     "defaultValue": "-1",
     "parent": {
          "id": "C__CATG__MODEL.manufacturer",
          "title": "Hersteller",
          "type": "dialog_plus",
          "isSystemRequired": false
     },
     "children": null
     },
     [...]
     ]

Die Definition der Knoten für solche Abhängigkeitsstrukturen sieht hingegen wie folgt aus:

     {
     // Hersteller: Enthält keinerlei Informationen zur Abhängigkeit
     "Attribute165731798525604834639173302364": {
     "children": [],
     "config": {
          "type": "Attribute",
          "props": {
          "attribute": "C__CATG__MODEL.manufacturer",
          "defaultLabel": "Hersteller (Modell)",
          "label": "",
          "required": false,
          "isSystemRequired": false,
          "categoryLabel": "Modell",
          "type": "dialog_plus"
          }
     }
     },
     // Modell: Parameter "parent" adressiert "Hersteller", um die Abhängigkeit zu definieren
     "Attribute165731798528807005258890749957": {
     "children": [],
     "config": {
          "type": "Attribute",
          "props": {
          "attribute": "C__CATG__MODEL.title",
          "defaultLabel": "Modell (Modell)",
          "label": "",
          "required": false,
          "isSystemRequired": false,
          "categoryLabel": "Modell",
          "type": "dialog_plus",
          "parent": "C__CATG__MODEL.manufacturer",
          "defaultValue": null,
          "hidden": false
          }
     }
     }
     }