<?php 
function printStar($starCount){
    for($i = 1; $i <= $starCount; $i++){
        echo "*";
    }
    echo "\n";
}

printStar(20);
printStar(100);
printStar(50);