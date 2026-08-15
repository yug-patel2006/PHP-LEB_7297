<?php
// 2.8 MySQL date and time functions: DAYOFWEEK, WEEKDAY, DAYOFMONTH, DAYOFYEAR, DAYNAME
include 'db_config.php';

$sql = "SELECT 
    DAYOFWEEK(NOW()) AS day_of_week,
    WEEKDAY(NOW()) AS weekday,
    DAYOFMONTH(NOW()) AS day_of_month,
    DAYOFYEAR(NOW()) AS day_of_year,
    DAYNAME(NOW()) AS day_name";

$res = $conn->query($sql);
$row = $res->fetch_assoc();

echo "DAYOFWEEK(): " . $row['day_of_week'] . "<br>";
echo "WEEKDAY(): " . $row['weekday'] . "<br>";
echo "DAYOFMONTH(): " . $row['day_of_month'] . "<br>";
echo "DAYOFYEAR(): " . $row['day_of_year'] . "<br>";
echo "DAYNAME(): " . $row['day_name'] . "<br>";

$conn->close();
?>
