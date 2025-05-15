---
title: cmdb.reports
description: cmdb.reports
icon: material/api
#status: updated
lang: en
---

# cmdb.reports

!!! example "Work in Progress"

## cmdb.reports.read

Display the result of a report.

### Request parameters

| Key        | JSON data type | Required | Description                                  |
| ---------- | -------------- | -------- | -------------------------------------------- |
| **id**     | String         | No       | Identifier of the Report                     |
| **limit**  | Integer        | No       | Limit displayed results                      |
| **offset** | Integer        | No       | Start displaying results from defined offset |

### Response parameters

JSON key **result** contains the Report result.

### Example

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.reports",
      "params": {
        "apikey": "xxx",
        "language": "en"
      },
      "id": 1
    }
    ```

=== "Response body"

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": [
        {
          "id": "1",
          "category": "Global",
          "title": "My first Report",
          "description": "",
          "created": "2023-08-14 13:02:48"
        }
      ]
    }
    ```

=== "Request boy with Identifier"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.reports",
      "params": {
        "id": 1,
        "apikey": "xxx",
        "language": "en"
      },
      "id": 1
    }
    ```

=== "Response body with Identifier"

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": [
        {
          "Title": "admin "
        },
        {
          "Title": "Admin"
        },
        ....
      ]
    }
    ```

=== "Request boy with limit and offset"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.reports",
      "params": {
        "id": 1,
        "limit": 2,
        "offset": 2,
        "apikey": "xxx",
        "language": "en"
      },
      "id": 1
    }        {
          "Title": "admin "
        },
        {
          "Title": "Admin"
        },
    ```

=== "Response body with limit and offset"

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": [
        {
          "Title": "admin "
        },
        {
          "Title": "Admin"
        },
      ]
    }
    ```
