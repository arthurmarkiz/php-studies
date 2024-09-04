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

function sum(int $x, int $y): int {
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
unregister_tick_function("onTick");

echo '<br/>';echo '<br/>';
// --------------------------------

// require / require_once / include / include_once 

// require "file.php";
// include "file.php";

// require: mandatory (will cause a fatal error if not found)
// include: will cause an error if not found, but the app will continue running
// _once: will include/require if not have in the file yet

// --------------------------------

function multiplication(int|float $n1, int|float $n2): int|float {
    return $n1 * $n2;
}
$x1 = 5;
echo multiplication(n1: $x1, n2: 10) . '<br/>';

// --------------------------------

function sumAll(int ...$numbers): int {
    // $sum = 0;
    // foreach($numbers as $number) {
    //     $sum += $number;
    // }
    // return $sum;
    return array_sum($numbers);
}
echo sumAll(3, 5, 10, 2, 20) . '<br/>';

$anotherNumbers = [10, 20, 30, 40];
echo sumAll(...$anotherNumbers) . '<br/>';

// --------------------------------
// Anonymous function

$subtract = function (int $n1, int $n2): int {
    return $n1 - $n2;
};
echo $subtract(5, 2) . '<br/>';

// --------------------------------
// Arrow function

$array = [1, 2, 3, 4];
echo '<pre>';
print_r(array_map(fn($number) => $number * 2, $array));
echo '</pre>';

echo '<br/>';echo '<br/>';
// --------------------------------
// Date & Time

date_default_timezone_set('UTC');
echo time() . '<br/>';
echo date_default_timezone_get() . '<br/>';
echo date('d/m/Y g:ia') . '<br/><br/>';

date_default_timezone_set('America/Sao_Paulo');
echo date_default_timezone_get() . '<br/>';
echo date('d/m/Y g:ia');

?>