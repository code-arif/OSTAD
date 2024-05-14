<?php
////======data serialize=======////

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

//data serialize
// $data = serialize($students);
// file_put_contents($filename, $data); //write file

//===file reading
// $data_from_file = file_get_contents($filename);
// $print_data = unserialize($data_from_file);
// echo "<pre>";
// print_r($print_data);

//===delete one data from serialize data
// unset($print_data[2]);
// $data = serialize($print_data);
// file_put_contents($filename, $data);

