<?php
// 4.7 Update Data In a MySQL Table Using MySQLi and PDO
$host = "localhost"; $user = "root"; $pass = ""; $db = "php_lab_db";

echo "<h3>Using MySQLi</h3>";
$conn = new mysqli($host, $user, $pass, $db);
$sql = "UPDATE students SET marks = 99 WHERE name = 'Rajat Patel'";
if ($conn->query($sql) === TRUE) {
    echo "Updated " . $conn->affected_rows . " row(s) using MySQLi.";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();

echo "<h3>Using PDO</h3>";
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("UPDATE students SET marks = ? WHERE name = ?");
    $stmt->execute([85, 'Aman Shah']);
    echo "Updated " . $stmt->rowCount() . " row(s) using PDO.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
