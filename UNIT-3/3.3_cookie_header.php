<?php
// 3.3 Use cookie with header (redirect based on cookie)
if (!isset($_COOKIE['visited'])) {
    setcookie("visited", "yes", time() + 3600, "/");
    header("Location: 3.3_cookie_header.php?first=1");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><title>Cookie with Header</title></head>
<body>
<?php if (isset($_GET['first'])): ?>
    <h3>Welcome! This is your first visit. A cookie has been set using header() redirect.</h3>
<?php else: ?>
    <h3>Welcome back! The 'visited' cookie was already present.</h3>
<?php endif; ?>
</body>
</html>
