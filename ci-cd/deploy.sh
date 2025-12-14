#!/bin/bash

# استبدل user و server بالاسم و IP الصحيحين
SERVER_USER="user"
SERVER_IP="your_server_ip"
REMOTE_PATH="/var/www/html/webapp/"

# نسخ الملفات من المشروع إلى السيرفر
rsync -avz --delete ./webapp/ $SERVER_USER@$SERVER_IP:$REMOTE_PATH
