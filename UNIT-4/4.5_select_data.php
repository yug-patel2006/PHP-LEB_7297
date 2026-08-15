<?php
// 4.5 Select Data From a MySQL Database
include 'db_config.php';

$sql = "SELECT id, name, course, marks FROM students";
$result = $conn->query($sql);

echo "<h3>Students List</h3>";
if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='6'><tr><th>ID</th><th>Name</th><th>Course</th><th>Marks</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['course']}</td><td>{$row['marks']}</td></tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}
$conn->close();
?>
