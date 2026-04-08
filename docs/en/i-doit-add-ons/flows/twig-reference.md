---
title: i-doit Twig Template Editor Reference
description: "This reference provides you with an overview of the available template functions and variables in i-doit."
icon:
status:
lang: en
---

# i-doit Twig Template Editor Reference

This reference provides you with an overview of the available template functions and variables in i-doit. The examples can be used primarily in the Flow actions "API call" and "Send email".

[![Flows](../../assets/images/de/i-doit-add-ons/flows/flows-uebersicht.png)](../../assets/images/de/i-doit-add-ons/flows/flows-uebersicht.png)

## Quick start

### Available Global Variables

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

- `date`: Current date (format: YYYY-MM-DD)

```text
 2025-11-06
```

- `time`: Current time (format: HH:mm)

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

### Displaying basic attributes of an object

```twig
{# Global category - Basic information #}
Object title: {{ object.C__CATG__GLOBAL.title }}
Status: {{ object.C__CATG__GLOBAL.status }}
Description: {{ object.C__CATG__GLOBAL.description }}

{# Current date/time #}
{# YYYY-MM-DD #}
Date: {{ date }}
{# HH:mm #}
Time: {{ time }}
```

## Categories and Entries

### Accessing category data

```twig
{# Example: Model category (single entry) #}
Manufacturer: {{ object.C__CATG__MODEL.manufacturer }}
Model: {{ object.C__CATG__MODEL.title }}

{# Example: IP addresses (multi-entries) #}
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
Parent location: {{ parent.C__CATG__GLOBAL.title }}
{% else %}
No parent location defined
{% endif %}
```

### IP addresses with network

```twig
{% for entry in object.C__CATG__IP %}
{# Basic IP information #}
IP: {{ entry.ipv4_address }}
Hostname: {{ entry.hostname }}

{# Network details #}
{% if entry.net|id %}
{% set network = object(entry.net|id) %}
Network: {{ network.C__CATG__GLOBAL.title }}
{% endif %}
{% endfor %}
```

### Contact assignments

```twig
{% for entry in object.C__CATG__CONTACT %}
Role: {{ entry.role }}

{# Load linked person #}
{% if entry.contact|id %}
{% set person = object(entry.contact|id) %}
Name: {{ person.C__CATG__GLOBAL.title }}
{% if person.C__CATS__PERSON is defined %}
Email: {{ person.C__CATS__PERSON.email }}
Department: {{ person.C__CATS__PERSON.department }}
{% endif %}
{% endif %}
{% endfor %}
```

## Linked Objects

### Loading an object by ID

```twig
{# Load a specific object #}
{% set other_object = object(123) %}
{{ other_object.C__CATG__GLOBAL.title }}

{# Load linked object from attribute #}
{% if entry.parent|id %}
{% set parent = object(entry.parent|id) %}
{{ parent.C__CATG__GLOBAL.title }}
{% endif %}
```

### Multiple Linked Objects

```twig
{# Example: Software installations #}
{% for entry in object.C__CATG__APPLICATION %}
ID: {{ entry._entry_id }}
{% if entry.application|id %}
{% set software = object(entry.application|id) %}
Software: {{ software.C__CATG__GLOBAL.title }}
Version: {{ entry.version }}
{% endif %}
{% endfor %}
```

## Advanced examples

### Collecting a list of values

```twig
{# Collect IP addresses #}
{% set ips = [] %}
{% for entry in object.C__CATG__IP %}
{% set ips = ips|merge([entry.ipv4_address]) %}
{% endfor %}
All IPs: {{ ips|join(', ') }}
```

## Error handling

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
{{ object.C__CATG__CPU.title|default('No title') }}
```

### Links Check

```twig
{# Example: Safe access to contacts #}
{% for entry in object.C__CATG__CONTACT %}
Name: {{ entry.contact }}
Role: {{ entry.role }} {% if entry.primary == 'Yes' %}(Primary contact)

{% endif %}
{% endfor %}
```

## Useful Functions

### Translate Text

```twig
{# Translate category names #}
{{ trans('LC__CMDB__CATG__MODEL') }}

{# Translate status values #}
{{ trans('LC__RECORD_STATUS__NORMAL') }}
```

### Conditions and filters

```twig
{# Only primary contacts #}
{% for entry in object.C__CATG__CONTACT %}
{% if entry.primary == 'Yes' %}
{{ entry.role }} (Primary contact)
{% endif %}
{% endfor %}

{# With default value when empty #}
{{ entry.description|default('No description') }}
```

### Useful Twig Filters

```twig
{# Format text #}
{% set text="text" %}
{# Uppercase #}
{{ text|upper }}
{# Lowercase #}
{{ text|lower }}
{# Capitalize first letter #}
{{ text|capitalize }}
{# Remove whitespace #}
{{ text|trim }}

{# Edit arrays/lists #}
{% set list = ['Server 1', 'Server 2', 'Server 3', 'Server 4', 'Server 5'] %}
{# Array to string #}
Server list: {{ list|join(', ') }}
{# First element #}
First server: {{ list|first }}
{# Last element #}
Last server: {{ list|last }}
{# Number of elements #}
Number of servers: {{ list|length }}
{# Subset (start, length) #}
First three servers: {{ list|slice(0, 3)|join(', ') }}

{# Format numbers #}
{% set number="1234.56" %}
{# 1234.56 -> 1,234.56 #}
{{ number|number_format(2, '.', ',') }}
{# Absolute value #}
{{ number|abs }}
{# Round #}
{{ number|round }}
```

### Date and time formatting

```twig
{# Format current date/time #}
{# 06.11.2025 #}
{{ date|date('d.m.Y') }}
{# 06. November 2025 #}
{{ date|date('d. F Y') }}
{# 14:30 #}
{{ time|date('H:i') }}

{# Format date attributes #}
{% set creation = object.C__CATG__GLOBAL.created %}
Original: {{ object.C__CATG__GLOBAL.created }}
Formatted: {{ creation|date('d.m.Y H:i') }}

{# Relative time references #}
{{ creation|date_modify('+1 month')|date('d.m.Y') }}
```

### Conditional outputs and comparisons

```twig
{# Multiple conditions #}
{% if status == 'active' and (type == 'server' or type == 'client') %}
{# ... #}
{% endif %}

{# Switch/Case alternative #}
{% set status = object.C__CATG__GLOBAL.status %}
{% set statusText = {
'2': 'Normal',
'3': 'Archived',
'4': 'Deleted'
}[status] | default('Unknown') %}

{# Ternary operator #}
{{ value ? 'Yes' : 'No' }}
{{ value ?: 'Default value' }}  {# Short form when value is falsy #}
```
