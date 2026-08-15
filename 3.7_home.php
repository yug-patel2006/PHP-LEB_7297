<?php
// Home page - only accessible when logged in
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: 3.7_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><title>Home</title></head>
<body>
<h3>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h3>
<p>You are logged in.</p>
<a href="3.7_logout.php">Logout</a>
</body>
</html>
