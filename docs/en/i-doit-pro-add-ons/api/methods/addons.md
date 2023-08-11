---
title: Namespace i-doit add-ons
description: Here you find API methods from Add-ons
icon: material/api
status: new
lang: en
---

# Namespace from idoit pro Add-ons

!!! example "Work in Progress

## analysis.dataquality.read

### Request parameters

| Key | JSON data typ | Required | Description |
| --- | --- | --- | --- |
| profileId | Integer | Yes | Profile identifier, for example: 1 |

#### Response

JSON key result contains a JSON object.

| Key | JSON data type | Description |
| --- | --- | --- |
Key
JSON data type
Description
objects
Array
Some information
averagePercent
Integer
Average Percent

### Examples

Request
Response
 {
    "version": "2.0",
    "method": "analysis.dataquality.read",
    "params": {
        "profileId": 1,
        "apikey": "xxx",
        "language": "en"
    },
    "id": 1
}
{
    "id": 1,
    "jsonrpc": "2.0",
    "result": {
        "objects": [],
        "averagePercent": 0
    }
}

