<?php
//unix epoch = 1 january 1970
//unix timespamp

// echo time();
// echo date('d/F/Y');
// echo date('d/F/y');
// echo date('d/m/y')

//echo microtime(true);
// echo microtime(false);

// $mt = microtime(false);
// printf('%10.28f', $mt);

//====small time exectution programme
$startTime = microtime(true);
$endTime = microtime(true);
factorial(1000);
sleep(5); //programme sleep for 5 seconds
$ececutionTime = $endTime - $startTime;
printf("%10.8f", $ececutionTime);

function factorial($n){
    $result = 1;
    for($i = 1; $i <= $n; $i++){
        $result *= $i;
    }
    return $result;
    // echo $result;
}
factorial(100000);