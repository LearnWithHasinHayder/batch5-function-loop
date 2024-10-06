<?php  
function add($num1, $num2) {
    $result = $num1 / $num2;
    return $result;
}

$result = add(15, 23);
echo "The sum of 15 and 23 is $result\n";