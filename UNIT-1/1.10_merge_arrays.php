<!DOCTYPE html>
<html>
<head><title>Merge Two Arrays</title></head>
<body>
<h3>1.10 Merge two arrays</h3>
<form method="post">
    First array (comma separated): <input type="text" name="arr1" required><br><br>
    Second array (comma separated): <input type="text" name="arr2" required><br><br>
    <button type="submit" name="submit">Merge</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $arr1 = array_map('trim', explode(",", $_POST['arr1']));
    $arr2 = array_map('trim', explode(",", $_POST['arr2']));
    $merged = array_merge($arr1, $arr2);

    echo "Array 1: " . implode(", ", $arr1) . "<br>";
    echo "Array 2: " . implode(", ", $arr2) . "<br>";
    echo "Merged Array: " . implode(", ", $merged) . "<br>";
}
?>
</body>
</html>
