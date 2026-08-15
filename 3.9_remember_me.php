<!DOCTYPE html>
<html>
<head><title>Remember Me Login</title></head>
<body>
<h3>3.9 Remember username & password using cookies</h3>

<?php
if (isset($_POST['login'])) {
    if (isset($_POST['remember'])) {
        setcookie("remember_user", $_POST['username'], time() + (86400 * 30), "/");
        setcookie("remember_pass", $_POST['password'], time() + (86400 * 30), "/");
    } else {
        setcookie("remember_user", "", time() - 3600, "/");
        setcookie("remember_pass", "", time() - 3600, "/");
    }
    echo "Login submitted for user: " . htmlspecialchars($_POST['username']) . "<br><br>";
}

$savedUser = isset($_COOKIE['remember_user']) ? $_COOKIE['remember_user'] : "";
$savedPass = isset($_COOKIE['remember_pass']) ? $_COOKIE['remember_pass'] : "";
?>

<form method="post">
    Username: <input type="text" name="username" value="<?php echo htmlspecialchars($savedUser); ?>" required><br><br>
    Password: <input type="password" name="password" value="<?php echo htmlspecialchars($savedPass); ?>" required><br><br>
    <input type="checkbox" name="remember" <?php echo $savedUser ? "checked" : ""; ?>> Remember me<br><br>
    <button type="submit" name="login">Login</button>
</form>
</body>
</html>
