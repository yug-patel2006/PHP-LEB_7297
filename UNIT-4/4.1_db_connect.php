<?php
// 4.1 Establish Database connection (MySQLi and PDO)

echo "<h3>MySQLi Connection</h3>";
$host = "localhost"; $user = "root"; $pass = ""; $db = "php_lab_db";

$mysqli_conn = new mysqli($host, $user, $pass, $db);
if ($mysqli_conn->connect_error) {
    echo "MySQLi connection failed: " . $mysqli_conn->connect_error;
} else {
    echo "MySQLi connected successfully to database '$db'.";
}
$mysqli_conn->close();

echo "<h3>PDO Connection</h3>";
try {
    $pdo_conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "PDO connected successfully to database '$db'.";
    $pdo_conn = null;
} catch (PDOException $e) {
    echo "PDO connection failed: " . $e->getMessage();
}
?>
