<?php
// 1.4 Print current month using if..else and switch case
$monthNum = date("n"); // 1-12

if ($monthNum == 1) { $monthIfElse = "January"; }
elseif ($monthNum == 2) { $monthIfElse = "February"; }
elseif ($monthNum == 3) { $monthIfElse = "March"; }
elseif ($monthNum == 4) { $monthIfElse = "April"; }
elseif ($monthNum == 5) { $monthIfElse = "May"; }
elseif ($monthNum == 6) { $monthIfElse = "June"; }
elseif ($monthNum == 7) { $monthIfElse = "July"; }
elseif ($monthNum == 8) { $monthIfElse = "August"; }
elseif ($monthNum == 9) { $monthIfElse = "September"; }
elseif ($monthNum == 10) { $monthIfElse = "October"; }
elseif ($monthNum == 11) { $monthIfElse = "November"; }
else { $monthIfElse = "December"; }

echo "Current month (if..else): " . $monthIfElse . "<br>";

switch ($monthNum) {
    case 1: $monthSwitch = "January"; break;
    case 2: $monthSwitch = "February"; break;
    case 3: $monthSwitch = "March"; break;
    case 4: $monthSwitch = "April"; break;
    case 5: $monthSwitch = "May"; break;
    case 6: $monthSwitch = "June"; break;
    case 7: $monthSwitch = "July"; break;
    case 8: $monthSwitch = "August"; break;
    case 9: $monthSwitch = "September"; break;
    case 10: $monthSwitch = "October"; break;
    case 11: $monthSwitch = "November"; break;
    case 12: $monthSwitch = "December"; break;
    default: $monthSwitch = "Invalid";
}

echo "Current month (switch): " . $monthSwitch;
?>
