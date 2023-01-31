# Backup-Script für Daten und Dateien

Folgendes Backup Script dient als **Beispiel** wie eine einfache Datensicherung eingerichtet werden kann. Es ersetzt keine professionelle Lösung!

!!! danger "Auf eigene Gefahr"
    Dieses Script löscht Dateien! Bitte auf eigene Gefahr anwenden! synetics übernimmt weder Garantie noch Support und schließt eine Haftung für Folgeschäden aus.

**Backupscript**

    #!/bin/bash
    
    #### System requirements
    #### The following tools need to be installed:
    ###
    ### mysql - for the MySQL database backup
    ### tar - for the file backup
    ### ncftp - for the FTP file copy
    ### samba-common - For the CIFS file copy
    ### cifs-utils - For the CIFS file copy
    ###
    ### Debian install example:
    ### apt-get install samba-common cifs-utils ncftp mysql-client tar
    
    ## Global configuration options
    glob_machine="idoitserver"                  #Machine name to label backup files
    2015-12-12_1755)
    glob_path="/tmp/backup/${glob_machine}"     #Specify local backup path
    glob_delete=0                               #Delete local files immediately after CIFS or FTP copy?
    
    ## Database backup configuration
    backup_database=1                           #Database backup enabled?
    db_user=""                                  #MySQL username
    db_pass=""                                  #MySQL password
    db_host="127.0.0.1"                         #MySQL host
    db_names="idoit_system idoit_data"          #Database names to backup separated with space
    
    ## File backup configuration
    backup_file=1                               #File backup enabled?
    file_files="/var/www"                       #File paths to backup separated with space
    
    ## FTP configuration
    copy_ftp=0                                  #Copy files to FTP server?
    ftp_user=""                                 #FTP username
    ftp_pass=""                                 #FTP password
    ftp_host=""                                 #FTP servername or IP address
    ftp_path="/backup/path"                     #Backup path on FTP server
    
    ## CIFS configuration
    copy_cifs=0                                 #Copy files to CIFS Share?
    cifs_user=""                                #CIFS username
    cifs_pass=""                                #CIFS pass
    cifs_path="//cifs/file/share/path"          #CIFS backup path
    cifs_mount="/tmp/backup/cifs_mnt"           #CIFS share mount point
    cifs_domain=""                              #CIFS domain name
    
    ## Old files deletion
    delete_file=0                               #Delete old local backups?
    delete_file_age=7                           #Delete local backups older than x days
    delete_cifs=0                               #Delete old cifs backups?
    delete_cifs_age=7                           #Delete cifs backups older than x days
    
    #-------------------------- Stop editing here --------------------------
    mkdir -p ${glob_path}
    umask 177
    #Mount CIFS share
    if [ $copy_cifs -eq 1 ];
    then
        echo "Mounting CIFS share ${cifs_path} to ${cifs_mount}"
        mkdir -p ${cifs_mount}
    {cifs_pass}
    fi
    #Database backup
    if [ $backup_database -eq 1 ];
    then
        for i in ${db_names}
        do
            if [ -n "$i" ];
            then
                tmp_sqlfile=${glob_path}/${glob_machine}__${i}__${glob_date}.sql
                echo "Dumping MYSQL database ${i} to file ${tmp_sqlfile}"
    {tmp_sqlfile}
                
                if [ $copy_ftp -eq 1 ];
                then
                    echo "Copying ${tmp_sqlfile} to FTP server ${ftp_host}"
                    /usr/bin/ncftpput -u ${ftp_user} -p ${ftp_pass} ${ftp_host} ${ftp_path} ${tmp_sqlfile}
                fi
                
                if [ $copy_cifs -eq 1 ];
                then
                    echo "Copying ${tmp_sqlfile} to CIFS share ${cifs_path}"
                    cp -f ${tmp_sqlfile} ${cifs_mount}
                fi
                
                if [ $glob_delete -eq 1 ];
                then
                    echo "Immediately deleting file ${tmp_sqlfile}"
                    rm -f ${tmp_sqlfile}
                fi
            fi
        done
    fi
    #File backup
    if [ $backup_file -eq 1 ];
    then
        j=1
        for i in ${file_files}
        do
            if [ -n "$i" ];
            then
                tmp_filesfile=${glob_path}/${glob_machine}__${j}__${glob_date}.tar.gz
                echo "Packing files ${i} to ${tmp_filesfile}"
                tar czf ${tmp_filesfile} $i
                j=$((j + 1))
                
                if [ $copy_ftp -eq 1 ];
                then
                    echo "Copying ${tmp_filesfile} to FTp server ${ftp_host}"
    {tmp_filesfile}
                fi
                
                if [ $copy_cifs -eq 1 ];
                then
                    echo "Copying ${tmp_filesfile} to CIFS share ${cifs_path}"
                    cp -f ${tmp_filesfile} ${cifs_mount}
                fi
                
                if [ $glob_delete -eq 1 ];
                then
                    echo "Immediately deleting file ${tmp_filesfile}"
                    rm -f ${tmp_filesfile}
                fi
                
            fi
        done
    fi
    #old backup deletion
    if [ $delete_file -eq 1 ];
    then
        echo "Deleting files older than ${delete_file_age} days in ${glob_path}"
        find ${glob_path} -maxdepth 1 -mtime +${delete_file_age} -exec rm {} \;
    fi
    if [ $copy_cifs -eq 1 ];
    then
        if [ $delete_cifs -eq 1 ];
        then
            echo "Deleting files older than ${delete_cifs_age} days on CIFS share ${cifs_mount}"
            find ${cifs_mount} -maxdepth 1 -mtime +${delete_cifs_age} -exec rm {} \;
        fi
    fi
    #Not implemented so far
    #if [ $copy_ftp -eq 1 ];
    #then
    #
    #fi
    #Umount CIFS share
    if [ $copy_cifs -eq 1 ];
    then
        echo "umounting CIFS share ${cifs_mount}"
        umount ${cifs_mount}
    fi
    