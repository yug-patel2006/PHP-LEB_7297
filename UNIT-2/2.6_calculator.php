<!DOCTYPE html>
<html>
<head><title>Calculator</title></head>
<body>
<h3>2.6 User defined function calculator</h3>
<form method="post">
    Number 1: <input type="number" step="any" name="num1" required><br><br>
    Number 2: <input type="number" step="any" name="num2" required><br><br>
    Operation:
    <select name="operation">
        <option value="add">Add (+)</option>
        <option value="sub">Subtract (-)</option>
        <option value="mul">Multiply (*)</option>
        <option value="div">Divide (/)</option>
    </select><br><br>
    <button type="submit" name="submit">Calculate</button>
</form>

<?php
function calculator($num1, $num2, $operation) {
    switch ($operation) {
        case 'add': return $num1 + $num2;
        case 'sub': return $num1 - $num2;
        case 'mul': return $num1 * $num2;
        case 'div':
            if ($num2 == 0) return "Error: Division by zero";
            return $num1 / $num2;
        default: return "Invalid operation";
    }
}

if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = calculator($num1, $num2, $operation);
    echo "<h4>Result: $result</h4>";
}
?>
</body>
</html>
