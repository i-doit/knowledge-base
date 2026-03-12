---
title: URL-Router Add-on
description: A small "Router" Add-on that implements additional URL routes for convenience access to objects in i-doit
lang: en
---

A small "Router" Add-on that implements additional URL routes for convenience access to objects in i-doit.

## Routes

When describing the routes we just use the absolute path: instead of `http://your-idoit.int/open-object/server-abc` we write
`/open-object/server-abc`. Please note that the parameters should be passed [URL encoded](https://de.wikipedia.org/wiki/URL-Encoding).

### Open object via exact name `/open-object/{object title}` (case-sensitive)

Opening the URL `/open-object/client001` will trigger the internal logic to look for an object called **exactly** "client001" and
redirect to that object. If "client001" can either not be found or results in multiple results, you will be redirected to the
search instead.

### Open object via name `/open-object-like/{object title}` (case-insensitive)

Similar to `/open-object/{object-title}` this route will attempt to find an object by its title. If we call it with "client001"
and no exact match could be found this route will continue to look for objects with names that begin with "client001"
(for example "client00123").

If this also fails the search will continue to look for objects that have "client001" somewhere in their name
(for example "my client00123 laptop").

If either no exact or multiple matches are found you will be redirected to the search.

### Open objects via primary IP-address `/open-object-by-ip/{ip address}`

Opening the URL `/open-object-by-ip/127.0.0.1` or `/open-object-by-ip/2001:0db8:85a3:0000:0000:8a2e:0370:7334` will trigger the
internal logic to look for an object with the according primary IP-address. In case of IPv6 addresses it does not matter if you
use the short or long form (short: `::1`, or long: `0000:0000:0000:0000:0000:0000:0000:0001`). Similar to
`/open-object/{object title}` this route will only find **exact** matches

If either no exact or multiple matches are found you will be redirected to the search.

### Open objects via exact inventory number `/open-object-by-inventory/{inventory no}` (case-sensitive)

Opening the URL `/open-object-by-inventory/123` will trigger the internal logic to look for an object with the according inventory
number. Similar to `/open-object/{object title}` this route will only find **exact** matches (including case-sensitivity).

If either no exact or multiple matches are found you will be redirected to the search.

### Open objects via inventory number `/open-object-like-inventory/{inventory}` (case-insensitive)

Similar to `/open-object-by-inventory/{inventory no}` this route will attempt to find an object by its inventory number. If we
call it with "123" and no exact match could be found this route will continue to look for inventory numbers that begin with "123"
(for example "123456").

If this also fails the search will continue to look for inventory numbers that have "123" somewhere in their name
(for example "000123456").

If either no exact or multiple matches are found you will be redirected to the search.

## Releases

| Version | Date       | Changelog       |
| ------- | ---------- | --------------- |
| 1.0.0   | 2026-03-11 | Initial release |
