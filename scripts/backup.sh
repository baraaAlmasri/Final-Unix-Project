#scripts/backup.sh
#!/bin/bash
# سكربت لعمل نسخة احتياطية من قاعدة البيانات
BACKUP_DIR="./backup"
mkdir -p $BACKUP_DIR
DATE=$(date +"%Y%m%d_%H%M%S")


mysqldump -u root -p'password' restaurant_db > $BACKUP_DIR/restaurant_db_$DATE.sql


echo "Backup completed: $BACKUP_DIR/restaurant_db_$DATE.sql"