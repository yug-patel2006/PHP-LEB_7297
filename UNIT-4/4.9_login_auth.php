<!DOCTYPE html>
<html>
<head><title>Login Authentication</title></head>
<body>
<h3>4.9 Authenticate user against users table</h3>

<?php
session_start();
$error = "";
if (isset($_POST['login'])) {
    include 'db_config.php';

    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user['username'];
            echo "<p style='color:green;'>Login successful! Welcome, " . htmlspecialchars($user['fullname']) . ".</p>";
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "Invalid username or password.";
    }
    $conn->close();
}
?>

<?php if ($error): ?><p style="color:red;"><?php echo $error; ?></p><?php endif; ?>

<form method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit" name="login">Login</button>
</form>
<p><i>Note: Register a user first using Unit3/3.10_registration_form.php</i></p>
</body>
</html>
