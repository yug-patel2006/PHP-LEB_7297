<!DOCTYPE html>
<html>
<head><title>Print Array Values</title></head>
<body>
<h3>1.8 Print values of array entered by user</h3>
<form method="post">
    Enter comma separated values (e.g. 10,20,30): 
    <input type="text" name="values" required>
    <button type="submit" name="submit">Submit</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $inputArray = explode(",", $_POST['values']);
    echo "<h4>You entered:</h4><ul>";
    foreach ($inputArray as $item) {
        echo "<li>" . htmlspecialchars(trim($item)) . "</li>";
    }
    echo "</ul>";
}
?>
</body>
</html>
