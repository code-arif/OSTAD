<?php
//if else
$score = 70;
//condition
if($score >= 80){
    echo 'Score is A+';
}else if($score <= 79 && $score >= 69){
    echo 'Score is A';
}else if($score <= 69 && $score >= 59){
    echo 'Score is A-';
}else if($score <= 59 && $score >= 49){
    echo 'Score is B';
}else if($score <= 49 && $score >= 39){
    echo 'Score is B-';
}else if($score <= 39 && $score >= 33){
    echo 'Score is C';
}else{
    echo 'fail';
}


?>