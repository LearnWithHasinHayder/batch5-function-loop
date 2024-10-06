<?php 
//calculator
function add($num1, $num2){
    $result = $num1 + $num2;
    return $result;
}

function subtract($num1, $num2){
    $result = $num1 - $num2;
    return $result;
}

function multiply($num1, $num2){
    $result = $num1 * $num2;
    return $result;
}

function divide($num1, $num2){
    $result = $num1 / $num2;
    return $result;
}

function modulus($num1, $num2){
    $result = $num1 % $num2;
    return $result;
}

$summation = add(15, 20);
echo "The sum of 15 and 20 is $summation\n";

$difference = subtract(15, 20);
echo "The difference of 15 and 20 is $difference\n";

$product = multiply(15, 20);
echo "The product of 15 and 20 is $product\n";

$quotient = divide(15, 20);
echo "The quotient of 15 and 20 is $quotient\n";

$remainder = modulus(15, 20);
echo "The remainder of 15 and 20 is $remainder\n";