<?php
// 2.4 String functions demo
$str = "Web Development using PHP";

echo "<h3>1) strlen()</h3>";
echo "Length: " . strlen($str) . "<br>";

echo "<h3>2) strpos()</h3>";
echo "Position of 'PHP': " . strpos($str, "PHP") . "<br>";

echo "<h3>3) str_word_count()</h3>";
echo "Word count: " . str_word_count($str) . "<br>";

echo "<h3>4) strrev()</h3>";
echo "Reversed: " . strrev($str) . "<br>";

echo "<h3>5) strtolower()</h3>";
echo "Lowercase: " . strtolower($str) . "<br>";

echo "<h3>6) strtoupper()</h3>";
echo "Uppercase: " . strtoupper($str) . "<br>";
?>
