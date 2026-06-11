---
title: Docker Installation
description: i-doit als Docker-Container betreiben – Übersicht und Voraussetzungen
icon: material/docker
status:
lang: de
---

# Docker Installation

i-doit lässt sich vollständig in Docker-Containern betreiben. Es stehen zwei Installationspfade zur Verfügung — entweder mit den offiziellen Container-Images der i-doit group (empfohlen, schnellster Weg) oder mit selbst gebauten Containern auf Basis einer ausgewählten Linux-Distribution.

## Voraussetzungen

- **Docker** ≥ 24 mit dem **Compose-Plugin** (`docker compose`)
- Root-Rechte oder `sudo`-Zugang
- Internetverbindung (für Docker-Images und ggf. i-doit-Download)
- Linux-Server oder Docker-fähiger Host

## Installationspfade

### Mit offiziellen Images der i-doit group (empfohlen)

Vorgefertigter Stack aus zwei gehärteten Containern (`app` mit Apache + PHP + i-doit, `db` mit MariaDB). Die Images werden öffentlich von der i-doit group bereitgestellt — kein Image-Build nötig, schnelleres Setup, integrierte Healthchecks. Optional erweitert um nginx für TLS-Termination.

| Container | Image | Aufgabe |
|-----------|-------|---------|
| `app` | `registry.on.ops.docupike.net/i-doit/app:38` | Apache + PHP + i-doit |
| `db` | `registry.on.ops.docupike.net/i-doit/db:38` | MariaDB |
| `nginx` (optional) | `nginx:1.27-alpine` | TLS-Reverse-Proxy |

→ [Installation mit offiziellen Images](compose.md)

### Mit eigenem Image-Build

Klassischer Setup mit selbst gebautem PHP-Apache-Image (`php:8.2-apache`), separater MariaDB und dediziertem Cron-Container. Volle Kontrolle über PHP-Extensions und Apache-Konfiguration.

| Container | Image | Aufgabe |
|-----------|-------|---------|
| `idoit-web` | `php:8.2-apache` (selbst gebaut) | Apache + PHP + i-doit |
| `idoit-db` | `mariadb:10.6` | Datenbank |
| `idoit-cron` | `php:8.2-apache` (selbst gebaut) | i-doit Cronjobs |

Wähle dein Betriebssystem:

- [Debian GNU/Linux](debian.md)
- [Ubuntu GNU/Linux](ubuntu.md)
