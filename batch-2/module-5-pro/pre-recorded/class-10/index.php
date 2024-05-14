<?php
// session_start();
// $_SESSION['name' ] = 'Ariful';
// echo $_SESSION["name"];
// session_destroy();


// $_SESSION['counter'] = $_SESSION['counter'] ?? 0; //php Null coalescing operator
// $_SESSION['counter']++;
// echo $_SESSION['counter'];



//===we can set session name and cookies life time
session_name('my_application');
session_start([
    'cookie_lifetime' => 60
]);
$_SESSION['name'] = 'Ahsanullah';
echo $_SESSION['name'];