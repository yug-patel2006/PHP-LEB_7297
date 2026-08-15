<?php
// 1.7 Include a file using include and require function
echo "<h3>Using include</h3>";
include 'include_file.php';
echo "Shared variable: " . $sharedMessage . "<br>";

echo "<h3>Using require</h3>";
require 'include_file.php';
echo "Shared variable again: " . $sharedMessage . "<br>";
?>
