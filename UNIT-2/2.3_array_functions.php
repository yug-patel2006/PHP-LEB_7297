<?php
// 2.3 Array functions demo
echo "<h3>1) array_change_key_case()</h3>";
$arr = array("NAME" => "Rajat", "AGE" => 21);
print_r(array_change_key_case($arr, CASE_LOWER));
echo "<br>";
print_r(array_change_key_case($arr, CASE_UPPER));

echo "<h3>2) array_chunk() - array of months</h3>";
$months = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
print_r(array_chunk($months, 4));

echo "<h3>3) array_count_values()</h3>";
$fruits = array("apple","banana","apple","mango","banana","apple");
print_r(array_count_values($fruits));

echo "<h3>4) array_pop()</h3>";
$nums = array(10,20,30,40);
$popped = array_pop($nums);
echo "Popped: $popped <br>Remaining: "; print_r($nums);

echo "<h3>5) array_push()</h3>";
$nums2 = array(1,2,3);
array_push($nums2, 4, 5);
print_r($nums2);

echo "<h3>6) array_unshift()</h3>";
$nums3 = array(3,4,5);
array_unshift($nums3, 1, 2);
print_r($nums3);

echo "<h3>7) array_shift()</h3>";
$nums4 = array(10,20,30);
$shifted = array_shift($nums4);
echo "Shifted: $shifted <br>Remaining: "; print_r($nums4);
?>
