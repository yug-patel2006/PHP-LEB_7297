<?php
// 1.3 Operators in PHP
$a = 20; $b = 6;

echo "<h3>Arithmetic Operators</h3>";
echo "a + b = " . ($a + $b) . "<br>";
echo "a - b = " . ($a - $b) . "<br>";
echo "a * b = " . ($a * $b) . "<br>";
echo "a / b = " . ($a / $b) . "<br>";
echo "a % b = " . ($a % $b) . "<br>";
echo "a ** b = " . ($a ** 2) . "<br>";

echo "<h3>Assignment Operators</h3>";
$c = $a; $c += $b; echo "c += b => $c<br>";
$c = $a; $c -= $b; echo "c -= b => $c<br>";
$c = $a; $c *= $b; echo "c *= b => $c<br>";

echo "<h3>Comparison Operators</h3>";
var_dump($a == $b);
var_dump($a != $b);
var_dump($a > $b);
var_dump($a < $b);
var_dump($a >= $b);
var_dump($a <= $b);

echo "<h3>Logical Operators</h3>";
$x = true; $y = false;
var_dump($x && $y);
var_dump($x || $y);
var_dump(!$x);

echo "<h3>Increment / Decrement Operators</h3>";
$i = 5;
echo "i++ => " . $i++ . " (now $i)<br>";
echo "++i => " . ++$i . "<br>";
echo "i-- => " . $i-- . " (now $i)<br>";
echo "--i => " . --$i . "<br>";
?>
