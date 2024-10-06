<?php 

function doSomething1(){
    echo "Doing something 1\n";
}

function doSomething2(){
    echo "Doing something 2\n";
}

function doSomething3(){
    echo "Doing something 3\n";
}

function doSomething(){
    doSomething1();
    doSomething2();
    doSomething3();
}


doSomething();

echo "I am doing something again \n";

doSomething();
