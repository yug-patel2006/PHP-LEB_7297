<?php
// Logout - destroys session so home page can't be accessed via URL
session_start();
session_unset();
session_destroy();
header("Location: 3.7_login.php");
exit();
?>
