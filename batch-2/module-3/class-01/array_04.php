<?php
//array creation and manipulation build in function in php

//===01. array() -- for create array
$arr = array('a','b','c');
// print_r($arr);
//===02. print_r() -- print array


//===03. array_values() -- specially for associative array
//example:
$mySelf = ['firstName' => 'Ariful','lastName' => 'Islam','age' => 23];
$value = array_values($mySelf); //array_values print or return only values not keys. this function will omit array keys.
// print_r($value);


//====04. array_keys() -- specially for associative array
//example:
$mySelf = ['firstName' => 'Ariful','lastName' => 'Islam','age' => 23];
$values = array_keys($mySelf); //array_keys print or return only keys not values. this function will omit array values 
// print_r($values);


//===05. array_combine() -- combine two indexed array to one associative array
//example:
$arr01 = ['name','age','grade'];
$arr02 = ['Ariful','23','4.95'];
$val = array_combine($arr01,$arr02);
// print_r($val);

//06. array_fill() -- fill an array with values
$filled = array_fill(0,15,"code_arif"); //this function create an array from 0 to 14 index number with value.
// print_r($filled);

//07. array_push() -- adds one or more element to the end of an array.
$Division = ['Dhaka','Rajshahi','khulna'];
// print_r($Division);
array_push($Division,"Sylhet","Chattorgam","Rongpur","Gazipur");
// print_r($Division);


//08. array_pop() -- remove the last element form an array.
$flower = ['Rose','Jasmine','Mari Gold'];
array_pop($flower); //remove mari gold element.
// print_r($flower);


//09. array_shift() -- remove the first element form an array.
$Division = ['Dhaka','Rajshahi','khulna'];
array_shift($Division);
// print_r($Division);

//10. array_unshift() -- adds one or more element to the first of an array.
$Division = ['Dhaka','Rajshahi','khulna'];
array_unshift($Division,'Barishal');
// print_r($Division);


//11. array_slice() -- Extract a portion of the array
$fruits = ['Jackfruit','Mango','Apple','Orange','Plum'];
$slice = array_slice($fruits,1,3);
// print_r($slice);

//12. array_splice() -- Replace a portion of the array an replace it with something else.
$fruits = ['Jackfruit','Mango','Apple','Orange','Plum'];
array_splice($fruits,1,2,['Kastard','Karambola']);
print_r($fruits);