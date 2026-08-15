<!DOCTYPE html>
<html>
<head><title>Reverse Array</title></head>
<body>
<h3>1.9 Reverse an array entered by user</h3>
<form method="post">
    Enter comma separated values (e.g. 1,2,3,4): 
    <input type="text" name="values" required>
    <button type="submit" name="submit">Reverse</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $inputArray = explode(",", $_POST['values']);
    $inputArray = array_map('trim', $inputArray);
    $reversed = array_reverse($inputArray);

    echo "Original array: " . implode(", ", $inputArray) . "<br>";
    echo "Reversed array: " . implode(", ", $reversed) . "<br>";
}
?>
</body>
</html>
