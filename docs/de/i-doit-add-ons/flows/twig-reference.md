---
title: i-doit twig Template Editor Referenz
description: i-doit twig Template Editor Referenz
icon:
status:
lang: de
---

# i-doit twig Template Editor Referenz

Diese Referenz bietet eine Übersicht über die verfügbaren Template-Funktionen und -Variablen in i-doit. Die Beispiele lassen sich im Flow hauptsächlich bei der Aktion "API-Aufruf" und "E-Mail schicken" verwenden.

## Schnelleinstieg

### Verfügbare globale Variablen

- `{{ object }}`: Das aktuelle i-doit Objekt. Zeigt Informationen zum Objekt an
```text
 {
    "id": "1337",
    "title": "Server",
    "status": "Normal",
    "created": "2025-11-04 17:08:20",
    "created_by": "admin",
    "changed": "2025-11-06 16:22:31",
    "changed_by": "admin",
    "purpose": "Production",
    "category": "Other",
    "sysid": "SYSID_1762354456",
    "cmdb_status": "in operation",
    "type": "Server",
    "tag": null,
    "description": "",
    "_created": "<span data-date=\"2025-11-04 17:08:20\" class=\"hide\"><\/span>2025-11-04 17:08:20 (admin)",
    "_changed": "<span data-date=\"2025-11-06 16:22:31\" class=\"hide\"><\/span>2025-11-06 16:22 (admin)",
    "_tag": ""
}
```

- `date`: Aktuelles Datum (Format: YYYY-MM-DD)

```text
 2025-11-06
```

- `time`: Aktuelle Uhrzeit (Format: HH:mm)

```text
17:39
```

- `user`: Der aktuelle Benutzer

```text
 {
    "id": "9",
    "title": "admin",
    "status": "Normal",
    "created": "2025-10-31 11:18:22",
    "created_by": "system",
    "changed": "2025-10-31 11:18:22",
    "changed_by": "system",
    "purpose": null,
    "category": "Other",
    "sysid": "SYSID_1280838787",
    "cmdb_status": "in operation",
    "type": "Persons",
    "tag": null,
    "description": null,
    "_created": "<span data-date=\"2025-10-31 11:18:22\" class=\"hide\"><\/span>2025-10-31 11:18:22 (system)",
    "_changed": "<span data-date=\"2025-10-31 11:18:22\" class=\"hide\"><\/span>2025-10-31 11:18 (system)",
    "_tag": ""
}
```

### Basis-Attribute eines Objekts anzeigen

```twig
{# Globale Kategorie - Grundlegende Informationen #}
Objekt-Titel: {{ object.C__CATG__GLOBAL.title }}
Status: {{ object.C__CATG__GLOBAL.status }}
Beschreibung: {{ object.C__CATG__GLOBAL.description }}

{# Aktuelles Datum/Zeit #}
{# YYYY-MM-DD #}
Datum: {{ date }}
{# HH:mm #}
Zeit: {{ time }}
```

## Kategorien und Einträge

### Zugriff auf Kategorie-Daten

```twig
{# Beispiel: Modell-Kategorie (Einzeleintrag) #}
Hersteller: {{ object.C__CATG__MODEL.manufacturer }}
Modell: {{ object.C__CATG__MODEL.title }}

{# Beispiel: IP-Adressen (Multi-Einträge) #}
{% for eintrag in object.C__CATG__IP %}

IP: {{ eintrag.ipv4_address }}
Hostname: {{ eintrag.hostname }}
{% endfor %}
```

### Standort

```twig
{# Standort-Informationen des aktuellen Objekts #}
Objekt: {{ object.C__CATG__GLOBAL.title }}
{# Der 'parent'-Wert enthält die ID des übergeordneten Standorts #}
{% if object.C__CATG__LOCATION.parent|id %}
{# Mit object(ID) laden wir das übergeordnete Objekt #}
{% set parent = object(object.C__CATG__LOCATION.parent|id) %}
Übergeordneter Standort: {{ parent.C__CATG__GLOBAL.title }}
{% else %}
Kein übergeordneter Standort definiert
{% endif %}
```

### IP-Adressen mit Netzwerk

```twig
{% for eintrag in object.C__CATG__IP %}
{# Basis IP-Informationen #}
IP: {{ eintrag.ipv4_address }}
Hostname: {{ eintrag.hostname }}

{# Netzwerk-Details #}
{% if eintrag.net|id %}
{% set netz = object(eintrag.net|id) %}
Netzwerk: {{ netz.C__CATG__GLOBAL.title }}
{% endif %}
{% endfor %}
```

### Kontaktzuweisungen

```twig
{% for eintrag in object.C__CATG__CONTACT %}
Rolle: {{ eintrag.role }}

{# Verknüpfte Person laden #}
{% if eintrag.contact|id %}
{% set person = object(eintrag.contact|id) %}
Name: {{ person.C__CATG__GLOBAL.title }}
{% if person.C__CATS__PERSON is defined %}
E-Mail: {{ person.C__CATS__PERSON.email }}
Abteilung: {{ person.C__CATS__PERSON.department }}
{% endif %}
{% endif %}
{% endfor %}
```

## Verknüpfte Objekte

### Objekt per ID laden

