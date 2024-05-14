<?php
//file_put_content
$filename = "file.txt";
// file_put_contents($filename,"Apple");
// file_put_contents($filename,"Orange");
//simple file_put_content is input new data deleting old data. so we use this trick.

// file_put_contents($filename,"\nLichi", FILE_APPEND); //FILE_APPEND parameter input data without deleting old data.

//==same problem solve another way
//====LOCK_EX===

// file_put_contents($filename,"\nBanana", LOCK_EX); //LOCK_EX = LOCK EXCLUSIVE
//LOCK_EX working like FILE_APPEND but main difference is LOCK_EX is use when many user input data in one file.

//===using both parameter===LOCK_EX and FILE_APPEND===
file_put_contents($filename,"\naRIFUL", FILE_APPEND | LOCK_EX);