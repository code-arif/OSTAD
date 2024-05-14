<?php
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

//=====array file writing=======
/*
$fp = fopen($filename,"w");
foreach ($students as $student) {
    $data = sprintf("%s, %s, %s, %s, %s\n",$student["fname"], $student["lname"], $student["age"], $student["class"], $student["roll"]);
    fwrite($fp, $data);

    //this file is comma separated so this file name is CSV. CSV means Comma Separated Value
}
fclose($fp);


//======array file reading from browser=======
$fp = fopen($filename,"r");
while($data = fgets($fp)) {
    $students = explode(",",$data);
    printf("First Name = %s </br>Last Name = %s</br>Age = %s</br>Class = %s</br>Roll = %s</br></br>", $students[0], $students[1], $students[2], $students[3], $students[4]);
}
fclose($fp);
*/

//===Thus both writing data into the file and reading data from the file is painful and time consuming. so we can use fputcsv() & fgetcsv() function

//====file writing====
// $fp = fopen($filename,"w");
// foreach ($students as $student) {
//     fputcsv($fp, $student);
// }
// fclose($fp);

//====file reading====
// $fp = fopen($filename,"r");
// while($students = fgetcsv($fp)){
//     printf("First Name = %s </br>Last Name = %s</br>Age = %s</br>Class = %s</br>Roll = %s</br></br>", $students[0], $students[1], $students[2], $students[3], $students[4]);
// }
// fclose($fp);


//====add extra student====
// $students = [
//     'fname' => 'Junaed',
//     'lname' => 'Islam',
//     'age' => '5',
//     'class' => '2',
//     'roll'=> '0',
// ];
// $fp = fopen($filename,'a');
// fputcsv($fp, $students);
// fclose($fp);

//====deleting data one by one====
// $data = file($filename);
// unset($data[4]);
// $fp = fopen($filename,"w");
// foreach ($data as $line) {
//     fwrite( $fp, $line);
// }
// echo"<pre>";
// print_r($data);
// fclose($fp);
