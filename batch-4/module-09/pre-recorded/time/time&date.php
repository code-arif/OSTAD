<?php

//====find timezoon time
/*
echo time()."\n"; //unix timestamp
$mkGmtTime = gmmktime(0,0,0,8,20,2024) . "\n"; //gmt format
echo $mkGmtTime;
date_default_timezone_set("Asia/Dhaka");
$mkLoclaTime =  mktime(0,0,0,8,20,2024) . "\n"; //local machine time
echo $mkLoclaTime;
$minusTime = $mkGmtTime - $mkLoclaTime;
echo $minusTime / 3600;
*/

//====2024 january - 20 August 2024 day count
/*
date_default_timezone_set('Asia/Dhaka');
$jauary = mktime(0,0,0,1,1,2024);
$august = mktime(0,0,0,8,20,2024);
$dayCount = $august - $jauary;
echo $dayCount / (24*60*60);
*/
