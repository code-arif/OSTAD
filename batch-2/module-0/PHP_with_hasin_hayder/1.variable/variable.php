<?php 
	//we can declare vairable in 4 type of case
	// =============1. Camel case==============
	// $myName = "MD. Ariful Islam";
	// echo $myName;

	//================2.Snake Case: Here we have to use underscore============
	// $user_name = "ahsanullah";
	// echo $user_name

	//================= 3.Pascal Case:The first letter of all words is capitalized.==========
	// $MyName = "Md. Ariful Islam";
	// echo $MyName;

	//==================4.All Uppercase===============
	// $MY_NAME = "Md. Ariful Islam";
	// echo $MY_NAME;


	/////=======print output=========/////
	$name = "Md. Ariful Islam";
	$age  = 22;
	echo 'Name: $name'; //Variables cannot be printed within single quotations...

	// The variable perfectly can be printed in two ways
	// 1. // echo "My name is " .$name. " and I'm " .$age. " years old";
	//2. // echo "My name is {$name}. And I'm {$age} years old"; //recommended
?>