#!/bin/sh
#############################

MTNUMBER="123456" # Edit this

SQLHOST="internal-db.s$MTNUMBER.gridserver.com"
SQLDB="dbname"
SQLUSER="dbuser"
SQLPASS="dbpass"
SQLFILE="backup_$(date '+%d_%m_%y').sql"
LOCALBACKUPDIR="/home/$MTNUMBER/users/.home/domains/s$MTNUMBER.gridserver.com/data"
#############################
cd $LOCALBACKUPDIR
mysqldump -h $SQLHOST --add-drop-table --user="$SQLUSER" --password="$SQLPASS" $SQLDB > $SQLFILE
MaxFileAge=30
find $LOCALBACKUPDIR -name '*.sql' -type f -mtime +$MaxFileAge -exec rm -f {} \;
echo "* Backed up..."
exit
