<?php

function factorial($number) {
    if ($number < 0) {
        return "number must be a non-negative integer.";
    }
    if ($number === 0) {
        return 1;
    }
    
    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }
    
    return $result;
}


echo factorial(4); // 120
echo "<br>";
echo factorial(5); // 120
echo "<br>";
echo factorial(6); // 120
echo "<br>";
echo factorial(7); // 120
