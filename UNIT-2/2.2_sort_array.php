<!DOCTYPE html>
<html>
<head><title>Sort Array</title></head>
<body>
<h3>2.2 Sort an array entered by user</h3>
<form method="post">
    Enter comma separated numbers: <input type="text" name="values" required>
    <button type="submit" name="submit">Sort</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $arr = array_map('trim', explode(",", $_POST['values']));

    $asc = $arr;
    sort($asc); // ascending
    $desc = $arr;
    rsort($desc); // descending

    echo "Original: " . implode(", ", $arr) . "<br>";
    echo "Ascending: " . implode(", ", $asc) . "<br>";
    echo "Descending: " . implode(", ", $desc) . "<br>";
}
?>
</body>
</html>
