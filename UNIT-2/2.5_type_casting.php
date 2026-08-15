<?php
// 2.5 Type casting with settype and gettype
$var1 = "123";
echo "Original value: $var1 <br>";
echo "Original type: " . gettype($var1) . "<br>";

settype($var1, "integer");
echo "After settype to integer: $var1 <br>";
echo "New type: " . gettype($var1) . "<br><br>";

$var2 = 45.67;
echo "Original value: $var2 <br>";
echo "Original type: " . gettype($var2) . "<br>";

settype($var2, "string");
echo "After settype to string: $var2 <br>";
echo "New type: " . gettype($var2) . "<br><br>";

$var3 = 0;
echo "Original value: $var3 <br>";
settype($var3, "boolean");
echo "After settype to boolean: " . var_export($var3, true) . "<br>";
echo "New type: " . gettype($var3);
?>
