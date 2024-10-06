<?php 
function greet($name, $time = "morning") {
    echo "Good $time $name\n";
}

greet( "John");
greet( "Jane");
greet( "Doe", "evening");
greet("John");