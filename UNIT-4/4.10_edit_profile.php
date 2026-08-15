<!DOCTYPE html>
<html>
<head><title>Edit Profile</title></head>
<body>
<h3>4.10 Edit Profile Page</h3>

<?php
include 'db_config.php';

// For demo purposes we edit user with id = 1. In a real app, use the logged-in user's session ID.
$userId = 1;

if (isset($_POST['update'])) {
    $fullname = $conn->real_escape_string($_POST['fullname']);
    $email = $conn->real_escape_string($_POST['email']);

    $sql = "UPDATE users SET fullname = '$fullname', email = '$email' WHERE id = $userId";
    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green;'>Profile updated successfully.</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }
}

$result = $conn->query("SELECT * FROM users WHERE id = $userId");
$user = $result ? $result->fetch_assoc() : null;
$conn->close();
?>

<?php if ($user): ?>
<form method="post">
    Full Name: <input type="text" name="fullname" value="<?php echo htmlspecialchars($user['fullname']); ?>" required><br><br>
    Email: <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required><br><br>
    Username (read-only): <input type="text" value="<?php echo htmlspecialchars($user['username']); ?>" readonly><br><br>
    <button type="submit" name="update">Update Profile</button>
</form>
<?php else: ?>
    <p>No user found with ID <?php echo $userId; ?>. Register a user first (see Unit3/3.10_registration_form.php).</p>
<?php endif; ?>
</body>
</html>
