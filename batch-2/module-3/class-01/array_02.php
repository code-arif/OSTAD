<?php
//associative array

//create associative array
//===key=>value(key value pare)
$myself=['name'=>"md. Ariful islam",'age'=> "23",
'brand'=>"code_arif",'aim'=>"Create a tech platform"];
// echo $myself['age'];
// echo print_r($myself);
//Associative arrays can be easily converted to JSON data

//foreach loop through an associative array
foreach($myself as $key=>$value){
    // echo "$key: $value </br>";
}


//========practice by Myself==========
$grades = [
    "CSE101" => "A+",
    "ENG451" => "B",
    "BANG102" => "C",
    "MATH123" => "D",
    "ENV111" => "A-"
];
foreach($grades as $key => $value){
    // echo "$key: $value </br>";
}
// echo print_r($grades);

//====if array is not same quantity====
$my_self = ['Name', 'Age', 'Dist', 'Th'];
$my_self_ans = ['Ariful', '23', 'Sirajganj'];

foreach ($my_self as $key => $value) {
    // echo "$value: " . ($my_self_ans[$key] ?? '') . " </br>";
}


//superglobals in associative array
print_r($_ENV);
