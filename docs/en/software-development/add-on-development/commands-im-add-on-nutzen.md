---
title: "Using Commands in Add-ons"
description: "Commands must be created in the add-on under the following folder structure:"
icon:
status:
lang: en
---
# Using Commands in Add-ons

Commands must be created in the add-on under the following folder structure:

    <add-on>/src/Console/Command.

The classes created within this structure (in any arrangement) should end with "Command" and must inherit from the class "idoit\Console\Command\AbstractCommand".

This automatically provides, among other things, login functionality, the ability to use a configuration file (.ini), and access to the i-doit container.

The following methods must be implemented:

| Method | Description |
| --- | --- |
| public function getCommandName(); | Determines the name of the command on the console |
| public function getCommandDescription(); | Determines the description of the command on the console |
| public function getCommandDefinition(); | Determines the "InputDefinition", for example arguments and options |
| public function isConfigurable(); | Determines whether a command is configurable via an .ini file |

Additionally, the constant "REQUIRES_LOGIN" can be overridden. This determines whether a command requires a login.

By overriding the method
protected function execute(InputInterface $input, OutputInterface $output)

the actual functionality of the command can be implemented.

The command is then accessible via the command line. When calling commands via the console ("php console.php command-name"), you must be in the i-doit installation directory; otherwise, the issued command will result in errors.

The execute method of a command must (since i-doit 1.16) always return a status (via return):

*   \Symfony\Component\Console\Command\Command::SUCCESS (or 0) for "success"
*   \Symfony\Component\Console\Command\Command::FAILURE (or 1) for "failure"

If this return is missing, an error message is displayed.

## See also

- [Developing Add-ons](index.md) — Guide to add-on development
- [Software Development](../index.md) — Overview of the developer documentation
- [API Add-on](../../i-doit-add-ons/api/index.md) — Interface for external access
