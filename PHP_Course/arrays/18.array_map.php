<?php



$a =[ 1,2,3,4];
$name = ["Sanjay","Raj","Mohan","kislay"];
$b = ["a"=> "Sanjay","b"=>"Raj"];

$newArray =  array_map('square',$a,$name); 
// $newArray =  array_map(null,$a,$name); 
// $newArray =  array_map('convert',$b); 

function square($n,$m){
    return [$n => $m];
    }
// function convert($b){
//     return strtoupper($b);
//     }

echo"<pre>";
print_r($newArray);
echo"</pre>";

?>