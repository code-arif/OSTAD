<?php
//php function are two types
//1. build in function
//2. user-define function

///////////PHP_EOL = PHP End Of Line


//===========static function or without parameter============//
/*function addTwoNum(){
    $a = 25;
    $b = 45;
    echo $a +$b;
}
addTwoNum(); */

//==========dynamic function or with parameter=============//
/*function addTwoNum($a, $b){
    echo $a + $b;
}
addTwoNum(5,9);*/


//==========default parameter value===========//
//after passing parameter we can fixed a parameter value
//explanation: when I push parameter for $b variable though $b variable contain default value but this is not working. if I will not push parameter for $b variable then default value works.
//we can use multiple default parameter value
//if we will use default parameter value then we have to put this type variable last of series.

/*
function addTwoNum($a, $b = 25)//$b = 25 is a default parameter value.
{
    echo $a + $b;
}
addTwoNum(5,9); */


/*function addNum($a, $b, $c = 45, $d = 25){
    echo $a + $b + $c + $d;
}
addNum(5,9); */

//=========function parameters/params data type hinting=======//
///NB: parameter type hinting is a most important topic
//Parameter type hinting means to tell the type of the parameter before its type.

//======php strict mood enable======//
// declare (strict_types=1);
//here 1 means true
/*function mySelf(int|string|float|null $age, string $name){
    echo $age ."</br>" ;
    echo $name;
}
mySelf(250.3, 'Ariful'); */


//=============variadic function============
//variadic function sob gulo value variable er moddhe array akare hold kore rakhe
/* function sum(...$numbers){
    echo $numbers[1];
    // echo array_sum($numbers);
    //array_sum is a build in function in PHP
}
sum(10,20,30); */

//================anonymous function or IIF or immediately invocable/invoked function==============
//type-01
/*
(function(){
    $a = 5;
    $b = 6;
    echo $a + $b;
})();
*/

//type-02
/*
$demo = function($a , $b){
    echo $a + $b;
};
$demo(10, 400);
*/

//anonymous function to arrow function
/*
$demo = fn($a, $b)=>$a+$b;
echo $demo(15, 25);//without echo this function is not running.
*/

//========function return=========
/*function avg($a, $b){
    $result =  ($a + $b)/2;
    return $result;
}
// echo avg(10, 50) + 20;

//=======function return data type======

function avgg($a, $b):?int{
    $result =  ($a + $b)/2;
    return $result;
}
echo avgg(10, 51);

*/


