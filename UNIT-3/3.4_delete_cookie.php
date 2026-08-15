<?php
// 3.4 Delete a cookie
if (isset($_COOKIE['username'])) {
    setcookie("username", "", time() - 3600, "/"); // expire in the past
    echo "Cookie 'username' has been deleted.";
} else {
    echo "No 'username' cookie to delete.";
}
?>
