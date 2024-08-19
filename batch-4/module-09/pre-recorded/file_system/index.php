<?php
$filename = "C:\\xampp\\htdocs\\php\\file_system\\something.txt"; //changeable
if(is_writable($filename)){
$existingData = file_get_contents($filename); //old data storing
$fp = fopen($filename,"w"); //w = write mode
fwrite($fp, $existingData);
fwrite($fp,"Jack-fruit \n");
fwrite($fp,"Orange \n");
fwrite($fp,"Lichi \n");
fclose($fp);
}