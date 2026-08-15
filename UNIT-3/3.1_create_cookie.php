<!DOCTYPE html>
<html>
<head><title>Create Cookie</title></head>
<body>
<h3>3.1 Create cookie in a form</h3>
<form method="post">
    Enter your name: <input type="text" name="username" required>
    <button type="submit" name="submit">Set Cookie</button>
</form>

<?php
if (isset($_POST['submit'])) {
    setcookie("username", $_POST['username'], time() + (86400 * 7), "/"); // 7 days
    echo "Cookie 'username' set to: " . htmlspecialchars($_POST['username']);
    echo "<br>Refresh or visit 3.2_read_cookie.php to read it.";
}
?>
</body>
</html>
