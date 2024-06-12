# Script de sauvegarde pour les données et les fichiers

Le script de sauvegarde suivant sert d'**exemple** de la manière dont une sauvegarde de données simple peut être organisée. Il ne remplace pas une solution professionnelle!


!!! attention "À vos risques et périls"

    Ce script supprime des fichiers! Veuillez l'utiliser à vos propres risques! synetics ne fournit aucune garantie ou support et exclut toute responsabilité pour d'éventuels dommages ultérieurs.

**bbbs.sh**

    #!/bin/bash
    
    #### Exigences système
    #### Les outils suivants doivent être installés:
    ###
    ### mysql - pour la sauvegarde de la base de données MySQL
    ### tar - pour la sauvegarde des fichiers
    ### ncftp - pour la copie de fichiers FTP
    ### samba-common - Pour la copie de fichiers CIFS
    ### cifs-utils - Pour la copie de fichiers CIFS
    ###
    ### Exemple d'installation sur Debian:
    ### apt-get install samba-common cifs-utils ncftp mysql-client tar
    
    ## Options de configuration globales
    glob_machine="idoitserver"                  #Nom de la machine pour étiqueter les fichiers de sauvegarde
    glob_date=$(date +"%Y-%m-%d_%H%M")          #Format de date pour étiqueter les fichiers de sauvegarde (par défaut 2015-12-12_1755)
    glob_path="/tmp/backup/${glob_machine}"     #Spécifier le chemin de sauvegarde local
    glob_delete=0                               #Supprimer les fichiers locaux immédiatement après la copie CIFS ou FTP? 


## Configuration de sauvegarde de la base de données
backup_database=1                           #Sauvegarde de la base de données activée?
db_user=""                                  #Nom d'utilisateur MySQL
db_pass=""                                  #Mot de passe MySQL
db_host="127.0.0.1"                         #Hôte MySQL
db_names="idoit_system idoit_data"          #Noms de bases de données à sauvegarder séparés par un espace

## Configuration de sauvegarde de fichiers
backup_file=1                               #Sauvegarde de fichiers activée?
file_files="/var/www"                       #Chemins des fichiers à sauvegarder séparés par un espace

## Configuration FTP
copy_ftp=0                                  #Copier les fichiers vers le serveur FTP?
ftp_user=""                                 #Nom d'utilisateur FTP
ftp_pass=""                                 #Mot de passe FTP
ftp_host=""                                 #Nom du serveur FTP ou adresse IP
ftp_path="/chemin/de/sauvegarde"            #Chemin de sauvegarde sur le serveur FTP

## Configuration CIFS
copy_cifs=0                                 #Copier les fichiers vers le partage CIFS?
cifs_user=""                                #Nom d'utilisateur CIFS
cifs_pass=""                                #Mot de passe CIFS
cifs_path="//cifs/chemin/du/fichier/partage" #Chemin de sauvegarde CIFS
cifs_mount="/tmp/sauvegarde/cifs_mnt"       #Point de montage du partage CIFS
cifs_domain=""                              #Nom de domaine CIFS
```


## Suppression des anciens fichiers
delete_file=0                               #Supprimer les anciennes sauvegardes locales ?
delete_file_age=7                           #Supprimer les sauvegardes locales plus anciennes que x jours
delete_cifs=0                               #Supprimer les anciennes sauvegardes cifs ?
delete_cifs_age=7                           #Supprimer les sauvegardes cifs plus anciennes que x jours

#-------------------------- Arrêtez l'édition ici --------------------------
mkdir -p ${glob_path}
umask 177
#Monter le partage CIFS
if [ $copy_cifs -eq 1 ];
then
    echo "Montage du partage CIFS ${cifs_path} vers ${cifs_mount}"
    mkdir -p ${cifs_mount}
    /sbin/mount.cifs ${cifs_path} ${cifs_mount} -o user=${cifs_user},domain=${cifs_domain},password=${cifs_pass}
fi
#Sauvegarde de la base de données
if [ $backup_database -eq 1 ];
then
    for i in ${db_names}
    do
        if [ -n "$i" ];
        then
            tmp_sqlfile=${glob_path}/${glob_machine}__${i}__${glob_date}.sql
            echo "Exportation de la base de données MYSQL ${i} vers le fichier ${tmp_sqlfile}"
            /usr/bin/mysqldump --user=${db_user} --password=${db_pass} --host=${db_host} ${i} > ${tmp_sqlfile}
```  

```bash
if [ $copy_ftp -eq 1 ];
then
    echo "Copie de ${tmp_sqlfile} vers le serveur FTP ${ftp_host}"
    /usr/bin/ncftpput -u ${ftp_user} -p ${ftp_pass} ${ftp_host} ${ftp_path} ${tmp_sqlfile}
fi

if [ $copy_cifs -eq 1 ];
then
    echo "Copie de ${tmp_sqlfile} vers le partage CIFS ${cifs_path}"
    cp -f ${tmp_sqlfile} ${cifs_mount}
fi

if [ $glob_delete -eq 1 ];
then
    echo "Suppression immédiate du fichier ${tmp_sqlfile}"
    rm -f ${tmp_sqlfile}
fi
fi
done
fi
#Sauvegarde de fichier
if [ $backup_file -eq 1 ];
then
    j=1
    for i in ${file_files}
    do
        if [ -n "$i" ];
        then
            tmp_filesfile=${glob_path}/${glob_machine}__${j}__${glob_date}.tar.gz
            echo "Emballage des fichiers ${i} vers ${tmp_filesfile}"
            tar czf ${tmp_filesfile} $i
            j=$((j + 1))
```

```bash
if [ $copy_ftp -eq 1 ];
then
    echo "Copie de ${tmp_filesfile} vers le serveur FTP ${ftp_host}"
    /usr/bin/ncftpput -u ${ftp_user} -p ${ftp_pass} ${ftp_host} ${ftp_path} ${tmp_filesfile}
fi

if [ $copy_cifs -eq 1 ];
then
    echo "Copie de ${tmp_filesfile} vers le partage CIFS ${cifs_path}"
    cp -f ${tmp_filesfile} ${cifs_mount}
fi

if [ $glob_delete -eq 1 ];
then
    echo "Suppression immédiate du fichier ${tmp_filesfile}"
    rm -f ${tmp_filesfile}
fi

fi
done
fi
# Suppression des anciennes sauvegardes
if [ $delete_file -eq 1 ];
then
    echo "Suppression des fichiers plus anciens que ${delete_file_age} jours dans ${glob_path}"
    find ${glob_path} -maxdepth 1 -mtime +${delete_file_age} -exec rm {} \;
fi
if [ $copy_cifs -eq 1 ];
then
    if [ $delete_cifs -eq 1 ];
    then
        echo "Suppression des fichiers plus anciens que ${delete_cifs_age} jours sur le partage CIFS ${cifs_mount}"
        find ${cifs_mount} -maxdepth 1 -mtime +${delete_cifs_age} -exec rm {} \;
    fi
fi
# Non implémenté jusqu'à présent
#if [ $copy_ftp -eq 1 ];
#then
#
#fi
# Démonter le partage CIFS
if [ $copy_cifs -eq 1 ];
then
    echo "Démontage du partage CIFS ${cifs_mount}"
    umount ${cifs_mount}
fi
```
