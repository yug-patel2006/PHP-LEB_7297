<?php
// 1.5 Print 5 to 10 using For and ForEach
echo "<h3>Using For loop</h3>";
for ($i = 5; $i <= 10; $i++) {
    echo $i . " ";
}

echo "<h3>Using ForEach loop</h3>";
$range = range(5, 10);
foreach ($range as $value) {
    echo $value . " ";
}
?>
