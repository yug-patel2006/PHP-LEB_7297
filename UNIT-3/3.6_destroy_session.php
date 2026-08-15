<?php
// 3.6 Destroy a session
session_start();

if (isset($_SESSION['username'])) {
    echo "Before destroy, session username: " . $_SESSION['username'] . "<br>";
}

session_unset();
session_destroy();

echo "Session has been destroyed.";
?>
