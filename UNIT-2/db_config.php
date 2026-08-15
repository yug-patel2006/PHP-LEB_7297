<?php
// Shared DB connection config used by Unit 2, 3 & 4 practicals
// Update these values to match your local XAMPP / MySQL setup
$host     = "localhost";
$username = "root";
$password = "";
$database = "php_lab_db";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
