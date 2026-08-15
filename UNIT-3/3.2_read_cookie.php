<?php
// 3.2 Read the cookie of a form
if (isset($_COOKIE['username'])) {
    echo "Cookie found! Username = " . htmlspecialchars($_COOKIE['username']);
} else {
    echo "No cookie named 'username' found. Please set it first using 3.1_create_cookie.php.";
}
?>
