<!-- TRANSLATED by md-translate -->
---

title: LDAPS Debian Konfiguration
description: Anleitung zur Konfiguration einer LDAPS Verbindung mit i-doit für Debian
icon: material/debian
lang: de

title : Configuration LDAPS Debian
description : Instructions pour configurer une connexion LDAPS avec i-doit pour Debian
icon : material/debian
lang : de

---

Um eine Verbindung zum Active Directory via LDAPS oder STARTTLS herzustellen wird das Zertifikat vom LDAP Server benötigt.
Dieses exportieren wir und fügen es dem Zertifikatsspeicher vom i-doit Server hinzu, damit eine Verschlüsselte Kommunikation hergestellt werden kann.

Pour établir une connexion à Active Directory via LDAPS ou STARTTLS, le certificat du serveur LDAP est nécessaire.
Nous l'exportons et l'ajoutons au magasin de certificats du serveur i-doit afin de pouvoir établir une communication cryptée.

Zuerst loggen wir uns auf dem LDAP Server ein, der in der Regel auch die Zertifizierungsstelle beinhaltet.
Dann das entsprechende MMC Snap-In öffnen oder via Server Manager -> Certificate Authority auswählen.

Tout d'abord, nous nous connectons sur le serveur LDAP, qui contient généralement aussi l'autorité de certification.
Ensuite, ouvrir le snap-in MMC correspondant ou sélectionner via Server Manager -> Certificate Authority.

[![Server Manager](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-1.png)](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-1.png)

[ ![Server Manager](../../assets/images/fr/automatisation-et-integration/ldap/ldap-tls/ldap-tls-1.png)](../../assets/images/fr/automatisation-et-integration/ldap/ldap-tls/ldap-tls-1.png)

Eigenschaften der Zertifizierungsstelle anwählen

Sélectionner les propriétés de l'autorité de certification

[![Eigenschaften der auswählen](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-2.png)](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-2.png)

[ ![Sélectionner les propriétés](../../assets/images/fr/automatisation-et-intégration/ldap/ldap-tls/ldap-tls-2.png)](../../assets/images/fr/automatisation-et-intégration/ldap/ldap-tls/ldap-tls-2.png)

Zertifikat anzeigen lassen (1), Details auswählen (2) und anschließend in eine Datei kopieren (3)

Afficher le certificat (1), sélectionner les détails (2) et ensuite copier dans un fichier (3)

[![Zertifikat anzeigen und kopieren](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-3.png)](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-3.png)

[ ![Afficher et copier le certificat](../../assets/images/fr/automatisation-et-intégration/ldap/ldap-tls/ldap-tls-3.png)](../../assets/images/fr/automatisation-et-intégration/ldap/ldap-tls/ldap-tls-3.png)

DER Format ausgewählt lassen

Laisser le format DER sélectionné

[![DER Format ausgewählt lassen](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-4.png)](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-4.png)

[ ![Laisser le format sélectionné](../../assets/images/fr/automatisation-et-intégration/ldap/ldap-tls/ldap-tls-4.png)](../../assets/images/fr/automatisation-et-intégration/ldap/ldap-tls/ldap-tls-4.png)

Dateiname und Verzeichnis wählen

Choisir le nom du fichier et le répertoire

[![Name und Verzeichnis wählen](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-5.png)](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-5.png)

[ ![Choisir le nom et le répertoire](../../assets/images/fr/automatisation-et-intégration/ldap/ldap-tls/ldap-tls-5.png)](../../assets/images/fr/automatisation-et-intégration/ldap/ldap-tls/ldap-tls-5.png)

Datei Exportieren

Exporter le fichier

[![Fertigstellen es export Assistenten](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-6.png)](../../assets/images/de/automatisierung-und-integration/ldap/ldap-tls/ldap-tls-6.png)

[ ![Terminer l'assistant d'exportation](../../assets/images/fr/automatisation-et-intégration/ldap/ldap-tls/ldap-tls-6.png)](../../assets/images/fr/automatisation-et-intégration/ldap/ldap-tls/ldap-tls-6.png)

Das Zertifikat auf das i-doit System kopieren (Im Beispiel unter /tmp/). Anschließend openssl installieren

Copier le certificat sur le système i-doit (dans l'exemple sous /tmp/). Ensuite, installer openssl

```shell
apt install openssl
```

und das Zertifikat in das PEM Format umwandeln:

et convertir le certificat au format PEM :

```shell
openssl x509 -inform der -outform pem -in /tmp/synetics.test.cer \
-out /usr/local/share/ca-certificates/synetics.test.crt
```

Nun noch den Zertifikatsspeicher aktualisieren und den Apache neu starten:

Il ne reste plus qu'à actualiser le magasin de certificats et à redémarrer Apache :

```shell
update-ca-certificates
service apache2 restart
```

!!! warning "Das Output File muss die Dateiendung .crt haben, sonst wird es vom Befehl update-ca-certificates nicht berücksichtigt. Ist es korrekt übernommen, muss das Zertifikat unter /etc/ssl/certs/ zu sehen sein."

! !! warning "Le fichier de sortie doit avoir l'extension .crt, sinon il ne sera pas pris en compte par la commande update-ca-certificates. S'il est correctement repris, le certificat doit être visible sous /etc/ssl/certs/".