<?php
date_default_timezone_set('UTC');
echo strtotime("January 1, 2024") . "\n"; //it returns Jan 1, 1970 to Jan 1, 2024's timestamp

//for asia/dhaka
date_default_timezone_set('Asia/Dhaka');
echo strtotime("January 1, 2024") . "\n"; //it returns Jan 1, 1970 to Jan 1, 2024's timestamp according to Asin/Dhaka timezone

//for asia/tokyo
date_default_timezone_set('Asia/Tokyo');
echo strtotime("January 1, 2024") . "\n"; //it returns Jan 1, 1970 to Jan 1, 2024's timestamp according to Asin/Dhaka timezone
