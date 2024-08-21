<?php
//local timezone set
// date_default_timezone_set("Asia/Dhaka");
date_default_timezone_set("UTC");

// echo date('Y-m-d | H:i:s', 0);
echo time();

//====capital leter format
// echo date('y/M/d'); 
//output 24/Aug/20. Month name short form

// echo date('d/F/y');
//output 20/August/24. month name full form

// echo date('d/F/Y');
//output 20/August/2024. month and year full form.

//====Suffix format
// echo date('dS M, Y');
//output 20th Aug, 2024. th is suffix.

//===date with time
// echo date('dS F, Y H:i:s A'); //small a = am and capital A = AM
//output 
//20th August, 2024 07:15:05 am
//20th August, 2024 07:15:10 AM

//day count
// echo date('z'); 
// output 232

//====time extends
// echo date('dS F, Y H:i:s A', time()+14*60*60);
//output
// 21st August, 2024 01:27:16 AM