<?php
// 4.8 Demonstrate the Limit Data Selections From a MySQL Database
include 'db_config.php';

echo "<h3>Top 3 students (LIMIT 3)</h3>";
$sql = "SELECT name, marks FROM students ORDER BY marks DESC LIMIT 3";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo $row['name'] . " - " . $row['marks'] . " marks<br>";
}

echo "<h3>Pagination example (LIMIT 2 OFFSET 2)</h3>";
$sql2 = "SELECT name, marks FROM students ORDER BY id LIMIT 2 OFFSET 2";
$result2 = $conn->query($sql2);
while ($row = $result2->fetch_assoc()) {
    echo $row['name'] . " - " . $row['marks'] . " marks<br>";
}

$conn->close();
?>
