server/config/db_config.php
<?php
$servername = "localhost";
$username = "root";
$password = "xig@68596"; // ضع هنا كلمة مرور MySQL الخاصة بك
$dbname = "restaurant_db";

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>