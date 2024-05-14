<?php 

//==========file reading system========

// echo getcwd(); //cwd function print this file directory. or we can use to get current file directory terminal -pwd command.
//getcwd() build function.
//pwd terminal command.

$filename = "text.txt";

//====file read one by one line====
$fp = fopen($filename,'r');   //fp = file pointer & fopen = file open PHP pre build function. here "r" is file execution mode. r = read mode.
//here some file execution mode.
// r = reading mode
// w = write mode
// a = append mode etc....

// $line = fgets($fp);   //fgets() function is for one line execution. if I call fgets() function again then print next line in this file... we can set limitation in fgets() file. like next line.
// $line = fgets($fp, "6"); //if we set line limitation this function print only this numbers character. but if we don't set line limitation then print full line.
// echo $line;
// fclose($fp);   //fclose = file close

//====read full file using loop====
while($line = fgets($fp)){
    echo $line ."</br>";
}
rewind($fp); //file execution from starting point but this function do not deserve a value for starting.
fseek($fp,-70,SEEK_END); //This function moves the file pointer from its current position to a new position, forward or backward, specified by the number of bytes
// +value omit character from first
// -value read character from last and mast use SEED_END
while($line = fgets($fp)){
    echo $line, "</br>";
}

fclose($fp);

//====file read quickly====
$data = file($filename);
echo "<pre>";
// print_r($data);
// echo $data[2];
echo "</br>";
//====file get content====
$data = file_get_contents($filename);
// echo $data;