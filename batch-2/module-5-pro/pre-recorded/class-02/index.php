<?php
//==========file writing system=========

// $filename = "something.txt";
// echo getcwd();
$filename = "D:\\Xampp Server\\htdocs\\learn_with_OSTAD\\module-5(pro)\\pre-recorded\\class-02\\something.txt";

// $fp = fopen($filename,"w"); //write mode
// $line = fgets($fp);
// echo"$line";

// fwrite($fp,"orange");
// fwrite($fp,"Apple");
// fclose($fp); //fclose is not must necessary 

////====If we open file in "w" mode then every time data will be deleted and new data will be input. We can use another approach to this problem.=====///

// $exist_file = file_get_contents($filename);
// $fp = fopen($filename,"w"); //write mode
// fwrite($fp,$exist_file);
// fwrite($fp, "Orange\n");
// fwrite($fp, "Mango\n");

///=====Another method is to input new data without deleting the file data.=====
$fp = fopen($filename, 'a'); //append mode
fwrite($fp, "Ahsan\n");
fwrite($fp, "MIM\n");