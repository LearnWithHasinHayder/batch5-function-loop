<?php 
function evenOrOdd($number){
    if($number % 2 == 0){
        return "Even";
    }
    return "Odd";
}

$n = 17;
$result = evenOrOdd($n);
echo "The number $n is $result\n"; 

// function sendEmail(){}
// function printInvoice(){}
// function printReceipt(){}