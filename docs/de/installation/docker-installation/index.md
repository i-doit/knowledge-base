---
title: Docker Installation
description: i-doit als Docker-Container betreiben – Übersicht und Voraussetzungen
icon: material/docker
status:
lang: de
---

# Docker Installation

i-doit lässt sich vollständig in Docker-Containern betreiben. Der Setup umfasst drei Container: den Webserver mit PHP, die MariaDB-Datenbank und einen dedizierten Cron-Container für Hintergrundaufgaben.

## Voraussetzungen

- **Docker** ≥ 24 mit dem **Compose-Plugin** (`docker compose`)
- Ein unterstütztes Linux-Betriebssystem:
    - [Debian GNU/Linux](debian.md)
    - [Ubuntu GNU/Linux](ubuntu.md)
- Root-Rechte oder `sudo`-Zugang
- Internetverbindung (für Docker-Images und i-doit-Download)

## Architektur

Der Docker-Setup besteht aus drei Containern:

| Container | Image | Aufgabe |
|-----------|-------|---------|
| `idoit-web` | `php:8.2-apache` (selbst gebaut) | Apache + PHP + i-doit |
| `idoit-db` | `mariadb:10.6` | Datenbank |
| `idoit-cron` | `php:8.2-apache` (selbst gebaut) | i-doit Cronjobs |

Alle drei Container teilen sich ein gemeinsames Volume für das i-doit-Verzeichnis. Die Datenbank wird in einem separaten Volume persistiert.

## Nächste Schritte

Wähle dein Betriebssystem:

- [Debian GNU/Linux](debian.md)
- [Ubuntu GNU/Linux](ubuntu.md)
