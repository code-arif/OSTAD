<?php 
// echo getcwd();
$filename = "D:\\Xampp Server\\htdocs\\learn_with_OSTAD\\module-5(pro)\\pre-recorded\\class-04\\file.txt";

// $fp = fopen($filename,"r+"); //r= is for file read and write.
// // $line = fgets($fp);
// // echo $line;

// //fputs() function is alice of fwrite() function
// // fwrite($fp,"Orange\n");
// // fwrite($fp,"Mango\n");
// $line = fgets($fp);
// echo $line;
// fwrite($fp, "Plum\n");
// rewind($fp);
// fclose($fp);

//conclusion: the benefits of r+ mode is:
//1. file open read mode and write mode
//2. input new data without deleting old data.




//practice with chat gpt r+ mode

// File k r+ mode a open kora
// $file = fopen($filename, 'r+');

// if ($file) {
//     // File theke data read kora
//     $data = fread($file, filesize($filename));

//     // Kichu data file er shurute add kora
//     $newData = "This is some new data.\n";
//     fseek($file, 0);
//     fwrite($file, $newData);

//     // File er shesh baki data print kora
//     fseek($file, 0);
//     while (!feof($file)) {
//         echo fgets($file);
//     }

//     // File ta close kora
//     fclose($file);
// } else {
//     echo "File open kora jayna!";
// }






////==== w+ mode====
// $fp = fopen($filename,"w+");
// fwrite($fp, "Ariful\n");
// fwrite($fp, "MIM\n");
// rewind($fp);
// $line = fgets($fp);
// echo $line;

// fclose($fp);