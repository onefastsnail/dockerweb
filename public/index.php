<?php
$servername = getenv('APP_DB_HOST');
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo '<h1 style="text-align:center;">Database connection successfull!</h1>';

echo phpinfo();