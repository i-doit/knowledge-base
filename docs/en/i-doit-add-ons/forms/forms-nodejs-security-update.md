---
title: Node.js security update for the Forms add-on
description: The Node.js vulnerabilities of 2026-10-21 (including CVE-2026-111497) affect the Forms backend service. How to check your installation and close the vulnerability.
icon:
status:
lang: en
---

# Node.js security update for the Forms add-on

On October 21, 2026, the Node.js project published security releases (22.23.4, 24.22.1, 26.12.1)
that close several vulnerabilities, three of them rated *high*:

- **CVE-2026-111497** – bug in the Brotli decoder, out-of-bounds write with possible remote code execution
- **CVE-2026-106069** – TLS hostname verification can be bypassed
- **CVE-2026-105482** – `dns.resolve` truncates names at a NUL character

Source: [Node.js October 2026 Security Releases](https://nodejs.org/en/blog/vulnerability/october-2026-security-releases).

The **Forms backend service** (`i-doit-forms`) is a Node.js service. It accepts HTTP requests and decompresses a
request body with `Content-Encoding: br` using the Node.js Brotli decoder **before** any authentication is checked.
This makes exactly the vulnerable code path of CVE-2026-111497 reachable without authentication if the service runs
on an unpatched Node.js version.

!!! danger "Important: The previous installation guide results in a vulnerable service"
    The Forms installation guide had Node.js installed via `nvm` **and** via `apt-get install nodejs`. The service
    runs as user `www-data` and starts `node` from the system `PATH`. Node.js 22, installed via `nvm` in the
    administrator's home directory, is not visible to `www-data` – the service uses the **distribution's apt Node.js**.
    That is Node.js 18 on Debian 12 and Node.js 20 on Debian 13.
    Tested on 2026-10-22 with i-doit Forms 1.4.0: The running service used the apt Node.js, not the nvm Node.js,
    even where nvm Node.js 22 was already installed.

!!! info "Status of the distribution packages (Debian)"
    Node.js 18 and Node.js 20 are end-of-life at the Node.js project. Debian generally maintains its `nodejs` package
    with security backports (there is a DSA history). As of 2026-10-22, however, the
    [Debian Security Tracker](https://security-tracker.debian.org/tracker/CVE-2026-111497) lists CVE-2026-111497 for
    `nodejs` in bookworm (18.20.4) and trixie (20.19.2) as **vulnerable**; there is no fixed package version and no
    DSA yet. Even if Debian follows up later: according to its `package.json`, Forms requires
    `engines: node ^22.13.0`. The service therefore belongs on a maintained 22.x branch (or newer) anyway.

## 1. Am I affected? Check the running Node.js version

The listening process shows which Node.js binary the service actually uses. Get the PID from `ss` and resolve the
binary – both with `sudo`, because the service runs as `www-data` and `/proc/<pid>/exe` of another user's process is
otherwise not readable:

```shell
PID=$(sudo ss -ltnp | sed -n 's/.*:3000 .*pid=\([0-9]*\).*/\1/p' | head -1)
NODEBIN=$(sudo readlink -f /proc/$PID/exe)
echo "$NODEBIN"
sudo "$NODEBIN" -v
```

!!! warning "Do not use `sudo $(readlink …) -v`"
    If `sudo` precedes the command substitution (`sudo $(readlink -f /proc/$PID/exe) -v`), `readlink` runs without
    `sudo` and fails as a normal user; the substitution stays empty and what remains is an ineffective `sudo -v`,
    which prints **no** Node.js version. Therefore run `readlink` and the version call separately with `sudo`, as
    shown above.

**Anything below 22.23.4 (or 24.22.1 or 26.12.1) is vulnerable.** Node.js 18 and Node.js 20 are end-of-life;
switch to a maintained branch (22.x or newer).

It is also worth checking which interface the service listens on:

```shell
sudo ss -ltnp | grep ':3000'
```

If it shows `*:3000` or `0.0.0.0:3000`, the service is reachable from outside. By default, Forms binds to all
interfaces.

## 2. Close the vulnerability: Node.js 22.23.4 or newer

What matters is that **the Node.js binary used by the `www-data` service** is raised to 22.23.4+.
`nvm` in a user's home directory is not sufficient.

### Option A (recommended): system-wide Node.js 22 from a maintained source

```shell
curl -fsSL https://deb.nodesource.com/setup_22.x | sudo -E bash -
sudo apt-get install -y nodejs
node -v   # must show v22.23.4 or newer
```

This replaces `/usr/bin/node` system-wide. Then restart the service:

```shell
sudo systemctl restart i-doit-forms
```

Tested on 2026-10-22 on Debian 12 and Debian 13: NodeSource provided `nodejs 22.23.4-1nodesource1`, and after the
restart the service ran with `/usr/bin/node v22.23.4`.

### Option B: Node.js 22 in a fixed location, path wired into the service

If you do not want to change `/usr/bin/node` system-wide, place Node.js 22 in a fixed location readable by
`www-data` and enforce it via the service's `PATH`. **Not** in `root`'s home directory (e.g. `/root/.nvm/...`),
`www-data` has no access there.

```shell
# Fetch Node.js 22 to /opt (official binary distribution)
sudo mkdir -p /opt/node22
curl -fsSL https://nodejs.org/dist/v22.23.4/node-v22.23.4-linux-x64.tar.xz | \
  sudo tar -xJ -C /opt/node22 --strip-components=1
sudo chmod -R a+rX /opt/node22
sudo -u www-data /opt/node22/bin/node -v   # must show v22.23.4

# Point the service's PATH to this Node.js via a systemd drop-in
sudo mkdir -p /etc/systemd/system/i-doit-forms.service.d
sudo tee /etc/systemd/system/i-doit-forms.service.d/override.conf >/dev/null <<'EOF'
[Service]
Environment=PATH=/opt/node22/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin
EOF
sudo systemctl daemon-reload
sudo systemctl restart i-doit-forms
```

Tested on 2026-10-22 on Debian 12: After the drop-in, the service used `/opt/node22/bin/node` (v22.23.4),
`www-data` could read and execute the binary, and the service was `active`. The drop-in survives an update of the
add-on because it is located outside the add-on directory.

## 3. Verification: Is the vulnerability closed?

```shell
sudo systemctl restart i-doit-forms
sleep 3
PID=$(sudo ss -ltnp | sed -n 's/.*:3000 .*pid=\([0-9]*\).*/\1/p' | head -1)
NODEBIN=$(sudo readlink -f /proc/$PID/exe)
sudo "$NODEBIN" -v
```

The version shown must be **22.23.4 or newer**. Then briefly test Forms in i-doit (open and save a form).

## 4. Interim measure until the update

- Make the Forms port (default 3000) reachable only from the internal network until Node.js is updated.
- Do not expose the service to the internet unprotected.

## Notes per distribution

- **Debian 12 (bookworm):** apt provides Node.js 18 (EOL). The MongoDB 8 repository with `bookworm`, as in the
  installation guide, is correct.
- **Debian 13 (trixie):** apt provides Node.js 20 (EOL). For MongoDB 8 there is (as of 2026-10-22) no dedicated
  `trixie` repository yet; the `bookworm` repository works there as a workaround.

## Further links

- [Node.js October 2026 Security Releases](https://nodejs.org/en/blog/vulnerability/october-2026-security-releases)
- [Debian Security Tracker CVE-2026-111497](https://security-tracker.debian.org/tracker/CVE-2026-111497)
- [Installation of the Forms add-on](forms-installation.md)
