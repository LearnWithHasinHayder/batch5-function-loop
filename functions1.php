<?php 
function printStar(){
    $starCount = 100;
    for($i = 1; $i <= $starCount; $i++){
        echo "*";
    }
    echo "\n";
}

$starCount = 100;
printStar();

echo "This is heading\n";
printStar();
echo "This is a paragraph. This is a paragraph. This is a paragraph. This is a paragraph. This is a paragraph. \n";
printStar();
echo "Signature\n";
printStar();
