<?php

// $name = ["Sanjay","Raj","Mohan","kislay"];
$a = ["a"=> "Sanjay","b"=>"Raj","c"=>"Mohan"];


// array_walk($a,"myFunc","is a key of");

// function myFunc($v,$k,$para){
//     echo "$v:$para $k";
//     echo "<br/>";
// }

//* array_walk_recursive
$a = ["a"=> "Sanjay","b"=>"Raj"];
$b = ["a"=> "Salman","b"=>"khan"];
$c = ["a"=> "Raj","b"=>"Kumar"];
$multi = [$a,$b,$c];

function myFunc($v,$k,$para){
    echo "$v :=> $para :=>$k";
    echo "<br/>";
}

array_walk_recursive($multi,"myFunc","is a key of");

?>