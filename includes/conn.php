<?php
$host = 'localhost'; // 127.0.0.1
$username = 'root';
$pass = '';
$db_name = 'w-9'; // сюда название вашей бд

$conn = new mysqli($host, $username, $pass, $db_name);

if ($conn->connect_error) {
    die('conn.error'. $conn->connect_error);
};
?>