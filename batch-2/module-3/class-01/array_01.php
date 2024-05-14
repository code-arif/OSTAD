<?php
//Indexed array
//All array is indexed array


//How to create
//We can define array in two ways
//1. array method
$arr = array('apple','banana','mango');

//2. with square bracket
$arr1 = ['apple','banana','mango'];
// echo $arr1[2];
// echo $arr[1];

//for loop through an Indexed array
$arr1 = ['apple','banana','mango','lichi','plum'];
for($i = 0; $i<count($arr1);$i++){
    // echo "$arr1[$i] </br>";
}

//foreach loop through an Indexed array
$counter = 1;
foreach($arr1 as $item){
    // echo "$counter. $item </br>";
    $counter++;
}




////=========practice by Myself============
$course = ["CSE101","ENG451","BANG102","MATH123","ENV111"];
$grade = ["A","A-","C","B","D"];
$count = count($course);
// echo $count;
for($i = 0; $i<$count; $i++){
    // echo "$course[$i]: $grade[$i] </br>";
}

////========again=========

$my_self = ['Name', 'Age', 'Dist', 'Th'];
$my_self_ans = ['Ariful', '23', 'Sirajganj'];

$count = count($my_self);
// echo $count;

for ($i = 0; $i < $count; $i++) {
    if (isset($my_self_ans[$i])) {
        echo $my_self[$i] . ': ' . $my_self_ans[$i] . "</br>";
    } else {
        echo $my_self[$i] . ': (Not provided)';
    }
}




//==>lat's go solve same problem in associative array