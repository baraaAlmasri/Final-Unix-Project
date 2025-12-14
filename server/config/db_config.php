<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "restaurant_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    // فقط رسالة عامة بدون مسار
    die("<div style='color:red; text-align:center; padding:20px;'>
            ❌ Database connection failed. Please try again later.
         </div>");
}
?>
