<?php
// Server-side content endpoint used by 5.10 nav menu
$section = isset($_GET['section']) ? $_GET['section'] : '';

$content = [
    'home'    => "<h4>Home</h4><p>Welcome to our website homepage.</p>",
    'blog'    => "<h4>Blog Posts</h4><p>1. Getting Started with PHP<br>2. AJAX Basics<br>3. jQuery Tips & Tricks</p>",
    'products'=> "<h4>Products</h4><p>- Product A: Rs.999<br>- Product B: Rs.1499<br>- Product C: Rs.799</p>",
    'contact' => "<h4>Contact Us</h4><p>Email: info@example.com<br>Phone: +91-9876543210</p>",
];

echo isset($content[$section]) ? $content[$section] : "<p>Section not found.</p>";
?>
