<?php
//====write data in JSON format 

$filename = "file.txt";
$students = [
    [
        "fname"=> "Ariful",
        "lname"=> "Islam",
        "age"=> "23",
        "class"=> "15",
        "roll"=> "2568",
    ],
    [
        "fname"=> "Ahsan",
        "lname"=> "Ullah",
        "age"=> "25",
        "class"=> "10",
        "roll"=> "2268",
    ],
    [
        "fname"=> "Nazamul",
        "lname"=> "Huda",
        "age"=> "20",
        "class"=> "15",
        "roll"=> "2558",
    ],
    [
        "fname"=> "Shorif",
        "lname"=> "uddin",
        "age"=> "20",
        "class"=> "15",
        "roll"=> "2558",
    ],
];

///===file writing in json format
// $json_data = json_encode($students);
// file_put_contents($filename, $json_data, LOCK_EX);

///====file reading from json format
$data = file_get_contents($filename);
$print_data = json_decode($data,true); //here true is special parameter for object data to array data.
echo "<pre>";
print_r($print_data);
