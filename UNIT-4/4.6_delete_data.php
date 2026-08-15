<?php
// 4.6 Delete Data From a MySQL Table Using MySQLi and PDO
$host = "localhost"; $user = "root"; $pass = ""; $db = "php_lab_db";

echo "<h3>Using MySQLi</h3>";
$conn = new mysqli($host, $user, $pass, $db);
$sql = "DELETE FROM students WHERE name = 'Test MySQLi'";
if ($conn->query($sql) === TRUE) {
    echo "Deleted " . $conn->affected_rows . " row(s) using MySQLi.";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();

echo "<h3>Using PDO</h3>";
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("DELETE FROM students WHERE name = ?");
    $stmt->execute(['Test PDO']);
    echo "Deleted " . $stmt->rowCount() . " row(s) using PDO.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
