<?php
// Server-side script that fetches data from the students table (used by 5.5)
include '../Unit4/db_config.php';

$result = $conn->query("SELECT id, name, course, marks FROM students");
$rows = [];
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}
header("Content-Type: application/json");
echo json_encode($rows);
$conn->close();
?>
