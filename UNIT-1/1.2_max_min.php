<?php
// 1.2 Find maximum and minimum number
$numbers = [45, 12, 89, 3, 67, 34, 90, 21];

$max = $numbers[0];
$min = $numbers[0];

foreach ($numbers as $num) {
    if ($num > $max) $max = $num;
    if ($num < $min) $min = $num;
}

echo "Numbers: " . implode(", ", $numbers) . "<br>";
echo "Maximum number: " . $max . "<br>";
echo "Minimum number: " . $min . "<br>";

echo "<br>Using built-in functions -> Max: " . max($numbers) . ", Min: " . min($numbers);
?>
