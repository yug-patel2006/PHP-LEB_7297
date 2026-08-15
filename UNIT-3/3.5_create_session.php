<?php
// 3.5 Create a session
session_start();
$_SESSION['username'] = "Rajat";
$_SESSION['logintime'] = date("Y-m-d H:i:s");

echo "Session created successfully.<br>";
echo "Session username: " . $_SESSION['username'] . "<br>";
echo "Session login time: " . $_SESSION['logintime'];
?>
