---
title: i-doit twig template editor reference
description: i-doit twig template editor reference
icon:
status:
lang: en
---

# i-doit twig template editor reference

This reference provides an overview of the available template functions and variables in i-doit. The examples can mainly be used in the flow for the "API call" and "Send email" actions.

## Quick start

### Available global variables

- `{{ object }}`: The current i-doit object. Displays information about the object
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

- `date`: Current date (Format: YYYY-MM-DD)

```text
 2025-11-06
```

- `time`: Current time (Format: HH:mm)

```text
17:39
```

- `user`: The current user

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

### Display basic attributes of an object

```twig
{# Global Category - Basic Information #}
Object Title: {{ object.C__CATG__GLOBAL.title }}
Status: {{ object.C__CATG__GLOBAL.status }}
Description: {{ object.C__CATG__GLOBAL.description }}

{# Current Date/Time #}
{# YYYY-MM-DD #}
Date: {{ date }}
{# HH:mm #}
Time: {{ time }}
```

## Categories and Entries

### Accessing Category Data

```twig
{# Example: Model Category (Single Entry) #}
Manufacturer: {{ object.C__CATG__MODEL.manufacturer }}
Model: {{ object.C__CATG__MODEL.title }}

{# Example: IP Addresses (Multi-Entries) #}
{% for entry in object.C__CATG__IP %}

IP: {{ entry.ipv4_address }}
Hostname: {{ entry.hostname }}
{% endfor %}
```

### Location

```twig
{# Location information of the current object #}
Object: {{ object.C__CATG__GLOBAL.title }}
{# The 'parent' value contains the ID of the parent location #}
{% if object.C__CATG__LOCATION.parent|id %}
{# With object(ID) we load the parent object #}
{% set parent = object(object.C__CATG__LOCATION.parent|id) %}
Parent Location: {{ parent.C__CATG__GLOBAL.title }}
{% else %}
No parent location defined
{% endif %}
```

### IP Addresses with Network

```twig
{% for entry in object.C__CATG__IP %}
{# Basic IP Information #}
IP: {{ entry.ipv4_address }}
Hostname: {{ entry.hostname }}

{# Network Details #}
{% if entry.net|id %}
{% set netz = object(entry.net|id) %}
Network: {{ netz.C__CATG__GLOBAL.title }}
{% endif %}
{% endfor %}
```

### Contact Assignments

```twig
{% for entry in object.C__CATG__CONTACT %}
Role: {{ entry.role }}

{# Load linked person #}
{% if entry.contact|id %}
{% set person = object(entry.contact|id) %}
Name: {{ person.C__CATG__GLOBAL.title }}
{% if person.C__CATS__PERSON is defined %}
E-Mail: {{ person.C__CATS__PERSON.email }}
Department: {{ person.C__CATS__PERSON.department }}
{% endif %}
{% endif %}
{% endfor %}
```

## Linked Objects

### Load Object by ID

```twig
{# Load a specific object #}
{% set anderes_objekt = object(123) %}
{{ anderes_objekt.C__CATG__GLOBAL.title }}

{# Load linked object from attribute #}
{% if entry.parent|id %}
{% set parent = object(entry.parent|id) %}
{{ parent.C__CATG__GLOBAL.title }}
{% endif %}
```

### Multiple Linked Objects

```twig
{# Example: Software Installations #}
{% for entry in object.C__CATG__APPLICATION %}
ID: {{ entry._entry_id }}
{% if entry.application|id %}
{% set software = object(entry.application|id) %}
Software: {{ software.C__CATG__GLOBAL.title }}
Version: {{ entry.version }}
{% endif %}
{% endfor %}
```

## Advanced Examples

### Collecting a List of Values

```twig
{# Collecting IP Addresses #}
{% set ips = [] %}
{% for entry in object.C__CATG__IP %}
{% set ips = ips|merge([entry.ipv4_address]) %}
{% endfor %}
All IPs: {{ ips|join(', ') }}
```

## Error Handling

### Attribute Check

```twig
{# Check if category exists #}
{% if object.C__CATG__IP is defined %}
{# Check if attribute exists #}
{% for entry in object.C__CATG__IP %}
{% if entry.primary_hostaddress is defined %}
{{ entry.primary_hostaddress }}
{% endif %}
{% endfor %}
{% endif %}

{# Alternative with default filter #}
{{ object.C__CATG__CPU.title|default('No Title') }}
```

### Check Links

```twig
{# Example: Safe Access to Contacts #}
{% for entry in object.C__CATG__CONTACT %}
Name: {{ entry.contact }}
Role: {{ entry.role }} {% if entry.primary == 'Yes' %}(Primary Contact){% endif %}
{% endfor %}
```

## Useful Functions

### Translations

```twig
{# Translate category names #}
{{ trans('LC__CMDB__CATG__MODEL') }}

{# Translate status values #}
{{ trans('LC__RECORD_STATUS__NORMAL') }}
```

### Conditions and Filters

```twig
{# Only primary contacts #}
{% for entry in object.C__CATG__CONTACT %}
{% if entry.primary == 'Yes' %}
{{ entry.role }} (Primary Contact)
{% endif %}
{% endfor %}

{# With default value if empty #}
{{ entry.description|default('No Description') }}
```

### Useful Twig Filters

```twig
{# Text formatting #}
{% set text="text" %}
{# Uppercase #}
{{ text|upper }}
{# Lowercase #}
{{ text|lower }}
{# Capitalize #}
{{ text|capitalize }}
{# Trim #}
{{ text|trim }}

{# Arrays/Lists #}
{% set liste = ['Server 1', 'Server 2', 'Server 3', 'Server 4', 'Server 5'] %}
{# Array zu String #}
Server list: {{ liste|join(', ') }}
{# First Element #}
First Server: {{ liste|first }}
{# Last Element #}
Last Server: {{ liste|last }}
{# Anzahl Elemente #}
Number of Servers: {{ liste|length }}
{# Teilmenge (Start, Länge) #}
First three Servers: {{ liste|slice(0, 3)|join(', ') }}

{# Numbers #}
{% set zahl="1234.56" %}
{# 1234.56 -> 1.234,56 #}
{{ zahl|number_format(2, ',', '.') }}
{# Absolute value #}
{{ zahl|abs }}
{# Rounding #}
{{ zahl|round }}
```

### Date and Time Formatting

```twig
{# Current date/time formatting #}
{# 06.11.2025 #}
{{ date|date('d.m.Y') }}
{# 06. November 2025 #}
{{ date|date('d. F Y') }}
{# 14:30 #}
{{ time|date('H:i') }}

{# Date attributes #}
{% set creation = object.C__CATG__GLOBAL.created %}
Original: {{ object.C__CATG__GLOBAL.created }}
Formatted: {{ creation|date('d.m.Y H:i') }}

{# Relative time indications #}
{{ creation|date_modify('+1 month')|date('d.m.Y') }}
```

### Conditional Outputs and Comparisons

```twig
{# Multiple Conditions #}
{% if status == 'active' and (type == 'server' or type == 'client') %}
{# ... #}
{% endif %}

{# Status Text Mapping #}
{% set status = object.C__CATG__GLOBAL.status %}
{% set statusText = {
'2': 'Normal',
'3': 'Archived',
'4': 'Deleted'
}[status] | default('Unknown') %}

{# Ternary Operator #}
{{ value ? 'Yes' : 'No' }}
{{ value ?: 'Default Value' }}  {# Short form if value falsy #}
```
