
#scripts/test.sh
#!/bin/bash

# سكربت لاختبار وظائف التطبيق الأساسية


echo "Testing connection to MySQL..."
mysql -u root -p'password' -e 'USE restaurant_db; SHOW TABLES;'


echo "Testing PHP page..."
curl http://localhost/webapp/frontend/index.php


echo "Tests completed."