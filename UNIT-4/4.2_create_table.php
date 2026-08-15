<?php
// 4.2 Create a MySQL Table Using MySQLi and PDO
$host = "localhost"; $user = "root"; $pass = ""; $db = "php_lab_db";

echo "<h3>Using MySQLi</h3>";
$conn = new mysqli($host, $user, $pass, $db);
$sql = "CREATE TABLE IF NOT EXISTS employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    department VARCHAR(100),
    salary DECIMAL(10,2)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table 'employees' created successfully (MySQLi).";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();

echo "<h3>Using PDO</h3>";
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec($sql);
    echo "Table 'employees' created/verified successfully (PDO).";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
