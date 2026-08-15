<?php
// 2.10 MySQL date and time functions: CURDATE, CURTIME, UNIX_TIMESTAMP, FROM_UNIXTIME
include 'db_config.php';

$sql = "SELECT 
    CURDATE() AS current_date_val,
    CURTIME() AS current_time_val,
    UNIX_TIMESTAMP() AS unix_ts,
    FROM_UNIXTIME(UNIX_TIMESTAMP()) AS from_unix";

$res = $conn->query($sql);
$row = $res->fetch_assoc();

echo "CURDATE(): " . $row['current_date_val'] . "<br>";
echo "CURTIME(): " . $row['current_time_val'] . "<br>";
echo "UNIX_TIMESTAMP(): " . $row['unix_ts'] . "<br>";
echo "FROM_UNIXTIME(): " . $row['from_unix'] . "<br>";

$conn->close();
?>
