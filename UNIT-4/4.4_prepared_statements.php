<?php
// 4.4 Demonstrate PHP MySQL Prepared Statements
include 'db_config.php'; // MySQLi $conn

echo "<h3>MySQLi Prepared Statement (Insert)</h3>";
$stmt = $conn->prepare("INSERT INTO students (name, course, marks) VALUES (?, ?, ?)");
$name = "Prepared Stmt User"; $course = "BCA"; $marks = 95;
$stmt->bind_param("ssi", $name, $course, $marks);
if ($stmt->execute()) {
    echo "Inserted using prepared statement. New ID: " . $stmt->insert_id;
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();

echo "<h3>MySQLi Prepared Statement (Select with parameter)</h3>";
$stmt2 = $conn->prepare("SELECT name, course, marks FROM students WHERE marks > ?");
$minMarks = 70;
$stmt2->bind_param("i", $minMarks);
$stmt2->execute();
$result = $stmt2->get_result();
while ($row = $result->fetch_assoc()) {
    echo $row['name'] . " - " . $row['course'] . " - " . $row['marks'] . "<br>";
}
$stmt2->close();
$conn->close();
?>
