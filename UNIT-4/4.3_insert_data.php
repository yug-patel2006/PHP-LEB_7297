<?php
// 4.3 Insert Data Into MySQL Using MySQLi and PDO
include 'db_config.php'; // provides $conn (MySQLi)

echo "<h3>Using MySQLi</h3>";
$sql = "INSERT INTO students (name, course, marks) VALUES ('Test MySQLi', 'BCA', 70)";
if ($conn->query($sql) === TRUE) {
    echo "New record inserted with ID: " . $conn->insert_id . " (MySQLi)";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();

echo "<h3>Using PDO</h3>";
try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("INSERT INTO students (name, course, marks) VALUES (?, ?, ?)");
    $stmt->execute(['Test PDO', 'BCA', 72]);
    echo "New record inserted with ID: " . $pdo->lastInsertId() . " (PDO)";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
