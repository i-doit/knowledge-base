# Namespace cmdb.reports

### cmdb.reports.read

Display report.

**Request parameters**

None

**Response**

JSON key **result** contains an array of JSON objects.

| **Key** | **JSON data type** | **Description** |
| --- | --- | --- |
| **id** | String | Identifier |
| **category** | String | Attribute Category in category Global |
| **title** | String | Title of the report |
| **description** | String | Report Description |
| **created** | String | When was is it created |

Example

**Request**
<br>Body:
```
{
"version": "2.0",
"method": "cmdb.reports.read",
"params": {
    "apikey": "xxx",
    "language": "en"
},
"id": 1
}
```
**Response**
<br>Body:
```
{
"id": 1,
"jsonrpc": "2.0",
"result": [
    {
    "id": "11",
    "category": "Changes",
    "title": "Changed objects from today",
    "description": "Shows objects which have been created or changed for today. Relation objects are excluded.",
    "created": "2016-08-31 15:23:17"
    },
    {
    "id": "7",
    "category": "Changes",
    "title": "Changed objects last 24 hours",
    "description": "Shows objects which have been created or changed for the last 24 hours. Relation objects are excluded.",
    "created": "2016-08-31 15:09:36"
    },
    {
    "id": "8",
    "category": "Changes",
    "title": "Changed objects last 7 days",
    "description": "Shows objects which have been created or changed for the last 7 days. Relation objects are excluded.",
    "created": "2016-08-31 15:11:29"
    }
]
}
```

Or you can also use the parameter "id" in your request  to get the corresponding report
**Request parameters**

| **Key** | **JSON data type** | **Description** |
| --- | --- | --- |
| **id** | String | Identifier |

**Response**

JSON key **result** contains an array of JSON objects..

Example

**Request**
<br>Body:
```
{
"version": "2.0",
"method": "cmdb.reports.read",
"params": {
    "id": "3",
    "apikey": "xxx",
    "language": "en"
},
"id": 1
}
```
**Response**
<br>Body:
```
{
"id": 1,
"jsonrpc": "2.0",
"result": [
    {
    "Title": "backup001",
    "Object type": "LC__CMDB__OBJTYPE__SERVER",
    "Last change": "<span data-date="2020-02-14 08:34:02" class="hide"></span>2020-02-14 - 08:34",
    "Last change by": "admin"
    },
    {
    "Title": "Backup Server",
    "Object type": "LC__CMDB__OBJTYPE__VIRTUAL_SERVER",
    "Last change": "<span data-date="2020-02-14 08:23:50" class="hide"></span>2020-02-14 - 08:23",
    "Last change by": "admin"
    }
]
}
```
