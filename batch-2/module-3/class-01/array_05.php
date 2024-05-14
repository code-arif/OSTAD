<?php
//Array Information function

//01. count() -- count the numbers of element in an array.
$fruits = ['Jackfruit','Mango','Apple','Orange','Plum'];
// echo count($fruits);

//02. sizeof() -- An alice of count. sizeof() also count the number of element in array like count().

// echo sizeof($fruits);

//03. array_sum() -- addition all value an array
$add = [2,7,6,9,70];
// echo array_sum($add);

//04. array_product -- multiply all value an array.
// echo array_product($add);

//05. in_array() -- Check if a value exist in an array
$check = in_array(8,$add);
// echo $check;
if($check){
    // echo "Found";
}else{
    // echo "Not found";
}

//06. is_array() -- Check if a variable is an array
$arr = ['5', 'ariful','48','Zahid'];
$check = is_array($arr);
// echo $check;

//07. array_key_exist() -- Check if a key exist in an associative array
$myself=['name'=>"md. Ariful islam",'age'=> "23",
'brand'=>"code_arif",'aim'=>"Create a tech platform"];
$check = array_key_exists('name',$myself);
echo $check;

//08. array_search() -- search key by value
$check = array_search('code_arif',$myself);
// echo $check;