# Zugriff auf Microsoft LDAP Server mit TLS Verschlüsselung

Um eine Verbindung zum Active Directory via LDAPS oder STARTTLS herzustellen wird das Zertifikat vom LDAP Server benötigt.
Dieses exportieren wir und fügen es dem Zertifikatsspeicher vom i-doit Server hinzu, damit eine Verschlüsselte Kommunikation hergestellt werden kann.

Zuerst loggen wir uns auf dem LDAP Server ein, der in der Regel auch die Zertifizierungsstelle beinhaltet.
Dann das entsprechende MMC Snap-In öffnen oder via Server Manager -> Certificate Authority auswählen.

[![Server Manager](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-1.png)](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-1.png)

Eigenschaften der Zertifizierungsstelle anwählen

[![Eigenschaften der auswählen](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-2.png)](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-2.png)

Zertifikat anzeigen lassen (1), Details auswählen (2) und anschließend in eine Datei kopieren (3)

[![Zertifikat anzeigen und kopieren](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-3.png)](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-3.png)

DER Format ausgewählt lassen

[![DER Format ausgewählt lassen](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-4.png)](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-4.png)

Dateiname und Verzeichnis wählen

[![Name und Verzeichnis wählen](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-5.png)](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-5.png)

Datei Exportieren

[![Fertigstellen es export Assistenten](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-6.png)](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-6.png)

Das Zertifikat auf das i-doit System kopieren (Im Beispiel unter /tmp/). Anschließend openssl installieren

```shell
apt install openssl
```

und das Zertifikat in das PEM Format umwandeln:

```shell
openssl x509 -inform der -outform pem -in /tmp/synetics.test.cer \
-out /usr/local/share/ca-certificates/synetics.test.crt
```

Nun noch den Zertifikatsspeicher aktualisieren und den Apache neu starten:

```shell
update-ca-certificates
service apache2 restart
```

!!! warning "Das Output File muss die Dateiendung .crt haben, sonst wird es vom Befehl update-ca-certificates nicht berücksichtigt. Ist es korrekt übernommen, muss das Zertifikat unter /etc/ssl/certs/ zu sehen sein."


