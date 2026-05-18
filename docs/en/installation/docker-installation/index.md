---
title: Docker Installation
description: Run i-doit as Docker containers – overview and requirements
icon: material/docker
status:
lang: en
---

# Docker Installation

i-doit can be fully operated in Docker containers. Two installation paths are available — either with the official synetics container images (recommended, fastest path) or with self-built containers based on a chosen Linux distribution.

## Requirements

- **Docker** ≥ 24 with the **Compose plugin** (`docker compose`)
- Root privileges or `sudo` access
- Internet connection (for Docker images and, where applicable, i-doit download)
- Linux server or Docker-capable host

## Installation paths

### With official synetics images (recommended)

Prebuilt stack of two hardened containers (`app` with Apache + PHP + i-doit, `db` with MariaDB). The images are provided publicly by synetics — no image build required, faster setup, integrated healthchecks. Optionally extended by nginx for TLS termination.

| Container | Image | Purpose |
|-----------|-------|---------|
| `app` | `registry.on.ops.docupike.net/i-doit/app:38` | Apache + PHP + i-doit |
| `db` | `registry.on.ops.docupike.net/i-doit/db:38` | MariaDB |
| `nginx` (optional) | `nginx:1.27-alpine` | TLS reverse proxy |

→ [Installation with official images](compose.md)

### With custom image build

Classic setup with a self-built PHP-Apache image (`php:8.2-apache`), a separate MariaDB, and a dedicated cron container. Full control over PHP extensions and Apache configuration.

| Container | Image | Purpose |
|-----------|-------|---------|
| `idoit-web` | `php:8.2-apache` (custom build) | Apache + PHP + i-doit |
| `idoit-db` | `mariadb:10.6` | Database |
| `idoit-cron` | `php:8.2-apache` (custom build) | i-doit cron jobs |

Choose your operating system:

- [Debian GNU/Linux](debian.md)
- [Ubuntu GNU/Linux](ubuntu.md)
