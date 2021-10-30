<?php

$name = ["Sanjay","Raj","Mohan","kislay"];
$a =[ 1,2,3,4];
// $b = ["a"=> "Sanjay","b"=>"Raj"];


function reduceFun($a,$b){
    return $a += $b;
    // return $a."-".$b;
}

$newValue = array_reduce($a,"reduceFun",1);
// $newValue = array_reduce($name,"reduceFun","lemon");



echo"<pre>";
print_r($newValue);
echo"</pre>";

?>