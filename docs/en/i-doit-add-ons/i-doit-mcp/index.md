---
title: i-doit MCP
description: "With the i-doit MCP add-on, you connect an AI assistant to your IT documentation via the Model Context Protocol."
icon:
status: new
lang: en
---
# i-doit MCP

The i-doit MCP [add-on](../index.md) connects your [IT documentation](../../glossary.md) to AI clients that support the Model Context Protocol (MCP). An AI assistant can then answer questions about your CMDB in ordinary language, for example "Which servers do we have in Hamburg?" or "Where is LAPTOP-42 located?".

The assistant always works with the permissions of the person its access token belongs to. It never sees or changes more than this person could in i-doit itself. Out of the box, access is read only. Writing has to be switched on explicitly, see [Write access](#write-access).

## Requirements

- i-doit 39 or newer. The address the AI client connects to (`src/mcp.php`) is part of i-doit 39.
- The [i-doit API add-on](../api/index.md), installed and active. Without it, category data cannot be read. Object types, the search and the general data of an object work without it.
- The JSON-RPC API switched on for the tenant: **Activate JSON-RPC API** under **Administration → Add-ons → JSON-RPC API** has to be set to **Yes**. While it is off, every request of an AI client is refused.
- An AI client that supports MCP over HTTP.

## Installation

The add-on is installed like every other add-on, see [Add-ons](../index.md). After the installation, you find it in the main menu under **Add-ons → i-doit MCP** with three pages:

- **How to connect**
- **Access tokens**
- **Request log**

## Assigning rights

Under **Administration → Permissions → i-doit MCP**, [permissions for persons and person groups](../../efficient-documentation/permission-management/index.md) can be adjusted:

| Right | Purpose |
| --- | --- |
| **Generate a client configuration** | Open the **How to connect** page and generate a client configuration |
| **Request log** | View the request log (View) and clear it (Delete) |
| **Manage access tokens** | View, create, enable and disable access tokens (View, Edit) and delete them (Delete) |
| **Grant write access to access tokens** | Mark access tokens for writing or make them read-only again |

Holding an access token is what admits a client to the MCP server. There is no separate permission for it. To withdraw access, disable or delete the token.

## Connecting an AI client

Open **Add-ons → i-doit MCP → How to connect**. The page shows the section **Connect your AI assistant in 3 steps**, a **Setup status** and the **Client configuration**.

The **Setup status** checks whether the API add-on is available and whether the JSON-RPC API is switched on for the tenant. Only when both are met can tool calls read data.

### 1. Get an access token

Create a token on the **Access tokens** page with **Create token**:

1. Select the **Person object** the token belongs to. Only person objects can be selected.
2. Optionally enter a **Label**, for example the device or client the token is used on.
3. Save.

The new token is shown only once. Copy it right away. i-doit only stores a fingerprint, so the token cannot be displayed again later. If you lose it, delete the token and create a new one.

A token always belongs to the tenant in which it was created and only works there. The person of a token cannot be changed afterwards. Create a new token for another person instead.

### 2. Generate the configuration

Paste the token into the **Client configuration** section and click **Generate configuration**. You receive two blocks to copy:

- a configuration file for clients that are configured via a file
- a command line for clients that are configured on the command line

Both blocks already contain the address of your i-doit installation and your token. The token field is optional. If you leave it empty, the blocks contain a placeholder instead of the token.

The page does not store the token. The field is empty every time you open the page.

The configuration file has this shape:

```json
{
  "mcpServers": {
    "i-doit": {
      "type": "http",
      "url": "https://idoit.example.com/src/mcp.php",
      "headers": {
        "Authorization": "Bearer <your-token>",
        "Content-Type": "application/json",
        "Accept": "application/json"
      }
    }
  }
}
```

The command line, here for Claude Code:

```shell
claude mcp add --transport http i-doit https://idoit.example.com/src/mcp.php \
  --header "Authorization: Bearer <your-token>" \
  --header "Content-Type: application/json" \
  --header "Accept: application/json"
```

!!! tip "Use the generated address"
    Always copy the address from the generated configuration. i-doit derives it from the address under which you reach the installation.

### 3. Paste it into your AI client

Paste the configuration into your AI client. The client discovers the available functions by itself. There is no prompt field in i-doit: you ask your questions in your AI client.

## Managing access tokens

The **Access tokens** page lists all tokens of the tenant. Select one or more tokens and use the buttons in the toolbar:

- **Enable** and **Disable** switch a token on or off. A client with a disabled token stops working immediately.
- **Delete** removes a token for good. This cannot be undone.
- **Allow writing** and **Make read-only** set whether a token may change data. The column **Access** shows **read only** or **read and write**.

New tokens are always **read only**.

## Write access

Reading works without any further setting. Writing needs all of the following at the same time:

1. The i-doit permission system is active: **Permission system** in the section **Security** of the [tenant settings](../../administration/management/tenant-management/tenant-settings.md). It is active by default.
2. **Allow write access through MCP** is switched on under **Administration → Add-ons → i-doit MCP**. It is off by default.
3. The token is marked for writing (**read and write**).

In addition, every single change is checked against the CMDB permissions of the person the token belongs to, and it runs through the validation and the logbook of i-doit.

Purging data additionally needs **Allow purge through MCP**. This setting only takes effect while **Allow write access through MCP** is switched on as well.

Passwords are never returned to the AI client and cannot be written through MCP.

## Settings

The settings are located under **Administration → Add-ons → i-doit MCP**. Viewing and changing them requires the right for the system settings.

| Setting | Meaning |
| --- | --- |
| **Default result limit** | How many entries one tool call returns by default. Default value: 500. A client can ask for fewer. The maximum is 5000. |
| **Allow write access through MCP** | Allows tokens marked for writing to change data, see [Write access](#write-access) |
| **Allow purge through MCP** | Additionally allows purging |

!!! info "Reconnect the client"
    MCP clients only see a change of these settings after they have reconnected.

## Request log

The **Request log** page lists every request of the AI clients with time, person, method and tool. **Show details** opens the arguments and, if any, the error of a request.

- **Export as CSV** downloads the complete log. The filter on the page does not apply to the export.
- **Clear the log** deletes all entries. This cannot be undone.

## Releases

| Version | Date | Changelog |
| --- | --- | --- |
| 1.0 | 2026-10-08 | Initial release |
