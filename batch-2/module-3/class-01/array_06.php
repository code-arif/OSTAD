<?php
//array transformation function

//01. array_column() --Return the value from a single column of the input array.
$m_d_a_arr = [
    ['firstName' => 'Ariful','lastName' => 'Islam','age' => 23],
    ['firstName' => 'Ahsanullah','lastName' => 'Ariful','age' => 23],
    ['firstName' => 'Md. Airful','lastName' => 'Islam','age' => 23],
    ['firstName' => 'Nur mohammad','lastName' => 'Ali','age' => 5]

];
$column = array_column($m_d_a_arr,'age');
// print_r($column);

//02. array_flip() -- Exchange all keys with their associated values in an array.
$arr =  ['firstName' => 'Nur mohammad','lastName' => 'Ali','age' => 5];
$flip = array_flip($arr);
// print_r($flip); //reverse key to value
echo "</br>";
// print_r($arr);

//03. array_replace -- Replace single value by another value
$fruits = ['mango','apple','jackfruit','orange'];
$newItem = [0 => 'aam', 3 => 'komola'];
$replace = array_replace($fruits,$newItem);
print_r($replace);


//04. array_marge() -- Marge one or more arrays
$arr1 = ['a','b','c','d'];
$arr2 = ['e','f','g','h'];
$arr3 = ['i','j','k','l'];
$marge = array_merge($arr1,$arr2,$arr3);
// print_r($marge);

//05. array_filter() -- filter elements of an array using a callback function
$numbers = [1,2,3,4,5,6,7,8,9,10];
function even($b){
    return $b%2==0;
}
$evenNumbers = array_filter($numbers,'even');
// print_r($evenNumbers);
function odd($n){
    return $n%2!==0;
}
$oddNumbers = array_filter($numbers,'odd');
// print_r($oddNumbers);

//06. array_map() -- applies a callback function to the elements of one or more arrays.
$numbers = [1,2,3,4,5,6,7,8,9,10];
function add7($a){
    return ($a+78)*5;
}
$newArr = array_map('add7',$numbers);
// print_r($newArr);