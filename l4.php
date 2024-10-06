<?php 
//students array with gender and name
$students = [
    ["Student A", "F"],
    ["Student B", "M"],
    ["Student C", "F"],
    ["Student D", "M"],
    ["Student E", "F"],
    ["Student F", "M"],
    ["Student G", "F"],
    ["Student H", "M"],
    ["Student I", "F"],
    ["Student J", "F"],
    ["Student K", "F"],
    ["Student L", "M"],
    ["Student M", "F"],
    ["Student N", "M"],
    ["Student O", "F"],
    ["Student P", "F"],
    ["Student Q", "F"],
    ["Student R", "M"],
    ["Student S", "F"],
    ["Student T", "M"],
    ["Student U", "F"],
    ["Student V", "M"],
    ["Student W", "F"],
    ["Student X", "M"],
    ["Student Y", "F"],
    ["Student Z", "M"]
];

foreach($students as $student){
    // if($student[1] == "F"){
    //     continue;
    // }
    // echo $student[0] . "\n";
    if($student[1] == "M"){
        echo $student[0] . "\n";
    }
}