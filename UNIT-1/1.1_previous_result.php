<?php
// 1.1 Print Previous Semester Result using variables & constants
define("MAX_MARKS", 100);
define("COLLEGE_NAME", "Marwadi University");

$studentName = "Rajat Patel";
$semester    = 4;
$subject1 = 85; $subject2 = 78; $subject3 = 92; $subject4 = 88; $subject5 = 75;

$total = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
$maxTotal = MAX_MARKS * 5;
$percentage = ($total / $maxTotal) * 100;
?>
<!DOCTYPE html>
<html>
<head><title>Previous Semester Result</title></head>
<body>
    <h2><?php echo COLLEGE_NAME; ?> - Semester Result</h2>
    <p><b>Student Name:</b> <?php echo $studentName; ?></p>
    <p><b>Semester:</b> <?php echo $semester; ?></p>
    <table border="1" cellpadding="6">
        <tr><th>Subject</th><th>Marks (out of <?php echo MAX_MARKS; ?>)</th></tr>
        <tr><td>Subject 1</td><td><?php echo $subject1; ?></td></tr>
        <tr><td>Subject 2</td><td><?php echo $subject2; ?></td></tr>
        <tr><td>Subject 3</td><td><?php echo $subject3; ?></td></tr>
        <tr><td>Subject 4</td><td><?php echo $subject4; ?></td></tr>
        <tr><td>Subject 5</td><td><?php echo $subject5; ?></td></tr>
        <tr><td><b>Total</b></td><td><b><?php echo $total; ?> / <?php echo $maxTotal; ?></b></td></tr>
        <tr><td><b>Percentage</b></td><td><b><?php echo round($percentage, 2); ?>%</b></td></tr>
    </table>
</body>
</html>
