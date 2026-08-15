<!DOCTYPE html>
<html>
<head><title>Registration Form</title></head>
<body>
<h3>3.10 Store registration form details into users table</h3>
<form method="post">
    Full Name: <input type="text" name="fullname" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit" name="register">Register</button>
</form>

<?php
if (isset($_POST['register'])) {
    include 'db_config.php';

    $fullname = $conn->real_escape_string($_POST['fullname']);
    $email    = $conn->real_escape_string($_POST['email']);
    $username = $conn->real_escape_string($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // hashed password

    $sql = "INSERT INTO users (fullname, email, username, password) 
            VALUES ('$fullname', '$email', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green;'>Registration successful! New user ID: " . $conn->insert_id . "</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }

    $conn->close();
}
?>

<!-- 
Run this SQL first to create the users table (see Unit4/setup_database.sql):

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100),
    email VARCHAR(100),
    username VARCHAR(50) UNIQUE,
    password VARCHAR(255)
);
-->
</body>
</html>