```twig
{# Ein bestimmtes Objekt laden #}
{% set anderes_objekt = object(123) %}
{{ anderes_objekt.C__CATG__GLOBAL.title }}

{# Verknüpftes Objekt aus Attribut laden #}
{% if eintrag.parent|id %}
{% set parent = object(eintrag.parent|id) %}
{{ parent.C__CATG__GLOBAL.title }}
{% endif %}
```

### Mehrere verknüpfte Objekte

```twig
{# Beispiel: Software-Installationen #}
{% for eintrag in object.C__CATG__APPLICATION %}
ID: {{ eintrag._entry_id }}
{% if eintrag.application|id %}
{% set software = object(eintrag.application|id) %}
Software: {{ software.C__CATG__GLOBAL.title }}
Version: {{ eintrag.version }}
{% endif %}
{% endfor %}
```

## Fortgeschrittene Beispiele

### Liste von Werten sammeln

```twig
{# IP-Adressen sammeln #}
{% set ips = [] %}
{% for eintrag in object.C__CATG__IP %}
{% set ips = ips|merge([eintrag.ipv4_address]) %}
{% endfor %}
Alle IPs: {{ ips|join(', ') }}
```

## Fehlerbehandlung

### Attribut-Prüfung

```twig
{# Prüfen ob Kategorie existiert #}
{% if object.C__CATG__IP is defined %}
{# Prüfen ob Attribut existiert #}
{% for eintrag in object.C__CATG__IP %}
{% if eintrag.primary_hostaddress is defined %}
{{ eintrag.primary_hostaddress }}
{% endif %}
{% endfor %}
{% endif %}

{# Alternative mit default-Filter #}
{{ object.C__CATG__CPU.title|default('Kein Titel') }}
```

### Verknüpfungen prüfen

```twig
{# Beispiel: Sicherer Zugriff auf Kontakte #}
{% for eintrag in object.C__CATG__CONTACT %}
Name: {{ eintrag.contact }}
Rolle: {{ eintrag.role }} {% if eintrag.primary == 'Yes' %}(Primärkontakt)

{% endif %}
{% endfor %}
```

## Nützliche Funktionen

### Text übersetzen

```twig
{# Kategorie-Namen übersetzen #}
{{ trans('LC__CMDB__CATG__MODEL') }}

{# Status-Werte übersetzen #}
{{ trans('LC__RECORD_STATUS__NORMAL') }}
```

### Bedingungen und Filter

```twig
{# Nur primäre Kontakte #}
{% for eintrag in object.C__CATG__CONTACT %}
{% if eintrag.primary == 'Yes' %}
{{ eintrag.role }} (Primärkontakt)
{% endif %}
{% endfor %}

{# Mit Standardwert wenn leer #}
{{ eintrag.description|default('Keine Beschreibung') }}
```

### Nützliche Twig-Filter

```twig
{# Text formatieren #}
{% set text="text" %}
{# Großbuchstaben #}
{{ text|upper }}
{# Kleinbuchstaben #}
{{ text|lower }}
{# Ersten Buchstaben groß #}
{{ text|capitalize }}
{# Leerzeichen entfernen #}
{{ text|trim }}

{# Arrays/Listen bearbeiten #}
{% set liste = ['Server 1', 'Server 2', 'Server 3', 'Server 4', 'Server 5'] %}
{# Array zu String #}
Server-Liste: {{ liste|join(', ') }}
{# Erstes Element #}
Erster Server: {{ liste|first }}
{# Letztes Element #}
Letzter Server: {{ liste|last }}
{# Anzahl Elemente #}
Anzahl Server: {{ liste|length }}
{# Teilmenge (Start, Länge) #}
Erste drei Server: {{ liste|slice(0, 3)|join(', ') }}

{# Zahlen formatieren #}
{% set zahl="1234.56" %}
{# 1234.56 -> 1.234,56 #}
{{ zahl|number_format(2, ',', '.') }}
{# Absolutwert #}
{{ zahl|abs }}
{# Runden #}
{{ zahl|round }}
```

### Datum und Zeit formatieren

```twig
{# Aktuelles Datum/Zeit formatieren #}
{# 06.11.2025 #}
{{ date|date('d.m.Y') }}
{# 06. November 2025 #}
{{ date|date('d. F Y') }}
{# 14:30 #}
{{ time|date('H:i') }}

{# Datumsattribute formatieren #}
{% set creation = object.C__CATG__GLOBAL.created %}
Original: {{ object.C__CATG__GLOBAL.created }}
Formatiert: {{ creation|date('d.m.Y H:i') }}

{# Relative Zeitangaben #}
{{ creation|date_modify('+1 month')|date('d.m.Y') }}
```

### Bedingte Ausgaben und Vergleiche

```twig
{# Mehrfachbedingungen #}
{% if status == 'active' and (type == 'server' or type == 'client') %}
{# ... #}
{% endif %}

{# Switch/Case Alternative #}
{% set status = object.C__CATG__GLOBAL.status %}
{% set statusText = {
'2': 'Normal',
'3': 'Archiviert',
'4': 'Gelöscht'
}[status] | default('Unbekannt') %}

{# Ternärer Operator #}
{{ value ? 'Ja' : 'Nein' }}
{{ value ?: 'Standardwert' }}  {# Kurzform wenn value falsy #}
```
