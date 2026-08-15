<?php
// 2.9 MySQL date and time functions: HOUR, MINUTE, SECOND, DATE_FORMAT, DATE_SUB
include 'db_config.php';

$sql = "SELECT 
    HOUR(NOW()) AS hour_val,
    MINUTE(NOW()) AS minute_val,
    SECOND(NOW()) AS second_val,
    DATE_FORMAT(NOW(), '%W, %d %M %Y') AS formatted_date,
    DATE_SUB(NOW(), INTERVAL 7 DAY) AS week_ago";

$res = $conn->query($sql);
$row = $res->fetch_assoc();

echo "HOUR(): " . $row['hour_val'] . "<br>";
echo "MINUTE(): " . $row['minute_val'] . "<br>";
echo "SECOND(): " . $row['second_val'] . "<br>";
echo "DATE_FORMAT(): " . $row['formatted_date'] . "<br>";
echo "DATE_SUB() (7 days ago): " . $row['week_ago'] . "<br>";

$conn->close();
?>
