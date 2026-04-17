---
title: Docker Installation
description: Run i-doit as Docker containers – overview and requirements
icon: material/docker
status:
lang: en
---

# Docker Installation

i-doit can be fully operated in Docker containers. The setup consists of three containers: the web server with PHP, the MariaDB database, and a dedicated cron container for background tasks.

## Requirements

- **Docker** ≥ 24 with the **Compose plugin** (`docker compose`)
- A supported Linux operating system:
    - [Debian GNU/Linux](debian.md)
    - [Ubuntu GNU/Linux](ubuntu.md)
- Root privileges or `sudo` access
- Internet connection (for Docker images and i-doit download)

## Architecture

The Docker setup consists of three containers:

| Container | Image | Purpose |
|-----------|-------|---------|
| `idoit-web` | `php:8.2-apache` (custom build) | Apache + PHP + i-doit |
| `idoit-db` | `mariadb:10.6` | Database |
| `idoit-cron` | `php:8.2-apache` (custom build) | i-doit cron jobs |

All three containers share a common volume for the i-doit directory. The database is persisted in a separate volume.

## Next Steps

Choose your operating system:

- [Debian GNU/Linux](debian.md)
- [Ubuntu GNU/Linux](ubuntu.md)
