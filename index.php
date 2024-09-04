<?php
declare(strict_types=1);

// Constants
define("STATUS_PAID", "paid");
const PI = 3.14159;

// Variables types
$firstName = "Arthur";
$completed = true;
$score = 75;
$price = 1.99;

echo $firstName . " Status Order: " . STATUS_PAID . '<br/>';

// ========================================================

if ($score >= 75)
    echo "PASS";
else if ($score >= 90)
    echo "PASS ULTRA";
else 
    echo "FAIL";

// --------------------------------

function sum(int $x, int $y) {
    return $x + $y;
}
echo '<br/>' . sum(2, 3) . '<br/>';

// --------------------------------

echo "While: ";
$i = 1;
while ($i <= 10) {
    if ($i == 10) {
        echo $i . '<br/>';
        break;
    }
    echo $i++ . ', ';
}

// --------------------------------

echo "For: ";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 10) {
        echo $i . '<br/>';
        break;
    }
    echo $i . ', ';
}

// --------------------------------

$languages = ["PHP", "Java", "Python"];
$languages[] = "C++";
$length = count($languages);

for ($i = 0; $i < $length; $i++) {
    if ($i == $length - 1) {
        echo $languages[$i] . '<br/>';
        break;
    }
    echo $languages[$i] . ', ';
}

// --------------------------------

foreach($languages as $language) {
    echo $language . '<br/>';
}

// --------------------------------

$paymentStatus = "rejected";

switch($paymentStatus) {
    case "paid":
        echo "Paid";
        break;

    case "rejected":
    case "declined":
        echo "Payment Declined";
        break;

    case "pending":
        echo "Pending Payment";
        break;

    default:
        echo "Unknown Payment Status";
}

// --------------------------------
echo '<br/>';

$paymentStatusDisplay = match($paymentStatus) {
    "paid" => "Paid",
    "rejected" => "Payment Declined",
    "declined" => "Payment Declined",
    "pending" => "Pending Payment",
    default => "Unknown Payment Status",
};

echo "Match: " . $paymentStatusDisplay;
echo '<br/>';echo '<br/>';

// --------------------------------

// declare - ticks (will be called after a certain number of functions pass)
function onTick() {
    echo "Tick <br/>";
}
register_tick_function("onTick");
declare(ticks=3);

$i = 0;
$length = 10;
while ($i < $length) {
    echo $i++ . "<br/>";
}

// declare - encoding


// declare - strict_types

?>