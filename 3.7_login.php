<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
<h3>3.7 Login (creates session)</h3>
<?php
session_start();
$error = "";
if (isset($_POST['login'])) {
    // Simple hardcoded check (replace with DB check as needed)
    if ($_POST['username'] === "admin" && $_POST['password'] === "admin123") {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $_POST['username'];
        header("Location: 3.7_home.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>
<?php if ($error): ?><p style="color:red;"><?php echo $error; ?></p><?php endif; ?>
<form method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit" name="login">Login</button>
</form>
<p><i>Hint: username = admin, password = admin123</i></p>
</body>
</html>
