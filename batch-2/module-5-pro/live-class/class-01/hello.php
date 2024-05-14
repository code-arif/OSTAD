<?php 
//php manual website
//how to write code in file
//session

// echo "hello";
// echo "todays date" . date("d-m-y");

/*
///====write file data
$filename = "./data.txt";
$new_data = "ahsan\n";
$data1 = file_put_contents($filename, $new_data, FILE_APPEND);

///====read file data
$data = file_get_contents($filename); //read all file at a time
echo nl2br($data); //here nl2br = new line to break
*/

/*
///====file reading simple system
$filename = "data.txt";
$fp = fopen($filename,"r");
while($line = fgets($fp, 5)){ //we can pass numeric parameter for limitation
    echo $line;
    echo "</br>";
}
fclose($fp); //not necessary
*/

/*
///====file writing simple system
$filename = "data.txt";
$fp = fopen($filename,"w"); //here FILE_APPEND parameter is not working
for ($i = 0; $i < 15; $i++) {
    fwrite($fp,"Ariful {$i} \n");
}
fclose($fp);
*/

/*
$filename = "data.txt";
$file = file($filename);
echo "<pre>";
print_r($file);
*/

// echo file_exists("data.txt"); //output: 1
// echo is_dir("data.txt"); //output: 0

