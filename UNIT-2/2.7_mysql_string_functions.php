<?php
// 2.7 MySQL string manipulation functions
include 'db_config.php';

$queries = [
    "LENGTH()"    => "SELECT LENGTH('Marwadi University') AS result",
    "CONCAT()"    => "SELECT CONCAT('Web', ' ', 'Development') AS result",
    "CONCAT_WS()" => "SELECT CONCAT_WS('-', '2026', '08', '13') AS result",
    "TRIM()"      => "SELECT TRIM('   Hello World   ') AS result",
    "RTRIM()"     => "SELECT RTRIM('Hello World   ') AS result",
    "LTRIM()"     => "SELECT LTRIM('   Hello World') AS result",
    "LPAD()"      => "SELECT LPAD('42', 5, '0') AS result",
    "RPAD()"      => "SELECT RPAD('42', 5, '0') AS result",
    "LOCATE()"    => "SELECT LOCATE('University', 'Marwadi University') AS result",
];

foreach ($queries as $label => $sql) {
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
    echo "<b>$label</b> => " . $row['result'] . "<br>";
}

$conn->close();
?>
