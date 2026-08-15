<?php
// 2.1 Numeric array, Associative array, Multidimensional array

// Numeric array for Monday to Saturday
$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

echo "<h3>Numeric Array (Days)</h3>";
for ($i = 0; $i < count($days); $i++) {
    echo ($i + 1) . " => " . $days[$i] . "<br>";
}

// Associative array for months with total days
$monthDays = array(
    "January" => 31, "February" => 28, "March" => 31, "April" => 30,
    "May" => 31, "June" => 30, "July" => 31, "August" => 31,
    "September" => 30, "October" => 31, "November" => 30, "December" => 31
);

echo "<h3>Associative Array (Month => Days)</h3>";
foreach ($monthDays as $month => $totalDays) {
    echo $month . " => " . $totalDays . " days<br>";
}

// Multidimensional array for laptops (company, model, price)
$laptops = array(
    array("company" => "Dell", "model" => "Inspiron 15", "price" => 55000),
    array("company" => "HP", "model" => "Pavilion 14", "price" => 62000)
);

echo "<h3>Multidimensional Array (Laptops)</h3>";
foreach ($laptops as $laptop) {
    echo "Company: " . $laptop['company'] . " | Model: " . $laptop['model'] . " | Price: Rs." . $laptop['price'] . "<br>";
}
?>
