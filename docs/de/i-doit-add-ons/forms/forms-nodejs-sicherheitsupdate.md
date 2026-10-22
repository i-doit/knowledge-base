---
title: Node.js-Sicherheitsupdate für das Forms-Add-on
description: Die Node.js-Sicherheitslücken vom 21.10.2026 (u. a. CVE-2026-111497) betreffen den Forms-Backend-Dienst. So prüfst du deine Installation und schließt die Lücke.
icon:
status:
lang: de
---

# Node.js-Sicherheitsupdate für das Forms-Add-on

Am 21.10.2026 hat das Node.js-Projekt Sicherheitsreleases veröffentlicht (22.23.4, 24.22.1, 26.12.1),
die mehrere Lücken schließen, darunter drei als *high* eingestufte:

- **CVE-2026-111497** – Fehler im Brotli-Decoder, Out-of-bounds-Write mit möglicher Remote Code Execution
- **CVE-2026-106069** – TLS-Hostname-Prüfung lässt sich umgehen
- **CVE-2026-105482** – `dns.resolve` schneidet bei einem NUL-Zeichen ab

Quelle: [Node.js October 2026 Security Releases](https://nodejs.org/en/blog/vulnerability/october-2026-security-releases).

Der **Forms-Backend-Dienst** (`i-doit-forms`) ist ein Node.js-Dienst. Er nimmt HTTP-Anfragen entgegen und
dekomprimiert einen Anfrage-Body mit `Content-Encoding: br` über den Node-Brotli-Decoder, **bevor** eine
Anmeldung geprüft wird. Damit ist genau der verwundbare Codepfad aus CVE-2026-111497 ohne Anmeldung erreichbar,
wenn der Dienst mit einer ungepatchten Node-Version läuft.

!!! danger "Wichtig: Die bisherige Installationsanleitung führt zu einem verwundbaren Dienst"
    Die Forms-Installationsanleitung ließ Node per `nvm` **und** per `apt-get install nodejs` installieren. Der
    Dienst läuft als Benutzer `www-data` und startet `node` aus dem System-`PATH`. Das per `nvm` im Home des
    Administrators installierte Node 22 ist für `www-data` nicht sichtbar – der Dienst benutzt das **apt-Node der
    Distribution**. Das ist auf Debian 12 Node 18 und auf Debian 13 Node 20.
    Getestet am 22.10.2026 mit i-doit Forms 1.4.0: Der laufende Dienst nutzte das apt-Node, nicht das nvm-Node,
    auch dort, wo das nvm-Node 22 bereits installiert war.

!!! info "Status der Distributions-Pakete (Debian)"
    Node 18 und Node 20 sind beim Node.js-Projekt End-of-Life. Debian pflegt sein `nodejs`-Paket zwar grundsätzlich
    mit Sicherheits-Backports (es gibt eine DSA-Historie). Zum Stand 22.10.2026 führt der
    [Debian Security Tracker](https://security-tracker.debian.org/tracker/CVE-2026-111497) CVE-2026-111497 für
    `nodejs` in bookworm (18.20.4) und trixie (20.19.2) jedoch als **vulnerable**, es gibt noch keine korrigierte
    Paketversion und kein DSA. Selbst wenn Debian später nachzieht: Forms verlangt laut `package.json`
    `engines: node ^22.13.0`. Der Dienst gehört deshalb ohnehin auf einen gepflegten 22er-Zweig (oder neuer).

## 1. Bin ich betroffen? Laufende Node-Version prüfen

Welche Node-Binärdatei der Dienst tatsächlich benutzt, zeigt der lauschende Prozess. Die PID aus `ss` holen und
die Binärdatei auflösen – beides mit `sudo`, weil der Dienst als `www-data` läuft und `/proc/<pid>/exe` eines
fremden Prozesses sonst nicht lesbar ist:

```shell
PID=$(sudo ss -ltnp | sed -n 's/.*:3000 .*pid=\([0-9]*\).*/\1/p' | head -1)
NODEBIN=$(sudo readlink -f /proc/$PID/exe)
echo "$NODEBIN"
sudo "$NODEBIN" -v
```

!!! warning "Nicht `sudo $(readlink …) -v` verwenden"
    Steht das `sudo` vor der Befehlsersetzung (`sudo $(readlink -f /proc/$PID/exe) -v`), läuft das `readlink` ohne
    `sudo` und scheitert als normaler Benutzer; die Ersetzung bleibt leer und übrig bleibt ein wirkungsloses
    `sudo -v`, das **keine** Node-Version ausgibt. Darum `readlink` und den Versionsaufruf wie oben jeweils einzeln
    mit `sudo` ausführen.

**Alles unterhalb von 22.23.4 (bzw. 24.22.1 oder 26.12.1) ist verwundbar.** Node 18 und Node 20 sind End-of-Life;
hier muss auf einen gepflegten Zweig (22.x oder neuer) gewechselt werden.

Zusätzlich lohnt der Blick, auf welchem Interface der Dienst lauscht:

```shell
sudo ss -ltnp | grep ':3000'
```

Steht dort `*:3000` oder `0.0.0.0:3000`, ist der Dienst von außen erreichbar. Forms bindet standardmäßig auf
allen Interfaces.

## 2. Lücke schließen: Node auf 22.23.4 oder neuer

Entscheidend ist, dass **die Node-Binärdatei, die der `www-data`-Dienst benutzt**, auf 22.23.4+ gehoben wird.
`nvm` im Home-Verzeichnis eines Benutzers reicht dafür nicht.

### Variante A (empfohlen): systemweites Node 22 aus einer gepflegten Quelle

```shell
curl -fsSL https://deb.nodesource.com/setup_22.x | sudo -E bash -
sudo apt-get install -y nodejs
node -v   # muss v22.23.4 oder neuer zeigen
```

Dies ersetzt `/usr/bin/node` systemweit. Anschließend den Dienst neu starten:

```shell
sudo systemctl restart i-doit-forms
```

Getestet am 22.10.2026 auf Debian 12 und Debian 13: NodeSource lieferte `nodejs 22.23.4-1nodesource1`, und der
Dienst lief nach dem Neustart mit `/usr/bin/node v22.23.4`.

### Variante B: Node 22 an fester Stelle, Pfad im Dienst verdrahten

Wer `/usr/bin/node` nicht systemweit ändern möchte, legt ein Node 22 an eine feste, für `www-data` lesbare Stelle
und erzwingt es über den `PATH` des Dienstes. **Nicht** ins Home von `root` (z. B. `/root/.nvm/...`), dort darf
`www-data` nicht hinein.

```shell
# Node 22 nach /opt holen (offizielle Binärdistribution)
sudo mkdir -p /opt/node22
curl -fsSL https://nodejs.org/dist/v22.23.4/node-v22.23.4-linux-x64.tar.xz | \
  sudo tar -xJ -C /opt/node22 --strip-components=1
sudo chmod -R a+rX /opt/node22
sudo -u www-data /opt/node22/bin/node -v   # muss v22.23.4 zeigen

# PATH des Dienstes per systemd-Drop-in auf dieses Node legen
sudo mkdir -p /etc/systemd/system/i-doit-forms.service.d
sudo tee /etc/systemd/system/i-doit-forms.service.d/override.conf >/dev/null <<'EOF'
[Service]
Environment=PATH=/opt/node22/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin
EOF
sudo systemctl daemon-reload
sudo systemctl restart i-doit-forms
```

Getestet am 22.10.2026 auf Debian 12: Nach dem Drop-in nutzte der Dienst `/opt/node22/bin/node` (v22.23.4),
`www-data` konnte die Binärdatei lesen und ausführen, der Dienst war `active`. Der Drop-in überlebt ein Update
des Add-ons, weil er außerhalb des Add-on-Verzeichnisses liegt.

## 3. Nachweis: Ist die Lücke geschlossen?

```shell
sudo systemctl restart i-doit-forms
sleep 3
PID=$(sudo ss -ltnp | sed -n 's/.*:3000 .*pid=\([0-9]*\).*/\1/p' | head -1)
NODEBIN=$(sudo readlink -f /proc/$PID/exe)
sudo "$NODEBIN" -v
```

Die ausgegebene Version muss **22.23.4 oder neuer** sein. Danach Forms in i-doit kurz gegentesten
(ein Formular öffnen und speichern).

## 4. Zwischenlösung bis zum Update

- Den Forms-Port (Vorgabe 3000) nur aus dem internen Netz erreichbar machen, bis Node aktualisiert ist.
- Den Dienst nicht ungeschützt ins Internet stellen.

## Hinweise je Distribution

- **Debian 12 (bookworm):** apt liefert Node 18 (EOL). MongoDB-8-Repo wie in der Installationsanleitung mit
  `bookworm` ist korrekt.
- **Debian 13 (trixie):** apt liefert Node 20 (EOL). Für MongoDB 8 gibt es (Stand 22.10.2026) noch kein eigenes
  `trixie`-Repo; das `bookworm`-Repo funktioniert dort als Behelf.

## Weiterführende Links

- [Node.js October 2026 Security Releases](https://nodejs.org/en/blog/vulnerability/october-2026-security-releases)
- [Debian Security Tracker CVE-2026-111497](https://security-tracker.debian.org/tracker/CVE-2026-111497)
- [Installation des Forms Add-on](forms-installation.md)
