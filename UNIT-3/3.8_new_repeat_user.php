<?php
// 3.8 Identify whether the user is new or a repeated one using a cookie
if (isset($_COOKIE['visitor_status'])) {
    echo "Welcome back! You are a repeated visitor.<br>";
    echo "Cookie value: " . $_COOKIE['visitor_status'];
} else {
    setcookie("visitor_status", "returning", time() + (86400 * 30), "/"); // 30 days
    echo "Welcome! This looks like your first visit. A cookie has been set to remember you.";
}
?>
