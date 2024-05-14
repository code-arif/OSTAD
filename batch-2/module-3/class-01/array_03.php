<?php
///multi dimensional array
///A multidimensional array is an array of many others

//how to create and access value
//===multi dimensional indexed array.====
$m_d_arr = [
    ['a','b','c'],
    ['d','e','f'],
    ['g','h','i']
];
// print_r($m_d_arr); //print all indexed array
// echo $m_d_arr[2][1]; //print specific value

//====multi dimensional indexed in foreach loop====
foreach ($m_d_arr as $row) //nested foreach
{
    foreach ($row as $element) {
        // echo $element . '</br>';
    }
    // echo "</br>";
}


////====multi dimensional associative array====
$m_d_a_arr = [
    ['firstName' => 'Ariful','lastName' => 'Islam','age' => 23],
    ['firstName' => 'Ahsanullah','lastName' => 'Ariful','age' => 23],
    ['firstName' => 'Md. Airful','lastName' => 'Islam','age' => 23]
];

// // echo $m_d_a_arr[2]['firstName'];
// print_r($m_d_a_arr);

//====multi dimensional associative array in foreach loop
foreach($m_d_a_arr as $child){
    foreach($child as $key => $value){
        echo "$key : $value</br>";
    }
}