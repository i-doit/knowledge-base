---
title: URL-Router Add-on
description: A small "Router" add-on that implements additional URL routes for convenient access to objects in i-doit
lang: en
---

A small "Router" add-on that implements additional URL routes for convenient access to objects in i-doit.

## Routes

When describing the routes, we use only the absolute path: Instead of `http://your-idoit.int/open-object/server-abc` we write
`/open-object/server-abc`. Please note that the parameters should be passed [URL-encoded](https://en.wikipedia.org/wiki/Percent-encoding).

### Open object by exact name `/open-object/{object title}` (case-sensitive)

Opening the URL `/open-object/client001` triggers the internal logic to search for an object that **exactly** matches "client001" and redirects to that object. If "client001" either cannot be found or returns multiple results, you are redirected to the search instead.

### Open object by similar name `/open-object-like/{object title}` (case-insensitive)

Similar to `/open-object/{object-title}` this route will try to find an object by its title. If we call it with "client001" and no exact match can be found, this route will continue searching for objects whose names start with "client001"
(for example "client00123").

If this also fails, the search will continue to find objects that contain "client001" anywhere in their name
(for example "my client00123 laptop").

If either no exact match or multiple matches are found, you are redirected to the search.

### Open objects by primary IP address `/open-object-by-ip/{ip address}`

Opening the URL `/open-object-by-ip/127.0.0.1` or `/open-object-by-ip/2001:0db8:85a3:0000:0000:8a2e:0370:7334` triggers the internal logic to search for an object with the corresponding primary IP address. For IPv6 addresses, it does not matter whether you use the short or long form (short: `::1`, or long: `0000:0000:0000:0000:0000:0000:0000:0001`). Similar to `/open-object/{object title}` this route only finds **exact** matches.

If either no exact match or multiple matches are found, you are redirected to the search.

### Open objects by exact inventory number `/open-object-by-inventory/{inventory no}` (case-sensitive)

Opening the URL `/open-object-by-inventory/123` triggers the internal logic to search for an object with the corresponding inventory number. Similar to `/open-object/{object title}` this route also finds only **exact** matches (including case sensitivity).

If either no exact match or multiple matches are found, you are redirected to the search.

### Open objects by similar inventory number `/open-object-like-inventory/{inventory}` (case-insensitive)

Similar to `/open-object-by-inventory/{inventory no}` this route will try to find an object by its inventory number. If we call it with "123" and no exact match can be found, this route will continue searching for inventory numbers that start with "123"
(for example "123456").

If this also fails, the search will continue to find inventory numbers that contain "123" anywhere in their name
(for example "000123456").

If either no exact match or multiple matches are found, you are redirected to the search.

## Releases

| Version | Date       | Changelog       |
| ------- | ---------- | --------------- |
| 1.0.0   | 2026-03-11 | Initial release |
