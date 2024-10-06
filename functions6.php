<?php 
function addFiveNumbers($num1, $num2, $num3, $num4, $num5){
    $sum = $num1 + $num2 + $num3 + $num4 + $num5;
    return $sum;
}

$sum = addFiveNumbers(10, 20, 30, 40, 50);
echo "The sum of 10, 20, 30, 40 and 50 is $sum\n";